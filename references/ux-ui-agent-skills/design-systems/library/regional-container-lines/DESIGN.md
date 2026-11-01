---
version: alpha
name: RCL Group
category: "Thai Brands"
description: "RCL Group (Regional Container Lines) corporate site: a white canvas with a deep #004b8e blue navigation drawer, SourceSansPro-Light 72px hero text over aerial container-port photography, OpenSans bold 14px uppercase navigation with 1px letter spacing, and a single 30px radius used on a handful of elements."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#004b8e"
  on-primary: "#ffffff"
  surface-grey: "#f5f5f5"
  surface-blue-light: "#0659a3"
  hairline: "#d7d7d7"
typography:
  display:
    fontFamily: SourceSansPro-Light
    fontSize: 72px
    fontWeight: 400
  display-mobile:
    fontFamily: SourceSansPro-Light
    fontSize: 48px
    fontWeight: 400
  nav:
    fontFamily: OpenSans-Regular
    fontSize: 14px
    fontWeight: 700
    letterSpacing: 1px
rounded:
  xs: 30px
spacing:
  s1: 5px
  s2: 10px
  s3: 12.8px
  s4: 14px
  s5: 15px
  s6: 20px
  s7: 25px
  s8: 39.2px
  s9: 40px
  s10: 90px
components:
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 14px 14px 14px 39.2px
    boxShadow: rgb(127, 174, 200) 0px -1px 0px 0px inset
---

## Overview

RCL Group presents Regional Container Lines, a container-shipping operator, through a corporate site built around photography. The measured home page (title "RCL Group") opens on a full-width hero of an aerial container terminal and ship, with the headline "CONNECT YOUR SUPPLY CHAIN" set in a light-weight sans over the image. Below the hero sit four utility tiles (cargo tracking, sailing schedule, long term schedule, rate inquiry), a "Service Network" panel with a blue diagonal cut over a ship photograph, a grey statistics band (fleet, service routes, capacity in TEUs), a "Recent News" carousel and a closing "Reliable Services 24/7" banner.

The tone is operational and plain: short uppercase labels, route names such as "North Asia - ASEAN" and "Intra ASEAN", and numbers presented as facts (45 vessels, 60 service routes, 400 to 12,000 TEU). There is no decorative illustration; icons are thin outline pictograms of ships, containers, calendars and world maps. Colour is carried by the blue brand fill and by photography rather than by UI accents.

The extraction recorded no primary call-to-action button, so no button token is declared. The role of "primary" is assigned to the measured navigation blue #004b8e, which is also the dominant background by area in the extraction.

## Colors

Measured palette, from the extraction's area-weighted background and text-colour frequencies:

