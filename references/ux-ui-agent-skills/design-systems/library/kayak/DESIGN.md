---
version: alpha
name: KAYAK
category: "Travel & Hospitality"
description: "KAYAK's travel-search homepage (measured on the en.kayak.co.th redirect) is a white, airy layout in TT Hoves Variable — 44px/700 hero headline, 32px/700 section titles, 600-weight card titles — with an orange #ff690f→#e8381b gradient Search button, a #f0f3f5 12px-radius hero panel, 32px-radius white cards, #192024 ink, teal #0b7b99 links and 9999px pills, all named by --color-*/--size-border-radius-* tokens."

colors:
  primary: "#ff690f"
  primary-gradient-end: "#e8381b"
  primary-hover-start: "#e55e0d"
  primary-hover-end: "#cf3218"
  tile-gradient-end: "#ff4538"
  brand-gradient-stop: "#ee4719"
  brand-gradient-start-hover: "#cc4500"
  action: "#0b7b99"
  action-default: "#007799"
  action-hover: "#07647e"
  action-dark: "#363f45"
  action-dark-hover: "#2c3439"
  action-dark-focus: "#1f282d"
  canvas: "#ffffff"
  body-bg: "#fafbfc"
  surface-alt: "#f9fafb"
  surface-highlight: "#f0f3f5"
  base-hover: "#e6ebef"
  accent-alt: "#ffece0"
  border: "#d9e2e8"
  border-primary: "#e5ebf0"
  ink: "#192024"
  ink-600: "#212a30"
  ink-muted: "#5a6872"
  ink-inactive: "#8796a1"
  on-dark: "#f9fafb"
  on-primary: "#ffffff"

typography:
  header-large:
    fontFamily: "\"TT Hoves Variable\", -apple-system, system-ui, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 44px
    fontWeight: 700
    lineHeight: 56px
  header-medium:
    fontFamily: "\"TT Hoves Variable\", -apple-system, system-ui, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  header-small:
    fontFamily: "\"TT Hoves Variable\", -apple-system, system-ui, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 32px
  header-xsmall:
    fontFamily: "\"TT Hoves Variable\", -apple-system, system-ui, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  body-large-emphasis:
    fontFamily: "\"TT Hoves Variable\", -apple-system, system-ui, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  body-large:
    fontFamily: "\"TT Hoves Variable\", -apple-system, system-ui, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-medium-emphasis:
    fontFamily: "\"TT Hoves Variable\", -apple-system, system-ui, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
  body-medium:
    fontFamily: "\"TT Hoves Variable\", -apple-system, system-ui, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  label-small-emphasis:
    fontFamily: "\"TT Hoves Variable\", -apple-system, system-ui, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 18px
  display-large:
    fontFamily: "\"TT Hoves Variable\", -apple-system, system-ui, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 84px
    fontWeight: 700
    lineHeight: 88px

rounded:
  xsmall: 2px
  small: 4px
  medium: 8px
  large: 12px
  xlarge: 16px
  xxlarge: 24px
  xxxlarge: 32px
  xxxxlarge: 40px
  full: 9999px

spacing:
  xxs: 2px
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  xxl: 32px
  xxxl: 40px
  huge: 48px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    backgroundImage: "linear-gradient(135deg, #ff690f 0%, #e8381b 100%)"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-medium-emphasis}"
    rounded: "{rounded.medium}"
    height: 44px
  button-primary-hover:
    backgroundImage: "linear-gradient(135deg, #e55e0d 0%, #cf3218 100%)"
  vertical-tile-active:
    backgroundImage: "linear-gradient(135deg, #ff690f 0%, #ff4538 100%)"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.medium}"
    size: 52px
    border: "1px solid #d9e2e8"
    boxShadow: "rgba(25, 32, 36, 0.16) 0px 3px 6px 0px, rgba(25, 32, 36, 0.04) 0px -1px 4px 0px"
  button-ghost:
    textColor: "{colors.ink}"
    typography: "{typography.body-large-emphasis}"
    rounded: "{rounded.medium}"
    height: 40px
  button-ghost-hover:
    backgroundColor: "{colors.base-hover}"
  pill-control:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.label-small-emphasis}"
    rounded: "{rounded.full}"
    height: 44px
  pill-control-hover:
    backgroundColor: "{colors.base-hover}"
  hero-panel:
    backgroundColor: "{colors.surface-highlight}"
    rounded: "{rounded.large}"
  card-feature:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-medium}"
    rounded: "{rounded.xxxlarge}"
    padding: 32px
    border: "1px solid #d9e2e8"
  card-deal:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.header-small}"
    rounded: "{rounded.xxxlarge}"
    padding: 8px 8px 24px
  card-deal-image:
    backgroundColor: "{colors.action-dark}"
    rounded: "{rounded.xxlarge}"
  card-pro:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.header-small}"
    rounded: "{rounded.xxxlarge}"
    padding: 16px 32px 4px
  deals-band:
    backgroundColor: "{colors.surface-alt}"
  redirect-banner:
    backgroundColor: "{colors.action-dark-focus}"
    textColor: "{colors.on-dark}"
    typography: "{typography.body-medium-emphasis}"
    height: 44px
  link:
    textColor: "{colors.action}"
    typography: "{typography.label-small-emphasis}"
  link-hover:
    textColor: "{colors.action-hover}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.action-dark}"
    typography: "{typography.body-medium}"
