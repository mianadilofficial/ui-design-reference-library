---
version: alpha
name: Unity
category: "Gaming"
description: "Unity's site runs on a black (#000000) canvas with #141414 cards, white Inter body type and a geometric nohemi 500 display face (120px hero, 48px section heads, tight negative tracking). Actions are pill-shaped: a cobalt #3a5bc7 uppercase CTA with 3.6px tracking, #3358d4 'Get started' and #262626 nav pills at 32px; cards use 8px radius, pricing cards 16px on a light #f5f5f5 page."

colors:
  primary: "#3a5bc7"
  primary-hover: "#0a5cf5"
  blue-500: "#3358d4"
  blue-600: "#2b4fca"
  blue-focus: "#238cec"
  on-primary: "#ffffff"
  canvas: "#000000"
  surface-card: "#141414"
  surface-button: "#262626"
  surface-button-hover: "#242424"
  surface-nav-hover: "#1d1d1d"
  white: "#ffffff"
  surface-light: "#f5f5f5"
  hairline-light: "#f0f0f0"
  ink: "#ffffff"
  ink-soft: "#f5f5f5"
  ink-muted: "#a6a6a6"
  ink-subtle: "#808080"
  ink-gray-300: "#cccccc"
  ink-on-light: "#141414"
  ink-on-light-muted: "#585858"
  border-dark: "#424242"
  success: "#16a34a"
  warning: "#d97706"
  error: "#dc2626"

typography:
  display-hero:
    fontFamily: "nohemi, \"nohemi Fallback\""
    fontSize: 120px
    fontWeight: 500
    lineHeight: 114px
    letterSpacing: -1.2px
  display-hero-mobile:
    fontFamily: "nohemi, \"nohemi Fallback\""
    fontSize: 60px
    fontWeight: 500
    lineHeight: 60px
  display-page:
    fontFamily: "nohemi, \"nohemi Fallback\""
    fontSize: 96px
    fontWeight: 500
    lineHeight: 92.16px
  heading-section:
    fontFamily: "nohemi, \"nohemi Fallback\""
    fontSize: 48px
    fontWeight: 500
    lineHeight: 60px
    letterSpacing: -0.48px
  heading-section-mobile:
    fontFamily: "nohemi, \"nohemi Fallback\""
    fontSize: 36px
    fontWeight: 500
    lineHeight: 43.2px
  heading-md:
    fontFamily: "Inter, \"Inter Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28.8px
    letterSpacing: 0.24px
  body-lg:
    fontFamily: "Inter, \"Inter Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  card-title:
    fontFamily: "Inter, \"Inter Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 30px
  body:
    fontFamily: "Inter, \"Inter Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-sm:
    fontFamily: "Inter, \"Inter Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: -0.028px
  nav-link:
    fontFamily: "nohemi, \"nohemi Fallback\""
    fontSize: 12px
    fontWeight: 500
    lineHeight: 18.96px
  button-cta:
    fontFamily: "Inter, \"Inter Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 18px
    letterSpacing: 3.6px
    textTransform: uppercase
  button-sm:
    fontFamily: "Inter, \"Inter Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 16px
    letterSpacing: -0.16px
  caption:
    fontFamily: "Inter, \"Inter Fallback\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 10px
    fontWeight: 400

rounded:
  xs: 2px
  md: 8px
  lg: 12px
  xl: 16px
  xxl: 24px
  pill: 9999px

