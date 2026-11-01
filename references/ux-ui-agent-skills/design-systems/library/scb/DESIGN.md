---
version: alpha
name: SCB (Siam Commercial Bank)
category: "Thai Brands"
description: "SCB's personal-banking website — a light #f9f9fa canvas with white 4px-rounded cards on a soft 0 2px 6px rgba(0,0,0,.07) shadow, SCB purple #7a58bf for 44px buttons and links, deep purple #462279 footer, Sukhumvittadmai type in a single 400 weight (bold via the sukhumvittadmai_bol face) — 54.08px hero headlines, 28px card titles, 16px/22.4px body."

colors:
  primary: "#7a58bf"
  primary-hover: "#906be0"
  primary-border: "#734fc2"
  purple-accent: "#745db9"
  purple-heading: "#4b2d85"
  purple-deep: "#462279"
  on-primary: "#ffffff"
  canvas: "#f9f9fa"
  surface: "#ffffff"
  surface-band: "#e7ebee"
  surface-band-2: "#e6e8ec"
  top-bar: "#4c5256"
  ink: "#000000"
  ink-70: "#000000b3"
  ink-muted: "#767676"
  input-placeholder: "#898989"
  on-dark-70: "#ffffffb3"
  on-dark-50: "#ffffff80"
  label-orange: "#f6a969"

typography:
  hero-headline:
    fontFamily: "sukhumvittadmai_bol, Sukhumvittadmai, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 54.08px
    fontWeight: 400
    lineHeight: 60.5696px
  hero-headline-mobile:
    fontFamily: "sukhumvittadmai_bol, Sukhumvittadmai, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 46px
    fontWeight: 400
    lineHeight: 51.52px
  hero-headline-mobile-sm:
    fontFamily: "sukhumvittadmai_bol, Sukhumvittadmai, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 35px
    fontWeight: 400
    lineHeight: 40.25px
  footer-phone:
    fontFamily: "Sukhumvittadmai, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 29.9px
    fontWeight: 400
    lineHeight: 29.9px
  card-title:
    fontFamily: "sukhumvittadmai_bol, Sukhumvittadmai, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 36px
  banner-title:
    fontFamily: "Sukhumvittadmai_med, Sukhumvittadmai, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 30.8px
  input:
    fontFamily: "Sukhumvittadmai, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 44px
  nav:
    fontFamily: "Sukhumvittadmai, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 18px
  body:
    fontFamily: "Sukhumvittadmai, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  tile-label:
    fontFamily: "Sukhumvittadmai_med, Sukhumvittadmai, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
  button:
    fontFamily: "Sukhumvittadmai, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 15.99px
    fontWeight: 400
    lineHeight: 44px
  body-hero:
    fontFamily: "Sukhumvittadmai, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: "Sukhumvittadmai, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  date:
    fontFamily: "Sukhumvittadmai, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17.22px
  footer-link:
    fontFamily: "Sukhumvittadmai, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 25.2px
  utility:
    fontFamily: "Sukhumvittadmai, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 13px
  eyebrow:
    fontFamily: "sukhumvittadmai_bol, Sukhumvittadmai, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
    letterSpacing: 2px
  footer-heading:
    fontFamily: "sukhumvittadmai_bol, Sukhumvittadmai, Tahoma, Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 36px

rounded:
  xs: 2px
  sm: 4px
  md: 5px
  circle: 50%

spacing:
  xxs: 5px
  xs: 10px
  sm: 15px
  md: 20px
  lg: 25px
  xl: 30px
  xxl: 40px
  section: 50px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 15px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-read-more:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    border: "1px solid #734fc2"
    padding: 0px 30px
    height: 42px
  button-outline:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.purple-accent}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
    border: "1px solid #745db9"
    padding: 0px 20px
    height: 46px
  search-field:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.input-placeholder}"
    typography: "{typography.input}"
    padding: 0px 20px
    height: 44px
  search-button:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 30px
    height: 44px
  card:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    shadow: "rgba(0, 0, 0, 0.07) 0px 2px 6px 0px"
  card-hover:
    shadow: "rgba(0, 0, 0, 0.118) 0px 2px 17.0092px 0px"
  rates-row:
    textColor: "{colors.ink-70}"
    typography: "{typography.body}"
  utility-bar:
    backgroundColor: "{colors.top-bar}"
    textColor: "{colors.on-dark-50}"
    typography: "{typography.utility}"
    padding: 10px 0px
    height: 35px
  nav-bar:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav-link-active:
    borderBottom: "2px solid #7a58bf"
    padding: 0px 25px 0px 0px
    height: 47px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  footer:
    backgroundColor: "{colors.purple-deep}"
    textColor: "{colors.on-dark-70}"
    typography: "{typography.footer-link}"
    padding: 20px 0px
