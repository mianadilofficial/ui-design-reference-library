---
version: alpha
name: Cushman & Wakefield
category: "Real Estate & PropTech"
description: "Cushman & Wakefield global home (cushmanwakefield.com/en) measured at 1280px: Gotham with ChronicleTextG2 accents, uppercase 40px/500 display, deep indigo #1d1740 square-cornered buttons with 12px/700 uppercase labels, grey #686b6b body text on a white canvas, and a 0px radius everywhere."
colors:
  canvas: "#ffffff"
  ink: "#686b6b"
  primary: "#1d1740"
  on-primary: "#ffffff"
  primary-hover: "#565170"
  link-border: "#858585"
  text-input-text: "#495057"
  text-input-border: "#ced4da"
  footer-border: "#e1e6e8"
  surface-translucent: "#fffffff2"
typography:
  display:
    fontFamily: Gotham, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif
    fontSize: 40px
    fontWeight: 500
    lineHeight: 48px
    textTransform: uppercase
  display-mobile:
    fontFamily: Gotham, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 33.6px
    textTransform: uppercase
  body:
    fontFamily: Gotham, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Gotham, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 12px
    textTransform: uppercase
  input:
    fontFamily: Gotham, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
rounded:
  none: 0px
spacing:
  s1: 3px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 11px
  s6: 12px
  s7: 17.01px
  s8: 22.4px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 17.008px
    height: 48px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 17.008px
    height: 48px
    borderColor: "{colors.primary}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 17.008px
    borderColor: "{colors.link-border}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 8px
    height: 56px
    borderColor: "{colors.text-input-border}"
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    borderColor: "{colors.footer-border}"
---

## Overview

This file documents the Cushman & Wakefield global home page, measured at `https://www.cushmanwakefield.com/en` (the requested root `https://www.cushmanwakefield.com` redirects there). The measurement ran at 1280px desktop and 390px mobile after the geolocation dialog ("dialog geo-popup") and its backdrop were hidden; those are not brand UI. The site header was measured this time: it is an 80px white bar with the logo, five primary links (Properties, Services, People, Insights, About Us), a search toggle, a language/globe control and a "CONTACT" button in indigo.

The page is a commercial-real-estate corporate site built around photography. A full-bleed hero pairs an indigo panel carrying the white uppercase headline "AI IMPACT ON CRE: THE NEXT 10 YEARS" with an aerial photograph. Under it sits the prompt "HOW CAN WE HELP YOU TODAY?" with a select, then large photographic bands that carry a white translucent card ("FIND A PROPERTY", "GLOBAL OCCUPIER SERVICES", "JOIN US"), three-up story and insight cards, a stats band ("53,000 Team Members", "$10.3 billion 2025 Revenue", "60 Countries") in 48px bold indigo, a "RECENT NEWS" list with thumbnails, and a footer that ends in a grey `#686b6b` legal strip.

The voice is formal and corporate: uppercase section labels, short declarative copy, bylines with dates. Everything is square: the measured border-radius list is empty.

## Colors

- **canvas `#ffffff`**: dominant background by area (weight 3304).
- **surface-translucent `#fffffff2`**: the near-opaque white of the overlay cards that sit on photography (weight 388).
- **ink `#686b6b`**: the most-read text colour (2220 characters), used for body copy, section labels and the footer strip background (156 area weight).
- **primary `#1d1740`**: deep indigo. Fills the CONTACT and SEE MORE STORIES buttons, sets the stat numerals and link text (793 characters) and is the strongest border colour (9 elements). `on-primary` is `#ffffff` text on it.
- **primary-hover `#565170`**: the measured hover fill and border of the CONTACT button (from `rgb(86, 81, 112)`).
- **link-border `#858585`**: the outline of the "READ MORE" outlined button.
- **text-input-text `#495057`** and **text-input-border `#ced4da`**: the select/input styling, which matches Bootstrap's form-control values since the site runs on Bootstrap.
- **footer-border `#e1e6e8`**: hairline in the footer.

The root variables also carry Bootstrap palette entries (`--red: #e4002b`, `--danger: #e4002b`, `--yellow`, `--green` and others) and cookie-consent variables (`--cc-btn-primary-hover-bg: #a6192e`). Those are framework or consent-widget values and are not used as brand colours here. Do not read the logo red from them; the logo colour was not measured.

## Typography

The measured families by character count are Gotham (3273), Font Awesome 5 Pro icons (59) and ChronicleTextG2 (52). Loaded faces: Gotham 300, 400, 400 italic, 500, 700; ChronicleTextG2 400 normal and italic. Gotham is a commercial typeface; where it is unavailable the page's own stack falls back to `-apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif`.

| Role | Size | Weight | Line height | Transform |
|---|---|---|---|---|
| display (h1) | 40px | 500 | 48px | uppercase |
| display-mobile (h1 at 390px) | 28px | 500 | 33.6px | uppercase |
| body | 16px | 400 | 24px | none |
| button | 12px | 700 | 12px | uppercase |
| input | 14px | 400 | 14px | none |

