---
version: alpha
name: MCOT TV (9 MCOT HD)
category: "Thai Brands"
description: "tv.mcot.net/tv/th, the MCOT operator portal for 9 MCOT HD: deep violet #190a22 canvas, #8b36bc purple pill buttons, a #5d0e8b sub-nav band, black #000000 top bar, white Kanit text at 16px and 48px, 8px and 16px card radii."
colors:
  canvas: "#190a22"
  page-body: "#d6dbdc"
  ink: "#ffffff"
  ink-muted: "#bdbdbd"
  ink-faint: "#616161"
  primary: "#8b36bc"
  on-primary: "#ffffff"
  violet-deep: "#5d0e8b"
  footer-deep: "#110618"
  header-black: "#000000"
  surface-card: "#242424"
  live-red: "#be0217"
  a11y-orange: "#ff6b00"
  a11y-yellow: "#ffff00"
typography:
  display:
    fontFamily: __Kanit_8d5f5e, __Kanit_Fallback_8d5f5e
    fontSize: 48px
    fontWeight: 400
    lineHeight: 48px
  heading:
    fontFamily: __Kanit_8d5f5e, __Kanit_Fallback_8d5f5e
    fontSize: 36px
    fontWeight: 600
  subheading:
    fontFamily: __Kanit_8d5f5e, __Kanit_Fallback_8d5f5e
    fontSize: 30px
    fontWeight: 400
  body:
    fontFamily: __Kanit_8d5f5e, __Kanit_Fallback_8d5f5e
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  none: 0px
  xs: 6px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 117.14px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 28px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 8px 40px
    height: 40px
  button-anchor:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    height: 40px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  sub-nav:
    backgroundColor: "{colors.violet-deep}"
    textColor: "{colors.ink}"
  top-bar:
    backgroundColor: "{colors.header-black}"
    textColor: "{colors.ink}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
  footer:
    backgroundColor: "{colors.footer-deep}"
    textColor: "{colors.ink}"
---

## Overview

The queued address `https://tv.mcot.net/mcothd` rendered only a "Page not found" screen with skeleton placeholders (the route no longer exists, although the server answers HTTP 200). The site's own root, `https://tv.mcot.net/`, redirects to `https://tv.mcot.net/tv/th`, which is MCOT's television portal and where Channel 9 appears as "9 MCOT HD" (page title "9 MCOT HD"). Because that URL is the broadcaster's own operator site, this file documents the measured portal at `/tv/th` and is named after it; the tokens were regenerated from that measurement, not from the 404 page.

The portal is a dark, purple-lit streaming-and-catch-up page, 3,445px tall at 1280px width. The measured stack is: a 120px black top block holding a utility row (text-size controls "ขนาดตัวอักษร", color-contrast controls "ความตัดกันของสี", "Terms & Condition", "ติดต่อเรา" and a login/register link) and the MCOT group links (หน้าแรก, สำนักข่าวไทย, NINEENTERTAIN, 9MCOT HD, วิทยุ, BACKBONE, MELLOW POP, MCOT ACADEMY, ESG, ข้อมูลองค์กร); a 64px `#5d0e8b` sub-nav band with the channel logo "MCOT HD 30" and pill links (หน้าหลัก, ผังรายการ, เรื่องเด่น, Live, ไฮไลท์, ไลฟ์สไตล์, รายการ, ชมย้อนหลัง) plus a search icon; a 452px hero with "MCOT 30 HD", a "รับชมรายการสด" (watch live) label and a video player; a row of four program-schedule tiles; a promotional banner carousel; and rows of program posters, catch-up videos, Shorts, a featured news story and news cards, ending in a footer.

The look is cinematic: purple-black gradients, rounded translucent tiles, program key art in full color, white Thai text. Imagery is broadcast stills, posters and news photos; the hero carries a video player. Microcopy is Thai ("รับชมรายการสด", "ผังรายการทั้งหมด", "ดูทั้งหมด") with Latin brand names in capitals (NINEENTERTAIN, BACKBONE, MELLOW POP). An intro overlay (`intro-page-overlay`) was hidden before measurement and is not documented as brand UI; the cookie bar seen on the 404 view is excluded as well.

## Colors

