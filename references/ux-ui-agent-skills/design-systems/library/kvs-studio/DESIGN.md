---
version: alpha
name: KVS Studio
category: "Agencies & Studios"
description: "KVS Studio (kvs.services) entry screen: black canvas, SF Mono uppercase at 14px and 16px, signal orange #ff5500 labels with black text, a pale #f0f0f0 CRT screen holding a dithered ASCII logo, zero border radius, brace-wrapped {LABELS} and no box shadows."
colors:
  canvas: "#000000"
  ink: "#c5c4c2"
  primary: "#ff5500"
  on-primary: "#000000"
  screen-white: "#f0f0f0"
  ink-secondary: "#2a2a2a"
typography:
  display:
    fontFamily: "\"SF Mono\", monospace"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    textTransform: uppercase
  heading:
    fontFamily: "\"SF Mono\", monospace"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 19.6px
    letterSpacing: "-0.35px"
    textTransform: uppercase
  body:
    fontFamily: "\"SF Mono\", monospace"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 8px
  s3: 12.8px
  s4: 14.21px
  s5: 16px
  s6: 24px
  s7: 32px
  s8: 40px
  s9: 48px
  s10: 51.2px
components:
  tag-label:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.heading}"
    rounded: "{rounded.none}"
    padding: 4px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 120px 64px 40px
---

## Overview

kvs.services is the site of KVS Studio, titled "KVS Studio — Product Design & Creative Development". The page's own meta description reads: "KVS is a creative studio building digital products for startups and enterprises. We combine product design, frontend engineering, and 3D/WebGL to craft memorable digital experiences." The measured entry state is an intro gate: a black viewport, a rounded-corner pale screen with film-grain texture, a dithered black-and-white ASCII emblem in the center, an orange "CLICK TO ENTER" label and the line "{HEADPHONES RECOMMENDED}". In the bottom-right corner is a small cluster of orange cells holding single characters. The measured page height is only 800px because the entry screen fills one viewport; the document behind it contains the studio's copy, which includes lines such as "{EVERY SOLUTION IS C…", "{QUICK}", "{CRO AKA CONVERSION RATE OPTIMISATION}", and a footer list headed "{THE WORK WE DO}" with "{WEB DESIGN}" and "{DIGITAL PRODUCT DESIGN}".

The capture also shows two third-party award badges (an FWA ribbon at the bottom-left and a red "Site of the Day" tab at the right edge). They are not part of KVS's design and are not documented as tokens.

The voice is terse and technical: every label is uppercase and wrapped in curly braces, like code placeholders. The page is typeset as if it were a terminal, with no photography and no color beyond black, light grey, pale screen white and one orange.

Microcopy follows a strict pattern. Navigation-like and descriptive phrases are all caps and enclosed in braces: "{HEADPHONES RECOMMENDED}" tells the visitor that sound is part of the experience, "{CRO AKA CONVERSION RATE OPTIMISATION}" explains a service in a half-joking acronym gloss, and "{QUICK}" is a short orange tag. British spelling ("OPTIMISATION") is used in the measured text. The only verbs visible on the gate are imperative: CLICK TO ENTER and CLICK TO BREAK. The result is a deliberately game-like, console-style opening where the interface itself reads as a piece of the studio's portfolio of 3D and WebGL work.

## Colors

- **Canvas #000000** is the page and footer background (24197 area-weight, by far the largest).
- **Ink #c5c4c2** is the warm light grey of body copy and footer text on black.
- **Signal orange #ff5500** is the only accent: the fill behind "{QUICK}"-style label tags and "CLICK TO ENTER", always with black text (#000000).
- **Screen white #f0f0f0** is the pale CRT-style screen that holds the entry emblem (819 area-weight).
- **#2a2a2a** is the dark grey of the dithered ASCII emblem characters (4709 characters).

