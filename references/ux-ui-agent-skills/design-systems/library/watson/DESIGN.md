---
version: alpha
name: Watson
category: "Architecture & Interiors"
description: "Watson is a Los Angeles creative studio whose site is pure black #000000 type on an off-white #fefefe canvas: a 284.877px stacked WATSON wordmark in the ca face with -12.8195px tracking, serif statements, 17.3056px ba body text and zero border radius."
colors:
  canvas: "#fefefe"
  page-body: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  cta-blue: "#0000ff"
  highlight: "#dbcabd"
typography:
  display:
    fontFamily: ca, sans-serif
    fontSize: 284.877px
    fontWeight: 400
    lineHeight: 259.584px
    letterSpacing: "-12.8195px"
  display-mobile:
    fontFamily: ca, sans-serif
    fontSize: 124.273px
    fontWeight: 400
    lineHeight: 112.078px
    letterSpacing: "-5.59227px"
  body:
    fontFamily: ba, sans-serif
    fontSize: 17.3056px
    fontWeight: 400
    lineHeight: 21.2992px
rounded:
  none: 0px
spacing:
  s1: 16.64px
  s2: 20.97px
  s3: 23.3px
  s4: 29.62px
  s5: 78.21px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
    padding: 169.728px 0px 0px
  footer:
    textColor: "{colors.ink}"
    padding: 0px 0px 25.9584px
---

## Overview

The measured page is https://watson.la/, titled "Watson ‒ Los Angeles". The extraction found a single 1280 by 800px screen with no vertical scroll (page height 800px) and only 173 visible elements, so the site presents as one composed statement rather than a long page. The header lists "LA" and the six letters W, A, T, S, O, N stacked as the display wordmark; the body copy is a numbered list of the studio's disciplines: "(1) Partnerships, (2) Capabilities, (3) Conversation" in the measured text, with a note "(Recently) We're looking to expand our creative ..." and a footer line "CURRENTLY CELEBRATING OUR GRAND CLIO AWARD".

The capture shows the key statement mid-animation: a centered stack of large serif words, "creative studio, led by craft — in search of conversation", with small superscript numerals "(1)", "(2)", "(3)", the words "craft" and "conversation" underlined, and two small inline photographs (a red-toned portrait and a red and white sneaker) set between words. The design idea is editorial and typographic: a sentence is the interface, images are inline glyphs, and color is limited to black on near-white.

## Colors

The page is monochrome by measurement. The background is `#fefefe` (1,024 weighted area units, with `#ffffff` measured as the `page-body` color) and the text is `#000000` (all 578 measured characters). The root variables map `--color-bg` to `--color-light: #fff` and `--color-txt` to `--color-dark: #000`, and derive tints with `color-mix` (`--color-txt-20`, `--color-txt-35`, `--color-txt-50`, `--color-bg-alternate`). Lazy image placeholders use `--color-img-color: #0000000d` and variants (`#e6e3d9`, `#e8dcd5`).

Two further colors are declared and present in the stylesheet: `--color-cta-bg: #00f` (blue, counted four times in the CSS corpus as `#0000ff`) and `--color-hightlight-bg: #dbcabd`. Neither appeared on a measured element on the first screen, so they are tokenized only from the variable declarations. `primary` is `#000000`, the link and text color; there is no colored action on the measured screen.

## Typography

Three obfuscated family names are used, which are loaded font files rather than system faces: `ca` for the wordmark, `bu` for the serif statements and `ba` for sans body text. Measured: `ca` at 284.877px, weight 400, 259.584px line height and −12.8195px tracking (−0.045em) for the stacked WATSON letters, shrinking to 124.273px with −5.59227px on mobile; `ba` at 17.3056px weight 400 on 21.2992px with −0.173056px tracking (about −0.01em) for body and links, with weight 200 for 13 characters; `ba` at 8.6528px on 9.984px for the footer fine print; and `bu` at 79.2064px with −1.98016px tracking for the central statement (87 characters; its weight was not isolated, so it is not tokenized). Loaded files are `ba` 400 and 200, `bu` 400, 400 italic and 600, and `ca` 400.

The root variables describe a type scale in unitless pairs: `--txt-xxl-0-s: 240` / `--txt-xxl-0-l: 200`, `--txt-xl-0-s: 90` / `--txt-xl-0-l: 75`, `--txt-l-0-s: 40` / `--txt-l-0-l: 34`, `--txt-m-0-s: 26` / `--txt-m-0-l: 22`, `--txt-s-0-s: 16` / `--txt-s-0-l: 18` and `--txt-xs-0-s: 12` / `--txt-xs-0-l: 14`.

