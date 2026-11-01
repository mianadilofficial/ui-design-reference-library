---
version: alpha
name: S-2K (Honda S2000 tribute)
category: "Business & Corporate"
description: "S-2K (s-2k.webflow.io), a Webflow tribute site to the Honda S2000 (1999-2009): off-white #efefef and near-black #0e0e0e, PP Neue Montreal at weight 200 up to 192px, IBM Plex Mono 12.8px uppercase labels, orange #ff7700 markers, no radius, no shadows."
colors:
  canvas: "#efefef"
  ink: "#0e0e0e"
  primary: "#ff7700"
  surface-3: "#2a292c"
  ink-gray: "#a0a0a0"
  accent-yellow: "#ffd12c"
typography:
  display:
    fontFamily: "\"Ppneuemontreal Book\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 200
    lineHeight: 36.8px
    letterSpacing: "-0.256px"
  display-mobile:
    fontFamily: "\"Ppneuemontreal Book\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 200
    lineHeight: 27.6px
    letterSpacing: "-0.192px"
  body:
    fontFamily: "\"IBM Plex Mono\", sans-serif"
    fontSize: 12.8px
    fontWeight: 300
    lineHeight: 20px
    letterSpacing: "-0.128px"
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 2px
  s2: 3.2px
  s3: 4px
  s4: 6.4px
  s5: 11.2px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 48px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.canvas}"
    padding: 24px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    padding: 3.2px 3.2px 3.2px 6.4px
---

# S-2K (Honda S2000 tribute)

## Overview

The measured page is https://s-2k.webflow.io/ (title "S-2K"), a Webflow-hosted tribute whose hero reads "A tribute to the engineering, design, and culture of Honda's iconic roadster." It is a single long scrolling page (1280px wide, 19974px tall) about the Honda S2000, built as an editorial automotive piece. The hero is a full-bleed photograph of a yellow S2000 under oversized light-weight lettering: "HONDA" in upright capitals at left, "S2000" in a slanted italic at right, and "(99—09)" at the top right. Four faint vertical column rules and small "+" crosshair marks at the corners give it a technical-drawing frame. A small mono nav list sits in the hero (BRIEF, ENGINEERING + ARTISTRY, MILESTONES IN MOTION, PURE ANALOG THRILL, UNDER THE SURFACE, THE LEGACY), a "GEARS (06)" label sits at the center, and a small analog speedometer dial with a digital "0 MPH" readout appears below the hero.

