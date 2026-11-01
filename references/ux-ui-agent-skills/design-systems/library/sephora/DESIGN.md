---
version: alpha
name: Sephora
category: "Beauty & Personal Care"
description: "Sephora's US storefront: a white #ffffff product-grid canvas under a black #000000 category band, set entirely in \"helvetica neue\" (14px/400 body, 20px/700 section heads), black #000000 ink with #666666 secondary text and #136bea links, a single red #cf112c (hover #e2030f) for the filled pill CTA and sale prices, 2px black outlined pills (9999px) for most actions and 4px-radius cards edged by a 1px #eeeeee inset shadow."

colors:
  primary: "#cf112c"
  primary-hover: "#e2030f"
  red-dark: "#7f141a"
  red-light: "#fcecec"
  canvas: "#ffffff"
  ink: "#000000"
  ink-secondary: "#666666"
  ink-dark-gray: "#3f3f3f"
  on-dark: "#ffffff"
  link: "#136bea"
  link-tint: "#e5f2fd"
  nav-band: "#000000"
  promo-banner: "#f7e4f7"
  near-white: "#f6f6f8"
  near-white-translucent: "#f6f6f8bf"
  light-gray: "#eeeeee"
  mid-gray: "#cccccc"
  input-gray: "#888888"
  divider: "#00000010"
  darken-2: "#00000020"
  overlay: "#00000040"
  darken-4: "#00000080"
  darken-5: "#000000b3"
  error: "#cf112c"
  success: "#008048"
  yellow: "#ffc003"
  golden-yellow: "#f8d15d"
  baby-pink: "#f4b6c7"
  pale-turquoise: "#b2fce4"
  orange: "#ffb761"

typography:
  heading-xl:
    fontFamily: "\"helvetica neue\", helvetica, arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 30px
  section-heading:
    fontFamily: "\"helvetica neue\", helvetica, arial, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 30px
  card-heading:
    fontFamily: "\"helvetica neue\", helvetica, arial, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 25px
  heading-mobile:
    fontFamily: "\"helvetica neue\", helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
  body:
    fontFamily: "\"helvetica neue\", helvetica, arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  body-tight:
    fontFamily: "\"helvetica neue\", helvetica, arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17.5px
  button:
    fontFamily: "\"helvetica neue\", helvetica, arial, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 14px
  button-small:
    fontFamily: "\"helvetica neue\", helvetica, arial, sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 12px
  small:
    fontFamily: "\"helvetica neue\", helvetica, arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
  caption:
    fontFamily: "\"helvetica neue\", helvetica, arial, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 13.75px
  tab-label-mobile:
    fontFamily: "\"helvetica neue\", helvetica, arial, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 16.5px

rounded:
  none: 0px
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 10px
  full: 9999px

spacing:
  space-1: 4px
  space-2: 8px
  space-3: 12px
  space-4: 16px
  space-5: 24px
  space-6: 32px
  space-7: 48px
  space-8: 64px
  space-9: 96px
  container: 16px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.full}"
    padding: 3.5px 15.75px
    height: 44px
    border: 2px solid transparent
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-outlined:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    borderColor: "{colors.ink}"
    border: 2px solid
    typography: "{typography.button-small}"
    rounded: "{rounded.full}"
    padding: 3px 10.5px
    height: 32px
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.nav-band}"
    textColor: "{colors.on-dark}"
    typography: "{typography.body}"
    height: 44px
  nav-link:
    textColor: "{colors.on-dark}"
    typography: "{typography.body-tight}"
    padding: 8px
    height: 44px
  search-input:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 0px 12px 0px 34px
    height: 32px
  card:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    boxShadow: "rgb(238, 238, 238) 0px 0px 0px 1px inset"
    typography: "{typography.body-tight}"
  category-tile:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.mid-gray}"
    border: 1px solid
    typography: "{typography.body-tight}"
    rounded: "{rounded.sm}"
    padding: 8.75px
    height: 37px
  modal:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    typography: "{typography.body}"
  modal-scrim:
    backgroundColor: "{colors.overlay}"
  promo-banner:
    backgroundColor: "{colors.promo-banner}"
    textColor: "{colors.ink}"
    typography: "{typography.small}"
  bottom-nav-mobile:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.tab-label-mobile}"
    height: 66px
    boxShadow: "rgba(0, 0, 0, 0.1) 0px -1px 0px 0px"
