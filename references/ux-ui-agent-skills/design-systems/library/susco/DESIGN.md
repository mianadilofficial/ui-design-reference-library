---
version: alpha
name: SUSCO
category: "Thai Brands"
description: "SUSCO Public Company Limited (susco.co.th), a Thai fuel-station operator on Bootstrap 5: psl_display_pro Thai display type at 77px and 28.8px body, yellow #ffdc00 and blue #0079c2 brand colors, translucent charcoal #3d4049 price-board card with 15px radius."
colors:
  canvas: "#ffffff"
  page-body: "#eeeeee"
  ink: "#000000"
  primary: "#ffdc00"
  charcoal: "#353840"
  ink-muted: "#b2b2b2"
  ink-grey: "#626262"
  brand-blue: "#0079c2"
  accent-yellow-bright: "#ffe81f"
  brand-indigo: "#272a76"
  hairline: "#d5d5d5"
  link: "#7d7d7d"
  card-bg: "#3d4049c9"
typography:
  display:
    fontFamily: psl_display_pro
    fontSize: 77px
    fontWeight: 700
    lineHeight: 77px
  display-mobile:
    fontFamily: psl_display_pro
    fontSize: 50px
    fontWeight: 700
    lineHeight: 50px
  body:
    fontFamily: psl_display_pro
    fontSize: 28.8px
    fontWeight: 400
    lineHeight: 28.8px
  nav:
    fontFamily: psl_display_pro
    fontSize: 24px
    fontWeight: 700
    lineHeight: 24px
rounded:
  xs: 5px
  sm: 8px
  md: 15px
  lg: 50px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 20px
  s9: 23px
  s10: 25px
components:
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    boxShadow: rgba(140, 140, 140, 0.18) 0px 1.1px 5px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    padding: 20px 20px 13px
---

## Overview

SUSCO's homepage (title ":: SUSCO PUBLIC COMPANY LIMITED :: บริษัท ซัสโก้ จำกัด (มหาชน) :: HOME", final URL /homepage.asp) is the Thai site of a fuel-station and fuel-distribution company. The capture shows a white header with the CAC "change agent" badge and the SUSCO logo (a blue drop in a red ring on yellow, with italic blue lettering), a menu in bold Thai (หน้าหลัก, เกี่ยวกับซัสโก้, ผลิตภัณฑ์และบริการ, ส่งเสริมการขาย, นักลงทุนสัมพันธ์), and a hero photograph of a station with a translucent dark price board listing eight fuel grades and today's prices. A right-hand rail of social icons (LINE, Facebook, TikTok, YouTube) and a "สมัครออนไลน์ ซัสโก้ สมาร์ท เมมเบอร์" tab floats over the hero, and two small video popups with close buttons were open; these are overlays and excluded.

Below: a strip "ร้านค้าที่ให้บริการในซัสโก้" with partner logos, a company-story section over a station and tower photograph with a quoted blue heading "บริษัท ซัสโก้ จำกัด (มหาชน)" and a vertical blue rule, a "น้ำมันหมดใช่ไหม? ลองค้นหา สถานีบริการน้ำมันซัสโก้ ที่อยู่ใกล้คุณสิ" call-out with the fuel-grade badges, and a station map with two underlined tabs (search by location, search by service). Measured colors: `{colors.canvas}` #ffffff, `{colors.ink}` #000000, `{colors.primary}` #ffdc00, `{colors.brand-blue}` #0079c2 and `{colors.charcoal}` #353840. The voice is friendly and conversational, using direct questions ("น้ำมันหมดใช่ไหม?").

Imagery and art direction in the capture: photography is bright and outdoors, with blue sky, a SUSCO canopy and a tall roadside sign in yellow, blue and red; the hero uses a blurred, softly desaturated version of the station photograph so the price board reads clearly; the story section overlays a left text column on a photograph of the roadside sign and glass towers, with the quoted heading in blue and body copy in dark text. The fuel-grade badges are glossy, italic, pill-shaped labels in diesel orange-yellow, red, yellow, orange, green and blue, repeated in a horizontal row above the map. The partner strip is a left-aligned bold label with a yellow vertical rule beside four logo tiles (a small illustrated logo, an orange shopping bag, a red "Tops daily" tile, a red oval "Wizard" logo). The map section is framed by two silver pump-nozzle illustrations at the left and right edges and a centered, large two-line Thai question heading, with the word "ซัสโก้" in blue inside the black heading text.

## Colors

