---
version: alpha
name: Siemens Healthineers
category: "Healthcare & Wellness"
description: "Siemens Healthineers corporate home: a black #000000 editorial canvas with #e6e6e6 text, a white header, white pill buttons (100px radius, #1a1a1a 18px/600 text, 1px #4d4d4d border), SH Headline bold 30px headlines, Siemens Sans body and an orange #ec6602 hover accent."
colors:
  canvas: "#000000"
  page-body: "#ffffff"
  ink: "#e6e6e6"
  primary: "#ffffff"
  on-primary: "#1a1a1a"
  ink-muted: "#999999"
  hairline: "#4d4d4d"
  primary-hover: "#333333"
  accent-orange-hover: "#ec6602"
  accent-orange-border: "#cf4b00"
typography:
  display:
    fontFamily: "\"SH Headline\", \"Arial Black\", Calibri, sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 35px
  body:
    fontFamily: "\"Siemens Sans\", SH-Bree-Text, \"Open Sans\", Roboto, \"Droid Sans\", \"Segoe UI\", -apple-system, \"system-ui\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 30.0001px
  button:
    fontFamily: "\"Siemens Sans\", SH-Bree-Text, \"Open Sans\", Roboto, \"Droid Sans\", \"Segoe UI\", -apple-system, \"system-ui\", sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 18px
  link:
    fontFamily: "\"Siemens Sans\", SH-Bree-Text, \"Open Sans\", Roboto, \"Droid Sans\", \"Segoe UI\", -apple-system, \"system-ui\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 1px
  sm: 5px
  md: 25px
  lg: 50px
  xl: 56px
  2xl: 100px
  pill: 9999px
spacing:
  s1: 6px
  s2: 9px
  s3: 10px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 15px
  s8: 20px
  s9: 24px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 10px 20px
    height: 50px
    borderColor: "{colors.hairline}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.page-body}"
  button-secondary:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 10px 20px
    height: 50px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.on-primary}"
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 54px 0px
---

## Overview

siemens-healthineers.com is the corporate home page of Siemens Healthineers, titled "Siemens Healthineers | Corporate Home". It is measured at 1280px wide and 9,073px tall. The page opens with a white 180px header (the two-tone teal and orange "SIEMENS Healthineers" logotype at left with a dotted mark, utility links Investors, Talents, Press, Healthcare professionals, a globe icon and "DE | EN" at right) above a black navigation bar with four dropdowns (Products & services, Perspectives, Innovations, Purpose) and a circular search button. The remainder of the page is a black editorial canvas: a large story carousel with an orange line-icon illustration, a "More stories from the medtech world" mosaic, and "Discover our latest topic collections" with abstract orange and teal shapes.

The voice is story-led: each tile carries a small category label ("Oncology", "Cardiology", "Sustainability", "New podcast episode", "#Futureshaper episode") above a bold sentence-case headline such as "How AI could improve communication in breast cancer care". The photography is patient-care and clinician portraits with a dark overlay, mixed with flat illustrations built from orange, teal and white on black.

Interaction hints in the capture include a white circular accessibility button at the right edge under the navigation bar, a round arrow button over the carousel, small orange chevrons beside "See all stories", and a single white dot pager beneath the mosaic. The full-width story rows overlay a white category label and a bold white headline on the lower-left of each photograph, so every tile follows the same label-over-headline pattern, and a statistic tile ("100+ types of cancer") shows that numbers are set large in orange against dark photography.

## Colors

The canvas token is #000000 (background area weight 13,325 on the black editorial part), with #1a1a1a (1,897), #ffffff (169, the header and button fills), #000000cc (137, a translucent black), #333333 (41, the pressed or hover button fill) and #ffffff33 (6). The page-body color is #ffffff and body text on it is #1a1a1a. Text on black is #e6e6e6 (1,800 characters), #ffffff (1,729) and #999999 (663, labels and metadata).

The measured hover accent is orange: navigation links on the white header change from #1a1a1a to rgb(236, 102, 2) (#ec6602) with a bottom border of rgb(207, 75, 0) (#cf4b00). The logotype and illustrations use teal and orange; those fills are image content and were not measured as CSS values. The hairline is #4d4d4d (13 uses), with #404040, #b3b3b3 and #000000 appearing once or twice. Root variables are mostly third-party PDF-viewer and input-focus variables (--highlight-bg-color, --react-pdf-*) and are not brand tokens.

## Typography

