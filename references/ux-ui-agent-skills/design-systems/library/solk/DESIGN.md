---
version: alpha
name: "SOLK"
category: "Fashion & Apparel"
description: "SOLK is a Swiss biocircular footwear shop that stays almost colorless: white canvas (#ffffff), black ink (#000000), SuisseIntl Regular at 14 to 20px with SuisseWorks serif accents, square 0px corners, 1px black outlined buttons and large editorial photography of shoes and people."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  ink-legal: "#303030"
  surface-sand: "#e7e7e3"
  surface-2: "#030303"
  ink-2: "#0b0b0b"
  ink-4: "#ffffff66"
  ink-5: "#0b0b0b80"
  ink-6: "#ffffff99"
typography:
  display:
    fontFamily: "\"SuisseIntl Regular\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
  heading:
    fontFamily: "\"SuisseWorks Regular\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.36px"
  subheading:
    fontFamily: "\"SuisseIntl Regular\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-1%"
  button:
    fontFamily: "\"SuisseIntl Regular\", sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22px
  nav:
    fontFamily: "\"SuisseIntl Regular\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
rounded:
  xs: 5px
  none: 0px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 18px
  s8: 20px
  s9: 30px
  s10: 35px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 4px 18px
    height: 36px
    borderColor: "{colors.ink}"
  button-legal:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-legal}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 4px 12px
    height: 52px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-5}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 4px 0px
    height: 31px
---

# SOLK

## Overview

SOLK (solk.com) sells Swiss-engineered, biocircular footwear. The page title reads "SOLK | Swiss engineered footwear. Biocircular by design." and the 1280px home page is 6688px tall. The first screen is a thin white header and one wide hero photograph of a black leather sneaker with a gum sole against pale concrete, with a tracked-out white uppercase line "MADE TO FADE", then "Swiss engineered footwear." and a tiny "Biocircular by design." underneath. Below sit two tall side-by-side portraits, a woman in linen on a volcanic shore and a man in a yellow sweater on black rock beside surf, each labeled with a small white "Women" or "Men" caption centered on the image. A short centered statement follows ("Footwear, built differently. Crafted with shoemaking heritage, designed with purpose…, a biocircular system that turns our products into compost when their time is done."), and a three-card row presents Materials, Back to Earth and Our System, each as a photograph with a one-line caption and a small outlined button.

The voice is quiet, material-led and calm. The palette is neutral, with all chroma coming from photography in earth, sea and sand tones. Typography stays small and even: the whole page lives between 14px and 20px, which gives the imagery the role of headline.

## Colors

Measured colors are neutral and few.

- **Canvas `#ffffff`** is the page and header background and the largest area (4572 weight).
- **Ink `#000000`** is the main text color (904 characters), with `#0b0b0b` (560 characters) as ink-2. The stylesheet's `--color-text-main` is `#000000`.
- **Primary `#000000`** is the black used for the one interactive style that the page shows repeatedly: the 1px outlined button (Subscribe to Newsletter) in black text and a black border. It is set to the ink value here because the extractor's own "primary CTA" pick, a legal "Withdraw from contract" link-button with white fill and `#303030` text, is not a brand button. The generated white and `#303030` values are kept as canvas and `ink-legal`.
- **Surface-2 `#030303`** (1467 weight) and **`#0b0b0b`** are the dark areas: the footer background is `--color-background-footer: #0b0b0b` and its text is `--color-text-footer: #a4a4a4`.
- **Surface-sand `#e7e7e3`** is a measured warm-light background area (513 weight).
- **Ink-4 `#ffffff66`, ink-6 `#ffffff99`** are translucent white labels over photography; **ink-5 `#0b0b0b80`** is the half-opacity nav text that turns solid black on hover (measured: color rgba(11,11,11,0.5) before, rgb(0,0,0) after).

Borders in the stylesheet are low-contrast hairlines such as `--color-borders-main` rgba(0,0,0,0.1) and `--color-borders-footer` rgba(164,164,164,0.15). The header variable `--color-background-header` is `#efede9`, but the measured header background is `#ffffff`.

## Typography

Two commercial families from the Suisse foundry are used: **SuisseIntl Regular** (1648 characters) for nearly everything, and **SuisseWorks Regular**, a serif, for 110 characters (the lead statement heading). Both come with weight 400; the only other weight measured is 500 (26 characters, the nav).

