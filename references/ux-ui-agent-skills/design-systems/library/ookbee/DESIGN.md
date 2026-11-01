---
version: alpha
name: Ookbee
category: "Thai Brands"
description: "Ookbee Thai e-book store (ookbee.com): yellow #ffd54c header and buy buttons, black #000000 menu bar and footer, white and #f5f5f5 product shelves, Kanit at weights 400 and 700, red #e52735 prices, 3.2px header buttons and 48px pill buy buttons."
colors:
  canvas: "#f5f5f5"
  page-largest: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  ink-2: "#7e7e7e"
  ink-3: "#e52735"
  ink-5: "#212529"
  button-secondary-bg: "#ffd54c"
  text-input-border: "#363636"
typography:
  display:
    fontFamily: Kanit
    fontSize: 19.2px
    fontWeight: 400
    lineHeight: 19.2px
  display-mobile:
    fontFamily: Kanit
    fontSize: 20px
    fontWeight: 700
    lineHeight: 30px
  body:
    fontFamily: Kanit
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.4px
  button:
    fontFamily: Kanit
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  input:
    fontFamily: Kanit
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 23.04px
rounded:
  xs: 3.2px
  sm: 4px
  xl: 32px
  2xl: 48px
  pill: 9999px
spacing:
  s1: 1.6px
  s2: 3px
  s3: 4px
  s4: 4.8px
  s5: 6px
  s6: 6.4px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px
    height: 44px
    borderColor: "{colors.ink}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px
    height: 44px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  text-input:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 4.8px
    height: 40px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink}"
---

## Overview

