---
version: alpha
name: Allbirds
category: "Fashion & Apparel"
description: "Allbirds' storefront is a warm oatmeal canvas (#ece9e2) carrying full-bleed lifestyle photography inside 16px-radius tiles, with all copy set in Klim's Geograph at small, quiet sizes (24px/400 hero h1, 14px body, 12px/500 uppercase labels with 0.3px tracking), Self Modern serif for 40px editorial tile headlines and the 30px product name, and Akkurat Mono for tracked uppercase eyebrows. Actions are full pills — a #212121 solid pill and a white pill on imagery, both 33px tall with 8px 16px padding — under a floating white header with a 12px radius and a #212121 footer."

colors:
  primary: "#212121"
  on-primary: "#ffffff"
  primary-hover: "#575757"
  canvas: "#ece9e2"
  surface: "#ffffff"
  ink: "#000000"
  ink-soft: "#212121"
  ink-muted: "#575757"
  charcoal: "#52525b"
  natural-white: "#e0dacf"
  natural-white-25: "#f5f4f1"
  natural-white-60-50: "#ece9e250"
  stroke: "#cdcdcd"
  light-charcoal-30: "#57575730"
  overlay: "#44444480"
  scrim: "#00000080"
  modal-ink: "#101828"
  midnight: "#03143b"
  khaki: "#443828"
  red: "#9c0f0f"
  green: "#10714e"
  footer: "#212121"

typography:
  display-hero:
    fontFamily: "Geograph, system-ui, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: 0.6px
  display-hero-mobile:
    fontFamily: "Geograph, system-ui, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: 0.6px
  collection-title-mobile:
    fontFamily: "Geograph, system-ui, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  serif-editorial:
    fontFamily: "\"Self Modern\", ui-serif, serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 60px
  serif-editorial-mobile:
    fontFamily: "\"Self Modern\", ui-serif, serif"
    fontSize: 30px
    fontWeight: 400
  serif-product-name:
    fontFamily: "\"Self Modern\", ui-serif, serif"
    fontSize: 30px
    fontWeight: 400
    lineHeight: 36px
  serif-product-name-mobile:
    fontFamily: "\"Self Modern\", ui-serif, serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  modal-title:
    fontFamily: "Geograph, system-ui, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 24px
  body-lg:
    fontFamily: "Geograph, system-ui, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  body-md:
    fontFamily: "Geograph, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-sm:
    fontFamily: "Geograph, system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  body-mobile:
    fontFamily: "Geograph, system-ui, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  product-title:
    fontFamily: "Geograph, system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: 0.7px
  button:
    fontFamily: "Geograph, system-ui, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 15px
    letterSpacing: 0.3px
  button-modal:
    fontFamily: "Geograph, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.8px
  nav-link:
    fontFamily: "Geograph, system-ui, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: 0.6px
  heading-label:
    fontFamily: "Geograph, system-ui, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
  caption:
    fontFamily: "Geograph, system-ui, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  breadcrumb:
    fontFamily: "Geograph, system-ui, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 0.3px
  badge:
    fontFamily: "Geograph, system-ui, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 12px
    letterSpacing: 0.6px
  micro-mobile:
    fontFamily: "Geograph, system-ui, sans-serif"
    fontSize: 10px
    fontWeight: 400
  mono-eyebrow:
    fontFamily: "\"Akkurat Mono\", ui-monospace, monospace"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: 1.2px
  mono-label:
    fontFamily: "\"Akkurat Mono\", ui-monospace, monospace"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 0.6px
  mono-footer:
    fontFamily: "\"Akkurat Mono\", ui-monospace, monospace"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 1.2px
  mono-spec:
    fontFamily: "\"Akkurat Mono\", ui-monospace, monospace"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 1.4px

rounded:
  none: 0px
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 12px
  2xl: 16px
  radius: 20px
  3xl: 24px
  pill: 9999px

