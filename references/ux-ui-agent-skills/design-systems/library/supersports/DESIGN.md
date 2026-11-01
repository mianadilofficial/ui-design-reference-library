---
version: alpha
name: "Supersports"
category: "Thai Brands"
description: "Supersports Thailand online sports retailer (supersports.co.th) measured live: a navy #001a2d header, a lime #55ff06 announcement bar, NotoSansThai in weights 400 to 900, white and #f5f5f5 grounds, square SHOP NOW buttons, sale red #d01345, and 8px 24px asymmetric corners on category and product tiles."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#001a2d"
  on-primary: "#ffffff"
  surface-light: "#f5f5f5"
  ink-body: "#000000bf"
  ink-muted: "#7e7e7e"
  sale-red: "#d01345"
  hairline: "#686666"
  accent-lime: "#55ff06"
  text-input-bg: "#ffffff33"
typography:
  display:
    fontFamily: NotoSansThai, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 0px
    letterSpacing: 0.06px
  display-mobile:
    fontFamily: NotoSansThai, sans-serif
    fontSize: 30px
    fontWeight: 400
    lineHeight: 0px
    letterSpacing: 0.045px
  heading:
    fontFamily: NotoSansThai, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: 0.048px
  subheading:
    fontFamily: NotoSansThai, sans-serif
    fontSize: 20px
    fontWeight: 700
    letterSpacing: 0.015px
  body:
    fontFamily: NotoSansThai, sans-serif
    fontSize: 15.7105px
    fontWeight: 400
    letterSpacing: 0.024px
  button:
    fontFamily: NotoSansThai, sans-serif
    fontSize: 16.1831px
    fontWeight: 700
    lineHeight: 16.1831px
    letterSpacing: 0.024px
    textTransform: uppercase
  nav:
    fontFamily: NotoSansThai, sans-serif
    fontSize: 22.4px
    fontWeight: 400
    lineHeight: 0px
    letterSpacing: 0.06px
  input:
    fontFamily: NotoSansThai, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.64px
rounded:
  xs: 4.23px
  sm: 8px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 4.2px
  s4: 4.8px
  s5: 5px
  s6: 7px
  s7: 8px
  s8: 9.28px
  s9: 10px
  s10: 10.66px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 2px
    height: 36px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 0.35px 28px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    padding: 5px 6px
    height: 32px
---

## Overview

The measured page is supersports.co.th, the Thai-language online store of Supersports (document title "ซื้อรองเท้าวิ่งและอุปกรณ์กีฬาแบรนด์ดังที่ Supersports ออนไลน์", buy running shoes and sports equipment from famous brands at Supersports online). The page language is `th` and the page is 12,805px tall at 1280px.

From the top: a lime-green announcement bar with a Thai notice about delivery times (it begins "จากสถานการณ์น้ำท่วม", referring to flooding) and left and right arrows; a navy header with the italic "SUPERSPORTS" wordmark, the menu items ฮิต มาแรง! (hot and trending), ประเภทกีฬา (sports types), ผู้ชาย (men), ผู้หญิง (women), เด็ก (kids), แบรนด์ (brands) and เข้าสู่ระบบ (sign in), a search field with the placeholder "Search", and account, bag, wishlist and Thai-flag icons. Then a full-width hero carousel (a Thai national-team Asian Games campaign with a "SHOP NOW" button and a segmented progress bar), a "ช็อปครบชุด ตามสไตล์คุณ" (shop complete outfits by your style) row of four photo tiles (เสื้อ, กางเกง, รองเท้า, สวมใส่ศีรษะ: tops, pants, shoes, headwear), "เลือกช็อปตามหมวดหมู่" (shop by category) with round product badges carrying discount flags such as -60% and -70%, a "มาใหม่" (new arrivals) product rail on a light grey band with a "ดูทั้งหมด >" (see all) link, and a "สินค้าใหม่" (new products) pair of large promotional banners (Adidas fan jerseys and a Nike pack), each with a dark "SHOP NOW" button.

The look is a promotion-driven retail grid: neon lime and electric green in the art direction, dark navy for structure, and red for prices. A floating assistant avatar with a close button sits over the right edge of the capture; it is a chat widget and is not documented as brand UI.

## Colors

