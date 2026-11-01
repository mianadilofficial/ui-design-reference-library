---
version: alpha
name: Booking.com
category: "Travel & Hospitality"
description: "Booking.com's traveller site pairs a deep brand-blue #003b95 header band with a white canvas, Avenir Next 700 headlines (48px hero, 24px section titles) over a system-ui body stack at 14–16px, action blue #006ce4 buttons (hover #0057b8) with 4px corners, a yellow #ffb700 frame around the search box, 8px cards with a 0px 2px 8px #1a1a1a29 shadow, #1a1a1a ink and 9999px pill tabs — all driven by --bui_* tokens on a data-bui-theme=traveller-light body."

colors:
  primary: "#006ce4"
  primary-hover: "#0057b8"
  primary-tint-hover: "#006ce40f"
  primary-focus: "#006ce43d"
  primary-alt-bg: "#f0f6ff"
  primary-on-dark: "#57a6f4"
  brand-blue: "#003b95"
  accent-yellow: "#ffb700"
  accent-foreground: "#946800"
  accent-alt-bg: "#fffaec"
  genius-yellow: "#febb02"
  canvas: "#ffffff"
  surface-alt: "#f5f5f5"
  ink: "#1a1a1a"
  ink-alt: "#595959"
  ink-disabled: "#a2a2a2"
  border: "#868686"
  border-alt: "#e7e7e7"
  disabled: "#d9d9d9"
  hover-tint: "#1a1a1a0f"
  scrim: "#1a1a1a99"
  on-primary: "#ffffff"
  destructive: "#d4111e"
  destructive-hover: "#af0e19"
  constructive: "#008234"
  callout: "#f56700"
  callout-foreground: "#923e01"

typography:
  display-3:
    fontFamily: "\"Avenir Next\", system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 62px
  headline-1:
    fontFamily: "\"Avenir Next\", system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  headline-2:
    fontFamily: "\"Avenir Next\", system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32px
  hero-subtitle:
    fontFamily: "\"Avenir Next\", system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  headline-3:
    fontFamily: "\"Avenir Next\", system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
  button-large:
    fontFamily: "system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 28px
  strong-1:
    fontFamily: "system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  emphasized-1:
    fontFamily: "system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  body-1:
    fontFamily: "system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  strong-2:
    fontFamily: "system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
  emphasized-2:
    fontFamily: "system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  body-2:
    fontFamily: "system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  small-2:
    fontFamily: "system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 18px
  small-1:
    fontFamily: "system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px

rounded:
  sm: 4px
  md: 8px
  lg: 16px
  score: 4.36364px 4.36364px 4.36364px 0px
  pill: 9999px

spacing:
  half: 2px
  1x: 4px
  2x: 8px
  3x: 12px
  4x: 16px
  6x: 24px
  8x: 32px
  12x: 48px
  16x: 64px
  24x: 96px

