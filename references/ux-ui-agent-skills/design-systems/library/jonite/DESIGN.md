---
version: alpha
name: Jonite
category: "Architecture & Interiors"
description: "Decorative stone grating maker Jonite: cool light-grey canvas (#e6e7e8) with near-black ink #0e0e0e, PP Neue Montreal sans and Silka Mono uppercase labels, black 35.56px pill buttons, square stone still-life photography and no shadows."
colors:
  canvas: "#e6e7e8"
  ink: "#0e0e0e"
  primary: "#0e0e0e"
  on-primary: "#e6e7e8"
  surface: "#797762"
  surface-2: "#686563"
  surface-3: "#bfbfbf"
  ink-4: "#0d0d0d99"
  ink-5: "#ffffff"
  ink-6: "#e7e8e9b3"
  hairline: "#0d0d0d33"
  nav-bg: "#1e1e1e14"
  nav-link-text: "#c9beb5"
typography:
  display:
    fontFamily: "\"PP Neue Montreal\", sans-serif"
    fontSize: 17.7778px
    fontWeight: 400
    lineHeight: 23.1111px
  display-mobile:
    fontFamily: "\"PP Neue Montreal\", sans-serif"
    fontSize: 18.72px
    fontWeight: 400
    lineHeight: 24.336px
  heading:
    fontFamily: "\"Silka Mono\", monospace"
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 11.7333px
    textTransform: uppercase
  subheading:
    fontFamily: "\"PP Neue Montreal\", sans-serif"
    fontSize: 28.4444px
    fontWeight: 400
    lineHeight: 34.1333px
  body:
    fontFamily: "\"PP Neue Montreal\", sans-serif"
    fontSize: 14.2222px
    fontWeight: 400
    lineHeight: 21.3333px
  button:
    fontFamily: "\"PP Neue Montreal\", sans-serif"
    fontSize: 13.3404px
    fontWeight: 400
    lineHeight: 14.6745px
  nav:
    fontFamily: "\"Silka Mono\", monospace"
    fontSize: 8.00711px
    fontWeight: 400
    lineHeight: 12.0107px
    letterSpacing: 1.121px
    textTransform: uppercase
rounded:
  xs: 35.56px
  cta: 35.56px
  pill: 9999px
spacing:
  s1: 3.56px
  s2: 4.45px
  s3: 5.33px
  s4: 7.11px
  s5: 8.89px
  s6: 10.67px
  s7: 12.44px
  s8: 14.22px
  s9: 16px
  s10: 17.78px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    padding: 5.33333px 10.6667px 6.22933px 14.2222px
    height: 29px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    padding: 5.33333px 10.6667px 6.22933px 14.2222px
    height: 29px
    transform: matrix(1, 0, 0, 1, 0, 0)
  link:
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink-6}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    padding: 0px 0px 1.77778px
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.canvas}"
    padding: 56.8889px 0px 16px
---

## Overview

