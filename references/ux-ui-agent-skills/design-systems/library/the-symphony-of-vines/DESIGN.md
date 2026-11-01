---
version: alpha
name: The Symphony of Vines
category: "Business & Corporate"
description: "Cinematic, sepia-toned wine storytelling site for Chateau Oublié: PalaceItalic display at 105px with -4.5px tracking, Bellefair serif body at 24px, parchment canvas #f4f0ec, dark olive ink #332f22 and an aged-gold accent #9c6e49, with zero-radius surfaces."
colors:
  canvas: "#f4f0ec"
  ink: "#332f22"
  primary: "#9c6e49"
  surface: "#f3f1ed"
  surface-2: "#e1d9d1"
typography:
  display:
    fontFamily: PalaceItalic, serif, italic
    fontSize: 105px
    fontWeight: 400
    lineHeight: 84px
    letterSpacing: "-4.5px"
  display-mobile:
    fontFamily: PalaceItalic, serif, italic
    fontSize: 44px
    fontWeight: 400
    lineHeight: 35.2px
    letterSpacing: "-1.92px"
  body:
    fontFamily: Bellefair, serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 26.4px
    letterSpacing: "-0.72px"
rounded:
  none: 0px
spacing:
  s1: 12px
  s2: 15px
  s3: 18px
components:
  nav:
    textColor: "{colors.surface}"
    padding: 15px 12px 0px
---

## Overview

The Symphony of Vines (symphonyofvines.unseen.co, page title "The Symphony of Vines - Chateau Oublié") is an immersive, full-bleed brand experience for the wine estate Chateau Oublié. The measured home view is an entry screen: a sepia photograph of a wrought-iron gate under a stone arch fills the viewport, the title "The SYMPHONY OF VINES" is set in a large flared display serif, a two-line standfirst reads "Explore our origins and reveal the energy beneath the land that shapes our wines.", and a single outlined pill-like "ENTER EXPERIENCE" control leads in. The site does not behave like a catalogue; it behaves like a title sequence.

The mood is warm, archival and quiet. Colour comes from the photograph (amber sky, brown shadows) rather than from interface fills, and the interface itself is reduced to a thin header (a small italic "i" at the left, the estate name "CHATEAU OUBLIÉ" in spaced capitals at the centre, an icon control at the right). Typography does the branding work: a high-contrast italic display face paired with a delicate Bellefair serif.

The extraction recorded a tight set of seven font sizes (9px, 10.5px, 12px, 18px, 24px, 105px, 150px), weights of only 400 and 500, and no box shadows, no border colours and no gaps. That absence is the character of the site: depth is supplied by imagery and light, not by UI chrome.

A cookie-consent dialog is present in the capture. It is a third-party-style consent control and is deliberately not documented here as brand UI or tokens.

## Colors

The palette is a parchment and olive-brown duo with one metallic accent. All values below are measured on the live page or in its CSS custom properties.

- Canvas `#f4f0ec` is the page background (also `--site-background`).
- Ink `#332f22` is the most-read text colour (120 characters weighted) and matches `--text`.
- Primary `#9c6e49` is the antique gold, declared as `--gold` and used for the active menu link, chapter numbers and the vintage year border (`--menu-link-active`, `--story-chapter-number`, `--vintage-year-border`).
- Surface `#f3f1ed` is the header-light text colour and the largest measured background area.
- Surface-2 `#e1d9d1` is `--off-white`, used for the standfirst over the photograph (110 characters weighted).

The stylesheet also declares a dark companion set that the capture does not render at rest: `--main-bg` `#0A0901`, `--menu-bg` `#090A02`, `--header-dark` `#322E21`, `--story-colored-light` `#B7B09C`, `--home-subtitle` `#CCC4B5` and `--button-dark` `#3F3838`. These indicate the site alternates between light parchment chapters and near-black chapters, but only the light state was measured on screen.

Text on photography uses the off-white (`#e1d9d1`) while text on the parchment canvas uses the olive ink; the two are never mixed in the same block in the measured data.

## Typography

Three families are loaded: Bellefair 400, Palace 400, PalaceItalic 400 italic, plus NeueMontreal for small interface text (12px header copy). Measured by characters, Bellefair carries 111 characters, FreightText 80, NeueMontreal 35, Palace 17 and PalaceItalic 3.

- Display: PalaceItalic, 105px on a 84px line (0.8 ratio) with -4.5px letter spacing, weight 400. The mobile measurement is 44px on 35.2px with -1.92px.
- Body: Bellefair, 24px on 26.4px with -0.72px tracking. The same family at 18px/21.6px with -0.54px is used for secondary copy.
- Interface: NeueMontreal at 12px/18px for the header, with 12px/-0.24px and 10.5px/0.21px letter-spacing pairs recorded.
- A 150px size is also recorded (17 characters weighted) alongside the 105px headline: the word "SYMPHONY OF VINES" is set in the upright Palace face, with "The" in the italic.

