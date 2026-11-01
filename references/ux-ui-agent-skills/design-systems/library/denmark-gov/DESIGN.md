---
version: alpha
name: Danish Government (Digitaliseringsstyrelsen)
category: "Design Systems"
description: "Digitaliseringsstyrelsen's site (digst.dk) is a warm, editorial public-sector design: a cream canvas (#f5f1e6), deep aubergine ink and primary (#3f1a2b), white cards, and a single light-weight humanist sans loaded as headings-font and body-font at 30px display and 16px body with wide letter-spacing. Controls are round, with a pill-radius search field (9999px), and burgundy panels carry white-on-dark link lists."
colors:
  canvas: "#f5f1e6"
  page-largest: "#3f1a2b"
  ink: "#3f1a2b"
  primary: "#3f1a2b"
  primary-dark: "#2d131f"
  surface-white: "#ffffff"
  text-input-bg: "#e8e6e6"
typography:
  display:
    fontFamily: headings-font, "helvetica neue", helvetica, roboto, arial, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 39px
    letterSpacing: 0.75px
  display-mobile:
    fontFamily: headings-font, "helvetica neue", helvetica, roboto, arial, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 31.2px
    letterSpacing: 0.6px
  heading:
    fontFamily: headings-font, "helvetica neue", helvetica, roboto, arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20.8px
    letterSpacing: 0.4px
  body:
    fontFamily: body-font, "helvetica neue", helvetica, roboto, arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
    letterSpacing: 0.72px
  link:
    fontFamily: body-font, "helvetica neue", helvetica, roboto, arial, sans-serif
    fontSize: 17.6px
    fontWeight: 700
    lineHeight: 0px
    letterSpacing: 0.44px
  input:
    fontFamily: body-font, "helvetica neue", helvetica, roboto, arial, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20.8px
rounded:
  pill: 9999px
spacing:
  s2: 3px
  s3: 4px
  s4: 8px
  s5: 10px
  s6: 13px
  s7: 14px
  s8: 16px
  s9: 20px
  s10: 35.2px
components:
  link:
    textColor: "{colors.page-largest}"
    typography: "{typography.link}"
    padding: 35.2px
    borderColor: "{colors.surface-white}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-largest}"
  nav-link:
    textColor: "{colors.page-largest}"
    typography: "{typography.body}"
  panel:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    padding: 16px
  card:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.page-largest}"
    typography: "{typography.input}"
    rounded: "{rounded.pill}"
    padding: 4px 48px 4px 16px
    height: 40px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
---

## Overview

