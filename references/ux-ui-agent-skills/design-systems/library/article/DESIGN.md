---
version: alpha
name: Article
category: "Home & Furniture"
description: "Article's storefront (article.com) is a warm, photo-heavy modern-furniture shop set in Proxima Nova, served as separate files (proxima_nova_regular / proxima_nova_bold, all at computed weight 400): #2e2e2e ink on #ffffff, coral #ff6458 as the single accent for Add to cart pills (9999px radius, 1.6px uppercase tracking, hover #cc5046), white 100px-radius pills on photography, 32px bold headlines, 8px-radius cards with a 1px #c2c2c2 border, and a #2e2e2e footer."

colors:
  primary: "#ff6458"
  primary-hover: "#cc5046"
  primary-tint: "#ffe0de"
  primary-light: "#ffa29b"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#2e2e2e"
  ink-caption: "#424242"
  ink-button: "#1e1e1e"
  ink-black: "#000000"
  grey-dark: "#626262"
  grey-2: "#828282"
  grey-medium: "#a7a7a7"
  grey-light: "#c2c2c2"
  grey-5: "#cacaca"
  grey-6: "#efefef"
  surface-ultra-light: "#f2f2f2"
  footer: "#2e2e2e"
  surface-darkest: "#141414"
  success: "#3cb064"
  warning: "#e6b94f"

typography:
  promo-display:
    fontFamily: "proxima_nova_bold, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 60px
  promo-display-light:
    fontFamily: "proxima_nova_regular, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 60px
  headline:
    fontFamily: "proxima_nova_bold, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
  headline-hero:
    fontFamily: "proxima_nova_bold, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
  product-title:
    fontFamily: "proxima_nova_regular, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 31.2px
    letterSpacing: -0.24px
  subhead:
    fontFamily: "proxima_nova_regular, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
  body:
    fontFamily: "proxima_nova_regular, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
  body-bold:
    fontFamily: "proxima_nova_bold, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
  footer-heading:
    fontFamily: "proxima_nova_bold, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
    letterSpacing: -0.16px
  button:
    fontFamily: "proxima_nova_bold, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 1.6px
  button-small:
    fontFamily: "proxima_nova_bold, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: 1.4px
  small:
    fontFamily: "proxima_nova_regular, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
  announcement:
    fontFamily: "proxima_nova_bold, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
  chip:
    fontFamily: "proxima_nova_bold, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
    letterSpacing: 1.2px
  breadcrumb:
    fontFamily: "proxima_nova_regular, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.6px
  badge:
    fontFamily: "proxima_nova_bold, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 17px

rounded:
  xs: 4px
  card: 8px
  pill-white: 100px
  pill: 9999px
  circle: 50%

spacing:
  unit: 4px
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
  xl: 24px
  xxl: 32px
  gutter: 40px
  section: 88px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    border: "2px solid #ff6458"
    padding: 11px 15px
    height: 42px
    textTransform: uppercase
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    border: "2px solid #cc5046"
  button-white:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-button}"
    typography: "{typography.button}"
    rounded: "{rounded.pill-white}"
    padding: 12px 24px
    height: 44px
    textTransform: uppercase
  button-white-small:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-button}"
    typography: "{typography.button-small}"
    rounded: "{rounded.pill-white}"
    textTransform: uppercase
  chip-outlined:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    typography: "{typography.chip}"
    rounded: "{rounded.pill}"
    border: "2px solid #ff6458"
    padding: 9px 18px
    height: 34px
  chip-outlined-hover:
    backgroundColor: "{colors.primary-tint}"
    textColor: "{colors.primary-hover}"
    border: "2px solid #cc5046"
  chip:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.chip}"
    rounded: "{rounded.pill}"
    padding: 9px 18px
    height: 34px
  chip-hover:
    backgroundColor: "{colors.surface-ultra-light}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.card}"
    border: "1px solid #c2c2c2"
    padding: 16px 20px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav-link-hover:
    textColor: "{colors.primary}"
    textDecoration: underline
  link-accent:
    textColor: "{colors.primary}"
    typography: "{typography.body-bold}"
  link-accent-hover:
    textColor: "{colors.primary-hover}"
  cart-badge:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.badge}"
    rounded: "{rounded.circle}"
  footer:
    backgroundColor: "{colors.footer}"
    textColor: "{colors.on-primary}"
    headingTypography: "{typography.footer-heading}"
    linkTypography: "{typography.small}"
---

## Overview

Article is a direct-to-consumer modern furniture shop, and its homepage reads like a lifestyle magazine with a
shopping cart. The canvas is white, text is soft charcoal `#2e2e2e`, photography is warm (walnut, leather,
travertine, afternoon light), and one colour does all the selling: **coral `#ff6458`** (`--coral`, also
`--accent-color`). Type is **Proxima Nova**, loaded as separate per-weight font files (`proxima_nova_regular`,
`proxima_nova_bold`) so the computed `font-weight` is always 400 — boldness comes from the file, not the weight.

