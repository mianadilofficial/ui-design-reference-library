---
version: alpha
name: Base UI
category: "Design Systems"
description: "Base UI documentation home: an unstyled React component library presented on a near-white canvas (#fcfcfc) in near-black ink (#2e2e2e) with muted gray (#767676), set in the \"die grotesk\" families at a single 400 weight (42px headline, 18px body), 8px radii, hairline-ruled lists and no filled buttons or brand color."

colors:
  canvas: "#fcfcfc"
  page-largest: "#f3f3f3"
  ink: "#2e2e2e"
  primary: "#2e2e2e"
  surface-tile: "#f9f9f9"
  ink-muted: "#767676"
  hairline: "#e0e0e0"
typography:
  display:
    fontFamily: "\"die grotesk b\", system-ui, -apple-system, \"system-ui\", \"Helvetica Neue\", arial, sans-serif"
    fontSize: 42px
    fontWeight: 400
    lineHeight: 44px
  display-mobile:
    fontFamily: "\"die grotesk b\", system-ui, -apple-system, \"system-ui\", \"Helvetica Neue\", arial, sans-serif"
    fontSize: 34px
    fontWeight: 400
    lineHeight: 34px
  heading:
    fontFamily: "\"die grotesk a\", system-ui, -apple-system, \"system-ui\", \"Helvetica Neue\", arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25px
  nav:
    fontFamily: "\"die grotesk a\", system-ui, -apple-system, \"system-ui\", \"Helvetica Neue\", arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22px
rounded:
  xs: 8px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 48px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
---

## Overview

Base UI's home page (https://base-ui.com, opened 2026-10-09) is a text-first manifesto page for an unstyled React component library. The capture is almost entirely type on a near-white field: a small black logo mark at top left, three underlined links (X, GitHub, Discord) and a "Search (⌘K)" label across the top, a three-line headline "Unstyled UI components for building accessible user interfaces", a single underlined "Documentation" link with a chevron, then a narrow centered reading column with four paragraphs about the library's mission. Below come labeled sections in a two-column layout: "Made for the makers" (six gray tiles with logos for Paper, GitHub, Zed, Unsplash, Operate and Interfere), "So you know who to blame" (a ruled table of eight names and roles) and "The fine print" (seven ruled question rows with plus icons, an accordion).

