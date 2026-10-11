/**
 * The hardcode gate must not report clean on a file it could not open.
 *
 * It used to catch UnicodeDecodeError and OSError, count the file in "Scanned N",
 * and exit 0 — the same shape as the missing-path case the script already guards,
 * where the comment reads "scanning nothing must not read as clean".
 */
import { test } from 'node:test';
import assert from 'node:assert/strict';
import { mkdtempSync, writeFileSync, rmSync, mkdirSync } from 'node:fs';
import { tmpdir } from 'node:os';
import { join } from 'node:path';
import { py } from '../helpers/run.mjs';

function withDir(files) {
  const dir = mkdtempSync(join(tmpdir(), 'ds-unread-'));
  for (const [name, bytes] of Object.entries(files)) writeFileSync(join(dir, name), bytes);
  return dir;
}

test('a file that cannot be decoded fails the run', () => {
  const dir = withDir({ 'broken.css': Buffer.from([0x80, 0x81, 0x82]) });
  try {
    const r = py('lint_hardcodes.py', [dir]);
    assert.equal(r.status, 1, r.stdout + r.stderr);
    assert.match(r.stdout, /could not be read/);
    assert.match(r.stderr, /broken\.css/);
  } finally { rmSync(dir, { recursive: true, force: true }); }
});

test('the readable files are still checked alongside it', () => {
  const dir = withDir({
    'broken.css': Buffer.from([0x80, 0x81]),
    'dirty.css': '.a{margin:13px}\n',
  });
  try {
    const r = py('lint_hardcodes.py', [dir]);
    assert.equal(r.status, 1);
    assert.match(r.stdout, /13px/, 'one bad file must not hide the rest');
    assert.match(r.stdout, /Scanned 1 of 2/);
  } finally { rmSync(dir, { recursive: true, force: true }); }
});

test('a directory whose name ends in a code extension is not read as a file', () => {
  const dir = mkdtempSync(join(tmpdir(), 'ds-unread2-'));
  try {
    mkdirSync(join(dir, 'theme.css'));
    writeFileSync(join(dir, 'theme.css', 'a.css'), '.a{color:var(--x)}\n');
    const r = py('lint_hardcodes.py', [dir]);
    assert.equal(r.status, 0, r.stdout + r.stderr);
  } finally { rmSync(dir, { recursive: true, force: true }); }
});
