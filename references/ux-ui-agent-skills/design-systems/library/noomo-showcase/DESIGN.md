---
version: alpha
name: "Noomo Showcase"
category: "Agencies & Studios"
description: "Noomo Showcase (showcase.noomoagency.com): a black WebGL stage with pale blue-white text #d9e0ed and #d2e0ff, cobalt #0004eb buttons with 6px radius and a round arrow tile, PP Neue Montreal grotesk with GT America Mono nav at 14px."
colors:
  canvas: "#000000"
  ink: "#d9e0ed"
  primary: "#0004eb"
  brand-white-300: "#d2e0ff"
  black-100: "#050516"
  brand-white-100: "#d6e3fc"
  black-200: "#020411"
  accent-cyan: "#00aaff"
  text-secondary: "#9a9aab"
typography:
  display:
    fontFamily: ppneuemontreal-medium, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
    textTransform: uppercase
  display-mobile:
    fontFamily: ppneuemontreal-medium, sans-serif
    fontSize: 34px
    fontWeight: 400
    lineHeight: 51px
  body:
    fontFamily: GTAmericaMonoRegular, monospace
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  nav:
    fontFamily: "\"ABCFavorit Regular\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\", sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 15px
rounded:
  xs: 2px
  sm: 6px
  md: 50px
  pill: 9999px
spacing:
  s1: 3px
  s2: 6px
  s3: 10px
  s4: 14px
  s5: 15px
  s6: 16px
  s7: 28px
  s8: 32px
  s9: 77px
components:
  nav:
    textColor: "{colors.brand-white-300}"
    padding: 15px 16px 0px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.brand-white-300}"
    typography: "{typography.display}"
    rounded: "{rounded.sm}"
---

# Noomo Showcase

