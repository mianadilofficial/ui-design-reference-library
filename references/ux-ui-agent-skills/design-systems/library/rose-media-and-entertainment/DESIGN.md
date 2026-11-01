---
version: alpha
name: Rose Media and Entertainment
category: "Thai Brands"
description: "Rose Media and Entertainment (rose.co.th), a Thai music and documentary label site: db_helvethaica_x55/x65 Thai faces plus Tahoma, red #d71921 nav and footer, a #555555 music grid band, 3px radius gray #9a9a9a buttons and a 38px input."
colors:
  canvas: "#ffffff"
  page-largest: "#555555"
  ink: "#333333"
  primary: "#9a9a9a"
  on-primary: "#ffffff"
  surface-2: "#f3f4f5"
  olive: "#999933"
  brand-red: "#d71921"
  hairline: "#d8d8d8"
  text-input-text: "#666666"
typography:
  display:
    fontFamily: db_helvethaica_x65
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
  body:
    fontFamily: db_helvethaica_x55
    fontSize: 13px
    fontWeight: 400
    lineHeight: 16px
  button:
    fontFamily: db_helvethaica_x65
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
  nav:
    fontFamily: Tahoma, Geneva, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 80px
  input:
    fontFamily: Tahoma, Geneva, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 38px
rounded:
  xs: 3px
  sm: 5px
  md: 50px
spacing:
  s1: 5px
  s2: 9.83px
  s3: 10px
  s4: 11.89px
  s5: 14.86px
  s6: 15px
  s7: 20px
  s8: 20.47px
  s9: 25px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 15px
    height: 38px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 15px
    height: 38px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
    padding: 10px 50px
  nav:
    textColor: "{colors.ink}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 0px 15px
    height: 38px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.olive}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 1px 0px 0px
  footer:
    backgroundColor: "{colors.brand-red}"
    textColor: "{colors.canvas}"
    padding: 20px 0px
---

# Rose Media and Entertainment

## Overview

The measured site is https://www.rose.co.th/, the web home of Rose Media & Entertainment Co., Ltd. (the page title is "บริษัท โรส มีเดีย แอนด์ เอ็นเตอร์เทนเมนท์ จำกัด (Rose Media & Entertainment Co., Ltd.)"). It is a Thai-language music label and video portal with a documentary channel. Every navigation label and section heading is printed in two lines, Thai above and English below, for example "หน้าแรก / HOME", "เพลง / MUSIC", "สารคดี / DOCUMENTARY".

The capture reads as a media portal. A white logo strip carries the red-swirl ROSE logo; a full-width red bar holds ten bilingual nav items; a full-bleed carousel of costumed performers fills the hero with seven round dots below it; three promo banners (folk-country songs, the rental studio, life songs) sit on a light gray band; then a wide mid-gray band shows a tab row, a search box and a grid of video thumbnails with title, view count and date; a white documentary section follows with a red heading and photo thumbnails. The design is image-led: color comes from the thumbnails, and the interface itself stays in red, white and grays.

## Colors

`canvas` #ffffff is the document background, but the dominant painted area is the gray band `page-largest` #555555 (2399 weight in the background-area count), which holds the music grid. The brand red is `ink-3` #d71921: it fills the footer (a measured footer background) and, per the capture, the nav bar and the documentary heading text; it is also the text color on 104 characters. `surface-2` #f3f4f5 is the light band behind the promo banners, and `surface-3` #999933 is an olive fill measured on a banner card that also carries a background image.

Text is `ink` #333333 on light areas (572 characters) and white on the gray and red areas (1861 characters). The extractor picked `primary` #9a9a9a with white text: this is the fill of the "MUSIC ALL" and "SEARCH" buttons in the gray band. It is a neutral control color and the brand's red is used for the nav and documentary button visible in the capture. `hairline` #d8d8d8 is the only border color measured (the search input) and `text-input-text` #666666 is the input text. The #0000ee link color measured on 9 characters is the browser default link color, not a brand color, and is dropped. A red inset shadow `rgb(190, 8, 12) -5px 0px 20px 0px inset` appears on 2 elements and shows a darker red, #be080c, used for shading.

## Typography

Three families are measured by character count: Tahoma (1439), db_helvethaica_x55 (927) and db_helvethaica_x65 (199). Both db_helvethaica faces are loaded as web fonts (the extraction lists "db_helvethaica_x55 normal normal" and "db_helvethaica_x65 normal normal"). The x65 face is used for nav labels and buttons: `display` 16px / 19.2px and `button` 14px / 16.8px. The x55 face is `body` 13px / 16px (footer copyright line "Copyright ® 2016, Rose Media and Entertainment Co., Ltd."). Tahoma, Geneva, sans-serif is the `nav` and `input` face (14px / 80px line height for the nav strip, 16px / 38px for the input).

