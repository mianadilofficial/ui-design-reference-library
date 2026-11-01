/**
 * Meta-gate: the Python gates must still REJECT a broken fixture.
 *
 * Every gate in this kit is pointed at examples/ that already pass, which proves
 * only that a gate says yes to good work. These tests point each one at input
 * built to be wrong and require a real exit 1, so a regex that stops matching,
 * or a check that quietly turns into a no-op, fails the build instead of
 * reporting a cheerful 37/37.
 */
import { test } from 'node:test';
import { mkdtempSync, writeFileSync, rmSync } from 'node:fs';
import { tmpdir } from 'node:os';
import { join } from 'node:path';
import { py, run, rejects, accepts, F } from '../helpers/run.mjs';

test('check_no_emoji rejects a pictograph in UI output', () => {
  rejects(py('check_no_emoji.py', [F('bad/emoji.html')]), /emoji\/pictograph/);
});

test('check_no_emoji accepts arrows and box-drawing (allowed notation)', () => {
  accepts(py('check_no_emoji.py', [F('good/clean.html')]), /no emoji/i);
});

test('check_no_emoji rejects an em or en dash in any file, not only UI', () => {
  // Written at test time: a dash fixture checked in would fail the default scan,
  // which reads every tracked file. The glyphs are escapes for the same reason.
  const dir = mkdtempSync(join(tmpdir(), 'ds-dash-'));
  try {
    for (const [name, text] of [['notes.md', 'one \u2014 two\n'], ['tokens.json', '{"$description": "1\u20132"}\n'],
      ['app.css', '/* a \u2014 b */\n']]) {
      writeFileSync(join(dir, name), text);
      rejects(py('check_no_emoji.py', [join(dir, name)]), /em\/en-dash/);
    }
  } finally { rmSync(dir, { recursive: true, force: true }); }
});

test('the default scan reads every tracked file for dashes, and exempts only what it names', () => {
  accepts(py('check_no_emoji.py'), /no em or en dash/);
  // The emoji scope leaves out README, the scripts and the docs; the dash scope
  // must not. Asked of the scan itself, since a planted dash would edit the repo.
  const scope = run('python3', ['-c', [
    'import sys; sys.path.insert(0, "scripts"); import check_no_emoji as g',
    'files = list(g.tracked_text_files())',
    'print("\\n".join(f.relative_to(g.ROOT).as_posix() for f in files))'].join('\n')]);
  const listed = new Set(scope.out.split('\n'));
  for (const want of ['README.md', 'CHANGELOG.md', 'scripts/gate.mjs', 'scripts/check_no_emoji.py',
    'docs/INSTALL.md', 'package.json', '.github/workflows/release.yml']) {
    if (!listed.has(want)) throw new Error(`${want} is not in the dash scope\n${scope.out.slice(0, 400)}`);
  }
  if ([...listed].some(f => f.startsWith('design-systems/library/') || f.startsWith('evals/out/'))) {
    throw new Error('an exempt path is in the dash scope');
  }
  // A library spec is exempt even when named, because it is not the kit's writing.
  accepts(py('check_no_emoji.py', ['design-systems/library/14islands/DESIGN.md']), /no em or en dash/);
});

test('lint_hardcodes rejects raw hex, px, ms and a font stack', () => {
  const r = rejects(py('lint_hardcodes.py', [F('bad/hardcoded.css')]), /hardcoded/i);
  // All four categories, not just whichever pattern happens to still work.
  for (const want of [/#1d1d1f/, /17px/, /240ms/, /font-family/]) {
    if (!want.test(r.out)) throw new Error(`missed ${want}\n${r.out}`);
  }
});

test('lint_hardcodes accepts a token-only stylesheet', () => {
  accepts(py('lint_hardcodes.py', [F('good/tokens-only.css')]), /no hardcoded/i);
});

test('lint_hardcodes honours the ds-allow-hardcode escape hatches', () => {
  // Inline and block form both matter: adapter theme-config is unlintable without them.
  accepts(py('lint_hardcodes.py', [F('good/allowed-hardcode.css')]), /no hardcoded/i);
});

test('validate_tokens rejects an alias that resolves to nothing', () => {
  rejects(py('validate_tokens.py', [F('bad/unresolved-alias.json')]), /unresolved/i);
});

test('validate_tokens accepts a resolvable alias chain', () => {
  accepts(py('validate_tokens.py', [F('good/resolved-alias.json')]), /valid JSON/i);
});

test('validate_contrast rejects a required pair below WCAG AA', () => {
  rejects(py('validate_contrast.py', [F('bad/low-contrast-tokens.json')]), /body text on page .* < 4\.5/);
});

test('validate_contrast accepts a theme that passes light AND dark', () => {
  accepts(py('validate_contrast.py', [F('good/contrast-tokens.json')]), /all required contrast pairs pass/i);
});

test('validate_theme_refs rejects a var() the theme never defines', () => {
  rejects(
    py('validate_theme_refs.py', [F('bad/theme-refs/theme.css'), F('bad/theme-refs')]),
    /--color-text-tertiary.*resolves to nothing/);
});

test('validate_theme_refs accepts a theme that defines everything referenced', () => {
  accepts(
    py('validate_theme_refs.py', [F('good/theme-refs/theme.css'), F('good/theme-refs')]),
    /every token reference resolves/i);
});
