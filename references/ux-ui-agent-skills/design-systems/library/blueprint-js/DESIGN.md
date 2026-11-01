---
version: alpha
name: Blueprint
category: "Design Systems"
description: "Blueprint is Palantir's open-source React UI toolkit for dense desktop apps: system font stack at 14px, #2d72d2 primary blue buttons 30px tall with 4px radius, #111418 dark and #f6f7f9 light canvases, 4px spacing grid, 600 headings, ring-style shadows."

colors:
  canvas: "#111418"
  ink: "#f6f7f9"
  primary: "#2d72d2"
  on-primary: "#ffffff"
  primary-hover: "#215db0"
  primary-active: "#184a90"
  surface-hover-dark: "#404854"
  ink-on-dark-muted: "#ffffffb3"
  link-dark: "#8abbff"
  ink-light: "#1c2127"
  ink-muted-light: "#5f6b7c"
  surface-light: "#ffffff"
  canvas-light: "#f6f7f9"
  success: "#238551"
  danger: "#cd4246"
  warning: "#c87619"
  warning-surface: "#fbb360"
typography:
  display:
    fontFamily: -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", blueprint-icons-16, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 33.6px
  display-mobile:
    fontFamily: -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", blueprint-icons-16, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 43.2px
  heading:
    fontFamily: -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", blueprint-icons-16, sans-serif
    fontSize: 28px
    fontWeight: 600
    lineHeight: 32px
  subheading:
    fontFamily: -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", blueprint-icons-16, sans-serif
    fontSize: 16.38px
    fontWeight: 400
    lineHeight: 21.0616px
  body:
    fontFamily: -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", blueprint-icons-16, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.573px
  button:
    fontFamily: -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", blueprint-icons-16, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.0013px
rounded:
  xs: 4px
  pill: 30px
spacing:
  s1: 4px
  s2: 8px
  s3: 16px
  s4: 20px
  s5: 60px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 4px 8px
    height: 30px
    boxShadow: oklch(0.999994 0.0000497986 23.7884 / 0.1) 0px 0px 0px 1px inset, oklch(0.189828 0.00940823 none / 0.2) 0px 1px 2px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-default:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.ink-light}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 4px 8px
    height: 30px
  button-success:
    backgroundColor: "{colors.success}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 4px 8px
    height: 30px
  button-danger:
    backgroundColor: "{colors.danger}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 4px 8px
    height: 30px
  button-warning:
    backgroundColor: "{colors.warning-surface}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 4px 8px
    height: 30px
  tag:
    textColor: "{colors.ink-light}"
    rounded: "{rounded.pill}"
    height: 20px
  nav:
    textColor: "{colors.ink-light}"
  nav-link:
    textColor: "{colors.ink-on-dark-muted}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 4px 16px
  footer:
    textColor: "{colors.ink}"
---

## Overview

Blueprint is Palantir's open-source React UI toolkit, and what its site presents is the toolkit itself: a two-act homepage and a documentation site that doubles as the live specimen of every component. The product is not a brand campaign. It is a set of dense, desktop-first controls, and the visual language reads accordingly: a neutral blue-grey gray scale, one confident blue (`{colors.primary}`, #2d72d2) for the primary intent, flat 4px-radius controls with a hairline inset ring, and a system-font stack.

Two surfaces are measured, and they behave differently:

