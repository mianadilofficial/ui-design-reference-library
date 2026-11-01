---
version: alpha
name: usva
category: "Design Systems"
description: "usva (usva.build) design system site: a deep violet-black #0a0613 canvas, muted lavender #8b85a8 ink and a #a78bfa violet accent, set in Fira Sans 800 at 177.32px with -7.0928px tracking, glass-pill buttons with 16px radii and layered fog shadows."
colors:
  canvas: "#0a0613"
  ink: "#8b85a8"
  accent-green: "#52c989"
  on-primary: "#e6e3f2"
  surface-card: "#100b1f"
  surface-sunken: "#0c0719"
  primary: "#a78bfa"
  ink-bright: "#ddddf0"
  ink-soft: "#8282ab"
  hairline: "#221c30"
  button-primary-bg: "#ffffff0e"
  button-primary-border: "#ffffff1a"
typography:
  display:
    fontFamily: "\"Fira Sans\", \"Fira Sans Fallback\", system-ui, sans-serif"
    fontSize: 177.32px
    fontWeight: 800
    lineHeight: 159.588px
    letterSpacing: "-7.0928px"
  display-mobile:
    fontFamily: "\"Fira Sans\", \"Fira Sans Fallback\", system-ui, sans-serif"
    fontSize: 54.25px
    fontWeight: 800
    lineHeight: 48.825px
    letterSpacing: "-2.17px"
  heading:
    fontFamily: "\"Fira Sans\", \"Fira Sans Fallback\", system-ui, sans-serif"
    fontSize: 48px
    fontWeight: 800
    lineHeight: 48px
    letterSpacing: "-1.2px"
  subheading:
    fontFamily: "\"Fira Sans\", \"Fira Sans Fallback\", system-ui, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 28px
  body:
    fontFamily: "\"Fira Sans\", \"Fira Sans Fallback\", system-ui, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 29.25px
  button:
    fontFamily: "\"Fira Sans\", \"Fira Sans Fallback\", system-ui, sans-serif"
    fontSize: 15px
    fontWeight: 600
    lineHeight: 22.5px
    letterSpacing: "-0.15px"
  nav:
    fontFamily: "\"Fira Sans\", \"Fira Sans Fallback\", system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 800
    lineHeight: 12.04px
    letterSpacing: "-0.7px"
  link:
    fontFamily: "\"Fira Sans\", \"Fira Sans Fallback\", system-ui, sans-serif"
    fontSize: 15px
    fontWeight: 500
    lineHeight: 22.5px
    letterSpacing: "-0.15px"
  input:
    fontFamily: "\"Fira Sans\", \"Fira Sans Fallback\", system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 20px
  3xl: 24px
  4xl: 112px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 0px 24px
    height: 48px
    borderColor: "{colors.button-primary-border}"
  button-secondary:
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.xl}"
    padding: 0px 24px
    height: 48px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.xl}"
    padding: 0px 24px
    borderColor: "{colors.hairline}"
  nav:
    textColor: "{colors.on-primary}"
    padding: 28px 20px 0px
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 0px 20px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.input}"
    rounded: "{rounded.lg}"
    padding: 0px 12px
    height: 40px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    borderColor: "{colors.hairline}"
    boxShadow: rgba(255, 255, 255, 0.06) 0px 1px 0px 0px inset, rgba(0, 0, 0, 0.3) 0px 2px 6px 0px, rgba(255, 255, 255, 0.04) 0px 0px 0px 1px, rgba(0, 0, 0, 0.28) 0px 26px 90px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    borderColor: "{colors.hairline}"
---

## Overview

usva is the page title "usva. · Beautiful, usable React components" at https://usva.build, the documentation and showcase site of a React design system. This is the product being documented: the site is both the system's front door and its flagship demonstration, so what the capture shows is the system's "kajo" theme (the loud, glowing one). The hero sets an enormous heavy lowercase headline, "beauty that stays usable.", with "usable." in a violet gradient over a deep purple-black canvas that has soft purple fog curving through it. A pill-shaped floating navigation holds docs, design language, themes and studio, a search field sits at the left, and a theme switcher (kajo, sisu, savi) sits at the right.

Below the hero the page proves its claim with two framed application previews, one expressive (a personal website) and one dense and utilitarian (a university course tool), then a section on "core primitives" showing real form fields, chips, toggles and progress bars in cards. Copy is lowercase, confident and opinionated, with small monospaced eyebrow labels in wide letter-spacing ("the evidence", "recedes", "core · primitives").

## Colors

The canvas is `{colors.canvas}`, an almost black violet. Running text is `{colors.ink}`, a muted lavender grey, which is the most-read text colour on the page; brighter text uses `{colors.ink-bright}` and `{colors.on-primary}` (the text colour on the hero button), while `{colors.ink-soft}` is a dimmer lavender. The brand accent is `{colors.primary}`, a soft violet. It matches the custom property `--usva-accent` in the page's CSS variables, and is used for the "usable." headline, the primary action in the demo card, the toggle, the check-box and the progress fill. `{colors.accent-green}` is a second, secondary accent used in small status text and a progress bar. Surfaces: `{colors.surface-card}` for cards (matching `--usva-surface`), and `{colors.surface-sunken}` for recessed areas (matching `--usva-sunken`). Borders are `{colors.hairline}` (matching `--usva-border`).

The hero call-to-action is not a coloured fill: `{colors.button-primary-bg}` is white at very low opacity with a `{colors.button-primary-border}` hairline, so on a dark canvas it reads as a faint glass pill.

## Typography

