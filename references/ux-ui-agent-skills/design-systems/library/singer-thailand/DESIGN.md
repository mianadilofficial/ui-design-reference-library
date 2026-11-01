---
version: alpha
name: "Singer Thailand"
category: "Thai Brands"
description: "Thai appliance and phone e-commerce storefront set entirely in PSL Kanda: white #ffffff canvas, crimson #e50040 header strip and footer, #dd191d red nav tab with #ffeb3b yellow text, #282828 body ink, square 0px buttons, #e5e5e5 hairlines."
colors:
  canvas: "#ffffff"
  ink: "#282828"
  primary: "#dd191d"
  on-primary: "#ffeb3b"
  surface-crimson: "#e50040"
  surface-crimson-deep: "#a80331"
  ink-muted: "#999999"
  ink-secondary: "#686868"
  ink-stock-green: "#00bf67"
  ink-maroon: "#800000"
  hairline: "#e5e5e5"
  text-input-text: "#484848"
typography:
  display:
    fontFamily: "\"PSL Kanda\""
    fontSize: 40px
    fontWeight: 400
    lineHeight: 50px
  display-mobile:
    fontFamily: "\"PSL Kanda\""
    fontSize: 50.6654px
    fontWeight: 400
    lineHeight: 63.3318px
  heading:
    fontFamily: "\"PSL Kanda\""
    fontSize: 52.6148px
    fontWeight: 700
    lineHeight: 65.7685px
    textTransform: uppercase
  body:
    fontFamily: "\"PSL Kanda\""
    fontSize: 26.3076px
    fontWeight: 500
    lineHeight: 43.6706px
    textTransform: uppercase
  button:
    fontFamily: "\"PSL Kanda\""
    fontSize: 20.4611px
    fontWeight: 500
    lineHeight: 52px
    textTransform: uppercase
  link:
    fontFamily: "\"PSL Kanda\""
    fontSize: 19px
    fontWeight: 400
    lineHeight: 31.54px
  input:
    fontFamily: "\"PSL Kanda\""
    fontSize: 20.4611px
    fontWeight: 400
    lineHeight: 33.9654px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 12px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 5px
  s4: 10px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 28px
  s9: 30px
  s10: 33px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 52px
  button-secondary:
    backgroundColor: "{colors.surface-crimson}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 45px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
  nav-link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 5px 26px 4px 10px
    height: 40px
  footer:
    backgroundColor: "{colors.surface-crimson}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

# Singer Thailand

## Overview

The measured site is singerthai.co.th, the Thai-language storefront titled "Singer Homepage TH" (document language `th`). It is an e-commerce catalogue for appliances, phones and consumer electronics with an installment-credit offer ("สินค้าผ่อนชำระโดยสินเชื่อ", "SG FINANCE+ ONLINE") layered on top. The capture shows a crimson utility strip across the very top, a white header with a spaced-letter red "SINGER" wordmark, a category dropdown joined to a search field, a wishlist heart and a cart showing "฿0.00", then a two-row navigation, a full-width photographic hero, two promotional banner images, a maroon section heading, and a four-column grid of outlined product cards. The page is 5724px tall at the 1280px desktop pass.

The personality is a dense, promotional Thai retail catalogue: one typeface (PSL Kanda carries 3430 of the measured characters, 100 percent of the sampled text), a white canvas, flat red and crimson blocks, thin grey card outlines and almost no rounding. Everything is rectangular and loud rather than refined.

## Colors

The measured palette is small. White `#ffffff` is the canvas (5240 area weight). The dominant brand surface is crimson `#e50040` (882 area weight), used for the top utility strip, the search button, the footer and the secondary button "ติดตามข่าวสาร". A deeper crimson `#a80331` appears in a small area (135). The detected primary call to action is the "SG FINANCE+ ONLINE" navigation tab filled `#dd191d` with yellow `#ffeb3b` text; this is a measured nav tab, not a checkout button, and it is the only place the yellow appears.

Text is `#282828` (2167 characters), white on red surfaces (625), muted grey `#999999` (434, SKU lines and placeholders), secondary grey `#686868` (80), a green `#00bf67` (64) for the "มีสินค้า" in-stock label, and maroon `#800000` (37) for the section heading. Card and field hairlines are `#e5e5e5` (29 border instances). Input text is `#484848`.

The page also exposes Bootstrap's default custom properties (for example `--primary: #007bff`); these are framework defaults, were not observed on rendered brand surfaces, and are not part of the palette.

## Typography

PSL Kanda is the only family measured, loaded at weights 400 and 200 per the page's loaded-font list; the rendered text uses 400, 500 and 700. Because it is a bespoke Thai display face that is not on a public CDN, a front end that cannot license it needs a Thai-capable substitute; Kanit and Sarabun are suggestions only and were not measured on this site.

Measured scale (desktop): h1 40px / 50px line height at 400 (the h1 element is present but its text is empty); section heading (h2) 52.6148px / 65.7685px at 700, uppercase, maroon; body text 26.3076px / 43.6706px at 500; navigation and button label 20.4611px / 52px at 500 uppercase; link 19px / 31.54px at 400; input text 20.4611px at 400. The most frequent text size is 20.4611px (1999 characters), then 19px (1113). Type is large for a retail site because the Thai face has a small x-height.

