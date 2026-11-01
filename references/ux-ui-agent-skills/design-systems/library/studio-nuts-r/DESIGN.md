---
version: alpha
name: StudioNuts®
category: "Agencies & Studios"
description: "Campaign and visual studio site: white #ffffff canvas, #101010 ink, pink #c31d9f logo accent, 76.8px uppercase Acumin Pro Extra Condensed headline with -1.92px tracking, OpenSauceOne 11.52px labels, no shadows and imagery-led project strips."
colors:
  canvas: "#ffffff"
  ink: "#101010"
  primary: "#101010"
  pink: "#c31d9f"
typography:
  display:
    fontFamily: "\"Acumin Pro Extra Condensed\", sans-serif"
    fontSize: 76.8px
    fontWeight: 400
    lineHeight: 65.28px
    letterSpacing: "-1.92px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Acumin Pro Extra Condensed\", sans-serif"
    fontSize: 62.4px
    fontWeight: 400
    lineHeight: 53.04px
    letterSpacing: "-1.95px"
    textTransform: uppercase
  subheading:
    fontFamily: OpenSauceOne, sans-serif
    fontSize: 20.48px
    fontWeight: 400
    lineHeight: 28.2624px
  nav:
    fontFamily: OpenSauceOne, sans-serif
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 12.8px
  link:
    fontFamily: OpenSauceOne, sans-serif
    fontSize: 11.52px
    fontWeight: 400
    lineHeight: 11.52px
rounded:
  xs: 1.28px
  pill: 9999px
spacing:
  s1: 5.12px
  s2: 12.8px
  s3: 16.64px
  s4: 48.88px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
---

## Overview

StudioNuts® (page title "StudioNuts® - Local Roots. Global Stories.", language en) is a campaign and visual-production studio. The home page opens on a white screen with the pink "NUTS" logotype at top left, a four-item nav (Home, Studio, Work, Contact) and a horizontal strip of project stills: a Hendrick's gin bottle illustration, a 3D candy-door scene, a 3D desk on a plinth, and a portrait on red. Below it a "Play Reel" thumbnail of a pink-splash soda can sits left, and at right the label "Studio Nuts®" introduces the headline "THINKING BOLDLY. CRAFTING VISUALLY." with the line "Not just makers. Campaign creators. Visual disruptors." and an underlined "Explore All Work" link. A "(Scroll)" hint is at the lower right.

The measured page is a single 1280 by 800 viewport. The opened page lists 29 projects under Work, among them FOOH COMPAL MORANGO, KFC Gamebox, Heinz - The Unstainable Thobe, Ubuntu 26.04, Affordable Masterpieces by Ikea, FOOH HENDRICKS, Play Doh, Mountain Dew, Etihad Airways and NETFLIX - LA CASA DE PAPEL. Social icons link to Behance, Facebook, Instagram and Vimeo. The voice is short, punchy and self-assured.

## Colors

The interface is almost colorless so the work carries the color. Root variables: `--black` and `--darkgrey` #101010, `--midgrey` #373737, `--grey` #5A5A5A, `--white` #ffffff and `--pink` #C31D9F.

- **Canvas #ffffff**: page background.
- **Ink #101010**: every measured text character (1576 characters weighted, a single color) and the only measured background fill (the small round cursor/dot).
- **Primary #101010**: no colored CTA was detected; near-black is the action color and the underline color of "Explore All Work" (border color #101010).
- **pink #c31d9f**: the brand magenta declared as `--pink`, and the capture shows the same magenta family in the logotype; it is not used on text.

`--midgrey` #373737 and `--grey` #5A5A5A are declared and not measured in use on the home page.

## Typography

Two families are loaded: Acumin Pro Extra Condensed (registered at weight 700) for display, and OpenSauceOne (registered at weight 500) for everything else. Every measured computed weight is 400.

- **display**: Acumin Pro Extra Condensed 76.8px / 65.28px, tracking -1.92px, uppercase (h1 and h2 "THINKING BOLDLY. CRAFTING VISUALLY.").
- **display-mobile**: 62.4px / 53.04px, tracking -1.95px.
- **subheading**: OpenSauceOne 20.48px / 28.2624px (the tagline line).
- **nav**: OpenSauceOne 12.8px / 12.8px.
- **link**: OpenSauceOne 11.52px / 11.52px (the dominant size: 1417 characters weighted).

A few small sizes are also measured: 9.6256px (17 characters) and 14.08px (12). The roots name the fonts `--primary-font` and `--secondary-font`. Both fonts are commercial; their licenses are not stated on the pages opened.

## Layout

