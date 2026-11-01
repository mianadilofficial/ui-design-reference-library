---
version: alpha
name: Universidade Federal de Santa Catarina (UFSC)
category: "Design Systems"
description: "UFSC institutional portal (ufsc.br): a white canvas with #333333 Open Sans text, a strong #1659bf blue header and footer band with pale #dcecff navigation text, compact 15px body type, 5px and 10px radii, no shadows and a dense three-column Portuguese-language news layout."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#1659bf"
  surface-grey: "#e8e8e8"
  surface-card: "#eeeff1"
  ink-nav: "#dcecff"
  ink-navy: "#172938"
  ink-muted: "#666666"
  link: "#2c66ce"
  text-input-border: "#e4e2e1"
  footer-border: "#e9e9e9"
typography:
  display:
    fontFamily: "\"Open Sans\", Helvetica, Arial, Helmet, Freesans, sans-serif"
    fontSize: 27px
    fontWeight: 700
    lineHeight: 30px
  display-mobile:
    fontFamily: "\"Open Sans\", Helvetica, Arial, Helmet, Freesans, sans-serif"
    fontSize: 22px
    fontWeight: 700
    lineHeight: 22px
  heading:
    fontFamily: open_sansbold, Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 700
    textTransform: uppercase
  subheading:
    fontFamily: "\"Open Sans\", Helvetica, Arial, Helmet, Freesans, sans-serif"
    fontSize: 28.8px
    fontWeight: 700
    lineHeight: 25px
  body:
    fontFamily: "\"Open Sans\", Helvetica, Arial, Helmet, Freesans, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 17.25px
  nav:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 11px
    fontWeight: 400
  link:
    fontFamily: "\"Open Sans\", Helvetica, Arial, Helmet, Freesans, sans-serif"
    fontSize: 13.5px
    fontWeight: 400
  input:
    fontFamily: sans-serif
    fontSize: 14.85px
    fontWeight: 400
rounded:
  xs: 5px
  sm: 10px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 7px
  s6: 7.65px
  s7: 8px
  s8: 9.45px
  s9: 10px
  s10: 11.48px
components:
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
    padding: 4px
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-nav}"
    padding: 14px 0px 0px
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 8px
    height: 34px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    padding: 10px 15px 0px 12px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    padding: 10px 0px 0px
    borderColor: "{colors.footer-border}"
---

## Overview

The measured page is https://ufsc.br/, the portal of the Universidade Federal de Santa Catarina (page title "Universidade Federal de Santa Catarina"), a Brazilian federal university; the name used here is therefore the university's, not that of the design system named in the queue. It is a dense, institutional, Portuguese-language news portal: a strong blue header band carries the coat of arms and the wordmark in white uppercase, a skip-link row and utility links (English, Acessibilidade, Alto contraste, Mapa do site) above it, a search box and social icons to the right, and a darker blue strip below with service links (Contato, Acesso à Informação, Fala.BR, Ouvidoria, Telefones, Imprensa).

The body is a three-zone layout: a left column of grouped navigation links under blue-ruled grey section headings (Institucional, Comunidade, Ensino, Ingresso, Estudante, Portais, Estrutura), a central column with a large landscape news photograph, a bold headline and a list of "Destaques" news items with excerpts, and a right column of coloured banner tiles (a gold events calendar, green admissions tiles, blue transparency and observatory tiles, campaign banners). Below the news sit a grey "Últimos Vídeos" panel with a video grid. Voice is formal and informative; headlines are plain statements of institutional news, with excerpts ending in "[…]".

## Colors

The canvas is `{colors.canvas}`. Body text is `{colors.ink}`, a dark neutral grey; `{colors.ink-muted}` is a mid grey used for secondary text, and `{colors.ink-navy}` is a very dark blue-slate. The institutional colour is `{colors.primary}`, a strong blue measured as the header, nav strip and footer fill. Navigation text on that blue is `{colors.ink-nav}`, a pale blue, and in-content links are `{colors.link}`, a lighter blue. Surfaces: `{colors.surface-grey}` for section header bars and the video panel, `{colors.surface-card}` for cards and panels. Borders are `{colors.text-input-border}` on the search input and `{colors.footer-border}`.

The right-hand banner tiles introduce gold, green and darker blue as content colours; these were seen in the capture but not extracted as tokens, so they are not declared here.

## Typography

Open Sans is the main family (400 and 700 loaded), with Helvetica, Arial and generic sans-serif fallbacks; `open_sansbold` is a named bold font-face used for the small section headings. Measured tokens: `{typography.display}` 27px / 30px at weight 700 (22px on a 390px viewport, `{typography.display-mobile}`); `{typography.heading}` 14px uppercase bold for left-column section headings; `{typography.subheading}` 28.8px bold; `{typography.body}` 15px with 17.25px line height; `{typography.nav}` 11px Arial for utility nav; `{typography.link}` 13.5px; `{typography.input}` 14.85px. Text is small and compact, typical of a content-rich portal. An icon font ("icomoon") supplies the social and utility icons.

