---
version: alpha
name: Dub
category: "Product & SaaS"
description: "Dub.co home: white #ffffff / #fafafa neutral canvas, #171717 ink with a #737373 grey scale, Satoshi 48px/500 headlines over Inter 14-16px UI text and GeistMono numerals, black #000000 8px-radius buttons (hover #262626), #e5e5e5 hairline borders and small purple/green/orange product accents."
colors:
  canvas: "#ffffff"
  page-body: "#fafafa"
  ink: "#171717"
  ink-muted: "#737373"
  ink-soft: "#262626"
  ink-body: "#525252"
  ink-nav: "#404040"
  ink-faint: "#a3a3a3"
  primary: "#000000"
  on-primary: "#ffffff"
  border: "#e5e5e5"
  surface-muted: "#f5f5f5"
  input-text: "#111827"
  accent-purple: "#c084fc"
  accent-green: "#4ade80"
  accent-orange: "#fb923c"
typography:
  display:
    fontFamily: satoshi, "satoshi Fallback", system-ui, sans-serif
    fontSize: 48px
    fontWeight: 500
    lineHeight: 55.2px
  display-mobile:
    fontFamily: satoshi, "satoshi Fallback", system-ui, sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 40px
  statement:
    fontFamily: Inter, "Inter Fallback", system-ui, sans-serif
    fontSize: 30px
    fontWeight: 400
    lineHeight: 41.25px
  subheading:
    fontFamily: Inter, "Inter Fallback", system-ui, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: Inter, "Inter Fallback", system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Inter, "Inter Fallback", system-ui, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  button-sm:
    fontFamily: Inter, "Inter Fallback", system-ui, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 10px
  2xl: 11px
  3xl: 12px
  4xl: 16px
  pill: 9999px
spacing:
  s1: 1px
  s2: 1.5px
  s3: 2px
  s4: 4px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 20px
    height: 38px
    borderColor: "{colors.primary}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.05) 0px 1px 2px 0px
  button-primary-hover:
    backgroundColor: "{colors.ink-soft}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 20px
    height: 40px
    borderColor: "{colors.border}"
  button-nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.lg}"
    padding: 0px 16px
    height: 32px
    borderColor: "{colors.primary}"
  tab:
    backgroundColor: "{colors.surface-muted}"
    textColor: "{colors.ink-body}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 12px
    height: 34px
  statement-text:
    textColor: "{colors.ink-soft}"
    typography: "{typography.statement}"
  nav:
    textColor: "{colors.ink-nav}"
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 12px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.input-text}"
    typography: "{typography.button-sm}"
    padding: 8px 12px
    height: 27px
    borderColor: "{colors.primary}"
  card:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.border}"
  footer:
    textColor: "{colors.ink}"
---

# Dub

## Overview

This file documents the Dub home page at `https://dub.co/` (title "Dub - The Modern Link Attribution Platform"). It is a contemporary developer-SaaS page: white and near-white neutrals, a faint background grid and dotted textures, tight Inter UI text, a Satoshi headline and product UI screenshots as the main imagery.

The header has the lowercase "dub" wordmark, centred links ("Product", "Solutions", "Resources" with chevrons, "Customers", "Pricing"), an outlined "Log in" and a black "Sign up". The hero centres an announcement chip ("Introducing our Startup Program | Learn more"), the headline "Turn clicks into revenue", a two-line description and two buttons — black "Start for free" and white "Get a demo". Below, a soft tinted band holds three product tabs ("Affiliate Programs", "Conversion Analytics", "Short Links", each with a small coloured icon) above a dashboard screenshot and a dark caption bar. A grid of customer logos follows, then a large statement paragraph in which the words fade from dark to pale grey ("Marketing isn't just about clicks. It's about outcomes."), and sections "It starts with a link", "Measure what matters", "Connect with your favorite tools", "Grow with partnerships", "Built to scale" (live counters), "Enterprise-grade link infrastructure", customer testimonials, "We ship fast" and a dark closing band "Supercharge your marketing efforts".

The tone is confident and product-led; copy is short and benefit-first. Each feature section follows the same rhythm: a small coloured product label, a Satoshi heading, a two-line Inter description, a white "Explore …" button, then a wide bordered card containing live-looking product UI — link lists with click counts, an analytics table, a partner dashboard, a flow diagram — and finally a customer quote with a name, title and company logo. The "Built to scale" block shows large running counters set in GeistMono, which gives the page an instrument-panel feel. Customer logos (Buffer, Vercel, Supabase and others) appear twice, first as a grid of grey tiles and later inside testimonial cards. Dub's own Brand Kit states that its "visual identity primarily utilizes black and white for marketing purposes, symbolizing simplicity and elegance."

## Colors

Backgrounds by area: `#ffffff` (12522), `#fafafa` (5457), `#e5e5e5` (1442), `#f5f5f5` (1047), `#171717` (785), `#262626` (172), `#dcfce7` (55). Text by characters: `#737373` (2866), `#171717` (2693), `#262626` (1320), `#525252` (1212), `#404040` (527), `#a3a3a3` (472). The rest of the measured text colours (`#2563eb`, `#22863a`, `#d32f2f`, `#24292e`, `#6f42c1`) come from code-snippet syntax highlighting inside screenshots and are not brand colours.