From the capture, top to bottom:

- A dark announcement bar: "Clearance Event: Get up to 50% off tons of last-chance styles." (14px bold white,
  link underlined) with a close ×.
- A white header: the letter-spaced **ARTICLE.** wordmark with a coral full stop, a wide outlined search field
  ("Search products & help ..."), and icons (country flag, help, account, wishlist, cart with a coral count
  badge); below it, a single row of 16px `#2e2e2e` category links (Fall Clearance Event, Rooms, Products, Decor,
  Outdoor, Furniture Collections, Best Sellers, New Arrivals, Bundles, Ideas & Inspiration, Article Pro).
- A coral promo band: "**Fall Clearance:** Up to 50% off." at 48px (bold + regular in one line), a small 14px
  note, and a white "SHOP NOW" pill.
- A full-bleed hero photograph (a woven dining chair) with a centred white 32px bold headline ("Make your home
  the hot spot."), 16px subline and a white "SHOP DINING ROOM" pill.
- "Shop By Room": 32px heading and six square photographs with 16px `#424242` captions.
- Further full-bleed and two-up photo features, each with white headline, one line of copy and a white
  uppercase pill CTA ("SHOP LEATHER SOFAS", "SHOP BANQUETTES", "SHOP MARBLE & TRAVERTINE", "GET STARTED").
- A `#2e2e2e` footer with a newsletter field and coral "SUBSCRIBE" pill.

The voice is breezy and benefit-led: "Small space, solved.", "Better with age.", "Svelte, stylish, and sturdy:
you can have it all."

## Colors

All values are measured; token names are the site's own CSS custom properties where they exist.

### Brand & Accent

- **Coral `#ff6458`** (`--coral`, `--accent-color`, `--font-accent-color`) — Add to cart and Subscribe pills,
  the cart badge, accent links ("See more"), link hover colour, outlined option chip, and the full stop
  in the wordmark.
- **Coral dark `#cc5046`** (`--coral-dark`, also `--error-color`) — hover for coral buttons, chips and links.
- **Coral light `#ffe0de`** (`--coral-light`) — hover fill of the coral-outlined option chip.
- **Primary light 40 `#ffa29b`** (`--primary-light-40`).

### Surface

- **Canvas `#ffffff`** — page background.
- **Ultra light `#f2f2f2`** (`--grey-ultra-light`, `--background-color`) — product-page background panels and
  plain chip hover.
- **Footer `#2e2e2e`** (`--grey-1`) — footer band (the largest dark area on the homepage).
- **Darkest `#141414`** — a near-black background measured on the page.

### Text

- **Ink `#2e2e2e`** (`--grey-1`, `--font-color`, `--grey-ultra-dark`) — body, nav, headings on white.
- **Caption `#424242`** — "Shop By Room" captions.
- **Button text `#1e1e1e`** — label on white pills.
- **Black `#000000`** — promo band headline and copy.
- **Greys** — `#626262` (`--grey-dark`), `#828282` (`--grey-2`), `#a7a7a7` (`--grey-medium`), `#c2c2c2`
  (`--grey-light`, `--border-color`), `#cacaca` (`--grey-5`), `#efefef` (`--grey-6`).

### Semantic

- **Success `#3cb064`** (`--green`, `--success-color`); **Warning `#e6b94f`** (`--amber`, `--warning-color`);
  **Error `#cc5046`** (`--coral-dark`, `--error-color`).

## Typography

### Font Family

**Proxima Nova** by Mark Simonson (Mark Simonson Studio, 2005; per
[Adobe Fonts](https://fonts.adobe.com/fonts/proxima-nova) it "bridges the gap between typefaces like Futura and
Akzidenz Grotesk"). Article declares one family name per weight — `proxima_nova_light`, `proxima_nova_regular`,
`proxima_nova_semibold`, `proxima_nova_bold`, `proxima_nova_black` — via variables `--font-regular`,
`--font-bold` etc., each with the fallback stack `-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
Helvetica, Arial, sans-serif`. On the measured pages only regular and bold render. A font called `article-font`
is also loaded; its role was not determined.

### Hierarchy

| Token | File | Size | Line height | Tracking | Use |
|---|---|---|---|---|---|
| promo-display | bold | 48px | 60px | — | "Fall Clearance:" |
| promo-display-light | regular | 48px | 60px | — | "Up to 50% off." (same line) |
| headline | bold | 32px | 40px | — | "Shop By Room", feature card titles |
| headline-hero | bold | 32px | 32px | — | Hero headline on photo |
| product-title | regular | 24px | 31.2px | -0.24px | Product name on PDP |
| subhead | regular | 20px | 26px | — | PDP sub-heads, footer newsletter line |
| body | regular | 16px | 20.8px | — | Body, nav, captions |
| body-bold | bold | 16px | 20.8px | — | Hero sublines, accent links |
| footer-heading | bold | 16px | 20.8px | -0.16px | Footer column heads |
| button | bold | 16px | 16px | 1.6px | Pill labels (uppercase) |
| button-small | bold | 14px | 14px | 1.4px | Small white pills (uppercase) |
| small / announcement | regular / bold | 14px | 18.2px | — | Footer links / announcement bar |
| chip | bold | 12px | 12px | 1.2px | Option chips (uppercase) |
| breadcrumb | regular | 12px | 15.6px | — | Breadcrumbs, PDP top line |
| badge | bold | 11px | 17px | — | Cart count |

All computed weights are 400. At 390px headlines drop from 48px to 32px/40px.

### Principles

- Line heights follow the site's tokens: `--line-height` 1.3 for text (16px → 20.8px, 14px → 18.2px), 1.1 for
  large sizes.
- Uppercase is reserved for buttons and chips, always tracked 0.1em (`--uppercase-letter-spacing: .1em` →
  1.6px at 16px, 1.4px at 14px, 1.2px at 12px).
- Headings get `--heading-letter-spacing: -.01em` where applied (-0.24px at 24px, -0.16px at 16px).
- Hierarchy is bold vs regular file plus size; never colour.

### Note on Font Substitutes

Proxima Nova is commercial (Adobe Fonts / Mark Simonson Studio). If unavailable, the site itself falls back to
the system UI stack. Load the regular and bold files under separate family names (or use weights 400/700) and
keep the 1.3 line height and 0.1em uppercase tracking.

## Layout

### Spacing System

`--space-unit: .25rem` (4px) with tokens `--space-1` … `--space-24` defined as multiples. Measured gaps/paddings:
8, 12, 16, 20, 24, 32, 40, 88px. 40px is the page side padding (category link row and content) and the main grid
gap; 12px is the most frequent padding.

### Grid & Container

- 40px side gutters at 1280px; "Shop By Room" is a six-up row of square photos.
- Heroes run full-bleed; secondary features are two-up cards inset from the edges.
- Product page: gallery left, buy panel right with chips, Add to cart pill and bordered cards.

### Whitespace Philosophy

Moderate density: photography fills most of the scroll, with compact headline + subline + pill groups placed
directly on images. White space separates bands rather than framing content.

## Elevation & Depth

The homepage is flat. The CSS defines `--shadow-color: rgba(0, 0, 0, .2)`, `--box-shadow-blur: 4px`,
`--box-shadow-spread: 8px` and outline-style shadows (`0 0 0 1px var(--grey-light)`, `0 0 0 1px var(--coral)`),
whose usage was not traced; no shadow was measured on homepage elements. An overlay colour
`--overlay-color: rgba(255, 255, 255, .7)` exists for veils.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| xs | 4px | Small controls |
| card | 8px | Cards (`--container-border-radius: 8px`) |
| pill-white | 100px | White CTA pills on photography |
| pill | 9999px | Coral buttons, chips (`--button-border-radius`, `--circle-border-radius`) |
| circle | 50% | Cart badge, icon buttons |

### Photography Geometry

Photographs are square-cornered: full-bleed heroes, square room tiles, tall two-up feature images.

## Components

### Buttons

- **Primary (coral)**: `#ff6458` fill, 2px `#ff6458` border, white 16px bold uppercase label tracked 1.6px,
  line-height 16px, `11px 15px` padding, 42px tall, 9999px radius. Hover: fill and border `#cc5046`. Used for
  ADD TO CART, ADD BUNDLE TO CART, SUBSCRIBE.
- **White pill**: white fill, `#1e1e1e` label (black on the coral band), 16px bold uppercase 1.6px,
  `12px 24px`, 44px tall, 100px radius. Small variant 14px/1.4px. Used on photography and the promo band.

### Option Chips (product page)

- **Outlined (coral)** — the first option chip ("FABRIC"): transparent, 2px coral border, coral 12px bold uppercase label (1.2px), `9px 18px`, 34px tall,
  pill radius. Hover: `#ffe0de` fill, `#cc5046` text and border.
- **Plain** — the other option chips ("VELVET"): transparent, no visible border, `#2e2e2e` label; hover `#f2f2f2` fill.

### Cards & Containers

- **Bundle card**: white, 1px `#c2c2c2` border, 8px radius, `16px 20px` padding ("Double up on legroom with …").
- **Room tile**: square photograph with a 16px `#424242` caption below.
- **Photo feature**: full-bleed or two-up photograph with white 32px bold headline, 16px bold subline, white pill.

### Inputs & Forms

The header search field is a wide outlined box with a magnifier icon (see capture); the inner input measured
16px regular `#2e2e2e` on white. The border and radius of its wrapper were not separately measured.

### Navigation

- **Announcement bar**: dark, 14px bold white text with an underlined link.
- **Category row**: 16px regular `#2e2e2e` links; hover coral `#ff6458` with underline.
- **Cart badge**: coral circle with 11px bold white count.

### Signature Components

- Coral promo band with a 48px bold + regular headline on one line.
- White uppercase pill CTAs sitting directly on photographs.
- Coral 9999px Add to cart pill.

## Design System Architecture

Article publishes **no public design system** (searches recorded in SOURCES.json; the
[About page](https://www.article.com/about) could not be fetched). The live CSS, however, exposes a clear
token layer on `:root`, which is what this file is built from:

- **Token architecture (observed)**: primitive colour tokens (`--coral`, `--coral-dark`, `--coral-light`,
  `--primary-light-40`, `--grey-1`, `--grey-2`, `--grey-5`, `--grey-6`, `--grey-dark`, `--grey-medium`,
  `--grey-light`, `--grey-ultra-light`, `--green`, `--amber`, `--white`, `--black`) referenced by semantic tokens
  (`--accent-color: var(--coral)`, `--font-color: var(--grey-1)`, `--border-color: var(--grey-light)`,
  `--background-color: var(--grey-ultra-light)`, `--success-color: var(--green)`, `--warning-color: var(--amber)`,
  `--error-color: var(--coral-dark)`, `--link-hover-color: var(--grey-ultra-dark)`, `--ctf-link-color: var(--coral)`).
- **Type tokens**: `--font-regular`, `--font-bold`, `--font-semibold`, `--font-light`, `--font-black`; sizes
  `--font-size-12` … `--font-size-96` in rem; `--line-height-12` … `--line-height-48` (1.3 up to 24px, 1.1 at 32
  and 48); `--uppercase-letter-spacing: .1em`; `--heading-letter-spacing: -.01em`.
- **Spacing**: `--space-unit: .25rem`, `--space-0` … `--space-24` as `calc(var(--space-unit) * n)`.
- **Shape**: `--button-border-radius: 9999px`, `--circle-border-radius: 9999px`, `--container-border-radius: 8px`.
- **Component model (observed)**: utility-style classes — `button filled white normal full-width-mobile`,
  `typography-weight-bold typography-style-as-typed`, `site-message`, `page-header-cart-count`,
  `email-input-submit`. The `--ctf-*` prefix appears on link tokens; Font Awesome 6 variables are present for icons.
- **Theming**: one light theme; white-on-photo text via classes; no dark mode observed.
- **Delivery**: no npm package or Figma kit found publicly.

## Do's and Don'ts

### Do

- Use coral `#ff6458` for the one action that buys (Add to cart, Subscribe) and for link hover.
- Darken coral to `#cc5046` on hover.
- Use uppercase, 0.1em-tracked bold labels on every pill.
- Put white pills directly on warm lifestyle photography.
- Keep text `#2e2e2e` on white, 16px/20.8px.
- Use 8px-radius bordered cards for supplementary product info.

### Don't

- Don't use coral for large surfaces other than the promo band.
- Don't square off buttons — every button is a pill.
- Don't set body text in pure black; use `#2e2e2e`.
- Don't add shadows to cards or photos.
- Don't use uppercase for headlines; only for buttons and chips.
- Don't introduce more accent colours; greys and coral only.

## Responsive Behavior

### Breakpoints

Measured at 1280px and 390px. At 390px: promo headline 48px/60px → 32px/40px; body remains 16px/20.8px; the coral
pill keeps `11px 15px` and 42px height; white pills carry a `full-width-mobile` class.

### Touch Targets

Coral pills 42px, white pills 44px, option chips 34px.

### Collapsing Strategy

White pills carry a class named `full-width-mobile`; their rendered width at 390px, and the re-arrangement of
the category link row and room tiles, were not measured.

### Image Behavior

Heroes stay full-bleed; room tiles keep their square crop.

## Iteration Guide

1. White canvas, Proxima Nova (or system UI fallback) 16px/20.8px `#2e2e2e`.
2. Build the dark announcement bar and the header (wordmark with coral full stop, wide search, icons, 16px
   category row with coral hover).
3. Add the coral promo band with a 48px bold+regular headline and white pill.
4. Add full-bleed photo heroes with white 32px bold headline, 16px bold subline, white uppercase pill.
5. Add "Shop By Room" six-up squares with 16px captions.
6. On product pages use the coral 9999px Add to cart pill (hover `#cc5046`), pill chips and 8px bordered cards.
7. Close with the `#2e2e2e` footer and coral Subscribe pill.
