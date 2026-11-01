---
version: alpha
name: Design Within Reach
category: "Home & Furniture"
description: "Design Within Reach (DWR) sells modern furniture on a pale grey #f8f8f8 canvas with warm-black #242222 ink, a single in-house family served as \"DWR Sans\" at only two weights (400 and 700 — 34px/700 page titles, 15px/24px body), fully rounded pill buttons (36–53px radii: a #242222 Add to Cart pill, white and outlined 39px pills), seasonal colour bands such as burgundy #643335 and sand #d1ccbd, a #242222 footer, and #ce2a22 reserved for sale."

colors:
  primary: "#242222"
  on-primary: "#ffffff"
  canvas: "#f8f8f8"
  surface: "#ffffff"
  ink: "#242222"
  ink-muted: "#6b6b6b"
  ink-soft: "#a8a8a8"
  ink-black: "#000000"
  brand-red: "#ce2a22"
  seasonal-burgundy: "#643335"
  band-sand: "#d1ccbd"
  band-stone: "#e8e6df"
  beige: "#efebe2"
  footer: "#242222"
  overlay: "#24222299"
  hairline: "#24222226"
  border-grey: "#a8a8a8"
  success: "#437557"
  danger: "#901913"
  red: "#911913"
  pale-red: "#ae352d"
  red-banner: "#4b2c26"
  green-banner: "#474636"
  pale-green: "#919d60"

typography:
  display-h1:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 34px
    fontWeight: 700
    lineHeight: 40.12px
  display-h1-mobile:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 34px
    fontWeight: 700
    lineHeight: 40.12px
  heading-lg:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 36.12px
  heading-md:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 22px
    fontWeight: 700
    lineHeight: 31.9px
  modal-title:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 22px
    fontWeight: 700
    lineHeight: 35.2px
  heading-sm:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28.8px
  eyebrow:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 15px
    fontWeight: 700
    lineHeight: 13px
    letterSpacing: 0.15px
  footer-heading:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 15px
    fontWeight: 700
    lineHeight: 22.5px
    letterSpacing: 0.15px
  body:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
  body-mobile:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.4px
  tile-title:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 21px
    letterSpacing: 0.14px
  nav-link:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 35px
  input:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 16px
    fontWeight: 400
  product-brand:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.12px
  product-price:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 15.96px
    letterSpacing: 0.12px
  caption:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  currency:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 11px
    fontWeight: 700
    lineHeight: 15.4px
    letterSpacing: 0.22px
  utility:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 10px
    fontWeight: 700
    lineHeight: 16px
  micro:
    fontFamily: "\"DWR Sans\", Arial, -apple-system, \"system-ui\", sans-serif"
    fontSize: 9px
    fontWeight: 400
    lineHeight: 13.5px
    letterSpacing: 0.14px

rounded:
  xs: 2px
  sm: 3px
  card-top: 4px
  md: 11px
  input: 20px
  pill-cta: 36px
  pill: 39px
  pill-lg: 53px
  circle: 50%

spacing:
  xxs: 3px
  xs: 8px
  sm: 10px
  md: 15px
  lg: 20px
  xl: 25px
  xxl: 32px
  section-sm: 40px
  section-md: 60px
  section-lg: 160px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill-cta}"
    padding: 0px 45px
    height: 50px
    lineHeight: 48.3px
    border: "1px solid #242222"
  button-load-more:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill-lg}"
    padding: 0px 30px
    height: 50px
    border: "1px solid #242222"
  button-pill-white:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 20px
    height: 37px
    border: "1px solid #ffffff"
  button-outline:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 20px
    height: 37px
    border: "1px solid #242222"
  button-outline-lg:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.tile-title}"
    rounded: "{rounded.pill-lg}"
    padding: 15px 50px
    height: 50px
    border: "1px solid #6b6b6b"
  button-quick-view:
    backgroundColor: "{colors.overlay}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    height: 40px
  button-icon-close:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    rounded: "{rounded.circle}"
    size: 44px
    border: "1px solid #6b6b6b"
  newsletter-input:
    backgroundColor: transparent
    textColor: "{colors.on-primary}"
    typography: "{typography.input}"
    rounded: "{rounded.input}"
    padding: 9px 85px 10px 20px
    height: 40px
    border: "1px solid #a8a8a8"
  newsletter-submit:
    backgroundColor: transparent
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 20px
    height: 40px
  sort-select:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.pill}"
    padding: 0px 14px 0px 10px
    height: 22px
  option-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.card-top}"
    border: "1px solid #242222"
  product-tile:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.product-brand}"
  nav-header:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    padding: 0px 20px
  nav-sale-link:
    textColor: "{colors.brand-red}"
    typography: "{typography.nav-link}"
  link-utility:
    textColor: "{colors.ink-muted}"
    typography: "{typography.utility}"
    textTransform: uppercase
  footer:
    backgroundColor: "{colors.footer}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
  footer-legal:
    textColor: "{colors.ink-soft}"
    typography: "{typography.caption}"