spacing:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 20px
  xxl: 24px
  xxxl: 32px
  section-sm: 48px
  section: 64px
  section-lg: 96px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-cta}"
    rounded: "{rounded.pill}"
    padding: 10px 12px
    height: 38px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-outline:
    backgroundColor: "transparent"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-cta}"
    rounded: "{rounded.pill}"
    padding: 10px 12px
    border: "1px solid #3a5bc7"
  button-get-started:
    backgroundColor: "{colors.blue-500}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 32px
    boxShadow: "rgba(255, 255, 255, 0.19) 0px 1px 0px 0px inset, rgba(255, 255, 255, 0.07) 0px 1px 0px 0px inset"
  button-get-started-hover:
    backgroundColor: "{colors.blue-600}"
  button-secondary:
    backgroundColor: "{colors.surface-button}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 32px
    boxShadow: "rgb(66, 66, 66) 0px 1px 0px 0px inset"
  button-secondary-hover:
    backgroundColor: "{colors.surface-button-hover}"
  button-outline:
    backgroundColor: "transparent"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 32px
    border: "1px solid #424242"
  button-pricing:
    backgroundColor: "{colors.blue-500}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.pill}"
    padding: 0px 26px
    height: 46px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    padding: 6px 24px
    height: 48px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    rounded: "{rounded.lg}"
    padding: 8px 12px
  nav-link-hover:
    backgroundColor: "{colors.surface-nav-hover}"
  card-news:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
    rounded: "{rounded.md}"
    padding: 12px
  card-pricing:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.ink-on-light}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    padding: 24px
    border: "1px solid #f0f0f0"
  select:
    backgroundColor: "{colors.white}"
    typography: "{typography.body}"
    padding: 8px 40px 8px 12px
    height: 42px
    border: "1px solid #808080"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.body}"
    padding: 24px 32px
---

## Overview

Unity's homepage (`unity.com`) is a black, editorial product page for "the world's leading game engine". From the first pixel it is dark: a 48px black header with the white cube logo, compact nohemi nav labels (Games, Industry, Resources, Community, Learning, Support, Pricing), a dark-grey **Download Unity** pill and a cobalt **Get started** pill, then a hero where a giant two-line **"Build great"** in nohemi 120px sits left of a glowing, rounded game-footage panel (a pixel-art slot machine with a warm orange halo). Below the hero paragraph a single cobalt uppercase pill — **DOWNLOAD UNITY →** — is the main action.

The rest of the page alternates centred section heads ("Game development, unified." in nohemi 48px with a grey 20px lead) and split feature rows ("Develop anything" beside a composited Unity Editor screenshot), with a "Latest from Unity" carousel of `#141414` cards (8px radius) holding product imagery and Inter 20px titles. Everything sits on `{colors.canvas}` (`#000000`); the only colours are the cobalt buttons and whatever is in the screenshots and game footage.

The pricing page (`unity.com/pricing`, measured as `unity--pricing`) flips to light: white page, `#f5f5f5` plan cards with 16px radius, near-black `#141414` text and the same cobalt pill buttons — the system has both a dark marketing and a light commerce surface.

**Key Characteristics:**
- Black canvas, `#141414` cards, white type — the homepage is dark from header to footer.
- Display type is **nohemi 500** (geometric, tight: -1.2px at 120px, -0.48px at 48px); everything else is **Inter**.
- Two button languages: an expressive uppercase CTA (12px/700, 3.6px tracking, cobalt) and compact 32px utility pills (12px/600, -0.16px).
- Every button is a full pill (`{rounded.pill}`); cards are 8px, pricing cards 16px, nav hover chips 12px.
- Subtle inset top highlights on pills (`rgba(255,255,255,.19) 0 1px 0 inset`) instead of drop shadows.
- Game footage and editor screenshots are the imagery; no illustration system.

## Colors

> Source pages: `https://unity.com/` (extraction + probes) and `https://unity.com/pricing` (extraction `unity--pricing`). Names in parentheses are the site's own variables.

### Action
- **Cobalt** (`{colors.primary}` — `#3a5bc7`): the homepage hero CTA (DOWNLOAD UNITY) fill and the outline color of its secondary variant.
- **Cobalt Hover** (`{colors.primary-hover}` — `#0a5cf5`, `--color-blue-dark`): measured hover of the hero CTA.
- **Blue 500** (`{colors.blue-500}` — `#3358d4`, `--mango-color-blue-500`): "Get started", "Choose plan", "Download now", "Contact Sales".
- **Blue 600** (`{colors.blue-600}` — `#2b4fca`, `--mango-color-blue-600`): measured hover of Blue 500 buttons.
- **Blue Focus** (`{colors.blue-focus}` — `#238cec`, `--mango-color-blue-focus`): focus color defined in the variables.
- **On Primary** (`{colors.on-primary}` — `#ffffff`).