components:
  header:
    backgroundColor: "{colors.brand-blue}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-2}"
    padding: 8px 0px 0px
    height: 124px
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.emphasized-2}"
    rounded: "{rounded.sm}"
    padding: 4px 12px
    height: 36px
    border: "1px solid #006ce4"
  button-primary-hover:
    backgroundColor: "{colors.primary-tint-hover}"
  button-filled:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.emphasized-2}"
    rounded: "{rounded.sm}"
    padding: 4px 12px
    height: 36px
  button-filled-hover:
    backgroundColor: "{colors.primary-hover}"
  button-search:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-large}"
    rounded: "{rounded.sm}"
    padding: 4px 24px
    height: 50px
  button-search-hover:
    backgroundColor: "{colors.primary-hover}"
  search-box:
    backgroundColor: "{colors.accent-yellow}"
    rounded: "{rounded.md}"
    padding: 4px
    boxShadow: "0px 2px 8px 0px #1a1a1a29"
  search-field:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.emphasized-2}"
    rounded: "{rounded.sm}"
  nav-tab-active:
    textColor: "{colors.on-primary}"
    typography: "{typography.emphasized-2}"
    rounded: "{rounded.pill}"
    padding: 11px 16px
    height: 44px
    border: "1px solid #ffffff"
  chip-selected:
    textColor: "{colors.primary}"
    typography: "{typography.body-2}"
    rounded: "{rounded.pill}"
    padding: 11px 16px
    height: 44px
    border: "1px solid #006ce4"
  chip-hover:
    backgroundColor: "{colors.hover-tint}"
  card-feature:
    backgroundColor: "{colors.surface-alt}"
    textColor: "{colors.ink}"
    typography: "{typography.body-2}"
    rounded: "{rounded.md}"
    padding: 16px
    border: "1px solid #e7e7e7"
  card-offer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-2}"
    rounded: "{rounded.md}"
    padding: 16px
    border: "1px solid #e7e7e7"
  card-property:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.strong-1}"
    rounded: "{rounded.md}"
    boxShadow: "0px 2px 8px 0px #1a1a1a29"
  review-score:
    backgroundColor: "{colors.brand-blue}"
    textColor: "{colors.on-primary}"
    typography: "{typography.small-1}"
    rounded: "{rounded.score}"
    size: 24px
  icon-button-floating:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.pill}"
    size: 36px
    boxShadow: "0px 2px 8px 0px #1a1a1a29"
  modal-scrim:
    backgroundColor: "{colors.scrim}"
  footer:
    backgroundColor: "{colors.surface-alt}"
    textColor: "{colors.ink}"
    typography: "{typography.body-2}"
  footer-link-hover:
    textDecoration: underline
---

## Overview

Booking.com's homepage is a **search-first travel marketplace**. A solid brand-blue band
(`{colors.brand-blue}` `#003b95`) carries the white Booking.com wordmark, the currency (THB), a language
flag, a help icon, "List your property", and white "Register" / "Sign in" buttons; under them sits a row of
vertical tabs — Stays, Flights, Flight + Hotel, Car rental, Activities, Airport transfers — with the active
one outlined as a white pill. The band holds the 48px white headline "Find your next stay" and a 24px
subtitle, and ends where a **yellow-framed search box** straddles the edge: destination, dates, guests and a
big blue "Search" button inside a `#ffb700` 4px frame.

Below, the page is a white feed of modules with 24px Avenir Next titles: "Why Booking.com?" (four grey cards
with spot illustrations), "Offers" (one wide bordered card with a blue "Search deals" button and a photo),
"Stay at our top unique properties" (a carousel of shadowed property cards with stars, Genius badges and blue
score squares), "Quick and easy trip planner" (pill chips and destination tiles), and "Trending destinations"
(large photo cards with white names and flags). A light-grey footer of link columns closes it.

The measured capture also shows the **Genius "Sign in, save money" dialog** over a `#1a1a1a99` scrim — part of the
real first-visit experience.

**Key Characteristics:**
- Two-zone page: blue `#003b95` header band, white `#ffffff` content, grey `#f5f5f5` footer.
- One action blue `{colors.primary}` `#006ce4`: filled buttons, outlined header buttons, selected chips; hover `#0057b8`.
- Yellow `{colors.accent-yellow}` `#ffb700` used as a frame around search, plus yellow stars and Genius marks.
- Avenir Next 700 for display and headings; system-ui for everything else.
- Small radii: 4px buttons and inputs, 8px cards, 9999px pills; a unique 3-rounded-corner score badge.
- One shadow everywhere: `0px 2px 8px 0px #1a1a1a29` (`--bui_shadow_100`).

## Colors

> **Source:** `--bui_*` custom properties computed on `<body data-bui-theme="traveller-light">` and measured elements (recorded in `SOURCES.json` `_probes`).

