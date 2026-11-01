---
version: alpha
name: "Freshman"
category: "Fashion & Apparel"
description: "Freshman (freshman.tv) is an award-winning production company site: a full-viewport dark reel on #101010 and #000000 with a giant white italic \"freshman\" wordmark, Editorial New at weight 200 for statements, Altform bold uppercase for client names, the handwritten Wasted Year face for tags, and red #ff2936."
colors:
  canvas: "#101010"
  ink: "#ffffff"
  primary: "#ffffff"
  black: "#000000"
  red: "#ff2936"
  css-grey: "#a4a49c"
  css-cream: "#f3f1e7"
  css-blush: "#f5e1e2"
  css-teal: "#264b48"
typography:
  display:
    fontFamily: "\"Editorial New\", sans-serif"
    fontSize: 17.7778px
    fontWeight: 200
    lineHeight: 22.2222px
    letterSpacing: "-0.177778px"
  display-mobile:
    fontFamily: "\"Editorial New\", sans-serif"
    fontSize: 16.64px
    fontWeight: 200
    lineHeight: 16.64px
    letterSpacing: "-0.1664px"
    textTransform: uppercase
  body:
    fontFamily: "\"Wasted Year\", sans-serif"
    fontSize: 12.4444px
    fontWeight: 400
    lineHeight: 10.6667px
  nav:
    fontFamily: "\"Editorial New\", sans-serif"
    fontSize: 14.2222px
    fontWeight: 200
    lineHeight: 14.2222px
    letterSpacing: "-0.142222px"
    textTransform: uppercase
  link:
    fontFamily: Altform, sans-serif
    fontSize: 14.2222px
    fontWeight: 700
    lineHeight: 12.4444px
    letterSpacing: "-0.426667px"
    textTransform: uppercase
rounded:
  pill: 9999px
spacing:
  s1: 3.56px
  s2: 4.44px
  s3: 6.22px
  s4: 7.11px
  s5: 10.67px
  s6: 17.78px
  s7: 19.56px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
    padding: 19.5556px 18.6667px 17.7778px 17.7778px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
---

# Freshman

Measured from https://freshman.tv/ (page title "Freshman | Award-Winning Production Company", lang en). The home page is a single full-viewport screen: scrollHeight is 800px in a 1280px-wide window, and the extraction counted 199 visible elements. The research fetch of the page returned no content (the page is rendered by script), so everything below comes from the extractor's measurements and the capture, not from a separate reading of the page text.

## Overview

The capture is a full-bleed moving-image reel (an overhead shot of a skateboarder on a pedestrian crossing) darkened by an overlay, with a giant white italic wordmark "freshman" and a registered mark in the center. Under it, a two-line statement in a light serif reads "Freshman is an award-winning production company that creates high-impact content that's impossible to ignore." and below that a handwritten tag "[Real Always Wins]". At the top left is a small hash-like logo mark and at the top right "+ MENU". Along the bottom, a ticker of recent projects is framed by dotted horizontal rules: FORD "LET'S MAKE A DIFFERENCE", THE NORTH FACE "HAPPY CAMPERS", KIA "LIGHTNING BUGS", ROLLING STONES "THE ROLLING STONES & SPEAQUA", and a link measured as "AUDI ALL YOU ARE". Each ticker entry pairs a small still thumbnail with a bold uppercase client name and a lighter uppercase campaign title. The footer line reads "2026" with a registered mark.

The identity is that of a film and advertising production house: moving footage is the hero, the wordmark is immense, and every other element is tiny and typographic. The register is confident and short; the slogan is a bracketed phrase in a hand-lettered face.

## Colors

Measured background areas: #101010 (weight 2048), #000000 (1024) and #ff2936 (1024). The only measured text color is white #ffffff (651 characters). The root variables are written as unresolved Sass references (`--color-green: $color-green`, `--color-salmon: $color-salmon`, `--color-sand: $color-sand`, `--color-outline: $color-outline`, `--color-red: $color-red`, `--color-black: $color-black`) with `--header-color` #ffffff, so the root does not give values for the named colors. The stylesheet itself contains these colors by count: #101010 (11), #a4a49c (7), #ffffff (7), #ff2936 (4), #f3f1e7 (3), #f5e1e2 (3), #000000 (2), #264b48 (1) and translucent #10101033 and #10101080.

- **canvas #101010**: the dark page ground.
- **ink and primary #ffffff**: all measured text; no filled button exists, so white is also the action color.
- **black #000000** and **red #ff2936**: measured large background areas (each 1024 weight); the red is the only saturated color measured.
- **css-grey #a4a49c, css-cream #f3f1e7, css-blush #f5e1e2, css-teal #264b48**: colors present in the stylesheet but not seen in the rendered first screen. They are listed because they are in the shipped CSS; their role is not measured, and the names reflect only their appearance, not a documented mapping to the Sass variables.

## Typography