### Surfaces (dark)
- **Canvas** (`{colors.canvas}` — `#000000`, `--mango-color-black`): page, header, sections (`dark:bg-black`). ~60% of the capture.
- **Card** (`{colors.surface-card}` — `#141414`): news cards.
- **Button Dark** (`{colors.surface-button}` — `#262626`, `--mango-color-gray-800`) → hover `{colors.surface-button-hover}` `#242424` (`--mango-color-gray-900`).
- **Nav Hover** (`{colors.surface-nav-hover}` — `#1d1d1d`, `--mango-color-gray-950`).
- **White** (`{colors.white}` — `#ffffff`): the computed `body` background, hidden under black sections on the homepage; the visible page color on pricing.

### Surfaces (light, pricing)
- **Surface Light** (`{colors.surface-light}` — `#f5f5f5`, `--mango-color-gray-50`): plan cards.
- **Hairline Light** (`{colors.hairline-light}` — `#f0f0f0`, `--mango-color-gray-100`): plan card border.

### Text
- **Ink** (`{colors.ink}` — `#ffffff`): headings, links, buttons — the most-read text color on the homepage.
- **Ink Soft** (`{colors.ink-soft}` — `#f5f5f5`): body paragraphs.
- **Ink Muted** (`{colors.ink-muted}` — `#a6a6a6`, `--mango-color-gray-400`): secondary copy, footer labels.
- **Ink Subtle** (`{colors.ink-subtle}` — `#808080`): section leads ("Develop, deploy, and grow…").
- **Gray 300** (`{colors.ink-gray-300}` — `#cccccc`, `--mango-color-gray-300`).
- **Ink on Light** (`{colors.ink-on-light}` — `#141414`) and **muted** `{colors.ink-on-light-muted}` `#585858` (`--mango-color-gray-600`): pricing page text.
- **Border Dark** (`{colors.border-dark}` — `#424242`, `--mango-color-gray-700`): outline pill border.

### Semantic (variables)
- **Success** `{colors.success}` `#16a34a` (`--color-mango-success`), **Warning** `{colors.warning}` `#d97706` (`--mango-color-warning`), **Error** `{colors.error}` `#dc2626` (`--color-mango-error`).

## Typography

### Font Families
- **nohemi** (served at 500) — display: hero, page titles, section heads, and the compact nav labels. Variable `--font-mango-display: "nohemi", "nohemi Fallback"`.
- **Inter** (400/500/600/700) — body, card titles, buttons. Variable `--font-mango-sans: "Inter", "Inter Fallback", ui-sans-serif, system-ui, sans-serif …`.

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|---|
| `{typography.display-hero}` | nohemi | 120px | 500 | 114px | -1.2px | "Build great" (h1) |
| `{typography.display-hero-mobile}` | nohemi | 60px | 500 | 60px | — | h1 at 390px |
| `{typography.display-page}` | nohemi | 96px | 500 | 92.16px | — | "Plans & Pricing" h1 |
| `{typography.heading-section}` | nohemi | 48px | 500 | 60px | -0.48px | "Game development, unified." |
| `{typography.heading-section-mobile}` | nohemi | 36px | 500 | 43.2px | — | section h2 at 390px (pricing) |
| `{typography.heading-md}` | Inter | 24px | 500 | 28.8px | 0.24px | "Latest from Unity" |
| `{typography.body-lg}` | Inter | 20px | 400 | 30px | — | section lead |
| `{typography.card-title}` | Inter | 20px | 500 | 30px | — | news card title |
| `{typography.body}` | Inter | 16px | 400 | 24px | — | default body |
| `{typography.body-sm}` | Inter | 14px | 400 | 21px | -0.028px | hero/feature paragraphs |
| `{typography.nav-link}` | nohemi | 12px | 500 | 18.96px | — | header nav |
| `{typography.button-cta}` | Inter | 12px | 700 | 18px | 3.6px, uppercase | DOWNLOAD UNITY |
| `{typography.button-sm}` | Inter | 12px | 600 | 16px | -0.16px | utility pills |
| `{typography.caption}` | Inter | 10px | 400 | — | — | fine print |

