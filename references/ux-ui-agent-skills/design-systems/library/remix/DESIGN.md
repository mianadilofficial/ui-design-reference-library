---
version: alpha
name: Remix
category: "Frontend Frameworks"
description: "Remix (remix.run) is a black-canvas (#000000) developer site: a giant electric-blue racing wordmark, Inter 76.8px/700 headlines tracked to -2.304px, JetBrains Mono uppercase keyboard-shortcut nav, brand blue #2dacf9 for hover and highlights, translucent white pill buttons (999px) and glassy 24px-radius panels with #5f91cd46 borders and inset light shadows."
colors:
  canvas: "#000000"
  ink: "#dee2e6"
  primary: "#2dacf9"
  on-primary: "#ffffff"
  nav-chip: "#1e2226"
  ink-soft: "#ffffffc2"
  ink-muted: "#ffffffb8"
  ink-subtle: "#ffffffb3"
  ink-bright: "#ffffffdb"
  hairline: "#ffffff1a"
  button-fill: "#ffffff14"
  tab-fill: "#ffffff09"
  nav-text: "#d6e3ffad"
  input-border: "#ffffff2e"
  code-card: "#01040ac2"
  code-text: "#ffffff66"
  panel: "#000000e6"
  panel-border: "#5f91cd46"
typography:
  display:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 76.8px
    fontWeight: 700
    lineHeight: 76.8px
    letterSpacing: "-2.304px"
  display-mobile:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 42px
    fontWeight: 700
    lineHeight: 42px
    letterSpacing: "-1.26px"
  heading:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 46.08px
    fontWeight: 700
    lineHeight: 47.9232px
    letterSpacing: "-0.9216px"
  subheading:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 35.84px
    letterSpacing: "-0.64px"
  body:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27.9px
    letterSpacing: "-0.008px"
  chip:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 13px
  nav:
    fontFamily: "\"JetBrains Mono\", monospace"
    fontSize: 12px
    fontWeight: 400
    textTransform: uppercase
  link:
    fontFamily: "\"JetBrains Mono\", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  tab-label:
    fontFamily: "\"JetBrains Mono\", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 12px
    letterSpacing: 0.72px
    textTransform: uppercase
  button:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: "-0.008px"
rounded:
  xs: 13px
  sm: 14px
  md: 18px
  lg: 24px
  xl: 28px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 18px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.button-fill}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 18px
    height: 44px
  package-tab:
    backgroundColor: "{colors.tab-fill}"
    textColor: "{colors.on-primary}"
    typography: "{typography.chip}"
    rounded: "{rounded.xs}"
    padding: 0px 12px
    height: 56px
  section-tab:
    backgroundColor: "{colors.tab-fill}"
    textColor: "{colors.on-primary}"
    typography: "{typography.tab-label}"
    padding: 0px 18px
    height: 58px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.nav-text}"
    padding: 24px
  nav-link:
    backgroundColor: "{colors.nav-chip}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 4px 6px
  nav-link-hover:
    textColor: "{colors.primary}"
  text-input:
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 18px
    height: 44px
    borderColor: "{colors.input-border}"
  card:
    backgroundColor: "{colors.code-card}"
    textColor: "{colors.code-text}"
    rounded: "{rounded.md}"
    borderColor: "{colors.hairline}"
    boxShadow: rgba(255, 255, 255, 0.024) 0px 1px 0px 0px inset
  panel:
    backgroundColor: "{colors.panel}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.panel-border}"
    padding: 48px
    boxShadow: rgba(105, 160, 220, 0.2) 0px 1px 0px 0px inset, rgba(55, 105, 165, 0.086) 1px 0px 0px 0px inset, rgba(255, 255, 255, 0.02) 0px 0px 42px 0px inset, rgba(0, 0, 0, 0.16) 0px 0px 0px 2px inset, rgba(0, 0, 0, 0.24) 0px 32px 100px 0px
  footer:
    textColor: "{colors.ink}"
    padding: 40px 24px 24px
---

# Remix

## Overview

Remix is "The Fully-Stacked Web Framework" (the page title), published by Shopify — the footer reads "Docs and examples licensed under MIT ©2026 Shopify, Inc." The home page at remix.run is a single 8165px black scroll. It opens with a huge electric-blue "REMIX" racing wordmark across the full width, then a centred white headline "The fully-stacked web framework" over a dark photographic scene of glowing particle streaks that curve like a race track. Under the headline a one-paragraph pitch lists what Remix bundles: "a server runtime, routing, authentication, sessions, database integrations, a UI framework, asset compilation, dynamic styling, and accessible components in a cohesive stack built on Web APIs." A segmented install field (npm / other package managers with `npx remix new my-app`) is the first action.

