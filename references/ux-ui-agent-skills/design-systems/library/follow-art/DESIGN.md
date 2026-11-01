---
version: alpha
name: "FOLLOW.ART"
category: "Tech & AI"
description: "FOLLOW.ART (follow.art) is a creative-practice card platform for artists and curators: full-bleed flat color fields in orange #f4793a, green #8e9487, pink #c5939d and blue #8498ac, white type, a giant uppercase Hardbop wordmark at 199.89px and HeadingNow for all reading text, with no rounded corners measured."
colors:
  canvas: "#000000"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#ffffff"
  surface: "#8e9487"
  surface-2: "#c5939d"
  surface-3: "#f4793a"
  ink-2: "#ffffff99"
  hairline: "#ffffff4d"
typography:
  display:
    fontFamily: HeadingNow, Helvetica, Arial, sans-serif
    fontSize: 12.1334px
    fontWeight: 400
    lineHeight: 14.9334px
    letterSpacing: "-0.364002px"
  display-mobile:
    fontFamily: HeadingNow, Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: "-0.36px"
  heading:
    fontFamily: Hardbop, Helvetica, Arial, sans-serif
    fontSize: 199.89px
    fontWeight: 700
    lineHeight: 157.808px
    textTransform: uppercase
  body:
    fontFamily: HeadingNow, Helvetica, Arial, sans-serif
    fontSize: 24.2668px
    fontWeight: 400
    lineHeight: 28.0001px
    letterSpacing: "-0.728003px"
rounded:
  none: 0px
spacing:
  s1: 8px
  s2: 8px
  s3: 8.89px
  s4: 10.67px
  s5: 17.78px
  s6: 21.33px
  s7: 35.55px
  s8: 71.11px
components:
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.display}"
  nav:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.page-body}"
    padding: 0px 17.7766px
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.display}"
---

# FOLLOW.ART

Measured from https://follow.art/ (page title "FOLLOW.ART | Your Creative Practice in One Card", lang en). The direct fetch of the page by the research tool was refused with HTTP 403 (recorded verbatim in SOURCES.json), so every statement below comes from the extractor's measurements of the live page and its capture, not from reading the page text through another tool. Consent overlays on the page were detected and hidden by the extractor (`consentOverlaysHidden`) and are not documented as brand UI.

## Overview

The capture shows an orange page whose top area is filled by the wordmark "FOLLOW.ART" set in huge white Hardbop capitals, spanning the full width. Below it a ring of tilted black profile cards rotates in 3D: each card shows a person's name in large white type, a role and city (for example "Artist" with "US, Brooklyn", "Curator" with "GB, London", "Artist" with "LT, Kaunas"), a small "Support Me" white label, a portrait photograph and an "Add to Apple Wallet" badge. At the bottom of the first screen the text reads "One Card. Share it. Be noticed. Be supported". The header carries the line "One Practice. One Card" and the navigation items About, Our Product, Community Board, Pricing, FAQ, Login and Join. The extracted body copy includes "Join 4K+ members. Explore practices, find collaborators, and..." and a heading that reads "CURATORS AND ARTISTS".

The tone is direct and community-minded: short sentences ending in full stops, first-person verbs (Join, Explore, Share), and an art-world audience. Visually the site behaves like a poster: huge type, saturated flat fields and a single hero object, the card.

## Colors

The page declares a set of named root variables: `--c-orange` #f4793a, `--c-green` #8e9487, `--c-pink` #c5939d, `--c-blue` #8498ac, `--c-black` #000, `--c-white` #fff, `--c-grey` #9c9c9c and `--c-error` #ea1b4f, plus translucent whites and blacks (`--c-white-60`, `--c-white-30`, `--c-white-20`, `--c-white-10`, `--c-black-60`, `--c-black-20`, `--c-black-15`, `--c-black-3`) and `--c-gray-popup-bg` rgba(80,80,80,.5).

Measured background areas by weight: green #8e9487 (10174), pink #c5939d (6783), orange #f4793a (6281), blue #8498ac (3391) and black #000000 (100). Text colors by characters: white #ffffff (1524), white at 60% opacity #ffffff99 (280) and black #000000 (136). The one measured border color is #ffffff4d.

- **canvas #000000**: the black card and dark surface; **page-body #ffffff** is the body background the extractor read.
- **ink / primary #ffffff**: the text and the action color; no filled button was detected, so primary is the white used on links and labels.
- **surface #8e9487, surface-2 #c5939d, surface-3 #f4793a**: the full-width section fields. The header bar is filled with #f4793a (surface-3).
- **ink-2 #ffffff99**: secondary text on color fields.
- **hairline #ffffff4d**: the thin rule under the header.

The error red #ea1b4f is declared in the root variables but did not appear in the measured render; it is not tokenized.

## Typography

Two loaded fonts: HeadingNow (weight 400) and Hardbop (weight 700). HeadingNow carries 1836 characters, Hardbop 104. Both are commercial or licensed faces; Helvetica and Arial are the fallbacks declared in the font stack, and a condensed heavy grotesque would be the closest free stand-in for Hardbop only where the typeface is unavailable.

