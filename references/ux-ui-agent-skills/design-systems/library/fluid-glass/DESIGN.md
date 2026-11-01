---
version: alpha
name: "Fluid Glass"
category: "Architecture & Interiors"
description: "Fluid Glass (fluid.glass) is a UK bespoke architectural glazing site built on a graphite canvas #212325 with cream #f3f0ec panels, white type, Aeonik Pro for reading text and Aeonik Mono for uppercase micro-labels, square 0px buttons filled #0b1012 and one 16px radius."
colors:
  canvas: "#212325"
  ink: "#ffffff"
  primary: "#0b1012"
  on-primary: "#ffffff"
  surface-2: "#f3f0ec"
  ink-secondary: "#282c2ecc"
  ink-4: "#ffffff99"
  ink-5: "#ffffffcc"
  ink-6: "#50585d66"
  hairline: "#afafaf33"
  nav-bg: "#0e1415cc"
typography:
  display:
    fontFamily: "\"Aeonik Mono\""
    fontSize: 9.6px
    fontWeight: 500
    lineHeight: 8px
    letterSpacing: 0.768px
    textTransform: uppercase
  heading:
    fontFamily: "\"Aeonik Mono\""
    fontSize: 11.2px
    fontWeight: 600
    lineHeight: 14.56px
    letterSpacing: 1.12px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Aeonik Pro\""
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: "-0.64px"
  body:
    fontFamily: "\"Aeonik Pro\""
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 18.72px
  nav:
    fontFamily: "\"Aeonik Pro\""
    fontSize: 8px
    fontWeight: 400
rounded:
  xs: 16px
  none: 0px
  pill: 9999px
spacing:
  s1: 2.4px
  s2: 4px
  s3: 8px
  s4: 9.6px
  s5: 12px
  s6: 16px
  s7: 19.2px
  s8: 24px
  s9: 32px
  s10: 35.2px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
    padding: 12px 19.2px
    height: 33px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
    padding: 12px 19.2px
    height: 33px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-4}"
    rounded: "{rounded.none}"
---

# Fluid Glass

Measured from https://fluid.glass/ (page title "Bespoke Architectural & Structural Glazing UK | Fluid Glass", lang en-GB). The home page is a tall, image-led scroll about architectural glass: a full-bleed photographic hero of a timber-clad house with a corner glazing unit, a floating bottom navigation pill, and a cookie notice in the lower right corner of the capture. The cookie panel is a consent control and is not documented as brand UI.

## Overview

The site presents Fluid Glass as "Glazing specialists" and its hero heading reads "Exceptional glazing for those who build with vision." The voice is calm, confident and architectural: short declarative statements, sentence-case headlines, and tiny uppercase monospace labels for every functional element. The page sections measured from the opened home page are: Glazing specialists, About Fluid Glass, Product collection, Showroom, Featured projects, Client Stories and "Where vision meets execution". Calls to action are plain verbs: Get a quote, Product overview, Who we are, View projects, Our approach, Get in touch.

The look depends on photography doing the emotional work while the interface stays almost invisible. The hero image fills the first screen, the headline is set in light-weight Aeonik Pro, and the only chrome is a small centered logo, a "GET A QUOTE" link at top right and a compact dark navigation pill at the bottom of the viewport. Everything else is typography and flat color blocks.

## Colors

The extraction records the page background as #212325 (the CSS variable `--color-grey`), which covers the largest measured area (weight 11740), followed by cream #f3f0ec (`--color-cream`, 3136), near-black #0b1012 (`--color-black`, 3094) and white #ffffff (3072). Other root variables are `--color-taupe` #d4cec6 and `--color-yellow` #f1a400; the yellow was declared but not measured on any rendered text or surface, so it is not promoted to a token.

- **canvas #212325**: graphite page ground.
- **ink #ffffff**: text on the graphite and photographic areas, with translucent variants #ffffff99 (secondary, used in the footer) and #ffffffcc.
- **primary #0b1012**: the fill of every measured call-to-action and the footer; text on it is #ffffff.
- **surface-2 #f3f0ec**: cream panels, the lightest content surface.
- **ink-secondary #282c2ecc**: the most-read text color by character count (44092 characters), used for dark body copy on light panels.
- **hairline #afafaf33**: borders on the divider and tile edges (135 occurrences).
- **nav-bg #0e1415cc**: the translucent dark navigation bar.

No box shadows were measured. Depth comes from color blocks and photography only.

## Typography

Two families are loaded: Aeonik Pro (weights 400 and 700) and Aeonik Mono (weights 500 and 600). Aeonik Pro carries 46517 characters, Aeonik Mono 2774. Aeonik is a commercial typeface, so a substitute is needed where it is not licensed; a neutral grotesque for Aeonik Pro and a plain monospace for Aeonik Mono keep the pairing, but the metrics of the originals are not reproduced.

- **display** (token for the measured h1 candidate, the "GET A QUOTE" label): Aeonik Mono 9.6px, weight 500, line-height 8px, letter-spacing 0.768px, uppercase.
- **heading**: Aeonik Mono 11.2px, weight 600, line-height 14.56px, letter-spacing 1.12px, uppercase. The "GLAZING SPECIALISTS" eyebrow uses it.
- **subheading**: Aeonik Pro 32px, weight 400, line-height 32px, letter-spacing -0.64px. Product names such as "Doors" use it.
- **body**: Aeonik Pro 14.4px, weight 400, line-height 18.72px.
- **nav**: Aeonik Pro 8px, weight 400.

