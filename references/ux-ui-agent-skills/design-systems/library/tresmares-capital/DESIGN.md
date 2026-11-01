---
version: alpha
name: Tresmares Capital
category: "Tech & AI"
description: "Tresmares Capital, a pan-European private equity and financing firm: white canvas, charcoal ink #2b2b2b, PP Neue Montreal 500 with a 149.34px tightly tracked hero, red #e41613 PP Fragment Serif statistics, square corners, hairline #d5d5d5 boxes and no shadows."
colors:
  canvas: "#ffffff"
  ink: "#2b2b2b"
  primary: "#2b2b2b"
  on-primary: "#ffffff"
  black: "#000000"
  ink-muted: "#aaaaaa"
  accent-red: "#e41613"
  border-hairline: "#d5d5d5"
  footer-bg: "#f2f2f2"
typography:
  display:
    fontFamily: "\"PP Neue Montreal\", Helvetica, Arial, sans-serif"
    fontSize: 149.338px
    fontWeight: 500
    lineHeight: 104.536px
    letterSpacing: "-5.9735px"
  display-mobile:
    fontFamily: "\"PP Neue Montreal\", Helvetica, Arial, sans-serif"
    fontSize: 19.5px
    fontWeight: 400
    lineHeight: 23.4px
    letterSpacing: "-0.39px"
  body:
    fontFamily: "\"PP Neue Montreal\", Helvetica, Arial, sans-serif"
    fontSize: 12.8px
    fontWeight: 500
    lineHeight: 15.36px
    letterSpacing: "-0.256px"
  button:
    fontFamily: "\"PP Neue Montreal\", Helvetica, Arial, sans-serif"
    fontSize: 11.7376px
    fontWeight: 500
    lineHeight: 64px
    letterSpacing: "-0.085376px"
  nav:
    fontFamily: "\"PP Neue Montreal\", Helvetica, Arial, sans-serif"
    fontSize: 8.5376px
    fontWeight: 400
    lineHeight: 8.5376px
    letterSpacing: "-0.085376px"
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 5.34px
  s2: 10.66px
  s3: 12.8px
  s4: 21.34px
  s5: 26.66px
  s6: 32px
  s7: 42.66px
  s8: 64px
  s9: 96px
  s10: 128px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 10.6624px
    height: 64px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, 0, -25.6204)
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 149.338px 0px 32px
---

## Overview

The measured page is the English home page of Tresmares Capital (`/en/`), a pan-European alternative investment firm. The page has no document title, so the name comes from the logo in the header ("TRESMARES CAPITAL" beside a small mountain mark). The measured height is 9,748px with 1,137 visible elements. The tone is restrained and financial: a monochrome mountain photograph, one huge staggered headline, a very small type scale for everything else and a single red used only for numbers.

The header is a white 64px bar with About, Financial Solutions (with a dropdown chevron), Portfolio, Team, Investors and Contact centred, a small "EN" language cell, and a solid charcoal "Investors Portal" block that runs to the right edge. The hero sets "Drive / to / grow" on three staggered lines over a pale grey, cloud-covered mountain, with the line "Tailored financing for high-growth SMEs and private equity managers." at the lower right. Below, an "About Tresmares" label introduces a large, faded statement ("A pan-european alternative investment firm focused on driving SME growth"), a paragraph ("Founded in 2014, it currently has a team of over 60 professionals across its three offices in Madrid, London, and Frankfurt…") with an underlined "Discover our history" link, and a staggered two-column board of hairline boxes with red serif figures (2014, 4-75, +3.500, +100, +2.000, +60) over small captions such as "Foundation year" and "Companies in 5 countries". The page also shows a cookie-consent bar, which is not part of the brand UI and is not documented here.

## Colors

The palette is neutral. `{colors.canvas}` is white (7,319 area units), `{colors.ink}` is charcoal #2b2b2b (2,163 characters of text), and `{colors.primary}` is the same charcoal, filling the Investors Portal button with white `{colors.on-primary}` text. `{colors.black}` (#000000, 5,120 units) is painted on large dark areas, `{colors.border-hairline}` (#d5d5d5, 4,096 units and 7 border elements) draws the statistic boxes and header rules, and `{colors.footer-bg}` (#f2f2f2, 1,052 units) is the footer. A light grey `{colors.ink-muted}` (#aaaaaa, 106 characters) sets quiet labels and the faded statement text.

