---
version: alpha
name: eBay
category: "Design Systems"
description: "eBay's homepage runs on the Evo design system: Market Sans (Regular 400, Bold 700) on a white #ffffff page with #191919 ink, an accent blue #0968f6 Search button with a 44px radius, near-black #191919 pill 'Shop now' buttons, 16px-radius image tiles and a #f7f7f7 footer band."
colors:
  canvas: "#ffffff"
  page-largest: "#f7f7f7"
  ink: "#191919"
  primary: "#0968f6"
  on-primary: "#ffffff"
  primary-hover: "#382aef"
  ink-muted: "#707070"
  ink-subtle: "#555555"
  ink-input: "#000000"
  ink-blue: "#003aa5"
  ink-navy: "#01193d"
  carousel-sky: "#0aa7ff"
  attention: "#d50b0b"
  confirmation: "#288034"
typography:
  display:
    fontFamily: "\"Market Sans\", Arial, sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 46px
  display-mobile:
    fontFamily: "\"Market Sans\", Arial, sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 40px
  section-title:
    fontFamily: "\"Market Sans\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
  body:
    fontFamily: "\"Market Sans\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.8576px
  link:
    fontFamily: "\"Market Sans\", Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  footer-heading:
    fontFamily: "\"Market Sans\", Helvetica, sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 12px
  nav:
    fontFamily: "\"Market Sans\", Helvetica, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 16.5px
  button:
    fontFamily: "\"Market Sans\", Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 700
  button-secondary:
    fontFamily: "\"Market Sans\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
  input:
    fontFamily: "\"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
rounded:
  form: 8px
  tile: 16px
  md: 20px
  search: 44px
  xl: 50px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5.75px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.search}"
    padding: 0px 20px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 10px 16px
    height: 40px
  button-on-image:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 10px 16px
    height: 40px
  search-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-input}"
    typography: "{typography.input}"
    rounded: 44px 0px 0px 44px
    padding: 0px 44px
    height: 40px
  select:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.form}"
    border: "1px solid #8f8f8f"
    height: 40px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.footer-heading}"
    padding: 20px 0px 40px
---

# eBay

## Overview

eBay's US homepage (www.ebay.com, measured 2026-10 at 1280px, title "Electronics, Cars, Fashion, Collectibles & More | eBay") is a retail front door built around one oversized search bar. The header is white: a thin utility row ("Hi! Sign in or register", Deals, Brand Outlet, Help & Contact, ship-to zip, Sell, Watchlist, My eBay, bell and cart), then the four-color eBay wordmark, "Shop by category", a wide outlined search field with a camera icon and an "All Categories" select, and the blue **Search** button. A row of category links (Saved, Electronics, Motors, Fashion, Collectibles and art, Sports, Health and beauty, Industrial equipment, Home and garden, Deals, Sell) closes the header.

Below it, the capture shows a rotating hero carousel ("Upgrade your ride", with four slides measured, some on full-color backgrounds) laid out as headline, one sentence and a near-black "Shop now" pill on the left and a mosaic of product photos on the right. Then come square image tiles ("The future in your hands": Laptops, Computer parts, Smartphones...), a grey "Shopping made easy" banner with a "Start now" pill, a full-bleed orange lifestyle photo ("There's a deal for you, too"), a "Today's Deals" product rail with heart buttons, red discount captions and struck-through prices in THB, a "Trending on eBay" tile row, a near-black "Endless accessories. Epic prices." band with tilted product cards, and a light grey footer with five link columns.

Microcopy is short, friendly and sales-led ("Shopping made easy", "Endless accessories. Epic prices."). Photography is product cut-outs on light grey plus one lifestyle photo per page.

## Colors

The homepage maps to eBay's Evo color variables, which ship on the root:

