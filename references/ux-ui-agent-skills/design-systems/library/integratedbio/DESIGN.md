---
version: alpha
name: Integrated Biosciences
category: "Tech & AI"
description: "Integrated Biosciences, an aging-medicine biotech site: warm off-white canvas #f7f7f5, deep teal-ink #222f30, Aspekta light-weight sans at 18.52px body with negative tracking, Roboto Mono uppercase 13.68px for nav and buttons, 8px button radius, large rounded cinematic hero image."
colors:
  canvas: "#f7f7f5"
  ink: "#222f30"
  primary: "#222f30"
  on-primary: "#ffffff"
  surface-footer: "#000000"
  surface-light: "#eeeeee"
  ink-muted: "#222f30cc"
  sage: "#c9cbbe"
  on-dark-faint: "#ffffff4d"
  hairline: "#222f300d"
  nav-bg: "#ffffffcc"
typography:
  display:
    fontFamily: Aspekta, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 23.36px
    fontWeight: 400
    lineHeight: 28.032px
    letterSpacing: "-0.4672px"
  display-mobile:
    fontFamily: Aspekta, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.4px"
  subheading:
    fontFamily: Aspekta, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 68px
    fontWeight: 400
    lineHeight: 74.8px
    letterSpacing: "-1.36px"
  body:
    fontFamily: Aspekta, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 18.52px
    fontWeight: 400
    lineHeight: 24.076px
    letterSpacing: "-0.3704px"
  button:
    fontFamily: "\"Roboto Mono\", Menlo, Consolas, Monaco, \"Liberation Mono\", \"Lucida Console\", monospace"
    fontSize: 13.68px
    fontWeight: 400
    lineHeight: 13.68px
    textTransform: uppercase
rounded:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
  xl: 40px
spacing:
  s1: 1px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 17px
  s8: 20px
  s9: 24px
  s10: 26px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 20px
    height: 46px
  button-primary-hover:
    backgroundColor: "{colors.on-primary}"
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 4px 4px 4px 12px
    borderColor: "{colors.hairline}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 17px
  card:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    clipPath: polygon(100% 0px, 100% calc(100% - 75px), calc(100% - 75px) calc(100% - 75px), calc(100% - 75px) 100%, 0px 100%, 0px 0px)
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.on-primary}"
    padding: 40px 0px 24px
---

## Overview

Integrated Biosciences (integratedbio.com) presents itself as "Engineering the future of aging medicine." The home page is a quiet editorial document rather than a product dashboard: a full-bleed rounded hero image of soft green and copper glass-like forms, a floating pill navigation, and long stretches of pale canvas holding large light-weight statements. The measured page is 1280px wide and 9054px tall at desktop. Headline copy found on the page reads "Multimodal aging datasets and AI-driven drug discovery for age-related disease" and "Combining aging datasets, chemistry, and AI into an engine of discovery." The voice is declarative and scientific, with no promotional exclamation and no stock photography of people on the first screen.

The system rests on two typefaces only. Aspekta carries every sentence at weight 400, and Roboto Mono carries the uppercase labels. All 2,670 measured characters of text use weight 400, so hierarchy comes from size and tracking, never from bold. Colour is restrained: one off-white canvas, one near-black teal ink, white, and a pale sage. Corners are soft (8px on controls, 20px on cards) and the page has no measured box shadows at all.

## Colors

- **Canvas {colors.canvas} `#f7f7f5`** covers the largest share of the measured area (6113 weighted units, against 1961 for black and 1562 for `#eeeeee`).
- **Ink / primary `#222f30`** is the most-read text colour (899 characters) and also the fill of the primary button. It is a deep desaturated teal, not pure black.
- **Ink muted `#222f30cc`** is the same ink at 80% alpha and is used for paragraph copy (894 characters).
- **On-primary `#ffffff`** is text on the dark button and on the hero image (848 characters).
- **Sage `#c9cbbe`** appears in a small run of the large h3 statement (20 characters) as a de-emphasised phrase colour.
- **Footer surface `#000000`** is the footer background; **light surface `#eeeeee`** is a secondary panel colour.
- **Nav glass `#ffffffcc`** is the translucent white of the floating navigation pill, whose border is the 5% ink hairline `#222f300d`.
- **Faint white `#ffffff4d`** is a low-alpha white text colour measured on dark areas.

The site's own CSS variables also expose `#a7e26e` and `#cef79e` (lime greens) and `#445e5f` (a mid teal). The lime appears as a small square marker beside a section label in the capture. These variables are recorded here as part of the shipped palette; the lime is not measured as a button or link colour.

## Typography

Aspekta is the loaded text face; Roboto Mono is loaded for labels. Both are listed in the page's loaded fonts at weight 400, normal style. The fallback stack after Aspekta is the system sans list (-apple-system, system-ui, avenir next, avenir, segoe ui, helvetica neue and so on). Aspekta is a commercial/open face and is not bundled in this repository; where it is unavailable, a neutral grotesque such as the first system fallback in that stack is the nearest stand-in.

Measured scale at desktop (size / line-height / letter-spacing):

- Hero statement (h1 role): 23.36px / 28.032px / -0.4672px, white over the image.
- Section statement (h3 role): 68px / 74.8px / -1.36px.
- Body paragraph: 18.52px / 24.076px / -0.3704px.
- Button and nav label: Roboto Mono 13.68px / 13.68px, uppercase, no extra tracking measured.

