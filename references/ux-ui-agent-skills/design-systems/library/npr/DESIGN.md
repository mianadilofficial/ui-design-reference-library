---
version: alpha
name: "NPR"
category: "News & Publishing"
description: "NPR home page measured live: white #ffffff canvas, NPR blue #0a61db pill buttons with 60px radius, NPRSans headlines at 18px/500, NPRSerif 14px/21px teaser copy, and dense news cards with 4px image corners."
colors:
  canvas: "#ffffff"
  ink: "#575757"
  primary: "#0a61db"
  on-primary: "#ffffff"
  surface-3: "#737373"
  ink-strong: "#212121"
  ink-4: "#d4d4d4"
typography:
  display:
    fontFamily: NPRSans, Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 22.5px
  subheading:
    fontFamily: NPRSans, Helvetica, Arial, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  body:
    fontFamily: NPRSerif, Georgia, serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: 0.28px
  button:
    fontFamily: NPRSans, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: 0.84px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 5px
  xl: 6px
  2xl: 7px
  3xl: 8px
  4xl: 15px
  cta: 60px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 5.5px
  s7: 6px
  s8: 7px
  s9: 8px
  s10: 9px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 0px 10px
    height: 30px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 0px 10px
    height: 30px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    padding: 0px 18px 0px 0px
  nav:
    textColor: "{colors.ink-strong}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

# NPR

## Overview

npr.org is a dense news front page. The measured page is 10692px tall at 1280px width with 1987 visible elements, and it is built as a continuous stream of story cards: a lead story with a large photograph on the left, a column of smaller stories on the right, then rows of four-up cards, a horizontal "NPR Shorts" video carousel with portrait video tiles, a "Pick Your NPR Station" panel, and further topic bands further down. Each card pairs an image with a small uppercase label (for example WEATHER, POLITICS, NATIONAL, GLOBAL HEALTH), a sans-serif headline, and sometimes a serif teaser line. Small blue pill buttons carry a play icon and a duration (for example 7:52) next to a "+ PLAYLIST" outline button.

The capture also shows a "Choose your local station" account dialog with a grey scrim over the top of the page. That dialog and scrim are not part of the brand system and are not documented as tokens. Their presence is why the measurement was re-run once with `--no-motion` for this slug.

The voice is journalistic and plain: headlines state facts ("Isaias strengthens into the first hurricane of the Atlantic season"), with kicker labels such as "ONLY ON NPR", "ANALYSIS" and "PERSPECTIVE" in small blue tags.

## Colors

The palette is neutral with one blue accent. Background area: `#ffffff` (6980 weight), `#000000` (1019), `#737373` (227), `#0a61db` (84), `#333333` (76), `#575757` (64), `#063679` (41). Text color by characters: `#575757` (4840), `#212121` (4251), `#ffffff` (1270), `#d4d4d4` (655), `#0a61db` (614), `#737373` (307).

- `canvas` #ffffff: the page background.
- `ink` #575757: the most-read text color, used for teaser and body copy.
- `ink-strong` #212121: headline text (the measured h1 and h2 color).
- `primary` #0a61db with `on-primary` #ffffff: the blue of the play and tag pills and of links; the nav link color is also this blue.
- `surface-3` #737373 and `ink-4` #d4d4d4: mid and light greys for metadata and light text on dark areas.

