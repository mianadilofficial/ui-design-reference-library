---
version: alpha
name: Channel 8 (thaich8.com)
category: "Thai Brands"
description: "Thai news and entertainment portal of Channel 8 (RS Public Company Limited): light #f2f3f5 and white pages, #333333 text, slate #525b6e section titles, a #0484cf blue menu bar, Prompt type at 13px to 19px, and white cards with 1px #e6e6e8 borders."
colors:
  canvas: "#f2f3f5"
  page-body: "#ffffff"
  page-largest: "#fafafa"
  ink: "#333333"
  ink-muted: "#666666"
  ink-dark: "#222222"
  primary: "#525b6e"
  nav-blue: "#0484cf"
  hover-gray: "#cccccc"
  hairline: "#e6e6e8"
  footer-bg: "#e6e7e9"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 19px
    fontWeight: 500
    lineHeight: 20.9px
    textTransform: uppercase
  heading:
    fontFamily: Prompt, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 19.8px
  subheading:
    fontFamily: Prompt, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  body:
    fontFamily: Tahoma, sans-serif
    fontSize: 13px
    fontWeight: 300
    lineHeight: 18px
  nav-menu:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
    textTransform: uppercase
  link:
    fontFamily: Prompt, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21.4286px
    textTransform: uppercase
  input:
    fontFamily: Tahoma, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 0px
rounded:
  xs: 3px
  sm: 20px
  pill: 9999px
spacing:
  s1: 3px
  s2: 10px
  s3: 11px
  s4: 15px
  s5: 20px
  s6: 25px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    padding: 11px 3px
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.page-body}"
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav-menu}"
  text-input:
    textColor: "{colors.page-body}"
    typography: "{typography.input}"
    padding: 0px 15px
    height: 30px
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink-dark}"
    padding: 15px 0px
---

## Overview

`https://www.thaich8.com/` (redirecting to `/index.php`, title "ใคร ๆ ก็ดูช่อง 8 - ช่อง 8 ทีวี ซีรี่ส์ ละคร รายการ ข่าว ดารา ย้อนหลัง", roughly "everyone watches Channel 8 - TV, series, dramas, programs, news, celebrities, catch-up") is the web portal of Channel 8, operated by RS Public Company Limited (the footer reads "บริษัท อาร์เอส จำกัด (มหาชน)" with an address at 27 Chetchot Bldg., Tower C, Prasert-Manukit Road, Senanikhom, Chatuchak, Bangkok 10900). It is a news-and-programs portal, not a streaming app: a light, dense, card-based page that is only 1,576px tall at 1280px width.

The structure in the capture, top to bottom: a white header 180px tall with the colorful "ช่อง 8" logo and its slogan lettering at left; a full-width bright-blue menu bar with white labels (หน้าหลัก "Home", ละคร "Dramas", ซีรีส์ "Series", รายการ "Programs", ข่าว "News", ผังรายการ "Schedule", วิดีโอย้อนหลัง "Catch-up videos", กิจกรรม "Activities", มีเดียโชน "Media zone"), a small red "live" badge with a TV icon, and a magnifier icon at the right; then two content sections on a light-gray page, each with a small play-button icon, a Thai section title and a row of category tabs. "ข่าวเด่น" (Top news) shows one large feature card at left and four smaller cards at right; "รายการ" (Programs) shows one large program card and six small cards, with tabs "วาไรตี้", "มวยช่อง8" and "ทั้งหมด". Below are a gray contact strip (company name and two phone numbers) and a dark footer with a centered link row, copyright, legal links and four round social icons.

Imagery is news photography and program key art with Thai headline text printed in the artwork on a dark gradient, with a small category label (for example "การเมือง" politics) over the picture. Microcopy is journalistic Thai headlines. A cookie notice (`alert-cookie`) was hidden before measurement and is not brand UI.

## Colors

A cool, neutral, newsroom palette with one saturated bar.

