---
version: alpha
name: "NOTHIN'"
category: "Portfolio"
description: "NOTHIN' (noth.in), a Paris creative studio: PP Neue Montreal 500 at 64px with -0.64px tracking and uppercase 9.6px UI, black #000000 and white #ffffff with grey #8e8e8e labels, 80px-radius pill buttons with a 1px #ffffff66 border, and glossy 3D imagery."
colors:
  canvas: "#ffffff"
  page-largest: "#000000"
  ink: "#000000"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-grey: "#dddddd"
  ink-muted: "#8e8e8e"
  hairline: "#ffffff66"
  neutral-300: "#e3e1de"
  success: "#0ba954"
typography:
  display:
    fontFamily: Ppneuemontreal, Arial, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 20px
  heading:
    fontFamily: Ppneuemontreal, Arial, sans-serif
    fontSize: 64px
    fontWeight: 500
    lineHeight: 64px
    letterSpacing: "-0.64px"
  button:
    fontFamily: Ppneuemontreal, Arial, sans-serif
    fontSize: 9.6px
    fontWeight: 500
    lineHeight: 13.44px
    letterSpacing: 1.12px
    textTransform: uppercase
  nav:
    fontFamily: Ppneuemontreal, Arial, sans-serif
    fontSize: 9.6px
    fontWeight: 700
    lineHeight: 9.6px
    letterSpacing: 0.288px
    textTransform: uppercase
rounded:
  xs: 3.2px
  sm: 4px
  md: 80px
  lg: 100px
spacing:
  s1: 1px
  s2: 1.28px
  s3: 3.2px
  s4: 4.8px
  s5: 6.4px
  s6: 9.6px
  s7: 10px
  s8: 11.2px
  s9: 12.8px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12.8px 28.8px 12.8px 16px
    height: 41px
    borderColor: "{colors.hairline}"
  button-secondary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12.8px 16px
    height: 41px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.canvas}"
    padding: 16.4px 16px 0px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
---

# NOTHIN'

NOTHIN' (https://www.noth.in/, title "Nothin' | Home") is a creative studio in Paris, according to the page's own line "Creative studio in Paris". The measured page is a black-and-white brand-studio site: a gigantic black wordmark on white, tiny uppercase UI labels, pill buttons, ink-blob cursor decorations, and large glossy 3D renders as the only color. This document records what was measured.

## Overview

The page is 10466px tall. The first screen is white with black type: at the top left the tagline "Not a style, a perspective. Because Nothin' is Everythin'." with a black pill button "BOOK A CALL →" below it, at the top right a "MENU" control, and across the middle a full-width wordmark "NOTHIN'" in extra-heavy black letterforms. Below, at the left "Creative studio in Paris" and at the right "LINKEDIN / INSTAGRAM" and an "EN" language chip. Dark ink blobs drift near the corners and the cursor as a decorative effect.

The next band is a statement, "Most brands produce content. We prefer ideas.", then a full-width black panel with a 3D still life of crumpled metallic foil in cobalt blue, a black inflatable asterisk, a silver bubble-wrap heart and a wrapped candy. The page then turns black for "WORKS", with case-study entries each introduced by a small monospace label and a one-line description: "UTOPIA / Where taste meets meaning." and "AURBSE / A living instrument for reading territory.", and the line "Good brands communicate. Great brands surprise." The measured hero role, "Not a style, a perspective.", reads as the opening tagline; the extractor also recorded "Seize the unexpected: the invisible, made visible." as body text.

A measurement caveat: the computed styles list #000000 as the dominant background (14013 area units) with #ffffff text, while the first-screen capture renders black on white, so the first screen's inversion (possibly a blend or reveal effect) is not resolved by the extraction. Both `canvas` #ffffff and `page-largest` #000000 are therefore documented.

## Colors

- `page-largest` #000000: the largest measured background (14013 units), the dark Works section and the footer; also `ink` #000000 for text on white (224 characters).
- `canvas` #ffffff: the white first screen and the most-read text color on dark (1424 characters); `primary` #ffffff with `on-primary` #000000 is the measured "BOOK A CALL" button (white fill, black label; its hover state measured the same colors).
- `surface-3` #dddddd: a light grey surface (4 units); `ink-3` #8e8e8e: the grey of the small monospace labels (70 characters); `hairline` #ffffff66: the 1px 40% white border on pill buttons.
- `--color-neutral-300` #e3e1de (a warm light grey) and `--color-success` #0ba954 exist as variables and are recorded as tokens. The cobalt blue visible in the foil render is imagery, and no UI element was measured with it.

## Typography

PP Neue Montreal is the main family, loaded at weights 400, 500 and 700 (the Book cut as "Ppneuemontreal Book" for 342 characters; Medium for 1306), with IBM Plex Mono 400 for the small project labels (70 characters). Weights by character count: 500 (924), 400 (743), 700 (51).

