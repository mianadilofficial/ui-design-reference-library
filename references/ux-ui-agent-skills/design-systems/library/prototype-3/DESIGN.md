---
version: alpha
name: Prototype (Prototype Studio)
category: "Portfolio"
description: "Prototype (prototypestudio.fr), a French creative house for daring brands: a white canvas ruled with 1px #00000014 hairlines and diagonal construction lines, black type in condensed uppercase DeanGothicCMP (88.8889px display) and light italic SilvanaDisplay serif (40px statements), with only pill-shaped (9999px) elements."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  hairline: "#00000014"
  overlay-dim: "#0000004d"
typography:
  display:
    fontFamily: DeanGothicCMP, sans-serif
    fontSize: 88.8889px
    fontWeight: 400
    lineHeight: 88.8889px
    textTransform: uppercase
  display-mobile:
    fontFamily: DeanGothicCMP, sans-serif
    fontSize: 62.4px
    fontWeight: 400
    lineHeight: 62.4px
    textTransform: uppercase
  heading:
    fontFamily: SilvanaDisplay, serif
    fontSize: 40px
    fontWeight: 300
    lineHeight: 40px
  body:
    fontFamily: SilvanaDisplay, serif
    fontSize: 44.4444px
    fontWeight: 300
    lineHeight: 44.4444px
    textTransform: lowercase
  nav:
    fontFamily: DeanGothicCMP, sans-serif
    fontSize: 8.88889px
    fontWeight: 400
    lineHeight: 11.5556px
  link:
    fontFamily: SilvanaDisplay, serif
    fontSize: 17.7778px
    fontWeight: 400
    lineHeight: 17.7778px
rounded:
  pill: 9999px
spacing:
  s1: 1.78px
  s2: 2.67px
  s3: 7.11px
  s4: 8.89px
  s5: 13.33px
  s6: 17.78px
  s7: 26.67px
  s8: 71.11px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
    padding: 0px 17.7778px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
    borderColor: "{colors.hairline}"
---

## Overview

`https://www.prototypestudio.fr/` (title "Prototype - Creative house for daring brands", lang fr-FR) is the site of Prototype, a French studio that describes itself in its own words: "Prototype is a creative-driven hybrid structure, a one-stop shop, from ideas to execution. We are not just a production house, we are an agency, a design studio, and a digital factory all in one place. A place where brands can be more authentic, bold, and rise above the crowd." The measured page is 5,521px tall at 1280px with 311 visible elements.

The extractor recorded a hero with an h1 "CREATIVE HOUSE" (repeated for a rolling effect) and a lowercase/uppercase mixed line "for DARING BRANDS", both in white; the background behind that white type was not rendered in the capture, so the hero imagery is not described. Navigation entries are recorded as rolling pairs: "WORKS / we've DONE", "ABOUT / our BRAND", "CONTACT", and "IG / YT" for social links. The footer reads "LET'S CRAFT YOUR PROJECT TOGETHER".

What the capture does show is a stark editorial grid: a white page cut by 1px light-grey vertical and horizontal rules into a narrow left column and a wide right column, long diagonal hairlines and a large circle outline crossing the layout like construction drawing, a header with the heavy extended "Prototype" wordmark at left and condensed uppercase links WORKS, ABOUT, CONTACT and IG/YT at right, a mission statement in large light-italic serif that fades from dark grey to white as it runs down, a small cinematic still of a person on a sofa in a warm room, and an italic underlined "About us" link with a small triangle marker.

The voice is declarative and confident, mixing capital letters and lowercase within lines to set rhythm ("we've DONE", "our BRAND").

Taken together the page reads as an architect's drawing sheet turned into a portfolio: the rules and circles belong to the same family as the thin serif italic, while the heavy extended wordmark and the condensed capitals supply weight. Because almost nothing is coloured, the work itself, the filmic still of a lit living room in the capture, has to provide all warmth and saturation. The studio's positioning as both agency and production house shows in the mix of editorial typography and cinematic imagery.

## Colors

Colour is almost absent. Text colours by characters: `#000000` (523) and `#ffffff` (124). Backgrounds by area: `#00000014` (8,448), `#0000004d` (1,129), `#ffffff` (1,069), plus tiny white overlays `#ffffff1a` and `#ffffff33`.

- **canvas `#ffffff`**: page background in the capture.
- **ink / primary `#000000`**: all dark text, the footer type and link text; the site has no coloured accent or filled button, so `primary` equals ink.
- **hairline `#00000014`**: black at 8% opacity, the colour of every rule and of the footer's `1px solid #00000014` border.
- **overlay-dim `#0000004d`**: black at 30%, measured as a background on a large area (1,129), the dimming layer used over imagery or video.
- White `#ffffff` text (124 characters) is the hero and nav type measured over media.

The stylesheet root also defines `--color-gray: 116 116 116` and `--color-grid: 0 0 255` (a blue grid colour) as RGB triplets; neither was measured on a rendered element, so neither is tokenised.

## Typography

