---
version: alpha
name: PwC
category: "Agencies & Studios"
description: "PwC's global home page (pwc.com/gx/en) pairs ITC Charter serif headlines (52px/700 with -2px tracking, 108.8px/800 hero) with Helvetica Neue body, a flat peach CTA (#ffaa72, black text, 0px radius), brand orange #fd5108, white and #fff5ed bands, no shadows and no rounded corners."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ffaa72"
  on-primary: "#000000"
  surface-peach: "#fff5ed"
  ink-charcoal: "#2d2d2d"
  hairline: "#111113"
  link: "#464646"
  primary-hover: "#ffaa729e"
  brand-orange: "#fd5108"
  surface-orange: "#ffe8d4"
  surface-grey: "#f5f7f8"
typography:
  display:
    fontFamily: "\"PwC ITC Charter\", Georgia, serif"
    fontSize: 108.8px
    fontWeight: 800
    lineHeight: 103.36px
  display-mobile:
    fontFamily: "\"PwC ITC Charter\", Georgia, serif"
    fontSize: 48.75px
    fontWeight: 800
    lineHeight: 46.3125px
  heading:
    fontFamily: "\"ITC Charter\", \"PwC ITC Charter\", georgia, serif"
    fontSize: 52px
    fontWeight: 700
    lineHeight: 52px
    letterSpacing: "-2px"
  subheading:
    fontFamily: "\"Helvetica Neue\", \"PwC Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 31.2px
    letterSpacing: "-1px"
  body:
    fontFamily: "\"PwC Helvetica Neue\", Arial, sans-serif"
    fontSize: 13.712px
    fontWeight: 400
    lineHeight: 23.3104px
  button:
    fontFamily: "\"Helvetica Neue\", \"PwC Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 27px
  nav:
    fontFamily: "\"PwC Helvetica Neue\", arial, serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 27.2px
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 15px
  s8: 20px
  s9: 24px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 20px
    height: 51px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 20px
    height: 51px
  link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 0px 30px
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
---

## Overview
Measured from https://www.pwc.com/gx/en.html (document title "Seize tomorrow's tech to reinvent your business | PwC", scroll height 5082px). The queue marked this site "blocked"; the extractor nevertheless rendered the real PwC global home page, so the measurements are used. A WebFetch attempt for brand resources was refused with HTTP 403 (recorded in SOURCES.json), so no claims below rest on that fetch.

The page is editorial and consultative. A header 90px high carries the lowercase "pwc" logo with an orange flick, the navigation Industries, Services, Issues, About us, Careers, a "Global" locale selector and Search. A full-bleed black hero video opens with the line "so you can" and "Make it happen with PwC", a bordered "Watch film" button and a "(00:30)" duration. Below are a "Move beyond bold ideas" block with a peach "Explore more" button, "Three ways to unlock new growth" with three #fff5ed cards ("Shape your future with AI", "Seize opportunity", "Capture new value"), and "Decoding ROI from AI" ("Just 20% of companies are capturing 74% of all AI-driven value..."). Imagery is photographic with an orange parallelogram overlay motif. The voice is confident, plain and outcome-led.

## Colors
Backgrounds by area: `canvas` #ffffff (4514), `surface-peach` #fff5ed (2030), #000000 (1468, the hero), `surface-grey` #f5f7f8 (431), `surface-orange` #ffe8d4 (388) and `primary` #ffaa72 (17). Text: `ink` #000000 (3277 chars), white (268, over the dark hero) and `ink-charcoal` #2d2d2d (120). The link color `link` is #464646. Borders: `hairline` #111113 (3 uses), brand orange #fd5108 (1) and #cbd1d6 (1).

The CTA `primary` #ffaa72 carries black text (`on-primary` #000000); on hover the fill goes to rgba(255, 170, 114, 0.62) with a #601f03 border (measured hover pass), recorded as `primary-hover` #ffaa729e. The brand orange #fd5108 is published in the site's root variables as `--syc-color-orange` and appears as a border color, and the logo flick and arrow icons in the capture use the same orange. Other published variables: `--syc-color-orange200: #ffcda8`, `--bu-orange700: #c52b09`, `--bu-grey300: #cbd1d6`, `--bu-grey700: #787e8a`, `--syc-color-grey800: #4c5056`, `--syc-color-grey900: #303236`, `--bu-form-success: #059669`, `--bu-form-error: #dc2626`, and a gradient `linear-gradient(90deg,#fe8303,#fd5108)`.

## Typography
Two families in two licensed versions each: "PwC ITC Charter" / "ITC Charter" (serif, weights 400 and 700 loaded; 360 chars) for display and headings, with Georgia as fallback, and "PwC Helvetica Neue" / "Helvetica Neue" (3191 chars; regular and bold) for body, navigation and buttons, with Arial fallback (114 chars). These are commercial faces.

