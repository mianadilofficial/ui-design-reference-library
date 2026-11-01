---
version: alpha
name: "Harley-Davidson"
category: "Automotive"
description: "Harley-Davidson USA home page measured live: black and white bands with Harley orange #fa6600 promo strip and buttons, Franklin Gothic ATF in uppercase bold at 48px display and 16px body, 4px corners and #f6f6f6 product tiles."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#fa6600"
  on-primary: "#ffffff"
  surface-tile: "#f6f6f6"
  ink-muted: "#757575"
  hairline: "#eeeceb"
typography:
  display:
    fontFamily: "\"Franklin Gothic ATF\", sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 48px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Franklin Gothic ATF\", sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 32px
    textTransform: uppercase
  heading:
    fontFamily: "\"Franklin Gothic ATF\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    textTransform: uppercase
  body:
    fontFamily: "\"Franklin Gothic ATF\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Franklin Gothic ATF\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
  nav:
    fontFamily: "\"Franklin Gothic ATF\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  button-secondary:
    fontFamily: "\"Franklin Gothic ATF\", sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 4px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 16px
  s10: 17px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 12px 0px 16px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    padding: 12px 32px
    height: 52px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
  card:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    padding: 34px 10px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.primary}"
---

# Harley-Davidson

## Overview

The measured page is the US English home page, harley-davidson.com/us/en/index.html, titled "Official Harley-Davidson Motorcycles | Harley-Davidson USA". It is a motorcycle-and-apparel storefront in black, white and one orange (`primary`, #fa6600). From the top the page has a black utility bar ("Select Your Store", "Learn to Ride", "Test Ride", "Dealer Locator", "Track Order", "United States - English"), a white main bar with the Bar & Shield logo, uppercase links (Motorcycles, H-D1 Marketplace, Parts, Mens, Womens, Kids, Goods & Gifts, Discover H-D), a search field, Sign In and Cart, then a solid orange promo strip with two rotating offers. A full-width photographic hero follows ("OLD-SCHOOL LOOK, NEW-SCHOOL MOVES" over the headline "HERITAGE CLASSIC", with a white "Explore The Motorcycle" button), an orange-button bar ("Customize the motorcycle you like." with "Build Your Own"), a carousel of model tiles with starting prices, a black three-tile "SHOPPING TOOLS" row, a grey "YOUR RIDE. YOUR RULES." feature, and a "SHOP BY CATEGORY" photo row. The extracted page height is 5997px at a 1280px viewport.

The voice is bold, lifestyle-driven and direct, as the fetched page shows: "Purpose-built for the pursuit", "Motorcycles Built to Lead", "Book a test ride", "Find a dealer". Headlines are short, uppercase and heavy. Product tiles list a name in uppercase, "Starting at $24,999" and "8 colors, 3 trims available" in small grey text.

Imagery alternates between cinematic riding photography (a rider on a desert road) and clean studio shots of bikes on pale grey squares. The page itself uses an Osano cookie-consent component (its variables fill most of the root); the consent UI is not brand UI and is not documented here.

The promo strip is worth noting as a system element: it is a full-width solid orange bar directly under the navigation, with centered underlined white offer links and chevrons at each side, so the brand color appears at the very top of every view before any photography. Pricing is shown openly on model tiles, which keeps the page closer to a retail catalogue than a brand film, even though the hero is cinematic.

## Colors

- `canvas` #ffffff is the main page background; `ink` #000000 is the text color and the fill of the utility bar, the shopping-tool tiles and the footer; `surface-tile` #f6f6f6 is the light grey used for product tiles and feature bands (measured area 1958, next to black at 2303).
- `primary` #fa6600 is Harley orange: the promo strip, the "Build Your Own" button and small accents, as well as the footer text. `on-primary` #ffffff is the label on it.
- `ink-muted` #757575 is the secondary text grey (product meta lines) and also a border color; `hairline` #eeeceb is the pale warm border of tiles.
- Other measured borders are #737373, #e1e1e1 and #fa6600.

The Osano consent variables declare their own button colors, for example a hover fill #e65200; they belong to the consent widget and are not site colors.

## Typography

Two faces are loaded: Franklin Gothic ATF (weights 400, 700 and 900) and Franklin Gothic ITC (700), both under a generic sans-serif fallback. Franklin Gothic ATF carries nearly everything (4288 characters).

- `display` 48px weight 700, line height 48px, uppercase (`display-mobile` 32px, line height 32px).
- `heading` 16px weight 700, line height 24px, uppercase.
- `body` 16px weight 400, line height 24px.
- `button` 14px weight 700, line height 20px; `button-secondary` 18px weight 700, line height 28px, uppercase.
- `nav` 12px weight 400, line height 16px.

The measured size set is 16px (most used), 14, 12, 13, 32, 20, 21, 48, 17, 36, 18 and 15px. Navigation in the capture is set in a condensed uppercase style at small size; headings are uppercase and bold. Franklin Gothic is a commercial family; a news-gothic style sans with a heavy weight is a reasonable substitute.

## Layout

The page is organized in full-width bands; model tiles run edge to edge in a horizontally scrolling carousel with previous/next arrows on the hero. Shopping tools are three equal black tiles with centered icon and label; the feature band places text at the left and a large studio photo at the right; category tiles are four-up photos.

Spacing measured: 1, 4, 6, 8, 10, 12, 14, 15, 16 and 17px (`s1`-`s10`). The main button has padding 0px 12px 0px 16px at height 40px; the large button has padding 12px 32px at height 52px; cards use 34px 10px padding.

## Elevation & Depth

Mostly flat. Measured shadows are a zero-offset set (five uses), a soft `0px 2px 6px 0px rgba(0, 0, 0, 0.2)` (two uses) and a `0px 0px 0px 1px rgb(0, 0, 0) inset` ring (one use, on the outlined button). Depth is also created by the black-versus-white band alternation and by the hero photography.

## Shapes

Corners are nearly square: `sm` 4px is the standard radius (20 uses) and `xs` 2px appears once. The primary button, the black tiles and the feature card use 4px. Product tiles and photos are rectangles. The hero carousel arrows are small dark square buttons at the lower right of the image.

## Components

- **button-primary**: fill `primary` (#fa6600), text `canvas`, Franklin Gothic ATF 14px/700, padding 0px 12px 0px 16px, height 40px, radius 4px, with a trailing arrow ("Build Your Own").
- **button-secondary**: fill `primary`, text `canvas`, 18px/700 uppercase, padding 12px 32px, height 52px, no radius value measured.
- **link**: `canvas` text, 14px/700, used on dark tiles.
- **card**: fill `ink`, text `canvas`, radius 4px, padding 34px 10px (the black shopping-tool tiles with an icon and bold label).
- **footer**: fill `ink`, text `primary`.
- **Outlined button**: white with a 1px inset black ring and 4px radius ("View all Motorcycles").
- **Hero button**: white fill, bold black label and arrow ("Explore The Motorcycle").

## Design System Architecture

No public brand-guideline or design-system page is linked from the home page: the fetch listed only investor, news and company links on investor.harley-davidson.com, and a trademark notice in the footer covering H-D, HARLEY and the Bar and Shield Logo. The root exposes 148 custom properties, but almost all of them are the Osano consent widget's (`--osano-*`), so the site's own visual system lives in compiled component styles: Franklin Gothic ATF, black, white, grey and one orange, 4px corners. The values in this document are measurements of the live page. The page language attribute was not exposed in the measurement.

## Do's and Don'ts

Do:
- Use black bands and tiles against white and #f6f6f6, with orange reserved for the promo strip and the main action.
- Set headlines in uppercase Franklin Gothic bold and product meta in small grey sentence case.
- Keep corners at 4px and pair buttons with a trailing arrow.
- Use cinematic riding photography and clean studio product shots.

Don't:
- Use the Osano consent colors (for example #e65200) as brand colors.
- Document the cookie-consent UI as a component.
- Round buttons into pills.

## Responsive Behavior

Measured at the mobile viewport: the h1 is 32px with line height 32px (versus 48px desktop) and body text is 14px (versus 16px desktop). Other mobile behavior (menu collapse, carousel tile count) was not measured.

## Iteration Guide

1. Build the shell: black utility bar, white nav, orange promo strip.
2. Add a full-bleed hero with an uppercase headline and a white button.
3. Show product on #f6f6f6 tiles with price and trim meta lines.
4. Use black tiles for tools and one orange 4px button for the main action.
5. Check that orange appears only on the promo strip, the main button and small accents.
