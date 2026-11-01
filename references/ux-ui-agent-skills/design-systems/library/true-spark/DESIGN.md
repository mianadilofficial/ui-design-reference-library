---
version: alpha
name: TrueVisions NOW
category: "Thai Brands"
description: "TrueVisions NOW (truevisions.co.th, operator site measured for True Spark): near-black #0f0f0f pages with white text, magenta #e31d93 header and #f341b4 pill CTAs, Better Together typeface, 20px-radius poster tiles and 12px-radius white buttons."
colors:
  canvas: "#ffffff"
  page-largest: "#0f0f0f"
  ink: "#000000"
  brand-pink: "#e31d93"
  surface-black: "#070608"
  ink-muted: "#c8c8c8"
  ink-dark: "#434343"
  primary: "#f341b4"
  footer-bg: "#313131"
  on-primary: "#ffffff"
typography:
  display:
    fontFamily: "\"Better Together\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
  display-mobile:
    fontFamily: "\"Better Together\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 20px
    fontWeight: 700
    lineHeight: 30px
  subheading:
    fontFamily: "\"Better Together\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 30px
    fontWeight: 500
    lineHeight: 36px
    textTransform: uppercase
  body:
    fontFamily: "\"Better Together\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  button-small:
    fontFamily: "\"Better Together\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 13px
    fontWeight: 500
    lineHeight: 19.5px
  nav:
    fontFamily: "\"Better Together\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Better Together\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28px
    letterSpacing: 0.9px
rounded:
  xs: 4px
  sm: 6px
  md: 12px
  lg: 16px
  xl: 20px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 32px
  s8: 40px
  s9: 54px
  s10: 56px
components:
  button-light:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.brand-pink}"
    typography: "{typography.button-small}"
    rounded: "{rounded.md}"
    height: 33px
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 44px
  nav:
    textColor: "{colors.canvas}"
    padding: 12px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgb(255, 255, 255) 0px 1px 2px 0px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
---

## Overview

The queued brand is True Spark, a Thai pay-TV channel brand; the URL given for it is `https://www.truevisions.co.th/`, the site of its operator TrueVisions (a Wikipedia navigation box lists True Spark among TrueVisions channels; that page does not describe the relationship further). This file therefore documents the measured site, TrueVisions NOW, not a separate True Spark site; the extraction contains no on-page mention of "Spark". The page title is "TrueVisions NOW สตรีมมิ่งกีฬาสด ระดับโลก มากที่สุดในไทย สนุกกับความบันเทิงสุดฮิต ในแอปเดียว" (live global sports streaming, hit entertainment in one app), the language is Thai and the page is 4,616px tall with 775 visible elements.

A magenta header bar holds the "true visions NOW" logo and a menu: แพ็กเกจ (packages), ผังรายการ (schedule), สิทธิพิเศษ (privileges), Showtime, HoReCa and FAQs, then a chat icon, a ไทย language selector and a white "เริ่มรับชม ▶" (start watching) pill. The hero is a full-width Formula 1 photograph with a magenta pill, "สมัครแพ็กเกจ NOW SPORTS" (subscribe to the NOW SPORTS package), and dot pagination. Below on a black page come "รายการเด่นประจำเดือน" (featured programs of the month) with a two-line subtitle and two rows of rounded poster tiles (series, anime, film), "รายการกีฬาครบจบที่เดียว" (all sports in one place) with wide banner carousels such as NOW FOOTBALL, and "รับชมที่ทรูวิชั่นส์ นาว ที่นี่ที่เดียว" (watch here only) with red-pink "ONLY ON NOW" tiles. The tone is energetic and promotional, built from show artwork.

## Colors

The extractor reports `{colors.canvas}` as #ffffff, but the painted page is dark: `{colors.page-largest}` (#0f0f0f, 2,857 area units) and pure black (#000000, 2,656 units) dominate, with `{colors.surface-black}` (#070608, 916 units) and the footer `{colors.footer-bg}` (#313131, 355 units). Text is white (2,928 characters, the same hex as `{colors.canvas}`), with `{colors.ink-muted}` (#c8c8c8, 95 characters), `{colors.ink}` (#000000, 21 characters, on white buttons) and `{colors.ink-dark}` (#434343, 14 characters).

