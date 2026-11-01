---
version: alpha
name: "Made With GSAP"
category: "Tech & AI"
description: "Made With GSAP subscription library of JavaScript motion effects: white hero then near-black #0a0a0b, acid lime #c9fe6e JOIN pill, LayGrotesk headings and PPNeueMontrealMono uppercase labels, 12-column grid and 4px to 25px radii."
colors:
  canvas: "#ffffff"
  page-body: "#0a0a0b"
  ink: "#0a0a0b"
  primary: "#c9fe6e"
  on-primary: "#0a0a0b"
  surface-black: "#000000"
  ink-muted: "#999999"
typography:
  display:
    fontFamily: LayGrotesk
    fontSize: 42.24px
    fontWeight: 500
    lineHeight: 43.0848px
    letterSpacing: "-0.8448px"
  display-mobile:
    fontFamily: LayGrotesk
    fontSize: 40px
    fontWeight: 500
    lineHeight: 40.8px
    letterSpacing: "-0.8px"
  heading:
    fontFamily: LayGrotesk
    fontSize: 48px
    fontWeight: 500
    lineHeight: 48.96px
    letterSpacing: "-0.96px"
  subheading:
    fontFamily: LayGrotesk
    fontSize: 18px
    fontWeight: 500
    lineHeight: 25.2px
  body:
    fontFamily: LayGrotesk
    fontSize: 30px
    fontWeight: 500
    lineHeight: 30.6px
    letterSpacing: "-0.6px"
  button:
    fontFamily: PPNeueMontrealMono
    fontSize: 13px
    fontWeight: 500
    lineHeight: 21px
    textTransform: uppercase
  nav:
    fontFamily: LayGrotesk
    fontSize: 22px
    fontWeight: 500
    lineHeight: 26.4px
rounded:
  xs: 4px
  sm: 10px
  md: 11px
  lg: 12px
  xl: 18px
  2xl: 20px
  3xl: 25px
  4xl: 30px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 13px
  s8: 14px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 0px 25px
    height: 50px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 0px 25px
    height: 50px
  link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.subheading}"
  nav:
    textColor: "{colors.page-body}"
    padding: 25px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 7px 0px 0px
  text-input:
    textColor: "{colors.page-body}"
    typography: "{typography.subheading}"
    padding: 0px 25px
    height: 50px
  card:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.xs}"
    transform: matrix(1, 0, 0, 1, 0, 260)
  footer:
    textColor: "{colors.page-body}"
    padding: 0px 25px
---

## Overview

Made With GSAP (madewithgsap.com, "MWG") is, per its fetched home page, a subscription library of 121 JavaScript motion effects built with GSAP, with a new effect added weekly; each effect ships with a step-by-step tutorial, a Webflow-ready component or downloadable code, and an AI prompt. The page credits Michaël Garcia (creative developer) and Florent Roux-Durraffourt (designer). The measured page opens on a white stage with the headline "Unique JS effects" on the left and "made with care" on the right, flanking a small black preview tile of a floating photo cluster labelled `#099`. A pill navigation (COLLECTION with a 120 counter, PRICING, FAQ, SHOWCASE), a round account button and a lime "JOIN" pill sit top-right. Scrolling hands the page over to near-black (`#0a0a0b`): a "WHAT IT'S ALL ABOUT" eyebrow, a large statement ("A collection that makes you learn essential web motion techniques and use them instantly in your projects.") in grey with white highlighted phrases, a mock of the product UI, and a trust line ("TRUSTED BY +1800 DEVELOPERS & USED BY CREATIVE STUDIOS AND AGENCIES") under a row of circular avatars. Total scroll height is 19119px at 1280px. The mood is a precise, developer-facing product page with a design-studio polish: white then black, one acid-lime accent, monospace micro-labels.

## Colors

`page-body` and `ink` are `#0a0a0b` (published as `--mwg2-black`), the dominant background by area (6668) and the text color of the light sections. `canvas` `#ffffff` (1957) is the light hero. `surface-black` `#000000` (804) is used on preview frames, and `#232323` (`--mwg2-anthracite`, 279) on raised dark panels. `primary` is the lime `#c9fe6e` (`--yellow`), the "JOIN" pill fill (area 29) with `#0a0a0b` text. Text colors measured: white (1510 characters), `#0a0a0b` (1347) and `ink-muted` `#999999` (1091, `--mwg2-grey`). Other published root colors are `#28DF7D` (`--mwg2-green`), `#f3f3f3` (`--mwg2-light-grey`, also measured as a background), `#323232`, `#777`, `#121212` and `#F1F1F1`. A pale blue `#bcefff` (119) is measured as a background but belongs to effect previews. The one saturated UI blue visible in the capture is the COPY button inside the product mock, which is a representation of the product rather than site chrome and is not used as a token.

## Typography

Two families: LayGrotesk (weight 500, plus 800 loaded) for editorial copy and headings, and PPNeueMontrealMono (500) for labels and buttons. Headings are tightly tracked at -2% of size: the hero line is 42.24px on 43.0848px with -0.8448px tracking, the section heading is 48px on 48.96px with -0.96px, and the statement paragraph is 30px on 30.6px with -0.6px. Nav items are 22px on 26.4px; supporting copy is 18px on 25.2px. Buttons, pill nav items and eyebrows are mono 13px, weight 500, 21px line height, uppercase; 11px and 12px mono set the counters and captions. Display sizes measured by character count also include 65px, 120px, 140px and 250px. The page declares no fallback family names for either font in the measured styles.

