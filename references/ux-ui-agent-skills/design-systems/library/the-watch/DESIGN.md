---
version: alpha
name: FS 60P by 60fps
category: "Business & Corporate"
description: "Monochrome single-product site for the FS 60P automatic watch by 60fps: Nekst uppercase display at 311px, Inter micro body at 10.67px, canvas #ebebeb fading to black #0a0a0a, near-zero chrome and radii of 4px, 5px and a full circle."
colors:
  canvas: "#ebebeb"
  page-body: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  surface-dark: "#0a0a0a"
  surface-gray: "#a1a1a1"
  ink-muted: "#00000066"
  ink-faint: "#bcbcbc"
  ink-graphite: "#323232"
  ink-on-dark-muted: "#ffffff66"
  hairline: "#c8c8c8"
typography:
  display:
    fontFamily: Nekst, sans-serif
    fontSize: 311.111px
    fontWeight: 400
    lineHeight: 248.889px
    textTransform: uppercase
  display-mobile:
    fontFamily: Nekst, sans-serif
    fontSize: 100px
    fontWeight: 400
    lineHeight: 80px
    textTransform: uppercase
  subheading:
    fontFamily: Nekst, sans-serif
    fontSize: 170.667px
    fontWeight: 400
    lineHeight: 133.12px
  body:
    fontFamily: Inter, sans-serif
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 10.6667px
rounded:
  xs: 4px
  sm: 5px
  pill: 9999px
spacing:
  s1: 10px
  s2: 10.67px
  s3: 13.33px
  s4: 17.07px
  s5: 17.78px
  s6: 19.82px
  s7: 20px
  s8: 38px
  s9: 52px
  s10: 123px
components:
  model-label:
    textColor: "{colors.ink-faint}"
    typography: "{typography.subheading}"
---

## Overview

"FS 60P - The timeless automatic watch by 60fps" (thewatch.60fps.fr) is a single-product showcase for an automatic watch by 60fps (the page title credits 60fps). The page title is the only descriptive text a plain fetch of the page returns (it shows a "Now loading" state), so all visual facts below come from the rendered measurement and capture. The first screen shows an enormous "FS 60P" wordmark split around a 3D render of a silver-steel chronograph watch, a thin circular dial graphic behind it, and a labelled picker reading "MODEL 146GR" with "Color Silver Steel". Further down, the page fades from light grey to solid black and shows ghosted headline text ("FS—60P THE TIMELESS AUTOMATIC 60MM") and a final white "FS 60P" on black.

The feel is clinical, technical and product-first: grey studio light, no decorative colour, and the product itself supplying the only chrome-and-metal highlights. Interaction copy is imperative and tiny: "SWAP", "HOLD TO EXPLORE", "SELECT MODEL". The extractor found 296 visible elements, one font weight (400) across 918 weighted characters, and no hover states.

## Colors

The palette is strictly neutral and every value is measured.

- Canvas `#ebebeb` is the largest light area (5120 area weight) and the top of the page.
- Page-body `#ffffff` is the body background role.
- Ink and primary `#000000`: the most-read text (555 characters) and also the only action colour; there is no chromatic accent. The extractor detected no CTA.
- Surface-dark `#0a0a0a` (4096 area) is the black closing section; surface-gray `#a1a1a1` (3072) is a mid-grey band in the gradient.
- Ink-muted `#00000066` (black at 40%) and ink-on-dark-muted `#ffffff66` (white at 40%) are the secondary text on light and dark; ink-faint `#bcbcbc` is the "MODEL 146GR" heading colour; ink-graphite `#323232` is deep grey text.
- Hairline `#c8c8c8` is the single measured border colour.

The stylesheet also contains `#a1a1a14d`, `#a1a1a126`, `#a1a1a113`, `#070707`, `#0000004d` and `#66666680`, i.e. alpha steps of the same greys used for gradients and veils.

## Typography

Two families only: Nekst (400) for display and Inter (400) for everything small. Characters measured: Inter 772, Nekst 146.

- Display: Nekst, uppercase, 311.111px on 248.889px line (0.8), weight 400 (the "FS 60P" h1). Mobile: 100px on 80px.
- Subheading: Nekst, 170.667px on 133.12px, the "MODEL 146GR" line.
- Body: Inter, 10.6667px with 10.6667px line height. Secondary sizes 10px and 9px; 53.3333px and 320px are also recorded for graphic numerals.

Scale ratio is extreme: the headline is about 29 times the body size (311.111 / 10.6667). Pair huge geometric Nekst caps with micro Inter captions; do not use intermediate sizes. Font substitutes: Nekst is a commercial/proprietary face; a wide geometric sans (for example Michroma or Orbitron) is a design substitute, not measured.

## Layout

