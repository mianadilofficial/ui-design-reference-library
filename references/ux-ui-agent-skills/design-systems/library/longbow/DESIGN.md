---
version: alpha
name: "Longbow"
category: "Tech & AI"
description: "Longbow (British hand-built featherweight sports cars, Webflow build at db-longbow.webflow.io): Bebas Neue wordmark, EB Garamond italics, Geist Mono uppercase labels, grey canvas #888c8f, white primary #ffffff, 12px radius, studio car photography."
colors:
  canvas: "#888c8f"
  ink: "#000000"
  primary: "#ffffff"
  surface-3: "#191919"
  ink-3: "#ffffff99"
  hairline: "#ffffff33"
  link-bg: "#3a3a3a33"
typography:
  display:
    fontFamily: "\"Ebgaramond Variablefont Wght 0\", Arial, sans-serif"
    fontSize: 28.624px
    fontWeight: 400
    lineHeight: 24.3304px
    letterSpacing: "-0.85872px"
  display-mobile:
    fontFamily: BebasNeueBold, Arial, sans-serif
    fontSize: 120px
    fontWeight: 400
    lineHeight: 96px
    letterSpacing: "-7.2px"
    textTransform: uppercase
  heading:
    fontFamily: "\"Ebgaramond Variablefont Wght 0\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 20.4px
    letterSpacing: "-0.72px"
  body:
    fontFamily: "\"Geist Mono V4\", Arial, sans-serif"
    fontSize: 12.448px
    fontWeight: 400
    lineHeight: 18.672px
    letterSpacing: "-0.37344px"
    textTransform: uppercase
rounded:
  xs: 12px
  pill: 9999px
spacing:
  s1: 0.29px
  s2: 1px
  s3: 1.24px
  s4: 2.07px
  s5: 2.66px
  s6: 6px
  s7: 10px
  s8: 10.26px
  s9: 15.03px
  s10: 16px
components:
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.display}"
    padding: 25.68px 22.88px
    transform: matrix(1, 0, 0, 1, 0, 0)
---

## Overview

