---
version: alpha
name: Coursera
category: "Education"
description: "Coursera as measured on coursera.org — a white canvas with near-black #0d0f12 ink and slate #48546e secondary text, Coursera Blue #0056d2 (the brand guide's primary blue, PMS 2728) on 36px buttons with 8px radius and a 1px inset ring, hover #0b408b; Source Sans Pro at 400/600 with slight negative tracking; soft blue-grey #f2f5fa bands, 24px-radius promo cards, pill chips and a CDS (Coursera Design System) token layer exposed as --cds-* CSS variables."

colors:
  primary: "#0056d2"
  primary-hover: "#0b408b"
  primary-hover-weak: "#f0f6ff"
  blue-750: "#0060eb"
  blue-50: "#e3eeff"
  blue-950: "#002457"
  focus-purple: "#804ee4"
  pressed-purple: "#3c0f8a"
  canvas: "#ffffff"
  ink: "#0d0f12"
  ink-secondary: "#48546e"
  on-primary: "#ffffff"
  chip-dark: "#1c2026"
  grey-25: "#f2f5fa"
  grey-50: "#e9eef7"
  grey-100: "#dae1ed"
  grey-200: "#c1cbdb"
  grey-400: "#8495b0"
  promo-peach: "#ffeac9"
  promo-ice: "#f4faff"
  promo-cream: "#fff4e8"
  brand-black: "#000000"

typography:
  display:
    fontFamily: "\"Source Sans Pro\", Arial, sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 56px
    letterSpacing: -0.48px
  course-title:
    fontFamily: "\"Source Sans Pro\", Arial, sans-serif"
    fontSize: 44px
    fontWeight: 600
    lineHeight: 52px
    letterSpacing: -0.1px
  display-mobile:
    fontFamily: "\"Source Sans Pro\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 40px
  hero-card-title:
    fontFamily: "\"Source Sans Pro\", Arial, sans-serif"
    fontSize: 28px
    fontWeight: 600
    lineHeight: 32px
    letterSpacing: -0.28px
  title-modal:
    fontFamily: "\"Source Sans Pro\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 28px
  title-section:
    fontFamily: "\"Source Sans Pro\", Arial, sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
    letterSpacing: -0.1px
  body:
    fontFamily: "\"Source Sans Pro\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  label:
    fontFamily: "\"Source Sans Pro\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20px
    letterSpacing: -0.048px
  body-small:
    fontFamily: "\"Source Sans Pro\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  card-title:
    fontFamily: "\"Source Sans Pro\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 18px
    letterSpacing: -0.042px
  button:
    fontFamily: "\"Source Sans Pro\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
    letterSpacing: 0.14px
  caption:
    fontFamily: "\"Source Sans Pro\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px

rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 16px
  xl: 24px
  chip: 32px
  max: 50px
  pill: 100px

spacing:
  "25": 2px
  "50": 4px
  "75": 6px
  "100": 8px
  "150": 12px
  "200": 16px
  "300": 24px
  "400": 32px
  "600": 48px
  "800": 64px
  "1000": 80px
  "1400": 112px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 36px
    shadow: "inset 0 0 0 1px {colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 16px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 36px
    shadow: "inset 0 0 0 1px {colors.primary}"
  button-secondary-hover:
    backgroundColor: "{colors.primary-hover-weak}"
    textColor: "{colors.primary-hover}"
    rounded: "{rounded.md}"
    shadow: "inset 0 0 0 1px {colors.primary-hover}"
  button-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.md}"
    padding: 12px 32px
    height: 48px
  filter-chip:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-small}"
    rounded: "{rounded.chip}"
    border: "1px solid {colors.grey-200}"
    padding: 4px 12px
    height: 32px
  filter-chip-selected:
    backgroundColor: "{colors.chip-dark}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.chip}"
    padding: 4px 12px
    height: 32px
  partner-pill:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-small}"
    rounded: "{rounded.pill}"
    border: "1px solid {colors.grey-50}"
    padding: 8px 12px
    height: 42px
  category-pill:
    backgroundColor: "{colors.primary-hover-weak}"
    textColor: "{colors.ink}"
    typography: "{typography.body-small}"
    rounded: "{rounded.pill}"
    padding: 8px 12px
    height: 38px
  skill-tag:
    backgroundColor: "{colors.grey-100}"
    textColor: "{colors.ink}"
    typography: "{typography.body-small}"
    rounded: "{rounded.max}"
    padding: 4px 12px
    height: 30px
  promo-card:
    backgroundColor: "{colors.promo-peach}"
    textColor: "{colors.ink}"
    typography: "{typography.hero-card-title}"
    rounded: "{rounded.xl}"
  content-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    border: "1px solid {colors.grey-50}"
    padding: 32px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 12px
    height: 48px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-small}"
  footer:
    backgroundColor: "{colors.grey-25}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
