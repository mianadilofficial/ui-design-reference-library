---
version: alpha
name: Gavin Schneider Productions
category: "Fashion & Apparel"
description: "Gavin Schneider Productions (gsproductions.co.za) is a photography and film portfolio in SuisseMedium 500 at 8.88889px, black #000000 text and grey #979797 labels on a #fbfbfb page, a 28px navigation bar, no radii or shadows and tall full-colour portrait photographs in a narrow column."
colors:
  canvas: "#fbfbfb"
  ink: "#000000"
  primary: "#000000"
  surface-panel: "#f0f0f0"
  ink-muted: "#979797"
  ink-mid: "#686868"
  ink-on-image: "#ffffff"
typography:
  display:
    fontFamily: SuisseMedium, sans-serif
    fontSize: 8.88889px
    fontWeight: 500
    lineHeight: 8.88889px
  display-mobile:
    fontFamily: SuisseMedium, sans-serif
    fontSize: 10px
    fontWeight: 500
    lineHeight: 10px
rounded:
  none: 0px
spacing:
  s1: 3.56px
  s2: 7.11px
  s3: 9.78px
  s4: 51.56px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    padding: 0px 0px 7.11111px
    clipPath: inset(0px)
  nav:
    textColor: "{colors.ink-on-image}"
    padding: 0px 7.11111px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.ink-on-image}"
    typography: "{typography.display}"
  footer:
    textColor: "{colors.ink-muted}"
    padding: 9.77778px 7.11111px
---

## Overview

