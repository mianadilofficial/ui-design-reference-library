---
version: alpha
name: "Makesend"
category: "Thai Brands"
description: "Makesend Sameday-Delivery Thai courier site: white canvas, navy #06163a headings, brand orange #f47929 buttons, golden #fcc500 benefit band, Kanit for Thai and Latin, 4px radii and soft low-opacity shadows."
colors:
  canvas: "#ffffff"
  ink: "#06163a"
  primary: "#f47929"
  accent-yellow: "#fcc500"
  on-primary: "#ffffff"
  surface-black: "#000000"
  surface-soft: "#f6f6f6"
  ink-muted: "#54595f"
  ink-slate: "#3f485d"
  text-input-border: "#dadada"
typography:
  display:
    fontFamily: Kanit, kanit
    fontSize: 40px
    fontWeight: 600
    lineHeight: 50px
  heading:
    fontFamily: Kanit, kanit
    fontSize: 28px
    fontWeight: 400
    lineHeight: 28px
  subheading:
    fontFamily: Kanit, kanit
    fontSize: 24px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: Kanit, kanit
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Kanit, kanit
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
  nav:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: Kanit, kanit
    fontSize: 15px
    fontWeight: 500
    lineHeight: 15px
rounded:
  xs: 3px
  sm: 4px
  md: 10px
  pill: 9999px
spacing:
  s1: 5px
  s2: 7.2px
  s3: 10px
  s4: 12px
  s5: 13px
  s6: 14.4px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 15px 30px
    height: 47px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    padding: 12px 24px
    height: 39px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-slate}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 6px 16px
    height: 47px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 0px 10px 0px
  footer:
    textColor: "{colors.primary}"
---

## Overview

Makesend (makesend.asia, measured on the English path /en/ of a Thai-language site; title "Makesend Sameday-Delivery บริการส่งพัสดุด่วนวันเดียวถึง") is a Thai same-day delivery service. According to the fetched page it covers Bangkok and its vicinity, offers standard and temperature-controlled shipping, cash-on-delivery, drop-off at MAKESEND GO or ShipSmile partner branches, home pickup in two windows (8:00 to 10:00 and 10:00 to 12:00, booked and paid in advance), a MAKESEND GO franchise, and lists prices starting at 60 baht. The home page is a bright, friendly logistics storefront: a white header with the orange cube logo and a pink-orange tagline "ส่งทุกอย่างวันเดียวถึง", an outlined orange "สมัครใช้บริการ" button, a text-link row of navigation, a hero illustration of a white delivery pickup with an orange refrigerated body and a tiger mascot holding a parcel beside the headline "ส่งภายในวัน คุมอุณหภูมิ" in orange and blue, then a parcel-tracking bar, three photo cards (bakery and drinks, chilled goods, fruit and agriculture), a golden-yellow "ทำไมต้องใช้ MAKESEND" band with a courier in an orange uniform, and a "ลูกค้าที่ไว้ใจเรา" row of customer logos. The page measures 6075px tall at 1280px. A floating chat launcher (a round pink-red button labelled "Open chaty" with a "ติดต่อเรา" tooltip) appears in the capture; it is a third-party widget and is not documented as brand UI or as a token.

## Colors

`ink` `#06163a` is a deep navy used for headings (210 characters); `ink-slate` `#3f485d` and `ink-muted` `#54595f` carry secondary text; white text (1627 characters) sits on photos and on the orange buttons. `primary` `#f47929` is the brand orange: the tracking "ตรวจสอบ" button fill, the "ดูข้อมูลเพิ่ม" card buttons, the sign-up outline button and the header link color. `accent-yellow` `#fcc500` is the golden band behind the "why use Makesend" block (area 724). Other measured fills: `#000000` (area 1620, the dark photo overlays on the service cards), `surface-soft` `#f6f6f6`, `#bbbbbb`, `#ff3514` and `#ff6600` (hero and illustration areas), and `#ff6060`, `#03e78b` and `#38b900` which belong to the chat widget and messaging buttons and are excluded. The input border is `#dadada`. The text `#cc3366` was measured on the chat widget, so it too is not a token. The WordPress preset colors in the root variables (`#9b51e0`, `#f78da7`, `#abb8c3`) and a pastel purple-to-blue gradient variable (`--eb-gradient-primary-color`) are theme defaults and do not appear in the measured page colors.

## Typography

Everything is Kanit (weights 400, 500, 600 and 700 loaded), a Thai-and-Latin sans, with the browser default system stack used only for plain links and the sign-in text. Display is 40px on a 50px line height at weight 600; sections use 28px/28px at weight 400, 24px/24px at 500 for sub-headings (the sub-line "บริการของ MAKESEND Sameday-Delivery Thailand"), 16px/24px body, 16px/16px at weight 500 for the main button and 15px/15px at 500 for card buttons and the navigation. The most-read sizes are 16px (904 characters), 14px (531), 21px (205), 12px (149), 28px, 24px and 20px; larger sizes of 30px, 40px, 45px and 50px are used for hero and band headings. Thai line heights are tight on buttons (equal to font size) and relaxed on body (24px for 16px).

