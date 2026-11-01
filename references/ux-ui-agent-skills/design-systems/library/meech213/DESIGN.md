---
version: alpha
name: Meech213
category: "Fashion & Apparel"
description: "Meech213, the portfolio of photographer and filmmaker Dametreus Ward: warm paper canvas #f5f4f1, pure black ink, articulat-cf 14.1px uppercase nav and Ceraph Roman 35.25px statements, no filled buttons, 9999px pill only."
colors:
  canvas: "#f5f4f1"
  ink: "#000000"
  primary: "#000000"
  ink-muted: "#14121266"
  ink-menu: "#141212f0"
typography:
  display:
    fontFamily: articulat-cf, sans-serif
    fontSize: 14.1003px
    fontWeight: 500
    lineHeight: 18.3304px
    textTransform: uppercase
  display-mobile:
    fontFamily: articulat-cf, sans-serif
    fontSize: 12.2649px
    fontWeight: 500
    lineHeight: 15.9443px
    textTransform: uppercase
  link:
    fontFamily: articulat-cf, sans-serif
    fontSize: 15.667px
    fontWeight: 400
    lineHeight: 20.3671px
  statement:
    fontFamily: '"Ceraph Roman", Verdana, sans-serif'
    fontSize: 35.2508px
    fontWeight: 400
    lineHeight: 35.2508px
  body:
    fontFamily: articulat-cf, sans-serif
    fontSize: 15.667px
    fontWeight: 400
    lineHeight: 20.3671px
rounded:
  pill: 9999px
spacing:
  s1: 11.75px
  s2: 16px
  s3: 31.33px
  s4: 125.34px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  footer:
    textColor: "{colors.ink}"
---

# Meech213

Measured from https://www.meech213.com/ (final URL identical; page title "Meech213 | Photography and Film by Dametreus Ward") and from one extra page, https://www.meech213.com/about (measured as `meech213--about`). 1280px desktop pass and 390px mobile pass. The home page is 800px tall: a single viewport, not a scrolling page. It is the portfolio of Dametreus Ward, a fashion and beauty photographer and filmmaker.

## Overview

The site is an almost colorless stage for photographs. The canvas is a warm off-white `#f5f4f1` (the CSS variable `--white`), the ink is `#000000`, and nothing else is saturated. On the home page, three tilted images float on the paper: a Grazia cover (Kelly Rowland), a portrait for a Flaunt film, and a model in a studio, positioned asymmetrically with different rotations. At the lower edge a navigation word-cloud in a light serif reads PHOTO, VIDEO, HOME, ABOUT, BOOK, with the current item (HOME) in black and the others in pale grey; thin lines connect them to a small center point. Top-left, a small rotated label reads "It's Meech's time"; top-right, an uppercase link stack lists EMAIL, TWITTER, FACEBOOK, INSTAGRAM; bottom-left "All rights reserved. 2026"; bottom-right "Site by TBP".

The About page is a single large serif statement: "Dametreus Ward is the name, the Artist & CEO of Meech213. Owner of MeechStudios. Based in Los Angeles and relocating to New York fall 2026." followed by a first-person paragraph that begins "I want to share something with you." The voice is personal and direct.

## Colors

Measured text colors by character weight: `#000000` (89 on the home page, 2,801 on About), `#14121266` (42 and 41), `#141212f0` (4 and 5). Measured background areas are only translucent `#1412126b` lines (8). The color system, from :root, is small:

- **Canvas `#f5f4f1`** (`--white`).
- **Ink `#000000`**, also the primary, since no filled brand-colored element exists.
- **Muted ink `#14121266`** (`--menu-muted`): the pale navigation items and inactive states.
- **Menu ink `#141212f0`** (`--menu-ink`) and menu line `#1412126b` (`--menu-line`); menu paper `#f8f6f1` (`--menu-paper`); menu shadow `#17151214`.
- Variables `--not-found-paper #f6f1eb`, `--not-found-dark #ada59c` and `--counter-glaze #ffffffeb` belong to the 404 page and a counter widget; they were not seen on the measured pages.

There is no accent color. The images supply all chroma.

## Typography

Two families. **articulat-cf** (weights 400 and 500) is the sans face; it sets the UI at 13.3px to 15.7px, the nav links at 14.1px weight 500 uppercase, and the About body at 15.667px/20.3671px weight 400. **Ceraph Roman** (weight 400, fallback `Verdana, sans-serif`) is the light, high-contrast serif used for the center navigation (31.334px) and the About statement (35.2508px with line-height 35.2508px, a solid 1.0 leading). On the About page the serif covers 462 characters and the sans 2,385.

Mobile: nav 12.2649px/15.9443px weight 500 uppercase; the About statement 30.6622px; the About body 13.6276px/17.7159px. Display type is therefore small by contemporary standards (the largest measured size is about 35px): scale is expressed through contrast of serif against sans and through image size, not through large type.

