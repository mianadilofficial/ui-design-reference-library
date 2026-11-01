---
version: alpha
name: Champions for Good Club
category: "Product & SaaS"
description: "Champions for Good Club homepage: a dark purple #23002b hero with giant Druk Condensed lettering in light purple #e894ff, a #fbfbfb canvas, brown #291900 and green #002629 bands with yellow #ffac47 and mint #94ffe4 text, and Neue Montreal 15px to 16px interface type."
colors:
  canvas: "#fbfbfb"
  ink: "#121212"
  primary: "#e894ff"
  on-primary: "#23002b"
  brown-dark: "#291900"
  green-dark: "#002629"
  yellow: "#ffac47"
  mint: "#94ffe4"
typography:
  display:
    fontFamily: "\"Druk Condensed Super Desktop\", Arial, sans-serif"
    fontSize: 39.6px
    fontWeight: 400
    lineHeight: 144.32px
  display-mobile:
    fontFamily: "\"Druk Condensed Super Desktop\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 43.2px
  heading:
    fontFamily: "\"Druk Condensed Super Desktop\", Arial, sans-serif"
    fontSize: 134.4px
    fontWeight: 500
    lineHeight: 104.832px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Druk Condensed Super Desktop\", Arial, sans-serif"
    fontSize: 25.6px
    fontWeight: 400
    lineHeight: 25.6px
    textTransform: uppercase
  body:
    fontFamily: "\"Neue Montreal\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 17.6px
  button:
    fontFamily: "\"Neue Montreal\", Arial, sans-serif"
    fontSize: 15px
    fontWeight: 500
    lineHeight: 21px
rounded:
  none: 0px
  xs: 6px
  sm: 14px
  md: 24px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 8px
  s4: 8.8px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 39px
  button-mint:
    backgroundColor: "{colors.mint}"
    textColor: "{colors.green-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 39px
  card:
    backgroundColor: "{colors.green-dark}"
    textColor: "{colors.mint}"
    rounded: "{rounded.sm}"
---

## Overview

Champions for Good Club (`https://www.champions4good.club/`, title "Champions for Good Club", page language `de`) is a members' network for athletes and business people, and its homepage is a poster. The first screen is a full-width dark purple field (`#23002b`) carrying a stack of enormous condensed capitals in light purple (`#e894ff`): "YOUR" and "OF" in small caps beside "NETWORK" on the first line, then "GAME" in a slanted italic and "CHANGERS" on the second. Above the headline sit two pill-like icon buttons showing pictograms of athletes in motion, one filled with light purple and one outlined. The header is spare: a runner pictogram plus the stacked italic wordmark "CHAMPIONS FOR GOOD CLUB" at left, "Members", "Events", "FAQ" and a "Sounds" on/off switch in the middle, and a "Join" button at right.

The page measures 17,828px tall at 1280px width, but the reference capture shows only the hero; the lower area of the capture is blank because the sections below had not rendered at capture time. What the measurement records for the rest of the page is a sequence of full-bleed color fields (the background-area ranking is `#fbfbfb`, `#291900` brown, `#23002b` dark purple and `#002629` dark green), headings in all-caps Druk at 134.4px ("NO BORING NETWORKING"), small mint all-caps labels ("ATHLETE") and German body copy in yellow ("Gestalten Sie Business-Wachstum mit der ...").

The voice is loud, playful and sport-coded: "No boring networking", "Your network of game changers", a sound-toggle in the nav. The color story is four saturated dark fields with three bright text colors on them rather than a white page with an accent. This file documents what was measured; sections of the page that did not render in the capture are not described.

## Colors

The brand ships its palette as named custom properties (a Webflow-style variable set) and the page uses them as paired fields and inks:

