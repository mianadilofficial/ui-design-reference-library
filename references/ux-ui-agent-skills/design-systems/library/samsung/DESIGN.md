---
version: alpha
name: Samsung
category: "Consumer Electronics"
description: "Samsung US storefront (samsung.com/us): white #ffffff pages with #f7f7f7 product stages, black #000000 text and black pill CTAs (17.7778px radius, 36px tall at 1280px) that invert to white on hover, blue #006bea for hover and savings, SamsungSharpSans 700 for display headlines (49.7778px / 35.5556px) over SamsungOne 400/700 for UI and body, 7.11111px tile radius, and a type/spacing scale that is fixed at 1440px and scales down proportionally below it."

colors:
  primary: "#000000"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  surface: "#f7f7f7"
  surface-support: "#f9f9f9"
  surface-support-blue: "#f5f7fe"
  ink: "#000000"
  ink-muted: "#717171"
  ink-secondary: "#555555"
  accent-blue: "#006bea"
  action-blue: "#2189ff"
  action-blue-hover: "#006ff2"
  on-action-blue-hover: "#eeeeee"
  carousel-blue: "#007aff"
  promo-teal: "#007d89"
  hairline: "#dddddd"
  chip-hover: "#eeeeee"
  border-subtle: "#00000033"
  samsung-blue: "#1428a0"

typography:
  display:
    fontFamily: "SamsungSharpSans, arial, sans-serif"
    fontSize: 49.7778px
    fontWeight: 700
    lineHeight: 59.7333px
  h1:
    fontFamily: "SamsungSharpSans, arial, sans-serif"
    fontSize: 35.5556px
    fontWeight: 700
    lineHeight: 40.8889px
  h1-mobile:
    fontFamily: "SamsungSharpSans, arial, sans-serif"
    fontSize: 26px
    fontWeight: 700
  section-heading:
    fontFamily: "SamsungSharpSans, arial, sans-serif"
    fontSize: 35.5556px
    fontWeight: 700
    lineHeight: 47.2889px
  section-heading-light:
    fontFamily: "SamsungSharpSans, arial, sans-serif"
    fontSize: 35.5556px
    fontWeight: 400
    lineHeight: 47.2889px
  support-heading:
    fontFamily: "\"Samsung SS Head Bold\", SamsungSharpSans, arial"
    fontSize: 46.2222px
    fontWeight: 700
    lineHeight: 53.1556px
  hero-subhead:
    fontFamily: "SamsungOne, arial, sans-serif"
    fontSize: 28.4444px
    fontWeight: 400
    lineHeight: 34.1333px
  feature-desc:
    fontFamily: "SamsungOne, arial, sans-serif"
    fontSize: 21.3333px
    fontWeight: 400
    lineHeight: 28.3733px
  card-title:
    fontFamily: "SamsungSharpSans, arial, sans-serif"
    fontSize: 21.3333px
    fontWeight: 700
    lineHeight: 28.3733px
  product-name:
    fontFamily: "SamsungOne, arial, sans-serif"
    fontSize: 19.5556px
    fontWeight: 700
    lineHeight: 26.0089px
  price:
    fontFamily: "SamsungOne, arial, sans-serif"
    fontSize: 17.7778px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: "SamsungOne, arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
  footer-heading:
    fontFamily: "SamsungOne, arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 21.28px
  nav-link:
    fontFamily: "SamsungOne, arial, sans-serif"
    fontSize: 14.2222px
    fontWeight: 700
    lineHeight: 18.9156px
  price-meta:
    fontFamily: "SamsungOne, arial, sans-serif"
    fontSize: 14.2222px
    fontWeight: 400
    lineHeight: 19.2px
  button:
    fontFamily: "SamsungOne, arial, sans-serif"
    fontSize: 12.4444px
    fontWeight: 700
    lineHeight: 16.8889px
  button-regular:
    fontFamily: "SamsungOne, arial, sans-serif"
    fontSize: 12.4444px
    fontWeight: 400
    lineHeight: 16.8889px
  small:
    fontFamily: "SamsungOne, arial, sans-serif"
    fontSize: 12.4444px
    fontWeight: 400
    lineHeight: 16.5511px
  utility-link:
    fontFamily: "SamsungOne, arial, sans-serif"
    fontSize: 12.4444px
    fontWeight: 700
    lineHeight: 16.5511px
  legal:
    fontFamily: "SamsungOne, arial, sans-serif"
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 14.1867px
  badge:
    fontFamily: "SamsungOne, arial, sans-serif"
    fontSize: 10.6667px
    fontWeight: 700
    lineHeight: 14.1867px
    textTransform: uppercase

