---
version: alpha
name: Rivian
category: "Energy & Climate"
description: "Rivian's site is a photo-led, near-monochrome system set entirely in its proprietary Adventure face (a Pentagram adaptation of Söhne) at 400/500/600 — a 72px/600 hero with -3px tracking, 200px/500 model marquees, 16px/24px body — on a #f2f2f2 product canvas with #ffffff surfaces, #000000 and #151515 ink, #212121 footer, and a single yellow voltage (#ffaa00, hover #ffbd2e) on 9999px pills; 40px-radius 56px buttons, 12px floating nav, 20px media cards."

colors:
  primary: "#ffaa00"
  primary-hover: "#ffbd2e"
  primary-hover-large: "#ffb51b"
  on-primary: "#000000"
  brand-alt: "#ffac00"
  canvas: "#f2f2f2"
  surface: "#ffffff"
  surface-alt: "#fafafa"
  surface-tertiary: "#ececec"
  ink: "#000000"
  ink-inverse: "#ffffff"
  ink-nav: "#151515"
  ink-secondary: "#494949"
  ink-tertiary: "#636363"
  ink-footer-muted: "#b8b8b8"
  surface-invert: "#000000"
  surface-invert-hover: "#151515"
  surface-invert-secondary: "#212121"
  surface-invert-tertiary: "#494949"
  stroke-tertiary: "#cbcbcb"
  nav-border: "#d1d1d180"
  hover-overlay: "#0000001a"
  link-hover: "#0e5d8f"
  tile-green: "#629b5c"
  tile-orange: "#e84826"
  tile-blue: "#77afd8"
  success: "#4a8231"
  error: "#dc3127"
  warning: "#d58103"
  info: "#005e7d"
  disabled: "#8e8e8e"

typography:
  model-marquee:
    fontFamily: "Adventure, HelveticaNeue, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 200px
    fontWeight: 500
    lineHeight: 192px
    letterSpacing: -5px
  model-marquee-mobile:
    fontFamily: "Adventure, HelveticaNeue, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 96px
    fontWeight: 500
    lineHeight: 92.16px
    letterSpacing: -2.4px
  display-hero:
    fontFamily: "Adventure, HelveticaNeue, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 72px
    fontWeight: 600
    lineHeight: 72px
    letterSpacing: -3px
  display-hero-mobile:
    fontFamily: "Adventure, HelveticaNeue, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 44px
    fontWeight: 600
    lineHeight: 48px
    letterSpacing: -2px
  headline-xl:
    fontFamily: "Adventure, HelveticaNeue, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 56px
    fontWeight: 600
    lineHeight: 60px
    letterSpacing: -2.5px
  headline-lg:
    fontFamily: "Adventure, HelveticaNeue, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 44px
    fontWeight: 600
    lineHeight: 44px
    letterSpacing: -0.88px
  headline-md:
    fontFamily: "Adventure, HelveticaNeue, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 36px
    fontWeight: 600
    lineHeight: 40px
    letterSpacing: -1.5px
  body:
    fontFamily: "Adventure, HelveticaNeue, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  label-base:
    fontFamily: "Adventure, HelveticaNeue, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 18px
    letterSpacing: -0.16px
  label-sm:
    fontFamily: "Adventure, HelveticaNeue, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 16px
    letterSpacing: -0.14px
  button-lg:
    fontFamily: "Adventure, HelveticaNeue, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: -0.5px
  caption:
    fontFamily: "Adventure, HelveticaNeue, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: -0.12px
  micro:
    fontFamily: "Adventure, HelveticaNeue, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 14px

rounded:
  nano: 4px
  support-card: 8px
  micro: 12px
  card: 16px
  macro: 20px
  mega: 40px
  pill: 9999px

