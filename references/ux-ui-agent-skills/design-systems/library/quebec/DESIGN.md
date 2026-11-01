---
version: alpha
name: Québec.ca
category: "Design Systems"
description: "The Government of Québec portal at quebec.ca, built on the government's own design system with Roboto bold headings at 48px, Open Sans body at 16px, a white canvas, link blue #095797, dark text blue #223654, pale-blue chips #dae6f0, a coral accent #e58271 and square 0px corners everywhere."
colors:
  canvas: "#ffffff"
  ink: "#095797"
  ink-heading: "#223654"
  primary: "#dae6f0"
  on-primary: "#095797"
  surface-blue-medium: "#19406c"
  accent-coral: "#e58271"
  focus-blue: "#4a98d9"
  link-active-red: "#cb381f"
  border-grey: "#6b778a"
typography:
  display:
    fontFamily: Roboto, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 56px
  display-mobile:
    fontFamily: Roboto, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
  heading:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 16px
rounded:
  none: 0px
spacing:
  s1: 8px
  s2: 11px
  s3: 16px
  s4: 20px
  s5: 24px
  s6: 32px
  s7: 56px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 11px 8px
    height: 40px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 11px 8px
    height: 40px
    borderColor: "{colors.primary}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 11px 8px
    borderColor: "{colors.primary}"
  text-input:
    textColor: "{colors.ink-heading}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 8px 0px 8px 8px
    height: 40px
  footer:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

Québec.ca is the Government of Québec's single public entry point for information and services. The page measured here is the French-language home (`https://www.quebec.ca/`, title "Bienvenue sur Québec.ca | Gouvernement du Québec"), and it behaves like a directory rather than a marketing page. A narrow dark-blue band at the top carries the government signature (the word "Québec" beside the flag motif of four rectangles) and two small links, "English" and "Nous joindre". Below it a very large bold title, "Gouvernement du Québec", sits over a short coral rule, followed by a one-line subtitle, "Informations et services gouvernementaux", a wide search field, a block of quick links called "Les plus consultés", and then a three-column grid of thematic sections, each with a line icon, a bold heading, five links and a "Voir plus" link with an arrow.

The voice is plain, institutional French. Headings name the citizen's domain (Éducation, Emploi, Santé, Immigration, Transports) and the links beneath read like tasks ("Trouver un emploi ou un stage", "Déclaration de revenus"). There is no photography on this page; the only imagery is the monoline icon set and the flag signature. The result is calm, dense and highly scannable: roughly 3,679px of scroll height at the 1280px desktop measurement, made almost entirely of text links.

The palette is a single blue family. Links are blue #095797, headings and body text are a darker navy #223654, quick-link chips and the CTA-like links use a pale blue fill #dae6f0, and large dark areas use #19406c. A coral #e58271 appears as the short rule under the page title. Corners are square across all measured components (every `borderRadius` is 0px).

## Colors

The measured palette is small and every value below is either in the extraction or in the site's own `--qc-color-*` custom properties.

- **Canvas `#ffffff`** is the page background (the `--qc-color-background` variable resolves to `--qc-color-white`). Roughly three quarters of the screen is white.
- **Ink `#095797`** is the most-read text color by characters (about 2,367 weighted characters), because nearly every list item is a link, and the site's `--qc-color-link-text` and `--qc-color-link-hover` both resolve to this blue (named `--qc-color-blue-piv` in the shipped CSS).
- **Ink heading `#223654`** is the color of the h1 "Gouvernement du Québec", the h2 "Les plus consultés" and body paragraphs (`--qc-color-text-primary`, which points at `--qc-color-blue-dark`).
- **Primary `#dae6f0`** is the pale blue (`--qc-color-blue-pale`) used as the fill of the quick-link chips, with `on-primary` text `#095797` and a 1px border in the same pale blue. On hover the measured border becomes a lighter blue (rgb 74, 152, 217, i.e. `#4a98d9`) while the fill stays pale.
- **Surface blue medium `#19406c`** is `--qc-color-blue-medium`, the largest measured background area by weight.
- **Accent coral `#e58271`** is `--qc-color-accent` (pink-regular) and matches the short rule under the h1 in the capture.
- **Focus blue `#4a98d9`** is the focus outline for links and form fields (`--qc-color-link-focus-outline`, `--qc-color-formfield-focus-outline`).
- **Link active red `#cb381f`** is the active-link color (`--qc-color-link-active`).
- **Border grey `#6b778a`** is the form-field border (`--qc-color-formfield-border`).