---

## Overview

Coursera's homepage is a dense, catalogue-first page on a white canvas. A thin black utility bar ("For
Individuals · For Businesses · For Universities · For Governments") sits above a white header with the blue
**coursera** wordmark, an Explore menu, a pill search field ("What do you want to learn?") ending in a round blue
search button, and a "Log In" link plus an outlined "Join for Free" button. Below, a carousel of wide promo cards
(24px radius) pairs a partner logo (Microsoft, Google, Google Cloud) and a 28px semibold headline with product
photography, floating app-icon chips and thin connector lines — each card in its own soft wash (peach `#ffeac9`,
ice `#f4faff`, cream `#fff4e8`, black `#0d0f12`).

The rest of the page is rows of course tiles: light blue-grey `#f2f5fa` panels ("Most popular", "Hot new releases",
"Trending AI courses") each holding three white list-cards with a square thumbnail, a partner logo + name, a 14px
semibold course title, and "Professional Certificate · [U+2605] 4.8" metadata in slate. A full-width blue-to-green
gradient band ("AI for the work you do—and the career you want") carries role chips and four course tiles; an
"Explore categories" section shows icon pills.

The brand guide states the primary palette is **blue `#0056D2`, black and white** and the typeface is **Source Sans
Pro** "across marketing, web, and product". The live UI layers a full Coursera Design System (CDS) on top, visible
as `--cds-*` variables: a 15-step blue and grey ramp, purple focus rings, and a semantic `interactive-*` layer.

**Key Characteristics:**
- White canvas, near-black ink `#0d0f12` (CDS `grey-975`), slate `#48546e` (`grey-750`) for metadata.
- Coursera Blue `#0056d2` (`blue-800` / `interactive-primary`) on 36px buttons, 8px radius, `8px 16px` padding, 14px/600 labels tracked `0.14px`.
- Every button has a `inset 0 0 0 1px` ring of its own colour; hover darkens to `#0b408b` (`blue-850`).
- Source Sans Pro 400/600 only, with micro negative tracking (`-0.048px` at 16px, `-0.28px` at 28px, `-0.48px` at 48px).
- Blue-grey panels (`#f2f5fa`) and pale blue tints (`#f0f6ff`, `#e3eeff`) instead of shadows.
- Radii: 8px buttons/cards, 24px promo cards, 32px chips, 50px/100px pills.
- Purple `#804ee4` focus ring (`interactive-stroke-primary-focus`).

## Colors

> **Source pages:** home (`/`), `/learn/machine-learning`, `/?authMode=login`; brand palette from
> coursera.org/about/brand-guide; token names from the live `--cds-*` CSS variables.

