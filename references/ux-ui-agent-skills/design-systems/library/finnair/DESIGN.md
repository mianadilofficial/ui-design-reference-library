---
version: alpha
name: Finnair
category: "Airlines"
description: "Finnair's web system — Nordic Blue #0c0243 as the single ink and outline colour on white, an accent blue #3772de (hover #2f62c0) reserved for filled primary buttons, proprietary FinnairHeadlinePro (variable 300–900, headings at 400/450/500) over FinnairText (400/500/700), 40px-radius pill buttons, 8px cards with whisper-soft 3% layered shadows, warm beige #edebe6 and pale blue #e1eafa surfaces, all expressed as semantic CSS variables like --surface-accent and --text-icon-primary."

colors:
  primary: "#3772de"
  primary-hover: "#2f62c0"
  primary-active: "#5f8ee5"
  nordic-blue: "#0c0243"
  nordic-blue-hover: "#0a1e60"
  canvas: "#ffffff"
  background-primary: "#f6f5f3"
  surface-secondary: "#e1eafa"
  surface-tertiary: "#edebe6"
  surface-primary-hover: "#f0f4fd"
  surface-static-dark: "#211e2d"
  surface-disabled: "#e6e6e8"
  ink: "#0c0243"
  ink-secondary: "#6b688c"
  ink-disabled: "#9c99a3"
  on-primary: "#ffffff"
  border-primary: "#e2ded6"
  border-secondary: "#9ebbef"
  border-formfields: "#84808c"
  border-disabled: "#b5b3ba"
  success: "#0f8f52"
  success-background: "#f4fcf7"
  success-tag: "#0a6e40"
  error: "#c92526"
  error-background: "#fef6f5"
  warning: "#e9a801"
  warning-background: "#fffbef"
  warning-tag: "#f1cd73"
  tier-silver: "#caccd3"
  tier-gold: "#ecc679"
  tier-platinum: "#2b2e3e"
  tier-lumo: "#01313b"

typography:
  headline-xl:
    fontFamily: "finnairheadlinepro, -apple-system, \"Segoe UI\", roboto, helvetica, arial, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
  headline-xl-mobile:
    fontFamily: "finnairheadlinepro, -apple-system, \"Segoe UI\", roboto, helvetica, arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
  headline-lg:
    fontFamily: "finnairheadlinepro, -apple-system, \"Segoe UI\", roboto, helvetica, arial, sans-serif"
    fontSize: 32px
    fontWeight: 450
    lineHeight: 40px
  headline-lg-mobile:
    fontFamily: "finnairheadlinepro, -apple-system, \"Segoe UI\", roboto, helvetica, arial, sans-serif"
    fontSize: 24px
    fontWeight: 450
    lineHeight: 32px
  headline-md:
    fontFamily: "finnairheadlinepro, -apple-system, \"Segoe UI\", roboto, helvetica, arial, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
  body-root:
    fontFamily: "finnairtext, -apple-system, \"Segoe UI\", roboto, helvetica, arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
  body:
    fontFamily: "finnairtext, -apple-system, \"Segoe UI\", roboto, helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-medium:
    fontFamily: "finnairtext, -apple-system, \"Segoe UI\", roboto, helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  body-bold:
    fontFamily: "finnairtext, -apple-system, \"Segoe UI\", roboto, helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  small:
    fontFamily: "finnairtext, -apple-system, \"Segoe UI\", roboto, helvetica, arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
  button-lg:
    fontFamily: "finnairtext, -apple-system, \"Segoe UI\", roboto, helvetica, arial, sans-serif"
    fontSize: 20px
    fontWeight: 400

rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 16px
  xl: 24px
  button-link: 32px
  button: 40px
  circle: 360px