Tracking is always about -0.02em on Aspekta (for example 18.52px with -0.3704px, 68px with -1.36px), so every size is tightened by the same ratio. Other measured sizes include 22px, 18.2px, 53.52px, 38.32px and 33.76px, each with its proportional negative letter-spacing. On the 390px mobile pass the hero size falls to 20px / 24px / -0.4px.

## Layout

The page uses a container system declared as CSS variables: `--container-max-width-1` is 1524px, `--container-padding-sm` is 24px and `--container-padding-lg` is 48px, and `--grid-gap` is half the container padding. The measured gaps most used are 20px (16 uses), 40px (9), 8px (8) and 4px (8). Paddings of 8px, 10px, 48px, 20px and 40px dominate. The hero image sits inside the page margin with rounded corners, leaving a visible strip of canvas around it. Below the hero, a small mono eyebrow label sits at the left while the large statement occupies the right two-thirds, which gives an asymmetric editorial grid.

## Elevation & Depth

There are no measured box shadows (the `boxShadows` frequency list is empty). Depth is created by three means: the full-bleed photographic hero, the translucent nav pill (`#ffffffcc` over the image) with a hairline border, and a cut-corner card shape. The card component uses a `clip-path` polygon that removes a 75px square from its bottom-right corner, so the notch rather than a shadow gives it dimension. The theme also declares a WordPress preset shadow ("outlined": a 6px offset white plus black ring) but the extraction did not measure it on any rendered element.

## Shapes

Measured corner radii, by weight: 8px (10), `12px 0 0 12px` (5, a half-rounded segment), `20px 20px 0` (4, top-rounded panels), 16px (3), 12px (2), 20px (2), `0 0 40px 40px` (1) and 40px (1). Controls use 8px; the nav pill uses 12px; cards use 20px; the hero image uses large rounding. Corners are never fully pill-shaped on buttons.

## Components

- **Primary button** ("WORK WITH US"): fill `#222f30`, text white, Roboto Mono 13.68px uppercase, radius 8px, padding 8px 20px, height 46px. On hover the measured fill changes to `#ffffff` while the text colour is recorded as white.
- **Navigation pill**: translucent white `#ffffffcc`, radius 12px, padding 4px 4px 4px 12px, hairline border. It holds the text links COMPANY and NEWSROOM (ink, mono, 13.68px, radius 8px, padding 8px 17px) and the dark button as its last item.
- **Card**: white background, ink text, 20px radius, with the clipped bottom-right notch described above.
- **Footer**: black background with white text and padding 40px 0 24px.
- **Section eyebrow**: a small lime square followed by a mono uppercase label (visible in the capture; its colours are not part of the primary measured roles).

## Design System Architecture

No public design-system documentation, brand guidelines or GitHub organisation was found: the home page was opened and contained no link matching brand, press, design-system, guideline or GitHub. The de-facto system is a WordPress theme. Shipped root variables include `--color--1` through `--color--9` (for example `--color--7` is `#222f30`, `--color--6` is `#f7f7f5`, `--color--3` is `#cef79e`), `--family--1` (Aspekta) and `--family--2` (Roboto Mono), `--base--text-color`, `--base--background-color`, `--base--font-size` (16px), `--outline-width` (4px), `--gap` (20px) and the easing token `--transition-ease--1: cubic-bezier(.16, 1, .3, 1)`. The standard `--wp--preset--*` variables from WordPress core sit alongside them. Tokens in this file are measured from the rendered page, not copied from a published spec.

## Do's and Don'ts

- Do keep every Aspekta setting at weight 400 and carry hierarchy with size and negative tracking.
- Do use Roboto Mono only for uppercase navigation and button labels.
- Do keep the canvas `#f7f7f5` and ink `#222f30`; do not substitute pure black for body text.
- Do round controls at 8px and cards at 20px.
- Don't add drop shadows; none are measured.
- Don't use bold weights; none are measured.
- Don't treat the browser or WordPress default presets (vivid purple, pale pink and similar) as brand colours.
- Don't make buttons pill-shaped; the measured button radius is 8px.

## Responsive Behavior

Only the 390px mobile pass was measured. The hero statement shrinks from 23.36px to 20px (line-height 24px, tracking -0.4px). The most common mobile font sizes are 16px (1115 characters), 22px (344), 14px (248), 12px (228) and 30px (128), which correspond to the desktop 18.52px, 22px, 18.2px, 13.68px and 53.52px groups scaling down. Hover states, dark mode, breakpoints and menu collapse behaviour were not measured.

## Iteration Guide

1. Start from canvas `#f7f7f5` and ink `#222f30`; only add white and sage `#c9cbbe` as secondary tones.
2. Set all text in Aspekta 400 with letter-spacing of about -0.02em; set labels in Roboto Mono uppercase 13.68px.
3. Build the single call to action as the dark 8px-radius button, height 46px.
4. Place a large rounded image or abstract render at the top, with the translucent nav pill floating over it.
5. Use asymmetric layouts: small mono eyebrow left, 68px statement right.
6. Verify any new value against `web/data/extracted/integratedbio.json` before adding it.
