---
version: alpha
name: Everlane
category: "Fashion & Apparel"
description: "Everlane's Shopify storefront (Dawn 15.3.0 theme, customised) is a quiet, photography-led apparel system set entirely in Maison Neue Book at weight 400: a 32px letter-spaced EVERLANE wordmark, 12px/0.24px uppercase nav and CTA labels, 14px/0.28px body, #ffffff canvas with #000000 ink and #121212 graphite, a #f4edd9 cream announcement band, square 0px corners everywhere, and a #262626 ADD TO BAG bar 47px tall with 15px/1px type."

colors:
  primary: "#262626"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#000000"
  ink-graphite: "#121212"
  ink-title: "#161912"
  ink-muted: "#737373"
  ink-soft: "#4c4c4c"
  button-black: "#000000"
  surface-warm: "#f8f6f5"
  announcement-cream: "#f4edd9"
  announcement-taupe: "#c8c0b8"
  surface-tile: "#f5f5f5"
  surface-tile-warm: "#f5f4f4"
  hairline: "#e0dfdf"
  hairline-hover: "#cac9c9"
  swatch-ring: "#d4dadb"
  footer-rule: "#12121214"
  sale-nav: "#d0021b"
  sale-price: "#ca3214"
  reviews-dark: "#2a2a2a"

typography:
  wordmark-h1:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 32px
    fontWeight: 400
    letterSpacing: 0.31px
  wordmark-h1-mobile:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    letterSpacing: 0.24px
  story-title:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 23px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: 0.92px
  promo-band-title:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 23px
    fontWeight: 400
    lineHeight: 27px
    letterSpacing: 0.92px
  statement:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 21px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: 0.84px
  story-title-mobile:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 27px
    letterSpacing: 0.8px
  collection-title:
    fontFamily: "\"Maison Neue\", sans-serif"
    fontSize: 24px
    fontWeight: 300
    lineHeight: 31.92px
    letterSpacing: 0.31px
  collection-title-mobile:
    fontFamily: "\"Maison Neue\", sans-serif"
    fontSize: 20px
    fontWeight: 300
    lineHeight: 24px
    letterSpacing: 0.24px
  section-heading:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 24px
    fontWeight: 300
    lineHeight: 32px
    letterSpacing: 0.16px
  product-title:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.32px
  body-base:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28.8px
    letterSpacing: 0.6px
  price:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 1px
  button:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 1px
  body:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.62px
    letterSpacing: 0.28px
  body-collection:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.14px
  button-filter:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 1.4px
  price-compare:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
    letterSpacing: 1px
  nav-link:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.6px
    letterSpacing: 0.24px
  label:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 0.24px
  product-card-title:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: 0.35px
  footer-heading:
    fontFamily: "\"Maison Neue Demi\", sans-serif"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 16px
    letterSpacing: 0.24px
  input:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.4px
  size-option:
    fontFamily: "\"Maison Neue\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.24px
  caption:
    fontFamily: "\"Maison Neue Book\", sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 0.2px

rounded:
  none: 0px
  pill: 999px
  circle: 50%

spacing:
  grid-mobile: 4px
  xxs: 4px
  xs: 6px
  sm: 8px
  md: 12px
  input-y: 15px
  lg: 16px
  xl: 20px
  xxl: 24px
  section: 48px
  announcement-bar: 32px
  header: 74px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 30px
    height: 47px
  button-filter-primary:
    backgroundColor: "{colors.button-black}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-filter}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.button-black}"
    padding: 6px 10px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-filter}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.ink-muted}"
    padding: 6px 10px
    height: 48px
  text-link-cta:
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    textTransform: uppercase
  text-link-cta-hover:
    textDecoration: underline
  tab:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    textTransform: uppercase
    rounded: "{rounded.none}"
    border: "1px solid {colors.hairline}"
    padding: 12px 24px
    height: 42px
  tab-hover:
    border: "1px solid {colors.ink-muted}"
  tab-active:
    border: "1px solid {colors.ink}"
  size-option:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-graphite}"
    typography: "{typography.size-option}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.hairline}"
    padding: 11px 0px
    height: 42px
  size-option-hover:
    border: "1px solid {colors.hairline-hover}"
  color-swatch:
    rounded: "{rounded.circle}"
    border: "1px solid {colors.swatch-ring}"
    size: 24px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-graphite}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 15px 50px 15px 15px
    height: 45px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    padding: 0px 16px
    height: 40px
  announcement-bar:
    backgroundColor: "{colors.announcement-cream}"
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    height: 32px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    borderTop: "1px solid {colors.footer-rule}"
  product-card:
    backgroundColor: "{colors.surface-tile}"
    textColor: "{colors.ink-graphite}"
    typography: "{typography.product-card-title}"
    rounded: "{rounded.none}"
  carousel-arrow:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.pill}"
    border: "1px solid {colors.ink}"
