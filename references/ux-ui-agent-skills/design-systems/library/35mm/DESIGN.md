---
version: alpha
name: 35mm
category: "Tech & AI"
description: "35mm, a Canon F-1 wireframe showcase served from lab.chakibmzn.com: #141414 charcoal canvas, B612 Mono throughout, a 145.92px bold uppercase TIMELESS CRAFT headline with -7.296px tracking, 11.5556px #c8c8c8 body, #bf6d15 orange accent, thin #555555 lines and no radius."
colors:
  canvas: "#141414"
  ink: "#c8c8c8"
  primary: "#bf6d15"
  line-grey: "#555555"
  ink-bright: "#ffffff"
typography:
  display:
    fontFamily: "\"B612 Mono\""
    fontSize: 145.92px
    fontWeight: 700
    lineHeight: 145.92px
    letterSpacing: "-7.296px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"B612 Mono\""
    fontSize: 41.73px
    fontWeight: 700
    lineHeight: 41.73px
    letterSpacing: "-2.0865px"
    textTransform: uppercase
  body:
    fontFamily: "\"B612 Mono\""
    fontSize: 11.5556px
    fontWeight: 400
    lineHeight: 17.3333px
  body-mobile:
    fontFamily: "\"B612 Mono\""
    fontSize: 7.92188px
    fontWeight: 400
    lineHeight: 11.8828px
rounded:
  xs: 2px
  pill: 9999px
spacing:
  s1: 7.11px
  s2: 10.67px
  s3: 14.22px
  s4: 17.78px
  s5: 53.33px
  s6: 88.89px
components:
  headline:
    textColor: "{colors.ink-bright}"
    typography: "{typography.display}"
  body-text:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  accent-label:
    textColor: "{colors.primary}"
  footer:
    textColor: "{colors.ink-bright}"
---

## Overview

35mm is a single-page interactive piece about 35mm photography. The measured address redirected from 35mm-one.vercel.app to https://lab.chakibmzn.com/35mm/, so it is served from an individual's lab domain; the page says nothing about its author, and no credits are listed. The page title is "35mm". The fetched text describes viewfinder-style placeholders ("35mm", "00fps", "0x0", "00:00:00"), a "0%" progress indicator and the headline "Timeless Craft", then content about the Canon F-1 (introduced in 1971 as Canon's professional SLR), 35mm film (24x36mm frames, 3:2 ratio, C-41, E-6 and black-and-white development), a table of five film stocks (Kodak Portra 400, Ilford HP5 Plus, Kodak Ektar 100, Fujifilm Superia X-TRA 400, Cinestill 800T) and a cross-section of colour negative film layers.

The capture shows a 960px-wide, very tall view: the headline "TIMELESS CRAFT" in huge white bold monospace across the top, and below it a large white-line wireframe drawing of a Canon-style SLR camera (pentaprism, lens barrel with ribbed rings, film-advance lever) on charcoal. Two short columns of small monospace text overlay the drawing (the F-1 history paragraphs). At the top left, tiny grey readouts "10fps 1280x800", at the top right an orange dot with "00:00:09", and corner brackets and a tick-mark ruler at the bottom give a viewfinder frame. A white vertical tab at the right edge reads "Site of the Day"; it is an award-site widget and not part of the design.

The voice is technical and archival; the interface imitates camera instrumentation. Measured scroll metrics: the page is 2,400px high with an inner scroller of 14,065px, so the story runs through an internal scroll container, and 403 visible elements were counted.

## Colors

- **Canvas `#141414`** (`--color-dark-1: 20 20 20`): the single background (4,416 area weight).
- **Ink `#c8c8c8`** (`--color-light-1: 200 200 200`): body text, 3,002 of 3,335 measured characters.
- **Primary `#bf6d15`** (`--color-orange-1: 191 109 21`): the orange of small labels and the recording dot (270 characters). A darker orange, `--color-orange-2: 100 50 0`, is also declared.
- **Line grey `#555555`** (`--color-dark-2: 85 85 85`): borders (7 uses) and secondary text (36 characters).
- **Bright `#ffffff`**: the headline and the footer text (27 characters).
- `--color-dark-3: 150 150 150` is declared. Colour variables are stored as space-separated RGB triples.

The wireframe lines are light grey on charcoal. Other values seen in the stylesheet (`#2cc9ff`, `#a2db3c`, `#9ca3af`, `#3b82f680` and similar) come from a debug panel library and utility styles; the font list includes `lil-gui`, a developer control panel, so those colours are not brand colours.

## Typography

**B612 Mono** carries almost everything (3,031 of 3,335 characters; weights 400 and 700). **Inter** appears for 304 characters (weight 600 is measured for 283 characters).

- **Display, B612 Mono 145.92px / 700 / 145.92px, -7.296px, uppercase**: "TIMELESS CRAFT", 1,209px wide and 146px tall. A second line size of 135.04px (13 characters) is also measured. On mobile the headline is 41.73px with -2.0865px tracking, 341px wide.
- **Body, B612 Mono 11.5556px / 400 / 17.3333px**: 2,925 characters; paragraphs are narrow columns about 298px wide.
- **Small, 10.6667px (362 characters) and 9.77778px (21)**: readouts and labels.
- On mobile the body is 7.92188px / 11.8828px (2,979 characters), and labels are 7.3125px.

