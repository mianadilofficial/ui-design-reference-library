---
version: alpha
name: "Global Innovative Solutions Co., Ltd."
category: "Thai Brands"
description: "Thai IT solutions provider: deep navy #00194c sections and white pages, electric blue #0055ff buttons with 6px radius and uppercase 14px Kanit bold text, a #ffc107 yellow promo ribbon, Kanit at weights 500 to 800 with a 55px uppercase hero, and ISO 27001 certification badges."
colors:
  canvas: "#00194c"
  page-white: "#ffffff"
  ink: "#ffffff"
  primary: "#0055ff"
  on-primary: "#ffffff"
  surface-tint: "#f8faff"
  ink-secondary: "#334770"
  ink-faint: "#96a1b8"
  ink-offwhite: "#f8f8fa"
  hairline: "#0000001a"
  nav-bg: "#000000"
  nav-ink: "#1a1a1a"
  nav-link-text: "#ffc107"
  text-input-bg: "#f1f4fc"
typography:
  display:
    fontFamily: Kanit
    fontSize: 55px
    fontWeight: 800
    lineHeight: 60.5px
    textTransform: uppercase
  display-mobile:
    fontFamily: Kanit
    fontSize: 36px
    fontWeight: 800
    lineHeight: 39.6px
    textTransform: uppercase
  subheading:
    fontFamily: Kanit
    fontSize: 22px
    fontWeight: 700
    lineHeight: 26.4px
    textTransform: capitalize
  body:
    fontFamily: Kanit
    fontSize: 16px
    fontWeight: 500
    lineHeight: 27.2px
  button:
    fontFamily: Kanit
    fontSize: 14px
    fontWeight: 700
    lineHeight: 14px
    letterSpacing: 0.28px
    textTransform: uppercase
  nav:
    fontFamily: Kanit
    fontSize: 12px
    fontWeight: 700
    lineHeight: 19.2px
    letterSpacing: 0.24px
  input:
    fontFamily: Kanit
    fontSize: 14px
    fontWeight: 500
    lineHeight: 23.8px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 5px
  xl: 6px
  2xl: 10px
  3xl: 15px
  4xl: 20px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 13px
  s8: 14px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-white}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 19px 30px
    height: 52px
  button-primary-hover:
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-white}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 14px 19px
    height: 46px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.nav-ink}"
  nav-link:
    backgroundColor: "{colors.nav-ink}"
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.4xl}"
    padding: 4px 16px
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    padding: 10px 45px 10px 20px
    height: 45px
  card:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-secondary}"
    rounded: "{rounded.xl}"
    padding: 23px 25px
---

## Overview

Global Innovative Solutions Co., Ltd. (gist.co.th, "GIST") is a Thai IT services and hardware company, and its home page presents it as a business partner for consulting, system integration, hardware supply and cloud services. The capture shows a yellow announcement ribbon at the top (a cart icon, the Thai line "ช้อปสินค้าไอที ของแท้ พร้อมส่ง ที่ร้านค้าออนไลน์ของเรา" and a dark pill "เยี่ยมชมร้านค้าของเรา →"), a white contact strip (address, email info@gist.co.th, phone 02-1078406, Facebook icon), a white header with the GLOBAL Innovative Solutions logo, a seven-item menu (home, about, services, past work, news and articles, careers, contact), a blue "ติดต่อฝ่ายขาย" (contact sales) button, and a hero with a dark photographic overlay showing three smiling team members in navy polo shirts. The hero headline reads "ปลดล็อกศักยภาพธุรกิจ ด้วย IT SOLUTIONS จากเรา" with a short paragraph and a blue "บริการของเรา" button. Below it, a white section about ISO/IEC 27001:2022 certification with a blue BSI badge and a checklist (System Integration, Cloud Service - IaaS, IT Hardware Resellers, Co-location), then a navy band titled "เราทำอะไรให้คุณได้บ้าง" with four white service cards (Consulting, System Integration, Hardware Supplier, Cloud Service).

A cookie bar with an "Allow" button overlays the lower hero in the capture; it is not documented as brand UI. The voice is professional but friendly Thai with English technical terms in parentheses.

## Colors

- **Canvas** `#00194c`, a deep navy, is the largest background (1595 area units) and fills the services band and hero tint; the **page white** `#ffffff` is the working background of most sections, and **surface tint** `#f8faff` (1142 units) is a very light blue used for alternate bands. Other light blues: `#f1f5ff`, `#e6eeff` and `#f1f4fc` (the input fill).
- **Ink**: white `#ffffff` on navy; `#00194c` for headings on white; `#334770` as the body-copy color (1506 characters, the most-read); `#96a1b8` faint ink; `#f8f8fa` off-white; also measured `#444444` and `#687799`.
- **Primary** `#0055ff`, an electric blue, is the button fill, link color and icon tile color (120 area units, 173 text characters).
- **Yellow** `#ffc107` is the text of the ribbon pill and nav-link on `#1a1a1a`; the ribbon itself is a yellow band.
- **Hairline** `#0000001a`.

Bootstrap variables in the root (`--bs-primary` `#0d6efd`, `--bs-success`, `--bs-orange`) and WordPress and WooCommerce preset colors are framework defaults and not brand colors.

## Typography

Kanit is the only family (3608 characters), loaded in 400 to 900 with italics, with Font Awesome 5 and a Flaticon icon font. Weights by character: 500 (2610), 700 (409), 600 (394) and 800 (195).

