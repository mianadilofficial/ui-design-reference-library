---
version: alpha
name: Gymshark
category: "Sports & Fitness"
description: "Gymshark's storefront — a monochrome commerce system on white #ffffff with near-black #0d1012 ink and square-cornered (0px) buttons, SN Skandia 14px/19.6px for all UI text, Plaak Gymshark 800 uppercase display (45.6px hero, 30.8px product title), #dee0e3 product-image wells, #767a7f secondary text and #dc0428 for sale, built on the site's own FDS token set."

colors:
  primary: "#0d1012"
  primary-hover: "#1b1d22"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  surface-subtle: "#f4f5f6"
  surface-subdued: "#dee0e3"
  surface-inverse: "#0d1012"
  ink: "#0d1012"
  ink-black: "#000000"
  ink-muted: "#767a7f"
  ink-subtle: "#9fa3a8"
  ink-disabled: "#bec2c6"
  border: "#dee0e3"
  sale: "#dc0428"
  accent: "#004eba"
  positive: "#009966"
  warning: "#f5a70a"
  neutral-800: "#1b1d22"
  neutral-600: "#575b60"
  neutral-700: "#3f4247"

typography:
  display-hero:
    fontFamily: "\"Plaak Gymshark\", sans-serif"
    fontSize: 45.6px
    fontWeight: 800
    lineHeight: 41.04px
    letterSpacing: -0.01px
  display-hero-mobile:
    fontFamily: "\"Plaak Gymshark\", sans-serif"
    fontSize: 32.25px
    fontWeight: 800
    lineHeight: 29.025px
    letterSpacing: -0.01px
  product-title:
    fontFamily: "\"Plaak Gymshark\", sans-serif"
    fontSize: 30.8px
    fontWeight: 800
    lineHeight: 27.72px
  product-title-mobile:
    fontFamily: "\"Plaak Gymshark\", sans-serif"
    fontSize: 24.125px
    fontWeight: 800
    lineHeight: 21.7125px
  heading:
    fontFamily: "\"Plaak Gymshark\", sans-serif"
    fontSize: 19.732px
    fontWeight: 500
    lineHeight: 18.5481px
  heading-mobile:
    fontFamily: "\"Plaak Gymshark\", sans-serif"
    fontSize: 18.041px
    fontWeight: 500
    lineHeight: 16.9585px
  callout:
    fontFamily: "\"SN Skandia\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  body:
    fontFamily: "\"SN Skandia\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  body-emphasis:
    fontFamily: "\"SN Skandia\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 19.6px
  meta:
    fontFamily: "\"SN Skandia\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.6px

rounded:
  none: 0px
  sm: 4px
  modal: 16px
  circle: 50%

spacing:
  xxs: 4px
  xs: 6px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 40px
  xxl: 64px
  feature: 80px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 16px 24px
    height: 54px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-light:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 16px 24px
    height: 52px
  button-light-hover:
    backgroundColor: "{colors.surface-subtle}"
  button-outline-on-image:
    backgroundColor: "transparent"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    border: "1px solid #ffffff"
    padding: 16px 24px
    height: 51px
  nav-bar:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    height: 76px
  nav-link-active:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 11px 4px 8px
    borderBottom: "2px solid #0d1012"
  product-card-image:
    backgroundColor: "{colors.surface-subdued}"
    rounded: "{rounded.none}"
  product-card-info:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 16px 8px 16px 0px
  badge:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.ink}"
    typography: "{typography.meta}"
    rounded: "{rounded.none}"
    padding: 5px 8px
  region-modal:
    backgroundColor: "{colors.surface-inverse}"
    textColor: "{colors.on-primary}"
    typography: "{typography.heading}"
    rounded: "{rounded.modal}"
    padding: 40px 24px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.body}"
    borderTop: "1px solid #dee0e3"
    padding: 30px 0px 0px
---

## Overview

Gymshark's site is a fashion-commerce surface in strict monochrome. Colour comes from the product photography — models in Tranquil Blue, Sprint Green, washed camo — while the interface stays white (`{colors.canvas}` — `#ffffff`), near-black (`{colors.ink}` — `#0d1012`) and a short ladder of cool greys.

