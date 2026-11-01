---
version: alpha
name: Decathlon Yestalgia
category: "Retail & E-commerce"
description: "Campaign microsite for the Decathlon Yestalgia retro-sportswear collection (since 1976): a #f4f4f4 canvas with #e9dae6 lilac and #eaa0cd pink sections, black Roboto Flex uppercase type at weight 535 up to 179.2px, and lime #d7dd44 buttons with 2px black borders and 10px radius."
colors:
  canvas: "#f4f4f4"
  page-largest: "#e9dae6"
  ink: "#000000"
  primary: "#d7dd44"
  on-primary: "#000000"
  accent-pink: "#eaa0cd"
  surface-sage: "#f1f3ed"
  ink-blush: "#ffc9c9"
typography:
  display:
    fontFamily: "\"Roboto Flex\", sans-serif"
    fontSize: 179.2px
    fontWeight: 535
    lineHeight: 152.32px
    textTransform: uppercase
  body:
    fontFamily: "\"Roboto Flex\", sans-serif"
    fontSize: 24px
    fontWeight: 535
    lineHeight: 24px
    textTransform: uppercase
  button:
    fontFamily: "\"Roboto Flex\", sans-serif"
    fontSize: 14px
    fontWeight: 535
    lineHeight: 11.9px
    textTransform: uppercase
  nav:
    fontFamily: "\"Roboto Flex\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
    textTransform: uppercase
  link:
    fontFamily: "\"Roboto Flex\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 10px
spacing:
  s1: 5px
  s2: 6px
  s3: 8px
  s4: 9px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 15px 20px
    height: 42px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 9px 25px 9px 10px
    height: 43px
    borderColor: "{colors.ink}"
---

## Overview

Decathlon Yestalgia is a one-page campaign site (title "Decathlon Yestalgia", meta description "Decathlon Yestalgia collection - depuis 1976") that sells a retro sportswear drop through the main Decathlon shop. The measured address is https://decathlonyestalgia.com/fr/, the French edition of the site; the language switcher offers FR, EN, IT, ES, DE, BE-NL and BE-FR. The page is 15330px tall at 1280px wide and tells a nostalgia story: an opening film in a portrait frame (a person in a purple shirt cycling on a coastal road), a giant tagline that reads "À vos côtés de la décennie la plus vibrante qui soit", an introduction to the illustrator ("Salut, je suis Dalkhafine, artiste basée à Montréal et Paris."), a cast list "La famille Yestalgia" (Les grands-parents, La fille, Le fils, La mère, Le père), the OG2K shoe story, and a numbered product list from [01] T-shirt graphique at 20 euros to [13] Chaussettes at 15 euros.

The art direction is playful, flat and sticker-like. The capture shows a lilac page with a faint square grid, flat illustrated palm trees, a speckled orange ball with a black drop shadow, a large orange sun, an ice-cream cone character and a four-point star outline. Photography is framed as a tall rectangle in the middle of the page. Every label is uppercase. Copy is French, enthusiastic and short: "DALKHAFINE EST UNE ARTISTE FRANCO-CANADIENNE... SON UNIVERS COLORÉ ET RÉSOLUMENT POSITIF MET EN SCÈNE DES PERSONNAGES EXPRESSIFS".

The interface chrome is minimal and tactile: three lime buttons (MENU, language select, BOUTIQUE) with black outlines float at the top around the Decathlon logo. The footer shows only "MENTIONS LÉGALES" and "CRÉDITS" (the credits link points to index.studio).

## Colors

- **Canvas `#f4f4f4`**: the body background.
- **page-largest `#e9dae6`**: the largest measured background area, the lilac of the illustrated sections.
- **accent-pink `#eaa0cd`**: the second-largest background area and also a text color: the giant tagline is built from per-letter layers, one black and one pink (`rgb(234, 160, 205)`).
- **surface-sage `#f1f3ed`**: a third pale section background.
- **Primary `#d7dd44`**: the lime used for the MENU button, the language select and the BOUTIQUE button. The extractor's automatic primary was the pink; the lime is the colour of every control, so it was assigned to `primary` and the pink kept as an accent. **on-primary `#000000`** is the label color.
- **Ink `#000000`**: all body text (1037 characters), button text and 2px borders. **ink-blush `#ffc9c9`** colors 156 characters of text.

The palette is pastel plus one acid accent. No dark theme or hover state was measured (the hover list is empty).

## Typography

One variable family: **Roboto Flex** (axis 100 to 1000), with the odd weight 535 as the working weight for display and body, 600 and 400 elsewhere. Everything measured except the 16px link style is uppercase.

