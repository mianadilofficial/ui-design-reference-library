/**
 * Gemini CLI and Antigravity, from the files they actually read.
 *
 * Both read GEMINI.md and a workspace's .agents/skills/<name>/SKILL.md. Neither
 * expands ${CLAUDE_SKILL_DIR}: Gemini CLI hands a skill body to the model as it
 * is (read in its source, 0.65.0: `skill.body`, no substitution outside
 * extensions), and Antigravity tells the model to open the SKILL.md with
 * view_file. A skill copied across unchanged would point every path at a
 * variable nobody fills in. So each skill is ported: the path rewritten for
 * where it lands, and the two skills that only work inside Claude Code left out.
 *
 * The Gemini CLI extension is the other route. Extension skills are the one
 * place Gemini does substitute, `${extensionPath}`, so the extension build
 * rewrites to that instead. It cannot live at the repository root as skills/:
 * Claude Code loads a plugin's root skills/ in addition to the path plugin.json
 * names (measured with `claude plugin details`, 2.1.310), and every plugin user
 * would get each skill twice, half of them broken. It is built into a release
 * asset, which `gemini extensions install <github url>` prefers to the source.
 */
import { test, before, after } from 'node:test';
import assert from 'node:assert/strict';
import { spawnSync } from 'node:child_process';
import { mkdtempSync, rmSync, readFileSync, readdirSync, existsSync, statSync } from 'node:fs';
import { tmpdir } from 'node:os';
import { join } from 'node:path';
import { createRequire } from 'node:module';
import { run, ROOT } from '../helpers/run.mjs';

const require = createRequire(import.meta.url);
const { portSkill, CLAUDE_ONLY, RENAMED } = require('../../bin/port-skills.js');

