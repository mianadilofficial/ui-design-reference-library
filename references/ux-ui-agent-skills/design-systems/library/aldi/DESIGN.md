---
version: alpha
name: Aldi
category: "Retail & E-commerce"
description: "ALDI US storefront: navy #00005f header and buttons, white canvas, custom ALDI SUED VF typeface at 14px/600, 8px button radius, 12px pale blue #bcedfc cards, pill search field and a flat hairline-shadow header."
colors:
  canvas: "#ffffff"
  ink: "#56595e"
  primary: "#00005f"
  on-primary: "#ffffff"
  surface-card: "#bcedfc"
  ink-strong: "#343538"
  ink-heading: "#242529"
  ink-black: "#000000"
  hairline: "#e8e9eb"
typography:
  display:
    fontFamily: "\"ALDI SUED VF\""
    fontSize: 32px
    fontWeight: 700
    lineHeight: 36.8px
  heading:
    fontFamily: "\"ALDI SUED VF\""
    fontSize: 20px
    fontWeight: 600
    lineHeight: 25px
  subheading:
    fontFamily: "\"ALDI SUED VF\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: "\"ALDI SUED VF\""
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
  nav:
    fontFamily: "\"ALDI SUED VF\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 12px
  xl: 20px
  2xl: 24px
  3xl: 27px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    height: 32px
  nav:
    textColor: "{colors.canvas}"
    boxShadow: rgb(232, 233, 235) 0px 1px 0px 0px
  text-input:
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 48px 12px 28px
    height: 54px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.primary}"
    rounded: "{rounded.lg}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-heading}"
---

# Aldi

