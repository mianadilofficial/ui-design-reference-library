---
version: alpha
name: Park UI
category: "Headless UI"
description: "Park UI (park-ui.com) is a component library built on Ark UI and Panda CSS, and its site is a quiet neutral showcase - Outfit type at 60px/700 with -1.2px tracking, a near-white #fcfcfc canvas, black solid buttons (#000000) with 4px radii, #d9d9d9 hairlines, #646464 body text, and soft layered shadows on 6px cards."

colors:
  canvas: "#ffffff"
  page-body: "#fcfcfc"
  ink: "#646464"
  primary: "#000000"
  on-primary: "#ffffff"
  ink-strong: "#202020"
  ink-subtle: "#838383"
  hairline: "#d9d9d9"
  hairline-subtle: "#e8e8e8"
  surface-subtle: "#f9f9f9"
  surface-tint: "#0000000f"
  accent-blue: "#0090ff"
  error: "#e5484d"
  code-surface: "#191919"
  code-text: "#e6edf3"

typography:
  display:
    fontFamily: Outfit, "Outfit Fallback"
    fontSize: 60px
    fontWeight: 700
    lineHeight: 72px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: Outfit, "Outfit Fallback"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 44px
    letterSpacing: "-0.72px"
  heading:
    fontFamily: Outfit, "Outfit Fallback"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 32px
  heading-docs:
    fontFamily: Outfit, "Outfit Fallback"
    fontSize: 30px
    fontWeight: 600
    lineHeight: 38px
  subheading:
    fontFamily: Outfit, "Outfit Fallback"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 28px
  body:
    fontFamily: Outfit, "Outfit Fallback"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  button:
    fontFamily: Outfit, "Outfit Fallback"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
  input:
    fontFamily: Outfit, "Outfit Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px

rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  pill: 9999px

spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 14px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.ink-strong}"
  button-accent:
    backgroundColor: "{colors.accent-blue}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 14px
    height: 40px
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 14px
    height: 40px
    borderColor: "{colors.hairline}"
  text-input:
    textColor: "{colors.ink-strong}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 0px 12px
    height: 40px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0.09) 0px 8px 16px 0px, rgba(0, 0, 0, 0.09) 0px 0px 1px 0px
  preview-frame:
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.md}"
    borderColor: "{colors.hairline-subtle}"
  code-block:
    backgroundColor: "{colors.code-surface}"
    textColor: "{colors.code-text}"
    rounded: "{rounded.md}"
---

## Overview

Park UI's own site (https://park-ui.com, desktop capture at 1280px; component docs measured at /docs/components/button, input, card and badge) is the component library showing itself. The home page announces "Build your own Design System" with the line "Beautifully designed components built with Ark UI and Panda CSS that work with a variety of JS frameworks", then fills the rest of the screen with a tilted, overlapping grid of real component compositions: a sign-up form, notification toggles, a subscription card ($19 /month), a payment form, a product card ("New Balance 574", $79.99), a share-document dialog and a "Report an issue" form. A promo bar reads "Park UI x Chakra - It's official!" and the footer reads "(c) 2025 Chakra Systems. All rights reserved."

The documentation pages are a calm three-column layout (grouped sidebar, article, "On this page" rail) in the same neutral palette. Every demo sits in a bordered preview frame with a "Toggle code" footer, and installation blocks are dark code panels with a copy button.

**Key Characteristics:**
- Neutral, monochrome-first theme: the default palette is the "neutral" gray ramp with a black solid button; color appears only when a demo sets `colorPalette` (blue, green, yellow, red buttons on the Button page).
- One typeface: Outfit (variable, 100-900), at weights 400, 500, 600 and 700.
- Tight, small controls: 40px buttons and inputs with 4px radii; cards at 6px.
- Soft, layered shadows (`rgba(0, 0, 0, 0.09) 0px 8px 16px 0px, rgba(0, 0, 0, 0.09) 0px 0px 1px 0px`) on floating cards; 1px hairlines everywhere else.
- Content-as-hero: UI compositions rather than illustration or photography (only avatars and a small product element).
- Theme switch and framework switch (React, Solid) built into the chrome; Figma kit page listed in the docs.

## Colors

> Sources: measured on park-ui.com and its component docs; each neutral and blue value cross-checked against `packages/preset/src/theme/colors/neutral.ts` and `blue.ts` in https://github.com/chakra-ui/park-ui.