---

## Overview

KAYAK is a travel metasearch engine, and its homepage is a **search tool first**. The measured page is the
geolocated English Thailand edition (kayak.com redirected to en.kayak.co.th, prices in ฿), topped by a dark
`#1f282d` banner: "You have been redirected to kayak.co.th based on your location. Go to kayak.com instead."

Beneath a light header (hamburger, the orange block-letter K-A-Y-A-K logo, a "[U+2726] Ask AI" entry, currency
"THB", heart and account buttons) sits a large **light-grey hero panel** (`{colors.surface-highlight}`
`#f0f3f5`, 12px radius) with the 44px headline "Compare flight deals from 100s of sites." — ending in an
orange period — four square vertical tiles (Flights active in an orange gradient, Stays, Car Rental,
Flight+Hotel), a "Return" trip-type dropdown and a white one-line search bar ending in an orange gradient
**Search** button. At the right edge, a column of rounded travel photographs (airplane wing, a child at a
window) peeks in.

Below: three white 32px-radius trust cards (partner logos, "41,000,000+ searches this week", "Travellers love us"
with five orange stars), an AI prompt pill ("Direct flights to Tokyo") with a soft gradient border, a pale
`#f9fafb` band of **deal cards** ("Travel deals under ฿2,256"), a carousel of **For travel pros** cards with
orange-and-blue 3D illustrations, and a dense link directory "Start your travel planning here" with teal
"CARS • FLIGHTS • HOTELS" links.

**Key Characteristics:**
- One typeface: TT Hoves Variable at 400 / 600 / 700.
- One hot accent: the orange gradient (`#ff690f` → `#e8381b`) on the Search button and the active vertical tile.
- Very round containers: 32px cards, 24px card images, 12px hero panel, 9999px pills, 8px buttons.
- Cool grey neutrals named as tokens: `#192024` ink, `#5a6872` muted, `#d9e2e8` border, `#f0f3f5` / `#f9fafb` surfaces.
- Teal `#0b7b99` is the link/action text color, never the button color.
- Dark slate `#363f45` is the "action" background token for dark buttons and image placeholders.

## Colors

> **Source:** `:root` custom properties on the live page and measured elements (see `SOURCES.json` `_probes`).

### Brand
- **KAYAK Orange** (`{colors.primary}` — `#ff690f`, `--color-brand-gradient-start`): start of every brand gradient.
- **Search Gradient End** (`{colors.primary-gradient-end}` — `#e8381b`): end stop of the Search button gradient.
- **Search Hover** (`{colors.primary-hover-start}` `#e55e0d` → `{colors.primary-hover-end}` `#cf3218`): hover gradient.
- **Tile Gradient End** (`{colors.tile-gradient-end}` — `#ff4538`): end stop of the active vertical tile.
- **Token stops** `--color-brand-gradient-stop` `{colors.brand-gradient-stop}` `#ee4719` and `--color-brand-gradient-start-hover`
  `{colors.brand-gradient-start-hover}` `#cc4500` are defined; the rendered Search gradients use the values above.

