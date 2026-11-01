---
version: alpha
name: "Pacôme Pertant Portfolio"
category: "Portfolio"
description: "Pacôme Pertant motion and sound designer portfolio, measured at its entry screen with a #0a0a0a canvas, #fafafa text, Indivisible Variable 500 at 80px with -4px tracking and 24px body, a 50px-radius light pill button labelled enter with sound, declared pop green #21ffc0."
colors:
  canvas: "#0a0a0a"
  ink: "#fafafa"
  primary: "#fafafa"
  on-primary: "#0a0a0a"
  pop-green: "#21ffc0"
typography:
  display:
    fontFamily: "\"Indivisible Variable\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 80px
    fontWeight: 500
    lineHeight: 80px
    letterSpacing: "-4px"
  body:
    fontFamily: "\"Indivisible Variable\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: "-0.72px"
  button:
    fontFamily: "\"Indivisible Variable\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 18px
    letterSpacing: "-0.72px"
rounded:
  xs: 20px
  sm: 24px
  cta: 50px
  md: 100px
  pill: 9999px
spacing:
  s1: 4px
  s2: 15px
  s3: 20px
  s4: 45px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 14px
    height: 46px

---

# Pacôme Pertant Portfolio

## Overview

pacomepertant.com is the portfolio of Pacôme Pertant, who describes himself on the page as a "motion & sound designer based in paris". The measured page is an entry screen: an 800px-tall near-black (`#0a0a0a`) canvas with a small glossy green-to-white smiley sphere in the centre, the line "motion & sound designer based in paris" in off-white `#fafafa` beneath it, and, on the second measurement pass, a pill button labelled "enter with sound". The site's own meta description reads "I move shapes and sound to create emotional content. Always playing with rhythm, sound and visual narrative on a 2D and/or 3D canvas. Clean at times, experimental at others." The design is a motion-first site: the static measurement captures only the gate before the work is revealed, so only the entry state is documented here. A hidden "works" heading (80px, colored `#0a0a0a` on `#0a0a0a`, so invisible) is the h1 the extractor found; it is part of the DOM but not visible at the entry state.

## Colors

Two colors dominate and nothing else was measured on screen. Backgrounds by area: `#0a0a0a` (weight 1033) and `#fafafa` (weight 7 to 14, the button and small elements). Text by character count: `#fafafa` (116 to 135) and `#0a0a0a` (35, the button label and the hidden heading). The root variables name the same palette: `--color-bg-dark` and `--color-black` are `#0a0a0a`, `--color-white` is `#fafafa`, `--color-grey` is `#e6e6e6`, `--color-bg-grey` is `#171717`, and `--color-pop-green` is `#21ffc0`. Transparent variants exist at 20, 40 and 60 percent of the dark (`#0a0a0a20`, `#0a0a0a40`, `#0a0a0a60`) and `#fafafa20` for white at 20 percent. Only `#0a0a0a` and `#fafafa` were measured on rendered elements; the pop green is a declared variable that matches the green in the sphere logo, and is carried here as the `pop-green` token for that reason alone.

## Typography

One family: Indivisible Variable, with "Helvetica Neue", Arial and sans-serif fallbacks (declared as `--main-font` and `--display-font`, both pointing to the same name). Everything measured is weight 500 except one 14px run at 400. Sizes by character count: 18px (97 characters), 24px (37), 14px (19) and 80px (17). Letter spacing is tight and proportional: 80px sets at -4px, 24px and 18px at -0.72px (on the 390px pass the 24px line measured -0.76px). The display role is 80px / 80px (line height equal to size), the body role is 24px / 24px, and the button label is 18px / 18px at weight 500. No loaded font file was recorded by the extractor (the loaded-fonts list is empty); the family name comes from the computed styles and the CSS font-face names `indivisible-variable` and `Indivisible`. If the font cannot be loaded, the declared fallback order is Helvetica Neue, Arial, sans-serif.

## Layout

The page width is 1280px with a scroll height of 800px, i.e. one viewport. Content is centred both ways: the sphere sits above the two-line tagline, with the button beneath. The declared grid variables are `--grid-margin: 30rem`, `--grid-gutter: 16rem` and a 12-column formula `--grid-column: calc(100vw/12 - gutter*11/12 - margin*2/12)`. The site defines `--rem` as `1px`, so every "rem" value in the root variables is a pixel value. Gap steps: `--gap-xs` 10, `--gap-s` 15, `--gap-20` 20, `--gap-m` 30, `--gap-45` 45, `--gap-l` 60, `--gap-xl` 90, `--gap-xxl` 120 and `--gap-xxxl` 180. Measured paddings on rendered elements are 4px, 15px, 20px and 45px, and measured gaps are 20px and 15px. Viewport units are tracked in variables (`--vw`, `--vh`, `--ivh` as 100dvh).