The homepage (captured with the region selector open) opens with a slim grey announcement strip ("Get $10 off when you refer a friend"), then a 76px white header: Women / Men / Accessories / Explore on the left, the GYMSHARK wordmark centred, and search / wishlist / account / bag icons on the right. Below, full-bleed lifestyle photography carries a huge **Plaak Gymshark** 800 headline ("SHAPE", "HYBRID TRAINING") in white, a one-line SN Skandia caption and two rectangular buttons — one white-filled, one white-outlined.

Product rails follow: a Plaak section title ("SHAPE", "POPULAR RIGHT NOW") with an underlined "View All", then 5-up product cards — 4:5 images on a `#dee0e3` well, a heart icon, a small grey badge ("New", "built-in cups"), then title, colour name in grey and price.

**Key Characteristics:**
- Monochrome UI: `#ffffff`, `#0d1012`, greys `#f4f5f6` / `#dee0e3` / `#767a7f` / `#9fa3a8`.
- **0px radius** on every button, badge and product card (`--fds-radii-angled: 0`). Only the region modal (16px) and circular icons are rounded.
- Two typefaces: **SN Skandia** for all UI (14px/19.6px base) and **Plaak Gymshark** for display (800 for heroes/product titles, 500 for section headings).
- Black `#0d1012` "Add to bag" is the commerce CTA; on photography the CTA is white.
- Sale red `#dc0428` is the only semantic colour seen rendered.
- No box shadows on the measured pages.

## Colors

> **Sources:** computed styles (home + product page) and the site's `:root` FDS tokens (names quoted).

### Brand & Action
- **Primary / Ink Black** (`{colors.primary}` — `#0d1012`; `--global-color-neutral-black`, `--fds-color-surface-inverse`, `--fds-color-border-strong`): "Add to bag" fill, text, icons.
- **Primary Hover** (`{colors.primary-hover}` — `#1b1d22`; `--global-color-neutral-800`): measured hover of "Add to bag".
- **On Primary** (`{colors.on-primary}` — `#ffffff`).
- **Accent** (`{colors.accent}` — `#004eba`; `--fds-color-surface-accent`, `--fds-color-text-accent`, `--global-color-brand-ocean-blue`): accent token; not seen rendered on the measured pages.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`; `--fds-color-surface-default`).
- **Surface Subtle** (`{colors.surface-subtle}` — `#f4f5f6`; `--fds-color-surface-subtle`, `--global-color-neutral-100`): badges; hover fill for white buttons.
- **Surface Subdued** (`{colors.surface-subdued}` — `#dee0e3`; `--fds-color-surface-subdued`, `--global-color-neutral-200`): product image wells — the largest painted area on the homepage.
- **Surface Inverse** (`{colors.surface-inverse}` — `#0d1012`): region modal.

### Text
- **Ink** (`{colors.ink}` — `#0d1012`; `--fds-color-text-default`, `--fds-color-text-link`): titles, prices, links.
- **Ink Black** (`{colors.ink-black}` — `#000000`): header and footer container colour.
- **Ink Muted** (`{colors.ink-muted}` — `#767a7f`; `--fds-color-text-muted`): colour names, SEO copy — the most-used text colour by characters on the homepage.
- **Ink Subtle** (`{colors.ink-subtle}` — `#9fa3a8`; `--fds-color-text-subtle`).
- **Ink Disabled** (`{colors.ink-disabled}` — `#bec2c6`; `--fds-color-text-disabled`): text on the product page (58 chars).

### Lines
- **Border** (`{colors.border}` — `#dee0e3`; `--fds-color-border-default`): footer top rule, dividers.

### Semantic
- **Sale** (`{colors.sale}` — `#dc0428`; `--fds-color-text-sale`, `--fds-color-feedback-error`): rendered on the product page.
- **Positive** (`{colors.positive}` — `#009966`; `--fds-color-feedback-positive`) and **Warning** (`{colors.warning}` — `#f5a70a`; `--fds-color-feedback-warning`): tokens only.

