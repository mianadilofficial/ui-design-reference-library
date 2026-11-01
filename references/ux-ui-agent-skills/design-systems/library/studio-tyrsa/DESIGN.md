---
version: alpha
name: Studio Tyrsa
category: "Portfolio"
description: "Paris creative studio portfolio: white #ffffff canvas, #000000 ink with 30%, 40% and 10% black steps, a single Untitled Sans family at 10.9714px captions and 32.9143px headings tracked tightly, edge-to-edge project tiles and a 999px pill radius for chips."
colors:
  canvas: "#ffffff"
  page-largest: "#f6f6f6"
  ink: "#000000"
  primary: "#000000"
  surface-grey: "#929292"
  ink-secondary: "#0000004d"
  ink-tertiary: "#00000066"
  hairline: "#0000001a"
typography:
  display:
    fontFamily: "\"Untitled Sans\", sans-serif"
    fontSize: 32.9143px
    fontWeight: 400
    lineHeight: 39.4971px
    letterSpacing: "-1.97486px"
  display-mobile:
    fontFamily: "\"Untitled Sans\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-1.2px"
  heading:
    fontFamily: "\"Untitled Sans\", sans-serif"
    fontSize: 10.9714px
    fontWeight: 500
    lineHeight: 16.4571px
  body:
    fontFamily: "\"Untitled Sans\", sans-serif"
    fontSize: 27.4286px
    fontWeight: 400
    lineHeight: 33.5543px
    letterSpacing: "-1.64571px"
  link:
    fontFamily: "\"Untitled Sans\", sans-serif"
    fontSize: 14.6286px
    fontWeight: 400
    lineHeight: 21.9429px
rounded:
  pill: 9999px
spacing:
  s1: 1.83px
  s2: 3.66px
  s3: 4.57px
  s4: 9.14px
  s5: 16.46px
  s6: 18.29px
  s7: 20.11px
  s8: 27.43px
  s9: 36.57px
  s10: 91.43px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
---

## Overview

Studio Tyrsa (title "Studio Tyrsa — Studio Tyrsa", language en) is a Paris creative studio whose opened page describes it as "Paris based creative studio crafting meaningful images, identities and type for inspiring partners." The home page is long (measured scrollHeight 4962 at 1280px). It opens with a thin white header containing a rotating 3D blue sphere of lettering at top left, the nav (Projects, About, Contact, Shop and an Instagram icon), the intro sentence in large light type and a Paris clock ("Paris, France 05:55 AM"). Below sits a full-bleed featured case study carousel (Forever King, Nike Basketball, with dot pagination), then an "All Projects" section with filter words and a three-column grid of identity work: Audemars Piguet 150th Anniversary, Forever King, Tactile, Gilga Farm, AP Varsity Jacket, Paris Basketball, and more.

The opened page also lists a logo collection from 2013 to 2026 with entries by year (Nineteen Hundred, Department M, Chicago Marathon, San Diego FC, Clippers, Prince and many others) and case studies for Paris 2024, Schott NYC, Swarm (Amazon Prime), We Love Winter (Moncler), NY VS NY (Nike), Monsieur Aznavour and Dreamville Festival. The interface is deliberately neutral so the lettering, logos and photography carry the page. Copy is minimal and lowercase-friendly.

## Colors

The interface is white and black with graded transparency; all color comes from project imagery.

- **Canvas #ffffff**: the page background.
- **page-largest #f6f6f6**: the largest measured background area (813), the pale grey behind the hero and card regions.
- **Ink #000000**: primary text, 331 characters weighted.
- **Primary #000000**: no colored CTA exists; black is the action color.
- **ink-secondary #0000004d**: black at 30% opacity, the most-read text color (768 characters weighted), used for project captions and filter labels.
- **ink-3 #00000066**: black at 40%, for the inactive nav item (Projects) and filter buttons (measured 0.4 on the Branding filter before hover).
- **hairline #0000001a**: black at 10%, the border color on four elements.
- **surface-grey #929292**: a grey measured with zero area weight; kept as measured.

Because most captions are partially transparent black, the exact rendered grey depends on the background beneath.

## Typography

A single family is used, Untitled Sans, registered at weights 400 and 500.

- **display**: 32.9143px / 39.4971px, weight 400, tracking -1.97486px (the "All Projects" h1).
- **display-mobile**: 20px / 24px, tracking -1.2px (390px pass).
- **body**: 27.4286px / 33.5543px, tracking -1.64571px (the intro sentence).
- **link**: 14.6286px / 21.9429px.
- **heading**: 10.9714px / 16.4571px, weight 500 (project titles such as "Forever King").

The most-read size is 10.9714px (1083 characters weighted) for captions, with tracking -0.329143px; 73.1429px (tracking -5.85143px) is used for a large element 12 characters long. Weights are 400 (1086) and 500 (108). The typeface's license is not stated on the pages opened. Letter spacing is negative at every large step: -1.64571px at 27.4286px, -1.97486px at 32.9143px and -5.85143px at 73.1429px.

## Layout

