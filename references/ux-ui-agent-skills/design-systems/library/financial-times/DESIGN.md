---
version: alpha
name: Financial Times
category: "News & Publishing"
description: "The FT's site sits on its signature paper background #fff1e5 with #33302e body ink and #000000 headlines: financier display VF serif headlines (48px/48px lead at variable weight 397), metric 2 VF sans for standfirsts, nav and labels (16px/24px), claret #990f3d topic kickers, teal #0d7680 links, a slate #262a33 Subscribe button and footer with 2px radius, and FT Pink #fcd0b1 accents — all defined by the Origami o3 token system."

colors:
  primary: "#262a33"
  on-primary: "#ffffff"
  canvas: "#fff1e5"
  ink: "#33302e"
  ink-headline: "#000000"
  ink-muted: "#66605c"
  ink-secondary: "#4d4845"
  ink-inverse-muted: "#a8aaad"
  claret: "#990f3d"
  teal: "#0d7680"
  teal-dark: "#0a5e66"
  link-hover: "#08474d"
  ft-pink: "#fcd0b1"
  wheat: "#f2dfce"
  paper-light: "#fff7ef"
  black-5: "#f2e5da"
  black-10: "#e6d9ce"
  black-20: "#ccc1b7"
  crimson: "#cc0000"
  velvet: "#593380"
  oxford: "#0f5499"
  market-down: "#ff767c"
  market-up: "#96cc28"
  white: "#ffffff"
  primary-hover: "#515257"
  inverse-hover: "#c9cacc"

typography:
  headline-lead:
    fontFamily: "\"financier display VF\", serif"
    fontSize: 48px
    fontWeight: 397
    lineHeight: 48px
  headline-lead-mobile:
    fontFamily: "\"financier display VF\", serif"
    fontSize: 32px
    fontWeight: 397
    lineHeight: 32px
  headline-feature:
    fontFamily: "\"financier display VF\", serif"
    fontSize: 32px
    fontWeight: 242
    lineHeight: 32px
  headline-series:
    fontFamily: "\"financier display VF\", serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 32px
  promo-heading:
    fontFamily: "FinancierDisplayWeb, serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
  headline-md:
    fontFamily: "\"financier display VF\", serif"
    fontSize: 24px
    fontWeight: 397
    lineHeight: 28px
  headline-sm:
    fontFamily: "\"financier display VF\", serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  headline-xs:
    fontFamily: "\"financier display VF\", serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20px
  section-title:
    fontFamily: "\"metric 2 VF\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: 2px
  kicker:
    fontFamily: "\"metric 2 VF\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  standfirst:
    fontFamily: "\"metric 2 VF\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"metric 2 VF\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  rail-heading:
    fontFamily: "\"metric 2 VF\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  utility:
    fontFamily: "\"metric 2 VF\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  nav-link:
    fontFamily: "\"metric 2 VF\", sans-serif"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 20px
  button-sm:
    fontFamily: "\"metric 2 VF\", sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 16px
  timestamp:
    fontFamily: "\"metric 2 VF\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px

rounded:
  none: 0px
  sm: 2px
  md: 4px
  circle: 50%

spacing:
  4xs: 8px
  3xs: 12px
  2xs: 16px
  xs: 20px
  m: 32px
  l: 40px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.sm}"
    padding: 0px 8px
    height: 28px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-inverse:
    backgroundColor: "{colors.white}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 44px
  button-inverse-hover:
    backgroundColor: "{colors.inverse-hover}"
  skip-link:
    backgroundColor: "{colors.velvet}"
    textColor: "{colors.white}"
    typography: "{typography.utility}"
    rounded: "{rounded.none}"
    padding: 7px 14px
    height: 34px
  link:
    textColor: "{colors.teal}"
    typography: "{typography.standfirst}"
  link-hover:
    textColor: "{colors.link-hover}"
  kicker-link:
    textColor: "{colors.claret}"
    typography: "{typography.kicker}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    textTransform: uppercase
  nav-link-active:
    textColor: "{colors.teal-dark}"
  markets-ticker:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.white}"
    typography: "{typography.button-sm}"
  promo-overlay:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.white}"
    typography: "{typography.promo-heading}"
  card-feature:
    backgroundColor: "{colors.wheat}"
    textColor: "{colors.ink-headline}"
    typography: "{typography.headline-feature}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.white}"
    typography: "{typography.utility}"
