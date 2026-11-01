---
version: alpha
name: Valentino
category: "Luxury"
description: "Valentino homepage measured at www.valentino.com/en-us: a white canvas (#ffffff) with black text (#000000), a Times New Roman display line at 24px, DINPro 12px interface text with 0.5px tracking, square corners, and translucent charcoal (#25252599) overlay buttons on photography."

colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-3: "#f5f5f5"
  ink-3: "#767676"
  ink-4: "#252525"
  ink-5: "#7b7b7b"
  ink-6: "#d8d8dc"
  hairline: "#444446"
  button-secondary-bg: "#25252599"
typography:
  display:
    fontFamily: "\"Times New Roman\""
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: "-0.96px"
  body:
    fontFamily: DINPro
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.284px
    letterSpacing: 0.5px
  nav:
    fontFamily: DINPro
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.998px
    letterSpacing: 1.47px
rounded:
  xs: 4px
  sm: 28px
  md: 90px
  none: 0px
spacing:
  s1: 2px
  s2: 4px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 18px
  s9: 19px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    height: 34px
  nav-link:
    textColor: "{colors.ink-4}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 38px 0px 0px
---

## Overview

The Valentino US homepage is a photographic fashion catalogue set on a white page. The capture opens with a thin black announcement bar ("Interferenze Woman's Collection | Shop Now") with small arrow controls and a close icon, above a header showing the VALENTINO GARAVANI wordmark in a thin serif and a row of uppercase DINPro links (NEW ARRIVALS, ROCKSTUD, WOMEN, MEN, BAGS, GIFTS...). A runway still fills the hero: a model in a wide-brimmed black hat, in a library-like hall, with the campaign title "Antibiblioteca" and two translucent buttons, "Relive the show again" and "Explore the looks", along the bottom edge.

A "Welcome to Valentino" country-selection dialog is open over the hero in the capture, and the area right of the hero is dimmed. A second extraction with stealth enabled still showed it, so it could not be dismissed. Its controls (the black "Change Country" button and the link beneath it) are a geographic notice, not brand UI, and are excluded from the component list. The extractor first picked "Change Country" as primary call to action; that was overridden (see SOURCES.json).

Below the hero, a "HIGHLIGHTS" heading in serif capitals with an italic Women / Men toggle leads to four equal photographic tiles (Shoes, Bags, Jewels, Prêt-à-Porter), each with a centred serif label and a small "Discover More" line over a darkened image. Next, "Valentino Garavani Rockstud Maxxing Bag" in serif with a "Shop Now" link introduces a horizontally scrolling product carousel on near-white cells with a thin progress line beneath it; each cell shows a bag, a "New arrival" tag, a star (wishlist) icon, a two-line name in small DINPro and a price (for example $ 2,950.00). A split block closes the capture: large serif text "Valentino Garavani Rockstud Shoes" beside a close-up photograph of studded heels.

**Voice and art direction.** Microcopy is short and brand-led: collection names ("Antibiblioteca", "Interferenze Woman's Collection"), product-family names (Rockstud), and plain verbs ("Shop Now", "Discover More", "Explore the looks", "Relive the show again"). Imagery mixes a runway still, tight crops of footwear and jewellery, and studio cut-outs of bags on a pale ground; the colour comes from the objects, such as pink tights, a rust leather bag, and red velvet. The grid is regular and the labels sit consistently in the lower third of each tile, so the page feels curated rather than dense. The product strip is the only place where price information appears in the capture, set in the same 12px DINPro as the rest of the interface, which keeps commerce quiet. Serif type is kept for names and statements; sans type is kept for anything the shopper acts on.

**Key Characteristics:**
- Imagery is editorial and saturated (jewel-toned tights, red velvet, library lamps) against a neutral interface.
- Serif for editorial titles, DINPro for everything functional.
- Square corners everywhere in the measured interface; a small shadow appears on two elements.
- Interface colors are black, white and greys. No chromatic accent colour was measured.
- Buttons over photography are translucent charcoal with white text.

## Colors

Values are from `web/data/extracted/valentino.json`.

