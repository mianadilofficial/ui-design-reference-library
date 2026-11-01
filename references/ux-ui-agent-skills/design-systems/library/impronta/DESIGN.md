---
version: alpha
name: Impronta
category: "Architecture & Interiors"
description: "Impronta (improntahome.com), Italian maker of designer windows and doors: white #ffffff canvas, charcoal #2a2a2a ink and button blocks, SuisseBPIntl Medium at 37.5px for headlines and 9px uppercase labels, square corners, split dark title bars and full-bleed architectural photography."
colors:
  canvas: "#ffffff"
  ink: "#2a2a2a"
  primary: "#2a2a2a"
  on-primary: "#ffffff"
typography:
  display:
    fontFamily: >-
      SuisseBPIntl, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol", "Noto Color Emoji"
    fontSize: 37.5px
    fontWeight: 500
    lineHeight: 37.5px
    letterSpacing: "-0.75px"
  display-mobile:
    fontFamily: >-
      SuisseBPIntl, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol", "Noto Color Emoji"
    fontSize: 22px
    fontWeight: 500
    lineHeight: 25px
  link:
    fontFamily: >-
      SuisseBPIntl, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol", "Noto Color Emoji"
    fontSize: 9px
    fontWeight: 500
    lineHeight: 9.45px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 12px
  s2: 13.5px
  s3: 15px
  s4: 19.5px
  s5: 30px
  s6: 33px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 0px 30px
    height: 66px
  nav:
    textColor: "{colors.ink}"
    padding: 0px 0px 18px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
---

## Overview

Impronta is an Italian maker of designer windows, doors and shutters ("Serramenti di design"). The page title is "Impronta | Serramenti di design" and the meta description says the frames are shaped by an art-industrial soul for more than 50 years. The measured URL is https://www.improntahome.com/it (language it-IT) and the footer shows "EST. 2002" and an address in Breda di Piave, Treviso. The navigation lists Home, Manifesto, Prodotti, Progetti, Servizi and Per Chi, with product groups Serramenti (Legno, Legno-Alluminio, Alluminio, Finiture) and Complementi (Porte d'Ingresso, Porte Interne, Schermature, Maniglie, Pergole).

The re-measured capture shows the loaded home screen, a split composition: the left half is white with the tagline "Living Space Future" set in large medium-weight sans type, the right half is a full-bleed twilight photograph of a low modern house with warm lit glass walls. Charcoal rectangles carry the interface: a square "MENU" tab at top left, a square "SCRIVI" (Write) tab at top right, a stepped dark title bar reading "01 . 03  Progetti" with a "TUTTI I PROGETTI" (All projects) block, and a white caption box at the bottom right with "N°001  Villa FG Italia", previous/next arrows and a "SCOPRI DI PIÙ" (Discover more) link.

The identity is architectural and quiet: a restrained two-color palette, one typeface, large amounts of white, geometry built from overlapping rectangles, and photography that does the emotional work. All text is in Italian on this page, with English available (the language list offers Italiano and English).

Key characteristics:
- White #ffffff canvas and charcoal #2a2a2a ink; no accent color is measured.
- One family, SuisseBPIntl Medium (500), at 37.5px headlines and 9px uppercase controls.
- Every measured radius is 0px (borderRadii is empty).
- No borders and no box shadows measured; shape is made by solid rectangles.

## Colors

The measured palette has exactly two colors.

- **Canvas #ffffff:** the page background (1,563 area weight) and the text color on dark blocks (62 characters).
- **Ink #2a2a2a:** the text color on white (105 characters, the most-read color) and the fill of the dark blocks (84 area weight): the MENU and SCRIVI tabs, the Progetti title bar and the "TUTTI I PROGETTI" button.
- **Primary #2a2a2a:** the same charcoal as the button fill. The generator's primary was #ffffff, which is the label color on the button rather than the action color, so primary and on-primary were set to the fill and label respectively.

No other hue appears in the DOM measurement. The photograph introduces blue dusk and warm window light, but photographic colors are not tokens. The root variable `--un-ring-color` (rgba(147,197,253,.5)) is a UnoCSS default ring color and is not used as a brand color.

## Typography

SuisseBPIntl, loaded from /SuisseBPIntl-Medium.woff2 at weight 500, is the only family (167 of 167 measured characters). Fallbacks are the ui-sans-serif and system stacks listed in the token.

- **display:** 37.5px, weight 500, line height 37.5px, letter spacing -0.75px (-2 percent of the size). It sets "Progetti", "Villa FG Italia" and the "Impronta" wordmark link (141px by 39px, line height 39.375px).
- **display-mobile:** 22px, weight 500, line height 25px, measured at 390px.
- **link:** 9px, weight 500, line height 9.45px, uppercase, used for "TUTTI I PROGETTI", "SCRIVI", "MENU" and "SCOPRI DI PIÙ". A 12px size is also measured (31 characters); at 390px the sizes by character count are 16px, 22px and 12px.

Hierarchy comes from the extreme jump between 37.5px headlines and 9px labels, not from weight. Font substitutes: SuisseBPIntl is a commercial typeface served from the site's own files; the stack falls back to the system UI sans-serif.

## Layout

