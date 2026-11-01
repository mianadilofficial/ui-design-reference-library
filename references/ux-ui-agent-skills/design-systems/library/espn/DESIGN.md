---
version: alpha
name: ESPN
category: "Sports & Fitness"
description: "ESPN's web front page (international edition, global.espn.com) — a dense three-column news board on a cool grey #edeef0 canvas with white 10px-rounded story cards, a #2b2c2d top bar, the red #dd0000 skewed logo slash, system-font text in #48494a/#1d1e1f, BentonSans 14px/700 uppercase section headers, PublicoBannerExtrabold 28px feature titles and 40px-radius pill buttons."

colors:
  primary: "#dd0000"
  canvas: "#edeef0"
  surface: "#ffffff"
  surface-rail: "#f9f9fb"
  surface-strip: "#f1f2f3"
  nav-bar: "#2b2c2d"
  ink: "#48494a"
  ink-strong: "#1d1e1f"
  ink-heading: "#101113"
  ink-muted: "#6c6d6f"
  ink-faint: "#a5a6a7"
  ink-black: "#000000"
  on-dark: "#ffffff"
  input-text: "#2b2c2d"
  hairline: "#dcdddf"
  border: "#cbccce"
  link: "#0066cc"
  link-hover: "#004d9a"
  action-blue: "#3772df"
  action-blue-hover: "#305bc8"
  fantasy-green: "#2dcc30"
  page-title: "#444444"
  table-rule: "#cccccc"
  table-zebra: "#0000000a"
  nav-link: "#f9f9f9"

typography:
  page-title:
    fontFamily: "\"ESPN Ignite Text Narrow\", BentonSans, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 26px
  table-title:
    fontFamily: "\"Benton Sans\", BentonSans, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  table-cell:
    fontFamily: "\"Benton Sans\", BentonSans, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14px
  table-head:
    fontFamily: "\"Benton Sans\", BentonSans, Arial, sans-serif"
    fontSize: 11px
    fontWeight: 500
    lineHeight: 12px
  feature-title:
    fontFamily: "PublicoBannerExtrabold, Georgia, serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 34px
  headline-lead:
    fontFamily: "-apple-system, \"system-ui\", Roboto, Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 22px
    fontWeight: 700
    lineHeight: 28px
  headline:
    fontFamily: "-apple-system, \"system-ui\", Roboto, Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 21px
  section-header:
    fontFamily: "BentonSans, -apple-system, \"system-ui\", Roboto, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 18px
  nav-link:
    fontFamily: "BentonSans, -apple-system, \"system-ui\", Roboto, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 43px
  base:
    fontFamily: "-apple-system, \"system-ui\", Roboto, Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
  body:
    fontFamily: "-apple-system, \"system-ui\", Roboto, Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19px
  input:
    fontFamily: "-apple-system, \"system-ui\", Roboto, Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 400
  module-title:
    fontFamily: "-apple-system, \"system-ui\", Roboto, Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 12px
    fontWeight: 800
  button:
    fontFamily: "-apple-system, \"system-ui\", Roboto, Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 32px
  body-sm:
    fontFamily: "-apple-system, \"system-ui\", Roboto, Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px

rounded:
  xs: 2px
  card: 10px
  button: 40px

spacing:
  xxs: 3px
  xs: 5px
  sm: 7px
  md: 8px
  lg: 10px
  xl: 12px
  pill-x: 18px
  gutter: 20px
  xxl: 24px

