---
version: alpha
name: Sena Development
category: "Thai Brands"
description: "Sena Development (sena.co.th) Thai homes and condos site in db_heavent 300 to 600 with teal #32bcad actions, 8px button radius, 10px card radius, 50px outlined chips on a white #ffffff canvas with an orange #e1762d tag color."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#32bcad"
  on-primary: "#ffffff"
  surface-2: "#d6d6d6"
  surface-3: "#efeff0"
  ink-2: "#404040"
  ink-3: "#333333"
  ink-5: "#32bbac"
  primary-hover: "#89d0c8"
  accent-orange: "#e1762d"
  text-input-text: "#717a81"
  text-input-border: "#ced4da"
typography:
  display:
    fontFamily: db_heavent
    fontSize: 40px
    fontWeight: 500
    lineHeight: 48px
  body:
    fontFamily: db_heavent
    fontSize: 24px
    fontWeight: 300
    lineHeight: 36px
  button:
    fontFamily: db_heavent
    fontSize: 24px
    fontWeight: 500
    lineHeight: 36px
  nav:
    fontFamily: db_heavent
    fontSize: 20px
    fontWeight: 300
    lineHeight: 30px
  input:
    fontFamily: db_heavent
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
rounded:
  xs: 4px
  sm: 8px
  md: 10px
  lg: 50px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 9px
  s8: 10px
  s9: 12px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 2.7px 25px
    height: 43px
    borderColor: "{colors.ink-5}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 6px 12px
    height: 48px
    borderColor: "{colors.ink-5}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-3}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 6px 35px 6px 12px
    height: 43px
    borderColor: "{colors.text-input-border}"
---

## Overview

Sena Development's homepage (https://www.sena.co.th/, title "เสนา ดีเวลลอปเม้นท์ (SENA) | บ้าน คอนโด ทาวน์โฮม คุณภาพ") is built as a property-search front door. The capture shows a white header with the SENA DEVELOPMENT logo (teal diamond mark) and the tagline "MADE FROM HER #คิดละเอียดกว่าก...", icon buttons for favourites, account, search and menu, a language selector reading "TH", then a full-width hero carousel with three dots and left/right arrows. The visible hero slide is "SENA HOMEWAYS — ทางเลือกสู่การมีบ้านในทุกจังหวะชีวิต" with the English line "Others let you choose a home. SENA lets you choose your way to home." The artwork is a hand holding a glass panel containing a twin house, flanked by an apartment block and a living room, in soft sky-blue light.

Below the hero a grey search band offers a keyword field with a magnifier, three dropdowns, a teal "ค้นหา" button and four outlined teal pills ("คอนโดใกล้รถไฟฟ้า", "คอนโดใกล้นิคม", "คอนโดพร้อมอยู่", "คอนโดไม่เกิน 1 ล้าน"). A "แนะนำโครงการ" (recommended projects) carousel follows: tall rounded project images, an orange label "โครงการพร้อมอยู่" on the upper left, a favourite heart on the upper right, a "เปรียบเทียบโครงการ" compare checkbox on the lower left of each image, then the project name and a price line such as "1.19 ล้านบาท" and "5.45 ล้านบาท". The voice is practical and price-forward. A dark cookie notice with "ปฏิเสธ" and "ตกลง" buttons overlays the page in the capture; it is a site utility and contributes no tokens here.

## Colors

The extraction records a white #ffffff canvas (area weight 6426), a large #d6d6d6 grey area (3208), #efeff0 and #f7f7f7 light panels, an orange #e1762d (78), teal #32bcad (36), red #ff0000 (9), slate #686d70 and #dee2e6 border grey. Text is black #000000 (1390 characters), #404040 (994), #333333 (875), white (621) and teal #32bbac (126).

- **Primary teal #32bcad**: the "ค้นหา" button fill (white text, 1px border #32bbac). Hover lightens the fill and border to #89d0c8 (rgb(137, 208, 200)); the hover on "ดูทั้งหมด >" also moves its text to #89d0c8, and the "TH" language link changes from #333333 to teal #32bcad.
- **Teal text #32bbac** colors outlined pills and section links.
- **Accent orange #e1762d** is a measured background color; orange labels sit on project images in the capture.
- **Ink #000000 / #404040 / #333333** are headings, body and navigation text respectively.
- **Surface #d6d6d6 / #efeff0** are the grey search band and card backdrops.
- **Input** text is #717a81 with a #ced4da border.

Bootstrap default blue #007bff appears as the computed link color and is not a brand color; it is excluded. Bootstrap :root variables (--success #28a745, --danger #dc3545, --yellow #ffc107) are framework defaults and are not used.

## Typography

