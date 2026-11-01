---
version: alpha
name: Fenty Beauty
category: "Beauty & Personal Care"
description: "Fenty Beauty by Rihanna's Shopify storefront is a stark black-and-white system set entirely in Lineto's Brown — uppercase 700-weight fluid headings (71.1112px wordmark h1, 42.6666px/28.4444px/21.3334px at 1280px), 14px/400 body, 12px/700 uppercase buttons with 0.3px tracking — on a #ffffff canvas with warm-black #2d2929 ink, square 0px black (#000000) buttons 40px tall that invert to white on hover, #bd0100 sale prices, and full-bleed campaign colour such as magenta #cc2d75."

colors:
  primary: "#000000"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#2d2929"
  ink-secondary: "#666666"
  background-secondary: "#efefef"
  background-inverse: "#2b2727"
  surface-product: "#f5f5f5"
  border-01: "#d8d8d8"
  border-02: "#efefef"
  grey-300: "#b3b2b1"
  disabled: "#a8a8a8"
  accent-01: "#e0beb1"
  accent-02: "#ebdad3"
  accent-03: "#f2eae8"
  accent-04: "#684537"
  orange: "#ab4824"
  grey-100: "#f6ede0"
  danger: "#bd0100"
  success: "#00af2f"
  warning: "#ffde7b"
  focus: "#4b3dc4"
  campaign-magenta: "#cc2d75"
  promo-grey: "#3c3f42"
  overlay: "#00000080"

typography:
  wordmark-h1:
    fontFamily: "Brown, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 71.1112px
    fontWeight: 700
    lineHeight: 62.5778px
    letterSpacing: 0.711112px
  wordmark-h1-mobile:
    fontFamily: "Brown, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 38px
    fontWeight: 700
    lineHeight: 33.82px
    letterSpacing: 0.38px
  display:
    fontFamily: "Brown, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 42.6666px
    fontWeight: 700
    lineHeight: 1
    letterSpacing: 0.426666px
  heading-lg:
    fontFamily: "Brown, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 28.4444px
    fontWeight: 700
    lineHeight: 1
    letterSpacing: 0.284444px
  heading-md:
    fontFamily: "Brown, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 21.3334px
    fontWeight: 700
    lineHeight: 21.3334px
    letterSpacing: 0.213334px
  heading-md-mobile:
    fontFamily: "Brown, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 18px
    letterSpacing: 0.18px
  heading-sm:
    fontFamily: "Brown, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
    letterSpacing: 0.16px
  body-lg:
    fontFamily: "Brown, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.08px
  body:
    fontFamily: "Brown, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.06px
  body-sm:
    fontFamily: "Brown, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.96px
  body-sm-light:
    fontFamily: "Brown, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 12px
    fontWeight: 300
    lineHeight: 15.96px
  button:
    fontFamily: "Brown, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 15.96px
    letterSpacing: 0.3px

rounded:
  none: 0px
  xs: 2px
  sm: 4px
  pill: 9999px

spacing:
  xxs: 4px
  xs: 5px
  sm: 8px
  md: 10px
  lg: 15px
  xl: 20px
  xxl: 30px
  section-sm: 40px
  section: 60px
  section-lg: 80px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 15px 20px
    height: 40px
    border: "1px solid {colors.on-primary}"
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 15px 20px
    border: "1px solid {colors.primary}"
  button-primary-disabled:
    backgroundColor: "{colors.disabled}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 15px 20px
    height: 40px
    border: "1px solid {colors.primary}"
  button-secondary-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 15px 20px
    border: "1px solid {colors.on-primary}"
  button-primary-inverse:
    backgroundColor: "{colors.accent-02}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 15px 20px
  button-primary-inverse-hover:
    backgroundColor: "{colors.orange}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
  button-tertiary:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    padding: 0 0 5px
    border: "1px solid {colors.primary} bottom only"
  button-tertiary-hover:
    textColor: "{colors.primary}"
    border: "1px solid {colors.grey-300} bottom only"
  promo-bar:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-sm}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 20px 35.5556px 15px
    height: 119px
  product-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  price-sale:
    textColor: "{colors.danger}"
    typography: "{typography.body-sm}"
  newsletter-input:
    textColor: "{colors.on-primary}"
    typography: "{typography.body-sm-light}"
    rounded: "{rounded.none}"
    padding: 15px 20px
    height: 46px
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.body-sm}"
  footer:
    textColor: "{colors.on-primary}"
    typography: "{typography.body-lg}"
