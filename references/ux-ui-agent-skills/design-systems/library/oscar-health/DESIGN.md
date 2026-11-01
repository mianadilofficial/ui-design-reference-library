---
version: alpha
name: Oscar Health
category: "Healthcare & Wellness"
description: "Oscar's site sits on warm paper (#f7f5eb) with dark-brown ink (#1f0d05), pairing Klim's Heldane Display serif (served as 'display', 120px hero, 71px section heads, -1% tracking, italic for emphasis) with Lineto's Lettera Text sans (served as 'sans', 20px/32px body). The action color is Hot Blue #4f50ff on 56px pill buttons (hover #181867); stat tiles use 16px radius in blue, yellow #ffae00, teal #3fa6b4 and red-orange #ff6b3d."

colors:
  primary: "#4f50ff"
  primary-hover: "#181867"
  primary-soft: "#b9baff"
  primary-subtle: "#e8e8ff"
  on-primary: "#ffffff"
  canvas: "#f7f5eb"
  paper: "#f2efe2"
  paper-dark: "#e0dbd7"
  paper-darker: "#ccc3ba"
  surface: "#ffffff"
  media-black: "#000000"
  ink: "#1f0d05"
  ink-body: "#270f06cc"
  ink-muted: "#35160899"
  ink-muted-solid: "#685c53"
  ink-on-hero: "#f7f5eb"
  outline: "#4b1e0d66"
  field: "#1f0d050a"
  yellow: "#ffae00"
  yellow-soft: "#ffdf99"
  teal: "#3fa6b4"
  teal-soft: "#c6e8e8"
  redorange: "#ff6b3d"
  redorange-soft: "#ff9747"
  navy: "#081458"

typography:
  display-hero:
    fontFamily: "display, displayFull, \"Heldane Display\", ui-serif, Georgia, serif"
    fontSize: 120px
    fontWeight: 400
    lineHeight: 120px
    letterSpacing: -1.2px
  display-hero-mobile:
    fontFamily: "display, displayFull, \"Heldane Display\", ui-serif, Georgia, serif"
    fontSize: 51px
    fontWeight: 400
    lineHeight: 51px
    letterSpacing: -0.51px
  display-lg:
    fontFamily: "display, displayFull, \"Heldane Display\", ui-serif, Georgia, serif"
    fontSize: 71px
    fontWeight: 400
    lineHeight: 71px
    letterSpacing: -0.71px
  display-lg-mobile:
    fontFamily: "display, displayFull, \"Heldane Display\", ui-serif, Georgia, serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: -0.4px
  display-md:
    fontFamily: "display, displayFull, \"Heldane Display\", ui-serif, Georgia, serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 39.6px
    letterSpacing: -0.36px
  title-xl:
    fontFamily: "sans, sansFull, \"Lettera Text LL\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 41.6px
    letterSpacing: -0.32px
  title-lg:
    fontFamily: "sans, sansFull, \"Lettera Text LL\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 26px
    fontWeight: 500
    lineHeight: 33.8px
    letterSpacing: -0.26px
  stat-label:
    fontFamily: "sans, sansFull, \"Lettera Text LL\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 38.4px
  title-md:
    fontFamily: "sans, sansFull, \"Lettera Text LL\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 26px
    letterSpacing: -0.2px
  body-lg:
    fontFamily: "sans, sansFull, \"Lettera Text LL\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
  body:
    fontFamily: "sans, sansFull, \"Lettera Text LL\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: "sans, sansFull, \"Lettera Text LL\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
  caption:
    fontFamily: "sans, sansFull, \"Lettera Text LL\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.4px
  mono-label:
    fontFamily: "\"Akkurat Mono LL\", ui-monospace, SFMono-Regular, monospace"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
    letterSpacing: 0.28px
    textTransform: uppercase
  link-sm:
    fontFamily: "sans, sansFull, \"Lettera Text LL\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 13px
    fontWeight: 700
    lineHeight: 16.9px
  legal:
    fontFamily: "sans, sansFull, \"Lettera Text LL\", ui-sans-serif, system-ui, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 18.2px

rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  photo: 14px
  xl: 16px
  pill: 9999px

