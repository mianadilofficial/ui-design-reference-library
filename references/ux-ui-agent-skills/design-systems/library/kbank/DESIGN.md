---
version: alpha
name: KBank
category: "Thai Brands"
description: "KASIKORNBANK (KBank) personal-banking site: white #ffffff canvas under a full-bleed dark photographic hero, KBank green #00a94f for the 8px-radius 48px 'See all services' button, links and the footer link bar, deep green #005a2a footer sitemap, slate #40515e product band, #333333 body text, all set in the served webfonts kurious-looped (headings, 26px/400 h1, 33px section heads) and kurious-looped-cond (13px/16px UI text)."

colors:
  primary: "#00a94f"
  on-primary: "#ffffff"
  primary-deep: "#005a2a"
  secondary: "#18a94f"
  green-bright: "#00ea6d"
  green-muted: "#7dac92"
  primary-tint: "#e5f6ed"
  canvas: "#ffffff"
  surface-soft: "#fafafa"
  surface-alt: "#f8f8fa"
  slate: "#40515e"
  ink: "#333333"
  ink-strong: "#111111"
  ink-muted: "#666666"
  ink-subtle: "#999999"
  gray: "#bcbcbc"
  border: "#dbdbdb"
  border-light: "#e6e6e6"
  hairline: "#ededed"
  dot-inactive: "#d9d9d9"
  scrim: "#000000cc"

typography:
  display-h1:
    fontFamily: "kurious-looped, sans-serif"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 39px
  display-h1-mobile:
    fontFamily: "kurious-looped, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
  heading-section:
    fontFamily: "kurious-looped, sans-serif"
    fontSize: 33px
    fontWeight: 400
    lineHeight: 46.2px
  heading-sub:
    fontFamily: "kurious-looped, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  heading-card:
    fontFamily: "kurious-looped, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 32.4px
  heading-tile:
    fontFamily: "kurious-looped, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 27px
  title-small:
    fontFamily: "kurious-looped, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: "kurious-looped, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  body-ui:
    fontFamily: "kurious-looped-cond, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-sm:
    fontFamily: "kurious-looped-cond, sans-serif"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 19.5px
  button:
    fontFamily: "kurious-looped, sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 48px
  link:
    fontFamily: "kurious-looped, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  tab:
    fontFamily: "kurious-looped, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
  input:
    fontFamily: "kurious-looped, sans-serif"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 15.6px
  footer-heading:
    fontFamily: "kurious-looped-cond, sans-serif"
    fontSize: 16px
    fontWeight: 700
  footer-link:
    fontFamily: "kurious-looped-cond, sans-serif"
    fontSize: 13px
    fontWeight: 400

rounded:
  xs: 4px
  sm: 5px
  md: 8px
  field: 20px
  tabs: 45px
  dot: 50px
  search: 100px
  pill: 9999px

spacing:
  xxs: 4px
  xs: 5px
  sm: 8px
  md: 10px
  ml: 12px
  gutter: 15px
  lg: 16px
  xl: 20px
  xxl: 24px
  xxxl: 32px
  huge: 40px
  section: 64px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 15px
    height: 48px
  button-consent:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.sm}"
    padding: 10px
    height: 48px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  link-on-dark:
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.on-primary}"
    typography: "{typography.body-ui}"
    height: 130px
  card-promo:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 24px
  card-product-tile:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.heading-tile}"
    rounded: "{rounded.md}"
  section-slate:
    backgroundColor: "{colors.slate}"
    textColor: "{colors.on-primary}"
    padding: 64px 0px
  tab-active:
    textColor: "{colors.ink}"
    typography: "{typography.tab}"
    padding: 5px 15px
  tab-inactive:
    textColor: "{colors.ink-muted}"
    typography: "{typography.tab}"
    padding: 5px 15px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.field}"
    border: "1px solid #dbdbdb"
    padding: 0px 16px
    height: 45px
  carousel-dot-active:
    backgroundColor: "{colors.primary}"
    rounded: "{rounded.dot}"
    width: 24px
    height: 8px
  carousel-dot:
    backgroundColor: "{colors.dot-inactive}"
    rounded: "{rounded.dot}"
    width: 8px
    height: 8px
  footer-linkbar:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.footer-link}"
    padding: 18px 0px
  footer:
    backgroundColor: "{colors.primary-deep}"
    textColor: "{colors.on-primary}"
    typography: "{typography.footer-link}"