The page declares 181 CSS custom properties on the root, including hue ramps such as `--blue-400`, `--blue-500`, `--orange-600`, `--teal-700`, `--magenta-600`, `--violet-700` and `--green-900`, plus `--bg-primary` and `--spacing-12`. The measured rendering uses only the blue from that set in its main controls. The black (#000000) background area is large in the capture; because the capture also contains a scrim, it is not documented as a brand surface token.

## Typography

Two families: NPRSans (loaded in 400, 500, 700 and 400 italic) and NPRSerif (400 and 700 italic). By character count NPRSans carries 7386 characters and NPRSerif 3854; a small amount of Arial (148) comes from form controls.

- `display` NPRSans 18px / 22.5px, weight 500: story headlines (h2 in cards). The mobile 390px pass measured the same 18px / 22.5px / 500 h2.
- `subheading` NPRSans 32px / 40px, weight 700: the largest heading size in the measured roles, used for section and featured titles.
- `body` NPRSerif 14px / 21px, weight 400, letter-spacing 0.28px: teaser paragraphs.
- `button` NPRSans 14px / 14px, weight 400, letter-spacing 0.84px, uppercase: nav labels and pill buttons.

Size frequency by characters: 14px (6159), 18px (1888), 16px (1666), 22px (1297), 12px (869), 24px (142). The ratio is small and tight: a 14px reading size, 18px headlines, and rare larger headings, which gives the page its newspaper density.

## Layout

The page uses a centered content column rather than full-bleed bands; the capture shows the left rail of stories, a right rail with a "Sponsor Message" slot, and a thin top header with the NPR logo, a Donate button and an on-air stream block at the right. Measured paddings are 8px (most common), 10px, 16px, 20px, 40px, 5px and 15px. The `spacing` tokens from the generator (1px to 9px) record the small-unit values observed; the layout rhythm is built from 8px, 16px and 20px paddings. Four-up rows of cards use equal-width image tiles with text below, and the NPR Shorts carousel uses taller portrait tiles with a circular arrow control at the right edge.

## Elevation & Depth

Shadows are minimal: `color(srgb 0.07 0.07 0.07 / 0.2) 0px 0px 2px 0px` on six elements and the same color at 4px blur on two. These are faint hairline halos on controls and panels; there are no deep drop shadows. Separation comes from whitespace and 1px borders (the "Pick Your NPR Station" panel is a thin-bordered white box).

## Shapes

Measured radii: 60px (62 elements, the pill buttons and tags), 4px (39, image and card corners), `0px 0px 4px 4px` (24, bottom-rounded corners), 15px (24), 20px (22), 6px (10) and 2px (5). The tokens are `xs` 2px, `sm` 3px, `md` 4px, `lg` 5px, `xl` 6px, `2xl` 7px, `3xl` 8px, `4xl` 15px and `cta` 60px. Images and cards are near-square with 4px corners; the interactive controls are capsules.

## Components

- **button-primary**: blue `{colors.primary}` background, white 14px uppercase label with 0.84px tracking, 60px radius, 30px height, padding 0px 10px. The measured example is a play button with a duration such as 7:52 or 3:31.
- **button-secondary**: the generator records the same blue pill; in the capture the neighbouring "+ PLAYLIST" control is an outline pill.
- **link / nav-link**: uppercase 14px labels; the section nav (NEWS, CULTURE, MUSIC, PODCASTS) is white text on the dark navigation bar, and the nav link color is the blue.
- **footer**: white background with `{colors.ink}` text.

Tags such as ANALYSIS and PERSPECTIVE are small blue filled rectangles with white uppercase text, visible in the capture.

## Design System Architecture

No public NPR design system or brand guideline was opened. The de-facto system is the root custom properties (181 variables) on npr.org: colour ramps named by hue and step (`--blue-500`, `--teal-700`), semantic backgrounds (`--bg-primary`, `--bg-secondary-hover`), spacing variables (`--spacing-12`) and podcast colour variables such as `--podcast-location-six`. Source of the measurement: https://www.npr.org/ (recorded in `web/data/extracted/npr.json`). Two typefaces, NPRSans and NPRSerif, are web fonts loaded by the site.

## Do's and Don'ts

- Do set headlines in NPRSans 500 at 18px and teasers in NPRSerif 14px.
- Do use the blue only for actions: play, playlist, links and tags.
- Do use 60px capsules for buttons and 4px corners for images.
- Don't style the account dialog, its blue "Create Account" bar or the grey scrim as brand UI.
- Don't add colour ramps beyond the measured blue to the news cards.
- Don't use heavy shadows; the measured shadows are 2px and 4px hairlines.

## Responsive Behavior

The 390px pass recorded the h2 headline at 18px / 22.5px weight 500, the same as desktop, and a most-read mobile size of 14px (5823 characters) then 18px (3189). The measured card width of the headline changes from 449px on desktop to 358px on mobile. Column counts, navigation behavior and breakpoints were not measured.

## Iteration Guide

1. Start with white canvas, #212121 headlines, #575757 teasers.
2. Use NPRSans for headlines and labels, NPRSerif for teasers.
3. Add blue pills (60px radius, 30px high) only where a play or save action exists.
4. Keep cards image-first with a small uppercase kicker above a two or three line headline.
5. Re-run `node web/scripts/verify-designs.mjs --slug=npr` after each edit.

### Content and imagery notes

The capture shows documentary photography at the head of each card: a satellite image of a hurricane, portraits of interview guests wearing headphones in the NPR Shorts carousel (with the show name printed in the corner of the tile, for example "All Things Considered" and "Morning Edition"), an illustrated colorful silhouette image, and photojournalism of events. Cards carry a small grey source line (for example a member station name such as WNYC or GBH News Boston) in uppercase under or above the headline. The "Sponsor Message" labels mark ad slots in a small grey sans-serif; ads and the sponsor frames are not part of the brand system. The logo is the three-block n, p, r lockup at the top left in red, black and blue on white.
