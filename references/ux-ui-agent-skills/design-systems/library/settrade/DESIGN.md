---
version: alpha
name: Settrade (SETTRADE.COM)
category: "Thai Brands"
description: "SETTRADE.COM Thai home page: white and #f8f9fa canvas, blue #154e92 primary with navy #1d3352 footer, green #17af54 for gains and links, DB Helvethaica X for headings and Sarabun for navigation, dense market-data tables."
colors:
  canvas: "#ffffff"
  ink: "#292626"
  primary: "#154e92"
  on-primary: "#ffffff"
  surface-2: "#f8f9fa"
  surface-3: "#1d3352"
  ink-2: "#545557"
  ink-3: "#979ca5"
  accent-green: "#17af54"
  hairline: "#e3eaee"
  nav-link-text: "#0d4fce"
  text-input-text: "#212529"
typography:
  display:
    fontFamily: "\"DB Helvethaica X 75 Bd\", sans-serif"
    fontSize: 42px
    fontWeight: 500
    lineHeight: 46.62px
  display-mobile:
    fontFamily: "\"DB Helvethaica X 75 Bd\", sans-serif"
    fontSize: 22px
    fontWeight: 500
    lineHeight: 24.42px
  heading:
    fontFamily: "\"DB Helvethaica X 65 Med\", sans-serif"
    fontSize: 42px
    fontWeight: 500
    lineHeight: 46.62px
  subheading:
    fontFamily: "\"DB Helvethaica X 75 Bd\", sans-serif"
    fontSize: 36px
    fontWeight: 500
    lineHeight: 36px
  button:
    fontFamily: "\"DB Helvethaica X\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Sarabun, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  button-secondary:
    fontFamily: "\"DB Helvethaica X 65 Med\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 4.8px
  xl: 5px
  2xl: 6px
  3xl: 8px
  4xl: 28px
  pill: 9999px
spacing:
  s1: 2.25px
  s2: 3px
  s3: 4px
  s4: 5.6px
  s5: 6px
  s6: 6.72px
  s7: 7px
  s8: 8px
  s9: 12px
  s10: 12.8px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 7px 12px
    height: 40px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.surface-3}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 12px 14px
    height: 48px
    boxShadow: rgba(119, 130, 136, 0.2) 1px -4px 8px 0px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.button}"
    height: 27px
  card:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.canvas}"
---

## Overview

The measured page is https://www.settrade.com/th/home (title "หน้าหลัก - SETTRADE.COM"), the Thai home page of Settrade, the online securities-market portal. The URL in the queue (settrade.com/en/home) redirects to the site's own Thai 404 page, so the first extraction measured an error page; it was re-extracted from /th/home, which returns the real home page. The capture shows an advertisement banner at the top, a market ticker strip (SET100FF value, change, value traded in million baht, volume, status Open2, last-update time), a white header with the black "settrade" wordmark and a green S-mark, the menu หุ้น, อนุพันธ์, กองทุนรวม, บทวิเคราะห์, ข่าวสาร/บทความ, บริการ/เครื่องมือ with a search icon, an app-grid icon, a blue login button and a green lock button. A hero line "จุดประกายไอเดียที่ใช่ เพื่อการลงทุนในแบบของคุณ" in green and navy sits above a rounded "Get Quote" search field and an isometric green and blue illustration. Below are index tabs (SET, mai, TFEX, Global) with a table of indices, a SET value card with a green index panel and intraday line chart, a blue "Most Active Value" card with starred tickers, three ranking cards (ต่างชาติซื้อขาย NVDR, Big Lot, Short Sell), news and analyst-report lists with green tags, analyst recommendation bars (Buy, Hold, Sell) and gold-price tables. A black corner ribbon at the top right, a scrim lightbox and a cookie bar were present; none is documented as brand UI.

Measured facts about the capture: the page was loaded at a 1280px desktop viewport and its scroll height is 3963px; the document language is "th" and the document title is "หน้าหลัก - SETTRADE.COM". The extractor counted 2054 visible elements. Consent or overlay layers were hidden before measuring and are not documented as brand UI. 

## Colors

Every hex below is copied from the measurement of the live page; the frequency figures are character counts (text) or area weights (backgrounds) from the extractor.

- `canvas` `#ffffff`: text colour on 512 characters; background over area weight 1417; border colour on 1 elements.
- `ink` `#292626`: text colour on 3106 characters.
- `primary` `#154e92`: text colour on 173 characters; background over area weight 25; border colour on 2 elements.
- `on-primary` `#ffffff`: text colour on 512 characters; background over area weight 1417; border colour on 1 elements.
- `surface-2` `#f8f9fa`: text colour on 11 characters; background over area weight 659; border colour on 2 elements.
- `surface-3` `#1d3352`: text colour on 873 characters; background over area weight 577.
- `ink-2` `#545557`: text colour on 1268 characters.
- `ink-3` `#979ca5`: text colour on 1191 characters; border colour on 2 elements.
- `accent-green` `#17af54`: text colour on 279 characters; background over area weight 10.
- `hairline` `#e3eaee`: border colour on 10 elements.
- `nav-link-text` `#0d4fce`: text colour on 164 characters; background over area weight 2.
- `text-input-text` `#212529`: text colour on 19 characters.