---

## Overview

KBank (KASIKORNBANK) runs its English personal-banking homepage (`kasikornbank.com/en/personal`) as a long, sectioned portal page. The first screen is a full-bleed photographic hero: smiling people against a deep, near-black green field, with the white KBank wordmark and logo top-left, a dense white mega-nav, and the hero headline "Let KBank take care your finances" in white. In the capture, a white cookie dialog ("Consent letter.") sits over the hero with a single green "Accept all" button — the page's first green call to action.

Below the hero the page alternates bands: a white "Stage of life inspires" row of illustrated life stages (Studying, Office worker, Entrepreneur, Start a family, Wealthy, Retirement), a slate `{colors.slate}` (`#40515e`) "Products Recommended" band holding a 4×2 grid of white product tiles with glossy green 3D illustrations (cards, coins, a house, a car), then a combined "Foreign Exchange Rate" calculator + rate table and a "News & Activities" carousel on the same slate band, a white row of outlined quick links (Products/Promotions, Apply Products/Services, Careers & Scholarships, Download Forms, Locate Us), and finally a two-tier green footer: a `{colors.primary}` (`#00a94f`) link bar over a deep `{colors.primary-deep}` (`#005a2a`) sitemap.

The brand colour is a single saturated green, `#00a94f`, which the site's own CSS names `--color-primary` and `--cr-green`. It carries the primary button, text links, active carousel dots, the cookie "Accept all" button, the quick-link icons and the footer link bar. The official logo page names the logo colours only in words — Green (the wood element), Gray (water) and Red (fire) — without values ([logo page](https://www.kasikornbank.com/en/about/Pages/logo.aspx)).

Typography is set entirely in two served webfonts: `kurious-looped` for headings, cards and buttons, and `kurious-looped-cond` (a condensed cut) for body/UI chrome, nav and footer. Weight does more work than size: section headings are regular (400) at 33px, while small card titles are semi-bold (600) at 18px. Text is never pure black — body text is `#333333`, headings `#111111`, secondary copy `#666666`.

**Key Characteristics:**
- One brand green `#00a94f` for every action; a deeper `#005a2a` only as the footer field.
- White canvas `#ffffff` with full-bleed slate `#40515e` bands for product and rates content.
- 8px radius on buttons and cards; round-ended fields (20px) and tab tracks (45px) in the calculator.
- Regular-weight (400) large headings; semi-bold (600) small titles and links.
- Glossy, green-tinted 3D product illustrations on white tiles, photographic people in the hero.
- Dense, portal-style information architecture: mega-nav, many bands, a sitemap footer.

### Voice & Microcopy
Short, plain, service-oriented phrases in title case: "See all services", "View details", "See more", "Products Recommended", "Stage of life inspires". Card titles speak to the customer's goal ("Want to borrow money", "Get your money’s worth", "Tax saving") with a one-line promise beneath ("Make your loan easier").

## Colors

> **Source pages:** `https://www.kasikornbank.com/en/personal` (extraction + probes recorded in SOURCES.json). Token names in brackets are the site's own CSS custom properties.

### Brand & Accent
- **KBank Green** (`{colors.primary}` — `#00a94f`) [`--color-primary`, `--cr-green`]: primary button, links, active dot, cookie accept, footer link bar, quick-link icons.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): label colour on green and on slate.
- **Deep Green** (`{colors.primary-deep}` — `#005a2a`) [`--bg-green`]: footer sitemap background.
- **Secondary Green** (`{colors.secondary}` — `#18a94f`) [`--color-secondary`]: declared root variable, visually near-identical to primary.
- **Bright Green** (`{colors.green-bright}` — `#00ea6d`) [`--color-green2`]: declared root variable.
- **Muted Green** (`{colors.green-muted}` — `#7dac92`) [`--color-green3`]: measured as a footer child text colour.
- **Green Tint** (`{colors.primary-tint}` — `#e5f6ed`) [`--bg-primary`]: declared pale green surface variable.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`) [`--color-light`, `--cr-light`]: page background and card/tile fill.
- **Surface Soft** (`{colors.surface-soft}` — `#fafafa`): light grey panels (measured by area).
- **Surface Alt** (`{colors.surface-alt}` — `#f8f8fa`) [`--bg-secondary`]: secondary background variable.
- **Slate** (`{colors.slate}` — `#40515e`): the full-bleed "Products Recommended" / rates band (`section.sc-product`).
- **Scrim** (`{colors.scrim}` — `#000000cc`): dark overlay behind the cookie dialog.

