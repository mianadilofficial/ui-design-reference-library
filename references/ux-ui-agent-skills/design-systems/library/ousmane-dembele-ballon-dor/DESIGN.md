---
version: alpha
name: "Ousmane Dembélé - Né Pour Briller"
category: "Culture & Events"
description: "A French editorial tribute microsite (ousmaneballondor.fr) on an off-white #fffcf5 page with a #0d0d0d dark block, club-colour sections (#610505, #ffd400, #05192e), red #bb2929 nav text and Doner and Being type, from 6.4px labels to 240px display."
colors:
  canvas: "#0d0d0d"
  page-body: "#fffcf5"
  ink: "#ffffff"
  primary: "#bb2929"
  surface-rennes: "#610505"
  surface-dortmund: "#ffd400"
  surface-barca-blue: "#05192e"
  ink-gold: "#c69653"
  ink-barca: "#590d20"
typography:
  display:
    fontFamily: Doner, Arial, sans-serif
    fontSize: 6.4px
    fontWeight: 900
    lineHeight: 7.04px
    textTransform: uppercase
  display-mobile:
    fontFamily: Doner, Arial, sans-serif
    fontSize: 8px
    fontWeight: 900
    lineHeight: 8.8px
    textTransform: uppercase
  heading:
    fontFamily: Being, Arial, sans-serif
    fontSize: 64px
    fontWeight: 500
    lineHeight: 51.2px
    textTransform: uppercase
  body:
    fontFamily: Doner, Arial, sans-serif
    fontSize: 24px
    fontWeight: 200
    lineHeight: 33.6px
rounded:
  pill: 9999px
spacing:
  s1: 6.4px
  s2: 10.24px
  s3: 12.8px
  s4: 16px
  s5: 19.2px
  s6: 25.6px
  s7: 38.4px
  s8: 44.8px
  s9: 64px
  s10: 80px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.display}"
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    padding: 44.8px 16px 16px
---

## Overview

