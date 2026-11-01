---
version: alpha
name: Leica
category: "Consumer Electronics"
description: "Leica Camera's Drupal-based site (leica_redesign_theme) runs a quiet warm-neutral system: Outfit at 300/400/600 only — 76px/85.12px weight-400 page titles, 54px h2, 18px/28px light body — alternating #f2efeb warm-sand and #ffffff bands with #222222 warm-black ink, #f5f5f5 cards, a #d1d4d3 footer, and 48px warm-black pill buttons (24px radius, 10px 64px) carrying a 12px Leica-red #e20612 dot that turns the whole button red on hover."

colors:
  primary: "#222222"
  on-primary: "#ffffff"
  canvas: "#f2efeb"
  canvas-white: "#ffffff"
  ink: "#222222"
  ink-muted: "#6c6c6c"
  ink-strong: "#1f1f1f"
  field-text: "#333333"
  leica-red: "#e20612"
  dark-red: "#b5050e"
  surface: "#f5f5f5"
  surface-cream: "#f1eee6"
  surface-stone: "#d7d2cb"
  surface-soft: "#f2f2f2"
  footer: "#d1d4d3"
  grey-100: "#e7e7e7"
  grey-200: "#d1d1d1"
  grey-300: "#b5b4b4"
  grey-400: "#9a9999"
  grey-900: "#141414"
  glass: "#ffffffcc"
  border-on-dark: "#ffffff66"
  midnight-blue: "#203138"
  alert-error: "#ff2e00"
  alert-success: "#16cc80"
  alert-warning: "#fcc70c"
  alert-neutral: "#24a6fe"

typography:
  display:
    fontFamily: "Outfit, sans-serif"
    fontSize: 76px
    fontWeight: 400
    lineHeight: 85.12px
  display-mobile:
    fontFamily: "Outfit, sans-serif"
    fontSize: 44px
    fontWeight: 400
    lineHeight: 52.8px
  heading-xl:
    fontFamily: "Outfit, sans-serif"
    fontSize: 54px
    fontWeight: 400
    lineHeight: 59.4px
  heading-xl-mobile:
    fontFamily: "Outfit, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
  heading-lg:
    fontFamily: "Outfit, sans-serif"
    fontSize: 46px
    fontWeight: 400
    lineHeight: 51.98px
  product-title:
    fontFamily: "Outfit, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  body-xl:
    fontFamily: "Outfit, sans-serif"
    fontSize: 20px
    fontWeight: 300
    lineHeight: 28px
  body-lg:
    fontFamily: "Outfit, sans-serif"
    fontSize: 18px
    fontWeight: 300
    lineHeight: 28px
    letterSpacing: 0.025px
  body:
    fontFamily: "Outfit, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "Outfit, sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  nav-link:
    fontFamily: "Outfit, sans-serif"
    fontSize: 18px
    fontWeight: 300
    lineHeight: 28px
  tab-label:
    fontFamily: "Outfit, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 24.75px
  link-lg:
    fontFamily: "Outfit, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  small:
    fontFamily: "Outfit, sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 28px

rounded:
  none: 0px
  hairline: 1px
  xs: 2px
  sm: 4px
  md: 8px
  button: 24px
  pill: 9999px

