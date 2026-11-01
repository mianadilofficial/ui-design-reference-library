---
version: alpha
name: Agoda
category: "Thai Brands"
description: "Agoda's travel-booking homepage: white #ffffff canvas, Helvetica Neue throughout (24px/700 uppercase white hero 'SEE THE WORLD FOR LESS', 24px/600 #252c38 section heads, 14px/12px UI text), interaction blue #2067da for the 44px pill SEARCH button, active tabs and outlined pills, a #f8f7f9 16px-radius search panel with a soft shadow, #5e6b82 secondary text, #c53829 prices, 16px-radius result cards and 999px chips, plus the six-colour logo dots."

colors:
  primary: "#2067da"
  on-primary: "#ffffff"
  primary-pressed: "#1751ae"
  primary-subtle: "#e5efff"
  link: "#5392f9"
  canvas: "#ffffff"
  surface-blue: "#eff4fc"
  surface-panel: "#f8f7f9"
  surface-deals: "#f3efd8"
  surface-dark: "#2a2a2e"
  sticky-bar: "#20274d"
  ink: "#252c38"
  ink-muted: "#5e6b82"
  ink-black: "#000000"
  input-text: "#2a2a2e"
  on-dark-muted: "#d7d7db"
  price: "#c53829"
  positive: "#007e3e"
  border: "#dddfe2"
  hairline: "#5e6b8252"
  logo-black: "#292929"
  logo-red: "#ff2938"
  logo-yellow: "#fdb812"
  logo-green: "#00b057"
  logo-purple: "#af38b1"
  logo-blue: "#00aae0"
  interaction-guideline: "#478cf7"

typography:
  display-hero:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 31.2px
    textTransform: uppercase
  display-hero-mobile:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 31.2px
    textTransform: uppercase
  heading-section:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 29px
  heading-card:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 24px
  button:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20.33px
  field-value:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.8571px
  body:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 18.19px
  body-light:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 14px
  ui:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 18.5714px
  caption:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 17.1428px
  micro:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 10px
    fontWeight: 400

rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 16px
  tab: 24px
  pill: 9999px

spacing:
  xxs: 2px
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  xxl: 32px
  xxxl: 48px
  huge: 64px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 44px
  button-outlined:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.ui}"
    rounded: "{rounded.pill}"
    border: "1px solid #5e6b8252"
    padding: 12px 24px
    height: 44px
  button-outlined-hover:
    border: "1px solid #2067da"
  button-ghost:
    backgroundColor: "#ffffff00"
    textColor: "{colors.primary}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 36px
  chip:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.caption}"
    rounded: "{rounded.pill}"
    border: "1px solid #5e6b8252"
    padding: 4px 16px
    height: 36px
  chip-selected:
    backgroundColor: "{colors.primary-subtle}"
    textColor: "{colors.primary-pressed}"
    border: "2px solid #2067da"
  tab-active:
    textColor: "{colors.primary}"
    rounded: "{rounded.tab}"
    padding: 4px 12px
  tab-inactive:
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.tab}"
    padding: 4px 12px
  search-panel:
    backgroundColor: "{colors.surface-panel}"
    rounded: "{rounded.lg}"
    padding: 32px 48px 64px
    shadow: rgba(0, 0, 0, 0.2) 0px 2px 8px 3px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.input-text}"
    typography: "{typography.field-value}"
    rounded: "{rounded.md}"
    border: "1px solid #dddfe2"
    height: 66px
  card-promo:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.caption}"
    rounded: "{rounded.md}"
    padding: 16px
  card-result:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.caption}"
    rounded: "{rounded.lg}"
    border: "1px solid #5e6b8252"
    padding: 8px
  link:
    textColor: "{colors.link}"
    typography: "{typography.ui}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.ui}"
    height: 60px
  sticky-search-bar:
    backgroundColor: "{colors.sticky-bar}"
    padding: 11px 0px
    height: 70px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.body}"
  footer-legal:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-dark-muted}"
    typography: "{typography.body-light}"
---

## Overview

