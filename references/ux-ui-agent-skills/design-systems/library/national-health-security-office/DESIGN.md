---
version: alpha
name: National Health Security Office (สำนักงานหลักประกันสุขภาพแห่งชาติ, สปสช.)
category: "Thai Brands"
description: "Thai NHSO portal (nhso.go.th) set in Prompt on white #ffffff with #262626 ink, a blue header #2b7cdb, pale blue #ebf4ff and #e0eeff service bands, #3366ff buttons with white text at 4px radius, and a dark navy #001640 accessibility bar."
colors:
  canvas: "#ffffff"
  page-largest: "#ebf4ff"
  ink: "#262626"
  primary: "#3366ff"
  on-primary: "#ffffff"
  blue-header: "#2b7cdb"
  blue-tint: "#e0eeff"
  ink-nav: "#2c2e36"
  ink-heading: "#2a2a2a"
  ink-light: "#f3f3f3"
  ink-light-translucent: "#ffffffb8"
  hairline: "#ffffffcc"
typography:
  display:
    fontFamily: Prompt, "Palatino Linotype", "Book Antiqua", Palatino, serif
    fontSize: 29.936px
    fontWeight: 500
    lineHeight: 35.9232px
  display-mobile:
    fontFamily: Prompt, "Palatino Linotype", "Book Antiqua", Palatino, serif
    fontSize: 33px
    fontWeight: 500
    lineHeight: 39.6px
  body:
    fontFamily: Prompt
    fontSize: 16px
    fontWeight: 700
    lineHeight: 27.2px
  button:
    fontFamily: Prompt
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: Prompt
    fontSize: 14px
    fontWeight: 400
    lineHeight: 23.8px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 6px
  xl: 7px
  2xl: 50px
spacing:
  s1: 2px
  s2: 4.2px
  s3: 5px
  s4: 5.6px
  s5: 7px
  s6: 7.8px
  s7: 8px
  s8: 10px
  s9: 14px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 38px
    boxShadow: rgb(255, 255, 255) 0px 0px 0px 0px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 38px
    boxShadow: rgb(255, 255, 255) 0px 0px 0px 0px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    padding: 8px 16px
  nav:
    textColor: "{colors.canvas}"
    padding: 30px 0px
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.button}"
---

## Overview