Font substitutes: the three files are custom or licensed; use a condensed grotesque for the wordmark, a high-contrast text serif (with an italic) for statements and a neutral sans for body copy.

## Layout

Space is generous and centered. The padding scale is declared as `--p-xs: 32px`, `--p-m: 96px` and `--p-l: 128px`, and the measured paddings are 16.64px, 20.9664px, 23.296px, 29.6192px, 78.208px and 169.728px (the header's top padding). The header measured 429px tall, the footer 305px with 25.9584px bottom padding. The statement is centered in a narrow column with ragged lines; the wordmark letters are stacked vertically rather than set on one line. No gaps were recorded.

## Elevation & Depth

No shadows, borders or overlays were measured. The panel color is declared as a 90% opacity version of the background (`--color-panel`), and inline images carry a faint placeholder tint while loading. Depth is created only by scale contrast between the 285px wordmark and the 17px body.

## Shapes

No border radius was measured: `desktop.frequencies.borderRadii` is empty and every rendered element computes 0px, so the token is `rounded.none: 0px`. The stylesheet declares 4px, 25px and 32px radii in its corpus, but they were not measured on any rendered element. Inline photographs are plain rectangles.

## Components

**Statement:** a centered paragraph of serif words with superscript numerals "(1)", "(2)", "(3)", underlined links for "craft" and "conversation", and small rectangular inline images.

**Wordmark:** the letters W, A, T, S, O, N stacked in the display face at 284.877px.

**Link:** black `ba` 17.3056px with −0.173056px tracking ("Watson" in the header).

**Footer note:** "CURRENTLY CELEBRATING OUR GRAND CLIO AWARD" in 8.6528px capitals, followed by the "(Recently)" hiring note.

No buttons, inputs, cards or filled elements were measured.

## Design System Architecture

No public design system or brand guideline is linked: the home page HTML is small (about 24KB) and carries only a title, a meta element and inline CSS. The de-facto system is the stylesheet's root variables: color roles (`--color-bg`, `--color-txt`, `--color-panel`), spacing (`--p-xs`, `--p-m`, `--p-l`), a type scale (`--txt-*`), easing curves (`--o4`, `--io4`, `--io5`) and a hairline unit `--px: 1px`. Tokens in this file come from live measurement of https://watson.la/ and those variables. Media queries in the source use range syntax, such as `(width<=800px)` (ten rules) and `(aspect-ratio<=3840/2160)`.

## Do's and Don'ts

- Do compose the page as one sentence with numbered notes and inline images.
- Do keep the palette to `#000000` on `#fefefe`.
- Do set the wordmark very large with tracking near −0.045em.
- Don't add radius; the measured value is 0px.
- Don't add colored buttons; the declared blue `#0000ff` has no measured element.
- Don't document the animation state (partial words, transforms) as layout.

## Responsive Behavior

The mobile pass measured: wordmark 124.273px on 112.078px with −5.59227px tracking, body 14.8067px on 17.3347px with −0.148067px tracking, and footer fine print 7.2228px; the statement size is 42.9757px. The header measured 112px tall, equal to the wordmark. The stylesheet declares range media queries at `(width<=800px)` (ten rules) and `(width<=800px) and (aspect-ratio<=2160/3840)`; further layout changes are not measured.

## Iteration Guide

1. Black on `#fefefe`; if a color is needed, measure it first.
2. Build the hero from the stacked wordmark and a centered serif statement.
3. Keep body text at 17.3056px and fine print at 8.6528px, both with slightly negative tracking.
4. Use inline images as words, with no radius.
5. Re-capture after the intro animation completes to measure the final state of the statement.
6. Treat numbered parenthetical notes as the only ornament. The measured text uses "(1)", "(2)", "(3)" for the disciplines and "(Recently)" for the news line, all in the body face rather than a separate label style.
7. Keep the hierarchy to three tiers: the 284.877px wordmark, the 79.2064px serif statement and the 17.3056px body, with 8.6528px for legal-size notes. The root type scale (240, 90, 40, 26, 16, 12) is declared but only these measured sizes were seen on the first screen.
8. Allow the page to be a single screen. The measured document height is 800px at a 1280px width, so additional sections should be justified by measurement of the live site rather than assumed.
9. Preserve contrast: black on `#fefefe` is the only text and background pairing recorded, and the tinted variables derive from it by mixing rather than from new hues.
