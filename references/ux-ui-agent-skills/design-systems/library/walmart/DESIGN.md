---
version: alpha
name: Walmart
category: "Retail & E-commerce"
description: "Walmart's US home page uses EverydaySans on a #ffffff canvas over a #f1f1f1 page ground with #2e2f32 text, a #0053e2 blue brand fill for the header and deal tiles, #2a8703 green prices, #ffc220 spark yellow, 8px rounded tiles and 9999px pill search."
colors:
  canvas: "#ffffff"
  page-largest: "#f1f1f1"
  ink: "#2e2f32"
  primary: "#0053e2"
  on-primary: "#ffffff"
  price-green: "#2a8703"
  spark-yellow: "#ffc220"
  surface-border: "#e3e4e5"
  ink-black: "#000000"
  ink-navy: "#001e60"
  ink-muted: "#515357"
typography:
  display:
    fontFamily: EverydaySans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 50.4px
  display-mobile:
    fontFamily: EverydaySans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 42px
    fontWeight: 700
    lineHeight: 52.5px
  heading:
    fontFamily: EverydaySans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 30px
  subheading:
    fontFamily: EverydaySans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17.5px
  body:
    fontFamily: EverydaySans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 37.8px
  nav:
    fontFamily: EverydaySans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 32px
  xl: 37px
  2xl: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 24px
  s10: 28px
components:
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 1px 40px 1px 24px
    height: 52px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.md}"
  footer:
    textColor: "{colors.ink-black}"
    padding: 28px 0px 0px
---

## Overview

The measured page is https://www.walmart.com/, titled "Walmart | Save Money. Live better." Its meta description reads "Shop Walmart.com today for Every Day Low Prices. Join Walmart+ for unlimited free delivery from your store & free shipping with no order minimum." The page is 4,316px tall at 1280px.

The capture shows, top to bottom: a blue header with the yellow spark logo, a dark pill "Pickup or delivery?" selector, a very wide white pill search field, then "Reorder / My Items", "Sign In / Account" and a cart total of $0.00; a pale-blue sub-bar with "Departments" and "Services" pills; a blue hero carousel ("Deals are here—lots of 'em!", "DEALS & MORE OCT. 5-11 ONLY!") with product cut-outs; a "Top 100+ Deals" row of product cards with navy "Deal" tags, green "Now $29.99" prices and struck-through old prices, an "Add" pill and "Get soon as 13 mins" badges; a blue mosaic of promo tiles ("Top 100+ Deals you'll want to snag", "Genius-level computer Deals", "Pet Deals for your BFF", "Up to 40% off basics", "Deals on tailgating gear"); and, below, grey loading skeleton blocks, which are an unfinished lazy-load state rather than brand UI.

The voice is price-first and energetic: dollar amounts, "Shop Deals" links and time-limited labels. The look is saturated blue promo tiles around white product cards.

## Colors

The page ground is `#f1f1f1` (the largest measured area, 2,605 units, which includes the loading skeletons and page background), with white `#ffffff` cards (1,476) and `#e3e4e5` skeleton or border grey (565). The brand blue is `#0053e2` (169 units; the stylesheet names it `--color-core-blue-100` and `--ld-semantic-color-fill-brand`, and `--ld-semantic-color-border-brand` also resolves to it). Darker blues are `#002e99` (23 units, tile gradients) and `#041e42` (9), and a pale-blue `#e9f1fe` (61) fills the sub-bar. The deepest text blue is `#001e60` (`--color-core-blue-160`, 49 characters).

Text is `#2e2f32` (688 characters), white on blue, `#000000` for headings, `#515357` for secondary text and `#74767c` on the small "So many ways to save big." h3. Price green is `#2a8703` (60 characters; `--ld-primitive-color-green-100`). Spark yellow `#ffc220` (`--color-core-spark-100`) is the logo and warning/rating color. The extractor reported `#0000ee` as the most-read text color; that is the browser default for unstyled links in the skip-to-content and header anchors, so it is dropped. The extractor found no primary button, so `primary` is the measured brand blue rather than a button fill.

## Typography

One family: EverydaySans (700 and 400 loaded) with a Helvetica Neue, Helvetica, Arial fallback stack (`--font-family-default`). Measured roles: hero tile headline 48px on 50.4px weight 700 (42px on 52.5px on mobile); promo statement 36px/37.8px weight 700 (36px/45px on mobile); section h2 "Top 100+ Deals" 24px/30px weight 700; h3 caption 14px/17.5px weight 400; navigation and form text 16px. Sizes by characters: 18.72px (917), 16px (838), 14px (235), 22px (94), 36px (59), 24px (50), 32px (34), 48px (34). Letter spacing is default. Weight is bimodal: 700 for 1,378 characters and 400 for 911, with no middle weights.