- **Canvas `#190a22`** is the main page background (2,640 area units) and the background of the news section; surrounding bands use close variants (`#170920`, `#1d0b2a`, `#1e0c2b`). **Footer-deep `#110618`** (410 units) is the footer band.
- **Header black `#000000`** (4,121 units) is the top block; **violet-deep `#5d0e8b`** (700 units) is the sub-nav band and a 2-use border color.
- **Primary `#8b36bc`** is the pill-button fill ("ผังรายการทั้งหมด", "ดูทั้งหมด") and the active sub-nav pill "หน้าหลัก", with white `on-primary` text. It is also the heading color for "เรื่องเด่น" (30px / 600).
- **Ink `#ffffff`** is the text color for nearly everything (5,819 characters); **`#bdbdbd`** (65) and **`#616161`** (51) are muted text and meta.
- **Surface card `#242424`** (100 units) is the dark gray tile fill.
- **Live red `#be0217`** is a small red badge for the "LIVE" label (2 units).
- **`#ff6b00` orange and `#ffff00` yellow** are the two tiny accessibility-contrast circle controls in the top utility row; they are measured once each and are not UI accents elsewhere.
- **Page-body `#d6dbdc`** is the `body` element's background color in the stylesheet, covered by the dark sections in the capture; `#ffffff` is also a large area (5,043 units) that the capture does not tie to an element.

Other values in the shipped CSS (`--swiper-theme-color: #007aff`, `--tw-ring-color: rgba(59,130,246,.5)`) belong to libraries and are not brand colors.

## Typography

One family: **Kanit**, delivered as a self-hosted Next.js font (`__Kanit_8d5f5e` with a metric-matched `__Kanit_Fallback_8d5f5e`), loaded at 400 and 700. It covers 5,947 of 5,947 weighted characters. The stylesheet also declares `__Anton_ec6dc7` and `__Inter_f367f3`, which were not measured on rendered text. Weights in use: 400 (4,912 characters), 500 (873) and 600 (162).

- **Display**: Kanit 48px / 48px, weight 400, white, for "MCOT 30 HD" in the hero (265px wide, 48px tall).
- **Heading**: Kanit 36px, weight 600, white, for row titles such as "รายการ" (36px / 600 in the section-title bands).
- **Subheading**: Kanit 30px, weight 400, for "ช่อง 9 MCOT HD" and "Shorts" beneath the row titles; "เรื่องเด่น" is 30px / 600 in `#8b36bc`.
- **Body**: Kanit 16px / 24px, weight 400 (4,910 characters, the dominant size), also the button and link size. Other sizes by characters: 18px (397), 14px (327), 20px (165), 12px (54), 24px (29), 10px (13), 36px (12), 48px (10).
- The `body` element itself is 10px / 15px (the tiny "v.prd:0.0.158" build label at the top right).

No letter-spacing or text-transform was measured. Thai has no case; the Latin brand names are set in capitals as written.

Font substitute if Kanit is unavailable: another Thai-capable geometric sans with 400, 500 and 600 cuts; this is a suggestion, not a measurement.

## Layout

At 1280px, the content edges of the main bands are x = 64 and x = 1216 (a 1,152px content width); the black top block runs from 64 to 1276, the sub-nav pill group begins at x = 173, and the news section edges are 76 and 1204. The hero band is 452px tall, followed by a 226px schedule-tile row and a 226px banner carousel; poster rows are 384px and 239px tall, the catch-up row 419px, and the news section 1,275px. The measured band summary records `columns` = 4 for the poster and catch-up bands.

Measured gaps: 10px (48 uses), 8px (42), 16px (23), 12px (12), 4px (10), 40px (6). Paddings: 8px (15 uses), 20px (12), 6px (10), 4px (8), 64px (7), 16px (5). The page uses Swiper carousels (`--swiper-navigation-size: 44px`) with round arrow buttons, and rows are introduced by a circular outline icon and a two-line title at left, with a "ดูทั้งหมด" (see all) outlined pill at the right of the section.

## Elevation & Depth

One shadow dominates: `rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px` (111 measured uses, preceded by two zero-offset ring layers), the utility-framework "large" shadow; a smaller `rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px` appears once. NextUI shadow variables are also declared (`--nextui-box-shadow-small`, `-medium`, `-large`). On a near-black field these shadows are hard to see; depth comes mostly from stepped background colors (`#000000`, `#190a22`, `#242424`, `#5d0e8b`) and rounded tiles over purple glow artwork.

## Shapes

Rounded everything. Measured radii: 8px (231 uses, the most common; equal to `--nextui-radius-small`), 16px (62), `9999px` (24, the pill buttons and chips), 12px (11, `--nextui-radius-medium`), 6px (9), `117.14px` (1), plus an asymmetrical `8px 0px 8px 8px` (2) and a bottom-rounded `0px 0px 12px 12px` (1). The primary pill button measured `9999px` with `8px 40px` padding at 197×40px; the anchor element wrapping the same label measured 0px, so both are recorded as tokens.

