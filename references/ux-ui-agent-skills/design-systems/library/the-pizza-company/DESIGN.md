---
version: alpha
name: The Pizza Company
category: "Thai Brands"
description: "The Pizza Company 1112, Thai pizza ordering site (1112.com/th): white and #f2f4f7 surfaces, brand green #00794e buttons with 16px and 12px radii, red #e70000 deal flags, FC-Iconic Thai display type in five weights and soft 4px card shadows."
colors:
  canvas: "#ffffff"
  page-largest: "#f2f4f7"
  ink: "#1d2939"
  primary: "#00794e"
  on-primary: "#ffffff"
  surface-footer: "#101828"
  ink-muted: "#667085"
  ink-on-dark: "#fcfcfd"
  ink-heading: "#414142"
  accent-red: "#e70000"
  primary-hover: "#008556cc"
  card-border: "#eaecf0"
  price-green: "#338f25"
  surface-mint: "#ebfbea"
typography:
  display:
    fontFamily: FC-Iconic, Arial, serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 32px
    textTransform: uppercase
  display-mobile:
    fontFamily: FC-Iconic, Arial, serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 28px
  button:
    fontFamily: FC-Iconic, Arial, serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 24px
    textTransform: uppercase
  nav:
    fontFamily: FC-Iconic, Arial, serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 23px
  button-secondary:
    fontFamily: FC-Iconic, Arial, serif
    fontSize: 24px
    fontWeight: 600
    lineHeight: 32px
    letterSpacing: 0.15px
rounded:
  xs: 2px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 15px
  2xl: 16px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 16px 24px
    height: 58px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 4px 16px
    height: 48px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(16, 24, 40, 0.08) 0px 1px 4px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 16px
    borderColor: "{colors.card-border}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(16, 24, 40, 0.08) 0px 1px 4px 0px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-on-dark}"
    padding: 16px 0px
---

## Overview

The Pizza Company (1112) is Thailand's pizza delivery and takeaway brand, and the measured page is its online ordering home (`lang="th"`, title "เดอะ พิซซ่า คอมปะนี 1112 ออนไลน์ดิลิเวอรี ซื้อกลับ"). Unlike a brochure site, the first screen is an ordering interface: a white header with the round logo, a stamp-hunting link ("ล่าแสตมป์"), a basket, a green login/sign-up button, Live Chat and a TH/EN switch; a gray "pick-up by" bar offering delivery or store pick-up (with a "100.-" pick-up discount) and a location selector; a large yellow promotional carousel; a green "start ordering" button; and horizontal product rails ("พิซซ่า 1 แถม 1", "พิซซ่าถาดเดี่ยว", "10.10 FLASH DEAL!", "มาใหม่ต้องลอง!", "ชุดอิ่มเดี่ยว", "ชุดอิ่มกลุ่ม").

The look is bright, price-led and food-photographic: saturated green and red tiles with a checkerboard border motif, bold Thai display lettering, and small "1 FREE 1", "NEW!" and "HOT" corner flags.

## Colors

- **Canvas `#ffffff`** and **page-largest `#f2f4f7`**, a cool light gray that is the largest background area (5,013) behind the ordering rails; **card-border `#eaecf0`** outlines cards; **surface-mint `#ebfbea`** is a pale green tint.
- **Ink `#1d2939`** is the main text color (600 characters); **ink-muted `#667085`** is secondary (177); **ink-heading `#414142`** (94) is used on promotional section headings such as "พิซซ่า 1 แถม 1". **Ink-on-dark `#fcfcfd`** is text on the dark footer; **surface-footer `#101828`** is the footer fill (an overlay version `#101828cc` is also measured).
- **Primary `#00794e`** is the brand green, the fill of both measured buttons (white text) and also the color of 202 characters of link and price text. Hover is `#008556cc` (measured `rgba(0, 133, 86, 0.8)`). **Price-green `#338f25`** is used for price text (92 characters).
- **Accent-red `#e70000`** (a measured background and border value, area weight 25) is the red of the "FLASH DEALS" strip and corner flags.

The cool gray scale (`#1d2939`, `#667085`, `#eaecf0`, `#101828`) is the interface layer; the promotional artwork supplies yellow, orange and deep red.

## Typography

One family is loaded in five weights: **FC-Iconic** (1,645 characters; weights 300, 400, 500, 600, 700), a Thai-Latin display face with an Arial fallback. Weight by characters: 500 (911), 400 (323), 700 (300), 300 (80), 600 (31).

- **Display** is FC-Iconic 700, 32px, line height 32px, uppercase (rail headings); 28px weight 500 on mobile.
- **Button** is FC-Iconic 500, 24px, line height 24px, uppercase; the secondary (login) button measures 24px at weight 600 with 0.15px tracking and 32px line height.
- **Nav** is 400, 22px, line height 23px.
- Size distribution on desktop by characters: 24px (1,120), 21px (180), 28px (105), 32px (98), 20px (90), 16px (52). On mobile, 20px (854) and 24px (452) lead.