The measured page is a Webflow-hosted build of the Longbow Motors site (https://db-longbow.webflow.io/, titled "Longbow | British Hand-Built Featherweight Sports Cars"); it is the brand's own site content on a webflow.io address and carries the enquiry address enquiries@longbowmotors.com. The page is long, 14662px at 1280px, and is built from full-width studio photographs of two cars, a green Speedster and a grey and black Roadster, laid on a visible hairline grid of columns and rows with small square registration marks at the crossings.

The top of the capture shows a translucent floating header with a menu icon, the condensed LONGBOW wordmark and a "MODELS +" label. A huge Bebas Neue LONGBOW is cropped at the half-way column, and beside it a column of copy reads "Be moved — At The Speed Of Lightness", in an italic serif, followed by uppercase mono text beginning "CRAFTSMANSHIP THAT DOESN'T DISTRACT, UNITING A TRINITY OF DRIVER, ROAD AND VEHICLE". Model cards sit over the photographs: "Speedster Limited edition", "£125,000 / RESERVATION", a thumbnail, and a white "Reserve +" button; a second card does the same for "Roadster Autograph Edition". Below, oversized words spelling "A NEW SPECIES" are cropped by the card edges. A body paragraph begins "LONGBOW IS THE SPIRITUAL SUCCESSOR TO LEGENDS LIKE THE LOTUS".

The feeling is engineering-drawing meets editorial: a technical grid, monospaced captions, and a serif for the emotional lines.

Microcopy is split into two voices. Emotional statements are in sentence case and italic serif ("Be moved — At The Speed Of Lightness"), while facts are in uppercase mono ("£125,000 / RESERVATION", "CRAFTSMANSHIP THAT DOESN'T DISTRACT"). Calls to action are minimal: "Reserve +" and "MODELS +" both end with a plus sign, which signals expansion rather than navigation. The contact link in the footer area is an email address, and its hover state replaces the characters with a scrambled string of binary-looking digits, a playful detail recorded in the hover measurement. Words such as "Speedster", "Roadster", "Limited edition", "Luminary edition" and "Autograph Edition" name the products and editions listed in the model menu.

## Colors

The page is a cool mid-grey, #888c8f, which the stylesheet names --background; the root variables also define --background-alt as black (#000) and --grey as #191919. Black dominates the measured background area (6618), usually as the layer under imagery. White and translucent whites carry everything else: text at #ffffff (3639 characters), #ffffff99 (60) and a ladder of translucent white fills and lines (--primary-5 #ffffff0d, --primary-10 #ffffff1a, --primary-20 #fff3, --primary-40 #fff6, --primary-60 #fff9). The main variable --primary is white. Black text (#000000, 450 characters) appears on the white Reserve buttons and light cards. The single measured border color is #ffffff33, which draws the grid hairlines. A faint dark fill, #3a3a3a33 (the --grey-20 variable), backs link pills.

- Canvas #888c8f; ink #000000; primary #ffffff.
- surface-3 #191919; ink-3 #ffffff99; hairline #ffffff33; link-bg #3a3a3a33.

The car paint colors in the photographs, notably the deep green of the Speedster and the copper-brown leather, are the only saturated colors on the page and are not interface tokens.

## Typography

Three families form the system. Geist Mono (named "Geist Mono V4" in the stylesheet) handles all small uppercase text: 12.448px, weight 400, line-height 18.672px, letter-spacing -0.37344px, 3424 characters, the body style. EB Garamond (loaded as a variable font) sets the display lines in italic and roman: 28.624px with -0.85872px tracking on a 24.3304px line-height, and a 24px heading on 20.4px with -0.72px tracking. Bebas Neue sets the LONGBOW wordmark and very large statements; the measured sizes include 207.152px and 266.064px on desktop, and the mobile h1 uses 120px on 96px with -7.2px tracking, uppercase.

Tracking is tight everywhere (about -3 percent on mono, -3 percent on serif lines, -6 percent on the Bebas wordmark). Lines are set solid or tighter than the font size, so the serif lines overlap slightly in the cards. Only weight 400 appears in the measured weights (4149 characters).

## Layout

A visible grid defines the page. The capture shows four columns, with 1px hairlines in #ffffff33 and small square nodes where lines cross; images and cards are positioned on cells. Copy columns occupy a single cell at the right; cards occupy one or two cells and are centred in them. The header floats as a translucent rounded bar with the logo centred. Gaps measured most often are 32px, 16px, 10px, 40px and 18px; the most common padding is 10px (weight 40), followed by 2.07152px, 1.2448px and 2.66064px; the link pills use 25.68px 22.88px.

## Elevation & Depth

No box shadows were measured. Depth comes from layering translucent panels (--primary-5 to --primary-60 whites, and --background-alt-05 and -25 blacks) over photography, and from the blurred, frosted look of the cards and header in the capture. The photography itself is lit as in a studio, with soft floor reflections.

## Shapes

Two radii are measured: 12px, on cards and small pills, and 1280px (weight 4, a full capsule), on the header and link capsules, which generates the pill token at 9999px. The Reserve buttons and thumbnails in the capture are rectangular, with square corners.

## Components

- **Header**: translucent capsule, menu icon, centred wordmark, "MODELS +" label in Geist Mono.
- **Model card**: frosted translucent panel, 12px radius, centred EB Garamond name with an italic edition line, a price line "£125,000 / RESERVATION" in mono, a thumbnail, and a button.
- **Reserve button**: white rectangular button with black mono text and a plus sign.
- **Link**: Garamond 28.624px, white text on a #3a3a3a33 pill with padding 25.68px 22.88px.
- **Tag**: small pill label ".LONGBOW .L".
- **Footer link**: the contact address is white and underlined; its hover state replaced the text in the measurement.

## Design System Architecture

No public design system or brand guideline for Longbow was found on the pages opened. The site is a Webflow project whose :root publishes named variables: --background #888c8f, --background-alt #000, --grey #191919, --primary white with the --primary-5 to --primary-60 alpha ladder, --background-alt-05/-25 alpha blacks, --size--header-height 4rem and font variables (--font-family--1 "Bebas Neue", --font-family--2-variable EB Garamond, --font-family--3 "Geist Mono"). It is a de-facto system of alpha steps over one grey. Source page: https://db-longbow.webflow.io/.

## Do's and Don'ts

- Do use the grey #888c8f and black as grounds and white at stepped opacities for text and lines.
- Do pair uppercase mono labels with italic serif titles and condensed sans giant words.
- Do show cars full bleed and place frosted cards over them.
- Do keep a hairline grid with registration nodes.
- Don't add saturated interface colors; the cars provide color.
- Don't use bold weights; only 400 is measured.
- Don't add drop shadows.

## Responsive Behavior

The 390px mobile pass measured the h1 "LONGBOW" in Bebas Neue (BebasNeueBold) at 120px on 96px with -7.2px tracking, white; an EB Garamond h2 "Speedster" at 28px on 23.8px with -0.84px tracking; and body text in Geist Mono at 14px on 21px with -0.42px tracking, uppercase. Mobile navigation text was empty in the measurement. Grid column counts and breakpoints were not measured.

## Iteration Guide

1. Start from #888c8f, black and white with the alpha ladder.
2. Set labels in Geist Mono 12.448px uppercase, titles in EB Garamond, and display words in Bebas Neue.
3. Lay a hairline grid in #ffffff33 and place frosted 12px cards on it.
4. Use white rectangular buttons for reservations.
5. Verify: node web/scripts/verify-designs.mjs --slug=longbow.