---

## Overview

SCB (Siam Commercial Bank, ไทยพาณิชย์) runs a classic bank portal: a light grey canvas (`{colors.canvas}` — `#f9f9fa`) carrying white, softly shadowed cards, with SCB purple (`{colors.primary}` — `#7a58bf`) on every button and link and a deep purple footer (`{colors.purple-deep}` — `#462279`).

The page measured is the English personal-banking home. From top to bottom: a 35px charcoal utility bar (`#4c5256`; Personal Banking / Corporate Banking left, For Shareholders / About Us / SCB Global Network right); a white header with the SCB ไทยพาณิชย์ logo (purple square with gold emblem), 18px nav (Our Products ▾, Stories & Tips, FAQ, SCB Cybersecurity), the ไทย | EN language switch, a search icon and a purple **Login ▾** button; then a cookie banner; a hero carousel with a white search field and purple Search button overlapping its bottom edge; a row of five shortcut tiles with line icons (News, SCB Easy App, Rates & Fees, Exchange Rates, Security Tips); and a masonry of news cards, a deposit/loan-rates card and photo cards with white text.

**Key Characteristics:**
- Light canvas `#f9f9fa`, white cards, 4px corners, shadow `0 2px 6px rgba(0,0,0,.07)` that deepens on hover.
- One action colour: purple `#7a58bf` (hover `#906be0`) for buttons, active nav underline, links ("Read More", "View all").
- Typography is one family, **Sukhumvittadmai**, in separate font files per weight (`Sukhumvittadmai`, `Sukhumvittadmai_med`, `sukhumvittadmai_bol`), all set as `font-weight: 400` — weight comes from the file, not CSS.
- Big, bold headlines on photography (54.08px) and 28px bold card titles in black.
- Letter-spaced 12px uppercase eyebrows ("GROW YOUR WEALTH", "SUCCESS STORY", 2px tracking).
- Deep purple `#462279` footer with translucent white text.

## Colors

> **Source:** computed styles on `/en/personal-banking.html` (homepage extraction + recorded probes). No CSS custom properties are exposed.

### Brand & Action
- **SCB Purple** (`{colors.primary}` — `#7a58bf`): Login, Search, Read More buttons; links; active nav underline. Most frequent chromatic colour in the stylesheets (127).
- **Purple Hover** (`{colors.primary-hover}` — `#906be0`): measured hover of Login/Search.
- **Purple Border** (`{colors.primary-border}` — `#734fc2`): 1px border on Read More buttons.
- **Purple Accent** (`{colors.purple-accent}` — `#745db9`): outline "Accept" button text and border.
- **Purple Heading** (`{colors.purple-heading}` — `#4b2d85`): cookie-banner title.
- **Deep Purple** (`{colors.purple-deep}` — `#462279`): footer.
- **Label Orange** (`{colors.label-orange}` — `#f6a969`): uppercase mega-menu labels ("I WANT", "RELATES LINKS").

### Surface
- **Canvas** (`{colors.canvas}` — `#f9f9fa`): `<body>` background — the dominant colour on screen.
- **Surface** (`{colors.surface}` — `#ffffff`): cards, header, search field.
- **Surface Band** (`{colors.surface-band}` — `#e7ebee`) and `#e6e8ec`: grey bands (cookie banner area, lower section band in the capture).
- **Top Bar** (`{colors.top-bar}` — `#4c5256`): utility bar.

### Text
- **Ink** (`{colors.ink}` — `#000000`): card titles, dates, nav, tile labels.
- **Ink 70** (`{colors.ink-70}` — `rgba(0,0,0,.7)`): rates table rows.
- **Ink Muted** (`{colors.ink-muted}` — `#767676`): body/container text colour, card descriptions.
- **Input Placeholder** (`{colors.input-placeholder}` — `#898989`): search placeholder.
- **On-dark 70 / 50** (`#ffffffb3`, `#ffffff80`): footer links and utility-bar links (hover to full white).

## Typography

### Font Family
The site serves one Thai/Latin family in three files: **Sukhumvittadmai** (regular), **Sukhumvittadmai_med** (medium) and **sukhumvittadmai_bol** (bold), with `Tahoma, Helvetica, Arial, sans-serif` fallbacks. Every measured element reports `font-weight: 400` (4,702 of 4,702 weighted chars) — emphasis is achieved by switching to the `_med` or `_bol` file. The stylesheets also declare `db_helvethaica_x`, `PSL Kittithada`, `PSLKanda` and `THSarabunNew` for other modules; none were seen rendered here.

### Hierarchy

