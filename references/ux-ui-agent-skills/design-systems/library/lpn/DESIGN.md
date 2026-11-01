---
version: alpha
name: LPN Development
category: "Thai Brands"
description: "LPN Development (L.P.N., lpn.co.th) condominium developer site: DB Helvethaica type with a 50px bold heading and 20px body, #737373 and #333333 grey ink on white and #f5f5f5 bands, a #58c1e9 sky-blue accent, 10px to 18px radii, soft 3px shadows on cards and bright campaign banners above Lumpini project photography."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f5f5"
  ink: "#737373"
  primary: "#58c1e9"
  surface-footer: "#fafafa"
  ink-secondary: "#6d6d6d"
  ink-dark-grey: "#414042"
  ink-5: "#333333"
  ink-light: "#979797"
  footer-text: "#000000"
typography:
  display:
    fontFamily: db_helvethaica_xbold
    fontSize: 50px
    fontWeight: 400
    lineHeight: 50px
  display-mobile:
    fontFamily: db_helvethaica_xbold
    fontSize: 30px
    fontWeight: 400
    lineHeight: 30px
  subheading:
    fontFamily: db_helvethaica_xmedium
    fontSize: 26px
    fontWeight: 400
    lineHeight: 27px
  body:
    fontFamily: db_helvethaica_xregular
    fontSize: 20px
    fontWeight: 400
    lineHeight: 21px
  nav:
    fontFamily: db_helvethaica_xregular
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 6px
  sm: 10px
  md: 18px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 10px
  s4: 11px
  s5: 12px
  s6: 15px
  s7: 20px
  s8: 22px
  s9: 30px
  s10: 40px
components:
  link:
    textColor: "{colors.ink-5}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-5}"
  nav-link:
    textColor: "{colors.ink-5}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-5}"
    typography: "{typography.body}"
    height: 28px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.footer-text}"
---
## Overview

L.P.N. Development's home page at https://www.lpn.co.th/ is titled "คอนโด L.P.N. คอนโดมิเนียม สังคมคุณภาพ | แอล.พี.เอ็น." (L.P.N. condominiums, quality society). It is a Thai-language marketplace for the developer's condominium, townhome, house and office projects, mostly sold under the Lumpini name. The capture shows a slim white header with the blue LPN tower logo at the left, five text navigation items (คอนโด, ทาวน์โฮม, บ้าน, ออฟฟิศ, โปรโมชั่น), a language selector, a search icon and a menu icon. A tall campaign hero follows, with a smiling portrait on the left and the "168 STYLISH SMART LIVING" lockup in gold on a taupe field on the right, ending with the words Technology + Security + Privacy and three icons.

Beneath the hero the page stacks horizontal sections, each with a centered bold Thai heading: "แอล.พี.เอ็น.แนะนำ" (LPN recommends) with hashtag tiles such as #คอนโดพร้อมอยู่ and #คอนโดในเมือง; "โปรโมชั่นพิเศษ" (special promotions) with two large campaign banners; "น่าลงทุน" (worth investing) with project cards; and "โครงการใหม่" (new projects). The page is 6010px tall at 1280px width. The tone is energetic and promotional: bright blue and yellow Beach Fest artwork, big percentages ("สูงสุด 50%") and a hotline 02-689-6888 sit beside restrained grey type.

## Colors

Measured background areas after re-extraction: #f5f5f5 (4918), #ffffff (4309), #fafafa (2255), #f4f4f4 (436), #0000004d (89), #0000ff (85), #ff9900 (10). Text colors by characters: #737373 (3551), #6d6d6d (1065), #414042 (998), #ffffff (709), #333333 (436), #979797 (167).

- canvas #ffffff; page-largest #f5f5f5 for the grey section bands; surface-footer #fafafa.
- ink #737373: the most-read text color, a mid grey used for project descriptions; ink-secondary #6d6d6d, ink-dark-grey #414042, ink-5 #333333 (headings and navigation) and ink-light #979797 for small labels.
- footer-text #000000.
- primary #58c1e9: a sky blue measured as the hover color of navigation links (before hover #333333) and present 26 times in the shipped CSS. The extractor's own primary was #0000ee, a browser default link color that is not a brand color and was discarded. The CSS also holds #19468d (10 uses), a navy seen on the cookie consent button in the first capture; it is not tokenized.

The first capture showed a cookie notice bar ("ยอมรับทั้งหมด") and a floating blue user button; these are consent and account controls, not brand components. The page also contains hidden login, register and forgot-password panels (main-right-box rightbox-login and similar) that the extractor skipped.

## Typography

The site loads DB Helvethaica in four cuts, db_helvethaica_xbold, xmedium, xregular and light, plus an LPN-icon-font. Sizes by characters: 20px (5498), 26px (1184), 18px (707), 22px (369), 14.6667px (124), 50px (59), 28px (49).

