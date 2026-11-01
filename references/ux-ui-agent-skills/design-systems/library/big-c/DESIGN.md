---
version: alpha
name: Big C Online
category: "Thai Brands"
description: "Big C Online (bigc.co.th, Thai hypermarket e-commerce home page): a white canvas with #262626 text in Noto Sans Thai, a lime-green #93d600 button with dark text and 6px radius, red #fb2a10 sale prices, blue #0066ff links, and a very dense grid of promotional banners and product cards."
colors:
  canvas: "#ffffff"
  ink: "#262626"
  primary: "#93d600"
  on-primary: "#262626"
  primary-tint: "#e6ffd5"
  sale-red: "#fb2a10"
  link-blue: "#0066ff"
  ink-strong: "#000000"
  ink-muted: "#989898"
  ink-soft: "#434343"
  hairline: "#ececec"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", sans-serif"
    fontSize: 22px
    fontWeight: 600
    lineHeight: 30px
  subheading:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
  button:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  nav:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 13px
  pill-lg: 24px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 36px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary-tint}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 8px 12px
    height: 36px
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
    padding: 0px 8px
    height: 48px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.sale-red}"
    rounded: "{rounded.md}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
---

## Overview

This file documents the Big C Online home page as re-measured on 2026-10-16 at `https://www.bigc.co.th/` (language Thai, 1280px wide, 15151px tall, 14897 visible elements; the `ch2-dialog` consent dialog hidden before measurement). It is the online storefront of the Big C hypermarket chain and is built as a very long, promotion-dense retail page rather than a minimal brand page. The first band (14144px) opens with a header showing a delivery-address prompt ("จัดส่งที่", "กรุณาเลือกที่อยู่จัดส่ง"), a language switch (TH) and a login/register link ("เข้าสู่ระบบ/ลงทะเบียน"), then a full-width promotional hero banner (a "Flash Sale" offer), the section "หมวดหมู่" (Categories) with round category icons, a stack of themed banners ("Big Deal", "Fresh", "Beauty Fair", coffee-month and brand-day banners titled "Big Brand Day | Nescafe" and "Big Brand Day | Dutchmill DNA", plus a Fanta promotion), and rows of product cards with sale prices, ratings and green add buttons. A 418px green-tinted media band follows with the line "มาช้อปที่บิ๊กซีออนไลน์" (Come shop at Big C Online) and three benefit headings: "สั่งง่าย อยู่ที่ไหนก็ช้อปได้", "ส่งไว ทันใจ ทั่วไทย" and "ช้อปคุ้ม ครบตรงใจ". A 1438px footer band lists four columns ("บิ๊กซีออนไลน์", "วิธีช้อปออนไลน์", "เกี่ยวกับบิ๊กซีออนไลน์", "ข้อตกลงและเงื่อนไข") with app-store badges.

Microcopy is Thai, price-first and promotional: "1 แถม 1" (buy 1 get 1) appears on the lime button measured as the primary call-to-action.

## Colors

Backgrounds by area: #ffffff (30330, by far the largest), lime #93d600 (548), light green #e6ffd5 (533), pink #ffe9ec (372), translucent white overlays, #ff9595, #fff699 and #93a2e5 (promotion tiles, 197 each) and blue #0066ff (71). Text colors by characters: #262626 (19342), red #fb2a10 (7247), blue #0066ff (4020), #000000 (3895), #989898 (1153), #434343 (930), #0079ff, #2b2e40 and #ffffff (123).

- **canvas #ffffff**; **ink #262626**: default text and the label on the green button.
- **primary #93d600**: the brand lime used on buttons and the 1px button border; on-primary is #262626, not white.
- **primary-tint #e6ffd5**: pale green fill of the secondary "หมวดหมู่ทั้งหมด" (all categories) button.
- **sale-red #fb2a10**: price and discount text, and 265 red borders.
- **link-blue #0066ff**: links and some fills; **ink-strong #000000**: header and nav text.
- **ink-muted #989898** and **ink-soft #434343**: secondary text; **hairline #ececec**: 1px borders (461 uses).

The stylesheet has many more palette entries (oranges, pinks, greens in oklch); only the values above were read on the rendered page.

## Typography

One family is rendered: **Noto Sans Thai** (37514 characters), loaded at weights 400, 500, 600 and 700, with Noto Sans and sans-serif as fallbacks.

- **display**: 22px, weight 600, line-height 30px (section heading "หมวดหมู่").
- **subheading**: 16px, weight 500, line-height 24px.
- **body**: 14px, weight 500, line-height 21px (the body element itself measures 14px/20px, weight 400).
- **button**: 16px, weight 600, line-height 24px. **nav**: 16px, weight 400.
- Characters by size: 14px (23365), 12px (4965), 10px (4734, price and badge fine print), 18px, 20px, 16px, 22px, 28px. Weights by characters: 500 (23683), 600 (7643), 400, 700.