A generous white page with strips of imagery. The header row places the logo at left, the nav centered-right and a round dot at far right. Image tiles in the capture are equal-width rectangles with equal gaps in a horizontal strip. Below, the text column starts at roughly the page center, while the reel thumbnail sits at the left margin; the two columns are separated by empty white space. Measured gaps: 12.8px (174 uses, the nav and link rhythm), 48.8832px (6), 16.64px and 5.12px; the 48.8832px value is also the only measured padding (6 uses).

## Elevation & Depth

No box shadows were measured: the shadow list in the extraction is empty. The page is flat white with no gradients or overlays recorded, so any sense of depth comes only from the photography and 3D renders inside the tiles, such as the plinth under the desk and the splash around the can. Interface elements themselves stay flat; do not add elevation to links, tiles or the cursor ring.

## Shapes

Radii measured: 100% (2 elements, the round cursor and the dot), 640px (2, pill-like) and 1.28px (1). Image tiles and links are square. Tokens: `xs: 1.28px`, `pill: 9999px`.

## Components

- **nav-link**: OpenSauceOne 12.8px in #101010. Hover measured: opacity 1 to 0.5, color and decoration unchanged.
- **link** ("Explore All Work"): 11.52px with a 1px underline in #101010.
- **Play Reel**: a small label with a play triangle above a reel thumbnail; "Unmute" appears on the page text.
- **Custom cursor**: a ring that follows the pointer, driven by `--cursor-timing` (all 0.4s cubic-bezier(0.52, 0.02, 0, 0.99)).
- **Project tile**: still image or video loop with a title in the work list.
- **Social icon links**: Behance, Facebook, Instagram, Vimeo.

No buttons with fills, inputs or cards were detected.

## Design System Architecture

No public design system or brand guidelines exist: the opened page (https://www.studionuts.com.br/) mentions none. The de-facto system is eleven root variables: five greys and white, one pink, two font names, and three motion curves (`--underline-motion` fadein 2.5s 1s cubic-bezier(.59,0,0,.97), `--cursor-timing`, `--work-hover-motion` 1s cubic-bezier(.36,0,0,.99)). The variable `--work-hover-motion` declares a one-second transition curve for work hover; its visual result was not measured. Source: https://www.studionuts.com.br/ (measured rootVars).

## Do's and Don'ts

Do:
- Keep the interface white and #101010 and let project imagery bring color.
- Set headlines in Acumin Pro Extra Condensed, uppercase, with negative tracking and tight leading.
- Use OpenSauceOne at 11.52px to 12.8px for navigation and links.
- Use the fade of opacity to 0.5 as the nav hover.

Don't:
- Use pink for text or backgrounds; it is declared but only seen in the logo and artwork.
- Add shadows or filled buttons.
- Add rounded cards.

## Responsive Behavior

In the 390px pass the h1 is 62.4px / 53.04px with -1.95px tracking; the measured sizes by characters are 11.7px (484), 21.45px (54), 15.6px (34) and 62.4px (34). Nav layout, the project strip and the cursor behavior on mobile were not measured.

## Iteration Guide

1. Set canvas #ffffff and ink #101010; add pink #c31d9f only for the logo.
2. Register Acumin Pro Extra Condensed and OpenSauceOne.
3. Headline 76.8px/65.28px, -1.92px tracking, uppercase.
4. Underline the single text link; nav hover is opacity 0.5.
5. Add the custom cursor ring with the declared timing.
6. Re-run `node web/scripts/verify-designs.mjs --slug=studio-nuts-r`.

## Content Notes for Reproduction

The studio's name carries the registered mark in the title and in the label above the headline. The opened page repeats the nav twice (header and footer-style repeat), and its logo file is an SVG. The work list order on the page begins with FOOH COMPAL MORANGO, TURTLE AND HARE, Nacional Cereals Characters and KFC Gamebox, and continues through Digital Traps, APAV - REAL HORROR, Heinz - The Unstainable Thobe and Ubuntu 26.04. Project titles are set as given, in a mix of uppercase and sentence case. The domain is Brazilian (.com.br) while the copy is English.

Additional reproduction notes: the measured text is a single color, #101010, across 1576 characters, so every label, headline and link shares one ink. The only measured fill is #101010 on the small dot at the right of the header and the cursor ring is outlined. The page has an "Unmute" control tied to the reel video, which is media UI and is not tokenized. In the extraction, the page height equals the viewport height (800px at 1280px), so the home page does not scroll in the measured pass; the "(Scroll)" hint is page copy. The h1 and h2 both read "THINKING BOLDLY." and the h2 adds "CRAFTING VISUALLY.", so the same two-line headline is a single display unit at 76.8px.

Spacing tokens map to the measured values: s1 5.12px, s2 12.8px (the dominant gap), s3 16.64px and s4 48.8832px (the only padding). The nav, the link and the tagline are all set in the same secondary family, so the hierarchy is carried by size alone: 76.8px, 20.48px, 12.8px and 11.52px, with no weight or color changes.
