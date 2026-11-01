---
version: alpha
name: Digilab
category: "Tech & AI"
description: "Digilab (digilab.co), a New Zealand bioacoustics AI company: cream #f2eee5 canvas, dark purple #160e20 headlines in denimInk 500 at 75.5555px with -2.27px tracking, lilac #cda6ff pill buttons (26.67px radius) with 10.67px uppercase groteskMono labels, flat with ghosted tree illustrations."
colors:
  canvas: "#f2eee5"
  surface-light: "#f8f8f0"
  ink: "#160e20"
  ink-muted: "#605a67"
  ink-black: "#000000"
  ink-faint: "#ffffff66"
  primary: "#cda6ff"
  primary-deep: "#b379ff"
  on-primary: "#160e20"
  player-purple: "#45355b"
  grey-stroke: "#cbcbcb"
  signal-green: "#29a176"
  signal-orange: "#fe4f32"
  hairline: "#60408040"
typography:
  display:
    fontFamily: denimInk, "denimInk Fallback", sans-serif, sans-serif
    fontSize: 75.5555px
    fontWeight: 500
    lineHeight: 83.111px
    letterSpacing: "-2.26666px"
  display-mobile:
    fontFamily: denimInk, "denimInk Fallback", sans-serif, sans-serif
    fontSize: 36.4px
    fontWeight: 500
    lineHeight: 40.04px
    letterSpacing: "-1.092px"
  heading:
    fontFamily: denimInk, "denimInk Fallback", sans-serif, sans-serif
    fontSize: 31.1111px
    fontWeight: 500
    lineHeight: 34.2222px
    letterSpacing: "-0.933332px"
  heading-mobile:
    fontFamily: denimInk, "denimInk Fallback", sans-serif, sans-serif
    fontSize: 24.96px
    fontWeight: 500
    lineHeight: 27.456px
    letterSpacing: "-0.748801px"
  body:
    fontFamily: denimInk, "denimInk Fallback", sans-serif, sans-serif
    fontSize: 14.2222px
    fontWeight: 400
    lineHeight: 21.3333px
  body-mobile:
    fontFamily: denimInk, "denimInk Fallback", sans-serif, sans-serif
    fontSize: 16.64px
    fontWeight: 400
    lineHeight: 24.96px
  button:
    fontFamily: groteskMono, "groteskMono Fallback", monospace, monospace
    fontSize: 10.6667px
    fontWeight: 500
    lineHeight: 10.6667px
    letterSpacing: "-0.213333px"
    textTransform: uppercase
  label:
    fontFamily: groteskMono, "groteskMono Fallback", monospace, monospace
    fontSize: 9.77777px
    fontWeight: 500
    lineHeight: 9.77777px
    letterSpacing: "-0.293333px"
    textTransform: uppercase
rounded:
  xs: 1.78px
  cta: 26.67px
  pill: 9999px
spacing:
  s1: 1px
  s2: 7.11px
  s3: 8.89px
  s4: 10.67px
  s5: 14.22px
  s6: 17.78px
  s7: 21.33px
  s8: 32.89px
  s9: 53.33px
  s10: 85.33px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 0px 21.3333px
    height: 39px
  button-primary-hover:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 0px 21.3333px
    height: 39px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 0px 0px 1px
  nav:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 0px 17.7778px
---

## Overview

This file documents https://digilab.co/ (page title "Digilab - Home", language `en-nz`). Digilab describes itself as "an artificial intelligence company, founded in New Zealand, focused on bioacoustics and ecological applications." The page sells a three-step service: "Capture audio", "Detect species" and "Visualise your result", with a "Go to visualiser" link, then introduces the team and partners ("The people and organisations we work with.") and a contact footer.

The first screen is calm and almost empty: a cream field with faint grey line drawings of trees (large at the left, right and in the background), the small "Digilab" wordmark above the centred headline "AI-powered acoustic insights for wildlife monitoring" in dark purple, and one lilac pill button "DISCOVER DIGILAB ▶". The top of the markup carries a "SOUND ON" control and live-looking recorder read-outs ("-41.98068, 172.38142", "Korimako — Female", "08:17 am"; "Riroriro — Male", "01:16 pm"), reflecting the field-recording theme with New Zealand bird names.

