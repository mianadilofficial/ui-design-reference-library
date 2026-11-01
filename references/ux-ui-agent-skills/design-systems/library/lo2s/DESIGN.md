---
version: alpha
name: "LO2S"
category: "Portfolio"
description: "LO2S (lo2s.com, live-event visuals studio portfolio): Geist at 10.6667px weight 700 with -0.106667px tracking, near-white #f7fcfe text on full-screen black video, a 9999px pill radius, no buttons, chrome reduced to numbered links."
colors:
  canvas: "#000000"
  ink: "#f7fcfe"
  primary: "#f7fcfe"
  surface: "#000000"
  page-body: "#ffffff"
  ink-2: "#f7fcfe80"
typography:
  display:
    fontFamily: Geist
    fontSize: 10.6667px
    fontWeight: 700
    lineHeight: 12.4444px
    letterSpacing: "-0.106667px"
  display-mobile:
    fontFamily: Geist
    fontSize: 20.8px
    fontWeight: 600
    lineHeight: 14.56px
    letterSpacing: "-0.9984px"
rounded:
  pill: 9999px
spacing:
  s1: 0.89px
  s2: 1.78px
  s3: 7.11px
  s4: 10.67px
  s5: 14.22px
  s6: 83.56px
components:
  nav:
    textColor: "{colors.ink}"
    padding: 7.11111px 7.11111px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
---

## Overview

LO2S is a studio portfolio whose entire first screen is a full-viewport video. The capture shows a silhouetted keyboard player against a deep red and orange haze, with the small interface laid over it in near-white type. At the top-left is a numbered menu (1 Work, 2 Archive, 3 About, 4 Contact), at the top-centre the LO2S wordmark, and at the top-right a link labelled Showreel. Across the middle of the screen sit four project captions: "Msrahiya Album Tour", "Hozho, Dish Dash, Misha Saied, Leigh Ross, Midway", "Projection Mapping for Bulgrai's New Campaign" and "Ben Bohmer, Jade, Rolbac". At the bottom, a short statement reads "Redefining space, light, and experience where technology meets the unexpected." A "00:00" timer is also measured, which is part of the video interface.

The page is therefore a reel player rather than a conventional layout: the page background beneath is black, and media supplies all the color. The measured document is 800px tall at the 1280px viewport, so the home page is a single screen. A cookie portal element was hidden during measurement and is not documented. The description language is minimal; captions are names of artists and projects, not sales copy.

## Colors

The palette has two roles. The black #000000 is the dominant measured background (area 5120), with a 50 percent black overlay, #00000080 (area 535), laid over the media. Text is a very pale cool white, #f7fcfe, which the site's own root variable --c-white confirms, at full strength (339 characters) and at 50 percent opacity #f7fcfe80 (41 characters). The 50 percent text is the resting state of the project caption links; their hover state measured full opacity 1 against a resting opacity 0.5.

Other root variables published in the stylesheet are --c-black #000, --c-dark-grey #474a4d and --c-grey-transparent hsla(200,8%,77%,.5). They are declared but their use on screen was not measured. The computed body background reads white (#ffffff) but the video and its black layer cover it, so canvas is set to the black #000000 that the viewer sees (the largest measured background area); primary is set to the near-white #f7fcfe, the only interactive color, since the extractor found no button.

- Canvas #000000 (largest measured background area); surface #000000; page-body #ffffff (the computed body background, hidden by the video).
- Ink and primary #f7fcfe; ink-2 #f7fcfe80.

## Typography

One typeface family is measured: Geist (380 characters), with a Geist Mono also loaded, both as variable fonts covering weights 100 to 900. The root variable --font-secondary is "Geist". Nearly all text is 10.6667px at weight 700 (338 characters) with a 12.4444px line-height and -0.106667px tracking; this is the menu, caption, statement and timer style. A larger size, 32px at weight 600 with -1.28px tracking, accounts for 42 characters, and appears as a title style.

The root variable --vw is 12.8px at the measured 1280px width, a unit that suggests viewport-relative sizing; the mobile pass reports a different scale, with the title style at 20.8px (weight 600, line-height 14.56px, tracking -0.9984px) and the label at 12.48px (weight 700, 14.56px line-height, -0.1248px tracking). Tracking is always negative and proportional: about -1 percent of the size on labels and -4 percent on large titles. No uppercase transforms are used; the capture shows sentence-case captions.

