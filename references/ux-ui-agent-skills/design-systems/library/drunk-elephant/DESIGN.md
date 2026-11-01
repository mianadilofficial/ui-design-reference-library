---
version: alpha
name: Drunk Elephant
category: "Beauty & Personal Care"
description: "Drunk Elephant's Salesforce Commerce Cloud storefront pairs a white #ffffff canvas and warm charcoal #45474a ink with BrownRegular display type at 66px/400 and -1.98px tracking (often lowercase), BrownBold 12px/700 uppercase buttons with 0.6px tracking in square 1px charcoal outlines (11px 40px, 38px tall), SentinelMedium serif product titles, #fafafa product tiles with 5px corners, and pop accent fills — electric lime #e6fe52, lavender #f6dcff and aqua #bffcf3."

colors:
  primary: "#45474a"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#45474a"
  ink-alt: "#4a4a4a"
  surface-tile: "#fafafa"
  surface-gdpr: "#f6f8f9"
  lime: "#e6fe52"
  lavender: "#f6dcff"
  lavender-soft: "#f7f0ff"
  aqua: "#bffcf3"
  aqua-mint: "#e1fbf8"
  aqua-chip: "#d7faffcc"
  sky: "#e5f5fc"
  hot-pink: "#fb48c4"
  blush-text: "#ffb8c8"
  success-green: "#298541"
  focus-blue: "#3b99fc"
  input-border: "#8c8c8c"
  charcoal-tint: "#45474a1a"
  hairline: "#45474a33"
  overlay: "#ffffff80"

typography:
  display:
    fontFamily: "BrownRegular, \"sans-serif\""
    fontSize: 66px
    fontWeight: 400
    lineHeight: 66px
    letterSpacing: -1.98px
  display-mobile:
    fontFamily: "BrownRegular, \"sans-serif\""
    fontSize: 36px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: -1.08px
  headline-bold:
    fontFamily: "BrownBold, \"sans-serif\""
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38.4px
    letterSpacing: -0.96px
  intro:
    fontFamily: "Brown, \"sans-serif\""
    fontSize: 23px
    fontWeight: 400
    lineHeight: 27.6px
    letterSpacing: -0.6px
  intro-mobile:
    fontFamily: "Brown, \"sans-serif\""
    fontSize: 19px
    fontWeight: 400
    lineHeight: 22.8px
  card-copy:
    fontFamily: "BrownRegular, \"sans-serif\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  product-title:
    fontFamily: "SentinelMedium, \"serif\""
    fontSize: 20px
    fontWeight: 350
    lineHeight: 20px
    letterSpacing: -0.72px
  product-title-mobile:
    fontFamily: "SentinelMedium, \"serif\""
    fontSize: 24px
    fontWeight: 350
    lineHeight: 24px
    letterSpacing: -0.72px
  subheading:
    fontFamily: "BrownRegular, \"sans-serif\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 21.6px
  body-base:
    fontFamily: "BrownRegular, \"sans-serif\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
  body:
    fontFamily: "BrownRegular, \"sans-serif\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
  button:
    fontFamily: "BrownBold, \"sans-serif\""
    fontSize: 12px
    fontWeight: 700
    lineHeight: 14.4px
    letterSpacing: 0.6px
  button-gate:
    fontFamily: "BrownRegular, \"sans-serif\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: 1.7658px
  caption:
    fontFamily: "BrownRegular, \"sans-serif\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14.4px
  micro:
    fontFamily: "BrownRegular, \"sans-serif\""
    fontSize: 10px
    fontWeight: 400
    lineHeight: 15px

rounded:
  none: 0px
  xs: 2px
  sm: 3px
  md: 5px
  circle: 50%

spacing:
  xs: 5px
  sm: 10px
  md: 12px
  lg: 15px
  xl: 20px
  xxl: 40px
  section: 60px

