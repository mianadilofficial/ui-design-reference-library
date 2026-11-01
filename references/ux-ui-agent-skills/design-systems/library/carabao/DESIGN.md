---
version: alpha
name: Carabao Group
category: "Thai Brands"
description: "Carabao Group (carabaogroup.com), the global corporate site of the Thai energy-drink maker: white page with textured grey bands, Carabao green #009560, red accent #e60501, DB Adman X body at 16px and DBImpactoX 700 display at 44px with 1px tracking, a 60px-radius outlined pill button and a dotted green world map."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#009560"
  surface-grey: "#cccccc"
  blue-light: "#6aaae4"
  ink-black: "#000000"
  ink-muted: "#999999"
  green-news: "#00965f"
  red: "#e60501"
  green-mint: "#00c58e"
typography:
  display:
    fontFamily: DBImpactoX
    fontSize: 44px
    fontWeight: 700
    letterSpacing: 1px
  body:
    fontFamily: "\"DB Adman X\""
    fontSize: 16px
    fontWeight: 400
  nav:
    fontFamily: "\"DB Adman X\""
    fontSize: 20px
    fontWeight: 700
  button:
    fontFamily: Arial
    fontSize: 14px
    fontWeight: 400
rounded:
  xs: 6px
  sm: 25px
  md: 60px
  lg: 100px
  pill: 9999px
spacing:
  s1: 10px
  s2: 12px
  s3: 15px
  s4: 20px
  s5: 25px
  s6: 30px
  s7: 50px
  s8: 100px
components:
  button-outlined:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 30px
    height: 30px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink-black}"
    padding: 15px 0px
    height: 106px
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
  nav-link-hover:
    textColor: "{colors.primary}"
---

## Overview

This file documents the Carabao Group global website at https://www.carabaogroup.com/ (title "Carabao Group | Global Website", `lang` en). The queued address https://www.carabaogroup.com/en rendered a client-side "This page could not be found" screen in the extractor, although the server answered with HTTP 200; the real home page was therefore re-measured at the root address, which renders the full site (3840 visible elements, 2946px page height). The static page declares the description "Carabao: World class product, World class brand - We are committed to developing and improving product quality to meet global standards and customer satisfaction." and a theme color of #009560.

The page is a corporate showcase for an energy-drink company built around three giant visuals. A 106px white header carries the red bull-skull "Carabao" emblem at left with a green round menu button beside it, six labels centred ("About Us", "Brands", "Sustainability", "Investor Relations", "What's New", "Contact Us"), a search icon, and an "EN" language switch with a caret. A hero slider (green arrows at both sides, a pill-shaped scroll indicator below) shows monochrome crowd and stadium photography behind a huge green "CARABAO" logotype with a glass bottle and two cans, the line "WORLD CLASS PRODUCT, WORLD CLASS BRAND" and a short paragraph ending in a green "Read more>>" link.

Next is a map band: a world map drawn from green dots with red location dots, captioned "Carabao Global Map" in green, a huge red "49 Countries", and "all over the world" in widely spaced green letters. A product band follows: a green "CARABAO" wordmark with "ENERGY DRINK" spaced beneath it, "WORLD CLASS PRODUCT", an outlined "Discover More" pill, and a large photograph of a blue Carabao Ginseng can against a faint ring, with "See all our products" and a green chevron. A news band shows one large card ("Carabao Supports Community Spirit at the 2026 Bara Battle in Fiji") and three compact cards with dates and green titles. The footer repeats the green wordmark and the nav labels, shows an "Official Sponsor" badge for the Carabao Cup, and ends with the copyright line "Copyright © 2021 Carabao Group Public Co., Ltd. All rights reserved." and an underlined "Privacy Policy" link. A round green cookie-settings button floats at the left edge of the capture; it is a consent control, not brand UI, and is excluded here.

## Colors

The shell is white and light grey, with one green and one red.

- `{colors.canvas}` #ffffff is the page and the header, news-card and button white. The largest measured background areas are #ffffff (weight 447) and `{colors.surface-grey}` #cccccc (weight 293); the capture also shows light textured grey bands behind the map, product and news sections, which are images or gradients and not in the measured background table.
- `{colors.ink}` #333333 is the body ink (291 characters) and `{colors.ink-black}` #000000 the second text color (257 characters) used for the nav labels and footer text.
- `{colors.primary}` #009560 is Carabao green: the h1 "Carabao Global Map", the "Discover More" label and 1px border, the nav hover color and the largest text-color share (391 characters). It is also the static page's theme color. The generator had assigned #0000ee to primary because the only link it saw was the footer's browser-default link; #0000ee is a browser default, not a brand color, and is dropped.
- `{colors.green-news}` #00965f (26 characters) is a near-identical green measured on text; `{colors.green-mint}` #00c58e is the lighter green measured on an 80px by 76px nav control.
- `{colors.red}` #e60501 is the accent: the "49 Countries" figure (11 characters measured); the capture also shows red location dots on the map.
- `{colors.ink-muted}` #999999 is the date color on news cards (61 characters).
- `{colors.blue-light}` #6aaae4 was measured as a small background area (weight 3; #6699cc also); the element carrying it was not isolated.

The stylesheet declares `--swiper-theme-color` #007aff for the slider arrows; it is a library default and the capture shows the arrows in green, so it is not a brand token.

## Typography

DB Adman X is the working family (loaded at 300, 400 and 700 and covering 983 of the measured characters), with DBImpactoX as the display face (loaded at 400 and 600, covering 55 characters) and Arial for the button label (13 characters, the "Discover More" label). The stylesheet corpus also declares further DB faces (DB Ramintra X and italic variants of DB Adman X). No substitute is measured; a humanist sans for DB Adman X and a condensed bold for DBImpactoX would be an editorial choice, not a measured equivalent.