spacing:
  xxs: 4px
  xs: 6px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 20px
  xxl: 24px
  xxxl: 32px
  section: 40px
  section-lg: 56px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    borderColor: "{colors.primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.button}"
    padding: 10px 16px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    borderColor: "{colors.primary-hover}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.button}"
    padding: 10px 16px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nordic-blue}"
    borderColor: "{colors.nordic-blue}"
    typography: "{typography.body-medium}"
    rounded: "{rounded.button}"
    height: 40px
  button-secondary-hover:
    backgroundColor: "{colors.surface-primary-hover}"
    textColor: "{colors.nordic-blue}"
    borderColor: "{colors.nordic-blue}"
    rounded: "{rounded.button}"
    height: 40px
  button-secondary-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nordic-blue}"
    borderColor: "{colors.nordic-blue}"
    typography: "{typography.body-bold}"
    rounded: "{rounded.button-link}"
    padding: 6px 12px
    height: 40px
  button-ghost:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nordic-blue}"
    typography: "{typography.body-medium}"
    rounded: "{rounded.button}"
    padding: 6px 12px
    height: 40px
  button-ghost-hover:
    backgroundColor: "{colors.surface-primary-hover}"
    textColor: "{colors.nordic-blue}"
    rounded: "{rounded.button}"
    height: 40px
  chat-launcher:
    backgroundColor: "{colors.nordic-blue}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-medium}"
    rounded: 20px 0px 0px 20px
    padding: 8px 12px
    height: 40px
  chat-launcher-hover:
    backgroundColor: "{colors.nordic-blue-hover}"
    textColor: "{colors.on-primary}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.border-formfields}"
    typography: "{typography.body-medium}"
    rounded: "{rounded.md}"
    padding: 12px
    height: 50px
  card-content:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 0px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nordic-blue}"
    typography: "{typography.body-medium}"
    height: 144px
  nav-link-hover:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.body-medium}"
  link:
    textColor: "{colors.nordic-blue}"
    typography: "{typography.body-bold}"
  footer:
    backgroundColor: "{colors.surface-tertiary}"
    textColor: "{colors.nordic-blue}"
    typography: "{typography.body}"
---

## Overview

Finnair's site is calm, cool and almost monochrome. The US homepage capture shows a white header
with the italic FINNAIR wordmark and oneworld badge, a round-cornered hero photograph of two people
laughing in golden-hour light, and — floating over the bottom of that photo — a frosted, translucent
white booking panel titled "Where to next?" with tabs (Flights · Award flight · Hotels · Car rental)
and outlined fields. Beneath it: an icon row of service links, "In the spotlight" content cards,
an 8-up grid of "Most searched destinations" with prices, and "News picks".

Colour is used with Nordic restraint. **Nordic Blue `#0c0243`** — a blue so deep it reads as ink —
is the text colour, the outline colour of every secondary button, the chat launcher fill and the
logo. Brighter **accent blue `#3772de`** (`--surface-accent`) appears only on filled primary
buttons ("Start check-in", the cookie "Allow all cookies"). On the homepage there is no filled
button at all: every CTA ("Browse the shop", "Learn more", "Select dates") is a white pill with a
2px Nordic Blue outline. Surfaces add a warm beige `#edebe6` and a pale sky `#e1eafa`.

Type is a two-family system: **FinnairHeadlinePro** (a variable font served 300–900) for headings
at unusual intermediate weights — 400 for the page title, 450 for section headings, 500 for card
titles — and **FinnairText** for everything else at 400/500/700. Headings are never heavy; the
brand's voice is quiet and friendly ("Better as a member", "Where to next?").

**Key Characteristics:**
- Nordic Blue `#0c0243` as ink (2,596 of ~2,680 weighted characters on the homepage).
- One accent: `#3772de` filled pills, hover `#2f62c0`, active `#5f8ee5`.
- Outline-first CTAs: white pill, 2px `#0c0243` border, hover wash `#f0f4fd`.
- 40px-radius pills for buttons; 8px radius for cards; 24px for large hero media.
- Variable headline weights 400 / 450 / 500 — never bold display.
- Ultra-soft elevation: three stacked 3%-black shadows on cards.
- Semantic, role-named CSS variables (`--surface-*`, `--text-icon-*`, `--border-*`, `--signal-*`, `--tier-*`).

## Colors

