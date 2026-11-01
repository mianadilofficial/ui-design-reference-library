---
version: alpha
name: AIS
category: "Thai Brands"
description: "AIS (Advanced Info Service) consumer site ais.th: white #ffffff canvas under a two-tier muse-green header (#1e3d35 top bar, #25584f nav), kelly green #73c23a as the brand accent (nav hover, active carousel dots, --cms-btn-default), DB Heavent at large sizes (62px/64px h1 in #262626, 40px h3, 24px/28px body in #7b7b7b), 16px-radius white icon tiles on a #f5f5f5 band, 8px-radius imagery and soft rgba(27, 28, 25, 0.15) shadows."

colors:
  primary: "#73c23a"
  primary-hover: "#4f9e28"
  primary-50: "#eef8e8"
  primary-100: "#d6edc5"
  primary-200: "#bae19f"
  primary-300: "#9ed478"
  primary-400: "#88cb59"
  primary-600: "#64b232"
  primary-800: "#3a8a1f"
  primary-900: "#08680a"
  secondary: "#1e3d35"
  secondary-800: "#25584f"
  secondary-700: "#29685d"
  secondary-600: "#2d786c"
  secondary-50: "#e0efee"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  surface: "#f5f5f5"
  ink: "#262626"
  ink-muted: "#7b7b7b"
  ink-secondary: "#333333"
  ink-bold-grey: "#555555"
  ink-medium-grey: "#9d9d9d"
  olive: "#7d7548"
  light-grey: "#e9e9e9"
  border: "#d9d9d9"
  tile-border: "#1b1c1912"
  serenade-50: "#fdfaf3"
  serenade-gold: "#6c3d02"
  alert-red: "#ff4242"

typography:
  h1:
    fontFamily: "\"DB Heavent\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 62px
    fontWeight: 400
    lineHeight: 64px
  h1-mobile:
    fontFamily: "\"DB Heavent\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 40px
  h2:
    fontFamily: "\"DB Heavent\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 56px
    fontWeight: 400
    lineHeight: 56px
  h3:
    fontFamily: "\"DB Heavent\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 40px
  h4:
    fontFamily: "\"DB Heavent\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
  h5:
    fontFamily: "\"DB Heavent\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 28px
  body1:
    fontFamily: "\"DB Heavent\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28px
  body2:
    fontFamily: "\"DB Heavent\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  caption-bold:
    fontFamily: "\"DB Heavent\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 20px
  sub-caption:
    fontFamily: "\"DB Heavent\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16px
  keywords:
    fontFamily: "\"DB Heavent\", -apple-system, system-ui, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px

rounded:
  sm: 8px
  md: 10px
  lg: 16px
  xl: 30px
  indicator: 48px
  pill: 9999px

spacing:
  xxs: 2px
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  xxl: 40px
  section: 70px
  huge: 80px

components:
  topbar:
    backgroundColor: "{colors.secondary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.caption-bold}"
    padding: 14px 70px
    height: 52px
  nav:
    backgroundColor: "{colors.secondary-800}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body1}"
    height: 72px
  nav-link-hover:
    textColor: "{colors.primary}"
  quick-menu-tile:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.lg}"
    border: "1px solid #1b1c1912"
    shadow: rgba(27, 28, 25, 0.15) 0px 4px 21.33px 0px
    width: 66px
    height: 66px
  quick-menu-label:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.body2}"
  quick-menu-band:
    backgroundColor: "{colors.surface}"
    height: 204px
  carousel-dot-active:
    backgroundColor: "{colors.primary}"
    rounded: "{rounded.indicator}"
    width: 24px
    height: 8px
  carousel-dot:
    backgroundColor: "{colors.light-grey}"
    rounded: "{rounded.md}"
    width: 8px
    height: 8px
  carousel-control:
    backgroundColor: "{colors.surface}"
    rounded: "{rounded.pill}"
    width: 40px
    height: 40px
  card-text:
    textColor: "{colors.ink-muted}"
    typography: "{typography.body1}"
