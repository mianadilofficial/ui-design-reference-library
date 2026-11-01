---
version: alpha
name: Coldwell Banker
category: "Real Estate & PropTech"
description: "Coldwell Banker (coldwellbanker.com), the US residential real-estate brokerage. White #ffffff canvas under full-bleed home photography, royal blue #1f69ff actions, navy #012169 and #00003e bands, ColdwellSans 56px/500 headline with Roboto text, 8px buttons and 20px search card."
colors:
  canvas: "#ffffff"
  ink: "#000000de"
  primary: "#1f69ff"
  primary-hover: "#0040cb"
  on-primary: "#ffffff"
  navy: "#012169"
  navy-deep: "#00003e"
  slate: "#455970"
  slate-deep: "#1b3c55"
  ink-secondary: "#000000a6"
  nav-bg: "#22222259"
typography:
  display:
    fontFamily: ColdwellSans
    fontSize: 56px
    fontWeight: 500
    lineHeight: 64px
    letterSpacing: 0.48px
  display-mobile:
    fontFamily: ColdwellSans
    fontSize: 40px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: 0.32px
  body:
    fontFamily: Roboto
    fontSize: 10px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: 0.4px
  button:
    fontFamily: ColdwellSans
    fontSize: 15px
    fontWeight: 500
    lineHeight: 26px
    letterSpacing: 0.42855px
    textTransform: uppercase
  nav:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.8px
  link:
    fontFamily: Roboto
    fontSize: 13px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.16px
  input:
    fontFamily: Roboto
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.15px
rounded:
  xs: 7px
  sm: 8px
  md: 10px
  lg: 16px
  xl: 20px
  2xl: 48px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 18px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 50px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 50px
    height: 48px
    boxShadow: rgba(0, 0, 0, 0.2) 0px 3px 1px -2px, rgba(0, 0, 0, 0.14) 0px 2px 2px 0px, rgba(0, 0, 0, 0.12) 0px 1px 5px 0px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 23px
  search-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.xl}"
    padding: 8px 12px 12px
  listing-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    height: 346px
    boxShadow: rgba(0, 0, 0, 0.2) 0px 2px 1px -1px, rgba(0, 0, 0, 0.14) 0px 1px 1px 0px, rgba(0, 0, 0, 0.12) 0px 1px 3px 0px
  footer:
    textColor: "{colors.canvas}"
---

## Overview

Coldwell Banker's home page is a property-search front door. The page title is "Real Estate and Homes for Sale - Coldwell Banker", the footer line reads "GUIDING YOU HOME SINCE 1906", and the legal line says that "Coldwell Banker and the Coldwell Banker logo, are trademarks of Coldwell Banker Real Estate LLC". The first thing on the page is a full-bleed interior photograph (a modern living room with wood panelling and glazed doors) with a centered white headline, "Your next home is here", and a white search card floating on top of it. Everything below is a sequence of content bands on a white canvas: a listings carousel, a dark "Move Meter" band, a Seller's Assurance Program band, a home-value estimate and a state directory.