The page uses UnoCSS-style variables: `--header-height: 84px`, `--container-padding: 1rem` and `--container-grid-gap: 1.125rem`. The header measures 84px high and 1280px wide on desktop with 0px 0px 18px padding. The home screen splits into two halves at the vertical centre; the wordmark, "Progetti" and "Living Space Future" share a common left text edge in the capture.

Dark horizontal bands break the white half in a stepped pattern: the title bar is taller on its left part and steps down to the "TUTTI I PROGETTI" block, which is 216px wide and 66px high. The densest measured card grid has 3 columns, and the project counter shows "01 . 03", so the project carousel has three entries on the home screen.

Measured gaps are 12px, 13.5px and 15px; paddings are 33px, 12px, 30px, 15px and 19.5px, all carried by the spacing tokens.

## Elevation & Depth

The system is flat: no box shadows and no border colors were measured. Layering is done by overlapping opaque rectangles: the white caption card sits on the photograph, the charcoal bars sit on the white half. Motion is the other depth cue: the root variables define text-splitting transitions (`--transition-split-chars`, `--transition-split-words` at 1s and `--transition-split-lines` at 1.25s) and easing curves `--ease-custom-expo` cubic-bezier(.19, 1, .22, 1), `--ease-custom-circ` cubic-bezier(.25, 1, .5, 1), `--ease-custom-expo2` cubic-bezier(.83, 0, .17, 1) and `--ease-custom-power` cubic-bezier(.76, 0, .24, 1). The home screen shows a "Caricamento" (loading) state with a counter in the page markup.

## Shapes

`desktop.frequencies.borderRadii` is empty: every element computes a 0px radius. Buttons, tabs, bars and the caption card are plain rectangles; there are no pills, circles or outlines. The only angular variation is the stepped silhouette of the Progetti bar.

## Components

- **button-primary ("TUTTI I PROGETTI"):** charcoal #2a2a2a fill, white 9px uppercase label, padding 0px 30px, 66px high, 216px wide, 0px radius.
- **Menu and Write tabs:** square charcoal blocks pinned to the top corners, with "MENU" at left and "SCRIVI" at right in the 9px uppercase style; the mobile pass labels the toggle "Menu".
- **nav:** header with the "Impronta" wordmark link in display type (37.5px) and 0px 0px 18px padding, 84px high.
- **Project caption card:** white box over the photograph containing the number "N°001", the project name "Villa FG Italia" in 37.5px type, arrow controls and the "SCOPRI DI PIÙ" link.
- **Menu overlay (markup):** Home, Manifesto, Prodotti, Progetti, Servizi, Per Chi, product submenus with "Vedi tutti", social links (Instagram, Linkedin, Facebook, Pinterest, Youtube), contacts and downloads (Catalogo Legno e Legno-Alluminio, Company profile, Safety glass). Its styling was not measured.

The Iubenda cookie banner (`iubenda-cs-banner`) was hidden for the measurement and is not documented as brand UI.

## Design System Architecture

No public design system or brand guideline was found. The page https://www.improntahome.com/it links to its own Nuxt assets (/_nuxt/), component stylesheets such as ButtonDefault, DynamicZone, useStrapiData and useStrapiPage, which indicate a Nuxt front end with Strapi content, plus social profiles and downloads. The de-facto system is the root variable set: `--header-height`, `--container-padding`, `--container-grid-gap`, the split-text transitions, the named easing curves (including generated linear() power curves) and input border variables set to currentColor. Colors are not exposed as variables; the two values come from computed styles.

## Do's and Don'ts

Do:
- Keep the page white and the interface charcoal #2a2a2a.
- Use SuisseBPIntl 500 at 37.5px with -0.75px tracking for headlines.
- Build controls as solid, square, uppercase 9px rectangles.
- Let one architectural photograph occupy half the screen.
- Use the named expo easing for text reveals.

Don't:
- Do not add accent colors; none were measured.
- Do not round corners or add shadows or borders.
- Do not use the UnoCSS ring color rgba(147,197,253,.5) as a brand color.
- Do not document the cookie banner as part of the system.

## Responsive Behavior

Measured at 390px: the headline drops to 22px with 25px line height; the sizes by character count are 16px, 22px and 12px; the header is 92px high with 0px 0px 24px padding and shows 2 header links plus a Menu toggle (the same count and toggle were reported at desktop). The maximum card-column count is 3 at both widths. The stylesheet declares min-width media queries at 48rem (42 rules), 640px (11), 992px, 1280px, 1024px, 1920px, 1680px, 2560px and 480px, and max-width queries at 639px, 991px and 480px. Other mobile layout details are not measured.

## Iteration Guide

1. Start with #ffffff and #2a2a2a only.
2. Set SuisseBPIntl 500: 37.5px / 37.5px / -0.75px for display, 9px uppercase for controls.
3. Build the home screen as two halves: tagline left, full-bleed photograph right.
4. Add charcoal rectangles for MENU, SCRIVI and the stepped Progetti bar; keep radius at 0px.
5. Place a white caption card on the photograph with a project number, name and a "Scopri di più" link.
6. Use cubic-bezier(.19, 1, .22, 1) for text reveals.
7. Re-measure at 390px before adding mobile values beyond those listed.
