---
version: alpha
name: Guri Technologies
category: "Thai Brands"
description: "Guri Technologies (Thailand) agency site - warm paper (#fafaf7, #f0f0eb) and near-black (#0e0e10) with a #a8351a brick-red primary button and #f26b3d orange accent, Space Grotesk 72px display, Inter Tight body and JetBrains Mono labels, 4px radius."
colors:
  canvas: "#f0f0eb"
  page-body: "#fafaf7"
  ink: "#4a4b50"
  primary: "#a8351a"
  on-primary: "#fdfdfa"
  surface-ink: "#0e0e10"
  ink-light: "#b8b9be"
  ink-muted: "#6a6b70"
  ink-soft: "#9a9ba1"
  hairline: "#0e0e101a"
  link-border: "#2a2b30"
  card-bg: "#1213169e"
  accent: "#d24a22"
  accent-bright: "#f26b3d"
  paper-white: "#fdfdfa"
typography:
  display:
    fontFamily: "\"Space Grotesk\", \"Space Grotesk Fallback\", \"IBM Plex Sans Thai\", \"Söhne Breit\", Geist, system-ui, sans-serif"
    fontSize: 72.3703px
    fontWeight: 500
    lineHeight: 70.9229px
    letterSpacing: "-2.17111px"
  display-mobile:
    fontFamily: "\"Space Grotesk\", \"Space Grotesk Fallback\", \"IBM Plex Sans Thai\", \"Söhne Breit\", Geist, system-ui, sans-serif"
    fontSize: 41.0555px
    fontWeight: 500
    lineHeight: 40.2344px
    letterSpacing: "-1.23167px"
  heading:
    fontFamily: "\"Space Grotesk\", \"Space Grotesk Fallback\", \"IBM Plex Sans Thai\", \"Söhne Breit\", Geist, system-ui, sans-serif"
    fontSize: 21.4075px
    fontWeight: 500
    lineHeight: 26.7593px
    letterSpacing: "-0.321112px"
  subheading:
    fontFamily: "\"Space Grotesk\", \"Space Grotesk Fallback\", \"IBM Plex Sans Thai\", \"Söhne Breit\", Geist, system-ui, sans-serif"
    fontSize: 25.1112px
    fontWeight: 500
    lineHeight: 29.6312px
    letterSpacing: "-0.502223px"
  body:
    fontFamily: "\"Inter Tight\", \"Inter Tight Fallback\", \"IBM Plex Sans Thai\", Söhne, -apple-system, \"system-ui\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26.4px
  button:
    fontFamily: "\"Inter Tight\", \"Inter Tight Fallback\", \"IBM Plex Sans Thai\", Söhne, -apple-system, \"system-ui\", \"Helvetica Neue\", sans-serif"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 13px
    letterSpacing: "-0.065px"
rounded:
  xs: 2px
  sm: 4px
spacing:
  s1: 8px
  s2: 12px
  s3: 16px
  s4: 24px
  s5: 32px
  s6: 48px
  s7: 64px
  s8: 96px
  s9: 128px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 16px 24px
    height: 50px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 16px 24px
    borderColor: "{colors.link-border}"
  nav:
    textColor: "{colors.page-body}"
    padding: 0px 48px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    padding: 12px 0px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.link-border}"
  footer:
    backgroundColor: "{colors.surface-ink}"
    textColor: "{colors.ink-soft}"
    padding: 96px 48px 32px
---

## Overview

Guri Technologies (guritechnologies.com) is a Bangkok software and automation firm. Its meta description reads "We build the websites, apps, and systems your business runs on, then run them like our own. One firm, accountable end to end. Bangkok, since 2021." The footer names the legal entity as "Guri Technologies (Thailand) Co., Ltd." and says it is BOI-promoted. The about page, which was opened, lists the service tree: Build, Automate, Modernize, Operate and Consult; web and product work; automation and data; content and growth; AI features and agents; and managed operations, tech audit, build-versus-buy and external CTO.