The captured page is the home page of the Danish Agency for Digital Government (Digitaliseringsstyrelsen, digst.dk, language `da`). It is an editorial, magazine-like government site rather than a service portal. A cream canvas (#f5f1e6) holds a header with a crown-and-wordmark logo, a small service menu (Nyheder, Tal og statistik, Job, Om os, Kontakt, Presse, English) and a round search button, then a primary navigation row of dropdown topics (It-løsninger, Data og it-arkitektur, Kunstig intelligens, Digital inklusion, Digital transformation, Tele, Tilsyn).

The content area is built from tiles in a three-column grid. The lead tile is a large documentary-style photograph, a person studying medical scans on screens, with a burgundy label chip ("AI-cases med dokumenteret effekt") and a white headline box laid over the bottom edge of the image ("Tre gode råd til at lykkes med kunstig intelligens"). Beside it sits a burgundy support panel with a round-arrow link. Below, a white news list and two burgundy audience panels ("For borgere", "For virksomheder") with photographs of hands on a laptop and a tablet, each overlaid with orange line graphics, then three white article cards with photographs of people at work and at home. A full-width aubergine footer closes the page with four columns of links and contact details.

The voice is direct and plain Danish: calls to action are phrased as "Få hjælp til MitID", "Gå til support", "Hent guiden til gode brugeroplevelser". Imagery is candid and human, the palette is two-tone (cream and aubergine) plus white, and one repeated control shape, a small round arrow icon, signals every link.

## Colors

- **Canvas (#f5f1e6)** is the page background, set on the body, and the text colour inside burgundy panels and the footer.
- **Ink and primary (#3f1a2b)** is the aubergine used for nearly all text, for the panel and footer backgrounds, and for borders. In the site's stylesheet it is the first brand colour (`--color-a`) and it is also set as the default link colour and the body text colour.
- **Primary dark (#2d131f)** is the pressed or hover shade of the same aubergine, used for search-icon states.
- **White (#ffffff)** fills article cards, the news list and the headline box over the lead photograph, and outlines the round arrow icons on burgundy panels.
- **Input grey (#e8e6e6)** fills the search field and the round search button.

The stylesheet exposes more palette variables (letter-keyed colours such as `--color-b` to `--color-g`, greys, alert and chart colours) but the page itself is dominated by the three colours above, so the rest are not recorded as tokens.

## Typography

Two web fonts are declared, `headings-font` and `body-font`. In the page HTML both `@font-face` rules point to the same file, `/media/qp4jxw0y/paralucent-light.woff2`, so headings and body are drawn from one light-weight font file; weight 700 is requested in CSS but only that one file is declared. Fallbacks are "helvetica neue", helvetica, roboto, arial and sans-serif.

The lead headline is 30px/39px at weight 700 with 0.75px tracking (24px/31.2px on mobile). Panel headings are 16px/20.8px at 700. Body is 16px on a 25.6px line with generous 0.72px tracking, and bold link labels run at 17.6px with 0.44px tracking; the search input is 13px. The site's own supplementary stylesheet adds letter-spacing to headings, links, list items and paragraphs, which gives the type its airy, slightly wide look. No separate font substitute is documented; helvetica neue or arial is the stated fallback.

## Layout

A centred `container` with breakpoint variables (`--bs-breakpoint-sm/md/lg`) at 780px, 992px and 1220px and a `--grid-gutter-width` tied to a 32px spacing step. Content is arranged in tiles: a wide lead tile plus a narrow side panel, then rows of three equal tiles. Tiles share one gutter and align to common top and bottom edges, so the rhythm is orderly and dense but never cramped.

Spacing in the capture is a rem-based scale exposed as `--spacing-N` variables; measured paddings include 16px inside panels and cards, 20px, and a 35.2px indent on arrow links. Small gaps of 4px and 8px separate icon from label.

## Elevation & Depth

Depth is flat. Cards are separated from the cream canvas by their white fill and by a thin aubergine rule across the top edge of the white news and article tiles; no drop shadows are used (the measured shadows are zero-offset, zero-blur insets for focus and border effects). The only layering is the white headline box overlapping the lead photograph. Keep surfaces flat and let colour blocks create hierarchy.

## Shapes

Rectangles dominate: photographs, tiles and panels have square corners. Round shapes are reserved for controls: the search field uses a pill radius of 9999px, and the small arrow, search and social icon buttons are circles (measured 50% radius). This contrast, square content and round controls, is the shape language.

## Components

- **Header.** Cream background, crown logo and wordmark at left, a small-type service menu at right, a round grey search button, and a navigation row with chevron dropdowns.
- **Lead tile.** Photograph with burgundy label chip and a white headline box in 30px bold.
- **Support and audience panels.** Aubergine fill, cream text, 16px heading, link list with a white-outlined round arrow before each item.
- **News list.** White card with a thin aubergine top rule, underlined headline links, date and category in small type, and a "Flere nyheder og nyhedsbrev" link with a filled round arrow.
- **Article cards.** Photograph on top, 16px heading, short summary, arrow link.
- **Search field.** 40px tall, grey (#e8e6e6) fill, pill radius, 13px text, space reserved at the right for the icon.
- **Footer.** Aubergine, cream text, four link columns, contact details and round social icons, the wordmark at bottom right.

## Design System Architecture

The Danish Government has a shared open-source design system, [Det Fælles Designsystem at designsystem.dk](https://designsystem.dk), whose page describes it as developed by Digitaliseringsstyrelsen and Erhvervsstyrelsen for self-service solutions on borger.dk and Virk, with a style guide, components and code packages. digst.dk does not use it: the page's HTML and the two stylesheets it loads (`/dist/assets/main-BjfE6Y_r.css` and `/media/uzuj3xfa/digst-2026-09-01.css`) contain no reference to designsystem.dk or its classes, so no values are taken from it.

The de-facto system is a site-specific stylesheet: BEM-style classes (`main-header`, `header-logo__link`, `service-menu__list`, `btn-arrow`), a `btn-c` button with per-theme modifiers (`btn--a`), and CSS custom properties for letter-keyed colours (`--color-a` aubergine, `--color-a-text` cream), `--theme-color-*` per-module theming, a `--spacing-N` scale, `--font-size-*` steps with `-sm/-md/-lg` responsive variants, `--headings-font-family` and `--body-font-family`. Modules pick a colour letter, which sets background, text, link and hover shades together.

## Do's and Don'ts

- Do use cream (#f5f1e6) for the page and aubergine (#3f1a2b) for text, panels and footer; swap them on dark panels.
- Do pair every link with the round arrow icon and plain action wording.
- Do use candid photography of real work and home settings.
- Do keep tracking wide: 0.72px on body copy.
- Don't use shadows; separate surfaces with colour blocks and a thin top rule.
- Don't round photographs or panels; only controls are round.
- Don't put aubergine text on aubergine panels; switch to cream.
- Don't use pure black for text.

## Responsive Behavior

Breakpoints are declared at 780px, 992px and 1220px. At the 390px mobile measurement the lead headline drops from 30px to 24px (line height 31.2px, tracking 0.6px). The stylesheet defines a `hamburger-menu` and gives the logo image a smaller maximum width below 780px; the tile columns were measured only at the desktop capture. Font-size variables carry `-sm`, `-md` and `-lg` variants that step the scale per breakpoint.

## Iteration Guide

1. Start with canvas #f5f1e6 and ink #3f1a2b; use white (#ffffff) only for cards.
2. Set body at 16px/25.6px with 0.72px tracking; headlines at 30px/39px bold with 0.75px tracking.
3. Compose three-up tiles on one shared gutter; make each tile either a white card or an aubergine panel.
4. Mark every link with a circular arrow; use a pill (9999px) search field at 40px height with an #e8e6e6 fill.
5. Keep corners square except controls; use no shadows.
6. Write calls to action as short imperative Danish phrases.