### Brand & Accent
- **Coursera Blue** (`{colors.primary}` — `#0056d2`): brand guide "Blue — HEX 0056D2, RGB 0, 86, 210, CMYK 90, 68, 0, 0, PMS 2728". CDS `--cds-color-blue-800`, aliased to `--cds-color-interactive-primary`.
- **Blue Hover** (`{colors.primary-hover}` — `#0b408b`): `--cds-color-blue-850` = `interactive-primary-hover`; measured hover background of Get started / Enroll now / Continue.
- **Hover Weak** (`{colors.primary-hover-weak}` — `#f0f6ff`): `blue-25` = `interactive-background-primary-hover-weak`; hover fill of outlined buttons and chips; category pill fill.
- **Blue 750** (`{colors.blue-750}` — `#0060eb`) and **Blue 50** (`{colors.blue-50}` — `#e3eeff`, `callouts-background-primary-weak`): accents and the large pale-blue band.
- **Blue 950** (`{colors.blue-950}` — `#002457`, `callouts-background-primary-strong`): the "coursera for business" navy card.
- **Focus Purple** (`{colors.focus-purple}` — `#804ee4`, `purple-600` = `interactive-stroke-primary-focus`) and **Pressed Purple** (`{colors.pressed-purple}` — `#3c0f8a`, `purple-900` = `interactive-primary-pressed`).

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`, `white-0` = `neutral-background-primary`).
- **Grey 25** (`{colors.grey-25}` — `#f2f5fa`, `neutral-background-primary-weak`): course-row panels and the footer.
- **Grey 50** (`{colors.grey-50}` — `#e9eef7`): partner-pill border, card hairline.
- **Grey 100** (`{colors.grey-100}` — `#dae1ed`): skill tags on course pages.
- **Grey 200** (`{colors.grey-200}` — `#c1cbdb`, `neutral-stroke-primary-weak`): the most common border (59 elements) — chips, inputs.
- **Grey 400** (`{colors.grey-400}` — `#8495b0`, `neutral-stroke-primary`).
- **Promo washes:** peach `#ffeac9`, ice `#f4faff`, cream `#fff4e8`.
- **Chip Dark** (`{colors.chip-dark}` — `#1c2026`, `grey-950` = `interactive-secondary-pressed/selected`): selected role chip.

### Text
- **Ink** (`{colors.ink}` — `#0d0f12`, `grey-975` = `neutral-primary`): headings and body (4,418 weighted chars).
- **Ink Secondary** (`{colors.ink-secondary}` — `#48546e`, `grey-750` = `neutral-primary-weak`): metadata, footnotes, modal sub-copy.
- **On Primary** (`{colors.on-primary}` — `#ffffff`).
- **Brand Black** (`{colors.brand-black}` — `#000000`): brand-guide black; also the utility bar.

## Typography

### Font Family
**Source Sans Pro** (Adobe, open-source) is the only family on the page, loaded as a 400–700 variable range;
CDS defines `--cds-font-family-source-sans-pro: Source Sans Pro,Arial,sans-serif` and maps `body`, `title` and
`display` to it. The 2020 rebrand post names "Source Sans Pro and Noto Sans Pro" as the typefaces (582 languages).
CDS also carries `--cds-font-family-boutros-coursera` (Boutros Coursera, Tahoma) for Arabic. Legacy `OpenSans` and
`Merriweather` @font-faces remain in the CSS corpus.

### Hierarchy

| Token | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 48px | 600 | 56px | -0.48px | Home h1 "Learn without limits" (rendered visually hidden, 1×1px) |
| `{typography.course-title}` | 44px | 600 | 52px | -0.1px | Course page h1 |
| `{typography.display-mobile}` | 32px | 600 | 40px | — | h1 at 390px |
| `{typography.hero-card-title}` | 28px | 600 | 32px | -0.28px | Promo-card headline (visible hero type) |
| `{typography.title-modal}` | 24px | 600 | 28px | — | "Log in or create account" |
| `{typography.title-section}` | 20px | 600 | 28px | -0.1px | "New and popular", "What you'll learn" |
| `{typography.body}` | 16px | 400 | 24px | — | Body, inputs, footer |
| `{typography.label}` | 16px | 600 | 20px | -0.048px | Panel headers ("Most popular →"), field labels |
| `{typography.body-small}` | 14px | 400 | 20px | — | Metadata, chips, footnotes |
| `{typography.card-title}` | 14px | 600 | 18px | -0.042px | Course tile titles |
| `{typography.button}` | 14px | 600 | 20px | 0.14px | Button labels |
| `{typography.caption}` | 12px | 400 | 18px | — | Legal text in the log-in modal |

