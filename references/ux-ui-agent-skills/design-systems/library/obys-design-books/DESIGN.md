---
version: alpha
name: "Obys' Design Books"
category: "Culture & Events"
description: "Obys' Design Books (library.obys.agency) measured live: near-black #0e0e0e canvas, a grey #7c7c7c paper panel with white KHTeka bold type at 70px/70px, a #d25933 orange quote panel, a #f5f5f5 ruler column, 10px and pill radii and tight negative tracking."
colors:
  canvas: "#0e0e0e"
  page-largest: "#7c7c7c"
  ink: "#ffffff"
  primary: "#ffffff"
  surface-paper: "#f5f5f5"
  accent-orange: "#d25933"
  ink-on-paper: "#262626"
  ink-light: "#e5e5e5"
typography:
  display:
    fontFamily: KHTeka, Roboto, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 25.76px
    letterSpacing: "-0.98px"
  display-mobile:
    fontFamily: KHTeka, Roboto, sans-serif
    fontSize: 46.8px
    fontWeight: 700
    lineHeight: 39.312px
    letterSpacing: "-2.34px"
  heading:
    fontFamily: KHTeka, Roboto, sans-serif
    fontSize: 70px
    fontWeight: 700
    lineHeight: 70px
    letterSpacing: "-2.1px"
  body:
    fontFamily: KHTeka, Roboto, sans-serif
    fontSize: 13px
    fontWeight: 700
    lineHeight: 13px
    letterSpacing: "-0.286px"
rounded:
  xs: 10px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 10px
  s7: 12px
  s8: 13px
  s9: 14px
  s10: 15px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.ink}"
    padding: 0px 20px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  text-input:
    textColor: "{colors.ink-on-paper}"
    typography: "{typography.body}"
    padding: 4px 0px 0px
    height: 20px
  footer:
    textColor: "{colors.ink-light}"
    padding: 0px 16px 20px
---

# Obys' Design Books

## Overview

The measured page is https://library.obys.agency/ (title "ODB | Obys’ Design Books"), a site by Obys Agency curating design books, 890 visible elements. The capture is a tactile, collage-like composition on a near-black field: a stack of paper-like panels that overlap each other, drawn with grain texture. The central panel is mid-grey with a window title bar ("About", "Obys Agency", "©2025") and white text: a large statement "Obys’ Design Books — a personal selection of titles that show design in ways the screen never could. These books inspire, educate, and support the creators who dedicate themselves to design." A halftone image of flowers and a grid of pale rectangular labels sit under it; below come "Contacts: des@obys.agency" and "Social: Instagram, Linkedin" in large underlined text.

Further down an orange-red panel titled "Quotes: (3)" holds three quotations in small type with a black binder clip at its edge; to the right a very large white "Featured Books" heading introduces a numbered list of eight titles with author and year in small text (Graphic Design Manual, The Vignelli Canon, Interaction of Color, and so on), each row separated by a hairline. A white vertical ruler with numbers 1 to 16 runs down the left side, a salmon strip with black punched circles (like a punch card) shows at the right, a thumbnail rail at the far left previews other pages, and a minimal top bar shows "About, Books, Credits, Contacts" and "Menu". The lower page continues with "Featured Authors (6)".

The tone is calm and reverent toward modernist designers; the opened page text calls the project "a library for designers" and lists quotations from Emil Ruder, Josef Müller-Brockmann and David Airey. There are no button calls to action; the actions are the nav links and the list rows.

## Colors

Background area: `#7c7c7c` (2940), `#f5f5f5` (1622), `#d25933` (302), `#383838` (89), `#262626` (22), `#f2f2f2` (2), `#80361f` (1). Text by characters: `#262626` (1751), `#ffffff` (1555), `#e5e5e5` (131).

- `canvas` #0e0e0e: the page field behind the stacked panels (the viewer sees it as the black surround).
- `page-largest` #7c7c7c: the large grey panel that holds most of the content.
- `ink` / `primary` #ffffff: white type on grey, black and orange panels.
- `surface-paper` #f5f5f5: the pale ruler column and light paper.
- `accent-orange` #d25933: the orange-red quote panel and the salmon punch-card strip (a darker `#80361f` appears once).
- `ink-on-paper` #262626: dark text on the light paper areas and in inputs.
- `ink-light` #e5e5e5: light footer text.

Colors are few and flat; grain and halftone texture come from imagery, not from tokens.

## Typography

A single family, KHTeka (loaded in weight 700 only), is used for all 3437 measured characters, in bold throughout. Sizes: 13px (2117 characters), 28px (1231) and 70px (89).