---

## Overview

AIS (Advanced Info Service) is Thailand's mobile and broadband operator; its official [About Us](https://www.ais.th/en/about-us) page positions it as "AIS THE COGNITIVE TECH-CO" with the brand proposition "Empowering The Excellent Experience". The English consumer homepage (`ais.th/en/consumers`) is a promotional storefront built from a CMS component library.

The page opens with a two-tier header in deep "muse" greens: a slim `{colors.secondary}` (`#1e3d35`) top bar with CONSUMERS / BUSINESS / ABOUT US tabs on the left and Switch to AIS, myAIS, Login and an EN/TH language selector on the right; below it a `{colors.secondary-800}` (`#25584f`) navigation bar with the AIS logo (a kelly-green swoosh over white "AIS" letters) and Online Store, Package, Fibre, Promotion, Entertainment, Lifestyle, Privileges, Help & Support, search and cart. Nav labels are white and turn kelly green `{colors.primary}` (`#73c23a`) on hover.

The hero is a full-width campaign carousel (in the capture: illustrated Asian Games mascots with a "Watch More Asian Games Live on AIS PLAY" offer panel), with round grey arrow buttons and a green pill indicator. A light-grey `{colors.surface}` band follows with eight white rounded icon tiles (Buy Phone, Buy On-top Package, Promotion, Buy Tablet, Lucky Number, Prepaid SIM, Switch to Postpaid, Switch to AIS). Then a centred campaign banner, and product sections — "Smart Phone", "SIM Card" — where a big heading and short description sit on the left and a carousel of white product cards overlaps a textured olive or grey photographic panel on the right. Further down, `h1` section titles such as "On Top Package", "Network", "Fibre Broadband", "Privileges" and "Entertainment" introduce image cards with white 40px titles.

The overall feel is a large-type Thai telco: everything is set big (body copy at 24px), green is the brand signal, deep green frames the page, and photography and campaign art carry most of the colour.

**Key Characteristics:**
- Kelly green `#73c23a` as brand accent; deep muse greens `#1e3d35` / `#25584f` for the header.
- One family, DB Heavent, at large sizes: 62px section titles, 24px body.
- White canvas with a `#f5f5f5` utility band for quick links.
- 16px-radius white icon tiles with a soft diffuse shadow; 8px-radius imagery.
- Pill indicators (24×8px green active, 8×8px grey inactive).
- Product carousels overlapping textured photographic panels.

### Imagery & Art Direction
- **Hero**: bright, illustrated campaign art (mascots, sports icons, Japanese landmarks in the capture) with a dark offer panel showing prices in large italic green/white numerals and a QR code.
- **Campaign banner**: a green "WIN BIG!" rewards banner with cars, phones and gold, 8px corners.
- **Product sections**: phone and SIM-pack cut-outs on white cards that overlap a textured olive or concrete-grey photographic panel.
- **Package cards**: lifestyle photography (people on calls, aircraft, app icons) with white titles.
- **Icons**: green line icons inside white tiles; a floating green chatbot mascot ("ASK AUNJAI") sits at the right edge.

### Page Rhythm (from the capture)
1. Top bar (muse green) and nav bar (lighter muse green).
2. Hero carousel with arrows and a green indicator.
3. Grey quick-menu band with eight icon tiles.
4. Centred campaign banner.
5. "Smart Phone" — title left, product carousel right over an olive panel.
6. "SIM Card" — same pattern over a grey panel.
7. "On Top Package" and further `h1` sections (Network, Fibre Broadband, Privileges, Entertainment) with image cards.

### Voice & Microcopy
Benefit-led and plain: "Phones and accessories with great deals, right here", "Postpaid plan with Premium numbers, Lucky numbers, or Prepaid plan", "Phone only from ฿52,900", "Switch to AIS". Thai-language campaign art appears even on the English page.

## Colors

> **Source page:** `https://www.ais.th/en/consumers` (extraction + probes in SOURCES.json). The site's own CSS variables (`--cms-*`) are given in brackets.

