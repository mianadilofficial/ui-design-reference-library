---
version: alpha
name: Ministry of Higher Education, Science, Research and Innovation (กระทรวงการอุดมศึกษา วิทยาศาสตร์ วิจัยและนวัตกรรม, อว.)
category: "Thai Brands"
description: "Thai MHESI portal (mhesi.go.th) set in Noto Sans Thai on white #ffffff with black ink, #6d3076 purple 4px-radius buttons with white 14px text, #cd4527 orange-red accents and a #fcb124 yellow-gold top band, with large news photography cards and a #080808 dark band."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#6d3076"
  on-primary: "#ffffff"
  black-band: "#080808"
  orange-red: "#cd4527"
  ink-nav: "#241e20"
  nav-link-text: "#6852ed"
  card-border: "#00000033"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 38.4px
  display-mobile:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\""
    fontSize: 24px
    fontWeight: 600
    lineHeight: 31.2px
  subheading:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 33.6px
  body:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  button:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 46px
    letterSpacing: 0.5px
  nav:
    fontFamily: "\"Noto Sans\""
    fontSize: 24px
    fontWeight: 400
    lineHeight: 38.4px
  link:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
rounded:
  xs: 4px
  sm: 6px
  md: 10px
  lg: 20px
  xl: 25px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 38px
    height: 44px
  link:
    textColor: "{colors.orange-red}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-nav}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    padding: 0px 20px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 15px
    borderColor: "{colors.card-border}"
---

## Overview