const SKILLS = join(ROOT, '.claude/skills');
const names = readdirSync(SKILLS).filter(n => existsSync(join(SKILLS, n, 'SKILL.md')));
const ported = names.filter(n => !(n in CLAUDE_ONLY));
const REF = /\$\{CLAUDE_SKILL_DIR\}\/\.\.\/\.\.\/\.\.\/([A-Za-z0-9_./*-]*[A-Za-z0-9_*])/g;

/** Every kit path a skill names, as this surface ships it. */
const refsOf = (name) => [...readFileSync(join(SKILLS, name, 'SKILL.md'), 'utf8').matchAll(REF)]
  .map(m => m[1].includes('*') ? m[1].split('*')[0] : m[1])
  .map(rel => RENAMED[rel] || rel);

let work;
before(() => { work = mkdtempSync(join(tmpdir(), 'ds-gemini-')); });
after(() => { if (work) rmSync(work, { recursive: true, force: true }); });

test('only the skills that need Claude Code are left out, each with a reason', () => {
  assert.deepEqual(Object.keys(CLAUDE_ONLY).sort(), ['critique', 'observe', 'scaffold-project']);
  for (const [n, why] of Object.entries(CLAUDE_ONLY)) {
    assert.ok(names.includes(n), `${n} is listed as Claude-only but no such skill exists`);
    assert.ok(why.length > 20, `${n} has no reason`);
  }
  assert.ok(ported.length >= 23, `only ${ported.length} skills would be ported`);
});

test('a ported skill names no variable the reader will not fill in', () => {
  for (const base of ['', '${extensionPath}/']) {
    for (const n of ported) {
      const out = portSkill(readFileSync(join(SKILLS, n, 'SKILL.md'), 'utf8'), base);
      assert.doesNotMatch(out, /\$\{CLAUDE_SKILL_DIR\}/, `${n} still says \${CLAUDE_SKILL_DIR}`);
      assert.doesNotMatch(out, /\$ARGUMENTS/, `${n} still says $ARGUMENTS`);
      assert.match(out, /^---\n(?:[\s\S]*?\n)?name: /, `${n} lost its frontmatter`);
    }
  }
});

test('the port refuses a skill-dir path it does not understand', () => {
  assert.throws(() => portSkill('---\nname: x\ndescription: y\n---\nsee ${CLAUDE_SKILL_DIR}/../x\n', ''),
    /CLAUDE_SKILL_DIR/);
});

let project;
test('init --agent gemini installs GEMINI.md and the ported skills, nothing Claude-only', () => {
  project = join(work, 'proj');
  const r = run('node', ['bin/cli.js', 'init', project, '--agent', 'gemini']);
  assert.equal(r.status, 0, r.out);
  assert.ok(existsSync(join(project, 'GEMINI.md')), 'no GEMINI.md');
  for (const absent of ['CLAUDE.md', 'AGENTS.md', '.claude/skills', '.claude/agents', 'design-systems/library']) {
    assert.equal(existsSync(join(project, absent)), false, `init --agent gemini wrote ${absent}`);
  }
  const got = readdirSync(join(project, '.agents/skills')).sort();
  assert.deepEqual(got, [...ported].sort());
  assert.match(r.out, /trust/i, 'the closing line does not say workspace skills need a trusted folder');
});

test('antigravity is the same surface', () => {
  const dir = join(work, 'ag');
  const r = run('node', ['bin/cli.js', 'init', dir, '--agent', 'antigravity']);
  assert.equal(r.status, 0, r.out);
  assert.equal(readFileSync(join(dir, 'GEMINI.md'), 'utf8'), readFileSync(join(project, 'GEMINI.md'), 'utf8'));
  assert.deepEqual(readdirSync(join(dir, '.agents/skills')).sort(), [...ported].sort());
});

test('every path a ported skill names exists in the project it was installed into', () => {
  // A workspace path has no prefix to find it by, so port once more with a
  // marker as the base: every marked path is one the rewrite produced, and each
  // must exist. The installed file must be that same port with no marker.
  const MARK = '@@KIT@@/';
  const missing = [];
  let checked = 0;
  for (const n of ported) {
    const src = readFileSync(join(SKILLS, n, 'SKILL.md'), 'utf8');
    assert.equal(readFileSync(join(project, '.agents/skills', n, 'SKILL.md'), 'utf8'), portSkill(src, ''),
      `${n} was not installed as ported`);
    for (const m of portSkill(src, MARK).matchAll(/@@KIT@@\/([A-Za-z0-9_./*-]*[A-Za-z0-9_*])/g)) {
      const rel = m[1].includes('*') ? m[1].split('*')[0] : m[1];
      checked++;
      if (!existsSync(join(project, rel))) missing.push(`${n}: ${rel}`);
    }
  }
  assert.ok(checked > 150, `only ${checked} references checked`);
  assert.deepEqual(missing, []);
});

test('GEMINI.md carries the whole AGENTS.md doctrine and fits what Antigravity reads', () => {
  const brief = readFileSync(join(project, 'GEMINI.md'), 'utf8');
  const agents = readFileSync(join(ROOT, 'AGENTS.md'), 'utf8');
  const doctrine = agents.slice(agents.indexOf('\n---\n'));
  assert.ok(brief.endsWith(doctrine), 'GEMINI.md does not carry AGENTS.md from its first rule on');
  assert.match(brief, /relative to the project root/);
  // Antigravity truncates a rule file at 24,000 bytes (its documentation).
  assert.ok(Buffer.byteLength(brief) < 24000, `GEMINI.md is ${Buffer.byteLength(brief)} bytes`);
});

test('the docs state the ported-skill count the port produces', () => {
  let claims = 0;
  for (const f of ['README.md', 'docs/INSTALL.md', 'docs/INSTALL.th.md', 'docs/AGENTS-SETUP.md']) {
    const text = readFileSync(join(ROOT, f), 'utf8');
    for (const m of text.matchAll(/(\d+) ported skills|skill ที่แปลงแล้ว (\d+) ตัว/g)) {
      claims++;
      assert.equal(Number(m[1] || m[2]), ported.length, `${f} says "${m[0]}", the port produces ${ported.length}`);
    }
  }
  assert.ok(claims >= 3, `only ${claims} claim(s) found; the docs no longer state the count`);
});

/* ------------------------------------------------------- the extension */

let ext;
test('the extension build is a complete Gemini CLI extension', { timeout: 300000 }, () => {
  ext = join(work, 'ext');
  const tgz = join(work, 'ux-ui-agent-skills-gemini.tar.gz');
  const r = run('node', ['scripts/build_gemini_extension.mjs', '--out', ext, '--tar', tgz], { timeout: 300000 });
  assert.equal(r.status, 0, r.out);
  assert.ok(statSync(tgz).size > 0, 'no archive');

  const manifest = JSON.parse(readFileSync(join(ext, 'gemini-extension.json'), 'utf8'));
  const pkg = JSON.parse(readFileSync(join(ROOT, 'package.json'), 'utf8'));
  assert.equal(manifest.name, 'ux-ui-agent-skills');
  assert.equal(manifest.version, pkg.version);
  assert.equal(manifest.contextFileName, 'GEMINI.md');
  assert.ok(existsSync(join(ext, 'GEMINI.md')));
  const server = manifest.mcpServers['ux-ui-agent-skills'];
  assert.equal(server.command, 'node');
  assert.deepEqual(server.args, ['${extensionPath}${/}mcp${/}server.mjs']);
  assert.ok(existsSync(join(ext, 'mcp/server.mjs')));

  for (const absent of ['.claude/skills', 'design-systems/library', 'CLAUDE.md']) {
    assert.equal(existsSync(join(ext, absent)), false, `the extension carries ${absent}`);
  }
  assert.deepEqual(readdirSync(join(ext, 'skills')).sort(), [...ported].sort());
});

test('every path an extension skill names exists in the extension', () => {
  const missing = [];
  for (const n of ported) {
    const text = readFileSync(join(ext, 'skills', n, 'SKILL.md'), 'utf8');
    for (const rel of refsOf(n)) {
      if (!text.includes('${extensionPath}/' + rel)) missing.push(`${n}: ${rel} not rewritten`);
      else if (!existsSync(join(ext, rel))) missing.push(`${n}: ${rel}`);
    }
  }
  assert.deepEqual(missing, []);
});

test('the extension\'s MCP server answers a handshake from inside the extension', () => {
  const r = spawnSync('node', [join(ext, 'mcp/server.mjs')], {
    input: JSON.stringify({ jsonrpc: '2.0', id: 1, method: 'initialize', params: { protocolVersion: '2025-06-18' } }) + '\n',
    encoding: 'utf8', timeout: 30000,
  });
  const reply = JSON.parse(r.stdout.split('\n')[0]);
  assert.equal(reply.result.serverInfo.name, 'ux-ui-agent-skills', r.stderr);
});

test('the release attaches the extension as its only asset', () => {
  // Gemini CLI installs a release asset only when it is the single generic one;
  // with two it falls back to the source tarball, which has no skills/.
  const yml = readFileSync(join(ROOT, '.github/workflows/release.yml'), 'utf8');
  const uploads = [...yml.matchAll(/gh release upload\s+"\$TAG"\s+(\S+)/g)].map(m => m[1]);
  assert.deepEqual(uploads, ['ux-ui-agent-skills-gemini.tar.gz']);
  assert.match(yml, /build_gemini_extension\.mjs --tar ux-ui-agent-skills-gemini\.tar\.gz/);
  assert.doesNotMatch('ux-ui-agent-skills-gemini.tar.gz', /darwin|linux|win32/);
});
