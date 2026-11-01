---
version: alpha
name: "Fritz Hansen"
category: "Home & Furniture"
description: "Fritz Hansen (fritzhansen.com) is the Danish furniture, lighting and accessory design house: white #ffffff and beige #efeeeb pages, black #000000 text, HansenGrotesque in uppercase at 43.75px and 27.5px for headings, 15px body, square 0px corners, and full-bleed room photography with product tiles."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-beige: "#efeeeb"
  grey-1: "#333333"
  grey-2: "#666666"
  border-grey: "#c6c6c6"
  light-green: "#d6e1b9"
  amber: "#f19b1f"
  error: "#f41212"
typography:
  display:
    fontFamily: HansenGrotesque, sans-serif
    fontSize: 43.75px
    fontWeight: 400
    lineHeight: 56.2498px
    textTransform: uppercase
  display-mobile:
    fontFamily: HansenGrotesque, sans-serif
    fontSize: 30px
    fontWeight: 400
    lineHeight: 39.9999px
    textTransform: uppercase
  heading:
    fontFamily: HansenGrotesque, sans-serif
    fontSize: 27.5px
    fontWeight: 400
    lineHeight: 36.25px
    textTransform: uppercase
  subheading:
    fontFamily: HansenGrotesque, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20.41px
  body:
    fontFamily: HansenGrotesque, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.0001px
  nav:
    fontFamily: HansenGrotesque, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21.98px
  button-outline:
    fontFamily: HansenGrotesque, sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 18.8572px
    textTransform: uppercase
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 14.5px
  s10: 15px
components:
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button-outline}"
    rounded: "{rounded.none}"
    padding: 8px 27px
    height: 37px
    borderColor: "{colors.ink}"
  nav:
    textColor: "{colors.ink}"
    padding: 30px 40px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 10px
  product-tile:
    backgroundColor: "{colors.surface-beige}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

# Fritz Hansen

Measured from https://www.fritzhansen.com/ (page title "Furniture, lighting and accessory design - Fritz Hansen", lang en). The page is 5028px tall at 1280px. A footer area and consent layer were detected and hidden by the extractor (`consentOverlaysHidden`: site-footer). In the capture, a black "Want to stay informed?" tab with a close icon sits over the hero and a small round widget sits at the lower left; both are promotional or utility overlays and are not documented as brand components.

## Overview

The top of the page has a black utility bar with the audience switch "PRIVATE | PROFESSIONAL" at left and "INTERNATIONAL / EUR – ENGLISH" at right. Beneath it, the white logo "FRITZ HANSEN" in two stacked lines sits at the left over a full-bleed hero photograph of a stone-topped coffee table and leather lounge chairs. The nav items are PRODUCTS, INSPIRATION and ABOUT US with icons for stores, account and search. The hero headline "PK22™ & PK61™" is white with the line "Companions Since 1956" and a white "EXPLORE →" button.

The opened page lists these sections: "Spring news 2026" (a centered uppercase heading above a short paragraph about a continued dialogue between evolving lifestyles and enduring design), a row of three tall outdoor photographs with an "EXPLORE →" link, "EXPLORE PRODUCTS" with a horizontal carousel of product tiles (for example "Series 7™ Chair", "PK111™ Room Divider" with a NEW label, "PK22™ Lounge Chair", "PK61™ Coffee Table"), "Series 7™ – Verner Panton 100", room categories (Living Room, Dining Room, Home Office, Hallway, Outdoor), "STORIES FROM FRITZ HANSEN" and a newsletter sign-up. The body text states that in 2026 the company marks its 100th anniversary. Actions are EXPLORE, EXPLORE SERIES 7™, FIND STORE and SIGN UP.

The tone is calm, editorial and museum-like: photography of real interiors, wide margins, uppercase headings with ample tracking-free spacing and understated product captions (name, variant detail, "More variants").

## Colors

Measured background areas: #ffffff (weight 5389), beige #efeeeb (527, the product tile background) and black #000000 (53). Text colors by characters: #000000 (1828) and #ffffff (104). The root exposes the site's own palette: `--c-b-black` #000, `--c-b-white` #fff, `--c-b-grey1` #333, `--c-b-grey2` #666, `--c-b-grey3` #c6c6c6, `--c-b-grey4` #f1f0ec, `--c-b-grey5` #f1f0ed, `--c-t-beige` #efeeeb, `--c-t-lightgreen` #d6e1b9, `--c-t-yellow` #f19b1f, `--c-b-timeline` #1e1e1d, `--c-s-border` #c6c6c6, `--c-s-error1` #f19b1f, `--c-s-error2` #f41212, `--c-s-warning` #ff8d8d, `--c-s-valid` green, `--kl-reviews-color-light-gray` #e9e9eb and `--c-b-white-trans` hsla(0,0%,100%,0.7).

- **canvas #ffffff**, **ink and primary #000000**, **on-primary #ffffff**: the base. Black is also the fill of the utility bar and the 1px border color of outline buttons.
- **surface-beige #efeeeb**: product tiles.
- **grey-1 #333333, grey-2 #666666, border-grey #c6c6c6**: from the root palette (secondary text and borders).
- **light-green #d6e1b9** and **amber #f19b1f**: declared tint colors (`--c-t-lightgreen`, `--c-t-yellow`), not seen as large measured areas on the home page.
- **error #f41212**: declared error color (`--c-s-error2`).

## Typography

One family, HansenGrotesque (400, 500 and 700 loaded), a proprietary brand grotesque used for everything; Arial and Helvetica appear only as fallbacks in some stacks. A neutral grotesque sans is the generic substitute.

