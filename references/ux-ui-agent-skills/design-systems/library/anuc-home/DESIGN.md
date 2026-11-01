---
version: alpha
name: Anuc Home
category: "Architecture & Interiors"
description: "Anuc Home: Spanish-language interior design and Feng Shui studio; white canvas, #f0f0ef stone bands, ink #1a1a1e, Instrument Serif 68.5px display, Instrument Sans 17.5px body, five Feng Shui element accents, square-cornered stone-gray buttons."
colors:
  canvas: "#ffffff"
  page-largest: "#f0f0ef"
  ink: "#1a1a1e"
  primary: "#d0ceca"
  on-primary: "#1a1a1e"
  surface-stone: "#e7e6e4"
  ink-brown: "#4d4942"
  accent-fire: "#976751"
  accent-wood: "#707455"
  accent-water: "#4a626f"
  accent-earth: "#9a682c"
  error: "#e62c17"
typography:
  display:
    fontFamily: "\"Instrument Serif\", \"Instrument Serif Fallback\", ui-serif, Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 47.6408px
    fontWeight: 400
    lineHeight: 52.4049px
  display-mobile:
    fontFamily: "\"Instrument Serif\", \"Instrument Serif Fallback\", ui-serif, Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 24.3918px
    fontWeight: 400
    lineHeight: 26.831px
  heading:
    fontFamily: "\"Instrument Serif\", \"Instrument Serif Fallback\", ui-serif, Georgia, Cambria, \"Times New Roman\", Times, serif"
    fontSize: 68.5061px
    fontWeight: 400
    lineHeight: 68.5061px
  subheading:
    fontFamily: "\"Instrument Sans\", \"Instrument Sans Fallback\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 14.9551px
    fontWeight: 400
    lineHeight: 17.9461px
    textTransform: uppercase
  body:
    fontFamily: "\"Instrument Sans\", \"Instrument Sans Fallback\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 17.4776px
    fontWeight: 400
    lineHeight: 20.9731px
  nav:
    fontFamily: "\"Instrument Sans\", \"Instrument Sans Fallback\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 500
    lineHeight: 19.2px
    textTransform: uppercase
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 1.5px
  s3: 2px
  s4: 4px
  s5: 8px
  s6: 12px
  s7: 24px
  s8: 40px
  s9: 64px
  s10: 96px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 0px 24px
    height: 64px
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 0px 8px
    height: 36px
    borderColor: "{colors.page-largest}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 0px 8px
    borderColor: "{colors.page-largest}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 0px 8px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

## Overview

anuchome.com is the Spanish-language home page of Anuc Home, an interior-design and Feng Shui practice (the header reads "ANUC HOME (CHI)" and the opening copy is "Transformamos espacios, conectamos emociones"). The measured page is 1280px wide and 8551px tall, with the document language set to es. The page opens on four large black arch and half-arch shapes forming the logotype, each sitting above one of four equal columns that carry the main menu (HOME, NOSOTROS, SERVICIOS, CONTACTO) set in serif capitals; beneath the shapes is a photographic row of interiors with the white serif headline over the second column and a stone-gray "AGENDAR VALORACIÓN GRATUITA" button with a round arrow glyph in the fourth. The rest of the scroll is a four-column grid with hairline vertical rules: a small uppercase label ("DOCTORES DE ESPACIOS"), a very large serif statement ("En ANUC utilizamos los espacios como herramienta de gestión emocional para mejorar la forma en que vives, sientes y trabajas."), then three numbered services (01 Interiorismo + Feng Shui, 02 Servicio "Hazlo tú mismo", 03 Consultoría estratégica Feng Shui), each with a small photograph and a short sans paragraph.

The voice is quiet and editorial: lots of white, thin rules, tall condensed serif for statements, small uppercase sans for labels, and calm photography of lived-in rooms.

## Colors