spacing:
  xxs: 4px
  xs: 8px
  sm: 12px
  md: 16px
  lg: 24px
  btn: 28px
  xl: 32px
  xxl: 40px
  section-sm: 64px
  section: 96px
  section-lg: 120px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 28px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-md:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 28px
    height: 56px
  button-secondary-hover:
    backgroundColor: "{colors.paper-dark}"
  button-outline:
    backgroundColor: "transparent"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 28px
    height: 56px
    border: "1px solid #4b1e0d66"
  text-input:
    backgroundColor: "{colors.field}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
    padding: 0px 16px
    height: 56px
    border: 2px solid transparent
  card-stat:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.display-lg}"
    rounded: "{rounded.xl}"
    padding: 40px
  card-stat-yellow:
    backgroundColor: "{colors.yellow}"
    textColor: "{colors.ink}"
  card-feature:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.title-md}"
    rounded: "{rounded.lg}"
    padding: 32px
  card-tile:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.title-md}"
    rounded: "{rounded.xl}"
    padding: 24px
  photo-card:
    rounded: "{rounded.photo}"
    boxShadow: "rgba(31, 13, 5, 0.18) 0px 24px 48px 0px"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link-sm}"
  nav:
    backgroundColor: "transparent"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    padding: 0px 32px
    height: 64px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    padding: 32px
---

## Overview

Oscar's homepage (`hioscar.com`, page title "Health insurance made for real life") opens on a full-bleed documentary photograph — a multigenerational family laughing on a patterned sofa — with a transparent 64px header (hamburger and search at left, the Hot Blue lowercase "oscar" wordmark centred, "Find a Plan" at right). Across the photo sits the headline **"Health insurance made for real life"** in Heldane Display at 120px, in paper-white `#f7f5eb`, and two 56px pills: a Hot Blue **Shop plans** and a white **Find care**.

Below the hero the page turns to warm paper `{colors.canvas}` (`#f7f5eb`): a fanned trio of tilted photo cards with a soft brown shadow, a centred 20px paragraph in 80% brown ink, then editorial sections — a Hot Blue sans eyebrow ("Oscar by the numbers"), a serif 71px headline with an italic word ("Better healthcare is *actually* possible"), hand-drawn ink illustrations of tiny people, and a 2×2 grid of saturated stat tiles (blue **3M members**, yellow **4.9-star app**, teal **20 states**, red-orange **90%**) with big serif numerals. Further down are white feature cards, a ZIP-code plan finder, articles and a Hot Blue footer.

The voice is warm and human: serif display type, brown rather than black ink, cream paper, candid photography and doodle illustrations, with one confident electric blue for action.

**Key Characteristics:**
- Warm paper canvas `#f7f5eb` and dark-brown ink `#1f0d05` — never pure black on white.
- Heldane Display (served as `display`) at weight 400 for headlines and stat numerals; Lettera Text (served as `sans`) for everything else.
- Display headlines track at -1% of size and use italics for emphasis.
- Hot Blue `#4f50ff` pills for primary actions, hovering to deep `#181867`.
- Saturated stat tiles in a four-colour palette (blue, yellow, teal, red-orange) with 16px corners.
- Candid photography + hand-drawn line illustrations; tilted photo cards with soft brown shadows.
- The footer is Hot Blue, not dark.

## Colors

> Source page: `https://www.hioscar.com/` (extraction + probes). Names in parentheses are the site's own variables.

### Brand & Action
- **Hot Blue** (`{colors.primary}` — `#4f50ff`, `--hotblue` / `--primary`): primary pills, links, eyebrows, the footer, the 3M stat tile.
- **Hot Blue Dark** (`{colors.primary-hover}` — `#181867`, `--hotblue-dark`): measured hover of Shop plans.
- **Hot Blue Soft** (`{colors.primary-soft}` — `#b9baff`, `--hotblue-soft`) and **Subtle** (`{colors.primary-subtle}` — `#e8e8ff`, `--hotblue-subtle`, used as `--accent`): tinted section backgrounds.
- **On Primary** (`{colors.on-primary}` — `#ffffff`, `--neutral-white`).