## Layout

The layout is a centered content column with full-bleed bands. The header is two tiers: a white utility row (logo, sign-up and sign-in) and a link row with an orange underline on the active "หน้าแรก". The tracking widget is a bordered white box centered under the hero containing a "ติดตามพัสดุ" tab, an input with the placeholder `MS123456` and the orange "ตรวจสอบ" button. The three service cards sit in a three-up row with white captions bottom-left over darkened photographs, each with a small orange "ดูข้อมูลเพิ่ม" button. The yellow band splits an image on the left from a three-point benefit list on the right. Measured paddings are 10px (64 uses), 20px (44) and 30px (16), with gaps of 5px.

## Elevation & Depth

Three shadows are measured: `rgba(0, 0, 0, 0.15) 0px 0px 10px 0px` (three elements), `rgba(0, 0, 0, 0.15) 0px 1.93465px 7.73859px 0px` and `rgba(73, 104, 126, 0.16) 0px 16px 24px 0px`. They are soft and low-opacity, used on floating boxes such as the tracking widget and the chat launcher. Otherwise depth comes from dark photo overlays and the flat color bands.

## Shapes

Measured radii are 50% (9 elements, the circular widget buttons and icons), 3px, 999px (3, pill shapes), 4px (2, the primary button and input) and 10px (1). The primary tracking button and the text input both use 4px (`rounded.sm`); the card buttons measure 0px; `rounded.xs` 3px is used by the card token; `rounded.md` 10px appears once.

## Components

- **Primary button:** "ตรวจสอบ", Kanit 500 16px, white on `#f47929`, 15px 30px padding, 47px tall, 144px wide, 4px radius.
- **Secondary button:** "ดูข้อมูลเพิ่ม", 15px/500, white on `#f47929`, 12px 24px padding, 39px tall, square corners.
- **Outline button:** "สมัครใช้บริการ" in the header, orange text and orange border on white; on hover it fills `#f47929` with white text (measured).
- **Text input:** white, 1px `#dadada` border, Kanit 400 16px, 6px 16px padding, 47px tall, 4px radius.
- **Hero CTA:** "เริ่มจัดส่งเลย!" with an arrow, a large orange rounded pill in the capture (its size was not measured as a role).
- **Customer logo row:** King Power, Bonnana, Uncle Boss, Calories Killer, Crab House and others as flat logos on white.

## Design System Architecture

No design system, brand guideline or press kit is linked from the page: the fetched page offers only the logo asset, sign-up, tracking, contact and FAQ links (source: https://www.makesend.asia/en/). The de-facto system is a WordPress build: root variables use the `--wp--preset--*` naming for palette, font sizes (`--wp--preset--font-size--large` 36px) and shadows, a Font Awesome icon set (Font Awesome 5 Free loaded; 6 Pro variables declared) and an Essential Blocks gradient variable `--eb-gradient-primary-color`. Brand color and type are applied in the theme CSS rather than as named variables.

## Do's and Don'ts

- Do use the orange `#f47929` for every call to action and for link text.
- Do set copy in Kanit and keep Thai line heights at 24px for 16px body.
- Do use the golden `#fcc500` as a full-width band behind benefit lists.
- Do keep buttons at 4px or square.
- Don't add the chat widget colors or the WordPress presets to the palette.
- Don't use heavy shadows; the measured ones are 15% black or less.
- Don't set headings in Latin-only fonts; Kanit carries both scripts.

## Responsive Behavior

The 390px mobile pass measured the h1 at 40px on a 50px line height (the same as desktop) and the h2 at 24px on 28.8px; the measured mobile size list is 16px, 21px, 12px, 24px, 14px, 28px, 30px, 40px, 15px, 26px, 17px and 13px. Column counts, navigation form and breakpoints on mobile are not measured.

## Iteration Guide

1. Build on white with navy `#06163a` headings and orange `#f47929` actions.
2. Insert one yellow `#fcc500` band per page for reasons-to-buy.
3. Use Kanit 40px/50px 600 for the hero, 16px/24px for body.
4. Keep inputs and primary buttons 47px tall with 4px radius.
5. Run `node web/scripts/verify-designs.mjs --slug=makesend` after changes.

## Voice

The fetched copy is promotional, friendly and direct, with English brand terms mixed into Thai and occasional exclamation marks: "ส่งด่วน วันเดียวถึง", "ส่งเช้าได้เย็น รับประกันส่งถึงมือผู้รับภายในเวลาที่กำหนด หากส่งช้ายินดีคืนเงิน 100%", "อยู่บ้านก็ส่งได้" and "ส่งทุกอย่างภายในวันเดียว ไม่ว่าจะส่งอาหาร สินค้า หรือของใช้ ให้เราช่วยคุณจัดการการส่งอย่างมืออาชีพ!". The partner network named on the page includes J&T Express, Shippop and Teleport by AirAsia.
