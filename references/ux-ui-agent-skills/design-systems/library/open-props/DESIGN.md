---
version: alpha
name: Open Props
category: "Atomic CSS & Utilities"
description: "Open Props (open-props.style) is a library of CSS custom properties, and its site shows it - a pale #f8f9fa canvas with white #ffffff cards, near-black #030507 ink on a system-ui stack, weight-900 headlines at 56px and 40px, indigo link and code colors (#4263eb, #364fc7), small 5px control radii, and layered multi-stop soft shadows from the library's own shadow scale."

colors:
  canvas: "#f8f9fa"
  page-largest: "#ffffff"
  ink: "#030507"
  primary: "#6267e7"
  on-primary: "#f1f8ff"
  surface-input: "#e9ecef"
  surface-tint-blue: "#e7f4ff"
  ink-indigo: "#364fc7"
  ink-gray: "#868e96"
  ink-purple: "#862e9c"
  ink-secondary: "#495057"
  link: "#4263eb"
  hairline: "#dee2e6"

typography:
  display:
    fontFamily: system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif
    fontSize: 56px
    fontWeight: 900
    lineHeight: 70px
  display-mobile:
    fontFamily: system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif
    fontSize: 40px
    fontWeight: 900
    lineHeight: 50px
  subheading:
    fontFamily: system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif
    fontSize: 32px
    fontWeight: 900
    lineHeight: 40px
  body:
    fontFamily: system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif
    fontSize: 17.6px
    fontWeight: 400
    lineHeight: 26.4px
  button:
    fontFamily: system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  link:
    fontFamily: system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  code:
    fontFamily: Dank Mono
    fontSize: 16px
    fontWeight: 400

rounded:
  xs: 2px
  sm: 5px
  lg: 16px
  xl: 32px
  xxl: 64px
  pill: 9999px

spacing:
  hair: 1px
  xs: 4px
  sm: 6px
  md: 8px
  lg: 16px
  xl: 20px
  xxl: 24px
  huge: 48px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8.21484px 19.168px
    height: 40px
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  text-input:
    backgroundColor: "{colors.surface-input}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 7.55859px 0px 7.55859px 12.5977px
    height: 35px
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 20px 24px
    borderColor: "{colors.hairline}"
    boxShadow: >-
      rgba(37, 38, 39, 0.03) 0px -1px 2px 0px, rgba(37, 38, 39, 0.04) 0px 3px 2px -2px, rgba(37, 38, 39, 0.04) 0px 7px 5px -2px, rgba(37, 38, 39, 0.05) 0px 12px 10px -2px, rgba(37, 38, 39, 0.06) 0px
      22px 18px -2px, rgba(37, 38, 39, 0.07) 0px 41px 33px -2px, rgba(37, 38, 39, 0.08) 0px 100px 80px -2px
  gallery-card:
    rounded: "{rounded.lg}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

Open Props is Adam Argyle's open-source set of CSS custom properties (design tokens), and its marketing page doubles as a catalogue and a demo. The home page (https://open-props.style, version v1.7.23, MIT license, as printed on the page) opens on a pale gray canvas with the logo at top-left, a header of text links ("Get Started", "Try in browser" with a small green "RAD" badge), a theme toggle and a GitHub icon. Below that a two-column hero: a gradient-filled, weight-900 headline "Supercharged CSS variables." with a three-item checklist on the left, and two floating white code cards on the right showing `@import "https://unpkg.com/open-props";` and a `.card` rule that uses Open Props variables.

The rest of the page is a horizontally scrolling strip of PropPack names (Colors, Gradients, Shadows, Aspect Ratios, Typography, Easing, Animations, Sizes, Borders, Z-Index, Media Queries, Masks, Durations), a "Built with Open Props" gallery of demo cards (Hero Layout, Adaptive Buttons, Adaptive Cards, Pagination Example, 4 Color Schemes, Light / Dark Switch, a "Make it pop" demo and a Normalize Preview), a "Why Use Open Props?" list, file sizes, a "Coming Soon" list and an interactive palette generator with a "Shuffle" button.

