---
version: alpha
name: National Vaccine Institute (สถาบันวัคซีนแห่งชาติ, สวช.)
category: "Thai Brands"
description: "NVI portal (nvi.go.th) set in Kanit on white with #1e73be blue navigation, #3723bb purple outlined tile buttons (30px weight 500, 10px radius, 1px border), small #dd3333 red news-tag buttons, a #1e3050 navy footer and #f7f8f9 page body."
colors:
  canvas: "#ffffff"
  page-body: "#f7f8f9"
  ink: "#000000"
  primary: "#dd3333"
  on-primary: "#ffffff"
  surface-gray: "#dddddd"
  navy-footer: "#1e3050"
  ink-gray: "#7a7a7a"
  blue-accent: "#1e73be"
  purple-action: "#3723bb"
  ink-light: "#f0f0f0"
typography:
  display:
    fontFamily: Kanit, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 60px
  display-mobile:
    fontFamily: Kanit, sans-serif
    fontSize: 30px
    fontWeight: 500
    lineHeight: 30px
  heading:
    fontFamily: Kanit, sans-serif
    fontSize: 50px
    fontWeight: 600
    lineHeight: 50px
  subheading:
    fontFamily: Kanit, sans-serif
    fontSize: 29px
    fontWeight: 700
    lineHeight: 34.8px
  body:
    fontFamily: Kanit, sans-serif
    fontSize: 17px
    fontWeight: 400
    lineHeight: 25.5px
  button:
    fontFamily: Kanit, sans-serif
    fontSize: 13px
    fontWeight: 400
  button-outlined:
    fontFamily: Kanit, sans-serif
    fontSize: 30px
    fontWeight: 500
    lineHeight: 30px
rounded:
  xs: 4px
  sm: 10px
  md: 20px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 20px
  s7: 24px
  s8: 40px
  s9: 80px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 5px 15px
    height: 29px
  link:
    textColor: "{colors.blue-accent}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.blue-accent}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.blue-accent}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  button-outlined:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.purple-action}"
    typography: "{typography.button-outlined}"
    rounded: "{rounded.sm}"
    padding: 12px 24px
    height: 56px
    borderColor: "{colors.purple-action}"
---

## Overview

