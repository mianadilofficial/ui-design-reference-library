---
version: alpha
name: Siam Paragon
category: "Thai Brands"
description: "Siam Paragon (siamparagon.co.th), the Bangkok luxury shopping mall site: pale cool canvas #f2f5f5, near-black ink #030305, a gold #d0b857 nav hover accent, all-Roboto uppercase set at weight 400 with negative tracking (46px/48.3px display), square corners everywhere and no shadows."
colors:
  canvas: "#f2f5f5"
  ink: "#030305"
  primary: "#d0b857"
  ink-grey: "#a4a9ac"
  surface-white: "#ffffff"
  ink-grey-light: "#a7a7a7"
typography:
  display:
    fontFamily: Roboto, "Noto Sans Thai", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 46px
    fontWeight: 400
    lineHeight: 48.3px
    letterSpacing: "-0.46px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Roboto, "Noto Sans Thai", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 37.8px
    letterSpacing: "-0.36px"
    textTransform: uppercase
  subheading:
    fontFamily: Roboto, "Noto Sans Thai", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: "-0.4px"
    textTransform: uppercase
  body:
    fontFamily: Roboto, "Noto Sans Thai", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 22.5px
    letterSpacing: "-0.18px"
rounded:
  none: 0px
spacing:
  s1: 2px
  s2: 3.2px
  s3: 3.6px
  s4: 4px
  s5: 8px
  s6: 9.2px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    padding: 8px 0px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    padding: 8px 0px
---

## Overview

