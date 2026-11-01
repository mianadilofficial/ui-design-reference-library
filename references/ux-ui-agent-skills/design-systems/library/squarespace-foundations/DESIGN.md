---
version: alpha
name: "Squarespace Foundations"
category: "Agencies & Studios"
description: "Squarespace Foundations (brand.squarespace.com), the brand-guidelines microsite for Squarespace: Clarkson at 71.11px with -2.84px tracking and 21.33px body, a #111111 dark theme with white text, a white logo slide, no radii, no shadows and no buttons."
colors:
  canvas: "#ffffff"
  page-body: "#111111"
  ink: "#000000"
  text-on-dark: "#ffffff"
  primary: "#ffffff"
  surface-2: "#000000"
  surface-3: "#2a1a0d"
typography:
  display:
    fontFamily: Clarkson
    fontSize: 71.1111px
    fontWeight: 400
    lineHeight: 56.8889px
    letterSpacing: "-2.84444px"
  display-mobile:
    fontFamily: Clarkson
    fontSize: 41.6px
    fontWeight: 400
    lineHeight: 33.28px
    letterSpacing: "-1.664px"
  body:
    fontFamily: Clarkson
    fontSize: 21.3333px
    fontWeight: 400
    lineHeight: 23.4667px
    letterSpacing: "-0.426667px"
rounded:
  none: 0px
spacing:
  s1: 2.13px
  s2: 3px
  s3: 7px
  s4: 17.78px
  s5: 78.22px
components:
  index-link:
    textColor: "{colors.text-on-dark}"
---

# Squarespace Foundations

The measured page is `https://brand.squarespace.com/`, titled "Squarespace Foundations | Squarespace Foundations", English, 801px tall with 103 visible elements. It is not the Squarespace product site; it is the company's brand-guidelines presentation, a slide-style page whose only descriptive text, read from the opened page, is "Discover the essential guiding principles and distinctive visual elements that define the Squarespace identity." The page is numbered like a slide deck: 01 Logo, 02 Typography, 03 Color, 04 Photography, 05 Campaign, 06 Motion. The opened page states no brand colors, no typeface names and no logo rules in its text, so everything below comes from measurement of the page itself.

## Overview

The first slide in the capture is white. A thin header carries "Squarespace Foundations" at the left and "Index" at the right, the Squarespace mark (two interlocked S-shaped black strokes) is centred at large scale, and the footer row holds the slide number "01", the label "( Logo )" in parentheses and two arrow controls (left and right) at the lower right. There is no photograph, button or card; the page is a viewer for guideline content. The extraction, taken with the page in its loaded state, recorded a dark theme: white text (`#ffffff`, 167 characters) over `#111111` and `#000000` areas, with the h1 and paragraph positioned by CSS transforms. The page therefore has both a dark theme (the CSS root sets `--bgColor: #111` and `--textColor: #fff`) and a white slide (the capture); this file documents both and does not choose between them.

The tone is quiet and editorial: lowercase-initial sentences are avoided, labels are short nouns, slide labels are numerals plus parentheses.

## Colors

Measured background areas: `#111111` (weight 1,617), `#000000` (396), `#2a1a0d` (100), `#ffffff` (100). The only measured text color is `#ffffff`.

- `canvas` `#ffffff`: the white slide as seen in the capture.
- `page-body` `#111111`: the dark theme page ground (CSS `--bgColor`, `--color-blackBg`).
- `ink` `#000000`: the text color rendered on the white slide. The extraction recorded the computed text color as `#ffffff` for every measured character, while the capture renders the header text and mark black; the darkest pixel sampled from the capture in the header-title region and in the mark region is `#000000` (recorded in SOURCES.json). The reason for the difference is not measured.
- `text-on-dark` `#ffffff` and `primary` `#ffffff`: the computed CSS text color, used on the dark theme; there is no chromatic accent in the measured elements.
- `surface-2` `#000000` (CSS `--color-black`): the pure-black plane; `surface-3` `#2a1a0d`: a dark brown area measured at 100 weight.

The stylesheet root additionally declares a palette: `--color-blue #1823bc`, `--color-gold #c59d3d`, `--color-orange #d2593b`, `--color-grey #e1e1e1`, `--color-lightGray #f6f6f6`, `--mediaBgColor #171717`. Those are in the shipped CSS and appear to belong to the guideline pages for the Color section; they are not used by the elements measured on this first screen, and none is presented here as a Squarespace brand color because the opened page does not say so.

## Typography

A single family, Clarkson, in weights 300, 400, 500, 600 and 700, plus a "ClarksonSerifLightItalic" 300 face. Every measured character (167) is Clarkson at weight 400.

