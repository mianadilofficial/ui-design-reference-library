---
version: alpha
name: Devin Desktop
category: "Developer Tools & IDEs"
description: "Devin Desktop (devin.ai/desktop, where windsurf.com now redirects; the page calls it 'the new name for Windsurf') uses NB International Pro at weight 400 (64px/-1.92px display), #191919 ink on a #fcfcfc canvas, black #000000 pill and #363636 2px-radius download buttons, GeistMono uppercase labels in accent blue #317cff, and white 12px-radius product cards."
colors:
  canvas: "#fcfcfc"
  ink: "#191919"
  primary: "#000000"
  on-primary: "#ffffff"
  ink-secondary: "#1919198f"
  ink-muted: "#19191966"
  ink-soft: "#1f1f1f"
  ink-on-dark-dim: "#ffffff8f"
  hairline: "#00000014"
  accent: "#317cff"
  button-dark: "#363636"
  surface-white: "#ffffff"
  surface-wash: "#f8f8f8"
  surface-dark: "#000000"
typography:
  display:
    fontFamily: nbInternationalPro, "nbInternationalPro Fallback", system-ui, sans-serif
    fontSize: 64px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: "-1.92px"
  display-mobile:
    fontFamily: nbInternationalPro, "nbInternationalPro Fallback", system-ui, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 42px
    letterSpacing: "-1.2px"
  heading:
    fontFamily: nbInternationalPro, "nbInternationalPro Fallback", system-ui, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
    letterSpacing: "-0.64px"
  body:
    fontFamily: nbInternationalPro, "nbInternationalPro Fallback", system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: nbInternationalPro, "nbInternationalPro Fallback", system-ui, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  label-mono:
    fontFamily: geistMono, "geistMono Fallback", ui-monospace, monospace
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.36px
    textTransform: uppercase
  input:
    fontFamily: inter, interLatinExt, "interLatinExt Fallback", sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 18px
rounded:
  xs: 2px
  sm: 4px
  md: 5px
  lg: 6px
  xl: 7px
  2xl: 8px
  3xl: 10px
  4xl: 12px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 12px 1px
    height: 28px
  button-download:
    backgroundColor: "{colors.button-dark}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 6px 12px 5px
    height: 35px
  link-callout:
    textColor: "{colors.accent}"
    typography: "{typography.label-mono}"
    rounded: "{rounded.sm}"
    padding: 12px
    borderColor: "{colors.accent}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 18px
  card:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink-secondary}"
    rounded: "{rounded.4xl}"
    padding: 2px
    boxShadow: rgba(0, 0, 0, 0.06) 0px 0px 3px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 0.5px
  footer:
    textColor: "{colors.ink}"
---

# Devin Desktop

## Overview

This file documents the page the queued Windsurf URL actually serves. https://windsurf.com answers with an HTTP 308 permanent redirect to https://devin.ai/desktop, titled "Devin Desktop | Devin". The page's own FAQ states: "Devin Desktop is the new name for Windsurf. We're building on the IDE foundation of Windsurf to introduce the command center for managing all your agents in one place." Cognition, which operates devin.ai, announced on 14 July 2025 that it had "signed a definitive agreement to acquire Windsurf, the agentic IDE", including its trademark and brand (https://cognition.com/blog/windsurf). The design described here is therefore the Devin/Cognition web system as applied to the renamed Windsurf product, and the name used is the measured site's: Devin Desktop.

The page is a light, editorial software page. The hero sets "Devin Desktop" in a large, light-weight grotesk, followed by "Manage fleets of local and cloud agents from one surface. Plan, delegate, review, and ship without leaving your editor." and a dark "Download for MacOS" button. At top right, a blue-outlined monospace callout reads "THE HOME FOR EVERY AGENT YOU RUN — LEARN MORE →". Below, a large screenshot of the app (an "Agent / Editor" switch, Spaces sidebar and a Kanban "Sessions" board with Running, Waiting for review and Done columns) sits on a light grey wash. A dense customer-logo grid follows, then alternating text-and-screenshot sections ("A team of agents for every engineer.", "The power of an IDE, exactly when you need it.", "All the models, All the agents.", "One Space for every agent", "Tab, Tab, Ship"), an "Agents on ACP" logo row, "Teams building with Devin Desktop" testimonial cards (Ramp, Harvey, NVIDIA), an extensions directory, "So good you can't work without it" with download and demo buttons, a pricing block (Free $0, Pro $20, Max $200, Teams $80, Enterprise "Let's talk"), stats ("1M+ Users", "4000+ Enterprise Customers"), a black FAQ panel and a light footer.

Microcopy is crisp and product-literal; small uppercase GeistMono labels act as section eyebrows.