### Brand
- **Kelly Green** (`{colors.primary}` — `#73c23a`) [`--cms-color-primary`, `--cms-color-primary500`, `--cms-btn-default`, `--cms-border-primary`]: brand accent, nav hover, active indicators, quick-menu icon colour.
- **Kelly Green Hover** (`{colors.primary-hover}` — `#4f9e28`) [`--cms-btn-default-hover`, `--cms-color-primary700`].
- **Primary scale**: `{colors.primary-50}` `#eef8e8` · `{colors.primary-100}` `#d6edc5` · `{colors.primary-200}` `#bae19f` · `{colors.primary-300}` `#9ed478` · `{colors.primary-400}` `#88cb59` · `{colors.primary-600}` `#64b232` · `{colors.primary-800}` `#3a8a1f` · `{colors.primary-900}` `#08680a` (all `--cms-color-primaryNNN`).
- **Muse Green** (`{colors.secondary}` — `#1e3d35`) [`--cms-color-secondary`, `--cms-color-museGreen`]: top bar.
- **Light Muse Green** (`{colors.secondary-800}` — `#25584f`) [`--cms-color-secondary800`, `--cms-color-lightMuseGreen`]: main nav bar.
- **Secondary scale**: `{colors.secondary-700}` `#29685d` · `{colors.secondary-600}` `#2d786c` · `{colors.secondary-50}` `#e0efee` (lightsky).
- **On Primary** (`{colors.on-primary}` — `#ffffff`).

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`) [`--cms-bg-color-white`].
- **Surface** (`{colors.surface}` — `#f5f5f5`) [`--cms-bg-color-lightestGrey`]: quick-menu band, carousel arrows.
- **Serenade** (`{colors.serenade-50}` — `#fdfaf3`) and **Serenade Gold** (`{colors.serenade-gold}` — `#6c3d02`): declared premium palette.

### Text
- **Ink** (`{colors.ink}` — `#262626`) [`--cms-color-defaultText`, `--cms-color-darkestGrey`]: body element colour and section titles.
- **Ink Muted** (`{colors.ink-muted}` — `#7b7b7b`) [`--cms-color-dark-grey`]: most-read text colour — descriptions and card text.
- **Ink Secondary** (`{colors.ink-secondary}` — `#333333`): quick-menu labels.
- **Bold Grey** (`{colors.ink-bold-grey}` — `#555555`) [`--cms-color-bold-grey`].
- **Medium Grey** (`{colors.ink-medium-grey}` — `#9d9d9d`) [`--cms-color-mediumGrey`].
- **Olive** (`{colors.olive}` — `#7d7548`): measured child colour inside a section title; section titles in the capture show an olive textured fill.

### Lines & Misc
- **Border** (`{colors.border}` — `#d9d9d9`) [`--cms-color-border-bottom`, `--cms-color-grey`].
- **Light Grey** (`{colors.light-grey}` — `#e9e9e9`) [`--cms-color-lightGrey`]: inactive indicator.
- **Tile Border** (`{colors.tile-border}` — `#1b1c1912`): icon tile hairline.
- **Alert Red** (`{colors.alert-red}` — `#ff4242`): small measured background (cart badge in the capture).

### Semantic
No semantic success/error tokens are declared in the `--cms-*` set; the Bootstrap defaults present in the CSS (`--bs-success`, `--bs-danger` …) are framework variables, not AIS brand tokens, and are not used here.

## Typography

### Font Family
All measured text renders in **DB Heavent** (loaded in normal, 500/600 and 700/bold faces), declared by `--cms-font-family` with a system fallback stack (`-apple-system`, `BlinkMacSystemFont`, `Segoe UI`, `Roboto` …). No official source found states its foundry or licence.

### Hierarchy (the site's own `--cms-font-*` scale)