- **Canvas `#f2f3f5`** is the gray page background behind the card sections; **page-body `#ffffff`** is the body and card background; **page-largest `#fafafa`** is the largest background area (1,008 units) and the header fill; `#f9fafa` also appears (230 units).
- **Ink `#333333`** is the most-read text color (952 characters): headlines and card titles. **`#666666`** (392) is the descriptive text color; **`#222222`** (275) colors footer links and the dark footer (205 units of background).
- **Primary `#525b6e`** (147 characters) is the slate used for section titles ("ข่าวเด่น", "รายการ") and the category tab links; on hover the tab text and border change to **`#cccccc`**.
- **Nav blue `#0484cf`** is the menu bar fill (78 units), with white labels (67 characters of white text).
- **Hairline `#e6e6e8`** is the card and tab-underline border color (23 border uses); **footer-bg `#e6e7e9`** fills the contact strip.
- The stylesheet corpus also contains `#f44336` (120 occurrences), `#337ab7` (52) and other values from Material and Bootstrap style sheets; `#337ab7` is a Bootstrap default and is not a brand color, and the red `#f44336` was not tied to a rendered element in the measurement.

The colored stripes above the menu items and the logo's rainbow 8 in the capture are artwork and thin decoration whose exact colors were not isolated by the measurement.

## Typography

Two families. **Prompt** is the Thai-and-Latin interface and headline face (the extractor recorded one loaded face, Prompt 400, plus FontAwesome); **Tahoma** is the fallback in the body-paragraph stack (`Tahoma, sans-serif`). Prompt covers 1,041 weighted characters, the generic `sans-serif` 565 and Tahoma 227. Weights measured are 400 (1,342 characters), 300 (316), 500 (162) and 700 (13).

