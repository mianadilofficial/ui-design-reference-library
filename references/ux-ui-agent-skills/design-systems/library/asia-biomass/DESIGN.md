---
version: alpha
name: Asia Biomass
category: "Thai Brands"
description: "Thai-language corporate site of Asia Biomass Public Company Limited (ABM), a biomass-fuel supplier. Prompt typeface at weight 500 and 600, brand green #1e8b44 for headings and the top bar, chocolate-brown #6d3c18 buttons with 5px radius, white canvas and a pale #f8fcff section tint."
colors:
  canvas: "#ffffff"
  ink: "#666666"
  primary: "#6d3c18"
  on-primary: "#ffffff"
  surface-tint: "#f8fcff"
  brand-green: "#1e8b44"
  ink-scrim: "#00000099"
  ink-strong: "#333333"
  green-bright: "#21ba45"
typography:
  display:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 36px
    fontWeight: 600
    lineHeight: 50.4px
    textTransform: uppercase
  display-mobile:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 24px
    fontWeight: 600
    lineHeight: 28.8px
    textTransform: uppercase
  heading:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 30px
    fontWeight: 500
    lineHeight: 30px
  body:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 32px
  button:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 30.6px
    textTransform: uppercase
  nav:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 10px
  xl: 20px
  pill: 100px
spacing:
  s1: 3px
  s2: 4.8px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 13px
  s8: 15px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 16px 18px
    height: 63px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.lg}"
    padding: 20px 15px
---

## Overview

Asia Biomass (ABM) presents itself in Thai first: the measured page is `lang="th"` and the document title is "ผู้จำหน่ายและจัดส่งเชื้อเพลิงชีวมวล - เอเชีย ไบโอแมส จำกัด (มหาชน)" (a supplier and deliverer of biomass fuel, a public company). The home page opens on a thin green utility bar carrying social icons, the sales phone number 0-2415-0054 and the English / ไทย language switch, followed by a white header with the ABM logo and a single row of dropdown navigation items (about ABM, investor relations, products and services, sustainability, media, careers, contact). Below sits a full-bleed hero photograph that blends three fuel materials — green pellets, brown wood chips and dark shells — across a diagonal green wash, with the English headline "ENERGIZING A GREENER FUTURE" and the tagline "Your reliable biomass partner".

Under the hero the page turns into an ordinary corporate-site rhythm: a green uppercase company-name heading, a one-line description, and a horizontal carousel of image cards (history, vision and mission, board of directors, management structure) whose titles are set in the brand green. A brown button labelled "ดูผลิตภัณฑ์ทั้งหมด" (view all products) closes the product block. The mood is credible and industrial-agricultural rather than decorative: real photography of the product dominates, and the interface chrome stays plain.

## Colors

The palette is small and measured from the live page. `canvas` is #ffffff and covers the largest share of painted area; `surface-tint` #f8fcff is the second-largest background and marks alternate sections. `brand-green` #1e8b44 is both a background (the top utility bar and the investor stock-price card) and the text color of the heading and card titles; it is the second most-read text color after `ink`. `ink` #666666 is the most-read text color and is used for the body copy and navigation links. `ink-strong` #333333 appears on card text, and `ink-scrim` #00000099 (semi-transparent black) appears on a small amount of text. `green-bright` #21ba45 is a brighter green measured on a very small number of characters.

`primary` #6d3c18 is the fill of every detected call-to-action button ("หน้าหลักนักลงทุนสัมพันธ์", "ดูผลิตภัณฑ์ทั้งหมด", "ดูทั้งหมด", "อ่านต่อ") with white `on-primary` text. The brown therefore carries action while the green carries identity; the two are never swapped in the measured buttons. The stylesheet also exposes a plugin variable `--mec-color-skin` set to #1e8b44, matching the brand green, and a cyan #40d9f1 used by an events-calendar plugin; the cyan was not measured on screen and is not part of the visible palette. Hero text is white over the photograph.

## Typography

One family does nearly all the work: Prompt, loaded at weights 500 and 600 (plus Noto Sans Thai at 500 for part of the text), with the fallback stack Helvetica, Arial, Lucida, sans-serif. Prompt carries 5,118 measured characters against 413 for Noto Sans Thai. Prompt contains both Thai and Latin glyphs, so Thai headings and the English hero line share a voice.

The scale on desktop is: `display` 36px / 50.4px, weight 600, uppercase, used for the section heading (rendered in the brand green); `heading` 30px / 30px, weight 500; `body` 20px / 32px, weight 500; `button` 18px / 30.6px, weight 500, uppercase; `nav` 14px / 14px, weight 500. Body copy that is not a hero statement is mostly 14px and 17px by character count (the two most frequent sizes). The default weight is 500 rather than 400 — 5,428 characters at 500 against 111 at 600 — which gives Thai text a slightly heavy, legible texture. The uppercase transform only matters for Latin text; it has no visible effect on Thai script. No custom letter-spacing was recorded.