Four faces are loaded: Altform (400, 700), Editorial New (400 loaded; weight 200 used by the measured elements) and Wasted Year (400). By characters: Editorial New 401, Altform 226, Wasted Year 24. Altform and Editorial New are commercial typefaces; Wasted Year is a handwritten display face. Substitutes, where they are not licensed, are a generic bold grotesque for Altform, a light high-contrast serif for Editorial New and any handwriting face for Wasted Year.

- **display**: Editorial New 17.7778px, weight 200, line-height 22.2222px, letter-spacing -0.177778px: the two-line company statement.
- **display-mobile**: Editorial New 16.64px, weight 200, line-height 16.64px, letter-spacing -0.1664px, uppercase.
- **nav**: Editorial New 14.2222px, weight 200, line-height 14.2222px, letter-spacing -0.142222px, uppercase.
- **link**: Altform 14.2222px, weight 700, line-height 12.4444px, letter-spacing -0.426667px, uppercase: client names in the ticker.
- **body**: Wasted Year 12.4444px, weight 400, line-height 10.6667px: the bracketed tag "[Real Always Wins]".

Size frequencies: 14.2222px (518 characters), 17.7778px (109), 12.4444px (18), 10.6667px (5), 15.1111px (1; the "MENU" label in Wasted Year). The letter-spacing is -1% of the size on the light serif and -3% on the bold grotesque. The giant "freshman" wordmark is an image or SVG: no text element of that size was measured.

## Layout

The page is one 1280px by 800px screen with edge-to-edge media. The header is 64px high with padding 19.5556px 18.6667px 17.7778px 17.7778px; the logo sits at the left, the menu control at the right. The centered block holds the wordmark, statement and tag; the project ticker runs along the bottom between two dotted rules. Gaps measured: 10.6667px (45 uses) and 3.55556px (44); paddings 7.11111px and 3.55556px (22 each), 17.7778px (2), 19.5556px and 4.44444px (1 each). The spacing tokens are 3.56px, 4.44px, 6.22px, 7.11px, 10.67px, 17.78px and 19.56px.

## Elevation & Depth

No box shadows were measured. Depth comes from the video background under a dark overlay, with white type above it; the project thumbnails in the ticker are small flat stills. The dotted rules at the top and bottom of the ticker are drawn lines; no border color was measured on elements, so their color and weight are not tokenized.

## Shapes

Only one radius was measured: 50% on a single element (a round marker). Everything else is square: the thumbnails, the header and text elements have 0px radius. The token `pill: 9999px` represents that circular element. The visual shape language is typographic: an italic bold wordmark with a registered mark, a hash-style logo and bracketed text.

## Components

- **nav**: a header with the logo mark at left and "+ MENU" at right; Wasted Year 15.1111px for "MENU" on desktop, Editorial New 14.2222px uppercase for nav links.
- **link (project ticker entry)**: Altform bold 14.2222px uppercase client name (for example "AUDI") above a lighter campaign title ("ALL YOU ARE"), height 53px, width 188px, white text.
- **statement**: the centered two-line Editorial New 17.7778px paragraph.
- **tag**: "[Real Always Wins]" in Wasted Year 12.4444px, centered.

No button, input, card or footer role was detected.

## Design System Architecture

No public design system or brand guideline exists on the page as measured; the research fetch returned no readable content. The shipped CSS shows a Sass-based setup: named color variables (`--color-gray`, `--color-green`, `--color-white`, `--color-salmon`, `--color-sand`, `--color-outline`, `--color-red`, `--color-black`) whose values are unresolved Sass references like `$color-green`, a `--header-color` custom property (#ffffff) and four font files. Source page: https://freshman.tv/ (measured).

## Do's and Don'ts

- Do let moving footage fill the viewport under a dark overlay.
- Do set statements in Editorial New at weight 200 with -1% tracking, and client names in Altform bold uppercase with -3% tracking.
- Do use the handwritten Wasted Year face for bracketed tags only.
- Do keep type small beside the giant wordmark and keep text white #ffffff.
- Don't add buttons, shadows or rounded corners; none are measured.
- Don't promote the stylesheet-only colors into the interface without measuring them.
- Don't center-align the project ticker; entries run left to right.

## Responsive Behavior

The mobile pass recorded: the "MENU" label at 16.64px in Editorial New weight 200 with line-height 16.64px and -0.1664px tracking, uppercase; the company statement at 16.64px with line-height 20.8px; the tag at 14.56px with line-height 12.48px; and the header text at 17.68px in Wasted Year. Mobile size frequencies: 16.64px (627 characters), 14.56px (23), 17.68px (1). Layout changes, ticker behavior and breakpoints were not measured.

## Iteration Guide

1. Start from canvas #101010 with a full-bleed reel and a dark overlay.
2. Place a giant white italic wordmark in the center and a single Editorial New 200 statement under it.
3. Add a handwritten bracketed tag in Wasted Year at 12.4444px.
4. Run a bottom ticker of client work: thumbnail, bold uppercase client name, lighter campaign title.
5. Keep corners square and shadows absent; use red #ff2936 sparingly.
6. Measure any new page with the extractor before adding tokens.
