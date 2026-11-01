---
version: alpha
name: Builder.io
category: "Developer Tools & IDEs"
description: "Builder.io's builder.io site and published brand system: warm near-black #0a0a0a page, off-white #faf9f5 primary text with #aeadac secondary copy, electric cyan #01c8f1 actions (hover #00dff6 with a cyan glow), Geist 56px/500 headings at -0.02em, uppercase Geist Mono 14px/600 button labels, 6px button radius and square 0px panels."
colors:
  canvas: "#0a0a0a"
  ink: "#faf9f5"
  ink-secondary: "#aeadac"
  ink-muted: "#5e5e5e"
  ink-subtle: "#9c9c9c"
  ink-highlight: "#e0e0d7"
  link: "#bef0f5"
  primary: "#01c8f1"
  on-primary: "#0a0a0a"
  primary-hover: "#00dff6"
  primary-effect: "#01c8f166"
  surface-raised: "#0f0f0f"
  surface-prominent: "#1a1a1a"
  surface-alternative: "#00161b"
  hairline: "#141414"
  border-strong: "#5e5e5e"
  border-hover: "#9a9997"
  nav-bg: "#0a0a0ae6"
  card-text: "#ffffff"
  accent-green: "#0fdfba"
  accent-yellow: "#dec75f"
  accent-red: "#ffa27d"
  accent-pink: "#fa9bf2"
typography:
  display:
    fontFamily: Geist, system-ui, sans-serif
    fontSize: 56px
    fontWeight: 500
    lineHeight: 58.8px
    letterSpacing: "-1.12px"
  display-mobile:
    fontFamily: Geist, system-ui, sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 33.6px
    letterSpacing: "-0.64px"
  heading:
    fontFamily: Geist, system-ui, sans-serif
    fontSize: 46px
    fontWeight: 500
    letterSpacing: "-0.92px"
  heading-3:
    fontFamily: Geist, system-ui, sans-serif
    fontSize: 37px
    fontWeight: 500
    letterSpacing: "-0.02em"
  subheading:
    fontFamily: Geist, system-ui, sans-serif
    fontSize: 28px
    fontWeight: 500
    letterSpacing: "-0.56px"
  heading-5:
    fontFamily: Geist, system-ui, sans-serif
    fontSize: 23px
    fontWeight: 500
    letterSpacing: "-0.23px"
  paragraph-1:
    fontFamily: Geist, system-ui, sans-serif
    fontSize: 18px
    fontWeight: 400
  body:
    fontFamily: Geist, system-ui, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: "\"Geist Mono\", monospace"
    fontSize: 14px
    fontWeight: 600
    letterSpacing: 0.28px
    textTransform: uppercase
  label-2:
    fontFamily: "\"Geist Mono\", monospace"
    fontSize: 11px
    fontWeight: 500
    letterSpacing: "+0.04em"
  nav:
    fontFamily: Geist, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 400
  input:
    fontFamily: "\"Geist Mono\", monospace"
    fontSize: 14px
    fontWeight: 400
    letterSpacing: 0.28px
rounded:
  none: 0px
  hairline: 1px
  sm: 3px
  tight: 4px
  md: 6px
  soft: 8px
  lg: 12px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 8px
  s8: 9px
  s9: 10px
  s10: 11px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 9px 15px
    height: 38px
    borderColor: "{colors.primary-hover}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    boxShadow: rgba(1, 200, 241, 0.4) 0px 0px 16px 0px
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 9px 15px
    height: 38px
    border: "1px solid #5e5e5e"
  button-secondary-hover:
    backgroundColor: "{colors.surface-prominent}"
    borderColor: "{colors.border-hover}"
  tab:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.button}"
  tab-active:
    textColor: "{colors.link}"
    boxShadow: rgb(1, 200, 241) 0px -2px 0px 0px inset
  link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
    padding: 0px 40px
  nav-link:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.surface-prominent}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 9px 15px
    height: 38px
  card:
    backgroundColor: "{colors.surface-prominent}"
    textColor: "{colors.card-text}"
    rounded: "{rounded.md}"
    padding: 9px 11px
    borderColor: "{colors.surface-prominent}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.hairline}"
---

# Builder.io — builder.io

## Overview

Builder.io's home page (https://www.builder.io, title "Builder.io: Collaborative Platform to Build With AI Agents") is a dark, technical product page: a single warm near-black canvas, off-white Geist type, monospaced uppercase labels and one electric cyan accent. Builder publishes its own design reference at https://www.builder.io/brand and a machine-readable companion (https://www.builder.io/brand/design-system.md), which describes the language as "dark-first … built on warm near-blacks, cool accent blues, and the Geist type family", "modern, technical, and clean". The live page matches it closely.

