---
version: alpha
name: Pop-up 10 ans La Rosée
category: "Fashion & Apparel"
description: "Entry page of La Rosée's 10th-anniversary pop-up microsite (popup.larosee-cosmetiques.com): a white 24px-radius welcome card with a Chaparral serif 30px title in navy #304656 and Basis sans 14px copy in slate #82909a, floating over a full-bleed 3D paper-flower scene in powder blue, pink and yellow."
colors:
  canvas: "#ffffff"
  ink: "#304656"
  primary: "#304656"
  ink-secondary: "#82909a"
typography:
  display:
    fontFamily: Chaparral, "serif"
    fontSize: 30px
    fontWeight: 400
    lineHeight: 34px
  body:
    fontFamily: Basis, helvetica, "sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 24px
spacing:
  s1: 15px
  s2: 16px
  s3: 24px
  s4: 40px
  s5: 72px
  s6: 110px
components:
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    transform: matrix(1, 0, 0, 1, 0, 0)
---

## Overview

This file describes the page served at `https://popup.larosee-cosmetiques.com/`, titled "Pop 10 ans La Rosée". It is a campaign microsite for the tenth anniversary of the Paris cosmetics brand La Rosée, and the measured page is its welcome gate: one viewport (scroll height 800px at a 1280px viewport, 27 visible elements) with no navigation, no product grid and no footer. The parent brand site was not measured in this task; this document covers only the pop-up entry page, and the name reflects that.

The scene is a photographic or 3D-rendered garden made of paper-like flowers and ribbons, all in a restrained cool palette: powder and cornflower blue petals, a pink ribbon sweeping across the left, a pale yellow ribbon sweeping across the right, and a soft white-grey ground. At the top centre a small white tab holds the "LA ROSÉE PARIS" wordmark in blue capitals. Over the centre sits a white rounded card, and at its top edge a pale-yellow heart badge lettered "10 ans de vous & nous" overlaps the card's upper border.

The copy is French and warm: "Bienvenue au Pop-up La Rosée !", then "Entrez dans notre univers, découvrez notre histoire, nos produits, nos engagements et plein de surprises !" and "Prenez le temps d'explorer : vous êtes ici chez vous." A single blue pill button labelled "Entrer" sits below the card on the artwork. The tone is intimate and hospitable, addressing the visitor as a guest.

The page rewards a slow reading. There are only four pieces of text: the title, two short paragraphs and the button label, plus the lettering inside the heart badge and the wordmark tab. The restraint is the design: nothing competes with the invitation to enter, and the artwork sets the mood of lightness, handcraft and freshness that the name La Rosée (dew) suggests. The visual treatment of the flowers, in several tints of one blue with white stamens, keeps the scene monochrome enough that the two ribbons in pink and yellow read as the only accents, and the yellow heart repeats the ribbon yellow so the badge feels part of the scene.

## Colors

The CSS-measured palette is two ink colours on white. Text colours by characters: `#82909a` (159 characters), `#304656` (30) and `#ffffff` (6). The only opaque background measured is `#ffffff` (weight 149).

- **canvas `#ffffff`** is the welcome card and the page background value measured on the body.
- **ink / primary `#304656`** is a deep slate navy used for the serif title. The page has no measured filled button colour, so the generator's `primary` equals the ink.
- **ink-secondary `#82909a`** is the grey-blue of the 14px paragraph copy.
- The white (`#ffffff`) text counted on 6 characters is the "Entrer" label (six letters) on its blue button. The button's blue fill, the flower blues, the pink and yellow ribbons and the yellow heart are artwork or an unmeasured element fill and are described qualitatively, not tokenised.

The stylesheet root defines `--swiper-theme-color: #007aff`; this is the Swiper slider library's own default variable and is not used as a brand colour here.

## Typography

Two fonts are loaded: **Chaparral** (400), a serif, and **Basis** (400), a sans-serif. Measured characters: Basis 165, Chaparral 30.

- **display**: Chaparral, `"serif"` fallback, 30px, weight 400, 34px line-height, colour `#304656`; the welcome title.
- **body**: Basis, then `helvetica, "sans-serif"`, 14px, weight 400, 20px line-height, colour `#82909a`; the two copy paragraphs.