## Overview
The measured page is aldi.us, which loads the store-front at /store/aldi/storefront (the page title is "ALDI Grocery Stores - Quality Food. Everyday Low Prices."). It is a grocery e-commerce front page: a deep navy header strip (#00005f) with the ALDI logo tile, "Weekly Ads", "Buy It Again", "Find Stores" and a delivery selector, a second white row with a category menu and a pill-shaped search field, a left category rail, and then horizontally scrolling product rails titled "Price Drops", "Best Sellers" and "Fresh Produce". The capture was taken with a "How would you like to shop?" location dialog open and a grey scrim behind it; that dialog and scrim are a transactional popup and are not documented as brand UI or tokens here. The extraction was re-run once with the popup-handling batch and the dialog was still present, so measurements that fall on the scrim (the `#3435383d` background area) are ignored.

The visual voice is utilitarian and price-led: small red price tags on white, bold navy section headings, promotional banners in navy with bright graphic art, and photography of products on white. Cards that introduce editorial themes (Thanksgiving, Charcuterie, Fall Seasonal Products) use a pale blue fill (#bcedfc) with navy text.

## Colors
- **canvas** `#ffffff`: the dominant background (6794 area weight).
- **primary** `#00005f`: ALDI navy; the fill of the header strip, the "Give Us Feedback", "Shop Now" and "Add" buttons, and the body-text color on promo cards. The root variable `--ids-color-brand-primary-regular` is `#00005f`, with `--ids-color-brand-primary-dark` `#000092`.
- **on-primary** `#ffffff`: text on navy.
- **ink** `#56595e`: the most-read text color (2759 characters), used for product names; it equals `--ids-color-system-grayscale-60`.
- **ink-strong** `#343538`, **ink-heading** `#242529`, **ink-black** `#000000`: darker greys and black for body, section headings and the h1.
- **surface-card** `#bcedfc`: pale blue card fill.
- **hairline** `#e8e9eb`: the 1px header underline shadow and the measured divider color.
- Other root variables published by the site: feedback alert `#FFA500`, success `#108910` (dark `#0D720D`, extra dark `#0A610A`), brand secondary dark `#003121`, secondary extra dark `#001810`, tertiary dark `#EFE9E1` and tertiary light `#FFFFFF`. A red `#d70000` background area (8 weight) is measured; it is the price tag and "Price Drops" tile red.

`#0000ee` appears as a measured link color; it is the browser default and is not a brand color, so it is not tokenised.

## Typography
The typeface is a custom variable font named "ALDI SUED VF", loaded at weight 400 (the variable axis serves heavier weights; 400 is the only declared face in the font list). It is the only family measured (8412 characters). A proprietary face means substitutes are needed off-site; a neutral humanist or grotesque sans at weights 400, 600 and 700 is the closest category, but no substitute is published by the brand.

Measured roles:
- **display** 32px, weight 700, line height 36.8px: the h1 ("ALDI - Shop"), black.
- **heading** 20px, weight 600, line height 25px: section headings such as "Featured Pages".
- **subheading** 14px, weight 400, line height 20px: product titles.
- **button** 14px, weight 600, line height 20px.
- **nav** 16px, weight 400, line height 18.4px.

By character count: 14px (5321), 16px (2202), 17px (266), 20px (253), 11px (231), 12px (113), 24px (15), 32px (11). The interface is therefore small-type heavy; most text is 14px.

## Layout
Measured at 1280px wide. The header block is 160px tall across both rows. Content sits to the right of a left category rail and is laid out as full-width rails of five products with arrow controls at the right edge. Promotional blocks (a navy "Weekly Ad straight to your inbox" strip, a "The Lowest Prices" banner, "ALDI Finds" tiles) span the content width. Card rows of three use 297px by 303px cards.

Spacing tokens come from measured paddings and gaps; the site's own scale is published in root variables: `--ids-system-space-4` 4px, `--ids-system-space-24` 24px and `--ids-system-space-48` 48px. Button padding is 0px 16px.

## Elevation & Depth
Mostly flat. The header uses a single hairline shadow `rgb(232, 233, 235) 0px 1px 0px 0px`. The CSS also contains `0px 2px 8px rgba(0, 0, 0, 0.16)`, `0px 2px 10px -3px #999`, `0px 0px 12px 2px #c7c5c7` and `-3px -3px 5px -2px #c7c5c7`; the capture shows a soft shadowed white panel behind the "International Meals" and "Fall Meals" modules. The location dialog is a popup and is not an elevation token.

## Shapes
Radii published as root variables: 4px (`--ids-system-radius-4`), 8px (`-8`), 12px (`-12`) and 24px (`-24`). Measured usage: 12px (126 uses, cards), 8px (115, buttons), 20px (106), 50% (44, round icon buttons), 15% (40), 4px (32), 24px (25), 999px (3, the search field pill). Buttons are 8px radius; cards 12px; the search input is a full pill (999px mapped to the pill token).

## Components
- **button-primary**: navy fill, white text, 14px / 600, radius 8px, padding 0px 16px, height 40px ("Give Us Feedback").
- **button-secondary**: same fill and type, height 32px ("Shop Now").
- Outlined button ("Sign In / Register"): transparent with a 1px `#242529` border, 8px radius, 40px high, text `#242529`.
- **text-input**: the search field, 14px / 600 text in `#343538`, pill radius, padding 12px 48px 12px 28px, height 54px.
- **card**: `#bcedfc` fill, navy text, 12px radius.
- **nav**: header row with the hairline shadow and white text on navy.
- Product tiles: white, price in a red tag, struck-through old price, discount in bold, "Many in stock" status and a round navy "Add" button overlaid on the product image.

## Design System Architecture
The site exposes its own token namespace on the root: `--ids-color-brand-*`, `--ids-color-system-grayscale-*`, `--ids-color-system-feedback-*`, `--ids-system-radius-*` and `--ids-system-space-*`. The "ids" prefix is the only naming evidence for a named internal system; no public documentation or brand-guideline link was found on the pages opened (the home page links /about-us only). The storefront is served from /store/aldi/storefront. The grayscale ramp visible in the variables includes 60 `#56595E`, 70 `#343538`, 80 `#242529` and 90 `#191A1C`, matching the measured text colors.

## Do's and Don'ts
- Do use navy `#00005f` for every primary action and the header.
- Do keep text in the grayscale ramp (`#56595e`, `#343538`, `#242529`, `#191a1c`).
- Do round buttons to 8px, cards to 12px and the search field to a pill.
- Do show prices in red tags next to product photography.
- Don't tokenise the location dialog, its scrim, or any popup.
- Don't use browser-default link blue.
- Don't add heavy shadows; the header relies on a 1px hairline.

## Responsive Behavior
A 390px mobile pass was measured: the h1 stays 32px / 700 / 36.8px, the body text role drops to 12px / 400 / 18px, and the detected primary button ("Shop Now") is 12px / 600 / 18px, 32px high, still navy with an 8px radius. Navigation collapse and column counts were not measured.

## Iteration Guide
1. Start with navy `primary` and white canvas; add `surface-card` for editorial tiles only.
2. Use 14px as the working text size and 600 for buttons and headings.
3. Build rails of product tiles with a navy "Add" overlay.
4. Keep the radius ladder 8px / 12px / pill.
5. Check any new value against `web/data/extracted/aldi.json` or the `--ids-*` variables.

## Imagery and Voice
Product photography is cut out on white and shown at a consistent size within each rail. Editorial modules use full-bleed lifestyle photographs of prepared food (the capture shows tacos, soup and bread) beside a product rail. Microcopy is short and promotional: "Prices you can count on. Every single day.", "Weekly Ad straight to your inbox. Save time. Save money." and "Tonight's dinner just went global." Status labels are factual ("Many in stock", "Low fat", "Vegan", "Multigrain"). Percent-off labels are bold navy text, for example "42% off".
