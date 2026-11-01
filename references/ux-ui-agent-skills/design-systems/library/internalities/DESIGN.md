---
version: alpha
name: Internalities
category: "Architecture & Interiors"
description: "Internalities, the Pavilion of Spain site for the 2025 Venice Architecture Biennale: flat grey canvas #ebebeb, charcoal ink #393939, a gigantic wordmark, ShinkaMono monospace and ABC Camera Plain at 14px / 16px weight 400, zero borders or shadows, with a faint vertical column grid."
colors:
  canvas: "#ebebeb"
  ink: "#393939"
  primary: "#393939"
  ink-inverse: "#ffffff"
typography:
  display:
    fontFamily: ShinkaMono-Regular
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16px
  display-mobile:
    fontFamily: ShinkaMono-Regular
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  body:
    fontFamily: ABCCameraPlain-Medium
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16px
rounded:
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 16px
  s4: 22px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.ink-inverse}"
    padding: 0px 0px 20px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.ink-inverse}"
    typography: "{typography.display}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

Internalities (internalities.eu) is the web presence of the Spanish pavilion at the 19th International Architecture Exhibition of La Biennale di Venezia; the page title reads "Internalities – Pabellón de España en la 19ª Exposición Internacional de Arquitectura – La Biennale di Venezia" and the document language is `es-ES`. The home page shows the word "Internalities" set at the full width of the viewport in a heavy grotesque with rounded cut-outs, followed by the English strapline "Architectures for Territorial Equilibrium" and "Pavilion of Spain — Biennale Architettura 2025". Beneath it sit a text-only menu, a faint map of scattered pink strokes over a pattern of thin vertical column lines, and a footer with contact, legal, language and resource lists and the logos of the organisers and sponsors.

The measured page is 1280px wide and 1472px tall. The design is closer to an exhibition catalogue than a product site. It uses one flat grey, one charcoal and white, one size of text (14px) and no controls drawn as buttons. The only decoration is the oversize wordmark and the grid of hairline columns.

## Colors

- **Canvas `#ebebeb`** is the page background. The site's own variables call it `--background-base` and `--white`.
- **Ink / primary `#393939`** is the text colour (212 measured characters) and the colour of the wordmark; the site's variables call it `--background-inverse`, `--black` and `--content-high`.
- **Ink secondary `#ffffff`** is read in 216 characters: the menu labels, which are white because they are set over a media/hero layer.
- **Highlight `#f2c1c1`** (variable `--highlight-high`) appears in the measured background areas as `#f2c1c180`, a half-transparent pink, and matches the pink map strokes in the capture.
- Other variables published by the page's CSS: `#585858` (`--content-action-inverse-disable`) and `#757575` (`--content-action-pressed`).

A nav link measured on hover changes from white to `#959595`, both for the text and its border colour. There are no gradients, and no measured box shadows or border colours.

## Typography

Two custom faces are loaded: ShinkaMono-Regular and ABCCameraPlain-Medium (both normal style). ShinkaMono sets 330 characters (menu, strapline, lists, "[Play]") and ABC Camera Plain sets 98 (the labels and legal line in the footer). Everything is 14px / 16px at weight 400: all 428 measured characters use 14px. Both faces are commercial or foundry fonts and are not included here; where they are unavailable use a neutral monospace for the ShinkaMono role and a neutral grotesque for the ABC Camera Plain role.

The giant wordmark is not among the measured text roles (the measured text is all 14px); in the capture its letterforms are a heavy grotesque with round slots cut into the stems. On the 390px pass the display role becomes 12px / 16px, with 16px used for 82 characters and 12px for 60 characters.

## Layout

The page is a single column with a 22px horizontal page padding (`--xpadding-x`) and a 40px alternative (`--xpadding`), plus a 114px header height variable and a breakpoint variable `--break` of 880. The wordmark spans the full content width at the top. The menu is a row of lowercase-style labels: Proyecto, Acerca de, Mapa at the left, and a numbered list (00 Balance, 01 Materiales, 02 Energy, 03 Labor, 04 Residues, 05 Emissions) at the right. Faint vertical lines divide the viewport into narrow columns. The footer arranges Contacto, Legal, Idiomas and Recursos in label/value pairs on one row, with a live local time and place at the far right, then the organiser and sponsor logos in two blocks.