### Brand & Accent
- **Primary** (`{colors.primary}` - `#000000`): the neutral palette's `solid.bg` (light mode: `{colors.black}`) and the fill of "Create Account" and "Continue". Label `{colors.on-primary}` (`#ffffff`).
- **Primary Hover** (`{colors.ink-strong}` - `#202020`): the neutral `solid.bg.hover` is `gray.12`, `#202020`.
- **Accent Blue** (`{colors.accent-blue}` - `#0090ff`): `blue.9` in the preset; the first color-palette example button on the Button docs page.
- **Error** (`{colors.error}` - `#e5484d`): measured on the Input page as the invalid-field border; the preset sets `error` to `red.9`.

### Surface
- **Canvas** (`{colors.canvas}` - `#ffffff`): white cards, panels and the capture's most common background.
- **Page Body** (`{colors.page-body}` - `#fcfcfc`): the preset's `canvas`/`gray.1`; body background.
- **Surface Subtle** (`{colors.surface-subtle}` - `#f9f9f9`): `gray.2`; docs sidebar and "Toggle code" footers.
- **Surface Tint** (`{colors.surface-tint}` - `#0000000f`): `gray.a3`, the subtle variant background (search button, "Copy Page").
- **Code Surface** (`{colors.code-surface}` - `#191919`): code panels on the docs pages.

