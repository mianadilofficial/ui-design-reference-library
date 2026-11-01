---
version: alpha
name: Agricultural Research Development Agency (สำนักงานพัฒนาการวิจัยการเกษตร, สวก.)
category: "Thai Brands"
description: "ARDA research-funding portal (arda.or.th) set in IBM Plex Sans Thai on white and #f9f9f9, with #194569 ink, #00857d teal pill buttons (40px radius, white 18px weight 600 text), a #2c3e61 navy band, and a 48px weight 700 hero headline over agricultural photography."
colors:
  canvas: "#ffffff"
  page-largest: "#f9f9f9"
  ink: "#194569"
  primary: "#00857d"
  on-primary: "#ffffff"
  navy-band: "#2c3e61"
  ink-gray: "#4f4f4f"
  ink-slate: "#3d4754"
  hairline: "#e6edef"
  link: "#24695c"
  text-input-text: "#717171"
  cyan-logo: "#009db1"
typography:
  display:
    fontFamily: "\"IBM Plex Sans Thai\""
    fontSize: 48px
    fontWeight: 700
    lineHeight: 69px
  display-mobile:
    fontFamily: "\"IBM Plex Sans Thai\""
    fontSize: 36px
    fontWeight: 700
    lineHeight: 59px
    letterSpacing: 0.5px
  subheading:
    fontFamily: "\"IBM Plex Sans Thai\""
    fontSize: 18px
    fontWeight: 500
    lineHeight: 23.4px
    letterSpacing: 0.5px
  body:
    fontFamily: "\"IBM Plex Sans Thai\""
    fontSize: 22px
    fontWeight: 400
    lineHeight: 31px
  button:
    fontFamily: "\"IBM Plex Sans Thai\""
    fontSize: 18px
    fontWeight: 600
    lineHeight: 27px
  nav:
    fontFamily: "\"IBM Plex Sans Thai\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 17px
  link:
    fontFamily: "\"IBM Plex Sans Thai\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: "\"IBM Plex Sans Thai\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 3px
  sm: 5px
  md: 6px
  lg: 10px
  xl: 12px
  2xl: 20px
  3xl: 40px
  4xl: 50px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 11px 16px
    height: 52px
    boxShadow: rgba(123, 161, 170, 0.6) 0px 3px 15px 0px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 11px 16px
    height: 52px
    boxShadow: rgba(123, 161, 170, 0.6) 0px 3px 15px 0px
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.4xl}"
    padding: 6px 12px 6px 60px
    height: 54px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.cyan-logo}"
    rounded: "{rounded.2xl}"
    padding: 0px 12px
    borderColor: "{colors.hairline}"
---

## Overview

