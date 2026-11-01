---
version: alpha
name: shadcn/ui
category: "Headless UI"
description: "shadcn/ui as measured on ui.shadcn.com and its button docs — Geist at 14px/500 buttons and a 48px/600 headline with -2.4px tracking, neutral greys (#000000 primary, #fafafa on-primary, #737373 muted, #e5e5e5 border), a 10px base radius scale with 26px pill hero buttons, and hairline card shadows."

colors:
  canvas: "#ffffff"
  page-body: "#ffffff"
  surface-muted: "#f5f5f5"
  ink: "#0a0a0a"
  primary: "#000000"
  on-primary: "#fafafa"
  neutral-900: "#171717"
  ink-muted: "#737373"
  ink-translucent: "#0e0e0eb3"
  hairline: "#e5e5e5"
  ring: "#a1a1a1"
  destructive: "#e40014"
  destructive-surface: "#ff00621a"
  destructive-text: "#e7000b"

typography:
  display:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 52.8px
    letterSpacing: "-2.4px"
  display-mobile:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 30px
    fontWeight: 600
    lineHeight: 36px
    letterSpacing: "-0.75px"
  docs-heading:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 18.75px
    fontWeight: 600
  body:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  body-docs:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 15px
    fontWeight: 400
  button:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  button-small:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 12.8px
    fontWeight: 500
  link:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
  input:
    fontFamily: Geist, "Geist Fallback"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px

rounded:
  sm: 6px
  md: 8px
  lg: 10px
  xl: 14px
  2xl: 18px
  card: 19.6px
  3xl: 22px
  4xl: 26px
  pill: 9999px

spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 20px
  s10: 24px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 0px 12px
    height: 35px
  button-default:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 10px
    height: 32px
  button-card:
    backgroundColor: "{colors.neutral-900}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 0px 12px
    height: 32px
  button-secondary:
    backgroundColor: "{colors.surface-muted}"
    textColor: "{colors.neutral-900}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 0px 12px
    height: 36px
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.md}"
    padding: 0px 10px
    height: 28px
    borderColor: "{colors.hairline}"
  button-destructive:
    backgroundColor: "{colors.destructive-surface}"
    textColor: "{colors.destructive-text}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 10px
    height: 32px
  link:
    backgroundColor: "{colors.surface-muted}"
    textColor: "{colors.neutral-900}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 2px 8px
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 10px
  text-input:
    backgroundColor: "{colors.surface-muted}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.lg}"
    padding: 4px 6px 4px 10px
    height: 32px
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
    padding: 20px 0px
    boxShadow: "rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px"
---

## Overview

shadcn/ui describes itself as "a set of beautifully-designed, accessible components and a code distribution platform" and says "This is not a component library. It is how you build your component library." (docs introduction, opened). The homepage shows exactly that: the headline "The Foundation for your Design System", a two-line paragraph "Composable, accessible components with thoughtful defaults. Build your own component library with code you can customize, extend, and make your own.", a small announcement chip ("New Questionnaire component →") above it, and two pill buttons, "Get Started" (black) and "View Components" (light grey). The rest of the page is a dense showcase of the components themselves — buttons, inputs, a bar chart, a QR-code card, a chat box, menus, a breadcrumb — arranged in a three-column grid of rounded white cards on a very light grey ground, fading out toward the bottom. The footer line reads "Built by shadcn at Vercel. The source code is available on GitHub."

The visual identity is neutral: black, white and greys, one typeface, thin borders, tiny shadows. Colour only appears inside the demo content (the yellow "Pending Setup" dot, a blue accent in the chart set, a pink-red destructive button). Because the page is a demonstration, the measurements on the button docs page matter as much as those on the homepage and both are used here.

## Colors

The site's `:root` CSS declares the semantic tokens that shadcn/ui components use. The docs (https://ui.shadcn.com/docs/theming, opened) list the pairs `--background`/`--foreground`, `--card`, `--popover`, `--primary`, `--secondary`, `--muted`, `--accent`, `--destructive`, `--border`, `--input`, `--ring`, `--chart-1` to `--chart-5` and `--sidebar` families, in OKLCH, with "the base token controls the surface color and the `-foreground` token controls the text and icon color that sits on that surface". The values below are the live computed ones.