Font substitutes: EverydaySans is proprietary (`Bogle` is also declared); a humanist grotesque in 400 and 700 is a stand-in. A `ui-icons` font carries icons.

## Layout

The page is a stack of full-width modules inside a centered container: header (84px tall measured), sub-bar, a hero carousel, a deal-card carousel and the mosaic. The mosaic is a five-column grid in the capture with one large tile and four smaller tiles. Measured gaps are 8px (17 uses), 2px (16) and 16px; paddings include 12px (31), 24px (22), 4px (17), 8px (15), 6px, 16px and 28px. The header has `16px 24px` padding. The search field is 52px tall with `1px 40px 1px 24px` padding.

## Elevation & Depth

Depth is minimal. Measured shadows: an inset ring `rgb(46, 47, 50) 0px 0px 0px 1px inset` (4 uses, outlined pills such as "Try Walmart+ for $1", which thickens to 2px on hover), a black 1px inset ring, and one drop shadow `rgba(0, 0, 0, 0.15) 0px 3px 5px 2px`. Tiles use color and photography for separation.

## Shapes

Radii measured: 8px (89 elements: cards and tiles), 4px (30), 9999px (6, search and pills), 100% (5, circular carousel arrows), 32px (4), 100px (2), 1000px (2), 2px (2) and 37px (1). Tokens: `xs` 2px, `sm` 4px, `md` 8px, `lg` 32px, `xl` 37px, `2xl` 100px, `pill` 9999px.

## Components

**Search field:** white, 9999px radius, 52px tall, `1px 40px 1px 24px` padding, black 16px text, with a round blue submit button at its right.

**Outlined pill:** white, 1px `#2e2f32` inset ring, 9999px radius, 32px tall ("Try Walmart+ for $1").

**Deal card:** white, 8px radius, product image, a navy "Deal" tag, green price, struck-through list price and a truncated title; an outlined "Add" pill with a plus sign.

**Promo tile:** blue gradient with white 700 headline and an underlined "Shop Deals" link, or a white "Shop Deals" pill on the large tile.

**Header selectors:** "Pickup or delivery?" on a dark pill, "Departments" and "Services" on white pills.

**Carousel arrows:** circular (100%) white buttons.

**Footer:** 28px top padding, black 16px/24px text.

## Design System Architecture

Walmart's page exposes a large token layer: 400 measured root variables, named by tier, for example `--color-core-blue-100`, `--ld-primitive-color-spark-100`, `--ld-semantic-color-fill-brand` and `--wcp-semantic-color-action-fill-primary-alt-disabled`, plus spacing (`--size-space-50` is 0.25rem), type (`--ld-semantic-font-body-large-line-height` is 1.5rem) and timing (`--timing-ease-in-out-100`). The `ld-` and `wcp-` prefixes show a core-primitive-semantic scheme. No public design-system documentation was found: my attempt to open https://livingdesign.walmart.com failed (recorded in SOURCES.json), and the home page links to none. Tokens here come from live measurement of https://www.walmart.com/ and its root variables. Media queries in the HTML are `screen` at `min-width` 600px, 900px, 1280px, 1440px and 1660px.

## Do's and Don'ts

- Do use `#0053e2` for the header and promo ground, with white 700 type.
- Do show prices in green `#2a8703` with the old price struck through.
- Do keep cards at 8px radius on a `#f1f1f1` ground.
- Do make search and utility controls full pills.
- Don't use `#0000ee` links.
- Don't document the grey skeleton blocks as components.
- Don't use mid font weights; the page uses only 400 and 700.

## Responsive Behavior

The mobile pass measured: hero statement 42px/52.5px weight 700, promo statement 36px/45px, h2 24px/30px, and a header that remained 84px tall with padding `16px`; no primary button was found on mobile. The HTML declares screen media queries at 600px, 900px, 1280px, 1440px and 1660px; what they change is not measured.

## Iteration Guide

1. Start from `#0053e2`, white and `#f1f1f1`; add `#2a8703` for prices and `#ffc220` sparingly.
2. Write price-first copy with dollar amounts and short verbs.
3. Use only weights 400 and 700 in EverydaySans or its stand-in.
4. Round tiles 8px and controls to full pills.
5. Capture again after lazy-loading completes before documenting lower modules.
6. When adding a new module, check the measured values first: card radius 8px, pill radius 9999px, 8px and 16px gaps, 12px and 24px paddings, and a 52px search height.
7. Treat the yellow spark as a mark and rating color only; it was not measured as a button or tile fill on this page.
8. Keep link text black or white. Underlined "Shop Deals" links on blue tiles are white, and plain header links use the dark ink rather than a blue.
9. Record any new color in SOURCES.json with the page or variable that proves it, so the token can be traced later.