- **Canvas `#fbfbfb`** (`--colors--white`) is the largest background area (8,155 units). **Ink `#121212`** (`--colors--black`) is the text color on it (569 characters).
- **Primary `#e894ff`** (`--light-purple`, also `--colors--brand-color`) is the hero lettering, the nav link color and the fill of the "Join" button (791 characters of text in this color). **`#23002b`** (`--dark-purple`, 3,632 units) is the hero background and the button label color (`on-primary`).
- **Brown `#291900`** (`--brown`, 5,775 units) is a full-bleed band; **yellow `#ffac47`** (`--yellow`) is the text color used on it (922 characters, the most-read color on the page), including the German body copy.
- **Dark green `#002629`** (`--dark-green`, 2,034 units) is the card and tile fill; **mint `#94ffe4`** (`--green`) is the text on it (659 characters) and the fill of the alternate "Join" button, whose label is `#002629`.
- **Grey `#9b9b9b`** (`--grey`) is declared but was not among the measured text colors. `--pure-white: #fff` and `--swiper-theme-color: #007aff` are declared too; the latter belongs to a slider library.
- `--sound-toggle-dot-active: #23002b` colors the active dot of the "Sounds" switch.

Contrast pairs are deliberate: light purple on dark purple, yellow on brown, mint on dark green, near-black on near-white. Colors are not mixed across pairs.

## Typography

Two families. **Druk Condensed Super Desktop** (one loaded face, 400) is the display face for the headline, section headings and labels; **Neue Montreal** (loaded at 400, 500 and 600) carries nav, buttons and body copy. Druk accounts for 793 weighted characters on the page, Neue Montreal for 2,652.

- **Display (h1)**: the h1 element itself is 39.6px with a 144.32px line-height; the words inside it are set at far larger inline sizes. The measured size table includes 281.6px (19 characters), 166.4px (128), 134.4px (57), 51.2px with -1.245px letter-spacing (241) and 38.4px with 0.2px letter-spacing (456). The mobile h1 element is 24px / 43.2px.
- **Heading**: Druk 134.4px, weight 500, line-height 104.832px (0.78), uppercase, in `#121212` for "NO BORING NETWORKING" (387px wide, 210px tall). On the mobile pass this becomes 72px / 57.6px.
- **Subheading**: Druk 25.6px / 25.6px, uppercase, mint, for labels such as "ATHLETE".
- **Body**: Neue Montreal 16px / 17.6px (line-height 1.1), 16px being the most-used size (2,327 characters).
- **Button**: Neue Montreal 15px / 21px, weight 500, label case as written ("Join").
- The named font-size variables are `--font-size--copytext: 16px`, `--font-size--xs: 32px`, `--font-size--s: 48px`, `--font-size--m: 64px` and `--font-size--l: 80px`. The mobile size table has 90px (128 characters), 72px (117), 38px (241), 32px (638) and 16px (2,327).

The letter-spacing of the large display words was not separately measured beyond the entries above; the fallback stack for both families is `Arial, sans-serif`.

Font substitutes: Druk and Neue Montreal are commercial typefaces. Use a very condensed ultra-bold grotesque for display and a neutral grotesque for text if they are unavailable; this is a build suggestion, not a measurement.

## Layout

The page uses `rem`-based variables: widths from `--width--15: 15rem` to `--width--80: 80rem` (and `--width--100: 100%`), a spacing ladder from `--spacing--025: .25rem` through `--spacing--1: 1rem` to `--spacing--7: 7rem`, and `--vw: 12.8px` (one viewport-width unit at 1280px). The header is a three-part row: logo left, centered nav, button right. The hero is a centered column: icon pills, then the type stack, with the headline's h1 box measuring 1,002px wide and 363px tall.

Measured gaps: 8px (90 uses), 16px (20), 12px (10), 4px (4), 32px (2). Paddings: 32px (22), 40px (12), 8.8px (12), 20px (12), 525px (9), 192px (6), 48px (5). Large paddings of 192px and 525px belong to the poster-scale sections. The two icon pills and the "Join" button are the only controls measured in the visible hero.

## Elevation & Depth

No box-shadow was measured (the shadow table is empty) and no border except a single `#e894ff` border color measured once (the outlined icon pill in the capture). Depth is expressed entirely by color fields and by scale: the hero lettering overlaps itself tightly (a line-height of 0.78 on the display heading), and several easing variables (`--ease-out-back`, `--ease-in-out-back`, `--ease-out-gentle`, `--ease-in-out-expo`) point at spring-like motion, which was not measured here.

## Shapes

Radii measured: 14px (18 uses), 6px (12), 24px (1) and `50%` (1). The cards use 14px (`sm`). In the capture the "Join" button has softly rounded corners and the icon pills are rounded capsule shapes (the left one with an irregular, blob-like outline); however the extractor read 0px on the "Join" link element itself, so the rounding in the capture sits on a wrapper that was not read. For this reason the token `rounded.none` is kept for the button and the measured radius values are listed separately. `50%` appears once, on a circular element.

