---
version: alpha
name: "SRT Electrified Train Co., Ltd. (SRTET)"
category: "Thai Brands"
description: "SRTET (srtet.co.th), operator site for the SRT Red Line commuter trains and the Airport Rail Link: psl_kittithada Thai type at 21.6px body and 36px/700 titles, a #bc1320 red nav bar and accents on a white canvas, a station-line route map, #333333 ink and mostly square corners."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#bc1320"
  on-primary: "#ffffff"
  surface-2: "#000000"
  surface-3: "#f5f5f5"
  ink-2: "#212529"
  ink-3: "#777675"
  ink-5: "#bc1320"
  ink-6: "#131313"
  text-input-border: "#ced4da"
typography:
  display:
    fontFamily: psl_kittithada, Tahoma, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 43.2px
  heading:
    fontFamily: psl_kittithada, Tahoma, sans-serif
    fontSize: 23.4px
    fontWeight: 700
    lineHeight: 27px
  body:
    fontFamily: psl_kittithada, Tahoma, sans-serif
    fontSize: 21.6px
    fontWeight: 700
    lineHeight: 27px
  nav:
    fontFamily: psl_kittithada, Tahoma, sans-serif
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 21.6px
rounded:
  xs: 3.6px
  sm: 8px
  md: 10px
  lg: 15px
  xl: 25px
  2xl: 30px
  pill: 9999px
spacing:
  s1: 3.6px
  s2: 4.32px
  s3: 5px
  s4: 5.4px
  s5: 7.2px
  s6: 10px
  s7: 10.8px
  s8: 14.4px
  s9: 15px
  s10: 20px
components:
  link:
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-5}"
    typography: "{typography.body}"
    padding: 0px 35px 0px 14.4px
    height: 35px
    borderColor: "{colors.text-input-border}"
  footer:
    textColor: "{colors.ink}"
---

# SRT Electrified Train Co., Ltd. (SRTET)

The queued brand is "SRT Electrified Train (Airport Rail Link)" at `https://www.srtet.co.th`. The measured page, `https://www.srtet.co.th/th`, is titled "รถไฟฟ้าสายสีแดง" (Red Line electric train), Thai (`lang` th), 3,130px tall with 615 visible elements. The logo reads "SRTET" with "S.R.T. Electrified Train Company Limited", the footer address is "บริษัท รถไฟฟ้า ร.ฟ.ท. จำกัด", and the copyright line reads "Copyright © 2022, AIRPORT RAIL LINK". The site is the company's own, so the DESIGN.md is named after the company, and it documents the Thai home page. The first capture showed a black mourning splash with a grayscale tribute overlay, so the page was re-extracted once after that was gone, using the repo's batch extractor; the figures here come from the second extraction, in which the cookie dialog is the only overlay.

## Overview

A public-transport information portal: a red navigation bar under a white utility strip, a promotional banner carousel (in the capture a red campaign graphic with a train, a fare of 40 and 30 baht), tabbed access to the route map and the timetable, a diagram of the Red Line with minutes between stations, news cards, a safety-and-service block with line icons, and a footer with the company address, call centre 1690 and partner logos. Red `#bc1320` is the one brand color; everything else is neutral. The tone is official and informational; labels are short Thai phrases, dates are Thai Buddhist-era dates ("25 กันยายน 2569").

## Colors

Measured background areas: white `#ffffff` (1,924), `#9291901a` (1,139, a faint grey tint behind the route section), `#000000` (1,024, the footer bar), `#f5f5f5` (161), red `#bc1320` (133), `#c1c1c1` (89, footer accordions), `#131313` (57), `#333333` (12), `#d05a63` (4). Text by characters: `#333333` (1,448), `#212529` (1,106), `#777675` (356), `#ffffff` (323), `#bc1320` (313), `#131313` (44).

- `canvas` `#ffffff`; `surface-2` `#000000` footer copyright bar; `surface-3` `#f5f5f5` panels.
- `ink` `#333333` headings and nav; `ink-2` `#212529` the h1 and base text; `ink-3` `#777675` secondary body; `ink-6` `#131313`.
- `primary` `#bc1320`: brand red. It is the nav bar fill, the text color of the active news tab and of the search input text (`ink-5` carries the same value), the border color on 10 elements, and the fill of the mobile pass's primary button (`บันทึกข้อมูล`, white text). `on-primary` `#ffffff`.
- `text-input-border` `#ced4da`.

The generated file had assigned `primary` to `#0d6efd`, which is the Bootstrap default link color (the root declares `--bs-primary: #0d6efd`); that is a framework default, not a brand color, so it was replaced by the measured red. The Bootstrap palette in `:root` (`--bs-yellow`, `--bs-info`, `--bs-teal` and others) is likewise not used.

## Typography

One family: psl_kittithada (regular and bold; a Thai font) with Tahoma and sans-serif fallbacks, covering all 3,605 measured characters. Weights: 700 (2,647) and 400 (958): the page is mostly bold.

