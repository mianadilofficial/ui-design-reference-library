---
version: alpha
name: "Domino's Pizza Thailand"
category: "Food & Beverage"
description: "Domino's Pizza Thailand (queued dominos.com resolves to dominospizza.co.th) is a Thai-language ordering site in DB Heavent at 24px and 30px, white and #f4f4f4 surfaces, #898989 secondary text, #006491 blue controls, 12px tiles and a #53565a footer with a 5px #9d2235 border."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#006491"
  surface-card: "#f4f4f4"
  surface-footer: "#53565a"
  ink-secondary: "#898989"
  ink-footer: "#bcbcbc"
  hairline: "#e7e7e7"
  brand-red-deep: "#9d2235"
  surface-blue-pale: "#e6f6fc"
  surface-grey: "#efefef"
  border-grey: "#dbdbdb"
typography:
  display:
    fontFamily: DBHeavent-Medium
    fontSize: 30px
    fontWeight: 400
    lineHeight: 36px
  nav:
    fontFamily: DBHeavent-Bold
    fontSize: 18px
    fontWeight: 400
  body:
    fontFamily: DBHeavent-Regular
    fontSize: 24px
    fontWeight: 400
  nav-link:
    fontFamily: DBHeavent-Regular
    fontSize: 20px
    fontWeight: 400
rounded:
  xs: 4px
  sm: 6px
  md: 12px
  lg: 25px
  xl: 50px
  pill: 9999px
spacing:
  s1: 5px
  s2: 7px
  s3: 7.5px
  s4: 8px
  s5: 10px
  s6: 15px
  s7: 18px
  s8: 20px
  s9: 35px
  s10: 45px
components:
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-footer}"
    borderColor: "{colors.brand-red-deep}"
---

# Domino's Pizza Thailand

## Overview

The queued address `https://www.dominos.com` redirects to the brand's Thai ordering site, `https://www.dominospizza.co.th/home`, so this DESIGN.md is named after the measured site: Domino's Pizza Thailand. Its page title is "โดมิโน่ส์ พิซซ่า | ความอร่อยสั่งได้ สั่งเลย 1450 | Domino's Pizza Thailand" ("order now, 1450"), the site name is "Domino's Pizza Thailand, Order Online in Thailand", the language is Thai with an English switch ("Eng"), and the footer carries "© 2023 Domino's IP Holder LLC". The header offers หน้าหลัก (home), ติดตามการสั่งซื้อ (track order), ค้นหาสาขา (find a branch), เกี่ยวกับเรา (about us), ติดต่อเรา (contact), login or sign-up, a language selector, search and a basket reading "0 รายการ" (0 items).

This is an ordering app rather than a brand brochure. Below a 400px promotional carousel the page is a menu of product tiles in four columns: each tile is a square promotional illustration (pizzas on blue, red and white graphic backgrounds with large Thai display lettering such as "ปังปุ" and "Mania"), a bold product name, a two-line grey description, a large baht price (฿268, ฿148, ฿368, ฿418 in the capture) with a smaller struck-through list price, and a round blue add button. Sections are chosen from a tab row beginning with "โปรโมชั่น" (promotions) and including drinks ("เครื่องดื่ม"). The result is dense, friendly and price-forward, with text hierarchy done almost entirely by size and the grey ramp.

The capture also shows a full-screen promotional pop-up ("PIZZA MANIA ... ราคาเดียว 69.-" with a "close" button and a "don't show for 7 days" checkbox) over a dimming scrim, and a floating chat button. Those are not brand UI; they, the scrim (`#00000099`) and the hidden cookie element (`main_cookie`) are excluded from the tokens below. The re-extraction run (batch, no motion) still contained the scrim in its background list.

## Colors

- **Canvas `#ffffff`**: header, menu and tile background (largest measured area).
- **Surface `#f4f4f4`**: the light grey band and card background (910 units).
- **Ink `#000000`**: product names and prices (573 characters in the first run, 537 in the re-run).
- **Ink secondary `#898989`**: the most-read color (1,312 characters), used for product descriptions and list prices.
- **Primary `#006491`**: Domino's Thailand blue, measured as text color on header links (25 characters in the first run); the round add buttons look the same blue in the capture, but their fill was not measured separately.
- **Surface footer `#53565a`** with **ink footer `#bcbcbc`** text and a **footer-border `#9d2235`** deep-red 5px top border.
- **Hairline `#e7e7e7`**, with `#dbdbdb` also measured on borders; **`#e6f6fc`** is a pale-blue surface and **`#efefef`** a light grey surface.

The red and blue of the product tiles are in image artwork and were not measured as CSS colors. The Swiper default `#007aff` is a library variable, not a brand color.

## Typography

One typeface family in three weights files: DBHeavent-Regular (1,857 characters), DBHeavent-Medium (432) and DBHeavent-Bold (23), self-hosted as `DB Heavent v3.2` TTF files (regular, medium and bold) on the site's own `/fonts/` path. Font Awesome 6 Pro, Sharp, Duotone and Brands, and Swiper icons, are loaded for icons. The page sets body at 24px.

