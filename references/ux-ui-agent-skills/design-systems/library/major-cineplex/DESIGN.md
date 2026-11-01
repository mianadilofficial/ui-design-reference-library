---
version: alpha
name: "Major Cineplex"
category: "Thai Brands"
description: "Major Cineplex Thai cinema booking site: pure black canvas, white DB Gin Siam X type, gold #d2aa5a structure with a gold BUY TICKET bar, hot red #ff283c booking button, 10px posters and 26px metadata pills."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ff283c"
  on-primary: "#ffffff"
  surface-grey: "#aeaeae"
  ink-muted: "#8e8e93"
  gold: "#d2aa5a"
  gold-alt: "#d4aa58"
  ink-slate: "#8a9299"
  button-secondary-bg: "#d3aa59"
typography:
  display:
    fontFamily: "\"DB Gin Siam X\""
    fontSize: 40px
    fontWeight: 500
    lineHeight: 48px
  subheading:
    fontFamily: "\"DB Gin Siam X\""
    fontSize: 28px
    fontWeight: 500
    lineHeight: 33.6px
    textTransform: uppercase
  body:
    fontFamily: "\"DB Gin Siam X\""
    fontSize: 10px
    fontWeight: 400
    lineHeight: 15px
    textTransform: uppercase
  button:
    fontFamily: "\"DB Gin Siam X\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
    textTransform: uppercase
  nav:
    fontFamily: "\"DB Gin Siam X\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: "\"DB Gin Siam X\""
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  button-secondary:
    fontFamily: "\"DB Gin Siam X\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
    textTransform: uppercase
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 7.5px
  xl: 10px
  2xl: 16px
  3xl: 20px
  4xl: 26px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 7.5px
  s7: 10px
  s8: 13px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 30px
    height: 29px
    borderColor: "{colors.primary}"
    boxShadow: rgba(0, 0, 0, 0.3) 5px 5px 10px 0px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    padding: 13px 22px
    height: 54px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
    padding: 10px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    boxShadow: rgb(0, 0, 0) 2px 50px 50px 6px inset
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.gold}"
    padding: 30px 0px
---

## Overview

Major Cineplex (majorcineplex.com, measured at /home/) is the Thai cinema chain's showtime and ticket-booking site. Per the fetched page, the navigation reads หน้าหลัก (Home), ภาพยนตร์ (Movies), โรงภาพยนตร์ (Cinemas), โปรโมชั่น (Promotions), ข่าว (News), FAQ and an investor-relations link, with logos for special formats (Major Generation, IMAX, Kids Cinema and VIP Cinema) in the header. The home page is a dark, poster-dense catalogue: a full-width promotional banner carousel, "ภาพยนตร์แนะนำ" (recommended films) as a horizontally scrolling poster rail, a gold "BUY TICKET" search bar (film select, cinema select, and a red "รอบฉาย" button), format filter tabs (IMAX, Dolby Vision+Atmos, 4DX, Screen X, Kids, LED, Dolby Atmos, Pet Cinema), "กำลังฉาย" (now showing), "โปรแกรมหน้า" (coming soon), a "5 อันดับหนังทำเงินประจำสัปดาห์" weekly top-five with Major and US tabs, promotions, "MOVIE UPDATE" news and a black footer with brand logos. The measured page is 6974px tall at 1280px. The capture also shows a cookie-policy button, an app-download QR pop-up, a chat launcher and third-party ad blocks; none of these are documented here as brand UI or tokens. The look is cinematic: black canvas, posters as the only imagery, warm gold for structure, and one hot red for the single booking action.

## Colors

`canvas` `#000000` is the page background and `ink` `#ffffff` is the text color for almost all copy (69006 characters). `primary` `#ff283c` is the booking-action red (the "รอบฉาย" button fill and border). Gold is the structural accent: `gold` `#d2aa5a` is the footer link and heading text (2255 characters) and, with `button-secondary-bg` `#d3aa59` (the ข่าวภาพยนตร์ button) and `gold-alt` `#d4aa58`, forms the gold family; `#c8a255` is a further measured gold background. The BUY TICKET bar uses this gold. Neutrals: `ink-muted` `#8e8e93` (3768 characters, dates and metadata), `ink-slate` `#8a9299`, `surface-grey` `#aeaeae` (the largest measured background area, 2867, which covers banner and ad frames), `#151515` (701) and `#353535`. The Bootstrap default link blue `#007bff` appears as a computed link color in the stylesheet; it is a framework default and is not brand color, so it is not a token. Root variables also hold the Bootstrap palette (`--yellow` `#ffc107`, `--red` `#dc3545`, `--indigo`, `--pink`) and cookie-banner variables (`--btn-reject-bg` `#f11919`, `--bar-text-color` `#0f0`), which belong to the framework and the consent widget. The site's own body variables are `--cc-bg-body` `#0F1822` and `--cc-bg` `#15202B`, which also belong to the consent widget.

## Typography