### Text
- **Ink** (`{colors.ink}` — `#333333`) [`--cr-dark`]: most-read text colour on the page; body copy and active tab label.
- **Ink Strong** (`{colors.ink-strong}` — `#111111`) [`--cr-black`]: headings on white (card titles, "Stage of life inspires").
- **Ink Muted** (`{colors.ink-muted}` — `#666666`) [`--color-dark`, `--cr-gray`]: body element colour, card body, inactive tab.
- **Ink Subtle** (`{colors.ink-subtle}` — `#999999`): placeholder-level text (empty calculator amount).
- **Gray** (`{colors.gray}` — `#bcbcbc`) [`--color-gray`]: declared grey variable.

### Lines
- **Border** (`{colors.border}` — `#dbdbdb`) [`--cr-border`]: 1px border of calculator fields.
- **Border Light** (`{colors.border-light}` — `#e6e6e6`) [`--color-border`].
- **Hairline** (`{colors.hairline}` — `#ededed`): most frequent measured border colour.
- **Dot Inactive** (`{colors.dot-inactive}` — `#d9d9d9`): inactive carousel dots.

### Semantic
No error/success/warning palette is shown on the measured page and no official source documents one, so none is declared.

## Typography

### Font Family
Two families are served as webfonts (loaded faces measured: `kurious-looped` 500/600, `kurious-looped-cond` 400/500/600/700):
- **`kurious-looped`** — headings, card titles, buttons, links, calculator.
- **`kurious-looped-cond`** — the `body` element default (16px/400/22.4px), nav, footer, cookie dialog. By character count it is the dominant family on the page.

The stylesheets also declare `DBThaiTextX` faces, `Didot`, `GothamRoundedLight`, `FuturaHeavyBT` and icon fonts (`icokbank`, `iconavigation`), but these were not measured on rendered text of the English homepage, so they are not used as tokens.

### Hierarchy

| Token | Family | Size | Weight | Line Height | Use |
|---|---|---|---|---|---|
| `{typography.display-h1}` | kurious-looped | 26px | 400 | 39px | Hero headline (white) |
| `{typography.display-h1-mobile}` | kurious-looped | 24px | 400 | 36px | Hero headline at 390px |
| `{typography.heading-section}` | kurious-looped | 33px | 400 | 46.2px | Band titles ("Products Recommended") |
| `{typography.heading-sub}` | kurious-looped | 20px | 400 | 30px | "Exchange Rate Calculator", hero sub-heading |
| `{typography.heading-card}` | kurious-looped | 18px | 600 | 32.4px | Promo card titles |
| `{typography.heading-tile}` | kurious-looped | 18px | 600 | 27px | Product tile titles |
| `{typography.title-small}` | kurious-looped | 16px | 600 | 24px | Life-stage titles |
| `{typography.body}` | kurious-looped | 16px | 500 | 24px | Card body copy |
| `{typography.body-ui}` | kurious-looped-cond | 16px | 400 | 24px | Nav / body default |
| `{typography.body-sm}` | kurious-looped-cond | 13px | 500 | 19.5px | Most frequent size: dialog copy, small UI |
| `{typography.button}` | kurious-looped | 20px | 600 | 48px | Primary button label |
| `{typography.link}` | kurious-looped | 16px | 600 | 24px | "View details", "See more" |
| `{typography.tab}` | kurious-looped | 16px | 600 | 16px | Buy / Sell tabs |
| `{typography.input}` | kurious-looped | 13px | 500 | 15.6px | Calculator amount field |
| `{typography.footer-heading}` | kurious-looped-cond | 16px | 700 | — | Footer column titles |
| `{typography.footer-link}` | kurious-looped-cond | 13px | 400 | — | Footer links |