### Borders
- **Hairline** (`{colors.hairline}` - `#d9d9d9`): `gray.6`; outline buttons and inputs.
- **Hairline Subtle** (`{colors.hairline-subtle}` - `#e8e8e8`): `gray.4` (the preset's `border` alias); preview frames and dividers.

### Text
- **Ink** (`{colors.ink}` - `#646464`): `gray.11` / `fg.muted`; descriptions and most paragraph text.
- **Ink Strong** (`{colors.ink-strong}` - `#202020`): `gray.12` / `fg.default`; headings and labels.
- **Ink Subtle** (`{colors.ink-subtle}` - `#838383`): `gray.10` / `fg.subtle`; placeholders and tertiary text.
- **Code Text** (`{colors.code-text}` - `#e6edf3`): default text in dark code panels; syntax highlighting also uses `#ff7b72` (keywords), `#a5d6ff` (strings) and `#7ee787` (tags) as measured.

### Semantic
The preset's `theme/colors` folder holds 31 palette files (neutral, blue, red, and others), each with 12 steps, alpha steps and role slots (`solid`, `subtle`, `surface`, `outline`, `plain`), and light and dark values. The site itself exposes them all as `--colors-*` variables on `:root` (for example `--colors-neutral-11` is `#646464`).

## Typography

### Font Family
**Outfit** with `Outfit Fallback` is the only text family in the page's measurements (loaded as a variable font, 100-900). `Roboto Mono` is also loaded (weights 100-700) for monospace. Search results describe Outfit as an SIL Open Font License geometric sans-serif by Rodrigo Fuenzalida; the license text itself was not opened.

### Hierarchy

| Token | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 60px | 700 | 72px | -1.2px | Home h1 "Build your own Design System" |
| `{typography.display-mobile}` | 36px | 700 | 44px | -0.72px | h1 at 390px |
| `{typography.heading}` | 24px | 600 | 32px | normal | Demo card titles (e.g. "New Balance 574") |
| `{typography.heading-docs}` | 30px | 600 | 38px | normal | Docs page titles ("Button", "Input") |
| `{typography.subheading}` | 18px | 600 | 28px | normal | Card headings (e.g. "Sign Up") |
| `{typography.body}` | 20px | 400 | 30px | normal | Home intro paragraph |
| `{typography.input}` | 16px | 400 | 24px | normal | Input text |
| `{typography.button}` | 14px | 600 | 20px | normal | Buttons and small labels |

14px is the most-used size on the home page (1383 characters measured), followed by 16px, 20px, 18px and 60px. Docs pages add 12px and 13px for captions and sidebar items.

### Principles
- Headline tracking is -0.02em (60px at -1.2px, 36px at -0.72px), matching `textStyles` 4xl to 7xl in the preset, which set `letterSpacing: -0.02em` (https://github.com/chakra-ui/park-ui, `theme/text-styles.ts`).
- Text styles in the preset run from `xs` (0.75rem/1.125rem) to `7xl`, plus `label` (sm, weight medium).
- Weight 600 is the control and heading weight; 400 for paragraphs.

### Font substitutes
Outfit is open source and loaded from the site; Plus Jakarta Sans or Inter are plausible substitutes (a suggestion, not site policy).

## Layout

- **Header.** A single bar: "PARK UI" logo block (black rounded rectangle with white lettering and a small "UI" chip) at left, a wide search button ("Search..." with a command-K hint) centered, then Docs, Blog, Changelog and icon buttons (GitHub, a wand icon, theme toggle) separated by hairline dividers; the active "Docs" item has a black underline.
- **Home hero.** Headline, one-line description and "Get Started" button on top of a rotated (skewed) 3D-tilted grid of overlapping demo cards that bleeds off every edge. A "Make it yours" control with React and Solid switchers also appears on the home page.
- **Docs.** Left sidebar (groups: getting-started, buttons, data-display, disclosure, feedback, forms, layout, navigation, overlays, typography), centered article column, right "On this page" rail with mono uppercase labels.
- **Component demos.** Each section: heading, one-sentence description, a bordered preview frame (6px radius, `{colors.hairline-subtle}` border) with a "Toggle code" footer bar.
- **Spacing.** Frequent gaps 8px, 6px, 12px, 16px, 2px, 4px, 32px, 24px; frequent paddings 24px (cards), 12px, 14px, 16px - recorded as `{spacing.s1}` to `{spacing.s10}`.
- **Sizing from the preset.** Buttons are `h: 10` (40px) at `md`; sizes run `2xs` (h 6) to `2xl` (h 16) per `recipes/button.ts`.

## Elevation & Depth

Depth is soft and restrained:
- **Card shadow** (`{components.card}`): `rgba(0, 0, 0, 0.09) 0px 8px 16px 0px, rgba(0, 0, 0, 0.09) 0px 0px 1px 0px` (9 occurrences), the preset's `lg` shadow in light mode (`0px 8px 16px {gray.a4}, 0px 0px 1px {gray.a4}`; `gray.a4` is `#00000017`, 9%).
- **Small shadow:** `rgba(0, 0, 0, 0.15) 0px 1px 2px 0px, rgba(0, 0, 0, 0.192) 0px 0px 1px 0px`, the preset's `xs`.
- **Inset divider:** `rgb(232, 232, 232) 0px -1px 0px 0px inset` was measured on 6 elements (a 1px bottom line).
- Dark mode in the preset replaces shadows with an inset 1px ring and darker tokens.
- In the docs the demo preview frames use borders only, no shadow.

## Shapes

- `{rounded.sm}` (4px): buttons, inputs, search button and most controls (`l2` in the preset, which aliases the Panda `sm` radius).
- `{rounded.md}` (6px): cards and preview frames (`l3`, alias of Panda `md`).
- `{rounded.xs}` (2px): tiny elements (`l1`).
- `{rounded.lg}` (8px): measured on two elements.
- `{rounded.pill}` (9999px): measured on a few elements; the capture shows switches and round avatars.
- Segment groups and split buttons flatten inner corners (for example `0px 4px 4px 0px` on the right half of the "Copy Page" split button).

## Components

### Button
`{components.button-primary}`: black solid, white label, 14px/600, `{rounded.sm}`, 40px tall, 14px horizontal padding. Hover darkens to `{colors.ink-strong}`. The Button docs page shows five variants (Solid, Surface, Subtle, Outline, Plain), six sizes (2xs to 2xl per the recipe), icon buttons, a button group, loading and disabled states. Disabled uses the preset's `disabled` layer style (opacity 0.67, grayscale).

### Colored button
`{components.button-accent}`: the same recipe with `colorPalette` blue (`{colors.accent-blue}` fill); green, yellow and red variants appear in the Colors example.

### Outline / surface button
`{components.button-outline}`: transparent or white background, 1px `{colors.hairline}` border, `{colors.ink-strong}` label.

### Input
`{components.text-input}`: 40px tall, `{rounded.sm}`, 1px `{colors.hairline}` border, 12px padding, 16px text; invalid state switches border and focus ring to `{colors.error}`. Variants in the recipe: outline, surface, subtle, flushed; heights follow `--input-height`.

### Card
`{components.card}`: white, `{rounded.md}`, floating with the large shadow on the home grid. The card recipe offers `outline` (1px border), `elevated` (large shadow) and `subtle` (tinted) variants with header, body, footer, title (18px semibold) and description (muted, 14px) slots and 24px padding.

### Badge
Recipe: inline-flex, `l2` radius (4px), weight medium, tabular numerals, `xs` text (12px) with `md` height 20px and 8px horizontal padding; variants solid, surface, subtle (default), outline. The "New in stock" tag on the home product card is a subtle badge.

### Preview frame and code block
`{components.preview-frame}` wraps each docs demo; `{components.code-block}` is the dark install/usage panel with a copy icon.

### Navigation
Header bar with hairline-separated items; sidebar group labels in uppercase mono, active item with a tinted pill and black text.

## Design System Architecture

Park UI is itself a design-system distribution.

- **Stack.** Components are built with Ark UI (headless, https://ark-ui.com) and styled with Panda CSS recipes (https://panda-css.com); the repository README says "Beautifully designed components built with Ark UI and Panda CSS that work with a variety of JS frameworks" (https://github.com/chakra-ui/park-ui, MIT license).
- **Preset.** `@park-ui/preset` (`packages/preset/src/index.ts`) extends `@pandacss/preset-base` and `@pandacss/preset-panda` and adds: recipes and slot recipes (about 70 recipe files), text styles, layer styles, animation styles, keyframes, conditions, durations, z-index and color tokens, and semantic tokens for every palette. Semantic aliases: `fg.default`/`muted`/`subtle` (gray 12/11/10), `canvas` (gray 1), `border` (gray 4), `error` (red 9). Radii `l1`, `l2`, `l3` alias Panda `xs`, `sm`, `md`.
- **Color scheme.** Each palette defines 12 solid steps, 12 alpha steps and role slots (`solid`, `subtle`, `surface`, `outline`, `plain`) in light and dark; `html` sets `colorPalette: gray`, body uses `canvas` and `fg.default`; focus ring color is the palette's `solid.bg`.
- **Customization.** No customization API is documented here; consult the official Park UI documentation for how presets are configured, since this file records only measured values.
- **Distribution.** `npx @park-ui/cli add button` copies component source into the project (shown on the Button page); frameworks listed are React and Solid on the home page.
- **Docs and kit.** Docs pages cover Introduction, Installation, Theming, Migration, Figma Kit and About; a Figma kit exists per the docs navigation.
- **Ownership.** The site footer reads "Chakra Systems".

## Do's and Don'ts

### Do
- Do start from the neutral ramp and use black (`{colors.primary}`) as the single solid action color; introduce `colorPalette` accents deliberately.
- Do keep controls at 40px height with `{rounded.sm}` and 14px/600 labels.
- Do use `{colors.hairline}` for control borders and `{colors.hairline-subtle}` for frames and dividers.
- Do reserve layered soft shadows for floating cards and dialogs.
- Do show real, composed UI in hero areas.
- Do reference semantic tokens (`fg.muted`, `canvas`, `border`) rather than hex values.

### Don't
- Don't mix gray families on one surface; pick one gray palette.
- Don't use bold (700) outside the large display headline.
- Don't round buttons into pills; the pill radius is for switches and avatars.
- Don't add heavy borders or shadows to docs preview frames; they use a single 1px hairline.
- Don't use `#000000` for body text; paragraphs are `{colors.ink}` and headings `{colors.ink-strong}`.

## Responsive Behavior

- **Headline.** 60px at 1280px; 36px at 390px (`{typography.display-mobile}`).
- **Header.** On the 1280px capture all items fit; the markup includes framework and theme controls that remain icon-only buttons.
- **Docs.** Sidebar and "On this page" rail are desktop-only columns (not inspected at mobile width).
- **Breakpoints.** The site exposes Panda's breakpoint variable `--breakpoints-xl: 1280px` on `:root`.
- **Touch targets.** The default button and input height is 40px; the search button is 36px.
- **Theme.** A toggle switches light and dark; only light mode was measured.

## Iteration Guide

1. Canvas `{colors.page-body}` with `{colors.canvas}` surfaces; headings `{colors.ink-strong}`, copy `{colors.ink}`.
2. Primary action: `{components.button-primary}`; secondary: `{components.button-outline}`.
3. Inputs: `{components.text-input}`; errors via `{colors.error}`.
4. Floating cards: `{components.card}` with the 9% large shadow; inline frames: `{components.preview-frame}`.
5. Headlines in `{typography.display}` with -0.02em tracking; controls in `{typography.button}`.
6. Use `{colors.accent-blue}` or another palette only through `colorPalette`.
7. Voice: friendly and concrete product microcopy ("Create an account and discover the worlds' best UI component framework.", "We're here for you 24/7"), short imperative buttons.