---

## Overview

Fenty Beauty's storefront (measured on `fentybeauty.com`, served as the `/en-th` Thailand storefront during extraction) is built like a fashion magazine laid over a strict black-and-white retail grid. The chrome is almost monochrome — white `#ffffff` canvas, warm near-black `#2d2929` ink, pure black `#000000` buttons — and all colour comes from full-bleed campaign photography and colour-blocked panels (the holiday campaign fills the hero with magenta `#cc2d75`, the bestseller promo with a blush panel).

Typography is a single family, **Brown** (Lineto), used two ways: 700-weight uppercase for every heading and button, 400 (and 300) sentence-case for body copy. Headings are fluid: the theme sizes them with `min(max(…px, …vw), …px)` so at a 1280px viewport the h1 wordmark renders at exactly 71.1112px, display headings at 42.6666px, section titles at 28.4444px and product titles at 21.3334px. Uppercase headlines are tracked at +0.01em, producing the odd-looking but exact letter-spacing values (0.711112px, 0.426666px, 0.284444px, 0.213334px).

Buttons are square, 40px tall, 12px/700 uppercase with 0.3px tracking. Their hover is a hard colour inversion — black buttons turn white with a black border, white buttons turn black — with a 0.15s ease-in-out colour transition. There are no shadows, no rounded corners on the brand's own components, and no gradients.

The capture shows the rhythm: a dark-grey free-shipping bar, a black promo bar with arrows, a 119px header (locale left, widely letter-spaced FENTY BEAUTY wordmark centre with its reversed "N", account/search/wishlist/bag icons right, category links on a second row), a split hero (magenta copy panel left, packshot right), a horizontal product carousel led by a blush promo tile, a photographic "SPOTTED ON YOUR SOCIALS" band, a left-aligned "WISH LIST-WORTHY GIFTS" heading with a black button, and then a mosaic of full-height colour-block category tiles with vertical uppercase labels.

**Key Characteristics:**
- One typeface — Brown — in 700 uppercase (headings, buttons) and 400/300 sentence case (body).
- Fluid heading scale driven by `vw` clamps; values at 1280px are fractional (71.1112, 42.6666, 28.4444, 21.3334px).
- Warm-black ink `#2d2929` rather than pure black for text; pure black `#000000` for buttons.
- Square, 40px, 12px/700 uppercase buttons with 15px 20px padding and colour-inversion hover.
- Campaign colour lives in imagery and full-bleed panels, never in UI chrome.
- Sale pricing in red `#bd0100` with strikethrough.
- A documented semantic token layer (`--color-foreground`, `--button-primary-bg`, …) exposed as CSS custom properties.

## Colors

