---
version: alpha
name: Jacques + Cie
category: "Product & SaaS"
description: "French-Canadian dental clinic site (Quebec City, Sainte-Foy) in warm cream #f7f3eb with deep indigo #333347 text, a periwinkle #84b0e8 button fill, Aeonik at weight 400 from 14px to a 104px hero, and 20px rounded 50px-high buttons with no shadows."
colors:
  canvas: "#f7f3eb"
  ink: "#333347"
  primary: "#84b0e8"
  on-primary: "#333347"
  surface-card: "#ffffff"
  ink-muted: "#526f9c"
typography:
  display:
    fontFamily: Aeonik, sans-serif
    fontSize: 104px
    fontWeight: 400
    lineHeight: 93.6px
  display-mobile:
    fontFamily: Aeonik, sans-serif
    fontSize: 52px
    fontWeight: 400
    lineHeight: 46.8px
  body:
    fontFamily: Aeonik, sans-serif
    fontSize: 26px
    fontWeight: 400
    lineHeight: 31.2px
  button:
    fontFamily: Aeonik, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
  nav:
    fontFamily: Aeonik, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 21.6px
rounded:
  xs: 20px
spacing:
  s1: 5px
  s2: 10px
  s3: 14px
  s4: 15.61px
  s5: 20px
  s6: 40px
  s7: 55px
  s8: 80px
  s9: 110px
  s10: 130px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 14px 20px
    height: 50px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 14px 20px
    height: 50px
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
---

## Overview

The measured page is `https://jacques-cie.com/`, titled "Jacques + Cie – Clinique dentaire à Québec - Soins dentaires humains & professionnels à Sainte-Foy" (language `fr-CA`). It is the website of a dental clinic in the Sainte-Foy area of Quebec City. The page is 1,280px wide and 6,692px tall at desktop.

The capture starts with a full-width photograph of two smiling people shot so tightly that faces are cropped by the frame, with a white "Menu" pill and a white calendar-icon pill at the top right and a small circular logo mark at the top left. The h1, "Soins dentaires pour tous" (104px, white), sits over this image. Below it the page turns to a warm cream (`#f7f3eb`) block: a small plus-sign eyebrow "À propos", a large 52px indigo headline ("Une approche personnalisée où la précision technique rencontre le bien-être et la santé dentaire de chaque patient"), a short paragraph and a periwinkle "En savoir plus →" button, beside a tall interior photograph of the clinic. Further down another close-up smile image bleeds off the frame.

Other measured headings include "Nos conseils pratiques" (52px); calls to action in the extraction are "En savoir plus", "Voir tout" and an outlined "Prendre rendez-vous" (which opens in another window). A footer block in periwinkle lists services (Parodontie, Implantologie).

The voice is warm and plain French: "Des soins dentaires personnalisés" and "Soins dentaires humains & professionnels", with a clinical-but-friendly look that avoids stock dental blues and white-coat imagery. The WebFetch of the home page returned only the title, so the description here rests on the extraction and capture rather than a fetched text.

## Colors

- **Canvas `#f7f3eb`** (`colors.canvas`): the root `--color-gray-200`, the cream reading surface.
- **Ink `#333347`** (`colors.ink`): the root `--color-dark`, a blue-tinted indigo. It carries 1,296 weighted characters and also appears as a section background (1,459 area weight), so dark indigo blocks exist on the page.
- **Primary `#84b0e8`** (`colors.primary`, root `--color-blue-500`): the fill of the "En savoir plus" and "Voir tout" buttons and of the footer block; text on it is `#333347` (`colors.on-primary`).
- **White `#ffffff`** (`colors.surface-card`, root `--color-light`): menu and calendar pills, outlined button resting state and hero text.
- **Muted ink `#526f9c`** (`colors.ink-muted`, root `--color-text-faded`): 238 weighted characters of secondary text.
- Other published root colors, not promoted to tokens because they were not measured on a rendered element: blue 100 `#E6EFFA`, blue 200 `#CEDFF6`, blue 300 `#B5D0F1`, blue 400 `#9DC0ED`, gray 100 `#FBF9F5`, gray 300 `#DBD8D3` (measured as a border color, 2 uses), gray 400 `#A3A1A4`, gray 500 `#6B6A75`, warning `#fcc582`, error `#f7a6a6`, and `--color-dark-30` `rgba(51, 51, 71, .3019607843)`.
- Hover on the white "Menu" and "Prendre rendez-vous" buttons inverts them to `#333347` fill with white text (measured).

## Typography

One family, **Aeonik** (weight 400 only, 1,818 weighted characters), declared as `--ff-heading` and `--ff-paragraph` with a generic sans-serif fallback. Aeonik is a commercial typeface; Inter or Helvetica Neue would be neutral stand-ins.

| Role | Size / line-height |
| --- | --- |
| Display (h1) | 104px / 93.6px (line-height 0.9) |
| Display, 390px | 52px / 46.8px |
| Section heading (h2, h3) | 52px / 52px |
| Body (hero paragraph) | 26px / 31.2px |
| Nav | 18px / 21.6px |
| Button | 14px / 16.8px |

