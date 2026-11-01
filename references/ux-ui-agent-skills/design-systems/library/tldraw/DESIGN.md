---
version: alpha
name: tldraw
category: "Design & Creative Tools"
description: "tldraw (tldraw.com), \"very good free whiteboard\": an app-first page on a #f9fafb canvas with #fcfcfc floating panels, Inter 500–700 UI labels at 12px/19.2px in #1c1c1c, a #3182ed selection blue for the Sign in to share button and active tool, 9px–11px panel radii, layered tl-shadow-2 panel shadows and a 12-colour shape palette."
colors:
  canvas: "#f9fafb"
  ink: "#000000"
  primary: "#3182ed"
  on-primary: "#ffffff"
  panel: "#fcfcfc"
  low: "#edf0f2"
  text-0: "#1c1c1c"
  text-1: "#2e2e2e"
  text-3: "#6e7477"
  divider: "#e8e8e8"
  focus: "#2d67d2"
  palette-black: "#1d1d1d"
  palette-grey: "#9fa8b2"
  palette-light-violet: "#e085f4"
  palette-violet: "#ae3ec9"
  palette-blue: "#4465e9"
  palette-light-blue: "#4ba1f1"
  palette-yellow: "#f1ac4b"
  palette-orange: "#e16919"
  palette-green: "#099268"
  palette-light-green: "#4cb05e"
  palette-light-red: "#f87777"
  palette-red: "#e03131"
typography:
  display:
    fontFamily: Inter, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 19.2px
  button:
    fontFamily: Inter, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 12px
    fontWeight: 600
    lineHeight: 19.2px
  body:
    fontFamily: Inter, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 19.2px
rounded:
  xs: 2px
  sm: 9px
  md: 11px
  lg: 14px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
  toolbar-panel:
    backgroundColor: "{colors.panel}"
    textColor: "{colors.text-0}"
    boxShadow: rgba(0, 0, 0, 0.16) 0px 0px 2px 0px, rgba(0, 0, 0, 0.24) 0px 2px 3px 0px, rgba(0, 0, 0, 0.1) 0px 2px 6px 0px, rgb(255, 255, 255) 0px 0px 0px 1px inset
  tool-selected:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  sdk-banner:
    textColor: "{colors.text-0}"
    typography: "{typography.display}"
---

# tldraw

## Overview

tldraw.com (title "tldraw • very good free whiteboard") opens directly into the whiteboard app; there is no marketing page at the root. The measured viewport is 1280px × 800px of a pale `#f9fafb` canvas with the UI floating at the edges. At the top left: the tldraw logo (a black rounded square with a white exclamation-style mark) next to the lowercase bold wordmark "tldraw", and a vertical "…" page menu. At the top right: a share icon and a solid blue "Sign in to share" button. Below that, a white style panel shows the shape palette — a 4 × 3 grid of colour dots (black, grey, light violet, violet, blue, light blue, yellow, orange, green, light green, light red, red) — an opacity slider, fill styles, dash styles and size options "S M L XL", with "M" highlighted.

At the bottom centre sit a small action bar (undo, redo, delete, duplicate, comment, more) and the main toolbar: select (active, filled blue), hand, draw, eraser, arrow, text, note, media, rectangle and an expand chevron. The bottom left shows the zoom level ("100%") with a chevron; the bottom right a dashed-outline banner, "Build with the tldraw SDK →", with a close "×". The tone is minimal and utilitarian; the only colour in the interface is the selection blue, while the palette dots are drawing colours.

## Colors

tldraw's colours are published in its open-source editor stylesheet as HSL variables, and the measured values match them exactly.

- **canvas `#f9fafb`** — the canvas background, `--tl-color-background: hsl(210, 20%, 98%)`.
- **panel `#fcfcfc`** — floating panels, `--tl-color-panel: hsl(0, 0%, 99%)` (second largest area).
- **low `#edf0f2`** — low-emphasis fills (measured on 16 area units), `--tl-color-low: hsl(204, 16%, 94%)`.
- **primary `#3182ed`** — the selection and primary blue, `--tl-color-primary` / `--tl-color-selected: hsl(214, 84%, 56%)`: the "Sign in to share" button and the active tool. **on-primary `#ffffff`** (`--tl-color-selected-contrast`) is its label colour.
- **ink `#000000`** — `--tl-color-text`, the most-read text colour on the page (53 characters).
- **text-0 `#1c1c1c`** (`--tl-color-text-0`), **text-1 `#2e2e2e`** (`--tl-color-text-1`), **text-3 `#6e7477`** (`--tl-color-text-3`) — the UI text steps.
- **divider `#e8e8e8`** — `--tl-color-divider: hsl(0, 0%, 91%)`; **focus `#2d67d2`** — `--tl-color-focus: hsl(219, 65%, 50%)`.
- **Shape palette** (measured as small swatch backgrounds): `#1d1d1d`, `#9fa8b2`, `#e085f4`, `#ae3ec9`, `#4465e9`, `#4ba1f1`, `#f1ac4b`, `#e16919`, `#099268`, `#4cb05e`, `#f87777`, `#e03131`. These are colours for drawn shapes, not interface colours.