The capture opens with a thin announcement bar ("Introducing Agent-Native, the framework for agentic apps."), then a header with the builder.io wordmark, Platform, Resources, Enterprise, Pricing and a cyan "Agent Native" link, plus an outlined **CONTACT SALES** and a cyan **START BUILDING** button. The hero headline "Build software with your team and *agents*" is centred at 56px, the word "agents" set in light cyan italic inside a selection box, surrounded by multiplayer cursors labelled "Maya • Designer", "Devon • Content", "Lin • PM", "Sam • Engineer" in pink, green and cyan. A cyan **TRY BUILDER FREE ↗** sits beneath, flanked by a "Builder-Agent" note and a merged-PR card. Then a logo marquee, and a sequence of sections each introduced by a cyan Geist Mono eyebrow ("COLLABORATIVE CODING", "VISUAL EDITOR", "AGENTIC CMS", "USE CASES", "THE PLATFORM", "CUSTOMER STORIES", "ENTERPRISE-READY") over a two-tone headline whose second half fades to grey ("One codebase. Every role"). Sections are boxed by faint grid lines and filled with product UI fragments. A newsletter field and a dense six-column footer close the page.

## Colors

Values below are measured in `web/data/extracted/builderio.json`; names follow Builder's published tokens.

- **Canvas `#0a0a0a`** — `--b-bg-page`, "Near-black (not pure black)", 80% of capture pixels.
- **Ink `#faf9f5`** — `--b-text-primary`, "Off-white (not pure white)", used for headings and labels.
- **Ink secondary `#aeadac`** — `--b-text-secondary`, the most-read color on the page (body copy and the grey half of headlines).
- **Ink muted `#5e5e5e`** — `--b-text-muted` (inactive tabs, legal text); **ink highlight `#e0e0d7`** — `--b-text-highlight`; **link `#bef0f5`** — `--b-text-link`, the pale cyan of "agents" and active tabs.
- **Primary `#01c8f1`** — `--b-action-primary-bg` and `--b-text-eyebrow`, "Electric cyan". Hover is **`#00dff6`** with a `0 0 16px` glow in **`#01c8f166`** (`--b-action-primary-effect`); button text is `#0a0a0a`.
- **Surfaces** — **`#0f0f0f`** raised (`--b-bg-raised`, the main band fill), **`#1a1a1a`** prominent (`--b-bg-prominent`, inputs and cards), **`#00161b`** alternative (`--b-bg-alternative`, active tab background).
- **Borders** — **`#141414`** grid hairlines, **`#5e5e5e`** secondary-button border, **`#9a9997`** its hover border.
- **Accents** — `#0fdfba` green, `#dec75f` yellow, `#ffa27d` red, `#fa9bf2` pink: cursor labels, diff badges and status chips.

## Typography

Builder uses **Geist** (`--b-font-sans`) "for headings, body, and UI" and **Geist Mono** (`--b-font-mono`) "for labels, code, and decorative use", both loaded as variable fonts (100–900) and both free on Google Fonts.

Published scale (desktop; weight 500 and -0.02em for headings): heading-1 56px, heading-2 46px, heading-3 37px, heading-4 28px, heading-5 23px, heading-6 18px; paragraph-1 18px, paragraph-2 15px, paragraph-3 12px; label-1 Geist Mono 14px 600 at +0.02em; label-2 Geist Mono 11px 500 at +0.04em.

Measured on the home page: hero 56px / 58.8px at -1.12px; h2 46px at -0.92px; h3 28px at -0.56px; body 15px / 21px at 400 in `#aeadac`; buttons and eyebrows Geist Mono 14px weight 600 at 0.28px, uppercase; nav 14px at 400. Measured sizes by character count: 15px, 14px, 12px, 46px, 13px, 28px, 30.72px, 18px, 10px, 23px, 56px, 24px, 11px.

## Layout

At 1280px content spans x = 40 to x = 1240; the whole page is one 8,602px `#0f0f0f` band with up to 6 columns. Sections are framed by 1px `#141414` grid lines that run edge to edge, forming boxed cells. Section heads use a split layout: eyebrow and headline on the left, a short `#aeadac` paragraph on the right. Feature grids use three columns of bordered cells with a small square arrow button. Measured gaps: 2px, 12px, 8px, 6px, 24px, 32px; paddings: 1px, 40px, 8px, 9px, 32px, with 120px section padding. The published spacing scale is 4px-based (4, 8, 12, 16, 20, 24, 32, 40, 48, 64, 80, 96, 120, 150, 200px).

## Elevation & Depth

There are no drop shadows. The only measured shadows are the cyan tab indicator (`rgb(1, 200, 241) 0px -2px 0px 0px inset`) and the cyan hover glow `rgba(1, 200, 241, 0.4) 0px 0px 16px 0px` on primary buttons. Depth comes from stepping surfaces — `#0a0a0a` → `#0f0f0f` → `#1a1a1a` — from grid hairlines, and from the translucent `#0a0a0ae6` header. The published system also defines a 17-stop `--b-gradient-blue` (from `#18b4f4` to `#2fffff`) for backgrounds and clipped text.

