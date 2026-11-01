---
version: alpha
name: Turkish Airlines
category: "Airlines"
description: "Turkish Airlines' Thailand-English home page: white #ffffff canvas, deep navy #101a2a footer and #232b38 dark bands, signature red #e81932 'Search flights' button (hover #ff3545) with 4px corners, #f4f5f8 grey booking fields 66px tall, and every word in museoSans from 38px/500 headlines down to 11px/700 header links."
colors:
  canvas: "#ffffff"
  page-largest: "#101a2a"
  ink: "#000000"
  ink-dark: "#232b38"
  ink-muted: "#647280"
  ink-on-dark: "#e7edf4"
  header-link: "#c3cbd7"
  header-link-hover: "#7dc5be"
  utility-bar: "#333c49"
  primary: "#e81932"
  primary-hover: "#ff3545"
  link-red: "#e2001b"
  on-primary: "#ffffff"
  field: "#f4f5f8"
  ghost-fill: "#ffffff26"
  hairline: "#e0e0e0"
typography:
  display:
    fontFamily: museoSans, "museoSans Fallback"
    fontSize: 38px
    fontWeight: 500
  display-mobile:
    fontFamily: museoSans, "museoSans Fallback"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 30px
  tab-label:
    fontFamily: museoSans, "museoSans Fallback"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 22.4px
  card-title:
    fontFamily: museoSans, "museoSans Fallback"
    fontSize: 16px
    fontWeight: 700
  service-label:
    fontFamily: museoSans, "museoSans Fallback"
    fontSize: 12px
    fontWeight: 700
  body:
    fontFamily: museoSans, "museoSans Fallback"
    fontSize: 13.008px
    fontWeight: 300
    lineHeight: 20px
  button:
    fontFamily: museoSans, "museoSans Fallback"
    fontSize: 13.008px
    fontWeight: 700
  nav:
    fontFamily: museoSans, "museoSans Fallback"
    fontSize: 11.008px
    fontWeight: 700
  input:
    fontFamily: museoSans, "museoSans Fallback"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
rounded:
  xs: 2px
  sm: 3.01px
  md: 4px
  lg: 15.01px
  xl: 20px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 4.8px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 15.01px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 10px
    height: 66px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
  button-ghost:
    backgroundColor: "{colors.ghost-fill}"
    textColor: "{colors.on-primary}"
    border: "1px solid #ffffff"
  booking-field:
    backgroundColor: "{colors.field}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 66px
  booking-tab:
    backgroundColor: "{colors.field}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.tab-label}"
    rounded: 3.008px 3.008px 0px 0px
    padding: 10px 18px
    height: 42px
  header-link:
    textColor: "{colors.header-link}"
    typography: "{typography.nav}"
    padding: 8px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-dark}"
    typography: "{typography.card-title}"
    rounded: "{rounded.xs}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-on-dark}"
---

## Overview

The measured page is Turkish Airlines' Thailand market site in English (finalUrl `https://www.turkishairlines.com/en-th`, title "Turkish Airlines ®[U+FE0F] | Flying to the Most Countries"). It begins with a thin dark utility bar (Turkish Airlines Holidays, Corporate Club, Search, EN-TH), then a full-bleed photographic hero with the header laid over it: the red-roundel TURKISH AIRLINES logo at left; uppercase menu items (BOOK&MANAGE, EXPERIENCE, DEALS&DESTINATIONS, MILES&SMILES, HELP) and a rounded "SIGN IN or sign up" button with a notification bell at right.

In the capture the hero is a Paris street with the Eiffel Tower. The headline "Fly from Bangkok to Europe" sits in white museoSans at 38px, with a subline and a translucent "Book now" button bordered in white. The booking widget overlaps the bottom of the hero: four tabs (Flight, Check-in, Manage booking, Flight status) above a white panel with radio options (Round trip, One way, Stopover in Istanbul, Multi-city), an "Award ticket - Buy a ticket with Miles" link, grey From / To / Dates / Passengers cells and a red "Search flights →" button.

