---
version: alpha
name: "Obys Agency"
category: "Portfolio"
description: "Obys Agency portfolio measured live at obys.agency: pure black #000000 on white #ffffff with grey #c9c9c9 inactive items, the custom Obys typeface at 71.1111px display and 9.77777px body with negative tracking, zero radius everywhere and a centered vertical image column."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  ink-muted: "#c9c9c9"
typography:
  display:
    fontFamily: Obys, serif
    fontSize: 71.1111px
    fontWeight: 400
    lineHeight: 71.1111px
    letterSpacing: "-2.13333px"
  display-mobile:
    fontFamily: Obys, serif
    fontSize: 21.6667px
    fontWeight: 400
    lineHeight: 21.6667px
    letterSpacing: "-0.65px"
  body:
    fontFamily: Obys, serif
    fontSize: 9.77777px
    fontWeight: 400
    lineHeight: 11.7333px
    letterSpacing: "-0.0977777px"
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 4.44px
  s3: 8.89px
  s4: 26.67px
  s5: 44.44px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
---

# Obys Agency

## Overview

The measured page is https://obys.agency/ (title "Obys Agency"), 1223 visible elements, an architecture, design and digital studio portfolio. It is the opposite of a conventional agency homepage: a white screen, an oversized black "OBYS®" logotype at the top left, and a narrow vertical column of grayscale, dithered project thumbnails running down the centre of the viewport. The currently selected project (Eminente in the capture) is in focus at the vertical middle, flanked left and right by two black quarter-circle brackets; its category ("Fashion, Photography") sits at the left, its services ("Creative Direction, Web Design/Dev") at the right, and its number (10) at the far right edge. The project list at the left is a tiny column of names in light grey, with the active one in black. At the top right, "Work, About", a local time "CEST 6:27 AM" and "Contact" appear; below them a four-line studio statement ("The studio is shaped by people who care deeply about design and the process behind. Each project becomes a case study and a meaningful part of our portfolio, developed with care and attention.") and an underlined contact email. At the bottom left, "Vertical, Horizontal, Grid" switch the layout; at the bottom right the copyright is in grey.

The page text opened via WebFetch lists 19 numbered projects, from Makhno to Peter Lindbergh, each with disciplines (Architecture, Fashion, Technology, Education) and services (Creative Direction, Web Design/Dev, Identity, 3D). The tone is minimal and descriptive: no marketing slogans and one call to action, "Contact".

## Colors

The system is monochrome. Text by characters: `#000000` (6294), `#c9c9c9` (31), `#ffffff` (30). The root declares only `--black: #000` and `--white: #fff`. The extractor reports `#000000` as the single measured background area (1027); in the capture the page the viewer sees is white with black text, and white is the page canvas, so `canvas` #ffffff is used (the black background belongs to the bracket shapes and imagery frames).

- `canvas` #ffffff: page.
- `ink` / `primary` #000000: text, logotype, underlines and brackets.
- `ink-muted` #c9c9c9: inactive project names and copyright line.

The thumbnails are desaturated imagery, so no color accents exist anywhere in the interface.

## Typography

One proprietary typeface, Obys (loaded at 400 normal, with an additional `ObysSans4` face loaded), set in `Obys, serif`. All 6355 measured characters are weight 400. The sizes are fluid values rather than round numbers, which indicates viewport-relative sizing: 71.1111px for the h1-like project name (504 characters) and 9.77777px for everything else (5851 characters).

- `display` 71.1111px / 71.1111px, letter-spacing -2.13333px: project titles (the measured h1 is the first project, "Makhno").
- `body` 9.77777px / 11.7333px, letter-spacing -0.0977777px: lists, statement, labels, nav.
- `display-mobile` 21.6667px / 21.6667px, letter-spacing -0.65px: the mobile h1 measurement.

The mobile pass measured the body at 2.97916px / 3.575px, which is the value reported by the extractor at 390px; it is recorded here as measured and not interpreted. Tracking is slightly negative at both display (-3% of size) and body sizes.

## Layout

