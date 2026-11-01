---
version: alpha
name: Fontshare
category: "Design & Creative Tools"
description: "Fontshare, the Indian Type Foundry's free-font library: a cream #ffffe3 canvas, near-black #10100e ink, Passenger-Sans 12px/16px UI, 120px live specimens in each typeface (Satoshi, Clash Display, General Sans), hairline #c0c0ab rules, a black active tab and 9999px pill toggles — no shadows."
colors:
  canvas: "#ffffe3"
  ink: "#10100e"
  primary: "#10100e"
  on-primary: "#ffffe3"
  surface-footer: "#f8f8dd"
  gray-l1: "#e8e8cf"
  gray-d2: "#30302b"
  ink-faint: "#c0c0ab"
  ink-muted: "#606055"
typography:
  display:
    fontFamily: _Satoshi_Variable
    fontSize: 120px
    fontWeight: 400
    lineHeight: 144px
  display-mobile:
    fontFamily: _Satoshi_Variable
    fontSize: 60px
    fontWeight: 400
    lineHeight: 66px
  nav:
    fontFamily: Passenger-Sans, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 19px
  input:
    fontFamily: Passenger-Sans, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
  body:
    fontFamily: Passenger-Sans, sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 14px
rounded:
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 5px
  s4: 6px
  s5: 10px
  s6: 15px
  s7: 20px
  s8: 25px
  s9: 40px
  s10: 60px
components:
  nav:
    textColor: "{colors.canvas}"
    padding: 0px 40px
  nav-tab-active:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    height: 160px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 59px
  specimen-row:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    border: "1px solid #c0c0ab"
    padding: 0px 40px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-faint}"
    typography: "{typography.body}"
    padding: 0px 40px
---

## Overview

