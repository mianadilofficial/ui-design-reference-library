---
version: alpha
name: Wix
category: "Product & SaaS"
description: "Wix.com's home page is a bright white #ffffff canvas with black #000000 Wix Madefor Display headlines (73.3334px/400, -1.46667px tracking), Madefor Text body at 16px/24px, a blue #166aea 'Start for free' pill (42px radius, hover #2d83ff), black 50px-radius 'Get Started' pills, butter-yellow #fff1ac and sage #d2e4c7 color washes, and a glowing pill search field."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#166aea"
  on-primary: "#ffffff"
  primary-hover: "#2d83ff"
  butter: "#fff1ac"
  sage: "#d2e4c7"
  blush: "#ffe0ff"
  surface-grey: "#f0f0f0"
  ink-soft: "#2f2f30"
  ink-navy: "#272834"
  ink-slate: "#535a85"
  grey-light: "#c9c9c9"
  hairline: "#00000080"
typography:
  display:
    fontFamily: wix-madefor-display-v2, sans-serif
    fontSize: 73.3334px
    fontWeight: 400
    lineHeight: 88px
    letterSpacing: "-1.46667px"
  display-mobile:
    fontFamily: wix-madefor-display-v2, sans-serif
    fontSize: 41.1667px
    fontWeight: 400
    lineHeight: 45.2833px
    letterSpacing: "-0.823334px"
  heading:
    fontFamily: wix-madefor-display-v2, sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 52.8px
    letterSpacing: "-0.96px"
  subtitle:
    fontFamily: wix-madefor-text-v2, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
  body:
    fontFamily: wix-madefor-text-v2
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Madefor-Display, "Madefor Display", "Helvetica Neue", Helvetica, Arial, メイリオ, Meiryo, "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro W3", "Hiragino Kaku Gothic Pro", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-large:
    fontFamily: madefor-text-mediumbold, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif
    fontSize: 20px
    fontWeight: 400
  input:
    fontFamily: wix-madefor-text-v2, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 35.2px
rounded:
  xs: 3px
  sm: 5.33px
  md: 6.67px
  lg: 10px
  xl: 10px
  2xl: 15px
  3xl: 42px
  4xl: 50px
  pill: 9999px
spacing:
  s1: 2px
  s2: 2.67px
  s3: 3px
  s4: 3.33px
  s5: 4px
  s6: 5px
  s7: 5.33px
  s8: 6px
  s9: 6.67px
  s10: 8px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 8px 30px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-large}"
    rounded: "{rounded.4xl}"
    padding: 0px 10px 0px 34px
    height: 54px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link-hover:
    textColor: "{colors.primary}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.pill}"
    padding: 3px 172.8px 3px 52px
    height: 57px
    boxShadow: rgba(133, 154, 255, 0.4) 0px 30px 250px 20px, rgba(139, 142, 238, 0.16) 0px 16px 50px 0px
  color-blob:
    backgroundColor: "{colors.butter}"
    textColor: "{colors.ink}"
    rounded: "{rounded.pill}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

# Wix

## Overview

Wix is a website-building platform, and wix.com is itself built and hosted on Wix. The measured home page (1280px wide, 15368px tall, `lang="en"`) is a long, airy, white page with black type and soft colour washes. A 72px white header carries the black "WIX" wordmark at left, menus (Product, Solutions, Resources, Templates, Pricing and others) and, at right, "Log In" and a small blue "Start for free" pill.

The hero is centred: a large two-line headline "Create your future on the leading website builder" in Wix Madefor Display at regular weight, a 16px subtitle about Wix Harmony, a black "Get Started" pill, and below it a collage of website screenshots and phone mock-ups floating over a pale blue-and-yellow gradient haze. Further down, the page alternates editorial two-column blocks ("Website creation, as natural as thinking", "Spot the gaps, grab the opportunities", "Turn first click into repeat visits", "Manage it all, wherever you are") with feature lists set as large stacked words (eCommerce, Scheduling, Lead management, Portfolio, Blog, Online courses, Events, Payments — the inactive ones in light grey), an AI section "Meet Aria, your hands-on collaborator" on a pastel gradient, a domain search ("Create a website, get the perfect domain to match"), a "How to create a website for free" step list, a "You're in good company" collage, a closing headline "This is what ready feels like." and an FAQ accordion before a multi-column footer.