### Brand & Accent
- **Primary / Black** (`{colors.primary}` — `#000000`): `--button-primary-bg`, `--color-link`, `--color-black`. Filled buttons, tertiary underline, borders.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): `--button-primary-color`, `--color-foreground-inverse`.
- **Accent 01** (`{colors.accent-01}` — `#e0beb1`), **Accent 02** (`{colors.accent-02}` — `#ebdad3`, also `--button-primary-inverse-bg`), **Accent 03** (`{colors.accent-03}` — `#f2eae8`, measured as a large panel fill on the product page), **Accent 04** (`{colors.accent-04}` — `#684537`): the warm nude/blush family that echoes the brand's skin-tone-first positioning.
- **Orange** (`{colors.orange}` — `#ab4824`): `--color-orange`, `--color-accent-01-inverse`, `--button-primary-inverse-hover-bg`.
- **Campaign Magenta** (`{colors.campaign-magenta}` — `#cc2d75`): the holiday hero panel (370 weighted area units). Seasonal; it is content, not a system token.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): `--color-background`.
- **Background Secondary** (`{colors.background-secondary}` — `#efefef`): `--color-background-secondary`; also `--color-border-02`.
- **Background Inverse** (`{colors.background-inverse}` — `#2b2727`): `--color-background-inverse`, `--color-grey-600`; dark sections (285 weighted area units on the homepage). The footer's newsletter copy measures white (`#ffffff`), i.e. it sits on a dark surface, but the extractor did not isolate which element paints it.
- **Surface Product** (`{colors.surface-product}` — `#f5f5f5`): product-page gallery/panel fill.
- **Grey 100** (`{colors.grey-100}` — `#f6ede0`): `--color-grey-100`, `--color-foreground-secondary-inverse`.
- **Promo Grey** (`{colors.promo-grey}` — `#3c3f42`): the top free-shipping strip.
- **Overlay** (`{colors.overlay}` — `#00000080`): 50% black scrim behind drawers/modals.

### Text
- **Ink** (`{colors.ink}` — `#2d2929`): `--color-foreground`; 4787 weighted chars on the homepage.
- **Ink Secondary** (`{colors.ink-secondary}` — `#666666`): `--color-foreground-secondary`; product descriptions (2607 chars on the product page).
- **Disabled** (`{colors.disabled}` — `#a8a8a8`): `--color-disabled`, `--button-primary-disabled-bg`.

### Borders
- **Border 01** (`{colors.border-01}` — `#d8d8d8`): `--color-border-01`; hairlines between sections and around product thumbnails.
- **Border 02** (`{colors.border-02}` — `#efefef`).
- **Grey 300** (`{colors.grey-300}` — `#b3b2b1`): `--button-tertiary-hover-border`.

### Semantic
- **Danger** (`{colors.danger}` — `#bd0100`): `--color-danger`; struck-through sale prices (279 chars on the homepage).
- **Success** (`{colors.success}` — `#00af2f`): `--color-success`.
- **Warning** (`{colors.warning}` — `#ffde7b`): `--color-warning`.
- **Focus** (`{colors.focus}` — `#4b3dc4`): `--color-focus`, `--button-primary-focus-color`.

## Typography

### Font Family
- **Brown** — served as `Brown` (normal, bold, 300) and declared as `--font-family-primary: "Brown"`. Body stack: `Brown, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif`. It carries 7938 of 7948 weighted characters on the homepage.
- `--font-family-secondary` is declared as `"Bronw"` — a typo in the live theme that resolves to nothing, so in practice Brown is the only face.

### Hierarchy

| Token | Size @1280 | Weight | Line height | Tracking | Theme class / use |
|---|---|---|---|---|---|
| `{typography.wordmark-h1}` | 71.1112px | 700 | 62.5778px | 0.711112px | `.h1` — homepage h1 (logo wordmark) |
| `{typography.wordmark-h1-mobile}` | 38px | 700 | 33.82px | 0.38px | `.h1` floor at 390px |
| `{typography.display}` | 42.6666px | 700 | 1 | 0.426666px | `.h3` — hero headline ("BETTER THAN WINDOW SHOPPING") |
| `{typography.heading-lg}` | 28.4444px | 700 | 1 | 0.284444px | `.h4` — section titles ("WISH LIST-WORTHY GIFTS") |
| `{typography.heading-md}` | 21.3334px | 700 | 21.3334px | 0.213334px | `.h5` — product h1, "COMPARE FOUNDATIONS" |
| `{typography.heading-md-mobile}` | 18px | 700 | 18px | 0.18px | `.h5` floor at 390px |
| `{typography.heading-sm}` | 16px | 700 | 16px | 0.16px | `.h6` — "FLEX YOUR SKIN WITH THIS DUO" |
| `{typography.body-lg}` | 16px | 400 | 22.08px | — | `.body-3` — product description |
| `{typography.body}` | 14px | 400 | 18.06px | — | `.body-2` — product card names, nav |
| `{typography.body-sm}` | 12px | 400 | 15.96px | — | `.text-body` — captions, promo text |
| `{typography.body-sm-light}` | 12px | 300 | 15.96px | — | newsletter consent copy |
| `{typography.button}` | 12px | 700 | 15.96px | 0.3px | `.btn` — uppercase labels |