- Canvas {colors.canvas} (#ffffff) is the page background. White is also the most-read text colour (2357 characters), because the navigation drawer and hero headline are white on dark.
- Ink {colors.ink} (#000000) is the dark text colour (564 characters) used on the white and grey sections.
- Primary {colors.primary} (#004b8e) is the navigation drawer background and the largest background area (weight 4320).
- Surface blue light {colors.surface-blue-light} (#0659a3) is a second, brighter blue seen in the service-network panel region.
- Surface grey {colors.surface-grey} (#f5f5f5) fills the statistics band and the alternate utility tile.
- Hairline {colors.hairline} (#d7d7d7) is the measured border colour on the utility tile dividers.

The extraction also recorded a translucent peach background (#ffddc4bf) and a #0000001a overlay; they are the closing banner tint and a shade, and are not declared as tokens. White text on #004b8e is the repeated pairing for navigation and for the service-network list.

## Typography

Two families carry the site. SourceSansPro-Light is the display face: the home hero headline measures 72px at weight 400 on desktop and 48px on the 390px mobile pass. OpenSans-Regular and OpenSans-Bold carry almost all running text and navigation (OpenSans-Regular covers 2331 characters, OpenSans-Bold 288). SourceSansPro-Bold, SourceSansPro-Regular, OpenSans-Semibold and HelveticaLTStd-Bold appear in smaller amounts, and a "linecons" icon font is loaded.

Navigation links measure OpenSans-Regular at 14px, weight 700, letter-spacing 1px; the drawer container itself computes 20px, uppercase. The most used sizes by character count are 14px (2010), 16px (286), 20px (242), 23px (78), 12.8px (68) and 12px (64); larger sizes 36px and 32px appear for section titles and statistics, and 72px for the hero.

Font substitutes: OpenSans-Regular and SourceSansPro-Light correspond to the open-source families Open Sans and Source Sans Pro; the names are those reported by the browser, so the shipped files may be custom-named builds. HelveticaLTStd-Bold is a commercial face; use Helvetica or Arial as a fallback where the licence is unavailable.

## Layout

The page is 1280px wide in the measurement with a scroll height of 2802px. Navigation is a 300px-wide vertical drawer titled "MAIN MENU" with nested lists (Home, Business, Container and others) rather than a horizontal bar. Content is full-bleed: the hero image spans the viewport, the utility tiles divide the width into four equal cells separated by hairlines, and the news carousel sits in a narrower centred column.

Spacing values measured as padding: 14px and 39.2px on navigation links (the left padding is the larger one), 25px, 12.8px, 5px, 40px, 15px, 90px, 10px and 20px elsewhere. These are the spacing tokens s1 to s10. No gap values were recorded.

## Elevation & Depth

Depth is nearly absent. The only box shadows measured are inset one-pixel lines: rgb(127, 174, 200) 0px -1px 0px 0px inset on navigation links (102 uses), a grey top and bottom inset pair on 22 elements, and rgba(0, 0, 0, 0.1) 0px 1px 0px 0px inset on 17. They act as separators, not as lift. Separation between sections otherwise comes from background change (white, #f5f5f5, blue) and from photography. No drop shadows were measured.

## Shapes

The only radius measured is 30px, on five elements; every other element computes 0px. Corners are therefore square for tiles, images, navigation and panels, with the 30px radius reserved for rounded pill-like elements. The service-network panel uses a diagonal edge in the image rather than a radius. No borders other than #d7d7d7 (2 uses) and #000000 (1 use) were measured.

## Components

- Navigation drawer: background {colors.primary}, white text, 300px wide, uppercase. Each link is OpenSans 14px weight 700 with letter-spacing 1px, padding 14px 14px 14px 39.2px and a one-pixel light-blue inset line beneath (rgb(127, 174, 200)).
- Utility tiles: four equal cells with a thin outline icon above an uppercase 14px bold label; adjacent tiles alternate white and #f5f5f5 and are divided by hairlines.
- Service network panel: a blue panel with the title "Service Network" in light-weight sans and a list of routes with circled-arrow bullets in white.
- Statistics band: grey background, three outline icons, each paired with a number and uppercase caption.
- News cards: image above, bold headline, a download link labelled "English".
- Third-party chat launcher: a "BHUMconnect" widget appears in the capture. It is not brand UI and is not tokenised.

## Design System Architecture

No public design system, brand guideline or token package was found; the site could not be re-opened for research (see _toolErrors in SOURCES.json). The de-facto system is the measured one: the extraction recorded an empty rootVars object, so there are no CSS custom properties, and styling is expressed through the font-name and colour values above. Iconography comes from a "linecons" icon font plus outline SVG-style pictograms. The system is therefore convention-based: one navy-blue fill, white and light-grey surfaces, two type families, and square geometry.

## Do's and Don'ts

Do:
- Use white text on {colors.primary} for navigation and key panels.
- Set hero headlines in SourceSansPro-Light, 72px on desktop and 48px on mobile.
- Keep corners square and use the 30px radius sparingly.
- Pair numbers with short uppercase captions in the statistics band.
- Let photography of ships and terminals carry the visual interest.

Don't:
- Do not add drop shadows; only one-pixel inset lines were measured.
- Do not treat the chat launcher or carousel dots as brand components.
- Do not use #ffffff as a button colour on the white canvas; no button was measured.
- Do not introduce additional accent hues; none were measured.

## Responsive Behavior

Measured on a 390px mobile pass: the hero headline drops from 72px to 48px (SourceSansPro-Light, weight 400), and the navigation computes the same 300px-wide drawer with 20px uppercase text and a 844px height. The size distribution on mobile is otherwise the same as desktop (14px most used, then 16px, 20px, 12.8px, 12px, 18px). Breakpoints, column changes and tile stacking were not measured.

## Iteration Guide

1. Start from {colors.canvas} and {colors.ink}; place {colors.primary} only in navigation and large panels.
2. Use {typography.display} for hero text over photography and {typography.nav} for menu links.
3. Build rows from the spacing tokens: 14px and 39.2px for menu padding, 25px and 40px for section blocks.
4. Keep shapes square; apply {rounded.xs} only where a pill is needed.
5. Run the gate with `node web/scripts/verify-designs.mjs --slug=regional-container-lines` after any change, and re-measure from the live site before adding new values.
