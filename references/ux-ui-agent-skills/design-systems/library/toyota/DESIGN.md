---
version: alpha
name: Toyota
category: "Automotive"
description: "Toyota USA homepage system: white #ffffff canvas with #000000 text, the brand red #e10a1d (measured link colour, matching the logo in the capture), tcomMed 48px display headlines, white pill buttons over full-bleed vehicle photography, and muted olive-grey #969688 vehicle cards with 8px to 50px radii."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#e10a1d"
  accent-blue: "#145fff"
  surface: "#969688"
  surface-2: "#f6f6f6"
  surface-3: "#eae7e3"
  ink-3: "#767676"
  ink-5: "#666666"
  ink-6: "#919191"
  hairline: "#d8d8d8"
  link: "#e10a1d"
typography:
  display:
    fontFamily: tcomMed, HelveticaNeueMedium, "Helvetica Neue Medium", Arial, sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 56px
    letterSpacing: "-0.5px"
  display-mobile:
    fontFamily: tcomMed, HelveticaNeueMedium, "Helvetica Neue Medium", Arial, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: "-0.5px"
  body:
    fontFamily: tcomSans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 10px
    fontWeight: 400
    lineHeight: 18px
  nav:
    fontFamily: tcomSans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: tcomSans, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  body-dominant:
    fontFamily: tcomLight
    fontSize: 14px
    fontWeight: 400
rounded:
  xs: 4px
  sm: 8px
  md: 8.99px
  lg: 18px
  xl: 20px
  2xl: 28px
  3xl: 50px
  pill: 9999px
spacing:
  s1: 3px
  s2: 6px
  s3: 6px
  s4: 8px
  s5: 9px
  s6: 10px
  s7: 12px
  s8: 12px
  s9: 14px
  s10: 15px
components:
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 32px
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
---

# Toyota

## Overview

