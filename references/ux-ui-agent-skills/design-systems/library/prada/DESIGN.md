---
version: alpha
name: Prada
category: "Luxury"
description: "Prada's US store (prada.com/us/en) is a white, photography-first system set entirely in Grilli Type's GT-America (400/500/700): 32px/500 hero titles in white over full-bleed 1280x720 campaign media, 14px/500 uppercase underlined text CTAs with 0.2px tracking, #000000 ink with #4e555a and #767676 secondary greys, #f7f7f7 editorial bands, a #111111 news section, #ebebed product wells and 0px corners on every button, card and image."

colors:
  primary: "#000000"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#000000"
  ink-secondary: "#4e555a"
  ink-muted: "#767676"
  surface-soft: "#f7f7f7"
  surface-dark: "#111111"
  product-well: "#ebebed"
  divider: "#d9dce0"
  image-overlay: "#00000066"

typography:
  hero-title:
    fontFamily: "GT-America, sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 37.44px
  hero-title-mobile:
    fontFamily: "GT-America, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
  editorial-title:
    fontFamily: "GT-America, sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 40px
  hero-title-sm:
    fontFamily: "GT-America, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28.08px
  section-title:
    fontFamily: "GT-America, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 30px
  page-title:
    fontFamily: "GT-America, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28.8px
  slider-heading:
    fontFamily: "GT-America, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 25px
  body-lg:
    fontFamily: "GT-America, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  slide-title:
    fontFamily: "GT-America, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  card-title:
    fontFamily: "GT-America, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18px
  tab:
    fontFamily: "GT-America, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  body:
    fontFamily: "GT-America, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18px
  cta:
    fontFamily: "GT-America, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: 0.2px
    textTransform: uppercase
  button-label:
    fontFamily: "GT-America, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
    textTransform: uppercase
  small:
    fontFamily: "GT-America, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  utility-caps:
    fontFamily: "GT-America, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 14px
    letterSpacing: 0.2px
    textTransform: uppercase
  footer-heading:
    fontFamily: "GT-America, sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 14px
    letterSpacing: 0.2px
    textTransform: uppercase
  micro:
    fontFamily: "GT-America, sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 14px
  kicker:
    fontFamily: "GT-America, sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 12.5px
    textTransform: uppercase

rounded:
  none: 0px

spacing:
  xxs: 4px
  xs: 8px
  sm: 12px
  md: 16px
  base: 18px
  lg: 20px
  xl: 24px
  xxl: 32px
  gutter: 40px
  block: 56px
  section: 72px
  section-lg: 96px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    border: "1px solid #000000"
    typography: "{typography.button-label}"
    rounded: "{rounded.none}"
    padding: 12px 26px 13px
    height: 44px
  text-cta:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.cta}"
    rounded: "{rounded.none}"
    underline: "::after 1px tall, full label width, background = text colour"
  text-cta-hover:
    underline: "::after width -> 0px"
  text-cta-on-media:
    textColor: "{colors.on-primary}"
  header:
    backgroundColor: transparent
    textColor: "{colors.on-primary}"
    height: 72px
    padding: 0px 28.4444px
  header-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    transition: "background-color 0.2s ease-in-out, color 0.2s ease-in-out"
  tab:
    textColor: "{colors.ink}"
    typography: "{typography.tab}"
  product-card:
    backgroundColor: "{colors.canvas}"
    imageBackground: "{colors.product-well}"
    imageSize: 319px x 399px
    detailsPadding: 16px 56px 32px 16px
    rounded: "{rounded.none}"
    nameTypography: "{typography.card-title}"
    priceTypography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 14px 0px 6px
    height: 39px
  news-section:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-primary}"
    padding: 96px 0px
    titleTypography: "{typography.section-title}"
    imageOverlay: "{colors.image-overlay}"
  editorial-band:
    backgroundColor: "{colors.surface-soft}"
    titleTypography: "{typography.editorial-title}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    headingTypography: "{typography.footer-heading}"
    linkTypography: "{typography.small}"
---

## Overview

Prada's US store is a white page that lets campaign photography do all the talking. The interface is a
single grotesque — **GT-America** — in black and white, with no rounded corners, no shadows and no
accent colour. Buttons are mostly not buttons: calls to action are short uppercase words with a thin
underline.

What the capture shows, top to bottom:

