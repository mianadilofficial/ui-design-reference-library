/**
 * The design-system library, as an npm user receives it.
 *
 * 3.0.0 grew the library to 2,144 specs, 26MB of markdown. Shipped whole, the
 * package carried every one of them and `init` copied every one into a project
 * that would use one or two. The package now carries an index with a sha256
 * per spec, and a spec is fetched the first time something asks for it.
 *
 * Everything here runs against the tarball `npm pack` produces, unpacked, not
 * against the repo: the repo has every spec on disk, so a test run from it
 * would pass whether or not the on-demand path works. The network is a local
 * server that can serve a spec intact, altered by one byte, or not at all, so
 * the refusal is tested as hard as the success.
 */
import { test, before, after } from 'node:test';
import assert from 'node:assert/strict';
import { spawn } from 'node:child_process';
import { createServer } from 'node:http';
import { mkdtempSync, rmSync, readFileSync, existsSync, writeFileSync, mkdirSync, readdirSync, statSync } from 'node:fs';
import { tmpdir } from 'node:os';
import { join } from 'node:path';
import { run, ROOT } from '../helpers/run.mjs';

const INDEX = JSON.parse(readFileSync(join(ROOT, 'design-systems/library.json'), 'utf8'));
const SPEC = (slug) => readFileSync(join(ROOT, 'design-systems/library', slug, 'DESIGN.md'));

let work, pkg;

before(() => {
  work = mkdtempSync(join(tmpdir(), 'ds-lib-'));
  const p = run('npm', ['pack', '--pack-destination', work, '--json'], { timeout: 300000 });
  assert.equal(p.status, 0, `npm pack failed:\n${p.out}`);
  const tgz = join(work, JSON.parse(p.stdout)[0].filename);
  const x = run('tar', ['-xzf', tgz, '-C', work]);
  assert.equal(x.status, 0, `could not unpack the tarball:\n${x.out}`);
  pkg = join(work, 'package');
});

after(() => {
  if (work) rmSync(work, { recursive: true, force: true });
});

/* spawnSync would block the event loop the test server answers on. */
function go(cmd, args, { cwd = ROOT, env = {}, input } = {}) {
  return new Promise((done) => {
    const p = spawn(cmd, args, { cwd, env: { ...process.env, ...env } });
    let out = '';
    p.stdout.on('data', d => { out += d; });
    p.stderr.on('data', d => { out += d; });
    if (input !== undefined) p.stdin.end(input);
    p.on('close', status => done({ status, out }));
  });
}

/** A mirror laid out like the repository. `mode(slug)` picks good, tamper or missing. */
async function mirror(mode = () => 'good') {
  const hits = [];
  const server = createServer((req, res) => {
    hits.push(req.url);
    const m = req.url.match(/^\/([^/]+)\/design-systems\/library\/([a-z0-9-]+)\/DESIGN\.md$/);
    const file = m && join(ROOT, 'design-systems/library', m[2], 'DESIGN.md');
    const how = m && mode(m[2]);
    if (!m || m[1] !== INDEX.ref || !existsSync(file) || how === 'missing') {
      res.writeHead(404).end('not found');
      return;
    }
    const body = readFileSync(file);
    res.writeHead(200, { 'content-type': 'text/markdown' });
    res.end(how === 'tamper' ? Buffer.concat([body, Buffer.from(' ')]) : body);
  });
  await new Promise(r => server.listen(0, '127.0.0.1', r));
  const base = `http://127.0.0.1:${server.address().port}`;
  return { base, hits, close: () => new Promise(r => server.close(r)) };
}

/** A port nothing listens on: any request to it fails. */
const DEAD = 'http://127.0.0.1:9';

function project(name) {
  const dir = join(work, name);
  mkdirSync(dir, { recursive: true });
  return dir;
}

function du(dir) {
  let bytes = 0, files = 0;
  (function walk(d) {
    for (const e of readdirSync(d, { withFileTypes: true })) {
      const p = join(d, e.name);
      if (e.isDirectory()) walk(p);
      else { bytes += statSync(p).size; files++; }
    }
  })(dir);
  return { bytes, files };
}

test('the package carries the index, not the specs', () => {
  assert.ok(existsSync(join(pkg, 'design-systems/library.json')), 'the index is not in the package');
  assert.ok(existsSync(join(pkg, 'scripts/library.mjs')), 'the loader is not in the package');
  assert.equal(existsSync(join(pkg, 'design-systems/library')), false,
    'the package still ships design-systems/library/');
});

test('init installs no spec, and the index that names all of them', async () => {
  const dir = project('init');
  const r = await go('node', [join(pkg, 'bin/cli.js'), 'init', dir]);
  assert.equal(r.status, 0, r.out);
  assert.equal(existsSync(join(dir, 'design-systems/library')), false,
    'init copied design-systems/library/ into the project');
  assert.ok(existsSync(join(dir, 'design-systems/library.json')), 'init did not install the index');
  assert.match(r.out, /library get/, 'init does not say how a spec is fetched');
  // Measured on 2026-10-25: 36MB and 2,406 files when init copied the library.
  const { bytes } = du(dir);
  assert.ok(bytes < 12 * 1024 * 1024, `init wrote ${(bytes / 1048576).toFixed(1)}MB`);
});

