---
version: alpha
name: Rice Department (กรมการข้าว)
category: "Thai Brands"
description: "Thai Rice Department portal (ricethailand.go.th) set in IBM Plex Sans Thai with Bai Jamjuree and Sarabun accents, on white with black ink, a #e9d189 pale-gold search button (4px radius), a #e9b621 gold header, #129137 green active tabs and gold-outlined service tiles."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#e9d189"
  on-primary: "#000000"
  green-tab: "#129137"
  ink-gray: "#95a5a6"
  ink-gray-dark: "#7f8c8d"
  brown-text: "#7d5714"
  gold-text: "#c9a320"
  hairline: "#e8c84a"
  button-secondary-border: "#dee2e6"
  text-input-text: "#212529"
  text-input-border: "#ced4da"
  card-bg: "#fffffff2"
typography:
  display:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 28.8px
    fontWeight: 500
    lineHeight: 32px
  display-mobile:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 22.4px
    fontWeight: 500
    lineHeight: 28.8px
  heading:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28.8px
  subheading:
    fontFamily: Sarabun, sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 38.4px
    letterSpacing: 0.5px
  body:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 19.2px
  button:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  link:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 15.2px
    fontWeight: 500
    lineHeight: 22.8px
  button-secondary:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 14.4px
    fontWeight: 600
    lineHeight: 21.6px
rounded:
  xs: 4px
  sm: 6px
  md: 12px
  lg: 17.6px
  xl: 20px
  2xl: 24px
  3xl: 28px
  4xl: 30px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 6px 12px
    height: 38px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.green-tab}"
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    padding: 8px 16px
    height: 40px
    borderColor: "{colors.button-secondary-border}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 6px 12px
    height: 38px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.gold-text}"
    rounded: "{rounded.xl}"
    padding: 15px 10px
    borderColor: "{colors.hairline}"
---

## Overview