## Elevation & Depth

Depth is created by the glossy 3D-looking sphere rather than by UI shadows. A single box shadow was measured, `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px`, on one element; on a `#0a0a0a` ground it is effectively invisible, so the system is flat. Dark overlay colors at 20, 40 and 60 percent exist as variables, which suggests scrims over media, but their use was not measured and is not claimed.

## Shapes

Measured radii: 50% (6 elements, round items such as the sphere), 100px (1), 24px (1), 20px (1) and, on the second pass, 50px (1, the button). The declared radius steps are `--radius-xs` 4, `--radius-s` 8, `--radius-m` 12, `--radius-l` 16, `--radius-xl` 20 and `--radius-full` 9999px. The tokens keep the measured values `xs` 20px, `sm` 24px, `md` 100px and `pill` 9999px, and add `cta` 50px for the button.

## Components

- **Enter button**: a native button reading "enter with sound", fill `#fafafa`, text `#0a0a0a`, Indivisible Variable 500 at 18px / 18px with -0.72px tracking, radius 50px, padding 14px, 170px wide by 46px tall. It is a light pill on a dark page. A hover state was not captured.
- **Tagline**: 24px / 24px Indivisible Variable 500 in `#fafafa`, two lines, centred.
- **Logo sphere**: a rounded graphic with a green and white gradient and a smiling face; its exact asset and size were not measured.
- No navigation, input, card or footer was found in the measured entry state.

## Design System Architecture

No public design system or brand guideline exists for this portfolio; the pages opened were https://pacomepertant.com/ (HTML meta description and live measurement) and the same URL measured twice with the extractor (the second pass under the slug `pacome-pertant-portfolio--work`). The de-facto system is the 41 root variables: colors (`--color-white`, `--color-black`, `--color-grey`, `--color-bg-grey`, `--color-pop-green`, alpha variants), gaps (`--gap-*`), radii (`--radius-*`), grid (`--grid-margin`, `--grid-gutter`, `--grid-column`), viewport helpers, a `--rem: 1px` unit trick, and three easings: `--ease-quad-in-out: cubic-bezier(.455,.03,.515,.955)`, `--ease-expo-out: cubic-bezier(.19,1,.22,1)` and a long `--ease-spring` linear() curve. Naming is size-scale (`xs` to `xxxl`) and semantic color (`bg-dark`, `bg-grey`, `pop-green`).

## Do's and Don'ts

- Do keep the ground at `#0a0a0a` with `#fafafa` text; contrast between the two is the whole palette.
- Do set all text in Indivisible Variable at weight 500 with negative tracking (-4px at 80px, -0.72px at 18 to 24px).
- Do use full pills (50px radius) for the entry action and `#fafafa` fill with `#0a0a0a` text.
- Do use the declared easings (`expo-out`, `quad-in-out`, `spring`) for any motion you add.
- Don't introduce new colors beyond the pop green `#21ffc0`, which is declared but only seen in the logo.
- Don't use drop shadows for elevation.
- Don't use the hidden `#0a0a0a` heading text as a visible style.

## Responsive Behavior

Measured at 390px: the h1 and body sizes were unchanged (80px and 24px), and the body tracking moved to -0.76px. The mobile pass did not find the button. Breakpoints and layout changes are not measured.

## Iteration Guide

1. Set canvas `#0a0a0a`, ink `#fafafa`.
2. Use Indivisible Variable 500, 80px / 80px at -4px for display and 24px / 24px at -0.72px for body.
3. Draw the one action as a 46px tall pill with a 50px radius, 14px padding, `#fafafa` fill.
4. Take spacing from the declared gap scale (10, 15, 20, 30, 45, 60, 90, 120, 180).
5. Treat work content (not measured at the entry state) as unknown until a further page is measured.

## Measurement Notes

The document title is "Pacôme Pertant [U+2732] Portfolio" and the page language is en. The extractor counted a small number of visible elements on the entry state, and the first pass found no button at all while the second pass, run under the slug `pacome-pertant-portfolio--work` against the same URL, found the "enter with sound" button; the entry screen therefore varies slightly between loads. Both passes agree on the canvas, the ink, the single typeface and the 800px page height. Anything behind the entry gate, such as the project grid, case-study pages, cursor treatments or the sound design itself, was not measured and must not be inferred from this file.