components:
  button-primary:
    backgroundColor: "{colors.action-blue}"
    textColor: "{colors.on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 18px
    height: 32px
  button-primary-hover:
    backgroundColor: "{colors.action-blue-hover}"
  button-fantasy:
    backgroundColor: "{colors.fantasy-green}"
    textColor: "{colors.ink-heading}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 18px
    height: 32px
  button-outline:
    backgroundColor: "transparent"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    border: "1px solid #cbccce"
    padding: 0px 18px
    height: 32px
  button-outline-on-dark:
    backgroundColor: "transparent"
    textColor: "{colors.on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    border: "1px solid #ffffff"
    padding: 0px 18px
    height: 32px
  nav-bar:
    backgroundColor: "{colors.nav-bar}"
    textColor: "{colors.on-dark}"
    typography: "{typography.nav-link}"
    height: 44px
    shadow: "rgba(0, 0, 0, 0.3) 0px 4px 2px -2px"
  logo-slash:
    backgroundColor: "{colors.primary}"
    transform: "matrix(1, 0, -0.466308, 1, 0, 0)"
  card-story:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
    shadow: "rgba(0, 0, 0, 0.16) 0px 1px 4px 0px"
  card-rail:
    backgroundColor: "{colors.surface-rail}"
    textColor: "{colors.ink}"
    typography: "{typography.body-sm}"
    rounded: "{rounded.card}"
  headline-list-item:
    textColor: "{colors.ink-black}"
    typography: "{typography.body-sm}"
    padding: 7px 0px
    borderBottom: "1px solid #dcdddf"
  link:
    textColor: "{colors.link}"
    typography: "{typography.button}"
  link-hover:
    textColor: "{colors.link-hover}"
    textDecoration: underline
  text-input:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.input-text}"
    typography: "{typography.input}"
    padding: 0px 12px 0px 35px
    height: 40px
  table-head-cell:
    textColor: "{colors.ink-black}"
    typography: "{typography.table-head}"
    padding: 8px 4px
    height: 30px
    borderTop: "1px solid #cccccc"
    borderBottom: "1px solid #cccccc"
  table-row:
    textColor: "{colors.ink-black}"
    typography: "{typography.table-cell}"
    padding: 8px 4px
    height: 36px
  table-row-alt:
    backgroundColor: "{colors.table-zebra}"
  select-dropdown:
    textColor: "{colors.input-text}"
    typography: "{typography.body-sm}"
    padding: 0px 29px 0px 16px
    height: 28px
  footer-link:
    textColor: "{colors.ink}"
    typography: "{typography.body-sm}"
    padding: 10px 0px
    borderBottom: "1px solid #dcdddf"
---

## Overview

ESPN's front page is a scoreboard-adjacent news board, not a magazine. The measured page is ESPN's international edition (`www.espn.com` redirected the headless browser to `global.espn.com`). It is built from three columns on a cool light-grey canvas (`{colors.canvas}` — `#edeef0`): a 220px left rail of link modules (Quick Links, Following, ESPN Sites, Editions, ESPN Apps, Follow ESPN), a 660px centre column of white story cards, and a 300px right rail (Top Headlines, promos, Fantasy).

Above it all sits a 44px charcoal bar (`{colors.nav-bar}` — `#2b2c2d`) with the ESPN wordmark on a red slash (`{colors.primary}` — `#dd0000`) skewed 25° and white BentonSans sport links (Football, NBA, MLB, NFL, MMA, F1, Olympic Sports, More Sports, Fantasy). An odds/score strip runs above that on the very top of the page.

Typography is mostly the operating system's own sans (`-apple-system, "system-ui", Roboto, Arial…`) — the page's dominant family by far. Brand faces appear only at structural points: **BentonSans** for the nav and uppercase section headers, **PublicoBannerExtrabold** for featured story titles over images.

**Key Characteristics:**
- Grey canvas `#edeef0` + white cards `#ffffff` rounded 10px with a soft `0 1px 4px rgba(0,0,0,.16)` shadow.
- Red `#dd0000` is a logo/brand mark colour, not a button colour. Action links are blue `#0066cc`.
- Text is warm-neutral greys: `#48494a` body, `#1d1e1f` headlines, `#101113` section headers, `#6c6d6f` meta.
- Uppercase BentonSans 14px/700 section headers, usually preceded by a team/league logo.
- Small type: 12px is the most-used size on the page.
- Pill buttons (`border-radius: 40px`, 32px tall, `0 18px` padding).

## Colors

> **Source:** computed styles on `global.espn.com` (homepage extraction + recorded probes). The site exposes no CSS custom properties on `:root`.