- `display`: Clarkson 71.1111px, weight 400, line-height 56.8889px, letter-spacing -2.84444px. The line-height is 0.8 of the size, so lines sit tightly. `display-mobile`: 41.6px, line-height 33.28px, -1.664px.
- `body`: Clarkson 21.3333px, weight 400, line-height 23.4667px, letter-spacing -0.426667px (153 characters); a smaller 17.7778px size with -0.711111px tracking (14 characters) is used for the labels.

Tracking is always negative: about -0.04em on display, -0.02em on body, -0.04em on labels. Sizes are fractional (71.1111, 21.3333, 17.7778) because they derive from a viewport-relative root scale rather than whole pixels. Clarkson is a licensed typeface and no substitute is named by the site.

## Layout

CSS root variables describe a 12-column grid: `--columns: 12`, `--columnWidth: 9.6rem`, `--columnGap: 1.5rem`, `--sideMargin: 1.6rem`, `--headerHeight: 5.4rem`, `--bottomMargin: 2rem`, `--arrowGap: 2rem`. Measured gaps are 78.22px (4 elements) and 17.78px (4); paddings 2.13px, 3px and 7px (one element each). The generated spacing scale: 2.13, 3, 7, 17.78 and 78.22px. In the capture, content occupies the viewport as a single slide: header at the top, content centred, footer row at the bottom.

## Elevation & Depth

No box shadows were measured (`boxShadows` is empty) and no layered surfaces appear on the first screen. Hierarchy comes from scale and tone on flat planes: the very large mark against the white slide in the capture, or white type against `#111111` and `#000000` in the dark theme. Nothing overlaps except the positioned headline and paragraph, which are moved with transforms rather than stacked with z-index shadows. Interaction depth is limited to opacity: the Index link drops to 0.5 opacity on hover.

## Shapes

`borderRadii` is empty: every rendered element computes to a 0px radius. No borders were measured. The mark's strokes are the only curved forms on the page.

## Components

No buttons, inputs, cards or footer were detected, so the only component token is the Index link text color. Measured interface elements: the header title "Squarespace Foundations"; the "Index" link at the right (hover measured: opacity falls from 1 to 0.5, color unchanged at white); a slide counter ("01"); a parenthesised label ("( Logo )"); two arrow icons for previous and next. The headline and paragraph are placed with transforms (`matrix(1, 0, 0, 1, -407.297, -33.4141)` and `matrix(1, 0, 0, 1, -196.766, -35.3594)`), recorded in the extraction.

## Design System Architecture

This page is itself the Squarespace brand-guideline presentation, but its opened text states no tokens, so no token values are cited from it. Its own stylesheet exposes a small custom-property system: color names (`--color-white`, `--color-black`, `--color-blackBg`, `--color-grey`, `--color-lightGray`, `--color-blue`, `--color-gold`, `--color-orange`), theme variables (`--bgColor`, `--textColor`, `--mediaBgColor`), and layout variables for the grid listed above. The slide structure (six numbered sections) is the content architecture. No public source link beyond the page was opened; `_research` lists the page and records that it names no colors or typefaces.

## Do's and Don'ts

Do set Clarkson with negative tracking and tight line-height; do use white on `#111111`; do keep screens free of boxes, shadows and rounded corners; do use numerals and parentheses for slide labels; do let the mark be large and centred on a white slide.

Don't add chromatic accents to chrome; the measured elements are monochrome. Don't add buttons; navigation is textual ("Index") and arrows. Don't introduce the stylesheet's blue, gold or orange into chrome. Don't use weights above 400 for the display line, since the measured display is 400.

## Responsive Behavior

Mobile pass: h1 41.6px, weight 400, line-height 33.28px, -1.664px (71.1111px on desktop), height 78px because it breaks onto two lines ("Squarespace" and "Foundations"); mobile font sizes by characters: 20.8px (42), 14.56px (14), 16.64px (12). No paragraph or navigation was detected in the mobile pass. Column behavior is not measured.

## Iteration Guide

1. Choose the dark theme (`#111111`, `text-on-dark` white) or the white slide (`#ffffff`, `ink` black mark); no other fills.
2. Clarkson only: 71.11px display at 0.8 line-height, 21.33px body, negative tracking.
3. Square everything; no shadows; arrows and "Index" as the only controls.
4. Number sections and set labels in parentheses.
5. Treat the slide numbering (01 to 06) and the parenthesised label as the only decorative text conventions on the page.
6. Verify with `node web/scripts/verify-designs.mjs --slug=squarespace-foundations`.