The page has no filled buttons, no brand color and no photography. The design intent reads as editorial restraint: the product is unstyled, so the site shows only type, rules and space. That is why `{colors.primary}` equals `{colors.ink}` here (#2e2e2e): the measurement found no separate action color, and the primary affordance is an underlined link.

**Key Characteristics:**
- One ink, `{colors.ink}` #2e2e2e, carrying 1444 of the measured text characters; the only other text color is `{colors.ink-muted}` #767676 (4 characters).
- Canvas `{colors.canvas}` #fcfcfc with `{colors.page-largest}` #f3f3f3 as the largest measured fill and `{colors.surface-tile}` #f9f9f9 as a faint secondary surface.
- A single weight (400) across all type, in two "die grotesk" cuts: B for the display headline, A for everything else.
- Underlined text links instead of buttons.
- Ruled rows (`{colors.hairline}` #e0e0e0, defined as `--gray-c3`) separate list items and tables.
- A left label column and a right content column: section titles sit at the left gutter, content in an indented narrower column.

## Colors

> **Source pages:** home (`/`), measured at 1280px and 390px.

### Brand & Accent
There is no measured accent. `{colors.primary}` #2e2e2e is a reassignment of the ink value because the page has no CTA fill. The site's root variables define a palette of saturated hues (indigo, grape, green, lime, orange, poppy and pink steps named `--indigo-t1`, `--grape-t1`, `--poppy-t1` and so on) used by its docs and demos, but none appears in the captured home page's text or fills, so none is promoted to a token.

### Surface
- **Canvas** (`{colors.canvas}` #fcfcfc): body background, matching the root variable `--gray-s1`.
- **Page Largest** (`{colors.page-largest}` #f3f3f3): the largest-area background measured; in the capture the logo tiles under "Made for the makers" appear as light gray squares of this family.
- **Surface Tile** (`{colors.surface-tile}` #f9f9f9): a secondary light surface, the root variable `--color-background`.

### Text
- **Ink** (`{colors.ink}` #2e2e2e): all headings, body, links and navigation.
- **Ink Muted** (`{colors.ink-muted}` #767676): rare secondary text such as the "(⌘K)" hint.

### Borders
- **Hairline** (`{colors.hairline}` #e0e0e0): the root variables `--gray-c3` and `--color-gridline` share this value, used for ruled lists. The measured border color of record in the extraction is #2e2e2e on two elements.

### Semantic
No success, warning or error colors are present on the page.

## Typography

### Font Family
Two faces are loaded: "die grotesk a" and "die grotesk b", both at weight 400 and normal style. Root variables `--font-sans` and `--font-sans-b` name them with a `system-ui, sans-serif` fallback; the code font variable names "Paper Mono". The extraction did not identify a foundry or license for these faces and no source for them was opened, so they are treated as the site's own loaded fonts. If they are unavailable, the measured stack falls to `system-ui, -apple-system, "Helvetica Neue", arial, sans-serif`, and a neutral grotesque at weight 400 is the closest stand-in for the look.

### Hierarchy

| Token | Size | Weight | Line Height | Use |
|---|---|---|---|---|
| `{typography.display}` | 42px | 400 | 44px | Page headline (die grotesk b) |
| `{typography.display-mobile}` | 34px | 400 | 34px | Headline at 390px |
| `{typography.heading}` | 18px | 400 | 25px | Section titles, links, paragraph text |
| `{typography.nav}` | 15px | 400 | 22px | Header links and footer links |

### Principles
- Hierarchy comes from size and placement only; weight is always 400.
- The headline uses almost one-to-one line height (44px on 42px), a compact block of three lines.
- Body text is the same 18px size as section titles; the left-hand label column is what distinguishes titles from text.
- Links are underlined, never colored.

## Layout

### Spacing System
Measured steps are 4, 8, 12, 16 and 48px (`{spacing.s1}` to `{spacing.s5}`). The body measures padding of 32px 48px. Root variables define a space scale (`--space-4` through `--space-48`), `--header-height: 4rem` and a maximum layout width `--breakpoint-max-layout-width: 89rem`.

### Grid & Container
A two-column composition: labels at the left gutter, content indented into a narrow reading column. The header places the three links and the search label at fixed columns across the width. The logo tiles run in a single row of six.

### Whitespace Philosophy
Large vertical gaps separate sections; rows inside lists are tight and divided by rules.

## Elevation & Depth

The page measures no box shadows. Depth is absent by design; separation uses rules and tonal tiles. The site's root variables nevertheless define a five-step shadow scale (`--shadow-1` through `--shadow-5`, for example `--shadow-1: 0 1px 1px 0 #0000000a, 0 2px 1px -1px #0000000a, 0 1px 3px 0 #0000000a`) that serves the docs' popups and demos, not the home page.

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 8px | The only radius measured on the page (logo tiles) |

The stylesheet also defines radii of 2, 4, 6, 12, 16 and 9999px for docs components, but the home page uses 8px only. Imagery is limited to monochrome logos centered in square tiles, plus a small black logo mark in the header.

## Components

### Navigation
`nav` and `nav-link`: no fill, text `{colors.ink}`, links in `{typography.nav}`, underlined. They stack vertically in the capture rather than sitting in a bar.

### Link
`link`: `{colors.ink}` text at `{typography.heading}` 18px, underlined with a trailing chevron ("Documentation").

### Tiles
Square tiles at 8px radius on the light gray fill, with a caption in 15px beneath. No border.

### Lists and accordion
Rows separated by one-pixel rules. The FAQ rows end in a plus icon and expand in place. The page's markup includes ids of the form `base-ui-…` and `data-base-ui-click-trigger` attributes on these elements, and the page source references `@base-ui/react`.

### Buttons
No filled or outlined button was measured on this page, so none is declared.

## Design System Architecture

Base UI describes itself as "an unstyled UI component library for building accessible user interfaces" in its README at https://github.com/mui/base-ui, written by the team behind Radix, Floating UI and Material UI; the home page repeats this ("From the creators of Radix, Floating UI, and Material UI"). Its docs are at https://base-ui.com. The library is real and the home page uses it: the opened page source references `@base-ui/react` and contains `base-ui-` generated ids and `data-base-ui-click-trigger` attributes on the accordion triggers.

Because the library ships no visual styling, the visual system documented here is the docs site's own: Tailwind-style custom properties (`--space-*`, `--radius-*`, `--font-size-*`, `--shadow-*`, `--color-*`) plus a hand-named gray and hue ramp (`--gray-t2` #2e2e2e, `--gray-t1` #767676, `--gray-c1` #f3f3f3, `--gray-c3` #e0e0e0, `--gray-s1` #fcfcfc, `--gray-s2` #f9f9f9). The ink, canvas and gray tokens in this file are those values as measured on the page. No separate design-token package was found.

## Do's and Don'ts

**Do**
- Keep everything in `{colors.ink}` on `{colors.canvas}` unless a demo needs color.
- Use one weight (400) and let size and position do the hierarchy.
- Use underlined links for actions and thin rules for structure.
- Keep tiles at `{rounded.xs}` 8px.

**Don't**
- Don't add filled buttons or a brand hue to the home page.
- Don't add shadows; the page measures none.
- Don't bold headings.
- Don't treat the docs' saturated hue ramp as the home palette.

## Responsive Behavior

At 390px the headline falls from 42px/44px to 34px/34px, both at weight 400. Body padding on desktop is 32px 48px. The two-column label/content arrangement is a desktop pattern; the mobile measurement lists only the headline, body text and navigation roles. The root variables define breakpoints through Tailwind-style container sizes (`--container-3xs` 16rem to `--container-md` 28rem) and the 89rem max layout width.

## Iteration Guide

1. Start with `{colors.canvas}` and `{colors.ink}` only; add no hue.
2. Use 18px for text and titles, 15px for navigation, 42px for the page headline.
3. Separate content with `{colors.hairline}` rules, not boxes.
4. Keep every radius at 8px unless a measured component says otherwise.
5. Add a color only from a measured page, and cite which page.
