---
version: alpha
name: Yamaha Motorsports USA
category: "Automotive"
description: "Yamaha Motorsports USA (yamahamotorsports.com) measured on the live site: Yamaha blue #003087 square-cornered CTAs, a black #000000 and white #ffffff band rhythm, Bebas Neue Pro uppercase headlines at 38px and 45.6px, Montserrat 14.44px body, and full-bleed motorcycle photography."
colors:
  canvas: "#ffffff"
  ink: "#212529"
  primary: "#003087"
  on-primary: "#ffffff"
  surface-black: "#000000"
  ink-on-dark: "#c0c0c0"
  ink-nav: "#363636"
  ink-muted: "#818181"
  hairline: "#2b2b2b"
  primary-hover: "#cccccc"
  secondary: "#1b3e90"
typography:
  display:
    fontFamily: bebas-neue-pro, sans-serif
    fontSize: 38px
    fontWeight: 500
    lineHeight: 45.6px
    letterSpacing: 1px
    textTransform: uppercase
  heading:
    fontFamily: bebas-neue-pro, sans-serif
    fontSize: 45.6px
    fontWeight: 500
    lineHeight: 54.72px
    letterSpacing: 2.66667px
  subheading:
    fontFamily: bebas-neue-pro, sans-serif
    fontSize: 45.6px
    fontWeight: 400
    lineHeight: 54.72px
    letterSpacing: 5.33333px
    textTransform: uppercase
  body:
    fontFamily: Montserrat, sans-serif
    fontSize: 14.44px
    fontWeight: 400
    lineHeight: 21.66px
  button:
    fontFamily: Montserrat, sans-serif
    fontSize: 12.16px
    fontWeight: 400
    lineHeight: 18.24px
    letterSpacing: 1px
  nav:
    fontFamily: Montserrat, sans-serif
    fontSize: 19px
    fontWeight: 400
    lineHeight: 28.5px
  link:
    fontFamily: Montserrat, sans-serif
    fontSize: 10.64px
    fontWeight: 500
    lineHeight: 15.96px
    letterSpacing: 1px
  button-secondary:
    fontFamily: Montserrat, sans-serif
    fontSize: 11.552px
    fontWeight: 400
    lineHeight: 17.328px
    letterSpacing: 1px
rounded:
  xs: 10px
  none: 0px
  pill: 9999px
spacing:
  s1: 3.8px
  s2: 5px
  s3: 7.6px
  s4: 8px
  s5: 10px
  s6: 15px
  s7: 23px
  s8: 25px
  s9: 31px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 15px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.secondary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    height: 54px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink-nav}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 45.6px 0px
---

## Overview

This file documents the United States Yamaha Motorsports site, measured at `https://www.yamahamotorsports.com/` (page title "Yamaha Motorsports, USA"). It sells and promotes Yamaha's off-road and road motorcycles, ATVs and side-by-sides. The opened page lists Motorcycles (Off-Road), Motorcycles (Road), ATV and Side-by-Side as product navigation, Experience (BLU CRU, Events & Demos, Video on Demand, Outdoor Access Initiative, Destination Yamaha), and Parts, Accessories, Apparel & More.

The 1280px desktop capture is 6230px tall and reads as a dealer-lead funnel built from stacked photographic bands. A blue header carries the Yamaha Motorsports wordmark and an inline navigation (Vehicles, Experience, Racing, Parts & Accessories) with an OFFERS button. A full-bleed hero of a team garage shows the headline "The all-new 2027 YZ250F" with two buttons: "Explore the YZ250F" in blue and "Shop YZ250F inventory" in white. Below it a black utility strip offers Current Offers, Find Your Dealer, Payment Calculator and Shop Inventory with line icons. A dark forest scene titled "Explore Yamaha" hosts a vehicle carousel with category tabs (Road, Off-Road, Side-by-Side, ATV) and a product card with a price line, an EXPLORE button in black and a SHOP LOCAL INVENTORY button in blue. A BLU CRU racing video band follows.

The voice is racing-oriented and imperative: short uppercase commands, "Take the lead // join BLU CRU", and competition language such as "Competition Domination".

## Colors

The canvas is `#ffffff`. Painted area is split almost evenly between black `#000000` (3517) and white (3454), with Yamaha blue `#003087` (835) as the brand band. Smaller measured fills are `#f7f7f7`, `#1b3e90` (the secondary button, kept as `secondary`) and `#2949e5`, which appears once with an alpha variant and is not promoted to a token.

Text colors by characters set: `#212529` is the most-read ink (972) and is used as `ink`; `#ffffff` (684) on photography and blue; `#c0c0c0` (490) on dark bands, kept as `ink-on-dark`; `#363636` for navigation text, `ink-nav`; and `#818181`, `ink-muted`. The primary action color is `#003087` with white text. On hover the primary button fill moves to `#cccccc` with blue text per the generated hover pair; the small OFFERS link keeps its `#003087` fill and its text changes to `#1b3e90`. Borders measured are `#2b2b2b`, `#ffffff` and `#dee2e6`.

The root also exposes Bootstrap-style variables (`--light` `#f8f9fa`, `--yellow` `#ffc107`, `--green` `#28a745`, `--pink` `#e83e8c`, `--teal` `#20c997`, `--white` `#fff`, `--gray-dark` `#343a40`, `--success` `#28a745`). These are framework defaults, not brand colors, and none are used as tokens.

## Typography