Fira Sans carries everything but code; Fira Code is the monospace (the CSS variable `--font-mono` begins with Fira Code). The display is extreme: `{typography.display}` at 177.32px with line height 159.588px, weight 800 and letter-spacing -7.0928px, shrinking to 54.25px on a 390px viewport. Section headings are `{typography.heading}`: 48px, weight 800, letter-spacing -1.2px. Subheading and body are both 18px (600 and 400), the button label is 15px at weight 600, the navigation label 14px at 800, links 15px at 500, and form inputs 14px at 400. The design-language page describes the system's type as a single family at weight extremes, which matches what was measured: 800 for loud headlines, 400 for text.

### Font substitutes

Fira Sans and Fira Code are open fonts; no substitute is needed. If unavailable, use system-ui as in the declared fallback stack.

## Layout

The page is a dark, centred composition. The hero is wide and left-weighted, with the headline overlapping its own sub-copy (the big "usable." drops to the right on a second line). Sections below sit in a two-column grid for the two app previews, then a single-column intro for primitives followed by asymmetrically sized cards (one wide, one narrow). Thin horizontal rules with monospaced labels ("01" at left and "CORE · PRIMITIVES" at right) separate sections. Spacing tokens measured: `{spacing.s1}` to `{spacing.s10}` (2px to 28px in small steps), a compact scale suited to dense interfaces. The documentation describes space as a fluid rhythm that scales with container width rather than viewport width.

## Elevation & Depth

The system treats depth as atmosphere: the docs describe it as "elevation is weather, not z-index". On the page, cards carry a layered shadow: an inset white highlight, a tight dark shadow, a one-pixel faint white ring and a very large soft dark shadow (`rgba(0, 0, 0, 0.28) 0px 26px 90px 0px`). Borders in `{colors.hairline}` mark card edges. Fog-like purple gradients in the hero are the "atmosphere" layer, one of eight atmospheres the site advertises.

## Shapes

Radii: `{rounded.xs}` 2px (smallest, most frequent), `{rounded.sm}` 4px, `{rounded.md}` 8px, `{rounded.lg}` 12px (inputs), `{rounded.xl}` 16px (buttons and cards), `{rounded.2xl}` 20px, `{rounded.3xl}` 24px, `{rounded.4xl}` 112px and `{rounded.pill}` for navigation pills and chips. The vocabulary is generous: components are rounded in proportion to their size.

## Components

- **Primary button** (`button-primary`): 48px high, 24px horizontal padding, `{rounded.xl}`, label `{typography.button}` in `{colors.on-primary}` over `{colors.button-primary-bg}` with a `{colors.button-primary-border}` border; text reads "explore components →".
- **Secondary button** (`button-secondary`): same size, hairline border, label "the design language".
- **Text input** (`text-input`): 40px high, `{rounded.lg}`, canvas background, hairline border.
- **Nav link** (`nav-link`): pill shaped, 14px at weight 800.
- **Card** (`card`): `{colors.surface-card}` fill, `{rounded.xl}`, hairline border, layered shadow.
- **Chip, toggle, check-box, progress**: seen in the primitives demo; violet is used for selected state.
- **Footer** (`footer`): canvas background with a hairline top border.

## Design System Architecture

usva is itself the design system, so dsUrl https://usva.build is the real system and the measured site is built with it. I opened https://github.com/matt-pasek/usva: it describes packages `@usva-ui/react` (components) and `@usva-ui/tokens` (semantic roles, themes, DTCG exports), plus a CLI that builds a registry, a documentation app, Tailwind v4, and a licence of MIT with Commons Clause. The https://usva.build home page lists 79 components in tiers (36 primitives, 27 patterns, 6 "sula" accent components) plus 8 atmospheres and three themes: kajo, sisu and savi. The design-language page (https://usva.build/design-language) states role-based colour tokens ("never write hex values directly"), one family at weight extremes, container-based fluid spacing, four motion tiers with three easings, and an AA accessibility floor. The measured CSS variables confirm this vocabulary: `--usva-surface`, `--usva-accent`, `--usva-border`, `--usva-sunken`, `--usva-overlay`, `--usva-shadow-floating` and Tailwind-style `--text-*`, `--blur-*` variables. Values in the frontmatter come from my measurement of the live page, not from the token package.

## Do's and Don'ts

- Do reference colour by role (canvas, ink, primary, surface) and never hard-code hex in components.
- Do reserve the loud kajo treatment (huge weight-800 headlines, violet gradient, fog) for pages people look at once.
- Do keep primitives quiet: hairline borders, translucent buttons, rounded `{rounded.xl}`.
- Do set small monospaced uppercase eyebrow labels with wide letter-spacing.
- Don't use more than one accent family per view; green is secondary to violet.
- Don't add opaque bright button fills; the hero button is deliberately a faint glass pill.
- Don't use drop shadows without the inset highlight and ring.
- Don't treat the sisu or savi themes as measured here; only kajo was captured.

## Responsive Behavior

At 390px the display headline drops from 177.32px to 54.25px with line height 48.825px and letter-spacing -2.17px, preserving its tight proportions. The documentation says spacing scales with container size instead of viewport size, so components adapt inside narrow columns. Other breakpoints and mobile navigation were not measured and are omitted.

## Iteration Guide

1. Pick a theme first (kajo for display pages, sisu for dense tools); this page is kajo.
2. Start on `{colors.canvas}` with `{colors.ink}` text; add `{colors.primary}` only for the single focal word, selected state or primary action.
3. Use 800-weight tight-tracked Fira Sans for headlines and 400 for text.
4. Build cards with `{colors.surface-card}`, `{rounded.xl}`, hairline and the layered shadow.
5. Add atmosphere (fog gradients) behind the hero only.
6. Re-run the gate after any rename.