- `display`: 36px, weight 700, line-height 43.2px (h1 "เส้นทางรถไฟฟ้าชานเมืองสายสีแดง").
- `heading`: 23.4px, 700, line-height 27px (news titles).
- `body`: 21.6px, 700, line-height 27px.
- `nav`: 14.4px, 400, line-height 21.6px; the header bar's labels measure 19.8px at weight 700.

Letter-spacing is `normal`. psl_kittithada is a commercial Thai typeface; Tahoma is the site's declared fallback.

## Layout

Bootstrap-based container, with the header 149px tall (utility strip with A-, A, A+ text-size controls, a search field, EN, "Call Center 1690" and social icons, then the red bar). Paddings: 10px (47 elements), 10.8px (24), 20px (23), 15px (20), 5px (18), 14.4px (17). The route section is a white rounded panel with a drop shadow containing a horizontal line with circle stations, minute labels between them and transport icons above and below; a legend in four columns follows. News is a three-card carousel with arrow controls and tab links ("ข่าวสารและการประชาสัมพันธ์", "ภาพกิจกรรม", "กิจกรรมส่งเสริมการตลาด") with a "เพิ่มเติม" link and a chevron.

The route diagram labels the terminal stations of the Red Line in Thai and shows interchange symbols for the Blue, Purple, Pink and Yellow metro lines, a train symbol for long-distance rail, bus symbols, an airplane symbol at Don Mueang airport, and a parking symbol. Walking times appear between stations in minutes (for example 2, 3 and 4 minutes). Under the news block a heading, ความปลอดภัยและการบริการ (safety and service), is underlined with a short red bar and followed by two outlined icons with captions about passenger conduct and the large-luggage area on trains. The footer lists the company address, the email and call-centre number, a follower counter, accessibility badges (W3C CSS, WCAG 2.0 level AA) and partner logos in a carousel.

## Elevation & Depth

Shadows measured: `rgba(0, 0, 0, 0.15) 0px 3px 6px 0px` (27 elements, cards), `rgba(0, 0, 0, 0.2) 0px 0px 18px 0px` (1), `rgba(0, 0, 0, 0.1) 0px 10px 15px 0px` (1), and `rgb(188, 19, 32) 0px 0px 0px 52.0457px inset` (3 elements), a red inset fill used on tab-like controls.

## Shapes

Radii measured: `50%` (14 elements, the circular station nodes and icons), `15px` (8), `3.6px 3.6px 0px 0px` (3), `30px` (3), `8px 8px 0px 0px` (1), `8px` (1). The route panel is rounded; the nav bar, inputs and buttons compute to `0px`. Tokens: `xs 3.6px`, `sm 8px`, `md 10px`, `lg 15px`, `xl 25px`, `2xl 30px`, `pill 9999px`.

## Components

- **Red navigation bar**: `#bc1320`, white bold labels in two rows, items separated by thin dividers.
- **Search input**: white, `1px solid #ced4da`, 35px high, padding `0px 35px 0px 14.4px`, 21.6px bold text in `#bc1320`, radius 0.
- **Primary button (mobile pass)**: red `#bc1320`, white 19.8px/700 text, padding `5.4px 28.8px`, 48px high, radius 0.
- **Route map**: circle stations (50% radius) joined by a thick line; legend uses colored line symbols.
- **News card**: image on a `#f5f5f5` panel, date and two-line Thai title in a bordered box; the selected card has a red border and a red pointer.
- **Footer**: white block with a red rule, then a black bar with the copyright line.

## Design System Architecture

No official design system or brand guideline was found on the opened page; `_research` records none. The site is a Bootstrap 5 site (`--bs-*` variables in `:root`) with CKEditor content styles (`--ck-*` variables) and bootstrap-icons; brand styling is applied through psl_kittithada and `#bc1320`.

## Do's and Don'ts

Do use `#bc1320` for the nav bar, active states and primary buttons. Do set Thai text in psl_kittithada at 21.6px bold for body and 23.4px for titles. Do show routes as line-and-station diagrams. Do keep inputs and buttons square and cards lightly shadowed.

Don't use Bootstrap blue `#0d6efd` as a brand color. Don't use grey tint areas for text. Don't introduce a second accent; the line legend colors belong to the route map only. Don't present the cookie dialog as brand UI.

## Responsive Behavior

Mobile pass: h1 36px/700, 43.2px line-height (same as desktop); h2 23.4px/700; body 21.6px/700, 27px line-height; primary button as above. Mobile font sizes by characters: 23.4px (1,258), 19.8px (1,073), 21.6px (466), 0px (51), 18px (35). Navigation layout, breakpoints and column counts were not measured.

## Iteration Guide

1. White canvas, ink `#333333`, a single red `#bc1320`.
2. psl_kittithada bold; 36px titles, 23.4px news titles, 21.6px body.
3. Red bar navigation, bordered news cards, route-line diagram.
4. Verify with `node web/scripts/verify-designs.mjs --slug=srt-electrified-train-airport-rail-link`.
