---
version: alpha
name: Vectr
category: "Tech & AI"
description: 'Vectr (vectrfl.com): field-crew activation brand in Roboto 400/500 with 96px/86.4px display at -5.76px tracking, navy #050419 on off-white #fcfcfc, sky-blue #d0e1eb ground, 156px pill buttons 48px tall, cobalt symbol, no shadows.'
colors:
  canvas: '#d0e1eb'
  ink: '#585765'
  primary: '#050419'
  on-primary: '#fcfcfc'
  border: '#e6e6e8'
  text-disabled: '#8c8c95'
  bg: '#fcfcfc'
  bg-alt: '#d9e8f1'
  highlight: '#3932DC'
  dark-alt: '#373647'
typography:
  display:
    fontFamily: Roboto, sans-serif
    fontSize: 96px
    fontWeight: 500
    lineHeight: 86.4px
    letterSpacing: '-5.76px'
  display-mobile:
    fontFamily: Roboto, sans-serif
    fontSize: 64px
    fontWeight: 500
    lineHeight: 57.6px
    letterSpacing: '-2px'
  subheading:
    fontFamily: Roboto, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28.8px
  body:
    fontFamily: Roboto, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: Roboto, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
    letterSpacing: 0.28px
    textTransform: uppercase
  nav:
    fontFamily: Roboto, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
    letterSpacing: 0.72px
    textTransform: uppercase
rounded:
  xs: 6px
  sm: 12px
  md: 24px
  lg: 156px
spacing:
  s1: 2px
  s2: 10px
  s3: 16px
  s4: 18px
  s5: 20px
  s6: 24px
  s7: 40px
  s8: 48px
  s9: 64px
  s10: 96px
components:
  button-primary:
    backgroundColor: '{colors.primary}'
    textColor: '{colors.on-primary}'
    typography: '{typography.button}'
    rounded: '{rounded.lg}'
    padding: 0px 24px
    height: 48px
  button-secondary:
    backgroundColor: '{colors.on-primary}'
    textColor: '{colors.primary}'
    typography: '{typography.button}'
    rounded: '{rounded.lg}'
    padding: 0px 24px
    height: 48px
  nav-link:
    textColor: '{colors.primary}'
    typography: '{typography.nav}'
    padding: 16px
  footer:
    backgroundColor: '{colors.primary}'
    textColor: '{colors.on-primary}'
---

# Vectr

## Overview
Vectr (vectrfl.com, measured at `https://www.vectrfl.com/`, page title "Vectr") is a workforce-activation company for field crews: its copy offers to "match the 24/7 nature" of operations with "24/7 active coordination", and the buttons read "EXPLORE OUR INDUSTRIES" and "REQUEST CREWS". The page is 1280px wide and 9903px tall with 185 visible elements. The hero headline is the two-word "The New Standard", followed by "Designed for today's operations, beyond legacy staffing work".