- **Homepage** (dark). The top half is a deep blue field with an engineering-drawing grid, faint wireframes of components (inputs, checkboxes, switches, sliders) and the Blueprint cube logo in red, blue and green. The title "Blueprint" is centered at 28px / 400, followed by "A React-based UI toolkit for the web" and two plain links, "Documentation" and "GitHub". The lower half drops to near-black `{colors.canvas}` (#111418) with the Palantir mark, the sentence "Blueprint is an open source project developed at Palantir.", "We're hiring designers and engineers!", a single `{colors.primary}` button labelled "View openings", and a footer line "© 2014-2026 Palantir Technologies" beside "Licensed under Apache-2.0" with the license link in the light-blue `{colors.link-dark}` (#8abbff).
- **Docs** (light). A white sidebar with the package list (Blueprint, Core, Datetime, Icons, Select, Table, Labs) and version numbers, a page canvas of `{colors.canvas-light}` (#f6f7f9), white example panels, near-black text `{colors.ink-light}` (#1c2127), a blue announcement banner across the top, and a "Dark theme" toggle in the sidebar. Headings are 600 weight, body copy 14px.

The brand's own description (from the docs) is that Blueprint "is optimized for building complex data-dense interfaces for desktop applications". That one sentence explains the metrics: a 30px control height, a 4px grid, 14px body text, and a tiny radius.

Voice is documentation voice: imperative, specific, and technical ("Import React components from the appropriate package", "Install it with your Node.js package manager of choice"). Component descriptions explain intent: Primary indicates the main action, Success a positive outcome, Warning a potentially dangerous action, Danger a destructive one.

## Colors

All hex values below are either measured on blueprintjs.com or published in the official repo (`@blueprintjs/colors` `_colors.scss` and the core design tokens, `--bp-*` CSS variables), per SOURCES.json.

### Intent colors (semantic, identical in light and dark)

| Token | Hex | Role |
| --- | --- | --- |
| `{colors.primary}` | #2d72d2 | Primary intent; solid button fill (`--bp-intent-primary-rest`, palette blue 3) |
| `{colors.primary-hover}` | #215db0 | Hover fill (`--bp-intent-primary-hover`) |
| `{colors.primary-active}` | #184a90 | Pressed fill (`--bp-intent-primary-active`) |
| `{colors.success}` | #238551 | Success intent (green 3) |
| `{colors.danger}` | #cd4246 | Danger intent (red 3) |
| `{colors.warning}` | #c87619 | Warning intent (orange 3), used as warning text and rest |
| `{colors.warning-surface}` | #fbb360 | The measured warning button fill (orange 5) with dark text |

The design-token README states that intent tokens "do not change between light and dark themes": the same blue is the primary in both. Theme adjustment happens at the surface layer.

### Gray scale

The repository defines a 5+5 gray scale around a black of #111418: dark gray 1 to 5 (#1c2127, #252a31, #2f343c, #383e47, #404854), gray 1 to 5 (#5f6b7c, #738091, #8f99a8, #abb3bf, #c5cbd3), light gray 1 to 5 (#d3d8de, #dce0e5, #e5e8eb, #edeff2, #f6f7f9) and white. The grays carry a faint blue cast, which is why the dark theme reads as slate rather than neutral black.

Used on the site:

- `{colors.canvas}` (#111418): the dark homepage lower field and the repo's black.
- `{colors.ink}` (#f6f7f9): text on dark.
- `{colors.ink-on-dark-muted}` (#ffffffb3): white at 70% for secondary text on the blue hero.
- `{colors.surface-hover-dark}` (#404854): dark-gray 5, the default-intent hover tone.
- `{colors.canvas-light}` (#f6f7f9): the docs page background; `{colors.surface-light}` (#ffffff) is the example and card surface.
- `{colors.ink-light}` (#1c2127): body and heading text in light theme; `{colors.ink-muted-light}` (#5f6b7c) for muted text (`--bp-typography-color-muted`).
- `{colors.link-dark}` (#8abbff): blue 5, the dark-theme link color.

### Extended palette

Beyond the four intents the library ships five-step scales for vermilion, rose, violet, indigo, cerulean, turquoise, forest, lime, gold and sepia. They are for data visualization and tagging, not for chrome; none appears in the measured UI chrome.

### Layers

Surfaces carry subtle tints rather than new fills: `--bp-surface-layer-color-*` tokens are intent colors at about 5% opacity (for example `#2d72d20d` for primary), composited as a gradient layer over any background. The docs callouts shown in the capture (blue "Blueprint v6.x is now available", beige deprecation notice) use this tint approach.

### Color rules observed

- One saturated blue does all primary work; the other three intent colors only appear with a semantic reason.
- Text in light theme is never pure black; in dark theme never pure white (the maximum is #f6f7f9).
- Disabled uses the lighter variants of each intent (for instance `--bp-intent-primary-disabled` #4c90f0).

## Typography

Blueprint uses no web font. The measured stack is the system font stack: `-apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", blueprint-icons-16, sans-serif`. The final named family, `blueprint-icons-16`, is the icon font, listed so inline icons render in text. Monospace is the generic `monospace`.

### Measured styles

| Role | Token | Size / line | Weight | Where |
| --- | --- | --- | --- | --- |
| Landing title | `{typography.display}` | 28px / 33.6px | 400 | Homepage "Blueprint" |
| Mobile landing title | `{typography.display-mobile}` | 36px / 43.2px | 400 | Measured at 390px |
| Docs section heading | `{typography.heading}` | 28px / 32px | 600 | Docs h2 ("Quick start") |
| Tagline | `{typography.subheading}` | 16.38px / 21.0616px | 400 | Homepage tagline |
| Landing body | `{typography.body}` | 16px / 20.573px | 400 | Homepage text |
| Button | `{typography.button}` | 14px / 18.0013px | 400 | All buttons |

The mobile title being larger than the desktop one is a measurement of the live page and is kept as measured.

### Published scale

The core tokens publish a fuller ladder: display heading 46px, x-large 28px, large 24px, medium 20px, small 16px; body large 16px, medium 14px, small 12px, x-small 10px; code 12px, 13px, 14px. Weights are 400 (default) and 600 (bold). Line height is 1.28581 by default (a deliberate value that makes 14px text compute to just over 18px) and 1.5 for large text. The docs page h1 measures 36px / 40px at weight 600, and its body text 14px / 18.0013px.

### Typography rules

- Body is 14px, not 16px, in the application chrome; 16px appears on the marketing page.
- Bold is 600, never 700.
- Headings keep tight line heights (about 1.14 at 28px / 32px).
- Code is monospace at 12 to 14px inside a tinted inset panel with a copy button.

### Font substitutes

None needed: the stack is already system fonts. To approximate on platforms with unusual defaults, `Inter` at weight 400/600 is the closest widely available match to the rendering on macOS.

## Layout

- **Docs shell.** A fixed left sidebar of about 300px at the capture scale (white background, a 1px right border) and a content column that stops near 570px on the right edge of the 960px capture, i.e. a readable measure of roughly 70 characters. A blue announcement bar spans the full width above both.
- **Spacing unit.** The published spacing token is 4px (`--bp-surface-spacing`), and all measured spacing follows multiples of it: `{spacing.s1}` 4px, `{spacing.s2}` 8px, `{spacing.s3}` 16px, `{spacing.s4}` 20px, and a 60px section gap (`{spacing.s5}`).
- **Example panels.** White rectangles on the gray canvas with the component centered, a toolbar of three small icon buttons below it (view in sandbox, fullscreen, copy), then a code block. The repeating rhythm is heading, description, example, code.
- **Card grid.** The docs landing page shows four equal cards in a row (Getting started, Git repository, Code Sandbox, Contributing), each with a large blue-grey icon above a blue label.
- **Homepage.** Single centered column: logo, title, tagline, link pair; then a second centered column on the dark field. The wireframe backdrop is decorative and runs full bleed.
- **Z-index tokens.** 0, 10, 20, 30 and 40 for base, content, overlay, dialog header and above.

## Elevation & Depth

The elevation ladder is published as five light-theme shadows and five dark-theme shadows. Every light shadow begins with a 1px, 10 to 15% black ring (an outline rather than a blur), then adds one or two soft drops:

- Level 0: `0px 0px 0px 1px rgba(0,0,0,.15), 0px 0px 5px 0px rgba(0,0,0,.02)`, used on the docs example panels (measured).
- Level 1: ring plus `0px 1px 3px 0px` and `0px 1px 2px -1px`, for cards.
- Level 2: ring plus `0px 4px 6px -4px` and `0px 10px 15px -3px`, for popovers.
- Level 3: ring plus `0px 20px 25px -5px` and `0px 10px 15px -3px`, for dialogs.
- Level 4: ring plus `0px 25px 50px -12px` at 30% black, the highest.

Dark theme swaps the outer ring for an inset white ring at 20% and adds a 0.5px highlight on top, so floating layers look edge-lit on dark slate rather than shadowed.

Buttons use two inset/offset shadows instead of elevation: a 1px inset ring and a 1px lower shadow (the measured solid primary button), and outlined controls use `rgba(17, 20, 24, 0.2) 0px 0px 0px 1px inset`. Depth in the controls is a hairline, not a lift.

Focus uses a 2px ring in the primary blue (`--bp-emphasis-focus-color` #2d72d2) offset by 2px.

## Shapes

- **Controls**: `{rounded.xs}` (4px) on buttons, inputs, example panels and sidebar items. The published `--bp-surface-border-radius` is 4px and measured radii are 4px on nearly every element.
- **Tags and version badge**: `{rounded.pill}` (30px, fully rounded), 20px tall. The "v6" selector in the docs sidebar is the measured example.
- **Border width**: 1px, drawn as an inset ring, not as a CSS border.
- **Icons**: 16px standard and 20px large; button icons are drawn in the muted gray, intent icons in the intent color.
- The cube logo and drawing-board grid are the only large-scale illustration; all UI geometry is rectilinear.

## Components

All measurements below were taken on the live docs "Buttons" page and homepage, with token values from the published scss.

### Button, solid primary

`{components.button-primary}`: `{colors.primary}` fill, white label, 14px text, 4px radius, 4px 8px padding, 30px height. Shadow is the two-part inset ring plus 1px drop. Hover fills `{colors.primary-hover}`.

### Button, default

`{components.button-default}`: white surface, `{colors.ink-light}` label, same 30px height and 4px radius, with the 1px inset ring as its only border. This is the "Click Me" and "Default" button in the capture.

### Button, intents

Success (`{components.button-success}`, #238551), Danger (`{components.button-danger}`, #cd4246) and Warning (`{components.button-warning}`, #fbb360 with #111418 text) share the same geometry. The docs page shows them side by side as Primary, Success, Warning, Danger.

### Button variants and sizes

Three variants: solid (default), minimal (no border or background), and outlined (ring only). The `minimal` and `outlined` boolean props are marked deprecated in favor of `variant` on the docs page. The scss defines minimum heights of 30px (default), 24px (small) and 40px (large); small padding is 0 8px, large padding 4px 16px, and large text is 16px.

### Text input

Same 30px height as the button (`--bp-input-height` equivalents in scss: 30px default, 40px large, 24px small), 4px radius, and an inset 1px ring that picks up an intent color on validation.

### Tag

`{components.tag}`: pill, 20px tall, tinted gray background. Hover deepens the tint from 15% to 30% alpha (measured).

### Callout

A tinted rectangle with an icon, title and description: blue for information, beige for deprecation, as seen in the capture.

### Cards

White (`{colors.surface-light}`), 1px ring shadow, 4px radius, centered icon above a blue text label (the four tiles on the docs landing page).

### Code block

Tinted inset panel (white at 70% opacity over the canvas), syntax-colored monospace at 12 to 13px, and an icon button for copy in the top-right.

### Navigation

Sidebar rows are 14px text with a leading 16px colored icon, a small gray version number right-aligned, and the active item in blue `{colors.primary}` with an icon chip. `{components.nav-link}` captures the homepage link color: white at 70%.

### Footer

`{components.footer}`: centered legal line and license link at the bottom of the dark homepage.

## Design System Architecture

Blueprint is itself a design system, open source under Apache-2.0 at github.com/palantir/blueprint, organized as a monorepo of packages: `core`, `colors`, `icons`, `datetime`, `datetime2`, `select`, `table`, `labs`, with docs and demo apps beside them.

- **Namespace.** All CSS classes are prefixed `bp6-` (the Sass variable `$ns: bp6`), and the namespace cannot be overridden because the JS components hard-code it.
- **Source of truth for color.** `@blueprintjs/colors` exports a Sass partial and a TypeScript `Colors` object with the same modern 4.x palette values; a deprecated legacy 3.x palette is kept alongside.
- **Design tokens.** Core ships experimental design tokens generated with Style Dictionary from DTCG-format JSON (`tokens/base/` for palette, intent, surface, typography and emphasis; `tokens/themes/` for dark overrides). They compile to `--bp-*` CSS custom properties on `:root`. Categories: palette, intent, surface, typography, iconography, emphasis. A derive extension transforms colors in OKLCH to produce state variants, which explains the `oklch(...)` values in the measured button shadows.
- **Layering.** Components reference intent and surface tokens (`--bp-intent-primary-rest`, `--bp-surface-background-color-default-rest`) rather than palette values, so themes remap at the surface layer.
- **Theming.** Dark mode is a class on an ancestor (`bp6-dark`); the docs expose it as a "Dark theme" toggle with a keyboard shortcut. Dark shadows and elevation values are separate from light ones in the Sass API.
- **Sizing.** The base unit is `$pt-spacing: 4px` (replacing the older 10px grid); font sizes are multiples (14px is 3.5 x 4), and control heights are 7.5 x 4.
- **Motion.** Default transition 100ms with easing `cubic-bezier(0.4, 1, 0.75, 0.9)` and a bounce variant `cubic-bezier(0.54, 1.12, 0.38, 1.11)`.
- **Docs as specimen.** Each component page follows the same structure: Usage, Examples, with interactive demos and code. This is the surface the component measurements came from.

Sources: https://github.com/palantir/blueprint (scss under `packages/core/src/common` and `packages/colors/src`), https://unpkg.com/@blueprintjs/core@6.20.0/src/design-tokens/README.md, and https://blueprintjs.com/docs/.

## Do's and Don'ts

Do:
- Use `{colors.primary}` for the single main action per surface; use default buttons for everything else.
- Pair intent with meaning: success for confirmation, warning for risky, danger for destructive.
- Keep controls at 30px high with a 4px radius and 14px text.
- Build on a 4px grid and keep copy to 14px in application chrome.
- Reference semantic tokens (`--bp-intent-*`, `--bp-surface-*`) so dark theme works for free.
- Use an inset 1px ring for control borders.

Don't:
- Don't use the extended palette (vermilion, rose, violet and so on) for chrome; it is for data.
- Don't set bold above 600.
- Don't round controls beyond 4px, except tags (30px pills).
- Don't add heavy shadows to controls; elevation belongs to floating layers.
- Don't recolor the primary blue per theme; intent colors stay constant across light and dark.
- Don't rely on the deprecated `minimal` / `outlined` boolean props; use `variant`.

## Responsive Behavior

Only one responsive fact was measured: at 390px the landing title measures 36px / 43.2px (`{typography.display-mobile}`), larger than at 1280px. Layout details at small widths were not measured. The library's own positioning is explicit that it targets desktop applications in modern browsers, so responsive guidance should be limited to: keep control heights and radii unchanged on narrow screens, and use the large control size (40px) when a touch target is needed, since the default 30px is a pointer-sized target.

## Iteration Guide

1. Choose the theme first: light (`{colors.canvas-light}` page, `{colors.surface-light}` panels, `{colors.ink-light}` text) or dark (`{colors.canvas}`, `{colors.ink}`).
2. Place one `{colors.primary}` solid button per view; everything else default or minimal.
3. Set controls to 30px / 4px radius / 14px text before touching color.
4. Add intents only where they carry meaning, and take the exact hex from the intent table.
5. Use the 4px grid for every gap; 8px between sibling controls, 16px between groups, 20px for panel padding, 60px between page sections.
6. For floating layers pick an elevation level (1 for cards through 4 for dialogs) and its dark equivalent.
7. Verify against the live docs page before changing a token; the measured values are in `web/data/extracted/blueprint-js*.json` and the published values are cited in `SOURCES.json`.
