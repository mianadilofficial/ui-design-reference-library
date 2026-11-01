---
version: alpha
name: Thorgal
category: "Culture & Events"
description: "Official French-language site of the Thorgal comic saga: Artifex Hand CF uppercase display at 75.2px and Mulish navigation at 10.5px, page-body canvas #efeeed, near-black ink #22201d, sand gold #b8a88a, a 3.5px-radius dark Découvrir button and a #1a1a1a menu panel."
colors:
  canvas: "#e5e5e5"
  page-body: "#efeeed"
  ink: "#22201d"
  primary: "#22201d"
  on-primary: "#efeeed"
  surface-dark: "#1a1a1a"
  ink-muted: "#838383"
  ink-white: "#ffffff"
  gold: "#b8a88a"
  hairline: "#ffffff33"
typography:
  display:
    fontFamily: "Mulish-9c8e18cc8744f1a9, \"Mulish-9c8e18cc8744f1a9 fallback: Arial\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 21px
  heading:
    fontFamily: "\"Artifex Hand CF-046c0ff99cd55ef3\", \"Artifex Hand CF-046c0ff99cd55ef3 fallback: Arial\", sans-serif"
    fontSize: 75.2px
    fontWeight: 700
    lineHeight: 82.72px
    letterSpacing: "-2px"
    textTransform: uppercase
  body:
    fontFamily: "\"Artifex Hand CF-046c0ff99cd55ef3\", \"Artifex Hand CF-046c0ff99cd55ef3 fallback: Arial\", sans-serif"
    fontSize: 12.25px
    fontWeight: 700
    lineHeight: 17.5px
    letterSpacing: 0.30625px
    textTransform: uppercase
  button:
    fontFamily: "\"Artifex Hand CF-046c0ff99cd55ef3\", \"Artifex Hand CF-046c0ff99cd55ef3 fallback: Arial\", sans-serif"
    fontSize: 14px
    fontWeight: 900
    lineHeight: 21px
    letterSpacing: 0.35px
    textTransform: uppercase
  nav:
    fontFamily: "Mulish-9c8e18cc8744f1a9, \"Mulish-9c8e18cc8744f1a9 fallback: Arial\", sans-serif"
    fontSize: 10.5px
    fontWeight: 700
    lineHeight: 14px
    textTransform: uppercase
  link:
    fontFamily: "Mulish-9c8e18cc8744f1a9, \"Mulish-9c8e18cc8744f1a9 fallback: Arial\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 3.5px
spacing:
  s1: 3px
  s2: 3.5px
  s3: 7px
  s4: 8.75px
  s5: 10.5px
  s6: 14px
  s7: 17.5px
  s8: 21px
  s9: 24.5px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 17.5px 28px
    height: 56px
    transform: matrix(1, 0, 0, 1, 0, 0)
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-muted}"
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.page-body}"
    padding: 0px 42px
---

## Overview

