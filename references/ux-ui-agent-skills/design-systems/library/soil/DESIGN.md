---
version: alpha
name: "SOIL"
category: "Culture & Events"
description: "SOIL is a Japanese performing-arts showcase site in black (#1c1d1e) on white (#ffffff): giant SeasonMix serif display caps at 48px/600 with -1.92px tracking, Akzidenz-Grotesk Next body at 17.7664px, thick dashed and solid rule lines, square 2 to 4px corners and no buttons."
colors:
  canvas: "#ffffff"
  ink: "#1c1d1e"
  primary: "#1c1d1e"
  surface-3: "#b4b7bb"
typography:
  display:
    fontFamily: SeasonMix, dnp-shuei-mincho-pr6, serif
    fontSize: 48px
    fontWeight: 600
    lineHeight: 48px
    letterSpacing: "-1.92px"
    textTransform: uppercase
  display-mobile:
    fontFamily: SeasonMix, dnp-shuei-mincho-pr6, serif
    fontSize: 35.997px
    fontWeight: 600
    lineHeight: 35.997px
    letterSpacing: "-1.43988px"
    textTransform: uppercase
  heading:
    fontFamily: akzidenz-grotesk-next-pro, dnp-shuei-gothic-gin-std, sans-serif
    fontSize: 12.4416px
    fontWeight: 700
    lineHeight: 25px
  subheading:
    fontFamily: SeasonMix, dnp-shuei-mincho-pr6, serif
    fontSize: 44.4416px
    fontWeight: 600
    lineHeight: 39.9974px
    letterSpacing: "-1.77766px"
    textTransform: uppercase
  body:
    fontFamily: akzidenz-grotesk-next-pro, dnp-shuei-gothic-gin-std, sans-serif
    fontSize: 17.7664px
    fontWeight: 500
    lineHeight: 25px
    letterSpacing: "-0.532992px"
  link:
    fontFamily: akzidenz-grotesk-next-pro, dnp-shuei-gothic-gin-std, sans-serif
    fontSize: 48px
    fontWeight: 500
    lineHeight: 48px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
spacing:
  s1: 1.77px
  s2: 2.66px
  s3: 3px
  s4: 3.55px
  s5: 4px
  s6: 4.44px
  s7: 5px
  s8: 5.32px
  s9: 6.22px
  s10: 7.1px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 0px 0px 1px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 0px 17.7664px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
  footer:
    textColor: "{colors.ink}"
    padding: 16px 17.7664px 4.4416px
---

# SOIL

## Overview

SOIL (soil-net.jp) is a bilingual-ready showcase site whose measured text says "SOIL is a JPASN project dedicated to bri…" (the paragraph is cut in the extraction). The page title is just "SOIL" and the document language is English. The 1280px desktop page scrolls 11329px. The first screen is a typographic poster: the four letters S, O, I, L are set in a huge serif and spread across the full width, framed above and below by heavy dashed black rules. Beneath it, a short carousel strip with play and arrow controls precedes a stacked headline "JAPAN SELECTION IN 2026 (ABOUT EVENT)" in which every line is separated by a hairline rule and a portrait photograph sits in the middle of the headline. A date line "2026.7.01" and an "About" link close the block with another thick rule.

The next block is labeled "WORKS:" in tiny bold type, followed by a centered three-line headline "THIS YEAR'S LINEUP : DEAL DESK OPEN" and a diagonal hairline sweeping across the page. A numbered list of eight performing-arts titles follows (The Life of Hokusai, Hamlet, Attack on Titan: The Musical, ORB: On the Movements of the Earth, Spring, Summer, Autumn and Winter, Cat Town, The Boy and the Beast, Tales of the Elsewhere Islands), shown first as a rule-separated table with a floating thumbnail and then as a second list divided by thick black bars. A feature block for "The Life of Hokusai" shows a vertical poster image beside a data table with rows such as "Performing Group: NAPPOS UNITED Co., Ltd.", "Genre: Non-verbal stage performance / Physical theater / Dance" and "Status".

The tone is editorial and gallery-like: black ink on white paper, lines doing the work that boxes do on other sites, very few colors and almost no ornament except the dashed bar motif.

## Colors

Only a handful of colors were measured, and the page is effectively two-tone.

- **Canvas `#ffffff`** is the page and header background (the nav header measures `#ffffff`).
- **Ink / primary `#1c1d1e`** is a warm near-black used for nearly all text (6231 characters), the rules and the thick bars. It is also the most extensive background by area (3285 weight), because the bar graphics and some blocks are filled with it. Primary equals ink because the site has no filled call-to-action button; the extractor found none.
- **Surface-3 `#b4b7bb`** is a cool light grey, published in the stylesheet as `--color-gray`, and measured as a minimal-area background (weight 0).

White text (`#ffffff`, 1511 characters) is also read on the dark areas. The stylesheet defines `--color-black: #1C1D1E`, `--color-white: #fff`, `--color-gray: #B4B7BB` and a `--color-red: #FF0000`; the red was not measured on any rendered element and is not carried into the tokens. Border colors measured were `#ffffff` (12) and `#1c1d1e` (2).

## Typography

Two voices are used. The display voice is **SeasonMix** (weights 500 and 600 loaded) with the Japanese serif fallback `dnp-shuei-mincho-pr6`, set in uppercase with negative tracking. The text voice is **akzidenz-grotesk-next-pro** (500 and 700) with `dnp-shuei-gothic-gin-std` as the Japanese fallback. Further Japanese faces are loaded: heisei-kaku-gothic-std (500, 700) and source-han-serif-japanese (700).