spacing:
  hair: 2px
  xxs: 4px
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
  xl: 24px
  xxl: 32px
  section-xs: 40px
  section-sm: 48px
  section: 56px
  button-x: 64px
  section-lg: 80px
  header: 88px
  section-xl: 96px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 10px 64px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.leica-red}"
    textColor: "{colors.on-primary}"
  button-primary-dot:
    backgroundColor: "{colors.leica-red}"
    rounded: "{rounded.pill}"
    width: 12px
    height: 12px
  button-primary-dot-hover:
    backgroundColor: "{colors.on-primary}"
  button-primary-light:
    backgroundColor: "{colors.canvas-white}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 10px 64px
    height: 48px
  button-primary-light-hover:
    backgroundColor: "{colors.leica-red}"
    textColor: "{colors.on-primary}"
  button-secondary-on-image:
    backgroundColor: "transparent"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    border: "2px solid {colors.on-primary}"
    padding: 8px 32px
    height: 48px
  button-secondary-on-image-hover:
    backgroundColor: "{colors.canvas-white}"
    textColor: "{colors.ink}"
  button-outline-small:
    backgroundColor: "transparent"
    textColor: "{colors.ink}"
    typography: "{typography.small}"
    rounded: "{rounded.pill}"
    border: "2px solid {colors.primary}"
    padding: 4px 16px
    height: 40px
  button-outline-small-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  icon-button:
    backgroundColor: "transparent"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    height: 56px
  icon-button-hover:
    backgroundColor: "{colors.grey-200}"
  nav:
    backgroundColor: "{colors.canvas-white}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    height: 77px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    padding: 24px 0px
  text-input:
    backgroundColor: "transparent"
    textColor: "{colors.ink}"
    typography: "{typography.link-lg}"
    rounded: "{rounded.hairline}"
    boxShadow: "0px 2px 0px -1px {colors.grey-400}"
    padding: 12px 16px 12px 8px
    height: 52px
  select:
    backgroundColor: "transparent"
    textColor: "{colors.ink}"
    typography: "{typography.body-xl}"
    rounded: "{rounded.hairline}"
    padding: 8px 24px 8px 16px
    height: 48px
  card-event:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "4px 4px 0px 0px"
    padding: 0px
  section-warm:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-lg}"
  footer:
    backgroundColor: "{colors.footer}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
---

## Overview

leica-camera.com (US English) is a Drupal site rendered with a theme the asset paths call
`leica_redesign_theme`. The capture opens with a plain white masthead carrying a single huge
title — "Leica Camera" in Outfit 76px weight 400 — then a full-bleed lifestyle photo (a hand holding a
phone in the silver LUX Grip) with the white sticky header sliding over it: four text links (Products,
Experience Leica, Company, Service), the red Leica roundel centred, icon buttons and an outlined
"Online Store" pill at right. The hero carries two pill buttons — a white "Discover the grip" with a red
dot, and a white-outlined "Discover the cases" — over a dark gradient, and a carousel pagination row
("LUX Grip", "M-System", "SL-System", "Metal Gray") in white semibold.

Below the hero the page shifts into a warm sand band `{colors.canvas}` (`#f2efeb`): a centred 54px
"The Art of Leica" headline, a 18px/28px light paragraph, a large documentary street photograph (a man
hiding under a red heart balloon), and a centred warm-black pill "Experience The Art of Leica" with the red
dot. Then white again: "One Brand, Many Product Ranges".

The system is deliberately quiet. One family (Outfit) in three weights; warm neutrals instead of pure
greys; no shadows on content; colour comes from photography and from the Leica red, which appears only
as the logo, the 12px dot inside primary buttons, and the full button fill on hover.

**Key Characteristics:**
- Outfit only, at 300 (body, nav), 400 (headlines) and 600 (buttons, tab labels).
- Very large, light-weight headlines: 76px page title, 54px section h2, both weight 400, tight 1.12/1.1 line-height.
- Warm-black `#222222` (`--color-warm-black`) for text and button fills — never pure black on UI.
- Leica red `#e20612` (`--color-leica-red`) as a 12px dot inside primary buttons; the whole button turns red on hover.
- 48px pill buttons (24px radius) with generous 64px side padding and the label offset left of the dot.
- Warm-neutral bands: `#f2efeb` sand, `#f5f5f5` grey, `#d7d2cb` stone, `#d1d4d3` footer.
- Editorial documentary photography, full-bleed or in wide framed blocks; no illustration.

## Colors

> **Source pages:** home (`/en-US`), `/en-US/camera`, `/en-US/contact`. Token names follow the site's own
> `--color-*` custom properties where they exist.

### Brand & Accent
- **Warm Black** (`{colors.primary}` — `#222222`): `--color-warm-black: 34 34 34`. Primary button fill,
  body text, outlined-pill border.
- **Leica Red** (`{colors.leica-red}` — `#e20612`): `--color-leica-red: 226 6 18`. The button dot
  (`.button--primary:after`) and the hover fill of every primary button (measured: `rgb(226, 6, 18)`).
- **Dark Red** (`{colors.dark-red}` — `#b5050e`): `--color-dark-red`. Declared root variable; not seen in the capture.

### Surface
- **Canvas** (`{colors.canvas}` — `#f2efeb`): the warm sand band ("The Art of Leica") that fills most of the first
  2400px the viewer sees; the dominant visible page background in the capture.
