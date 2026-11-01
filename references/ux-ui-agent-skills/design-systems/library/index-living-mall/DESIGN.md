---
version: alpha
name: Index Living Mall
category: "Thai Brands"
description: "Index Living Mall (อินเด็กซ์ ลิฟวิ่งมอลล์), a Thai furniture and home-goods retailer, runs a dense white storefront (#ffffff, #f6f6f6 bands) with body text #515151 and price-red #e00000, set in its own Index typeface at 16px weight 200, uppercase 32px bold section headings and 4px card corners."
colors:
  canvas: "#ffffff"
  ink: "#515151"
  primary: "#e00000"
  surface-footer: "#f6f6f6"
  surface-band: "#f2f2f2"
  ink-slate: "#6b7d85"
  ink-black: "#000000"
  ink-grey: "#616161"
  ink-body: "#212529"
  badge-pink: "#fed0d0"
  hairline: "#e4e4e4"
  text-input-bg: "#fafafa"
  text-input-text: "#a1a1a1"
  text-input-border: "#e9e7e7"
  footer-border: "#ced4da"
typography:
  display:
    fontFamily: Index, Helvetica, Arial, sans-serif
    fontSize: 17.6px
    fontWeight: 500
    lineHeight: 26.4px
    letterSpacing: 0.704px
  display-mobile:
    fontFamily: Index, Helvetica, Arial, sans-serif
    fontSize: 45px
    fontWeight: 300
    lineHeight: 45px
  heading:
    fontFamily: Index, Helvetica, Arial, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 48px
    textTransform: uppercase
  body:
    fontFamily: Index, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 200
    lineHeight: 24px
  nav:
    fontFamily: Index, Helvetica, Arial, sans-serif
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 21.6px
  link:
    fontFamily: Index, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 8px
  xl: 10px
  2xl: 50px
  3xl: 64px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 6.4px
  s7: 7px
  s8: 8px
  s9: 10px
  s10: 15px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 6px 12px 6px 35px
    height: 35px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-grey}"
    rounded: "{rounded.sm}"
    padding: 4px 4px 10px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0.075) 0px 3.6px 10.4px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-body}"
    padding: 0px 10px
    borderColor: "{colors.footer-border}"
---

## Overview

Index Living Mall (page title "อินเด็กซ์ ลิฟวิ่งมอลล์ เฟอร์นิเจอร์และของแต่งบ้าน", lang th) is the online store of a Thai furniture and home-decor retailer. The home page is a promotional storefront rather than a brand showcase: a one-line fraud warning at the very top ("เตือนภัย!! อย่าหลงเชื่อบุคคลแอบอ้าง ... Line @indexlivingmall หรือ 1379"), the "Indexlivingmall" logo with a search field, a Thai flag, a cart, "เข้าสู่ระบบ" and "สมัครสมาชิก" links, and a category bar (เฟอร์นิเจอร์, เครื่องนอน, ของตกแต่งบ้าน, อุปกรณ์จัดเก็บ, ห้องน้ำและห้องครัว, อุปกรณ์การเดินทาง, สินค้าแนะนำ).

Below it a full-width yellow hero advertises the "10.10 SPECIAL ITEMS" campaign dated 8 to 14 October 2569 (Buddhist Era) with product photographs on white backgrounds, price points (for example 8,790.- and 17,700.- with struck-through original prices), a "SAVE 31%" burst, a QR code with App Store and Google Play badges. A red-numeral discount strip follows ("4,200.-" when buying 28,000.-, "3,100.-" for 8,000.-, a "ส่งฟรี" free-delivery icon, "2,500.-"). Then product rows follow under campaign headings: "10.10 SPECIAL ITEMS", a "furinbox" partner row, and "HOT ITEMS" with five product cards each, with green "NEW ARRIVALS" and "RECOMMENDED" tags and pink percent-off chips.

The measured page is 5692px tall at 1280px wide, in 3060 Thai and Latin characters, all in one family, Index. The capture also contained a cookie consent bar and an app-download pop-up with a close button; both were present in the capture and are not documented as brand UI. The tone is sale-driven: big numerals, short Thai headlines, dates in the format "8 ต.ค. 69 - 14 ต.ค. 69", and bilingual labels.

## Colors

