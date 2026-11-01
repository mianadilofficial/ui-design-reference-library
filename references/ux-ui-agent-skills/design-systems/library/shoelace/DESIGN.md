---
version: alpha
name: Shoelace
category: "Design Systems"
description: "Documentation site of the Shoelace web components library: white canvas, #18181b text on the system UI font stack, sky-blue #0284c7 primary button with 4px radius and 40px height, danger #dc2626, soft cool-gray shadows; a Web Awesome sunset modal overlays it."
colors:
  canvas: "#ffffff"
  ink: "#18181b"
  primary: "#0284c7"
  on-primary: "#ffffff"
  primary-deep: "#0369a1"
  primary-darker: "#075985"
  danger: "#dc2626"
  surface-subtle: "#f9f9f9"
  surface-info: "#e0f2fe"
  syntax-violet: "#6d28d9"
  syntax-blue: "#1d4ed8"
  hairline: "#d4d4d8"
  ink-muted: "#71717a"
typography:
  display:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 36px
  body:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28.8px
  button:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 14px
    fontWeight: 500
    lineHeight: 38px
rounded:
  xs: 3px
  sm: 4px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 28px
  s9: 32px
  s10: 36px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 40px
  button-danger:
    backgroundColor: "{colors.danger}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 40px
  link:
    textColor: "{colors.primary-deep}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink-muted}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(113, 113, 122, 0.12) 0px 4px 16px 0px
---

## Overview

Shoelace is a library of framework-agnostic web components, and https://shoelace.style is its documentation site. The site documents `<sl-button>`, `<sl-input>` and dozens of other custom elements, and the docs chrome is built from the same components and CSS custom properties. Note on the capture: on load the site shows its own modal, "Shoelace is now Web Awesome!", an orange panel with a crown icon, a "Migrate to Web Awesome!" button and a "No, thanks" link, over a dimmed page. The page below it is a left sidebar of links (Frameworks, Resources, Components), a script-style "Shoelace" logo, badges, and a "Quick Start" article. The modal's orange (#cd491c) and its "Migrate" button belong to the Web Awesome notice, not to the Shoelace docs UI, so they are not documented as Shoelace brand colors. A second run of the extractor with `--stealth` gave the same result, because the modal is the site's own notice rather than a bot challenge.

The visible docs surface is a quiet reading experience: white page, near-black text, sky-blue links and a blue "primary" button variant, light gray borders, monospace code samples with colored syntax, and a pale-blue callout with an "i" marker ("This will activate Shoelace's experimental autoloader...").

The homepage text states "Shoelace Is Sunset with no active development" and recommends Web Awesome for ongoing work, which means the system described here is frozen.

## Colors

`canvas` is {colors.canvas}; the docs content area sits on white and the sidebar on a slightly different gray. `ink` is {colors.ink}. `ink-muted` {colors.ink-muted} colors navigation text, and `hairline` {colors.hairline} draws dividers and input borders. `surface-subtle` {colors.surface-subtle} fills code-sample footers and the sidebar region; `surface-info` {colors.surface-info} fills the info callout with `primary-darker` {colors.primary-darker} text.

`primary` is {colors.primary}, the fill of the `variant="primary"` button measured on the button docs page, with white `on-primary` text; `primary-deep` {colors.primary-deep} is the in-page link color measured in the docs body. `danger` is {colors.danger}, the fill of the danger button variant. Two syntax colors, `syntax-violet` {colors.syntax-violet} and `syntax-blue` {colors.syntax-blue}, appear in code samples. The root stylesheet publishes full color scales under `--sl-color-*` (gray, red, orange, amber, yellow, lime, green, emerald, teal, cyan, sky, blue, indigo, violet, purple, fuchsia, pink, rose, plus semantic `primary`, `success`, `warning`, `danger`, `neutral`); `--sl-color-primary-600` resolves to `hsl(200.4 98% 39.4%)`, which is the sky-blue family used above.

## Typography

