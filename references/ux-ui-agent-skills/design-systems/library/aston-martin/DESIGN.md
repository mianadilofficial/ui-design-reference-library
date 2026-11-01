---
version: alpha
name: Aston Martin
category: "Luxury"
description: "Aston Martin UK home page (astonmartin.com/en-gb): full-bleed car photography with near-black #161a11 hero fields, off-white #f4f4f2 news band, racing-green #00665e actions, AstonMartinFlare serif headlines at 54px and 32px, AstonMartinSans 14px body with 0.55px tracking, 2px-radius buttons."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#00665e"
  on-primary: "#ffffff"
  primary-hover: "#e3f1f0"
  surface-black: "#161a11"
  surface-offwhite: "#f4f4f2"
  ink-soft: "#121212"
  ink-muted: "#7d7e7e"
  link-bg: "#ffffff26"
  nav-bg: "#00000099"
typography:
  display:
    fontFamily: AstonMartinFlare, sans-serif
    fontSize: 54px
    fontWeight: 400
  display-mobile:
    fontFamily: AstonMartinFlare, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 45px
  subheading:
    fontFamily: AstonMartinFlare, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
  body:
    fontFamily: AstonMartinSans, sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 19.992px
    letterSpacing: 0.55px
  button:
    fontFamily: AstonMartinSans
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.55px
  nav:
    fontFamily: AstonMartinSans, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: 0.55px
rounded:
  xs: 2px
  sm: 6px
  md: 70px
spacing:
  s1: 8px
  s2: 16px
  s3: 32px
  s4: 40px
  s5: 48px
  s6: 56px
  s7: 72px
  s8: 76px
  s9: 88px
  s10: 104px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 56px
    boxShadow: rgba(0, 64, 58, 0.1) 0px 1px 4px 0px, rgba(0, 64, 58, 0.1) 0px -1px 0px 0px inset
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 56px
    boxShadow: rgba(0, 64, 58, 0.1) 0px 1px 4px 0px, rgba(255, 255, 255, 0.2) 0px 1px 2px 0px inset, rgba(0, 64, 58, 0.1) 0px -1px 0px 0px inset
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 104px 48px 48px
---

## Overview

The first URL queued for this brand, astonmartin.com, serves a market-selection splash page ("Welcome to Aston Martin - Choose your preferred market") with a dark wing-badge photograph, a "Select Your Site" dropdown, an "ENTER" button and links to country sites. That splash was measured first and discarded as a language and region entry page. The real home page, astonmartin.com/en-gb (title "Aston Martin | Iconic Luxury British Sports Cars | Aston Martin UK", language en-GB), was then measured, and every value in this file comes from it. The name stays "Aston Martin" because the measured site belongs to the brand itself.

The page is a vertical sequence of full-width editorial bands. A black hero carousel opens on "Aston Martin x MobLand" with an "Explore" button and previous/next arrows; a model feature follows, "DBX GT" as the measured h1 in white 54px and a "Vantage" feature (a teal-green coupe in a studio) with "THRILL. DRIVEN." and two buttons, "Explore" and "Build"; then a two-up split for "ASTON MARTIN PRE OWNED" and "ASTON MARTIN MAGAZINE"; "Stories" with a green "Read all stories" button and heritage article cards; an off-white "NEWS" band with dated items and "EXPLORE +" links; and a white footer with link columns, social icons, a market selector ("United Kingdom") and legal links. A small wing logo is centered at the top and "Configure" and "Enquire" buttons sit at the top right.

The voice is restrained and confident: short feature labels ("THRILL. DRIVEN."), category tags in green capitals ("HERITAGE"), and dated, factual headlines.

## Colors

- **Canvas** `#ffffff`; **ink** `#000000` (1,085 measured characters); **ink soft** `#121212` (125 characters, headings on light); **ink muted** `#7d7e7e` (42 characters, captions and dates).
- **Primary** `#00665e`, a deep racing green: 89 measured characters of link and button text (for example "Configure" and "Explore") and the fill of the "Read all stories" button. **Primary hover** `#e3f1f0`: the "Configure" button measured changing from white to rgb(227, 241, 240) on hover with the green text and border unchanged.
- **Surface black** `#161a11`, the root variable `--black`, is the largest measured area (14,336 units), the dark carousel and feature fields; pure `#000000` covers 2,048 more.
- **Surface off-white** `#f4f4f2` (1,138 area units) is the News band.
- **Link background** `#ffffff26` (white at 15%) is the translucent button over photographs; **nav background** `#00000099` (black at 60%).

The root variables publish a broader set: `--gold` #B58C67, `--almostBlack` #080B11, `--blackFooter` #0E1116, `--whisperGrey` #e5e5e5, `--greyLight` #C4C4C4, `--offWhite1` #f7f8f4 and alpha variants (`--darkGrey60`, `--white60`). They were not measured on rendered elements and are not tokens. The earlier measurement role assignment gave `primary` the white button fill; here the green is primary because it is the only chromatic action color, and the white fill is the canvas value.

## Typography

Two proprietary families are loaded: AstonMartinFlare (400, 500), a serif used for headlines (396 measured characters), and AstonMartinSans (100, 400, 500, and 800 in the splash), used for 1,207 characters.