Past the hero the page turns off-white (#efefef) with large gray paragraphs of story text introduced by orange-marked mono labels such as "ABOUT" and "GEAR 01". Spec lines are in mono capitals (for example "DOHC VTEC 2,157 CC 2.2L N.A INLINE 4"). The tone is reverent and spare. This is a fan or portfolio tribute, not Honda's own site.

The story copy visible in the capture begins "Unveiled in 1999 to mark Honda's 50th anniversary, the S2000 was built to embody racing technology in a street-legal package", set as one very large gray paragraph. Section names echo car vocabulary: "GEARS (06)", "GEAR 01", "ANALOG", "UNDER THE SURFACE", "THE LEGACY". Numbers in parentheses and double-digit gear counters are the page's recurring microcopy device, and every spec is stated as a terse capital-letter line instead of a full sentence, which keeps the page quiet and technical.

## Colors

Two neutrals set the page. `canvas` #efefef (the site's `--white`) is the light section background (10855 weight), and the near-black #0e0e0e (`--black`, `ink`) is the dark section background (14286 weight) and the text on light areas (653 characters). Text on dark and over the hero is #efefef (2667 characters). `surface-3` #2a292c (2458 weight) is a warm charcoal fill. `ink-4` #a0a0a0 (`--light-gray`) is the gray of the large story paragraphs and the only border color (10 uses). The accents are orange `primary` #ff7700 (`--orange`, 104 characters of text, used for the small triangle markers beside labels) and yellow `ink-5` #ffd12c (`--yellow`, 6 characters). A translucent gray #8888882b appears as a fill (46 weight) and #ff2b00 as a zero-area red, the latter matching the red end of the speedometer arc in the capture.

There is no button on the page, so `primary` is an accent, not an action fill.

## Typography

Three families plus a dial face. PP Neue Montreal (loaded as "Ppneuemontreal" at 200 and 400, and as "Ppneuemontreal Book" at 300) is the grotesque for display and story text; PP Formula (regular and italic) is the condensed or extended face for the slanted "S2000" mark (264 characters); IBM Plex Mono (200, 300, 400) is the label and spec face; "Digital 7" (italic) is the speedometer's seven-segment readout.

Measured styles: `display` is PP Neue Montreal Book, weight 200, 32px / 36.8px with -0.256px letter-spacing (the hero tagline, color #efefef); `display-mobile` is the same at 24px / 27.6px with -0.192px; `body` is IBM Plex Mono weight 300, 12.8px / 20px, -0.128px letter-spacing, uppercase. Large sizes by character count: 32px (2178), 51.2px (359), 108.8px (210), 153.6px (36), 64px (28), 192px (18); mono labels at 12.8px (655), and 14px (19). Weights are 200 (2177 characters), 300 (658) and 400 (671). The root variables record the tracking system: `--h1-letter-spacing` -.018em, `--h2-letter-spacing` -.008em and `--mono-letter-spacing` -.01em, so tracking is slightly negative on every face. `--h2` is `clamp(1.5rem, 2.5vw, 3rem)` and `--big-para` is `clamp(2rem, 4vw, 5rem)`.

## Layout

The grid is four equal columns, shown as vertical hairline rules in #a0a0a0 across the light section. Crosshair "+" marks sit at grid intersections, and labels hang from the left edge with an orange triangle marker. Big paragraphs span the full width with a deep first-line indent. The root variables define the page rhythm: `--body-padding` 1.5rem (24px), `--1-5r-spacing` 1.5rem, `--cross-overlay-padding` 1.25rem (20px). Measured paddings are 24px (41 uses), 16px (10), 3.2px (8), 6.4px (6) and 20px (4). The nav link padding is `3.2px 3.2px 3.2px 6.4px`. A scroll-length variable `--idk` is `clamp(200svh, 210svh, 250svh)`, which indicates tall, scroll-driven sections.

## Elevation & Depth

None. No box shadows and no border radii are measured. Depth is photographic (the hero image behind type) and structural (fine #a0a0a0 rules, crosshair marks, alternating #0e0e0e and #efefef sections).

## Shapes

No radius was measured: `borderRadii` is empty, so every rendered element computes 0px. The tokens declare `rounded` with `none: 0px`. The only curved forms are the speedometer dial artwork and the slanted italic lettering.

## Components

**Nav list**: mono 12.8px uppercase, #efefef on the hero, padding `3.2px 3.2px 3.2px 6.4px`, six items stacked in a short block (measured in the extraction as a nav of six links).

**Label**: mono 12.8px uppercase, #a0a0a0 or #0e0e0e, preceded by a small orange #ff7700 triangle ("ABOUT", "GEAR 01").

**Link**: mono 12.8px / 20px uppercase, #0e0e0e (for example "MOONROCK").

**Hero lockup**: "HONDA" and the italic "S2000" in oversized light type at 108.8px to 192px, "(99—09)" at the top right.

**Speedometer**: an SVG dial with tick marks, a red arc end and a Digital 7 readout; decorative and interactive artwork rather than a UI control.

**Story paragraph**: PP Neue Montreal Book at weight 200, 51.2px, color #a0a0a0 on #efefef.

## Design System Architecture

No public design system or token package for this site was opened. The Webflow build exposes 15 root variables that function as its tokens: `--white` #efefef, `--black` #0e0e0e, `--light-gray` #a0a0a0, `--orange` #f70, `--yellow` #ffd12c, `--body-padding`, `--1-5r-spacing`, `--cross-overlay-padding`, `--h1-letter-spacing`, `--h2-letter-spacing`, `--mono-letter-spacing`, `--h2`, `--big-para`, `--100` and `--idk`. The system is therefore a small palette of two neutrals, one gray and two accents, three type families, and fluid `clamp()` sizes.

## Do's and Don'ts

- Do set display and story text in PP Neue Montreal at weight 200 with slightly negative tracking.
- Do set every label and spec in IBM Plex Mono, uppercase, 12.8px.
- Do mark labels with a small orange #ff7700 triangle.
- Do keep the palette to #efefef, #0e0e0e, #2a292c, #a0a0a0 plus orange and yellow accents.
- Do frame sections with fine vertical rules and "+" crosshairs.
- Don't add radius or shadow; none is measured.
- Don't use orange as a button fill; no button is measured.
- Don't present the page as Honda's official site.

## Responsive Behavior

A 390px mobile pass was recorded. The tagline measured 24px / 27.6px (weight 200, -0.192px tracking), and mobile size counts are 24px (2177), 12.8px (655), 28.8px (359), 64px (124), 80px (36), 38.4px (28) and 14px (19). Mono labels stay 12.8px / 20px. Column counts, navigation and breakpoints were not measured.

## Iteration Guide

1. Start with #efefef and #0e0e0e sections, #a0a0a0 for secondary text and rules.
2. Set display text at weight 200 in PP Neue Montreal with -0.018em tracking; use the mono face for labels.
3. Mark labels with the orange #ff7700 triangle; use yellow #ffd12c sparingly.
4. Frame content with four-column hairlines; keep corners square.
5. Gate: `node web/scripts/verify-designs.mjs --slug=s-2k`.
