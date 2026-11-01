---
version: alpha
name: Trigger.dev
category: "Developer Tools & IDEs"
description: "Trigger.dev's site is a dark developer page on charcoal #121317 with dimmed #878c99 body text, Satoshi-Variable 60px/600 headlines, Geist UI text and Geist Mono code, a square-cornered apple-green #a8ff53 CTA with #121317 label, 4px controls, 6px cards and #1c1e21 hairline borders."
colors:
  canvas: "#121317"
  ink: "#878c99"
  primary: "#a8ff53"
  on-primary: "#121317"
  primary-hover: "#cfffa0"
  ring: "#afff62"
  foreground: "#e8e9ec"
  ink-bright: "#d7d9dd"
  ink-soft: "#b5b8c0"
  ink-faint: "#5f6570"
  surface-card: "#15171a"
  surface-control: "#212327"
  border: "#1c1e21"
  border-bright: "#3b3e45"
  code-lavender: "#9c9af2"
  code-green: "#afec73"
  badge-lavender: "#bab2ff"
  secondary: "#7655fd"
typography:
  display:
    fontFamily: Satoshi-Variable, sans-serif
    fontSize: 60px
    fontWeight: 600
    lineHeight: 60px
  display-mobile:
    fontFamily: Satoshi-Variable, sans-serif
    fontSize: 30px
    fontWeight: 600
    lineHeight: 36px
  subheading:
    fontFamily: Satoshi-Variable, sans-serif
    fontSize: 24px
    fontWeight: 600
    lineHeight: 32px
  body:
    fontFamily: Satoshi-Variable, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28px
  button:
    fontFamily: Geist, ui-sans-serif, system-ui, -apple-system, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28px
  button-secondary:
    fontFamily: Geist, ui-sans-serif, system-ui, -apple-system, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  nav:
    fontFamily: Geist, ui-sans-serif, system-ui, -apple-system, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  tab:
    fontFamily: Geist, ui-sans-serif, system-ui, -apple-system, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  control: 4px
  card: 6px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 19.2px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 40px
  button-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    height: 32px
  tab-button:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-soft}"
    typography: "{typography.tab}"
    rounded: "{rounded.control}"
    border: "1px solid #1c1e21"
    padding: 0px 12px 0px 8px
    height: 40px
  tab-button-hover:
    backgroundColor: "{colors.surface-control}"
    textColor: "{colors.ink-bright}"
  tab-button-focus:
    boxShadow: rgb(18, 19, 23) 0px 0px 0px 2px, rgb(175, 255, 98) 0px 0px 0px 4px
  badge:
    textColor: "{colors.badge-lavender}"
    rounded: "{rounded.pill}"
    border: 1px solid rgba(255, 255, 255, 0.1)
    padding: 6px 12px 6px 8px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.control}"
    border: "1px solid #1c1e21"
  code-card:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.card}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-bright}"
    typography: "{typography.nav}"
  nav-link-hover:
    textColor: "{colors.primary}"
  footer:
    textColor: "{colors.ink-bright}"
---

# Trigger.dev

## Overview

Trigger.dev (trigger.dev, measured 2026-10 at 1280px; title "Trigger.dev | The open source platform for durable AI agents") is a dark, documentation-flavoured product page for an open-source background-jobs and AI-agent platform. The whole 11,942px page sits on one charcoal surface, `#121317`, with no light sections. A 60px header carries the Trigger.dev wordmark, How it works, Product, Changelog, Blog, Docs, Pricing, a GitHub "Star 16.6k" counter, Login and a small apple-green "Get started" button.

The hero opens with a lavender pill badge ("NEW · 7 tips for better AI chat agents"), the headline "Build and deploy durable AI agents and workflows" in Satoshi 60px, a dimmed paragraph, and a green "Start building now" button next to a copy-to-clipboard install command. Below it, a horizontal row of outlined tab buttons (AI agents, Media processing, Media generation, Human in the loop, Streaming, Run Python...) switches a large syntax-highlighted code sample paired with a short explanation. The rest of the capture is a long sequence of product diagrams and code: "How it works" with a logo animation, "Build invincible AI apps" pattern cards (Autonomous agent, Prompt chaining, Routing), "Deploy and scale to any size" run tables and charts, "Find and fix bugs fast", an extensions grid ("True runtime freedom for developers"), a three-column feature list ("All the tools you need to ship"), "Reliable by default", customer logos, an open-source band with a heart icon and GitHub statistics (16.6k, Apache 2.0, 5.1k+), testimonials ("Loved by developers"), a changelog row and a final "Deploy your first agent this afternoon" call.

