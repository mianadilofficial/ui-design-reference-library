---
version: alpha
name: Excalidraw
category: "Design & Creative Tools"
description: "Excalidraw (excalidraw.com), the open-source hand-drawn whiteboard: a white #ffffff canvas with floating #ececf4-on-white UI islands, Assistant 14px UI text in #1b1b1f, Excalifont 18px hand-lettered hints in #b8b8b8, the #6965db violet brand, a #f0efff 8px-radius Try Excalidraw+ button with a #d7d5ff border, and 6px–8px radii."
colors:
  canvas: "#ffffff"
  ink: "#1b1b1f"
  primary: "#f0efff"
  on-primary: "#6965db"
  surface-low: "#ececf4"
  surface-high: "#f1f0ff"
  surface-primary-container: "#e0dfff"
  ink-secondary: "#b8b8b8"
  gray-50: "#999999"
  gray-100: "#121212"
  promo-subtext: "#8b88e0"
  ink-black: "#000000"
  primary-hover: "#e3e2fe"
  button-primary-border: "#d7d5ff"
  brand-hover: "#5753d0"
  brand-active: "#4440bf"
  danger: "#db6965"
typography:
  display:
    fontFamily: Excalifont, Xiaolai
    fontSize: 18px
    fontWeight: 400
    lineHeight: 21.6px
  button:
    fontFamily: Assistant, system-ui, "system-ui", -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 16.1px
  button-secondary:
    fontFamily: Arial
    fontSize: 14px
    fontWeight: 400
rounded:
  xs: 4px
  sm: 6px
  md: 8px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 14px 0px 10px
    height: 36px
    borderColor: "{colors.button-primary-border}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    borderColor: "{colors.primary-hover}"
  button-secondary:
    textColor: "{colors.gray-50}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 12px
    height: 42px
  button-secondary-hover:
    backgroundColor: "{colors.surface-high}"
    textColor: "{colors.gray-100}"
  toolbar-island:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0.17) 0px 0px 1px 0px, rgba(0, 0, 0, 0.08) 0px 0px 3px 0px, rgba(0, 0, 0, 0.05) 0px 7px 14px 0px
  footer:
    textColor: "{colors.ink}"
    padding: 0px 16px
---

# Excalidraw

## Overview

Excalidraw (excalidraw.com, title "Excalidraw Whiteboard") is not a marketing page; the home URL opens the drawing app itself. The measured viewport is 1280px × 800px of white canvas with the interface floating around the edges. At the top centre sits the tool island: a lock toggle, then hand, selection, rectangle, diamond, ellipse, arrow, line, pencil, text, image and eraser tools, each with a tiny keyboard-shortcut letter, and a "more tools" overflow. A faint hint below it reads "To move canvas, hold [Scroll wheel] or [Space] while dragging, or use the hand tool". At the top left is a square menu button; at the top right a "Try Excalidraw+ / 14-day free trial" promo button, a solid violet share button and a library/sidebar toggle. The bottom left holds zoom controls ("−  100%  +") and undo/redo; the bottom right a shield icon and a help button.

The empty canvas shows the welcome screen: the Excalidraw logo (a violet crossed-pencil mark and a bold dark-indigo hand-lettered "EXCALIDRAW" wordmark), the grey hand-lettered note "Your drawings are saved in your browser's storage. Browser storage can be cleared unexpectedly. Save your work to a file regularly to avoid losing it.", and a short menu (Open Cmd+O, Help ?, Live collaboration…, Sign up). Hand-drawn curved arrows with Excalifont captions ("Export, preferences, languages, ...", "Pick a tool & Start drawing!", "Shortcuts & help") point at the UI they describe. The whole tone is playful and sketchy but the chrome is calm and precise.

## Colors

The app's colours come from its open-source theme file, and the measured page matches it.

