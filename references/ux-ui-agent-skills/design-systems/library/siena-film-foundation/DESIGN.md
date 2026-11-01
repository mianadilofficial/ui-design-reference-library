---
version: alpha
name: Siena Film Foundation
category: "Agencies & Studios"
description: "Siena Film Foundation (siena.film), a boutique film production house: pure black #000000 canvas, warm off-white #faf7ef ink, a #ffc700 gold accent, Neue Brucke uppercase titles at 48px with -1.44px tracking, NB International and P22 Parrish micro-labels, a 14px card radius and an ENTER splash gate."
colors:
  canvas: "#000000"
  ink: "#faf7ef"
  primary: "#faf7ef"
  on-primary: "#000000"
  surface-card: "#1f1f1f"
  ink-30: "#faf7ef4d"
  accent-gold: "#ffc700"
  accent-red: "#ff0f00"
  gray-deep: "#222222"
  gray-mid: "#bababa"
typography:
  display:
    fontFamily: "\"Neue Brucke\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 10.8px
    letterSpacing: 1.8px
  title-work:
    fontFamily: "\"Neue Brucke\", Arial, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 36.96px
    letterSpacing: -1.44px
    textTransform: uppercase
  title-work-mobile:
    fontFamily: "\"Neue Brucke\", Arial, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 30.8px
  body-dominant:
    fontFamily: NB International
    fontSize: 10px
    fontWeight: 400
    letterSpacing: 0.8px
  caption:
    fontFamily: P22 Parrish Roman
    fontSize: 9.6px
    fontWeight: 400
    letterSpacing: 2.88px
rounded:
  xs: 6px
  md: 12px
  sm: 14px
  pill: 9999px
spacing:
  s1: 1px
  s2: 6px
  s3: 6.4px
  s4: 9.6px
  s5: 12px
  s6: 16px
components:
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 6.4px
---

## Overview

Siena Film Foundation (siena.film) describes itself as a boutique production house dedicated to crafting narratives that push the boundaries of cinematic storytelling; the page title is "Siena Film Foundation". The home URL opens on a splash gate: pure black, a large cream "SIENA" wordmark in a tall condensed display style with "FILM FOUNDATION" spaced out beneath it, and a small outlined ENTER button with an arrow chip. The splash measures 1280px by 800px with nothing scrolling. Because the gate hides the real content, an extra page was measured: siena.film/work, the films gallery.

