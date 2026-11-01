---
version: alpha
name: ร้านอาหารญี่ปุ่นยาโยอิ (Yayoi Thailand)
category: "Thai Brands"
description: "Yayoi Thailand restaurant and delivery site by MK Restaurant Group - white page under a #ffd500 yellow header, hot-pink (#f0609f) pill buttons with 80px radius and magenta (#ec008c) accents, set in db_helvethaica at 17.5px body and 35px bold headings."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#f0609f"
  on-primary: "#ffffff"
  surface-grey: "#f4f6f6"
  ink-muted: "#777777"
  accent-magenta: "#ec008c"
  accent-blue: "#2293e9"
  nav-bg: "#ffd500"
typography:
  display:
    fontFamily: db_helvethaica, Calibri, sans-serif
    fontSize: 35px
    fontWeight: 700
    lineHeight: 42px
  display-mobile:
    fontFamily: db_helvethaica, Calibri, sans-serif
    fontSize: 26.6px
    fontWeight: 700
    lineHeight: 31.92px
  button:
    fontFamily: db_helvethaica, Calibri, sans-serif
    fontSize: 17.5px
    fontWeight: 700
    lineHeight: 19.25px
  nav:
    fontFamily: db_helvethaica, Calibri, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28.8px
rounded:
  sm: 8px
  md: 10px
  lg: 15px
  xl: 30px
  2xl: 40px
  3xl: 80px
spacing:
  s1: 2px
  s2: 2.66px
  s3: 4px
  s4: 5px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 10.5px
  s9: 12px
  s10: 13.3px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 10.5px 30px
    height: 42px
    borderColor: "{colors.primary}"
  button-order:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.sm}"
    padding: 10px 8px
    height: 45px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.ink}"
---

## Overview

This is the Thai website of Yayoi (ยาโยอิ), the Japanese set-meal restaurant operated in Thailand by MK Restaurant Group (the about page names "บริษัท เอ็มเค เรสโตรองต์ กรุ๊ป จํากัด (มหาชน)"). The page title is "ร้านอาหารญี่ปุ่นยาโยอิ-ญี่ปุ่นครบเซต". The about page, which was opened, tells the brand legend: the first Yayoi opened in Tokyo's Kayabacho district in the Meiji era (1886), serving Western dishes as a set on one tray, the "teishoku" format that pairs hot rice with miso soup, a main dish and side dishes; it says there are over 360 branches in Japan.

The site doubles as an online ordering front. The header is a solid yellow `#ffd500` bar holding the Yayoi logo beside the pink "1642 DELIVERY" mark, a menu link, login and register links, a language dropdown (TH), a white "order now" button with a pink icon, a basket icon and a pink "MKONE CARD" tab. Below it a full-width promotional banner carousel (the capture shows a gummy-bear promotion for an MK wellness product), then a pink "popular menu" heading with a thumb icon, a row of category tabs (promotion, snacks, sets, donburi, bento, noodles, sides, drinks, desserts) with the active tab highlighted in yellow, and a three-column product grid. Each product card shows a square photo, an allergen notice in pink, small food-allergen icons, a bold Thai name with a lighter Japanese or secondary line, and a price in baht beside a pink pill add-to-basket button.

The voice is cheerful, promotional and price-led: set names, prices and promotions are the content, and every card ends with a price and a basket action.

## Colors

- **Canvas `#ffffff`**: the dominant background (area 5129).
- **Ink `#000000`**: the most-read text (1970 characters), used for names, nav and footer.
- **Ink muted `#777777`**: secondary lines (990 characters), such as the lighter subtitle under each product name.
- **Accent magenta `#ec008c`**: the third most-read text colour (609 characters); the extraction recorded it without naming the element.
- **Primary `#f0609f`**: the hot pink of the "view all" button fill, the order-now text, the section headings (the mobile h1 and h2 are `#f0609f`) and borders (two border measurements). It is a measured background area of 222.
- **On primary `#ffffff`**: text on the pink button.
- **Nav background `#ffd500`**: the yellow header bar (area 96).
- **Surface grey `#f4f6f6`**: the footer background (area 499). `#f2f2f2` was also measured as an area (85) and is not used.
- **Accent blue `#2293e9`**: 18 characters of text; the element was not identified.

The page's `rootVars` are the stock Bootstrap 4 set (`--primary: #007bff`, `--danger: #dc3545` and so on), and the extractor's link role is `#007bff`. Those are framework defaults and are not brand colours here.

## Typography

The brand font is db_helvethaica, loaded in regular, 400, 600 and 700 faces, with Calibri and the generic sans-serif as fallbacks; an icon font called icomoon provides glyphs. By character count db_helvethaica is used for 3578 characters and Verdana for 169.

