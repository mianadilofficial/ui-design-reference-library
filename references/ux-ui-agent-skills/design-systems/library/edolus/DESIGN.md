---
version: alpha
name: "EDOLUS"
category: "Tech & AI"
description: "EDOLUS, an AI company site: black canvas, #c4c7c7 ink, General Sans 300 at 96px uppercase for the headline, JetBrains Mono for technical text, a square white #ffffff 'INITIATE SYSTEM' button with black 12px mono text, 0px radius everywhere, over WebGL 3D artwork with a gold light ribbon."
colors:
  canvas: "#000000"
  page-body: "#1d292c"
  ink: "#c4c7c7"
  primary: "#ffffff"
  on-primary: "#000000"
  ink-strong: "#ffffff"
typography:
  display:
    fontFamily: "\"General Sans\", sans-serif"
    fontSize: 96px
    fontWeight: 300
    lineHeight: 99.84px
    letterSpacing: 0.96px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"General Sans\", sans-serif"
    fontSize: 12.48px
    fontWeight: 400
    letterSpacing: 1.4976px
    textTransform: uppercase
  tagline:
    fontFamily: "\"General Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    letterSpacing: 1.68px
    textTransform: uppercase
  label:
    fontFamily: "\"General Sans\", sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 12px
    letterSpacing: 1.68px
    textTransform: uppercase
  button:
    fontFamily: "\"JetBrains Mono\", monospace"
    fontSize: 12px
    fontWeight: 500
    letterSpacing: 1.2px
  counter:
    fontFamily: "\"JetBrains Mono\", monospace"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.2px
rounded:
  none: 0px
spacing:
  s1: 10px
  gutter: 64px
  button-y: 19.2px
  button-x: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 19.2px 48px
    height: 54.375px
    width: 222px
    transition: padding 0.3s
  audio-toggle:
    textColor: "{colors.ink-strong}"
    typography: "{typography.label}"
    rounded: "{rounded.none}"
    gap: "{spacing.s1}"
    height: 28.171875px
    transition: opacity 0.3s
  hero-headline:
    textColor: "{colors.ink-strong}"
    typography: "{typography.display}"
    width: 1152px
  tagline:
    textColor: "{colors.ink}"
    typography: "{typography.tagline}"
    opacity: 0.8
---

# EDOLUS

## Overview