Siam Paragon (https://www.siamparagon.co.th/, page title "Siam Paragon | Bangkok Luxury Shopping Mall | Siam Paragon") is the website of a Bangkok luxury shopping mall. The header holds a script "P" logo above "SIAM PARAGON" and a single row of uppercase navigation: HOME, SHOP, DINE, SEE & DO, PROMOTION, EVENT, MEMBER, TOURIST, DIRECTORY, SERVICE, a search icon and an EN language selector. The hero reads "SIAM PARAGON, THE GATEWAY TO EXTRAORDINARY WORLD WONDERS" with opening hours and a DISCOVER MORE link, next to a tall photograph of the mall's spiral staircase and a globe (the NEXTOPIA attraction). Below the hero: EDITOR'S PICK (a three-up row of luxury boutique cards for Louis Vuitton, Rolex and Dior, each with a category label such as LUXURY FASHION, a floor label such as 1F, MF, and an uppercase title, with a VIEW ALL link), EXCLUSIVELY AT SIAM PARAGON (EATELIER on the 4th floor, plus MELAND, SCBX NEXT TECH and SEA LIFE Bangkok Ocean World per the page text), Shop, Dine, See & Do quick links, the ONESIAM Global Visitor Card and Siam Gift Card promotion, an Information section and a contact, app and newsletter footer.

The measured page is 1,280px wide and 3,982px tall. The look is quiet, editorial and gallery-like: a pale cool-grey field, enormous uppercase Roboto headlines in regular weight, photographs with no frames, and no coloured buttons. Text links such as DISCOVER MORE, VIEW ALL and SEE ALL DINING are plain uppercase words. In the raw capture the hero headline block was blank at capture time (its entrance animation had not played), so the left half of the hero shows only the canvas colour.

Copy is aspirational, upscale and short: "NOW OPEN 4th Floor", "Now serving, today at Siam Paragon", "Discover the new zone, EATELIER, on the 4th floor, a collection of restaurants and a new hangout spot in the heart of Bangkok."

The page text also shows the hours line under the hero ("Open Daily, 10 AM to 10 PM"), a Getting Here link, and a second banner for NEXTOPIA, an attraction exclusive to Siam Paragon. Information links (Getting Here, About, Blog & News, careers and tenant services) are grouped in a lower section above the contact, app download and social links.

## Colors

- **Canvas #f2f5f5.** Cool pale grey, the body and header background (2,772 area weight).
- **Ink #030305.** Almost black; all headlines, navigation and body text (2,553 characters) and the dark footer background (512 area weight).
- **Surface white #ffffff.** Small areas (102 area weight).
- **Text on dark #f2f5f5.** Footer text (238 characters).
- **Gold #d0b857.** The measured hover colour of every main navigation link (HOME, SHOP, DINE, SEE & DO, PROMOTION, EVENT, MEMBER, TOURIST, DIRECTORY, SERVICE); a variant #c9b154 (rgb 201, 177, 84) is measured on the "GETTING HERE" link hover. In this file the gold is the `primary` accent because it is the only chromatic colour measured; the generator's pick (a grey) is kept as `ink-grey`.
- **Greys.** #a4a9ac (62 characters, the generator's primary) and #a7a7a7 (8 characters) for muted text such as small labels.
- **Faint areas.** #e6e6e6 and #d1b957 appear in the background list with zero area weight and are not used as tokens. No border colours were measured.

## Typography

A single family: **Roboto** (weight 400 only, 2,861 characters), with "Noto Sans Thai" in the stack for Thai text and system fallbacks and emoji fonts after it. The stylesheet also declares Roboto Condensed. Roboto and Noto Sans Thai are open-source Google Fonts families.

- **Display (h1):** Roboto 46px / 48.3px, weight 400, letter spacing -0.46px, uppercase; mobile 36px / 37.8px, -0.36px.
- **Heading (h2 "EDITOR'S PICK"):** 36px / 37.8px, weight 400, -0.36px, uppercase; mobile 28px / 29.4px.
- **Subheading (h3 card titles and links):** 20px / 21px, weight 400, letter spacing -0.4px, uppercase.
- **Body:** 18px / 22.5px, weight 400, letter spacing -0.18px.
- **Nav links and body role:** 16px / 20px, weight 400, letter spacing -0.16px, uppercase.

By character count: 18px (1,505), 20px (503), 16px (362), 46px (314), 12px (107), 36px (70). All characters use weight 400. Every size has negative letter spacing (about -1% to -2% of size). Almost everything is uppercase.

## Layout

The header is a full-width bar with the logo at the left and nav spread across the rest; the first screen is 720px tall. Content is a two-column editorial layout: text and headline on the left half, a large photograph bleeding to the right edge. Cards sit in a three-column row with gaps of 20px (the most frequent gap, 20 uses), then 60px (14), 16px (14), 8px (12), 40px (12), 24px and 12px. Paddings: 16px (19 uses), 8px (15), 20px (12), 3.2px (12), 42px (11), 12px (10), 40px (9), 9.2px (8). Card titles have padding 16px 104px 16px 16px.

## Elevation & Depth

None measured: `boxShadows` is empty and `borderColors` is empty. Depth comes from photography only. The stylesheet has carousel and lightbox focus shadows (`--yarl__*`) from a gallery component and Tailwind ring variables; they are not applied to visible brand elements.

## Shapes

`borderRadii` is empty: every rendered element computes a 0px radius, so cards, images and links are square. This is recorded as `rounded.none: 0px`. The stylesheet corpus lists 2px and 9999px once each, but no rendered element uses them.

## Components

- **Navigation link.** Roboto 400 uppercase in #030305, hover colour #d0b857, 80px row height.
- **Text link (DISCOVER MORE).** Roboto 20px / 21px, uppercase, -0.4px tracking, #030305, padding 8px 0px, 148px wide and 37px tall; no fill and no border.
- **Boutique card.** Borderless photograph, a small category label and floor label on one line, a two-line uppercase title (20px) and an ellipsis for long titles; the card body is a slightly darker tint than the page in the capture.
- **Carousel dots.** Small dots at the bottom right of large photographs.
- **Footer.** Dark #030305 with #f2f5f5 text.

No filled button, input or card shape was detected by the extractor (`ctaCandidates` empty).

## Design System Architecture

No public design system or brand guideline is linked on the page; the page was opened and none appears, and no search was run. The system is de-facto and very small: one family at one weight, a pale canvas, near-black ink, a gold hover accent, zero radius and no shadows. The root contains Tailwind ring variables and `--motion-*` animation variables (for example `--motion-origin-opacity`, `--motion-end-opacity`), which indicate scripted entrance animations that explain the blank hero block in the capture.

## Do's and Don'ts

- Do set everything in Roboto 400 uppercase with slightly negative tracking.
- Do use #f2f5f5 as the page colour and #030305 for text.
- Do use #d0b857 gold for hover states on navigation.
- Do keep corners square and avoid shadows; let photography supply richness.
- Do present links as plain uppercase words rather than filled buttons.
- Don't add bold weights; only 400 was measured.
- Don't use the lightbox focus shadows (`--yarl__*`) or Tailwind ring blue as brand styling.

## Responsive Behavior

The mobile pass measured: h1 36px / 37.8px (desktop 46px / 48.3px), h2 28px / 29.4px (desktop 36px / 37.8px), body 18px / 22.5px, nav role at 36px / 37.8px, and no primary CTA. Character counts by size on mobile: 18px (979), 16px (418), 20px (384), 28px (197), 36px (146), 12px (107). Menu behaviour and column stacking were not measured.

## Iteration Guide

1. Canvas #f2f5f5, ink #030305, Roboto 400 uppercase with negative tracking.
2. Large photographs bleeding off the right edge; headline at 46px/48.3px.
3. Boutique cards: image, category and floor label, 20px uppercase title.
4. Gold #d0b857 only for hover; no fills, no shadows, 0px radius.
5. Run `node web/scripts/verify-designs.mjs --slug=siam-paragon` after edits.