- display: db_helvethaica_xbold 50px, line-height 50px (section headings, H1 "แอล.พี.เอ็น.แนะนำ"); display-mobile: 30px with line-height 30px at the 390px mobile pass.
- subheading: db_helvethaica_xmedium 26px, line-height 27px.
- body: db_helvethaica_xregular 20px, line-height 21px.
- nav: db_helvethaica_xregular 16px.

Font weight stays 400 everywhere; boldness comes from selecting the xbold or xmedium font files. DB Helvethaica is a licensed Thai typeface in the Helvetica style; a Thai-capable neo-grotesque (Noto Sans Thai) is the substitute outside the site.

## Layout

The navigation row measured 100px tall with centered links. Content sections are centered under a bold heading and use horizontally scrolling rows: the hashtag tiles are five photo tiles with white bold labels over a darkened image; the promotion banners are two wide cards; project cards are four across with an image gallery, dot pager, a rounded blue "โครงการพร้อมอยู่" (ready to move in) badge and three bullet lines of selling points. Frequent paddings are 5px (726), 10px (188), 15px (40) and 220px (37). Alternating #f5f5f5 and white section bands separate the blocks.

## Elevation & Depth

Shadows measured: rgba(0, 0, 0, 0.3) 0px 0px 3px 0px (647 elements, the soft outline around cards and chips), rgba(0, 0, 0, 0.25) 0px 1px 5px 0px (3), rgba(0, 0, 0, 0.4) 0px 10px 22px 0px (1, a floating element) and rgb(0, 0, 0) 0px 0px 0px 0px on the search input (a zero shadow). Depth is therefore shallow: a faint all-around glow instead of offset drop shadows.

## Shapes

Radii measured: 50% (89 elements, round icon buttons and dots), 10px (37), 15px (7), 18px (2), 6px (1). The tokens are xs 6px, sm 10px, md 18px and pill 9999px. Cards and tiles use 10px; badges and chips are rounder.

## Components

- Category chips (คอนโดแนวรถไฟฟ้า, คอนโดชายทะเล, Sports lover): measured in the first extraction as #f5f5f5 fill, #333333 text in the 22px medium type, 15px radius, 3px 14px padding and 32px height. They are filters, not primary actions.
- nav and nav-link: white header, #333333 text at 16px; hover turns text and border to #58c1e9.
- text-input: white fill, #333333 text in the 20px body type.
- Project card: gallery with dot pager, logo overlay, status badge, title and three grey bullet lines.
- footer: #fafafa fill with #000000 text.

## Design System Architecture

No public design system or brand guideline link appeared on the home page, and the root variables are empty in the extraction (0 custom properties), so the system is plain stylesheet classes. The de-facto rules visible in the measurements are a grey ramp (#737373, #6d6d6d, #414042, #333333, #979797), a single light-blue accent, DB Helvethaica font files chosen by weight, and radii of 10px for cards.

## Do's and Don'ts

- Do keep long text in mid-grey and headings in #333333.
- Do use #f5f5f5 and white section alternation with centered 50px bold headings.
- Do show badges and tags as rounded blue shapes and use the sky blue #58c1e9 for hover.
- Do use hashtag photo tiles for curated collections.
- Don't use the browser default blue #0000ee for links; it is not a brand color.
- Don't present the cookie bar or the floating account button as brand UI.
- Don't add offset drop shadows; the measured shadow is a 3px glow.

## Responsive Behavior

At the 390px mobile pass the H1 measured 30px (display-mobile) after re-extraction, against 50px on desktop, and body text 18px in the first mobile pass. Mobile navigation and grid behavior were not measured.

## Iteration Guide

1. White and #f5f5f5 bands with #333333 headings and #737373 body copy.
2. Use sky blue #58c1e9 sparingly for hover and accents.
3. Set Thai in a Helvetica-style Thai face: 50px headings, 26px subheadings, 20px body.
4. Build project cards with a gallery, a status badge, a title and three grey bullets, with a 3px soft glow.
5. Pair each section with a centered heading and horizontally scrolling content.
6. Run `node web/scripts/verify-designs.mjs --slug=lpn` after edits.

## Content and Imagery

Imagery is rich and promotional. The hero uses a close portrait of a smiling young woman beside a gold "168" wordmark, and the page is full of Lumpini project renders with white logo overlays (LUMPINI CONDOTOWN, LUMPINI PARKBEACH, LUMPINI TOWNSHIP, LUMPINI PARK, PLACE 168, RESIDENCE 168). The promotions mix flat illustration (palm trees, a gift box, confetti) with photography. Copy is a mix of Thai marketing slogans and plain facts such as unit sizes (34 ตร.ม., 30 ตร.ม.) and prices in millions of baht. English appears in project names, hashtags such as "Sports lover" and a tagline "STYLISH SMART LIVING".

Each project card carries the same three-line bullet summary of selling points, and the status badge (โครงการพร้อมอยู่, ready to move in) is the only element that uses a filled rounded shape inside the cards. Section headings are centered, in the 50px bold face, and each is followed by a row that scrolls horizontally.
