---
version: alpha
name: Krungthai Panich Insurance (KPI)
category: "Thai Brands"
description: "Krungthai Panich Insurance (KPI) Thai homepage: EuclidCircularB with Noto Sans Thai fallback, 36px semibold headings, royal blue (#2c67c6) pill buttons at 56px radius with 60px height and white text, cyan (#56bed6) secondary pills, #f8f8f8 page with white 24px-radius cards, diagonal-cut photography and 0 10px 20px shadows."
colors:
  canvas: "#f8f8f8"
  page-largest: "#ffffff"
  ink: "#2c67c6"
  primary: "#2c67c6"
  on-primary: "#ffffff"
  surface-3: "#56bed6"
  ink-3: "#777777"
  ink-4: "#000000"
typography:
  display:
    fontFamily: EuclidCircularB, "Noto Sans Thai", sans-serif
    fontSize: 36px
    fontWeight: 600
    lineHeight: 43.2px
  display-mobile:
    fontFamily: EuclidCircularB, "Noto Sans Thai", sans-serif
    fontSize: 28px
    fontWeight: 600
    lineHeight: 33.6px
  subheading:
    fontFamily: EuclidCircularB, "Noto Sans Thai", sans-serif
    fontSize: 24px
    fontWeight: 600
    lineHeight: 36px
  body:
    fontFamily: EuclidCircularB, "Noto Sans Thai", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 10px
  md: 16px
  lg: 24px
  xl: 36px
  2xl: 40px
  3xl: 50px
  4xl: 53px
  cta: 56px
  pill: 9999px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 15px
  s5: 20px
  s6: 24px
  s7: 25px
  s8: 30px
  s9: 40px
  s10: 50px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-largest}"
    typography: "{typography.body}"
    rounded: "{rounded.cta}"
    padding: 0px 30px
    height: 60px
  button-secondary:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.page-largest}"
    typography: "{typography.body}"
    rounded: "{rounded.4xl}"
    padding: 0px 30px
    height: 44px
  link:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.page-largest}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 20px 25px
  nav:
    textColor: "{colors.ink-4}"
  nav-link:
    textColor: "{colors.ink-4}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.page-largest}"
    rounded: "{rounded.lg}"
    padding: 60px 40px 25px
    boxShadow: rgba(0, 0, 0, 0.25) 0px 10px 20px 0px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-largest}"
    padding: 50px 0px 0px
---

# Krungthai Panich Insurance (KPI) — Design System Notes

## Overview
Measured URL: https://www.kpi.co.th/ (title "KPI - Krungthai Panich Insurance"). KPI is a Thai non-life insurer; the logo reads "KPI" with "KRUNGTHAI PANICH INSURANCE" and the Thai name "กรุงไทยพานิชประกันภัย". Per the fetched page text, the navigation covers Products (Travel, Motor, Accident & Health, Home & Condo, Commercial, Park Tourism), Customer Service (claims, policy management, renewal, tax deduction, service locators), About Us (company profile, board, awards, annual reports, news, blogs), Careers and a Thai / English toggle.

The first screen pairs a pale `#f8f8f8` field at left with a tall aerial photograph of a forest road at right, cut by a diagonal edge. The headline "ดูแลทุกความไว้ใจ" (care for every trust) in royal blue and the English line "Your trust, Our care" in gray are left-aligned. A pair of tabs, a gray "ประกันภัย" (insurance) tab with a shield icon and a blue "บริการ" (services) tab, switch a row of shortcut tiles (car-claim and other service shortcuts, one cyan, one blue and one white). The nav row is a translucent white rounded capsule with four items ("ผลิตภัณฑ์", "บริการลูกค้า", "เกี่ยวกับเรา", "สมัครงาน"), followed by round search and language ("ไทย") buttons, a user icon, and a cyan pill with the phone number "0 2624 1111".

"ผลิตภัณฑ์ประกันภัย" (insurance products) is a centered cyan-blue heading above a mosaic of product cards with diagonal-cut photographs: a large blue motor card (starting premium 6,900 baht), a gray travel "i-Insure" card (111 baht), a white home card, a cyan accident-and-health card (3,700 baht) and a white business card (1,250 baht). Each card has a rounded icon badge, a bold title, small "เบี้ยเริ่มต้น" (starting premium) labels and a large bold number with a small "บาท" suffix. A blue band with the invitation "หากคุณสนใจแผนประกันภัยของ เคพีไอ ..." and a cyan "ฝากข้อมูลติดต่อกลับ" button with an arrow follows, over a photograph of a smiling woman on the phone.

During the capture an online-claims dialog (a white rounded panel with the heading "ช่องทางแจ้งเคลมประกันภัยออนไลน์", a QR code and a cyan "แจ้งเคลมออนไลน์" button, with carousel arrows) was open above the hero. The extractor's consent banner was hidden (`cky-consent-container`) in the first run; the dialog was not recognised as an overlay and remains in the capture. It is a temporary promotional dialog and not a brand component, and the hero text and tab row beneath it are only partly visible. The small round consent-settings button at the lower left is a plugin control, not brand UI.

