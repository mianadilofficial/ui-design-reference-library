---
version: alpha
name: "Wild Week – Athens (2026)"
category: "Culture & Events"
description: "Event page for Wild Week Athens 2026: bento tile mosaic on #cbcbcb and #dcdbd5 greys, one saturated blue #0755bb for all text, Albertus Nova Light 18px uppercase titles with 0.72px tracking, 10px body, 4px and 8px radii and classical plaster relief imagery."
colors:
  canvas: "#cbcbcb"
  page-largest: "#dcdbd5"
  ink: "#0755bb"
  primary: "#0755bb"
  surface-3: "#ffffff"
  ink-3: "#0755bb52"
typography:
  display:
    fontFamily: "\"Albertus Nova Light\", \"Albertus Nova Light Placeholder\", sans-serif"
    fontSize: 18px
    fontWeight: 300
    lineHeight: 21.6px
    letterSpacing: 0.72px
    textTransform: uppercase
  body:
    fontFamily: "\"Albertus Nova Light\", \"Albertus Nova Light Placeholder\", sans-serif"
    fontSize: 10px
    fontWeight: 300
    lineHeight: 15px
    letterSpacing: 0.1px
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 13.88px
  s10: 14px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 24px
---

# Wild Week – Athens (2026)

## Overview

week.wild.plus/athens-26 is the information page for Wild Week Athens, a team trip held March 26 to 29, 2026 for 27 "mythical creatures" from 11 countries at the Titania Hotel Athens, Panepistimiou 52. The page title is "Wild Week – Athens (2026)" and the tagline in the copy is "No work, no agenda, just a week to remember." The page is 6065px tall at 1280px wide and is built as a Framer-style tile mosaic: a giant blue hand-lettered "WILD WEEK" with a ceramic amphora at its centre in the top tile, then a grid of tiles in which a "THE FACTS" card, plaster bas-relief photographs, a solid blue Ionic column, dark relief panels with smoke, and a "WHAT YOU SHOULD BRING" list sit side by side with thin gutters.

The visual idea is Greek antiquity rendered as soft, light-grey plaster sculpture with one saturated colour: Klein-like blue `#0755bb`. Text is set small, in uppercase and light weights, with roman-numeral list markers, so that the tile imagery carries the page.

The remainder of the opened page is practical copy under the headings "Thursday, Friday, Saturday" (a day-by-day agenda with times for arrival, dinners and an Acropolis visit) and "FAQs" (costs covered by Wild versus paid personally, how to submit receipts, where to upload photos, and who to message on Slack), and it closes with "See you soon". The microcopy voice is friendly and informal, mixing logistics with mythology-themed jokes such as calling attendees "mythical creatures".

## Colors

- `canvas` `#cbcbcb` is the page background and the gutter colour between tiles. `page-largest` `#dcdbd5` is the warm light grey that fills the most area (6165 units) and is the tile colour; `#dddcd7` and `#ddddd6` are near-identical tile variants and `#e8e8e8` is a lighter panel (349 units). `surface-3` `#ffffff` is white (905 units), used for inset cards.
- `ink` and `primary` are the same blue, `#0755bb`: it colours 5339 measured text characters, the Ionic column illustration, the wordmark and the play button. `ink-3` `#0755bb52` is the same blue at about 32% alpha, used for faint list rules (101 characters).
- The site's own variables record the palette: `#cbcbcb`, `#e8e8e8`, `#0755bb`, `#c8d4e340`, `#dcdbd5`, `#0755bb52`, `#fff`, plus a darker blue `#054496`, which is the measured link hover colour (`rgb(5, 68, 150)`), and `#0817a3`.
- Dark charcoal panels with smoke in the capture are photographic or rendered assets and are not tokens.

## Typography

Albertus Nova Light (weight 300) carries almost all text: 5483 of about 5700 characters. The display role is 18px, weight 300, line height 21.6px, letter spacing 0.72px, uppercase, used for tile titles such as "THE FACTS" and "WHAT YOU SHOULD BRING" (the same size on the measured mobile pass). The body role is 10px, weight 300, line height 15px, letter spacing 0.1px, sentence case. By character count 10px dominates (3811 characters), followed by 14px (1111), 12px (423) and 9px (256, with 0.09px tracking); 24px with 0.96px tracking appears for 22 characters.

