---
version: alpha
name: Opendoor
category: "Real Estate & PropTech"
description: "Opendoor's 2026 marketing site is a warm-paper interface — #fbf9f9 canvas, #23201d warm-black ink with #5e564e muted copy, one saturated accent blue #0042e6 for every CTA (12px radius, 44px tall, with a -4px inset bevel in #0021d9), Graphik (Commercial Type) at 400/500 with tight negative tracking (48px/-2.4px section heads) and a single DM Serif Display 60px hero line, 20px-radius photo cards and a floating 64px address field."

colors:
  primary: "#0042e6"
  on-primary: "#ffffff"
  primary-hover: "#00288b"
  primary-active: "#002ede"
  primary-bevel: "#0021d9"
  primary-hover-ring: "#002b96"
  primary-focus: "#81a2f2"
  primary-soft: "#b5caff"
  primary-wash: "#0042e60d"
  canvas: "#fbf9f9"
  canvas-white: "#ffffff"
  canvas-muted: "#f9f8f8"
  canvas-deep: "#f3f2f0"
  surface-warm: "#f4efec"
  surface-button: "#ede8e8"
  field: "#ffffffe6"
  footer-from: "#e8e3df"
  footer-to: "#f1eeee"
  ink: "#23201d"
  ink-control: "#25201d"
  ink-muted: "#5e564e"
  ink-soft: "#806d63"
  ink-faint: "#786e64"
  line: "#dfdbd8"
  control-border-hover: "#aaa7a4"
  state-hover: "#ebe9e7"
  hover-wash: "#58403214"
  canvas-dark: "#23201d"
  canvas-darker: "#37322d"
  success: "#007f5e"
  error: "#c13e3e"

typography:
  display-hero:
    fontFamily: '"DM Serif Display", "DM Serif Display Fallback"'
    fontSize: 60px
    fontWeight: 500
    lineHeight: 64px
    letterSpacing: -1.8px
  display-hero-mobile:
    fontFamily: '"DM Serif Display", "DM Serif Display Fallback"'
    fontSize: 40px
    fontWeight: 500
    lineHeight: 44px
    letterSpacing: -1.6px
  heading-xl:
    fontFamily: 'graphik, "graphik Fallback", system-ui, -apple-system, "Segoe UI", "Helvetica Neue", sans-serif'
    fontSize: 48px
    fontWeight: 500
    lineHeight: 50px
    letterSpacing: -2.4px
  stat:
    fontFamily: 'graphik, "graphik Fallback", system-ui, -apple-system, "Segoe UI", "Helvetica Neue", sans-serif'
    fontSize: 36px
    fontWeight: 500
    lineHeight: 36px
    letterSpacing: -0.72px
  heading-xl-mobile:
    fontFamily: 'graphik, "graphik Fallback", system-ui, -apple-system, "Segoe UI", "Helvetica Neue", sans-serif'
    fontSize: 28px
    fontWeight: 500
    lineHeight: 30px
    letterSpacing: -1.4px
  heading-md:
    fontFamily: 'graphik, "graphik Fallback", system-ui, -apple-system, "Segoe UI", "Helvetica Neue", sans-serif'
    fontSize: 28px
    fontWeight: 500
    lineHeight: 32px
    letterSpacing: -1.26px
  title:
    fontFamily: 'graphik, "graphik Fallback", system-ui, -apple-system, "Segoe UI", "Helvetica Neue", sans-serif'
    fontSize: 20px
    fontWeight: 500
    lineHeight: 30px
    letterSpacing: -0.4px
  lead:
    fontFamily: 'graphik, "graphik Fallback", system-ui, -apple-system, "Segoe UI", "Helvetica Neue", sans-serif'
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: -0.36px
  body:
    fontFamily: 'graphik, "graphik Fallback", system-ui, -apple-system, "Segoe UI", "Helvetica Neue", sans-serif'
    fontSize: 16px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: -0.32px
  button:
    fontFamily: 'graphik, "graphik Fallback", system-ui, -apple-system, "Segoe UI", "Helvetica Neue", sans-serif'
    fontSize: 16px
    fontWeight: 500
    lineHeight: 21.6px
    letterSpacing: -0.8px
  ui:
    fontFamily: 'graphik, "graphik Fallback", system-ui, -apple-system, "Segoe UI", "Helvetica Neue", sans-serif'
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 21.6px
    letterSpacing: -0.2016px
  body-sm:
    fontFamily: 'graphik, "graphik Fallback", system-ui, -apple-system, "Segoe UI", "Helvetica Neue", sans-serif'
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: -0.28px
  button-mobile:
    fontFamily: 'graphik, "graphik Fallback", system-ui, -apple-system, "Segoe UI", "Helvetica Neue", sans-serif'
    fontSize: 14px
    fontWeight: 500
    lineHeight: 17.64px
    letterSpacing: -0.7px
  caption:
    fontFamily: 'graphik, "graphik Fallback", system-ui, -apple-system, "Segoe UI", "Helvetica Neue", sans-serif'
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: -0.24px
  micro:
    fontFamily: 'graphik, "graphik Fallback", system-ui, -apple-system, "Segoe UI", "Helvetica Neue", sans-serif'
    fontSize: 10px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: -0.1px

