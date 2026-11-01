---
version: alpha
name: "Polestar"
category: "Automotive"
description: "Polestar (polestar.com/global) is an electric-car site: white #ffffff canvas with #f0f0f0 panels, black text, Polestar Unica at weight 400 with tight negative tracking (-1.2px at 30px), square outlined buttons and photography-only color."
colors:
  canvas: "#ffffff"
  page-largest: "#f0f0f0"
  ink: "#000000"
  primary: "#ffffff"
  ink-muted: "#00000099"
  ink-on-image: "#ffffff99"
typography:
  display:
    fontFamily: "\"Polestar Unica\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 30px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: "-1.2px"
  body:
    fontFamily: "\"Polestar Unica\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: "-0.3px"
  statement:
    fontFamily: "\"Polestar Unica\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 110px
    fontWeight: 400
    letterSpacing: "-4.95px"
rounded:
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 8px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 40px
  s8: 48px
  s9: 80px
  s10: 112px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    padding: 0px 32px 0px 16px
    boxShadow: rgb(255, 255, 255) 0px 0px 0px 1px inset
  nav:
    textColor: "{colors.ink-muted}"
    padding: 0px 0px 28px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 5px 0px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    padding: 40px 32px
---

## Overview

Polestar (www.polestar.com) is the electric-car maker. The queued URL polestar.com opens on a region selector ("Select your region": Europe, North America, Asia-Pacific, Middle-East, Global, each with country links), which is not the brand's home page. The home page was therefore re-measured at https://www.polestar.com/global/ (title "Polestar – Electric cars | Polestar"), and this document describes that measured page. The region selector itself is white with a thin wordmark top right and black sentence-case lists; it is not documented as brand UI.

The Global home page starts with a full-bleed photograph of a Polestar 4 SUV from behind on a lake, with the h1 "Polestar 4 SUV", the line "The space of an estate. The versatility of an SUV." in 60% white, and an outlined link "Discover Polestar 4 SUV →". Next is a 2 by 2 grid of white cells separated by thin rules, each with a model name (Polestar 2, Polestar 4 coupé, Polestar 3, Polestar 5), a small "Discover ... →" link and a side-view product image. Then a block of three huge black links ("Find a retailer", "About Polestar", "Newsletter sign up") with chevrons, a grey paper-cutout sustainability panel ("Sustainability. Being transparent with the facts." and a "Read more →" button), a "Charging" banner with a diagonal arrow, an "Additionals shop" strip with yellow tote-bag photography, a row of three underlined link rows, and a light grey footer with "Stay up to date on the latest Polestar news", a "Subscribe" button and link groups (Explore & buy, Support, About, Social) plus a legal bar (Legal, Ethics, Cookies, Accessibility Statement). The extraction hid a mega-menu overlay (`consentOverlaysHidden: mega-menu-...`).

The tone is spare and factual. Copy is sentence case, short, and without exclamation. The visual language is Scandinavian minimalism: lots of white, thin rules, one typeface, and imagery carrying every bit of color.

## Colors

Measured in `web/data/extracted/polestar.json` after the re-extraction:

- **canvas `#ffffff`**: the page background.
- **page-largest `#f0f0f0`**: the light grey of the largest measured area (weight 1,801), used for the footer (padding 40px 32px) and the Additionals strip.
- **ink `#000000`**: almost all text (1,077 characters).
- **ink-muted `#00000099`**: 60% black for nav and secondary headings such as "Being transparent with the facts." (99 characters).
- **primary `#ffffff`**: white, used for hero text and the outlined hero link (61 characters). The page has no filled call to action, so primary is the white-on-image control color.
- **ink-on-image `#ffffff99`**: 60% white for the hero subtitle (50 characters).

Boxes use inset one-pixel box-shadows as borders (see Elevation). No accent color is measured in text or surfaces; the only saturated colors on the page are in photography (the red tail light bar, the yellow tote). The CSS root variables are layout variables only (`--cw-letter-spacing-small`, `--cw-line-height-small` and similar); no color variables are declared.

## Typography

One family: **Polestar Unica** (1,287 characters, all at weight 400), with Helvetica Neue, Helvetica and Arial as declared fallbacks. There is no bold anywhere; hierarchy is purely size and tracking.

- **display** (h1 and h2/h3 titles): 30px / 32px, weight 400, letter-spacing -1.2px.
- **body** (paragraphs, nav, links): 16px / 18px, weight 400, letter-spacing -0.3px. Link text also uses a 32px line height inside buttons.
- **statement**: 110px, weight 400, letter-spacing -4.95px (47 characters), the huge "Find a retailer / About Polestar / Newsletter sign up" lines; 104.524px with -4.70359px spacing is also measured (8 characters). On the 390px pass the statement size measures 42.0492px (47 characters) and 60px (8).
- Small print: 12px with -0.1px spacing (76 characters), the footer legal links.