### Paper (surfaces)
- **Canvas** (`{colors.canvas}` — `#f7f5eb`, `--paper-soft` / `--color-background`): page.
- **Paper** (`{colors.paper}` — `#f2efe2`, `--paper`).
- **Paper Dark** (`{colors.paper-dark}` — `#e0dbd7`, `--paper-dark`): secondary-button hover, `--muted`.
- **Paper Darker** (`{colors.paper-darker}` — `#ccc3ba`, `--paper-darker`): `--border` and `--input`.
- **Surface** (`{colors.surface}` — `#ffffff`): cards, form panel, secondary pill.
- **Media Black** (`{colors.media-black}` — `#000000`): video/media frames measured as a large background area.

### Ink
- **Ink** (`{colors.ink}` — `#1f0d05`, `--neutral-black`): headings and primary text — most-read text colour.
- **Ink Body** (`{colors.ink-body}` — `#270f06cc`): paragraphs (ink at 80%).
- **Ink Muted** (`{colors.ink-muted}` — `#35160899`): meta ("3 min read"), ink at 60%.
- **Muted Solid** (`{colors.ink-muted-solid}` — `#685c53`, `--foreground-muted`).
- **On Hero** (`{colors.ink-on-hero}` — `#f7f5eb`): hero headline over the photo.
- **Outline** (`{colors.outline}` — `#4b1e0d66`): outline-pill border. **Field** (`{colors.field}` — `#1f0d050a`): input fill (ink at 4%).

### Accent palette
- **Yellow** `{colors.yellow}` `#ffae00` (`--yellow`) · **Yellow Soft** `{colors.yellow-soft}` `#ffdf99`.
- **Teal** `{colors.teal}` `#3fa6b4` (`--teal`) · **Teal Soft** `{colors.teal-soft}` `#c6e8e8`.
- **Red-Orange** `{colors.redorange}` `#ff6b3d` (`--redorange`, also `--destructive`) · **Soft** `{colors.redorange-soft}` `#ff9747`.
- **Navy** `{colors.navy}` `#081458` (`--navy`).

Each accent has `-dark / -soft / -subtle` steps in the variables (e.g. `--teal-dark: #05404a`, `--yellow-subtle: #ffefcc`, `--redorange-subtle: #ffdecc`); `--functional-error` maps to `--redorange-dark: #964417`.

## Typography