### Action
- **Action Teal** (`{colors.action}` — `#0b7b99`, `--color-action`): directory links, checkbox hover borders.
- **Action Default** (`{colors.action-default}` — `#007799`, `--color-foreground-action-default`): inline text links ("Flights").
- **Action Hover** (`{colors.action-hover}` — `#07647e`, `--color-foreground-action-hover`).
- **Action Dark** (`{colors.action-dark}` — `#363f45`, `--color-background-action-default`); hover `{colors.action-dark-hover}` `#2c3439`;
  focus `{colors.action-dark-focus}` `#1f282d` (also the redirect banner).

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page content and cards. **Body bg** (`{colors.body-bg}` — `#fafbfc`): body element.
- **Surface Alt** (`{colors.surface-alt}` — `#f9fafb`, `--color-elevation-app-surface-alt`): deals band.
- **Surface Highlight** (`{colors.surface-highlight}` — `#f0f3f5`, `--color-elevation-app-surface-highlight`): hero panel.
- **Base Hover** (`{colors.base-hover}` — `#e6ebef`, `--color-background-base-hover`): hover fill for ghost buttons and pills.
- **Accent Alt** (`{colors.accent-alt}` — `#ffece0`, `--color-background-alt-accent`).
- **Border** (`{colors.border}` — `#d9e2e8`, `--color-border-default`); **Border Primary** (`{colors.border-primary}` — `#e5ebf0`).

### Text
- **Ink** (`{colors.ink}` — `#192024`, `--color-foreground-primary`): almost all text.
- **Ink 600** (`{colors.ink-600}` — `#212a30`): h1 and directory heading.
- **Ink Muted** (`{colors.ink-muted}` — `#5a6872`, `--color-foreground-neutral-default`): placeholders ("Return", "Plan a trip").
- **Ink Inactive** (`{colors.ink-inactive}` — `#8796a1`).
- **On Dark** (`{colors.on-dark}` — `#f9fafb`) and **On Primary** (`{colors.on-primary}` — `#ffffff`).

### Semantic
The root defines alt/semantic pairs (e.g. `--color-background-alt-positive: #ccffe5`, `--color-background-alt-negative: #fff0f0`,
`--color-background-alt-info: #e0f8ff`) that the homepage does not render; they are not declared as tokens here.

## Typography

