/**
 * The token-reference gate, after it was widened.
 *
 * It used to scan examples/golden and nothing else, so a var() pointing at a
 * token that does not exist survived anywhere else in the repo. That is how
 * `--space-7` reached the front door: the whole `gap` shorthand was invalid, the
 * stat labels collided, and every gate reported green.
 */
import { test } from 'node:test';
import assert from 'node:assert/strict';
import { mkdtempSync, writeFileSync, rmSync } from 'node:fs';
import { tmpdir } from 'node:os';
import { join } from 'node:path';
import { py } from '../helpers/run.mjs';

const THEME = ':root{--color-ink:#111;--space-2:8px}\n';

/** Write a theme and a page into a temp dir, scan the page, return the result. */
function scan(pageCss, themeCss = THEME) {
  const dir = mkdtempSync(join(tmpdir(), 'ds-refs-'));
  try {
    writeFileSync(join(dir, 'theme.css'), themeCss);
    writeFileSync(join(dir, 'page.css'), pageCss);
    return py('validate_theme_refs.py', ['--theme', join(dir, 'theme.css'), join(dir, 'page.css')]);
  } finally { rmSync(dir, { recursive: true, force: true }); }
}

test('a reference to a token nothing defines fails, and names it', () => {
  // The exact shape that reached the front door: a valid token beside an
  // invalid one inside a shorthand, which makes the whole declaration dead.
  const r = scan('.a{gap:var(--space-2) var(--space-7)}\n');
  assert.equal(r.status, 1, r.stdout + r.stderr);
  assert.match(r.stdout, /--space-7/);
  assert.match(r.stdout, /resolves to nothing/);
  assert.doesNotMatch(r.stdout, /--space-2 /, 'the defined token must not be reported');
});

test('a page with only defined tokens passes', () => {
  const r = scan('.a{gap:var(--space-2);color:var(--color-ink)}\n');
  assert.equal(r.status, 0, r.stdout + r.stderr);
});

test('a token the file defines itself counts as defined', () => {
  const dir = mkdtempSync(join(tmpdir(), 'ds-refs2-'));
  try {
    writeFileSync(join(dir, 'theme.css'), THEME);
    writeFileSync(join(dir, 'page.css'), ':root{--local:4px}\n.a{padding:var(--local);color:var(--color-ink)}\n');
    const r = py('validate_theme_refs.py', ['--theme', join(dir, 'theme.css'), join(dir, 'page.css')]);
    assert.equal(r.status, 0, r.stdout + r.stderr);
  } finally { rmSync(dir, { recursive: true, force: true }); }
});

test('an undefined token with a fallback is reported, not failed', () => {
  const dir = mkdtempSync(join(tmpdir(), 'ds-refs3-'));
  try {
    writeFileSync(join(dir, 'theme.css'), THEME);
    writeFileSync(join(dir, 'page.css'), '.a{filter:blur(var(--nope,8px))}\n');
    const r = py('validate_theme_refs.py', ['--theme', join(dir, 'theme.css'), join(dir, 'page.css')]);
    assert.equal(r.status, 0, r.stdout + r.stderr);
    assert.match(r.stdout, /carry a fallback/);
  } finally { rmSync(dir, { recursive: true, force: true }); }
});

test('more than one --theme is honoured', () => {
  const dir = mkdtempSync(join(tmpdir(), 'ds-refs4-'));
  try {
    writeFileSync(join(dir, 'a.css'), ':root{--one:1px}\n');
    writeFileSync(join(dir, 'b.css'), ':root{--two:2px}\n');
    writeFileSync(join(dir, 'page.css'), '.a{margin:var(--one) var(--two)}\n');
    const r = py('validate_theme_refs.py',
      ['--theme', join(dir, 'a.css'), '--theme', join(dir, 'b.css'), join(dir, 'page.css')]);
    assert.equal(r.status, 0, r.stdout + r.stderr);
  } finally { rmSync(dir, { recursive: true, force: true }); }
});

test('a path that does not exist never exits 0', () => {
  const r = py('validate_theme_refs.py', ['--theme', 'tests/fixtures/nope.css', 'tests/fixtures/nope']);
  assert.equal(r.status, 1);
});

test('the real repo still passes, in every grouping the gate runs', () => {
  assert.equal(py('validate_theme_refs.py', []).status, 0);
  const wide = py('validate_theme_refs.py', ['--theme', 'examples/brandkit-demo/theme.css',
    '--theme', 'examples/directions.css', 'examples/templates', 'examples/component-states',
    'examples/index.html', 'examples/showcase', 'examples/terminal', 'examples/apple-demo',
    'examples/brandkit-demo']);
  assert.equal(wide.status, 0, wide.stdout + wide.stderr);
});