### Principles
- Two weights: 400 for reading, 600 for everything that labels or titles; 700 appears only on the 48px "Continue" modal button.
- Tracking is tokenised: CDS letter-spacing `minus30` (-0.003em) and `minus50` (-0.005em) produce the measured `-0.042px`/`-0.048px`/`-0.06px`/`-0.1px`; display uses `-0.2px`/`-0.1px` steps (`letter-spacing-250`, `-125`); buttons use `+0.01em` (`letter-spacing-100`) = `0.14px` at 14px.
- CDS type roles are responsive: `display1` lg/sm/xs = 84/64/48px, `display2` lg/sm/xs = 44/36/32px, `title1` lg/xs = 28/24px, `title2` 20px, `title3` 16px, `title4` 14px, `body1` 16px/24px, `body2` 14px/20px (rem values ×16).

### Note on Font Substitutes
Source Sans Pro is an open-source Adobe family; use it directly. Arial is the declared fallback.

## Layout

### Spacing System
- **CDS spacing tokens** (live variables): `--cds-spacing-25` 2px, `-50` 4px, `-75` 6px, `-100` 8px, `-150` 12px, `-200` 16px, `-300` 24px, `-400` 32px, `-600` 48px, `-800` 64px, `-1000` 80px, `-1400` 112px; `--cds-base: 8`.
- **Measured:** gaps 4px (212×), 8px, 2px, 12px, 16px; paddings 8px (151×), 16px, 2px, 4px, 12px, 48px, 24px — a tight, list-heavy rhythm.

### Grid & Container
- 1280px viewport; content in a ~1184px container (48px side margins; 36px in the 960px-wide capture).
- Course-row panels: three equal columns, each a `#f2f5fa` panel with three stacked white list-cards.
- The promo carousel shows one full card plus a peek of the next, with dot pagination below.
- Course pages: a ~753px main column with 8px-radius bordered cards (`32px` padding).

### Whitespace Philosophy
Dense and utilitarian: sections separated by ~48px; items separated by 4–8px. Colour panels, not whitespace, group content.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Most surfaces |
| Ring | `inset 0 0 0 1px` in the element colour | All buttons (`#0056d2`), hover `#0b408b` |
| Hover lift | `rgba(15,17,20,0.3) 0 0 8px -4px, rgba(15,17,20,0.3) 0 0 8px -6px` | Partner pills on hover (border → `#c1cbdb`) |
| CDS level1 | `0px 0px 4px 0px rgba(15,17,20,0.1), 0px 2px 12px 2px rgba(15,17,20,0.1)` | `--cds-elevation-level1` |
| CDS level2 | `… 0px 4px 12px 4px rgba(15,17,20,0.1)` | `--cds-elevation-level2` |
| CDS level3 | `… 0px 6px 12px 4px rgba(15,17,20,0.1)` | `--cds-elevation-level3` |
| Focus | `0 0 0 1px #804ee4, 0 0 0 2px #f0f6ff` | `interactive-stroke-primary-focus` + `-focus-invert` (43 rules) |

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 2px | `--cds-border-radius-25`; small badges |
| `{rounded.sm}` | 4px | `--cds-border-radius-50`; thumbnails |
| `{rounded.md}` | 8px | `--cds-border-radius-100`; buttons, list-cards, course cards (87 elements) |
| `{rounded.lg}` | 16px | `--cds-border-radius-200`; tiles, panels |
| `{rounded.xl}` | 24px | `--cds-border-radius-300`; promo cards |
| `{rounded.chip}` | 32px | `--cds-border-radius-400`; role/filter chips |
| `{rounded.max}` | 50px | `--cds-border-radius-max`; skill tags |
| `{rounded.pill}` | 100px | Partner and category pills |

### Photography Geometry
Promo cards combine cut-out people photography in 8–16px-rounded frames with flat app-icon tiles and thin
orthogonal connector lines; course thumbnails are small squares with 4–8px corners.