`--color-white` (#fff) and `--color-black` (#000) are also defined as root variables, from a Tailwind v4 base. No other colors (error, success, links) were measured.

## Typography

A single monospaced family: **SF Mono** with a generic `monospace` fallback, loaded at 400, 500, 600 and 700. Everything is uppercase (`text-transform: uppercase`).

- Display / lead (spans): 16px on 24px line-height, weight 400, color #c5c4c2.
- Heading (h2 tags such as "{QUICK}"): 14px on 19.6px, weight 500, letter-spacing -0.35px, black on orange.
- Body: 14px on 19.6px, weight 400, #c5c4c2. A 1.4px letter-spacing (0.1em, matching the `--tracking-widest` variable) is applied to 728 characters of 14px text; 70 characters carry -0.35px.
- A 8.96px size appears in the tiny corner cells (103 characters).

SF Mono is an Apple system typeface and is not licensed for web embedding in general; any monospaced face such as JetBrains Mono, IBM Plex Mono or Menlo is a stand-in and keeps the same character width logic.

## Layout

The entry gate is a single centered composition inside a full-viewport frame: emblem in the center, call to action near the bottom center, controls in the bottom-right corner. The footer region of the underlying document uses large paddings: 120px top, 64px sides, 40px bottom. Gaps measured most are 32px (44 elements), 24px (20), 4px, 8px and 16px; large gaps of 128px, 80px and 64px appear in the layout. Paddings are 4px on tags (22), 64px, 80px, 24px, 48px, 32px.

Spacing is built on a 4px base: the Tailwind `--spacing` variable is .25rem, the tags use 4px padding, and the other measured gaps (8px, 16px, 24px, 32px, 40px, 48px, 64px, 80px, 128px) are multiples of it, with a few fractional values (12.8px, 14.208px, 51.2px, 102.4px) that appear in the measurement and are carried into the spacing scale exactly as measured. Every one of those values is a gap or padding between text blocks; none is a border width, since no borders were found.

## Elevation & Depth

Essentially none. The single measured shadow is an almost invisible inset glow, `rgba(0,0,0,0.02) 0px 0px 100px 0px inset`, on the screen frame. Depth in the entry state comes from the screen-within-a-screen illusion (pale screen on black, film grain) rather than shadows or borders. No borders were measured.

## Shapes

`borderRadii` in the extraction is empty: every element computes a 0px radius. All tags, labels and buttons are sharp rectangles. (The capture shows the pale screen with rounded corners; that shape is not a measured CSS radius on any element and is not tokenized.)

## Components

- **Tag label**: orange #ff5500 block, black uppercase text at 14px/500, 4px padding, 28px tall, square corners. Examples: "{QUICK}", "CLICK TO ENTER".
- **Enter button**: the "CLICK TO BREAK" control measured on hover is an orange 20px-tall button with black text and a black border, which, on hover, scrambles its label into random characters ("XGG#O &K EC&1B"). That scramble is a recorded hover behavior.
- **Body line**: grey uppercase 14px text with brace-wrapped phrases.
- **Footer**: black, grey text, 120px 64px 40px padding, listing service names in braces.
- **Corner cell cluster**: tiny orange cells with single characters (B, W, V, parentheses, colons).

## Design System Architecture

KVS Studio has no public design system or brand-guideline page that was found. The page's `<head>` (opened at https://www.kvs.services/) describes the studio and lists Vue.js, React and TypeScript among its keywords. The shipped CSS is Tailwind v4 with 36 root variables: `--font-mono: "SF Mono", monospace`, `--tracking-tight`, `--tracking-tighter`, `--tracking-widest`, weights 400/500/600/700, `--spacing: .25rem`, and the eased transitions. The system is therefore minimal: one mono font, one accent, a black ground.

## Do's and Don'ts

- Do set every label in SF Mono uppercase and wrap category names in {braces}.
- Do keep orange #ff5500 for tags and the enter call to action, always with black text.
- Do keep corners square (0px).
- Do use #c5c4c2 for running text on black.
- Don't add a second typeface, photographs or gradient fills.
- Don't add drop shadows or borders.
- Don't use the third-party award badges as brand elements.
- Don't introduce a second accent color.

## Responsive Behavior

The 390px mobile pass measured: lead span 16px/24px (#c5c4c2), h2 tag 14px/19.6px at weight 500 with letter-spacing -0.35px on orange, body 14px/19.6px uppercase. The most frequent mobile size by characters is 10px (2717 characters), then 14px and 16px. Layout reflow, hamburger menus or touch behavior were not measured.

## Iteration Guide

1. All text is uppercase mono; start from the typography tokens.
2. New labels: brace-wrapped, black on #ff5500, 4px padding.
3. Keep the ground #000000 and text #c5c4c2.
4. Any new color must be confirmed in `web/data/extracted/kvs-studio.json` first.
5. When reproducing the gate, keep the viewport black behind the pale screen and place the enter label near the bottom center, with the headphone notice directly beneath it, as in the capture.
6. Run `node web/scripts/verify-designs.mjs --slug=kvs-studio`.
