---
version: alpha
name: MilleDollars
category: "Culture & Events"
description: "MilleDollars (milledollars.fr) creative video bureau home page measured: full-screen film stage with #e0dee1 canvas behind, #181818 ink and #ffffff overlay text, ABCDiatype uppercase at 16px with 8.88889px nav labels, Migra serif for the tagline, no measured radius or shadow."
colors:
  canvas: "#e0dee1"
  ink: "#181818"
  primary: "#181818"
  ink-2: "#ffffff"
typography:
  display:
    fontFamily: ABCDiatype, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
    textTransform: uppercase
  display-mobile:
    fontFamily: ABCDiatype, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 18px
    textTransform: uppercase
  nav:
    fontFamily: ABCDiatype, sans-serif
    fontSize: 8.88889px
    fontWeight: 400
    lineHeight: 13.3333px
    textTransform: uppercase
  link:
    fontFamily: ABCDiatype, sans-serif
    fontSize: 14.2222px
    fontWeight: 400
    lineHeight: 21.3333px
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 17.78px
  s3: 28.44px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-2}"
  nav-link:
    textColor: "{colors.ink-2}"
    typography: "{typography.nav}"
---

# MilleDollars

## Overview

This file documents the home page measured at `https://milledollars.fr/`, titled "MilleDollars" (language `en`). MilleDollars describes itself on the page as a "Creative bureau focused on high-end video production. Working worldwide." The page is a full-screen film index: a looping image of a woman in profile against trees and sky fills the viewport inside a thin frame, with the wordmark split as "MILLE." at the top left and "DOLLARS" at the top right, joined by a hairline rule that runs across the top. The tagline sits at the top center in a small italic serif beside a star glyph. A project carousel shows the current and neighboring titles at the vertical middle: a numeral at the left ("02"), the title ("EVIDENS DE BEAUTÉ"), the next title ("ULTIMATE SHIELD") and a year ("2026") at the right. The text-version project list contains "The Dazzling Division — Richard Mille (2026)", "Ultimate Shield — EviDenS de Beauté (2026)", "Eternal Snow — Richard Mille (2026)", "Spinning Tops — Henry Jacques (2020)", "The Hard Path — Richard Mille x Ilia Topuria (2026)", "The Murcian Has Landed — Danone (2025)" and "Neural Overdrive — Richard Mille x McLaren (2024)". A small vertical menu at the lower left lists HOME, WORKS, INFO and CONTACT, and a faint "DISCOVER" label is cut off at the left edge.

The identity is minimal and filmic: the interface is a layer of hairlines and tiny uppercase sans-serif labels over the footage. Branding is carried by the work, which is luxury-brand commercial films.

## Colors

The color data is sparse because the page is one video layer; no backgrounds were recorded by area. The tokens are:

- `{colors.canvas}` #e0dee1: the only canvas candidate, a pale warm grey; it is the page color visible at the edges of the frame (in the capture a light margin surrounds the rounded media frame).
- `{colors.ink}` #181818: dark text, 367 characters, used for the project-list text; also assigned as `{colors.primary}` because no separate accent or filled button exists.
- `{colors.ink-2}` #ffffff: white text over the footage, 353 characters (the nav, titles and captions).

A consent-banner library contributes variables such as `--cc-overlay-bg` rgba(4,6,8,.85) and `--cc-btn-primary-hover-border-color`; the banner is not brand UI and is not tokenized. The site-level variable `--accent-color` is #fff and `--header-height` is 56.875px.

## Typography

Fonts loaded: `ABCDiatype` (weight 400; 666 characters) and `Migra` (weights 200 and 800; 54 characters). ABC Diatype is a commercial typeface from Dinamo and Migra is a commercial serif from Pangram Pangram; no license pages were opened for this file, so no substitute is claimed. ABCDiatype sets nearly everything; Migra appears in the italic tagline at the top center.

The tokens: `{typography.display}` ABCDiatype 16px/16px uppercase (the project titles); `{typography.display-mobile}` 18px/18px uppercase at 390px; `{typography.nav}` 8.88889px/13.3333px uppercase for menu labels (HOME, WORKS, INFO, CONTACT); `{typography.link}` 14.2222px/21.3333px for the text project list. Character-weighted sizes: 14.2222px (379), 16px (225), 8.88889px (62), 10.6667px (54). Weights: 400 (719) and 800 (1). No letter-spacing was measured. The extremely small 8.88889px menu size is a measured value.