Fontshare (https://www.fontshare.com/) is a free font library; its footer reads "Copyright © 2021 — 2026 Indian Type Foundry", and every specimen is captioned "Designed by Indian Type Foundry". The site is a type tool first and a brand page second: there is no hero, no photography, no marketing headline. The home page is the catalogue itself — a stack of full-width rows, each showing one family's name set at 120px in that family, so the page's visual identity is whatever typeface is on screen.

The frame around the specimens is deliberately quiet: a pale cream background, near-black text, a strict grid of thin warm-grey rules, and tiny 12px labels. The header is a row of tall square cells — the "Fontshare™" wordmark, then "Fonts 100", "Pairs 59", "Licenses", a menu icon and a "No styles selected" status cell. The active "Fonts" cell is solid black with cream text. Below sit filter controls (Search, Your Text, Categories, Personality, Properties, a 120px size slider with a round handle, Cities / Excerpts / Names preview modes, theme toggles and "Reset All"), a count line ("100 · List view · Grid view · Top 30 · Hot 30 · Variable … Sort by New · Popular · Trait · Alphabetical"), then the specimen list: Satoshi, Clash Display, General Sans, Cabinet, Ranade, Chillax, Clash Grotesk and on.

The voice is functional and terse: counts, labels, "Variable", "Closed Source", "10 styles".

## Colors

The CSS defines the palette by role in root custom properties:

- **canvas #ffffe3** — `--theme-b-color` / `--white-b-color` / `--inverted-color`, the cream page colour; about 90% of the capture is this one colour.
- **ink #10100e** — `--black-b-color` / `--current-color`, the near-black of specimens and labels.
- **primary #10100e** with **on-primary #ffffe3** — there is no coloured CTA on the page; the strongest interactive state is the black active header tab with cream text, so the action colour is the ink itself.
- **surface-footer #f8f8dd** — `--gray-l2-color`, the footer band.
- **gray-l1 #e8e8cf** — `--gray-l1-color`, light rules and inactive fills.
- **ink-faint #c0c0ab** — `--gray-b-color` (also `--scrollbar-primary`), the most common border colour (104 elements) and the colour of most small labels; it accounts for 907 of the measured text characters.
- **ink-muted #606055** — `--gray-d1-color`.
- **gray-d2 #30302b** — `--gray-d2-color`, darker rules; the CSS also has `--gray-d3-color` #191815.

Pastel fills measured with zero area — #fff1b5, #ffcfcf, #c4fdc7, #bafbff — are present in the DOM but not visible in the default state.

## Typography

The UI face is **Passenger-Sans** (loaded as a variable font, weights 100–900). It sets everything that isn't a specimen:

- **body** — 12px / 500 / 14px; 12px is by far the most frequent size (1,739 characters).
- **nav** — 16px / 500 / 19px for header cells.
- **input** — 16px / 400 / 18.4px for the search and custom-text fields.

The specimens are set in the fonts being shown, each loaded under an underscore-prefixed variable family: `_Satoshi_Variable`, `_Clash_Display_Variable`, `_Clash_Grotesk_Variable`, `_General_Sans_Variable`, `_Cabinet_Grotesk_Variable`, `_Ranade_Variable`, `_Chillax_Variable`, `_Switzer_Variable`, `_Panchang_Variable`. The first row measures:

- **display** — `_Satoshi_Variable` 120px / 400 / 144px. The 120px matches the size slider's default value shown in the filter bar.

When recreating the page, the specimen font is content, not a fixed brand font: each row uses its own family at the slider size.

## Layout

At 1280px the document height is 2,400px but the content scrolls inside an inner container 5,731px tall. Side padding is 40px (`padding: 0px 40px` on header, specimen and footer), and the CSS defines `--padding: 4rem` and an eight-column unit `--one-column: calc((calc(var(--vw) * 100) - var(--padding) * 2) / 8)`. The header is 160px tall and built from equal square-ish cells divided by vertical rules. Filter controls align to the same column grid.

Spacing is small and regular: gaps of 10px (most common, 290 elements), 20px, 5px and 15px; paddings of 5px, 10px, 40px, 20px and 15px. Each specimen row has its label line at the top (name, styles count, "Variable", "Closed Source"), the large specimen, and a "Designed by Indian Type Foundry" caption, separated from the next row by a hairline.

## Elevation & Depth

None. The extraction recorded no box-shadows. Hierarchy comes entirely from scale (120px specimens against 12px labels), from the black active tab, and from 1px rules in #c0c0ab, #30302b, #10100e and #e8e8cf. Keep the page flat.

## Shapes

The only radius on the page is a full pill, 9999px, on 155 elements — the slider handle, the theme toggle dots and pill-shaped filter chips. Everything else — header cells, rows, the footer, inputs — is square. The grid of straight rules is the main shape language.

## Components

- **Header cell** — Passenger-Sans 16px/500, with a small count below the label ("100", "59"). The active cell is filled #10100e with #ffffe3 text, 160px tall; inactive cells are cream with dark text, separated by vertical hairlines.
- **Wordmark** — "Fontshare™" set in large type at the left of the header.
- **Search / custom-text input** — borderless 16px/400 field with a leading icon, 59px tall, sitting on a hairline.
- **Dropdown filter** — grey 12px label with a small caret ("Categories ▾").
- **Size slider** — "120px" value, a thin track and a round pill handle.
- **View and sort toggles** — 12px text options where the selected one turns dark and the rest stay #c0c0ab.
- **Specimen row** — 40px side padding, top meta line in 12px grey, the family name at 120px, a caption below, and a 1px #c0c0ab divider.
- **Footer** — #f8f8dd band, 12px/500 #c0c0ab text, 40px side padding.

## Design System Architecture

No public design system or brand guide for the Fontshare site was found; https://www.fontshare.com/about rendered no about text through the fetch tool. The de-facto system lives in the site's CSS: a small set of role-named colour variables (`--theme-b-color`, `--black-b-color`, `--white-b-color`, `--inverted-color`, `--current-color`, `--gray-l1-color`, `--gray-l2-color`, `--gray-b-color`, `--gray-d1-color` … `--gray-d3-color`, `--scrollbar-*`), a layout unit system (`--vw`, `--vh`, `--padding`, `--one-column`) and Tailwind utility variables (`--tw-ring-*`, `--tw-shadow`). The `--inverted-color` and `--current-color` names, together with the dark/light toggle in the filter bar, show that the colours are swapped by theme; the dark theme itself was not measured.

## Do's and Don'ts

**Do**
- Keep the canvas cream #ffffe3 and the ink #10100e; use them as the only strong pair.
- Let the specimens be the imagery — large, one family per row.
- Use Passenger-Sans (or a declared neutral grotesque substitute) at 12px and 16px for all UI.
- Separate everything with 1px warm-grey rules and keep corners square.
- Show the active state by inverting to black with cream text.

**Don't**
- Don't add a coloured brand accent or a coloured CTA.
- Don't add shadows, cards or rounded containers.
- Don't use pure white or pure black; both are tinted.
- Don't put marketing copy above the catalogue.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: the first specimen ("Satoshi") at 60px / 400 / 66px (120px on desktop), a 60px-tall header (160px on desktop) with no visible header links and no menu toggle detected, 12px remaining the dominant text size, and the widest card row at 3 columns (5 on desktop). Other mobile behaviour was not measured.

## Iteration Guide

1. Set the page to #ffffe3 with #10100e text and 40px side padding.
2. Build the 160px header from square cells divided by 1px rules; make the active cell #10100e with #ffffe3 text.
3. Add the filter bar in 12px Passenger-Sans grey (#c0c0ab) with a pill-handle size slider at 120px.
4. Stack specimen rows: 12px meta line, family name at 120px/144px in its own font, caption, 1px #c0c0ab divider.
5. Add the #f8f8dd footer with 12px/500 text.
6. Check there are no shadows and no rounded corners other than pills.
7. Compare with https://www.fontshare.com/ at 1280px and 390px.
