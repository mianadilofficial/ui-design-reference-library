---
version: alpha
name: "Odyssée"
category: "Business & Corporate"
description: "Odyssée medical aesthetics clinic (odysseeclinic.com.au, Hunters Hill NSW) measured live: warm white #fffcf8 canvas, navy #1e305e type, psTimes serif at 48px headings and baselGrotesk 14px body, 12px uppercase nav, zero radius and full-bleed skin photography."
colors:
  canvas: "#fffcf8"
  ink: "#1e305e"
  primary: "#1e305e"
  surface-dark: "#28292a"
  ink-on-dark: "#ffffff"
typography:
  display:
    fontFamily: psTimes, "psTimes Fallback", serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 19.8px
    letterSpacing: 0.36px
  heading:
    fontFamily: psTimes, "psTimes Fallback", serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 48px
  body:
    fontFamily: baselGrotesk, "baselGrotesk Fallback", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
  nav:
    fontFamily: baselGrotesk, "baselGrotesk Fallback", sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
    letterSpacing: 0.36px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 10px
  s3: 12px
  s4: 14px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 28px
  s9: 40px
  s10: 60px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

# Odyssée

## Overview

The measured page is https://www.odysseeclinic.com.au/ (title "Odyssée"), 269 visible elements: a calm, photography-led site for a medical aesthetics clinic in Hunters Hill, NSW. The first screen is a full-bleed, softly lit portrait of a woman's face and shoulders with the white serif wordmark "ODYSSÉE" at the left, the white serif line "Medical aesthetics for timeless results." in the middle, and four tiny white uppercase nav items at the right: TREATMENTS, CONCERNS, ABOUT, BOOK CONSULTATION. A second full-bleed close-up of a face (lips and chin) follows. Then the page switches to a warm off-white section with a small portrait thumbnail at the left, a large navy serif statement ("At Odyssée, we prioritise a personalised approach. Visit our Hunters Hill space for a transformative experience in your aesthetic journey.") with an indented first line, a three-line grotesk paragraph ("Clarity precedes creation. Begin your tailored journey with a bespoke plan guided by science, precision, and exceptional care.") and a tiny uppercase text link "BOOK CONSULTATION". Below, a counter "4 : 4" with "WHY ODYSSÉE?" over a thin progress line introduces four image panels.

The opened page text lists the sections "Why Odyssée?", "Our Philosophy", "Method, not myth." and "Our approach", and CTAs "Book Consultation", "Begin your tailored journey", "Explore treatments", "Get Directions" and "Gift Cards". The tone is calm, refined and reassuring: premium and scientific, warm in its focus on care.

## Colors

The palette is two colors plus white. Background area: `#fffcf8` (8946), `#1e305e` (234), `#28292a` (233), `#96faff33` (1). Text by characters: `#1e305e` (1331), `#ffffff` (216).

- `canvas` #fffcf8: a warm off-white; the root variable `--color-white-bg` is #fffcf8.
- `ink` / `primary` #1e305e: navy for all text and the thin progress line; the root variable `--color-blue` is #1e305e.
- `surface-dark` #28292a: a near-black surface (233 area units).
- `ink-on-dark` #ffffff: white text on photography (the root has `--color-white: #fff`).

No button fill color was detected: the "BOOK CONSULTATION" call is an uppercase text link in navy (white over imagery), so `primary` is the ink navy rather than a button background. The translucent #96faff33 appears once and is not tokenized.

## Typography

Two custom faces: psTimes (a serif, loaded at weight 350) and baselGrotesk (a sans, loaded at weight 430), both rendered at weight 400. Frequencies by characters: baselGrotesk 1161, psTimes 386. Sizes: 14px (992), 18px (267), 12px (127), 48px (119), 13px (42).

- `display` psTimes 18px / 19.8px, weight 400, letter-spacing 0.36px: the hero line ("Medical aesthetics for timeless results.") which is the h1 element.
- `heading` psTimes 48px / 48px, weight 400: the navy statement (32px / 32px at 390px).
- `body` baselGrotesk 14px / 18.2px, weight 400.
- `nav` baselGrotesk 12px / 12px, weight 400, letter-spacing 0.36px, uppercase.

The root declares `--times-family` as "psTimes", "psTimes Fallback", serif and `--text-2xs: 12px`, which are the family and the smallest size used for nav and labels.

## Layout