The stylesheet also defines semantic success, warning and error colors, pale tints and a purple for visited links (`--qc-color-purple`); none were exercised on the home page, so they are not tokens here. Browser-default link colors are not part of the palette.

## Typography

Two families are loaded: **Roboto** (400, 500, 700) for headings and **Open Sans** (400, 600, 700) for content. The shipped variables assign them as `--qc-font-family-header` (Roboto) and `--qc-font-family-content` (Open Sans). By character count Open Sans carries almost everything (about 3,612 weighted characters against 92 for Roboto).

- **Display** is Roboto bold 700, 48px on a 56px line height at desktop (`--qc-font-size-h1` is 3rem, `--qc-line-height-h1` 3.5rem). At the 390px mobile measurement it drops to 36px on a 40px line.
- **Heading** (h2, section titles such as "Les plus consultés") is Open Sans 700 at 16px on 24px.
- **Body** is Open Sans 400 at 16px on 24px.
- **Button / chip text** is Open Sans 600 at 14px on 16px.

The most used size by characters is 14px (link text), then 18px, 16px, 20px and a 50px outlier. Letter-spacing is `normal` everywhere; there is no tracking manipulation. Roboto and Open Sans are both open fonts served by the site, so no substitutes are needed.

## Layout

The container follows the system's grid variables: a maximum content width of 825px for text (`--qc-max-content-width`), container maximums of 768px, 992px and 1200px (`--qc-grid-container-max-width-sm/md/lg`), breakpoints at 768px, 992px and 1200px, and a 32px grid gutter (`--qc-grid-gutter`). The home page measured at 1280px uses a left-aligned column with generous white margin: the title, search and chips run in a column about 825px wide, then a full-width three-column grid lists the thematic sections.

The spacing scale in tokens (8, 11, 16, 20, 24, 32, 56px) matches measured padding values on the page, and the stylesheet defines a rem-based spacer ladder (`--qc-spacer-1` .5rem up to `--qc-spacer-12` 6rem). Vertical rhythm is airy between sections and tight inside lists. The search bar is capped at 40rem (`--qc-size-search-bar-max-width`).

## Elevation & Depth

The system is almost flat. The only box shadow measured on the home page is `rgba(34, 54, 84, 0.24) 0px 1px 4px 0px`, a faint navy-tinted shadow, measured on a single element; the capture shows a white card ("Personnes handicapées") on a light-grey band near the bottom, but the element carrying the shadow was not individually probed. The stylesheet defines four graduated shadow steps (offsets 1px, 2px, 4px, 6px with blurs 4px, 8px, 16px, 24px) in the form `rgba(blue-dark, .24)`, but the page uses only the lightest. Depth otherwise comes from flat color fills: pale-blue chips, dark-blue bands and a light-grey footer-zone background (`--qc-color-grey-pale` `#f1f1f2` in the CSS).

## Shapes

Everything is square. The extracted `borderRadii` list is empty and every measured element reports a 0px radius, including the chips, the search input and the card. Borders are 1px. The chip border is `#dae6f0` (the same as its fill), so chips read as flat tinted rectangles; the search field has a darker blue border and a square blue button with a white magnifier. Icons are monoline illustrations in blue and navy, set at the left of each section heading.

## Components

