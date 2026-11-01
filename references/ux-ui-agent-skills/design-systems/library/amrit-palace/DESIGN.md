---
version: alpha
name: Amrit Palace
category: "Food & Beverage"
description: "Amrit Palace home page: sand #d8cbb8 background, charcoal #2c2c2c text, saffron amber #d49653 menu panel and icon tiles, Satoshi 11px copy with TT Ramillas serif display, 2-4px radii and dark candle-lit photography."
colors:
  canvas: "#d8cbb8"
  ink: "#2c2c2c"
  primary: "#d49653"
  surface-dark: "#292622"
  surface-taupe: "#bfb4a3"
typography:
  display:
    fontFamily: Satoshi, Arial, sans-serif
    fontSize: 37.12px
    fontWeight: 500
    lineHeight: 37.12px
    letterSpacing: "-1.4848px"
  link:
    fontFamily: Satoshi, Arial, sans-serif
    fontSize: 12.096px
    fontWeight: 500
    lineHeight: 16.9344px
    letterSpacing: "-0.128px"
rounded:
  xs: 2px
  sm: 3px
  md: 4px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 20px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
    padding: 0px 12px 0px 0px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
---

# Amrit Palace

## Overview
The measured page is the home page of Amrit Palace (amritpalace.com), an Indian restaurant serving central Florida with two locations, Ocala (3415 SW College Rd) and Gainesville (3105 SW 34th Street), "established 1996" according to the page text. The site is a Webflow build and reads as a warm, dark, photographic restaurant page: a charcoal header with a small ornamental logo mark, plain links (Home, Catering, Gift Cards, About, Reserve a Table, Contact) and, at the right, a "Menu" link with an amber fork-and-knife tile and an "Order Now" link with an amber tile; a full-width hero photograph of a long candle-lit table with a short paragraph at the lower left and a beige review card at the lower right; a framed full-width photograph of a tandoori platter with one line of copy ("From warm hospitality to bold flavors, every detail tells a story."); and a split section with an amber menu panel on a charcoal column beside a beige text column and a photograph of curries.

Colors are earthy: sand beige, charcoal and saffron amber. The page is largely photography-led, and copy is set small.

## Colors
The site publishes three variables: `--biege` `#d8cbb8`, `--primary` `#d49653` and `--dark` `#2c2c2c`.
- **canvas** `#d8cbb8`: sand beige; the main background (3338 area weight) and the light text color on dark photos (1388 characters).
- **ink** `#2c2c2c`: charcoal; text on beige and amber (4078 characters) and the border color (`#2c2c2c` and a 20% tint `#2c2c2c33`).
- **primary** `#d49653`: saffron amber; the "Menu" panel background (540 area weight), the header icon tiles, and rating stars. It is the only saturated color.
- **surface-dark** `#292622`: warm near-black; the header and the column behind the menu panel (1282 area weight).
- **surface-taupe** `#bfb4a3`: a darker beige (1200 area weight).
Also measured: translucent black overlays `#0000004d` and `#0000008c` (1382 and 924 area weight) over photographs, and `#2c2c2c66`. The overlays are photographic scrims, not UI colors.
The extractor assigned no filled button, so there is no measured button fill or `on-primary` text color; the amber header tiles are icon tiles.

## Typography
Two main families plus a script face: Satoshi (500 and 700) for interface and body, TT Ramillas Variable (weights 200 to 900) as a serif display face, and Bad Script (400) loaded as a decorative script. webflow-icons provides icons.
- **display**: Satoshi 37.12px / 500 / 37.12px, letter spacing -1.4848px (measured on the "4.7" rating figure; the detected "h1" role for this page is this numeral, since the hero carries no heading element).
- **link**: Satoshi 12.096px / 500 / 16.9344px, letter spacing -0.128px.
The header element measures TT Ramillas Variable at 19.2px / 300 / 19.2px with -0.672px tracking.
By characters: 11.52px (2938), 10.88px (1352), 23.04px (818), 10.24px (110), 12.8px (96), 12.096px (87), 19.2px (59), 176.64px (12) and 37.12px (6). Body copy is therefore very small (about 11px to 12px) while a handful of characters are set at 176.64px, which matches the oversized serif words of the section titles ("flavors", "that stay") in the page text. Letter spacing is slightly negative throughout.