The neutrals come from a "stone" scale declared in the stylesheet as RGB triplets. `canvas` is {colors.canvas} (#ffffff) and `page-largest` is {colors.page-largest} (#f0f0ef, base-stone-20), the largest background by area (weight 1892). `surface-stone` is #e7e6e4 (stone-50) and `primary` is {colors.primary} (#d0ceca, stone-100), the fill of the "AGENDAR VALORACIÓN GRATUITA" button, with {colors.on-primary} (#1a1a1e, base-black) text. `ink` is #1a1a1e for nearly all text (weight 1380) and `ink-brown` is #4d4942 (base-brown) for body paragraphs. A translucent ink (#1a1a1e33) covers the photo row under the headline, so the headline reads in white.

Five accent colors are declared as Feng Shui elements: `accent-fire` #976751, `accent-wood` #707455, `accent-water` #4a626f, `accent-earth` #9a682c and `accent-metal` #c1c2bd (declared; metal is the page's default accent, `--accent-color: metal`). Fire and wood appear as text colors (the "01/02/03" numbering and small markers); earth (#9a682c), water (#4a626f), wood (#707455) and fire (a translucent #97675133) each appear among the measured background colors with small area weights (10, 10, 10 and 16); in the capture, a thin blue-gray bar sits above the contact column. `error` #e62c17 is declared as `--color-error`; no error state was seen in the capture.

## Typography

Two families are loaded: Instrument Serif (400) and Instrument Sans (400 and 500), each with a metrics-matched "Fallback" face and generic stacks (ui-serif, Georgia, Cambria, Times New Roman; ui-sans-serif, system-ui). By characters Instrument Serif carries 1032 and Instrument Sans 845.

- `display` (h1): Instrument Serif 400, 47.6408px, 52.4049px line height.
- `heading` (h2): Instrument Serif 400, 68.5061px with line height equal to size (68.5061px) for the large statement.
- `subheading`: Instrument Sans 400, 14.9551px, 17.9461px line height, uppercase (labels and button text).
- `body`: Instrument Sans 400, 17.4776px, 20.9731px line height.
- `nav`: Instrument Sans 500, 16px, 19.2px line height, uppercase; the menu in the capture is set in serif capitals.

The tight line-height-equals-size setting on the large statement makes it read as a dense block of text. Both families are the ones loaded by the site, so no substitute is required.

## Layout

The layout is a four-column grid; the header, shapes, photo row and body sections all align to the same four columns, with 1px vertical hairlines running through the page. Text blocks start at the second column and span two to three columns. Measured spacing values are 1, 1.5, 2, 4, 8, 12, 24, 40, 64 and 96px; `--header-height` is 3.3rem. The primary button is 64px tall with 0px 24px padding. The shapes at the top are full-column-width flat black forms with no outline.

## Elevation & Depth

There is no elevation. The measured shadows are `none` and a Tailwind ring placeholder (`var(--tw-ring-offset-shadow,0 0 #0000), ...`) that resolves to nothing. Hierarchy comes from scale (68.5px serif against 15px sans labels), full-bleed photography and column hairlines.

## Shapes

All measured corners are square (0px); the only non-zero radius in the CSS is 9999px (one use), the round arrow badge inside the button. The four black shapes at the top use large semicircular tops and bottoms rather than rectangles, which is the brand's one rounded motif. Photos are rectangular and unframed.

## Components

- `button-primary`: {colors.primary} fill, {colors.on-primary} text, subheading type (uppercase 14.9551px), 0px radius, padding 0px 24px, 64px tall, with a small circular arrow at the right edge.
- `button-secondary` and `link`: ink text in the subheading style, 0px 8px padding, 36px tall, with a {colors.page-largest} border.
- `nav` / `nav-link`: transparent on white, uppercase, ink text; in the capture each menu item has a small colored square marker at the column's right edge (fire for NOSOTROS, a gray for SERVICIOS, and so on).
- Service block: a numbered label (01 to 03) in an accent color, an uppercase sans title, a photograph, a short {colors.ink-brown} paragraph.
- `footer`: ink text on the page background; its contents were not examined in the capture.

## Design System Architecture

No public design-system or brand-guideline page was found in the page's links; the home page is a Tailwind build (`--tw-*` variables are present) and its theme variables are the system. Colors are RGB triplets named `--color-base-black` (26 26 30), `--color-base-white`, `--color-base-white-off` (251 251 251), `--color-base-brown` (77 73 66), `--color-base-stone-20`, `-50`, `-100` and the five `--color-accent-*` values (fire 151 103 81, wood 112 116 85, water 74 98 111, earth 154 104 44, metal 193 194 189), with `--accent-color` selecting one. Fonts are exposed as `--font-instrument-serif` and `--font-instrument-sans`. Source: the page at [anuchome.com](https://www.anuchome.com/).

## Content and Imagery

The photography is warm, daylight interior imagery: a boucle sofa with a green cushion, a marble coffee table with an open art book and a plant, a leather-and-steel armchair, a wicker mirror being hung over a sofa, a woman on a laptop in an armchair. The images are shown at natural proportions in square-ish crops, never masked by the arch shapes. The microcopy is Spanish, uses first-person plural ("Transformamos", "utilizamos", "Descubrimos"), and puts the emotional claim in the large serif statement and the practical offer in the small sans paragraph beneath each numbered service.

## Do's and Don'ts

- Do set big statements in Instrument Serif with line height equal to the font size.
- Do use uppercase Instrument Sans at about 15px for labels and buttons.
- Do keep all rectangles square and reserve rounding for the arch motif and the arrow badge.
- Do use the stone scale for surfaces and one element accent per marker.
- Don't add shadows or gradient fills; photography carries depth.
- Don't use accent colors for large fills.
- Don't break the four-column rhythm: text starts at a column line.

## Responsive Behavior

Measured at 390px: the h1 drops from 47.6408px to 24.3918px (line height 26.831px), the large h2 to 36.5388px, and body text is 16.0245px on 19.2294px line height in {colors.ink-brown}. The mobile header text lists "MENU" and "CLOSE" labels alongside the menu entries, so a menu toggle exists at that width; the extractor recorded no column count or other layout data for mobile, which is therefore not measured.

## Iteration Guide

1. Start with a white page and #f0f0ef bands; text #1a1a1e, paragraphs #4d4942.
2. Statements: Instrument Serif 68.5061px with 68.5061px line height; labels: Instrument Sans 14.9551px uppercase.
3. Use #d0ceca for the one call-to-action button, square corners, 64px tall.
4. Use thin vertical rules and a four-column grid.
5. Run `node web/scripts/verify-designs.mjs --slug=anuc-home` after edits.
