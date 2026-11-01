---
version: alpha
name: Naive UI
category: "Frontend Frameworks"
description: "Naive UI (Vue 3): white canvas with one green #18a058 primary, three-step gray text (#1f2225, #333639, #767c82), 3px radii, v-sans body and Metropolis 80px hero wordmark, medium controls 34px and large 40px, flat 1px-bordered surfaces."
colors:
  canvas: "#ffffff"
  ink: "#333639"
  primary: "#18a058"
  on-primary: "#ffffff"
  surface-subtle: "#fafafc"
  ink-strong: "#1f2225"
  ink-muted: "#767c82"
  ink-faint: "#c2c2c2"
  hairline: "#e0e0e6"
  primary-hover: "#36ad6a"
  primary-pressed: "#0c7a43"
  info: "#2080f0"
  warning: "#f0a020"
  error: "#d03050"
  divider: "#efeff5"
typography:
  display:
    fontFamily: Metropolis, sans-serif
    fontSize: 80px
    fontWeight: 500
    lineHeight: 80px
  display-mobile:
    fontFamily: Metropolis, sans-serif
    fontSize: 64px
    fontWeight: 500
    lineHeight: 64px
  body:
    fontFamily: v-sans, system-ui, -apple-system, "system-ui", "Segoe UI", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 25.6px
  button:
    fontFamily: v-sans, system-ui, -apple-system, "system-ui", "Segoe UI", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 15px
  input:
    fontFamily: v-sans, system-ui, -apple-system, "system-ui", "Segoe UI", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 34px
  button-medium:
    fontFamily: v-sans, system-ui, -apple-system, "system-ui", "Segoe UI", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
  docs-title:
    fontFamily: v-sans, system-ui, -apple-system, "system-ui", "Segoe UI", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 30px
    fontWeight: 500
    lineHeight: 48px
rounded:
  xs: 3px
  pill: 9999px
  tiny: 2px
spacing:
  s1: 10px
  s2: 12px
  s3: 18px
  s4: 20px
  s5: 32px
  s6: 36px
  s7: 56px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 18px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 34px
  button-medium:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-medium}"
    rounded: "{rounded.xs}"
    padding: 0px 14px
    height: 34px
  button-error:
    backgroundColor: "{colors.error}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-medium}"
    rounded: "{rounded.xs}"
    padding: 0px 14px
    height: 34px
  button-warning:
    backgroundColor: "{colors.warning}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-medium}"
    rounded: "{rounded.xs}"
    padding: 0px 14px
    height: 34px
  button-info:
    textColor: "{colors.info}"
    typography: "{typography.button-medium}"
    rounded: "{rounded.xs}"
    height: 34px
  demo-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    borderColor: "{colors.divider}"
---

## Overview

Naive UI is a Vue 3 component library; the README (opened) describes it as "A Vue 3 Component Library" with more than 90 treeshakable components and a type-safe theme system. This file covers the **docs/landing site** (naiveui.com, captured at desktop width, page title "Naive UI: A Vue 3 Component Library") and the **component theme** the library ships, measured on the Button, Input and Card docs pages and cross-checked against the library's own source files on GitHub (`src/_styles/common/light.ts` and `_common.ts`).

The landing page is white (`{colors.canvas}`) and quiet. The hero is a centred stack: a very large "Naive UI" wordmark in Metropolis at 80px, weight 500, the line "A Vue 3 Component Library", a bold-weight tagline "Fairly Complete, Theme Customizable, Uses TypeScript, Fast", the line "Kinda Interesting", then two buttons: a white "Change Theme" button with a pale border and a filled green "Get Started" button (`{colors.primary}`, `#18a058`). On both sides of the hero, large rounded capsule shapes in green, amber, blue and red, with small pill and dot accents, supply the only colour variety on the page. Below is a very pale gray footer band (`{colors.surface-subtle}`, `#fafafc`) with four link columns: Resources, Help, Community, Contact Us.

**Key Characteristics:**
- One green, `{colors.primary}` (`#18a058`), is both the brand colour and the library's primary and success colour (source: `primaryColor` and `successColor` are the same value in `light.ts`).
- Four semantic colours measured on the Button page: success (green), warning (`{colors.warning}`), error (`{colors.error}`), info (`{colors.info}`).
- Tiny radii: 3px on buttons and cards, 2px on smaller elements; the library's `_common.ts` sets `borderRadius` to 3px and the small radius to 2px.
- Fixed control heights: 34px for the medium size (`heightMedium`), 40px for large (the hero button is 40px tall), as listed in `_common.ts`.
- Text colours step through three grays: `{colors.ink-strong}` (`#1f2225`), `{colors.ink}` (`#333639`), `{colors.ink-muted}` (`#767c82`), matching `textColor1`, `textColor2`, `textColor3` in the source.
- Weight vocabulary is small: 400 regular and 500 "strong"; body paragraphs on the landing page use 500.
- Header is 64px high (`--header-height` root variable) with a logo, Home, Docs, Components, a search field, a language switch (中文), Dark, GitHub, and the version number.