Gavin Schneider Productions (https://www.gsproductions.co.za/, title "Gavin Schneider Productions") is the portfolio site of a South African production company, measured at 1280px wide with a 17625px scroll height. The home page is an almost text-free photography index: a single 28px top bar, then a long vertical sequence of full-height portrait photographs in a narrow column, each separated by white space on the right where tiny captions appear. The first project in the capture is "9 Images, Client Monsoon, Photographer Luke Kuisis"; imagery shows a woman in a straw hat and terracotta dress pegging out laundry, two children on coastal rocks reflected in a tide pool, children in miniature red vintage sports cars before a timber and stone garage, and a black-and-white portrait of a woman leaning on a wall.

The top bar carries "GSP" at the left, "List" and "Grid" view toggles, the section links Stills, Motion, Culture, Information and Journal across the right half, and a "Mountain Warehouse" entry is read in the DOM text. A "0%" scroll indicator sits at the right edge mid-page (the `--scroll-progress` variable is published as 0%). The interface is as quiet as possible: very small type, no buttons, no colour, nothing between the viewer and the imagery. The footer reads "© 2026 Gavin Schneider Productions" followed by "Priva...".

## Colors

The palette is greyscale. `{colors.canvas}` (#fbfbfb) is the page background (10240 area weight); `{colors.surface-panel}` (#f0f0f0, 4824) is a slightly darker image placeholder or panel tone. Text: `{colors.ink}` (#000000, 924 characters) for active items and project values, `{colors.ink-muted}` (#979797, 698) for inactive navigation and labels such as "Grid", "Motion", "Client" and "Photographer", and `{colors.ink-mid}` (#686868, 70). White (#ffffff, 23 characters) is measured on the navigation text over the first image. The only border colour is #000000 (one element). Because there is no CTA, `{colors.primary}` is simply the same black as ink; no accent colour is present. Colour comes entirely from the photographs.

## Typography

SuisseMedium (a Suisse-style grotesque shipped as a single file at weight 500) is the only family, covering all 1715 measured characters: 1557 at weight 500 and 158 at weight 400. Everything is tiny: 8.88889px (1697 characters, navigation and captions) with line-height equal to the font size, and 7.11111px (18 characters, tertiary labels). Letter-spacing and text transform were not set. On the 390px pass the base becomes 10px/10px, with a few 12px (72) and 48px (74) glyphs. A fluid scale driven by a variable `--gfs` (published as 390) explains the unusual fractional sizes: the type grows with the viewport. SuisseMedium is licensed; Suisse Int'l or a plain neutral grotesque (the declared fallback is generic sans-serif) is the closest substitute.

## Layout

Navigation height is 28px (`--nav-height`, `--nav-offset`), with 0px 7.11111px horizontal padding. The spacing scale is built on 7.11111px (gap 306 times) and 3.55556px (22), plus 9.77778px footer padding and a 51.5556px padding. The first project row spans 585px of height in the DOM and puts its metadata in a wide row: left cell "9 Images", centre-left the image, then "Client Monsoon" and "Photographer Luke Kuisis" at the right, all aligned to the vertical middle of the image. The image sits in a narrow column with the rest of the row left empty for captions.

## Imagery and Art Direction

The photographs are commercial fashion and lifestyle stills for named clients, in a natural-light, sun-bleached look: late-afternoon warmth on timber and stone, blue sky behind figures, clear shadows, and one black-and-white portrait in the sequence. Subjects are posed with a loose, candid attitude (a model mid-movement with washing on a line, children playing on rocks) rather than studio-product framing. Each image is shown uncropped and at full column height, so the sequence reads like a contact sheet scrolled slowly. Credits are structured as label/value pairs and the count of images in each project ("9 Images") leads the row, which suits a working production portfolio where clients and photographers need to be named.

## Navigation and Content Structure

The site's information architecture is read directly from the top bar. Stills, Motion, Culture, Information and Journal split the work by medium and purpose: still photography, moving image, culture-led projects, practical company information and a journal. The List and Grid toggle indicates two ways of browsing the same work, and the capture shows the List view active (black "List", grey "Grid"). The same active/inactive logic applies to the section links, where "Stills" is black and the others are grey. A document measured at 17625px tall for nine images in the first project alone shows that the page is a long continuous scroll; the percentage readout at the right edge tracks progress through it. There is no hero statement, no tagline and no call-to-action.

## Elevation & Depth

No box shadows, overlays or gradients were measured. The page is flat. Hierarchy comes from the greyscale of the small text, from scale (a large image against 8.88889px text) and from large empty margins.

## Shapes

Every measured element reports a 0px border-radius, so `{rounded.none}` is the only shape token. Photographs are hard-edged rectangles with no frames. The only borders are a black one on one element.

## Components

- Top bar: 28px high, "GSP" wordmark left, then List / Grid view toggle and the section links Stills, Motion, Culture, Information and Journal; active item black, inactive items #979797.
- Project row: a metadata row with an image count ("9 Images"), the image set, and Client / Photographer credit pairs where the label is grey and the value black.
- Scroll progress readout: a "0%" marker at the right edge.
- Footer: 28px, #979797 text at 8.88889px, 9.77778px 7.11111px padding, copyright and policy links.

## Design System Architecture

No public design system, brand guideline or press page exists for this portfolio, and none was linked on the opened home page. The de-facto system is minimal: four root variables, `--nav-height` (28px), `--nav-offset` (28px), `--scroll-progress` and `--gfs` (390), define the shell, and every other value is a direct style. Tokens in this file are therefore the measured literal values.

## Do's and Don'ts

- Do let photographs carry colour and keep every interface element in black or grey.
- Do set captions at 8.88889px in SuisseMedium with grey labels and black values.
- Do keep a single narrow image column with a lot of empty page around it.
- Do show credits as label/value pairs ("Client", "Photographer").
- Don't introduce an accent colour, buttons, shadows or rounded corners; none were measured.
- Don't make the type larger than the measured scale in navigation or captions.

## Responsive Behavior

At 390px the navigation measured 40px high on `#fbfbfb` with black text at 10px/10px; the first heading-like item "Clients" was 10px/10px at weight 500. Sizes by characters on mobile: 10px (1461), 48px (74), 12px (72). Image column width, the List/Grid behaviour and the stacking of metadata on mobile were not measured.

## Iteration Guide

1. Start with a #fbfbfb page, black text and SuisseMedium 500 at 8.88889px.
2. Add photographs in one tall column; keep margins large.
3. Use #979797 for inactive and label text, #000000 for active and values.
4. Keep the bar at 28px with 7.11111px spacing units.
5. Hover, focus and transition behaviour were not measured; verify before adding them.