| Role | Family | Size / line-height | Weight | Letter-spacing |
|---|---|---|---|---|
| display | SeasonMix | 48px / 48px, uppercase | 600 | -1.92px |
| subheading | SeasonMix | 44.4416px / 39.9974px, uppercase | 600 | -1.77766px |
| body | Akzidenz-Grotesk Next | 17.7664px / 25px | 500 | -0.532992px |
| heading (labels like "WORKS:") | Akzidenz-Grotesk Next | 12.4416px / 25px | 700 | not set |
| link | Akzidenz-Grotesk Next | 48px / 48px | 500 | normal |
| display-mobile | SeasonMix | 35.997px / 35.997px, uppercase | 600 | -1.43988px |

The character-weighted size ladder is 16px (4773), 17.7664px (1391), 12.4416px (957), 14.2222px (185), 44.4416px (180), 48px (133), 53.3248px (74) and 74.6624px (33). The odd decimals indicate fluid, viewport-relative sizing rather than fixed steps; the cause was not investigated. Weight 500 dominates (6310 characters), then 700 (1232) and 600 (200). Tracking is always negative on measured sizes: -0.48px at 16px, -2.9865px at 74.6624px.

The letters S O I L in the masthead are far larger than the measured ladder shows; they are not in the text statistics. SeasonMix and Akzidenz-Grotesk Next are commercial Adobe-hosted faces; free stand-ins are not measured and are not part of the site.

## Layout

The page is a single 1280px column. The nav header is a 34px tall white bar with 0px 17.7664px padding holding HOME:, WORKS, JOURNAL, NEWS, ABOUT, CONTACT and MENU spread across the full width in 12.4416px bold. The footer is 800px tall with 16px 17.7664px 4.4416px padding and a numbered list (1. HOME, 2. WORKS, 3. JOURNAL, 4. NEWS …). Gaps measured: 16px (76 uses), 7.104px (48), 32px (24), 12.4416px (18), 1% (16), 17.7664px (8), 6.2208px (4) and 20px (2). Paddings are small and irregular: 3.5456px, 5.3248px, 1.7664px, 2.6624px, 16.8832px. Content alignment alternates between flush-left labels, centered headlines and flush-right titles, with horizontal rules marking each row.

## Elevation & Depth

No box shadows were measured. Depth is expressed with hierarchy of lines: heavy black bars for section edges, hairlines between rows, and photographic images placed on top of headline text to create a layered effect. Nothing floats on a shadow; the only overlaps are intentional image-over-type collisions.

## Shapes

The page is almost entirely square-cornered. Measured radii are 4px (8 elements), 2px (2) and 3px (1); the generated scale is xs 2px, sm 3px and md 4px. Everything else computes to a 0px radius. Photographs are rectangles, and the thick rule bars are drawn as dashes with rounded ends in the masthead.

## Components

- **nav**: white header, 34px high, items in Akzidenz-Grotesk Next 12.4416px/700, color `#1c1d1e`, side padding 17.7664px.
- **nav-link**: 12.4416px bold labels with a trailing colon on the home item ("HOME:") and numbered footer equivalents.
- **link**: 48px/500 headline links wrapping an entire project row, 1px bottom padding.
- **footer**: 16px/700 numbered link list, 800px tall.
- **list row**: a number, a title and hairline dividers, shown in both a large and a compact variant.
- **data table**: label in bold, value in medium weight, in the project feature block.
- No button, input or card with a fill was measured.

## Design System Architecture

No public design system or brand guideline was found; no brand, press or style-guide links appeared in the page HTML opened. The shipped CSS shows the de-facto system: UnoCSS-style utility variables (`--un-ring-color`, `--un-ring-offset-color`) and a four-variable color palette named `--color-black`, `--color-white`, `--color-gray` and `--color-red`. Typefaces are loaded as web fonts by family name (SeasonMix, akzidenz-grotesk-next-pro, heisei-kaku-gothic-std, source-han-serif-japanese, dnp-shuei-gothic-gin-std, dnp-shuei-mincho-pr6). Reference: https://soil-net.jp/

## Do's and Don'ts

- Do set display type in SeasonMix 600 uppercase with negative tracking.
- Do separate content with rules and bars in `#1c1d1e`.
- Do keep corners square, or at most 2 to 4px.
- Don't add fills, gradients or shadows; the measured page uses black and white only.
- Don't introduce the stylesheet's `#FF0000` as a UI color; it was not measured on any element.
- Don't set Japanese text in the Latin faces; the page loads dedicated Japanese faces.

## Responsive Behavior

The 390px mobile pass measured: display falls to 35.997px (from 48px) with -1.43988px tracking; body falls to 15.9978px / 25px weight 500 with -0.479934px tracking; and the mobile size ladder is 15.9978px, 13.9971px, 29.9988px, 35.997px, 16px, 17.9985px, 11.9964px, 25.9974px, 14.2222px and 12.9987px. Mobile layout structure (nav, list columns) was not measured.

## Iteration Guide

1. Begin with white and `#1c1d1e` only.
2. Use rules, not boxes, to organize content; choose thick bars for section edges and hairlines for rows.
3. Pair a serif display with a grotesque text face at tight negative tracking.
4. Keep radii at or below 4px.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=soil --url=https://soil-net.jp/ --force --no-motion` after site changes.
