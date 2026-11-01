---
version: alpha
name: Ironhill
category: "Food & Beverage"
description: "Ironhill (ironhill.au), an Australian drinks brand site themed as a place the maps don't show: warm cream #f4eddd canvas, forest green #344128 text and bands, yellow #fec820 menu toggle, PP Woodland Light at 260px, 70px and 16px, 4px radius and thin contour-line illustration."
colors:
  canvas: "#f4eddd"
  ink: "#344128"
  primary: "#344128"
  on-primary: "#f4eddd"
  ink-black: "#000000"
  accent-yellow: "#fec820"
  hairline: "#f4eddc4d"
typography:
  display:
    fontFamily: "\"PP Woodland\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 260px
    fontWeight: 300
    letterSpacing: "-7.8px"
  headline:
    fontFamily: "\"PP Woodland\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 70px
    fontWeight: 300
  page-body:
    fontFamily: "\"PP Woodland\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  label:
    fontFamily: "\"PP Woodland\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
rounded:
  xs: 4px
spacing:
  s1: 6px
  s2: 48px
  s3: 128px
components:
  nav:
    backgroundColor: "{colors.accent-yellow}"
    textColor: "{colors.ink-black}"
    typography: "{typography.page-body}"
    rounded: "{rounded.xs}"
    height: 48px
---

## Overview

