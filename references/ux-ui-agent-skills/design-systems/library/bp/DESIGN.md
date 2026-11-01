---
version: alpha
name: bp
category: "Energy & Climate"
description: "bp global home page (bp.com) measured 2026-10-09: warm off-white surfaces (#fbfcf8, #fcfcfc) with olive-dark text (#494736, #121000), bp green #007f00 pill buttons at 800px radius and 14px type, 16px-rounded image tiles, a floating rounded header, and a single-weight bpSans at 400 from 16px body up to a 48px headline."
colors:
  canvas: "#ffffff"
  page-largest: "#fbfcf8"
  ink: "#494736"
  primary: "#007f00"
  on-primary: "#ffffff"
  surface-soft: "#fcfcfc"
  ink-strong: "#121000"
  ink-muted: "#686655"
  hairline: "#bbbcaa"
  card-border: "#828474"
typography:
  display:
    fontFamily: >-
      bpSans, Roboto, Roboto, "Roboto Fallback", Arial, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji", Roboto, "Roboto Fallback", Arial, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 52px
  display-mobile:
    fontFamily: >-
      bpSans, Roboto, Roboto, "Roboto Fallback", Arial, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji", Roboto, "Roboto Fallback", Arial, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 31px
    fontWeight: 400
    lineHeight: 43px
  heading:
    fontFamily: >-
      bpSans, Roboto, Roboto, "Roboto Fallback", Arial, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji", Roboto, "Roboto Fallback", Arial, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 39px
    fontWeight: 400
    lineHeight: 48px
  subheading:
    fontFamily: >-
      bpSans, Roboto, Roboto, "Roboto Fallback", Arial, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji", Roboto, "Roboto Fallback", Arial, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  body:
    fontFamily: >-
      bpSans, Roboto, Roboto, "Roboto Fallback", Arial, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji", Roboto, "Roboto Fallback", Arial, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: >-
      bpSans, Roboto, Roboto, "Roboto Fallback", Arial, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji", Roboto, "Roboto Fallback", Arial, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 12px
  sm: 16px
  md: 32px
  lg: 36px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 14px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 25px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10px 12px 10px 25px
    height: 46px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10px 12px 10px 25px
    height: 46px
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10px 12px 10px 25px
  nav:
    textColor: "{colors.ink-strong}"
    padding: 0px 24px 0px 16px
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 24px
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-strong}"
    padding: 32px 0px
---

## Overview

The measured page is the bp global home page, `https://www.bp.com/` (title "bp global", `lang` en). It presents an energy major through large documentary photography, soft off-white surfaces and a single green accent. The capture shows a floating, fully rounded off-white header bar over a full-bleed hero photograph: the green and yellow bp sunburst logo, four menu items with chevrons (About us, Products and services, Investors, Press and publications), and on the right Careers (with an external-link arrow), Contact us, Global with a globe icon, and a search icon. The hero is a carousel with circular previous and next buttons and a pill-shaped pager whose active segment is bright lime. Under the photo, on a pale panel, a large headline sits beside a short description and a green pill button "Read more" with an arrow.

Further down: a bordered intro card with a paragraph that begins "bp is a global integrated oil and gas company"; four rounded image tiles each with a plain 24px caption (Latest news, Investors, Sustainability, Careers with an arrow); a full-bleed aerial offshore photograph carrying an "Our strategy" panel with a "Find out more" green pill; and an "Investors" band with a share-price card (GBp price with a change figure) and image tiles. Copy is plain and corporate: "Read more", "Find out more", "Get in touch", "Sign up for news", "Jobs at bp".

The measurement saw 611 visible elements at 1,280px with a 4,129px scroll height. The overall impression is calm and open: no heavy weights, no gradients, generous white space, round shapes, and photography of people at work supplying the energy.

## Colors

Colors are warm neutrals plus one green.

- **Canvas `#ffffff`** and **surface `#fbfcf8`**: `#fbfcf8` is the largest measured background area (weight 1,943) and is the footer fill; `#fcfcfc` is the next (1,044); `#ffffff` (385) fills cards and the intro panel. `#f7f8f0` (96) and `#f1f2e9` (94) are further pale tints.
- **Primary green `#007f00`** fills the pill buttons (area weight 34) and colors 40 characters of text; the root variables name it `--bp-green-rest: #007f00` and `--btn-brand-primary-bg: #007f00`. Text on it is white (`#ffffff`).
- **Ink `#494736`** is the most-read text color (1,409 characters) and the paragraph color; **strong ink `#121000`** (759 characters) is the heading and navigation color and the body role color; **muted `#686655`** (344) colors the small 13px labels.
- **Hairline `#bbbcaa`** and **card border `#828474`** are the measured border colors (4 uses each); `#686655` also appears as a border.
- Other measured backgrounds: a dark green `#003600` (area weight 122) and a bright lime `#ccff00` (weight 2, the active pager segment; the root variable `--bp-bright-green-rest` is `#ccff00`).