The primary #154e92 is the fill of the "Most Active Value" card header and buttons (it is also the site-defined --bs-secondary). The green #17af54 (279 characters) colours gains, links and tags; the site's own root variable --bs-primary is #1ac21a and --bs-success is #00c359. The navy #1d3352 (area 577) fills the footer and hover state. Neutral text is #292626 (3106 characters), #545557 and #979ca5. Pale panels are #f8f9fa, #f2faf7 and #e7fbe7. The blue #0d4fce colours nav-link text on 164 characters.

Background colours by area, in order: #ffffff (1417); #f8f9fa (659); #1d3352 (577); #f2faf7 (576); #757575 (533); #e7fbe7 (273); #f2f3f4 (265); #dddedf (242). Text colours by characters, in order: #292626 (3106); #545557 (1268); #979ca5 (1191); #1d3352 (873); #ffffff (512); #17af54 (279); #154e92 (173); #0d4fce (164). Border colours: #e3eaee (10); #1ac21a (6); #154e92 (2); #f8f9fa (2); #dee4e8 (2); #979ca5 (2).

## Typography

Fonts by characters set: DB Helvethaica X (2900); DB Helvethaica X 65 Med (2729); Sarabun (1890); DB Helvethaica X 75 Bd (496). The loaded font files reported by the page are: DB Helvethaica X 400 normal, DB Helvethaica X 65 Med 400 normal, DB Helvethaica X 75 Bd 400 normal, Sarabun 700 normal, Sarabun 500 normal, Sarabun 400 normal. Display and heading sizes use the DB Helvethaica X family in its 75 Bd and 65 Med cuts (loaded files: DB Helvethaica X, X 65 Med, X 75 Bd), body numerals and navigation use Sarabun 400 and 500, and Font counts are DB Helvethaica X 2900, X 65 Med 2729, Sarabun 1890 and X 75 Bd 496 characters. The extractor recorded the heading weights as 500 even for the Bd cut, which is how the page declares them.

Font sizes by characters: 20px (3794); 12px (1834); 18px (1410); 24px (281); 14px (204); 16px (201); 19px (114); 32px (75). Weights by characters: 500 (4708); 400 (3100); 700 (207). Letter-spacing recorded per size: none other than normal.

The heading roles measured on the desktop page: h1 "จุดประกายไอเดียที่ใช่ เพื่อการลงทุนในแบบของคุณ" is "DB Helvethaica X 75 Bd", sans-serif 42px/500 with line-height 46.62px in #1ac21a; h2 "SET" is "DB Helvethaica X 65 Med", sans-serif 42px/500 with line-height 46.62px in #f8f9fa; h3 "บทวิเคราะห์" is "DB Helvethaica X 75 Bd", sans-serif 36px/500 with line-height 36px in #1d3352. No separate body-text role was detected by the extractor. 

## Layout

The page is 3963px high at 1280px width and is a three-band portal: a ticker strip, a hero with search, then a grid of cards in two columns (a wide left column and a narrow right column of cards) and rows of three equal ranking cards. Tables use thin #e3eaee hairlines and right-aligned figures. Each card ends with a green "ดูเพิ่มเติม" link with a round arrow. Spacing steps run 2.25px to 12.8px.

Spacing tokens kept from the measurement: s1 = 2.25px, s2 = 3px, s3 = 4px, s4 = 5.6px, s5 = 6px, s6 = 6.72px, s7 = 7px, s8 = 8px, s9 = 12px, s10 = 12.8px. Padding values by frequency on the page: 8px (104); 12px (103); 4px (81); 16px (77); 7px (25); 15px (21); 20px (13); 12.8px (12); 3px (11); 2.25px (11). Flex or grid gaps recorded: none recorded.

## Elevation & Depth

Box shadows measured, by frequency: rgba(0, 0, 0, 0) 0px 0px 0px 9999px inset (42); rgba(0, 0, 0, 0.15) 0px 8px 16px 0px (8); rgba(120, 120, 120, 0.25) 1px 1px 10px 0px (5); rgba(119, 130, 136, 0.2) 1px -4px 8px 0px (4); rgba(0, 0, 0, 0.09) 0px 1px 4px 0px inset (2). Cards are flat white or pale grey with hairline borders; the measured secondary button carries a soft 1px -4px 8px shadow at 20% grey. Floating widgets (chat or feedback buttons) are not documented.

- Hover on a button reading "SET50FF": boxShadow none -> rgba(0, 0, 0, 0) 0px 0px 0px 3.2px.
- Hover on a button reading "Most Active Value": backgroundColor rgb(21, 78, 146) -> rgb(29, 51, 82); borderColor rgb(21, 78, 146) -> rgb(29, 51, 82); boxShadow none -> rgba(0, 0, 0, 0) 0px 0px 0px 3.2px.
- Hover on a button reading "mai": color rgb(59, 122, 195) -> rgb(255, 255, 255); backgroundColor rgb(248, 249, 250) -> rgb(21, 78, 146); borderColor rgb(59, 122, 195) -> rgb(255, 255, 255).
- Hover on a button reading "TFEX": color rgb(59, 122, 195) -> rgb(255, 255, 255); backgroundColor rgb(248, 249, 250) -> rgb(21, 78, 146); borderColor rgb(59, 122, 195) -> rgb(255, 255, 255).