### Brand & Accent
- **ESPN Red** (`{colors.primary}` — `#dd0000`): The skewed slash behind the wordmark (measured `::before` background). Also the most-used chromatic colour in the stylesheets (172 occurrences).
- **Action Blue** (`{colors.action-blue}` — `#3772df`, hover `{colors.action-blue-hover}` `#305bc8`): filled "Create Account" pill and the "Log In" outline label.
- **Fantasy Green** (`{colors.fantasy-green}` — `#2dcc30`): filled "Create A League" pill inside the Fantasy Football promo.
- **Link Blue** (`{colors.link}` — `#0066cc`): Text links ("Manage Following", "Explainers, what's next…"). Hover `{colors.link-hover}` `#004d9a` with underline (measured).

### Surface
- **Canvas** (`{colors.canvas}` — `#edeef0`): `<body>` and page background; by far the largest painted area.
- **Surface** (`{colors.surface}` — `#ffffff`): Story cards and right-rail modules.
- **Surface Rail** (`{colors.surface-rail}` — `#f9f9fb`): Left-rail modules and the Edition select.
- **Surface Strip** (`{colors.surface-strip}` — `#f1f2f3`): Odds strip tiles at the top.
- **Nav Bar** (`{colors.nav-bar}` — `#2b2c2d`): Global navigation bar.

### Text
- **Ink** (`{colors.ink}` — `#48494a`): Most-read colour — subheads, rail links, module text.
- **Ink Strong** (`{colors.ink-strong}` — `#1d1e1f`): Story headlines and module titles.
- **Ink Heading** (`{colors.ink-heading}` — `#101113`): Uppercase section headers; label on the green pill.
- **Ink Muted** (`{colors.ink-muted}` — `#6c6d6f`): Timestamps, bylines, small card summaries (hover darkens to `#48494a`).
- **Ink Faint** (`{colors.ink-faint}` — `#a5a6a7`): Counts and tertiary meta.
- **Ink Black** (`{colors.ink-black}` — `#000000`): Top Headlines list links.
- **On Dark** (`{colors.on-dark}` — `#ffffff`): Nav text, featured titles over images.

### Lines
- **Hairline** (`{colors.hairline}` — `#dcdddf`): 1px dividers in lists and module titles.
- **Border** (`{colors.border}` — `#cbccce`): Outline of the "Select Edition" pill.

## Typography

### Font Family
- **System stack** — `-apple-system, "system-ui", Roboto, Arial, "Helvetica Neue", Helvetica, sans-serif` — carries 3,290 weighted chars vs 96 for BentonSans. On macOS it renders as SF; on Android as Roboto.
- **BentonSans** — loaded at 700 (and used at 500 in the nav). Section headers and nav links.
- **PublicoBannerExtrabold** — loaded as a single face; featured story titles over imagery.
- The stylesheets also declare `IgniteDisplayCondensed`, `IgniteTextCondensedBold` and `ESPNIcons` (icon font); the Ignite faces were not seen rendered on the homepage.

### Hierarchy

| Token | Family | Size | Weight | Line height | Use |
|---|---|---|---|---|---|
| `{typography.feature-title}` | PublicoBannerExtrabold | 28px | 400 | 34px | Featured story title over image |
| `{typography.headline-lead}` | System | 22px | 700 | 28px | Lead story headline |
| `{typography.headline}` | System | 16px | 600 | 21px | Secondary story headlines |
| `{typography.section-header}` | BentonSans | 14px | 700 | 18px | Uppercase section header ("MLB POSTSEASON") |
| `{typography.nav-link}` | BentonSans | 12px | 500 | 43px | Global nav links |
| `{typography.base}` | System | 16px | 400 | normal | Document base size |
| `{typography.body}` | System | 14px | 400 | 19px | Story subheads / summaries |
| `{typography.input}` | System | 14px | 400 | normal | Search input |
| `{typography.module-title}` | System | 12px | 800 | normal | Rail module titles ("Quick Links", "Top Headlines") |
| `{typography.button}` | System | 12px | 600 | 32px | Pill button labels |
| `{typography.body-sm}` | System | 12px | 400 | 16px | Headline lists, rail links, podcast blurbs |

