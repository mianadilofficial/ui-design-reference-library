#!/usr/bin/env node
/**
 * Build the Gemini CLI extension, the release asset `gemini extensions install
 * https://github.com/plugin87/ux-ui-agent-skills` installs.
 *
 *   node scripts/build_gemini_extension.mjs --out <dir> [--tar <file.tar.gz>]
 *
 * The extension is the npm package's file set, so it carries what an npm user
 * gets and nothing else: the index of the design-system library, not the specs,
 * which the MCP server and scripts/library.mjs fetch on use. To that it adds:
 *
 *   gemini-extension.json  the manifest, with the kit's MCP server
 *   GEMINI.md              AGENTS.md's doctrine, its paths made relative to the extension
 *   skills/<name>/SKILL.md each skill ported to ${extensionPath}, which Gemini CLI
 *                          expands in extension skills and nowhere else
 *
 * and leaves out what a Gemini user cannot use: the Claude Code skills, the two
 * Claude briefs, and the npm installer.
 *
 * Why a release asset and not files in the repository: Claude Code loads a
 * plugin's root skills/ as well as the path plugin.json names, so a skills/ at
 * the root would hand every plugin user each skill twice, half of them broken.
 * Gemini CLI installs a release's asset when it is the only generic one, so
 * .github/workflows/release.yml attaches exactly this archive.
 */
import { execFileSync } from 'node:child_process';
import { copyFileSync, existsSync, mkdirSync, readFileSync, readdirSync, writeFileSync } from 'node:fs';
import { createRequire } from 'node:module';
import { dirname, join, resolve } from 'node:path';
import { fileURLToPath } from 'node:url';

const ROOT = join(dirname(fileURLToPath(import.meta.url)), '..');
const require = createRequire(import.meta.url);
const { portSkill, geminiBrief, CLAUDE_ONLY } = require('../bin/port-skills.js');

const LEFT_OUT = [/^\.claude\/skills\//, /^CLAUDE\.md$/, /^AGENTS\.md$/, /^bin\//];

function args(argv) {
  const o = {};
  for (let i = 0; i < argv.length; i++) {
    if (argv[i] === '--out') o.out = argv[++i];
    else if (argv[i] === '--tar') o.tar = argv[++i];
    else throw new Error(`unknown argument: ${argv[i]}`);
  }
  if (!o.out && !o.tar) throw new Error('usage: build_gemini_extension.mjs --out <dir> [--tar <file.tar.gz>]');
  return o;
}

function build(out) {
  if (existsSync(out) && readdirSync(out).length) throw new Error(`${out} is not empty`);
  const pkg = JSON.parse(readFileSync(join(ROOT, 'package.json'), 'utf8'));

  // The same command the registry sees, so the two cannot carry different files.
  const packed = JSON.parse(execFileSync('npm', ['pack', '--dry-run', '--json'],
    { cwd: ROOT, maxBuffer: 1 << 26, stdio: ['ignore', 'pipe', 'ignore'] }).toString())[0].files;
  let n = 0;
  for (const { path: rel } of packed) {
    if (LEFT_OUT.some(re => re.test(rel))) continue;
    mkdirSync(dirname(join(out, rel)), { recursive: true });
    copyFileSync(join(ROOT, rel), join(out, rel));
    n++;
  }

  const manifest = {
    name: pkg.name,
    version: pkg.version,
    description: 'Design-system doctrine and the objective gates that check work against it: '
      + 'DTCG tokens, component specs, WCAG 2.2 accessibility, a design-system library, and gates '
      + 'that fail instead of claiming success.',
    contextFileName: 'GEMINI.md',
    mcpServers: {
      [pkg.name]: { command: 'node', args: ['${extensionPath}${/}mcp${/}server.mjs'] },
    },
  };
  writeFileSync(join(out, 'gemini-extension.json'), JSON.stringify(manifest, null, 2) + '\n');
  writeFileSync(join(out, 'GEMINI.md'),
    geminiBrief(readFileSync(join(ROOT, 'AGENTS.md'), 'utf8'), 'extension'));

  const skills = join(ROOT, '.claude', 'skills');
  let s = 0;
  for (const name of readdirSync(skills).sort()) {
    const file = join(skills, name, 'SKILL.md');
    if (name in CLAUDE_ONLY || !existsSync(file)) continue;
    mkdirSync(join(out, 'skills', name), { recursive: true });
    writeFileSync(join(out, 'skills', name, 'SKILL.md'), portSkill(readFileSync(file, 'utf8'), '${extensionPath}/'));
    s++;
  }
  console.log(`built ${out}: ${n} kit files, ${s} skills, gemini-extension.json ${pkg.version}`);
}

try {
  const o = args(process.argv.slice(2));
  const out = resolve(o.out || join(dirname(resolve(o.tar)), 'gemini-extension'));
  build(out);
  if (o.tar) {
    // Top-level entries by name, so the archive holds no "./" prefix and the
    // manifest lands at the root Gemini CLI looks in.
    execFileSync('tar', ['-czf', resolve(o.tar), '-C', out, ...readdirSync(out).sort()]);
    console.log(`archived ${resolve(o.tar)}`);
  }
} catch (e) {
  console.error(`build_gemini_extension: ${e.message}`);
  process.exitCode = 1;
}