- **Canvas White** (`{colors.canvas-white}` — `#ffffff`): body background, masthead, header, alternate bands.
- **Surface** (`{colors.surface}` — `#f5f5f5`): `--color-grey-050`. Event cards; largest measured background area.
- **Surface Cream** (`{colors.surface-cream}` — `#f1eee6`): band on `/camera`.
- **Surface Stone** (`{colors.surface-stone}` — `#d7d2cb`): darker warm band on the homepage.
- **Surface Soft** (`{colors.surface-soft}` — `#f2f2f2`): band on `/camera`.
- **Footer** (`{colors.footer}` — `#d1d4d3`): `--color-light-grey: 209 212 211`.
- **Glass** (`{colors.glass}` — `#ffffffcc`): translucent white layer measured on the homepage.

### Text
- **Ink** (`{colors.ink}` — `#222222`): most-read colour (8228 measured chars).
- **Ink Muted** (`{colors.ink-muted}` — `#6c6c6c`): `--color-grey-600` / `--color-focus`. Secondary copy, dates.
- **Ink Strong** (`{colors.ink-strong}` — `#1f1f1f`): `--color-grey-800`.
- **Field Text** (`{colors.field-text}` — `#333333`): `--color-grey-700`; search input text.

### Greys (shipped variables)
`--color-grey-100` `#e7e7e7` (`{colors.grey-100}`, focus-visible background), `--color-grey-200` `#d1d1d1`
(`{colors.grey-200}`, icon-button hover, borders), `--color-grey-300` `#b5b4b4` (`{colors.grey-300}`, borders),
`--color-grey-400` `#9a9999` (`{colors.grey-400}`, input underline), `--color-grey-900` `#141414` (`{colors.grey-900}`).

### Semantic (root variables, not visible on the measured pages)
- `{colors.alert-error}` `#ff2e00` (`--color-alert-error`)
- `{colors.alert-success}` `#16cc80` (`--color-alert-success`)
- `{colors.alert-warning}` `#fcc70c` (`--color-alert-warning`)
- `{colors.alert-neutral}` `#24a6fe` (`--color-alert-neutral`)
- `{colors.midnight-blue}` `#203138` (`--color-midnight-blue`)

## Typography