---

## Overview

Design Within Reach (DWR) — whose cookie banner opens "At MillerKnoll, we respect your privacy" — presents modern furniture as gallery objects. The page ground is a very pale grey (`{colors.canvas}` — `#f8f8f8`, the body background and `--light` / `--secondary` in the site's own variables), body text is a warm, slightly red-shifted black (`{colors.ink}` — `#242222`, the site's `--primary` and `--dark`), and the whole interface is set in one family served as **DWR Sans** at only two weights: 400 and 700.

The homepage is built from full-width colour bands. In the measured capture the header and the "icons of modern design" story sit on a seasonal burgundy (`{colors.seasonal-burgundy}` — `#643335`), the category carousel ("Get ready for guests") on a warm sand (`{colors.band-sand}` — `#d1ccbd`), and the footer on `{colors.footer}` `#242222`. On product and category pages the header returns to `#f8f8f8`, so the burgundy is a campaign colour, not a fixed brand surface.

Every button is a pill. The commerce action ("Add to Cart") is a `#242222` pill with white 14px text, 50px tall with a 36px radius; marketing actions are 37px-tall pills with a 39px radius, white on photography ("Save with Code: HOSTING20") or outlined in `#242222` / white ("Jump To All Products", "Discover the Icons"). Red (`{colors.brand-red}` — `#ce2a22`, the site's `--brand-primary`) is used only for "Sale" and sale prices.

**Key Characteristics:**
- `#f8f8f8` canvas, `#242222` ink — never pure white pages, never pure black text in the brand UI.
- One family, DWR Sans, 400 and 700 only; headings are bold, body is regular.
- Pills everywhere: 36px, 39px and 53px radii; 20px on the newsletter input.
- Flat surfaces with no box-shadows on any measured page.
- Campaign colour bands (burgundy, sand, stone, beige) that change with the season.
- Product photography on light backgrounds in tight grids, with brand name, price and colour-count beneath in 12px.
- Red only for sale.

### Imagery & Art Direction
- Hero photography is dark, moody still life — a set table with sculptural ceramics, a glass vase, a single orange — shot close and cropped full-bleed.
- Category tiles are interior photographs (bedroom, sofa, storage, dining, decor) at a uniform aspect, separated by small gutters, with a bold 14px label centred under each and a progress bar beneath the carousel.
- Story modules pair a text column on a colour band with a single large interior photograph (an Eames Lounge Chair by a fireplace) on the right; a small round shopping-bag button sits on the image.
- Product tiles use clean studio cut-outs on the page ground.

### Voice of Microcopy
- Headlines are short and declarative: "The Holiday Hosting Sale", "Get ready for guests", "The icons of modern design", "Discover DWR Trade".
- Body copy is editorial and design-historical: "Before they were icons, they were ideas – experiments with shapes and materials…".
- Actions are sentence case: "Discover the Icons", "Add to Cart", "Show 48 More", "Jump To All Products".
- The tagline eyebrow is uppercase: "YOUR VISION. WITHIN REACH."
- Promo copy repeats the code: "Save with Code: HOSTING20".

## Colors

> Sources: `web/data/extracted/dwr.json` (homepage), `dwr--product.json` (Eames Lounge Chair and Ottoman PDP), `dwr--category.json` (Lounge Chairs listing) and the site's own `:root` variables. No official DWR colour specification was found.

### Action
- **Primary** (`{colors.primary}` — `#242222`): Fill of "Add to Cart", "Show 48 More" and "Show More Reviews"; border of outlined pills. The site names this `--primary`.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): Text on the `#242222` pills and on dark bands.
- **Brand Red** (`{colors.brand-red}` — `#ce2a22`): `--brand-primary` in the site's variables, rendered on the "Sale" nav item and on sale prices in the listing (413 characters on the category page).