The rest of the page is a sequence of glassy panels floating on black, separated by long empty stretches: a tabbed "Build a complete server with Web APIs" explorer (tabs SERVER, DATA, AUTH, ASSETS, COMPONENTS, UI, MIGRATION) with a code card; "A bigger toolkit with a smaller mental model"; "Re-thinking best practices" as a two-column grid of principles; "Better for humans. Better for agents."; and a closing pair of panels, "Take Remix for a test drive" with a "Get started" button and "Stay in the loop" with an email field and "Subscribe".

The header is a keyboard-driven, terminal-style bar: "SCROLL OR PRESS ↓ AND ↑" at the left and bracketed shortcut links at the right — [G] GUIDES, [A] API, [H] GITHUB and four more (seven header links were measured). The voice is direct and technical, written for developers and, explicitly, for coding agents.

## Colors

The canvas is pure **#000000**; the capture is 69% near-black. All text is cool white at different opacities rather than separate greys:

- **ink #dee2e6** — the most-read colour: h2 headlines, body paragraphs, nav links and footer.
- **ink-soft #ffffffc2**, **ink-muted #ffffffb8**, **ink-subtle #ffffffb3**, **ink-bright #ffffffdb** — white at 76%, 72%, 70% and 86% alpha for descriptions inside panels and grids.
- **on-primary #ffffff** — h1, h3 and button labels.
- **nav-text #d6e3ffad** — a blue-tinted translucent white for the header's "SCROLL OR PRESS" hint.
- **code-text #ffffff66** — dim code inside the code card.

**primary #2dacf9** is Remix blue. It is defined in the stylesheet as `--brand-cycle: rgb(45, 172, 249)`, it is the hover colour of every bracketed nav link, and it is used for highlighted text. The racing wordmark at the top is the same family of electric blue. Code syntax adds green #7ce95a and yellow #ffdf5f as text colours.

Surfaces are layers of translucent white and black: **tab-fill #ffffff09** for the segmented package-manager and section tabs, **button-fill #ffffff14** for pill buttons, **nav-chip #1e2226** behind each bracketed nav link, **code-card #01040ac2** for the code window, and **panel #000000e6** for the large section panels. Borders are **hairline #ffffff1a**, **input-border #ffffff2e** and the blue-tinted **panel-border #5f91cd46**.

## Typography

Two loaded fonts, both measured as variable ranges: **Inter** (100–900) for everything readable and **JetBrains Mono** (100–800) for navigation, labels, code and the footer.

- **display** — Inter 76.8px / 700 / 76.8px, letter-spacing -2.304px (the h1, centred). Mobile: 42px / 700 / 42px, -1.26px.
- **heading** — Inter 46.08px / 700 / 47.9232px, -0.9216px for section titles ("A bigger toolkit with a smaller mental model").
- **subheading** — Inter 32px / 700 / 35.84px, -0.64px for panel titles ("Build a complete server with Web APIs").
- **body** — Inter 18px / 400 / 27.9px, -0.008px. 18px is the paragraph size; 16px and 15px carry smaller descriptions.
- **button** — Inter 16px / 400 / 22.4px for "Get started", "Subscribe" and the email input.
- **chip** — Inter 13px / 500 / 13px for the package-manager tab and the pill filter chips (Request, Routes, Middleware…).
- **nav** — JetBrains Mono 12px / 400 uppercase for the header shortcuts; **tab-label** — JetBrains Mono 12px / 500, 0.72px tracking, uppercase for the SERVER / DATA / AUTH tabs.
- **link** — JetBrains Mono 16px / 400 / 24px.

The footer is JetBrains Mono 10px uppercase with 0.5px tracking. Negative tracking scales with size: every Inter heading is tightened, mono labels are opened up.

## Layout

The page is one full-width black band, 1280px wide, with content inside 24px margins (x=24 to x=1256). The hero is centred; panels are centred blocks of varying width with large amounts of empty black between them — the capture shows several screen-heights of pure black between panels, a deliberate pacing device paired with the "scroll or press ↓ and ↑" instruction.

Inside panels, content is generous: the large panels measure 48px padding, and 48px is the most common padding on the page, followed by 32px, 18px and 160px. Gaps cluster at 4px, 24px and 8px. The principles grid in "Re-thinking best practices" is two columns; the extractor recorded up to six items in a row (the section tabs). The spacing tokens s1–s10 run 4px to 24px.

## Elevation & Depth

Depth is the most crafted part of the system. Large panels use a five-layer shadow: a blue top highlight (`rgba(105, 160, 220, 0.2) 0px 1px 0px 0px inset`), a fainter blue left edge, a 42px inner white glow at 2% alpha, a 2px dark inner ring and a deep `0px 32px 100px` drop shadow at 24% black. Combined with the #5f91cd46 border and the #000000e6 fill, panels read as dark glass lit from the top-left. The code card uses a single 1px inset highlight (`rgba(255, 255, 255, 0.024)`), and one element carries `rgba(0, 0, 0, 0.3) 0px 18px 52px 0px` with an inset top light. The hero imagery — light trails on a dark ground — provides the only strong colour light on the page.

