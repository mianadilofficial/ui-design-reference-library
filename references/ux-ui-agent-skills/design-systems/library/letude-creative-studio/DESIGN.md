---
version: alpha
name: L'Étude
category: "Agencies & Studios"
description: 'L''Étude international boutique creative studio site measured live: red #ee382b hero, #9597a7 gray canvas, electric blue #012094 headline text, #151515 labels, and the Indivisible family from 13px uppercase tags to 89.6px statements.'
colors:
  canvas: '#9597a7'
  ink: '#151515'
  primary: '#ee382b'
  brand-blue: '#012094'
  hairline: '#15151540'
typography:
  display:
    fontFamily: Indivisible, helvetica, arial, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 33.6px
    letterSpacing: '-0.32px'
  display-mobile:
    fontFamily: Indivisible, helvetica, arial, sans-serif
    fontSize: 23.4px
    fontWeight: 700
    lineHeight: 24.57px
  heading:
    fontFamily: Indivisible, helvetica, arial, sans-serif
    fontSize: 13.008px
    fontWeight: 550
    lineHeight: 13.008px
    textTransform: uppercase
  body:
    fontFamily: Indivisible, helvetica, arial, sans-serif
    fontSize: 51.2px
    fontWeight: 600
    lineHeight: 46.08px
    letterSpacing: '-1.024px'
  nav:
    fontFamily: Indivisible, helvetica, arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 19.2px
rounded:
  xs: 4px
  pill: 9999px
spacing:
  s1: 2.21px
  s2: 4px
  s3: 4.29px
  s4: 5.4px
  s5: 7.2px
  s6: 9.6px
  s7: 12px
  s8: 16px
  s9: 24px
  s10: 32px
components:
  link:
    textColor: '{colors.ink}'
    typography: '{typography.heading}'
  nav:
    textColor: '{colors.brand-blue}'
  nav-link:
    textColor: '{colors.brand-blue}'
    typography: '{typography.nav}'
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    textColor: '{colors.brand-blue}'
---

## Overview

L'Étude is an international boutique creative studio; the site (measured at `https://letude.group/`) presents it as a collective of "European creatives from LA and beyond" under the name L'Étude Group. The opened page defines the name as French for "study", "a methodical application of the mind in pursuit of learning and understanding", and describes the studio as "an international boutique studio, blending design cultures and technology to craft brand universes and multi-sensory experiences."

The capture opens on a saturated red `#ee382b` hero: a huge black "L'ÉTUDE" wordmark overlaid by a photograph (a robot arm and a woman in platform heels), three small uppercase labels ("MODULAR", "CREATIVE", "STUDIO"), a dictionary-style definition at the upper right, small blue icon marks at the corners, and round blue-outlined "INFO" and contact buttons at the right edge. A bold blue statement sits at the bottom of the red area. The page then switches to a flat gray `#9597a7` ground with the labels "SERVICES" and "OUR VISION", a vertical line of five black glyph icons, project thumbnails tagged "LET.27", "LET.16" and "LET.19" with captions such as "THE DEEP END" and "BUGATTI TOURBILLON CAMPAIGN", and a very large blue manifesto paragraph, "We've always believed in the idea of being a community of independent creative talents from diverse horizons...". Projects named on the page include The Deep End, Bugatti Tourbillon campaign, De Troupe website, SSENSE for Versace and others.

The voice is confident and editorial, and the layout is image-led and asymmetrical. The nav text in the DOM is split into single letters for animation ("W / ork", "C / ontact").

## Colors

Values are from `web/data/extracted/letude-creative-studio.json`; three are also root variables.

- **Canvas `#9597a7`**: a cool gray, the dominant background (area weight 10240), declared `--color-gray`.
- **Primary `#ee382b`**: the red of the hero and of the round buttons (area weight 1029), declared `--color-secondary`. In the hover probe the "INFO" button has this fill with a blue text and border.
- **Brand-blue `#012094`**: the main text color (1122 characters) for headlines, the manifesto, nav and footer, and the border color on three elements. It is a saturated ultramarine.
- **Ink `#151515`**: the dark label color (507 characters), declared `--color-graydark`; used for small uppercase tags and project captions.
- **Hairline `#15151540`**: the border color on 12 elements.

The red text color `#ee382b` also measures 76 characters. White (`--color-white: #fff`) is declared in the CSS but has no measured area. The scheme is three flat colors, red, gray and blue, with near-black for small labels.

## Typography

A single variable family, **Indivisible** (weight axis 1 to 999, normal and italic), carries all 1705 measured characters; fallbacks are helvetica, arial and sans-serif (declared as `--font-sans`).

| Token | Size / line-height | Weight | Notes |
|---|---|---|---|
| `display` | 32px / 33.6px | 700 | h1 intro statement, letter-spacing -0.32px |
| `display-mobile` | 23.4px / 24.57px | 700 | mobile h1 |
| `heading` | 13.008px / 13.008px | 550 | uppercase section tags |
| `body` | 51.2px / 46.08px | 600 | manifesto paragraph, letter-spacing -1.024px |
| `nav` | 16px / 19.2px | 500 | nav links |