The extractor chose a small label as the h1 because the hero text sits in an element named `largest-hero-text`. The measured size frequencies also show Aeonik Pro at 51.2px with letter-spacing -1.536px (274 characters) and 38.4px with -1.152px (29 characters); these are the large headline sizes. They are described here rather than tokenized because their weight and line-height were not recorded. The most common size by characters is 12.8px (45622). Tracking tightens as size grows, from +0.768px on the 9.6px mono labels to -1.536px on the 51.2px headline.

## Layout

The page is a single long scroll (scrollHeight 2400 in the measured window with an inner scroller of 8696px). Measured paddings include 24px (224 uses), 12px (123), 8px and 19.2px; gaps are 16px (240), 9.6px (226) and 2.4px (224). The spacing tokens s1 to s10 record these values: 2.4px, 4px, 8px, 9.6px, 12px, 16px, 19.2px, 24px, 32px and 35.2px. The root defines `--size: 1600` and `--font-s: calc((100vw/var(--size))*10)`, so type and spacing are scaled from the viewport width against a 1600px design reference. This is declared in the site's CSS variables, which is why many measured pixel values are fractional (9.6px, 14.4px, 19.2px).

The hero is full-bleed imagery with the headline set near the bottom edge and the navigation pill centered beneath it. Content sections use alternating graphite, cream, black and white fields.

## Elevation & Depth

No shadows were measured (the boxShadows frequency list is empty). Hierarchy is created by contrast between flat fields: graphite #212325, cream #f3f0ec, black #0b1012 and white. The header uses a translucent dark fill #0e1415cc over the imagery, which is the only transparency-based layering measured besides the 1px-scale hairlines #afafaf33, #ffffff33 and #ffffff1a.

## Shapes

Three radii exist. Buttons, the navigation bar, links and the footer are 0px square. A 16px radius appears on 18 measured elements, and 50% (112 elements) produces circles for small round markers. The token `pill: 9999px` is carried from the generated set. The square, uppercase buttons with a mono label give the interface a technical, drawing-sheet character that contrasts with the soft photography.

## Components

- **button-primary**: background #0b1012, text #ffffff, Aeonik Mono 9.6px uppercase, radius 0px, padding 12px 19.2px, height 33px. The measured labels are PRODUCT OVERVIEW, VIEW PROJECTS, OUR APPROACH and WHO WE ARE; each label is duplicated in the DOM (the text reads twice), which is how the extractor saw it.
- **button-secondary**: measured with the same fill, padding and height as the primary, so the two are distinguished only by position.
- **link / nav-link**: white Aeonik Pro 8px.
- **nav**: a header with fill #0e1415cc, 40px high, white 9.6px uppercase mono label "HOME" in the pill, no radius measured.
- **footer**: background #0b1012, text #ffffff99, 11.2px Aeonik Pro; contains the copyright "©2026, Fluid Glass", social links (Instagram, YouTube, LinkedIn, X) and a privacy link.

No input or card roles were detected. The cookie banner (Accept, Deny) is a consent widget and is excluded.

## Design System Architecture

No public design system or brand guideline page was found: the opened home page mentions none. The de-facto system is visible in the shipped CSS variables on the root: color tokens `--color-white`, `--color-grey`, `--color-cream`, `--color-taupe`, `--color-yellow` and `--color-black`; font tokens `--font-f-aeonik-mono` and `--font-f-aeonik-pro`; a viewport-scaling pair `--size` and `--font-s`; and a named easing set (`--ease-out-cubic`, `--ease-out-quart`, `--ease-in-out-quart`, `--ease-in-out-quad`, `--ease-in-out-cubic`, `--ease-out-quad`, `--ease-none`). Source page: https://fluid.glass/. The easing curves show that motion is part of the system, although motion was not recorded for this document.

## Do's and Don'ts

- Do keep the canvas graphite #212325 with white text and let photography fill the first screen.
- Do set every functional label (buttons, eyebrows, nav) in Aeonik Mono uppercase with positive tracking.
- Do set headlines in Aeonik Pro at light weight with negative tracking that grows with size.
- Do keep buttons square at 0px with #0b1012 fill.
- Don't add drop shadows; none are measured.
- Don't introduce bright accents: the declared yellow #f1a400 was not seen on the rendered page.
- Don't document the cookie banner controls as brand components.

## Responsive Behavior

The extraction includes a second, mobile pass that recorded only text roles and font sizes. In that pass the h2 "GLAZING SPECIALISTS" measured 14.56px with letter-spacing 1.456px, body text 16.64px with line-height 21.632px, the primary button label 12.48px with letter-spacing 0.9984px, and the nav label 12.48px with line-height 52px. Mobile size frequencies: 16.64px (45931 characters), 12.48px (2221), 14.56px, 33.28px, 24.96px, 41.6px and 20.8px. Because the root scales type by `--font-s`, these larger mobile sizes correspond to the viewport-based scaling declared in the CSS. Layout reflow, breakpoints and menu behavior were not measured.

## Iteration Guide

1. Start from canvas #212325, ink #ffffff, primary #0b1012.
2. Pick one photograph and let it fill the first viewport; place a sentence-case Aeonik Pro headline at the bottom.
3. Use Aeonik Mono 9.6px uppercase (0.768px tracking) for buttons and a 11.2px/600 mono eyebrow for section labels.
4. Build content bands in cream #f3f0ec, graphite and black; separate with #afafaf33 hairlines.
5. Keep corners at 0px and use 16px only for contained media tiles.
6. When extending, measure the new page with the extractor before adding tokens.
