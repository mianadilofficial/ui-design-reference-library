---
version: alpha
name: Dropbox Brand Guidelines
category: "Agencies & Studios"
description: "Dropbox Brand Guidelines (brand.dropbox.com): a white page with a #0061fe blue 36px bold headline in the Dbsharpgroteskvariable Vf variable face, #736c64 body copy in Atlas Grotesk Web 14px/22px, and a stack of full-bleed colour tiles (yellow #fad24b, cyan #3dd3ee, tangerine #ff8c19, navy #283750, lilac #c8aff0) with 8px corners that turn #1a1918 on hover."
colors:
  canvas: "#ffffff"
  ink: "#736c64"
  ink-strong: "#1e1919"
  primary: "#0061fe"
  tile-yellow: "#fad24b"
  tile-plum: "#892055"
  tile-cyan: "#3dd3ee"
  tile-tangerine: "#ff8c19"
  tile-navy: "#283750"
  tile-lilac: "#c8aff0"
  tile-red: "#fa551e"
  tile-hover: "#1a1918"
  on-yellow: "#684505"
  on-cyan: "#055463"
  on-red: "#4e0119"
  on-orange: "#6d2e09"
  on-purple: "#682760"
  on-green: "#175641"
  ink-link-light: "#5f9dff"
  ink-link-mid: "#3080ff"
  nav-text: "#b4c8e1"
  nav-tile-bg: "#283750"
  identity-pink: "#ffafa5"
typography:
  display:
    fontFamily: "\"Dbsharpgroteskvariable Vf\""
    fontSize: 36px
    fontWeight: 700
    lineHeight: 43.2px
    letterSpacing: "-0.72px"
  display-mobile:
    fontFamily: "\"Dbsharpgroteskvariable Vf\""
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28.8px
    letterSpacing: "-0.48px"
  quote:
    fontFamily: "\"Dbsharpgroteskvariable Vf\""
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
    letterSpacing: "-0.6px"
  body:
    fontFamily: "\"Atlasgrotesk Web\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
  tile-label:
    fontFamily: "\"Dbsharpgroteskvariable Vf\", Arial, sans-serif"
    fontSize: 29.2px
    fontWeight: 500
    lineHeight: 23.36px
    letterSpacing: "-0.584px"
rounded:
  xs: 8px
spacing:
  s1: 6px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 18px
  s8: 22px
  s9: 23px
  s10: 24px
components:
  nav:
    textColor: "{colors.nav-text}"
  tile:
    backgroundColor: "{colors.nav-tile-bg}"
    textColor: "{colors.nav-text}"
    typography: "{typography.tile-label}"
    rounded: "{rounded.xs}"
    padding: 23px
  tile-hover:
    backgroundColor: "{colors.tile-hover}"
    textColor: "{colors.canvas}"
  card:
    backgroundColor: "{colors.nav-tile-bg}"
    textColor: "{colors.nav-text}"
    rounded: "{rounded.xs}"
    padding: 23px
---

## Overview

brand.dropbox.com is the Dropbox Brand Guidelines home page (title "Dropbox Brand Guidelines"). Its meta description says the guidelines "help us infuse everything we make with identity. From icons to illustration, logos to language, this collection is the foundation for how Dropbox looks, feels, and sounds like Dropbox." It is a different site from www.dropbox.com: there is no product navigation and no button, only a headline, a quotation, and a set of large colour tiles that link to the guideline chapters Framework, Voice & Tone, Logo, Typography, Iconography, Color, Imagery and Motion.