The single chromatic colour is `{colors.accent-red}` (#e41613), measured on 29 characters, all the serif statistic numerals. The root variables also name `--darkest: #2b2b2b`, `--lighter: #f2f2f2`, `--light: #e5e5e5`, `--overlay: #18181a`, `--success: #10bb52` and `--alert: #ffd702`; the last two are declared but not seen on the home page. Border colour is declared as `--border: rgba(44,42,43,.4)`.

## Typography

PP Neue Montreal carries nearly all text (2,285 characters), in weights 400, 500 and 700 (500 is dominant at 1,463 characters). PP Fragment Serif at weight 400 appears only on the red statistics. The hero (`{typography.display}`) is 149.338px, weight 500, on a 104.536px line with -5.9735px letter-spacing, so lines are set tighter than their height. The body and links (`{typography.body}`) are 12.8px, weight 500, 15.36px line, -0.256px tracking. The button (`{typography.button}`) is 11.7376px on a 64px line, and menu items (`{typography.nav}`) are 8.5376px.

The most used sizes are 12.8px (889 characters), 21.3376px (499), 9.6px (342) and 16px (272), with 26.6624px (96) and 64px (29) further down the list. Sizes are computed from viewport-relative units (the root declares `--space: 0.833vw`, among other vw-based units), so they scale with the viewport rather than sitting on fixed steps.

## Layout

The page is a wide editorial layout with large empty areas. The hero text is left-offset and stair-stepped; the intro paragraph sits left and the statistic boards right, in two columns that start at different heights so the hairline boxes interlock. Paddings are few and large: 21.3376px (8 uses), 128px (3), plus single uses of 256px, 170.662px, 160px and 149.338px; the footer pads 149.338px top and 32px bottom. Gaps are 12.8px (14 uses), 10.6624px (12), 26.6624px (10) and 5.3376px (10), then 42.6624px, 64px and 96px.

The root spacing units are `--space: 0.833vw` and `--space-half: 0.417vw`. The spacing tokens in the front matter list the measured steps from 5.34px to 128px.

## Elevation & Depth

Flat. No box shadow was measured on any element and no element has a z-depth treatment beyond the header sitting above the hero. Separation is by 1px hairlines (#d5d5d5), whitespace and the full-width greyscale photograph. The root variables declare `--shadow: 0px 10px 10px 0px rgba(0,0,0,.2)` and WordPress preset shadows, but none appear on the rendered home page.

## Shapes

Square. Every rendered element has a computed radius of 0px except six round elements at 50%. The buttons, header block, statistic boxes and footer all use sharp corners. The root declares `--radius2: 0.625vw`, which was not measured on the home page, so `{rounded.none}` is the value used for all components.

## Components

**Primary button.** `{colors.ink}` fill, white label, PP Neue Montreal 500 at 11.7376px, 64px tall (the full header height), 10.6624px side padding, square. It is the "Investors Portal" block at the right end of the header.

**Navigation.** White 64px bar with `{colors.ink}` links at 12.8px; Financial Solutions has a chevron indicating a menu.

**Link.** `{colors.ink}` at 12.8px, underlined for editorial links such as "Discover our history".

**Statistic box.** White rectangle with a 1px `{colors.border-hairline}` outline, a red serif numeral at the top and a 12.8px caption at the bottom; boxes are staggered in two columns.

**Footer.** `{colors.footer-bg}` fill, `{colors.ink}` text, 822px tall, with 149.338px top padding.

## Design System Architecture

No public design-system or brand-guideline page was opened. The shipped CSS has a small, hand-named token layer on top of a WordPress base: colours `--darkest`, `--lighter`, `--light`, `--white`, `--bg`, `--overlay`, `--border`; spacing `--space`, `--space-half`, `--vho`; radius `--radius2`; type `--font-secondary: "PP Neue Montreal", Helvetica, Arial, sans-serif`; and motion curves `--p2InOut: cubic-bezier(0.45,0,0.55,1)`, `--expoIn: cubic-bezier(0.7,0,0.84,0)` and `--expoOut: cubic-bezier(0.16,1,0.3,1)`. WordPress block-editor presets (`--wp--preset--*`) and Font Awesome 6 Pro variables are also present and belong to the platform, not the brand.

The system is effectively viewport-relative: spacing and type are expressed in `vw`-based units, which explains the fractional pixel values.

## Do's and Don'ts

- Do keep the page white and charcoal, with greyscale photography.
- Do reserve red (#e41613) for statistic numerals in the serif face.
- Do set the hero at a very large size with negative tracking, and everything else small.
- Do use hairline boxes and whitespace instead of shadows.
- Don't round corners; the site is square throughout.
- Don't add colour photography or additional accent colours.
- Don't use the serif outside numerals.

## Responsive Behavior

The extraction's 390px pass recorded body copy at 15.1671px on an 18.2005px line with 0.303342px tracking and a short heading line at 19.5px/23.4px (weight 400, -0.39px tracking). The most common mobile sizes are 15.1671px (1,062 characters), 19.5px (477), 11.9184px (290), 12.9987px (109) and 26.6624px (96). A mobile primary button was not detected. Column counts, menu collapse and the stat-board layout on mobile were not measured.

## Iteration Guide

1. White canvas, `{colors.ink}` text, square corners, no shadows.
2. Hero at 149.338px PP Neue Montreal 500 with -5.9735px tracking; supporting text at 12.8px.
3. One charcoal 64px button at the header's right edge.
4. Numbers in PP Fragment Serif, `{colors.accent-red}`, inside 1px `{colors.border-hairline}` boxes.
5. Use large padding (128px+) between sections.
6. Express sizes and gaps relative to the viewport; measure any new size before adding it.