## Components

### Buttons

**`button-primary`** — "Get started", "Enroll now", "Try Coursera for Business".
- `#0056d2` face, white 14px/600 label with `0.14px` tracking, `8px 16px`, 36px tall, 8px radius, `inset 0 0 0 1px #0056d2`.
- Hover (`button-primary-hover`): `#0b408b`.

**`button-secondary`** — "Join for Free", "Explore AI courses", "Enroll now" (outlined).
- White face, `#0056d2` label and 1px inset ring. Hover: fill `#f0f6ff`, label/ring `#0b408b`.

**`button-large`** — log-in modal "Continue": `#0056d2`, `12px 32px`, 48px tall, 8px radius, 14px/700/24px label; hover `#0b408b`.

### Chips & Pills

**`filter-chip`** — role chips in the AI band: white, 1px `#c1cbdb`, 32px radius, `4px 12px`, 32px tall, 14px/400. Hover: fill `#f0f6ff`, text/border `#0b408b`.
**`filter-chip-selected`** — `#1c2026` fill, white 14px/600; hover `#0b408b`.
**`partner-pill`** — logo + name, white, 1px `#e9eef7`, 100px radius, `8px 12px`, 42px; hover border `#c1cbdb` + soft shadow.
**`category-pill`** — "Explore categories": `#f0f6ff` fill, 100px radius, `8px 12px`, 38px, icon + 14px label.
**`skill-tag`** — course page skills: `#dae1ed`, 50px radius, `4px 12px`, 30px.

### Cards & Containers

**`promo-card`** — 646×298px, 24px radius, wash fill (`#ffeac9`, `#f4faff`, `#0d0f12` with white text), partner logo, 28px/600 headline, 14px copy, primary button.
**Course list-card** — white, 8px radius inside a `#f2f5fa` 16px-radius panel; thumbnail, partner, 14px/600 title, 12–14px slate meta.
**`content-card`** — course page sections: 8px radius, 1px or 2px `#e9eef7` border, 32px padding.

### Inputs & Forms

**`text-input`** — log-in modal email field: 16px/400/24px `#0d0f12`, 12px padding, 48px tall; label 16px/600/20px with "*"; header search uses the same 48px height with a round blue search button.

### Navigation

**`nav`** — black utility bar (16px/600 white links, 40px tall) above a white header; "Log In" text link in blue, "Join for Free" outlined button.

### Links

**`link`** — `#0056d2`; hover `#0b408b` with underline (measured on carousel links).

### Footer

**`footer`** — `#f2f5fa` band (1,777px tall) of link columns (Skills, Professional Certificates, Courses & …) in 16px/400 ink.

## Design System Architecture