- `display` KHTeka 28px / 25.76px, weight 700, letter-spacing -0.98px: the h1 statement; at 390px the h1 "Books We Recommend" measured 46.8px / 39.312px with -2.34px tracking (`display-mobile`).
- `heading` 70px / 70px, weight 700, letter-spacing -2.1px: h2 "Featured Books" (46.8px / 46.8px at 390px).
- `body` 13px / 13px, weight 700, letter-spacing -0.286px: small text, labels, author lines and nav.

Line height equals or is smaller than the font size at every level (28px on 25.76px, 13px on 13px), so lines are set solid and tight, and tracking is negative at roughly -3.5% to -2.2% of size. The fallback stack is `KHTeka, Roboto, sans-serif`.

## Layout

The root declares a single variable, `--header: 4rem`. The layout is a layered stack: a full-width black field, a centred 'page' of grey paper, secondary pages peeking out behind it at the left and right, and a fixed ruler column with numbers. Measured paddings: 16px (81 uses), 5px (55), 4px (39), 10px (35), 20px (14), 13px (6) and 6px (4). The nav has `0px 20px` padding and the footer `0px 16px 20px`. Lists use rows divided by hairlines with a right-aligned index number.

## Elevation & Depth

The only shadow measured is a soft one, `rgba(0, 0, 0, 0.2) 0px 4px 10px 0px` (preceded by two fully transparent layers), on four elements. Depth is otherwise created by overlapping panels, a binder clip graphic, and a paper grain texture. The stack order of the panels, not shadow, implies layering.

## Shapes

Measured radii: 9999px (12 elements, pills), 50% (2, circles such as the punched holes and round controls), 10px (1) and 10px on one side pairs (`10px 0px 0px 10px`, `0px 10px 10px 0px`). Panels are mostly square-cornered; tokens are `xs` 10px and `pill` 9999px.

## Components

- **window bar**: a thin bar at the top of the grey panel with two dots at the left and the labels "About", "Obys Agency" and "©2025", mimicking a desktop window.
- **nav / nav-link**: white 13px bold labels centered at the top ("About, Books, Credits, Contacts") with an underline on the active one, and "Menu" at the right.
- **list row**: 28px bold title, 13px author and year, and a right-aligned number, divided by a hairline.
- **quote panel**: orange background with dark red small text and a title row "Quotes: (3)".
- **text-input**: 20px high, 13px bold text in #262626, padding 4px 0px 0px.
- **footer**: text #e5e5e5 with `0px 16px 20px` padding.

No filled buttons were measured.

## Design System Architecture

No public brand guideline or design system link appears on https://library.obys.agency/. The de-facto system is minimal: one root variable (`--header: 4rem`), one proprietary typeface in one weight, and four flat colors. The site belongs to Obys Agency (see its own portfolio, queued separately as obys-2). Measurements are recorded in `web/data/extracted/obys-design-books.json`.

## Do's and Don'ts

- Do set everything in KHTeka bold with negative letter-spacing.
- Do use grey #7c7c7c as the paper field, the orange #d25933 for the single feature panel and near-black #0e0e0e as the surround.
- Do number lists and pair titles with author and year in the small size.
- Don't add weights other than 700.
- Don't use heavy shadows; the single measured one is a 4px/10px at 20% black.
- Don't add buttons; navigation and rows are text.

## Responsive Behavior

The 390px pass measured the h1 at 46.8px / 39.312px with -2.34px tracking, the h2 at 46.8px / 46.8px, and the h1 text box 340px wide. The layout changes, the ruler column and the panel stack at that width are not measured.

## Iteration Guide

1. Near-black field, grey paper panel, white bold text.
2. One orange panel per page for quotations.
3. KHTeka 700 only; sizes 13px, 28px, 70px with negative tracking.
4. Hairline-separated numbered rows.
5. Gate: `node web/scripts/verify-designs.mjs --slug=obys-design-books`.

### Content and imagery notes

Imagery is processed: a halftone (dithered dot) image of flowers on the grey panel, a grain texture across panels, and small thumbnail pages of the site in the left rail. Rectangular pale grey blocks tile in a three-column grid below the halftone, acting as placeholders for book covers in the capture. The printed-matter metaphor is carried by details such as the binder clip, the punch-card strip with round black holes, a ruler with numbers, and a window title bar with two dots. Each book is written as "Title (Author, Year)". The opened text lists the printhouses strip: Prestel, Thames & Hudson, Phaidon, Unit Editions, Niggli and Taschen.

The measured page contains eight featured books and six featured authors in the opened page text, and the numbered ruler on the left runs to at least 16 in the capture, so numbering is a structural motif repeated by the list indices, the section counters "(3)" and "(6)" and the ruler. Counters in parentheses follow every section title, for example "Quotes: (3)" and "Featured Authors (6)".
