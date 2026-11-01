---
version: alpha
name: Qantas
category: "Airlines"
description: "Qantas Airways' web booking and marketing system — proprietary \"Qantas Sans\" served at 300/400/500/700, Qantas Red #df0000 for every filled CTA (hover #bc0b07, pressed #99110b), charcoal ink #323232 on white with warm-grey #f3f2f1 search fields and teaser surfaces, 24px-radius search button and 800px pill buttons, 8px cards with a signature 64px \"kangaroo-tail\" corner, and a three-tier base/alias/comp CSS-variable token architecture."

colors:
  primary: "#df0000"
  primary-hover: "#bc0b07"
  primary-pressed: "#99110b"
  secondary-hover-background: "#fddedb"
  secondary-pressed-background: "#fabcb7"
  canvas: "#ffffff"
  surface-secondary: "#f3f2f1"
  surface-tertiary: "#e5e3e1"
  surface-dark: "#323232"
  ink: "#323232"
  ink-muted: "#666564"
  ink-muted-hover: "#4c4c4b"
  on-primary: "#ffffff"
  on-dark-secondary: "#cccac8"
  border-subtle: "#e5e3e1"
  border-control: "#cccac8"
  border-strong: "#999796"
  neutral-subtle: "#7f7e7d"
  muted-outline: "#00000073"
  pressed-overlay: "#00000033"
  focus: "#237271"
  success: "#208204"
  success-background: "#e0f8d9"
  warning-background: "#ffe6b0"
  info-background: "#bff4f3"
  error-text: "#99110b"
  tier-gold: "#c3a56e"
  tier-platinum-one: "#0f2e4d"
  tier-chairmans-lounge: "#1e1e1e"

typography:
  display-01:
    fontFamily: "\"Qantas Sans\", Helvetica, sans-serif"
    fontSize: 56px
    fontWeight: 300
    lineHeight: 67.008px
    letterSpacing: -0.496px
  display-01-mobile:
    fontFamily: "\"Qantas Sans\", Helvetica, sans-serif"
    fontSize: 36px
    fontWeight: 300
    lineHeight: 47.008px
    letterSpacing: -0.496px
  display-03:
    fontFamily: "\"Qantas Sans\", Helvetica, sans-serif"
    fontSize: 40px
    fontWeight: 300
    lineHeight: 52px
    letterSpacing: -0.496px
  display-sm-03:
    fontFamily: "\"Qantas Sans\", Helvetica, sans-serif"
    fontSize: 32px
    fontWeight: 300
    lineHeight: 42px
  callout:
    fontFamily: "\"Qantas Sans\", Helvetica, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 34px
  body-01:
    fontFamily: "\"Qantas Sans\", Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  body-01-strong:
    fontFamily: "\"Qantas Sans\", Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28px
  title-04:
    fontFamily: "\"Qantas Sans\", Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28px
  body-02:
    fontFamily: "\"Qantas Sans\", Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  ui:
    fontFamily: "\"Qantas Sans\", Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
  caption:
    fontFamily: "\"Qantas Sans\", Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  caption-strong:
    fontFamily: "\"Qantas Sans\", Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
  button:
    fontFamily: "\"Qantas Sans\", Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
  button-pill:
    fontFamily: "\"Qantas Sans\", Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  button-pill-lg:
    fontFamily: "\"Qantas Sans\", Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28px

rounded:
  xs: 4px
  sm: 8px
  md: 12px
  search: 24px
  feature-corner: 64px
  pill: 9999px

spacing:
  xxs: 2px
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  xxl: 32px
  xxxl: 48px
  section-sm: 56px
  section-md: 64px
  section-lg: 96px