- **Canvas** `#ffffff` is `--background` and `--card`; **surface muted** `#f5f5f5` is `--muted`, `--accent` and `--secondary`, the grey ground of the homepage and the hero "View Components" button.
- **Primary** `#000000` is `--primary` and `--foreground` on this page; it fills "Get Started", "New" and the default button on the docs page. **On primary** `#fafafa` is `--primary-foreground`.
- **Neutral 900** `#171717` fills the "View Full Report" and "Button" demos inside cards and is the `--secondary-foreground`. The extractor first picked it as the primary CTA; the hero buttons are `#000000`, so the role was overridden.
- **Ink** `#0a0a0a` is the most-read dark text; **ink muted** `#737373` is `--muted-foreground` and the single most-read text colour (925 characters); **ink translucent** `#0e0e0eb3` is a 70% dark used for secondary labels.
- **Hairline** `#e5e5e5` is `--border` and `--input`; **ring** `#a1a1a1` is `--ring`.
- **Destructive** `#e40014` is `--destructive`; on the docs page the destructive button measures `#ff00621a` fill with `#e7000b` text.

Syntax highlighting in the docs code blocks uses a separate GitHub-like palette (`#24292e`, `#032f62`, `#d73a49`, `#6f42c1`), which is not part of the UI palette. The docs state that shadcn's `components.json` `baseColor` can be neutral, stone, zinc, mauve, olive, mist or taupe (https://ui.shadcn.com/docs/components-json, opened); the colours measured here are the neutral base.

## Typography