DB Gin Siam X (regular and bold) is the family of virtually all text (74325 characters), with Open Sans as a small secondary (13 characters, the body element). Measured sizes by character count: 16px (59540, the default for titles, dates and labels), 20px (6474), 30px (4106), 14px (3660), 17px (2189), 22px, 24px, 18px, 40px, 32px, 28px. The h1 "ภาพยนตร์แนะนำ" is 40px on a 48px line height at weight 500; footer headings are 28px/33.6px at 500 uppercase; the main button is 18px/27px uppercase; the secondary button is 20px/26px; navigation is 16px/24px, and the nav bar itself measures 18px/27px. The smallest label is 10px (the "ADVERTISEMENT" tag). Thai text is not tracked and keeps the 1.5 line-height ratio of 16px/24px.

## Layout

A content column (the h1 block measures 1220px wide) is centered on a black page with a red-to-black glow behind the top of the page and a patterned nav background image. Poster rails scroll horizontally with arrow controls in circles at the right edge. Each card stacks a poster, a release date in muted grey, the title, and small grey pill chips for language and runtime. The BUY TICKET bar is a full-width gold band with a bold label, two dropdowns outlined in black and a red button. Measured paddings: 6px (304 uses), 16px (300), 5px, 15px, 10px, 30px, 38px and 80px.

## Elevation & Depth

Two shadows are measured: `rgb(0, 0, 0) 2px 50px 50px 6px inset` on four poster cards (a heavy black inner vignette at the bottom of each poster) and `rgba(0, 0, 0, 0.3) 5px 5px 10px 0px` on the red booking button. Beyond these, depth comes from the poster artwork and the red-to-black gradient behind the header.

## Shapes

Radii measured: 26px (300 elements, the pill chips on poster cards, `rounded.4xl`), 10px (207, posters and cards, `rounded.xl`), 5px (200, buttons and inputs, `rounded.md`), 16px (15), 3px, 4px, 50%, 30px, 50px, 20px and 7.5px on top corners only. The booking button is 5px; the secondary "ข่าวภาพยนตร์" button is a 50px pill.

## Components

- **Booking button (button-primary):** "รอบฉาย", 18px/27px uppercase, white on `#ff283c`, 0px 30px padding, 29px tall, 108px wide, 5px radius, 1px red border and a soft 30% black shadow.
- **Secondary button:** "ข่าวภาพยนตร์", 20px/26px, black text on gold `#d3aa59`, 13px 22px padding, 54px tall, 50px radius.
- **BUY TICKET bar:** gold band with two outlined selects ("ค้นหาภาพยนตร์", "เลือกโรงภาพยนตร์"), the connector "AT" and the red button.
- **Poster card:** poster with an "ADVANCE TICKET" corner ribbon where applicable, grey date, white title and grey chips with 26px radius.
- **Format tabs:** a text-only row, the active one ("กำลังฉาย") in gold.
- **Footer:** black background with a background image, gold headings and links in uppercase 28px/33.6px, and brand logos along the bottom.

## Design System Architecture

No design system or brand guideline is published; the fetched page links to the logo asset, format logos, a VIP Cinema microsite (https://www-microsite.majorcineplex.com/vip-cinema), an Infinity Vision microsite, an investor-relations site and an image CDN (source: https://www.majorcineplex.com/home/). The stylesheet is Bootstrap-based (`--breakpoint-xl: 1200px`, `--font-family-sans-serif`, the Bootstrap color names) with a bespoke theme on top that uses `--btn-radius: 8px` and `--logo-height: 5em`, and third-party consent-widget variables. The brand layer is applied in compiled theme CSS rather than named tokens.

## Do's and Don'ts

- Do keep the canvas pure black and let poster art supply the color.
- Do use red `#ff283c` only for the booking action and gold `#d2aa5a` for structure and headings.
- Do set Thai text in DB Gin Siam X at 16px/24px with grey `#8e8e93` metadata.
- Do use 26px pills for metadata chips and 10px for posters.
- Don't use Bootstrap blue, yellow or the consent widget greens and reds as brand colors.
- Don't put drop shadows on cards except the bottom inner vignette.
- Don't document pop-ups, chat launchers or cookie banners as brand UI.

## Responsive Behavior

The 390px mobile extraction recorded the h1 "ภาพยนตร์แนะนำ" at 40px on 48px (identical to desktop) and its size distribution matches desktop (16px, 20px, 30px, 14px, 17px, 22px, 24px, 18px, 40px, 32px, 28px, plus 10px and 0px entries); the "ADVERTISEMENT" label is 10px. Layout changes, navigation form and breakpoints on mobile are not measured.

## Iteration Guide

1. Start from black, white text and a gold band; add the single red action.
2. Use DB Gin Siam X 16px/24px for body, 40px/48px for section titles.
3. Compose posters in rails with date, title and 26px chips under each.
4. Keep buttons at 5px (action) or 50px (secondary).
5. Run `node web/scripts/verify-designs.mjs --slug=major-cineplex` after changes.

## Voice

The fetched copy is promotional but utilitarian: short Thai labels and English calls to action ("BUY NOW", "BUY TICKET", "ADVANCE TICKET", "ENG / SUBTITLE"), page title "เช็ครอบหนัง เช็ครอบฉาย โปรแกรมหนังกำลังฉาย", and group-booking contact "ติดต่อฝ่ายขาย". Genre chips read ตลก, แอ็คชัน, สยองขวัญ. Part of the page text (the last 28677 characters) was not read.
