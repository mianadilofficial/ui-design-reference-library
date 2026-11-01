---
version: alpha
name: Deestone Group
category: "Thai Brands"
description: "Thai tyre maker Deestone's website (ดีสโตน): a white #ffffff page with #ebebeb panels and footer, dark #252525 text in the dokchamp Thai display face (19px navigation) and Sarabun 15px, an orange-red #f15a22 and orange #ff6700 brand accent, and 20px and 4px radii."
colors:
  canvas: "#ffffff"
  ink: "#252525"
  primary: "#f15a22"
  accent-orange: "#ff6700"
  link-blue: "#428bca"
  surface-panel: "#ebebeb"
  ink-black: "#000000"
  ink-muted: "#898989"
  ink-subtle: "#7f7f7f"
  input-text: "#333333"
typography:
  display:
    fontFamily: dokchamp
    fontSize: 19px
    fontWeight: 400
    lineHeight: 39px
  display-mobile:
    fontFamily: dokchamp
    fontSize: 18px
    fontWeight: 400
    lineHeight: 33px
  body:
    fontFamily: Sarabun, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21.4286px
  input:
    fontFamily: Sarabun, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21.4286px
rounded:
  xs: 4px
  sm: 5px
  md: 20px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 7px
  s5: 10px
  s6: 15px
  s7: 20px
  s8: 41px
components:
  text-input:
    textColor: "{colors.input-text}"
    typography: "{typography.input}"
    padding: 1px 2px 1px 20px
    height: 35px
  card:
    backgroundColor: "{colors.surface-panel}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
---

## Overview

Deestone (ดีสโตน, queued as Deestone Group) is a Thai tyre manufacturer, and the measured page is its Thai-language home page at https://www.deestone.com/ (title "Deestone - Home", 1450px tall at 1280px). It is a classic corporate portal: a white header with the red-orange italic DEESTONE wordmark at the left, a search field and EN and TH language buttons at the right, a six-item main navigation (เกี่ยวกับดีสโตน, เลือกยาง, ยางรุ่นใหม่, ข่าวและโปรโมชั่น, ทำไมต้องดีสโตน, กูรูเรื่องยาง), a full-width hero banner carousel, then a grid of modules, and a light-grey footer.

The first slide in the capture is a public notice ("เตือนภัย!") warning about people impersonating the company; the next slide is a product banner for the STORMZ R5 tyre with the line "เร็วแรง... โดดเด่น โดนใจ" over a chequered racing background with two pickup trucks. Below the carousel are modules with small round icons: "ยางรุ่นใหม่" (new tyres) with an orange-framed NEW tyre card, "เลือกยาง" (choose tyres) with two selects ("ประเภทรถ", "ประเภทยาง") and an orange "ค้นหา" (search) button, "ข่าว" (news) with thumbnails on a grey panel, "แคตตาล็อก" (catalogue) with a mini carousel, "กูรูเรื่องยาง" (tyre guru) as a bullet list, and "มั่นใจในคุณภาพ...วางใจดีสโตน". The footer carries four orange round social icons (Facebook, YouTube, Instagram, LINE), a text-link row (หน้าหลัก, อัลบั้มภาพ, กูรูเรื่องยาง, ตัวแทนจำหน่าย, สมัครงาน, ดาวน์โหลด, แผนผังเว็บไซต์), a privacy link, and "Copyright © 2017 SVIZZ - ONE Corporation LTD."

The look is dense, bordered and a little dated, and the page's own visual signature comes from imagery and the orange brand color rather than from CSS. A cookie consent dialog appeared in one capture and was removed from the final measurement; it is not part of the design.

## Colors

- **Canvas `#ffffff`** is the page background and the largest measured area.
- **Ink `#252525`** is the most-read text color (318 characters); **ink-black `#000000`** (90 characters) colors the main navigation items, and `#333333` colors the search input text.
- **surface-panel `#ebebeb`** is the grey of the news and guru panels and the footer (the second measured background area).
- **Primary `#f15a22`** is the orange-red of the brand. It is measured as the text color of the dropdown navigation items (`rgb(241, 90, 35)`, a recorded probe) and appears 31 times in the shipped CSS; the extractor's automatic primary was a different blue. **accent-orange `#ff6700`** is the second brand orange: the background of the dropdown items at 60% alpha, the colour of the mobile menu icon bars (`rgb(254, 103, 0)`), and 17 uses in the CSS.
- **link-blue `#428bca`** colors 29 text characters (for example the privacy-policy link). It is a framework link color (the page loads Glyphicons Halflings, an asset of the Bootstrap 3 toolkit), so it is recorded as a link color and not as the brand.
- **ink-muted `#898989`** and **ink-subtle `#7f7f7f`** are secondary text colors measured on 45 and 18 characters.

The shipped CSS also carries Bootstrap's alert and button palette (greens, reds, light blue, `#f0ad4e`), none of which was seen on visible elements. Most of the orange in the capture (logo, banner, social icons, search button) lives in images and was not measured as CSS values.

## Typography