---

# Everlane

## Overview

Everlane sells basics — tees, cashmere, denim, shoes — and its storefront behaves like a well-pressed shirt: no
ornament, no colour of its own, and a single typeface carrying every word. The homepage at 1280px opens with a
cream announcement band (`#f4edd9`, 32px tall) reading "SAME QUALITY. SAME STYLES. BETTER PRICES → SHOP NOW", a
white header with WOMEN / MEN / SUSTAINABILITY / STORES on the left, the widely tracked EVERLANE wordmark centred, and
SEARCH / ACCOUNT / BAG on the right. A second row of category links (NEW, CULT FAVORITES, CLOTHING, SWEATERS,
DENIM, TEES, SHOES, ACCESSORIES and a red SALE) sits under a hairline.

Below the header, everything is photography. The capture shows a full-bleed editorial portrait (model in a green
V-neck against a pale wall and tan leather chair) with "POWER OF SOFTNESS" as its headline,
a one-line 14px subtitle, and a plain 12px "SHOP NOW" text link — no filled button anywhere in the hero. A full-width
21px statement paragraph ("Responsibly Crafted, Effortless Style, And Designed To Last…", capitalised) follows, then a
horizontally scrolling carousel of story cards with white 23px uppercase titles over photography, small circular
arrow controls, a cream promo band with a 23px headline and two 12px links, and a six-up row of product
cut-outs on light grey tiles labelled SHOP TEES / SHOP TOPS / SHOP SWEATERS / SHOP DENIM / SHOP BOTTOMS / SHOP SHOES.