The `:root` exposes 400 custom properties, most of them from component libraries (Bootstrap `--bs-*`, range-slider, flatpickr and recharts variables). The bp-specific ones include `--bp-green-rest`, `--bp-green-900: #006000`, `--bp-bright-green-500: #ccff00`, `--bp-bright-green-700: #b1d400`, `--bp-bright-hover-light: #004f00`, `--bp-yellow-orange-600: #edac1a`, `--text-link: #002bbc`, `--btn-standard-primary-bg: #404040` and alpha text tokens such as `--text-default-color: rgba(17,17,17,0.84)`. Those alpha values and `#002bbc` were not matched to rendered text on the home page, so they are not tokens.

## Typography

One family is measured: **bpSans** (2,629 of 2,629 characters), loaded as a single `normal normal` face with Roboto as the first fallback in the stack (`bpSans, Roboto, Roboto Fallback, Arial, -apple-system, system-ui, Segoe UI, Helvetica Neue, Noto Sans, sans-serif` followed by the emoji faces). Every measured character is weight 400; there is no bold and no italic in use. No license page for bpSans was opened, so treat it as proprietary.

| Role | Size / line height | Weight |
| --- | --- | --- |
| Display (h1) | 48px / 52px (31px / 43px at 390px) | 400 |
| Heading (h2) | 39px / 48px | 400 |
| Subheading (h3) | 24px / 32px | 400 |
| Body | 16px / 24px | 400 |
| Button | 14px / 20px | 400 |

The most-read sizes by characters are 16px (937), 18px (570), 13px (350, tracked at 0.2px), 24px (298), 39px (151), 48px (140), 14px (120), 20px (47) and 31px (12). The only measured letter spacing is 0.2px on 13px text (350 characters) plus 0.15px on a few 16px and 0px runs. Hierarchy comes from size and color, not weight: `#121000` for headings and navigation, `#494736` for reading text, `#686655` for small labels.

**Font substitutes.** If bpSans is unavailable, the site's own stack falls back to Roboto; any neutral humanist sans at a single regular weight reproduces the look, and a bold weight should be avoided to stay faithful.

## Layout

The page uses sections that alternate between full-bleed photography and contained cards. The measured paddings are 10px (11 times), 25px (11), 64px (9), 24px (9), 32px (7), 4px (2) and 16px (1); measured gaps are 8px (24 times), 32px (21), 6px (10), 16px (8), 40px (7), 4px (6), 14px, 30px, 50px and 24px (2 each) and 20px (1). Card padding measured 24px; footer padding 32px top and bottom; the header padding `0 24px 0 16px`.

Content is arranged as a four-column grid of image tiles on desktop, a two-column "headline plus description" row beneath the hero, and a three-column Investors band. The root variables expose a desktop radius scale (`--border-radius-desktop-lg: 16px`, `--border-radius-desktop-xxl: 36px`). Container widths and breakpoints were not measured.

## Elevation & Depth

Resting elevation is flat: no box shadow was measured on visible elements. Depth is built from a floating header bar over photography, from 1px card borders (`#828474` on the intro card) and from tonal surfaces (`#fbfcf8`, `#fcfcfc`, `#ffffff`). The stylesheet declares a brand-button focus shadow `0 3px 4px 0 rgba(17,17,17,0.22)` (`--btn-brand-primary-focus-shadow`), a `0 0 4px 0 #304ffe` ring (7 declarations) and larger overlay shadows such as `0 1.25rem 1.875rem rgba(17,17,17,0.6)`; where each applies on this page was not measured. Hover on a green "Read more" pill was sampled: the fill and border stayed `rgb(0, 127, 0)` and the text stayed white while the element height changed from 46px to 44px.

## Shapes

Round shapes are the system. Measured radii: 16px (27 elements; image tiles and cards), 50% (13; circular carousel and pager buttons), 800px (13; the pill buttons), 12px (7), 36px (1), 32px (1), plus `calc(0% + 15px)` and `calc(0% + 100px)` once each and `12px 0 0 12px` once. The tokens are `xs` 12px, `sm` 16px, `md` 32px, `lg` 36px and `pill` 9999px.

