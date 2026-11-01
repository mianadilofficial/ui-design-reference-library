---
version: alpha
name: "Make It Real Foundation Merch"
category: "Retail & E-commerce"
description: "Make It Real Foundation merch store: ultramarine #2423ad hero and deep navy #02022f story scenes, white extended Benzin type at huge sizes, periwinkle #5857ff pill buttons, fluid viewport-scaled radii and hand-drawn sun and cloud art."
colors:
  canvas: "#02022f"
  page-largest: "#2423ad"
  ink: "#ffffff"
  navy-deep: "#02022f"
  primary: "#5857ff"
  accent-blue-deep: "#3a39e3"
  surface-navy-2: "#03035d"
  ink-ice: "#d9e8ff"
  surface-grey: "#e4e4e4"
typography:
  display:
    fontFamily: preloader, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    textTransform: uppercase
  display-mobile:
    fontFamily: Benzin-Regular
    fontSize: 13.0813px
    fontWeight: 400
    lineHeight: 19.6219px
  heading:
    fontFamily: Benzin-Medium
    fontSize: 24.8973px
    fontWeight: 400
    lineHeight: 32.3665px
  body:
    fontFamily: Benzin-Regular
    fontSize: 16.0054px
    fontWeight: 400
    lineHeight: 24.0081px
rounded:
  xs: 10.67px
  sm: 14.23px
  md: 26.68px
  lg: 35.57px
  xl: 56.91px
  2xl: 66.69px
  3xl: 67.58px
  4xl: 88.92px
  pill: 9999px
spacing:
  s1: 1.78px
  s2: 4.45px
  s3: 5px
  s4: 7.11px
  s5: 8.89px
  s6: 11.56px
  s7: 16.36px
  s8: 20px
  s9: 23.12px
  s10: 26.68px
components:
  nav:
    textColor: "{colors.ink}"
    padding: 7.11351px 0px
  nav-link:
    textColor: "{colors.ink}"
  card:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
---

## Overview

Make It Real Foundation Merch (mirfundmerch.com, title "Home - Make It Real Fund Merch") is the merchandise store of the Make It Real Foundation. The measured home page and its footer text identify a charity shop: the opening copy reads "Support children affected by war and create an auspicious future together", the section headline in the page text begins "Meet Vasylyna! She's only 7 years old, and she's from Mariup…", the body copy begins "All funds collected will be directed to the Make it Real fou…" (the measured text is cut at 60 characters by the extractor), the navigation offers a Ukrainian-language switch (Українська), Story, Foundation, Store, Contacts and a "Submit image" button, and the footer carries a SHOP@MKTRL.COM contact, a COPY action, Facebook, Instagram, LinkedIn and a Privacy Policy link. The site could not be fetched as text (the server returned HTTP 403 Forbidden to the fetch tool), so this document rests on the measured extraction and the capture. Visually it is a childlike, hand-drawn collage on a saturated blue: the first screen is an ultramarine paper-textured sky (`#2423ad`) with a giant white extended-width "REAL" wordmark, a yellow sun, scribbled pale-blue clouds and small black birds; a torn dark-navy edge leads to a deep navy section (`#02022f`) where the word "STORY" appears in huge letters in the ultramarine. A Ukrainian flag disc sits at the top left, a yellow cart counter and a lilac-blue pill "Submit image" button at the top right, and a "Shop T-shirts" pill below a small T-shirt thumbnail at the right. The page is very tall (31244px at 1280px). A cookie-consent container was hidden during measurement and is not documented.

## Colors

Three blues form the system. `page-largest` `#2423ad` is the largest background by area (7740) and is the ultramarine of the hero and footer. `canvas` `#02022f` (3379) is the deep navy of the story section, and the same value is kept as `navy-deep` for text on light cards (`#02022f` is also the second most-read text color, 705 characters). `primary` `#5857ff` is the periwinkle used for the pill buttons and the hover color of navigation links (measured as a link hover color and as a background, area 19). `accent-blue-deep` `#3a39e3` (area 6) and `surface-navy-2` `#03035d` (253) are further blue steps, and `#02022f33` is the navy at 20% alpha. `ink` `#ffffff` is the main text (885 characters), `ink-ice` `#d9e8ff` a pale blue for small text (37), and `surface-grey` `#e4e4e4` (878) is the background of product cards. The sun and the cart counter are yellow in the capture and the lighter cloud blue is illustrative; those fills were not recorded as separate measured backgrounds, so they are not tokens. The WordPress preset palette in the root variables (`#9b51e0`, `#f78da7`, `#00d084`, `#cf2e2e` and others) is the CMS default and is not brand color.

## Typography

