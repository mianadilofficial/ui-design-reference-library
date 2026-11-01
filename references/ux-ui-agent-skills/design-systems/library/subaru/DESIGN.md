---
version: alpha
name: "Subaru of America"
category: "Automotive"
description: "Subaru of America home page measured live: a white and cool-grey (#f7f8f9) retail shell with a near-black blue hero band (#1d252c), one Subaru blue (#1971d4) action color, HelveticaNeueLTW05 Roman, Medium and Bold at 17px body, and 5px corners on buttons and vehicle tiles."
colors:
  canvas: "#f7f8f9"
  page-body: "#ffffff"
  ink: "#5c6163"
  primary: "#1971d4"
  on-primary: "#ffffff"
  surface-dark: "#1d252c"
  ink-on-dark: "#b7bcc2"
  primary-light: "#3a8eee"
  hairline: "#e7e7e8"
typography:
  display:
    fontFamily: HelveticaNeueLTW05-75Bold, "Helvetica Neue", -apple-system, "Open Sans", Arial, sans-serif
    fontSize: 50.0001px
    fontWeight: 400
    lineHeight: 37.5px
  display-mobile:
    fontFamily: HelveticaNeueLTW05-75Bold, "Helvetica Neue", -apple-system, "Open Sans", Arial, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: HelveticaNeueLTW05-55Roman, "Helvetica Neue", -apple-system, "Open Sans", Arial, sans-serif
    fontSize: 17px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: HelveticaNeueLTW05-65Medium, "Helvetica Neue", -apple-system, "Open Sans", Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17px
  nav:
    fontFamily: HelveticaNeueLTW05-65Medium, "Helvetica Neue", -apple-system, "Open Sans", Arial, sans-serif
    fontSize: 17px
    fontWeight: 400
    lineHeight: 27px
  link:
    fontFamily: HelveticaNeueLTW05-75Bold, "Helvetica Neue", -apple-system, "Open Sans", Arial, sans-serif
    fontSize: 25px
    fontWeight: 400
    lineHeight: 31px
rounded:
  xs: 3px
  sm: 3px
  md: 5px
  lg: 5px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 4px
  s4: 10px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 18px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 10.0001px
    height: 40px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.surface-dark}"
  link:
    textColor: "{colors.surface-dark}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.surface-dark}"
    rounded: "{rounded.md}"
    padding: 15px 15px 20px
---

## Overview

The measured page is subaru.com, the Subaru of America consumer site (document title "Subaru Cars, SUVs, Crossovers & Hybrids | Subaru of America"). It behaves like a vehicle catalogue rather than a brand poster. A slim white header carries the wordmark and six navigation items (Vehicles, Build & Price, Local Inventory, Shopping Tools, Our Commitment, Owners) plus "Find a Retailer" and a search icon. Under it sits a dark carousel hero in `#1d252c` showing one model with a financing offer (a large "0.99%" next to "72" and a small "APR FINANCING / MONTHS" caption) and a single blue button, "View Outback Special Offers". Below the hero, a tab strip filters the lineup (All Vehicles, Hybrid, Electric, Gas, Wilderness) and a grid of vehicle tiles follows, four per row on the 1280px desktop capture, ending on a row of two.

The tone is practical and price-forward. Each tile gives the model name, its class line (for example "Compact Crossover SUV"), an "Outstanding value at" price, an "Available in:" row of powertrain icons, and a blue "Explore" link. The system is quiet: no box shadows were measured (`boxShadows` is empty), only 1px hairlines and flat tinted surfaces. Photography does the visual work, with cars cut out on neutral backgrounds and one atmospheric hero image.

## Colors