### Principles
- **Display is tight, labels are wide.** nohemi headings use negative tracking (-1% of size); uppercase CTA labels open up to 3.6px (30%).
- **Medium, not bold, for display.** All nohemi roles are 500.
- **Body runs small.** Homepage paragraphs are 14px/21px; the 16px/24px size is the base for links and pricing body (pricing body measured 16px/26px).

### Note on Font Substitutes
nohemi is served as a webfont by unity.com; its designer and license were not confirmed from an official page, so this file names no foundry. If unavailable, use the site's own fallback (`"nohemi Fallback"`, a metric-adjusted local font) and keep weight 500 with the measured negative tracking. Inter is open-source.

## Layout

### Spacing System
- **Base**: 4px (`--spacing: .25rem`, `--mango-spacing: .25rem`).
- **Tokens**: `{spacing.xs}` 4px · `{spacing.sm}` 8px · `{spacing.md}` 12px · `{spacing.lg}` 16px · `{spacing.xl}` 20px · `{spacing.xxl}` 24px · `{spacing.xxxl}` 32px · `{spacing.section-sm}` 48px · `{spacing.section}` 64px · `{spacing.section-lg}` 96px.
- Measured gaps: 8px (most), 16px, 20px, 24px, 32px. Section containers pad `96px 32px 48px`; header pads `6px 24px`; footer container `24px 32px`.

### Grid & Container
- Content container 1024px (`container`) centred in the 1280px viewport with 32px side padding; feature rows use a 12-column grid (`grid-cols-12`).
- Breakpoints from variables: `--mango-breakpoint-sm: 480px`, `-md: 744px`, `-lg: 1024px`, `-xl: 1440px`.
- News carousel shows two 472px cards per view with dot pagination and circular arrow buttons.

### Whitespace Philosophy
Very generous vertical rhythm (96px section tops), black space as a stage, and one idea per band. Text columns are narrow (the hero paragraph is ~270px wide), which makes the 120px headline the dominant shape.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | `{colors.canvas}` | page |
| 1 | `{colors.surface-card}` | news cards |
| Inset highlight | `rgba(255,255,255,.19) 0 1px 0 inset, rgba(255,255,255,.07) 0 1px 0 inset` | blue pills |
| Inset edge | `rgb(66,66,66) 0 1px 0 inset` | dark pills |
| Hairline | `rgb(230,230,230) 0 -1px 0 inset` | pricing table rows |
| Glow | warm halo around hero footage (in the media itself) | hero panel |

