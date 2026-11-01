---
version: alpha
name: Rolex
category: "Luxury"
description: "Rolex's site is a white (#ffffff) and near-black (#212121) editorial frame around full-bleed watch and cultural photography, set entirely in Monotype's Helvetica Now Text at 300/400/700 with a 71.936px/700 hero headline, RolexFont-S tracked labels, a single Rolex green (#127749) for hover and links, translucent pill buttons (rgba(118,118,118,0.3), 9999px, 0 35px, 44px tall), a 45-degree green gradient CTA and a #f8f8f8 footer."

colors:
  primary: "#127749"
  primary-dark: "#0b3e27"
  focus: "#249a64"
  gradient-green-from: "#10633d"
  gradient-green-to: "#1a915a"
  gradient-green-hover-from: "#0c4c2f"
  gradient-green-hover-to: "#147348"
  rolex-gold: "#926c1c"
  canvas: "#ffffff"
  surface-light-grey: "#f8f8f8"
  ink: "#212121"
  on-dark: "#ffffff"
  grey: "#d4d4d4"
  translucent-dark: "#7676764d"
  translucent-dark-hover: "#54545480"
  translucent-light: "#d4d4d44d"
  hero-overlay: "#000000cc"
  black: "#000000"

typography:
  display-hero:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 71.936px
    fontWeight: 700
    lineHeight: 68.3392px
  display-hero-mobile:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 44px
    fontWeight: 700
    lineHeight: 44px
  section-title:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 53.0006px
    fontWeight: 700
    lineHeight: 53.0006px
  headline-lg:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  headline-lg-mobile:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
  card-title:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 30.614px
    fontWeight: 700
    lineHeight: 30.614px
  caption-title:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 31.44px
  footer-section:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 22px
    fontWeight: 700
    lineHeight: 26.8511px
  body-lead:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 19.0006px
    fontWeight: 300
    lineHeight: 30.401px
  body-lead-mobile:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 300
    lineHeight: 28.8px
  body:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 300
  button:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
  link-inline:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  footer-link:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 15.0006px
    fontWeight: 400
    lineHeight: 26.8511px
  nav-link:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.25px
  breadcrumb:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 300
    lineHeight: 17.16px
  eyebrow:
    fontFamily: "RolexFont-S, sans-serif"
    fontSize: 12.5011px
    fontWeight: 400
    letterSpacing: 1.56264px
  card-label:
    fontFamily: "RolexFont-S, sans-serif"
    fontSize: 10.5384px
    fontWeight: 400
    lineHeight: 15.0699px
    letterSpacing: 1.3173px

rounded:
  subnav: 6.08px
  card: 10px
  toggle: 50px
  circle: 50%
  pill: 9999px

spacing:
  grid-gap: 6px
  xs: 8px
  sm: 12.8px
  md: 16px
  lg: 20px
  xl: 25.6px
  button-x-mobile: 30px
  button-x: 35px
  page-gutter: 102.4px

components:
  button-primary:
    backgroundColor: "{colors.translucent-dark}"
    textColor: "{colors.on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 35px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.translucent-dark-hover}"
  button-primary-mobile:
    padding: 0px 30px
    height: 40px
  button-light:
    backgroundColor: "{colors.translucent-light}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 35px
    height: 44px
  button-green-gradient:
    backgroundImage: "linear-gradient(45deg, rgb(16, 99, 61), rgb(26, 145, 90))"
    textColor: "{colors.on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 35px
    height: 44px
  button-green-gradient-hover:
    backgroundImage: "linear-gradient(45deg, rgb(12, 76, 47), rgb(20, 115, 72))"
  button-text:
    backgroundColor: transparent
    textColor: "{colors.on-dark}"
    typography: "{typography.button}"
    padding: 0px 35px
    height: 44px
  button-text-hover:
    textColor: "{colors.grey}"
  link-inline:
    textColor: "{colors.primary}"
    typography: "{typography.link-inline}"
    padding: 8px 0px
    height: 40px
  link-inline-hover:
    textColor: "{colors.ink}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    padding: 0px 102.4px
    height: 75px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    padding: 12.8px 8px
  nav-link-hover:
    textColor: "{colors.primary}"
  subnav-toggle:
    backgroundColor: "#ffffffb3"
    textColor: "{colors.black}"
    rounded: "{rounded.subnav}"
    padding: 1px 6px
    height: 54px
    boxShadow: "rgba(0, 0, 0, 0.1) 0px 4px 28px 0px"
  card-media:
    textColor: "{colors.on-dark}"
    typography: "{typography.card-label}"
    rounded: "{rounded.card}"
    width: 353px
    height: 589px
  footer:
    backgroundColor: "{colors.surface-light-grey}"
    textColor: "{colors.ink}"
    typography: "{typography.footer-link}"
  footer-link-hover:
    textColor: "{colors.primary}"
  social-link:
    textColor: "{colors.primary}"
    padding: 8px
  social-link-hover:
    textColor: "{colors.ink}"
