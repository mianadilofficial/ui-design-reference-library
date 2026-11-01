---
version: alpha
name: Layrid
category: "Business & Corporate"
description: 'Layrid, a ''100th Projects'' commemorative portfolio site measured live: near-black #080808 canvas, #dcdcdc text, PP Neue Montreal Medium with Noto Sans JP for Japanese, square 0px corners and a black uppercase 12px VIEW MORE button.'
colors:
  canvas: '#080808'
  ink: '#dcdcdc'
  primary: '#000000'
  on-primary: '#dcdcdc'
  surface-line: '#333333'
typography:
  display:
    fontFamily: '"PP Neue Montreal Medium"'
    fontSize: 20px
    fontWeight: 400
    lineHeight: 23px
  display-mobile:
    fontFamily: '"PP Neue Montreal Medium"'
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20.7px
  heading:
    fontFamily: '"PP Neue Montreal Medium"'
    fontSize: 24px
    fontWeight: 400
    lineHeight: 27.6px
  button:
    fontFamily: '"PP Neue Montreal Medium"'
    fontSize: 12px
    fontWeight: 400
    lineHeight: 13.8px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 14px
  s3: 15px
  s4: 20px
  s5: 30px
  s6: 85px
  s7: 100px
components:
  button-primary:
    backgroundColor: '{colors.primary}'
    textColor: '{colors.ink}'
    typography: '{typography.button}'
    rounded: '{rounded.none}'
    padding: 14px 106px 14px 20px
    height: 46px
  link:
    backgroundColor: '{colors.primary}'
    textColor: '{colors.ink}'
    typography: '{typography.display-mobile}'
    rounded: '{rounded.none}'
  nav:
    textColor: '{colors.ink}'
    rounded: '{rounded.none}'
  nav-link:
    textColor: '{colors.ink}'
    typography: '{typography.display}'
    rounded: '{rounded.none}'
  footer:
    backgroundColor: '{colors.primary}'
    textColor: '{colors.ink}'
    rounded: '{rounded.none}'
---

## Overview

Layrid is a personal portfolio microsite titled "100th Projects", a commemorative archive of 100 creations made between 2020 and 2025, sorted into five categories of twenty pieces each: Creative, Exploration, Growth, Expression and Playfulness. The opened page describes the work as "diverse range of creations", with a Learning note in which the author reflects on persistence. The copy is bilingual, English and Japanese side by side, and its voice is warm, personal and modestly reflective rather than promotional.

Visually the page is a dark, cinematic gallery. The capture shows a full-height photographic hero, a blurred figure passing a green-painted staircase, with a tiny wordmark "Layrid" at the top left, a menu glyph at the top right, a row of small captions ("WORK", "FROM", "(2020)", "TO", "(2025)") spaced across the middle of the viewport, and the large title "100TH PROJECTS" with the run-together subtitle "diverserangeofcreations" at the bottom. The interface chrome is almost absent so that the imagery carries the page. Text is small and light-colored on an almost-black ground. The measured URL is `https://layrid.tomoyaokada.com/`.

## Colors

The palette is monochrome. Values come from `web/data/extracted/layrid.json`, and three of them also appear as root custom properties.

- **Canvas `#080808`**: the page background, declared as `--background-color: #080808`.
- **Ink `#dcdcdc`**: the text color for essentially all copy (1142 characters measured), declared as `--color-white: #dcdcdc`. It is a soft off-white, not pure white.
- **Primary `#000000`**: the measured fill of the "VIEW MORE" button and the footer region; it dominates the background-by-area table (weight 3890). It is slightly darker than the canvas, so the button reads as a recessed black block on the near-black page.
- **On-primary `#dcdcdc`**: button text, the same as ink.
- **Surface-line `#333333`**: a minor background (weight 2) used for thin structural elements.

The root variables also declare `--color-black: #111` and `--border-color: #3f3f3f`; these are not used as tokens in the generated set. There is no chromatic accent: all color on the page comes from photography and project thumbnails. No gradients or tints are measured.

## Typography

Two families are used. **PP Neue Montreal Medium** is the Latin face (945 characters), with **PP Neue Montreal Book** appearing for 40 characters. **Noto Sans JP** (197 characters at weight 600, loaded as a variable 100 to 900 face) covers Japanese text. Every typography token uses the family `"PP Neue Montreal Medium"` at weight 400.

| Token | Size / line-height | Notes |
|---|---|---|
| `display` | 20px / 23px | h1 role (the "Layrid" wordmark) and nav links |
| `display-mobile` | 18px / 20.7px | mobile h1 role at 390px |
| `heading` | 24px / 27.6px | h2 role |
| `button` | 12px / 13.8px | uppercase button label |

