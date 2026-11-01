---
version: alpha
name: UnitedHealth Group
category: "Healthcare & Wellness"
description: "UnitedHealth Group home page measured live: white canvas with warm #faf8f2 panels, OptumSans 700 headlines (44px, 0.44px tracking), a bright blue #0066f5 pill call-to-action (999px radius, 48px tall), navy #002677 statistic text, dark #323334 footer and 12 to 15px rounded image panels."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#0066f5"
  on-primary: "#ffffff"
  surface-2: "#1a1a2e"
  surface-3: "#323334"
  ink-3: "#002677"
  ink-4: "#424242"
typography:
  display:
    fontFamily: OptumSans, Arial, Helvetica, sans-serif
    fontSize: 44px
    fontWeight: 700
    lineHeight: 45px
    letterSpacing: 0.44px
  display-mobile:
    fontFamily: OptumSans, Arial, Helvetica, sans-serif
    fontSize: 28.6px
    fontWeight: 700
    lineHeight: 34.32px
    letterSpacing: 0.286px
  heading:
    fontFamily: OptumSans, Arial, Helvetica, sans-serif
    fontSize: 45px
    fontWeight: 700
    lineHeight: 49px
    letterSpacing: 0.33px
  subheading:
    fontFamily: OptumSans, Arial, Helvetica, sans-serif
    fontSize: 29px
    fontWeight: 700
    lineHeight: 34.8px
    letterSpacing: "-0.76px"
  body:
    fontFamily: OptumSans
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
    letterSpacing: 0.5px
  button:
    fontFamily: OptumSans, Arial, Helvetica, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 25.2px
  nav:
    fontFamily: OptumSans
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: OptumSans
    fontSize: 17px
    fontWeight: 600
    lineHeight: 20.4px
    letterSpacing: "-0.2px"
  button-secondary:
    fontFamily: OptumSans, Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22.4px
rounded:
  xs: 12px
  sm: 14px
  md: 15px
  lg: 20px
  pill: 9999px
spacing:
  s1: 4px
  s2: 10px
  s3: 11px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 18px
  s8: 20px
  s9: 24px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 11px 24px
    height: 48px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 10px 24px
    height: 48px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 25px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.canvas}"
    padding: 100px 0px 87px 20px
---

## Overview

This DESIGN.md documents the UnitedHealth Group corporate home page measured from https://www.unitedhealthgroup.com/ (page title "Helping People Live Healthier Lives - UnitedHealth Group", language en, 4,502px tall at 1280px wide). The first capture contained a feedback-survey popup ("Your opinion matters!") and a blue "Feedback" side tab; the page was re-measured with the batch settings and the popup's controls and typography are excluded from this file. The real page is calm and corporate: a white 100px-tall header with the UNITEDHEALTH GROUP wordmark and menu items About, Careers, Newsroom, Investor Relations, UnitedHealthcare and Optum (each with a chevron) and a search icon; a full-width photographic hero (a close-up of a doctor with a stethoscope) with the white headline "Helping make healthcare work better for everyone"; a "Working for you" panel with a photograph of a child and a clinician beside a warm cream text panel; "Living our mission" with three large blue statistics ($300B, 19M+, 575M+) separated by thin vertical rules; and a "Simplifying healthcare" cream band with a row of people photographs.

The voice is assured, plain and benefit-first ("Helping care work better for everyone", "Making care more affordable for the people we serve"), with large numerals as proof points. Imagery is warm, candid portraits of patients and clinicians.

## Colors

`canvas` #ffffff dominates (2,308 area weight). `surface-2` #1a1a2e (1,055) is a very dark navy used in the hero and feature areas; `surface-3` #323334 (640) is the footer background; a warm cream #faf8f2 (397) is the panel and band background and #ededed (256) a light grey. `primary` #0066f5 is the bright blue of the "Search jobs" pill, text links, nav hover and the large statistic numerals (155 text characters, 69 area weight); the `#136ef6` background (3) is a near variant. `ink-3` #002677 (511 characters) is the deep navy used for headings and the wordmark; `ink` #000000 is body text (1,236), `ink-4` #424242 (212) secondary text, and white (688) text on dark photography and the footer. Borders measured: #0066f5 (2) and #a6a6a6 (1).

## Typography

The family is OptumSans (weights 300, 400, 600, 700, plus an "OptumSans-semibold" face), with Arial, Helvetica, sans-serif as the declared fallbacks (OptumSans carried 2,692 characters). Roles: `display` 700 at 44px / 45px with 0.44px letter spacing (hero headline; mobile 28.6px / 34.32px with 0.286px); `heading` 700 at 45px / 49px with 0.33px; `subheading` 700 at 29px / 34.8px with -0.76px (card and panel titles such as "Helping care work better for everyone"); `body` 400 at 18px / 25.2px with 0.5px; `button` 700 at 18px / 25.2px; `nav` 400 at 16px / 24px; `link` 600 at 17px / 20.4px with -0.2px; `button-secondary` 700 at 16px / 22.4px. Sizes by character count: 17.008px (767), 18px (639), 22px (288), 17px (236), 30px (211) and 29px (198). Weights: 400 (1,962), 700 (613), 600 (396). OptumSans is a proprietary face.

