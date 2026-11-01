---
version: alpha
name: Balenciaga
category: "Luxury"
description: "Balenciaga US online boutique (balenciaga.com/en-us): white #ffffff canvas, pure black #000000 type, a warm off-white #f6f5f3 'Discover the House' band and a flat grey #aaaaac footer. BB-CondBold uppercase headings at 22px with 1.1px tracking over BB-Regular 10–14px text; small 4px-radius outlined nav pills, 2px corners elsewhere, no shadows."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  surface-warm: "#f6f5f3"
  footer-grey: "#aaaaac"
  on-media: "#ffffff"
typography:
  display:
    fontFamily: BB-CondBold
    fontSize: 22px
    fontWeight: 400
    lineHeight: 24.2px
    letterSpacing: 1.1px
    textTransform: uppercase
  body:
    fontFamily: BB-Regular
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.6px
    letterSpacing: 0.36px
  product-title:
    fontFamily: BB-CondBold
    fontSize: 12px
    fontWeight: 700
    lineHeight: 13.8px
    textTransform: uppercase
  link:
    fontFamily: BB-Regular
    fontSize: 10px
    fontWeight: 400
    lineHeight: 13px
    textTransform: uppercase
  button-secondary:
    fontFamily: BB-Regular
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.6px
    letterSpacing: 0.36px
rounded:
  xs: 2px
  sm: 4px
  control-round: 28px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 40px
  s8: 43px
  s9: 100px
components:
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 0px 8px
    height: 28px
    borderColor: "{colors.canvas}"
    boxShadow: rgb(170, 170, 172) 0px 0px 0px 0px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    boxShadow: rgb(170, 170, 172) 0px 0px 0px 0px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.footer-grey}"
    textColor: "{colors.ink}"
    borderColor: "{colors.ink}"
---

# Balenciaga

## Overview

This is the Balenciaga Official Online Boutique for the US (balenciaga.com/en-us), measured on its home page. The
site is a stark, near-monochrome retail surface: a white `#ffffff` canvas, black `#000000` text, and campaign
photography and video that occupy most of the scroll. There is no accent colour at all in the measured interface —
the only colour on the page comes from the pictures (red bags, brown leather, green check).

The capture reads as a sequence of full-width image bands separated by quiet white space. A thin white header
carries a row of small outlined pill buttons on the left (NEW ARRIVALS, GIFTS, BAGS, WOMEN, MEN, DISCOVER), the
BALENCIAGA wordmark centred, and utility links plus icons on the right (CLIENT SERVICES, LOGIN, search, wishlist,
bag). In the capture the DISCOVER menu panel is open on the left — a white panel listing Collections, Campaigns,
Balenciaga Music, Couture and Heritage with a "SUMMER 27" video thumbnail — next to a hero video with the white
uppercase title "NEW ARRIVALS" and two small white buttons ("SHOP WOMEN", "DISCOVER MORE"). Below: a four-up row
of category portraits with tiny uppercase captions, a full-bleed "READY-TO-WEAR FOR MEN" image with a "SHOP NOW"
button, a "NEW ARRIVALS" product grid of four packshots on off-white tiles with wishlist icons and prices, a
"DISCOVER THE HOUSE" band on warm off-white, and a grey footer split into six ruled columns.

The voice is terse and all-caps: category nouns, product names ("SHORT HOODED COAT", "VENOM BOOT"), prices, and
two-word actions. There is no marketing prose on the page.

## Colors

- **Canvas `#ffffff`** — page background and header; the largest measured background area.
- **Ink `#000000`** — essentially all text. It is also recorded as `primary`, because black is the only interface
  colour the site uses for emphasis (headings, pill labels, the 1px footer rules).
- **On-media `#ffffff`** — the white headline and labels placed over the campaign imagery ("NEW ARRIVALS",
  "READY-TO-WEAR FOR MEN").
- **Surface warm `#f6f5f3`** — the off-white band behind "DISCOVER THE HOUSE" and the product-tile backgrounds.
- **Footer grey `#aaaaac`** — the footer fill, a flat mid grey with black text and black 1px column dividers. The
  same value appears in the zero-size box-shadow declared on links and pills.

The header's measured background `#00000033` was taken while the DISCOVER panel was open and is the dimming layer
of that panel, not a brand colour; it is omitted. No hover colour changes were measured on the navigation pills:
their text stayed black and their background transparent; the WISHLIST link gains an underline on hover. The video
play/mute controls go from 50%-white to solid white on hover.

## Typography

Balenciaga serves two proprietary webfonts, both WOFF2 from its own storefront:

- **BB-Regular** — the dominant face by character count. It sets body and footer text at 12px / 15.6px with
  0.36px tracking, the header pills at the same size, and small uppercase links at 10px / 13px (the "SUMMER 27"
  caption, the utility list). The site's root variable `--bal-font-base` names it as the base font.