rounded:
  none: 0px
  tile: 7.11111px
  card-support: 16px
  cta: 17.7778px
  panel-support: 21.3333px
  circle: 50%
  pill: 9999px

spacing:
  hair: 1.77778px
  xxs: 3.55556px
  xs: 5.33333px
  sm: 7.11111px
  base: 8px
  md: 10.6667px
  lg: 14.2222px
  cta-x: 20.4444px
  gutter: 21.3333px
  xl: 28.4444px
  section: 53.3333px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    border: 1px solid transparent
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 8px 20.4444px 8.88889px
    height: 36px
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.ink}"
  button-secondary:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    border: "1px solid {colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 8px 20.4444px 8.88889px
    height: 36px
  button-text:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 8.88889px 0px 9.77778px
    height: 36px
  button-blue:
    backgroundColor: "{colors.action-blue}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 8.88889px 21.3333px 9.77778px
    height: 36px
  button-blue-hover:
    backgroundColor: "{colors.action-blue-hover}"
    textColor: "{colors.on-action-blue-hover}"
  location-select:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    border: "1px solid {colors.hairline}"
    typography: "{typography.small}"
    rounded: "{rounded.cta}"
    height: 36px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    height: 94px
  nav-link-hover:
    textColor: "{colors.accent-blue}"
  utility-link:
    textColor: "{colors.ink}"
    typography: "{typography.utility-link}"
    padding: 3.55556px 8.88889px
  filter-chip:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    border: "1px solid {colors.hairline}"
    rounded: "{rounded.tile}"
    height: 36px
  filter-chip-hover:
    backgroundColor: "{colors.chip-hover}"
    opacity: 0.7
  product-tile:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
    rounded: "{rounded.tile}"
    size: 277px
  feature-card:
    backgroundColor: "{colors.surface}"
    rounded: "{rounded.cta}"
    padding: 20.4444px
  support-card:
    backgroundColor: "{colors.surface-support}"
    rounded: "{rounded.card-support}"
  carousel-arrow:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.carousel-blue}"
    border: "1px solid {colors.border-subtle}"
    rounded: "{rounded.circle}"
    size: 36px
  carousel-arrow-hover:
    opacity: 0.6
  price-block:
    textColor: "{colors.ink}"
    typography: "{typography.price}"
  price-save:
    textColor: "{colors.accent-blue}"
    typography: "{typography.price-meta}"
    fontWeight: 700
  price-original:
    textColor: "{colors.ink-muted}"
    typography: "{typography.price-meta}"
  badge-new:
    textColor: "{colors.accent-blue}"
    typography: "{typography.badge}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.footer-heading}"
  footer-link:
    textColor: "{colors.ink}"
    typography: "{typography.small}"
    padding: 6.22222px 21.3333px
  legal-text:
    textColor: "{colors.ink}"
    typography: "{typography.legal}"
---

# Samsung (samsung.com/us)

## Overview

Samsung's US storefront is a quiet, product-first retail page. Almost everything is black on white: the
page is `#ffffff`, the hero and the product tiles sit on a very light grey `#f7f7f7` stage, and the product
renders (phones, tablets, watches, laptops, a framed TV) carry nearly all of the color. The brand's own
blue — Samsung Blue `#1428a0`, the wordmark color on Samsung's brand-identity page — is not used for the
interface on this page; the wordmark in the header is rendered black.

