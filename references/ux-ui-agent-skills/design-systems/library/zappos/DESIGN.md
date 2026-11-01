---
version: alpha
name: Zappos
category: "E-commerce & Retail"
description: "Zappos.com: Caslon Ionic serif section titles at 24px/28.8px weight 500 over a white canvas, Modern Gothic sans for everything else at 16px/21.6px, black #000000 ink and square-cornered uppercase buttons with 2px radii, a #ffe300 yellow app button, #ffb967 orange and #ffe336 yellow promo bands, pill-shaped color swatches and #d12015 sale prices."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  band-orange: "#ffb967"
  band-yellow: "#ffe336"
  button-yellow: "#ffe300"
  surface-secondary: "#f7f7f7"
  hover-grey: "#f1f1f1"
  ink-secondary: "#454545"
  ink-tertiary: "#757575"
  sale-red: "#d12015"
  link-highlight: "#c0000a"
  accent-blue: "#210efa"
  info-navy: "#17166c"
  border-primary: "#c9c9c9"
typography:
  display:
    fontFamily: caslon-ionic-web, caslon-ionic-fallback, ui-serif, serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28.8px
    letterSpacing: "-0.36px"
  body-large:
    fontFamily: modern-gothic-web, modern-gothic-fallback, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 21.6px
    letterSpacing: "-0.16px"
  subheading:
    fontFamily: modern-gothic-web, modern-gothic-fallback, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 21.6px
    letterSpacing: "-0.18px"
  body:
    fontFamily: modern-gothic-web, modern-gothic-fallback, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 19.25px
    letterSpacing: "-0.14px"
  button:
    fontFamily: modern-gothic-web, modern-gothic-fallback, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18.9px
    letterSpacing: 0.7px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 8px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 24px
    height: 56px
    borderColor: "{colors.ink}"
  button-yellow:
    backgroundColor: "{colors.button-yellow}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 48px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body-large}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body-large}"
    rounded: "{rounded.none}"
  nav-link-hover:
    backgroundColor: "{colors.hover-grey}"
  search-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-large}"
    rounded: "{rounded.none}"
    padding: 4px 0px
    height: 30px
  search-button-hover:
    backgroundColor: "{colors.surface-secondary}"
  card:
    backgroundColor: "{colors.surface-secondary}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 12px
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

# Zappos

## Overview

zappos.com ("Shoes, Sneakers, Boots, & Clothing + FREE SHIPPING | Zappos.com") is a retail home page, 6,860px tall at
desktop, built as a stack of editorial banners and product carousels on white. A black strip at the top carries a
promotion ("Go the distance in gear from HOKA, Brooks & more. Shop Now"). The header has the black "Zappos" wordmark,
a long search field with a SEARCH button, account and cart icons, and a category row: Women, Men, Kids, Brands,
Sneakers, Sports, a red "Sale", and "Help & Support" on the right.