### Principles
- **Small and dense.** 12px carries 1,900 chars — more than all other sizes combined except 16px.
- **Weights do the hierarchy.** 400 / 600 / 700 / 800 on the same system face differentiate titles, labels and body.
- **Uppercase only in BentonSans headers.** Story headlines are sentence case.
- **Letter-spacing is normal** everywhere except an 11px label style that uses `1px` tracking (measured in the letter-spacing table).

### Note on Font Substitutes
BentonSans and PublicoBannerExtrabold are commercial typefaces served by ESPN as webfonts; ESPN publishes no font guidance (the [2026 brand identity announcement](https://espnpressroom.com/feature/espns-new-brand-identity-built-for-how-fans-live-sports/) mentions only "custom typography"). The body already uses the system stack, so only the two display roles need substitutes: any licensed grotesque at 700 uppercase for section headers, any heavy banner serif for feature titles.

## Layout

### Spacing System
- Most-used paddings: 12px (66), 8px (23), 7px (16), 10px (13), 18px (7), 16px (6).
- Tokens: `{spacing.xxs}` 3px · `{spacing.xs}` 5px · `{spacing.sm}` 7px · `{spacing.md}` 8px · `{spacing.lg}` 10px · `{spacing.xl}` 12px · `{spacing.pill-x}` 18px · `{spacing.gutter}` 20px · `{spacing.xxl}` 24px.
- The spacing is not on a strict 4/8 grid: 7px list-item padding and 18px pill padding are both real values.

### Grid & Container
- Three columns at 1280px: left rail 220px (modules), centre 660px (story cards), right rail 300px (headlines/promos). Gutters around 20px.
- Story cards stack vertically in the centre; each "package" card contains a section header, a lead image + headline, then a two-up row of smaller image-left stories and a footer row of related links.
- Rails are independent stacks; the right rail is shorter and leaves canvas visible.

### Measured page metrics
- Homepage scroll height at 1280px: 4,841px; 641 visible elements.
- Standings page: 2,971px; table rows 36px, header row 30px.
- Story card width 660px; rail module width 220px; fantasy promo 300×260px with 260px-wide buttons.

### Whitespace Philosophy
Tight. Content is packed into cards; grey canvas between cards is the only breathing room. Line lengths in the centre column stay under ~660px.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat `#edeef0` | Canvas |
| 1 | `rgba(0, 0, 0, 0.16) 0px 1px 4px 0px` | Story cards, linked story tiles (measured on hover-tested card) |
| 2 | `rgba(0, 0, 0, 0.3) 0px 4px 2px -2px` | Sticky global nav bar shadow |

The site uses shadow sparingly and softly; the white-on-grey contrast does most of the separation.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 2px | Small badges, thumbnails |
| `{rounded.card}` | 10px | All cards and modules (also split as `10px 10px 0 0` for top images and `0 0 10px 10px` for card footers) |
| `{rounded.button}` | 40px | Pill buttons (32px tall, so effectively fully round) |

### Skewed Logo Slash
`logo-slash`: the wordmark sits on a `#dd0000` block drawn with a `::before` pseudo-element and `transform: matrix(1, 0, -0.466308, 1, 0, 0)` — a 25° horizontal skew. This is the only angled shape in the UI.

## Components

### Buttons

**`button-primary`** — "Create Account": `{colors.action-blue}` `#3772df` fill (hover `{colors.action-blue-hover}` `#305bc8`), `{colors.on-dark}` white label, `{typography.button}` (12px/600), padding `0 18px`, 32px tall, radius 40px. Its outlined sibling "Log In" uses the same blue for its label.

**`button-fantasy`** — "Create A League": `{colors.fantasy-green}` `#2dcc30` fill, `{colors.ink-heading}` `#101113` label, same geometry (line-height 32px). It is the Fantasy promo's action, not a site-wide brand button.

**`button-outline`** — "Select Edition": transparent (or `#f9f9fb` in the rail), `1px solid #cbccce`, `#48494a` label, same pill geometry (line-height 30px inside the border).

**`button-outline-on-dark`** — "Join Public League" / "Reactivate A League" in the Fantasy promo: `1px solid #ffffff`, white label, same geometry.

### Cards & Containers

**`card-story`** — centre column package: white, 10px radius, shadow level 1. Lead story image full-width at top; headline `{typography.headline-lead}` 22px/700 `#1d1e1f`; subhead `{typography.body}` 14px/19px `#48494a`; meta `#6c6d6f`.

**`card-rail`** — left rail module: `#f9f9fb`, 10px radius; title `{typography.module-title}` 12px/800; links 12px with 16px league/site icons on the left.

**Featured card** — dark image card with a `{typography.feature-title}` PublicoBannerExtrabold 28px/34px white headline.

### Lists

**`headline-list-item`** — Top Headlines: 12px links, `7px 0` padding, 1px `#dcdddf` divider. First items can carry emoji markers ([U+27A1 U+FE0F] ▶[U+FE0F]) inside related-link rows.

### Navigation

**`nav-bar`** — `#2b2c2d`, 44px, shadow level 2. Left: red-slash ESPN logo (80×44). Then BentonSans 12px/500 white links with 43px line-height.

### Inputs

**`text-input`** — search field: white, `#2b2c2d` text 14px, padding `0 12px 0 35px` (room for the search icon), 40px tall, square corners.

### Links

**`link`** — `#0066cc`, 12–13px/600; hover `#004d9a` + underline.

### Data Tables (standings page)

Measured on the Premier League table (`/football/table/_/league/eng.1`), extracted as `espn--standings`:

- **Page title** `{typography.page-title}` — the h1 switches to **ESPN Ignite Text Narrow** 20px/700, line-height 26px, in `{colors.page-title}` `#444444`. This is the only place the Ignite family was seen rendered.
- **Table title** `{typography.table-title}` — "Benton Sans" 16px/500, line-height 24px, capitalised, black.
- **`table-head-cell`** — "Benton Sans" 11px/500, line-height 12px, uppercase, black, padding `8px 4px`, 30px tall, with 1px `#cccccc` rules above and below.
- **`table-row`** — "Benton Sans" 12px/400, line-height 14px, black, padding `8px 4px`, 36px rows.
- **`table-row-alt`** — every second row gets `rgba(0,0,0,0.04)` (`#0000000a`) zebra striping.
- **Legend** — under the table, 12px/500 `#444444` notes ("Positions 1, 2, 3, 4: Champions League").
- **`select-dropdown`** — season/league selects: 12px system font `#2b2c2d`, padding `0 29px 0 16px` (room for the chevron), 28px tall.

On this page "Benton Sans" (with a space) is the dominant family by characters, followed by Verdana and Arial (from embedded third-party widgets) — the data pages lean on Benton Sans far more than the front page does.

The measured canvas is the same `#edeef0`; the table sits in a white panel. Text colours on the data page are darker than on the front page: `#151617` is the most-read colour there, `#000000` second.

### Nav link hover
Nav links render `#f9f9f9` and brighten to pure `#ffffff` on hover (measured on the standings page). Link-style hovers elsewhere go to `#004d9a`.

### Footer

**`footer-link`** — rail-footer link rows ("Manage Following"): 12px, `10px 0` padding, 1px `#dcdddf` border.

## Design System Architecture

**No public ESPN web design system, token package or component documentation was found** (searches recorded in `SOURCES.json`). The only official statement is the ESPN press room's [2026 brand identity feature](https://espnpressroom.com/feature/espns-new-brand-identity-built-for-how-fans-live-sports/), which describes "a flexible design system" spanning digital, social and linear, built on "the distinctive 7° angle in the logo, and the dynamic speedline and custom typography" plus "vibrant color palettes and the bold monogram 'E'". It lists no typeface names or colour values and says ESPN.com will adopt it later — the measured site does not yet show it.

What is measurable on the site (the de-facto system):
- **Tokens:** no CSS custom properties are exposed. Colours are literals repeated across stylesheets — `#ffffff` (1,178), `#1d1e1f` (462), `#3a3b3c` (350), `#0066cc` (340), `#48494a` (312), `#6c6d6f` (308), `#a5a6a7` (296), `#dcdddf` (284), `#f1f2f3` (270), `#cbccce` (228), `#edeef0` (202), `#dd0000` (172). These form a ten-step cool-neutral ramp plus red and link blue.
- **Class naming:** BEM-style (`contentItem__title`, `contentItem__title--featured`, `contentItem__subhead`, `headlineStack__header`, `headlineStack__list`).
- **Type system:** system stack for content, BentonSans for nav/section headers, PublicoBannerExtrabold for features; the CSS corpus also contains font-family values named `mobile`, `tablet`, `desktop`, `desktop-lg` (purpose not documented).
- **Theming:** no dark mode or theme switch observed.
- **Component inventory (observed):** global nav bar, odds strip, rail modules, story package cards, featured image card, headline stack, pill buttons, search input, edition select.
- **Accessibility:** "Skip to main content" and "Skip to navigation" links are present. No published contrast or focus rules were found.
- **Delivery:** no npm package or public Figma kit.

## Do's and Don'ts

### Do
- Lay out three columns on `#edeef0`: 220px rail, 660px story column, 300px rail.
- Put content in white 10px-rounded cards with the `0 1px 4px rgba(0,0,0,.16)` shadow.
- Use the system font stack for headlines and body; reserve BentonSans for uppercase 14px/700 section headers and nav.
- Keep red `#dd0000` for the logo slash; use `#0066cc` for text links.
- Use 40px-radius pills, 32px tall with `0 18px` padding.
- Precede section headers with the team or league logo.
- On data pages, use "Benton Sans" 11px/500 uppercase headers and 12px/400 cells with `rgba(0,0,0,0.04)` zebra rows.
- Hover text links to `#004d9a`; hover nav links from `#f9f9f9` to `#ffffff`.
- Give list rows `7px 0` padding and a 1px `#dcdddf` divider.

### Don't
- Don't fill buttons with ESPN red — no red buttons were measured.
- Don't use pure black for body text; body is `#48494a`, headlines `#1d1e1f`.
- Don't introduce large type: the biggest measured size is 28px for features.
- Don't add new radii; cards are 10px, pills 40px.
- Don't add heavy shadows.

## Responsive Behavior

### Breakpoints

| Viewport | Measured change |
|---|---|
| 1280px | Three columns; most-used size 12px; nav bar 44px |
| 390px | Most-used size becomes 14px (1,140 chars) — subheads 14px/19px stay; nav becomes "Menu / ESPN / Scores" 44px bar with the same drop shadow |

### Mobile type distribution (390px, measured)

| Size | Weighted chars | Typical role |
|---|---|---|
| 14px | 1,140 | Story subheads (14px/19px) and list text |
| 13px | 423 | Rail/list links |
| 12px | 214 | Meta, buttons |
| 11px | 190 | Labels |
| 22px | 79 | Lead headline |
| 28px | 50 | Featured title |

Compared with desktop (12px = 1,900 chars, 16px = 619, 14px = 371), mobile shifts the reading size up from 12px to 14px.

### Touch Targets
- Pill buttons 32px tall; nav bar 44px; headline list rows ~46px (7px padding + two lines).

### Collapsing Strategy
- Headline sizes 22px and 28px remain on mobile (both appear in the mobile size table).

### Image Behavior
Lead images span the card width with top-only 10px rounding (`10px 10px 0 0`); secondary stories use a left thumbnail beside the headline.

## Iteration Guide

1. Canvas `{colors.canvas}`, cards `{colors.surface}` with `{rounded.card}` and level-1 shadow.
2. Headlines in `{typography.headline-lead}` / `{typography.headline}` `{colors.ink-strong}`; body `{typography.body}` `{colors.ink}`.
3. Section headers: `{typography.section-header}` uppercase, `{colors.ink-heading}`.
4. Buttons: `{rounded.button}` 40px pills; filled green only in Fantasy promos, otherwise outline.
5. Logo: red `{colors.primary}` slash skewed with `matrix(1, 0, -0.466308, 1, 0, 0)`.
6. Keep everything small — 12px meta, 14px body.
