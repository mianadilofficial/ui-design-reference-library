---
version: alpha
name: M.K. Real Estate Development
category: "Thai Brands"
description: "M.K. Real Estate Development (mk.co.th, Thai: เลือกบ้านมั่นคง) home page: psl_kittithada_proregular Thai type in uppercase-tracked 40px headings, a dark #3d3d3d filter bar and #282828 footer, white and #f2f2f2 project sections, a #6d007c purple search button and 30px-rounded promotion tiles over a dark #261229 popup scrim in the capture."
colors:
  canvas: "#ffffff"
  page-body: "#f2f2f2"
  overlay-scrim: "#261229"
  ink: "#212121"
  primary: "#6d007c"
  on-primary: "#ffffff"
  surface-filter-bar: "#3d3d3d"
  ink-muted: "#9a9a9a"
  ink-heading: "#414141"
  ink-light: "#dfdfdf"
  nav-link-text: "#000000"
typography:
  display:
    fontFamily: psl_kittithada_proregular, sans-serif
    fontSize: 40px
    fontWeight: 600
    lineHeight: 46px
    letterSpacing: 1px
    textTransform: uppercase
  heading:
    fontFamily: psl_kittithada_proregular, sans-serif
    fontSize: 34px
    fontWeight: 600
    lineHeight: 40px
    letterSpacing: 1px
    textTransform: uppercase
  subheading:
    fontFamily: psl_kittithada_proregular, sans-serif
    fontSize: 30px
    fontWeight: 600
    lineHeight: 36px
    letterSpacing: 1px
    textTransform: uppercase
  body:
    fontFamily: psl_kittithada_proregular, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20px
    letterSpacing: 2px
    textTransform: uppercase
  nav:
    fontFamily: psl_kittithada_proregular, sans-serif
    fontSize: 15px
    fontWeight: 300
    lineHeight: 23px
    letterSpacing: 1px
  input:
    fontFamily: psl_kittithada_proregular, sans-serif
    fontSize: 18px
    fontWeight: 600
    letterSpacing: 3px
    textTransform: uppercase
rounded:
  xs: 3px
  sm: 30px
  pill: 9999px
spacing:
  s1: 5px
  s2: 10px
  s3: 15px
  s4: 18px
  s5: 20px
  s6: 50px
  s7: 60px
  s8: 80px
components:
  nav:
    textColor: "{colors.canvas}"
    padding: 10px 0px
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 5px 0px
    height: 34px
    borderColor: "{colors.canvas}"
---
## Overview

M.K. Real Estate Development (บริษัท เอ็ม.เค. เรียล เอสเตท ดีเวลลอปเมนท์, the brand is "มั่นคง") is a Thai house builder. The measured page, https://www.mk.co.th/, is titled "มองหาโครงการบ้านคุณภาพ | เลือกบ้านมั่นคง" (looking for quality housing projects, choose Mankong). The capture shows a dark purple-black header with the white "มั่นคง" logo (an X-shaped mark above the Thai wordmark) and six white navigation links (บ้านเดี่ยว, บ้านแฝด, ทาวน์โฮม, ครอบครัวมั่นคง, ข่าวประชาสัมพันธ์, เกี่ยวกับมั่นคง). A tall dark region fills the first screen with a single portrait-format advertisement (a blue panel with a yellow oval reading "เลิศเลย์..." and a price range of 1.79 to 2.85 million baht) and a black cookie bar with a yellow "ยอมรับ" (accept) button. That dark region and the ad are a promotional popup state in the capture and not the brand's page layout.

Below the popup sits a dark grey search bar (property type, location and price selects plus a purple "ค้นหา" button), a white "โครงการที่น่าสนใจ" (interesting projects) section with three columns of photographs (บ้านเดี่ยว, บ้านแฝด, ทาวน์โฮม), a dark forest-photo video band ("Play fullscreen video"), a "โปรโมชั่น" (promotions) row of project logo tiles, a dark band of four icon links (careers, installment calculator, enquiry, shareholder information) and a black footer listing projects by type. The page is 2850px tall at 1280px width. The register is functional and promotional: lots of small project tiles and link lists.

## Colors

The last re-extraction still includes the popup region, so the largest area color is the scrim. Background areas: #261229 (1024), #3d3d3d (821), #ffffff (737), #282828 (367), #1e1e1e (64), #838383 (7), #6d007c (2). Text colors: #ffffff (1062 characters), #212121 (552), #9a9a9a (73), #414141 (51), #dfdfdf (22), #000000 (6).

- canvas #ffffff; page-body #f2f2f2 (the body background); ink #212121.
- overlay-scrim #261229: the dark purple-black region at the top of the capture, behind the popup ad. It is also the color of the header region in the capture. It is kept as a measured value but it is not a brand surface.
- primary #6d007c: a saturated purple measured as a background fill (the "ค้นหา" button in the filter bar); on-primary #ffffff.
- surface-filter-bar #3d3d3d: the grey search bar; #282828 (367) and #1e1e1e (64) are further dark band fills (footer and icon band), measured and not tokenized.
- ink-heading #414141: the H1 and H2 color; ink-muted #9a9a9a for small text; ink-light #dfdfdf.
- nav-link-text #000000: the measured nav-link text color.

