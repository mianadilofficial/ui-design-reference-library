---
version: alpha
name: Untold
category: "Tech & AI"
description: "Untold (untold.site) is a communications ecosystem whose site pairs a cream #fcfcf4 canvas and #232428 ink with signal-orange #ff5623 square buttons, enormous lowercase Geometric415Lite headlines at 120px to 168px with negative tracking, and rounded-pill and tilted-photo collage details."
colors:
  canvas: "#fcfcf4"
  ink: "#232428"
  primary: "#ff5623"
  on-primary: "#232428"
  on-primary-hover: "#cdcec8"
  surface-blue: "#5c88ee"
  surface-amber: "#ffbf33"
  surface-pink: "#efb8b1"
  surface-green: "#67c56b"
  surface-sand: "#ebd2ab"
  ink-white: "#ffffff"
typography:
  display:
    fontFamily: Geometric415Lite, "Geometric415Lite Fallback"
    fontSize: 120px
    fontWeight: 400
    lineHeight: 123.6px
    letterSpacing: "-6px"
    textTransform: lowercase
  display-mobile:
    fontFamily: Geometric415Lite, "Geometric415Lite Fallback"
    fontSize: 70px
    fontWeight: 400
    lineHeight: 72.1px
    letterSpacing: "-3px"
    textTransform: lowercase
  heading:
    fontFamily: Geometric415Lite, "Geometric415Lite Fallback"
    fontSize: 168px
    fontWeight: 300
    lineHeight: 157.92px
    letterSpacing: "-8.4px"
  subheading:
    fontFamily: Geometric415Lite, "Geometric415Lite Fallback"
    fontSize: 64px
    fontWeight: 300
    lineHeight: 80px
    letterSpacing: "-2.56px"
  body:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 32px
    fontWeight: 300
    lineHeight: 38.4px
    letterSpacing: "-1.68px"
  button:
    fontFamily: HelveticaNeue, "HelveticaNeue Fallback", Geometric-415-Lite
    fontSize: 14px
    fontWeight: 700
    lineHeight: 15.54px
    letterSpacing: 0.14px
    textTransform: uppercase
  nav:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 15px
rounded:
  xs: 2.5px
  sm: 3px
  md: 4px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 7px
  s8: 8px
  s9: 9px
  s10: 10px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 52px
  button-primary-hover:
    textColor: "{colors.on-primary-hover}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 40px 70px 70px
---

## Overview

Untold at `https://untold.site/en` (page title "Untold | We tell untold stories") describes itself on the page as "a communications ecosystem built to rethink how communication happens" made up of six agencies. The English home page opens with the headline "we tell untold stories", set in huge lowercase letters, in which small images interrupt the words: a Burger King burger photo sits inside "we tell", a hand-drawn orange figure steps through a door at the end of "tell", and a tilted stack of collage photographs sits inside parentheses before "stories". A single square orange button, "EXPLORE OUR ECOSYSTEM", sits below.

The identity is typographic and playful: parentheses appear everywhere as a graphic device ("( EN )", "( ABOUT )", "(*) We are a communications...", client names set between parentheses in the clients sentence "Good stories need great clients."), small bracketed labels such as "THOSE WHO DARE TO DISRUPT" and "SOME STORIES WE'VE RECENTLY TOLD" act as section markers, and loose hand-drawn illustrations (a high-five, an orange running figure) add a human note to the strict grid. Sections are separated by very large type, for example "about brands |" at 168px followed by a thin vertical bar, then "stories that resonate" at the bottom of the capture.

The header carries a "W | A | C" letter menu, the language switch `( EN ) ES PT`, and a round orange menu button at the right; the footer is a dark panel with numbered links (01 INDEX, 02 ABOUT, 03 WORK, 04 TEAM, 05 CONTACT) in 42px uppercase. Client logos are rendered in orange.

## Colors

The canvas is a warm off-white `#fcfcf4` (the measured body background) and the ink is a deep charcoal `#232428` (1,139 characters of text and also the largest background area, 2,395 weight, for the dark footer). The single brand accent is signal orange `#ff5623` (1,714 area weight): button fills, card fills, 7 border occurrences, the "(*)" mark and the logos. Text on orange is `#232428`, not white.

Secondary fills used in collage panels and chapter blocks are blue `#5c88ee` (622), amber `#ffbf33` (588), pink `#efb8b1` (290), green `#67c56b` (220) and sand `#ebd2ab` (193). The footer text is the canvas color `#fcfcf4` (195 characters), and white `#ffffff` appears on 8 characters. Button hover text was measured as `#cdcec8` (`on-primary-hover`). A translucent header fill `#fcfcf4e6` was measured at 154 area weight.

Contrast pairs recorded: ink on canvas, ink on orange, canvas on ink. The palette contains no gradients; the one effect layer is the shadow listed under Elevation & Depth.

## Typography

Three families by character count: `ui-sans-serif` stack (975 characters, body and navigation), HelveticaNeue (231, buttons and small copy) and Geometric415Lite (146, display). Loaded fonts are HelveticaNeue 300, 400 and 700 plus Geometric415Lite 400; the CSS lists "Geometric-415-Lite" as a fallback in the button stack.