components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 11px 40px
    height: 38px
    border: "1px solid {colors.ink}"
  button-add-to-bag:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 11px 80px
    height: 38px
    border: "1px solid {colors.ink}"
  button-gate:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-alt}"
    typography: "{typography.button-gate}"
    rounded: "{rounded.none}"
    padding: 10px 20px
    height: 34px
  button-gate-hover:
    backgroundColor: "{colors.ink-alt}"
    textColor: "{colors.lavender}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.lavender}"
  button-color:
    textColor: "{colors.hot-pink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    border: "2px solid {colors.hot-pink}"
  button-color-hover:
    backgroundColor: "{colors.hot-pink}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
  filter-chip:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 11px 20px
    height: 38px
    border: "1px solid {colors.ink}"
  filter-chip-active:
    backgroundColor: "{colors.aqua-chip}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 11px 20px
    border: "1px solid {colors.ink}"
  sort-select:
    backgroundColor: "{colors.charcoal-tint}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  shade-select:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-base}"
    rounded: "{rounded.none}"
    padding: 11px 14px 11px 13px
    height: 49px
    border: "1px solid {colors.ink}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "#000000"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 5px 40px 5px 5px
    height: 34px
    border: "1px solid {colors.input-border}"
  product-tile:
    backgroundColor: "{colors.surface-tile}"
    textColor: "{colors.ink}"
    typography: "{typography.body-base}"
    rounded: "{rounded.md}"
    padding: 10px
  promo-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.card-copy}"
    rounded: "{rounded.md}"
    padding: 20px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.micro}"
  nav:
    textColor: "{colors.ink}"
    typography: "{typography.body-base}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-base}"
  footer-menu:
    backgroundColor: "{colors.lime}"
    textColor: "{colors.ink}"
---

## Overview

Drunk Elephant's storefront (`drunkelephant.com`) is a playful system built on a strict base: white `#ffffff` canvas, a single warm charcoal `#45474a` for almost all text and outlines (2983 weighted chars on the homepage, 10365 on a product page), and the Brown typeface used huge and tight for headlines (66px, weight 400, -1.98px tracking) and small, bold and uppercase for buttons (12px BrownBold, 0.6px tracking). Personality comes from pop colour fills borrowed from the packaging — electric lime `#e6fe52`, lavender `#f6dcff`, aqua `#bffcf3`, sky `#e5f5fc` — dropped behind promo tiles, accordions, the footer menu and the country gate.

Headlines are frequently set **lowercase** (`text-transform: lowercase` on the collection title "serums"), which together with the negative tracking gives the brand its friendly, conversational tone. Product names switch to a slab serif, **Sentinel** (served as `SentinelMedium`, weight 350, and `SentinelSemiBold`, weight 375), for an editorial contrast.

Every first visit is interrupted by a lavender country gate ("welcome to Drunk Elephant — Thanks for stopping by! By the way, where are you?") over a 50% white veil (`#ffffff80`); the homepage capture shows only this modal over a blurred page, so the layout notes below come from the product and collection page measurements and the theme CSS.

Buttons are rectangular and outlined: 1px charcoal border, white fill, BrownBold 12px uppercase. The theme's button component (`.de-btn`) adds a signature hover: a circular `.de-btn-overlay` grows from the cursor point (`width/height` from 0 to 80rem, `border-radius: 50%`, `.4s ease-in-out`) to flood the button with colour.

**Key Characteristics:**
- Charcoal `#45474a` instead of black for text and outlines.
- Brown 400 display type at 66px with -1.98px tracking, often lowercase.
- BrownBold 12px/700 uppercase buttons, 0.6px tracking, square 1px outlines.
- Sentinel slab-serif product titles (350 weight).
- Pop-colour fills: lime `#e6fe52`, lavender `#f6dcff`, aqua `#bffcf3`.
- Soft 5px corners on tiles, cards and filter chips; buttons stay square.
- Circular "ink-flood" hover animation on `.de-btn`.

### Art Direction (from captures and pages)
- Product photography is clean and bright: bottles and jars on white or pale grey, often grouped and stacked.
- Pastel colour blocks (lime, lavender, aqua, sky) echo the packaging colour caps and act as backgrounds, never as text colours.
- The country gate is a lavender rectangle with a thin charcoal border, a lowercase "welcome to" line above a large "Drunk Elephant", a small underlined country select and a white rectangular button.
- Interfaces stay calm (charcoal on white) so that colour blocks read as deliberate moments.
- The blurred homepage behind the gate shows a two-column hero: a large product image left and a text panel with an outline "SHOP NOW" right, plus a "LAUNCH ALE…" carousel with arrow controls.
- Icons are thin-line (search, account, bag) in the header's right corner.
- Ratings display as small stars with a 10px "56 Ratings" link.
- Pricing sits inside the button label rather than above it.

## Colors