The capture (1280px wide) reads top to bottom as:

1. A thin location bar: "Choose your location and language." + an outlined `USA` select + a black
   `Continue` pill + a close (×) button.
2. A small right-aligned utility row (`Find a Store`, `Support`, `For Business ↗`).
3. The global navigation: the black SAMSUNG wordmark at left, seven bold category links (`Shop`, `Mobile`,
   `TV & AV`, `Appliances`, `Computers & Monitors`, `Wearables`, `Accessories`) and three line icons
   (search, cart, account) at right.
4. A full-width hero on `#f7f7f7`: a large tablet render bleeding off the right edge, a title lockup
   ("Galaxy Tab S12 Ultra" with a "Galaxy AI [U+2728]" sub-lockup) at left, a light 28.4444px subhead
   ("Power what you love"), and a pair of actions — an underlined text link `Learn more` and an
   outlined pill `Buy`. A small circled play/pause control sits at bottom-left.
5. A white feature band: a lifestyle photo of hands holding foldables at left, and at right a gradient
   blue "Available now" eyebrow, a headline set with thin vertical dividers
   ("Galaxy Z Fold8 Ultra | Fold8 | Flip8"), a 21.3333px description and the same `Learn more` + `Buy` pair.
6. A row of four square product tiles (`#f7f7f7`, 7.11111px radius) with a SamsungSharpSans 700 title
   centered above a product cut-out.
7. Further feature bands ("The Frame" at 49.7778px), a "Recommended for you" product carousel with
   prices, an "Explore the Stories" carousel, and a large white footer.

The voice is short and declarative: product names as headlines, two- to four-word subheads
("Power what you love", "Unlock exclusive benefits"), verbs on buttons (`Buy`, `Learn more`, `Continue`).
Each button's accessible text carries a hidden suffix naming the product ("Buy - galaxy tab s12 ultra").

Density is low. Headlines are left-aligned in the hero and centered in feature bands; tiles are equal
squares separated by narrow white gutters. There is no visible decoration: no shadows on cards, no
borders on tiles, no gradients in the UI chrome (the "Available now" gradient and the "Galaxy AI" sparkle
are part of product artwork).

## Colors

Every hex below was measured on the live pages (homepage, `/us/smartphones/all-smartphones/`,
`/us/support/`) or is cited in `SOURCES.json`.

### Core

| Token | Hex | Where it is measured |
|---|---|---|
| `primary` | `#000000` | Fill of the contained CTA pills (`cta--contained cta--black`: `Continue`, `Buy`) |
| `on-primary` | `#ffffff` | Text on the black pills |
| `canvas` | `#ffffff` | Body background; the largest-area background on the homepage |
| `surface` | `#f7f7f7` | Hero stage, product tiles, smartphone feature cards (second-largest area) |
| `ink` | `#000000` | Most-read text color (3322 weighted chars on the homepage) |
| `ink-muted` | `#717171` | Original (struck) price in the recommended carousel |
| `ink-secondary` | `#555555` | Frequent text grey in the site CSS (136 declarations) |

### Accents

| Token | Hex | Where it is measured |
|---|---|---|
| `accent-blue` | `#006bea` | Hover color of nav links and the `Support` utility button; "NEW" badge; "Save $400.00" |
| `action-blue` | `#2189ff` | Blue `Sign in` pill on the support page; 92 declarations in the site CSS |
| `action-blue-hover` | `#006ff2` | Hover fill of the blue pill |
| `on-action-blue-hover` | `#eeeeee` | Hover text color of the blue pill |
| `carousel-blue` | `#007aff` | Carousel arrow glyphs; also the `--swiper-theme-color` root variable |
| `promo-teal` | `#007d89` | Promotional text on the smartphones listing |
| `samsung-blue` | `#1428a0` | Samsung Blue (PMS 286C) — official wordmark color; present in the CSS corpus |

### Lines and states