### Brand & Action
- **Action Blue** (`{colors.primary}` — `#006ce4`, `--bui_color_action_background`): filled buttons, outlined-button text/border, selected chips, links.
- **Action Hover** (`{colors.primary-hover}` — `#0057b8`, `--bui_color_action_highlighted`): hover fill of filled buttons.
- **Action Tint Hover** (`{colors.primary-tint-hover}` — `#006ce40f`, `--bui_color_action_highlighted_alt`): hover fill of outlined buttons.
- **Action Focus** (`{colors.primary-focus}` — `#006ce43d`, `--bui_color_action_focus`).
- **Action Alt Background** (`{colors.primary-alt-bg}` — `#f0f6ff`, `--bui_color_action_background_alt`).
- **Action on Dark** (`{colors.primary-on-dark}` — `#57a6f4`, `--bui_color_action_foreground_inverted`).
- **Brand Blue** (`{colors.brand-blue}` — `#003b95`, `--bui_color_brand_primary_background`): header band, review-score badges.
- **Accent Yellow** (`{colors.accent-yellow}` — `#ffb700`, `--bui_color_accent_background` / `--bui_color_brand_secondary_background`): search-box frame.
- **Accent Foreground** (`{colors.accent-foreground}` — `#946800`) and **Accent Alt** (`{colors.accent-alt-bg}` — `#fffaec`).
- **Genius Yellow** (`{colors.genius-yellow}` — `#febb02`, `--bui_color_brand_genius_secondary_foreground`).

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page and cards.
- **Surface Alt** (`{colors.surface-alt}` — `#f5f5f5`, `--bui_color_background_alt`): footer, feature cards.
- **Border Alt** (`{colors.border-alt}` — `#e7e7e7`): card borders. **Border** (`{colors.border}` — `#868686`): form borders.
- **Disabled** (`{colors.disabled}` — `#d9d9d9`). **Hover Tint** (`{colors.hover-tint}` — `#1a1a1a0f`): chip hover.
- **Scrim** (`{colors.scrim}` — `#1a1a1a99`): modal overlay.

### Text
- **Ink** (`{colors.ink}` — `#1a1a1a`, `--bui_color_foreground`): all primary text.
- **Ink Alt** (`{colors.ink-alt}` — `#595959`, `--bui_color_foreground_alt`): section subtitles, distances, meta.
- **Ink Disabled** (`{colors.ink-disabled}` — `#a2a2a2`).
- **On Primary** (`{colors.on-primary}` — `#ffffff`): text on blue, on photos.

### Semantic
- **Destructive** (`{colors.destructive}` — `#d4111e`; hover `{colors.destructive-hover}` `#af0e19`).
- **Constructive** (`{colors.constructive}` — `#008234`).
- **Callout** (`{colors.callout}` — `#f56700`; text `{colors.callout-foreground}` `#923e01`).
These are defined tokens in the live theme; the homepage itself shows none of them prominently.

## Typography

### Font Family
- **Avenir Next** — display and headline roles (`--bui_font_display_*`, `--bui_font_headline_*`), at weight 700 (400 for the hero subtitle).
- **system-ui stack** — `system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif` as computed; the BUI variables
  list `BlinkMacSystemFont,-apple-system,Segoe UI,Roboto,Helvetica,Arial,sans-serif` for body / strong / emphasized / small roles.
- The stylesheet also declares a **Blue Sans** @font-face, which the homepage did not render.

### Hierarchy