- **Display**: Kanit 55px, weight 800, line height 60.5px, uppercase (36px, line height 39.6px on the 390px mobile pass).
- **Subheading**: 22px, weight 700, line height 26.4px, capitalized.
- **Body**: 16px, weight 500, line height 27.2px.
- **Button**: 14px, weight 700, line height 14px, letter spacing 0.28px, uppercase.
- **Nav**: 12px, weight 700, line height 19.2px, letter spacing 0.24px.
- **Input**: 14px, weight 500, line height 23.8px.

Other measured sizes are 18px, 13px, 20px and 40px. Kanit is a free Google font that supports Thai and Latin; no substitute is needed.

## Layout

The page is 1280px wide and 5765px tall. The header is a two-row structure (contact strip, then logo and menu), the hero fills the viewport width with a left-aligned text block, and sections use a two-column pattern (text and checklist left, overlapping photographs right) or a centered title above a four-column card row. Measured spacing: 1, 4, 5, 6, 8, 10, 13, 14, 15 and 16px; the primary button padding is 19px 30px, the secondary 14px 19px, cards 23px 25px and inputs 10px 45px 10px 20px.

## Elevation & Depth

Shadows measured (one use each): `rgba(0, 0, 0, 0.06) -9px 0px 14px 0px`, `rgba(0, 0, 0, 0.1) 0px 0px 30px 0px`, an inset `rgba(0, 0, 0, 0.125) 0px -1px 0px 0px`, and a five-layer stack `rgba(0, 0, 0, 0.1)` at offsets of 2px, 2px, 4px, 8px and 16px with blur of 2px, 4px, 8px, 16px and 32px. Depth also comes from layered photographs, a blue arc behind them, dotted patterns, and translucent diagonal shapes on the navy cards.

## Shapes

Measured radii: 10px (11 uses), 6px (6), 5px (6), 50px (5), 4px, 2px, 3px and `6px 0px 0px 6px`. Tokens: `xs` 2px up to `4xl` 20px. The primary button is 6px, the secondary 4px, the nav-link pill 20px, and the service icon tiles and cards are rounded squares in the 6px to 10px range.

## Components

- **Primary button**: `#0055ff`, white 14px bold uppercase text, padding 19px 30px, 52px high, radius 6px; the hover state recorded for this button changes its text to the primary color.
- **Secondary button**: `#0055ff` fill, white text, padding 14px 19px, 46px high, radius 4px ("ติดต่อฝ่ายขาย").
- **Ribbon pill**: `#1a1a1a` fill with `#ffc107` text, 20px radius; on hover it becomes white with dark text and a dark border.
- **Text input**: `#f1f4fc` fill, `#00194c` text, 45px high.
- **Service card**: a rounded square with a blue icon tile, bold title and short description on the navy band.
- **Tag chip**: a pale blue pill above section titles ("เชื่อมั่นด้วยมาตรฐานสากลระดับโลก").
- **Navigation**: white header, 12px bold menu links, the active item in blue.

## Design System Architecture

No public design system or brand guideline was found; the measured page links to none. The shipped CSS is a WordPress theme: the root exposes 182 variables from Bootstrap (`--bs-*`), WordPress presets (`--wp--preset--*`), WooCommerce (`--wc-*`) and theme variables (`--font-base` Kanit, `--font-input` Kanit, `--tg-gray-three`). The brand layer is therefore a de-facto set: Kanit throughout, navy `#00194c`, blue `#0055ff`, and a yellow promo accent.

## Do's and Don'ts

- Do alternate navy bands with white and `#f8faff` sections.
- Do use `#0055ff` for buttons and links with white 14px bold uppercase labels.
- Do put Thai headings in Kanit 800 and body in Kanit 500.
- Do keep corners between 4px and 10px, with pills for tags and the ribbon.
- Don't use Bootstrap's `#0d6efd` or WordPress preset colors.
- Don't document the cookie bar as brand UI.
- Don't use yellow beyond the announcement ribbon.

## Responsive Behavior

The mobile pass at 390px recorded: h1 at 36px, weight 800 (360px wide); body at 16px, weight 500 (303px wide); the primary button "บริการของเรา" at 14px, weight 700, 174px wide and 52px high; and a nav block 390px wide and 198px high with 12px weight 600 text. Mobile sizes by character are 16px (2052), 18px (480) and 14px (372). Column changes and breakpoints are not measured.

## Iteration Guide

1. Build with `{colors.page-white}` and `{colors.surface-tint}` sections, with `{colors.canvas}` bands for emphasis.
2. Use `{typography.display}` for the hero and `{typography.subheading}` for card titles.
3. Use `{components.button-primary}` once per section.
4. Pair every claim with a certification badge or concrete service list.
5. Re-measure before adding any form, dark mode or hover state not recorded above.

Imagery and microcopy: the capture shows posed team photography in navy polo shirts carrying the GLOBAL logo, a darkened office background in the hero, an ISO/IEC 27001 BSI certification badge on a blue tile, line-icon service symbols on blue squares, and decorative dotted and diagonal-stripe textures behind photographs. The copy positions the firm as a partner, not only a reseller ("เราไม่ได้เป็นเพียงผู้ขายอุปกรณ์ แต่เราคือ พาร์ทเนอร์ทางธุรกิจ"), mixes Thai sentences with English product categories, and cites seven years of experience.
