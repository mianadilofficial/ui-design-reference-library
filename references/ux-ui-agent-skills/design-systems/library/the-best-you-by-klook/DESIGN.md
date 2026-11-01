---
version: alpha
name: "The Best You by Klook"
category: "Culture & Events"
description: "Klook campaign quiz microsite: poppins 400/600 and cubano, white canvas #ffffff, off-black #222222 text, embossed pill buttons with 33.33px radius, 8px polaroid cards, over a blue-violet-orange gradient and a 3D boarding-pass ticket."
colors:
  canvas: "#ffffff"
  ink: "#222222"
  primary: "#222222"
  brand-orange: "#ff5b00"
  brand-yellow: "#ffd871"
  link-indigo: "#2c1d86"
  mid-gray: "#555555"
typography:
  nav:
    fontFamily: poppins, sans-serif
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 8px
  sm: 13.33px
  md: 33.33px
spacing:
  s1: 2.67px
  s2: 5.33px
  s3: 6.67px
  s4: 8px
  s5: 10.67px
  s6: 13.33px
  s7: 21.33px
  s8: 32px
components:
  nav:
    textColor: "{colors.canvas}"
    padding: 21.3333px 32px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  card:
    textColor: "{colors.ink}"
    padding: 8px
    boxShadow: rgba(255, 255, 255, 0.5) 0px 0px 25px 5px, rgba(255, 255, 255, 0.5) 2px 2px 2px 0px inset, rgba(0, 0, 0, 0.25) -2px -2px 2px 0px inset
    transform: matrix(1, 0, 0, 1, 0, 0)
---

## Overview

The Best You by Klook (experiencethebestyou.com, measured at /en/) is a campaign microsite from the travel-experiences brand Klook. The document title is "What does The Best You look like?" and the entire experience is a short interactive personality quiz. There is no conventional content page: the visible text is a Klook logo at top left, a language selector at top right (English, 日本語, 香港繁體, 台灣繁體, Bahasa Indonesia, Bahasa Malaysia, ไทย), a share button in a purple pill, the prompt "First up, set your Out of Office message.", a deck of swipeable photo cards with options such as "Off-grid mode ON. If you need me… don't." and "Away on an adventure—expect many updates!", the hint "Drag the cards horizontally to cycle through your options." and a "Next" button with a teal arrow disc. A "URL copied to clipboard" notice is part of the share function.

Behind it all is a full-viewport gradient field of electric blue, violet, magenta and teal, warming to orange at the bottom, with a large tilted, glowing pink boarding-pass ticket (barcode, perforation and a "SIN" airport-code lettering) rendered as a 3D, glossy object. The measured DOM is very small (122 visible elements): the scene is a rendered canvas with DOM overlays for text and controls. The mood is playful, glossy and tactile: soft inner highlights, pillowy buttons and polaroid-style photo cards.

## Colors