### Surface
- **Canvas** (`{colors.canvas}` — `#f8f8f8`): Page background on every measured page.
- **Surface** (`{colors.surface}` — `#ffffff`): The white hero pill and skip links.
- **Seasonal Burgundy** (`{colors.seasonal-burgundy}` — `#643335`): Homepage header and story band in the measured capture.
- **Band Sand** (`{colors.band-sand}` — `#d1ccbd`) and **Band Stone** (`{colors.band-stone}` — `#e8e6df`): homepage background bands.
- **Beige** (`{colors.beige}` — `#efebe2`): `--beige`; a large background on the homepage and the PDP.
- **Footer** (`{colors.footer}` — `#242222`).
- **Overlay** (`{colors.overlay}` — `#24222299`): `--overlay-off-black` (rgba(36,34,34,.6)); the modal scrim and the round "View" quick-shop button on images.

### Text
- **Ink** (`{colors.ink}` — `#242222`): most-read colour on every page.
- **Ink Muted** (`{colors.ink-muted}` — `#6b6b6b`): `--gray-dark`; colour counts ("86 colors"), promo lines under prices, utility links.
- **Ink Soft** (`{colors.ink-soft}` — `#a8a8a8`): `--gray`; footer legal and newsletter helper text on `#242222`.
- **Ink Black** (`{colors.ink-black}` — `#000000`): PDP description copy.

### Lines
- **Hairline** (`{colors.hairline}` — `#24222226`): `--pin-line-dark` (rgba(36,34,34,.15)); dividers.
- **Border Grey** (`{colors.border-grey}` — `#a8a8a8`): newsletter input border and swatch rings on the listing.

### Semantic (from the site's own variables)
- `--success` / `--green` / `--info` `#437557` → `{colors.success}`
- `--danger` `#901913` → `{colors.danger}`; `--red` / `--warning` `#911913` → `{colors.red}`
- `--pale-red` `#ae352d`, `--red-banner-bg` `#4b2c26`, `--green-banner-bg` `#474636`, `--pale-green` `#919d60` → declared as named.
These are present in `:root` and in the CSS focus rings; where each one renders was not measured.

### Contrast Notes (computed from measured hexes)
| Foreground | Background | Ratio |
|---|---|---|
| `#242222` | `#f8f8f8` | 14.90:1 |
| `#6b6b6b` | `#f8f8f8` | 5.02:1 |
| `#ffffff` | `#242222` | 15.83:1 |
| `#a8a8a8` | `#242222` | 6.66:1 |
| `#ce2a22` | `#f8f8f8` | 4.97:1 |
| `#ffffff` | `#643335` | 10.16:1 |

## Typography

### Font Family
**DWR Sans** — served as `"DWR Sans", Arial, -apple-system, "system-ui", sans-serif` and loaded at 400 normal, 700 normal and 700 italic (PDP). The stylesheets also declare a `DWRSansWeb-Bold` face. No public source names the designer or licence of DWR Sans (searches in SOURCES.json); treat it as proprietary to DWR. A second family, **Meta W05** (Regular / Bold / Light), is loaded but renders only in the MillerKnoll cookie banner; PDP reviews render in Helvetica from a third-party widget.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|
| `{typography.display-h1}` | 34px | 700 | 40.12px | — | Homepage hero title, category h1 |
| `{typography.display-h1-mobile}` | 34px | 700 | 40.12px | — | Same at 390px (wraps to two lines) |
| `{typography.heading-lg}` | 28px | 700 | 36.12px | — | Story titles, PDP product name, footer "We're here to help" |
| `{typography.heading-md}` | 22px | 700 | 31.9px | — | Band titles ("Get ready for guests"), "Newsletter —" |
| `{typography.modal-title}` | 22px | 700 | 35.2px | — | Region modal title |
| `{typography.heading-sm}` | 18px | 700 | 28.8px | — | Category sub-heads, footer help links |
| `{typography.eyebrow}` | 15px | 700 | 13px | 0.15px | "YOUR VISION. WITHIN REACH." (uppercase) |
| `{typography.footer-heading}` | 15px | 700 | 22.5px | 0.15px | Footer column titles |
| `{typography.body}` | 15px | 400 | 24px | — | Body copy |
| `{typography.body-mobile}` | 14px | 400 | 22.4px | — | Body at 390px |
| `{typography.tile-title}` | 14px | 700 | 21px | 0.14px | Category tile labels, promo h2 |
| `{typography.nav-link}` | 14px | 400 | 20px | — | Main nav ("New + Featured" … "Sale") |
| `{typography.button}` | 14px | 400 | 35px | — | Pill labels |
| `{typography.input}` | 16px | 400 | — | — | Inputs and sort select |
| `{typography.product-brand}` | 12px | 400 | 18px | 0.12px | Maker name under product |
| `{typography.product-price}` | 12px | 700 | 15.96px | 0.12px | Price |
| `{typography.caption}` | 12px | 400 | 18px | — | Legal, promo lines |
| `{typography.currency}` | 11px | 700 | 15.4px | 0.22px | "USD" selector |
| `{typography.utility}` | 10px | 700 | 16px | — | Top-bar links (uppercase) |
| `{typography.micro}` | 9px | 400 | 13.5px | 0.14px | "TERMS + EXCLUSIONS" |

