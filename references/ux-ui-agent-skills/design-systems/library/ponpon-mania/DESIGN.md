---
version: alpha
name: Ponpon Mania
category: "Culture & Events"
description: "Ponpon Mania (ponpon-mania.com) is an interactive comic by Justine Soulie and Patrick, a single 1280x800 illustrated scene on a near-black #171717 canvas with cream #feece3 Libre Franklin 700 labels at 15px, a black 'read now' pill over flat purple, orange, pink and green artwork, and 3px, 25px and 42px radii."
colors:
  canvas: "#171717"
  ink: "#feece3"
  primary: "#feece3"
  ink-dim: "#3b3b3b"
  ink-darker: "#212121"
  ink-faint: "#3a3a3a"
typography:
  display:
    fontFamily: "\"Libre Franklin\", Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 700
    letterSpacing: 0.015px
  display-mobile:
    fontFamily: "\"Libre Franklin\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 700
    letterSpacing: 0.012px
  link:
    fontFamily: "\"Libre Franklin\", Helvetica, Arial, sans-serif"
    fontSize: 7.8125px
    fontWeight: 700
rounded:
  xs: 3px
  sm: 25px
  md: 42px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 10px
  s7: 20px
  s8: 25px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
---

## Overview

Ponpon Mania is not a conventional website: the measured page, titled "Ponpon Mania - Interactive Comic", is a one-screen experience with a scroll height of 800px at a 1280px viewport and only 91 visible elements. The body text reads "by Justine Soulié and Patrick", crediting the authors. The page is an illustrated stage rather than a layout of sections. A scalloped, cloud-shaped flat illustration fills the viewport: an orange sky with pink and orange clouds, a cream sheep-like character with open arms standing on an orange crate above a city skyline, a grey animal on the left holding a red drink on a tray, a green dinosaur on the right holding a phone, and pink cloud forms along the bottom edge. Behind the scene the ground is flat lilac-blue.

All interface text is lower case and tiny. The header carries "chapters" at left, the "ponpon mania" wordmark in a rounded display lettering at centre, "about" at right, and an "EN / FR" language switch at the top right. A circular black badge printed around its edge with "YOUR INTERACTIVE COMIC! TAP OR TOUCH INTERACTIVE!" floats at the upper right of the scene, and a large black pill with "read now" in cream, set at an angle, is the single call to action at the bottom centre. A small four-square icon sits at the lower left.

The character of the site is playful, saturated and illustration-first; the interface recedes to a single cream-on-black type treatment so that the artwork is the only colour source.

## Colors

The CSS-measured palette is tiny. The only opaque background by area is `#171717` (weight 1,037), set on the body. The text colours by characters are `#feece3` (21 characters), `#3b3b3b` (2), `#212121` (2) and `#3a3a3a` (1).

- **canvas `#171717`** is the body background, a near-black.
- **ink `#feece3`** is a warm cream used for all visible interface text: chapters, about, EN/FR and the "read now" label. It is also the colour the generator selected as `primary`, because the page has no filled brand-colour button; the single action, "read now", is cream text on a dark `#171717` pill (hover measured: text `#feece3` and background `#171717` both before and after).
- **ink-dim `#3b3b3b`, ink-darker `#212121`, ink-faint `#3a3a3a`** are dark greys measured on a handful of characters (5 in total); the elements carrying them were not identified, and they are kept only because they were measured.

The illustration palette (lilac-blue ground, orange and amber sky, pink clouds, green dinosaur, red drinks) is rendered artwork. These colours were not measured as CSS values, so they are described here qualitatively and not given hex tokens.

## Typography

One family is loaded: **Libre Franklin**, as a variable font spanning weights 100 to 900. The measured family list by characters is Libre Franklin (14) and Arial (12). Fallback stack: `Helvetica, Arial, sans-serif`.

- **display**: Libre Franklin 700, 15px, 0.015px letter-spacing; used for the nav labels such as "chapters" (measured as the H1-role element, since the page has no heading element).
- **display-mobile**: Libre Franklin 700, 12px, 0.012px; the same label measured in the mobile pass.
- **link**: Libre Franklin 700, 7.8125px; the measured size of the link elements (58px high hit areas).

