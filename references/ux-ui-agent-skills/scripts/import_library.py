#!/usr/bin/env python3
"""Import measured brand specs into design-systems/library/ (maintainer tool).

Usage:
  python3 scripts/import_library.py --from <source-dir>            # dry run: report only
  python3 scripts/import_library.py --from <source-dir> --write    # write the library

<source-dir> holds `designs/<slug>.md` (one DESIGN.md per brand, YAML
frontmatter first) and `industries/<industry>.md` (one brand table per
industry, each row linking `../designs/<slug>.md`). Only the designs are
copied. The industry tables are read for one thing - the brand's category -
which is written into the copied file's frontmatter as `category:`.

Every change made to a file on the way in is mechanical and listed here, so
nothing in a spec is rewritten by judgement:

1. `category: "<industry>"` is inserted on the line after `name:`.
2. Each run of emoji or pictograph characters (the set check_no_emoji.py bans,
   joined by any zero-width joiners) becomes its code points, `[U+2605]`. The
   kit bans the glyphs everywhere it scans; the code points keep what was
   measured on the site without putting the glyph in the file.

Nothing else in the file changes. The source directory is never written to.

A brand that the kit already ships under the same slug is replaced by the
measured spec. ALIAS lists the brands it ships under a different slug: the
measured spec takes the kit's slug, so a name people already use keeps working.
Kit entries with no measured counterpart are left untouched.

Excluded from the npm package: it needs the source directory, which ships
nowhere.
"""
import importlib.util
import json
import re
import sys
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
LIB = ROOT / "design-systems" / "library"

# measured slug -> the slug the kit already ships the same brand under.
# Each pair was checked by reading both files' own description.
ALIAS = {
    "linear.app": "linear-app",
    "mistral.ai": "mistral-ai",
    "opencode.ai": "opencode-ai",
    "together.ai": "together-ai",
    "x.ai": "x-ai",
    "hugging-face": "huggingface",
    "github-primer": "github",
    "carbon-design": "ibm",
    "antd": "ant",
    "shadcn-ui": "shadcn",
    "material-design": "material",
}

SLUG = re.compile(r"^[a-z0-9][a-z0-9-]*$")
ROW_LINK = re.compile(r"\]\(\.\./designs/([^)]+)\.md\)")


def banned_pattern():
    """The emoji set, taken from check_no_emoji.py so the two cannot drift."""
    spec = importlib.util.spec_from_file_location("check_no_emoji", ROOT / "scripts" / "check_no_emoji.py")
    mod = importlib.util.module_from_spec(spec)
    spec.loader.exec_module(mod)
    return mod.EMOJI


def encode_glyphs(text, emoji):
    """Replace each run of banned glyphs with its code points. Returns (text, runs)."""
    run = re.compile(f"(?:{emoji.pattern}|‍)+")
    count = 0

    def sub(m):
        nonlocal count
        if not emoji.search(m.group(0)):
            return m.group(0)        # a lone zero-width joiner is not a glyph
        count += 1
        return "[" + " ".join(f"U+{ord(c):04X}" for c in m.group(0)) + "]"

    return run.sub(sub, text), count


def categories(src):
    """{slug: category} from the industry tables. Every slug must appear once."""
    out, errors = {}, []
    for f in sorted((src / "industries").glob("*.md")):
        lines = f.read_text(encoding="utf-8").splitlines()
        if not lines or not lines[0].startswith("# "):
            errors.append(f"{f.name}: no '# <industry>' title on line 1")
            continue
        cat = lines[0][2:].split(" \u2014 ")[0].strip()
        for line in lines:
            if not line.startswith("|"):
                continue
            for slug in ROW_LINK.findall(line):
                if slug in out and out[slug] != cat:
                    errors.append(f"{slug}: listed under both {out[slug]!r} and {cat!r}")
                out.setdefault(slug, cat)
    return out, errors


