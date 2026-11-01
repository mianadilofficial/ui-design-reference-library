---
version: alpha
name: NSW Government
category: "Government & Nonprofit"
description: "NSW Government (nsw.gov.au) is built on the NSW Digital Design System — Public Sans throughout (700 headings at 48px/32px/20px, 16px/24px body), white canvas with #22272b text, NSW Blue 01 #002664 for buttons, links and nav labels, NSW Red #d7153a as a 4px accent rule, #f2f2f2 off-white panels, 4px radii on buttons and cards and 30px pill links for popular pages."

colors:
  primary: "#002664"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#22272b"
  ink-pill: "#333333"
  off-white: "#f2f2f2"
  accent: "#d7153a"
  accent-light: "#ffe6ea"
  brand-light: "#cbedfd"
  brand-supplementary: "#146cfd"
  grey-02: "#495054"
  grey-03: "#cdd3d6"
  grey-04: "#ebebeb"
  hover: "#0026641a"
  active: "#00266433"
  focus: "#0086b3"
  focus-light: "#cce7f0"
  visited: "#551a8b"
  disabled: "#8093b2"
  info: "#2e5299"
  info-bg: "#eaedf4"
  success: "#008a07"
  success-bg: "#e5f6e6"
  warning: "#c95000"
  warning-bg: "#fbeee5"
  error: "#b81237"
  error-bg: "#f7e7eb"

typography:
  heading-1:
    fontFamily: "\"Public Sans\", sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 60px
  heading-1-mobile:
    fontFamily: "\"Public Sans\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 45px
  heading-2:
    fontFamily: "\"Public Sans\", sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  heading-2-mobile:
    fontFamily: "\"Public Sans\", sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 35px
  heading-3:
    fontFamily: "\"Public Sans\", sans-serif"
    fontSize: 24px
    fontWeight: 700
  heading-4:
    fontFamily: "\"Public Sans\", sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
  intro:
    fontFamily: "\"Public Sans\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 1.5
  body:
    fontFamily: "\"Public Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  label:
    fontFamily: "\"Public Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  small:
    fontFamily: "\"Public Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  xxs:
    fontFamily: "\"Public Sans\", sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 18px

rounded:
  none: 0px
  sm: 4px
  pill-link: 30px
  circle: 50%

spacing:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 32px
  xxl: 40px
  section: 48px
  huge: 64px
  hero-x: 80px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.label}"
    rounded: "{rounded.sm}"
    padding: 10px 22px
    height: 48px
    border: 2px solid transparent
  button-secondary:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    typography: "{typography.label}"
    rounded: "{rounded.sm}"
    padding: 10px 22px
    height: 48px
    border: "2px solid {colors.primary}"
  button-secondary-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  search-button:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.label}"
    rounded: 0px 4px 4px 0px
    padding: 0px 24px
    height: 48px
    border: "1px solid {colors.ink}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: 4px 0px 0px 4px
    padding: 11px 16px
    height: 48px
    border: "1px solid {colors.ink}"
  pill-link:
    backgroundColor: transparent
    textColor: "{colors.ink-pill}"
    typography: "{typography.label}"
    rounded: "{rounded.pill-link}"
    padding: 10.08px 16px
    height: 48px
    border: "2px solid {colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.label}"
    textDecoration: underline
  link-hover:
    backgroundColor: "{colors.hover}"
  utility-button-hover:
    backgroundColor: "{colors.hover}"
    rounded: "{rounded.sm}"
  hero-search-panel:
    backgroundColor: "{colors.off-white}"
    textColor: "{colors.ink}"
    rounded: 4px 4px 0px 0px
    padding: 32px 80px
    borderBottom: "4px solid {colors.accent}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 32px 32px 94px
  header:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    height: 116px
  nav:
    backgroundColor: "{colors.off-white}"
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    height: 56px
  nav-hover:
    backgroundColor: "{colors.hover}"
  feature-band:
    backgroundColor: "{colors.accent-light}"
    textColor: "{colors.ink}"
  footer-upper:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderTop: "1px solid {colors.grey-03}"
  footer-lower:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.small}"
    padding: 16px 0px 24px
