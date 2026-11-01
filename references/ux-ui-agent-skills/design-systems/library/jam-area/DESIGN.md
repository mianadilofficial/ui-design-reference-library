---
version: alpha
name: Jam Area
category: "Portfolio"
description: "Italian communication and branding agency (Lake Maggiore): a single 800px screen on cream #fefff8 with charcoal #1e1e1e, giant 301px FKScreamer JAM and AREA wordmarks, 18.8px NeueMontreal-Bold labels, a red #e11010 accent dot, floating work thumbnails and no shadows."
colors:
  canvas: "#fefff8"
  ink: "#1e1e1e"
  primary: "#1e1e1e"
  accent: "#e11010"
  surface-black: "#000000"
  ink-2: "#ffffff"
typography:
  display:
    fontFamily: FKScreamer, Helvetica, sans-serif
    fontSize: 301.056px
    fontWeight: 400
    lineHeight: 270.95px
  display-mobile:
    fontFamily: FKScreamer, Helvetica, sans-serif
    fontSize: 120px
    fontWeight: 400
    lineHeight: 120px
  nav:
    fontFamily: NeueMontreal-Bold, Helvetica, sans-serif
    fontSize: 7.5264px
    fontWeight: 400
    lineHeight: 7.5264px
    textTransform: uppercase
  link:
    fontFamily: NeueMontreal-Medium, Helvetica, sans-serif
    fontSize: 301.056px
    fontWeight: 400
    lineHeight: 270.95px
rounded:
  xs: 62.72px
spacing:
  s1: 18.82px
  s2: 37.63px
  s3: 62.72px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-2}"
    padding: 18.816px
  nav-link:
    textColor: "{colors.ink-2}"
    typography: "{typography.nav}"
---

## Overview

The measured page is `https://www.jamarea.com/en`, titled "Jam Area | Agenzia di comunicazione, branding e digital marketing." It is a single 1,280px by 800px screen (`scrollHeight` 800); a cookie dialog (Cookiebot) and the menu panel were hidden by the extractor and are not documented as brand UI. Jam Area describes itself, on the page, as a communication agency for branding and digital marketing; the fetched page places it at Lake Maggiore, Italy, and shows a footer with Instagram, Behance and LinkedIn links.

The capture is a poster. A very large condensed wordmark, JAM at the left and AREA at the right, fills the lower half of the viewport, in charcoal on a cream field. Between them, centred, a bold block of text reads "©JAMAREA COMMUNICATION AGENCY BRANDING AND DIGITAL MARKETING", and at the bottom centre sits a tiny "LET'S JAM" label. Across the upper half, eight small portrait thumbnails of client work float at irregular positions with large gaps: a dark "UNO PIÙ" tile, a dark interface tile, a night-time architectural photograph, a blurred grey sphere, an "estra" campaign poster with two people, a building facade, and a pale "AQUAELITE" tile. At the top left a small black square precedes the label MENU; at the top right the label WRITE is followed by a black dot; a small red mark pokes in at the top edge.

The page's work list (fetched) names Unopiù, Di Sante, ATLANTE, (R)Evolution (Ritmonio at Salone del Mobile 2024), Estra, Estra and Alia, and Aquaelite. The playful slogan is "LET'S JAM TOGETHER RIGHT NOW OH YEA". The tone is energetic and informal; the design lets the typography and the work speak with almost no descriptive copy.

## Colors

- **Canvas `#fefff8`** (`colors.canvas`, root `--c-bg`): a warm off-white cream.
- **Ink `#1e1e1e`** (`colors.ink`, `colors.primary`; root `--c-text`, `--c-bg-alt` and `--c-shape`): charcoal carries 349 of 425 weighted characters and is also a background (1,024 area weight) for the inverse state.
- **Accent `#e11010`** (`colors.accent`, root `--c-accent`): a saturated red; it appears in the measured background list (area weight 0, so only a tiny mark) and as the small red mark at the top of the capture. It is not used for text or buttons in the measured screen.
- **Black `#000000`** (`colors.surface-black`): 1,010 area weight, from the dark thumbnails.
- **White `#ffffff`** (`colors.ink-2`): the computed color of the h1 "JAM" and the MENU/WRITE labels (76 characters). In the capture these elements render dark on the cream canvas, which the computed style alone does not explain, so the white value is recorded as measured and no blend behaviour is claimed.
- Root `--c-text-alt` is `#fefff8`, the inverse text color.

## Typography

Fonts loaded: **NeueMontreal-Medium**, **NeueMontreal-Bold** and **FKScreamer**, all at weight 400 as measured.

- **Display (FKScreamer)**: 301.056px / 270.95px (line-height 0.9), the JAM and AREA wordmarks. On a 390px viewport it measures 120px / 120px.
- **Body/labels (NeueMontreal-Bold)**: 18.816px for the centred "©JAMAREA…" block, which carries 381 of 425 characters.
- **Nav (NeueMontreal-Bold)**: 7.5264px / 7.5264px uppercase for MENU and WRITE on desktop (12px on 390px).
- **Link role (NeueMontreal-Medium)**: measured at 301.056px / 270.95px, color `#1e1e1e` (an empty-text link 86px by 117px).
- By characters: NeueMontreal-Bold 418, FKScreamer 7. Sizes: 18.816px (381), 7.5264px (37), 301.056px (7).