def with_category(text, cat):
    """Insert `category:` after the frontmatter's `name:` line."""
    if not text.startswith("---\n"):
        raise ValueError("does not start with YAML frontmatter")
    end = text.find("\n---\n", 4)
    if end < 0:
        raise ValueError("frontmatter is never closed")
    head = text[4:end].split("\n")
    if any(line.startswith("category:") for line in head):
        raise ValueError("frontmatter already has a category")
    names = [i for i, line in enumerate(head) if line.startswith("name:")]
    if len(names) != 1:
        raise ValueError(f"expected one top-level name:, found {len(names)}")
    head.insert(names[0] + 1, "category: " + json.dumps(cat, ensure_ascii=False))
    return "---\n" + "\n".join(head) + text[end:]


def main(argv):
    if "--from" not in argv or argv.index("--from") + 1 >= len(argv):
        print(__doc__)
        return 2
    src = Path(argv[argv.index("--from") + 1]).expanduser().resolve()
    write = "--write" in argv
    designs = src / "designs"
    if not designs.is_dir() or not (src / "industries").is_dir():
        print(f"ERROR: {src} needs designs/ and industries/")
        return 1

    emoji = banned_pattern()
    cats, errors = categories(src)
    files = sorted(designs.glob("*.md"))
    kit_before = {d.name for d in LIB.iterdir() if (d / "DESIGN.md").is_file()}

    plan, targets = [], {}
    glyph_runs = glyph_files = 0
    for f in files:
        slug = f.stem
        target = ALIAS.get(slug, slug)
        if not SLUG.match(target):
            errors.append(f"{slug}: slug {target!r} is not lowercase letters, digits and hyphens")
            continue
        if target in targets:
            errors.append(f"{slug}: lands on {target!r}, already taken by {targets[target]}")
            continue
        if slug not in cats:
            errors.append(f"{slug}: in no industry table, so it has no category")
            continue
        targets[target] = slug
        try:
            text = with_category(f.read_text(encoding="utf-8"), cats[slug])
        except (ValueError, UnicodeDecodeError) as err:
            errors.append(f"{slug}: {err}")
            continue
        text, runs = encode_glyphs(text, emoji)
        glyph_runs += runs
        glyph_files += bool(runs)
        plan.append((target, text))

    stray = sorted(set(cats) - {f.stem for f in files})
    errors += [f"{s}: in an industry table but has no designs/{s}.md" for s in stray]
    errors += [f"ALIAS {k!r}: no designs/{k}.md" for k in ALIAS if not (designs / f"{k}.md").is_file()]
    errors += [f"ALIAS {k!r} -> {v!r}: the kit ships no {v!r}" for k, v in ALIAS.items() if v not in kit_before]

    if errors:
        print(f"ERROR: {len(errors)} problem(s), nothing written:")
        for e in errors:
            print(f"  {e}")
        return 1

    incoming = {t for t, _ in plan}
    replaced = sorted(incoming & kit_before)
    kept = sorted(kit_before - incoming)
    print(f"Source:            {src}")
    print(f"Measured specs:    {len(plan)}")
    print(f"  new to the kit:  {len(incoming - kit_before)}")
    print(f"  replace a kit entry: {len(replaced)} ({len(ALIAS)} of them through ALIAS)")
    print(f"Kit entries kept:  {len(kept)}")
    print(f"Library after:     {len(incoming | kit_before)}")
    print(f"Glyph runs encoded: {glyph_runs} in {glyph_files} file(s)")

    if not write:
        print("\nDry run. Pass --write to write the library.")
        return 0
    for target, text in plan:
        d = LIB / target
        d.mkdir(exist_ok=True)
        (d / "DESIGN.md").write_text(text, encoding="utf-8")
    print(f"\nWrote {len(plan)} file(s) under {LIB.relative_to(ROOT)}/.")
    return 0


if __name__ == "__main__":
    # Findings quote what they found (an arrow, an emoji, a Thai name), and a
    # Windows console in a legacy code page cannot print it.
    sys.stdout.reconfigure(encoding="utf-8")
    sys.stderr.reconfigure(encoding="utf-8")
    sys.exit(main(sys.argv[1:]))
