---
version: alpha
name: Prisma
category: "Backend, Database & DevOps"
description: "Prisma (prisma.io) is a white #ffffff page with Sora headings (57.6px/500 hero), Inter body at 16px/26px in #646567, black #000000 pill CTAs (12px 24px, 48px tall), glassy 18px-radius cards with #e5e5e5 borders, and the brand 'prism ray' — cyan #01d7e4, yellow #f3c306 and red #f34a60 bands at −16° — over grain-washed rainbow panels."
colors:
  canvas: "#ffffff"
  ink: "#3a3b3c"
  primary: "#000000"
  on-primary: "#ffffff"
  neutral-900: "#171717"
  ink-strong: "#151515"
  ink-muted: "#646567"
  ink-soft: "#4c4f50bf"
  hairline: "#0000000f"
  primary-foreground: "#f9faf5"
  card-glass: "#ffffff99"
  border: "#e5e5e5"
  cyan-600: "#009aaa"
  cyan-800: "#006772"
  ray-cyan: "#01d7e4"
  ray-yellow: "#f3c306"
  ray-red: "#f34a60"
typography:
  display:
    fontFamily: Sora, "Sora Fallback"
    fontSize: 57.6px
    fontWeight: 500
    lineHeight: 61.056px
  display-mobile:
    fontFamily: Sora, "Sora Fallback"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 42.4px
  heading:
    fontFamily: Sora, "Sora Fallback"
    fontSize: 44.8px
    fontWeight: 500
    lineHeight: 49.28px
  subheading:
    fontFamily: Sora, "Sora Fallback"
    fontSize: 30px
    fontWeight: 500
    lineHeight: 36px
  body:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 16px
    fontWeight: 380
    lineHeight: 26px
  button:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  nav:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  button-small:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 14px
  2xl: 15px
  3xl: 18px
  4xl: 20px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 48px
  button-header:
    backgroundColor: "{colors.ink-strong}"
    textColor: "{colors.primary-foreground}"
    typography: "{typography.button-small}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 36px
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 11px 22px
    height: 48px
    borderColor: "{colors.ink-muted}"
  nav:
    textColor: "{colors.ink-muted}"
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
  nav-link-hover:
    textColor: "{colors.ink}"
  card:
    backgroundColor: "{colors.card-glass}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.3xl}"
    padding: 20px
    borderColor: "{colors.border}"
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(21, 21, 21, 0.03) 0px 1px 2px 0px, rgba(21, 21, 21,
      0.08) 0px 12px 24px -12px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    padding: 64px 0px 0px
---

# Prisma

## Overview

Prisma's page title reads "Prisma | Agent Infrastructure for TypeScript", and the hero headline is "Your TypeScript app, from prompt to production", followed by "Give your coding agent a type-safe ORM, managed Postgres, and app hosting that work together natively." The prisma.io home page is very long (11077px at 1280px) and almost entirely white, but each major section sits on a rounded panel washed with soft rainbow colour and a fine grain.

At the top, a dark announcement strip with a rainbow edge promotes "Builder's Day — Prisma's AI developer conference" with a "Get tickets" pill. The header (logo with the colour prism mark, Platform, Pricing, Customers, Docs, Blog, a search icon, "Log in" and a black "Get Started" pill) floats inside the hero panel. The hero centres the Sora headline, an Inter paragraph, three check-marked claims ("One platform, one stack, one bill", "A CLI and API your agent drives natively", "The ORM is free, always"), a black "Get started free" pill with an outlined "See pricing" pill, social proof ("Trusted by 500,000+ developers · 46,500+ GitHub stars") and a large console mock-up ("How would you like to start?") with the cyan/yellow/red prism ray crossing behind it.

The page continues with a logo strip ("Trusted by leading companies": Cursor, reddit, okta, LUSH, ClickHouse, Cal.com, accenture), a Before/After comparison, "Ship a production TypeScript app in three steps" (Define, Deploy, Iterate), "The TypeScript stack, integrated by design" (Prisma ORM, Prisma Postgres, Prisma Compute, Prisma Studio, CLI + Management API) with glass-prism illustrations, "What changes when your stack is built to work together", pricing ("Pricing that scales with you") with usage tabs, "Real teams, real builds" testimonials, an FAQ, a "Ready to let your agent run the full loop?" panel, a footer and a giant cropped "Prisma" wordmark at the bottom.

## Colors

Neutrals carry the UI; the spectrum is reserved for the brand ray and washes.