The theme's own heading clamps (from `index.wCTYExvU.min.css`): `.h1` `min(max(38px,5.55556vw),80px)`, `.h2` `min(max(36px,4.58333vw),66px)`, `.h3` `min(max(32px,3.33333vw),48px)`, `.h4` `min(max(24px,2.22222vw),32px)`, `.h5` `min(max(18px,1.66667vw),24px)`, `.h6` `16px`; all Brown 700, `letter-spacing: .01em`, line-height 1 (h1 0.88–0.89).

### Principles
- Headings are always 700 and usually uppercase; body is always sentence case.
- Tracking is proportional (+0.01em) on headings and fixed (0.3px) on 12px buttons.
- 14px is the most-read size on the homepage (3857 chars), 12px on the product page (5569 chars).
- Light 300 is used only for small legal/consent copy.

### Note on Font Substitutes
Brown is a commercial typeface from the foundry Lineto (lineto.com/typefaces/brown). If it is unavailable, keep the theme's own fallback order (`-apple-system`, `system-ui`, `Segoe UI`, `Roboto`) and preserve the 700 uppercase / 400 sentence-case split and the exact sizes.

## Layout

### Spacing System
Tailwind v4 base unit `--spacing: .25rem` (4px). Measured gaps: 10px (315), 8px (115), 15px (69), 5px (58), 20px (30); paddings: 15px (92), 20px (66), 4px, 8px, 40px, 30px, 60px, 80px on the product page.
- `{spacing.xxs}` 4px · `{spacing.xs}` 5px · `{spacing.sm}` 8px · `{spacing.md}` 10px · `{spacing.lg}` 15px · `{spacing.xl}` 20px · `{spacing.xxl}` 30px · `{spacing.section-sm}` 40px · `{spacing.section}` 60px · `{spacing.section-lg}` 80px.

### Grid & Container
- Header horizontal padding is `35.5556px` at 1280px (a vw-derived value), 20px on mobile.
- Product carousel: a promo tile followed by equal product cards (~210px wide at 1280px) separated by a few px of white.
- Category mosaic: one wide image tile plus three narrow full-height colour tiles with vertical text.
- Tailwind breakpoints: `--breakpoint-sm 40rem`, `--breakpoint-md 48rem`, `--breakpoint-lg 64rem`, `--breakpoint-xl 80rem`, `--breakpoint-2xl 96rem`.

### Whitespace Philosophy
Full-bleed imagery butts directly against content bands; whitespace appears only around text blocks (40–60px section padding). Product cards are tight (10px gaps) so the grid reads as a dense, shoppable wall.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | All brand components |
| Overlay | `{colors.overlay}` `#00000080` | Drawers, quick-shop, modals |

The homepage `boxShadows` frequency table is empty. The theme defines Tailwind drop-shadow tokens (`--drop-shadow-sm 0 1px 2px #00000026`, `--drop-shadow-md 0 3px 3px #0000001f`) but none render on the homepage. Depth comes from photography and colour blocks.

## Shapes

### Border Radius Scale
- `{rounded.none}` 0px — `--button-border-radius: 0`; buttons, cards, inputs, panels.
- `{rounded.xs}` 2px — `--radius-xs .125rem`; small badges/controls (39 measured elements).
- `{rounded.sm}` 4px — minor controls.
- `{rounded.pill}` 9999px — fully rounded carousel dots/icon buttons (measured as `3.35544e+07px`).

