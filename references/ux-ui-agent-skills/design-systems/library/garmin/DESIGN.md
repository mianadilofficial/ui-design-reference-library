---
version: alpha
name: Garmin
category: "Consumer Electronics"
description: "Garmin's US site is a black-and-white retail system exactly as its Consumer Brand Style Guide prescribes: Oswald (the web stand-in for Knockout) at weight 400 with 0.8px tracking for every headline — 40px/50px h1, 32px/40px section and card titles — over Roboto 16px/24px body, #ffffff canvas, #000000 ink and footer, square 0px buttons (8px 24px outlined, 16px 32px contained), 2px-radius product cards with a soft 0 2px 4px 1px shadow, and Candy Blue #6dcff6 reserved for ADD TO CART."

colors:
  primary: "#000000"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#000000"
  ink-soft: "#1a1a1a"
  ink-hover: "#333333"
  ink-muted: "#4d4d4d"
  ink-subtle: "#666666"
  candy-blue: "#6dcff6"
  candy-blue-hover: "#0fb0f0"
  link-blue: "#106fad"
  sale-red: "#920000"
  surface: "#eeeeee"
  surface-soft: "#f2f2f2"
  surface-pressed: "#e5e5e5"
  border: "#d9d9d9"
  border-option: "#cccccc"
  border-figure: "#b3b3b3"

typography:
  display:
    fontFamily: "Superscripts-Oswald, Oswald, \"Roboto Condensed\", Roboto, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 50px
    letterSpacing: 0.8px
  display-mobile:
    fontFamily: "Superscripts-Oswald, Oswald, \"Roboto Condensed\", Roboto, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: 0.8px
  banner-headline:
    fontFamily: "Superscripts-Oswald, Oswald, \"Roboto Condensed\", Roboto, sans-serif"
    fontSize: 47.104px
    fontWeight: 400
    lineHeight: 58.88px
    letterSpacing: 0.8px
  heading-lg:
    fontFamily: "Superscripts-Oswald, Oswald, \"Roboto Condensed\", Roboto, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: 0.8px
  heading-md:
    fontFamily: "Superscripts-Oswald, Oswald, \"Roboto Condensed\", Roboto, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: 0.8px
  footer-heading:
    fontFamily: "Superscripts-Oswald, Oswald, \"Roboto Condensed\", Roboto, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: 0.8px
  nav-category:
    fontFamily: "Superscripts-Oswald, Oswald, \"Roboto Condensed\", Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 400
    letterSpacing: 0.64px
  badge:
    fontFamily: "Superscripts-Oswald, Oswald, \"Roboto Condensed\", Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.8px
  section-label:
    fontFamily: "Superscripts-Oswald, Oswald, \"Roboto Condensed\", Roboto, sans-serif"
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.8px
  body-lg:
    fontFamily: "Superscripts-Roboto, Roboto, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  body:
    fontFamily: "Superscripts-Roboto, Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-card:
    fontFamily: "Superscripts-Roboto, Roboto, sans-serif"
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 20px
  body-sm:
    fontFamily: "Superscripts-Roboto, Roboto, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: "Superscripts-Roboto, Roboto, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16.1px
    letterSpacing: 0.8px
  button-lg:
    fontFamily: "Superscripts-Roboto, Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 18.4px
  utility:
    fontFamily: "Superscripts-Roboto, Roboto, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 16.25px
    letterSpacing: 0.64px
  footer-link:
    fontFamily: "Superscripts-Roboto, Roboto, sans-serif"
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.8px
  legal:
    fontFamily: "Superscripts-Roboto, Roboto, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 20px
  search-input:
    fontFamily: "Arial"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px

rounded:
  none: 0px
  sm: 2px
  md: 3px
  pill: 9999px

spacing:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 32px
  label-x: 64px
  xxl: 80px

