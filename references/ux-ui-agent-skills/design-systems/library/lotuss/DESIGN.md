---
version: alpha
name: "Lotus's"
category: "Thai Brands"
description: "Lotus's Shop Online (lotuss.com/en, Thai grocery retailer): LotusSmartHL typeface at weights 400-900, white canvas #ffffff, teal #00bcb4 brand header and links, orange-red #f24822 and red #e1221c promo accents, 8px and 18px radii, dense promo-banner grid."
colors:
  canvas: "#ffffff"
  ink: "#424242"
  accent-orange: "#f24822"
  primary: "#00bcb4"
  surface-2: "#ededed"
  surface-3: "#00bcb4"
  ink-3: "#e1221c"
  ink-4: "#000000"
  ink-5: "#919191"
  ink-6: "#000000cc"
typography:
  display:
    fontFamily: LotusSmartHL, serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 30px
  display-mobile:
    fontFamily: LotusSmartHL, serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28px
  heading:
    fontFamily: LotusSmartHL, serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  body:
    fontFamily: LotusSmartHL, -apple-system, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: LotusSmartHL, -apple-system, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 8px
  xl: 12px
  2xl: 16px
  3xl: 18px
  4xl: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 20px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 0px 0px 0px 10px
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 0px 0px 0px 10px
  text-input:
    textColor: "{colors.ink-4}"
    typography: "{typography.body}"
    padding: 8px
    height: 36px
  card:
    rounded: "{rounded.lg}"
    boxShadow: rgba(0, 0, 0, 0.08) 0px 2px 12px 0px
  footer:
    textColor: "{colors.canvas}"
---

## Overview

The English page of Lotus's online store (title "Lotus's Shop Online | โลตัส ช้อปออนไลน์ online grocery shopping") is a dense, promotion-driven grocery storefront with bilingual Thai and English labels. The capture reads, from top: a teal gradient header with utility links (Download Application, Our News, a TH | EN language switch, Login and a white Register button), the yellow-white "Lotus's" wordmark, a search field with the placeholder "Search in Lotus's", a cart icon and a bordered "Choose Delivery Method - Delivery to your home or collect at a store" selector. Below that, a CATEGORIES dropdown at the left, an "All Orders" link at the right, and a large campaign banner (a 10.10 sale with Flash Sale 30 percent and coupon 10 percent, free delivery from 1,200 baht spend). A row of eight icon shortcuts follows (same-day delivery, next-day delivery, electrical appliances, my coupons, all promotions, mobile, news, Lotus's Inspires), then a heading "โปรดีลดีทุกสัปดาห์" (weekly deals) with a "ดูโปรโมชั่นทั้งหมด" link in teal, four promo cards, a trending-items carousel of blue price badges, a wide cleaning-promotion banner, and product carousels such as "Big Cleaning Day" and "Fresh Clothes Fresh Start".

The page is 12612px tall. Product cards show a photo, small "Extra Coin" and "ซื้อ 1 แถม 1" flags, the product name, a bold baht price in red-orange and a struck-through old price, with a round teal cart button at the card corner. A cookie consent wrapper was hidden during measurement and is not documented.

## Colors

White #ffffff is by far the largest background (8331), with a light grey #ededed (120) for the categories bar, a teal #00bcb4 (54, the header and cart buttons), and tints: #edfcfc (29, a pale teal), #fff3f2 (21, a pale red) and #fff9e5 (2, a pale yellow). Text is a warm dark grey #424242 (2630 characters, the main ink), white (609, on the teal header), red #e1221c (420, prices), black #000000 (291), mid-grey #919191 (184), black at 80 percent #000000cc (122), teal #00bcb4 (100, links and section actions) and orange-red #f24822 (96).

The generator assigned #f24822 as primary because it is the most prominent accent; the brand's action color visible in the header, cart buttons, "see all" links and the delivery-option outline is the teal #00bcb4, which is measured as a fill, link color and border. The tokens therefore set primary to #00bcb4 and keep #f24822 as accent-orange, and the red #e1221c is retained as the price color. The only :root variable is --swiper-theme-color #007aff, a carousel library default, which is not a brand color.

- Canvas #ffffff; surface-2 #ededed; surface-3 #00bcb4 (header fill).
- Ink #424242; ink-3 #e1221c; ink-5 #919191; ink-6 #000000cc.
- Primary #00bcb4; accent-orange #f24822.

## Typography

