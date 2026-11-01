---
version: alpha
name: "Makro PRO"
category: "Thai Brands"
description: "Makro PRO Thai wholesale online store: white canvas, brand red #e82026 price blocks and banners, gold and burgundy flash-sale panels, Noto Sans Thai at 12px, 8px-radius bordered product cards and round red add buttons."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  accent-purple: "#6109ff"
  primary: "#e82026"
  red-deep: "#a61e27"
  green-deep: "#118757"
  green-fresh: "#b9d56f"
  cream-orange: "#fdedd3"
  ink-coral: "#fa4147"
  ink-secondary: "#8e8e8e"
  ink-amber: "#bf4905"
  ink-brown: "#835111"
  hairline: "#e8e8e8"
  text-input-text: "#000000de"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.9px
  display-mobile:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 17.28px
  input:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 23px
rounded:
  xs: 4px
  sm: 5px
  md: 6px
  lg: 8px
  xl: 16px
  2xl: 32px
  3xl: 36px
  4xl: 40px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 4.88px
  s5: 5px
  s6: 6px
  s7: 6.24px
  s8: 8px
  s9: 9px
  s10: 10px
components:
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 4px 0px 5px
    height: 32px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.hairline}"
---

## Overview

Makro PRO (www.makro.pro, measured at /en; the page footer reads "Copyright © 2024-2026 CP Axtra Plc. All rights reserved.") is the online shop of the Thai wholesale cash-and-carry brand. The fetched page text is sparse: its title is "Shopping Online, enjoy wide variety with the best deals | Makro PRO", the header offers a Zipcode selector, a "Search Cheese" box, Categories, Top Brands and PRO Mall, with a TH / EN switch and wishlist, cart and account icons. The measured home page is a dense retail promotion board 10798px tall: a full-width coral-red campaign banner ("10.10 WONDER DEALS", "SAVE UP TO 60%", "GET UP TO x10 makro PRO POINT") with a 1/20 slide counter and arrow buttons, a deep red "RECOVER TOGETHER" strip with a white round arrow button, horizontally scrolling product rails (cards with a "Best Pro Picks" tag, a discount chip such as a "Buy … get discount …" chip, a title, a "Today" delivery label and a red price block with the crossed-out price and a percent-off flag), a "GOLD CONTAINER 24 HOURS ONLY" flash-sale block with a countdown (13h 21 14) in gold and burgundy, and a green "GOLD CONTAINER FRESH Value Deal" block for produce and meat. Imagery is packshots on white, so the interface is a white canvas that lets bold red and gold promotion banners carry the energy. A cookie-consent widget's variables appear in the stylesheet but not as page UI, and no popup is documented.

## Colors

`canvas` `#ffffff` covers by far the largest area (20717). The brand red is `primary` `#e82026` (area 1677, the price blocks, banners and primary actions), with `red-deep` `#a61e27` (764) and `#a3040b` (255) for the deeper burgundy of flash-sale panels, and a lighter red-pink `#fe5c69` (384) for the top banner. Measured text colors: `ink-secondary` `#8e8e8e` (4094 characters, the most-read color, used for metadata), `ink` `#000000` (3309), white (1256), `accent-purple` `#6109ff` (592, link and accent text), `ink-amber` `#bf4905` (500) and `ink-brown` `#835111` (468) for the "Limited Stock" and points chips, `#6b6b6b`, `ink-coral` `#fa4147` (345), `#e82026` text (266) and `#212124`, `#1b969e` and `#2f8af4` in small amounts. Fills for tags and promo panels include `cream-orange` `#fdedd3` (384), `green-deep` `#118757` (384) and `green-fresh` `#b9d56f` (764) for the Fresh block, `#fff2e7`, `#fff7d4`, `#eadeff` (a lilac for points chips), `#f4f4f4`, `#ecf8fe` and a near-black `#212124`. `hairline` `#e8e8e8` is the border color and `#000000de` (black at 87%) is the input text color. Cookie-widget variables (`--cc-bg`, `--color-setting-modal-cookie-policy` `#3860BE`) and the Toastify palette belong to third-party widgets and are not tokens.

## Typography

Noto Sans Thai (400 loaded in the measured stylesheet) is used for virtually all text (11486 characters), with Arial as a minor fallback (15). The page is very small-text: 12px (6617 characters, product titles and metadata), 14px (3386), 10px (676, chips and tags), 16px (624), 8px (121), 12.8px (63) and 24px (14). Product titles and prices appear bold in the capture; the measured mobile h1-equivalent "599" price is 16px weight 700 on 24px. The body token is 12.8px on 17.28px; the display token is 14px on 18.9px; the input is 16px on 23px. The promotional banners (10.10, GOLD CONTAINER) are images with their own lettering and are not live text.

## Layout