## Layout

The desktop capture is 1280px wide with a measured scroll height of 4,960px. The header is 120px tall: a green utility strip above a white logo-and-menu row. Content blocks run edge to edge; the hero image bleeds to the viewport and the carousel of cards starts at the left edge of the viewport. Spacing values in the measured set are 3, 4.8, 5, 6, 8, 10, 13, 15, 16 and 18px for small gaps, and the most frequent padding is 30px (77 occurrences) followed by 16px and 20px. Sections alternate between the white canvas and the pale `surface-tint`. The measured grid is not documented by the brand; the capture shows four equal image cards per carousel row at the 1280px width.

## Elevation & Depth

Depth is shallow. The recorded box shadows are `rgba(0,0,0,0.09) 0px 2px 9px 0px` (24 occurrences), `rgba(0,0,0,0.2) 0px -4px 18px 0px` (6), `rgba(0,0,0,0.1) 0px 2px 8px 0px` (4, on the white info cards), and singletons such as `rgba(0,0,0,0.25) 0px 10px 20px 0px`. The white image cards float over the page with the 0.1-alpha shadow; the brown buttons and the green bar carry no shadow. Hover on header links in the utility bar changes opacity to about 0.7 (measured 0.701036) with no color or shadow change.

## Shapes

Corners are small and slightly varied: 3px (`xs`, small "อ่านต่อ" buttons), 4px (`sm`, the most common radius, 34 occurrences), 5px (`md`, the large buttons), 10px (`lg`, cards and the stock-price panel), 20px (`xl`) and 100px (`pill`, 12 occurrences). The primary button uses 5px on desktop and 4px in the mobile measurement. Images in the carousel are square-cornered at the top of each card; card corners follow the 10px value.

## Components

**Primary button** — brown `primary` fill, white 18px uppercase Prompt 500 label, 16px 18px padding, 63px tall, 5px radius. A smaller variant, "อ่านต่อ", is 16px type with 4.8px 16px padding, 37px tall and a 3px radius.

**Info card** — white background, #333333 text at 20px, 10px radius, 20px 15px padding and the 0.1-alpha 2px 8px shadow, with a photo above and a green centered title below (for example "ความเป็นมา", "วิสัยทัศน์และพันธกิจ").

**Stock-price card** — green `brand-green` fill, white text, 10px radius, 30px padding, showing the share ticker ABM and the last price (฿0.75 at capture time).

**Header** — white, 120px tall, 14px Prompt 500 links with chevrons for dropdowns, over a green utility bar with white icons.

## Design System Architecture

No public design system, brand guideline or token package was found: the homepage links no such resource and no search was run. The de-facto system is a WordPress theme with plugins — the shipped CSS exposes `--wp--preset--*` variables, Font Awesome, an events-calendar plugin (`--mec-*`), a calendar library (`--fc-*`) and Swiper (`--swiper-theme-color` #007aff). Those plugin variables are defaults of third-party code and are not brand tokens. The brand's own choices are visible only in computed styles: Prompt as the single text family, #1e8b44 as identity green, #6d3c18 as button brown, and a handful of radii and shadows. Rebuilders should treat the measured values in this file as the system.

## Do's and Don'ts

Do use `brand-green` for headings, the utility bar and data panels, and `primary` brown for buttons only. Do keep Prompt at weight 500 as the default and 600 for headline emphasis. Do pair photography of the actual product (pellets, chips, shells) with a diagonal green wash for hero text. Do keep corners between 3px and 10px, with pills reserved for small chips.

Don't use the plugin cyan #40d9f1 or Swiper blue #007aff as brand colors. Don't mix the green and the brown on the same button. Don't add heavy shadows; the measured shadows are 0.09 to 0.25 alpha. Don't set Thai text at weight 400 as a default; the page's default is 500.

## Responsive Behavior

Measured at a 390px viewport: the section heading drops from 36px to 24px (line height 28.8px, weight 600, uppercase), the large "ABM" heading stays 30px, body text drops from 20px to 16px (line height 25.6px), the primary button drops to 14px type with 16px 14px padding, 56px height and a 4px radius, and the header measures 75px tall at 390px wide with its text in Noto Sans Thai 500 at 14px. The most frequent mobile font sizes are 14px, 17px and 16px. How the navigation collapses, how the carousel behaves and any breakpoints were not measured.

## Iteration Guide

Start from the tokens in the frontmatter and change one role at a time. To add a page, keep the green utility bar and white header, an uppercase brand-green Prompt 600 section heading, and a brown button below each block. When adding imagery, choose product photographs and keep captions in `brand-green`. Verify any new color against the measured set before adding it, and prefer 3, 4, 5 or 10px radii. Anything not in this file — dark mode, hover states beyond the 0.7 opacity change, form inputs — was not measured and should be measured before being documented.
