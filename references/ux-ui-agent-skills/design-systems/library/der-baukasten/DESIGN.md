---
version: alpha
name: Der Baukasten
category: "Tech & AI"
description: "Der Baukasten, a 3D character concept site by tubik: a #000000 canvas with off-white #effcfc futura-pt type (500-weight wordmark at 255.701px with -20.4561px tracking), three saturated panels in blue #0581fe, red #f54d25 and yellow #efc11b, and 11.25px outlined download buttons."
colors:
  canvas: "#000000"
  ink: "#effcfc"
  primary: "#effcfc"
  panel-blue: "#0581fe"
  panel-red: "#f54d25"
  panel-yellow: "#efc11b"
typography:
  display:
    fontFamily: futura-pt
    fontSize: 22.5px
    fontWeight: 500
    lineHeight: 15.525px
    letterSpacing: "-1.8px"
  display-mobile:
    fontFamily: futura-pt
    fontSize: 74.8084px
    fontWeight: 500
    lineHeight: 51.6178px
    letterSpacing: "-5.98467px"
  wordmark:
    fontFamily: futura-pt
    fontSize: 255.701px
    fontWeight: 500
    lineHeight: 176.434px
    letterSpacing: "-20.4561px"
  subheading:
    fontFamily: futura-pt
    fontSize: 149.976px
    fontWeight: 500
    lineHeight: 149.976px
    letterSpacing: "-10.4983px"
  body:
    fontFamily: futura-pt
    fontSize: 18.75px
    fontWeight: 400
    lineHeight: 22.5px
    letterSpacing: "-0.75px"
  body-mobile:
    fontFamily: futura-pt
    fontSize: 16.25px
    fontWeight: 400
    lineHeight: 19.5px
    letterSpacing: "-0.65px"
  nav:
    fontFamily: futura-pt
    fontSize: 16.875px
    fontWeight: 500
    lineHeight: 16.875px
  link:
    fontFamily: futura-pt
    fontSize: 15px
    fontWeight: 400
    lineHeight: 18.75px
  button-secondary:
    fontFamily: futura-pt
    fontSize: 18.75px
    fontWeight: 500
    lineHeight: 23.4375px
rounded:
  xs: 11.25px
  circle: 50%
spacing:
  s1: 7.5px
  s2: 9.38px
  s3: 11.25px
  s4: 22.5px
  s5: 28px
  s6: 28.13px
  s7: 32px
  s8: 60px
components:
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 11.25px 22.5px
    height: 48px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
    padding: 28.125px 32px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
    typography: "{typography.wordmark}"
    padding: 0px 0px 32px
---

## Overview

Der Baukasten ("the building kit") is a showcase of three 3D folk-spirit characters, introduced by the line "A subtle concept for game design or interior mood" (the page title and description). The footer reads "Crafted with [U+2764 U+FE0F] by tubik" and links to tubikstudio.com, so the site is a studio project by tubik. The page's declared language is Ukrainian (`uk_UA`) and the cards use Ukrainian nicknames with English descriptions: "півник" ("An affectionate term for a rooster."), "бузько" ("A sweet, tender nickname for a stork.") and "коник" ("A playful nickname for a horse."). Each card has a short folk story (for example "Konyk is a tiny horse with wind in his hooves and mischief in his eyes.") and a "Download 3D Model" button linking an .obj file.

The art direction is playful constructivism on black. In the capture, a loose burst of glossy 3D arcs, bars and discs in green, orange, red and blue floats over an enormous off-white wordmark "Der Baukasten", and below it three tall flat panels (blue, red, yellow) overlap like a fanned deck, the front one (yellow) showing the title "КОНИК" in heavy black letters, a thin rule, the nickname line in light-weight type, the story in small bold copy, another rule, and an outlined download button. The header is minimal: the tagline at the left and "Contact Us →" at the right.

The mood is bold and handmade, and the whole system is one geometric sans (futura-pt) at two weights plus four colors: black, off-white and three saturated accents. It reads as a toy-box palette on a night background.

The copy voice is gentle and mythic. Each card opens with a nickname gloss in plain English ("An affectionate term for a rooster.") and continues with a few sentences of folklore in the third person, such as "His nests are built from light and old lullabies" for the stork. Sentences are short, verbs are concrete, and the closing line of every story turns toward the reader ("If something vanishes from your home and the breeze feels playful—smile."). The only calls to action are the three "Download 3D Model" buttons and "Contact Us".

## Colors

- **Canvas `#000000`**: the body background and the largest area (also `--color-dark: #000`).
- **Ink `#effcfc`**: the off-white (a faint cyan tint) text color for 944 characters (declared `--color-light`). **Primary `#effcfc`**: no filled button was found, so the actions (the nav link and the outlined download button) use the ink color.
- **panel-blue `#0581fe`**, **panel-red `#f54d25`**, **panel-yellow `#efc11b`**: the three card backgrounds, each measured on an equal area, declared as `--color-blue`, `--color-red` and `--color-yellow`.
- Text on the yellow panel is black `#000000` (366 characters measured in `#000000`).
- The root also declares `--color-select: rgba(8,171,255,.33)` (text selection), `--color-primary: var(--color-dark)` and `--color-contrast: var(--color-light)`.

No gradient or dark/light theme switch was measured; the 3D art supplies glossy greens and oranges that are not CSS colors.

## Typography