- **canvas #ffffff** — the page background.
- **ink #3a3b3c** — `--card-foreground`, the most-read text colour (9148 characters).
- **ink-muted #646567** — the second text colour: body paragraphs, nav links, footer.
- **ink-strong #151515** — headings (h1, h2) and the header "Get Started" fill.
- **ink-soft #4c4f50bf** — translucent secondary text.
- **primary #000000** — the "Get started free" pill; **on-primary #ffffff** its label.
- **primary-foreground #f9faf5** — `--primary-foreground`, the label on #151515 buttons.
- **neutral-900 #171717** — `--sidebar-primary`, dark fills.
- **border #e5e5e5** — `--border`, card outlines; **hairline #0000000f** — 6% black, the most common border (66 uses).
- **card-glass #ffffff99** — 60% white card fill over coloured washes.

Prism colours come from the brand page's three 11-step scales (cyan, red, yellow). The prism ray "uses cyan-400, yellow-300, and red-500 as its bands": **ray-cyan #01d7e4**, **ray-yellow #f3c306**, **ray-red #f34a60**. Text accents measured on the page are **cyan-600 #009aaa** and **cyan-800 #006772** (both on the brand scale). Section washes are translucent fills such as #f7ffff80, #01ffffb3, #ff7aa299, #ffffde99 and #ffff09a6.

## Typography

The brand page sets "Headings: Sora (`--font-heading`), variable weights 100–800" and "Body: Inter (`--font-sans`), variable weights 100–900", with Semibold (600) "for buttons and CTAs".

- **display** — Sora 57.6px / 500 / 61.056px for the h1, centred. Mobile: 40px / 500 / 42.4px.
- **heading** — Sora 44.8px / 500 / 49.28px for section h2s. Mobile h2: 34px / 500 / 37.4px.
- **subheading** — Sora 30px / 500 / 36px ("Before", "After").
- **body** — Inter 16px / 380 / 26px. The live page computes weight 380 for paragraphs (6407 characters) rather than the 400 the brand page names as default; 15px is the most-used size overall (9767 characters, in cards and lists).
- **button** — Inter 16px / 600 / 24px; **button-small** — Inter 14px / 600 / 20px (header button).
- **nav** — Inter 14px / 500 / 20px.

Small labels use positive tracking (10px / 0.8px, 14px / 0.7px, 9px / 0.9px). The brand page's kicker rule: "Sentence case, ink at 70%, colour carried by a dot … Never uppercase, never letter-spaced, never grey." Sora and Inter are free Google Fonts.

## Layout

The page is 1280px wide with content from x=32 to x=1248; each major section is a rounded panel inset from the page edge, with headings centred above content. The hero is centred; feature sections use two columns (text plus illustration), the three-steps section three columns, and the extractor recorded up to four card columns. Pricing pairs a usage panel with a price card; testimonials run in three columns.

Spacing is dense inside components and generous between sections. Gaps: 12px (170 uses), 10px, 8px, 6px, 16px, with 80px between larger groups. Paddings: 24px (111 uses), 20px (cards), 6px, 12px, 16px, 8px, 32px, 36px, 28px, and 128px (6 uses). Spacing tokens run 2px to 20px. The CSS sets `--radius: .625rem` (10px) as the base radius.

## Elevation & Depth

Shadows are soft and tinted with #151515 rather than pure black. Cards use `rgba(21, 21, 21, 0.03) 0px 1px 2px 0px, rgba(21, 21, 21, 0.08) 0px 12px 24px -12px`; stronger variants reach `rgba(21, 21, 21, 0.16) 0px 8px 24px -12px` and `rgba(21, 21, 21, 0.25) 0px 8px 20px -8px`. A 1px ring `oklab(0 0 0 / 0.08) 0px 0px 0px 1px` (16 uses) outlines controls. One element carries a red glow `rgba(243, 74, 96, 0.16) 0px 8px 32px 0px` with inset highlights. The brand page adds layering rules: glass prisms "live in the background", behind content and cropped by section edges; a grain texture overlays colour-washed panels "at 0.06 opacity with multiply blending".

## Shapes

Pills are the action shape: 82 elements measured a fully rounded radius (stored as **pill 9999px**), including all CTAs. Cards use **3xl 18px** (61 uses) and **4xl 20px**; inner elements **lg 10px** (56 uses) and **md 8px** (30 uses); **xl 14px**, **2xl 15px**, **sm 6px** and **xs 4px** are occasional. Some cards round only one side (18px 18px 0px 0px; 0px 18px 18px). The brand's glass prisms are pentagons ("Pentagon is the canonical shape"), and the prism ray is a triple band at −16°.