Thorgal (thorgal.com, redirected to https://www.thorgal.com/, titled "Thorgal | Univers officiel de la saga culte", document language French) is the official site of the Thorgal comic saga. The capture shows a deliberately quiet entry screen: a washed-out, almost white collage of ink drawings of faces and creatures fills the viewport, the credit line "ROSINSKI VAN HAMME" sits in widely spaced sand-coloured capitals above a chunky hand-lettered "THORGAL" logotype, "LE LOMBARD" below it, then a dark "DÉCOUVRIR" button flanked by two small ornamental flourishes.

A fetch of the home page lists the structure: five numbered "doors" (Porte 01 L'univers, 02 Les albums, 03 Les personnages, 04 Les auteurs, 05 La communauté), each with a heading and a "Découvrir" link, a scroll prompt "Défiler pour explorer", an "Actualités" link and a sound toggle. The measured page counts 358 visible elements. The mood is that of a printed art book opened to its title page: low contrast, handmade lettering and measured calm, before dark panels take over for the content sections.

## Colors

The stylesheet defines a custom theme set in Tailwind-style variables: `--color-theme-white` `#efeeed`, `--color-theme-grey` `#e5e5e5`, `--color-theme-dark` `#22201d`, `--color-theme-dark-grey` `#474747` and `--color-theme-black` `#000`.

- Canvas `#e5e5e5` (theme grey) and page-body `#efeeed` (theme white, the largest area, 1024).
- Ink and primary `#22201d` (theme dark), used as text (40 characters) and as the button fill; on-primary `#efeeed`.
- Surface-dark `#1a1a1a` is the menu panel (452 area weight).
- Ink-muted `#838383` for navigation numerals and labels (64 characters); ink-white `#ffffff` (41); gold `#b8a88a` for the credit line, logotype and the small counter (6 characters, 2 area weight).
- Hairline `#ffffff33` (white at 20%), also `#ffffff4d` on the menu.

The root also exposes Tailwind default colours (zinc, gray, blue, red, green, sky, amber ramps in oklch), which belong to the framework and are not used as the saga's palette.

## Typography

Two self-hosted faces, both with fallback stacks: Artifex Hand CF (weights 700, 900), a hand-cut display face, and Mulish (400, 700). Measured characters: Artifex Hand 190, Mulish 159, ui-sans-serif 40.

- Heading: Artifex Hand CF 75.2px/82.72px, weight 700, uppercase, -2px tracking ("L'UNIVERS").
- Body: Artifex Hand CF 12.25px/17.5px, weight 700, uppercase, 0.30625px ("DÉFILER POUR EXPLORER").
- Button: Artifex Hand CF 14px/21px, weight 900, uppercase, 0.35px.
- Nav: Mulish 10.5px/14px, weight 700, uppercase, 0.84px.
- Link: Mulish 14px/21px, weight 400. The "display" token is the small 14px/21px bold counter ("100", a load or progress number detected as the h1).
- Another measured size is 42px (-2px tracking, 54 characters).

The font stack names are build-hashed (for example `Mulish-9c8e18cc8744f1a9`). Font substitutes (design only): a heavy slab display such as Alfa Slab One for Artifex Hand, Mulish is available as a standard family.

## Layout

The entry screen is a centred stack of credit, logotype, subtitle and button on a full-bleed drawing. The menu is a left-aligned dark panel (card with `0px 7px 7px 0px` radius, padding `0px 42px`, 481px wide, 322px tall) listing five numbered items with 42px gaps. Measured gaps: 28px (5), 42px (5), 3px, 7px, 14px, 56px and 24.5px; paddings: 17.5px (6), 28px (6), 3.5px, 8.75px, 35px, 21px, 14px, 42px and 10.5px. The button is 150px by 56px.

## Elevation & Depth

No box shadows were measured. Depth is carried by tonal layers: a washed illustration beneath a clean button, then dark panels (`#1a1a1a`) with thin white-alpha borders (`#ffffff33`, `#ffffff4d`). A `#00000099` scrim is also measured (menu overlay) and is not a brand colour.

## Shapes

Radii: 3.5px (8 elements, the buttons) and `0px 7px 7px 0px` (the menu panel's right edge, which is twice the button radius). The ornamental flourishes beside the button are illustrations, not UI shapes. Everything else is square.

## Components

- Primary button "DÉCOUVRIR": fill `#22201d`, label `#efeeed`, Artifex Hand 14px/900 uppercase, 0.35px tracking, padding `17.5px 28px`, 56px high, 150px wide, 3.5px radius.
- Menu panel: `#1a1a1a`, padding `0px 42px`, items numbered "01 L'UNIVERS", "02 LES ALBUMS", "03 LES PERSONNAGES", "04 LES AUTEURS" in muted `#838383`, plus a "Fermer" close control.
- Link "Actualités": Mulish 14px, `#efeeed`.
- Hover: no hover states were recorded.

## Design System Architecture

No public design system or brand guideline was found; the home page https://www.thorgal.com/ (extractor and fetch) shows no credits or guideline links. The site is built on Tailwind CSS v4 variables (134 custom properties including `--text-2xl`, `--tracking-tight`, `--container-md`, `--one-em`), plus shadcn-style semantic tokens (`--border`, `--card`, `--primary-foreground`, `--success`) and a custom `theme-*` colour set. The de-facto system is therefore Tailwind utilities with a five-colour brand theme.

## Do's and Don'ts

- Do keep the entry screen pale and let the illustration recede.
- Do use gold `#b8a88a` for credit lines and the logotype only.
- Do use dark `#22201d` for the single call-to-action.
- Do set all labels in uppercase with the measured tracking.
- Don't add shadows or rounded corners above 7px.
- Don't use Tailwind's default blue or red ramps as brand colours.
- Don't translate interface copy away from French.

## Responsive Behavior

Mobile (390px) measurements: the counter label 14px/21px, body 12.25px; mobile sizes by characters are 14px (211), 26.25px (54), 10.5px (50) and 12.25px (19), so the heading drops from 42px to 26.25px. Layout changes (menu width, button width) are not measured.

The copy voice is French, imperative and brief: "DÉCOUVRIR" (discover), "DÉFILER POUR EXPLORER" (scroll to explore), "Fermer" (close), "Aller au contenu principal" (skip link) and "Activer ou désactiver le son" (sound toggle). Navigation entries are numbered 01 to 05 and written in capitals, which gives the menu the feel of a table of contents. No dark mode, hover or focus states were measured, and the page declares French as its document language.

## Iteration Guide

1. `#efeeed` canvas, `#22201d` button, `#b8a88a` credit line.
2. Logotype and credit centred; one dark 3.5px-radius button.
3. Dark menu panel `#1a1a1a` with muted numbered items.
4. Keep copy in French.
5. Gate: `node web/scripts/verify-designs.mjs --slug=thorgal`.

### Measured reference

All figures in this block are verbatim from the desktop extraction (weight in parentheses is the measured character, area or occurrence weight).

- Font families by characters: Artifex Hand CF-046c0ff99cd55ef3 (190), Mulish-9c8e18cc8744f1a9 (159), ui-sans-serif (40).
- Font sizes by characters: 14px (266), 42px (54), 10.5px (50), 12.25px (19).
- Font weights by characters: 700 (129), 900 (117), 400 (102), 600 (41).
- Letter spacing by size: 14px/0.35px (158), 42px/-2px (54), 10.5px/0.84px (40), 12.25px/0.30625px (19).
- Text colours by characters: #efeeed (238), #838383 (64), #ffffff (41), #22201d (40), #b8a88a (6).
- Background colours by area: #efeeed (1024), #1a1a1a (452), #22201d (83), #e5e5e5 (8), #00000099 (2), #b8a88a (2).
- Border radii: 3.5px (8), 0px 7px 7px 0px (1).
- Box shadows: none recorded.
- Border colours: #ffffff33 (2), #ffffff4d (2).
- Gaps: 28px (5), 42px (5), 3px (4), 7px (3), 14px (2), 56px (1), 24.5px (1).
- Paddings: 17.5px (6), 28px (6), 3.5px (5), 8.75px (5), 35px (5), 21px (1), 14px (1), 42px (1), 10.5px (1).
- Stylesheet colours by count: #00000000 (57), #ffffff (30), #0000001a (20), #1a1a1a (14), #d6d4d1 (12), #101828 (12), #e5e7eb (10), #d1d5dc (10), #22201d (9), #6a7282 (9), #0000000d (8), #b8a88a (8), #838383 (8), #99a1af (8).
- Stylesheet font sizes: 16px, 14px, 24px, 50.29px, 10px, 18px.
- Stylesheet radii: 5px, 6px, 4px, 2px.
- Fonts loaded: Artifex Hand CF-046c0ff99cd55ef3 700 normal, Artifex Hand CF-046c0ff99cd55ef3 900 normal, Mulish-9c8e18cc8744f1a9 400 normal, Mulish-9c8e18cc8744f1a9 700 normal.
- Visible elements: 358; document language: fr; hover states recorded: 0.
