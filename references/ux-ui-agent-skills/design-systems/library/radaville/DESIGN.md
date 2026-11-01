---
version: alpha
name: Radaville Studio
category: "Agencies & Studios"
description: "Radaville Studio's entry page (radaville.studio) is a one-screen dark splash: #000000 and #040404 canvas with espresso #311512 and #1d0100 surfaces, cream ink #ebe5df and #f1e6d2, PPNeueWorld at 66.6667px for a loader counter, PPNeueMontreal 16px body, a pale pill Enter button and no shadows."
colors:
  canvas: "#000000"
  page-body: "#040404"
  ink: "#ebe5df"
  primary: "#f1e6d2"
  surface: "#311512"
  surface-oxblood: "#1d0100"
  hairline: "#cdcac6"
typography:
  display:
    fontFamily: PPNeueWorld, sans-serif
    fontSize: 66.6667px
    fontWeight: 400
    lineHeight: 66.6667px
  display-mobile:
    fontFamily: PPNeueWorld, sans-serif
    fontSize: 41.6px
    fontWeight: 400
    lineHeight: 41.6px
  body:
    fontFamily: PPNeueMontreal, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 17.6px
rounded:
  pill: 9999px
spacing:
  s1: 6.67px
  s2: 20px
  s3: 92px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.pill}"
    height: 29px
    borderColor: "{colors.page-body}"
---

## Overview
Measured from https://radaville.studio/ (document title "Radaville Studio", page height 800px, i.e. one screen). This is the studio's own site, and what the extractor measured is its entry screen, not a scrolling home page: the only text it found is a large counter ("100", the h1-role element at 66.6667px), the location line "Düsseldorf, Germany" and the words "Enter" on a button. The capture shows the entry screen once it has loaded: a pure black field with a small ring at the top left, an arch-shaped photograph of a warm interior (a fireplace, a rust-colored sofa and a white chair, with wall lights) centered at the top, the small caps line "A MULTI-DISCIPLINARY DESIGN STUDIO", the two-line serif headline "Elevating Spaces, Defining Aesthetics, Cultivating Brands", a pale pill labelled "Enter", and at the bottom a dotted line and "(CLICK ANYWHERE FOR SOUND)". The extractor hid a `MenuAnimation_root__f1AQ6` overlay.

Everything behind the Enter action (work, studio, contact pages) was not measured: the page is a single screen of 800px, the extraction was repeated once on the same URL with identical results, and no further pages were opened, so this file documents the entry experience only. The opened home page lists navigation Work, About, Curation and Contact, services in interior design, art direction and branding, and Work entries Casa Paz and two Hagi projects (Oldtown, Downtown); none of those inner pages were measured.

## Colors
The palette is a dark warm monochrome. Backgrounds by area: #311512 (2049, a deep espresso brown), `canvas` #000000 (1024), #1d0100 (292, `surface-oxblood`, a near-black red), and two cream values (#f1e6d2 and #ebe5df) at trivial weights, which are the button and text fills. The extractor reports the body/main background as `page-body` #040404, and the pixel check of the capture finds #010101 covering about 91% of the screen. `canvas` is #000000 because black is the dominant measured background.

Text colors by characters: `ink` #ebe5df (138 chars, the counter and Enter label), `primary` #f1e6d2 (61, the location line) and #040404 (5, text on the cream button). The cream pair is warm, slightly yellow-beige: #f1e6d2 is the warmer. `hairline` #cdcac6 is the only border color (1 use). No saturated accent is measured. The pill photograph in the capture carries the only color on the screen (warm browns and a rust sofa); no values were measured for it.

## Typography
Two families are in use: "PPNeueMontreal" (144 chars, weight 400) for the small text and "PPNeueWorld" (60 chars, weight 400) for the counter and the Enter label, both sans-serif fallback stacks. A third face, "PPEditorialOld" at weight 200, is loaded by the page, but no text was measured in it, so no token is declared; the capture shows the headline in a light, high-contrast serif, and its family name was not measured. No foundry page was opened.

Roles: `display` PPNeueWorld 66.6667px/66.6667px weight 400 (the counter), 41.6px on the 390px mobile pass; `body` PPNeueMontreal 16px/17.6px weight 400 (14.56px/16.016px on mobile). Sizes by characters: 16px (55), 46px (52), 10.6667px (31), 20px (29), 12px (23), 8px (6), 17.3333px (5) and 66.6667px (3). Only weight 400 is measured (204 chars). No letter-spacing is measured.