### Principles
- **Two weights only.** 400 for reading, 700 for anything that labels or titles. (A 500 and 600 appear only in third-party widgets.)
- **Tracking is 1% at small sizes** (0.12px at 12px, 0.14px at 14px, 0.15px at 15px) and absent on display sizes.
- **Generous body leading:** 24px on 15px (1.6), 22.4px on 14px.
- **Sentence case** for headlines and buttons; uppercase only for the utility bar, eyebrow and terms links.

### Note on Font Substitutes
DWR Sans is not publicly available. The site's own declared fallback is Arial, then the system UI font. Use that chain exactly as served rather than picking a lookalike; no other substitute is endorsed by DWR.

## Layout

### Spacing
- Measured paddings cluster on 20px and 10px, then 25, 15, 3, 32, 34, 40, 60 and 160px; gaps of 10, 16 and 40px.
- Tokens: `{spacing.xxs}` 3px · `{spacing.xs}` 8px · `{spacing.sm}` 10px · `{spacing.md}` 15px · `{spacing.lg}` 20px · `{spacing.xl}` 25px · `{spacing.xxl}` 32px · `{spacing.section-sm}` 40px · `{spacing.section-md}` 60px · `{spacing.section-lg}` 160px.
- The main nav is padded `0px 20px`; footer columns are separated with `15px 0px` padded headings.

### Grid & Container
- Measured at 1280px. The category carousel tiles are about 235px wide (the h3 labels measure 235px) in a row that bleeds off the right edge.
- The story module is a two-column split: text column on the left (bodyText 440px wide), image on the right.
- The category page's SEO copy runs 960px wide; product grids use 32px padded cells.
- The site's own breakpoint variables: `--breakpoint-xs: 0`, `--breakpoint-sm: 376px`, `--breakpoint-md: 769px`, `--breakpoint-lg: 1024px`, `--breakpoint-xl: 1440px`, `--breakpoint-xxl: 1680px`.

### Whitespace Philosophy
Bands are tall and quiet — the story band holds one title, one paragraph and one outlined pill against a large photo. Product grids are dense; marketing bands are sparse.

### Page Templates Measured
- **Homepage** (`dwr.json`): campaign bands, carousel, product rail, trade promo, dark footer.
- **Product detail** (`dwr--product.json`): 28px/700 product name, `#000000` description copy, numbered `option-card` configurator steps with 1px `#242222` borders, `button-primary` Add to Cart, review widget, outlined "Back to Top".
- **Category listing** (`dwr--category.json`): 34px/700 h1, "Jump To All Products" outline pill, `sort-select`, product grid with red sale prices, "Show 48 More" load-more pill, long-form SEO copy at 960px width.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Every measured surface (no box-shadows on homepage, PDP or listing) |
| Overlay | `{colors.overlay}` `#24222299` | Modal scrim, quick-view button on images |
| Focus | `0 0 0 .125rem rgba(36,34,34,.5)` and siblings | Focus rings in the CSS (from `cssCorpus`) |