`canvas` and the largest area background is white (#ffffff, weight 50862). `primary` (#001a2d) is a deep navy that fills the header and the "SHOP NOW" buttons; `on-primary` is white. `surface-light` (#f5f5f5, weight 187) is a light tile and band grey; a 50% grey, #d9d9d980 (weight 6653), and a 10% black, #0000001a (weight 3528), are also measured as backgrounds under images and in the product rail. `accent-lime` (#55ff06, weight 51) is the announcement bar fill and the navigation hover color (the "แบรนด์" link turns from white to rgb(85, 255, 6) on hover). `sale-red` (#d01345, weight 69 as a background and 1071 characters as text) is used for sale prices and discount flags. A green #21a67a is published by the site as `--success-color` in its root variables, but it was not measured as a visible color on the page.

Text: `ink` (#000000, 20073 characters) is the default; `ink-body` (#000000bf, black at 75%, 10597 characters) is secondary copy such as product names; `ink-muted` (#7e7e7e, 2835 characters) is the small grey brand label above a product; white (349) sits on navy and on photos; #00000080 (179) is a 50% black. `hairline` (#686666) is the measured border color of the search field and some outlines; #d9d9d9 is a lighter divider.

## Typography

One family: NotoSansThai (35,287 characters), with a generic sans-serif fallback, in loaded weights 400, 700, 800 and 900. Weight use by character: 400 (26943), 700 (8282), 800 (43), 900 (19). Letter spacing is positive and tiny at every size (for example 0.024px at 14px and 16px, 0.036px at 24px, 0.048px at 32px).

`display` is 40px, weight 400, with a measured line height of 0px and 0.06px tracking; it is the extractor's reading of the hero h1, which has no visible text in the capture (the campaign headline is part of the banner image), so the 0px line height is an artefact of that hidden element. `heading` is 32px bold on 40px. `subheading` is 20px bold. `body` is 15.7105px regular. `button` is 16.1831px bold, uppercase, on a 16.1831px line. `nav` is 22.4px, and `input` is 12px on 18px with 0.64px tracking. The most-used sizes by characters are 16px (15920), 14px (11569), 20px (3853) and 24px (3027).

## Layout

The desktop page is 1280px wide with a full-width hero banner; the category and new-arrivals sections sit inside a narrower content width in the capture. Category tiles are four equal columns; the round category badges run eight to a row, with a plus sign and a Thai "all" label closing the second row; the product rail in the capture shows four full cards and part of a fifth. Gaps measured: 10px (14 containers), 12.8px, 5px, 8px, 20px, 19.2px, 28.8px, 30px, 50px, 32px and 40px. Product cards stack image, a navy price strip, brand, name, stars and price.

## Elevation & Depth

Depth is mostly flat. One element has a shadow, rgba(0, 0, 0, 0.25) 0px 2px 6px 0px. Panels separate through color: white cards on a grey band, navy strips on cards, and photo overlays. The navigation hover changes text color only (white to lime) with no shadow change.

## Shapes

The distinctive shape is an asymmetric corner: `8px 24px` was measured on 39 elements (tiles and cards), with 50% (17 elements) on round category badges and 4.23438px on one element. Buttons and the header are square (0px). The tokens declare `none` 0px, `xs` 4.23px, `sm` 8px and `pill` 9999px.

## Components

- **button-primary**: #001a2d fill, white uppercase 16.1831px bold label ("SHOP NOW"), 0px radius, padding 10px 2px, 36px tall, 116px wide in the hero.
- **link**: #001a2d, 20px bold.
- **nav / nav-link**: navy bar, white 22.4px links, 0.35px 28px padding; hover turns the link lime.
- **text-input**: header search, translucent white (#ffffff33) fill, white 12px text, 5px 6px padding, 32px tall.
- **Product card**: white card with a sale badge in the top-right (a red tag with the percentage), a dark label strip under the photo (for example "สินค้าใหม่ ห้ามพลาด", new item, don't miss), brand in grey, a name in 75% black, star rating, a struck-through price and a red price.
- **Category badge**: circular image with a green-tinted ring and a discount flag.

## Design System Architecture

No public design-system documentation was opened. The root variables include a large set of `--boostsd-*` (a search and filtering widget), `--qbk-*`, `--ot-*` and other app-prefixed properties, plus `--success-color`, `--ease-smooth-out` and `--focused-base-box-shadow`. These are widget settings, not the brand's token set, so the design is read from computed values (NotoSansThai, navy, lime, red, 8px 24px corners). No tokens repository was consulted.

## Do's and Don'ts

- Do use navy (#001a2d) for structure and buttons and lime (#55ff06) only for the announcement strip and hover.
- Do set all text in NotoSansThai and keep uppercase for button labels such as SHOP NOW.
- Do reserve red (#d01345) for prices and discount flags.
- Do round tiles asymmetrically (8px 24px) and keep buttons square.
- Don't add heavy shadows; one 25% black 2px 6px shadow is the only one measured.
- Don't document the chat avatar or carousel arrows as brand components.

## Responsive Behavior

Measured at a 390px pass: the h1 is 30px with a 0px line height and 0.045px tracking. The mobile size census is led by 11px (15747 characters) and 10px (14708), then 16px (2524), 12px (907), 20px (362) and 14px (193). Breakpoints, menu collapse and tile column counts were not measured.

## Iteration Guide

1. Build a lime strip over a navy header, then a banner with one navy "SHOP NOW" button.
2. Use white sections with a light grey (#f5f5f5) band for the new-arrivals rail.
3. Style products with grey brand label, 75% black name, and a red price beside a struck-through old price.
4. Use 8px 24px corners for tiles and 50% for category badges.
5. Check any color you add against the measured list above.
