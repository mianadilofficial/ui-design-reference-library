---
version: alpha
name: RE/MAX (Thailand, remax.com)
category: "Real Estate & PropTech"
description: "RE/MAX (the measured remax.com Thailand English home page) is a real-estate portal: warm off-white canvas (#faf9f5), navy ink (#000e35), a vivid blue primary (#0043ff) on square uppercase Montserrat buttons 52px high, Montserrat 40px headings and 16px body, beige panels (#f5f3ea), 4px radii and a navy footer."
colors:
  canvas: "#faf9f5"
  ink: "#000e35"
  primary: "#0043ff"
  on-primary: "#ffffff"
  surface-2: "#f5f3ea"
  ink-secondary: "#f5f6f9"
  ink-4: "#1a1a1a"
  ink-5: "#626366"
  hairline: "#a9aeb8"
  link: "#292c3d"
  button-secondary-text: "#000000"
  button-secondary-border: "#948b65"
  nav-text: "#081a44"
  nav-link-text: "#000000de"
  text-input-text: "#555961"
typography:
  display:
    fontFamily: Montserrat, "Montserrat Fallback"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 60px
  display-mobile:
    fontFamily: Montserrat, "Montserrat Fallback"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 48px
  heading:
    fontFamily: Montserrat, "Montserrat Fallback"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: Montserrat, "Montserrat Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 32px
  button:
    fontFamily: Montserrat, "Montserrat Fallback"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 22px
    letterSpacing: 0.84px
    textTransform: uppercase
  link:
    fontFamily: Montserrat, "Montserrat Fallback"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 24.5px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 5px
  md: 12px
  none: 0px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 36px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 14px 24px
    height: 52px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(20, 19, 14, 0.06) 0px 4px 12px -4px, rgba(20, 19, 14,
      0.06) 0px 16px 32px -8px
  button-secondary:
    textColor: "{colors.button-secondary-text}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 20px
    height: 63px
    borderColor: "{colors.button-secondary-border}"
  link:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.link}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 12px 20px
    boxShadow: rgba(0, 0, 0, 0.2) 0px 3px 1px -2px, rgba(0, 0, 0, 0.14) 0px 2px 2px 0px, rgba(0, 0, 0, 0.12) 0px 1px 5px 0px
  nav:
    textColor: "{colors.nav-text}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.heading}"
    rounded: "{rounded.none}"
    padding: 4px 0px 5px
    height: 32px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-secondary}"
    rounded: "{rounded.none}"
---

## Overview

The measured URL resolves to https://www.remax.com/tha/en, the Thailand English home page of the RE/MAX real-estate network, so this file documents that regional page of remax.com, not a separate site. The page title is "Real Estate, Homes for Sale and Rent, Home Values, Agents and Advice | REMAX". The home page opens with a navy ad strip, a floating white navigation bar with the logo, "Buy", "Sell", "Find an Agent", a long search field ("Search by Country, City, Address o...") and an account icon over a full-bleed interior photograph. A translucent card over the photo promotes "Real Estate for the Golf Lifestyle" with the line "Explore golf communities with agents who know the market." and an "EXPLORE GOLF LIFESTYLES" button. The h1 is "Trending Listings", followed by a grid of property cards priced in THB.

The look is calm and corporate: off-white canvas, deep navy text, rectangular controls, and photography that does the selling. A strong blue (`#0043ff`) is reserved for the main agent-finding action.

## Colors

- **Canvas:** `#faf9f5`, a warm off-white and the largest background area (4288).
- **Ink:** `#000e35`, a very dark navy used for prices, headings in the content area, and as the footer background (area 1489). `nav-text` `#081a44` is a slightly different navy for navigation labels.
- **Primary:** `#0043ff`, fill of the "FIND A REMAX AGENT" button, with white text.
- **Beige panels:** `#f5f3ea` backs the secondary link buttons and the footer-like panels (area 1795).
- **Neutrals:** `#626366` body-role text, `#1a1a1a`, `#555961` input text, `#292c3d` link text, `#a9aeb8` hairline, `#f5f6f9` light text on navy (926 characters), `#000000de` navigation links and the h1.
- **Gold-olive border:** `#948b65`, the 2px outline of the "SEE ALL LISTINGS" secondary button.
- **Overlay:** `#00000080` (black at 50%) behind some imagery; `#d1d5dc` is a grey area (1024).

The CSS root defines a long set of design-system variables (button container fills such as `#1a3668`, `--color-blue-700: #091946`, `--color-red-900: #0b0b0b`, `--color-grey-550: #524d3b`, `--color-auth-lightgray: #6e7079`); only values that were measured on rendered elements are used as tokens.

## Typography

One family is used: Montserrat, with "Montserrat Fallback" declared as the fallback (1496 characters measured; `--font-base` points at it).

- **Display (h1):** 40px, weight 400, line height 60px; 32px / 48px on mobile.
- **Heading (h2 and inputs):** 16px, weight 600, line height 24px.
- **Body:** 16px, weight 400, line height 32px.
- **Button:** 14px, weight 600, line height 22px, letter spacing 0.84px, uppercase; 12px with 0.72px on mobile.
- **Link:** 14px, weight 500, line height 24.5px, uppercase.