FC-Iconic is a Thai font family (FC Iconic); a rounded Thai-capable sans such as Noto Sans Thai Looped would substitute.

## Layout

The page is 1280px wide and 3,646px tall in the captured pass. A header is followed by a pick-up bar (two segmented options and a location dropdown), a full-width carousel, a centered CTA, then product rails with 4-up tiles where each tile has a title, a large photograph and a price line ("เริ่มต้นที่ ฿359"). Prices are green and bold with the list price struck through in gray. A floating cart button ("ตะกร้า") sits on the right edge. Common spacing steps are 2px to 32px (2, 4, 5, 6, 8, 10, 12, 16, 24, 32).

## Elevation & Depth

The nav and cards share a very soft shadow: `rgba(16, 24, 40, 0.08) 0px 1px 4px 0px`. Depth otherwise comes from tile photography and bright colored backgrounds, and from a `#101828cc` overlay.

## Shapes

Measured radii: 2px, 6px, 8px (cards), 12px (secondary/login button), 15px and 16px (primary button). Rounded rectangles are the dominant shape; tiles and the promo carousel have visible rounded corners in the capture, while the radii above are the only values recorded (118 elements use 12px).

## Components

- **Primary button.** Green `#00794e` fill and border, white FC-Iconic 500 24px uppercase text, padding 16px 24px, height 58px, radius 16px; hover `#008556cc`. Example label: "เริ่มสั่งพิซซ่า ซื้อ 1 แถม 1 ได้เลย!".
- **Secondary (login) button.** Same green, 12px radius, padding 4px 16px, height 48px; label "เข้าสู่ระบบ / สมัครสมาชิก".
- **Nav.** White bar with the soft shadow, ink-colored FC-Iconic 22px links.
- **Product card.** White, 8px radius, 16px padding, `#eaecf0` border, same soft shadow; title, photograph, price.
- **Footer.** `#101828` fill with `#fcfcfd` text and 16px vertical padding.

## Design System Architecture

No public design system was found on the page opened (https://www.1112.com/, which redirects to /th; see SOURCES.json). The stylesheet uses a cool gray ramp (`#1d2939`, `#667085`, `#eaecf0`) and a single custom brand family, FC-Iconic. The de-facto system is thus an ordering UI with a green primary, a red promotional accent and illustrated food tiles.

## Do's and Don'ts

- Do use `#00794e` for all primary actions and price links, with `#008556cc` on hover.
- Do show prices in bold green with struck-through list prices in gray.
- Do use rounded rectangles (8px cards, 12px to 16px buttons).
- Do keep flags ("NEW!", "1 FREE 1", "HOT") on photographs in red or green.
- Don't use the red `#e70000` for ordinary actions; it marks deals.
- Don't use heavy shadows; the only measured one is 4px at 8 percent.
- Don't present third-party sticky widgets (Live Chat, cart float) as brand tokens.

## Responsive Behavior

Measured at 390px: the h1 role is FC-Iconic 500 at 28px (324px wide), the h2 "พิซซ่า 1 แถม 1" is 24px weight 700 uppercase, and the primary CTA is a green button at 24px, weight 500. Mobile font sizes by characters are 20px (854), 24px (452), 21px (180), 16px (61), 28px (36) and 32px (4). Breakpoints, rail column counts and header collapse behavior on mobile were not measured.

## Iteration Guide

1. White and `#f2f4f7` surfaces, ink `#1d2939`, green `#00794e` for actions.
2. FC-Iconic everywhere: headings 700/32px, buttons 500/24px uppercase, nav 400/22px.
3. Primary button 58px tall, 16px radius; secondary 48px tall, 12px radius.
4. Cards 8px radius with 16px padding, `#eaecf0` border and a 4px 8 percent shadow.
5. Use red `#e70000` for deal flags only.
6. Do not add behaviors (dark mode, tablet layouts) that were not measured.

## Content and Voice

The voice is promotional, friendly and numeric. Headings and buttons lead with offers ("พิซซ่า 1 แถม 1", i.e. buy one get one, and "เริ่มสั่งพิซซ่า ซื้อ 1 แถม 1 ได้เลย!"), prices appear in baht with the starting price flagged ("เริ่มต้นที่ ฿359", "฿99" next to a struck-through "119"), and urgency labels such as "10.10 FLASH DEAL!", "Flash Deals ราคาพิเศษ!", "NEW!" and "HOT" are used on tiles. The header exposes membership and rewards ("ล่าแสตมป์", "เข้าสู่ระบบ / สมัครสมาชิก") and the mobile headline reads "รับรางวัลมากขึ้นเพียงแค่สมัครสมาชิก!" (earn more rewards just by signing up). Product names are short and descriptive Thai phrases (ชีสป๊อป, หนานุ่ม, บางกรอบ, เอ็กซ์ตรีมชีส) and sets are named by size (ชุดอิ่มเดี่ยว, ชุดอิ่มกลุ่ม). Photography shows overhead pizzas and boxed menu items on saturated green and red tiles with a checker-border motif; the main carousel uses illustrated shrimp characters and bold lettering for the BiTE campaign.
