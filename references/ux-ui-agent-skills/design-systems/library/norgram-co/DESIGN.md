---
version: alpha
name: "Norgram"
category: "Agencies & Studios"
description: "Norgram (norgram.co) design-studio portfolio: Helvetica Now Display at weight 400 with -0.72px tracking, a 77.4589px heading, white #ffffff project list beside #141414 and #1f1f1f panels, #efefef and #777777 text, 4px image radii and translucent #55555599 news cards."
colors:
  canvas: "#ffffff"
  page-largest: "#141414"
  ink: "#000000"
  primary: "#efefef"
  on-primary: "#cecece"
  surface-3: "#1f1f1f"
  ink-secondary: "#777777"
  ink-6: "#5e5e5e"
  news-card-bg: "#55555599"
  card-light: "#f5f5f5"
  ink-faded-dark: "#909090"
typography:
  display:
    fontFamily: "\"Helvetica Now Display - Regular\""
    fontSize: 77.4589px
    fontWeight: 400
    lineHeight: 85.2048px
    letterSpacing: "-0.72px"
  display-mobile:
    fontFamily: "\"Helvetica Now Display - Regular\""
    fontSize: 43.8148px
    fontWeight: 400
    lineHeight: 48.1963px
    letterSpacing: "-0.11px"
  body:
    fontFamily: "\"Helvetica Now Display - Regular\""
    fontSize: 36px
    fontWeight: 400
    lineHeight: 39.6px
    letterSpacing: "-0.72px"
  caption:
    fontFamily: "\"Helvetica Now Display - Regular\""
    fontSize: 10px
    fontWeight: 400
    lineHeight: 11px
  link:
    fontFamily: "\"Helvetica Now Display - Regular\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: "-0.065px"
rounded:
  xs: 2px
  sm: 4px
  md: 4.08px
  lg: 7px
  xl: 10px
  2xl: 26px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 8.15px
  s8: 9px
  s9: 11px
  s10: 12px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.on-primary}"
  footer:
    textColor: "{colors.ink-secondary}"
    padding: 0px 12px
  news-card:
    backgroundColor: "{colors.news-card-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.caption}"
    rounded: "{rounded.xl}"
    padding: 3px
---

# Norgram