---

## Overview

nsw.gov.au is the front door of the New South Wales Government, and it looks exactly like what it is: a
service-first government portal built from the public NSW Digital Design System. Nothing on the page is
decorative for its own sake. The page is white (`{colors.canvas}` — `#ffffff`), the text is a near-black
cool grey (`{colors.ink}` — `#22272b`, the system's `--nsw-text-dark` / `--nsw-grey-01`), and every
actionable thing is NSW Blue 01 (`{colors.primary}` — `#002664`, `--nsw-brand-dark`).

The capture reads top to bottom as a strict stack of full-width bands:

1. A 116px white header with the red Waratah + "NSW GOVERNMENT" logo at left and three utility actions
   (Search, Language, MyServiceNSW) at right, each a blue icon + label.
2. A 56px off-white (`{colors.off-white}` — `#f2f2f2`) main-nav bar with "Living in NSW", "Working and
   business", "What's happening", "Have your say", "Easy Read" in bold 16px ink with chevrons.
3. A hero made of an aerial suburban photograph with a centred off-white search panel sitting on it — the
   panel carries the 48px bold h1 "NSW Government", a one-line intro, a 48px search field joined to a
   blue "Search" button, and a cluster of underlined "Popular" links. A 4px NSW Red rule
   (`{colors.accent}` — `#d7153a`) closes the panel's bottom edge.
4. A pale-pink feature band (`{colors.accent-light}` — `#ffe6ea`) with a photo left and a heading,
   paragraph and outlined "Read more" button right.
5. "What the NSW Government is working on" — a carousel of three image-topped cards, each with a red rule
   under the image, a 20px bold title, body copy and a blue arrow.
6. "Popular pages" — a wrap of 30px-radius outlined pill links.
7. Three topic columns with red-and-blue line pictograms and underlined link lists.
8. Footer — a white upper footer with a `#cdd3d6` top hairline and a `#22272b` lower bar in 14px white type.

The overall tone is calm, civic and dense with links. Photography is documentary (real homes, families,
classrooms, people), never stylised. Colour does almost no expressive work: blue means "you can act on
this", red is a thin brand signature, grey panels group content.

**Key Characteristics:**
- Public Sans only — 700 for headings, labels, buttons and links; 400 for body.
- One action colour: `#002664` fills buttons and colours links, nav labels and utility icons.
- Links are bold AND underlined in body/link lists; hover adds a 10% blue wash (`#0026641a`).
- NSW Red `#d7153a` appears as thin rules (4px under the hero panel, under card images) and in the logo and pictograms — never as a button fill on the homepage.
- 4px radius on buttons, cards and the hero panel; a 30px radius only on the "Popular pages" pill links.
- 48px is the universal control height (search field, search button, outlined button, pill links, utility buttons).
- Flat: no shadows on cards or panels on the homepage.

## Colors

> **Source:** measured on https://www.nsw.gov.au (desktop 1280px) and cross-checked against the token
> names published at https://designsystem.nsw.gov.au/core/colour/index.html. All hexes below exist as
> `--nsw-*` custom properties in the live page's `:root`.

### Brand
- **NSW Blue 01 / brand-dark** (`{colors.primary}` — `#002664`): `--nsw-brand-dark`, `--nsw-link`. Button fills, the outlined-button border, every link, nav-utility labels and icons, carousel arrows.
- **NSW Red 02 / brand-accent** (`{colors.accent}` — `#d7153a`): `--nsw-brand-accent`. The 4px rule under the hero search panel, rules under card images, the Waratah logo and the red parts of pictograms.
- **Red 04 / brand-accent-light** (`{colors.accent-light}` — `#ffe6ea`): `--nsw-palette-red-04`. The pink full-width feature band ("There's help with everyday expenses").
- **Blue 04 / brand-light** (`{colors.brand-light}` — `#cbedfd`): `--nsw-brand-light`. Light button / highlight background in the design system; not prominent on the homepage.
- **Blue 02 / brand-supplementary** (`{colors.brand-supplementary}` — `#146cfd`): `--nsw-brand-supplementary`. Secondary brand blue in the system palette.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page background, header, cards, upper footer. Largest measured area on the page.
- **Off-white** (`{colors.off-white}` — `#f2f2f2`): `--nsw-off-white`. Main-nav bar, hero search panel, "Was this page helpful?" strip, contact block.
- **Grey 04** (`{colors.grey-04}` — `#ebebeb`): hairlines between sections and around the feedback strip.
- **Grey 03** (`{colors.grey-03}` — `#cdd3d6`): the 1px top border of the footer.

### Text
- **Ink / grey-01** (`{colors.ink}` — `#22272b`): `--nsw-text-dark`. All headings and body copy; the most-read text colour on the page (2,738 measured chars). It is also the background of the lower footer.
- **Grey 02** (`{colors.grey-02}` — `#495054`): secondary grey in the palette.
- **Pill text** (`{colors.ink-pill}` — `#333333`): the label colour measured on the "Popular pages" pill links.
- **On primary** (`{colors.on-primary}` — `#ffffff`): text on blue buttons and in the lower footer.

### Interaction states (from the design system, all present in the live `:root`)
- **Hover** (`{colors.hover}` — `#0026641a`): `--nsw-hover`, brand-dark at 10% alpha. Measured on every utility button, nav item and inline link on hover.
- **Active** (`{colors.active}` — `#00266433`): `--nsw-active`, brand-dark at 20% alpha.
- **Focus** (`{colors.focus}` — `#0086b3`): `--nsw-focus`, used as a 3px outline.
- **Focus light** (`{colors.focus-light}` — `#cce7f0`): `--nsw-focus-light` for dark backgrounds.
- **Visited** (`{colors.visited}` — `#551a8b`): `--nsw-visited`.
- **Disabled** (`{colors.disabled}` — `#8093b2`): `--nsw-disabled`.

### Status
| Token | Foreground | Background |
|---|---|---|
| Info | `{colors.info}` `#2e5299` | `{colors.info-bg}` `#eaedf4` |
| Success | `{colors.success}` `#008a07` | `{colors.success-bg}` `#e5f6e6` |
| Warning | `{colors.warning}` `#c95000` | `{colors.warning-bg}` `#fbeee5` |
| Error | `{colors.error}` `#b81237` | `{colors.error-bg}` `#f7e7eb` |

These are the system's `--nsw-status-*` tokens; they are defined on the live page but not rendered on the
homepage itself.

## Typography

### Font Family
**Public Sans** is the only typeface — served as `"Public Sans", sans-serif` on the live page. The design
system's typography page states it is the only font to be used for headings and body copy, and recommends
Arial as the web-safe fallback (`font-family: 'Public Sans', Arial, sans-serif`). The homepage loads
Public Sans 400 and 700 only. Material Icons supplies the UI icons (search, translate, chevrons, arrows).

### Hierarchy (measured, desktop 1280px)

| Token | Size | Weight | Line height | Where |
|---|---|---|---|---|
| `{typography.heading-1}` | 48px | 700 | 60px | "NSW Government" in the hero panel |
| `{typography.heading-2}` | 32px | 700 | 40px | Section titles ("Popular pages", "What the NSW Government is working on") |
| `{typography.heading-3}` | 24px | 700 | — | Topic-column titles ("Community, legal and education") |
| `{typography.heading-4}` | 20px | 700 | 28px | Card titles |
| `{typography.intro}` | 20px | 400 | 1.5 | Intro paragraph (design-system scale) |
| `{typography.body}` | 16px | 400 | 24px | Paragraphs, card copy |
| `{typography.label}` | 16px | 700 | 24px | Buttons, links, nav labels, pill links |
| `{typography.small}` | 14px | 400 | 21px | Lower footer, meta text |
| `{typography.xxs}` | 12px | 700 | 18px | Skip links ("Skip to navigation") |

Mobile (390px) measured: h1 drops to `{typography.heading-1-mobile}` 36px/45px and h2 to
`{typography.heading-2-mobile}` 28px/35px; body stays 16px/24px. This matches the design system's
published scale (H1 48 → 36, H2 32 → 28) and its rule that the font-size mixin switches from the
`-mobile` to the `-desktop` variable at the `lg` (992px) breakpoint.

### Principles
- Two weights only: 700 and 400. Bold carries all interactive text — a link is bold, a button is bold, a nav label is bold.
- No letter-spacing and no uppercase anywhere on the homepage; measured `letter-spacing: normal` and `text-transform: none` on every role.
- Line height is 1.25 for headings and 1.5 for body in the design-system scale (60/48, 40/32, 24/16).
- Sentence case for every heading and button ("Read more", "What's happening").

### Note on Font Substitutes
Public Sans is free and open (SIL Open Font License; it is on Google Fonts and on the NSW masterbrand
typeface site). There is no need for a substitute — load Public Sans. If it fails to load, the system's
own documented fallback is Arial.

## Layout

### Grid & Container
- Container: `--nsw-container-width: 75rem` (1200px) is defined in `:root`; the hero search panel measures exactly 1200px wide at a 1280px viewport, and section headings measure 1168px wide (56px side margins).
- Three-up layout for cards and topic columns (cards measure 368px wide; measured gaps 24px and 32px).
- The design-system grid uses 8px gutters (`$grid-gutters: 8px`) and breakpoints sm 576 / md 768 / lg 992 / xl 1200.
- Body copy is capped by `--max-line-width: 788px` (present in `:root`).

### Spacing System
The live `:root` exposes a plain px spacing scale, used here as the spacing tokens:

| Token | Value | Live variable |
|---|---|---|
| `{spacing.xs}` | 4px | `--spacing-xs` |
| `{spacing.sm}` | 8px | `--spacing-sm` |
| `{spacing.md}` | 16px | `--spacing-md` (most frequent padding on the page) |
| `{spacing.lg}` | 24px | `--spacing-lg` |
| `{spacing.xl}` | 32px | `--spacing-xl` (card and panel padding) |
| `{spacing.xxl}` | 40px | `--spacing-xxl` |
| `{spacing.section}` | 48px | `--spacing-section` (3rem) |
| `{spacing.huge}` | 64px | largest measured gap |
| `{spacing.hero-x}` | 80px | hero panel side padding; also `--spacing-footer` (5rem) |

The design system's own `$spacers` map is responsive: xs 4/8, sm 8/16, md 16/32, lg 24/48, xl 32/64,
xxl 40/80 (mobile/desktop).

### Whitespace Philosophy
Generous vertical air between bands (visible in the capture between the card carousel and "Popular
pages"), but dense inside them: link lists are tight 16px/24px stacks and pill links wrap in rows.
Measured gaps on the page are 24px, 32px, 4px and 64px.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat, no shadow | Every card, panel and band on the homepage (no `box-shadow` measured on any visible element) |
| Tonal | `{colors.off-white}` `#f2f2f2` panel on white or on a photo | Hero search panel, nav bar, feedback strip |
| Rule | 4px `{colors.accent}` bottom edge | The red line that "grounds" the hero panel and card images |

The design system defines `--nsw-box-shadow: 0 .25rem .75rem 0 rgba(var(--nsw-black-rgb),.15)` and the site
defines `--shadow-card: 0 4px 12px 0 rgba(0, 0, 0, .15)` for raised/hover cards, but no shadow is rendered at
rest on the homepage. Depth is communicated by tone (white vs off-white vs photo) rather than elevation.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | Nav bar, bands, footer, link hover wash |
| `{rounded.sm}` | 4px | Buttons, cards, utility-button hover box, hero panel top corners (`--nsw-border-radius: .25rem`) |
| `{rounded.pill-link}` | 30px | "Popular pages" outlined pill links |
| `{rounded.circle}` | 50% | Carousel next arrow and carousel dots |

The search field and search button share one 4px-rounded rectangle: the field is `4px 0px 0px 4px`, the
button `0px 4px 4px 0px`. No skewed, angled or clipped shapes are used.

### Photography Geometry
Card images are full-bleed to the card edges, 200px tall at 368px wide, square-cornered at the top and
underlined by a red rule. The hero photograph is an edge-to-edge aerial image behind the panel.

## Components

### Buttons

**`button-primary`** — the design system's `.nsw-button--dark` (measured on the official Buttons page).
- Background `{colors.primary}` `#002664`, text `{colors.on-primary}`, Public Sans 16px/24px 700.
- Padding `10px 22px`, height 48px, radius `{rounded.sm}` 4px, 2px transparent border, min-width 124px.
- Focus: 3px solid `{colors.focus}` outline with 3px offset (design-system `nsw-focus` mixin).
- Disabled: opacity 0.4 (from `_button.scss`).

**`button-secondary`** — the outlined "Read more" button in the pink feature band.
- Transparent background, text `{colors.primary}`, 2px solid `#002664` border, padding `10px 22px`, height 48px, radius 4px.
- Hover (measured): fills to `{colors.primary}` with `{colors.on-primary}` text and the border turns transparent.

**`search-button`** — "Search" in the hero.
- `{colors.primary}` fill, white bold 16px label, padding `0px 24px`, height 48px, radius `0px 4px 4px 0px`, 1px `#22272b` border. Joined flush to the text input.

**Utility buttons** (Search / Language / MyServiceNSW in the header)
- Transparent, `{colors.primary}` icon + label, 48px tall, 4px radius; hover fills with `{colors.hover}` `#0026641a`.

### Inputs & Forms

**`text-input`** — the hero search field.
- Background `{colors.canvas}`, text `{colors.ink}`, 16px/24px 400, padding `11px 16px`, height 48px, 1px solid `#22272b` border, radius `4px 0px 0px 4px`.
- Label "Search nsw.gov.au" sits above it in bold 16px ink.

### Links

**`link`** — inline and list links.
- `{colors.primary}`, Public Sans 16px/24px **700**, underlined.
- Hover (measured): background `{colors.hover}` behind the text; colour and underline unchanged.
- Visited: `{colors.visited}` `#551a8b` (design system).

**`pill-link`** — "Popular pages" chips.
- Transparent fill, 2px `{colors.primary}` border, text `{colors.ink-pill}` `#333333` bold 16px, padding `10.08px 16px`, 48px tall, radius `{rounded.pill-link}` 30px. External ones carry a small open-in-new icon.

### Cards

**`card`** — "What the NSW Government is working on" carousel cards.
- 368px wide, outer radius 4px, image 200px on top with a red rule beneath.
- Content area: white, padding `32px 32px 94px` (bottom room for the arrow), radius `0px 0px 4px 4px`.
- Title `{typography.heading-4}` 20px/28px 700 ink; body 16px/24px; a blue right-arrow icon at bottom-left.
- Card title hover (measured on the link): text colour switches to `#ffffff` — the card is a hover target whose state is driven by the card wrapper.

### Hero

**`hero-search-panel`**
- `{colors.off-white}` panel, 1200px wide, padding `32px 80px`, radius `4px 4px 0px 0px`, bottom edge 4px solid `{colors.accent}`.
- Centred h1 48px/60px, intro line, labelled search, then "Popular:" link cluster.

### Navigation

**`header`** — 116px white bar: logo left; utility buttons right.

**`nav`** — main navigation bar.
- `{colors.off-white}` background, 56px tall, items bold 16px `{colors.ink}` with a `keyboard_arrow_down` chevron.
- Hover (measured): item background `{colors.hover}`.

### Feature Band
**`feature-band`** — full-width `{colors.accent-light}` `#ffe6ea` band, image left, h2 32px + paragraph + `button-secondary` right.

### Footer
**`footer-upper`** — white, 1px `{colors.grey-03}` top border, link columns in bold blue.
**`footer-lower`** — `{colors.ink}` `#22272b` background, white 14px/21px text, padding `16px 0px 24px`, holding the Acknowledgement of Country and legal links.

## Design System Architecture

NSW publishes a full public design system — the **NSW Digital Design System** at
https://designsystem.nsw.gov.au/ (version 3.28.1 at time of writing), "aligned with the NSW Government
Brand Framework", with source at https://github.com/NSWGTP/nsw-design-system and a Figma kit linked from
the home page.

### Token architecture
Three tiers, all in Sass that compiles to `--nsw-*` CSS custom properties:
1. **Palette (primitive)** — `src/global/scss/settings/_palette.scss` and `_aboriginal-palette.scss`: named
   ramps such as `$blue-01`…`$blue-04`, `$red-01`…`$red-04`, greys, plus green, teal, purple, fuchsia,
   orange, yellow, brown; the Aboriginal palette has culturally named tokens (live examples:
   `--nsw-aboriginal-palette-bush-plum`, `--nsw-aboriginal-palette-coastal-blue`).
2. **Theme (semantic)** — `_theme.scss` maps roles onto the palette:
   `$brand-dark: palette.$blue-01`, `$brand-light: palette.$blue-04`, `$brand-supplementary: palette.$blue-02`,
   `$brand-accent: palette.$red-02`, `$brand-accent-light: palette.$red-04`, `$text-dark: palette.$grey-01`.
   State colours are *derived*: `$hover: color.adjust($brand-dark, $alpha: -0.9)`, `$active` at -0.8 alpha,
   `$disabled: color.mix(#ffffff, $brand-dark, 50%)`
   ([_theme.scss](https://github.com/NSWGTP/nsw-design-system/blob/master/src/global/scss/settings/_theme.scss)).
3. **Component** — Sass maps per component, e.g. `$nsw-buttons` with `dark`, `dark-outline`,
   `dark-outline-solid`, `light` … each listing `text-color`, `background`, `background-hover`, `border`,
   `focus` and `-invert` variants for dark sections
   ([_settings.scss](https://github.com/NSWGTP/nsw-design-system/blob/master/src/global/scss/settings/_settings.scss)).

Naming: `--nsw-{role}` (`--nsw-brand-dark`, `--nsw-text-dark`, `--nsw-link`, `--nsw-focus`,
`--nsw-status-error-bg`), BEM classes `.nsw-button`, `.nsw-button--dark`, `.nsw-card`,
`.nsw-footer__lower`. The nsw.gov.au site layers its own `dcs-*` classes and plain variables
(`--spacing-md`, `--font-size-xs`, `--shadow-card`) on top.

### Theming
Re-theming is done by swapping which palette ramp feeds the brand roles; the colour page says the CSS
variables "enable automatic re-theming", and the repo ships theme files for brown, fuchsia, green, orange,
purple, red, teal and yellow ([themes/](https://github.com/NSWGTP/nsw-design-system/tree/master/src/global/scss/themes)).
Every component map has `-invert` values used when a section background is dark (`--nsw-section-bg`).
No dark mode or density mode is documented.

### Type & spacing systems
- Base font size 16px; seven size steps `xxs`–`xxl`, each with `-mobile` and `-desktop` variables
  (`--nsw-font-size-xxl-desktop: 3rem`, `--nsw-font-size-xxl-mobile: 2.25rem`) and matching
  `--nsw-line-height-*` values; a `font-size()` mixin swaps them at the `lg` breakpoint
  ([_mixins.scss](https://github.com/NSWGTP/nsw-design-system/blob/master/src/global/scss/base/_mixins.scss)).
- Spacing `$spacers` doubles from mobile to desktop (md 16 → 32, xl 32 → 64, xxl 40 → 80); grid gutters 8px.
- Published scale: https://designsystem.nsw.gov.au/core/typography.

### Component model
Components are grouped into eight categories on the docs site — Actions & controls, Content, Feedback &
status, Forms & inputs, Navigation, Overlays, Page structure, Search & task flow. The repo's
`src/components` inventory: accordion, back-to-top, breadcrumbs, button, callout, card-carousel, card,
close-button, content-block, cookie-consent, date-input, date-picker, dialog, file-upload, filters, footer,
form, global-alert, header, hero-banner, hero-search, in-page-alert, in-page-nav, link-list, link,
list-item, loader, main-nav, masthead, media, pagination, popover, progress-indicator, quick-exit,
results-bar, select, show-more, side-nav, status-labels, steps, support-list, table, tabs, tag, tooltip,
utility-list. Button variants documented at
https://designsystem.nsw.gov.au/components/button/index.html: Brand / Dark, Light, Outlined, Danger,
Disabled, plus a `--small` size and `--flex` / `--full-width` modifiers.

### Accessibility
The docs state components "are designed to comply with WCAG 2.2 AA"; the colour page requires text
contrast of at least 4.5:1 (3:1 for large text). Focus is a 3px solid `--nsw-focus` outline with 3px
offset. Icons may not stand alone without text; disabled buttons are discouraged. The live site adds an
"Easy Read" section to the main nav.

### Delivery
npm package `nsw-design-system` (3.28.1; exports `dist/css/main.css` and `dist/js/main.js`,
[package.json](https://github.com/NSWGTP/nsw-design-system/blob/master/package.json)), Sass sources
importable via `nsw-design-system/tools`, framework-agnostic HTML/CSS/JS, Figma kit
"NSW Digital Design System", and release notes on the docs site.

## Do's and Don'ts

### Do
- Use `{colors.primary}` `#002664` for every interactive element — buttons, links, nav utilities, icons.
- Make links bold and underlined; give them the `#0026641a` wash on hover.
- Keep controls 48px tall (inputs, buttons, pill links).
- Use `#22272b` for text, never pure black.
- Use NSW Red only as a thin rule or in pictograms/logo.
- Use off-white `#f2f2f2` panels to group functional content on photos or white.
- Write headings in sentence case, 700 weight, no tracking.
- Use a 3px `#0086b3` focus outline with 3px offset.

### Don't
- Don't fill buttons with red on general pages; red is accent, not action.
- Don't add drop shadows to cards at rest.
- Don't round buttons beyond 4px — pills are reserved for the "Popular pages" link chips.
- Don't introduce a second typeface or weights other than 400/700.
- Don't use colour alone to signal links — keep the underline.
- Don't put status colours (`#b81237`, `#008a07`…) in decorative roles.

## Responsive Behavior

### Breakpoints (design system)
| Name | Min width | Notes |
|---|---|---|
| xs | 0 | Single column |
| sm | 576px | |
| md | 768px | |
| lg | 992px | Desktop nav and desktop type sizes switch on (`$nsw-desktop-breakpoint: lg`) |
| xl | 1200px | Container caps at 75rem |

### Measured at 390px
- h1 36px/45px, h2 28px/35px, body 16px/24px unchanged.
- The "Skip to content" link is a full-width `#002664` bar with 12px/18px bold white text, padding `8px 16px`, hidden off-screen until focused.

### Collapsing strategy
- Spacing tokens halve on mobile (`$spacers` desktop values are double the mobile ones).
- `.nsw-button--full-width` buttons are 100% wide below `lg` and auto-width above.

### Touch targets
48px control height on desktop and mobile; buttons have `min-width: 124px`.

## Iteration Guide

1. Start every page on `{colors.canvas}` with `{colors.ink}` text in Public Sans.
2. Put actions in `{colors.primary}`; check you have only one filled button per band.
3. Headings: 48/32/24/20px at 700 desktop; 36/28/22/18px on mobile.
4. Use 4px radius everywhere except pill link chips (30px) and circular carousel controls.
5. Group functional content in `{colors.off-white}` panels; add a 4px `{colors.accent}` bottom rule for hero panels.
6. Links: bold, underlined, `#002664`, hover wash `#0026641a`.
7. Keep everything flat; no shadows at rest.
8. Validate contrast ≥ 4.5:1 and add the 3px focus ring before shipping.