## Shapes

Radii are soft and medium-large. Pill shapes (999px, measured 10 times, stored as **pill 9999px**) are used for buttons, filter chips and the email input. Panels use **lg 24px**, a larger container uses **xl 28px**, the code card **md 18px** and one element **sm 14px**. The segmented package-manager control rounds only its outer ends — **xs 13px** on the left of the first segment (13px 0px 0px 13px) and on the right of the last. The section tabs and nav chips are square-cornered (0px).

## Components

- **Primary button** — "Get started": #ffffff14 fill, white Inter 16px/400 label, 999px pill, 0px 18px padding, 44px tall. "Subscribe" uses the same recipe.
- **Package-manager segmented tab** — "npm" segment: #ffffff09 fill, white 13px/500 label, 0px 12px padding, 56px tall, outer corners 13px.
- **Section tabs** — SERVER, DATA, AUTH…: #ffffff09 fill, white JetBrains Mono 12px/500 uppercase with 0.72px tracking, 0px 18px padding, 58px tall, square corners.
- **Filter chips** — "Middleware", "Controllers": #ffffff06 fill, #ffffff8f text, 1px #ffffff1a border, 999px radius, 0px 14px 1px padding, 38px tall.
- **Nav link** — bracketed shortcut "[G] GUIDES": #1e2226 chip, #dee2e6 JetBrains Mono 12px uppercase, 4px 6px padding, square; hover turns the text #2dacf9.
- **Text input** — email field: transparent fill, white 16px text, 1px #ffffff2e border, 999px radius, 0px 18px padding, 44px tall.
- **Code card** — #01040ac2 fill, 1px #ffffff1a border, 18px radius, inset top highlight, a file tab ("app.tsx") and syntax colours.
- **Panel** — #000000e6, 1px #5f91cd46 border, 24px radius, 48px padding, the five-layer glass shadow.
- **Footer** — JetBrains Mono 10px uppercase, #dee2e6, padding 40px 24px 24px, small wordmark and social icons at the right.

## Design System Architecture

Remix publishes brand rules at https://remix.run/brand: trademark terms (no use that could cause confusion; no merchandise without written consent), light-mode and dark-mode logo and wordmark files including the "racing" wordmark and a colour wordmark, and the instruction "Please use the logo with an appropriate background." The page lists no colours, typefaces or design system, and no public design-token package was found.

The de-facto system is visible in the shipped CSS. Root variables are few — `--brand-cycle: rgb(45, 172, 249)`, `--color-gray-300: #a4a4a4`, `--color-gray-800: #383838` — and the `--lightningcss-light` / `--lightningcss-dark` pair shows the CSS is compiled with Lightning CSS. Font stacks (`Inter, "Inter Fallback", ui-sans-serif, system-ui…`) follow Tailwind's default sans stack with a metric-matched fallback. Everything else is expressed as translucent white and black values rather than named tokens.

## Do's and Don'ts

**Do**
- Keep the canvas pure #000000 and build every surface from translucent white (#ffffff09, #ffffff14) or translucent black (#000000e6).
- Use #2dacf9 sparingly: hover states, highlights and the wordmark.
- Set headlines in Inter 700 with negative tracking (-2.304px at 76.8px).
- Use JetBrains Mono uppercase for navigation, tabs and legal text.
- Give large panels the blue-tinted #5f91cd46 border and the layered inset shadow.
- Let black space separate sections.

**Don't**
- Don't introduce opaque grey surfaces; the system uses alpha.
- Don't use the light-mode logo on this dark page (brand page: use the logo with an appropriate background).
- Don't put the Remix name or logo on merchandise without consent.
- Don't round the section tabs or nav chips; they are square.
- Don't fill buttons with solid blue; the measured buttons are translucent white pills.

## Responsive Behavior

Measured at 390px: the h1 is Inter 42px/700/42px with -1.26px tracking (from 76.8px), and the h2 drops from 46.08px to 32px/700/33.28px. Body stays 18px/400/27.9px. The "npm" segment keeps its 13px outer radius and 56px height. Content runs from x=24 to x=366 (24px margins). The header shows zero inline links and a visible menu toggle labelled "Open menu", where desktop shows seven links. Maximum card columns measured: one on mobile, versus six items in a row on desktop. Intermediate widths were not measured.

## Iteration Guide

1. Canvas #000000, text #dee2e6, headings #ffffff; add translucent whites for secondary text.
2. Headlines: Inter 700 with the measured negative tracking; body Inter 18px/27.9px.
3. Navigation and labels: JetBrains Mono 12px uppercase; hover to #2dacf9.
4. Buttons: #ffffff14 pills, 44px tall, 0px 18px padding; inputs match with a #ffffff2e border.
5. Panels: #000000e6, 24px radius, 48px padding, #5f91cd46 border and the five-layer shadow.
6. Keep blue as an accent and black space as the separator; check any new value against the measured palette.