Colour comes from photography and large pastel washes — butter yellow, sage green, blush pink, sky blue — rather than from UI chrome. The tone of the copy is aspirational and short ("Create your future", "This is what ready feels like.").

## Colors

All values were measured on the rendered page (`web/data/extracted/wix.json`).

- **canvas `#ffffff`** — the body and by far the largest area (23416).
- **ink `#000000`** — the main text colour (8032 characters): headlines, body, header links; also the fill of the "Get Started" pill.
- **primary `#166aea`** — the blue "Start for free" pill in the header; header text links such as "Log In" turn this blue on hover. Hover fill of the pill: **primary-hover `#2d83ff`**.
- **on-primary `#ffffff`** — pill labels.
- **butter `#fff1ac`** — the largest colour wash (1980 by area): round yellow blobs behind imagery.
- **sage `#d2e4c7`** (567) and **blush `#ffe0ff`** (211) — additional pastel washes behind feature imagery. Sage also exists in the site's theme palette as `--color_22: 210,228,199`.
- **surface-grey `#f0f0f0`** — light grey panels (1035); theme `--color_12: 240,240,240`.
- **ink-soft `#2f2f30`**, **ink-navy `#272834`**, **ink-slate `#535a85`** — secondary text tones inside product screenshots and captions.
- **grey-light `#c9c9c9`** — the grey of inactive words in the stacked feature lists.
- **hairline `#00000080`** — 50% black borders (9 uses), such as FAQ row dividers.

The site's theme palette (`--color_0` … `--color_65`) is declared as RGB triplets; it includes a blue `26,106,255` (#1a6aff) repeated across many slots, greys, and accents such as `237,28,36` and `255,203,5`. Only the values above were measured as rendered colours. Link text in some blocks measured `#1e56c3`.

## Typography

The page uses Wix's own **Madefor** type family, loaded under several names: `wix-madefor-display-v2` (400, 500), `wix-madefor-text-v2` (400, 500), and older `madefor-display`, `madefor-display-bold`, `madefor-text` and `madefor-text-mediumbold` faces. Text-v2 carries most characters (5140), Display-v2 the headlines (2627).

- **display** — Madefor Display v2, 73.3334px / 400 / 88px, -1.46667px tracking (-0.02em): the hero headline. A larger 86.6666px size (-1.73333px) is used for the closing "This is what ready feels like."
- **heading** — 48px / 400 / 52.8px, -0.96px: the stacked feature words ("eCommerce", "Scheduling").
- Section headlines measured 42.6666px with -0.853332px tracking (209 characters) and 64px with -1.28px.
- **subtitle** — Madefor Text v2, 16px / 400 / 20.8px: the hero subtitle.
- **body** — Madefor Text v2, 16px / 400 / 24px; 16px is the most common size (5890 characters), then 14px with -0.28px tracking.
- **button** — Madefor Display, 16px / 400 / 24px for the header pill.
- **button-large** — madefor-text-mediumbold at 20px for the black "Get Started" pill.
- **input** — 22px / 400 / 35.2px in the domain search field.

Weights stay at 400 (7768 characters) and 500 (1217); headlines are never bold. All display sizes carry -0.02em tracking. Several sizes are fractional (73.3334px, 42.6666px, 18.6666px); the site declares `--minViewportSize: 320` and `--maxViewportSize: 1920` in its root variables.

**Substitute:** Wix Madefor is Wix's own family and is served by the site. The button stack falls back to Helvetica Neue, Helvetica and Arial.

## Layout

The hero band measured content from x=60 to x=1260 with two columns; the long main band measured content from x=60 to x=1153. The site declares `--site-width: 980px`. Editorial blocks pair a short headline on the left with a paragraph and a black pill on the right, then a full-width product image below. The extractor counted up to 3 card columns ("How to create a website for free" steps).

Spacing values are a mix of small fixed steps (2px, 6px, 16px, 18px, 20px) and fractional ones (13.3334px, 6.66662px, 3.33338px); large gaps of 50px and 90px separate sections, and paddings reach 60px and 86.6666px. The page has long runs of whitespace between blocks, which keeps density very low.

## Elevation & Depth

