/**
 * build_tokens.mjs is a generator, not a gate: it never exits non-zero and it
 * drops a reference it cannot resolve without saying so. Nothing else in the
 * repo would notice, so its OUTPUT is the assertion.
 */
import { test } from 'node:test';
import assert from 'node:assert/strict';
import { mkdtempSync, readFileSync, writeFileSync, rmSync, mkdirSync } from 'node:fs';
import { tmpdir } from 'node:os';
import { join } from 'node:path';
import { run, ROOT } from '../helpers/run.mjs';

function build(tokens, flags = []) {
  const dir = mkdtempSync(join(tmpdir(), 'ds-tokens-'));
  const inDir = join(dir, 'in');
  mkdirSync(inDir);
  writeFileSync(join(inDir, 'colors.json'), JSON.stringify(tokens, null, 2));
  const out = join(dir, 'theme.css');
  const r = run('node', ['scripts/build_tokens.mjs', '--in', inDir, '--out', out, ...flags]);
  const css = readFileSync(out, 'utf8');
  rmSync(dir, { recursive: true, force: true });
  return { ...r, css };
}

const BROKEN = {
  primitive: { blue: { 600: { $type: 'color', $value: '#2563EB' } } },
  semantic: { action: { primary: { $type: 'color', $value: '{primitive.blue.500}' } } },
};

test('--check fails on an alias that never resolved', () => {
  // Without the flag this is a generator and stays one: it writes what it can
  // and exits 0. With it, a dropped token is an error, because the variable is
  // simply absent from the theme and every page using it falls back to nothing.
  const { status, stderr } = build(BROKEN, ['--check']);
  assert.equal(status, 1);
  assert.match(stderr, /--color-action-primary: \{primitive\.blue\.500\}/);
});

test('--check passes, and says so, when every alias resolves', () => {
  const { status, stderr } = build({
    primitive: { blue: { 600: { $type: 'color', $value: '#2563EB' } } },
    semantic: { action: { primary: { $type: 'color', $value: '{primitive.blue.600}' } } },
  }, ['--check']);
  assert.equal(status, 0);
  assert.match(stderr, /every alias resolved/);
});

test('the deprecated danger alias resolves to destructive, never to primary', () => {
  // Written the wrong way round once: --color-action-danger pointed at
  // --color-action-primary, which is a blue Delete button emitted by the token
  // build itself - the exact thing non-negotiable 1 exists to stop. An alias is
  // a rename, so it has to land on the same colour the old name meant.
  const out = join(mkdtempSync(join(tmpdir(), 'ds-alias-')), 'theme.css');
  const r = run('node', ['scripts/build_tokens.mjs', '--out', out]);
  assert.equal(r.status, 0);
  const css = readFileSync(out, 'utf8');
  assert.match(css, /--color-action-danger:\s*var\(--color-action-destructive\)/);
  assert.doesNotMatch(css, /--color-action-danger:\s*var\(--color-action-primary\)/);
  const hex = (name) => (css.match(new RegExp(`${name}:\\s*(#[0-9a-f]{3,8})`, 'i')) || [])[1];
  assert.notEqual(hex('--color-action-destructive'), hex('--color-action-primary'),
    'destructive and primary must not be the same colour');
});

test('every deprecated alias points at a variable the build actually emits', () => {
  const out = join(mkdtempSync(join(tmpdir(), 'ds-alias2-')), 'theme.css');
  assert.equal(run('node', ['scripts/build_tokens.mjs', '--check', '--out', out]).status, 0);
  const css = readFileSync(out, 'utf8');
  const defined = new Set([...css.matchAll(/^\s*(--[\w-]+):/gm)].map(m => m[1]));
  for (const [, from, to] of css.matchAll(/^\s*(--[\w-]+):\s*var\((--[\w-]+)\);/gm)) {
    assert.ok(defined.has(to), `${from} aliases ${to}, which is never defined`);
  }
});

test('a dropped token is reported even without --check', () => {
  const { status, stderr } = build(BROKEN);
  assert.equal(status, 0, 'the generator still generates');
  assert.match(stderr, /never resolved/);
});

test('a resolvable alias chain reaches the emitted CSS as a final value', () => {
  const { status, css } = build({
    primitive: { blue: { 600: { $type: 'color', $value: '#2563EB' } } },
    semantic: { action: { primary: { $type: 'color', $value: '{primitive.blue.600}' } } },
  });
  assert.equal(status, 0);
  assert.match(css, /--color-action-primary:\s*#2563EB/i);
});

test('an unresolvable alias is dropped, not emitted as a broken var', () => {
  // The generator has no failure mode, so the contract is: never emit a value
  // that still contains {…}. A page referencing the missing token then fails
  // validate_theme_refs, which is the gate that does have teeth.
  const { status, css } = build({
    primitive: { blue: { 600: { $type: 'color', $value: '#2563EB' } } },
    semantic: { action: { primary: { $type: 'color', $value: '{primitive.blue.500}' } } },
  });
  assert.equal(status, 0);
  assert.doesNotMatch(css, /\{primitive\.blue\.500\}/, 'a raw alias leaked into the CSS');
  assert.doesNotMatch(css, /--color-action-primary:/, 'an unresolvable token should not be emitted');
});

test('a DIRECTORY build emits the whole system, not only colour', () => {
  // The bug this catches shipped: GROUPS were looked up inside colors.json only,
  // so a multi-file tokens/ dir (space in spacing.json, radius in borders.json)
  // emitted 85 colour vars and left every var(--space-*) undefined - the exact
  // failure the generator's own comment says it exists to prevent.
  const out = join(mkdtempSync(join(tmpdir(), 'ds-theme-')), 'theme.css');
  const r = run('node', ['scripts/build_tokens.mjs', '--out', out]);
  assert.equal(r.status, 0, r.stderr);
  const css = readFileSync(out, 'utf8');

  for (const v of ['--space-4', '--text-sm', '--font-sans', '--leading-tight',
                   '--radius-button', '--shadow-md', '--shadow-focus-ring',
                   '--duration-fast', '--ease-out', '--transition-micro',
                   '--size-control-md', '--opacity-disabled', '--z-modal', '--bp-sm']) {
    assert.match(css, new RegExp(`${v}:`), `the built theme defines no ${v}`);
  }
  assert.ok(css.split('\n').filter(l => l.includes('--')).length > 150,
    'a full build is not 85 colour vars');
});

test('no composite token reaches the CSS as [object Object] or a stray brace', () => {
  // Every array was treated as a cubicBezier: the font stack came out as
  // `cubic-bezier(Inter, system-ui, ...)` and every shadow as
  // `cubic-bezier([object Object])`. A ref resolving to an array (easing) left
  // its brace behind and the token was dropped instead.
  const out = join(mkdtempSync(join(tmpdir(), 'ds-theme-')), 'theme.css');
  assert.equal(run('node', ['scripts/build_tokens.mjs', '--out', out]).status, 0);
  const css = readFileSync(out, 'utf8');
  assert.doesNotMatch(css, /\[object Object\]/, 'a composite token was stringified');
  assert.doesNotMatch(css, /cubic-bezier\([^)]*[A-Za-z]/, 'a non-bezier was emitted as a bezier');
  for (const line of css.split('\n').filter(l => l.trim().startsWith('--'))) {
    assert.doesNotMatch(line, /\{[^}]+\}/, `an unresolved reference shipped: ${line.trim()}`);
  }
});
