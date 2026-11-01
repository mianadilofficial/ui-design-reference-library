---
version: alpha
name: "Sutéra"
category: "Tech & AI"
description: "Sutéra, the portfolio of designer Stella Mühlhaus (sutera.ch), measured live: a white page with pure black text, a 59.136px uppercase NeueHaas headline, PPNeueMontreal at 10.368px for tiny outlined labels, grey #9e9e9e and sky #b5e9ff accents, 1px black outlines, and 10px radius tag pills that invert on hover."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  sky-tint: "#b5e9ff"
  dark-grey: "#cbcbcb"
  grey: "#9e9e9e"
typography:
  display:
    fontFamily: NeueHaas
    fontSize: 59.136px
    fontWeight: 400
    lineHeight: 54.4051px
    textTransform: uppercase
  display-mobile:
    fontFamily: NeueHaas
    fontSize: 43.641px
    fontWeight: 400
    lineHeight: 40.1497px
    textTransform: uppercase
  body:
    fontFamily: PPNeueMontreal
    fontSize: 10.368px
    fontWeight: 400
    lineHeight: 9.8496px
    letterSpacing: "-0.41472px"
rounded:
  xs: 2px
  sm: 8px
  md: 10px
  lg: 52px
spacing:
  s1: 1.56px
  s2: 2.18px
  s3: 2.94px
  s4: 3px
  s5: 4px
  s6: 4.35px
  s7: 5.86px
  s8: 5.91px
  s9: 6px
  s10: 7.36px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 1.5552px 5.90976px
    borderColor: "{colors.ink}"
  nav:
    textColor: "{colors.ink}"
    padding: 24px 24px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  card:
    textColor: "{colors.ink}"
    borderColor: "{colors.ink}"
  footer:
    textColor: "{colors.ink}"
    padding: 0px 24px
---

## Overview

The measured page is sutera.ch, titled "Sutéra - Reality By Design". It is a personal portfolio: in the capture the page identifies its author as Stella Mühlhaus, who "currently work[s] at Meta", gives talks and workshops, and writes about design and technology, and a label in the page reads "NOT A STUDIO — JUST ME". The measured final URL is https://www.sutera.ch/, the brand's own site. The page is 4,540px tall at 1280px.

The first screen is a technical-drawing composition on white. The wordmark "SUTÉRA" sits top-left, a boxed button "CHANGE REALITY" with a globe icon sits at top center, and a "LOCAL TIME ZUR 05:31 AM" readout sits top-right. The h1 "REALITY, BY DESIGN." is set at the left in large uppercase type. In the middle a floating mossy rock carrying a small red flower is surrounded by short mono-looking uppercase captions joined to it by thin leader lines ending in small black squares: "WHERE IMAGINATION BRANCHES INTO A LANDSCAPE OF ENDLESS DIVERSITY", "FROM DEEP ROOTS, CREATIVITY DRAWS ITS STRENGTH", "FOUNDATION DESIGNED FOR GROWTH", and a framed card "SUTÉRA /25 SU (UNDERNEATH) + TERA (EARTH) → UNDERNEATH THE EARTH". A "[CORE THREADS OF MY WORK]" numbered list (perceptual interfaces, embodiment, AI, system and tools) and a bio card with three outlined pills (LINKEDIN, MEDIUM, INSTAGRAM) close the first screen.

Below, the page switches to oversized sentence-case statements ("I design systems that shape how humans and machines connect.", "From robotic extensions to perceptual interfaces, my work lives at the intersection of biology and technology.", "The future isn't something we simply let happen — it's something we must design with care.") interleaved with inline icons, small framed images and rounded outline chips around key phrases. The look is lab-notebook and HUD: hairline frames, tick marks, callouts, with images cut out against white.

## Colors