## Layout

The page is a single viewport, with the film frame inset from the page edge by a narrow margin. Elements are pinned to the edges and midline: wordmark halves on the top corners, a hairline rule along the top (and one along the bottom), a left numeral and right year on the vertical center line, the menu at the lower left, and a small logo mark at the lower right. The project titles are placed at a left third and a right third, leaving the subject of the footage clear in the middle. Menu positions are fixed; the header height variable is 56.875px.

The generated spacing tokens are `{spacing.s1}` 4px, `{spacing.s2}` 17.78px and `{spacing.s3}` 28.44px (the single measured padding is 28.4444px).

## Elevation & Depth

No box shadows were measured, and no backgrounds were recorded by area. Depth is entirely the footage and thin white hairlines; text sits directly on the picture with no panels, scrims or cards in the measurement.

## Shapes

The extraction recorded no border radius anywhere: `desktop.frequencies.borderRadii` is empty, so every rendered element computes 0px. The token is therefore `{rounded.none}` 0px. In the capture the footage frame shows rounded corners, but that radius was not measured on any element, so it is not stated as a value. Controls are text and lines with no boxes.

## Components

- **Link** (`link`): `{colors.ink}` in `{typography.link}` 14.2222px/21.3333px; the project list entries.
- **Navigation** (`nav`, `nav-link`): white text (`{colors.ink-2}`), 8.88889px uppercase menu labels. On mobile the whole nav block is 390px wide and 40px tall with 16px/24px text.
- **Project title pair**: uppercase 16px titles left and right of center with a numeral and a year.
- **Wordmark**: "MILLE." and "DOLLARS" in uppercase at the top corners.

No button, input or card exists in the measurement, and no primary button was detected, so none is declared.

## Content and Voice

Copy is short, uppercase and declarative. The only sentence on the page is the tagline, "Creative bureau focused on high-end video production. Working worldwide." Everything else is a title, a client name or a year. Titles are evocative two-to-four word phrases ("The Dazzling Division", "Eternal Snow", "Spinning Tops", "Neural Overdrive"), each paired with the client it was made for (Richard Mille, EviDenS de Beauté, Henry Jacques, Danone) and a year between 2020 and 2026. The text list uses an em dash between title and client and parentheses around the year, while the carousel uses a separate numeral and year. There is no call-to-action copy: the invitation to contact is the single menu item "CONTACT".

## Design System Architecture

No public design system, brand guideline or token package was found; the home page text and links include only the project list and the four-item menu, and no brand, press or GitHub pages were linked. The de-facto system is small: two font families (ABCDiatype and Migra), a three-value text palette (#181818, #ffffff, and the pale canvas), Tailwind ring variables (`--tw-ring-shadow` and others), a header height variable (`--header-height` 56.875px), an accent variable (`--accent-color` #fff) and a third-party cookie consent stylesheet (`--cc-*`).

## Do's and Don'ts

- Do keep the interface as text and hairlines over full-bleed footage.
- Do set titles in uppercase ABCDiatype (16px desktop, 18px mobile) and the menu at 8.88889px.
- Do use white (`{colors.ink-2}`) for overlay text and `{colors.ink}` for text on light surfaces.
- Do pair a numeral and a year on the center line of the project carousel.
- Don't add buttons, cards or shadows; none were measured.
- Don't document the cookie banner colors as brand tokens.
- Don't state a corner radius; the measured radius is 0px.
- Don't add accent hues; the palette is neutral.

## Responsive Behavior

At 390px wide, the h1 ("ULTIMATE SHIELD") and h2 ("THE DAZZLING DIVISION") are 18px/18px uppercase in a 289px-wide block, and the body line ("RICHARD MILLE X ILIA TOPURIA") is 12px/12px. The nav block is 390px wide, 40px tall, with 16px/24px text. Character-weighted sizes at that width: 16px (393), 12px (113), 18px (112), 10px (24). The positions of the wordmark halves, the carousel and the menu at mobile were not measured.

## Iteration Guide

1. Start with the footage and add only hairlines and uppercase ABCDiatype labels.
2. Use `{typography.display}` for titles, `{typography.nav}` for the menu and `{typography.link}` for text lists.
3. Keep white as the overlay text color, and dark `{colors.ink}` on light panels.
4. Keep `{rounded.none}` for any element you build.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=milledollars --url=https://milledollars.fr/ --force --no-motion`.