### Brand & Accent
- **Charcoal** (`{colors.primary}` / `{colors.ink}` — `#45474a`): text, button text and borders, filter-chip borders.
- **Lime** (`{colors.lime}` — `#e6fe52`): `.de-site-footer .footer-menu-wrapper`, active nav tab (`.nav-tab-active`), promo tiles (458 weighted area units on the homepage).
- **Lavender** (`{colors.lavender}` — `#f6dcff`): country-gate modal, PDP accordion headings, `.de-btn--color-filled`, hover text on `.de-btn--black`.
- **Lavender Soft** (`{colors.lavender-soft}` — `#f7f0ff`): product-page panels.
- **Aqua** (`{colors.aqua}` — `#bffcf3`): collection banner (also `--histogram-color` in reviews); **Aqua Mint** (`{colors.aqua-mint}` — `#e1fbf8`); **Aqua Chip** (`{colors.aqua-chip}` — `#d7faffcc`): active filter chip.
- **Sky** (`{colors.sky}` — `#e5f5fc`): first stop of `.de-animated-gradient` (`linear-gradient(-45deg,#e5f5fc,#e8dde8,#e8dde8)`).
- **Hot Pink** (`{colors.hot-pink}` — `#fb48c4`): `.de-btn--color` border/text and overlay, `.de-btn--xl`, and the theme's `.de-btn--add-to-bag` fill (not seen on the measured product page, where add-to-bag renders white/charcoal — the live page wins).
- **Blush Text** (`{colors.blush-text}` — `#ffb8c8`): small accent text on the product page.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`).
- **Tile** (`{colors.surface-tile}` — `#fafafa`): product tiles, `.hero__description`, `.biocompatible__section`, `.mixed-by-you`.
- **GDPR bar** (`{colors.surface-gdpr}` — `#f6f8f9`): `.de-gdpr-bar`.
- **Overlay** (`{colors.overlay}` — `#ffffff80`): white veil behind the country gate.
- **Charcoal Tint** (`{colors.charcoal-tint}` — `#45474a1a`): sort select fill.

### Text
- **Ink** (`{colors.ink}` — `#45474a`).
- **Ink Alt** (`{colors.ink-alt}` — `#4a4a4a`): country-gate button, `.de-btn--white/black` borders.
- **Success Green** (`{colors.success-green}` — `#298541`): green text (50 weighted chars) on the collection page.

### Borders & Focus
- **Hairline** (`{colors.hairline}` — `#45474a33`): 20% charcoal dividers.
- **Input Border** (`{colors.input-border}` — `#8c8c8c`).
- **Focus Blue** (`{colors.focus-blue}` — `#3b99fc`): global focus outline `.20387rem solid #3b99fc`.

## Typography

### Font Family
- **Brown** — served under three family names: `BrownRegular` (400, 2218 chars), `BrownBold` (700, 498 chars) and `Brown` (400, intro copy). Fallback `"sans-serif"` (quoted in the theme).
- **Sentinel** — served as `SentinelMedium` (350) and `SentinelSemiBold` (375); fallback `"serif"`.
- Also declared but not dominant: `Reader` (regular/medium/bold), `Sainte Colombe`.

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|---|
| `{typography.display}` | BrownRegular | 66px | 400 | 66px | -1.98px | h1/h2 ("Bestsellers", "serums") |
| `{typography.display-mobile}` | BrownRegular | 36px | 400 | 36px | -1.08px | Same at 390px |
| `{typography.headline-bold}` | BrownBold | 32px | 700 | 38.4px | -0.96px | Product story statements |
| `{typography.intro}` | Brown | 23px | 400 | 27.6px | -0.6px | Homepage brand intro |
| `{typography.intro-mobile}` | Brown | 19px | 400 | 22.8px | — | Same at 390px |
| `{typography.card-copy}` | BrownRegular | 20px | 400 | 24px | — | Promo card text |
| `{typography.product-title}` | SentinelMedium | 20px | 350 | 20px | -0.72px | Product h1 (desktop) |
| `{typography.product-title-mobile}` | SentinelMedium | 24px | 350 | 24px | -0.72px | Product h1 at 390px |
| `{typography.subheading}` | BrownRegular | 18px | 400 | 21.6px | — | Benefit h3 |
| `{typography.body-base}` | BrownRegular | 16px | 400 | 19.2px | — | `body` default |
| `{typography.body}` | BrownRegular | 14px | 400 | 16.8px | — | Product-page copy (most frequent) |
| `{typography.button}` | BrownBold | 12px | 700 | 14.4px | 0.6px | Uppercase buttons, chips |
| `{typography.button-gate}` | BrownRegular | 14px | 400 | 14px | 1.7658px | Country-gate button |
| `{typography.caption}` | BrownRegular | 12px | 400 | 14.4px | — | Promo bar text |
| `{typography.micro}` | BrownRegular | 10px | 400 | 15px | — | Ratings links |

