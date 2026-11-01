---
version: alpha
name: DBS
category: "Banking & Insurance"
description: "DBS Group home page: a white #ffffff canvas with #2e2e2e text in Open Sans (700-weight 36px and 32px headlines, 16px to 24px copy), DBS red #ff3333 buttons with a 4px radius, an 80px red Login block, #f3f3f3 photo tiles and amber #ffaa22 'View all' tiles."
colors:
  canvas: "#ffffff"
  ink: "#2e2e2e"
  primary: "#ff3333"
  on-primary: "#ffffff"
  primary-hover: "#ee1818"
  surface-dark: "#484848"
  surface-card: "#f3f3f3"
  accent-amber: "#ffaa22"
  ink-muted: "#909090"
  ink-subtle: "#c0c0c0"
  ink-black: "#000000"
  hairline: "#dcdcdc"
typography:
  display:
    fontFamily: OpenSans, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 46.8px
  display-mobile:
    fontFamily: OpenSans, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 31.2px
  heading:
    fontFamily: OpenSans, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 41.6px
  card-title:
    fontFamily: OpenSans, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 31.2px
  body:
    fontFamily: OpenSans, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
  body-mobile:
    fontFamily: OpenSans, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 23px
  button:
    fontFamily: OpenSans, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22.8571px
  nav:
    fontFamily: OpenSans, sans-serif
    fontSize: 14px
    fontWeight: 500
  nav-mobile:
    fontFamily: OpenSans, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 30.6px
  input:
    fontFamily: OpenSans, sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  none: 0px
  xs: 4px
  sm: 11.25px
  md: 100px
  circle: 50%
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 10px
  s6: 14px
  s7: 15px
  s8: 16px
  s9: 21px
  s10: 22px
  s11: 24px
  s12: 30px
  s13: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 22px
    height: 80px
    borderColor: "{colors.primary-hover}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    height: 40px
  nav:
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 2px 1px 0px
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 0px 16px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 10px 32px 10px 8px
    height: 40px
    borderColor: "{colors.ink-subtle}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.on-primary}"
    typography: "{typography.card-title}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 0px 2px 0px
---

## Overview