- **Canvas `#ffffff`** (`--color-background-primary`) is the page background and the dominant color of the capture.
- **Secondary `#f7f7f7`** (`--color-background-secondary`) covers the largest measured area: the footer band and grey content banners.
- **Ink `#191919`** (`--color-foreground-on-primary`, `--color-background-strong`) is the most-read text color (1,823 weighted characters) and the fill of the dark "Shop now"/"Start now" pills and the dark promo band.
- **Accent blue `#0968f6`** (`--color-background-accent`, `--color-border-accent`) fills the Search button, the only blue CTA on the page. Its hover fill measures `#382aef`.
- **Muted text `#707070`** (`--color-foreground-secondary`) is the second most-read color; `#555555` and `#003aa5` follow as smaller text colors, and `#01193d` is the headline color on one carousel slide.
- **Attention red `#d50b0b`** (`--color-background-attention`) and **confirmation green `#288034`** (`--color-background-confirmation`) are system status colors; the capture shows red on the "Free shipping" badge and discount captions.
- **`#0aa7ff`** is the background of one hero carousel slide (461 area units).

eBay Playbook states that the "core colors are our 4 logo colors" (red, blue, yellow, green) and that the full palette has "17 color families (including neutral) with 8 shades in each family, totaling 136 colors". The swatches on that page are images, so no logo hex values are recorded here; the logo colors appear only in the wordmark.

## Typography

Every measured character is set in **Market Sans** (3,681 weighted characters, the only family), loaded as `MarketSans-Regular-WebS.woff2` and `MarketSans-Bold-WebS.woff2` from ir.ebaystatic.com. eBay Playbook describes it as "Designed exclusively for eBay" and says "We use both bold and regular weights in all of our applications"; the measured weights are exactly 400 and 700.

- **Display**: 36px / 46px Bold for hero and band headlines (30px / 40px on mobile).
- **Section title**: 24px Bold ("Today's Deals", "Trending on eBay").
- **Body**: 16px / 22.8576px Regular for hero sentences.
- **Links and tile labels**: 14px / 21px, the most-read size on the page (1,400 weighted characters).
- **Footer headings**: 12px Bold; footer links and utility nav 11px to 12px.
- **Buttons**: 14px Bold on Search, 16px / 20px Bold on pills.
- **Search input**: "Helvetica Neue", helvetica, arial, 16px.

The root also declares an Evo type scale, for example `--typography-display-1: 600 2.875rem/56px`, `--typography-display-2: 600 2.25rem/46px`, `--typography-display-3: 600 1.875rem/40px`, `--typography-title-1: 600 1.5rem/32px`. Market Sans is proprietary; the site's declared fallbacks are Arial and Helvetica, and Playbook says unsupported scripts "revert to Google Sans on Android and San Francisco on iOS".

## Layout

The desktop page is 1280px wide and 3,135px tall, with content running from x 48 to 1232 (a 1,184px header and footer). Tile rows reach seven columns ("The future in your hands", "Trending on eBay") and the deals rail five visible cards plus overflow. Promo bands (orange photo, near-black band) are full-bleed with copy starting at x 81. Measured gaps are mostly 12px, 4px and 16px; the Evo root sets `--spacing-page-grid-margin: 16px` and `--spacing-page-grid-gutter: 8px`. Density is high in the header (three rows in 102px) and moderate below.

## Elevation & Depth

eBay is almost flat. Only one box shadow was measured on the homepage, `rgba(0, 0, 0, 0.07) 0px 4px 12px 0px`. Separation comes from the `#f7f7f7` grey surfaces behind product photos, the dark `#191919` band and full-bleed photography. The "Endless accessories" band adds depth with rotated white product cards in the art itself, not with CSS shadows. The search field is defined by a dark outline in the capture rather than a shadow.

## Shapes

- **16px** is the most common radius (47 elements; `--radius-large`, `--radius-photo-large`) on image tiles and deal cards.
- **Pills**: the "Shop now"/"Start now" buttons compute to 15984px (22 elements), recorded as `pill`.
- **44px** rounds the Search button and the left end of the search field (`44px 0px 0px 44px`).
- **8px** (`--radius-form-input`, `--radius-medium`) rounds selects such as the footer "United States" site picker.
- 20px and 50px also appear; 50% is used for the circular carousel arrows.