- **Display**: DBHeavent-Medium 30px / 36px, weight 400: product names ("ปังปุ คลาสสิก") and on mobile the price "฿268".
- **Body**: DBHeavent-Regular 24px, weight 400, the dominant size (1,394 characters).
- **Nav**: DBHeavent-Bold 18px, weight 400, the header and drawer links.
- **Prices**: 45px (56 characters, in the product bands), family and weight not separately recorded, so not a token.

Other measured sizes are 18px (255), 17px (64; the footer, DBHeavent-Regular 17px / 20px), 22px, 20px and 25px. Weight is always declared 400 because each weight is its own font file (a few 600 and 700 characters were also recorded).

## Layout

The desktop pass measured 1280px wide and a 2,667px page height. The structure is three bands: a 400px media carousel with round previous and next arrows, a 2,108px white menu band in four columns, and a 159px footer band. The footer element measured 1280 × 164px in `#53565a` with the 5px `#9d2235` border and a single row: the privacy policy link and the copyright line. Frequent paddings are 15px, 5px, 8px, 10px and 20px. The header was measured at 1280 × 80px in the first extraction run.

## Elevation & Depth

Almost flat. One soft shadow value remains in the re-run, `rgba(168, 168, 168, 0.5) 0px 5px 9px 0px` (1 element); the first run also recorded a very faint blue shadow under the header, `rgba(0, 88, 124, 0.05) 0px 5px 10px 0px`. Product tiles rely on rounded image corners and white space rather than borders; hairlines are `#e7e7e7` (6 uses) and `#dbdbdb` (5).

## Shapes

Rounded and friendly. Radii: 6px (22 elements, image and button corners), 50% (16, round add and arrow buttons), 12px (14, tiles and cards), 4px (7), 50px (4), 25px (2) and one 100% circle. The tile images are rounded rectangles, the add buttons and carousel arrows are circles, and promotional badges in the artwork are slanted ribbons.

## Components

- **Product tile**: rounded square promotional image, name at 30px, description in `#898989`, price at 45px with a smaller struck list price, and a round blue add button (fill not separately measured).
- **Card** (`card`): `#f4f4f4` fill, black text, 12px radius.
- **Header links**: DBHeavent-Regular 20px in `#006491` (measured in the first run), plus a language selector, search icon and a basket pill reading "0 รายการ".
- **Carousel arrows**: round buttons at the left and right of the hero.
- **Footer** (`footer`): `#53565a`, `#bcbcbc` text, 5px red top border.
- **Not documented**: the PIZZA MANIA pop-up, its close button and checkbox, the chat button and the cookie bar.

## Design System Architecture

No public design system or brand guideline was found for Domino's Pizza Thailand: the site (a single-page app; the delivered HTML is small and links to home, tracking, store search, login, register, about, contact, social pages and privacy) links to none. The shipped system is: DB Heavent font files, Font Awesome 6 Pro icon fonts, and Swiper; only 16 root custom properties were recorded and all are icon-font, viewport or Swiper variables (`--fa-*`, `--vh`, `--vw`, `--swiper-theme-color`), so the colors and sizes above come from computed styles. Source: `https://www.dominospizza.co.th/home`.

## Do's and Don'ts

- Do keep a white and `#f4f4f4` surface with `#898989` secondary text, black prices and a single blue `#006491` for interactive controls.
- Do set Thai text in the DB Heavent family at 24px body and 30px names.
- Do round tiles at 12px, small elements at 6px and controls as circles.
- Do close the page with the grey `#53565a` footer and its red top border.
- Don't document or reuse the promo pop-up, scrim, chat button or cookie bar as brand UI.
- Don't use heavy shadows; only faint ones were measured.
- Don't specify weights through `font-weight`: each weight is a separate font file.

## Responsive Behavior

The 390px pass recorded: the first price heading "฿268" at DBHeavent-Medium 30px / 36px, and a navigation element 390 × 844px (the full-height menu panel) whose text begins "เข้าสู่ระบบ/สมัครสมาชิก หน้าหลัก ..." in DBHeavent-Bold 18px. The layout probe recorded 3 visible header links, no menu toggle and a maximum of 3 product-card columns. In the first run the mobile header measured 390 × 60px with the language label "ไทย". Breakpoints and the tile grid on small screens were not otherwise measured.

## Iteration Guide

1. Load DB Heavent regular, medium and bold; set canvas `#ffffff`, secondary `#898989`, accent `#006491`.
2. Build the header at 80px: text links, language, search, basket.
3. Place a 400px carousel, then a four-column grid of 12px-radius promotional tiles with name, description, price and a round add button.
4. Finish with a `#53565a` footer with a 5px `#9d2235` top border.
5. Keep pop-ups and chat controls out of the system.
6. Run `node web/scripts/verify-designs.mjs --slug=dominos` after edits.