components:
  button-outline-light:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.primary}"
    padding: 8px 24px
    height: 34px
  button-outline-light-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  button-outline-dark:
    backgroundColor: "transparent"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.on-primary}"
    padding: 8px 24px
    height: 34px
  button-outline-dark-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  button-contained-black:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.primary}"
    padding: 16px 32px
    height: 52px
  button-contained-black-focused:
    backgroundColor: "{colors.ink-hover}"
  button-candy-blue:
    backgroundColor: "{colors.candy-blue}"
    textColor: "{colors.ink}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.candy-blue}"
    padding: 16px 32px
    height: 52px
  button-candy-blue-hover:
    backgroundColor: "{colors.candy-blue-hover}"
  button-disabled:
    backgroundColor: "{colors.border}"
    textColor: "{colors.ink}"
  option-chip:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-sm}"
    rounded: "{rounded.none}"
    border: "2px solid {colors.border-option}"
    padding: 7px 17.5px
    height: 39px
  option-chip-selected:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    border: "2px solid {colors.primary}"
  section-label-bar:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.section-label}"
    padding: 16px 64px
    height: 50px
  card-product:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    boxShadow: "rgba(0, 0, 0, 0.24) 0px 2px 4px 1px"
    padding: 0px
  card-featured:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-soft}"
    typography: "{typography.body-card}"
    boxShadow: "0px 2px 3px 1px {colors.border}"
  card-featured-hover:
    boxShadow: "rgba(77, 77, 77, 0.2) 0px 1px 3px 1px, rgba(77, 77, 77, 0.1) 0px 2px 8px 4px"
  search-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.search-input}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.border}"
    padding: 10px 8px
    height: 40px
  select:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.border}"
    padding: 14px 48px 14px 14px
    height: 48px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-category}"
    height: 113px
  skip-link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.footer-link}"
    padding: 4px 8px
  link-hover:
    textColor: "{colors.ink-hover}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.footer-link}"
---

## Overview

garmin.com (US) is a monochrome retail site built on Garmin's official brand rules. Its Consumer Brand
Style Guide names black and white as "the two primary options in order to create absolute contrast
between with the lifestyle photography, which should always be the hero design element", and the live
site does exactly that: a `#ffffff` canvas, `#000000` type, a black "FEATURED" label bar, black footer,
and saturated outdoor/sport photography doing all the colour work. The single brand colour, **Candy
Blue** `#6dcff6`, appears only as the ADD TO CART button on product pages and as small accents.

The capture shows a centred GARMIN wordmark header with a utility row (Support, search, account, cart)
and an uppercase Oswald category bar (SMARTWATCHES, SPORTS & FITNESS, OUTDOOR RECREATION, AUTO & HOME,
MARINE, AVIATION, SALE). Below it a full-bleed hero (a boat in turquoise water with marine chartplotters)
carries a two-line white Oswald headline "ONCE AGAIN, WE'RE HONORED", an 18px Roboto line and a white
outlined LEARN MORE button. A black FEATURED bar with a downward triangular pointer introduces a
horizontal row of product cards — black starburst "NEW" badges, product renders on white, 32px Oswald
names (CIRQA™ SMART BAND, APPROACH® S72) and 14.4px Roboto descriptions. Further down: three tall
lifestyle cards with outlined SHOP buttons, two dark editorial tiles with white headlines, and SHOP BY
CATEGORY.

Headlines are condensed, uppercase in most placements, never bold, and slightly tracked (0.8px).
Controls are square-cornered; only cards get a 2px radius.