**Key Characteristics:**
- Token-driven: the site is built with its own library (the page states "This site is built with Open Props"), and 399 custom properties were measured on `:root`.
- Pale canvas (`{colors.canvas}`) with white (`{colors.page-largest}`) cards that sit on large layered shadows.
- Heavy headlines: weight 900 at 56px, 40px and 32px; body in the system font at 17.6px.
- Indigo accent family for links and code (`{colors.link}`, `{colors.ink-indigo}`), purple for code values (`{colors.ink-purple}`).
- Small, practical radii (`{rounded.sm}` 5px) on controls; large 16px radii on the gallery cards.
- Code is a first-class citizen: Dank Mono (first in the library's monospace stack) is the most-read font on the page by character count.
- Gradient text on `h1` and `h2` headings (a four-stop vertical linear gradient from pink through violet to cyan, clipped to the text).

## Colors

> Source: measured on https://open-props.style plus the official palette and theme files in https://github.com/argyleink/open-props (cited in SOURCES.json).

### Brand & Accent
- **Primary** (`{colors.primary}` - `#6267e7`) with **On Primary** (`{colors.on-primary}` - `#f1f8ff`): the fill and label of the page's only detected filled button, the "Shuffle" control of the palette generator. Its color comes from the generated `--color-*` ramp built on `--palette-hue` (the page's own demo code shows `--palette-hue: 270`), so it is a demo output rather than a fixed brand token. It is kept as `primary` because it is the measured button color.
- **Link** (`{colors.link}` - `#4263eb`): the `--link` value measured on `:root`; the official light theme sets `--link: var(--indigo-7)`, and `--indigo-7` is `#4263eb` in the palette file. Nav links turn this color on hover.
- **Ink Indigo** (`{colors.ink-indigo}` - `#364fc7`): `--indigo-9` in the official palette; heavy use in code samples (variable names appear in blue in the capture).
- **Ink Purple** (`{colors.ink-purple}` - `#862e9c`): `--purple-9` in the official palette; string values in code samples.

### Surface
- **Canvas** (`{colors.canvas}` - `#f8f9fa`): `--surface-1`, which the official light theme maps to `--gray-0`.
- **Page Largest** (`{colors.page-largest}` - `#ffffff`): the largest measured background area; white cards and code blocks.
- **Surface Input** (`{colors.surface-input}` - `#e9ecef`): `--surface-2` (`--gray-2`); inputs and selects (the light theme sets `background-color: var(--surface-2)` on form fields).
- **Hairline** (`{colors.hairline}` - `#dee2e6`): `--surface-3` / `--gray-3`; 1px card borders (the most-measured border color).
- **Surface Tint Blue** (`{colors.surface-tint-blue}` - `#e7f4ff`): a pale blue background measured on the page.

### Text
- **Ink** (`{colors.ink}` - `#030507`): `--text-1` (`--gray-12`); headings, body, nav.
- **Ink Secondary** (`{colors.ink-secondary}` - `#495057`): `--gray-7`; secondary copy.
- **Ink Gray** (`{colors.ink-gray}` - `#868e96`): `--gray-6`; muted gray text.

### Semantic
No success/warning/error system was identified on the marketing page. The library itself ships hue ramps for many colors (pink, red, orange, yellow, lime, green, teal, cyan, blue, indigo, violet, purple, grape, gray, stone, and others) and a `brand-colors.css` pack (third-party brand colors such as Spotify, YouTube and Microsoft), but those are library content, not this site's UI palette.

### Gradient
The headline gradient is a measured value on `h1` and `h2`: `linear-gradient(rgb(229, 153, 247), rgb(177, 151, 252), rgb(145, 167, 255), rgb(102, 217, 232))` with `background-clip: text`. These stops correspond to the library's gradient/palette features rather than named tokens in this file.

