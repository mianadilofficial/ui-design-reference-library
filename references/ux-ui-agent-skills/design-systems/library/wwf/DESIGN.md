---
version: alpha
name: WWF
category: "Government & Nonprofit"
description: "World Wildlife Fund (worldwildlife.org) pairs full-bleed wildlife photography with a warm off-white canvas (#fefcf9), deep ocean-blue bands (#0f3d57) and pale blue sections (#eef4fa); Open Sans throughout with 54px/700 condensed (font-stretch 75%) two-tone headlines, near-black #0f0f0f ink, terracotta Donate (#cb4328) and oxblood Gifts (#6f190b) pill buttons, and 4px-radius cards."

colors:
  primary: "#cb4328"
  primary-hover: "#b73d25"
  gifts: "#6f190b"
  gifts-hover: "#7d3023"
  sedona-100: "#ffefe9"
  canvas: "#fefcf9"
  surface-white: "#ffffff"
  surface-heavy: "#0f3d57"
  surface-strong: "#1f648c"
  surface-tint: "#eef4fa"
  acadia-200: "#abcae6"
  acadia-300: "#5897c4"
  surface-muted: "#f3f3f3"
  ink: "#0f0f0f"
  ink-strong: "#4b4b4b"
  ink-muted: "#686868"
  stroke-medium: "#c6c6c6"
  black: "#000000"
  on-dark: "#ffffff"
  conservation-green: "#006e33"
  conservation-yellow: "#916800"

typography:
  display:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 54px
    fontWeight: 700
    lineHeight: 59.4px
    letterSpacing: -1.62px
    fontStretch: 75%
  display-mobile:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 39.6px
    letterSpacing: -1.08px
    fontStretch: 75%
  heading-card-feature:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 44.8px
  heading-card-feature-mobile:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 33.6px
  heading-banner:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 42px
  heading-card:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 22px
    fontWeight: 600
    lineHeight: 30.8px
  body-lg:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28.8px
  button:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 18px
  nav:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 15px
    fontWeight: 600
    lineHeight: 16.5px
  eyebrow:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  caption:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px

rounded:
  sm: 4px
  md: 8px
  lg: 12px
  xl: 20px
  pill: 9999px

spacing:
  unit: 4px
  xs: 8px
  sm: 16px
  md: 20px
  lg: 32px
  xl: 40px
  section: 80px
  wrapper: 1440px

components:
  button-donate:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-dark}"
    typography: "{typography.button}"
    rounded: "9999px 0px 0px 9999px"
    padding: 16px 16px 16px 20px
    height: 50px
  button-donate-hover:
    backgroundColor: "{colors.primary-hover}"
  button-gifts:
    backgroundColor: "{colors.gifts}"
    textColor: "{colors.on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 32px
    height: 50px
  button-gifts-hover:
    backgroundColor: "{colors.gifts-hover}"
  button-dark:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 20px
    height: 50px
  button-light:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 20px
    height: 50px
  button-light-hover:
    backgroundColor: "{colors.stroke-medium}"
  button-outline:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    border: "2px solid #0f0f0f"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 14px 18px
    height: 50px
  button-search:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink}"
    border: "1px solid #0f0f0f"
    rounded: "{rounded.pill}"
    padding: 8px
    size: 34px
  button-search-hover:
    backgroundColor: "{colors.surface-muted}"
  nav:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    height: 85px
  nav-link-hover:
    textColor: "{colors.primary}"
    textDecoration: underline
  banner-report:
    backgroundColor: "{colors.surface-heavy}"
    textColor: "{colors.on-dark}"
    typography: "{typography.heading-banner}"
  card-feature:
    backgroundColor: "{colors.surface-heavy}"
    textColor: "{colors.on-dark}"
    typography: "{typography.heading-card-feature}"
    rounded: "{rounded.sm}"
    padding: 40px
  card-story:
    textColor: "{colors.ink}"
    typography: "{typography.heading-card}"
  card-media:
    backgroundColor: "{colors.surface-muted}"
    rounded: "{rounded.sm}"
  photo-credit:
    textColor: "{colors.ink-muted}"
    typography: "{typography.caption}"
  footer:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink}"
    typography: "{typography.body-lg}"
---

## Overview