Depth is carried by colour bands and photography, not shadow.

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 2px | PDP segmented corners (measured as 2px 0 0 2px / 0 2px 2px 0 pairs) |
| `{rounded.sm}` | 3px | Most frequent radius on the PDP (10 elements; element type not identified) |
| `{rounded.card-top}` | 4px | Option card top corners (4px 4px 0 0) |
| `{rounded.md}` | 11px | Measured on 6 PDP elements (element type not identified) |
| `{rounded.input}` | 20px | Newsletter input |
| `{rounded.pill-cta}` | 36px | Add to Cart |
| `{rounded.pill}` | 39px | Marketing pills, outline pills, sort select, quick view |
| `{rounded.pill-lg}` | 53px | Show More, Back to Top |
| `{rounded.circle}` | 50% | Close button, round icon buttons; the listing also has 215 elements at 100% radius with `#a8a8a8` borders |

No clip-paths or skews were measured.

## Components

### Buttons
**`button-primary`** — "Add to Cart" (PDP): `#242222` fill, white `{typography.button}` (line height 48.3px), padding 0px 45px, 50px tall, 36px radius, 1px `#242222` border.

**`button-load-more`** — "Show 48 More" (listing) and a second "Add to Cart" on the PDP: same colours, 53px radius, padding 0px 30px, 50px tall.

**`button-pill-white`** — "Save with Code: HOSTING20" on the hero photograph: white fill, `#242222` text, 39px radius, padding 0px 20px, 37px tall, 1px white border.

**`button-outline`** — "Jump To All Products": transparent, 1px `#242222` border, `#242222` text, 39px radius, 0px 20px, 37px. On dark bands the same pill is drawn in white ("Discover the Icons" in the capture).

**`button-outline-lg`** — "Back to Top": transparent, 1px `#6b6b6b` border, 14px/21px with 0.14px tracking, padding 15px 50px, 50px tall, 53px radius.

**`button-quick-view`** — round-ended "View" button over product images: `#24222299` fill, white text, 39px radius, 40px tall.

**`button-icon-close`** — 44px circle with 1px `#6b6b6b` border (region modal).

No hover states were captured by the extractor on any measured page, so none are declared.

### Inputs
- **`newsletter-input`** — on the dark footer: transparent, white 16px text, 1px `#a8a8a8` border, 20px radius, padding 9px 85px 10px 20px, 40px tall; the "Sign Up" pill (`newsletter-submit`, `#f8f8f8` text, 39px radius, 0px 20px) sits inside its right end.
- **`sort-select`** — listing sort: 16px, 39px radius, padding 0px 14px 0px 10px, caret icon.

### Cards
- **`option-card`** — PDP configurator step ("1 Size …"): `#f8f8f8`, 1px `#242222` border, 4px 4px 0 0 radius.
- **`product-tile`** — image on the canvas, then maker (`{typography.product-brand}`), price (`{typography.product-price}`), colour count and promo line in `#6b6b6b`.

### Navigation
- Top utility bar: "USD" currency button, centred promo link, uppercase 10px/700 links (LOCATIONS · SUPPORT · TRADE · DESIGN SERVICES · TERMS).
- Logo row: search left, square "DWR" logo centred, account / wishlist / bag icons right.
- Category row: "New + Featured", "Icons", "Furniture", "Outdoor", "Lighting", "Storage", "Kitchen + Dining", "Bed + Bath", "Rugs", "Decor + Gifts", "Sale" (red), 14px/400.
- A promo strip under the nav: bold 12px line + underlined 12px code link.

### Footer
`#242222` with white text: "We're here to help" (28px/700), help links (18px/700), a newsletter block ("Newsletter —" 22px/700, helper in `#a8a8a8`), link columns with 15px/700 headings, legal row in 12px `#a8a8a8`.

### Composition Recipes
- **Campaign hero**: full-bleed dark still-life photograph · white `{typography.display-h1}` title · white `{typography.tile-title}` uppercase sub-line · 9px "TERMS + EXCLUSIONS" link · `button-pill-white` with the promo code.
- **Category carousel band**: `{colors.band-sand}` background · centred `{typography.heading-md}` title · row of interior photos with `{typography.tile-title}` labels · thin `#242222` progress bar on a hairline track.
- **Story band**: campaign colour (`{colors.seasonal-burgundy}` in the capture) · `{typography.heading-lg}` white title on two lines · `{typography.body}` paragraph · white outline pill · large photograph on the right with a round `#24222299` bag button.
- **Product rail**: `{typography.display-h1}`-size section title in `#242222` · studio product images on the canvas · maker / price / colour count / promo line in 12px.
- **Trade promo**: uppercase `{typography.eyebrow}` · `{typography.heading-lg}` title · `{typography.body}` paragraph · outline pill.
- **Footer**: `#242222` · help links · newsletter pill input · link columns · `#a8a8a8` legal.