| Token | Face | Size | Line height | Use |
|---|---|---|---|---|
| `{typography.hero-headline}` | _bol | 54.08px | 60.5696px | Hero slide headline (white) |
| `{typography.hero-headline-mobile}` | _bol | 46px | 51.52px | Hero h1 at 390px |
| `{typography.hero-headline-mobile-sm}` | _bol | 35px | 40.25px | Longer hero h2 at 390px |
| `{typography.footer-phone}` | regular | 29.9px | 29.9px | Call-centre number |
| `{typography.card-title}` | _bol | 28px | 36px | Card titles |
| `{typography.banner-title}` | _med | 22px | 30.8px | Cookie banner title |
| `{typography.input}` | regular | 20px | 44px | Search field |
| `{typography.nav}` | regular | 18px | 18px | Main nav |
| `{typography.body}` | regular | 16px | 22.4px | Card body, rates rows |
| `{typography.tile-label}` | _med | 16px | normal | Shortcut tile labels |
| `{typography.button}` | regular | 15.99px | 44px | Buttons (line-height sets height) |
| `{typography.body-hero}` | regular | 15px | 20px | Hero paragraph |
| `{typography.link}` | regular | 14px | 19.6px | "View all", inline links |
| `{typography.date}` | regular | 14px | 17.22px | Card dates |
| `{typography.footer-link}` | regular | 14px | 25.2px | Footer links |
| `{typography.utility}` | regular | 13px | 13px | Utility bar |
| `{typography.eyebrow}` | _bol | 12px | 12px, 2px tracking | Uppercase card eyebrows |
| `{typography.footer-heading}` | _bol | 12px | 36px | Uppercase footer headings |

All tokens are `fontWeight: 400` because that is what the browser computes.

### Principles
- **Weight by file.** Never set `font-weight: 700`; switch to `sukhumvittadmai_bol`.
- **Button height via line-height.** Buttons use `line-height: 44px` (or 40px inside a 1px border) and zero vertical padding.
- **Eyebrow tracking.** 12px uppercase eyebrows use 2px (or 1.5px) letter-spacing — the only tracked text.

### Note on Font Substitutes
SCB publishes no font guidance (see searches in `SOURCES.json`). The Tahoma/Helvetica/Arial fallbacks in the site's own stack are the measured substitutes; for Thai text any Thai-Latin sans with matching regular/medium/bold files is the practical stand-in.

## Layout

### Spacing System
- Most-used paddings: 30px (56), 15px (23), 5px (11), 10px (8), 52px (7), 26px (7), 25px (6), 20px (5).
- Tokens: `{spacing.xxs}` 5px · `{spacing.xs}` 10px · `{spacing.sm}` 15px · `{spacing.md}` 20px · `{spacing.lg}` 25px · `{spacing.xl}` 30px · `{spacing.xxl}` 40px · `{spacing.section}` 50px.
- A 5/10/15/30 rhythm rather than a 4/8 grid.

### Grid & Container
- Content sits in a ~1140px container (cards from x≈70 to ≈1210 in the 1280px capture).
- Card grid: a wide news card (750×360) beside a 360×360 card; rows of 360px squares and 750px wide cards — a 3-column grid with spanning.
- Shortcut tiles: five equal tiles joined in one white strip, divided by thin lines.
- The search bar overlaps the bottom of the hero.

### Whitespace Philosophy
Moderate. Cards sit ~30px apart on the grey canvas; 30px is the most-used padding; text blocks are short.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat `#f9f9fa` | Canvas |
| 1 | `rgba(0, 0, 0, 0.07) 0px 2px 6px 0px` | Cards, tiles, search bar (17 elements) |
| 2 | `rgba(0, 0, 0, 0.118) 0px 2px 17.0092px 0px` | Card hover (measured) |
| 3 | `rgba(0, 0, 0, 0.5) 0px 2px 4px 0px` | One measured element (round floating control in the capture) |

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 2px | Small icons |
| `{rounded.sm}` | 4px | Buttons, cards, tiles (27 elements) |
| `{rounded.md}` | 5px | Outline "Accept" button |
| `{rounded.circle}` | 50% | Carousel dots, floating action button |

Shapes are conservative rectangles with 4px corners — no pills on the main UI.

## Components

### Buttons

**`button-primary`** — "Login": `#7a58bf`, white 15.99px label, line-height 44px, padding `0 15px`, 44px tall, 4px radius, dropdown chevron. Hover → `#906be0`.

**`search-button`** — same fill and height, padding `0 30px`.

**`button-read-more`** — `#7a58bf` with `1px solid #734fc2`, line-height 40px, padding `0 30px`, 42px tall.

**`button-outline`** — cookie "Accept": white, `1px solid #745db9`, `#745db9` label in Sukhumvittadmai_med 14px, 5px radius, padding `0 20px`, 46px tall; hover lowers opacity to 0.8.