| Token | Hex | Use |
|---|---|---|
| `hairline` | `#dddddd` | 1px border of the location select and of filter chips |
| `chip-hover` | `#eeeeee` | Filter chip hover fill (measured `#eeeeee` / `#efefef` during the transition) |
| `border-subtle` | `#00000033` | Border of the round carousel arrows |

### Support-page surfaces

`surface-support` `#f9f9f9` (16px-radius cards) and `surface-support-blue` `#f5f7fe` (21.3333px panels)
appear only on `/us/support/`, which is a lighter, pastel-tinted variant of the storefront.

### How color is used

- The interface is monochrome. Black is the action color; there is no colored primary button on the
  storefront pages measured.
- Blue appears only as feedback: hover on links, the "NEW" badge, the savings line. The one
  blue-filled button measured is on the support page.
- Product imagery supplies the palette; the `#f7f7f7` stage exists so white and silver products still
  separate from the page.
- The accessibility toolbar link "Open Accessible Main Menu" renders in `#0077c7` arial — that is an
  AudioEye overlay (its font is `Lato-AudioEye`), not part of the Samsung palette.

## Typography

Two proprietary Samsung families are served as web fonts:

- **SamsungSharpSans** (`SamsungSharpSans 400/700`, plus `SamsungSharpSansMedium 500` and
  `SamsungSharpSansBold` faces) — display headlines, section headings, product-tile titles. Samsung's
  brand-identity page names Samsung Sharp Sans as the brand typeface, shown in Bold and Medium.
- **SamsungOne** (`SamsungOne 400/700`) — everything else: navigation, body, prices, buttons, footer,
  legal. Samsung Developers describes SamsungOne as the font that "provides a consistent voice to our
  wide range of products", covering more than 400 languages.

Both stacks fall back to `arial, sans-serif` — the site's own font-family declarations.

### Scale (measured at 1280px)

| Token | Family | Size | Weight | Line height | Example |
|---|---|---|---|---|---|
| `display` | SamsungSharpSans | 49.7778px | 700 | 59.7333px | "The Frame" |
| `support-heading` | Samsung SS Head Bold | 46.2222px | 700 | 53.1556px | "Welcome to Samsung Support" |
| `h1` | SamsungSharpSans | 35.5556px | 700 | 40.8889px | "Explore Galaxy Smartphones" |
| `section-heading` | SamsungSharpSans | 35.5556px | 700 | 47.2889px | "Recommended for you" |
| `section-heading-light` | SamsungSharpSans | 35.5556px | 400 | 47.2889px | "Explore the Stories" |
| `hero-subhead` | SamsungOne | 28.4444px | 400 | 34.1333px | "Power what you love" |
| `h1-mobile` | SamsungSharpSans | 26px | 700 | — | category h1 at 390px |
| `feature-desc` | SamsungOne | 21.3333px | 400 | 28.3733px | "Unlock exclusive benefits" |
| `card-title` | SamsungSharpSans | 21.3333px | 700 | 28.3733px | "Galaxy S26 Ultra" tile |
| `product-name` | SamsungOne | 19.5556px | 700 | 26.0089px | carousel product name |
| `price` | SamsungOne | 17.7778px | 700 | 24px | "$1,399.99" |
| `body` | SamsungOne | 16px | 400 | 18.4px | document base |
| `footer-heading` | SamsungOne | 16px | 700 | 21.28px | "SHOP" |
| `nav-link` | SamsungOne | 14.2222px | 700 | 18.9156px | "Shop", "Mobile" |
| `price-meta` | SamsungOne | 14.2222px | 400 | 19.2px | "$1,999.99" original |
| `button` | SamsungOne | 12.4444px | 700 | 16.8889px | `Buy`, `Learn more` |
| `button-regular` | SamsungOne | 12.4444px | 400 | 16.8889px | `Continue` (location bar) |
| `small` | SamsungOne | 12.4444px | 400 | 16.5511px | footer links, location label |
| `utility-link` | SamsungOne | 12.4444px | 700 | 16.5511px | "Find a Store" |
| `legal` | SamsungOne | 10.6667px | 400 | 14.1867px | disclaimers |
| `badge` | SamsungOne | 10.6667px | 700 | 14.1867px | "NEW" (uppercase) |