This site (https://www.ousmaneballondor.fr/, title "Ousmane Dembélé - Né Pour Briller") is a French-language editorial tribute built as a long scrolling story. It is a single-subject microsite (the site of its own name, not a parent or operator site), 1280px wide and 37764px tall. The header is a row of five club names set as small red anchor links: ÉVREUX, STADE RENNAIS, BORRUSSIA DORTMUND, FC BARCELONE and PARIS SAINT GERMAIN. The headline is "Né Pour Briller" ("né", "pour", "briller" set as large display words) over the intro "De la rue aux plus grandes scènes du football mondial", and the named sections include "Les racines", "le jeux", "comme langage" and "Les premiers dribbles du destin", with timeline markers such as 2004 and 2009. The structure is chronological: one chapter per club.

The capture shows only the opening: an off-white sheet with fine grain, five tiny red labels spread across the top, a sphere of scattered gold foil fragments in the centre, and the name "OUSMANE DEMBELE" in a very wide, extra-heavy gold-beige face spanning the full width. Below the first screen the capture is an empty off-white field and then a black block, which are unrendered scroll regions in the capture, not designed empty space. The tone is celebratory but restrained: the colour comes from the clubs, the typography is monumental, and body copy is short and light.

## Colors

The extraction measured these background areas: #610505 (weight 3195), #ffd400 (3195), #05192e (3195), #091a34 (3195), #0d0d0d (2130) and #fffcf5 (1036). Text colours by characters: #ffffff (1620), #0d0d0d (368), #fffcf5 (224), #c69653 (200), #bb2929 (65), #590d20 (29), #981616 (28), #aa2221 (27). The body role carries colours #bb2929, #c1b28b and #fffcf5.

- **Page-body #fffcf5**: the off-white sheet and the body role background (`--offwhite`).
- **Canvas #0d0d0d**: the black block (`--black`).
- **Ink #ffffff**: text on the dark and club-colour sections.
- **Primary #bb2929**: the red of the club labels (nav text).
- **Club sections**: surface-rennes #610505 (`--rennes`), surface-dortmund #ffd400 (`--dortmund`), surface-barca-blue #05192e (`--bleu-barca`), and PSG navy #091a34 (`--bleupsg`, measured as a background area but not a token).
- **Ink-gold #c69653** and **ink-barca #590d20** (`--barca`): gold text and the Barcelona maroon.

The variables also define the other club accents: `--psg` #aa2221, `--evreux` #981616, and the gold `--gold` #c1b28b (the huge name in the capture). They match measured text colours but are not separate tokens. A neutral ramp (`--color-neutral-100` #ffffff to `--color-neutral-900` #000000, e.g. `--color-neutral-500` #818180) and status variables (`--color-primary` #ff4c24, `--color-success` #0ba954) exist in the CSS; the #ff4c24 variable was not measured on screen.

## Typography

Two families: Doner (weights 200, 500, 900; 2267 characters) and Being (weight 900 loaded, measured weight 500; 328 characters). All are uppercase in the measured roles.

- **Display** Doner 6.4px / 7.04px, weight 900, uppercase: the club nav labels (mobile 8px / 8.8px).
- **Heading** Being 64px / 51.2px, weight 500, uppercase (152 characters). The mobile h2 "NÉ" measures 50px / 40px.
- **Body** Doner 24px / 33.6px, weight 200 (211 characters); mobile body measured 18px / 25.2px, weight 200.

The scale is extreme: 6.4px labels (285 characters), 9.6px small text (1771 characters, the most common), 24px, 64px, 120px (142 characters) and 240px (34 characters). Contrast between the tiny labels and the 240px display is the identity. Letter-spacing is default. Doner and Being are font names as loaded by the page; their foundry was not confirmed on any page opened for this brief.

## Layout

The layout is a vertical scroll of full-bleed colour sections: an opening off-white sheet, then club-coloured chapters (maroon, yellow, blue, navy) and a black block. The header spreads five labels across the full width with generous space between them. Giant display words are set edge to edge. The container uses `--container-padding` 2em and `--gap` 2em. Measured gaps: 12.8px (14), 80px (10), 25.6px (10), 64px (2). Paddings: 16px (52 uses), 64px (13), 12.8px (10), 128px (8), 19.2px, 38.4px, 25.6px. The footer has padding 44.8px 16px 16px on the off-white background.

The measured font-weight distribution confirms the quiet-versus-loud split: weight 400 covers 1771 characters (the small 9.6px text), weight 500 covers 328 (the Being headings), weight 900 covers 285 (the tiny club labels) and weight 200 covers 211 (the light body paragraphs). Heavy weights are therefore reserved for the labels and the display words, and the reading text is the lightest weight on the page. The page-level body role itself is Doner 6.4px weight 900 uppercase in #bb2929 on #fffcf5, because the navigation labels are the first text in the document.

Spacing follows a 6.4px base: the spacing tokens run 6.4px, 10.24px, 12.8px, 16px, 19.2px, 25.6px, 38.4px, 44.8px, 64px and 80px, all measured as gaps or paddings on the page, and the 128px padding (8 uses) marks the large section insets. The 80px gap appears 10 times and separates the main blocks of a chapter, while 12.8px separates small label groups.

## Elevation & Depth

No box shadows and no borders were measured (`boxShadows` and `borderColors` empty). Depth is created by the full-colour section changes, the grain texture on the off-white sheet, and the 3D sphere of gold fragments in the capture.

## Shapes

The only measured radius is 50% (2 uses), the circular elements; the token records pill 9999px. No buttons, cards or inputs were detected. Shape comes from the monumental letterforms and the sphere.

## Components

The extractor found no button, input or card. Detected parts:

- **nav / nav-link**: red #bb2929 uppercase Doner 6.4px weight 900 labels, one per club.
- **link**: #0d0d0d text in the display type style.
- **Display words and timeline**: "NÉ", "POUR", "BRILLER" at large sizes and year markers per chapter.
- **footer**: background #fffcf5, text #0d0d0d, padding 44.8px 16px 16px.

## Design System Architecture

No public design system or press kit is linked; the only links on the page are internal anchors to the five club sections. The shipped CSS variables define the system: club colours as named variables (`--evreux`, `--rennes`, `--dortmund`, `--barca`, `--bleu-barca`, `--psg`, `--bleupsg`), brand neutrals (`--gold`, `--black`, `--offwhite`), a ten-step neutral ramp, semantic variables (`--color-primary`, `--color-error`, `--color-success`), `--container-padding`, `--gap` and the easing `--cubic-default` cubic-bezier(0.65, 0.05, 0, 1). Colour is therefore organised around the career chapters rather than around UI roles.

## Do's and Don'ts

- Do give each chapter its club's colour as a full-bleed background.
- Do pair tiny uppercase labels with monumental display type.
- Do keep body copy light (weight 200) and short.
- Do use the off-white #fffcf5 sheet with a gold-beige headline as the opening.
- Don't add buttons, cards or shadows; none were measured.
- Don't use club colours outside their chapter.
- Don't round rectangles; only circles carry a radius.
- Don't use the unmeasured #ff4c24 variable as an accent.

## Responsive Behavior

The 390px pass measured the nav label at 8px / 8.8px (#ca2b2b, 39px wide), the "NÉ" heading at 50px / 40px in Being weight 500 (68px wide) and the story paragraph at 18px / 25.2px in Doner weight 200. How the five-label header and the chapters rearrange at mobile width was not measured.

## Iteration Guide

1. Begin with #fffcf5, #0d0d0d, white ink and the red #bb2929.
2. Set a chapter colour per section from the club list.
3. Use Being for 64px to 240px display and Doner for small and body text.
4. Keep everything flat, borderless and shadow-free.
5. Measure further pages with the extractor (`--slug=ousmane-dembele-ballon-dor--page --url=<url> --force --no-motion`) before adding tokens; the later chapters below the first screen were not captured.