- **canvas `#ffffff`** and **page-body `#fafafa`** (`--background: 0 0% 98%`).
- **ink `#171717`** — headlines and primary text (`--primary: 0 0% 9%`).
- **ink-muted `#737373`** — the most frequent text colour, secondary copy (`--muted-foreground: 0 0% 45.1%`).
- **ink-soft `#262626`**, **ink-body `#525252`**, **ink-nav `#404040`**, **ink-faint `#a3a3a3`** — the neutral ramp.
- **primary `#000000` / on-primary `#ffffff`** — black buttons; these match the Brand Kit's "Dub Dark" `#000000` and "Dub Light" `#FFFFFF`.
- **border `#e5e5e5`** — card and outline-button borders (`--border: 0 0% 89.8%`).
- **surface-muted `#f5f5f5`** — product tabs (`--secondary: 0 0% 96.1%`).
- **accent-purple / green / orange** — the small icon squares for Affiliate Programs, Conversion Analytics and Short Links.

## Typography

Fonts loaded: Inter (variable 100–900), satoshi (300–900) and GeistMono (100–900). By characters: Inter 10288, GeistMono 740, satoshi 250. If Satoshi is unavailable, the declared fallback is the generated "satoshi Fallback" face and then `system-ui`. Variables: `--font-inter`, `--font-satoshi`, `--font-geist-mono`.

- **display** — Satoshi 48px / 55.2px, 500. "Turn clicks into revenue"; section heads are Satoshi 48px/48px.
- **statement** — Inter 30px / 41.25px, 400, in `#262626` with later sentences in lighter greys.
- **subheading** — Inter 16px / 24px, 500.
- **body** — Inter 16px / 24px, 400.
- **button** — Inter 14px / 20px, 500. **button-sm** — Inter 14px / 20px, 400 (header buttons).

Sizes by characters: 14px (3660), 10px (2368 — dense dashboard UI), 12px (1243), 16px (997), 18px (874), 24px (699), 11px (556), 30px (313), 48px. GeistMono sets the numbers in screenshots and counters.

## Layout

Desktop capture: 1280px wide, 12205px tall. The hero band is 459px with content centred; the main content band runs from x=141 to x=1171 and up to 4 columns (6 in logo/feature grids). Vertical rules frame the content column and a faint square grid sits behind the hero. Spacing is fine-grained: 1px, 1.5px, 2px, 4px, 6px, 8px, 10px, 12px, 14px, 16px. The header shows 2 visible buttons plus the centred link group.

## Elevation & Depth

Depth is minimal. Buttons and cards carry `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px` (preceded by two zero-size ring shadows in the same declaration). Cards are separated by 1px `#e5e5e5` borders rather than shadows. The product screenshot sits in a nested frame with a light border, and the dark caption bar overlaps it. Some decorative cards are rotated (a measured `matrix(0.992546, 0.121869, -0.121869, 0.992546, 0, 0)` transform, about 7°).

## Shapes

Radii from 2px to 16px: 8px is the workhorse (buttons, nav links, tabs, cards), 12px for larger cards, 6px for inputs (`0px 6px 6px 0px` on a joined input), 16px for big panels, and full pills for chips. The announcement chip is a pill.

## Components

- **button-primary** — "Start for free": black fill and border, white Inter 14px/500, 8px radius, padding 8px 20px, 38px tall, shadow-sm. Hover `#262626`.
- **button-secondary** — "Get a demo" / "Learn more": white, `#171717` text, 1px `#e5e5e5` border, 8px radius, 40px tall.
- **button-nav** — header "Sign up": black, 14px/400, 32px tall; "Log in" is the white outlined twin, whose hover fill becomes `rgb(251, 251, 251)`.
- **tab** — product switcher: `#f5f5f5`, `#525252` 14px/500, 8px radius, padding 8px 12px, 34px tall, with a coloured icon square.
- **card** — white, 1px `#e5e5e5`, 8–12px radius; holds UI screenshots, stats and testimonials.
- **statement-text** — 30px paragraph whose sentences step down the grey ramp.
- **footer** — logo, social links, link columns, `#171717` text.

## Design System Architecture

Dub is open source (https://github.com/dubinc/dub — "The open-source link attribution platform."); its README lists Next.js, TypeScript, Tailwind CSS, Prisma and Turborepo. The Brand Kit at https://dub.co/brand covers naming, wordmark, logo, colours (Dub Light `#FFFFFF`, Dub Dark `#000000`), screenshots and mockups, and states that the broader palette is internal. The shipped page exposes shadcn-style HSL variables (`--background`, `--foreground`, `--muted`, `--border`, `--primary`, `--secondary`, `--accent`, `--ring`) plus Tailwind ring and shadow variables.

## Do's and Don'ts

- Do keep marketing surfaces black and white, as the Brand Kit says.
- Do use Satoshi only for big headlines; everything else is Inter.
- Do separate cards with `#e5e5e5` borders and at most a 1px-2px shadow.
- Do use 8px corners for buttons, tabs and cards.
- Don't use the purple/green/orange accents outside small product icons.
- Don't treat syntax-highlighting colours from screenshots as brand colours.
- Don't add heavy shadows or gradients to buttons.

## Responsive Behavior

Measured at 390px: the headline drops from 48px/55.2px to 36px/40px; section heads from 48px to 30px/36px; body stays 16px/24px; the Start for free button is unchanged (black, 8px radius, 38px tall). The mobile pass counted 0 visible header links and detected no menu toggle. Mobile font sizes by characters: 14px, 16px, 10px, 12px, 18px, 30px, 11px, 36px, plus scaled fractional sizes inside screenshots.

## Iteration Guide

1. Start with white/`#fafafa` grounds, `ink` `#171717` and the grey ramp.
2. Centre a Satoshi `display` headline with one black and one white button.
3. Show real product UI in bordered frames; avoid illustration.
4. Use `tab` switchers and `card`s with 1px borders.
5. Keep all small text in Inter at 14px and numbers in GeistMono.