### Font Family
**TT Hoves Variable** — TypeType's TT Hoves, which the foundry describes as a contemporary "Scandinavian sans serif" with
Standard, Compact, Condensed, Expanded and Mono subfamilies and Variable fonts
([typetype.org](https://typetype.org/fonts/tt-hoves-pro/)). The page loads one variable face (weights 50–900) and uses 400, 600 and 700.
Fallback stack as served: `-apple-system, system-ui, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif`.

### Hierarchy

| Token | Size | Weight | Line Height | Use |
|---|---|---|---|---|
| `{typography.display-large}` | 84px | 700 | 88px | `--font-desktop-display-large` (defined; display-medium 66/72, display-small 52/60) |
| `{typography.header-large}` | 44px | 700 | 56px | Hero headline (h2) |
| `{typography.header-medium}` | 32px | 700 | 40px | Section titles; hero at 390px |
| `{typography.header-small}` | 24px | 600 | 32px | Card titles, deal city, price, "Travellers love us" |
| `{typography.header-xsmall}` | 20px | 400 | 24px | SEO h1, directory sub-line links |
| `{typography.body-large-emphasis}` | 16px | 600 | 24px | "Explore more", "Ask AI" |
| `{typography.body-large}` | 16px | 400 | 24px | Card descriptions, flight meta |
| `{typography.body-medium-emphasis}` | 14px | 600 | 20px | Search label, footer titles, redirect link |
| `{typography.body-medium}` | 14px | 400 | 20px | Default UI text, footer links, tile labels |
| `{typography.label-small-emphasis}` | 12px | 600 | 18px | Currency code, CARS • FLIGHTS • HOTELS |

### Principles
- **Token names follow device-role-size-variant:** `--font-desktop-header-large-size`, `--font-mobile-body-medium-letter-spacing`,
  `--font-desktop-numerals-body-small-emphasis-feature-settings: "tnum", "lnum"` — numerals get tabular lining figures.
- **Bold display, semibold titles, regular body.** 700 only at 32px and up; 600 for 24px card titles and emphasis.
- **Line-heights on 4px steps** (18, 20, 24, 32, 40, 56px).
- **No letter-spacing on desktop**; the mobile body-medium token sets `.38px`.

### Note on Font Substitutes
TT Hoves is a commercial TypeType family. When it is unavailable, use the served fallback chain; keep weights 400/600/700 and the measured sizes.

## Layout

### Spacing System
- **Tokens:** `{spacing.xxs}` 2px · `{spacing.xs}` 4px · `{spacing.sm}` 8px · `{spacing.md}` 12px · `{spacing.lg}` 16px · `{spacing.xl}` 24px ·
  `{spacing.xxl}` 32px · `{spacing.xxxl}` 40px · `{spacing.huge}` 48px.
- Most frequent paddings: 4px, 8px, 16px, 32px; gaps 12px, 4px, 2px, 8px.
- Feature cards pad 32px; deal cards `8px 8px 24px`; pro-card content `16px 32px 4px`.

### Grid & Container
- Content width measured at 1220px (h2s, footer); the hero panel spans 1248px.
- Trust row: 3 cards of 401px. Deals and pro cards: 306px cards in carousels with prev/next round buttons below.
- Directory: three columns of city rows with chevrons.

### Whitespace Philosophy
Airy. Large rounded white cards sit on white or very pale grey with generous gutters; the only dense area is the link directory at the bottom.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat with `1px solid #d9e2e8` | Feature cards |
| 1 | `rgba(25, 32, 36, 0.16) 0px 3px 6px 0px, rgba(25, 32, 36, 0.04) 0px -1px 4px 0px` | Vertical tiles |
| Surface | `#f0f3f5` / `#f9fafb` panels | Hero and deals band |

## Shapes

### Border Radius Scale (`--size-border-radius-*`)

| Token | Value | Use |
|---|---|---|
| `{rounded.xsmall}` | 2px | Small chrome |
| `{rounded.small}` | 4px | Small controls |
| `{rounded.medium}` | 8px | Buttons, vertical tiles, header icon buttons |
| `{rounded.large}` | 12px | Hero panel |
| `{rounded.xlarge}` | 16px | Defined |
| `{rounded.xxlarge}` | 24px | Deal-card photos |
| `{rounded.xxxlarge}` | 32px | Cards (feature, deal, pro), AI prompt pill |
| `{rounded.xxxxlarge}` | 40px | Defined |
| `{rounded.full}` | 9999px | Currency pill, avatars |

Photos in the hero column are tall rounded rectangles; partner/avatar logos are 46px circles (99px radius) with a `#d9e2e8` ring on `#f0f3f5`.

## Components

### Buttons
- **`button-primary`** — Search: orange gradient `135deg, #ff690f → #e8381b`, white `{typography.body-medium-emphasis}`, 8px radius, 44px tall.
  Hover darkens to `#e55e0d → #cf3218`.
- **`button-ghost`** — "Explore more ›": transparent, `{typography.body-large-emphasis}`, 8px radius, 40px tall; hover `{colors.base-hover}`.
- **`pill-control`** — currency "THB" with flag: white 9999px pill, 44px, 12px/600 code; hover `{colors.base-hover}`.

### Search
- **`vertical-tile-active`** — 52px square, orange gradient `#ff690f → #ff4538`, white plane icon, 8px radius, `#d9e2e8` border, level-1 shadow;
  the label sits below in `{typography.body-medium}`. Inactive tiles are white squares with dark icons.
- The search bar is a white rounded row: origin chip "Bangkok (BKK) ×", swap icon, "Plan a trip" placeholder in `{colors.ink-muted}`,
  "Departure - Return" and "1 Economy" fields, then `button-primary`.

### Cards
- **`hero-panel`** — `{colors.surface-highlight}`, 12px radius.
- **`card-feature`** — white, 32px radius, 32px padding, `1px solid #d9e2e8`, 401x200.
- **`card-deal`** — white, 32px radius, `8px 8px 24px` padding; photo 24px radius; city `{typography.header-small}`, meta `{typography.body-large}`,
  dates with a small arrow, price "from ฿2,187" in `{typography.header-small}`.
- **`card-pro`** — white 32px card: title `{typography.header-small}`, description `{typography.body-large}`, an illustration filling the lower half.

### Bands & banners
- **`deals-band`** — full-width `{colors.surface-alt}`.
- **`redirect-banner`** — `{colors.action-dark-focus}` 44px strip, `{colors.on-dark}` text, white underlined link, close × at right.

### Links
- **`link`** — teal `{colors.action}` 12px/600 directory links (uppercase in the capture); inline links in `{colors.action-default}`; hover `{colors.action-hover}`.

### Footer
- **`footer`** — white; column titles `{typography.body-medium-emphasis}` in `{colors.ink}`; links `{typography.body-medium}` in `{colors.action-dark}`.

## Design System Architecture

KAYAK publishes **no public design-system documentation** or token package that could be found (searches in `SOURCES.json`). The typeface source
is TypeType's official [TT Hoves Pro page](https://typetype.org/fonts/tt-hoves-pro/). The rest is measured from the live page's CSS.

- **Token architecture:** thousands of custom properties on `:root` (6,616 computed properties including standard ones; the extractor sampled 400).
  Tiers are visible in the names:
  - primitive-like ramps: `--color-foreground-primary-100 … -700`, `--color-background-primary-100 … -700`, `--color-foreground-secondary-100 … -700`;
  - semantic roles: `--color-action`, `--color-foreground-action-default/-hover/-focus`, `--color-background-action-default/-hover/-focus/-content`,
    `--color-background-base-default/-hover/-focus`, `--color-border-default`, `--color-elevation-app-surface/-surface-alt/-surface-highlight`,
    `--color-background-alt-{accent|info|positive|negative|callout|special|neutral|inverted}` each with a `-content` pair;
  - brand: `--color-brand-gradient-start` `#ff690f`, `--color-brand-gradient-stop` `#ee4719`, `--color-brand-white`;
  - component/feature tokens: `--color-ui-badge-bg-neutral`, `--color-search-date-picker-calendar-day-hover`, `--color-rps-banner-close-icon`,
    `--color-marketing-background-action-base-default`.
- **Theming:** many tokens have a `--dark` twin (e.g. `--color-foreground-info-elevated-default--dark: #08b1dd`,
  `--color-elevation-two-content--dark`), so a dark theme is defined in CSS; the homepage renders light. Dark/light presentation classes also
  appear on components (`HiPN-pres-dark`). How the theme is switched was not observed.
- **Type:** `--font-{desktop|tablet|mobile}-{display|header|body|label|numerals-*}-{size}-{emphasis?}-{family|size|weight|line-height|letter-spacing|feature-settings}`.
  Desktop header sizes: large 44/56, medium 32/40, small 24/32, xsmall 20/24; display large 84/88, medium 66/72, small 52/60.
- **Shape:** `--size-border-radius-{xsmall 2px, small 4px, medium 8px, large 12px, xlarge 16px, xxlarge 24px, xxxlarge 32px, xxxxlarge 40px, full 9999px}`.
- **Component model:** short hashed block classes with BEM-like modifiers: `RxNS RxNS-mod-stretch RxNS-mod-animation` (button),
  `y8q4 y8q4-mod-theme-active` (vertical tile), `D2Mx D2Mx-mod-radius-xxxlarge`, `AFFP AFFP-body AFFP-m`, `JCQa-pres-size-regular` —
  `-mod-` for modifiers and `-pres-` for presentation variants. Components seen: redirect banner, header, vertical tiles, search form, ghost button,
  pill control, feature card, AI prompt pill, deal card, pro card, carousel controls, link directory, footer.
- **Accessibility:** "Skip to main content" is the first body text. Search button and pills are 44px tall.
- **Delivery:** no public npm package or Figma kit found.

## Do's and Don'ts

### Do
- Use the orange gradient only for the primary action (Search) and the active search vertical.
- Set everything in TT Hoves Variable: 700 for 32px+ headings, 600 for 24px titles and emphasis, 400 for body.
- Use 32px radius for cards, 24px for photos inside them, 8px for buttons and tiles.
- Keep neutrals in the cool slate family (`#192024`, `#5a6872`, `#d9e2e8`, `#f0f3f5`, `#f9fafb`).
- Use teal `#0b7b99` / `#007799` for text links.

### Don't
- Don't use flat orange fills for buttons; the brand action is a 135° gradient.
- Don't put teal on buttons or orange on links.
- Don't use sharp corners on cards.
- Don't add heavy shadows to cards; only tiles carry the two-layer shadow.

## Responsive Behavior

### Breakpoints
Measured at 1280px and 390px.

| Width | Measured changes |
|---|---|
| 1280px | Header block 124px incl. redirect banner; hero h2 44px/56px; section h2 32px/40px; 3 trust cards |
| 390px | Header block 156px; section h2 32px/40px wraps to 2 lines; h1 stays 20px/24px; body paragraph 14px/20px wraps to 4 lines |

### Touch Targets
- Search button, pill controls and header icon buttons 44px; vertical tiles 52px.

### Collapsing Strategy
- Device-specific type tokens exist (`--font-mobile-*`, `--font-tablet-*`); the 390px page uses 14px as the dominant size.

### Image Behavior
Deal photos are cropped into 24px-radius frames inside cards; hero photos crop into tall rounded tiles.

## Iteration Guide

1. Start with a white page, a light header and a `{components.hero-panel}` holding a `{typography.header-large}` headline.
2. Add `{components.vertical-tile-active}` tiles and a rounded search bar ending in `{components.button-primary}`.
3. Build modules with `{typography.header-medium}` titles and `{components.button-ghost}` "Explore more".
4. Use `{components.card-feature}`, `{components.card-deal}` and `{components.card-pro}` at 32px radius.
5. Put deals on `{components.deals-band}`; use `{components.link}` for directories.
6. Keep all colors on the `--color-*` tokens listed above.
