---
version: alpha
name: "Supalai"
category: "Thai Brands"
description: "Supalai (ศุภาลัย) Thai property developer home page measured live: a white page with the Prompt typeface at weights 300 to 500, a gold #c2883e call-to-action, charcoal #333132 and dark-brown #3c2415 panels, #f1f2f2 grey bands, square buttons, 6px and 18px corner radii, and soft 2px shadows."
colors:
  canvas: "#ffffff"
  ink: "#717171"
  primary: "#c2883e"
  on-primary: "#ffffff"
  surface-grey: "#f1f2f2"
  surface-charcoal: "#333132"
  ink-strong: "#000000"
  hairline: "#dfe1e5"
typography:
  display:
    fontFamily: Prompt
    fontSize: 30px
    fontWeight: 400
    lineHeight: 40px
  heading:
    fontFamily: Prompt
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 6px
  sm: 18px
  none: 0px
spacing:
  s1: 2px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 25px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.none}"
    padding: 12px
    height: 48px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.heading}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.surface-charcoal}"
    typography: "{typography.heading}"
    rounded: "{rounded.none}"
    padding: 15px 18px 15px 56px
    height: 56px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.xs}"
    padding: 28px 20px 40px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.none}"
---

## Overview

The measured page is supalai.com, the Thai-language home page of the property developer Supalai (document title "บ้านเดี่ยว ทาวน์โฮม และคอนโดมิเนียม โครงการคุณภาพ โดยบริษัท ศุภาลัย", meaning detached houses, townhomes and condominium projects by Supalai). The page language is `th`. The header is white and centered on a gold serif "SUPALAI" wordmark, with a phone link ("โทร 1720") on the left, search, account and language (Thai flag, "ไทย") controls on the right, and a second row of text links: บ้าน (houses), ทาวน์โฮม (townhomes), คอนโดมิเนียม (condominiums), โปรโมชั่น (promotions), สิทธิพิเศษ (privileges), นักลงทุนสัมพันธ์ (investor relations), ความยั่งยืน (sustainability), ออฟฟิศให้เช่า (offices for rent) and เกี่ยวกับเรา (about us).

Under the header is a full-width promotional carousel with twelve dots; the captured slide is a co-branded poster for a dance and music festival on the left and a gold-on-dark "10%" privilege offer on the right. The next block is a project search ("ค้นหาโครงการ", search projects): a single wide input with a search icon and the placeholder "พิมพ์ทำเลหรือชื่อโครงการที่คุณสนใจ", then five icon tabs (nearby projects, popular locations, brands, price range, commuter routes), the active one underlined in gold. A #f1f2f2 band follows with a horizontal rail of photo tiles (house series, new projects, provinces). Further down are pill-shaped filter chips, two dark-brown promotional panels each with a white "ดูเพิ่มเติม" (see more) button, and a rail of project cards that carry a red "โครงการใหม่" (new project) tag and a green "EIA Approved" tag, plus map, compare and heart icons. The page is 4,550px tall at 1280px.

The tone is a mass-market residential catalogue: photographic renderings of houses and towers, price-led copy ("เริ่ม 5.99 ล้านบาท", starting from 5.99 million baht), and a restrained gold-and-white identity.

## Colors