**Key Characteristics:**
- Black and white as primary colours (official), Candy Blue `#6dcff6` only for the purchase action.
- Oswald 400 (the guide's web substitute for Knockout) for every headline, with 0.8px tracking.
- Roboto for body copy, labels and buttons; buttons are 500 weight uppercase with 0.8px tracking.
- Square 0px buttons: 34px outlined (8px 24px) and 52px contained (16px 32px).
- Product cards: white, 2px radius, `rgba(0, 0, 0, 0.24) 0px 2px 4px 1px` shadow.
- Full-bleed lifestyle photography as the hero element in every band.
- Registered/trademark glyphs rendered by dedicated `Superscripts-*` fonts.

## Colors

> **Source pages:** home (`/en-US/`), `/en-US/c/wearables-smartwatches/`, `/en-US/p/1953453/` (fēnix 9 Pro),
> plus the official [Consumer Brand Style Guide PDF](https://res.garmin.com/www/style-guide/the_garmin_style_guide.pdf).

### Brand (official palette)
- **Black** (`{colors.primary}` — `#000000`): guide "BLACK 0-0-0-100 / 000-000-000 / #000". Footer, label bar,
  contained buttons, body text.
- **White** (`{colors.canvas}` — `#ffffff`): guide "WHITE 0-0-0-0 / 255-255-255 / #FFF". Canvas, cards.
- **Candy Blue** (`{colors.candy-blue}` — `#6dcff6`): guide secondary "CANDY BLUE PMS 297 (LITHO), PMS 298
  (DIGITAL), 50-0-0-0, 109-207-246, #6DCFF6". The guide says to avoid it when a lifestyle photo is the
  central focus and use it sparingly. On the site: `.g__button--contained--candy-blue` (ADD TO CART).
- **Candy Blue Hover** (`{colors.candy-blue-hover}` — `#0fb0f0`): measured hover and the CSS `:focus` state of
  the candy-blue button.

### Text
- **Ink** (`{colors.ink}` — `#000000`): body colour and the most-read colour on category and product pages.
- **Ink Soft** (`{colors.ink-soft}` — `#1a1a1a`): featured-card descriptions on the homepage.
- **Ink Hover** (`{colors.ink-hover}` — `#333333`): measured hover colour of card links; `:active`/`:focus`
  fill of the black contained button.
- **Ink Muted** (`{colors.ink-muted}` — `#4d4d4d`): legal/footnote copy on product pages.
- **Ink Subtle** (`{colors.ink-subtle}` — `#666666`): breadcrumb links.
- **Link Blue** (`{colors.link-blue}` — `#106fad`): `.g__copy--blue a:hover`.
- **Sale Red** (`{colors.sale-red}` — `#920000`): a single measured sale/price text colour.

On the homepage `#ffffff` text slightly outnumbers dark text by character count (1525 vs 680 + 677) because
the hero, dark tiles and footer are long; on white surfaces the reading colour is `#000000` / `#1a1a1a`.

### Surface & Border
- `{colors.surface}` `#eeeeee` — grey band on the category page.
- `{colors.surface-soft}` `#f2f2f2` and `{colors.surface-pressed}` `#e5e5e5` — product-page panels.
- `{colors.border}` `#d9d9d9` — input/select border, disabled button fill, featured-card shadow colour.
- `{colors.border-option}` `#cccccc` — unselected option chip border.
- `{colors.border-figure}` `#b3b3b3` — UGC photo figure border.

## Typography

### Font Family
The [style guide](https://res.garmin.com/www/style-guide/the_garmin_style_guide.pdf) defines two families:
- **Knockout** (Hoefler & Co.) for headlines and subheads — and states "OSWALD CAN BE USED IN LIEU OF KNOCKOUT
  FOR GARMIN.COM ONLY, INCLUDING, BUT NOT LIMITED TO, ALL INSTANCES OF H1-H5."
- **Roboto** (Google) for body and legal copy, "only to be used in its standard weights. A condensed version is
  available but is not allowed for Garmin usage at this time."

The site serves both from `fonts.garmin.com`. Each stack starts with a `Superscripts-*` face whose `@font-face`
declares `unicode-range: U+00AE,U+2122,U+2120` (®, ™, ℠) — it only draws the trademark glyphs, then falls back to
Oswald / Roboto. The search input uses Arial.

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Where measured |
|---|---|---|---|---|---|---|
| `{typography.display}` | Oswald | 40px | 400 | 50px | 0.8px | h1 (hero/product/category) |
| `{typography.display-mobile}` | Oswald | 32px | 400 | 40px | 0.8px | h1 at 390px |
| `{typography.banner-headline}` | Oswald | 47.104px | 400 | 58.88px | 0.8px | product-page "PLAY HARDER" h2 |
| `{typography.heading-lg}` | Oswald | 32px | 400 | 40px | 0.8px | card names, "SHOP BY CATEGORY", category h2 |
| `{typography.heading-md}` | Oswald | 24px | 400 | 30px | 0.8px | category/product h3 |
| `{typography.footer-heading}` | Oswald | 20px | 400 | 32px | 0.8px | footer columns (uppercase) |
| `{typography.nav-category}` | Oswald | 16px | 400 | normal | 0.64px | category bar (uppercase) |
| `{typography.badge}` | Oswald | 16px | 400 | 24px | 0.8px | "NEW" starburst |
| `{typography.section-label}` | Oswald | 14.4px | 400 | 18px | 0.8px | "FEATURED" bar (uppercase) |
| `{typography.body-lg}` | Roboto | 18px | 400 | 27px | — | hero sub-line |
| `{typography.body}` | Roboto | 16px | 400 | 24px | — | body default |
| `{typography.body-card}` | Roboto | 14.4px | 400 | 20px | — | featured-card description |
| `{typography.body-sm}` | Roboto | 14px | 400 | 21px | — | product option chips, product copy |
| `{typography.button}` | Roboto | 14px | 500 | 16.1px | 0.8px | SHOP / LEARN MORE (uppercase) |
| `{typography.button-lg}` | Roboto | 16px | 500 | 18.4px | — | COMPARE / ADD TO CART (uppercase) |
| `{typography.utility}` | Roboto | 13px | 400 | 16.25px | 0.64px | header utility links |
| `{typography.footer-link}` | Roboto | 12.8px | 400 | 24px | 0.8px | footer links |
| `{typography.legal}` | Roboto | 11px | 400 | 20px | — | product footnotes |
| `{typography.search-input}` | Arial | 16px | 400 | 18.4px | — | search field |

### Principles
- Oswald is always weight 400; hierarchy comes from size and uppercase, never bold.
- Line-heights follow a 1.25 ratio on Oswald (40/50, 32/40, 24/30).
- Roboto body sits at 1.5 (16/24); buttons are tight (14/16.1, 16/18.4).
- Tracking: 0.8px on headlines, buttons and footer links; 0.64px on nav and utility text; none on body.
- Product names keep their brand casing and trademark glyphs (fēnix®, CIRQA™).

### Note on Font Substitutes
Oswald and Roboto are free Google Fonts and are what garmin.com ships — use them directly. Knockout is the
licensed print/brand face (Hoefler & Co., per the style guide); the guide itself makes Oswald the approved web
replacement, so no further substitute is needed.

## Layout

### Spacing System
- **Tokens (site variables):** `--g-spacing-xs: .25rem`, `--g-spacing-sm: .5rem`, `--g-spacing-md: 1rem`,
  `--g-spacing-lg: 1.5rem`, `--g-spacing-xl: 2rem`, `--g-spacing-xxl: 5rem` → `{spacing.xs}` 4px, `{spacing.sm}` 8px,
  `{spacing.md}` 16px, `{spacing.lg}` 24px, `{spacing.xl}` 32px, `{spacing.xxl}` 80px; plus `{spacing.label-x}` 64px
  (FEATURED bar side padding).
- Most frequent measured paddings: 24px, 8px, 16px, 32px.

### Grid & Container
- Header: 113px tall at desktop (logo row + category row), 50px at 390px.
- Featured product cards in a horizontal carousel, first card a dark lifestyle tile.
- Lifestyle cards in a three-up grid (379px wide, 589px tall), then a two-up row of dark editorial tiles, then
  SHOP BY CATEGORY as a three-up photo row.
- Breakpoint variables: `--g-breakpoint-xs: 480px`, `-sm: 768px`, `-md: 1024px`, `-lg: 1200px`, `-xl: 1350px`,
  `-xxl: 1440px`, `-xxxl: 1824px`.

### Whitespace Philosophy
Dense retail rhythm: cards sit close together and bands follow each other with little empty canvas. Breathing
room comes from the photography inside each tile. (The extractor recorded no flex/grid gap values on the homepage.)

## Elevation & Depth

| Level | Shadow | Use |
|---|---|---|
| 0 | none | header, bands, buttons |
| 1 | `0px 2px 3px 1px #d9d9d9` | featured product cards |
| 2 | `rgba(0, 0, 0, 0.24) 0px 2px 4px 1px` | `g-card` lifestyle/category cards |
| 2-hover | `rgba(77, 77, 77, 0.2) 0px 1px 3px 1px, rgba(77, 77, 77, 0.1) 0px 2px 8px 4px` | featured card on hover (measured) |
| Product | `rgba(0, 0, 0, 0.12) 0px 0px 2px 0px, rgba(0, 0, 0, 0.24) 0px 2px 2px 0px` | product-page elements |

Shadows are soft, short and neutral — they lift cards a millimetre off the white page, nothing more.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | all buttons, option chips, inputs, selects |
| `{rounded.sm}` | 2px | `g-card` product cards |
| `{rounded.md}` | 3px | UGC photo figures (product page) |
| `{rounded.pill}` | 9999px | circular elements (measured `50%` / `100%`): carousel arrows, swatches |

### Other shapes
- The **FEATURED** label bar ends in a centred downward-pointing triangle (visible in the capture) — a caret
  pointing at the product row.
- "NEW" badges are black starburst (serrated circle) SVGs with Oswald text.
- Carousel arrows are white circles with a black chevron.

## Components

### Buttons (`g__button` family)
**`button-outline-light`** — SHOP on white cards (`g__button--contained--light`): `#ffffff` fill, `#000000` text,
1px black border, 0px radius, padding 8px 24px (`.g__button--contained--medium{font-size:.875rem;padding:.5rem 1.5rem}`),
34px tall, Roboto 14px/500 uppercase, 0.8px tracking. Hover (measured): fill `#000000`, text `#ffffff`.

**`button-outline-dark`** — LEARN MORE / SHOP on photography (`g__button--contained--dark`): transparent, white text,
1px white border, same geometry. Hover (measured): fill `#ffffff`, text `#000000`.

**`button-contained-black`** — COMPARE on the category page (`g__button--contained--black`): `#000000`, white
Roboto 16px/500 uppercase, 1px black border, padding 16px 32px, 52px tall. CSS `:focus`/`:active` → `#333333`.

**`button-candy-blue`** — ADD TO CART on product pages (`g__button--contained--candy-blue`): `#6dcff6`, black text,
16px 32px, 52px. Hover (measured) → `#0fb0f0`.

**`button-disabled`** — `.g__button--contained--disabled`: `#d9d9d9` fill and border, black text, `cursor: not-allowed`.

A small size exists in CSS: `.g__button--contained--small{font-size:.75rem;padding:.313rem 1rem}`.

### Option chips
**`option-chip`** — product size/variant pickers ("43 mm", "Pro - Solar"): white, black Roboto 14px/21px, 2px `#cccccc`
border, 0px radius, padding 7px 17.5px, 39px. **`option-chip-selected`**: black fill, white text, 2px black border.

### Cards
**`card-product`** (`<g-card>`) — white, 2px radius, `rgba(0, 0, 0, 0.24) 0px 2px 4px 1px`; image top, 32px Oswald
title, outlined SHOP button bottom-right.
**`card-featured`** — carousel product card: white, `0px 2px 3px 1px #d9d9d9`, NEW starburst, render, centred
32px Oswald name, 14.4px/20px `#1a1a1a` description. Hover deepens the shadow (`card-featured-hover`).
Card link hover (measured): text colour `#000000` → `#333333`.

### Labels
**`section-label-bar`** — "FEATURED": full-width black bar, white Oswald 14.4px/18px uppercase 0.8px, padding 16px 64px,
50px tall, with the downward triangle.

### Inputs
**`search-input`** — white, 1px `#d9d9d9`, 0px radius, padding 10px 8px, 40px, Arial 16px.
**`select`** — category sort: white, 1px `#d9d9d9`, padding 14px 48px 14px 14px, 48px, Roboto 16px/18.4px.

### Navigation
**`nav`** — white header, centred GARMIN wordmark, utility links right (Roboto 13px, 0.64px), category bar below in
Oswald 16px uppercase with 12.8px side padding per item. **`skip-link`** — "Skip navigation links": black, white
12.8px, padding 4px 8px.

### Footer
**`footer`** — `#000000`, white; Oswald 20px/32px uppercase column heads (CUSTOMER SERVICE, COMPANY, …) and
Roboto 12.8px/24px links with 0.8px tracking.

## Design System Architecture

Garmin publishes an official **brand** system — the
[Consumer Brand Style Guide](https://www.garmin.com/en-US/creative/styleguide/) (PDF v.10.2025, plus display and
store guides and logo packages) — but **no public web component library or token package**. The
[developer brand-guidelines hub](https://developer.garmin.com/brand-guidelines/overview/) links to the same style
guide. The web layer below is read from the shipped site.

### Token architecture
- Brand tier (style guide): two primary colours (Black `#000`, White `#FFF`) and one secondary (Candy Blue `#6DCFF6`,
  PMS 297/298); two typefaces (Knockout, Roboto) with Oswald as the garmin.com-only Knockout replacement.
- Web primitives (root custom properties on the live page, verbatim): `--g-spacing-none: 0`, `--g-spacing-xs: .25rem`,
  `--g-spacing-sm: .5rem`, `--g-spacing-md: 1rem`, `--g-spacing-lg: 1.5rem`, `--g-spacing-xl: 2rem`,
  `--g-spacing-xxl: 5rem`; `--g-breakpoint-xs|sm|standard|md|lg|xl|xxl|xxxl`.
- Colours are not exposed as variables; components hard-code them in BEM modifier classes:
  `g__button--contained--black`, `--candy-blue`, `--dark`, `--light`, `--disabled`; sizes `--small`, `--medium`.
- Prefixes mark ownership: `g__` (components), `gh__` (global header), `gf__` (global footer).

### Theming
Light/dark is per component, not per page: `--dark` variants are for placement on photography/black
(white text and border), `--light` for white surfaces. No site-wide dark mode.

### Type & spacing systems
- 4px base (`--g-spacing-xs`) with a 5rem top step.
- Oswald headlines on a 1.25 line-height ratio; Roboto at 1.5.
- Mobile h1 steps 40px → 32px; section heads stay 32px; body stays 16px.

### Component model
The page is assembled from custom elements and modules whose bundles are named after them (the bundle list also includes Vue runtime files `runtime-core.esm-bundler` and `_plugin-vue_export-helper`)
(`g-button`, `g-button2`, `g-heading`, `g-copy`, `Tile`, `Link`, `CtaButton`, `Gradient`, `GBreadcrumbs`, and `<g-card>`
elements in the DOM), with styles injected via a `shadowStyles` bundle. The style guide adds iconography rules:
icons come only from the designated library, stay near-square, never below 5 mm, and "there should never be two
different icons used to represent the same feature".

### Accessibility
A "Skip navigation links" link is the first focusable element. Button modifiers define `:focus` states
(`--black` → `#333333`, `--candy-blue` → `#0fb0f0`, `--light`/`--dark` → 1px solid outline). No public contrast or
target-size policy was found.

### Delivery
Fonts from `fonts.garmin.com`, versioned bundles under `/css/*-4.12.0.css` and `/js/*-4.12.0.js`. Logo packages
(AI, EPS, PDF, JPG, PNG) are downloadable from the style-guide page. No npm package or public Figma kit.

### Brand voice & photography (style guide)
- Positioning line: "ENGINEERED ON THE INSIDE FOR LIFE ON THE OUTSIDE".
- Photography "is emotional and aspirational": action, non-action lifestyle, and product-in-environment shots;
  authentic athletes and expert users; "not literal or 'see and say'".
- Voice is described per segment (e.g. "a confident navigator", "assured").

## Do's and Don'ts

### Do
- Keep UI black and white; let lifestyle photography be the hero (style guide).
- Use Oswald 400 with 0.8px tracking for headlines, Roboto for body.
- Keep buttons square (0px) and uppercase Roboto 500.
- Use Candy Blue `#6dcff6` only for the purchase action, sparingly.
- Give product cards a 2px radius and the soft `0 2px 4px 1px` shadow.
- Render ® and ™ glyphs as superscripts in product names.

### Don't
- Don't bold Oswald or use Roboto Condensed (forbidden by the style guide).
- Don't put Candy Blue on top of a lifestyle photo that is the central focus (style guide).
- Don't round buttons or inputs.
- Don't add new colours to UI chrome; secondary colour is only Candy Blue.
- Don't create new icons outside the official library (style guide).

## Responsive Behavior

### Breakpoints (site variables)
| Name | Width |
|---|---|
| xs | 480px |
| sm / standard | 768px |
| md | 1024px |
| lg | 1200px |
| xl | 1350px |
| xxl | 1440px |
| xxxl | 1824px |

### Measured mobile changes (390px)
- h1 40px/50px → 32px/40px (`{typography.display-mobile}`).
- FEATURED bar keeps 14.4px/18px and 16px 64px padding, full width.
- Featured card description stays 14.4px/20px.
- Header height measures 113px on desktop and 50px on mobile; category bar behaviour was not measured.
- Body copy stays 16px/24px.

### Touch targets
Contained buttons 52px, selects 48px, search 40px, option chips 39px, outlined buttons 34px.

## Iteration Guide

1. Start on `{colors.canvas}` `#ffffff` with `{colors.ink}` `#000000`.
2. Headline in `{typography.display}` (Oswald 40px/50px, 0.8px) — uppercase for marketing, brand casing for product names.
3. Section heads and card titles in `{typography.heading-lg}` (32px/40px).
4. Body in `{typography.body}` (Roboto 16px/24px); card blurbs in `{typography.body-card}` (14.4px/20px, `#1a1a1a`).
5. Buttons: `button-outline-light` on white, `button-outline-dark` on photos (8px 24px, 34px, 0px radius).
6. Commerce: `button-contained-black` for secondary actions, `button-candy-blue` for ADD TO CART (16px 32px, 52px).
7. Cards: `card-product` (2px radius, `rgba(0, 0, 0, 0.24) 0px 2px 4px 1px`).
8. Introduce a product row with the black `section-label-bar` and its downward triangle.
9. Footer black with Oswald 20px column heads and 12.8px Roboto links.
10. Check numbers: 0 / 2 / 3px radii, 40 / 32 / 24px Oswald, 16 / 14.4 / 14px Roboto, 34 / 52px buttons.