Noomo Showcase (https://showcase.noomoagency.com/, title "Noomo Showcase — Immersive 3D & WebGL Work") is the work showcase of the Noomo agency. The measured page is a dark, WebGL-driven stage: a black field with a star-and-glitch hero, a cobalt-blue accent (#0004eb), pale blue-white type, and a mix of a grotesk (PP Neue Montreal) with a monospace (GT America Mono). This document records what was measured.

## Overview

The page is 13600px tall at desktop, but the capture shows only the first screen filled; the remainder renders as black, so below-the-fold content is not documented. The first screen is a black starfield with a glitching 3D object at the top left, the wordmark "noomo" with a handwritten "Showcase" script at the top left, three nav links (Agency, Labs, Storytelling) in monospace at the top centre, and at the top right a small blue square sound toggle and a pale "Send email" button with an arrow tile.

The hero statement is a very large, widely letter-spaced uppercase sentence over the field: "STEP INTO NOOMO 2025. THE YEAR WE TURNED EVERY SCREEN INTO A STORY THROUGH WEB, 3D, MOTION & INTERACTIVE EXPERIENCES", with key words (NOOMO 2025., STORY, WEB, MOTION, INTERACTIVE) set in bold on cobalt-blue highlight capsules, and a small three-line monospace tagline (IMMERSIVE WEBSITES / DIGITAL STORYTELLING / WEB EXPERIENCES). A "GET STARTED" button (cobalt fill, uppercase label) with a round arrow tile sits below. The edges of the image show chromatic-aberration glitch. The mobile pass records a paragraph "WITH US IT HAPPENS." as the large statement.

## Colors

- `canvas` #000000: the page ground. `ink` #d9e0ed: the main text color (417 characters), named `--color-brand-white-200` in the site CSS.
- `primary` #0004eb: cobalt blue, `--color-blue-400`; the fill of the "GET STARTED" button, the highlight capsules and the sound toggle (largest measured area, 15 units).
- `surface-3` #d2e0ff (`--color-brand-white-300`): the pale blue-white used for button text and the "Send email" button background.
- `ink-3` #050516 (`--color-black-100`): near-black text on pale surfaces (32 characters).

Additional named brand variables measured in the CSS: `--color-brand-white-100` #d6e3fc, `--color-black-200` #020411, `--accent-color` #00aaff and `--text-secondary` #9a9aab; these are recorded as tokens. The CSS also contains generic status colors (`--color-yellow` #ffc107, `--color-red` #f44336, `--color-green` #4caf50, `--color-fps` rgb(63, 81, 181)) and profiler variables (`--profiler-bg` #1e1e24f5, `--profiler-border` #4a4a5a); those belong to a built-in performance profiler and are not brand colors. The hover color of the "Labs" nav link was measured as rgb(154, 165, 250).

## Typography

Three faces. `ppneuemontreal-book` (400) and `ppneuemontreal-medium` (500) carry the grotesk text; `GTAmericaMonoRegular` carries the nav, tagline and body links (331 of 510 measured characters). The CSS also names `ABCFavorit Regular` (`--font-sans-regular`) for a 10px nav-link role, `'Inter'` as the generic family variable and `'Fira Code'` as the generic mono; those were not among the loaded fonts.

- `display`: 16px / 16px, weight 500, uppercase. This is the measured "GET STARTED" label (the extractor's h1 role); the hero statement itself is not an h-element, so its exact computed size was not measured as a heading. On mobile the role resolves to the 34px / 51px statement "WITH US IT HAPPENS." (`display-mobile`, weight 400).
- `body`: 14px / 21px GT America Mono ("Send email", nav). Mobile body measures 20px / 22px.
- `nav`: 10px / 15px, weight 400.

By character count the page uses 20px (406), 14px (93) and 16px (11). Letter-spacing was not measured as non-default. The fonts are commercial or foundry-licensed; no open substitute was identified from a source, so fall back to the sans-serif and monospace stacks the site declares.

## Layout

The layout is a full-viewport WebGL scene with HTML overlaid on top. The header is a single row: wordmark left, nav centre, controls right, with nav padding 15px 16px 0px. Spacing variables from the CSS (Tailwind v4 theme, with `--spacing` .1rem): `--container-padding` 2rem, `--container-padding-xs` 1.6rem, `--spacing-14` 1.4rem, `--spacing-16` 1.6rem, `--spacing-28` 2.8rem, `--spacing-30` 3rem, `--spacing-32` 3.2rem, `--spacing-40` 4rem and `--spacing-42` 4.2rem. The measured gap between the hero words is 77px (18 occurrences). Paddings measured: 32px (8), 6px (5), 3px, 15px, 16px.

## Elevation & Depth

No box shadow was measured on rendered elements. The depth is in the scene: glow around the highlight capsules, a starfield, a chromatic-aberration glitch on the edges, and a 3D object with metallic spheres in the upper left. The CSS corpus holds `0 4px 15px rgba(0, 0, 0, 0.3)` and `0 6px 24px rgba(0, 0, 0, 0.5)`, which were not seen on the first screen.

## Shapes

Measured radii: 2px (3 elements), 50px (2), 9999px (2), `0px 50px 50px 0px` (1, a half-capsule) and 6px (1, the primary button). The CSS defines `--radius-2` .2rem, `--radius-4` .4rem, `--radius-6` .6rem, `--radius-50` 5rem, `--radius-2xl` 10rem and `--radius-full` 9999px. Tokens: xs 2px, sm 6px, md 50px, pill 9999px. Buttons are slightly rounded rectangles (6px) paired with a fully round arrow tile; the hero highlights are capsules.

## Components

- Primary button "GET STARTED": #0004eb fill, #d2e0ff text, 16px weight 500 uppercase, 6px radius, followed by a round (pill) arrow icon tile in the same blue.
- "Send email" button: pale (#d2e0ff) fill, cobalt text, 14px GT America Mono, with a small blue arrow tile at its right end.
- Nav links: 14px GT America Mono, #d2e0ff; hover color rgb(154, 165, 250).
- Sound toggle: a small cobalt square with a speaker glyph.
- Highlight capsule: cobalt capsule behind bold words in the hero statement.
- Wordmark: lowercase "noomo" with a script "Showcase" flourish.

## Design System Architecture

No public design system or brand guideline was opened, and none was linked in the extraction. The shipped CSS is a Tailwind v4 theme: `--tw-*` utilities, `--spacing`, `--radius-*`, `--text-*` (for example `--text-34` 3.4rem), `--font-weight-black` 900, `--default-transition-timing-function` cubic-bezier(.4,0,.2,1) and a custom `--ease-in-out` cubic-bezier(.65,.05,.36,1). The brand palette is exposed as named variables: `--color-brand-white-100`, `-200`, `-300`, `--color-blue-400`, `--color-black-100` and `--color-black-200`.

## Do's and Don'ts

- Do keep the ground black and the type pale blue-white (#d9e0ed, #d2e0ff).
- Do use cobalt #0004eb for buttons and highlight capsules, and nothing else as a saturated fill.
- Do pair a 6px-radius button with a round arrow tile.
- Do set nav and tags in the monospace, and statements in the grotesk.
- Don't use the profiler colors or the generic Material-style status colors as brand colors.
- Don't document anything below the first screen from the capture; it is black.
- Don't add drop shadows; depth comes from the scene.

## Responsive Behavior

Measured at the 390px mobile pass: the large statement is 34px / 51px in PP Neue Montreal Medium (color #d2e0ff), the body is 20px / 22px in #d9e0ed, the primary button text is 20px / 30px on #0004eb, and the nav-link role is 10px / 15px in #000000. The common mobile sizes by character are 20px (287), 22px (39), 34px (18), 16px and 14px. Nav collapse and the scene's behavior on mobile were not measured.

## Iteration Guide

1. Start with a black full-viewport scene; add the pale blue-white type.
2. Use a cobalt #0004eb button with uppercase 16px label and a 6px radius, plus a round arrow tile.
3. Set nav in the monospace at 14px; statements in the grotesk.
4. Add highlight capsules behind key words.
5. Keep the measured values; re-run the gate after renames.

## Imagery and Voice

The visuals are generated rather than photographed: a particle starfield, a glitching 3D object with reflective spheres, and chromatic-aberration edges on the type. Copy is promotional and in the first person plural ("We turned every screen into a story", "With us it happens"), set in capitals, with the keywords made bold and boxed in cobalt so that a single sentence works as a visual hierarchy. Calls to action are brief verbs: "Get started" and "Send email".