Albertus Nova Regular (weight 400, 65 characters) and Albert Sans (weight 500, 109 characters at 12px with -0.24px tracking) are the supporting faces. Each family has a declared "Placeholder" fallback stack, the Framer font-loading pattern. Albertus Nova is a commercial typeface in the Albertus lineage; a flared humanist serif or incised capitals in a light weight is the closest alternative.

## Layout

The layout is a bento mosaic on a `#cbcbcb` ground. Tiles are separated by gutters of a few pixels (the 4px and 8px values measured in the spacing scale) and vary in size: one full-width hero tile, then pairs and triplets of portrait and landscape tiles. Text tiles pair a title at the top with a list or table pinned to the bottom. Facts are set as label and value rows with single-letter keys (D. date, P. participants, H. hotel, I. info) and values right-aligned: "March 26 – 29, 2026", "27 Mythical Creatures from 11 Countries", "No Work, Only Fun". The bring list is two columns of numbered rows (I Passport, II Flight Tickets, IV Credit Card + Some Cash (EUR), V Refillable Water Bottles and so on) with alternating faint stripes. The measured spacing values are 2px, 4px, 5px, 6px, 7px, 8px, 10px, 12px, 13.88px and 14px.

## Elevation & Depth

No box shadows were measured. All relief is in the imagery: embossed plaster figures, soft-lit marble, and an Ionic column drawn with a soft inner edge. UI tiles themselves are flat and separated only by the darker `#cbcbcb` gutters, with a thin lighter inset border around the facts card.

## Shapes

Radii are small and consistent: `xs` 2px (1 use), `sm` 4px (54 uses, the most common, for tiles and list stripes), `md` 8px (18 uses, for cards) and 50% (36 uses) for circular elements such as the play button and round media. One element uses 999px. Tiles are therefore softly squared, and the circular play control stands out against them.

## Components

- **card** (the Facts tile): `#dcdbd5` background, blue `#0755bb` text, 8px radius, 24px padding, with a thin inset frame, a centred 18px uppercase title and right-aligned rows.
- **link** (venue link "Titania Hotel Athens"): blue 10px light text, underlined; hover colour `#054496`.
- **list row**: roman-numeral key at the left, item right-aligned, on faint alternating stripes.
- **play button**: a solid blue circle with a white triangle over a plaster medallion tile (the video tile at the bottom of the capture).
- **illustrated tiles**: the Ionic column, the amphora and relief panels, with no captions.

No buttons, inputs, navigation bar or footer chrome were measured; the page has no nav roles in the extraction.

## Design System Architecture

No public design system or brand guideline is linked from https://week.wild.plus/athens-26: the opened page links only to Google Maps venue links, the hotel site and a shared Drive folder. The de-facto system is the Framer project's colour variables (`--token-…` custom properties holding `#cbcbcb`, `#e8e8e8`, `#0755bb`, `#dcdbd5`, `#0755bb52`, `#054496`, `#0817a3`, `#c8d4e340` and white) applied through three font families. Tokens in this file were measured from the rendered page.

## Do's and Don'ts

- Do use one blue, `#0755bb`, for all text and the single illustrated accent, against warm greys.
- Do set text small, light and uppercase for titles, with 0.72px tracking.
- Do mark list rows with roman numerals or letter keys and right-align the values.
- Do keep tiles flat with 4px or 8px radii and use the 50% radius for the play control.
- Don't add shadows; none were measured.
- Don't add a second hue; the dark panels are imagery.
- Don't use bold weights; the measured weights are 300, 400 and 500.

## Responsive Behavior

The extraction's mobile pass recorded the title role "THE FACTS" at 18px with a 21.6px line height and 0.72px tracking, 122px wide (against 329px on desktop). How the tile mosaic reflows, and any other mobile behaviour, were not measured. Breakpoints are not measured.

## Iteration Guide

1. Start with `#cbcbcb` gutters, `#dcdbd5` tiles and `#0755bb` for all text.
2. Set titles in Albertus Nova Light 18px uppercase with 0.72px tracking and body at 10px with 0.1px tracking.
3. Lay out tiles in a bento mosaic with 4px radii, and cards with 8px radii and 24px padding.
4. Use classical relief imagery in light grey plus one solid blue illustration.
5. Re-run the extractor and gate after changes.