Font substitutes: Noto Sans Thai is an open font; no substitute is needed.

## Layout

Three bands (14144px, 418px, 1438px) with up to 6 columns in a band and 67 columns counted across carousels. Product rows are horizontal carousels with "Next slide" arrow buttons. The page is extremely dense: gaps are mostly 4px (2352 uses), 2px (610) and 8px (190); paddings are 8px (880), 4px (679), 2px, 1px and 16px (282). Section headings span the 1240px content width; large banners are full-bleed.

## Elevation & Depth

Shadows are small: `0 1px 2px rgba(0,0,0,0.25)` (67 uses, cards and buttons), `0 0 10px rgba(0,0,0,0.1)` (17) and `0 4px 10px rgba(0,0,0,0.05)` (1). Hairline borders (#ececec) do most of the separation between product cards.

## Shapes

Radii by frequency: 4px (1291), 2px (567), 6px (502, buttons), 8px (175), a full-pill value (3.35544e+07px, 31 elements: badges and round controls), 24px (4) and 13px (1). Buttons use 6px; cards use 6px with a 1px #ececec border; category icons are round.

## Components

- **Primary button** ("1 แถม 1"): #93d600 fill and border, #262626 text, 16px/600, 6px radius, padding 0px 12px, 36px high, 82px wide.
- **Secondary button** ("หมวดหมู่ทั้งหมด"): #e6ffd5 fill, #262626 text, 14px/500, 6px radius, padding 8px 12px, 36px high.
- **Text input**: 48px high, padding 0px 8px, 16px text.
- **Product card**: white, 6px radius, #ececec border, red sale price (#fb2a10), small gray text (#989898), green add control.
- **Header/nav**: white, black 16px links; hover fills rgb(248, 248, 248).
- **Carousel arrows**: "Next slide" circular buttons; hover fill white.

## Design System Architecture

No public Big C design-system site was opened; the de-facto system is read from the shipped CSS. It uses Tailwind (`--tw-*` variables, `--radius-4xl: 2rem`) plus an internal component layer named "unicorn" (`--unicorn-button-ghost-bg-press`, `--unicorn-button-border-hover`, `--unicorn-control-checkbox-bg-select`, `--unicorn-role-primary`) layered over color ramps such as `--color-green-light-300: #b1f752`, `--color-green-dark-300: #6ed48d`, `--color-orange-600: #fb8d01`, `--color-pink-500: #ed2355` and gray ramps. Keyframes include `heartbeat`, `fadeIn` and `bounceIn`. Durations are 300ms (16), 800ms (8), 150ms and 400ms; easing is mostly `ease`. Breakpoints are written mostly as max-width: 800px (27 declarations), 600px (26), 650px, 1000px.

## Do's and Don'ts

- Do use lime #93d600 with dark #262626 text for the main action.
- Do show prices in red #fb2a10 and keep secondary details small and gray.
- Do separate cards with a 1px #ececec border and tiny shadow.
- Do use Noto Sans Thai at 14px for dense product information.
- Don't put white text on the lime button; the measured label is #262626.
- Don't treat banner colors (pink, yellow, periwinkle tiles) as UI tokens; they come from campaign artwork.
- Don't document the consent dialog as brand UI.

## Responsive Behavior

The mobile pass at 390px recorded type sizes 14px, 12px, 10px, 16px, 18px, 20px, 22px, 28px and 30px (the same set as desktop), 11 visible header links, no menu toggle and 67 card columns, which means the mobile pass shows no change in these measurements. Mobile layout, stacking and carousel behaviour are not measured. The stylesheet declares media queries at max-width 450px, 600px, 650px, 800px, 1000px and min-width 801px.

## Iteration Guide

1. Canvas #ffffff, ink #262626, primary #93d600.
2. Type: Noto Sans Thai; headings 22px/600, body 14px/500.
3. Buttons 36px high, 6px radius.
4. Prices red #fb2a10; borders #ececec.
5. Keep campaign banners as imagery; do not copy their colors into tokens.
6. Re-measure after scrolling to load lazy product rows when adding values.

### Measured notes for implementers

The measured band headings, in order, include "หมวดหมู่" (Categories), "รวมโปรดัง ประจำเดือน" (monthly popular deals), "Big Brand Day | Nescafe" and "Big Brand Day | Dutchmill DNA". The page height of 15151px comes mostly from stacked product carousels, so a rebuild should treat each carousel as its own section with a banner above it. The login control and the language control both hover to rgb(248, 248, 248), and category links in the menu hover to the same fill while keeping text rgb(38, 38, 38). Text inputs measure 48px high with 8px side padding and 16px type. The primary button label "1 แถม 1" is short, so the 82px width comes from the 12px side padding plus the label; the secondary button is 136px wide. Red (#fb2a10) is the second most read text color after #262626, which shows how price-led the page is. The page also includes a floating chat or help control at the lower right of the capture, which is an overlay and is not part of the token set.