spacing:
  xxs: 4px
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
  tile-x: 28px
  xl: 32px
  xxl: 40px
  section-gap: 48px
  navbar-toolbar: 50px
  section: 80px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.label-sm}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 32px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.mega}"
    padding: 8px 16px
    height: 56px
  button-primary-large-hover:
    backgroundColor: "{colors.primary-hover-large}"
  button-secondary:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.mega}"
    padding: 8px 16px
    height: 56px
  button-secondary-hover:
    backgroundColor: "{colors.surface-tertiary}"
  button-dark:
    backgroundColor: "{colors.surface-invert}"
    textColor: "{colors.surface}"
    typography: "{typography.label-base}"
    rounded: "{rounded.mega}"
    padding: 8px 16px
    height: 56px
  button-dark-hover:
    backgroundColor: "{colors.surface-invert-hover}"
  button-subscribe:
    backgroundColor: "{colors.brand-alt}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.mega}"
    padding: 20px 100px
    height: 56px
  chip:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.label-sm}"
    rounded: "{rounded.pill}"
    padding: 4px 8px 4px 12px
    height: 32px
  nav:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink-nav}"
    rounded: "{rounded.micro}"
    border: "1px solid {colors.nav-border}"
    boxShadow: "0 2px 8px rgba(0,0,0,.15)"
    height: 56px
  nav-link:
    textColor: "{colors.ink}"
    rounded: "{rounded.pill}"
    height: 32px
  nav-link-hover:
    backgroundColor: "{colors.hover-overlay}"
  text-input-dark:
    backgroundColor: "{colors.surface-invert-secondary}"
    textColor: "{colors.surface}"
    typography: "{typography.body}"
    rounded: "{rounded.nano}"
    padding: 20px 16px 0px
    height: 56px
  media-card:
    backgroundColor: "{colors.surface-invert}"
    rounded: "{rounded.macro}"
  shortcut-tile:
    backgroundColor: "{colors.brand-alt}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.micro}"
    padding: 32px 28px
    height: 156px
  vehicle-select-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.card}"
    padding: 32px
  support-card:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink-nav}"
    rounded: "{rounded.support-card}"
    border: "1px solid {colors.stroke-tertiary}"
    padding: 40px
  link-support:
    textColor: "{colors.ink-nav}"
  link-support-hover:
    textColor: "{colors.link-hover}"
  footer:
    backgroundColor: "{colors.surface-invert-secondary}"
    textColor: "{colors.ink-footer-muted}"
    typography: "{typography.micro}"
---

## Overview

Rivian's web presence (rivian.com, measured at 1280px and 390px) is an editorial vehicle catalogue
built almost entirely from full-bleed photography, giant model names and a handful of rounded pills.
The captured homepage opens with a floating white navigation bar inset from the viewport edges, a
horizontally scrolling hero carousel of lifestyle photography (a laughing face in close-up, a forest
trail) carrying white headlines, and then drops into a long #f2f2f2 "product band" in which a
vehicle — here the R1S — is introduced by its name set at monumental size above a clean side-profile
render.

The palette is deliberately quiet. Almost everything is black, white or a grey from the site's
`--stone-*` / `--surface-*` scale. The only chromatic voltage in the interface chrome is a warm yellow:
`#ffaa00` (the `--brand` token, `--yellow-400`) on the "Demo drive" pill in the nav, and `#ffac00` on
the newsletter Subscribe button and the shop tile. Colour otherwise arrives through photography and
through a row of solid-colour shortcut tiles (`#ffac00`, `#629b5c`, `#e84826`, `#77afd8`).

Type is a single proprietary family served as `Adventure`. Rivian's identity designer Pentagram
states the typeface "is adapted from the contemporary grotesk Söhne, originally designed by Kris
Sowersby at Klim Type Foundry" ([Pentagram](https://www.pentagram.com/work/rivian/story)). On the site
it runs at 400 for body, 500 for model marquees and large buttons, and 600 for headlines and labels,
always with negative tracking at display sizes.