Translucent blacks provide hints and overlays: `--tl-color-muted-1: hsl(0, 0%, 0%, 10%)`, `--tl-color-hint: hsl(0, 0%, 0%, 5.5%)`, `--tl-color-overlay: hsl(0, 0%, 0%, 20%)`. The dark theme (`.tl-theme__dark`) sets the background to `hsl(240, 5%, 6.5%)` and the selection to `hsl(217, 89%, 61%)`; dark mode was not measured.

## Typography

The UI font is **Inter** (500, 600, 700; `--tla-font-ui: "Inter", system-ui, …`), served as a variable font from `/cf-fonts/v/inter/5.2.8/`. All measured UI text is small:

- **Display / body — Inter 500, 12px / 19.2px.** The largest text the extractor found as a headline is the SDK banner, "Build with the tldraw SDK" — the app has no hero headline. 12px is the main UI size.
- **Button — Inter 600, 12px / 19.2px.** "Sign in to share" in white on blue.
- **24px 700** is measured on 53 characters in `#000000` (the extractor did not assign it to a role).

Drawn shapes use four separate families, loaded as `tldraw_draw`, `tldraw_sans`, `tldraw_serif` and `tldraw_mono` (each in regular, bold, italic and bold italic) and declared as `--tl-font-draw`, `--tl-font-sans`, `--tl-font-serif`, `--tl-font-mono`. The font files behind them are Shantell Sans Informal (the hand-drawn style), IBM Plex Sans, IBM Plex Serif and IBM Plex Mono. **Substitutes:** none needed; Inter, Shantell Sans and IBM Plex are all free.

## Layout

There is no page grid; the canvas fills the viewport and UI is anchored to its edges. The top band is 57px tall with content at the right (x=1169 to x=1258 for the share and sign-in controls). The style panel hangs from the top right. The toolbar is centred at the bottom with the action bar above it. The zoom control is pinned to the bottom-left corner and the SDK banner to the bottom-right (the bottom band spans x=14 to x=1218).

Spacing follows the editor's scale: `--tl-space-1: 2px`, `--tl-space-2: 4px`, `--tl-space-3: 8px`, `--tl-space-4: 12px`, `--tl-space-5: 16px`, `--tl-space-6: 20px`, `--tl-space-7: 28px`, `--tl-space-8: 32px`, `--tl-space-9: 64px`, `--tl-space-10: 72px`. On the page, the most frequent paddings are 12px and 2px, and gaps are 8px, 4px and 12px. Layering is explicit: `--tl-layer-canvas-background: 100`, `--tl-layer-canvas-grid: 150`, `--tl-layer-canvas-shapes: 300`, `--tl-layer-canvas-overlays: 500` and so on.

## Elevation & Depth

Panels float on layered, crisp shadows with a 1px inner highlight. The measured panel shadow is `--tl-shadow-2`: `rgba(0, 0, 0, 0.16) 0px 0px 2px 0px, rgba(0, 0, 0, 0.24) 0px 2px 3px 0px, rgba(0, 0, 0, 0.1) 0px 2px 6px 0px, rgb(255, 255, 255) 0px 0px 0px 1px inset` (2 elements). The scale also defines `--tl-shadow-1` (`0px 1px 2px` at 25% plus `0px 1px 3px` at 9%), `--tl-shadow-3` (adds `0px 2px 6px` at 14%) and `--tl-shadow-4` (adds a `0px 2px 16px` spread at 6%) for higher layers. A 2px inset ring of `rgb(46, 46, 46)` marks one selected style option. The canvas itself is flat.

## Shapes

