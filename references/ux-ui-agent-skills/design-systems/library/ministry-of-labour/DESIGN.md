---
version: alpha
name: Ministry of Labour (กระทรวงแรงงาน)
category: "Thai Brands"
description: "Thai Ministry of Labour portal (mol.go.th) set entirely in the Kanit typeface, with a violet palette built on #9d52da (primary) and #791ec3 (deep purple), white #ffffff canvas, #626262 body ink, square 0px primary buttons and a 4px secondary button, and a dense service-icon grid on a patterned purple band."
colors:
  canvas: "#ffffff"
  ink: "#626262"
  primary: "#9d52da"
  on-primary: "#ffffff"
  surface-lavender: "#e7d4f7"
  surface-subtle: "#f7f7f7"
  purple-deep: "#791ec3"
  ink-strong: "#333333"
  ink-tertiary: "#555555"
  text-input-text: "#495057"
typography:
  display:
    fontFamily: Kanit, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 33px
  display-mobile:
    fontFamily: Kanit, sans-serif
    fontSize: 21.6px
    fontWeight: 300
    lineHeight: 25.92px
  heading:
    fontFamily: Kanit, sans-serif
    fontSize: 21.12px
    fontWeight: 200
    lineHeight: 25.344px
  subheading:
    fontFamily: Kanit, sans-serif
    fontSize: 19.2px
    fontWeight: 300
    lineHeight: 23.04px
  body:
    fontFamily: Kanit, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  button:
    fontFamily: Kanit, sans-serif
    fontSize: 22.4px
    fontWeight: 300
  link:
    fontFamily: Kanit, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 19.2px
rounded:
  xs: 3px
  sm: 4px
  md: 10px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 4.8px
  s5: 5px
  s6: 6px
  s7: 7px
  s8: 8px
  s9: 9.6px
  s10: 10px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 16px
    height: 50px
  button-secondary:
    backgroundColor: "{colors.purple-deep}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 6px 12px
    height: 38px
    borderColor: "{colors.purple-deep}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 0px 15px
  nav:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 7px 15px
    height: 38px
  footer:
    textColor: "{colors.purple-deep}"
    rounded: "{rounded.none}"
---

## Overview