The Rice Department home page (https://www.ricethailand.go.th/, page title "กรมการข้าว | Rice Department", document language `en`) is a ministry-department portal for rice research, services and news. The measured capture shows a gold header carrying a rice-field photograph, the department emblem and the bilingual name "กรมการข้าว / Rice Department" at 28.8px weight 500, a row of accessibility and language icons at the top right (text size, colour mode, flags), a wide search bar with a pale gold "ค้นหา" button, a banner slideshow with pagination bars, a "บริการประชาชน" (public services) grid of ten gold-outlined tiles, a "ข่าวพระราชกรณียกิจ" (royal activities news) heading marked with a green bar and followed by eight photo cards, and a tabbed news block (ข่าวกิจกรรม, ข่าวสารหน่วยงาน, ประชาสัมพันธ์, สมัครงาน).

The tiles are labelled in short Thai nouns: ระบบ E-Service, แนวโน้มราคาประจำเดือน, ข้อมูลเปิดข้าวไทย, แคตตาล็อกสินค้าเกษตร, ผลิตภัณฑ์ข้าว, คลังความรู้เรื่องข้าว, คลังภาพกิจกรรม, ระบบเตือนภัยเกษตร, ร้องเรียนการทุจริตและประพฤติมิชอบ and คู่มือสำหรับประชาชน (the last filled gold). A modal (`fade modal show`) was open at capture and was hidden by the extractor, a mourning ribbon appears at the top-left, a chat bubble floats at the right, and the extractor removed a grayscale(0.7) site filter; none of these are brand UI. A footer credit line reads "Font by: f0nt | Image by: Pixabay | Pexe...".

## Colors

The identity is rice-gold with a leaf green. `primary` #e9d189 is the pale gold fill of the detected primary button ("ค้นหา", black `on-primary` text). The header and mobile nav measured #e9b621 (152 weight), a saturated gold. `green-tab` #129137 (1,008 weight) fills the active news tab and the "ข่าวกิจกรรม" button, whose text is #e9d189. A darker green #2e7d32 fills the "ดูวิดีโอเพิ่มเติมทั้งหมด" candidate. `hairline` #e8c84a is the gold border colour (9 occurrences) with softer golds #f0e6c8 and #eaddb7 on tile outlines. `canvas` is white (1,614 weight), with #fcfbf7 (358) as a warm off-white and `card-bg` #fffffff2 for translucent cards.

Text is `ink` #000000 (5,766 characters), white (1,331) on dark bands, `ink-gray` #95a5a6 (755), `ink-gray-dark` #7f8c8d (383), `brown-text` #7d5714 (220), `gold-text` #c9a320 (170), #2c3e50 (158, the services heading), #2d5a27 and #5c4b1a. The root CSS also contains Bootstrap 5 variables (--bs-primary #0d6efd, --bs-danger #dc3545, --bs-success #198754, --bs-yellow #ffc107); these are framework values and not brand colours.

## Typography

Three families are measured: IBM Plex Sans Thai (5,662 characters), Bai Jamjuree (2,654) and Sarabun (837), with Material Symbols Outlined for icons (67), and Font Awesome 6 and swiper icon fonts in the root CSS. IBM Plex Sans Thai is loaded in weights 200 to 700, Bai Jamjuree in 400 and 500, Sarabun in 300 to 700.

`display` is 28.8px / 32px weight 500 (department name), `display-mobile` is 22.4px / 28.8px weight 500, `heading` is 24px / 28.8px weight 500 (news heading), `subheading` is Sarabun 32px / 38.4px weight 600 with 0.5px letter spacing in #2c3e50 (the services heading), `body` is 12.8px / 19.2px weight 400, `button` is 16px / 24px weight 400, `nav` is 16px / 24px weight 500, `link` is 15.2px / 22.8px weight 500 and `button-secondary` is 14.4px / 21.6px weight 600. By character count the main sizes are 12.8px (2,924), 19.2px (2,361), 16px (1,147), 15.2px (1,089) and 11.2px (755); weight 500 covers 6,275 characters, 400 covers 1,946, 600 covers 488.

## Layout

Measured at 1280px wide with a recorded page height of 7,802px. The nav block measured 158px high. Structure: header with photograph, search band, full-width banner slider, a ten-tile services grid (five per row), the royal news section (four cards per row, two rows), a tab-bar news section and further rows. The content container is 1,116px wide in the measurement. Paddings: 12px (105 occurrences), 8px (22), 15px (19), 10px (18), 30px (16) and 16px (10).

## Elevation & Depth

Shadows measured: a two-layer `rgba(0, 0, 0, 0.2) 0px 1px 2px 0px, rgba(0, 0, 0, 0.19) 0px 6px 20px 0px` (44 occurrences, the news cards), `rgba(0, 0, 0, 0.02) 0px 10px 30px 0px` (6), `rgba(0, 0, 0, 0.15) 0px 4px 12px 0px` (4), gold-tinted `rgba(184, 134, 11, 0.05) 0px 10px 20px 0px` (3), `rgba(160, 130, 50, 0.15) 0px 10px 20px 0px` (3), `rgba(184, 134, 11, 0.15) 0px 4px 15px 0px` (2), `rgba(0, 0, 0, 0.1) 0px 4px 6px 0px` (1) and `rgba(212, 175, 55, 0.4) 0px 0px 10px 0px` (1, a gold glow).

## Shapes

Radii measured: 6px (41 occurrences, cards), 20px 8px (10), 20px (9), 50% (8), 24px (4), 12px (4), 4px (3), 28px (3), 17.6px (3), 9999px (3), 50px (2) and 0px 0px 6px 6px (1). The search button and input use 4px, the secondary buttons 0px, the "ดูวิดีโอเพิ่มเติมทั้งหมด" candidate 50px.

## Components

**Search button** (`button-primary`): #e9d189 fill and border, black 16px weight 400 text, 6px 12px padding, 38px high, 4px radius ("ค้นหา").

**Tab button** (`button-secondary`): #129137 fill, #e9d189 text, 14.4px weight 600, 8px 16px padding, 40px high, 1px border #dee2e6 (the active tab "ข่าวกิจกรรม"). Inactive tabs ("ข่าวสารหน่วยงาน") have no fill, #7d5714 text at 14.4px weight 400.

**Search input**: white fill, #212529 16px text, 6px 12px padding, 38px high, 4px radius, 1px solid #ced4da. **News card**: photo with a truncated bold title, two lines of excerpt, an author line and a date, with the two-layer shadow above. **Service tile**: white tile with a gold outline, a line icon and a gold-brown label; the featured tile is filled gold.

## Design System Architecture

No public design system or brand-guideline page was found. An attempt to read the home page with WebFetch returned an empty page body (recorded in SOURCES.json), so no linked guideline could be checked. The de-facto system is Bootstrap 5 (root variables --bs-*) with the Swiper slider (`--swiper-navigation-size` 44px), Font Awesome 6 and Material Symbols, and three Google-hosted Thai typefaces. The brand layer is the gold and green palette applied over those defaults.

## Do's and Don'ts

- Do use gold (#e9d189, #e9b621) for the header and search action and #129137 green for active tabs.
- Do present services as gold-outlined tiles with a line icon and a short Thai label.
- Do mark section headings with a green bar and keep them at 24px weight 500.
- Do use soft two-layer shadows under news cards.
- Don't use Bootstrap blue #0d6efd as a brand colour.
- Don't copy the modal, mourning ribbon or chat bubble as brand elements.
- Don't mix more than the three measured typefaces.

## Responsive Behavior

A mobile pass was recorded. On mobile the department name measured 22.4px / 28.8px weight 500 (28.8px on desktop), the news heading stayed 24px / 28.8px weight 500, the credit line 12.8px / 19.2px weight 400 (115px high), the search button 16px weight 400 with 4px radius, 6px 12px padding, 38px high, and the nav block measured a #e9b621 background with the name and "Rice Department" at 22.4px, 121px high (158px on desktop). Breakpoints and tile column counts on mobile were not measured.

## Iteration Guide

1. Start from white and black ink in IBM Plex Sans Thai, with gold as the header colour.
2. Use #e9d189 for the search action and #129137 for active tabs.
3. Keep service tiles outlined in gold and cards at 6px radius.
4. Measure any new component before adding tokens.
5. Re-run `node web/scripts/verify-designs.mjs --slug=rice-department` after changes.