## Layout

Layout is determined by the full-screen video. Navigation is pinned at the corners: a stacked numbered list at the left, a centred logo, and a single link at the right. Project captions sit on a shared horizontal line in the vertical middle, evenly spaced as a four-column row; the statement sits at the bottom of the third column. The measured gaps and paddings are tiny and fractional: 0.89px, 1.78px, 7.11px, 10.67px, 14.22px and 83.56px, with the nav padded 7.11111px 7.11111px 0px. There are no cards, grids of thumbnails or footers on the home page measurement; the Work and Archive sections lie behind the menu and were not measured.

The viewer therefore experiences the site as light type on a dark field. The contrast between #f7fcfe and #000000 is the strongest available in the palette, and every element that is not text is supplied by the video: the red and amber glow in the capture, the silhouette and the stage equipment are all photographic, not interface styling. Because the video changes from project to project, the interface palette is deliberately limited to the two roles above, so that any footage can sit beneath it.

## Elevation & Depth

No shadows, borders or gradients were measured. The only depth device is the 50 percent black layer between the video and the text, which keeps near-white type legible. Text separation is created by opacity (0.5 versus 1) rather than by weight or color change.

## Shapes

The single rounded value is 50% (weight 1), generated as a 9999px pill token. It belongs to one element in the measured page, a circular control; every other element, including the links and the nav, computes to 0px radius. There are no buttons, inputs or cards to carry a radius.

## Components

- **Nav**: near-white #f7fcfe text, Geist 10.6667px bold, padding 7.11111px 7.11111px 0px. Items are numbered (1 to 4) with the label beside the digit.
- **Nav link**: same typography, no underline measured, resting opacity not changed.
- **Caption link**: near-white text with a transparent background, resting at opacity 0.5 and moving to 1 on hover; each is a full-height (800px) link target covering one quarter of the screen.
- **Showreel link**: top-right, same type.
- **Timer**: "00:00" in the same 10.6667px style.
- **Buttons, inputs and cards**: none detected.

## Design System Architecture

No public design system or brand guideline for LO2S was found on the pages opened. The shipped CSS publishes a small set of custom properties: color names (--c-white #f7fcfe, --c-black #000, --c-dark-grey #474a4d, --c-grey-transparent), a viewport unit (--vw 12.8px), a transition (--default-transition 0.3s var(--ease-in-out-quart)) and a full set of named easings (--ease-in-out-quint cubic-bezier(0.86,0,0.07,1), --ease-out-quad, --ease-in-out-expo cubic-bezier(1,0,0,1), --ease-in-quint, --ease-out-cubic, --ease-in-out-quart). Motion is thus defined through named curves, with a 0.3s default transition. Source page: https://lo2s.com/.

## Do's and Don'ts

- Do let a full-bleed video fill the screen and place all text over it in #f7fcfe.
- Do set everything in Geist, bold at 10.6667px with slightly negative tracking.
- Do use opacity 0.5 to 1 for hover on project captions.
- Do keep the black layer at 50 percent (#00000080) under text.
- Don't add buttons, boxes, borders or shadows; none exist in the measured page.
- Don't introduce a second typeface or an accent color.
- Don't use uppercase transforms for labels.

## Responsive Behavior

The mobile pass at 390px recorded type only. The title style is 20.8px at weight 600 with line-height 14.56px and -0.9984px tracking, the label is 12.48px at weight 700 on 14.56px with -0.1248px tracking, and the header, whose text is just "Menu", measured padding of 8.32px, a height of 73px and the full 390px width, with 50 percent near-white text on its children. The mobile title shown is "International Events Reel". Layout reflow and any breakpoints were not measured.

## Iteration Guide

1. Begin with a full-screen black-backed video and a 50 percent black layer.
2. Set all text in Geist 700 at 10.6667px, color #f7fcfe, tracking -0.106667px.
3. Number menu items and keep the wordmark centred; caption links rest at 0.5 opacity.
4. Use the 32px, 600-weight style for titles only.
5. Verify: node web/scripts/verify-designs.mjs --slug=lo2s.
