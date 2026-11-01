/**
 * What npm publishes is not what git tracks. `files` in package.json is an
 * allowlist of PATHS, and everything sitting under an allowed directory goes
 * with it - including whatever the working tree happens to be carrying.
 *
 * v2.7.0 shipped two `scripts/__pycache__/*.pyc` files for exactly that reason:
 * .gitignore keeps them out of git, and npm does not read .gitignore when
 * `files` is present. Publishing from a different machine would have produced a
 * different tarball, silently.
 *
 * This asserts the published set from the same command the registry sees.
 */
import { test } from 'node:test';
import assert from 'node:assert/strict';
import { run } from '../helpers/run.mjs';

const manifest = (() => {
  const r = run('npm', ['pack', '--dry-run', '--json']);
  if (r.status !== 0) throw new Error(`npm pack failed:\n${r.stderr}`);
  // npm prints notices on stderr and the JSON document on stdout
  return JSON.parse(r.stdout)[0];
})();
const packed = manifest.files.map(f => f.path);

test('the tarball carries no build junk from whoever ran publish', () => {
  const junk = packed.filter(p =>
    p.includes('__pycache__') || p.endsWith('.pyc') ||
    p.endsWith('.DS_Store') || p.includes('node_modules/') || p.endsWith('.tgz'));
  assert.deepEqual(junk, [], `junk in the published package:\n  ${junk.join('\n  ')}`);
});

test('the tarball carries everything a consumer needs', () => {
  // Each of these has a reason: the CLI is the entry point, the doctrine skill
  // is what a plugin install loads instead of CLAUDE.md, and the legal and
  // history files are what a package is judged by before anyone reads the code.
  for (const required of [
    'package.json', 'README.md', 'LICENSE', 'CHANGELOG.md', 'CONTRIBUTING.md',
    'CLAUDE.md', 'bin/cli.js',
    '.claude/skills/design-doctrine/SKILL.md',
    // /gate was a command until 2026-10-05 and is a skill now, so it has a
    // CLAUDE_SKILL_DIR of its own and its paths resolve under a plugin install.
    '.claude/skills/gate/SKILL.md',
    // The critic was never in the package at all: `files` had no .claude/agents
    // entry, so every npm consumer got a /critique that delegates to an agent
    // that was not shipped.
    '.claude/agents/design-critic.md',
    '.claude/rules/components.md',
    'tokens/colors.json',
    'examples/index.html',
    'templates/product-design/design-tokens.json',
    // The library is fetched on demand, so these two are what make it usable:
    // the index names every spec with its sha256, the loader fetches one.
    'design-systems/library.json', 'scripts/library.mjs',
  ]) {
    assert.ok(packed.includes(required), `the package is missing ${required}`);
  }
});

test('the tarball is not accidentally huge', () => {
  // A design kit is text. If this jumps, something binary crept in.
  // The file count is a weak tripwire - it was `< 400` and the package reached
  // exactly 400 by adding AGENTS.md and two scripts, all of it text. Raised, and
  // backed by the two assertions that actually catch a binary: total bytes, and
  // no single file larger than a long markdown document.
  //
  // 3.0.0 grew the library to 2,144 specs, 26MB, and stopped shipping it: an
  // install carries the index and fetches a spec when one is used. One spec in
  // the tarball means the exclusion in package.json stopped matching.
  const library = packed.filter(p => p.startsWith('design-systems/library/'));
  assert.deepEqual(library.slice(0, 5), [],
    `the package ships ${library.length} file(s) from design-systems/library/`);

  assert.ok(manifest.files.length > 250 && manifest.files.length < 500,
    `unexpected file count: ${manifest.files.length}`);

  const MB = 1024 * 1024;
  const bytes = manifest.files.reduce((n, f) => n + f.size, 0);
  assert.ok(bytes < 12 * MB,
    `${(bytes / MB).toFixed(1)}MB unpacked - a text kit should not reach 12MB`);

  // The library index is the one large text file: a description and a sha256
  // for each of 2,144 specs, 1,013kB when it was added. It is generated, and
  // tests/meta/registry.test.mjs holds it to the specs, so it gets its own bound.
  const INDEX = 'design-systems/library.json';
  const index = manifest.files.find(f => f.path === INDEX);
  assert.ok(index && index.size < 2 * MB, `${INDEX} is ${index && (index.size / MB).toFixed(1)}MB`);

  const big = manifest.files
    .filter(f => f.size > 600 * 1024 && !f.path.startsWith('examples/thumbs/') && f.path !== INDEX)
    .map(f => `${f.path} (${(f.size / 1024).toFixed(0)}kB)`);
  assert.deepEqual(big, [],
    `a file this large is almost certainly binary:\n  ${big.join('\n  ')}`);
  assert.equal(packed.filter(p => p.startsWith('.github/images/')).length, 0,
    'README screenshots do not belong in a consumer install');
});