The ARDA home page (https://www.arda.or.th/, title "สำนักงานพัฒนาการวิจัยการเกษตร (องค์การมหาชน)", language `TH`) presents the Agricultural Research Development Agency, a public organisation that funds agricultural research. A page summary I opened lists a top utility bar (TH/EN switch, font-size controls, display settings, auto-read, search), navigation for research funding, the NRIIS project submission system, educational grants, international funding, training programmes and graduate research funding, research categories (rice and field crops, palm oil, horticultural plants, livestock, food, herbs), knowledge services (ARDA Catalogue, YouTube playlists, news), research impact figures, and a footer with the agency address, contact and social links. The summary states that no explicit corporate-identity manual is linked.

The measured capture opens on a full-bleed hero photograph (an agricultural robot above crop rows) carrying the quote "ผู้นำในการบริหารการวิจัยการเกษตร เพื่อสร้างความเข้มแข็งของภาคการเกษตรอย่างยั่งยืน" in white at 48px, a floating pale rounded navigation bar with the ARDA logo, a purple promotional banner carousel, a row of rounded white program cards with teal pill buttons ("ยื่นขอรับทุน", "ดูรายงาน"), a deep blue photographic band, and a pill-shaped tab group for news (ข่าวผู้บริหาร, ข่าวประชาสัมพันธ์, ข่าวสำคัญประจำวัน). The extractor removed a site-wide grayscale filter for capture; a mourning ribbon at the top-left corner of the capture is an overlay and not brand UI.

## Colors

`primary` #00857d is a teal green, the fill of every call-to-action pill, with white `on-primary` text; it is also the colour of the active tab, the language switch "TH" and text accents (348 characters). `ink` is #194569, a deep blue, used for text (536 characters) and `ink-slate` #3d4754 and `ink-gray` #4f4f4f are the neutral text steps. `link` is #24695c. `navy-band` #2c3e61 is the dominant dark background (1,695 weight), with #1c6580 (641) as the blue-teal photographic band behind it. Surfaces are #f9f9f9 (`page-largest`, 3,434 weight) and white (2,769), with `hairline` #e6edef for borders and input outlines (16 border occurrences).

`cyan-logo` #009db1 is the colour of the mobile "Arda" wordmark heading. Small accents measured: #dde8f8 (12 weight), #3971ad (7), #faeed1 (5), #f4e1f4 (2) and #e60000 (1). The root CSS includes Bootstrap defaults (--bs-primary #0d6efd, --bs-yellow #ffc107, --bs-info #0dcaf0, --bs-success #198754), cookie-consent variables (--cc-*) and custom variables `--secondary-color` #00857d and `--primary-color` #fff. Bootstrap blue is not used as a brand colour.

## Typography

IBM Plex Sans Thai is the only family (4,282 measured characters), loaded in weights 300, 400, 500, 600 and 700, with Font Awesome 5 Free for icons. The `display` style is 48px / 69px weight 700 (hero quote). `display-mobile` is 36px / 59px weight 700 with 0.5px letter spacing. `subheading` is 18px / 23.4px weight 500 with 0.5px letter spacing (card titles such as "ARDA CATALOGUE NEW!!!"). `body` is 22px / 31px weight 400 (hero paragraph, #efefef on the photograph). `button` is 18px / 27px weight 600, `link` 16px / 24px weight 400, `input` 14px / 21px weight 400 and `nav` 12px / 17px weight 400.

By character count the common sizes are 11.2px (1,000), 16px (822), 18px (780), 14px (525), 22px (281), 12px (190) and 32px (131). Weight 400 covers 2,525 characters, 700 covers 754, 600 covers 547 and 500 covers 390. IBM Plex Sans Thai is an open-source Google Fonts typeface; the site loads it directly.

## Layout

Measured at 1280px wide. A full-width hero with the floating navigation capsule overlapping its top edge, then centered containers for the banner carousel, the program card carousel, the dark photographic statistics band and the tabbed news block. The navigation capsule and the carousel share the same left and right margins. Paddings measured: 12px (110), 30px (44), 16px (23), 8px (22), 24px (14), 11px (12), 48px (9). Card carousels show a partially visible neighbour at the left and right edges.

## Elevation & Depth

Elevation is soft, blue-gray and diffuse. Measured shadows: `rgba(123, 161, 170, 0.6) 0px 3px 15px 0px` (12 occurrences, the pill buttons), `rgba(102, 102, 102, 0.2) 0px 4px 15px 0px` (8), `rgba(102, 102, 102, 0.19) 0px 10px 31px 0px` (4), a two-layer `rgba(0, 0, 0, 0.06) 0px 0px 1px 0px, rgba(0, 0, 0, 0.06) 0px 10px 25px 0px` (4), and single uses of `rgba(98, 98, 98, 0.15) 0px 10px 45px 0px`, `rgba(109, 154, 172, 0.15) 0px 10px 45px 0px` and a blue two-layer shadow. Cards float over the pale background without hard borders.

## Shapes

Shapes are generously rounded. Measured radii: 10px (24 occurrences), 20px (23), 40px (13), 60px (8), 99px (5), 12px (4), 50% (3), and single uses of 90px, 5px, 50px, 6px and a 3px 3px 0px 0px top radius. The primary button uses 40px, the search input 50px, cards 10px to 20px, and the news tab group is a full pill.

## Components

**Primary pill button** (`button-primary`, `button-secondary`): #00857d fill, white 18px weight 600 text, 11px 16px padding, 52px high, 40px radius, shadow `rgba(123, 161, 170, 0.6) 0px 3px 15px 0px`. Labels are short Thai actions: "ยื่นข้อเสนอโครงการ", "ดูรายละเอียด", "ยื่นขอรับทุน", "ดูรายงาน".

**Link**: #24695c, 16px weight 400. **Search input** (`text-input`): white fill, #717171 14px text, 6px 12px 6px 60px padding (room for an icon), 54px high, 50px radius, 1px solid #e6edef. **Navigation capsule**: pale rounded surface (on mobile the nav strip measured #e6edef) with white-on-colour utility items above it. **Program card**: white, rounded, with an illustration, a title, a description and a pill button. **News tabs**: pill group with the active tab filled teal.

## Design System Architecture

No public design system or brand-guideline page was found; the home page summary states that no CI manual is linked. The de-facto system is Bootstrap-based CSS with project variables (`--secondary-color` #00857d and `--primary-color` #fff), a cookie-consent library's `--cc-*` variables, and Font Awesome icons. The brand layer is the teal pill button, the navy and blue-teal photographic bands, and IBM Plex Sans Thai.

## Do's and Don'ts

- Do use #00857d for actions with white 18px weight 600 text and a 40px radius.
- Do overlay hero copy in white on photography at 48px weight 700.
- Do use soft blue-gray shadows (0.6 alpha, 15px blur) under buttons.
- Do keep IBM Plex Sans Thai as the only family.
- Don't use Bootstrap blue #0d6efd as a brand colour.
- Don't copy the cookie-consent styling or the corner mourning ribbon.
- Don't use hard borders on cards; the measured border colour is the pale #e6edef.

## Responsive Behavior

A mobile pass was recorded. On mobile the first heading measured 36px / 59px weight 700 in #009db1 (the "Arda" wordmark), the hero paragraph stayed 22px / 31px weight 400, the primary button stayed at 18px weight 600 with 11px 16px padding, 52px high and 40px radius ("ยื่นขอรับทุน"), and the navigation measured a 70px-high strip in #0a6f67 text on #e6edef with a TH | EN switch at 16px weight 600. Breakpoints and column counts were not measured.

## Iteration Guide

1. Start with white or #f9f9f9, #194569 ink and IBM Plex Sans Thai.
2. Apply #00857d to all pills; use #2c3e61 for dark bands.
3. Use 40px radius for buttons, 10px to 20px for cards.
4. Measure new components before adding tokens.
5. Re-run `node web/scripts/verify-designs.mjs --slug=agricultural-research-development-agency` after changes.

## Measurement Notes

Further measured text colours: #f9f9f9 (1,435 characters, on dark bands), #114773 (199), #efefef (161), #242934 (143), #dadada (99), #444444 (88) and #767676 (36). Border colours also include #ffffff, #dddddd and #7d9aa9 at one occurrence each. Hover on the "EN" language link changes its colour from #ffffff to #f2f3f4. Values not listed here or in the frontmatter were not measured.