The palette is small and cool. `canvas` (#f7f8f9) is the measured largest-area background, used as the tile and section surface; `page-body` (#ffffff) is the body and header background. `surface-dark` (#1d252c) is the hero band and the dark call-out panels lower on the page. `primary` (#1971d4) is the one action color: it fills the hero button, colors the "Explore" links and the header navigation text, and appears with a 1px border of the same value. `primary-light` (#3a8eee) is a second, lighter blue measured in text on dark areas. `on-primary` is white.

Text uses a grey scale rather than pure black. `ink` (#5c6163) is the most-read text color, carrying 2311 characters in the measurement, and is the descriptive copy on the light canvas. `ink-on-dark` (#b7bcc2) is the body text color used on dark surfaces (1464 characters). Headings and prices read in the dark `surface-dark` value, which is also the text color of the tile cards and the hover state of the primary button. `hairline` (#e7e7e8) is the single border color for dividers inside tiles and the tab strip rule.

## Typography

One family, three cuts, all licensed web fonts: HelveticaNeueLTW05-55Roman (3655 characters), HelveticaNeueLTW05-65Medium (1437) and HelveticaNeueLTW05-75Bold (889). The stack falls back to "Helvetica Neue", -apple-system, "Open Sans", Arial, sans-serif. The extraction reports every computed weight as 400 for the hero numerals because weight is carried by the font file name, not by `font-weight`; the three loaded faces are declared at 300, 500 and 700.

The measured scale: `display` is 50.0001px on a 37.5px line height (the "0.99%" offer figure, which the extractor selected as the largest hero text), with a 32px mobile counterpart. Body is 17px on 27px. The `button` and most small copy are 14px (3795 characters use it, the most of any size), with 12px for captions. `link` and model names are 25px bold on 31px. Other measured sizes include 20.9999px, 40px, 60px and 65px; the 32px and 65px runs carry a -0.5px letter spacing. Headline numerals are tightly leaded: the 50px display has a line height of 37.5px, a ratio under 1.

## Layout

The desktop capture is 1280px wide and 7965px tall. The vehicle grid is four equal columns with wide gutters between tiles (the extraction records gaps of 2px, 4px, 10px and 50px, with 50px being the largest and least used). Tiles are centered text stacks: image, name, class line, hairline, price, hairline, powertrain row, Explore link. The tab strip above the grid spans a narrower centered column than the grid itself. Sections alternate between `page-body` white and `canvas` tinted bands, and dark panels return near the bottom as a pair of side-by-side cards.

Spacing values measured in the tokens run 2, 4, 10, 12, 14, 15, 18 and 25px; the vehicle tile uses `padding: 15px 15px 20px`. There is no evidence of a named spacing scale; the values are what the CSS computes.

## Elevation & Depth

Depth is flat. No box shadows were measured on the home page. Separation comes from three devices: a tinted surface (#f7f8f9 tiles on white), a 1px #e7e7e8 hairline, and the full-bleed dark hero. The hover state of the primary button inverts rather than lifts: background goes from #1971d4 to #ffffff, text from white to #1d252c, and the border to white, with no shadow change (`boxShadow: none` before and after).

## Shapes

Corners are small. The primary button and the vehicle card use `md` 5px. Smaller elements (2.99999px, reported as `xs`/`sm` 3px) are the most common radius by count (45 elements), and 50% and 100% radii (22 elements together) are the circular elements; the capture shows round carousel dots and a round play button. `pill` 9999px is declared for fully rounded controls. Nothing on the page uses large rounding.

## Components

- **button-primary**: solid #1971d4, white 14px Medium text, 5px radius, 10.0001px padding, 40px height, 1px border in the same blue. Hover inverts to white with #1d252c text.
- **nav / nav-link**: white header, links colored #1971d4 at 17px Medium on a 27px line. The measured header child colors also include #1d252c and #5c6163.
- **link**: 25px bold, #1d252c.
- **card**: #f7f8f9 surface, 5px radius, 15px 15px 20px padding, #1d252c text. Used for the vehicle tiles.
- **tab strip**: icon plus label tabs; the active tab has a heavier label and a dark underline, with a hairline rule beneath all tabs. This is described from the capture; its measurements are not in the tokens.

## Design System Architecture

No public design-system documentation was opened for this brand, and no CSS custom properties were found on the root (`rootVars` is empty), so the de-facto system is read from computed styles: three Helvetica Neue LT faces, a six-value grey and blue palette, and a few repeating radii. The site was measured from its rendered home page; no tokens package or repository was consulted.

## Do's and Don'ts

- Do keep one blue (#1971d4) for actions and links; do not add a second accent.
- Do set body copy in #5c6163 on light surfaces and #b7bcc2 on #1d252c.
- Do round buttons and cards at 5px.
- Do separate content with hairlines and tinted surfaces, not shadows.
- Don't use pure black text; the measured headings are #1d252c.
- Don't mix in other typefaces; the three Helvetica Neue cuts carry every size.
- Don't document the carousel dots or play control as brand buttons; they are utility controls.

## Responsive Behavior

Measured at a 390px mobile pass: the display figure drops from 50.0001px to 32px with a 24px line height, and the mobile font-size census is led by 14px, 12px and 17px, followed by 20.9999px and 25px, with a 45px size also present. Breakpoint values, navigation collapse, grid column counts and touch-target sizes were not measured.

## Iteration Guide

1. Start from `canvas` or `page-body`, and put one `button-primary` per hero.
2. Build lists as cards on `canvas` with 5px corners and a hairline between price and options.
3. Set headings in HelveticaNeueLTW05-75Bold and body in 55Roman at 17px/27px.
4. Use `surface-dark` for hero bands, with `ink-on-dark` for text.
5. Check any new color against the palette above before adding it; if it was not measured, leave it out.