## Layout

The root variables define a 12-column grid with 15px gutters and 25px page margins (`--grid-columns: 12`, `--grid-gutter: 15px`, `--grid-margin: 25px`, `--grid-width: calc(100vw - (2 * var(--grid-margin)) - var(--scrollbar-width))`), a classic creative-studio grid. Measured gaps are 15px (60 uses), 10px (36), 5px and 124px; paddings are 25px (25 uses), 16px, 50px, 15px, 18px, 13px and 7px. The first view is a three-column composition: text left, preview center, text right, with a 15px column rhythm. Later sections are centered single-column text blocks and a framed product mock with rounded 20px corners, and the footer area is centered.

## Elevation & Depth

No box-shadows were measured. Depth comes from black frames on white, anthracite panels on black, and a floating pill navigation. The product mock is a white rounded sheet overlapping the black section, with a dark inner window and a right-hand panel separated by a hairline.

## Shapes

Radii form a deliberate scale published as variables: `--mwg2-radius-s` 4px, `--mwg2-radius-m` 12px, `--mwg2-radius-l` 20px. Measured radii: 4px (19 elements, preview frames), 20px (11), 25px (10, the pill buttons at 50px height), 100% (9, circular icon buttons and avatars), 18px (5), 12px, 30px, 10px and 11px. The primary button uses 25px, which is half its 50px height, so it renders as a full pill.

## Components

- **JOIN button (button-primary):** lime `#c9fe6e` fill, `#0a0a0b` text, PPNeueMontrealMono 13px uppercase, 50px tall, 105px wide in the measured sample, 0px 25px padding, 25px radius, with an arrow glyph; the label is duplicated in the DOM (JOIN JOIN), consistent with a text-swap hover animation, but the animation was not recorded.
- **Pill navigation:** a light translucent capsule holding mono uppercase items and a small circular counter badge on COLLECTION.
- **Round icon button:** 100% radius, used for the account icon.
- **Text input:** 50px tall, 0px 25px padding, 18px type.
- **Preview card:** `#000000` frame with 4px radius, captioned by a mono `#099`-style index.
- **Eyebrow:** a small lime dot followed by an uppercase mono label.
- **Testimonial avatars:** overlapping circles above the trust line.

## Design System Architecture

No formal style guide or design-system documentation is published; the fetched page offers only a logo (https://madewithgsap.com/assets/img/logo.svg), UI icons under https://madewithgsap.com/assets/img/mwg2/ and a showcase page. The de-facto system is a prefixed set of CSS variables: `--mwg2-black`, `--mwg2-white`, `--mwg2-grey`, `--mwg2-dark-grey`, `--mwg2-anthracite`, `--mwg2-light-grey`, `--mwg2-green`, `--mwg2-radius-s/m/l`, legacy `--yellow`, `--black`, `--white`, `--text-grey`, and the grid variables described above. The `mwg2` prefix marks the second-generation brand layer sitting beside older names.

## Do's and Don'ts

- Do pair a white hero with a near-black body and keep one lime action per view.
- Do set headlines in LayGrotesk 500 with about -2% tracking.
- Do use PPNeueMontrealMono uppercase for every label, counter and button.
- Do use fully round shapes for buttons and avatars and 4px for media frames.
- Don't add shadows or gradients; none were measured.
- Don't use the lime as a text color on white.
- Don't use the blue of the product mock as a brand color.

## Responsive Behavior

The 390px mobile pass measured the hero line at 40px on 40.8px with -0.8px tracking (desktop 42.24px), the statement paragraph at 30px on 30.6px, and body sizes of 18px, 13px, 11px and 12px unchanged. Larger sizes measured on mobile are 44px, 50px, 36px, 27px, 90px and 120px. Column counts, navigation form and breakpoints on mobile are not measured.

## Iteration Guide

1. Start with a white hero and a `#0a0a0b` body, and set headings tight in LayGrotesk.
2. Add mono 13px uppercase labels; use `primary` `#c9fe6e` only for the join/subscribe action.
3. Frame previews in black with 4px corners; round actions to 25px at 50px height.
4. Use a 12-column grid with 25px margins and 15px gutters.
5. Run `node web/scripts/verify-designs.mjs --slug=made-with-gsap-1` after changes.

## Voice

Copy is short, confident and developer-friendly: "Unique JS effects made with care.", "New effect every week.", "Jump right in!", "Easy setup: no Canvas or WebGL", "So, ready to animate?", "Level up your animation skills". The page text also contains "DRAG TO EXPLORE THE COLLECTION" and "Meet our easy-to-use platform". The pricing noted on the fetched page runs from €20 to €25 per month with annual billing at 20% off.

The interface therefore alternates between two registers: a proportional grotesque at large sizes for the human voice, and a monospace in small capitals for the system voice (counts, indexes, buttons, hints such as the `#099` and `#061` effect numbers). Keep that split when extending the system, and keep every label in the mono at 11px to 13px.
