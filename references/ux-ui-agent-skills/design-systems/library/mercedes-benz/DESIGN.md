---
version: alpha
name: Mercedes-Benz
category: "Automotive"
description: "Mercedes-Benz USA homepage (mbusa.com): near-black #0d0d0d header and footer, white #ffffff canvas, #9f9f9f nav labels, a #0078d6 blue button with 2px radius and 48px height, MBCorpoATitleCond 56px headlines over full-bleed car imagery, MBCorpoS 16px for text, and tall dark shopping-tool tiles."
colors:
  canvas: "#ffffff"
  ink: "#0d0d0d"
  primary: "#0078d6"
  on-primary: "#ffffff"
  surface-3: "#333333"
  ink-muted: "#9f9f9f"
  ink-4: "#303030"
  ink-6: "#696969"
typography:
  display:
    fontFamily: MBCorpoATitleCond, Arial, sans-serif
    fontSize: 56px
    fontWeight: 400
    lineHeight: 60px
  display-mobile:
    fontFamily: MBCorpoATitleCond, Arial, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 44px
  heading:
    fontFamily: MBCorpoS, Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: MBCorpoS, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 8px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 48px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-muted}"
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

# Mercedes-Benz

## Overview

The measured site is the Mercedes-Benz USA homepage at mbusa.com (extractor final URL https://www.mbusa.com/en/home?tab=step-into-s-class-luxury, title "Luxury Cars - Sedans, SUVs, Coupes & Wagons | Mercedes-Benz USA"). It is a showroom page: a dark header with the three-pointed star at the left, links (Vehicles, Electric, Shopping, Owners) and utilities at the right (My Account, Find a Dealer, Search, and an "Ask Mercedes-Benz" AI-assistant button); a full-bleed hero whose h1 reads "Great things come to those who act." in white condensed type; a "Shopping Tools" row of four tall dark photographic tiles (All Vehicles, Build Your Own, Special Offers, View Inventory) with white uppercase labels and line icons; and an "Electric. Hybrid. Heritage." section titled "Meet our powertrains." with a wide car photograph above three numbered columns (Electric, Plug-In Hybrid, Gas-Powered), each with a short paragraph and a blue "Learn More" link. A fetched copy of the homepage confirms those sections and the "View Offers", "View Inventory" and "Build Yours" calls to action.

A Usercentrics consent banner ("Analytics and Advertising", with a "Confirm" button and a toggle) covers the middle of the capture and a grey modal backdrop sits over the hero; the stealth re-run of the extractor still showed it. These consent controls are not brand UI and are not documented as such. The hero photograph is therefore not visible in the capture, and the h1's white colour is measured over imagery that is not shown; the canvas (#ffffff) and ink (#0d0d0d) were chosen from the measured body areas that are visible and match the capture.

## Colors

- **Canvas (#ffffff)** is the dominant background by area; **ink (#0d0d0d)** is both the main text colour on white and the fill of the header and footer bars.
- **Primary (#0078d6)** is the fill of the measured buttons ("Follow on Instagram", "Explore" on the C-Class promotion) and the colour of blue links and the "Learn More" text; `on-primary` is #ffffff.
- **Greys:** `surface-3` (#333333) is a second dark surface; `ink-muted` (#9f9f9f) is the dominant text colour on dark bars and a border colour; `ink-4` (#303030) is a secondary dark text colour; `ink-6` (#696969) is a mid grey for inactive text.
- **Excluded:** a #0000ee value was measured only on a one-pixel "Skip Navigation" link and is a browser default link colour, not a brand colour.

White text on photography is used for tile labels and the hero headline; those labels sit on darkened lower portions of each tile photograph.

## Typography

Fonts loaded by the page: MBCorpoA, MBCorpoS (regular and bold), MBCorpoSTitleLight, MBCorpoATitleCond, MBCorpoSReg, MBCorpoSTitleBold, and two icon fonts. The h1 uses **MBCorpoATitleCond** at 56px, weight 400, line height 60px (36px / 44px on mobile), a condensed title face. Body and nav use **MBCorpoS** at 16px on 24px leading, regular for text and 700 for buttons and headings (the `heading` token: 16px, 24px, 700). In the capture the section title "Meet our powertrains." is set in a lighter serif-like title face, and the small uppercase kicker lines ("ELECTRIC. HYBRID. HERITAGE.", "SHOPPING TOOLS") are letter-spaced sans; those two styles were not extracted as tokens, so no sizes are claimed for them.

These faces are proprietary to the company; as substitutes use Arial (the declared fallback) for text and a condensed grotesque such as Arial Narrow or Roboto Condensed for headlines.

## Layout

The page alternates full-bleed bands with narrow centred content: the four shopping tiles occupy a centred strip of tall portrait cards separated by even gaps, the powertrain section is a centred text intro over a wide image with a three-column grid below, each column topped by a number and a hairline. The header is a single dark bar (the nav role measured 82px tall). Buttons are 48px high with 12px 24px padding. The spacing ladder is 1px, 2px, 4px, 5px, 8px, 10px, 11px, 12px, 16px, 18px; most large separations come from section bands rather than tokens.

## Elevation & Depth

Depth is mostly photographic. The only measured shadow is `rgba(0, 0, 0, 0.8) 0px 3px 7px 0px`, used on a floating element. The consent banner in the capture sits above a dimming backdrop. Tiles and cards are flat, with hairlines and numbered tops separating the powertrain columns.

## Shapes

The shape language is nearly square: the radius ladder is 2px, 4px, 8px and a pill value, and every measured button uses 2px (`rounded.xs`) at a 48px height, giving crisp rectangular buttons. Photographic tiles in the capture are square-edged. Rounded values above 2px were not assigned to specific elements, so they are listed only as available steps.

## Components

- **button-primary:** #0078d6 fill, #ffffff label, MBCorpoS 16px bold, 2px radius, 48px high, padding 12px 24px.
- **button-secondary:** measured with the same blue fill and geometry (the extractor's second candidate, the C-Class "Explore" button).
- **link (button-style):** #ffffff fill, #0d0d0d bold label, same 2px radius, 48px high ("View Offers").
- **nav / nav-link:** dark #0d0d0d bar with #9f9f9f 16px regular labels.
- **footer:** #0d0d0d background with #ffffff text.
- **Shopping tile (capture):** tall dark photo tile with a white line icon and uppercase two-line label.

## Design System Architecture

No public Mercedes-Benz design-system documentation was found among the pages opened (one brand-host guess did not resolve). The homepage at https://www.mbusa.com/en/home was opened and used only for page structure. The de-facto system is visible in the loaded assets: a family of corporate typefaces with title, condensed and bold variants named with an `MBCorpo` prefix, an icon font set (`nafta-icons`, `nafta-icons-v2`), and a consent layer provided by a third party. The page exposes almost no CSS custom properties (only a scroll-width variable), so the colours here come from measured computed styles, not from a token file.

## Do's and Don'ts

- Do keep the interface near-black and white, with one blue for actions.
- Do use crisp 2px-radius rectangular buttons at 48px height.
- Do let photography carry atmosphere; keep labels white over darkened image areas.
- Do pair a condensed title face for headlines with a plain sans for text.
- Don't use pill or heavily rounded buttons.
- Don't reuse the browser-default link blue (#0000ee) anywhere.
- Don't treat the consent banner or its toggle as brand components.
- Don't add colour fills beyond #0078d6.

## Responsive Behavior

The mobile measurement at 390px reduces the h1 from 56px on 60px leading to 36px on 44px leading in the same condensed face. The powertrain three-column grid and the four-tile row are expected to reflow, but no other breakpoint behaviour was measured and none is claimed.

## Iteration Guide

1. Dark #0d0d0d header and footer, white canvas, #9f9f9f nav labels.
2. Headline in a condensed face at 56px / 60px, white over a car photograph.
3. Buttons: #0078d6, white bold 16px, 2px radius, 48px.
4. Shopping tiles: tall dark photo tiles with white uppercase labels.
5. Section text in 16px / 24px sans, with blue "Learn More" links.
6. Check any additional colour against the measured palette before adding it.

## Imagery and Voice Notes

Photography is cinematic and architectural: a pale electric sedan driving toward the camera on a tree-lined road in late golden light, with a sculptural curved building behind; a close crop of a key fob; glossy red pedal-like forms; a red car beside a stone wall; a close view of a wheel with the star at its centre. Tiles are cropped tall and darkened at the base so that white caps text can sit there. Colour in the interface stays out of the way so that these images set the tone, and the one blue is reserved for actions.

Voice is composed and aspirational. The hero line is a proverb ("Great things come to those who act."), the section kicker is a three-word slogan ("Electric. Hybrid. Heritage."), and body paragraphs are two to four sentences about driver benefits. Calls to action are short and literal: View Offers, View Inventory, Build Yours, Learn More, Explore Vehicles. The powertrain columns are numbered 01 to 03, and the active one is marked by a darker blue-tinted rule and black text, while inactive ones fade to grey; a slideshow control sits above the image. Hover and focus states were not measured beyond the declared colours, so none are described.