The h2 "HOW CAN WE HELP YOU TODAY?" measures 28px/500 on 33.6px in `#686b6b`. Section labels such as "CLIENT SUCCESS STORIES" and "RECENT NEWS" measure 18px/500. The stat numerals measure 48px/700 in `#1d1740`. Size frequency by characters: 16px (1605), 14px (939), 12px (573), 18px (124), 40px (35), 22px (33), 24px (28), 28px (26), 48px (21). Weights: 400 (2271), 700 (816), 500 (223), 100 (57), 300 (17).

## Layout

The page is a stack of full-width bands: header 0 to 95px, hero 814px tall, a prompt band, photographic feature bands of about 1178px and 583px height, a 1317px story and insights band, a 360px stats band, and a 993px news band ending in a 122px grey legal strip. The card grids show up to three columns on desktop (`maxCardColumns: 3`), and the mobile pass shows one. Cards sit on photography with a white translucent card offset to the left of the image. Measured paddings: 6px (116 elements), 12px (31), 17.008px (14 button paddings), 48px, 60px and 40px (3 each), 32px (2).

## Elevation & Depth

No box-shadow was measured (the shadow list is empty). Depth comes from layering a `#fffffff2` card over full-bleed photography and from the dark indigo hero panel against the image. There are no gradients recorded as tokens.

## Shapes

`desktop.frequencies.borderRadii` is empty: every element computes a 0px radius, so the `rounded` scale is only `none: 0px`. Buttons, inputs, cards and the header are rectangular. Buttons are 48px tall; the input measures 56px tall with 8px padding.

## Components

**button-primary.** Fill `#1d1740`, white 12px/700 uppercase label, 17.008px padding, 48px height, 0 radius, 1px solid `#1d1740` border. "CONTACT" measures 100px wide. On hover the fill and border become `#565170`.

**button-secondary.** The same style on "SEE MORE STORIES" (296px wide).

**link / outlined button.** "READ MORE": white fill, `#1d1740` text, 1px solid `#858585` border, 116px by 48px.

**nav.** White 80px bar, Gotham 14px/400 on a 21px line in `#686b6b`; links in `#1d1740` at 16px/400 on 24px.

**text-input.** White, `#495057` 14px text, 1px `#ced4da` border, 8px padding, 56px tall.

**Cards.** Story and insight cards are image-first with an uppercase category line, a short description, a byline with date and a "Learn More" link. No card radius, border or shadow was recorded, so none is declared.

**footer.** Legal strip filled `#686b6b` with white text; column links above it; `#e1e6e8` borders.

## Design System Architecture

The research pass opened the server HTML of `https://www.cushmanwakefield.com/en` (status 200) in an earlier session and found no design-system or brand-guideline link; no search was used this time. The de-facto system is Bootstrap: the root variables include `--breakpoint-md: 48em`, `--breakpoint-xl: 75em`, `--gray`, `--gray-dark`, `--dark: #232424`, and the form control values match Bootstrap's. The CSS corpus declares `min-width 992px` (108 rules), `min-width 768px` (35), `min-width 1200px` (22) and `min-width 576px` (19) breakpoints. Icons come from Font Awesome 5 Pro and a "font-icons" face.

## Do's and Don'ts

- Do keep every corner square; the page measured 0px radius throughout.
- Do set headings and buttons uppercase in Gotham, h1 at 40px/500 and buttons at 12px/700.
- Do use `#1d1740` for the primary action, with `#565170` on hover.
- Do lay white translucent cards (`#fffffff2`) over full-bleed photography.
- Don't add shadows or rounded pills; none were measured.
- Don't use Bootstrap palette variables (`--red`, `--yellow`, `--green`) or cookie-widget colours as brand colours.
- Don't document the geolocation dialog as brand UI.

## Responsive Behavior

Measured at 390px: the h1 drops to 28px/500 on 33.6px (from 40px/48px), stays uppercase, body stays 16px, the primary CTA reads "CONTACT US" at 12px/700 in `#1d1740`, the card grid is one column, and a menu toggle labelled "Open search" is visible with 13 header links counted. Breakpoints in the shipped CSS include 576px, 768px, 992px and 1200px (min-width) and 991.68px, 767.68px (max-width). Tablet layout is not measured.

## Iteration Guide

1. Start on `canvas` white; build the hero as an indigo `primary` panel with a white uppercase `display` headline beside a photograph.
2. Use `button-primary` for actions and the outlined `link` style for secondary "READ MORE" actions; keep radius at 0.
3. Put white translucent cards over photographic bands for each service entry.
4. Use three-up image cards for stories and insights, and a 48px/700 indigo stats band.
5. Close with the `#686b6b` legal strip.
6. Hover is measured only for the CONTACT button; any other state must be measured before it is specified.