The tracking is about -4% of the font size at display sizes (-1.2px at 30px, -4.95px at 110px), and -0.3px at 16px; these are the measured numbers. The CSS declares `--cw-letter-spacing-large: -0.075rem`, `--cw-line-height-large: 2rem`, `--cw-letter-spacing-small: -0.01875rem` and `--cw-line-height-small: 1.125rem`. No font-license source was opened; no substitute is published in files read.

## Layout

The page is 1280px wide and 4,415px tall. Content runs on a 32px outer padding (footer padding 40px 32px; gaps of 32px are measured 11 times, 16px 16 times). The model grid is two columns by two rows, each cell 440px tall, with a vertical hairline between columns. Sections are full-width bands: hero photograph, model grid, statement links, sustainability panel, charging banner, shop strip, three-column link row and footer. Measured paddings: 5px (49 occurrences, link rows), 2px (11), 112px (5), 16px, 205.703px, 32px, 80px, 48px. The tokens file carries the scale 2, 5, 8, 16, 24, 32, 40, 48, 80 and 112px. The nav list in the mega menu is 149px wide with 28px bottom padding; each nav link is 28px high with 5px vertical padding.

## Elevation & Depth

Flat. No drop shadows are measured. The box-shadow values on the page are inset or edge hairlines used as borders: `rgb(0, 0, 0) 0px 0px 0px 1px inset` (3 elements, outlined buttons), `rgba(0, 0, 0, 0.3) 1px 0px 0px 0px` (2, the vertical rule between grid cells) and `rgb(255, 255, 255) 0px 0px 0px 1px inset` (1, the white outline on the hero link). On hover the hero link's outline changes from `rgb(255,255,255)` to `rgb(179,179,179)`; model-grid cells change the border color from `rgba(0,0,0,0.6)` to `rgb(0,0,0)`. Depth comes from photography only.

## Shapes

Square. Every border radius is 0px except one element at 50% (a circular play/pause control on the hero, seen in the capture). The tokens file records `pill: 9999px` for that circle. Buttons are rectangles outlined by a 1px inset shadow, 48px high (the hero link measures 239px wide with padding 0px 32px 0px 16px) and an arrow glyph ("→") in the label.

## Components

- **link / outlined button** ("Discover Polestar 4 SUV →"): transparent fill, white label, 16px, 1px inset white outline, padding 0px 32px 0px 16px, height 48px, radius 0px. The dark-on-white variants (for example "Read more →", "Go to shop →", "Subscribe →") use `rgb(0, 0, 0) 0px 0px 0px 1px inset`.
- **Model cell**: model name at 16px-30px black, "Discover ... →" link, centered product render, 440px high, 1px hairline to neighbors.
- **Statement links**: three rows at 110px with a right-aligned chevron.
- **nav / nav-link**: nav text `#00000099`, links `#000000` 16px / 18px with 5px 0px padding.
- **footer**: `#f0f0f0` background, black text, newsletter headline at 30px, link groups at 12px to 16px.
- **Underlined link rows**: "Find a retailer →", "About Polestar →", "Newsletter sign up →" with a bottom rule.

## Design System Architecture

No public brand-guideline or design-system documentation link appears on the opened Global page. Its footer links to a Design Contest page and a Design Community Instagram account, neither of which is a token source and neither was opened. The shipped CSS exposes only a few `--cw-` layout variables (letter-spacing and line-height tiers, a visual viewport height) and `--container-fill-text-captured-length`, so the design values here come from measurements of rendered elements. Source: https://www.polestar.com/global/ (measured with `web/scripts/extract-tokens.mjs`, after re-measuring the region selector at https://www.polestar.com/).

## Do's and Don'ts

- Do use Polestar Unica at weight 400 only, with the measured negative tracking.
- Do keep surfaces white or #f0f0f0 and text black or 60% black.
- Do outline buttons with a 1px inset line and a square corner.
- Do let photography supply color and keep UI chrome monochrome.
- Don't add accent colors, gradients or drop shadows; none are measured.
- Don't use bold type.
- Don't treat the region selector or the mega-menu overlay as brand home-page UI.

## Responsive Behavior

Measured on the 390px pass: the h1 and h2 stay at 30px / 32px with -1.2px tracking; the statement size drops from 110px to 42.0492px and from 104.524px to 60px; body stays 16px (892 characters) and small print 12px (76). The h1 box is 343px wide at 390px. Menu behavior, grid reflow and image sizing on mobile are not measured.

## Iteration Guide

1. Canvas #ffffff, panels #f0f0f0, text #000000 and #00000099.
2. Polestar Unica 400: 30px / 32px at -1.2px, 16px / 18px at -0.3px, 110px at -4.95px for statements.
3. Square outlined buttons 48px high with 1px inset lines; no fills.
4. Use a 2 by 2 model grid with hairline separators and full-bleed photography.
5. Run `node web/scripts/verify-designs.mjs --slug=polestar` after edits; never change measured values.
