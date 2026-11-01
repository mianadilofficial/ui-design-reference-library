---
version: alpha
name: StringTune
category: "Tech & AI"
description: "Marketing site for StringTune, Fiddle.Digital's CSS-first, JS-light scroll-animation library: #101214 near-black canvas, #e6dfe4 warm grey display text, #ff4f36 red accent, KHTeka and KHTekaMono type, 84.17px display, glass pill buttons with 20px radius."
colors:
  canvas: "#101214"
  ink: "#ffffff"
  primary: "#ff4f36"
  on-primary: "#e6dfe4"
  surface-light: "#dad3dc"
  ink-muted: "#a399a8"
  ink-dark: "#544d56"
  ink-dark-alpha: "#544d5633"
  button-primary-bg: "#a7a7b415"
typography:
  display:
    fontFamily: KHTeka, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 84.1745px
    fontWeight: 400
    lineHeight: 66.3386px
    letterSpacing: "-1.68349px"
  display-mobile:
    fontFamily: KHTeka, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 44.3077px
    fontWeight: 400
    lineHeight: 39.8131px
    letterSpacing: "-0.886153px"
  body:
    fontFamily: KHTeka, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: KHTeka, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 15.0038px
    fontWeight: 400
    lineHeight: 18.0045px
rounded:
  xs: 9px
  sm: 11.26px
  md: 15px
  lg: 15.54px
  xl: 20px
  2xl: 26.66px
  3xl: 35.54px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5.63px
  s4: 8px
  s5: 11.26px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 22.53px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    padding: 4px 26.66px
    height: 32px
    boxShadow: rgba(84, 77, 86, 0.05) 0px 16px 16px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  button-secondary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    padding: 4px 26.66px
    height: 32px
    boxShadow: rgba(84, 77, 86, 0.05) 0px 16px 16px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
    padding: 63.1467px 0px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

StringTune is the product site of an open JavaScript library for "smooth scrolling and core web animations", labelled "Built by Fiddle.Digital" and "v_ 1.2.7" on the opened page, with the tagline "CSS-First. JS-Light". The page is long (measured scrollHeight 2400 with an inner scroller of 36038px) and opens on a dark hero with a heading "Master Your Skills", a rendered 3D sword wrapped in dark straps with red highlights, and a very large "StringTune" wordmark at the bottom. A narrative runs through the copy: a sword-and-spirit metaphor ("Concentrate", "Keep Scrolling", "The Spirit Awakened") that equates mastering the sword with mastering the library.

Sections named on the opened page include Principles (Modular Architecture, Attribute-Based Integration, Effortless Initialization, Wide Range of Effects, Performance Oriented), Performance Supervision, Ultra Optimized, for Developers & Designers, Who It's For, TUNE and Code With Clarity. The voice is playful and literary for a developer tool, with short imperative lines ("Animate with Elegance, Not Overhead.").

## Colors

The root variables name the palette directly: `--c-black` #101214, `--c-grey` #e6dfe4, `--c-white` #fff, `--c-purple` #a399a8, `--c-berry` #c8c2cf, `--c-grey-dark` #544d56, `--c-red` #ff4f36, plus `--c-blue` #3687ff, `--c-yellow` #f4ff1e and `--c-green` #4dbf9d.

- **Canvas #101214**: the dominant background (area weight 13379).
- **Ink #ffffff**: nav and link text.
- **on-primary #e6dfe4**: warm light grey; the headline text color and the label color on the glass buttons. The second-largest background area (10718) is also #e6dfe4, used on light panels further down the page.
- **Primary #ff4f36**: the red accent. It is the only measured border color (two elements) and appears in the logo mark and the sword highlights; it is not a button fill.
- **surface-light #dad3dc**, **ink-muted #a399a8**, **ink-dark #544d56** and **ink-dark-alpha #544d5633**: the light panel tint, secondary text, and a dark text color with a translucent variant.
- **button-primary-bg #a7a7b415**: the near-transparent fill of the pill buttons (alpha 0x15).

Blue, yellow and green variables are declared but were not measured in use, so they are not tokens.

## Typography

Two commercial-style families are loaded: KHTeka for text and KHTekaMono for small labels (the nav block measures 11.2556px KHTekaMono). Every measured weight is 400.

- **display**: KHTeka 84.1745px / 66.3386px, letter-spacing -1.68349px. The line height is below the font size, so the three lines of "Master Your Skills" overlap tightly.
- **display-mobile**: 44.3077px / 39.8131px, letter-spacing -0.886153px (390px pass).
- **body**: KHTeka 20px / 24px.
- **link**: KHTeka 15.0038px / 18.0045px.

Other sizes measured by character weight are 26.66px (-0.5332px tracking), 47.3719px (-0.947437px), 35.5378px, 63.1467px (-1.26293px) and the giant 225.28px wordmark (-13.5168px tracking). The type scale uses `--type-step: 1.333`, `--body-font-size: 1rem` and `--body-line-height: 1.2`. The font stack falls back through system-ui, -apple-system, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue and sans-serif. The font files' licensing is not stated on the pages opened.

## Layout