The voice is plain and declarative. Microcopy is short, often uppercase, and always paired with an arrow or nothing.
Everlane's own About page frames the brand around "Exceptional quality. Ethical factories. Radical Transparency."
([everlane.com/pages/about](https://www.everlane.com/pages/about)), and the UI mirrors that restraint: the
product and the photo do the talking, the interface stays square, flat and monochrome.

Key characteristics:
- One family, Maison Neue (Book cut dominant; Demi 600 for footer headings; "Maison Neue" 300 for collection titles).
- Weight 400 for virtually all text — the frequency table counts 2,438 weighted characters at 400 vs 85 at 700 and 29 at 600.
- Positive letter-spacing at every size (0.24px at 12px, 0.28px at 14px, 0.92px at 23px).
- Uppercase for navigation, CTAs, product names and editorial headlines; sentence or title case for paragraphs.
- Square corners (`0px`) on buttons, inputs, tiles and tabs; circles only for colour swatches and carousel arrows.
- No shadows on storefront components (Dawn shadow settings all at opacity `0.0`).
- Colour comes only from photography and two reds for sale messaging.

## Colors

### Brand & Accent
- **Primary / ADD TO BAG** (`#262626`): the near-black fill of the product page's full-width ADD TO BAG button. It
  is the only filled call-to-action a shopper meets on a product page.
- **Button black** (`#000000`): fill of the collection filter drawer's "VIEW 271 PRODUCTS" button.
- **On primary** (`#ffffff`): text on both dark buttons and on photography overlays.
- **Sale (nav)** (`#d0021b`): the SALE item in the category menu.
- **Sale price** (`#ca3214`): "Limited Time" and discount labels ("F&F 30% OFF") on collection tiles and the PDP.

### Surface
- **Canvas** (`#ffffff`): body background and what the viewer sees around every photo; Dawn's `--color-background`
  is `255,255,255` and `--gradient-background` is `#ffffff`.
- **Surface warm** (`#f8f6f5`): the background colour with the largest measured area on the homepage (weight 341);
  it is a very light warm off-white that reads as white next to the photography.
- **Announcement cream** (`#f4edd9`): the top announcement band and the "SAME QUALITY…" promo band.
- **Announcement taupe** (`#c8c0b8`): the announcement bar colour measured on the product page during a
  Friends & Family promotion (the collection and product captures show this taupe bar instead of the cream one).
- **Surface tile** (`#f5f5f5`) and **surface tile warm** (`#f5f4f4`): light backgrounds measured on the product page (572 area weight each).
- **Reviews dark** (`#2a2a2a`): the reviews widget's "Write A Review" fill and selected pagination item.

### Text
- **Ink** (`#000000`): the most-read text colour on the homepage (1,418 weighted characters), nav links, footer.
- **Ink graphite** (`#121212`): Dawn's `--color-foreground` / `--color-button` (`18,18,18`); wordmark, collection
  titles, product-card titles, input text.
- **Ink title** (`#161912`): the PDP `h1` product name.
- **Ink muted** (`#737373`): breadcrumbs, product counts ("271 PRODUCTS"), material tags under product cards, and
  the outline of the secondary CLEAR FILTERS button.
- **Ink soft** (`#4c4c4c`): footer locale selector (US/USD) and small legal text.

### Lines
- **Hairline** (`#e0dfdf`): size-option borders, inactive tab borders and filter pills.
- **Hairline hover** (`#cac9c9`): size-option border on hover.
- **Swatch ring** (`#d4dadb`): 1px ring around each colour swatch.
- **Footer rule** (`#12121214`): the 1px top border of the footer (8% graphite).

## Typography

### Font Family
Everything is set in **Maison Neue**, served as three self-hosted faces that the browser reports as loaded:
`Maison Neue Book` (normal), `Maison Neue Demi` (600) and `Maison Neue` (400). Computed `font-family` stacks are
`"Maison Neue Book", sans-serif` for almost all text, `"Maison Neue", sans-serif` for collection titles and size
options, and `"Maison Neue Demi"` for footer column headings. Dawn's own default variable still reads
`--font-body-family: Assistant, sans-serif`, but no measured element renders in Assistant. The reviews widget
uses its own stack (`MaisonNeue-Book`, and `AvenirLTStd` declared as `--primary-font-family`).

Maison Neue was designed by Timo Gaessner at Milieu Grotesque, a foundry established in 2010 by Gaessner and
Alexander Colby; the family grew into "a superfamily of 40 styles", and the foundry "has been acquired by Monotype
in 2023" ([MyFonts — Milieu Grotesque](https://www.myfonts.com/a/font/premium-font-collections/milieu-grotesque)).

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Case | Where |
|---|---|---|---|---|---|---|
| wordmark-h1 | 32px | 400 | — | 0.31px | — | homepage `h1` wrapping the EVERLANE logo |
| wordmark-h1-mobile | 24px | 400 | — | 0.24px | — | same `h1` at 390px |
| story-title | 23px | 400 | 32px | 0.92px | uppercase | carousel story-card titles |
| promo-band-title | 23px | 400 | 27px | 0.92px | uppercase | "SAME QUALITY. SAME STYLES. BETTER PRICES." |
| statement | 21px | 400 | 32px | 0.84px | capitalize | full-width brand statement |
| story-title-mobile | 20px | 400 | 27px | 0.8px | uppercase | story-card titles at 390px |
| collection-title | 24px | 300 | 31.92px | 0.31px | — | collection `h1` ("Women's Sweaters & Cardigans") |
| collection-title-mobile | 20px | 300 | 24px | 0.24px | — | collection `h1` at 390px |
| section-heading | 24px | 300 | 32px | 0.16px | — | "Shop More Sweaters" `h3` |
| product-title | 16px | 400 | 24px | 0.32px | uppercase | PDP `h1` |
| body-base | 16px | 400 | 28.8px | 0.6px | — | `body` default |
| price | 16px | 400 | 24px | 1px | — | PDP price block |
| button | 15px | 400 | 18px | 1px | — | ADD TO BAG |
| body | 14px | 400 | 18.62px | 0.28px | — | homepage paragraphs |
| body-collection | 14px | 400 | 20px | 0.14px | — | collection & PDP copy |
| button-filter | 14px | 400 | 16px | 1.4px | uppercase | VIEW PRODUCTS / CLEAR FILTERS |
| price-compare | 13px | 400 | 19.5px | 1px | — | struck-through regular price |
| nav-link | 12px | 400 | 15.6px | 0.24px | uppercase | WOMEN / MEN / … |
| label | 12px | 400 | 16px | 0.24px | uppercase | SHOP NOW, footer links, announcement links |
| product-card-title | 12px | 400 | 14px | 0.35px | uppercase | product names under tiles |
| footer-heading | 12px (Demi) | 600 | 16px | 0.24px | uppercase | ACCOUNT / COMPANY … |
| input | 12px | 400 | 18px | 0.4px | — | newsletter email field |
| size-option | 12px | 400 | 18px | 0.24px | — | XXS–XXL size boxes |
| caption | 10px | 400 | 16px | 0.2px | uppercase | breadcrumbs ("HOME / …") |

The homepage logo `h1` reports a computed line-height of `0px` and a box 14px tall (the visible mark is the
logo artwork), so no line-height is declared for the wordmark tokens.

### Principles
- **Track everything open.** No measured text uses negative tracking. Small labels sit at 0.24px; buttons at 1px;
  filter buttons at roughly 0.1em (1.4px at 14px).
- **Weight never shouts.** Hierarchy comes from size, case and tracking, not boldness. Collection titles even drop to
  300.
- **Uppercase is for things you act on or name.** Navigation, CTAs, product names, editorial headlines. Paragraphs
  stay in sentence case (or the statement's title case).
- **Small type dominates.** By characters the homepage is mostly 14px (928) and 12px (809); the collection page is
  overwhelmingly 12px (5,764).

### Note on Font Substitutes
Maison Neue is a commercial typeface from Milieu Grotesque (now part of Monotype Fonts, per the MyFonts page
above); it is not open-source. When it is not licensed, use a neutral grotesque with similar proportions and keep
the measured sizes, weights and tracking unchanged. Any substitute is an approximation, not the brand face.

## Layout

### Spacing System
Measured gaps cluster at 8px (40 occurrences on the homepage), 6px, 24px, 12px, 4px and 20px; paddings at 16px
(the header's `0px 16px` gutters and most containers), 15px (input), 24px and 48px. Dawn's grid variables are set to
`--grid-desktop-horizontal-spacing: 8px`, `--grid-desktop-vertical-spacing: 8px` and `--grid-mobile-*: 4px`;
section spacing is `--spacing-sections-desktop: 0px` — sections butt directly against each other, separated only by
the change of image.

| Token | Value | Source |
|---|---|---|
| grid-mobile / xxs | 4px | `--grid-mobile-horizontal-spacing`, gaps |
| xs | 6px | gaps |
| sm | 8px | `--grid-desktop-horizontal-spacing`, gaps |
| md | 12px | gaps, tab padding |
| input-y | 15px | input padding |
| lg | 16px | header padding, container paddings |
| xl | 20px | gaps |
| xxl | 24px | gaps, tab padding |
| section | 48px | paddings |
| announcement-bar | 32px | `--announcement-bar-height` |
| header | 74px | `--header-height` |

### Grid & Container
- Dawn's `--page-width` is `120rem` with `--page-width-margin: 0rem`; the homepage hero, story carousel and
  product tile row all run edge to edge at 1280px.
- The header is a three-zone bar (left nav, centred wordmark, right utilities) 40px tall with `0px 16px` padding,
  followed by a centred category row; `--full-header-height` is `106px`.
- The shop-by-category row is six equal tiles; the collection page is a four-column product grid with an editorial
  tile occupying the first cell, separated by 8px gutters.
- The PDP shows a recommendation row of four tiles and a centred info column for title, price, swatches, sizes and
  the ADD TO BAG bar.

### Whitespace Philosophy
Generous space lives inside the photographs, not between sections. Text blocks are short and placed in the lower-left
or left-centre of images with 16–24px insets. Between modules there is either nothing (`0px` section spacing) or a
single statement paragraph with comfortable vertical room.

## Elevation & Depth

Storefront components are flat. Dawn's shadow variables are all switched off — `--buttons-shadow-opacity: 0.0`,
`--inputs-shadow-opacity: 0.0`, `--product-card-shadow-opacity: 0.0`, `--collection-card-shadow-opacity: 0.0`,
`--media-shadow-opacity: 0.0`, `--drawer-shadow-opacity: 0.0` — and the only shadow measured in the frequency
table is a transparent focus helper (`rgba(18, 18, 18, 0) 0px 0px 0px 2px`). `--popup-shadow-opacity` is `0.05`
(popups only).

Depth comes from photography: overlapping fabric, models leaning into furniture, product cut-outs on light tiles.
Separation uses hairlines (`#e0dfdf`, footer `#12121214`) instead of shadows.

### Decorative Depth
None. No gradients, glassmorphism or layered cards. The only overlay effect is white type placed directly on darker
photography.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| none | 0px | buttons, inputs, tabs, size options, tiles, media (`--buttons-radius: 0px`, `--inputs-radius: 0px`, `--media-radius: 0px`, `--product-card-corner-radius: 0.0rem`) |
| pill | 999px | the circular carousel arrow buttons on the homepage |
| circle | 50% | 24px colour swatches |

Third-party widgets bring their own radii (the reviews widget's 100px "Write A Review" pill, an `--atlas-*`
variable namespace declaring 8px buttons); none of these are used by the storefront's own buttons, which all measure
`0px`.

No clip-paths, skews or notched shapes were measured. Everything is a rectangle or a circle.

### Photography Geometry
Images are cropped to hard rectangles: a full-bleed landscape hero, tall portrait story cards in a carousel, square-ish
product cut-outs on grey tiles, and portrait product photos in the collection grid. Corners are never rounded.

## Components

### Buttons
- **button-primary (ADD TO BAG)**: `#262626` fill, `#ffffff` text, Maison Neue Book 15px/18px, 1px tracking,
  padding `0px 30px`, height 47px, full width of the 384px buy box, radius 0px. No hover change was measured.
- **button-filter-primary (VIEW 271 PRODUCTS)**: `#000000` fill and 1px `#000000` border, white 14px/16px uppercase
  text with 1.4px tracking, padding `6px 10px`, height 48px, radius 0px.
- **button-secondary (CLEAR FILTERS)**: transparent on white, `#000000` text, 1px `#737373` border, same type and
  size as the filter primary.
- **text-link-cta (SHOP NOW / SHOP WOMEN / SHOP MEN)**: 12px uppercase, 0.24px tracking, black on light or white on
  photography. Hover adds `text-decoration: underline` (measured); one homepage SHOP NOW instance prepends an arrow on
  hover ("→ SHOP NOW").

### Cards & Containers
- **product-card**: photo on a light grey ground (the PDP measures `#f5f5f5` and `#f5f4f4` surfaces), title below in 12px/14px uppercase graphite with
  0.35px tracking, price row in 12px with a struck regular price and a `#ca3214` "Limited Time" note, a row of 24px
  colour swatches, and `#737373` 10px material tags ("Cleaner Chemistry, Renewed Materials"). Hovering a product title
  changes its colour from `#121212` to `#000000` (measured).
- **story card**: full-height photograph with 23px/32px uppercase white title, 14px/18.62px white description and a
  12px SHOP NOW / READ MORE link, all bottom-left.

### Inputs & Forms
- **text-input (newsletter)**: white, `#121212` text, 12px/18px with 0.4px tracking, padding `15px 50px 15px 15px`
  (room for the submit arrow on the right), height 45px, radius 0px. Dawn sets `--inputs-border-width: 1px`,
  `--inputs-border-opacity: 0.55`.
- **size-option**: 92.5px × 42px boxes, white, 1px `#e0dfdf` border, `"Maison Neue"` 12px/18px with 0.24px tracking,
  padding `11px 0px`, radius 0px. Hover darkens the border to `#cac9c9`.
- **color-swatch**: 24px circle filled with the product colour, 1px `#d4dadb` ring.

### Navigation
- **nav**: white header, 40px tall, `0px 16px` padding. Links are 12px/15.6px uppercase with 0.24px tracking in
  `#000000`; the active department (WOMEN) is underlined. The centred wordmark link changes from `#121212` to
  `#000000` on hover.
- **category row**: centred 12px uppercase links under a hairline; SALE is red (`#d0021b`).
- **announcement-bar**: 32px band in `#f4edd9` (or `#c8c0b8` during promotions) with 12px uppercase copy and
  arrow-linked SHOP WOMEN / SHOP MEN links that underline on hover.

### Tabs
- **tab (QUALITY / SUSTAINABILITY on the PDP transparency module)**: 12px uppercase, 0.24px tracking, padding
  `12px 24px`, height 42px, radius 0px. Active: 1px `#000000` border. Inactive: 1px `#e0dfdf` border, darkening to
  `#737373` on hover.

### Footer
- White, separated by a 1px `#12121214` top rule, 405px tall at 1280px. Column headings (ACCOUNT, COMPANY…) are
  Maison Neue Demi 12px/600 uppercase; links are 12px/16px uppercase Book. The locale button (US/USD) is 10px
  uppercase `#4c4c4c` with 0.6px tracking.

### Signature Components
- **Breadcrumb**: 10px/16px uppercase `#737373`, 0.2px tracking, "HOME / WOMEN'S SWEATERS & CARDIGANS"; hovering a
  crumb turns it `#000000`.
- **Carousel arrows**: small white circles with a 1px black outline and a chevron (radius 999px).

## Design System Architecture

Everlane publishes **no public design system**, brand portal, or token package. Searches for "Everlane design
system brand guidelines", "Everlane press kit logo media", and "Everlane typography font Maison Neue" returned only
third-party summaries (which this file ignores), and none of Everlane's own pages that were opened link to
guidelines. What can be described is the de-facto system shipped on everlane.com.

- **Platform and theme.** The storefront's page source declares
  `Shopify.theme = {"name":"everlane/MAIN (10/7/26)", "schema_name":"Dawn", "schema_version":"15.3.0"}`
  (seen in the HTML of [everlane.com/collections/womens-sweaters](https://www.everlane.com/collections/womens-sweaters)).
  Dawn is "Shopify's first source available reference theme"
  ([github.com/Shopify/dawn](https://github.com/Shopify/dawn)).
- **Token architecture.** Dawn emits its tokens as CSS custom properties in `layout/theme.liquid`, each derived from
  a theme setting — e.g. `--buttons-radius: {{ settings.buttons_radius }}px`, `--page-width: {{ settings.page_width |
  divided_by: 10 }}rem`, `--grid-desktop-horizontal-spacing: {{ settings.spacing_grid_horizontal }}px`
  ([Dawn theme.liquid](https://raw.githubusercontent.com/Shopify/dawn/main/layout/theme.liquid)). Everlane's
  live values: `--buttons-radius: 0px`, `--inputs-radius: 0px`, `--media-radius: 0px`, `--variant-pills-radius: 40px`,
  `--badge-corner-radius: 4.0rem`, `--page-width: 120rem`, `--grid-desktop-horizontal-spacing: 8px`,
  `--duration-default: .2s`, `--ease-out-slow: cubic-bezier(0, 0, .3, 1)`. The naming is component-first
  (`--buttons-*`, `--inputs-*`, `--product-card-*`, `--collection-card-*`, `--drawer-*`, `--popup-*`), one flat tier.
- **Theming.** Dawn generates colour schemes by looping over `settings.color_schemes`, writing `.color-{{ scheme.id }}`
  classes (and `:root` for the default) with RGB-triplet variables such as `--color-foreground`
  ([Dawn theme.liquid](https://raw.githubusercontent.com/Shopify/dawn/main/layout/theme.liquid)). On Everlane the
  default scheme is `--color-background: 255,255,255`, `--color-foreground: 18,18,18`, `--color-button: 18,18,18`,
  `--color-button-text: 255,255,255`, `--color-link: 18,18,18`. No dark mode or density switch was observed.
- **Type & spacing.** Dawn's `--font-body-scale` and `--font-heading-scale` are both `1`. The storefront overrides
  the theme font (Assistant) with Maison Neue in its own CSS. There is no documented modular scale; measured sizes
  are 10, 12, 13, 14, 15, 16, 20, 21, 23, 24 and 32px. Spacing clusters on 4px multiples (4, 8, 12, 16, 20, 24, 48)
  with a few odd values (6, 15).
- **Component model.** Dawn's component inventory (header, announcement bar, product cards, product form, drawers,
  facets) is visible in class names such as `product-form__submit`, `announcement-bar__link`, `menu-drawer__menu-item`,
  `footer-block__heading`. Everlane adds custom modules — `pv-swatches__btn`, `product-transparency-module__tab`,
  `product-details__shortcut-banner`, `ev-accordion-toggle` — and homepage blocks carry `builder-block` class names.
- **Accessibility.** Dawn's focus styling is present as variables: `--focused-base-outline: .2rem solid
  rgba(var(--color-foreground), .5)`, `--focused-base-outline-offset: .3rem`, and a two-ring
  `--focused-base-box-shadow`. "Skip to content" and "Skip to product information" links are present (visually hidden
  until focused; 15px/1px on `#121212`). A floating blue accessibility-widget button is visible in every capture, and
  the page announces "Press Option+1 for screen-reader mode". No contrast target is published.
- **Delivery.** Shopify theme (Liquid + CSS + JS), no npm package or Figma kit published by Everlane.

## Do's and Don'ts

### Do
- Set every word in Maison Neue Book at weight 400; use Demi 600 only for footer column headings.
- Track type open: 0.24px at 12px, 0.28px at 14px, 1px on buttons, 1.4px on 14px filter buttons.
- Uppercase navigation, CTAs, product names and hero/story headlines.
- Keep every button, input, tile and tab at `0px` radius.
- Use `#262626` for the ADD TO BAG bar, `#000000` for text, `#121212` for graphite titles and inputs.
- Let photography fill the full width and carry the colour; put white type straight on the image.
- Use plain 12px uppercase text links ("SHOP NOW") on editorial modules, underlining on hover.
- Separate regions with `#e0dfdf` hairlines and the `#12121214` footer rule, not shadows.
- Reserve red for sale: `#d0021b` in the menu, `#ca3214` for "Limited Time" pricing.

### Don't
- Don't introduce a brand accent colour, gradient or coloured CTA.
- Don't round corners on buttons or cards; circles are only for swatches and carousel arrows.
- Don't use bold for emphasis in body copy or headlines.
- Don't use negative letter-spacing.
- Don't add drop shadows to cards, buttons or inputs (Dawn shadow opacities are `0.0`).
- Don't put filled buttons on hero imagery — the hero uses text links.
- Don't add vertical gaps between full-bleed sections (`--spacing-sections-desktop: 0px`).
- Don't treat the third-party widgets' rounded buttons (reviews, `--atlas-*`) as Everlane's button style.

## Responsive Behavior

### Breakpoints
At 390px the header text measures 15px/27px with 0.6px tracking, 45px
tall). The wordmark `h1` drops from 32px to 24px (tracking 0.24px). Story-card titles fall from 23px to 20px/27px
with 0.8px tracking. The collection title falls from 24px/31.92px to 20px/24px at weight 300. Mobile text is
dominated by 12px (596 weighted characters on the homepage) and 20px (508).

### Touch Targets
Measured interactive heights: ADD TO BAG 47px, filter buttons 48px, newsletter input 45px, size options and tabs
42px, close button 44×44px, swatches 24px.

### Collapsing Strategy
- Desktop's two-row navigation moves into a menu drawer (`menu-drawer__menu-item`, 14px/18.2px uppercase, 0.28px
  tracking, padding `11px 16px`).
- Dawn's grid gutters shrink from 8px to 4px (`--grid-mobile-horizontal-spacing`).
- Full-bleed imagery stays full-bleed; text overlays reflow beneath or within the image.

### Image Behavior
Photography is cropped, never letterboxed; product tiles keep their light grey ground at every width.

## Iteration Guide

1. Start with `#ffffff`, `#000000` and Maison Neue Book 400. If a screen needs a second colour, it is
   photography, not UI.
2. Size type from the hierarchy table; never invent intermediate sizes. Copy the tracking with the size.
3. For a new CTA, choose between the `#262626` 47px bar (commerce action) and a 12px uppercase text link (editorial).
4. For selectors, reuse the size-option pattern: white box, 1px `#e0dfdf`, hover `#cac9c9`, radius 0px.
5. For tabs, use 1px `#e0dfdf` inactive, `#737373` hover, `#000000` active, padding `12px 24px`.
6. Check every new surface against the Dawn variables (`--buttons-radius: 0px`, shadow opacities `0.0`).
7. Mark sale states only with `#d0021b` / `#ca3214`.
8. When in doubt, remove: fewer words, no borders, no shadows, larger photograph.
