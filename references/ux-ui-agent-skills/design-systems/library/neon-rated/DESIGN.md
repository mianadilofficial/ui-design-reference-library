---
version: alpha
name: NEON Rated
category: "Retail & E-commerce"
description: "NEON Rated film distributor site neonrated.com: full-bleed key-art posters, white header and black #000000 GET TICKETS bar, Girott 700 uppercase at 160px and Focal at 14px, radii 4px and 8px, ink #000000 on #ffffff and #f3f3f3."
colors:
  canvas: "#ffffff"
  page-largest: "#f3f3f3"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  button-secondary-border: "#ffffff1a"
  overlay-dark: "#00000033"
typography:
  display:
    fontFamily: Girott, "Girott Fallback", sans-serif
    fontSize: 160px
    fontWeight: 700
    lineHeight: 144px
    letterSpacing: "-4.8px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Girott, "Girott Fallback", sans-serif
    fontSize: 70px
    fontWeight: 700
    lineHeight: 63px
    letterSpacing: "-2.1px"
    textTransform: uppercase
  body:
    fontFamily: Focal, "Focal Fallback", sans-serif
    fontSize: 9px
    fontWeight: 500
    lineHeight: 10.8px
    letterSpacing: "-0.09px"
  nav:
    fontFamily: Focal, "Focal Fallback", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: "-0.14px"
  button-secondary:
    fontFamily: Focal, "Focal Fallback", sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 14px
    letterSpacing: "-0.12px"
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 8px
  xl: 10px
  2xl: 80px
  3xl: 100px
spacing:
  s1: 1.6px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 7px
  s8: 8px
  s9: 10px
  s10: 15px
components:
  button-secondary:
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 0px 20px 0px 7px
    height: 50px
    borderColor: "{colors.button-secondary-border}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
  footer:
    textColor: "{colors.canvas}"
    padding: 140px 0px 20px
---

## Overview

neonrated.com is the site of NEON Rated, a film distribution company; the footer reads "NEON Rated, LLC © 2017 — 2026. All Rights Reserved." and the page title is "NEON". The measured page is 1280px wide and 5,747px tall with 1,097 visible elements. The site is a poster wall: nearly every screen is film key art with a giant uppercase title.

The capture shows a full-bleed hero carousel for the film "FJORD" (family portrait in front of a Norwegian harbour), with an "IN THEATERS" tag at the upper left, a very large white "FJORD" title, an outlined play triangle and a row of pagination dots under the image. A compact floating header sits at the top centre: a white bar with a hamburger icon, the NEON wordmark and search, heart, account and cart icons, attached to a black strip reading "GET TICKETS" with a film thumbnail and an arrow. Below the hero, rows titled "IN THEATERS", "COMING SOON" and "WATCH NOW" (condensed heavy uppercase) each carry horizontally scrolling poster cards; "COMING SOON" and "WATCH NOW" also have small arrow buttons beside the title. Under each card the film title is set small in uppercase.

The footer groups link lists under headings NEWSLETTER, FILMS (All, In Theaters, Watch Now) and SHOP (All, Apparel), set large in Girott at 42px. A small circular cookie button sits at the lower right of the capture; it is a consent control and not brand UI.

Voice is minimal: titles, tags and verbs ("GET TICKETS"). The page is a container for photography, and the interface stays black, white and light grey so that film imagery supplies all colour.

## Colors

Measured background areas: `#f3f3f3` (6,837), `#00000033` (4,615), `#000000` (2,648), `#ffffff14` (365), `#ffffff` (18), `#ffffff33` (2). Text colors by characters: `#000000` (981) and `#ffffff` (384). Border colors: `#ffffff` (15), `#0000001a` (8), `#0000000d` (7), `#000000` (4), `#ffffff1a` (1).

