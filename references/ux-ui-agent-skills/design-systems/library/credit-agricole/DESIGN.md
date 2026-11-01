---
version: alpha
name: Crédit Agricole
category: "Banking & Insurance"
description: "Groupe Crédit Agricole corporate site (credit-agricole.com): grey page #ebebeb, ink #404040, Crédit Agricole green #82b600 buttons and side menu, teal #60bba1 press cards, Barlow Semi Condensed headlines with Open Sans body at 14px and 4px/10px radii."
colors:
  canvas: "#ebebeb"
  ink: "#404040"
  nav-text: "#000000"
  primary: "#82b600"
  on-primary: "#ffffff"
  primary-hover: "#8dc500"
  primary-dark: "#75a300"
  teal-card: "#60bba1"
  teal-ink: "#008890"
  teal-heading: "#008991"
  teal-line: "#79e0c3"
  grey-faint: "#b2b2b2"
  grey-mid: "#808080"
  footer-bg: "#262626"
  alert-red: "#fc0d1c"
typography:
  display:
    fontFamily: BarlowSemiCondensed-Bold, sans-serif, bold
    fontSize: 33px
    fontWeight: 500
    lineHeight: 36.3px
    textTransform: uppercase
  display-mobile:
    fontFamily: BarlowSemiCondensed-Medium, sans-serif, bold
    fontSize: 35px
    fontWeight: 400
  subheading:
    fontFamily: BarlowSemiCondensed-Bold, sans-serif, bold
    fontSize: 25px
    fontWeight: 500
    lineHeight: 27.5px
  card-title:
    fontFamily: BarlowSemiCondensed-Bold, sans-serif, bold
    fontSize: 22px
    fontWeight: 500
    lineHeight: 24.2px
  body:
    fontFamily: OpenSans-Regular, sans-serif, bold
    fontSize: 14px
    fontWeight: 400
  button:
    fontFamily: OpenSans-Bold, sans-serif, bold
    fontSize: 14px
    fontWeight: 400
  nav:
    fontFamily: OpenSans-Semibold, sans-serif, bold
    fontSize: 11px
    fontWeight: 400
  button-secondary:
    fontFamily: BarlowSemiCondensed-Bold, sans-serif, bold
    fontSize: 15px
    fontWeight: 400
    textTransform: uppercase
rounded:
  sm: 4px
  button: 10px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 15px
  s6: 17px
  s7: 20px
  s8: 30px
  s9: 50px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 15px 30px
    height: 53px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  tag-label:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    padding: 10px
    height: 39px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
  nav:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.nav-text}"
    typography: "{typography.nav}"
    padding: 10px 15px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.on-primary}"
    padding: 0px 15px
    borderColor: "{colors.primary}"
---

## Overview

Crédit Agricole is the group corporate site credit-agricole.com (page title "Banque des particuliers professionnels en France | Crédit Agricole", `lang="fr"`). It serves the audiences named in the top bar: Client, Candidat, Investisseur, Actionnaire, Journaliste, Fournisseur, with an FR/EN switch. The page text opened shows the tagline "Agir chaque jour dans l'intérêt de nos clients et de la société", a share-price line for Credit Agricole S.A., a "Trouver un site" and "Rechercher" pair, text-size and contrast controls ("Taille du texte", "Contraste"), and a left menu with Accès rapides, Notre Groupe, Engagement sociétal – RSE, Actualité and Finance.

Under a white header with the green Groupe Crédit Agricole logo block, the page is a dense news layout: a large lead story with a photograph, a "RÉSULTATS FINANCIERS" tag card with a video interview, and a masonry of teal "COMMUNIQUÉS DE PRESSE" cards each with a date and a "Tous les communiqués" link, then a "RÉSEAUX SOCIAUX" row. A band titled "LE GROUPE CRÉDIT AGRICOLE" with the sub-line "Pour vous, nous nous réinventons au quotidien..." sits on `#f7f7f7`. The page is 4,599px tall with 502 visible elements. Voice is institutional French with sentence-case titles and uppercase tags. A consent bar (tarteaucitron) appeared in the first capture and is excluded.

## Colors

- **Canvas `#ebebeb`** is the page background (area weight 4,556); white `#ffffff` (1,720) is the header and some bands.
- **Ink `#404040`** colours headings and link titles (294 characters); **nav text `#000000`** (57 characters) is used in the header menu.
- **Primary `#82b600`** is the group green: the "Découvrir le Groupe" button, tag labels such as "#RÉSULTATS FINANCIERS" (backgrounds), the left menu and the footer border; it also colours 203 characters. Hover is `#8dc500`; `#75a300` (area weight 199) is a darker green fill.
- **Teal `#60bba1`** is the press-card fill (area weight 1,335) and 162 characters of text; `#008890` / `#008991` are teal text and heading colours (69 and 46 characters); `#79e0c3` is the measured border colour (9 uses).
- **Footer `#262626`** (area weight 1,082) with white text; `#404040` also fills a lower band.
- **Greys:** `#b2b2b2` (64 characters), `#808080` (area 483), `#748f9f` (52 characters).
- **Red `#fc0d1c`** (area 577) is a solid block in the social-media row of the capture.

White text is the largest character count (6,319), because the teal cards, green menu and dark footer carry white copy.

## Typography

