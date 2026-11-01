---
version: alpha
name: Epic Games Store
category: "Gaming"
description: "The Epic Games Store web storefront (store.epicgames.com) — a near-black #101014 canvas stepped through #18181c, #202024, #28282c and #404044 surfaces, white #ffffff headings over 65%-white #ffffffa6 body copy, and a single cyan accent #26bbff reserved for the Download button, Get / Add To Cart purchase buttons and discount pills. Type is Inter (body, buttons, prices) paired with Inter Tight 700/900 for game titles and section headings; promo CTAs are white 10px-radius 48px buttons, cards use 12px corners with a 1px #ffffff1a hairline, and game key art carries all colour."

colors:
  primary: "#26bbff"
  primary-hover: "#72d3ff"
  on-primary: "#000000"
  canvas: "#101014"
  surface-1: "#18181c"
  surface-2: "#202024"
  surface-3: "#28282c"
  surface-4: "#303034"
  surface-active: "#303034b3"
  field: "#404044"
  ink: "#ffffff"
  ink-muted: "#ffffffa6"
  button-light: "#ffffff"
  button-light-hover: "#a6a6a6"
  on-light: "#000000"
  fill-subtle: "#ffffff26"
  fill-subtle-hover: "#ffffff59"
  border-outline: "#ffffff59"
  hairline: "#ffffff1a"

typography:
  h1-hidden:
    fontFamily: "Inter, sans-serif"
    fontSize: 32px
    fontWeight: 700
  h1-hidden-mobile:
    fontFamily: "Inter, sans-serif"
    fontSize: 32px
    fontWeight: 700
  product-title:
    fontFamily: "\"Inter Tight\", sans-serif"
    fontSize: 40px
    fontWeight: 900
    lineHeight: 50px
  section-title:
    fontFamily: "\"Inter Tight\", sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 25px
    letterSpacing: 0.4px
  tile-title:
    fontFamily: "\"Inter Tight\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
    letterSpacing: 0.32px
  footer-heading:
    fontFamily: "Inter, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 20px
    letterSpacing: -0.3px
  body:
    fontFamily: "Inter, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26.4px
  body-sm:
    fontFamily: "Inter, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 23.1px
    letterSpacing: 0.28px
  nav-link:
    fontFamily: "Inter, sans-serif"
    fontSize: 16px
    fontWeight: 400
  button:
    fontFamily: "Inter, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 19.6px
    letterSpacing: 0.28px
  price:
    fontFamily: "Inter, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
    letterSpacing: 0.28px
  pagination:
    fontFamily: "Inter, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
    letterSpacing: 0.2px
  footer-link:
    fontFamily: "Inter, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: 0.28px
  badge:
    fontFamily: "Inter, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 18px
    letterSpacing: 0.24px
  legal:
    fontFamily: "Inter, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.24px

rounded:
  xs: 4px
  sm: 6px
  md: 8px
  cta: 10px
  lg: 12px
  xl: 16px
  search: 24px
  pill: 9999px
  circle: 50%

spacing:
  xxs: 4px
  xs: 5px
  sm: 8px
  md: 10px
  lg: 16px
  xl: 20px
  xxl: 24px
  section: 32px
  wide: 40px
  gutter: 64px
  footer: 80px

components:
  button-primary:
    backgroundColor: "{colors.button-light}"
    textColor: "{colors.on-light}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 12px 20px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.button-light-hover}"
  button-purchase:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 12px 20px
    height: 48px
  button-purchase-hover:
    backgroundColor: "{colors.primary-hover}"
  button-add-to-cart:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 40px
  button-download:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 4px 12px
    height: 32px
  button-secondary:
    backgroundColor: "{colors.fill-subtle}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 12px
    height: 48px
  button-secondary-hover:
    backgroundColor: "{colors.fill-subtle-hover}"
  button-outlined:
    backgroundColor: "transparent"
    textColor: "{colors.ink}"
    border: 1px solid {colors.border-outline}
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 7px 15px
    height: 40px
  button-outlined-small:
    backgroundColor: "transparent"
    textColor: "{colors.ink}"
    border: 1px solid {colors.border-outline}
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 3px 11px
    height: 32px
  tag-chip:
    backgroundColor: "{colors.fill-subtle}"
    textColor: "{colors.ink}"
  tag-chip-hover:
    backgroundColor: "{colors.fill-subtle-hover}"
  discount-badge:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.badge}"
    rounded: "{rounded.pill}"
    padding: 0px 8px
    height: 20px
  search-field:
    backgroundColor: "{colors.field}"
    textColor: "{colors.ink}"
    rounded: "{rounded.search}"
    width: 230px
    height: 40px
  nav-header:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 20px 24px
    height: 72px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    padding: 10px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
  card-promo:
    border: 1px solid {colors.hairline}
    rounded: "{rounded.lg}"
  card-genre:
    backgroundColor: "{colors.surface-1}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 25px 0px 15px
  carousel-thumb-active:
    backgroundColor: "{colors.surface-active}"
    border: 1px solid {colors.hairline}
    rounded: "{rounded.xl}"
  list-row-hover:
    backgroundColor: "{colors.surface-3}"
  footer:
    backgroundColor: "{colors.surface-1}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.footer-link}"
    padding: 80px 64px