| Role | Family | Size / line-height | Weight | Tracking |
|---|---|---|---|---|
| display (largest measured heading element) | SuisseIntl Regular | 20px / 26px | 400 | normal |
| heading | SuisseWorks Regular | 18px / 24px | 400 | -0.36px |
| subheading and body | SuisseIntl Regular | 18px / 24px | 400 | -1% (about -0.18px) |
| nav, links, outlined buttons | SuisseIntl Regular | 16px / 20.8px | 400 | normal |
| legal button | SuisseIntl Regular | 15px / 22px | 400 | normal |

The size ladder is 18px (1352 characters), 16px (358), 20px (26) and 15px (22). The hero line "MADE TO FADE" is clearly tracked-out and uppercase in the capture; its exact size was not measured, so no value is recorded for it. No substitute font was measured.

## Layout

The page is edge-to-edge with a thin gutter around full-bleed photography. The header is 68px high on a white background, centered nav (Women, Men, SOLK, Biocircularity) with a letter-spaced logo at the left and account and bag icons at the right. Content blocks use gaps of 16px, 10px, 20px, 40px and 80px, paddings of 20px, 35px, 18px and 15px, and the stylesheet sets `--container-vertical-space-base: 100px`. Photography forms a two-up row of tall portraits and a three-up row of square-ish cards. Text blocks are narrow (the body paragraph measures 393px wide) and centered with ample white space around them.

## Elevation & Depth

No box shadows were measured. Everything is flat: separation comes from white space and hairline borders, and any layering is photographic (white caption text sitting directly on images). The stylesheet's secondary backgrounds are translucent blacks, `--color-secondary-background-main` rgba(0,0,0,0.08), `--color-third-background-main` rgba(0,0,0,0.04) and `--color-fourth-background-main` rgba(0,0,0,0.02), which read as barely-there tints.

## Shapes

Corners are square. The theme variables `--border-radius-forms`, `--border-radius-buttons`, `--border-radius-cards`, `--border-radius-product-card` and `--border-radius-widgets` are all 0 / 0px in the stylesheet, and every measured button, input and nav element computes 0px. A single 5px radius appears once on the page (xs token). Buttons carry `--border-width-buttons: 1px`.

## Components

- **button (outlined)**: transparent fill on the white canvas, 1px solid `#000000` border, `#000000` text, SuisseIntl 16px, 4px 18px padding, 36px tall, 0px radius. Example labels: Subscribe to Newsletter, Materials, Back to Earth, Our System.
- **button-legal**: white fill, `#303030` text, 15px/22px, 4px 12px padding, 52px tall, 0px radius ("Withdraw from contract"). This is a legal-notice control, not a brand CTA.
- **nav**: white header, 68px tall, items in `#0b0b0b80` that become `#000000` on hover.
- **text-input**: white background, black 16px text, 4px 0px padding, 31px tall, 0px radius (no visible box in the measurement; border not recorded).
- **link**: 16px black.
- **product/campaign card**: photograph with a caption line below and an outlined button on the right of the caption row.

## Design System Architecture

No public design system or brand guideline was found; the home page links only to About Us and a press blog, neither opened for design data. The de-facto system is a themed set of CSS custom properties in the shipped stylesheet with semantic names: `--color-background-main`, `--color-text-main`, `--color-text-header`, `--color-text-footer`, `--color-borders-main`, `--font-stack-headings-primary`, `--font-stack-body-primary`, `--font-stack-body-serif`, `--border-radius-*` and `--button-padding: .875rem .9375rem`. Font weights are variables too (`--font-weight-headings-primary: 400`, `--font-weight-buttons` referencing the medium body weight). Reference: https://solk.com/

## Do's and Don'ts

- Do keep the page black on white and let photography carry color.
- Do keep UI type between 14px and 20px, in SuisseIntl Regular, with SuisseWorks Regular only for a serif lead.
- Do draw buttons as 1px black outlines with square corners.
- Do not add shadows or rounded corners; every measured radius is 0px.
- Do not treat the legal "Withdraw from contract" button as the brand call-to-action.
- Do not tint the footer with a color; it is `#0b0b0b` with `#a4a4a4` text.

## Responsive Behavior

The 390px mobile pass measured: body text drops from 18px to 14px with a 20px line-height (-1% tracking kept); the display label stays 20px/26px; the legal button keeps 15px type but its height drops from 52px to 28px (width 188px); the mobile size ladder is 14px (1639 characters), 15px, 20px and 18px. Layout changes of the photography grid and nav were not measured.

## Iteration Guide

1. Start with `#ffffff` and `#000000`; use `#0b0b0b` for the footer.
2. Use 18px/24px for reading text and 16px for navigation; no steps above 20px were measured.
3. Draw buttons as square 1px black outlines at 36px height.
4. Let photography define mood; pair a calm caption with a small outlined action.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=solk --url=https://solk.com/ --force --no-motion` after site changes.