The National Vaccine Institute home page (https://nvi.go.th/, title "หน้าแรก - National Vaccine Institute - สถาบันวัคซีนแห่งชาติ", language `th`) is a WordPress-built public-health portal. A page summary I opened lists a main menu of six entries (หน้าแรก, รู้จักเรา, บริการ, ข้อมูลเผยแพร่, ร่วมงานกับเรา, ติดต่อเรา/ร้องเรียน), a services area covering vaccine knowledge, training, research funding and the VIMS vaccine information management system, an information-disclosure area with annual reports and news categories, and a footer with the Nonthaburi address, telephone, policy links (website policy, PDPA, sitemap) and social links. The summary states that no brand guideline or CI manual link is provided and that the logo is available in the site header.

The measured capture shows a white header with the bilingual logo "สถาบันวัคซีนแห่งชาติ / National Vaccine Institute" and a blue dropdown nav (หน้าแรก, รู้จักเรา, บริการ, ข้อมูลเผยแพร่, ร่วมงานกับเรา, ติดต่อเรา/ร้องเรียน, a search icon, a language flag), an accessibility toolbar at the left edge (contrast and text size), a black-and-white tribute banner image, an event banner for the 12th National Vaccine Conference, six illustrated tiles with outlined purple labels (ความเคลื่อนไหวนโยบายด้านวัคซีน, บทสัมภาษณ์ผู้บริหาร, แถลงการณ์สถาบัน, ทุนวิจัย, ระบบข้อมูลและบริหารจัดการวัคซีน (VIMS), ข่าวประชาสัมพันธ์), an embedded YouTube video beside an "รู้จัก สวช." introduction, and then news and network sections. The extractor removed a grayscale(0.5) site filter for capture. The tribute banner, messenger chat bubble and accessibility toolbar are page overlays or content and not brand UI.

## Colors

The page is white with light gray structure and two blues plus a purple. `canvas` is white (6,813 weight), `surface-gray` #dddddd (2,350 weight) is a gray field, `page-body` #f7f8f9 is the pale page body in the root CSS (`--base-2`), and `navy-footer` #1e3050 (424 weight) is a deep navy. `blue-accent` #1e73be (the root `--accent` variable and 411 characters of text) colours the navigation and links; hover on a nav item changes its colour from #222222 to #1e73be. `purple-action` #3723bb (221 characters, plus 12 border occurrences) is the colour of the large outlined tile buttons. A deep blue #0a3380 (21 characters) colours the "ข่าวสารประชาสัมพันธ์" section heading, and #000044 appears as a darker text and border colour.

`primary` #dd3333 (122 weight) fills the small news-category tags "ข่าวประชาสัมพันธ์" and "ข่าวสารเครือข่าย" with white text. Text: `ink` #000000 (1,427 characters), `ink-gray` #7a7a7a (440), `ink-light` #f0f0f0 (85; the root `--base`), #222222 (the root `--contrast`) and #9e9e9e. The root CSS also holds WordPress presets (--wp--preset--color--vivid-purple #9b51e0 and pale-pink #f78da7); those are platform defaults and not used here.

## Typography

Kanit is the only family (5,829 characters), loaded in 400, 500, 600 and 700 (and 700 italic), with Font Awesome 5 and 7 and the ElementsKit and a11y icon fonts. `display` is the nav item style, 16px / 60px weight 400 (the 60px line height sets the nav bar rhythm). `heading` is 50px / 50px weight 600 (the news section title), `display-mobile` 30px / 30px weight 500, `subheading` 29px / 34.8px weight 700 ("รู้จัก สวช."), `body` 17px / 25.5px weight 400 and `button` 13px weight 400. The tile button label is 30px / 30px weight 500. Sizes by character count: 24px (1,948), 14px (1,427), 13px (900), 17px (760), 18px (389) and 30px (221). Weight 400 covers 5,140 characters, 600 covers 410, 500 covers 221 and 700 covers 58.

## Layout

Measured at 1280px wide with a recorded page height of 4,795px. The header is 218px high with a 60px nav line. Below it a pale full-width page body holds a centered white content panel at a measured width of 1100px (the heading and link blocks measured 1100px wide). Sections: banner slot, event banner, a three-by-two grid of illustrated tiles, a video plus text row (video at the left, the introduction at the right, 346px wide), and news blocks. Paddings: 10px (143 occurrences), 15px (103), 20px (52), 5px (34), 12px (20), 24px (12) and 40px (11).

## Elevation & Depth

Measured shadows are `rgba(0, 0, 0, 0.5) 0px 0px 10px 0px` (12 occurrences), `rgba(0, 0, 0, 0.5) 10px 0px 10px 0px` (2) and `rgba(0, 0, 0, 0.5) 12px 0px 10px 0px` (1). The outlined tile buttons carry a soft dark shadow; apart from these the page is flat, with hierarchy from the white panel on the pale body and the navy footer.

## Shapes

Radii measured: 10px (12 occurrences, the tile buttons), 100% (3), 0px 0px 4px (2), 4px (2), and single uses of 0px 4px 0px 0px, 20px 0px 0px 20px, 0px 20px 20px 0px and 20px. The red news tags are square (0px radius); the purple tile buttons are 10px.

## Components

**News tag** (`button-primary`): #dd3333 fill, white Kanit 13px weight 400, 5px 15px padding, 29px high, 0px radius.

**Tile button** (`button-outlined`): white fill, #3723bb text at 30px / 30px weight 500, 12px 24px padding, 56px high, 10px radius, 1px solid #3723bb border, with the dark soft shadow.

**Nav and nav link**: white background, #1e73be text at body size. **Link**: #1e73be, 17px. **Section heading**: 50px weight 600 in #0a3380. **Footer**: #1e3050 navy with light text.

## Design System Architecture

No public design system or brand guideline was found; the opened home page summary says none is linked. The de-facto system is a WordPress theme using global CSS variables: `--base` #f0f0f0, `--base-2` #f7f8f9, `--contrast` #222222 and `--accent` #1e73be, WordPress `--wp--preset--*` variables (for example --wp--preset--font-size--large 36px), `--ms-slide-width` for a slider, ElementsKit icons and Font Awesome. The brand layer is the Kanit typeface, the blue accent and the purple outlined tiles.

## Do's and Don'ts

- Do use Kanit for all text and #1e73be for navigation and links.
- Do present main entry points as illustrated tiles with an outlined #3723bb label (10px radius).
- Do keep news tags as small square #dd3333 chips with white text.
- Do keep a pale #f7f8f9 body behind a white content panel.
- Don't use WordPress preset colours (#9b51e0, #f78da7) as brand colours.
- Don't reuse the tribute banner, chat bubble or accessibility toolbar as brand elements.
- Don't use rounded news tags; the measured radius is 0px.

## Responsive Behavior

A mobile pass was recorded. On mobile the first heading measured 30px / 30px weight 500 in #3723bb ("ความเคลื่อนไหวนโยบายด้านวัคซีน"), the section heading was 30px / 30px weight 600 (50px on desktop), body copy measured 17px / 25.5px weight 400 in #7a7a7a, the news tag measured 13px with 5px 15px padding and 29px height, and the header measured a "Menu" label at 15px weight 400 on white, 100px high (218px on desktop). Breakpoints and tile column counts were not measured.

## Iteration Guide

1. Start with white on a #f7f8f9 body, black text and Kanit 17px.
2. Use #1e73be for navigation and #3723bb for outlined tile buttons.
3. Keep #dd3333 for small category tags only.
4. Measure new components before adding tokens, and ignore the tribute banner and chat overlays.
5. Re-run `node web/scripts/verify-designs.mjs --slug=national-vaccine-institute` after changes.

## Measurement Notes

Additional measured values: background areas #00000080 (3 weight) and #e2e2e2 (3); text colours #181818 (36 characters), #faba30 (9) and #000044 (16); border colours #3723bb (12), #f5f5f5 (2), #000044 (2) and #656565 (1). Values not listed here or in the frontmatter were not measured on this site.