No drop shadows on UI; depth is surface lightness steps (black → #141414 → #262626) plus 1px inset highlights.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 2px | inline links, small chips |
| `{rounded.md}` | 8px | news cards, media |
| `{rounded.lg}` | 12px | nav hover chips |
| `{rounded.xl}` | 16px | pricing plan cards |
| `{rounded.xxl}` | 24px | large panels |
| `{rounded.pill}` | 9999px | every button |

Pricing cards also use `0 0 16px 16px` for a bottom-rounded footer strip. The variables define `--mango-radius-xs … -3xl` (2px → 24px).

### Imagery
Hero footage is a rounded rectangle with a soft coloured glow; editor screenshots are composited at slight offsets; news images sit inset in cards with 8px corners.

## Components

### Buttons
**`button-primary`** — DOWNLOAD UNITY. `{colors.primary}`, `{typography.button-cta}`, pill, `10px 12px`, 38px, trailing arrow. **Hover** → `{colors.primary-hover}`.
**`button-primary-outline`** — same label style, 1px `#3a5bc7` border, transparent (second "DOWNLOAD UNITY" in feature rows). A text-only variant ("DISCOVER UNITY ENGINE →") uses a half-white gradient positioned for a wipe on hover.
**`button-get-started`** — `{colors.blue-500}`, `{typography.button-sm}`, pill, `0 16px`, 32px, inset highlight. **Hover** → `{colors.blue-600}`.
**`button-secondary`** — `{colors.surface-button}` (Download Unity, Advertise with Unity, See all industries), inset `#424242` edge; **hover** → `#242424`.
**`button-outline`** — transparent with 1px `#424242` (Plans and pricing).
**`button-pricing`** — Blue 500 pill at 46px tall, `0 26px` (Choose plan / Download now / Contact Sales).

### Navigation
**`nav`** — black 48px bar, `6px 24px` padding; logo, nav links, two pills, then search / store / account icons.
**`nav-link`** — nohemi 12px/500, `8px 12px`, 12px radius; **hover** fills `#1d1d1d`.

### Cards
**`card-news`** — `#141414`, 8px radius, 12px padding, 24px internal gap; image, `{typography.card-title}`, 14px description.
**`card-pricing`** — `#f5f5f5`, 1px `#f0f0f0`, 16px radius, 24px padding; plan name in nohemi 14px/500, "MOST POPULAR" label, pricing pill at bottom. One variant (Premium features) overlays soft radial pastel gradients.

### Forms
**`select`** — currency selector on pricing: white, 1px `#808080`, `8px 40px 8px 12px`, 42px, grey chevron SVG.

### Footer
**`footer`** — black, language list (English, 日本語, Français, Português, 中文, Español, Русский, 한국어 …) under a 16px/500 `#a6a6a6` "Language" label, link columns, legal row.

### State summary (measured hovers)

| Component | Default | Hover |
|---|---|---|
| `button-primary` | `#3a5bc7` | `#0a5cf5` |
| `button-get-started` | `#3358d4` | `#2b4fca` |
| `button-secondary` | `#262626` | `#242424` |
| `nav-link` | transparent | `#1d1d1d` |

### Voice & Microcopy
Headlines are short imperatives or claims set huge: "Build great", "Develop anything", "Game development, unified." Leads are one plain sentence ("Develop, deploy, and grow your game in one place, on your terms."). Hero CTAs are uppercase verb + product ("DOWNLOAD UNITY", "DISCOVER UNITY ENGINE") with a trailing arrow; utility buttons are sentence case ("Get started", "Plans and pricing", "See all industries"). News cards lead with the product ("Unity 6.6 is available", "Build with Unity for Meta VR Glasses").

## Design System Architecture

Unity publishes an official design system — **but for the Unity Editor, not for unity.com**. The [Editor Foundations Design System](https://www.foundations.unity.com/fundamentals) covers accessibility, color palette, iconography, interactions, typography, a UI writing guide and UX essentials, plus patterns (authoring flows, empty states, error messaging, overlays, windowing) and a component inventory (button, dropdown, foldout, text field, toggle, slider, progress bar, tooltip, tree view and more). Brand usage is governed by the [trademark guidelines](https://unity.com/legal/branding-trademarks): logos may not be altered, recoloured or re-typeset, and need clear space.

For the website itself, no public documentation was found (searches in `SOURCES.json`). What is observable on unity.com:

### Token architecture (as served)
- **Primitive palette**: `--mango-color-gray-{50…950}` (`#f5f5f5` → `#1d1d1d`), `--mango-color-blue-{400,500,600,700}` (`#5779e8`, `#3358d4`, `#2b4fca`, `#2745a7`), `--mango-color-red-500: #f03`, plus chart colors `--mango-color-chart-{1…13}`.
- **Semantic**: `--mango-color-info: #3358d4`, `--mango-color-success: #16a34a`, `--mango-color-warning: #d97706`, `--mango-color-error`, `--mango-color-blue-focus: #238cec`.
- **Type**: `--mango-text-{xs…9xl}` (0.625rem → 7.5rem), `--font-mango-display`, `--font-mango-sans`, `--mango-font-weight-medium: 500`, `--mango-font-weight-semibold: 600`.
- **Shape/space/motion**: `--mango-radius-{xs…3xl}`, `--mango-spacing: .25rem`, `--mango-breakpoint-{sm,md,lg,xl}`, `--mango-ease-standard: cubic-bezier(.4,0,.2,1)`.
- Each token is exposed twice — `--mango-color-*` and a utility-facing `--color-mango-*` / `--text-mango-*` — alongside variables named `--tw-*`, the naming convention of Tailwind CSS. Utilities in markup carry a `mango:` prefix (`mango:flex mango:items-center`) in the header, while page sections use `loco-text-*` type classes (`loco-text-heading-md`, `loco-text-body-lg-medium`).

### Theming
Section markup uses `bg-white dark:bg-black` / `dark:bg-gray-900` pairs: light and dark are expressed as utility variants. The homepage renders the dark variant; pricing renders light.

### Type & spacing
4px spacing base; a named type ramp from 10px to 120px; display tracking -1% of size.

### Component model
Observed components: pill buttons (cta, cta-outline, primary-sm, secondary-sm, outline-sm, pricing), nav with hover chips, news card carousel, pricing plan card, comparison table, select, footer with language list.

### Accessibility
No published web rules. Observed: `--mango-color-blue-focus` defined for focus; white-on-black body text; buttons ≥ 32px tall.

### Delivery
No public package or Figma kit for the website system was found.

## Do's and Don'ts

### Do
- Keep the marketing canvas pure black with `#141414` cards.
- Set display headlines in nohemi 500 with negative tracking (-1.2px at 120px, -0.48px at 48px).
- Use the uppercase 3.6px-tracked cobalt pill for the single hero action; use 32px utility pills elsewhere.
- Make every button a full pill.
- Use 1px inset highlights rather than drop shadows on pills.
- Switch to the light `#f5f5f5` card surface for pricing and commerce.

### Don't
- Don't set body copy in nohemi — it is display and nav only.
- Don't bold display text; 500 is the ceiling.
- Don't square off buttons or round cards beyond 8px (16px only for pricing).
- Don't recolour or re-typeset the Unity logo (trademark guidelines).
- Don't introduce accent colours beyond the cobalt blues; imagery provides colour.

## Responsive Behavior

### Breakpoints (variables)

| Name | Width |
|---|---|
| sm | 480px |
| md | 744px |
| lg | 1024px |
| xl | 1440px |

### Measured at 390px
- Hero h1 120px → 60px (line height 60px).
- "Latest from Unity" heading 24px → 36px/36px (it grows on mobile).
- Pricing h1 96px → 48px/46.08px; pricing h2 48px → 36px/43.2px.
- Header grows from 48px to 64px tall.
- Hero CTA keeps 12px uppercase but drops to weight 600.
- Body paragraphs stay 14px/21px.

| Role | Desktop (1280px) | Mobile (390px) |
|---|---|---|
| hero h1 | 120px / 114px | 60px / 60px |
| section h2 ("Latest from Unity") | 24px / 28.8px | 36px / 36px |
| pricing h1 | 96px / 92.16px | 48px / 46.08px |
| body paragraph | 14px / 21px | 14px / 21px |

### Touch Targets
Pills are 32px (utility), 38px (hero CTA) and 46px (pricing); nav chips ~35px.

### Collapsing Strategy
Only the values above were measured; mobile nav and grid layouts were not measured and are not specified here.

## Iteration Guide

1. Start dark: `{colors.canvas}` page, `{colors.surface-card}` cards, `{colors.ink}` text.
2. One nohemi headline per band; Inter for everything else.
3. Buttons are pills — pick `button-primary` (expressive) or `button-get-started` / `button-secondary` (utility).
4. Use the mango gray ramp for surfaces and borders; blue only for actions.
5. For commerce pages, invert to white + `#f5f5f5` cards with 16px radius.
6. Re-run `node web/scripts/verify-designs.mjs --slug=unity` after edits.