The measured page is the DBS Group home page (https://www.dbs.com/default.page, title "DBS: Trusted as the World's Best Bank | DBS Bank"), not a consumer banking product page: the utility strip reads "You are in DBS Group" and "Our Offices", and the main navigation is About, Careers, Investors, Media & Events, Sustainability, Foundation and Research, followed by a red "Login" block. The hero is a carousel of full-height photographic slides with white headlines (the measured h1 is "Q2 2026 net profit reaches SGD3.08b"), a dark slide on the right in the capture, and red "Learn More" buttons. A large grey quote card follows ("AI-enabled bank with a heart", with the line "This vision is our compass" and a red "LEARN MORE" arrow link) beside a photo tile "About us", then three more photo tiles ("DBS Asia Future Forward Conference", "Responsible business practices", "Creating social impact").

Below, the page is an editorial news hub: "News" ("The latest on DBS.") as a bordered list of dated headlines with a featured card and an amber "View all News" tile, then "Features" ("Insights, analyses and stories from DBS.") with cards tagged "Humans of DBS" and an amber "View All Features" tile, then "Our Awards" and "Our Global Offices" with a market selector. The tone is corporate, reassuring and warm: headlines are sentence case, stories are written in first person, and photographs show customers and employees.

The system is very regular: one typeface (Open Sans) carries all 4495 measured characters, one red is the only action color, one 4px radius rounds almost everything, and light-grey tiles, thin borders and soft shadows organize a dense page.

## Colors

- **Canvas `#ffffff`** is the page background and the input background.
- **Ink `#2e2e2e`** is the main text color (2182 characters), used for the "News" heading, news items and body copy on light backgrounds.
- **Primary `#ff3333`** is the DBS red: the fill of the "Login" block and every "Learn More" button, and the color of the "LEARN MORE" text link (139 characters measured in this color). **on-primary `#ffffff`** is the label color. On hover the fill becomes **`#ee1818`**, which also is the 1px border color of the Login block.
- **surface-card `#f3f3f3`** is the light-grey fill of the tiles and the quote card; **surface-dark `#484848`** is the largest measured background area, and `#2e2e2e` also measures as a background.
- **accent-amber `#ffaa22`** fills the "View all News" and "View All Features" tiles (measured background area weight 148).
- **ink-muted `#909090`** (506 characters) is used for secondary text such as dates and the section subtitles ("The latest on DBS."); **ink-subtle `#c0c0c0`** is the input border and also colors some text; **hairline `#dcdcdc`** is the common 1px border on cards and the news list.
- White text on photographs and on the dark hero slide measures 1451 characters.

The shipped stylesheet also contains Bootstrap's default palette (for example `#007bff`, `#6c757d`, `#dc3545`, `#28a745`, `#ffc107`); these are framework defaults that were not seen on visible elements and are not part of the brand. No dark theme was measured.

## Typography

One family: **Open Sans**, loaded as `OpenSans` in weights 300, 400, 500, 600 and 700 (plus 300 italic). The stylesheet also declares Noto Sans SC and Noto Sans TC for Chinese text and an icon font called `dbsicons`.

| Role | Size / line height | Weight |
|---|---|---|
| display (hero h1) | 36px / 46.8px | 700 |
| display-mobile | 24px / 31.2px | 700 |
| heading (h2 "News") | 32px / 41.6px | 700 |
| card-title (tile titles) | 24px / 31.2px | 700 |
| body (hero paragraph) | 24px / 36px | 400 |
| body-mobile | 16px / 23px | 400 |
| button | 16px / 22.8571px | 500 |
| nav | 14px | 500 |
| nav-mobile | 18px / 30.6px | 500 |
| input | 16px | 400 |

Letter-spacing is `normal` on every measured role. Headline line height is 1.3 times the size (46.8px over 36px, 41.6px over 32px, 31.2px over 24px) and the hero paragraph has 1.5. By characters, the most-read sizes are 16px (1600), 14px (1173), 24px (653) and 18px (638), then 36px, 12px, 32px and 48px. Weights used are 300, 400, 500, 600 and 700, with regular text carrying most characters (2353) and bold headings 812.

## Layout

The measured page is 4827px tall at the 1280px viewport. The header is 120px tall and has two rows: a dark utility strip ("You are in DBS Group", "Our Offices") and a white main row with the DBS logo, seven text links and the Login block (116px wide, 80px high). The header has a very soft shadow, `rgba(0, 0, 0, 0.1) 0px 2px 1px 0px`. The stylesheet declares `--scroll-padding: 120px`, which equals the header height.

Content sits in a centered column in the capture, with the hero carousel running full width above it. The tile grid is a three-column layout of 304px by 280px tiles with a wider quote card spanning two columns and a tall photo tile at the right; the news section pairs a wide bordered list with a narrower featured card and an amber tile. Measured paddings are 8px (most frequent), 24px, 16px, 30px, 40px, 28px, 15px and 120px; other measured steps are 2px, 4px, 5px, 10px, 14px, 21px and 22px.

## Elevation & Depth

Depth is gentle. Cards and tiles use `rgba(0, 0, 0, 0.2) 0px 0px 2px 0px` (10 elements), a thin halo rather than a drop shadow, and the header uses `rgba(0, 0, 0, 0.1) 0px 2px 1px 0px`. Most separation is by 1px `#dcdcdc` borders (6 uses), `#ececec` borders (3 uses) and fills: `#f3f3f3` tiles on white, amber tiles, and white text on photographs. The hero slides rely on photography and dark overlays for depth; the translucent white mobile header measures `#fffffff2`.

## Shapes

The measured radii are 4px (20 elements; the tiles, cards and "Learn More" buttons), 50% (8; circular elements such as the carousel dots in the capture), 100px (3), a top-only `4px 4px 0px 0px` (3), 11.25px (1) and a left-only `4px 0px 0px 4px` (1). The Login block, the text input, the nav and the footer-level rectangles are sharp at 0px. The tokens are `none`, `xs` (4px), `sm` (11.25px), `md` (100px) and `circle` (50%). The result is a mostly rectilinear system with one small radius for tiles and buttons.

## Components

- **Login block (`button-primary`)**: `#ff3333` fill, white 16px weight 500 label, padding 0px 22px, 116px by 80px, 0px radius, 1px `#ee1818` border, hover fill `#ee1818`. It sits at the right end of the main header row, with a lock icon.
- **Learn More button (`button-secondary`)**: `#ff3333` fill, white 16px 500 label, 40px high, 144px wide, 4px radius, hover fill `#ee1818`. It appears on each hero slide.
- **Text input (`text-input`)**: white, 1px solid `#c0c0c0`, 40px high, padding 10px 32px 10px 8px, 16px `#2e2e2e` text, 0px radius.
- **Photo tile (`card`)**: `#f3f3f3` fill, 4px radius, 304px by 280px, soft 2px halo, a bold 24px white title over a photograph (for example "About us"); some tiles carry an arrow icon at the upper right.
- **News list**: a white bordered card with 1px hairlines, `#2e2e2e` headlines and grey dates.
- **Feature cards**: a photo, a "Humans of DBS" tag and a headline with date and read time ("10 Min Read").
- **View-all tiles**: amber `#ffaa22` tiles with a white bold title ("View all News") and an arrow.
- **Navigation (`nav`, `nav-link`)**: 14px weight 500 links with 16px horizontal padding; the measured nav text color `#ffffff` is that of the utility strip.

## Design System Architecture

No public design system is published for this site; the pages opened for research were https://www.dbs.com/default.page and https://www.dbs.com/media/image-video-library.page (the "Image & Video Library"), and neither mentions brand colors, typefaces or guidelines. Two automated page fetches for further pages failed with a session-limit error (recorded in SOURCES.json).

The de-facto system is visible in the shipped CSS. Pages load `/group/_next/public/css/fonts.css`, `general.css` and legacy stylesheets under `/iwov-resources/flp/css/` (`flp-gsmc.css`, `flpweb-legacy.css`, `flp-details.css`), the first path contains `_next`, and the other three are legacy-named files. The `:root` declares only `--scroll-padding: 120px`. The stylesheet also contains Bootstrap-style gray and semantic colors that are not used visibly. The repeated values (4px radius, `#ff3333` buttons with `#ee1818` hover, `#f3f3f3` tiles, 24px type step) form the working token set recorded above.

## Do's and Don'ts

Do:
- Use DBS red `#ff3333` for the primary action, with white 500-weight 16px labels, and darken to `#ee1818` on hover.
- Keep Login as a sharp 80px-high red block and in-content buttons at 40px high with a 4px radius.
- Set headlines in Open Sans 700 at 36px and 32px with 1.3 line height.
- Use `#f3f3f3` tiles with a 4px radius and a soft 2px halo, and white bold titles over photographs.
- Use amber `#ffaa22` tiles for "view all" entries.
- Write in warm, sentence-case corporate copy with first-person stories.

Don't:
- Do not use Bootstrap's default blue or other framework colors from the stylesheet.
- Do not add heavy drop shadows; the measured shadows are 0.1 and 0.2 alpha.
- Do not use more than one red; `#ee1818` is only the hover and border state.
- Do not use a second typeface for Latin text.
- Do not round the Login block.

## Responsive Behavior

A fresh 390px mobile pass was recorded. Measured: the hero h1 becomes 24px with a 31.2px line height (from 36px); the "News" h2 stays 32px and gains padding 0px 8px; mobile body text measures 16px with a 23px line height and `#909090` color; the "Learn More" button measures 144px by 40px with a 4px radius; the mobile header measures 52px high (120px on desktop), has a `#fffffff2` background, 18px weight 500 text with a 30.6px line height and keeps the 0.1-alpha shadow. The most-read mobile sizes were 16px (1528 characters), 14px, 18px and 24px.

The mobile header text includes About, Careers, Investors, Media & Events and View Latest News. How the tiles, news list and carousel rearrange on a phone was not measured. Breakpoint widths were not recorded.

## Iteration Guide

1. Set `#ffffff` canvas, `#2e2e2e` text, and load Open Sans 300 to 700.
2. Build the type scale: 36px and 32px at 700 for headings, 24px at 700 for tile titles, 16px at 500 for buttons, 14px at 500 for navigation.
3. Build the buttons: Login at 80px high with 0px radius, content buttons at 40px high with a 4px radius, both `#ff3333` with `#ee1818` hover.
4. Make tiles `#f3f3f3` with 4px radius and a 2px halo; make "view all" tiles `#ffaa22`.
5. Add a two-row header at 120px with a dark utility strip and a 1px-soft shadow.
6. Check mobile with a 24px h1, a 16px body, and a 52px header, and treat other layout changes as unmeasured.
