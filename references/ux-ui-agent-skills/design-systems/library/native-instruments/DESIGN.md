---
version: alpha
name: Native Instruments
category: "Music & Audio"
description: "Native Instruments' storefront is a quiet near-black-on-white system set in Graphik (Commercial Type) at 400/500/600 — ink and primary #161819 on canvas #ffffff, light #f8f9fa buttons over full-bleed product art, 4px radii on buttons, inputs and cards, 9999px category chips on #eef0f2, sale red #ff4848 and benefit green #12b262 as the only hues."

colors:
  primary: "#161819"
  primary-hover: "#343a40"
  on-primary: "#f8f9fa"
  canvas: "#ffffff"
  ink: "#161819"
  ink-strong: "#14181c"
  surface-light: "#f8f9fa"
  surface-light-hover: "#e5e8eb"
  neutral-10: "#f7f8f8"
  neutral-20: "#ecedee"
  neutral-40: "#dbddde"
  neutral-50: "#b8bbbe"
  neutral-60: "#81878b"
  neutral-70: "#50555a"
  border: "#dce1e5"
  input-border: "#dfdfdf"
  input-text: "#333333"
  input-background: "#ffffffc7"
  chip: "#eef0f2"
  chip-hover: "#d1d5db"
  on-dark-muted: "#f8f9fa99"
  hero-overlay: "#0000001a"
  media-dark: "#000000"
  sale: "#ff4848"
  benefit: "#12b262"
  instock: "#3ed660"
  lowstock: "#ee9441"
  highlight-subscription: "#2270e5"
  error: "#8b0000"
  success: "#006400"

typography:
  display:
    fontFamily: "Graphik, Helvetica, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 600
    lineHeight: 52px
  display-native:
    fontFamily: '"NATIVEPro", Roboto, ui-sans-serif, system-ui, sans-serif'
    fontSize: 40px
    fontWeight: 600
    lineHeight: 52px
  display-mobile:
    fontFamily: "Graphik, Helvetica, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 600
    lineHeight: 52px
  heading-2:
    fontFamily: "Graphik, Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 41.6px
  heading-3:
    fontFamily: "Graphik, Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 31.2px
  heading-4:
    fontFamily: "Graphik, Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 26px
  body:
    fontFamily: "Graphik, Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  body-medium:
    fontFamily: "Graphik, Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 27px
  body-sm:
    fontFamily: "Graphik, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-sm:
    fontFamily: "Graphik, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  card-text:
    fontFamily: "Graphik, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  breadcrumb:
    fontFamily: "Graphik, Helvetica, Arial, sans-serif"
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 21.6px
  chip:
    fontFamily: "Graphik, Helvetica, Arial, sans-serif"
    fontSize: 12.8px
    fontWeight: 500
    lineHeight: 19.2px
  caption:
    fontFamily: "Graphik, Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  badge:
    fontFamily: "Graphik, Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 18px

rounded:
  sm: 4px
  checkbox: 5px
  bubble: 16px
  pill: 9999px
  circle: 50%

spacing:
  gap-3xs: 2px
  gap-xs: 8px
  gap-sm: 11.2px
  gap-md: 14.4px
  gap-lg: 16px
  gap-xl: 20px
  button-inline: 24px
  gap-2xl: 32px
  gap-3xl: 48px
  section: 64px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-medium}"
    rounded: "{rounded.sm}"
    padding: 16px 32px
    height: 52px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-newsletter:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-medium}"
    rounded: "{rounded.sm}"
    padding: 16px 28px
    height: 61px
  button-light:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.ink}"
    typography: "{typography.body-medium}"
    rounded: "{rounded.sm}"
    padding: 8px 24px
    height: 43px
  button-light-hover:
    backgroundColor: "{colors.surface-light-hover}"
  button-light-sm:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.ink}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.sm}"
    padding: 8px 24px
    height: 40px
  chip:
    backgroundColor: "{colors.chip}"
    textColor: "{colors.ink}"
    typography: "{typography.chip}"
    rounded: "{rounded.pill}"
    padding: 4px 16px
    height: 27px
  chip-hover:
    backgroundColor: "{colors.chip-hover}"
  chip-active:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
  badge-sale:
    backgroundColor: "{colors.sale}"
    textColor: "{colors.neutral-10}"
    typography: "{typography.badge}"
    rounded: "{rounded.sm}"
    padding: 2px 8px
    height: 22px
  text-input:
    backgroundColor: "{colors.input-background}"
    textColor: "{colors.input-text}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 16px 28px
    height: 61px
    border: "1px solid #dfdfdf"
  product-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.card-text}"
    rounded: "{rounded.sm}"
    padding: 0px 0px 20px
    border: "1px solid #dce1e580"
  link-breadcrumb:
    textColor: "{colors.neutral-60}"
    typography: "{typography.breadcrumb}"
  link-footer:
    textColor: "{colors.ink}"
    typography: "{typography.body-sm}"
    textDecoration: underline
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-medium}"
    height: 66px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body-medium}"
    padding: 22.4px 16px
  nav-link-deals:
    textColor: "{colors.sale}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer-utilities:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-dark-muted}"
    typography: "{typography.caption}"
    padding: 24px 0px
