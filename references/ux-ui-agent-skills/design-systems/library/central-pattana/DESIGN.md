---
version: alpha
name: Central Pattana
category: "Thai Brands"
description: "Corporate site of Central Pattana (CPN), Thai retail-property developer. White canvas, black ink, a single muted gold #b39656 for buttons and section titles, one custom sans (CPN, 300/400/700), 3px square-ish buttons, uppercase navigation and headings."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#b39656"
  on-primary: "#ffffff"
  primary-hover: "#b39656bf"
  heading-gold: "#b49751"
  ink-muted: "#747474"
  nav-idle: "#c1c1c1"
  surface-gray: "#f2f2f2"
typography:
  display:
    fontFamily: CPN
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
    textTransform: uppercase
  subheading:
    fontFamily: CPN
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
    textTransform: uppercase
  body:
    fontFamily: CPN
    fontSize: 20px
    fontWeight: 100
    lineHeight: 30px
  button:
    fontFamily: CPN
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
    textTransform: uppercase
  nav:
    fontFamily: CPN
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    textTransform: uppercase
  nav-lang:
    fontFamily: CPN
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    textTransform: uppercase
  link:
    fontFamily: CPN
    fontSize: 14px
    fontWeight: 700
    lineHeight: 21px
rounded:
  xs: 3px
  sm: 4px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 32px
    height: 41px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 32px
    height: 41px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    boxShadow: rgba(0, 0, 0, 0.25) 0px 1px 5px 0px
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
    padding: 12px 8px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

## Overview

Central Pattana (CPN) is the Thai developer behind Central-branded shopping centers, residences, offices and hotels, and its English corporate site at `https://www.centralpattana.co.th/en/home` is an investor-and-press home page rather than a shopping page. The measured page title is "Central Pattana (CPN)". The visual register is a quiet, premium-property one: a white page, black copy, and exactly one chromatic color, a muted gold that carries every button, the section title "OUR BUSINESS" and the award panel.

Note on the entry page: the queued URL `https://www.centralpattana.co.th/en` redirects to `/en/intro-page`, which at capture time was a black memorial tribute screen with a cookie dialog and a single "enter main site" button. That splash was not measured as brand UI. This file documents the real home page `/en/home`, measured with the extractor at 1280px desktop and 390px mobile, and the tokens above were regenerated from that measurement.

The home page is built as a long vertical sequence of full-width bands: a fan of five overlapping architectural renderings at the top under the wordmark and a single row of uppercase navigation, a centered "OUR BUSINESS" statement with a gold "READ MORE" button, a six-tile grid of business lines (shopping centers, residences, offices, hotels, strategic investments, collaboration and co-creation), a light-gray "AWARDS & RECOGNITIONS" carousel with a gold award panel, a three-card "LATEST ACTIVITIES" news row, and a black footer. Imagery is photographic or rendered architecture, shown full-color, with no illustration. Copy is formal English in uppercase headings and sentence-case paragraphs, written in the corporate voice ("CENTRAL PATTANA was founded on June 17, 1980, with a registered capital of Baht 300 million").

## Colors

The palette is deliberately tiny. The measured background-area ranking is #ffffff first, then #000000 (the footer), then #b39656 (button fills and the award panel), then #f2f2f2 (the awards band). Text weight by characters is led by #ffffff (footer copy) and #000000 (body copy), with #747474, #b49751 and #c1c1c1 as small minorities.

- **Canvas `#ffffff`** is the page background seen across the header, the business statement and the news row.
- **Ink `#000000`** is the body paragraph color, the "WORLD-CLASS EXPERIENCE" subheading color, the section title "AWARDS & RECOGNITIONS" and the footer background.
- **Primary `#b39656`** is the fill and 1px border of both "READ MORE" and "VIEW ALL" buttons, and the fill of the awards panel. White text sits on it (`on-primary` `#ffffff`). On hover the button fill and border become `rgba(179, 150, 86, 0.75)`, recorded here as `#b39656bf`.
- **Heading gold `#b49751`** colors the h2 "OUR BUSINESS". It is a separate measured value from the button gold; the difference is small and both are kept as measured.
- **Ink muted `#747474`** is the color of the main navigation labels (ABOUT US, OUR BUSINESS, INVESTOR RELATIONS and the rest) and the hover color of the language switch.
- **Nav idle `#c1c1c1`** is the measured color of the "TH" language switch before hover and the header's inherited text color.
- **Surface gray `#f2f2f2`** is the awards band background.