No letter-spacing other than `normal` was measured anywhere.

### Principles
- Big headings stay regular (400); emphasis comes from 600 at small sizes.
- Line-heights are generous ratios of 1.5 (26/39, 20/30, 18/27, 16/24) and 1.4 (33/46.2) and 1.8 on promo card titles (18/32.4).
- Body copy is mid-grey (`#333333` / `#666666`), headings near-black `#111111`.

### Note on Font Substitutes
`kurious-looped` and `kurious-looped-cond` are the names under which the site serves its fonts; no official source naming their foundry or licence was found (see SOURCES.json searches). No substitute is prescribed by KBank. When the webfonts are unavailable, fall back to a generic `sans-serif`; keep the measured sizes, weights and line-heights so the rhythm is preserved.

## Layout

### Spacing System
Measured paddings cluster at 16px, 8px, 24px, 10px, 20px, 5px, 15px and 4px; gaps at 16px, 24px and 12px.
- **Tokens**: `{spacing.xxs}` 4px · `{spacing.xs}` 5px · `{spacing.sm}` 8px · `{spacing.md}` 10px · `{spacing.ml}` 12px · `{spacing.gutter}` 15px · `{spacing.lg}` 16px · `{spacing.xl}` 20px · `{spacing.xxl}` 24px · `{spacing.xxxl}` 32px · `{spacing.huge}` 40px · `{spacing.section}` 64px.
- **Band padding**: 64px top and bottom (`div.sc-inner` of the slate band).
- **Card padding**: 24px (promo cards).
- **Button padding**: 0px 15px with a fixed 48px height.

### Grid & Container
- Page measured at 1280px; content container 1170px wide with 0px 16px padding, giving a 1138px content column.
- Product tiles: 4 columns × 2 rows inside the slate band.
- Promo cards: 290px wide, 329px tall.
- Life stages: 6 equal columns of 160px-wide titles.
- Rates: calculator (left) + rate table (centre) share one white panel; news carousel on the right.

### Whitespace Philosophy
The page is dense and portal-like: many content types stacked in bands, each with a single 33px regular-weight heading and tightly packed content. Separation comes from band colour changes (white → slate → white → green) more than from large empty margins.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Bands, tiles on slate |
| 1 | `rgba(0, 0, 0, 0.08) 0px 0px 4px 1px` | Subtle surround shadow (measured) |
| 2 | `rgba(0, 0, 0, 0.16) 0px 1px 6px 0px` | Raised element (measured) |
| 3 | `rgba(0, 0, 0, 0.19) 0px 10px 20px 0px, rgba(0, 0, 0, 0.23) 0px 6px 6px 0px` | Floating element (measured) |
| Overlay | `{colors.scrim}` `#000000cc` | Cookie dialog backdrop |

Depth on this site is mostly colour: white tiles float on the slate band without a shadow, and the 3D product illustrations carry their own soft shading.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 4px | Inner input / select |
| `{rounded.sm}` | 5px | Cookie "Accept all" button |
| `{rounded.md}` | 8px | Primary button, promo cards, product tiles |
| `{rounded.field}` | 20px | Calculator field wrapper |
| `{rounded.tabs}` | 45px | Buy/Sell tab track |
| `{rounded.dot}` | 50px | Carousel dots |
| `{rounded.search}` | 100px | Header search field |
| `{rounded.pill}` | 9999px | 50% circles (avatars/icons measured as 50%) |

Split radii `8px 8px 0px 0px` and `0px 0px 8px 8px` are measured for image-top / text-bottom card halves.

### Imagery Geometry
Product illustrations sit in the lower right of each white tile, bleeding toward the edge; the hero photograph is full-bleed with no radius.

## Components

### Buttons

