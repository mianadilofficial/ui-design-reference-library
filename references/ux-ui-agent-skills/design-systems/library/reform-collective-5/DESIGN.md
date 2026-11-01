---
version: alpha
name: Reform Collective
category: "Portfolio"
description: "Reform Collective is a digital design and branding agency: a cream canvas (#f9f8ed) over black bands (#000000), charcoal project cards (#27282e) with 14.22px radius, a red pill call to action (#d00401, 74px high), editorialNew light serif display at 94.2208px with -2.82662px tracking, foundersGrotesk 17.7792px body and uppercase service tags."
colors:
  surface-sand: "#cdb59d"
  accent-blue: "#009beb"
  accent-pink: "#f90ecd"
  accent-yellow: "#f7db00"
  canvas: "#f9f8ed"
  page-largest: "#000000"
  ink: "#000000"
  primary: "#d00401"
  on-primary: "#ffffff"
  surface-3: "#27282e"
  ink-4: "#f48900"
  ink-5: "#fe3712"
typography:
  display:
    fontFamily: editorialNew, "editorialNew Fallback"
    fontSize: 94.2208px
    fontWeight: 200
    lineHeight: 94.2208px
    letterSpacing: "-2.82662px"
  display-mobile:
    fontFamily: foundersGrotesk, "foundersGrotesk Fallback"
    fontSize: 62.4px
    fontWeight: 400
    lineHeight: 62.4px
    letterSpacing: "-3.12px"
  heading:
    fontFamily: foundersGrotesk, "foundersGrotesk Fallback"
    fontSize: 19.5584px
    fontWeight: 500
    lineHeight: 19.5584px
    letterSpacing: "-0.782336px"
    textTransform: uppercase
  body:
    fontFamily: foundersGrotesk, "foundersGrotesk Fallback"
    fontSize: 17.7792px
    fontWeight: 400
    lineHeight: 23.1168px
    letterSpacing: "-0.533376px"
  nav:
    fontFamily: Times
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 7.12px
  sm: 14.22px
  pill: 9999px
spacing:
  s1: 1px
  s2: 1.78px
  s3: 2px
  s4: 7.12px
  s5: 8px
  s6: 8.88px
  s7: 10px
  s8: 10.66px
  s9: 13.34px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.heading}"
    rounded: "{rounded.pill}"
    padding: 30.2208px 35.5584px
    height: 74px
  link:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    padding: 7.1168px 7.1168px 19.5584px
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    padding: 14px 30px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.canvas}"
    padding: 7.1168px 7.1168px 19.5584px
  footer:
    textColor: "{colors.page-largest}"
    padding: 91.5584px 0px 0px
---

## Overview

The page title is "Reform Collective | Digital Design Agency" and the measured URL is https://www.reformcollective.com/. The header announces "Award winning (digital) agency", with the word "digital" set in a different face from its neighbours, and a MENU control. The hero is a very large wordmark, partly cropped, set in black over a photograph of red and blue ribbed 3D forms, with a red logo tile between two halves of the word. A strip below reads "EST. 2015", "(SCROLL DOWN)" and "WE LIVE IN THE DETAILS (C)". The main section is "Our featured Work" with the subhead "BUILDING BRANDS FOR AMBITIOUS START UPS", then project cards: COVENANT (a large black photograph of a hand on a missile-like object), CIRCLE and ACCORDANCE, each with a row of rounded service tags (BRANDING, ART DIRECTION, WEB DESIGN, DEVELOPMENT). A red "START A PROJECT" pill and a footer with OUR WORK, ABOUT US, REFORM NOVA and CONTACT US complete the page. The measured body paragraph begins "Not just a pitch, not just a product...".

The mood is playful but crafted: an italic serif word dropped into a grotesque headline, saturated 3D imagery, and large rounded cards on a cream field. The slug is `reform-collective-5` but the site measured is the agency's main home page.

## Colors

- **Canvas:** `#f9f8ed`, a warm cream (area 5120), used for the content sections and as text color on black. The black `#000000` band is larger overall (area 8557) and is the body background; `page-largest` and `ink` are both `#000000`.
- **Ink:** `#000000`, 1105 characters of text.
- **Primary:** `#d00401`, a deep red used as the fill of the "START A PROJECT" button (white text `#ffffff`, 133 characters) and the logo tile in the hero (area 36).
- **Charcoal:** `#27282e`, the card and tag-bar background of project cards (area 2539).
- **Sand:** `#cdb59d` (area 707), a warm beige.
- **Accent oranges and reds:** `#f48900` (112 characters) and `#fe3712` (44 characters) as text colors.
- **Tag outline colors:** `#009beb` blue, `#f90ecd` pink, `#f7db00` yellow, `#f48900` orange and `#d00401` red appear as border colors on three elements each; `#f9f8ed` is the border color on 21 elements, the thin outline of the service tags on dark cards.

The CSS root defines the palette in the Display P3 color space (`--black1` to `--black4`, `--offwhite1` to `--offwhite3`, `--blue1`, `--blue2`, `--yellow1`, `--pink2`) plus `--red1: #FE3712` and `--videored: #EA4C2C`.

## Typography

Three families are loaded: editorialNew, foundersGrotesk and rasterGrotesk, each with a declared fallback.

- **Display (h1, "Our Work"):** editorialNew, 94.2208px, weight 200, line height 94.2208px, letter spacing -2.82662px (a light serif); on mobile the largest word is set in foundersGrotesk 62.4px, weight 400, letter spacing -3.12px.
- **Heading (h2, project names and buttons):** foundersGrotesk, 19.5584px, weight 500, line height 19.5584px, letter spacing -0.782336px, uppercase.
- **Body:** foundersGrotesk, 17.7792px, weight 400, line height 23.1168px, letter spacing -0.533376px.
- **Navigation:** Times 16px weight 400 for the measured nav link; header text in editorialNew 32px weight 200 with -0.96px tracking.
- **Footer links:** foundersGrotesk 16px, line height 20.8px, uppercase, -0.48px tracking.