spacing:
  1: 4px
  2: 8px
  2-5: 10px
  3: 12px
  4: 16px
  5: 20px
  6: 24px
  8: 32px
  10: 40px
  14: 56px
  16: 64px
  20: 80px
  28: 112px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    border: "1px solid #212121"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 33px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    border: "1px solid #575757"
  button-on-image:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.primary}"
    border: "1px solid #ffffff"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 33px
  button-on-image-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    border: "1px solid #212121"
  button-outline-white:
    backgroundColor: transparent
    textColor: "{colors.surface}"
    border: "1px solid #ffffff"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 33px
  button-outline-white-hover:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.primary}"
  button-outline-black:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    border: "1px solid #212121"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
  button-outline-black-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  button-icon:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    border: "1px solid #212121"
    rounded: "{rounded.pill}"
    size: 24px
    padding: 0px
  button-icon-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  button-modal:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-modal}"
    rounded: "{rounded.md}"
    padding: 12px 0px
    height: 48px
  size-selector:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    border: "1px solid #cdcdcd"
    typography: "{typography.heading-label}"
    rounded: "{rounded.xs}"
    padding: 12px 0px
  size-selector-hover:
    backgroundColor: "{colors.light-charcoal-30}"
  size-selector-selected:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    border: "1px solid #212121"
  text-input:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.primary}"
    border: "1px solid #212121"
    typography: "{typography.body-md}"
    rounded: "{rounded.pill}"
    padding: 10px 80px 10px 12px
    height: 42px
  select-sort:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    border: "1px solid #212121"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 40px 8px 16px
    height: 41px
  card-product:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.product-title}"
    rounded: "{rounded.2xl}"
    padding: 0px
  card-pdp-panel:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.body-md}"
    rounded: "{rounded.xl}"
    padding: 32px
  tag-new:
    backgroundColor: "{colors.natural-white}"
    textColor: "{colors.primary}"
    typography: "{typography.badge}"
    rounded: "{rounded.pill}"
    padding: 8px
  nav:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.primary}"
    typography: "{typography.nav-link}"
    rounded: "{rounded.xl}"
    padding: 0px 20px
    height: 48px
    boxShadow: "rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px"
  link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.breadcrumb}"
  modal:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.body-md}"
    rounded: "{rounded.lg}"
    padding: 24px
    boxShadow: "rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.1) 0px 8px 10px -6px"
  footer:
    backgroundColor: "{colors.footer}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-md}"
    rounded: "{rounded.none}"
    padding: 80px 40px 20px
---

## Overview