Jonite (https://www.jonite.com/, title "Decorative Grating | Stone Grating Products | Jonite®", lang en-SG) is a manufacturer of decorative stone grating and breeze blocks. The measured page is 1280px wide and 13529px tall with 1484 visible elements. It is an architectural-materials showcase presented as a quiet, gallery-like page: pale grey ground, still-life photography of stone blocks on plinths, tiny monospaced labels and very large single-line statements.

From the top: a black announcement bar with iF Design Award and Red Dot badges and the text "Tessera Breeze Blocks wins the iF Design Award 2026 and Red Dot Award 2026" with an "EXPLORE TESSERA" link. Below it is the header with the square-bracket "JONITE" wordmark and monospaced uppercase nav (PRODUCTS, SPECS, CASE STUDIES, ABOUT, CONTACT, SHOP). The hero has a one-sentence h1 "Decorative stone grating for modern urban living." at 17.7778px, a small data block listing "UNITED STATES" and "SINGAPORE" with clock times and phone numbers, an "EST. 1994" label, two portrait photographs with white pill labels ("Our projects", "Shop") and one tall close-up of a perforated block with an "Explore products" pill.

Below: a thin strip with "REQUEST SAMPLES" and "CONTACT US" links and a black "NEED HELP? CHAT ON WHATSAPP" tab, a "CLIENTS" label with a row of client logos (DPA, EMAAR, St. Regis, Disney, Porsche, Safdie Architects), a staggered gallery of product still lifes, and the oversized statement "Made to matter" beside a short paragraph ("Contemporary engineered stonework solutions. Built for everyday living, from the ground up."). The voice is understated and craft-led.

## Colors

The page is a neutral stone palette with near-black type.

- **canvas #e6e7e8** is the cool light grey page ground (and the text color on dark elements). It is the dominant visible field in the capture.
- **ink #0e0e0e** is the near-black used for text (1722 weighted characters) and the main button fill; **primary #0e0e0e** is the same value, because the call-to-action buttons ("Request samples") are black pills; **on-primary #e6e7e8** is their text.
- **surface #797762** (a greenish stone, weight 3946) and **surface-2 #686563** (763, a warm grey) are the large photographic and footer fields; **surface-3 #bfbfbf** (573) is a mid grey.
- **ink-4 #0d0d0d99** is the 60% black for body paragraphs (574); **ink-5 #ffffff** is white text (61); **ink-6 #e7e8e9b3** is 70% light text on the announcement and dark bars (52).
- **hairline #0d0d0d33** is the 20% black border (6).
- **nav-bg #1e1e1e14** and **nav-link-text #c9beb5** (a warm taupe, 17) belong to the announcement-bar link "EXPLORE TESSERA".

The accent palette is the photography itself: sand, terracotta, travertine and moss green. The root variables also include form-plugin colors (`--fui-gray-900 #111827`, `--fui-focus-border-color #a4cafe`, `--fui-alert-success-bg-color #f3faf7`) that belong to the contact form library, not to the brand, and are not tokens.

## Typography

Two families, both at weight 400. "PP Neue Montreal" (3201 weighted characters) is the sans for statements, paragraphs and buttons; "Silka Mono" (1566) is a monospace for labels, nav, contact data and captions in uppercase.

- **display** PP Neue Montreal 17.7778px / 23.1111px (the h1 sentence); **display-mobile** 18.72px / 24.336px.
- **subheading** 28.4444px / 34.1333px (section statements, e.g. "We're changing the way the world sees en...").
- **body** 14.2222px / 21.3333px.
- **button** 13.3404px / 14.6745px.
- **heading** Silka Mono 10.6667px / 11.7333px uppercase ("CLIENTS").
- **nav** Silka Mono 8.00711px / 12.0107px, uppercase, letter-spacing 1.121px.

The measured sizes are small because the stylesheet scales rem from the viewport (`--size-unit: 16` in the root); the same system produces a much larger "Made to matter" line whose size was not recorded in the role measurements. The contrast between a tiny mono label and an enormous grotesque statement is the page's signature. For prototypes without the font files, a neutral grotesque and any technical monospace can stand in.

## Layout

A full-width layout. The hero is a three-column composition (two narrow photographs and one wide photograph) with text in the first columns, followed by a horizontal strip of utility links, a client logo row, and a staggered gallery in which images of different heights are bottom-aligned at different offsets. Large type appears as a single line spanning most of the width, with a short paragraph in the right-hand column.

Spacing tokens measured: 3.56px, 4.45px, 5.33px, 7.11px, 8.89px, 10.67px, 12.44px, 14.22px, 16px and 17.78px, all multiples of a 0.889px base unit scaled from the root. The footer padding is 56.8889px 0 16px and the buttons use 5.33333px 10.6667px 6.22933px 14.2222px.

## Elevation & Depth

No shadows were measured. Depth is photographic (still lifes with directional natural light) and tonal, with 20% black or white 1px hairlines (#0d0d0d33, #e7e8e933, #e7e8e91a) separating utility rows and dark bars. The WhatsApp tab and announcement bar are solid black blocks.

## Shapes

Radii measured: 8888.01px (weight 34) and 35.5556px (12), both effectively fully round. Tokens: xs and cta 35.56px, pill 9999px. Every button and every photograph label is a pill; photographs and layout blocks are square-cornered rectangles.

## Components

- **button-primary** ("Request samples", "View all"): #0e0e0e fill, #e6e7e8 text, PP Neue Montreal 13.3404px, pill (35.56px), padding 5.33333px 10.6667px 6.22933px 14.2222px, height 29px, with a trailing diagonal arrow icon.
- **light button** ("Our projects", "Collaborate with us", "View all"): #e6e7e8 fill, #0e0e0e text, same pill and padding, used over photography.
- **link**: Silka Mono 10.6667px uppercase, #0e0e0e (phone numbers, "REQUEST SAMPLES ↗").
- **nav**: monospaced uppercase links; the announcement bar uses #1e1e1e14 with 70% light text.
- **footer**: #686563 with #e6e7e8 text, padding 56.8889px 0 16px.

Hover states were not recorded.

## Design System Architecture

No public design system or brand guidelines for Jonite are linked from the home page, so none is cited. The shipped CSS exposes only a size scaler (`--size-unit: 16`, `--container-padding: 1rem`) and a large set of `--fui-*` variables from a form library (`--fui-input-transition-timing-function`, `--fui-label-font-weight`, `--fui-alert-font-size`), which style the contact form rather than the brand. The visual system is therefore de-facto: two font families by role, a stone-grey palette, pill-shaped controls, and a spacing ladder scaled from a base unit of about 0.889px. Source: the measured root variables in web/data/extracted/jonite.json from https://www.jonite.com/.

## Do's and Don'ts

- Do keep the page on #e6e7e8 with #0e0e0e text and let photography provide warmth.
- Do pair a tiny uppercase monospace label with a very large single-line grotesque statement.
- Do make every button a pill, black on grey or light on photography, with a diagonal-arrow icon.
- Do show product as styled still lifes on plinths in natural light.
- Do list clients as grey or black logos in a single row.
- Don't use saturated brand colors; none were measured.
- Don't add shadows or heavy borders; use 20% hairlines.
- Don't round photographs; only controls are round.
- Don't use the form-library colors as brand tokens.

## Responsive Behavior

Measured in the 390px mobile pass: the h1 sentence is 18.72px (line-height 24.336px) against 17.7778px on desktop, and body text 15.6083px against 14.2222px. Mobile layout of the three-column hero, nav and gallery was not measured.

## Iteration Guide

1. Use #e6e7e8 as the ground and #0e0e0e as ink.
2. Place a short sentence in PP Neue Montreal 17.7778px, small mono labels in Silka Mono 10.6667px.
3. Add black pill buttons 29px high with a diagonal arrow.
4. Use stone still-life photography with white pill labels at the lower left.
5. Space using the 0.889px-based ladder.
6. Run `node web/scripts/verify-designs.mjs --slug=jonite`.
