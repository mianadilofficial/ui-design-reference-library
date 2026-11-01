---
version: alpha
name: The Up&Up Group
category: "Portfolio"
description: "The Up&Up Group (theupandupgroup.com), a South African creative group, sets giant 130.857px uppercase headlines that mix Inter 500 with ivypresto-display serif on a white canvas with #343434 ink, one copper-orange #f2623a accent, #f5f5f5 sections, 4px corners and hairline #c1c1c1 rules."
colors:
  canvas: "#ffffff"
  page-body: "#000000"
  ink: "#343434"
  primary: "#f2623a"
  ink-muted: "#c1c1c1"
  surface-light: "#f5f5f5"
typography:
  display:
    fontFamily: Inter, sans-serif
    fontSize: 130.857px
    fontWeight: 500
    lineHeight: 104.686px
    letterSpacing: "-3.92571px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Inter, sans-serif
    fontSize: 46px
    fontWeight: 500
    lineHeight: 36.8px
    letterSpacing: "-1.38px"
    textTransform: uppercase
  body:
    fontFamily: ivypresto-display, sans-serif
    fontSize: 130.857px
    fontWeight: 400
    lineHeight: 85.0572px
    textTransform: uppercase
  link:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16.8px
    letterSpacing: "-0.24px"
rounded:
  xs: 4px
  sm: 12px
  md: 14px
spacing:
  s1: 1px
  s2: 2px
  s3: 2.5px
  s4: 8px
  s5: 15.71px
  s6: 16px
  s7: 17.71px
  s8: 23.71px
  s9: 25.71px
  s10: 31.14px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 25.7143px 0px 31.1429px
---

## Overview

The Up&Up Group describes itself in the page title as an "Award Winning Creative Group of Companies in South Africa" and, in the footer copy, as "a creative solutions Group". The home page (`https://www.theupandupgroup.com/`) opens on a white field with a small serif "up&up" logo at the top and a three-line statement in huge uppercase letters: "CREATIVITY" and "ELEVATES" in Inter 500 and "EVERYTHING" in the ivypresto-display serif. The mix of a grotesque sans and a high-contrast display serif in one sentence is the identity.

Under the headline a full-bleed 3D render of a copper, glossy ampersand fills the width, with smaller crops of the same object floating on a light panel at different sizes. A floating white pill-shaped navigation (About, Solutions, Work, Thought plus a small menu glyph) sits over the render. An editorial paragraph in the serif follows ("Since 2010 we have used creativity to elevate some of the world's most ambitious brands, organisations and causes on the African continent and beyond."), with "2010" highlighted in orange `#f2623a`. Further down a ruled list pairs client names in light serif with uppercase grey stats ("AFRICA'S MOST VALUABLE BRAND", "OVER 1M HOMELESS CLOTHED", "19 AFRICAN MARKETS, 10 BRANDS").

The header text also cycles other words in the same headline slot (the DOM text lists CREATIVITY, ELEVATES, EVERYTHING, IMPACT, GROWTH, RELEVANCE). Whether the words rotate on screen was not measured; the capture shows the first three.

## Colors

The page is white `#ffffff` with ink `#343434` (the h1 and body color; also the largest area fill, 5,301 weight, for dark sections). Pure black `#000000` is the second largest area (5,120) and is kept as `page-body`. Light panels use `#f5f5f5` (2,045). Text on dark surfaces is white `#ffffff` (495 characters). Secondary and disabled-looking text and 1px rules are `#c1c1c1` (314 characters and 8 border occurrences).

The one accent is copper orange `#f2623a` (7 characters of text, the "2010" highlight); it matches the colors of the 3D render rather than a UI control. The root variables also define `--swatch--color: #ff9d82` (a lighter coral) and `--swatch--darker-grey: #232323`; they were declared but only the four colors above were measured on rendered elements.

No gradients or shadows were measured. A button color was not detected (`ctaCandidates` is empty), so there is no `on-primary` token.

## Typography

Two families carry the page: **ivypresto-display** (699 characters; loaded at 400 and 700, normal and italic) and **Inter** (558; loaded 300 to 700). Poppins is loaded at 300 to 700 but was not measured on rendered text.

- Display: Inter 500, 130.857px / 104.686px, letter-spacing -3.92571px, uppercase, `#343434`; 46px / 36.8px, -1.38px on the mobile pass.
- Serif display: ivypresto-display 400, 130.857px / 85.0572px, uppercase (the word "EVERYTHING"). This is the measured `body` role by the extractor and is the largest serif size.
- Editorial paragraph: ivypresto-display at 35.7143px (270 characters) and 59.7143px with -1.6px tracking (252 characters).
- Footer statement: ivypresto-display 25.7143px / 30.8571px, weight 400.
- Link and nav: Inter 500, 14px / 16.8px, -0.24px.
- Other measured sizes: 15.7143px (379 characters), 23.7143px, 21.1429px, 12px.

