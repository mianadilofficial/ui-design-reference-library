---
version: alpha
name: 18 Years of Büro
category: "Agencies & Studios"
description: "18 Years of Büro (18.burocratik.com), the Burocratik studio retrospective: Commercial Gräphik Web grotesk with tight negative tracking at 57.9px, PP Editorial New weight 100 at 44.1px, black on white with a chapter palette of brown #402828, peach #efc09b, blue #2800f3 and purple #8574d0."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#402828"
  surface-black: "#010101"
  off-black: "#12121f"
  off-white: "#f4f4f4"
  dark-brown: "#2a1e17"
  chapter-peach: "#efc09b"
  chapter-blue: "#2800f3"
  chapter-purple: "#8574d0"
  chapter-light-grey: "#ebeee2"
  chapter-red: "#e73b37"
  chapter-yellow: "#faf6b0"
typography:
  display:
    fontFamily: "\"Commercial Gräphik Web\""
    fontSize: 57.8976px
    fontWeight: 400
    lineHeight: 63.6874px
    letterSpacing: "-4.05283px"
  display-mobile:
    fontFamily: "\"Commercial Gräphik Web\""
    fontSize: 90px
    fontWeight: 400
    lineHeight: 72px
    letterSpacing: "-7.2px"
  heading:
    fontFamily: "\"PP Editorial New\""
    fontSize: 44.1088px
    fontWeight: 100
    lineHeight: 48.5197px
  subheading:
    fontFamily: "\"Commercial Gräphik Web\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 21.6px
    letterSpacing: "-0.72px"
  body:
    fontFamily: "\"Commercial Gräphik Web\""
    fontSize: 14.6926px
    fontWeight: 400
    lineHeight: 19.1004px
    letterSpacing: "-0.587704px"
  caption:
    fontFamily: "\"Commercial Gräphik Web\""
    fontSize: 12.768px
    fontWeight: 400
    letterSpacing: "-0.51072px"
rounded:
  xs: 2px
  sm: 15.09px
  md: 20px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 6.53px
  s6: 8px
  s7: 8.07px
  s8: 9.15px
  s9: 10px
  s10: 10.9px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  navbar-pill:
    rounded: "{rounded.md}"
---

## Overview

18 Years of Büro is a retrospective microsite for the Portuguese digital studio Büro (Bürocratik). The page fetched from 18.burocratik.com describes the studio's history from 2004 to 2024 in four chapters, "The Early Years (2004–2012)", "Inception (2013–2017)", "We Got This, We Got This (2018–2020)" and "Are We There Yet? (2021–2024)", plus a separate "Dark Ages (2004–2013)" section, and links to a Büro18 book pre-order. The studio's own site says it is a digital studio focused on branding and digital experiences, with an emphasis on typography and detail, located in Coimbra and Matosinhos, Portugal.

The entry view measured here (resolved URL with `?chapter3`) shows a white page with a large black spiral timeline: concentric elliptical lines carry small circle markers labelled 2004 to 2024. A large black headline, "Our eccentric story: the odd, quirky, and wonderful journey so far!", sits over the upper spiral. A year counter "2006 ——— 2024" runs across the top, and a hand-pointer glyph with the word "Go" sits in the bottom right corner. The extraction counted 12,373 visible elements while the scroll height was 800px, so the page is a fixed-viewport scene, not a scrolling document.

The voice is dry and personal ("Are we there yet? Hell no."). Typography does the work: very large, tightly tracked grotesk next to a hairline-weight serif. Each chapter has its own background colour, so the site is white at the entry and changes colour as chapters change.

## Colors

The base is plain: canvas `#ffffff`, ink `#000000` (24,598 characters of black text against 6,059 white and 4,673 brown). The root variables name the full palette:

- `--color-black #000` and `--color-white #fff`
- `--color-off-black #12121f`, `--color-menu-black #0f0f0f`
- `--color-off-white #f4f4f4`, `--color-light-grey #ebeee2`
- `--color-brown #402828` (primary here; also border colour, 38 uses) and `--color-dark-brown #2a1e17`
- `--color-blue #2800f3`, `--color-purple #8574d0`
- `--color-eda-bg #efc09b` (peach) and `--color-eda-text #402828`

The area-weighted backgrounds also show chapter fills `#faf6b0` (pale yellow) and `#e73b37` (red) and `#010101` near black (3,070 area weight). Largest-area background is `#000000`, which belongs to dark chapter scenes; the entry capture itself is white. Brown `#402828` is used as text (4,673 characters) and as the border colour, so it is the closest thing the page has to an accent. It is tokenised as `primary` even though the extractor found no call-to-action button.

Colours are assigned per chapter rather than per component. The tokens named `chapter-*` are palette values from root variables or measured backgrounds; which chapter shows which colour was not mapped.

## Typography

Two typefaces are loaded: **Commercial Gräphik Web** (weight 400; 27,582 characters) and **PP Editorial New** (weights 100 and 300; 7,757 characters).

- **Display, Gräphik 57.8976px / 400 / 63.6874px, letter-spacing -4.05283px**: the h1 on the entry view. Tracking is about -7% of the size.
- **Display on mobile, Gräphik 90px / 400 / 72px, letter-spacing -7.2px**: measured in the mobile pass for a chapter title ("Moonspell").
- **Heading, PP Editorial New 44.1088px / 100 / 48.5197px**: the h2 ("Where it all begins.") in white on a dark scene.
- **Subheading, Gräphik 18px / 400 / 21.6px / -0.72px**: h3 titles such as "Awwwards Conference 2015".
- **Body, Gräphik 14.6926px / 400 / 19.1004px / -0.587704px**: the paragraphs.
- **Caption, Gräphik 12.768px / 400 / -0.51072px**: the single most used size (14,560 characters); the spiral's year labels are of this kind.

