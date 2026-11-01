---
version: alpha
name: Jesko Jets
category: "Product & SaaS"
description: "Private jet charter brand site on a warm cream canvas (#fff8ed) with espresso ink (#312726), stone accent (#7a716e) and black hero fields, set entirely in GT America Expanded and Extended with tight negative tracking, 64px display headings and small 5px to 53px radii plus a 9999px pill."
colors:
  canvas: "#fff8ed"
  ink: "#312726"
  primary: "#7a716e"
  surface-dark: "#000000"
  surface-grey: "#dbdbdb"
  ink-on-dark: "#ffffff"
  ink-muted: "#3127264d"
typography:
  display:
    fontFamily: "\"GT America Expanded\", Arial, sans-serif"
    fontSize: 64px
    fontWeight: 500
    lineHeight: 56.32px
    letterSpacing: "-5.12px"
  display-mobile:
    fontFamily: "\"GT America Expanded\", Arial, sans-serif"
    fontSize: 41.9367px
    fontWeight: 500
    lineHeight: 37.743px
    letterSpacing: "-3.35494px"
  subheading:
    fontFamily: "\"GT America Extended\", Arial, sans-serif"
    fontSize: 21.3376px
    fontWeight: 500
    lineHeight: 21.3376px
    letterSpacing: "-1.36561px"
  body:
    fontFamily: "\"GT America Extended\", Arial, sans-serif"
    fontSize: 10.6624px
    fontWeight: 500
    lineHeight: 14.181px
    letterSpacing: "-0.341197px"
  link:
    fontFamily: "\"GT America Extended\", Arial, sans-serif"
    fontSize: 8.8832px
    fontWeight: 700
    lineHeight: 10.6598px
    letterSpacing: "-0.284262px"
    textTransform: uppercase
rounded:
  xs: 5.32px
  sm: 7.1px
  md: 32px
  lg: 53.34px
  pill: 9999px
spacing:
  s1: 3.55px
  s2: 5.32px
  s3: 7.1px
  s4: 10.66px
  s5: 17.77px
  s6: 21.32px
  s7: 32px
  s8: 53.34px
  s9: 85.32px
components:
  link:
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.link}"
---

## Overview

