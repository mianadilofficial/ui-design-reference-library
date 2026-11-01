# Rule: Typography and spacing

Loaded when setting type, scale, rhythm, or layout spacing.

Split out of `CLAUDE.md` so it loads only when the work calls for it. The
headings below are unchanged, so any pointer to them still resolves.

---

## Typography Guidelines

### Scale: Major Third (1.25 ratio)
```
xs=12  sm=14  base=16  lg=18  xl=20  2xl=24  3xl=30  4xl=36  5xl=48  6xl=60  7xl=72
```

### Usage Rules
1. **One font family for UI**: Inter (or system-ui) for all interface text
2. **Serif for editorial**: Lora (or Georgia) for blog posts, marketing pages
3. **Mono for code**: JetBrains Mono for code blocks, data values
4. **Heading hierarchy**: h1 is used once per page; headings never skip levels
5. **Line length**: Body text: 45 to 75 characters per line (65ch optimal). Use `max-width: 65ch`.
6. **Line height**: Headings: tight (1.25). Body: normal (1.5). Caption: normal (1.5).
7. **Font weight**: Regular (400) for body, Medium (500) for labels, Semibold (600) for headings, Bold (700) for page titles only

See composite text styles in `tokens/typography.json` → `textStyle`.

---

## Thai text

Three faults the critic found on every Thai page the kit built, and that no colour,
contrast or overflow gate sees. `node scripts/verify_thai.mjs <file|dir>` measures
all three on the render, in the font the page actually loaded.

1. **Leading is a property of the font, not a habit.** A Thai line needs room above
   the baseline for a consonant, an above vowel and a tone mark (ที่, นี้) and room
   below for a below vowel (ุ). Set the leading so one line's room below never
   reaches the next line's room above, or the tone marks of the lower line land
   where the upper line keeps its below vowels and ร้ under ต่ reads as ตุ่. The ink
   does not have to touch for that to happen. Measured: Sukhumvit Set needs about
   1.35, Anuphan about 1.43, Noto Sans Thai about 1.49. Display type at 1.25, a
   brand line at 1.2 and a Thai line under an English name at 1.1 all fail. No
   negative letter-spacing on Thai.
2. **Chrome breaks Thai with a dictionary of parts.** ICU's dictionary holds ใบ and
   อนุญาต, not ใบอนุญาต, so a compound is a legal break to the browser and a misreading
   to a reader. `word-break` and `overflow-wrap` do not help. Keep a compound, a
   name, a noun prefix and its word (ความ, การ, ผู้, ชาว) and a number and its
   classifier (23 คน, สิบเก้าวัน, พ.ศ. 2569) on one line with a span set to
   `white-space:nowrap`, including in strings a script builds.
3. **Keep only what needs keeping.** Wrapping every phrase makes the rag ragged on a
   phone, because each kept unit is a block the line cannot break inside. Wrap
   names, counts and compounds, and leave words the dictionary already handles.

The gate knows a list of compounds and the four prefixes, so a split it does not
know (a place name, a coined term) still needs a Thai reader.

---

## Spacing Guidelines

### Base Unit: 4px
All spacing values are multiples of 4px. The scale:
```
0  2  4  6  8  10  12  14  16  20  24  28  32  36  40  44  48  56  64  80  96
```

### Usage Rules
1. **Outer spacing > Inner spacing**: Container padding > element gaps > element padding
2. **Related items closer**: Related elements share tighter spacing than unrelated
3. **Consistent rhythm**: Establish a vertical rhythm and maintain it throughout the page
4. **Semantic spacing**: Use purpose-named tokens (`card.padding`, `stack.lg`) over raw values

See `tokens/spacing.json` for the full scale and semantic aliases.
