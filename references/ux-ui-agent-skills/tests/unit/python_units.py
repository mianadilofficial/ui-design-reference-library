#!/usr/bin/env python3
"""Unit checks for the pure functions the contrast gates are built on.

Plain asserts, no pytest: the repo has one devDependency and this keeps it that
way. Run directly, or through tests/unit/contrast.test.mjs.

Every expected value here is either an identity (white on black is 21:1 by
definition), a symmetry, or the published WCAG boundary grey #767676, which is
the standard worked example for "just passes AA on white".
"""
import importlib.util
import sys
from pathlib import Path

ROOT = Path(__file__).resolve().parents[2]


def load(name):
    spec = importlib.util.spec_from_file_location(name, ROOT / "scripts" / f"{name}.py")
    mod = importlib.util.module_from_spec(spec)
    spec.loader.exec_module(mod)
    return mod


c = load("contrast")
failures = []


def check(label, got, want, tol=0.005):
    if isinstance(want, float) and abs(got - want) > tol:
        failures.append(f"{label}: got {got!r}, want {want!r}")
    elif not isinstance(want, float) and got != want:
        failures.append(f"{label}: got {got!r}, want {want!r}")


# --- parse_hex
check("parse_hex 6-digit", c.parse_hex("#2563EB"), (0x25, 0x63, 0xEB))
check("parse_hex 3-digit expands", c.parse_hex("#fff"), (255, 255, 255))
check("parse_hex tolerates no hash", c.parse_hex("1d1d1f"), (0x1D, 0x1D, 0x1F))
try:
    c.parse_hex("zz")
    failures.append("parse_hex should reject a bad hex")
except ValueError:
    pass

# --- luminance: the two anchors of the sRGB formula
check("luminance white", c.luminance((255, 255, 255)), 1.0)
check("luminance black", c.luminance((0, 0, 0)), 0.0)

# --- ratio
check("white on black is the maximum 21:1", round(c.ratio("#ffffff", "#000000"), 2), 21.0)
check("a colour against itself is 1:1", round(c.ratio("#1d4ed8", "#1d4ed8"), 2), 1.0)
check("ratio is symmetric", round(c.ratio("#1d1d1f", "#ffffff"), 4),
      round(c.ratio("#ffffff", "#1d1d1f"), 4))
# #767676 is the published grey that lands just above AA on white.
check("WCAG boundary grey on white", round(c.ratio("#767676", "#ffffff"), 2), 4.54)
check("one step darker still passes AA", c.ratio("#767676", "#ffffff") >= 4.5, True)
check("one step lighter fails AA", c.ratio("#777777", "#ffffff") >= 4.5, False)

# --- design_systems.scalar: the four YAML string shapes the library uses.
# Expected values are what the YAML spec says each form means.
ds = load("design_systems")
check("double-quoted, with an escaped quote",
      ds.scalar(['description: "Sets \\"The Future\\" at 56px"'], 0), 'Sets "The Future" at 56px')
check("single-quoted, '' is one quote",
      ds.scalar(["description: 'Lay''s yellow canvas'"], 0), "Lay's yellow canvas")
check("folded block joins its lines with spaces",
      ds.scalar(["description: >-", "  Google's Material", "  documentation site", "colors:"], 0),
      "Google's Material documentation site")
check("plain scalar continues on indented lines",
      ds.scalar(["description: Linear's site", "  on linear.app", "colors:"], 0), "Linear's site on linear.app")
check("the next top-level key ends the value",
      ds.scalar(["name: Stripe", "category: \"Fintech & Crypto\""], 0), "Stripe")

# --- design_systems.meta on every shipped spec: a spec the index cannot place
# or describe is one `list` and `search` cannot find.
unplaced = [d.name for d in sorted((ROOT / "design-systems" / "library").iterdir())
            if (d / "DESIGN.md").is_file()
            and ("Uncategorized" == ds.meta(d / "DESIGN.md")[0] or not ds.meta(d / "DESIGN.md")[1])]
check("every library spec has a category and a description", unplaced, [])

# --- import_library: the two mechanical changes it is allowed to make
il = load("import_library")
emoji = il.banned_pattern()
check("a glyph becomes its code point", il.encode_glyphs("Best Seller ★", emoji), ("Best Seller [U+2605]", 1))
check("a joined sequence stays one run",
      il.encode_glyphs("\U0001F469‍\U0001F3A4 mascot", emoji)[0], "[U+1F469 U+200D U+1F3A4] mascot")
check("a lone zero-width joiner is left alone", il.encode_glyphs("a‍b", emoji), ("a‍b", 0))
check("arrows are not glyphs", il.encode_glyphs("Read more →", emoji), ("Read more →", 0))
check("category lands on the line after name",
      il.with_category("---\nversion: alpha\nname: Stripe\ncolors: {}\n---\nbody\n", "Fintech & Crypto"),
      '---\nversion: alpha\nname: Stripe\ncategory: "Fintech & Crypto"\ncolors: {}\n---\nbody\n')
for label, bad in (("no frontmatter", "# Title\n"),
                   ("frontmatter never closed", "---\nname: X\n"),
                   ("category already present", "---\nname: X\ncategory: \"Y\"\n---\n")):
    try:
        il.with_category(bad, "Z")
        failures.append(f"with_category should refuse: {label}")
    except ValueError:
        pass

if failures:
    print(f"FAIL: {len(failures)} unit check(s):")
    for f in failures:
        print("  x " + f)
    sys.exit(1)
print("OK: contrast, library index and importer unit checks pass.")