- **BB-CondBold** — a condensed bold for headings, named `--bal-font-headings` in the root variables. Section
  titles ("NEW ARRIVALS", "DISCOVER THE HOUSE") measured 22px / 400 / 24.2px, uppercase, with 1.1px tracking.
  Product titles in the grid use it at 12px / 700 / 13.8px, uppercase.

Measured size frequency: 12px, 10px and 14px make up nearly all the text, with 22px headings. The extraction also
recorded 45px headings in the hero carousel band ("Le City", "Rodeo", "Hourglass Avenue", "Le 7"), which are not
visible in the capture and are not tokenised. The desktop `h1` is the wordmark wrapper and has no text, so the
22px condensed heading is the display style (see `_roleOverrides` in SOURCES.json).

Substitutes: a neutral grotesque for BB-Regular and a condensed bold grotesque for BB-CondBold, both set in
uppercase where the site does.

## Layout

The measured desktop viewport is 1280px and the page is about four screens long. Layout is band-based: a white
header band, a hero band of 640px height, a white category band, a second full-bleed 640px image band, the
product band, the warm "Discover" band and the footer. Grids are four columns for categories and products and
three columns for "Discover the House". Spacing values recorded on the page are small and few: 16px (most
common), 12px and 8px inside components, 40px horizontal padding around section titles, 100px at section scale.

Density is very low: a single centred uppercase heading per band, images with tiny captions, and generous white
gutters on either side of the content grids.

## Elevation & Depth

Flat. The only box-shadow values in the extraction are zero-offset, zero-blur declarations
(`rgb(170, 170, 172) 0px 0px 0px 0px`), which render nothing. Separation comes from the change of band colour
(white → warm off-white → grey) and the 1px black rules in the footer. The video controls sit on the imagery as
50%-white circles.

## Shapes

Corners are nearly square. Measured radii: 2px (most frequent), 4px on the header pill buttons, and 28px on the
round video pause and mute controls. Images and product tiles are hard-edged rectangles.

## Components

- **Header pill (secondary button)** — BB-Regular 12px with 0.36px tracking, 0px 8px padding, 28px tall, 4px
  radius, black label. The computed border at extraction time was `1px solid #ffffff`; in the capture the pills
  read as outlined against the white header.
- **Hero buttons** — small white rectangles with black uppercase labels on top of the imagery ("SHOP WOMEN",
  "DISCOVER MORE", "SHOP NOW"); the extractor did not record them as CTA candidates, so no measured values are
  given.
- **Category tile** — portrait photograph with a centred BB-CondBold uppercase caption beneath.
- **Product card** — packshot on a warm off-white tile, wishlist icon top-right, BB-CondBold 12px uppercase title,
  price in BB-Regular below.
- **Text link** — BB-Regular 10px uppercase, black.
- **Footer** — grey `#aaaaac`, six columns divided by black 1px vertical rules (Newsletter, Client Services, The
  Company, Follow Us, Boutiques, Contact Us), small black links, a centred copyright line.

## Design System Architecture

Balenciaga has no public design system or brand guideline site that could be opened; the attempt to fetch the
storefront for links failed (see SOURCES.json). The de-facto system shows in the shipped CSS: two named font
variables (`--bal-font-base: "BB-Regular"`, `--bal-font-headings: "BB-CondBold"`), a set of named easing curves
(`--ease`, `--ease-fade`, `--ease-bounce`, `--ease-out-quint`, `--ease-transform`) and a header-height variable (`--topsearchheight`).
Logo, webfonts and images are served from `/on/demandware.static/` paths on
https://www.balenciaga.com/en-us.

## Do's and Don'ts

**Do**
- Keep the interface black and white and let campaign imagery carry colour.
- Set every heading in a condensed bold, uppercase, with open tracking.
- Keep body text tiny (10–12px) and functional.
- Use hard-edged images and near-square corners (2px, 4px).
- Write labels as bare nouns and two-word actions.

**Don't**
- Don't introduce an accent colour; the measured site has none.
- Don't add shadows, gradients or rounded cards.
- Don't use sentence-case marketing headlines.
- Don't treat the dimming layer of the open menu as a header colour.

## Responsive Behavior

From the extraction's mobile pass:

- A menu toggle labelled "Menu" is visible; the number of visible header links drops from 8 on desktop to 3.
- The mobile header measured BB-Regular 14px / 19.6px.
- Section headings keep BB-CondBold 22px / 24.2px uppercase with 1.1px tracking.
- The mobile text sizes recorded were 12px, 14px and 22px only.
- The first mobile band is a carousel row; the hero image band follows below it.

Breakpoint values, grid column counts per width and image cropping on mobile were not measured.

## Iteration Guide

1. Start from white canvas, black type, and the two BB faces; nothing else is needed for identity.
2. Add the warm `#f6f5f3` band and the grey `#aaaaac` footer only as band separators.
3. Use the header pill (4px radius, 28px tall, 12px label) for navigation-level actions.
4. Put headlines in BB-CondBold 22px uppercase, centred above each content grid.
5. If a filled primary button is needed, measure the hero buttons first; none is tokenised here.
