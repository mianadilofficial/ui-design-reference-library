---
version: alpha
name: Smooothy
category: "Tech & AI"
description: "Smooothy (smooothy.federic.ooo), the open-source smooth slider library page: pure black canvas #000000 with white #ffffff text in Geist at 41.6px headings with -3.328px tracking and 14px semibold links, no rounded corners at all, no color accents, and hand-drawn white line icons beside large bubble lettering and 3D food slides."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
typography:
  heading:
    fontFamily: Geist, sans-serif
    fontSize: 41.6px
    fontWeight: 400
    lineHeight: 41.6px
    letterSpacing: "-3.328px"
  subheading:
    fontFamily: Geist, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  link:
    fontFamily: Geist, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
rounded:
  none: 0px
spacing:
  s1: 2px
  s2: 8px
  s3: 9.6px
  s4: 12px
  s5: 16px
  s6: 28.8px
  s7: 32px
  s8: 48px
  s9: 64px
  s10: 80px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
    padding: 8px 0px
  footer:
    textColor: "{colors.ink}"
    padding: 48px 0px 0px
---

## Overview

Smooothy is a configurable slider library by Federico Valla, shown on its own page at smooothy.federic.ooo (page title "Smooothy"). The fetched page describes it as a "configurable customisable extendable smooth bring your own whatever slider API", written in JavaScript and TypeScript, framework-agnostic, at version 0.0.35 when opened. The page doubles as a playful demo: the body text in the measured capture reads "Look mom I made this".

The capture shows a pure black page. A small white bubble-lettered logo sits at the top left. The first screen is a horizontal slider of 3D-rendered food objects on flat colored rectangles: a strawberry cake slice on orange, a toast with fungus on yellow and pink, and a half fish on pale blue. After that comes a very large white bubble-lettered word ("SET") and sparse white hand-drawn line icons: a wave, a bone-like shape, grids of frames, arrows, a diagram of boxes. There is almost no UI chrome: no buttons, inputs or cards were measured, and the extractor found no CTA candidates.

According to the page text I opened, the sections are: header navigation, hero, a product list of six slides (Toast, Fish but no Head, Hotdog, Ramen Bowl, Just a Fungus, Cake Slice, each priced at 33.23 yen), Configure (callbacks and event API), Get (reading state and animation parameters), parallax demo items, WebGL utilities, "Works everywhere" (framework support), Open (contribute and issues), Source, In Use (a showcase of sites using the library) and a footer with the logo, social links and credits.

The voice is informal and playful, with a documentation layer underneath.

## Colors

The palette of the interface is two values: #000000 (canvas, confirmed by the capture) and #ffffff (all 218 measured characters of text). The measured background-by-area ranking shows only #ffffff with weight 0, because the black background is the page itself. The CSS corpus lists #ffffff (3), #00000000 (3), #000000 (1) and a handful of single-use values (#861043, #e5e7eb, #d5d5d5, #a0a0a0, #727272, #545454, #404040).

- **canvas #000000**: the page.
- **ink / primary #ffffff**: text and links; there is no separate accent color.
- The root variables define a Tailwind-style gray scale in oklch (gray-200 through gray-900) and a pink-900 (oklch(.408 .153 2.432)); these are available in the stylesheet but not measured as rendered fills, so they are not tokens.

Color on the page comes from the 3D food objects and their flat rectangles (orange, yellow, pale blue), which are imagery, not interface tokens.

## Typography

Loaded fonts: Geist at 400 and 600 and Geist Mono at 400. Geist carries all 218 measured characters. The root variables name --font-sans "Geist", sans-serif and --font-mono "Geist Mono", monospace.

Sizes by characters: 12px (110) and 14px (108). Weights: 400 (141) and 600 (77). Letter spacing measured at 12px is -0.3px (65 characters). The h2 role is 41.6px weight 400 with line-height 41.6px and -3.328px letter spacing (-0.08em). Tracking variables in the stylesheet are --tracking-tight -.025em, --tracking-tighter -.05em, --tracking-wide .025em, --tracking-wider .05em and --tracking-widest .1em.

- **heading** 41.6px / 41.6px, weight 400, -3.328px.
- **subheading** 12px / 18px, weight 400.
- **link** 14px / 21px, weight 600.