## Colors

> **Source pages:** `/` (landing, measured), `/en-US/os-theme/components/button`, `/input` and `/card` (measured as extra pages); `src/_styles/common/light.ts` and `_common.ts` in github.com/tusen-ai/naive-ui (opened).

### Brand & Accent
- **Primary** (`{colors.primary}` - `#18a058`): filled primary button, active nav item ("Home" is green in the capture), focus/selected accents. `primaryColor` in `light.ts`.
- **Primary Hover** (`{colors.primary-hover}` - `#36ad6a`): hover fill measured on the hero button; `primaryColorHover`.
- **Primary Pressed** (`{colors.primary-pressed}` - `#0c7a43`): `primaryColorPressed` in `light.ts`. Cited from the source file; not seen at rest.

### Semantic
- **Info** (`{colors.info}` - `#2080f0`), **Warning** (`{colors.warning}` - `#f0a020`), **Error** (`{colors.error}` - `#d03050`): measured as the fills of the "Info/Warning/Error" buttons on the Button docs page and listed as `infoColor`, `warningColor`, `errorColor` in `light.ts`. Success equals primary.
- Secondary buttons use a tinted fill: hover measured as the semantic colour at 16% opacity going to 22% (for example primary `rgba(24, 160, 88, 0.16)` to `0.22`).

### Surface
- **Canvas** (`{colors.canvas}` - `#ffffff`): page, card and modal background (`bodyColor`, `cardColor`, `modalColor` are `#fff` in the source).
- **Surface Subtle** (`{colors.surface-subtle}` - `#fafafc`): footer band in the capture.
- **Hairline** (`{colors.hairline}` - `#e0e0e6`): borders on inputs and buttons (the most frequent border colour on the Input page); `borderColor` in the source is `rgb(224, 224, 230)`.
- **Divider** (`{colors.divider}` - `#efeff5`): lighter dividers and demo-card borders; `dividerColor` in the source.

### Text
- **Ink Strong** (`{colors.ink-strong}` - `#1f2225`): headings.
- **Ink** (`{colors.ink}` - `#333639`): body text.
- **Ink Muted** (`{colors.ink-muted}` - `#767c82`): tertiary text.
- **Ink Faint** (`{colors.ink-faint}` - `#c2c2c2`): a lighter gray seen among the text colours on the Input page; its role (for example placeholder) was not isolated in the measurement.

## Typography

### Font Family
Loaded fonts on the landing page: Metropolis 600, v-sans 400 and 500. By character count v-sans carries 350 and Metropolis 8 (the hero wordmark). The library's stack, from `_common.ts`, is `v-sans, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif, "Apple Color Emoji", ...`; monospace is `v-mono, SFMono-Regular, Menlo, Consolas, Courier, monospace`. Line height is 1.6 and the size scale is 12px (mini/tiny), 14px (small/medium), 15px (large), 16px (huge).

### Hierarchy

| Token | Size | Weight | Line Height | Use |
|---|---|---|---|---|
| `{typography.display}` | 80px | 500 | 80px | Landing wordmark (Metropolis) |
| `{typography.display-mobile}` | 64px | 500 | 64px | Same at the mobile viewport |
| `{typography.docs-title}` | 30px | 500 | 48px | Docs page title (for example "Button") |
| `{typography.body}` | 16px | 500 | 25.6px | Landing paragraphs |
| `{typography.button}` | 15px | 400 | 15px | Large button (landing) |
| `{typography.button-medium}` | 14px | 400 | 14px | Medium button (docs demos) |
| `{typography.input}` | 14px | 400 | 34px | Text input value |

### Note on Font Substitutes
v-sans and Metropolis are loaded by the site; if unavailable, the library's own fallback is the system UI stack above. This file does not state which typeface v-sans is built from, because none of the opened sources say.

## Layout

