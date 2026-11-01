---
version: alpha
name: Aesop
category: "Beauty & Personal Care"
description: Aesop (Aēsop) storefront design language measured from aesop.com — a warm cream canvas "#fffef2" with graphite ink "#333333", SuisseIntl grotesque for almost everything (14px body, SuisseIntl-Medium 14px buttons) and Zapf-Humanist 31px for editorial section titles, hard 0px corners on every button, input and tile, 48px-tall solid graphite CTAs that darken to "#252525" on hover, a "#252525" footer, and amber-glass product photography on near-white tiles.

colors:
  primary: "#333333"
  primary-hover: "#252525"
  canvas: "#fffef2"
  ink: "#333333"
  ink-muted: "#666666"
  ink-strong: "#000000"
  on-dark: "#fffef2"
  on-primary: "#fffef2"
  surface-alt: "#f6f5e8"
  footer: "#252525"
  badge: "#945c26"
  hairline: "#33333333"
  chip-border: "#bcbbb4"
  disabled-bg: "#f3f3f3"
  disabled-text: "#999999"
  white: "#ffffff"

typography:
  display:
    fontFamily: "Zapf-Humanist, sans-serif"
    fontSize: 31px
    fontWeight: 400
    lineHeight: 41.23px
  display-mobile:
    fontFamily: "Zapf-Humanist, sans-serif"
    fontSize: 25px
    fontWeight: 400
  display-sm:
    fontFamily: "Zapf-Humanist, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 31.92px
  hero-title:
    fontFamily: "SuisseIntl, sans-serif"
    fontSize: 30px
    fontWeight: 400
    lineHeight: 39.9px
  hero-title-mobile:
    fontFamily: "SuisseIntl, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 31.92px
  page-title:
    fontFamily: "SuisseIntl, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 30px
  tab:
    fontFamily: "SuisseIntl, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 31.2px
  footer-heading:
    fontFamily: "SuisseIntl, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 27px
  lead:
    fontFamily: "SuisseIntl, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  price:
    fontFamily: "SuisseIntl, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
  body:
    fontFamily: "SuisseIntl, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.4px
  body-tile:
    fontFamily: "SuisseIntl, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  product-name:
    fontFamily: "SuisseIntl, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 15.12px
  button:
    fontFamily: "SuisseIntl-Medium, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  footer-link:
    fontFamily: "SuisseIntl, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
  nav:
    fontFamily: "SuisseIntl, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 19.2px
  utility:
    fontFamily: "SuisseIntl, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  breadcrumb:
    fontFamily: "SuisseIntl-Medium, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.8px

rounded:
  none: 0px
  chip: 4px
  circle: "50%"

spacing:
  xxs: 4px
  xs: 8px
  sm: 12px
  md: 16px
  lg: 24px
  xl: 32px
  xxl: 40px
  button-y-top: 13px
  button-y-bottom: 12px
  tab-y: 15px
  tab-x: 35px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 13px 24px 12px
    height: 48px
    border: 1px solid transparent
    transition: background-color 0.25s ease-out, color 0.25s ease-out
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-disabled:
    backgroundColor: "{colors.disabled-bg}"
    textColor: "{colors.disabled-text}"
  button-secondary:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 13px 24px 12px
    height: 48px
    border: "1px solid {colors.hairline}"
  button-secondary-light:
    backgroundColor: transparent
    textColor: "{colors.on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 13px 24px 12px
    height: 48px
    border: "1px solid {colors.on-dark}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.breadcrumb}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.footer}"
    textColor: "{colors.on-dark}"
    typography: "{typography.footer-link}"
  footer-heading:
    textColor: "{colors.on-dark}"
    typography: "{typography.footer-heading}"
    borderBottom: "1px solid {colors.on-dark}"
    padding: 0px 0px 15px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.hairline}"
    padding: 0px 16px
    height: 40px
  select:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.hairline}"
    padding: 0px 30px 0px 20px
    height: 40px
  filter-chip:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.chip}"
    border: "1px solid {colors.chip-border}"
    padding: 4px 8px 4px 4px
    height: 27px
  filter-chip-hover:
    backgroundColor: "{colors.surface-alt}"
    border: "1px solid {colors.footer}"
  filter-chip-selected:
    backgroundColor: "{colors.surface-alt}"
    border: "2px solid {colors.footer}"
    height: 29px
  variant-option:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.hairline}"
    padding: 8px
    height: 54px
  variant-option-hover:
    border: "1px solid {colors.footer}"
  variant-option-selected:
    border: "2px solid {colors.ink-strong}"
  tab:
    backgroundColor: transparent
    textColor: "{colors.ink-muted}"
    typography: "{typography.tab}"
    padding: 15px 35px
    height: 61px
  tab-active:
    textColor: "{colors.ink-strong}"
    borderBottom: "2px solid {colors.ink-strong}"
  product-tile:
    backgroundColor: transparent
    rounded: "{rounded.none}"
    nameTypography: "{typography.product-name}"
    descriptionColor: "{colors.ink-muted}"
    descriptionTypography: "{typography.body-tile}"
    priceTypography: "{typography.price}"
  badge:
    textColor: "{colors.badge}"
    typography: "{typography.utility}"