### Photography Geometry
Packshots are shot on soft grey or colour-matched backgrounds in near-square tiles; campaign imagery is full-bleed and saturated (magenta, plum, red). Category tiles use tall, narrow crops with the label rotated 90°.

## Components

### Buttons
- **Primary** (`.btn-primary`, "QUICK SHOP", "ADD TO BAG", "START SAVING"): `{colors.primary}` fill, white text, 1px white border, `{typography.button}`, padding 15px 20px, height 40px (`--button-height`), radius 0, `min-width: 160px`. Hover (measured): white fill, black text, black border.
- **Secondary / outlined** ("SHOP HOLIDAY", "FIND YOUR SHADE"): white fill, black text, 1px black border; hover (measured) black fill, white text.
- **Primary inverse** (`--button-primary-inverse-*`): `{colors.accent-02}` fill with white text; hover `{colors.orange}` fill with black text; disabled `#a8a8a8`.
- **Tertiary** (`.btn-tertiary`): transparent text button with a 1px black bottom border and 5px bottom padding; hover border `{colors.grey-300}`.
- **Disabled**: `--button-primary-disabled-bg #a8a8a8`, white text.
- Focus: `outline: 2px solid #4b3dc4; outline-offset: 2px` (`--button-focus-width`, `--button-focus-offset`, `--button-primary-focus-color`).
- Transition: `background-color, color, border-color, opacity` over `.15s ease-in-out`.

### Cards & Containers
- **Product card**: square image tile, discount badges stacked top-left ("25% OFF", "BESTSELLER" — white rectangles with dark uppercase text), name in `{typography.body}` `{colors.ink}`, star rating, shade name + underlined shade count, price in 12px with the original price struck through in `{colors.danger}`; a black "QUICK SHOP" button appears on hover.
- **Promo tile**: blush panel with a packshot shelf, a 28.4444px uppercase headline and a black button.
- **Editorial overlay card**: black panel inset on a photo, white uppercase 28.4444px headline, 14px copy, white outlined button.

### Inputs & Forms
- **Newsletter input** (dark band): transparent field, white `{typography.body-sm-light}` text, padding 15px 20px, 46px tall, square.
- Product-page shade search: white field, 12px `#373330` text, 50px tall, left side rounded 100px (part of a combined search control).

### Navigation
- Free-shipping strip in `{colors.promo-grey}`, then a black promo bar with 12px white text and underlined links ("SHOP NOW | TERMS").
- Header: white, 119px (`--header-height`), padding 20px 35.5556px 15px; locale selector with flag at left, spaced wordmark at centre, Sign In + icons at right; category row below (The Holiday Windows Collection, Bestsellers, Makeup, Skincare, Body, Hair, Fragrance, Sale, Discover, "Ask AI" chip).
- Mobile header: 60px, Menu / Search / wordmark / Cart.

### Pills, Tags, and Chips
- Discount/bestseller badges: small square white labels, uppercase 12px.
- "Ask AI" chip in the nav: light grey fill with an icon.

### Signature Components
- **Colour-inversion buttons** — the only interaction feedback.
- **Fluid uppercase headings** — vw-clamped Brown 700.
- **Vertical-label category tiles** — rotated uppercase headings on full-height colour photographs.
- **Shade finder** — a custom shade-matching flow built by the agency Third and Grove (see Architecture).

### Motion
- Buttons transition `background-color, color, border-color, opacity` over `var(--button-transition-duration, .15s)` with `ease-in-out`.
- Tailwind easing tokens in the theme: `--ease-out cubic-bezier(0,0,.2,1)`, `--ease-in-out cubic-bezier(.4,0,.2,1)`, `--animate-pulse pulse 2s cubic-bezier(.4,0,.6,1) infinite` (loading skeletons).
- Carousels advance with arrow buttons (top-right of the product rail) and dot navigation; no autoplay is required by the design.