The oversized bubble lettering and the line icons in the capture are artwork (raster or vector), not text in a font.

## Layout

The desktop page is 1280px wide and 9714px tall with 711 visible elements. The stylesheet defines a 12-column grid: --columns 12, a margin of --gx 1.8rem, a gutter of .6rem and a navigation height of --spacing-nav-height 8em. A spacing set is declared too: --spacing .25rem, --spacing-sm .5rem, --spacing-md 1rem, --spacing-lg 2rem, --spacing-xl 3rem, --spacing-lgx 3.2rem.

Measured gaps: 8px (52), 9.6px (36), 48px (8), 16px (6), 102.667px (6), 64px (6), 32px (4), 12px (4), 96px and 88px (2). Paddings: 8px (48), 48px (17), 28.8px (13), 16px (11), 32px (10), 2px (4), plus large values of 128px, 160px, 205.333px, 96px, 308px, 102.667px and 80px. The navigation uses 8px 0px; the footer 48px 0px 0px.

## Elevation & Depth

No shadows and no borders were measured. The page has no elevation system: everything sits flat on black, and depth comes only from the 3D renders and the WebGL slides.

## Shapes

The measured border radius list is empty: every rendered element computes a 0px radius, so the rounded scale is `none: 0px`. The stylesheet declares --radius-xl .75rem, but no element used it in the measured page, so it is not a token. Visual shapes (bubble letters, hand-drawn icons, 3D objects) are imagery.

## Components

**Link.** White 14px weight-600 text, 21px line height, 68px wide in the measured instance, no underline or fill.

**Navigation.** A row of links with 8px 0px padding over the black page.

**Footer.** White text, 48px of top padding, with the logo, social links and credits.

**Slider.** The core demo: draggable, snapping, infinite horizontal slides, each with a flat colored rectangle behind a 3D object, plus a price line and a name.

No button, input or card style was measured, so none is declared.

## Design System Architecture

No separate design-system documentation exists, but the page is documentation for a library (source: https://smooothy.federic.ooo/ and the repository at https://github.com/vallafederico/smooothy, both listed on the page): the fetched page links to the GitHub repository (vallafederico/smooothy), the README, extend, frameworks, WebGL and Webflow docs and a credits page for 3D models and fonts. The stylesheet itself is a Tailwind-style token set (spacing, tracking, text sizes such as --text-sm .7rem, --text-md 1.2rem, --text-lg 1.6rem and --text-xl 2rem, easing curves) with a 12-column grid. Tokens in this file come from the measured computed styles.

## Do's and Don'ts

- Do keep the page black and the text white.
- Do let imagery (3D objects, bubble type, line drawings) supply all color.
- Do use tight negative tracking on headings.
- Do keep corners square; no radius was measured.
- Don't add accent colors, shadows or borders to interface elements.
- Don't add buttons or cards that the page does not use.

## Responsive Behavior

The mobile pass measured: h2 41.6px (332px wide), body 12px (126px wide, "Look mom I made this"), nav 14px (390px wide). Mobile character-weighted sizes are 12px (110) and 14px (108). Layout changes between viewports were not measured.

## Iteration Guide

1. Start with #000000 and #ffffff only.
2. Set headings at 41.6px weight 400 with -3.328px tracking and links at 14px weight 600 in Geist.
3. Lay out content on the 12-column grid with a .6rem gutter.
4. Let one large artwork or slider dominate each screen.
5. Keep every corner square and every surface flat.
6. Gate: node web/scripts/verify-designs.mjs --slug=smooothy.

## Additional Measurement Notes

The page's measured text is tiny compared with its artwork: only two font sizes (12px and 14px) and two weights (400 and 600) appear across 218 characters, while the h2 role adds 41.6px. This makes the layout image-led: slides, bubble lettering and line icons carry the visual weight and the text carries only labels, prices, option names and documentation. The spacing scale in the frontmatter runs from 2px to 80px and reflects the 8px rhythm of the navigation and list rows, with larger gaps such as 48px, 64px and 96px between demo blocks. When extending the page, add a new demo block rather than a new component style, keep the Geist and Geist Mono pairing, and keep the interface strictly black and white.
