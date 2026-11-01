---
version: alpha
name: FamilySearch
category: "Design Systems"
description: "FamilySearch's global homepage (www.familysearch.org/en/global) is a warm, humanist genealogy site: HeritageHeadings and HeritageBody sans faces, near-black #202121 text on a #fefefe canvas, one deep teal #057091 (hover #0383a4) for 4px-radius uppercase buttons, full-bleed documentary photography and soft flat illustrations."

colors:
  canvas: "#fefefe"
  ink: "#202121"
  primary: "#057091"
  on-primary: "#fefefe"
  surface-tint: "#f5f6f6"
  ink-secondary: "#000407ac"
  ink-on-dark: "#ffffff"
  ink-tertiary: "#00070a9b"
  link-teal: "#005c82"
  hairline: "#00090d77"
  primary-hover: "#0383a4"
  nav-text: "#000101df"
typography:
  display:
    fontFamily: "\"HeritageHeadings:Sans\", HanaMinBFont, ui-sans-serif, system-ui, sans-serif, Tofu"
    fontSize: 45.6976px
    fontWeight: 500
    lineHeight: 49.3534px
  display-mobile:
    fontFamily: "\"HeritageBody:Sans\", HanaMinBFont, ui-sans-serif, system-ui, sans-serif, Tofu"
    fontSize: 23.04px
    fontWeight: 600
    lineHeight: 27.648px
  heading:
    fontFamily: "\"HeritageBody:Sans\", HanaMinBFont, ui-sans-serif, system-ui, sans-serif, Tofu"
    fontSize: 27.04px
    fontWeight: 600
    lineHeight: 32.448px
  subheading:
    fontFamily: "\"HeritageBody:Sans\", HanaMinBFont, ui-sans-serif, system-ui, sans-serif, Tofu"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 19.2px
  body:
    fontFamily: "\"HeritageBody:Sans\", HanaMinBFont, ui-sans-serif, system-ui, sans-serif, Tofu"
    fontSize: 20.8px
    fontWeight: 400
    lineHeight: 31.2px
  button:
    fontFamily: "\"HeritageBody:Sans\", HanaMinBFont, ui-sans-serif, system-ui, sans-serif, Tofu"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 4px
  pill: 9999px
spacing:
  s1: 1px
  s2: 6px
  s3: 8px
  s4: 11px
  s5: 12px
  s6: 13px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 13px 20px
    height: 44px
    boxShadow: rgba(0, 0, 0, 0.2) 0px 1px 3px 0px, rgba(0, 0, 0, 0.14) 0px 1px 1px 0px, rgba(0, 0, 0, 0.12) 0px 2px 1px -1px
    transform: matrix(1, 0, 0, 1, 0, 0)
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 13px 20px
    height: 44px
    boxShadow: rgba(0, 0, 0, 0.2) 0px 1px 3px 0px, rgba(0, 0, 0, 0.14) 0px 1px 1px 0px, rgba(0, 0, 0, 0.12) 0px 2px 1px -1px
    transform: matrix(1, 0, 0, 1, 0, 0)
  link:
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 13px 12px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-text}"
    padding: 0px 24px
  nav-link:
    textColor: "{colors.link-teal}"
    typography: "{typography.button}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 0px 8px 1px
    height: 36px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-secondary}"
    borderColor: "{colors.surface-tint}"
---

## Overview

The measured page is the English global homepage of FamilySearch, titled "Find your family. Free Genealogy Archives" (final URL www.familysearch.org/en/global). It is the front door of a free genealogy service, and its design is built to feel welcoming and unintimidating rather than technical. A slim white navigation bar carries the FamilySearch logo, the links Family Tree, Search, Memories, Get Involved and Activities, three utility icons, "SIGN UP" and an outlined "SIGN IN". Beneath it, a full-width hero shows a smiling boy holding an old portrait photograph, with the headline "Find your family. Discover yourself." set in a serif-looking display face at left, a short paragraph and a solid teal "GET STARTED" button.

The second band is white with a flat illustration of a person watering a heart-shaped plant and a search form (First Names, Last Names, Place Lived, Birth Year, a grey SEARCH button) under the heading "Start discovering your family story". The third band is a full teal block ("Discover your family's story through historical records.") with an image of fanned historical documents and a white "START SEARCHING" button. The fourth band is a pale world map dotted with small family-tree cards and portraits, introduced by "Find your family in the world's largest shared family tree." and another teal button.

The voice is plain, personal and reassuring: second person, short sentences, the word "free" emphasised, emotional verbs such as "discover", "bring to life" and "find".

## Colors