The root defines `--vw: 640` and `--s: calc(100vw / var(--vw))`, a viewport-based unit; at the measured 1280px viewport the unit is 2px. The fractional pixel sizes (for example 11.5556px) differ between the desktop and mobile passes. Tracking on the headline is -5% of the size. Foundry pages were not opened.

## Layout

A 12-column grid is declared: `--grid-cols-count: 12`, `--grid-gap: calc(var(--s) * 20)`, `--column-width: calc((100vw - (12 * grid-gap)) / 12)`. A scanned-element height is defined as two thirds of the grid width (`--scan-element-height`) and `--scan-padding-y` centres it vertically in the dynamic viewport height; the page uses an inner scroller. The headline spans the whole width at the top. Text columns are narrow (298px) and positioned on the left and right of the drawing at different heights. Gaps measured: 17.7778px (25 uses) and 355.556px (4); paddings 17.7778px (23), 14.2222px, 88.8889px and 992.593px (once). The six spacing tokens are 7.11, 10.67, 14.22, 17.78, 53.33 and 88.89px.

## Elevation & Depth

No box shadows are used (the stylesheet contains `none`, a Tailwind ring variable with zero value and a 1px inset focus ring `inset 0 0 0 1px var(--focus-color)` from the debug panel). Depth is drawn with line weight and overlap: the wireframe camera is drawn in thin light lines, with text overlaid on top of the drawing and the headline over the top. There are no filled surfaces other than the charcoal canvas.

## Shapes

No border radius was measured on any element. The stylesheet contains `2px` and `9999px`, which are given as tokens `xs` and `pill`; their use on the home view was not measured. The visible shapes are straight lines, boxes, circles and ellipses from the wireframe lens, and the corner bracket marks of the viewfinder. The recording dot is a small circle in orange.

## Components

- **Headline**: bold uppercase monospace at 145.92px, white, spanning the width.
- **Text columns**: B612 Mono 11.5556px in `#c8c8c8`, about 298px wide, short paragraphs about the Canon F-1.
- **Viewfinder readouts**: fps and size at top left, timer with an orange dot at top right, corner brackets and a ruler at the bottom, all in small grey monospace.
- **Wireframe camera**: line drawing, not a UI component.
- **Interactive prompts**: the fetched text mentions "Hover on a lens part" and labelled parts (pentaprism, focus screen); their styling was not measured.
- **Footer**: 2,400px-tall footer element with white 16px / 24px text, empty text content.

Hover states: none recorded in the extraction.

## Design System Architecture

No public design system or brand guidelines exist for this piece. The fetched page (https://lab.chakibmzn.com/35mm/) names no author or technology; its only external link is an Awwwards listing for the site, which was not opened. The de-facto system lives in root variables: RGB-triple colours (`--color-dark-1`, `--color-dark-2`, `--color-dark-3`, `--color-light-1`, `--color-orange-1`, `--color-orange-2`), a viewport unit (`--vw`, `--s`), a 12-column grid (`--grid-cols-count`, `--grid-gap`, `--column-width`) and scan-element sizing. Tailwind utility variables (`--tw-ring-*`, `--tw-shadow`) are present, as is the lil-gui debug panel.

## Do's and Don'ts

- Do use `#141414` with `#c8c8c8` text and `#ffffff` for the headline only.
- Do set everything in B612 Mono, with the headline bold, uppercase and tightly tracked (-7.296px at 145.92px).
- Do use orange `#bf6d15` sparingly for the live indicator and labels.
- Do keep lines thin and light and avoid fills.
- Don't add shadows or rounded cards.
- Don't treat the "Site of the Day" tab or the `lil-gui` panel as design elements.
- Don't use the debug panel's colours (`#2cc9ff`, `#a2db3c`).
- Don't hard-code pixel sizes without the viewport unit; sizes are fractional because they scale.

## Responsive Behavior

The mobile pass (390px wide) measured: headline 41.73px / 700 with -2.0865px tracking (341px wide, 42px tall); body 7.92188px / 400 / 11.8828px in a 177px-wide column (392px tall); other sizes 7.3125px and 41.145px. The desktop headline is 145.92px at 1280px. Column layout of the text and drawing at 390px was not measured beyond those widths.

## Iteration Guide

1. Charcoal `#141414`, grey text `#c8c8c8`, white headline, orange `#bf6d15` indicator.
2. B612 Mono only; headline 145.92px bold uppercase, body 11.5556px / 17.3333px.
3. Compute sizes from `--s = 100vw / 640`.
4. Draw with thin light lines; no shadows, no fills.
5. Measure the film-table and negative-layer sections (an inner-scroller capture) before documenting them.
6. Run `node web/scripts/verify-designs.mjs --slug=35mm` after edits.