### Neutral ramp
`--global-color-neutral-100` `#f4f5f6` · `-200` `#dee0e3` · `-300` `#bec2c6` · `-400` `#9fa3a8` · `-500` `#767a7f` · `-600` `#575b60` · `-700` `#3f4247` · `-800` `#1b1d22` · `neutral-black` `#0d1012`.

## Typography

### Font Family
- **SN Skandia** (400, 500, 700 loaded) — 6,231 weighted chars on the homepage; every UI string. The FDS tokens name it: `--fds-type-body-base: 400 1.4rem/1.4 "SN Skandia"`.
- **Plaak Gymshark** (500, 800 loaded) — display and headings: `--fds-type-display-max: 800 4.8rem/0.9 "Plaak Gymshark"`, `--fds-type-heading-max: 500 2rem/0.94 "Plaak Gymshark"`.
- The stylesheets also declare Montserrat, Roboto, Bebas Neue, Anton and Druk Condensed Super (`--font-family-druk-condensed-super`) for campaign/legacy modules; none were seen rendered on the measured pages.

### Hierarchy

| Token | Family | Size | Weight | Line height | Use |
|---|---|---|---|---|---|
| `{typography.display-hero}` | Plaak Gymshark | 45.6px | 800 | 41.04px (ls −0.01px) | Hero campaign headline |
| `{typography.display-hero-mobile}` | Plaak Gymshark | 32.25px | 800 | 29.025px | Same at 390px |
| `{typography.product-title}` | Plaak Gymshark | 30.8px | 800 | 27.72px | Product page h1, uppercase |
| `{typography.product-title-mobile}` | Plaak Gymshark | 24.125px | 800 | 21.7125px | Same at 390px |
| `{typography.heading}` | Plaak Gymshark | 19.732px | 500 | 18.5481px | Section titles, homepage h1, modal title |
| `{typography.heading-mobile}` | Plaak Gymshark | 18.041px | 500 | 16.9585px | Same at 390px |
| `{typography.callout}` | SN Skandia | 18px | 400 | 25.2px | Feature callouts (product page h3) |
| `{typography.body}` | SN Skandia | 14px | 400 | 19.6px | All UI: nav, buttons, card text, prices |
| `{typography.body-emphasis}` | SN Skandia | 14px | 700 | 19.6px | Footer column headings |
| `{typography.meta}` | SN Skandia | 12px | 400 | 15.6px | Badges, announcement bar |

### Principles
- **Fluid display sizes.** The odd pixel sizes are `clamp()` outputs: `--fds-type-display-fluid: 800 clamp(3.2rem,2.64rem + 1.5vw,4.8rem)/0.9`, `--fds-type-heading-fluid: 500 clamp(1.8rem,1.73rem + 0.19vw,2rem)/0.94`. Reproduce the clamp, not a fixed size.
- **Display line-height below 1** (0.9 / 0.94) — headlines are tightly stacked.
- **One UI size.** 14px carries 5,719 of ~6,500 weighted chars.
- **Body line-height 1.4** (`19.6px` at 14px); meta 1.3.

### Note on Font Substitutes
Both faces are served as webfonts; Gymshark publishes no substitution guidance. Any licensed neutral grotesque at 14px/1.4 approximates the UI voice; a heavy condensed display sans at 800 with 0.9 line-height approximates Plaak.

## Layout

### Spacing System
- Most-used paddings: 6px (84), 8px (46), 16px (43), 40px (28); gaps 4px (58), 16px (52), 8px (28).
- Tokens: `{spacing.xxs}` 4px · `{spacing.xs}` 6px · `{spacing.sm}` 8px · `{spacing.md}` 16px · `{spacing.lg}` 24px · `{spacing.xl}` 40px · `{spacing.xxl}` 64px · `{spacing.feature}` 80px.
- FDS semantic spacing: `--fds-spacing-detail-tight` 0.4rem, `-detail-next` 0.8rem, `-detaul-snug` 1.2rem (sic), `-detail-close` 1.6rem, `-detail-near` 2.4rem, `-separator-related` 4rem, `-separator-distant` 6.4rem, `-feature-relaxed` 8rem, `-feature-removed` 12rem.
- Page margins: `--fds-spacing-utility-layout-margin-min: 1.6rem` to `-max: 4rem`; `--fds-size-container-max-width: 140rem`; `--fds-size-text-max-width: 90rem`.

