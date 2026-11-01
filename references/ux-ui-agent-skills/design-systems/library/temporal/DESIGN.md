---
version: alpha
name: Temporal
category: "Backend, Database & DevOps"
description: "Temporal's durable-execution site: Space Black #141414 canvas, Off White #f8fafc headlines in light Aeonik 68px/300 tracked -2px, lavender #cacbf9 body text, UV #444ce7 brand blue with a violet-to-UV gradient square CTA in Noto Sans Mono 16px/500, pill demo controls and mono uppercase micro-labels."
colors:
  canvas: "#141414"
  ink: "#cacbf9"
  primary: "#444ce7"
  on-primary: "#f8fafc"
  gradient-violet: "#b664ff"
  demo-play: "#4e21b6"
  on-demo: "#ffffff"
  surface-black: "#000000"
  ink-slate: "#92a4c3"
  ink-off-white: "#f8fafc"
  ink-periwinkle: "#a5a9f5"
  hairline: "#243349"
  demo-tab-bg: "#1e293b"
  status-warning: "#fecb2f"
typography:
  display:
    fontFamily: Aeonik, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 68px
    fontWeight: 300
    lineHeight: 74.8px
    letterSpacing: "-2px"
  display-mobile:
    fontFamily: Aeonik, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 44px
    fontWeight: 300
    lineHeight: 48.4px
  mono-label:
    fontFamily: "\"Noto Sans Mono\", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  body:
    fontFamily: Aeonik, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 24px
    fontWeight: 300
    lineHeight: 38.4px
    letterSpacing: 0.2px
  button:
    fontFamily: "\"Noto Sans Mono\", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  input:
    fontFamily: "\"Noto Sans Mono\", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  none: 0px
  xs: 7px
  sm: 8px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    backgroundImage: "linear-gradient(45deg, rgb(182, 100, 255) 0%, rgb(68, 76, 231) 100%)"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 16px
    height: 44px
  button-primary-large:
    backgroundColor: "{colors.primary}"
    backgroundImage: "linear-gradient(45deg, rgb(182, 100, 255) 0%, rgb(68, 76, 231) 100%)"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 14px 24px
    height: 56px
  demo-play:
    backgroundColor: "{colors.demo-play}"
    textColor: "{colors.on-demo}"
    typography: "{typography.mono-label}"
    rounded: "{rounded.pill}"
    padding: 6px 16px
    height: 32px
  demo-tab:
    backgroundColor: "{colors.demo-tab-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.mono-label}"
    rounded: "{rounded.pill}"
    padding: 6px 16px
    height: 32px
  nav:
    textColor: "{colors.ink-slate}"
    padding: 12px 20px
  text-input:
    backgroundColor: "{colors.on-demo}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    padding: 8px
    height: 40px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.status-warning}"
---

# Temporal

## Overview

Temporal is an open-source durable-execution platform, and temporal.io presents it on a deep Space Black canvas with airy, light-weight headlines, lavender body copy and flashes of UV blue and violet. A full-width UV #444ce7 announcement bar ("We're heading to Vegas for AWS re:Invent…") sits on top, followed by a black header with About, Careers and Talk to Sales links, a Platform/Docs/Pricing/Use Cases/Resources menu, a gradient "Try Free" button and "Log In". The hero centres "The world's best AI runs on Temporal" in Aeonik at 68px, weight 300, with -2px tracking, over a soft violet glow, then a lavender intro and two buttons ("Get Started for Free" and a secondary). A logo marquee (Bentley, BESTSELLER, Deloitte, DoorDash, Nasdaq…) follows.

The page's centrepiece is an interactive demo, "Watch a Workflow recover from failure": a code panel ("Your Workflow Code"), a console and a "Temporal Event Timeline", controlled by pill buttons ("Play", "Subscription"). A long sequence of left-aligned statements then explains the product — "Write code as if failure doesn't exist", "You have to see it to believe it", "Create failproof apps using our SDKs", "Build Workflows that handle failures for you", "Write Activities to handle and retry failure-prone logic", "Replace your brittle state machines", "Get full visibility into your running code" — each paired with a small pixel-art or isometric illustration in violet, green and yellow. A use-case grid, customer story cards, testimonials on white cards, open-source and hosting statements, and a huge "Build invincible applications" closing band on a violet gradient lead to the footer.

The voice is confident and engineering-literate, with short imperative headlines. Illustrations are retro pixel/isometric drawings rather than photography.

## Colors

