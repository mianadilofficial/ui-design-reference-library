---
version: alpha
name: 20 Years Inspired by People
category: "Business & Corporate"
description: "20 Years Inspired by People (inspiring.nk.studio, Spanish edition): Instrument Serif 100px hero over a dark teal scene of tilted #092524 cards, DM Sans 12px body, a #00ffc2 mint button with #041819 label and 3px radius, 10px card radius and #406c6c80 hairlines."
colors:
  canvas: "#ffffff"
  ink: "#041819"
  primary: "#00ffc2"
  on-primary: "#041819"
  on-dark: "#ffffff"
  ink-muted-on-dark: "#ffffff80"
  ink-soft-on-dark: "#ffffffb2"
  card-bg: "#092524f0"
  galaxy-green: "#070b0a"
  hairline: "#406c6c80"
typography:
  display:
    fontFamily: "\"Instrument Serif\", \"Instrument Serif Fallback\", Arial, Helvetica, sans-serif"
    fontSize: 100px
    fontWeight: 400
    lineHeight: 97px
  display-mobile:
    fontFamily: "\"Instrument Serif\", \"Instrument Serif Fallback\", Arial, Helvetica, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 38.8px
  card-title:
    fontFamily: "\"Instrument Serif\", \"Instrument Serif Fallback\", Arial, Helvetica, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24.96px
  body:
    fontFamily: "\"DM Sans\", \"DM Sans Fallback\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 22px
  button:
    fontFamily: "\"DM Sans\", \"DM Sans Fallback\""
    fontSize: 14px
    fontWeight: 700
    lineHeight: 21px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 8px
  xl: 10px
  pill: 9999px
spacing:
  s1: 5px
  s2: 7px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 20px
  s7: 30px
  s8: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 10px 20px
    height: 42px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.on-dark}"
    typography: "{typography.card-title}"
    rounded: "{rounded.xl}"
    borderColor: "{colors.hairline}"
---

## Overview

"20 Años Inspirados por Personas" (20 Years Inspired by People) is an anniversary microsite published under the nk.studio brand at inspiring.nk.studio. The Spanish page, as fetched, says nk.studio turned 20 and invited colleagues, friends, clients and referents to share something that once inspired them; a counter reads "tus inspiraciones 0/33", there are calls to action "Compartí tu inspiración" and "Entrá al archivo de inspiración", a "Modo Lectura / Modo Original" toggle, language options ENG and ESP, and links to Inicio, Manifiesto, Créditos and the studio site (www.nk.studio).

The measured entry view (1280px wide, 800px scroll height, 968 visible elements) is a single dark screen. A teal-black space holds a ring of tilted portrait-style cards, each with a serif title (for example "Liderar desde la cocina", "Hacerlo bien aunque nadie lo vea", "Inventando un nuevo lenguaje"), a small circular avatar, a contributor name and a company label in small capitals. Some cards carry black-and-white photographs; the cards at the edges are blurred, which gives depth. At the centre, the small label "DESDE 2006", the large white serif headline "Antes de inspirar, fuimos inspirados." with mint underlines under "inspirar" and "inspirados", a short two-line paragraph, and a mint button. The "/nk." logo is at top left and a language switch "ESP" at top right.

The tone is warm and editorial: first-person plural, personal titles, and a mint accent that glows against deep green-black.

## Colors

The CSS body background is `#ffffff` (`--background`), and that is the measured canvas, but the viewer sees a dark scene: the card surfaces are `#092524f0` (area weight 2,117, nearly opaque teal-black), the root declares `--color-galaxy-green: #070b0a` and the capture shows a dark teal gradient. This file records the measured values and does not pick between them: canvas `#ffffff`, scene `#092524f0`, galaxy green `#070b0a`.

- **Primary `#00ffc2`** (`--color-brand-green`): the button fill, headline underlines and the hover colour of the language switch (`rgb(0, 255, 194)`; unhovered `rgb(73, 255, 212)`).
- **On-primary and ink `#041819`**: the button label and the darkest teal text (62 characters).
- **On-dark `#ffffff`**: headline and card text (1,165 characters), with `#ffffff80` for secondary text (775 characters, for example avatar roles) and `#ffffffb2` for a lighter accent (9 characters).
- **Hairline `#406c6c80`**: the 1px border on cards (33 uses).
- **Button hover**: the button fill changes from `rgb(0, 255, 194)` to `rgb(253, 255, 255)`.
- Root variables also include `--foreground #171717`, `--color-black #000` and Tailwind grey ramps (`--color-gray-50`, `--color-gray-200`).

## Typography

Two families: **Instrument Serif** (1,028 characters, weight 400, with an "Instrument Serif Fallback") for the headline and card titles, and **DM Sans** (997 characters, variable weight 100 to 1000) for body text, labels and the button.