The site reads like an editorial engineering publication. The first screen is dark: a thin black nav with the lowercase wordmark "guri_" (with a trailing underscore cursor), centred links (Services with a dropdown, Industries, Work, About, Insights) and an outlined "Start a project" button at the right; a monospace strapline row ("GURI(R) PLATFORMS, ENGINEERED." and "BANGKOK - SINCE 2021"); the h1 "Run your business, not your software." with an orange underscore; a short paragraph; a brick-red "Tell us about your project" button and an outlined "Five ways to build it" button. A translucent dark panel at the right shows an "ACCEPTING PROJECTS" status with a live Bangkok clock, a short message ("A reply from the person who'll build it.") and two data cells (FIRST REPLY: 1 business day; YOUR DETAILS: Kept private). Below the dark hero the page turns to warm paper: a "THE DIFFERENCE" section with a black-and-white spiral staircase photograph, a two-column table contrasting "The usual way" with "How we work", a large pull-quote "We build your software the way we build our own." with the last words in orange, and a "Selected work" section.

The voice is direct and anti-jargon, built on short declaratives and contrast pairs; small uppercase monospace eyebrows label every section.

## Colors

- **Canvas `#f0f0eb`** and **page body `#fafaf7`**: the paper pair. `#fafaf7` is the largest area (6635) and `#f0f0eb` (3173) is the band behind the pull-quote; `#fdfdfa` (area 1001) is a lighter paper used for button text and panels.
- **Ink `#4a4b50`**: the most-read text (3585 characters), body copy on paper.
- **Surface ink `#0e0e10`**: the near-black of the hero, nav and footer (area 3123) and of headings on paper (1162 characters).
- **Primary `#a8351a`**: the brick-red button fill and link text (area 22). Hover turns the button to oklch(0.7533 0.1546 41.6), the orange `#f26b3d`.
- **Accent `#d24a22`** (area 2, 15 characters) and **accent bright `#f26b3d`** (63 characters): the orange of the cursor underscore, status square and the "our own" emphasis.
- **Ink light `#b8b9be`** (1009 characters), **ink soft `#9a9ba1`** (197) and **ink muted `#6a6b70`** (340): secondary text on dark and light grounds.
- **Hairline `#0e0e101a`** (the root `--paper-line`), **link border `#2a2b30`** and **card background `#1213169e`** (the translucent `--ink-panel` of the dark status panel).

The root variables define a fuller system in OKLCH: an ink ramp `--c-ink-200` to `--c-ink-900`, paper steps `--c-paper-0` (oklch(99.4% .004 106.5)), `--c-paper-100` and `--c-paper-200`, an accent ramp `--c-accent-300` to `--c-accent-700` (hue 35-42) and status colours (`--c-error`, `--c-info`, `--c-success`, `--c-warning`) with tint, border, text and dark variants. Which of those the home page actually paints beyond the values above was not recorded.

## Typography

Three families are loaded: **Space Grotesk** (400, 500) for headings (989 characters), **Inter Tight** (400, 500) for body and UI (5063 characters), and **JetBrains Mono** (400, 500) for eyebrows, status text and the footer (877 characters). IBM Plex Sans Thai is declared in each stack for Thai glyphs, with "Söhne Breit", Geist and system-ui behind.

- **Display**: Space Grotesk 500, 72.3703px, line-height 70.9229px, letter-spacing -2.17111px; mobile 41.0555px / 40.2344px / -1.23167px.
- **Subheading**: 25.1112px, line-height 29.6312px, letter-spacing -0.502223px.
- **Heading**: 21.4075px, 26.7593px, -0.321112px.
- **Body**: Inter Tight 400, 16px, line-height 26.4px.
- **Button**: Inter Tight 500, 13px, line-height 13px, letter-spacing -0.065px.
- **Mono labels**: JetBrains Mono 11px, 16.5px line-height, 0.66px letter-spacing, uppercase.
- Sizes by character: 13px (2476), 19.5556px (1306), 16px (1252), 11px (761), 21.4075px (557), 32.6666px (190), 72.3703px (124).

## Layout

The desktop page is 1280px wide and 9590px tall. The root variables define `--container: clamp(360px, 100vw, 1440px)`, a nav height of 64px (`--nav-h`), control heights of 28px (`--control-h-sm`) and 36px (`--control-h-md`) and a fluid spacing scale: `--space-1` 4px, `--space-2` 8px, then clamp-based steps from `--space-3` (8px to 12px) up to `--space-11` (96px to 192px). Measured spacing values are 8, 12, 16, 24, 32, 48, 64, 96 and 128px. Layout is a 12-column-like editorial grid: the hero splits text left and status panel right; the "difference" section pairs a paragraph with a photograph; the comparison is a two-column ruled table with hairlines between rows; the footer has `96px 48px 32px` padding.