The root contains Tailwind-style variables (`--tw-*`, `--spacing: .25rem`, `--default-transition-timing-function`), so spacing is a 4px multiple scale; measured spacing tokens run 4px, 10px, 12px, 14px, 15px, 16px, 20px, 28px, 40px, 60px. Measured paddings: 12px (8), 15px (6), 20px (6), 14px (2), 40px (1), 160px (1), 200px (1). In the capture the text column starts at a fixed left offset (the statement and paragraph share one left edge, with a small thumbnail in the gutter to its left), full-bleed images run edge to edge, and the nav sits on the right.

## Elevation & Depth

No shadows were measured (the shadow list is empty). The Tailwind shadow variables are all `0 0 #0000`. There is no depth system; the only separation is scale and the cut between photographic and cream sections.

## Shapes

No radius was measured: `borderRadii` is empty, so every element computes 0px. The `rounded` token is `none: 0px`. Photographs, thumbnails and panels are rectangles with square corners.

## Components

- **nav / nav-link**: 12px uppercase baselGrotesk with 0.36px tracking in white over imagery (navy on cream); no boxes or underlines in the first-screen capture.
- **link**: the "BOOK CONSULTATION" text link, in the same 12px uppercase style in navy.
- **wordmark**: white serif "ODYSSÉE" at the top left over photography.
- **section label**: "4 : 4" counter and "WHY ODYSSÉE?" over a 1px navy progress line that runs partly across the width.
- **footer**: canvas background with navy text.

## Design System Architecture

No public brand guideline or design system link appears on https://www.odysseeclinic.com.au/. The de-facto system is a Tailwind CSS 4 variable layer (`--color-blue`, `--color-white`, `--color-white-bg`, `--color-theme-bg`, `--text-2xs`, `--font-weight-normal`, `--spacing`) plus two named font families. Source: `web/data/extracted/odyssee.json`.

## Do's and Don'ts

- Do use navy #1e305e on #fffcf8 and white over photographs.
- Do pair a refined serif for statements with a small grotesk for details.
- Do use tiny uppercase tracked labels for navigation and calls.
- Don't add radius, shadows or filled buttons; none were measured.
- Don't use bold weights; every measured character is 400.
- Don't introduce a third color.

## Responsive Behavior

The 390px pass measured the h2 statement at 32px / 32px (48px on desktop) and the hero h1 element at 18px / 19.8px, with the mobile hero text box 350px wide. Other mobile layout changes, the nav behavior and breakpoints are not measured.

## Iteration Guide

1. Cream #fffcf8, navy #1e305e, white on images.
2. psTimes for statements, baselGrotesk for body and 12px labels.
3. Square-cornered full-bleed photography.
4. Text links instead of buttons.
5. Gate: `node web/scripts/verify-designs.mjs --slug=odyssee`.

### Content and imagery notes

The photography is the identity: tight, natural-light close-ups of skin, a profile of a woman with blonde hair tied back, lips and chin in extreme crop, an eye with a brown iris, and two faces side by side in a small thumbnail. Backgrounds are pale grey-blue studio walls, so the whites and creams of the page read as continuations of the imagery. Four panels under "WHY ODYSSÉE?" correspond, in the opened page text, to the four points: an experience like no other, bespoke treatment, multi-modality efficiency, and the art of skin renewal. The footer contact block in the page text gives an address, email, phone and social links, and the nav ends with a Menu control.

### Microcopy and voice

Copy is written in Australian English ("prioritise", "personalised") in full, calm sentences. Headline statements are long and set in the serif at 48px so that they read as a paragraph rather than a slogan; the supporting paragraph in the grotesk is short (three lines) and ends in a verb-led invitation, "Begin your tailored journey with a bespoke plan guided by science, precision, and exceptional care." Short maxims such as "Clarity precedes creation." and "Method, not myth." (from the opened page text) are used as section titles. Labels are terse: "4 : 4", "WHY ODYSSÉE?", "BOOK CONSULTATION".

### Type and color pairing in practice

Navy text on the cream canvas is used for every reading size, from the 48px statement down to the 12px label; white text is used only where type sits on photography (the wordmark, the hero line and the first-screen nav). Because every measured character is weight 400, hierarchy comes from the switch of family (serif for statements and the hero line, grotesk for paragraphs and labels), from size (48px, 18px, 14px, 12px) and from letter-spacing (0.36px on the hero line and on uppercase labels, none on body). The measured loaded font weights are 350 for psTimes and 430 for baselGrotesk, so both are slightly different from a standard 400 in the font files themselves.