## Shapes

Border radii measured, by frequency: 4px (78); 2px (35); 4px 4px 0px 0px (8); 3px (8); 50px 0px 0px 50px (6); 0px 50px 50px 0px (5); 50% (4); 4.8px (4); 6px 6px 0px 0px (3); 5px (2). The rounded tokens in the frontmatter are xs = 2px, sm = 3px, md = 4px, lg = 4.8px, xl = 5px, 2xl = 6px, 3xl = 8px, 4xl = 28px, pill = 9999px. Radii run 2px to 8px for buttons, inputs and cards (4px on buttons), with 28px for the large rounded search field and pill values on tabs and tags.

## Components

Components declared in the frontmatter from measured roles: button-primary, button-primary-hover, button-secondary, nav, nav-link, text-input, card, footer.

`button-primary`: #154e92 fill, white DB Helvethaica X 24px text, 4px radius, 7px 12px padding, 40px high, #154e92 border; `button-primary-hover`: navy #1d3352 fill. `button-secondary`: same blue with the DB Helvethaica X 65 Med cut, 12px 14px padding, 48px high and the soft shadow. `nav`: white with #292626 text; `nav-link`: Sarabun 20px in #0d4fce. `text-input`: 27px high, #212529 text. `card`: #f8f9fa fill, #292626 text. `footer`: #1d3352 with white text.

## Design System Architecture

No public design system, brand guideline or token package was found; the page was opened and links to none. The shipped CSS carries Bootstrap 5 custom properties on the root (--bs-primary:#1ac21a, --bs-secondary:#154e92, --bs-success:#00c359, --bs-danger:#fe3d53, --bs-warning:#fec81f, --bs-body-bg:#fff and the --bs-gray scale) together with --swiper-navigation-size:44px, so the site is a Bootstrap 5 build whose own overrides set the brand blue and green.

The page declares 53 CSS custom properties on the root, for example `--bs-yellow: #ffc107`, `--bs-info: #3fbedf`, `--bs-orange: #fc7c06`, `--bs-danger: #fe3d53`, `--bs-gray: #6c757d`, `--bs-gray-600: #6c757d`, `--bs-success: #00c359`, `--bs-gray-500: #adb5bd`, `--bs-teal: #20c997`, `--swiper-navigation-size: 44px`, `--bs-indigo: #6610f2`, `--bs-body-font-weight: 400`, `--bs-primary: #1ac21a`, `--bs-font-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Li`. 

## Do's and Don'ts

- Do use #154e92 for primary buttons and card headers, with navy #1d3352 for footer and hover.
- Do use green #17af54 for positive changes, links and tags, and keep red for losses.
- Do right-align numbers in tables with hairline rows.
- Do set headings in DB Helvethaica X (75 Bd and 65 Med) and navigation in Sarabun.
- Do not treat ads, the tribute ribbon, the scrim lightbox or the cookie bar as brand UI.
- Do not measure from /en/home: it redirects to the 404 page.
- Do not use the Bootstrap defaults other than those overridden by the site.
- Do not use rounded pills for primary buttons; the measured radius is 4px.

## Responsive Behavior

The extractor recorded one mobile pass. What it measured: h1: "DB Helvethaica X 75 Bd", sans-serif 22px/500, 369x24px box ("จุดประกายไอเดียที่ใช่ เพื่อการลงทุนใ"); h2: "DB Helvethaica X 65 Med", sans-serif 36.75px/500, 46x41px box ("SET"); ctaPrimary: "DB Helvethaica X 65 Med", sans-serif 21px/400, 87x42px box ("SET"); nav: "DB Helvethaica X", sans-serif 17.5px/400, 390x44px box ("ค้นหาชื่อย่อ คำค้นหายอดนิยม หลักทรัพ"). Mobile font sizes by characters: 17.5px (2457), 10.5px (1060), 15.75px (1052), 12px (797), 18px (208), 21px (203), 14px (193), 28px (77). The mobile pass measured the display heading at 22px/500 with 24.42px line-height (the `display-mobile` token) against 42px on desktop. Breakpoint values, menu behaviour, grid column counts and image scaling on mobile were not measured and are not described here. Dark mode and any other theme were not measured.

## Iteration Guide

1. Start from `canvas` white, `ink` #292626 and `primary` #154e92.
2. Use `accent-green` for gains, tags and "ดูเพิ่มเติม" links.
3. Build data cards from `card` with hairline tables.
4. Keep headings in DB Helvethaica X and navigation in Sarabun.
5. Show the last-update timestamp under each dataset as the page does.

Before changing any token, re-measure the live site with the repository extractor (`node web/scripts/extract-tokens.mjs --slug=settrade --force`) and run `node web/scripts/verify-designs.mjs --slug=settrade`; a value that is not in the measurement or in a cited source must not be introduced.