### Font substitutes

Open Sans is an open font, so no substitute is required.

## Layout

A multi-column portal layout. The header spans the full width in blue; below it a narrow left column, a wide centre column and a narrower right column share the body. Spacing tokens are very small and dense: `{spacing.s1}` to `{spacing.s10}` run from 2px up to 11.48px. Left-column links are separated by thin grey rules; section headings sit on grey bars with a blue top border. The centre column stacks image, headline, a blue-ruled "Destaques" bar and news items with ample white space between items.

## Elevation & Depth

No box shadows were measured on the page. Separation comes from flat colour fields: the blue header, grey section bars, hairline rules and photo banners. There is no layering or blur; interactive affordances are colour changes and underlines only.

## Shapes

Radii are minimal: `{rounded.xs}` 5px on the search input and some panel corners, and `{rounded.sm}` 10px on a few elements (the carousel number bullets appear round in the capture, though a circular radius was not among the measured values). Most containers are square-cornered.

## Components

- **Navigation** (`nav`, `nav-link`): fill `{colors.primary}`, text `{colors.ink-nav}`, 11px Arial.
- **Link** (`link`): `{colors.link}`, 13.5px, 4px padding.
- **Text input** (`text-input`): white, `{rounded.xs}`, 34px high, border `{colors.text-input-border}`.
- **Card** (`card`): `{colors.surface-card}` fill, 10px 15px 0px 12px padding.
- **Left-menu group**: grey title bar with blue top rule and a list of links separated by hairlines.
- **News item**: bold headline, short excerpt, generous spacing.
- **Carousel**: numbered round bullets over the lead photograph.
- **Footer** (`footer`): `{colors.primary}` fill with white text and a pale top border. The extractor found no conventional primary button on the page, so no `button-primary` token is declared.

## Design System Architecture

No official public design system for the ufsc.br portal was found. The dsUrl supplied, https://bold.bridge.ufsc.tech, is real: it is the Bold design system, described on its own home page in the text "Welcome to bold, bridge's open source design system", offering design guidelines (accessibility, data visualisation, colour, grid, iconography, typography, theme, internationalisation), a component list from Accordion to Stepper, WCAG AA compliance claims, light and dark themes, and a Figma file. I read the page data of that Gatsby site because its HTML is rendered client-side. I could not confirm that ufsc.br uses Bold; the portal as measured uses Open Sans, a WordPress build (the page footer credits WordPress) and no CSS custom properties, so no values were taken from Bold and everything here is measured from the portal itself. The fetched homepage footer links to a visual-identity page, but I did not read it, so no brand-guideline values are stated.

## Do's and Don'ts

- Do use the strong blue `{colors.primary}` for the identity band and keep text on it pale and uppercase for the wordmark.
- Do keep body text in `{colors.ink}` Open Sans at a compact size.
- Do group navigation under short uppercase headings on grey bars.
- Do separate list items with thin grey rules rather than shadows.
- Do provide the accessibility utility bar (high contrast, site map) at the top of the page.
- Don't add shadows or heavy rounding; the measured radii are 5px and 10px.
- Don't use the gold, green and darker blue banner colours as chrome; they belong to promotional tiles.
- Don't treat the Bold design system as the source of these values.

## Responsive Behavior

On a 390px viewport the h1 shrinks from 27px to 22px (`{typography.display-mobile}`). The portal has a skip-link bar at the top, and the accessibility links include a high-contrast switch. How the three columns reflow was not measured, so it is not described.

## Iteration Guide

1. Start with a white canvas, `{colors.ink}` text in Open Sans and the blue identity band.
2. Put navigation in a left column of grouped links under grey titled bars with a blue top rule.
3. Use a large lead photograph and bold news headlines in the centre.
4. Use flat colour tiles in the right column for promotions.
5. Keep corners square or at most `{rounded.xs}`.
6. Keep an accessibility utility row visible.
7. Re-run the gate after any rename.
8. Write headlines as short factual statements, follow them with a two-or-three line excerpt ending in a bracketed ellipsis, and keep the register formal, as on the measured news list.
9. When adding a new promotional tile, give it a flat colour field and a centred bold white title, matching the existing banner column; take the colour from a fresh measurement rather than from this document, because the tile colours are not tokens here.
10. Keep utility links such as English, Acessibilidade, Alto contraste and Mapa do site in a small uppercase row at the very top, above the identity band, because that is where the measured portal places them.