The work page is a dark cinema-style gallery. A segmented toggle at the top centre switches between FOOTAGE and POSTER modes (the footage icon is yellow when selected), three tall rounded film cards sit side by side with the central one in focus (the current title is "MY PROJECT X" with DOCUMENTARY, YEAR 2024, LOCATION TEL AVIV, CATEGORY DOCUMENTARY), a circular "SCROLL" cursor ring floats over the focused card, a ruler-like tick scrubber runs along the bottom and an outlined EXPLORE button with an arrow chip sits at the lower right. The first-party HTML lists eight films (Savoy, Moon in the 12th House, Taboo, Kafka's Last Trial, My Project X, Ana Maxim, Outsider Freud, By Any Means) with a type, year and running time, and a "SIENA ADMIT ONE" ticket motif.

## Colors

The palette is two colors plus a gold accent. The canvas is #000000 (largest measured background on both pages) and all text is the warm off-white #faf7ef (227 characters on the splash, 1,076 on the work page); it is also the primary color since the only buttons are outlined in it. #1f1f1f (weight 96) is the card surface on the splash. On the work page the filled #faf7ef area weight is 17 (the focus ring and chips) and the borders are #faf7ef and #faf7ef4d.

The site's own root variables name the palette: --white #faf7ef, --white--30 #faf7ef4d, --gray #222, --col--gray #bababa, --gold #ffc700 and --red #ff0f00. The gold matches the yellow selected footage icon in the capture; the red variable was not seen rendered in either measured page. Hover on the EXPLORE and ENTER buttons inverts the text from #faf7ef to near-black (rgb(29, 29, 28) and rgb(28, 28, 27) on EXPLORE, rgb(11, 10, 10) on ENTER) while the border stays #faf7ef; the background color of the hover state was measured as transparent.

## Typography

Three families: Neue Brucke (892 characters on the work page), P22 Parrish Roman (178) and NB International (217 on the splash). Neue Brucke is the display face for film titles: 48px / 36.96px with -1.44px letter-spacing, uppercase, weight 400 (mobile: 40px / 30.8px). P22 Parrish Roman is the small-caption face at 9.6px with 2.88px letter-spacing (the DOCUMENTARY / SHORT FILM labels above each title). NB International is the 10px detail face with 0.8px tracking on the splash, and Neue Brucke at 12px with 1.8px tracking (display token) is the ENTER label. Only weight 400 is used.

Root variables define a rem scale: --text-h1 5.6rem, --text-h2 3.2rem, --text-h3 3rem, --text-h4 2rem, --text-h5 1.6rem, --text-bl 1.05rem, --text-eyeb .8rem and --text-eyeb-small .6rem. Measured sizes by characters on the work page are 16px (674), 48px (194), 9.6px (178) and 12px (30). Everything is uppercase and widely letter-spaced except the large titles, which are tightened.

## Layout

The viewport is fixed (--100vh: 800px in the variables; scrollHeight 800 on both pages): this is a full-screen, non-scrolling stage. On the work page the content is a horizontal row of tall cards centered on the focused film, a top-center mode toggle, a bottom-center scrubber and a bottom-right EXPLORE control. Variables give the grid gutters: --gutter 1.2rem, --gx 3rem, --sgx 2.1rem, --gy 3rem and --roll-gx 3.8rem. Measured paddings are 16px (11 uses), 14.4px, 11.2px (8 each), 6.4px and 6.9375px; gaps are 6.4px (16) and 9.6px (4).

## Elevation & Depth

No box shadows were measured on either page. Depth is optical: the focused card is sharp and bright while neighbors are blurred and dimmed, the poster cards fade into black at their edges, and thin cream lines frame the metadata (YEAR, LOCATION, CATEGORY) with ruled rows. Surfaces are black on black with the one lifted tone #1f1f1f.

## Shapes

Radii measured on the splash are 6px, 14px and 100%; on the work page 6px (3 elements), 4px (1) and 100% (1, the circular scroll ring). The variables expose --rounded-xs 6px, --rounded-md 12px and --rounded-full 100rem. The ENTER and EXPLORE controls are two chips (a text chip and an arrow chip) with slightly rounded corners and a thin cream outline; cards use a 14px radius.

## Components

Splash card: #1f1f1f fill, #faf7ef text, 14px radius, 6.4px padding (340px by 282px). ENTER button: Neue Brucke 12px, 1.8px tracking, outlined in #faf7ef, with an adjacent arrow chip; text turns near-black on hover. Mode toggle: two square icon buttons in a dark capsule labelled FOOTAGE and POSTER with the word MODE; the active one shows the gold icon. Film card: a tall poster or footage tile with a blurred state when not focused, a P22 Parrish category label, a 48px uppercase Neue Brucke title and a ruled three-row metadata table. EXPLORE: an outlined text chip plus arrow chip. Scroll ring: a 100%-radius circle with the text SCROLL.

## Design System Architecture

No public design system or brand guideline was found: the pages opened (siena.film and siena.film/work through the extractor, plus the home HTML) link none. The site is a Webflow build (the page HTML carries data-wf-* attributes and a Webflow stylesheet) with a custom variable layer in the root: named colors, a rem type scale (--text-*), gutters (--gutter, --gx, --gy), radii (--rounded-*), easings (--customEase cubic-bezier(.19, 1, .22, 1), --easeOutQuint cubic-bezier(.23, 1, .32, 1), --easeOut, --easeOutBack) and --leading-md .21rem. These variables are the de-facto token set.

## Do's and Don'ts

Do keep the page black with cream #faf7ef text and use gold #ffc700 only for the selected state. Do set titles in Neue Brucke uppercase with tight tracking and captions in P22 Parrish with wide tracking. Do use outlined chip buttons with an arrow chip. Do keep the stage full-screen and let the film imagery carry color.

Don't add filled colored buttons, gradients or shadows; none were measured. Don't use pure white: the light color is the warm #faf7ef. Don't set body copy in bold; only weight 400 was measured. Don't use red #ff0f00 as a UI color without confirming where the site renders it.

## Responsive Behavior

A mobile pass of the work page recorded: h1 Neue Brucke 40px / 30.8px (desktop 48px / 36.96px), no visible header links, no menu toggle detected, and a maximum of 8 card columns, with one full-height black band. Mobile character usage is 16px (337), 40px (97), 9.6px (89) and 12px (24). The splash page's mobile pass recorded only 12px text (5 characters). The first-party HTML also contains a "Rotate your device to ensure a better experience" message. Breakpoints were not measured.

## Iteration Guide

Rebuild the ENTER gate first (black, cream wordmark, outlined ENTER chip), then the work stage: mode toggle, three-card carousel with a focused center card, ruled metadata, scroll ring, bottom scrubber and EXPLORE chip. Use canvas #000000, ink #faf7ef, accent #ffc700, 14px card radius and the three fonts. Values not in web/data/extracted/siena-film-foundation.json or siena-film-foundation--work.json, including the hover fill and tablet behavior, are not measured.