components:
  button-search:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.search}"
    padding: 12px 18px
    height: 48px
  button-search-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.search}"
    padding: 12px 18px
    height: 48px
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-pill}"
    rounded: "{rounded.pill}"
    padding: 4px 24px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-pill}"
    rounded: "{rounded.pill}"
    padding: 4px 24px
    height: 48px
  button-primary-pressed:
    backgroundColor: "{colors.primary-pressed}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-pill}"
    rounded: "{rounded.pill}"
  button-primary-lg:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-pill-lg}"
    rounded: "{rounded.pill}"
    padding: 4px 24px
    height: 56px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    borderColor: "{colors.primary}"
    typography: "{typography.button-pill}"
    rounded: "{rounded.pill}"
  button-secondary-hover:
    backgroundColor: "{colors.secondary-hover-background}"
    textColor: "{colors.primary}"
    typography: "{typography.button-pill}"
    rounded: "{rounded.pill}"
  button-on-media-light:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.ink}"
    typography: "{typography.button-pill}"
    rounded: "{rounded.pill}"
    padding: 4px 24px
    height: 48px
  button-dark:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-pill}"
    rounded: "{rounded.pill}"
    padding: 4px 24px
    height: 40px
  button-secondary-muted:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    borderColor: "{colors.muted-outline}"
    typography: "{typography.button-pill}"
    rounded: "{rounded.pill}"
    padding: 4px 24px
    height: 40px
  button-secondary-muted-hover:
    backgroundColor: "{colors.surface-tertiary}"
    textColor: "{colors.ink-muted-hover}"
    borderColor: "{colors.muted-outline}"
    typography: "{typography.button-pill}"
    rounded: "{rounded.pill}"
  text-input-search:
    backgroundColor: "{colors.surface-secondary}"
    textColor: "{colors.ink}"
    typography: "{typography.ui}"
    rounded: "{rounded.sm}"
    padding: 0px 24px 0px 48px
    height: 70px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.ui}"
    height: 128px
  nav-item-hover:
    textColor: "{colors.primary}"
    typography: "{typography.ui}"
    height: 64px
  link-quick:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.ui}"
    rounded: "{rounded.sm}"
    padding: 8px 16px
    height: 48px
  link-brand:
    textColor: "{colors.primary}"
    typography: "{typography.ui}"
  link-brand-hover:
    textColor: "{colors.primary-hover}"
    typography: "{typography.ui}"
  card-feature-red:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.ui}"
    rounded: 8px 64px 8px 8px
    padding: 64px 32px 64px 64px
  card-teaser:
    backgroundColor: "{colors.surface-secondary}"
    textColor: "{colors.ink}"
    typography: "{typography.ui}"
    rounded: "{rounded.sm}"
    padding: 0px
  chip-selected:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.pill}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.ui}"
---

## Overview

Qantas.com is a booking tool first and a brand showcase second. The capture of the US homepage
(`/en-us`) opens with a white header, a 56px weight-300 "Plan your trip" heading, and a full-width
flight search panel: three warm-grey (`{colors.surface-secondary}` — `#f3f2f1`) fields 70px tall,
a trip-type row, and a single red "Search flights" button on the right. Only after the search
panel does the page become editorial — a large red feature block ("Australia starts with Qantas")
beside a warm, natural-light portrait of a cabin passenger, then "Flight deals", a Red Email
sign-up band, and "Discover more" teasers.

The palette is disciplined: **Qantas Red** `#df0000` (`--color-alias-brand-primary`) is the only
saturated colour on the page. It fills every primary CTA, the 64px-cornered feature card, the logo
and the active tab underline. Everything else is charcoal `#323232` text on white, with the warm
grey `#f3f2f1` used for form fields and teaser cards and `#e5e3e1` for hover/tertiary surfaces.
There is no pure black body text and no cool grey anywhere — every neutral leans warm.

Typography is a single proprietary family, **Qantas Sans**, loaded at 300, 400, 500 and 700. Large
headings run at weight 300 with a fixed `-0.496px` tracking — light, airy, almost whispered against
the loud red — while buttons jump straight to 700. That 300 ↔ 700 contrast is the typographic
signature: thin editorial headlines, heavy action labels.

**Key Characteristics:**
- One brand colour: Qantas Red `#df0000` on CTAs, feature blocks and the logo; hover darkens to `#bc0b07`, pressed to `#99110b`.
- Charcoal ink `#323232` for all text (6,185 weighted characters vs 399 in red).
- Warm-grey `#f3f2f1` fills the 70px search inputs and teaser cards — the largest background by area (3,826).
- Display headings at Qantas Sans 300, 56px desktop / 36px mobile, tracking `-0.496px`.
- Two button geometries: the 48px "Search flights" button at 24px radius, and 800px-radius pills everywhere else.
- Asymmetric "tail" corner: feature cards use `8px 64px 8px 8px` radii, echoing the kangaroo tail fin.
- A token system with explicit `base` → `alias` → `comp` tiers exposed as CSS custom properties on `:root`.

