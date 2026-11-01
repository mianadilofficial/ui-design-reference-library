---
version: alpha
name: "HAOQI.DESIGN"
category: "Portfolio"
description: "Portfolio of designer-engineer Haoqi Wen measured live: warm #fbfaf4 canvas with black #000000 type in tiktok and mono families, a 53.76px statement style, uppercase 16px bold navigation, no UI radius or shadow, and all color supplied by glossy stickers and 3D lettering."
colors:
  canvas: "#fbfaf4"
  ink: "#000000"
  primary: "#000000"
  accent-lime: "#c0fe04"
  ink-muted: "#36363099"
typography:
  display:
    fontFamily: tiktok, sans-serif
    fontSize: 30px
    fontWeight: 500
    lineHeight: 37.5px
  display-mobile:
    fontFamily: tiktok, sans-serif
    fontSize: 28.08px
    fontWeight: 700
    lineHeight: 28.08px
    textTransform: uppercase
  body:
    fontFamily: tiktok, sans-serif
    fontSize: 53.76px
    fontWeight: 400
    lineHeight: 53.76px
  nav:
    fontFamily: tiktok, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 1.92px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 28px
  s8: 56px
  s9: 64px
  s10: 96px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 8px
  footer:
    textColor: "{colors.ink}"
    padding: 64px
---

# HAOQI.DESIGN

## Overview

The measured page is haoqi.design, the personal portfolio of Haoqi Wen, a design engineer working on AI. The page title is "HAOQI©2026". It is a playful, tactile, grid-based single-screen portfolio laid over a soft sky-blue-and-cream gradient image. A 3D chrome-and-glass script word "hello" floats in the middle, a cluster of glossy stickers (smiley faces, eyes, a pen-nib, a star, a heart, a pixel-art cursor and a "REUNIMOS 2026" seal) is scattered across the upper half, and thin vertical and horizontal guide lines with small plus marks divide the viewport into a visible grid. The bottom carries a bold uppercase statement, "I BRING CRAFT & TASTE TO DIGITAL WORK", a live-clock line ("GMT+8 CN 11:10 25°C"), a coordinate readout ("0000 X 0000 Y") and a small eclipse-like icon.

The fetched page content describes the same site: navigation of Work, Contact, THEME and SOUND with a bracketed key hint (written as `THEME[A]` and `SOUND[\]` on the page), the tagline "Thinking in systems. Designing with care.", a project grid (Reunimos™, Inspire Mono, Wasm design utils, VectorSymbols, DarkSide, aDrive, Shore Icon, Teambition and two Figma Friends events), a closing line "Let's Create Something Extraordinary" with an email link, and footer links to Twitter/X, Figma and GitHub. The measured scroll height is 2400px with an inner scroller of 10999px at a 1280px viewport, which means the page scrolls inside a container rather than on the document.

The interface voice is terse and engineer-flavored: bracketed keyboard hints, coordinates, a time zone and weather readout, and monospaced paragraphs. The artwork is the personality; the interface itself is almost invisible black type on cream.

## Colors

The UI palette is minimal and fully measured:

- `canvas` #fbfaf4 is the warm off-white page color (also declared as `--background-1`, rgb(251,250,244)); the visible sky-blue gradient is a background image, not a token.
- `ink` #000000 is the text color for nearly all characters (810 weight). `primary` is the same #000000, since the page has no filled button. `ink-muted` #36363099 is a 60%-alpha dark olive-grey used for secondary text (declared as the root variable `--label-2`, rgba(54,54,48,.6)).
- `accent-lime` #c0fe04 is an acid lime measured as a background on a few elements (weight 9); its exact use was not isolated in the measurement.
- The root variables also declare `--background-elevated` #efede7 (a slightly darker cream for raised surfaces), `--label-3` rgba(54,54,48,.32) and code-highlighting colors (`--code-tag`, `--code-function`) in the lab color space. The `--leva-*` variables (for example `--leva-colors-accent2` #007bff) belong to the Leva debug control panel library and are not brand colors.

Because the UI is monochrome, saturated color is delivered only by the stickers, the 3D lettering and the lime accent.

## Typography

Three families are loaded: `tiktok` (a variable font, weights 100 to 900), `mono` (variable, weights 100 to 900) and `tronica-mono` (400). They are referenced by their declared family names; no foundry names were exposed in the CSS.