rounded:
  xs: 4px
  sm: 8px
  button-soft: 10px
  button: 12px
  md: 16px
  card: 20px
  lg: 30px
  pill: 9999px

spacing:
  hair: 2px
  xs: 4px
  sm: 8px
  md: 12px
  control-y: 14px
  lg: 16px
  xl: 20px
  button-x: 24px
  2xl: 28px
  3xl: 32px
  4xl: 48px
  field-x: 48px
  5xl: 64px
  6xl: 72px
  field-r: 80px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 24px
    height: 44px
    boxShadow: "rgb(0, 66, 230) 0px 0px 0px 1px, rgba(255, 255, 255, 0.25) 0px 0px 0px 1px inset, rgb(0, 33, 217) 0px -4px 0px 0px inset"
  button-primary-hover:
    boxShadow: "0 0 0 1px #002b96, inset 0 0 0 1px #ffffff40, inset 0 -4px 0 0 #00000024"
  button-primary-active:
    boxShadow: "0 0 0 1px #0042e6, inset 0 0 0 1px #ffffff40"
  button-secondary:
    backgroundColor: "{colors.field}"
    textColor: "{colors.ink-control}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 24px
    height: 44px
    boxShadow: "rgba(88, 64, 50, 0.16) 0px 0px 0px 1px, rgba(255, 255, 255, 0.3) 0px 0px 0px 1px inset, rgba(88, 64, 50, 0.1) 0px -4px 0px 0px inset"
  button-secondary-hover:
    boxShadow: "rgba(88, 64, 50, 0.3) 0px 0px 0px 1px, rgba(255, 255, 255, 0.3) 0px 0px 0px 1px inset, rgba(88, 64, 50, 0.05) 0px -4px 0px 0px inset"
  button-tertiary:
    backgroundColor: "{colors.surface-button}"
    textColor: "{colors.ink-control}"
    typography: "{typography.button}"
    rounded: "{rounded.button-soft}"
    padding: 0px 24px
    height: 44px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.ui}"
    height: 72px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    height: 44px
  nav-link-hover:
    backgroundColor: "{colors.hover-wash}"
  address-field:
    backgroundColor: "{colors.field}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.card}"
    padding: 0px 80px 0px 48px
    height: 64px
    boxShadow: "rgba(88, 64, 50, 0.16) 0px 0px 0px 1px, rgba(88, 64, 50, 0.19) 0px 16px 20.4px -9px, rgba(88, 64, 50, 0.12) 0px 37px 37.3px 3px, rgb(255, 255, 255) 0px 0px 0px 1px inset, rgba(88, 64, 50, 0.1) 0px -3px 0px 0px inset"
  card-story:
    backgroundColor: "{colors.canvas-muted}"
    textColor: "{colors.ink}"
    typography: "{typography.ui}"
    rounded: "{rounded.card}"
    padding: 0px
    height: 330px
    boxShadow: "rgba(74, 40, 20, 0.15) 0px 19px 22.2px -14px, rgba(100, 57, 31, 0.32) 0px 0px 0px 1px"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.footer-to}"
    textColor: "{colors.ink}"
    typography: "{typography.ui}"
    backgroundImage: "linear-gradient(in oklab, rgb(232, 227, 223) 0px, rgb(241, 238, 238) 50%, rgb(241, 238, 238) 100%)"
---

## Overview