Tracking is negative on every large measured pair (24px/-0.72px, 18px/-0.54px, 105px/-4.5px, 150px/-4.5px), which is the signature of the display voice. Font substitutes: Palace and PalaceItalic are not available as system fonts; a high-contrast flared display serif (for example Cormorant Garamond italic) is a design substitute, not a measured one.

## Layout

The page is a single full-viewport stage (1280 by 800 desktop capture) with the headline block positioned left of centre and the standfirst and button centred beneath it. The header is 57px high with padding `15px 12px 0px`. Measured paddings are 18px, 15px, 12px and 98.25px, and no flex or grid gaps were recorded.

Breakpoints declared as CSS custom properties: 375px, 768px, 1024px, 1366px, 1536px and 1921px, plus pointer and orientation queries (`--bp-touch`, `--bp-nottouch`, `--bp-landscape`, `--bp-portrait`, `--bp-ipadpro`). Spacing tokens kept here are 12px, 15px and 18px.

## Elevation & Depth

No box shadows were measured and no border colours were recorded. Depth is made with photography: a gate in the foreground, soft vignette darkening at the bottom and left, grain and a blur-in on the headline. The standfirst carries a gradient mask (`linear-gradient(161deg, rgb(255,255,255) 100%, rgba(0,0,0,0) 200%)`) so text fades into the picture. Do not add drop shadows or cards.

## Shapes

Every measured content element computes a 0px radius, so the rounded scale is `none: 0px`. The one outlined "ENTER EXPERIENCE" control in the capture is drawn with a thin light outline over the photograph; its exact radius was not captured as a button role by the extractor, so it is not tokenised. The only non-zero radius in the extraction (7.5px) belongs to the cookie dialog and is excluded.

## Components

- Header: transparent, 57px tall, padding `15px 12px 0px`, text colour `#f3f1ed` in NeueMontreal 12px, uppercase wordmark centred.
- Entry button: outlined, uppercase small NeueMontreal label "ENTER EXPERIENCE" on the photograph. Not detected as a CTA by the extractor (ctaCandidates is empty), so no fill or radius is claimed.
- Standfirst: Bellefair 24px, off-white `#e1d9d1`.
- Cookie dialog: present, not documented as brand UI.

Button hover states: the extraction recorded no hover data.

## Design System Architecture

No public design system or brand guideline was found for the site. The de-facto system is a set of CSS custom properties on the root: colour roles named by purpose (`--header-light`, `--header-dark`, `--story-colored-light-text`, `--vintage-bg`, `--menu-bg`, `--button-light`, `--button-dark`, `--tooltip-bg`), a brand pair (`--gold` `#9C6E49`, `--yellow` `#9D6E46`) and the breakpoint queries listed above. Naming indicates chapters ("story", "vintage", "end-chapter") that map to the experience's content sections. The page is hosted on the `unseen.co` subdomain `symphonyofvines.unseen.co`; the queued URL `symphonyofvines.com` redirects there. See https://symphonyofvines.unseen.co/.

## Do's and Don'ts

- Do set the display line in PalaceItalic at tight tracking and let it overlap imagery.
- Do keep body copy in Bellefair at 24px with the measured -0.72px tracking.
- Do use `#9c6e49` only for small active states and numerals.
- Do keep surfaces flat with 0px radius.
- Don't add shadows, gradients on UI fills or rounded cards.
- Don't treat the cookie dialog's 7.5px radius or its beige card as a brand component.
- Don't use pure black or pure white for text; the measured inks are `#332f22` and `#e1d9d1`.

## Responsive Behavior

The extractor's mobile pass (390px) measured only type: the h1 falls from 105px to 44px (line height 35.2px, letter-spacing -1.92px) in the same PalaceItalic family. Other mobile layout behaviour (header, button placement, image crop) was not measured. The stylesheet declares the breakpoints 375px, 768px, 1024px, 1366px, 1536px and 1921px as custom properties.

## Iteration Guide

1. Start from the parchment canvas `#f4f0ec` and olive ink `#332f22`; add the gold `#9c6e49` last.
2. Set the headline first (105px/84px PalaceItalic, -4.5px) and size everything else from the 24px Bellefair body.
3. Keep interface copy tiny (12px, 10.5px) and uppercase with measured tracking.
4. Re-measure the page with a dismissed cookie dialog before adding any component tokens; the entry button was not captured as a role.
5. Verify with `node web/scripts/verify-designs.mjs --slug=the-symphony-of-vines`.
