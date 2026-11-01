---
version: alpha
name: Procter & Gamble (P&G US)
category: "Beauty & Personal Care"
description: "P&G's US corporate site (us.pg.com): Montserrat throughout, royal-blue #003da5 as both ink and brand fill, a #f2f7ff pale-blue content band, white canvas, pill buttons with 44px radius, circular and arched image masks, and soft blue-grey shadows such as rgba(0, 0, 0, 0.05) -8px 16px 16px."
colors:
  canvas: "#ffffff"
  page-largest: "#f2f7ff"
  ink: "#003da5"
  primary: "#003da5"
typography:
  display:
    fontFamily: Montserrat, "Montserrat Fallback", sans-serif
    fontSize: 64px
    fontWeight: 700
    lineHeight: 76.8px
  display-mobile:
    fontFamily: Montserrat, "Montserrat Fallback", sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  heading:
    fontFamily: Montserrat, "Montserrat Fallback", sans-serif
    fontSize: 16px
    fontWeight: 800
    lineHeight: 19.2px
  body:
    fontFamily: Montserrat, "Montserrat Fallback", sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20.8px
  nav:
    fontFamily: Montserrat, "Montserrat Fallback", sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 15.6px
rounded:
  xs: 32px
  sm: 44px
  md: 48px
  lg: 50px
  xl: 300px
  pill: 9999px
spacing:
  s1: 5px
  s2: 9.6px
  s3: 10px
  s4: 11.2px
  s5: 12px
  s6: 12.8px
  s7: 15px
  s8: 16px
  s9: 19.2px
  s10: 20px
components:
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 11.2px 16px
    height: 46px
    borderColor: "{colors.ink}"
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 12.8px 24px
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

## Overview

This file documents `https://us.pg.com/` (title "Procter & Gamble", lang en-US), the US home page of the consumer-goods company, measured at 1280px: 501 visible elements, 3,781px scroll height. The site's entry URL `pg.com` redirects here, so the measured site is the US edition and it is named accordingly.

The page opens on a full-bleed photographic hero (a woman with a prosthetic leg packing groceries from paper bags that hold P&G products) with a pause control at the upper right and the h1 "2026 Annual Report" at 64px in white. A translucent white bar carries the navigation: a globe icon at left; Our Brands and Our Impact; the circular blue P&G logo at centre; Our Story, News and Rewards & Offers (with an arrow icon); and a search icon at right. The hero ends in a convex curve into the pale-blue story band.

Below: "READ OUR LATEST STORIES" (an 800-weight 16px uppercase label), four story cards where each image is an arch or circle mask above a date, a headline and white card body (the first card is filled royal blue with white text), an outlined pill "See all our latest stories", then "OUR BRANDS" over a 48px headline "Products that make life a little easier" with a yellow full stop, and a carousel of round brand medallions (Align, Always, Always Discreet, Ambi Pur, Ariel) each with a "Visit Site" pill, pagination dots, arrows and an outlined "See our iconic brands" pill.

Voice: friendly corporate, plain English, with sentence-case headlines and uppercase micro-labels.

Imagery is people-first and documentary: employees, workplaces, factory-floor product lines and executives in conversation appear in story cards, while brand logos are reserved for circular medallions. The interface stays quiet and blue so that this photography, and the brands' own colours, carry the variety. Everything is centred; headings, labels and buttons share one axis, giving the page a calm, symmetrical rhythm from hero to footer.

## Colors

The palette is essentially one blue, white and a pale tint. Text colours by characters: `#003da5` (808) and `#ffffff` (448). Backgrounds by area: `#f2f7ff` (2,200), `#003da5` (1,512), `#ffffff` (1,362), `#ffffffd9` (84, the translucent nav bar).

- **ink / primary `#003da5`**: all body text, headings, outlined-button borders, the filled primary button, the active story card and the footer fill.
- **canvas `#ffffff`**: page and card background. **page-largest `#f2f7ff`**: the pale-blue band behind the story cards, the largest area on the page.
- The nav bar's white at 85% opacity (`#ffffffd9`) and the white footer text complete the set.
- The yellow of the full stop after "easier" and the brand-medallion colours are artwork or unmeasured; they are not tokenised.

Hover on the "Explore the report" primary button was measured: text from white to `rgb(69, 113, 189)` and background from `#003da5` to `rgb(186, 203, 231)`, i.e. it lightens toward the pale blue.

## Typography

One family: **Montserrat**, with weights 300, 400, 500, 600, 700, 800 loaded and a "Montserrat Fallback" metric-matched fallback. By characters, Montserrat is 1,299 of the text.

