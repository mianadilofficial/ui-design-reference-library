---
version: alpha
name: NaughtyDuk
category: "Portfolio"
description: "NaughtyDuk, a digital innovation studio for entertainment brands: pale canvas #f2f2f4, near-black #1e1e1e HUD bars with #ececec text, Neue Haas Display uppercase at 18px weight 700 and PP Supply Mono at 10px, 4px radii, one 800px viewport."
colors:
  canvas: "#f2f2f4"
  page-body: "#ffffff"
  ink: "#494d4d"
  primary: "#1e1e1e"
  on-primary: "#ececec"
  surface-3: "#2d2f2f"
  ink-3: "#737d7d"
  ink-4: "#aaaaaa"
  hairline: "#e2e2e7"
typography:
  display:
    fontFamily: "\"Neue Haas Display\", sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
    letterSpacing: "-0.48px"
    textTransform: uppercase
  body:
    fontFamily: "\"Neue Haas Display\", sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 16px
    textTransform: uppercase
  button:
    fontFamily: "\"PP Supply Mono\", monospace"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 15px
    letterSpacing: 0.25px
rounded:
  xs: 2px
  sm: 4px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 4px 4px 4px 10px
    height: 40px
---

## Overview

naughtyduk.com is the site of NaughtyDuk, titled "NaughtyDuk© - The Entertainment Industry's Digital Partner". The top bar calls it a "DIGITAL INNOVATION STUDIO", and the page's own line reads "THE CREATIVE POWERHOUSE BEHIND THE WORLD'S BIGGEST ENTERTAINMENT BRANDS". The measured page is 1280px wide with a scroll height of 800px and 81 visible elements, so the home screen is a single viewport that behaves like an interactive stage rather than a scrolling article.

The capture is an almost empty pale grey field crossed by faint diagonal and vertical hairlines that converge at the centre bottom. Three framed visuals sit in a row at mid-height: a saturated orange lava-lamp close-up, a dark smartphone floating on a light grey tile, and a photograph of an athlete in a yellow top against a blue sky. Beneath them a thin outlined strip pairs greyed client wordmarks (XXL, Clara Cuvé and two others) with the statement in heavy uppercase sans. The hand-drawn NaughtyDuk logo is anchored bottom left and a bold "MENU" label bottom right.

A dark HUD bar across the top reads "NAUGHTYDUK© DIGITAL INNOVATION STUDIO", a date and clock ("GMT 09 OCT 26 11:29:33") and "NEXT AVAILABILITY: 19 OCT 2026" in a tiny monospace. Two dark pill-shaped controls hang beneath it at the right: one shows a film thumbnail ("WHY CLIENTS CHOOSE US / 2026 / PLAY FILM") with a close icon, the other is the "BOOK A CALL" button with a calendar icon and a photo tile.

The look is a control-room interface for a creative studio: technical labels, timestamps and uppercase text on a neutral stage, letting client imagery supply all the colour. Copy is terse and boastful, set entirely in capitals.

## Colors

Measured background areas: `#f2f2f4` (2,104), `#1e1e1e` (50), `#2d2f2f` (1). Text colors by characters: `#ececec` (93), `#494d4d` (71), `#737d7d` (29), `#aaaaaa` (14). The only border color is `#e2e2e7` (1 element).

- **Canvas `#f2f2f4`** is the whole stage.
- **Ink `#494d4d`** sets the large uppercase statement.
- **Primary `#1e1e1e`** fills the HUD bar and the "BOOK A CALL" button; text on it is `#ececec`.
- **`#2d2f2f`**, **`#737d7d`** and **`#aaaaaa`** are a deeper surface, a mid grey for secondary labels and a light grey for the muted client logos and labels.
- **Hairline `#e2e2e7`** draws the thin border of the client strip.

The page publishes a numbered grey ramp as CSS variables: `--nd-100: #ffffff`, `--nd-200: #f2f2f4`, `--nd-300: #ececec`, `--nd-400: #eaeaee`, `--nd-500: #e2e2e7`, `--nd-600: #aaaaaa`, `--nd-650: #a4aaaa`, `--nd-700: #737d7d`, `--nd-800: #494d4d`, `--nd-850: #4e4e4e`, `--nd-900: #2d2f2f`, `--nd-1000: #1e1e1e` and `--nd-1100: #121212`. Every measured color is one of these steps; the ramp is the entire palette, and there is no chromatic brand color. Color comes only from the supplied imagery. Tailwind's variables (`--tw-ring-color: rgb(59 130 246 / .5)`) are framework defaults, not brand colors. Hover states were not measured (the list is empty).