EDOLUS (https://edolus.com/) presents itself as an artificial-intelligence company with a cinematic, near-black single-screen experience. The page title is "EDOLUS" and the h1-role element reads "INTELLIGENCE AT PLANETARY SCALE" in 96px uppercase General Sans at weight 300. A plain-text fetch of the page returned only the word "EDOLUS" and no links, so the experience is drawn on canvas or composited layers rather than in readable document text; the extraction counted only 77 visible elements. The 1280px capture shows the wordmark EDOLUS centred at the top in wide-tracked capitals, a horizontal band of translucent cards that slide across the screen, a glowing gold ribbon of light curving across the lower half, a centred tagline in small uppercase, a headphone icon with the line "EXPERIENCE WITH HEADPHONES" at the bottom, and a small white loading-style box in the centre containing glitchy characters.

The two cards visible in the capture are headed "KNOWLEDGE TOPOLOGY" (kicker "DISTRIBUTED SEMANTIC MAPPING") and "MULTI-AGENT ORCHESTRATION" (kicker "COORDINATED AUTONOMOUS SYSTEMS"). Each has a short bulleted list in small capitals: "SEMANTIC CLUSTERING", "RELATIONAL MEMORY GRAPHS", "CONTEXTUAL WORLD MODELING" on the first, "FLEET SYNCHRONIZATION", "DISTRIBUTED DECISION SYSTEMS", "AUTONOMOUS COORDINATION" on the second. A tagline runs across the middle: "ORCHESTRATING THE FOUNDATION OF ARTIFICIAL INTELLIGENCE FROM THE EDGE OF THE ATMOSPHERE." The imagery is rendered 3D art: a faceted gold polyhedron with golden threads, a translucent faceted globe in teal and gold, and blue circuit-like strands.

Mood: restrained, premium, space-and-technology. Everything is uppercase, generously letter-spaced and low in contrast, so the artwork carries the page. The measured data covers the intro screen; deeper pages were not measured.

## Colors

The measured palette is monochrome grey on black.

- Canvas `#000000`: the only measured background (weight 1024 in the background-area survey).
- `page-body` `#1d292c`: a dark teal-grey recorded as a body/main background candidate.
- Ink `#c4c7c7`: the most-read text colour, a light grey used for the tagline, kickers and list items.
- Primary `#ffffff` with on-primary `#000000`: the one call to action, the square "INITIATE SYSTEM" button, is a solid white block with black text. The extractor did not detect it (it is a `div` with `cursor: pointer`, not a `button` or link), so it was measured with a recorded Playwright probe (see SOURCES.json `_probes`). The `#000000` text in the extraction's text-colour survey (15 characters) is this button's label.
- `ink-strong` `#ffffff`: pure white, used for the h1-role line and the AUDIO toggle label.

In the capture, the on-screen colour is warmer than the declared canvas: the dominant screen pixels are near-black browns (the capture's two largest colour clusters are `#0d0c0a` and `#120d0a`) because the WebGL light ribbon and vignette sit over the black. Gold and teal appear only inside the artwork, not in measured text or UI colours, so they are not tokens.

## Typography

Two families were loaded: General Sans (weights 300, 400, 500, 700) and JetBrains Mono (weights 400, 500). General Sans carries 154 measured characters and JetBrains Mono 69.

Measured sizes by character weight: 14px (168 characters), 96px (31), 12px (20) and 48px (4). Letter-spacing is large relative to size: 14px text at 1.68px (114 characters) and 0.28px (54), 96px text at 0.96px, 12px text at 1.2px and 1.68px.

- `display`: General Sans 300, 96px, line-height 99.84px, letter-spacing 0.96px, uppercase. This is the h1-role line "INTELLIGENCE AT PLANETARY SCALE".
- `display-mobile`: General Sans 400, 12.48px, letter-spacing 1.4976px, uppercase, from the 390px pass where the h1 role resolved to the tagline "ORCHESTRATING THE FOUNDATION OF ARTIFICIAL INTELLIGENCE FROM…". The mobile pass also recorded sizes of 11px, 12px, 9.6px and 44px.

The card titles are heavy (weight 700 at 48px was measured for four characters) while the kickers and bullets are small and light. No body-text role was detected, so no `body` token is declared; the fidelity gate may flag this.

## Layout

The viewport is a single 1280 by 800 stage (scroll height 800, no document scroll). Layout is centred and axial: wordmark top centre, tagline in the vertical middle, headphone prompt bottom centre. Cards form a horizontal carousel that bleeds off both screen edges; in the capture one card is cut at the left edge, one is whole in the centre-left, and one is partly beyond the centre-right. The only measured gap is 10px (two instances). No grid, container width or column count was measured; the h1-role element is 1152px wide because its wrapper carries `padding: 0px 64px` (measured by the probe), giving a 64px gutter on each side of the 1280px viewport. The CTA sits in a full-width flex row directly under the tagline, centred.

## Elevation & Depth

No box-shadows or borders were measured (empty lists in the survey). Depth in the capture comes from translucency and light: cards are faintly lighter than the black ground with a barely visible edge, artwork overlaps their edges, and the gold light ribbon passes behind and in front of them. The central white box in the capture is the "INITIATE SYSTEM" button mid-animation (its label is scrambling into place); the probe measured it as solid `#ffffff` with no shadow, no border and 0px radius. The white corner handles around it in the capture are drawn by an SVG overlay, not by a CSS border.

## Shapes

No non-zero border radius was measured on any element: the extraction's radius survey and the CSS corpus radius list are both empty, the h1 and body roles compute `0px`, and the probe measured `0px` on the button, the AUDIO toggle, the tagline and the hero wrapper. The single `rounded` token is therefore `none: 0px`, and every component references it. Shape language is rectilinear in the interface and organic in the 3D artwork.

## Components

- Wordmark: EDOLUS in widely spaced capitals, centred at the top.
- Kicker: 12px uppercase, light grey, above a card title.
- Card title: heavy uppercase General Sans, large, grey-white.
- Bullet list: small uppercase items with square-style bullets in light grey.
- Tagline: 14px uppercase tracked grey line across the middle.
- Prompt: headphone outline icon above the line "EXPERIENCE WITH HEADPHONES".
- `button-primary` ("INITIATE SYSTEM"): background `#ffffff`, text `#000000`, JetBrains Mono 12px weight 500 with 1.2px letter-spacing, padding 19.2px 48px, 222px by 54.375px, 0px radius, `transition: padding 0.3s`. Hovering it in the probe produced no computed change to colour, padding or size, so no hover token is declared. The label scrambles through glitch glyphs before it settles, which is what the capture caught.
- `audio-toggle`: a headphone-style SVG icon (26px) plus the word AUDIO in General Sans 12px weight 500, line-height 12px, 1.68px tracking, uppercase, white; a flex row with a 10px gap, 28.171875px tall, at the top right, with `transition: opacity 0.3s`.
- `hero-headline`: the white 96px General Sans 300 line, 1152px wide inside a wrapper with 0px 64px padding.
- `tagline`: General Sans 14px weight 400, 1.68px tracking, uppercase, `#c4c7c7` at opacity 0.8. The same style is used for "EXPERIENCE WITH HEADPHONES".
- Loading counter: JetBrains Mono 12px weight 400, line-height 16.2px, white digits that roll vertically, with a percent sign tracked at 1.8px.
- Inputs, links and navigation menus: none exist in the DOM, so none are declared.

## Design System Architecture

No public design system, brand guideline or token package exists that was found: the page exposes no links, and no CSS custom properties were measured (root variable count 0). The de-facto system is a small set of type rules (General Sans for display and labels, JetBrains Mono for technical text) and a black ground with grey ink. Source: the extraction of https://edolus.com/ and a page fetch of the same URL that returned only the word EDOLUS.

## Do's and Don'ts

Do:
- Set everything in uppercase with generous tracking.
- Use `#000000` as the ground and `#c4c7c7` for text, white for the primary line and the single white CTA block.
- Let rendered artwork provide colour; keep interface text neutral.
- Use General Sans 300 at large sizes for the headline and heavier weights for card titles.

Don't:
- Do not add UI colour such as gold or teal into text, since only the artwork carries it.
- Do not add rounded corners, shadows or borders; none were measured.
- Do not use lowercase body copy; the measured text is uppercase.
- Do not round the CTA or give it a shadow; it is a flat white rectangle with black mono text.

## Responsive Behavior

The 390px mobile pass recorded the h1 role as the tagline at 12.48px with 1.4976px letter-spacing, uppercase, light grey `#c4c7c7`, 342px wide and 51px tall. Mobile font sizes recorded were 12.48px, 11px, 12px, 9.6px and 44px. Card arrangement, breakpoint values and hiding of elements were not measured.

## Iteration Guide

1. Black ground, `#c4c7c7` ink, white for the main line.
2. Load General Sans (300/400/500/700) and JetBrains Mono (400/500).
3. Headline: 96px/99.84px, weight 300, 0.96px tracking, uppercase; mobile label 12.48px with 1.4976px tracking.
4. Build translucent cards for the artwork; add kicker, title and list text in uppercase.
5. One white square CTA: `#ffffff` fill, `#000000` JetBrains Mono 12px/500 text tracked 1.2px, padding 19.2px 48px, 0px radius.
6. Run `node web/scripts/verify-designs.mjs --slug=edolus` and report any missing group instead of inventing tokens.