Voice is scientific but approachable, with first-person team bios ("I would describe myself as both a facilitator and an investor in the Digilab project"). UI chrome is tiny uppercase monospace; the headlines are large, tight and rounded.

Role notes. All roles were detected correctly: the primary CTA is the lilac "DISCOVER DIGILAB" button; "GO TO VISUALISER" is the same style. `ink` here is the dark purple used for headlines and chrome; the grey-purple `#605a67` is the colour of most paragraph characters (5311).

## Colors

Measured on the desktop pass: backgrounds by area `#f2eee5` (5122), `#f8f8f0` (2436), `#160e20` (606), `#cda6ff` (21), `#b379ff`, `#29a176` and `#fe4f32` (1 each). Text by characters: `#605a67` (5311), `#160e20` (627), `#f2eee5` (264), `#000000` (42), `#ffffff66` (20).

- `canvas` `#f2eee5` (`--color-dark-cream-bg`) and `surface-light` `#f8f8f0` (`--color-light-cream-bg`): cream backgrounds.
- `ink` `#160e20` (`--color-dark-purple`): headlines, nav, button text, and the footer background.
- `ink-muted` `#605a67` (`--color-small-txt`): body paragraphs.
- `primary` `#cda6ff` (`--color-light-purple`): the pill buttons; `primary-deep` `#b379ff` is a 1-area darker lilac; on hover the button measures fill `#160e20` with text `#f2eee5`.
- `player-purple` `#45355b`, `grey-stroke` `#cbcbcb`: declared in `:root`.
- `signal-green` `#29a176` (`--color-green`) and `signal-orange` `#fe4f32` (`--color-orange`): one tiny element each in the measurement; per-element use was not isolated.
- `hairline` `#60408040`: a translucent purple line colour measured in the CSS.

Tailwind default greys and blues (`--color-gray-*` in oklch, `--color-blue-500`) are framework defaults, not brand colours.

## Typography

Two custom families: `denimInk` (400 and 500, with a `denimInk Fallback` metric face) for headlines and text, and `groteskMono` (500) for UI labels. Characters: denimInk 5830, groteskMono 434. Weights: 400 (5311), 500 (953).

Headlines are 500 with tracking of about -3% of the size: the h1 is 75.5555px/83.111px at -2.26666px (36.4px/40.04px at -1.092px at 390px), the h2 "Capture audio" is 31.1111px/34.2222px at -0.933332px (24.96px/27.456px at -0.748801px). Body is 14.2222px/21.3333px at weight 400 on desktop (16.64px/24.96px on mobile). Labels and buttons are groteskMono 10.6667px uppercase at -0.213333px; the body element default is 9.77777px mono uppercase at -0.293333px.

denimInk and groteskMono are served by the site (the stacks fall back to generic sans-serif and monospace); no substitutes are named in this file.

## Layout

Centred composition on the first screen: wordmark, three-line centred headline, button, all on the vertical axis with tree illustrations behind. The nav is a mono row (WHAT WE DO, OUR TEAM, OUR PROJECTS, PARTNERS, ABOUT US, CONTACT US) with a "SOUND ON" control; the measured nav box is 79px tall on mobile. Below the hero: three service blocks with a repeated heading, a partner and people intro, long-form team bios, and a dark `#160e20` footer with a list of projects (INDIVIDUAL ACOUSTIC IDENTIFICATION, LARGE-SCALE…).

Measured paddings: 21.3333px (12 uses), 85.3333px (4), 17.7778px, 7.1111px, 10.6667px, 14.2222px and 124.444px. The viewport at measurement was 1280px wide and 800px tall; the page is built with Tailwind v4 (`--radius-xs` .125rem, `--radius-lg` .5rem).