Two families: **dokchamp**, a Thai display face used for the navigation and module titles, and **Sarabun**, a Thai and Latin text face at 400. Arial (66 characters) appears for some Latin text. The CSS also declares `Quark` and `supermarket`, but they were not seen in use.

| Role | Font | Size / line height | Weight |
|---|---|---|---|
| display (nav item) | dokchamp | 19px / 39px | 400 |
| display-mobile | dokchamp | 18px / 33px | 400 |
| body | Sarabun | 15px / 21.4286px | 400 |
| input | Sarabun | 15px / 21.4286px | 400 |

Other measured sizes are 14px (the most-read, 200 characters), 13px, and 13.3333px. Weights are 400 (522 characters) and 700 (18). Letter-spacing is normal. On mobile the sizes recorded were 14px (210 characters), 18px, 13px and 13.3333px.

## Layout

The page is a fixed-width centered column of modules, in the capture about three quarters of the viewport wide, with a decorative orange geometric pattern at the left and right edges beyond the carousel. Header: logo with a stripe line, utility links (สมัครงาน | ติดต่อเรา) and a search field above the nav. The carousel sits directly under the nav, separated by a heavy dark rule. The module grid has four columns: a column for new tyres, a wide empty gap, and a tyre selector panel on the right, then a row of four modules (news, catalogue, guru, quality). Footer is a full-width grey band.

Measured paddings are 41px (the most frequent, 8 uses), 5px, 10px, 6px, 1px, 15px, 20px and 7px. No gap values were recorded.

## Elevation & Depth

No box shadows were measured in the final extraction. The capture shows a heavy dark horizontal rule under the navigation and a soft shadow under the carousel, but the extractor recorded no values, so their sizes are not measured. Panels are flat grey `#ebebeb` rectangles; separation comes from background changes and thin dotted dividers between news items.

## Shapes

Measured radii: 20px (9 elements: the search field and the round language and icon buttons), `5px 5px 0px 0px` (7 elements: the tab-like tops of the navigation drop-downs), 4px, and 5px in the earlier measurement. Everything else (panels, carousel, input) is square. The social icons and module icons are circles drawn in the artwork.

## Components

- **Search input (`text-input`)**: 229px by 35px, Sarabun 15px in `#333333`, padding 1px 2px 1px 20px, with a magnifier image set as the background at the right and a 20px rounded outline in the capture.
- **Main navigation**: six items in dokchamp 19px black; each opens a drop-down whose items have an orange `#f15a22` label on a 60%-alpha `#ff6700` background and `5px 5px 0 0` top radii.
- **Language buttons**: round "EN" and "TH" buttons in the header; TH is highlighted orange.
- **Orange search button**: a rounded orange pill "ค้นหา" below two selects in the tyre selector panel.
- **Module card (`card`)**: `#ebebeb` panel with a round icon, a dokchamp title and an orange round "เพิ่มเติม +" (more) link.
- **Carousel**: full-width slide with circular prev and next arrows and a row of dots, the active dot outlined in orange.
- **Footer**: `#ebebeb` band with four orange circular social icons and a pipe-separated link row.

## Design System Architecture

No public design system or brand guideline is published for this site: the home page links none, and the page opened for research was https://www.deestone.com/ (rendered, in the final measurement). The de-facto system is a themed site (theme path `App_Themes/DeeStone/Images/...` in the measured input background) built on Bootstrap 3 conventions: Glyphicons Halflings is loaded, and the shipped CSS includes Bootstrap's contextual colors. Brand-specific values are few: the orange pair `#f15a22` and `#ff6700`, the dokchamp display face, 4px, 5px and 20px radii, and grey `#ebebeb` panels. Class names seen on the navigation are `MainMenu` and `NavbarWhyDeestone`.

## Do's and Don'ts

Do:
- Keep a white page with `#ebebeb` panels and `#252525` text.
- Use dokchamp 19px for navigation and module titles and Sarabun 15px for text.
- Use the orange pair `#f15a22` and `#ff6700` for brand accents, with round icons and a search pill.
- Use 20px radii for round controls and `5px 5px 0 0` for drop-down tops.
- Keep imagery bold: tyres, racing banners, trucks.

Don't:
- Do not use Bootstrap's default blue or alert colors as brand colors.
- Do not document the cookie dialog as brand UI.
- Do not add shadows; none were measured.
- Do not set Thai text in a Latin-only face.

## Responsive Behavior

A fresh 390px mobile pass was recorded. Measured: the h1-style label "ยางรุ่นใหม่" is dokchamp 18px with a 33px line height, `#252525`, 80px wide; the most-read sizes were 14px, 18px, 13px and 13.3333px. The CSS declares a hamburger icon built from three orange `icon-bar` spans (a Bootstrap navbar pattern). The mobile nav, carousel and module layout were not measured; no primary call to action was found.

## Iteration Guide

1. Set white canvas, `#252525` text, load dokchamp and Sarabun.
2. Build the nav at 19px dokchamp with orange drop-downs.
3. Add `#ebebeb` module panels with round orange icons.
4. Use a 20px-radius search field and an orange pill search button.
5. Place a full-width carousel under a dark rule.
6. On mobile use 18px dokchamp labels and check the rest against the live page.
