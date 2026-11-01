---
version: alpha
name: Jesper Landberg
category: "Business & Corporate"
description: "Portfolio of Swedish design engineer Jesper Landberg: a pure black (#000000) stage with white (#ffffff) text, one variable sans at 11.9467px and 8.53333px uppercase labels, a floor grid and curved 3D project panels, with 17.07px and 9999px radii and no color accent."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
typography:
  display:
    fontFamily: sans, sans-serif
    fontSize: 11.9467px
    fontWeight: 400
    lineHeight: 16.7253px
  display-mobile:
    fontFamily: sans, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  nav:
    fontFamily: sans, sans-serif
    fontSize: 8.53333px
    fontWeight: 500
    lineHeight: 11.9467px
    textTransform: uppercase
rounded:
  xs: 17.07px
  pill: 9999px
spacing:
  s1: 4.27px
  s2: 6.83px
  s3: 8.53px
  s4: 17.07px
  s5: 34.13px
  s6: 68.27px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    typography: "{typography.display}"
    height: 38px
---

## Overview

jesperlandberg.com is the personal portfolio of a Swedish design engineer (the page's own opening text reads "Jesper Landberg — design engineer"). It is not a conventional scrolling page: the measured document is 1280px wide and exactly one viewport tall (800px scroll height) with only 82 visible elements. Everything happens inside a single WebGL-style stage.

In the capture, the stage is a black void with a faint perspective floor grid of thin white lines. Floating above the grid is a horizontal carousel of project panels bent into a shallow curve: the centre panel is a screenshot of a project titled "Casa Di Solare" (a warm architectural scene with a huge italic serif wordmark "Solare" and a glowing sphere), the right panel shows an editorial sports-style layout headed "(BO®S) TLB/2026" labelled "The Lookback", and the left panel is a flat dusty-pink card. Each panel carries a small project caption bottom-left in white and a small round arrow button bottom-right.

Four tiny uppercase labels sit in the corners of the viewport like instrument markings: "JESPER LANDBERG" top-left, "PROFILE" top-right, "FEATURED / FULL" bottom-left and "NEWSLETTER" bottom-right. The brand has no logo mark in the capture; the name set in the same small type is the identity. The portfolio's entire personality is carried by the work it displays, so the interface chrome deliberately has almost no colour and almost no size.

## Colors

The interface palette is two values: #000000 and #ffffff.

- **canvas #000000** is the page background. The background-by-area measurement is empty because the stage is a canvas element, but the body role computes to a black background and the capture is dominantly black.
- **ink #ffffff** is the only text color measured: 2019 of 2019 weighted characters are white.
- **primary #ffffff** is the same white. The extractor found no filled button, and the interactive items (PROFILE, nav labels, panel arrows) are white-on-transparent. In the capture the round arrow buttons on the panels are white discs with a dark arrow, so white is the only action color.

All other color on screen (the dusty pink, the amber glow, the blues) belongs to the project imagery being shown, not to the interface, and is intentionally not tokenised. The Tailwind ring variable `rgba(59,130,246,.5)` that appears in the root variables is a framework default and is not a brand color.

## Typography

One family is loaded: a variable font declared as "sans", covering weights 200 to 1000 (the loaded-fonts measurement reads "sans 200 1000 normal"). The CSS family name is the generic label "sans, sans-serif", so the foundry is not stated in the measured data and no source was found that names it. It renders as a clean neo-grotesque sans in the capture.

- **display** is the main text style: 11.9467px, weight 400, line-height 16.7253px. It is used for the project caption ("Nathan Riley", "Book of Happiness" were the first captions measured) and for links. 1919 weighted characters use this size.
- **display-mobile** is the same role in the 390px mobile pass: 14px, weight 400, line-height 19.6px.
- **nav** is 8.53333px, weight 500, uppercase, line-height 11.9467px, for the four corner labels and the "FEATURED / FULL" toggle.

The scale is therefore extremely compressed: there is no big heading in the interface at all. Hierarchy comes from placement, case and weight (500 uppercase labels versus 400 sentence-case captions), while headings are supplied by the work (the large "Solare" lettering belongs to the displayed project). For substitutes, any variable grotesque such as Inter would be a reasonable stand-in, with the caveat that the original face is unidentified.

## Layout

The layout is a full-viewport application shell. The document does not scroll; content is navigated by dragging or switching the "FEATURED / FULL" mode toggle, which is presented as a text pair separated by a slash with one side dimmed in the capture.

Placement rules visible in the capture: four corner anchors, a vertical centre line carrying the carousel, and a lower band where the floor grid recedes. The carousel panels are wide landscape rectangles, roughly three across with the centre one raised and the outer ones receding and curving away.

Spacing tokens come from measured paddings and gaps: 4.27px, 6.83px, 8.53px, 17.07px, 34.13px and 68.27px. Each is a doubling or near-doubling of the previous step from a 4.27px base; the gaps measured in the stage are the small ones (17.0667px, 6.82667px, 8.53333px, 4.26667px) and the large paddings (34.1333px and 68.2667px) are used once each. The root variable `--size` is set to 390, a number the stylesheet uses for scaling.

## Elevation & Depth

There are no box shadows (the shadow measurement is empty) and no borders measured. Depth is produced spatially: perspective, curvature of the carousel, the receding floor grid and the panels' own imagery. The interface refuses the usual stack of cards-with-shadows; instead, panels are separated from the black by their own luminance.

Hover on the "PROFILE" button was measured: before and after states are both white text on a transparent background with a white border color and no shadow, so the recorded hover shows no visible color change in the properties captured.

## Shapes

Radii measured: 17.0667px (weight 8) and 999px (weight 2). Tokens: xs 17.07px and pill 9999px. The 17.07px radius is the corner of the project panels, which gives them the soft rounded-rectangle look in the capture, and the pill/circle shape is used for the round arrow buttons. All other elements compute 0px, including the text labels.

## Components

- **link**: white text in the display style (11.9467px, weight 400).
- **nav** and **nav-link**: white, the 8.53333px uppercase 500-weight label style, used for FEATURED and the corner labels.
- **text-input**: a measured input with a 38px height and display typography. Its position within the interface was not recorded.
- **Project panel**: a 17.07px-radius frame holding a project screenshot with a caption bottom-left and a circular arrow button bottom-right. Panel dimensions were not measured.
- **Corner label**: pure text, no container, no underline.

No filled primary, secondary or outlined button was detected by the extractor.

## Design System Architecture

No public design system or brand guidelines exist for this portfolio; none are linked from the page, so none are cited. The de-facto system is what the shipped CSS exposes: Tailwind utility variables in the root (`--tw-ring-offset-shadow`, `--tw-shadow`, `--tw-ring-color` and similar defaults) and a single `--size` variable. The visual system is therefore a Tailwind-based shell around a rendered scene, with a variable font named "sans" and a spacing ladder that doubles from 4.27px. Source: the measured root variables in web/data/extracted/jesper-landberg-4.json for http://jesperlandberg.com/.

## Do's and Don'ts

- Do keep the interface strictly black (#000000) and white (#ffffff); let the displayed work provide color.
- Do keep chrome tiny: 11.9467px captions and 8.53333px uppercase labels.
- Do place navigation at the four corners of the viewport.
- Do round panels at 17.07px and reserve the pill for round buttons.
- Do separate objects with depth, perspective and luminance rather than shadows or borders.
- Don't add accent colors, gradients or decorative fills to the chrome.
- Don't add large UI headings; the work carries scale.
- Don't treat the Tailwind ring color as a brand blue.
- Don't put the page into a long scroll; the measured design is one viewport tall.

## Responsive Behavior

Measured in the 390px mobile pass: the primary text size is 14px with a 19.6px line-height (versus 11.9467px on desktop), the label size becomes 10px and the heavier text size 28px, and the 21px size appears. How the carousel, corner labels and floor grid are arranged on mobile was not measured; no mobile layout claims are made.

## Iteration Guide

1. Begin with a #000000 stage and white text only.
2. Place four labels in the corners using the nav style (8.53333px, 500, uppercase).
3. Set captions in display (11.9467px, 400) and bump to 14px for mobile.
4. Frame media in 17.07px-radius panels; use a 9999px circle for single-icon buttons.
5. Space things on the 4.27px ladder up to 68.27px.
6. Let imagery carry all color; check that no interface element adds one.
7. Re-run `node web/scripts/verify-designs.mjs --slug=jesper-landberg-4` after changes.