Roles: `display` ITC Charter 108.8px/103.36px weight 800 (48.75px on mobile); `heading` 52px/52px weight 700, letter-spacing -2px ("Move beyond bold ideas"); `subheading` Helvetica Neue 24px/31.2px weight 400, tracking -1px; `body` 13.712px/23.3104px; `button` 18px/27px weight 500; `nav` 16px/27.2px. Other measured sizes by chars: 16px (1764), 18px (630), 13.712px (508), 24px (240), 14px (129), 52px (126), 87.04px (77), 34px (64), 40px (47), 12.8px (46), 32px (24). Tracking is tight on large sizes: 24px at -1px, 52px at -2px, -1.04px and -1.32px, 34px at -0.34px, 32px at -1px. The root variables define `--syc-letter-spacing-h2-larger: -3px`.

## Layout
A 90px white header, full-bleed hero, then two-column editorial blocks (text left, media right) alternating with three-card rows and a #fff5ed full-width band. Cards sit three across at desktop in the capture. The theme variables set `--narrow-card-height: 525px` and `--wide-card-max-width: 440px`. Spacing from measured values: paddings 15px (29 uses), 20px (13), 12px (8), 4px, 5px, 14px, 30px, 8px, 24px, 50px, 25px, 40px, 10px; gaps 12px (10), 10px (6) and 20px (2).

## Elevation & Depth
No shadows are measured (empty list). Depth is flat: tonal bands (#ffffff, #fff5ed, #f5f7f8, #ffe8d4, black) and hairline borders. Cards are separated by background tone alone.

## Shapes
No radii are measured (borderRadii empty: every element computes 0px), so the system is entirely square-cornered: buttons, cards, images and the video frame. The site's variables include `--border-radius: 8px` but no rendered element used it. The only non-rectangular motif is the orange parallelogram laid over photographs.

## Components
- **button-primary / button-secondary**: "Explore more" and "Learn more", #ffaa72 fill, black 18px/500 text, 0px radius, padding 12px 20px, 51px tall (179 and 164px wide); hover lowers the fill alpha.
- **nav**: white header, black 18px text, padding 0 30px; nav links #464646 16px.
- **cards**: #fff5ed tiles with an ITC Charter title, small Helvetica description and an orange line arrow at the bottom left.
- **Watch film**: outlined hero button with an orange 1px border and play icon (border color #fd5108 measured once).
- **footer**: copyright line "© 2017 - 2026 PwC. All rights reserved." in 13.712px black.

## Design System Architecture
PwC publishes its own system inside the page CSS: variables are prefixed `--syc-` and `--bu-` (colors such as `--syc-color-orange`, `--syc-color-grey800`; type `--syc-font-h5: 24px`, `--syc-column-heading-font-size: 32px`, `--syc-column-description-font-size: 18px`, `--syc-letter-spacing-h4: -1px`, `--syc-font-hr: "Helvetica Neue",Arial,Sans-Serif`; button helper `--syc-btn-bg-cover`; form states `--bu-form-error`). About 72 root variables were found. No public brand guideline or design-system page was reachable: the one WebFetch of the home page returned a 403, so no link to such a resource is cited.

## Do's and Don'ts
- Do set headlines in ITC Charter bold with tight (-2px at 52px) tracking.
- Do use square corners and flat fills everywhere.
- Do reserve #fd5108 for the logo flick, icons and fine borders, and #ffaa72 for CTA fills.
- Don't add shadows or rounded corners: none are measured.
- Don't set body copy larger than the measured 13.712px to 18px range.
- Don't fill buttons with the saturated orange: the measured CTA is the pale peach #ffaa72.

## Responsive Behavior
At the 390px mobile pass the hero line "so you can" is 48.75px/46.3125px (from 108.8px), body text 15.008px/22.512px in a 360px column, and the "Explore more" button keeps 18px text, 179 x 51px. Mobile sizes concentrate at 14px (1279 chars), 15.008px (977) and 18.0096px (467). Menu collapse and card column changes are not measured.

## Iteration Guide
1. White and #fff5ed bands, black text, no radii.
2. Headline in ITC Charter 700 with tight tracking; body in Helvetica Neue.
3. One peach #ffaa72 button style (black text, 12px 20px padding).
4. Place the orange parallelogram motif over photography only.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=pwc --url=https://www.pwc.com/gx/en.html --force --no-motion`.

## Imagery and Content Notes
The hero is a full-bleed black video area at the 1280px pass, with the overlay controls anchored to the lower right: a rectangular "Watch film" button with an orange hairline border and a play glyph, and the running time "(00:30)" beneath it. A thin orange down arrow beside the line "Make it happen with PwC" signals scroll. The first content block places a heading and paragraph on the left and a video thumbnail on the right; the thumbnail shows the player's own error text ("The media could not be loaded...") over a dim boardroom photograph, with the orange parallelogram laid across it. Photography below shows people in modern offices and a data-center aisle with motion blur. Each card heading is a two-line serif title followed by a one-sentence Helvetica description at the 14px size, and an orange outlined right arrow closes the card. The copy leans on short imperative verbs (Shape, Seize, Capture, Decoding) and concrete numbers ("Just 20% of companies are capturing 74% of all AI-driven value"). Case-study headings such as "Medway NHS builds AI-powered contact solutions" appear further down in 24px Helvetica Neue with -1px tracking.