The palette is a clear two-blue system. A saturated royal blue (`#1f69ff`) is the action and link color; a deep navy (`#012169`) and an ink navy (`#00003e`) fill dark areas; two slate blues (`#455970`, `#1b3c55`) are used on the promotional cards. The photographs carry the warmth. The voice is plain and service-oriented: "Find a home", "My home value", "Find an Agent", "Collaborate with a trusted guide who knows your local market", with proprietary product names that carry the ® mark (Move Meter®, CB Estimate®, Seller's Assurance Program, Concierge Auctions).

The desktop page is 1280px wide and 4699px tall. A floating "Find an Agent / Connect" prompt with a close control sits over the page in the capture, and the extractor hid a cookie-consent bar and a backdrop scrim before measuring; these are overlays, not brand UI, and are not documented here.

## Colors

- **Canvas — `#ffffff`.** The measured page background (largest background area by weight, 1985). It is also the fill of the search card, listing cards and secondary buttons.
- **Ink — `#000000de`** (87% black). The most-read text on white (1496 weighted characters). A second step, `#000000a6` (65% black, `ink-secondary`), is the color of the fine-print paragraph (599 characters).
- **Primary — `#1f69ff`.** The fill of the "LEARN MORE" button, the "Find a home" tab, the circular search button and the small blue accents. Its measured hover, on the circular chevron button, is `#0040cb`. White (`#ffffff`) is the text on primary and the most-read text color overall (2061 characters, mostly on photographs and dark bands).
- **Navy — `#012169`** (area weight 561) and **ink navy — `#00003e`** (434) are the large dark fills. `#012169` is also declared in the page's CSS seven times.
- **Slate — `#455970`** and **deep slate — `#1b3c55`.** Measured background areas (75 and 275) that match the slate-blue promotional cards in the capture ("Concierge Auctions", "Buyer Connections", "AARP® Real Estate Benefits by Anywhere"); both also appear as text colors (90 and 56 weighted characters).
- **Header overlay — `#22222259`.** A translucent dark fill (about 35% opacity) behind the 64px header, which lets the hero photograph show through.
- **Other measured values:** `#808080` (background area weight 107, not used as a token) and `#0000008a` (54% black text, 6 weighted characters).

The only root variable on the page is `--swiper-theme-color: #007aff`, a carousel-library default, not a brand color.

## Typography

Two families are served from the site itself. **ColdwellSans** is the proprietary display and UI family, self-hosted as `/fonts/ColdwellSans-Regular.woff2`, `-Medium`, `-Semibold` and `-Bold` (weights 400, 500, 600 and 700). **Roboto** is the text family, self-hosted in 400, 500 and 700 (`/fonts/Roboto-Regular.woff`, `-Medium`, `-Bold`); it carries most of the characters on the page (3735 weighted, against 537 for ColdwellSans, 32 for Material Icons and 23 for the system stack). A Material Icons font draws the icon glyphs (the carousel chevron is literally the text "chevron_right"). ColdwellSans is not available as a public font; no official substitute is documented, and Roboto, which the site itself uses for body text, is the in-system fallback.

Measured roles:

- **Display** — ColdwellSans 56px / 500, line-height 64px, letter-spacing 0.48px (the hero h1, white on the photograph). On a 390px viewport: 40px / 500, line-height 48px, letter-spacing 0.32px.
- **Button** — ColdwellSans 15px / 500, line-height 26px, letter-spacing 0.42855px, uppercase ("LEARN MORE").
- **Navigation** — header text is ColdwellSans 13px / 500; the nav-link role was measured in a system stack at 16px / 400 with 0.8px letter-spacing.
- **Body / fine print** — Roboto 10px / 400, line-height 14px, letter-spacing 0.4px: the CB Estimate disclaimer, which is the extractor's body role.
- **Link / card text** — Roboto 13px / 400, line-height 18px, letter-spacing 0.16px (listing details).
- **Input** — Roboto 16px / 400, line-height 24px, letter-spacing 0.15px.
- **Eyebrow labels** — the capture shows a tracked uppercase eyebrow, "THE SMARTEST CHOICE FOR HOME SELLERS"; a 14px size with 3px letter-spacing was measured on 90 weighted characters.

Character-weighted sizes on the desktop page are 10px (930), 12px (920), 16px (881), 14px (630), 8px (525), 24px (125), 13px (119), 18px (56), 32px (53) and 40px (34). Weights measured: 400, 500, 600 and 700.

## Layout

The page is a vertical stack of full-width bands. The 64px header sits over the hero photograph, holding the monogram and "COLDWELL BANKER" wordmark at the left, the menus "Buy", "Sell" and "Agents & Offices" next to it, and "Sign In" at the right. The hero centers its headline and a 588px-wide white search card (height 137px) with three tabs, "Find a home", "My home value" and "International", over a single address field.

Below the hero a horizontal listing carousel shows 296px-wide, 346px-tall cards in a row with a round white "next" control at the right edge. The Move Meter band is a full-bleed dark aerial photograph of a forested road, with the "MOVE METER®" wordmark at the left and a phone mock-up at the right. The Seller's Assurance band is two columns: text on the left, a carousel of tall promotional cards on the right. The footer, 763px tall, carries the line "GUIDING YOU HOME SINCE 1906", columns of links, and a state-by-state directory.

Spacing values measured are 4px (most common, 102 paddings and 18 gaps), 8px, 12px, 16px, 24px, 32px, 40px and 50px, with larger paddings of 120px (6), 80px (3) and 114px (1). Density is moderate: photography and white space dominate the first screens, and the listing cards are dense with small text (price, status, beds, baths, square feet, address, MLS number).

## Elevation & Depth

Depth comes from layered Material-style shadows rather than borders. Four shadow recipes were measured: listing cards use `rgba(0,0,0,0.2) 0px 2px 1px -1px, rgba(0,0,0,0.14) 0px 1px 1px 0px, rgba(0,0,0,0.12) 0px 1px 3px 0px` (12 occurrences); buttons use `rgba(0,0,0,0.2) 0px 3px 1px -2px, rgba(0,0,0,0.14) 0px 2px 2px 0px, rgba(0,0,0,0.12) 0px 1px 5px 0px` (2); the circular search chevron uses `rgba(0,0,0,0.2) 0px 3px 5px -1px, rgba(0,0,0,0.14) 0px 6px 10px 0px, rgba(0,0,0,0.12) 0px 1px 18px 0px` (3); and one element uses `rgba(0,0,0,0.15) 4px 2px 10px 0px`. Borders are rare: `#ffffff` (17) and `#0000003b` (2). The hero search card lifts off the photograph by contrast alone; no shadow was measured on it.

## Shapes

Corners are rounded in a small set of steps: 8px for buttons and listing cards (28 occurrences), 50% for circular controls (24), 16px (17), 48px (2), and single uses of 20px (the search card), 10px and 7px. The generated tokens keep `xs` 7px, `sm` 8px, `md` 10px, `lg` 16px, `xl` 20px, `2xl` 48px and `pill` 9999px. The photography is cropped to the card radius, and status chips ("Coming Soon") are small filled labels over the photograph.

## Components

- **Primary button (`button-primary`).** "LEARN MORE": `#1f69ff` fill, white ColdwellSans 15px / 500 uppercase text with 0.42855px tracking, 8px radius, 8px 50px padding, 48px tall and 199px wide, with the three-layer button shadow above.
- **Circular search button.** 40px, 50% radius, `#1f69ff` fill with a white chevron; the measured hover fill is `#0040cb`.
- **Search card (`search-card`).** White, 20px radius, padding 8px 12px 12px; the active tab "Find a home" is blue (`#1f69ff`) with an underline, the other tabs are dark text.
- **Text input.** Roboto 16px / 400, 23px tall, 490px wide, with the placeholder "Enter an address, city, or zip".
- **Listing card (`listing-card`).** White, 8px radius, 296px wide and 346px tall, with a photograph, a "Coming Soon" chip (white text on a dark blue fill), a heart icon, a photo count, the price, bed / bath / square-foot / property-type line, address, and an MLS number with a small blue logo mark.
- **Header (`nav`).** 64px tall, translucent `#22222259` fill, white text; on a 390px viewport it is 56px tall.
- **Promotional cards.** Tall slate-blue cards with vertical rotated white labels, and a darker slate-blue text panel under a photograph for Concierge Auctions; the measured slate fills are `#455970` and `#1b3c55`.

## Design System Architecture

No public design-system documentation or brand-guideline page is linked from the home page, and none was found in the pages opened (https://www.coldwellbanker.com/ and its two stylesheets), so no official design system is documented. The de-facto system is a Next.js application (stylesheets at `/_next/static/css/…`) built on Material UI components: the extraction recorded class names with `Mui` prefixes and emotion hashes (for example `MuiBackdrop-root`, `css-1rr9cau-MuiBackdrop-root`, `MuiFilledInput-root`), a Material Icons font and Material-style shadow stacks. Brand typography is self-hosted: `@font-face` rules in the shipped CSS (`https://www.coldwellbanker.com/_next/static/css/dec6d34c024717b9.css`) declare ColdwellSans in four weights and Roboto in three, with `font-display: swap`. Because most component styles are emitted by CSS-in-JS at runtime, the static stylesheets expose almost no tokens; the colors, radii and sizes in this file are read from computed styles on the rendered page.

## Do's and Don'ts

Do:
- Keep the page canvas white and let large photography carry the warmth.
- Use `#1f69ff` for actions and links, with `#0040cb` as the hover step on filled controls.
- Set headlines in ColdwellSans 500 and running text in Roboto; make buttons uppercase 15px ColdwellSans.
- Keep corners at 8px for buttons and cards, 20px for the hero search card and 50% for round controls.
- Use soft, layered Material-style shadows on cards and buttons.

Don't:
- Don't document or reuse the "Find an Agent" prompt, the cookie-consent bar or the Swiper default `#007aff` as brand UI.
- Don't use hard borders to separate cards; the measured system uses shadows.
- Don't put the blue on large fills: navy `#012169` and `#00003e` are the large dark fills.
- Don't set ColdwellSans in light weights; the shipped weights are 400, 500, 600 and 700 and the headline is 500.
- Don't use sharp corners on primary buttons: the measured radius is 8px.

## Responsive Behavior

Measured at 390px wide: the hero headline falls from 56px to 40px (line-height 48px, letter-spacing 0.32px) and wraps in a 260px-wide, 96px-tall block; the fine-print body text stays 10px in a 326px-wide block; the "LEARN MORE" button keeps its `#1f69ff` fill, 15px / 500 type and 8px radius, with padding 8px 22px, 48px height and 326px width; the header is 56px tall with a `#22222259` background and its text reads "Sign In" only. Character-weighted sizes on mobile are 12px, 10px, 16px, 8px, 14px, 20px, 13px and 24px.

Declared in the stylesheets opened: `@media screen and (max-width: 600px)` (three rules), `@media (max-width: 500px)`, `@media screen and (min-width: 601px) and (max-width: 1024px)`, `@media screen and (min-width: 1024px)` and `@media screen and (max-width: 1024px)`. Menu behavior on mobile, tablet layouts and dark mode were not measured.

## Iteration Guide

1. Start with white `#ffffff`, text `#000000de`, and the action blue `#1f69ff`; add navy `#012169` and `#00003e` only for dark bands.
2. Put a large photograph under a translucent `#22222259` 64px header, center a 56px / 500 white headline, and float a 20px-radius white search card on it.
3. Build listing cards at 296px by 346px, 8px radius, with the measured two-line shadow recipe.
4. Use uppercase 15px ColdwellSans buttons with 8px radius, 48px height and the button shadow.
5. Set fine print at Roboto 10px / 400 with 0.4px tracking and 65% black.
6. Check every change with `node web/scripts/verify-designs.mjs --slug=coldwell-banker`.
