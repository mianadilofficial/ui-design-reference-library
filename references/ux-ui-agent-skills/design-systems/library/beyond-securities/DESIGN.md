---
version: alpha
name: "Beyond Securities"
category: "Thai Brands"
description: "Thai brokerage site in Prompt: white #ffffff page, #212529 body ink, gold #e2b035 headings and buttons with #070707 text, dark translucent #000000b3 feature columns over photography, top-rounded 10px buttons and no shadows."
colors:
  canvas: "#ffffff"
  ink: "#212529"
  primary: "#e2b035"
  on-primary: "#070707"
  ink-muted: "#848484"
  ink-nav: "#11181f"
  hairline: "#0000001a"
typography:
  display:
    fontFamily: Prompt, Roboto, sans-serif
    fontSize: 40px
    fontWeight: 600
    lineHeight: 48px
  display-mobile:
    fontFamily: Prompt, Roboto, sans-serif
    fontSize: 22.4px
    fontWeight: 600
    lineHeight: 26.88px
  subheading:
    fontFamily: Prompt, Roboto, sans-serif
    fontSize: 28px
    fontWeight: 600
    lineHeight: 33.6px
  body:
    fontFamily: Prompt, Roboto, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Prompt, Roboto, sans-serif
    fontSize: 12.16px
    fontWeight: 700
    lineHeight: 18.24px
rounded:
  xs: 3px
  sm: 10px
  md: 30px
  lg: 50px
spacing:
  s1: 1px
  s2: 3px
  s3: 5px
  s4: 10px
  s5: 12.8px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 30px
  s10: 38.39px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 10px 20px
    height: 52px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 10px 20px
    height: 52px
  nav:
    textColor: "{colors.ink-nav}"
    padding: 0px 0px 8px
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.body}"
    padding: 0px 0px 16px
---

# Beyond Securities

## Overview

The measured site is beyondsecurities.co.th, the home page of บริษัทหลักทรัพย์ บียอนด์ จำกัด (มหาชน), Beyond Securities Public Company Limited (also referred to on the page as BYD). The document title is the Thai company name and no language attribute was recorded. The page is 4144px tall at 1280px and, in the capture, opens with a full-viewport intro panel: a dark navy-to-gold cityscape photograph with a gold "BYD / BEYOND SECURITIES PUBLIC COMPANY LIMITED" logo, the tagline "YOUR PARTNER BEYOND HORIZONS", the headline "A NEW CHAPTER BEGINS" (white and blue), the gold Thai heading "แจ้งแผนการควบรวมกิจการ" (announcement of a business-combination plan), two outlined gold step boxes numbered 01 and 02 with dates (วันที่ 16 ก.ย. 2569 and วันที่ 26 ตุลาคม 2569) and logo transition graphics, and a gold "เข้าสู่หน้าหลัก" ("enter the main page") button with a contact-center line at the bottom. This intro is a notice screen; its content is recorded here as observed and its transition details are not interpreted.

Below it the main page shows a darker section "ทำไมต้องเลือก BEYOND SECURITIES" with four dark translucent feature columns, four tall photographic link tiles (DAILY RESEARCH, COMPANY NEWS, ANNUAL REPORT, FINANCIAL INFORMATION) with plus icons, and a white "สินค้าและบริการของเรา" section with three round-icon product cards (EQUITIES, TFEX, FUND) and a prev/next control. A scrim-like black `#000000` area (1024 weight) was measured; it is a viewport-sized overlay value and is excluded from the tokens.

## Colors

Measured background areas: white `#ffffff` (13353), near-black `#070707` (1177), the excluded black overlay (1024), translucent black `#000000b3` (654, the dark feature columns over photography), `#fffffff2` (61, a near-opaque white) and gold `#e2b035` (52, buttons). Text by characters: charcoal `#212529` (17486, default ink), grey `#848484` (8251), gold `#e2b035` (4464, headings and accents), white (1089), `#11181f` (118, navigation), `#070707` (79, text on gold buttons), `#007bff` (42), and a lighter gold `#ecc23c` (32, the h1 on the dark section). 

The brand pair is gold `#e2b035` with near-black `#070707`: gold fills the account-opening and identity-verification buttons with black text and colors Thai headings. `#007bff` is Bootstrap's default link/primary color in the root variables (`--primary: #007bff`), not a brand color. Only one border color was recorded, `#0000001a`.

## Typography

Prompt is the main family (31381 characters), loaded at 400 and 600, with Roboto 400 (123 characters) and Poppins 600 (60 characters) loaded and listed as fallbacks. The computed family string is "Prompt, Roboto, sans-serif".