The capture shows the page in the middle of a scroll animation, on a pale sky-blue field (#d0e1eb). A thin dotted ellipse and circle form a large orbital diagram, and at its center sits a cobalt-blue pictogram: an arrow pointing into a ring of small squares and diamonds. Below, a numbered steps list: a white rounded-square "01" tile beside the heading "Activation, simplified" and a gray paragraph ("One call triggers mobilization. Your requirements: craft, count, and start date route directly to our verified crews. No hand-offs. No escalations. Just boots on the ground in minutes."), with "02 Cleared to count", "03 Proven field match" and "04 Seamless arrival" collapsed below it. The mood is calm and clinical: soft blues, very tight display type, almost no ornament, and short imperative sentences in the voice of an operations team.

## Colors
The site's CSS declares named variables, read from `:root`:
- `primary` #050419 (`--color-dark` and `--color-text`): a near-black navy, used for headings, the primary button fill, nav text and the footer background.
- `on-primary` #fcfcfc (`--color-text-light`, `--color-bg`): the light text on navy and the page's main light ground. `bg` #fcfcfc is the largest measured background area (6094 weighted), against #050419 at 1405.
- `canvas` #d0e1eb: the measured background of the captured screen (the sky-blue field). `bg-alt` #d9e8f1 (`--color-bg-alt`) is the site's declared alternate blue ground.
- `ink` #585765 (`--color-text-muted`): body copy, the most-read text color (2424 weighted characters).
- `text-disabled` #8c8c95 (`--color-text-disabled`) and `border` #e6e6e8 (`--color-border`, the one measured border color) for quiet elements.
- `highlight` #3932DC (`--color-highlight`): the declared brand blue; the cobalt pictogram in the capture is drawn in this family of blue.
- `dark-alt` #373647 (`--color-dark-alt`, also `--color-border-dark`).

Palette logic: navy and off-white do the structural work; blue grounds set the mood; the saturated blue is reserved for the symbol.

## Typography
One family: Roboto, loaded at weights 400 and 500 (3336 weighted characters, all Roboto). Display type is tightly tracked and tightly leaded:
- `display` 96px/500, line-height 86.4px, letter-spacing -5.76px (h1 "The New Standard").
- h2 64px/500, line-height 64px, letter-spacing -3.2px; there is also an 80px size (`--text-2xl`) and 48px with -2px, 36px with -1.44px.
- `subheading` 24px/500, line-height 28.8px, with -0.96px tracking on the measured text.
- `body` 18px/400, line-height 27px (the dominant size, 2424 weighted characters).
- `button` 14px/400, 19.6px, 0.28px tracking, uppercase.
- `nav` 12px/400, 12px, 0.72px tracking, uppercase.

The variable names `--leading-tight` (.9) and `--leading-snug` (1.2), `--tracking-tightest` (-3.2px) and `--tracking-tighter` (-1.44px) show the scale is token-driven. `display-mobile` is 64px/57.6px with -2px tracking, the h1 measured at the mobile viewport.

## Layout
The header is 80px tall (`--header-height`) with four uppercase links, "OUR INDUSTRIES", "OUR MISSION", "APPLY", "REQUEST CREWS". The h2 box measures 1200px wide on a 1280px page, giving 40px gutters. Content is left-aligned in a narrow reading column (the paragraph box is 544px wide); the orbital diagram spans nearly the full width. Gaps measured: 20px (18 uses), 24px, 48px, 10px, 96px, 40px, 64px; paddings: 48px (12 uses), 24px, 16px, 128px, 40px, 18px, 192px, 120px. The spacing tokens `s1`-`s10` carry these values. Section spacing is large, with 128px to 192px paddings between blocks.

## Elevation & Depth
No elevation: `boxShadows` is empty. The extraction recorded translucent navy fills `#0504191a` (10%) and `#05041933` (20%) as the only layered backgrounds, plus the white 01 tile on the blue ground. The orbital ellipses are dotted hairlines, not shadows. Depth in the design comes from scroll-driven animation (the capture is mid-animation), not from stacking effects.

## Shapes
Radii measured on rendered elements: 156px (`--radius-full`, 4 elements: the pill buttons), 12px (`--radius-md`), 6px, and 24px; the CSS also declares `--radius-sm` 2px. In the frontmatter: `xs` 6px, `sm` 12px, `md` 24px, `lg` 156px. Buttons are full pills; the "01" tile in the capture is a rounded square; the cards and tiles use the 12px to 24px range. Ellipses and a circle appear as dotted outlines in the illustration.

## Components
- **Primary button** (`button-primary`): "EXPLORE OUR INDUSTRIES", 225x48, fill #050419, text #fcfcfc, Roboto 14px uppercase, 0.28px tracking, padding 0 24px, radius 156px.
- **Secondary button** (`button-secondary`): "REQUEST CREWS", 161x48, fill #fcfcfc, text #050419, same type, padding and radius.
- **Nav link** (`nav-link`): 135x44, "OUR INDUSTRIES", Roboto 12px uppercase 0.72px, text #050419, padding 16px.
- **Step item**: a numbered tile (white rounded square with "01"), a 24px/500 heading and an 18px muted paragraph, a vertical hairline at the left of the open step; closed steps show only a number and a 14px label.
- **Footer** (`footer`): fill #050419, text #fcfcfc, big 36px/500 links ("Our Industries", "Our Mission", "Apply") at -1.44px tracking and "© 2026 Vectr, Inc." plus privacy links.
- **Logo mark**: the cobalt arrow-and-dots pictogram.

The extractor's `nav` transform (a translateY matrix of -80px) is a hide/reveal animation state and is not a design value; it is dropped.

## Design System Architecture
No public Vectr design system or brand guidelines were found among the pages opened for this document; none is cited. The shipped CSS has a clear token layer on `:root`: `--color-*` (bg, bg-alt, bg-muted, text, text-muted, text-subtle, text-disabled, text-light, border, border-dark, dark, dark-alt, highlight), `--text-*` sizes (`--text-lg` 24px, `--text-2xl` 80px), `--leading-*`, `--tracking-*`, `--space-xs` 12px, `--radius-sm/md/full` (2px/12px/156px), `--btn-height` 40px, `--header-height` 80px and `--ease-default` cubic-bezier(.25, 1, .5, 1). Source: measured page https://www.vectrfl.com/ via `web/data/extracted/vectr.json`.

## Do's and Don'ts
Do
- Set display type in Roboto 500 with tracking near -6% of the size and line-height near 0.9.
- Use pill buttons in navy or off-white with 14px uppercase labels.
- Keep a navy/off-white structure and let one cobalt symbol carry the brand blue.
- Write short, imperative copy.

Don't
- Don't add shadows or gradients; none were measured.
- Don't use the `--btn-height` 40px for the main buttons; the measured ones are 48px tall.
- Don't copy the hidden-nav transform into component specs.
- Don't use bold weights above 500; only 400 and 500 were measured.

## Responsive Behavior
The mobile pass recorded: h1 64px/500, line-height 57.6px, -2px tracking, in a 251px-wide box; the h2 32px/32px with -1.5px tracking in a 342px-wide box; body 16px/22.4px (desktop 18px/27px); the first CTA is full-width, 342x48, labelled "REQUEST CREWS" in the same 14px uppercase style; the header measures 64px tall at 390px wide with 18px nav text and 1.08px tracking. Mobile size ranking: 16px, 18px, 20px, 32px, 17px, 14px, 11px, 64px. Breakpoints and the menu pattern were not measured.

## Iteration Guide
1. Set primary #050419, on-primary #fcfcfc, ink #585765, canvas #d0e1eb.
2. Build the hero with a 96px/86.4px Roboto 500 headline at -5.76px tracking.
3. Add pill buttons 48px tall with 24px side padding.
4. Place a dotted orbital diagram and a single #3932DC-family symbol on the blue ground.
5. Lay out steps as numbered tiles with 24px headings.
6. Run `node web/scripts/verify-designs.mjs --slug=vectr`.