Sizes by character count: 51.2px (637), 13.008px (531), 64px (246), 32px (119), 89.6px (75), 16px (54). Weights: 600 (960), 550 (336), 500 (182), 700 (123), 650 (104). Tracking tightens with size: 51.2px at -1.024px, 64px at -1.92px, 89.6px at -1.792px, 32px at -0.32px, 14px at -0.14px. Large type is tightly leaded (51.2px on 46.08px line-height). Tags are 13.008px uppercase with weight 550 and footer labels 650.

## Layout

The layout is poster-like: a full-bleed red intro, then a gray field on which images and captions are placed asymmetrically, alternating left and right with large blank gaps, as in the capture. Vertical rotated tags ("LET.27") hang beside each thumbnail. The page measured 7482px high on desktop. CSS variables define `--margin-side: 16px`, `--inset: 16px` and `--space-md: calc(clamp(48px, 3.5vw, 72px))`.

Spacing tokens: 2.21px, 4px, 4.29px, 5.4px, 7.2px, 9.6px, 12px, 16px, 24px and 32px. Gap frequencies: 12px (24 uses), 83.2px (6), 98.4615px (6), 16px (6), 51.2px (1). Padding: 4px (12 uses), 32px (4), 16px (3). The manifesto paragraph measured 415px tall.

## Elevation & Depth

No box shadows were measured. Depth comes from full-bleed color fields and overlap: the hero photograph is laid over the wordmark, which is partly tinted red where they overlap, in the capture. Borders are `#15151540` hairlines (12 uses) and `#012094` (3 uses). The site declares easing curves (`--ease-quart-inout: cubic-bezier(.76, 0, .24, 1)`, `--ease-quart`, `--ease-cubic-inout`) for its animations.

## Shapes

Radii measured: 4px (12 elements) and 800px (2 elements). Tokens: `xs: 4px` and `pill: 9999px`. The round "INFO" and contact buttons use the 800px radius, making full circles or capsules; the small tags use 4px. Images and cards in the capture have square corners.

## Components

**Round nav buttons**: "INFO" has a red `#ee382b` fill, `#012094` text and border, 800px radius; on hover its height grew from 51px to 60px in the probe. A second round button at the right edge holds an "@" and a "C" for contact.

**Nav link (`nav-link`)**: `#012094` text, Indivisible 16px / 19.2px weight 500, 40px high.

**Section tag (`link`)**: `#151515` uppercase 13.008px, weight 550, used for "LET.27", "THE DEEP END" and similar labels, with a small arrow icon.

**Project thumbnail**: a photograph or poster with a rotated tag beside it and an arrow-and-caption below.

**Service icons**: five black glyphs stacked vertically between the SERVICES and OUR VISION tags.

**Footer (`footer`)**: `#012094` text; "L'ÉTUDE GROUP" and "European creatives from LA and beyond" in 13.008px uppercase at weight 650.

No filled call-to-action button was detected, so no `button-primary` token is declared.

## Design System Architecture

No public design system or brand guideline is linked from letude.group: the opened page links only to its sections, social profiles (Instagram, LinkedIn, X, Vimeo) and Careers and Terms, so no official source exists to cite beyond the site (https://letude.group/). The de-facto system is a handful of root custom properties: `--color-gray`, `--color-graydark`, `--color-white`, `--color-secondary`, `--font-sans`, `--margin-side`, `--inset`, `--space-md`, the easing curves and scrollbar variables (`--scrollbar-color-thumb`, `--scrollbar-width-legacy: 10px`). Typography is one variable family and the palette is three colors.

## Do's and Don'ts

Do:
- Use `#9597a7` as the main ground, `#ee382b` for the opening field and round buttons, and `#012094` for text.
- Use Indivisible with tight negative tracking at large sizes.
- Use 13.008px uppercase tags in `#151515`.
- Place images asymmetrically with rotated reference tags.
- Use round 800px buttons for INFO and contact.

Don't:
- Do not add a fourth hue; the measured palette is red, gray, blue and near-black.
- Do not add shadows; none were measured.
- Do not round images or cards beyond 4px.
- Do not set body copy in a second family.

## Responsive Behavior

The 390px mobile pass recorded: h1 23.4px / 24.57px at weight 700 (desktop 32px / 33.6px), h2 12px / 12px (desktop 13.008px), the manifesto paragraph at 28px / 25.2px with -0.56px tracking (desktop 51.2px / 46.08px), and a header block of 820px height with 16px text at weight 600. The h1 carries padding `0px 12px 0px 0px`. Column counts and navigation form at that width are not measured.

## Iteration Guide

1. Set `canvas` `#9597a7`, `primary` `#ee382b`, text `#012094`, labels `#151515`.
2. Set statements in Indivisible 600 at 51.2px / 46.08px with -1.024px tracking; tags at 13.008px uppercase.
3. Use 16px side margins and a `clamp(48px, 3.5vw, 72px)` section space.
4. Make round buttons with 800px radius, red fill and blue border.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=letude-creative-studio --url=https://letude.group/ --force --no-motion` before changing any value, then `node web/scripts/verify-designs.mjs --slug=letude-creative-studio`.