- **White (#ffffff, `canvas`)** is the dominant background (1379 area).
- **Light greys (#f6f6f6 `surface-footer`, #f2f2f2 `surface-band`)** fill the footer and alternate bands (662 and 660 area); #fafafa fills the search input.
- **Body grey (#515151, `ink`)** is the most-read text (1224 characters).
- **Slate (#6b7d85, `ink-slate`)** carries 539 characters of secondary text, with #616161 (`ink-grey`, 270) for card titles and #828282 (129) for fine print; #000000 (338 characters) is used on headline numerals.
- **Price red (#e00000, `primary`)** colors 248 characters, notably prices and the big discount numerals, and is the accent that draws the eye on the sale page.
- **Pink chip (#fed0d0, `badge-pink`)** fills percent-off chips behind red text (10 area).
- **Dark body (#212529)** is the footer and paragraph text; it is also Bootstrap's `--bs-body-color`.
- **Hairlines:** #e4e4e4 (12), #f1f1f1, #e9e7e7 (input), #efefef, #ced4da (footer border).

The stylesheet also contains Bootstrap 5 root variables (`--bs-primary: #0d6efd`, `--bs-success: #198754`, `--bs-danger: #dc3545`, and the rest of the stock palette). Those are framework defaults, not brand colors, and are not used as tokens. The green tag color in the capture is not among the measured text or area colors, so no green token is defined.

## Typography

A single custom family, Index, loaded in weights 300, 400 and 700 (Helvetica and Arial are the fallbacks), sets all measured text, Thai and Latin.

- **Display (category link):** 17.6px / 26.4px weight 500, 0.704px letter spacing.
- **Heading (h2):** 32px / 48px weight 700, uppercase ("หมวดหมู่สินค้า | เฟอร์นิเจอร์").
- **Body:** 16px / 24px weight 200 (the lightest weight used; paragraph color #212529).
- **Nav:** 14.4px / 21.6px weight 400.
- **Link:** 16px / 24px weight 400.
- **Mobile:** the 390px pass measured 45px / 45px weight 300 for a large "more" label in the hero, h2 17.6px / 26.4px weight 500 uppercase, and body 16px weight 200.
- **Other measured sizes:** 15.2px (558 characters), 16.8px (175, card titles at 0.6px letter spacing), 12.8px (168), 11.2px (129), 10.4px (57).

Price and promotional numerals are mostly artwork in the banners rather than live text. Index is the retailer's proprietary face; Helvetica and Arial are its named fallbacks, and a Thai-capable sans (for example the system Thai UI font) is needed for Thai glyphs if Index is unavailable.

## Layout

The stylesheet carries Venia PWA variables (named `--venia-anim-bounce`, `--venia-anim-out`) built on Bootstrap 5 and Tailwind utilities (`--tw-ring-shadow`). Content width is a centered container; product rows are five columns of cards on the desktop capture, with campaign headers centered above each row. Measured spacings are 2px, 3px, 4px, 5px, 6px, 6.4px, 7px, 8px, 10px and 15px: the page is tight and dense, with card padding 4px 4px 10px.

## Elevation & Depth

Product cards use a soft shadow: `rgba(0, 0, 0, 0.08) 0px 3.6px 10.4px 0px` (17 elements) and `rgba(0, 0, 0, 0.075) 0px 3.6px 10.4px 0px` (12), plus `rgba(0, 0, 0, 0.08) 3.2px 1.6px 9.6px 0px` (5), `rgba(0, 0, 0, 0.08) 0px 3.6px 12px 0px` (2) and 1px small shadows of 0.13 and 0.25 alpha. Cards have a 1px #e4e4e4 border and the footer a #ced4da border.

## Shapes

Radii measured by count: 4px (33), 5px (19), 64px (17), 8px (15), 50% (13), 100% (4), 3px (1), 50px (1). Cards and the search input use 4px; 64px and 50% / 100% shapes are round icon buttons and badges. The token set keeps xs 3px, sm 4px, md 5px, lg 8px, xl 10px, 2xl 50px, 3xl 64px and pill 9999px.

## Components

- **Search input.** #fafafa fill, #a1a1a1 placeholder text, 1px #e9e7e7 border, 4px radius, 35px high, padding 6px 12px 6px 35px (room for a magnifier icon at left).
- **Product card.** White fill, 4px radius, 1px #e4e4e4 border, padding 4px 4px 10px, title in #616161 at 16.8px, price in red.
- **Navigation.** White header, #515151 text at 14.4px, category links at 17.6px.
- **Footer.** #f6f6f6 fill, #212529 text at 16px, newsletter prompt ("สมัครรับข่าวสาร"), 1px #ced4da border.
- **Buttons.** No primary CTA was detected (ctaPrimary null), so no button token is defined.

## Design System Architecture

No public Index Living Mall design system or brand-guideline page was found. The /brand path at https://www.indexlivingmall.com/brand returns a page titled "brand | Indexlivingmall" that is a product category and menu listing, not guidelines; /press, /about and /design returned 404. The de-facto system is the shipped stylesheet: Bootstrap 5 root variables (`--bs-*`), Venia PWA animation variables (`--venia-anim-*`), Tailwind ring variables, and the custom Index font.

## Do's and Don'ts

- Do keep the page white with #f6f6f6 and #f2f2f2 alternating bands.
- Do use #e00000 for prices and discount numerals only.
- Do use 4px card corners with a soft 10.4px shadow.
- Do set Thai text in Index 16px at weight 200 for paragraphs.
- Don't use the Bootstrap blue #0d6efd; it is a framework default.
- Don't document the cookie bar, app-download pop-up or its close button as brand UI.
- Don't mix more than the one red accent into text.

## Responsive Behavior

Mobile (390px) measurements: h2 at 17.6px / 26.4px weight 500 uppercase with a 5px solid border, body at 16px / 24px weight 200, a 45px weight-300 "more" label, and a header that includes a "เมนู" (menu) entry in the nav text. Column counts and breakpoints were not measured.

## Iteration Guide

1. White page, #515151 text, Index 16px.
2. Add the fraud-warning strip and a 35px search field at the top.
3. Build campaign rows with centered headings and five 4px-radius cards.
4. Use #e00000 for prices and #fed0d0 for percent-off chips.
5. Keep shadows to `rgba(0, 0, 0, 0.08) 0px 3.6px 10.4px 0px`.
6. Exclude consent bars and pop-ups when measuring.