Sizes are small and dense: 14px (1124 characters), 15px (572), 12px (513), 16px (137), 13px (78), 10px (89, the English sublabels under the Thai nav text), and 26px (18). Weights are 400 (1993) and 700 (572). There is no measured display heading above 26px; the largest typographic moments are the Thai section titles ("สารคดี | DOCUMENTARY") and the lettering inside the banner images. The extractor's h1 role resolved to the "หน้าแรก HOME" nav item (largest-hero-text), so no semantic h1 style is documented here.

## Layout

The document is 1280px wide and 2667px tall. The logo strip is white; below it the nav bar is 80px high. The nav link padding is `10px 25px` and the section tab links are `10px 50px` with 42px height. The music grid is five columns of thumbnails with a 16:9 image, a two-line title and a views-and-date line; the documentary block below uses four columns. A filter row has four joined tabs on the left, an input 285px wide at 38px height, and two 38px buttons on the right.

Spacing values measured are 5, 9.83, 10, 11.89, 14.86, 15, 20, 20.47, 25 and 30px, with 10px the most frequent padding (70 uses). Footer padding is `20px 0px`; the footer is 80px high and contains the same ten nav links and the copyright line.

## Elevation & Depth

The interface is almost flat. The only box shadows measured are `rgba(0, 0, 0, 0.1) 0px 1px 0px 0px` on cards (3 uses, a one-pixel hairline-style drop) and the red inset shadow noted above. A semi-transparent black #00000026 appears as a background on 5 area-units. Separation between sections comes from background change alone (white, #f3f4f5, #555555, white, red), not from shadows.

## Shapes

Radii are small. `xs` 3px (29 uses) applies to buttons and the input; `sm` 5px (3 uses) applies to the banner card; `md` 50px (7 uses) is a fully round shape on elements measured with that radius. Thumbnails and the nav bar show square corners in the capture. No other radius value is present in the extraction.

## Components

**Button (`button-primary` / `button-secondary`)**: `#9a9a9a` fill, white 14px text in db_helvethaica_x65, 3px radius, `0px 15px` padding, 38px high; "MUSIC ALL" is 102px wide and "SEARCH" is 64px. The measured hover turns the background transparent while the white 1px-style border color remains.

**Text input**: white fill, `#666666` text, 16px Tahoma, 3px radius, 1px solid #d8d8d8 border, `0px 15px` padding, 38px high, 285px wide.

**Nav**: a red bar with ten bilingual links (Thai at larger size, English at 10px beneath); white text.

**Card**: the olive-backed banner card at 5px radius with the one-pixel hairline shadow, filled by a banner image.

**Footer**: #d71921 fill with white 12px text (db_helvethaica_x55, 18px line height) and the same navigation links repeated.

The carousel's right-edge red arrow and the round dots are carousel controls and are not documented as tokens.

## Design System Architecture

No public design system, brand guideline or token package for Rose Media and Entertainment was found; none was opened. The de-facto system is a conventional hand-written stylesheet: the extraction found no CSS custom properties (the rootVars set is empty), and the colors are literal hex values. Typefaces are mixed: two Thai display and text web fonts served by the site and Tahoma as a system face. Imagery is uploaded from the site's own `/upload/` folder (for example `upload/bn/real/pic-161-3.png`, a banner background on the olive card).

## Do's and Don'ts

- Do print each nav label and section heading in Thai and English, with the English smaller.
- Do reserve #d71921 red for the nav bar, footer and section headings.
- Do use #555555 as the dark band behind video grids and #f3f4f5 as the light band behind promos.
- Do keep controls at 38px high with 3px radius.
- Do not use #0000ee as a link color; it is a browser default.
- Do not use shadows beyond the one-pixel hairline; depth is made by band changes.
- Do not add large display type; none is measured above 26px.

## Responsive Behavior

A 390px mobile pass was recorded. In it the body text measured 13px / 16px in white, and the extractor's first heading-like role resolved to a link carrying a menu icon (`images/ic-nav.svg`) at 80px wide and 50px high on a #00000026 background, which shows that the mobile page uses an icon-based navigation control. The font-size counts on mobile are 14px (1124), 13px (650), 12px (427) and 11px (86). Column counts, grid changes and breakpoints were not measured.

## Iteration Guide

1. Start with `canvas` #ffffff, `ink` #333333, red #d71921 and the gray band #555555.
2. Use db_helvethaica_x65 for nav and buttons and db_helvethaica_x55 for body; keep Tahoma for form controls.
3. Build controls at 38px height, 3px radius, `0px 15px` padding.
4. Keep every label bilingual (Thai first, English second).
5. Gate: `node web/scripts/verify-designs.mjs --slug=rose-media-and-entertainment`.