---

## Overview

The Epic Games Store web storefront (`store.epicgames.com`) is a dark, art-first catalogue. The page the viewer sees is a single near-black field — `{colors.canvas}` `#101014` — and every bit of colour on screen comes from game key art: the hero carousel, square promo cards ("Discover Something New", "As Seen in Fortnite", "Epic Savings"), and small portrait thumbnails beside each title. The interface chrome itself is almost colourless: white `#ffffff` text, 65%-white `#ffffffa6` secondary copy, and a short ladder of charcoal surfaces (`#18181c`, `#202024`, `#28282c`, `#303034`, `#404044`).

There is exactly one chromatic UI colour: cyan `{colors.primary}` `#26bbff`. In the capture it appears on the global-nav **Download** button (top right) and on the small `-80%` / `-90%` discount pills in the "Epic Savings Spotlight" rows; on product pages it fills the **Get** and **Add To Cart** buttons. Promotional CTAs inside the merchandised modules ("Pre-Purchase Now", "View More", "Discover Now", "Discover More", "Save Now", "See All") are instead solid white `#ffffff` buttons with black text — this is the most frequent CTA on the homepage and the one the extractor detected as the primary call to action.

Typography is two open-source families by Rasmus Andersson: **Inter** for body, navigation, prices and button labels, and **Inter Tight** (weight 700, and 900 for product titles) for game titles and section headings. Nothing on the homepage is larger than 20px visible text: the only 32px element is a visually-hidden `h1` ("Discover", `clip-path: inset(50%)`, 1×1px) kept for screen readers. Hierarchy is carried by images, not type.

**Key Characteristics:**
- One flat near-black canvas `#101014`; depth comes from lighter charcoal steps, not shadows.
- White text `#ffffff` for titles, `#ffffffa6` (65% white) for descriptions, footer links and legal copy.
- Cyan `#26bbff` reserved for purchase/download actions and discount pills — never decorative.
- White 48px promo buttons with a 10px radius and black 14px/500 Inter labels; hover darkens the fill to `#a6a6a6`.
- Inter Tight 700 titles with slightly positive tracking (`0.32px` at 16px, `0.4px` at 20px).
- Square-ish 12px-radius promo cards outlined by a 1px `#ffffff1a` hairline.
- Key art does all the storytelling; the Epic merchandising guide reserves the left third of carousel art for text and CTA.

## Colors

> **Source pages:** home (`/en-US/`), browse (`/en-US/browse`), product (`/en-US/p/fortnite`). All values are computed styles measured with Playwright; see `SOURCES.json`.

### Brand & Accent
- **Epic Cyan** (`{colors.primary}` — `#26bbff`): Download button in the global nav, Get / Add To Cart on product pages, discount pills. Measured as `rgb(38, 187, 255)`.
- **Epic Cyan Hover** (`{colors.primary-hover}` — `#72d3ff`): hover background of the product-page Get button (`desktop.hover`, product page).
- **On Primary** (`{colors.on-primary}` — `#000000`): black label on cyan.

### Surface
- **Canvas** (`{colors.canvas}` — `#101014`): the body background and by far the largest painted area (weight 10881 vs 529 for the next colour).
- **Surface 1** (`{colors.surface-1}` — `#18181c`): footer background and browse-page genre cards.
- **Surface 2** (`{colors.surface-2}` — `#202024`): second most common surface on the homepage and product page (media panels, info blocks).
- **Surface 3** (`{colors.surface-3}` — `#28282c`): hover fill of the hero carousel side-list rows (hover measured from `rgba(40,40,44,0.004)` to `rgb(40,40,44)`).
- **Surface 4** (`{colors.surface-4}` — `#303034`): charcoal step present in the stylesheet and browse page.
- **Surface Active** (`{colors.surface-active}` — `#303034b3`): the active carousel thumbnail row, `rgba(48, 48, 52, 0.7)`.
- **Field** (`{colors.field}` — `#404044`): the pill-shaped "Search store" field.

