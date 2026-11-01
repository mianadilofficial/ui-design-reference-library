---
version: alpha
name: Equinor
category: "Energy & Climate"
description: "Equinor corporate home page: white canvas, #3d3d3d text, Equinor typeface at 65.3px/81.7px with -3.27px tracking and 17.7px body, Energy Red #ff1443 arrows and links, slate #243847 footer, soft layered card shadows and 6px/13px card radii."
colors:
  canvas: "#ffffff"
  on-primary: "#ffffff"
  ink: "#3d3d3d"
  slate-blue: "#243847"
  surface-warm: "#ffede0"
  surface-moss: "#f2f7f8"
  hairline: "#707070"
  primary: "#ff1443"
typography:
  display:
    fontFamily: equinor, "equinor Fallback"
    fontSize: 65.328px
    fontWeight: 400
    lineHeight: 81.66px
    letterSpacing: "-3.2664px"
  display-mobile:
    fontFamily: equinor, "equinor Fallback"
    fontSize: 40.023px
    fontWeight: 400
    lineHeight: 46.907px
    letterSpacing: "-2.00115px"
  subheading:
    fontFamily: equinor, "equinor Fallback"
    fontSize: 24.032px
    fontWeight: 400
    lineHeight: 30.04px
  body:
    fontFamily: equinor, "equinor Fallback"
    fontSize: 17.664px
    fontWeight: 400
    lineHeight: 24.7296px
  nav:
    fontFamily: equinor, "equinor Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: equinor, "equinor Fallback"
    fontSize: 15.904px
    fontWeight: 500
    lineHeight: 21.2053px
rounded:
  xs: 3px
  sm: 6px
  md: 13px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 24px 16px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.08) 0px 1px 3px 0px, rgba(0, 0, 0, 0.07)
      1px -1px 2px 0px, rgba(0, 0, 0, 0.2) 0px 1px 2px 0px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1)
      0px 2px 4px -2px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 24px 16px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.08) 0px 1px 3px 0px, rgba(0, 0, 0, 0.07)
      1px -1px 2px 0px, rgba(0, 0, 0, 0.2) 0px 1px 2px 0px
  footer:
    backgroundColor: "{colors.slate-blue}"
    textColor: "{colors.canvas}"
    padding: 24px 0px
---

## Overview

equinor.com is the corporate home page of Equinor, titled "Equinor: Providing reliable energy for a world in transition." (lang en-GB). It is a light, quiet, editorial site. The first screen is a full-width aerial photograph of combine harvesters on a wheat field, with the headline "How the gas we produce supports both energy and food security" set large in a thin-looking grey sans, and three white story cards overlapping the bottom of the image: "From natural gas to food on the table - The story that connects grain fields in Lithuania to gas reservoirs beneath the Barents Sea", "What is energy security? - Here's what it means, why it matters and how Equinor helps strengthen it." and "The role of natural gas - Learn how natural gas underpins modern society." Each card ends in a red arrow.

Below the hero a narrow column states the company's position: "In a world shaped by uncertainty, growing demand and the need to reduce emissions, we deliver secure and lower-emission energy." followed by two smaller paragraphs and the bold sign-off "Energy for people. Progress for society. Searching for better". Four underlined link rows follow (About us, Open positions & careers, Equinor in brief, Våre nettsider på norsk). "Latest news" shows three dated cards ("8 OCTOBER 2026 - Gas discovery at the Gullfaks field in the North Sea", "Updated cost estimate for the Snøhvit Future project", "Quarterly update prior to financial reporting") and a "More news" block. The page is 5,546px tall with 602 visible elements.

The header is white with the red Equinor wordmark and its spark symbol at left, then Search, an EN / NO language switch and a Menu with a two-line icon.

## Colors

The brand red is Energy Red #ff1443 (`--color-energy-red-100`), measured on navigation and arrow icons and used for every actionable glyph; the wordmark is in the same red in the capture. Text is a dark neutral #3d3d3d (`--color-grey-90` / `--color-slate-80`), and the deep slate blue #243847 (`--color-slate-blue-95`) is the footer ground and the heading color in dark sections. Surfaces: white #ffffff, #f8f8f8 and #f2f7f8 (`--color-moss-green-50`) for cards and bands, #ffede0 (`--color-spruce-wood-90`) as a warm tint, hairline grey #707070 (`--color-grey-60`). The declared palette includes named ramps: slate-blue (#51606c at 90), north-sea (#a8c3db at 50, #2a4d74 at 80, #051b33 at 90), moss-green (#00727a at 95, #daeaec at 60), norwegian-woods (#007079 at 100, #e6faec at 40, #c3e4ce at 60), autumn-storm, spruce-wood, mist-blue, yellow and clear-red (#eb0000). Photography supplies most of the color on the page.

The generator assigned `primary` to the footer's slate blue; the red is the measured action color, so `primary` is set to #ff1443 and the slate is kept as `slate-blue`.

## Typography

