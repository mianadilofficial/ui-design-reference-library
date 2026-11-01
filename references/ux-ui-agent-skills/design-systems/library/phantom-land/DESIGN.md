---
version: alpha
name: Phantom Studios
category: "Agencies & Studios"
description: "Phantom Studios (phantom.land), a technology-led creative agency in London and Auckland: pure #000000 canvas with #ffffff text, Helvetica Now 500 to 700 with ballinger-mono 10.88px uppercase captions, 28px section titles, 48px pill buttons and 40px tag chips, no shadows."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#000000"
  ink-faint: "#ffffff4d"
  ink-muted: "#ffffff66"
  hairline: "#ffffff33"
  primary-hover: "#ffffff88"
typography:
  display:
    fontFamily: "\"Helvetica Now\", sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: ballinger-mono, sans-serif
    fontSize: 10.88px
    fontWeight: 400
    lineHeight: 11.968px
    textTransform: uppercase
  button:
    fontFamily: "\"Helvetica Now\", sans-serif"
    fontSize: 17.92px
    fontWeight: 500
    lineHeight: 25.088px
    textTransform: capitalize
  nav:
    fontFamily: "\"Helvetica Now\", sans-serif"
    fontSize: 16px
    fontWeight: 500
rounded:
  xs: 40px
  sm: 48px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 9px
  s6: 10px
  s7: 16px
  s8: 21px
  s9: 23px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 16px 23px
    height: 57px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 16px 21px
    height: 57px
  nav:
    textColor: "{colors.ink}"
    padding: 24px 24px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
---

## Overview

Phantom's site at https://www.phantom.land/ (title "Phantom Studios — Technology Creative Agency — London and Auckland") presents a technology-led creative agency through its work. The measured page is the "All projects" view: a black canvas filled edge to edge with a two-column grid of project tiles, each separated by hairline rules. The measurement reports "92 projects" and an inner scroller of 5919px inside a 2400px viewport page, so the grid scrolls inside the page rather than the page itself. The top left holds a small white ghost-shaped logo; the top centre carries "SOUND [OFF]" and a short uppercase mono statement ("PHANTOM IS A TECHNOLOGY-LED CREATIVE AGENCY CRAFTING EXPERIENCES FOR GLOBAL BRANDS"), plus a location and time stamp (Auckland, NZ); at top right is a white pill "Let's Talk".

