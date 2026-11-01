---
version: alpha
name: Unkey
category: "Developer Tools & IDEs"
description: "Unkey's site pairs a near-black #040406 canvas with articulat-cf display type (64px/72px, weight 400), Inter UI text, JetBrains Mono labels, square white #ffffff buttons with #040406 labels that hover to #e3e4e9, 1px #2e3038 grid rules, a lime #def135 text highlight and a pale-blue gradient band."
colors:
  canvas: "#040406"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#040406"
  primary-hover: "#e3e4e9"
  outline-hover: "#1c1d22"
  surface-card: "#121318"
  ink-body: "#abaebb"
  ink-soft: "#c7c9d1"
  ink-muted: "#9194a1"
  ink-faint: "#464853"
  label: "#60606c"
  hairline: "#2e3038"
  highlight: "#def135"
  focus: "#a3c7fa"
typography:
  display:
    fontFamily: articulat-cf, articulat-cf-fallback, sans-serif
    fontSize: 64px
    fontWeight: 400
    lineHeight: 72px
  heading:
    fontFamily: articulat-cf, articulat-cf-fallback, sans-serif
    fontSize: 44px
    fontWeight: 400
    lineHeight: 49.5px
  heading-mobile:
    fontFamily: articulat-cf, articulat-cf-fallback, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 31.5px
  mono-label:
    fontFamily: "\"JetBrains Mono\", \"JetBrains Mono Fallback\", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 18.75px
  body:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 27.5px
    letterSpacing: "-0.2px"
  button:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: "-0.35px"
  button-large:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: "-0.4px"
  nav:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 6px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 18px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 24px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-hero:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-large}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 44px
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-large}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 44px
    border: "1px solid #ffffff"
  button-outline-hover:
    backgroundColor: "{colors.outline-hover}"
  feature-cell:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-soft}"
    rounded: "{rounded.none}"
    border: "1px solid #2e3038"
  focus-ring:
    boxShadow: rgb(4, 4, 6) 0px 0px 0px 2px, rgb(163, 199, 250) 0px 0px 0px 4px
  footer:
    textColor: "{colors.ink-soft}"
    rounded: "{rounded.none}"
    padding: 44px 0px 72px
---

# Unkey

## Overview

Unkey (www.unkey.com, measured 2026-10 at 1280px; title "Unkey | The Developer Platform for Modern APIs") sells an API platform (keys, gateways, rate limits, observability) through a dark, engineered page that mixes a geometric display face with monospaced data labels. The page scrolls inside an inner container (11,772px of content inside a 2,400px document), and the capture records its top portion.

The header is a strip of square white cells on the black page: the unkey wordmark, Resources, Pricing, Docs, a separate "Discord" cell, a GitHub "5.3k" cell, an outlined "Login" and a white "Sign Up". The hero is dominated by an animated word stack in large uppercase monospace (DEPLOY, SCALE, GATEWAY, OBSERVE, PROTECT) with a blue arrow pointing at the active word "GATEWAY"; the font files for this animation are served from `/rive/home/`. Under it, the h1 "The Developer Platform for Modern APIs" sits left in articulat-cf 64px with a grey paragraph, and two square buttons sit right: white "Start for free" and outlined "View on GitHub". A row of grey customer logos (Fireworks AI, Cal.com, Mintlify, Symbolica, BlindPay, Magic Patterns) follows.

The next section, framed by thin vertical rules, reads "Unify your fragmented API stack with a single control plane for access and traffic.", with "access and traffic." highlighted in lime. Four outlined cells (Branch Overview, Manage API Keys, Control Plane, Usage 30 Days) each show a small monochrome UI diagram with one blue accent, and a two-tone caption ("Faster to ship. Go from code to running API in minutes."). Further down the measured page (not in the capture): a pale-blue gradient band ("Start small, scale to global traffic, and stay protected" with Multi-region routing, Automatic scaling, Predictable pricing, Built-in protection), dark two-tone statements ("Stay in sync with your traffic in real time." / "Every request is logged."), a final call ("Turn your API stack into one workflow.") and a four-column footer (Company, Resources, Connect, Legal).

## Colors

- **Canvas `#040406`** (`--color-background`): the page; header cells and gaps sit on it.
- **Ink `#ffffff`** (`--color-foreground`): headings and emphasised words (1,067 weighted characters).
- **Body greys**: `#9194a1` (`--color-gray-60`, 1,045 characters), `#c7c9d1` (940), `#abaebb` (hero and section paragraphs), `#e3e4e9` (`--color-gray-90`, 565), `#464853` (`--color-gray-30`, faint), `#60606c` (mono cell labels such as "Branch Overview").
- **Primary `#ffffff`** with **`#040406`** labels: every CTA is a white square. Hover fills `#e3e4e9`; outlined buttons hover to `#1c1d22`.
- **Surface `#121318`** (and `--color-gray-8: #121317`): the second-largest area, behind panels.
- **Hairline `#2e3038`** (`--color-gray-20`): 31 bordered elements, the vertical rules and cell outlines.
- **Highlight `#def135`**: lime background behind highlighted phrases ("access and traffic.").
- **Focus `#a3c7fa`**: the outer ring of the focus shadow.
- **Diagram accents**: blues such as `#0095e6`, `#3580f1` and cyan `#35f1e4` appear in small UI illustrations; the gradient band runs from `#b6cdfb` to `#ecf2fe`.

## Typography

Three families:

- **articulat-cf** (760 weighted characters, weight 400; an `articulat-heavy-cf` face is also declared) for display and statements: h1 64px / 72px, section statements 44px / 49.5px, smaller statements 32px and 28px (-0.56px), and 52px for large figures.
- **Inter** (4,039 characters, weights 400 and 500) for body and UI: hero paragraph 20px / 27.5px at -0.2px; 16px body (-0.16px) is the most-read size (2,444); buttons 14px / 20px weight 500 at -0.35px, or 16px / 24px weight 500 at -0.4px on hero buttons; nav 16px / 24px.
- **JetBrains Mono** (129 characters) for cell labels: 15px / 18.75px, -0.375px, and a 14px variant at +0.42px.

Display type stays at weight 400, so the page reads light and technical. Every Inter size is tracked at about -1% to -2.5%. articulat-cf is served as a web font under the family name `articulat-cf`; where it is unavailable, the declared fallback is `articulat-cf-fallback, sans-serif`.

## Layout

The page is 1280px wide with content from x 40 to 1240. The hero is asymmetric: headline and paragraph on the left, buttons right-aligned on the same baseline. Sections below are framed by 1px `#2e3038` vertical rules, and feature rows are four equal outlined cells (up to five columns measured). Spacing is spacious between sections (paddings of 96px, 137px and 229px) and tight inside cells (32px and 40px paddings; gaps of 4px, 20px, 10px and 24px). The root defines `--spacing: .25rem`, `--spacing-content: 96rem` and `--sticky-header-height: 3.375rem` (54px, the measured header height).

## Elevation & Depth

No box shadows were measured on the page. Depth comes from the near-black surface steps (`#040406`, `#121318`), 1px `#2e3038` outlines, the translucent mobile header (`#08080c80`), and the hero animation, whose stacked words fade from bright to dim to suggest depth. The only ring is the focus state: `rgb(4, 4, 6) 0px 0px 0px 2px, rgb(163, 199, 250) 0px 0px 0px 4px`.

## Shapes

Buttons, header cells and feature cells are square (0px). Small radii appear only in UI illustrations: 2px (16 elements) and 6px (6 elements); the root declares `--radius: .375rem` (6px) for components that use it. One pill element was measured.

## Components

- **Primary button**: white `#ffffff`, `#040406` Inter 14px / 20px weight 500 label at -0.35px, padding 0 24px, 44px tall, square; hover `#e3e4e9`. Used for Sign Up, Discord and the GitHub "5.3k" cell.
- **Hero button**: same white square with a 16px / 24px label at -0.4px and padding 0 20px ("Start for free", "Read the docs").
- **Outline button**: `#040406` fill, white label, 1px solid white border, 44px tall; hover `#1c1d22` ("Login", "View on GitHub").
- **Feature cell**: outlined by `#2e3038`, JetBrains Mono label in `#60606c` at the top, a small monochrome diagram, and a caption that starts with a white bold phrase followed by grey text.
- **Highlight**: lime `#def135` behind a phrase inside a 44px statement, with dark text.
- **Header**: white square cells with dark 14px labels, 54px tall including 10px top padding.
- **Footer**: `#c7c9d1` Inter 14px / 17.5px, column headings at 15px weight 500 in white, padding 44px 0 72px.

## Design System Architecture

No public Unkey brand or marketing design-system page was found: https://www.unkey.com/brand returned HTTP 404, and the open-source repository (https://github.com/unkeyed/unkey) contains no marketing-site stylesheet (its tree lists only an email `tailwind.config.ts`). The shipped CSS shows the de-facto system: Tailwind theme variables (`--tw-*`, `--text-*`, `--container-*`, `--spacing: .25rem`, `--breakpoint-sm: 40rem`), a numbered gray scale (`--color-gray-8`, `-20`, `-30`, `-60`, `-90`), semantic roles (`--color-background: #040406`, `--color-foreground: #fff`, `--color-border: #27272a`, `--color-muted-foreground: #a1a1aa`, `--color-popover: #09090b`) and layout variables (`--sticky-header-height`, `--spacing-content`). The `--c15t-*` variables belong to the cookie-consent banner, and `--number-flow-*` to an animated number component.

## Do's and Don'ts

- Do keep every button and cell square, white on near-black.
- Do write statements in articulat-cf at weight 400, with the second clause in grey or a key phrase on lime `#def135`.
- Do use JetBrains Mono only for small labels and data.
- Do frame sections with 1px `#2e3038` rules.
- Do track Inter slightly negative at every size.
- Don't round buttons or add shadows.
- Don't use lime as a button color; it is a text highlight.
- Don't treat the cookie banner's `--c15t-*` values as brand colors.

## Responsive Behavior

Measured at a 390px mobile viewport: section statements drop from 44px / 49.5px to 28px / 31.5px, and the section paragraph from 20px / 27.5px to 18px / 24.75px (-0.18px). The first mobile CTA is the white "Read the docs" button (Inter 16px / 24px, 44px tall). The header is 54px tall on a translucent `#08080c80` fill with an "Open menu" toggle and one header link visible. Up to three card columns were recorded. The most-read mobile sizes are 16px and 15px, with 30px and 22px statement sizes. The mobile h1 size was not recorded by the extractor. Breakpoints between 390px and 1280px were not measured.

## Iteration Guide

1. Set `#040406` canvas, white headings, grey (`#abaebb`, `#9194a1`) paragraphs.
2. Use articulat-cf 400 for h1 (64px / 72px) and statements (44px / 49.5px); Inter for UI; JetBrains Mono for labels.
3. Build square white 44px buttons with `#040406` labels and outlined dark variants.
4. Lay sections inside 1px `#2e3038` rules; use four outlined feature cells with mono labels.
5. Highlight one phrase per statement with `#def135`.
6. Re-measure the inner-scroll sections (gradient band, lower statements) against the live page before extending them.