## Layout

The header is 100px tall with 25px padding. Content sits in a centred container with the "Working for you" panel inset about 82px from the page edge in the capture; sections alternate white and cream bands. The statistics row is three equal columns divided by thin vertical rules, each with a large blue numeral, a bold caption and a grey explanation. The people carousel runs partly off-screen to the right. Measured gaps: 12px (10), 30px (7), 16px (4), 20px, 60px and 50px; paddings: 20px (7), 25px (4), 10px, 12px, 100px, 40px, 24px and others. The footer uses padding 100px 0px 87px 20px and is 500px tall.

## Elevation & Depth

One shadow was measured: `rgba(25, 25, 26, 0.16) 0px 2px 6px 0px` (5 uses), a light drop on controls or carousel arrows. The stylesheet contains stronger shadows (`2px 2px 9px 0 rgba(0,0,0,.25)`, `5px 5px 15px 5px rgba(0,0,0,.33)`) and focus rings (`0 0 0 2px #fff,0 0 0 5px #0066f5`) that were not measured on rendered content. Layers are mostly flat colour bands and photographs.

## Shapes

Measured radii: 12px (5), 15px on the outer corners of the joined image-and-text panel (`15px 0px 0px 15px` on the image, `0px 15px 15px 0px` on the text panel), 999px (2, pills), 20px (1), 14px (1) and small 4px and 2px right-corner radii. Tokens: `xs` 12px, `sm` 14px, `md` 15px, `lg` 20px, `pill` 9999px. Buttons are fully rounded pills; panels and images use a 12–15px radius.

## Components

`button-primary` ("Search jobs"): #0066f5 fill, white OptumSans 700 18px label, pill radius, 11px 24px padding, 48px tall, 153px wide, 1px #0066f5 border. `button-secondary` ("Read more news"): white fill, #0066f5 700 16px label, 1px #0066f5 border, pill radius, 10px 24px padding, 48px tall, 174px wide. `link` ("Read the announcement") is #0066f5 600 17px. `nav` is a white header with 25px padding and black 16px links that turn #0066f5 on hover (measured on "About"). `card` is a white-surface panel with 15px outer radius. `footer` is #323334 with white 600 17px links (Contact Us, Suppliers, Privacy Policy, Company Statement Policy).

## Design System Architecture

No public UnitedHealth Group design system or brand-guideline page was opened. The shipped CSS exposes almost no custom properties (the root has `--careers-search-top` 100px only), so the system is expressed through component classes and the proprietary OptumSans type family. The de-facto system: blue #0066f5 actions, navy #002677 headings, warm cream panels, pill buttons and 12–15px image radii.

## Do's and Don'ts

Do use pill-shaped #0066f5 buttons with white labels and outlined variants on white. Do use navy #002677 for section headings and blue for numerals and links. Do use warm #faf8f2 bands to separate sections and 12–15px radii on imagery. Do lead with a large statistic and a bold caption.

Don't document the feedback survey popup or the "Feedback" side tab as brand UI. Don't use pure black for large headlines when navy #002677 is measured. Don't add heavy shadows. Don't use sharp corners on buttons.

## Responsive Behavior

The mobile pass (390px) recorded: h1 "Helping make healthcare work better for everyone" at 28.6px / 34.32px weight 700 (`display-mobile`); the statistic "$300B" at 32px / 35px; body 18px / 23.4px; and the CTA "Search jobs" unchanged at 18px, 153px by 48px. Menu form and column collapse are not measured.

## Iteration Guide

1. White canvas, cream #faf8f2 bands, navy #002677 headings, black body.
2. OptumSans 700 for headlines at 44px with 0.44px tracking; 18px body.
3. #0066f5 pill buttons at 48px height; outline version on white.
4. Three-up statistics in blue with thin vertical dividers.
5. Gate with `node web/scripts/verify-designs.mjs --slug=unitedhealth-group`.

## Additional Measurements

The hero headline is white over a dark photograph, and the statistics numerals are #0066f5 at a larger display size. Letter spacing is positive on the display, heading and body roles (0.44px, 0.33px, 0.5px) and negative on subheadings and links (-0.76px, -0.2px). The home page links to separate brand sites for UnitedHealthcare and Optum through the header menu, which were not opened.

The three statistics read as a repeated module: a large blue numeral ("$300B", "19M+", "575M+"), a bold black two-line caption ("Discounts negotiated for customers in 2025", "Home visits in 2025", "Gaps in care closed since 2021") and a lighter grey sentence beneath ("Making care more affordable for the people we serve"). The module is centred within its column and separated from its neighbours by a 1px grey vertical rule. The "Simplifying healthcare" band uses a centred bold heading and a large, regular-weight paragraph that names Optum and UnitedHealthcare, then a row of portrait photographs with rounded corners. The hero overlay uses a dark gradient on the left and bottom of the photograph so the white headline stays legible; no other overlay is documented. Typography stays within the OptumSans family throughout, so contrast is made through weight (700 versus 400), size and colour (navy, blue, black and grey) rather than through a second typeface.