Montserrat carries the most characters (2292), then bebas-neue-pro (502) and Metropolis (82, the computed body family of the page). Font Awesome 6 Pro, Sharp and Brands icon faces are also loaded. Bebas Neue Pro is loaded at weights 200, 400, 500 and 600; Montserrat as a variable face from 100 to 900.

Headlines are Bebas Neue Pro. The hero `display` is 38px at weight 500, line height 45.6px, letter spacing 1px, uppercase. Section headings (`heading`) are 45.6px at 500 with 2.66667px tracking and 54.72px line height; `subheading` is 45.6px at 400 with 5.33333px tracking, uppercase, used for "Explore Yamaha". Body copy is Montserrat 400 at 14.44px on 21.66px. Buttons are Montserrat 12.16px with 1px tracking (secondary 11.552px). Small links such as CURRENT OFFERS are 10.64px weight 500 with 1px tracking; the navigation link style measured 19px. Wide tracking on uppercase labels is a defining trait, measured at 1px to 5.33px.

Other frequently used sizes are 13.68px, 9.12px and 22.8px (with 1.33333px tracking). Bebas Neue Pro is licensed, so a substitute for implementation outside the site is a condensed uppercase grotesque; that is a recommendation rather than a measurement.

## Layout

The page alternates full-width photographic bands with narrower content. The product card in the carousel is centered in a column visibly narrower than the viewport. Padding values measured, by frequency: 15px (34, button padding), 7.6px, 8px, 32px, 25px, 50px, 10px, 5px, 45.6px (footer vertical), 200px, 31px, 23px, 35px, 175px, 3.8px and 100px. The root exposes a `--breakpoint-md` of 768px. The footer measures 45.6px vertical padding and sets its headings in Bebas Neue Pro 24.32px weight 500 with 1.5px tracking.

## Elevation & Depth

No box shadows were measured. Depth comes from photography, a darkening gradient at the top of the forest band, and the contrast between black, white and blue bands. A semi-transparent black `#000000ce` overlay appears in painted areas, an overlay not a brand color.

## Shapes

Buttons and links are square: both primary and secondary CTAs measured a border radius of 0px, and the nav items too. The extraction also recorded 50% on five elements (circular badges and icon buttons such as the count bubbles beside category tabs and carousel arrows) and 10px once. The system tokens `none: 0px`, `xs: 10px` and `pill: 9999px` carry these. Primary buttons are 50px tall with 15px padding; the secondary measured 54px tall.

## Components

- **Primary button.** Fill `#003087`, white Montserrat 12.16px with 1px tracking, 0px radius, 50px tall, 15px padding. Hover fill `#cccccc` with blue text.
- **Secondary button.** Fill `#1b3e90`, white text 11.552px, 54px tall, 0px radius, used for SHOP LOCAL INVENTORY.
- **Outlined button.** White fill with black text, used beside the primary in the hero (SHOP YZ250F INVENTORY).
- **Header.** Blue band with wordmark and navigation in Bebas Neue Pro 11.552px; the OFFERS button is blue with white text.
- **Utility strip.** Black, four items with line icons and 10.64px labels in white.
- **Vehicle carousel.** Category tabs with count badges and a SHOW ALL pill; the card shows model year, a NEW tag, model name in Bebas Neue Pro, a "Prices starting at" line with an MSRP footnote.
- **Footer.** White text, Bebas Neue Pro headings, 45.6px vertical padding.
- **Third-party.** An accessibility launcher ("Enable accessibility for low vision") sits at the top of the DOM; it is not brand UI.

## Design System Architecture

No public design system or brand guidelines were found: the homepage opened for this research showed none in its visible content and its footer has no such links. The de-facto system is Bootstrap 4 (the root contains the standard color variable set and `--breakpoint-md`), Swiper (`--swiper-navigation-size` is 44px), Font Awesome 6 Pro, and web fonts for Bebas Neue Pro and Montserrat. Brand values are hard-coded in component CSS rather than exposed as semantic custom properties.

## Do's and Don'ts

- Do use `#003087` for primary actions with white 12.16px Montserrat text and square corners.
- Do set headlines in Bebas Neue Pro uppercase with positive tracking.
- Do alternate full-bleed motorsport photography with black utility bands.
- Do keep copy imperative: Explore, Shop, Find.
- Don't round buttons; the measured CTA radius is 0px.
- Don't adopt Bootstrap's yellow, green, pink or teal variables as brand colors.
- Don't present the accessibility launcher or carousel arrows as brand components.
- Don't add shadows.

## Responsive Behavior

The mobile pass at 390px recorded the same h1 (38px Bebas Neue Pro 500) and primary CTA values as desktop (12.16px, 15px padding, blue fill). The mobile navigation container measured a `#003087` background with white Montserrat 14.44px text. The count of columns, hamburger behaviour and breakpoint reflow were not measured. The root declares `--breakpoint-md: 768px`, but how the layout uses it was not measured.

## Iteration Guide

1. Build bands: white `#ffffff`, black `#000000`, and blue `#003087`.
2. Use Bebas Neue Pro uppercase for headings with 1px to 5.33px tracking; Montserrat for text.
3. Primary CTA: `#003087`, white label, 0px radius, 50px height. Pair with a white outlined button and a `#1b3e90` secondary.
4. Lead every band with a full-bleed photograph and a one-line imperative headline.
5. Verify anything not measured (mobile columns, hover on secondary) before adding it.