### Voice & Microcopy
- Short uppercase imperatives on buttons: "SHOP HOLIDAY", "QUICK SHOP", "START SAVING", "PEEP THE GUIDE", "FIND YOUR SHADE".
- Headlines are punchy and conversational: "BETTER THAN WINDOW SHOPPING", "SPOTTED ON YOUR SOCIALS", "DOWN FOR MORE? WE GOT YOU!".
- Supporting copy in sentence case at 14px: "The viral faves you crave are all here."

### Measurement Notes
- The homepage `h1` is the FENTY BEAUTY wordmark rendered with the `.h1` class (71.1112px at 1280px); its visible form is the logo, so the visible hero headline is the `.h3` display size.
- The extracted body-text sample on the homepage is the 12px/300 newsletter consent paragraph; everyday product copy is 14px/400.
- Values were measured on the Thailand storefront; prices show THB.

## Design System Architecture

Fenty Beauty does **not** publish a public design-system site, Storybook, token package or Figma kit. Searches for an official system, GitHub/npm packages and brand guidelines found only third-party scraped "DESIGN.md" aggregators (ignored) and an unrelated "FB Brands" library ([designsystem.fbbrands.com](https://designsystem.fbbrands.com/) belongs to FullBeauty Brands, not Fenty). The architecture below is read from Fenty's own shipped theme and from its agency's case study.

- **Origin**: Fenty Beauty, Fenty Skin and Fenty Perfume were re-platformed to Shopify by Third and Grove with "a modular design system" "capable of supporting several distinct brand experiences while maintaining a unified cart and checkout system", plus a custom shade finder ([Third and Grove case study](https://www.thirdandgrove.com/work/fenty/)).
- **Platform**: the homepage declares `Shopify.theme = {"schema_name":"Fenty Theme","schema_version":"1.8.0"}`; styles ship as a hashed Vite bundle `//fentybeauty.com/cdn/shop/t/2755/assets/index.wCTYExvU.min.css` compiled with **Tailwind CSS v4.1.8** (banner in the file), alongside `vendor.*.min.css`.
- **Token architecture** (CSS custom properties on `:root`):
  - *Primitive*: `--color-black`, `--color-white`, `--color-grey-100 … --color-grey-600`, `--color-orange`, `--color-blue #3b52e8`, `--color-yellow`, `--color-green`, plus Tailwind's own `--color-gray-*` in oklch.
  - *Semantic*: `--color-foreground`, `--color-foreground-secondary`, `--color-foreground-inverse`, `--color-background`, `--color-background-secondary`, `--color-background-inverse`, `--color-border-01`, `--color-border-02`, `--color-accent-01 … 04`, `--color-danger`, `--color-success`, `--color-warning`, `--color-focus`, `--color-disabled`, `--color-link`, `--color-overlay`.
  - *Component*: a full button matrix — `--button-{primary|secondary|tertiary}[-inverse]-{bg|color|border|hover-bg|hover-color|disabled-bg|disabled-color|focus-color}`, plus `--button-height 40px`, `--button-padding-block 15px`, `--button-padding-inline 20px`, `--button-border-radius 0`, `--button-focus-width 2px`, `--button-focus-offset 2px`.
  - Type: `--font-family-primary "Brown"`, `--font-weight-light 300 … --font-weight-bold 700`, `--tracking-wider .05em`, `--tracking-widest .1em`, `--text-sm .875rem`, `--text-base 1rem`, `--text-2xl 1.5rem`.
- **Naming convention**: kebab-case CSS variables with `-inverse` suffixes for on-dark variants and numeric steps for neutrals; component classes `.btn`, `.btn-primary`, `.btn-tertiary` with a `variant=` attribute (`.btn[variant=primary]`), type classes `.h1`–`.h6`, `.body-2`, `.body-3`, `.text-body`, `.text-body-2`, `.text-body-3`; Tailwind utilities for layout.
- **Theming**: one light theme. Dark sections are handled per component through the `-inverse` token family (e.g. `--button-secondary-inverse-color #fff`, `--color-border-01-inverse #717171`) rather than a global dark mode. The agency describes the system as supporting "several distinct brand experiences" (Fenty Beauty, Fenty Skin, Fenty Perfume); how those brand themes are switched is not visible on this storefront.
- **Type & spacing system**: 4px Tailwind spacing unit; fluid heading clamps in vw with px floors/ceilings; body sizes fixed at 12/14/16px with line-heights 1.33/1.29/1.38.
- **Component model**: buttons (primary, secondary, tertiary × default/inverse × hover/focus/disabled), product cards with quick shop, carousels with nav dots (`[data-nav-dots-wrapper]`), promo bar, header with mega-menu, newsletter, shade finder, compare-foundations module.
- **Accessibility**: a "Skip to content" link is the first element; buttons get a 2px `#4b3dc4` focus outline with 2px offset on `:focus-visible`; carousel dots get a 2px ring on focus. Buttons are 40px tall on desktop and mobile. No published contrast policy.
- **Delivery**: compiled theme assets on the Shopify CDN only; no npm package, no public versioning beyond Shopify's theme `schema_version`. Typeface licensed from Lineto ([lineto.com/typefaces/brown](https://lineto.com/typefaces/brown)).

## Do's and Don'ts

### Do
- Set every heading in Brown 700 uppercase with +0.01em tracking, using the fluid sizes above.
- Use `#2d2929` for text and `#000000` for buttons.
- Keep buttons square, 40px tall, 15px 20px padding, 12px/700 uppercase, 0.3px tracking.
- Invert colours on hover (black ⇄ white) with a 0.15s ease-in-out transition.
- Let campaign colour come from full-bleed photography and colour panels.
- Show sale prices with the original struck through in `#bd0100`.
- Use `#4b3dc4` 2px focus outlines with 2px offset.

### Don't
- Don't round buttons, cards or panels.
- Don't add drop shadows to cards or buttons.
- Don't use a second typeface.
- Don't colour UI chrome with campaign hues (`#cc2d75` is a seasonal panel, not a button colour).
- Don't use light weights for headings; 300 is for legal copy only.
- Don't set headings in sentence case at display sizes.

## Responsive Behavior

### Breakpoints
| Name | Width | Key changes |
|---|---|---|
| Mobile | < 640px (`40rem`) | header 60px; h1 floor 38px; `.h5` 18px |
| Tablet | 768px (`48rem`) | two-column modules |
| Laptop | 1024px (`64rem`) | full category nav row |
| Desktop | 1280px (`80rem`) | headings reach the 1280 values above |
| Wide | 1536px (`96rem`) | clamps hit their ceilings (h1 80px, h3 48px, h4 32px, h5 24px) |

### Touch Targets
- Buttons stay 40px tall at 390px (measured).
- Newsletter input 46px tall.

### Collapsing Strategy
- Mobile header layout was not measured.
- Mobile hero split layout was not measured.
- Product carousels become swipe rows.

### Image Behavior
Full-bleed campaign images crop responsively; product images stay square.

## Iteration Guide

1. White canvas, `#2d2929` ink, Brown 14px/400 body.
2. Add the two promo strips (`#3c3f42`, then black) and the 119px header with centred spaced wordmark.
3. Build headings with the vw clamps; check 71.1112 / 42.6666 / 28.4444 / 21.3334px at 1280px.
4. Build buttons from the `--button-*` tokens: 40px, 15px 20px, 0 radius, inversion hover, 2px `#4b3dc4` focus.
5. Product cards: square images, stacked uppercase badges, 14px names, red struck prices.
6. Fill campaign bands with full-bleed photography or a single campaign colour.
7. Footer newsletter: white 12px/300 copy and inputs on a dark surface (`--color-background-inverse` is `#2b2727`).

### Prompting Checklist
- "Brown 700 uppercase headings, +0.01em tracking; Brown 400 body."
- "Black square 40px buttons, 12px/700 uppercase, hover inverts to white."
- "Ink #2d2929, secondary text #666666, borders #d8d8d8."
- "Sale prices #bd0100 struck through."
- "No radius, no shadow; colour only from imagery."