### Text
- **Ink** (`{colors.ink}` — `#ffffff`): the most-read text colour (1951 weighted chars on the homepage) — titles, nav, prices.
- **Ink Muted** (`{colors.ink-muted}` — `#ffffffa6`): 65% white; paragraph copy ("See what's new in Fortnite all in one place."), footer links, legal text. On the product page it is the most-read colour.

### Buttons & Fills
- **Button Light** (`{colors.button-light}` — `#ffffff`) with **On Light** (`{colors.on-light}` — `#000000`): the white promo CTA.
- **Button Light Hover** (`{colors.button-light-hover}` — `#a6a6a6`): measured hover background of "Save Now", "View More", "Discover Now".
- **Fill Subtle** (`{colors.fill-subtle}` — `#ffffff26`): 15% white — wishlist/bookmark button, genre tags, Share/Report buttons.
- **Fill Subtle Hover** (`{colors.fill-subtle-hover}` — `#ffffff59`): 35% white, the hover of those chips.
- **Border Outline** (`{colors.border-outline}` — `#ffffff59`): 1px border of outlined buttons.
- **Hairline** (`{colors.hairline}` — `#ffffff1a`): 1px border of promo cards and the active carousel row.

### Semantic
No semantic success / warning / error palette is visible on the measured pages and no official source documents one, so none is declared here.

## Typography

### Font Family
- **Inter** (`Inter, sans-serif`) — the body family on every measured page; loaded as a variable font (`Inter 100 900`).
- **Inter Tight** (`"Inter Tight", sans-serif`) — loaded at weight 700 on the homepage; used for game titles and section headings, and at 900 for the product-page title.
- The stylesheet also declares `@font-face` rules for Noto Sans TC / Thai / Devanagari / Arabic (locale fallbacks), `OpenSans`, `Recursive Mono`, and a `Fortnite` face; these were not observed on the measured English pages and are not tokenised.

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|---|
| `{typography.h1-hidden}` | Inter | 32px | 700 | — | — | Visually-hidden page `h1` ("Discover", "Browse") |
| `{typography.h1-hidden-mobile}` | Inter | 32px | 700 | — | — | Same hidden `h1` at 390px |
| `{typography.product-title}` | Inter Tight | 40px | 900 | 50px | — | Product page title ("Fortnite") |
| `{typography.section-title}` | Inter Tight | 20px | 700 | 25px | 0.4px | "Epic Savings Spotlight", product h2/h3 |
| `{typography.tile-title}` | Inter Tight | 16px | 700 | 20px | 0.32px | Game title next to a thumbnail |
| `{typography.footer-heading}` | Inter | 20px | 700 | 20px | -0.3px | Footer column heading ("Games") |
| `{typography.body}` | Inter | 16px | 400 | 26.4px | — | Module descriptions |
| `{typography.body-sm}` | Inter | 14px | 400 | 23.1px | 0.28px | Product description, mobile body |
| `{typography.nav-link}` | Inter | 16px | 400 | — | — | Discover / Browse / News |
| `{typography.button}` | Inter | 14px | 500 | 19.6px | 0.28px | All button labels |
| `{typography.price}` | Inter | 14px | 400 | 19.6px | 0.28px | "THB 409", "Free" |
| `{typography.pagination}` | Inter | 14px | 400 | 19.6px | 0.2px | Browse pagination |
| `{typography.footer-link}` | Inter | 14px | 400 | 21px | 0.28px | Footer links |
| `{typography.badge}` | Inter | 12px | 500 | 18px | 0.24px | Discount pill "-80%" |
| `{typography.legal}` | Inter | 12px | 400 | 18px | 0.24px | Footer copyright block |

### Principles
- **Small, even sizes.** The homepage's visible type uses only 20 / 16 / 14 / 12px (frequency table), plus 9px on mobile.
- **Positive tracking at 2% of size.** The measured letter-spacing table pairs 16px/0.32px, 14px/0.28px, 12px/0.24px and 20px/0.4px — consistently 0.02em. The footer heading (-0.3px) is the only negative value measured.
- **Inter Tight for names, Inter for everything else.** Game and section names are Inter Tight 700; descriptions, prices and buttons stay in Inter.
- **Weight 500 is for buttons and badges only;** body copy is 400 and titles 700/900.