## Layout

The home page is a full-viewport composition with absolutely placed corner text and free-floating images, not a grid. Measured spacing is sparse: 11.75px and 125.336px paddings on the home page; gaps 31.334px and 16px. On About, padding `4.70011px` (916 elements, the per-word spans of the animated statement), 10.5752px (100) and 9.40021px (60); gaps 31.334px, 16px, 47.0011px, 15.667px. The `--top-padding` variable is 8rem. The footer role on the home page measures 412px tall and lists Menu, FASHION, ABOUT, BEAUTY, VIDEO, so a fuller menu exists beyond the visible corner links. The About text column is 469px wide.

## Elevation & Depth

There are no card shadows. The only measured shadow is `rgba(20, 18, 18, 0.18) 0px 0px 0px 0.4px`, a 0.4px hairline ring (2 elements). Depth is created by overlapping, rotated photographs on the flat paper.

## Shapes

One radius is measured: `999px` (2 elements, pill). The generated token file names it `pill: 9999px`. Everything else, including images, renders at 0px: the photographs are plain rectangles, rotated. No buttons, cards or inputs were detected.

## Components

- **Corner link stack:** EMAIL, TWITTER, FACEBOOK, INSTAGRAM; articulat-cf 14.1003px weight 500 uppercase, `#000000`, right aligned; hover leaves color unchanged (hover before/after both `rgb(0, 0, 0)`).
- **Serif navigation:** Ceraph Roman 31.334px, current item `#000000`, others `#14121266`, joined by thin lines; items PHOTO, VIDEO, HOME, ABOUT, BOOK.
- **Floating image:** unframed, unrounded photograph, rotated by a few degrees.
- **Statement:** Ceraph Roman 35.2508px, one-line leading; the About page splits it into word spans.
- **Footer line:** 13.317px weight 400 `#000000`, containing the copyright and the credit "Site by TBP".
- **Skip link and "Back" link** are present in the header for navigation.

## Content Inventory

The home page HTML links to photo and video detail pages by slug, which shows how the portfolio is organized: photo pages are named for the subject and often the publication (for example `kelly-rowland-for-grazia`, `maitreyi-for-lofficiel`, `paloma-mami-for-lofficiel-brasil`, `taylor-rooks-for-schon`, `chris-brown-for-swm`, `cassie-for-voir`), and video pages are named for the project (`avril-numero`, `boyslie`, `boyslie-pt-2`, `brianne-h`, `dom`). The home page HTML carries 22 photo links and 20 video links. The site therefore reads as a client-and-editorial portfolio: magazine covers and music, fashion and beauty subjects. The /fashion and /beauty paths listed in the footer menu returned a 404 when fetched directly, while /about and /video returned 200; the measured footer menu is therefore a list of labels whose targets were not all verified.

## Design System Architecture

No public design system or brand guidelines exist for this site: the home page and /about were opened and link only to photo and video detail pages (for example /photo/kelly-rowland-for-grazia, /video/avril-numero) and social profiles. The de-facto system is a Next.js build (assets under `/_next/static/immutable/chunks/`) with a short :root variable set: `--white`, `--black`, `--menu-*`, `--counter-*`, `--not-found-*` and `--top-padding`. The footer credits the builder as TBP. Taken together, the system is deliberately reduced: one warm neutral, one black, two typefaces, no component chrome. A designer reproducing it should treat the photographs as the only variable content, keep every piece of interface text at 13px to 15.7px except the serif statements and navigation, and avoid adding states, borders or backgrounds that the measurement did not find. The measured hover state on the corner links changes nothing in color, border or shadow, so interaction feedback, if any, is carried by something other than those properties; it was not measured here and is not described.

## Do's and Don'ts

- Do keep the canvas `#f5f4f1` and the ink `#000000`; let photography supply color.
- Do pair articulat-cf uppercase for utility links with Ceraph Roman for statements and navigation.
- Do rotate and overlap images rather than gridding them.
- Don't add buttons, borders, cards or accent colors; none were measured.
- Don't use heavy shadows; the only one is a 0.4px ring.
- Don't set display type larger than about 35px; the measured maximum is 35.2508px.

## Responsive Behavior

At 390px the extractor measured the nav and utility links at 12.2649px/15.9443px weight 500 uppercase in a 390px-wide header 74px tall, and the About statement at 30.6622px weight 400 (374px wide, 153px tall) with body text at 13.6276px. How the floating-image composition and center navigation adapt on mobile was not measured.

## Iteration Guide

1. Canvas `#f5f4f1`, ink `#000000`, muted `#14121266`.
2. Utility text in articulat-cf 14px weight 500 uppercase; statements in Ceraph Roman 35px.
3. Place photographs unrounded and slightly rotated; no frames.
4. Add no color beyond the photographs.
5. Run `node web/scripts/verify-designs.mjs --slug=meech213`.