| Role | Size / line height | Weight |
|---|---|---|
| display (tagline letters) | 179.2px / 152.32px | 535, uppercase |
| body (artist text) | 24px / 24px | 535, uppercase |
| button and select | 14px / 11.9px (button) | 535, uppercase |
| nav (footer links) | 14px / 16.8px | 400, uppercase |
| link | 16px / 24px | 400 |

The display line height is 0.85 of the size. Other measured sizes are 12px (304 characters, weight 600 in the weight list), 89.6px, 166.4px and 64px; on mobile the pass recorded 62px, 62.4px, 70.2px and 97.5px in place of the large desktop sizes. Letter-spacing is normal everywhere. The tagline is split into one `div` and one `span` per character, which makes a two-colour (black and `#eaa0cd`) layered effect. Probes on the live page recorded the tagline element `c-tagline` at 179.2px, weight 535, line height 152.32px, uppercase.

## Layout

The page is a long vertical story. The header is a three-part row: MENU at the left, the Decathlon logo in the center, and the language select plus BOUTIQUE at the right. The first section is a single tall photo frame centered on the canvas with generous empty space around it. The sections below change background to lilac with a faint square grid and place illustrated elements at the edges. Product items are numbered "[01]" to "[13]" with name and price. Measured gaps are mostly 8px (52 uses) and 6px, and paddings are 32px, 28px, 120px, 20px and 192px.

## Elevation & Depth

No box shadow was measured, yet the capture shows each lime button and the orange ball with a solid black offset beneath and to the right, a flat "sticker" depth. The extractor recorded no shadow, so how it is built and its size are not measured. Elsewhere the page is flat colour fields; depth comes from overlapping illustrations.

## Shapes

One radius was measured: 10px (3 uses), applied to the lime select and buttons. Illustrations bring circles (sun, ball) and the star outline. Everything else is rectangular, including the photo frame.

## Components

- **Lime button (`button-primary`)**: `#d7dd44` fill, 2px solid black border, 10px radius, Roboto Flex 14px 535 uppercase, black text; the mobile pass measured padding 15px 20px and height 42px for BOUTIQUE.
- **Language select (`text-input`)**: the same lime fill, 2px black border, 10px radius, padding 9px 25px 9px 10px, 43px high, with a chevron; options FR, EN, IT, ES, DE, BE-NL, BE-FR.
- **Menu button**: lime with a hamburger icon and the label MENU.
- **Footer links (`nav`, `nav-link`)**: "MENTIONS LÉGALES" and "CRÉDITS", 14px 400 uppercase, black, with an underline drawn as a background gradient.
- **Product list items**: index in brackets, uppercase name with colour, price in euros (for example "OG2K - VIOLET", 45 euros).

## Design System Architecture

No public design system, brand guideline or press kit is published for this site. The pages opened for research were https://decathlonyestalgia.com/fr/ (rendered text and links); its only brand-related links are the shop and the credits. The de-facto system is a small custom front end: custom elements such as `c-tagline`, Tailwind-like variables (`--font-sans`, `--font-mono`) in the stylesheet, a Swiper carousel (`swiper-icons`) and a single variable font. The campaign uses Decathlon's logo but none of the retailer's own blue; the palette is specific to the campaign.

## Do's and Don'ts

Do:
- Keep text black on pastel fields (`#f4f4f4`, `#e9dae6`, `#eaa0cd`).
- Set everything in Roboto Flex at 535 uppercase, with enormous tagline type.
- Make controls lime `#d7dd44` with a 2px black outline and 10px radius.
- Use flat sticker illustrations with a black offset.
- Number products in brackets and show prices in euros.

Don't:
- Do not use shadows with blur; none was measured.
- Do not add dark sections or a dark theme.
- Do not use a second typeface.
- Do not round the photo frame.

## Responsive Behavior

A 390px mobile pass was recorded. Measured: the body text stays 24px with 24px line height and 535 weight, 350px wide; the BOUTIQUE control measured 14px 535 with padding 15px 20px, 10px radius, 102px by 42px; the footer nav is 66px high; large display sizes become 62px, 62.4px, 70.2px and 97.5px. How the header, grid and illustrations rearrange was not measured.

## Iteration Guide

1. Set `#f4f4f4`, black text, and Roboto Flex variable at 535.
2. Build the tagline at 179.2px / 152.32px uppercase, with a pink `#eaa0cd` layered copy.
3. Make lime buttons with 2px black border and 10px radius; add a solid black offset after measuring it.
4. Add lilac `#e9dae6` sections with a faint grid and flat illustrations.
5. Number the product list and keep copy in uppercase French.