The page uses the system UI stack throughout: `-apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, sans-serif` with emoji fallbacks; no web font is loaded (the capture's loaded-font list is empty). Body text is 16px / 28.8px (line-height 1.8) at weight 400. The page h1, "Shoelace: A forward-thinking library of web components.", is measured at 20px / 36px weight 400. Buttons are 14px weight 500, with a 38px line height inside a 40px control. Code samples use a monospace stack (`SFMono-Regular, Consolas, "Liberation Mono", Menlo, monospace`).

### Font Substitutes

No custom typeface is used. The system stack renders as San Francisco on Apple devices, Segoe UI on Windows, and Roboto on Android; a fixed substitute is unnecessary.

## Layout

The docs have a fixed-width left sidebar (`--docs-sidebar-width: 320px`) and a content column with a maximum width of 860px (`--docs-content-max-width`) and a table-of-contents column up to 260px (`--docs-content-toc-max-width`). Content padding and vertical rhythm use 2rem (`--docs-content-padding`, `--docs-content-vertical-spacing`). Articles stack headings with thin bottom rules ("Quick Start", "New to Web Components?", "What Problem Does This Solve?"), paragraphs, bullet lists and live demos with a collapsible SOURCE panel. The spacing scale is measured from 2px to 36px.

## Elevation & Depth

Shadows are soft, cool and low-opacity. The card shadow measured on the page is `rgba(113, 113, 122, 0.12) 0px 4px 16px 0px`, which corresponds to the library's x-large shadow. The library's token set also defines x-small (`0 1px 2px` at 12%), small, medium and large shadows, all derived from the neutral gray hue. Modals dim the page with a 33% gray overlay (`--sl-overlay-background-color`). Focus is shown with a 3px ring (`--sl-focus-ring-width`) in the sky-blue primary.

## Shapes

Radii are small: 3px (`--sl-border-radius-small`) and 4px (`--sl-border-radius-medium`, also the large-input radius) cover almost every control; the library also defines 8px (large), 16px (x-large), 50% (circle) and 9999px (pill). The measured buttons and cards use 4px.

## Components

**Primary button.** `sl-button variant="primary"` renders as a 40px-tall control with {colors.primary} fill, white 14px / 500 text and a 4px radius; the inner `button` carries a 1px border in the same color.

**Danger button.** Same geometry with {colors.danger} fill.

**Default button.** On the Quick Start demo the "Click me" button is white with a gray border and dark text.

**Input.** `sl-input` has a 40px medium height (`--sl-input-height-medium: 2.5rem`) with a 1px `--sl-input-border-color`, 4px radius and sky-blue border on focus.

**Code demo panel.** A bordered box with the live component, a toolbar toggling HTML and React tabs, and a SOURCE toggle in 11.2px uppercase weight 500 text; the active tab uses {colors.primary} text in bold.

**Callout.** Pale-blue panel with a 4px left accent bar and a circular "i" icon.

**Sidebar.** Section titles with a bottom rule, then plain gray links.

## Design System Architecture

Shoelace's own docs (https://shoelace.style/getting-started/themes) say that themes are scoped to classes of the form `sl-theme-{name}`, with built-in `sl-theme-light` and `sl-theme-dark`, using CSS custom properties for design tokens covering typography, color, spacing, elevation, border radius and transitions. The dark theme is built by flipping the light theme's color scale (100 becomes 900, 200 becomes 800, and so on). The source of the light theme (https://github.com/shoelace-style/shoelace, `src/themes/light.css`) defines the values this file cites, such as `--sl-color-primary-600`, `--sl-border-radius-medium: 0.25rem` and `--sl-input-height-medium: 2.5rem`.

The docs site uses the library: the measured stylesheet contains hundreds of `--sl-*` variables, the page contains `sl-button` elements, and docs-specific variables prefixed `--docs-*` layer on top. The site's `dsUrl` is itself, and it is the real, in-use system. The homepage states that Shoelace is sunset in favor of Web Awesome, which is the next stage of the project; this file describes Shoelace as shipped, not Web Awesome.

## Do's and Don'ts

- Do compose UI from `--sl-*` tokens and scope custom themes to `sl-theme-{name}`.
- Do use {colors.primary} for the main action and {colors.danger} for destructive ones.
- Do keep corner radii at 3px to 4px for controls.
- Do keep body text {colors.ink} at 16px with generous 1.8 line height.
- Don't use the Web Awesome notice's orange as a Shoelace color.
- Don't load a web font; the system stack is the design.
- Don't use heavy or colored shadows; stay with the cool gray soft shadow.
- Don't treat the modal's "Migrate" button as the library's primary button.

## Responsive Behavior

The extractor measured a 390px mobile view, but the docs layout behavior (sidebar collapse, navigation toggle) was not opened or measured here, so it is not described. The layout tokens above define maximum widths (860px content, 320px sidebar), implying a fixed sidebar on wide screens.

## Iteration Guide

1. Start with {colors.canvas}, {colors.ink} and the system font stack at 16px.
2. For actions, copy `button-primary`: {colors.primary}, 14px / 500, 4px radius, 40px height.
3. Use `surface-info` and `primary-darker` for informational callouts.
4. Take new values only from the published `--sl-*` tokens or from measured demo pages.
5. Do not mix in Web Awesome tokens or its orange accent.