Buttons are fully rounded pills at 800px, the header is a rounded floating bar, image tiles and the intro card use 16px corners, and the pager is a pill. Corners are never square in the interface. Arrows inside buttons are thin outline glyphs (a right arrow in the pill, an up-right arrow for external links).

## Components

**Primary button.** Green `#007f00` fill and border, white text, bpSans 14px/20px weight 400, 800px radius, padding `10px 12px 10px 25px` (the right padding leaves room for the arrow), 46px high, with an arrow glyph. The same style is used for "Read more" and "Find out more"; at the 390px mobile pass the button measured 350 by 46px with identical radius and padding.

**Header.** A rounded off-white bar floating over the hero, with the sunburst logo, chevron-bearing menu items, Careers with an external-link icon, Contact us, a Global selector and a search icon. The nav block measured padding `0 24px 0 16px` and `#121000` text.

**Intro card.** White fill, 1px `#828474` border, 16px radius, 24px padding, 16px/24px paragraph in `#494736`.

**Image tile.** A photograph with 16px corners above a 24px caption in `#121000`.

**Strategy panel.** A pale panel with 16px corners laid over a full-bleed photograph, a 24px title, a short paragraph and a green pill button.

**Carousel controls.** Circular outlined arrow buttons (50% radius), a pill pager with a lime active segment and a pause button.

**Footer.** `#fbfcf8` fill, `#121000` text, 32px vertical padding; the text begins "Get in touch", "Sign up for news", "Contact us", "Jobs at bp", "bp wor...".

No text input was detected, so no input token is declared.

## Design System Architecture

No public bp design system or brand-guideline page was reachable during this measurement. `https://www.bp.com/` and `https://www.bp.com/en/global/corporate.html` returned HTTP 403 to non-browser requests (recorded verbatim in SOURCES.json), so the page was measured only through the real-browser extraction. No design-system or brand-guideline link was visible in that capture, whose header offers About us, Products and services, Investors, Press and publications, Careers, Contact us and Global.

The de-facto system is visible in the rendered stylesheet. The extraction recorded 400 root custom properties, built from three layers: bp brand variables (`--bp-green-rest`, `--bp-bright-green-*`, `--bp-yellow-orange-600`), semantic component variables with a consistent pattern (`--btn-brand-primary-bg`, `--btn-standard-primary-bg`, `--btn-brand-primary-focus-shadow`, `--text-brand-primary-color`, `--bg-l1-d4`, `--text-default-color`), and third-party library defaults (Bootstrap `--bs-*`, recharts, flatpickr, range slider). The font declarations list Roboto, Roboto Fallback and bpSans only.

## Do's and Don'ts

**Do**
- Use bpSans at weight 400 only, with size and color for hierarchy.
- Fill primary actions with `#007f00`, white 14px text, an 800px radius and a trailing arrow.
- Keep surfaces warm off-white (`#fbfcf8`, `#fcfcfc`) and text in `#494736` and `#121000`.
- Round everything: 16px for tiles and cards, 50% for circular controls, a pill for the header and pager.
- Let photographs of people and plants carry the page.

**Don't**
- Don't introduce bold weights; none were measured.
- Don't use the root `--text-link: #002bbc` as an accent on this page; it was not measured on rendered text.
- Don't give buttons square corners or visible resting shadows.
- Don't use the lime `#ccff00` for text or large fills; it was measured only as the pager's active segment.

## Responsive Behavior

One mobile pass was recorded at 390px. Measured values: the h1 becomes 31px/43px weight 400 (from 48px/52px) and measured 350px wide by 129px high; the lead paragraph is 16px/24px, 300px wide and 336px high; the green pill button is 14px/20px, 350 by 46px, 800px radius, padding `10px 12px 10px 25px`; no h2 or nav was captured at that width. The most-read mobile sizes are 16px (666 characters), 18px (570), 24px (452), 13px (290), 31px (149) and 14px (76). The mobile layout of the header, tiles and footer was not measured.

## Iteration Guide

1. Set canvas `#ffffff`, surfaces `#fbfcf8` and `#fcfcfc`, ink `#494736`, strong ink `#121000`, primary `#007f00`.
2. Use bpSans (Roboto fallback) at 400 only: 48/39/24/16/14px with the measured line heights.
3. Build the floating rounded header, then a full-bleed carousel hero with a lime pill pager.
4. Add 16px-rounded image tiles and bordered cards, and green 800px pill buttons with arrows.
5. Check mobile only against the measured values: 31px headline, 16px body, 350 by 46px button.
6. Measure new components first with `node web/scripts/extract-tokens.mjs --slug=bp--<page> --url=<url> --force --no-motion`.