Ironhill (https://ironhill.au/) presents itself with the title "Ironhill | A place the maps don't show" and the description "Shake off the grip of your daily grind and come watch the mist sit low, heat your hands by the embers' warm, and step onto the Ironhill." The page text lists "Our Drinks" with product names set in capitals: WARDEN OF THE WILD, SKUNK APE, MERMAIDS' TEARS and further entries. The site is a one-page brand world built around the idea of an uncharted place, not a catalogue.

The re-measured capture shows a warm cream field (#f4eddd) with the small uppercase wordmark "IRONHILL" at the top left, a small yellow square menu toggle at the top right, and a long fine contour-line drawing that meanders down the entire page like a river or trail drawn on a map. Parts of the line are faint and parts are dark. Large areas of the page are empty on purpose. The measured document is 9,450px tall at 1280px wide. A second band measured in forest green #344128 carries text in cream.

The type is a single elegant serif, PP Woodland, in Light and Regular weights, used at extreme scale: the measured display text is 260px with -7.8px tracking, product names are 70px, and supporting copy is 16px and 18px. GT America files are also loaded by the page, but no characters were measured in them.

Key characteristics:
- Two measured surface colors: cream #f4eddd and forest green #344128, each filling a full-width area of the screen.
- A single accent, yellow #fec820, on the 48px menu toggle.
- PP Woodland only (151 of 151 measured characters), weight 300 for most text.
- Radius 4px on 3 elements; no box shadows measured.
- Hand-drawn contour line as the structural illustration.

## Colors

- **Canvas #f4eddd:** a main page surface (1,024 area weight, equal to the green band) and the text color on green (87 characters, the most-read color).
- **Ink and primary #344128:** a deep forest green used as the text color on cream (30 characters, the 260px display text), as the second surface (1,024 area weight) and the dominant color in the CSS corpus (20 occurrences).
- **On-primary #f4eddd:** cream text on the green band.
- **Ink black #000000:** 34 characters of text, including the content on the yellow toggle.
- **Accent yellow #fec820:** the fill of the 48px by 48px toggle (a nav element) and one measured border color; it appears 6 times in the CSS corpus, with #fec81e in 2.
- **Hairline #f4eddc4d:** cream with an alpha channel (8-digit hex), measured as a border color on 2 elements.

Other values in the CSS corpus, such as #cfd0c0, #354027, #27311e and #b7f5c6, were not found on measured text or surfaces and are not tokens. The site defines no root custom properties (`rootVars` is empty).

## Typography

Loaded fonts: PP Woodland 400 and 300 (PPWoodland-Regular.woff2 and PPWoodland-Light.woff2) and GT America 300, 400 and 500 (GTAmerica-Light, GTAmerica-Regular and GTAmericaTrial-ExpMd), all served from /fonts/. The measurement shows only PP Woodland in use.

- **display:** 260px, weight 300, letter spacing -7.8px (-3 percent), the largest type (30 characters).
- **headline:** 70px, weight 300 (62 characters), used for product names such as "WARDEN OF THE WILD".
- **page-body:** 16px, weight 300, line height 24px, the size of the nav element text (34 characters).
- **label:** 18px, weight 400 (25 characters), the body role's size,.

At 390px the sizes by character count are 36px (62 characters), 16px (59) and 180px (30). Fallbacks after PP Woodland are the system sans stack. Font substitutes: PP Woodland and GT America are commercial typefaces served from the site's own files.

## Layout

The page is a long vertical scroll (9,450px at 1280px) with large vertical gaps between content groups; the contour line runs through those gaps. The extractor found 5 header links and a menu toggle labelled "Toggle main menu" at both widths, and at most 5 card columns. Spacing values measured: gaps of 6px (2 elements) and paddings of 128px and 48px. The spacing tokens carry 6px, 48px and 128px.

Composition pattern: full-width cream and green bands, huge serif type sitting alone with generous empty margins, the wordmark and the toggle pinned to the top corners.

## Elevation & Depth

No box shadows were measured. The only depth cues are tonal: the cream and green bands, thin borders (measured colors #f4eddc4d and #fec820) and the layered contour illustration. A fixed-position content layer ("fixed-content") was hidden during measurement and is not documented.

## Shapes

One radius was measured: 4px, on 3 elements. The toggle in the capture is a small square with that slight rounding. All other elements compute a 0px radius. The illustration is made of irregular organic curves in a hairline stroke, in contrast to the rigid rectangles of the layout.

## Components

- **nav / menu toggle:** a 48px by 48px square, yellow #fec820 fill, black icon text, 4px radius, label "Toggle main menu". It is the same size at 390px.
- **Wordmark:** "IRONHILL" in uppercase PP Woodland at the top left, in the green ink.
- **Product list ("Our Drinks"):** each product name in capitals at 70px weight 300 on a line or two lines (for example "WARDEN OF / THE WILD", "SKUNK / APE", "MERMAIDS' / TEARS").
- **Contour line:** a decorative hairline stroke that spans the page, dark where it crosses the cream field.

No primary CTA button was detected on the desktop pass and none is declared.

## Design System Architecture

No public design system or brand guideline was found. The page at https://ironhill.au/ links only to its own Nuxt bundle (/_nuxt/) and favicon, with no GitHub, brand-guideline or press link. The system is implicit: two surface colors, one accent, one type family at a few sizes and weights, and 4px, 48px and 128px spacing values. There are no root variables to cite.

## Do's and Don'ts

Do:
- Alternate cream #f4eddd and green #344128 bands, with cream text on green and green text on cream.
- Set everything in PP Woodland Light, with negative tracking at display size.
- Keep the yellow #fec820 for the single menu toggle.
- Leave generous empty space and draw a thin contour line through it.

Don't:
- Do not use black #000000 for large text; it appears only on the yellow toggle and small copy.
- Do not add shadows or heavy borders.
- Do not use GT America; no characters were measured in it.
- Do not document the hidden fixed layer.

## Responsive Behavior

Measured at 390px: display text 180px (down from 260px), headlines 36px (down from 70px), body 16px; the menu toggle stays 48px by 48px; header link count 5 and toggle visible, as on desktop. The stylesheet declares max-width media queries at 767px (33 rules), 1780px (28), 1024px (15), 1280px (7), 868px (6), 768px, 1023px and 568px, and min-width queries at 768px (12), 869px, 1023px and 1025px. Other mobile behavior is not measured.

## Iteration Guide

1. Set the page to #f4eddd; add a full-width #344128 band with #f4eddd text.
2. Use PP Woodland 300: 260px / -7.8px for display, 70px for names, 16px / 24px for text.
3. Add a 48px yellow #fec820 toggle with 4px radius in the top right.
4. Draw a hairline contour line down the page between content groups.
5. Keep products in capitals at 70px, broken across two lines.
6. Re-measure at 390px for any value not listed above.
