---
version: alpha
name: The Monolith Project
category: "Culture & Events"
description: "Scroll-driven WebGL storytelling site, measured on its entry screen: grey #cfcfcf canvas with black #000000 prompt text, beige credit text #ffebbc and #fff6df, red #ff002f variable, BRCobane uppercase 20px display type, square corners and no measured radius."
colors:
  canvas: "#cfcfcf"
  ink: "#000000"
  primary: "#ffebbc"
  beige: "#fff6df"
  red: "#ff002f"
typography:
  display:
    fontFamily: BRCobane
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
    textTransform: uppercase
  display-mobile:
    fontFamily: BRCobane
    fontSize: 27.1673px
    fontWeight: 400
    lineHeight: 27.1673px
    textTransform: uppercase
  page-body:
    fontFamily: BRCobane
    fontSize: 13.3333px
    fontWeight: 400
    lineHeight: 13.3333px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 5.33px
  s2: 10.67px
  s3: 21.33px
  s4: 26.67px
components:
  entry-prompt:
    textColor: "{colors.ink}"
    backgroundColor: "{colors.canvas}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
  credits:
    textColor: "{colors.primary}"
    typography: "{typography.page-body}"
    rounded: "{rounded.none}"
---

## Overview

The Monolith Project (https://themonolithproject.net/, title "The Monolith Project") is an immersive, scroll-driven 3D story rather than a conventional website. The served HTML is a near-empty shell that loads a single script bundle and a stylesheet; the Draco decoder for compressed 3D models is preloaded from gstatic.com. The scene list inside the shipped bundle names components such as SceneBone, SceneHistory and SceneDevice, and subtitles are timed to scroll positions: "We've always leaned on what we make—crutches carved from curiosity.", "From spark to circuit, we've shaped the world with what we know.", "Centuries of craft, now framed in glass and pixels." and "But control is an illusion...".

The re-measured capture still shows the entry state: a flat grey field with a small glossy red orb and a centred two-line prompt in bold uppercase black type reading "CLICK ON THE SPARK". The shipped bundle confirms the prompt string (`Click on the Spark`, with "Tap" substituted on mobile), set in the display font at size 14 with color "black" and centred. This document therefore documents the entry screen as measured plus the colors and fonts declared in the site's own stylesheet and script. Gallery, scene and interface styling after the entry gesture is not described.

The extraction measured 61 visible elements and a 23,055px document at 1280px wide. Its readable text is a credits list in beige #ffebbc: "CREATOR / KEHAN FAN / LEAD DEVELOPER / TECHNICAL DIRECTION / ETHAN C…". These credits are the only text color that DOM measurement recorded (257 characters, all BRCobane, all weight 400, uppercase).

Key characteristics:
- A single display face, BRCobane, in uppercase at all measured sizes (13.3333px, 20px, 12.5px).
- Grey #cfcfcf canvas on the entry screen, black prompt text, warm beige credit text.
- Every measured radius is 0px; borderRadii is empty.
- Interface chrome is minimal and everything else is rendered in WebGL.

## Colors

- **Canvas #cfcfcf:** the measured body background and the field behind the orb and prompt.
- **Ink #000000:** the text color of the entry prompt. The DOM text measurement lists only #ffebbc, because the prompt is drawn inside the WebGL canvas; its color is published in the site's script (`color:"black"`) at https://themonolithproject.net/assets/index-Dqw2FXdk.js, and the stylesheet also sets `color:#000` on its form title, subtitle and description classes and defines `--color-black: #000`. Black on #cfcfcf is readable; the beige is not readable on this canvas.
- **Primary #ffebbc:** `--color-beige-dark`, the measured text color of all DOM text (257 characters) and the CSS class `.text-beige-dark`.
- **Beige #fff6df:** `--color-beige`, backing the `.bg-beige` utility; measured with 0 area on the entry screen.
- **Red #ff002f:** `--color-red` in the root variables, present in the CSS color corpus (also as #ff002f80); the orb in the capture is red, but the tokens do not state that the orb uses this variable.

The root variables also carry a large set of `--leva-*` values (for example #0066dc, #292d39, #007bff). Those belong to the Leva debug-panel library and are not brand colors, so they are not tokenised. The Tailwind ring variables are likewise framework internals.

## Typography

One brand font is loaded: BRCobane (BRCobane-Black.otf, declared at weight 900). The extractor records it as the face of every measured character. Computed weight is 400.

- **display:** BRCobane 20px / 20px, weight 400, uppercase. This is the measured "KEHAN FAN" heading (110px wide, 20px high).
- **display-mobile:** 27.1673px / 27.1673px, uppercase, measured at 390px (the same heading is 150px by 27px).
- **page-body:** 13.3333px / 13.3333px, uppercase, the measured body text size (162 characters). A 12.5px size is also measured (13 characters).

The site's font directory also lists BowlbyOne-Regular, Barlow-Regular, Inter-Medium, Baloo2 Regular and Medium, and TemplarsCipherPlus.otf; the stylesheet's measured family list includes Baloo2 and the BRCobane variable `--font-brcobane`. Which of those is shown after the entry screen is not measured. Letter spacing is normal at all measured sizes; the form classes in the stylesheet use 0em and .05em. Font substitutes: BRCobane is a commercial typeface; the site's default stacks are the system sans and mono stacks declared as `--font-sans` and `--font-mono`.

## Layout

The stylesheet defines a 48-column grid: `--grid-columns: 48`, `--grid-column-gap: 0px`, `--grid-side-margin: 6rem` and `--grid-max-width: 148000px`, with the grid width computed as `min(100vw - scrollbar - 2 * side margin, max)`. Header height is `--height-header: 5rem`. Spacing steps are `--p1` .8rem through `--p10` 8rem. Z-index layers `--z1` through `--z5` run 100 to 500.

On the entry screen the content is a single centred stack (orb and prompt) in the upper part of the viewport, with the rest of the document empty. The extractor found no header links, no menu toggle and at most 2 card columns at both widths. Measured gaps: 21.3333px (18 elements), 26.6666px, 5.33333px and 10.6667px; the spacing tokens carry these.

## Elevation & Depth

Depth is produced by WebGL: 3D models, scene-to-scene transitions (the scene list names a zoom and a mix transition with line and device textures) and deferred render targets. In the DOM, a faint box-shadow of `rgb(0, 0, 0) 0px 0px 1px 0px` (with four fully transparent layers before it) was measured on 5 elements, and the stylesheet defines `.bg-black\/20` (black at 20 percent) as a utility. No elevation scale for flat UI components was measured.

The only border color measured is #000000 (1 element), matching the `.border-black` utility.

## Shapes

`desktop.frequencies.borderRadii` is empty, so every measured element computes a 0px radius. The orb is imagery, not a CSS shape. Shape language beyond the entry screen is not measured.

## Components

- **Entry prompt:** a red orb above two lines of centred uppercase text "CLICK ON / THE SPARK" (mobile: "TAP ON"), black on the grey field. It is a one-time gate that starts the experience.
- **Credits block:** beige uppercase text, one entry per line: role label then name (CREATOR, KEHAN FAN, LEAD DEVELOPER, TECHNICAL DIRECTION, ETHAN C…). The CREDITS button recorded in the focus test uses the beige text color with a 1px default focus outline of rgb(0, 95, 204), which is a browser default.
- **Logo:** a 37px by 37px image (nose_logo.webp) is declared in the markup.
- **Form classes (stylesheet):** `.form-title` 5.5rem, `.form-subtitle` 3rem and `.form-description` 2.3rem, all black uppercase or black text, and `.button-primary-8w` with black text on `--cl-yellow`. They were found in the stylesheet, not on the entry screen, so no yellow value is tokenised.

## Design System Architecture

No public design system, brand guideline or repository was found. The page links only to its own assets, Google Tag Manager and the Draco decoders. The system is Tailwind-based utility CSS (the `--tw-*` and `--text-*` variables, `.bg-beige`, `.text-beige-dark`, `.border-black`) together with a scene list in the script bundle that renders 3D text and models through the Draco decoder. The Leva control library is bundled. The only brand variables are `--color-beige`, `--color-beige-dark`, `--color-red`, `--color-black`, `--font-brcobane` and the 48-column grid variables.

## Do's and Don'ts

Do:
- Use BRCobane in uppercase for all text.
- Use black on the #cfcfcf field for readable prompts and beige #ffebbc only where it sits on a darker surface.
- Keep corners at 0px.
- Drive structure from the 48-column grid with 6rem side margins.

Don't:
- Do not place beige #ffebbc text on the grey canvas; the pairing is not readable.
- Do not treat the Leva panel colors (#0066dc, #007bff) as brand colors.
- Do not describe the scenes after the entry gesture; they were not captured.
- Do not assume the red variable equals the orb color.

## Responsive Behavior

Measured at 390px: the "KEHAN FAN" heading grows from 20px to 27.1673px (150px by 27px) and the two sizes by character count become 14.4893px and 27.1673px; the prompt reads "Tap on the Spark" in the shipped script. No header links or menu toggle were detected at either width. The stylesheet declares media queries at max-width 975px (16 rules), min-width 976px, min-width 640px, 768px, 1280px and 1536px. All other mobile behavior is not measured.

## Iteration Guide

1. Set the canvas to #cfcfcf and the prompt text to #000000.
2. Use BRCobane uppercase: 20px for headings, 13.3333px for body.
3. Show credits in #ffebbc only on a dark or colored surface.
4. Keep all corners at 0px and spacing on 5.33px / 10.67px / 21.33px / 26.67px.
5. Treat #ff002f as a declared accent until its role is measured.
6. Capture the post-entry scenes before documenting any further UI.
