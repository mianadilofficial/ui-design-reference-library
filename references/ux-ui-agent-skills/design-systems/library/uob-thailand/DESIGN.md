---
version: alpha
name: UOB Thailand
category: "Thai Brands"
description: "UOB Thailand (uob.co.th personal banking, in Thai) uses a white canvas, #005eb8 UOB blue for the header, headings and footer, #0084ff for 5px-radius action buttons, Noto Sans Thai Light 36px headings, 16px Regular body and white 10px-radius promotion cards with a soft 15px shadow."
colors:
  canvas: "#ffffff"
  ink: "#212121"
  primary: "#0084ff"
  on-primary: "#ffffff"
  surface-2: "#efefef"
  brand-blue: "#005eb8"
  brand-blue-dark: "#004585"
  brand-navy: "#00237b"
  ink-black: "#000000"
  ink-muted: "#6e6e6e"
  hairline: "#e6e6e6"
typography:
  display:
    fontFamily: "\"Noto Sans Light\", sans-serif"
    fontSize: 36px
    fontWeight: 300
    lineHeight: 45px
  display-mobile:
    fontFamily: "\"Noto Sans Light\", sans-serif"
    fontSize: 28px
    fontWeight: 300
    lineHeight: 38px
  subheading:
    fontFamily: "\"Noto Sans Bold\""
    fontSize: 17.5px
    fontWeight: 500
    lineHeight: 21px
  body:
    fontFamily: "\"Noto Sans Regular\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: "\"Noto Sans Bold\""
    fontSize: 15px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: "\"Noto Sans Bold\""
    fontSize: 13px
    fontWeight: 700
    lineHeight: 20.02px
    textTransform: uppercase
  link:
    fontFamily: "\"Noto Sans Bold\""
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 2.5px
  md: 5px
  lg: 10px
  pill: 9999px
spacing:
  s1: 3.13px
  s2: 3.75px
  s3: 5px
  s4: 7.5px
  s5: 8px
  s6: 10px
  s7: 15px
  s8: 20px
  s9: 30px
  s10: 50px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 10px 20px
    height: 44px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    height: 44px
  nav:
    backgroundColor: "{colors.brand-blue}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 0px 15px 0px
  footer:
    backgroundColor: "{colors.brand-blue}"
    textColor: "{colors.canvas}"
---

## Overview

This is the Thai-language personal banking home of UOB Thailand, `https://www.uob.co.th/personal/index.page` (page title "บริการด้านการเงินลูกค้าบุคคล บัตรเครดิต สินเชื่อ เงินฝาก | ธนาคาร UOB"). The measured page reads like a retail bank catalogue: a thin blue utility bar with audience and country switches ("ลูกค้าบุคคลทั่วไป", "THAILAND", "LANGUAGE") and a log-in link, a white main navigation (บัตร, เงินฝาก, สินเชื่อ, ประกัน, บริการ, ลงทุน, Digital Banking) under the red-and-blue UOB logo, then an icon row of quick actions (apply for a credit card, open a personal account, open a deposit account, card tips, insurance, UOB TMRW app, branches and ATMs, chat).

Below, a single light blue headline ("ก้าวแรกสู่บริการด้านการเงินส่วนบุคคลกับธนาคารยูโอบี – รับโปรโมชันพิเศษทันที") introduces a three-card promotion row. Each card is white with a photo header, a bold Thai title, a paragraph and a blue "รายละเอียด คลิก" button. A split block follows with a lifestyle photograph beside the English headline "Make Tomorrow Yours" ("RETAIL BANKING" eyebrow) and a "ดูวีดีโอ" button; then a "โปรโมชัน" carousel, a four-tile product grid (บัตร, UOB TMRW, บัญชีเงินฝาก, สินเชื่อ), a perks row, a grey band for property for sale, a dark-blue app-download band for UOB TMRW with App Store and Google Play badges, a contact row with three icons, and a blue footer with QUICK LINKS columns.

The tone is informational and promotional: card titles carry offers ("รับ e-voucher Lazada 200.-"), body copy includes footnote asterisks, and promo codes appear in the text. The capture was taken with a promotional dialog and a cookie notice open; those, and the dimmed header behind them, are not brand UI and are excluded here.

## Colors

The page is white `#ffffff` (the largest area, 2,525 weight) with a light grey `#efefef` (1,389) for alternating bands. Text is near-black `#212121` (2,606 characters). The brand blue is `#005eb8` (818 area weight; header, footer, headlines and the h1 text color, 348 characters), with a darker `#004585` (474; the app band and the `--primary-dark` variable), and a navy `#00237b` (4). The action color is bright blue `#0084ff` (49 area weight, 183 characters of text and 5 border occurrences; the `--primary-light` variable), the fill of every measured button, with white `#ffffff` text.

Other measured values: `#000000` text (138 characters), `#6e6e6e` for small secondary text (14 characters), `#e6e6e6` hairline borders (12 occurrences) and `#e9ecef` as a pale panel fill (401). `#212121` as an area fill (1,092) belongs to the dark overlay elements present during capture and is not used as a surface token.

A link color of `#007bff` was measured on the quick-action labels; it is the same value as the Bootstrap default link blue, and the stylesheet's root variables follow Bootstrap naming (`--success`, `--red`, `--pink`, `--breakpoint-xl`), so it is not recorded as a brand token here.

## Typography