- **canvas `#ffffff`** — the drawing canvas and island fills (`--color-surface-lowest: #ffffff`).
- **surface-low `#ececf4`** — the grey-lavender fill of tool buttons, zoom and undo groups (`--color-surface-low`).
- **surface-high `#f1f0ff`** — the hover fill of welcome-screen items (`--color-surface-high`); **surface-primary-container `#e0dfff`** — the selected tool background (`--color-surface-primary-container`).
- **ink `#1b1b1f`** — UI text such as "100%" (`--color-on-surface` / `--text-primary-color`).
- **on-primary `#6965db`** — the Excalidraw violet (`--color-primary: #6965db`): the promo label, and a measured background (the violet share button in the capture). **brand-hover `#5753d0`** and **brand-active `#4440bf`** are its documented hover and pressed states.
- **primary `#f0efff`** — the light violet fill of the "Try Excalidraw+" button; **button-primary-border `#d7d5ff`** (`--color-primary-light-darker`); **primary-hover `#e3e2fe`** (`--color-primary-light`) is the hover fill and border. **promo-subtext `#8b88e0`** colours "14-day free trial".
- **ink-secondary `#b8b8b8`** — the hand-lettered hints, the most-read colour on the page (317 characters; `--color-gray-40`).
- **gray-50 `#999999`** — welcome-menu items at rest; on hover they turn **gray-100 `#121212`**.
- **danger `#db6965`** — `--color-danger` from the theme.

The wordmark's dark indigo `#030064` appears once as text. The dark theme switches `--color-primary` to `#a8a5ff` and `--color-surface-lowest` to `hsl(0, 0%, 7%)` (from the theme file; dark mode was not measured).

## Typography

- **Excalifont 400, 18px / 21.6px** — the hand-drawn font (with Xiaolai as the CJK fallback) used for on-canvas hints and the welcome text; 227 characters, the most-read family.
- **Assistant** (400, 500, 600, 700) — the UI font. The promo button uses Assistant 600 14px / 16.1px; UI labels are 14px, 12px and 10px (the shortcut letters).
- **Arial 400, 14px** — the welcome-screen menu items (Open, Help…), 35 characters.
- **monospace** — keyboard keys in the hint line ("Scroll wheel", "Space").

The extractor also recorded font files for Nunito and Comic Shanns loaded from the same CDN. Measured sizes: 18px, 16px, 12px, 14px, 10px, 24px and 32px. No letter-spacing is applied anywhere. **Substitutes:** Excalifont and Assistant are free; a handwriting face such as Kalam approximates Excalifont.

## Layout

The layout is an infinite canvas with UI anchored to the viewport edges, not a page grid. The top tool island is centred; menu, promo and sidebar controls sit in the corners; zoom, undo/redo and help sit at the bottom corners. The welcome screen is centred on the canvas, between x=52 and x=1200 in the measured band. Controls are square: the theme defines `--default-button-size: 2rem` and `--lg-button-size: 2.25rem` (36px, matching the measured 36px promo button height).

Spacing is tight and small: gaps of 8px (most frequent), 4px, 16px, 12px, 32px, 2px and 24px; paddings of 10px, 12px, 4px, 3px and 1px. The promo button uses 0px 14px 0px 10px; welcome items use 12px padding and are 42px tall and 300px wide. The z-index stack is documented in root variables (`--zIndex-canvas: 1` through `--zIndex-modal: 1000`, `--zIndex-popup: 1001`, `--zIndex-toast: 999999`).

## Elevation & Depth

UI floats above the canvas on "islands". The island shadow, `--shadow-island`, is `rgba(0, 0, 0, 0.17) 0px 0px 1px 0px, rgba(0, 0, 0, 0.08) 0px 0px 3px 0px, rgba(0, 0, 0, 0.05) 0px 7px 14px 0px`, measured on one rendered element. Six elements carry a 1px white ring (`rgb(255, 255, 255) 0px 0px 0px 1px`). Selected and focused states use 1px or 2px rings in brand colours (`0 0 0 1px var(--color-brand-active)`, `0 0 0 2px var(--focus-highlight-color)`). There are no large shadows; the canvas stays flat white.

## Shapes

Radii are small: 8px is dominant (33 elements, `--border-radius-lg: 0.5rem`), 6px for welcome items (`--border-radius-md: 0.375rem`), 4px for small controls. Button groups such as zoom − / + use split radii, 8px 0px 0px 8px and 0px 8px 8px 0px, so the group reads as one pill-cornered bar. Icons are thin outline icons. The drawn hint arrows and captions are deliberately rough, hand-sketched strokes, contrasting with the crisp UI.

## Components