---

## Overview

The Financial Times is instantly recognisable by its paper: the whole page sits on salmon-pink `{colors.canvas}` (#fff1e5), the web translation of the pink newsprint — Origami names it `--o3-color-palette-paper` and maps it to `--o3-color-use-case-page-background`.

At the top a slate `{colors.primary}` (#262a33) markets ticker runs across the page (S&P 500, Shanghai, FTSE 100, Euro/Dollar, Brent Crude Oil) with red and green boxed percentage chips. Below, the masthead centres the "FINANCIAL TIMES" serif wordmark, with a hamburger and search on the left and a small slate **Subscribe** button plus "Sign In" on the right. A row of uppercase sans section links (HOME, WORLD, US, COMPANIES, TECH, MARKETS, CLIMATE, OPINION, LEX, WORK & CAREERS, LIFE & ARTS, HOW TO SPEND IT, STOCKS GAME) sits between hairlines, the active item in teal with a teal underline bar.

The homepage is a dense newspaper grid. The lead story has a claret topic kicker ("Artificial intelligence"), a big black **financier display** headline (`{typography.headline-lead}` 48px/48px) and a grey sans standfirst; a large photograph fills the centre column with a second story on a tinted panel below it; the right "Editor's picks" rail mixes thumbnails, quotation-mark opinion headlines with round author photos, and an "EXCLUSIVE" label. Vertical hairlines separate columns and dotted rules separate bands. A slate promotional overlay ("You've read the FT. Now go further.") with a short green underline bar and a white "View offers" button floats at the bottom left.

**Key Characteristics:**
- Paper `{colors.canvas}` #fff1e5 background everywhere; slate #262a33 for the ticker, Subscribe, overlays and footer.
- Two families from Origami: **financier display VF** (serif headlines, variable weights 242/397/400/700) and **metric 2 VF** (sans for everything else).
- Headlines in #000000; body/UI text in o3 body-text #33302e; standfirsts in #66605c.
- Topic kickers in claret #990f3d; links and active nav in teal (#0d7680 / #0a5e66).
- Square-ish shapes: 2px radius on buttons, 0 elsewhere, circles for author headshots.
- No shadows on editorial content; structure from hairlines and tinted panels (wheat, FT Pink).

## Colors

> Sources: measured on https://www.ft.com/ (desktop 1280px, plus a consent-accepted probe) and the Origami `@financial-times/o3-foundation` core-brand tokens (v3.14.0).

### Brand palette (o3 core)
- **Paper** (`{colors.canvas}` — #fff1e5): `o3-color-palette-paper` = `o3-color-use-case-page-background`. The page.
- **Slate** (`{colors.primary}` — #262a33): `o3-color-palette-slate` = `o3-color-use-case-page-inverse-background`. Subscribe button, ticker, promo overlay, footer.
- **Claret** (`{colors.claret}` — #990f3d): `o3-color-palette-claret`. Topic kickers ("Artificial intelligence", "US banks", "Editor's picks").
- **Teal** (`{colors.teal}` — #0d7680): `o3-color-palette-teal` = `o3-color-use-case-link-text`. Links.
- **Teal 40** (`{colors.teal-dark}` — #0a5e66): `o3-color-palette-teal-40`. Active nav item.
- **Link Hover** (`{colors.link-hover}` — #08474d): `o3-color-use-case-link-text-hover`.
- **FT Pink** (`{colors.ft-pink}` — #fcd0b1): `o3-color-palette-ft-pink`. Borders and label tints.
- **Wheat** (`{colors.wheat}` — #f2dfce): `o3-color-palette-wheat`. Feature-story panels.
- **Velvet** (`{colors.velvet}` — #593380): `o3-color-palette-velvet`. Skip-link background.
- **Crimson** (`{colors.crimson}` — #cc0000): `o3-color-palette-crimson`. "UPDATED" labels.
- **Oxford** (`{colors.oxford}` — #0f5499): `o3-color-palette-oxford` (present in CSS).

### Tints (o3 "black-N" mixes on paper)
- **Black 5** #f2e5da, **Black 10** #e6d9ce, **Black 20** #ccc1b7 — `o3-color-palette-black-5/10/20`, used for rules and borders.
- **Paper Light** (`{colors.paper-light}` — #fff7ef): a lighter paper panel (third-largest measured background).

### Text
- **Ink** (`{colors.ink}` — #33302e): `o3-color-use-case-body-text` / `o3-color-palette-black-80`. Nav, utility text, section titles.
- **Ink Headline** (`{colors.ink-headline}` — #000000): Headlines — the most-read color by characters.
- **Ink Muted** (`{colors.ink-muted}` — #66605c): `o3-color-palette-black-60`. Standfirsts and timestamps.
- **Ink Secondary** (`{colors.ink-secondary}` — #4d4845): Secondary paragraphs on the article page.
- **Inverse Muted** (`{colors.ink-inverse-muted}` — #a8aaad): Footer secondary text.

### Markets
- **Down** (`{colors.market-down}` — #ff767c) and **Up** (`{colors.market-up}` — #96cc28; = `o3-color-palette-wasabi`): ticker percentage chips (text + 1px border).

## Typography

### Font Family
- **financier display VF** — variable serif (served weight range 200–800), stack `"financier display VF", serif`; `o3-font-family-financier-display`. The most-used family by characters.
- **metric 2 VF** — variable sans (300–800), stack `"metric 2 VF", sans-serif`; `o3-font-family-metric`.
- **FinancierDisplayWeb** — the static Financier cut used by the promo overlay heading. The o3-foundation README says it "defines two @font-face-s… `Metric2-VF`… used for all brands… `FinancierDisplayWeb`… used by core brand only".
- `o3-type-body-content-*` tokens specify **Georgia** 1.25rem for article body content in the core brand.

### Hierarchy (measured)

| Token | Family | Size / Line | Weight | Tracking | Use |
|---|---|---|---|---|---|
| `{typography.headline-lead}` | financier display VF | 48px / 48px | 397 | normal | Lead story |
| `{typography.headline-lead-mobile}` | financier display VF | 32px / 32px | 397 | normal | Lead story at 390px |
| `{typography.headline-feature}` | financier display VF | 32px / 32px | 242 | normal | Wheat-panel feature headline |
| `{typography.headline-series}` | financier display VF | 32px / 32px | 700 | normal | Series prefix ("The Big Read.") |
| `{typography.promo-heading}` | FinancierDisplayWeb | 32px / 32px | 400 | normal | Overlay heading (the page h1) |
| `{typography.headline-md}` | financier display VF | 24px / 28px | 397 | normal | Rail headlines |
| `{typography.headline-sm}` | financier display VF | 20px / 24px | 400 | normal | Standard promos |
| `{typography.headline-xs}` | financier display VF | 18px / 20px | 400 | normal | Most-read list |
| `{typography.section-title}` | metric 2 VF | 16px / 24px | 700 | 2px | "TOP STORIES" (uppercase) |
| `{typography.kicker}` | metric 2 VF | 16px / 24px | 600 | normal | Claret topic kickers |
| `{typography.standfirst}` | metric 2 VF | 16px / 24px | 400 | normal | Standfirsts, author names |
| `{typography.button}` | metric 2 VF | 16px / 24px | 700 | normal | "View offers" / "Get the why" |
| `{typography.rail-heading}` | metric 2 VF | 16px / 24px | 500 | normal | "Most read" |
| `{typography.utility}` | metric 2 VF | 14px / 20px | 400 | normal | Sign In, labels, footer |
| `{typography.nav-link}` | metric 2 VF | 12px / 20px | 600 | normal | Section nav (uppercase) |
| `{typography.button-sm}` | metric 2 VF | 12px / 16px | 700 | normal | Subscribe, ticker |
| `{typography.timestamp}` | metric 2 VF | 12px / 16px | 400 | normal | "2 HOURS AGO", "UPDATED" (uppercase) |

### Official type scale (o3 core)
`o3-type-display-lg/md/sm` financier 800 at 3/2.5/2rem; `o3-type-headline-lg/md/sm` financier 300 at 2.5/2/1.25rem; `o3-type-title-lg/md/sm` metric 700/400/400 at 1.75/1.5/1.25rem; `o3-type-body-lg` 1.125rem, `o3-type-body-base` 1rem, `o3-type-body-highlight` 700 1rem, `o3-type-detail` and `o3-type-label` 0.875rem. Font-size steps `o3-font-size-negative-2` 0.75rem … `o3-font-size-10` 5.25rem. The live homepage uses intermediate variable weights (242, 397) and sizes (48px) that are not single o3 type tokens; live values are declared above and the discrepancy is noted.

### Note on Font Substitutes
Financier Display and Metric are served as FT-hosted variable fonts (`financier display VF`, `metric 2 VF`); no licence or foundry information was opened for this file. The o3 core tokens fall back to `serif` and `sans-serif`, and use Georgia for body content. No other substitute is named officially.

## Layout

### Spacing System
- **o3 spacing tokens:** `--o3-spacing-5xs` 0.25rem (4px), `4xs` 0.5rem (8px), `3xs` 0.75rem (12px), `2xs` 1rem (16px), `xs` 1.25rem (20px), `s` 1.5rem (24px), `m` 2rem (32px), `l` 2.5rem (40px), `xl` 3rem, `2xl` 4rem, `3xl` 5rem, `4xl` 6rem.
- **Measured:** gaps 12px, 16px, 20px; paddings 16px, 8px, 12px, 10px, 32px, 20px. Grid gap root variable `--o3-grid-gap: 16px`.
- **Tokens here:** `{spacing.4xs}` 8px · `{spacing.3xs}` 12px · `{spacing.2xs}` 16px · `{spacing.xs}` 20px · `{spacing.m}` 32px · `{spacing.l}` 40px.

### Grid & Container
- o3 grid: `--o3-grid-template: 0px repeat(var(--o3-grid-columns),1fr) 0px` with named areas `bleed-left content-start … content-end bleed-right`; `--o3-grid-columns: 4` measured at the base breakpoint; column count increases with viewport per the o3-foundation README.
- Homepage at 1280px: three-column top band — lead text column, wide image column, narrow "Editor's picks" rail — divided by vertical hairlines; dotted horizontal rules between bands.
- `--o3-typography-max-line-width: 60ch` limits text measure.

### Whitespace Philosophy
Dense and newspaper-like: tight 12–20px gaps, many stories above the fold, hierarchy carried by headline size and the claret kicker.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat on paper | Editorial content |
| Panel | Wheat #f2dfce / paper-light #fff7ef fill | Feature stories, modules |
| Raised | `rgba(77, 72, 69, 0.15) 0px 1px 4px 0px, rgba(77, 72, 69, 0.2) 0px 8px 14px 0px` | One floating element measured on the homepage |
| Inverse | Slate #262a33 | Ticker, overlay, footer |

### Focus
o3 provides double focus rings for buttons and forms — "an outer black ring and an inner white ring" (README); the CSS corpus contains `0 0 0 4px #4d4845, 0 0 0 8px #fff` and its inverse.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | Images, panels, skip links |
| `{rounded.sm}` | 2px | Buttons (`o3-border-radius-1` 0.125rem) |
| `{rounded.md}` | 4px | `o3-border-radius-2` 0.25rem; measured on small elements |
| `{rounded.circle}` | 50% | Author headshots |

### Graphic devices
- A short green bar under the overlay heading.
- A large double-quote glyph before opinion headlines.
- Boxed ticker chips with 1px colored borders.

## Components

### Buttons

**`button-primary`** — Subscribe.
- Background #262a33, text #ffffff, metric 2 VF 12px/16px 700, padding 0px 8px, height 28px, radius 2px, 1px transparent border.
- **Hover** (`button-primary-hover`, measured): background #515257.

**`button-inverse`** — "View offers" / "Get the why" on slate overlays.
- Background #ffffff, text #262a33, metric 2 VF 16px/24px 700, padding 0px 16px, height 44px, radius 2px.
- **Hover** (`button-inverse-hover`, measured): background #c9cacc.

**`skip-link`** — Velvet #593380, white metric 14px/20px, padding 7px 14px (article) / 8px 16px (homepage), height 34px.

### Links
- **`link`** — teal #0d7680; **hover** #08474d (o3 `link-text-hover`); o3 underline tokens `link-underline` #cfd8d1 → `link-underline-hover` #9ec0bd.
- **`kicker-link`** — claret #990f3d, metric 16px/24px 600.

### Navigation
- **`markets-ticker`** — slate bar, white metric 12px/16px 700 labels, red/green bordered value chips, "Visit Markets Data" right.
- **`nav-link`** — metric 12px/20px 600 uppercase #33302e; **active** teal #0a5e66 with an underline bar.

### Promos
Claret kicker → financier headline (black) → metric standfirst (#66605c) → optional uppercase timestamp; images rectangular; feature promos sit on tinted panels (`card-feature`; wheat #f2dfce is the fourth-largest measured background).

### Editor's picks rail
The right-hand rail on the homepage (as seen in the consent-accepted probe):
1. Claret kicker "Editor's picks" in `{typography.kicker}`.
2. A landscape thumbnail, square corners.
3. An opinion headline in `{typography.headline-md}` preceded by a large double-quote glyph.
4. A circular author headshot (`{rounded.circle}`) beside the author name in `{typography.standfirst}`.
5. A hairline rule, then a second headline in `{typography.headline-md}`.
6. An uppercase "EXCLUSIVE" label in metric 2 VF 14px/20px on a pale pink tint.

### Markets ticker anatomy
- Instrument name in white metric 2 VF 12px/16px 700 ("S&P 500", "FTSE 100", "Euro/Dollar").
- Value chip: the percentage in `{colors.market-down}` (#ff767c) or `{colors.market-up}` (#96cc28) with a 1px border in the same color.
- "Visit Markets Data" link right-aligned in white.
- The bar uses `{colors.primary}` (#262a33) edge to edge above the masthead.

### Promo overlay
**`promo-overlay`** — slate panel, FinancierDisplayWeb 32px/32px heading in white, short green underline bar, metric 16px/24px body, white `button-inverse`.

### Footer
**`footer`** — slate #262a33, white metric 14px/20px text with #a8aaad secondary; "Useful links" columns (Support, Help Centre, Contact Us, About Us, Accessibility…).

## Design System Architecture

The FT builds its products with **Origami**, its in-house design system. The current generation, **o3**, is documented in Storybook at [o3.origami.ft.com](https://o3.origami.ft.com/) (foundations: Color, Editorial Typography, Grid, Icons, Spacing, Typography; components: Button, Footer, Form, Header, SearchBar, SocialSignIn, Tooltip; patterns: Footer, Header, Toolbar) and published to npm as [@financial-times/o3-foundation](https://registry.npmjs.org/@financial-times/o3-foundation) ("Origami foundations with design tokens", homepage registry.origami.ft.com).

### Token architecture
The o3-foundation README defines three colour tiers:
- **Palette** — base colours, e.g. `--o3-color-palette-paper`, `--o3-color-palette-teal`, `--o3-color-palette-claret`, `--o3-color-palette-slate`, `--o3-color-palette-ft-pink`.
- **Tints** — modified palette colours, e.g. `--o3-color-palette-black-10`, `--o3-color-palette-teal-40`.
- **Use case** — semantic tokens, e.g. `--o3-color-use-case-page-background`, `--o3-color-use-case-body-text`, `--o3-color-use-case-link-text-hover`. The README recommends "using a usecase token where one exists".
Type tokens are composite per role (`--o3-type-headline-lg-font-family/-weight/-size`, `--o3-type-body-base-*`), with a numeric scale underneath (`--o3-font-size-0` … `-10`, `--o3-font-lineheight-*`). Icons are `--o3-icon-[name]` custom properties holding SVG `url()`s — 90+ of them are present on ft.com's `:root` (e.g. `--o3-icon-bookmark`, `--o3-icon-search`).

### Theming
Brands, not modes: o3-foundation ships `core` (FT Pink), `internal`, `professional`, `sustainable-views` and `whitelabel` token sets, switched by importing the brand CSS and setting `data-o3-brand="[BRAND]"` on a container ([README](https://registry.npmjs.org/@financial-times/o3-foundation)). An inverse theme flips focus rings and link colours (`link-inverse-text` #ffffff → `link-inverse-text-hover` #d4d4d6).

### Type & spacing systems
- Spacing in t-shirt sizes `5xs` (0.25rem) to `4xl` (6rem); base step 4px.
- Grid via the `o3-grid` class with `bleed-start content-start … content-end bleed-end` areas and a column count that varies by viewport.
- `--o3-typography-max-line-width` (60ch) for readable measure.
- z-index tokens: `--o3-z-index`, `--o3-z-popover`, `--o3-z-navigation-popover`, `--o3-z-message-polite-popover`, `--o3-z-message-service-popover`, `--o3-z-modal-dialog` (README advises avoiding z-index where possible).

### Component model
o3 components (Storybook): Button, Footer, Form, Header, SearchBar, SocialSignIn, Tooltip; typography helpers `o3-typography-ul/ol`, `o3-typography-wrapper`; JSX exports (`List`, `Wrapper`) from `@financial-times/o3-foundation/cjs` / `esm`.

### Accessibility
- Double focus rings (outer black, inner white) on buttons and form elements; single outline on links; `o3-apply-focus-ring` / `o3-revert-focus` helper classes.
- Normalisation "Reducing motion for users who have requested it".
- Measured: skip links ("Accessibility help", "Skip to navigation", "Skip to main content", "Skip to footer") on velvet.

### Delivery
npm `@financial-times/o3-foundation` (CSS custom properties per brand in `css/core.css` etc.; JS tokens as kebab-case default export `esm/tokens/[brand].js` or tree-shakable named exports `esm/tokens/[brand]-named.js`); React/JSX components; a Figma library ("Core - Origami (o3)") linked from the README; guidance on zeroheight.

## Do's and Don'ts

### Do
- Put everything on paper #fff1e5; use slate #262a33 for inverse bands and the Subscribe button.
- Set headlines in financier display (black), everything else in metric 2.
- Use claret for topic kickers and teal for links (hover #08474d).
- Keep buttons nearly square (2px radius).
- Prefer o3 use-case tokens over raw palette values.
- Use hairline and dotted rules to divide a dense grid.
- Use variable financier weights as measured: 397 for news headlines, 242 for light feature headlines, 700 for series prefixes.
- Uppercase small sans labels (nav, timestamps, TOP STORIES) — tracked 2px only on section titles.
- Show market moves with bordered red/green chips on slate.
- Put round author headshots next to opinion pieces.
- Keep standfirsts in #66605c beneath black headlines.
- Use velvet skip links for keyboard users.

### Don't
- Don't use a white page background for FT core-brand surfaces.
- Don't round cards or add drop shadows to editorial promos.
- Don't use teal for kickers or claret for links — roles are fixed.
- Don't set navigation or labels in the serif.
- Don't add new accent colors outside the o3 palette.

## Responsive Behavior

### Measured at 390px
- Lead headline 48px/48px → 32px/32px (weight 397).
- Mobile size distribution: 20px, 16px, 24px, 14px, 11.6667px, 18px, 28px, 12px, 32px, 10px, 21px.
- The masthead Subscribe becomes a plain 12px text link.

### Grid
`--o3-grid-columns: 4` at the measured base; o3 adds columns at wider viewports (exact breakpoints are in the o3 grid guidelines, not reproduced here).

### Touch Targets
Inverse buttons are 44px tall; Subscribe is 28px.

## Iteration Guide

1. Start with `--o3-color-use-case-page-background` (#fff1e5) and `--o3-color-use-case-body-text` (#33302e).
2. Headlines: financier display VF, black, 48 → 32px on mobile.
3. UI and standfirsts: metric 2 VF 16px/24px.
4. Kickers claret, links teal, inverse slate.
5. 2px radii; no shadows on content.
6. Pick the brand via `data-o3-brand="core"` when using o3 CSS.
7. Use `--o3-spacing-*` steps (multiples of 4px) for gaps; measured homepage gaps are 12/16/20px.
8. Add `--o3-icon-*` masks for icons so they inherit text colour.
9. Re-run `node web/scripts/verify-designs.mjs --slug=financial-times`.