---

## Overview

Aesop's website is an apothecary counter rendered in pixels. The page opens on a warm, faintly yellow
cream (`#fffef2`) rather than white, and nearly every word is set in SuisseIntl at small sizes in a
soft graphite (`#333333`) instead of black. There is no gradient, no tinted brand color, and no
rounded corner on any primary control: buttons, inputs, selects, variant pickers and product tiles
all measure `0px` radius. The only curves on the page are the circular media controls (`50%`) and the
small `4px` filter chips on category pages.

The capture shows a quiet three-tier header (utility row — "Stores", "Customer service" on the left,
"Email sign up", "Account", "My cart" on the right — the serif Aēsop wordmark centered, and a single
row of category links underneath with a "Search..." field divided off by a vertical rule). Below it a
full-bleed cinematic hero carries a small "Introducing" label, a 30px SuisseIntl title in cream, one
line of 16px copy and a ghost button outlined in cream. The rest of the homepage alternates between
centered editorial sections ("Curated Sets", "A scent—and story—for all") whose titles switch to the
humanist Zapf-Humanist face at 31px, and product carousels of amber-glass bottles photographed on
near-white tiles.

The brand's voice is literary and unhurried: "Each fragrance a fable. Each fable a question.",
"A woody, earthy, smoky duo to cleanse and hydrate the hands". Microcopy is sentence case, never
shouted, never exclamatory. Product badges read like library labels — "Online exclusive",
"New addition", "Beloved formulation", "Daily essential" — set in 12px in a russet brown (`#945c26`).

Density is low and rhythm is generous. Large photographic blocks (hero, 50/50 image-and-text splits)
punctuate long stretches of cream whitespace; product grids run three or four across with wide
gutters; every commerce tile ends in the same full-width graphite button.

**Key characteristics:**
- Cream canvas `#fffef2`, graphite ink `#333333`, muted copy `#666666`, dark footer `#252525`
- SuisseIntl for UI and copy; Zapf-Humanist only for editorial section titles (31px desktop, 25px mobile)
- Weight contrast comes from family switching (SuisseIntl-Medium for buttons) and 700 for product names
- Every button 48px tall with `13px 24px 12px` padding and `0px` radius
- Hover is a value shift, never a lift: `#333333` → `#252525`, `0.25s ease-out`
- No drop shadows on content; depth comes from photography and full-bleed dark bands

## Colors

All values below were measured on aesop.com (homepage, a category page and a product page).

### Brand & Accent
- **Primary / Graphite** (`#333333`): solid CTA fill ("Add to cart", "Change region or country"), body
  ink, the sole "brand color". Aesop has no chromatic accent on the storefront.