Allbirds sells wool, tree-fibre and sugarcane-foam shoes, and its storefront behaves like a printed
lookbook laid on undyed fabric. The page background the viewer sees is a warm oatmeal, `#ece9e2`
(the site's own token `--color-natural-white-60`), and almost everything placed on it is either a
photograph inside a rounded tile or a white card. Type is deliberately small: the homepage h1,
"Wildly Comfortable. Super Natural.", is only 24px Geograph at weight 400, set in white over the
hero photograph. The product and the photography carry the volume; the typography whispers.

Three typefaces split the work cleanly:

- **Geograph** (Klim Type Foundry) — every heading, paragraph, label and button. Weights served: 400, 500, 700.
- **Self Modern** — a thin serif used only for editorial moments: 40px tile headlines ("Summer Travel
  Essentials", "New Arrivals") and the 30px product name on a product page.
- **Akkurat Mono** — tracked uppercase eyebrows and section labels ("ALL NEW DASHER NZ COLLECTION",
  "FOLLOW THE FLOCK", "SUBSCRIBE TO OUR EMAILS", "BEST FOR").

Shape language is soft: tiles and product cards at 16px, the floating header at 12px, the modal at 8px,
and every action button a full pill. Colour is almost entirely neutral — oatmeal, white, black text,
and a `#212121` near-black for buttons and the footer. Colour arrives through the photography
(muted sky, dusty rose, sage, taupe product tiles) rather than through UI chrome.

The capture shows the rhythm: a thin dark announcement bar ("Free ground shipping on orders over $100"),
a white rounded header floating 20px inside the viewport edges over a full-bleed hero photograph,
then a row of four colour-blocked category tiles with outlined white pills ("NEW ARRIVALS", "MENS",
"WOMENS", "BEST SELLERS"), then a "BEST SELLERS" carousel of white product cards on the oatmeal canvas,
then three tall editorial photo tiles with Self Modern headlines and paired "SHOP MEN" / "SHOP WOMEN"
outline pills. A country-selector modal ("Where are we shipping to?") opens on first visit.

Microcopy is short, warm and uppercase on actions: "SHOP MEN", "SHOP WOMEN", "CONFIRM", "SIGN UP".
Marketing lines lean on nature puns ("Wildly Comfortable. Super Natural.", "FOLLOW THE FLOCK").

## Colors

All hex values below were measured on the live site (computed styles, rootVars or CSS corpus).

### Brand & Action

- **Primary / near-black** `#212121` — the site's `--color-black`. Solid pill buttons (`.btn-secondary`),
  the modal CONFIRM button, the selected size, carousel arrow outlines, and the footer background.
- **On-primary** `#ffffff` — text on `#212121`.
- **Primary hover** `#575757` — `--color-light-charcoal`; `.btn-secondary:hover` swaps bg and border to it.

### Surface

- **Canvas** `#ece9e2` — body background, the oatmeal page colour (`--color-natural-white-60`).
- **Surface** `#ffffff` — product cards, PDP panel, header bar, modal, and the white "on-image" pill.
- **Natural white** `#e0dacf` — `--color-natural-white`; the "NEW" badge fill and thin dividers on PDP thumbnails.
- **Natural white 25** `#f5f4f1` — `--color-natural-white-25`, a lighter oatmeal declared in rootVars.
- **Natural white 60 at 50%** `#ece9e250` — declared token for translucent oatmeal.
- **Footer** `#212121` — full-width dark footer.
- **Overlay** `#44444480` — a translucent grey layer, third-largest background by area (its exact placement was not isolated).
- **Scrim** `#00000080` — the modal backdrop (`bg-black/50`).

### Text

- **Ink** `#000000` — the most-read text colour on the homepage (body copy, card titles).
- **Ink soft** `#212121` — product-page body copy and button text; the most-read colour on the PDP.
- **Ink muted** `#575757` — prices, breadcrumbs, PDP Akkurat Mono labels.
- **Charcoal** `#52525b` — `--color-charcoal`, secondary text on collection pages.
- **Modal ink** `#101828` — a grey-navy text colour measured on the page (the modal heading uses Tailwind `text-gray-900`).

### Utility / Semantic

- **Stroke** `#cdcdcd` — `--color-stroke`, size-selector borders.
- **Light charcoal 30%** `#57575730` — size-selector hover fill.
- **Red** `#9c0f0f` — `--color-red`, sale prices (seen on PDP and collection text colours).
- **Green** `#10714e` — `--color-green`, declared in rootVars.
- **Midnight** `#03143b` and **Khaki** `#443828` — declared brand tokens in rootVars, not prominent on the homepage.

There is no bright accent. Do not introduce a brand blue or green as a button colour.

## Typography

### Font Family

- Sans: `Geograph, system-ui, sans-serif` (`--font-sans`). Loaded weights: 400, 500, 700.
- Serif: `"Self Modern", ui-serif, serif` (`--font-serif`). Loaded weight: 400.
- Mono: `"Akkurat Mono", ui-monospace, monospace` (`--font-mono`). Loaded weight: 400 (500 is requested on the hero eyebrow and synthesised).

By characters rendered on the homepage: Geograph 1920, Akkurat Mono 164, Self Modern 59.

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|---|
| display-hero | Geograph | 24px | 400 | 32px | 0.6px | Homepage h1 over hero photo |
| display-hero-mobile | Geograph | 24px | 400 | 32px | 0.6px | Same h1 at 390px (wraps to 2 lines) |
| collection-title-mobile | Geograph | 20px | 400 | 24px | — | Collection h1 at 390px |
| serif-editorial | Self Modern | 40px | 400 | 60px | normal | Editorial tile headlines |
| serif-editorial-mobile | Self Modern | 30px | 400 | — | — | Same below md (`text-[1.875rem]`) |
| serif-product-name | Self Modern | 30px | 400 | 36px | normal | PDP h1 product name |
| serif-product-name-mobile | Self Modern | 24px | 400 | 32px | normal | PDP h1 at 390px |
| modal-title | Geograph | 24px | 500 | 24px | normal | "Where are we shipping to?" |
| body-lg | Geograph | 18px | 400 | 28px | normal | PDP description |
| body-md | Geograph | 16px | 400 | 24px | normal | Body default, inputs, footer |
| body-sm | Geograph | 14px | 400 | 21px | normal | Homepage paragraphs |
| body-mobile | Geograph | 12px | 400 | 18px | normal | Paragraphs at 390px |
| product-title | Geograph | 14px | 500 | 20px | 0.7px | Uppercase product names on cards |
| button | Geograph | 12px | 500 | 15px | 0.3px | All `.btn` pills, uppercase |
| button-modal | Geograph | 16px | 400 | 24px | 0.8px | Modal CONFIRM, uppercase |
| nav-link | Geograph | 12px | 500 | 16px | 0.6px | Header links, uppercase |
| heading-label | Geograph | 12px | 500 | 16px | normal | "CART (0)" h2, uppercase |
| caption | Geograph | 12px | 400 | 16px | normal | Prices, colour names |
| breadcrumb | Geograph | 12px | 400 | 16px | 0.3px | "Home / Womens" |
| badge | Geograph | 12px | 500 | 12px | 0.6px | "NEW" badge, uppercase |
| micro-mobile | Geograph | 10px | 400 | — | — | Announcement bar below md |
| mono-eyebrow | Akkurat Mono | 12px | 500 | 20px | 1.2px | Hero eyebrow, uppercase |
| mono-label | Akkurat Mono | 12px | 400 | 16px | 0.6px | "FOLLOW THE FLOCK" h3, uppercase |
| mono-footer | Akkurat Mono | 12px | 400 | 16px | 1.2px | Footer section headings, uppercase |
| mono-spec | Akkurat Mono | 14px | 400 | 20px | 1.4px | PDP "BEST FOR" labels in `#575757`, uppercase |

### Principles

- Small type everywhere. The two dominant sizes by characters are 14px (982) and 12px (969); the next is 24px.
- Uppercase is reserved for actions, navigation, product names and mono eyebrows — always with positive tracking
  (0.3px at 12px buttons, 0.6px at 12px nav, 0.7px at 14px product names, 1.2px on mono eyebrows).
- Sentence-case display lines (hero h1, Self Modern tiles) carry no uppercase.
- Weight contrast is minimal: 400 for reading, 500 for labels, 700 only on the footer "SIGN UP" button.
- The tracking scale is Tailwind's: `--tracking-wide .025em`, `--tracking-wider .05em`, `--tracking-widest .1em`
  — which is why 12px tracks to 0.3px / 0.6px / 1.2px.

### Note on Font Substitutes

All three faces are commercial. Geograph is a retail typeface from
[Klim Type Foundry](https://klim.co.nz/fonts/geograph/) by Kris Sowersby, classified by Klim as
"Modern: Lineal/Geometric". Self Modern is listed under Lucas Le Bihan / Bretagne Type Foundry as
"a thin text typeface" ([Devroye](https://luc.devroye.org/fonts-82564.html)). Akkurat Mono is sold by
[Lineto](https://www.lineto.com/typefaces/akkurat-mono). No official Allbirds substitute guidance exists.
If unlicensed, keep the declared fallbacks (`system-ui`, `ui-serif`, `ui-monospace`) rather than picking a
look-alike, and keep sizes, weights and tracking exactly as listed so the rhythm survives.

## Layout

### Spacing System

The site runs on Tailwind v4 with `--spacing: .25rem` (4px). Measured gaps by weight: 4px (72), 8px (40),
10px (38), 16px (12), 20px (9), 12px (8), 32px (6), 40px (5). Measured paddings: 8px (54), 16px (47),
32px (7), 10px (7), 12px, 24px, 20px, 6px, 40px, 80px, 112px, 56px, 64px.

Spacing tokens: 4px, 8px, 10px, 12px, 16px, 20px, 24px, 32px, 40px, 56px, 64px, 80px, 112px.

### Grid & Container

- Measured at a 1280px viewport. The header bar is inset 20px from each edge (`top-5 right-5 left-5`),
  1240px wide, capped at `max-w-[2560px]`.
- Category tiles: four equal columns (gutter not measured).
- Product carousel: cards 345px wide, 456px tall, scrolling horizontally with circular arrow buttons.
- Editorial row: three tall photo tiles.
- Container tokens declared: `--container-sm 24rem` up to `--container-7xl 80rem`; `--breakpoint-xl 80rem`.
- Footer padding: 80px 40px 20px.

### Whitespace Philosophy

Tiles sit tight to each other and to the viewport (small gutters), while text inside them is sparse and
small. Whitespace comes from the oatmeal canvas between bands (e.g. the "BEST SELLERS" heading row) rather
than from large margins. The result is dense photography with quiet type.

## Elevation & Depth

| Level | Value | Use |
|---|---|---|
| 0 | none | Cards, tiles, buttons — flat |
| 1 | `rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px` | Floating header bar |
| 2 | `rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.1) 0px 8px 10px -6px` | Modal panel |
| inset ring | `rgb(87, 87, 87) 0px 0px 0px 1px inset` + `rgb(0, 0, 0) 0px 0px 0px 1px` | Colour swatch rings on product cards |

Depth comes from photography and the floating header; product cards are flat white on oatmeal.
Overlays: `#44444480` (large translucent layer) and `#00000080` behind the modal.

### Decorative Depth

Hero text sits directly on photography with no gradient panel; legibility relies on image choice.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| none | 0px | Footer, full-bleed bands |
| xs | 2px | PDP size selector (`--radius-xs`) |
| sm | 4px | Small selects (`--radius-sm`) |
| md | 6px | Modal CONFIRM button (`rounded-md`) |
| lg | 8px | Modal panel (`rounded-lg`) |
| xl | 12px | Floating header, PDP aside panel |
| 2xl | 16px | Product cards, category and editorial tiles; `16px 16px 0px 0px` on card image tops |
| radius | 20px | Site's `--radius` token |
| 3xl | 24px | PDP colour panel |
| pill | 9999px | All `.btn` pills, badges, inputs, swatches (the site computes 3.35544e+07px) |

### Photography Geometry

Photography always lives inside rounded tiles (16px). Product shots are cut-out shoes on white cards;
lifestyle shots are full-bleed inside tiles. No skew, clip-path or notch shapes are used.

## Components

### Buttons

All buttons share the `.btn` base: Geograph 12px / 500 / line-height 15px / tracking 0.3px, uppercase,
padding 8px 16px, full pill radius, height 33px, and a 0.2s `cubic-bezier(0.37, 0, 0.63, 1)` colour transition.

- **button-primary** (site class `.btn-secondary`) — `#212121` fill, `#ffffff` text, 1px `#212121` border.
  Hover: fill and border `#575757`.
- **button-on-image** (site class `.btn-primary`) — `#ffffff` fill, `#212121` text, 1px `#ffffff` border; used on
  the hero photograph. Hover: inverts to `#212121` fill, `#ffffff` text.
- **button-outline-white** — transparent, 1px `#ffffff` border, white text; on category and editorial tiles.
  Hover: `#ffffff` fill, `#212121` text.
- **button-outline-black** — transparent, 1px `#212121` border, `#212121` text. Hover: `#212121` fill, white text.
- **button-icon** — 24px circle, 1px `#212121` border, transparent; carousel arrows. Hover: `#212121` fill.
- **button-modal** — `#212121` fill, white text, Geograph 16px / 400 / 24px, tracking 0.8px, uppercase,
  6px radius, padding 12px 0px, 48px tall, full width.
- Size modifiers declared in CSS: `.btn-small` (padding 8px 12px, 11px text) and `.btn-large` (padding 10px 14px, 14px text).
- Focus: `.btn:focus` sets `outline-color: var(--color-blue-600)`.

### Cards & Containers

- **card-product** — white, 16px radius, no padding on the frame, 456px tall in the carousel (370px on
  collection grids). Top-left "NEW" badge, image, then uppercase 14px/500 title with 0.7px tracking, a 12px
  colour name, round swatches and a `#575757` 12px price.
- **card-pdp-panel** — the PDP aside: white, 12px radius, 32px padding.
- **Category tile** — 16px-radius colour-blocked tile with a cut-out shoe and a centred outline-white pill.
- **Editorial tile** — tall 16px-radius photo with a centred Self Modern 40px / 60px white headline and paired pills at the bottom.

### Inputs & Forms

- **text-input** — white, `#212121` text, 1px `#212121` border, pill radius, padding 10px 80px 10px 12px
  (room for an inline button), 42px tall, Geograph 16px.
- **select-sort** (collection page) — transparent pill, 1px `#212121` border, 12px / 500 uppercase, padding 8px 40px 8px 16px, 41px tall.
- **Footer email field** — white text on `#212121` with an inline "SIGN UP" button (12px / 700, padding 8px 16px, 31px tall).
- **size-selector** — 2px radius, 1px `#cdcdcd` border, padding-block 12px, 12px / 500. Hover fill `#57575730`;
  selected fill and border `#212121` with white text; disabled at opacity 0.7.

### Navigation

- **nav** — floating white bar, 12px radius, 48px tall, padding 0px 20px, level-1 shadow, inset 20px from the
  viewport. Left: the lowercase script "allbirds" wordmark. Centre: "NEW ARRIVALS · SHOP ALL · MEN · WOMEN"
  in `#212121` 12px / 500 / 16px, tracking 0.6px, uppercase. Right: search and cart icons.
- **Announcement bar** — dark strip above the header, white Geograph 12px / 400 / 16px, tracking 0.6px (10px below md), with chevrons.
- **link / breadcrumb** — `#575757` Geograph 12px / 400 / 16px, tracking 0.3px ("Home / Womens").

### Pills, Tags, and Chips

- **tag-new** — `#e0dacf` fill, `#212121` text, 12px / 500, line-height 12px, tracking 0.6px, uppercase, 8px padding, pill.
- The "BEST SELLERS" category label reuses the outline-white pill shape with pointer events disabled.

### Signature Components

- **Country modal** — white 8px-radius panel, 512px wide, 24px padding, level-2 shadow over a `#00000080` scrim;
  24px / 500 centred title, 14px explanation, a country select and the full-width 48px CONFIRM button.
- **Footer** — `#212121`, white text, padding 80px 40px 20px; Akkurat Mono 12px section headings tracked 1.2px
  ("SUBSCRIBE TO OUR EMAILS", "HELP"), email signup pill.

## Design System Architecture

Allbirds publishes **no public design system**, token package, Figma kit or brand-guideline portal. Searches
for "Allbirds brand guidelines typography", "Allbirds design system github npm", "Allbirds press kit media
assets logo" and "Allbirds new brand identity 2025 rebrand website" returned only third-party aggregator pages,
which are not used here. What follows is the de-facto system measurable on allbirds.com, plus the foundry pages
for its typefaces ([Klim — Geograph](https://klim.co.nz/fonts/geograph/),
[Lineto — Akkurat Mono](https://www.lineto.com/typefaces/akkurat-mono),
[Devroye — Self Modern](https://luc.devroye.org/fonts-82564.html)).

- **Token architecture (as shipped):** CSS custom properties on `:root` in Tailwind v4 naming. Primitives are the
  Tailwind defaults (`--color-gray-500`, `--color-neutral-600` in oklch). Brand tokens are layered on top with plain
  names: `--color-black: #212121`, `--color-natural-white: #e0dacf`, `--color-natural-white-60: #ece9e2`,
  `--color-natural-white-25: #f5f4f1`, `--color-light-charcoal: #575757`, `--color-charcoal: #52525b`,
  `--color-stroke: #cdcdcd`, `--color-midnight: #03143b`, `--color-khaki: #443828`, `--color-red: #9c0f0f`,
  `--color-green: #10714e`. Alpha variants are separate tokens with a suffix (`--color-light-charcoal-0.3`,
  `--color-light-charcoal-0.7`, `--color-natural-white-60-0.5`). Fonts: `--font-sans`, `--font-serif`, `--font-mono`.
  Radii: `--radius-xs .125rem` … `--radius-3xl 1.5rem`, plus `--radius: 20px`. Easing: `--ease-snappy`,
  `--ease-sine-in`, `--ease-sine-out`, `--ease-sine-in-out`. Layout: `--global-banner-height: 32px`,
  `--hero-header-offset-desktop: 4rem`, `--hero-header-offset-mobile: 6.25rem`.
- **Component layer:** hand-written component classes over the tokens — `.btn` with modifiers `.btn-primary`
  (white), `.btn-secondary` (black), `.btn-outline-black`, `.btn-outline-white`, `.btn-icon-black`, `.btn-icon-white`,
  `.btn-small`, `.btn-large`, plus `.btn-size` (with `--selected`) and `.btn-add-to-cart`. Everything else is
  Tailwind utilities in markup (`rounded-md bg-black py-3 tracking-wider`).
- **Theming:** a single light theme. No dark mode, high-contrast or density switch was found; colour inversion is
  done per component (white pill on imagery, outline-white on tiles).
- **Type & spacing:** 4px base (`--spacing: .25rem`); type sizes from Tailwind's `--text-xs .75rem` to `--text-4xl 2.25rem`
  with arbitrary values for the serif (`text-[1.875rem] md:text-[2.5rem]`); tracking from `--tracking-wide/wider/widest`.
- **Component inventory observed:** announcement bar, floating header, hero, category tile, product card with badge and
  swatches, carousel with icon buttons, editorial tile, breadcrumb, sort select, size selector, PDP panel, country modal,
  footer with email signup.
- **Accessibility:** no published rules. Measured: `.btn:focus` outline uses `--color-blue-600`; disabled size buttons use opacity 0.7.
- **Delivery:** the page is a Shopify theme (sections carry ids such as `shopify-section-…__geofencing`). No npm package, Figma kit or versioning is public.

## Do's and Don'ts

### Do

- Use `#ece9e2` as the page canvas and white `#ffffff` for cards; keep the UI otherwise neutral.
- Set everything in Geograph; keep the hero h1 at 24px / 400 with 0.6px tracking.
- Use Self Modern only for editorial headlines (40px / 60px) and the product name (30px / 36px).
- Use Akkurat Mono for small tracked uppercase eyebrows (12px, 1.2px tracking).
- Make every action a full pill, 33px tall, padding 8px 16px, 12px / 500 uppercase with 0.3px tracking.
- Invert on photography: white pill or outline-white pill; invert again on hover.
- Put photography in 16px-radius tiles and let it carry the colour.
- Keep the header floating, white, 12px radius, 20px inset.

### Don't

- Don't add a bright accent colour for buttons or links.
- Don't enlarge the type into marketing-scale display sizes; the largest measured sans size is 24px on the homepage.
- Don't use square-cornered buttons (the only non-pill buttons are the 6px modal CONFIRM and the 2px size selector).
- Don't use heavy shadows on cards; only the header and modal are elevated.
- Don't set Self Modern in uppercase or bold — it is served only at 400.
- Don't use pure white as the page canvas.

## Responsive Behavior

### Breakpoints

Tailwind defaults apply (`md` used in class names such as `md:text-xs`, `md:text-[2.5rem]`); `--breakpoint-xl` is 80rem.
Measurements were taken at 1280px and 390px.

### Touch Targets

Pills stay 33px tall on mobile; the mobile PDP "SELECT A SIZE" button grows to 49px with 16px padding, and the modal
CONFIRM is 48px. Carousel arrows are 24px.

### Collapsing Strategy

- Hero h1 keeps 24px / 32px at 390px and wraps to two lines.
- Collection h1 drops to 20px / 24px; PDP product name drops from 30px to 24px.
- Paragraph text drops from 14px / 21px to 12px / 18px; the announcement bar drops to 10px.
- Self Modern tile headlines drop from 40px to 30px.
- On mobile, 12px is the dominant size by far (1456 weighted characters).

### Image Behavior

Tile reflow on mobile was not measured.

## Iteration Guide

1. Start with canvas `#ece9e2`, text `#000000`, buttons `#212121`, cards `#ffffff`.
2. Load Geograph (400/500/700), Self Modern (400) and Akkurat Mono (400); fall back to the system stacks.
3. Build the `.btn` pill once (12px / 500 / 15px, 0.3px tracking, 8px 16px, pill) and derive the four variants.
4. Place the floating white header (48px, 12px radius, 20px inset) over a full-bleed hero image.
5. Use 16px-radius tiles for every image block; keep text inside them small and centred.
6. Add Akkurat Mono eyebrows above hero lines and footer sections.
7. Check every number against this file: 24px h1, 14px body, 12px labels, 16px cards, 33px pills.