The page background is `canvas` (#ffffff, the largest area, weight 1394). `surface-grey` (#f1f2f2, weight 714) is the band behind the tile rail. `surface-charcoal` (#333132, weight 358) is the dark neutral used for dark areas and as the text color inside the search input. A dark brown, #3c2415 (weight 271), is the background of the promotional panels. `primary` (#c2883e) is the gold used for the call-to-action fill, the active-tab underline and gold text (408 characters in #c2883e), with `on-primary` white. Two small status colors appear in tags: red #e44746 (weight 22, the "new project" tag) and green #008559 (weight 15, the "EIA Approved" tag). Both are measured but status-only and are not documented as brand accents.

Text colors: white (#ffffff) is the most-read color by characters (8982) because the captured carousel slide and dark panels carry much text; `ink` (#717171, 2153 characters) is the secondary grey for descriptive copy; `ink-strong` (#000000, 1945 characters) is the header and heading color. `hairline` (#dfe1e5) is the border color of the search input (2 elements).

## Typography

Prompt is the only family, measured on all 13,532 characters. The loaded faces are Prompt at 300 normal, 400 normal, 500 normal and 600 italic. Weight usage by characters is 400 (5790), 300 (5324) and 500 (2418). The size census is led by 14px (5268 characters), 18px (4378), 20px (1962) and 16px (1298), with 13px (488), 15px (73) and 30px (50). No letter spacing is recorded.

The extractor selected the "ค้นหาโครงการ" heading as the h1 role: `display` is Prompt 30px, weight 400, on a 40px line. `heading` (also used for the button and navigation) is Prompt 16px weight 400. The extractor found no plain body paragraph, so no `body` token is declared; the most-used sizes in the census are 14px and 18px. Thai text is set without tracking changes and with `normal` line height on buttons.

## Layout

The desktop capture is 1280px wide. Content is centered and bounded: the header is a centered stack, the search block is a single centered input (the extraction records the text input at 56px tall), and the rails run to the page edge and are cut off mid-card in the capture. Grid cards in the project rail show a photo, a name, a location and price lines, with three small icon buttons. Padding values measured: 2, 6, 8, 10, 12, 15, 16, 20, 25 and 28px, with the project card using 28px 20px 40px. No grid gap values were recorded (`gaps` is empty), and no custom properties are exposed (`rootVars` is empty).

## Elevation & Depth

Elevation is minimal and soft. The only shadows measured are `rgba(0, 0, 0, 0.1) 0px 0px 2px 0px` (28 elements) and `rgba(0, 0, 0, 0.2) 0px 0px 2px 0px` (1 element): a thin diffuse halo with no offset. The dark-brown panels sit as flat tinted blocks with a darkened photograph behind; no layered or drop shadows were measured.

## Shapes

The page is square by default with a few rounded elements. `none` (0px) is the radius on the primary button, links, navigation and the search input. `sm` 18px was measured on 10 elements with no element label recorded; the filter chips in the capture are rounded; `xs` 6px was measured on 4 elements and is the project card radius. The tag chips and the select field in the capture are rounded; nothing else is circular.

## Components

- **button-primary**: gold #c2883e fill, white Prompt 16px label, 0px radius, 12px padding, 48px tall ("ดูรายละเอียด", view details).
- **link**: white Prompt 16px text (on dark panels).
- **nav / nav-link**: white header, black (#000000) 16px Prompt links.
- **text-input**: white field, #333132 text, 0px radius, padding 15px 18px 15px 56px (room for the search icon), 56px tall, 1px #dfe1e5 border.
- **card**: white fill, #000000 text, 6px radius, padding 28px 20px 40px.
- **footer**: white background, black text.
- **Chips, tags and tabs**: rounded chips for filters, red and green status tags, and gold-underlined icon tabs, described from the capture.

## Design System Architecture

No public design-system documentation was opened. The root exposes no CSS custom properties, so the system is read from computed styles: one family (Prompt), a three-weight scale, a four-color neutral set, one gold, and two radii. No tokens repository or brand-guideline page was consulted.

## Do's and Don'ts

- Do set all text in Prompt at weights 300, 400 and 500.
- Do keep the gold (#c2883e) for the main call-to-action and active-tab underline.
- Do keep buttons and inputs square (0px) and use 18px only for the rounded elements.
- Do use the #f1f2f2 band for rails and #3c2415 or #333132 for dark panels.
- Don't use shadows beyond the 2px halo at 10% black.
- Don't use red or green outside status tags.
- Don't treat the third-party festival poster in the carousel as Supalai's own art direction.

## Responsive Behavior

Measured at a 390px pass: the h1 stays at 30px on a 40px line. The mobile size census is led by 14px (5003 characters), 18px (3876), 20px (1919) and 16px (1229), with 17px, 13px, 0px, 15px, 25px and 19px also present. Breakpoints, nav collapse and card counts were not measured.

## Iteration Guide

1. Start from white; build the header as a centered gold wordmark with a single row of black Prompt links.
2. Place a wide, square-cornered search input directly below the carousel.
3. Put project cards on a #f1f2f2 band with 6px corners and a faint 2px shadow.
4. Use one gold button per section, with white 16px Prompt text.
5. Keep status tags separate and small; do not reuse their red or green for actions.
