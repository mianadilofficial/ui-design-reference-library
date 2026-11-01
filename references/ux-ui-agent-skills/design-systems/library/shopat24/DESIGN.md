---
version: alpha
name: ALL Online
category: "Thai Brands"
description: "7-Eleven's ALL Online store, measured on its ShopAt24 page: white canvas, #009f3c green navigation bar, #00c300 green links, #e62739 sale red, #455d70 slate text, DB Ozone X typeface at 22px, 17px radii on product cards."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#009f3c"
  on-primary: "#ffffff"
  accent-green: "#00c300"
  surface-2: "#f5f7f8"
  surface-3: "#f5f5f5"
  ink-2: "#9b9b9b"
  ink-slate: "#455d70"
  ink-sale-red: "#e62739"
  hairline: "#e3e3e3"
  nav-link-text: "#555555"
  text-input-text: "#888888"
  card-border: "#00000026"
typography:
  display:
    fontFamily: "\"DB Ozone X\", Arial, \"sans-serif\""
    fontSize: 24px
    fontWeight: 500
    lineHeight: 38px
  display-mobile:
    fontFamily: "\"DB Ozone X\""
    fontSize: 21.3333px
    fontWeight: 500
    lineHeight: 20px
  heading:
    fontFamily: "\"DB Ozone X\", Arial, \"sans-serif\""
    fontSize: 30px
    fontWeight: 500
    lineHeight: 33px
    letterSpacing: 3px
    textTransform: uppercase
  subheading:
    fontFamily: "\"DB Ozone X\", Arial, \"sans-serif\""
    fontSize: 28px
    fontWeight: 400
    lineHeight: 39px
  body:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 22px
    letterSpacing: 0.8px
  nav:
    fontFamily: "\"DB Ozone X\", Arial, \"sans-serif\""
    fontSize: 0px
    fontWeight: 400
    lineHeight: 0px
  input:
    fontFamily: "\"DB Ozone X\", Arial, \"sans-serif\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 17px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 12px
  s9: 15px
  s10: 20px
components:
  link:
    textColor: "{colors.accent-green}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink-slate}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 4px 6px
    height: 40px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-slate}"
    rounded: "{rounded.sm}"
    padding: 0px 0px 5px
    borderColor: "{colors.card-border}"
    boxShadow: rgba(0, 0, 0, 0.176) 0px 6px 12px 0px
  footer:
    textColor: "{colors.accent-green}"
---

## Overview

The queued URL https://www.shopat24.com redirects to https://www.allonline.7eleven.co.th/c/shopat24/, the ShopAt24 category page of 7-Eleven's ALL Online store, so this file is named after the measured site, ALL Online, and describes the ShopAt24 page as it appears there. The page title is "สินค้า ShopAt24 ราคาพิเศษ | ALL Online", and the page text refers to the 7-Eleven app ("ดาวน์โหลดแอป 7-Eleven"), the "ALL member" loyalty account, a call center on 1371 and shipping to the home.

The page is a dense retail storefront. At the very top is a pink promotional banner strip; under it a thin utility bar (customer contact, app download, order-status tracking, login and sign-up); a white header with the ALL ONLINE logo, a search field with a category dropdown and popular search terms, and cart and favourites icons; a full-width green navigation bar with labels such as "สินค้าขายดี", "ส่งฟรีถึงบ้าน", "สินค้ามาใหม่", "รวมคูปองส่วนลด", "Flash Sale", "สินค้าสั่งจอง" and "OUTLET ลดล้างสต็อก"; a breadcrumb row; then a large green ShopAt24 hero banner reading "ช้อปของดี แฮปปี้ยกบ้าน" beside a family on a sofa. Under the hero: five rounded icon tiles (Flash sale, coupons, free shipping, best sellers, top brands), a long green pill heading "ช้อปของเข้าห้อง" over six room illustrations (bedroom, living room, bathroom, kitchen, workroom, dressing room) each with a green label, a second pill heading "ช้อปแบรนด์ดัง" and a row of brand tiles (Fluffy, Zebra, Hatari, Lesasha, Logitech), and finally product rows by category such as furniture with 0% instalment and promotion badges, percent-off figures and prices in baht.

The voice is promotional Thai retail: shorthand deals, percent-off numerals, badges for instalments, coupons and flash sales. The page measured 11,299px tall at 1280px wide.

## Colors

- **Green `#009f3c`** (49 area weight) is the measured navigation bar fill and the base brand color of this page; text on it is white `#ffffff` (102 characters). It is used here as `primary`.
- **Link green `#00c300`** (320 characters of text) is the color of footer headings, links such as the privacy policy, and the h3 category titles ("เฟอร์นิเจอร์"). It is also the border color on one element.
- **Canvas `#ffffff`** (261), **`#f5f7f8`** (93) and **`#f5f5f5`** (70) are the light grounds; `#e3e3e3` (6 area, 138 border occurrences) is the standard hairline.
- **Text:** black `#000000` is the most-read color (3,510 characters), `#9b9b9b` (491) for secondary text and struck-through prices, `#455d70` (451, also 11 area weight) a slate for headings and utility text, `#555555` (85) for nav links, and **`#e62739`** (387 characters) for sale prices and percentage figures.
- A darker slate `#455d70` also appears as a border (6 occurrences). A pale pink promotional strip, room-illustration colours and brand-tile artwork are imagery and not tokens.

