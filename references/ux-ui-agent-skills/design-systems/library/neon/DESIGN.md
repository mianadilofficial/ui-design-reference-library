---
version: alpha
name: Neon
category: "Backend, Database & DevOps"
description: "Neon (neon.com), serverless Postgres for apps and agents, part of Databricks: a black #000000 page with off-white #e4f1eb mint sections, Neon Green #34d59a accents, white #ffffff pill CTAs with #1a1a1a text, #18191b panels, Inter 56px/-2.24px headlines with 18px/27px body, and GeistMono uppercase labels and terminal buttons."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#1a1a1a"
  primary-hover: "#c9cbcf"
  neon-green: "#34d59a"
  off-white: "#e4f1eb"
  mint-deep: "#cddfd7"
  mint-text: "#cae6dc"
  green-shadow: "#0d221a"
  surface-panel: "#18191b"
  surface-raised: "#151617"
  surface-chip: "#303236"
  ink-body: "#61646b"
  ink-muted: "#94979e"
  ink-dim: "#797d86"
  ink-light: "#c9cbcf"
  border-strong: "#494b50"
  footer-border: "#303236"
typography:
  display:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 56px
    fontWeight: 400
    lineHeight: 63px
    letterSpacing: "-2.24px"
  display-mobile:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: "-1.28px"
  heading:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 44px
    fontWeight: 400
    lineHeight: 49.5px
    letterSpacing: "-1.76px"
  label:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: "-0.32px"
  body:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
    letterSpacing: "-0.36px"
  nav:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
    letterSpacing: "-0.15px"
  button:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: "-0.32px"
  button-sm:
    fontFamily: Inter, "Inter Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
    letterSpacing: "-0.28px"
  button-mono:
    fontFamily: >-
      GeistMono, ui-monospace, SFMono-Regular, "Roboto Mono", Menlo, Monaco, "Liberation Mono", "DejaVu Sans Mono", "Courier New", monospace, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas,
      "Liberation Mono", "Courier New", monospace
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: "-0.32px"
  eyebrow:
    fontFamily: >-
      GeistMono, ui-monospace, SFMono-Regular, "Roboto Mono", Menlo, Monaco, "Liberation Mono", "DejaVu Sans Mono", "Courier New", monospace, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas,
      "Liberation Mono", "Courier New", monospace
    fontSize: 12px
    fontWeight: 500
    lineHeight: 12px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 5px
  md: 6px
  lg: 10px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 5.2px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 13px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 28px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
  button-terminal:
    backgroundColor: "{colors.neon-green}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-mono}"
    rounded: "{rounded.pill}"
    padding: 0px 28px
    height: 44px
  button-dark:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 28px
    height: 44px
  button-signup:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.pill}"
    padding: 0px 18px
    height: 36px
  button-login:
    textColor: "{colors.ink}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.pill}"
    padding: 0px 18px
    height: 36px
    borderColor: "{colors.ink-body}"
  tab:
    backgroundColor: "{colors.surface-chip}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 0px 16px
    height: 44px
    borderColor: "{colors.border-strong}"
  eyebrow:
    textColor: "{colors.ink-light}"
    typography: "{typography.eyebrow}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    borderColor: "{colors.footer-border}"
---

## Overview