Only two sizes exist on the page, 14px (165 characters) and 30px (30), and a single weight, 400. Hierarchy comes from the serif/sans contrast, size and colour. The title wraps over two lines inside the card ("Bienvenue au Pop-up La / Rosée !"), centred, and the paragraph copy is also centred.

## Layout

The composition is a single centred column. A white wordmark tab hangs from the top edge; below it the heart badge straddles the top of the white card; the card holds the title and two paragraphs centred; the "Entrer" button is placed below the card with open space to either side. The artwork is full-bleed and sits at the same depth behind all of these.

Measured spacing values are 15, 16, 24, 40, 72 and 110px; the larger values correspond to the card's generous internal and external whitespace. Exact card dimensions were not measured and none are stated here.

Reading order follows the vertical axis exactly: wordmark first, then heart badge, title, paragraphs, and finally the button. There is no secondary navigation, language toggle or cookie banner in the measured view, so the visitor has one decision to make.

## Elevation & Depth

No box-shadow was measured (the list is empty). Depth is produced by the artwork: foreground flowers and leaves overlap the lower part of the scene, and the white card reads as a flat layer above the image with the heart badge overlapping its top edge. The card carries a measured identity transform `matrix(1, 0, 0, 1, 0, 0)`, i.e. no scale, rotation or offset at rest.

## Shapes

One radius was measured: 24px, on one element, the white card. In the capture the "Entrer" button is a full pill and the heart badge is a heart silhouette; the pill's radius was not captured as a separate measured value, so no token is declared for it. The soft rounded card, the pill button and the organic petal and ribbon forms all share a rounded, gentle vocabulary.

## Components

- **Welcome card**: white `#ffffff`, 24px radius, centred text, holds the Chaparral title and two Basis paragraphs.
- **Anniversary heart badge**: pale-yellow heart with white hand-lettered "10 ans de vous & nous" (artwork), overlapping the card's top edge.
- **Wordmark tab**: white rectangular tab at the top centre with "LA ROSÉE" and "PARIS" in blue capitals.
- **"Entrer" button**: blue pill with white label, below the card; its fill and size were not measured by the extractor and are only described here.

## Design System Architecture

No public design system or brand-guideline page was opened, and the page links none; there is no official system to cite. The de-facto system is minimal: two typefaces (Chaparral, Basis), two ink colours (`#304656`, `#82909a`), a single 24px radius, and a Swiper carousel dependency (its default `--swiper-theme-color` variable is present in the root). Measured from `https://popup.larosee-cosmetiques.com/` (final URL identical).

## Do's and Don'ts

- Do set the welcome title in Chaparral 30px/34px with navy `#304656` and centre it.
- Do set supporting copy in Basis 14px/20px with slate `#82909a`.
- Do keep the card white with a 24px radius over the full-bleed artwork.
- Do keep a single call to action ("Entrer") and let the copy invite rather than sell.
- Don't use the Swiper default blue `#007aff` as a brand colour.
- Don't add shadows or borders to the card; none were measured.
- Don't use bold weights; only weight 400 appears.
- Don't tokenise the artwork colours as UI colours; they were not measured as CSS.

## Responsive Behavior

The mobile pass recorded type only: sizes were unchanged at 14px (165 characters) and 30px (30), and the title kept its 30px/34px, weight 400 style. Mobile card width, button placement and breakpoints were not measured.

## Iteration Guide

1. Start from `canvas #ffffff`, `ink #304656` and `ink-secondary #82909a`.
2. Title in Chaparral 30px/34px; body in Basis 14px/20px, both weight 400, both centred.
3. Wrap content in a white card with a 24px radius over a full-bleed, cool-toned illustration.
4. Provide one pill-shaped "Entrer" action in white text on a blue fill; measure the fill before tokenising it.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=pop-up-10-ans-la-rosee --url=https://popup.larosee-cosmetiques.com/ --force --no-motion`, then `node web/scripts/verify-designs.mjs --slug=pop-up-10-ans-la-rosee`.
