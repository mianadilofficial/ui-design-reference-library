---
version: alpha
name: "NTT"
category: "Telecom"
description: "NTT, Inc. global site measured live: white #ffffff canvas, NTT blue #0072bc for the logo, cards and footer, Noto Sans with an 88px/92px bold-to-light hero headline, Noto Serif italic question labels, 60px pill buttons and pastel sky and teal cards."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#0072bc"
  surface-grey: "#f2f2f2"
  ink-slate: "#2e404e"
  surface-sky: "#d2effa"
  surface-teal: "#cce8e5"
typography:
  display:
    fontFamily: "\"Noto Sans\", Helvetica, Arial, sans-serif"
    fontSize: 88px
    fontWeight: 700
    lineHeight: 92px
  display-mobile:
    fontFamily: "\"Noto Sans\", Helvetica, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 57.6px
  heading:
    fontFamily: "\"Noto Serif\", serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  subheading:
    fontFamily: "\"Noto Sans\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    textTransform: uppercase
  body:
    fontFamily: "\"Noto Sans\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: "\"Noto Sans\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 60px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 25px
  s8: 28px
  s9: 32px
  s10: 40px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 0px 25px
    height: 40px
    borderColor: "{colors.canvas}"
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    padding: 40px 64px 0px
---

# NTT

## Overview

The measured page is https://www.global.ntt/ (title "NTT, Inc. – Driving Innovation for a Sustainable Future"), 621 visible elements. The first screen is a white page with the blue NTT logo at top left, a centered five-item nav (Home, About us, Innovation, Sustainability, Insights Hub) with a search icon at the right, and a huge three-line headline "Innovating a Sustainable Future for People and Planet" whose first two lines are bold and the last line light. Thin cyan line illustrations (chevron arrows, overlapping circles) sit beside the headline.

Under it an italic serif label "What do you care about?" introduces four equal tall cards in different fills: solid NTT blue with white text (ABOUT US), pale sky blue (IOWN), pale teal (SUSTAINABILITY) and light grey (R&D). Each card has a small uppercase label at the top, a line-art geometric illustration, a question in 20px style ("What defines our actions and identity?") and a circled arrow at the bottom right. A full-width video band follows, with a cyclist on a city bridge, a statement about a global team of over 340,000 people, an outlined pill "Discover more about NTT", a round white "Play video" button and a pause control. Then "News spotlight" with a filled blue pill "Discover our Insights Hub" and a horizontal strip of dark technology photographs.

The voice is aspirational, built from short questions and statements about people, society and planet; the page text opened lists calls such as "Read Article", "Discover", "Explore" and "Continue your journey".

## Colors

Background area: `#ffffff` (2266), `#f2f2f2` (1351), `#0072bc` (1236), `#2e404e` (902), `#d2effa` (670), `#e8e8e8` (288), `#cce8e5` (153). Text by characters: `#000000` (8265), `#ffffff` (630), `#0000ee` (20), `#0072bc` (5), `#2e404e` (2).

- `canvas` #ffffff and `ink` #000000: page and text.
- `primary` #0072bc: NTT blue; the logo, the first card, the footer fill and the Insights Hub button. The root variable `--ntt` is #0072bc.
- `surface-grey` #f2f2f2: light grey card and band (root variable `--black5`).
- `ink-slate` #2e404e: dark slate (root `--ntt-dark`), a large background area in the capture.
- `surface-sky` #d2effa (root `--sky-blue`) and `surface-teal` #cce8e5 (root `--turquoise`): the pastel card fills.

The color #0000ee measured on 20 text characters is the browser default link color, not a brand color, so it is not a token; the nav in the capture is black with the current page in blue. The root declares 32 variables including `--electric-blue` #19a3fc, `--navy` #011B6A, `--dark-blue` #001973, `--green` #008770, `--footer` #262626 and `--silver` #c8c8c8; those not seen on rendered surfaces are not tokens.

## Typography

Noto Sans (400, 600, 700) is the main family (8889 characters); Noto Serif appears in italic for the small question label (23 characters); the root variables `--noto-sans-size-adjust: 0.95` and `--noto-serif-size-adjust: 1.05` show font-size adjustment.