- Display (h1 "DBX GT"): AstonMartinFlare 400, 54px. Mobile: 36px / 45px.
- Subheading (h3 article titles): AstonMartinFlare 400, 32px / 40px.
- Body: AstonMartinSans 300, 14px / 19.992px, letter-spacing 0.55px (mobile body measured the same).
- Button: AstonMartinSans 400, 16px / 24px, letter-spacing 0.55px.
- Nav: AstonMartinSans 400, 14px / 21px, letter-spacing 0.55px.
- Other measured sizes: 9px (388 characters, small captions and labels), 18px and 14px. Root variables map heading roles to families (`--ff-h6` is the Flare family, `--fs-h6` 12px, `--ls-h6` 0.55px, `--fw-h6` medium).

Font substitutes: both are proprietary. Use a humanist sans (such as Lato or Source Sans) for AstonMartinSans and a wedge-serif (such as a light slab or Flare-style serif like Merriweather) for the headlines.

## Layout

The page is 5,046px tall at 1280px. The header shows 3 visible links and a menu toggle labeled "Navigation Menu" on desktop. Bands are full-width, edge-to-edge photographs with text anchored at the lower left (the first feature) or centered (Vantage); the split band is two equal halves; the Stories and News bands use horizontally scrolling carousels with arrows and progress dashes, and the layout probe counted up to 5 card columns. The footer uses a hairline rule under the "ASTON MARTIN" wordmark and three columns of links. Spacing steps measured: 8, 16, 32, 40, 48, 56, 72, 76, 88 and 104px; the footer padding is 104px 48px 48px and the root variable `--footerHeight` is 204px.

## Elevation & Depth

Buttons carry a layered, green-tinted shadow: `rgba(0, 64, 58, 0.1) 0px 1px 4px 0px` plus an inset `rgba(0, 64, 58, 0.1) 0px -1px 0px 0px` (7 uses), and a secondary variant adds an inset white highlight `rgba(255, 255, 255, 0.2) 0px 1px 2px 0px`. The translucent link buttons over photography use `rgba(18, 18, 18, 0.2) 0px 1px 3px 0px` with inset highlights. A `0 -3px 10px -2px rgba(0,0,0,.1)` shadow appears on 3 elements and `0 0 150px 150px rgba(0,0,0,.1)` on the splash.

## Shapes

Radii measured: 2px (15 uses), 6px (7), 4px (6), 70px (4), 18px, 10px, 1px and 30px. Buttons are 2px; the tokens carry 2px, 6px and 70px.

## Components

- **Light button** ("Configure", "Explore"): white fill, #00665e text, AstonMartinSans 16px, 56px tall in the feature bands (40px measured on the header "Configure"), padding 0px 16px, 2px radius, green-tinted shadow; hover fill #e3f1f0.
- **Green button** ("Read all stories"): #00665e fill, white text, same size and radius.
- **Translucent button** ("Build", "Enquire"): #ffffff26 fill with white text over photography.
- **Carousel controls:** thin line arrows and short progress dashes.
- **Cards:** image on top, green uppercase category tag, 32px Flare title, date in muted grey.
- **Footer:** white, #000000 text, link columns and social icons.

## Design System Architecture

No public design system or brand guidelines were found on the pages opened (the splash page and en-gb home page via extraction); the site links to none. The shipped CSS defines a named variable system: color variables (`--black`, `--white`, `--almostBlack`, `--darkGrey05` to `--darkGrey95`, `--gold`), type variables per role (`--ff-h3`, `--ff-h6`, `--fs-para1` 14px, `--fs-h6` 12px, `--ls-h6`, `--fw-xtrabold` 800) and layout variables (`--footerHeight`). Breakpoints by usage are min-width 1024px (57 rules), max-width 1023px (39), min-width 1025px (37), min-width 1440px (22) and max-width 1024px (21).

## Do's and Don'ts

- Do let photography fill the full width and keep interface chrome minimal.
- Do use racing green #00665e for actions and category tags.
- Do set headlines in the Flare serif and everything else in the Sans.
- Do keep corners at 2px.
- Don't add accent colors beyond green; gold and the other root colors were not measured on screen.
- Don't use the market-select splash as the visual reference for the brand site.
- Don't tint the off-white band; it is #f4f4f2.

## Responsive Behavior

A 390px mobile pass measured the h1 at 36px / 45px, body text at 14px / 19.992px (342px wide box), a primary CTA, 1 visible header link (against 3 on desktop), the "Navigation Menu" toggle visible and up to 5 card columns by the layout probe. Further mobile layout (carousel behavior, footer columns): not measured. Stylesheet breakpoints are listed above.

## Iteration Guide

1. White canvas, black ink, #161a11 for dark photo fields, #f4f4f2 for the News band.
2. Headlines in the Flare serif (54px, 32px), UI in the Sans with 0.55px tracking.
3. Buttons: 2px radius, #00665e text on white or white text on #00665e, with the green-tinted shadow.
4. Use full-bleed car photography.
5. Run `node web/scripts/verify-designs.mjs --slug=aston-martin`, then measure the carousels on mobile.