**`button-primary`** — "See all services".
- Background `{colors.primary}` `#00a94f`, text `{colors.on-primary}`, type `{typography.button}` (20px/600, line-height 48px), radius `{rounded.md}` 8px, padding 0px 15px, height 48px. At 390px it stretches to the full content width (358px).
- No hover state was captured by the extractor, so none is declared.

**`button-consent`** — cookie "Accept all".
- Background `{colors.primary}`, white kurious-looped-cond 16px/500 (line-height 22.4px), radius `{rounded.sm}` 5px, padding 10px, 200×48px.

### Links
**`link`** — "View details": `{colors.primary}`, `{typography.link}` 16px/600, no background.
**`link-on-dark`** — "See more" on the slate band: white `{typography.link}`; the capture shows it underlined.
The quick-link row under the rates band renders green underlined labels (kurious-looped 16px/400, line-height 22.4px) under green icons.

### Cards & Containers
**`card-promo`** — background `{colors.canvas}`, radius `{rounded.md}`, padding 24px, body `{typography.body}` in `{colors.ink-muted}`, title `{typography.heading-card}` in `{colors.ink-strong}`; 290×329px.
**`card-product-tile`** — white, radius `{rounded.md}`, title `{typography.heading-tile}` top-left, illustration bottom-right; 270×161px.
**`section-slate`** — full-bleed `{colors.slate}` band, 64px vertical padding, white `{typography.heading-section}` title.

### Inputs & Forms
**`text-input`** — calculator "Amount" field: wrapper background `{colors.canvas}`, `1px solid #dbdbdb` (`{colors.border}`), radius `{rounded.field}` 20px, padding 0px 16px, 45px tall. The inner `input.form-control` uses `{typography.input}` 13px/500 in `{colors.ink}`, radius `{rounded.xs}` 4px, padding 0px 5px. The currency picker sits inside the same rounded field.
**Search field** (header) — `rgba(0, 0, 0, 0.15)` fill, white kurious-looped-cond 16px/600, radius `{rounded.search}` 100px, padding 8px 16px 8px 40px, 48px tall.

### Tabs
**`tab-active` / `tab-inactive`** — Buy / Sell: `{typography.tab}` 16px/600, padding 5px 15px, 164×45px each; active `{colors.ink}`, inactive `{colors.ink-muted}`. The track (`div.control`) has radius `{rounded.tabs}` 45px. A green underline under the active tab is visible in the capture; it is not a border on the tab element and its exact value was not measured.

### Navigation
**`nav`** — transparent header over the hero, 130px tall on desktop and 60px on mobile. Top row: logo, segment switcher (Personal / Business / Wealth), Investor Relations, About Us, search, language flag, Login. Nav links are white kurious-looped-cond 13px/400. A second row holds product categories (Account, Card, Loan, Investment, Digital Banking …).

### Carousel
**`carousel-dot-active`** — 24×8px `{colors.primary}`, radius 50px. **`carousel-dot`** — 8×8px `{colors.dot-inactive}`.

### Footer
**`footer-linkbar`** — 56px `{colors.primary}` bar (padding 18px 0px) with white 13px links separated by thin dividers: Channels in Overseas | Personal Data Protection | Disclaimer.
**`footer`** — `{colors.primary-deep}` `#005a2a` sitemap, four columns (About Us, K Companies, Support, Contact Us) with white 16px/700 headings and 13px/400 links.

## Design System Architecture

