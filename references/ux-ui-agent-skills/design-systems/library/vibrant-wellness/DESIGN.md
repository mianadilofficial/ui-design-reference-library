---
version: alpha
name: Vibrant Wellness
category: "Tech & AI"
description: 'Vibrant Wellness interactive experience (vibrant.noomoagency.com, built by Noomo Agency): pastel lavender #d9cffb hero with a glossy 3D bust, PlusJakarta Sans 16px body and 80px headline, Ubuntu Mono caps toggles, ink #282f3c, blue #0774c4 labels, glass white pills and circles.'
colors:
  canvas: '#c9dcec'
  ink: '#282f3c'
  primary: '#0774c4'
  surface: '#ffffff'
  brand-green-200: '#88aafb'
  ink-black: '#000000'
  purple-100: '#d9cffb'
  blue-100: '#a8bffd'
  white-200: '#e5eaf8'
typography:
  display:
    fontFamily: '"PlusJakarta Sans Semi Bold", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 35px
    fontWeight: 400
    lineHeight: 42px
  display-mobile:
    fontFamily: '"PlusJakarta Sans Semi Bold", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 26px
    fontWeight: 400
    lineHeight: 31.2px
  body:
    fontFamily: '"PlusJakarta Sans Semi Bold", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: '-0.16px'
rounded:
  xs: 80px
  sm: 100px
  pill: 9999px
spacing:
  s1: 3px
  s2: 8px
  s3: 16px
  s4: 20px
  s5: 22px
  s6: 24px
  s7: 30px
  s8: 32px
  s9: 40px
  s10: 50px
components:
  nav:
    textColor: '{colors.surface}'
---

# Vibrant Wellness

## Overview
This file documents the page measured at `https://vibrant.noomoagency.com/` (title "Vibrant Wellness | Interactive Digital Health Experience"). It is hosted on the domain of Noomo Agency, and the capture's lower-right corner reads "CREATED BY noomo agency"; it is therefore an agency-built interactive showcase for the Vibrant Wellness brand, not the company's own commercial website, and is documented here under the brand name it displays. The page is a single viewport: 1280px wide and 800px tall, with 372 visible elements.