The NHSO home page (final URL https://www.nhso.go.th/th/, title "สำนักงานหลักประกันสุขภาพแห่งชาติ", language `th-th`) serves two audiences, as its navigation shows: "สำหรับประชาชน" (for the public) and "สำหรับหน่วยบริการ" (for service units). A page summary I opened lists public services (health insurance registration, provider search, the "30 Baht Treat Anywhere" programme, rights guides, complaint channels), provider services (fund management, registration, e-Claim, dashboards), organisation information, communications, a footer with regional office links, contact details and policy links.

The measured capture shows a navy utility bar with social icons and accessibility controls, a blue header with the NHSO logo and a horizontal nav (หน้าแรก, สำหรับประชาชน, สำหรับหน่วยบริการ, เกี่ยวกับองค์กร, สื่อสารองค์กร, เครือข่าย สปสช., ธรรมาภิบาลองค์กร, ติดต่อเรา), a blue announcement banner and a hero slideshow of infographic slides, a "ข่าวประชาสัมพันธ์" news block with one photo feature and a bulleted headline list, and a pale blue band of eight illustrated service tiles (for example "30 บาทรักษาทุกที่", "ระบบค้นหาหน่วยบริการ 30 บาทรักษาทุกที่", "คลังความรู้บัตรทอง", "ดาวน์โหลดเอกสาร"). The extractor removed a splash (`nhsoSplash`), a cookie notice (`eu_cookies`) and a site-wide grayscale(0) filter before capturing; none of those are treated as brand UI.

## Colors

The identity is a clear medical blue. `primary` #3366ff fills the buttons ("อ่านทั้งหมด", "ข่าวทั้งหมด", "รายละเอียด") with white `on-primary` text, and darkens to #0037dd on hover (measured on "รายละเอียด"). `blue-header` #2b7cdb is the header fill (954 weight). Two pale blue fields carry the content bands: `page-largest` #ebf4ff (967) and `blue-tint` #e0eeff (896), with #c9e1ff (871) as a third tint. #001640 is the dark navy of the utility bar and #28966c a small green area. `canvas` is white (789 weight) with #f8f9fa (577) as a light gray.

Text: `ink` #262626 (974 characters), `ink-nav` #2c2e36 (794), `ink-heading` #2a2a2a (176), white for header text, `ink-light` #f3f3f3 and `ink-light-translucent` #ffffffb8 for text on blue, and `hairline` #ffffffcc for borders on blue. The root CSS defines a Bootstrap 5 palette (for example --bs-orange #fd7e14, --bs-success #7cac36, --bs-primary #2c2e36); those are framework variables and only the values in the frontmatter are used as brand tokens.

## Typography

Prompt is the main face (2,221 characters), with Pridi (67) used in a heading fallback stack and Roboto-Medium (2). Loaded faces are Prompt 400, 500 and 700, Font Awesome 5 Brands and Free, and k-icons. The `display` style is Prompt 29.936px / 35.9232px weight 500 (the "ข่าวประชาสัมพันธ์" heading) with a Palatino fallback stack. `body` is 16px / 27.2px weight 700 (news headlines), `button` is 16px / 20px weight 400 and `link` is 14px / 23.8px weight 400. Measured sizes by character count: 16px (1,910), 12px (119), 18px (109), 13px (85) and 29.936px (67). Weight 400 is 1,893 characters, 700 is 219, 500 is 178. Prompt is a Google Fonts typeface, loaded by the site itself.

## Layout

Desktop measurement at 1280px wide, full-page height recorded. Order: utility bar, header with nav, banner and hero carousel with arrows and dots, news block in two columns (feature at left, headline list at right), pale blue service band of four tiles per row, and footer. The nav bar measured 151px high with 30px 0px padding. Measured paddings: 20px (44), 10px (39), 5px (24), 8px (21), 40px (19), 16px (16), 15px (9) and 50px (5).

## Elevation & Depth

The page is nearly flat: shadows measured are `rgb(255, 255, 255) 0px 0px 0px 0px` (61, a reset on buttons) and `rgba(0, 0, 0, 0.075) 0px 2px 4px 0px` (1). Hierarchy is made with colour bands (white, #ebf4ff, #e0eeff, #2b7cdb) and the photo and icon illustrations rather than shadow.

## Shapes

Radii measured: 50px (10 occurrences), 7px (6), 6px (5), 4px (3), 3px (3), 2px (1). Buttons use 4px; round controls and accessibility icons use 50px. Illustrated tiles and photos in the capture are shown without a measured radius on the tile itself.

## Components

**Button** (`button-primary`, `button-secondary`): #3366ff fill, white Prompt 16px weight 400, 8px 16px padding, 38px high, 4px radius, with the white zero-offset shadow; hover fill #0037dd. Text labels are short Thai verbs: "รายละเอียด" (details), "อ่านทั้งหมด" (read all), "ข่าวทั้งหมด" (all news).

**Nav** (`nav`): white text on the blue header, 30px 0px padding. **Nav link** in the secondary text colour #2c2e36 at the button style. **Link** (header icons): white 14px, 8px 16px padding. **News block**: feature photo with a headline and a button; list items are bulleted headlines at 16px weight 700. **Service tiles**: illustration above a bold centred Thai caption on the pale blue band.

## Design System Architecture

No public design system or brand-guideline page was found. The home page summary mentions website policies in the footer but no design or brand guideline link. The de-facto system is Bootstrap 5 plus UIkit: the root variables include `--bs-*` tokens (colours, radii such as --bs-border-radius-2xl 2rem, font weight 400) and `--uk-breakpoint-m` 960px, with Font Awesome 6 variables and a k-icons font. The brand layer is the blue palette and Prompt applied on top.

## Do's and Don'ts

- Do use #3366ff for every action and #2b7cdb for the header, on white and pale blue bands.
- Do set headings in Prompt weight 500 at 29.936px and news headlines at 16px weight 700.
- Do pair each service tile with a bold short Thai caption and an illustration.
- Do keep buttons at 4px radius with 8px 16px padding.
- Don't use Bootstrap default orange, green or purple as brand colours.
- Don't copy the splash, cookie notice or accessibility toolbar into designs as brand elements.
- Don't add heavy shadows; measured elevation is nearly zero.

## Responsive Behavior

A mobile pass was recorded. On mobile the heading measured 33px / 39.6px weight 500 (`display-mobile`, larger than desktop's 29.936px), body copy 15px / 25.5px weight 700, the nav header 15px / 25.5px weight 400 with 30px 0px padding and 128px height (151px on desktop), and the button was unchanged at 16px with 8px 16px padding, 38px high and 4px radius. Breakpoint widths and the column layout of the service tiles on mobile were not measured.

## Iteration Guide

1. Start from white with #262626 text and Prompt 16px; use #ebf4ff and #e0eeff for bands.
2. Use #3366ff for actions and #2b7cdb for the header.
3. Keep corner radius at 4px for buttons; use 50px only for round icon controls.
4. Measure any new component before adding tokens.
5. Re-run `node web/scripts/verify-designs.mjs --slug=national-health-security-office` after changes.

## Measurement Notes

Additional measured values for reuse: border colours are #ffffffcc (9 occurrences) and #ffffff (1); background areas also include #f8f9fc (15 weight) and #3366ff (13); text colours include #eeeeee (57 characters) and #222222 (2). The detected button candidates are three: "อ่านทั้งหมด", "ข่าวทั้งหมด" and "รายละเอียด", all #3366ff at 4px radius. The mobile pass recorded no secondary heading. Measured spacing steps range from 2px to 15px in the generated scale (2px, 4.2px, 5px, 5.6px, 7px, 7.8px, 8px, 10px, 14px, 15px). Any value not listed here or in the frontmatter was not measured on this site and should be omitted until it is.
The dominant measured size is 16px, which accounts for 1,910 of the measured characters, and Prompt covers 2,221 of them.
