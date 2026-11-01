---
version: alpha
name: Atlas Energy
category: "Thai Brands"
description: "Atlas Energy Public Company Limited (atlasenergy.co.th), the Thai LPG distributor behind the PT cooking-gas brand, uses a white canvas #ffffff, charcoal ink #333333, green #1eaf4d for its main button and #04c542 tiles, orange #ff7f28 for headings and tiles, set in Anuphan with 18px/28.8px body and rounded 40px tiles."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#1eaf4d"
  on-primary: "#ffffff"
  green-bright: "#04c542"
  accent-orange: "#ff7f28"
  surface-grey: "#dddddd"
  ink-black: "#000000"
  ink-nav: "#373e44"
  link: "#52575c"
  accent-cyan: "#28bee3"
typography:
  display:
    fontFamily: Anuphan_Bold, Tahoma
    fontSize: 52px
    fontWeight: 400
    lineHeight: 72.8px
  display-mobile:
    fontFamily: Anuphan_Bold
    fontSize: 27px
    fontWeight: 400
    lineHeight: 32.4px
  body:
    fontFamily: Anuphan_Regular
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28.8px
  button:
    fontFamily: Anuphan_Regular, Tahoma
    fontSize: 18px
    fontWeight: 500
    lineHeight: 21.6px
  nav:
    fontFamily: Anuphan_SemiBold, Tahoma
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 4px
  sm: 4.8px
  md: 10px
  lg: 15px
  xl: 40px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 40px
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
---

## Overview

Atlas Energy Public Company Limited (`https://www.atlasenergy.co.th/`, title "ATLAS Energy Public Company Limited", 1021 visible elements, 5321px tall) describes itself on its home page as the leader in trading and servicing liquefied petroleum gas under the brands "ก๊าซหุงต้มพีที" (PT cooking gas) and "สถานีบริการพีที แอลพีจี" (PT LPG stations), supplying households, vehicles and industry. The hero is a three-slide carousel headed "ATLAS ENERGY" in 52px white type over photography; slide copy reads "ผู้นำการค้าบริการก๊าซปิโตรเลียมเหลวภายใต้แบรนด์ …" and "ดำเนินธุรกิจจำหน่ายก๊าซแอลพีจี ครอบคลุมทุกภาคส่วน ทั้งภาคครัวเรือน ภาคยานยนต์ และภาคอุตสาหกรรม", followed by the line "ผู้นำด้านนวัตกรรมของสินค้าและบริการ เพื่อสร้างความสุขในทุกครัวเรือน" and a green "ผลิตภัณฑ์และบริการ" (Products and services) button.

Below the hero a section "รู้จักแอตลาส" (Get to know Atlas) pairs a rounded-corner photo carousel (an LPG tank, a service station) with two paragraphs on safety, standards, the Check-Lock valve and digitally weighed filling, and an underlined "อ่านต่อ" link. A "ครอบคลุมทุกพื้นที่" (Covering every area) row shows three rounded tiles with line icons and large numerals: 246+ LPG Station (orange), 500+ Gas Shop (green) and 9+ Filling Plant (orange), with data as of 31 March 2569. A "วิสัยทัศน์ และค่านิยม" list spells ATLAS-style values with orange letter circles (Aspiration, Teamwork, Learning society, Attitude+, Speed, Ownership) beside a circular staff photograph, and an orange-striped "ผลิตภัณฑ์และบริการ" section follows. Voice is friendly Thai with English keywords.

At capture time a corporate-anti-corruption (CAC) announcement pop-up and a cookie bar overlay the hero; the extraction was re-run with --force, which replaced the pop-up headline with the hero "ATLAS ENERGY". Neither overlay is brand UI.

## Colors

Background area by weight: black #000000 (1024, the dark hero-carousel backdrop), white #ffffff (840), grey #dddddd (707), translucent #33333361 (379), green #04c542 (82), translucent black #0000008c (55), orange #ff7f28 (15). Text by characters: #333333 (1118), white (691), orange #ff7f28 (139), black #000000 (115), green #1eaf4d (62), green #04c542 (19), cyan #28bee3 (11).

- **canvas #ffffff**, **ink #333333**: page and text; **surface-grey #dddddd**: grey bands; **ink-black #000000**: navigation text.
- **primary #1eaf4d**: fill of the "ผลิตภัณฑ์และบริการ" button (white text), footer text colour; **green-bright #04c542**: the green stat tile and a text green.
- **accent-orange #ff7f28**: headings ("ผลิตภัณฑ์และบริการ", "วิสัยทัศน์ และค่านิยม"), the orange tiles and the section stripe.
- **ink-nav #373e44**: navigation text on the mobile header (also the theme's `--dark`), **link #52575c**: the "อ่านต่อ" link, **accent-cyan #28bee3**: 11 characters of text.

The root variables are Bootstrap 4 defaults (`--green: #28a745`, `--blue: #007bff`, `--red: #dc3545`) plus theme values (`--primary: #24bee2`, `--success: #5fb412`, `--danger: #f7381e`, `--warning: #ff9600`); the Bootstrap defaults are not brand colours and the black hero backdrop is a slider surface, not a palette colour.

## Typography