## Components

- **Join button (primary)**: `#e894ff` fill, `#23002b` label, Neue Montreal 15px / 21px weight 500, 68×39px. The variant on dark green is mint `#94ffe4` fill with `#002629` label (68×39px on desktop, 245×39px on the mobile pass).
- **Nav links**: "Members", "Events", "FAQ" in light purple on the purple header, Neue Montreal; the "Sounds" label is followed by a small toggle switch with a light-purple knob.
- **Icon pills**: two capsule buttons in the hero; filled purple with a dark pictogram, and outlined purple with a light pictogram.
- **Logo**: a running figure plus italic, heavily condensed capitals "CHAMPIONS FOR GOOD CLUB" in light purple.
- **Card**: `#002629` fill, mint text, 14px radius.
- **Section label**: mint Druk 25.6px uppercase ("ATHLETE").
- Hover and focus states were not recorded (the hover list is empty), so they are not measured.

## Design System Architecture

No public design-system or brand-guideline page was found on the pages opened (the homepage at `https://www.champions4good.club/`). The de-facto system is a Webflow-style variable set visible in the shipped `:root` at the same URL: color variables (`--colors--brand-color`, `--colors--white`, `--colors--black`, `--light-purple`, `--dark-purple`, `--dark-green`, `--green`, `--yellow`, `--brown`, `--grey`, `--pure-white`), font-size variables (`--font-size--copytext`, `--font-size--copytext-small`, `--font-size--xs` to `--font-size--l`), a spacing scale (`--spacing--025` to `--spacing--7`), a width scale (`--width--15` to `--width--100`) and 34 named easing curves (for example `--ease-smooth-in-out: cubic-bezier(.75, 0, .25, 1)`). The stylesheet declares three font-face families: `webflow-icons`, `Neue Montreal` and `Druk Condensed Super Desktop`. A slider library contributes `--swiper-theme-color` and `--swiper-navigation-size: 44px`. The brand layer is the colors-and-fonts decision, not a component kit.

## Do's and Don'ts

Do:
- Use the four dark fields (`#23002b`, `#291900`, `#002629`) with their paired bright inks (`#e894ff`, `#ffac47`, `#94ffe4`) and `#fbfbfb` with `#121212`.
- Set headlines in Druk Condensed capitals at poster scale with very tight line-height (0.78 on headings).
- Keep interface text in Neue Montreal at 15px to 16px.
- Use one "Join" call to action, in light purple on purple and in mint on green.

Don't:
- Don't mix the ink pairs (yellow on purple, mint on brown).
- Don't use a gray or white page background other than `#fbfbfb`.
- Don't use the slider library's `#007aff` as a brand color.
- Don't describe sections that did not render in the capture.

## Responsive Behavior

Measured at a 390px viewport (mobile pass): the h1 element drops from 39.6px / 144.32px to 24px / 43.2px (259px wide, 101px tall); the "NO BORING NETWORKING" heading drops from 134.4px / 104.832px to 72px / 57.6px and its box from 387×210px to 207×115px; body copy stays 16px / 17.6px (178px wide, 84px tall, against 176×98px on desktop); the mint "Join" variant measures 245×39px. The mobile size table is led by 16px (2,327 characters), 32px (638), 38px (241), 90px (128) and 72px (117). The header layout, how the nav and the "Sounds" switch present at mobile width, and the arrangement of the lower sections were not recorded, so they are not measured. Tablet widths and dark/light switching were not measured.

## Iteration Guide

1. Start from the paired fields: `#23002b` with `#e894ff`, `#291900` with `#ffac47`, `#002629` with `#94ffe4`, `#fbfbfb` with `#121212`.
2. Set display in Druk Condensed capitals at poster scale (measured sizes 281.6px, 166.4px, 134.4px) with 0.78 line-height; set body in Neue Montreal 16px.
3. Build the hero as a centered stack: icon pills, then the headline, with a left logo, a centered nav and a right "Join" button.
4. Keep controls to one button style (15px / 500, 39px tall) in light purple or mint.
5. Re-capture the page after the lazy sections render before documenting lower sections.
6. Re-measure radii on the button wrapper if exact corner values are needed.
