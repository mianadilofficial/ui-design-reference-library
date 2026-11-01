---
version: alpha
name: Clay Boan
category: "Tech & AI"
description: "Clay Boan's portfolio is an almost black stage (#0e0e0e) with white type, set entirely in Aeonik Pro 500 uppercase: 11.2px parenthetical labels and navigation against 144px to 160px project titles with -5.76px tracking, plus a blackletter Emeritus Display hero mark, a 3D clay render, no radii, no shadows and no buttons."
colors:
  canvas: "#0e0e0e"
  ink: "#ffffff"
  primary: "#ffffff"
  label-gray: "#424242"
  ink-gray: "#86868b"
  placeholder: "#f5f5f7"
typography:
  display:
    fontFamily: "\"Aeonik Pro\""
    fontSize: 11.2px
    fontWeight: 500
    textTransform: uppercase
  project-title:
    fontFamily: "\"Aeonik Pro\""
    fontSize: 144px
    fontWeight: 500
    lineHeight: 160px
    letterSpacing: "-5.76px"
    textTransform: uppercase
  project-title-xl:
    fontFamily: "\"Aeonik Pro\""
    fontSize: 160px
    fontWeight: 500
    letterSpacing: "-6.4px"
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 8px
  s2: 12.8px
  s3: 64px
components:
  project-link:
    textColor: "{colors.ink}"
    typography: "{typography.project-title}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 64px 0px 12.8px
---

# Clay Boan

## Overview

Clay Boan (clayboan.com, page title "Clay Boan — Multidisciplinary Designer") is the portfolio of a designer who, on the About page (opened for this document), describes himself as "a Multidisciplinary Designer based in NYC with a focus on Art Direction, Branding, Design and Motion", currently at Basic® and on select projects with Legend. The About page lists a "Collaborations" set that includes AKQA, Apple, Nike, Google, Gucci, Spotify and Uber, and a "Disciplines of Focus" list (Strategy, Art Direction, Branding, Identity, Visual Design, Interactive Design, Graphic Design, Motion Design, Development, 3D/CGI, TVC, AR/VR, AI).