The measured font stack is Noto Sans in three loaded weights, named as separate families: "Noto Sans Light" (300), "Noto Sans Regular" (400) and "Noto Sans Bold" (700). The asset list includes `NotoSansThai-Regular.woff`, so Thai text uses the Noto Sans Thai files. By character count: Regular 3,049, Bold 1,077, Light 297.

- Display: Noto Sans Light 300, 36px / 45px, `#005eb8` (page headline and section headlines); 28px / 38px on the mobile pass.
- Card title: Noto Sans Bold at 20px / 30px, weight 500 (measured on the card role).
- Subheading: 17.5px / 21px, weight 500, color `#0084ff` (tile titles "บัตร", "UOB TMRW").
- Body: Noto Sans Regular 16px / 25.6px, `#212121` (2,604 characters at 16px).
- Button: Noto Sans Bold 15px / 24px, weight 500.
- Navigation: 13px uppercase, weight 700, white on blue.
- Other sizes: 18px, 24px (app band headline in white, weight 700), 30px.

Letter-spacing was not recorded (empty frequency table). Headlines are light weight and blue, which keeps the page airy against the bold card titles.

## Layout

The extractor recorded 15 header links on desktop and up to 8 card columns in a band; content bands sit between about x=85 and x=1195 on a 1280px page. Section bands alternate white, `#efefef` and `#004585`. Card rows use three columns (headline bands report `cols: 3`), with 20px, 10px and 15px as the common paddings (51, 42 and 39 occurrences) plus 150px padding on 11 elements (section spacing) and 30px and 50px. Gaps were not recorded.

The hero area is a carousel with dot indicators; the icon row below it has eight labelled quick actions in a single line. Footer columns are links under uppercase group titles.

## Elevation & Depth

Two shadows were measured: `rgba(0, 0, 0, 0.15) 0px 0px 15px 0px` on 13 elements (cards) and `rgba(0, 0, 0, 0.15) 0px 0px 10px 0px` on 4. They are centered, no-offset glows, not directional drops. Borders are 1px `#e6e6e6` hairlines (12) and `#0084ff` outlines (5). The page has stacked overlays (dialog, cookie notice) during capture; their elevation is not documented as brand style.

## Shapes

Measured radii: 10px (27 elements; cards, image tops as `10px 10px 0px 0px` on 10 and `10px 10px 2.5px 2.5px` on 7), 5px (9; buttons), 50% (7; circular controls), 2.5px (3) and `0px 0px 2.5px 2.5px` (10), 2px (1). Some buttons, including the card "รายละเอียด คลิก" action measured as a secondary CTA, report a 0px radius, so button radius is 5px on the primary and 0px on that secondary variant.

## Components

- **Primary button**: `#0084ff` fill, white 15px Noto Sans Bold text, `10px 20px` padding, 44px tall, 5px radius ("ดูโปรโมชันทั้งหมด").
- **Secondary button**: same fill and height, 0px radius ("รายละเอียด คลิก", 143px wide).
- **Card**: white, `#212121` text, 10px radius, 15px glow shadow, image on top, bold title, paragraph, button at the bottom.
- **Navigation**: utility bar `#005eb8` with white 13px uppercase links; main navigation on white with blue text.
- **Quick-action tile**: icon over a 16px bold label with 10px padding.
- **Footer**: `#005eb8` panel, white 13px uppercase bold group titles.

## Design System Architecture

No public UOB Thailand design system was found, and none was searched for. The page loads a Bootstrap-style stylesheet: root variables include `--primary-dark: #004585`, `--primary-light: #0084ff`, `--breakpoint-xl: 1200px`, numbered neutrals (`--light-10: #e5e5e5`, `--gray-175: #dee2e6`), element tints (`--element-8: #7ABAFF`, `--element-19: #0b3766`, `--element-21: #00216f`) and status colors (`--success: #28a745`, `--red: #dc3545`). Fonts are served from `https://www.uob.co.th/assets/iwov-resources/assets/fonts/`. Source: `web/data/extracted/uob-thailand.json`, measured on the live page.

## Do's and Don'ts

Do:
- Use `#005eb8` for headlines, header and footer, and `#0084ff` for buttons.
- Keep headlines in Noto Sans Light 36px and body in Regular 16px.
- Put promotions in white 10px-radius cards with the 15px glow shadow.
- Write offers with explicit footnote marks and short Thai titles.

Don't:
- Don't use `#007bff` or other Bootstrap defaults as brand colors.
- Don't document the promotional dialog or cookie notice as UOB UI.
- Don't use heavy shadows; the measured glow is 15% black.
- Don't set headlines in bold; the measured weight is 300.

## Responsive Behavior

Measured at the 390px mobile pass: h1 and h2 measure 28px (from 36px), body text 14px (from 16px), the primary button text 14px with the same `#0084ff` fill and 5px radius, header links visible 3 (desktop 15), a menu toggle is present (`menuToggleVisible: true`, label "Icons/Menu") and the maximum card columns measured is 3 (desktop 8). Other mobile behavior was not measured.

## Iteration Guide

1. Start with white canvas, `#212121` text, `#efefef` alternating bands.
2. Set the section headline in `#005eb8` Noto Sans Light 36px.
3. Build promotion cards: 10px radius, 15px glow, photo top, bold title, 16px body.
4. End each card with a `#0084ff` button, 44px tall.
5. Use `#005eb8` for header and footer, `#004585` for the app band.
6. Re-run `node web/scripts/verify-designs.mjs --slug=uob-thailand` after any rename.