- **Display 100px / 400 / 97px**: the h1 (mobile 40px / 38.8px).
- **Card title 24px / 400 / 24.96px**: the dominant size (972 characters).
- **Body 12px / 400 / 22px**: the intro paragraph (607 characters), white on the dark scene.
- **Button 14px / 700 / 21px**.
- Smaller sizes: 8px (298 characters, the contributor role labels), 10px, 13px and 16px. Weights seen: 400 (1,465 characters), 500 (477) and 700 (83).

Letter-spacing was not recorded. No foundry pages were opened, so no licence is stated. The pairing of a high-contrast display serif with a geometric sans is visible in the capture.

## Layout

The page is a full-viewport stage with a centred text stack, not a document: scroll height equals the 800px viewport. The h1 block is 633px wide with a 194px height (two lines of 97px) and the paragraph is 432px wide, 44px high (two lines at 22px line height). Cards are about 257px wide and 289px tall in the extraction, arranged around the centre in two rows, tilted and partly overlapped by the headline. On mobile the paragraph has 25px horizontal padding. Measured gaps and paddings are small: 10px (68 uses), 5px (68), 12px (66), 15px (66), 7px, 20px, with 64px and 30px paddings once or twice. The eight spacing tokens are those values.

The card ring, the central headline and the button are the only content on the measured entry view, so the layout has three layers: the blurred and tilted background cards, the sharper foreground cards, and the centred text stack on top of them. The vertical order of the centred stack, from top to bottom, is the eyebrow "DESDE 2006", the headline, the paragraph and the button; the paragraph measures 12px in size, which is smaller than the 14px of the button label.

## Elevation & Depth

No box shadows were measured. Depth is created with blur (the cards at the left and right edges are blurred in the capture), tilt and perspective of the card ring, the dark vignette around the edges and opacity (`f0` alpha on the card fill). Root variables declare blur sizes (`--blur-xs: 4px`, `--blur-md: 12px`). Card edges are separated from the background by a 1px `#406c6c80` border.

## Shapes

Radii measured: `10px` (102 uses, cards and the language switch), a full pill (33 uses, avatar circles and chips), `5px` (19), `8px` (5), `3px` (1, the button), `4px 4px 0px 0px` (1) and `50%` (1). The primary button is nearly square at 3px, which contrasts with the 10px cards and round avatars.

## Components

- **Primary button "Entrá al archivo de inspiración"**: mint `#00ffc2` fill, `#041819` label, DM Sans 14px / 700, 3px radius, 10px 20px padding, 247px by 42px; hover fill `rgb(253, 255, 255)`.
- **Story card**: `#092524f0` fill, 10px radius, `#406c6c80` border, serif 24px title, circular avatar, contributor name and company label; 257px by 289px.
- **Language switch**: "ESP" with a dropdown showing ENG and ESP, 35px high, 10px radius, mint text.
- **Logo**: "/nk." with a mint dot at the top left.
- **Eyebrow "DESDE 2006"** above the headline.
- **Underlined words**: mint lines under two words of the headline.

## Design System Architecture

No public design system or brand guidelines were found for the microsite. The page (https://inspiring.nk.studio/es) offers Manifiesto and Créditos pages, which were not opened, and a link to the studio site; no press kit link is shown. The de-facto system is a Tailwind v4 layer: root variables such as `--color-brand-green #00ffc2`, `--color-galaxy-green #070b0a`, `--font-instrument-serif`, `--font-dm-sans`, easing curves (`--ease-in-out: cubic-bezier(.4, 0, .2, 1)`), `--leading-snug: 1.375` and Tailwind `--tw-*` utilities. Colours are semantic only at brand level (brand-green, galaxy-green).

## Do's and Don'ts

- Do use one mint accent, `#00ffc2`, for the main button and highlights.
- Do set display text in Instrument Serif at large size with tight line height (97px for 100px).
- Do keep body copy short and small (12px / 22px) in DM Sans.
- Do use tilted dark teal cards with 10px corners and a faint teal border.
- Don't round the primary button beyond 3px.
- Don't use pure black for the scene; the measured darks are teal-black (`#092524f0`, `#070b0a`).
- Don't treat the blurred edge cards as sharp interface.

## Responsive Behavior

Mobile pass (390px wide): h1 40px / 400 / 38.8px, 253px wide and 78px tall; body 12px / 22px with `0px 25px` padding, 361px wide; the primary button keeps 14px / 700, 10px 20px padding, 247px by 42px. Character-weighted sizes on mobile include 24px, 12px, 8px, 14px, 48px, 40px, 10px, 13px and 16px. How the card ring is rearranged on small screens was not measured.

## Iteration Guide

1. Start from the dark teal scene (`#092524f0` cards over `#070b0a`) with white text; mint `#00ffc2` as the only accent.
2. Headline in Instrument Serif 100px (40px on mobile); body DM Sans 12px / 22px.
3. Build cards with 10px radius, 1px `#406c6c80` border and 24px serif titles.
4. Measure the Manifiesto and Créditos pages before documenting reading mode.
5. Run `node web/scripts/verify-designs.mjs --slug=20-years-inspired-by-people` after edits.
