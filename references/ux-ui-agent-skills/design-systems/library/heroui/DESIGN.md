---
version: alpha
name: HeroUI
category: "Frontend Frameworks"
description: 'HeroUI (formerly NextUI) v3 marketing site: a light #f5f5f5 canvas with white #ffffff surfaces, Inter 700 headlines at 48px with -1.2px tracking, a single azure #0485f7 accent on fully rounded 24px buttons, 12px fields and 24px cards on faint layered shadows.'
colors:
  canvas: "#f5f5f5"
  ink: "#18181b"
  primary: "#0485f7"
  on-primary: "#fcfcfc"
  surface: "#ffffff"
  surface-tertiary: "#ebebec"
  ink-muted: "#71717a"
  accent-text: "#1e63ae"
  headline-soft: "#a1a1afb3"
  accent-text-soft: "#4e75a5"
  hairline: "#dddee0"
  danger: "#ff383c"
  pro-black: "#000000"
  ink-docs: "#737373"
typography:
  display:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 48px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
    letterSpacing: "-0.75px"
  subheading:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  input:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 20px
  3xl: 24px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 0px 16px
    height: 36px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.lg}"
    padding: 8px 12px
    height: 36px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.04) 0px 2px 4px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px, rgba(0, 0, 0, 0.06) 0px 0px 1px 0px
  card:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    rounded: "{rounded.3xl}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.04) 0px 2px 4px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px, rgba(0, 0, 0, 0.06) 0px 0px 1px 0px
  footer:
    textColor: "{colors.ink-muted}"
    padding: 12px 0px
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 0px 16px
    height: 36px
    borderColor: "{colors.hairline}"
  button-danger:
    backgroundColor: "{colors.danger}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 0px 16px
    height: 36px
  button-pro:
    backgroundColor: "{colors.pro-black}"
    textColor: "{colors.surface}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 0px 16px
    height: 36px
---

# HeroUI

## Overview