The capture is a full-screen hero in soft lavender (#d9cffb range) with a glossy, iridescent 3D bust of a human figure at center. At the upper left is the logo "VibrantWellness" (a three-dot molecule mark with the name in light weight), and below it the display headline "Personalized Wellness" in a pale, almost translucent white at 80px. At the right, four short claims, each with a small blue circular icon: "High Quality Labs", "Proprietary Technology", "Science & Research", "Advanced Software". At the top center, a small pill switch with "FEMALE" (selected, filled blue) and "MALE". A glowing white pill button at the bottom center reads "Start Experience". At the lower left is a "SOUND OFF" toggle and at the lower right the agency credit. The detected h1 is "Neurology" at 35px: a body-system label that changes as the visitor explores the figure. The mood is clinical but soft: pastel, glassy and gentle, using 3D rendering instead of photography.

## Colors
The site declares a named brand palette in `:root` (note that the site's own names, such as "green" for blue shades, are kept below only as variable names):
- `canvas` #c9dcec (`--color-brand-white`): the measured page color token; the capture shows the lavender hero on top of it.
- `ink` #282f3c (`--color-brand-dark`): the dominant text color (319 weighted characters), used for the "Neurology" label.
- `primary` #0774c4 (`--color-brand-green`): the blue of the "Start Experience" label, the selected FEMALE pill and the icon dots (30 weighted characters; background area 3).
- `brand-green-200` #88aafb (`--color-brand-green-200`), a periwinkle used as a fill for small controls such as the sound toggle.
- `purple-100` #d9cffb (`--color-brand-purple-100`): the lavender of the hero background.
- `blue-100` #a8bffd (`--color-brand-blue-100`) and `white-200` #e5eaf8 (`--color-brand-white-200`): declared supporting tints.
- `surface` #ffffff: the button fill and the headline color; white also appears as translucent fills (#ffffff9c, #ffffff1a, #ffffff69) over the lavender for glass panels.
- `ink-black` #000000: used in a few labels (21 weighted characters).

The entire palette is pastel; the saturated blue is only used on small interactive labels.

## Typography
Two families: PlusJakarta Sans (loaded as "PlusJakarta Sans Regular" 400 and "PlusJakarta Sans Semi Bold" 600) and Ubuntu Mono Bold (700) for technical labels. The font-family names are registered as separate families per weight, so the stack names the weight in its family name (`--font-sans-regular`, `--font-sans-semi`, `--font-sans-bold`, `--font-mono-regular`, `--font-mono-bold`).
- `display` 35px with line-height 42px: the "Neurology" label (weight value 400 on a Semi Bold family).
- The hero headline is 80px with -3% letter-spacing (40 weighted characters).
- `body` 16px, line-height 22.4px, letter-spacing -0.16px: the dominant size (248 weighted characters), also used for the "Start Experience" label; an 18px size with -0.36px tracking is used for the feature list (74).
- Ubuntu Mono Bold at 13px uppercase with 1.9px tracking, line-height 13px: the FEMALE / MALE switch, and 12px with 8% tracking for labels.
`display-mobile` is 26px/31.2px, the "Neurology" label measured at the mobile viewport. The stacks fall back to `ui-sans-serif, system-ui, sans-serif` plus emoji fonts.

## Layout
The layout is a centered stage with elements pinned around the figure: switch at top center, logo and headline at left, claims list at right (right-aligned text), start button at bottom center, toggles at the bottom corners. There is no scrolling content (page height 800px). Spacing values measured: gaps of 20px (16 uses) and 8px; paddings of 22px (8 uses), 24px (7), 8px, 20px, 16px, 30px, 40px, 3px, 50px, 32px. The site's spacing variables are named by tenths of a rem (`--spacing-4` .4rem, `--spacing-9` .9rem, `--spacing-48` 4.8rem, `--spacing-70` 7rem, `--spacing-90` 9rem).

## Elevation & Depth
Depth is made with translucency and glow, not drop shadows: glass panels use white fills of 10% to 61% alpha (#ffffff1a, #ffffff69, #ffffff9c), with 1px white and #ffffff36 borders. The one measured shadow is an inset white glow, `rgba(255, 255, 255, 0.4) 0px 4px 40px 0px inset`, on the button. The 3D figure's glossy highlights supply the sense of volume.

## Shapes
Everything is round. Measured radii: 50% (25 elements: dots and icons), 100px (19), 9999px (13) and 80px (4); the frontmatter has `xs` 80px, `sm` 100px and `pill` 9999px. The site's variables include `--radius-full` 9999px, `--radius-3xl` 40rem, `--radius-lg` 8rem, `--radius-2xl` 10rem and `--radius` 2.4rem. Buttons and switches are fully rounded pills.

## Components
- **Gender switch**: a pill with two options in Ubuntu Mono Bold 13px uppercase; the selected option is filled #0774c4 with white text and a symbol glyph.
- **Start Experience button**: a white glowing pill with a #0774c4 16px label and an inset white glow.
- **Claims list**: four rows with a blue circular icon (three dots) and 18px white text.
- **Sound toggle**: small periwinkle pill labelled "SOUND OFF" in mono caps at the lower left.
- **Logo**: the three-dot mark plus "VibrantWellness" in a light weight, white.
- **Nav** (`nav`): the top row (32px tall, 1280px wide) holds the FEMALE / MALE text in white.
- **Figure canvas**: a 3D bust with iridescent finish, the main visual.

No filled primary CTA matching the extractor's patterns was detected (`ctaCandidates` is empty), so no `button` token is declared; the button described above is documented from the capture and the measured label size.

## Design System Architecture
No public design system or brand guidelines were found among the pages opened here; none is cited. The page's CSS is Tailwind-based (`--tw-*` variables and a `--spacing-*`/`--radius-*` theme) with a `--color-brand-*` palette (dark, purple-100, white, white-200, green, green-200, blue-100) and Swiper (`--swiper-theme-color` #007aff, a carousel library default, not a brand color). Source: measured page https://vibrant.noomoagency.com/ via `web/data/extracted/vibrant-wellness.json`.

## Do's and Don'ts
Do
- Use pastel lavender and blue-gray grounds with white glass panels.
- Put one 3D figure at the center and pin controls to the edges.
- Use PlusJakarta Sans for reading and Ubuntu Mono Bold caps for technical toggles.
- Make every control a pill or circle.
- Keep saturated blue (#0774c4) for active states and labels.

Don't
- Don't add hard drop shadows; the only measured shadow is an inset glow.
- Don't use the Swiper blue #007aff as a brand color.
- Don't treat this agency-hosted demo as the company's commercial site.
- Don't use square corners; none were measured.

## Responsive Behavior
The mobile pass recorded: the "Neurology" label at 26px with 31.2px line-height in a 132x31 box (desktop 35px/42px in 178x42); the headline size 80px at 20 weighted characters (desktop 40); the body text unchanged at 16px/22.4px with -0.16px tracking; and the header row at 13px mono caps, 390px wide and 32px tall. The mobile size ranking is 16px (248), 26px (57), 80px (20), 15px (18) and 13px (10). Breakpoints and layout reflow are not measured.

## Iteration Guide
1. Set canvas #c9dcec, ink #282f3c, primary #0774c4, hero lavender #d9cffb.
2. Place an 80px PlusJakarta headline at -3% tracking in translucent white.
3. Add a centered 3D figure, four right-aligned claims at 18px, and pill toggles at the edges.
4. Make buttons white pills with a #0774c4 label and an inset white glow.
5. Use Ubuntu Mono Bold 13px caps for switches.
6. Run `node web/scripts/verify-designs.mjs --slug=vibrant-wellness`.