By characters: foundersGrotesk 1429, rasterGrotesk 604, editorialNew 202. Sizes: 17.7792px (567), 8.8832px (349, letter spacing +0.621824px), 12.4416px (331), 16px, 19.5584px, 10.6624px (+0.746368px), 24.8832px, 14px (+0.98px). Small labels such as tags are tracked open while large text is tracked tight. Weights: 400, 200, 500, 300. These are commercial typefaces; no free substitute is documented.

## Layout

The desktop pass is 1280px wide and 7454px tall. The header bar is black, 73px high, with padding `14px 30px`. The work area is a full-width stack: one card spanning 1227px and 801px high, then two cards side by side (502px and 707px wide in the measured pass), all on cream. The footer is 411px high with top padding 91.5584px.

Gaps: 14.2208px (25), 13.3376px (8), 7.1168px (6), 8px, 2px, 10px, 17.7792px, 20.4416px. Paddings: 7.1168px (30), 14.2208px (22), 8.8832px, 1px, 1.7792px, 14px, 30px, 56px. Card inner padding is `7.1168px 7.1168px 19.5584px`: the image sits close to the card edge and the label sits in a bar at the bottom.

## Elevation & Depth

Shadows are limited to a few soft ones: `0 4px 12px rgba(0,0,0,.1), 0 0 0 2px rgba(0,0,0,.2)` (2 elements), `0 4px 12px rgba(0,0,0,.1)` and a `0 0 0 2px rgba(0,0,0,.4)` ring. No shadow is measured on cards. Depth comes from the dark card frames against cream, the 3D photography and the black header.

## Shapes

Radii: 1267.2px (40 elements; pills for tags and the button), 14.2208px (5; project cards), 7.1168px (5; inner image frames). The button is a full pill at desktop (1267.2px) and mobile (386.1px). Tags are pills with a thin outline.

## Components

- **Primary button ("START A PROJECT"):** `#d00401` fill, white text, foundersGrotesk 19.5584px weight 500 uppercase, padding `30.2208px 35.5584px`, height 74px, pill radius; the label is repeated twice in the markup for a roll-over effect.
- **Project card:** `#27282e` fill, 14.2208px radius, padding `7.1168px 7.1168px 19.5584px`, image with 7.1168px radius, bottom bar with uppercase name at left and outlined pill tags at right.
- **Service tag:** uppercase 10.6624px text, `#f9f8ed` 1px outline, pill radius.
- **Header:** black bar, padding `14px 30px`, centered claim in editorialNew, MENU at the right (on mobile "MENU | CLOSE" in foundersGrotesk 17px).
- **Footer:** cream area, black uppercase links.

Imagery and voice: the capture shows tactile 3D renders in saturated blue and orange rib texture behind the wordmark, a dramatic black studio photograph for the first case study, an electric-blue brand graphic held between fingers for the second and a tablet showing a website on tan leather for the third. Headline words mix roman and italic ("Our featured Work", with "featured" in an italic serif), and microcopy is clipped, lowercase-friendly and parenthesised, such as "(SCROLL DOWN)" and "WE LIVE IN THE DETAILS (C)".

## Design System Architecture

No public design-system documentation was opened. The shipped CSS defines a named palette in root variables (`--black1`..`--black4`, `--offwhite1`..`--offwhite3`, `--blue1`, `--blue2`, `--yellow1`, `--pink2`, `--red1`, `--videored`) using Display P3 values, and three font families with generated fallbacks (`editorialNew Fallback`, `foundersGrotesk Fallback`, `rasterGrotesk Fallback`), a pattern produced by Next.js font loading. Measurements are in `web/data/extracted/reform-collective-5.json` for https://www.reformcollective.com/.

## Do's and Don'ts

- Do pair a light serif display face with an uppercase grotesque for labels and buttons.
- Do use cream `#f9f8ed` and black `#000000` as the two base surfaces, with `#27282e` for cards.
- Do use full pills for tags and the main button, 14.22px for cards.
- Do tighten letter spacing on large type (-2.82662px at 94.2208px) and open it on tiny labels.
- Don't add shadows to cards; none are measured.
- Don't use the accent outline colors (blue, pink, yellow) as fills.
- Don't use red `#d00401` for anything but the primary action and the logo tile.

## Responsive Behavior

The 390px pass measured: the largest word "Our" at 62.4px in foundersGrotesk with -3.12px tracking; the card title h2 at 22.8813px; body at 20.7987px with line height 27.0387px (327px wide); the primary button 348px wide, 74px high with padding `29.1213px 34.32px`, still a pill (386.1px); the header 73px high with padding `14px 20px` and the labels "MENU | CLOSE". Card stacking and image crops on mobile were not measured.

## Iteration Guide

1. Cream `#f9f8ed` canvas, black `#000000` bands, `#27282e` cards at 14.22px radius.
2. Display in a light serif at 94.2208px with -2.82662px tracking; labels in uppercase grotesque 19.5584px weight 500.
3. Primary action: `#d00401` pill, 74px high, `30.2208px 35.5584px` padding.
4. Project cards with a bottom bar of outlined pill tags.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=reform-collective-5 --url=https://www.reformcollective.com/ --force --no-motion` and gate with `node web/scripts/verify-designs.mjs --slug=reform-collective-5`.