## Typography

### Font Family
Body and headings use the page's system stack: `system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif`. The official `props.fonts.css` defines `--font-system-ui: system-ui, sans-serif` and `--font-sans` pointing at it. Code uses `--font-mono`, which points at `--font-monospace-code`: `Dank Mono, Operator Mono, Inconsolata, Fira Mono, ui-monospace, SF Mono, Monaco, Droid Sans Mono, Source Code Pro, Cascadia Code, Menlo, Consolas, DejaVu Sans Mono, monospace`.

### Hierarchy

| Token | Size | Weight | Line Height | Use |
|---|---|---|---|---|
| `{typography.display}` | 56px | 900 | 70px | Hero h1 "Supercharged CSS variables." |
| `{typography.display-mobile}` | 40px | 900 | 50px | h1 at 390px; also the "Built with Open Props" h2 on desktop |
| `{typography.subheading}` | 32px | 900 | 40px | Gallery card titles (h3, e.g. "Hero Layout") |
| `{typography.body}` | 17.6px | 400 | 26.4px | Paragraphs and checklist items |
| `{typography.button}` | 16px | 700 | 24px | Button label |
| `{typography.link}` | 16px | 400 | 24px | Links, input text |
| `{typography.code}` | 16px | 400 | - | Code samples (Dank Mono) |

### Principles
- Only weights 400, 700 and 900 matter for the main roles; the measured set also includes 600 (small labels), 200 and 300 (a few runs).
- The library's own scale: `--font-size-5` through `--font-size-8` are 2rem, 2.5rem, 3rem and 3.5rem, `--font-size-fluid-3` is `clamp(2rem, 9vw, 3.5rem)`; the 56px h1 equals `--font-size-8` (3.5rem), the 40px h2 equals `--font-size-6` (2.5rem) and the 32px h3 equals `--font-size-5` (2rem).
- The 17.6px body size is `--font-size-2` (1.1rem).
- Line-height scale from the library: `--font-lineheight-0` 1.1 up to `--font-lineheight-5` 2.

### Font substitutes
Dank Mono is a commercial font and is not loaded from the site (no `@font-face` was measured), so it only renders where installed; the stack falls through to Operator Mono, Inconsolata, Fira Mono, then platform monospace fonts. Fira Code or JetBrains Mono are reasonable look-alikes, a suggestion rather than something the site specifies.

## Layout

- **Header.** Logo mark and wordmark at left, nav links, theme toggle and GitHub icon at right; the measured header link height is 24px and the logo link is 64px tall.
- **Hero.** Two columns at desktop: text block left, stacked code cards right. A thin orange horizontal rule closes the hero.
- **PropPack strip.** A single row of text links that overflows the viewport and scrolls horizontally.
- **Gallery.** Two-column grid of demo figures with `{rounded.lg}` radius; each card is about 454px wide in the capture with a preview above and a title plus prop count below ("18 props + normalize.css", "10 props", "8 props + normalize.css", "16 props", "+2 imports").
- **Docs sections.** The long page (about 47,000px tall at 1280px) continues with reasons, file-size tables and the palette generator.
- **Spacing.** Measured gaps cluster on 8px, 24px, 4px, 48px and 20px; paddings on 1px (inset rings), 20px, 8px, 4px and 24px, which match the library's `--size-px-*` scale (4, 8, 16, 20, 24, 28, 32, 48, 64 ...).

## Elevation & Depth

Elevation is the site's signature. Cards, code blocks and gallery figures sit on multi-layer shadows built from the library's `--shadow-*` scale, which are `hsl(var(--shadow-color) / strength)` stacks with `--shadow-color: 220 3% 15%` and `--shadow-strength: 1%` in light mode (the official `props.shadows.css`; in dark mode the color becomes `220 40% 2%` and strength 25%). Measured shadows on the page include:

- A 1px inset ring `rgba(37, 38, 39, 0.1) 0px 0px 0px 1px inset` (274 elements) used as a border substitute.
- The six-layer shadow equal to `--shadow-4` on the gallery figures.
- The seven-layer shadow equal to `--shadow-6` (reaching 100px blur offset) on the hero code card, recorded in `{components.card}`.
- A softer two-layer shadow equal to the library's `--shadow-2`, also measured on the page.

Hover raises the code card from `--shadow-2` to `--shadow-3`, as the page's own CSS sample shows. Text shadows (`--text-shadow-1` to `--text-shadow-6`) and inner shadows (`--inner-shadow-0` to `--inner-shadow-4`) exist in the library.

## Shapes

- `{rounded.xs}` 2px (`--radius-1`): tiny elements.
- `{rounded.sm}` 5px (`--radius-2`): buttons, selects, inputs and the hero code card (via `--radius-conditional-2`, which the library defines as `clamp(0px, calc(100vw - 100%) * 1e5, var(--radius-2))`: the radius drops to zero when the element is full viewport width).
- `{rounded.lg}` 16px (`--radius-3`, 1rem): gallery figures.
- `{rounded.xl}` 32px (`--radius-4`) and `{rounded.xxl}` 64px (`--radius-5`): larger shapes in demos.
- Round (`--radius-round: 1e5px`): 411 elements measured with the 100000px radius (fully rounded elements); recorded as `{rounded.pill}` (9999px) because the generator normalizes pills.
- Drawn and blob radii (`--radius-drawn-1` to `-6`, `--radius-blob-1` to `-5`): library features shown in demos (a "jagged" blockquote and a hand-drawn radius), not site chrome.

## Components