Four families were loaded: Benzin-Medium (500), Benzin-Regular (400), Gilroy (500 and 700) and a preloader face. Benzin-Medium is the main family by character count (876), Gilroy follows (411), then Benzin-Regular (324) and the preloader (16). The hero wordmark and the "STORY" word are set in an extra-wide grotesque; the measured wordmark-scale sizes are 86.0002px (the footer headline, Benzin-Medium) and larger display values. Section headings such as "Meet Vasylyna!" are 24.8973px on a 32.3665px line height in Benzin-Medium; body copy is Benzin-Regular 16.0054px on 24.0081px; the preloader text "LOADING..." is 14px on 20px, uppercase. The most-read sizes are 19.5622px (401 characters), 34.6784px (351), 16.0054px (177), 11.5595px (152), 24.8973px (141) and 12.4486px (113): the odd decimals show a fluid viewport-based type scale rather than fixed steps. The navigation container measures 0px font-size, which is a layout artefact of the measurement, so there is no nav typography token.

## Layout

The page is a long scroll of full-width scenes: a blue hero with a centered giant word, a torn-paper transition, a navy story section with a giant word, followed by story, product and footer scenes. The header is a 60px-tall row with 7.11351px vertical padding: left cluster (flag, Story, Foundation, Store, Contacts), a centered logo lock-up, and right cluster (cart, Submit image). Paddings measured: 47.127px (17 uses), 8.89189px (16), 5px, 4.44595px, 40.9027px, 23.1189px, 26.6757px, 53.3514px and 284.541px; gaps 28.4541px, 40px and 20px. These fractional values indicate that spacing is scaled with the viewport rather than fixed.

## Elevation & Depth

No box-shadows were measured. Depth is illustrative: paper-texture overlays, a torn black-navy edge, hand-drawn clouds and sun in front of the blue sky, and a translucent navy layer (`#02022f33`). The WordPress preset shadows in the root variables (for example `6px 6px 0px rgb(0, 0, 0)`) exist as theme defaults but no rendered element carries a shadow.

## Shapes

Radii are large and varied, in a fluid scale: 14.227px (8 elements), 100% (7, circular flag and cart), 56.9081px (5), 66.6892px (4), 26.6757px (4) and 10.6703px (2), plus top-only and bottom-only rounded shapes (35.5676px and 67.5784px tops, 26.6757px bottoms) for cards and panels and one 88.9189px value. Buttons are pill-shaped in the capture. The soft, over-rounded geometry supports the child-friendly mood.

## Components

- **Pill button:** "Submit image" with a plus icon and "Shop T-shirts" with a bag icon, periwinkle `#5857ff` fill with white label in the capture; the extractor did not assign a primary-CTA role, so no size or padding is recorded.
- **Header navigation:** white labels that turn `#5857ff` on hover (measured for Story and Foundation).
- **Cart badge:** a small round counter beside a bag icon.
- **Product card:** `#e4e4e4` fill with `#02022f` text, and rounded top corners.
- **Footer:** `#2423ad` background, white text, a very large Benzin-Medium headline at 86.0002px and links to Facebook, Instagram, LinkedIn and Privacy Policy, plus SHOP@MKTRL.COM and a COPY button.
- **Preloader:** the text "LOADING..." with a counter, shown first and measured as the h1 candidate.

## Design System Architecture

No design system, brand guideline or press kit was found: the fetch of https://www.mirfundmerch.com/ returned HTTP 403 and the extraction shows no such links; there is no public system to cite. The de-facto system is a WordPress theme (root variables `--wp--preset--*`, `--wp-admin-*`, `--wp-block-synced-color`), with Swiper for carousels (`--swiper-navigation-size: 44px`), viewport helpers (`--deltaVH`, `--windowWidth: 100vw`), and custom fonts declared with `@font-face` (Benzin-Regular, Benzin-Medium, Gilroy, preloader, woofc). Brand colors, type sizes and spacing are applied in theme CSS and scale with the viewport.

## Do's and Don'ts

- Do build on ultramarine `#2423ad` and deep navy `#02022f`, with white text.
- Do use extended-width Benzin type at very large sizes for single words.
- Do round everything generously, with circles for icon buttons and pills for actions.
- Do use `#5857ff` for the hover and button color.
- Don't use the WordPress default palette or shadows.
- Don't set body copy in a thin weight; the measured weights are 400 and 500 (700 for Gilroy).
- Don't document the cookie container as brand UI.

## Responsive Behavior

The 390px mobile pass measured the opening text at 13.0813px on 19.6219px (Benzin-Regular), the "Meet Vasylyna!" heading at 18.6875px, and body copy at 15.8844px. The mobile size list is 18.6875px (1157 characters), 20.5562px (401), 26.1625px (203), 15.8844px (177), 12.1469px (152), 13.0813px (113) and 25px (14). Layout, navigation form and breakpoints on mobile are not measured.

## Iteration Guide

1. Start on `canvas` for story scenes and `page-largest` for hero and footer scenes.
2. Put one giant extended word per scene in white or ultramarine.
3. Use `primary` `#5857ff` for pill buttons; keep labels white.
4. Scale type and spacing with the viewport; use the measured steps only as references.
5. Run `node web/scripts/verify-designs.mjs --slug=make-it-real-foundation-merch` after changes.
