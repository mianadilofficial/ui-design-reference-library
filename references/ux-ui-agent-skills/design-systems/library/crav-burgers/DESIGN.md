---
version: alpha
name: Crav Burgers
category: "Food & Beverage"
description: "CRAV artisan smashed-burger brand site: beige page #f5e3cd, ink #1b1b1b, ketchup red #f91814 and mustard #ffd750 full-bleed sections, oversized uppercase Mouse Memoirs headlines (384px and 192px), Modak wordmark, pill-shaped buttons."
colors:
  canvas: "#f5e3cd"
  ink: "#1b1b1b"
  primary: "#f91814"
  on-primary: "#f5e3cd"
  mustard: "#ffd750"
  mustard-dark: "#f4a804"
  white: "#ffffff"
  white-soft: "#ffffffe6"
  cream-glass: "#fffff0d9"
  maroon: "#4c0016"
  hairline: "#7d7d7d33"
typography:
  display:
    fontFamily: "\"Mouse Memoirs\", \"Mouse Memoirs Fallback\""
    fontSize: 384px
    fontWeight: 400
    lineHeight: 307.2px
  display-mobile:
    fontFamily: "\"Mouse Memoirs\", \"Mouse Memoirs Fallback\""
    fontSize: 101.4px
    fontWeight: 400
    lineHeight: 86.19px
  heading:
    fontFamily: "\"Mouse Memoirs\", \"Mouse Memoirs Fallback\""
    fontSize: 192px
    fontWeight: 400
    lineHeight: 144px
    textTransform: uppercase
  body:
    fontFamily: "\"Mouse Memoirs\", \"Mouse Memoirs Fallback\""
    fontSize: 23.04px
    fontWeight: 400
    lineHeight: 25.344px
  button:
    fontFamily: "\"Mouse Memoirs\", \"Mouse Memoirs Fallback\""
    fontSize: 16.64px
    fontWeight: 400
    lineHeight: 24.96px
    letterSpacing: 0.416px
    textTransform: uppercase
  wordmark:
    fontFamily: Modak, "Modak Fallback"
    fontSize: 51.2px
    fontWeight: 400
    lineHeight: 51.2px
  link:
    fontFamily: "\"Mouse Memoirs\", \"Mouse Memoirs Fallback\""
    fontSize: 23.04px
    fontWeight: 700
    lineHeight: 34.56px
    textTransform: uppercase
rounded:
  sm: 12.8px
  md: 25.6px
  pill: 9999px
spacing:
  s1: 6.4px
  s2: 7.68px
  s3: 12.8px
  s4: 19.2px
  s5: 25.6px
  s6: 32px
  s7: 51.2px
  s8: 102.4px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 6.4px 20.48px
    height: 38px
  link:
    textColor: "{colors.white}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.primary}"
    padding: 12.8px 32px
    height: 77px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.wordmark}"
  footer:
    textColor: "{colors.ink}"
    padding: 102.4px 32px
    height: 710px
---

## Overview

Crav Burgers is the single-page brand site of CRAV, "Artisan Smashed Burgers" (page title "CRAV | Artisan Smashed Burgers"). The page is built as a sticker-book poster: a beige canvas, a gigantic red headline "THE BURGER" with a cut-out burger photograph breaking through it, a Modak "CRAV" lockup, tilted rounded photographs, and full-bleed red and mustard sections divided by wavy edges. The measured document is 9,271px tall with 312 visible elements, so it is a long scrolling story rather than a menu.

Copy is short, loud and sensory. The hero reads "THE BURGER" with rotated accent stickers "SMASHED FRESH" and "BOLD FLAVOR", a left caption about smashed patties "on the flat top" and a right caption about "melted cheddar and our signature chili honey glaze crafted to satisfy your cravings since 1997". Below: "TOP CLASSIC", the two-line headline "JUICY CHEESY FULLY LOADED", a paragraph beginning "CRAV is back and bolder than ever", and an "ORDER NOW" button. Later sections, from the opened page: "EXPERIENCE" ("food that feels good" with "450 kcal", "High Protein", "Fresh Ingredients"), "BOLD FLAVOUR" ("100% Organic", "Zero Guilt", "True Taste" and four ingredient photographs), "take away" ("QUALITY THAT TRAVELS WITH YOU" with city cards BERLIN, LONDON, NEW YORK, SYDNEY, TOKYO), "A story in every bite." (a four-step path: lettuce, tomato, cheese, patty) and "FEEL IT" ("feel the Change", with a second "Order Now"). The footer links are Home, Burgers, Spices, Contact, with the small print "© 2026 CRAV — All rights reserved" and "Smashed patties · toasted buns · est. 1997".

