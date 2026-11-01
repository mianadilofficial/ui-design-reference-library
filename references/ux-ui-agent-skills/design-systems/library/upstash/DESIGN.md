---
version: alpha
name: Upstash
category: "Backend, Database & DevOps"
description: "Upstash's serverless-data site: a #f5f5f5 canvas with white panels, deep-green #022c22 ink, an emerald #00bc7d primary button with 12px corners, Inter Tight 128px/700 display headlines over Inter body text, JetBrains Mono code on #09090b panels, and mint #04785714 cards rounded at 16px."
colors:
  canvas: "#f5f5f5"
  page-largest: "#ffffff"
  ink: "#022c22"
  primary: "#00bc7d"
  on-primary: "#ffffff"
  surface-black: "#000000"
  surface-code: "#09090b"
  ink-muted: "#71717b"
  accent-mint: "#34d399"
  ink-brand: "#007a55"
  ink-forest: "#065f46"
  hairline: "#0000000d"
  nav-link-bg: "#ecfdf5"
  card-bg: "#04785714"
typography:
  display:
    fontFamily: "\"Inter Tight\", \"Inter Tight Fallback\""
    fontSize: 128px
    fontWeight: 700
    lineHeight: 128px
    letterSpacing: "-3.2px"
  display-mobile:
    fontFamily: "\"Inter Tight\", \"Inter Tight Fallback\""
    fontSize: 48px
    fontWeight: 700
    lineHeight: 48px
    letterSpacing: "-1.2px"
  heading:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
  subheading:
    fontFamily: "\"Inter Tight\", \"Inter Tight Fallback\""
    fontSize: 24px
    fontWeight: 600
    lineHeight: 32px
  body:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  link:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 6px
  sm: 8px
  md: 10px
  lg: 12px
  xl: 16px
  2xl: 24px
  3xl: 35.2px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 20px
    height: 42px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    backgroundColor: "{colors.nav-link-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 0px 16px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    padding: 32px
  code-block:
    backgroundColor: "{colors.surface-code}"
    textColor: "{colors.accent-mint}"
  footer:
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.none}"
    padding: 96px 0px
---

# Upstash

## Overview

Upstash sells serverless data products (Redis, Vector, QStash, Workflow, Search, Box, Blob) to developers, and the home page at upstash.com reads like a calm, green-tinted developer console. The page opens on a pale #f5f5f5 canvas with a thin mint announcement strip (#ecfdf5) at the very top that links to the remote MCP server. Below it, a centred hero sets "Serverless Data Platform" in Inter Tight at 128px, weight 700, with a -3.2px letter-spacing; the headline is filled with a left-to-right gradient that runs from deep emerald through a brighter green and ends in amber. A one-line subtitle and two compact actions follow: an emerald "Start for Free" button and an outlined "Set up your agent" copy-command chip.