- `{typography.display}`: DBImpactoX 44px, weight 700, letter spacing 1px; the h1 "Carabao Global Map". The same 1px tracking was measured on sizes of 30px (26 characters), 46px (9) and 100px (2); the 100px size matches the heading "49 Countries" in the band list and the character counts 2 and 9 equal "49" and "Countries".
- `{typography.body}`: DB Adman X 16px, weight 400; the copyright line and card text. Character-weighted sizes are 20px (429 characters), 18px (352), 24px (104), 16px (98), 30px (26), 44px (18), 46px (9) and 14px (13).
- `{typography.nav}`: DB Adman X 20px, weight 700; header and footer labels.
- `{typography.button}`: Arial 14px, weight 400; the outlined pill.

Weights by characters are 400 (871), 700 (152), 100 (19) and 900 (9). Line heights are `normal` in every measured role; letter spacing appears only on the DBImpactoX display sizes.

## Layout

The page is a 1280px frame, 2946px tall. The extraction recorded seven bands: a 201px white band (content x 373 to 1228); several media-filled and #ededed bands of 62px, 108px, 78px and 253px; a 2111px media-filled band (one column, content x 40 to 1215) whose headings include "Carabao Global Map" at 44px and "49 Countries" at 100px; and a 133px white footer band (content x 40 to 1240). The layout probe recorded 8 visible header links on desktop and at most 2 card columns.

Spacing steps are 12px (16 uses), 15px, 50px, 30px, 25px, 10px and 100px; gaps 20px and 25px. The map and the product can are the visual anchors; text blocks are left-aligned beside them. The news area pairs one wide card at left with three compact cards stacked at right.

## Elevation & Depth

Two shadows were measured: `rgba(0,0,0,0.2) 0 4px 8px 0` on 2 elements and `rgb(234,234,234) 0 0 10px 3px` on 1. Elsewhere depth comes from imagery: the glass bottle and cans carry their own reflections and shadows, the Ginseng can floats against a faint ring, and the textured grey bands separate sections. The stylesheet corpus declares additional shadows (`0 8px 16px 0 rgba(0,0,0,.2)`, `0px 2px 10px -3px #999`) that were not measured on visible elements.

## Shapes

Radii are mixed and generous on controls: the "Discover More" pill measures 60px (`{rounded.md}`, 4 elements), 100px (`{rounded.lg}`, 2) and 6px (`{rounded.xs}`, 2) also appear, along with one 25px (`{rounded.sm}`) and one 100% circle. News cards and photographs are rectangular. The map is a grid of round dots.

## Components

- Outlined pill (`{components.button-outlined}`): white fill, `{colors.primary}` Arial 14px label, 1px `{colors.primary}` border, 60px radius, 30px high, 152px wide, padding 0 30px ("Discover More").
- Nav (`{components.nav}`): a 106px white bar with 15px vertical padding; labels in 20px DB Adman X bold in black; on hover each label turns `{colors.primary}` (`{components.nav-link-hover}`).
- Hero slider: monochrome photography behind the green logotype and product images, green chevron arrows at both sides.
- Map block: dotted green world map with red markers and the "Carabao Global Map / 49 Countries" caption.
- Product block: green wordmark, spaced caps "ENERGY DRINK", an outlined pill and a "See all our products" link with a green chevron.
- News cards: white cards with a date in `{colors.ink-muted}` and a green title; one large and three compact.
- Footer: green wordmark, nav links, an official-sponsor badge, copyright and an underlined privacy link.

## Design System Architecture

No public or official Carabao Group design system, brand guideline or press kit was found; the home page https://www.carabaogroup.com/ links none, and its static HTML contains no brand-guideline, press-kit or design-system reference. The de-facto system is a small set of facts: a theme color (#009560), the DB type families, the Swiper slider library (its two root variables, `--swiper-theme-color` #007aff and `--swiper-navigation-size` 44px, are the only root variables) and Material Icons and VideoJS icon fonts in the stylesheet corpus. Colors and sizes are otherwise set directly in component CSS.

## Do's and Don'ts

- Do keep the page white and grey and use Carabao green `{colors.primary}` for headings, links and the outlined button.
- Do use the red `{colors.red}` sparingly, for the single most important figure.
- Do set display lines in DBImpactoX with 1px tracking and body in DB Adman X.
- Do show product photography large and let the cans overlap the text columns.
- Don't use the browser-default blue (#0000ee) for links; use green.
- Don't treat the slider's #007aff as a brand color.
- Don't fill the outlined pill; it is white with a green border.
- Don't treat the cookie-settings button as part of the visual style.

## Responsive Behavior

Measured at the 390px mobile pass. The h1 stays `{typography.display}` at 44px (350px wide), body text is 16px/400 with 10px top padding (350px wide), and the mobile nav is 57px high and 390px wide in 16px/400. The layout probe recorded 1 visible header link on mobile (8 on desktop), no menu toggle, and at most 2 card columns. The mobile band list is a 77px header band, 130px, 74px, 202px and 451px bands, a 2957px media band (one column, content x 20 to 370) and a 162px footer band (content x 20 to 370). Mobile character-weighted sizes are 18px (352), 20px (295), 16px (98), 30px (35), 24px (19), 44px (18) and 14px (13). Breakpoint values and how the nav is reached on mobile are not measured.

## Iteration Guide

1. Build on white with grey textured bands; use `{colors.primary}` green for headings and links.
2. Put a giant green logotype and product shots in the hero, with a short promise line beneath.
3. Add a dotted world-map block with a red figure for reach ("49 Countries").
4. Use `{components.button-outlined}` for "Discover More" and "See all our products" chevron links.
5. Present news as one large card and three compact dated cards.
6. Re-measure heading sizes below the hero before adding tokens for them.