### Font Families
- **display** → **Heldane Display** (`--font-display: "Heldane Display", ui-serif, Georgia, serif`) by Klim Type Foundry, designed by Kris Sowersby ([Klim](https://klim.co.nz/fonts/heldane-display/)). Served at 400 normal and 400 italic.
- **sans** → **Lettera Text LL** (`--font-sans`), a Lineto typeface ([Lineto](https://lineto.com/typefaces/lettera-text)). Served at 400, 500, 700.
- **Akkurat Mono LL** (`--font-mono`) for small uppercase labels such as "Footnotes".
- The variables also name **Heldane Text** (`--font-text`), served as `text`, not visible on the homepage.

The `@font-face` aliases (`display`, `sans`, `text`, plus `…Full` variants) are what computed styles report, so this file uses them as the first family.

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|---|
| `{typography.display-hero}` | display | 120px | 400 | 120px | -1.2px | hero h1 |
| `{typography.display-hero-mobile}` | display | 51px | 400 | 51px | -0.51px | h1 at 390px |
| `{typography.display-lg}` | display | 71px | 400 | 71px | -0.71px | section h2, stat numerals (`--text-display-lg: 4.4375rem`) |
| `{typography.display-lg-mobile}` | display | 40px | 400 | 40px | -0.4px | h2 at 390px |
| `{typography.display-md}` | display | 36px | 400 | 39.6px | -0.36px | sub-section h2/h4 |
| `{typography.title-xl}` | sans | 32px | 500 | 41.6px | -0.32px | accordion titles ("Individuals & families") |
| `{typography.title-lg}` | sans | 26px | 500 | 33.8px | -0.26px | feature h3 |
| `{typography.stat-label}` | sans | 24px | 400 | 38.4px | — | stat tile label |
| `{typography.title-md}` | sans | 20px | 500 | 26px | -0.2px | card titles, eyebrows (`--text-title-md`) |
| `{typography.body-lg}` | sans | 20px | 400 | 32px | — | lead paragraphs (`--text-body-lg`) |
| `{typography.body}` | sans | 16px | 400 | 25.6px | — | body (`--text-body-md`) |
| `{typography.button}` | sans | 16px | 500 | 16px | — | pills (`--text-button`, weight 500) |
| `{typography.caption}` | sans | 14px | 400 | 22.4px | — | testimonial captions |
| `{typography.mono-label}` | Akkurat Mono | 14px | 400 | 18.2px | 0.28px, uppercase | "Footnotes" |
| `{typography.link-sm}` | sans | 13px | 700 | 16.9px | — | "Log in", "create your account" |
| `{typography.legal}` | sans | 13px | 400 | 18.2px | — | © line, footnote refs |

### Principles
- **Serif for voice, sans for information.** Every headline and every big number is Heldane Display 400; UI and reading text is Lettera Text.
- **Tracking is -1% on display and titles** (`-0.71px` at 71px, `-0.26px` at 26px), 0 on body.
- **Italic for emphasis inside headlines** ("is *actually* possible", "*Spanish speakers*" in Hot Blue).
- **Medium (500) for sans titles and buttons; bold (700) only for small links.**

### Note on Font Substitutes
Heldane Display, Lettera Text and Akkurat Mono are commercial typefaces (Klim, Lineto). The site's own fallbacks are `ui-serif, Georgia, serif` for display and `ui-sans-serif, system-ui, sans-serif` for sans — use those, keeping weight 400 and -1% tracking for display.

## Layout

### Spacing System
- **Base**: 4px (`--spacing: .25rem`).
- **Tokens**: `{spacing.xxs}` 4px · `{spacing.xs}` 8px · `{spacing.sm}` 12px · `{spacing.md}` 16px · `{spacing.lg}` 24px · `{spacing.btn}` 28px · `{spacing.xl}` 32px · `{spacing.xxl}` 40px · `{spacing.section-sm}` 64px · `{spacing.section}` 96px · `{spacing.section-lg}` 120px.
- Sections pad `96px 0` or `120px 32px`; page frame pads `0 32px`; stat tiles pad 40px; feature cards 32px; tiles 24px. Common gaps: 16px, 8px, 12px, 32px, 96px.

### Grid & Container
- 12-column grid (`grid-cols-12 gap-8`) inside a max-width frame with 32px gutters; `--container-narrow: 760px` for centred copy.
- The numbers section is a 2-column split: headline + illustration left, a 2×2 grid of 280px stat tiles right.
- Header breakpoint variables: `--breakpoint-navbar: 1360px` (`-es: 1470px` for Spanish), `--header-height: 120px`.

### Whitespace Philosophy
Editorial and roomy: 96–120px between sections, narrow centred paragraphs, and generous paper around photos and illustrations.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | `{colors.canvas}` paper | page |
| 1 | `{colors.surface}` white, no shadow | cards, form panel |
| Photo | `rgba(31, 13, 5, 0.18) 0px 24px 48px 0px` | tilted photo cards |
| Menu | `rgba(0,0,0,.1) 0 4px 6px -1px, rgba(0,0,0,.1) 0 2px 4px -2px` | small floating UI |

Shadows are warm (tinted with the brown ink) and reserved for photographs.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 4px | text buttons, small chips |
| `{rounded.sm}` | 6px | header text link (`--radius-md`) |
| `{rounded.md}` | 8px | accordion rows (`--radius`) |
| `{rounded.lg}` | 12px | input wrapper, feature cards (`--radius-xl`) |
| `{rounded.photo}` | 14px | photo cards |
| `{rounded.xl}` | 16px | stat tiles, tiles, form panel (`--radius-2xl`) |
| `{rounded.pill}` | 9999px | all pill buttons |

### Imagery
Photo cards are slightly rotated and overlapped (a fanned trio) with 14px corners and the warm photo shadow. Illustrations are black ink line drawings of small figures with spot colour fills.

## Components

### Buttons
**`button-primary`** — Hot Blue pill, white `{typography.button}`, `0 28px`, 56px. **Hover** → `{colors.primary-hover}` `#181867` (measured). Smaller variant **`button-primary-md`**: `0 24px`, 48px ("Get coverage").
**`button-secondary`** — white pill, ink label ("Find care", "Shop Plans" on blue). **Hover** → `#e0dbd7` (measured).
**`button-outline`** — transparent, 1px `#4b1e0d66`, ink label ("Member log in").
Text buttons ("Unlock rewards →") are 16px/500 ink that underline on hover.

### Inputs
**`text-input`** — ZIP field: `{colors.field}` (ink 4%) fill, 2px transparent border, 12px radius, `0 16px`, 56px, `{typography.body}`; sits in a white 16px-radius panel with 32px padding next to a blue pill.

### Cards
**`card-stat`** — 280px tiles, 16px radius, 40px padding: numeral in `{typography.display-lg}`, label in `{typography.stat-label}`. Colours: blue (white text), **`card-stat-yellow`** (ink text), teal, red-orange.
**`card-feature`** — white, 12px radius, 32px padding (rewards / tech / care cards).
**`card-tile`** — white, 16px radius, 24px padding, `{typography.title-md}` title (community resources).
**`photo-card`** — 14px radius, warm 24px/48px shadow.

### Navigation & Footer
**`nav`** — transparent 64px header over the hero, `0 32px`; icon buttons left, wordmark centre, "Find a Plan" (16px/500, 6px radius) right.
**`link`** — `{colors.primary}` 13px/700 inline links ("Log in", "create your account").
**`footer`** — Hot Blue background, white text; headline "Health insurance made for real life", link groups (Shop, Get Coverage, Find …), phone line in 16px/700 ("Mon - Fri, 8 a.m. - 8 p.m."), legal row 13px with bold 13px links that underline on hover.

### State summary (measured)

| Component | Default | Hover |
|---|---|---|
| `button-primary` | `#4f50ff` | `#181867` |
| `button-secondary` | `#ffffff` | `#e0dbd7` |
| text button / legal link | no underline | underline |

### Stat tiles (as rendered)

| Tile | Fill | Text | Numeral | Label |
|---|---|---|---|---|
| Members | `#4f50ff` | white | "3M" | "members¹" |
| App rating | `#ffae00` | ink | "4.9-star" | "app with more than 17,000 reviews²" |
| Coverage | `#3fa6b4` | ink | "20 states" | "States where Oscar Insurance plans are licensed and available" |
| Satisfaction | `#ff6b3d` | ink | "90%" | "of members say Oscar saves them time and money compared to other insurers³" |

Footnote markers are superscripts; the footnotes sit at the page bottom under an Akkurat Mono uppercase "FOOTNOTES" label.

### Voice & Microcopy
Plain-spoken and slightly wry: "Most health plans cover you and call it a day. Oscar goes all in with $0 Oscar Virtual Care (our 24/7 virtual clinic), Care Guides who actually get it, and plans built for real needs." Headlines use everyday words with a twist ("Better healthcare is *actually* possible", "Big rewards that keep costs small", "Tech that actually hits"). Buttons are short and literal ("Shop plans", "Find care", "Get coverage", "Member log in"); help text is conversational ("Already a member? Log in or create your account.").

## Design System Architecture

Oscar publishes **no public design-system documentation** (searches in `SOURCES.json`). External sources used: the typeface foundries — [Klim for Heldane Display](https://klim.co.nz/fonts/heldane-display/) and [Lineto for Lettera Text](https://lineto.com/typefaces/lettera-text) — and [Adweek's coverage of the 2026 rebrand](https://www.adweek.com/brand-marketing/oscar-health-is-rebranding-to-make-health-insurance-feel-human/) (context only: Oscar Health as parent brand of Oscar Insurance, Lucie and Trove Group; the "Made for Real Life" campaign created in-house). Everything below is observed from the variables hioscar.com serves.

### Token architecture (as served)
- **Primitive palette**: named hues with four steps each — `--hotblue` / `--hotblue-dark` / `--hotblue-soft` / `--hotblue-subtle`, the same for `--yellow`, `--teal`, `--redorange`; paper neutrals `--paper-soft`, `--paper`, `--paper-dark`, `--paper-darker`; `--neutral-black: #1f0d05`, `--neutral-white: #fff`, `--navy`.
- **Semantic tier** (shadcn-style role names): `--background`, `--foreground`, `--foreground-muted`, `--primary`, `--primary-foreground`, `--secondary`, `--muted`, `--accent`, `--accent-foreground`, `--destructive`, `--border`, `--input`, `--ring: var(--hotblue)`, `--card`, `--popover`, `--functional-error`.
- **Theme tier** — `--theme-*` variables re-pointable per section: `--theme-accent`, `--theme-subtle`, `--theme-soft`, `--theme-panel`, `--theme-cta`, `--theme-cta-button`, `--theme-cta-button-border`, `--theme-cta-button-hover`, `--theme-subtle-ink: var(--hotblue)`, `--eyebrow-ink`.
- **Type tokens**: `--text-display-lg: 4.4375rem` (71px), `--text-title-md: 1.25rem`, `--text-body-lg: 1.25rem`, `--text-body-md: 1rem`, `--text-button: 1rem` with `--text-button--font-weight: 500`; tracking `--tracking-tight: -.025em` … `--tracking-widest: .1em`.
- **Radius**: `--radius: .5rem` with derived `--radius-sm: calc(.5rem - 4px)`, `--radius-md: calc(.5rem - 2px)`, `--radius-xl: calc(.5rem + 4px)`, `--radius-2xl: 1rem`.
- Variables named `--tw-*` (the Tailwind CSS naming convention) and utility classes such as `py-20 md:py-24`, `bg-paper-soft`, `rounded-xl` appear in the markup.

### Theming
Sections switch palette by re-pointing the `--theme-*` variables (the CTA, panel and accent variables all resolve through them). Only the light paper theme is visible; no dark mode was observed.

### Type & spacing
4px base (`--spacing: .25rem`); display sizes 36 → 71 → 120px; sans titles 20/26/32px; body 16/20px.

### Component model (observed)
Pill buttons (primary, md, secondary, outline), text button, ZIP input + panel, stat tile, feature card, resource tile, photo card stack, accordion rows (8px radius, 48px), article cards, footnotes block, footer.

### Accessibility
Observed: a visually-hidden "Skip to main content" link (`clip-path: inset(50%)`), `--ring` mapped to Hot Blue for focus, 48–56px pill targets.

### Delivery
No public package or Figma kit found.

## Do's and Don'ts

### Do
- Use warm paper `#f7f5eb` as the page and brown `#1f0d05` as ink.
- Set headlines and numerals in Heldane Display 400 with -1% tracking; italicise one word for emphasis.
- Use Hot Blue pills for the primary action and white pills as the partner.
- Use the four-colour stat palette for data moments, each in a 16px-radius tile.
- Pair candid photography with hand-drawn line illustrations.
- Make the footer Hot Blue.

### Don't
- Don't use pure black text or a pure white page.
- Don't bold the serif — display weight is 400.
- Don't use cool greys for borders; use the paper neutrals (`#ccc3ba`) or ink at low alpha.
- Don't add cool drop shadows; shadows are brown-tinted and only on photos.
- Don't use the accent colours for buttons — buttons are Hot Blue, white or outline.

## Responsive Behavior

### Measured at 390px

| Role | Desktop (1280px) | Mobile (390px) |
|---|---|---|
| hero h1 | 120px / 120px | 51px / 51px |
| section h2 | 71px / 71px | 40px / 40px |
| lead paragraph | 20px / 32px | 20px / 32px |
| primary pill | 56px, `0 28px` | 56px, `0 28px` |
| header | 64px | 64px |

### Touch Targets
Pills 56px (48px variant), inputs 56px, accordion rows 48px.

### Collapsing Strategy
The variables define `--breakpoint-navbar: 1360px` (`--breakpoint-navbar-es: 1470px`) and `--breakpoint-countdown: 420px`; mobile layouts were not measured and are not specified here.

## Iteration Guide

1. Paper canvas, brown ink, one Hot Blue action per view.
2. Headline in Heldane Display 400 (71px section / 120px hero), -1% tracking, optional italic word.
3. Sans eyebrow in Hot Blue `{typography.title-md}` above serif headlines.
4. Data → coloured stat tiles; content → white 12–16px cards.
5. Photos tilted with warm shadow; illustrations in ink line.
6. Re-run `node web/scripts/verify-designs.mjs --slug=oscar-health` after edits.