Every size is paired with negative letter-spacing (for example 14.6926px with -0.587704px). The unusual decimals come from the fluid sizing of the site; they are measured values, not rounded ones. Larger sizes were also measured at 21.5104px, 32px, 67.7536px, 86.6976px, 110.285px, 173.302px and 188.173px. Foundry pages for the two typefaces were not opened, so no licence is stated.

## Layout

The site declares a 24-column grid in root variables: `--grid-num-cols: 24`, `--grid-max-width: 106.25rem`, a column width of 4.1666666667%, `--grid-padding: clamp(8px, …, 10px)`, `--grid-margin: clamp(8px, …, 20px)` and `--grid-gutter: clamp(2px, …, 10px)`. Breakpoint variables are `--xxsmall 410px`, `--xsmall 743px`, `--small 1024px`, `--medium 1290px`, `--large 1440px`, `--xlarge 1700px` and `--xxlarge 2000px`. The bottom navbar is `--navbar-height: 46px`, spans 10 grid columns (`--navbar-width-cols: 10`) and sits at a clamped bottom offset of 24px to 32px.

At 1280px the h1 block measures 1,249px wide, almost the full viewport, and its text starts well to the right of the left edge in the capture. The spiral graphic fills the viewport behind it. Gaps seen most often are 15.6784px (588 uses), 10.896px (146) and 6px (54); paddings 10px (84) and 13.3852px (59). The ten spacing tokens are a subset of the measured small gaps.

## Elevation & Depth

No box shadows were measured. Depth is expressed with flat colour fields, overlapping type over linework, and the fixed layout of the stage. In the capture the headline overlaps the spiral lines instead of sitting in a separate surface, so lines run through the letters. The `card` element found by the extractor was a black 583 by 291 element with a `100%` radius, which is part of the stage graphics, not an interface card, and it is not tokenised.

## Shapes

Radii measured: `100%` (15 uses, circles for the spiral markers and elliptical shapes), `2px` (4), `20px` (2, the navbar radius from `--navbar-border-radius`) and `15.0912px` (2). The spiral is drawn with fine one-pixel-weight strokes and small hollow circular markers. Everything else is rectangular, so the language is circles and ellipses against straight type blocks. No button radius exists because no button was detected.

## Components

- **Year counter / header**: "2006 ——— 2024" in Gräphik 21.5104px, black, 1,280px wide and 41px high; the first number changes with position.
- **Spiral timeline**: elliptical line graphic with hollow circle markers and 12.768px year labels.
- **Go prompt**: a hand-pointer glyph and "Go" in large type at the bottom right.
- **Bottom navbar pill**: a 46px high bar with a 20px radius, per the variables.
- **Text links**: white 14.6926px text on dark chapter scenes ("Moonspell @Instagram").
- **Chapter pages**: white-on-colour headings in PP Editorial New, paragraphs in Gräphik, image galleries and award tables as described on the page text.

Hover states: none recorded (the hover list is empty).

## Design System Architecture

No public design system or brand guidelines exist for this microsite. The studio site (https://burocratik.com/) and the retrospective (https://18.burocratik.com/) were opened; neither links to guidelines or a token package, and the retrospective mentions identity guidelines only as part of a client project. The de-facto system is the set of root CSS variables: breakpoints (`--xxsmall` to `--xxlarge`), the 24-column grid (`--grid-*`), the navbar (`--navbar-height`, `--navbar-border-radius`, `--navbar-bottom`), viewport helpers (`--dvh`, `--svh`, `--lvh`, `--computed-100vw`) and named colours (`--color-*`). Type sizes are fluid, so they carry decimal values.

## Do's and Don'ts

- Do set large Gräphik headlines with tight negative tracking (-4.05283px at 57.8976px).
- Do pair the grotesk with PP Editorial New at weight 100 for chapter headings.
- Do change the background colour per chapter from the named palette.
- Do keep small year labels at 12.768px.
- Don't add shadows or rounded cards; none were measured.
- Don't use `#402828` as a button fill; no button was measured.
- Don't read the near-black `#000000` area weight as the entry canvas; the entry view is white.
- Don't assume other chapters share the entry layout; only the `?chapter3` entry view was measured.

## Responsive Behavior

The mobile pass (390px wide) recorded: the chapter title at 90px / 400 with 72px line height and -7.2px letter-spacing; the h2 at 32px / 100 with 35.2px line height; body text at 13px / 400 with 16.9px line height and -0.52px letter-spacing; the year navigation at 20px (43px high, 390px wide). Mobile character-weighted sizes were 13px, 12px, 32px, 18px, 20px and 16px. The root variables declare breakpoints at 410px, 743px, 1024px, 1290px, 1440px, 1700px and 2000px. How the spiral scene reflows on small screens was not measured.

## Iteration Guide

1. Begin with white, black and the single brown `#402828`; bring in chapter colours one chapter at a time.
2. Reuse the type pairing: Commercial Gräphik Web with negative tracking, PP Editorial New 100 for headings.
3. Build on the 24-column grid and the 46px navbar.
4. Measure a second chapter URL with the extractor before documenting chapter layouts.
5. Run `node web/scripts/verify-designs.mjs --slug=18-years-of-buro` after edits.
