---
version: alpha
name: Immersive Garden
category: "Business & Corporate"
description: "Immersive Garden, a digital experiences studio, shows a monochrome plaster-relief hero on a light grey canvas (#e8e8e8) with near-black ink (#030303), setting statements in the serif PSTimes at 28px and 32px and its single Menu control in HelveticaNeueRegular at 14px, with no rounded corners, shadows or colored buttons."
colors:
  canvas: "#e8e8e8"
  ink: "#030303"
  primary: "#030303"
  black: "#000000"
typography:
  display:
    fontFamily: PSTimes, serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 33.6px
  body:
    fontFamily: PSTimes, serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
  nav:
    fontFamily: HelveticaNeueRegular, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 15.4px
rounded:
  none: 0px
spacing:
  s1: 5px
  s2: 16px
  s3: 40px
  s4: 42.67px
  s5: 142.22px
components:
  nav:
    textColor: "{colors.ink}"
    padding: 40px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 40px
---

## Overview

The page titled "Immersive Garden" belongs to a studio that describes itself in the hero as "Innovative digital experiences studio". The home page is not a conventional web layout: the first viewport is a single full-bleed canvas showing a white plaster bas-relief of a flower, stem and leaves, lit softly so the whole scene reads as grey on grey. Over it sit only a handful of elements: the studio wordmark (a small monogram plus the letter-spaced words "IMMERSIVE GARDEN") at the left, the serif statement "Innovative digital experiences studio" in the center, the grey caption "Scroll down" at the right, the word "Menu" at top right, a "See all projects" link at bottom left, and a tiny black dot at bottom right.

The measured document is 800px tall at 1280px wide, so the page behaves as one fixed stage rather than a long scroll; the extraction recorded only 2278 characters of text, almost all of it in the serif. The text that was read includes a project blurb beginning "Embark on the pioneering flights of Amy Johnson, Clyde Pangb..." (truncated in the extraction).

The atmosphere is a gallery: quiet, tactile, restrained, and driven by one image rather than by interface chrome. There are no measured buttons, inputs, cards, footers or borders. For a designer, the lesson is subtraction: a monochrome surface, a serif voice, one tiny sans for controls, and large unused space.

## Colors

The measured palette is almost entirely two values.