Below the widget comes a strip of six service tiles with round icons (Seat selection, Extra baggage, Book a hotel, Rent a car, Travel insurance, Gift Card), then a promotional grid ("Meet your digital profile", "Stopover in Istanbul", a red "Full refund option" slider), a three-card offer carousel with circular arrow buttons, a Star Alliance logo, a dark app-download band with phone mockups and a QR code, a navy footer with four link columns, an awards row and social icons. Red is the brand's single loud colour: buttons, active tab, link arrows, imagery.

## Colors

- **canvas `#ffffff`**: the body and the main content band.
- **page-largest `#101a2a`**: the deep navy of the footer, the largest measured background area.
- **ink `#000000`**: body copy and booking-field values.
- **ink-dark `#232b38`**: card titles and service labels, and also the fill of the app-download band.
- **ink-muted `#647280`**: secondary labels such as "Passengers" and inactive tab text.
- **ink-on-dark `#e7edf4`**: the most-read text color on the page, the footer link lists.
- **header-link `#c3cbd7`**: the small header and utility links; on hover they turn **header-link-hover `#7dc5be`**, a teal measured on "Turkish Airlines Holidays" and "Corporate Club".
- **utility-bar `#333c49`**: the top utility strip.
- **primary `#e81932`**: Turkish Airlines red, the fill of "Search flights" and the colour of the active "Flight" tab label. **primary-hover `#ff3545`** is its measured hover fill.
- **link-red `#e2001b`**: red text links ("Discover", "Detailed information", "Learn more").
- **on-primary `#ffffff`**: text on red and on the hero.
- **field `#f4f5f8`**: booking-field and inactive-tab grey.
- **ghost-fill `#ffffff26`**: the 15% white fill of the hero "Book now" button.
- **hairline `#e0e0e0`**: light borders.

## Typography

One family, museoSans, does all the work. It is loaded in five weights (100, 300, 500, 700, 900) plus a metric-adjusted "museoSans Fallback" face, and it accounts for all 2906 measured characters.

- **display**: 38px, weight 500, for the hero headline.
- **tab-label**: 14px/22.4px, weight 700, the booking tab labels (the active one in red).
- **card-title**: 16px, weight 700, promotional card titles such as "Meet your digital profile".
- **service-label**: 12px, weight 700, labels under service icons.
- **body**: 13.008px/20px, weight 300, descriptive copy in cards ("Travel to Europe's most popular destinations…").
- **button**: 13.008px, weight 700, the "Search flights" label.
- **nav**: 11.008px, weight 700, header and utility links.
- **input**: 16px/16px, weight 700, booking-field values such as "Bangkok".

By characters the most common sizes are 14px, 12px, 13.008px, 16px and 11.008px, and the most common weights are 500, 700 and 300. The fractional sizes (13.008px, 11.008px, 17.008px) come from rem-based CSS and should be reproduced as measured. No fallback family is declared beyond the generated "museoSans Fallback" face.

## Layout

At 1280px the measured page is 2912px tall. The utility bar is 41px tall on `#333c49`. The hero band is 509px of media with content from x=143. The main white band is 1466px with content between x=143 and x=1125 (about 982px wide), holding the booking widget, service tiles, promo grid and offer carousel. A 140px `#232b38` app band follows, then the 756px `#101a2a` footer, laid out in four columns from x=156 to x=1124. The extraction counted up to six card columns, matching the six service tiles.

Spacing is compact. The most frequent gap is 10px (30 uses), then 6px, 5px, 8px and 4.8px; the most frequent paddings are 8px, 16px, 10px, 15.008px and 5px, with 20–40px used for larger blocks. The service tiles are separated by thin vertical rules in the capture.

## Elevation & Depth

Elevation is used for floating panels. The booking panel and promo cards carry soft shadows; measured values are `rgba(0, 0, 0, 0.16) 0px 2px 6px 0px` (three uses), `rgba(0, 0, 0, 0.12) 0px 6px 6px 0px`, `rgba(0, 0, 0, 0.1) 0px 4px 8px 0px` and `rgba(35, 43, 56, 0.2) 0px 5px 15px 0px`. Otherwise depth comes from the hero image behind the overlapping booking widget and from the switch between white content and the dark `#232b38` / `#101a2a` bands at the bottom.

## Shapes