Two typefaces make the identity: **DeanGothicCMP**, a condensed gothic sans set in uppercase, and **SilvanaDisplay**, a light display serif loaded in 300 italic and 400 italic. By characters they split almost evenly: SilvanaDisplay 324, DeanGothicCMP 323.

- **display**: DeanGothicCMP 400, 88.8889px/88.8889px, uppercase (the h1); mobile 62.4px/62.4px.
- **heading**: SilvanaDisplay 300, 40px/40px, the mission statement (277 characters at 40px).
- **body**: SilvanaDisplay 300, 44.4444px/44.4444px, lowercase ("for DARING BRANDS").
- **nav**: DeanGothicCMP 400, 8.88889px/11.5556px on the measured link element (the header labels measure 21.3333px/21.3333px uppercase at the nav level).
- **link**: SilvanaDisplay 400, 17.7778px/17.7778px ("About us").

Other sizes: 33.7778px (132 characters), 71.1111px (footer line, 40), 160px (28), 106.667px (17), 14.2222px (10). Line-height equals font-size everywhere, so lines sit tight. Contrast of voice comes from pairing a hard condensed sans with a delicate italic serif.

## Layout

A rigid column grid made visible. In the capture a vertical rule divides a narrow left column from the wide right column; horizontal rules mark the header (49px high) and the intro row. Text blocks align to the right column's left edge. The footer is 538px tall with a 1px hairline border. Spacing values: 1.78, 2.67, 7.11, 8.89, 13.33, 17.78, 26.67 and 71.11px. The stylesheet also has `--header-height: 6rem` and `--padding-container: 1rem`.

## Elevation & Depth

No box-shadow was measured. Depth is expressed with opacity: hairlines at 8% black, dimming overlays at 30% black, and the statement text fading to white as it descends. Diagonal lines and a circle outline cross the layout without fill.

## Shapes

One radius was measured: 9999px, on three elements (pill/circle shapes such as the social or marker elements). All other measured elements compute to 0px. The decorative circle outline and diagonals echo that geometric, drafted feel.

## Components

- **Header**: white, 49px high, extended black "Prototype" wordmark at left; links WORKS, ABOUT, CONTACT and IG / YT at right in condensed uppercase.
- **Mission statement**: SilvanaDisplay light italic, 40px, dark grey fading downward.
- **Link ("About us")**: SilvanaDisplay 17.7778px italic, black, underlined, with a small triangle marker.
- **Image tile**: a single rectangular still with square corners in the left column.
- **Footer**: 538px, `1px solid #00000014` border, "LET'S CRAFT YOUR PROJECT TOGETHER" in DeanGothicCMP 71.1111px uppercase.
- **Nav rolling labels**: paired text ("WORKS / we've DONE") for a hover roll; the hover probe on these showed no colour change (white before and after).

## Design System Architecture

No public design system or brand guideline was opened, and none is cited. The site's stylesheet is Tailwind-based (root variables `--tw-ring-*`, `--tw-drop-shadow`) with custom properties for easing and layout (`--ease-out-back: cubic-bezier(0.175,0.885,0.32,1.275)`, `--ease-out: cubic-bezier(0.23,1,0.32,1)`, `--ease-in`, `--header-height: 6rem`, `--padding-container: 1rem`, `--vw`, `--vh-initial: 8px`) and colour triplets (`--color-white: 255 255 255`, `--color-gray: 116 116 116`). The de-facto system is two typefaces, black on white, hairline rules and opacity. Measured from `https://www.prototypestudio.fr/` (`web/data/extracted/prototype-3.json`).

## Do's and Don'ts

- Do set headlines in condensed uppercase DeanGothicCMP and statements in light italic SilvanaDisplay.
- Do draw structure with 1px `#00000014` rules and let them show.
- Do keep line-height equal to font-size.
- Do mix capitals and lowercase within a line for rhythm.
- Don't introduce an accent colour; the site is black, white and opacity.
- Don't use shadows or rounded rectangles; only 9999px pills were measured.
- Don't fill the diagonals or circle; they are outlines.
- Don't describe the hero imagery from this capture; it was not rendered.

## Responsive Behavior

The mobile pass recorded type only: the h1 went from 88.8889px to 62.4px (DeanGothicCMP, uppercase, white), and the mobile size distribution was 31.2px (519 characters), 18.72px (197), 39.52px (137), 62.4px (64), 16.64px (54) and 52px (35). Mobile layout, nav and grid behaviour were not measured.

## Iteration Guide

1. Canvas `#ffffff`, ink `#000000`, hairline `#00000014`.
2. Display in DeanGothicCMP uppercase 88.8889px; statements in SilvanaDisplay 300 italic 40px.
3. Build the page on a visible grid of 1px rules plus diagonal and circular construction lines.
4. Use only pill shapes for rounded elements; keep images square.
5. Re-measure: `node web/scripts/extract-tokens.mjs --slug=prototype-3 --url=https://www.prototypestudio.fr/ --force --no-motion`, then `node web/scripts/verify-designs.mjs --slug=prototype-3`.
