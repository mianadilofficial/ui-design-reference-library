/**
 * Every Python script reads, writes and prints UTF-8, whatever the machine's default.
 *
 * Python opens a text file in the locale's encoding unless told otherwise. That
 * is UTF-8 on macOS and Linux and a legacy code page on most Windows installs,
 * where a token file with an em dash or a spec with a Thai brand name raises
 * UnicodeDecodeError, and printing either to the console raises
 * UnicodeEncodeError. Nothing in CI sees it, because CI is Linux.
 *
 * Two checks. The source: no text-mode open, read_text or write_text without
 * an explicit encoding, found by parsing every script rather than by grep. The
 * console: scripts run with PYTHONIOENCODING=ascii, the strictest stand-in for
 * a console that is not UTF-8, must still print what they print.
 */
import { test } from 'node:test';
import assert from 'node:assert/strict';
import { run } from '../helpers/run.mjs';

const SCAN = String.raw`
import ast, sys
from pathlib import Path
bad = []
for f in sorted(Path("scripts").glob("*.py")) + sorted(Path("tests").rglob("*.py")):
    for n in ast.walk(ast.parse(f.read_text(encoding="utf-8"))):
        if not isinstance(n, ast.Call):
            continue
        name = n.func.attr if isinstance(n.func, ast.Attribute) else getattr(n.func, "id", None)
        kw = {k.arg for k in n.keywords}
        if "encoding" in kw:
            continue
        if name in ("read_text", "write_text"):
            bad.append(f"{f}:{n.lineno}: {name}()")
        elif name == "open":
            mode = n.args[1] if len(n.args) > 1 else next((k.value for k in n.keywords if k.arg == "mode"), None)
            mode = mode.value if isinstance(mode, ast.Constant) else "r"
            if "b" not in mode:
                bad.append(f"{f}:{n.lineno}: open(mode={mode!r})")
print("\n".join(bad))
`;

test('no Python script opens a text file in the locale encoding', () => {
  const r = run('python3', ['-c', SCAN]);
  assert.equal(r.status, 0, r.out);
  assert.equal(r.stdout.trim(), '', `text I/O without encoding="utf-8":\n${r.stdout}`);
});

test('every runnable script sets its console to UTF-8', () => {
  // A script run directly is the only kind that owns sys.stdout.
  const r = run('python3', ['-c', String.raw`
from pathlib import Path
for f in sorted(Path("scripts").glob("*.py")):
    s = f.read_text(encoding="utf-8")
    if '__name__ == "__main__"' in s and 'sys.stdout.reconfigure(encoding="utf-8")' not in s:
        print(f)
`]);
  assert.equal(r.status, 0, r.out);
  assert.equal(r.stdout.trim(), '', `runnable without a UTF-8 console:\n${r.stdout}`);
});

const ASCII = { env: { PYTHONIOENCODING: 'ascii' } };

test('a Thai brand name prints on a console that is not UTF-8', () => {
  const r = run('python3', ['scripts/design_systems.py', 'search', 'thai'], ASCII);
  assert.equal(r.status, 0, r.out);
  assert.doesNotMatch(r.out, /UnicodeEncodeError/);
  assert.match(r.stdout, /[฀-๿]/, 'expected a Thai description in the output');
});

test('an emoji finding prints on a console that is not UTF-8', () => {
  // The gate's whole job is to quote the glyph it found.
  const r = run('python3', ['scripts/check_no_emoji.py', 'tests/fixtures/bad/emoji.html'], ASCII);
  assert.equal(r.status, 1, r.out);
  assert.doesNotMatch(r.out, /UnicodeEncodeError|Traceback/);
});

test('a gate reports its finding, not a traceback, on a console that is not UTF-8', () => {
  // Measured before the fix: both raised UnicodeEncodeError on the line that
  // reports the defect, so a Windows user saw a crash instead of the finding.
  for (const [script, fixture] of [
    ['lint_hardcodes.py', 'tests/fixtures/bad/hardcoded.css'],
    ['validate_tokens.py', 'tests/fixtures/bad/unresolved-alias.json'],
  ]) {
    const r = run('python3', [`scripts/${script}`, fixture], ASCII);
    assert.doesNotMatch(r.out, /UnicodeEncodeError|Traceback/, `${script}:\n${r.out}`);
    assert.notEqual(r.status, 0, `${script} passed a broken fixture:\n${r.out}`);
  }
});