## Elevation & Depth

No box shadows were recorded. Depth is expressed with translucency and rules: the nav uses translucent paper (`--nav-paper-translucent: #fafaf7d9`) or ink (`--nav-ink-translucent: #0e0e10b8`), the status panel is a translucent `#1213169e` card with a 1px `#2a2b30` border, and tables use 1px hairlines (`#0e0e101a`, stronger `#0e0e102e`).

## Shapes

Radii are 4px (21 elements) and 2px (1), matching `--radius-1: 2px` and `--radius-2: 4px`. Buttons, the outlined link and the status card use 4px. The photograph and table are square-edged.

## Components

- **Primary button** ("Tell us about your project"): `#a8351a` fill and border, `#fdfdfa` text, 13px/500, 4px radius, `16px 24px` padding, 50px high, with a small arrow glyph; hovers to the orange `#f26b3d`.
- **Outlined link button** ("Five ways to build it", "Start a project"): `#fafaf7` text, 1px border (`#2a2b30` / `#3a3b41`), 4px radius; the nav one is 34px high with `8px 12px` padding.
- **Nav**: 64px, wordmark left, centred links, outlined button right, `0px 48px` padding.
- **Status panel**: `#1213169e` card, mono uppercase header with an orange square and a live clock, 21px message, two small data cells.
- **Comparison table**: two columns, mono uppercase column heads (the "How we work" head in brick red), body rows with hairline separators; the left column is muted grey, the right column near-black.
- **Footer**: `#0e0e10`, `#9a9ba1` mono 11px text, `96px 48px 32px` padding.

## Design System Architecture

No public design system page was found: the homepage links to /about, and the about page lists services but no brand guideline. The shipped CSS, however, is a documented-by-naming token system exposed in 252 root variables: colour ramps (`--c-ink-*`, `--c-paper-*`, `--c-accent-*`), semantic aliases (`--ink`, `--paper`, `--accent`, `--accent-hover`, `--line`, `--ink-muted`, `--ink-faint`, `--accent-on`), status sets with light and dark variants (`--status-info-*`, `--status-warning-*`, `--status-error-*`, `--status-success-*`, `--status-neutral-*`), fluid spacing (`--space-1` to `--space-11`), radii (`--radius-1`, `--radius-2`), controls (`--control-h-sm`, `--control-h-md`), motion (`--ease-decel`) and slide and article variables (`--fs-slide-h2: 42px`, `--article-aside-width: 18rem`). Sources opened: https://guritechnologies.com and https://guritechnologies.com/about.

## Do's and Don'ts

- Do set headings in Space Grotesk 500 with tight negative letter-spacing, body in Inter Tight and eyebrows in uppercase JetBrains Mono.
- Do pair a dark hero with warm paper sections and keep orange for emphasis, status marks and hover.
- Do use contrast pairs and short declarative copy.
- Do keep corners at 4px and borders to 1px hairlines.
- Don't add drop shadows; none were measured.
- Don't use brick red `#a8351a` for large fills; it appears only on the button, link text and a table head.
- Don't use the orange and the brick red interchangeably: the brick red is the resting button, the orange is the hover and accent.
- Don't present the root-variable status colours as home page colours without measuring them.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 "Run your business, not your software." is Space Grotesk 500 at 41.0555px with 40.2344px line-height and -1.23167px letter-spacing (box 358px wide, 121px high); the h2 "A reply from the person who'll build it." is 18.1112px with 22.639px line-height; body copy stays 16px. The root variables also declare clamp-based spacing and `--container: clamp(360px, 100vw, 1440px)`. How the nav and the comparison table rearrange on mobile was not measured.

## Iteration Guide

1. Start with canvas, page-body, ink, surface-ink, primary and the three-family type system.
2. Keep sections alternating dark and paper, eyebrows in mono and one orange moment per section.
3. Pull further tokens from the root variables only after measuring where the page paints them.
4. Verify with `node web/scripts/verify-designs.mjs --slug=guri-technologies`.