Radii come from the editor scale: `--tl-radius-0: 2px`, `--tl-radius-1: 4px`, `--tl-radius-2: 6px`, `--tl-radius-3: 9px`, `--tl-radius-4: 11px`. Measured on the page: 9px (2 elements), 2px, 11px, 14px, 999px (a pill), and the edge-attached shapes `0px 0px 11px` and `11px 11px 0px 0px` — panels that touch a viewport edge round only their free corners. Palette swatches are circles. Icons are thin outline icons; the SDK banner uses a dashed outline.

## Components

- **Sign in to share (primary)** — `#3182ed` fill, white Inter 600 12px/19.2px label.
- **Toolbar** — `#fcfcfc` rounded panel with `--tl-shadow-2`; square icon buttons; the active tool is a `#3182ed` rounded square with a white icon.
- **Action bar** — a light grey bar above the toolbar with grey icons (undo, redo, delete, duplicate, comment, more).
- **Style panel** — `#fcfcfc`, the 12-colour swatch grid, an opacity slider, fill/dash/size rows; the current option sits on a light grey fill.
- **Zoom control** — bottom-left, "100%" in Inter 12px on a corner-attached panel.
- **SDK banner** — "Build with the tldraw SDK →" in Inter 500 12px `#1c1c1c`, a dashed outline and a close button.

## Design System Architecture

tldraw's UI tokens are public in its open-source editor stylesheet, https://raw.githubusercontent.com/tldraw/tldraw/main/packages/editor/editor.css. It defines a `--tl-` prefixed system: spacing (`--tl-space-1` … `--tl-space-10`), radii (`--tl-radius-0` … `--tl-radius-4`), layers (`--tl-layer-*`), fonts (`--tl-font-draw/sans/serif/mono`), shadows (`--tl-shadow-1` … `--tl-shadow-4`) and colours split into `.tl-theme__light` and `.tl-theme__dark` blocks (`--tl-color-background`, `--tl-color-low`, `--tl-color-low-border`, `--tl-color-panel`, `--tl-color-panel-contrast`, `--tl-color-divider`, `--tl-color-selected`, `--tl-color-primary`, `--tl-color-focus`, `--tl-color-text`, `--tl-color-text-0/1/3`, `--tl-color-muted-1`, `--tl-color-hint`, `--tl-color-overlay`). Colours are written in HSL. The app site adds a `--tla-` layer (`--tla-font-ui`, `--tla-shadow-3`) and a `--tlui-` layer for UI parts such as comment markers (`--tlui-cmt-marker-shadow`).

## Do's and Don'ts

**Do**
- Keep the canvas `#f9fafb` and float UI on `#fcfcfc` panels with `--tl-shadow-2`.
- Use `#3182ed` only for selection and the primary action, with white on top.
- Set UI text in Inter at 12px (500 regular, 600 for buttons).
- Use the 2px/4px/6px/9px/11px radius scale and round only the free corners of edge-attached panels.
- Keep the 12-colour palette for drawn content, not for interface chrome.
- Use the `--tl-space` scale (2px–72px) for spacing.

**Don't**
- Don't add a hero headline or marketing sections to the app view.
- Don't use the shape palette colours for buttons or panels.
- Don't use large soft shadows; tldraw shadows are tight and layered.
- Don't use bold display type in the chrome; the largest UI text is 24px.
- Don't hard-code dark-mode colours; switch with the `.tl-theme__dark` variables.

## Responsive Behavior

The extractor's 390px mobile pass found the largest text to be the "Sign in to share" label at Inter 600 12px / 19.2px in `#ffffff` (89px wide), so the button stays visible at that width. Mobile font sizes measured: 24px (53 characters) and 12px (36 characters); on desktop 12px measured 65 characters. The layout probe recorded the same "Page menu" toggle visible on both widths, 0 header text links, and a maximum of 3 columns on both. No CSS breakpoint list was captured. Where the toolbar and style panel sit at mobile width was not measured.

## Iteration Guide

1. Fill the viewport with a `#f9fafb` canvas; do not add page sections.
2. Anchor UI to the edges: logo and page menu top-left, share and a `#3182ed` "Sign in to share" button top-right, toolbar bottom-centre, zoom bottom-left.
3. Build panels in `#fcfcfc` with 9px–11px radius and `--tl-shadow-2`.
4. Set all UI text in Inter 12px/19.2px (500; 600 on buttons) in `#1c1c1c`.
5. Show the active tool as a `#3182ed` square with a white icon; use the `--tl-color-low` grey `#edf0f2` for low-emphasis fills.
6. Offer the 12 palette colours as circular swatches for drawing only.
7. Take spacing, radii, shadows and layers from the `--tl-` variables in the editor stylesheet.