### Principles
- Display type is light (400) and very tight; boldness is reserved for small uppercase labels and story statements.
- Tracking: negative at display sizes (-0.6 to -1.98px), positive on uppercase (0.6px; 1.7658px on the gate button).
- Root font size is forced (`html{font-size:9.81px!important}` in the theme), which produces fractional rem results such as 13.734px and 34.335px in some modules.

### Note on Font Substitutes
Brown is a commercial Lineto typeface; Sentinel is a commercial slab serif by Jonathan Hoefler (2004, now distributed by Monotype). Substitute with a geometric grotesque for Brown and a Clarendon-style slab for Sentinel, keeping the tight negative tracking at display sizes and lowercase headlines.

## Layout

### Spacing System
Measured gaps: 10px (20), 60px (6), 15px (6), 16px, 20px; paddings: 10px (23), 20px (16), 12px (9), 5px, 15px, 40px (button sides).
- `{spacing.xs}` 5px · `{spacing.sm}` 10px · `{spacing.md}` 12px · `{spacing.lg}` 15px · `{spacing.xl}` 20px · `{spacing.xxl}` 40px · `{spacing.section}` 60px.

### Grid & Container
- Product page: gallery left, info right; product tiles 393px square on `#fafafa` at 1280px.
- Collection page: 310px refine sidebar (1px charcoal border, 5px radius, 20px padding) beside a grid of 284px tiles.
- Homepage promo cards: 295px squares, 20px padding, 5px radius, BrownRegular 20px copy.

### Whitespace Philosophy
Big type, generous blank space around it, and colour blocks used as "rooms"; content inside tiles is tight (10px).

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | All page components |
| Veil | `{colors.overlay}` `#ffffff80` + blur | Country gate |

The homepage `boxShadows` table is empty. The theme's only decorative "shadow" is a white text-outline trick (`.30581rem .30581rem 0 #fff, …`) used to knock type out of imagery.

## Shapes

### Border Radius Scale
- `{rounded.none}` 0px — buttons, shade select, gate button.
- `{rounded.xs}` 2px — small controls (split 2px left/right on steppers).
- `{rounded.sm}` 3px — 37 elements on the homepage (labels/badges).
- `{rounded.md}` 5px — tiles, promo cards, filter chips, refine sidebar, inputs (measured as 4.99996px from the 9.81px root).
- `{rounded.circle}` 50% — swatches, icon buttons, the hover overlay.

### Photography Geometry
Packshots on pale grey or pastel sweeps, product groupings stacked like building blocks (the blurred hero shows bottles stacked in a pyramid), square tiles.

## Components

### Buttons
- **Primary outline** ("SHOP NOW"): white fill, `{colors.ink}` text and 1px border, `{typography.button}`, padding 11px 40px, 38px, square.
- **Add to bag** (product page, measured): same style, padding 11px 80px, 38px, label includes price ("ADD TO BAG ‐ $68.00").
- **Country-gate button** ("ACCESS THE WEBSITE"): white, `#4a4a4a` BrownRegular 14px uppercase with 1.7658px tracking, padding 10px 20px, 34px. Hover (measured): `#4a4a4a` fill, lavender `#f6dcff` text and border.
- **Theme variants** (`.de-btn--*` in `style.bundle.css`): `--black` (2px `#4a4a4a` border, hover text `#f6dcff` with charcoal overlay), `--white` (hover charcoal fill, white text), `--color` (2px `#fb48c4` border and text, pink overlay, hover white text), `--color-filled` (lavender fill, hover charcoal), `--color-blue` (`#00b5ea`), `--sm`, `--md`, `--buy`, `--xl` (hot-pink fill), `--lined` (animated underline), `--heart`.
- **Hover mechanic**: `.de-btn .de-btn-overlay { border-radius: 50%; transition: width .4s ease-in-out, height .4s ease-in-out }` → `.de-btn:hover .de-btn-overlay { width: 80rem; height: 80rem }`.