Agoda's homepage is a booking tool first and a magazine second. The top of the page is a short full-bleed aerial photograph of turquoise water and green coastline, with the hero line "SEE THE WORLD FOR LESS" set in white, bold, uppercase Helvetica Neue. Directly over the photo floats the search panel: a pale `{colors.surface-panel}` (`#f8f7f9`) card with 16px corners and a soft shadow, holding product tabs (Hotels, Flights, Homes & Apts, Flight + Hotel, Activities, Airport transfer), stay-type chips (Overnight Stays / Day Use Stays), a destination field, check-in/check-out fields, an occupancy field, a checkbox, an "Add a flight" ghost button and the wide blue pill **SEARCH** button that overhangs the panel's bottom edge.

Below the fold the page becomes a long scroll of horizontal carousels inside a white bordered container: flight deals ("Flight to Chiang Mai"), "Top things to do", category tiles ("Explore Chiang Mai your way"), hotel cards ("Need more hotels for your trip?"), and "Top destinations in Thailand" — each headed by a 24px/600 title, often with a small green discount badge ("Up to 8% off"). Cards are white, with photographs on top, compact 12px meta text, star ratings, blue review scores and red Thai-baht prices aligned bottom-right with struck-through originals.

The brand's personality lives in the logo — the lowercase "agoda" wordmark over five coloured dots (red, yellow, green, purple, blue) — and in playful 3D illustrations on the category tiles. The UI itself is restrained: one interaction blue `#2067da`, a deep slate ink `#252c38`, a grey-blue secondary text `#5e6b82`, and white.

**Key Characteristics:**
- Interaction blue `{colors.primary}` (`#2067da`) for the primary button, active tabs, outlined-button labels and selected chips.
- Pill everything that is clickable: buttons, chips and outlined actions are 999px-radius.
- Cards at 16px radius with a translucent `#5e6b8252` hairline; promo cards at 8px.
- Helvetica Neue at small sizes (12–14px) with heavy use of weight 600.
- Red `{colors.price}` (`#c53829`) prices; green `#007e3e` for positive/discount signals.
- Dense carousels with round white arrow buttons on the right edge.

### Imagery & Art Direction
- **Hero**: a single aerial travel photograph (sea, beach, forest) — bright, saturated, daylight.
- **Cards**: real property and activity photos, cropped to a fixed top area; overlay badges in blue ("Booked 4 times today", "Best seller", "9 sold in last 24 hours") sit on the photo's top-left corner.
- **Category tiles**: small playful 3D illustrations of people and objects (tours, restaurants, museums) on white.
- **Destination tiles**: landmark photos with the city name and an accommodation count beneath.
- **Icons**: thin line icons in the search fields (calendar, people, magnifier) and product tabs.

### Interaction Cues
- Round white carousel arrows with a soft shadow sit on the right edge of each row.
- Dot pagination (blue active, grey inactive) under hotel carousels.
- A floating close button (blue circle with white ×) dismisses the app-promo card.