One family: **futura-pt**, loaded in weights 500 and 300 and also used at 400 (the measured text weights are 400 on 1047 characters, 500 on 163 and 300 on 100). Everything is tracked tight, proportionally to the size: about -8% on the display sizes (22.5px at -1.8px, 255.701px at -20.4561px, 149.976px at -10.4983px) and -4% on body (18.75px at -0.75px).

| Role | Size / line height | Weight | Tracking |
|---|---|---|---|
| wordmark (footer element) | 255.701px / 176.434px | 500 | -20.4561px |
| subheading (card name, "півник") | 149.976px / 149.976px | 500 | -10.4983px |
| display (h1 "Der Baukasten" in the header) | 22.5px / 15.525px | 500 | -1.8px |
| display-mobile (h1 on mobile) | 74.8084px / 51.6178px | 500 | -5.98467px |
| body | 18.75px / 22.5px | 400 | -0.75px |
| body-mobile | 16.25px / 19.5px | 400 | -0.65px |
| nav | 16.875px / 16.875px | 500 | normal |
| link | 15px / 18.75px | 400 | normal |
| button | 18.75px / 23.4375px | 500 | normal |

The nickname lines are set at 37.5px weight 300 (100 characters at the light weight), which gives the cards a light, airy sub-line beneath the heavy title. Display line heights are below 1 for the header (15.525px on 22.5px) and the wordmark (176.434px on 255.701px, 0.69), and 1.0 for the 149.976px titles.

## Layout

The page is 8032px tall at 1280px. A 98px-high header (padding 28.125px 32px) holds the tagline and "Contact Us". The hero is a black field with the 3D burst and the full-width wordmark. Below, the three character panels fan across the right side, each panel a vertical sheet revealing a strip of its neighbor; each panel contains the title, rule, nickname, story, rule and button. The footer repeats the wordmark at the enormous size with "Crafted with [U+2764 U+FE0F] by tubik" and has padding 0px 0px 32px. Measured gaps are 28px, 7.5px, 9.375px and 60px; paddings 22.5px, 28.125px, 32px and 11.25px.

## Elevation & Depth

No shadows were measured. Depth comes from the 3D art (lit, extruded shapes) and from the overlapping flat panels. Thin 1px rules in the ink or black color separate parts of each card (border colors `#effcfc` and `#000000` were measured).

## Shapes

Radii: 11.25px (3 elements: the download buttons) and 50% (1 element, a circular shape). Cards are sharp rectangles. The 3D art uses arcs and discs, so the interface can stay rectilinear. The stylesheet also lists 1px, 4px, 12px and 100px radii that were not seen on measured visible elements.

## Components

- **Download button (`button-secondary`)**: transparent fill, 1px solid border, 11.25px radius, futura-pt 18.75px weight 500, padding 11.25px 22.5px, 48px high, 232px wide for "Download 3D Model", with a download icon; the measured instance is off-white, and on the yellow panel the capture shows dark text and outline.
- **Navigation (`nav`, `nav-link`)**: a 98px-high header; "Contact Us" 16.875px weight 500 followed by an arrow; the nav links are 105px wide and 23px high.
- **Character panel**: a full-height sheet in blue, red or yellow containing an enormous title, a 37.5px light nickname, an 18.75px story and the button.
- **Link (`link`)**: 15px weight 400, for example "tubik" in the footer.
- **Footer (`footer`)**: wordmark at 255.701px plus the credit line.

## Design System Architecture

No public design system or brand guideline is published: the page links only the tubik studio site (https://tubikstudio.com/, not opened), the contact anchor and the three .obj downloads. The page opened for research was https://www.der-baukasten.com (rendered). The de-facto system is a tiny set of root variables: `--color-dark`, `--color-light`, `--color-blue`, `--color-red`, `--color-yellow`, `--color-primary`, `--color-contrast` and `--color-select`. Fonts are served as the `futura-pt` family. The sizes are not round numbers (18.75px, 16.875px, 22.5px, 37.5px, 255.701px).

## Do's and Don'ts

Do:
- Keep the ground black `#000000` with off-white `#effcfc` text.
- Use futura-pt at 500 for titles and 400 or 300 for copy, with tight negative tracking.
- Build the three accent panels in `#0581fe`, `#f54d25` and `#efc11b`.
- Use thin rules and an 11.25px outlined button.
- Show the product as 3D artwork floating over the wordmark.

Don't:
- Do not add shadows or gradients to UI elements.
- Do not set loose tracking; every measured size is negative.
- Do not fill buttons; the measured button is outlined.
- Do not use more than the three accent colors for panels.

## Responsive Behavior

A fresh 390px mobile pass recorded: the h1 measures 74.8084px (line height 51.6178px, tracking -5.98467px, 354px wide); body is 16.25px with a 19.5px line height; the header is 69px high with padding 16.0875px 18px and 14.625px text; the most-read sizes were 16.25px (1075 characters), 32.5px, 14.625px, 74.8084px, 13px, 104.004px and 19.5px. How the panel deck rearranges was not measured, and no breakpoints were recorded.

## Iteration Guide

1. Set `#000000`, text `#effcfc`, and load futura-pt at 300 and 500.
2. Build the scale with negative tracking: wordmark, 149.976px titles, 37.5px light lines, 18.75px body.
3. Create the three panels and the 11.25px outlined button.
4. Place the 3D burst above the wordmark.
5. Check mobile with a 74.8084px wordmark and 16.25px body.