test('init from a clone that carries the library still installs no spec', async () => {
  const dir = project('init-from-repo');
  const r = await go('node', [join(ROOT, 'bin/cli.js'), 'init', dir]);
  assert.equal(r.status, 0, r.out);
  assert.equal(existsSync(join(dir, 'design-systems/library')), false,
    'init from the repo copied the library; the two installs must not differ');
});

test('the counts come from the index when no spec is on disk', async () => {
  const n = Object.keys(INDEX.systems).length;
  const r = await go('node', [join(pkg, 'bin/cli.js'), 'list']);
  assert.match(r.out, new RegExp(`${n.toLocaleString('en-US')}-system library`),
    `list does not report the ${n} systems the index holds:\n${r.out}`);

  const dir = project('py');
  await go('node', [join(pkg, 'bin/cli.js'), 'init', dir]);
  const cats = await go('python3', [join(dir, 'scripts/design_systems.py'), 'categories']);
  assert.match(cats.out, new RegExp(`Total: ${n} systems`), cats.out);
  const hit = await go('python3', [join(dir, 'scripts/design_systems.py'), 'search', 'stripe']);
  assert.match(hit.out, /^\s+stripe\s/m, `search cannot find stripe without the spec on disk:\n${hit.out}`);
  const show = await go('python3', [join(dir, 'scripts/design_systems.py'), 'show', 'stripe']);
  assert.equal(show.status, 0, show.out);
  assert.match(show.out, /library\.mjs get stripe/, `show does not say how to fetch it:\n${show.out}`);
});

test('get fetches a spec, checks it, and writes it where the skills read it', async () => {
  const m = await mirror();
  try {
    const dir = project('get');
    const r = await go('node', [join(pkg, 'bin/cli.js'), 'library', 'get', 'stripe'],
      { cwd: dir, env: { UX_UI_LIBRARY_BASE: m.base } });
    assert.equal(r.status, 0, r.out);
    const out = join(dir, 'design-systems/library/stripe/DESIGN.md');
    assert.ok(existsSync(out), `nothing written:\n${r.out}`);
    assert.ok(readFileSync(out).equals(SPEC('stripe')), 'the written spec differs from the repo');
    assert.match(r.out, /sha256/, 'get does not say it verified the file');
    assert.ok(r.out.includes(out), 'get does not print the path it wrote');
    assert.deepEqual(m.hits, [`/${INDEX.ref}/design-systems/library/stripe/DESIGN.md`],
      'get asked for something other than the one spec, at the index ref');

    const again = await go('node', [join(pkg, 'bin/cli.js'), 'library', 'get', 'stripe'],
      { cwd: dir, env: { UX_UI_LIBRARY_BASE: DEAD } });
    assert.equal(again.status, 0, `a spec already present needed the network:\n${again.out}`);
  } finally { await m.close(); }
});

test('a spec altered by one byte is refused and nothing is written', async () => {
  const m = await mirror(() => 'tamper');
  try {
    const dir = project('tamper');
    const r = await go('node', [join(pkg, 'scripts/library.mjs'), 'get', 'stripe', '--into', dir],
      { env: { UX_UI_LIBRARY_BASE: m.base } });
    assert.equal(r.status, 1, r.out);
    assert.match(r.out, /sha256/, `the refusal does not name the check:\n${r.out}`);
    assert.equal(existsSync(join(dir, 'design-systems/library/stripe')), false,
      'a spec that failed its check was written anyway');
  } finally { await m.close(); }
});

test('a source that fails or lies falls through to the next', async () => {
  const bad = await mirror(() => 'tamper');
  const gone = await mirror(() => 'missing');
  const good = await mirror();
  try {
    const dir = project('fallback');
    const r = await go('node', [join(pkg, 'scripts/library.mjs'), 'get', 'stripe', '--into', dir],
      { env: { UX_UI_LIBRARY_BASE: [DEAD, gone.base, bad.base, good.base].join(',') } });
    assert.equal(r.status, 0, r.out);
    assert.ok(readFileSync(join(dir, 'design-systems/library/stripe/DESIGN.md')).equals(SPEC('stripe')));
  } finally { await Promise.all([bad.close(), gone.close(), good.close()]); }
});

test('a name the index does not hold never reaches the network', async () => {
  const m = await mirror();
  try {
    const dir = project('unknown');
    for (const name of ['definitely-not-a-system', '../../etc/passwd', 'Stripe', '']) {
      const r = await go('node', [join(pkg, 'scripts/library.mjs'), 'get', name, '--into', dir],
        { env: { UX_UI_LIBRARY_BASE: m.base } });
      assert.notEqual(r.status, 0, `"${name}" was accepted:\n${r.out}`);
    }
    assert.deepEqual(m.hits, [], 'an unknown name produced a request');
    assert.equal(existsSync(join(dir, 'design-systems')), false, 'an unknown name wrote something');
  } finally { await m.close(); }
});