- **Quick-link chips (button-primary / button-secondary / nav-link).** Pale blue fill `#dae6f0`, text `#095797`, Open Sans 600 14px, padding 11px 8px, height 40px, 1px border `#dae6f0`, 0px radius. The extractor detected the first chip ("Rendez-vous en ligne avec un médecin de famille", 348px wide) as the primary call-to-action; it is a link chip rather than a conventional button, and the same style is used for all seven "Les plus consultés" items.
- **Search field (text-input).** 40px tall, padding 8px 0px 8px 8px, Open Sans 16px, placeholder "Rechercher dans Québec.ca", square corners with a blue border, joined to a square blue search button.
- **Section blocks.** An icon, a bold h2-style heading, five text links in `#095797`, then a "Voir plus" link followed by an arrow glyph (the Material Symbols Rounded font is loaded for such glyphs).
- **Header and footer.** A dark-blue header band holds the signature and the language/contact links in white text; the footer token uses white text.
- **Card.** A white box with a faint 1px 4px navy shadow and an accessibility icon, titled "Personnes handicapées".

## Design System Architecture

Québec.ca is built on the Government of Québec's own "Système de design gouvernemental", published at https://design.quebec.ca. The pages I opened describe it as defining "the rules and components for designing accessible digital services" for design and development teams, with content guidelines, design elements (bases, components, patterns) and development resources including a design kit and a development kit. The Québec.ca page about digital-service requests names the Secrétariat à la communication gouvernementale's digital team as the contact for design-system questions. design.quebec.ca is therefore the organization's real design-system site, and the live site uses it: the root stylesheet declares dozens of `--qc-*` custom properties (`--qc-color-blue-piv`, `--qc-font-family-header`, `--qc-spacer-*`, `--qc-grid-breakpoint-*`, `--qc-box_shadow-*`), whose values supplied the tokens above. The design.quebec.ca pages I could open did not publish token values, so values in this file come from the live CSS and measurement, not from the docs; deeper docs pages I tried returned 404.

The architecture is token-first and layered: raw color ramps (blue pale, light, regular, piv, medium, dark; red, pink, green, yellow, purple, grey) feed semantic roles (`--qc-color-link-text`, `--qc-color-text-primary`, `--qc-color-accent`, `--qc-color-error`, `--qc-color-formfield-border`), and there are light and dark theme display switches (`--qc-light-theme-display`, `--qc-dark-theme-display`). Type, spacing, line-height and shadow scales follow the same naming pattern.

## Do's and Don'ts

- Do use `#095797` for links and `#223654` for headings and body text; do keep text-on-chip contrast as measured (`#095797` on `#dae6f0`).
- Do keep corners square (0px) and borders at 1px.
- Do set page titles in Roboto bold and everything else in Open Sans.
- Do write task-oriented French labels and use "Voir plus" with an arrow for overflow.
- Don't introduce rounded pills, gradients or photography into the directory layout.
- Don't use the coral accent for large fills; on this page it is a short rule only.
- Don't use browser-default link colors; links take the system blue and turn red when active.
- Don't alter the government signature's proportions or colors.

## Responsive Behavior

The system declares breakpoints at 0, 768px, 992px and 1200px. At the 390px mobile measurement the h1 shrinks from 48px/56px to 36px/40px; the three-column thematic grid was not measured at that width. Chips and the input measure 40px tall. The search bar keeps a maximum width of 40rem and shrinks with the viewport.

## Iteration Guide

1. Start from the tokens: canvas `#ffffff`, ink `#095797`, ink-heading `#223654`, primary `#dae6f0`.
2. Build headings with Roboto 700 at 48/56 (36/40 on mobile); everything else Open Sans 16/24, chips 14/16 at weight 600.
3. Use 0px radius, 1px borders, 40px control heights, 11px 8px chip padding.
4. Add depth only with the single faint navy shadow on cards.
5. Compose the page as title, subtitle, search, chips, then a three-column icon-and-links grid.
6. Verify new work against the live `--qc-*` variables before introducing any new color.
