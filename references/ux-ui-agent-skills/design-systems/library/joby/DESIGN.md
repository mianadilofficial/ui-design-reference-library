---
version: alpha
name: Joby Aviation
category: "Architecture & Interiors"
description: "Electric air-taxi maker Joby Aviation: flat saturated blue canvas (#007ae5) with warm cream text (#f5f4df), jobyDisplay at 80px weight 550 with -2.4px tracking, jobyText 14px body, 16px cards and capsule radii up to 160px around cinematic photography."
colors:
  canvas: "#007ae5"
  page-body: "#f5f4df"
  ink: "#f5f4df"
  primary: "#f5f4df"
  surface-3: "#1c3f99"
  ink-2: "#0e1620"
  hairline: "#ffffff4d"
typography:
  display:
    fontFamily: jobyDisplay, "jobyDisplay Fallback"
    fontSize: 80px
    fontWeight: 550
    lineHeight: 80px
    letterSpacing: "-2.4px"
  display-mobile:
    fontFamily: jobyDisplay, "jobyDisplay Fallback"
    fontSize: 49.92px
    fontWeight: 550
    lineHeight: 47.424px
    letterSpacing: "-1.4976px"
  heading:
    fontFamily: jobyDisplay, "jobyDisplay Fallback"
    fontSize: 125.757px
    fontWeight: 550
    lineHeight: 125.757px
    letterSpacing: "-3.77272px"
  subheading:
    fontFamily: jobyDisplay, "jobyDisplay Fallback"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: "-1.44px"
  body:
    fontFamily: jobyText, "jobyText Fallback"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
    letterSpacing: "-0.14px"
  nav:
    fontFamily: jobyText, "jobyText Fallback"
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 8px
  sm: 16px
  md: 160px
  pill: 9999px
spacing:
  s1: 7px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 14px
  s6: 14.5px
  s7: 15px
  s8: 16px
  s9: 24px
  s10: 24.5px
components:
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.ink-2}"
    textColor: "{colors.page-body}"
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0.3) 0px 16px 47.6px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
---

## Overview