The capture shows a very white page. A blue (#0061fe) four-line headline, "At Dropbox, our Brand Guidelines help us infuse everything we make with identity.", sits upper left above the blue Dropbox logo mark; a lilac tile titled "Motion" with a plum curve diagram enters from the right edge. The rest of the capture is empty white because the tile section is animated and was only partly rendered when the screenshot was taken. A cookie control at the page edge is not brand UI.

Page copy is written in a warm, direct voice. An epigraph reads "The details are not the details. They make the design." (Charles Eames); the intro continues "All of this information is a toolkit. Go use it to make things. Really cool, well-designed things. Then share them with us, and the world."

## Colors

White #ffffff is the canvas (1515 area units, the largest). The brand blue `primary` #0061fe is the h1 colour and the site's accent (`--accent--ui-accent` and `--accent--tab`). `ink-strong` #1e1919 colours the quotation mark and `--text--text-light`; running copy is `ink` #736c64 (`--text--text-subtle-light`, 373 characters, the most-read colour). Annotation blues #5f9dff and #3080ff are measured text colours (35 and 12 characters); `--annotation--hairline` is #c5dbff.

The chapter tiles use Dropbox's "identity" colours as large fields, measured by area: yellow #fad24b (575), plum #892055 (575), cyan #3dd3ee (572), tangerine #ff8c19 (572), navy #283750 (411), lilac #c8aff0 (411) and orange-red #fa551e (316). Each field has a darker on-colour for its text, all declared as `--color--identity--on-*`: on-yellow #684505, on-cyan #055463, on-red #4e0119, on-orange #6d2e09, on-purple #682760, on-green #175641 and on-blue #283750. The measured navigation tile text is the light blue #b4c8e1 on #283750; the Imagery tile pairs #ffafa5 pink text with the #892055 field.

On hover a tile flips to a near-black #1a1918 fill with white text and a white border (recorded for the Logo and Imagery tiles).

## Typography

Two families only. Dbsharpgroteskvariable Vf, a variable face with a 250 to 900 weight axis loaded from the site, sets all display text: the h1 at 36px, weight 700, line-height 43.2px, letter-spacing -0.72px; the quotation mark at 30px/36px weight 700 with -0.6px; and the chapter tile labels at 29.2px, weight 500, line-height 23.36px, letter-spacing -0.584px. Atlasgrotesk Web sets body copy at 14px, weight 400, line-height 22px (467 characters).

Frequency by characters: 14px (430), 36px (81), 29.2px (64), 30px (56), 12px (37). Weights: 400 (430), 700 (137), 500 (101). Tracking is always negative on display sizes (-0.02em), which gives the tight, heavy headline look in the capture. Noto Sans Mono 400 and 500 are also loaded, but no measured element used them.

Sharp Grotesk and Atlas Grotesk are Dropbox's licensed faces. For a substitute, keep the weights and negative tracking measured here and use a bold grotesque for display and a neutral grotesque for body; the exact substitute is not measured.

## Layout

Scroll height is 2400px at 1280px width. The stylesheet defines `--body-margin-real: 120px`, `--opening-margin: 120px` and `--body-gutter: 24px`. In the capture the headline column begins about at the left margin with the h1 456px wide, and the chapter tiles are large rectangles: the Framework tile measures 472px wide and 870px tall, the Logo tile 870px tall and the Imagery tile 670px tall, with 23px padding inside (16 elements) and 16px gaps between items.

Spacing scale from measurements: paddings 23px (16 uses), 22px (3), 18px (2), 24px (2), 8px, 10px and 14px; gaps 16px (16), 6px (6), 32px (4), 24px and 12px. The tile transition is declared as `--tile-transition: 0.35s cubic-bezier(.4,0,.2,1)`.

## Elevation & Depth

Depth is flat. No box shadow was recorded on any element and hover states report `boxShadow: none`. Hierarchy comes from the scale of coloured tiles: a tile is a flat field of colour, and hover swaps it to #1a1918. The stylesheet declares shared Dropbox focus-ring and "raised" box-shadow variables (`--dig-utilities__boxshadow__focus-ring`, `--dig-utilities__boxshadow__raised`), but whether any measured element uses them was not recorded.

## Shapes

Corners are mostly square, with an 8px radius applied to selected corners of a tile rather than all four. Measured radii: `0px 0px 0px 8px` (3 elements), `0px 0px 8px` (3), `8px 0px 0px` (1), `0px 8px 0px 0px` (1). That corner-by-corner rounding gives the tile mosaic an interlocking edge. The stylesheet corpus also lists 2px, 3px, 4px, 10px, 12px, 20px and 100px radii from shared Dropbox styles; those were not matched to elements on this page. No border colours were measured at rest.

## Components

**Chapter tile** (`tile`): a large link block with a full-bleed identity colour, 29.2px weight-500 label with -0.584px tracking, padding 23px, 8px rounding on one corner. The measured navigation tile is #283750 with #b4c8e1 text. Hover: #1a1918 fill, white text, white border.

**Headline**: blue #0061fe, 36px bold, -0.72px tracking, set in a 456px column.

**Quotation block**: a 30px bold opening quote mark in #1e1919 followed by the epigraph and attribution in body copy.

**Brand mark**: the blue Dropbox logo sits below the headline in the capture.

**Partner links**: "Brand Partner Toolkit", "Legal Branding Resources", "Dropbox Design", "Dropbox Brand Studio", "Daybreak Studio" and "Partner Info" appear as text links in the page source; their styling was not measured.

There are no buttons, inputs or cards with measured shadows on this page.

## Design System Architecture

The site is the public brand reference itself, at https://brand.dropbox.com/. It was opened and its chapters are Framework, Voice & Tone, Logo, Typography, Iconography, Color, Imagery and Motion. Chapter sub-pages were not read, so no rule from them is stated here. The product-side component system (DIG, "dig-*" and "dwg-*" variables) is shared: this page's `--dig-utilities__boxshadow__*` variables and the dig-18037j30 font face show it reuses Dropbox's design-system CSS, and the www.dropbox.com page loads the same families of stylesheet from cfl.dropboxstatic.com.

Page-specific custom properties use a double-dash naming scheme: `--color--identity--yellow`, `--color--identity--on-yellow`, `--color--accent--plum`, `--color--accent--cloud`, `--text--base` (#1a1918), `--text--text-light`, `--text--text-subtle-light`, `--text--text-subtle-dark` (#bbb5ae) and `--accent--ui-accent`. The webflow-icons font in the @font-face list indicates a Webflow-built page.

## Do's and Don'ts

Do set large display text in the variable grotesk at weight 700 with negative tracking, and body at 14px/22px in Atlas Grotesk. Do pair every identity colour field with its declared on-colour (yellow with #684505, cyan with #055463). Do use #0061fe for the headline and accent only. Do give tiles a hover flip to #1a1918.

Don't add buttons or shadows; none exist on this page. Don't use the same tile colour next to a mismatched text colour, such as white on yellow. Don't document the cookie control as part of the design. Don't assume the empty white lower part of the capture is a design choice: it is an unfinished animated render.

## Responsive Behavior

Measured at 390px: the h1 is 24px with 28.8px line-height and -0.48px tracking (36px desktop); the tile label is 20px with 16px line-height and -0.4px tracking (29.2px desktop); body copy stays 14px. Mobile size frequency: 14px (430), 24px (137), 20px (64), 10px (35), 16px (2). How the tile mosaic is arranged on mobile is not measured, and no breakpoints were recorded.

## Iteration Guide

Start with canvas #ffffff, ink #736c64, primary #0061fe. Write one blue 36px/700 headline in the variable grotesk with -0.72px tracking, then body at 14px/22px. For chapter blocks use the identity colours with their on-colours and an 8px corner on one corner, with a 23px inner padding, and add the #1a1918 hover. Keep the page free of buttons and shadows, and check any new colour against the declared identity and accent variables before adding it.