### Primary button
`{components.button-primary}`: `{colors.primary}` fill, `{colors.on-primary}` label, `{typography.button}` (16px, 700), `{rounded.sm}`, padding 8.21px by 19.17px, 40px tall, 125px wide for "Shuffle" with a refresh icon. This is a demo control; the official `buttons.css` (https://github.com/argyleink/open-props/blob/main/src/extra/buttons.css) styles buttons instead as white pills-with-5px-radius with a 2px `--surface-3` border, `--shadow-2`, weight 700 text and an optional `--_accent`.

### Link
`{components.link}`: `{colors.link}` 16px regular. Nav links are `{colors.ink}` and become `{colors.link}` with an underline on hover (measured on "Get Started" and "Try in browser").

### Text input / select
`{components.text-input}`: `{colors.surface-input}` fill, `{colors.ink}` text, `{rounded.sm}`, 35px tall, 12.6px left padding. The page's select ("--font-size-5 ... --font-size-8") is the measured instance.

### Code card
`{components.card}`: white `{colors.page-largest}`, 1px `{colors.hairline}` border, `{rounded.sm}`, padding 20px 24px, the seven-layer shadow, Dank Mono 16px text with syntax colors from the indigo and purple families.

### Gallery card
`{components.gallery-card}`: 16px radius figure containing a preview image (the demos include a hero layout, adaptive buttons, a pagination control, color-scheme swatches and a light/dark switch), a heavy 32px title and a small meta line.

### Nav
`{components.nav}`: ink-colored text links without backgrounds; hover is color and underline only.

### Footer
`{components.footer}`: ink text; the footer on the capture carries `@import` code samples for the CSS import snippets.

### Badge
A small green "RAD" tag sits beside "Try in browser" in the header (visible in the capture; its exact styling was not measured).

## Design System Architecture

Open Props is itself a design-token system, published as CSS custom properties and as JavaScript objects.

- **Repository and package.** https://github.com/argyleink/open-props, npm package `open-props` (version 1.7.23 in the fetched `package.json`, MIT, author Adam Argyle). Exports include the full CSS bundle, per-pack source files (`src/props.colors.css`, `src/props.sizes.css`, `src/props.borders.css`, `src/props.shadows.css`, `src/props.fonts.css`) and JS versions (`open-props/src`, `open-props/src/animations`, ...).
- **PropPacks.** The home page lists individual packs with sizes: animations, aspects, borders, colors (228 props), colors-hsl, durations, easings, fonts, gradients, masks (edges and corner cuts), media, shadows, sizes, supports, zindex, brand-colors; the full bundle is "500+ props" in 4.0 kB Brotli (as printed on the page).
- **Naming.** Numeric ramps (`--gray-0` to `--gray-12`, `--size-1` to `--size-15`, `--shadow-1` to `--shadow-6`, `--radius-1` to `--radius-6`, `--font-size-00` to `--font-size-8`) with fluid variants (`--size-fluid-1` ... `--size-fluid-5`, `--font-size-fluid-0` ... `-3`).
- **Extras.** `normalize.css` (light and dark), `theme.light.css` / `theme.dark.css` which define semantic aliases (`--link`, `--link-visited`, `--text-1`, `--text-2`, `--surface-1` to `--surface-4`) and `buttons.css`; the site links these from the home page.
- **Tooling.** The site links the Design Tokens Community Group format and the postcss-jit-props plugin (https://github.com/GoogleChromeLabs/postcss-jit-props) for on-demand props.
- **Site build.** The site loads `/assets/index-*.css` and `/theme-toggle.js` and imports the library from `unpkg.com`, as shown in its own sample code.

## Do's and Don'ts

### Do
- Do derive values from the scale: `--size-*`, `--radius-*`, `--shadow-*`, `--font-size-*`; the site's measured values all map to these.
- Do put pale surfaces under white cards with layered shadows.
- Do keep headings at weight 900 and body at 400.
- Do use `{colors.link}` for links and the indigo and purple code colors inside code samples.
- Do use semantic aliases (`--surface-1`, `--text-1`) so light and dark themes can swap.

### Don't
- Don't use a hard single-layer drop shadow; the system layers soft shadows with small negative spreads.
- Don't round buttons beyond `{rounded.sm}` on the docs UI.
- Don't hardcode palette hexes; reference the ramp variables.
- Don't treat the generated "Shuffle" color as a fixed brand color.
- Don't use the drawn or blob radii for functional UI.

## Responsive Behavior

- **Headline.** The h1 is 56px at 1280px and 40px at the 390px viewport (`{typography.display-mobile}`).
- **Hero.** Two columns at 1280px. The mobile layout of the hero was not inspected beyond the 390px typography measurement, so no breakpoint is claimed.
- **PropPack strip.** Overflows horizontally and scrolls on all sizes.
- **Gallery.** Two columns at 1280px; cards have a 16px radius.
- **Motion.** The library gates animation on `--motionOK` (a custom media query from `props.media.css`); the home page's samples use `@media (--motionOK)`.
- **Theme.** The header has a sun-icon theme toggle; the page's color-scheme demo offers Auto, Light, Dark, Dim and Grape, and the official theme files respond to `--OSdark`.

## Iteration Guide

1. Start with `{colors.canvas}` background, `{colors.ink}` text, system-ui at 17.6px.
2. Add white `{colors.page-largest}` cards with `{rounded.sm}` radius, a 1px `{colors.hairline}` border and a layered shadow.
3. Headlines: `{typography.display}` / `{typography.display-mobile}` / `{typography.subheading}`, weight 900, optional gradient text.
4. Links in `{colors.link}`; code in Dank Mono with `{colors.ink-indigo}` and `{colors.ink-purple}`.
5. Inputs use `{colors.surface-input}`; buttons use `{rounded.sm}` and weight 700.
6. For gallery tiles use `{rounded.lg}`.
7. Voice: terse, enthusiastic dev copy ("Supercharged CSS variables.", "Make it pop", "RAD") with the code visible next to every claim.