- `display`: 20px / 20px, weight 500 (the tagline, 3px bottom padding). Mobile: 20px / 20px.
- `heading`: 64px / 64px, weight 500, letter spacing -0.64px ("Most brands produce content. We prefer ideas."). Mobile: 40px / 40px.
- `button`: 9.6px / 13.44px, weight 500, uppercase, tracking 1.12px (the pill buttons). Mobile: 12px / 16.8px.
- `nav`: 9.6px / 9.6px, weight 700, uppercase, tracking 0.288px (MENU, WORKS, STUDIO, CONTACT). Mobile: 12px.

Common sizes by character: 14.4px (720), 20px (420), 11.2px (253, tracking -0.112px), 9.6px (156), 64px (91), 32px (54, tracking -0.32px), 14px, 24px (tracking -0.72px) and 16px. The huge wordmark is not among the measured text sizes, so its size is not recorded. PP Neue Montreal is a commercial family; no substitute was identified from a source.

## Layout

The page is edge-to-edge with a thin left and right margin; the wordmark spans the full viewport width, and case-study blocks are laid out as an asymmetric two-column staggering (one entry at the left, the next offset at the right). Measured gaps: 9.6px (24), 11.2px, 1.28px, 12.8px, 4.8px, 17.6px, 80px, 6.4px, 115.2px and 16px. Paddings: 16px (11), 12.8px (9), 19.2px (6), 120px (6), 69.6px (6), 3.2px, 1px, 10px, 16.4px and 52px. Nav padding is 16.4px 16px 0px.

## Elevation & Depth

No box shadow was measured on rendered elements. The CSS corpus lists `0 0 0 1px #0000001a,0 1px 3px #0000001a`, `0 0 3px #3336` and `0 0 0 2px #fff`, none observed in use. Depth is created by the full-bleed black panels against white, the glossy 3D renders and the ink-blob effects.

## Shapes

Radii: 3.2px (11 elements, images and panels), 80px (2, the pill buttons), 4px (1) and 100px (1). Tokens: xs 3.2px, sm 4px, md 80px, lg 100px. The black media panel has small corner rounding; buttons are full pills with a trailing arrow.

## Components

- Primary button "BOOK A CALL": #ffffff fill, #000000 9.6px uppercase 500 label, 80px radius, padding 12.8px 28.8px 12.8px 16px (extra room for the arrow), 41px tall, 131px wide, 1px #ffffff66 border.
- Secondary button "DROP US AN EMAIL @": #000000 fill, #ffffff label, 80px radius, padding 12.8px 16px, 41px tall, 1px #ffffff66 border.
- Nav: uppercase 9.6px bold labels (MENU, WORKS, STUDIO, CONTACT) in white, tracking 0.288px.
- Language chip "EN": small rounded rectangle with white text on black.
- Project label: IBM Plex Mono 11.2px in #8e8e8e, followed by a 14.4px or 20px description.
- Media panel: black rounded rectangle holding a 3D render.

## Design System Architecture

No public design system or brand guideline was opened, and none was linked in the extraction. The site is a Webflow build; its variables are few and generic (`--white`, `--black`, `--transparent`, and two named variables, `--color-neutral-300` #e3e1de and `--color-success` #0ba954). The identity lives in the oversized wordmark, the uppercase micro-labels and the 3D imagery rather than in tokens.

## Do's and Don'ts

- Do keep the palette black and white with greys; let 3D imagery supply color.
- Do set micro UI in uppercase 9.6px with tracking and large statements at 64px with -0.64px tracking.
- Do use pill buttons (80px radius) with a trailing arrow and a 1px 40% white border.
- Do use IBM Plex Mono only for small project labels.
- Don't add shadows or saturated UI colors.
- Don't document the ink-blob cursor effects as UI components.
- Don't use heavy weights for body text; the body uses 400 and 500.

## Responsive Behavior

Measured at the 390px mobile pass: the h1 is 20px / 20px, the h2 40px / 40px (64px on desktop), body 20px / 20px, the primary button text 12px / 16.8px (#000000 on #ffffff) and nav 12px. Common mobile sizes by character: 12px (472), 20px (400), 18px (369), 14px (205), 40px (99), 25px (70). The wordmark scaling, menu behavior and panel stacking on mobile were not measured.

## Imagery and Voice

Imagery is staged 3D still life: crumpled metallic foil, balloons and candy in cobalt, black and silver on black, with a plant-photography case study for Utopia. Copy is aphoristic, playing on the studio's name ("Nothin' is Everythin'", "Most brands produce content. We prefer ideas.", "Good brands communicate. Great brands surprise.", "Seize the unexpected: the invisible, made visible."). Labels are terse uppercase verbs and nouns.

## Iteration Guide

1. Start with a white first screen carrying a full-width black wordmark and a pill button; follow with a black Works section.
2. Set PP Neue Montreal 500 for statements (64px, -0.64px) and uppercase 9.6px for UI.
3. Use white and black pill buttons with 1px #ffffff66 borders and a trailing arrow.
4. Use a small monospace label in #8e8e8e above each case study line.
5. Re-run the gate after renames; do not change measured values.