### Voice & Microcopy
Short, direct and deal-focused: "SEE THE WORLD FOR LESS", "Save 10% on your 1st app booking!", "Just scan the QR code for instant savings", "Up to 20% off", "Booked 8 times today", "Free cancellation", "Per night before taxes". The press release describes the intended tone as "thoughtful, surprising, unexpected, playful and humble" ([press](https://www.agoda.com/press/agoda-new-brand-identity/)).

## Colors

> **Source pages:** `https://www.agoda.com/` (extraction + probes in SOURCES.json); logo palette from the official [logo guidelines](https://www.agoda.com/press/agoda-logo-guidelines/). ADS variable names (from `:root`) are given in brackets.

### Interaction
- **Interaction Blue** (`{colors.primary}` — `#2067da`) [`--ads-border-primary-base-strong`]: SEARCH button, active product tab, outlined-button text ("List your place", "Create account", "Sign in"), selected-chip border, focus ring.
- **On Primary** (`{colors.on-primary}` — `#ffffff`).
- **Blue Pressed** (`{colors.primary-pressed}` — `#1751ae`) [`--ads-colors-notice-state-pressed`]: selected-chip label ("Overnight Stays").
- **Blue Subtle** (`{colors.primary-subtle}` — `#e5efff`): selected-chip fill.
- **Link Blue** (`{colors.link}` — `#5392f9`): computed colour of nav/footer anchors and skip link.
- **Guideline interaction colour** (`{colors.interaction-guideline}` — `#478cf7`): the press-site guideline names `#478cf7` as the "Product interaction color … used for Agoda products' call-to-action buttons". The live site ships `#2067da` for its CTA, so the live value is `primary`; `#478cf7` is kept only as the documented brand value.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page and card background.
- **Surface Blue** (`{colors.surface-blue}` — `#eff4fc`) [`--ads-colors-generic-base-on-intent`]: large pale-blue areas.
- **Surface Panel** (`{colors.surface-panel}` — `#f8f7f9`): the search panel.
- **Surface Deals** (`{colors.surface-deals}` — `#f3efd8`) [`--ads-colors-deals-base-inverted-subtle`]: deals tint.
- **Surface Dark** (`{colors.surface-dark}` — `#2a2a2e`): legal strip at the bottom of the page.
- **Sticky Bar** (`{colors.sticky-bar}` — `#20274d`): full-width compact search bar that appears on scroll.

### Text
- **Ink** (`{colors.ink}` — `#252c38`) [`--ads-colors-trips-base-default`, `--ads-colors-feedback-neutral`]: headings and card text.
- **Ink Muted** (`{colors.ink-muted}` — `#5e6b82`) [`--ads-colors-generic-base-intent`]: most-read text colour — meta lines, inactive tabs, footer links.
- **Ink Black** (`{colors.ink-black}` — `#000000`): body element default, field values.
- **Input Text** (`{colors.input-text}` — `#2a2a2e`): destination field text.
- **On Dark Muted** (`{colors.on-dark-muted}` — `#d7d7db`): legal copy on the dark strip.

### Semantic
- **Price** (`{colors.price}` — `#c53829`): sale prices in result cards (ADS uses `rgba(197,56,41,.16)` for `--ads-border-negative-base-subtle`, i.e. the same hue as its negative intent).
- **Positive** (`{colors.positive}` — `#007e3e`) [`--ads-border-positive-base-strong`]: positive/green intent; the only green background measured on the page. The discount badges in the capture are green; the per-element value was not separately probed.

### Lines
- **Border** (`{colors.border}` — `#dddfe2`): search fields.
- **Hairline** (`{colors.hairline}` — `#5e6b8252`, ink-muted at 32% alpha): result cards, chips, outlined buttons — the most frequent border colour.

### Logo Palette (official)
From the [logo guidelines](https://www.agoda.com/press/agoda-logo-guidelines/) "Primary colors" — "the only ones you should use in our logo":
- `{colors.logo-black}` `#292929` (PMS Neutral Black C) · `{colors.logo-red}` `#ff2938` (PMS 1795C) · `{colors.logo-yellow}` `#fdb812` (PMS 124C) · `{colors.logo-green}` `#00b057` (PMS 7739C) · `{colors.logo-purple}` `#af38b1` (PMS 2069C) · `{colors.logo-blue}` `#00aae0` (PMS 299C).
These are logo colours, not UI fills.

## Typography

### Font Family
Every measured text element renders in **Helvetica Neue** (stack `"Helvetica Neue", Helvetica, Arial, sans-serif`); it is the only family in the character-weighted table. The 2019 brand refresh announced a "custom Agoda typeface" ([press](https://www.agoda.com/press/agoda-new-brand-identity/)), visible in the logo wordmark, but the web UI does not load it — no Agoda webfont was among the loaded fonts (only an `icons` icon font).

### Hierarchy

| Token | Size | Weight | Line Height | Notes |
|---|---|---|---|---|
| `{typography.display-hero}` | 24px | 700 | 31.2px | Uppercase, white, on photo |
| `{typography.display-hero-mobile}` | 24px | 700 | 31.2px | Unchanged at 390px |
| `{typography.heading-section}` | 24px | 600 | 29px | Section titles, `#252c38` |
| `{typography.heading-card}` | 20px | 600 | 24px | App-promo card title |
| `{typography.button}` | 16px | 600 | 20.33px | SEARCH label |
| `{typography.field-value}` | 16px | 400 | 22.8571px | Search field values (dates) |
| `{typography.body}` | 14px | 600 | 18.19px | Most frequent size; card names, footer links |
| `{typography.body-light}` | 14px | 300 | 14px | Legal line on dark strip |
| `{typography.ui}` | 13px | 400 | 18.5714px | Body element default, nav, outlined buttons |
| `{typography.caption}` | 12px | 400 | 17.1428px | Chips, meta text, card body |
| `{typography.micro}` | 10px | 400 | — | Tiny labels ("New!", "Bundle and save!") |

Weight 600 carries the most characters on the page; 400 is second. No letter-spacing other than `normal` was measured.

### Principles
- Small and dense: 12px and 14px make up the large majority of text.
- Emphasis by weight 600, not by size.
- Uppercase only for the hero line and the SEARCH label.

### Note on Font Substitutes
Helvetica Neue is a system/commercial font (Linotype). On platforms without it, the site's own stack falls back to Helvetica, then Arial. Keep that stack.

## Layout

### Spacing System
- Measured gaps are dominated by 4px and 8px, then 16px and 12px; paddings by 4px, 2px, 8px, 12px, 16px, 24px.
- **Tokens**: `{spacing.xxs}` 2px · `{spacing.xs}` 4px · `{spacing.sm}` 8px · `{spacing.md}` 12px · `{spacing.lg}` 16px · `{spacing.xl}` 24px · `{spacing.xxl}` 32px · `{spacing.xxxl}` 48px · `{spacing.huge}` 64px.
- **Search panel padding**: 32px 48px 64px.
- **Card padding**: 16px (promo), 8px (flight result).

### Grid & Container
- Content column 900px wide at a 1280px viewport (hero title and section titles measure 900px); the search fields are 804px.
- Carousels show 4–6 cards with a round arrow button overlapping the right edge.
- Result cards: 180×153px flight cards; hotel and activity cards in rows of five.

### Whitespace Philosophy
Tight inside components (4–8px), generous between sections. Content sits in a centred white container with a hairline border; the page relies on photography for colour.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat + `#5e6b8252` hairline | Result cards, chips |
| 1 | `rgba(4, 7, 10, 0.16) 0px 1px 3px 0px` | Light raise (measured) |
| 2 | `rgba(4, 7, 10, 0.24) 0px 2px 7px 0px` | Nav pills, carousel arrows (most frequent shadow) |
| 3 | `rgba(0, 0, 0, 0.2) 0px 2px 8px 3px` | Search panel over the hero |
| Focus | `0 0 0 2px #fff, 0 0 0 4px #2067da` | Focus ring declared in the CSS |

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 2px | Most frequent: badges, small tags, anchor focus box |
| `{rounded.sm}` | 4px | Input element |
| `{rounded.md}` | 8px | Search fields (date pair uses 8px 0px 0px 8px / 0px 8px 8px 0px), promo card |
| `{rounded.lg}` | 16px | Search panel, result cards |
| `{rounded.tab}` | 24px | Product tabs |
| `{rounded.pill}` | 9999px | Buttons and chips (rendered as 999px) |

The check-in / check-out fields form one joined control: the left half rounds only its left corners and the right half only its right corners. The hero photograph has a large rounded lower-left corner in the capture (value not measured).

## Components

### Buttons
**`button-primary`** — SEARCH: `{colors.primary}` fill, white `{typography.button}` uppercase label, `{rounded.pill}`, padding 12px 24px, 44px tall, 490px wide, centred and overhanging the bottom of the search panel. No hover change was measurable on the button element.

**`button-outlined`** — "List your place", "Create account": white fill, `{colors.primary}` label in `{typography.ui}`, 1px `#5e6b8252` border, pill, padding 12px 24px, 44px tall.
- **`button-outlined-hover`**: border becomes `#2067da` (measured hover); fill and text unchanged.
- "Sign in" is the same shape with a transparent fill.

**`button-ghost`** — "+ Add a flight": transparent, `{colors.primary}` 14px/600 label, pill, padding 8px 16px, 36px tall.

### Chips
**`chip`** — "Day Use Stays", category filters (Attractions, Transportation, Food …): white, `{colors.ink}` 12px label, 1px `#5e6b8252` border, pill, padding 4px 16px, 36px tall.
**`chip-selected`** — "Overnight Stays": `{colors.primary-subtle}` fill, `{colors.primary-pressed}` label, 2px `#2067da` border.
Small "See all" chips are 28px tall with 1px 12px padding.

### Tabs
**`tab-active` / `tab-inactive`** — product tabs with an icon and label: 24px radius, 4px 12px padding, active label `{colors.primary}`, inactive `{colors.ink-muted}`.

### Inputs & Forms
**`text-input`** — search fields: white, 1px `#dddfe2` border, `{rounded.md}`, 66px tall, leading line icon, value in `{typography.field-value}` with a 12px `#5e6b82` sub-label ("Saturday", "1 room"). Destination input text `#2a2a2e`, placeholder "Enter a destination or property".

### Cards & Containers
**`search-panel`** — `{colors.surface-panel}`, `{rounded.lg}`, padding 32px 48px 64px, Level 3 shadow.
**`card-promo`** — app promotion card ("Save 10% on your 1st app booking!"): white, 8px radius, 16px padding, centred QR code.
**`card-result`** — flight/hotel/activity cards: white, 16px radius, `#5e6b8252` hairline, 8px padding, photo top, 12px meta, red `{colors.price}` price bottom-right.

### Navigation
**`nav`** — white 60px header: logo left, product links (Flight + Hotel with a red "Bundle and save!" micro label, Hotels & Homes, Transport with a red "New!" label, more menu), then outlined "List your place", language flag, currency, "Sign in", outlined "Create account", hamburger.
**`sticky-search-bar`** — on scroll a 70px `{colors.sticky-bar}` bar carries a compact search form.

### Footer
**`footer`** — white multi-column link lists (Help center, FAQs, Privacy policy, Cookie policy, Terms of use …) in `{colors.ink-muted}` 14px/600.
**`footer-legal`** — `{colors.surface-dark}` strip with 14px/300 `#d7d7db` text: "Agoda is part of Booking Holdings Inc., the world leader in online travel & related services."

## Design System Architecture

Agoda builds its product UI with the **Agoda Design System (ADS)**. There is no public documentation site or npm package; what is known comes from Agoda's own engineering publication and from the tokens shipped on agoda.com.

- **What ADS is (official)**: the Agoda Engineering & Design article [Pixels to Product: Innovating with Design System](https://medium.com/agoda-engineering/1062f9645a34) (Aug 28, 2023) describes a design system with a design-systems lead, a toolkit of "design language, UI kits, visual assets, and guidelines", components that feature teams compose into full pages, and use by the **white-label** team for "effortless reuse of components and theming" for partners.
- **Token architecture (measured)**: the live `:root` exposes hundreds of `--ads-*` custom properties with a strict naming grammar `--ads-{property}-{intent}-{base|state}-{role}-{strength}`:
  - property: `bg`, `colors` (text/icon), `border`;
  - intent: `primary`, `positive`, `negative`, `notice`, `deals`, `urgent`, `generic`, and product/loyalty families `hotels`, `homes`, `flights`, `trips`, `cash`, `luxury`, `family`, `day`, `premium`, `vip-bronze/silver/gold/platinum/diamond/prime`, plus `decorative-1…4` and `brand-1…5`;
  - base roles: `default`, `intent`, `on-intent`, `surface`, `surface-floating`, `background`, `overlay`, `inset`, `transparent`, `inverted`;
  - states: `hover`, `pressed`, `active`, `inactive`, `focus`, `disabled`;
  - strength suffix: `-subtle`, `-strong`.
  Verbatim examples: `--ads-border-primary-base-strong: #2067da`, `--ads-colors-notice-state-pressed: #1751ae`, `--ads-colors-trips-base-default: #252c38`, `--ads-bg-primary-state-disabled: rgba(25,43,73,.08)`, `--ads-border-positive-base-strong: #007e3e`, `--ads-shadow-center-l: 0px 0px 9px 4px rgba(0,0,0,.24)`. A `deprecated` family (`--ads-bg-deprecated-neutral-4`) shows tokens are versioned out rather than deleted.
- **Theming**: theming is an explicit ADS goal for white-label partners (article above). On agoda.com, intent families with `inverted` roles and `surface-floating-inverted` (`#192b49`) provide on-dark variants; no user-facing dark mode was observed.
- **Type & spacing**: one family (Helvetica Neue) with sizes 10/12/13/14/16/20/24px; spacing on a 4px base (2, 4, 8, 12, 16, 24, 32, 48, 64px). Component class names are atomic and prefixed (`afcde-box`, `afcde-bg-product-primary`, `afcde-fill-inherit`) alongside styled-components names (`Typographystyled__TypographyStyled`, `TextLink__TextLinkStyled`, `Inputstyled__InputStyled`, `Box-sc-…`).
- **Component model (observable)**: Button (primary / outlined / ghost; pill; 36px and 44px heights), Chip (default / selected), Tab, Input/IconBox, Card, TextLink, Typography, Box. No official inventory is public.
- **Accessibility**: the article states WCAG accessibility is integrated into the design system so components are accessible "out of the box", with page-level keyboard navigation and cross-device behaviour left to product teams. The site includes a "Skip to main content" link and a 2px white + 2px blue focus ring in CSS.
- **Brand layer**: logo rules, clear space and the six logo colours are in the official [logo guidelines](https://www.agoda.com/press/agoda-logo-guidelines/); the refreshed identity (logo, custom typeface, "Agojis" characters) is in the [brand identity release](https://www.agoda.com/press/agoda-new-brand-identity/).
- **Delivery**: no public npm package, Figma community kit or versioned docs were found (searches in SOURCES.json).

## Do's and Don'ts

### Do
- Use `{colors.primary}` `#2067da` for the single primary action and active states.
- Make buttons and chips pills; make cards 16px.
- Use `#5e6b8252` hairlines instead of shadows on cards.
- Keep text small (12–14px) and use weight 600 for emphasis.
- Show prices in `{colors.price}` with the struck original above.
- Keep the search panel floating over the hero photo with its Level 3 shadow.

### Don't
- Don't use the six logo colours as UI fills; they belong to the logo dots.
- Don't substitute the guideline `#478cf7` for the live `#2067da` CTA blue.
- Don't use square-cornered buttons.
- Don't add hover colour changes to the primary button that were not measured.
- Don't set body text in pure black; use `#252c38` / `#5e6b82`.
- Don't introduce a custom webfont for UI — the site uses Helvetica Neue.

## Responsive Behavior

### Breakpoints

| Name | Width | Key Changes |
|---|---|---|
| Desktop | 1280px measured | 900px content column, 5-up carousels, full header |
| Mobile | 390px measured | h1 stays 24px/700; section title 24px → 20.359px (fluid); header keeps "List your place", language and currency |

### Touch Targets
- Primary and outlined buttons are 44px tall; chips 36px; search fields 66px.

### Collapsing Strategy
- Section titles scale fluidly on mobile (measured 20.359px).
- The joined date fields keep their split radii.
- Carousels remain horizontal-scrolling.

### Mobile Header
- The 390px header keeps the skip link, "List your place", language selector and currency (฿) entries, white background, 13px/400 text.
- The joined check-in / check-out date fields remain side by side (336px wide on mobile).

### Image Behavior
Card photos crop to fixed-ratio tops; the hero photograph is full-bleed behind the search panel.

## Iteration Guide

1. Start with `{colors.canvas}`, `{colors.ink}` and `{typography.body}`.
2. One `button-primary` per view; secondary actions are `button-outlined` or `button-ghost`.
3. Filters are `chip` / `chip-selected`.
4. Results are `card-result` at 16px radius with hairline borders.
5. Section titles use `{typography.heading-section}` 24px/600.
6. Name new tokens with the ADS grammar (`--ads-{bg|colors|border}-{intent}-{base|state}-{role}-{strength}`).
7. Logo colours only for the logo; brand guideline `#478cf7` is not confirmed in the live product, so it was not measured there.