A single custom family, LotusSmartHL (4542 characters), covers both Thai and Latin and is loaded at 400, 500, 700 and 900. Weight 500 is the working weight (3253 characters), followed by 700 (869), 800 (291) and 400 (87). Sizes are few: 16px (2402 characters), 14px (1262), 20px (514), 10px (333), 18px and 24px. The section title style is 20px at weight 700 on 30px; the mobile version is 18px at 700 on 28px. The heading style is 14px at 500 on 20px, body text and inputs are 16px at 500 on 24px, and the nav style is 18px at 700 on 28px. No letter-spacing or uppercase transform is measured on the body; the CATEGORIES label in the capture is set in capitals.

The generous use of 500 for body text keeps small Thai glyphs readable; the typeface is the brand's own web font and no substitute is specified in the pages opened.

## Layout

A fixed content width with side margins holds everything; the header band is full width and teal, the categories bar is aligned to the left column at the width of one column, and promotional banners span the container. Cards are laid out in 4-up (promo cards), 6-up (product carousels with arrows) and 8-up (icon shortcuts) rows. Spacing values: 2px, 3px, 4px, 5px, 6px, 8px, 10px, 12px, 16px and 20px. Text inputs are 36px tall with 8px padding. Density is high: banners, badges and flags occupy most of the width, with only thin white gaps between rows.

## Elevation & Depth

Two shadows are measured: rgba(0, 0, 0, 0.15) 0px 1px 4px 0px (weight 16) on small controls and cards, and a softer rgba(0, 0, 0, 0.08) 0px 2px 12px 0px (weight 6) used for the card token. The header's delivery selector uses a light border, and product cards are white on white with the shadow separating them. Borders measured are #ededed and #00bcb4.

## Shapes

Radii are used heavily and in a ladder: 2px, 3px, 4px, 8px, 12px, 16px (top corners only, 16px 16px 0px 0px), 18px, 24px and a circle (50%). The Register button is 8px (36px tall), the All Orders button is 4px (40px tall), the delivery shortcut tiles are 4px, promo banners and product cards use 8px and 18px, and the round cart buttons use the circle radius.

## Components

- **Register button**: white fill, #424242 text and border, 8px radius, 36px tall; on hover the fill becomes #ededed.
- **All Orders**: transparent, #424242 border, 4px radius, 40px tall; hover fill rgba(0, 188, 180, 0.04).
- **Delivery tile**: 148px-tall button, transparent, teal border, 4px radius.
- **Search field**: white, 36px tall, 8px padding, 16px text.
- **Nav and link**: white text on the teal header at 18px bold.
- **Card**: white, 8px radius, shadow rgba(0, 0, 0, 0.08) 0px 2px 12px 0px.
- **Product flags**: small coloured tags such as "Extra Coin" and "ซื้อ 1 แถม 1".
- **Cart button**: teal circle at the card corner.

## Design System Architecture

No public Lotus's design system or brand guideline was found on the pages opened. The extraction records only one root variable (--swiper-theme-color #007aff), so the site does not publish named design tokens in :root; values live in component styles. The de-facto system is a teal and white palette, a single in-house typeface (LotusSmartHL) and a ladder of radii and two shadows. Source page: https://www.lotuss.com/en.

## Do's and Don'ts

- Do use teal #00bcb4 for the header, links and cart actions on white.
- Do show prices in red (#e1221c) and old prices struck through in grey.
- Do set text in LotusSmartHL at weight 500 on #424242.
- Do use 8px radii for buttons and cards and circles for icon buttons.
- Don't use the Swiper blue (#007aff) as a brand color.
- Don't add heavy shadows; the heaviest measured is 0.15 alpha.
- Don't present the cookie wrapper as part of the UI.

## Responsive Behavior

The 390px mobile pass measured: section titles at 18px weight 700 on 28px; secondary headings at 12px weight 500 on 17.1429px in black at 80 percent; body text at 12px on 18px weight 500; and the white nav text at 16px weight 700 on 24.8889px. The mobile nav text begins "Choose Delivery Method / Delivery to your home or collect at a store". Column counts, banner crops and breakpoints were not measured.

## Iteration Guide

1. Start from white, #ededed bars and #424242 text.
2. Use teal #00bcb4 for the header and actions, with red #e1221c prices and orange #f24822 accents.
3. Set everything in LotusSmartHL, weight 500 for body, 700 for titles.
4. Build dense card rows with 8px radii and the 0.08 alpha shadow.
5. Verify: node web/scripts/verify-designs.mjs --slug=lotuss.
