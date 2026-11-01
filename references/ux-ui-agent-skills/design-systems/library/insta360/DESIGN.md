---
version: alpha
name: Insta360
category: "Consumer Electronics"
description: "Insta360 (insta360.com), the 360-camera maker, uses a pale cloud-white canvas (#f8f9fc) with graphite ink (#262629), a single signature yellow (#ffe100) for the Store button, dark #1d1d1f Buy/Compare buttons, 24px-radius product cards, and Poppins Num with MiSans VF fallback at 56px/600 headlines and 14px body."
colors:
  canvas: "#f8f9fc"
  page-body: "#ffffff"
  ink: "#262629"
  primary: "#ffe100"
  on-primary: "#262629"
  ink-muted: "#76767f"
  ink-placeholder: "#d2d2d6"
  ink-translucent: "#00000099"
  ink-black: "#000000"
  hairline: "#e0e0e2"
  button-secondary-bg: "#1d1d1f"
  text-input-border: "#515157"
typography:
  display:
    fontFamily: "\"Poppins Num\", \"MiSans VF\""
    fontSize: 56px
    fontWeight: 600
    lineHeight: 60px
  display-mobile:
    fontFamily: "\"Poppins Num\", \"MiSans VF\""
    fontSize: 48px
    fontWeight: 600
    lineHeight: 56px
  body:
    fontFamily: "\"Poppins Num\", \"MiSans VF\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: "\"Poppins Num\", \"MiSans VF\""
    fontSize: 12px
    fontWeight: 500
    lineHeight: 28px
    letterSpacing: 0.5px
  button-secondary:
    fontFamily: "\"Poppins Num\", \"MiSans VF\""
    fontSize: 16px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: 0.5px
  input:
    fontFamily: "\"Poppins Num\", \"MiSans VF\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 16px
  3xl: 20px
  4xl: 24px
  pill: 9999px
spacing:
  s1: 1px
  s2: 6px
  s3: 8px
  s4: 9px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 27px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 12px
    height: 28px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.page-body}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 0px 32px
    height: 48px
  text-input:
    textColor: "{colors.ink-placeholder}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 0px 14px
    height: 40px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.4xl}"
    padding: 52px 40px 40px
---

## Overview

The Insta360 home page (title "Insta360 | 360 Cameras - Official Website", lang en) is a camera-maker's storefront. The first screen is a full-bleed photographic carousel slide (in the capture, "Insta360 X6 / Inspiration in every direction." over a fisheye photograph of a person in a yellow jacket under a vortex of colored prayer flags) with a white "Buy now" button and a translucent "Learn more" button, a top bar with a hamburger menu, the Insta360 wordmark, a search icon and a small yellow "Store" button, and previous and next arrows with a progress strip at the bottom. The measured hero heading is another slide, "Insta360 Snap Selfie Screen" at 56px, which shows the hero rotates.

Below the hero, a white section is headed "Innovative technology for creative minds." with a row of dark and light pill filters (Most Popular, Gimbal Cameras, 360 Cameras, Wide-Angle Cameras, Smartphone Gimbals, Wireless Microphones and more) and a three-by-two grid of product cards: Insta360 X6 ("Flagship 8K 360 camera."), Insta360 Luna Ultra ("Flagship dual-lens 8K gimbal camera."), Insta360 Ace Pro 2 ("8K AI-powered action camera."), Insta360 X5, Insta360 GO Ultra and Insta360 GO 3S. New products carry a small "NEW" label above the name. Each card centers the product name, a one-line description, a product photograph on the cloud-white card, a small "Learn more" text link at the left and a dark "Buy now" button at the right. A "View all" outlined button follows, then a wide feature card for the Antigravity A1 ("8K 360 drone. Co-engineered with Insta360.").

The measured page is 6315px tall at 1280px wide. Imagery is bright, product-on-white studio photography on the cards, and adventure and travel photography in hero slides; the voice is short and benefit-led ("Your tiny mighty 4K camera."). A small avatar (a chat or assistant control) floats at the right of the section header and is not documented as brand UI.

## Colors