The page is white (`canvas` #ffffff, weight 48) with pure black text (`ink` and `primary` #000000, 3004 characters). The palette is deliberately sparse. `grey` (#9e9e9e, `--color-grey`) is the secondary text color (144 characters), used for the local-time readout and secondary navigation text. `dark-grey` (#cbcbcb, `--color-dark-grey`) is a mid-grey background (weight 3). `sky-tint` (#b5e9ff, weight 7) is a pale blue background fill seen in the framed robotic-arm chip. White text (22 characters) appears on black chips. The site also publishes `--color-dark` #121212, `--color-green` #59e7ca and `--color-blue` #344dbb in its root variables; they were not measured as visible colors on the page. Outlines are black (borders measured on 18 elements, all #000000).

## Typography

Three families are measured: PPNeueMontreal (2691 characters, `--font-main`), NeueHaas (453 characters, `--font-lab` and the `--reality-font`), and ui-sans-serif (26 characters). Loaded faces are NeueHaas 400 and 700 and PPNeueMontreal 400. The root variables also name Bitter (`--font-blueprint`) and BrunoAce (`--font-cyber`), but they were not measured in use. Weight is 400 for 3114 characters and 700 for 56.

`display` is NeueHaas 59.136px on a 54.4051px line, uppercase, normal tracking on the h1; the large sentence statements run at the same 59.136px with -2.36544px letter spacing (315 characters). A 25.856px size with -1.03424px (66 characters) is used for a second tier. `body` is PPNeueMontreal 10.368px on a 9.8496px line with -0.41472px letter spacing (1891 characters, the most-used size). Other small sizes are 8.832px (548 characters), 10px, 11.776px, 9.6px and 14.72px (header, uppercase). Text is set smaller than 11px for the bulk of the page and larger than 59px only for statements; line heights are at or below the font size throughout (for example 9.8496px at 10.368px). The mobile display is 43.641px on 40.1497px.

## Layout

The grid margin and gutter are both 20px (`--grid-margin`, `--grid-gutter`). The header has padding 24px 24px 0px and the footer 0px 24px. Elements are placed on a loose, asymmetric canvas rather than in rows: callouts are anchored at different positions around a central image, and in the capture the large statements sit to the right of the left margin where the h1 and labels sit. Sections are separated by large empty white spaces. Corner brackets and small plus marks in the first screen mark grid intersections in the capture, which gives it a blueprint look. The header measured in the extraction contains SUTÉRA, CHANGE REALITY and the LOCAL TIME readout, with child colors #9e9e9e and #000000, set at 14.72px uppercase. Spacing values in the tokens are small (1.56px to 7.36px), matching the small type. No container gap values were recorded (`gaps` is empty), and no spacing scale is published.

## Elevation & Depth

No shadows were measured. Structure is drawn with 1px black outlines, thin leader lines, small black square nodes, a faint cross-hair grid, and small boxed labels with a corner close mark. Image cut-outs (the rock, hand, statue) provide depth against the white page.

## Shapes

Shapes are rounded rectangles and tags. `md` 10px is the most common radius (16 elements) and is the outlined tag-pill radius; `lg` 52px (2 elements) is a large capsule, `sm` 8px and `xs` 2px appear once each, and half-rounded corners such as `0px 10px 10px 0px` and `0px 20px 20px 0px` appear on a few elements. The tag hover test shows the radius changing from 10px to 4.0259px as the fill inverts.

## Components

- **link / tag pill**: black 10.368px text, 1px black border, 10px radius, padding 1.5552px 5.90976px, transparent fill. On hover (LINKEDIN) the fill becomes black, the text turns near-white (#fefefe), the border turns near-white and the radius changes to 4.0259px.
- **nav**: padding 24px 24px 0px, black text, uppercase 14.72px.
- **card**: black 1px outline, black text, as in the bio card and the "SUTÉRA /25" card.
- **footer**: black text, 0px 24px padding.
- **Callout**: a small uppercase caption with a leader line and a black square node (described from the capture).

The extraction found no primary button; the boxed "CHANGE REALITY" control is an outlined label.

## Design System Architecture

No public design-system documentation was opened. The root variables publish a small set: colors (`--color-white`, `--color-black`, `--color-grey`, `--color-dark-grey`, `--color-dark`, `--color-green`, `--color-blue`), fonts (`--font-main`, `--font-lab`, `--font-blueprint`, `--font-cyber`), weights (`--f-light` 300 to `--f-extra-bold` 800) and the 20px grid margin and gutter. The measured values in this file match those variables where they overlap. No tokens repository was consulted.

## Do's and Don'ts

- Do keep the page white with pure black text and 1px black outlines.
- Do use uppercase NeueHaas for the h1 and sentence-case PPNeueMontreal for statements.
- Do set labels very small (8.832px to 10.368px) and let big statements carry the page.
- Do use 10px rounded outlined tags that invert to black on hover.
- Don't add colored fills beyond pale sky (#b5e9ff) and grey.
- Don't use shadows; none were measured.
- Don't use a conventional filled call-to-action; the page has none.

## Responsive Behavior

Measured at 390px: the h1 is 43.641px on a 40.1497px line, uppercase. The mobile size census is led by 13.884px (1601 characters) and 11.895px (620), with 37.674px (317), 24.804px (66), 12.87px, 15.873px, 10px and 16px also present. Layout reflow and breakpoints were not measured.

## Iteration Guide

1. Start on white with a 59.136px uppercase NeueHaas headline in black.
2. Add a cut-out image with thin leader lines to small uppercase captions.
3. Use 10px outlined pills for links and make them invert on hover.
4. Use grey (#9e9e9e) for secondary readouts and sky (#b5e9ff) as a rare tint.
5. Add colors only from the published variables listed above.