Body text in the first paragraph measures 18px with 21.6px line-height on desktop. By character count the sizes are 18px (538), 14px (302), 12px (138), 15px (46), 40px (46) and 16px (40). Letter-spacing measured: 14px text at 0.28px and 64px text at -1.536px, so the largest display text (the "100TH PROJECTS" title) is tightened while small text is opened slightly. The root variables define a size scale: `--app-font-s: 10px`, `--app-font-m: 12px`, `--app-font-l: 14px`, `--app-font-xl: 16px` and `--app-font-xxl: 36px`. Button labels are uppercase. The h2 text in the extraction is split into single characters on separate lines ("d i v e r s e ..."), showing that the subtitle is built from per-letter elements for animation.

## Layout

Layout is driven by a 12-column, 4-row grid declared in root variables: `--app-grid-col: 12`, `--app-grid-row: 4`, `--app-grid-col-gap: 10px`, `--app-grid-row-gap: 10px` and `--app-grid-padding: 30px`. The captions in the hero are spaced to different columns of this grid, matching the capture. The overall page height measured 2400px at desktop.

Spacing tokens measured: 4px, 14px, 15px, 20px, 30px, 85px and 100px. The padding table shows 30px, 4px, 14px and 20px, each five times, and the gap table shows 100px twice. Density is very low: a few small text items on a full-viewport photograph, with generous empty space. Category navigation uses thumbnails with labels, according to the opened page.

## Elevation & Depth

No box shadows and no border colors were measured. Depth comes from photography, blur and a dark canvas, not from UI elevation. The only state change measured is opacity: the "Layrid" nav link dropped from opacity 1 to about 0.5236 on hover, with no color, border or shadow change. The brand does not use layered cards.

## Shapes

`borderRadii` in the extraction is empty, so every rendered element computes a radius of 0px. The token is `rounded.none: 0px`, and the primary button uses it. Rectangles are the only shape; imagery is full-bleed and edges are square. This is a measured value, not a style opinion.

## Components

**Primary button (`button-primary`)**: black `#000000` background, `#dcdcdc` text, `button` typography (12px, uppercase), 0px radius, padding `14px 106px 14px 20px`, height 46px. The label in the capture is "VIEW MORE". The asymmetric padding, with 106px on the right, leaves a wide empty area on the right side of the label.

**Nav and nav link**: `#dcdcdc` text, no background, nav height 30px, links use the 20px `display` typography. The nav contains the wordmark "Layrid"; a menu glyph appears in the capture at the top right.

**Link / category tile**: a link block with a black background and `#dcdcdc` text at 18px/18px, 375px tall in the extraction, with the label "Go to each work's page".

**Footer**: black background, `#dcdcdc` text; contains the same link blocks.

**Hero captions**: small `#dcdcdc` labels spread across the grid. They are text, not components with tokens.

## Design System Architecture

No public design system or brand guideline exists for Layrid: the opened page (https://layrid.tomoyaokada.com/) links only to its home and five category pages. The de-facto system is defined by root custom properties with an `--app-` prefix: font sizes (`--app-font-s` to `--app-font-xxl`), grid (`--app-grid-col`, `--app-grid-row`, `--app-grid-col-gap`, `--app-grid-row-gap`, `--app-grid-padding`) and colors (`--background-color`, `--color-white`, `--color-black`, `--border-color`). Fonts are a commercial grotesque (PP Neue Montreal) and Noto Sans JP. The system is very small and consistent: one background, one text color, one button, zero radius.

## Do's and Don'ts

Do:
- Keep the ground at `#080808` and the text at `#dcdcdc`.
- Use PP Neue Montreal for Latin and Noto Sans JP for Japanese text.
- Use uppercase 12px labels for buttons.
- Keep corners square at 0px.
- Place small text on the 12-column grid with 10px gutters and 30px outer padding.
- Let photography fill the viewport.

Don't:
- Do not add a chromatic accent; none was measured.
- Do not round corners or add shadows.
- Do not use pure white text; `#dcdcdc` is the measured value.
- Do not add decorative borders; none were measured.

## Responsive Behavior

The 390px mobile pass measured these roles: h1 18px with 20.7px line-height, h2 18px with 20.7px line-height, body text 14px with 16.8px line-height, and the "VIEW MORE" button at 12px, padding `10px 80px 10px 14px`, height 38px (desktop: 46px height, 106px right padding). Mobile grid behavior, navigation form and breakpoints are not measured.

## Iteration Guide

1. Set `canvas` `#080808`, `ink` `#dcdcdc`, `primary` `#000000`.
2. Use PP Neue Montreal Medium at weight 400; 20px/23px for the wordmark, 24px/27.6px for h2 and 12px uppercase for buttons.
3. Keep `rounded.none: 0px` on every component.
4. Lay out on 12 columns with 10px gaps and 30px padding.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=layrid --url=https://layrid.tomoyaokada.com/ --force --no-motion` before changing a value, then `node web/scripts/verify-designs.mjs --slug=layrid`.