The header navigation lists CRAV, Burgers, Menu, Home, About, Our Spices, Locations, Contact. A small cookie card ("COOKIES IN USE", "LATER", "OKAY!") appears over the hero in the capture and is excluded from this document.

## Colors

The brand publishes its palette as named CSS variables, and every colour on the page maps to one.

- **Canvas `#f5e3cd`** is `--beige`, the body background and the first-screen background (area weight 1,319).
- **Ink `#1b1b1b`** is `--black`, the most-read text colour (408 characters) and the footer text colour.
- **Primary `#f91814`** is `--red`: the headline colour (h1 and h2), the logo and nav colour, the fill of the "BURGERS" pill button and of the large wave section (area weight 1,979, 134 characters of text).
- **On-primary `#f5e3cd`** is the beige used as text on red (69 characters).
- **Mustard `#ffd750`** is `--mustard` and covers the largest area of the page (2,687); **mustard dark `#f4a804`** is `--mustard-dark` and colours 49 characters.
- **White `#ffffff`** (47 characters; `--white`) and `#ffffffe6` (14 characters) are text on red and mustard; `#fffff0d9` is a translucent cream measured on 27 characters.
- **Maroon `#4c0016`** was measured on 10 characters.
- **Hairline `#7d7d7d33`** and `#ffffff33` are the two measured border colours (one use each); the outlined "MENU" pill in the capture has a thin light border.

The stylesheet also contains `#60a905` and `#662c00` (2 occurrences each) that the extraction did not attach to a visible element.

## Typography

Two families only. **Mouse Memoirs** (590 measured characters) carries everything except the wordmark, and **Modak** (168 characters) is used for the logo and navigation text. Both load with generated fallback faces (`Mouse Memoirs Fallback`, `Modak Fallback`); weights are 400 (740 characters) and 700 (18 characters, the "ORDER NOW" link).

- **Display, 384px / 400, line-height 307.2px:** "THE BURGER" (h1), red. At the 390px pass the same h1 is 101.4px / 86.19px.
- **Heading, 192px / 400, line-height 144px, uppercase:** "JUICY CHEESY FULLY LOADED" (h2), red; mobile 93.6px / 70.2px.
- **Body, 23.04px / 400, line-height 25.344px:** "Freshly packed smash burgers, ready to go wherever you crave" and similar captions, `#1b1b1b`; mobile 19.5px / 21.45px.
- **Button, 16.64px / 400, line-height 24.96px, letter-spacing 0.416px, uppercase.**
- **Link, 23.04px / 700, line-height 34.56px, uppercase:** the "ORDER NOW" text link, white.
- **Wordmark, Modak 51.2px / 400:** the "CRAV" header logo, red.

The body element is uppercase Mouse Memoirs at 35.84px with 1.792px letter-spacing (the default for nav labels). Other sizes by characters: 35.84px (99), 30.72px (35), 11.52px with 2.304px tracking (27), 115.2px (10) and 448px (4). Most headlines are drawn very large and tight; the capture shows the red letters with a light outline.

**Substitutes.** Mouse Memoirs and Modak are loaded by the site; the declared fallbacks are the generated "Fallback" faces, with no further generic family in the measured stacks.

## Layout

The layout runs at full bleed: sections change background (cream, red, mustard) with wavy dividers, and display type spans almost the full width (the h1 box is 1,216px wide inside 1,280px). The header is 77px high with 12.8px 32px padding and sits over the hero. The hero places the burger photograph on top of the headline so it overlaps the letters; a caption sits at each side. Then a centred headline block, a button, and a fan of three tilted rounded photographs.

Spacing is rem-based from a Tailwind base of 0.25rem (`--spacing`): the most common gaps are 12.8px (6 uses), 7.68px (5) and 25.6px (5); paddings are 32px (8), 102.4px (6), 12.8px (4), 6.4px (2) and 25.6px (2). The footer is 710px high with 102.4px 32px padding. Imagery uses cut-outs, rotated frames and sticker-like labels rather than a grid.