Jesko Jets presents private jet charter ("Private jet charter worldwide", per the page title text measured on jeskojets.com) as a cinematic, single-page experience. The measured home page is 1280px wide and 9685px tall with 927 visible elements, and almost all of it is a vertical sequence of full-bleed scenes: an espresso-brown hero containing an aircraft window with sky inside it, a full-width cloud photograph that fades from white to deep blue, and then a long cream field (#fff8ed) that carries the editorial content.

The voice is short and declarative. The hero headings read "We are movement" and "We are distinction", set in the expanded display face at 64px and placed on opposite sides of the window, one top-left and one lower-right, so the eye zigzags across the oval. Supporting copy is a few lines ("Your freedom to enjoy life", then a short paragraph about flights being designed around comfort and time). The only visible call to action in the capture is a white pill labelled "Book the Flight" with a round icon button beside it, sitting under the window. The nav is four text links (About, Our Fleet, Advantages, Global) on the left and a phone number and email address on the right, all in the small bold uppercase-leaning link style.

The overall impression is luxury-aviation minimalism: very large type, very small text, warm neutrals instead of a saturated brand color, and photography doing the emotional work.

## Colors

The palette is warm and almost monochrome. The site's own CSS variables name it as a numbered base scale: base-100 is #fff8ed (cream), base-500 is #7a716e (stone) and base-1000 is #312726 (espresso), with white and transparent steps of each (for example #ffffff40, #ffffff26 and #3127264d). Status colors are also declared in the variables: success #1ba64b, error #e23d3d and alert #ffa800; none of them were seen in the rendered home page, so they are not promoted to tokens.

- **canvas #fff8ed** is the page background and the largest solid area of the long scroll (198 weight in the background-area measurement).
- **ink #312726** is the most-read text color (1928 weight), used for body copy on the cream sections.
- **primary #7a716e** is the stone accent. It is the most saturated measured action or link color and appears as text on 71 weight of characters. The extractor found no filled CTA button, so primary is an accent, not a fill.
- **surface-dark #000000** is the largest background by area (881 weight): the hero and any dark scenes.
- **surface-grey #dbdbdb** appears as a mid-light background (210 weight).
- **ink-on-dark #ffffff** is the text color over the hero and photographs (1236 weight).
- **ink-muted #3127264d** is the espresso ink at 30% alpha, used for de-emphasised text (138 weight).

Overlays use translucent white (#ffffff26 as a background, 18 weight) for glassy controls over imagery.

## Typography

Two faces from the same superfamily carry everything. "GT America Expanded" is the display face, loaded at weight 500, and "GT America Extended" is the body and UI face, loaded at 500 and 700. The extraction measured 3338 weighted characters in Extended and only 35 in Expanded, so Expanded is reserved for the big hero statements. Both fall back to Arial, sans-serif.

- **display** 64px / 56.32px line-height, weight 500, letter-spacing -5.12px (-0.08em in the site's variables). Line height is below 1, so two-line headings sit tightly stacked.
- **display-mobile** 41.9367px / 37.743px, letter-spacing -3.35494px, measured in the 390px mobile pass.
- **subheading** 21.3376px, weight 500, letter-spacing -1.36561px (an h3 such as "Direct Access to Private Travel").
- **body** 10.6624px / 14.181px, weight 500, letter-spacing -0.341197px.
- **link** 8.8832px, weight 700, uppercase, letter-spacing -0.284262px ("SCROLL DOWN").

The absolute sizes are small because the stylesheet scales everything in em from a fluid root; the variables define h1 at 7.222em and body-size p6 at 1.111em. Tracking is negative at every level, tightest on the biggest type (-0.08em for h1 to h3 variables), which gives the compressed, wide-letter look.

GT America is a commercial typeface from Grilli Type; no licence is held here, so for prototypes substitute a wide grotesque such as "Archivo Expanded" for display and a neutral grotesque for body, accepting that widths will differ.

## Layout

The page is a stack of full-width sections rather than a grid of cards. The measured desktop viewport is 1280px. Hero content hugs the left and right gutters, with the nav and contact details pinned at the extremes of the top bar and a thin horizontal rule with "SCROLL DOWN" and "TO START THE JOURNEY" along the bottom right.

Spacing is built from a small scale taken from the measured paddings and gaps: 3.55px, 5.32px, 7.1px, 10.66px, 17.77px, 21.32px, 32px, 53.34px and 85.32px. Small steps (10.66px is the dominant gap, weight 86) are used inside controls and text groups, while the 85.32px step is the most frequent large padding (weight 9) between sections. The site's variables show the underlying margin scale in px (m-4, m-12, m-24, m-36, m-60, m-96, m-156, m-216) and a "1-cell" unit of 48px.

Large stretches of the cream section are empty in the capture; white space is deliberate and generous.

## Elevation & Depth

Depth comes from photography and gradient, not from UI shadows. The hero has a dark radial vignette around a three-dimensional aircraft window with its own soft inner shading. The one measured box shadow is a long, layered drop shadow: rgba(0,0,0,0) 0 198px 55px, rgba(0,0,0,0.01) 0 127px 51px, rgba(0,0,0,0.04) 0 71px 43px, rgba(0,0,0,0.07) 0 32px 32px and rgba(0,0,0,0.08) 0 8px 17px. It appears once and is a very diffuse, downward-cast shadow rather than a card elevation.

Borders were not measured on the home page (no border colors recorded). Separation is by color field changes, thin rules and imagery.

## Shapes

Radii measured on the home page: 5.3248px and 7.104px (6 weight each), 50% (2), 53.3376px (1), 32px (1). Tokens: xs 5.32px, sm 7.1px, md 32px, lg 53.34px and pill 9999px. The "Book the Flight" pill and its circular icon button show the fully round shape in the capture. The aircraft window is an oval image, so the hero reads as one big rounded form against rectangular full-bleed sections.

## Components

The extractor detected no primary, secondary or outlined button, and no nav role, so only the link style is declared as a component token: white (#ffffff) uppercase bold 8.8832px text, used for "SCROLL DOWN" and the footer-of-hero prompts.

Seen in the capture but not captured as measured components: the white pill "Book the Flight" with a circular plane-icon button, the text nav, and the contact links. Their exact dimensions were not measured, so none are given.

Hover states were not recorded (the hover measurement is empty), so no hover behaviour is documented.

## Design System Architecture

No public design system or brand-guidelines page was found for Jesko Jets; the home page links to none. The de-facto system is visible in the shipped CSS variables, which are named with a double-dash grouping convention: `--_colors---base-1000--100`, `--_fonts---h1--size`, `--_fonts---h1--letter-spacing`, `--_margins---m-24` and `--_special-units---1-cell`. The system defines type roles h1 to h6, p2 to p7, t6, t7 and l1 with size, line-height and letter-spacing each, an eight-step margin scale, and a color scale where the numeric suffix is the opacity (for example base-1000--30 is #3127264d). Source: the measured root variables in web/data/extracted/jesko-jets.json from https://jeskojets.com/.

## Do's and Don'ts

- Do keep the canvas cream (#fff8ed) and ink espresso (#312726); do not swap in pure white or pure black body text.
- Do set big statements in GT America Expanded at weight 500 with strongly negative tracking and a line-height under 1.
- Do keep body and UI text in GT America Extended and let the size contrast with the 64px display do the hierarchy work.
- Do use photography and gradient for depth; avoid card shadows and heavy borders.
- Do use the pill shape (9999px) for the main booking action.
- Don't introduce a saturated brand color: the stone accent #7a716e is the only mid-tone, and the sky blues come from photography.
- Don't use the status colors (success, error, alert) as decoration; they are declared but unseen.
- Don't set display type with positive tracking or normal line-height.

## Responsive Behavior

Measured in the 390px mobile pass: the h1 drops from 64px to 41.9367px (line-height 37.743px, letter-spacing -3.35494px) and the body text goes from 10.6624px to 12.5853px. No other mobile data was recorded: navigation behaviour, section reflow, image crops and touch-target sizes are not measured.

## Iteration Guide

1. Start from the cream canvas and write the headline in display (64px, -5.12px tracking); keep it to two short lines.
2. Add one line of subheading (21.3376px) and a body paragraph at 10.6624px in ink.
3. Use link style for nav and scroll prompts; uppercase, 700 weight.
4. Place a pill-shaped (9999px) white action over a photographic or dark field.
5. Choose spacing from the nine measured steps; use 85.32px between major blocks.
6. Check contrast: ink-on-dark text needs a dark field (#000000 or the espresso vignette); ink-muted (30% alpha) is for secondary text only.
7. Run `node web/scripts/verify-designs.mjs --slug=jesko-jets` after any token edit.