Neon is serverless Postgres — the page title reads "Neon — Postgres backends for apps and agents", and an eyebrow states "NEON IS PART OF THE DATABRICKS PLATFORM". The measured home page (https://neon.com/, 10,826px at a 1280px viewport) is a dark, cinematic developer site: a black page with green-tinted light streaks in the hero, huge faded numerals ("01", "02", "03") marking chapters, a wireframe globe covered in customer logos, mono-type section labels in mint boxes, and then a switch to an off-white mint (#e4f1eb) for the "fundamentals" and pricing sections. Neon's brand guidelines name just three colours — Neon Green #34D59A, Black #000000 and Off-White #E4F1EB — and the page is built from exactly those plus a ladder of cool greys.

The capture shows: a 36px announcement ("Neon now has realtime: Live SQL with full reactivity…"); a black header with the Neon logo, nav (Product, Solutions, Docs, Pricing, Resources), Discord and GitHub star counts, "Log in" and a white "Sign up" pill; the hero "The backend for apps and agents, built to scale on Lakebase Postgres." with a white "Get started" pill and a dark secondary pill over a field of vertical green light bars; a logo strip; three numbered chapters ("Not just a Database…", "Ready for coding agents…", "Scale from your first users to the Fortune 500…") with product diagrams and terminal UI; mint mono callouts ("WHERE STARTUPS START", "WHERE AGENT PLATFORMS DEPLOY", "WHERE THE FORTUNE 500 SCALES") with stats ("100K+", "70%"); an off-white section "The way we build software is changing…" with highlighted phrases; an autoscaling chart panel; "Backed by giants" with Databricks figures ("20M+", "3M+"); an off-white pricing grid; a grey closing band "The world's most advanced backend platform."; and a black footer.

## Colors

- **Canvas `#000000`** — the page background (7,587 by area; 44% of the screen). Neon's brand page lists "Black #000000".
- **Off-white `#e4f1eb`** — the light mint used for the "fundamentals" and pricing sections (2,809 by area); the brand page's "Off-White #E4F1EB". **Mint deep `#cddfd7`** fills cards within those sections.
- **Neon green `#34d59a`** — the brand page's "Neon Green #34D59A": the "$ npx neon init" terminal button, the logo, highlight boxes and chart lines.
- **Mint text `#cae6dc`** — mono callouts on black ("WHERE THE FORTUNE 500 SCALES"); **green shadow `#0d221a`** is a dark green panel fill.
- **Ink `#ffffff`** — headlines and primary text on black (1,315 characters).
- **Primary `#ffffff`** with **on-primary `#1a1a1a`** — the white "Get started" and "Sign up" pills; hover fill **`#c9cbcf`**.
- **Grey ladder** — `#94979e` (1,242 characters, secondary text and footer), `#797d86` (dimmed continuation of headlines, e.g. "Neon is a complete backend platform…"), `#61646b` (body paragraphs, the "Log in" border), `#c9cbcf` (eyebrows), `#afb1b6` (hover dimming on links).
- **Surfaces** — `#18191b` (panels and two full bands, 2,028), `#151617`, `#303236` (tabs, footer border), `#494b50` (tab borders).

A recurring pattern: headlines start in white and continue in grey within the same sentence ("Not just a Database. Neon is a complete backend platform…"), so the first phrase reads as the headline and the rest as its explanation.

## Typography

- **Inter** (400, 500, 600) — 5,513 measured characters. h1 56px/63px with -2.24px tracking (-4%); h2 44px/49.5px with -1.76px; other headline sizes 52px/-2.08px, 36px/-1.44px, 64px, 72px and a 128px faded numeral; body 18px/27px with -0.36px; nav 15px/22.5px with -0.15px; labels 16px/20px; buttons 16px/16px at 500; small buttons 14px/14px. Headlines stay at weight 400 — size and tight tracking carry the hierarchy, not weight.
- **GeistMono** (variable 100-900) — 559 characters: uppercase 12px eyebrows ("NEON IS PART OF THE DATABRICKS PLATFORM"), the mint callout boxes, terminal snippets, and the "$ npx neon init" button at 16px/500.

Every Inter size carries negative tracking of 2-4%. The CSS also declares an `--font-esbuild` variable that was not measured in use on this page. Neon's brand page names no typefaces.

## Layout

The page alternates: a 36px announcement, a 175px header area, a 354px hero media band, a 3,659px near-black band (#010101) holding the three numbered chapters in 2 columns, a 990px black band with the globe, a 1,155px off-white band, two #18191b bands (411px and 955px), a 690px off-white pricing band in 4 columns, a 630px grey closing band, and a 429px footer in 4 columns.

Spacing: gaps of 4, 6, 7, 8 (most common), 10, 12, 16, 20, 24, 48, 80 and 128px; paddings of 4, 6, 8, 12, 14, 16, 18, 24, 28 and 32px. Each chapter puts a giant faded numeral and a small mono eyebrow on the left and a large statement headline on the right, followed by diagrams.

## Elevation & Depth

Depth is built from light and outlines, not shadows. Panels use a 1px ring — `lab(100 … / 0.05) 0px 0px 0px 1px` (white at 5%, 5 uses) or `rgb(48, 50, 54) 0px 0px 0px 1px inset` — and one deeper shadow, `rgba(0, 0, 0, 0.4) 0px 8px 20px 0px`, sits under a floating element. The hero's glowing green light bars and the wireframe globe give the dark page its sense of space.

## Shapes

Small radii for UI, pills for actions. 4px is by far the most common radius (60 uses) for panels, chips and code blocks; 5px, 6px and 10px appear on cards; all buttons are full pills (computed 3.35544e+07px, 10 uses). The tabs in the "Scale" section are square (0px) with 1px #494b50 borders. Mono callout boxes are square-cornered mint blocks.

## Components

- **Primary pill** — "Get started": #ffffff fill, #1a1a1a Inter 16px/16px at 500, pill radius, 0px 28px padding, 44px tall; hover fill #c9cbcf.
- **Terminal pill** — "$ npx neon init": #34d59a fill, black GeistMono 16px at 500, pill, 0px 28px, 44px.
- **Dark pill** — "View Pricing": #000000 fill, white text, pill, 44px.
- **Header buttons** — "Sign up": white pill, black 14px text, 0px 18px, 36px; "Log in": transparent with a 1px #61646b border, same size.
- **Tabs** — "Avoid outages": #303236 fill, 1px #494b50 border, 0px radius, 0px 16px, 44px tall.
- **Eyebrow** — GeistMono 12px/12px at 500, uppercase, #c9cbcf.
- **Mono callout** — uppercase GeistMono headings ("WHERE STARTUPS START") in mint #cae6dc boxes on black.
- **Announcement link** — white text on #18191b with a #303236 border that dims to #afb1b6 on hover.
- **Pricing card** — on #e4f1eb, a pixel icon, a 28px black title ("Powerful Free Tier", "Starts at $0") and grey copy, 4 columns.
- **Footer** — black, #94979e 13px text, 1px #303236 top border, link columns and a Databricks lock-up.

## Design System Architecture

Neon publishes official brand guidelines at https://neon.com/brand ("Brand Guidelines", with downloadable assets): three named colours (Neon Green #34D59A, Black #000000, Off-White #E4F1EB) and logo rules ("Default to using the complete full-color logo", "Do not edit, change, distort, recolor, or reconfigure the Neon logo", a safety area "defined by the height of our symbol", and logomark-only use where space is short). It names no typefaces. The website itself is a Tailwind build: its 81 root variables are mostly Tailwind and Shiki (code highlighting) values plus font tokens (`--font-inter`, `--font-geist-mono`, `--font-esbuild`) and `--docs-header-height` 112px, so the greys and surfaces are applied as utility classes rather than named brand tokens.

## Do's and Don'ts

**Do**
- Use black #000000 as the base and switch to off-white #e4f1eb for calmer sections, as the brand palette defines.
- Use Neon Green #34d59a for the logo, terminal actions and highlights.
- Set headlines in Inter 400 with -4% tracking, starting in white and continuing in grey.
- Make every button a pill; keep panels at 4px.
- Use GeistMono uppercase for eyebrows, callouts and commands.
- Outline panels with 1px low-contrast rings instead of shadows.

**Don't**
- Don't recolour or reconfigure the Neon logo (brand guidelines).
- Don't use bold headlines; the measured headings are weight 400.
- Don't use Neon Green as a large background; it is an accent and action colour.
- Don't add colours outside green, black, off-white and the grey ladder.
- Don't use square buttons for primary actions.
- Don't drop the negative tracking on body text.

## Responsive Behavior

The extractor's 390px mobile pass recorded:
- h1 at Inter 32px/36px with -1.28px tracking (56px/63px on desktop), 350px wide.
- h2 at 28px/31.5px with -1.12px (44px/49.5px on desktop).
- Body at 15px/20.625px with -0.3px (18px/27px on desktop).
- The primary "Get started" pill at 14px/14px, 0px 18px padding, 36px tall (16px, 0px 28px, 44px on desktop).
- A 56px header (64px on desktop); 1 visible header link and a menu toggle labelled "Open menu".
- The widest card grid 5 columns (7 on desktop).

Breakpoint values were not measured.

## Iteration Guide

1. Start with a black #000000 page and plan one or two #e4f1eb off-white sections and #18191b panel bands.
2. Set headlines in Inter 400 at 56px/63px with -2.24px tracking; continue each headline in #797d86 after the first phrase.
3. Use Inter 18px/27px at -0.36px for body in #61646b or #94979e.
4. Add a white "Get started" pill (0px 28px, 44px, #1a1a1a text, #c9cbcf hover) and a #34d59a "$ npx neon init" terminal pill.
5. Label chapters with faded giant numerals and GeistMono 12px uppercase eyebrows.
6. Outline panels with 1px rings at 4px radius; no heavy shadows.
7. Check the palette against the brand page: Neon Green, Black, Off-White, and greys only.
