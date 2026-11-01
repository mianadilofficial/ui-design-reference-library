---
version: alpha
name: HUGO BOSS
category: "Fashion & Apparel"
description: "HUGO BOSS US online shop (hugoboss.com/us/home) measured: full-bleed campaign photography under a translucent #edededcc pill-cornered nav bar, AvertaPE sans in uppercase 800-weight headlines (54px HIGHLIGHTS, 24px hero), 15px weight-100 body text, a near-black #1c1c1c footer, and no shadows."
colors:
  canvas: "#f9f9f9"
  page-largest: "#ffffff"
  ink: "#000000"
  primary: "#ffffff"
  surface-grey: "#cccccc"
  ink-secondary: "#666666"
  ink-footer: "#1a1a1a"
  ink-tertiary: "#4a4a4a"
  nav-bg: "#edededcc"
  footer-bg: "#1c1c1c"
typography:
  display:
    fontFamily: AvertaPE, sans-serif
    fontSize: 24px
    fontWeight: 800
    lineHeight: 31px
    textTransform: uppercase
  display-mobile:
    fontFamily: AvertaPE, sans-serif
    fontSize: 16px
    fontWeight: 800
    lineHeight: 16px
    textTransform: uppercase
  heading:
    fontFamily: AvertaPE, sans-serif
    fontSize: 54px
    fontWeight: 800
    lineHeight: 61px
    textTransform: uppercase
  body:
    fontFamily: AvertaPE, sans-serif
    fontSize: 15px
    fontWeight: 100
    lineHeight: 24px
  nav:
    fontFamily: AvertaPE, sans-serif
    fontSize: 16px
    fontWeight: 400
  link:
    fontFamily: AvertaPE, sans-serif
    fontSize: 16px
    fontWeight: 700
    letterSpacing: 1px
rounded:
  xs: 8px
  sm: 12px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 14px
  s7: 16px
  s8: 24px
  s9: 28px
  s10: 30px
components:
  link:
    textColor: "{colors.page-largest}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 24px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink-footer}"
    transform: matrix(1, 0, 0, 1, 0, 0)
---

## Overview