- **display**: 43.75px, weight 400, line-height 56.2498px, uppercase: the hero headline.
- **display-mobile**: 30px, weight 400, line-height 39.9999px, uppercase.
- **heading**: 27.5px, weight 400, line-height 36.25px, uppercase: "EXPLORE PRODUCTS".
- **subheading**: 13px, weight 400, line-height 20.41px: product names ("Series 7™ Chair").
- **body**: 15px, weight 400, line-height 22.0001px.
- **nav**: 14px, weight 400, line-height 21.98px; the nav bar itself measures uppercase 14px with line-height 16px.
- **button-outline**: 12px, weight 500, line-height 18.8572px, uppercase: the SIGN UP button.

Size frequencies: 14px (662 characters), 15px (516), 10px (206), 20px (134), 13px (120), 27.5px (70), 12px (65), 11px (48). Weights: 400 (1727) and 500 (205). Letter-spacing is "normal" on every role: the uppercase headings rely on the typeface's own spacing.

## Layout

The page uses full-bleed hero imagery, then centered text blocks and three-up image rows. Root variables define the grid details: `--site-header-height` 3.9375rem, `--margin-unit` 0.3125rem (5px), `--portfolio-tile-gap` 0.625rem (10px) and `--mode-switch-height` 1.875rem. Paddings measured: 12px and 3px (12 uses each), 30px and 17px (9), 24.1875px and 14.5px (8). Gaps: 20px (7), 11px (2), 40px (1). The nav has padding 30px 40px and is 85px high and 768px wide; nav links have padding 0px 10px. The spacing tokens are 3px, 5px, 6px, 7px, 8px, 10px, 11px, 12px, 14.5px and 15px.

## Elevation & Depth

No box shadows were measured. The hero photograph carries the depth; text is overlaid in white. A translucent white `--c-b-white-trans` (hsla(0,0%,100%,0.7)) is declared. On image tiles a "Save image" control fades from opacity 0 to 1 on hover with fill rgba(0, 0, 0, 0.1) and white text.

## Shapes

Radii: the interface is square. Only three non-zero radii were measured in total (one each): "0px 50% 0px 0px", "4px 4px 0px 0px" (the promotional tab) and 50% (a round widget). Buttons, tiles, nav items and images are 0px. The token set is therefore `none: 0px` and `pill: 9999px` for the single round element.

## Components

- **button-outline**: "SIGN UP", transparent fill, text #000000, 1px solid #000000, HansenGrotesque 12px/500 uppercase, padding 8px 27px, height 37px, width 113px, radius 0px.
- **hero button**: "EXPLORE →" in black on a white fill, 62px high in the hover record; on hover its opacity changes from 1 to 0.7. On the mobile pass the same "EXPLORE" button was measured as black fill #000000 with white 14px/500 uppercase text and radius 0px.
- **nav**: PRODUCTS, INSPIRATION, ABOUT US at 14px uppercase, black on the white header (white over the hero image in the capture).
- **product tile**: a beige #efeeeb square image area, the product name at 13px, a variant line at 10px and "More variants" below.
- **utility bar**: black strip with white 11px uppercase labels.

The extractor read the floating "Want to stay informed?" tab as the primary call to action; `_roleOverrides` in SOURCES.json sets ctaPrimary to none for that reason.

## Design System Architecture

No public design system or brand guideline is linked on the opened page. The shipped CSS exposes a clear internal token layer through root custom properties with prefixes: `--c-b-*` for base colors, `--c-t-*` for tint colors, `--c-s-*` for semantic colors (site background `--c-s-site-bgc` #fff, text `--c-s-site-c` #000, border, error, warning, valid, mode switch), spacing and layout units (`--margin-unit`, `--portfolio-tile-gap`, `--site-header-height`), and motion tokens `--anim-duration` 0.25s and `--anim-ease` cubic-bezier(0.25,0.01,0.25,1). Source page: https://www.fritzhansen.com/.

## Do's and Don'ts

- Do let a full-bleed interior photograph open each section, with white uppercase HansenGrotesque over it.
- Do keep the page white and beige with black text; use black for the utility bar and outlines.
- Do keep corners at 0px and avoid shadows.
- Do caption products with name, one detail line and "More variants".
- Don't use the amber or green tints as large fills; they are declared but not measured as areas.
- Don't document the newsletter tab, the round widget or the consent layer as brand components.
- Don't add letter-spacing to the uppercase headings; none is measured.

## Responsive Behavior

The mobile pass recorded: h1 30px with line-height 39.9999px uppercase; h2 22px with line-height 29px uppercase; body 15px with line-height 22.0001px; the hero "EXPLORE" button as black fill with white 14px/500 uppercase text; and the nav measured as an icon strip 24px wide with padding 20px 12px, 62px high. Mobile size frequencies: 14px (677 characters), 15px (516), 10px (213), 13px (120), 16px (87), 22px (70), 11px (66), 12px (58), 30px (29), 18px (22), 9px (18). Column counts and breakpoints were not measured.

## Iteration Guide

1. Canvas #ffffff, text #000000, product tile #efeeeb.
2. Headings in HansenGrotesque uppercase at 43.75px/56.2498px and 27.5px/36.25px; body 15px/22.0001px.
3. Hero: full-bleed room photograph, white uppercase title, one white "EXPLORE →" button.
4. Outline buttons at 37px high with 1px black borders and 12px/500 uppercase labels.
5. Product carousels of beige tiles with 13px names.
6. Keep every corner square and every shadow off.