Norgram (https://www.norgram.co/, title "Norgram — Design Studio") is a Danish design studio. The measured page is a two-panel portfolio app: a white project index on the left, dark editorial panels on the right, one grotesk family (Helvetica Now Display) set small and tightly tracked, and almost no color apart from photography. This document records what was measured.

## Overview

The page height measured 800px and the capture is a 960 by 600 viewport, so the page behaves like an application with panels that scroll internally; only what is visible in that first viewport is described. At the left is a white project list: each project is an image card followed by a row of metadata with small previous and next arrow buttons, the project name with a grey subtitle (for example "Even Realities / Undisturbed Connections" and "Mitte® / Better than before"), a category ("Brand Identity"), an index (01.19, 01.20) and a year (2024, 2017), plus a small "+" button. At the right are stacked dark panels: a large heading "Forming Essentials", a black-and-white portrait photograph, and a dark text panel headed by small "N" and "I" chips, the label "Studio", "All enquiries" and the email "hi@norgram.co".

The statement in the dark panel reads: "Norgram® is a design studio driven by collaboration on new ideas, essential aesthetics, and meaningful impact. Breaking away from big agencies, we strive to make every project reflect our very best. Rooted in Danish design principles, we aim for simplicity, functionality, and timeless quality across brand identity, digital experiences, web design, and apps. Based in Denmark but working globally, our clients include..." The page also carries small news cards ("5 months ago", "10 months ago", with a "Close" control) such as "Sebastian Gram joins Danish Design Awards" and "Recognition for Norgram.co".

## Colors

- `page-largest` #141414: the dark ground and the largest measured background (2401 units); `surface-3` #1f1f1f: the raised dark panel (118 units).
- `canvas` #ffffff: the white project list (1024 units); `card-light` #f5f5f5 (`--color-card`) is the card color variable.
- `ink` #000000: text on white (589 characters), `--color-foreground`.
- `primary` #efefef: text on the dark panels (1046 characters); `on-primary` #cecece: dimmer text on news cards (339 characters).
- `ink-secondary` #777777: the most-read text color overall (1707 characters), `--color-foreground-faded`, used for subtitles and metadata on white; `ink-6` #5e5e5e: a darker faded grey (45 characters).
- `news-card-bg` #55555599: the translucent grey fill of the news cards (60% alpha, 61 units); a close control measured #3f3f3f66 with text #f3f3f3.
- The CSS also defines `--color-foreground-faded-light` #aaa and `--color-foreground-faded-dark` #909090; #909090 is recorded as a token.

The palette is strictly neutral; an accent `0 0 0 1px #00aeff33` ring appears in the CSS corpus for a focus or selection outline but was not observed in use.

## Typography

One working family: Helvetica Now Display, loaded as Regular (3852 characters) and Medium (10 characters); a trial serif, "PS Times Trial", is also loaded but was not measured in use. Everything is weight 400 except 10 characters at 500.

- `display`: 77.4589px / 85.2048px, weight 400, letter spacing -0.72px (the heading "Forming"). Mobile: 43.8148px / 48.1963px with -0.11px.
- `body`: 36px / 39.6px, -0.72px (the studio statement). Mobile: 22px / 24.2px.
- `link`: 12px / 14px, -0.065px (the project metadata, 2724 characters; 2714 of them at -0.065px). Mobile measures 13.5px for this size (1690 characters).
- `caption`: 10px / 11px (465 characters), used on news cards.

Tracking is negative at every size (about -1% at 36px and below -0.9% at 77px). Helvetica Now Display is a commercial family; no open substitute was identified from a source, so fall back to the generic sans-serif.

## Layout

The layout is a split screen: a left column (project cards stacked vertically with a metadata row each) and a right column of stacked panels, both flush to the viewport edges with a small gutter between. The metadata row is a four-column grid: arrow buttons, name and subtitle, category, index and year, aligned to the card's width. Measured gaps: 8px (143 elements), 1px (12), 6px (6), 8.15287px (4), 16px and 11px. Paddings: 8px (82), 12px (60), 9px (18), 30px (14), 3px, 5px and 7px. The footer text padding is 0px 12px.

## Elevation & Depth

No box shadow was measured on rendered elements. Depth is purely tonal: #ffffff list versus #141414 and #1f1f1f panels, and 60%-alpha grey news cards over imagery. Image corners and panels are separated by a small gutter rather than lines; no border colors were measured.

## Shapes

Radii by frequency: 4.07643px (239 elements, the image cards and panels), 4px (18), 2px (13), 7px (6), 26px (5), 10px (3, the news cards) and 50% (3, round chips such as "N" and "I"). Token scale: xs 2px, sm 4px, md 4.08px, lg 7px, xl 10px, 2xl 26px, pill 9999px. Small control buttons (the previous and next arrows and the "+") are small rounded squares with a light grey fill.

## Components

- Project card: a photograph with a 4.08px radius over a four-column metadata row: arrow controls, project name in #000000 with a #777777 subtitle, category and index and year in 12px.
- News card: translucent #55555599 fill, #cecece 10px text, 10px radius, 3px padding, a timestamp line ("5 months ago"), a "Close" control and a headline; 303px by 79px and 279px by 72px in the measured instances.
- Close control: #3f3f3f66 fill with #f3f3f3 text.
- Dark text panel: #1f1f1f fill, #efefef 36px statement, small "Studio" and "All enquiries" labels in 12px and the email link.
- Chips: round "N" and "I" markers at the head of the panel.

## Design System Architecture

No public design system or brand guideline was opened, and none was linked in the extraction. The shipped CSS has a small semantic variable set on `:root`: `--color-foreground` #000, `--color-foreground-faded` #777, `--color-foreground-faded-light` #aaa, `--color-foreground-faded-dark` #909090, `--color-number` #000, `--color-background` #fff, `--color-background-faded` #fff and `--color-card` #f5f5f5. Type sizes and spacing are not exposed as variables, so those come from measured computed styles.

## Do's and Don'ts

- Do set text small and tightly tracked in Helvetica Now Display, with the largest type at 77.4589px and -0.72px.
- Do stay neutral: #ffffff, #141414, #1f1f1f, #efefef and greys; let photography provide color.
- Do give images and panels a 4px radius and use translucent grey for news cards.
- Do present metadata as a quiet four-column row.
- Don't add shadows, borders or accent colors.
- Don't treat the news cards as buttons; they are announcement cards.
- Don't use bold; weight 400 is used almost everywhere.

## Responsive Behavior

Measured at the 390px mobile pass: the heading is 43.8148px / 48.1963px with -0.11px tracking (77.4589px on desktop), the statement 22px / 24.2px (36px on desktop), the news-card text stays 10px / 11px, and the metadata size is 13.5px (1690 characters). Other mobile sizes: 22px (656), 10px (465), 43.8148px (17), 14px and 13px. Whether the two panels stack, and how the news cards position, was not measured.

## Iteration Guide

1. Start with a white left list and dark right panels (#141414, #1f1f1f).
2. Set everything in Helvetica Now Display at weight 400, with negative tracking at 36px and above.
3. Keep metadata at 12px in #777777 on white, #efefef text on dark.
4. Use 4px-radius images; keep news cards translucent.
5. Re-run the gate after renames; do not change measured values.

## Imagery and Voice

Photography is monochrome or muted and treated as the main material: a close black-and-white portrait, and a brand-identity project shown as an outdoor poster in a glass bus shelter. Copy is calm and factual, in the first person plural ("we strive", "we aim for simplicity, functionality, and timeless quality"), and uses compact labels for navigation and metadata ("Studio", "All enquiries", "Brand Identity"). Years and two-part indexes (01.19, 01.20) give the list an archival feel.