---

## Overview

Rolex.com is a photography-first luxury site where the interface almost disappears. The capture of the homepage opens with a thin white header bar (75px tall at 1280px) holding only a hamburger "Menu", the gold coronet in the centre, and three small icons (search, store locator, favourites). Everything beneath it is full-bleed imagery: a hero video still of the Grand Staircase of the Opéra national de Paris, a lazy-loaded media rail, then "The Rolex collection" set over a sun-washed silver Datejust on a pale studio sweep, and finally the green ROLEX wordmark above the share bar and the light-grey footer.

The chrome is strictly two colours. `{colors.canvas}` white (`#ffffff`) is the page and header; `{colors.ink}` (`#212121`, declared on `:root` as `--light-black: 33 33 33`) is every piece of text that is not sitting on a photograph. White `{colors.on-dark}` text appears only over imagery. The single chromatic accent in the UI is **Rolex green** `{colors.primary}` (`#127749`, the site's own `--green: 18 119 73`): it is the hover colour of every nav item, footer link and breadcrumb, the default colour of inline "Discover this model" links and social icons, and the base of the green gradient CTA.

Typography is a single family — **Helvetica Now Text** at three weights (300, 400, 700) — with a proprietary display face, **RolexFont-S**, reserved for small, widely tracked labels ("ROLEX WATCHES", "OYSTER PERPETUAL"). Headlines are heavy (700) with line-height at or below 1.0; reading copy is light (300) with generous leading (19.0006px on 30.401px).

Buttons are pills (`{rounded.pill}` 9999px) that do not use a brand fill at all: the default CTA is a **translucent smoked-glass pill** (`rgba(118,118,118,0.3)`) laid over photography, deepening to `rgba(84,84,84,0.5)` on hover.

**Key Characteristics:**
- Full-bleed photography and video carry the page; UI is a thin white header and a light-grey footer.
- Two-tone chrome: `#ffffff` canvas and `#212121` ink; no pure black text.
- One accent: Rolex green `#127749`, used as hover/link colour rather than as a fill.
- Helvetica Now Text 700 for display (71.936px hero, 53.0006px section titles), 300 for body copy.
- RolexFont-S tracked labels at 10.5384px–16.5011px with letter-spacing of 0.125em (`--secondary-letter-spacing`).
- Translucent pill CTAs, 44px tall with 35px side padding; a 45° green gradient pill for "story" CTAs on product pages.
- Media cards with a 10px radius; the product sub-navigation floats as a 6.08px-radius frosted pane with a soft 28px-blur shadow.
- A footer control panel with "Reduce motion" and "Contrast active" toggles.

## Colors

> **Source pages:** home (`https://www.rolex.com/`) and the Datejust model page (`/watches/datejust`). Hex values are computed styles or the site's own `:root` channel triplets.

### Brand & Accent
- **Rolex Green** (`{colors.primary}` — `#127749`): `--green: 18 119 73`. Hover colour for nav, footer and breadcrumb links; default colour for inline text links and social icons.
- **Dark Green** (`{colors.primary-dark}` — `#0b3e27`): `--dark-green: 11 62 39` on `:root`.
- **Focus Green** (`{colors.focus}` — `#249a64`): `--light-green: 36 154 100`; the site sets `--focus: var(--light-green)`.
- **Green Gradient** (`{colors.gradient-green-from}` `#10633d` → `{colors.gradient-green-to}` `#1a915a`): the 45° fill of the "Discover the story" pill (`--gradient-green-from/to`).
- **Green Gradient Hover** (`{colors.gradient-green-hover-from}` `#0c4c2f` → `{colors.gradient-green-hover-to}` `#147348`): measured on hover; matches `--gradient-dark-green-from/to`.
- **Rolex Gold** (`{colors.rolex-gold}` — `#926c1c`): `--rolex-gold: 146 108 28` on `:root`. The coronet in the header is gold artwork; the token is declared but was not measured on a UI element.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page, header bar and share bar.
- **Light Grey** (`{colors.surface-light-grey}` — `#f8f8f8`): `--light-grey: 248 248 248`; the 1052px-tall footer sections block. It is the largest painted background area in the extraction because the rest of the page is imagery.
- **Hero Overlay** (`{colors.hero-overlay}` — `rgba(0,0,0,0.8)`): the `HeroMediaOverlay-Overlay` layer over hero media.
- **Black** (`{colors.black}` — `#000000`): the text colour of the product sub-navigation toggle.

### Text
- **Ink** (`{colors.ink}` — `#212121`): all body, nav and footer text. 1019 of 1201 measured characters on the homepage.
- **On Dark** (`{colors.on-dark}` — `#ffffff`): headlines, captions and buttons laid on photography.
- **Grey** (`{colors.grey}` — `#d4d4d4`): `--grey: 212 212 212`; the hover colour of white text buttons ("Learn more").

### Translucent Button Fills
- **Translucent Dark** (`{colors.translucent-dark}` — `rgba(118,118,118,0.3)`): default CTA fill on dark imagery.
- **Translucent Dark Hover** (`{colors.translucent-dark-hover}` — `rgba(84,84,84,0.5)`).
- **Translucent Light** (`{colors.translucent-light}` — `rgba(212,212,212,0.3)`): CTA fill over light imagery ("Continue" on "The Rolex collection").

### Semantic
No error, warning or success colours were measured, and no official source documents them. Do not invent them.

## Typography

### Font Family

**Helvetica Now Text** is served by rolex.com as a web font in weights 300, 400 and 700 (`--primary-font-family: "Helvetica Now Text",Helvetica,Arial,sans-serif`). Helvetica Now is a Monotype Studio family (designers Charles Nix, Jan Hendrik Weber, Alexander Roth, Juan Villanueva, Terrance Weinzierl, Tom Rickner) in three optical sizes — Micro, Text and Display ([monotype.com](https://www.monotype.com/fonts/helvetica-now)). The site uses the Text cut even at 71.936px.

**RolexFont-S** is a proprietary face served as `--secondary-font-family: RolexFont-S,sans-serif` with `--secondary-letter-spacing: 0.125em`. A second proprietary face, RolexFont-XL, is declared in the stylesheets. Other `:root` font roles: `--quote-font-family: SangBleuKingdom,"Times New Roman",Times,serif` (weight 300) and `--testimony-font-family: "Bebas Neue Pro",sans-serif` (weight 750, italic, semi-expanded). These two were not seen on the measured pages.

### Hierarchy

| Token | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|
| `{typography.display-hero}` | 71.936px | 700 | 68.3392px | — | Hero headline ("Opéra national de Paris", "Datejust") |
| `{typography.display-hero-mobile}` | 44px | 700 | 44px | — | Hero headline at 390px |
| `{typography.section-title}` | 53.0006px | 700 | 53.0006px | — | Section titles on model pages |
| `{typography.headline-lg}` | 40px | 700 | 48px | — | "The Oyster Story", chapo headlines |
| `{typography.headline-lg-mobile}` | 30px | 700 | 36px | — | Same at 390px |
| `{typography.card-title}` | 30.614px | 700 | 30.614px | — | Card / h3 titles ("Datejust") |
| `{typography.caption-title}` | 24px | 700 | 31.44px | — | Bento figcaptions |
| `{typography.footer-section}` | 22px | 700 | 26.8511px | — | Footer section links |
| `{typography.body-lead}` | 19.0006px | 300 | 30.401px | — | Paragraph copy on model pages |
| `{typography.body-lead-mobile}` | 18px | 300 | 28.8px | — | Paragraph copy at 390px |
| `{typography.body}` | 16px | 300 | — | — | Document default |
| `{typography.button}` | 16px | 700 | — | — | Pill labels |
| `{typography.link-inline}` | 16px | 700 | 24px | — | Inline "Discover this model" links |
| `{typography.footer-link}` | 15.0006px | 400 | 26.8511px | — | Footer list links |
| `{typography.nav-link}` | 14px | 400 | 19.25px | — | Header utility links, legal links |
| `{typography.breadcrumb}` | 12px | 300 | 17.16px | — | Breadcrumb |
| `{typography.eyebrow}` | 12.5011px | 400 | — | 1.56264px | RolexFont-S eyebrow ("ROLEX WATCHES") |
| `{typography.card-label}` | 10.5384px | 400 | 15.0699px | 1.3173px | RolexFont-S labels on media cards |

### Principles
- **Heavy headlines, light reading.** Everything ≥ 22px is 700; paragraph copy is 300. Weight 400 is for navigation and footer lists.
- **Tight display leading.** Display line-heights are ≤ 1.0 (68.3392px on 71.936px; 53.0006px on 53.0006px).
- **Tracked proprietary labels.** RolexFont-S always carries 0.125em tracking (1.3173px at 10.5384px, 1.56264px at 12.5011px, 2.06264px at 16.5011px).
- **Fluid sizes.** The fractional pixel values (71.936, 53.0006, 30.614, 19.0006, 15.0006) are the computed result of fluid size rules at a 1280px viewport; at 390px the hero falls to 44px.

### Note on Font Substitutes
Helvetica Now Text is a commercial Monotype font; the site's own fallback chain is `Helvetica, Arial, sans-serif`, so use that when the licence is not available. RolexFont-S is proprietary; the site's declared fallback is plain `sans-serif`. Keep the 0.125em tracking on the substitute so labels keep their widely spaced rhythm.

## Layout

### Spacing System
- **Grid gap**: `{spacing.grid-gap}` 6px (`--grid-gap: 6px`) on a 6-column grid (`--grid-col-num: 6`).
- **Page gutter**: `{spacing.page-gutter}` 102.4px — the header's side padding, equal to `--outer-margin: 8vw` at 1280px.
- **Tokens**: `{spacing.xs}` 8px · `{spacing.sm}` 12.8px · `{spacing.md}` 16px · `{spacing.lg}` 20px · `{spacing.xl}` 25.6px · `{spacing.button-x-mobile}` 30px · `{spacing.button-x}` 35px.
- **Most frequent gap**: 8px (125 occurrences on the homepage, 164 on the Datejust page).
- **Vertical rhythm** uses viewport units: `--s-h-space: 4vh`, `--m-h-space: 7vh`, `--l-h-space: 10vh`.

### Grid & Container
- Content spans the viewport minus `8vw` on each side; columns are computed as `(100vw − 2 × outer-margin − 5 × grid-gap) / 6`.
- The homepage media rail shows cards 353px wide × 589px tall.
- The product sub-navigation toggle is 512px wide and floats centred over content.

### Whitespace Philosophy
Space is created by photography, not by padded white sections. Hero images run edge to edge at full viewport height (the overlay layer is 1280×802); text sits directly on the image. White space appears in the footer and the centred wordmark area, where the green ROLEX logo is given an entire band to itself.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Header, page, footer, cards |
| 1 | `rgba(0, 0, 0, 0.2) 0px 9px 9px -3px` | Measured 5 times on the Datejust page |
| 2 | `rgba(0, 0, 0, 0.1) 0px 4px 28px 0px` | Floating product sub-navigation toggle |
| Overlay | `rgba(0, 0, 0, 0.8)` layer | Hero media overlay (`HeroMediaOverlay-Overlay`) |

### Decorative Depth
Depth comes from photography and from translucency. The CTA pills are semi-transparent fills over images; the product sub-navigation pane is white at 70% opacity (`rgba(255,255,255,0.7)`). There are no shadows on the homepage itself (the extraction's shadow table is empty there).

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.subnav}` | 6.08px | Product sub-navigation pane and toggle, bento captions |
| `{rounded.card}` | 10px | Homepage media cards |
| `{rounded.toggle}` | 50px | Footer control-panel switches |
| `{rounded.circle}` | 50% | Round icon buttons on model pages |
| `{rounded.pill}` | 9999px | All filled CTAs |

### Photography Geometry
Hero imagery is full-bleed, square-cornered. Media cards in the homepage rail are tall portrait tiles (353×589) with a 10px radius. Watches are shot on clean light sweeps or in rich architectural settings; text overlays the image directly without a panel. No skew, clip-path or notched shapes were measured.

## Components

### Buttons

**`button-primary`** — translucent dark pill over imagery ("Discover more", "Play the video").
- Background `{colors.translucent-dark}` (`rgba(118,118,118,0.3)`), text `{colors.on-dark}`, `{typography.button}` 16px/700, radius `{rounded.pill}`, padding `0px 35px`, height 44px (178px wide for "Discover more").
- Hover `button-primary-hover`: background `{colors.translucent-dark-hover}` (`rgba(84,84,84,0.5)`).
- At 390px (`button-primary-mobile`): padding `0px 30px`, height 40px. `:root` declares `--btn-height: 2.5rem` (40px).

**`button-light`** — translucent light pill over light imagery ("Continue" on "The Rolex collection").
- Background `{colors.translucent-light}` (`rgba(212,212,212,0.3)`), text `{colors.ink}`, 16px/700, pill, padding `0px 35px`, 44px tall, 137px wide.

**`button-green-gradient`** — the green story CTA on model pages ("Discover the story").
- Background `linear-gradient(45deg, rgb(16, 99, 61), rgb(26, 145, 90))`, text white, 16px/700, pill, padding `0px 35px`, 44×206px.
- Hover: `linear-gradient(45deg, rgb(12, 76, 47), rgb(20, 115, 72))`.

**`button-text`** — text-only button ("Learn more").
- Transparent, white 16px/700, padding `0px 35px`, 44px tall, radius 0. Hover text `{colors.grey}` `#d4d4d4`.

### Links

**`link-inline`** — "Discover this model".
- `{colors.primary}` text, `{typography.link-inline}` 16px/700/24px, padding `8px 0px`, 40px tall, no underline. Hover `{colors.ink}`.
- White and `#212121` variants of the same link exist on dark and light backgrounds.

### Navigation

**`nav`** — the header.
- White `{colors.canvas}` bar, 75px tall, padding `0px 102.4px`. Left: "Menu" button (hamburger); centre: gold coronet; right: Search, Store locator, Favourites as icons.
- **`nav-link`**: `{colors.ink}`, 14px/400/19.25px, padding `12.8px 8px`. Hover: `{colors.primary}` — every header control turns green on hover (measured on Menu, Search, Store locator, Favourites).

**Breadcrumb** — 12px/300/17.16px `{colors.ink}`, hover `{colors.primary}`.

**`subnav-toggle`** — model-page sub-navigation.
- 512×54px, radius `{rounded.subnav}` 6.08px, shadow `rgba(0,0,0,0.1) 0px 4px 28px 0px`, text black 16px/400/22px, padding `1px 6px`, on a pane of `rgba(255,255,255,0.7)`.

### Cards & Containers

**`card-media`** — homepage rail card.
- 353×589px, radius `{rounded.card}` 10px, full-bleed image with white RolexFont-S labels (`{typography.card-label}` 10.5384px, tracking 1.3173px) and white titles.

**Bento figure** (Datejust page) — figcaptions in `{typography.caption-title}` 24px/700/31.44px white.

### Footer

**`footer`** — two parts.
1. Share bar on white: "Share" label (14px/700) followed by six green social icons (`social-link`, 32×40px, padding 8px, `{colors.primary}`; hover `{colors.ink}`).
2. Sections block on `{colors.surface-light-grey}` `#f8f8f8`: section links in `{typography.footer-section}` 22px/700/26.8511px, list links in `{typography.footer-link}` 15.0006px/400/26.8511px, legal links 14px/400/19.25px, all `{colors.ink}` with `{colors.primary}` hover.
3. Control panel row: "Reduce motion" and "Contrast active" switches (14px/400, 50px-radius toggles).

### Inputs & Forms
No form fields were present on the measured pages, and no official source documents them. Not declared.

## Design System Architecture

Rolex publishes **no public design system**, token package or brand-guideline document. Searches for "Rolex brand guidelines official design system typography colors", "rolex.com press media kit logo usage official newsroom", "Rolex brand guidelines press kit official logo usage" and "rolex.com github design tokens npm component library" returned only third-party aggregator pages (not used). The newsroom legal page (newsroom.rolex.com/legal) refused automated access (HTTP 403). The only external source used is the typeface vendor page ([monotype.com/fonts/helvetica-now](https://www.monotype.com/fonts/helvetica-now)). What follows is the de-facto system measurable on rolex.com.

### Token architecture
- **Primitive colour tokens on `:root` as RGB channel triplets**, so they can be wrapped as `rgb(var(--x))` or `rgb(var(--x) / alpha)`: `--green: 18 119 73`, `--dark-green: 11 62 39`, `--light-green: 36 154 100`, `--rolex-gold: 146 108 28`, `--light-black: 33 33 33`, `--dark-grey: 118 118 118`, `--grey: 212 212 212`, `--alternate-grey: 216 216 216`, `--another-light-grey: 236 236 236`, `--light-grey: 248 248 248`, `--pure-white: 255 255 255`, `--ocean-green: 155 249 206`, `--bronze: 116 114 102`.
- **One semantic alias** is visible: `--focus: var(--light-green)`.
- **Gradient pairs**: `--gradient-green-from/to`, `--gradient-dark-green-from/to`, `--gradient-gold-from/to` (`163 126 44` → `223 171 58`), `--gradient-qrcode-green-from/to`.
- **Font role tokens**: `--primary-font-family`, `--primary-font-weight: 300`, `--secondary-font-family`, `--secondary-letter-spacing: 0.125em`, `--quote-font-*`, `--testimony-font-*`.
- **Layout tokens**: `--grid-col-num: 6`, `--grid-gap: 6px`, `--outer-margin: 8vw`, `--grid-col-unit` (calc), `--btn-height: 2.5rem`, `--nav-main-bar-height: clamp(3.75rem, calc(3.352rem + 1.634vw), 5.313rem)`.

### Theming
No dark mode was observed. The footer control panel offers a **"Contrast active"** toggle and a **"Reduce motion"** toggle; component class names carry `a11y-contrastMode` segments (e.g. `Sub-Toggle-text-normal-a11y-contrastMode-…`), which shows contrast mode is applied per component. Light/dark variants of the same button exist as classes (`filled translucent-dark`, `filled opaque-green`, `inline green`).

### Type & spacing systems
Type sizes are fluid (fractional computed values at 1280px, fixed values at 390px). Text-style class segments name the scale: `text-headline100`, `text-body50`, `text-legend100`, `text-bold`, `text-light`, `text-secondaryFont`. Spacing is an 8px-dominant rhythm plus `vw`/`vh` units (`--outer-margin: 8vw`, `--s/m/l-h-space` 4/7/10vh).

### Component model
Components are styled with hashed CSS-in-JS class names that embed the component and element names, e.g. `css-1dj2rco-Link-LinkStyled-buttons-buttonReset-text-bold…`, `Heading-Title-text-bold-text-headline100`, `MediaCardLink-Article`, `HeroMediaOverlay-Overlay`, `Footer-Wrapper`, `ControlPanel-ToggleButton`, `Breadcrumb-Item`, `Sub-Toggle`, `Sub-Pane`. Button variants are expressed as plain modifier classes: `filled`, `translucent-dark`, `opaque-green`, `text`, `inline`, `green`, `reverseIcon`. No official inventory is published.

### Accessibility
Measured: "Skip to accessibility / Skip to content / Skip to footer" links at the top of the body; a focus colour token (`--focus` = `#249a64`); reduce-motion and contrast toggles in the footer; 44px desktop / 40px mobile pill heights. No published contrast or target-size policy was found.

### Delivery
No npm package, Figma kit or public repository was found.

## Do's and Don'ts

### Do
- Let full-bleed photography or video carry each section; lay `{typography.display-hero}` white text directly over it.
- Keep chrome to `{colors.canvas}` and `{colors.ink}`; use `{colors.primary}` for hover and inline links.
- Use translucent pills (`{colors.translucent-dark}` over dark imagery, `{colors.translucent-light}` over light imagery) at 44px tall with 35px side padding.
- Set headlines at weight 700 with line-height ≤ 1.0 and paragraphs at weight 300 with ~1.6 leading (19.0006px / 30.401px).
- Use RolexFont-S only for small uppercase labels, always tracked 0.125em.
- Put the footer on `{colors.surface-light-grey}` `#f8f8f8` with 22px/700 section links.

### Don't
- Don't fill buttons with solid green; the green appears as a 45° gradient pill or as text.
- Don't use pure black for text; ink is `#212121`.
- Don't add drop shadows to cards on the homepage — it is flat.
- Don't use Helvetica Now Text weights other than 300, 400 and 700.
- Don't round photography beyond 10px on cards; hero imagery is square-cornered.
- Don't invent semantic colours or form styles — none are published or measured.

## Responsive Behavior

### Breakpoints
Exact breakpoints were not measured. Measured differences between 1280px and 390px:

| Element | 1280px | 390px |
|---|---|---|
| Hero headline | 71.936px / 68.3392px | 44px / 44px |
| "The Oyster Story" | 40px / 48px | 30px / 36px |
| Model-page paragraph | 19.0006px / 30.401px | 18px / 28.8px |
| Footer section link | 22px / 26.8511px | 18px / 25.06px |
| Primary pill | 44px tall, padding 0 35px | 40px tall, padding 0 30px |
| Card h3 | 30.614px | 22.2075px |

### Touch Targets
Pills are 44px tall on desktop and 40px on mobile; social icons are 32×40px; header controls are 45–51px tall.

### Collapsing Strategy
- Header height is fluid: `clamp(3.75rem, calc(3.352rem + 1.634vw), 5.313rem)`.
- Side margins scale with the viewport (`8vw`).
- Type scales fluidly between the measured desktop and mobile values.

### Image Behavior
Hero and rail media are full-bleed; media cards keep their tall portrait ratio. Media is lazy-loaded (the capture shows an unpainted band where rail media had not loaded).

## Iteration Guide

1. Start every section with a full-bleed image; place white `{typography.display-hero}` over it.
2. Use `{colors.ink}` `#212121` for all text on white; `{colors.primary}` `#127749` only for hover and inline links.
3. Default CTA: `button-primary` (translucent dark pill). Over light images, `button-light`. Story CTAs on model pages: `button-green-gradient`.
4. Paragraph copy: `{typography.body-lead}` 19.0006px/300/30.401px on desktop.
5. Small labels: RolexFont-S (`{typography.eyebrow}` / `{typography.card-label}`) with 0.125em tracking.
6. Radii: 9999px for pills, 10px for media cards, 6.08px for the floating sub-nav.
7. Close with the white share bar and the `#f8f8f8` footer.
8. Run `node web/scripts/verify-designs.mjs --slug=rolex` after edits.