## Colors

> Source: `web/data/extracted/qantas.json` (computed styles, hover states and `:root` custom properties of https://www.qantas.com/en-us). Token names in brackets are the site's own CSS variables.

### Brand & Accent
- **Qantas Red** (`{colors.primary}` — `#df0000`, `--color-alias-brand-primary`): filled CTAs, feature cards, logo, nav hover, tab indicator.
- **Red Hover** (`{colors.primary-hover}` — `#bc0b07`, `--color-alias-interactive-tertiary-hover-foreground`): measured hover background of "Search flights" and "See all flight deals", and the hover colour of red links.
- **Red Pressed** (`{colors.primary-pressed}` — `#99110b`, `--color-comp-web-button-primary-pressed-background`).
- **Secondary Hover** (`{colors.secondary-hover-background}` — `#fddedb`, `--color-comp-web-button-secondary-hover-background`): pink wash behind red-outlined buttons on hover; also measured as the error-alert fill on the page.
- **Secondary Pressed** (`{colors.secondary-pressed-background}` — `#fabcb7`, `--color-comp-web-button-secondary-pressed-background`).

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page background.
- **Surface Secondary** (`{colors.surface-secondary}` — `#f3f2f1`, `--color-alias-surface-highlight-on-primary`): search inputs, teaser cards, the "switch site" banner.
- **Surface Tertiary** (`{colors.surface-tertiary}` — `#e5e3e1`, `--color-alias-surface-background-tertiary`): hover backgrounds of muted/tertiary buttons and links, disabled backgrounds.
- **Surface Dark** (`{colors.surface-dark}` — `#323232`, `--color-alias-surface-background-dark`): dark pill buttons, selected chips.

### Text
- **Ink** (`{colors.ink}` — `#323232`): all body copy, headings, nav.
- **Ink Muted** (`{colors.ink-muted}` — `#666564`, `--color-alias-interactive-muted-enabled-foreground`): secondary labels, muted buttons.
- **Ink Muted Hover** (`{colors.ink-muted-hover}` — `#4c4c4b`): measured hover text of "Stay on Qantas US".
- **On Primary** (`{colors.on-primary}` — `#ffffff`): text on red and on charcoal.
- **On Dark Secondary** (`{colors.on-dark-secondary}` — `#cccac8`, `--color-alias-text-secondary-on-dark`).

### Borders
- **Border Subtle** (`{colors.border-subtle}` — `#e5e3e1`, `--color-alias-border-subtle`).
- **Border Control** (`{colors.border-control}` — `#cccac8`): select/dropdown outlines (e.g. "Departure from" select).
- **Border Strong** (`{colors.border-strong}` — `#999796`, `--color-alias-border-strong`).
- **Neutral Subtle** (`{colors.neutral-subtle}` — `#7f7e7d`, `--color-alias-charts-standard-neutral-subtle`).
- **Muted Outline** (`{colors.muted-outline}` — `#00000073`, `--color-comp-web-button-secondary-muted-enabled-border`): 2px outline of muted pill buttons.
- **Pressed Overlay** (`{colors.pressed-overlay}` — `#00000033`).

### Semantic
- **Focus** (`{colors.focus}` — `#237271`, `--color-alias-interactive-focus-on-light`): teal focus ring, drawn as `inset 0 0 0 3px` (from the CSS corpus). Teal is deliberately not red so focus never reads as an error.
- **Success** (`{colors.success}` — `#208204`, `--color-alias-interactive-validation-success`), background `#e0f8d9`.
- **Warning background** (`{colors.warning-background}` — `#ffe6b0`).
- **Info background** (`{colors.info-background}` — `#bff4f3`).
- **Error text** (`{colors.error-text}` — `#99110b`, `--color-alias-notification-error-text`); validation error border is `#bc0b07`.

### Frequent Flyer tiers
The `:root` also ships a loyalty palette (`--color-alias-tiers-qff-status-*`): gold `#c3a56e`
(`{colors.tier-gold}`), Platinum One navy `#0f2e4d` (`{colors.tier-platinum-one}`), Chairman's Lounge
`#1e1e1e` (`{colors.tier-chairmans-lounge}`). Use these only for status badges and cards.

## Typography

### Font Family
Every text role on the page computes to `"Qantas Sans", Helvetica, sans-serif`; `document.fonts`
reported Qantas Sans at weights 300, 400, 500 and 700. The variable `--font-family-base-title`
is also `"Qantas Sans"`. Noto Sans JP/KR/TC/SC `@font-face` rules are loaded for CJK locales.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Measured on |
|---|---|---|---|---|---|
| `{typography.display-01}` | 56px | 300 | 67.008px | -0.496px | "Plan your trip" (desktop) |
| `{typography.display-01-mobile}` | 36px | 300 | 47.008px | -0.496px | same heading at 390px |
| `{typography.display-03}` | 40px | 300 | 52px | -0.496px | "Say G'day…", feature headings |
| `{typography.display-sm-03}` | 32px | 300 | 42px | — | `--alias-web-sm-display-03` |
| `{typography.callout}` | 24px | 400 | 34px | — | `--alias-web-lg-callout` |
| `{typography.body-01}` | 18px | 400 | 28px | — | `--alias-web-global-body-01` |
| `{typography.body-01-strong}` | 18px | 700 | 28px | — | `--alias-web-global-body-01-strong` |
| `{typography.title-04}` | 18px | 500 | 28px | — | `--alias-web-global-title-04` |
| `{typography.body-02}` | 16px | 400 | 24px | — | `--line-height-alias-body-02` |
| `{typography.ui}` | 16px | 400 | 18.4px | — | nav, links, footer |
| `{typography.caption}` | 14px | 400 | 20px | — | most common size; terms, labels |
| `{typography.caption-strong}` | 14px | 700 | 20px | — | `--alias-web-global-caption-strong` |
| `{typography.button}` | 16px | 700 | 16px | — | "Search flights" |
| `{typography.button-pill}` | 16px | 700 | 24px | — | pill CTAs |
| `{typography.button-pill-lg}` | 18px | 700 | 28px | — | "Subscribe" |

### Principles
- **Light display, bold action.** Display tiers stay at 300; buttons are 700; body stays at 400. Weight 500 is reserved for small titles (`title-04`).
- **Fixed negative tracking.** The 56px and 40px headings both measure `-0.496px` — a constant, not a ratio.
- **Shorthand tokens.** The site defines whole type styles as `font` shorthands, e.g. `--alias-web-lg-display-01: 300 4.5rem/5.5rem "Qantas Sans"`, `--alias-web-sm-display-02: 300 2.25rem/2.938rem "Qantas Sans"`.
- **Size weights on the page:** 14px (3,201 chars), 18px (2,367), 16px (1,106), 40px (270), 56px (95), 32px (89).

### Note on Font Substitutes
Qantas Sans is proprietary and not publicly distributed; Qantas has published no specimen or
designer credit that we could find. Its predecessor was Ciutadella (Emtype Foundry), adopted in the
2016 Houston Group rebrand ([Fonts In Use](https://fontsinuse.com/uses/15452/qantas-airways-2016-rebrand),
[qantas-design/qantas-typography](https://github.com/qantas-design/qantas-typography)) — `Ciutadella`
still appears in the site's CSS corpus. The site's own fallback is **Helvetica**, so use the declared
stack `"Qantas Sans", Helvetica, sans-serif`. Keep display weights at 300 in the substitute.

## Layout

### Spacing System
- **Base unit:** 8px (`--spacing-base-1-0: 0.5rem`), with 2px and 4px sub-steps.
- **Measured gaps:** 8px (91), 16px (49), 4px (44), 32px (40), 12px (28), 24px (25), 56px, 96px.
- **Measured paddings:** 12px, 8px, 4px, 24px, 48px, 16px, 96px, 32px, 64px.
- **Tokens:** `{spacing.xxs}` 2 · `{spacing.xs}` 4 · `{spacing.sm}` 8 · `{spacing.md}` 12 · `{spacing.lg}` 16 · `{spacing.xl}` 24 · `{spacing.xxl}` 32 · `{spacing.xxxl}` 48 · `{spacing.section-sm}` 56 · `{spacing.section-md}` 64 · `{spacing.section-lg}` 96.
- Responsive spacing is tokenised: e.g. `--spacing-alias-responsive-300-to-700: 3.5rem` scales between breakpoints.

### Grid & Container
- Body max width `--body-max-width: 80rem` (1280px); `--sizing-alias-responsive-layout-max-width-lg: 79.938rem`.
- Readable text max width `--sizing-alias-typography-max-width-standard: 41.5rem`.
- The search panel is a 3-column row (departure · arrival · dates) with a circular swap button between the first two fields.
- Feature rows split roughly 55/45: red text block left, photo right, separated by a narrow gutter.
- "Flight deals" and "Discover more" use a left title column (large 300-weight heading broken over two lines) and a right content column.

### Whitespace Philosophy
Generous vertical air between bands (96px paddings measured), tight 8px rhythms inside controls.
Hairline `#e5e3e1` rules separate the quick-links row and the sign-up band rather than coloured backgrounds.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | All cards and fields — colour (warm grey) separates, not shadow |
| 1 | `rgba(0, 0, 0, 0.1) 0px 8px 32px 0px` | Sticky header drop shadow (only shadow measured on the page) |
| Menu | `0px 12px 48px 0px #0000001a` (CSS corpus) | Dropdown/menu panels |
| Focus | `inset 0 0 0 3px var(--color-alias-interactive-focus-on-light)` | Keyboard focus |

The system is overwhelmingly flat. Depth comes from the red feature block and full-bleed photography.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 4px | small text-field corner (`--border-radius-comp-web-text-field-sm-corner-radius`) |
| `{rounded.sm}` | 8px | search inputs, teaser cards, quick links (most frequent radius) |
| `{rounded.md}` | 12px | `--border-radius-alias-fixed-lg` |
| `{rounded.search}` | 24px | "Search flights" button |
| `{rounded.feature-corner}` | 64px | the single large corner of feature cards |
| `{rounded.pill}` | 9999px | all other buttons; the site writes `800px` (`--border-radius-base-100-0`) |

### The tail corner
Feature blocks use mixed radii — `8px 64px 8px 8px`, `64px 8px 8px`, `0px 0px 0px 64px` were all
measured. One oversized corner per block, the rest 8px. Photos beside a red card take the mirrored
corner so the pair reads as one shape.

### Photography Geometry
Warm, natural-light lifestyle photography (crew, passengers, Australian landscapes), cropped tall
inside 8px-radius frames. Partner lockups (e.g. "Australia" tourism logo) sit in a white tab
pinned to a photo corner.

## Components

### Buttons

**`button-search`** — the booking CTA.
- `{colors.primary}` background, white `{typography.button}` (16px/700), padding 12px 18px, 48px tall, `{rounded.search}` 24px, trailing arrow icon.
- Hover `button-search-hover`: background `#bc0b07` (measured).

**`button-primary`** — red pill ("See all flight deals").
- 48px tall, padding 4px 24px, `{typography.button-pill}` (16px/700/24px), radius 800px.
- Hover `#bc0b07` (measured); pressed `#99110b` (`--color-comp-web-button-primary-pressed-background`).
- Large variant `button-primary-lg` ("Subscribe"): 56px tall, 18px/700/28px.

**`button-secondary`** — red outline, from the comp tokens: border/text/icon `#df0000`
(`--color-comp-web-button-secondary-enabled-border`), hover fill `#fddedb`, pressed `#fabcb7`.

**`button-on-media-light`** — white pill with charcoal text and border, used on the red feature card ("Discover Australia in the Sky"). Hover background becomes `rgba(255,255,255,0.8)`.

**`button-dark`** — charcoal `#323232` pill, white text, 40px ("Switch to Qantas TH").

**`button-secondary-muted`** — transparent pill, `#666564` text, 2px `#00000073` border, 40px. Hover: background `#e5e3e1`, text `#4c4c4b` (measured).

### Inputs & Forms
**`text-input-search`** — warm-grey field `#f3f2f1`, no border, 8px radius, 70px tall, padding `0 24px 0 48px` (leading icon zone), 16px text, 14px label above ("Departure location").
Focus colour `#237271` with a 2px focused border (`--border-width-comp-web-text-field-focused`); error border `#bc0b07`.
Select ("Departure from"): white field, 1px `#cccac8` outline, clear "×" and chevron.

### Navigation
**`nav`** — 128px white header: logo + oneworld mark and locale/cart row on top, primary menu
(Flights · Travel · Frequent Flyer · Qantas for Business, each with a chevron) below, Help on the
right. Menu items are 64px-tall buttons; hover turns text `#df0000` (measured). A soft
`0 8px 32px rgba(0,0,0,.1)` shadow sits under the header. Mobile header collapses to 48px.

**Tabs** — "Flights / Hotels and Airbnb / Cars": active tab bold with a red underline, inactive tabs muted grey with a grey rule.

**`link-quick`** — icon + 16px label tiles (Manage booking, Check-in…), 48px tall, 8px radius, padding 8px 16px.

**`link-brand`** — red links underline; hover `#bc0b07`.

### Cards
**`card-feature-red`** — `#df0000` block, white text, 40px/300 heading, padding `64px 32px 64px 64px`, radius `8px 64px 8px 8px`. Holds one white pill and one white-outline pill.
**`card-teaser`** — `#f3f2f1` card, 8px radius, no padding at the frame (image bleeds), 40px/300 title inside.

### Chips
**`chip-selected`** — dark `#323232` pill with white text and a check icon ("Featured"); chip hover `#d9d9d9`, pressed `#cccac8` (`--color-alias-chip-*`).

### Notifications
Error alert measured on the page: pink `#fddedb` fill, red warning icon, 14px charcoal copy.
Success/warning/info backgrounds come from `--color-alias-notification-*` (`#e0f8d9`, `#ffe6b0`, `#bff4f3`).

### Footer
**`footer`** — white, `#323232` 16px links in columns ("About us", …), muted `#666564` legal line, red logo, "Back to top" link.

## Design System Architecture

Qantas does **not** publish a public web design system site, token package or brand portal. What
exists officially:
- The Qantas UX and product design team's GitHub org [github.com/qantas-design](https://github.com/qantas-design) (archived July 2025) with three repos: [design-kit-apps](https://github.com/qantas-design/design-kit-apps) — "A design kit of the Qantas Design System for native apps (iOS and Android) including typography, colour palettes, elements, components, iconography, layouts and page templates"; [qantas-typography](https://github.com/qantas-design/qantas-typography) — "Qantas' custom typeface, Ciutadella"; and [qantas-iconography](https://github.com/qantas-design/qantas-iconography) — "Icon library used in Qantas websites, apps, emails and all other digital applications". The READMEs contain no token values.
- The 2016 Houston Group identity with Ciutadella ([Fonts In Use](https://fontsinuse.com/uses/15452/qantas-airways-2016-rebrand)), since replaced on the web by Qantas Sans.

Searches for a public Qantas design-system site, `@qantas` npm token packages and brand guidelines
returned only third-party pages, which are not used. Everything below is the de-facto system
measured from `:root` on https://www.qantas.com/en-us.

**Token architecture.** ~400 custom properties in three explicit tiers:
- `base` (primitives): `--color-base-neutral-30: #b2b1af`, `--color-base-green-05: #e0f8d9`, `--font-size-base-56: 3.5rem`, `--border-radius-base-100-0: 800px`, `--spacing-base-1-0: 0.5rem`.
- `alias` (semantic): `--color-alias-brand-primary: #df0000`, `--color-alias-interactive-focus-on-light: #237271`, `--color-alias-surface-background-tertiary: #e5e3e1`, `--color-alias-text-primary-on-dark: #ffffff`.
- `comp` (component): `--color-comp-web-button-primary-pressed-background: #99110b`, `--color-comp-web-button-secondary-hover-background: #fddedb`, `--border-width-comp-web-text-field-focused: 2px`.
Naming is `--{category}-{tier}-{platform?}-{concept}-{variant}-{state}-{property}`; platform segments `web` / `app` separate web and native scales (`--font-size-base-web-28`, `--font-size-base-app-26`).

**Theming.** Light only on the web; no dark mode variables were found. Context theming is done by
"on-media-light / on-media-dark / on-primary" token families (e.g.
`--color-comp-web-button-on-media-dark-hover-border`) rather than a theme switch. Loyalty tiers form
a sub-theme (`--color-alias-tiers-qff-status-*`).

**Type & spacing.** 8px base (0.5rem); spacing tokens are numbered in hundredths of the base
(`--spacing-alias-fixed-1200: 6rem` = 96px). Responsive tokens encode their range in the name
(`--spacing-alias-responsive-200-to-400`, `--border-radius-alias-responsive-500-to-2800-xl: 120px`).
Type styles are composite `font` shorthands split by breakpoint (`--alias-web-sm-*`, `--alias-web-md-*`,
`--alias-web-lg-*`, `--alias-web-global-*`).

**Component model.** Comp tokens reveal the inventory: button (primary, secondary, secondary-muted,
supplementary, tertiary, on-media-light/dark — each with enabled/hover/pressed/disabled), text-field
(incl. on-primary, focused, error), notification bar and notification feature (info/success/warning/
error/critical), badge, chip, accordion, teaser (lg-teaser), page indicator, counter, charts, ratings.

**Accessibility.** Teal `#237271` focus ring (3px inset) distinct from brand red; disabled foreground
`#00000073`; skip links ("Skip to main content", "Skip to book a flight") are the first elements on
the page; the visual h1 is preceded by a visually hidden h1 "Qantas United States".

**Delivery.** Tokens ship as CSS custom properties in the site bundle; native apps had a separate
kit (above). No public npm, Figma community file or versioning is published.

## Do's and Don'ts

### Do
- Use `#df0000` for every primary action and nothing decorative except the feature block and logo.
- Darken to `#bc0b07` on hover and `#99110b` on press — never lighten red.
- Set display headings in Qantas Sans 300 with `-0.496px` tracking; set buttons in 700.
- Fill form fields with warm grey `#f3f2f1` and give them 70px height for the booking search.
- Use 800px pills for buttons, except the 24px-radius "Search flights" button.
- Give one corner of a feature card a 64px radius and keep the other three at 8px.
- Keep text charcoal `#323232`, muted copy `#666564`.
- Use teal `#237271` for focus.

### Don't
- Don't use pure black text or cool greys — the neutrals are warm.
- Don't introduce a second saturated brand colour; teal is functional (focus/selection) only.
- Don't add drop shadows to cards; only the header and menus cast shadows.
- Don't bold large headings — 300 is the house style.
- Don't use red for error text; errors use `#99110b`/`#bc0b07` with pink `#fddedb` fills, kept distinct from CTA red by context.
- Don't round every corner of a feature card equally.

## Responsive Behavior

### Breakpoints
Token names expose `sm`, `md`, `lg` and `global` tiers; the measured body max-width is 1280px.

| Viewport | Measured change |
|---|---|
| 1280px desktop | Header 128px; "Plan your trip" 56px/300 |
| 390px mobile | Header 48px; heading 36px/300 (47.008px line height); "Search flights" button stretches to 358px wide, still 48px tall |

### Touch Targets
Primary buttons are 48px tall on both desktop and mobile; search fields are 70px; muted/dark pills 40px.

### Collapsing Strategy
- Mobile font sizes measured: 14px, 18px, 16px, 32px, 36px, 24px.
- Body copy keeps 14px/20px on mobile.

### Image Behavior
Photography crops to fill its 8px-radius frame; on mobile images go full width above or below the text block.

## Iteration Guide

1. Start with the booking search: white canvas, 56px/300 heading, warm-grey 70px fields, red 24px-radius button.
2. Use `{colors.primary}` only for actions; check that every other surface is white, `#f3f2f1` or `#e5e3e1`.
3. Reference the site's own token names in comments (`--color-alias-brand-primary`) when generating CSS.
4. Pair every red feature card with a photo and apply the 64px tail corner on the outer edge.
5. Verify hover states: red → `#bc0b07`; muted → `#e5e3e1` fill.
6. For loyalty UI, pull colours only from the `qff-status` tier tokens.
7. Re-run `node web/scripts/verify-designs.mjs --slug=qantas` after edits.
