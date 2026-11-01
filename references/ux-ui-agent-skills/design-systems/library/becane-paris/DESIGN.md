---
version: alpha
name: Bécane Paris
category: "Fashion & Apparel"
description: "Bécane Paris (becaneparis.com), a women's apparel label: an off-white #f6f6f6 canvas with near-black #0a0a0a type in the wide custom face Eurostile Becane, tiny 8px uppercase labels in 3px-radius white bars floating at the page edges, a 30px uppercase manifesto and a row of cut-out product figures."
colors:
  canvas: "#f6f6f6"
  ink: "#0a0a0a"
  ink-muted: "#b2b2b2"
  ink-hover: "#666666"
  primary: "#0a0a0a"
  on-primary: "#ffffff"
  surface-white: "#ffffff"
  surface-red: "#ff0000"
  divider: "#e6e6e6"
typography:
  display:
    fontFamily: "\"Eurostile Becane\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 30px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Eurostile Becane\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 20px
    textTransform: uppercase
  nav:
    fontFamily: "\"Eurostile Becane\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 8px
    fontWeight: 400
    lineHeight: 8.8px
    letterSpacing: 0.32px
    textTransform: uppercase
  nav-mobile:
    fontFamily: "\"Eurostile Becane\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 11px
    letterSpacing: 0.4px
    textTransform: uppercase
rounded:
  xs: 1px
  sm: 3px
spacing:
  s1: 2px
  s2: 8px
  s3: 10px
  s4: 20px
  s5: 86px
components:
  bar:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    height: 12px
  link-hover:
    textColor: "{colors.on-primary}"
  nav:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    height: 86px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    height: 12px
  count:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
---

## Overview

`https://www.becaneparis.com/` (the page title is "Bécane"; a later fetch returned "Collection | Bécane") is a deliberately sparse, gallery-like storefront for a Paris women's apparel label. The page is 1,623px tall at 1280px wide and has only 107 visible elements. There is no hero image, no banner and no buttons. The interface is a set of small white "bars" pinned to the edges of an off-white field, with the products themselves, photographed as small standing cut-out figures, forming a single horizontal row across the middle of the first screen.

The page shows, in order: a top-left bar with the italic wordmark "BECANE" above a second row of links, "ALL 27", "STORIES 04" and, at the right of the bar, "CART 00"; a top-right bar reading "COLLECTION 01 / 01" with a small framed thumbnail; a small label "COLLECTION 01 / 01" over the large word "COLLECTION" (30px, bold, uppercase) and a "PRODUCTS 14" line; a row of eleven visible cut-out model figures on the plain canvas; a bottom-left bar reading "14 PRODUCTS" with a grey "DISCOVER"; a hairline divider; a row of footer link bars ("TERMS OF SERVICE", "SHIPPING POLICY", "SIZE GUIDE" at left, "HELLO@BECANEPARIS.COM" and "INSTAGRAM" at right); and a centred manifesto in large uppercase type: "BORN ON THE ROAD, MADE FOR THE CITY. TECHNICAL, PROTECTIVE AND UNAPOLOGETICALLY FEMININE, OUR PIECES GIVE WOMEN THE CONFIDENCE TO MOVE FREELY. A CALL TO CARVE YOUR OWN PATH, WITH NO COMPROMISE AND NO CONCESSION."

The voice is declarative and terse, and numbers are part of the interface: counts ("27", "04", "00", "14") sit beside labels in a lighter grey, and "01 / 01" pairs show position.

## Colors

The palette is two neutrals plus a white and one unexplained red.

- **Canvas and ink:** `canvas` `#f6f6f6` (2,078 area units, the page and the declared `--color-off-white`) and `ink` `#0a0a0a` (354 characters, the declared `--color-off-black`, aliased as `--color-main`). `primary` is the same `#0a0a0a`; there is no coloured action.
- **White:** `surface-white` `#ffffff` (53 area units) is the fill of the label bars (declared as `--color-white` and as `--color-inner-background`). `on-primary` is `#ffffff`, the text colour measured on hover for the "DISCOVER" link.
- **Muted:** `ink-muted` `#b2b2b2` (21 characters, declared `--color-medium-grey`) colours the counts ("27", "04", "00"), the "01 / 01" pair and "DISCOVER". `ink-hover` `#666666` is the declared `--color-hover`. `divider` `#e6e6e6` is the declared `--color-divider` and the measured border colour of the one rule.
- **Red:** `surface-red` `#ff0000` is a measured background (800 area units, more than the white bars). It does not appear in the capture and where the page uses it was not identified, so it has no role here beyond being a measured value.
- **Overlay:** the stylesheet declares `--color-overlay` as `hsla(0,0%,96%,.8)`, a translucent off-white; no element using it was identified.

## Typography

A single custom family, Eurostile Becane, is loaded in 400 and 700 (375 measured characters), with `"Helvetica Neue", Arial, sans-serif` as the declared fallback (declared as `--main-font-name`, with `--main-font` adding the fallbacks). Its letterforms are wide and extended in the capture; only the declared fallbacks are documented as substitutes.

- `display` 30px / 700 / 30px, uppercase (221 characters): "COLLECTION" and the centred manifesto. The line height equals the font size, so the multi-line manifesto is set solid. At 390px it becomes `display-mobile`, 20px / 700 / 20px.
- `nav` 8px / 400 / 8.8px with 0.32px letter-spacing, uppercase (154 characters, 131 of them tracked): every label, link, count and footer item. This is also the root text style of the page (the `body` element measures 8px / 400 / 8.8px). The mobile pass measures 10px / 400 / 11px with 0.4px tracking (`nav-mobile`).