By character count: 16px (802), 12px (416, letter spacing 0.3px), 32px (65), 14px (57), 28px (53, letter spacing -1.96px), 10px (52), 20px (34, -0.2px) and 40px. Weights: 400 (1172), 600 (261), 500, 550 and 700. Montserrat is an open-source Google Font, so no substitute is needed.

## Layout

The desktop pass is 1280px wide and 4193px tall. The hero is a full-bleed photo; the white navigation bar floats above the photo with a gap before the search bar and account tile. The listing grid is three columns with generous 48px and 40px gaps; each card holds an image, a property type label ("Single Family", "Condo/Townhome"), a bold price in navy (for example "THB 80,000", "THB 119,000,000"), bed and bath icon counts, a location ("Pattaya City, Thailand"), and a heart save icon. Advertisement slots are interleaved in the grid and labelled "ADVERTISEMENT". A centered "SEE ALL LISTINGS ↗" outlined button closes the section.

Gaps measured: 8px (69), 16px, 24px, 48px, 40px, 32px, 56px, 12px. Paddings: 8px, 2px, 4px, 16px, 12px, 32px, 24px, 88px.

## Elevation & Depth

Shadows are soft and sparse. The primary button carries a layered shadow ending in `rgba(20, 19, 14, 0.06) 0px 4px 12px -4px, rgba(20, 19, 14, 0.06) 0px 16px 32px -8px`. The beige link buttons use the Material-style stack `rgba(0, 0, 0, 0.2) 0px 3px 1px -2px, rgba(0, 0, 0, 0.14) 0px 2px 2px 0px, rgba(0, 0, 0, 0.12) 0px 1px 5px 0px`. A `0 2px 4px #00000026` shadow also appears in the CSS. The hero card uses a translucent blurred grey fill over the photo.

## Shapes

Radii measured: 4px (6 elements), 5px and 12px (one each). Primary and secondary buttons are 0px square; the beige link buttons have 4px. Cards and images are rectangular.

## Components

- **Primary button:** `#0043ff`, white text, Montserrat 14px weight 600 uppercase with 0.84px tracking, padding `14px 24px`, height 52px, radius 0px.
- **Secondary button:** transparent, black text, same type, 2px solid `#948b65` border, padding `12px 20px`, height 63px, radius 0px.
- **Link button ("EXPLORE GOLF LIFESTYLES"):** `#f5f3ea` fill, `#292c3d` text, 14px weight 500 uppercase, radius 4px, padding `12px 20px`, height 48px.
- **Search input:** Montserrat 16px weight 600, text `#555961`, height 32px, padding `4px 0px 5px`.
- **Navigation:** Montserrat 16px weight 550 in `#081a44`, items Buy, Sell, Find an Agent.
- **Listing card:** photo, label, price, icons, location, heart icon.
- **Footer:** navy `#000e35`, light text `#f5f6f9`, 889px tall, with sections such as "REMAX Websites" and "The REMAX Collection".

Imagery and voice: the hero photograph is a bright modern interior with a dark front door, pale wood floor, a rattan pendant light and a staircase, which sets a light, airy tone. Listing photos are uneven in the capture (a street-level house, a developer poster, a kitchen, a timber house) because they are agent-supplied; some carry faint RE/MAX watermarks. Microcopy is plain and functional: "Trending Listings", "Single Family", "Explore golf communities with agents who know the market." The logo is a red, white and blue balloon over a black wordmark; its reds and blues are logo artwork and are not measured as interface tokens. Carousel controls in the hero card are thin arrows with a slash between them and two short progress dashes.

## Design System Architecture

No public design-system documentation was opened. The shipped CSS is a Tailwind-based token system: variables such as `--font-base`, `--text-body-m`, `--text-heading-3xs: 1.25rem`, `--text-heading-xxs--line-height: 2.5rem`, `--measurement-spacing-36: 2.25rem`, `--measurement-spacing-384: 24rem`, `--measurement-line-height-heading-1-base: 1.5rem`, and button fill tokens (`--color-button-tertiary-container-fill-default: #ffffff`, `--color-button-senary-container-fill-map-default: #1a3668`) show named primary, secondary, tertiary and senary button variants. Values here come from `web/data/extracted/re-max.json` for https://www.remax.com/tha/en.

## Do's and Don'ts

- Do keep canvas `#faf9f5`, navy ink `#000e35`, and use `#0043ff` for the agent action only.
- Do use square, uppercase, 600-weight Montserrat buttons.
- Do show prices large and navy, with bed and bath counts as icon pairs.
- Don't round primary buttons; the measured radius is 0px.
- Don't put ads in the brand palette; the "ADVERTISEMENT" slots are third-party placements.
- Don't use the olive `#948b65` for fills; it is a 2px outline color.

## Responsive Behavior

The 390px pass measured: h1 32px with line height 48px; body text 18px / 32px in the promo card; primary button 342px wide, 46px high, padding `12px 24px`, text 12px with 0.72px tracking; navigation block 44px high. Menu pattern, grid column count and image sizing on mobile were not measured.

## Iteration Guide

1. Canvas `#faf9f5`, ink `#000e35`, primary `#0043ff`.
2. Montserrat only: 40px / 60px headings at weight 400, 16px / 32px body.
3. Buttons 52px high, 0px radius, uppercase 14px with 0.84px tracking.
4. Cards on the canvas with navy prices and icon rows.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=re-max --url=https://www.remax.com/tha/en --force --no-motion`, then `node web/scripts/verify-designs.mjs --slug=re-max`.