The MHESI home page (https://mhesi.go.th/, title "กระทรวงการอุดมศึกษา วิทยาศาสตร์ วิจัยและนวัตกรรม", language `th-th`) is a ministry portal whose root CSS holds only UIkit breakpoint variables. The measured capture shows a yellow-gold top strip with a search field, TH and EN switches and an accessibility link, a header with the ministry emblem and the Thai and English names, a row of department emblems, a large hero slider whose first slide carries the headline "THA..." in red with a minister portrait and the label "ทุนกระทรวง" with an "ดูทั้งหมด" purple button, a "บริการของ กระทรวง อว." services section with orange-yellow circular decorations, and a "ภาพข่าวและกิจกรรม" (news and activities) section of photo cards in a three-column grid with a category selector ("เลือกหมวดหมู่") and a purple "ดูข่าวรัฐมนตรี ทั้งหมด" button.

At capture time a royal-birthday announcement modal with an orange "ยอมรับ" (accept) button and a dark scrim, plus a floating screen-reader widget, were open over the page. They are overlays and are not documented as brand UI: the orange input-like element the extractor reported (#eb8f05, 20px radius) is that modal button and was dropped. A WebFetch of this site timed out twice (recorded in SOURCES.json), so structure is taken from the measured extraction and the capture. The extractor also removed a grayscale(0.6) site filter before capturing.

## Colors

The page is mostly white (8,763 weight). `primary` #6d3076 is a deep purple, the fill of the "ดูทั้งหมด" and "ดูข่าวรัฐมนตรี ทั้งหมด" buttons, with white `on-primary` text. `orange-red` #cd4527 is the second brand colour, strong in both background area (745 weight) and text (1,479 characters), and is the colour of the link style and the news category labels ("ข่าวรัฐมนตรี ยศชนัน") in the capture. A yellow-gold #fcb124 (315 weight) is the top strip colour. `black-band` #080808 (1,024 weight) is a dark section field, and #00000096 (251) is the modal scrim and is excluded. `ink` is #000000 (1,582 characters), `ink-nav` #241e20 (81) is the navigation text colour, and white (1,504 characters) is used on dark areas. `card-border` #00000033 outlines cards. A light gray #f8f8f8 fills the category selector button and #c4c4c4 and #efefef appear in single instances. `nav-link-text` #6852ed is the colour of the generated nav-link role.

## Typography

Noto Sans Thai is the page face (4,645 measured characters; Arial 1), with Noto Sans 400 and FontAwesome loaded. The site's font stack is "Noto Sans Thai", "Noto Sans", system-ui, -apple-system, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, Helvetica, Arial, sans-serif. Only weight 400 is loaded as a face; measured weights are 400 (4,388 characters), 700 (180), 600 (43) and 500 (35).

`display` is 32px / 38.4px weight 600 (the "ทุนกระทรวง" slide title), `display-mobile` is 24px / 31.2px weight 600, `subheading` is 24px / 33.6px weight 700 (the section title "บริการของ กระทรวง อว."), `body` is 12px / 18px weight 400, `button` is 14px / 46px weight 400 with 0.5px letter spacing, `link` is 16px / 25.6px weight 400 and `nav` is Noto Sans 24px / 38.4px weight 400. By character count the common sizes are 15px (1,348), 16px (1,205), 18px (572), 14px (427) and 12px (405).

## Layout

Measured at 1280px wide with a recorded height of 6,135px. Content uses a 1200px-wide container (the navigation and section title blocks measured 1200px; UIkit's large breakpoint is 1200px). Structure from the capture: top strip, header, emblem row, hero slider, services section, news grid (three cards per row), and further sections below. The navigation block measured 180px high. Paddings: 40px (37 occurrences), 6px (37), 10px (27), 30px (19), 1px (19), 20px, 15px, 8px, 12px and 4px (18 each).

## Elevation & Depth

Only one shadow was measured: `rgba(0, 0, 0, 0.15) 0px 8px 15px 0px` (1 occurrence). Cards are separated by `card-border` #00000033 outlines and white space, and depth comes from photography and the large coloured circular decorations in the services section.

## Shapes

Radii measured: 4px (16 occurrences; buttons), 50% (14; circular icons and avatars), 6px (3), 25px (2), 20px (1) and 10px (1). The scale in the frontmatter is 4px, 6px, 10px, 20px, 25px and a pill. News cards use the 10px step (the generated card token) with a 1px border.

## Components

**Primary button** (`button-primary`): #6d3076 fill, white 14px weight 400 text with 0.5px letter spacing and a 46px line height, 0px 38px padding, 44px high, 4px radius, with a 2px border.

**Link** (`link`): #cd4527 at 16px weight 400. **Navigation** (`nav`): #241e20 text; **nav link**: Noto Sans 24px weight 400 with 0px 20px padding. **News card** (`card`): white background, black text, 10px radius, 15px padding, 1px #00000033 border; inside are a photo, an orange-red category label in small bold text, a two-line headline, and a footer line with date and view count. **Category selector**: a #f8f8f8 button with a list icon and the label "เลือกหมวดหมู่", 4px radius, 1px solid #ededed in the mobile measurement.

## Design System Architecture

No public design system or brand-guideline page was found, and the home page could not be read through WebFetch (two timeouts). The extraction shows UIkit variables: the root variables are `--uk-breakpoint-s` 640px, `--uk-breakpoint-m` 960px, `--uk-breakpoint-l` 1200px, `--uk-breakpoint-xl` 1600px and `--uk-leader-fill-content`. There are no brand custom properties; the brand layer (purple, orange-red, yellow-gold, Noto Sans Thai) lives in component CSS.

## Do's and Don'ts

- Do use #6d3076 for primary buttons and #cd4527 for links and category labels.
- Do use Noto Sans Thai with weight 400 for body and larger sizes for titles.
- Do show news as photo cards in a three-column grid with a visible category label.
- Do keep buttons at 4px radius.
- Don't copy the announcement modal, its orange accept button or the screen-reader widget as brand UI.
- Don't use the scrim colour #00000096 as a surface.
- Don't assume other weights are loaded; the font list declares Noto Sans Thai 400 only.

## Responsive Behavior

A mobile pass was recorded. On mobile the first heading measured 24px / 31.2px weight 600 (32px on desktop), body copy 16px / 25.6px weight 400 in #000000 (26px high), the navigation block measured a "navmobiletoggle" element 70px high at 16px weight 400, and the detected button was the category selector "เลือกหมวดหมู่": #f8f8f8 fill, black 14px weight 500 text with 25px line height, 0px 16px padding, 44px high, 4px radius and a 1px solid #ededed border. Breakpoint behaviour beyond these values was not measured.

## Iteration Guide

1. Start from white, black ink and Noto Sans Thai at 16px weight 400.
2. Use #6d3076 for buttons and #cd4527 for links and category labels.
3. Keep corners at 4px for buttons and 10px for cards.
4. Measure new components before adding tokens; ignore modal and widget overlays.
5. Re-run `node web/scripts/verify-designs.mjs --slug=ministry-of-higher-education-science-research-and-innovation` after changes.

## Measurement Notes

Additional measured values: border colours #ffffff (2 occurrences), #000000 (1), #ededed (1), #f4f4f4 (1) and #00000033 (1); background areas #f8f8f8 (9 weight), #c4c4c4 (2) and #efefef (1). The spacing scale in the frontmatter runs 1px, 2px, 4px, 6px, 8px, 10px, 12px, 15px, 16px and 20px. Hover states were not recorded for this site (the hover list is empty). Values not listed here or in the frontmatter were not measured.