Coursera has **no public design-system documentation, Storybook or npm token package** (searches recorded in
SOURCES.json; `@coursera/cds-*` does not exist on the public npm registry). What is official and public is the
[brand guide](https://www.coursera.org/about/brand-guide) — primary palette blue `#0056D2` / black / white, Source
Sans Pro "across marketing, web, and product", logo clear space "equal [to] the height of the first letter" — and the
[2020 brand-identity post](https://blog.coursera.org/evolving-courseras-brand-identity/) ("We selected Source Sans Pro
and Noto Sans Pro as our typefaces"). The de-facto system below is read from the live site's CSS variables:

- **Token architecture (3 tiers, measured).** Primitive ramps `--cds-color-{blue|grey|green|red|yellow|purple|pink}-{25…975}`
  plus `--cds-color-darken-*` / `lighten-*` alpha steps → semantic aliases such as
  `--cds-color-interactive-primary: var(--cds-color-blue-800)`, `--cds-color-interactive-primary-hover: var(--cds-color-blue-850)`,
  `--cds-color-neutral-primary-weak: var(--cds-color-grey-750)`, `--cds-color-feedback-error: var(--cds-color-red-750)`,
  `--cds-color-callouts-background-primary-strong: var(--cds-color-blue-950)`, `--cds-color-emphasis-*` → component-level
  variables (e.g. `--iconButton-boxShadowColor`). Naming is `cds-{category}-{role}-{variant}-{state}-{strength}`
  (`interactive-background-primary-hover-weak`).
- **Theming.** Every colour role ships `-invert` variants (`neutral-primary-invert`, `interactive-stroke-primary-focus-invert`)
  for dark surfaces such as the business card; no global dark mode was observed on the marketing site.
- **Type & spacing.** 8px base (`--cds-base: 8`); spacing tokens named ×100 = 8px (`spacing-100` 8px … `spacing-1400` 112px).
  Font-size and line-height primitives step by 0.125rem (`font-size-175` 0.875rem … `font-size-1100` 5.5rem), then typography
  roles `display1/2`, `title1–4`, `subtitle`, `body1/2`, `action` with `-lg/-sm/-xs` responsive variants.
- **Radius & elevation.** `border-radius-25/50/100/200/300/400/max` = 2/4/8/16/24/32/50px; `elevation-level1–3`.
- **Component model (observed).** Buttons (primary filled, secondary outlined, large), chips (filter, selected), pills,
  icon buttons, cards, tabs/carousels, modal, text field with label. No published inventory.
- **Accessibility (observed).** A two-ring focus indicator (1px `#804ee4` + 2px `#f0f6ff`) is applied by 43 CSS rules;
  disabled strokes use `--cds-color-neutral-disabled-strong`. Visually hidden h1 provides the page heading for screen readers.
- **Delivery.** CSS custom properties on `:root` consumed by React components with hashed class names; no public package,
  Figma kit or versioning information.

## Do's and Don'ts

### Do
- Use `#0056d2` for primary actions and links; hover to `#0b408b`; outlined buttons hover-fill `#f0f6ff`.
- Keep buttons 36px (48px in modals), 8px radius, 14px/600 labels with `0.14px` tracking and a 1px inset ring.
- Set everything in Source Sans Pro 400/600 with the slight negative tracking on titles.
- Group content in `#f2f5fa` panels with white 8px-radius cards inside.
- Use pills (32/50/100px) for chips, skills and partner logos.
- Use the purple `#804ee4` double-ring focus style.

### Don't
- Don't use pure black for text — ink is `#0d0f12`; pure black is reserved for the brand-guide palette/utility bar.
- Don't add heavy shadows; elevation is limited to the CDS 4px/12px tinted levels.
- Don't place the logo on off-brand colours, stretch, rotate or add effects to it (brand guide).
- Don't introduce new accent hues for actions; promo washes are backgrounds only.
- Don't use weights other than 400/600 in UI text.

## Responsive Behavior

### Breakpoints

| Name | Width | Key Changes |
|---|---|---|
| Desktop | 1280px (measured) | Three-column course rows; carousel shows 1.5 cards |
| Mobile | 390px (measured) | Single column; h1 32px/40px; modal CTA full-width `11px 80px 13px`, 64px tall on course page |

### Touch Targets
- Buttons 36px (desktop) / 48px (modal), inputs 48px, chips 32px, partner pills 42px.

### Collapsing Strategy
- CDS display/title roles switch `-lg` → `-sm` → `-xs` sizes (e.g. display1 84 → 64 → 48px; title1 28 → 24px).
- Mobile course row and promo card layout was not measured.

### Image Behavior
Photography is cropped into rounded frames within promo cards; course thumbnails stay square.

## Iteration Guide

1. Start on `{colors.canvas}` with `{colors.ink}` text and one `button-primary`.
2. Reference tokens: `{colors.primary}`, `{colors.primary-hover}`, `{rounded.md}`, `{typography.button}`.
3. Map new colours to the CDS ramps (`blue-25…975`, `grey-25…975`) — never invent off-ramp hexes.
4. Spacing on the 8px CDS base: 4/8/12/16/24/32/48/64.
5. Titles 600 with -0.1px tracking; body 16px/400/24px; small 14px/400/20px.
6. Run `node web/scripts/verify-designs.mjs --slug=coursera` after edits.
