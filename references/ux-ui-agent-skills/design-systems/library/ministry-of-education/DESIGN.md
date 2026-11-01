---
version: alpha
name: Ministry of Education (กระทรวงศึกษาธิการ)
category: "Thai Brands"
description: "Thai Ministry of Education portal (moe.go.th) set in the DB Heavent typeface at 18px/500 on a cream #faf3e1 canvas, with a #ffc300 yellow quick-link band, a dark green top utility bar, #2b7dff blue 3px-radius buttons and a 50px-radius pill search field."
colors:
  canvas: "#faf3e1"
  ink: "#000000"
  primary: "#2b7dff"
  on-primary: "#ffffff"
  ink-heading: "#222222"
  teal-navy: "#225779"
  yellow-footer: "#fec300"
  green-text: "#077430"
  hairline: "#eeeeee"
  yellow-band: "#ffc300"
  text-input-bg: "#ededed"
typography:
  display:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 20px
  display-mobile:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
  body:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 18px
  button:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 15px
    fontWeight: 500
    lineHeight: 15px
  nav:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 20px
    textTransform: uppercase
  input:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 19px
    fontWeight: 500
    lineHeight: 24.7px
rounded:
  xs: 3px
  sm: 5px
  md: 8px
  lg: 10px
  xl: 50px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 9px
  s9: 10px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 39px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    backgroundColor: "{colors.yellow-band}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 6px
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xl}"
    padding: 4px 30px 4px 20px
    height: 35px
    borderColor: "{colors.text-input-bg}"
  footer:
    textColor: "{colors.yellow-footer}"
---

## Overview