- Display: Geometric415Lite 400, 120px / 123.6px, letter-spacing -6px, lowercase (the "index" h1); 70px / 72.1px, -3px on the mobile pass.
- Heading: Geometric415Lite 300, 168px / 157.92px, -8.4px (the "about brands" h2); sizes 220px and 180px also occur with -11px tracking.
- Subheading: Geometric415Lite 300, 64px / 80px, -2.56px.
- Body: `ui-sans-serif` stack, 32px / 38.4px, weight 300, -1.68px (the large intro sentences). Other sizes: 40px, 42px, 37px, 17px, 16px (-0.32px tracking), 20px.
- Button: HelveticaNeue 700, 14px / 15.54px, +0.14px, uppercase.
- Navigation and labels: system sans 10px (-0.2px tracking), 11px at weight 700 uppercase for the header.

Tracking is tight at every large size (about -5% of the font size) and loosens only for the small uppercase button label. Weights measured: 300 (612 characters), 400 (508) and 700 (232).

## Layout

The wrapper is declared as `--wrapper: 95%` with `--max-w-wrapper: 1280px` and a grid column space `--grid-cols-space: 28px`. The page is a vertical sequence of large type blocks, each followed by a short paragraph and one square button, aligned on an irregular left offset that changes from section to section (the h2 block, the client sentence and the "stories that resonate" block start at different x positions in the capture). Side labels run vertically ("SCROLL TO DISCOVER").

Measured gaps: 10px (50), 20px (14), 7px (12), 30px, 40px, 100px and 110px. Paddings: 26px (24 occurrences), 20px, 10px, 8px, 70px (13) and 86px; the footer uses `40px 70px 70px`. The page measured 1,850 visible elements.

## Elevation & Depth

One shadow style was measured, on 12 elements, a two-layer drop: `rgba(35, 36, 40, 0.32) 1px 2px 4px 0px, rgba(35, 36, 40, 0.18) 17px 32px 30.2px -1.91px`. Which 12 elements carry it was not recorded; in the capture the collage photographs read as tilted prints on the cream page. A card in the extraction is rotated by a transform matrix (about -1.5 degrees, `matrix(0.999657, -0.0261769, 0.0261769, 0.999657, ...)`).

All other surfaces are flat. Tailwind ring variables are present in the root (`--tw-ring-color: rgb(59 130 246/0.5)`) but are framework defaults and not brand tokens.

## Shapes

Radii measured: 9999px (11 elements, the round menu and language controls), 4px (9), 3px (7), `0px 0px 4px 4px` (3) and 2.5px (3). The primary button is square (0px, 52px tall), which is a deliberate contrast with the round orange menu button. Photographs carry small corners of 2.5px to 4px; the clipped secondary button ("READY WHEN YOU ARE") uses a `clip-path: inset(0px 0px 100%)` reveal.

## Components

- **Primary button**: `#ff5623` fill, `#232428` text, HelveticaNeue 700 14px uppercase with 0.14px tracking, 52px tall, 0px radius, label preceded by a small bullet ("• EXPLORE OUR ECOSYSTEM", "• MEET OUR CLIENTS"). Hover text color `#cdcec8` was recorded.
- **Menu button**: round orange control at the top right (9999px radius), hamburger glyph.
- **Letter menu**: header links "W | A | C" at 11px uppercase bold, with a `|` separator; hover state recorded text swaps ("W" becomes "WORK").
- **Language switch**: `( EN ) ES PT`.
- **Card**: orange fill, `#232428` text, 4px radius.
- **Footer**: `#232428` panel, canvas-colored text, 42px / 50.4px uppercase numbered links at weight 300, padding `40px 70px 70px`.
- **Collage photo**: tilted, 2.5px to 4px corners, two-layer shadow above.

## Design System Architecture

No public or official Untold design system was found, and none was searched for. The site is a Tailwind-style build (root variables `--tw-*`) with only three brand-level custom properties declared: `--wrapper: 95%`, `--max-w-wrapper: 1280px` and `--grid-cols-space: 28px`. Colors, type and radii are not exposed as variables; the system is expressed in rendered CSS: cream and charcoal surfaces, one orange, Geometric415Lite for headings and HelveticaNeue for UI. Source: `https://untold.site/en`, measured in `web/data/extracted/untold-1.json`.

## Do's and Don'ts

Do:
- Set headlines in lowercase Geometric415Lite with tracking near -5%.
- Use `#ff5623` for the primary square button and keep its text `#232428`.
- Wrap small labels and client names in parentheses.
- Interrupt headline words with small images or illustrations.

Don't:
- Don't round the primary button; the measured radius is 0px.
- Don't set white text on orange; the measured pair is `#232428` on `#ff5623`.
- Don't use more than one saturated accent in a section outside the collage palette.
- Don't use positive tracking on display type.

## Responsive Behavior

Measured at the 390px mobile pass: the display h1 shrinks from 120px to 70px (line-height 72.1px, tracking -3px) and the h2 measures 69px; body text measures 12px in HelveticaNeue; the primary button text measures 11px with the same `#ff5623` fill and `#232428` text; the nav text measures 10px. Layout, menu and column behavior on mobile were not measured.

## Iteration Guide

1. Start with `#fcfcf4` canvas and `#232428` text.
2. Write a lowercase Geometric415Lite headline at 120px to 168px with -5% tracking.
3. Add one orange `#ff5623` square button, uppercase 14px HelveticaNeue 700 with a bullet.
4. Use parentheses for labels, language and client names.
5. Add a tilted photo with the measured two-layer shadow.
6. Re-run `node web/scripts/verify-designs.mjs --slug=untold-1` after any rename.