The header is a three-tier block: a top row with the language switch, a main row with the logo, a Zipcode dropdown, a long search field with icons, and wishlist, cart and account icons, then a category row. Below it, the banner is full-bleed, the rails and promo blocks are inset from the page edges, and product cards sit in horizontally scrolling rails with circular arrow buttons. Gaps are tiny: 4px (586 uses) and 8px (124); paddings are 4px (540), 8px (519), 5px (170), 6px (94) and 10px (75). A red circular "+" add button sits at the lower right of each product image.

## Elevation & Depth

Four shadows are measured: `rgba(0, 0, 0, 0.24) 0px 0px 26.664px 0px` (8 elements, floating panels), a three-layer Material-style shadow `rgba(0, 0, 0, 0.2) 0px 2px 1px -1px, rgba(0, 0, 0, 0.14) 0px 1px 1px 0px, rgba(0, 0, 0, 0.12) 0px 1px 3px 0px` (7), `rgba(0, 0, 0, 0.1) 0px 1px 10px 0px, rgba(0, 0, 0, 0.05) 0px 2px 15px 0px` and `rgba(0, 0, 0, 0.2) 0px 2px 5px 0px`. Cards are mostly flat with 1px light borders; shadows are reserved for floating controls.

## Shapes

Radii: 8px (378 elements, `rounded.lg`, cards and chips), 50% (181, round buttons and icons), 6px (75), 4px (56), 16px (47), 9999px (38, pills), 5px (22), 100px (20), 36px (18), 32px (2) and 40px (1). Product cards use 8px and carry a 1px `#e8e8e8` border; price blocks, chips and the "Zipcode" selector are pills or 4px-radius controls.

## Components

- **Search field:** a wide pill-shaped box with a magnifier icon at left and filter icon at right, input text 16px/23px, `#000000de`, 32px high with 4px 0px 5px padding.
- **Product card:** white, 8px radius, 1px `#e8e8e8` border; image, optional "Best Pro Picks" outlined tag, a lilac discount chip with a points icon ("Buy … get discount …"), title at 12px, a "Today" or "3 Days" delivery label with truck icon, an amber "Limited Stock" chip and a red price block with a percent-off segment.
- **Add button:** a small red circle with a white plus at the bottom-right of the image.
- **Flash-sale container:** burgundy or green panel with a gold lightning-bolt headline, a countdown in dark boxes and inner cards on a cream-gold frame.
- **Language switch:** "TH | EN" text buttons, `#8e8e8e`, 37px tall, 4px radius, with a `rgba(33, 33, 36, 0.04)` hover fill (measured).
- **Carousel arrows:** white circular buttons over banners.

## Design System Architecture

The page links no design system, brand guideline or press kit: the fetched content shows only the logo asset (`/images/makro-pro-logo-new.svg`), the home link and the Categories, Top Brands and PRO Mall navigation (source: https://www.makro.pro/en). The de-facto system is an application stack: the root variables include the Toastify notification library (`--toastify-toast-min-height: 64px`, `--toastify-color-warning: #f1c40f`) and a cookie-consent widget (`--cc-*`), while the Material-style three-layer shadow indicates a component library underneath. Brand values are applied in compiled application CSS.

## Do's and Don'ts

- Do keep the canvas white and use one brand red `#e82026` for prices, banners and add buttons.
- Do use gold and burgundy only inside flash-sale blocks, and green only for fresh-food promotions.
- Do keep type small (12px for titles, 10px for chips) in Noto Sans Thai.
- Do round cards at 8px and use circles for add and arrow buttons.
- Don't use the purple `#6109ff` for prices or banners; it marks links.
- Don't recolor third-party widget variables into the brand palette.
- Don't use large soft shadows on cards; only floating controls carry them.

## Responsive Behavior

The 390px mobile pass measured the price figure "599" at 16px weight 700 on a 24px line height, the footer copyright at 12.8px, and a mobile size list of 12px (9392 characters), 10px (1016), 16px (578), 14px (291), 8px (121) and 12.8px (63). Layout, rail counts, navigation form and breakpoints on mobile are not measured.

## Iteration Guide

1. Build on white with `ink` `#000000` and `ink-secondary` `#8e8e8e`.
2. Use `primary` `#e82026` for every price block and primary action.
3. Set text at 12px, chips at 10px, and use 8px-radius cards with a `hairline` border.
4. Use gold and burgundy panels for time-limited deals and green for fresh.
5. Run `node web/scripts/verify-designs.mjs --slug=makro` after changes.

## Voice

Promotional and straightforward, focused on variety and value: the title "Shopping Online, enjoy wide variety with the best deals"; navigation labels "Categories", "Top Brands", "PRO Mall"; campaign copy visible in the capture such as "10.10 WONDER DEALS", "SAVE UP TO 60%", "RECOVER TOGETHER", "24 HOURS ONLY", "Limited Stock", "Best Pro Picks" and a "Buy … get discount …" chip. The fetched text did not describe the company beyond its logo and title.
