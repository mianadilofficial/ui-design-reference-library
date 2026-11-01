---
version: alpha
name: Ini3 Digital
category: "Thai Brands"
description: "Ini3 Digital PLC, a Thai online-games publisher, on a #353535 charcoal canvas with white ink, a single #ff7a00 orange accent, PT Sans Narrow 700 at 120px for headings, Hind Siliguri body at 21.6px, square-cornered outlined buttons with a translucent black fill, and black label chips over staff photography."
colors:
  canvas: "#353535"
  page-largest: "#222222"
  ink: "#ffffff"
  primary: "#ff7a00"
  on-primary: "#ff7a00"
  surface-2: "#000000"
  surface-3: "#1b1b1b"
  ink-2: "#9e9e9e"
  ink-3: "#fefefe"
  ink-4: "#9b9b9b"
  ink-5: "#ffffffbf"
  hairline: "#ffffff80"
  button-primary-bg: "#00000054"
  nav-text: "#818181"
typography:
  display:
    fontFamily: "\"PT Sans Narrow\", \"Hind Siliguri\", Athiti, FangSong, 仿宋, STFangSong, 华文仿宋, sans-serif"
    fontSize: 120px
    fontWeight: 700
    lineHeight: 144px
  display-mobile:
    fontFamily: "\"PT Sans Narrow\", \"Hind Siliguri\", Athiti, FangSong, 仿宋, STFangSong, 华文仿宋, sans-serif"
    fontSize: 60px
    fontWeight: 700
    lineHeight: 72px
  body:
    fontFamily: "\"Hind Siliguri\", Athiti, FangSong, 仿宋, STFangSong, 华文仿宋, sans-serif"
    fontSize: 21.6px
    fontWeight: 100
  button:
    fontFamily: "\"PT Sans Narrow\", \"Hind Siliguri\", Athiti, FangSong, 仿宋, STFangSong, 华文仿宋, sans-serif"
    fontSize: 24px
    fontWeight: 400
    letterSpacing: 1px
  nav:
    fontFamily: "\"PT Sans Narrow\", \"Hind Siliguri\", Athiti, FangSong, 仿宋, STFangSong, 华文仿宋, sans-serif"
    fontSize: 15px
    fontWeight: 400
rounded:
  xs: 10px
  sm: 12px
  none: 0px
spacing:
  s1: 3px
  s2: 3.75px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 18px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 6px 36px
    height: 45px
    borderColor: "{colors.primary}"
  button-primary-hover:
    textColor: "{colors.ink-5}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.nav-text}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 3.75px 0px
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink-4}"
    rounded: "{rounded.none}"
    padding: 3px 15px
---

## Overview

Ini3 Digital PLC (ini3.co.th) is a Thai online-games publisher. Its own pages describe it as "one of Thailand's leading online publisher" with "over 10 years" of expertise in the gaming business, and as "the first company who apply and popularize the 'Free to Play' model service in Thai's online games industry". Its offer, per the What we do page, spans a game publisher arm, "360 marketing strategy" solutions, and partner services, with products named myGAME (PC), i3play (mobile) and Cookie Card (payments).

The design is a dark, editorial gaming-company look. The measured page (the Who we are page at 1280px, 3923px tall) sits on a charcoal canvas `#353535` with large areas of `#222222`, a black header bar, desaturated black-and-white banner photography at the top, and then full-colour portrait photography of smiling staff and players. A single saturated orange, `#ff7a00`, is the accent: it appears in the "OVER 10 YEARS" kicker, the highlighted phrases "services expert." and "Free to Play", the "MILESTONES" heading and the outlined button. Headings are set in a very condensed, heavy sans and are huge: the page title "Who we are" is 120px bold.

Measurement note: the brand URL https://www.ini3.co.th/ is a one-screen intro page ("Where people connect." with Who we are and What we do buttons), and on capture it was covered by a cookie notice, a language picker and a scam-warning modal. A first capture showed a full-screen grey memorial tribute with an "enter main site" button. Those overlays are not brand UI and are not documented as components. The tokens below were therefore re-measured on the main content page https://www.ini3.co.th/who_we_are/ (extractor run with `--slug=ini3 --url=https://www.ini3.co.th/who_we_are/ --force`).

## Colors

- **Canvas `#353535`** is the body background; the largest filled background area is `#222222`, and the header bar is `#000000` (surface-2). `#1b1b1b` appears as a darker panel fill.
- **Ink `#ffffff`** is the most-read text colour (568 characters). Secondary greys are `#9e9e9e`, `#9b9b9b` and `#fefefe`; `#ffffffbf` (white at 75 percent alpha) colours the page title and the button hover text; `#ffffff80` is a half-transparent white hairline.
- **Primary `#ff7a00`** is the brand orange: the button text and 1px border colour and the accent text. A near-identical orange, `#ff7e00`, is also measured in text (47 characters).
- **Button fill `#00000054`** is a translucent black behind the outlined button.
- **Nav text `#818181`** is the grey used for the inactive navigation items.