One family: **Geist** (with `Geist Fallback`), plus `Geist Mono` for code (`--font-mono`). Geist is made by Vercel, is licensed under the OFL, and ships in Thin through Ultra Black weights; Vercel says the mono came first and the family draws on Swiss design principles (https://vercel.com/font, opened).

Measured scale: homepage h1 48px / 52.8px at weight 600 with -2.4px tracking (30px / 36px with -0.75px on mobile); lead paragraph 18px / 28px with -0.45px tracking; buttons 14px / 20px at weight 500; small buttons and the "New" chip 12.8px at 500; link chips 12px / 16px at 500; inputs 14px / 20px at 400; uppercase micro-labels 12px with +0.6px tracking ("UPCOMING", "SAVINGS PLAN", "RETIREMENT"). On the docs page the h1 "Button" is 30px / 600, section headings such as "Installation" are 18.75px / 600, prose is 15px / 400 and component labels 12.8px–14px.

### Font substitutes

Geist is open source and can be self-hosted. If it is unavailable, Inter with the same sizes and tracking is the closest common alternative; Geist's tighter display tracking is what gives the headline its density.

## Layout

The homepage is 1,893px tall at 1280px. A top bar holds the site links (Home, Docs, Components, Blocks, Charts, Directory, Typeset, Create), a search button reading "Search documentation..." (32px tall, `#f5f5f5`, 10px radius), a GitHub star count, a theme toggle and a black "New" button. The hero is centred and narrow; below it is a three-column masonry of cards, each column holding stacked cards of different heights, with a white fade over the bottom edge. The docs button page is a standard docs layout with the content column and code blocks.

Spacing: gaps 8px (104 uses), 6px (50), 4px (46), 12px, 14px and 20px; paddings 8px, 10px, 20px, 12px and 16px. Card interior padding is 20px vertical.

## Elevation & Depth

Elevation is two quiet layers: a 1px ring made from `oklab(0.145 … / 0.05)` plus `rgba(0, 0, 0, 0.1) 0px 1px 3px 0px` and `rgba(0, 0, 0, 0.1) 0px 1px 2px -1px` on cards (12 elements), and nothing at all on buttons and inputs (their shadow stacks are all zero). The docs' search button on hover lightens its fill to 50% alpha (`oklab(0.97 … / 0.5)`) and the black "New" button drops to 80% black. Focus uses the `--ring` colour `#a1a1a1`. The white fade at the bottom of the homepage grid adds depth without any shadow.

## Shapes

Radii derive from one variable. The page sets `--radius: .625rem` (10px) and scales it: `--radius-sm` is 0.6 times (6px), `--radius-md` 0.8 times (8px), `--radius-lg` 1 times (10px), `--radius-xl` 1.4 times (14px), `--radius-2xl` 1.8 times (18px), `--radius-3xl` 2.2 times (22px) and `--radius-4xl` 2.6 times (26px). Measured on the homepage: 18px (34 elements), 19.6px (24), 8px (10), 24px (8, for large cards), 10px (7) and 22px (5); on the docs page: 8px (148), 10px (42), 18px (20), and fully rounded (2). The hero buttons are 26px (pill-like at 35px–36px tall); the docs button demos use 10px by default and a fully rounded variant ("Use the `rounded-full` class to make the button rounded").

## Components

The button docs list six variants — default, outline, secondary, ghost, destructive and link — and sizes `xs`, `sm`, `default`, `lg` plus icon sizes; Base UI, React Aria and Radix UI versions exist, with Base UI the documented one (https://ui.shadcn.com/docs/components/base/button, opened). Measured:

- **Default / primary** — `#000000` fill, `#fafafa` Geist 14px/500 label, 10px radius, 0px 10px padding, 32px tall (hero version: 26px radius, 0px 12px, 35px).
- **Secondary** — `#f5f5f5` fill, `#171717` label, 26px radius, 36px tall ("View Components").
- **Outline** — white fill, `#e5e5e5` 1px border, `#000000` 12.8px label, 8px radius, 28px tall ("Deploy Now").
- **Destructive** — `#ff00621a` fill, `#e7000b` label, 10px radius.
- **Link chip** — `#f5f5f5`, 12px/500, pill, 2px 8px padding (the "New Questionnaire component" announcement).
- **Text input** — 32px tall, 10px radius, 4px 6px 4px 10px padding, 14px text.
- **Card** — white, 19.6px radius on the homepage showcase, hairline ring plus a 1px/3px shadow, 20px vertical padding.
- **Nav link** — 14px/500, 8px radius, 0px 10px padding.

## Design System Architecture

shadcn/ui is a design system distributed as source. Its documentation (https://ui.shadcn.com/docs, opened) lists the pieces: Open Code (components are copied into your project rather than installed), Composition, Distribution (a flat-file schema and CLI), Beautiful Defaults and AI-Ready, with pages for Theming, components.json, Registry, CLI, Dark Mode and Typeset. Theming uses semantic CSS variables in OKLCH (for example `oklch(0.205 0 0)` for the light primary and `oklch(0.985 0 0)` for its foreground, per the theming page; the live computed values here are rendered as hex, `#171717` and `#fafafa`). `components.json` fixes the `style` ("new-york" is recommended; "default" is deprecated), the `baseColor` and the `registries` used to install items.

The live site follows this: Tailwind CSS utility build, `--color-*` primitives from the Tailwind palette (neutral, zinc, slate and others as lab() values), semantic tokens on top (`--background`, `--primary`, `--muted`, `--border`, `--ring`, `--destructive`, `--sidebar`), the radius scale described above and `--font-sans`/`--font-mono` variables. Components were measured on the docs page https://ui.shadcn.com/docs/components/base/button.

## Do's and Don'ts

Do:
- Use semantic token pairs (`primary` with `primary-foreground`) rather than raw greys.
- Keep one typeface, Geist, at weights 400, 500 and 600.
- Use 10px as the base radius and derive others from the scale; pills only for hero actions.
- Separate cards with a hairline ring and a 1px/3px shadow.
- Show components in context (cards, charts, chat) rather than isolated.

Don't:
- Add chromatic brand colours to chrome; colour belongs to content and to the destructive state.
- Mix radii in one control group.
- Use heavy shadows or gradients on buttons.
- Treat the docs syntax colours as UI colours.

## Responsive Behavior

Two viewports were measured, 1280px and 390px. The h1 steps from 48px to 30px (line-height 36px, tracking -0.75px). The three-column card grid and the full top bar are desktop arrangements; specific breakpoints were not measured and are not stated. Measured control heights range from 28px to 36px.

## Iteration Guide

1. Start with `#ffffff`, `#f5f5f5`, `#0a0a0a` and `#737373`; use `#000000` for the single primary action.
2. Set Geist at 14px/500 for controls and 48px/600 with -2.4px tracking for the hero.
3. Define one `--radius` of 10px and derive 6, 8, 14, 18, 22 and 26px from it.
4. Build cards at 19.6px radius with a hairline ring and 1px/3px shadow; keep inputs at 32px tall.
5. Add `#e40014` only for destructive actions.
6. Re-run the gate after each addition.