The grid is columns of equal width: the project grid shows three tiles per row, with the first row mixing a double-wide tile (Audemars Piguet) and two single tiles, and later rows of 1 + 1 + 2 tiles. Gaps are 18.2857px (104 uses), 9.14286px, 3.65714px, 27.4286px and 91.4286px; paddings are 9.14286px (122), 4.57143px and 18.2857px. The footer variables are `--footer-m-top: 4rem` and `--footer-height: 8.4rem`. Tiles are flush with the screen edges and each carries a two-line caption beneath (title in weight 500, client or category in the lighter ink).

## Elevation & Depth

No shadows measured. The page is flat; the only dimensional element is the rotating 3D lettering sphere at the top left, an image/canvas object and not a CSS effect. Do not add shadows.

## Shapes

One radius was measured: 999px on five elements (filter chips and carousel pagination dots, which are the round controls on the page). Tiles, images and captions are square-cornered. Token: `pill: 9999px`.

## Components

- **Nav**: Projects, About, Contact, Shop at the top, 10.9714px; the current section (Projects) is muted.
- **Filter buttons**: Branding, Art Direction, Lettering, Typeface, Main Title, Product, Murals, Illustration in 10.9714px. Hover measured on Branding: text color and border go from rgba(0, 0, 0, 0.4) to rgba(0, 0, 0, 0.75).
- **Carousel**: a full-bleed featured project with four dots (999px radius) and a two-line caption "Forever King / Nike Basketball".
- **Project tile**: image with title (weight 500) and category beneath in muted black.
- **link**: Untitled Sans 14.6286px in #000000.
- **Footer** with contact email and Instagram.

## Design System Architecture

No public design system or brand guidelines exist: the opened page (https://www.studiotyrsa.com/) names no typeface or guidelines. The root declares only six variables: `--footer-m-top`, `--footer-height` and four viewport-height helpers (`--vh`, `--svh`, `--dvh`, `--lvh`). The de-facto system is therefore one font family, black at graded opacities (100%, 40%, 30%, 10%), a gap scale of multiples of 9.14286px and one pill radius. Source: https://www.studiotyrsa.com/ (measured rootVars).

## Do's and Don'ts

Do:
- Keep the chrome white and black with opacity steps 100%, 40%, 30% and 10%.
- Use Untitled Sans only, with tight negative tracking at large sizes.
- Run tiles edge to edge with small captions beneath.
- Use the 999px radius only for dots and chips.

Don't:
- Add brand colors to the interface; the color belongs to the work.
- Add shadows or borders heavier than 10% black.
- Add a second typeface or heavier weights than 500.

## Responsive Behavior

In the 390px pass the h1 measures 20px / 24px with -1.2px tracking; character-weighted sizes are 12px (2036), 30px (158), 20px (12) and 50px (12). The opened page lists a mobile "Menu" button, so a separate mobile nav exists; its layout was not measured. Grid column counts on mobile were not measured.

## Iteration Guide

1. Set canvas #ffffff, section tint #f6f6f6 and ink #000000.
2. Use #0000004d for captions and #0000001a for hairlines.
3. Load Untitled Sans at 400 and 500; intro 27.4286px/-1.64571px, captions 10.9714px.
4. Build a three-column edge-to-edge grid with 18.2857px gaps.
5. Filter hover: color from 0.4 to 0.75 black.
6. Re-run `node web/scripts/verify-designs.mjs --slug=studio-tyrsa`.

## Content Notes for Reproduction

Filters on the page are Branding, Art Direction, Lettering, Typeface, Main Title, Product, Murals and Illustration. The nav links are Projects (to the in-page projects anchor), About, Contact, Shop (to shop.tyrsa.fr) and Instagram. The page footer states copyright 2025 and contact hello@studiotyrsa.com. Project captions follow the pattern "Project title / client or discipline", for example "Forever King / Nike Basketball", "Tactile / Branding" and "Gilga Farm / Logo". The logo collection list repeats the pattern "Name (year)" in rows of seven.

Spacing tokens map to the measured values: s1 1.83px, s2 3.66px, s3 4.57px, s4 9.14px, s5 16.46px, s6 18.29px (the dominant gap), s7 20.11px, s8 27.43px, s9 36.57px and s10 91.43px. These are all fractions of a viewport-scaled unit (18.2857px at 1280px), which is why they look irregular; they should be reproduced as measured rather than rounded.

The hover table recorded on the filter buttons shows the pattern for interactive text: the control sits at 40% black, and on hover both its text color and its border color move to 75% black, with no background fill, shadow or underline. The same measurement lists other filter words beginning with Art Direction, so the behavior applies to the whole filter row. Nothing was measured for tile hover, so tile hover is not documented here. The header nav has no background, so on scroll its legibility depends on the white canvas; whether it stays fixed was not measured.

The art direction of the capture is worth recording because it drives the neutral chrome: tiles show dark green lettering (Audemars Piguet), stone texture with a black logo (Forever King), burgundy with a cream logotype (Tactile), orange and black photography (Gilga Farm) and a navy and red crest (Paris Basketball). Because every tile has a different dominant color, the interface avoids any brand color of its own and uses only black and white.