The brand page (https://temporal.io/brand) lists three primary brand colors: **UV #444CE7**, **Space Black #141414** and **Off White #F8FAFC**.

- **Canvas #141414** — Space Black; the page background (`--color-surface-background`).
- **Primary #444ce7** — UV; the announcement bar, the end stop of the CTA gradient, brand text (`--color-text-brand`, `--color-surface-brand`).
- **Gradient-violet #b664ff** — the 0% stop of the 45-degree CTA gradient that ends in UV.
- **On-primary / ink-off-white #f8fafc** — Off White; headlines (`--color-text-primary`) and CTA labels.
- **Ink #cacbf9** — lavender, the most-read text color: body paragraphs.
- **Ink-slate #92a4c3** — demo panel titles and navigation text; **ink-periwinkle #a5a9f5** — secondary accent text.
- **Surface-black #000000** — the darker demo and card panels (`--color-surface-primary`).
- **Hairline #243349** — the most common border, also used for table borders and code backgrounds (`--color-border-table`).
- **Demo-play #4e21b6** and **demo-tab-bg #1e293b** — the pill controls inside the interactive demo.
- **Status-warning #fecb2f** — the uppercase service-status line in the footer.

Code and illustrations also use green #59fda0, emerald #34d399 and orange #ff643c; these are syntax and illustration colors, not UI roles.

## Typography

Two families carry the site:

- **Aeonik** (300, 400) — headlines and body. Display 68px / 74.8px weight 300 with -2px tracking; the closing statement reaches 128px at weight 300, also with -2px tracking. Body copy is large and light: 24px / 38.4px, weight 300, +0.2px tracking — the most common setting on the page by characters.
- **Noto Sans Mono** (300, 400, 500) — every interactive and technical label. Buttons 16px / 24px weight 500; demo controls and panel titles 14px / 20px weight 400; inputs 16px / 24px; uppercase micro labels 12px with 1.6px tracking ("PARTIALLY DEGRADED SERVICE", section kickers).

The pairing — light geometric sans for statements, monospace for anything clickable — is the core of the typographic identity. Aeonik is a licensed face served by the site; for prototypes use a light-weight geometric grotesk (for example Inter Light) with the same tracking.

## Layout

At 1280px the main column runs from 121px to 1159px. The hero and demo are centred; the explanatory sequence that follows is left-aligned with a narrow text column (the "100% open-source" block spans 121px to 527px) and illustrations to the right. The use-case grid and logo rows reach six columns. Nine header items are visible on desktop.

Spacing is roomy: 16px is the most common gap, then 24px; 24px is the most common padding, with 64px separating larger groups and 112px and 192px used on major section blocks. The page is very long (about 14146px at desktop), giving each statement its own screen-height pause.

## Elevation & Depth

The page is almost flat. The only measured shadow is a hard, offset 8px 8px 0px solid black shadow — a retro "drop block" — applied twice to illustrated cards. Otherwise depth comes from color: #000000 panels on the #141414 canvas, #243349 hairlines, violet radial glows behind the hero and the gradient closing band. White testimonial cards stand out against the dark page as the main contrast change.

## Shapes

The brand mixes sharp and round. The gradient CTAs are square (0px radius) with a 2px border; demo controls are full pills (9999px); small cards use 7px and 8px corners. Borders are thin #243349 lines. Illustrations use pixel grids and isometric blocks, which reinforces the square CTA language.

## Components

- **Primary CTA** — 45-degree gradient from #b664ff to #444ce7, Off White Noto Sans Mono 16px weight 500, 0px radius, 8px 16px padding, 44px tall ("Try Free"); the large version uses 14px 24px padding and is 56px tall ("Get Started for Free").
- **Demo play** — #4e21b6 pill, white mono 14px, 6px 16px padding, 32px tall.
- **Demo tab** — #1e293b pill, #cacbf9 mono 14px, same size; hover turns the label white (measured).
- **Code panel** — black panel with #92a4c3 mono title and syntax colors.
- **Statement block** — Aeonik 68px / 300 headline, 24px / 300 lavender paragraph, small mono kicker above.
- **Testimonial card** — white card with dark text, quote, portrait and company logo.
- **Newsletter input** — white field, #141414 mono 16px text, 8px padding, 40px tall.
- **Footer** — #141414 with uppercase mono status line in #fecb2f, link columns (Discover, Explore, Developers, Community, Company).

## Design System Architecture

Temporal publishes brand guidance at https://temporal.io/brand: logos (horizontal, vertical, logomark; white and black; PNG, EPS, SVG), the three primary colors, boilerplate text, leadership photos, and links to "Using Temporal Colors" and "Temporal Logo Guidelines". No public component library for the marketing site was found. The shipped CSS exposes a semantic token layer stored as RGB triplets: surfaces (`--color-surface-background`, `--color-surface-primary`, `--color-surface-brand`, `--color-surface-information`), text (`--color-text-primary`, `--color-text-brand`, `--color-text-secondary`, `--color-text-warning`), borders (`--color-border-primary`, `--color-border-table`) and interactive states (`--color-interactive-surface`, `--color-interactive-hover`, `--color-interactive-active`), plus `--radius-sm` to `--radius-xl`.

## Do's and Don'ts

**Do**
- Use the official trio: UV #444ce7, Space Black #141414, Off White #f8fafc.
- Set statements in light Aeonik (weight 300) with -2px tracking, and body copy large (24px) and light.
- Put every button and label in Noto Sans Mono.
- Make the main CTA a square-cornered violet-to-UV gradient.
- Illustrate with pixel or isometric drawings and interactive product demos.

**Don't**
- Don't round the primary CTA; pills are reserved for demo controls.
- Don't use heavy font weights for headlines.
- Don't use soft blurred drop shadows; the only measured shadow is a hard 8px offset block.
- Don't treat the footer's yellow status line as a brand color.

## Responsive Behavior

The extractor's mobile pass at 390px measured: the h1 and h2 at 44px / 48.4px, weight 300 (tracking normal); body text at 18px / 28.8px with 0.2px tracking; the demo play button at 6px 12px padding, 32px tall. One header item remains visible with a menu toggle labelled "Open navigation menu". Grids measured up to six columns (logo rows); content spans 20px to 370px. No CSS media queries were recorded by the extractor, and other mobile behaviour was not measured.

## Iteration Guide

1. Start with #141414 canvas, #f8fafc headlines and #cacbf9 body copy.
2. Set headlines in Aeonik 300 at 68px with -2px tracking; body at 24px / 38.4px weight 300.
3. Use Noto Sans Mono for every button, label and input.
4. Build the primary CTA as a square #b664ff→#444ce7 gradient button, 44px or 56px tall.
5. Add the UV #444ce7 announcement bar and violet glows sparingly.
6. Pair each statement with a pixel or isometric illustration; use the hard 8px offset shadow for illustrated cards.
7. Check the 44px mobile headline and 18px mobile body.