Only two sizes and two weights were measured: 30px at weight 700 (221 characters) and 8px at weight 400 (154 characters). Every measured text role is uppercase, and letter-spacing appears only on the 8px labels.

## Layout

The stylesheet declares a 12-column grid and expresses all lengths in a custom unit, `--rem`, set to 1px: `--grid-margin` 30rem, `--grid-gutter` 20rem, `--grid-column` as `(100vw - 11 gutters - 2 margins) / 12`, `--gap` 10rem, `--gap-s` 8rem, `--bar-height` 28rem, `--header-height` as twice the bar height, `--headings-height` 46rem and `--width-reference` 1440. In the capture, bars sit in the corners at a small inset, the headline block starts at the left margin, the figure row spans the width with generous empty space above and below, and the footer bars run along one line.

The top-left navigation block measures 310px by 86px. Measured gaps are 8px (8 uses), 10px (4) and 20px (2); paddings are 10px (14), 8px (6), 2px (4) and 86px (1). The manifesto is a centred column in the capture; its box width was not recorded.

## Elevation & Depth

None. No box-shadow was measured. Separation is by flat white bars on an off-white field and a single 1px `{colors.divider}` rule above the footer links. The stylesheet declares `--border-size` as 0.5rem (0.5px) and a translucent overlay colour, but no shadow variable.

## Shapes

Corners are barely rounded. The measured radii are 3px (4 elements, `--border-radius` 3rem), 1px (2 elements, `--inner-border-radius` 1rem), and two partial values, `0px 0px 3px 3px` (2) and `3px 3px 0px 0px` (1), which round only the top or only the bottom of a bar. The product figures are cut-outs without frames, and the small thumbnail at the top right sits in a bordered square box.

## Components

- **Label bar:** a white (`{colors.surface-white}`) rectangle with 3px (`{rounded.sm}`) corners holding 8px uppercase text; used for the logo and navigation, the collection counter, the product counter with its "DISCOVER" link and each footer link.
- **Navigation link:** 8px / 400 uppercase in `{colors.ink}`, 84px by 12px for the "ALL" row, with the count to its right in `{colors.ink-muted}`.
- **Count:** a two-digit number in `{colors.ink-muted}`.
- **Discover link:** a grey label that changes to white text on hover (measured `rgb(255, 255, 255)`); the fill it changes against was not measured.
- **Display statement:** 30px / 700 uppercase, either the left-aligned word "COLLECTION" or the centred manifesto.
- **Product figure:** a cut-out photograph of a model on the plain canvas, with no card, border or caption in the capture.

## Design System Architecture

No public design-system or brand-guideline page was found: the page links none (only Terms of service, Shipping policy, Size Guide, an e-mail address and Instagram). The de-facto system is a small set of 32 custom properties on `:root`, with a semantic layer over named colours: `--color-background` points at `--color-off-white`, `--color-main` at `--color-off-black` and `--color-inner-background` at `--color-white`. The declared sizes use the `--rem` unit variable, and layout variables (`--grid-margin`, `--grid-gutter`, `--gap`, `--bar-height`, `--header-height`, `--offset-top`, `--info-offset`, `--viewport-inset`) are derived from it with `calc()`. Viewport units are exposed as `--vw`, `--vh` and `--ivh`.

## Do's and Don'ts

- Do keep the page to off-white, near-black and white, and let photography supply all colour.
- Do set everything in uppercase Eurostile Becane: 30px bold for statements, 8px regular with 0.32px tracking for labels.
- Do place small white bars with 3px corners at the edges of the field instead of a conventional header.
- Do pair labels with numeric counts in `{colors.ink-muted}`.
- Don't add buttons, shadows, gradients or filled calls to action; none was measured.
- Don't use `{colors.surface-red}` as a visible accent without checking the live page: its use was not identified.
- Don't frame product photography in cards.

## Responsive Behavior

Measured at 390px: the "COLLECTION" h1 is 20px / 700 / 20px (260px by 20px) against 30px on desktop; the navigation block is 370px by 99px (310px by 86px on desktop) and its text list gains a "MENU" entry alongside "ALL 27", "STORIES 04" and "CART"; navigation text is 10px / 400 / 11px with 0.4px tracking against 8px / 8.8px on desktop. By characters the mobile sizes are 20px (221) and 10px (158), against 30px (221) and 8px (154) on desktop. The mobile pass found no body-text, button, heading-2 or footer role. Breakpoints, figure-row behaviour and footer layout on mobile are not measured.

## Iteration Guide

1. Set `canvas` `#f6f6f6`, `ink` `#0a0a0a`, `surface-white` `#ffffff` and `ink-muted` `#b2b2b2`.
2. Load Eurostile Becane at 400 and 700; use 30px bold uppercase for statements and 8px uppercase with 0.32px tracking for all UI text.
3. Build the chrome from white bars with 3px corners at the four edges, each holding a label and, where relevant, a grey count.
4. Place a single row of cut-out product figures across the middle of the first screen with open space around them.
5. Close with a 1px `#e6e6e6` rule, a row of footer link bars and a centred 30px manifesto.
6. Check mobile against the 390px values above; everything else is not measured.
