---
version: alpha
name: 21 Hrs On The Moon
category: "Culture & Events"
description: "21 Hrs On The Moon (21hrs.space), an Apollo 11 scroll story: black #000000 canvas, warm cream #fff3ea text, FuturaStd 700 uppercase titles with negative tracking, AkkuratMonoLL 300 10px labels, a #d9d9d9 giant MOON wordmark and #e4b592 copper viewfinder corners with a 10px radius."
colors:
  canvas: "#000000"
  ink: "#fff3ea"
  primary: "#fff3ea"
  title-grey: "#d9d9d9"
  hairline: "#e4b592"
  progress: "#dad0c8"
  pop: "#ee1212"
  ink-translucent: "#ffffff99"
typography:
  display:
    fontFamily: FuturaStd
    fontSize: 26px
    fontWeight: 700
    letterSpacing: "-0.26px"
    textTransform: uppercase
  display-mobile:
    fontFamily: FuturaStd
    fontSize: 20px
    fontWeight: 700
    letterSpacing: "-0.26px"
    textTransform: uppercase
  body:
    fontFamily: FuturaStd
    fontSize: 18px
    fontWeight: 700
  label:
    fontFamily: AkkuratMonoLL
    fontSize: 10px
    fontWeight: 300
    letterSpacing: "-0.1px"
rounded:
  xs: 10px
  sm: 50px
spacing:
  s1: 6px
  s2: 10px
  s3: 20px
  s4: 50px
components:
  frame-corner:
    borderColor: "{colors.hairline}"
    rounded: "{rounded.xs}"
  icon-control:
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.ink-translucent}"
  title-line:
    textColor: "{colors.title-grey}"
    typography: "{typography.display}"
  intro-text:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  meta-label:
    textColor: "{colors.ink}"
    typography: "{typography.label}"
---

## Overview

21 Hrs On The Moon is a single-screen landing view for an interactive story about the 21 hours of humanity's first Moon landing. The page title is "21 Hours on the Moon". In the capture the screen is almost entirely black with a field of tiny stars and the dark, cratered upper limb of the Moon rising from the bottom. A thin horizontal rule flanks the small line "21HRS ON THE", above the huge wordmark "MOON" whose letterforms fade from light grey into black toward their base. Below it, the centred line reads "Navigate the lunar surface and explore the 21 hours that defined humanity's first Moon landing." At the left are the small mono caption "MISSION" with "Apollo 11", at the right "YEAR" with "1969", and a full-width rule underneath. A bordered button "SCROLL TO LAND" sits in the lower centre, with the note "BEST EXPERIENCED WITH SOUND" beneath it. Three round controls (a menu, a waveform and a play glyph) are at the top left, and four copper corner brackets frame the viewport like a camera viewfinder.

The extraction found only 114 visible elements and an 804px scroll height, so what was measured is the landing screen, not the later scroll chapters. The page text fetched through WebFetch contained only the title, so credits, authorship and any sound or menu behaviour were not available and are not stated here.

The mood is a mission-control or documentary viewfinder interface: monochrome, technical, with a precise typographic hierarchy. Interface elements are named in the stylesheet root variables as carousel lines, vu meter, progress bar, viewfinder, compass, hints and frame corner, which describes the instrument-panel motif.

## Colors

The palette is black, a warm cream and a copper line, plus a single declared red.

- **Canvas `#000000`** (`--color-background`): the body colour.
- **Ink `#fff3ea`** (`--color-text`; also `--color-carouselLines`, `--color-vuMeter`, `--color-viewfinder`, `--color-compass`, `--color-hints`): a warm cream used for 163 of 179 measured characters and for all instrument graphics. It is the primary colour because the page has no filled button; the main action is an outlined control in the same cream.
- **Title grey `#d9d9d9`** (`--color-mainTitle`): the giant "MOON" wordmark and the "21HRS ON THE" line; it measured as a background area as well (weight 2).
- **Copper `#e4b592`** (`--color-frameCorner`): the corner brackets, measured as border colour on 4 elements.
- **Progress `#dad0c8`** (`--color-progressBar`).
- **Translucent white `#ffffff99`**: border colour on 3 elements.
- **Pop red `#ee1212`** (`--color-pop`): declared in the root variables and the stylesheet, but no element on the landing screen displayed it in the measurement, so it is not given a role.

Other stylesheet values with a single use each: `#ff000026`, `#000000e6`, `#ffffff` and `#0000bb00`.

## Typography

Two families are loaded: **FuturaStd** (127 of 179 characters, weight 700; loaded at weight 500) and **AkkuratMonoLL** (52 characters, weight 300).

- **Display, FuturaStd 26px / 700, uppercase, letter-spacing -0.26px**: the "21HRS ON THE" line, 240px wide and 31px high, padded 20px left and right. On mobile it is 20px with the same tracking, padded 10px.
- **Body, FuturaStd 18px / 700**: the centred introduction (111 characters, the most used size). On mobile it measures 16px.
- **Label, AkkuratMonoLL 10px / 300, letter-spacing -0.1px**: "MISSION", "YEAR", the button label and the sound note (38 characters at 10px, 14 characters at 12px, tracking -0.1px for both).
- **Wordmark, FuturaStd 256px, tracking -7.68px**: the giant "MOON" (4 characters). On mobile it measures 80px. It is a graphic headline; it is not tokenised because the generator does not carry a weight for it.