The measured page is the US storefront home (final URL https://www.hugoboss.com/us/home, title "HUGO BOSS Official Online Shop | Menswear & Womenswear"). It is an editorial fashion store: the first screen is a full-bleed campaign film still (a man on a park bench with a spaniel) captioned "NEW: BOSS BY BECKHAM" with two underlined text links, "Shop now" and "Be inspired". Beneath it a two-panel split shows "FRESH FOR FALL" (Men) and "THE LATEST ARRIVALS" (Women), then a "HIGHLIGHTS" carousel of tall portrait photos labelled "BOSS BRAND LINES" and "RED MEANS GO", then an "ALL-NEW FAVORITES" product row with MEN / WOMEN tabs on a white ground.

Imagery carries the brand. Photography is warm, low-saturation and cinematic (browns, olive, burgundy), models are shot in real locations (hedge garden, train carriage, car park), and the interface stays out of the way: white-on-image uppercase captions, thin underlined links, no boxes, no gradients and no shadows (the box-shadow list in the extraction is empty). Copy is short and imperative, set in capitals for campaign titles. Navigation labels are plain words (Men, Women, Kids, Gifts, Discover), and the footer opens with a loyalty invitation rather than a legal block, which keeps the brand voice confident and brief across the whole first scroll of the page.

## Colors

The palette is neutral because photography supplies colour.

- **Canvas** `#f9f9f9` is the detected page canvas; the largest background by area is white `#ffffff` (5840 weighted units), followed by mid grey `#cccccc` (2633), black `#000000` (2304), footer `#1c1c1c` (1792) and light grey `#f6f6f6` (1426).
- **Ink** is `#000000`, by far the most-read text colour (1352 characters). Supporting greys: `#666666` (209), `#4a4a4a` (37) and `#1a1a1a` (84, the text color measured inside the footer). White `#ffffff` text (197) sits on photography.
- **Primary** is recorded as `#ffffff`: the only action-like element the extractor found was the white "Shop now" link over the hero image, so no filled button exists in the capture. No black or coloured button fill was measured, so none is documented here.
- **Navigation surface** is a translucent grey `#edededcc`, so the page photo shows through the floating header.
- **Footer** is `#1c1c1c`.
- The Swiper carousel declares `--swiper-theme-color` as a root variable, the only third-party colour hook measured; it is not a brand colour.

## Typography

The whole interface uses one family, **AvertaPE** (with a generic sans-serif fallback), self-loaded at weights 100, 300, 400, 700 and 900 (the extraction records "AvertaPE 100/300/400/700/900 normal"). Arial appears on 12 characters only.

| Role | Measured | Notes |
|---|---|---|
| Hero caption (display) | 24px / 800 / 31px, uppercase, white | "NEW: BOSS BY BECKHAM"; 16px / 800 / 16px at 390px |
| Section heading (h2) | 54px / 800 / 61px, uppercase | "HIGHLIGHTS"; 28px / 800 / 40px at 390px |
| Body | 15px / 100 / 24px | weight 100 is what the page computes for paragraph copy; 14px / 100 / 22px on mobile |
| Nav | 16px / 400 | links Men, Women, Kids, Gifts, Discover |
| Link | 16px / 700, letter-spacing 1px | "Shop now" |

Weight usage by characters: 100 (838), 400 (627), 700 (311), 800 (63), 300 (20), 900 (20). The contrast is deliberate: huge heavy capitals for titles and very light running text. Font sizes by characters: 16px (765), 15px (713), 12px (183), 24px (109), 14px (79), 28px (20), 54px (10).

## Layout

The desktop pass is 1280px wide and 4698px tall. The header is 64px high and floats over the hero with inset margins and rounded corners; logo "HUGO BOSS" left, five links centred-left (each link has 0 24px horizontal padding), and search, account, wishlist and bag icons right. The hero is full width. The category panels are two equal halves. The HIGHLIGHTS section's h2 has a left padding of 96px (18px on mobile) and the carousel runs off both page edges, with several cards visible at once. Product rows sit on white with the product shot on a faint grey. Spacing values measured: 3, 4, 6, 8, 10, 14, 16, 24, 28 and 30px.

## Elevation & Depth

The page is flat. Nothing in the extraction suggests layered surfaces, elevation scales or card lifts, and the measured shadow list is empty, so nothing about shadows should be added when reproducing the page.

None. No box shadows were measured on the page and the only border color recorded is white (`#ffffff`, 3 elements). Depth comes from photography, from the translucent nav (`#edededcc`) over the image, and from the full-bleed dark footer.

## Shapes

The measured border radii are minimal: 50% (2 elements, circular controls such as the carousel pause button), 8px (1 element) and `12px 12px 12px 0px` (1 element, a speech-bubble shaped assistant control, not brand UI). Product and campaign images are rectangular with square corners; the nav bar in the capture has softly rounded corners, but the extraction lists only the values above, so the exact nav radius is not asserted. The generated tokens keep `xs` 8px, `sm` 12px and `pill`.

## Components

- **Floating header**: 64px, `#edededcc` background, black 16px links with underline and a faint `rgba(0,0,0,0.024)` fill on hover (measured on "Men").
- **Hero text link**: white, 16px, weight 700, 1px letter-spacing, underlined; height 40px.
- **Campaign tile**: full-bleed photo with an uppercase 24px caption bottom-left or right and a small underlined link below ("Men", "Women").
- **Carousel card**: tall portrait image with a small uppercase white label ("BOSS BRAND LINES").
- **Tabs**: MEN / WOMEN in small uppercase with an underline on the active tab.
- **Footer**: `#1c1c1c`, 1400px tall, opens with a "Join HUGO BOSS XP" sign-up message (loyalty programme) followed by link columns.

## Design System Architecture

No public design-system or brand-guideline site was reachable: fetching https://www.hugoboss.com/us/home returned HTTP 403 Forbidden, so no link to such a resource could be read, and none is asserted. The de-facto system seen in the shipped CSS is small: five root custom properties (`--documentInnerHeight`, `--headerTotalHeight`, `--headerContentHeight`, `--swiper-theme-color`, `--swiper-navigation-size`), a single family AvertaPE, and Swiper for carousels. Colours are plain hex values rather than variables, which fits a system where layout metrics (header heights) are the only shared tokens.

## Do's and Don'ts

- Do let photography lead; keep surfaces white, black or `#1c1c1c`.
- Do set campaign titles in AvertaPE 800 uppercase and body text light (weight 100, 15px).
- Do use white underlined links over images and black text on white.
- Don't add shadows, gradients or coloured buttons; none were measured.
- Don't use rounded buttons: only 8px and 50% radii appear, and 50% is for circular icon controls.
- Don't document the cookie, chat or accessibility widgets as brand UI.

## Responsive Behavior

Measured at 390px: the hero caption falls from 24px to 16px, the h2 from 54px to 28px (padding 0 130px 3px 18px), body from 15px to 14px with 22px line-height, nav text to 12px / 400 with line-height 15px, header height 56px. The most-used sizes on mobile are 14px (878), 16px (351), 12px (203). Grid column counts, menu behavior and breakpoints were not measured. No mobile primary button was detected.

## Iteration Guide

1. Choose a high-quality location photograph first; set the caption in AvertaPE 800 uppercase, white.
2. Use `canvas` #f9f9f9 or white sections between photo bands and black text.
3. Keep body copy at 15px, weight 100, line-height 24px; keep headings at 54px/800 on desktop.
4. Link style: 16px, weight 700, 1px letter-spacing, underlined.
5. End with a `#1c1c1c` footer and a loyalty sign-up message.
6. Do not add values that are not in the frontmatter; mobile behaviors beyond those listed are not measured.
