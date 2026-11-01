---
version: alpha
name: "HARIBO"
category: "Food & Beverage"
description: "HARIBO international home page measured live: flat brand red #d8232a, blue #005ca9 and green #78be21 on white, VAG Rounded at 53px bold display and 17.3px light body, pill navigation and 26px-radius controls with blob-shaped photography."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#d8232a"
  on-primary: "#ffffff"
  accent-yellow: "#ffeb06"
  brand-green: "#78be21"
  brand-blue: "#005ca9"
  brand-red: "#d8232a"
  text-input-bg: "#ffffff33"
typography:
  display:
    fontFamily: "\"VAG Rounded\", sans-serif"
    fontSize: 53px
    fontWeight: 700
    lineHeight: 66.25px
  display-mobile:
    fontFamily: "\"VAG Rounded\", sans-serif"
    fontSize: 32.3256px
    fontWeight: 700
    lineHeight: 40.9457px
  heading:
    fontFamily: "\"VAG Rounded\", sans-serif"
    fontSize: 31.2px
    fontWeight: 700
    lineHeight: 42px
  body:
    fontFamily: "\"VAG Rounded\", sans-serif"
    fontSize: 17.3px
    fontWeight: 300
    lineHeight: 25.95px
  nav:
    fontFamily: "\"VAG Rounded\", sans-serif"
    fontSize: 23.9px
    fontWeight: 700
    lineHeight: 35.85px
  link:
    fontFamily: "\"VAG Rounded\", sans-serif"
    fontSize: 26.5px
    fontWeight: 700
    lineHeight: 39.75px
  input:
    fontFamily: "\"VAG Rounded\", sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 23px
rounded:
  xs: 13px
  sm: 15px
  md: 26px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 10px
  s4: 11.5px
  s5: 12px
  s6: 15px
  s7: 18.91px
  s8: 20px
  s9: 22.8px
  s10: 25px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.brand-red}"
    transform: matrix(1, 0, 0, 1, 0, 132)
  nav-link:
    textColor: "{colors.brand-red}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 0px 50px 0px 25px
    height: 52px
    borderColor: "{colors.brand-blue}"
  footer:
    textColor: "{colors.canvas}"
---

# HARIBO

## Overview