test('an edited spec is left alone unless --force', async () => {
  const m = await mirror();
  try {
    const dir = project('edited');
    const out = join(dir, 'design-systems/library/stripe/DESIGN.md');
    mkdirSync(join(dir, 'design-systems/library/stripe'), { recursive: true });
    writeFileSync(out, 'my own notes\n');
    const r = await go('node', [join(pkg, 'scripts/library.mjs'), 'get', 'stripe', '--into', dir],
      { env: { UX_UI_LIBRARY_BASE: m.base } });
    assert.equal(r.status, 0, r.out);
    assert.equal(readFileSync(out, 'utf8'), 'my own notes\n', 'get overwrote an edited spec');
    assert.match(r.out, /--force/, 'get does not say how to replace it');

    const f = await go('node', [join(pkg, 'scripts/library.mjs'), 'get', 'stripe', '--into', dir, '--force'],
      { env: { UX_UI_LIBRARY_BASE: m.base } });
    assert.equal(f.status, 0, f.out);
    assert.ok(readFileSync(out).equals(SPEC('stripe')), '--force did not replace it');
  } finally { await m.close(); }
});

test('a kit that carries the library copies from it with no network', async () => {
  const dir = project('local');
  const r = await go('node', [join(ROOT, 'scripts/library.mjs'), 'get', 'stripe', 'apple', '--into', dir],
    { env: { UX_UI_LIBRARY_BASE: DEAD } });
  assert.equal(r.status, 0, r.out);
  for (const s of ['stripe', 'apple']) {
    assert.ok(readFileSync(join(dir, 'design-systems/library', s, 'DESIGN.md')).equals(SPEC(s)));
  }
});

test('pull fetches every spec the index names', { timeout: 300000 }, async () => {
  const m = await mirror();
  try {
    const dir = project('pull');
    const r = await go('node', [join(pkg, 'scripts/library.mjs'), 'pull', '--into', dir],
      { env: { UX_UI_LIBRARY_BASE: m.base } });
    assert.equal(r.status, 0, r.out.slice(-2000));
    const got = readdirSync(join(dir, 'design-systems/library'))
      .filter(s => existsSync(join(dir, 'design-systems/library', s, 'DESIGN.md')));
    assert.equal(got.length, Object.keys(INDEX.systems).length);
  } finally { await m.close(); }
});

/** Speak to the packaged MCP server over stdio and return the reply to `id: 2`. */
function mcp(env, args) {
  return new Promise((done, fail) => {
    const p = spawn('node', [join(pkg, 'mcp/server.mjs')], { env: { ...process.env, ...env } });
    let buf = '';
    p.stdout.on('data', d => {
      buf += d;
      for (const line of buf.split('\n')) {
        if (!line.trim()) continue;
        const msg = JSON.parse(line);
        if (msg.id === 2) { p.stdin.end(); done(msg.result); }
      }
    });
    p.on('error', fail);
    p.stdin.write(JSON.stringify({ jsonrpc: '2.0', id: 1, method: 'initialize', params: { protocolVersion: '2025-06-18' } }) + '\n');
    p.stdin.write(JSON.stringify({ jsonrpc: '2.0', id: 2, method: 'tools/call', params: { name: 'get_design_system', arguments: args } }) + '\n');
  });
}

test('the packaged MCP server fetches a spec once, then serves it from cache', async () => {
  const cache = project('cache');
  const m = await mirror();
  try {
    const list = await mcp({ XDG_CACHE_HOME: cache, UX_UI_LIBRARY_BASE: DEAD }, {});
    const n = Object.keys(INDEX.systems).length;
    assert.match(list.content[0].text, new RegExp(`^${n} systems`), 'the list is not the index');

    const first = await mcp({ XDG_CACHE_HOME: cache, UX_UI_LIBRARY_BASE: m.base }, { name: 'stripe' });
    assert.notEqual(first.isError, true, first.content[0].text);
    assert.equal(first.content[0].text, SPEC('stripe').toString('utf8'));
  } finally { await m.close(); }

  const cached = await mcp({ XDG_CACHE_HOME: cache, UX_UI_LIBRARY_BASE: DEAD }, { name: 'stripe' });
  assert.equal(cached.content[0].text, SPEC('stripe').toString('utf8'), 'the second read needed the network');
});

test('the packaged MCP server refuses an altered spec', async () => {
  const m = await mirror(() => 'tamper');
  try {
    const r = await mcp({ XDG_CACHE_HOME: project('cache-tamper'), UX_UI_LIBRARY_BASE: m.base }, { name: 'apple' });
    assert.equal(r.isError, true, 'an altered spec was returned');
    assert.match(r.content[0].text, /sha256/);
  } finally { await m.close(); }
});
