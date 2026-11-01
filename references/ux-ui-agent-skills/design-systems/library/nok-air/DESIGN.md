---
version: alpha
name: "Nok Air"
category: "Thai Brands"
description: "Nok Air (nokair.com) airline home: saturated yellow #ffcb0b header, booking panel and 50px-tall 5px-radius buttons with black text, DBOzoneX type at 21px body and 40px to 60px headings, pale-yellow #fefcc3 bands and circular photo badges."
colors:
  canvas: "#ffffff"
  page-largest: "#ffcb0b"
  ink: "#000000"
  primary: "#ffcb0b"
  on-primary: "#000000"
  surface-pale-yellow: "#fefcc3"
  ink-warm: "#190000"
  ink-subtle: "#858585"
  hairline: "#b4b4b4"
  primary-hover: "#fff13c"
typography:
  display:
    fontFamily: DBOzoneX-Medium
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
  display-mobile:
    fontFamily: DBOzoneX
    fontSize: 25px
    fontWeight: 400
    lineHeight: 57.5px
  heading:
    fontFamily: DBOzoneX
    fontSize: 60px
    fontWeight: 500
    lineHeight: 66px
  subheading:
    fontFamily: DBOzoneX
    fontSize: 30px
    fontWeight: 500
    lineHeight: 33px
  body:
    fontFamily: DBOzoneX-Medium
    fontSize: 21px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: DBOzoneX-Medium
    fontSize: 25px
    fontWeight: 400
    lineHeight: 50px
  input:
    fontFamily: DBOzoneX
    fontSize: 25px
    fontWeight: 100
    lineHeight: 25.2px
rounded:
  xs: 3px
  sm: 5px
  md: 8px
  lg: 10px
  xl: 15px
  2xl: 29px
  3xl: 30px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 7px
  s6: 10px
  s7: 10.5px
  s8: 15px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 50px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 3px 30px 3px 3px
    height: 30px
---

# Nok Air