- `display` is tiktok at 30px, weight 500, line height 37.5px (the "Design & Engineering" label at the top-left). `display-mobile` is tiktok 28.08px, weight 700, line height 28.08px, uppercase (the mobile hero statement).
- `body` is tiktok at 53.76px, weight 400, line height 53.76px, which is the large statement style ("I explore how to shape AI-era workflows with craft and taste").
- `nav` is tiktok 16px, weight 700, line height 24px, uppercase (HAOQI.DESIGN, WORK, CONTACT, THEME, SOUND).

Other measured sizes are 16px (most used), 14px, 12px and 71.68px (the bold uppercase closing statement). The small paragraphs in the capture are monospaced (tronica-mono and `mono`), including the tagline and the intro text. Weights in use: 400 (most), 700 and 500. The root declares `--font-mono` as "mono", monospace and size tokens such as `--text-2xl` 1.5rem and `--text-lg` 1.125rem.

## Layout

The layout is a visible grid: vertical hairlines at the column boundaries and plus-shaped registration marks at the row intersections. Text blocks are pinned to grid cells at the top (a two-line label, the tagline, a paragraph) and at the bottom (statement at the left, clock, coordinates and icon in a footer strip). Stickers float freely over the grid; the "hello" lettering sits in the middle.

Spacing values measured: 1.92, 4, 8, 12, 16, 24, 28, 56, 64 and 96px (`s1`-`s10`). Navigation links have 8px padding; the footer strip has 64px padding. Common gaps are 12px, 4px and 8px.

## Elevation & Depth

There are no box shadows and no borders in the measured data. Depth is illusionistic and lives in the artwork: glossy glass 3D lettering, stickers with thin outlines and a soft light gradient. The UI layer is flat black text over the background image.

## Shapes

No border radius was measured: `borderRadii` is empty, so every rendered element computes to 0px. The rounded outlines you see are inside the sticker artwork and 3D lettering, not CSS shapes. The only interface shapes are the hairline grid, the plus marks and the small bracketed key hints.

## Components

The page has no buttons or form fields.

- **nav-link**: tiktok 16px/700 uppercase in `ink`, padding 8px; entries are WORK, CONTACT, THEME[A] and SOUND[\]. On hover the SOUND label changes its bracket glyph (measured: `SOUND[|]` becomes `SOUND[/]`), a text-only animation with no color change.
- **link**: `ink` text in the body statement style.
- **nav**: header text in `ink`.
- **footer**: text `ink`, padding 64px.
- **Stickers and 3D lettering**: image content; they carry all the color.

## Design System Architecture

No public design-system, brand-guideline or press-kit page is linked from the page: the fetch listed only Work, Contact, theme and sound toggles and social links. The CSS is a Tailwind v4-style build (`--tw-*` variables and `--text-*` sizes) with its own semantic variables for background (`--background-1`, `--background-elevated`), labels (`--label-2`, `--label-3`), line colors (`--color-l2`, `--color-b1`, `--color-be`) and fonts (`--font-mono`). The site embeds the Leva debug panel (its variables are present), which is development tooling and not part of the visual system. The site offers a THEME toggle; the alternative theme was not measured and is not described.

## Do's and Don'ts

Do:
- Keep the UI black on #fbfaf4 and let imagery supply color.
- Use uppercase 16px bold for navigation and monospaced paragraphs for descriptions.
- Show the visible grid with hairlines and plus marks; add bracketed key hints and a live clock or coordinates.
- Keep every UI corner at 0px.

Don't:
- Use Leva's #007bff or other library defaults as brand colors.
- Add borders, shadows or filled buttons to the interface layer.
- Use the lime #c0fe04 for large areas; its measured use is small.

## Responsive Behavior

Measured at the mobile viewport (390px wide): the h1 style is 28.08px bold uppercase (versus 30px weight 500 on desktop), the body statement is 20px with line height 26px (versus 53.76px), and the header shows "HAOQI.DESIGN" with a time and temperature readout ("11:10 25°C") in place of the desktop link list. Other mobile behavior was not measured.

## Iteration Guide

1. Set the background image and place black text on `canvas`.
2. Draw the grid with hairlines and plus marks; pin text to cells.
3. Use uppercase bold 16px navigation with bracketed hints.
4. Put the brand's personality into artwork, not UI.
5. Confirm no UI element has a radius, border or shadow.