## Typography

The shipped face is **DB Ozone X** (400, 500 and 700), loaded for 5,219 measured characters; **Helvetica Neue** (148 characters) appears in small print. The stack is `"DB Ozone X", Arial, "sans-serif"`. An icon font `novosales_iconsweb` provides interface icons.

Roles: display 24px / 500 / 38px (nav labels); heading 30px / 500 / 33px uppercase with 3px letter-spacing ("NEWSLETTER"); subheading 28px / 400 / 39px (category titles); body 11px / 400 / 22px with 0.8px letter-spacing in Helvetica Neue (newsletter consent text); input 18px / 400 / 20px. By character count 22px dominates (3,482, product names and prices), then 18px (983), 24px (478) and 28px (212). Weights are 500 (3,414), 400 (1,307) and 700 (646). No font substitute is used on the site.

## Layout

The page is a centred container about the width of the nav bar, with a full-width banner above it. Structure at 1280px: banner, utility bar, header, green nav, breadcrumb, hero, five icon tiles in one row, two-column room grid, brand row, then category product rows with a heading and "ดูเพิ่มเติม >>" link. Paddings recorded are 5px (71 occurrences), 10px (37), 15px (24), 3px (22), 30px, 22px and 4px, which gives tight product-card interiors. A category row heading uses the `#00c300` h3 at 28px beside a "ดูเพิ่มเติม" (see more) link.

## Elevation & Depth

Three shadows are recorded: `rgba(0, 0, 0, 0.176) 0px 6px 12px 0px` (2 uses, cards and dropdowns), a grey `rgb(128, 128, 128) -5px 5px 5px 0px, rgb(128, 128, 128) 5px 5px 5px 0px` (1), and an inset highlight `rgba(255, 255, 255, 0.2) 0px 1px 0px 0px inset, rgba(0, 0, 0, 0.05) 0px 1px 2px 0px` (1). Most separation uses the 1px `#e3e3e3` border instead of shadow.

## Shapes

The dominant radius is 17px (64 occurrences): the rounded icon tiles, the pill headings, brand tiles and product cards. Inputs use 3px, cards 4px and 5px elsewhere. The long green headings "ช้อปของเข้าห้อง" and "ช้อปแบรนด์ดัง" are fully rounded pills in the capture.

## Components

- **Search input:** white fill, `#888888` 18px text, 1px `#e3e3e3` border, 3px radius, `4px 6px` padding, 40px tall.
- **Product card:** white fill, 1px `#00000026` border, 4px radius, `0px 0px 5px` padding, `#455d70` text, shadow `rgba(0, 0, 0, 0.176) 0px 6px 12px 0px`.
- **Navigation bar:** `#009f3c` with white 24px / 500 labels.
- **Link / footer:** `#00c300` text; footer headings are 22px / 500 in the same green.
- **Badges:** instalment ("ผ่อนชำระ 0%"), promotion and percent-off chips on product cards; their computed values were not captured.
- A cookie/consent banner, the app-download panel and status messages are not brand components.

## Design System Architecture

No public design system or brand-guideline page was found; the /brand, /press, /about and /design paths under the ShopAt24 page return 404. The root CSS has no custom properties (rootVars is empty), so the system is a hand-written stylesheet with an icon font (`novosales_iconsweb`) and one commercial typeface, DB Ozone X, in three weights. Components share a 17px radius for tiles and a 1px `#e3e3e3` border. The 7-Eleven membership link and app panel show that the store is a channel of the wider 7-Eleven brand.

## Do's and Don'ts

Do use `#009f3c` for the navigation bar with white text and `#00c300` for links and headings on white. Do use `#e62739` only for sale prices and discount figures. Do round tiles, pills and cards at 17px. Do keep `#9b9b9b` for struck-through original prices.

Don't use grey drop shadows on every card; the measured card shadow is a single soft one. Don't use the LINE green `#00c300` as a button fill without measuring; it is measured only as text and border here. Don't document the cookie banner or technical-issue notice.

## Responsive Behavior

Measured at 390px: the h1-role element is 21.3333px / 500, the h2 "NEWSLETTER" is 30px / 500, body 11px, and navigation 15px; the mobile pass recorded font sizes of 20px (1,553 characters), 18px (452), 21px (212) and 22px (202). The navigation exposes a "Toggle navigation" control. Column counts and breakpoints were not measured.

## Iteration Guide

1. Start with the frontmatter; `primary` is the measured nav green, and `accent-green` is the link and heading green.
2. Build from banner, utility bar, white header with search, green nav bar, hero, five icon tiles and category rows.
3. Round tiles and pills at 17px; use 1px `#e3e3e3` borders.
4. Use DB Ozone X 22px / 500 for product text and `#e62739` for sale numerals.
5. Not measured: button components, hover on cards, tablet layout; check the live site.