| Token | Size | Weight | Line Height | CMS variable | Use |
|---|---|---|---|---|---|
| `{typography.h1}` | 62px | 400 | 64px | `--cms-font-h1-size` | Section titles ("On Top Package") |
| `{typography.h1-mobile}` | 40px | 400 | 40px | — | h1 at 390px |
| `{typography.h2}` | 56px | 400 | 56px | `--cms-font-h2-size` | Declared |
| `{typography.h3}` | 40px | 400 | 40px | `--cms-font-h3-size` | White titles on image cards |
| `{typography.h4}` | 32px | 400 | 32px | `--cms-font-h4-size` | Declared, 32px measured on page |
| `{typography.h5}` | 28px | 400 | 28px | `--cms-font-h5-size` | Declared, 28px measured on page |
| `{typography.body1}` | 24px | 400 | 28px | `--cms-font-body1-size` | Body, card text, nav links |
| `{typography.body2}` | 20px | 400 | 24px | `--cms-font-body2-size` | Quick-menu labels |
| `{typography.caption-bold}` | 20px | 700 | 20px | `--cms-font-caption-size` | Top-bar tabs, language select |
| `{typography.sub-caption}` | 14px | 400 | 16px | `--cms-font-sub-caption-size` | Declared |
| `{typography.keywords}` | 12px | 400 | 16px | `--cms-font-keywords-size` | Declared |

Weights in the CMS: `--cms-font-weight-regular: 400`, `--cms-font-weight-medium: 500`, `--cms-font-weight-bold: 700`. No letter-spacing other than `normal` was measured.

### Principles
- Sizes are large across the board: the body element itself is 24px/28px.
- Titles stay regular (400); bold is used for small caps-like tabs (20px/700).
- Body copy is mid-grey `#7b7b7b`; titles are near-black `#262626`.

### Note on Font Substitutes
DB Heavent is served by ais.th only. When it is unavailable the site's own stack falls back to system UI fonts; keep the CMS sizes but expect wider set width.

## Layout

### Spacing System
Measured paddings: 12px, 4px, 16px, 24px, 8px, 40px, 5px, 2px, 70px, 80px; gaps 16px, 8px, 40px, 24px, 80px.
- **Tokens**: `{spacing.xxs}` 2px · `{spacing.xs}` 4px · `{spacing.sm}` 8px · `{spacing.md}` 12px · `{spacing.lg}` 16px · `{spacing.xl}` 24px · `{spacing.xxl}` 40px · `{spacing.section}` 70px · `{spacing.huge}` 80px.
- Top bar padding 14px 70px; nav items 24px 0px 20px; content containers 40px padding.

### Grid & Container
- `--cms-max-content-width-desktop: 1280px`; section titles 1130–1140px wide.
- Quick menu: 8 tiles in an 800px grid (`quick-menu-grid`), centred.
- Product sections: text column left (~25%), carousel of three 232px cards right, overlapping a photographic panel.
- Package cards: three columns (`col-md-4 col-lg-4`, Bootstrap grid classes).

### Whitespace Philosophy
Large vertical spacing between sections (80px gaps measured) and big type give the page a poster-like rhythm; each section is one idea with one carousel.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Bands, headers |
| 1 | `rgba(27, 28, 25, 0.15) 0px 4px 21.33px 0px` | Quick-menu tiles (most frequent shadow) |
| 2 | `rgba(0, 0, 0, 0.1) 0px 10px 25px -5px, rgba(0, 0, 0, 0.1) 0px 8px 10px -6px` | Floating element (measured once) |

Depth also comes from cards overlapping textured photo panels in the product sections.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.sm}` | 8px | Images and banners (most frequent) |
| `{rounded.md}` | 10px | Inactive indicator dot |
| `{rounded.lg}` | 16px | Quick-menu tiles |
| `{rounded.xl}` | 30px | Measured on page |
| `{rounded.indicator}` | 48px | Active indicator pill |
| `{rounded.pill}` | 9999px | Circular carousel arrows (50%) |

Product cards in the capture are white with rounded corners; their exact radius was not isolated in measurement.

## Components

### Navigation
**`topbar`** — `{colors.secondary}` bar, 52px tall, padding 14px 70px; tabs in white `{typography.caption-bold}`; the active tab (CONSUMERS) is bold white.
**`nav`** — `{colors.secondary-800}` bar, 72px tall: logo, white `{typography.body1}` links, search and cart icons.
**`nav-link-hover`** — text and border colour become `{colors.primary}` `#73c23a` (measured hover on every nav item).

