---
version: alpha
name: Units
category: "Food & Beverage"
description: "Units (units.gr) is a Greek student-housing brand whose site is a bento grid of saturated, rounded color cards on a warm #f4e9e1 canvas, set in Bunch 850 display type at 64px and Aeonik Pro 14px body, with pill buttons at 33.33px radius and black ink on every colored tile."
colors:
  canvas: "#f4e9e1"
  page-largest: "#eef1f5"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  ink-muted: "#00000080"
  card-blue: "#0072e3"
  card-yellow: "#ffdb07"
  card-amber: "#ffb200"
  card-green: "#1be349"
  card-orange: "#ff5c38"
  card-red: "#ea3737"
  card-purple: "#ab54f7"
  card-lilac: "#c79dfc"
typography:
  display:
    fontFamily: Bunch, arial
    fontSize: 64px
    fontWeight: 850
    lineHeight: 64px
  display-mobile:
    fontFamily: Bunch, arial
    fontSize: 38px
    fontWeight: 850
    lineHeight: 38px
  body:
    fontFamily: "\"Aeonik Pro\", arial"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
  nav:
    fontFamily: "\"Aeonik Pro\", arial"
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 4px
  sm: 10px
  md: 20px
  lg: 30px
  xl: 33.33px
  2xl: 50px
  3xl: 100px
  cta: 33.33px
spacing:
  s1: 5.34px
  s2: 6.67px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 10.66px
  s7: 11px
  s8: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.cta}"
    padding: 15px 30px
    height: 47px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.2xl}"
    padding: 10px 34px
    height: 37px
  label-outline:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.3xl}"
    border: "1px solid #000000"
    padding: 7px 12px
    height: 35px
  chip-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    padding: 8px 16px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.card-amber}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    padding: 24px 70.0032px
    height: 75px
  card:
    backgroundColor: "{colors.card-amber}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    padding: 26.6624px
---

## Overview

Units is the Greek student-living brand at units.gr ("Home of the uniquely awesome."). Its homepage reads as a poster for a building rather than a booking engine: a warm cream page (`#f4e9e1`) carries a bento grid of fat, rounded, fully saturated cards in blue, yellow, amber, orange, red, green and lilac, each holding black text, a thin outlined label and one pill button. The photographs match the palette: the lobby shot in the capture is blue ceiling, green and orange walls, yellow furniture. The brand colors are painted into the interiors it sells, so the site and the product share one palette.

The voice is short and warm. Headings are written as claims in sentence case ("Where your everyday just works", "One Unit. An entire universe.", "A shared way of living", "Student living, redefined."), body copy runs two to five lines at 14px, and every card ends with a single action ("Explore what's", "Check out our Units", "Join our community"). Small outlined labels such as "Locations", "All-Inclusive Living", "Our Units", "Community" and "Instagram" sit at the top left of cards as category tags. A red ticker strip repeats amenities in yellow bold type ("Social areas", "Private kitchen & bathroom", "24/7 Security", "Fast and reliable maintenance").

The page is bilingual: the measured page is the English home `https://units.gr/en/homepage/`, and the sidebar carries an "Ελληνικά" language switch. A Mapbox map card of Athens places the buildings ("Units Parkside", "Units Theatro") with coral and grey pill pins that reuse the chip radius.

The capture was taken with a promotional overlay open and a dark scrim over the top screen. That overlay and its scrim (`#000000cc` in the background-area frequencies) are not brand UI and none of their values appear in the tokens above.

## Colors

The canvas is `#f4e9e1`, a warm cream measured as the body background and confirmed on capture pixels. `#eef1f5` is the largest measured background area (a cool near-white used behind media blocks). Ink is pure `#000000` and is also the primary action color: the black pill with white text (`#ffffff`) is the measured primary CTA on desktop ("Book your Unit", 47px tall).

The card palette is the identity. Measured background areas, largest first: blue `#0072e3` (653 area weight), yellow `#ffdb07` (333), green `#1be349` (268), orange `#ff5c38` (263), red `#ea3737` (259), amber `#ffb200` (246), then `#ff8e0a`, purple `#ab54f7` and lilac `#c79dfc`. Text on all of these is `#000000` except where white is used on the dark hero image and black buttons. Amber `#ffb200` is also the measured fill of the large text input (75px high) and the measured text color of some headings (184 characters), and green `#1be349` is a text color too (132 characters).

On mobile the measured primary CTA is purple `#ab54f7` with black `#000000` text, a different fill from desktop (black with white text). Both are measured; the tokens keep the desktop pair as `primary` and keep purple as `card-purple`. Secondary text at 50% black (`#00000080`) is used for chip links such as "Units Theatro".

No gradients and no drop shadows were measured as brand treatments: the only box-shadow in the extraction is a `0px 0px 0px 2px` ring at 10% black, weight 1.

## Typography

Two families, both measured as loaded fonts: **Bunch** (loaded at weight 900, rendered at 850) for display, and **Aeonik Pro** at 400 and 700 for everything else. By character count Aeonik Pro carries 2,344 characters and Bunch 603.

- Display: Bunch 64px / 64px, weight 850 (desktop hero "Home of the uniquely awesome."), 38px / 38px on the 390px mobile pass.
- Card headings: Bunch at 28px on mobile, set at weight 850 in black.
- Body: Aeonik Pro 14px / 16.8px, weight 400. This is the dominant size (1,788 characters).
- Navigation: Aeonik Pro 16px, weight 400, in the left sidebar tiles; the header strip uses 12px at weight 700.
- Other measured sizes: 12px, 21.34px, 22px, 22.67px (the footer "Join our newsletter" line in Bunch), 29.34px.