- **display**: HeadingNow 12.1334px, weight 400, line-height 14.9334px, letter-spacing -0.364002px. Header labels and links.
- **display-mobile**: HeadingNow 12px, weight 400, line-height 16px, letter-spacing -0.36px, measured on the mobile pass.
- **heading**: Hardbop 199.89px, weight 700, line-height 157.808px, uppercase. The "CURATORS AND ARTISTS" heading measures this on desktop. Other measured sizes of the same face are 239.868px and 212.801px.
- **body**: HeadingNow 24.2668px, weight 400, line-height 28.0001px, letter-spacing -0.728003px. This is the most common size (747 characters).

Other measured sizes: 12.1334px (602 characters), 18.6668px (467) and 14.9334px (20). Tracking is negative at every HeadingNow size (about -3% of the size). The wordmark's line-height (157.808px) is smaller than its font size (199.89px), so lines of the giant type sit tightly against each other.

## Layout

The page scroll height in the measurement window is 2400px with an inner scroller of 7555px. The header is 53px high with horizontal padding 17.7766px. Measured gaps are 8.88832px (24 uses), 17.7766px (16), 35.5533px (4) and 21.332px (2). The spacing tokens record 8px, 8.89px, 10.67px, 17.78px, 21.33px, 35.55px and 71.11px. Sizes are expressed through a `--scale-px` multiplier visible in the root variable `--promo-header-height`, so the layout scales with viewport width, and the root also defines `--sign-up-width` 192.875px and `--sign-up-height` 71.09375px for the sign-up control.

Sections are full-bleed color fields with the content aligned to a narrow left margin; the wordmark spans the full viewport width.

## Elevation & Depth

No box shadows were measured. Depth is geometric: the cards are rendered in 3D perspective on a ring, with a darker orange shadow-like plane behind each card visible in the capture. This is image or canvas rendering, not CSS shadow tokens. The only flat layering token is the translucent popup background `--c-gray-popup-bg`, which belongs to a popup and is not brand UI.

## Shapes

No border radius was measured on any element (the radii frequency list is empty), so the interface is made of hard rectangles. The cards in the hero appear as sharp-cornered black rectangles in the capture. The "Support Me" and Wallet badges are small images or labels within the cards. The one border is a #ffffff4d hairline (4 uses).

## Components

- **nav**: a header 53px high filled #f4793a, white 12.1334px HeadingNow text, padding 0px 17.7766px. It contains the brand lockup "FOLLOW. ART" with the line "One Practice. One Card", the center items About, Our Product, Community Board, Pricing, FAQ and the right-hand items Login and Join. The active item "About" shows a black blob-shaped highlight behind the label in the capture.
- **link / nav-link**: white, 12.1334px, weight 400, letter-spacing -0.364002px.
- **profile card**: black #000000 surface with a 24px-scale name in white, a grey role line (#ffffff99), a portrait photo and a white "Support Me" label. Its exact padding and size were not measured.

No filled button, input or footer was detected by the extractor.

## Design System Architecture

No public design system or brand guideline is documented: the page could not be opened through the research tool (HTTP 403), and the measured stylesheet shows no published token package. The de-facto system is the root custom properties: a `--c-*` color palette (white, black, orange, pink, blue, green, grey, error, with opacity steps), layout variables `--sign-up-width`, `--sign-up-height`, `--promo-header-height` and cookie height variables, and a `--scale-px` unit that scales spacing. Source page: https://follow.art/ (measured, not fetched).

## Do's and Don'ts

- Do fill each section with one flat saturated color from the palette: #f4793a, #8e9487, #c5939d or #8498ac.
- Do set the wordmark and section headings in Hardbop uppercase at poster scale (about 200px on desktop as measured).
- Do keep body copy in HeadingNow with negative tracking.
- Do use black #000000 for the card objects so they read against colored fields.
- Don't round corners; none are measured.
- Don't add shadows; none are measured.
- Don't document the cookie or consent overlay as a component.

## Responsive Behavior

The mobile pass recorded: the header text 12px with line-height 16px and letter-spacing -0.36px; the Hardbop h2 at 143px with line-height 110px; body text at 21px with line-height 25px and letter-spacing -0.63px; the header fill remained #f4793a and the header contained "FOLLOW. ART" and "One Practice. One Card". Mobile size frequencies: 21px (748 characters), 12px (552), 16px (487), 143px (104). Which navigation items appear on mobile, and any breakpoints, were not measured beyond these figures.

## Iteration Guide

1. Choose one field color (#f4793a, #8e9487, #c5939d or #8498ac) per section and set text in white #ffffff.
2. Set the section title in Hardbop 700 uppercase, 199.89px on desktop with line-height 157.808px.
3. Use HeadingNow 24.2668px with -0.728003px tracking for supporting sentences and 12.1334px for navigation.
4. Present people or work as black cards with a photo, role and city.
5. Keep the geometry hard: radius 0px, no shadow.
6. Measure any new page with the extractor before adding tokens.