### Quick Menu
**`quick-menu-band`** — full-width `{colors.surface}` band, 204px.
**`quick-menu-tile`** — 66×66px white tile, 16px radius, 1px `#1b1c1912` hairline, Level 1 shadow, green line icon.
**`quick-menu-label`** — `{typography.body2}` in `#333333` under each tile.

### Carousels
**`carousel-dot-active`** — 24×8px `{colors.primary}` pill (48px radius). **`carousel-dot`** — 8×8px `{colors.light-grey}`.
**`carousel-control`** — 40×40px `{colors.surface}` circle with a thin grey chevron.

### Cards
**`card-text`** — product card copy ("iPhone 18 Pro Max", "Phone only from ฿52,900") in `{typography.body1}` `{colors.ink-muted}`; in the capture the product name is darker and bolder than the price line.
Image cards under "On Top Package" carry white `{typography.h3}` titles (Internet, Call, Entertainment).

### Buttons
The homepage shows no filled button (the extractor found no CTA candidates). The CMS declares `--cms-btn-default: #73c23a` and `--cms-btn-default-hover: #4f9e28`; shape and padding were not measured, so no button component is declared.

### States (measured)
| Element | Default | Hover |
|---|---|---|
| Top-bar tab (CONSUMERS, BUSINESS, ABOUT US) | white text, white border colour | `#73c23a` text and border |
| Nav link (Online Store … Help & Support) | white | `#73c23a` |
| Carousel indicator | `#e9e9e9` 8×8px | — (active: `#73c23a` 24×8px) |
| CMS button token | `--cms-btn-default` `#73c23a` | `--cms-btn-default-hover` `#4f9e28` |

### Section Header Pattern
- Product sections: a large dark title (with a textured olive fill in the capture) plus a 24px grey description, left column.
- Package sections: centred `{typography.h1}` title above a three-column card row.

## Design System Architecture