The page is a vertical sequence of full-viewport scenes (the capture's three tones: light grey, gradient to black, black). Measured gaps are 17.7778px, 10px, 38px, 123px and 20px; paddings include 124.444px, 17.0667px, 19.8222px, 133.333px, 13.3333px, 10.6667px, 52px, 130px and 400px. The headline spans the full 1280px width (h1 box 1280 by 286) while captions sit at the lower left. The spacing tokens retain those numbers (s1 to s10).

## Elevation & Depth

No box shadows were measured. Depth is created by the lit 3D watch render, a thin circular dial ring with a graduated highlight and the vertical light-to-black gradient. Translucent text (40% black or white) provides hierarchy instead of borders. The single border colour is `#c8c8c8`.

## Shapes

Measured radii: `4px` and `5px` on small controls and `50%` on the circular dial elements (represented here as `pill: 9999px`). Everything else is square. The circle is the one ornamental shape: the watch sits in a ring that doubles as the model selector.

## Components

- Model label: "MODEL" in Nekst 170.667px, colour `#bcbcbc`, paired with a small "Color / Silver Steel" caption in Inter.
- Swap and Hold-to-explore prompts: tiny uppercase Inter text; not detected as buttons by the extractor.
- Dial ring: circular 50% radius graphic around the product.
- Ghost headline: Nekst at reduced opacity over the gradient.

No buttons, inputs or cards were measured, so none are tokenised.

## Design System Architecture

No public design system or brand guideline exists for this showcase; the pages opened were https://thewatch.60fps.fr/ (extractor and a plain fetch that returned only the title and a loading message). The de-facto system is minimal: the stylesheet has a single custom property (`--vh: 1vh`), a neutral grey ramp and two fonts. Everything else is bespoke scene styling.

## Do's and Don'ts

- Do keep the page monochrome and let the product carry any highlight.
- Do use Nekst uppercase at huge sizes with tight 0.8 line height.
- Do use Inter at about 10.67px for captions and 40% alpha for secondary text.
- Don't add accent colours, drop shadows or rounded cards.
- Don't introduce mid-size headings between 53px and 170px; the measured scale jumps.
- Don't rely on a 4px or 5px radius for large surfaces.

## Responsive Behavior

Mobile pass (390px) measured: the h1 shrinks from 311.111px to 100px (line height 80px), the body from 10.6667px to 12px, with other sizes 11px, 54px, 40px and 160px recorded. The mobile capture keeps the same three-scene sequence with the watch centred under the wordmark. Breakpoint widths and navigation behaviour were not measured.

The measured mobile type ranking is 12px (438 characters), 11px (293), 54px (106), then 100px, 40px and 160px (10 each). That means on mobile the small captions grow slightly (10.6667px to 12px) while the display drops by roughly two thirds (311.111px to 100px); the mobile body line is no longer equal to its font size because only the font size was recorded and the mobile line height for body was not measured. Colour, radius and font family are unchanged between the two passes where recorded. Touch targets, tap behaviour and menu patterns are not measured, and this document makes no claim about them.

## Iteration Guide

1. Set the canvas `#ebebeb`, ink `#000000` and one product image.
2. Place the Nekst display at 311.111px and verify the 0.8 line-height rule.
3. Add Inter captions at 10.6667px with 40% alpha for secondary text.
4. Finish with the dark scene `#0a0a0a` using white text.
5. Gate it with `node web/scripts/verify-designs.mjs --slug=the-watch`.

### Measured reference

All figures in this block are verbatim from the desktop extraction (weight in parentheses is the measured character, area or occurrence weight).

- Font families by characters: Inter (772), Nekst (146).
- Font sizes by characters: 10.6667px (731), 170.667px (116), 10px (25), 9px (16), 311.111px (10), 53.3333px (10), 320px (10).
- Font weights by characters: 400 (918).
- Letter spacing by size: none recorded.
- Text colours by characters: #000000 (555), #ffffff (161), #00000066 (71), #bcbcbc (44), #323232 (38), #ffffff66 (32), #dddddd (17).
- Background colours by area: #ebebeb (5120), #0a0a0a (4096), #a1a1a1 (3072), #bcbcbc (3), #323232 (2), #b9b6bd (0).
- Border radii: 50% (1), 5px (1), 4px (1).
- Box shadows: none recorded.
- Border colours: #c8c8c8 (1).
- Gaps: 17.7778px (10), 10px (6), 38px (6), 123px (2), 20px (2).
- Paddings: 124.444px (14), 17.0667px (10), 19.8222px (10), 133.333px (3), 400px (1), 130px (1), 10.6667px (1), 13.3333px (1), 52px (1).
- Stylesheet colours by count: #000000 (29), #ffffff (8), #00000066 (8), #ebebeb (5), #ffffff66 (4), #a1a1a1 (3), #0a0a0a (3), #bcbcbc (3), #a1a1a14d (2), #a1a1a126 (2), #a1a1a113 (2), #a1a1a109 (2), #a1a1a105 (2), #a1a1a100 (2).
- Stylesheet font sizes: 12px, 100px, 60px, 54px, 11px, 200px, 40px, 192px, 20px, 120px, 160px, 9px, 10px.
- Stylesheet radii: 5px, 4px, 3px.
- Fonts loaded: Nekst 400 normal, Inter 400 normal.
- Visible elements: 296; document language: en; hover states recorded: 0.