## Shapes

Buttons and inputs use **6px** (`--b-radius-md`, the most frequent measured radius). The brand's own rule is "`border-radius: var(--b-radius)` on buttons, `var(--b-radius-none)` on everything else", and the grid cells, panels and toggles are indeed square. **3px**, **4px**, **8px** and **12px** (`--b-radius-lg`) appear on small chips and UI fragments; 50% circles are avatars. Icon buttons are 38×38px squares per the published component spec.

## Components

- **Primary / CTA button** — `#01c8f1`, `#0a0a0a` Geist Mono 14px weight 600 uppercase, 1px `#00dff6` border, 6px radius, padding 9px 15px, 38px tall; the CTA variant adds a diagonal arrow (↗). Hover: `#00dff6` fill and cyan glow.
- **Secondary button** — transparent, `#faf9f5` label, 1px `#5e5e5e` border, 6px radius ("CONTACT SALES", "BOOK A DEMO"); hover `#1a1a1a` fill and `#9a9997` border.
- **Tabs** — uppercase Geist Mono labels in `#5e5e5e` with icons; active tab `#bef0f5` text with a 2px cyan underline ("ENGINEERS", "DESIGNERS", "PRODUCT", "MARKETING").
- **Input** — `#1a1a1a`, `#faf9f5` Geist Mono 14px text, 6px radius, padding 9px 15px, 38px tall (newsletter "Enter your email").
- **UI card** — `#1a1a1a`, 6px radius, padding 9px 11px, small 12px text with colored status dots (the merged-PR card).
- **Eyebrow** — cyan Geist Mono uppercase label above each section headline.
- **Header** — `#0a0a0ae6`, 40px side padding, under a `#0f0f0f` announcement bar.

## Design System Architecture

Builder.io publishes its brand system at https://www.builder.io/brand (logo, colors, typography, icons, spacing, radius) with a component showcase at https://www.builder.io/brand/components and an LLM-readable spec at https://www.builder.io/brand/design-system.md. Tokens use the `--b-` prefix, are scoped to `.builder-brand-tokens` and are opt-in. Semantic tokens follow `--b-{group}-{role}` (bg, text, border, action) and map to primitives `--c-{family}-{weight}` (e.g. `--c-blue-500: #01c8f1`, `--c-neutral-950: #0a0a0a`); type tokens follow `--b-t-{category}-{scale}` with responsive overrides at `max-width: 768px`. Icons come from `@tabler/icons-react`, outlined only, stroke 1.5. The marketing site's `:root` additionally carries Tailwind defaults (`--color-*` in oklch, `--tw-*`), which are framework values, not Builder brand colors. The company's open-source work is on GitHub at https://github.com/BuilderIO (e.g. Mitosis), but no brand-token repo is published there.

## Do's and Don'ts

**Do** (from the published guide and the live page)
- Use `#0a0a0a` and `#faf9f5` instead of pure black and white.
- Use `#01c8f1` for interactive elements, eyebrows and highlights, with exact hex values.
- Set UI text in Geist; set labels, buttons, code and tokens in Geist Mono uppercase.
- Round buttons 6px and keep panels, cells and toggles square.
- Split headlines into an off-white lead and an `#aeadac` continuation.

**Don't**
- Don't use pure black `#000` or pure white `#fff`.
- Don't approximate the accent colors.
- Don't use filled icon variants; use outlined Tabler icons.
- Don't modify Builder logos or wordmarks.
- Don't add drop shadows; the only glow is the cyan hover.

## Responsive Behavior

The 390px mobile pass recorded the hero headline at 32px / 33.6px with -0.64px tracking and h2 at 28px, matching the published mobile scale (heading-1 32px, heading-2 28px at max-width 768px); body text stays at 15px / 21px. Two header links remain visible with a menu toggle labelled "Open menu"; a carousel was detected and up to 4 card columns were measured. Mobile font sizes by frequency: 15px, 14px, 12px, 22px, 28px, 13px, 16px, 19px. The stylesheet's most common breakpoint is max-width 768px, with others at 899px, 1099px and 480px. Other reflow behavior was not measured.

## Iteration Guide

1. Start from `#0a0a0a` with `#faf9f5` Geist headings and `#aeadac` 15px / 21px body.
2. Introduce each section with a cyan Geist Mono uppercase eyebrow and a 46px / 500 headline at -0.92px, second half in `#aeadac`.
3. Use one cyan `#01c8f1` 38px button (6px radius, uppercase mono label) and an outlined `#5e5e5e` secondary.
4. Frame content in square cells with 1px `#141414` lines; step surfaces to `#0f0f0f` and `#1a1a1a`.
5. Use green, yellow, red and pink accents only for small status marks and cursors.
6. Check new values against https://www.builder.io/brand before adding them.