### Inputs

**`search-field`** — white, 20px text with line-height 44px, padding `0 20px`, placeholder `#898989` ("What are you looking for?"), joined to `search-button` inside a shadowed white bar.

### Cards

**`card`** — white, 4px radius, level-1 shadow → level-2 on hover. News card: date top-right (14px), title `{typography.card-title}` 28px/36px black, description `#767676`, purple "Read More" link at the bottom.

**Photo card** — full-bleed image, uppercase `{typography.eyebrow}` label, white 28px title, white 16px/22.4px text, white "Read More".

**Rates card** — tabs "DEPOSIT RATES %" / "LOAN RATE %" (12px uppercase, tracked, active tab underlined), rows of label + value in 16px `rgba(0,0,0,.7)` separated by hairlines, footer "Last updated …" and a purple "View all".

### Navigation

**`utility-bar`** — `#4c5256`, 35px, 13px links at 50% white → white on hover.
**`nav-bar`** — white; 18px black links; active item gets a 2px `#7a58bf` underline (`nav-link-active`, 47px tall); hover turns links purple (`#7655b9`–`#7756ba` measured).

### Footer

**`footer`** — `#462279`, `20px 0` padding, 826px tall; headings 12px uppercase `_bol` at 40% white with 36px line-height; links 14px/25.2px at 70% white; call-centre number 29.9px.

## Design System Architecture

**SCB publishes no public design system, brand guideline or token package** that could be found (four searches recorded in `SOURCES.json`; the type foundry page tried returned 404). What is measurable on the site — the de-facto system:

- **Tokens:** none as CSS variables. Values are literals repeated across stylesheets: `#7a58bf` (127), `#767676` (56), `#ededed` (31), `#30373b` (27), `#745db9` (24), `#f0f2f4` (22), `#f9f9fa` (19), `#302272` (19). Purple appears in several near-identical variants (`#7a58bf`, `#7b58bf`, `#745db9`, `#734fc2`, `#906be0`).
- **Type system:** one family split into regular/medium/bold files with computed weight fixed at 400.
- **Spacing:** 5px-based (5/10/15/20/25/30).
- **Shape:** 4px radius for nearly everything (72 declarations in CSS).
- **Elevation:** one card shadow and its hover state.
- **Theming:** no dark mode or theme switch observed.
- **Accessibility:** no published rules found. Measured contrast notes: `#767676` on `#ffffff` is 4.54:1; white on `#7a58bf` is 5.28:1 (computed).
- **Delivery:** server-rendered pages (`.html` URLs); icon font `icomoon`; no public npm package or Figma kit.

## Do's and Don'ts

### Do
- Use `#f9f9fa` canvas with white 4px cards and the `0 2px 6px rgba(0,0,0,.07)` shadow.
- Make every primary action `#7a58bf`, 44px tall, 4px radius; hover to `#906be0`.
- Use `sukhumvittadmai_bol` (not CSS bold) for titles: 28px/36px on cards, 54.08px on heroes.
- Track uppercase 12px eyebrows by 2px.
- Close the page with the `#462279` footer and translucent white text.

### Don't
- Don't use pill buttons or large radii.
- Don't introduce new purples — the measured set is already wide.
- Don't set body text in pure black at large sizes; descriptions are `#767676`.
- Don't add heavy shadows; level 1 is 7% black.

## Responsive Behavior

### Breakpoints

| Viewport | Measured change |
|---|---|
| 1280px | Hero h1 54.08px/60.57px; body 16px; header with utility bar + nav |
| 390px | Hero h1 46px/51.52px; long hero h2 35px/40.25px; 16px body (1,754 chars); 21.996px becomes a common size; Login stays a 140×44 button |

### Touch Targets
- Buttons 42–46px tall; nav items 47px.

### Collapsing Strategy
- Hero headings scale down (54.08 → 46 / 35px).
- At 390px the rates card header ("DEPOSIT RATES % LOAN RATE %") becomes a 63px block with 20px padding.

### Image Behavior
Photo cards use full-bleed imagery with white text over darkened areas; news cards place the photo on the left half.

## Iteration Guide

1. Canvas `{colors.canvas}`, cards `{colors.surface}` with `{rounded.sm}` and the level-1 shadow.
2. Buttons: `button-primary` (44px, `{rounded.sm}`), hover `{colors.primary-hover}`.
3. Titles in `{typography.card-title}`; body in `{typography.body}`; eyebrows in `{typography.eyebrow}`.
4. Links `{colors.primary}`; footer `{colors.purple-deep}`.
5. Keep all `font-weight` at 400 and switch font files for emphasis.