- **canvas (#fefefe)** is the page background; **ink (#202121)** is the most-read text colour and the headline colour on the hero and cards.
- **primary (#057091)** is the fill of every solid button and of the full-width teal band; **on-primary (#fefefe)** is the label on it; **primary-hover (#0383a4)** is the measured hover fill.
- **link-teal (#005c82)** is a darker teal used for navigation and text links; **nav-text (#000101df)** is the near-black translucent nav label colour.
- **ink-secondary (#000407ac)** and **ink-tertiary (#00070a9b)** are translucent near-black greys for secondary copy and placeholders; **ink-on-dark (#ffffff)** is text on the teal band.
- **surface-tint (#f5f6f6)** is the pale grey used for the map section and dividers; **hairline (#00090d77)** is the translucent border colour of inputs and the outlined Sign In button.

A magenta (#ca0d5e) is measured on a small amount of text on the page but was not identified as brand UI, so it is not tokenised. Colours are cool teal on neutral, and warmth comes only from photography and illustration.

## Typography

FamilySearch loads two proprietary-looking families, "HeritageHeadings:Sans" (weight 500) and "HeritageBody:Sans" (weights 400 and 700), each with fallbacks HanaMinBFont, ui-sans-serif, system-ui, sans-serif and Tofu. Their licensing is not stated on the page read, so open substitutes are an assumption to be made by whoever implements the style; use a humanist sans such as Noto Sans for body copy.

- **display**: HeritageHeadings, 45.6976px, weight 500, line-height 49.3534px (hero headline). On a 390px viewport the measured h1 role is HeritageBody at 23.04px, weight 600, line-height 27.648px (display-mobile).
- **heading**: HeritageBody, 27.04px, weight 600, line-height 32.448px.
- **subheading**: 16px, weight 600, line-height 19.2px.
- **body**: 20.8px, weight 400, line-height 31.2px.
- **button**: HeritageBody, 16px, weight 400, line-height 16px, uppercase.

The stylesheet defines a modular type scale on a base of 1rem with a ratio of 1.3 (custom properties --text-size-a through --text-size-h), which is the source of the fractional pixel sizes.

## Layout

The page is a stack of full-width bands, each with a two-column composition: copy at one side and a visual at the other, alternating sides. Hero copy is left-aligned in a column that sits comfortably inside the photo's grey gradient; the search band centres its heading and paragraph above a two-column, two-row form. Measured spacing values are 1px, 6px, 8px, 11px, 12px, 13px, 16px, 20px, 24px and 32px; buttons use 13px 20px padding at a height of 44px; the nav has 24px horizontal padding. Density is open: large vertical padding per band, one message and one action per band.

## Elevation & Depth

Depth is limited. Solid buttons carry a Material-style three-layer shadow (rgba(0, 0, 0, 0.2) 0px 1px 3px 0px, rgba(0, 0, 0, 0.14) 0px 1px 1px 0px, rgba(0, 0, 0, 0.12) 0px 2px 1px -1px), which gives them a slight raised feel. Everything else is flat: bands are separated by colour (white, teal, pale grey) and imagery supplies the richness, including a perspective-skewed fan of record documents with their own soft shadow baked into the artwork.

## Shapes

Buttons use a 4px radius (sm) and some small controls 2px (xs). Round avatars and map nodes use a full radius (9999px, pill). The measured set also includes 50% for circles. The overall impression is slightly squared, utilitarian controls beside organic photography.

## Components

- **button-primary** ("GET STARTED"): teal #057091 fill, #fefefe uppercase label at 16px weight 400, 4px radius, padding 13px 20px, height 44px, with the layered shadow above; hover #0383a4.
- **button-secondary** ("CREATE A FREE ACCOUNT"): same measurements.
- **link** ("START SEARCHING" on the teal band): white label in uppercase, 4px radius, 13px 12px padding, on a white box.
- **nav**: #fefefe bar, nav links in near-black, padding 0px 24px; "SIGN IN" is outlined.
- **nav-link**: link-teal #005c82, 16px uppercase.
- **text-input**: black-on-white fields with a thin translucent grey border, height 36px, padding 0px 8px 1px, small floating labels above ("First Names", "Place Lived").
- **footer**: #fefefe background with secondary text and a pale grey (#f5f6f6) border.

A transient error toast ("Please try again in a moment or refresh the page.") appeared in a first capture and was removed by re-running the extractor with stealth mode; it is not part of the brand UI and is not documented.

## Design System Architecture

FamilySearch has a design system named Frontier. The dsUrl https://www.familysearch.org/frontier/styleguide was requested; the server redirected to a Confluence documentation space that requires a login, so its contents could not be read and nothing is taken from it. Whether familysearch.org is built from it is therefore not confirmed here. The homepage's own stylesheet exposes a small custom-property set: two font-family variables (--font-families-headings and --font-families-body), a modular type scale with a 1.3 ratio, and a white-alpha ramp (--white02 through --white100). No public official token source was read, so the de-facto system described here comes from those variables and the measured components.

## Do's and Don'ts

- Do use #057091 for primary actions, with an uppercase 16px label and a 4px radius.
- Do set hero headlines in the heading face at weight 500 and pair them with documentary photography.
- Do keep text near-black (#202121) on light bands and white on teal bands.
- Do alternate white, teal and pale-grey bands.
- Don't round buttons into pills; 4px is the measured radius.
- Don't use the magenta text colour for brand actions.
- Don't use heavy drop shadows; use the three-layer button shadow only.
- Don't reproduce error toasts or cookie dialogs as brand components.

## Responsive Behavior

The hero headline drops from 45.6976px to 23.04px at a 390px viewport (line-height 27.648px), and the face changes from the heading family to the body family at weight 600. The rest of the layout (two-column bands, form grid, world map) was measured only at desktop width, so its mobile behaviour is not specified here. Buttons stay at 44px height, above common touch-target minimums.

## Iteration Guide

1. Set the canvas to #fefefe and the ink to #202121.
2. Make one teal (#057091) uppercase button per band; keep the label at 16px weight 400.
3. Use the 1.3 modular scale from a 1rem base for any new type size.
4. Pair every message with an authentic photograph or soft flat illustration, not abstract graphics.
5. Keep copy second-person and warm.
6. If you need a colour that is not in this file, describe it in words rather than guessing a hex.