Bootstrap 4 palette variables are present in the site's `:root` (for example `--primary: #007bff`, `--danger: #dc3545`, `--success: #28a745`). Those are framework defaults that the site's own gold overrides on every measured control; they are not brand colors and are not tokens here.

## Typography

One family, `CPN`, serves every measured character on the page (5,197 of 5,197 weighted characters). It is a self-hosted web font: the extractor recorded three faces, CPN 300, CPN 400 and CPN 700, loaded from `/themes/default/assets/fonts/cpn-light-webfont.woff2`, `cpn-regular-webfont.woff2` and `cpn-bold-webfont.woff2`. The font files are served from the site's own theme folder. Because Thai glyph coverage of CPN was not measured, the Thai-language pages are not described here.

The measured ladder:

- **Display, 40px / 700 / 48px, uppercase** is the h2 "OUR BUSINESS", set in `heading-gold`. The mobile pass measured the same 40px/700/48px for the first heading.
- **Subheading, 30px / 700 / 36px, uppercase**, in ink, for "WORLD-CLASS EXPERIENCE".
- **Body, 20px / 100 / 30px** is the corporate paragraph. The computed weight is recorded as 100 while the loaded faces are 300, 400 and 700, so the site asks for the lightest weight available. Body copy renders as thin, airy text on white.
- **Button, 15px / 400 / 22.5px, uppercase** for "READ MORE" and "VIEW ALL".
- **Nav, 16px / 400 / 24px, uppercase** for the primary navigation row; **nav-lang, 16px / 700** for the TH / EN switch.
- **Link, 14px / 700 / 21px** for the business-line labels (SHOPPING CENTERS and similar), which is also the most-used size on the page (14px covers 2,888 weighted characters).
- Other measured sizes without a token: 18px (footer copy, 600 weight), 22px, 24px, 12px, 36px. "AWARDS & RECOGNITIONS" is measured at 36px/500 on the mobile pass.

Uppercase is the house style for navigation, headings, buttons and tile labels; sentence case is reserved for paragraphs and news titles. No letter-spacing was recorded on the measured roles (`normal`).

Font substitutes while CPN is unavailable: any geometric humanist sans with a light, regular and bold cut, used at the same three weights. The substitute is a build suggestion, not a measured fact.

## Layout

The desktop page is 1280px wide and 4,297px tall at capture. The first band has measured content edges at x = 56 and x = 1224 (a 1,168px content width), and the body paragraph measured 1,170px wide. The header is a 112px-tall white bar with a one-pixel-offset shadow (`rgba(0, 0, 0, 0.25) 0px 1px 5px 0px`); it holds the centered `CENTRALPATTANA` wordmark (`logo.svg`, 300 × 22px), the TH / EN switch and a toggle button labelled "Toggle navigation", with the ten nav links on a single row underneath.

Spacing values measured on the page are 4, 5, 8, 12, 15, 16, 20, 24, 32 and 40px; the most-used padding is 8px (46 elements) followed by 16px (25), 15px (22) and 24px (15). Buttons use `8px 32px` padding. Card columns reach a measured maximum of 7 on desktop, which reflects the five-image hero fan and carousel rows rather than a regular grid; the business-line section is a 3 × 2 tile grid in the capture.

Section rhythm is large and calm: generous white space between the hero fan, the centered statement and the tile grid, then a gray band, then the news row, then a 642px black footer holding four link columns (More about Central Pattana, Quick entrance topics, Site information, and the wordmark with app-store badges).

## Elevation & Depth

Depth is almost absent. The only measured box shadow on the page is the header's `rgba(0, 0, 0, 0.25) 0px 1px 5px 0px`, used twice. The business-line tiles and the award panel read as flat photographic or filled blocks. There are no layered card shadows, no blur and no gradient fills in the measured roles; separation comes from background changes (white, `#f2f2f2`, black) and from thin 1px borders. Measured border colors are #ffffff (13 uses), #b39656 (3), #000000 (3), and two half-transparent values `#ffffff80` and `#74747480`.

## Shapes

Corners are nearly square. The primary and secondary buttons measure a 3px radius, which is the smallest token (`xs`); a 4px radius also appears once and a `0px 4px 4px 0px` (right-side only) radius twice. Three elements measure `50%`; the capture shows three round pagination dots under the awards carousel. Photographs, tiles and the award panel have no rounding in the measured roles. The silhouette of the brand is therefore rectangular and architectural, softened only by the 3px button corners.

## Components