- A **72px header**: "Menu" (hamburger) and "Search" at left, the serif **PRADA** wordmark centred, "Contact us",
  account and bag icons at right. Over the hero the header is transparent with white text; on hover it turns
  white with black text (0.2s).
- A **full-bleed 1280×720 hero carousel** on a pale grey studio photograph: a white kicker "ONLINE EXCLUSIVE"
  (12px), the white title "Prada Essence" (32px/500), a two-line white 14px description, an underlined
  uppercase CTA "FOR HIM", and thin progress bars for the carousel.
- **New Arrivals** — a white section (72px top padding) with a 20px/500 heading, a 14px description, and
  Women / Men tabs (the active one underlined), then four edge-to-edge product category tiles on light grey
  ("Women's Bags", "Women's Ready to Wear", "Women's Shoes", "Women's Accessories") captioned in 14px/500.
- A **#f7f7f7 editorial band** with a centred portrait photograph (a turquoise scarf on a brown knit), the title
  "Re-Cashmere & Re-Wool" (32px/500), a 14px sentence, and an underlined "DISCOVER".
- More full-bleed heroes and sliders below, a **#111111 "Pradasphere News"** section with darkened image
  cards, then a white footer with newsletter field and uppercase bold column headings.

The tone is calm and declarative ("Rooted in memory and shaped by transformation, evolving forms and refined
details reveal new expressions of individuality."). Product names are literal ("Medium Re-Nylon backpack with
pouch").

## Colors

### Brand & Accent

- **Primary `#000000`** — text CTAs, the filled cookie-banner buttons, all ink. There is no chromatic accent.

### Surface

- **Canvas `#ffffff`** — page, header (on hover/scroll), sliders, product cards, footer.
- **Surface soft `#f7f7f7`** — full-width editorial bands.
- **Surface dark `#111111`** — the "Pradasphere News" section.
- **Product well `#ebebed`** — light grey behind product images on listing pages.
- **Hero backdrop `#000000`** — the hero-card container colour behind loading media.
- **Image overlay `#00000066`** — black at 0.4 alpha over news images so white titles read.

### Text

- **Ink `#000000`** — headings, body, CTAs, product names.
- **Secondary `#4e555a`** — long intro copy on listing pages.
- **Muted `#767676`** — product counts ("36 Products") and subcategory links.
- **On primary `#ffffff`** — text over photography, header text over the hero, text in the dark section.
- **Divider `#d9dce0`** — hairline borders.

## Typography

### Font Family

Every text element uses **GT-America** (loaded weights 400, 500, 700), with `sans-serif` fallback. Per
[Grilli Type](https://www.grillitype.com/typeface/gt-america), GT America is a commercial family designed by
Noël Leu with Seb McLauchlan, released 2016, with 84 styles across Compressed to Expanded widths and a Mono.
The site also loads an icon font, `prada-icons`.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Case | Use |
|---|---|---|---|---|---|---|
| hero-title | 32px | 500 | 37.44px | — | sentence | "Prada Essence" over hero |
| editorial-title | 32px | 500 | 40px | — | sentence | "Re-Cashmere & Re-Wool" |
| hero-title-sm | 24px | 500 | 28.08px | — | sentence | Secondary heroes |
| section-title | 24px | 500 | 30px | — | sentence | "Pradasphere News" |
| page-title | 24px | 700 | 28.8px | — | sentence | Listing h1 "Prada Backpacks" |
| slider-heading | 20px | 500 | 25px | — | sentence | "New Arrivals" |
| body-lg | 16px | 400 | 22px | — | sentence | Menu items, drawer messages |
| slide-title | 16px | 400 | 20px | — | sentence | News slide titles |
| card-title | 14px | 500 | 18px | — | sentence | Product names, category captions |
| tab | 14px | 500 | 20px | — | sentence | Active Women / Men tab |
| body | 14px | 400 | 18px | — | sentence | Descriptions, prices, labels |
| cta | 14px | 500 | 16px | 0.2px | upper | "FOR HIM", "DISCOVER" |
| button-label | 14px | 600 | 21px | — | upper | Cookie-banner buttons |
| small | 12px | 400 | 18px | — | sentence | Footer links, kicker "ONLINE EXCLUSIVE" |
| utility-caps | 12px | 500 | 14px | 0.2px | upper | Store Locator, Filters, Sort by |
| footer-heading | 12px | 700 | 14px | 0.2px | upper | Footer column titles |
| micro | 10px | 400 | 14px | — | sentence | Legal, copyright |
| kicker | 10px | 400 | 12.5px | — | upper | "FASHION SHOWS" |

Mobile (390px): hero title 20px/500/24px; hero description 14px/400/20px; slider heading 16px/500/20px;
category captions 12px/500/15px; product names 12px/500/16px.

### Principles

- One family; hierarchy from size and weight 500, not from different faces.
- Uppercase only for CTAs, utilities and footer headings — always with 0.2px tracking (except the cookie button
  label and the kicker).
- Headline weights stay at 500; 700 is reserved for the listing h1 and footer headings.
- Inactive tabs drop to 400, active tabs are 500 and underlined.

### Note on Font Substitutes

GT America is a commercial typeface (Grilli Type). The cookie button declares weight 600, which is not among the
loaded weights (400/500/700), so the browser renders the nearest available face. Without a licence, use a
neutral grotesque with a 500 weight and keep the measured sizes, line heights and 0.2px uppercase tracking.

## Layout

### Spacing System

Measured gaps: 4, 8, 12, 16, 18, 20, 24, 32, 40, 56px. Measured paddings: 6, 14, 16, 20, 24, 32, 36, 40, 72, 80,
96, 144px. Slider sections pad `72px 0px 0px`; the dark news section pads `96px 0px`; drawers pad
`144px 0px 56px`; product card details pad `16px 56px 32px 16px`; the header pads `0px 28.4444px`.

### Grid & Container

- Heroes: full bleed, 1280×720 (or free height ~711–778px).
- Category tiles: four equal columns, edge to edge, 1px apart.
- Editorial band: centred portrait image (~427px wide at 1280px) with centred text below.
- Product listing: four 319px columns; image 319×399.

### Whitespace Philosophy

Generous white space around headings (72px above slider headings), dense image grids with hairline gutters.

## Elevation & Depth

Flat. No box-shadow was measured on any rendered element. Depth comes from full-bleed photography, the
`#00000066` image overlay in the dark section, and the header switching from transparent to white.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| none | 0px | Buttons, inputs, images, cards, header, drawers |

### The Underline CTA

Prada's signature control is a text CTA with a 1px `::after` underline the width of the label (white on photos,
black on light). On hover the underline collapses to 0px width.

### Photography Geometry

Full-bleed 16:9 heroes, near-square category tiles on light grey, 4:5 product images, portrait editorial images.

## Components

### Buttons

- **Text CTA** (`a.button`): no fill, no border, GT-America 14px/500/16px uppercase, 0.2px tracking, 1px
  underline; hover collapses the underline. White on media, black on light grounds.
- **Filled button** (cookie banner "Accept all" / "Reject all" / "Cookie settings"): `#000000` fill, white
  14px/600/21px uppercase label, 1px `#000000` border, 0px radius, `12px 26px 13px`, 180×44. No hover change was
  measured.

### Cards & Containers

- **Category tile**: grey studio product photo, 14px/500/17.5px caption centred below on white.
- **Product card** (listing): 319×547 white card, 319×399 `#ebebed` image well with swipeable images, details
  padded `16px 56px 32px 16px`, name 14px/500/18px, price 14px/400/18px, "+4" swatch count 12px.
- **News card**: photograph with `#00000066` overlay, white 10px uppercase kicker and 16px title.

### Inputs & Forms

- **Newsletter e-mail**: white, 14px/400/18px black, `14px 0px 6px` padding (floating-label layout), 39px tall,
  0px radius, no border on the input element.
- **Sort select** (listing): 12px/500/14px uppercase.

### Navigation

- **Header**: 72px, transparent with white text over heroes; white with black text on hover; 14px/400/18px
  labels ("Menu", "Search", "Contact us").
- **Menu drawer**: white, 427px wide; items 16px/400/22px, 48px tall rows padded `12px 35.5556px`.
- **Tabs**: Women / Men, 14px, active 500 with underline.

### Footer

White, 32px top padding; "SUBSCRIBE TO OUR NEWSLETTER" and column titles 12px/700/14px uppercase 0.2px;
links 12px/400/18px; consent text 10px/400/14px; "©PRADA 2007 - 2026" 10px uppercase.

### Signature Components

- **Transparent header over hero** that turns white on hover.
- **Underline CTA** that retracts on hover.
- **Grey-ground category strip** of four edge-to-edge tiles.

## Design System Architecture

Prada publishes **no public design system**, brand guideline, token package or digital typography guide.
Searches ("Prada design system digital brand guidelines website typography GT America", "Prada press kit logo
brand identity official pradagroup.com media", "prada.com github design tokens tailwind frontend npm package",
"Prada official website typeface GT America Grilli Type") returned only third-party aggregators and corporate
documents without design specifications. The typeface itself is documented by its foundry,
[Grilli Type](https://www.grillitype.com/typeface/gt-america). What follows is the de-facto system measurable on
prada.com.

### Token architecture

`:root` carries only framework variables: Tailwind's `--tw-ring-*`, `--tw-shadow*` defaults and Swiper's
`--swiper-theme-color: #007aff`, `--swiper-navigation-size: 44px`, plus `--app-height`. Brand colours and type are
not exposed as custom properties.

### Theming

No dark mode or theme switch was observed. Sections switch between white, `#f7f7f7` and `#111111` grounds.

### Type & spacing systems

Tailwind-style utility classes with a custom spacing scale prefixed `sp` (e.g. `pt-sp-18`, `py-sp-56`, `pr-sp-4`,
`pl-sp-0`) and width utilities such as `lg:w-500`. Type sizes: 10 / 12 / 14 / 16 / 20 / 24 / 32px.

### Component model

BEM-named components (`hero-card`, `hero-card--overlaps-header`, `slider-grid`, `slider-grid-card-headings`,
`frame-media--background`, `pradasphere__picture-overlay`, `product-card__image--snap`, `product-card__details`,
`new-header__container`, `new-menu__first-level`) combined with Tailwind utilities (`inline-flex`,
`justify-center`, `items-center`, `px-5`, `min-w-button`, `bg-transparent`, `border-none`). Responsive text is
duplicated per breakpoint (`…__desktop-text-element` / `…__mobile-text-element`). Carousels use Swiper.

### Accessibility

No published accessibility policy was found. Uppercase CTAs carry 0.2px tracking; the header has a 72px height.

### Delivery

No npm package, Figma kit or versioning is public.

## Do's and Don'ts

### Do

- Use GT-America for everything, weights 400 / 500 / 700.
- Keep the interface black on white; use `#f7f7f7` and `#111111` only as full-width section grounds.
- Write CTAs as uppercase 14px/500 words with 0.2px tracking and a 1px underline.
- Put white text directly on photography; add the `#00000066` overlay only on busy news images.
- Keep every corner square.
- Put product shots on `#ebebed`.

### Don't

- Don't add a coloured accent or Prada-green/blue UI elements.
- Don't use pill buttons or rounded cards.
- Don't use shadows.
- Don't set headlines in bold; 500 is the headline weight.
- Don't set long uppercase sentences — uppercase is for 1–3 word CTAs and labels.

## Responsive Behavior

### Breakpoints

Measured at 1280px and 390px. Text is rendered by separate desktop and mobile elements.

### Mobile (390px)

- Hero title 32px → 20px/500/24px; description 14px/400/20px.
- Slider heading 20px → 16px/500/20px.
- Category captions 14px → 12px/500/15px; product names 12px/500/16px.
- Footer headings keep 12px/700/14px uppercase.

### Touch Targets


### Image Behavior

Heroes stay full bleed; category tiles reflow; product images keep their wells.

## Iteration Guide

1. White canvas, black GT-America text, nothing rounded.
2. Header: 72px, transparent white-on-image, turning white with black text on hover (0.2s).
3. Hero: full-bleed 1280×720 media, white 12px kicker, 32px/500 title, 14px description, underlined uppercase CTA.
4. Section intro: 72px top padding, 20px/500 heading, 14px description, Women/Men tabs.
5. Category strip: four edge-to-edge grey-ground tiles with 14px/500 captions.
6. Editorial band: `#f7f7f7`, centred portrait, 32px/500/40px title, "DISCOVER".
7. News: `#111111`, 96px vertical padding, `#00000066` image overlays, white 24px/500 title.
8. Footer: white, 12px/700 uppercase titles with 0.2px tracking, 12px links, 10px legal.
9. Check: no accent colour, no radius, no shadow.