| Token | Family | Size | Weight | Line Height | BUI role | Use |
|---|---|---|---|---|---|---|
| `{typography.display-3}` | Avenir Next | 48px | 700 | 62px | display_3 | Hero headline |
| `{typography.headline-1}` | Avenir Next | 32px | 700 | 40px | headline_1 | Large headline (defined; mobile sizes) |
| `{typography.headline-2}` | Avenir Next | 24px | 700 | 32px | headline_2 | h1 element, section h2s, destination names |
| `{typography.hero-subtitle}` | Avenir Next | 24px | 400 | 32px | — | "Search deals on hotels, homes…" |
| `{typography.headline-3}` | Avenir Next | 20px | 700 | 28px | headline_3 | Offer card title |
| `{typography.button-large}` | system-ui | 20px | 500 | 28px | — | Search button |
| `{typography.strong-1}` | system-ui | 16px | 700 | 24px | strong_1 | Property / destination card titles |
| `{typography.emphasized-1}` | system-ui | 16px | 500 | 24px | emphasized_1 | Emphasis |
| `{typography.body-1}` | system-ui | 16px | 400 | 24px | body_1 | Subtitles, paragraphs |
| `{typography.strong-2}` | system-ui | 14px | 700 | 20px | strong_2 | Feature card titles |
| `{typography.emphasized-2}` | system-ui | 14px | 500 | 20px | emphasized_2 | Buttons, tabs, input value |
| `{typography.body-2}` | system-ui | 14px | 400 | 20px | body_2 | Default UI text, footer links |
| `{typography.small-2}` | system-ui | 12px | 500 | 18px | small_2 | Small emphasis |
| `{typography.small-1}` | system-ui | 12px | 400 | 18px | small_1 | Meta, review labels, score |

The theme also defines `display_2` 64px/72px and `display_1` 96px/108px, not rendered on the homepage.

### Principles
- **Role names, not sizes.** Every style is a BUI role: display / headline / strong / emphasized / body / small, numbered 1 (larger) and 2 (smaller).
- **Weights 400 / 500 / 700 only.** 500 is the button and tab weight.
- **Line-height on a 4px grid:** 18, 20, 24, 28, 32, 40, 62px.
- **No letter-spacing** anywhere.

### Note on Font Substitutes
Avenir Next is a commercial typeface; Booking.com relies on it being installed and falls back to the system stack. Keep the system-ui stack
for body text exactly as served, and use the same fallback chain for headings when Avenir Next is unavailable.

## Layout

### Spacing System
- **Tokens (BUI):** `{spacing.half}` 2px · `{spacing.1x}` 4px · `{spacing.2x}` 8px · `{spacing.3x}` 12px · `{spacing.4x}` 16px ·
  `{spacing.6x}` 24px · `{spacing.8x}` 32px · `{spacing.12x}` 48px · `{spacing.16x}` 64px · `{spacing.24x}` 96px (`--bui_spacing_*`).
- Most frequent measured gaps: 4px, 8px, 16px; paddings 8px, 16px, 4px.
- Cards pad 16px; pills pad `11px 16px`; buttons `4px 12px` (search `4px 24px`).

### Grid & Container
- `--bui_container: 1140px`; measured content width 1108px. `--sectionMaxWidth: 1110px`.
- "Why Booking.com?": 4 cards of 265px. Property carousel: 265px cards. Trip planner: 6 destination tiles.
- Trending destinations: 2 large cards then 3 cards per row.

### Whitespace Philosophy
Dense but orderly; measured gaps and paddings sit on the 4px BUI grid.
The blue band gives the page a strong top anchor; everything below is white and quiet.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat, `1px solid #e7e7e7` | Feature and offer cards |
| 1 | `0px 2px 8px 0px #1a1a1a29` (`--bui_shadow_100`) | Property cards, search box, floating icon buttons |
| 2 | `0px 2px 16px 0px #1a1a1a3d` (`--bui_shadow_200`) | Defined for raised surfaces |
| Overlay | `#1a1a1a99` scrim | Sign-in dialog |

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.sm}` | 4px (`--bui_border_radius_100`) | Buttons, inputs, search button |
| `{rounded.md}` | 8px (`--bui_border_radius_200`) | Cards, search-box frame |
| `{rounded.lg}` | 16px (`--bui_border_radius_300`) | Dialog / large surfaces |
| `{rounded.score}` | 4.36364px 4.36364px 4.36364px 0px | Review-score badge — square with a sharp bottom-left corner |
| `{rounded.pill}` | 9999px (`--bui_border_radius_rounded`) | Nav tabs, chips, round icon buttons |

The **score badge** is the signature shape: a 24px blue square whose bottom-left corner is not rounded, like a speech bubble.

## Components

### Buttons
- **`button-primary`** (the extracted primary CTA) — header "Register" / "Sign in": white fill, `{colors.primary}` text, 1px `#006ce4` border
  (drawn on `::before`), `{typography.emphasized-2}`, `4px 12px`, 36px tall, 4px radius. Hover adds `{colors.primary-tint-hover}`.