## Layout
The page is exactly one viewport tall (800px at 1280px width). The root variables show it is built on viewport units: `--vw: 12.8px`, `--vh: 8.01px` and `--screen-size: 1920`, so sizes derive from a 1920px design width (12.8px is 1% of the 1280px measurement width). Measured paddings: 20px (2 uses), 6.66667px (1, the counter's top padding) and 92px (1). No gaps are recorded, and no header, columns or cards are present on this screen. The composition in the capture is centered on one vertical axis: arch image, small-caps label, headline, button.

## Elevation & Depth
No shadows are measured. The screen has no layered surfaces; depth comes from the arch-cropped photograph on pure black and from the hover transition of the button. The only measured border radius on the screen is 50% (1 use, a circular element such as the top-left ring).

## Shapes
Two shapes: a circle (50%) and a pill. The Enter button's radius is 66.6667px on desktop and 104px on mobile (both fully round on a 29px-high and a 36px-high element). The photograph is cropped in an arch (a rounded top), per the capture. The generated token `rounded.pill` is 9999px for these pills.

## Components
- **button-primary** (the Enter button): on desktop, a #ebe5df fill with a #040404 border, a fully round radius and 29px height; its text color is rgb(247, 246, 239) (#f7f6ef) in the hover record, and its text is duplicated in the DOM ("Enter" twice, an overlay text-swap pattern). In the hover pass its opacity moves from 0 to 0.3978 mid-transition. On mobile it is #040404 text on #ebe5df, PPNeueWorld 22.88px/22.88px, 125 x 36px, radius 104px.
- **Location line**: "Düsseldorf, Germany" in #f1e6d2, 16px.
- **Counter**: the loading number "100" in #ebe5df, 66.6667px, with 6.66667px top padding.
- No navigation, cards, inputs or footer exist on the measured screen.

## Design System Architecture
No public design system or brand guideline exists on the measured page, and none was found: the root variables (28) are almost entirely animation easing curves — `--ease-in-quint: cubic-bezier(0.755,0.05,0.855,0.06)`, `--ease-in-out-quint: cubic-bezier(0.86,0,0.07,1)`, `--ease-out-cubic: cubic-bezier(0.215,0.61,0.355,1)`, `--ease-out-expo: cubic-bezier(0.19,1,0.22,1)`, `--ease-in-out-expo: cubic-bezier(1,0,0,1)`, `--ease-out-pow4: cubic-bezier(0.16,1,0.3,1)`, `--ease-in-out-pow4: cubic-bezier(0.84,0,0.29,1)`, `--ease-out-quart: cubic-bezier(0.165,0.84,0.44,1)`, `--top-text: cubic-bezier(0.31,0.13,0.11,1)` and others — plus `--vw`, `--vh` and `--screen-size: 1920`. The system is therefore a motion-and-viewport kit rather than a color or type token set: the studio's identity is expressed through timing curves, dark ground and photography.

## Do's and Don'ts
- Do keep the ground pure black or #040404 with warm cream (#ebe5df, #f1e6d2) text.
- Do use PPNeueMontreal 16px for small copy and PPNeueWorld for large numerals and buttons.
- Do reveal content with long exponential easings (`--ease-out-expo`, `--ease-in-out-quint`).
- Don't add drop shadows or colored UI accents: none are measured.
- Don't treat the measured counter "100" as a real headline; it is a loader value.
- Don't document inner pages from this file; they were not measured.

## Responsive Behavior
At the 390px mobile pass the counter becomes 41.6px/41.6px (from 66.6667px), the location line is 14.56px/16.016px in a 225px box, and the Enter button is 125 x 36px with 22.88px text and a 104px radius. Mobile size frequencies: 14.56px (87 chars), 12.48px (60), 27.04px (52), 22.88px (5), 41.6px (3). All other responsive behavior is not measured.

## Iteration Guide
1. Black ground, centered arch photograph, cream text.
2. One pill Enter button (#ebe5df), 29px high on desktop.
3. Size everything in viewport units against a 1920px design width.
4. Use the published easing variables for entrances.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=radaville --url=https://radaville.studio/ --force --no-motion` after changes, and capture the inner pages separately before extending this file.

## Imagery and Content Notes
The capture's single image is a tall arch of a lit living room: a dark marble fireplace with a glowing fire, a television above it, a plant and framed pictures on the mantel, ornate plaster cornice moldings, a wall sconce, a rust-red tufted sofa and the corner of a white sculptural chair. Its light is warm amber against the black page, which is why the interface palette is limited to espresso, cream and black. Above the headline, the small-caps label reads "A MULTI-DISCIPLINARY DESIGN STUDIO" in light grey. The headline is two lines, centered, in white-cream and tightly spaced. The Enter pill below it is cream with dark serif text in the capture. At the foot of the screen, four dots appear above the instruction "(CLICK ANYWHERE FOR SOUND)", which signals that the site plays audio after interaction. The voice is minimal and ceremonial: three verbs (Elevating, Defining, Cultivating) mapped to three nouns (Spaces, Aesthetics, Brands).