---

# Sephora — DESIGN.md

## Overview

Sephora's US homepage (measured at https://www.sephora.com, 1280px wide, 4,322px tall) is a
retail catalogue first and a magazine second. The capture shows, top to bottom: a thin full-width
promo banner ("Get 5X Points†† on Sephora Collection. Ends 10/7. ††Terms apply. JOIN BEAUTY
INSIDER ›") on a pale lilac-pink fill; a white header with the spaced-out SEPHORA wordmark at left,
a long rounded search field, and a row of icon-plus-two-line utility links (AI Beauty Chat · Shop
Store & Delivery · Services & Events · Sign In for FREE Shipping), then heart and basket icons; and
under it a full-width **black category band** with white 14px labels — New · Must Haves Under $50 ·
Makeup · Skincare · Fragrance · … · Gifts & Value Sets · Gift Cards · Sale & Offers.

Below the chrome the page is white and dense. Three large promotional cards sit in a horizontal
carousel (Beauty Insider 5X points, a sale panel, "Trending Mini Gifts"), each with a full-bleed
image on top and a solid colour block below holding a 20px bold white title, a one-line subtitle
and an uppercase "SHOP NOW ›" text link. Then rows of product tiles: "Chosen For You", "Beauty
Offers (21)", "New Arrivals" — each a strip of ~6 white tiles with a product photograph on white,
small black badges ("LIMITED EDITION", "NEW", "10% OFF"), bold brand name, two-line product name
truncated with an ellipsis, bold price, star rating and review count. Red appears almost only on
sale prices; blue appears only on text links ("View all", "See details", "Show more").

In the capture the page is dimmed by a `#00000040` scrim with a white sign-in modal (email and
password fields, "Keep me signed in", a black filled "Sign In" pill and a black outlined "Create
Account" pill). The extraction run met a different Sephora modal — the out-of-region notice with a
red "View Sephora International Websites" pill — which is the measured filled CTA below.

The visual language is: black, white, one red, one blue, Helvetica Neue, pills for actions and
4px rectangles for content. Colour comes from product photography and promo artwork, never from
the UI chrome.

**Key Characteristics:**
- White `#ffffff` canvas; black `#000000` ink (2,346 chars) and `#666666` secondary text (1,702 chars).
- Full-width black `#000000` category band, 44px tall, white 14px labels.
- One family everywhere: `"helvetica neue", helvetica, arial, sans-serif` — 5,337 of 5,337 measured chars.
- Only two weights on the page: 400 (3,839 chars) and 700 (1,498 chars).
- Red `#cf112c` (`--color-red`, also `--color-error`) for the filled pill CTA and sale prices; hover `#e2030f` (`--color-brightRed`).
- Links in blue `#136bea` (`--color-link`).
- Actions are pills (`9999px`, 98 elements; `99999px` on the CTA); content tiles are `4px` (72 elements).
- Cards are flat: a `rgb(238, 238, 238) 0px 0px 0px 1px inset` hairline instead of a border or drop shadow.
- Small type: 14px (2,909 chars) and 12px (1,867 chars) carry almost all text.
- A complete `:root` token layer: `--color-*`, `--space-0…9`, `--rounded-*`, `--font-size-*`, `--leading-*`, `--layer-*`.

## Colors

> Source: `web/data/extracted/sephora.json` and `sephora--product.json`. Names in brackets are the site's own `:root` variables.

### Action
- **Red** (`{colors.primary}` — `#cf112c`, `--color-red` and `--color-error`): the filled pill CTA ("View Sephora International Websites"), sale prices in the capture ("$26.60 - $122.50").
- **Red hover** (`{colors.primary-hover}` — `#e2030f`, `--color-brightRed`): measured hover of the red pill.
- **Dark red** (`{colors.red-dark}` — `#7f141a`, `--color-darkRed`) and **light red** (`{colors.red-light}` — `#fcecec`, `--color-lightRed`): defined in `:root`; not seen as large areas in the capture.
- **Link blue** (`{colors.link}` — `#136bea`, `--color-link` = `--color-blue`): 164 chars — "View all", "See details", "Show more", "TERMS OF USE", "Privacy Policy".
- **Light blue** (`{colors.link-tint}` — `#e5f2fd`, `--color-lightBlue`).

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`, 7,914 area units, body background).
- **Category band** (`{colors.nav-band}` — `#000000`, 189 area units).
- **Promo banner** (`{colors.promo-banner}` — `#f7e4f7`, 77 area units): the top "5X Points" strip.
- **Near white** (`{colors.near-white}` — `#f6f6f8`, `--color-nearWhite`, 11 area units) and its translucent variant `#f6f6f8bf` (`--color-nearWhiteTransparent`).
- **Scrim** (`{colors.overlay}` — `#00000040`, `--color-darken3` = `rgba(0, 0, 0, 0.25)`): 1,024 area units — the modal backdrop covering the page in both runs.

### Text
- **Ink** (`{colors.ink}` — `#000000`, `--color-black` / `--color-base`): 2,346 chars.
- **Secondary** (`{colors.ink-secondary}` — `#666666`, `--color-gray`): 1,702 chars — subtitles ("Personalized based on your preferences"), offer fine print, review counts.
- **On dark** (`{colors.on-dark}` — `#ffffff`): 214 chars — category band, promo card titles.
- **Dark gray** (`{colors.ink-dark-gray}` — `#3f3f3f`, `--color-darkGray`).

### Neutral greys (`:root`)
`--color-lightGray #eee` (`{colors.light-gray}`) · `--color-midGray #ccc` (`{colors.mid-gray}`, the 1px border of category tiles) · `--color-inputGray #888` (`{colors.input-gray}`) · `--color-gray #666` · `--color-darkGray #3F3F3F`.

### Alpha blacks (`--color-darken1…5`)
- `--color-darken1` / `--color-divider`: `rgba(0, 0, 0, 0.0625)` → `{colors.divider}` `#00000010`.
- `--color-darken2`: `rgba(0, 0, 0, 0.125)` → `{colors.darken-2}` `#00000020`.
- `--color-darken3`: `rgba(0, 0, 0, 0.25)` → `{colors.overlay}` `#00000040`.
- `--color-darken4`: `rgba(0, 0, 0, 0.5)` → `{colors.darken-4}` `#00000080`.
- `--color-darken5`: `rgba(0, 0, 0, 0.7)` → `{colors.darken-5}` `#000000b3`.

### Semantic & accent
- **Error** (`{colors.error}` — `#cf112c`, `--color-error`): the same value as the brand red.
- **Success** (`{colors.success}` — `#008048`, `--color-green`).
- Accents defined in `:root`: `--color-yellow #ffc003`, `--color-goldenYellow #f8d15d`, `--color-babyPink #f4b6c7`, `--color-paleTurquoise #b2fce4`, `--color-orange #FFB761`.
- Payment-brand variables also live in `:root` (`--color-paypalYellow #ffc439`, `--color-venmoBlue #008cff`, `--color-venmoLightBlue #299EFF`, `--color-pazeBlue #0F42F8`); they belong to partner buttons, not to the Sephora palette, and are not tokenised here.

## Typography

### Font Family
Every measured character on the homepage is set in `"helvetica neue", helvetica, arial, sans-serif`
(`--font-family-base`). No web font is loaded (`loadedFonts` is empty): the site relies on the
system's Helvetica Neue, falling back to Helvetica and Arial. `:root` also defines
`--font-family-serif: georgia,times,serif`, but no serif text was measured on the page.

### Hierarchy

| Token | Size | Weight | Line height | Where measured |
|---|---|---|---|---|
| `heading-xl` | 24px | 700 | 30px | h1 on the out-of-region page ("Sorry, this product is not available.") |
| `section-heading` | 20px | 700 | 30px | homepage h2 "Beauty Offers (21)" |
| `card-heading` | 20px | 700 | 25px | promo card h3 "Trending Mini Gifts" (white) |
| `heading-mobile` | 16px | 700 | 20px | mobile h2 "Hot Beauty on Sale? Say Less." |
| `body` | 14px | 400 | 21px | body, search input |
| `body-tight` | 14px | 400 | 17.5px | paragraphs in cards, nav links, category tiles |
| `button` | 14px | 700 | 14px | red pill CTA |
| `button-small` | 12px | 700 | 12px | outlined pill ("Download App") |
| `small` | 12px | 400 | — | 1,867 chars; offer copy and product names |
| `caption` | 11px | 400 | 13.75px | mobile legal text (`#666666`) |
| `tab-label-mobile` | 11px | 400 | 16.5px | mobile bottom navigation |

### Size distribution (desktop, by characters)
14px 2,909 · 12px 1,867 · 20px 326 · 24px 81 · 10px 59 · 16px 38 · 11px 28 · 10.5px 15 · 9px 11 · 7px 3.

### Principles
- **Small and bold, not big.** The largest live heading on the homepage is 20px. Hierarchy comes from weight (700 vs 400) and colour (`#000000` vs `#666666`), not from size jumps.
- **Two weights only.** 400 and 700. `:root` declares `--font-weight-light 300`, `--font-weight-medium 500`, `--font-weight-demiBold 600`, but none were measured in use.
- **Letter-spacing is normal** almost everywhere; 504 chars of 12px text were measured at `-0.12px` (the extractor did not attribute them to one element, so no token carries it).
- **Line heights are 1.25 or 1.5.** `--leading-tight 1.25` (14px → 17.5px, 20px → 25px), `--leading-base 1.5` (14px → 21px, 20px → 30px), `--leading-none 1` for buttons (14px → 14px).

### The `:root` type scale
`--font-size-xs 11px` · `--font-size-sm 12px` · `--font-size-base 14px` · `--font-size-md 16px` ·
`--font-size-lg 20px` · `--font-size-xl 24px` · `--font-size-2xl 32px` · `--font-size-3xl 48px`, plus a
parallel `-bg` set: `xs-bg 11px` · `sm-bg 12px` · `base-bg 14px` · `md-bg 16px` · `lg-bg 18px` ·
`xl-bg 20px` · `2xl-bg 24px` · `3xl-bg 26px` · `4xl-bg 36px`. The site does not document what the
`-bg` suffix means; the measured headings use 20px and 24px.

### Note on Font Substitutes
Helvetica Neue is a commercial Linotype family that ships with macOS/iOS; the site itself declares
`helvetica, arial` as fallbacks, so Arial is what Windows visitors see. Use the same stack. Search
results describe a custom Sephora type system made by the studio Mucca with Schriftlabor, but the
case study could not be opened (Behance returned 403) and that typeface is not served on
sephora.com — do not use it for web UI.

## Layout

- **Viewport measured:** 1280px. Page content in the capture runs edge to edge with a 16px gutter (`--space-container: 16px`, `--space--container: -16px` for full-bleed pull-outs).
- **Header stack:** promo banner → white header (wordmark, search, utility links) → 44px black category band.
- **Promo carousel:** three cards 545px wide × 494px tall with 4px radius, the third card clipped at the right edge of the viewport.
- **Product strips:** horizontal rows of ~6 white tiles; section header row has the 20px/700 title at left and a blue "View all" / "Show more" link at right.
- **Offer cards:** "Beauty Offers (21)" tiles with illustration on top, 12px body, small outlined pill ("Shop Now", "Sign Up Now", "Learn More", "Join Here") plus a blue "See details" link.
- **Spacing:** `--space-0…9` = 0, 4, 8, 12, 16, 24, 32, 48, 64, 96px. Measured gaps: 4px (36), 12px (16), 8px (2), 24px (2). Measured paddings: 16px (94), 8px (43), 12px (41), 24px (21).
- **Density:** high. 12–14px type, 4px gaps between tiles, little vertical air between sections.

### Spacing tokens
| Token | Value | Source |
|---|---|---|
| `space-1` | 4px | `--space-1` |
| `space-2` | 8px | `--space-2` |
| `space-3` | 12px | `--space-3` |
| `space-4` | 16px | `--space-4` |
| `space-5` | 24px | `--space-5` |
| `space-6` | 32px | `--space-6` |
| `space-7` | 48px | `--space-7` |
| `space-8` | 64px | `--space-8` |
| `space-9` | 96px | `--space-9` |
| `container` | 16px | `--space-container` |

## Elevation & Depth

| Level | Value | Use |
|---|---|---|
| Flat | none | page, category band, text |
| Hairline | `rgb(238, 238, 238) 0px 0px 0px 1px inset` | promo and product cards (9 elements) |
| Light | `rgba(0, 0, 0, 0.2) 0px 0px 6px 0px` (`--shadow-light`) | 39 elements |
| Medium | `0 0 12px rgba(0,0,0,.2)` (`--shadow-medium`) | defined in `:root` |
| Bottom bar | `rgba(0, 0, 0, 0.1) 0px -1px 0px 0px` | mobile bottom navigation |
| Scrim | `#00000040` | behind modals |

Stacking is tokenised: `--layer-dropdown 100`, `--layer-fixedBar 1000`, `--layer-header 1010`,
`--layer-flyout 1020`, `--layer-superChat 1023`, `--layer-modal 1030`, `--layer-max 2147483647`.

Depth comes from the photography. Product images sit on white with their own soft shadows; the UI
adds only a 1px grey inset outline around tiles.

## Shapes

| Token | Value | `:root` | Measured use |
|---|---|---|---|
| `none` | 0px | `--rounded-none` / `--rounded-0` | search input element, text |
| `xs` | 2px | `--rounded-1` | 1 element |
| `sm` | 4px | `--rounded-2` | 72 elements — cards, product tiles, category tiles |
| `md` | 6px | `--rounded-3` | the out-of-region modal card |
| `lg` | 8px | `--rounded-4` | defined |
| `xl` | 10px | `--rounded-5` | defined |
| `full` | 9999px | `--rounded-full` | 98 elements — pills; the red CTA computes to `99999px` |

`:root` also defines side-specific radii: `--rounded-top 4px 4px 0 0`, `--rounded-right 0 4px 4px 0`,
`--rounded-bottom 0 0 4px 4px`, `--rounded-left 4px 0 0 4px`. No clip-path, skew or notched shapes
were measured; the only geometric motif is the pill against the 4px rectangle.

## Components

### Buttons

**Primary (red pill)** — `button-primary`
- Background `#cf112c`, text `#ffffff`, 14px/700/14px Helvetica Neue.
- Radius 9999px (computed `99999px`), padding `3.5px 15.75px`, height 44px, 2px transparent border.
- Hover: background `#e2030f`; text, border and size unchanged (measured).
- Measured as "View Sephora International Websites" in the out-of-region modal on both the homepage and the product-page run.

**Outlined pill** — `button-outlined`
- Transparent background, `#000000` text, 2px solid `#000000` border.
- 12px/700/12px, padding `3px 10.5px`, height 32px, radius 9999px.
- Measured on "Download App"; the capture shows the same black outlined pill on "Shop Now", "Sign Up Now", "Learn More", "Join Here" and "Create Account".

**Black filled pill** — visible in the capture (the modal's "Sign In") but not measured by the
extractor, so no values are declared for it.

### Links
- `#136bea`, 14px/400, no underline in the capture ("View all", "See details", "Show more").
- On promo cards, uppercase white bold "SHOP NOW ›" / "JOIN NOW ›" text links sit on the coloured block (values not separately measured).

### Navigation
- **Category band** (`nav`): black `#000000` full-width bar, 44px tall, white labels.
- **Nav link** (`nav-link`): `#ffffff`, 14px/400/17.5px, padding 8px, 44px tall.
- **Mobile bottom nav** (`bottom-nav-mobile`): white bar, 66px (`--bottomNavHeight`), items Home · Shop · Offers · Me · My Store, 11px/400/16.5px, top hairline `rgba(0, 0, 0, 0.1) 0px -1px 0px 0px`.

### Search
- `search-input`: 32px tall, 314px wide, `#000000` 14px text, padding `0px 12px 0px 34px` (34px left leaves room for the magnifier icon). The input element has 0px radius; in the capture it sits inside a rounded outlined field whose wrapper was not measured.

### Cards
- `card`: white, 4px radius, `rgb(238, 238, 238) 0px 0px 0px 1px inset`, 14px/400/17.5px text. Promo cards measured at 545 × 494px.
- `category-tile`: white, 1px solid `#cccccc`, 4px radius, padding 8.75px, 37px tall, 14px/400/17.5px (the "More Ways to Shop" tiles: Makeup, Skincare, …).

### Modal
- `modal`: white card, 6px radius (out-of-region modal, 576 × 334px).
- `modal-scrim`: `#00000040`.

### Promo banner
- `promo-banner`: `#f7e4f7` strip at the very top, black 12px copy with bold emphasis and a "JOIN BEAUTY INSIDER ›" link.

### Not declared
Form fields of the sign-in modal, checkboxes, tabs, rating stars, badges and the footer were not
measured (the footer role returned nothing and further pages returned HTTP 403), so they are not
tokenised. Badges in the capture are small black rectangles with white uppercase text.

## Design System Architecture

Sephora publishes **no public design system**, token package, Figma kit or brand-guideline site.
Searches for "Sephora design system", "Sephora brand guidelines logo typeface", "Sephora engineering
blog UI component library react", "npm sephora design tokens github" and "Sephora newsroom press kit
logo download" returned only third-party write-ups, which are not used. The one related lead — a
custom typeface by Mucca with Schriftlabor — could not be opened; the only page about Mucca that did
open ([Typographics 2022 — Mucca](https://2022.typographics.com/conference/mucca)) confirms just
that Sephora is a Mucca client. Everything below is the de-facto system read from the live
sephora.com `:root` and computed styles.

**Token architecture (from `:root`).** One flat primitive layer with a few semantic aliases:
- *Colour primitives* named by appearance: `--color-red`, `--color-brightRed`, `--color-darkRed`, `--color-lightRed`, `--color-blue`, `--color-lightBlue`, `--color-green`, `--color-gray`, `--color-midGray`, `--color-lightGray`, `--color-nearWhite`, `--color-babyPink`, `--color-paleTurquoise`.
- *Semantic aliases*: `--color-base: #000`, `--color-link: #136BEA` (= `--color-blue`), `--color-error: #cf112c` (= `--color-red`), `--color-divider: rgba(0, 0, 0, 0.0625)` (= `--color-darken1`).
- *Alpha ramp*: `--color-darken1…5` (0.0625, 0.125, 0.25, 0.5, 0.7).
- *Space*: `--space-0…9` (0–96px) plus `--space-container` / `--space--container`.
- *Shape*: `--rounded-0…5`, `--rounded-none`, `--rounded-full`, `--rounded-top/right/bottom/left`.
- *Type*: `--font-size-xs…3xl`, the `*-bg` size set, `--font-weight-light/normal/medium/demiBold/bold`, `--leading-none/tight/base/relaxed` (1, 1.25, 1.5, 1.75) and `--leading-small 14px` / `--leading-medium 16px`.
- *Elevation & layering*: `--shadow-light`, `--shadow-medium`, `--layer-dropdown … --layer-max`.
- *Payment partners*: `--color-paypalYellow`, `--color-venmoBlue`, `--color-pazeBlue` and similar.
Naming convention: `--{category}-{name}` in camelCase for names (`brightRed`, `nearWhiteTransparent`), numeric steps for scales.

**Theming.** One light theme. No dark-mode or high-contrast variables or media queries were found
in the measured `:root`; the only "dark" surfaces are the black category band and coloured promo blocks.

**Type & spacing systems.** 4px base spacing (`--space-1: 4px`) stepping 4 → 8 → 12 → 16 → 24 → 32 →
48 → 64 → 96. Type is a fixed px scale anchored on 14px base; at 390px the most-used size shifts from
14px to 12px (12px: 4,451 chars on mobile) and section headings drop from 20px to 16px.

**Component model (observed).** Pill buttons (filled red, filled black, outlined black), text links,
category band with flyouts (`--layer-flyout`), search field, promo cards, product tiles with badges,
ratings and prices, offer cards, category link tiles, modals with scrim, a mobile bottom tab bar
(`--bottomNavHeight: 66px`), and a chat layer (`--layer-superChat`).

**Accessibility (observed, not documented).** A visually-hidden h1 ("Sephora Homepage", clip-path
`inset(50%)`, 1×1px) labels the page for screen readers. No published contrast or focus rules exist.
Measured pairs: `#ffffff` on `#cf112c` and `#000000` on `#ffffff` for actions; `#666666` on white for
secondary text.

**Delivery.** CSS custom properties on `:root`; system fonts only — no web font was loaded on the page; the CSS corpus also
mentions `Open Sans` (one `@font-face`) and `Roboto`, but no measured text used them. No public npm
package, repository or Figma library was found.

## Do's and Don'ts

### Do
- Use `"helvetica neue", helvetica, arial, sans-serif` for everything, at 400 and 700 only.
- Keep the canvas `#ffffff` and text `#000000`; use `#666666` for secondary lines.
- Run a full-width black `#000000` category band with white 14px labels.
- Make actions pills (9999px): red `#cf112c` filled for the single most important action, black 2px outlined for the rest.
- Use `#e2030f` for the red pill's hover.
- Set content tiles at 4px radius with the 1px `#eeeeee` inset hairline.
- Use `#136bea` for text links like "View all" and "See details".
- Keep headings small: 20px/700 for sections, 24px/700 for a page title, 16px/700 on mobile.
- Let product photography on white provide all the colour.
- Reserve red for the CTA and sale prices; it is also the error colour.

### Don't
- Don't load a display web font or a serif for UI headings.
- Don't use weights 300, 500 or 600 — they are declared but not used.
- Don't round content cards into pills, or square off buttons.
- Don't add drop shadows to tiles; the hairline inset is the edge.
- Don't colour the header chrome — it is black, white and the wordmark.
- Don't introduce a second accent colour for UI; pinks, turquoise and yellows are campaign accents only.
- Don't enlarge type for drama; Sephora's hierarchy is 20px vs 14px vs 12px.
- Don't use blue for buttons; blue is for text links.

## Responsive Behavior

Measured at 390px:
- The visually-hidden h1 remains; the first visible section heading is 16px/700/20px (`heading-mobile`), down from 20px.
- Body text shifts smaller: 12px is the dominant size (4,451 chars), then 14px (2,799), 10px (388), 11px (158), 10.5px (156), 24px (112), 16px (88), 20px (40).
- Legal/secondary copy: 11px/400/13.75px in `#666666` (`caption`).
- The red pill keeps its desktop metrics: 14px/700, padding `3.5px 15.75px`, 44px tall, 280px wide.
- Navigation moves to a fixed **bottom tab bar**: white, 66px tall, 11px/400/16.5px labels (Home · Shop · Offers · Me · My Store), top hairline `rgba(0, 0, 0, 0.1) 0px -1px 0px 0px`.
- Out-of-region page h1: 24px/700/30px on desktop, 16px/700/20px on mobile.

### Breakpoint notes
No breakpoint tokens are exposed in `:root`; the measurements above are the only two widths taken
(1280px and 390px).

### Touch targets
The red pill is 44px tall at both widths; the outlined pill is 32px; the bottom tab bar is 66px.

## Iteration Guide

1. Start from white `#ffffff`, ink `#000000`, Helvetica Neue stack at 14px/400/21px.
2. Add the header: promo strip `#f7e4f7`, white logo/search row, 44px black category band with 14px white links (padding 8px).
3. Build section headers as 20px/700/30px black with a `#136bea` "View all" link on the right.
4. Build tiles: white, 4px radius, `rgb(238, 238, 238) 0px 0px 0px 1px inset`, image on white, bold brand, 12px name, bold price.
5. Actions: black 2px outlined pills (12px/700, `3px 10.5px`, 32px) by default; one red `#cf112c` filled pill (14px/700, `3.5px 15.75px`, 44px, hover `#e2030f`) per view.
6. Modals: white, 6px radius, over a `#00000040` scrim, stacked at `--layer-modal 1030`.
7. Spacing on the 4px scale: 4, 8, 12, 16, 24, 32, 48, 64, 96px.
8. On mobile: 16px/700 headings, 12px dominant body, bottom tab bar 66px.
9. Check every new colour against the `:root` list above; if it is not there, it is not Sephora.
10. When a component is not covered here (forms, footer, tabs), measure it on sephora.com before adding it.