The root declares a 12-column grid with variables: `--m-x: 1rem` and `--m-y: 1rem` (margins), `--g: 1rem` (gutter) and `--c: calc((100vw - (var(--m-x)*2 + var(--g)*11))/12)` (the width of one column). In the capture the logotype is at the left, the image column in the middle, and the statement and contact at the right. Measured paddings are only 1px (122 uses), 26.6667px and 8.88888px; the measured data does not show padded containers. Whitespace is the dominant element; the h1 element carries a `matrix(1, 0, 0, 1, 0, 80.4203)` transform.

## Elevation & Depth

No shadows and no overlays were measured. Depth is created only by the monochrome dithered imagery, scale contrast between the 71px titles and the 9.78px text, and the black bracket shapes around the focused thumbnail.

## Shapes

No border radius was measured: `borderRadii` is empty, so every rendered element computes a radius of 0px. The `rounded` token is `none: 0px`. Shapes in the capture are rectangles (thumbnails, underlines) and the black quarter-circle brackets, which are drawn graphics rather than rounded elements.

## Components

- **link**: black 9.77777px text, underlined in the capture for the contact email and the active nav item ("Work").
- **nav**: "Work, About" at the top right and "Vertical, Horizontal, Grid" at the bottom left, both in the body style; the current one is underlined.
- **project list**: stacked names in #c9c9c9 with the active entry in black.
- **project column**: dithered grayscale thumbnails centred on the page, with a category and a services line at the sides and a two-digit index.
- **footer**: a single grey copyright line, "All rights reserved. ©2026 Obys".

No buttons, inputs or cards were detected.

## Design System Architecture

No public brand guideline or design system link appears on https://obys.agency/. The de-facto system is six CSS root variables: `--black`, `--white`, `--m-x`, `--m-y`, `--g` and `--c`, defining colors and a 12-column fluid grid, with type sizes expressed as fractions of the viewport. The same studio publishes "Obys' Design Books" (a separate queued site). Measurements are in `web/data/extracted/obys-2.json`.

## Do's and Don'ts

- Do keep the page to black on white, with grey for inactive state.
- Do use one typeface at weight 400 and carry hierarchy by scale (71px versus 9.78px).
- Do apply negative letter-spacing at every size.
- Don't add radius, shadow or accent colors; none were measured.
- Don't show full-color imagery; the thumbnails are grayscale.
- Don't add buttons; the only call to action is the "Contact" text link.

## Responsive Behavior

The 390px pass measured the h1-like title at 21.6667px / 21.6667px with -0.65px tracking in a 73px wide box, and the body at 2.97916px / 3.575px. Whether the layout switches arrangement is not measured, although the page offers "Vertical, Horizontal, Grid" view labels; their behavior is not measured.

## Iteration Guide

1. White canvas, black type, #c9c9c9 for inactive.
2. One typeface at weight 400; display 71.1111px, body 9.77777px.
3. Use the 12-column variables for placement.
4. Grayscale dithered imagery only.
5. Gate: `node web/scripts/verify-designs.mjs --slug=obys-2`.

### Content and imagery notes

The thumbnails in the capture are dithered, low-contrast grayscale images: a stone-like sculpture on a plinth, a stack of printed sheets, a laptop-style screenshot of the Eminente site beside a portrait, a grid of tiny square frames in a circle, and an architectural wireframe model. Their stacking is vertical, centred and unframed, with white gaps between them. The black bracket pair around the focused item is the only decorative shape. Copy is in English, in sentence case, with disciplines listed in a comma-separated line. The statement block uses the body size with a narrow measure of about four lines, and the email is the only underlined link in the right column.

The color roles are therefore split by function rather than by hue. Black carries identity and reading: the logotype, project titles, the statement and every underline. White carries space. Grey carries state: a project name that is not selected, and the closing copyright line, are both set in #c9c9c9 so that the selected entry reads as the only full-contrast item in the list. This is the whole interaction language measured on the page: contrast between black and light grey rather than hover fills, outlines or buttons. The measured hover list is empty, so hover behavior is not measured.