The body alternates full-width editorial banners and product rows. Banners pair lifestyle and product photography with
a serif headline set over the image or on a colored panel — "Pairs to Unplug In", "All Things Cozy" on a burgundy panel,
"TAKE THE TRAIL", "Football Fan Shop" on bright blue, "Talk About Texture", "Slip In, Move On", "The HOKA Arahi 9" with a
"JUST DROPPED" tag on green, "NEW IN COACH" — each with plain "Shop Women's / Shop Men's / Shop Kids'" links. An orange
#ffb967 band hosts "October Calls For" with four category tiles. Product carousels ("Current Best Sellers", "Cole Haan
Classics") show grey-backed product cards with color swatch dots, brand, name, price and star ratings. "Ways to Shop &
Save" offers app and Prime cards with yellow buttons, a yellow #ffe336 "Join Our Email List" band holds an email field
and black SIGN UP button, and a four-column footer closes. The voice is friendly and seasonal ("Sweater weather is
here—and so are sherpa-lined pairs").

A black "10% OFF" side tab with a close icon appears at the left edge of the capture; it is a promotional tab, not a
page button, and is not documented as the primary button.

## Colors

- **Black and white** — `ink` / `primary` #000000 for text (8,193 measured characters, by far the most), buttons, the
  top strip and the wordmark; `canvas` #ffffff.
- **Promo bands** — `band-orange` #ffb967 (the largest colored area, "October Calls For") and `band-yellow` #ffe336
  (email signup). The capture also shows editorial panels in burgundy, blue, teal and green that are part of the
  banner imagery.
- **Yellow button** — `button-yellow` #ffe300 for "DOWNLOAD NOW" and "LINK NOW".
- **Greys** — `surface-secondary` #f7f7f7 (product-card backgrounds; `--color-bg-secondary`), `hover-grey` #f1f1f1,
  `ink-secondary` #454545 (`--color-text-secondary`), `ink-tertiary` #757575 (`--color-text-tertiary`),
  `border-primary` #c9c9c9 (`--color-border-primary`).
- **Sale** — `sale-red` #d12015 for sale prices and discount text (`--color-border-alert-error` uses the same value);
  `link-highlight` #c0000a (`--color-text-text-link-highlight`).
- **System accents** — `accent-blue` #210efa (`--color-text-text-accent`, `--color-icon-icon-hover`,
  `--color-border-border-active`) and `info-navy` #17166c (`--color-surface-surface-primary-contrast`) come from the
  CSS token set.

## Typography

Fonts are served from Amazon's media CDN (`m.media-amazon.com/images/G/01/zappos/ui/fonts/`):