Measured roles: h1 "ทำไมต้องเลือก BEYOND SECURITIES" 40px at 600 with a 48px line height; h3 "สินค้าและบริการของเรา" 28px at 600 with a 33.6px line height; body 16px at 400 with a 24px line height; button label 12.16px at 700 with an 18.24px line height; navigation 16px at 400. The most frequent size is 17.6px (17273 characters), followed by 15.2px (9917), 11.2px (1916), 16px (1833) and 21.6px (156). Section headings are gold; large English headings on the intro screen use a wide-tracked uppercase style.

## Layout

The intro occupies a full viewport with left-aligned content over a right-hand photograph. The main page is a sequence of full-width bands: a dark photographic band with four equal columns, a white band of four equal-width tall tiles, and a white product band with a text block at left and three circular cards at right. Content is held to a centered column. Spacing steps recorded: 1, 3, 5, 10, 12.8, 15, 16, 20, 30 and 38.39px.

## Elevation & Depth

No box shadows were measured. Depth comes from photography with dark overlays: the four feature columns are `#000000b3` panels over a grey market-chart photograph, and the link tiles use darkened photographs with white uppercase labels.

## Shapes

Radii measured: 30px (10 uses), 3px (6), `10px 10px 0px 0px` (4, the top-rounded gold buttons) and `10px 0px` and 50px (1 each). The product icons sit in round grey circles in the capture.

## Components

- Primary button ("เปิดบัญชีออนไลน์"): fill `#e2b035`, text `#070707`, 12.16px at 700, padding `10px 20px`, 52px tall, radius `10px 10px 0px 0px`.
- Secondary button ("ยืนยันตัวตน (NDID)"): the same gold fill, text and size as the primary.
- Navigation link: `#11181f`, 16px at 400, padding `0px 0px 16px`; the navigation items are หน้าหลัก, เกี่ยวกับเรา, สินค้าและบริการ, บทวิเคราะห์ and ข่าวสารและ... with a language link "ไทย".
- Feature column: translucent black panel, white heading and 16px white body text.
- Link tile: photo, white uppercase English label with Thai caption, plus icon at top right.
- Product card: round grey circle with a blue line icon and a bold English name.

## Design System Architecture

No public design system or brand guideline was found; the home page HTML was opened and no such link is present. The de-facto system is a Bootstrap-style variable set (the root variables are the standard `--breakpoint-sm: 576px`, `--breakpoint-md: 768px`, `--breakpoint-lg: 992px`, `--breakpoint-xl: 1200px` and color names) with brand colors and the Prompt family applied in custom CSS. The brand never overrides Bootstrap's variables; its gold and black appear only in rendered styles.

## Do's and Don'ts

Do use gold `#e2b035` for headings and key buttons with `#070707` text, and `#212529` charcoal for body copy on white. Do overlay photography with dark `#000000b3` panels for white text. Do keep Prompt at 600 for headings.
Don't use Bootstrap blue `#007bff`. Don't put white text on gold. Don't treat the intro notice screen or its step boxes as reusable brand components.

## Responsive Behavior

The 390px mobile pass measured: h1 22.4px at 600 with a 26.88px line height, body text 16px at 400 (288px block), and the primary button "เปิดบัญชีออนไลน์" at 16px and weight 400, padding `10px 20px`, 57px tall and radius `0px`. Mobile font sizes recorded: 17.6px, 15.2px, 11.2px, 16px, 21.6px and 14.4px. Column stacking and navigation behavior on mobile were not measured.

## Iteration Guide

1. White page, `#212529` text, gold `#e2b035` headings.
2. Prompt 400 for body, 600 for headings; 40px display.
3. Gold buttons with black text, 52px tall.
4. Dark photographic bands with `#000000b3` columns.
5. Re-measure before adding values.

### Imagery and voice

The intro image is a dusk skyline of glass towers with a gold highway light-trail, graded in navy and amber so that the gold logo and headings feel native to the photograph. The main page switches to monochrome market imagery: a grey world-map and chart texture behind the feature columns, and dark, desaturated office and building photographs behind the link tiles, each carrying a bold uppercase English label above a Thai caption. The four feature headings are short Thai benefit statements (ครอบคลุมทุกการลงทุน, สะดวกและรวดเร็ว, นวัตกรรมทางการลงทุนใหม่, เทรดง่าย ไม่มีขั้นต่ำ), each followed by a small paragraph in white. The description paragraph under the h1 explains that the company is a securities broker listed on the SET and a TFEX derivatives agent. The product section pairs line icons (a bar chart, a pen on paper, a monitor with a dollar sign) with the English names EQUITIES, TFEX and FUND and a Thai gloss in smaller type, which keeps the voice factual and service-oriented.