By character count the page's real reading sizes are 18px (723), 14px (576), 52px (230), 26px (190) and 104px (99). Root font-size variables are `--fs-sm` 1.4rem, `--fs-reg` 1.6rem, `--fs-md` 1.8rem, `--fs-lg` 2.2rem, `--fs-xl` 2.6rem and `--fs-2xl` 3rem. Headings are very tight (display line-height 0.9) and unweighted: hierarchy is carried by size alone.

## Layout

- Desktop 1,280px; root variables define a 4-column grid (`--grid-columns: 4`) with `--grid-gap: 2rem` and derived half, third, double and quadruple gaps.
- Measured gaps: 20px (78 uses), 5px (52), 10px (23), 40px (9), 80px (5), plus single 55px, 110px and 150px. Paddings: 20px (15), 40px (12), 15.605px (7), 14px (6).
- The about block is a two-column split: text left (about 488px wide headline), a tall image right; the hero photograph and later images run full bleed.
- Root spacer variables: `--spacer-xs` .5rem, `--spacer-sm` 1rem, `--spacer-md` 2rem, `--spacer-lg` 4rem and `--spacer-xl` 8rem.
- Z-index layers: dropdown 100, header 200, modal 300, loader 500.

## Elevation & Depth

No box shadow appeared on any measured element (`boxShadows` is empty), although the stylesheet defines `--shadow: 0 .4rem 1.2rem 0 rgba(0, 0, 0, .08)` and `--shadow-dark: 0 0 1.2rem 0 rgba(0, 0, 0, .16)`. Because they were not seen on rendered elements in this capture, no elevation tokens are declared. Depth on the page comes from full-bleed photography, color blocks (cream, indigo, periwinkle) and the white pills floating over the hero.

## Shapes

Measured radius: 20px on 15 elements (the buttons). The root radius variables are `--radius` 4rem, `--radius-lg` 2rem and `--radius-md` 1rem; the `rounded.xs: 20px` token matches the computed value on the buttons. Buttons are 50px tall with 14px 20px padding, which gives a soft rounded rectangle. Photography is square-cornered.

## Components

- **Primary button (`button-primary`)**: `#84b0e8` fill, `#333347` 14px text, 20px radius, 14px 20px padding, 50px high (152px wide for "En savoir plus"); a trailing arrow icon appears in the capture.
- **Secondary button**: identical measurements ("Voir tout", 119px wide).
- **Outlined button**: transparent fill with a 1px `#333347` border, same size ("Prendre rendez-vous", 196px wide); inverts on hover to `#333347` with white text.
- **Menu pill**: white background, `#333347` text, 50px tall, 20px radius; inverts on hover.
- **Calendar pill**: white square-ish icon button next to Menu.
- **Navigation**: 18px Aeonik list (Services, Parodontie, Implantologie), `#333347`, 21.6px line-height, listed inside the menu.
- **Footer**: `#84b0e8` background, `#333347` text, 804px tall.

## Design System Architecture

No public design system or brand-guidelines page was found or linked from the home page; the fetched page text did not list any. The CSS does expose a well-named token layer on `:root`: `--color-*` (blue 100 to 500, gray 100 to 500, dark, light, text-faded, warning, error), `--fs-*`, `--spacer-*`, `--radius*`, `--shadow*`, `--grid-*`, `--z-*`, `--ff-heading` and `--ff-paragraph`. This is a conventional token-first custom build; spacing and type tokens are rem-based while the measured computed values are in pixels.

## Do's and Don'ts

- Do pair cream `#f7f3eb` blocks with indigo `#333347` text and periwinkle `#84b0e8` buttons.
- Do use Aeonik at weight 400 everywhere; make hierarchy with size.
- Do keep headline line-height tight (0.9 for the 104px display).
- Do round buttons to 20px with 14px 20px padding and 50px height.
- Don't use pure black or saturated clinical blue; the palette is indigo and soft blue.
- Don't add shadows to buttons or cards in this measured system.
- Don't crop photography into rounded corners; images stay rectangular and full bleed.
- Don't set body copy bold.

## Responsive Behavior

Measured at 390px: the h1 drops to 52px / 46.8px, hero body text to 18px / 21.6px, navigation text to 16px / 19.2px (the nav list 430px high, 170px wide); the "En savoir plus" button keeps its 152px by 50px size, 14px text and 20px radius. Mobile sizes by character count: 16px (723), 14px (576), 18px (243), 30px (177), 26px (74). Column stacking and image crops at other widths were not measured.

## Iteration Guide

1. Set canvas `#f7f3eb`, ink `#333347`, buttons `#84b0e8`.
2. Aeonik 400: 104px/93.6px hero, 52px headings, 26px lead, 18px nav, 14px buttons.
3. Buttons: 50px high, 14px 20px padding, 20px radius; outlined variant uses a 1px `#333347` border.
4. Use spacing steps 5, 10, 14, 20, 40, 55, 80, 110, 130px.
5. Use close-cropped, warm portrait photography and bleed it to the viewport edge.
6. Write short, kind French copy that says "soins" and "bien-être" before any technical term.