## Components

- **Pill button**: `#8b36bc` fill, white Kanit 16px / 24px, `8px 40px` padding, 197×40px ("ผังรายการทั้งหมด"), `9999px` radius. The capture also shows outlined "ดูทั้งหมด" pills; ten white borders are measured on the page.
- **Sub-nav**: 64px `#5d0e8b` band; the active item "หน้าหลัก" is a `#8b36bc` pill; other items are white text. Focus on the "หน้าหลัก" link records an outline of `1px auto rgb(0, 95, 204)` with a 1px offset.
- **Top bar**: 120px black, with accessibility controls (three letter-size buttons, a contrast control with orange and yellow circles), small utility links and the MCOT group link row.
- **Schedule tile**: four dark rounded tiles with a time range; the active tile is purple with a red "LIVE" badge.
- **Poster / video card**: rounded 8px-to-16px image, then a title; catch-up cards add a date and a view count with small icons.
- **Feature story**: large image card with a date and view count, headline and a long Thai paragraph on the right.
- **Footer**: `#110618` with the MCOT HD logo, link list (หน้าแรก, คำถามที่พบบ่อย, รายการที่น่าสนใจ), the company name and address ("บริษัท อสมท จำกัด (มหาชน)", 63/1 Rama IX Rd., Huai Khwang, Bangkok 10310), contact lines and five round outlined social icons.
- Hover states were not recorded (the hover list is empty), so they are not measured.

## Design System Architecture

No public design-system or brand-guideline page was found on the pages opened (`https://tv.mcot.net/tv/th`, whose navigation lists MCOT group services and company information). The de-facto system is a Next.js application using NextUI and Tailwind CSS utility variables, visible in the shipped `:root` at the same URL: `--nextui-radius-small: 8px`, `--nextui-radius-medium: 12px`, `--nextui-radius-large: 14px`, `--nextui-font-size-tiny: 0.75rem`, `--nextui-font-size-small: 0.875rem`, `--nextui-font-size-medium: 1rem`, `--nextui-border-width-small: 1px`, `--nextui-border-width-medium: 2px`, `--nextui-divider-weight: 1px`, three `--nextui-box-shadow-*` values, and Tailwind `--tw-*` ring and shadow variables. Fonts come from `next/font` (hashed family names such as `__Kanit_8d5f5e`), and carousels from Swiper. The brand layer is the purple palette and Kanit applied over those defaults; component names and brand tokens are not exposed.

## Do's and Don'ts

Do:
- Build on the dark violet `#190a22` canvas with white Kanit text and `#8b36bc` pill actions.
- Use stepped dark surfaces (`#000000`, `#5d0e8b`, `#242424`, `#110618`) rather than borders for structure.
- Keep corners rounded at 8px for cards, 16px for large tiles and `9999px` for buttons.
- Use red only for live indicators.

Don't:
- Don't document the cookie bar, the intro overlay or the 404 page as brand UI.
- Don't use the orange and yellow contrast-toggle dots as accent colors.
- Don't use library blues (`#007aff`, `rgba(59,130,246,.5)`) as brand colors.
- Don't use square buttons; the measured primary is a pill.

## Responsive Behavior

Measured at a 390px viewport (mobile pass): the hero heading stays 48px / 48px (265px wide); the first body paragraph stays 16px / 24px but its box changes from 332×352px on desktop to 302×48px; the primary button stays 197×40px. Content edges move from x = 64 / 1216 to x = 32 / 358, and the band summary records `columns` = 1 on the mobile pass where the desktop poster and catch-up bands record 4; the mobile band list runs to y = 6,529 (the last band starts at 5,794 and is 735px tall) against a 3,445px desktop page height. The mobile font-size table is led by 16px (4,906 characters), 18px (397), 20px (164), 14px (153). The visible header links and menu toggle were not detected in either pass (`headerLinksVisible` = 0, `menuToggleVisible` = false), so the header's mobile behavior is not measured. Tablet widths and a light theme were not measured.

## Iteration Guide

1. Start from `canvas #190a22`, white text and `#8b36bc` pill buttons (197×40px, `8px 40px` padding).
2. Use a black `#000000` top block and a `#5d0e8b` sub-nav band with a purple active pill.
3. Set Kanit at 16px / 24px for body and controls, 48px for the hero title, 36px / 600 for row titles.
4. Use 8px radius for cards, 16px for large tiles, `9999px` for buttons and chips.
5. Use the large utility shadow on cards, but rely on stepped background colors for depth.
6. Re-measure hover, the header on mobile, and the footer before specifying them exactly.