Joby Aviation (https://www.jobyaviation.com/) is the electric air-taxi company's marketing site; the page title is "Joby Aviation". The measured page is 1280px wide and 27092px tall but has only 349 visible elements, because most of the scroll is long, mostly empty sections that carry large animated type and imagery. The capture shows a full-viewport hero photograph with a rounded lower edge: a passenger seen in dark silhouette looking out of an aircraft window at a sunlit downtown skyline, with the centered headline "Skip traffic. Time to fly." in cream. A small curved Joby mark sits at top centre, a two-line hamburger icon at left and "Investors" with a diagonal arrow at right. A blue promotional card in the upper right announces "Electric Skies: Joby's U.S. Tour 2026" with a flat illustration of the aircraft and a round cream arrow button. Under the hero, on a flat saturated blue field, the line "The future of aviation is coming soon." is centered in small cream text.

Other headings measured further down include "Nowhere to go but Up" at 125.757px. The voice is aspirational, short and punchy: two-sentence hero lines, present-tense promises, a single sky-blue world. The page pairs warm cinematic photography with a flat blue field.

The extraction hid one sticky element as a consent overlay; the capture itself shows no popup.

## Colors

The CSS custom properties name the palette: --color-blue #007ae5, --color-white #f5f4df, --color-black #0e1620, --color-dark-blue #1c3f99, --color-dark-blue-ui #083e6f, --color-light-blue #7cc3ff, --color-orange #eb6110, --color-pink #ffd9c9, --color-lightest-red #fb9da6, --color-grey #c7c6b6, plus translucent blacks (--color-black-faint #0e162080, --color-black-muted #0e162033).

- **canvas #007ae5** is the Joby blue, the largest background by far (weight 20641) and the field under the hero.
- **ink #f5f4df** (named "white" in the CSS, in fact a warm cream) is the text color nearly everywhere (199 weighted characters); **page-body #f5f4df** and **primary #f5f4df** use the same value (the page-body background area is 6312, and the cream pill and arrow button are the main call-to-action shape). No separate brand action color was measured.
- **surface-3 #1c3f99** is the deep blue (628) for panels and the illustration color.
- **ink-2 #0e1620** is the near-black (84 text weight) used on the nav bar background and dark text on cream.
- **hairline #ffffff4d** is the 30%-alpha white border on cards.
- Also measured as backgrounds and not tokenised: #eb6110 (orange accent, 82) and #ffd9c9 (pink tint, 59).

The page has no pure white and no pure black; both are warm-shifted (#f5f4df and #0e1620).

Of the secondary named colors, light blue #7cc3ff, grey #c7c6b6, lightest red #fb9da6 and pink #ffd9c9 are declared in CSS; only the pink and the orange appeared in the measured backgrounds, so the others are available but unverified on the page. The transparency steps (#0e162033 at 20% and #0e162080 at 50%) are declared for overlays on photography.

## Typography

Two variable families, both loaded at weights 100 to 900: "jobyDisplay" (with a "jobyDisplay Fallback" face) for headings and "jobyText" (with "jobyText Fallback") for text. A "Joby Sans Display" family name also shows up in measured characters (37).

- **display** jobyDisplay 80px / 80px, weight 550, letter-spacing -2.4px (-0.03em).
- **heading** 125.757px / 125.757px, weight 550, letter-spacing -3.77272px: the oversized statement lines.
- **subheading** 48px / 48px, weight 500, letter-spacing -1.44px.
- **display-mobile** 49.92px / 47.424px, weight 550, letter-spacing -1.4976px.
- **body** jobyText 14px / 18.2px, weight 400, letter-spacing -0.14px.
- **nav** jobyText 16px, weight 400 (the "Investors" nav label measures weight 500).

Line-heights equal the font size or are below 1.0 on display type, and tracking is a constant -3% of the size, so headlines are tight and dense. Weight 550 is a non-standard variable-font value. The fonts are loaded from the site itself; for prototypes any neutral variable grotesque can stand in, with different metrics.

## Layout

The CSS declares an explicit grid: --design-width 1600, --grid-columns 16 (6 on mobile), --gutter-width 1.6rem (0.8rem on mobile) and --base-padding 4rem, with --base-font-size 10px so that 1rem is 10px. Column width is computed as (100vw minus two base paddings minus the gutters) divided by the column count. Content is centered over the hero and hangs from top corners: menu left, logo centre, link right.

Spacing tokens measured: 7px, 8px, 10px, 12px, 14px, 14.5px, 15px, 16px, 24px and 24.5px. Sections are tall and loosely populated; text and images stagger into view using declared motion variables (--title-stagger 83ms, --title-duration 0.667s, --text-duration 0.5s), but motion was not measured further here.

## Elevation & Depth

Two shadows were measured: rgba(0, 0, 0, 0.3) 0px 16px 47.6px 0px on the promo card, a deep, wide, soft drop; and a near-zero rgba(0, 0, 0, 0) 0px 1.837px 1.837px 0px. Most depth comes from photography and from the hero's rounded dark mass hovering above the blue field.

## Shapes

Radii measured: 16px (4), 160px 160px 0 0 (3, large top-rounded panels), 8px (3), 0 0 131.2px 131.2px (1, the hero's rounded bottom), 50% (1). Tokens: xs 8px, sm 16px, md 160px, pill 9999px. The promo card uses 16px, the hero bottom uses a big 131.2px curve, and the arrow button is a circle. The big radii give the page a capsule-like, aircraft-window silhouette.

## Components

The extractor found no filled buttons or inputs. Declared components:

- **link / nav-link**: cream (#f5f4df) text, jobyText 16px.
- **nav**: #0e1620 background with cream text (the sticky bar).
- **card** (the Electric Skies promo): blue canvas (#007ae5) background, cream text, 16px radius, 30% white border and the 0 16px 47.6px soft shadow, with a round cream arrow button.
- **hero**: dark photography container with a 131.2px bottom radius.

Hover was recorded on the promo link: the before/after properties show no change in color, background or border.

## Design System Architecture

No public design system or brand guidelines for Joby are linked from the home page, so none is cited. The shipped CSS gives a clear de-facto system through custom properties: named colors (`--color-blue`, `--color-white`, `--color-dark-blue-ui`), grid variables (`--grid-columns`, `--gutter-width`, `--base-padding`, `--design-width`), a root font size (`--base-font-size: 10px`), motion timing (`--title-duration`, `--stack-delay`, `--line-duration`) and named easings (`--ease-out-back`, `--ease-in-out-quint`, `--ease-power2-inOut`). Text-trim variables (`--lt-trim-start`, `--lt-content`) trim leading space from display type. Source: the measured root variables in web/data/extracted/joby.json from https://www.jobyaviation.com/.

## Do's and Don'ts

- Do keep the world in one saturated blue (#007ae5) with cream (#f5f4df) text.
- Do set headlines at weight 550 with -3% tracking and line-height equal to the size.
- Do use very large radii (131.2px to 160px) on photographic masses and 16px on cards.
- Do use warm, cinematic, human photography inside the dark hero.
- Do use the grid of 16 columns with a 1.6rem gutter.
- Don't use pure white or black; use the warm cream and #0e1620.
- Don't add heavy borders; the only border measured is 30%-alpha white.
- Don't introduce an additional action color; orange (#eb6110) and pink are accents only.

## Responsive Behavior

Measured in the 390px mobile pass: h1 49.92px (from 80px) with 47.424px line-height and letter-spacing -1.4976px; body 14.56px. The CSS declares a 6-column mobile grid and a 0.8rem mobile gutter. Other mobile layout behavior is not measured.

## Iteration Guide

1. Start with #007ae5 and cream text.
2. Add a dark photo hero with a 131.2px bottom radius.
3. Set a two-line headline at 80px / 80px, -2.4px tracking.
4. Add a 14px text line below it and a 16px nav.
5. Use 16px-radius cards with soft shadows for promos.
6. Check that headline line-height equals the font size and tracking is -3%.
7. Keep a single call-to-action shape: a circular cream arrow button.
8. Run `node web/scripts/verify-designs.mjs --slug=joby`.