The Toyota USA homepage (https://www.toyota.com/, title "New Cars, Trucks, SUVs & Hybrids | Toyota Official Site") is a showroom page built from three strong moves: a full-bleed rotating hero of vehicle or lifestyle photography with a centered white headline and a white pill button, a "Explore All Vehicles" model carousel in cards, and a closing full-bleed photograph of the electrified range. The hero in the capture carries a partner lockup of the Toyota emblem with an American football league mark and the line "Lighting the way for the next generation." in white, centered, over a darkened image. Colour in the interface is intentionally scarce: a white canvas (#ffffff), black text (#000000), greys, and one red, `primary` #e10a1d, the measured colour of text links and the colour of the logo mark in the capture. The imagery supplies the rest.

A cookie-consent card ("Welcome to Toyota!") overlaps the lower left of the capture; the stealth re-run of the extractor still showed it. Its close button and links are consent controls and are not documented as brand UI. The extraction found no primary-button fill, so the role override is recorded in SOURCES.json.

Doubts on record: no Toyota brand or design-system page could be read (the site returned 403 to the fetch tool, and web search was unavailable), so nothing about the brand's own guidelines is claimed. The extractor's most-saturated action colour was #145fff, a blue; its placement was not established, so it is kept only as `accent-blue`.

## Colors

- **Canvas (#ffffff)** and **ink (#000000)** are the page and text baseline.
- **Primary (#e10a1d)**, also named `link`: the measured link colour; in the capture the same red appears in the emblem and in small icon accents of the shopping-tool icons.
- **Accent blue (#145fff):** measured as the most saturated action-like colour in the page data; usage unconfirmed.
- **Surfaces:** `surface` (#969688) is the muted olive-grey measured by area and visible as the vehicle-card panels; `surface-2` (#f6f6f6) is the footer background in the component list; `surface-3` (#eae7e3) is a warm light grey.
- **Greys:** `ink-3` (#767676), `ink-5` (#666666) and `ink-6` (#919191) are secondary text greys measured by character count, used for legal and fine print; `hairline` (#d8d8d8) is the border colour.

White text appears on the hero and on the dark closing photograph. Because that text sits on imagery, its legibility depends on the photographic darkening applied in the artwork rather than on a token.

## Typography

The site loads three families named `tcomLight`, `tcomSans` and `tcomMed`. Display headlines (the "Explore All Vehicles" h1) use tcomMed with Helvetica Neue Medium and Arial fallbacks at 48px, weight 400, line height 56px and letter spacing -0.5px; on mobile the same face drops to 32px on 40px leading. Navigation and links use tcomSans at 14px and 16px respectively (line heights 20px and 16px). The measured `body` role is tcomSans at 10px on 18px leading, which is the fine print and disclaimers style (starting-MSRP asterisk notes); the dominant-by-character body style is tcomLight at 14px. Weights are all 400: emphasis comes from selecting the medium face, not from a bold weight.

These are Toyota-specific loaded faces; Helvetica Neue and Arial are the declared fallbacks and are the sensible substitutes: Helvetica Neue Medium for headings and Helvetica Neue Light for body.

## Layout

The page is a vertical stack of full-width bands: a white 1-row header with the logo at left, three primary links (Vehicles, Shop, Support & Service) and an account link at right; the hero; a centered h1 with a category tab row (Trucks, Crossovers & SUVs, Electrified, Upcoming Vehicles) underlined in black; a two-card carousel with "1 of 12" pagination; two pill buttons; a "Shopping Tools" heading above a pale grey panel divided into four equal columns by vertical hairlines; and the closing hero. Cards use 32px padding. The spacing ladder is small (3px, 6px, 8px, 9px, 10px, 12px, 14px, 15px), covering control-level gaps, with large band spacing coming from the layout itself.

## Elevation & Depth

Depth is created by photography rather than shadow. The measured card carries no box shadow; separation comes from colour blocks (the olive-grey cards on white, the pale grey tool panel) and from hairlines (#d8d8d8). Overlays use darkening gradients on imagery to hold white text, and the consent card floats above the page with a visible edge.

## Shapes

The radius ladder is 4px, 8px, 8.99px, 18px, 20px, 28px, 50px and full pill (9999px). In the capture the buttons are full pills, carousel arrows are circles, vehicle cards and the tool panel have small to medium rounding, and the hybrid tags on cards have squarer corners. The exact radius of each element was not measured per role, so the ladder is listed without assigning specific values to individual components.

## Components

- **nav / nav-link:** white background, #000000 text, tcomSans 14px, spaced links with the logo left.
- **link:** #e10a1d, tcomSans 16px.
- **card:** white background, #000000 text, 32px padding; vehicle cards in the capture sit on the olive-grey surface with a photograph on one side, model year, name, tagline, price and MPG figures, an "Explore" white pill and a "Build" text link with chevron.
- **footer:** #f6f6f6 background, #000000 text.
- **Pills and tabs (capture only):** white pills with black labels on dark imagery, outlined pills on white, a black underline marks the active tab. No fill values for these were measured.

## Design System Architecture

No public Toyota design system exists among the pages opened (none could be fetched). The de-facto system is visible in the CSS custom properties: names prefixed `dg_` such as `--dg_gold` (#B6A171) and `--dg_gray` (#58595b), with a set of colour role names (black, white, offWhite, primary, hover, active, ready, tagGray, disabledDarkGray, disabledLightGray) most of which resolve to `inherit` in the measured state, which suggests a theming layer applied per context. Fonts are served under short internal names (tcomLight, tcomSans, tcomMed). There is no link to cite because the site could not be fetched (HTTP 403).

## Do's and Don'ts

- Do keep the chrome white and black and let vehicle photography carry colour.
- Do use #e10a1d sparingly, for links and brand marks.
- Do put hero copy in centered white type over a darkened image.
- Do express hierarchy through the medium face and size, not extra weights.
- Don't treat the cookie-consent card or its close control as brand UI.
- Don't use #145fff as a brand colour until its role is confirmed.
- Don't add shadows to cards; use colour blocks and hairlines.
- Don't set fine print above the measured small size.

## Responsive Behavior

The mobile measurement at 390px reduces the h1 from 48px to 32px and its line height from 56px to 40px, keeping the same face and letter spacing. The four-column shopping-tools panel, two-up carousel and header links are expected to reflow, but only the type step-down was measured, so no other breakpoint behaviour is claimed.

## Iteration Guide

1. Begin with #ffffff and #000000, header with logo and three links.
2. Headline in tcomMed-style 48px / 56px, -0.5px tracking; fall back to Helvetica Neue Medium.
3. Add full-bleed photography with centered white copy and a white pill.
4. Use the olive-grey #969688 for vehicle cards, #f6f6f6 for footer, #d8d8d8 for hairlines.
5. Keep #e10a1d for links and marks; confirm #145fff usage before using it.
6. Keep fine print at the measured 10px with 18px leading.