The rest of the page alternates between white (#ffffff) panels — the largest painted area on the page — and the grey canvas. A tabbed product switcher (Redis, QStash, Workflow, Vector, Box, Blob) sits on a white sheet with tab heads rounded only on top (16px 16px 0px 0px). Under the tabs, three mint feature cards and a black code example explain the selected product. Later sections show a huge "Fast Anywhere" gradient word over a dotted globe with usage stats, a bento grid of "Serverless & Edge" features, an "AI Agents" block with copyable CLI commands, a customer quote carousel, a logo wall, and a four-card community row. The footer is quiet grey text centred on the canvas.

The voice is short, technical and confident: "One platform for all your data needs", "Price scales to zero", "Built for AI Agents". Imagery is almost entirely product UI — code panels, usage counters, latency bars, platform logos — with no photography.

## Colors

The palette is a single green family on neutral greys, read straight from the site's CSS custom properties (`--color-bg`, `--color-text`, `--color-primary`, `--color-text-mute`, `--color-pre-bg`, `--color-bg-mute`) and the measured computed styles.

- **Canvas #f5f5f5** — the body background (`--color-bg`). It is the grey that frames every white panel.
- **Page-largest #ffffff** — the largest painted area: product sheets, bento cards, the testimonial card and community cards.
- **Ink #022c22** — the most-read text color (`--color-text`), a near-black forest green used for headlines, links and nav.
- **Ink-muted #71717b** — `--color-text-mute`, the second most-read color: paragraphs, card descriptions, footer.
- **Primary #00bc7d** — the computed fill of "Create Database" and "Start for Free". The CSS variable `--color-primary` is declared as #00bb7f; the rendered button measures #00bc7d, and that is the token.
- **On-primary #ffffff** — button label color.
- **Ink-brand #007a55** and **ink-forest #065f46** — darker greens for inline brand text and the product tagline (h2) under the tab bar. `--color-primary-text` is declared as #007956, which renders as #007a55.
- **Accent-mint #34d399** — the green used for syntax-highlighted strings and accents on the black code panels.
- **Surface-code #09090b** — `--color-pre-bg`, the code panel background; **surface-black #000000** fills the example frame around it.
- **Nav-link-bg #ecfdf5** — the mint announcement bar.
- **Card-bg #04785714** — `--color-bg-mute`, a translucent emerald wash used by the three feature cards and the Login button.
- **Hairline #0000000d** — the most common border color, a 5% black line.

Smaller measured text colors (#e9d5ff, #f59e0b, #dc2626, #10b981) appear inside code highlighting, the gradient ends and product tab icons (the Redis tab label is #dc2626). They are product-icon or syntax colors, not interface roles.

## Typography

Three families are loaded, all as variable fonts: **Inter** (100–900) for UI and body copy, **Inter Tight** (100–900) for display and card titles, and **JetBrains Mono** (100–800) for code. Each has a metric-matched "Fallback" face declared in the stylesheet so layout does not shift while the web font loads. The site self-hosts all three, so prototypes can use the same families without substitution.

- **Display** — Inter Tight 128px / 128px line height, weight 700, letter-spacing -3.2px. Used for the hero and repeated for the section word "Fast Anywhere". Filled with a text-clipped gradient rather than a flat color.
- **Display mobile** — Inter Tight 48px / 48px, weight 700, -1.2px, measured at 390px width.
- **Heading** — Inter 24px / 32px, weight 500, in ink-forest; the product tagline under the tabs.
- **Subheading** — Inter Tight 24px / 32px, weight 600; feature card titles such as "Highly Available, Infinitely Scalable" and the tab labels.
- **Body** — Inter 20px / 28px, weight 400, in ink-muted; the testimonial and intro paragraphs.
- **Button** — Inter 16px / 24px, weight 500.
- **Nav** — Inter 14px / 20px, weight 500; header items and the announcement bar.
- **Link** — Inter 16px / 24px, weight 400.

By character count Inter at 16px and 20px carries most of the reading; weight 400 dominates, with 500 and 600 reserved for controls and titles and 700 only for the display line.

## Layout

At the 1280px desktop measurement the content area runs from 40px to 1240px (a 1200px column), and the hero headline spans that full width. The header holds eight visible links on desktop. Sections are separated by generous vertical space; the footer alone carries 96px top and bottom padding. The card grid reaches four columns at most (the community row and logo wall), while the feature row under the tabs uses three cards with 32px padding.

Spacing is a small Tailwind-style ladder: 1, 2, 4, 6, 8, 10, 12, 16, 20 and 24px are the measured steps, with 8px by far the most frequent gap and 16px and 32px the most frequent paddings. Larger paddings of 40px, 64px and 96px structure section blocks.

Density is moderate: each section introduces one idea with a centred title in Inter Tight and a muted one-line subtitle, then shows a dense product artifact (code, counters, a logo grid).

## Elevation & Depth

Depth is mostly flat color separation — white sheets on a grey canvas, translucent mint cards on white. Measured shadows are light: the most frequent is a 5% black 0px 1px 2px shadow on buttons and chips; single instances of 10% black 1px 3px and 4px 6px shadows appear on raised cards. One decorative glow uses a 30% emerald 0px 0px 80px shadow around the globe area. The code panels sit as solid #09090b blocks with no shadow, so they read as inset terminals rather than floating cards.

## Shapes

Radii are soft and mid-sized. Measured values: 6px (small menu items), 8px, 10px (the "Set up your agent" chip), 12px (primary buttons and Login), 16px (feature cards and the top of product tabs), 24px, 35.2px (large rounded bento shapes, the most frequent radius on the page) and 9999px pills (status badges and the carousel dots). Product tabs use top-only rounding, 16px 16px 0px 0px, so they join the white sheet beneath them. Square 0px corners are kept for the announcement bar, navigation and footer.

## Components

- **Primary button** — #00bc7d fill, #ffffff label, Inter 16px weight 500, 12px radius, 8px 20px padding, 42px tall ("Create Database"); "Start for Free" in the hero measures 44px with the same styling. A trailing arrow or plus icon follows the label.
- **Agent chip** — white button with ink-forest text and a 10px radius, containing a copyable command and a "Copied" state.
- **Login** — translucent emerald (#04785714) fill with a 12px radius and a light 1px 2px shadow; on hover the fill deepens (measured hover pass).
- **Announcement bar** — full-width #ecfdf5 strip, Inter 14px weight 500, 0px 16px padding, 36px tall; its fill darkens to a stronger mint on hover.
- **Product tabs** — Inter Tight 24px weight 600, 0px 32px padding, 64px tall, top-rounded 16px, each with a product icon in its own color.
- **Feature card** — #04785714 background, 16px radius, 32px padding, an Inter Tight title and three check-marked bullet lines in ink-muted.
- **Code block** — #09090b panel with JetBrains Mono, a TypeScript/Python tab switcher and mint highlights; a left list ("Caching", "Session Management", "Rate Limiting") selects examples.
- **Stats** — large numerals (160B, 210M, 15M, >99.99%) with small muted captions on a white pill-shaped strip.
- **Footer** — centred, Inter 16px in #71717b, 96px vertical padding, with status pills at the bottom.

## Design System Architecture

Upstash publishes no public design system or component documentation. The official brand page, https://upstash.com/brand, offers only downloadable logo and product-icon files (PNG and SVG, on dark and white backgrounds) — no color, type or usage rules. The de-facto system is visible in the shipped CSS: a Tailwind build (the `--tw-*` custom properties are present) with a small set of semantic root variables — `--color-bg`, `--color-text`, `--color-text-mute`, `--color-primary`, `--color-primary-text`, `--color-pre-bg`, `--color-bg-mute` — and three font variables, `--font-sans` (Inter), `--font-display` (Inter Tight) and `--font-mono` (JetBrains Mono). Components compose Tailwind's emerald scale on top of those variables, which is why many greens (#34d399, #10b981, #065f46, #007a55) appear beside the primary.

## Do's and Don'ts

**Do**
- Keep the canvas #f5f5f5 and put content on #ffffff sheets so the two-tone grey/white rhythm survives.
- Use #00bc7d only for the main action and #022c22 for text; let the muted #71717b carry long copy.
- Set big statements in Inter Tight 700 with tight negative tracking, and everything else in Inter.
- Show real code in JetBrains Mono on #09090b panels; code is the primary illustration.
- Use the translucent #04785714 wash for feature cards instead of a border.

**Don't**
- Don't introduce non-green brand accents; the red, amber and purple on the page belong to product icons and syntax highlighting.
- Don't use pills for the main button — the measured primary radius is 12px.
- Don't add heavy shadows; the deepest measured shadow is a soft 10% black.
- Don't treat the "Need help?" chat widget or the terms notice as brand UI; they are overlays, not part of the system.

## Responsive Behavior

The extractor's mobile pass at 390px width measured: the h1 drops to Inter Tight 48px / 48px with -1.2px tracking; body paragraphs drop to 14px / 20px (14px is the dominant mobile size by characters); the h2 stays at 24px / 32px. Only two header links remain visible and a menu toggle labelled "Expand menu" appears. Card grids measured one column at most (maxCardColumns 1, versus 4 on desktop). The mobile content column runs from 24px to 366px. The stylesheet declares min-width media queries at 420px, 520px, 640px, 768px (the most used), 1024px, 1280px and 1536px. Behavior of the tab switcher, code panel and bento grid between those widths was not measured.

## Iteration Guide

1. Start from the tokens: canvas #f5f5f5, white sheets, ink #022c22, muted #71717b, primary #00bc7d.
2. Load Inter, Inter Tight and JetBrains Mono; map them to sans, display and mono roles.
3. Build the hero with the 128px Inter Tight display and a gradient text fill, one subtitle, and the 12px-radius emerald button.
4. Add product sections as white sheets with 16px top-rounded tabs and mint #04785714 feature cards at 32px padding.
5. Illustrate with code on #09090b and numeric stats, not photography.
6. Keep spacing on the 4/8/16/32px ladder and section padding at 64–96px.
7. Check mobile against the measured 48px display and 14px body before shipping.