The measured page is haribo.com/en, the international English home page of HARIBO, titled "HARIBO international: no. 1 in fruit gummies worldwide". It is a bright, rounded, confectionery brand page built on three flat brand colors, red (#d8232a), blue (#005ca9) and green (#78be21), over white, with a gold hero carousel ("Which Goldbear suits your spirit?" with a "Start the quiz" link and a large red gummy bear in a glowing arch). The header is a white rounded pill holding the links Products, Ideas and About Us plus a search icon, with a small "Career / Contact" pill above it, the red outlined HARIBO wordmark at the left and a yellow Goldbear mascot at the right. Below the hero come three story cards with organic blob-shaped photographs (global favorites, the success story, back to school), a full-width red panel with a world-map video ("Happiness worldwide"), and a blue "Questions? We are happy to help!" section. The extracted page height is 4678px at a 1280px viewport.

The tone is warm and upbeat, using exclamation marks and direct address, as the fetched page confirms: "Which Goldbear suits your spirit?", "Colourful career opportunities!", "Back to School with HARIBO!", "Kids and grown-ups love it so." Navigation entries include Products (HARIBO, MAOAM), Ideas (Recipes, Back to School) and About Us (Quality, Production, History), with a footer covering Corporate responsibility, Whistleblowing System, Travel retail, Imprint, Privacy, Terms of use and Code of conduct. Numbers are used playfully ("160 million", "Global Top 10").

Calls to action use a distinctive device: a small red hand-drawn squiggle arrow at the left of a bold black label ("All favorites", "Read more", "Explore now"). The capture also shows a blue country-selector banner across the top ("The page you are viewing does not match your location") and the page was measured with the cookie-consent underlay hidden. The banner is a utility notice and neither it nor the consent dialog is documented as brand UI.

## Colors

- `canvas` #ffffff is the page background (largest area, 5148). `ink` #000000 is body text.
- `primary` #d8232a is HARIBO red: panels, links, the squiggle arrows, wordmark and nav text. The generator picked a yellow, #ffeb06, as the primary because no button was detected; that yellow is only the small text color of the hero's "Start the quiz" link, so it is kept as `accent-yellow` and the red is the primary brand color. `on-primary` #ffffff is the white used on red and blue panels (white is the most-used text color on the page, 766).
- `brand-blue` #005ca9 fills the blue panels and colors the card headlines (measured both as background, 1073, and as text, 179); `#004b87` is a darker blue used for a small number of fills.
- `brand-red` #d8232a duplicates the primary under its brand name and is the color used for the navigation text; `brand-green` #78be21 fills green panels and the illustration backdrop of the back-to-school card.
- `text-input-bg` #ffffff33 is the 20%-alpha white fill of the search input on the blue banner.

The browser default link color #0000ee appeared in the raw measurement (92 characters, from unstyled links) and is not a brand color; it was dropped.

## Typography

One family: VAG Rounded, loaded at weights 300 and 700, with a generic sans-serif fallback. Weight 400 also appears in the measurement (286 characters).

- `display` 53px weight 700, line height 66.25px (`display-mobile` 32.3256px with line height 40.9457px).
- `heading` 31.2px weight 700, line height 42px (card headlines in blue).
- `body` 17.3px weight 300, line height 25.95px.
- `nav` 23.9px weight 700, line height 35.85px; `link` 26.5px weight 700, line height 39.75px (the arrow-link labels).
- `input` 20px weight 700, line height 23px.

The largest measured size is 106px (the "160 million"-style numerals). Body copy is light (300), headings and links bold (700), producing a friendly rounded rhythm. VAG Rounded is a commercial typeface; use a rounded geometric sans with light and bold weights as a substitute.

## Layout

Sections are centered content blocks with generous vertical space: a full-bleed hero carousel with side arrows and pill pagination dots; a three-up card row; a half-and-half red panel and video; a blue help section. Spacing measured: 4, 5, 10, 11.5, 12, 15, 18.91, 20, 22.8 and 25px (`s1`-`s10`). The text input has padding 0px 50px 0px 25px at height 52px. The nav component carries a translateY of 132px in the measurement (`matrix(1, 0, 0, 1, 0, 132)`), recorded as measured.

## Elevation & Depth

Little elevation. Two shadows were measured: `rgba(0, 0, 0, 0.22) 0px 1px 6px 0px` (used twice) and a zero-offset `rgb(0, 92, 169) 0px 0px 0px 0px` (a blue ring with no spread). Depth comes from flat color blocks, the glow and arch artwork in the hero, and soft photographic cut-outs. Recorded borders are #005ca9, #ffffff and #000000.

## Shapes

Shape is the identity. Radii measured: 26px (`md`), 15px (`sm`), 13px (`xs`), 50% and 500px or 9999px (`pill`). The header and carousel dots are pills, the white nav container is a rounded pill, the search input has a 26px radius, and photographs are clipped to organic blob shapes (soft squircles) rather than rectangles. Round white arrow buttons sit on the hero edges.

## Components

- **nav / nav-link**: a white rounded pill containing links in `brand-red` VAG Rounded 23.9px/700.
- **link**: white text (26.5px/700) on colored panels; on white the arrow-link is a black bold label with a red squiggle arrow.
- **text-input**: fill `text-input-bg`, text `canvas`, 20px/700, padding 0px 50px 0px 25px, height 52px, 1px blue border, radius 26px.
- **footer**: text `canvas` on color.
- **Hero**: gold backdrop, centered product art, white headline and a yellow text link.
- **Story card**: blob photo, 31.2px blue headline, 17.3px light copy, squiggle-arrow link.

## Design System Architecture

No public design-system, brand-guideline or press-kit page is linked from the home page; the fetch found only the Quality, History, Corporate responsibility and Contact pages as related content. The extraction recorded no root custom properties (the count was zero), so the system is applied through compiled component styles: three flat colors, one rounded family, rounded shapes and a hand-drawn arrow device. The values in this document are measurements of the live page.

## Do's and Don'ts

Do:
- Use flat red, blue and green blocks with white text and bold rounded headlines.
- Clip photography into soft blob shapes and use pill navigation.
- Pair the red squiggle arrow with a bold black label for text links.
- Keep copy light, upbeat and addressed to kids and grown-ups.

Don't:
- Use the browser default blue #0000ee for links.
- Use the yellow #ffeb06 as a button fill; it is a small text accent.
- Document the location banner or cookie dialog as brand components.
- Use sharp rectangles for imagery.

## Responsive Behavior

Measured at the mobile viewport: the h1 is 32.3256px with line height 40.9457px (versus 53px desktop) and body text is 14.4651px (versus 17.3px desktop). Other mobile behavior (navigation collapse, card stacking) was not measured.

## Iteration Guide

1. Choose a flat brand color block (red, blue or green) with white text.
2. Add bold VAG Rounded headlines and light body text.
3. Clip images to blob shapes; use pill containers for nav and controls.
4. Use the squiggle-arrow link for secondary actions.
5. Check that links are not browser-default blue and yellow is only a small accent.