## Colors

The palette is near-monochrome with one blue accent. The site exposes it as `--color-dt-*` variables.

- **Canvas `#fcfcfc`** (`--color-dt-bg`, `--color-legacy-white`) — the body background and dominant colour.
- **Surface-white `#ffffff`** — product cards and screenshots. **Surface-wash `#f8f8f8`** (`--color-dt-wash`) — the grey band behind the hero screenshot.
- **Surface-dark `#000000`** (`--color-dt-surface`) — the FAQ panel; FAQ answers use **ink-on-dark-dim `#ffffff8f`** (`--color-dt-text-inverse-dim`) and questions white.
- **Ink `#191919`** (`--color-dt-text`) — headings and body text; the most-read colour.
- **Ink-secondary `#1919198f`** (56%, `--color-dt-text-secondary`) — descriptions and the dimmed lead-in of split headlines ("A team of agents for" in grey, "every engineer." in ink). **Ink-muted `#19191966`** (40%, `--color-dt-text-muted`) — tertiary text. **Ink-soft `#1f1f1f`** — text in a few dark bento elements.
- **Primary `#000000`** with **on-primary `#ffffff`** — the header "Download" pill and the "Select plan" pills.
- **Button-dark `#363636`** — the "Download for MacOS" and "Sign up" buttons.
- **Accent `#317cff`** (`--color-accent`, `--color-dt-primary`) — the monospace callout's text and 1px border; also measured as a small fill.
- **Hairline `#00000014`** (8% black, `--color-dt-border`) — the dominant border colour (58 elements); tints at 4% and 6% black fill hover states and chips.

The variable set also names status colours (`--color-dt-green` rgb(0 165 88), `--color-dt-orange`, `--color-dt-purple`) and a `--color-legacy-*` set (including `--color-legacy-primary: #20f`), which were not measured as page fills.

## Typography

- **NB International Pro** (`--font-body`, weights 400 and 500 loaded) sets nearly all marketing text (5,715 characters). The `display` is 64px/64px at weight 400 with -1.92px tracking (`--text-dt-display`); section `heading`s are 32px/38.4px with -0.64px (`--text-dt-title`); 40px/41.6px with -1.2px appears for feature titles; `body` is 16px/24px; nav and small buttons 14px/21px. Weight is almost always 400 — 10,025 of 10,577 measured characters.
- **GeistMono** (`--font-mono`) sets uppercase labels at 12px/18px with 0.36px tracking (`--text-dt-label`).
- **Inter** (with an `interLatinExt` subset) and **Menlo** appear inside the product screenshots and code samples; the search input uses Inter 13px/18px.
- The CSS also declares stkBureauSerif, IBM Plex Mono, IBM Plex Sans, Lato and a Slack font face; these did not measure on visible text.

NB International Pro is a commercial typeface; if unavailable, substitute a neutral neo-grotesk (for example Inter Display or Helvetica Now) at weight 400 with the same negative tracking.

## Layout

At 1280px the page is 9,817px tall. The header is 52px tall on `#fcfcfc`: the Devin logo at left, Product, Solutions, Resources (with chevrons), Customers, Pricing and Blog, and "Get a demo", "Login" and the black "Download" pill at right; seven header links counted. Content spans from 60px to 1275px, with section padding of 60px (16 uses).

Spacing is compact: gaps of 6px, 8px, 4px and 2px dominate inside components, with 12px and 24px between items and 36px–48px between groups. Paddings are mostly 6px, 8px, 4px, 20px and 10px. Sections alternate a text column with a large product screenshot; the logo grid runs up to six columns; testimonial and pricing cards sit in three- and five-column rows (up to 5 card columns measured). The pricing block lists five plans side by side.

## Elevation & Depth

Shadows are subtle and mostly used inside product UI. The most common are `rgba(0, 0, 0, 0.05) 0px 1px 2px` (9 elements) and a bottom inner hairline `rgba(0, 0, 0, 0.08) 0px -1px 0px inset` (9). Cards use a soft halo plus a half-pixel ring: `rgba(0, 0, 0, 0.06) 0px 0px 3px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 0.5px`. Single elements carry larger stacks: `rgba(0, 0, 0, 0.18) 0px 6px 16px -4px, rgba(0, 0, 0, 0.1) 0px 2px 6px -2px` and `rgba(0, 0, 0, 0.14) 0px 8px 24px -6px, rgba(0, 0, 0, 0.06) 0px 2px 6px 0px`. The black FAQ panel provides the page's strongest contrast layer.

## Shapes