HeroUI (formerly NextUI; the footer of the captured page still reads "(c) 2026 NextUI Inc.") is a React and React Native component library. The project README describes version 3 as built on React Aria for accessibility and Tailwind CSS v4 for styling with no CSS-in-JS runtime, a compound component API (`Card.Header`, `Card.Content`) and no provider wrapper (https://github.com/heroui-inc/heroui). Its marketing site is the library's best demo: a soft grey page on which the components themselves are the hero image.

The captured home page (1280px) starts with a slim bar on `{colors.canvas}` (#f5f5f5): a "hero" logotype at left, text links (Docs, Themes, Components, React Native, Blog, Roadmap with an external-arrow), and right-aligned round icon buttons (search, sparkle, a Theme pill, a light / dark / system segmented switch, a language toggle and a pill showing the GitHub star count, 30.9k at capture time). Under it a pale-blue version pill reads "HeroUI React v3.2.6 - React Aria 1.21.1", then a two-line 48px headline, "Beautiful by default." in near-black over "Customizable by design." in a faded grey, then an 18px grey sentence and two buttons: a solid azure "Get started" and a white "View components".

Below the hero is a rounded outer frame filled with a live collage of components: a tab pill row (including Chat, Finances and CRM), a colour-swatch row (pink, red, orange, yellow, green, cyan, blue, violet) for theme choice, an avatar stack, a six-box one-time-code entry ("Verify account"), a matrix of "Click me" buttons in blue, red, soft red and ghost variants, an account-creation card with Google and Apple sign-in buttons, a profile card for @hero_ui, two community cards, an "Upgrade" credits notice, a notifications switch, an unsaved-changes dialog and a price slider. A floating "HeroUI Pro" promo card with a pastel gradient header sits over the left edge and a round azure sparkle launcher floats at the right.

**Key characteristics**
- Light neutral canvas `{colors.canvas}` with pure-white `{colors.surface}` cards that separate through shadow rather than borders.
- One accent, `{colors.primary}` (#0485f7), with `{colors.danger}` (#ff383c) as the only other saturated UI colour.
- Inter throughout; hierarchy through size and weight 500/600/700, with negative tracking on display sizes.
- Generous, friendly rounding: 24px on buttons and cards, 12px on fields, full circles on avatars and icon buttons.
- Dense, playful product collage with realistic microcopy ("Resend", "Got it", "Save changes").

### Imagery, art direction and voice
- No photography: imagery is live UI, plus small avatar tiles (gradient orbs in the stack, a photo of a person and a cactus-in-pot tile on the community cards) and brand-coloured icon tiles.
- The theme row of eight colour dots (pink, red, orange, yellow, green, cyan, blue, violet) advertises customisation without leaving the page.
- Microcopy is warm and concrete: "Start your free 7-day trial. No credit card required.", "Didn't receive a code? Resend", "You have 2 credits left - Get a paid plan for more credits", "Do you want to save or discard changes?".
- The headline voice is a two-part promise (default quality, then customisability) with a parallel structure and a full stop on each line.
- Density is high but even: every card follows the same gutters and radii, so the collage reads as a system rather than a pile.

## Colors

Measured on the home page and on the Button docs page (`web/data/extracted/heroui--button.json`).

### Surfaces
| Token | Hex | Role |
|---|---|---|
| `canvas` | #f5f5f5 | page and nav background (largest area on the home page) |
| `surface` | #ffffff | cards, dialogs, fields, white buttons |
| `surface-tertiary` | #ebebec | pill tracks, segmented controls, secondary fills (third largest background) |
| `hairline` | #dddee0 | outline-button border and frame lines |
| `pro-black` | #000000 | the "Explore Pro" button |

### Text
| Token | Hex | Role |
|---|---|---|
| `ink` | #18181b | headlines, labels, nav links |
| `ink-muted` | #71717a | body copy, captions, footer |
| `ink-docs` | #737373 | grey text on docs pages (measured on the Button page, 1,200+ characters) |
| `headline-soft` | #a1a1afb3 | the faded second line of the h1 (a1a1af at 70% alpha) |
| `accent-text` | #1e63ae | deep-blue text measured on the home page |
| `accent-text-soft` | #4e75a5 | lighter blue text measured alongside it |
| `on-primary` | #fcfcfc | text on azure and red buttons |

### Action and status
- `primary` #0485f7: solid buttons ("Get started", "Click me", "Save changes"), the switch, the slider fill and the launcher.
- `danger` #ff383c: the red "Click me" button, destructive actions ("Delete file").
- Hover on the primary button is a 10% mix toward the foreground colour (the shipped `--color-accent-hover` is `color-mix(in oklab, accent 90%, foreground 10%)`).

### Variables and modes
The shipped CSS defines semantic variables (`--accent`, `--default`, `--danger`, `--success`, `--surface`, `--field-shadow`, `--shadow-overlay`...) in lab() notation, and the official theme file defines light and dark sets in OKLCH. For example light `--background: oklch(0.9702 0 0)` and `--muted: oklch(0.5517 0.0138 285.94)`; dark `--background: oklch(12% 0.005 285.823)` and `--surface: oklch(0.2103 0.0059 285.89)` (https://raw.githubusercontent.com/heroui-inc/heroui/v3/packages/styles/themes/default/variables.css). Only the light set is represented in the tokens here, because the capture is the light theme.

### Colour rules
- Reserve azure for the single main action in a view; use `surface-tertiary` or an outline for secondary actions.
- Use `danger` only for destructive intent, with its soft tint for secondary destructive buttons.
- Keep text on `canvas` at `ink` or `ink-muted`; do not use `headline-soft` for anything smaller than a headline.

## Typography

Single family: Inter (loaded as a variable face, weights 100 to 900, with a metric fallback "Inter Fallback"), via the stack `Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif`.

| Token | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|
| `display` | 48px | 700 | 48px | -1.2px | h1, 1.0 line-height |
| `display-mobile` | 30px | 700 | 36px | -0.75px | h1 at 390px |
| `body` | 18px | 400 | 28px | normal | hero paragraph |
| `nav` | 16px | 600 | 24px | normal | logo link and nav links |
| `subheading` | 14px | 500 | 24px | normal | card titles ("Create an account") |
| `button` | 14px | 500 | 20px | normal | buttons on the Button docs page |
| `input` | 14px | 400 | 20px | normal | text fields |

- Sizes by character count on the home page: 16px (largest), 14px, 12px, 18px, 48px.
- Weights: 400 (about 1,700 characters), 500, 600, 700. Only the h1 uses 700.
- Small text carries slight negative tracking in places (-0.35px at 14px and -0.27px at 18px measured).
- The headline sets line height equal to size (48/48), a tight two-line block; the second line is dimmed rather than recoloured.
- Code samples on docs pages use a monospace stack (`--font-mono`: ui-monospace, SFMono-Regular, Menlo...) with GitHub-style syntax colours (#032f62, #d73a49, #24292e, #6f42c1), which are code highlighting and not part of the brand palette.

### Font substitutes
Inter is open source; no substitute is needed. If it cannot load, `ui-sans-serif, system-ui` retains the metrics closely enough; keep the 48px h1 at weight 700.

## Layout

- Desktop capture at 1280px. The nav bar is 56px tall on `canvas`.
- Hero content is centred in a column about 560 to 720px wide; the collage below fills a wide rounded frame.
- Docs pages use a 1120px container (`--spacing-fd-container: 1120px` in the shipped CSS).
- The collage is a masonry-like grid of cards with equal gaps; most gaps measured are 8px (93 occurrences), 4px, 12px, 6px, 32px, 16px and 40px.
- Paddings used most: 16px, 8px, 4px, 12px, 6px, 24px, 20px; the content area of docs examples uses 40px.
- Base spacing unit is 0.25rem (`--spacing: .25rem`) as in Tailwind v4.
- Footer: a single centred line, 12px vertical padding, "(c) 2026 NextUI Inc. All rights reserved." followed by About, Contact, Privacy and X, Discord, GitHub icons.

## Elevation & Depth

HeroUI depth is a family of three small shadow recipes, all very low opacity.

- **Surface / field shadow** (cards, inputs, most components): `0 2px 4px 0 rgba(0,0,0,0.04), 0 1px 2px 0 rgba(0,0,0,0.06), 0 0 1px 0 rgba(0,0,0,0.06)`. This is the single most common shadow (21 uses). The shipped variables are `--shadow-surface` and `--field-shadow`.
- **Overlay shadow** (popovers): `rgba(0,0,0,0.02) 0 0 5px, rgba(0,0,0,0.06) 0 2px 10px, rgba(0,0,0,0.3) 0 0 1px`, with the shipped `--shadow-overlay` defined as `0 2px 8px 0 #0000000f, 0 -6px 12px 0 #00000008, 0 14px 28px 0 #00000014`.
- **Dialog / large float**: `rgba(0,0,0,0.1) 0 20px 25px -5px, rgba(0,0,0,0.1) 0 8px 10px -6px` (the Tailwind xl shadow) for modal-like cards.
- White cards on the `#f5f5f5` canvas give most of the separation; borders are rare (the outline button's 1px `{colors.hairline}`, the frame around the collage).
- The Pro promo uses a pastel blue-to-violet gradient header with blur; gradients are used for promotion only.

## Shapes

| Token | Value | Use |
|---|---|---|
| `xs` | 4px | small chips, keycap hints |
| `sm` | 6px | tiny controls |
| `md` | 8px | menu rows |
| `lg` | 12px | text inputs (the shipped `--radius-field` is 1.5 times the 0.5rem radius) |
| `xl` | 16px | medium cards |
| `2xl` | 20px | large inner panels |
| `3xl` | 24px | buttons, main cards, dialogs |
| `pill` | 9999px | avatars, icon buttons, switch, tabs |

The 24px radius is the dominant corner (55 occurrences), which makes standard buttons read as near-pills at their 36px height. The docs theming page describes a `--radius` base variable (listed as 0.75rem) with `--radius-xs` through `--radius-4xl` scaled from it; the shipped site CSS measured here has `--radius: .5rem`.

## Components

### Buttons (height 36px, padding 0 16px, 14px/500, radius 24px)
- **button-primary**: `{colors.primary}` fill, `{colors.on-primary}` text. "Get started", "Click me", "Save changes".
- **button-outline**: transparent with a 1px `{colors.hairline}` border and `{colors.ink}` text ("Outline", "View components" on white).
- **button-danger**: `{colors.danger}` fill, `{colors.on-primary}` text.
- **button-pro**: `{colors.pro-black}` fill with white text ("Explore Pro").
- Docs list variants Primary, Secondary, Tertiary, Outline, Ghost, Danger and Danger Soft in sizes `sm`, `md` (default), `lg`; BEM classes `.button--primary`, `.button--outline` and so on, state selectors `[data-hovered]`, `[data-pressed]`, `[data-focus-visible]`, `[data-pending]` (https://www.heroui.com/docs/react/components/button).
- A custom large button on the docs page is 44px high with 24px side padding and a full-pill radius.

### Text input
White `{colors.surface}` fill, `{colors.ink}` text, 14px/20px, 12px radius, 36px high, padding 8px 12px, the surface shadow recipe and no visible border.

### Card
`{colors.surface}` fill, 24px radius, the surface shadow, `{colors.ink}` text, interior padding 16 to 24px. Variants in the collage: account card with title, two lines of grey copy, a primary full-width button and two provider buttons; profile card; compact community cards with an avatar tile, title, "148 members" caption and a "By John" credit.

### Segmented control and tabs
Pill tracks on `{colors.surface-tertiary}` with a white active segment (1D / 7D / 1M / 1Y / All; Chats / Emails); top tab row in a rounded pill.

### Other pieces
- OTP input: six rounded white boxes with a separator.
- Avatar stack with a "+2" overflow chip.
- Switch: azure track, white knob.
- Slider: azure fill, white thumb, value ("$250.00") in the label row.
- Menu card: grouped rows with icon, title, grey description and keyboard shortcut at right; a red "Danger zone" group.
- Dialog: close icon button, icon tile, title, grey body, Discard and Save changes buttons.
- Pro promo: floating card with gradient header, a close glyph, bold title, grey copy, Close (outline) and Explore Pro (black).

## Design System Architecture

HeroUI is an open-source (Apache-2.0) component system; the repository is https://github.com/heroui-inc/heroui and the v3 packages are `@heroui/react` (everything), `@heroui/styles` (styles and theme only) and individual tree-shakeable packages (`@heroui/button`, `@heroui/modal`). The styles package contains `base/`, `components/` (one CSS file per component), `themes/`, `utilities/` and `variants/` folders (https://github.com/heroui-inc/heroui/tree/v3/packages/styles).

Theming (https://www.heroui.com/docs/react/getting-started/theming):
- CSS variables plus BEM classes on Tailwind CSS v4; base colour names are backgrounds (`--accent`) and `-foreground` suffixes are text colours (`--accent-foreground`).
- Semantic groups: background and foreground; surface and surface-foreground; overlay for floating elements; accent; status `--success`, `--warning`, `--danger`; field variables (`--field-background`, `--field-foreground`, `--field-placeholder`, `--field-border`); `--segment`; and structural `--border`, `--separator`, `--focus`, `--link`, `--muted`.
- Colours are authored in OKLCH; hover and soft variants are derived with `color-mix()`; base primitives such as `--white`, `--black`, spacing and typography do not change between themes.
- Radius is a single base value scaled into `--radius-xs` to `--radius-4xl`.
- The official light/dark file is `packages/styles/themes/default/variables.css` (raw link in the Colors section).

The measured site matches this system: the shipped CSS exposes `--accent`, `--default`, `--danger`, `--shadow-surface`, `--shadow-overlay`, `--field-shadow`, `--radius-field` and `--font-inter`. Docs pages for each component list props, BEM classes and state selectors, and a Pro tier ("Components, templates, and AI tooling for React and React Native") sits on top of the open-source layer.

## Do's and Don'ts

**Do**
- Put white cards on `#f5f5f5` and let a soft three-layer shadow do the separating.
- Round buttons and cards at 24px, fields at 12px, avatars and switches fully.
- Use Inter 700 with -1.2px tracking at 48px for the h1 and dim the second line for contrast.
- Keep one azure action per region, with outline or tertiary buttons beside it.
- Show components with realistic, friendly microcopy.
- Express state through `data-hovered`, `data-pressed`, `data-focus-visible`.

**Don't**
- Don't add borders to white cards on the grey canvas.
- Don't use `danger` red for non-destructive emphasis.
- Don't mix more than three radii in one cluster.
- Don't use weight 700 below the h1; use 500 and 600.
- Don't flatten the shadow recipe into one heavier shadow.
- Don't use gradients for UI chrome; they are reserved for the Pro promo.

## Responsive Behavior

- Measured at 1280px and 390px: the h1 drops from 48px/48px with -1.2px tracking to 30px/36px with -0.75px tracking.
- Only the h1 was measured at 390px; the remaining rules below are guidance for implementers, not measurements.
- Mobile nav layout was not measured.
- Reflow the component collage from masonry into a single column of cards; each card keeps its 24px radius.
- Button height stays 36px (44px for the large variant); touch targets should use the `lg` size.
- Keep floating promo cards and launchers docked to a viewport edge.
- Let dialogs and the account card fill the page gutter.

## Iteration Guide

1. Start with `canvas`, `surface` and `ink`; add azure only for the main action.
2. Set Inter 14px/500 for controls, 18px/28px for lead paragraphs and a 48px/700 h1 with -1.2px tracking.
3. Build cards at 24px radius with the three-layer surface shadow; fields at 12px radius.
4. Create variants: primary (azure), outline (hairline), danger (red), and a black promo button.
5. Use the official variable names (`--accent`, `--surface`, `--field-background`) when theming for real, and check the OKLCH values in the variables file.
6. For dark mode, take values from the official dark set rather than inverting these hex values.
7. Re-measure with `node web/scripts/extract-tokens.mjs --slug=heroui--button --url=https://www.heroui.com/docs/react/components/button --force`.
8. Run `node web/scripts/verify-designs.mjs --slug=heroui` before committing.