Opendoor's homepage (measured October 2026 at `https://www.opendoor.com/`) reads like warm paper. The page canvas is
`#fbf9f9` (`{colors.canvas}`), a barely-pink off-white, and almost all text is a warm brown-black `#23201d`
(`{colors.ink}`, the site's own `--color-ink`) or its muted sibling `#5e564e` (`--color-ink-muted`). There is exactly
one saturated colour on the page: **accent blue `#0042e6`** (`--color-accent`), used for every filled CTA
("Get an offer today", "Explore homes", "Get your rate", "Check value") and the round search button in the address field.

The capture shows a 72px header with a dark serif-ish "Opendoor" wordmark at left and a row of plain links
(Sell, Buy, Agents, Mortgage) plus a white "Sign in" button at right. Below it sits a large rounded hero card
inset from the viewport edges: a warm, sunlit family-at-home photograph with the headline "Your home. Your options."
set in **DM Serif Display** at 60px (`{typography.display-hero}`), a two-line white 18px sub-copy, and a floating
white address field (64px tall, 20px radius, layered warm shadow) with a blue square search button. Trust stats
("310,769 customers served", "2x faster", Trustpilot stars) sit along the bottom of the photo in white.

Below the hero the page alternates between testimonial carousels (rounded 20px photo cards with quote text beneath),
split image/step-list blocks ("Sell your home the easy way" with four icon rows separated by hairlines), comparison
tables (Opendoor vs Traditional) and an FAQ. Headlines below the hero are Graphik 500 with heavy negative tracking
(48px at -2.4px), which gives the page a dense, editorial-tech feel against the soft paper background.

**Key Characteristics:**
- Warm achromatic palette: `#fbf9f9` canvas, `#23201d` ink, `#5e564e`/`#806d63` secondary text, `#dfdbd8` hairlines.
- One accent: `#0042e6` blue, reserved for primary actions and links.
- Buttons are 44px tall, 12px radius, with a 1px ring and a 4px inset bottom bevel (`inset 0 -4px 0 0`) — a tactile, pressed-key look.
- Graphik 400/500 everywhere, tracked tight; DM Serif Display only for the hero h1.
- Photography of real families in real homes, warm-graded; rounded 20px corners on every photo card.
- Shadows are warm-tinted (`rgba(88, 64, 50, …)`, `rgba(74, 40, 20, …)`), never neutral grey.

## Colors

> **Source:** homepage extraction (`desktop.roles`, frequencies, `cssCorpus`) and the site's CSS custom properties
> (`--color-*`, `--nh-*`), all measured on `https://www.opendoor.com/`.

### Brand & Accent
- **Accent Blue** (`{colors.primary}` — `#0042e6`): `--color-accent` and `--nh-btn-primary`. Filled CTAs, search button, accent links.
- **Accent Hover** (`{colors.primary-hover}` — `#00288b`): `--color-accent-hover`.
- **Accent Active** (`{colors.primary-active}` — `#002ede`): `--nh-btn-primary-active`.
- **Accent Bevel** (`{colors.primary-bevel}` — `#0021d9`): the `inset 0 -4px 0 0` bottom bevel inside primary buttons.
- **Accent Hover Ring** (`{colors.primary-hover-ring}` — `#002b96`): `--nh-btn-primary-hover-ring`.
- **Accent Focus** (`{colors.primary-focus}` — `#81a2f2`): `--nh-btn-focus`.
- **Accent Soft** (`{colors.primary-soft}` — `#b5caff`): `--color-accent-soft`.
- **Accent Wash** (`{colors.primary-wash}` — `#0042e60d`): 5% blue tint measured as a background area.
- **On Primary** (`{colors.on-primary}` — `#ffffff`).

### Surface
- **Canvas** (`{colors.canvas}` — `#fbf9f9`): body background and header background; covers most of the page.
- **Canvas White** (`{colors.canvas-white}` — `#ffffff`): `--color-canvas`; white panels.
- **Canvas Muted** (`{colors.canvas-muted}` — `#f9f8f8`): `--color-canvas-muted`; testimonial card fill.
- **Canvas Deep** (`{colors.canvas-deep}` — `#f3f2f0`): `--color-canvas-deep` / `--color-line-soft`.
- **Surface Warm** (`{colors.surface-warm}` — `#f4efec`): second-largest background area on the page.
- **Surface Button** (`{colors.surface-button}` — `#ede8e8`): fill of the tertiary "Visit help center" button.
- **Field** (`{colors.field}` — `#ffffffe6`): 90% white of the address field and the Sign in button.
- **Footer gradient** (`{colors.footer-from}` `#e8e3df` → `{colors.footer-to}` `#f1eeee`): the footer's `linear-gradient(in oklab, …)`.
- **Canvas Dark / Darker** (`#23201d` / `#37322d`): `--color-canvas-dark`, `--color-canvas-darker`.

### Text
- **Ink** (`{colors.ink}` — `#23201d`): `--color-ink`; headings, quotes, nav.
- **Ink Control** (`{colors.ink-control}` — `#25201d`): label colour of neutral buttons.
- **Ink Muted** (`{colors.ink-muted}` — `#5e564e`): `--color-ink-muted`; the most-read text colour (body paragraphs, disclosures).
- **Ink Soft** (`{colors.ink-soft}` — `#806d63`): secondary paragraphs (e.g. "Your final offer includes…").
- **Ink Faint** (`{colors.ink-faint}` — `#786e64`): `--color-ink-faint` / `--color-line-strong`.

### Lines & States
- **Line** (`{colors.line}` — `#dfdbd8`): `--color-line`; hairlines between step rows and under testimonials.
- **Control Border Hover** (`{colors.control-border-hover}` — `#aaa7a4`): `--nh-control-border-hover`.
- **State Hover** (`{colors.state-hover}` — `#ebe9e7`): `--color-state-hover`.
- **Hover Wash** (`{colors.hover-wash}` — `#58403214`): measured hover background of nav links (`rgba(88, 64, 50, 0.08)`).

### Semantic
- **Success** (`{colors.success}` — `#007f5e`): `--color-success`.
- **Error** (`{colors.error}` — `#c13e3e`): `--color-error` (also `--color-favorite`).

## Typography

### Font Family
- **Graphik** (served as `graphik`, weights 400 and 500) carries 6,834 of 6,858 weighted characters. Graphik is a
  Commercial Type family designed by Christian Schwartz with Panagiotis Haratzopoulos, Ilya Ruderman and Hrvoje Živčić,
  sold under a commercial licence ([commercialtype.com](https://commercialtype.com/catalog/graphik)).
- **DM Serif Display** (served 400) is used only for the hero h1. It is an open-source (SIL OFL) family commissioned
  from Colophon Foundry ([googlefonts/dm-fonts](https://github.com/googlefonts/dm-fonts)). The h1's computed
  `font-weight` is 500 while only the 400 face is loaded, so the rendered glyphs are the 400 face.
- The stylesheet also declares `lilex` (mono) and `Nanum Pen Script` (handwriting) faces; neither appeared in the measured homepage text.

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|---|
| `{typography.display-hero}` | DM Serif Display | 60px | 500 | 64px | -1.8px | Hero h1 |
| `{typography.heading-xl}` | Graphik | 48px | 500 | 50px | -2.4px | Section h2 |
| `{typography.display-hero-mobile}` | DM Serif Display | 40px | 500 | 44px | -1.6px | Hero h1 at 390px |
| `{typography.stat}` | Graphik | 36px | 500 | 36px | -0.72px | Hero stats ("310,769") |
| `{typography.heading-xl-mobile}` | Graphik | 28px | 500 | 30px | -1.4px | Section h2 at 390px |
| `{typography.heading-md}` | Graphik | 28px | 500 | 32px | -1.26px | Card headline |
| `{typography.title}` | Graphik | 20px | 500 | 30px | -0.4px | Step titles, FAQ questions |
| `{typography.lead}` | Graphik | 18px | 400 | 24px | -0.36px | Hero sub-copy |
| `{typography.body}` | Graphik | 16px | 400 | 21px | -0.32px | Body paragraphs, quotes |
| `{typography.button}` | Graphik | 16px | 500 | 21.6px | -0.8px | Buttons, nav links |
| `{typography.ui}` | Graphik | 14.4px | 400 | 21.6px | -0.2016px | Body default (`<body>`) |
| `{typography.body-sm}` | Graphik | 14px | 400 | 18px | -0.28px | Small paragraphs |
| `{typography.button-mobile}` | Graphik | 14px | 500 | 17.64px | -0.7px | Buttons at 390px |
| `{typography.caption}` | Graphik | 12px | 400 | 18px | -0.24px | Disclosures, licence lines |
| `{typography.micro}` | Graphik | 10px | 400 | 14px | -0.1px | Rate-table footnotes |

Letter-spacing follows a clear rule visible in the frequency table: body text tracks at **-0.02em**
(16px → -0.32px, 14px → -0.28px, 12px → -0.24px, 18px → -0.36px, 20px → -0.4px), buttons at **-0.05em**
(16px → -0.8px, 14px → -0.7px — matching `--tracking-tighter: -.05em`) and the 48px section head at -0.05em (-2.4px).

### Principles
- Two weights only: 400 for reading, 500 for everything that is a heading, label or button.
- Tight tracking at every size; never positive letter-spacing.
- Serif display is a single gesture on the hero; all other headlines are Graphik.

### Note on Font Substitutes
Graphik is commercial. The site's own fallback stack is `"graphik Fallback", system-ui, -apple-system, "Segoe UI",
"Helvetica Neue", sans-serif`; use it verbatim when Graphik is not licensed. DM Serif Display is free (OFL) and can be used as-is.

## Layout

### Spacing System
- Tailwind-style 4px step (`--spacing: .25rem`).
- **Measured gaps (by frequency):** 8px, 12px, 20px, 2px, 16px, 24px, 4px, 32px, 48px, 64px, 28px, 14px, 72px.
- **Measured paddings:** 20px, 24px, 14px, 11px, 16px, 12px, 28px, 48px, 32px, 80px.
- Tokens: `{spacing.hair}` 2 · `{spacing.xs}` 4 · `{spacing.sm}` 8 · `{spacing.md}` 12 · `{spacing.control-y}` 14 · `{spacing.lg}` 16 ·
  `{spacing.xl}` 20 · `{spacing.button-x}` 24 · `{spacing.2xl}` 28 · `{spacing.3xl}` 32 · `{spacing.4xl}` 48 · `{spacing.5xl}` 64 · `{spacing.6xl}` 72.

### Grid & Container
- Breakpoints in CSS: `--breakpoint-lg: 1024px`, `--breakpoint-xl: 1200px`; app container `--container-app: 1536px`.
- Header height `--homepage-header-height: 72px`.
- The hero card is inset from the viewport edges with rounded corners (capture); section content below aligns to a
  narrower centred column, with the testimonial carousel bleeding off the right edge.
- "Sell your home the easy way" is a 2-column split: rounded photo left, step list right.

### Whitespace Philosophy
Generous vertical air between sections (64–72px gaps measured), tight internal spacing in lists (8–12px gaps),
and hairline separators rather than boxes to group step rows.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat on `#fbf9f9` | Sections, text |
| Control | `rgba(88, 64, 50, 0.16) 0 0 0 1px` + `inset 0 -4px 0 0` warm bevel | Secondary buttons (Sign in) |
| Accent control | `rgb(0, 66, 230) 0 0 0 1px, rgba(255,255,255,.25) 0 0 0 1px inset, rgb(0, 33, 217) 0 -4px 0 0 inset` | Primary buttons |
| Card | `rgba(74, 40, 20, 0.15) 0 19px 22.2px -14px, rgba(100, 57, 31, 0.32) 0 0 0 1px` | Testimonial photo cards |
| Floating field | `rgba(88,64,50,.16) 0 0 0 1px, rgba(88,64,50,.19) 0 16px 20.4px -9px, rgba(88,64,50,.12) 0 37px 37.3px 3px, #fff 0 0 0 1px inset, rgba(88,64,50,.1) 0 -3px 0 0 inset` | Hero address field |

All shadows are tinted with warm brown (`rgb(88, 64, 50)`), which keeps elevation consistent with the paper canvas.
The inset bottom bevel is the system's signature: controls look like slightly raised keys.

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 4px | `--radius-2x`; small chips |
| `{rounded.sm}` | 8px | `--radius-4x`; icon tiles in step lists |
| `{rounded.button-soft}` | 10px | Tertiary "Visit help center" button |
| `{rounded.button}` | 12px | `--radius-6x`; all 44px buttons, nav link hover pills |
| `{rounded.md}` | 16px | `--radius-8x` |
| `{rounded.card}` | 20px | `--radius-10x`; photo cards, address field |
| `{rounded.lg}` | 30px | Large rounded media |
| `{rounded.pill}` | 9999px | Pills (measured 999px / `--radius-full: 1998px`) |

No clip-paths, skews or notched shapes were measured.

## Components

### Buttons
**`button-primary`** — accent blue, `#ffffff` 16px/500 label at -0.8px, height 44px, padding 0 24px, radius 12px,
with the accent control shadow (1px `#0042e6` ring, 25% white inner ring, `#0021d9` 4px bottom bevel).
- Hover / active: the CSS defines `--nh-control-rim-accent-hover` (`0 0 0 1px #002b96, inset 0 0 0 1px #ffffff40, inset 0 -4px 0 0 #00000024`)
  and `--nh-control-rim-accent-active` (`0 0 0 1px #0042e6, inset 0 0 0 1px #ffffff40` — the bevel disappears when pressed).

**`button-secondary`** — "Sign in": 90% white fill, `#25201d` text, same 44px/12px geometry, warm 1px ring + 4px bevel.
- Hover (measured): ring strengthens from `rgba(88,64,50,0.16)` to `rgba(88,64,50,0.3)`, bevel weakens to 0.05.

**`button-tertiary`** — "Visit help center": `#ede8e8` fill, `#25201d` text, 10px radius, no shadow.

### Address Field
**`address-field`** — the hero's main input: `#ffffffe6` fill, 16px Graphik at -0.8px, placeholder "Enter your home address"
in `rgba(37, 32, 29, 0.6)`, location-pin icon at left, padding 0 80px 0 48px, height 64px, radius 20px, floating
warm shadow, blue square search button inside the right edge. CSS also defines `--nh-address-field-hover` and
`--nh-address-field-active` (adds a 3px `#5840324d` ring).

### Navigation
**`nav`** — 72px tall, `#fbf9f9` background, wordmark left, links right.
**`nav-link`** — 16px/500 Graphik, 44px tall hit area, 12px radius; hover (measured) fills with `rgba(88, 64, 50, 0.08)`.

### Cards
**`card-story`** — testimonial media card: `#f9f8f8` fill, 20px radius, padding 0, 330px tall (587px wide for the
feature video card, 310px for the others), warm card shadow. Quote text sits below the card in 16px `#23201d`,
then a 1px `#dfdbd8` rule and name (16px/500) + location (16px/400 `#5e564e`).

### Step List
Rows of icon tile + 20px/500 title (`{typography.title}`) separated by `#dfdbd8` hairlines; the last row expands
with 14px muted description ("Pick your close date, sign, and move when you are ready.").

### Links
**`link`** — accent `#0042e6` (100 weighted characters measured in accent blue), 12.923px/500 in illustrated cards.

### Footer
**`footer`** — warm vertical gradient `#e8e3df` → `#f1eeee`, `#23201d` text, opens with "The better way to buy and sell" (18px/500).

## Design System Architecture

Opendoor publishes **no public design system** documentation, token package or brand portal that we could find.
Searches: "Opendoor design system brand guidelines", "Opendoor press kit logo brand assets newsroom".
The only official-adjacent source found is the illustration agency's case study
([DKNG, 2022](https://www.dkngstudios.com/blog/2022/5/23/opendoor-brand-illustrations)), which states that "as part of
the company's recent rebrand, Opendoor turned to DKNG to develop an illustration style and library of illustrated
assets" in four tiers: hero illustrations, spot illustrations, full-colour icons and one-colour icons.
The rest of this section describes the de-facto system visible in the live CSS on https://www.opendoor.com/.

- **Token architecture:** the site is built on Tailwind CSS v4 theme variables (`--spacing: .25rem`, `--text-sm`,
  `--radius-lg`, `--breakpoint-lg`, `--ease-in-out`, `--tracking-tighter`), extended with brand semantic colour tokens
  named by role: `--color-ink`, `--color-ink-muted`, `--color-ink-faint`, `--color-canvas`, `--color-canvas-muted`,
  `--color-canvas-deep`, `--color-canvas-dark`, `--color-line`, `--color-line-soft`, `--color-line-strong`,
  `--color-accent`, `--color-accent-hover`, `--color-accent-soft`, `--color-state-hover`, `--color-success`, `--color-error`.
  A brand radius scale is expressed in 2px multiples: `--radius-2x: 4px`, `--radius-4x: 8px`, `--radius-6x: 12px`,
  `--radius-8x: 16px`, `--radius-10x: 20px`, `--radius-12x: 24px`, `--radius-16x: 32px`, `--radius-32x: 64px`.
- **Component tokens:** an `--nh-` prefixed layer holds composite control styles: `--nh-btn-primary`,
  `--nh-btn-primary-active`, `--nh-btn-primary-hover-ring`, `--nh-btn-focus`, `--nh-control-rim`,
  `--nh-control-rim-accent(-hover|-active)`, `--nh-btn-secondary(-hover|-active)`, `--nh-faq-card(-hover|-active)`,
  `--nh-address-field(-hover|-active)` — each a full multi-layer `box-shadow` per state.
- **Theming:** single light theme measured; dark surfaces are expressed as tokens (`--color-canvas-dark`,
  `--color-ink-light`, `--color-ink-light-muted`) rather than a mode switch.
- **Type & spacing:** 4px Tailwind spacing base; Tailwind type scale (`--text-xs` … `--text-4xl`) alongside
  site-specific sizes (`--text-input-md: 16px`, `--text-input-placeholder-sm: 14px`); a custom easing
  `--ease-novo-decelerate: cubic-bezier(.22,1,.36,1)`.
- **Component inventory (measured on the homepage):** primary / secondary / tertiary buttons, nav links, address
  field, testimonial media card with play/caption/mute controls, carousel arrows, step list, comparison table, FAQ cards.
- **Accessibility:** no published rules; the CSS ships a focus colour token (`--nh-btn-focus: #81a2f2`). Footer copy
  states "Opendoor Labs Inc. is dedicated to improving the accessibility…" (measured text).
- **Delivery:** not public.

## Do's and Don'ts

### Do
- Use `#fbf9f9` as the page and `#23201d` as primary ink; use `#5e564e` for long-form secondary copy.
- Reserve `#0042e6` for the primary action and accent links.
- Give every button 44px height, 12px radius and the 4px inset bottom bevel.
- Tint shadows warm brown (`rgb(88, 64, 50)` / `rgb(74, 40, 20)`).
- Track text tight: -0.02em for reading sizes, -0.05em for buttons and big headings.
- Round photos at 20px and pair them with warm, natural family photography.

### Don't
- Don't introduce a second saturated colour.
- Don't use pure black or pure white as the page background.
- Don't set headlines below the hero in a serif.
- Don't use neutral grey drop shadows.
- Don't use weights above 500.
- Don't remove the bevel from resting buttons (it disappears only in the active state).

## Responsive Behavior

### Breakpoints
CSS defines `--breakpoint-lg: 1024px` and `--breakpoint-xl: 1200px`. Measured at 1280px and 390px:

| Element | 1280px | 390px |
|---|---|---|
| Hero h1 | 60px / 64px / -1.8px | 40px / 44px / -1.6px |
| Section h2 | 48px / 50px / -2.4px | 28px / 30px / -1.4px |
| Primary button | 16px/500, auto width | 14px/500 -0.7px, full width (350px) |
| Disclosure text | 12px / 18px | 13px / 17px / -0.26px |
| Header | 72px | 72px |

### Touch Targets
Buttons and nav links are 44px tall at both widths; the address field is 64px tall.

### Collapsing Strategy
- The primary CTA becomes full-width on mobile ("Check value", 350px wide).
- Headline sizes drop by about a third while tracking stays proportionally tight.

### Image Behavior
Photography keeps its 20px rounded corners at every size; the hero photo stays behind the headline and address field.

## Iteration Guide

1. Canvas `{colors.canvas}`, ink `{colors.ink}`, secondary text `{colors.ink-muted}`.
2. One `button-primary` per view; secondary actions use `button-secondary` (white, warm ring).
3. Hero: `{typography.display-hero}`; all other headings `{typography.heading-xl}` / `{typography.title}`.
4. Body copy `{typography.body}` with -0.32px tracking; buttons `{typography.button}` with -0.8px.
5. Cards and media at `{rounded.card}` 20px with the warm card shadow.
6. Spacing in 4px steps; 8/12/20/24 for components, 48/64/72 between sections.
7. When you need a state style, copy the matching `--nh-*` shadow rather than inventing a colour change.