- **`button-filled`** — "Search deals", "Sign in or register": `{colors.primary}` fill (on `::before`), white label, `4px 12px`, 36px,
  4px radius; hover `{colors.primary-hover}`.
- **`button-search`** — the search box button: same fill, `{typography.button-large}` 20px/500, `4px 24px`, 50px tall; hover `#0057b8`.

### Search
**`search-box`** — a `{colors.accent-yellow}` frame, 8px radius, 4px padding, level-1 shadow, holding white 4px-radius fields
(destination with bed icon and "Where are you going?", dates, guests) and the `button-search`. Below: two checkboxes
("I'm traveling for work", "Add flights") in `{typography.body-2}`.

### Navigation
- **`header`** — `{colors.brand-blue}`, 124px tall, `8px 0px 0px` padding.
- **`nav-tab-active`** — vertical tab pill: white 1px border, 9999px radius, `11px 16px`, 44px tall, white 14px/500 label with icon; inactive
  tabs keep a transparent border.

### Chips
**`chip-selected`** — trip-planner filter ("Shopping & Outlets"): 1px `#006ce4` border, blue text, pill, `11px 16px`, 44px.
Unselected chips have no border and get `{colors.hover-tint}` on hover.

### Cards
- **`card-feature`** — "Why Booking.com?": `#f5f5f5`, `1px solid #e7e7e7`, 8px, 16px padding, illustration + `{typography.strong-2}` title + body.
- **`card-offer`** — white, bordered, 8px, 16px padding; small label, `{typography.headline-3}` title, body, `button-filled`, photo at right.
- **`card-property`** — 265px wide, 8px, level-1 shadow; photo with a round white heart button; type + stars + Genius badge;
  `{typography.strong-1}` name; location in `{typography.small-1}`; `review-score` + "Wonderful" + review count.
- **`review-score`** — 24px `{colors.brand-blue}` square, white 12px score, `{rounded.score}`.
- **Destination tiles** — photo with `{typography.strong-1}` name and `{colors.ink-alt}` distance.

### Floating controls
**`icon-button-floating`** — 36px white circle with level-1 shadow: carousel arrows and save (heart) buttons.

### Dialog
The Genius sign-in dialog: white, rounded, centered, close "×", Genius logo, 24px title, body text and a full-width `button-filled`, over `{components.modal-scrim}`.

### Footer
**`footer`** — `{colors.surface-alt}`, link columns in `{typography.body-2}` `{colors.ink}` with `2px 0px` padding; hover underlines.

## Design System Architecture

Booking.com has an internal design system whose tokens ship to the live page, but **no public design-system documentation** could be opened
for this file: posts on Booking's design publication (booking.design) appeared in search results but returned errors / HTTP 403 and were not
read (see `SOURCES.json`). Everything below is measured on https://www.booking.com/ itself.

- **Token architecture:** tokens are CSS custom properties prefixed `--bui_` (Booking UI), set on `<body data-bui-theme="traveller-light">`.
  Naming is semantic by role → variant → property, e.g. `--bui_color_action_background`, `--bui_color_action_highlighted`,
  `--bui_color_action_focus`, `--bui_color_brand_primary_background`, `--bui_color_foreground_alt`, `--bui_color_border_alt`,
  `--bui_color_destructive_background`, `--bui_color_constructive_background`, `--bui_color_callout_background`,
  `--bui_color_brand_genius_secondary_foreground`. Many colors also have `_rgb` triplets (`--bui_color_action_background_rgb: 0,108,228`)
  and `_dynamic` / `_alt` variants. No primitive palette tier is exposed on the page — components consume semantic tokens directly.