Each tile follows the same pattern: client name at the top left (Google, Diageo, Casamigos), a project title in mono capitals at the top right (AI QUESTS, THE AMIGOS BOTTLE, #I AM REMARKABLE, 10 WEEKS OF MAGIC, FOLLOW YOUR FLAVOUR), a square artwork thumbnail centred in the tile, a row of dark rounded tag chips at the lower left (COMMUNICATION, ILLUSTRATION, CAMPAIGN, EXPERIENCE, WEBSITE, 3D, PHYSICAL, EVENT, BRAND, CONTENT) and the year at the lower right (2025, 2018). A floating dark segmented control at the bottom centre switches Work, About and Careers, and a grey "Filter" pill floats at the bottom right with a grid and list view toggle at the bottom left. The interface is a strict, monochrome frame around saturated, colourful work.

## Colors

The interface has no chromatic colour. `canvas` is `#000000` (11264 area weight, essentially the whole page), `ink` and `primary` are `#ffffff`, and `on-primary` is `#000000` for the text inside white buttons. White is also used at reduced opacity: `ink-muted` `#ffffff66` (the grey "92 projects" count), `ink-faint` `#ffffff4d`, `hairline` `#ffffff33` (the 1px rules that form the tile grid, 11 elements) and `primary-hover` `#ffffff88` (the Filter pill fill and the hover fill of the white button). The site's own CSS exposes only two variables, `--color-primary: #000` and `--color-secondary: #fff`, confirming the black and white scheme. Every other colour on screen comes from client artwork.

## Typography

Two families are measured: Helvetica Now (400, 500 and 700 loaded) for display, buttons and navigation, and ballinger-mono (400) for captions. The `display` role is 28px/24px at 700 (the "All projects" title and the muted count); `button` is 17.92px/25.088px at 500 with capitalised text ("Let's Talk", "Filter"); `nav` is 16px at 500 (Work, About, Careers); `body` is ballinger-mono at 10.88px/11.968px, uppercase, used for the statement, tile titles, tags and years. By character count, 16px (1636) and 12px (724) are the working sizes, with 10.88px (139), 28px (23), 17.92px (16) and 15.36px (16). Helvetica Now and Ballinger Mono are commercial typefaces; the declared fallback is generic sans-serif.

On the 390px mobile pass the title stays 28px/24px at 700 and body text 10.88px; line height is tight (below the font size at 28px).

## Layout

A two-column grid of square-ish tiles, each tile bordered by 1px `#ffffff33` rules, with a very narrow outer margin. Tile content is laid out in a fixed pattern: client name and title on one top row, a centred artwork square, tags and year on a bottom row. The nav row sits at 24px padding from the top and sides (nav padding `24px 24px 0px`). Floating controls are pinned at the bottom of the viewport: a segmented menu centred, a Filter pill on the right and a view toggle on the left. Spacing steps measured: 3, 4, 5, 8, 9, 10, 16, 21, 23 and 24px.

## Elevation & Depth

No box shadows were measured. Depth comes from the black ground, translucent grey fills (white at 53 percent for the Filter pill, a darker translucent grey for the segmented bar and tag chips) and the strong colour of thumbnails. In the capture, a soft gradient fade sits behind the header strip so tile content blurs out beneath the top statement; this is a blur and not a measured shadow.

## Shapes

Only two radii are measured, both large: 40px (3 elements, the tag chips and the segmented control) and 48px (3 elements, the "Let's Talk" and "Filter" buttons). Thumbnails and tiles are sharp-cornered squares and rectangles, and the grid rules are straight hairlines. Controls are pills; content is square.

## Components

**Primary button ("Let's Talk").** White `#ffffff` fill, black 17.92px weight-500 capitalised text, 48px radius, padding 16px 23px, height 57px; on hover the fill drops to `#ffffff88`.

**Filter button.** `#ffffff88` fill, black text, 48px radius, padding 16px 21px, 57px tall.

**Tag chips.** Dark translucent pills (40px radius) with white ballinger-mono 10.88px uppercase text.

**Segmented navigation.** A dark pill bar with Work, About and Careers in Helvetica Now 16px weight 500; the active item sits in a white pill with black text.

**Project tile.** A hairline-bordered cell: client label, mono title, thumbnail, tag chips, year.

**Top bar.** Logo, "SOUND [OFF]" toggle, mono statement and location clock, and the primary button.

## Design System Architecture

No public Phantom design-system or brand-guideline page was opened for this document, so there is no official token source to cite. The de-facto system is minimal: the shipped CSS declares two custom properties on the root, `--color-primary: #000` and `--color-secondary: #fff`, with everything else set directly on components. Two typefaces (Helvetica Now for UI, ballinger-mono for metadata) and two radii (40px and 48px) make up the whole shape and type vocabulary, and the grid is formed by 1px `#ffffff33` borders.

## Content and Voice

The copy is terse and lower-key. Interface labels are one or two words (Work, About, Careers, Filter, Let's Talk, All projects), the project count is stated plainly ("92 projects"), and project titles are short phrases set in capitals such as AI QUESTS, THE AMIGOS BOTTLE, FOLLOW YOUR FLAVOUR and 10 WEEKS OF MAGIC. Tags describe the kind of work rather than selling it: COMMUNICATION, ILLUSTRATION, CAMPAIGN, EXPERIENCE, WEBSITE, 3D, PHYSICAL, EVENT, BRAND and CONTENT. Years (2025, 2018) close each tile, so the grid reads like a dated index. The artwork ranges from a red mirror-ball render, a phone and earbuds product shot on a pale ground, a purple cartoon character in a forest, a tequila bottle on turquoise and sky-blue backgrounds, to a navy and gold typographic poster and a row of coloured doors. None of this imagery carries interface colour into the frame.

## Do's and Don'ts

- Do keep the interface strictly black and white and let client work supply colour.
- Do set metadata in ballinger-mono at 10.88px uppercase and everything else in Helvetica Now.
- Do use white pill buttons (48px radius, 57px tall) and dark pill chips (40px radius).
- Do divide the grid with 1px `#ffffff33` hairlines.
- Do write labels as short capitalised words: Work, About, Careers, Filter, Let's Talk.
- Don't add colour fills, gradients or drop shadows to interface elements.
- Don't round thumbnails or tiles.
- Don't set body text in anything but the mono caption style on tiles.

## Responsive Behavior

The 390px mobile pass recorded only type: the h1 is 28px/24px at weight 700 and body text and the primary button text are both 10.88px/11.968px at weight 400. Grid column count, navigation and floating-control behaviour at mobile width are not measured.

## Iteration Guide

1. Start with `canvas` `#000000` and `ink` `#ffffff`.
2. Build a two-column grid with 1px `#ffffff33` rules and a centred square artwork per tile.
3. Put client name and project title in a top row, tags and year in a bottom row, using 10.88px mono uppercase.
4. Use white 48px-radius pills for the main action and a dark pill bar for navigation.
5. Let hover lower the white fill to `#ffffff88`.
6. Verify with `node web/scripts/verify-designs.mjs --slug=phantom-land`.