- **Caslon Ionic** (`caslon-ionic-web`, Medium) — section titles: **24px / 28.8px, 500, -0.36px** ("October Calls
  For", "Current Best Sellers", "Join Our Email List"). Banner headlines in the capture are also set in a serif.
- **Modern Gothic** (`modern-gothic-web`: Light 300, Regular 400, Medium 500, Bold 700) — everything else. Base text
  **16px / 21.6px, 400, -0.16px** (the most frequent size, 6,257 characters); card and module titles **18px / 21.6px,
  500, -0.18px**; small body **14px / 19.25px, 300, -0.14px**; buttons **14px / 18.9px, 500, +0.7px, uppercase**.
  The header category row is 14px/500 uppercase with -0.14px tracking.

Caslon Ionic accounts for 93 measured characters against Modern Gothic's 8,569: the serif is reserved for titles. CSS
also declares `--font-family-styrene` and `--font-family-schnyder`, which did not render visible text on this page.

## Layout

At 1280px: black promo strip 0/38, a long white section 38/1617 (header and three full-width banners), the orange
category band 1655/543 (4 columns), a long white section 2198/3836 (banners, product carousels up to 5 across, Ways to
Shop & Save), the yellow email band 6034/254 and the white footer 6288/572 (4 columns). The header measures 125px with
10 visible links. `--grid-gap` is 32px. Spacing steps: 1, 3, 4, 8,
10, 12, 16, 20, 24 and 28px; product cards use 12px padding.

## Elevation & Depth

Elevation is minimal. Three subtle shadows were measured: a 0.5px 30% black ring
(`rgba(0, 0, 0, 0.3) 0px 0px 0px 0.5px`, 3 elements), `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px`, and
`rgba(0, 0, 0, 0.04) 4px 8px 8px 0px`. Product cards sit on #f7f7f7 rather than being lifted. Carousel arrows are small
white circles over imagery.

## Shapes

The page is mostly square: banners, header, inputs and nav have 0 radius. **2px** rounds buttons; **8px** rounds
product cards; **9999px** is the most frequent radius (155 elements) — the color swatch dots and round icon buttons.
The "10% OFF" tab uses a single rounded corner (`0 16px 0 0`).

## Components

- **Primary button** — "SIGN UP": #000000 fill, white Modern Gothic 14px/500 uppercase with +0.7px tracking, 2px
  radius, 0 24px padding, 56px tall.
- **Yellow button** — "DOWNLOAD NOW" / "LINK NOW": #ffe300, black text, 1px black border, 2px radius, 0 16px padding,
  48px tall.
- **Search** — wide field (30px input, 16px text) with a SEARCH button that hovers to #f7f7f7.
- **Category nav** — uppercase 14px/500 links; "Sale" in red; "Help & Support" hovers to #f1f1f1.
- **Editorial banner** — full-width photo, or photo + solid color panel, with a Caslon Ionic headline, one-line copy
  and underlined "Shop Women's / Shop Men's" links.
- **Product card** — #f7f7f7 image well with 8px radius, heart icon, "Best Seller" tag, swatch dots, brand (bold),
  name, gender, price (sale in #d12015 with struck-through original) and star rating.
- **Email band** — #ffe336 band, serif title, underlined email field, black SIGN UP button.
- **Footer** — four link columns (About Zappos, Customer Service, Resources, Explore Zappos), social icons, legal row.

## Design System Architecture

No public Zappos brand guideline or design system was found: https://www.zappos.com/about links only to the affiliate
program, the brands index and careers, and https://www.zappos.com/c/press returned 404.

The shipped CSS exposes a semantic token layer in `:root`: surfaces (`--color-surface-surface-default-minimal`,
`--color-surface-surface-secondary-bold: rgb(244 153 90)`, `--color-surface-surface-tertiary-moderate`,
`--color-surface-surface-success`, `--color-surface-surface-info`), text (`--color-text-secondary`,
`--color-text-tertiary`, `--color-text-link`, `--color-text-text-accent`, `--color-text-text-link-highlight`), borders
(`--color-border-primary`, `--color-border-border-minimal`, `--color-border-border-bold`,
`--color-border-alert-error`), icons, overlay (`--color-overlay: rgb(0 0 0/0.25)`), font families (body, button,
Caslon Ionic, Styrene, Schnyder) and `--grid-gap: 32px`. Fonts are hosted on Amazon's CDN.

## Do's and Don'ts

**Do**
- Keep the page white and black; let photography and a few promo bands (#ffb967, #ffe336) bring color.
- Use Caslon Ionic 500 only for section and banner titles; set everything else in Modern Gothic.
- Make buttons uppercase 14px/500 with +0.7px tracking and only 2px radii.
- Show products on #f7f7f7 image wells with swatch dots, ratings and clear prices; mark sale prices in #d12015.
- Use plain underlined "Shop …" text links under banners.

**Don't**
- Don't round banners or the header; the layout is square.
- Don't use the serif for body text.
- Don't add heavy card shadows.
- Don't treat the "10% OFF" side tab as the main call to action.

## Responsive Behavior

Measured at 390px:

- Section titles: Caslon Ionic **20px / 24px, -0.3px** (desktop 24px); the "Ways to Shop & Save" title stays 24px.
- Body sizes stay 16px and 14px/19.25px; a 10px size also appears.
- Header: 49px tall with a "Show Search" control and a menu toggle labelled "Navigation".
- Bands: black promo 0/59, header 59/49, hero banner 108/887, a #5b201e burgundy panel 995/201, banners and orange
  #ffb967 strips (1700/64, 2047/120), a #badfd9 panel 3021/130, product rows, #f5eee3 panels, the yellow email band
  6061/327 and the footer 6388/598. Content insets are 20px.
- The "10% OFF" tab keeps the same 56px height on mobile.

Menu contents were not measured.

## Iteration Guide

1. White canvas, black text; a black promo strip above a header with wordmark, wide search and uppercase category row.
2. Stack full-width editorial banners with Caslon Ionic headlines and underlined "Shop …" links.
3. Insert a #ffb967 band with category tiles and a Caslon Ionic 24px title.
4. Build product carousels with #f7f7f7 8px image wells, swatch dots, ratings and prices.
5. Use black 56px SIGN UP and yellow #ffe300 48px buttons, uppercase, 2px radius.
6. Close with a #ffe336 email band and a four-column footer; on mobile, 20px section titles and 20px insets.