- **Theming:** the theme is chosen by the `data-bui-theme` attribute; the measured value is `traveller-light`. Other theme values were not observed.
- **Type:** font tokens per role and size step — `--bui_font_{display|headline|featured|strong|emphasized|body|small}_{1|2|3}_{font-family|font-size|font-weight|line-height}`,
  with sizes written as `calc(0.0625rem * N)` (N px at a 16px root).
- **Spacing & shape:** `--bui_spacing_half` (2px) and `--bui_spacing_{1x…24x}` in 4px steps; `--bui_border_radius_100/200/300` (4/8/16px) and
  `_rounded` (9999px); `--bui_shadow_100/200`; z-index tokens `--bui_z_index_1…4`; layout `--bui_container: 1140px`.
- **Component model:** class names are hashed (`de576f5064 b46cd7aad7 …`); buttons draw fill and border on a `::before` layer so the hover state
  changes only the pseudo-element. Focus rings are composed from tokens: `0 0 0 2px var(--bui_color_background_base), 0 0 0 4px var(--bui_color_action_border)`
  (from the CSS corpus). Components seen: header, vertical-tab pills, search box, checkbox, button (outlined, filled, large), chip, cards
  (feature, offer, property, destination), score badge, carousel arrows, dialog, footer.
- **Accessibility:** a "Skip to main content" link is the first body text; focus rings are a 2px base gap + 2px action-blue ring per the CSS above.
- **Delivery:** no public package or Figma kit was opened.

## Do's and Don'ts

### Do
- Use `{colors.primary}` `#006ce4` for every action; hover to `#0057b8`.
- Keep the blue `#003b95` header band with white text and pill tabs.
- Frame the main search in `#ffb700` with a 4px inset.
- Use Avenir Next 700 for headlines and system-ui for UI text, at the BUI role sizes.
- Keep radii at 4 / 8 / 16 / 9999px and shadows at `--bui_shadow_100`.
- Show review scores in the blue square badge with one sharp corner.

### Don't
- Don't use yellow as a button fill — it frames search and marks Genius/stars.
- Don't invent new grey shades; use `#1a1a1a`, `#595959`, `#a2a2a2`, `#868686`, `#e7e7e7`, `#f5f5f5`.
- Don't round buttons into pills; only tabs and chips are pills.
- Don't add letter-spacing or weights other than 400 / 500 / 700.

## Responsive Behavior

### Breakpoints
Measured at 1280px and 390px.

| Width | Measured changes |
|---|---|
| 1280px | Header 124px; hero headline 48px; 4-up feature cards; 1108px content |
| 390px | Header 116px (still `#003b95`) containing the vertical tabs; h1 element and h2 stay 24px/32px; body paragraph wraps to 2 lines (48px); small text down to 10px appears; 20px and 32px sizes used |

### Touch Targets
- Pill tabs and chips 44px; buttons 36px; search button 50px; floating icon buttons 36px.

### Collapsing Strategy
- The header keeps the blue `#003b95` band (measured at 390px); other collapse rules were not measured.

### Image Behavior
Destination and property photos are cropped to fixed tiles; trending cards overlay white names on photos.

## Iteration Guide

1. Build the `{components.header}` band in `#003b95` with white `{components.nav-tab-active}` pills.
2. Add the `{typography.display-3}` headline and `{typography.hero-subtitle}`, then the yellow `{components.search-box}` with `{components.button-search}`.
3. Add sections with `{typography.headline-2}` titles and `{typography.body-1}` `{colors.ink-alt}` subtitles.
4. Use `{components.card-feature}`, `{components.card-offer}` and `{components.card-property}` with `{components.review-score}`.
5. Use `{components.chip-selected}` for filters and `{components.icon-button-floating}` for carousels.
6. Close with the grey `{components.footer}`.
7. Name new styles after BUI roles and keep values on the `--bui_*` scale.