---

## Overview

The Native Instruments site (native-instruments.com, now © 2026 inMusic NI GmbH per the footer) is a near-monochrome store. The page is
white `#ffffff`, text and primary controls are a warm near-black `#161819`, and colour comes almost entirely from the product imagery:
neon Maschine expansion art, the iridescent KOMPLETE 26 key visual, Kontakt 8's glass render, and Traktor screenshots. The UI chrome
stays neutral so the artwork can be loud.

The capture shows a full-bleed hero (a purple field with teal stripes and partner-plugin screenshots) with a centred 40px / 600
headline in `#f8f9fa`, an 18px subline, and one light button "Explore the Creative Studio Sale". Below it is a two-column grid of 16:9
image tiles. Each tile has a centred 24px / 600 title and an 18px / 400 description underneath. There are no card boxes, no shadows and no
coloured buttons on the homepage.

**Typography** is **Graphik** throughout (2,141 of 2,141 homepage characters), loaded at 400, 500 and 600. A second family,
**NATIVEPro**, is loaded at 600 for some collection-page headings ("Instruments", 40px / 600 / 52px).

**Key characteristics**

- One dark: `#161819` is both `--color-foreground` and `--color-primary`. Text, the primary button, active chips and the dark utility bar all use it.
- Two button polarities: a **dark** primary (`#161819` with `#f8f9fa` text) on light surfaces, and a **light** button (`#f8f9fa` with `#161819` text) on imagery and dark heroes. Both have a 4px radius.
- Small radii (4px) on buttons, inputs, product cards and badges; full pills (9999px) only for category filter chips.
- Colour as signal only: `#ff4848` for "Deals" in the nav and Sale badges, `#12b262` for "Free download" and "You save $…".
- Generous 18px / 27px body text; the paragraph token is `--font-paragraph--size: 1.125rem`.
- Centred tile text: titles and descriptions sit centred under their images on the homepage grid.

## Colors

> Sources: `web/data/extracted/native-instruments.json` (home), `native-instruments--product.json` (`/products/kontakt-8`),
> `native-instruments--collection.json` (`/collections/instruments`), and the site's own `:root` custom properties (`rootVars`).

### Primary & action
- **Primary / Ink** (`{colors.primary}` / `{colors.ink}` — `#161819`): `--color-primary`, `--color-foreground`, `--color-primary-button-background`. The text colour for 1,849 homepage characters.
- **Primary Hover** (`{colors.primary-hover}` — `#343a40`): `--color-primary-button-hover-background`; a measured hover took "Sign up" from `#161819` to `rgb(52, 58, 64)`.
- **On Primary** (`{colors.on-primary}` — `#f8f9fa`): `--color-primary-button-text`; also the hero headline colour on dark imagery.
- **Surface Light** (`{colors.surface-light}` — `#f8f9fa`): fill of the light button ("Explore the Creative Studio Sale", "Explore Komplete 26").
- **Surface Light Hover** (`{colors.surface-light-hover}` — `#e5e8eb`): measured hover on the light button (`rgb(229, 232, 235)`).

### Surfaces
- **Canvas** (`{colors.canvas}` — `#ffffff`): `--color-background`; the page and footer (`color-scheme-1`).
- **Media Dark** (`{colors.media-dark}` — `#000000`): the dominant background on the Kontakt 8 product page, whose long feature story runs on black.
- **Hero Overlay** (`{colors.hero-overlay}` — `#0000001a`): `comp-homepage-hero__overlay`, a 10% black veil over the hero image. The hero section itself is `#161819` under the art (`color-scheme-2`).
- **Neutral ramp**: `--color-neutral-10` `#f7f8f8`, `-20` `#ecedee`, `-40` `#dbddde`, `-50` `#b8bbbe`, `-60` `#81878b`, `-70` `#50555a`, `-90` `#14181c` (`{colors.ink-strong}`, used for product-card titles).