- **Canvas `#ffffff`** is the header and page background; **`#f3f3f3`** (the site's `--color-grey`) is the placeholder fill behind posters and the most frequent area.
- **Ink `#000000`** is all text on light surfaces and the fill of the black GET TICKETS strip. Role reassignment: the generator assigned `primary` to white `#ffffff`; the black strip (2,648 area units) is the visible action surface, so `primary` is `#000000` with `on-primary` `#ffffff`. White remains `canvas`.
- **`#00000033`** (20% black) is the scrim over images that carries white text; **`#ffffff1a`** is the faint white border on the dark button.
- Text on posters is white `#ffffff`.

The `:root` defines `--color-red: #d50000`, `--color-green: #aeff00`, `--color-blue: #2195d8`, `--color-pink: #ec71da`, `--background: #fff` and `--foreground: #000`, `--theme-primary: #fff` and `--theme-secondary: #000`. The four chromatic variables exist, but where they are used was not measured, so they are not promoted to tokens. Tailwind ring variables (`rgba(59,130,246,.5)`) are framework defaults. No hover states were measured.

## Typography

Two custom families: Girott (400 and 700) and Focal (400, 500 and 700). Focal sets 1,137 characters and Girott 228. Girott is the condensed heavy display face for film titles and section titles; Focal is the neutral sans for navigation, labels and footnotes. Both carry fallback faces named "Girott Fallback" and "Focal Fallback" in the stacks.

| Role | Family | Size | Weight | Tracking |
| --- | --- | --- | --- | --- |
| display (h1 film title) | Girott | 160px / 144px | 700 | -4.8px |
| display-mobile | Girott | 70px / 63px | 700 | -2.1px |
| nav | Focal | 14px / 14px | 400 | -0.14px |
| button label | Focal | 12px / 14px | 700 uppercase | -0.12px |
| body (footnote) | Focal | 9px / 10.8px | 500 | -0.09px |

Other sizes by character count: 41px and 36px (section titles at -1.26px and -1.08px), 42px (footer headings), 10px. Tracking is always slightly negative and scales with size. Weights: 400 (896), 700 (408), 500 (61). Titles are uppercase, tightly leaded (0.9 of size for display).

## Layout

The site variables define a 2rem horizontal page gap (`--page-gap-x`), 7rem vertical gap (`--page-gap-y`), 12rem top padding (`--page-padding-top`) and 22rem extra-large top padding, plus a 1.6rem card gap. Measured gaps: 10px (178), 8px (98), 1.6px (54), 20px (26), 4px (22), 3px (16), and 140px (4). Paddings: 30px (21), 10px (21), 2px (19), 7px (15), 15px (14), 16px (9), 20px (7). Poster cards are 610px wide and 343px high in the measured card role, with an 8px radius. The footer has `140px 0px 20px` padding.

## Elevation & Depth

Two shadows were measured: a no-op focus-ring stack (white, 50% blue and transparent layers at 0px) and `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` on 2 elements. Depth otherwise comes from the 20% black scrim, the floating header over the hero and the contrast of the black strip against white.

## Shapes

Radii: 4px (163 elements), 8px (86), 10px (14), 80px (3), 100px (2), 3px (1), 2px (1). Four pixels is the control radius (buttons, nav links), 8px the poster card radius, 10px for larger surfaces, and 80px and 100px for round or capsule shapes such as icon buttons and dots.

## Components

- **Floating header.** White bar with icons, black 14px Focal labels, 4px-radius links.
- **GET TICKETS strip.** Black surface, white 12px bold uppercase Focal, a thumbnail at the left and an arrow at the right; secondary button style: height 50px, padding `0px 20px 0px 7px`, 4px radius, `#ffffff1a` border.
- **Poster card.** `#f3f3f3` placeholder, 8px radius, image fill, white tag "IN THEATERS" at the top left in 12px bold uppercase Focal; title below in small uppercase.
- **Carousel controls.** Outlined play triangle, dots, small arrow buttons.
- **Section heading.** Girott 36 to 41px uppercase, tracking about -1.1px.
- **Footer.** White Girott 42px headings (line height 33.6px, tracking -1.26px) on a dark ground; the footer background fill was not measured.

## Design System Architecture

No public NEON Rated design system or brand guideline was linked in the measured data and none was searched for. The system is Tailwind-based (the `--tw-*` variables) with custom properties for layout (`--page-gap-x`, `--page-padding-top`, `--card-gap`), color (`--color-grey`, `--color-red`, `--color-green`, `--color-blue`, `--color-pink`, `--foreground`, `--background`, `--theme-primary`, `--theme-secondary`), type (`--font-girott`, `--font-focal`) and motion easings (`--ease-snappy: cubic-bezier(0.19,1,0.22,1)`, `--ease-out`, `--ease-anticipate`, `--ease-spring`). `--motion: 1` is a global motion switch variable. Per-page use of `--theme-primary` and `--theme-secondary` was not measured.

## Do's and Don'ts

Do:
- Let key art fill the frame and set film titles in Girott 700 uppercase with negative tracking.
- Use black and white UI with `#f3f3f3` placeholders.
- Keep controls at 4px radius and poster cards at 8px.
- Put small uppercase Focal tags at the top left of posters.

Don't:
- Don't add brand colors to the UI; chromatic variables exist but their usage was not measured.
- Don't use the cookie button as a UI pattern.
- Don't loosen the negative tracking on display type.

## Responsive Behavior

On mobile the h1 "FJORD" drops from 160px to 70px (line height 63px, tracking -2.1px), 150px wide and 84px high; footnote text stays 9px at weight 500 with a 10.8px line height. Other breakpoints and the carousel's mobile behavior were not measured.

## Iteration Guide

1. Build on `#ffffff` and `#f3f3f3` with black text; overlay posters with `#00000033` when placing white type.
2. Set titles in Girott 700 uppercase and labels in Focal.
3. Reuse the 4px, 8px and 10px radii.
4. Space with the page variables (2rem, 7rem, 12rem) and a 1.6rem card gap.
5. Measure any new page before adding tokens: `node web/scripts/extract-tokens.mjs --slug=neon-rated--<page> --url=<url> --force --no-motion`.