The brand colour is magenta. `{colors.brand-pink}` (#e31d93, 77 area units and 190 characters) fills the header bar and colours the label on white buttons. `{colors.primary}` (#f341b4, 54 units) fills the pill CTAs with white `{colors.on-primary}` text. A lighter hover fill, rgb(250, 108, 204), is measured on menu items (a dropdown row showing NOW ENT, NOW FOOTBALL, NOW SPORTS turns that colour on hover); it is recorded here but not as a token because its hex was not listed in the colour frequencies. Content tiles bring their own colour through artwork.

## Typography

One family, "Better Together" (300, 400, 500 and 700 loaded; 3,270 characters), with ui-sans-serif and system fonts after it. Section headings (`{typography.display}`) are 30px bold on a 36px line; uppercase 30px weight 500 (`{typography.subheading}`) is used for price lines such as "99 บาท/เดือน" (99 baht per month); body copy (`{typography.body}`) is 20px on 30px; menu items (`{typography.nav}`) are 16px on 24px; the pill CTA (`{typography.button}`) is 18px weight 500 with 0.9px letter-spacing; the small white button (`{typography.button-small}`) is 13px weight 500 on 19.5px.

Weights are 400 (2,084 characters), 700 (733), 500 (374), 300 (76) and 600 (3). Sizes are led by 18px, 20px, 30px, 16px, 17px, 14px, 15px and 24px. Footer headings are 17px bold on 25.5px.

## Layout

The layout is full-width and centred: banners bleed to the viewport edges, headings are centred over contained poster grids, and carousels continue past the right edge with a small arrow control at the left. The header bar is 60px tall for the menu strip. Measured paddings are 8px (116 uses), 16px (81), 24px (27), 40px (22), 4px (21) and 32px (4), with gaps of 8px (3 uses).

Poster tiles sit in two stacked rows of three visible columns at desktop width, each tile wider than tall. Spacing tokens in the front matter run from 4px to 56px.

## Elevation & Depth

Shadows are small and share two recipes: a white 1px 2px edge, `rgb(255, 255, 255) 0px 1px 2px 0px` (11 elements), and a dark `rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px` (11). Because the page is dark, neither is visible as a drop shadow; depth comes from the artwork, full-bleed hero photography and tiles lifted by their own colour. Borders are rare: #ffffff (1 element, the outlined package selector) and #c1c1c1 (1).

## Shapes

20px (`{rounded.xl}`) is the signature radius, with 91 elements (poster tiles and banners). Pills at 9999px cover 24 elements (CTA and tabs), 12px (`{rounded.md}`) the white header button and 12 other elements, 16px (`{rounded.lg}`) 11 elements, and small 4px and 6px radii on menu and outline controls (6 and 5 elements). The outlined package selector uses 6px.

## Components

**Primary button (pill CTA).** `{colors.primary}` fill, white label, 18px weight 500 with 0.9px tracking, padding 8px 16px, 44px tall, fully rounded ("สมัครเลย", "สมัครแพ็กเกจ NOW SPORTS").

**Light button.** `{colors.canvas}` white fill, `{colors.brand-pink}` 13px label, 33px tall, 12px radius ("เริ่มรับชม" in the header).

**Outline selector.** White 1px outline, 16px text, 6px radius, 4px 8px 4px 16px padding ("แพ็กเกจรายปี / ฤดูกาล", annual or seasonal packages).

**Navigation.** Transparent items in white 14px text on the magenta bar, with 6px radius and a lighter pink hover fill; dropdown items list NOW ENT, NOW FOOTBALL and NOW SPORTS.

**Poster tile.** 20px-radius image with no text frame; some carry badges such as "ONLY ON NOW".

**Footer.** `{colors.footer-bg}` fill with white text, 285px tall.

## Design System Architecture

No public design-system or brand-guideline page was opened. The only root variables are Tailwind internals (`--tw-ring-color: rgb(59 130 246 / .5)`, `--tw-ring-offset-color: #fff`, `--tw-shadow`) and a carousel library's tokens (`--swiper-theme-color: #007aff`, `--swiper-navigation-size: 44px`), plus `--doc-height: 100vh`. They are platform defaults: the blue #3b82f6 ring and #007aff are not brand colours. The brand system is read from rendered values, with a single typeface, a two-tone magenta, a dark page, 20px tiles and pill CTAs.

The measured shadow recipes are listed under Elevation & Depth; no component naming is exposed.

## Do's and Don'ts

- Do use black pages with white text and let show artwork provide the colour.
- Do use magenta (#e31d93 for the header, #f341b4 for pill CTAs).
- Do round poster tiles at 20px and CTAs fully.
- Do set headings in Better Together bold at 30px.
- Don't introduce blue or other UI hues; the framework blue is not part of the brand.
- Don't rely on shadows on dark backgrounds.
- Don't describe this as a separate True Spark site; it is the TrueVisions NOW operator site.

## Responsive Behavior

The 390px mobile pass recorded the lead pill ("สมัครแพ็กเกจ NOW SPORTS") at 20px weight 700 on a 30px line with 4px 16px padding and a 68px height, body text at 20px on 30px, and the white header button unchanged (13px, 33px tall, 12px radius). Common mobile sizes are 18px (1,969 characters), 20px (351), 30px (283), 16px (220), 17px (139) and 15px (95). Column counts, menu collapse and tile layout on mobile were not measured.

## Iteration Guide

1. Dark `{colors.page-largest}` pages, white text, `{colors.brand-pink}` header.
2. Pill CTAs in `{colors.primary}`, 44px tall, 18px 500 with 0.9px tracking.
3. Poster tiles at 20px radius; banners bleed full width.
4. Headings 30px bold, body 20px, nav 16px.
5. Use padding steps 8, 16, 24, 40.
6. Keep framework defaults (blue rings, swiper blue) out of the design.