- **Canvas (#e8e8e8)** is the page background and appears 48 times in the stylesheet corpus. It is a light neutral grey, close to the plaster tone of the hero image.
- **Ink (#030303)** is the text color for every measured text run (2278 characters) and also appears 40 times in the corpus. It is used for the statement, the Menu label and the "See all projects" link. Because the site has no colored CTA, `primary` is the same #030303; there is no separate accent color on the rendered page.
- **Black (#000000)** appears 3 characters' worth in the text measurement and 4 times in the corpus.
- **Corpus-only values.** The stylesheet corpus also lists #a6a6a6 (2), #ffff00 (2), #90ee90 (2), #ffffff (1), a translucent #e8e8e880 (2) and #00000099 (1). These were not measured on visible elements in the first view, so they are not promoted to tokens. The grey "Scroll down" caption in the capture is lighter than the ink, but its exact color was not measured, so it is described only qualitatively.

There is no dark mode, hover color or focus color in the extraction (the hover list is empty, and the only root variable is `--scrollbar-width: 0px`).

## Typography

Two fonts are loaded: PSTimes (400) and HelveticaNeueRegular (400). PSTimes carries 2228 of the measured characters and HelveticaNeueRegular 53.

- **Display / statement:** PSTimes 28px / 33.6px weight 400, normal letter spacing. This is the measured "Innovative" h1 candidate (the element is a div, not a heading tag).
- **Body:** PSTimes 32px / 38.4px weight 400, used for the long project paragraph (width 300px, height 346px in the measurement). 32px covers 2178 characters, which makes it the dominant size on the page.
- **Navigation:** HelveticaNeueRegular 14px / 15.4px weight 400 for "Menu" and the small links.
- **Other measured sizes:** 12px (18 characters) and 39.1111px (16 characters). The corpus lists larger declared sizes (74.48px, 58.52px, 55.86px, 47.88px, 37.24px, 34px, 29.26px, 26px, 24px, 23px, 21.28px, 20px, 13px) that were not measured on visible text in this pass.

The pairing is a classic one: a transitional serif for expressive copy, a small neo-grotesque for controls. Letter spacing in the wordmark lockup is wide in the capture but was not measured as a token. Both faces are proprietary or bundled with the site; neither is published as an open-source family, so a stand-in should keep the serif/sans contrast: a Times-like serif at 28 to 32px and Helvetica Neue or Arial at 14px.

## Layout

The layout is a viewport-sized stage. Elements are positioned relative to the viewport edges rather than inside a content column: Menu at top right (nav measured 96px high, 145px wide, 40px padding on desktop), "See all projects" at bottom left, a dot at bottom right, and the statement and wordmark on a shared horizontal midline with the "Scroll down" caption to the right. The measured spacing values are 5px, 16px, 40px, 42.67px and 142.22px; the 40px values match the navigation padding and the larger ones sit between the stage elements.

There is no measured grid, card layout or multi-column body. The first viewport has no header bar: nothing is filled or bordered, the navigation is text only, and the image runs edge to edge.

## Elevation & Depth

No box shadows were measured (`boxShadows` empty) and no borders (`borderColors` empty). Depth is entirely inside the artwork: the plaster relief has real light-and-shadow modeling, so the interface does not need elevation. The pale ground and near-black text sit flat above that image.

## Shapes

No border radius was measured: `desktop.frequencies.borderRadii` is empty, so every rendered element computes 0px. `rounded.none` is therefore 0px. Organic shape comes only from the sculpted flower in the hero image; interface shapes are absent.

## Components

- **Navigation.** The only measured component: a "Menu" text link in HelveticaNeueRegular 14px, #030303, with 40px padding on desktop (96px by 145px box) and 32px padding on mobile (80px by 129px box). There is no filled background or border.
- **Statement.** A PSTimes line of 28px, centered, reading "Innovative digital experiences studio".
- **Text links.** "See all projects" at the lower left and "Scroll down" at the right, in the small sans.
- **Wordmark.** A monogram with the letter-spaced words "IMMERSIVE GARDEN" on the left of the midline.
- **Buttons, inputs, cards, footer.** None detected (ctaPrimary null, input null, cards empty, footer null). A button token is therefore not defined.

## Design System Architecture

No public Immersive Garden design system or brand-guideline page exists that could be found: https://immersive-g.com/brand, /press, /about and /design all returned 404 on fetch, and the home page links to none. The de-facto system is tiny: the root defines only `--scrollbar-width`, so colors, sizes and fonts are applied directly rather than through named variables. The visible system is therefore the combination of two font faces, two ink and canvas colors, and a page composed around a rendered image. Reproducing the site means reproducing that image-driven composition, not a token file.

## Do's and Don'ts

- Do keep the canvas light grey (#e8e8e8) and text near-black (#030303).
- Do set statements in the serif at 28px or 32px with normal letter spacing.
- Do keep controls as bare text in the 14px sans, with generous 40px padding.
- Do let a single monochrome image carry the page.
- Don't add colored buttons, fills, borders or rounded corners; none were measured.
- Don't add shadows to interface elements.
- Don't introduce accent colors: the yellow and green values seen in the stylesheet corpus (#ffff00, #90ee90) were not measured on any visible element.

## Responsive Behavior

The 390px pass measured: the "Innovative" text at 28px / 33.6px PSTimes (same as desktop), the body paragraph at 28px / 33.6px (down from 32px / 38.4px), the paragraph box 326px wide by 235px high, and the Menu nav at 80px by 129px with 32px padding (down from 40px). Nothing else about mobile layout was measured, so how the stage and the wordmark rearrange is not measured.

## Iteration Guide

1. Start with a full-bleed image on a #e8e8e8 ground.
2. Place one 28px serif statement on the midline; keep the body serif at 32px (28px at 390px).
3. Add a 14px sans "Menu" at the top right with 40px padding and a "See all projects" link at the bottom left.
4. Keep every corner square and every surface flat.
5. Add no accent color until you have measured one.
6. Re-measure hover and transitions before specifying them; none were recorded.