- `display` Noto Sans 88px / 92px, weight 700: hero h1. At 390px it measured 48px / 57.6px (`display-mobile`).
- `heading` Noto Serif 24px / 32px, weight 400: the h2 "What do you care about?", rendered in italic.
- `subheading` Noto Sans 16px, weight 600, uppercase: card labels (ABOUT US, IOWN).
- `body` Noto Sans 16px / 24px, weight 400: paragraphs (6482 characters).
- `button-secondary` Noto Sans 16px / 24px, weight 700: pill labels.

Other frequent sizes: 30px (1299 characters, the card questions and news title area), 20px (486), 36.76px (162), 64px (91) and 14px (84). Weights: 400 (6396), 700 (2497), 600 (29).

## Layout

The page is 64px padded: the h2 has `0px 64px` padding across the full 1280px width, and the footer has `40px 64px 0px`. The four cards share one row (the gap between cards is not measured). Measured paddings: 8px (25), 5px (21), 12px (12), 16px (11), 64px (8), 24px (8), 2px (8). Bands alternate: white hero, a card row, a full-bleed photo band, a white news header with a horizontally scrolling photo strip.

## Elevation & Depth

No box shadows were measured (the shadow list is empty). Depth comes from solid color blocks (blue card against pastel cards), full-bleed photography with white text, and thin line illustrations. Hover on the blue About card changes the text color from white to black on the same #0072bc fill, per the measured hover pair.

## Shapes

Measured radii: 60px (35 elements: pills and buttons), 3px (8) and 50% (1, the circular play control or arrow). Cards are square-cornered. Tokens: `xs` 3px, `sm` 60px, `pill` 9999px. Illustrations use thin outline strokes of overlapping circles, nested squares and fan lines in cyan, navy and green.

## Components

- **button-secondary**: outlined pill over photography; white text and a white border, 60px radius, 40px height, padding 0px 25px, 16px bold label, usually with a right arrow ("Discover more about NTT").
- **filled pill**: blue #0072bc fill with white bold label and arrow ("Discover our Insights Hub"), seen in the capture.
- **card**: full-height tile with a 16px uppercase label, line art, a question and a circled arrow; fills are blue, sky, teal and grey.
- **nav**: white bar; items in black 16px; the current item is blue and underlined in the capture.
- **footer**: blue `{colors.primary}` fill with white text and `40px 64px 0px` padding.

## Design System Architecture

No brand guideline or design system link appears on the page opened (https://www.global.ntt/); only Investor Relations, Cookie Policy and Terms links are present. The de-facto system is a set of 32 named root variables (`--ntt`, `--ntt-dark`, `--sky-blue`, `--turquoise`, `--calm-blue`, `--calm-teal`, `--calm-pink`, `--black5`, `--footer`) and two font size adjusters for Noto Sans and Noto Serif. Values are in `web/data/extracted/ntt.json`.

## Do's and Don'ts

- Do use #0072bc as the single saturated brand color and pastel sky and teal for secondary cards.
- Do set the hero headline very large with weight contrast between bold and light lines.
- Do write card titles as questions with a circled arrow.
- Don't use the browser link color #0000ee.
- Don't add shadows; none were measured.
- Don't mix more than Noto Sans plus Noto Serif italic labels.

## Responsive Behavior

The 390px pass measured the h1 at 48px / 57.6px weight 700 in a 342px wide box (88px on desktop) and kept the h2 at 24px / 32px. Navigation behavior, card arrangement and breakpoints are not measured.

## Iteration Guide

1. White canvas, black text, one blue.
2. Hero headline at display size; italic serif label for the question row.
3. Cards in blue, sky, teal and grey with line illustrations.
4. Pills with 60px radius, 40px height.
5. Gate: `node web/scripts/verify-designs.mjs --slug=ntt`.

### Content and imagery notes

Photography on the page, per the capture and the opened page text, is documentary and human: a cyclist on a city waterfront with skyscrapers behind, a close-up padlock inside glowing concentric rings for data security, and dark dashboard screenshots in the news strip. Pages describe further images of researchers, technicians, farm fields, an elephant and a lunar rover. These are used in the video band and the news carousel, while the top of the page stays free of photographs and relies on typography and thin line art. Card questions are written in the first person plural ("our actions and identity", "tomorrow's infrastructure") and each card ends with a circular outlined arrow, so the link affordance is the same on blue, sky, teal and grey fills. The logo is a blue ring mark with the letters NTT in blue.
