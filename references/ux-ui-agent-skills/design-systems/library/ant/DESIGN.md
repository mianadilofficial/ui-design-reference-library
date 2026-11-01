---
version: alpha
name: "Ant Design"
category: "Frontend Frameworks"
description: "Ant Design (antd) is Alibaba's enterprise React design system: a white canvas with one brand blue #1677ff, alpha-black text (#000000e0 down to #00000040), 14px/22px base type in the system stack with AlibabaSans on the marketing site, 32px controls with 6px radius (8px on large buttons and cards), and a faint 2px offset button shadow."
colors:
  canvas: "#ffffff"
  ink: "#000000e0"
  primary: "#1677ff"
  on-primary: "#ffffff"
  surface-tint: "#f5f8ff"
  surface-footer: "#f0f3fa"
  ink-tertiary: "#00000073"
  ink-secondary: "#000000a6"
  error: "#ff4d4f"
  success: "#52c41a"
  warning: "#faad14"
  primary-tint: "#e6f4ff"
  ink-disabled: "#00000040"
  hairline: "#d9d9d9"
  primary-hover: "#4096ff"
typography:
  heading-docs:
    fontFamily: -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 38.7368px
  display:
    fontFamily: AlibabaSans, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 76px
    fontWeight: 900
    lineHeight: 92px
  heading:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: AlibabaSans, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 37.7143px
  button:
    fontFamily: AlibabaSans, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.1429px
  nav:
    fontFamily: >-
      Avenir, AlibabaSans, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji", sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 64px
    letterSpacing: "-0.18px"
  button-secondary:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.1429px
  input:
    fontFamily: AlibabaSans, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 20px
  3xl: 32px
  4xl: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 11px
  s9: 12px
  s10: 14px
components:
  button-default-size:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 0px 15px
    height: 32px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.hairline}"
    height: 32px
  tag:
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 0px 8px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 15px
    height: 40px
    boxShadow: rgba(5, 145, 255, 0.1) 0px 2px 0px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-default:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 15px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0.02) 0px 2px 0px 0px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    boxShadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px, rgba(0, 0, 0, 0.03) 0px 1px 6px -1px, rgba(0, 0, 0, 0.03) 0px 2px 4px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 0px 0px 40px
  search-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.2xl}"
    padding: 0px 12px 0px 32px
    height: 32px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-secondary}"
    boxShadow: rgba(0, 0, 0, 0.14) 0px 106px 36px -116px inset
---

# Ant Design

## Overview

Ant Design (antd) is Alibaba/Ant Group's open-source enterprise React design system, and ant.design is both its documentation site and its showcase. The product is the component library: the homepage (see the capture) is a pale, airy page whose gradient wash of lilac, pink and sky blue sits behind a centred 76px / weight 900 "Ant Design" wordmark, a 24px grey tagline ("AI friendly design system that combines beauty and intelligence, making work full of inspiration and joy."), and two buttons: a filled blue "Getting Started" and an outlined "Design Language".

Below the hero the page is a live demo of the library itself: a "Flexible theme customization" section with real inputs, selects, checkboxes, steps, progress bars, avatars and cards on a white canvas, then a horizontally scrolling "Rich components" carousel (Calendar, Tour, FloatButton, Splitter, Masonry). The microcopy is plain, product-oriented English ("Ant Design Pro V6 is out!", "Ant Design CLI is released", "Get Started", "Continue with Google") with a CJK language switch ("中") in the header.

