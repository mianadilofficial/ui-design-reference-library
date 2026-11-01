---
version: alpha
name: Julien Calot
category: "Portfolio"
description: "Julien Calot, visual artist and multidisciplinary creative (juliencalot.com): a near-white gallery canvas (#fafafa) that lets saturated paintings carry all the color, black (#000000) micro-type in Doner at 8px, a condensed FF DIN Pro Black logo and series titles (23px, weight 900, uppercase) and a strict square-cornered, shadowless layout with every radius measured at 0px."
colors:
  canvas: "#fafafa"
  ink: "#000000"
  primary: "#000000"
  surface-line: "#dddddd"
  on-image: "#ffffff"
typography:
  display:
    fontFamily: FFDINProCondensedBlack, Arial, sans-serif
    fontSize: 23px
    fontWeight: 900
    lineHeight: 23px
    letterSpacing: 0.46px
    textTransform: uppercase
  nav:
    fontFamily: Doner, Impact, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 19.2px
  link:
    fontFamily: Doner, Impact, sans-serif
    fontSize: 8px
    fontWeight: 900
    lineHeight: 9.6px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 2.13px
  s2: 5px
  s3: 7px
  s4: 8px
  s5: 8.5px
  s6: 10px
  s7: 20px
  s8: 60px
  s9: 68px
  s10: 118.4px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.on-image}"
    padding: 20px 20px 0px
  nav-link:
    textColor: "{colors.on-image}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