- **`{colors.primary}` #ffdc00:** SUSCO yellow, measured as the hero heading color ("สถานี บริการ น้ำมันซัสโก้", 33 characters) and a related #ffe81f (`{colors.accent-yellow-bright}`, 59 characters). The extractor found no button, so `primary` documents the brand yellow rather than a button fill.
- **`{colors.brand-blue}` #0079c2** (80 characters of text; #0072be and #165ea1 also appear as small text and background values): the blue of the headings and the logo lettering. **`{colors.brand-indigo}` #272a76** is the color of the "SUSCO SQUARE" line measured in the mobile pass.
- **Neutrals:** `{colors.canvas}` #ffffff, `{colors.page-body}` #eeeeee (the page body background), `{colors.ink}` #000000 (1,122 characters), `{colors.ink-muted}` #b2b2b2 (333, text on dark panels), `{colors.ink-grey}` #626262 (151), `{colors.link}` #7d7d7d, `{colors.hairline}` #d5d5d5.
- **Dark surfaces:** `{colors.charcoal}` #353840 (748 area weight) and `{colors.card-bg}` #3d4049c9, the translucent price-board card; #000000 is the largest area weight (1,899) in the extractor's ranking.
- Bootstrap's #0d6efd (20 characters of text) is the framework default link blue and not a brand color; it is dropped.

## Typography

One family, psl_display_pro (2,270 counted characters), a Thai display face loaded in regular and bold.

- **Display `{typography.display}`:** 77px, weight 700, line-height 77px, yellow on the hero. The mobile pass measured the extractor's h1 candidate "SUSCO SQUARE" at 50px with line-height 50px, 390px wide (`display-mobile`).
- **Body `{typography.body}`:** 28.8px, weight 400, line-height 28.8px (584 characters); 22px (533), 23px (309), 23.5px (187), 24px, 28px and 25.6px are the other common sizes. Display sizes counted include 70px, 77px, 92px, 52px, 44px and 42px.
- **Nav `{typography.nav}`:** 24px, weight 700, line-height 24px.
- The face runs large for a given reading size, with line-height equal to the font size.

## Layout

The desktop page is 1280px wide and 4,703px tall. The hero is a full-width photograph with the price board placed at the left; sections below alternate full-bleed photography with white bands, then the map. Spacing values measured: 3, 5, 7, 8, 10, 12, 15, 20, 23 and 25px. The card token has padding 20px 20px 13px.

## Elevation & Depth

The header carries a light shadow, `rgba(140, 140, 140, 0.18) 0px 1.1px 5px 0px`. The price board is a translucent dark card (`#3d4049c9`) over the hero photograph, which gives a glass-like layer; a darker translucent scrim (`#1f1f1f40`) was also measured as a background.

## Shapes

Radii measured: 5px, 8px, 15px and 50px; close buttons in the popups are circles (100%). The price-board card uses 15px (`{rounded.md}`); the 50px value is `{rounded.lg}`. No button radius was extracted.

## Components

- **Price-board card (`card`):** `{colors.card-bg}` fill, white text, 15px radius, padding 20px 20px 13px; rows of colored fuel-grade badges with prices right-aligned, and a footnote "* ราคานี้ไม่รวมภาษีบำรุงท้องที่".
- **Nav / nav-link:** white header with a soft shadow, psl_display_pro 24px bold labels with dropdown chevrons.
- **Link:** `{colors.link}` #7d7d7d at the body size.
- **Fuel-grade badges:** gradient pill badges for diesel, B20 diesel, gasoline 95, gasohol 95, 91 and E20, LPG and NGV in their own colors (they appear on the board and again in the station-finder call-out); no numeric tokens were extracted.
- **Tabs:** blue text with a blue underline for the active tab on the map.
- **Popups and social rail:** excluded.

## Design System Architecture

No public design system or brand guideline was found, and none was searched for. The page uses Bootstrap 5: the root variables are `--bs-*` (for example `--bs-primary` #0d6efd, `--bs-border-color` #dee2e6, `--bs-border-radius-2xl` 2rem). Those framework values were not found on rendered brand elements and are not tokens. The brand colors were read from the hero, headings and logo.

## Do's and Don'ts

- Do use yellow `{colors.primary}` for display headings over photography and blue `{colors.brand-blue}` for headings on white.
- Do place information on translucent dark cards with white text.
- Do use psl_display_pro at generous sizes with line-height equal to size.
- Don't document the video popups, the floating social rail or the cookie card as brand components.
- Don't use Bootstrap's blue as a brand color.
- Don't add button styles that were not measured.

## Responsive Behavior

Measured at 390px: the h1 candidate "SUSCO SQUARE" is 50px bold with line-height 50px, in `{colors.brand-indigo}`, 390px wide; body text stays 28.8px with line-height 28.8px. Menu collapse, board placement and grid reflow are not measured.

## Iteration Guide

The steps below rebuild the homepage rhythm from measured parts only: a white header, a photographic hero with one data card, partner logos, a story band, a conversational call-out and a map.

1. Start with white, black text and psl_display_pro.
2. Put hero headings in `{colors.primary}` over photography and use the translucent charcoal card for data.
3. Use `{colors.brand-blue}` for headings on white bands.
4. Keep questions in the call-out headings short and direct, as the site does.
5. Reuse the fuel-grade badge row wherever product types are listed.
6. Run `node web/scripts/verify-designs.mjs --slug=susco`.