The page canvas token is white (#ffffff), which is the color of overlay text and the card/button base; the visible background is a full-bleed gradient rendered in the canvas rather than a CSS fill, so it is not tokenised. Text is off-black #222222 on light cards, and the generated primary is also #222222.

The site's own root variables publish the palette: --off-black #222, --black #000, --mid-gray #555, --white #fff, --link #2c1d86 (deep indigo), --yellow #FFD871, --orange #FF5B00 and --scrollbar #000. Gradients are defined as tokens: --orange-gradient (#FF823D to #FF5B00), --blue-gradient (#00CBD0 to #0CA4A8, the teal of the Next arrow disc), --purple-gradient (#C080F4 to #A059DA, the share pill), --button (#FFFFFF to #E7E7E7, the pillowy white button) and --progress (#FF8D4E through #CF22CF to #FF5B00 at 135deg). The orange #FF5B00 is the Klook brand orange family and the lower end of the page gradient.

The extractor also read #0000ee as a nav link color; that is the browser's default link color and is dropped here.

## Typography

Two families are loaded: poppins at 400 and 600, and cubano at 400. Poppins is the UI and body face, with sans-serif as fallback; Cubano is a heavy display face loaded for the in-scene lettering. The measured text sizes (by characters) are 14.6667px (most text, 161 weight), 10.6667px (the language selector and navigation role, 69) and 33.3333px (the quiz prompt, 34). The navigation token is poppins at 10.6667px, weight 400, line height 16px; the body element reports weight 600 at the same size. Because the measured page has no headings or paragraphs, no display, heading or body tokens are declared beyond the navigation text; the quiz prompt's size (33.3333px) is only recorded as a measured size, not a role. The prompt appears in white, with a regular weight, centred on the ticket.

## Layout

The layout is a single full-viewport stage. A thin top bar holds the logo at left and the language selector with the share pill at right, with padding of 21.3333px 32px. The ticket and the card deck are centred; the prompt sits above the deck and a Next button below it. The deck shows one card in front and two angled cards behind. The page is tall (the capture shows a long vertical canvas) because the viewport-height variables (--dvh, --svh, --lvh) drive sizing. Spacing values measured: 2.67px, 5.33px, 6.67px, 8px, 10.67px, 13.33px, 21.33px and 32px. Breakpoints are published as variables: min-width 500px (xsm), 768px (sm), 1024px (md), 1366px (lg), 1536px (xlg) and 1921px (xxlg), plus pointer and height conditions (touch, not-touch, short mobile, iPad Pro, desktop).

## Elevation & Depth

Depth is the signature of this site: surfaces look like physical, soft plastic. The card component carries a three-layer shadow: rgba(255, 255, 255, 0.5) 0px 0px 25px 5px as an outer glow, rgba(255, 255, 255, 0.5) 2px 2px 2px 0px inset as a top-left highlight and rgba(0, 0, 0, 0.25) -2px -2px 2px 0px inset as a bottom-right shade. Buttons use a lighter inset pair, rgba(0, 0, 0, 0.1) -2px -2px 4px 0px inset and rgba(0, 0, 0, 0.1) 2px 2px 4px 0px inset. Together with the gradient tokens they make controls look pillowy and embossed rather than flat.

## Shapes

Measured radii: 8px, 13.3333px and 33.3333px (each on four elements). Cards use the smaller values; the Next button and language and share pills use the large 33.3333px radius, close to a full pill. The ticket is a rounded object with notched edges and the photo cards are polaroid-style with a thick white frame.

## Components

- Language selector: white 10.6667px poppins labels with a chevron, top right.
- Share button: purple-gradient (#C080F4 to #A059DA) pill with a paper-plane icon, embossed.
- Photo card: white frame, 8px padding, #222222 text, the three-layer shadow above; a photo above a short caption.
- Next button: white-to-light-gray gradient pill with the teal gradient arrow disc, bold 600 label.
- Progress indicator: the --progress gradient (orange to magenta to orange).
- Navigation bar: padding 21.3333px 32px, white text over the gradient.

The microcopy voice is informal and workplace-flavored: the quiz begins by asking visitors to set an "Out of Office message", and each card answers in first person with a short, humorous line. The tone invites self-expression, matching the travel-campaign goal of showing what a traveller's best self looks like, and the sequence is deliberately brief, one question at a time, with a single obvious forward button.

## Design System Architecture

No public design system or brand guideline was found. The site's pages were opened and no brand or design-system link appeared, so no external research was done. The de-facto system is the set of CSS custom properties in the document root: color names (--off-black, --yellow, --orange), gradient recipes (--orange-gradient, --blue-gradient, --purple-gradient, --button, --progress), breakpoint media queries (--bp-*) and viewport units (--dvh, --svh, --lvh). Visual output is produced by a canvas scene with DOM controls laid over it. A Google Tag Manager script is present for analytics and is not a UI component.

## Do's and Don'ts

- Do build controls as soft, embossed pills with the white-to-gray button gradient.
- Do use gradient accents (teal for forward actions, purple for share, orange-magenta for progress).
- Do set short, friendly copy in poppins, with the prompt large and white.
- Do pair each choice with a photograph in a white-framed card.
- Don't use flat, outlined buttons or sharp corners.
- Don't use #0000ee, the browser default link color.
- Don't tokenise the canvas gradient background as a CSS fill.

## Responsive Behavior

The mobile pass of the extraction recorded no role measurements, so mobile sizes are not measured. The root variables define breakpoints (500px, 768px, 1024px, 1366px, 1536px, 1921px) and touch/pointer queries, but what changes at each is not measured.

## Iteration Guide

1. Start with the gradient stage and white text, poppins 400/600 at small sizes, and the prompt at 33.3333px.
2. Build cards with 8px padding, 8px radius and the three-layer shadow; pills at 33.3333px radius.
3. Use the published gradient tokens verbatim for buttons and progress.
4. Treat the ticket and the background gradient as imagery.
5. Hover, focus and any dark theme are not measured.