- Header height 64px. Landing content is a single centred column with decorative shapes at both edges.
- The footer is a four-column link grid on `{colors.surface-subtle}` above a centred line "Naive UI 2.45.3 · Made by TuSimple".
- Control heights from the library: mini 16px, tiny 22px, small 28px, medium 34px, large 40px, huge 46px (`_common.ts`).

### Spacing System
Tokens are the paddings and gaps measured on the landing page: 10px, 12px, 18px, 20px, 32px, 36px, 56px. Button horizontal padding measured 18px on the large button and 14px on the medium button.

## Elevation & Depth

Almost flat. Measured shadows: `rgba(0,0,0,0.12) 0 2px 8px` (a floating panel), `rgba(0,0,0,0.06) 0 2px 4px`, and `rgba(0,0,0,0.3) 0 1px 4px` with a faint inset. Buttons and cards carry no shadow at rest; separation comes from 1px borders in `{colors.hairline}` or `{colors.divider}`.

## Shapes

- `{rounded.xs}` 3px: buttons, inputs, demo cards (most frequent radius on all measured pages).
- `{rounded.tiny}` 2px: smaller elements (second most frequent on the Input and Card pages; the library's small radius).
- `{rounded.pill}` 9999px and 50%: circular dots; larger radii (11px, 17px) appear on a few elements and are not tokens.
- The decorative hero capsules are fully rounded shapes; they are artwork, not components.

## Components

### Buttons
- **button-primary** (landing): `{colors.primary}` fill, `{colors.canvas}` text, 15px/400, 3px radius, padding 0 18px, height 40px; hover `{colors.primary-hover}`.
- **button-medium** (docs): same fill, 14px/400, padding 0 14px, height 34px.
- **button-error / button-warning**: same geometry with `{colors.error}` / `{colors.warning}` fills.
- **button-info**: `{colors.info}` text on a tinted background (16% fill).
- Default and tertiary buttons: transparent-looking fill `rgba(46,51,56,0.05)` going to 0.09 on hover, text `#333639` / `#767c82`.
- The "Change Theme" hero button is a white button with a pale border.

### Inputs
**text-input**: 14px, text `{colors.ink}`, 34px tall (medium size). `{colors.hairline}` was the most frequent border colour on the Input page.

### Cards
**demo-card**: the docs page wraps each example in a white container with a 1px `{colors.divider}` border and 3px radius. This describes the docs-site container, not the Card component's own theme.

### Navigation and footer
Plain text nav links on white, active item in green; footer on `{colors.surface-subtle}` with `{colors.ink}` links.

## Design System Architecture

- Naive UI's [README](https://raw.githubusercontent.com/tusen-ai/naive-ui/main/README.md) (opened) states a type-safe theme system that needs no CSS preprocessors, and links a Sketch design library.
- Token source: [`light.ts`](https://raw.githubusercontent.com/tusen-ai/naive-ui/main/src/_styles/common/light.ts) defines the colour set (primary, info, success, warning, error each with Hover, Pressed and Suppl variants; text 1/2/3; border, divider, card, modal and body colours) and [`_common.ts`](https://raw.githubusercontent.com/tusen-ai/naive-ui/main/src/_styles/common/_common.ts) defines fonts, sizes, radii (3px / 2px), heights and easing curves. Component themes such as `button/styles/light.ts` derive from those common values, mapping heights and font sizes directly and pointing every button radius at the common radius.
- The landing hero carries a "Change Theme" button, and the tagline lists "Theme Customizable".
- The measured landing page defines a single root variable (`--header-height: 64px`); the component styles are generated at runtime rather than shipped as a CSS variable layer.

## Do's and Don'ts

### Do
- Use `{colors.primary}` for the single main action per area and `{colors.canvas}` text on it.
- Keep radii at 3px (2px for small elements).
- Use the three-step gray text scale and 1px hairlines for structure.
- Keep medium controls at 34px height and large at 40px.

### Don't
- Do not add shadows to resting buttons or cards.
- Do not use heavier than weight 500.
- Do not introduce a second brand colour; info, warning and error are status colours.

## Responsive Behavior

The extractor also measured a mobile viewport: the hero wordmark drops from 80px to 64px (`{typography.display-mobile}`). Other mobile adaptations were not measured in this pass.

## Iteration Guide

1. Start with white, `{colors.ink}` text and one `{colors.primary}` button.
2. Pull colours from the status set only when expressing state.
3. Match control heights to the library scale before adjusting padding.
4. Measure any new component on its docs page before adding a token (docs deep links return a 404 status but render client-side).
5. Re-run `node web/scripts/verify-designs.mjs --slug=naive-ui`.