Key characteristics:
- Viewer-facing canvas `#f2f2f2` (the largest painted area); `#ffffff` is the body background and the surface of the nav and pills.
- Hero h1 "Find your Rivian": Adventure 72px / 600 / 72px line-height / -3px tracking, white on photography.
- Section headline "R2 is here": 56px / 600 / 60px / -2.5px.
- Model page marquee "R1S": 200px / 500 / 192px / -5px (mobile 96px / 500 / 92.16px / -2.4px).
- Body: 16px / 400 / 24px.
- Primary CTA "Demo drive": `#ffaa00` with `#000000` text, 14px / 600, 9999px pill, 32px tall, padding 8px 16px; hover `#ffbd2e`.
- Large CTAs: 56px tall, 40px radius (`--radius-mega`), 14px / 500 / -0.5px.
- Floating nav: white, 12px radius, 1px `#d1d1d180` border, `0 2px 8px rgba(0,0,0,.15)` shadow, 56px tall.
- Footer `#212121` with `#b8b8b8` and `#ffffff` text.

A note on `ink`: by raw character count the homepage's most-read text colour is `#ffffff` (7293
weighted characters, against 1052 for `#000000` and 691 for `#151515`), because most copy sits on
full-bleed photography, black media cards and the dark footer. White is unreadable on the `#f2f2f2`
canvas, so `colors.ink` is `#000000` (`--text-primary`), the most-read colour that is readable on the
canvas; `ink-nav` `#151515` is the header and support-page text. White copy over imagery and dark
surfaces is `ink-inverse` `#ffffff`.

## Colors

### Brand & Accent
- **Primary / brand yellow** `#ffaa00` — `--brand: var(--yellow-400)` where `--yellow-400: 40 100% 50%`. Demo drive pill, Book a drive pill. Also the `--ring` colour.
- **Primary hover (small pill)** `#ffbd2e` — measured hover of the nav "Demo drive" pill.
- **Primary hover (large pill)** `#ffb51b` — measured hover of the 56px "Book a drive" pill on /r1s.
- **On primary** `#000000` — text on yellow is always black.
- **Brand alt** `#ffac00` — Subscribe button and the "Shop" shortcut tile (a distinct, measured value two steps off `#ffaa00`).

### Surface
- **Canvas** `#f2f2f2` — `--surface-secondary`; the product band and most of the page area.
- **Surface** `#ffffff` — `--surface-primary`; body background, nav bar, white pills.
- **Surface alt** `#fafafa` — `--surface-primaryAlt`.
- **Surface tertiary** `#ececec` — `--surface-tertiary`; also the measured hover of white pills.
- **Surface invert** `#000000` — `--surface-invertPrimary`; media cards, black pills.
- **Surface invert hover** `#151515` — measured hover of the black "Design yours" pill.
- **Surface invert secondary** `#212121` — `--surface-invertSecondary`; footer and the dark newsletter input.
- **Surface invert tertiary** `#494949` — `--surface-invertTertiary`.

### Text
- **Ink** `#000000` — `--text-primary`; text on the canvas and white surfaces.
- **Ink inverse** `#ffffff` — `--text-invertPrimary`; copy over photography and dark sections (the most-read colour by raw count).
- **Ink nav** `#151515` — header and support-page text colour.
- **Ink secondary** `#494949` — `--text-secondary`.
- **Ink tertiary** `#636363` — `--text-tertiary`; legal disclaimers on model pages.
- **Footer muted** `#b8b8b8` — footer link text.

### Strokes & overlays
- **Stroke tertiary** `#cbcbcb` — `--stroke-tertiary`; support-card borders.
- **Nav border** `#d1d1d180` — the floating nav's 1px hairline.
- **Hover overlay** `#0000001a` — `rgba(0,0,0,0.1)` behind nav items on hover (`--accent: var(--black) /0.1`).
- **Link hover** `#0e5d8f` — measured hover colour of support-centre text links.