### Borders & inputs
- **Border** (`{colors.border}` — `#dce1e5`): `--color-border`; product cards use it at 50% (`1px solid #dce1e580`).
- **Input Border** (`{colors.input-border}` — `#dfdfdf`), **Input Text** (`{colors.input-text}` — `#333333`), **Input Background** (`{colors.input-background}` — `#ffffffc7`, i.e. white at 0.78).

### Chips
- **Chip** (`{colors.chip}` — `#eef0f2`) → hover **Chip Hover** (`{colors.chip-hover}` — `#d1d5db`), both measured on `/collections/instruments`.

### Signal
- **Sale** (`{colors.sale}` — `#ff4848`): `--color-sale`; the "Deals" nav link and Sale badge background.
- **Benefit** (`{colors.benefit}` — `#12b262`): `--color-benefit` / `--Highlight-Green`; "Free download" and "You save $49.50".
- **In stock** `#3ed660`, **Low stock** `#ee9441`, **Subscription highlight** `#2270e5`, **Error** `#8b0000`, **Success** `#006400`: declared as `--color-instock`, `--color-lowstock`, `--color-highlight-subscription`, `--color-error`, `--color-success`. Not seen rendered on the sampled pages.
- **On-dark muted** (`{colors.on-dark-muted}` — `#f8f9fa99`): legal links in the dark utility bar (`rgba(248, 249, 250, 0.6)`).

## Typography