The cookie bar's yellow button (#f1d600, hover #fffc26) and the portrait popup advertisement (blue and yellow) are consent and advertising overlays, not brand UI, and are not tokenized.

## Typography

The site loads psl_kittithada_proregular (a Thai face), Playfair Display italic (used for the "Play fullscreen video" caption) and FontAwesome. Sizes by characters: 18px (822), 24px (653), 16px (145), 30px (92), 15px (22), 40px (17), 34px (9). The extraction records weight 600 for display and headings; the loaded font list shows one face at weight 400.

- display: 40px, weight 600, line-height 46px, letter-spacing 1px, uppercase (H1 "โครงการที่น่าสนใจ"); at the 390px mobile pass the H1 also measured 40px with 46px line-height.
- heading: 34px, weight 600, line-height 40px, 1px tracking, uppercase ("โปรโมชั่น").
- subheading: 30px, weight 600, line-height 36px.
- body: 16px, weight 600, line-height 20px, letter-spacing 2px, uppercase.
- nav: 15px, weight 300, line-height 23px, 1px tracking.
- input: 18px, weight 600, letter-spacing 3px, uppercase.

Uppercase transforms apply to Latin letters only; Thai has no case. The font is loaded by the site; a Thai-capable sans such as Noto Sans Thai serves as a substitute outside it.

## Layout

The header is a fixed dark bar with logo left and links right. The filter bar spans the full width with four controls in the center. The project section uses a three-column photograph grid that bleeds to the edges of the viewport, each column with a small pager of dots. The promotions area is a horizontally scrolling strip of logo tiles with a dot pager. The footer has five link columns (บ้านเดี่ยว, บ้านแฝด, ทาวน์โฮม, ข่าวประชาสัมพันธ์, เกี่ยวกับมั่นคง) with long project lists. Paddings: 15px (70), 10px (7), 18px (6), 20px (4), 80px (2).

## Elevation & Depth

No box shadows were measured in the base extraction. The hover test recorded a rgba(0, 0, 0, 0.3) 0px 0px 8px 0px shadow on a navigation link on hover, together with a #141414 fill. The page otherwise relies on dark and light bands.

## Shapes

Radii measured: 30px (12 elements) and 3px (4). The tokens are xs 3px (select inputs) and sm 30px (promotion tiles and pills). The rest of the interface is rectangular.

## Components

- nav: white text on the dark header, padding 10px 0px; navigation items turn to a #141414 fill with white text and a soft shadow on hover.
- text-input (select fields in the filter bar): white text in the 18px 600 uppercase type with a 1px white border, 3px radius, 5px 0px padding and 34px height.
- Search button: #6d007c fill with white text.
- Project column: photograph, a type label above, a project name below with a dot pager.
- Promotion tile: colored banner (green or blue) with a project name and area, in a scrolling strip.

## Design System Architecture

No public design system or brand guideline link was found, and the extraction found no CSS custom properties (0 root variables). The system is plain classes with fixed pixel values. The consistent rules visible in measurements are: dark bands for navigation, filter and footer, white for content, one purple accent, 1px tracking on headings and 3px on inputs.

## Do's and Don'ts

- Do use dark #3d3d3d and #282828 bands to frame light content sections.
- Do keep the purple #6d007c for the search action only.
- Do give promotion tiles 30px rounded corners.
- Do list projects by house type in the footer.
- Don't present the popup ad, its #261229 scrim or the yellow cookie button as brand UI.
- Don't use shadows except on hover states.
- Don't use more than one accent color in the interface chrome.

## Responsive Behavior

At the 390px mobile pass the H1 measured 40px with a 46px line-height, the same as desktop, and body text 16px. Other mobile behavior was not measured.

## Iteration Guide

1. White content areas with #212121 text, dark #3d3d3d and #282828 bands for chrome.
2. Purple #6d007c for the search button, with white text.
3. Headings 40px and 34px at weight 600 with 1px tracking.
4. Photograph grid in three columns with type labels above and dot pagers below.
5. Round promotion tiles with 30px corners.
6. Run `node web/scripts/verify-designs.mjs --slug=mk-real-estate` after edits.

## Content and Imagery

Imagery is project photography of newly built detached houses, semi-detached houses and townhomes, with colored rectangular logo banners (green for Chuan Chuen Park, blue for Chuan Chuen Town) in the promotions strip, titled with names like "ชวนชื่น พาร์ค อ่อนนุช-วงแหวน" and "ชวนชื่น ทาวน์ รังสิต-คลอง 1". A dark forest photograph carries a video prompt in italic Playfair Display. The copy is functional: type names, locations and "เริ่ม" price lines. The footer lists company information (history, vision and mission, management, investor relations, careers, land purchases) per the page text.