- **Primary button**: fill `{colors.primary}`, white 15px/400 uppercase label, 3px radius, 1px solid border in the same gold, `8px 32px` padding, 41px height ("READ MORE" measured 156px wide, "VIEW ALL" 137px). Hover lowers the fill and border alpha to 0.75; text stays white.
- **Secondary button**: measured identical to the primary ("VIEW ALL" uses the same fill, border, radius and padding); there is no outline or ghost variant on this page.
- **Navigation**: ten uppercase 16px/400 links in `ink-muted` with `12px 8px` padding in a row below the wordmark; TH / EN switch in 16px/700 whose color goes from `#c1c1c1` to `#747474` on hover. A "Toggle navigation" button is visible at desktop and mobile widths.
- **Link / tile label**: 14px/700 in black; the six business-line labels sit under photographs in gold in the capture.
- **Awards panel**: a `#b39656` filled rectangle with a thin white inner border, centered white text, and a three-dot carousel indicator.
- **News cards**: three photo cards with bold-weight "Read More" text and a small circular arrow, under the "LATEST ACTIVITIES" label (20px/700, left-aligned).
- **Footer**: black (`{colors.ink}`) with white 18px/600 copy, a "Connect with us" row, a "Back to top" control, and a copyright line "Copyright 2020 Central Pattana Plc. All rights reserved."
- A slide-out "Whistleblowing" tab sits at the right edge of the viewport in the capture; it is a site utility and is not documented as brand UI.

## Design System Architecture

No public design system or brand-guidelines page was found on the pages opened (the home page and its footer link set: About Us, Our Business, Sustainability, Financial Transactions, Investor Relations, Career, Vendor Portal). The de-facto system is a CMS theme: assets load from `https://www.centralpattana.co.th/themes/default/assets/` (static images, `logo.svg`, three CPN webfont files, an icon font, Font Awesome 5 Brands). The `:root` exposes Bootstrap 4's variable set, including `--breakpoint-xs: 0`, `--breakpoint-sm: 576px`, `--breakpoint-md: 768px`, `--breakpoint-lg: 992px`, `--breakpoint-xl: 1200px`, plus Swiper's `--swiper-navigation-size: 44px`. The brand layer is a short override of Bootstrap defaults: gold button fill, CPN font, 3px radius and uppercase transforms. Stylesheet font-face names also include Font Awesome 5 Pro, Roboto and Athiti declarations, but the page rendered only CPN. Source of measurement: https://www.centralpattana.co.th/en/home.

## Do's and Don'ts

Do:
- Use white canvas, black ink and one gold; let photography carry color.
- Set headings, nav and buttons in uppercase CPN at the measured sizes.
- Keep buttons at 3px radius, `8px 32px` padding, 41px height, gold fill with white label.
- Separate bands with background shifts to `#f2f2f2` or black instead of shadows.

Don't:
- Don't use Bootstrap's `#007bff` blue or other framework variables as brand colors.
- Don't round buttons beyond 3px or add drop shadows to cards.
- Don't use bold or colored body text; body is the light weight in black.
- Don't treat the memorial intro page, cookie dialog or the whistleblowing tab as brand components.

## Responsive Behavior

Measured at a 390px viewport: the content edges move to x = 15 and x = 375 and every band is a single column (`columns` = 1). The first heading stays 40px/700/48px, centered, and the body paragraph stays 20px/100/30px but the measured paragraph box grows to 510px tall at a 360px width. The primary button is unchanged (156 × 41px, 3px radius). Visible header links drop from 10 on desktop to 2, and the maximum card columns drop from 7 to 2. A "Toggle navigation" button is present at both widths. The awards band measured `#f2f2f2` with its heading at 36px/500, and the news row heading "LATEST ACTIVITIES" is 20px/700, left-aligned. Declared Bootstrap breakpoints are 576px, 768px, 992px and 1200px; which of them the theme uses for each layout change was not measured. Touch target sizes, tablet widths and dark mode were not measured.

## Iteration Guide

1. Start from `canvas #ffffff` and `ink #000000`; introduce gold `#b39656` only for buttons, award panels and the h2 section title (`#b49751`).
2. Set the type ladder in CPN (or a stated substitute) at 40 / 30 / 20 / 16 / 15 / 14px and keep headings, nav and buttons uppercase.
3. Build each section as a full-width band: statement, tile grid, gray awards band, news row, black footer.
4. Check buttons against the measured spec: 41px high, `8px 32px`, 3px radius, white 15px/400 label, hover alpha 0.75.
5. Use real architectural photography at full color; do not add shadows beyond the header's `0px 1px 5px` line.
6. Re-measure `/th/home` before documenting the Thai-language page; its fonts and spacing were not measured here.