## Elevation & Depth

No box shadows were measured (the shadow table is empty). The stylesheet declares `--drop-shadow-xl: 0 9px 7px #0000001a`, blur sizes `--blur-sm: 8px` and `--blur-md: 12px`, and a set of sticker-effect variables (`--sticker-p: 20%`, `--sticker-rotate: 30deg`, `--sticker-lighting-constant: .1`, `--peel-direction: 0deg`, `--peel-amount: 1`, `--sticker-shadow-opacity: .6`), which indicate a peel-sticker treatment on some elements. Depth in the capture comes from overlap: the burger photograph over the headline, and rotated photographs over the beige.

## Shapes

Radii measured: a pill (computed 33,554,400px on the "BURGERS" button, 5 uses), 12.8px (5), elliptical `50% / 60%` (4) and `50% / 55%` (2), which match the blob shape of the "ORDER NOW" button in the capture, 4% (3) and 25.6px (1). The theme declares `--radius-xl: .75rem` and `--radius-2xl: 1rem`. Photographs are rounded rectangles; section dividers are wavy.

## Components

- **Primary button.** Red `#f91814` pill, beige `#f5e3cd` 16.64px uppercase text, padding 6.4px 20.48px, height 38px, width 82px ("BURGERS", top right of the header). At mobile: 15.6px text, padding 7.02px 19.5px, 37px by 78px.
- **Order button.** A red blob (elliptical radius) with white uppercase text, "ORDER NOW", centred under the headline.
- **Menu button.** An outlined pill with the label "MENU" and a menu glyph; its border colour was not isolated.
- **Header.** The Modak "CRAV" wordmark at the left in red, 77px high.
- **Stickers.** Rotated mustard labels with a light outline ("SMASHED FRESH", "BOLD FLAVOR", "TOP CLASSIC", "EXPERIENCE").
- **Photo cards.** Rotated rounded photographs, no text.
- **Footer.** Uppercase link row, 710px high.
- **Cookie card** ("COOKIES IN USE") is not brand UI and is excluded.

## Design System Architecture

CRAV publishes no design system or brand guideline; the opened page lists no design credit, font credit or guideline link. The de-facto system is a Tailwind CSS v4 theme (variables `--spacing`, `--tracking-*`, `--leading-*`, `--radius-*`, `--blur-*`, `--drop-shadow-xl`, `--default-transition-timing-function: cubic-bezier(.4, 0, .2, 1)`) extended with a six-colour palette (`--beige`, `--black`, `--red`, `--mustard`, `--mustard-dark`, `--white`), two font variables (`--font-mouse-memoirs`, `--font-modak`) and the sticker/peel effect variables. Source opened: https://www.cravburgers.shop/.

## Do's and Don'ts

- Do keep the page beige `#f5e3cd` with red `#f91814` headlines and mustard `#ffd750` sections.
- Do set headlines in Mouse Memoirs at an extreme scale (384px and 192px on desktop) and the wordmark in Modak.
- Do round buttons fully (pill) or as blobs, and keep photographs rounded and slightly rotated.
- Do write short, sensory, uppercase copy.
- Don't add drop shadows to the interface; none were measured.
- Don't use cool greys or blue; the palette is warm throughout.
- Don't reproduce the cookie card as a component.

## Responsive Behavior

Measured at 390px: the h1 is 101.4px / 86.19px (321px wide), the h2 93.6px / 70.2px (359px wide), body text 19.5px / 21.45px, the nav wordmark 39px with 15.6px padding and a 71px-high header, and the "BURGERS" pill 15.6px text in a 78px by 37px box. Mobile font sizes by characters: 19.5px (1,001), 93.6px (141), 15.6px (78), 31.2px (58), 23.4px (58). The section layout at 390px was not measured (this extraction carries no band data).

## Iteration Guide

1. Set canvas `#f5e3cd`, ink `#1b1b1b`, primary `#f91814`, mustard `#ffd750`.
2. Use Mouse Memoirs in uppercase at 384px / 192px for headlines, 23.04px for body, and Modak 51.2px for the wordmark.
3. Build buttons as red pills with beige text (38px high) and blob-shaped order buttons.
4. Alternate full-bleed cream, red and mustard sections with wavy dividers and tilted rounded photographs.
5. Take new colours from the palette variables before measuring new ones.