Nok Air (https://www.nokair.com/, page title "Home - NokAir") is a Thai low-cost airline. The measured home page is a booking-first airline site: a saturated yellow header and search panel, white and pale-yellow content bands, circular photo badges, and a custom Thai-and-Latin typeface (DBOzoneX). This document records what was measured on that page.

## Overview

The home page is 3267px tall. From the top: a yellow header bar (#ffcb0b) with the round Nok Air mascot logo and wordmark, nav links (Booking, Promotion, Manage Booking, Travel Info), a search icon, a language selector (English) and the links "Nok Fan Club" and "Log in Agent". Under it, a promotional banner shows a smiling cabin-crew member, four oval aircraft-window cutouts labelled with airport codes (NST, HKT, HDY, TST) and the aircraft livery. Then a rounded yellow booking panel with four tabs (Book Flight, Web Check-in, Manage Booking, Other Services), trip-type toggles (Round Trip, One Way, Multi-city), a currency selector (Thai - Baht), white input fields (From, To, Depart, Return, Select passengers, Promo Code), a "Lowest fare" checkbox and a green "Search" button.

A "Special Offers" row of route cards over a sky photograph shows origin and destination pairs and the price "855 Baht" in large yellow numerals. A three-tile strip follows (Nok Fan Club card, a magazine promotion "READ NOW!!", and a Web Check-in form with a yellow "Continue" button). A pale-yellow band, "Why Fly Nok Air", presents four circular images with short benefit captions (free 7 kg carry-on baggage, wider seat, advanced seat selection, Nok Fan Club points) and an outlined "See more" button. A News block closes the page with a yellow "See more" button. The voice is friendly and direct: "Don't waste your time at check-in, just grab your stuff and board the plane!"

## Colors

- `primary` and `page-largest` #ffcb0b: the brand yellow. It is the largest background area (1602 units), the header and booking panel color, and the fill of the primary button; as text it appears on 236 characters (prices and the "News" label).
- `canvas` #ffffff: white inputs, cards and content bands.
- `surface-pale-yellow` #fefcc3: the "Why Fly Nok Air" band (845 units).
- `ink` #000000: body and heading text (1592 characters); `ink-warm` #190000, a near-black with a red tint, on 1022 characters.
- `on-primary` #000000: text on yellow buttons.
- `primary-hover` #fff13c: the measured hover fill of the "Continue" button (from #ffcb0b).
- `ink-subtle` #858585: placeholder and secondary text; `hairline` #b4b4b4: input border color.

Other measured backgrounds: #fffaae, #f9f9f9, #fff13c, #b9b0b0, and a hover tint `rgba(255, 211, 0, 0.85)` on "Read More" links. The capture shows a green search button, but its color was not recorded in the extraction, so it is not tokenized.

## Typography

The family is DBOzoneX, with Regular, Medium (`DBOzoneX-Medium`), Light and Bold files loaded; 2169 of the characters use the regular file and 746 the Medium file. Weights in use by character count: 400 (2871), 500 (64), 700 (8). Glyphicons Halflings and an icon font (`db_ee_stroke_x_v3.2`) supply icons.

- `display`: 40px / 48px, DBOzoneX-Medium (the "Special Offers" section heading). Mobile: 25px / 57.5px.
- `heading`: 60px / 66px, weight 500 ("Nok Fan Club" on a dark tile).
- `subheading`: 30px / 33px, weight 500.
- `body`: 21px / 21px, DBOzoneX-Medium.
- `button`: 25px / 50px, DBOzoneX-Medium.
- `input`: 25px / 25.2px, weight 100.

The most common sizes by character are 20px (753), 23px (643), 28px (470), 21px (252), 30px, 22px, 25px, 60px, 18px and 24px. There is no letter-spacing measurement (none was non-default). DBOzoneX is a proprietary Thai-and-Latin font; no substitute was identified from a source, so fall back to the generic sans-serif.

## Layout

The page is a stack of full-width bands with a centred content column. The yellow search panel is a rounded rectangle inset from the page edges with a bottom radius; below it the page background becomes a sky photograph. Route cards scroll in a horizontal carousel with arrow controls and pagination dots; the three-tile strip is an equal three-column row; the benefit band is a four-column row of circular images. Measured paddings: 15px (36 elements), 10px (8), 21px (6), 10.5px (4), 1px, 3px, 20px, 4px, 7px and 18px. The site declares two layout variables: `--nokair-criteria-iframe-height` 235px and `--nokair-terser-height` 530px.

## Elevation & Depth

Shadows are few. One measured shadow on a rendered element is `rgba(0, 0, 0, 0.15) 0px 4px 12px 0px` (a floating widget). The CSS corpus also includes Material-style stacks such as `0 2px 4px -1px #0003,0 4px 5px #00000024,0 1px 10px #0000001f`, used on library components, and many `none` declarations. Depth comes from color: yellow panels over a photographic sky, white inputs on yellow, and a dark photo tile in the three-tile strip.

## Shapes

Radii measured by frequency: 30px (11 elements), 5px (8), 3px (5), `10px 10px 0px 0px` (4), 50% (4), `0px 0px 10px 10px` (1), 8px, 29px and 15px. Buttons use 5px (`rounded.sm`); the booking panel and some tabs use 10px with only the top or bottom corners rounded; images and the Nok Fan Club badge are circles (50%); 30px is used on large rounded controls. The token scale is xs 3px, sm 5px, md 8px, lg 10px, xl 15px, 2xl 29px, 3xl 30px and pill 9999px.

## Components

- Primary button ("Continue", "See more"): #ffcb0b fill, #000000 text, DBOzoneX-Medium 25px, 50px tall, 5px radius (312px wide for the check-in form, 200px for "See more"). Hover fill #fff13c.
- Outlined button ("See more" in the benefit band): transparent, 1px solid #000000 border, 20px text, 5px radius.
- Text input: black text at 25px weight 100, 3px 30px 3px 3px padding, 30px height, 5px radius, white fill with a #b4b4b4 border and a grey placeholder.
- Tabs: pill-top tabs; the active tab is yellow, inactive tabs white.
- Route card: origin and destination in 20px+ text, "From" label and the price in large yellow numerals with a small "Baht" unit.
- Circular benefit image: 50% radius, with a bold caption and a light description.

## Design System Architecture

No public design system or brand guideline was opened, and none was linked in the extraction. The shipped CSS loads Glyphicons Halflings and contains Material-style shadow stacks with site-specific layout variables prefixed `--nokair-`. The brand layer is the yellow #ffcb0b, the DBOzoneX family and the mascot logo; colors are not exposed as named custom properties, so the palette above comes from measured computed styles.

## Do's and Don'ts

- Do use #ffcb0b for headers, panels and primary buttons with #000000 text.
- Do keep forms white on yellow with 5px corners and a grey placeholder.
- Do show fares as large yellow numerals with a small "Baht" unit.
- Do crop benefit photography into circles.
- Don't use white text on the brand yellow; black text is the measured pairing.
- Don't add shadows to buttons; the measured buttons have none.
- Don't use the default Bootstrap blue; the page does not use it.

## Responsive Behavior

Measured at the 390px mobile pass: the h1 is 25px / 57.5px, h2 60px / 66px (unchanged), body 21px / 21px, and the primary button text is 21px with a 40px line height on #ffcb0b with black text. Common mobile sizes by character are 25px (1160), 19.5px (727), 23px (643), 21px (209), 30px, 21.45px, 20px and 45px. Navigation collapse, panel stacking and tab behavior on mobile were not measured.

## Iteration Guide

1. Start from the yellow #ffcb0b header and booking panel; place white inputs inside with 5px radii.
2. Use DBOzoneX at 21px for body and 25px for buttons; headings at 40px and 60px.
3. Alternate white, pale-yellow (#fefcc3) and photographic bands.
4. Show offers as horizontal route cards with large yellow prices.
5. Re-run the gate after renames; do not change measured values.