Letter spacing is `normal` everywhere (no letter-spacing frequencies were recorded). Fallback in both stacks is `arial`. Font files are served by the site; this document does not name a free substitute.

## Layout

The desktop page is a left sidebar of colored navigation tiles (numbered 01 to 04: Student Homes, Our way of living, Community, Contact, plus a purple "Book your Unit" tile, a language switch and social icons) next to a wide content column. The content column holds bands of one to three card columns; the extractor recorded up to 10 card columns in a band on desktop and 8 on mobile. Cards of different heights share a row: a tall orange card, a photo card, and a yellow-to-orange text card form the "All-Inclusive Living" band.

Measured gaps are 45px (40 occurrences), 10px (35), 20px, 15px and 30px. Measured paddings include 26.66px (22 occurrences, the card inset), 13px, 20px, 30px and 46.67px. The site's own CSS variables express the same rhythm in viewport units: `--gap: clamp(10px,1.563vw,30px)` and `--box-padding: 2.083vw`.

Rows end in a full-width footer with a newsletter line set in Bunch at 22.67px and a large "units." wordmark over a grid pattern.

## Elevation & Depth

Depth comes from color blocking, not shadow. Cards are flat fills with large radii; the only measured box-shadow is a faint `rgba(0, 0, 0, 0.1) 0px 0px 0px 2px` ring used once. A WordPress preset in the root variables declares offset hard shadows (`6px 6px 0px -3px` white then `6px 6px` black), but only the ring was measured on rendered elements, so the hard-offset style is not used as a brand token here.

Layering seen in the capture is the sidebar over the hero image, a header with an almost opaque canvas fill (`#f4e9e1fe`, measured), and the map card with its zoom controls; positioning (fixed or sticky) was not measured. Photographs are placed edge to edge inside rounded card clips rather than floating with borders.

## Shapes

Radius is the signature. Measured radii by frequency: 33.33px (39 elements, cards, inputs, chips), 100px (9, pills and labels), 4px (9), 30px (8), 10px (7), 20px (2), 50px (2). The site's `--border-radius` variable is `clamp(30px,2.604vw,2.604vw)`, and `--label-radius` is `100px`. Buttons use 33.33px (primary) or 50px (secondary); outlined labels use 100px with a 1px black border. Corners are never square on cards.

## Components

- **Primary button**: black fill, white 14px Aeonik Pro text, `15px 30px` padding, 47px tall, 33.33px radius ("Book your Unit").
- **Secondary button**: black fill, white text, `10px 34px` padding, 37px tall, 50px radius, weight 700.
- **Outlined label**: transparent, 1px solid `#000000`, 100px radius, `7px 12px` padding, 35px tall. Used as category tag and as footer link buttons (for example "Privacy Policy").
- **Chip link**: canvas-colored pill, 50% black text, `8px 16px` padding, 33.33px radius, used as map pins such as "Units Theatro".
- **Text input**: amber `#ffb200` fill, black text, `24px 70.0032px` padding, 75px high, 33.33px radius (newsletter row).
- **Card**: flat color fill, black text, 26.66px inset padding, 33.33px radius; a title in Bunch, supporting list lines separated by thin black rules.
- **Navigation tile**: colored block with a number, an arrow glyph and a label; the tile colors match the card palette (focus data records `rgb(0, 114, 227)` on the first tile).

## Design System Architecture

No public or official design system for Units was found; the site publishes none and this document did not search for one. The de-facto system is visible in the page's root custom properties: `--color-1: #000`, `--color-2: #fff`, `--border-radius: clamp(30px,2.604vw,2.604vw)`, `--label-radius: 100px`, `--label-padding: 0.521vw 1.563vw`, `--gap: clamp(10px,1.563vw,30px)`, `--box-padding: 2.083vw`, plus font variables `--font-Alfabet` and `--font-AlfabetExtraBold` that point at `Alfabet,arial` (a family not among the loaded fonts). The `--wp--preset--*` variables show a WordPress base. Everything is measured from `https://units.gr/en/homepage/`; see `web/data/extracted/units.json`.

## Do's and Don'ts

Do:
- Put black text on every saturated card and keep one pill action per card.
- Use 33.33px radii on cards and inputs and 100px on labels and pills.
- Set headings in Bunch at weight 850 in sentence case and body in Aeonik Pro 14px.
- Keep the cream `#f4e9e1` canvas visible between cards.

Don't:
- Don't use white text on the yellow, amber or green cards.
- Don't add drop shadows or gradients; none were measured as brand treatments.
- Don't document the promotional overlay, its scrim or its close control as brand UI.
- Don't use square corners on cards.

## Responsive Behavior

Measured at a 390px mobile pass: the display heading drops from 64px to 38px (Bunch 850), card headings measure 28px, and the header exposes a menu toggle labelled "hamburger menu" (`menuToggleVisible: true`; on desktop it is false and two header links are visible). The mobile pass recorded a maximum of 8 card columns versus 10 on desktop, and the mobile CTA fill is purple `#ab54f7` with black text. The mobile hero content sits between x=40 and x=350 in the recorded band. Breakpoint values themselves were not measured; any other mobile behavior is not measured.

## Iteration Guide

1. Start from the cream canvas and place cards using the 33.33px radius, 26.66px inset and a gap near `clamp(10px,1.563vw,30px)`.
2. Pick one card color from the measured palette per card and keep text black.
3. Write a Bunch 850 sentence-case title, a 14px Aeonik Pro paragraph and one black pill.
4. Add an outlined 100px label at top left for the category.
5. Check the primary CTA against the measured pair: black with white on desktop, purple with black on mobile.
6. Re-run `node web/scripts/verify-designs.mjs --slug=units` after any token rename.