## Components

- **Primary button** — "Get started free": #000000 pill, white Inter 16px/600, 12px 24px padding, 48px tall.
- **Header button** — "Get Started": #151515 pill, #f9faf5 14px/600, 8px 16px, 36px tall.
- **Outline button** — "See pricing": transparent, #3a3b3c 16px/600, 1px #646567 border, 11px 22px, 48px tall.
- **Nav link** — Inter 14px/500 #646567; hover #3a3b3c.
- **Card** — #ffffff99 glass fill, 1px #e5e5e5 border, 18px radius, 20px padding, the soft two-layer shadow; Sora 15px / 380 text measured inside these cards.
- **Feature panel** — white, 20px radius, 32px padding, Sora 30px/500 title.
- **Pricing tabs** — "Side project ~5K MAU", "At scale ~500K MAU": #f5f5f5 fill, #646567 14px/600 text, 16px 24px 14px padding, 69px tall.
- **Icon tile** — per the brand page, a white tile with a spectral wash along the bottom edge and a Forma Thin glyph.
- **Footer** — white, #646567 14px text, 64px top padding, link columns, then the oversized cropped wordmark.

## Design System Architecture

Prisma publishes a living brand page at https://www.prisma.io/brand. It provides logo files (full-colour for light backgrounds, white for dark, footer variants), the cyan/red/yellow scales from 50 to 950, the typography roles (Sora for headings, Inter for body, 600 for CTAs), the kicker rule, and named React components that implement the visual language: `<Texture />` (grain), `<Pattern />` (an isometric cube grid that bulges away from the cursor), `<PrismRay />` (the triple-band ray in whisper, structural and hero intensities — "The ray is a state, not a decoration"), `<GlassPrism />` and `IconTile`. Icons come from one library, "Forma Thin by Icons8 … do not mix". A press kit repository exists at https://github.com/prisma/presskit.

The shipped CSS shows the implementation: shadcn-style semantic variables (`--primary-foreground: #f9faf5`, `--card-foreground: #3a3b3c`, `--border: #e5e5e5`, `--muted: #f5f5f5`, `--ring: #a1a1a1`, `--radius: .625rem`), brand scales as `--color-prism-cyan-*`, `--color-prism-red-*`, `--color-prism-yellow-*`, font variables `--font-heading` / `--font-sans`, Fumadocs variables for docs, and Font Awesome 7 Pro variables.

## Do's and Don'ts

**Do**
- Keep the page white and the UI neutral (#3a3b3c, #646567, #151515).
- Use black pills for actions with Inter 600 labels.
- Set headings in Sora 500; body in Inter at 16px/26px.
- Use the prism ray (cyan-400, yellow-300, red-500 at −16°) as a state — scanning, loading, active, progress.
- Place glass prisms behind content and crop them at section edges.
- Write kickers in sentence case with a coloured dot.

**Don't**
- Don't uppercase or letter-space kickers, and don't make them grey (brand page).
- Don't put glass prisms in front of copy.
- Don't mix icon libraries; use Forma Thin.
- Don't fill buttons with brand cyan, yellow or red.
- Don't show the grain texture as a visible image; it is an overlay at 0.06 opacity.

## Responsive Behavior

Measured at 390px: the h1 is Sora 40px / 500 / 42.4px (from 57.6px / 61.056px), the h2 34px / 500 / 37.4px (from 44.8px), and body stays Inter 16px / 380 / 26px. The "Get started free" pill keeps 12px 24px padding and 48px height. One header link is visible and no menu toggle was detected. Content runs from x=16 to x=374; maximum card columns measured four. Intermediate breakpoints were not measured.

## Iteration Guide

1. White canvas; text #3a3b3c and #646567; headings #151515 in Sora 500.
2. Actions: black pills (12px 24px, 48px) with Inter 16px/600; outline pills with a 1px #646567 border.
3. Cards: #ffffff99 glass on coloured washes, 18px radius, #e5e5e5 border, the #151515-tinted shadow.
4. Colour comes from the prism scales on the brand page; cite the step you use.
5. Use the ray and glass prisms per the brand page rules; keep them behind content.
6. Use Forma Thin icons in white icon tiles.