- **4px** — the most frequent radius (53 elements): chips, tags and the blue callout.
- **6px** and **8px** — product UI controls and smaller cards (47 and 36 elements).
- **Pill (9999px)** — the header "Download", "Select plan" and filter chips; **200px** on 11 elements also renders fully round.
- **2px** — the "Download for MacOS" and "Sign up" buttons: almost square.
- **10px** and **12px** — screenshot frames and product cards; `10px 10px 0px 0px` rounds only the top of a frame.
- **50%** — 13 elements, including avatars.

The mix of 2px rectangular download buttons and pill-shaped navigation buttons is a distinctive detail.

## Components

- **button-primary** — header "Download": `#000000` pill, white NB International Pro 14px/21px, `0px 12px 1px` padding, 28px tall. Hover lowers opacity to 0.8. "Select plan" uses the same black pill at 16px/24px, `0px 20px` padding, 42px tall.
- **button-download** — "Download for MacOS": `#363636`, white 16px/24px, 2px radius, `6px 12px 5px` padding, 35px tall; hover opacity 0.8.
- **link-callout** — "THE HOME FOR EVERY AGENT YOU RUN / LEARN MORE →": GeistMono 12px uppercase with 0.36px tracking in `#317cff`, 1px `#317cff` border, 4px radius, 12px padding; hover opacity 0.8.
- **nav-link** — `#191919` 14px text; hover adds a 6% black fill.
- **card** — white, 12px radius, 2px padding, halo-plus-ring shadow; used for product session cards and testimonial panels.
- **text-input** — Inter 13px/18px `#191919`, used in the screenshot search field.
- **FAQ accordion** — black panel, white 16px questions with plus/minus icons, `#ffffff8f` answers, underlined "Read the announcement →" link, hairline dividers.

## Design System Architecture

No public brand guideline was found: https://devin.ai/brand returns 404. The shipped CSS is a Tailwind v4 build with a clearly namespaced system for this page family: `--color-dt-*` semantic colours (bg, text, text-secondary, text-muted, text-inverse, border, divider, tint levels from 2% to 8%, primary, primary-tint, wash, surface), `--text-dt-*` type roles (`display` 4rem/-1.92px, `title` 2rem/-.64px, `title-sm` and `subtitle` 1.25rem, `body` 1rem, `caption` .875rem, `label`/`tag` .75rem/.36px, `stat` 4rem at weight 300), a parallel `--text-product-*` scale for in-app UI, `--radius-sm` to `--radius-3xl` (.25rem to 1.5rem), and a `--color-legacy-*` set from the earlier Windsurf palette (`#20f`, `#4991e5`, `#39bdd6`, `#1f1f1f`, `#efefef`). The relationship between Windsurf and Cognition is documented in https://cognition.com/blog/windsurf.

## Do's and Don'ts

**Do**
- Keep the canvas `#fcfcfc` and text `#191919`, using alpha steps (56%, 40%) for hierarchy.
- Set headlines in NB International Pro at weight 400 with negative tracking; split headlines into a grey lead-in and an ink payoff.
- Use GeistMono uppercase labels at 12px/0.36px for eyebrows and callouts.
- Reserve `#317cff` for a single outlined callout or link.
- Show the product UI at large size on a `#f8f8f8` wash.
- Use the black FAQ panel as the one dark moment.

**Don't**
- Don't bold headings; the system uses 400 almost everywhere.
- Don't use the legacy Windsurf colours (`--color-legacy-*`) as page fills.
- Don't fill buttons with blue; actions are black or `#363636`.
- Don't add heavy shadows to marketing cards; keep the 0.5px ring and soft halo.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: the `display` drops from 64px/64px to 40px/42px with -1.2px tracking; section headings from 32px/38.4px to 24px/28.8px with -0.48px; body text stays 16px/24px; the measured primary CTA on mobile is a `#363636` "Sign up" button (2px radius, `6px 12px 5px` padding, 35px tall). The mobile nav measured 60px tall; a "Toggle menu" control was detected as visible with 1 header link visible. Content spans 20px to 387px; up to 4 card columns were counted. Mobile font sizes recorded: 16px, 13px, 12px, 14px, 12.5px, 15px, 11px, 20px, 32px, 10.5px. Breakpoint widths were not measured.

## Iteration Guide

1. Start with `#fcfcfc`, `#191919` text and a 52px header ending in a black "Download" pill.
2. Set the hero title in NB International Pro 64px/400 with -1.92px tracking, left-aligned.
3. Add the `#363636` 2px-radius download button and one blue GeistMono callout.
4. Present the product in large white 12px-radius frames on a `#f8f8f8` wash.
5. Build sections from a 32px title (grey lead-in, ink payoff) and a short 16px description.
6. Check colours against the `--color-dt-*` set and compare with https://devin.ai/desktop before shipping.