Apollo 11 and 1969 in the capture are in a heavier bold style than the surrounding mono captions, in grey. Letter-spacing is negative at all sizes (about -1% to -3% of the size). Foundry pages for the two families were not opened.

## Layout

The viewport is a fixed 1280px by about 800px scene. Content is centred: the title row spans roughly the middle two-thirds of the width, the information row (MISSION left, YEAR right) aligns to the same width, and the rule beneath it spans the same extent. The Moon limb is anchored to the bottom centre. The viewfinder corners sit in the four corners of the viewport with a gap from the edges, and the three round controls sit at the top left. Measured spacing: gaps of 10px (2 uses) and 50px (2); paddings of 20px (2) and 6px (2). These form the four spacing tokens.

The vertical order is: control cluster and corner brackets at the edges; the title row; the wordmark; the intro text overlapping the lower part of the wordmark; the information row; a rule; the button; the sound note. The 804px scroll height is almost the viewport height, so this is an entry state.

## Elevation & Depth

No box shadows were measured. Depth is made with imagery and gradients: the Moon limb has a dark gradient and visible crater texture, the stars are a sparse pattern, and the wordmark "MOON" fades from `#d9d9d9` toward transparent at its base so that the Moon's silhouette shows through. Interface lines are thin and flat. There are no cards or raised surfaces.

## Shapes

Two radii were measured: `10px 0px 0px` (4 uses, the four viewfinder corner brackets, each drawn as a corner outline with one rounded corner) and `50px` (3 uses, the three circular controls). The button "SCROLL TO LAND" shows a rounded rectangle outline with small bracket marks at its corners in the capture; its own radius was not tied to a selector. Lines are hairlines, with rules in cream and corner brackets in copper.

## Components

- **Viewfinder corners**: four L-shaped copper `#e4b592` brackets at the viewport corners, 10px radius on one corner.
- **Round controls**: three circular icon buttons (menu, waveform, play) at the top left with a 50px radius and a translucent white border.
- **Title row**: "21HRS ON THE" flanked by two rules.
- **Wordmark**: "MOON" at 256px in `#d9d9d9` with a bottom fade.
- **Metadata row**: "MISSION / Apollo 11" and "YEAR / 1969", mono captions over grey bold values.
- **Scroll prompt**: outlined "SCROLL TO LAND" button in mono 10px, with the note "BEST EXPERIENCED WITH SOUND".

Hover states: none recorded (the hover list is empty).

## Design System Architecture

No public design system or brand guidelines were found. The fetched page (https://www.21hrs.space/) exposed only its title text, with no credits or links, so no source is cited beyond the page itself. The de-facto system is a small set of root CSS variables with instrument names: `--color-background`, `--color-text`, `--color-mainTitle`, `--color-frameCorner`, `--color-progressBar`, `--color-carouselLines`, `--color-vuMeter`, `--color-viewfinder`, `--color-compass`, `--color-hints` and `--color-pop`. Two web fonts (FuturaStd, AkkuratMonoLL) and a tiny scale of spacing (6, 10, 20, 50px) complete it.

## Do's and Don'ts

- Do keep the canvas pure black and use the warm cream `#fff3ea` for text and instrument graphics.
- Do set titles in FuturaStd bold uppercase with negative tracking, and captions in AkkuratMonoLL 10px.
- Do frame the screen with copper `#e4b592` corner brackets.
- Do let the giant wordmark fade into the Moon.
- Don't introduce filled buttons; the measured action is an outlined control.
- Don't use red `#ee1212` as an interface colour until it is measured on an element.
- Don't add shadows or cards.
- Don't describe later chapters from this file; only the landing screen was measured.

## Responsive Behavior

Mobile pass (390px wide): the title line is 20px / 700 uppercase with -0.26px tracking and 10px side padding (173px wide, 25px high); the intro text measures 16px (18px on desktop); the wordmark measures 80px (256px on desktop); the 10px and 12px labels keep their size. Mobile character-weighted sizes: 16px, 10px, 12px, 20px and 80px. The mobile pass found no other role. Positions of the corner brackets, the Moon limb and the controls on small screens were not measured.

## Iteration Guide

1. Black canvas, cream `#fff3ea` ink, one grey `#d9d9d9` for the title; copper only for frames.
2. FuturaStd 700 uppercase for titles and intro text, AkkuratMonoLL 300 10px for captions.
3. Use a 10px corner radius for frames and 50px for round controls.
4. Measure the scroll chapters (with the extractor on a later state, or a probe) before adding more tokens.
5. Run `node web/scripts/verify-designs.mjs --slug=21-hrs-on-the-moon` after edits.