## Layout
Measured at 1280px wide. The hero and the second photograph are full width, the second inset in a beige frame with a margin of about the width of the page gutter; the menu section is a two-column split, with a charcoal left column holding the amber menu card (about 520px wide, 1032px tall) and a beige right column with a paragraph. Spacing tokens come from measured paddings and gaps: 1, 2, 3, 4, 6, 8, 10, 12, 16 and 20px; the menu card has 24px bottom padding.

## Elevation & Depth
Flat. The measured shadows are Plyr media-player thumb shadows (`0 1px 1px #23282f26, 0 0 0 1px #23282f33`) and `0 1px 2px #00000026`; they belong to the embedded video player controls. Layers are separated by color fields and 1px hairlines.

## Shapes
Radii are tight: 3px (15 uses), 2px (the review card) and 4px (the menu card). Header icon tiles in the capture have small rounded corners. No pills.

## Components
- **review card**: beige `#d8cbb8`, 2px radius, 1px `#2c2c2c33` border, five amber stars, a Google logo, the figure "4.7" with "/5", "Excellent" and "Based on 3 576 reviews" (294px by 129px). The rating logo is a third-party mark.
- **menu card**: amber `#d49653`, 4px radius, rows divided by 1px charcoal hairlines; each row has a name at the left, a price at the right ("$17.99"), and a one-to-two line description below; an amber-tinted fork-and-knife icon sits at the top right.
- **nav**: charcoal bar with light sentence-case links; **link** 12.096px / 500.
- **icon tiles**: amber squares with a dark icon for Menu and Order Now.
- **card**: beige, 2px radius.

## Design System Architecture
No public design system or brand guidelines were found; the markup of the home page has no brand, press or design link. The de-facto system is a Webflow style set with three named color variables (`--biege`, `--primary`, `--dark`) and a Plyr video player theme variable (`--plyr-color-main`).

## Do's and Don'ts
- Do keep the palette to sand `#d8cbb8`, charcoal `#2c2c2c` and amber `#d49653`.
- Do let dark, warm photography carry the mood.
- Do set menu rows with names left, prices right and a short description below.
- Do keep corners at 2px to 4px.
- Don't use bright or cool colors; none are measured.
- Don't treat the video player shadows as card elevation.

## Responsive Behavior
Not measured as a layout. The 390px pass returned only a "Menu" label (14.82px / 500 in `#d8cbb8`), which indicates that the navigation is represented by a "Menu" control at that width; no other mobile values were recorded.

## Iteration Guide
1. Start from beige canvas, charcoal ink and amber primary.
2. Use charcoal for header and for the column behind the menu card.
3. Set body copy small and tight; reserve very large serif type for section words.
4. Menu rows follow name, price and description with hairline dividers.
5. Verify new values against `web/data/extracted/amrit-palace.json`.

## Imagery and Voice
Photography is dim and cinematic: a long banquet table with candles, a smoky tandoori platter in foil beside a drink, and overhead curry pots with cilantro. Copy is warm and short: "At Amrit Palace, every dish is a tribute to tradition and every moment is crafted for today. We bring together the warmth of Indian hospitality, the richness of timeless flavors, and the pace of modern life." and "Every item on our menu reflects decades of tradition - recipes passed down, refined through experience, and thoughtfully adapted for today's palate." The page lists working hours (Tue-Fri 11 AM to 10 PM; Sat-Sun 12 AM to 10 PM; Mon closed) and offers "Book" links for each location. Menu entries include Variety Tray, Butter Chicken, Lamb Curry, Palak Paneer, Chicken Tandoori, Chicken Tikka Masala, Gobhi Manchurian (V) and Aloo Gobhi (V).

## Booking and Navigation Patterns
Reservation and ordering are location-aware. The header's "Reserve a Table" entry opens a "Choose restaurant" chooser with two actions, "Book - Ocala" and "Book - Gainesville"; the "Order Now" tile opens the same chooser with the two restaurant names, "Amrit Palace Ocala" and "Amrit Palace Gainesville", and a "Close" control. A full-screen "Menu" overlay repeats the links in lowercase (home, catering, gift card, store, about, contact, reserve a table) next to the working hours and both street addresses. The pattern is a stack of choice lists rather than a single global button, so every action in the interface is a text link or an icon tile and there is no filled call-to-action button.