Corners are tight. The most common radius is 4px (11 uses: Search flights, booking fields), then circles (`50%`, nine uses: service icons, radio buttons, carousel arrows), 3.008px (five uses) and the tab shape `3.008px 3.008px 0px 0px` (four uses), rounded only on top so tabs join the panel below. Cards use `2px 2px 0px 0px`, and some elements are rounded only at the bottom (`0px 0px 4px 4px`). Larger radii appear once each: 15.008px and 20px. In the capture, the header's SIGN IN control is the only pill-shaped button.

## Components

- **Primary button** ("Search flights"): `#e81932` fill, white museoSans 13.008px/700 label with an arrow, 4px corners, `0px 10px` padding, 66px tall to match the fields. Hover changes the fill to `#ff3545`.
- **Ghost button** ("Book now" on the hero): 15% white fill (`#ffffff26`), white text and 1px white border.
- **Booking field** (From, To, Dates, Passengers): `#f4f5f8` grey, 4px corners, 66px tall, `8px 16px` padding, a small grey label over a 16px/700 black value.
- **Booking tab**: `#f4f5f8`, 42px tall, `10px 18px` padding, top-only 3.008px corners; the active tab is white with a red label and icon.
- **Header link**: `#c3cbd7` 11.008px/700 with 8px padding; hover turns it `#7dc5be`.
- **Service tile**: white tile with a round grey icon and a 12px/700 `#232b38` label, separated by thin rules.
- **Promo card**: white, 2px top corners, 16px/700 `#232b38` title, 13px/300 copy, red link with a ▸ arrow.
- **Footer**: `#101a2a` with bold uppercase white column headings and `#e7edf4` links.

## Design System Architecture

No public Turkish Airlines design system or brand guideline was reached; the press room page timed out. The page exposes no CSS custom properties on `:root` (zero root variables measured), and class names are hashed CSS-module names such as `hm__style_overlay__JqtRc` and `hm__style_cookie-warning-wrapper__YsNXv`, which shows a component-scoped CSS build without a public token layer. The de-facto system is therefore the set of literal values recorded here: one typeface (museoSans) in five weights, red `#e81932` for action, a navy/slate family (`#101a2a`, `#232b38`, `#333c49`, `#647280`) for structure, `#f4f5f8` for inputs, and 4px corners.

## Do's and Don'ts

**Do**
- Use red `#e81932` for the main action and `#ff3545` for its hover; keep it to one red button per area.
- Set everything in museoSans and vary weight (300 copy, 500 headline, 700 labels) rather than family.
- Build booking fields as tall (66px) grey `#f4f5f8` blocks with a small label over a bold value.
- Use top-rounded tabs that sit flush on the panel below.
- Close pages with the dark `#232b38` and `#101a2a` bands.

**Don't**
- Don't use large radii for buttons; 4px is the default.
- Don't introduce a second accent colour beyond the teal header-link hover.
- Don't treat the "Contact Us" side tab or the cookie banner as brand components.

## Responsive Behavior

The extractor's mobile pass recorded: the hero headline shortens to "From Bangkok to Europe" and drops from 38px to 28px/30px (weight 500); body copy stays 13.008px/20px weight 300; the measured primary element becomes the active "Flight" tab, a red `#e81932` block with 2px corners and white 14px/700 text; one header link is visible and a toggle labelled "Language selection" is visible; and the extraction counted up to three card columns (six on desktop). The mobile bands run from a 30px `#2b3947` utility bar and a 60px `#232b38` header to white and media bands with content between x=12 and x=378, ending in a `#232b38` band and a two-column `#121c2b` footer.

The stylesheet's breakpoints are dominated by `max-width 768px` (244 rules) and `min-width 769px` (55), followed by `max-width 1024px` (27). Booking-widget behaviour at intermediate widths is not measured.

## Iteration Guide

1. Lay down white `#ffffff` content with dark `#232b38` and `#101a2a` closing bands.
2. Use museoSans for everything; start with 38px/500 for heroes, 16px/700 for card titles, 13px/300 for copy.
3. Add red `#e81932` only to the primary action, active tab and arrow links.
4. Build forms from 66px `#f4f5f8` fields with 4px corners.
5. Keep shadows soft (around 16% black, 2–6px blur) and only on floating panels.
6. Measure inner pages before adding tokens for fare tables, seat maps or Miles&Smiles tiers.