The Ministry of Labour home page (final URL https://www.mol.go.th/, page title "หน้าหลัก - กระทรวงแรงงาน", document language `th`) is a portal-style Thai government site. The measured capture shows a masthead with the ministry emblem and the bilingual name "กระทรวงแรงงาน / Ministry of Labour" set at 30px Kanit weight 700 in #9d52da, a Call Center strip reading "โทร 1506", a search field with a "ค้นหา" button, a hero slideshow area, a row of five quick-link tabs, a large purple band of circular-icon service tiles, a tabbed news section with photo cards, and a long footer of link columns.

The overall voice is institutional and service-first: labels are short Thai nouns for what a citizen can do ("e-Service", "ตลาดนัดแรงงาน", "กฎหมายแรงงาน", "ร้องเรียน/ร้องทุกข์", "คู่มือการให้บริการ"). Photography is documentary press photography of the minister and ministry events. The capture also contains a modal announcement image, a cookie-consent dialog and a tribute ribbon in the top-left corner; these are overlays, not brand UI, and no token here is derived from them.

## Colors

The palette is a single violet hue family on white. `primary` #9d52da is the fill of the detected primary call to action (the "e-Service" quick-link) and also the colour of the masthead title and the news-tab outline. `purple-deep` #791ec3 is the most-used coloured text (1,318 characters in the measurement) and fills the "ดูทั้งหมด" (view all) secondary button and the footer text. `surface-lavender` #e7d4f7 and `surface-subtle` #f7f7f7 are measured background areas. Body text is `ink` #626262, with `ink-strong` #333333 and `ink-tertiary` #555555 as darker text steps, and `text-input-text` #495057 inside the search field.

The service band uses a patterned purple background; the measured background colours include #9d52da, #ba5bfa, #791ec3 and #3c0f61 in small areas. The page's CSS also ships Bootstrap-family defaults (for example #007bff and #0044cc appear in the stylesheet corpus); these are framework defaults and are not used as brand colours here. Colours measured only on the modal scrim (#000000e6 background, #cccccc text) are excluded.

## Typography

One family carries the whole interface: Kanit, with a sans-serif fallback. Measured loaded faces are Kanit 200, 300 and 400 plus Font Awesome (brand and free) icon fonts. Noto Sans JP also appears in the character-frequency measurement at a small weight (228 characters).

The `display` style is 30px / 33px weight 700 (the masthead title). `heading` is 21.12px / 25.344px weight 200 (the "Call Center" heading), `subheading` is 19.2px / 23.04px weight 300, `body` is 16px / 24px weight 500 and `link` is 16px / 19.2px weight 300. The `button` style is 22.4px weight 300 for the quick-link buttons. The dominant measured size by character count is 16px (6,474 characters), followed by 14.4px, 20.8px, 21.6px and 22.4px. Kanit is a Google Fonts typeface; no substitute is needed because the site loads it. Weights 300 and 500 account for the bulk of text (3,804 and 3,814 characters respectively), so the page reads as light-to-medium rather than bold; weight 700 is reserved for the masthead.

## Layout

The desktop measurement was taken at a 1280px-wide viewport with a full-page scroll height recorded at the time of extraction. Content follows a Bootstrap-style container: a full-width header, then centered content blocks. Measured paddings cluster at 15px (146 occurrences), 10px, 20px and 25px, which is the page's spacing rhythm; the generated spacing scale lists 2px through 10px for small details such as badges and icon buttons.

Vertical order from the capture: masthead and Call Center strip; hero slideshow with previous/next arrows and play/pause; five quick-link tabs; the purple service band with three rows of circular icon tiles with centred Thai captions (six, six and one tile); a tab bar for news categories (ข่าวประชาสัมพันธ์, ประกาศ, ข่าวจัดซื้อจัดจ้าง, ภูมิภาค, ต่างประเทศ, เรื่องที่น่าสนใจ); a news grid with one large feature card at left and four smaller cards at right; a centred "ดูทั้งหมด" button; and the footer.

## Elevation & Depth

Depth is nearly flat. The measured box shadows are two very soft ones: `rgba(0, 0, 0, 0.06) 0px 0px 10px 0px` (5 occurrences, the news cards) and `rgba(0, 0, 0, 0.05) 0px 2px 8px 0px` (1 occurrence). Hierarchy is created instead by colour fields: the saturated purple service band against white, and lavender #e7d4f7 tab states. Only one border colour family is measured: #9d52da and #791ec3 for outlined or filled buttons and the active news tab (a 3px solid #9d52da border), and #e8e8e8 once.

## Shapes

Corners are mostly square or lightly rounded. The primary quick-link buttons are 0px radius; the secondary "ดูทั้งหมด" button is 4px with a 1px solid #791ec3 border; the active news tab has a 10px 10px 0px 0px radius (rounded top only). The most frequent measured radius is 100% (40 occurrences), used for the circular icon tiles in the service band and for social icon buttons, followed by 3px (22 occurrences).

## Components

**Primary quick-link button** (`button-primary`): #9d52da fill, white text, Kanit 22.4px weight 300, 8px 16px padding, 50px high, 0px radius ("e-Service"). Its siblings in the measurement ("ร้องเรียน/ร้องทุกข์", "ตลาดนัดแรงงาน", "กฎหมายแรงงาน", "คู่มือการให้บริการ") are #f6f7f8 tiles with #555555 text at the same size and padding.

**Secondary button** (`button-secondary`): #791ec3 fill, white 16px Kanit weight 300, 6px 12px padding, 38px high, 4px radius, 1px solid #791ec3 border ("ดูทั้งหมด").

**Search input** (`text-input`): white background, #495057 text, 16px Kanit, 7px 15px padding, 38px high, 0px radius. **Link**: white text at 16px weight 300 on the purple band, 0px 15px padding. **Nav / nav-link**: #9d52da text, masthead display style. **Footer**: #791ec3 text.

**News tab**: outlined #9d52da, 3px border, 10px top corners, 19.2px weight 300 text. **News card**: photo above a title, with a view count, date and share icons; shadow `rgba(0, 0, 0, 0.06) 0px 0px 10px 0px`.

## Design System Architecture

No public design system or brand-guideline page was found for this site. The attempted fetch of https://www.mol.go.th/ returned HTTP 503 twice (recorded verbatim in SOURCES.json), so the structure described here comes from the live-page extraction and capture rather than from reading the page text. The de-facto system is a Bootstrap-style stack: the CSS corpus contains Bootstrap defaults (#007bff, #6c757d, #212529, #dc3545, #28a745, #dee2e6, #f8f9fa), Font Awesome icon fonts, and the ministry's own violet palette layered on top. The extraction recorded no CSS custom properties on the root element (`rootVars` is empty), so there are no named design tokens in the shipped CSS.

## Do's and Don'ts

- Do use Kanit for every Thai and Latin string, with 16px as the reading size.
- Do keep #9d52da as the single action colour and #791ec3 as its deeper companion.
- Do use circular icon tiles with short centred Thai captions for service entries.
- Do keep primary buttons square (0px) and secondary buttons at 4px.
- Don't add Bootstrap blue (#007bff) or link blue as brand colours.
- Don't copy popup, cookie-consent or tribute-ribbon styling into the interface.
- Don't introduce heavy shadows; the measured shadows are 0.05-0.06 alpha.

## Responsive Behavior

A 390px mobile pass was recorded. At that width the first heading measured is 21.6px / 25.92px weight 300 (`display-mobile`, the "e-Service" band heading), the header title measured 19.8px weight 700 with 21.78px line height, body copy is 16px weight 300 with 20.8px line height in #626262, and the primary button detected on mobile is the "ดูทั้งหมด" button (#791ec3, 4px radius, 6px 12px padding, 38px high). The mobile header height is 226px against 182px on desktop. Breakpoint widths, navigation collapse behaviour and grid column changes were not measured.

## Iteration Guide

1. Start from the white canvas, `ink` #626262 and Kanit 16px; add purple only for actions and band fills.
2. Use `primary` #9d52da for the main action and `purple-deep` #791ec3 for secondary actions and text emphasis.
3. Keep corners at 0px for large buttons, 4px for small buttons, 100% for icon discs.
4. For any new component, measure it on the live page before adding a token; unknown values stay out.
5. Re-run `node web/scripts/verify-designs.mjs --slug=ministry-of-labour` after every change.