The most-read sizes on the homepage are 12.4444px (1231 weighted chars) and 10.6667px (1086) —
the page is dominated by small UI text and disclaimers, while the headlines are few and large.
Letter-spacing is `normal` on every Samsung text style measured. Only two weights are used across the
measured text: 400 and 700.

The hero title on the homepage ("Galaxy Tab S12 Ultra" + "Galaxy AI") has no text node — it is
delivered as artwork inside `hd08-hero-kv-home__headline`; the visually hidden page `h1` reads "Samsung".

### Note on Font Substitutes

SamsungOne and Samsung Sharp Sans are Samsung's own typefaces, served from Samsung's servers for its
sites; no public download or license was found in the sources opened. The site's own fallback is
`arial, sans-serif`, and that is the substitute this file uses. When rebuilding outside Samsung:

- keep the split — a geometric display face at 700 for headlines, a humanist sans at 400/700 for UI;
- keep the exact sizes above; the shape of the page depends more on size contrast (49.7778px vs
  12.4444px) than on the specific face;
- do not add letter-spacing or weights other than 400 and 700.

## Layout

- Desktop capture width is 1280px; sections are full-bleed (hero and tiles run edge to edge).
- Horizontal gutter: 21.3333px (the most common padding, 87 occurrences) — used on section headings,
  footer columns and footer links.
- The global header (nav element) is 94px tall: a utility strip above a wordmark + nav row.
- Hero: one band, image right and bleeding, copy column left; the action pair sits below the
  subhead with `Learn more` first and `Buy` second.
- Feature band: image left (edge-aligned), copy centered in the right half.
- Product tiles: four equal 277 × 277px squares, separated by narrow white gaps.
- Recurring gaps: 5.33333px (20×), 3.55556px (10×), 14.2222px, 53.3333px (section-level).

### Spacing scale

| Token | Value |
|---|---|
| `hair` | 1.77778px |
| `xxs` | 3.55556px |
| `xs` | 5.33333px |
| `sm` | 7.11111px |
| `base` | 8px |
| `md` | 10.6667px |
| `lg` | 14.2222px |
| `cta-x` | 20.4444px |
| `gutter` | 21.3333px |
| `xl` | 28.4444px |
| `section` | 53.3333px |

At 1280px every one of these equals a whole number × 0.888889 (= 1280 / 1440): 2, 4, 6, 8, 12, 16,
23, 24, 32, 60. The 8px value is the exception that does not scale.

## Elevation & Depth

The storefront is flat. No card, tile or button on the homepage carries a box-shadow. Depth comes from:

- the `#f7f7f7` stage against `#ffffff`;
- product renders with their own soft cast shadows (part of the photography);
- overlap: the hero product image bleeds out of the frame.

Shadows exist in the CSS corpus (e.g. `0 4px 10px 0 rgba(0,0,0,.2)`, `0 0 0 2px #fff`), and one
`rgba(64, 135, 241, 0.3) 0px 2px 8px 0px` shadow was measured on the homepage, but none applies to the
main storefront components measured here. Do not add shadows to tiles or buttons.

## Shapes

| Token | Value | Applied to |
|---|---|---|
| `none` | 0px | text links, nav, footer, hero and feature bands |
| `tile` | 7.11111px | homepage product tiles; filter chips |
| `card-support` | 16px | support-page cards |
| `cta` | 17.7778px | every CTA pill (contained, outlined, blue), the location select, smartphone feature cards |
| `panel-support` | 21.3333px | support-page panels |
| `circle` | 50% | carousel arrows, color swatches |
| `pill` | 9999px | stands in for the `1000px` radius found on the homepage |

The CTA radius (17.7778px) is just under half the 36px button height, so the pills read as fully
rounded ends. At 1440px and wider the same radius is 20px.

No skewed, notched or clipped shapes are used; edges are straight or rounded.