The measured page is the home page of the artist Julien Calot (`https://www.juliencalot.com/`, title "Julien Calot | Visual Artist & Multidisciplinary Creative"). It works as an online gallery and shop: the top of the page is a full-bleed painting (a calm child's face with closed eyes against a landscape of blue rivers and green and purple hills) which carries the current series title "MEDITANTS", the year "2024" and the count "21 — PIECES". Below the hero the page is a grid of five artworks per row on an off-white ground, each a small framed image with ample space around it, continuing for 7306px (814 visible elements).

The interface exists to disappear. The only typographic voice is a set of tiny uppercase labels in white over the hero and in black elsewhere, and a large condensed wordmark "JULIEN CALOT" at the top left. The vocabulary is that of a store ("PANIER (0)" is the cart link) and of a catalog ("BY SERIES", "BY COLORS", "ARTWORK", "DRAWINGS", "EMBROIDERIES", "ABOUT", "CONTACT"). Footer lines read "© JULIEN CALOT 2025", "INSTAGRAM", "LEGALS". Color on the page comes entirely from the artworks: ochre and orange skin tones, cobalt and teal water, acid yellow and pink, which is why the chrome stays neutral.

Reading order on the page is simple: identity first (the wordmark), then orientation (the series name, year and number of works), then the work itself. There is no hero headline, no slogan and no button inviting a click; the only instruction to the visitor is the catalog of categories in the nav. Some labels are French ("PANIER" for the cart) (document language `en`). The only text sizes measured on the page are 8px and 23px, so no running paragraphs were captured.

## Colors

- **Canvas `#fafafa`**: the page ground (area weight 1280, the root variable `--_primitives---colors--grey-ultra-light`).
- **Ink `#000000`**: all text on the canvas (1278 characters of weight), the root variable `--_primitives---colors--black`.
- **On image `#ffffff`**: nav and series-title text placed over the hero painting (377 characters of weight).
- **Surface line `#dddddd`**: a light grey background area (area weight 17) that appears as thin dividers or placeholders.
- **Primary `#000000`**: no filled button or colored call to action exists in the measured data (`ctaPrimary` is null); black is the only action color, used for links.

Other primitives in the root: `--_primitives---colors--grey-off: #b3b3b3`, `#eee` (neutral lightest) and `#fff`. The color of artwork is imagery, not interface tokens.

## Typography

- **FF DIN Pro Condensed Black** (`FFDINProCondensedBlack`, weight 900, fallback `Arial, sans-serif`) is the display face: the wordmark and the hero title "MEDITANTS" at 23px, line-height 23px, letter-spacing 0.46px, uppercase. The site's own variables reuse it for the logo (34px, and 55px on large screens), titles (15px, 18px) and home titles (23px).
- **Doner** (weight 700, fallback `Impact, sans-serif`) is the body face for 1512 characters of text, almost all at 8px: the "info", "link-small" and "nav" sizes are 8px; "link-medium" and descriptions are 10px; "price" and "text-courant" are 12px. Nav links are 12px at weight 400 with line-height 19.2px; footer and artwork-link labels are 8px weight 900 uppercase with line-height 9.6px.
- Product descriptions use `FFDINProRegular` and prices use `FFDINProBold` in the root variables; these were declared but are not on the home page text that was measured.

Only two sizes appear on the measured desktop page: 8px (1512 characters) and 23px (143). The 390px mobile pass shows 23px (143), 8px (86), 12px (46) and 10px (4). Tiny text is the signature: the type stays at the scale of museum wall labels so the paintings dominate.

Font substitutes: both faces are commercial; only the declared fallbacks (`Arial`, `Impact`, `sans-serif`) were measured.

## Layout

Hero: a full-width image about the height of the first viewport with three zones of labels: the left carries the wordmark, the center carries the nav groups "BY SERIES / BY COLORS", the right carries "ARTWORK / DRAWINGS / EMBROIDERIES" and "ABOUT / CONTACT / PANIER (0)". The series label row ("2024", "MEDITANTS", "21 — PIECES") sits at mid-height of the image.

Below, the artwork grid is five columns with equal gutters, each cell vertically centered around the row's axis so portrait and landscape works float at slightly different heights; the grid starts after about a viewport of empty space (spacing values 60px, 68px, 118.4px and 140.8px appear in the gap scale). The global padding variable is 20px, which matches the nav padding `20px 20px 0px`. The measured gaps are 5px (44 occurrences), 20px (24), 2.13333px, 8.5px and 7px.

## Elevation & Depth

None. `boxShadows` is empty and no element carries a shadow. Hover is expressed as a change of opacity: the nav link "BY SERIES" goes from opacity 1 to 0.610577 and "ARTWORK" to 0.602574 on hover (measured), with the color and border color unchanged (`rgb(255, 255, 255)`).

## Shapes

`desktop.frequencies.borderRadii` is empty: every rendered element computes a 0px radius. The site's own variables agree: `--_ui-styles---radius--small`, `--_ui-styles---radius--medium` and `--_ui-styles---radius--large` are all `0px`. Artworks are shown as plain rectangles, preserving their own aspect ratios.

## Components

- **Wordmark**: "JULIEN CALOT" in FF DIN Pro Condensed Black, white over the hero.
- **Nav groups**: stacked uppercase labels (Doner 8px/12px), white on the hero; hover lowers opacity to about 0.6.
- **Series label**: year, title and piece count aligned on one baseline at mid-hero.
- **Artwork tile**: image only on the canvas, no caption or border in the capture, no radius, no shadow.
- **Cart link**: "PANIER (0)" in the top-right nav.
- **Footer**: `#000000` 8px Doner uppercase lines: copyright, INSTAGRAM, LEGALS.

## Design System Architecture

No public design-system documentation was linked from the page that was opened. The page's HTML identifies itself as a Webflow site, and its root custom properties carry Relume variable names (for example `--base-color-neutral--black` and `--color-scheme-1--border`, marked `<deleted|relume-variable-...>`), which indicates a Relume starter kit whose variables were renamed and layered with the artist's own `_primitives`, `_typography` and `_ui-styles` groups. Those groups define colors (`white`, `black`, `grey-off #b3b3b3`, `grey-ultra-light #fafafa`), type sizes per role (logo, title-home, title-small, title-medium, nav, info, link-small, link-medium, button 8px with 15px padding, price, text-courant), a 20px global padding and three radii all at 0px.

## Do's and Don'ts

Do:
- Keep the interface neutral (`#fafafa`, `#000000`, `#ffffff` over images) so artworks supply all color.
- Use micro-type (8px Doner uppercase) for navigation and metadata, and FF DIN Pro Condensed Black at 23px for names and titles.
- Keep every corner square (0px) and every surface flat.
- Express hover as a drop in opacity to about 0.6.

Don't:
- Do not add accent colors, buttons with fills, or shadows.
- Do not round image corners.
- Do not enlarge the label type; scale is part of the character.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 stays 23px weight 900; the size ladder is 23px, 8px, 12px and 10px, the same sizes as desktop. Column count, navigation collapse and image grid reflow on mobile were not measured.

## Iteration Guide

1. Off-white `#fafafa` ground, black text, no other chrome colors.
2. Hero image full-bleed with white 8px/12px uppercase nav in three corners.
3. Titles in FF DIN Pro Condensed Black 23px uppercase, letter-spacing 0.46px; everything else Doner 8px.
4. Artwork grid of five columns, 0px radius, no captions or shadows.
5. Verify with `node web/scripts/verify-designs.mjs --slug=julien-calot`.