- **Primary hover** (`#252525`): measured hover fill of every solid button; also the footer band.
- **Badge russet** (`#945c26`): the only warm hue in UI text — product badges such as "Online exclusive".

### Surface
- **Canvas** (`#fffef2`): page background (body bg and the dominant color of the capture), input and
  select fills, filter-chip fill.
- **Surface alt** (`#f6f5e8`): slightly deeper cream used for the product-detail panel area, the
  "How to use" half of 50/50 blocks, and the hover/selected fill of filter chips.
- **Footer** (`#252525`): full-width footer band and promotional dark bands; text on it is `#fffef2`.
- **White** (`#ffffff`): appears in small areas (media tiles, overlays); not a page surface.

### Text
- **Ink** (`#333333`): all body copy, nav, headings on cream.
- **Ink muted** (`#666666`): product-tile descriptions, inactive tabs, breadcrumb current item,
  results count ("13 products").
- **Ink strong** (`#000000`): active tab label and its 2px underline; selected variant border.
- **On dark** (`#fffef2`): text on the hero imagery and in the footer. The same cream as the canvas —
  inverted sections simply swap ink and canvas.

### Semantic & State
- **Hairline** (`#33333333`, i.e. `#333333` at 20% alpha): 1px border of inputs, selects, secondary
  buttons and variant options.
- **Chip border** (`#bcbbb4`): 1px border of category quick-link chips.
- **Disabled** (`#f3f3f3` fill, `#999999` text): measured on the newsletter "Submit" button before
  the form is valid.

A note on the measurement: on the homepage the most frequent text color by character count is
`#fffef2`, because the footer, the newsletter form and the hero overlays are long cream-on-dark
blocks. On the product page the top text color is `#333333`, and all reading text on the canvas is
`#333333`; that is why `ink` is graphite and the cream is kept as `on-dark`.

## Typography

### Font Family
- **SuisseIntl** (served `@font-face` name `SuisseIntl`, weight 400) — the workhorse for nav, copy,
  prices, tabs, footer. 4614 of ~5650 measured characters on the homepage.
- **SuisseIntl-Medium** (served as its own family name, declared weight 500, rendered with
  `font-weight: 400`) — buttons, the hero label, breadcrumbs.
- **Zapf-Humanist** (served `@font-face` name `Zapf-Humanist`, weight 400, CSS fallback `sans-serif`)
  — editorial section titles only: "Curated Sets", "Browse by category", "Recommended reading",
  "Suggested partners", "Frequently asked questions", and the 24px "how to use" line on product pages.
- **CircularStd** appears once, on the product-page h1 (24px/400, line-height 30px). It covers 33
  characters and looks like a leftover; do not adopt it as a system font.

All measured letter-spacing is `normal`. There is no uppercase styling anywhere in the measured UI.

### Hierarchy

| Token | Family | Size | Weight | Line height | Where |
|---|---|---|---|---|---|
| display | Zapf-Humanist | 31px | 400 | 41.23px | homepage / PDP section titles |
| display-mobile | Zapf-Humanist | 25px | 400 | — | same titles at 390px |
| display-sm | Zapf-Humanist | 24px | 400 | 31.92px | PDP "Dispense into damp hands…" |
| hero-title | SuisseIntl | 30px | 400 | 39.9px | hero h1 "The Fragrant Fables", promo h2 |
| hero-title-mobile | SuisseIntl | 24px | 400 | 31.92px | same at 390px |
| page-title | SuisseIntl | 24px | 400 | 30px | category h1 "Cleansers" |
| tab | SuisseIntl | 24px | 400 | 31.2px | "Fresh / Floral / Woody / Ambery", "Description / Ingredients" |
| footer-heading | SuisseIntl | 18px | 700 | 27px | "Orders and support", "About" |
| lead | SuisseIntl | 16px | 400 | 24px | hero sub-line |
| price | SuisseIntl | 16px | 400 | 19.2px | tile price "$140.00" |
| body | SuisseIntl | 14px | 400 | 22.4px | paragraphs, form copy |
| body-tile | SuisseIntl | 14px | 400 | 21px | tile description (`#666666`) |
| product-name | SuisseIntl | 14px | 700 | 15.12px | tile name "Reverence Duo" |
| button | SuisseIntl-Medium | 14px | 400 | 21px | all `.c-button` |
| footer-link | SuisseIntl | 14px | 400 | 16.8px | footer nav links |
| nav | SuisseIntl | 12px | 400 | 19.2px | category nav, filter chips |
| utility | SuisseIntl | 12px | 400 | 18px | utility row, badges, results count |
| breadcrumb | SuisseIntl-Medium | 12px | 400 | 16.8px | breadcrumb links |