KBank publishes **no public design system**, token package or component documentation. Searches recorded in `SOURCES.json` ("KBTG design system KBank", "kasikornbank github design tokens npm package UI kit", typeface searches) found none. The only official brand material found is the [logo page](https://www.kasikornbank.com/en/about/Pages/logo.aspx), which explains the logo symbolism (circle, sheaves of rice, six waves) and names its three colours — Green (wood), Gray (water), Red (fire) — without numeric values. Everything below is the de-facto system measurable on the site.

- **Token architecture**: a flat set of ~25 CSS custom properties on `:root`, in three naming families: `--color-*` (`--color-primary: #00A94F`, `--color-secondary: #18A94F`, `--color-green2`, `--color-green3`, `--color-dark`, `--color-border`), `--cr-*` (`--cr-green`, `--cr-dark: #333`, `--cr-black: #111`, `--cr-gray: #666`, `--cr-border: #DBDBDB`) and `--bg-*` (`--bg-primary: #E5F6ED`, `--bg-secondary`, `--bg-green: #005A2A`). There is no visible primitive → semantic → component tiering; the same green appears under two names. Motion is also tokenised: `--transition: .3s ease-in-out`, `--tsition: 400ms ease-in-out`, `--delay: .2s`.
- **Theming**: no dark or high-contrast theme variables were found. The header offers "Turn on more accessible mode" and "Turn off Animations" toggles (text present on every page), so accessibility modes exist, but their tokens were not measured.
- **Type & spacing**: two webfont families (looped / condensed-looped); sizes 13, 16, 18, 20, 26, 33px dominate. Spacing values are not on a strict 4/8 grid (5px, 10px, 15px appear next to 8px, 16px, 24px). `--margin-standard: 10px` is declared.
- **Component model**: class names follow utility/grid conventions (`row-flex`, `col`, `col-auto`, `form-control`, `form-select`, `select2-hidden-accessible`) plus section blocks prefixed `sc-` (`sc-product`, `sc-inner`, `sc-heading`). Analytics hooks are carried in class names (`pxtm-click-linkClick`, `pxtm-click-navTab`).
- **Accessibility**: skip links ("Skip Ribbon Commands", "Skip to main content"), an accessible-mode toggle and an animation toggle are present. No published contrast or touch-target policy was found.
- **Delivery**: URLs are `.aspx` pages under `/Pages/`. No npm package, Figma kit or versioned library is public.

## Do's and Don'ts

### Do
- Use `{colors.primary}` `#00a94f` for every primary action, link and active indicator.
- Keep buttons at 8px radius, 48px tall, with 20px/600 labels.
- Put product content on full-bleed `{colors.slate}` bands with white tiles.
- Set large headings at weight 400 and small titles at 600.
- Use `#333333` / `#111111` / `#666666` for text — not pure black.
- End pages with the two-tier green footer (green link bar over deep-green sitemap).
- Use rounded 20px fields and a 45px tab track inside calculators.

### Don't
- Don't invent hover/pressed greens — none were measured.
- Don't add new accent colours; the logo's red and grey are logo colours, not UI colours, on the measured page.
- Don't set headings in bold 700 — only footer column titles use 700.
- Don't use pill-shaped primary buttons; the CTA is 8px.
- Don't put green text on the slate band; links there are white.
- Don't add drop shadows to tiles on slate — they sit flat.

## Responsive Behavior

### Breakpoints

| Name | Width | Key Changes |
|---|---|---|
| Desktop | 1280px measured | 130px header, 1170px container, 4-up product tiles |
| Mobile | 390px measured | 60px header, h1 26px → 24px (line-height 36px), sub-heading 20px → 18px (27px), CTA full-width 358px |

### Touch Targets
- Primary button 48px tall at both widths.
- Calculator fields 45px tall; tabs 45px.
- Carousel dots are 8px tall — small targets.

### Collapsing Strategy
- The mobile header measures a 60px bar; its collapse behaviour was not measured.
- The footer sitemap class is `hidden-mobile visible-desktop`, so the four-column sitemap is desktop only.
- Body text stays 13px / 16px on mobile (mobile size table is led by 13px and 16px).

### Image Behavior
The hero photograph remains full-bleed; product illustrations scale inside their tiles.

## Iteration Guide

1. Start from `{colors.canvas}` with `{colors.ink}` text and `{typography.body}`.
2. Add one `button-primary` per band; never a second filled colour.
3. Section titles: `{typography.heading-section}` (33px/400), white on slate, `#111111` on white.
4. Cards: white, `{rounded.md}`, 24px padding, title `{typography.heading-card}`.
5. Forms: `text-input` with `{rounded.field}` 20px and `#dbdbdb` border.
6. Footer: `footer-linkbar` then `footer`.
7. Use only colours in this file; every one is measured on the live page or declared in its `:root`.
8. If a hover state is needed, measure it on kasikornbank.com before adding it.