The root stylesheet also carries Bootstrap defaults (`--primary: #007bff`, `--blue`, `--indigo`, `--green` and so on). These are framework defaults that the page does not use as brand colours and are excluded.

## Typography

Two families are loaded: **PT Sans Narrow** (400 and 700) for headings, nav and buttons, and **Hind Siliguri** (400) for body text, with Athiti and FangSong as Thai and CJK fallbacks in the stack. Hind Siliguri accounts for 874 measured characters and PT Sans Narrow for 159.

- Display: PT Sans Narrow 700, 120px/144px ("Who we are"); on mobile 60px/72px.
- Body: Hind Siliguri, 21.6px at weight 100 (the most-read size, 479 characters); mobile body is 18px.
- Button: PT Sans Narrow 400, 24px, letter-spacing 1px; mobile button text is 20px.
- Nav: PT Sans Narrow 400, 15px.
- Other sizes in the measured page include 30px, 19.2px, 21px, 33.75px and 28.8px.

If these faces are unavailable, use any condensed bold sans for headings and a sans with Thai coverage for body text.

## Layout

The page is a single dark column. A black header carries the multicolour ini3 logo at left and the links Who we are, What we do, Contact and Privacy policy at right, followed by a small En / Th / Cn language switch. Below the header is a banner strip of tall vertical photographic panels in grey, then a left-aligned title block, then a staggered two-column grid of portrait photographs with a black label chip and short copy overlaid at the bottom of each image. A lighter charcoal band with a centred orange "MILESTONES" heading and a row of game logos closes the part of the page that was measured.

Measured paddings are 15px, 18px, 8px, 16px, 6px and 24px most often; the spacing scale in the tokens runs from 3px to 24px. The Bootstrap breakpoints in the root variables are 576px, 768px, 992px and 1200px.

## Elevation & Depth

Depth is created mostly by image overlays and one shadow: `rgba(0, 0, 0, 0.5) 0px 4px 8px 0px`, measured on 8 elements. Text labels sit on solid black chips over photographs rather than on gradients. The header is a flat black bar. There are no coloured glows.

## Shapes

Buttons and nav items are square: the primary button's radius is 0px. The only non-zero radii measured on the page are 10px and 12px (one element each, on utility pieces such as the language switch). The overall shape language is rectangular, with photographs cropped as plain rectangles and text chips as rectangular black blocks.

## Components

- **Primary button ("What we do"):** translucent black fill `#00000054`, orange `#ff7a00` text and a 1px solid `#ff7a00` border, PT Sans Narrow 24px at weight 400 with 1px letter-spacing, padding 6px 36px, height 45px, 0px radius; it measures 203px wide. On hover the label turns `#ffffffbf`.
- **Navigation:** black bar, white 15px PT Sans Narrow links with `#818181` for the inactive group, and thin vertical dividers between items.
- **Language switch:** a small En / Th / Cn control in a rounded dark container; En is highlighted in orange.
- **Photo cards:** full-bleed images with a black label chip (for example "OUR PASSION", "WE ARE DEVOTED") and white body copy below.
- **Link:** orange text in the button type style.

## Design System Architecture

No public design system, brand guideline or press kit was found: https://www.ini3.co.th/brand returned HTTP 404. The site is built on Bootstrap (its root variables include `--primary`, `--breakpoint-xs` through `--breakpoint-xl` and the Bootstrap colour names) with custom CSS on top for the orange accent, the condensed headings and the dark theme. Sources opened: https://www.ini3.co.th/, https://www.ini3.co.th/who_we_are/ and https://www.ini3.co.th/what_we_do/?view=pills-game.

## Do's and Don'ts

- Do use one orange accent, `#ff7a00`, on a charcoal and black canvas.
- Do set headings in a condensed bold sans at very large sizes.
- Do label photographs with solid black chips and white copy.
- Do keep corners square on buttons and nav.
- Don't adopt Bootstrap's default blue as a brand colour.
- Don't document the cookie bar, the language picker, the scam-warning modal or the memorial tribute as brand components.
- Don't soften the button with fill colours; it is an outlined, translucent control.

## Responsive Behavior

At the mobile viewport (390px) the display heading drops from 120px to 60px, body text from 21.6px to 18px and button text from 24px to 20px. The Bootstrap breakpoints (576px, 768px, 992px, 1200px) are published in the root variables. Photographs stay full-bleed within their column and the two-column portrait grid was not measured at narrow widths; only the type-size changes above were measured.

## Iteration Guide

1. Start from `canvas #353535`, `ink #ffffff`, `primary #ff7a00` and the PT Sans Narrow and Hind Siliguri pairing.
2. Make page titles 120px bold on desktop and 60px on mobile.
3. Build buttons as outlined orange controls with a `#00000054` fill and square corners.
4. Use black label chips over photographs and keep photography warm and human.
5. Re-measure with the extractor if the site changes; do not copy Bootstrap defaults into the tokens.