## Design System Architecture

DWR publishes **no public design system**, token package or brand guidelines. Searches for "DWR Sans typeface", "Design Within Reach rebrand logo identity agency typeface", "Design Within Reach design system / brand guidelines" and "Design Within Reach press kit" found only retailer listings and an AGI portfolio entry stating Kit Hinrichs "developed brand identity and catalog design for the launch of Design Within Reach" ([a-g-i.org](https://a-g-i.org/design/design-within-reach-1), 2005) — no token values. The rest of this section is the de-facto system measured on the site.

- **Token architecture**: the site exposes 60 `:root` custom properties. They are flat, single-tier names, not primitive → semantic → component tiers: semantic slots `--primary: #242222`, `--secondary: #f8f8f8`, `--success: #437557`, `--info: #437557`, `--warning: #911913`, `--danger: #901913`, `--light: #f8f8f8`, `--dark: #242222`; brand names `--brand-primary: #ce2a22`, `--beige: #efebe2`, `--pale-red`, `--pale-green`, `--red-banner-bg`, `--green-banner-bg`, `--overlay-off-black`, `--pin-line-dark`; generic hue names (`--blue`, `--indigo`, `--purple`, `--pink`, `--orange`, `--yellow`, `--teal`, `--cyan`) that do not render on the measured pages; layout `--breakpoint-xs` … `--breakpoint-xxl`; and `--font-family-sans-serif`, `--font-family-monospace`. A `--pr-ring-*` / `--pr-shadow*` group also exists.
- **Theming**: no dark or high-contrast mode was observed. Campaign theming is done by swapping band and header colours (burgundy on the homepage capture, `#f8f8f8` elsewhere).
- **Type & spacing**: one family, two weights; body 15/24; titles 34 / 28 / 22 / 18. Spacing values cluster on 10 / 20px multiples plus 15 and 25.
- **Component model**: pill buttons in three heights (37px marketing, 40px newsletter/quick view, 50px commerce), outline and filled variants; configurator option cards; product tiles; colour-band story modules.
- **Accessibility**: two visible-on-focus skip links ("Skip to main content", "Skip to footer content") are the first elements; the CSS includes 0.125rem focus rings in several colours. No published accessibility standard was found.
- **Delivery**: no npm package, Figma kit or public repo. Static assets are served from `/on/demandware.static/Sites-dwr-Site/` paths (measured in the select's caret icon URL).

## Do's and Don'ts

### Do
- Use `#f8f8f8` as the page and `#242222` for text, buttons and the footer.
- Set everything in DWR Sans (fallback Arial) at 400 or 700.
- Make every button a pill — 36px radius for Add to Cart, 39px for 37px-tall marketing pills, 53px for 50px-tall utility pills.
- Use outline pills on colour bands and white pills on photography.
- Give each campaign one band colour and let photography do the rest.
- Keep product meta at 12px: maker regular, price bold, extras in `#6b6b6b`.

### Don't
- Don't use `#ce2a22` for buttons — it is the sale colour.
- Don't add shadows to cards or buttons.
- Don't use square-cornered buttons.
- Don't introduce a third weight or a second display family.
- Don't use pure black for UI text; reserve `#000000` for long PDP description copy as measured.
- Don't track display sizes.

## Responsive Behavior

Measured at 390px:
- The hero h1 keeps 34px/40.12px/700 and wraps to two lines.
- Body copy drops from 15px/24px to 14px/22.4px.
- The header shrinks from 207px to 100px tall.
- Most-used mobile sizes: 14px, 12px, 11px, 18px, 10px, 16px, 22px, 34px.
- Site breakpoint variables: 376px, 769px, 1024px, 1440px, 1680px.

## Iteration Guide

1. Canvas `#f8f8f8`, ink `#242222`, footer `#242222`.
2. Titles in DWR Sans 700 (34 / 28 / 22 / 18px), body 15px/24px 400.
3. Primary action: `button-primary` pill (`#242222`, 50px, 36px radius, 0 45px).
4. Secondary actions: `button-outline` or `button-pill-white` (37px, 39px radius, 0 20px).
5. Build the homepage as stacked full-width bands: dark photo hero, sand carousel band, campaign-colour story band, product grid on canvas, trade promo, dark footer.
6. Use red only for sale.
7. Check every new value against the three measured JSON files before adding it.