### Grid & Container
- Product rails: 5 cards per row at 1280px, each ~237px wide with a 4:5 image box (`padding-top: 295.625px`).
- Heroes are full-bleed; the first hero in the capture is a triptych of the same campaign image.
- The header is 76px; `--nav-and-menu-height-desktop: 10.5rem`.

### Whitespace Philosophy
Retail-dense in rails (cards nearly touch, 4–8px gaps), generous between sections (64–80px), and full-bleed for campaign imagery.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | All measured UI (no box-shadows rendered) |
| 1 | Tone: `#f4f5f6` / `#dee0e3` | Badges, image wells, hover fills |
| 2 | Inverse `#0d1012` panel, 16px radius | Region modal |

Tokens exist for elevation — `--box-shadow-small: 0 4px 15px 0 rgba(0,0,0,0.1)`, `--box-shadow-large: 0 4px 60px 0 rgba(0,0,0,0.1)` — and glass surfaces (`--glass-dark-background-color: rgba(0,0,0,0.8)`, `--glass-backdrop-filter-40: blur(40px)`), but none were rendered on the measured pages.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | Buttons, badges, cards, image wells (`--fds-radii-angled: 0`) |
| `{rounded.sm}` | 4px | Small controls (`--fds-radii-softened: 0.4rem`) |
| `{rounded.modal}` | 16px | Region selector modal (`--global-radii-16`) |
| `{rounded.circle}` | 50% | Icon buttons, colour swatches |

`--fds-radii-relaxed: 10rem` (pill) and `--rounded-corners-button: 5rem` exist as tokens but no pill button was measured.

## Components

### Buttons

**`button-primary`** — "Add to bag": `#0d1012` fill, white SN Skandia 14px/400 label, padding `16px 24px`, 54px tall, 0 radius. Hover → `#1b1d22`.

**`button-light`** — hero "Shape" / "Shop hybrid": white, `#0d1012` label, `16px 24px`, 52px, 0 radius. Hover → `#f4f5f6`.

**`button-outline-on-image`** — "Shop tracksuits" / region "US": transparent, `1px solid #ffffff`, white label, `16px 24px`, 51px.

### Cards

**`product-card-image`** — 4:5 image box on `#dee0e3`, 0 radius, heart icon top-right, `badge` bottom-left.

**`badge`** — `#f4f5f6`, `5px 8px`, 0 radius, SN Skandia 12px/15.6px `#0d1012`.

**`product-card-info`** — white, padding `16px 8px 16px 0`: title (h4) 14px `#0d1012`, colour name 14px `#767a7f`, price 14px `#0d1012`; star rating may sit right of the title.

### Navigation

**`nav-bar`** — white, 76px. Category links SN Skandia 14px, capitalised; active link has a 2px `#0d1012` underline (`nav-link-active`, padding `11px 4px 8px`).

### Modal

**`region-modal`** — `#0d1012`, 16px radius, `40px 24px` padding, 350px wide; Plaak 19.732px/500 white title, a white button (ROW) and an outlined button (US) stacked.

### Links
**`link`** — "View All": 14px `#0d1012`, underlined, next to the section title.

### Footer
**`footer`** — white with 1px `#dee0e3` top rule, `30px 0 0` padding; column headings ("Help", …) SN Skandia 14px/700 capitalised; links 14px.

## Design System Architecture