- **Cloud white (#f8f9fc, `canvas`)** is the largest background area (2730) and the fill of product cards; **white (#ffffff, `page-body`)** is the section background and the text on dark (2056 characters); **#edeff2** (53 area) is a light grey fill.
- **Graphite (#262629, `ink`)** is the main text color (703 characters) and the fill of a dark band (1179 area, also with an 80% variant #262629cc).
- **Signature yellow (#ffe100, `primary`)** fills the "Store" button, the only yellow element in the first view (2 area), with #262629 text.
- **Near-black (#1d1d1f, `button-secondary-bg`)** fills the "Compare" and "Buy now" buttons with white text.
- **Greys:** #76767f (`ink-muted`, 639 characters) for descriptions, #d2d2d6 (`ink-placeholder`, 318) for input text, #00000099 (69) and #000000 (20), #898a8e (18).
- **Hairlines:** #e0e0e2 (9 borders), #e4e4e7, #4b4b4c and #515157 (input border on dark).

#0ea5e9 colors 14 characters in the extraction; it was not tied to a visible brand element, so it is not a token.

## Typography

The primary face is Poppins Num (400, 500, 600 loaded) with MiSans VF (100 to 900) as fallback; Roboto (400) and Poppins Old (400) are also loaded. By characters: Poppins Num 3789, Roboto 62. The stylesheet defines `--new-font-family: "Poppins Num", var(--sans)`, `--title-font-family: "Poppins Old", var(--noto), "Roboto"`, `--content-font-family: "Roboto", var(--noto), "Poppins Old"` and weight variables `--regular` 400, `--medium` 500, `--semibold` 600, `--bold` 700, `--extrabold` 800, `--black` 900.

- **Display:** 56px / 60px, weight 600 (hero heading); 48px / 56px on the 390px pass.
- **Card title:** 28px / 32px, weight 600 (for example "Insta360 X6").
- **Body:** 14px / 21px, weight 400.
- **Button:** 12px / 28px weight 500, 0.5px letter spacing (Store); secondary button 16px / 48px weight 500; outlined hero button 18px / 56px weight 500.
- **Input:** 12px / 14px weight 400.
- **Other measured sizes:** 24px (697 characters), 20px (286), 32px (267), 18px (194).

Letter spacing is 0.5px on buttons and normal elsewhere. MiSans VF is loaded as the declared fallback.

## Layout

Spacings are 1px, 6px, 8px, 9px, 12px, 14px, 16px, 20px, 24px and 27px. The header is 48px high (`--header-nav-height: 48px`). Content uses a wide centered container; the product grid is three columns of equal cards, the filter pills run horizontally with an arrow control at the right edge, and feature cards span the container width. The card padding is 52px 40px 40px.

## Elevation & Depth

Shadows are soft and cool-tinted: `rgba(112, 127, 150, 0.08) 0px 8px 24px 0px, rgba(112, 127, 150, 0.12) 0px 6px 12px 0px`, `rgba(112, 127, 150, 0.08) 8px 8px 16px 0px, rgba(112, 127, 150, 0.12) 2px 2px 8px 0px` and `rgba(25, 28, 33, 0.1) 0px 6px 14px 0px`, each measured once. Product cards are mostly flat on the white section; depth comes from the cloud-white fill against white and from the full-bleed hero image.

## Shapes

Radii measured: 24px (25 elements, product cards), 8px (23, buttons and the input), 10px (14), 6px (12, secondary buttons), 50px (9, pills), 20px (8), 16px (4) and 4px (2, the Store button). The input has an asymmetric `8px 0px 0px 8px` radius (a subscribe field joined to a button). Cards are the largest rounded shape; buttons are small-radius rectangles; filters are pills.

## Components

- **Store button.** #ffe100 fill, #262629 label 12px weight 500, 0.5px tracking, 4px radius, 28px high, 0px 12px padding.
- **Secondary button ("Compare", "Buy now").** #1d1d1f fill, white label 16px weight 500, 6px radius, 48px high, 0px 32px padding.
- **Hero buttons.** White "Buy now" with #262629 text and an 8px radius; translucent outlined "Learn more" in white 18px weight 500 with a 1px border, 8px radius, 56px line height.
- **Filter pills.** One dark selected pill ("Most Popular") and light grey pills, with a 50px radius.
- **Product card.** #f8f9fc fill, 24px radius, 52px 40px 40px padding, centered 28px name, grey description, product image, "Learn more" text link and dark "Buy now" button.
- **Text input.** 40px high, 8px radius (left corners), 1px border #515157, #d2d2d6 text at 12px, 0px 14px padding.

## Design System Architecture

No public Insta360 design system or brand guideline was found: fetching https://www.insta360.com/ and its /brand, /press, /about and /design paths with a plain HTTP client returned 403, so none of those pages could be read, and the measured data comes from the browser-based extraction only (714 visible elements). The de-facto system is the shipped stylesheet's root variables: font families (`--sans`, `--new-font-family`, `--title-font-family`, `--content-font-family`), weights (`--regular` to `--black`), and layout (`--header-nav-height: 48px`, `--floating-offset: 0px`).

## Do's and Don'ts

- Do keep surfaces cloud-white (#f8f9fc) and white, text graphite #262629.
- Do reserve yellow #ffe100 for the single Store button.
- Do use dark #1d1d1f buttons with white labels for "Buy now" and "Compare".
- Do give product cards a 24px radius and show each product on its own card.
- Don't add yellow to large fills.
- Don't use heavy shadows; the measured ones are cool, soft and rare.
- Don't document the floating assistant avatar as brand UI.

## Responsive Behavior

The 390px pass measured: the hero heading at 48px / 56px weight 600 (down from 56px / 60px), body text at 14px / 21px, and the "Store" button unchanged at 12px with a 4px radius and #ffe100 fill. The navigation and product grid at 390px were not measured.

## Iteration Guide

1. Cloud-white canvas, graphite text, Poppins Num 14px body.
2. A full-bleed hero with a white "Buy now" and a translucent "Learn more".
3. A "Store" button in #ffe100 at the top right.
4. A grid of 24px-radius cards with centered 28px names and dark #1d1d1f buy buttons.
5. Use pill filters with a 50px radius.
6. Keep shadows cool and soft.
