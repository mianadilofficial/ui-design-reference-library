---
version: alpha
name: Artem Shcherbakov
category: "Portfolio"
description: "Artem Shcherbakov: director and creative lead portfolio; white canvas, near-black #0e0e0e ink, EaseDouble 900 display with -6.26px tracking at 78.2px, Arial Narrow body 21.3px, neon green #00fe40 accent, capsule-shaped media."
colors:
  canvas: "#ffffff"
  ink: "#0e0e0e"
  primary: "#0e0e0e"
  on-primary: "#ffffff"
  accent-green: "#00fe40"
  accent-blue: "#578bfc"
  accent-red: "#f73434"
  ink-gray: "#5c5c5c"
  surface-grey: "#e8e8e8"
typography:
  display:
    fontFamily: EaseDouble
    fontSize: 78.2222px
    fontWeight: 900
    lineHeight: 57.1022px
    letterSpacing: "-6.25778px"
  display-mobile:
    fontFamily: EaseDouble
    fontSize: 54.08px
    fontWeight: 900
    lineHeight: 39.4784px
    letterSpacing: "-4.3264px"
  heading:
    fontFamily: EaseDouble
    fontSize: 96px
    fontWeight: 900
    lineHeight: 86.4px
    letterSpacing: "-7.68px"
  body:
    fontFamily: "\"Arial Narrow\""
    fontSize: 21.3333px
    fontWeight: 400
  nav:
    fontFamily: "\"Arial Narrow\", sans-serif"
    fontSize: 28.4444px
    fontWeight: 700
    lineHeight: 28.4444px
    letterSpacing: "-1.13778px"
  link:
    fontFamily: EaseDouble, sans-serif
    fontSize: 20.4444px
    fontWeight: 600
    lineHeight: 24.5333px
    letterSpacing: "-0.817778px"
rounded:
  pill: 9999px
spacing:
  s1: 1.78px
  s2: 8.89px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
    padding: 0px 8.88889px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
---

## Overview

artemartemartem.com is the portfolio of Artem Shcherbakov. The page title is "artem shcherbakov" and the visible copy introduces him as "Director & Creative Lead. Founder of ZHEESHEE studio. I mix live action with CG — building worlds, inventing characters, making things that shouldn't exist look real. Or unreal. As long as you can't stop looking at it". A second line in the markup says he is also the founder of Roar Games. The measured document is 1280px wide and 2400px tall, with an inner scroller 5960px tall (the page scrolls inside a container). The header is a three-part row of lowercase condensed links: "works" at the left edge, the name "artem shcherbakov" at the center and "contact" at the right edge. The first screen is almost entirely white; at its vertical middle sits a three-column intro: a black heavy "Hey / I'm Artem" lockup crossed by a hand-scribbled neon-green "HEY", a blurred, capsule-shaped gray video/image window in the center, and, at right, a small neon-green hand-drawn face above the centered bio paragraph. A faint "scroll" cue with a tiny mouse icon is at the bottom.

The personality comes from contrast: huge, fat, tightly tracked display letters against tiny Arial Narrow text, a nearly empty white field, and one scribbled neon-green layer that looks hand-drawn.

## Colors