Font sizes by characters on desktop: 15px (13), 35px (8), 10px (4), 6px (1). The element carrying the 35px size (8 characters) was not identified in the measurement. Weights by character: 700 (13), 600 (12), 400 (1). Everything is lower case, bold and cream, so hierarchy comes from size and position over the artwork instead of weight changes.

## Layout

The page is a full-viewport canvas of 1280x800. The top row is a three-part header: nav word at left, wordmark centred, nav word at right, with a small language pair at the far right. The illustration is centred and bleeds to the edges at the bottom. There is no grid, no sections and no footer measured.

Measured spacing values are 1, 2, 4, 5, 6, 10, 20 and 25px, which are generator-observed margins and gaps in the small interface layer; the scene itself is positioned inside a viewport-height container (the stylesheet root defines `--vh: 8px`, a unit used to size things relative to the viewport height).

## Elevation & Depth

No box-shadow was measured on the page (the box-shadow list is empty). Depth is drawn into the illustration instead: black outlines around the cloud-shaped scene, overlapping pink foreground clouds in front of the characters, and the angled black "read now" pill sitting on top of the artwork. The only interface-level layering is the circular rotating-text badge over the scene and the pill over the foreground clouds.

## Shapes

Three radii were measured: 3px (1 element), 25px (2) and 42px (1). The pill-shaped "read now" control and the circular badge are rounded shapes; the exact element for each radius was not separately recorded, so the tokens are listed without attribution beyond the measurement. The artwork uses organic scalloped silhouettes with heavy black outlines, so the rounded pill and circle echo the cloud forms.

## Components

- **Nav links ("chapters", "about")**: cream `#feece3`, Libre Franklin 700 at 15px on desktop, transparent background; hover left both colour and background unchanged in the measurement.
- **"read now" pill**: black/`#171717` fill, cream text, its lettering is larger than the nav labels in the capture (the measurement lists a 35px size for 8 characters but does not attribute it), angled slightly, bottom centre of the scene. It is the only call to action.
- **Language switch "EN | FR"**: tiny cream text at the top right.
- **Rotating text badge**: circular, black, with edge-printed text "YOUR INTERACTIVE COMIC! TAP OR TOUCH INTERACTIVE!" and a small pink flower-like icon at its centre.
- **Wordmark "ponpon mania"**: cream rounded display lettering at the top centre.
- **Corner icon**: four small squares at the lower left.

## Design System Architecture

No public design system exists for this site, and none was found linked from the page measured. The stylesheet root defines only two custom properties, `--borderColor: hsla(0,0%,9%,0)` (a fully transparent near-black) and `--vh: 8px`, so the de-facto system is: one type family (Libre Franklin, weights 100-900), one body background `#171717`, one text colour `#feece3`, and all colour delivered by illustration. Measured from `https://ponpon-mania.com/` (final URL `https://ponpon-mania.com/`).

## Do's and Don'ts

- Do put every interface label in cream `#feece3` Libre Franklin 700 over the dark or illustrated ground.
- Do keep labels lower case ("chapters", "about", "read now").
- Do let the illustration carry all colour; keep the interface colourless.
- Do use a single oversized call to action rather than several buttons.
- Don't add drop shadows; none were measured.
- Don't invent CSS hex values for the artwork colours; they are image content, not tokens.
- Don't set body paragraphs: the page has no paragraph copy beyond the author credit.
- Don't add extra weights; only 400, 600 and 700 were measured.

## Responsive Behavior

The mobile pass recorded type sizes only: the nav label dropped from 15px to 12px (letter-spacing 0.012px), and the 35px size became 20px; the small 10px and 6px sizes were unchanged. Mobile layout, breakpoints, nav arrangement and touch targets were not measured. The artwork is described in the desktop capture only; how it re-crops on a phone was not measured.

## Iteration Guide

1. Start with `canvas #171717` and `ink #feece3`, both from the measured body.
2. Use Libre Franklin 700, lower case, 15px for labels (12px for the mobile variant).
3. Keep the interface to a header row, a language switch and one pill-shaped call to action.
4. Use radii 3px, 25px and 42px only; round shapes should echo the scalloped artwork.
5. Supply colour only through illustration, not interface fills.
6. Re-measure with `node web/scripts/extract-tokens.mjs --slug=ponpon-mania --url=https://ponpon-mania.com/ --force --no-motion`, then `node web/scripts/verify-designs.mjs --slug=ponpon-mania`.