### Shortcut tiles
- `#ffac00` (Shop), `#629b5c` (Get updates), `#e84826`, `#77afd8` — measured backgrounds of the 12px-radius tiles on the homepage.

### Semantic
Declared in the site's root custom properties:
- **Success** `#4a8231` (`--semantic-success`)
- **Error** `#dc3127` (`--semantic-error`)
- **Warning** `#d58103` (`--semantic-warning`)
- **Info** `#005e7d` (`--semantic-info`)
- **Disabled** `#8e8e8e` (`--semantic-disabled`)

Rivian Green: Rivian announced on January 20, 2026 that it standardised "Rivian Green" with Pantone and
calls it "the foundational neutral of our palette"
([Rivian Stories](https://rivian.com/stories/pantone-partner-rivian-green-color)). No hex or Pantone
number is published there, and it does not appear as a measured web colour, so it is not declared as a
token. The CSS does contain a `--rivian-green: var(--mint-400)` alias.

## Typography

### Font Family
- **Adventure** — served via `@font-face` as `Adventure` (also `adventureFont`), with the stack
  `Adventure, HelveticaNeue, "Helvetica Neue", Helvetica, Arial, sans-serif`. Loaded weights measured:
  400, 500, 600, 700. Exposed as `--font-adventure: "Adventure"`.
- **Adventure Mono** — declared as `--font-adventure-mono`. Pentagram documents "a monospace version
  of the font for the speedometer".
- **Liga** — a small face loaded at 500 (8 weighted characters measured); not a text face for copy.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Where measured |
|---|---|---|---|---|---|
| model-marquee | 200px | 500 | 192px | -5px | /r1s h1 "R1S" |
| model-marquee-mobile | 96px | 500 | 92.16px | -2.4px | /r1s h1 at 390px |
| display-hero | 72px | 600 | 72px | -3px | homepage h1 |
| display-hero-mobile | 44px | 600 | 48px | -2px | homepage h1 at 390px |
| headline-xl | 56px | 600 | 60px | -2.5px | homepage h2 |
| headline-lg | 44px | 600 | 44px | -0.88px | /demo-drive h2 |
| headline-md | 36px | 600 | 40px | -1.5px | /r1s h3 |
| body | 16px | 400 | 24px | normal | homepage paragraph |
| label-base | 16px | 600 | 18px | -0.16px | /demo-drive Subscribe |
| label-sm | 14px | 600 | 16px | -0.14px | Demo drive pill |
| button-lg | 14px | 500 | 16px | -0.5px | 56px pills |
| caption | 12px | 400 | 16px | -0.12px | /r1s disclaimer |
| micro | 10px | 400 | 14px | normal | body/footer root |

The homepage also paints an "R1S" product name at 320px in the product band (measured font size;
weight not isolated), and 24px / -0.5px for the vehicle tagline line.

### The site's own type scale
The CSS declares a named scale: `--text-xs 12px`, `--text-sm 14px`, `--text-base 16px`,
`--text-lg 20px`, `--text-xl 24px`, `--text-2xl 32px`, `--text-3xl 36px`, `--text-4xl 44px`,
`--text-5xl 56px`, `--text-6xl 72px`, `--text-7xl 96px`, `--text-8xl 120px`, `--text-9xl 200px`.
Semantic roles sit on top: `--text-display-*` (600, `--tracking-display: -0.025em`,
`--leading-display: 0.96`), `--text-headline-*` (600, `--tracking-headline: -0.02em`,
`--leading-headline: 1`), `--text-label-*` (600, `--tracking-label: -0.01em`) and `--text-body-*`
(`--tracking-body: -0.01em`).

### Principles
- One family, three working weights. Do not introduce a second typeface for headlines.
- Tracking tightens with size: -0.12px at 12px, -0.5px at 14px buttons, -3px at 72px, -5px at 200px.
- Display line-heights are tight (72/72, 200/192); body is open (16/24).
- Model names are the hero of a product section; they are set larger than any headline.

### Note on Font Substitutes
Adventure is proprietary to Rivian and not licensed for public use. Pentagram identifies its basis as
Söhne by Klim Type Foundry, so Söhne (commercial, Klim) is the closest licensed substitute. The site's
own fallback stack is HelveticaNeue / Helvetica Neue / Helvetica / Arial — use that when Söhne is not
available, and keep the measured negative tracking.

## Layout

### Spacing System
Measured gaps and paddings cluster on a 4px grid: 4, 8, 12, 16, 20, 28, 32, 40, 48 and 80px.
- 8px and 16px are the most frequent paddings (pill interiors: 8px 16px).
- 80px is the recurring section padding.
- 40px gaps separate large blocks; 12px is the nav's inset from the viewport (`--consumer-ui-navbar-root-padding: 12px`).
- `--consumer-ui-navbar-toolbar-height: 50px`; the nav max width is `--consumer-ui-navbar-max-width: 1920px`.

### Grid & Container
- Desktop nav spans 1256px of the 1280px viewport (12px inset each side).
- The hero is a horizontal carousel of slides that bleed past the viewport edge, with circular white arrow buttons and a white pill pager.
- The product band centres one vehicle per screen: marquee name, side-profile render, one tagline, one spec line, and a pair of 56px pills.
- Media cards in the homepage measured 550 × 680px with a 20px radius.
- Shortcut tiles measured 267 × 156px with 32px 28px padding.

### Whitespace Philosophy
The capture shows very long, empty stretches of `#f2f2f2` around each vehicle. The page scroll height
measured 16062px at 1280px wide — space is used to slow the reader down so each vehicle reads as an
object on a plinth.

### Aspect ratios
The CSS declares named ratios: `--aspect-wide 5/4`, `--aspect-wider 4/3`, `--aspect-widest 3/2`,
`--aspect-tall 4/5`, `--aspect-taller 3/4`, `--aspect-tallest 2/3`.

## Elevation & Depth

| Level | Value | Use |
|---|---|---|
| Flat | none | Almost everything: pills, cards, tiles |
| Nav | `0 2px 8px rgba(0,0,0,.15)` (`--shadow-nav`) | Floating white nav bar |
| Base | `0 6px 16px -4px rgba(0,0,0,.08),0 3px 8px -2px rgba(0,0,0,.08)` (`--shadow-base`) | Declared token |
| Hero | `0 6px 20px -6px rgba(0,0,0,.08),0 3px 10px -3px rgba(0,0,0,.08)` (`--shadow-hero`) | Declared token |

Depth comes primarily from photography and from the vehicle renders' own ground shadows. The only
shadow measured on a live homepage element is the nav's.

### Motion
The CSS ships named easing curves rather than one generic ease:
- `--ease-shift-magnetic: cubic-bezier(0.83,0,0.17,1)` (the default transition timing function)
- `--ease-shift-magnetic-70: cubic-bezier(0.7,0,0.3,1)`, `--ease-shift-magnetic-50: cubic-bezier(0.5,0,0.5,1)`
- `--ease-attract-standard: cubic-bezier(0.4,0,0.2,1)`, `--ease-attract-enter: cubic-bezier(0,0,0.2,1)`, `--ease-attract-emphasized: cubic-bezier(0.2,0,0,1)`
- `--ease-repel-exit: cubic-bezier(0.4,0,1,1)`, `--ease-repel-aggressive-exit: cubic-bezier(0.8,0,1,1)`

## Shapes

### Border Radius Scale
The site names its radii: `--radius-nano: 4px`, `--radius-micro: 12px`, `--radius-macro: 20px`,
`--radius-mega: 40px`. Measured additions: 8px (support cards), 16px (vehicle-select cards) and 9999px
pills.

| Token | Value | Use |
|---|---|---|
| nano | 4px | dark newsletter input |
| support-card | 8px | support-centre category cards |
| micro | 12px | floating nav, shortcut tiles |
| card | 16px | /demo-drive vehicle cards |
| macro | 20px | homepage media cards |
| mega | 40px | 56px CTA pills |
| pill | 9999px | nav Demo drive, nav item hovers, chips |

### Shape language
- Every button is fully rounded; there are no square or skewed buttons.
- Containers are soft rectangles (12–20px); nothing is sharp-cornered except full-bleed imagery.
- The carousel arrows are white circles with a black arrow glyph; the pager is a white pill with a black active dash and grey dots.
- No clip-paths, skews or notches were measured.

## Components

### Buttons
**Primary (nav) — "Demo drive"**
- Background `#ffaa00`, text `#000000`, 14px / 600 / 16px, tracking -0.14px.
- Radius 9999px, padding 8px 16px, height 32px.
- Hover background `#ffbd2e`.

**Primary large — "Book a drive" (/r1s)**
- Background `#ffaa00`, text `#000000`, 14px / 500 / 16px, tracking -0.5px.
- Radius 40px, padding 8px 16px, height 56px.
- Hover background `#ffb51b`.

**Secondary — "Design yours" / "Explore offers"**
- Background `#ffffff`, text `#000000`, 14px / 500 / -0.5px, radius 40px, height 56px, padding 8px 16px.
- Hover background `#ececec`.
- On photography the same pill appears as a white-outlined transparent variant ("Book a drive" in the hero capture).

**Dark — "Explore" / "Watch the video"**
- Background `#000000`, text `#ffffff`, 16px / 600, radius 40px, height 56px.
- Hover background `#151515` (measured on /r1s).

**Subscribe**
- Background `#ffac00`, text `#000000`, 16px / 500 / 18px, radius 40px, padding 20px 100px, 56px tall.

### Chips
- /demo-drive distance chip "20 miles": `#f2f2f2`, `#000000` text, 14px / 600 / 16px, 9999px, 32px tall, padding 4px 8px 4px 12px.

### Cards & Containers
- **Media card** — `#000000` background (photo/video fills it), 20px radius, 550 × 680px on desktop.
- **Shortcut tile** — solid colour (`#ffac00`, `#629b5c`, `#e84826`, `#77afd8`), 12px radius, 32px 28px padding, 156px tall, 14px / 500 label.
- **Vehicle-select card (/demo-drive)** — `#f2f2f2`, 16px radius, 32px padding, 16px / 400 / 24px body text.
- **Support card (/support)** — `#ffffff`, 1px solid `#cbcbcb`, 8px radius, 40px padding.

### Inputs & Forms
- **Newsletter input (footer)** — `#212121` background, `#ffffff` text, 16px / 400 / 24px, 4px radius,
  56px tall, padding 20px 16px 0px (room for a floating label above the value).

### Navigation
- Floating white bar, 12px radius, 1px `#d1d1d180` border, `0 2px 8px rgba(0,0,0,.15)` shadow, 56px tall at 1280px, 50px at 390px.
- Left: RIVIAN wordmark. Centre: Vehicles, Charging, Technology, Discover, Gear Shop as pill buttons (32px, 9999px); hover fills `rgba(0,0,0,0.1)`.
- Right: yellow Demo drive pill, then circular icon buttons (chat, account).
- A yellow circular chat bubble floats on the right edge over the canvas.

### Links
- Support-centre text links: `#151515`, hover `#0e5d8f`, no underline change measured.

### Footer
- `#212121` background, 496px tall on the homepage; link text `#b8b8b8` with `#ffffff` headings; root type 10px / 14px.
- Includes the newsletter sign-up with the dark input and `#ffac00` Subscribe pill ("Never miss an adventure").

### Signature components
- **Model marquee** — vehicle name set at 200px / 500 (320px on the homepage band) in `#000000`, centred above a full side-profile render.
- **Spec line** — one line of 16px text with price, lease and EPA range separated by middle dots and pipes, then two 56px pills.

## Design System Architecture

**No public design system is published.** Searches for a Rivian design system, token package, brand
guidelines, typeface documentation and engineering write-ups (listed in `SOURCES.json`) found no
official documentation site, npm/GitHub token package or Figma kit. Official sources consulted:
[Pentagram's Rivian case study](https://www.pentagram.com/work/rivian/story) (typeface origin),
[Rivian Trademark Guidelines](https://rivian.com/en-US/legal/brand) (marks only, no specs) and
[Rivian × Pantone story](https://rivian.com/stories/pantone-partner-rivian-green-color) (Rivian Green,
no code). Everything below is the de-facto system read from the custom properties rivian.com ships.

### Token architecture (as shipped)
- **Primitive ramps as HSL triplets** — `--stone-50 … --stone-950`, `--yellow-100 … --yellow-900`,
  `--mint-*`, `--teal-*`, `--orange-*`, `--red-*`, `--green-*`, `--blue-*`, `--amber-*`, plus
  `--black: 0 0% 0%` and `--white: 0 0% 100%`. Values are bare triplets (e.g. `--yellow-400: 40 100% 50%`).
- **Named brand aliases** — `--brand: var(--yellow-400)`, `--brand-accent: var(--yellow-300)`,
  `--rivian-green: var(--mint-400)`, `--rivian-orange: var(--orange-500)`, `--black-forest: var(--mint-900)`,
  `--river-bed: var(--teal-500)`, `--cloud: var(--stone-50)`.
- **Semantic role pairs** — `--primary` / `--primary-foreground` / `--primary-accent`, `--secondary`,
  `--muted`, `--accent`, `--destructive`, `--success`, `--warning`, `--info`, `--card`, `--popover`,
  `--border`, `--input`, `--ring: var(--yellow-400)`, `--overlay: var(--black) /0.5`.
- **A second, hex-valued semantic layer** — `--surface-primary #fff`, `--surface-secondary #f2f2f2`,
  `--surface-tertiary #ececec`, `--surface-invertSecondary #212121`, `--text-primary #000`,
  `--text-secondary #494949`, `--text-tertiary #636363`, `--stroke-primary #000`, `--stroke-tertiary #cbcbcb`,
  `--semantic-success #4a8231`, `--semantic-error #dc3127`.
- **Component-scoped tokens** — `--consumer-ui-navbar-*` and `--consumer-ui-in-page-nav-*` (heights,
  padding, max widths).

### Theming
- Inverse counterparts are declared as tokens (`--background-inverse`, `--foreground-inverse`,
  `--accent-inverse`, `--muted-inverse`, `--muted-foreground-inverse`, `--surface-invert*`,
  `--text-invert*`, `--stroke-invert*`). On the measured pages they are applied per section (dark hero,
  black media cards, dark footer); no site-wide dark-mode switch was observed.

### Type & spacing systems
- Type uses a fixed size ladder (`--text-xs` 12px … `--text-9xl` 200px) with paired line heights, and
  fluid display/headline roles defined with `clamp()` — e.g.
  `--text-display-base: clamp(var(--text-5xl),5.21vi + 29.28px,var(--text-7xl))`.
- Every fluid role has a container-query twin suffixed `-cq` using `cqi` units
  (`--text-display-base-cq: clamp(var(--text-5xl),5.21cqi + 29.28px,var(--text-7xl))`).
- Spacing values measured on the page sit on a 4px grid; no spacing tokens are declared in root vars.

### Component model
Only what is observable: pills in two heights (32px and 56px) and two radii (9999px and 40px); yellow,
white and black fills; floating nav; carousel with arrow buttons and a pager; colour tiles; media cards;
selection cards; chips; support cards; dark floating-label input. No official inventory is published.

### Accessibility
No published accessibility mandate was found. The shipped `--ring` focus colour is `--yellow-400`;
the large CTAs are 56px tall and nav items 32px.

### Delivery
No public packages, Figma kit or versioning are published. The type is proprietary
([Pentagram](https://www.pentagram.com/work/rivian/story)), and Rivian marks may not be used without
written authorisation ([Rivian Trademark Guidelines](https://rivian.com/en-US/legal/brand)).

## Do's and Don'ts

### Do
- Set every word in Adventure (or Söhne / Helvetica Neue as substitute) at 400, 500 or 600.
- Use `#ffaa00` with black text for the single primary action per view; hover to `#ffbd2e`.
- Use 56px / 40px-radius pills for in-page CTAs and 32px / 9999px pills in the nav.
- Pair a white pill with a black pill under each vehicle ("Explore" + "Design yours").
- Let the vehicle name dominate: 200px / 500 / -5px on model pages, 72px / 600 / -3px for the hero h1.
- Keep the page on `#f2f2f2` with white surfaces and lots of empty space.
- Float the nav: white, 12px radius, 12px inset, `0 2px 8px rgba(0,0,0,.15)`.
- Put white text directly on full-bleed photography for hero slides.
- Use the named easing curves (`--ease-shift-magnetic`) for transitions.

### Don't
- Don't add a second accent colour to buttons; the shortcut tiles are the only multi-colour moment.
- Don't use yellow for text or large surfaces.
- Don't square off buttons or use small-radius rectangles for CTAs.
- Don't add shadows to cards; depth comes from photography.
- Don't use positive tracking or uppercase headlines (only the wordmark is spaced capitals).
- Don't invent a Rivian Green hex; none is published.
- Don't crowd the product band with multiple CTAs or dense copy.
- Don't use pure grey photography overlays as a substitute for real imagery.

## Responsive Behavior

### Breakpoints
Measured at 1280px (desktop) and 390px (mobile).

| Element | 1280px | 390px |
|---|---|---|
| Hero h1 | 72px / 600 / 72px / -3px | 44px / 600 / 48px / -2px |
| Homepage h2 | 56px / 600 / 60px / -2.5px | 44px / 600 / 48px / -0.88px |
| Model marquee (/r1s) | 200px / 500 / 192px / -5px | 96px / 500 / 92.16px / -2.4px |
| /demo-drive h1 | 55.968px / 600 | 44px / 600 / 44px / -0.88px |
| Body | 16px / 24px | 16px / 24px |
| Nav height | 56px | 50px |

### Touch Targets
- Large pills are 56px tall; nav pills 32px; the Subscribe button keeps 56px on mobile.

### Collapsing Strategy
- The nav keeps its floating card form on mobile (366px wide at 390px) with its border and shadow.
- Display sizes are fluid via `clamp()` between the declared ladder steps rather than fixed breakpoints.
- The Subscribe button remains `#ffac00`, 40px radius, padding 20px 100px at 390px.

### Image Behavior
- Hero photography is full-bleed and cropped tight (faces, landscapes); vehicle renders are isolated side profiles on the flat canvas with a soft ground shadow.

## Iteration Guide

1. Start with the canvas `#f2f2f2`, white `#ffffff` surfaces, and the Adventure stack.
2. Build the floating nav (white, 12px radius, `#d1d1d180` border, nav shadow) with one `#ffaa00` Demo drive pill.
3. Add a full-bleed photographic hero with a 72px / 600 / -3px white headline, 16px / 24px white body, and a white 56px / 40px pill.
4. For each product, set its name huge (200px / 500 / -5px), place a side-profile image, one tagline, one spec line and a black + white pill pair.
5. Use colour only through the yellow CTA and the solid shortcut tiles.
6. Close with the `#212121` footer, `#b8b8b8` links and the dark 4px-radius input with the `#ffac00` Subscribe pill.
7. Check against the measurements: every radius from 4/8/12/16/20/40/9999px, every size from the table above.