The home page is a single dark stage. The first screen is a matte black 3D render of a clay-textured animal mask with pointed ears and a studded collar, with the name "CLAY" set in a white blackletter display face across its center. Along the top edge run tiny navigation labels (a "CB" mark with a diamond, SELECTED WORK, ABOUT, BOANYARD, LET'S CHAT) and at the bottom center sits the parenthetical subtitle "(MULTIDISCIPLINARY DESIGNER)". The stylesheet loads Emeritus Display at weight 900, and the blackletter "CLAY" is the only display lettering in the capture; no DOM text in that family was measured, so no size is recorded for it and the face is not tied to the lettering as a measurement.

Below the hero, the featured work is a list of enormous uppercase project titles (in order on the page: Apple, Nike x NBA, Google, Gucci x Oura, then "See selected work"), set at 144px to 160px with very tight tracking. The scroll is handled by an inner scroller (the measured inner scroll height is 8916px against a 2400px page height).

The voice is playful and informal ("YO, I'm Clay", a rotating greeting list: "What's up", "Yo", "Bonjour", "Hallo", "Zdravo", "Ciao", "Ola"), contrasted with a strict visual system: one family, one weight, only white on near-black, and every functional label wrapped in parentheses and set uppercase.

## Colors

The color system is two values plus two grays.

- **Canvas `#0e0e0e`** (`--color-black`): the page background and the largest measured area (about 67% of the capture is `#0d0d0e` after JPEG).
- **Ink `#ffffff`** (`--color-white`): all body and navigation text (254 characters) and all project titles. The generator also assigns it as `primary`, because the page has no button or accent fill; white is the only foreground color.
- **Label gray `#424242`** (`--color-tundora`): the measured color of the "(FEATURED WORK)" section label (121 characters), a dark gray that sits quietly on the black canvas.
- **Ink gray `#86868b`** (`--color-jumbo`) and **placeholder `#f5f5f7`** (`--color-placeholder`): declared as root variables and present in the stylesheet (50 occurrences each); not observed on a measured element of the home page.

A white background (`#ffffff`) is the second measured background area (weight 9209), so some content blocks sit on white. The stylesheet also holds translucent values (`#ffffff33`, `#ff00001a`, `#8080804d`). Color on the page otherwise comes from imagery: the 3D render is monochrome gray-black with white specular highlights.

## Typography

Two families are loaded: **Aeonik Pro** (a 500 normal face; every one of the 375 measured characters is weight 500) and **Emeritus Display** (900 normal, used for the blackletter hero lettering).

| Role | Size / line height | Spacing | Case |
|---|---|---|---|
| Label, navigation, subtitle (`display`) | 11.2px | normal | uppercase |
| Project title (`project-title`) | 144px / 160px | -5.76px | uppercase |
| Project title, large (`project-title-xl`) | 160px | -6.4px | uppercase |

The 11.2px size is used for everything small: navigation, parenthetical labels, credits (265 characters). The project titles are 160px (72 characters) and 144px (29 characters) with letter spacing at -4% of the size (-6.4px and -5.76px). A single 22.4px size appears on 9 characters. There are no intermediate sizes: the scale jumps from 11.2px to 144px, which is the central typographic gesture of the page.

Parentheses are part of the typography: section labels and credit headings read "(FEATURED WORK)", "(ABOUT)", "(DEVELOPMENT)", "(3D)", "(SOCIAL)", "(MULTIDISCIPLINARY DESIGNER REPPIN)".

**Font substitutes.** Aeonik Pro and Emeritus Display are commercial or custom faces for which no foundry page was opened. For a prototype, use a neutral grotesque at weight 500 in place of Aeonik Pro (keeping uppercase and the tracking above) and a blackletter display face for the single hero word.

## Layout

The page is built from full-width stacked sections at 1280px: a hero of one full screen with navigation along the top edge (labels at the far left, center-left, center-right and far right, rather than a centered bar), then the project list, an about block, a credits block and the footer.

The project list runs as large type at 160px and 144px, one title per line, spanning the width of the viewport (the measured element for "APPLE" is 1280px wide). The footer block measures 624px tall with padding 64px 0px 12.8px and carries the parenthetical credit lists (Development, 3D, Social) and social links (IG, IN, TW).

Measured gaps: 12.8px (3 uses). Paddings: 64px (3) and 8px (2). Spacing tokens: 8px, 12.8px and 64px. The design relies on very large type and imagery for rhythm, with open dark space around the hero render.

## Elevation & Depth

None. No box shadows were measured (the stylesheet lists `none` six times) and there are no borders. Depth comes entirely from the 3D render, which is lit with strong specular highlights on a matte black form against a black ground, and from the scale contrast between tiny labels and giant titles.

## Shapes

No border radii were measured on any element, so the token set holds a single `none` value of 0px. The shapes on the page are the 3D mask and collar in the hero and the image blocks of the project list. The wordmark area uses a small "CB" with a diamond glyph.

## Components

The page has very few components and no buttons.

- **Navigation**: Aeonik Pro 11.2px uppercase white text on the canvas; items are "CB" with a diamond, SELECTED WORK, ABOUT, BOANYARD and LET'S CHAT (a mailto link to hello@clayboan.com). A "Play" and a "Menu" control also appear in the page text.
- **Section label**: a parenthetical heading such as "(FEATURED WORK)" in `{colors.label-gray}`.
- **Project link**: the project name as a 144px to 160px uppercase link in `{colors.ink}`, with a descriptor underneath on the live page (for example "Apple iPad", "Google Pixel Buds").
- **About greeting list**: a rotating set of greetings and a "Yooo" button that links to /about.
- **Footer**: canvas-colored, padding 64px 0px 12.8px, with parenthetical credit headings and IG / IN / TW links.

No hover states were recorded for this page (the hover list is empty), so interaction styles are not measured.

## Design System Architecture

No public design system, brand guideline or press kit was found. The home page (https://www.clayboan.com/) and the About page (https://www.clayboan.com/about) were opened; neither links to brand guidelines. The credits on both pages list development and 3D names, but the pages do not state that those names relate to this site, so no site credit is recorded.

The de-facto system is a handful of root custom properties: `--color-black` (`#0e0e0e`), `--color-white` (`#fff`), `--color-tundora` (`#424242`), `--color-jumbo` (`#86868b`), `--color-placeholder` (`#f5f5f7`), two font variables (`--font-f-aeonik-pro`, `--font-f-emeritus-display`), a viewport-height helper `--vh`, and a set of named easing curves (`--ease-out-cubic` `cubic-bezier(.215,.61,.355,1)`, `--ease-in-out-cubic`, `--ease-out-quad`, `--ease-in-out-quad`, `--ease-out-quart`, `--ease-in-out-quart`, `--ease-none`). Typography and color are applied through these variables (22 uses of the Aeonik variable, 20 of the Emeritus variable).

## Do's and Don'ts

Do
- Keep the page to `#0e0e0e` and `#ffffff` with the single dark gray `#424242` for section labels.
- Set everything in Aeonik Pro 500 uppercase; wrap labels in parentheses.
- Jump straight from 11.2px labels to 144px to 160px titles with tracking of about -4% of the size.
- Let 3D renders and project imagery carry the color and depth.
- Keep the voice informal and greeting-led in the copy.

Don't
- Don't add buttons, borders, radii or shadows; none were measured.
- Don't introduce intermediate type sizes between the label and the title tiers.
- Don't use bold or light weights of Aeonik Pro; every character measured is 500.
- Don't set project titles in mixed case.
- Don't center the navigation; the labels are distributed to the edges.

## Responsive Behavior

The mobile pass (390px) recorded different font sizes for the same roles: labels 13.8931px (233 characters), project titles 71.4504px (72 characters) and 67.4809px (29 characters), and a 27.7863px size (9 characters). The section label "(FEATURED WORK)" measures 121px wide and the subtitle line 358px wide at 13.8931px. The mobile pass recorded no layout data (no header or card-column figures).

How the navigation, the hero render and the project list rearrange at mobile widths beyond these sizes was not measured.

## Iteration Guide

1. Start from `canvas` `#0e0e0e` and `ink` `#ffffff`; add `label-gray` `#424242` for quiet labels.
2. Load Aeonik Pro at weight 500 and use only uppercase.
3. Use two tiers: 11.2px labels and navigation, and 144px / 160px titles with letter spacing of -5.76px / -6.4px.
4. Wrap section labels and credit headings in parentheses: "(FEATURED WORK)", "(ABOUT)".
5. Start with a full-screen hero holding one 3D render and one display word, with tiny navigation at the top edge and a parenthetical subtitle at the bottom.
6. Keep the footer padding at 64px 0px 12.8px with parenthetical credit headings.
7. Treat radii and shadows as absent (0px, none) unless a new element is measured.
