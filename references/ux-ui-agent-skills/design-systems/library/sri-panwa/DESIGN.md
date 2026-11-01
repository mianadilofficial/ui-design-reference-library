---
version: alpha
name: "Sri Panwa"
category: "Thai Brands"
description: "Sri Panwa Phuket (sripanwa.com), a luxury pool-villa hotel and private-residence site: CoreRhino 13px body with 15.6px and 26px uppercase orange #ed591b headings, Gotham Medium 12px navigation, a #1c1c1c header, black panels over full-bleed photography and square corners."
colors:
  canvas: "#1c1c1c"
  ink: "#ffffff"
  primary: "#ed591b"
  on-primary: "#ffffff"
  surface: "#000000"
  surface-3: "#585d5c"
  ink-3: "#555555"
  ink-4: "#636363"
typography:
  display:
    fontFamily: CoreRhino, sans-serif
    fontSize: 15.6px
    fontWeight: 600
    lineHeight: 21.84px
    textTransform: uppercase
  heading:
    fontFamily: CoreRhino, sans-serif
    fontSize: 26px
    fontWeight: 600
    lineHeight: 26px
    textTransform: uppercase
  body:
    fontFamily: CoreRhino, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20.8px
  button:
    fontFamily: "\"Gotham Medium\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 19.2px
    textTransform: uppercase
  nav:
    fontFamily: "\"Gotham Medium\", sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20.8px
  link:
    fontFamily: CoreRhino, sans-serif
    fontSize: 12.48px
    fontWeight: 400
    lineHeight: 19.968px
    textTransform: uppercase
  button-secondary:
    fontFamily: "\"Gotham Medium\", sans-serif"
    fontSize: 10.4px
    fontWeight: 400
    lineHeight: 16.64px
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 7px
  s5: 10px
  s6: 15px
  s7: 30px
  s8: 40px
  s9: 42px
  s10: 50px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 1px 6px
    height: 42px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-3}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    padding: 0px 5px
    height: 42px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink-4}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 7px
---

# Sri Panwa

The measured page is `https://www.sripanwa.com/`, titled "Sri Panwa Phuket - Luxury Pool Villa Hotel & Private Residences", English, 5,600px tall with 336 visible elements. It is a hospitality site built from full-bleed photography and video sections, each carrying a translucent black text panel at the left: a hero panel "WELCOME TO SRI PANWA, PHUKET", then THE HABITA (a "Pool Suites and Penthouses" enclave), then "SRI PANWA'S NEW BABY" with the heading YAYA (a convention and events complex). A booking bar sits in the header and a column of social icons floats at the right edge.

## Overview

The design is one orange accent on black. Photography is the colour: turquoise pool water, green hillside, and warm interior light fill 100 percent of the viewport behind the panels. The brand orange `#ed591b` appears in the wordmark ("Sri panwa" in outlined orange letters at the top right of the hero), in panel eyebrow headings, on the RESERVATION button, and as the hover colour of every navigation item. Text on the panels is white and justified in the capture, in long paragraphs of marketing prose ("Scattered across 40 acres of lush, tropical surroundings that offer accommodation of the highest quality, maximum privacy and superior service"). Panels are truncated with a fade at the bottom and followed by a text link with a chevron ("Read More", "About Habita Suite", "About Yaya"). A collapse control (a minus sign) sits at each panel's top right.

Voice: first-person-brand, confident and sensual (the paragraph describes villas as "private and very sexy"), with concrete facts (40 acres, 12-meter infinity-edge pool, 70 to 140 sqm suites, 400-person halls, 24 pool suites).

## Colors

Background areas: `#000000` (weight 8,800), `#000000cc` (747, the text panels), `#00000099` (496, image tile overlays), `#1c1c1c` (317, the header), `#585d5c` (14) and `#ffffff` (14, the booking fields). Text by characters: `#ffffff` (4,302), `#ed591b` (62), `#555555` (51), `#636363` (41).

- `canvas` `#1c1c1c` the header/page chrome; `surface` `#000000` the panel and section black.
- `ink` `#ffffff`: all body and navigation text; `on-primary` `#ffffff` text on the orange button.
- `primary` `#ed591b`: brand orange; headings, RESERVATION and BOOK NOW fill, nav hover colour (measured `rgb(237, 89, 27)`).
- `ink-3` `#555555`: text inside the white booking selectors; `ink-4` `#636363`: grey icon-link color in the header; `surface-3` `#585d5c`.

The CSS root contains Bootstrap defaults (`--bs-primary #0d6efd`, `--bs-yellow #ffc107`, `--bs-info #0dcaf0`, and others). They are framework defaults, not brand colors, and are not used here.

## Typography

CoreRhino (400 and 600) and Gotham Medium are loaded; icon fonts FontAwesome, bootstrap-icons and swiper-icons are also present. By characters, CoreRhino carries 4,299 and Gotham Medium 157.