The Ministry of Education home page (final URL https://www.moe.go.th/, page title "กระทรวงศึกษาธิการ - MOE", language `th`) is a WordPress-built government portal. A page summary I opened lists four primary agencies, news and activities, operational reports, e-books, research repositories, an education-statistics portal and online learning material, plus a public hotline 1579 and a complaints channel.

The measured capture shows a dark green utility bar at the very top (text-size controls, TH and EN language switches, "ติดตามเรา:" social links), the masthead with the bilingual name "กระทรวงศึกษาธิการ / Ministry of Education", a horizontal nav whose active item "หน้าแรก" is filled yellow, a hero slideshow, a yellow band of five icon quick links (e-Book, งานวิจัย, สถิติการศึกษา, ความตกลงระหว่างประเทศ, ผลงานของกองทุนพัฒนาเทคโนโลยีเพื่อการศึกษา), and then long content sections on a cream paper-textured background. The capture also contains a popup announcement, a cookie banner (hidden by the extractor as `cky-consent-container`), a chat widget, a corner tribute ribbon and a dark memorial section; these are not brand UI and none of the tokens below come from them.

## Colors

`canvas` is a warm cream #faf3e1, the largest measured background area (5,120 weight), with white #ffffff (1,836) for cards. `ink` is pure #000000 (5,496 characters), with `ink-heading` #222222 for titles. The accent system is yellow and green: `yellow-band` #ffc300 fills the quick-link band and the active nav item, `yellow-footer` #fec300 is the footer text colour, `green-text` #077430 appears as text, and the top utility bar uses a very dark green #0b3e1f. `teal-navy` #225779 is used for coloured text (503 characters) and as a section background (106 weight). `primary` #2b7dff is the fill of the detected call to action ("วิดีโอทั้งหมด") with white `on-primary` text. `hairline` #eeeeee is the border colour and `text-input-bg` #ededed the search field fill.

The site's root CSS variables also define a framework palette (for example --color-primary #4a8eff, --color-danger #ff5062, --color-success #018e11, --color-warning #FFB236, --color-info #2CA8FF, and WordPress preset colours such as #9b51e0). These are theme and plugin defaults; only the values listed in the frontmatter are used as brand tokens.

## Typography

The page uses a single family, DB Heavent, loaded in weights 100, 600 and bold plus a regular face, with a Roboto 400 face and Font Awesome 5 Free for icons. DB Heavent accounts for 8,000 measured characters, effectively all of them. Thai text is set at larger pixel sizes than Latin-first sites because the face is compact: the dominant measured size is 20px (4,093 characters), then 18px (1,436), 22px (904) and 24px (592).

`body` is 18px / 18px weight 500. `display` (the "e-Book" quick-link title) is 24px / 20px weight 600. `button` is 15px / 15px weight 500, `nav` is 18px / 20px weight 600 with uppercase transform, and `input` is 19px / 24.7px weight 500. The footer heading measured 29px weight 600. Weight 500 is the default body weight (5,184 characters) and 600 is the emphasis weight (1,615). DB Heavent is loaded by the site itself, so no substitute is specified.

## Layout

The desktop measurement used a 1280px viewport. The structure is stacked full-width bands: utility bar, masthead and nav, hero slider with pagination dots, the yellow five-cell quick-link band (each cell an outline icon plus a label), then content sections alternating cream and photographic or dark backgrounds. The most frequent paddings are 8px (148 occurrences) and 25px (135), then 10px, 15px, 12px and 20px.

## Elevation & Depth

Shadows are small and soft. Measured values: `rgba(0, 0, 0, 0.3) 0px 0px 3px 0px` (7 occurrences), `rgba(2, 2, 2, 0.23) 1px 1px 3px 0px` (2), `rgba(103, 103, 103, 0.11) 0px 5px 8px 0px`, `rgba(73, 104, 126, 0.16) 0px 16px 24px 0px` and `rgba(0, 0, 0, 0.15) 0px 1.93465px 7.73859px 0px` (one each). Depth otherwise comes from background colour contrast between bands rather than elevation.

## Shapes

The measured radii are 50px (20 occurrences; the search field and round controls), 3px (8; the primary button), 8px (6), 0px 5px 0px 0px (4), 50% (4), 5px and 10px (one each). The scale in the frontmatter is 3px, 5px, 8px, 10px and 50px. The primary button uses the 3px step, giving it a nearly square outline against the pill-shaped search input.

## Components

**Primary button** (`button-primary`): #2b7dff fill, white 15px DB Heavent weight 500, 12px 24px padding, 39px high, 3px radius.

**Search input** (`text-input`): #ededed fill and 1px solid #ededed border, black 19px text, 4px 30px 4px 20px padding, 35px high, 50px radius.

**Nav link** (`nav-link`): #ffc300 yellow fill with black uppercase 18px weight 600 text and 6px padding for the active item. **Nav** and **link**: black text. **Footer**: text in #fec300 with a 29px heading.

**Quick-link cell**: outline icon in a green-teal stroke with a short Thai label on the yellow band. **Content cards**: white on cream with the soft shadows above.

## Design System Architecture

No public design-system or brand-guideline page was observed on the pages opened (the home page summary lists organisation, news, services and statistics sections only). The de-facto system is a WordPress theme: the root element carries `--wp--preset--*` variables (for example --wp--preset--font-size--large: 36px and --wp--preset--shadow--outlined), a `--color-*` semantic set (primary, secondary, success, info, warning, danger with -hover, -active and -rgb variants), `--swiper-theme-color` #007aff for the slider, and a `--wpdm-font` variable naming Rubik from a download-manager plugin. The visible brand layer (cream canvas, yellow band, green bar, DB Heavent) is applied on top of these defaults.

## Do's and Don'ts

- Do set text in DB Heavent at 18px weight 500 for body and 24px weight 600 for quick-link titles.
- Do use #ffc300 yellow for the active nav item and the quick-link band, on a cream #faf3e1 page.
- Do keep primary buttons at 3px radius and search fields as 50px pills.
- Don't use the WordPress or plugin default colours (#9b51e0, #007aff, #4a8eff) as brand colours.
- Don't reproduce popup, cookie banner, chat bubble, tribute ribbon or the dark memorial band as design language.
- Don't use heavy elevation; measured shadows are at most 0.3 alpha with a 3px blur.

## Responsive Behavior

A mobile pass was recorded. On mobile the first heading measured 20px / 20px weight 400 (`display-mobile`), body copy stayed 18px weight 500 (#000000), the primary button stayed 15px weight 500 with 12px 24px padding, 39px high and 3px radius, and the header measured 18px weight 600 text and 116px height, against 205px on desktop. Breakpoint widths, menu collapse behaviour and column counts were not measured.

## Iteration Guide

1. Start with the cream #faf3e1 canvas, black ink and DB Heavent 18px/500.
2. Use #ffc300 for navigation and quick-link emphasis, #2b7dff only for the primary button.
3. Keep corners at 3px for buttons and 50px for the search field.
4. Measure any new component on the live page before adding a token.
5. Re-run `node web/scripts/verify-designs.mjs --slug=ministry-of-education` after changes.

## Measurement Notes

Border colours measured on the page are #eeeeee (6 occurrences), #ededed (2), #fec81d (2), and single uses of #000000, #f38f1c, #ffffff, #ffc300 and #d5d8dc. Additional background areas that appear in the extraction are #f9f9f9 (502 weight), #38a3a5 (10), #1e88e5 (3) and #ffc300 (13). Text colours beyond ink are #ffffff (745 characters), #072342 (18), #bdeec4 (17), #fec81d (11) and #333333 (5). These are recorded so that later work can reuse measured values instead of inventing new ones; any colour not listed here or in the frontmatter has not been measured on this site.