Weights in use: 500 (523 characters), 700 (389), 400 (219) and 600 (126). Tracking is negative at every size where it was recorded, about -3% of the font size on display and -1.7% on small text.

## Layout

The page is a single long column (8,011px high at measurement) built from full-width bands: a white headline band, a full-bleed image band, a `#f5f5f5` collage band with offset square images, an editorial text block set in a right-hand column (text starts near the horizontal midpoint in the capture), and a ruled two-column list of clients and statistics.

Paddings measured: 46px (21 occurrences), 25.7143px (13), 17.7143px (8), 150px (2), plus very large single values of 208.857px and 179.143px. Gaps: 16px (4), 25.7143px, 75.7143px, 112.857px, 8px. Spacing in the stylesheet is expressed with fluid `clamp()` variables named `--size--2rem`, `--size--10rem`, `--size--14rem`, `--size--15rem` and `--size--16rem`.

The capture shows generous white space around every element: the image band bleeds to both edges, and the small square crops are placed off-axis (one at the left third, one at the right third) so that the collage feels staggered rather than gridded. Text blocks keep short line lengths in the editorial paragraph, which gives the page its slow, premium reading rhythm.

## Elevation & Depth

There are no measured box-shadows and no borders other than 1px `#c1c1c1` rules. Depth comes from the 3D copper render, whose glossy highlights supply all the dimensionality on the page, and from the floating navigation pill which, in the capture, sits over the image without a visible shadow. The nav band's background was measured as `#ffffff` with 1,287px height at the header level (it holds the whole headline).

## Shapes

Radii measured: 4px (8 elements), 14px (2) and 12px (1). The `--radius--x-small` variable resolves to `.25rem` (4px). The floating navigation and imagery use these small radii; cards and buttons are not part of the layout. The ampersand render and collage images are squares with square or 4px corners in the capture.

## Components

- **Floating navigation**: a white rounded bar with Inter 500 14px links (About, Solutions, Work, Thought) and a menu glyph, 4px to 14px corners.
- **Link**: Inter 500, 14px / 16.8px, `#343434`, -0.24px tracking, 17px tall.
- **Headline block**: three stacked uppercase lines with 104.686px line-height on the Inter lines and tight leading.
- **Editorial paragraph**: serif, with one highlighted year in `#f2623a`.
- **Ruled list**: rows divided by 1px `#c1c1c1` lines; client name left in light serif, statistic right in grey uppercase Inter bold.
- **Footer**: white, `#343434` text, padding `25.7143px 0px 31.1429px`, statement in the serif at 25.7143px.
- **Buttons**: none detected.

## Design System Architecture

No public or official design system for The Up&Up Group was found, and none was searched for. The stylesheet exposes a systematic set of custom properties on `:root`: a fluid size scale (`--size--0-25rem`, `--size--0-75rem`, `--size--1-25rem`, `--size--2rem`, `--size--10rem`, `--size--14rem`, `--size--15rem`, `--size--16rem`, each a `clamp()` between a rem minimum and a vw-based maximum), swatches (`--swatch--color`, `--swatch--darker-grey`), a radius token (`--radius--x-small`), typography variables (`--_typography---font--primary-trim-top: .37em`, `--_typography---letter-spacing--0em`), and theme variables (`--_theme---border`, `--_theme---button-primary--background-hover`). The `_theme` indirection shows color themes switched by reassigning variables. Source: `https://www.theupandupgroup.com/`, measured into `web/data/extracted/up-up.json`.

## Do's and Don'ts

Do:
- Set the key statement in uppercase at 130.857px, mixing Inter 500 and the ivypresto serif in the same lockup.
- Keep ink `#343434` on white and reserve `#f2623a` for a single highlighted word.
- Use 1px `#c1c1c1` rules to structure lists.
- Let one rich image carry the depth.

Don't:
- Don't add shadows or gradients; none were measured.
- Don't use more than one accent color.
- Don't use positive letter-spacing on display text.
- Don't round corners beyond 14px.

## Responsive Behavior

Measured at the 390px mobile pass: the display and serif headline sizes fall from 130.857px to 46px; the 59.7143px serif drops to 56.2806px, the 35.7143px to 34.125px, 25.7143px to 24.125px, and 15.7143px to 14px; 12px stays 12px. Navigation behavior, column structure and image treatment on mobile were not measured.

## Iteration Guide

1. White canvas, `#343434` ink.
2. Headline: three uppercase lines at 130.857px with -3.92571px tracking; the last line in ivypresto-display.
3. Add a 3D hero image and a floating white nav pill.
4. Highlight one word in `#f2623a`.
5. List proof points in ruled rows with `#c1c1c1` lines.
6. Re-run `node web/scripts/verify-designs.mjs --slug=up-up` after any rename.