The overall feeling is functional, dense-when-needed enterprise UI wrapped in a soft, friendly marketing shell: one saturated brand blue (#1677ff), neutral translucent black text, hairline #d9d9d9 borders, small radii (4 to 8px) on controls and larger radii (12 to 32px) on showcase panels.

Key characteristics:
- **One brand colour.** #1677ff ("Daybreak Blue" in the official palette) carries every primary action, link, focus ring and selected state.
- **Alpha-based neutrals.** Text is not a fixed grey but black at 88% (#000000e0), 65% (#000000a6), 45% (#00000073) and 25% (#00000040) alpha, so it adapts to any background.
- **14px base type** with 22px line height; 16px for buttons on the marketing hero; 32px/600 page titles in the docs.
- **6px default control radius**, 8px for large controls and cards; pills (9999px) and circles only for avatars, tags-as-chips and badges.
- **32px control height** as the unit for buttons, inputs and selects (40px for the large hero buttons).
- **Flat with a faint offset shadow.** Primary buttons carry a 2px-down tinted shadow rather than a blur.

## Colors

All hexes below were measured on ant.design (homepage and the component docs pages for button, input, select, tag, card) and cross-checked against the seed token file in the ant-design repository (`components/theme/themes/seed.ts`) and the colour spec at https://ant.design/docs/spec/colors.

### Brand and action
- **Primary** `{colors.primary}` (#1677ff): background of the "Getting Started" and docs "Primary" buttons, links, selected states. The seed token `colorPrimary` is '#1677ff'.
- **On primary** `{colors.on-primary}` (#ffffff): label colour on primary buttons.
- **Primary hover** `{colors.primary-hover}` (#4096ff): measured on the hero button after hover.
- **Primary tint** `{colors.primary-tint}` (#e6f4ff): the light blue background of selected/tag-like states on the docs pages.

### Neutrals
- **Canvas** `{colors.canvas}` (#ffffff): page and container background; the largest-area background on the homepage.
- **Surface tint** `{colors.surface-tint}` (#f5f8ff): the pale blue panel behind demo sections.
- **Surface footer** `{colors.surface-footer}` (#f0f3fa): footer and docs sidebar-grade surface, also the second most common docs background.
- **Ink** `{colors.ink}` (#000000e0): headings and body text. The official font spec lists "#000000E0" for both heading and body text.
- **Ink secondary** `{colors.ink-secondary}` (#000000a6): secondary text (spec: "Secondary Text #000000A6").
- **Ink tertiary** `{colors.ink-tertiary}` (#00000073): the hero tagline and placeholder-grade copy.
- **Ink disabled** `{colors.ink-disabled}` (#00000040): disabled text (spec: "Disabled Text #00000040").
- **Hairline** `{colors.hairline}` (#d9d9d9): default border (spec: "Default Border #D9D9D9").

### Functional
- **Error** `{colors.error}` (#ff4d4f): the Danger button, error states. Seed `colorError` is '#ff4d4f'.
- **Success** `{colors.success}` (#52c41a): measured as the tag border on the docs Tag page; seed `colorSuccess` is '#52c41a'.
- **Warning** `{colors.warning}` (#faad14): measured text colour on the homepage demo; seed `colorWarning` is '#faad14'.

### Decorative (not tokens)
The homepage hero uses soft pastel gradient blobs and a few saturated demo swatches (a violet #5939dc, a cyan #00d6ff, a magenta) that belong to illustrations, not to the interface palette, so they are intentionally not declared.

## Typography

The default font stack is the system stack from the seed token: `-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif` plus the three emoji faces. On the marketing homepage the display, body, button and input roles use **AlibabaSans** first (it loads as a web font; the other text falls back to the system stack).

| Role | Token | Size / weight / line | Notes |
|---|---|---|---|
| Hero wordmark | `{typography.display}` | 76px / 900 / 92px | "Ant Design" h1, AlibabaSans |
| Hero tagline | `{typography.body}` | 24px / 400 / 37.7143px | colour {colors.ink-tertiary} |
| Section title | `{typography.heading}` | 16px / 500 / 24px | "Resources" and similar h2s |
| Docs page title | `{typography.heading-docs}` | 32px / 600 / 38.7368px | h1 on component pages (Button, Input, Select, Tag, Card) |
| Button (hero) | `{typography.button}` | 16px / 400 / 25.1429px | 40px high buttons |
| Control text | `{typography.input}` | 14px / 400 / 22px | inputs, default-size buttons |
| Nav link | `{typography.nav}` | 18px / 700 / 64px, letter-spacing -0.18px | Avenir first |

The official spec (https://ant.design/docs/spec/font) states: base size 14px with 22px line height, ten font sizes derived from a pentatonic scale, recommended weights 400 for body, 500 for emphasis and 600 for bold English text. The measured most-used sizes confirm it: 14px dominates (2439 characters), then 16px, 20px, 24px, 38px, 12px and 13px.

### Font substitutes
AlibabaSans is served by the site; if it is unavailable, the system stack above renders the same metrics closely enough. There is no need to introduce another webfont.

### Principles
- Keep the type scale to three to five sizes per screen (the spec explicitly recommends restraint).
- Use alpha-black ink tokens instead of fixed greys.
- Reserve weight 900 for the hero wordmark only; docs titles use 600 and emphasis uses 500.

## Layout

- The page is centred, with the hero content spanning a 1186px text column inside a 1280px viewport in the measurement (about 47px side gutters).
- Header: 64px tall (nav link line-height 64px), logo and search on the left, nav links (Design, Development, Components, Blog, Resources), a version selector (6.6.5), theme/language/GitHub icons on the right. The nav bar has a layered soft shadow.
- Hero stack: wordmark, tagline, button pair, then three equal announcement cards with a small "HOT" ribbon.
- Showcase sections alternate centred 38px-class section titles with a grid of live components laid out in three columns.
- The "Rich components" band is a horizontal scroller of fixed-width demo cards that bleed off the viewport edge to signal more content.
- Spacing is a 4px grid: the measured paddings and gaps are 1, 2, 3, 4, 6, 7, 8, 11, 12 and 14px; seed `sizeUnit` is 4 and `sizeStep` is 4.
- Control height unit is 32px (`controlHeight`), large 40px.

## Elevation & Depth

Ant Design is mostly flat. Depth comes from three tiers:

1. **Button offset shadow.** Primary: `rgba(5, 145, 255, 0.1) 0px 2px 0px 0px`; default/outline: `rgba(0, 0, 0, 0.02) 0px 2px 0px 0px`. A faint hard 2px edge, no blur (these match the `primaryShadow`/`defaultShadow` tokens in `components/button/style/token.ts`).
2. **Header / card shadow.** `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px, rgba(0, 0, 0, 0.03) 0px 1px 6px -1px, rgba(0, 0, 0, 0.03) 0px 2px 4px 0px`.
3. **Popup shadow.** Dropdowns and modals use `rgba(0, 0, 0, 0.08) 0px 6px 16px 0px, rgba(0, 0, 0, 0.12) 0px 3px 6px -4px, rgba(0, 0, 0, 0.05) 0px 9px 28px 8px`.

Footers use an inset gradient shadow (`rgba(0, 0, 0, 0.14) 0px 106px 36px -116px inset`). Separators are #0505050f hairlines.

## Shapes

Radius scale (all measured): 4px `{rounded.xs}`, 6px `{rounded.sm}`, 8px `{rounded.md}`, 12px `{rounded.lg}`, 16px `{rounded.xl}`, 20px `{rounded.2xl}`, 32px `{rounded.3xl}`, 100px `{rounded.4xl}`, and `{rounded.pill}` for fully round shapes.

- The seed `borderRadius` is 6. The repo's `genRadius.ts` derives the rest from it: for a base of 6 the large radius is 8, the small radius is 4, the extra small is 2 and the outer radius is 4.
- Default controls (button, input, select) use 6px; large hero buttons and Card use 8px; Tag uses the small radius (4px) per `components/tag/style/index.ts`.
- Showcase panels use 12 to 32px; avatar and badge shapes use 50%.

## Components

### Buttons
- **Primary (hero):** `{components.button-primary}`: 40px high, padding 0 15px, 8px radius, 16px/400 label, #1677ff fill with white text, 2px tinted shadow.
- **Primary (docs default size):** `{components.button-default-size}`: 32px high, 6px radius, 14px label; this is the size shipped by default.
- **Hover:** fill shifts to {colors.primary-hover}.
- **Outlined/default:** `{components.button-default}`: white fill, {colors.hairline} border, ink label; the "Design Language" and "Cancel" buttons.
- **Danger:** outlined with {colors.error} border and text. The docs button page additionally shows dashed, text, link and gradient variants.

### Text input / Select
- `{components.text-input}`: 32px high, 6px radius, 14px/22px text, #d9d9d9 border; hover and focus borders turn to the primary blue (measured border colours include #1677ff and #ff4d4f for the error state). The site's header search box is a rounded variant: `{components.search-input}`, 20px radius with a 32px left padding for the magnifier icon.
- Select shares the input metrics and opens a popup with the popup shadow above.

### Tag
`{components.tag}`: 4px radius, 8px horizontal padding, small font size (`fontSizeSM`) with tinted preset backgrounds and borders (e.g. green tag border #52c41a4d).

### Card
`{components.card}`: white, 8px radius with the soft layered shadow; header weight is strong, header size is `fontSizeLG`, body padding is `paddingLG` (card style source). The homepage announcement cards add a "HOT" corner ribbon.

### Navigation and footer
`{components.nav}`: white bar with the layered shadow, 18px/700 links. `{components.footer}` uses {colors.surface-footer} with {colors.ink-secondary} text.

### Component state reference

| Component | Default | Hover | Notes |
|---|---|---|---|
| Primary button | fill #1677ff, white text | fill #4096ff | measured on the hero button before/after hover |
| Default button | white fill, #d9d9d9 border | not measured | 2px offset shadow rgba(0,0,0,0.02) |
| Danger button | white fill, #ff4d4f border | not measured | shadow rgba(255, 38, 5, 0.06) measured on the button page |
| Input | #d9d9d9 border, 6px radius | not measured | error border #ff4d4f measured |
| Tag | tinted preset fill with 4px radius | n/a | closable and checkable variants |
| Card | white, 8px radius | not measured | shadow `rgba(0, 0, 0, 0.06) 0px 2px 8px 0px` appears on the Card page |

### Imagery and illustration
- The homepage uses no photography. Imagery is the product itself: real components rendered at their default sizes, plus small brand logos in a "Sponsors" row (YouMind, TRACTIAN, LobeHub, CodeRabbit).
- Avatars are circular (50%) and overlap in a stack with a "+5" overflow chip.
- Pastel radial gradient blobs (lilac, pink, sky blue) float behind the hero and section transitions to add warmth without competing with the blue.
- Icons are outlined glyphs at roughly 14 to 16px, tinted with the current text colour.

### Microcopy voice
- Short, verb-first labels: "Getting Started", "Get Started", "Continue with Google", "Resend", "Cancel", "OK".
- Announcement cards use a bold one-line headline, one to three lines of description in {colors.ink-tertiary}, and an ISO date at the bottom (for example 2026-05-08).
- Badges are one word: "HOT", "Update", "New".

### Density
The measured docs pages are dense: 14px text at 22px line height inside 32px controls with 8 to 12px gaps. The marketing hero is the only place with generous air (24px copy, 40px buttons, wide section padding).

## Design System Architecture

Ant Design is the component library, so the system is defined in public source.

- **Docs and spec:** https://ant.design/docs/spec/colors (12 base palettes with ten shades; functional colours success, warning, error, info; neutrals via alpha) and https://ant.design/docs/spec/font (font family, 14/22 base, ten sizes, weights, text colours with light/dark values).
- **Customization:** https://ant.design/docs/react/customize-theme. Version 5 and later use CSS-in-JS design tokens passed via `ConfigProvider`'s `theme`; three preset algorithms (default, dark, compact).
- **Token layers:** Seed tokens (the root decisions, such as `colorPrimary`, `fontSize`, `borderRadius`, `sizeUnit`) produce Map tokens through algorithms, which produce Alias tokens; each component can then override its own component tokens. The seed file is https://github.com/ant-design/ant-design/blob/master/components/theme/themes/seed.ts: `colorPrimary: '#1677ff'`, `colorSuccess: '#52c41a'`, `colorWarning: '#faad14'`, `colorError: '#ff4d4f'`, `fontSize: 14`, `lineWidth: 1`, `borderRadius: 6`, `sizeUnit: 4`, `sizeStep: 4`, `controlHeight: 32`.
- **Neutral generation:** `components/theme/themes/default/colors.ts` computes text and fills as alpha of the base text colour: 0.88, 0.65, 0.45, 0.25 for text; 0.15, 0.06, 0.04, 0.02 for fills; border colours as solids derived from the background.
- **Radius generation:** `components/theme/themes/shared/genRadius.ts` (see Shapes).
- **Per-component tokens:** e.g. `components/button/style/token.ts` (font weight 400, shadows computed from outline tokens) and `components/tag/style/index.ts`, `components/card/style/index.ts`.

## Do's and Don'ts

### Do
- Use #1677ff for the single primary action on a view and white text on it.
- Express text hierarchy with the four alpha-black levels.
- Keep the 32px control height and 6px radius; step up to 40px / 8px for hero or large forms.
- Use 14px/22px as the base text pair.
- Use the tinted 2px offset shadow on buttons and the layered soft shadow on floating panels.
- Use the functional colours (success, warning, error) only for status.

### Don't
- Don't introduce a second brand hue next to the blue; the decorative pastel gradients are illustration only.
- Don't use fixed hex greys for text; they break on tinted surfaces.
- Don't use weight 900 outside the hero wordmark.
- Don't round standard controls past 8px; reserve pills for badges and avatars.
- Don't use blurred drop shadows on buttons.
- Don't mix more than five font sizes on one screen.

## Accessibility Notes

- The official font spec says text colours maintain contrast against their backgrounds (it cites WCAG AAA 7:1 for the neutral set); ink #000000e0 on #ffffff meets that comfortably.
- Disabled text (#00000040) is intentionally below normal contrast; never use it for information that must be read.
- Focus: seed token `focusOutline: true` enables a visible outline.
- Motion: the seed defines `motion: true` with named easings (for example `motionEaseOut: cubic-bezier(0.215, 0.61, 0.355, 1)`) and a `motionUnit` of 0.1; provide a reduced-motion path when copying.
- Dark mode is a first-class algorithm; the spec lists dark values for each text and border colour (for example heading #FFFFFFD9, default border #424242).

## Responsive Behavior

- The extraction recorded both desktop (1280px) and mobile viewports; the site is responsive and the docs mobile mode is reachable with a `?mobile` query.
- Mobile header and announcement card layout were not measured.
- The component showcase scrolls horizontally rather than reflowing.
- Control height stays 32px (touch-friendly large size is 40px); do not shrink it below that on mobile.
- Hero type scales down from 76px; keep the weight 900 and tight line height ratio (92/76).

## Iteration Guide

1. Start from the seed values: #1677ff, 14px, 6px radius, 4px size unit, 32px control height.
2. Derive neutrals as alpha black rather than picking greys.
3. Build the button first (32px, 6px radius, 2px tinted shadow), then input and select at the same height so they align in forms.
4. Add Card at 8px radius with the layered shadow and a strong 16px header.
5. For a marketing page, wrap the same components in a pastel gradient field and use a 76px/900 wordmark.
6. Check each addition against the colour spec (https://ant.design/docs/spec/colors) and the font spec before inventing a value.
7. For themes, override seed tokens only; let algorithms derive hover, active and disabled states.