### Font Family
- **Graphik** (`Graphik, Helvetica, Arial, sans-serif`): every UI role (`--font-body--family`, `--font-h1--family` … `--font-h6--family`, `--button-font-family-primary`). Loaded faces: Graphik 400, 500, 600. Graphik is a commercial family by Christian Schwartz, published by Commercial Type ([commercialtype.com/catalog/graphik](https://commercialtype.com/catalog/graphik)).
- **NATIVEPro** (`--font-native-pro--family: "NATIVEPro", Roboto, ui-sans-serif, system-ui, sans-serif`): loaded at 600 on collection pages for the page title. No public information about this face was found.

### Hierarchy

| Token | Size | Weight | Line height | Where |
|---|---|---|---|---|
| `{typography.display}` | 40px | 600 | 52px | h1 (`--font-h1--size: 2.5rem`, line-height 1.3); homepage hero heading |
| `{typography.display-native}` | 40px | 600 | 52px | Collection h1 in NATIVEPro |
| `{typography.display-mobile}` | 40px | 600 | 52px | Hero heading at 390px (unchanged) |
| `{typography.heading-2}` | 32px | 600 | 41.6px | Product-page h2 (`--font-h2--size: 2.0rem`) |
| `{typography.heading-3}` | 24px | 600 | 31.2px | Tile titles, footer column headings (`--font-h3--size: 1.5rem`) |
| `{typography.heading-4}` | 20px | 500 | 26px | Category tiles "Komplete bundles" (`--font-h4--size: 1.25rem`) |
| `{typography.body}` | 18px | 400 | 27px | Paragraph (`--font-paragraph--size: 1.125rem`, line-height 1.5) |
| `{typography.body-medium}` | 18px | 500 | 27px | Buttons, nav links, card titles (`--font-body--weight-bold: 500`) |
| `{typography.body-sm}` | 16px | 400 | 24px | Footer links |
| `{typography.button-sm}` | 16px | 500 | 24px | Small "Add to cart" in product rows |
| `{typography.breadcrumb}` | 14.4px | 400 | 21.6px | Breadcrumbs (`#81878b`) |
| `{typography.card-text}` | 14px | 400 | 19.6px | Product-card description |
| `{typography.chip}` | 12.8px | 500 | 19.2px | Category filter chips |
| `{typography.caption}` | 12px | 400 | 18px | Copyright and legal links |
| `{typography.badge}` | 12px | 500 | 18px | Sale badge |

All heading tokens declare `letter-spacing: 0em` and `text-transform: none` (`--font-h1--case: none`); measured letter-spacing is
`normal` everywhere.

### Principles
- **Weights 600 for headings, 500 for anything clickable, 400 for reading.**
- **Line height 1.3 for headings, 1.5 for paragraphs**, as the root variables declare.
- **No uppercase, no tracking.** The root file declares `--letter-spacing--heading-tight: -0.03em` and `-loose: 0.03em`, but headings use `normal`.

### Note on Font Substitutes
Graphik is commercial (Commercial Type). The site's own fallback is Helvetica, then Arial. NATIVEPro falls back to Roboto. No official
open-source substitute is named by Native Instruments.

## Layout

### Spacing System
The root variables define a gap scale (rem at 16px):

| Token | Variable | Value |
|---|---|---|
| `{spacing.gap-3xs}` | `--gap-3xs` | 0.125rem = 2px |
| `{spacing.gap-xs}` | `--gap-xs` | 0.5rem = 8px |
| `{spacing.gap-sm}` | `--gap-sm` | 0.7rem = 11.2px |
| `{spacing.gap-md}` | `--gap-md` | 0.9rem = 14.4px |
| `{spacing.gap-lg}` | `--gap-lg` | 1rem = 16px |
| `{spacing.gap-xl}` | `--gap-xl` | 1.25rem = 20px |
| `{spacing.gap-2xl}` | `--gap-2xl` | 2rem = 32px |
| `{spacing.gap-3xl}` | `--gap-3xl` | 3rem = 48px |

`--gap-2xs` is 0.3rem. Buttons use `--button-padding-block: 0.5rem` and `--button-padding-inline: 1.5rem` (`{spacing.button-inline}`
24px). 64px (`{spacing.section}`) is the most frequent large padding on the product page. Measured homepage gaps are led by 6px, 8px and
48px (48px is the column gap of the two-up tile grid).

### Grid & Container
- Content width is 1200px inside a 1280px viewport (the footer utility row measures 1200px).
- The homepage uses a **two-column tile grid** of 576px images (16:9, 324px tall) with a 48px gutter.
- Collection pages use a **three-column product grid** of 384px cards.
- Heroes run full-bleed (1280px) and 630px tall on the homepage.

### Whitespace
Tiles are separated by generous vertical space. Text under images is centred and short (title + one or two lines). The page has no
divider lines; separation comes from whitespace and image edges.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | All measured surfaces |
| Overlay | `#0000001a` veil | Hero image legibility |
| Inset ring | `rgb(22, 24, 25) 0px 0px 0px 1px inset` | Secondary/outlined button border (box-shadow, not border) |
| Input ring | `--input-box-shadow: 0 0 0 1px rgb(223 223 223)` → focus `0 0 0 calc(1px + 0.5px)` | Inputs |

The root also declares `--hover-lift-amount: 4px`, `--hover-scale-amount: 1.03` and `--hover-subtle-zoom-amount: 1.015` with
`--color-shadow: rgb(0 0 0 / 0.08)`, and the corpus contains `0 4px 24px rgba(0,0,0,.15)` and `0 8px 24px #00000014` for popovers and
drawers. None of these was observed on the homepage at rest.

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.sm}` | 4px | Buttons (`--style-border-radius-buttons-primary: 4px`), inputs, product cards, sale badges |
| `{rounded.checkbox}` | 5px | Filter checkboxes (16×16, `1px solid rgba(22,24,25,0.35)`) |
| `{rounded.bubble}` | 16px | Cart count bubble |
| `{rounded.pill}` | 9999px | Collection filter chips |
| `{rounded.circle}` | 50% | Round icon elements |

Images in the homepage grid have square corners. No skew, clip-path or mask was measured.

## Components

### Buttons
**`button-primary`**: dark filled button. Measured on the Kontakt 8 page as "Add to cart": `{colors.primary}` background, `{colors.on-primary}`
text, 18px / 500 / 27px, padding `16px 32px`, height 52px, radius 4px. The footer newsletter variant (**`button-primary-newsletter`**)
uses `16px 28px` and is 61px tall to match the input.
- **Hover** (`button-primary-hover`): background `{colors.primary-hover}` `#343a40`. The transition is `background-color 0.125s ease-in-out`, with color and box-shadow on the same timing.

**`button-light`**: light button on imagery. `{colors.surface-light}` `#f8f9fa` background, `{colors.ink}` text, 18px / 500, padding
`8px 24px`, height 43px, radius 4px. Used for "Explore the Creative Studio Sale", "Explore Komplete 26", "Free download", "More on Tools".
- **Hover** (`button-light-hover`): background `{colors.surface-light-hover}` `#e5e8eb`.
- **`button-light-sm`**: 16px / 500 / 24px, `8px 24px`, 40px tall (the small "Add to cart" in product rows); same hover.

**Secondary (outlined)**: the root declares `--color-secondary-button-background: rgb(0 0 0 / 0.0)`, border `#161819`, and hover
text/border `#343a40`. The border is drawn as an inset 1px box-shadow (measured `rgb(22, 24, 25) 0px 0px 0px 1px inset`).

### Chips & badges
**`chip`**: collection filter chips ("Top picks", "Bass", "Brass", …). `{colors.chip}` `#eef0f2`, 12.8px / 500 / 19.2px, padding `4px 16px`,
27px tall, 9999px radius. Hover → `{colors.chip-hover}` `#d1d5db`. The active chip (`chip-active`, "All") is `#161819` with white text.
**`badge-sale`**: "Sale". `{colors.sale}` background, `#f7f8f8` text, 12px / 500 / 18px, padding `2px 8px`, 22px tall, radius 4px.

### Inputs
**`text-input`**: newsletter email. Background white at 78% (`#ffffffc7`), `1px solid #dfdfdf`, text `#333333`, 18px / 400 / 27px,
padding `16px 28px`, 61px tall, radius 4px. On hover the background changes to `rgba(0, 0, 0, 0.01)` (`--color-input-hover-background`).
Disabled tokens are `--input-disabled-background-color: rgb(22 24 25 / 0.1)` and text at 0.5.

### Cards
**`product-card`**: on collection pages, a 384×429 white card with `1px solid #dce1e580` and a 4px radius, padding `0 0 20px`. Inside:
the product image, an 18px / 500 title in `#14181c`, a 14px / 400 / 19.6px description, then a price (or "Free download" in
`{colors.benefit}` 16px / 500). The root declares `--card-bg-hover: rgb(22 24 25 / 0.05)` and `--card-border-hover: rgb(22 24 25 / 0.3)`.

**Homepage tile** (`comp-textpic`): no box. A 576×324 image link, then a centred `{typography.heading-3}` title and centred
`{typography.body}` description.

### Navigation
**`nav`**: a white header, 66px tall. The NI logo is on the left (216×44 link). Centre links are "Music production", "DJing", "Try 360",
and "Deals" in `{colors.sale}`, all 18px / 500 with `22.4px 16px` padding (a vertical rule separates "Deals"). On the right: a
"USD / EN" region button (14px / 500, flag icon), search, support, account and cart icons at 44×44. Nav-link hover changed nothing in the
probe; its transition is `color 0.125s ease-in-out`.

### Links
- **`link-breadcrumb`**: `#81878b`, 14.4px / 400; hover adds underline.
- **`link-footer`**: footer list links, 16px / 400, underlined at rest (`text-decoration-line: underline`).
- On dark product sections, underlined `#f8f9fa` links change to `#e5e8eb` on hover.

### Footer
**`footer`**: white (`color-scheme-1`), 703px tall. Accordion columns (Company, …) with 24px / 600 headings and 16px links; a
"Newsletter" block with the input + dark button; social icons at 24px; payment-method icons. Below it, **`footer-utilities`** is a
150px band in `#161819` (`color-scheme-2`) with language links and legal links in 12px / 400 `rgba(248, 249, 250, 0.6)`, plus the
copyright "© 2026 inMusic NI GmbH".

## Design System Architecture

**Native Instruments publishes no public design system, token package or brand guideline.** The company page links a
[Press Area](https://native-instruments.prowly.com/) that holds press releases and press kits (SuperStarSaw, Komplete 26, the inMusic
acquisition) but no logo pack, colour or type specification. Searches for "Native Instruments brand guidelines logo usage press kit" and
"Native Instruments design system UI NATIVEPro typeface" returned only aggregator and job-board pages. What follows is the system as
**declared in the site's own CSS custom properties** (`rootVars` in the extraction).

- **Token architecture.** There are three visible layers.
  1. *Primitives*: `--color-neutral-10 … -90`, `--color-white`, `--color-black`, `--color-sale`, `--color-benefit`.
  2. *Scheme/semantic*: `--color-background`, `--color-foreground`, `--color-foreground-muted: rgb(22 24 25 / 0.6)`, `--color-border`, `--color-primary`, `--color-error`, `--color-success`.
  3. *Component*: `--color-primary-button-background`, `--color-primary-button-hover-background`, `--color-secondary-button-border`, `--color-input-border`, `--color-variant-hover-border`, `--color-selected-variant-border`, `--card-border-hover`, `--style-border-radius-buttons-primary`.

  Names use double-dash BEM-like modifiers for type (`--font-h1--size`, `--font-h1--line-height`, `--font-paragraph--weight-bold`) and t-shirt suffixes for scales (`--gap-3xs … --gap-3xl`, `--font-size--2xs … --font-size--6xl`, `--button-size-sm/md`, `--icon-size-xs … -lg`). Colour variables also come in `-rgb` triplet form (`--color-foreground-rgb: 22 24 25`) so opacity can be applied.
- **Theming.** Sections carry `color-scheme-1` (white, dark text) or `color-scheme-2` (`#161819`, light text) classes. The hero and the utility bar use scheme 2, and content and footer use scheme 1. No user-facing dark mode was found.
- **Type & spacing.** Type uses a rem scale (`--font-size--xs 0.8125rem` … `--font-size--6xl 3.5rem`), heading line-height 1.3 and paragraph 1.5. Spacing is a gap scale in rem (0.125 → 3rem), and buttons have size tokens of 30 / 36 / 44px (`--button-size-sm`, `-md`, `--button-size`).
- **Component model.** Page sections carry `shopify-section` / `shopify-section-group-footer-group` classes, and blocks use BEM-ish names (`comp-homepage-hero__heading`, `comp-homepage-hero__cta`, `email-signup__button`, `collection-menu__link is-active`, `product-badges__badge`, `footer-utilities__text`, `menu-list__link`). Variant pickers have their own token set (`--variant-picker-border-width: 1px`, `--variant-picker-button-border-width: 2px`).
- **Accessibility.** `--focus-outline-width: 0.09375rem` (1.5px) and `--focus-outline-offset: 0.2em` define the focus ring. A `visually-hidden` utility hides the brand h1 and form labels. A "Skip to content" link is present. Header icon targets measure 44×44px. No published contrast policy was found.
- **Motion.** `--animation-timing-default: cubic-bezier(0, 0, 0.2, 1)`, `--ease-out-quad: cubic-bezier(0.32, 0.72, 0, 1)`; controls transition in 0.125s ease-in-out.
- **Delivery.** No npm package, Figma kit or public versioning exists.

## Do's and Don'ts

### Do
- Use `#161819` for text and for the primary filled button; pair it with `#f8f9fa` labels.
- Use the light `#f8f9fa` button whenever the button sits on product art or a dark hero.
- Keep radii at 4px for buttons, inputs, cards and badges; use 9999px only for filter chips.
- Set paragraphs at 18px / 27px Graphik 400; make every clickable label 500.
- Let product imagery carry the colour. The UI chrome stays black, white and grey.
- Reserve `#ff4848` for sale/deal signals and `#12b262` for free/savings signals.
- Centre titles and descriptions under homepage tiles.

### Don't
- Don't introduce a colourful brand primary; the system's primary is near-black.
- Don't add shadows to cards or buttons at rest.
- Don't uppercase or track headings; letter-spacing is normal.
- Don't use the sale red for anything other than deals and sale badges.
- Don't round images in the homepage grid.
- Don't shrink body copy below 18px on marketing pages; 14px is for card descriptions only.

## Responsive Behavior

| Width | Observed behaviour |
|---|---|
| 1280px | Header 66px with full centre nav; 2-up homepage tiles; 3-up product grid |
| 390px | Header 60px with logo and cart only; hero heading stays 40px / 600 / 52px but wraps to two lines (358px wide); tile title 24px wraps to two lines; hero CTA keeps `8px 24px` and 43px height |

- The type scale is not reduced on mobile: h1, h3 and body sizes measured identically at 1280px and 390px.
- The root declares slideshow arrow insets for desktop (84px), tablet (48px) and inside (32px), and `--drawer-menu-inline-padding: 2.5rem` for the mobile drawer.
- Touch targets: header icons are 44×44px (`--button-size: 44px`).

## Iteration Guide

1. Start on white `#ffffff` with `#161819` Graphik text at 18px / 27px.
2. Add one dark `button-primary` (4px radius) per decision point; on imagery, switch to `button-light`.
3. Reference tokens by name: `{colors.primary}`, `{typography.body-medium}`, `{rounded.sm}`, `{spacing.gap-3xl}`.
4. Headings: 40 / 32 / 24 / 20px at weight 600 (20px at 500), line-height 1.3.
5. Use chips (`#eef0f2`, 9999px) for filtering and badges (`#ff4848`, 4px) for sale states. Don't invent other tag colours.
6. Hover states come from the root variables: dark button → `#343a40`, light button → `#e5e8eb`, chip → `#d1d5db`.
7. Keep the page flat. Use the `color-scheme-2` dark band (`#161819`) only for heroes and the bottom utility bar.