The US site of World Wildlife Fund is quiet, editorial and photograph-led. The capture opens with a white header (85px) — the black-and-white panda logo on the left, four dropdown menus (Our work, Places, Species, Get involved) in 15px semibold Open Sans, then on the right a circular outlined search button, an oxblood **Gifts** pill and a terracotta **Donate** split-pill with a dropdown chevron. Beneath it, a full-bleed underwater photograph of a sea turtle over golden kelp fills the hero with no text on it at all. The message comes in the deep ocean-blue band below (`{colors.surface-heavy}` `#0f3d57`): a photo credit at the right, then "WWF Living Planet Report 2026: 73% decline in wildlife →" in 30px bold white and a 18px standfirst.

The next sections alternate pale blue (`{colors.surface-tint}` `#eef4fa`) and the warm off-white page (`{colors.canvas}` `#fefcf9`). Each opens with a large **two-tone condensed headline** — "**Our mission** is to build a future in which people live in harmony with nature" — set in Open Sans 54px bold at 75% width with tight tracking, the first words in near-black `#0f0f0f`, the rest in mid-grey `#686868`. A feature block pairs a blue card (white 32px heading, body, white "Learn more + give" pill) with a large tiger photograph; a story grid shows three photos with credits, a bold eyebrow ("Wildlife", "Solutions", "Key findings"), a 22px semibold title with an arrow, and a standfirst.

Colour is mostly neutral and natural. The action colours are earth reds named after US national parks in the site's own tokens: Zion terracotta `#cb4328` (Donate, nav hover, focus, error) and Sedona oxblood `#6f190b` (Gifts).

**Key Characteristics:**
- Warm off-white canvas `#fefcf9` ("white sands"), never stark white for the page.
- Open Sans for everything; display headlines condensed via `font-stretch: 75%`, 54px/59.4px, tracking -1.62px.
- Two-tone headlines: lead phrase in `#0f0f0f`, continuation in `#686868`.
- Deep blue `#0f3d57` bands and cards; pale blue `#eef4fa` sections.
- Pill buttons (50px tall, 18px/600) in terracotta, oxblood, near-black, white or outline.
- 4px-radius cards and media; photo credits under every image.
- Arrow "→" affordance on linked headlines.

### Imagery
Wildlife photography in natural light: a sea turtle over kelp in the hero, a tiger in dry grass beside the feature card, tiger cubs in water, a savanna landscape, and the Living Planet Report cover in the story grid. Images are never tinted or overlaid with text; each is credited to a named photographer and WWF office ("© Antonio Busiello / WWF-US", "© Richard Barret / WWF-UK").

### Voice & Microcopy
Calm, factual and hopeful: "Nature is disappearing—but it's not too late to turn it back", "Signs of recovery", "How to restore nature", "The science of hope". Buttons are short and plain ("Donate", "Gifts", "Learn more + give", "Stories"). Headlines name the mission and the urgency in one sentence.

## Colors