The theme is monochrome with a single neon accent. `canvas` ({colors.canvas}, #ffffff) is the page ground and `ink` ({colors.ink}, #0e0e0e) is the text color (200 measured characters) and the primary: the page declares `--text-primary: rgba(14,14,14,1)`, `--background-primary: rgba(14,14,14,1)` and `--background-primary-inverse: rgba(255,255,255,1)`. The dark layer #0e0e0e also appears as the one measured background area (weight 3072: the inner scroller). `on-primary` is white. Accent colors are declared in the root: `accent-green` ({colors.accent-green}, #00fe40 as `--text-accent-green`) is the neon of the scribbles and the face; `accent-blue` (#578bfc, `--text-accent-blue`) and `accent-red` (#f73434, `--text-red-netfix`) are declared and the blue also appears among the measured child colors of the body. `ink-gray` (#5c5c5c, `--text-gray`) and `surface-grey` (#e8e8e8, `--c-grey`) give secondary tones. Opacity variants of the ink are also defined: 12% (`--border-primary`, `--text-primary-12`), 24% and 32%, and inverse text variants at 24% and 100% white. A graphite #222222 (`--c-graphite`) is the declared main background in the stylesheet.

## Typography

Fonts loaded: "EaseDouble" (600 and 900), "Great Rebellion" (400, the handwriting face) and "Arial Narrow" (400 and 700). The root also names Inter, SF Pro Text, SF Pro Display and Averta-Semibold as variables (`--font3`, `--font4`, `--font5`, `--font6`) that are not measured as used. By characters, Arial Narrow carries 202 and EaseDouble 27.

- `display` (h1 "Hey I'm Artem"): EaseDouble 900, 78.2222px, 57.1022px line height, -6.25778px tracking.
- `heading` (h2): EaseDouble 900, 96px, 86.4px line height, -7.68px tracking.
- `body`: Arial Narrow 400, 21.3333px.
- `nav`: Arial Narrow 700, 28.4444px, 28.4444px line height, -1.13778px tracking (the "works / artem shcherbakov / contact" row).
- `link`: EaseDouble 600, 20.4444px, 24.5333px line height, -0.817778px tracking.

The tracking is consistently about -8% of the size (-6.25778px at 78.2222px, -7.68px at 96px, -1.13778px at 28.4444px, -0.817778px at 20.4444px), and line heights are below the font size on display text (0.73 and 0.9). Weight 900 is used only for display. The size set measured on the page is 21.3333px, 28.4444px, 20.4444px, 78.2222px and 14.2222px.

## Layout

The layout is built on a 1440px design width: spacing custom properties `--spacing-4` to `--spacing-140` are all `calc(N / 1440 * 100 * 1vw)`, so all spacing scales with the viewport (the root records `--vw-screen: 1440`). Measured spacings are 1.78px and 8.89px, the latter equal to 8px at the 1440 reference. The intro is a symmetric three-column composition centered vertically, with the header aligned to the page edges and large empty white above and below. Layering is tracked by z-index variables (`--z-preloader: 11`, `--z-cursor: 10`, `--z-header: 7`, `--z-menu: 4`, `--z-modal: 5`).

## Elevation & Depth

Flat. The only shadow in the CSS is `inset 0 0 100px #fff` (one use), a white inner glow, and `none` (one use). The center capsule is blurred imagery with a soft edge, which is the page's only sense of depth; a custom cursor layer exists (`--z-cursor`).

## Shapes

The token set keeps `pill` (9999px). Measured radii in the CSS are 4px, 64px and 0px, one use each, plus a 50% radius on one element. The center media window is a tall capsule with fully rounded ends (consistent with the 64px radius). The header and text blocks are unboxed.

## Components

- `nav` / `nav-link`: Arial Narrow 700 at 28.4444px with -1.13778px tracking, lowercase, with 0px 8.88889px padding; the extractor recorded white (#ffffff) as the nav text color, while the capture at rest shows the links dark on white; the state change was not measured.
- `link`: EaseDouble 600 at 20.4444px in {colors.ink}.
- Intro lockup: "Hey / I'm Artem" in EaseDouble 900 with a scribbled neon-green overlay in the handwriting face.
- Media capsule: a tall pill-shaped window for video.
- No buttons or inputs were detected, so no `button-primary` is declared.

## Design System Architecture

No public design-system or brand-guideline page was found; this is a personal portfolio with a de-facto system in custom properties: named grays (`--c-white` #fff, `--c-light-grey` #f1f1f1, `--c-grey` #e8e8e8, `--c-dark-grey` #d4d4d4, `--c-light-graphite` #454545, `--c-graphite` #222), semantic text and background variables (`--text-primary`, `--text-gray`, `--text-secondary-inverse`, `--background-primary`, `--border-primary`), a named set of easings (`--ease-out-quad` through `--ease-in-out-expo`, default `--ease-in-out-quad` at 0.4s) and a viewport-scaled spacing ladder. The page also includes the Leva debug panel's variables (`--leva-*`), which are developer tooling and not part of the brand. Source: [artemartemartem.com](https://artemartemartem.com/).

## Content and Imagery

Content is minimal and first-person: "Hey I'm Artem", a one-sentence role statement, and three links. The illustration language is hand-drawn: a scribbled neon-green "HEY" struck through the fat black "Hey", and a small green line-drawing of a laughing face with spiky hair above the bio; these use the handwriting face and drawn strokes rather than vector UI icons. Photographic or video work sits inside the capsule window, which is blurred in the capture. The bio text is centered, wraps in a narrow column and sets the studio name in bold. There is no stock photography and no grid of thumbnails on the first screen; the "works" page is reached through the header link, and was not measured.

## Motion

The stylesheet declares a full easing set (`--ease-in-out-expo: cubic-bezier(1,0,0,1)`, `--ease-out-expo: cubic-bezier(0.19,1,0.22,1)` and others) and a default transition of 0.4s with `--ease-in-out-quad`. A preloader, a custom cursor and page-transition layers are present in the z-index map (`--z-preloader`, `--z-cursor`, `--z-transition`, `--z-transition-layout`). The text of the bio is split into one element per word in the markup (the extracted paragraph reads "I'm", " ", "also", " ", "the", ...). Hover states were not recorded on this page.

## Do's and Don'ts

- Do set display type in EaseDouble 900 with tracking of about -8% of the size.
- Do keep secondary copy in small Arial Narrow and navigation lowercase.
- Do use #0e0e0e on white and reserve neon green #00fe40 for scribbles and hand-drawn marks.
- Do use fully rounded capsule shapes for media.
- Don't add boxed buttons, shadows or gradients.
- Don't use the Leva panel's palette or the unmeasured Inter and SF fonts.
- Don't fill the empty space; the whitespace is part of the composition.

## Responsive Behavior

Measured at 390px: the h1 "Hey I'm Artem" drops from 78.2222px to 54.08px (39.4784px line height, -4.3264px tracking), and the h2 from 96px to 58.24px (52.416px line height, -4.6592px tracking). The bio paragraph measures 344px wide with the same dark text color. The header layout, media capsule size and column stacking at that width were not measured.

## Iteration Guide

1. White ground, #0e0e0e ink; neon #00fe40 only for hand-drawn overlays.
2. Display: EaseDouble 900, 78.2222px / 57.1022px, -6.25778px tracking; navigation: Arial Narrow 700 28.4444px lowercase.
3. Body: Arial Narrow 21.3333px, centered in narrow measure.
4. Scale spacing with the viewport from a 1440px reference.
5. Run `node web/scripts/verify-designs.mjs --slug=artem-shcherbakov` after edits.