Service blocks. Each of the three services pairs a 31.1111px heading with a 14.2222px paragraph in `#605a67`. "Capture audio" says "Using autonomous recorders - BYO, rent from us, or engage Digilab to run your deployment" and mentions datasets of "150000+ hours"; "Detect species" describes models trained to manage "environmental noise like wind and rain"; "Visualise your result" ends with the "Go to visualiser" button.

Team bios. Named people (Dr Carol Bedoya, Dr Laura Molles, Luc Bohyn) are introduced in long first-person paragraphs in the same 14.2222px body style, each followed by mono links such as RESEARCHGATE and GOOGLE SCHOLAR; photography of the people was not described because the capture shows only the hero.

## Elevation & Depth

None measured: no box-shadow, no border colour in use on the first screen except a hairline in CSS. Depth is atmospheric: faint grey tree illustrations, partly overlapping the headline area, at low contrast on cream. The hover state inverts the button rather than lifting it.

## Shapes

Buttons are pills with a 26.6666px radius (4 uses), and 28 elements carry a computed `3.35544e+07px` fully round radius (recorded as `pill`), such as circular controls. A 1.77778px radius appears once. Illustrations have no frames.

## Components

Primary button. Lilac `#cda6ff` fill, `#160e20` groteskMono 10.6667px uppercase label with a small play triangle, 26.6666px radius, `0 21.3333px` padding, 39px tall ("DISCOVER DIGILAB"; "GO TO VISUALISER" is identical). Hover: fill `#160e20`, text `#f2eee5`.

Nav. Mono 10.6667px uppercase items in `#160e20`, line-height 11.7333px.

Text link. Mono uppercase 10.6667px with 1px bottom padding ("RESEARCHGATE", "GOOGLE SCHOLAR").

Headline stack. Centred, tight, 500 weight, with each service heading present twice in the markup ("Capture audio" is present twice in the markup).

Footer. Dark `#160e20` with `#f2eee5` mono text, project list and contact links.

Recorder read-outs. Mono labels with coordinates, bird names and times.

## Design System Architecture

No public design system or brand guideline was found; the opened home page (as text) links none. The site uses Tailwind CSS v4: `:root` exposes Tailwind's `--color-*`, `--radius-*`, `--font-weight-*`, `--leading-snug` and `--tw-*` variables, plus project tokens: `--color-dark-purple` `#160e20`, `--color-light-purple` `#cda6ff`, `--color-dark-cream-bg` `#f2eee5`, `--color-light-cream-bg` `#f8f8f0`, `--color-small-txt` `#605a67`, `--color-player-purple` `#45355b`, `--color-grey-stroke` `#cbcbcb`, `--color-green` `#29a176` and `--color-orange` `#fe4f32`. Source: https://digilab.co/ as measured.

## Do's and Don'ts

Do set headlines in denimInk 500 with tight negative tracking and centre them over a quiet illustration.

Do use cream `#f2eee5` as the page, dark purple `#160e20` for ink and footer, and lilac `#cda6ff` for the single call to action.

Do set all chrome in 10.6667px uppercase groteskMono.

Do make buttons full pills (26.67px radius).

Don't add shadows or borders to cards; none are measured.

Don't use Tailwind's default blues or greys as brand colours.

Don't use the green and orange as large fills; only tiny signals were measured.

Don't set paragraphs in mono.

## Responsive Behavior

Measured at 390px: h1 36.4px/40.04px at -1.092px; h2 24.96px/27.456px; body paragraphs 16.64px/24.96px; the primary button 12.48px/12.48px at -0.2496px with a 46px height (39px on desktop); the nav label size is 12.48px and its box 79px tall. Mobile sizes by characters: 16.64px (4561), 12.48px (1176), 24.96px (397), 36.4px (48), 49.92px (22). Layout reflow was not measured.

## Iteration Guide

1. Cream canvas `#f2eee5`, dark purple ink `#160e20`, one lilac pill.
2. denimInk 500 headlines at -3% tracking; groteskMono 10.67px uppercase chrome.
3. Keep imagery to low-contrast line illustrations and field-recording read-outs.
4. Hover inverts the pill to dark purple.
5. Re-measure before using the green and orange signals or `#b379ff`.