The site loads Open Sans (Regular, Semibold, Bold) and Barlow Semi Condensed (Medium, Bold) as local-named faces, plus an icon font `cacom-icons`; the stacks end in `sans-serif, bold`. Open Sans Regular carries 4,546 characters, Barlow Semi Condensed Medium 1,182, Open Sans Semibold 688, Barlow Semi Condensed Bold 406 and Open Sans Bold 372. Weights are 400 (5,881 characters) and 500 (1,410); the bold cuts are separate files.

- **Display, Barlow Semi Condensed Bold 33px / 500, line-height 36.3px, uppercase:** "LE GROUPE CRÉDIT AGRICOLE", `#404040`.
- **Subheading, 25px / 500, line-height 27.5px:** in teal `#008991`.
- **Card title, 22px / 500, line-height 24.2px:** story titles (`#404040` on grey, white on teal).
- **Body, Open Sans Regular 14px / 400** (3,961 characters); **button, Open Sans Bold 14px;** **nav, Open Sans Semibold 11px;** **tag label, Barlow Semi Condensed Bold 15px uppercase.**
- Other sizes by characters: 13px (736), 12px (675), 16px (201), 28px (181), 17px (144). At 390px a 35px size appears (19 characters).

**Substitutes.** Both families are named as local faces; no external font source was opened.

## Layout

The layout reads as a news portal. The left rail is a narrow vertical green menu whose entries, from the page text, expand into long sub-lists: Accès rapides (Assemblée générale, Comité de liaison, Résultats trimestriels, Action et dividende, Communiqués de presse, Rapport Intégré 2025/2026), Notre Groupe (Nous sommes, Notre gouvernance, Projet stratégique ACT 2028, Notre politique éthique & conformité), Engagement sociétal – RSE, Actualité (A la une, Dossiers de la semaine, Tendances éco, Les vidéos) and Finance (Résultats Financiers, Rapport intégré, Dette et notations, Actionnaires individuels). The main column places one large lead story at the left and a narrower tag-and-video card at the right, then the press cards.

Desktop bands (1280px): a 610px media/header band, the 316px `#f7f7f7` group band with content from x=156 to x=1265, then a 3,673px news band in two columns over the same extent. The header is 110px high with a 35px-high menu control (10px 15px padding). Common paddings: 10px (80 uses), 20px (37), 15px (29), 8px (14), 30px (9). The vertical green menu sits at the left edge; cards flow in up to 4 columns.

## Elevation & Depth

No box shadows were measured; the shadow table is empty. Depth comes from flat fills stepped against each other: teal cards over the grey canvas, a dark `#262626` footer, white header and bands, and photographs sitting inside the cards. Borders are rare: the measured border colours are `#79e0c3` (9 uses) and `#82b600` (2 uses), so separation is done by colour blocks, not by lines or lift.

## Shapes

Radii: 4px (12 uses) and 10px (1). The "Découvrir le Groupe" button is 10px; the tag labels measure 0px; cards are mostly square with 4px corners where rounded.

## Components

- **Primary button.** `#82b600` fill and border, white Open Sans Bold 14px, padding 15px 30px, 53px by 204px, radius 10px; hover `#8dc500`.
- **Tag label.** Green block with white uppercase Barlow 15px, 39px high, padding 10px ("#RÉSULTATS FINANCIERS", "#ACTUALITÉ DU GROUPE").
- **Press card.** Teal `#60bba1` card with a tag header "COMMUNIQUÉS DE PRESSE", a 22px white title, a short extract, a date and a "Tous les communiqués" link.
- **Header menu.** White, 110px high, Open Sans Semibold 11px labels in black.
- **Footer.** `#262626`, white 14px text, 950px-tall link area with a green border line.
- **Consent bar** is excluded.

## Design System Architecture

No public design system or brand guideline was found: the page opened at https://www.credit-agricole.com/ links the group's site map and contacts only. The system is custom CSS with local font names (`OpenSans-*`, `BarlowSemiCondensed-*`) and an in-house icon font (`cacom-icons`); no CSS custom-property palette was recorded. Colours are applied directly.

## Do's and Don'ts

- Do keep the page `#ebebeb` with `#404040` text and `#82b600` for actions.
- Do set headlines in Barlow Semi Condensed, uppercase for section titles, and body in Open Sans 14px.
- Do use teal `#60bba1` cards with white titles for press releases.
- Don't add shadows or large radii; measured radii are 4px and 10px.
- Don't reproduce the consent bar as UI.
- Do keep accessibility controls (text size, contrast) visible in the header, as the page text lists "Taille du texte" with Normal, Moyen, Grand and "Contraste".
- Do write tags in uppercase with a leading hash ("#ACTUALITÉ DU GROUPE"), and write story titles in sentence case.

## Responsive Behavior

Measured in the 390px pass: 6 header links visible (16 at 1280px), a control labelled "Menu principal" detected as visible (also at desktop), cards in up to 2 columns (desktop 4). The news band content spans x=15 to x=375 as one column and the page is longer (bands reach y=8,223 vs 4,599). Mobile sizes by characters: 14px (3,941), 22px (1,117), 12px (546), 13px (228), 28px (181), 35px (19). Other layout changes at 390px were not measured.

## Iteration Guide

1. Canvas `#ebebeb`, ink `#404040`, primary `#82b600`.
2. Barlow Semi Condensed 33px uppercase for section titles; 22px for story titles; Open Sans 14px body.
3. Build the left green menu, a lead story, teal press cards in a 2-column masonry, then a dark `#262626` footer.
4. Hover primary to `#8dc500`.
5. Measure any new component before adding a token.