- **Canvas** (`{colors.canvas}`, #ffffff): the largest opaque background.
- **Ink** (`{colors.ink}`, #000000): 2,043 of the measured characters; titles and body.
- **Primary** (`{colors.primary}`, #000000) with **on-primary** (`{colors.on-primary}`, #ffffff): the black announcement bar and its white text. The brand has no chromatic accent, so black stands as the action color.
- **Overlay button** (`{colors.button-secondary-bg}`, #25252599): fill of the "Discover all bags" style buttons over images, with white text.
- **Greys**: `{colors.ink-3}` #767676 (secondary text), `{colors.ink-5}` #7b7b7b, `{colors.ink-4}` #252525 (navigation links), `{colors.ink-6}` #d8d8dc, `{colors.surface-3}` #f5f5f5 (pale surface), `{colors.hairline}` #444446 (measured border).

## Typography

Two voices. The display line is measured as "Times New Roman" at 24px, weight 400, line-height 28px, letter-spacing -0.96px (`{typography.display}`), used for the product-feature titles; the tile labels and "HIGHLIGHTS" heading also appear in serif in the capture. Everything else is **DINPro** (loaded in weights 400 and 700, plus PFDinTextPro 400): body and button text at 12px, line-height 16.284px, 0.5px tracking (`{typography.body}`) and navigation links at 14px, line-height 18.998px, 1.47px tracking (`{typography.nav}`). By character count, 12px DINPro dominates (2,635 characters), with 20px, 10px, 15px and 56px as occasional sizes. DINPro is a licensed typeface; a neutral DIN-style sans is a substitute, which is a suggestion rather than a measurement.

## Layout

Full-bleed photographic bands alternate with white sections. The highlights are a four-column grid of equal tiles with a narrow gap. The product carousel is a horizontal strip of equal cells with partial cells cropped at both edges and a thin progress line below. Measured spacing values run from 2px to 24px (`{spacing.s1}` 2px to `{spacing.s10}` 24px); the footer padding is 38px 0px 0px. The header sits over the hero in the capture, and the announcement bar is above it.

## Elevation & Depth

Depth is almost entirely tonal. Two elements carry a faint shadow (`rgba(0, 0, 0, 0.24) 0px 1px 2px 0px`), on two small elements. Image tiles appear darkened to hold white labels. The dialog is a flat white panel above a grey scrim.

## Shapes

Interface rectangles are square (`{rounded.none}`, 0px). The measured radii on the page are 4px (`{rounded.xs}`), 28px (`{rounded.sm}`) and 90px (`{rounded.md}`), and were not found on buttons, which measured 0px.

## Components

- **Overlay button**: `{colors.button-secondary-bg}` fill, white DINPro 12px text, 0px radius, 34px high, e.g. "Discover all bags", "Explore the looks".
- **Navigation link**: uppercase DINPro 14px with 1.47px tracking, `{colors.ink-4}` on white and white over imagery.
- **Tile**: photograph with serif label and a small "Discover More" line.
- **Product cell**: near-white cell, bag cut-out, "New arrival" tag, star icon, name and price in 12px DINPro.
- **Footer**: white, padding 38px 0px 0px.

## Design System Architecture

No public Valentino design-system documentation was opened; the web-search budget ran out before any official source could be read, so none is cited. The page itself shows a de-facto system: a serif-for-editorial, DIN-for-function split; a monochrome palette with one translucent charcoal button fill; square geometry; and uniform photographic tiles. Font files are loaded as web fonts (DINPro, PFDinTextPro).

## Do's and Don'ts

**Do**
- Keep the interface monochrome and let photography supply colour.
- Use square corners and 12px DINPro for functional text.
- Place white labels on darkened image areas.
- Set editorial titles in serif.

**Don't**
- Don't add a coloured accent or rounded buttons.
- Don't treat the country dialog or its black button as brand UI.
- Don't set long copy in the serif display style.
- Don't use heavy shadows.

## Responsive Behavior

The extraction also loaded a 390px viewport, but this entry derives no mobile-specific typography or layout tokens from it, so phone-size breakpoints, menu behaviour and column counts are not measured. The two things that can be stated from the desktop measurement are that the highlights are four equal columns, and that the product carousel overflows horizontally with a progress line, which suggests a scroll-driven rather than wrapped layout. Anyone extending this system should measure a phone viewport before specifying mobile behaviour, and should keep the serif and DIN sizes above as the desktop baseline.

No mobile-specific values were derived for this entry, so phone behaviour is not described. On desktop the highlights are a four-up grid and the product strip scrolls horizontally.

## Iteration Guide

1. Start with `{colors.canvas}` and `{colors.ink}`.
2. Use serif 24px/28px for titles and DINPro 12px/0.5px for text.
3. Make overlay buttons `{colors.button-secondary-bg}` with white text, 34px high, square.
4. Keep tiles photographic; add labels in the lower third.
5. Run `node web/scripts/verify-designs.mjs --slug=valentino` after edits.