## Colors
- **Page `#f8f8f8` (`canvas`)** and **white `#ffffff` (`page-largest`)**: the page is pale gray with white cards and bands (white area-weight 3,825).
- **Primary blue `#2c67c6`**: the strong brand color (area-weight 1,363; 653 characters of text). It fills the main CTA ("บริการ") with white text, the motor card, the footer and the headings, so `ink`, `primary` and the footer share this value. White `#ffffff` is the on-primary text color.
- **Cyan `#56bed6` (`surface-3`)**: secondary pills and cards (area-weight 274): "แจ้งเคลมออนไลน์", the phone number pill, "ดูทั้งหมด", "ฝากข้อมูลติดต่อกลับ" and the accident-and-health card.
- **Gray `#777777` (`ink-3`)**: secondary text (310 characters). **Black `#000000` (`ink-4`)**: nav links and section titles (240 characters). A light gray `#eaeaea` (230 area units) fills the travel card, and a deep navy `#13315f` (54 area units) appears in small accents.

## Typography
All 2,536 measured characters are set in **EuclidCircularB** (weights 300, 400, 500, 600, 700 and a 400 italic are loaded) with **Noto Sans Thai** (400, 500, 600, 700) as the Thai-script fallback; `iconfont` supplies icons.

- `display`: 36px / 43.2px, weight 600 (the hero headline and the "ผลิตภัณฑ์ประกันภัย" heading).
- `display-mobile`: 28px / 33.6px, weight 600 at 390px.
- `subheading`: 24px / 36px, weight 600 (card titles).
- `body`: 16px / 24px, weight 400.

If EuclidCircularB is unavailable, a geometric sans for Latin with Noto Sans Thai for Thai is a reasonable replacement (a recommendation, not a measurement).

## Layout
Width 1280px, height 5809px. The top is a split hero (text left, photo right with a diagonal cut). The product section is a modular mosaic: one wide card on the left, one wide card on the right, then three equal cards, with gaps of equal size. Lower sections include special privileges, a content hub of blog articles, careers ("Wanna joy us!") and partner logos, per the fetched page text. Button padding is `0px 30px`; the primary button is 60px tall, the secondary 44px; cards use `60px 40px 25px` padding and the footer `50px 0px 0px`.

## Elevation & Depth
Two shadows: `rgba(0, 0, 0, 0.25) 0px 10px 20px 0px` (2 uses: product cards) and `rgb(128, 128, 128) 0px 0px 5px 0px` (1 use). The deep, soft 20px shadow lifts the cards off the pale page; the diagonal photo crops add depth without gradients.

## Shapes
Radii are large and varied: 24px (10 uses, cards), 10px (10 uses, small tiles and link pills), 50% (8 uses, round icon buttons), 53px (3), 16px (2), 50px (2) and 56px (2, the main CTA). Tokens: `xs` 2px, `sm` 10px, `md` 16px, `lg` 24px, `xl` 36px, `2xl` 40px, `3xl` 50px, `4xl` 53px, `cta` 56px, `pill`. Cards use `lg` (24px); the primary CTA uses `cta` (56px); the secondary pill uses `4xl` (53px).

## Components
- **button-primary**: `#2c67c6` fill, white text, 16px Euclid/Noto 400, 56px radius, `0px 30px` padding, 60px tall.
- **button-secondary**: `#56bed6` fill, white text, 53px radius, `0px 30px` padding, 44px tall.
- **link** (compact cyan button): `#56bed6` fill, white text, 10px radius, `20px 25px` padding.
- **nav / nav-link**: black text, 16px.
- **card**: white, 24px radius, `60px 40px 25px` padding, 20px soft shadow, diagonal-cut photo.
- **footer**: `#2c67c6` with white text and `50px 0px 0px` padding.
- **Header capsule**: translucent white (`#ffffffb3`) rounded capsule holding the menu.

## Design System Architecture
No public design system exists as far as the opened source (https://www.kpi.co.th/) shows: the fetched page links privacy, cookie, terms, anti-corruption and service-level documents but no brand or design-system page, so no search was run. Shipped assets include a self-hosted EuclidCircularB family and an `iconfont`; brand colors are applied in component styles, and no custom-property token set was extracted.

## Do's and Don'ts
- Do use royal blue `#2c67c6` for the primary action and cyan `#56bed6` for secondary actions.
- Do use 56px pill CTAs and 24px cards on a `#f8f8f8` page.
- Do cut photographs on diagonals and place prices as large bold numerals.
- Don't use more than one blue and one cyan in a card.
- Don't put the claims dialog or consent control in brand UI.
- Don't use thin gray hairlines; the system uses shadows and color fills.

## Responsive Behavior
At 390px the display type measures 28px with a 33.6px line height, down from 36px / 43.2px. The mosaic and the tab-and-tile hero at narrow widths were not measured.

## Iteration Guide
1. Use `#f8f8f8` as the page, `#ffffff` for cards, `#2c67c6` for CTAs and the footer.
2. Make hero headlines 36px semibold with a gray English subline.
3. Present products as a mosaic of 24px-radius cards with starting prices.
4. Use cyan pills for secondary and contact actions.
5. Keep photography diagonal-cropped, bright and lifestyle-oriented.