- `display`: CoreRhino 15.6px, weight 600, line-height 21.84px, uppercase (h1 eyebrow "WELCOME TO SRI PANWA, PHUKET").
- `heading`: CoreRhino 26px, weight 600, line-height 26px, uppercase (h2 "THE HABITA").
- `body`: CoreRhino 13px, weight 400, line-height 20.8px (3,538 characters).
- `link`: CoreRhino 12.48px, 400, line-height 19.968px, uppercase (`#SRIPANWA`).
- `button`: Gotham Medium 12px, 400, line-height 19.2px, uppercase. `button-secondary`: 10.4px, line-height 16.64px.
- `nav`: Gotham Medium 13px, 400, line-height 20.8px; navigation labels measure 12px at weight 600.

Letter-spacing is `normal` throughout. Headings are uppercase. Both faces are commercial; the stylesheet's own fallback is generic `sans-serif`.

## Layout

The page is a stack of full-viewport-width image sections, each sized to the viewport in the capture, with a text panel pinned left and the photograph filling the rest. The header is 42px high: logo mark at left, seven uppercase two-line navigation items (SUITES & VILLA, BABA DINING, WELLNESS, GALLERY, ACTIVITIES & DAY PASS, VILLA FOR SALE, FESTIVE CELEBRATIONS, with chevrons on some), then white booking fields (CHECK-IN, CHECK-OUT, "2 Adults / 0 Child") and the orange RESERVATION button at the right. Paddings: 15px (23 elements), 10px (21), 7px (20), 5px (3), 50px (3), 30px (3). Generated spacing: 1, 5, 6, 7, 10, 15, 30, 40, 42, 50px. The page has a slider control group (previous, play, next) at the lower right of the hero.

Copy structure inside panels follows one pattern: an orange eyebrow or title, two to four justified paragraphs, a fade where the text is cut, and a link. The paragraphs name amenities specifically: Baba Chino and Baba Hot Box, an Olympic size forest waterfall pool, the leaf-shaped roof of The Habita, Shishi Lounge at sunset, and for Yaya two convention halls and 24 pool suites. A hashtag block ('TAG YOUR SHOTS #SRIPANWA #BABAPHUKET') invites guests to post photos. The floating right-edge strip holds social and messaging icons; it is a utility widget, not part of the type or color system.

## Elevation & Depth

No shadows measured. Depth is made by translucent black layers: panels at 80% black (`#000000cc`) and tile overlays at 60% (`#00000099`) over photography, and the solid `#1c1c1c` header above them.

## Shapes

`borderRadii` is empty: every rendered element computes to 0px (`rounded.none`). Panels, buttons, the booking fields and the header are rectangles; the only rounded forms are inside photographs and icons.

## Components

- **RESERVATION button** (`button-primary`): fill `#ed591b`, white 12px uppercase Gotham Medium, padding `1px 6px`, 42px high, radius 0. Mobile pass: "BOOK NOW", 15.6px, 40px high, same fill.
- **Booking selectors** (`button-secondary`): white fill, `#555555` text, 10.4px, padding `0px 5px`, 42px high.
- **Navigation**: `#1c1c1c` bar, white 12px/600 uppercase two-line labels; hover to `#ed591b`.
- **Text panel**: 80% black rectangle, orange 15.6px eyebrow or 26px title, justified white 13px body, text link with chevron beneath.
- **Image tile links**: "THAI MEDICAL" and "TREATMENTS" in 20.8px white on `#00000099` overlays, 70px high.
- **Link**: `#SRIPANWA` hashtag, white, 12.48px uppercase.

## Design System Architecture

No official design system or brand guideline was found: the home page links to none and no `_research` URL beyond the page itself was opened. The site is built on Bootstrap (its `--bs-*` variables are in `:root`) with the Swiper slider (`--swiper-navigation-size: 44px`); the brand layer is applied through CoreRhino, Gotham Medium, orange `#ed591b` and black panels. No bespoke token layer is defined in the CSS root.

## Do's and Don'ts

Do set headings in uppercase CoreRhino 600 and colour eyebrows orange `#ed591b`. Do put copy on 80% black panels over photography. Do keep corners square. Do pair RESERVATION in orange with white booking fields.

Don't use Bootstrap's blue, yellow or teal; they are framework defaults. Don't round buttons or panels. Don't add drop shadows. Don't set body text above 13px in panels; the measured size is 13px. Don't use orange for body copy; it is limited to headings, buttons and hover.

## Responsive Behavior

Mobile pass: h1 15.6px/600 (unchanged); h2 19.2px/600 with 23.04px line-height, a different element ("TAG YOUR SHOTS #SRIPANWA #BABAPHUKET") in white; body 13px (unchanged); primary CTA "BOOK NOW" 15.6px, 40px high, orange fill. Mobile font sizes by characters: 13px (1,452), 9.36px (342), 15.6px (232), 14.04px (72), 24px (20). Navigation layout and breakpoints are not measured.

## Iteration Guide

1. Black and `#1c1c1c` surfaces, white text, one orange `#ed591b`.
2. CoreRhino 13px body and uppercase 15.6px/26px headings; Gotham Medium 12px for buttons and navigation.
3. Full-bleed photography with a left 80% black panel and a chevron text link.
4. Square corners, no shadows.
5. Write copy as concrete facts (acres, square metres, guest capacity) in a warm, direct voice.
6. Verify: `node web/scripts/verify-designs.mjs --slug=sri-panwa`.