## Components

### Primary button (contained, black)

- Class: `cta cta--contained cta--black`.
- `#000000` fill, `#ffffff` text, 1px transparent border, radius 17.7778px.
- Padding `8px 20.4444px 8.88889px`, height 36px.
- Text: SamsungOne 12.4444px 700 / 16.8889px (`Buy` on listings); the location bar's `Continue` uses
  weight 400.
- Hover (measured): full inversion — background `#ffffff`, text `#000000`, border `#000000`.

### Secondary button (outlined)

- Class: `cta cta--outlined cta--black` — the hero `Buy`.
- Transparent fill, `#000000` text, `1px solid #000000`, radius 17.7778px.
- Padding `8px 20.4444px 8.88889px`, height 36px, SamsungOne 12.4444px 700.
- Hover state was not measured; do not invent one.

### Text button

- Class: `cta cta--underline-v2 cta--black` — `Learn more`.
- `#000000` SamsungOne 12.4444px 700 / 16.8889px, padding `8.88889px 0px 9.77778px`, height 36px.
- Underlined in the capture, so it lines up on the same 36px row as the pill beside it.

### Blue button (support page)

- `#2189ff` fill, `#ffffff` text, radius 17.7778px, padding `8.88889px 21.3333px 9.77778px`, 36px.
- Hover: `#006ff2` fill, `#eeeeee` text.
- The same page also uses a black contained pill (`Get support`).

### Location select

- Outlined field `USA`: transparent, `1px solid #dddddd`, radius 17.7778px, 36px tall, with a chevron.
- Label "Choose your location and language." in SamsungOne 12.4444px 400 / 16.5511px.

### Global navigation

- White, 94px tall; wordmark left, bold category links, line icons right.
- Category links: SamsungOne 14.2222px 700 / 18.9156px `#000000`; hover `#006bea` (text and
  underline border color both change).
- Utility links ("Find a Store", "Support", "For Business"): 12.4444px 700, padding `3.55556px 8.88889px`;
  hover `#006bea`.

### Filter chips (smartphones listing)

- `#ffffff` fill, `1px solid #dddddd`, radius 7.11111px, 36px tall, black text.
- Hover: fill `#eeeeee` (measured `#eeeeee`/`#efefef`), opacity 0.7.

### Product tile (homepage)

- 277 × 277px, `#f7f7f7`, radius 7.11111px, no border or shadow.
- Title: SamsungSharpSans 21.3333px 700 / 28.3733px, centered above a cut-out product image.

### Feature card (smartphones listing)

- `#f7f7f7`, radius 17.7778px, padding 20.4444px.

### Carousel arrows

- 36px circles (50%), `#ffffff` fill, border `#00000033`, glyph `#007aff`.
- Hover: opacity 0.6.

### Price block (recommended carousel)

- Product name SamsungOne 19.5556px 700 / 26.0089px.
- Price SamsungOne 17.7778px 700 / 24px `#000000`.
- Savings "Save $400.00" SamsungOne 14.2222px 700 `#006bea`.
- Original price SamsungOne 14.2222px 400 / 19.2px `#717171`.

### Badge

- "NEW": SamsungOne 10.6667px 700, uppercase, `#006bea`, no fill.

### Footer

- White background; column titles ("SHOP") SamsungOne 16px 700 / 21.28px with padding
  `14.2222px 21.3333px`.
- Links SamsungOne 12.4444px 400 / 16.5511px, padding `6.22222px 21.3333px`.
- Legal row and "USA/ENGLISH" language anchor at 10.6667px.

### Not declared

No text input, tabs, modal or table is declared: the storefront pages measured do not show a styled
text field (the support search field's inner input — 16px `#212121` — was measured without its
container styling), and Samsung publishes no web component documentation to cite.

## Design System Architecture

**Samsung publishes no public design system for its samsung.com web storefront.** Searches for one
(listed in `SOURCES.json`) found only:

- the brand-identity pages on samsung.com
  ([logo](https://www.samsung.com/bg/about-us/brand-identity/logo),
  [color & typography](https://www.samsung.com/bd/about-us/brand-identity/color-and-typo/)), which
  define Samsung Blue (`#1428A0`, PMS 286C), black, white, and Samsung Sharp Sans (Bold, Medium);
- the [Samsung Developers font page](https://developer.samsung.com/design-system/font), which describes
  SamsungOne (400+ languages, built from 26 writing systems and 25,000 glyphs) but gives no web tokens;
- [One UI](https://developer.samsung.com/one-ui/overview.html), Samsung's device UI guidelines (phone,
  tablet, watch, PC) with principles — "Focus on the task at hand", "Interact naturally",
  "Be visibly comfortable", "Make things responsive" — and component guidance for App bar, Bottom bar,
  Bottom navigation, Buttons, Dialog, Lists, Search and Toasts. It is not the web storefront's system.

What follows is the de-facto system measurable on the site.

### Token architecture

- There is no CSS custom-property layer for the storefront. The homepage exposes exactly two root
  variables, both from the carousel library: `--swiper-theme-color: #007aff` and
  `--swiper-navigation-size: 44px`.
- The support page adds `--yxt-*` variables (e.g. `--yxt-nav-dropdown-hover-background-color: #eeeff0`)
  that belong to its embedded search widget, not to the storefront.
- Values are hard-coded per component in the stylesheets; the most frequent colors in the CSS are
  `#ffffff` (663), `#000000` (557), `#dddddd` (203), `#555555` (136), `#2189ff` (92), `#f7f7f7` (86).

### Naming convention

Components are BEM-style blocks prefixed with a module code, visible in the DOM:

- `nv00-gnb-v4__l0-menu-link`, `nv00-gnb-v4__l0-menu-text` — global navigation;
- `hd08-hero-kv-home__headline`, `hd08-hero-kv-home__desc-text` — homepage hero;
- `co73-feature-cards__headline`, `co76-feature-kv__headline`, `co76-feature-kv__desc` — feature modules;
- `co78-recommended-product-carousel__name`, `co75-explore-carousel__headline` — carousels;
- `footer-category__title`, `footer-category__link`, `footer-terms__link` — footer.

Buttons share one `cta` block with modifiers for variant and color: `cta--contained`, `cta--outlined`,
`cta--underline-v2`, combined with `cta--black`.

### Theming

No dark mode or theme switch was observed on the pages measured. Color variants are expressed as
modifier classes (`cta--black`) rather than variables.

### Type & spacing system

- Two families: SamsungSharpSans (display) and SamsungOne (UI/body), weights 400 and 700.
- Measured at several widths: at 1440px and 1920px the CTA text is 14px, radius 20px, padding
  `9px 23px 10px`, and the feature headline 56px. At 1280px the same elements are 12.4444px, 17.7778px,
  `8px 20.4444px 8.88889px` and 49.7778px — every value × 1280/1440. At 390px they are 13px,
  21.6667px and 34.6667px. The root font size stays 16px throughout, so the scaling is not rem-based.
- So the design values are whole pixels at 1440px (14, 20, 22, 24, 32, 40, 56 …) and are scaled
  proportionally below that width.

### Component inventory (observed)

Location bar, global nav (L0 menu, utility links, icon buttons), hero key visual, feature key visual,
feature cards, recommended-product carousel, explore carousel, product listing with filter chips,
CTA (contained / outlined / underline), price block, badge, footer with category columns, social and
language rows. Only these are documented here.

### Accessibility

- Every CTA carries a visually hidden product suffix ("Buy - galaxy tab s12 ultra").
- A visually hidden page `h1` ("Samsung") and `h2` ("global navigation bar") label the structure.
- A third-party AudioEye toolbar ("Open Accessible Main Menu") is injected at the top of the nav.
- No published contrast target or touch-target rule for the web storefront was found. One UI lists
  accessibility sections (screen reader, focus order, color and contrast, layout/typography,
  interaction/control, content) for devices.

### Delivery

No npm package, Figma kit or public repository for the storefront's components was found. Fonts are
self-hosted `@font-face` files (`SamsungOne`, `SamsungOneLatinWeb`, `SamsungSharpSans`,
`SamsungSharpSansMedium`, `SamsungSharpSansBold`).

## Do's and Don'ts

### Do

- Use black `#000000` pills for the main action and invert them on hover (white fill, black text,
  black border).
- Pair an underlined text button (`Learn more`) with an outlined pill (`Buy`) on hero and feature bands.
- Put product renders on `#f7f7f7` stages and let them carry the color.
- Set headlines in SamsungSharpSans 700 and everything else in SamsungOne 400/700.
- Keep letter-spacing `normal` and use only weights 400 and 700.
- Use `#006bea` for hover feedback, savings and "NEW" labels.
- Keep tiles at 7.11111px radius and CTAs at 17.7778px (at 1280px).
- Scale the whole system proportionally below 1440px.

### Don't

- Don't use Samsung Blue `#1428a0` as a button or link color — the storefront doesn't.
- Don't add shadows, borders or gradients to tiles, cards or buttons.
- Don't use colored primary buttons on storefront pages; the blue `#2189ff` pill belongs to support.
- Don't set long body copy in SamsungSharpSans.
- Don't tighten or track headlines; letter-spacing is `normal`.
- Don't round tiles to the CTA radius; tiles use 7.11111px.
- Don't add hover states that were not measured (outlined pill, tiles).

## Responsive Behavior

Measured behaviour:

- **≥ 1440px**: values are at their design size (CTA 14px text, 20px radius, `9px 23px 10px` padding; feature
  headline 56px). They stop growing — 1920px gives the same values as 1440px.
- **1280px** (the capture): everything × 0.888889 — CTA 12.4444px / 17.7778px radius / 36px tall;
  display 49.7778px; h1 35.5556px; body copy 12.4444px; legal 10.6667px.
- **390px (mobile)**: the location bar `Continue` pill is 13px text, 21.6667px radius, 39px tall;
  legal text 10.8333px; the most common sizes are 10.8333px, 13px, 15.1667px, 19.5px, 17.3333px,
  21.6667px, 26px, 34.6667px. The category-page h1 is 26px SamsungSharpSans 700; homepage section
  headings ("Recommended for you") are 26px 700 / 34.58px with `0px 26px` padding.
- The homepage `h1` stays visually hidden on mobile; hero titles remain artwork.

### Breakpoint rules for a rebuild

- Author at 1440px in whole pixels.
- Below 1440px, scale sizes, radii and paddings by `viewport / 1440`.
- At phone widths, scale from a 360px design (390px values are × 1.08333: 12 → 13, 24 → 26, 32 → 34.6667).

## Iteration Guide

1. Start from white `#ffffff` and black `#000000`; add `#f7f7f7` only behind product imagery.
2. Build the header first: 94px, wordmark + seven bold 14.2222px links + three icons; hover `#006bea`.
3. Hero: product image right and bleeding; left column with title, a 28.4444px subhead and the
   `Learn more` + `Buy` pair.
4. Use the `cta` recipe for every action: 36px tall, 17.7778px radius, `8px 20.4444px 8.88889px`,
   SamsungOne 12.4444px 700.
5. Feature bands alternate image side; headlines SamsungSharpSans 49.7778px 700 / 59.7333px.
6. Tile rows: 277px squares, `#f7f7f7`, 7.11111px radius, SamsungSharpSans 21.3333px 700 titles.
7. Carousels: section heading 35.5556px (700 for shopping, 400 for editorial), round 36px arrows
   in `#007aff`.
8. Prices: 17.7778px 700 black; savings 14.2222px 700 `#006bea`; original 14.2222px 400 `#717171`.
9. Footer: white, 16px 700 column titles, 12.4444px links, 21.3333px side padding.
10. Before shipping, check that no shadow, gradient or extra weight crept in, and that every size is a
    1440px whole number scaled to the viewport.