- **Display (the extractor's h1)**: Prompt 19px / 20.9px, weight 500, uppercase, `#525b6e`: this is a section title ("ข่าวเด่น"), not a page hero. There is no large hero headline on this page.
- **Heading**: Prompt 18px / 19.8px, weight 500, `#333333`, for the lead card headline (533px wide).
- **Subheading**: Prompt 14px / 19.6px, 400, for small-card titles (241px wide).
- **Body**: Tahoma 13px / 18px, weight 300, `#666666`, for card summaries (533px wide, 36px tall).
- **Menu**: Prompt 16px / 20px, weight 500, uppercase transform on the menu bar (white).
- **Link (tabs)**: Prompt 15px / 21.4286px, 400, uppercase transform (no effect on Thai script), `#525b6e`.
- **Footer**: Prompt 12px / 17.1429px, `#222222`.
- Size usage by characters: 13px (792), 14px (382), 12px (364), 15px (133), 18px (81), 16px (67), 19px (14). No letter-spacing was measured on these roles.

The extractor's nav-link role caught the 395×119px logo anchor (26px / 700 / 2.5px tracking), which is not menu typography, so it is not used as a token here.

Font substitute if Prompt is unavailable: another Thai-capable humanist sans with 400, 500 and 700 cuts; the substitution is a suggestion, not a measurement.

## Layout

The page is 1280px wide. The header is 180px tall (white `#fafafa`). The two section blocks are boxed columns: the lead card is 533px wide in the first section's left column, small cards are 241px wide in a 2-by-2 grid at right in the capture, and the programs section shows a 1-plus-6 arrangement. Section headers are a single row: icon and title at left, a row of tab links on the right, with a 1px hairline under the row and a short colored underline under the active title and tab.

Measured paddings: 10px (36 uses), 3px (32), 15px (30), 20px (18), 11px (16), 25px (3). The tab links are 45px tall with `11px 3px` padding. The contact strip is 81px tall with `15px 0px` padding; the dark footer below it holds the link row and social icons. There is no measured gap value (the gap table is empty).

## Elevation & Depth

No box-shadow was measured (the shadow table is empty). Cards are separated by a 1px `#e6e6e8` border on white against the gray `#f2f3f5` page. Depth in imagery comes from a dark gradient at the bottom of each photo carrying the headline text. The header and menu bar are flat bands.

## Shapes

Mostly square. Measured radii: `50%` (4 uses, the four circular social icons in the dark footer), `20px` (1) and `3px` (1). Cards and photos have square corners in the capture; tabs are text links with an underline, not pills. The circular items are the social buttons; the single 20px and 3px radii were not tied to specific elements in the measurement.

## Components

- **Menu bar**: full-width `#0484cf` band with white Prompt 16px / 500 labels; the "หน้าหลัก" (Home) item has a house glyph; thin multicolored rules sit above the items in the capture.
- **Header utilities**: a red "live" badge with a TV icon, and a magnifier icon, both at the far right of the menu bar. A text input element measured 30×30px with `0px 15px` padding and white text.
- **Section title**: a small play-style gradient icon, Prompt 19px / 500 uppercase in `#525b6e`, with a short colored underline.
- **Category tab link**: Prompt 15px / 400, `#525b6e`, 67×45px for "ข่าวไฮไลท์"; hover changes text and border color to `#cccccc`.
- **Feature card**: white, 1px `#e6e6e8` border, image with a dark bottom gradient and printed headline, a colored category label, then an 18px headline and a 13px summary.
- **Small card**: image, then a 14px title, in a white bordered box.
- **Contact strip**: `#e6e7e9`, 81px, company name in Thai and English and two phone numbers.
- **Footer**: `#222222` with a centered row of menu links in gray, copyright "© COPYRIGHT 2017 THAICH8.COM, ALL RIGHT RESERVED.", two legal links and four circular social icons with outline borders.

## Design System Architecture

No public design-system or brand-guideline page was found on the pages opened (the home page at `https://www.thaich8.com/index.php` and its footer). The `:root` carries no custom properties (the recorded variable list is empty). The de-facto system is a conventional CMS-era stylesheet: font-face names in the shipped CSS are `Prompt`, `Lato`, `Open Sans`, `Roboto`, `Material Icons`, `Material-Design-Icons`, `Glyphicons Halflings` and `FontAwesome`, and the stylesheet corpus includes Bootstrap's `#337ab7`, Material-style `#f44336` and many gray steps (`#dddddd`, `#999999`, `#777777`, `#cccccc`). The page visibly uses only Prompt and Tahoma. Source of measurement: https://www.thaich8.com/index.php.

## Do's and Don'ts

Do:
- Use a light gray canvas with white bordered cards and Prompt type at 13px to 19px.
- Keep one saturated element, the `#0484cf` menu bar with white labels, and let photography carry the color.
- Use slate `#525b6e` for section titles and category tabs, and `#cccccc` for their hover state.
- Print headline text on a dark gradient over news photos with a small colored category label.

Don't:
- Don't add shadows or rounded card corners; the measured page has no shadow and square cards.
- Don't use Bootstrap's `#337ab7` as a brand color.
- Don't treat the cookie notice as brand UI.
- Don't use the logo anchor's 26px / 2.5px styling as type for the interface.

## Responsive Behavior

Measured at a 390px viewport (mobile pass): the section-title element stays 19px / 20.9px (90×38px), the lead headline stays 18px / 19.8px but its box narrows from 533×20px to 338×40px, and the summary stays 13px / 18px with its box going from 533×36px to 338×54px. The mobile font-size table by characters is 13px (792), 14px (306), 12px (253), 15px (133), 18px (81), 16px (17) and 19px (14); on desktop the same sizes measured 792, 382, 364, 133, 81, 67 and 14. The menu bar, card grid and footer layout at mobile width were not recorded, so they are not measured. Tablet widths and dark mode were not measured.

## Iteration Guide

1. Start with `canvas #f2f3f5`, white cards with a 1px `#e6e6e8` border, and `ink #333333`.
2. Add the single blue menu bar `#0484cf` with white Prompt 16px / 500 labels.
3. Use slate `#525b6e` for section titles and tabs; hover to `#cccccc`.
4. Set card headlines at 18px (lead) and 14px (small), summaries at 13px in `#666666`.
5. Use a gray `#e6e7e9` contact strip and a `#222222` footer with round outlined social icons.
6. Re-measure the menu bar and card grid on a mobile viewport before specifying mobile layout.