- **Display** (section headings): 35px, 700, line-height 42px; 26.6px / 31.92px on the 390px mobile pass.
- **Button**: 17.5px, 700, line-height 19.25px.
- **Nav / links**: 16px, 400, line-height 28.8px.
- The most common sizes by character are 17.5px (1213 characters), 14px (1163), 15.12px (609), 13.3px (306), 28px (169) and 16px (93); also 15px, 13px, 16.8px, 17.6px and 11.97px.

The footer text is measured at 14px with weight 600. The site gives no substitute guidance; Calibri is its declared fallback.

## Layout

The desktop page is 1280px wide and 10021px tall, a long scrolling menu. The header is a single yellow row; the banner runs the full width; products are laid out in three equal columns with a large vertical gap between rows (the card photos in the capture are about a third of the width each, but exact column widths were not measured). Measured spacing steps are 2, 2.66, 4, 5, 8, 9, 10, 10.5, 12 and 13.3px, which come from buttons, tabs and inline icons. The footer is 446px high, in grey.

## Elevation & Depth

Three box shadows were recorded, all soft glows rather than drops: `rgba(0,0,0,0.1) 0px 0px 5px 0px` (the white order-now button), `rgba(0,0,0,0.3) 0px 0px 8px 0px` and `rgba(0,0,0,0.5) 0px 0px 8px 0px`. Product cards and the footer show no shadow in the measured roles. Colour planes (yellow header, pink actions, photographic banner) carry the hierarchy.

## Shapes

Radii measured by element count: 40px (42 elements), 30px (14), 10px (4), 80px (2), 15px (1), 8px (1) and an asymmetric `0px 0px 15px 15px` (1). The primary "view all" button is a pill with `border-radius: 80px`. The white order-now button uses 8px. A 5px radius was measured only on the cookie-consent accept button, so it is not included as a token.

## Components

- **Primary button** ("ดูทั้งหมด", view all): pink `#f0609f` fill, white 17.5px bold text, `10.5px 30px` padding, 42px tall, 1px solid `#f0609f` border, 80px radius.
- **Order-now button** ("สั่งอาหารทันที"): white fill, pink `#f0609f` 16.8px bold text, 8px radius, 45px tall, `10px 8px` padding. On hover it inverts to a pink fill with white text (measured).
- **Header**: yellow `#ffd500`, black links; hover underlines the menu and login links.
- **Category tabs**: Thai labels in black, the active tab on a yellow rounded chip.
- **Product card**: square image, pink allergen line, allergen icons, name, price and a pink pill basket button.
- **Footer**: grey `#f4f6f6`, black 14px/600 links in several columns (promotions, menu, branches, about, contact, feedback).

The cookie consent bar at mid-page (with a pink "ยอมรับ" button) is a consent popup and is not documented as brand UI.

## Design System Architecture

No public design system or brand guideline was found: the homepage links only to /aboutus, and no brand, press or design link appears. The site is built on Bootstrap 4 (stock `rootVars` colours, `--breakpoint-sm: 576px`, `--breakpoint-md: 768px`, `--breakpoint-lg: 992px`, `--breakpoint-xl: 1200px`) with a custom brand layer: the licensed Thai display face db_helvethaica, the icomoon icon font, pink and yellow brand fills and a shared MK group header ("MKONE CARD"). Sources opened: https://yayoirestaurants.com and https://yayoirestaurants.com/aboutus.

## Do's and Don'ts

- Do use hot pink `#f0609f` for headings, buttons and prices' basket actions, and yellow `#ffd500` only for the header and active tab.
- Do make main call-to-action buttons 80px pills with 10.5px 30px padding and bold 17.5px text.
- Do show a price and a basket button on every product card.
- Do keep Thai names bold black and secondary lines in `#777777`.
- Don't use Bootstrap blue `#007bff` as a link or brand colour.
- Don't treat the cookie bar or its 5px button as brand UI.
- Don't assign shadows to cards; only the order-now button and two glow values were measured.
- Don't invent the element for magenta `#ec008c` or blue `#2293e9`; they were measured without a named role.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 ("เมนูยอดนิยม") is 26.6px, weight 700, line-height 31.92px, and the h2 is the same size; the primary button keeps `10.5px 30px` padding, 42px height, 80px radius and a 128px width; the header is `#ffd500` with 12px text. How the grid, tabs and navigation reflow was not measured.

## Iteration Guide

1. Start from the tokens: canvas, ink, primary, nav-bg and the db_helvethaica scale.
2. Reuse the pill button for primary actions and the white 8px button for ordering.
3. Keep the yellow header and pink action language; avoid Bootstrap's blue.
4. Measure any new component with `node web/scripts/extract-tokens.mjs` before adding it.
5. Verify with `node web/scripts/verify-designs.mjs --slug=yayoi-thailand`.