One brand family, Equinor (with a generated "equinor Fallback"), declared as `--font-sans` "Equinor", "Open Sans", sans-serif. Measured desktop styles at weight 400: display 65.33px/81.66px with -3.27px tracking (`--tracking-display` is -3px), subheading 24.03px/30.04px, body 17.66px/24.73px, navigation 16px/24px and link 15.9px/21.2px at 500. Weights 400, 500 and 600 appear, and `--font-weight-semibolder` is 650 and bold 700. The headline is light in feel because of the tight tracking and the grey ink. Line heights in the root are named (`--leading-lofty` 1.02, `--leading-misty` 1.25, `--leading-earthy` 1.172, `--leading-cloudy` 1.4). Equinor is a proprietary typeface; Open Sans is the declared fallback, which is the substitute to use.

## Layout

Content is a centered narrow column (roughly the middle third of the viewport) for text and a wider three-up grid for cards. Variables declare `--spacing-content` 1920px and `--spacing-fullwidth` 2560px, a topbar 85px (64px when sticky), and carousel card widths (350px, 383px, 692px and 980px). Measured gaps: 8px, 4px, 24px, 32px, 12px, 16px, 48px and 208px.

## Elevation & Depth

Cards use a layered shadow: rgba(0, 0, 0, 0.08) 0 1px 3px, rgba(0, 0, 0, 0.07) 1px -1px 2px and rgba(0, 0, 0, 0.2) 0 1px 2px. The header uses rgba(0, 0, 0, 0.1) 0 4px 6px -1px and rgba(0, 0, 0, 0.1) 0 2px 4px -2px. `--drop-shadow-md` is 0 3px 3px #0000001f. The hero cards float over the photograph on the first shadow.

## Shapes

Radii measured: 3px, 6px (hero cards, links), 13px (news cards) and a full pill; the theme declares `--radius-2xs` .1rem, `--radius-sm` .25rem, `--radius-md` .375rem, `--radius-lg` .5rem and `--radius-base` 10px. Cards are softly rounded rectangles; link rows are square with an underline.

## Components

Story card: white, 6px radius, padding 24px 16px, small kicker line at 15.9px, body title at 24px, red arrow at the bottom left. News card: #f8f8f8 background, 13px radius, a photograph on top, uppercase date line, 24px title, 15.9px summary and a red arrow at bottom right. Link row: 15.9px text with a 1px grey underline across the column and a red arrow at the right (a diagonal arrow for the external Norwegian site). Header: white with a shadow, wordmark, Search, language switch (EN in bold, NO regular) and Menu. Footer: slate #243847 with white text and 24px vertical padding.

## Design System Architecture

No public design system documentation was found or opened. The shipped CSS is a Tailwind 4 theme with 113 root variables: named brand colors (`--color-energy-red-100`, `--color-slate-blue-95`, `--color-moss-green-95`...), Tailwind default grays in oklch, `--spacing-*` layout sizes, `--radius-*`, `--leading-*`, `--tracking-*`, `--ease-*` easing and `--font-*`.

## Do's and Don'ts

Do use Energy Red only for actions and the wordmark. Do keep text #3d3d3d on white or pale cards. Do set the headline at 65px with strong negative tracking and the body at 17.66px. Do keep a narrow reading column. Do use photography full-width and let white cards overlap it.

Don't use red for large fills. Don't add Tailwind gray oklch values as brand colors. Don't use heavy weights for headlines; the measured weight is 400. Don't use shadows heavier than the measured layers.

## Responsive Behavior

Measured at 390px: display 40.02px/46.91px with -2.00px tracking, body 16.08px/24.12px, navigation 14.73px/21.04px. Card reflow, menu behavior and hover or focus states were not measured.

## Iteration Guide

For a new page, use a white canvas, #3d3d3d text, 17.66px/24.73px body and a 65px headline over photography, introduce content as 6px-radius white cards with a red arrow, and use #f8f8f8 for news-type cards with 13px radius. Use the slate #243847 for footers. Take extra colors from the named ramps only, and confirm interaction states by measurement.

## Voice and Content Model

Equinor's copy is measured and explanatory. Story cards pose a question or promise an explanation ("What is energy security?", "Here's what it means, why it matters and how Equinor helps strengthen it."), the company statement is a single long sentence with a subordinate clause ("In a world shaped by uncertainty, growing demand and the need to reduce emissions, we deliver..."), and the sign-off is three short phrases in bold: "Energy for people. Progress for society. Searching for better". News items follow a fixed template: uppercase date, a headline in sentence case, and a two-to-four-line summary clipped with an ellipsis, with an arrow for the link. Dates are written in the British format (8 OCTOBER 2026), consistent with the en-GB language attribute. The page offers a Norwegian counterpart through both the EN / NO switch and a text link, "Våre nettsider på norsk", with an outbound arrow. Industrial subjects (an offshore platform, an LNG quay, a data-line image) are shown in clean documentary photographs rather than illustrations.