The page also contains a screen-reader-only h1 ("Plant-based and laboratory-made ingredients",
SuisseIntl 36px/400, clipped to 1×1px). It is invisible and is not a display style.

### Principles
- Small is the default. The most-read size is 14px, then 16px and 12px. Big type is rare and never bold.
- Hierarchy is made by **family**, not weight: Zapf-Humanist for editorial titles, SuisseIntl-Medium for
  actions, SuisseIntl 700 only for product names and footer headings.
- Nothing is uppercase, nothing is tracked. Headlines read like book titles in sentence case.
- Copy blocks are centered under centered section titles; product information is centered in tiles.

### Note on Font Substitutes
SuisseIntl is Swiss Typefaces' **Suisse Int'l** (designed by Ian Party, commercial licence —
[swisstypefaces.com](https://www.swisstypefaces.com/fonts/suisse/)). The served name "Zapf-Humanist"
matches Bitstream's **Zapf Humanist 601**, which is Bitstream's name for the Optima design
([CTAN fontname note](https://tex.org.uk/fonts/psfonts/w-a-schmidt/bop.txt)); which exact cut Aesop
licenses is not stated in any source consulted. Both are proprietary. If they cannot be licensed, a
neo-grotesque with similar proportions can stand in for SuisseIntl and an Optima-style flared sans
for Zapf-Humanist — keep the measured sizes and line heights, and keep weights at 400.

## Layout

### Spacing System
Measured paddings and gaps cluster on: `4px`, `8px`, `12px`, `13px`, `15px`, `16px`, `17px`, `20px`,
`23px`, `24px`, `32px`, `35px`, `40px`. Flex/grid gaps are `8px` (dominant) and `10px`. The tokens keep
the round steps (`4 / 8 / 12 / 16 / 24 / 32 / 40px`) plus the component-specific values that recur
exactly: button `13px 24px 12px`, tab `15px 35px`.

### Grid & Container
At a 1280px viewport the content column measures `1170px` wide (section titles and the hero copy
container both report 1170px). Product carousels on the homepage show three tiles of `376px`; the
category grid shows four tiles of `270px`; product pages split into a wide image column (`761px`) and
a `410px` commerce column. The footer band is full width.

### Whitespace Philosophy
Sections are separated by large expanses of cream. Section titles sit alone, centered, with one or
two lines of 14px copy under them. Product tiles leave generous room around each bottle; badges and
the bookmark icon float in the tile corners rather than in boxes. The hero is the only element that
runs edge to edge at the top; mid-page 50/50 image/text splits bleed to the viewport edge on the
image side.

## Elevation & Depth

Content has **no shadows**. The few box-shadows measured on the homepage
(`rgba(51, 51, 51, 0.2) 0px 0px 4px 0px`) belong to small utility controls, and the product page
adds an `rgb(34, 34, 34) 0px 0px 8px 0px` shadow on minor overlay elements. Product tiles, buttons,
inputs and cards are flat.

### Decorative Depth
Depth comes from photography (warm, low-key, often amber light on dark wood or paper) and from
inverting whole bands: the hero image with cream text, the `#252525` footer, the full-bleed
editorial images. The cookie banner on the product page is a flat white strip over the content.

## Shapes

### Border Radius Scale
- `0px` — everything structural: buttons, inputs, selects, variant options, product tiles, tabs,
  footer elements. This is the brand's signature right angle.
- `4px` — category quick-link filter chips only (`.c-quicklinks__link`).
- `50%` — circular media controls (the hero pause / mute buttons seen in the capture).

### Other Shapes
No skew, notch, clip-path or mask was measured on any control. The extractor recorded a rotated
`::before` (`transform: matrix(0.745378, 0.666642, -0.666642, 0.745378, 0, 0)`, cream fill) inside the
graphite add-to-cart button; in the capture this is the circular-arrows "Loading ..." icon caught
mid-rotation, not a shape of the button itself.

### Photography Geometry
Product shots are square-ish tiles on a near-white backdrop with soft natural shadow under the
bottle. Editorial imagery is full-bleed and rectangular. Nothing is masked into circles or blobs.

## Components

### Buttons
- **Primary (solid graphite)** — `#333333` fill, `#fffef2` label, SuisseIntl-Medium 14px / 21px,
  `13px 24px 12px` padding, `48px` tall, `0px` radius, 1px transparent border. Measured transition:
  `background-color 0.25s ease-out, color 0.25s ease-out`. Hover fill `#252525`. In product tiles it
  spans the full tile width (376px homepage, 270px category, 410px PDP).
- **Primary disabled** — `#f3f3f3` fill with `#999999` label (newsletter "Submit").
- **Secondary (ghost, on cream)** — transparent, `#333333` label, `1px solid #33333333` border, same
  48px height and padding ("Discover more", "Discover Services"). Each carries a right-arrow icon
  after the label.
- **Secondary light (ghost, on imagery)** — transparent, `#fffef2` label and `1px solid #fffef2` border
  ("Explore the story", "Explore", "Learn more").

### Cards & Containers
- **Product tile** — no border, no fill, no radius. Image area on a near-white photo background, an
  optional russet badge top-left (`#945c26`, 12px), a bookmark icon top-right, then centered
  product name (SuisseIntl 14px/700, line-height 15.12px), description in `#666666` (14px / 21px),
  an optional "Size" select, the price (16px / 19.2px) and the full-width graphite button.
- **PDP commerce panel** — sits on `#f6f5e8`; product title, price, short description, star rating
  with an underlined count, the variant options, a radio list (one-time / subscription) and the
  graphite add-to-cart button.

### Inputs & Forms
- **Text input** — `#fffef2` fill, `#333333` text, `1px solid #33333333` border, `0px` radius,
  `0px 16px` padding, `40px` tall, SuisseIntl 14px.
- **Select** (country selector, tile size selector) — same fill and border, `0px 30px 0px 20px`
  padding, `40px` tall, chevron at the right.
- **Sort select** on category pages is borderless: 14px / 24px text with `0px 20px 0px 5px` padding
  inside the `#f6f5e8` toolbar.

### Navigation
- **Header** — cream, no border. Utility row in 12px (`#333333`), centered serif wordmark, category
  row "Shop all · New & Notable · Skin Care · Hand & Body · Fragrance · Home · Hair · Travel · Gifts ·
  Library · Experience" in SuisseIntl 12px / 19.2px, then a vertical divider and "Search..." with a
  magnifier icon.
- **Breadcrumbs** — SuisseIntl-Medium 12px / 16.8px, `#333333` links separated by small chevrons,
  current page in `#666666`.
- **Tabs** — SuisseIntl 24px / 31.2px; inactive `#666666`, active `#000000` with a `2px solid #000000`
  underline drawn by `::after`. Homepage fragrance tabs pad `15px 35px` (61px tall); PDP tabs pad
  `70px 100px 22px 0px` and sit on a full-width hairline.
- **Footer** — `#252525` band; column headings SuisseIntl 18px/700 with a `1px solid #fffef2` rule
  beneath and `15px` bottom padding; links SuisseIntl 14px / 16.8px in `#fffef2` with `8px` bottom
  padding.

### Pills, Tags, and Chips
- **Filter chip** (category quick links) — `#fffef2` fill, `1px solid #bcbbb4`, `4px` radius,
  `4px 8px 4px 4px` padding, 27px tall, SuisseIntl 12px / 19.2px. Hover: fill `#f6f5e8`, border
  `#252525`. Selected: fill `#f6f5e8`, `2px solid #252525` border, 29px tall.
- **Badge** — plain text, no box: 12px SuisseIntl in `#945c26`.

### Signature Components
- **Variant option** (PDP size picker) — a rectangular tile with size and price on two centered lines,
  `#fffef2` fill, `8px` padding, 54px tall. The selected option measured `2px solid #000000`; the
  measured hover turned a `#33333333` border to `#252525`.
- **Editorial section header** — centered Zapf-Humanist 31px title over a 14px centered paragraph,
  optionally preceded by a 14px SuisseIntl-Medium eyebrow ("Eaux de Parfum").
- **50/50 story block** — full-bleed photograph on one half, `#f6f5e8` or cream text panel on the
  other, with a small label, a Zapf-Humanist title and definition-list rows separated by hairlines
  ("Dosage — Single pump", "Texture — Clear, low-foaming gel").

## Design System Architecture

Aesop has built a coded design system, but it is no longer public. The npm namespace
`@aesop-engineering` lists **`@aesop-engineering/gel`** — "UI Component Library and Design System for
Aēsop.com", latest version 5.78.0, last released 2023-05-05, repository `github.com/aesop/aesop-gel`
([ecosyste.ms npm namespace listing](https://packages.ecosyste.ms/api/v1/registries/npmjs.org/namespaces/aesop-engineering/packages)).
Today the npm registry answers "Not found" for the package and the GitHub repository returns 404;
a copy of 5.78.0 is still on the jsDelivr CDN, and the facts below come from that copy. It is a 2023
snapshot — where it disagrees with the live site, the live site wins (see the button note below).

- **Name and purpose** — the README calls it "Aesop Global Experience Language" (GEL), a React
  component library installed with `npm install @aesop-engineering/gel` and imported per component
  path ([README](https://cdn.jsdelivr.net/npm/@aesop-engineering/gel@5.78.0/README.md)). It mentions
  a consuming app named `aesop-web-ui`, Rollup builds to ES modules plus TypeScript declarations, and
  a Gitflow branching model.
- **Token architecture** — GEL ships no separate token package or token file. Values live directly in
  CSS Modules bundled into the JS (class names like `Button-module_base__2Lrsr`,
  `Heading-module_xLarge__r0QbC`), with hex values such as `#333`, `#fffef2`, `#f6f5e8`, `#bcbbb4`,
  `#666` repeated in the modules ([bundle](https://cdn.jsdelivr.net/npm/@aesop-engineering/gel@5.78.0/dist/index.esm.js)).
  The live storefront likewise exposes no brand custom properties: its `:root` variables are third-party
  (Flowplayer `--fp-*`, `--flowplayer-*`) plus a handful of generic names (`--darkgray`, `--lightgray`,
  `--black`). The live markup uses BEM-style component classes with modifier and helper prefixes —
  `c-button m-secondary m-readmore-dark`, `c-product-tile__name`, `c-quicklinks__link m-selected`,
  `l-footer__nav-link`, `h-text-size-31-for-large h-text-size-25` (`c-` component, `l-` layout,
  `m-` modifier, `h-` helper).
- **Theming** — GEL's theme type is exactly `'dark' | 'light'`
  ([Themes.types.d.ts](https://cdn.jsdelivr.net/npm/@aesop-engineering/gel@5.78.0/dist/sharedChunks/Themes.types.d.ts)),
  passed as a `theme` prop and through `ThemeContext` / `NavBarThemeContext`. Here "dark" means dark
  ink for cream backgrounds and "light" means cream ink for imagery. It is not a dark mode: the live
  site has no dark-mode switch. The same split shows on the live site as `m-readmore-dark` /
  `m-readmore-light` button modifiers.
- **Type & spacing** — GEL's CSS uses the families `'Suisse Regular'`, `'Suisse Medium'` and
  `'Zapf Humanist'`. Its `Heading` sizes step 14 / 16 / 18 / 20 / 22 / 24px, with a `serifFont` variant
  that switches to Zapf Humanist and goes larger at wider breakpoints; Korean pages swap the serif
  back to Suisse. The live site serves the families as `SuisseIntl`, `SuisseIntl-Medium` and
  `Zapf-Humanist`, and its responsive helper classes (`h-text-size-31-for-large h-text-size-25`)
  match the measured 31px desktop / 25px mobile section titles. No documented base unit was found.
- **Component model** — the GEL 5.78.0 file tree
  ([jsDelivr listing](https://data.jsdelivr.com/v1/packages/npm/@aesop-engineering/gel@5.78.0)) lists:
  Accordion, AddToCartButton, Alert, AssetGrid, Audio, BodyCopy, Breadcrumbs, Button, Carousel,
  Checkbox, ContentHubArticle(List), CopyGrid, DateSelector, DefinitionList, DialogBanner,
  DoubleMedia, FiftyFiftyFloatingText, Figure, FlyinPanel, FooterBlock, FullWidthHeroScroll,
  GlobalNavigation, GoogleMap, Heading, HeroBanner, Hyperlink, Icon, IconLink, Image, ImageCarousel,
  KitList, LinkButtonGroup, List, Loading, LoadMoreButton, MediaWithContent, Modal, NavigationBar,
  NotificationModal, Overlay, Paragraph, PasswordInput, Podium, ProductAccordion, ProductCommerce,
  ProductDetailHeader, ProductExtract, ProductGridItem, Quote, RadioGroup, Rating, ReadMore,
  SecondaryMessage, SectionHeading, Select, SubNav, Table, Textarea(V2), TextInput(V2),
  TextOverFullWidthAsset, Transition, TwoColumnLayout, Video, plus compositions (DynamicForm,
  StoreDetail) and hooks (useTrapFocus, useEscapeKeyListener, useFocusOnFirst, useOnScreen…).
  The 2023 `Button` had `blockStyle` (60px tall, `19px 23px` padding, 200ms
  `cubic-bezier(0.645, 0.045, 0.355, 1)`), `dark` / `light` / `alternate` variants and a disabled state.
  **The live button differs:** 48px, `13px 24px 12px`, `0.25s ease-out`. Follow the live values.
- **Accessibility** — GEL includes focus-trap and escape-key hooks, `ScreenReaderOnly` and `Hidden`
  components, checkbox focus outlines of `2px solid #333` (dark theme) / `2px solid #f6f5e8` (light),
  and an `@media (forced-colors: active)` rule. No published contrast target or touch-target
  minimum was found. On the live site, measured controls are 40px (inputs, selects) and 48px (buttons);
  "skip to content" and "skip to footer navigation" links come first in the DOM, and there is a hidden
  h1 for screen readers.
- **Delivery** — npm (`@aesop-engineering/gel`, ISC licence, React 17 peer dependency), a GitHub
  Pages Storybook at [aesop.github.io/aesop-gel](https://aesop.github.io/aesop-gel/), and shared lint
  configs in [`@aesop-engineering/code-styles`](https://raw.githubusercontent.com/aesop/aesop-code-styles/HEAD/package.json)
  (eslint, prettier, stylelint). The public [Aesop GitHub org](https://api.github.com/orgs/aesop/repos)
  no longer lists aesop-gel. No public Figma kit and no public brand portal or press kit with color or
  type specifications were found.

## Do's and Don'ts

### Do
- Use `#fffef2` as the page background and `#333333` for text — never pure white or pure black for these.
- Keep every button, input, select, tile and tab at `0px` radius; use `4px` only for filter chips.
- Make solid CTAs `#333333` with a `#fffef2` label, 48px tall, `13px 24px 12px` padding, hover `#252525`.
- Use SuisseIntl-Medium 14px for button labels and SuisseIntl 14px / 22.4px for reading text.
- Reserve Zapf-Humanist (31px / 41.23px) for editorial section titles, centered and in sentence case.
- Use `#666666` for secondary descriptions and inactive tabs.
- Put cream text (`#fffef2`) and cream 1px outlines on photography and on the `#252525` footer.
- Write literary, calm, sentence-case microcopy; label badges in plain russet text (`#945c26`).
- Let photography carry warmth: amber glass, wood, paper, low warm light.

### Don't
- Don't add drop shadows, gradients or glassmorphism to tiles, buttons or sections.
- Don't introduce a chromatic brand color for CTAs; there is none on the live storefront.
- Don't round corners or make pill buttons.
- Don't uppercase, letter-space or bold headlines; display type stays at weight 400.
- Don't set body copy in Zapf-Humanist, and don't use CircularStd (a one-off on the product h1).
- Don't put badges in filled boxes or colored pills — they are bare text.
- Don't use the 2023 GEL button metrics (60px, `19px 23px`) for new work; the site now ships 48px.

## Responsive Behavior

### Breakpoints
Only two viewports were measured: 1280px (desktop) and 390px (mobile). GEL's 2023 CSS uses
`max-width: 639px`, `min-width: 640px`, `min-width: 1025px`, `min-width: 1220px`, `1600px` and `1920px`
media queries ([bundle](https://cdn.jsdelivr.net/npm/@aesop-engineering/gel@5.78.0/dist/index.esm.js)).
The live markup uses matching `-for-large` and `-for-medium-down` helper suffixes, but the live
breakpoint pixel values were not measured.

### Measured changes at 390px
- Hero / promo title: SuisseIntl 30px → **24px** (line-height 39.9px → 31.92px).
- Editorial section titles: Zapf-Humanist 31px → **25px**.
- Body stays 14px / 22.4px; buttons stay 48px tall with `13px 24px 12px` padding (tile buttons 170px wide).
- The header becomes a 50px cream bar (`#fffef2`) whose visible text is only "Stores" and "My cart"
  beside the wordmark; the desktop category row is not shown at this width.

### Touch Targets
Buttons are 48px tall at every width; inputs and selects are 40px; filter chips are 27–29px tall.

### Collapsing Strategy
At 1280px the homepage shows three carousel tiles (376px) and the category grid four columns (270px);
at 390px the measured tile button is 170px wide. How the 50/50 story blocks and tab rows reflow at
small widths was not measured — check the live site before specifying it.

### Image Behavior
At 1280px the hero and editorial images are full-bleed and cropped to their blocks; product shots sit
on a near-white photographic background inside the tile. Mobile image crops were not measured.

## Iteration Guide

1. Start every screen on `#fffef2` with `#333333` text in SuisseIntl 14px / 22.4px.
2. Add the three-tier header: 12px utility row, centered serif wordmark, 12px / 19.2px category row.
3. Title sections with centered Zapf-Humanist 31px / 41.23px (25px on mobile) and one 14px paragraph.
4. Build product tiles flat: image, russet 12px badge, 14px/700 name, `#666666` 14px / 21px description,
   16px / 19.2px price, full-width 48px `#333333` button.
5. Use ghost buttons (`1px solid #33333333` on cream, `1px solid #fffef2` on imagery) for "Discover more".
6. Close with the `#252525` footer: 18px/700 cream headings over a 1px cream rule, 14px / 16.8px links.
7. Check: no radius except chips (`4px`) and media controls (`50%`); no shadows; no uppercase.
8. Hover states change color only (`#252525` fill, `#f6f5e8` chip fill), `0.25s ease-out`.
9. When a component isn't listed here, follow GEL's naming and theme split (`dark` ink on cream,
   `light` ink on imagery), but take sizes from the live measurements above.