**No public Gymshark design-system documentation was found** (searches in `SOURCES.json`; the official [About Us page](https://au.gymshark.com/pages/about-us) covers company story only). The site itself ships a well-structured token layer in `:root`, which shows how the system is built:

- **Two tiers.** Primitive `--global-*` tokens (`--global-color-neutral-200: #dee0e3`, `--global-color-ocean-500: #004eba`, `--global-color-red-500: #dc0428`, `--global-type-size-14: 1.4rem`, `--global-radii-16: 1.6rem`, `--global-spacing-24: 2.4rem`) feed semantic `--fds-*` tokens (`--fds-color-text-muted: #767a7f`, `--fds-color-surface-subdued: #dee0e3`, `--fds-color-border-strong: #0d1012`, `--fds-color-feedback-error: #dc0428`, `--fds-radii-angled: 0`).
- **Naming:** `--fds-{category}-{role}-{variant}` — e.g. `--fds-color-text-always-white`, `--fds-color-icon-disabled`, `--fds-spacing-separator-distant`.
- **Colour ramps:** neutral 100–800 + black/white; green, ocean, red, yellow 100–800; high-contrast variants (`--global-color-red-hc-dark: #ff8fa5`, `--global-color-green-hc-dark: #00e890`, `--global-color-yellow-hc-light: #7a5200`); brand colours `--global-color-brand-chalk`, `-electric`, `-ice`, `-ocean-blue`, `-steel`.
- **Type tokens** are full CSS `font` shorthands per role and size range: `display`, `title`, `heading`, `impact`, `callout`, `body`, `meta`, each with `-min`, `-max`, `-fluid` (and `-non-english` display variants with looser 1.1 line-height).
- **Spacing tokens** are semantic by intent: `detail` (fine → near), `separator` (related, distant), `feature` (relaxed, removed), `utility-layout-margin` (min, max).
- **Theming:** `-always-white` / `-always-black` / `-inverse` tokens and `--fds-color-overlay-on-dark|on-light15|on-light70` support dark surfaces; a `--global-color-theme-test-*` set is present (not described here). No user-facing dark mode observed.
- **Units:** rem-based at 10px per rem on this site.
- **Accessibility:** "Accessibility Statement" and "Skip to content" links lead the header; a double ring shadow is present in the CSS (`0 0 0 .15rem #fff, 0 0 0 .3rem var(--fds-color-feedback-warning)`).
- **Delivery:** no public npm package or Figma kit found.

## Do's and Don'ts

### Do
- Keep the UI monochrome; let product photography bring colour.
- Use 0px corners on buttons, cards and badges.
- Set all UI in SN Skandia 14px/1.4; use 12px/1.3 for meta.
- Set display in Plaak Gymshark 800 uppercase with ~0.9 line-height, sized with the FDS clamp.
- Use black "Add to bag" for commerce and white/outline buttons on photography.
- Put product images on `#dee0e3` wells at 4:5.

### Don't
- Don't round buttons into pills — none were measured.
- Don't introduce brand colours into UI chrome; `#dc0428` is reserved for sale/error.
- Don't add drop shadows to cards.
- Don't use Plaak for body copy or SN Skandia for campaign headlines.
- Don't set display line-height to 1.2+ — the stack is intentionally tight.

## Responsive Behavior

### Breakpoints

| Viewport | Measured change |
|---|---|
| 1280px | Hero 45.6px/41.04px; product title 30.8px; headings 19.732px; header 76px |
| 390px | Hero 32.25px/29.025px; product title 24.125px; headings 18.041px; header keeps 76px with 16px padding and a search field ("What are you looking for?") |

### Touch Targets
- Buttons 51–54px tall; measured nav link box 24px tall.

### Collapsing Strategy
- Display sizes follow the FDS `clamp()` functions between min (3.2rem / 1.8rem) and max (4.8rem / 2rem).
- Body stays 14px at every width (5,512 chars at 390px).
- "Add to bag" narrows from 344px to 276px wide on mobile.

### Image Behavior
Hero photography is full-bleed and cropped; product images keep a fixed 4:5 box with a grey well while loading.

## Iteration Guide

1. White `{colors.canvas}`, ink `{colors.ink}`, secondary `{colors.ink-muted}`.
2. Buttons: `{rounded.none}`, `16px 24px`, 14px label; black on white, white on photos.
3. Display: `{typography.display-hero}` / `{typography.product-title}` uppercase.
4. UI text: `{typography.body}`; meta `{typography.meta}`.
5. Product cards: grey 4:5 well + badge + 14px title/colour/price.
6. Use `--fds-*` semantic tokens when extending — not raw hex.