## Components

- **Search button**: `#0968f6`, white Market Sans 14px Bold, 44px tall, padding 0 20px, 44px radius; hover `#382aef`.
- **Dark pill**: `#191919` fill, `#f7f7f7` label, 16px Bold (14px on "Start now"), 40px tall, padding 10px 16px. Hover was measured with no color change.
- **Light pill on imagery**: `#ffffff` fill, `#191919` label, same size; used on the photo and dark bands.
- **Search field**: white, 40px, padding 0 44px for the magnifier icon, "Search for anything" placeholder, joined to the category select.
- **Category tile**: square photo on light grey with 16px radius and a 14px label below.
- **Deal card**: photo tile with a heart button, red promo caption, two-line title, bold price and struck-through original price.
- **Carousel controls**: dot pagination plus previous, next and pause buttons on the hero.
- **Site select**: white, 8px radius, 1px solid `#8f8f8f` border, `#707070` text, 40px tall.

## Design System Architecture

eBay publishes its brand and design system, **Evo**, at https://playbook.ebay.com/ ("our brand and design system"), with Foundations (Logo, Color, Typography, Photography, Iconography, Motion, Writing, Accessibility and more), a Design system section, Expressions and Resources. The web implementation is **Skin**, "Pure CSS framework designed & developed by eBay for a branded, e-commerce marketplace" (https://github.com/eBay/skin, docs at https://opensource.ebay.com/skin/), which ships SCSS variables under `src/sass/variables/`. The homepage exposes the token layer directly as 400 root custom properties with semantic names: `--color-background-primary/secondary/accent/attention`, `--color-foreground-on-*`, `--radius-small/medium/large`, `--radius-form-input`, `--typography-display-1..3`, `--spacing-page-grid-*`, `--breakpoint-small: 512px`, plus `--expressive-theme-*` pairs (background and foreground per color family) for campaign bands.

## Do's and Don'ts

- Do keep a single blue action: `#0968f6` is reserved for Search; merchandising CTAs are `#191919` or white pills.
- Do set everything in Market Sans Regular and Bold only.
- Do use 16px rounded tiles with light grey photo backgrounds for categories and products.
- Do write headlines as short, plain sentences in sentence case.
- Don't add drop shadows to cards; the page measures one shadow in total.
- Don't use the four logo colors as UI colors outside the wordmark.
- Don't mix square buttons with the pill system on the homepage.

## Responsive Behavior

Measured at a 390px mobile viewport: headlines drop from 36px / 46px to 30px / 40px, section titles from 24px to 20px, and hero body text from 16px to 14px / 20.0004px. The first mobile button is the dark "Shop now" pill (14px Bold, 40px tall). Content edges sit at x 16 and 374, matching `--spacing-page-grid-margin: 16px`. Six header links stay visible and the extractor recorded a header toggle labelled with the ship-to location. The orange photo band, dark band and `#f7f7f7` footer keep their order. The most-read mobile size is 14px. Behavior between 390px and 1280px was not measured; the root declares breakpoints such as `--breakpoint-small: 512px` and `--breakpoint-android-expanded: 800px`.

## Iteration Guide

1. Build the header first: utility row at 11px, wordmark, outlined search with the 44px-radius blue Search button.
2. Set all type in Market Sans 400/700, headlines 36px / 46px, labels 14px.
3. Lay content between x 48 and 1232 with seven-column tile rows and 12px gaps.
4. Use 16px radii on tiles and pills for every merchandising button.
5. Alternate white sections with one `#f7f7f7` banner, one full-bleed photo and one `#191919` band.
6. Pull further values from the Evo root variables and Playbook rather than inventing new ones.