> **Sources:** live homepage computed styles and `:root` custom properties (national-park-named scales). Global WWF brand palette: [wwfbrand.panda.org/colour-palette](https://wwfbrand.panda.org/colour-palette/).

### Brand & Action
- **Zion / Brand 1** (`{colors.primary}` — `#cb4328`): `--color-brand-1`, `--color-zion`. Donate button, nav hover, `--color-focus-color`, `--color-error`, `--color-conservation-status-red`.
- **Zion 200** (`{colors.primary-hover}` — `#b73d25`): measured Donate hover.
- **Sedona 500** (`{colors.gifts}` — `#6f190b`): Gifts button. Hover **Sedona 450** (`{colors.gifts-hover}` — `#7d3023`).
- **Sedona 100** (`{colors.sedona-100}` — `#ffefe9`): lightest step of the red scale.

### Surface
- **White Sands** (`{colors.canvas}` — `#fefcf9`): `--color-surface`, body background.
- **White** (`{colors.surface-white}` — `#ffffff`): header (`--color-surface-navbar`), footer (`--color-surface-footer`), light buttons.
- **Acadia 500** (`{colors.surface-heavy}` — `#0f3d57`): `--color-surface-heavy`; report banner and feature card — the largest painted area on the homepage.
- **Acadia 400** (`{colors.surface-strong}` — `#1f648c`): `--color-surface-strong`.
- **Acadia 100** (`{colors.surface-tint}` — `#eef4fa`): `--color-card-surface`; pale blue sections.
- **Punaluu 100** (`{colors.surface-muted}` — `#f3f3f3`): `--color-surface-muted`, media placeholders, tag buttons.

### Text
- **Punaluu 500** (`{colors.ink}` — `#0f0f0f`): `--color-foreground`.
- **Punaluu 400** (`{colors.ink-strong}` — `#4b4b4b`): `--color-foreground-strong`.
- **Punaluu 300** (`{colors.ink-muted}` — `#686868`): `--color-foreground-muted`; headline continuations, photo credits.
- **Acadia 200** (`{colors.acadia-200}` — `#abcae6`): muted text on blue (`--color-foreground-colored-muted`).
- **Acadia 300** (`{colors.acadia-300}` — `#5897c4`): `--color-foreground-colored-medium`.
- **On Dark** (`{colors.on-dark}` — `#ffffff`).

### Lines & Status
- **Punaluu 200** (`{colors.stroke-medium}` — `#c6c6c6`): `--color-stroke-medium`, disabled buttons, light-button hover.
- **Conservation status**: green `#006e33`, yellow `#916800`, red `#cb4328` (`--color-conservation-status-*`).
- **Black** (`{colors.black}` — `#000000`): bottom legal strip.

### Relationship to the global WWF brand
The network brand guidelines make "black and white … our principal colour palette" with a secondary palette (yellow `f5d200`, orange `f07d00`, red `da1d52`, blue `00728f` …) ([colour palette](https://wwfbrand.panda.org/colour-palette/)). The US site ships its own palette shown above; the live site wins here.

## Typography

### Font Family
**Open Sans** is the only text face on worldwildlife.org (`--font-body` and `--font-heading` both `"Open Sans", sans-serif`), loaded as a variable font covering weights 300–700. Display headlines narrow it with `font-stretch: 75%`.

The WWF network's [typography guidelines](https://wwfbrand.panda.org/typography/) name the **WWF Font** ("distinctive bold condensed", upper case in headings) as the signature display face, **Georgia** for narrative body text and **Open Sans** for body copy ("All weights of Open Sans may be used"), with Arial Bold Condensed as the WWF Font substitute. The US site does not load the WWF Font; its condensed Open Sans headlines echo it.

### Hierarchy

| Token | Size | Weight | Line Height | Tracking | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 54px | 700 (stretch 75%) | 59.4px | -1.62px | Section headlines |
| `{typography.display-mobile}` | 36px | 700 (stretch 75%) | 39.6px | -1.08px | Section headlines at 390px |
| `{typography.heading-card-feature}` | 32px | 700 | 44.8px | — | Feature card heading |
| `{typography.heading-card-feature-mobile}` | 24px | 700 | 33.6px | — | Same at 390px |
| `{typography.heading-banner}` | 30px | 700 | 42px | — | Report banner link |
| `{typography.heading-card}` | 22px | 600 | 30.8px | — | Story card titles |
| `{typography.body-lg}` | 18px | 400 | 28.8px | — | Standfirsts, footer links |
| `{typography.button}` | 18px | 600 | 18px | — | Pill buttons |
| `{typography.eyebrow}` | 16px | 700 | 24px | — | Card eyebrows, footer headings |
| `{typography.body}` | 16px | 400 | 24px | — | Body, legal |
| `{typography.nav}` | 15px | 600 | 16.5px | — | Header menus |
| `{typography.caption}` | 14px | 400 | 21px | — | Photo credits |

### Token Mapping
| Site token | Value | Equals the measured size of |
|---|---|---|
| `--text-54` | 3.375rem | Display headlines |
| `--text-32` | 2rem | Feature card heading |
| `--text-30` | 1.875rem | Report banner |
| `--text-22` | 1.375rem | Story titles |
| `--text-18` / `--text-lg` | 1.125rem | Body large, buttons |
| `--text-15` | 0.9375rem | Header menus |
| `--text-14` / `--text-sm` | 0.875rem | Credits |

### Principles
- **Condense only the display tier.** `font-stretch: 75%` plus negative tracking (−0.03em) on the 54px headlines; all other text is normal width.
- **Two-tone emphasis.** Headlines split into a near-black lead and a grey continuation instead of using bold vs regular.
- **Sentence case** everywhere (the network rule of upper-case headings is not applied on this site).
- Line-heights: 1.1 display, 1.4 headings, 1.6 body.

### Note on Font Substitutes
Open Sans is a free Google font, so no substitute is needed. If a width axis is unavailable, the network guidelines suggest **Arial Bold Condensed** as a condensed display stand-in.

## Layout

### Spacing System
- Tailwind-style base: `--spacing: 0.25rem` (4px).
- **Tokens**: `{spacing.unit}` 4px · `{spacing.xs}` 8px · `{spacing.sm}` 16px · `{spacing.md}` 20px · `{spacing.lg}` 32px · `{spacing.xl}` 40px · `{spacing.section}` 80px.
- **Most frequent**: gap 32px (67), padding 80px (22).
- **Wrapper**: `--spacing-wrapper: 1440px`.

### Grid & Container
- At 1280px the story grid spans 955px (3 × 297px cards with 32px gaps); the mission headline is 791px wide.
- Feature block: 462px blue card overlapping a large photograph.
- Report banner text aligns with the content column; photo credit right-aligned above it.

### Whitespace Philosophy
Very generous: 80px section padding, large headlines with air above and below, three-up story grid with wide gutters. Sections are separated by background colour, not rules.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Default |
| 1 | `rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px` | One raised element (Tailwind shadow-md stack) |

Depth comes from overlapping the blue card onto photography and from alternating background bands.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.sm}` | 4px | Cards, media (`--radius-sm`, 13 occurrences) |
| `{rounded.md}` | 8px | Skip link (`--radius-md`) |
| `{rounded.lg}` | 12px | `--radius-lg` (declared) |
| `{rounded.xl}` | 20px | `--radius-xl` (declared) |
| `{rounded.pill}` | 9999px | All buttons; Donate is a left-half pill joined to a right-half pill dropdown |

### Photography Geometry
Hero photography is full-bleed and square-cornered. Story images are landscape with small 4px corners. Every image carries a "© Photographer / WWF-office" credit beneath it.

## Components

### Buttons
- **`button-donate`** — `#cb4328`, white 18px/600, padding `16px 16px 16px 20px`, 50px tall, radius `9999px 0 0 9999px`; joined to a chevron dropdown half with radius `0 9999px 9999px 0`. Hover `#b73d25`. A probe after the page had been scrolled measured the header buttons at 15px, padding `8px 16px 8px 20px`, 31px tall.
- **`button-gifts`** — `#6f190b`, white, padding `16px 32px`, pill; hover `#7d3023`.
- **`button-dark`** — `#0f0f0f`, white, padding `16px 20px`, pill ("Get WWF email and texts", topic links).
- **`button-light`** — white, `#0f0f0f` text, padding `16px 20px`, pill ("Learn more + give" on the blue card); hover `#c6c6c6`.
- **`button-outline`** — transparent, `2px solid #0f0f0f`, padding `14px 18px`, pill ("Stories →").
- **`button-search`** — 34px circle, white, `1px solid #0f0f0f`, padding 8px; hover `#f3f3f3` fill and border.

### Navigation
**`nav`** — white header 85px tall (`--navbar-height: 84.984375px`); menu buttons 15px/600/16.5px with chevrons, padding `8px 0`; hover terracotta `#cb4328` + underline.

### Banner
**`banner-report`** — `#0f3d57` band: white 30px/700/42px link with "→", 18px/28.8px standfirst, photo credit 14px right-aligned in light text.

### Cards
- **`card-feature`** — `#0f3d57`, radius 4px, padding 40px, white `{typography.heading-card-feature}`, 18px body, `button-light`.
- **`card-story`** — image (4px radius) + credit (`{typography.caption}` `#686868`) + eyebrow (`{typography.eyebrow}`) + title (`{typography.heading-card}` with "→") + standfirst (`{typography.body-lg}`).

### Footer
**`footer`** — white; column headings 16px/700/24px ("Discover"), links 18px/400/28.8px `#0f0f0f` with underline on hover; a black legal strip at the very bottom with white 16px/24px text.

### Inputs
No form field was visible on the homepage; tokens declare `--color-surface-input: #fff`, `--color-surface-input-muted: #f3f3f3`, `--color-input-label: #686868`, but no geometry was measured, so no input component is declared.

## Design System Architecture

There is **no public design system** for worldwildlife.org (searches: "worldwildlife.org design system tokens github", "WWF-US website design system components" returned nothing relevant). The global WWF network publishes brand guidelines at [wwfbrand.panda.org](https://wwfbrand.panda.org/logo/) — logo, [typography](https://wwfbrand.panda.org/typography/) and [colour](https://wwfbrand.panda.org/colour-palette/) — but no code. The US site's de-facto system is measurable in its CSS custom properties.

### Token architecture
- **Primitive scales named after US national parks**, five steps each (100–500): `--color-acadia-*` (blues), `--color-biscayne-*` (teals), `--color-badlands-*` (browns), `--color-sedona-*` (reds, plus `-450`), `--color-shenandoah-*` (greens), `--color-punaluu-*` (neutrals, plus `-50`), single values `--color-zion` / `--color-zion-200`, `--color-white-sands`, `--color-denali`.
- **Semantic tokens**: `--color-foreground`, `--color-foreground-muted`, `--color-foreground-strong`, `--color-foreground-colored`, `--color-surface`, `--color-surface-heavy`, `--color-surface-strong`, `--color-surface-muted`, `--color-stroke-default`, `--color-stroke-medium`, `--color-focus-color`, `--color-error`, `--color-brand-1`.
- **Component tokens**: `--color-button-surface`, `--color-button-surface-accent`, `--color-button-light-surface`, `--color-button-light-surface-accent`, `--color-button-dark-outline-stroke`, `--color-button-tag-surface`, `--color-navbar-search-button-*`, `--color-pagination-*`, `--color-breadcrumb-*`, `--color-input-label`.
- **Context suffixes** `-td` / `-tm` (e.g. `--color-surface-td: #0f3d57`, `--color-surface-tm: #eef4fa`, `--color-card-surface-td: #fefcf9`) define alternative surface/foreground sets for differently themed sections.

### Theming
Section themes are switched by the `-td` / `-tm` token sets (dark-blue and tinted contexts) rather than a global dark mode. No site-wide dark mode was observed.

### Type & spacing systems
Tailwind v4-style tokens: `--spacing: 0.25rem`, `--text-14 … --text-80` (0.875rem–5rem), `--text-xs/sm/base/lg`, `--font-weight-normal…black`, `--leading-tight: 1.25`, `--leading-snug: 1.375`, `--radius-sm/md/lg/xl` (4/8/12/20px), `--spacing-wrapper: 1440px`.

### Component model
Observable components: navbar with dropdown menus and search button, split Donate button, pill buttons (solid dark, light, outline, tag), feature card, story card, report banner, pagination, breadcrumb, Swiper carousels (`--swiper-*`). No official inventory is published.

### Accessibility
A "Skip to main content" link (terracotta, 8px radius, white 1px border) appears on focus; the focus colour token is `#cb4328` (`#fff` on dark). Buttons are 50px tall. No published policy was found.

### Delivery
No npm package or Figma kit is published. Network brand assets (WWF Font, logos) are distributed via wwfbrand.panda.org.

## Do's and Don'ts

### Do
- Use the warm `#fefcf9` canvas and alternate it with `#eef4fa` and `#0f3d57` bands.
- Set section headlines in Open Sans 700 at `font-stretch: 75%`, 54px/59.4px, tracking -1.62px, two-tone (`#0f0f0f` then `#686868`).
- Credit every photograph beneath it in 14px `#686868`.
- Use pill buttons at 50px height; Donate in `#cb4328`, Gifts in `#6f190b`.
- Add "→" to linked headings.
- Keep the panda logo unmodified, with clearance of 1/4 of its width ([logo guidelines](https://wwfbrand.panda.org/logo/)).

### Don't
- Don't recolour or invert the panda logo (network guidelines).
- Don't use the terracotta for large surfaces — it is for the Donate action, hover and focus.
- Don't condense body text; only display headlines use 75% width.
- Don't place headlines over the hero photograph — text lives in the band below.
- Don't round cards beyond 4px.

## Responsive Behavior

### Breakpoints
Exact breakpoints were not measured.

### Measured changes at 390px
- Display 54px/59.4px → 36px/39.6px, tracking −1.62px → −1.08px.
- Feature card heading 32px/44.8px → 24px/33.6px.
- "Learn more + give" keeps 50px height and widens to 294px (full card width).
- Legal text stays 16px/24px.

### Touch Targets
Pills are 50px tall; the search button is 34px.

### Collapsing Strategy
At 390px the feature card text column narrows to 294px (the "Learn more + give" pill fills it). Other collapse behaviour was not measured.

### Image Behavior
Hero stays full-bleed; credits remain beneath each image.

## Iteration Guide

1. Canvas `#fefcf9`, ink `#0f0f0f`.
2. Section headline: `{typography.display}` two-tone.
3. Primary action: `button-donate` `#cb4328`; secondary brand action `button-gifts`.
4. Feature content in a `#0f3d57` `card-feature` beside a large photo.
5. Story grid: image + credit + eyebrow + 22px/600 title with "→" + 18px standfirst.
6. Run `node web/scripts/verify-designs.mjs --slug=wwf` after edits.