### Cards & Containers
- **Product tile**: `#fafafa`, 5px radius, 10px padding, label ("NEW") and category ("SERUM") in uppercase above the image.
- **Promo card**: white, 5px radius, 20px padding, 20px/24px copy ("Meet Kamo Triple-Peptide Cover Drops!").
- **Refine sidebar**: 1px charcoal border, 5px radius, 20px padding.

### Inputs & Forms
- **Shade selector** (custom dropdown `li`): white, 1px charcoal border, padding 11px 14px 11px 13px, 49px, 16px text ("FAIR 1C — Very fair with cool undertones").
- **Text input** (reviews search): white, 1px `#8c8c8c` border, 5px radius, padding 5px 40px 5px 5px, 34px, 14px text with 0.4905px tracking.
- **Sort select**: `#45474a1a` fill, BrownBold 12px uppercase with a caret icon.
- **Country select** (gate): `#ffffff80` fill, 12px, 5px radius, 25px.

### Navigation
- Promo strip: white 12px BrownRegular text ("Get it together! 20% off…").
- Header: spaced wordmark left, centred text links, icon set right (from the blurred capture).
- Footer: menu block on lime `#e6fe52` with a country selector; "#barewithus @drunkelephant" marquee.

### Pills, Tags, and Chips
- **Filter chip**: transparent, 1px charcoal border, 5px radius, BrownBold 12px uppercase, padding 11px 20px, 38px; active chip fill `#d7faffcc`.

### Signature Components
- **Ink-flood hover** on `.de-btn`.
- **Lavender country gate**.
- **Lowercase giant headings**.
- **Animated pastel gradient** (`.de-animated-gradient`, `background-size: 200% 900%`).

### Content Patterns
- Section title pattern: lowercase 66px heading, generous space, then a row of tiles or chips.
- Product tile pattern: uppercase "NEW" flag and category ("SERUM") in small caps above a pale `#fafafa` image square, name, rating, then an outline "ADD TO BAG ‐ $price" button.
- Shade selection is a full-width bordered dropdown listing shade code plus a plain-language undertone description ("FAIR 1C — Very fair with cool undertones").
- Story modules on product pages use BrownBold 32px statements with -0.96px tracking inside wide side padding (119px at 1280px).
- Reviews are rendered by PowerReviews (`powerreview-override.bundle.css`) restyled with Brown and charcoal.

## Design System Architecture

Drunk Elephant publishes **no public design system, token package, Storybook or Figma kit**. Searches for an official system, agency case study and press kit returned third-party scraped "DESIGN.md" aggregators (ignored), a student redesign project, and the brand's own logo story. The following is the de-facto system in its shipped theme.