AIS publishes **no public design system** or brand-guideline values; searches are recorded in SOURCES.json, and the official [About Us](https://www.ais.th/en/about-us) page covers brand positioning only. The site itself exposes a well-structured de-facto token layer, described here as measured:

- **Token architecture**: CSS custom properties prefixed `--cms-` (the site's CMS component library, clientlibs served from `/etc.clientlibs/ais/`). Primitive colour ramps use numeric steps 50–900: `--cms-color-primary50 … --cms-color-primary900` (kelly green, `--cms-color-primary500: #73c23a`) and `--cms-color-secondary50 … --cms-color-secondary900` (muse green, `--cms-color-secondary900: #1e3d35`). Named aliases sit beside them (`--cms-color-kellyGreen`, `--cms-color-museGreen`, `--cms-color-lightMuseGreen`, `--cms-color-serenadeGold`). Semantic/component tokens: `--cms-color-defaultText: #262626`, `--cms-btn-default`, `--cms-btn-default-hover`, `--cms-border-primary`, `--cms-color-back-button`, `--cms-bg-color-back-button`. Some names exist in both kebab and camel case (`--cms-color-dark-grey` / `--cms-color-darkGray`).
- **Typography tokens**: `--cms-font-h1-size: 62px` … `--cms-font-h6-size: 24px`, `--cms-font-body1-size: 24px`, `--cms-font-body2-size: 20px`, `--cms-font-caption-size: 20px`, `--cms-font-sub-caption-size: 14px`, `--cms-font-keywords-size: 12px`, each paired with a `-line-height` token; weights regular/medium/bold.
- **Theming**: background modifier classes such as `cms-bg-color-lightestGrey` and `cms-default-comp-color-white` set section and component colour; gradients are tokenised (`--cms-bg-gradient-lightsky`, `--cms-color-privilege-gradient: linear-gradient(90deg,#8e30e1 20.85%,#e6007e 78.13%)`). No dark mode observed.
- **Layout**: `--cms-max-content-width-desktop: 1280px`; Bootstrap grid and utility classes (`col-9 col-md-4 col-lg-4`) with Bootstrap's own `--bs-*` variables present underneath.
- **Component model (observable)**: container (`cms-ais-container-v2`, `cms-fixedwidth-container`), navigation (`cmp-navigation`, `cmp-tabs__tablist`), quick menu (`quick-menu`, `quick-menu-grid grid4`, `quick-menu-item`, `quick-menu-icon`), card (`cms-card-component`, `cms-card-component-text`, `card-link-content`), rich text (`textrte`), carousel with Bootstrap controls.
- **Icons**: Font Awesome 6 Free/Brands faces are loaded alongside SVG icons.
- **Accessibility**: no published AIS accessibility standard found; carousel controls carry text labels ("Previous", "Next").
- **Delivery**: no npm package, Figma kit or public docs.

## Do's and Don'ts

### Do
- Use `#73c23a` for brand accents, active states and hover; `#4f9e28` for its hover.
- Frame pages with the `#1e3d35` top bar and `#25584f` nav.
- Set type in DB Heavent at the CMS scale (62 / 40 / 24 / 20px).
- Use 16px-radius white icon tiles with the soft Level 1 shadow for shortcuts.
- Use green pill indicators for carousels.

### Don't
- Don't shrink body text below 20–24px in DB Heavent.
- Don't use the Bootstrap blue `#0d6efd` (framework default) as an AIS colour.
- Don't bold large titles — they are 400.
- Don't use black page backgrounds; the canvas is white with green framing.
- Don't invent button geometry — measure an AIS button first.
- Don't put green text on the muse-green bars except as the hover state.
- Don't use hard, dark shadows; the measured shadow is a soft 21.33px blur at 15% opacity.
- Don't mix in a second typeface for headings.

## Responsive Behavior

### Breakpoints

| Name | Width | Key Changes |
|---|---|---|
| Desktop | 1280px measured | Two-tier header, 62px h1, 3-up carousels |
| Mobile | 390px measured | h1 62px → 40px (line-height 40px); body stays 24px (line-height 22px measured) |

### Touch Targets
- Quick-menu tiles 66×66px; carousel arrows 40×40px; indicators 8px tall (small).

### Collapsing Strategy
- Title sizes step down from the h1 token to 40px on mobile.
- Carousels remain swipeable.

### Mobile Notes
- The mobile `h1` ("On Top Package") is 40px/400/40px, 374px wide.
- Body paragraphs keep 24px but tighten line-height to 22px.
- No mobile navigation element was captured by the extractor, so the mobile header is not specified.

### Image Behavior
Campaign banners are full-width images; images carry 8px corners inside sections.

## Iteration Guide

1. Start with `{colors.canvas}`, `{colors.ink}` and `{typography.body1}`.
2. Add `topbar` + `nav` in muse greens.
3. Section titles: `{typography.h1}` centred or left, `#262626`.
4. Shortcuts: `quick-menu-tile` on `quick-menu-band`.
5. Carousels: `carousel-dot-active` / `carousel-dot` / `carousel-control`.
6. Name new colours on the `--cms-color-primaryNNN` / `secondaryNNN` ramps.
7. Before adding buttons, inputs or footers, measure them on ais.th.
8. Keep every value on the `--cms-*` scale; if a size is missing, use the nearest declared CMS token rather than a new one.

### Quick Reference
- Canvas `#ffffff` · Ink `#262626` · Muted `#7b7b7b` · Accent `#73c23a` · Header `#1e3d35` / `#25584f`.
- Type: DB Heavent 62/64 · 40/40 · 24/28 · 20/24.
- Radii: 8px images · 16px tiles · pill indicators.