Ookbee (https://www.ookbee.com/, title "Ookbee ร้านอีบุ๊ค (E-Book) ครบทั้งหนังสือ การ์ตูน นิตยสาร") is a Thai e-book store run by Storylog Co., Ltd., selling books, comics, magazines, newspapers, audiobooks and online courses; support is member@ookbee.com. The page is a dense storefront (7526px at 1280px). From the top, the capture shows: a thin utility strip with the support email, FAQ and a log-in link; a yellow header band (`#ffd54c`) with the Ookbee wordmark and chick-mascot logo, a category selector and search field, a black "จัดการอีบุ๊ก" (manage e-books) button and a yellow-outlined cart button "ตะกร้า (0)"; a black menu bar (หน้าแรก, บุฟเฟ่ต์, นิยาย, หนังสือ, การ์ตูน, นิตยสาร, หนังสือพิมพ์, หนังสือเสียง, คอร์สออนไลน์, โปรโมชั่น, คะแนนสะสม); a pale-red notice strip announcing the e-book transfer to the Pinto platform; a full-width banner carousel; then rows of book covers, each row introduced by a bold Thai headline and a small mascot: "ทันข่าว ทันเหตุการณ์", "มังงะสุดฮิต ติดง่าย เลิกยาก", "บอกต่อ!! เซ็ตการ์ตูนขายดี", "Big Trends Books หนังสือกระแสโลก". Each cover card shows a title, author or date, a red price and a yellow "ซื้อเลย" (buy now) pill. The bottom has a yellow "อุ๊คบี บุฟเฟ่ต์" subscription promotion with app-store badges and a black footer.

A migration notice modal and a cookie banner were open in the first capture; the cookie banner is gone after re-measurement and the modal is not documented as brand UI. The voice, from the page copy opened by WebFetch, is energetic, casual and promotional with short catchy Thai phrases and topic-led sections (crypto investing, technical stock analysis, English study, gardening). The page declares no `lang` attribute in the measurement.

## Colors

- **Canvas `#f5f5f5`** (5120 area units) is the body band behind product shelves; **page-largest `#ffffff`** (10775 units) is the card and page white. **`#000000`** (1894 units) is the menu bar and footer. **`#ffd54c`** (1599 units) is the brand yellow of the header and the buy buttons, tokenised as button-secondary-bg. A pale-red `#fff4f4` (95 units) is the notice strip.
- **Ink `#000000`** is the dominant text color (6460 characters); **ink-2 `#7e7e7e`** (3429 characters) is the secondary text for authors, dates and descriptions; **ink-3 `#e52735`** (903 characters) is the price red; **ink-5 `#212529`** (728) is the title color; white text covers 738 characters on black and yellow-free dark areas.
- **Primary `#000000`** with **on-primary `#ffffff`** is the "จัดการอีบุ๊ก" button. **Text-input-border `#363636`** is the search field border. Bootstrap 4 variables (`--yellow: #ffc107`, `--green`, `--pink` and others) and the cookie-consent variables (`--cc-*`) in the root are framework or widget values and are not brand colors.

## Typography

One family: **Kanit** (Thai and Latin; weights 400 and 700 with 600 on 73 characters), 13329 characters in total. Weights split almost evenly: 400 (6872 characters) and 700 (6384).

- **Display role (H1 detection "หน้าแรก" nav item):** Kanit 19.2px, weight 400, line-height 19.2px. Mobile role: the price "19.00 ฿" at 20px, weight 700, line-height 30px.
- **Body:** 14px, weight 400, line-height 22.4px. **Button:** 16px, weight 400, line-height 25.6px. **Input:** 14.4px, weight 400, line-height 23.04px.
- Most-used sizes by characters: 16px (6838), 14px (4356), 20px (1014), 14.4px (489), 28px (262), 19.2px (130), 13.6px (49), 30px (27), 50px (14). Section headlines are in the 28px bold range and titles in 16px bold in the capture. No letter spacing is set (the list is empty).

## Layout

The page is a stack of horizontal product shelves: six covers per row on desktop, with round arrow controls at the row edges and a "ดูทั้งหมด" (view all) link at the row's right. Cards are 16px-padded white tiles on the grey canvas. Paddings: 8px (880 occurrences), 3px (290), 15px (37), 16px (25), 24px (11). Gaps are not declared (empty list). Product rows are separated by headline lines with mascot icons, and full-width yellow promo banners ("Message Us!", "คำถามพบบ่อย") break the rhythm.

## Elevation & Depth

One shadow stack dominates, on 145 elements: `rgba(0,0,0,0.1) 0px -48px 48px 0px inset, rgb(255,255,255) 0px 0px 0px 2px, rgba(0,0,0,0.3) 4.8px 4.8px 16px 0px`, which gives a bottom-inner darkening, a 2px white ring and a soft offset drop shadow. The same 145 elements carry a 48px radius and the same count of 8px paddings dominates the page, which matches the repeated buy buttons and chips in the capture. The cookie banner's shadow was excluded.

## Shapes

Radii: 48px (145 elements, the dominant pill-like shape), half-circle pairs `0px 50% 50% 0px` and `50% 0px 0px 50%` (12 each, the carousel arrow tabs), 3.2px (2, the header buttons), 4px, 32px and 50% (one each). Header buttons "จัดการอีบุ๊ก" and "ตะกร้า" are 3.2px-radius, 44px-high rectangles with a 1px black border; the buy buttons are the rounded pills. The 10px and 16px radii belong to the migration modal and are not tokens.

## Components

- **Button primary:** `#000000` fill, white Kanit 16px label, radius 3.2px, padding 8px, height 44px, 1px black border.
- **Button secondary:** `#ffd54c` fill, black label, same size, radius 3.2px and border (the cart button).
- **Text input:** white, black text 14.4px, 1px `#363636` border, padding 4.8px, height 40px (the search field).
- **Link:** black Kanit 16px, no decoration measured.
- **Footer:** black background with white links in the capture; copyright line "Copyright © 2026 Storylog Co., Ltd." and the app version in the footer text.
- **Book card and buy pill:** white tile with cover image, 16px bold title, grey author line, red bold price and a yellow pill, as seen in the capture.

## Design System Architecture

No brand guidelines or design system are linked from the home page: WebFetch of https://www.ookbee.com/ found footer links to About Us, Terms of Service, Privacy Notice, Contact Us, Careers, Download and Third-Party Notices only, and a version number. The site is built on Bootstrap 4 (root variables `--light`, `--yellow`, `--green`, `--pink`, `--cc-*`) with the cookie-consent library's `--cc-*` variables and the Font Awesome 5 Free icon font (weight 900) as the only loaded non-text font. Brand tokens are therefore in page CSS, not variables.

## Do's and Don'ts

- Do use the yellow `#ffd54c` for the header band and the buy buttons, and black for the menu and footer.
- Do show prices in bold red `#e52735` and secondary information in `#7e7e7e`.
- Do use Kanit at weights 400 and 700 only.
- Do keep shelf rows at six covers with edge arrows and a "ดูทั้งหมด" link.
- Don't use Bootstrap's `#ffc107` yellow for brand surfaces; the measured brand yellow is `#ffd54c`.
- Don't style new controls from the migration modal or the cookie banner.
- Don't add letter spacing; none is set.

## Responsive Behavior

Measured at 390px: the first price role is Kanit 20px weight 700 (line-height 30px) in `#e52735`, body text stays 14px with a 22.4px line-height, and the "จัดการอีบุ๊ก" button shrinks to a 12.8px label with the same 3.2px radius and 8px padding. Mobile text sizes by characters are 16px (6180), 14px (3945), 20px (842), 12.8px (504) and 18px (262). The mobile navigation and shelf column counts were not measured, and the Bootstrap breakpoint variables were not read, so breakpoint values are not stated.

## Iteration Guide

1. Start from the three bands: yellow header, black menu, white and `#f5f5f5` shelves.
2. Use Kanit 400 for UI and 700 for titles and prices; prices in `#e52735`.
3. Use the yellow pill for the single buying action and black rectangles for account actions.
4. Keep cards plain white with the measured 16px padding.
5. Record any new measurement in SOURCES.json before adding tokens.