- **Excalidraw+ promo button** — `#f0efff` fill, 1px `#d7d5ff` border, 8px radius, 0px 14px 0px 10px padding, 36px tall, a gift icon, an Assistant 600 14px/16.1px `#6965db` label and a `#8b88e0` "14-day free trial" line; hover fill and border `#e3e2fe`.
- **Share button** — a square `#6965db` button with a white share icon.
- **Tool island** — white, 8px radius, `--shadow-island`; tools are square icon buttons with a small shortcut letter; the active tool is filled `#e0dfff`.
- **Welcome menu item** — transparent, Arial 14px `#999999` label with an outline icon and a right-aligned shortcut, 6px radius, 12px padding, 42px tall; hover fill `#f1f0ff` and label `#121212`.
- **Zoom group** — `#ececf4` fill with split 8px radii, "−", "100%" in `#1b1b1f`, "+".
- **Canvas hint** — Excalifont 18px/21.6px `#b8b8b8` with a hand-drawn arrow.

## Design System Architecture

Excalidraw is open source, and its UI tokens are published in the repository's theme file, https://raw.githubusercontent.com/excalidraw/excalidraw/master/packages/excalidraw/css/theme.scss. It defines a primary ramp (`--color-primary: #6965db`, `--color-primary-darker: #5b57d1`, `--color-primary-darkest: #4a47b1`, `--color-primary-light: #e3e2fe`, `--color-primary-light-darker: #d7d5ff`, `--color-primary-hover: #5753d0`), a surface scale (`--color-surface-lowest: #ffffff`, `--color-surface-low: #ececf4`, `--color-surface-mid: #f6f6f9`, `--color-surface-high: #f1f0ff`, `--color-surface-primary-container: #e0dfff`, `--color-on-surface: #1b1b1f`), brand states (`--color-brand-hover: #5753d0`, `--color-brand-active: #4440bf`), a gray scale from `--color-gray-10: #f5f5f5` to `--color-gray-100: #121212`, danger colours (`--color-danger: #db6965` …), `--shadow-island`, `--border-radius-md: 0.375rem`, `--border-radius-lg: 0.5rem`, and button sizes (`--default-button-size: 2rem`, `--lg-button-size: 2.25rem`, enlarged to 2.25rem / 2.375rem at min-device-width 1921px). A `.theme--dark` block overrides the same variables (`--color-primary: #a8a5ff`). The fonts are served from Excalidraw's own CDN (`excalidraw.nyc3.cdn.digitaloceanspaces.com/oss/fonts/`).

## Do's and Don'ts

**Do**
- Keep the canvas white and float UI on white islands with `--shadow-island`.
- Use `#6965db` violet for the brand action and selection, with `#5753d0` / `#4440bf` for hover and pressed.
- Use `#ececf4` for neutral control fills and `#e0dfff` for selected tools.
- Set UI in Assistant 14px and hints in Excalifont 18px `#b8b8b8`.
- Use 8px radii on islands and buttons, 6px on menu rows.
- Pair hand-drawn arrows and captions with crisp outline icons.

**Don't**
- Don't fill the canvas or add page sections; the product is the page.
- Don't use large shadows or heavy borders.
- Don't use Excalifont for UI controls.
- Don't introduce a second accent hue.
- Don't use pill or fully round buttons; corners stay at 4px–8px.

## Responsive Behavior

The extractor's 390px mobile pass recorded the welcome text unchanged at Excalifont 18px / 21.6px in `#b8b8b8`, wrapping to 358px wide (130px tall versus 65px on desktop). No primary CTA was detected on mobile, so the Excalidraw+ promo button was not found at that width. The layout probe recorded a visible menu toggle on both widths, 0 visible header text links, and a maximum of 1 card column on mobile versus 5 on desktop. Mobile font sizes measured: 18px, 14px, 16px and 32px. The stylesheet's breakpoints are max-width 861px / min-width 861px (the most frequent), 1024px, 1921px, and small-screen rules at 600px, 460px, 450px and 379px. Where the toolbar moves on mobile was not measured.

## Iteration Guide

1. Start with a full-viewport white canvas; place controls on floating white islands with `--shadow-island` and 8px radius.
2. Centre a tool island at the top; corner controls go top-left (menu), top-right (promo, violet share, sidebar), bottom-left (zoom, undo) and bottom-right (help).
3. Use `#ececf4` fills for neutral controls, `#e0dfff` for selected, `#6965db` for the brand action.
4. Set UI labels in Assistant 14px `#1b1b1f`; set guidance in Excalifont 18px/21.6px `#b8b8b8` with hand-drawn arrows.
5. Build the promo as a `#f0efff` button with a `#d7d5ff` border, 36px tall.
6. Keep spacing at 4px–12px inside controls and use split radii for grouped buttons.
7. For dark mode, follow the theme file's `.theme--dark` overrides rather than inverting colours by hand.