Spacing is built around an 8px rhythm with fractional values from a fluid unit: measured paddings 4px, 8px, 26.66px, 16px, 20px, 24px; gaps 8px, 5.63px, 11.26px, 1px. The root declares `--p: 1rem`, `--g-gap: .4rem`, `--vw: 12.8px` and `--vh: 24px`, which are the 1280px viewport divided by 100 and the measured viewport unit used by the script.

The header places the logo and name at left, the "i" circle and the Dev Guides and Skill Hub pills at center right, and a "0%" load indicator at far right. The hero heading sits top left. Large imagery (a WebGL-style render, masonry images fidoru.jpg, control-progress.jpg, ultra-optimized.jpg) dominates the middle of each section. The wordmark and two monospace captions ("FOR SMOOTH SCROLLING AND CORE WEB ANIMATIONS", "CSS-FIRST. JS-LIGHT") sit at the bottom. A floating dialogue bubble ("Hey there, wanderer! ... Next") and a pixel-art character appear in the capture; they are an interactive guide, not part of the grid.

## Elevation & Depth

Shadows are soft and tinted with the muted plum #544d56: `rgba(84, 77, 86, 0.1) 0px 8px 16px 0px` (11 elements), `rgba(84, 77, 86, 0.05) 0px 16px 16px 0px` (9, used on the buttons), `rgba(84, 77, 86, 0.15) 0px 8px 24px 0px`, and inset `rgba(16, 18, 20, 0.1) 0px 0px 8px 4px` on 9 elements. The glass look of the pills comes from the translucent fill plus the soft drop shadow.

## Shapes

Radii measured: 35.5378px (23 elements), 50% (23, circles), 20px (20, the pill buttons), 15.0038px, 26.66px and 15.5378px. The token ladder carries these as 9px through 35.54px plus the pill value. The circular "i" control and avatar shapes use 50%; buttons and cards use 20px.

## Components

- **button-primary** ("Dev Guides") and **button-secondary** ("Skill Hub"): fill #a7a7b415, text #e6dfe4, KHTeka 20px, radius 20px, padding 4px 26.66px, height 32px, shadow rgba(84, 77, 86, 0.05) 0px 16px 16px 0px. The two buttons measure identically.
- **link**: KHTeka 15.0038px white (for example "Fiddle.Digital").
- **nav**: KHTekaMono 11.2556px, white, containing the name, the "i" control, the two pills and the percentage indicator; top padding 63.1467px.
- **card**: radius 20px on the canvas color, holding thumbnails such as the Skill Hub teaser.
- **footer**: large 63.1467px / 49.7664px display lines ("Attribute driven. No JS until you truly need it.") and the line "StringTune (c) Fiddle.Digital Product".
- **Dialogue bubble**: a frosted panel with a "Next" button; this is a site-specific guide and is described, not tokenized.

## Design System Architecture

No public design system or brand guideline is published: the page opened (https://string-tune.fiddle.digital) links to Fiddle.Digital, the npm package https://www.npmjs.com/package/@fiddle-digital/string-tune, a Discord, and a Codrops article, but no design-system page. The de-facto system is the root variable set: color names `--c-*`, easing curves (`--f-fast` cubic-bezier(0,.81,.35,1), `--f-smooth` cubic-bezier(.5,0,.3,1), `--f-smooth-alt`, `--f-bounce`, `--f-bounce-alt`), the type step `--type-step: 1.333`, spacing `--p` and `--g-gap`, and fonts `--font` and `--font-mono`. Sixty root variables were recorded in total. Behavior is configured by HTML attributes per the product's own copy ("Attribute-Based Integration").

## Do's and Don'ts

Do:
- Keep the near-black #101214 canvas and the warm grey #e6dfe4 for headings.
- Reserve #ff4f36 for logo and highlight accents.
- Use translucent glass pills with 20px radius for navigation actions.
- Set labels in KHTekaMono at small sizes and display type in KHTeka with negative tracking.

Don't:
- Fill buttons with the red accent; the measured button fill is #a7a7b415.
- Use pure black shadows; the measured shadows are plum-tinted.
- Introduce bold weights; all measured weights are 400.

## Responsive Behavior

The extractor's 390px pass measured the h1 at 44.3077px / 39.8131px with -0.886153px tracking and the most-read sizes 9.61481px, 12.4031px, 16px and 26.6256px. Layout reflow, the nav on mobile and the hero artwork were not measured. Root units `--vw` and `--vh` show the script tracks viewport size, but breakpoint rules were not measured.

## Iteration Guide

1. Start with canvas #101214 and the three text colors (#ffffff, #e6dfe4, #a399a8).
2. Load KHTeka and KHTekaMono; apply the display tracking -1.68349px at 84.1745px.
3. Build the glass pill with fill #a7a7b415, radius 20px, 4px by 26.66px padding, 32px height.
4. Apply plum-tinted shadows from the measured list only.
5. Hover was not recorded (hover list empty), so do not specify it.
6. Re-run `node web/scripts/verify-designs.mjs --slug=stringtune`.

Reproduction note: the measured background areas show two large surfaces, the dark #101214 (area weight 13379) and the light #e6dfe4 (10718), so a faithful rebuild alternates dark hero sections with light grey sections lower on the page. The version label in the capture header reads "V_ 1.2.6" while the opened page text reads "v_ 1.2.7"; the label changes between loads and is not a token. The red accent #ff4f36 also appears as the only border color measured, on two elements.