Measured gaps are 4px (20 uses), 16px (12), 22px (4) and 8px (2); padding is 16px in seven places. Spacing is tight and mechanical.

Art direction and voice: the page is bilingual in practice. Interface labels are Spanish (Proyecto, Acerca de, Mapa, Contacto, Política de Privacidad, Política de Cookies, Aviso legal, Idiomas, Recursos, Dossier de prensa) while the strapline and the numbered chapter list are in English, with Español and English offered as the two languages. The tone is institutional and factual: no slogans beyond the strapline, no calls to action, and a copyright line reading "Todos los derechos reservados. © Internalities 2026". The numbered list (00 to 05) reads like a table of contents for the exhibition's themes, and the empty space between the map and the footer gives the page a drawn-out, poster-like pace.

## Elevation & Depth

There is no elevation. No box shadows were measured and no borders were measured. The page is flat; depth is only implied by the overlaid map strokes and column lines. The theme CSS carries WordPress preset shadow variables (an "outlined" and a "deep" preset), but they were not observed on any rendered element.

## Shapes

The only measured radius is 9999px (one element); the remaining elements compute to 0px. Shapes therefore read as square and rectilinear, with the rounded slots in the wordmark as the single curved gesture. The plyr video-control radius is declared as 0px in the root variables.

## Components

- **Menu links**: ShinkaMono 14px / 16px, white at rest and `#959595` on hover; no underline in either state.
- **Language and resource lists**: plain text pairs in the footer with an ABC Camera Plain label at the left and monospace values to its right.
- **Video control**: a "[Play]" text label in 12px on mobile, from the plyr player styles (`--plyr-color-main` is white).
- **Logos block**: organiser and sponsor marks (La Biennale di Venezia, Gobierno de España ministry, AC/E, aecid, Finsa) in line-art greys on the canvas, under the labels "Organizan" and "Patrocinan".
- **Clock**: a live time and "Thailand" location string at the footer's right edge.

No filled buttons, cards or form fields are present in the measured data.

## Design System Architecture

No public design-system documentation or brand guidelines were found: the home page HTML was opened and contained no link to brand, press kit, design system or GitHub beyond the "Dossier de prensa" resource in the footer, which was not opened. The de-facto system is a WordPress theme with Tailwind-style variables (`--tw-ring-*`) and a small semantic colour vocabulary in custom properties: `--background-base`, `--background-inverse`, `--content-high`, `--content-action-pressed`, `--content-action-inverse-disable`, `--highlight-high`, `--black` and `--white`. Layout variables include `--header-height`, `--xpadding`, `--xpadding-x`, `--break` and `--vh`.

## Do's and Don'ts

- Do keep everything at 14px / 16px weight 400 and let the oversize wordmark be the only large element.
- Do use `#ebebeb` and `#393939`; do use white only over imagery.
- Do keep corners square and avoid shadows and borders.
- Do use the pink `#f2c1c1` only for map and data marks.
- Don't add filled buttons; the site uses text links.
- Don't treat the WordPress preset colours (vivid purple and similar) or Tailwind ring blue as brand colours.
- Don't introduce other weights; every measured character is weight 400.

## Responsive Behavior

Measured at 390px: the display role is 12px / 16px, 16px text is used for 82 characters and 12px for 60. The site declares a breakpoint variable `--break: 880`. The layout of the menu and footer on mobile, and hover behaviour on touch, were not measured.

## Iteration Guide

1. Set the canvas `#ebebeb` and ink `#393939`.
2. Choose a monospace for labels and a grotesque for footers; use 14px / 16px weight 400 throughout.
3. Place the wordmark at full width at the top and the menu in plain text below it.
4. Add thin vertical column lines as the only graphic device, with pink `#f2c1c1` marks for data.
5. Keep hover as a colour change to `#959595`.
6. Verify new values against `web/data/extracted/internalities.json`.