The site uses the **Anuphan** family loaded as separate named faces: Anuphan_Regular (1379 characters), Anuphan_SemiBold (474), Anuphan_Bold (208) and Anuphan_Medium (72); Sarabun is the form-input font and MWE_DB_Heavent appears on 21 characters. Weights recorded in CSS: 400 (1960 characters), 700 (167), 500 (39), because weight is encoded in the face name. Roles: hero title Anuphan_Bold 52px/72.8px (mobile section heading 27px/32.4px); body Anuphan_Regular 18px/28.8px; button Anuphan_Regular 500 18px/21.6px (16px/19.2px on mobile); navigation Anuphan_SemiBold 14px/21px. Most-read sizes: 18px (1406 characters), 14px (294), 30px (139), 32px (89), 22px (69), 12px (62), 15px (30). No substitute is declared beyond Tahoma and the system sans list.

## Layout

Desktop viewport 1280px. The header is a 135px white band with the red-green-orange ATLAS ENERGY logo at left and a row of Thai labels (รู้จักแอตลาส, ผลิตภัณฑ์และบริการ with a chevron, โอกาสทางธุรกิจ, ความยั่งยืน, กิจกรรมเพื่อสังคม, นักลงทุนสัมพันธ์, เพิ่มเติม with a chevron; the full menu also includes news and promotions and careers). Content alternates two-column text and image blocks with soft pastel orange and green curved backgrounds, a three-up tile row and a six-row values list. Paddings by frequency: 15px (79), 4px (14), 30px (13), 5px (12), 12px (10), 8px (8), 6px (8). The footer is 132px tall with a 12px copyright line "Copyright | All Rights Reserved | Powered by atlasenergy.co…" in green.

## Elevation & Depth

Measured shadows: `rgba(0, 0, 0, 0.26) 0px 2px 5px 0px` (1 element) and two form-field shadows (`rgba(0, 0, 0, 0.08) 0px 1px 2px 0px inset`, `rgba(0, 0, 0, 0) 1000px 0px 0px 0px inset`). Depth is minimal: soft pastel curved background shapes, a thin top stripe and translucent overlays.

## Shapes

Measured radii: 40px (6 elements), 50% (3), 15px (3), 10px (2), 4px 0px 0px 4px (1), 0px 4px 4px 0px (1), 4px (1). The stat tiles are rounded squares at 40px, the carousel photographs and cards use 15px, the secondary button measured 10px, and the staff photograph and letter badges are circles (50%). The primary link button is square (0px).

## Components

- **Primary button:** "ผลิตภัณฑ์และบริการ", fill #1eaf4d, white Anuphan_Regular 500 18px, 239px by 40px, no rounding (a second instance, a button element, measures 10px radius with padding 8px 16px).
- **Stat tiles:** 40px-radius orange or green tiles with a white line icon, a large white numeral with a plus sign and an English caption (LPG Station, Gas Shop, Filling Plant).
- **Letter badges:** orange circles holding a white letter, followed by an orange English keyword and a grey Thai explanation.
- **Underlined link:** "อ่านต่อ" in #52575c, 18px, underlined.
- **Navigation:** Anuphan_SemiBold 14px in black on white, chevrons for sub-menus; a mobile header shows no text in the extraction.
- **Carousel:** rounded 15px photographs with arrow controls in the hero.
- **Footer:** green text on a light surface, 132px tall.
- The CAC pop-up and cookie bar are not components.

## Design System Architecture

No public design system or brand-guidelines page was found: the opened page https://www.atlasenergy.co.th/ links to company, product, business-opportunity, sustainability, CSR, investor, news and career pages only. The de-facto system is a Bootstrap 4 site: root variables include `--breakpoint-sm: 576px`, `--breakpoint-md: 768px`, `--breakpoint-lg: 992px`, `--breakpoint-xl: 1200px`, `--primary: #24bee2`, and a `--tpc-*` series (`--tpc-1: 255,255,255`) of RGB triplets; the slick carousel font and Font Awesome 5 Pro are loaded.

## Do's and Don'ts

- Do keep the page white with #333333 text in Anuphan at 18px/28.8px.
- Do use green #1eaf4d for the main action and orange #ff7f28 for headings and highlight tiles.
- Do show coverage figures as large numerals with a plus sign in 40px-radius tiles.
- Do mask carousel photographs with 15px corners and the staff photograph as a circle.
- Don't use Bootstrap's default #007bff or #28a745 as brand colours.
- Don't treat the black hero backdrop, the CAC pop-up or the cookie bar as brand surfaces.
- Don't set weights with `font-weight` alone; each Anuphan weight is a separate named face.

## Responsive Behavior

Mobile was measured at 390px. The section heading drops to Anuphan_Bold 27px/32.4px in a 330px by 100px block; body text stays 18px/28.8px in a 360px by 288px block; the primary button keeps its 239px width, with text 16px/19.2px and height 37px; the nav block measures with white background, text colour #373e44 and a system font list, and records no label text. Mobile size frequencies: 18px (1552 characters), 14px (316), 18.6667px (129), 16px (116), 27px (100), 28px (89). Menu behaviour, tile reflow and carousel layout at narrow widths were not measured.

## Iteration Guide

1. Start from canvas #ffffff, ink #333333, primary #1eaf4d and accent-orange #ff7f28.
2. Type in Anuphan: Regular 18px/28.8px body, Bold for titles (52px hero), SemiBold 14px navigation.
3. Buttons: green fill, white 18px label; tiles: 40px radius in orange or green.
4. Use pastel curved background shapes and a thin orange stripe to separate sections.
5. Pair each value with an orange letter circle, orange English keyword and grey Thai text.
6. Measure new components before adding tokens; states not recorded stay "not measured".