One family: **db_heavent**, loaded in 300, 400, 500 and 600. It is a Thai-first condensed face with a compact Latin set; Noto Sans Thai or Sarabun are the nearest freely available substitutes for Thai text. Sizes are large because the face is compact: display 40px / 500 / 48px (the "ค้นหาโครงการ คอนโด บ้าน ทาวน์โฮม" heading and the "แนะนำโครงการ" section heading), body 24px / 300 / 36px, buttons 24px / 500 / 36px, navigation 20px / 300 / 30px and input text 20px / 400 / 30px. At the 390px mobile pass the section heading is 30px / 500 (line-height 39px), body stays 24px / 300 and the secondary "ทั้งหมด" control is 16px / 400.

## Layout

Desktop is 1280px with five header links and up to 15 card columns counted by the extractor (carousel items). The header is 80px high with a white background. Content sits in a centered column; the search band is full-bleed grey with the form centered, and project carousels bleed to the container edges with arrow controls on both sides. Spacing steps are 2, 3, 4, 5, 6, 8, 9, 10, 12 and 15px. Buttons use 6px 12px padding (48px high) or 2.7px 25px (43px high).

Reading order on the captured page is: header, hero carousel, search band, recommended-projects carousel. In the search band the keyword field, the dropdowns and the "ค้นหา" button all measure 43px high with 8px radius, which gives the band a single-row rhythm. Orange labels appear on the project images in the capture, while teal is used on the search button, the outlined pills, the "ดูทั้งหมด >" link and the "TH" hover state. Greys carry structure: #d6d6d6 behind the cards, #efeff0 and #f7f7f7 for quiet panels, and #dee2e6 as a measured border-grey. The two 40px headings are black #000000 at weight 500, and no heavier display weight was measured, so hierarchy comes from size and color rather than bold type.

## Elevation & Depth

No box-shadows were recorded on the measured elements; separation comes from background tones (#ffffff, #d6d6d6, #efeff0), image rounding and white space. A translucent #00000080 area is a measured overlay (the cookie notice scrim), not an elevation token.

## Shapes

The radius census lists 10px (66 uses, cards and images), "0px 0px 10px 10px" (15, bottom-rounded blocks), 50% (13, circular icon buttons), 8px (6, buttons and inputs), 4px (6) and 50px (4, the outlined search pills). Buttons and inputs are 8px; cards are 10px; chips are 50px. Borders are 1px in #32bbac, #ced4da or #32bcad.

## Components

- **button-primary** ("ค้นหา"): fill #32bcad, white 24px / 500 text, 8px radius, 1px border #32bbac, 43px high; hover #89d0c8.
- **button-secondary** ("ดูเพิ่มเติม"): same fill and text, 6px 12px padding, 48px high, 8px radius.
- **Outlined pill** ("คอนโดใกล้รถไฟฟ้า"): transparent, text and 1px border #32bbac, 50px radius, 20px / 400 text, 44px high.
- **Text input / select**: white, 20px / 400 #717a81, 1px #ced4da, 8px radius, 43px high, padding 6px 35px 6px 12px (room for the chevron or magnifier).
- **Nav**: white, text #333333, 80px high.
- **Project card**: image with 10px radius, label, favourite and compare controls, then name and price below.

## Design System Architecture

No public Sena design-system or brand-guideline page was opened; the research record is {none:true}. The shipped page is Bootstrap-based (Bootstrap :root variables such as --breakpoint-md 768px, --light #f8f9fa and --success #28a745 are present), uses Swiper (swiper-icons font) and bootstrap-icons for glyphs, and a single custom web font, db_heavent. Brand color is not exposed as a custom property; the teal #32bcad was read from computed button styles.

## Do's and Don'ts

- Do use teal #32bcad for the main search action and #32bbac for outlined chips.
- Do keep Thai text in db_heavent at the large sizes above so the compact face stays legible.
- Do show price on every project card.
- Do use 8px radius on controls, 10px on cards, 50px on chips.
- Don't use Bootstrap blue #007bff for links or actions.
- Don't present the cookie notice, scrim or carousel arrows as brand components.
- Don't add shadows; the measured page has none.

## Responsive Behavior

Measured at 390px: the h1 stays 40px / 500 (height 74px), the section heading is 30px / 500, body is 24px / 300, the secondary control "ทั้งหมด" is 16px / 400 with a 1px #ced4da border and 8px radius at 43px high, four header links are visible, no menu toggle was detected, and the extractor still counts up to 15 carousel columns. Tablet behavior and dark mode were not measured.

## Iteration Guide

1. White canvas, db_heavent 300 body at 24px / 36px.
2. Section heading 40px / 500 in #000000.
3. One teal #32bcad action per band, white 24px / 500 label, 8px radius; hover #89d0c8.
4. Filters as 50px outlined teal pills.
5. Cards at 10px radius with orange #e1762d labels and a price line.
6. Check 390px: 30px headings, readable 24px body.