- **display**: 700, 64px/76.8px (hero h1); mobile 40px/48px.
- **heading**: 800, 16px/19.2px, uppercase labels like "READ OUR LATEST STORIES".
- **body**: 600, 16px/20.8px; card text and button labels (the default is semibold, not regular).
- **nav**: 500, 12px/15.6px, in white on the utility strip/footer.

Other sizes: 14px (272 characters, dates and card meta), 22.4px (110), 48px (80, the "Products that make life a little easier" headline), 13px, 40px. Weights by characters: 600 (752), 700 (288), 500 (162), 400 (43), 800 (33), 300 (21).

## Layout

The stylesheet root defines `--space-x: 15px`, `--space-w: 1280px` and `--space-y: 70px`: a 1280px container with 15px gutters and 70px vertical section spacing. Sections are full-width bands (hero, pale-blue stories, white brands) each centred on a single column with a small uppercase label above the content. Story cards sit four across with equal gaps; brand medallions run in a carousel of five visible circles. Spacing values in use: 5, 9.6, 10, 11.2, 12, 12.8, 15, 16, 19.2, 20px.

## Elevation & Depth

Four soft shadows were measured: `rgba(0, 0, 0, 0.05) -8px 16px 16px 0px` (10 elements), `rgba(0, 0, 0, 0.03) 1px 5px 13px 6px` (9, the white story cards on the pale band), `rgba(0, 0, 0, 0.05) 0px 2px 10px 0px` and `rgba(0, 0, 0, 0.15) -1.6px -1.6px 12.8px 0px`. They are barely visible, lifting white cards and medallions off the tinted band. The nav bar floats over the hero as a translucent white strip.

Motion and interaction states beyond the measured button hover were not recorded.

## Shapes

Radii measured: 50% (30 elements: circular medallions, icon buttons), 44px (14: pill buttons), 32px (5: cards), `640px 640px 120px 120px` (4: the arched story image masks), 48px (4), 50px (2), 300px (2) and `0px 48px 0px 0px` (2). The vocabulary is round: pills, circles, arches and one cut corner. The hero's bottom edge is a convex curve.

## Components

- **Primary button ("Explore the report")**: `#003da5` fill, white Montserrat 600 16px, 44px radius, 12.8px 24px padding, 46px high.
- **Secondary button ("See all our latest stories")**: transparent, `1px solid #003da5`, blue text, 44px radius, 11.2px 16px padding, 46px high.
- **Story card**: arched image mask, 14px date, 16px 600 headline, white card body with the soft shadow; the active card is blue with white text.
- **Brand medallion**: circle with a white or brand-coloured face, brand logo and a "Visit Site" pill.
- **Nav**: translucent white bar, 12px-16px labels with chevrons for menus; utility links Contact, Careers, Partners & Investors in the footer on `#003da5`.
- **Skip link** and **pause** control are accessibility controls in the capture (a white pill and a blue circle).

## Design System Architecture

No public design-system or brand-guideline page was opened for this site, so none is cited. The measured CSS is lean: root variables carry only layout spacing (`--space-x`, `--space-w`, `--space-y`, `--text-start`), and the colour and type values are applied directly, so the de-facto system is a single typeface, one blue with white and a tint, and a rounded shape set. Measured from `https://us.pg.com/` (`web/data/extracted/procter-and-gamble.json`).

## Do's and Don'ts

- Do use `#003da5` for text, outline borders and primary fills.
- Do put content on white or `#f2f7ff` bands.
- Do round buttons at 44px and mask imagery as circles or arches.
- Do set labels uppercase at 800 weight, headlines at 700.
- Don't use grey text; the measured text colours are only blue and white.
- Don't add hard shadows; use the 3-5% black blur shadows.
- Don't tokenise brand-logo colours inside medallions.
- Don't set body copy at 400 by default; 600 is the measured body weight.

## Responsive Behavior

The mobile pass recorded type: h1 40px/48px, 700 (from 64px); mobile size distribution 16px (468 characters), 14px (464), 13px (375), 28.8px (41), 19.2px (32). Layout, carousel behaviour and nav form on mobile were not measured.

## Iteration Guide

1. Canvas `#ffffff`, ink and primary `#003da5`, section tint `#f2f7ff`.
2. Montserrat only: 700 64px display, 800 16px labels, 600 16px body.
3. Buttons: 44px radius, 46px high; filled for the main action, outlined for the rest.
4. Round every image: circle or arch masks, 32px cards.
5. Re-measure: `node web/scripts/extract-tokens.mjs --slug=procter-and-gamble --url=https://us.pg.com/ --force --no-motion`, then `node web/scripts/verify-designs.mjs --slug=procter-and-gamble`.