Four families were measured: Siemens Sans (3,857 characters), SH Headline (406, bold), SH-Bree-Text (13) and Arial (8). Siemens Sans is loaded at 400 (roman and italic), 600 and 800; SH Headline and SH-Bree-Text bold are also loaded, along with sh-icons and SH Icon icon fonts and shs-corporate. The display role is SH Headline bold 30px / 35px (the story title "How AI could improve communication in breast cancer care", color #e6e6e6) with fallbacks "Arial Black", Calibri. Body is Siemens Sans 18px weight 400 / 30.0001px, buttons are 18px weight 600 / 18px and utility links are 14px / 20px.

Sizes by characters: 18px (2,114), 16.0002px (732), 21px (355), 14px (304), 20px (230), 15px (164), 25px (107), 27px (105), 40px (60). Weights: 400 (2,745), 800 (757), 900 (348), 700 (335), 600 (99). No letter-spacing values were measured. The mix of a heavy, slightly rounded headline face over a neutral sans gives the page a friendly, editorial tone.

## Layout

The desktop width is 1280px with the main story text block 800px wide. The header is 180px tall. The hero carousel mixes one large 800px-wide story with smaller peeking stories to the right and a thin white progress bar below. The stories mosaic alternates 2-up, full-width and 2-up rows with no gaps between photo tiles. Measured paddings: 15px (90 uses), 30px (28), 9px (25), 10px (12), 20px (9), 45px (6); gaps 30px and 12px. The footer is 909px tall with 54px vertical padding.

## Elevation & Depth

Two shadows were measured: rgba(27, 27, 27, 0.2) 0px 4px 7.2px 0px and rgba(0, 0, 0, 0.4) 0px 0px 3px 0px, each on one element. The page is otherwise flat, and every interactive element (pager dot, progress bar, icon buttons, pills) is white on black for maximum contrast: depth is made by black-on-black layering, translucent #000000cc overlays and dark gradients on photographs.

## Shapes

Radii: 50% (22 elements, circular icon buttons such as search and accessibility), 100px (12, pill buttons), 1px (9), 5px (3), and one each of 50px, 56px and 25px. Photo and story tiles are square-cornered. The pill radius on buttons is the signature shape.

## Components

Button-primary (Products & services, Expo Hub, Keynote): #ffffff fill, #1a1a1a Siemens Sans 18px weight 600 text, 1px solid #4d4d4d border, 100px radius, padding 10px 20px, 50px tall (234px wide for Products & services, 152px for Expo Hub). The hover state fill is #333333 with white text. Load more: #1a1a1a fill with #e6e6e6 text and the same 100px radius. Navigation: the white header and black dropdown bar with white labels and chevrons; hover on header links turns text #ec6602. Round icon buttons (search, accessibility, carousel arrow) use a 50% radius. Link: #e6e6e6 14px / 20px on story tiles. Footer: #000000 fill, #e6e6e6 text, 54px vertical padding.

## Design System Architecture

No public design system or brand guideline was opened: the home page links none, and the extractor shows only 11 root custom properties, all from third-party viewers. The de-facto system is a set of corporate fonts (Siemens Sans, SH Headline, SH-Bree-Text, the sh-icons and SH Icon icon fonts) with fixed pixel styles: a pill button, a 50% circular control, hairline #4d4d4d and a #000000 canvas. Color roles are not exposed as variables, so the tokens are taken from computed styles.

## Do's and Don'ts

Do use a black canvas with #e6e6e6 text for editorial surfaces and a white header. Do use pill buttons with a 100px radius, white fill and dark text. Do mix photography with flat orange and teal illustrations. Do label each story with a small category above a bold headline.

Don't use the PDF-viewer highlight colors from the root variables as brand colors. Don't round story tiles; they are square. Don't use heavy shadows; only two faint shadows were measured. Don't set orange as a button fill; orange was measured only as hover text and border color on header links.

## Responsive Behavior

A mobile pass recorded: h1 SH Headline 30px / 35px, body Siemens Sans 18px / 30.0001px, navigation 18px / 30.0001px and button 18px / 18px, the same as desktop. Mobile character usage is led by 18px (2,114), 20px (434), 30px (267), 14px (239), 16.0002px (196) and 15px (164). Mobile layout, breakpoints and menu behavior were not measured.

## Iteration Guide

Rebuild in order: white header with logotype and utility links, black nav bar with dropdowns and the circular search button, story carousel, stories mosaic with category labels, topic collections, black footer. Use canvas #000000, body white #ffffff, ink #e6e6e6, 100px pill buttons, SH Headline for headlines and Siemens Sans for the rest, hover orange #ec6602. Anything not in web/data/extracted/siemens-healthineers.json, such as tablet layouts, is not measured.