The voice is technical and confident ("Build invincible AI apps", "Reliable by default"), and imagery is entirely product UI, code and diagrams: no photography.

## Colors

The palette is the Trigger.dev charcoal and apple scale, shipped on the root as Tailwind theme variables.

- **Canvas `#121317`** (`--color-background`, `--color-charcoal-900`) fills every band of the page.
- **Ink `#878c99`** (`--charcoal-400`, the app's `--color-text-dimmed`) is the most-read text color by far (8,250 weighted characters): paragraphs, testimonials and descriptions are deliberately dimmed.
- **Foreground `#e8e9ec`** (`--color-foreground`) is the h1 color; **`#d7d9dd`** (`--color-charcoal-200`, "bright") is used for h2, h3, nav and footer links; **`#b5b8c0`** (`--color-charcoal-300`) for tab labels and inline links; **`#5f6570`** (`--color-charcoal-500`) for the faintest text.
- **Apple green `#a8ff53`** (`--color-primary`, `--color-apple-500`) fills every CTA and is the hover color of header links. `--color-primary-hover` declares `#cfffa0`, and the focus ring uses `#afff62` (`--color-ring`, `--color-apple-400`).
- **Surfaces**: `#15171a` (`--charcoal-850`) for pattern cards, `#212327` (`--color-input`) for hovered tab buttons, and a translucent `#34384080` panel fill.
- **Borders**: `#1c1e21` on 55 measured elements; `#3b3e45` (`--color-app-border-bright`) on a few.
- **Code and accents**: `#9c9af2` and `#afec73` are the most frequent syntax colors; `#bab2ff` (`--color-lavender-300`) colors the hero badge text. `--color-secondary` declares `#7655fd`.

## Typography

Three families are loaded from the site's own `/assets/` folder: **Satoshi-Variable** (300 to 900) for headings and long text, **Geist** (100 to 900) for UI, and **Geist Mono** (100 to 900) for code. The root maps them to `--font-title`, `--font-sans` and `--font-mono`. Geist (5,535 weighted characters) and Satoshi (5,420) share the page almost equally; Geist Mono adds 1,339.

- **Display**: Satoshi-Variable 60px / 60px, weight 600, color `#e8e9ec`.
- **Section headings (h2)**: Satoshi 30px / 36px, weight 600.
- **Card headings (h3)**: Satoshi 24px / 32px, weight 600.
- **Body**: Satoshi 18px / 28px, weight 500, the most-read size (4,401 weighted characters).
- **Buttons**: Geist 18px / 28px weight 500 on the hero CTA, Geist 14px / 20px weight 500 on the header CTA.
- **Nav and links**: Geist 14px / 20px, weight 400; tab buttons Geist 16px / 24px.
- **Statistics**: 48px figures with positive tracking (2.4px and 1.2px).

Weights used: 400, 500 and 600 only. Letter-spacing is normal everywhere else. All three font files are self-hosted on trigger.dev, so reproduce with the same families.

## Layout

The page is a single dark column 1280px wide with content from x 29 to 1251 and up to five content columns in a band (the extractor recorded a maximum of 12 card-like columns in the tab row). The hero text is centred; later sections alternate left-aligned headings with two- and three-column diagrams. Spacing is dense and small-step: gaps of 12px (221 elements), 8px and 6px dominate, paddings of 12px, 8px, 4px and 16px, with 28px, 40px and 48px for section padding. The root defines `--spacing: .25rem` (Tailwind's 4px base) and containers such as `--container-6xl: 72rem`.

## Elevation & Depth

Depth is created with hairline borders and slight surface steps, not shadows. Cards sit one step above the canvas (`#15171a`) with a 1px `#1c1e21` border. One soft shadow, `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px`, is measured on tab buttons, and focus adds a two-layer ring: `rgb(18, 19, 23) 0px 0px 0px 2px, rgb(175, 255, 98) 0px 0px 0px 4px` (a 2px canvas gap, then green). Diagrams use glows and gradient strokes inside illustrations; a translucent purple `#782dff99` appears once.

## Shapes

- **4px** is the dominant radius (98 elements): tab buttons, pattern cards and controls (`--radius-sm: calc(.5rem - 4px)`).
- **6px** on code cards (`--radius-md: calc(.5rem - 2px)`).
- **0px** on the green CTAs: both "Start building now" and "Get started" compute to square corners.
- **Pill** on 22 elements (computed 3.35544e+07px): the hero badge and small chips.

## Components

- **Primary CTA**: `#a8ff53` fill, `#121317` Geist 18px weight 500 label, 40px tall, square corners. A 32px, 14px-label version sits in the header.
- **Tab button**: `#121317` fill, `#b5b8c0` Geist 16px label, 1px `#1c1e21` border, 4px radius, padding 0 12px 0 8px with a leading icon, 40px tall. Hover: `#212327` fill and `#d7d9dd` label. Focus: the green double ring.
- **Hero badge**: pill, `#00000033` fill, 1px `rgba(255, 255, 255, 0.1)` border, 10px weight 600 "NEW" label plus lavender text.
- **Pattern card**: `#15171a`, 1px `#1c1e21` border, 4px radius, a diagram on top, an h3 and a dimmed description below.
- **Code card**: `#121317`, 6px radius, Geist Mono with a lavender, green, pink and yellow syntax palette.
- **Header**: 60px, `#121317`, `#d7d9dd` links that turn `#a8ff53` on hover.
- **Footer**: multi-column link lists (Docs, Product, Company and others) in Satoshi 16px / 24px weight 500, `#d7d9dd`.

## Design System Architecture

Trigger.dev's brand kit (https://trigger.dev/brand, "Trigger.dev brand guidelines and downloadable assets") provides logo and lockup SVGs in light and dark versions and a "Trigger.dark" editor theme, but lists no colors or typefaces. The color system is public in the open-source repository: https://github.com/triggerdotdev/trigger.dev/blob/main/apps/webapp/app/tailwind.css defines the same charcoal and apple scales used on the marketing site (`--color-charcoal-900: #121317`, `--color-charcoal-850: #15171a`, `--color-charcoal-400: #878c99`, `--color-charcoal-200: #d7d9dd`, `--color-apple-500: #a8ff53`, `--color-apple-400: #afff62`) and maps them to semantic roles (`--color-text-dimmed`, `--color-text-bright`, `--color-background-deep`, `--color-background-dimmed`). The app uses Geist and Geist Mono as `--font-sans` and `--font-mono`; the marketing site adds Satoshi as `--font-title`. The marketing page ships Tailwind theme variables (`--tw-*` variables, `--spacing: .25rem`, `--radius-*` derived from `.5rem`).

## Do's and Don'ts

- Do keep the entire page on `#121317`; separate sections with headings and spacing, not background changes.
- Do dim body copy to `#878c99` and reserve `#d7d9dd`/`#e8e9ec` for headings and navigation.
- Do use apple green `#a8ff53` only for CTAs, hover states and the focus ring.
- Do pair Satoshi headings with Geist UI text and Geist Mono code.
- Do use 1px `#1c1e21` borders and 4px corners on cards and controls.
- Don't round the green CTAs; they are square.
- Don't add drop shadows or light-mode sections to the marketing page.
- Don't use photography; show code, run tables and diagrams.

## Responsive Behavior

Measured at a 390px mobile viewport: the h1 drops from 60px / 60px to 30px / 36px, h2 from 30px / 36px to 24px / 32px, card headings to 20px, and body text from 18px / 28px to 16px / 24px. The "Start building now" CTA keeps its desktop size (Geist 18px, 40px tall, 214px wide). The header stays 60px tall with padding 0 12px; the extractor recorded a visible menu toggle labelled "Toggle navigation" and one header link visible. Content runs from x 12. The page grows to 15,938px. The most-read mobile size is 14px. Breakpoints between 390px and 1280px were not measured.

## Iteration Guide

1. Set the canvas to `#121317`, body text to `#878c99`, headings to `#d7d9dd` / `#e8e9ec`.
2. Load Satoshi-Variable, Geist and Geist Mono; headlines at 60px / 600, body at 18px / 500.
3. Add square `#a8ff53` CTAs with `#121317` labels (40px hero, 32px header).
4. Build sections from 4px-radius `#15171a` cards with 1px `#1c1e21` borders and code cards at 6px.
5. Use 12px and 8px gaps; keep layouts dense.
6. Pull any new color from the charcoal, apple and lavender scales in the open-source `tailwind.css`.