## Layout

At 1280px the content is a boxed grid with roughly even outer gutters. Products sit in a four-column grid of outlined cards: image on top, a product name truncated with an ellipsis, a SKU line with stock state at the right ("มีสินค้า" or "Out of stock"), then a price such as ฿39,990.00. Spacing tokens recorded from padding frequency are 1, 3, 5, 10, 15, 16, 20, 28, 30 and 33px; 15px is the most common padding (102 instances). Banners and the hero are full-bleed or near-full-width photography.

## Elevation & Depth

Depth is mostly flat. The extraction recorded three shadows: `rgba(0, 0, 0, 0.2) 0px 0px 20px 0px` (6 uses), `rgba(0, 0, 0, 0.1) 0px 0px 10px 0px` (2) and `rgba(0, 0, 0, 0.5) 0px 5px 10px 0px` (2). Separation otherwise comes from `#e5e5e5` outlines on cards, the cart box (`2px solid #e5e5e5`) and the fields.

## Shapes

Rectangles dominate. The primary button, secondary button, nav items, inputs and footer all carry `0px` radius in the components list. Radii seen elsewhere: 2px, 3px, 4px, 12px, 50% (round badges such as the cart count) and 4px on the cart outline. The secondary button measures `0px 3px 3px 0px`, a flush-left join to an adjacent email field.

## Components

- Primary button / nav tab: fill `#dd191d`, text `#ffeb3b`, 20.4611px 500 uppercase, 52px tall, 0px radius.
- Secondary button ("ติดตามข่าวสาร"): fill `#e50040`, white 19px text, `0px 20px` padding, 45px tall.
- Search/category field: white, `#484848` text, 40px tall, padding `5px 26px 4px 10px`, 0px radius.
- Cart outline button: 44px tall, `2px solid #e5e5e5`, 4px radius.
- Footer: `#e50040` fill with white text, 635px tall.
- Product card: white, thin grey outline, ellipsis-truncated title, grey SKU, green in-stock marker.

## Design System Architecture

No public design system or brand guideline was found: the homepage HTML was opened and links to none, and no search was run. The de-facto system is a Bootstrap-derived theme: the root variables include Bootstrap's `--breakpoint-sm` 576px, `--breakpoint-md` 768px, `--breakpoint-lg` 992px and `--breakpoint-xl` 1200px, and the loaded fonts include a "icons-blank-theme" icon font and FontAwesome. Brand colors are applied directly in theme CSS rather than through named variables.

## Do's and Don'ts

Do keep the canvas white and use crimson `#e50040` as the large flat brand surface. Do use PSL Kanda for all Thai and Latin text. Do keep corners square on buttons and fields. Do keep prices bold-weight and in the `฿` format with two decimals.
Don't use the Bootstrap blue `#007bff`. Don't introduce gradients or rounded pill buttons, which no measured component uses. Don't use yellow `#ffeb3b` outside the highlighted finance tab. Don't document the cart count badge or any popup as brand UI.

## Responsive Behavior

The mobile pass was measured at 390px. There h1 is 50.6654px / 63.3318px at 400, the h2 section heading 32.3px at 700, body text 26.3076px at 500, and the primary button candidate is "ติดตามข่าวสาร" on `#e50040` at 19px with `0px 20px` padding and 45px height. The navigation measures 22.1673px at 700, `#ffeb3b` text on white, `20px 10px` padding, 844px tall, with a `rgba(0, 0, 0, 0.1) 0px 3px 2px 0px` shadow. The measured mobile font sizes are 20.4611px, 19px, 26.22px, 22.1673px, 26.3076px and 32.3px. Layout reflow of the product grid and hero on mobile was not measured.

## Iteration Guide

1. Start from white, `#282828` text and one crimson `#e50040` band.
2. Set every string in PSL Kanda; use 20.4611px for UI labels and 19px for links.
3. Build cards with an `#e5e5e5` outline, grey SKU (`#999999`), price at 500 weight.
4. Square off all buttons; reserve `#dd191d` plus `#ffeb3b` for one highlighted nav tab.
5. Re-measure with the extractor before adding any new color, size or radius, and record any new value in SOURCES.json.

### Microcopy and imagery

The voice is promotional Thai retail. The top strip carries utility links ("ค้นหาสาขา" branch finder, "ติดตามคำสั่งซื้อ" order tracking, "สมัครตัวแทนจำหน่าย" dealer sign-up, "สมัครสมาชิก Singer" member sign-up, a login link and a TH language switch). Navigation labels are short category names (smartphones, appliances, TV and speakers, air conditioners, EV charger, accessories). Imagery is photographic: a staged group photo in the hero, white-background product shots for phones, a television and air conditioners, and illustrated promotional banners with QR codes. Product names are set in capitals, with a truncated title, a SKU line and a bold price beneath.