### Font Family
**Outfit** is the only family rendered. The theme self-hosts three files —
`/themes/custom/leica_redesign_theme/src/fonts/Outfit/Outfit-Light.woff2` (300), `Outfit-Regular.woff2` (400),
`Outfit-SemiBold.woff2` (600) — and the page loads exactly those three weights. Outfit is published under the
SIL Open Font License ([Outfit-Fonts repository](https://github.com/Outfitio/Outfit-Fonts)).

### Hierarchy

| Token | Size | Weight | Line height | Where measured |
|---|---|---|---|---|
| `{typography.display}` | 76px | 400 | 85.12px | "Leica Camera" (`div.headline.h1`), `/contact` h1, `/camera` h1 |
| `{typography.display-mobile}` | 44px | 400 | 52.8px | `/contact` h1 at 390px |
| `{typography.heading-xl}` | 54px | 400 | 59.4px | h2 "The Art of Leica", hero h2 |
| `{typography.heading-xl-mobile}` | 40px | 400 | 48px | hero h2 at 390px |
| `{typography.heading-lg}` | 46px | 400 | 51.98px | `/camera` h3 "Discover the world of Leica with an Expert" |
| `{typography.product-title}` | 24px | 400 | 32px | "LEICA SL3-P" h3 (uppercase) |
| `{typography.body-xl}` | 20px | 300 | 28px | `/contact` address copy, select |
| `{typography.body-lg}` | 18px | 300 | 28px, +0.025px | intro paragraphs (most-read size) |
| `{typography.body}` | 16px | 400 | 24px | body default, cards |
| `{typography.button}` | 20px | 600 | 28px | all pill buttons |
| `{typography.nav-link}` | 18px | 300 | 28px | header links |
| `{typography.tab-label}` | 18px | 600 | 24.75px | carousel pagination titles |
| `{typography.link-lg}` | 20px | 400 | 28px | contact e-mail link, text input |
| `{typography.small}` | 14px | 300 | 28px | "Online Store" pill |

### The theme's heading scale
The stylesheet sets every heading to weight 400 (`.h1,…,h6{font-weight:400}`) and defines three sizes per level;
the measured pages confirm the smallest at 390px and the largest at 1280px:

| Level | Smallest | Middle | Largest |
|---|---|---|---|
| h1 | 2.75rem / 1.2 (44px) | 4.25rem / 1.2 (68px) | 4.75rem / 1.12 (76px) |
| h2 | 2.5rem / 1.2 (40px) | 3rem / 1.2 (48px) | 3.375rem / 1.1 (54px) |
| h3 | 2.25rem / 1.2 | 2.5rem / 1.2 | 2.875rem / 1.13 (46px) |
| h4 | 2rem / 1.2 | 2.125rem / 1.2 | 2.25rem / 1.2 |
| h5 | 1.75rem / 1.2 | 1.875rem / 1.2 | 2rem / 1.1875 |
| h6 | 1.5rem / 1.2 | 1.75rem / 1.2 | — |

### Principles
- Headlines are never bold; size alone creates hierarchy.
- Body copy is Light (300) at 18–20px with a 28px line — airy, magazine-like.
- Weight 600 is reserved for interactive labels (buttons, carousel tabs).
- Letter-spacing is `normal` everywhere except the 18px body (+0.025px).
- Uppercase appears only on product-name h3s ("LEICA SL3-P").

### Note on Font Substitutes
Outfit is free (OFL); use it directly — no substitute is needed. Leica's print corporate typeface is documented
in its brand guide, which is login-protected (see Design System Architecture); it is not used on the website.

## Layout

### Spacing System
- **Base unit:** 8px (Tailwind 4px scale). Most frequent measured gaps: 8px, 12px, 2px, 32px, 56px; paddings:
  8px, 4px, 56px, 32px, 16px, 24px, 88px, 80px.
- **Tokens:** `{spacing.hair}` 2px · `{spacing.xxs}` 4px · `{spacing.xs}` 8px · `{spacing.sm}` 12px · `{spacing.md}` 16px ·
  `{spacing.lg}` 20px · `{spacing.xl}` 24px · `{spacing.xxl}` 32px · `{spacing.section-xs}` 40px · `{spacing.section-sm}` 48px ·
  `{spacing.section}` 56px · `{spacing.button-x}` 64px · `{spacing.section-lg}` 80px · `{spacing.header}` 88px · `{spacing.section-xl}` 96px.
- **Header height variable:** `--header-height: 88px`; the measured desktop header element is 77px, mobile 72px.

### Grid & Container
- Root variables: `--container: 1920px`, `--container-max: 2560px`, `--container-narrow-desktop: 880px`,
  `--container-narrow-tablet: 600px`, `--container-narrow: 315px`.
- Text blocks sit in the 880px narrow container (the intro paragraph and h2 measure 880px wide).
- Photography spans either full-bleed or a wide framed block inside ~64px gutters.
- Event cards are 320px wide in a horizontal row.

### Whitespace Philosophy
Large vertical pauses (56–96px) separate bands; each band has one centred headline, one light paragraph,
one image and one button. Colour changes between white and warm sand mark section boundaries instead of rules.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat `#ffffff` / `#f2efeb` / `#f5f5f5` | Bands and cards |
| 1 | Underline `0px 2px 0px -1px #9a9999` | Text inputs (measured box-shadow) |
| 2 | Sticky white header over photography | Navigation |
| Focus | `0 4px 0 -2px rgb(var(--color-grey-600))` | `:focus-visible` underline in the theme CSS |

There are no drop shadows on content surfaces; depth comes from photography and band colour.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | header, icon buttons, sections |
| `{rounded.hairline}` | 1px | text input, select |
| `{rounded.xs}` | 2px | `.button--cta`, focus outlines (`.125rem`) |
| `{rounded.sm}` | 4px | event-card top corners (`4px 4px 0px 0px`) |
| `{rounded.md}` | 8px | small UI blocks |
| `{rounded.button}` | 24px | 48px pill buttons (`.button{border-radius:1.5rem}`) |
| `{rounded.pill}` | 9999px | "Online Store" outlined pill, the red dot |

### Other shapes
- The **red dot**: `.button--primary:after` is a 12px (`.75rem`) circle, absolutely positioned 16px (`1rem`) from the
  button's right edge, filled `--color-leica-red`; on hover it turns white while the button turns red.
- The Leica roundel logo is a red circle centred in the header.
- No skewed or notched shapes.

## Components

### Buttons
**`button-primary`** — "Discover the latest SL-Camera", "Experience The Art of Leica".
- `#222222` fill, `#ffffff` Outfit 20px/28px weight 600, 24px radius, padding 10px 64px, 48px tall.
- Contains `button-primary-dot` (12px red circle, 16px from the right).
- Hover (measured): background → `#e20612`; text stays white. CSS: the dot turns white (`button-primary-dot-hover`).
- At 390px the button goes full-width (350px) with padding 10px 32px.

**`button-primary-light`** — white variant on photography ("Discover the grip", "Discover the lens"): `#ffffff` fill,
`#222222` text, same geometry and dot. Hover (measured): background `#e20612`, text `#ffffff`.

**`button-secondary-on-image`** — "Discover the cases": transparent, 2px white border, white 20px/600 text, 24px radius,
padding 8px 32px, 48px. Hover (measured): background `#ffffff`, text `#222222`. CSS `.button--secondary:hover:after`
paints the dot red.

**`button-outline-small`** — "Online Store" in the header: 2px `#222222` border, pill, 4px 16px, 40px, Outfit 14px/300.
Hover (measured): fills `#222222`, text `#ffffff`.

**`icon-button`** — search, account and store-finder icons: 56px tall, transparent; hover (measured) fills `#d1d1d1`.

### Navigation
**`nav`** — white header, 77px tall at desktop (72px at 390px). Left: text links in `{typography.nav-link}` (18px/300,
24px vertical padding). Centre: the red Leica roundel. Right: icon buttons and the outlined "Online Store" pill.
Mobile collapses links into "Menu".

### Inputs
**`text-input`** — `/camera` newsletter-style field: transparent, no border, 1px radius, underline drawn by box-shadow
`0px 2px 0px -1px #9a9999`, padding 12px 16px 12px 8px, 52px tall, Outfit 20px/400 `#222222`.
**`select`** — `/contact` country select: 1px radius, padding 8px 24px 8px 16px, 48px, Outfit 20px/300, chevron-down SVG
background icon.
Theme focus rules: `:focus-visible` sets `border-color: rgb(var(--color-focus))` (`#6c6c6c`) with transparent outline,
plus an underline shadow `0 4px 0 -2px rgb(var(--color-grey-600))`.

### Cards
**`card-event`** — gallery/event teasers ("Leica Gallery Frankfurt"): `#f5f5f5`, radius `4px 4px 0px 0px`, 320px wide,
image on top, text below in `{typography.body}`.

### Sections
**`section-warm`** — `#f2efeb` band with centred h2, light 18px paragraph, framed photo and a primary pill.
**`footer`** — `#d1d4d3`, `#222222` text, opens with the "DAS WESENTLICHE" line, language selector ("USA / English"),
"Back to Top", and link columns.

## Design System Architecture

**Leica does not publish a public web design system or token package.** It does run an official brand guide at
[brandguide.leica-camera.com](https://brandguide.leica-camera.com/design-principles/typography), but every page
returned HTTP 401 (login required) when opened, so none of its content is used here. What follows is the de-facto
system readable from the shipped theme CSS
([theme stylesheet](https://leica-camera.com/sites/default/files/css/css_eCAHg9lhvsjlTg3W4qyk1Yg-bMxSuqhX4EBwffLzBwY.css?delta=1&language=en-US&theme=leica_redesign_theme))
and the measured pages.

### Token architecture
- Primitives are root custom properties holding RGB triplets, verbatim: `--color-warm-black:34 34 34`,
  `--color-leica-red:226 6 18`, `--color-grey-050:245 245 245` … `--color-grey-900:20 20 20`,
  `--color-light-grey:209 212 211`, `--color-dark-red:#b5050e`.
- Semantic primitives sit alongside: `--color-focus` (= grey-600), `--color-focus-light` (= grey-200),
  `--color-alert-error|success|warning|warning-dark|neutral`, `--color-info`.
- Utilities consume them with Tailwind's opacity slot, e.g.
  `.button--primary:hover{background-color:rgb(var(--color-leica-red)/var(--tw-bg-opacity,1))}`.
- Component classes are BEM-like: `.button`, `.button--primary`, `.button--secondary`, `.button--cta`, `.headline`,
  `.splide__pagination--slide-title`.
- Layout tokens: `--container`, `--container-max`, `--container-narrow(-tablet|-desktop)`, `--header-height`.

### Theming
- Headline classes carry `dark:text-white` (e.g. `headline dark:text-white h1`), so a Tailwind `dark` variant
  exists for headlines over dark imagery. No user-facing dark-mode toggle was observed.

### Type & spacing systems
- One family, three weights; six heading levels, each with three responsive sizes (table above).
- Spacing is Tailwind's 4px scale (`py-2.5`, `gap-10` on primary buttons).
- Breakpoints in the CSS: `min-width: 640px`, `768px`, `1024px`, `1280px`, `1920px`.

### Component model
Not publicly documented. Observed inventory: header with roundel, hero carousel (Splide) with tab pagination,
primary/light/secondary/outline pill buttons, icon buttons, editorial bands, event cards, inputs and selects,
footer with language selector.

### Accessibility
The theme includes a "Skip to main content" link (first body text), `:focus-visible` border and underline rules,
and 2px focus outlines in `--color-grey-400`. No published contrast or target-size policy was found.

### Delivery
Drupal theme assets (`/themes/custom/leica_redesign_theme/`), aggregated CSS under `/sites/default/files/css/`,
self-hosted Outfit WOFF2. No npm package, Figma kit or public versioning.

## Do's and Don'ts

### Do
- Use Outfit only, at 300 / 400 / 600.
- Set page titles at 76px/85.12px weight 400 and section heads at 54px/59.4px.
- Use `#222222` for text and button fills.
- Put the 12px red dot inside primary pills, 16px from the right edge.
- Turn primary buttons fully Leica red `#e20612` on hover.
- Alternate white with warm sand `#f2efeb` bands.
- Let documentary photography carry colour and emotion.

### Don't
- Don't bold headlines or use pure `#000000` for UI text.
- Don't use the red as a large background or for body text — it is a dot and a hover state.
- Don't add drop shadows to cards or buttons.
- Don't square off buttons; the 48px pill with 24px radius is the signature.
- Don't mix in a second typeface.
- Don't crowd bands — one headline, one paragraph, one image, one button.

## Responsive Behavior

### Breakpoints
| Width | Source |
|---|---|
| 640px | `@media (min-width:640px)` |
| 768px | `@media (min-width:768px)` |
| 1024px | `@media (width >= 1024px)` |
| 1280px | `@media (min-width:1280px)` |
| 1920px | `@media (min-width:1920px)` |

### Measured mobile changes (390px)
- h1 76px/85.12px → 44px/52.8px; h2 54px/59.4px → 40px/48px.
- Body stays 18px/28px light.
- Primary button becomes full-width (350px), padding 10px 64px → 10px 32px, height stays 48px.

### Touch targets
Buttons 48px, outlined pill 40px, icon buttons 56px, inputs 48–52px.

## Iteration Guide

1. Alternate `{colors.canvas}` warm sand `#f2efeb` and `{colors.canvas-white}` `#ffffff` bands; text `{colors.ink}` `#222222`.
2. Page title in `{typography.display}` (76px/400); section heads in `{typography.heading-xl}` (54px/400).
3. Paragraphs in `{typography.body-lg}` (18px/300/28px) inside an 880px column, centred in editorial bands.
4. One `button-primary` per band: warm-black 48px pill, 24px radius, 10px 64px, 20px/600, red dot right.
5. On photography use `button-primary-light` (white) or `button-secondary-on-image` (2px white outline).
6. Hover: primary → full `#e20612`; secondary on image → white fill; outline pill → warm-black fill.
7. Alternate `#ffffff` and `#f2efeb` bands; use `#f5f5f5` for cards, `#d1d4d3` for the footer.
8. Inputs are underlines (`0px 2px 0px -1px #9a9999`), not boxes; 1px radius.
9. No shadows, no second font, no bold headlines.
10. Verify numbers: 76 / 54 / 46 / 24 / 20 / 18 / 16 / 14px type; 1 / 2 / 4 / 24px / pill radii; 48px buttons.