### Note on Font Substitutes
Both families are free: Inter is SIL OFL 1.1 ([rsms.me/inter](https://rsms.me/inter/)) and Inter Tight is OFL on Google Fonts, designed by Rasmus Andersson ([METADATA.pb](https://raw.githubusercontent.com/google/fonts/main/ofl/intertight/METADATA.pb)). No substitute is needed — load the real fonts.

## Layout

### Spacing System
- Measured gaps: 5px (most common, list spacing), 8px, 10px, 16px, 20px, 4px, 28px, 24px.
- Measured paddings: 10px (nav links and list rows), 20px (button sides), 8px, 40px, 12px, 16px, 64px.
- Tokens: `{spacing.xxs}` 4px · `{spacing.xs}` 5px · `{spacing.sm}` 8px · `{spacing.md}` 10px · `{spacing.lg}` 16px · `{spacing.xl}` 20px · `{spacing.xxl}` 24px · `{spacing.section}` 32px · `{spacing.wide}` 40px · `{spacing.gutter}` 64px · `{spacing.footer}` 80px.
- The footer is padded `80px 64px`; the header `20px 24px` at 72px tall (the site's own variable `--eg-global-nav-height: 4.5rem`).

### Grid & Container
- In the 960px-wide capture (1280px viewport) content sits in a centred column of roughly 720px capture-width, with the header spanning full width.
- **Hero:** a large key-art carousel (about 4/5 of the column) with a vertical list of six thumbnails + titles on the right; the active row is a raised `{colors.surface-active}` panel.
- **Merch modules:** a square promo card (12px radius, hairline border) on the left and a 2×3 grid of thumbnail + title + price rows on the right.
- **Full-bleed feature banner:** a wide 12px-radius key-art card ("This Week in Fortnite") with white headline, muted description and one white CTA bottom-left.
- Each module has prev/next circular arrow buttons (30×30px) aligned top-right.

### Whitespace Philosophy
Dense inside modules (5–10px gaps between thumbnail rows), generous between modules (large vertical bands of bare `#101014`). The dark field around each module lets the art glow.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat `{colors.canvas}` | Page |
| 1 | `{colors.surface-1}` / `{colors.surface-2}` fill | Footer, genre cards, product info panels |
| 2 | `{colors.surface-3}` fill | Hovered list rows |
| 3 | `{colors.surface-active}` + 1px `{colors.hairline}` + stacked shadow `rgba(0,0,0,0.1) 0 32px 16px, 0 16px 8px, 0 8px 4px, 0 4px 2px, 0 2px 1px` | Active hero thumbnail row |

The homepage frequency table records no box-shadows on visible elements; the stacked shadow above is the only one measured (on the active carousel item). Elevation is otherwise expressed by lightness steps.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 4px | Thumbnails, product media, age-rating card (most frequent radius) |
| `{rounded.sm}` | 6px | Download button, small outlined button |
| `{rounded.md}` | 8px | Add To Cart, outlined button, side-list rows |
| `{rounded.cta}` | 10px | White promo CTA, Get button, bookmark button |
| `{rounded.lg}` | 12px | Promo cards, feature banner, genre cards |
| `{rounded.xl}` | 16px | Active hero thumbnail row |
| `{rounded.search}` | 24px | Search field |
| `{rounded.pill}` | 9999px | Discount pill |
| `{rounded.circle}` | 50% | Carousel arrows, avatars |

No clip-paths, skews or notched shapes were measured; corners are plain radii.

### Imagery Geometry
Key art fills its card edge-to-edge. Thumbnails in list rows are small portrait covers (4px radius). Epic's official carousel guide specifies 1920×1080 desktop art with the left third kept free for text and CTA, focal point in the right-most 70%, and 1200×1600 mobile art with the focal point in the upper half ([EGS merchandising guidelines](https://static-assets-prod.epicgames.com/eos-docs/files/marketing-overview-files/EGS_Storefront_Merchandising_Carousel-Guidelines.pdf)).

## Components

### Buttons

**`button-primary`** — the white promo CTA ("Pre-Purchase Now", "View More", "Discover Now", "Save Now", "See All").
- Background `{colors.button-light}` `#ffffff`, text `{colors.on-light}` `#000000`, `{typography.button}` (Inter 14px/500/19.6px, 0.28px), padding `12px 20px`, height 48px, radius `{rounded.cta}` 10px.
- Hover (`button-primary-hover`): background `{colors.button-light-hover}` `#a6a6a6`; text unchanged.

**`button-purchase`** — product-page **Get**.
- Background `{colors.primary}` `#26bbff`, text `#000000`, same 48px / 10px / `12px 20px` geometry.
- Hover (`button-purchase-hover`): `{colors.primary-hover}` `#72d3ff`.

**`button-add-to-cart`** — cyan, `8px 16px`, 40px tall, radius `{rounded.md}` 8px.

**`button-download`** — global nav, top right: cyan `#26bbff`, padding `4px 12px`, 32px tall, radius `{rounded.sm}` 6px, label Inter 14px/500 in black.

**`button-secondary`** — the square bookmark/wishlist button beside a hero CTA: `{colors.fill-subtle}` (15% white), white icon, padding 12px, 48×48px, radius 10px. Hover → `{colors.fill-subtle-hover}` (35% white), measured on the product-page Wishlist, Share and Report buttons.

**`button-outlined`** — transparent with 1px `#ffffff59` border, white label, `7px 15px`, 40px, radius 8px. A smaller variant (`button-outlined-small`) is `3px 11px`, 32px, radius 6px.

### Tags & Badges

**`tag-chip`** — genre / feature tags on the product page ("Action", "Shooter", "Co-op"): `{colors.fill-subtle}` background, white text; hover `{colors.fill-subtle-hover}`.

**`discount-badge`** — `-80%` pill: `{colors.primary}` background, black `{typography.badge}` (12px/500/18px), padding `0px 8px`, height 20px, radius 9999px. Shown above a struck-through original price and the sale price in white.

### Inputs

**`search-field`** — "Search store": a 230×40px pill, `{colors.field}` `#404044` background, radius 24px, magnifier icon left, placeholder in muted white. The inner `<input>` itself is unstyled (transparent, 0 padding).

### Navigation

**`nav-header`** — 72px tall, padding `20px 24px`, transparent over the canvas: Epic shield logo + caret, the "STORE" wordmark, and on the right Sign in (Inter 14px/500) and the Download button.

**`nav-link`** — secondary nav (Discover / Browse / News) next to the search: Inter 16px/400 white, padding 10px; the current item reads in full white, others are dimmer in the capture.

**Pagination** (browse page) — Inter 14px/400/19.6px, 0.2px tracking, links padded `0px 10px`.

### Cards & Lists

**`card-promo`** — merchandised square card: key art, centred white CTA, radius 12px, 1px `{colors.hairline}` border.

**`card-genre`** — browse page: `{colors.surface-1}` fill, radius 12px, padding `25px 0px 15px`.

**Game row** — 4px-radius portrait thumbnail, `{typography.tile-title}` title (truncated with an ellipsis), `{typography.price}` price beneath. Prices show as "THB 409" in the measured (Thai) region; "Free" uses the same style.

**`carousel-thumb-active`** — hero side list: the active title sits on `{colors.surface-active}` with a hairline and the stacked shadow; inactive rows go `{colors.surface-3}` on hover (`list-row-hover`).

### Footer

**`footer`** — `{colors.surface-1}` `#18181c`, padding `80px 64px`. Column headings `{typography.footer-heading}` (Inter 20px/700, -0.3px, white); links `{typography.footer-link}` in `#ffffffa6`; copyright and legal block in `{typography.legal}`.

## Design System Architecture

Epic Games has **no public design system** for the Epic Games Store: no published documentation site, token package, component inventory or colour/typography brand guide was found. Searches run (recorded in `SOURCES.json`): "Epic Games brand guidelines logo usage official", "Epic Games Store design system UI components", "dev.epicgames.com Epic Games Store branding guidelines", "Epic Games fan content policy trademarks logos official", "\"Epic Games Store\" logo usage guidelines developers marketing assets". Results were Unreal Engine / UDK trademark pages, a fan-content policy behind a login redirect, and third-party DESIGN.md aggregators, which are excluded as unofficial.

The one official design-related document found is the **Epic Marcom Guidelines — Touchpoints: Discover Carousel** PDF for publishers ([static-assets-prod.epicgames.com](https://static-assets-prod.epicgames.com/eos-docs/files/marketing-overview-files/EGS_Storefront_Merchandising_Carousel-Guidelines.pdf)). It documents the carousel's anatomy (logo, scrim/theme option, game title text, artwork), a **Dark Theme (default)** and a **Light Theme** chosen by Epic's merch team per title, asset specs (1920×1080 desktop JPG, 1200×1600 mobile JPG, 350px-wide transparent PNG logo, 6-second 1920×1080 MP4 loop ≤ 5MB at 30/60fps), safe zones (left third free for text/CTA; focal point in the right-most 70% on desktop, upper 50% on mobile), a flipped variant for the Arabic locale, and don'ts (no logos, frames, borders, ratings or legal text baked into art).

What is measurable on the site (the de-facto system):
- **Token naming:** the page exposes almost no custom properties on `:root` (`--eg-global-nav-height: 4.5rem` plus Swiper's `--swiper-theme-color` / `--swiper-navigation-size`). The stylesheets reference hashed custom properties such as `var(--eds_xd1k8g46)`, `var(--eds_xd1k8g47)`, `var(--eds_xd1k8g4i)` for font families and shadows; their source names are not public.
- **Class naming:** generated CSS-in-JS class names (`css-1ctvnwl`, `css-l28syo`) with a few readable BEM-like ones (`branded-list--title-link`).
- **Theming:** only the dark theme ships on the storefront; no light/high-contrast toggle was observed.
- **Type & spacing:** the recurring 0.02em tracking and the 14/16/20px sizes above; spacing values are irregular (5px, 10px, 25px appear alongside 8/16/24px), so no strict 4px or 8px base is evident.
- **Accessibility:** each page carries a visually-hidden `h1` (`clip-path: inset(50%)`). Primary action targets are 48px tall; the nav Download button is 32px. No published accessibility standard was found.
- **Delivery:** fonts are self-hosted Inter / Inter Tight (both OFL); no npm package, Figma kit or versioned library is published.

## Do's and Don'ts

### Do
- Keep the page on `{colors.canvas}` `#101014` and step surfaces up through `#18181c` → `#202024` → `#28282c` for depth.
- Use the white 48px `button-primary` (10px radius, `12px 20px`) for merchandised calls to action.
- Reserve `{colors.primary}` `#26bbff` for buying and downloading (Get, Add To Cart, Download) and discount pills.
- Write titles in Inter Tight 700 with 0.02em tracking; keep descriptions in Inter 400 at `#ffffffa6`.
- Let full-bleed key art carry colour; leave the left third of carousel art clear for text and CTA, as the merchandising guide requires.
- Use the 15%-white `{colors.fill-subtle}` fill for secondary icon buttons and tags, rising to 35% on hover.

### Don't
- Don't use cyan for decoration, headings or body text.
- Don't add drop shadows to cards; only the active carousel row has a (soft, stacked) shadow.
- Don't set visible headings larger than 20px on browse surfaces — the only big title measured is the 40px Inter Tight 900 product title.
- Don't introduce new hues for states; hover is a lightness change (`#ffffff` → `#a6a6a6`, `#26bbff` → `#72d3ff`, 15% → 35% white).
- Don't bake logos, frames or legal text into key art (merchandising guide).
- Don't swap Inter / Inter Tight for system fonts — both are free.

## Responsive Behavior

### Breakpoints
Measured at 1280px (desktop) and 390px (mobile). Intermediate breakpoints were not measured and are not stated.

| Width | Observed |
|---|---|
| 1280px | Hero carousel + vertical thumbnail list; promo card + 2×3 game grid per module |
| 390px | Body copy drops from 16px/26.4px to 14px/23.1px with 0.28px tracking; 9px micro text appears; CTA stays 48px / 10px radius / `12px 20px` |

### Mobile Typography
- Visible sizes at 390px: 14px (most), 16px, 12px, 20px, 9px; the hidden `h1` stays 32px/700 (`{typography.h1-hidden-mobile}`).
- The mobile primary CTA measured is "Discover More": `#ffffff` / `#000000`, 14px/500, 48px tall.

### Touch Targets
- Promo, Get and bookmark buttons are 48px tall; Add To Cart 40px; carousel arrows 30×30px.

### Image Behavior
Per the official carousel guide, mobile uses separate 1200×1600 vertical art with the focal point in the upper 50%, because text covers the lower half.

## Iteration Guide

1. Start from `{colors.canvas}` and white `{colors.ink}`; add `{colors.ink-muted}` for any supporting sentence.
2. Build modules as key-art cards (`card-promo`, 12px radius, hairline) next to dense game rows (`tile-title` + `price`).
3. One white `button-primary` per module; cyan only where money or installation happens.
4. Keep every text size in {12, 14, 16, 20}px with 0.02em tracking; reach for 40px Inter Tight 900 only for a product title.
5. Express hover by lightening (surfaces) or darkening (white buttons) — never by hue.
6. Check every new value against `web/data/extracted/epic-games*.json` or `SOURCES.json` before adding it.