> Sources: `web/data/extracted/finnair.json` (homepage https://www.finnair.com/us-en), `finnair--check-in.json` (https://www.finnair.com/us-en/check-in), `finnair--plus.json` (https://www.finnair.com/us-en/finnair-plus). Variable names are Finnair's own `:root` tokens.

### Brand & Accent
- **Accent Blue** (`{colors.primary}` — `#3772de`, `--surface-accent`, `--border-accent`): filled primary buttons; also the information/promotion signal (`--signal-information-notification-border-icon`, `--signal-promotion-tag-bg`) and the 4px inset tab indicator measured on the Plus page (`rgb(55,114,222) 0 -4px 0 0 inset`).
- **Accent Hover** (`{colors.primary-hover}` — `#2f62c0`, `--surface-accent-hover`, also `--text-icon-accent`): measured hover of "Start check-in".
- **Accent Active** (`{colors.primary-active}` — `#5f8ee5`, `--surface-accent-active`).
- **Nordic Blue** (`{colors.nordic-blue}` — `#0c0243`, `--surface-contrast`, `--text-icon-primary`, `--border-contrast`): ink, outlines, chat launcher. The CSS fallbacks reference a primitive `--nordic-blue-900`.
- **Nordic Blue Hover** (`{colors.nordic-blue-hover}` — `#0a1e60`, `--surface-contrast-hover`): measured hover of the chat launcher.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`, `--surface-primary`, `--bg-landing`).
- **Background Primary** (`{colors.background-primary}` — `#f6f5f3`, `--bg-primary`): warm off-white app background.
- **Surface Secondary** (`{colors.surface-secondary}` — `#e1eafa`, `--surface-secondary`, `--surface-primary-active`): pale blue; second-largest coloured area on the homepage (638); Feedback tab fill.
- **Surface Tertiary** (`{colors.surface-tertiary}` — `#edebe6`, `--surface-tertiary`): warm beige, the largest non-white area on both home and Plus pages (1,259 each) — the footer band.
- **Hover Wash** (`{colors.surface-primary-hover}` — `#f0f4fd`, `--surface-primary-hover`): measured hover fill of outline and ghost buttons.
- **Static Dark** (`{colors.surface-static-dark}` — `#211e2d`).
- **Disabled** (`{colors.surface-disabled}` — `#e6e6e8`, `--surface-disabled-bg`).

### Text
- **Ink** (`{colors.ink}` — `#0c0243`).
- **Secondary** (`{colors.ink-secondary}` — `#6b688c`, `--text-icon-secondary`, `--text-icon-primary-hover`): measured hover colour of main nav links (Book · Manage · Check in).
- **Disabled text** (`{colors.ink-disabled}` — `#9c99a3`, `--text-icon-disabled-text`): placeholder "Add destination".
- **On Primary** (`{colors.on-primary}` — `#ffffff`, `--text-icon-reversed`).

### Borders
- **Border Primary** (`{colors.border-primary}` — `#e2ded6`): hairlines between list items and cards.
- **Border Secondary** (`{colors.border-secondary}` — `#9ebbef`).
- **Form fields** (`{colors.border-formfields}` — `#84808c`): 1px input outline (measured on check-in).
- **Disabled** (`{colors.border-disabled}` — `#b5b3ba`).

### Semantic (`--signal-*`)
- Success `#0f8f52` (border/icon), background `#f4fcf7`, tag `#0a6e40`.
- Error `#c92526` (border/icon, form text, tag), background `#fef6f5`.
- Warning `#e9a801` (border/icon), background `#fffbef`, tag `#f1cd73`.
- Information uses the accent blue `#3772de` on `#e1eafa`.

### Loyalty tiers (`--tier-*`)
Basic `#e1eafa`, Silver `#caccd3`, Gold `#ecc679`, Platinum `#2b2e3e`, Lumo `#01313b` — for Finnair Plus tier cards only.

## Typography

### Font Family
- **FinnairHeadlinePro** — loaded as `FinnairHeadlinePro 300 900` (a variable weight range); computed family string `finnairheadlinepro, -apple-system, "Segoe UI", roboto, helvetica, arial, sans-serif`. Used for h1–h3 and prices.
- **FinnairText** — loaded at 400, 500, 700; computed `finnairtext, …`. Used for body, buttons, nav, footer.
- A third face, **FinnairSans**, is declared via `@font-face` in the CSS corpus. Finnair's design partner SEK describes "Finnair Sans" as "a digitally optimised, functional typeface built on the idea of a journey. Rounded letter shapes and aerodynamic curves give Finnair Sans an uplifting sense of optimism" ([SEK case](https://www.sek.fi/case/finnair-brand-identity-refresh/)).

### Hierarchy

| Token | Family | Size | Weight | Line height | Measured on |
|---|---|---|---|---|---|
| `{typography.headline-xl}` | HeadlinePro | 40px | 400 | 48px | h1 "Where to next?" |
| `{typography.headline-xl-mobile}` | HeadlinePro | 32px | 400 | 40px | h1 at 390px |
| `{typography.headline-lg}` | HeadlinePro | 32px | 450 | 40px | h2 "In the spotlight"; check-in h1 |
| `{typography.headline-lg-mobile}` | HeadlinePro | 24px | 450 | 32px | h2 at 390px |
| `{typography.headline-md}` | HeadlinePro | 24px | 500 | 32px | card titles (h3) |
| `{typography.body-root}` | Text | 20px | 400 | — | `<body>` / footer root size |
| `{typography.body}` | Text | 16px | 400 | 24px | paragraphs (most read size, 1,387) |
| `{typography.body-medium}` | Text | 16px | 500 | 24px | buttons, nav, inputs |
| `{typography.body-bold}` | Text | 16px | 700 | 24px | quick links, inline links |
| `{typography.small}` | Text | 14px | 400 | — | "Round trip from", meta (793) |
| `{typography.button-lg}` | Text | 20px | 400 | — | "Start check-in" primary button |

### Principles
- Variable-weight headlines at **400 / 450 / 500** — the half-step 450 is distinctive; don't round it to 400 or 500.
- Headlines step down 8px per level (40 → 32 → 24) with line height = size + 8px.
- Body is 16/24; emphasis via 500 or 700 in FinnairText, never in the headline face.
- No letter-spacing was measured anywhere: tracking is default.

### Note on Font Substitutes
FinnairHeadlinePro, FinnairText and FinnairSans are proprietary and not distributed. The site's own
fallback stack is `-apple-system, "Segoe UI", roboto, helvetica, arial, sans-serif`; use it as-is.
If a variable substitute is needed to reproduce weight 450, use any variable geometric sans on that
stack with `font-variation-settings` — but the shipped fallback is the system UI font.

## Layout

### Spacing System
- **Measured paddings (home):** 8px (52), 16px (29), 12px (28), 4px (25), 6px (18), 24px (11), 32px, 40px, 56px.
- **Measured gaps:** 8px, 24px, 16px, 20px; Plus page adds 4px and 40px.
- **Tokens:** `{spacing.xxs}` 4 · `{spacing.xs}` 6 · `{spacing.sm}` 8 · `{spacing.md}` 12 · `{spacing.lg}` 16 · `{spacing.xl}` 20 · `{spacing.xxl}` 24 · `{spacing.xxxl}` 32 · `{spacing.section}` 40 · `{spacing.section-lg}` 56.
- Button padding: 6px 12px (40px pills), 10px 16px (48px primary), 8px 12px (chat).

### Grid & Container
- Content is centred in a ~1024px column (the h2 measures 1023px wide) inside a 1280px viewport; the hero image spans nearly the full viewport with small side margins.
- Destination grid: 4 columns × 2 rows of equal cards, ~241px wide each.
- Spotlight: 2 equal cards (~499px).
- News picks: 3 text columns.
- Header heights tokenised: `--app-header-height-laptop: 3.6rem`, `--app-header-height-mobile: 2.4rem`.

### Whitespace Philosophy
Plenty of white between sections; cards are separated by gutters rather than rules. The booking
panel overlaps the hero image, creating the only layered moment on the page.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Page, nav, footer |
| 1 | `color(srgb 0 0 0 / 0.03) 0 2px 4px 3px, … 0 1px 2px 0, … 0 1px 1px 0` | Content and destination cards (11 occurrences) |
| 2 | `color(srgb 0 0 0 / 0.08) 0 2px 4px -2px, … 0 1px 2px -1px, … 0 1px 1px -1px` | Small raised controls |
| Float | `rgba(18, 18, 18, 0.3) 0 4px 4px 0` | Chat launcher |
| Frost | translucent white panel (`--surface-frost: #FFFFFF`) | Booking panel over the hero |

Shadows are built in CSS as `color-mix(in srgb, var(--elevation-primary, #000) 3%, transparent)`,
so elevation is a single tokenised colour (`--elevation-primary: #000000`) mixed at 3% or 8%.
Focus/selected uses an inset ring `inset 0 0 .1rem .05rem #0c0243, 0 0 .1rem .05rem #0c0243`.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 2px | tiny indicators |
| `{rounded.sm}` | 4px | Feedback side tab (`4px 4px 0 0`) |
| `{rounded.md}` | 8px | cards, inputs (most frequent on home) |
| `{rounded.lg}` | 16px | Plus page panels |
| `{rounded.xl}` | 24px | hero media / booking panel |
| `{rounded.button-link}` | 32px | link-buttons on Finnair Plus |
| `{rounded.button}` | 40px | all pill buttons |
| `{rounded.circle}` | 360px | icon buttons (swap control) |

The chat launcher is a half-pill: `20px 0px 0px 20px`, docked to the right edge.

### Photography Geometry
Warm, candid people photography (golden hour, smiling travellers) for hero and spotlight; bright,
blue-sky landmark photography for destination cards (Helsinki Cathedral, Big Ben, the Eiffel Tower).
Photos sit flush to the top of cards; the card's 8px radius clips them.

## Components

### Buttons
**`button-primary`** — filled accent pill (measured "Start check-in"): `#3772de` fill and 2px border, white 20px/400 FinnairText, padding 10px 16px, 48px tall, radius 40px. Hover `#2f62c0` (fill and border). The cookie banner's "Allow all cookies" uses the same fill at 40px height with padding 6px 12px.

**`button-secondary`** — the dominant homepage CTA ("Browse the shop", "Learn more", "Select dates", "Join Finnair Plus"): white, 2px `#0c0243` border, `#0c0243` 16px text, 40px tall, radius 40px. Hover fills `#f0f4fd`.

**`button-secondary-link`** — Finnair Plus variant ("Join free of charge", "Log in"): radius 32px, padding 6px 12px, 16px/700, 40px tall; hover `#f0f4fd`.

**`button-ghost`** — header utilities (United States-EN ($), Login, Menu, Search): transparent, 16px/500, padding 6px 12px, radius 40px, 40px tall; hover fills `#f0f4fd`.

**`chat-launcher`** — docked to the right edge: `#0c0243`, white 16px/500 with chat icon, `20px 0 0 20px` radius, `rgba(18,18,18,.3) 0 4px 4px` shadow; hover `#0a1e60`.

### Inputs & Forms
**`text-input`** (check-in form): white, 1px `#84808c` border, 8px radius, padding 12px, 50px tall, 16px/500/24px text in `#0c0243`. Error colour `#c92526` (`--signal-error-form-text-icon`).
The homepage booking fields stack a 14px label ("Trip type", "From") above a 16px/500 value inside an 8px outlined box; a circular swap button sits between From and To.

### Navigation
**`nav`** — 144px white header in two rows: logo + oneworld badge left, ghost utilities right; then Menu (hamburger) · Book · Manage · Check in · Search. Nav links hover to `#6b688c` (measured). The current section ("Book") is shown as a pale-blue pill. Mobile header measures 96px.

**Tabs** — booking tabs (Flights · Award flight · Hotels · Car rental) with an accent underline under the active tab; on Plus the indicator is a 4px inset `#3772de` bottom shadow.

### Cards
**`card-content`** — white, 8px radius, Level 1 triple-3% shadow, no outer padding (photo flush top), text block below with a 24px/500 headline, 16px body and a right-aligned outline pill.
**Destination card** — same shell; city name 16px bold, "Round trip from" 14px, price in a larger headline size ("680 USD"), full-width outline "Select dates" button.

### Popover
"Better as a member" — white floating card with a close "×", 24px/500 title, 14–16px copy and an outline pill; anchored under "Join Finnair Plus".

### Footer
**`footer`** — warm beige `#edebe6` band, Nordic Blue text, columns headed "Customer support" etc.

## Design System Architecture

Finnair publishes **no public design-system documentation, token package or component library**.
Its public GitHub org ([github.com/finnair](https://github.com/finnair)) contains only the
`v-validation` utility, and npm `@finnair/*` packages are validation/path utilities, not UI. The
brand portal at brand.finnair.com now redirects to finnair.com (we could not open its content).
The official brand context comes from Finnair's design partner **SEK**:
[Finnair Brand Identity Refresh](https://www.sek.fi/case/finnair-brand-identity-refresh/) —
"Built Finnair's brand identity based on a 9-element design system. At the heart of the design
concept is a blue line that lives and transforms into typography, illustrations, icons, imagery,
tonality and the soundscape", with "the iconic blue and white colours of Finnair" and the Finnair
Sans typeface. Finnair's own Blue Wings magazine covers its (cabin, not digital) design programme in
[Inside Finnair's epic design transformation](https://www.finnair.com/en/bluewings/travel-experience/inside-finnair-s-epic-design-transformation-2570348).

The web system below is the de-facto one measured on finnair.com.

**Token architecture.** Two tiers are visible:
- *Primitives* referenced only as CSS fallbacks, e.g. `var(--text-icon-primary, var(--nordic-blue-900))`, `var(--border-accent, var(--nordic-blue-900))`.
- *Semantic* tokens on `:root` (64 variables) named by **role-property-state**: `--surface-accent`, `--surface-accent-hover`, `--surface-accent-active`, `--surface-primary-hover`, `--text-icon-primary`, `--text-icon-secondary`, `--text-icon-disabled-text`, `--border-formfields`, `--border-contrast`, `--signal-error-notification-bg`, `--signal-success-tag-bg`, `--tier-gold`, `--elevation-primary`. Text and icon share one token family (`text-icon-*`).
No component-tier variables are exposed.

**Theming.** Light only on finnair.com. The token set has explicit `static-light` / `static-dark` and `reversed` variants (`--surface-static-dark: #211E2D`, `--text-icon-static-light`, `--text-icon-reversed`) for content on dark or photographic surfaces, which is how inverted sections are themed without a mode switch. Loyalty tiers are a token sub-palette (`--tier-*`).

**Type & spacing.** Two families (HeadlinePro for headings, Text for UI); headings at 40/32/24 with +8px line height; body 16/24. Spacing values are multiples of 2 and 4 (4, 6, 8, 12, 16, 20, 24, 32, 40, 56). Several sizes are authored in rem (`3.6rem` header).

**Component model (observed).** Buttons in filled-accent, outline (Nordic Blue), ghost and chat variants, each at 40px or 48px height; booking widget with tabs, outlined fields and swap control; content card; destination card; popover; notifications with success/error/warning/information/promotion signals; tags (`--signal-*-tag-bg`, including a Black Friday tag `--signal-promotion-tag-blackfriday-bg: #000000`); toggle (`--surface-toggle`, `--surface-toggle-hover`); modal overlay (`--surface-modal-overlay: rgba(0,0,0,.5)`).

**Accessibility.** Body ink `#0c0243` on white gives very high contrast; focus/selection uses a Nordic Blue inset+outset ring; skip link ("Skip to main content") present; buttons are 40–48px tall.

**Delivery.** Tokens ship as CSS custom properties in the site bundle with web fonts self-hosted; no public npm, Figma kit or versioning is published.

## Do's and Don'ts

### Do
- Use `#0c0243` for text, outlines and icons; reserve `#3772de` for one filled primary action per view.
- Make most CTAs outline pills: white, 2px Nordic Blue border, 40px radius, hover `#f0f4fd`.
- Set headings in FinnairHeadlinePro at 400/450/500; body in FinnairText 16/24.
- Keep card shadows at the 3% triple-layer level — barely visible.
- Use warm beige `#edebe6` or pale blue `#e1eafa` for bands, never saturated fills.
- Use signal colours only for status (error `#c92526`, success `#0f8f52`, warning `#e9a801`).

### Don't
- Don't use pure black text; ink is Nordic Blue.
- Don't bold headlines to 700.
- Don't use square or 4px-radius buttons; buttons are 40px pills (32px on link-buttons).
- Don't put the accent blue on large backgrounds or decorative elements.
- Don't add heavy drop shadows; only the chat launcher has a visible shadow.
- Don't mix the tier colours into general UI.

## Responsive Behavior

### Breakpoints
Measured at 1280px desktop and 390px mobile.

| Element | Desktop | Mobile |
|---|---|---|
| Header | 144px, two rows | 96px |
| h1 | 40px/400/48px | 32px/400/40px |
| h2 | 32px/450/40px | 24px/450/32px |
| Body | 16px/24px | 16px/24px |

### Touch Targets
Buttons are 40px (secondary/ghost) and 48px (primary); inputs 50px.

### Collapsing Strategy
- Headline sizes drop one step (40 → 32, 32 → 24) on mobile.
- Mobile destination grid and spotlight card layout were not measured.
- Mobile font sizes measured: 16, 14, 20, 24, 18, 32px.
- The booking panel goes full width below the hero image.

### Image Behavior
Hero and card photography crops to fill; the hero keeps its large rounded corners.

## Iteration Guide

1. Start every screen white with Nordic Blue `#0c0243` ink.
2. Choose button variant deliberately: filled `#3772de` once, outline pills everywhere else.
3. Apply FinnairHeadlinePro at 40/400, 32/450, 24/500 — keep the 450.
4. Cards: 8px radius, photo flush top, triple-3% shadow.
5. Hover: outline/ghost → `#f0f4fd`; primary → `#2f62c0`; nav text → `#6b688c`.
6. Name new tokens in Finnair's style: `--surface-*`, `--text-icon-*`, `--border-*`, `--signal-*`.
7. Re-run `node web/scripts/verify-designs.mjs --slug=finnair` after edits.