- **Brand source**: the elephant logo is "a line drawing of the elephant on all of our products", drawn by founder Tiffany Masterson, who "wanted something that was more serious to balance out the playful name" ([The Story Behind the Logo](https://www.drunkelephant.com/blogs/the-drunk-mag/the-story-behind-the-logo.html)).
- **Platform**: Salesforce Commerce Cloud — assets are served from `/on/demandware.static/Sites-drunkelephant_us-Site/-/en_US/v1791277678497/css/` (`style.bundle.css`, `storefront.bundle.css`, `powerreview-override.bundle.css`, `glide.core.min.css`).
- **Token architecture**: none at runtime. The homepage exposes only third-party custom properties (`--pr-*` from PowerReviews, `--swiper-*`, `--animate-*`, `--histogram-color: #bffcf3`). Colours and sizes are compiled values in the bundles.
- **Naming convention**: a `de-` prefixed BEM layer — `.de-btn`, `.de-btn--black`, `.de-btn--white`, `.de-btn--color`, `.de-btn--color-filled`, `.de-btn--add-to-bag`, `.de-btn--lined`, `.de-btn-overlay`, `.de-btn-text`, `.de-site-footer`, `.de-gdpr-bar`, `.de-animated-gradient`, `.de-medium-caps` — on top of older module classes (`.hero__description`, `.biocompatible__section`, `.mixed-by-you`) and Bootstrap-style `.btn`.
- **Theming**: light only. Colour variants are modifier classes on components (e.g. `--color`, `--color-blue`, `--hot-pink`) rather than themes.
- **Type & spacing system**: rem units on a forced 9.81px root (`html{font-size:9.81px!important}`), with alternative `html{font-size:1.25vw}` and `2.666666666666667vw` rules elsewhere in the bundle; breakpoints are numerous (480, 576/581, 640, 768, 850, 992, 1024/1025, 1200, 1280, 1440, 1550, 1800px and em-based 36.25/40/48/62/64.0625/80/93.75em).
- **Component model**: buttons (`.de-btn` with size modifiers `--sm`, `--md`, `--large`, `--xl`, `--buy` and colour modifiers), product tiles, shade dropdown, filter chips, refine sidebar, PDP bundle customizer, reviews (PowerReviews), country gate, GDPR bar.
- **Accessibility**: global focus style `a:focus-visible, button:focus-visible, input:focus-visible, select:focus-visible … { outline: .20387rem solid #3b99fc !important; outline-offset: .10194rem }`; visually hidden h1 (`clip-path: inset(50%)`) on each page; "Skip to main content" link first. No published contrast policy.
- **Delivery**: compiled bundles on the Commerce Cloud static path with a version segment; no npm package or public versioning. Typefaces: Brown (Lineto) and Sentinel ([Adobe Fonts: Sentinel](https://fonts.adobe.com/fonts/sentinel) — Jonathan Hoefler, 2004, Monotype).

## Do's and Don'ts

### Do
- Use charcoal `#45474a` for text and every outline.
- Set big headlines in Brown 400 with negative tracking; lowercase them.
- Use BrownBold 12px uppercase with 0.6px tracking for buttons and chips.
- Keep buttons square with 1px charcoal outlines; round tiles and chips to 5px.
- Use one pop colour per block (lime, lavender, aqua) behind charcoal type.
- Use Sentinel for product names.

### Don't
- Don't use pure black text.
- Don't bold display headlines.
- Don't round buttons.
- Don't mix several pop colours inside one component.
- Don't add drop shadows.

## Responsive Behavior

### Breakpoints
| Width | Change |
|---|---|
| ≤ 767px | display 36px/-1.08px; intro 19px/22.8px; product title 24px |
| 768–1024px | two-column modules |
| ≥ 1025px | sidebar + grid on collections |
| ≥ 1280 / 1440 / 1800px | wider gutters |

### Touch Targets
- Buttons 38px; shade selector 49px; gate button 34px; mobile SHOP NOW 30px tall full-width (padding 6px).

### Collapsing Strategy
- Primary CTAs become full-width on mobile (360px wide at 390px).
- Mobile refine sidebar placement was not measured.

### Image Behavior
Square product imagery on tiles at every width.

### Motion
- `.de-btn-overlay` circle expansion `.4s ease-in-out`.
- `.de-btn--lined`: blinking 2px caret (`animation: blink 1s .8s infinite`) that becomes a full-width underline on hover (`.8s cubic-bezier(.19,1,.22,1)`).
- `.de-animated-gradient` slowly shifts a pastel gradient.

### Voice & Microcopy
- Chatty and exclamatory: "welcome to Drunk Elephant", "Thanks for stopping by! By the way, where are you?", "Get it together! 20% off…", "The bag alone!".
- Hashtag sign-off: "#barewithus @drunkelephant".

## Iteration Guide

1. White canvas, charcoal `#45474a` text, BrownRegular 16px/19.2px base.
2. Lowercase BrownRegular 66px/66px/-1.98px section titles.
3. Square outline buttons: BrownBold 12px/700 uppercase, 0.6px, 11px 40px, 38px, 1px charcoal.
4. `#fafafa` tiles with 5px corners; Sentinel product names.
5. Pop colour blocks (lime footer menu, lavender modals/accordions, aqua banners).
6. Add the circular overlay hover and the `#3b99fc` focus outline.

### Measurement Notes
- The homepage capture is covered by the country gate; homepage values were still read from the DOM behind it. `_roleOverrides.ctaPrimary` points the CTA check at the first real page button ("SHOP NOW") instead of the gate's "ACCESS THE WEBSITE".
- Product and collection pages were measured separately (`drunk-elephant--product`, `drunk-elephant--collection`).

### Prompting Checklist
- "White page, charcoal #45474a text, Brown typeface."
- "Lowercase BrownRegular 66px headings with -1.98px tracking."
- "Square white buttons, 1px charcoal outline, BrownBold 12px uppercase, 0.6px tracking, 38px tall."
- "Tiles #fafafa with 5px corners; filter chips 5px corners, active fill #d7faffcc."
- "Pop colour blocks: lime #e6fe52, lavender #f6dcff, aqua #bffcf3."
- "Sentinel slab serif for product names."
- "Circular ink-flood hover on buttons; focus outline #3b99fc."