Depth is soft and luminous. The domain search pill sits on a huge blue glow: `rgba(133, 154, 255, 0.4) 0px 30px 250px 20px, rgba(139, 142, 238, 0.16) 0px 16px 50px 0px`. Small floating UI chips use an embossed treatment — white and near-white 1px insets plus `rgba(130, 178, 255, 0.25) -1px 2px 6px 0px` (16 uses) — and larger floating panels use the same insets with `rgba(0, 0, 0, 0.1) 0px 19.19px 39.51px 0px` (12 uses). A blue-tinted `rgba(60, 125, 196, 0.1) 0px 38px 40px -27px` appears once. Pastel gradients and blurred colour fields behind the hero and the Aria section add atmosphere.

## Shapes

- **Pills** — all buttons: 42px radius on the 40px header pill, 50px on the 54px "Get Started" pill, and 999px/99px on other pills.
- **666px** — the circular butter-yellow blobs (29 uses).
- **10px** and **15px** — screenshot frames and cards (27 and 24 uses); 66.6666px on 8 large rounded elements.
- **3px**, **5.33px**, **6.67px** — small UI inside product mock-ups.

## Components

**Header pill** — `#166aea`, white 16px label, `8px 30px`, 40px tall, 42px radius; hover `#2d83ff`.

**Black pill** — `#000000`, white 20px madefor-text-mediumbold label, `0px 10px 0px 34px` padding (the right side is narrower), 54px tall, 50px radius ("Get Started").

**Header** — white, 72px tall, black menu labels with chevrons; "Log In" hovers to `#166aea`.

**Stacked feature list** — 48px Madefor Display words in a vertical list; the active item is black with a short description and a link, the rest are `#c9c9c9`.

**Domain search** — a white pill 57px tall with 22px text, a large left padding for an icon and a blue button inside, floating on the big blue glow.

**Colour blob** — a large `#fff1ac` circle behind photography; sage and blush washes play the same role.

**FAQ** — a left headline ("Website builder FAQs") and a right column of questions separated by `#00000080` hairlines, each with a plus icon.

**Footer** — white, several columns of small black links on the canvas; individual column contents were not measured.

## Design System Architecture

No public Wix design-system documentation was found in the sources checked: https://www.wix.com/brand and https://www.wix.com/press-room both returned 404, and the GitHub repository names checked under https://github.com/wix (wix-style-react, wix-madefor) returned "Not Found".

The shipped page shows how the site is built: it is a Wix site whose theme exposes 158 root custom properties, mostly the editor's numbered theme palette (`--color_0` … `--color_65`) written as RGB triplets, plus `--site-width: 980px` and viewport bounds `--minViewportSize: 320` / `--maxViewportSize: 1920`. Component classes follow the platform's generated naming (`wixui-box`, `comp-…` IDs). The typography is Wix's own Madefor family in "display" and "text" optical variants. When reproducing the site, treat the theme palette as the colour source of truth and the measured values above as the rendered result.

## Do's and Don'ts

**Do**
- Keep the page white with black Madefor Display headlines at weight 400 and -0.02em tracking.
- Use pills for every button: blue `#166aea` for the header's sign-up, black for in-page actions.
- Add warmth with large pastel washes (`#fff1ac`, `#d2e4c7`, `#ffe0ff`) behind photography.
- Float product screenshots and UI chips with soft, blue-tinted shadows.
- Leave generous whitespace between sections.

**Don't**
- Don't bold headlines; the measured weights are 400 and 500 only.
- Don't use square buttons.
- Don't use the pastels for text or buttons; they are background washes.
- Don't use hard, dark drop shadows.
- Don't document the modal overlays the extractor hid as page components.

## Responsive Behavior

From the extractor's 390px pass: the hero headline measured 41.1667px / 400 with a 45.2833px line height and -0.823334px tracking. Body text stayed at 16px / 24px. The header "Start for free" pill measured 12px / 18px text, `6px 15px` padding, 30px tall and 30px radius (40px tall and 42px radius on desktop). The header measured 54px tall. The extractor recorded a visible menu toggle labelled "open navigation" and 2 header links still visible. The hero content measured from x=24 to x=365. Breakpoint widths were not measured.

## Iteration Guide

1. White canvas, black Madefor Display headlines at 400 with -0.02em tracking; body Madefor Text 16px/24px.
2. Header: white, 72px, blue `#166aea` sign-up pill with 42px radius.
3. Hero: centred headline, subtitle, black 54px pill, screenshot collage over a pastel haze.
4. Section pattern: short left headline, right paragraph and black pill, then a large image.
5. Draw new colours from the theme palette variables and confirm them against a measurement.
6. Run `node web/scripts/verify-designs.mjs --slug=wix` after changes.