## Typography

Two families are loaded: Neue Haas Display (500 and 700) and PP Supply Mono (400). By characters, PP Supply Mono sets 132 and Neue Haas Display 75. The sans appears at 24px weight 500 (the "MENU" label, tracking -0.48px, line height 32px) and 18px weight 700 (the statement), always uppercase. The mono sets the HUD, buttons and labels at 8px (86 characters) and 10px (46 characters, tracking 0.25px, line height 15px).

| Role | Family | Size | Weight | Notes |
| --- | --- | --- | --- | --- |
| display | Neue Haas Display | 24px | 500 | uppercase, -0.48px tracking, 32px line |
| body | Neue Haas Display | 18px | 700 | uppercase, 16px line height |
| button | PP Supply Mono | 10px | 400 | 0.25px tracking, 15px line |

The 16px line height on 18px type is measured and is tighter than the font size, which produces the stacked, compressed block seen in the capture. Neue Haas Display and PP Supply Mono are commercial typefaces; no foundry page was opened here.

## Layout

The measured viewport is 1280px by 800px and nothing scrolls. Elements are pinned to the edges: HUD bar across the top, controls to the right below it, logo bottom left, menu bottom right, content row centred. Gaps measured: 8px (12 times) and 16px (4). Paddings: 16px (3), 4px (3), 8px and 10px. The primary button measures 159px wide and 40px high with `4px 4px 4px 10px` padding, leaving room for the small photo tile at its right end.

Three visuals form the centre row in a three-up row; their pixel sizes were not measured. The client strip is a single bordered row.

The extraction found no navigation role, no footer, no card and no input on this screen, so those component types are not declared. The menu label is the only navigation control that was measured.

## Elevation & Depth

There is almost no elevation. One shadow was measured, `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px` (plus two transparent shadow layers), the faintest lift available. Depth otherwise comes from the dark bars against the pale field and the framed images.

## Shapes

Radii are 4px (4 elements) and 2px (3). The button and HUD controls use 4px; hairline and tile details use 2px. Images are essentially square with small corners.

## Components

- **HUD bar.** Full-width `#1e1e1e` strip with `#ececec` mono 8px text: studio name, live date and time, next availability.
- **Primary button, "BOOK A CALL".** Fill `#1e1e1e`, text `#ececec`, PP Supply Mono 10px with 0.25px tracking, 4px radius, 40px high, padding `4px 4px 4px 10px`, 159px wide, with a calendar icon at the left and a photo tile at the right.
- **Film control.** The "WHY CLIENTS CHOOSE US / 2026 / PLAY FILM" card with a thumbnail and a close button, in the same dark surface.
- **Client strip.** Thin `#e2e2e7` outline, greyed logos, uppercase statement in `#494d4d`.
- **Menu label.** 24px weight 500 uppercase, bottom right.

## Design System Architecture

No public design system was found for NaughtyDuk and none was searched for: the measured data and capture showed no link to one. The de-facto system is Tailwind (the extraction shows `--tw-*` variables) plus a numbered grey ramp `--nd-100` to `--nd-1100` as the studio's own color tokens. Typography comes from two commercial faces and every other decision is spacing and uppercase text.

## Do's and Don'ts

Do:
- Keep the interface in the grey ramp and let imagery carry color.
- Set labels in PP Supply Mono at 8 to 10px and statements in Neue Haas Display bold uppercase.
- Use dark `#1e1e1e` bars with `#ececec` text for controls, 4px radius.
- Pin interface items to the viewport edges.

Don't:
- Don't add chromatic UI colors; none are measured.
- Don't use shadows beyond the 5% black hairline.
- Don't use Tailwind's default ring blue as a brand color.

## Responsive Behavior

The mobile pass recorded the "MENU" label at 24px weight 500 (65px wide, 28px high), the mono label "WHY CLIENTS CHOOSE US" at 10px with 15px line height (136px wide), and the primary button at 159px by 40px with the same padding. Font sizes on mobile by characters are 8px, 10px and 24px, so the 18px statement is not present in the mobile measurement. Breakpoints and layout changes were not measured.

## Iteration Guide

1. Start with a `#f2f2f4` stage and the `--nd-` grey ramp.
2. Add a `#1e1e1e` HUD bar with 8px mono text.
3. Build buttons at 40px high with 4px radius and `#ececec` text.
4. Set statements in Neue Haas Display 700 uppercase.
5. Measure any new page before adding tokens: `node web/scripts/extract-tokens.mjs --slug=naughtyduk-c-1--<page> --url=<url> --force --no-motion`.