The scale is a deliberate extreme: nearly everything is either a giant condensed display or a tiny label. FKScreamer is a commercial display face and NeueMontreal is a commercial grotesk; Helvetica is the declared fallback for both.

## Layout

- 1,280px by 800px; the root variables define `--height: 100svh`, a 12-column grid (`--col-1` to `--col-12` computed from `--width`, `--columns` and `--gutter`) with `--gutter: 2rem` and `--offset` helpers.
- Measured gaps: 18.816px (7) and 37.632px (1); paddings: 18.816px (6) and 62.72px (1). The nav padding is 18.816px; the page's spacing tokens (18.82, 37.63, 62.72px) are multiples of the 18.816px base.
- Thumbnails sit on an irregular two-row scatter in the upper half; the wordmarks are pinned to the bottom, spaced widely with the descriptive block in the gap.

## Elevation & Depth

No shadows (`boxShadows` empty) and one border (`#1e1e1e`, 1 use). Depth comes from overlap-free scatter, scale contrast and the dark thumbnails against the cream canvas.

## Shapes

One measured radius: 62.72px on a single element (`rounded.xs`); which element it is was not measured. The stylesheet publishes `--radius: 2rem`. The thumbnails are sharp-cornered rectangles of varying portrait and landscape ratios. The label squares and dots are small solid shapes (the black square beside MENU, the black dot beside WRITE).

## Components

- **Nav**: MENU at the left with a black square, WRITE at the right with a black dot, NeueMontreal-Bold 7.5264px uppercase, 18.816px padding, 47px high and full width.
- **Wordmark**: JAM (h1, FKScreamer 301.056px) and AREA (link) at the bottom.
- **Descriptor block**: centred "©JAMAREA / COMMUNICATION AGENCY / BRANDING / AND DIGITAL MARKETING" in 18.816px bold, line-height tight.
- **Work thumbnails**: unframed images floating at various positions; they link to the case studies listed on the page.
- **CTA label**: "LET'S JAM" at the bottom centre. No filled button, input or card was detected, so no `button-primary` token is declared.

## Design System Architecture

No public design system was found; the page links to none. The site's stylesheet publishes a small, tidy set of root variables: colors (`--c-bg`, `--c-bg-alt`, `--c-text`, `--c-text-alt`, `--c-accent`, `--c-shape`), shape and layout (`--radius`, `--gutter`, `--gutter-half`, `--gutter-double`, `--offset`, `--offset-half`, `--offset-double`, `--height`) and a 12-column helper set (`--col`, `--col-1` through `--col-12`). Class names and sizes elsewhere are component-specific. Legal pages are hosted on a hs-sites.com domain per the fetched page; no design or development credit is shown.

## Do's and Don'ts

- Do keep the poster composition: giant condensed wordmarks, tiny labels, scattered thumbnails.
- Do use cream `#fefff8` with charcoal `#1e1e1e`; use `#e11010` only as a tiny accent.
- Do set labels in NeueMontreal-Bold uppercase at very small sizes.
- Don't add shadows, cards or filled buttons; none are measured.
- Don't frame thumbnails with borders or rounded corners.
- Don't set body copy in the display face.
- Don't document the cookie dialog as part of the brand.

## Responsive Behavior

Measured at 390px: the h1 becomes FKScreamer 120px / 120px (159px high, 142px wide), the nav labels grow to 12px / 12px with 19.5px padding (54px high, 390px wide), and the text sizes by character are 16px (381), 12px (37) and 120px (7). No body text role or call to action was detected on mobile. Reflow of the thumbnails is not measured.

## Iteration Guide

1. Cream `#fefff8` canvas, charcoal `#1e1e1e` ink, red `#e11010` only for a tiny mark.
2. Display in FKScreamer at 301.056px with 0.9 line-height (120px on mobile).
3. Labels in NeueMontreal-Bold: 18.816px for statements, 7.5264px uppercase for nav.
4. Scale spacing from the 18.816px base: 18.82, 37.63, 62.72px.
5. Scatter unframed portrait thumbnails above the wordmarks and keep the view to one screen.
6. Keep copy short, informal and multilingual in spirit (Italian and English).

## Imagery and Microcopy

Imagery is client work shown as small, unframed portrait and landscape thumbnails: dark brand tiles, a night photograph of architecture, a blurred grey sphere, a campaign poster with two smiling people, a building facade and a pale product tile. Colour in the thumbnails is mostly black, grey and white, which keeps the cream and charcoal page calm. Microcopy is uppercase, short and bilingual in character: the page title is in Italian ("Agenzia di comunicazione, branding e digital marketing") while the descriptor on the poster is in English. The only verbs are the invitations MENU, WRITE and "LET'S JAM".
