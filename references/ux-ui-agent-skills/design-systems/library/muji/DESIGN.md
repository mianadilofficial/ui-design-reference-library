---
version: alpha
name: MUJI
category: "Home & Furniture"
description: "MUJI's US store (muji.us) is a white #ffffff storefront with #363636 / #4d4d4d grey text, all headings and buttons in Roboto Condensed 700 (30px/36px slide titles with 0.6px tracking, 15.75px button labels), Roboto 400 body at 14px, solid black #000000 3px-radius buttons that hover to #333333, and MUJI's burgundy #7f0019 on the rewards bar, links and bundle button with a #6a2230 announcement bar."

colors:
  primary: "#000000"
  on-primary: "#ffffff"
  primary-hover: "#333333"
  brand-burgundy: "#7f0019"
  burgundy-hover: "#700016"
  announcement: "#6a2230"
  link-red: "#81000a"
  canvas: "#ffffff"
  surface-grey: "#f1f1f1"
  surface-label: "#ededed"
  surface-pale: "#fafbfd"
  surface-warm: "#f5f3ed"
  chip-grey: "#eaeaea"
  ink: "#363636"
  ink-body: "#4d4d4d"
  ink-tile: "#454545"
  ink-review: "#6a6c77"
  ink-review-title: "#4f4f4f"
  ink-review-author: "#737373"
  ink-review-faint: "#c6c6c6"
  ink-rewards: "#373330"
  ink-legal: "#363636cc"
  border-input: "#b3b3b3"
  border-review: "#e1e5ee"
  border-select: "#767676"
  tile-scrim: "#0000001a"
  tile-scrim-grey: "#36363626"
  hairline-grey: "#d3d3d3"

typography:
  display-slideshow:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 35.7px
    fontWeight: 700
    lineHeight: 42.84px
    letterSpacing: 0.714px
  collection-title:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 43.2px
    letterSpacing: 0.72px
  feature-title:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 31.5px
    fontWeight: 700
    lineHeight: 44.1px
    letterSpacing: 0.63px
  hero-title:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
    letterSpacing: 0.6px
  hero-title-mobile:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
    letterSpacing: 0.6px
  product-title:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 30px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: 0.6px
  tile-title:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 27.3px
    fontWeight: 400
    lineHeight: 38.22px
    letterSpacing: 0.546px
  section-title:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 26px
    fontWeight: 700
    lineHeight: 29.9px
  footer-heading:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20.7px
    letterSpacing: 0.36px
  button-bundle:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 20px
  button-lg:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 15.75px
    fontWeight: 700
    lineHeight: 18.1125px
    letterSpacing: 0.1575px
  button-md:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 14px
    letterSpacing: 0.14px
  button-sm:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 12.25px
    fontWeight: 700
    lineHeight: 14.0875px
    letterSpacing: 0.1225px
  announcement:
    fontFamily: "Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
    letterSpacing: 0.32px
  nav-link:
    fontFamily: "Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
  footer-link:
    fontFamily: "Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  body:
    fontFamily: "Roboto, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.1px
  body-copy:
    fontFamily: "Roboto, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  tile-label:
    fontFamily: "Roboto, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 19.6px
  newsletter-copy:
    fontFamily: "Roboto, sans-serif"
    fontSize: 13.125px
    fontWeight: 400
    lineHeight: 19.6875px
  legal:
    fontFamily: "Roboto, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
  select:
    fontFamily: "Roboto, sans-serif"
    fontSize: 12.25px
    fontWeight: 400
    lineHeight: 12.25px
  review-title:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 18.2px
    fontWeight: 700
    lineHeight: 24px
  review-body:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17px
  review-author:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 17px
  review-product:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 10px
    letterSpacing: -0.5px

rounded:
  sm: 2px
  md: 3px
  lg: 4px
  chip: 17px
  pill: 9999px
  circle: 50%

spacing:
  xxs: 5px
  xs: 6px
  sm: 8px
  md: 10px
  lg: 12px
  xl: 15px
  xxl: 20px
  section-sm: 24.5px
  section-md: 28px
  section-lg: 87.5px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.md}"
    padding: 14px 28px
    height: 48px
    border: "1px solid #000000"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    border: "1px solid #333333"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 3px 8px 0px
  button-tile:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-md}"
    rounded: "{rounded.md}"
    padding: 12px 18px
    height: 40px
  button-quick-shop:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.md}"
    padding: 10px 16px
    height: 34px
  button-add-to-cart:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.md}"
    padding: 14.5px 5px
    height: 47px
  button-bundle:
    backgroundColor: "{colors.brand-burgundy}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-bundle}"
    rounded: "{rounded.sm}"
    padding: 10px 30px
    height: 40px
  button-bundle-hover:
    backgroundColor: "#1e1e1e"
  button-review-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.brand-burgundy}"
    rounded: "{rounded.pill}"
    padding: 0px 10px
    height: 37px
    border: "1px solid #7f0019"
  topic-chip:
    backgroundColor: "{colors.chip-grey}"
    textColor: "{colors.ink-rewards}"
    rounded: "{rounded.pill}"
    padding: 0px 8px
    height: 33px
  search-bar:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    padding: 15px 6px
    height: 46px
  search-category-label:
    backgroundColor: "{colors.surface-label}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: 3px 0px 0px 3px
    padding: 0px 28px 0px 6px
  search-submit:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: 0px 3px 3px 0px
    padding: 10px 16px
    height: 46px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 16px 6px
    height: 50px
    border: "1px solid #b3b3b3"
  country-select:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.select}"
    rounded: "{rounded.md}"
    padding: 8px 29px 8px 10px
    height: 30px
    border: "1px solid #b3b3b3"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 1px 2px 0px
  link:
    textColor: "{colors.brand-burgundy}"
    typography: "{typography.body}"
  link-hover:
    textColor: "{colors.burgundy-hover}"
  announcement-bar:
    backgroundColor: "{colors.announcement}"
    textColor: "{colors.on-primary}"
    typography: "{typography.announcement}"
  rewards-bar:
    backgroundColor: "{colors.brand-burgundy}"
    textColor: "{colors.on-primary}"
    height: 40px
  image-tile:
    backgroundColor: "{colors.tile-scrim}"
    textColor: "{colors.on-primary}"
    padding: 24.5px
    height: 450px
  image-tile-hover:
    textColor: "{colors.ink-body}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-body}"
    typography: "{typography.body}"
---

## Overview

MUJI (無印良品, operated by Ryohin Keikaku — the footer of muji.us reads "良 品 計 画 Ryohin Keikaku Co., Lt…") runs its US store as a quiet, white retail page. The canvas is pure white (`{colors.canvas}` — `#ffffff`, the site's `--color-bg` and `--color-body`), text is soft charcoal (`{colors.ink}` — `#363636`, with `--color-body-text` `#4d4d4d` for running copy), and the imagery — bean-bag cushions, slippers, reed diffusers, flannel shirts on a lakeshore — supplies all the warmth.

There is exactly one brand colour: MUJI's burgundy (`{colors.brand-burgundy}` — `#7f0019`), on the "MUJI Rewards" bar, breadcrumb and text links, the product-page bundle button and the review widget's outlined button. A darker wine (`{colors.announcement}` — `#6a2230`) fills the top announcement bar. Everything else is black, white and grey.

Type is functional and condensed. **Roboto Condensed** at 700 sets every heading and button ("Cozy in Flannel", "Cleaning Essentials", "Discover What's New", "Shop Now"); **Roboto** at 400 sets body, nav and footer. Buttons are solid black rectangles with a 3px radius — 48px tall on hero slides, 40px on image tiles, 34px for "Quick shop" — and on hover they lighten to `{colors.primary-hover}` `#333333` and lift with a soft `rgba(0,0,0,0.1) 0 3px 8px` shadow.

**Key Characteristics:**
- White canvas; `#363636` headings and labels, `#4d4d4d` body copy.
- One brand hue — burgundy `#7f0019` — for rewards, links and the bundle button; `#6a2230` announcement bar.
- Roboto Condensed 700 for all headings and buttons, with ~0.02em positive tracking.
- Black 3px-radius buttons with a `#333333` + shadow hover.
- Full-bleed photographic hero slider with centred white title and black button.
- Image tiles with white overlay titles that turn grey `#4d4d4d` on hover.
- A dense marketplace header: logo, category-select + search bar with black submit, cart; then a row of category menus.

### Imagery & Art Direction
- Hero slides are natural, overcast outdoor lifestyle photos (models in flannel by a lake) split into panels.
- Category tiles are close, softly lit still lifes — a bean bag in a minimal room, slippers on wood, diffusers on a tray, a hand pressing a cushion.
- Large two-up feature tiles crop products tightly (a broom on a wood floor, a toner bottle in hand) with a translucent scrim (`#0000001a` / `rgba(77,77,77,0.13)`) under the white title.
- "Discover What's New" shows cut-out products on white in a single row.
- The MUJI wordmark and 無印良品 characters sit top-left in black.

### Voice of Microcopy
- Short, product-category headlines: "Cozy in Flannel", "Cleaning Essentials", "Gentle Skincare", "Cozy Textiles", "MUJI to Relax".
- Plain imperatives on buttons: "Shop Now", "Shop Bedding", "Quick shop", "Add to cart", "Sign up".
- Promotions are factual: "MUJI DAYS Special ⏰ Up to 40% OFF on Seasonal Favorites | Shop Now".
- Newsletter: "Sign up for our newsletter to receive 10% Off* on your first…".

## Colors

> Sources: `web/data/extracted/muji.json` (homepage), `muji--product.json` (Body Fit Cushion PDP), `muji--collection.json` (Body Fit Cushions), site `:root` variables, and recorded probes. MUJI publishes no public colour specification (see SOURCES.json).

### Action
- **Primary** (`{colors.primary}` — `#000000`): fill and border of every main button ("Shop Now", "Add to cart", "Quick shop", "Sign up", search submit).
- **On Primary** (`{colors.on-primary}` — `#ffffff`).
- **Primary Hover** (`{colors.primary-hover}` — `#333333`): measured hover fill and border, with `rgba(0, 0, 0, 0.1) 0px 3px 8px 0px` shadow.

### Brand
- **Burgundy** (`{colors.brand-burgundy}` — `#7f0019`): rewards bar, text links, "Add selected to cart" bundle button, review-widget outline buttons.
- **Burgundy Hover** (`{colors.burgundy-hover}` — `#700016`): measured hover colour of the breadcrumb "Home" link on the PDP.
- **Announcement** (`{colors.announcement}` — `#6a2230`): top announcement bar.
- **Link Red** (`{colors.link-red}` — `#81000a`): review widget links ("Read More", "Powered by") and collection text.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`).
- **Surface Grey** (`{colors.surface-grey}` — `#f1f1f1`): a large homepage and collection background band.
- **Surface Label** (`{colors.surface-label}` — `#ededed`): the "All categories" label inside the search bar.
- **Surface Pale** (`{colors.surface-pale}` — `#fafbfd`) and **Surface Warm** (`{colors.surface-warm}` — `#f5f3ed`): PDP panels.
- **Chip Grey** (`{colors.chip-grey}` — `#eaeaea`): review topic chips.
- **Tile Scrim** (`{colors.tile-scrim}` — `#0000001a`) and **Grey Scrim** (`{colors.tile-scrim-grey}` — `#36363626`): overlays on image tiles.

### Text
- **Ink** (`{colors.ink}` — `#363636`): headings, nav, footer links; the second most-read colour on the homepage and top on the PDP.
- **Ink Body** (`{colors.ink-body}` — `#4d4d4d`): `--color-body-text`; product descriptions, collection copy, footer base.
- **Ink Tile** (`{colors.ink-tile}` — `#454545`): category tile labels ("Body Fit Cushions").
- **Review greys**: `#6a6c77` review body (the most-read colour on the homepage, all inside the reviews carousel), `#4f4f4f` titles, `#737373` authors, `#c6c6c6` product names.
- **Ink Rewards** (`{colors.ink-rewards}` — `#373330`): rewards widget and topic chips.
- **Ink Legal** (`{colors.ink-legal}` — `#363636cc`): company line in the footer.

### Lines
- **Border Input** (`{colors.border-input}` — `#b3b3b3`): email input and country selector.
- **Border Review** (`{colors.border-review}` — `#e1e5ee`): review cards.
- **Border Select** (`{colors.border-select}` — `#767676`): category select in the search bar.
- **Hairline Grey** (`{colors.hairline-grey}` — `#d3d3d3`): PDP.

### Contrast Notes (computed from measured hexes)
| Foreground | Background | Ratio |
|---|---|---|
| `#363636` | `#ffffff` | 12.08:1 |
| `#4d4d4d` | `#ffffff` | 8.45:1 |
| `#7f0019` | `#ffffff` | 10.96:1 |
| `#ffffff` | `#000000` | 21.00:1 |
| `#ffffff` | `#6a2230` | 11.14:1 |
| `#6a6c77` | `#ffffff` | 5.22:1 |

## Typography

### Font Families
- **Roboto Condensed** — `"Roboto Condensed", sans-serif`, loaded at 400, 400 italic and 700. Headings, buttons, footer headings.
- **Roboto** — `Roboto, sans-serif`, loaded at 300, 400, 500, 700. Body, nav, footer, inputs. Both are open-source Google families under the SIL Open Font License ([github.com/googlefonts/roboto-classic](https://github.com/googlefonts/roboto-classic)).
- **Open Sans** — 400 and 700, used only by the reviews carousel ("Real Reviews From Real Customers"); it is the family with the most rendered characters on the homepage because of that carousel.

### Theme size variables
The site declares its own type scale in `:root` (rem on a 16px root): `--font-size-body: .875rem` (14px), `--font-size-body-small: .8203125rem` (13.125px), `--font-size-body-large: 1.09375rem` (17.5px), `--font-size-heading-1: 1.8375rem` (29.4px), `--font-size-heading-2: 1.70625rem` (27.3px), `--font-size-heading-3: 1.575rem` (25.2px), `--font-size-heading-4: 1.3125rem` (21px), `--font-size-heading-slideshow: 2.23125rem` (35.7px), `--font-size-button-small: .765625rem` (12.25px), `--font-size-button-medium: .875rem` (14px), `--font-size-button-large: .984375rem` (15.75px). Body and button steps are fractions of 14px (13.125px = 14 × 0.9375, 15.75px = 14 × 1.125, 12.25px = 14 × 0.875), which is why such sizes appear.

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|---|
| `{typography.collection-title}` | Roboto Condensed | 36px | 700 | 43.2px | 0.72px | Collection h1 (uppercase) |
| `{typography.display-slideshow}` | Roboto Condensed | 35.7px | 700 | 42.84px | 0.714px | "Scented Spaces" slide |
| `{typography.feature-title}` | Roboto Condensed | 31.5px | 700 | 44.1px | 0.63px | "Cleaning Essentials" tile |
| `{typography.hero-title}` | Roboto Condensed | 30px | 700 | 36px | 0.6px | Hero slide titles |
| `{typography.hero-title-mobile}` | Roboto Condensed | 30px | 700 | 36px | 0.6px | Same at 390px |
| `{typography.product-title}` | Roboto Condensed | 30px | 400 | 36px | 0.6px | PDP h1 |
| `{typography.tile-title}` | Roboto Condensed | 27.3px | 400 | 38.22px | 0.546px | Collection image-tile titles |
| `{typography.section-title}` | Roboto Condensed | 26px | 700 | 29.9px | — | "Discover What's New" |
| `{typography.footer-heading}` | Roboto Condensed | 18px | 400 | 20.7px | 0.36px | "Get Help" |
| `{typography.button-bundle}` | Roboto Condensed | 18px | 700 | 20px | — | "Add selected to cart" |
| `{typography.button-lg}` | Roboto Condensed | 15.75px | 700 | 18.1125px | 0.1575px | Hero / Add to cart / Sign up |
| `{typography.button-md}` | Roboto Condensed | 14px | 700 | 14px | 0.14px | Tile buttons |
| `{typography.button-sm}` | Roboto Condensed | 12.25px | 700 | 14.0875px | 0.1225px | "Quick shop" |
| `{typography.announcement}` | Roboto | 16px | 400 | 20.8px | 0.32px | Announcement bar |
| `{typography.nav-link}` | Roboto | 16px | 400 | 18.4px | — | Nav, search input |
| `{typography.footer-link}` | Roboto | 16px | 400 | 25.6px | — | Footer links |
| `{typography.body}` | Roboto | 14px | 400 | 16.1px | — | Base body |
| `{typography.body-copy}` | Roboto | 14px | 400 | 21px | — | Descriptions |
| `{typography.tile-label}` | Roboto | 14px | 700 | 19.6px | — | Category tile labels |
| `{typography.newsletter-copy}` | Roboto | 13.125px | 400 | 19.6875px | — | Newsletter text |
| `{typography.legal}` | Roboto | 13px | 400 | 19.5px | — | Company line |
| `{typography.select}` | Roboto | 12.25px | 400 | 12.25px | — | Country selector |
| `{typography.review-title}` | Open Sans | 18.2px | 700 | 24px | — | Review titles |
| `{typography.review-body}` | Open Sans | 14px | 400 | 17px | — | Review text |
| `{typography.review-author}` | Open Sans | 12px | 700 | 17px | — | Reviewer name |
| `{typography.review-product}` | Open Sans | 10px | 400 | 10px | -0.5px | Reviewed product name |

### Principles
- **Condensed bold for anything that names or acts**; regular Roboto for anything you read.
- **Positive tracking of 1% to 2%** on condensed type (0.6px at 30px, 0.1575px at 15.75px).
- **Small body (14px)** with tight 16.1px leading in UI and 21px leading in descriptions.
- The homepage has **no h1**; hero slide titles are h2.

### Note on Font Substitutes
All three families are open source; use them directly.

## Layout

### Spacing
- Measured paddings: 6, 15, 12, 8, 14, 5, 25, 10, 24.5, 16, 28, 18, 87.5, 20px; gaps: 20, 28, 7px.
- Tokens: `{spacing.xxs}` 5px · `{spacing.xs}` 6px · `{spacing.sm}` 8px · `{spacing.md}` 10px · `{spacing.lg}` 12px · `{spacing.xl}` 15px · `{spacing.xxl}` 20px · `{spacing.section-sm}` 24.5px · `{spacing.section-md}` 28px · `{spacing.section-lg}` 87.5px.
- Image tiles pad their overlay text 24.5px; `--announcement-bar-height0: 45px`.

### Grid & Container
- Measured at 1280px. The search input spans 817px; the header is 132px tall.
- Homepage rhythm: announcement bar → header (logo, category select + search + submit, cart) → category menu row → full-bleed hero slider → four-up category tiles with bold labels → two-up feature tiles (450px tall) → wide slider ("Cozy Textiles") → six-up "Discover What's New" → reviews carousel → footer.
- Collection pages: uppercase 36px title, 300px image tiles with 27.3px titles, product grid with "Quick shop" buttons.

### Whitespace Philosophy
Even, modest gutters (about 15–20px) between tiles; white space is regular and grid-like rather than dramatic.

### Page Templates Measured
- **Homepage** (`muji.json`).
- **PDP** (`muji--product.json`): Roboto Condensed 30px/400 h1, 14px/21px `#4d4d4d` description, black `button-add-to-cart` (hover `#333333`), burgundy `button-bundle` (hover `#1e1e1e` at 0.8 opacity), review summary with pill chips.
- **Collection** (`muji--collection.json`): uppercase h1, image tiles with grey scrims that turn text `#4d4d4d` on hover, `button-quick-shop`.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Default |
| 1 | `rgba(0, 0, 0, 0.15) 0px 1px 2px 0px` | Country selector |
| 2 | `rgba(0, 0, 0, 0.1) 0px 3px 8px 0px` | Button hover lift |
| 3 | `rgba(128, 128, 128, 0.25) 0px 1px 4px 0px` | Measured once on the homepage (element not identified) |

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.sm}` | 2px | Bundle button |
| `{rounded.md}` | 3px | All black buttons, inputs, selector; search bar ends (3px 0 0 3px / 0 3px 3px 0) |
| `{rounded.lg}` | 4px | Most frequent radius on the homepage (16 elements) |
| `{rounded.chip}` | 17px | PDP elements (7) |
| `{rounded.pill}` | 9999px | Review widget buttons and topic chips (measured 100px / 38px on 33–37px-tall elements) |
| `{rounded.circle}` | 50% | Slider dots, accessibility button |

Image tiles are square-cornered. No clip-paths or skews; the buttons' `::before` layer is a plain black fill.

## Components

### Buttons
**`button-primary`** — "Shop Now" on hero slides: `#000000`, white `{typography.button-lg}`, padding 14px 28px, 48px tall, 3px radius, 1px black border. **Hover** (`button-primary-hover`): `#333333` fill and border plus `rgba(0,0,0,0.1) 0 3px 8px` shadow.

**`button-tile`** — "Shop Now" on feature tiles: same colours, `{typography.button-md}`, 12px 18px, 40px.

**`button-quick-shop`** — collection grid: `{typography.button-sm}`, 10px 16px, 34px.

**`button-add-to-cart`** — PDP: `{typography.button-lg}`, padding 14.5px 5px, 47px, full buy-box width (394px). Hover as `button-primary-hover`.

**`button-bundle`** — "Add selected to cart": `#7f0019`, white 18px/700, 10px 30px, 40px, 2px radius. Hover: `#1e1e1e` at 0.8 opacity.

**`button-review-outline`** / **`topic-chip`** — review widget: white with burgundy border and text, or `#eaeaea` chips, both fully rounded.

### Inputs
- **`search-bar`** — 46px tall; `search-category-label` ("All categories", `#ededed`, 3px left corners) + 16px input (padding 15px 6px, placeholder "What are you looking for?") + black `search-submit` with 3px right corners.
- **`text-input`** — newsletter email: white, 1px `#b3b3b3`, 3px radius, 16px 6px, 50px; paired with a black "Sign up" button (14px 15px, 46px).
- **`country-select`** — "United States (USD $)": 12.25px, 1px `#b3b3b3`, 3px radius, 8px 29px 8px 10px, 30px, small shadow.

### Links
- **`link`** — burgundy `#7f0019` text; **hover** `#700016` (breadcrumb) or `#4d4d4d` with underline (collection breadcrumb).
- Nav "Rewards" hovers to opacity 0.8.

### Navigation
- **Announcement bar** — `#6a2230`, white 16px with bold promo text and an underlined "Shop Now"; close × at right.
- **Header** — black MUJI 無印良品 logo, the search bar, cart icon.
- **Category row** — "Sale, New, Women, Men, Accessories, Stationery, Travel, Furniture, Home, Health & Beauty, Food" each with a chevron, then "Rewards"; "Wishlist" / "Login" at right.
- **Rewards bar** — a `#7f0019` 40px "MUJI Rewards ^" tab.

### Tiles
- **Category tile** — square photo, `{typography.tile-label}` centred below in `#454545`.
- **`image-tile`** — 450px photo with `#0000001a` scrim, white `{typography.feature-title}` and `button-tile` centred; on hover the title colour changes to `#4d4d4d`.

### Footer
White, `#4d4d4d` base; `{typography.footer-heading}` column titles ("Get Help"), 16px/25.6px `#363636` links (Return Policy, Shipping Policy, FAQs, Privacy Policy …), newsletter block, "Accessibility" links row, company line, country selector.

### Composition Recipes
- **Hero slide**: full-bleed photo · centred white `{typography.hero-title}` · `button-primary`.
- **Category row**: four photos · bold 14px labels.
- **Feature pair**: two 450px `image-tile`s side by side.
- **New arrivals**: `{typography.section-title}` centred · six cut-out products on white.

## Design System Architecture

MUJI publishes **no public digital design system**, token package or brand-guideline portal for its US store. Searches ("MUJI brand identity logo color burgundy Ryohin Keikaku art direction Kenya Hara official", "MUJI design system", "MUJI brand guidelines press kit", "muji.us Roboto Condensed theme") found only third-party commentary; aggregator values were ignored. Ryohin Keikaku's English site returned HTTP 429 and muji.com's about page timed out, so no official visual-identity page could be opened. What follows is the de-facto system measured on muji.us.

- **Token architecture**: 117 `:root` variables, mostly from embedded apps (`--swym-*` wishlist, `--marqo-*` search/back-to-top, `--yotpo-*` reviews such as `--yotpo-red: #660000`, `--yotpo-dark-gray: #363636`). The store's own theme exposes a semantic type scale — `--font-size-body`, `--font-size-body-small`, `--font-size-heading-1` … `--font-size-heading-6`, `--font-size-heading-slideshow`, `--font-size-button-small|medium|large|x-large`, `--font-size-menu`, `--font-size-input` — and colour slots `--color-bg: #ffffff`, `--color-body: #ffffff`, `--color-body-text: #4d4d4d`. Colours such as `#7f0019` and `#000000` are applied directly in the CSS (148 and 206 occurrences in the stylesheets).
- **Theming**: none observed (no dark or high-contrast mode).
- **Type & spacing**: a 14px-based scale expressed in rem fractions; Roboto Condensed / Roboto pairing.
- **Component model**: black 3px buttons in four sizes (48 / 47 / 40 / 34px), burgundy bundle button, search bar with category select, image tiles with scrim + hover colour change, review carousel.
- **Accessibility**: a "Skip to content" link (burgundy on white) is first; a round accessibility-widget button floats at the left; the footer links "Accessibility". No published standard found.
- **Delivery**: no npm package or Figma kit found.

## Do's and Don'ts

### Do
- Keep the page white; use `#363636` for headings and `#4d4d4d` for body.
- Use Roboto Condensed 700 for headings and button labels; Roboto 400 for text.
- Make primary buttons black with a 3px radius and a `#333333` hover with a soft shadow.
- Reserve burgundy `#7f0019` for brand moments: rewards, links, bundle actions.
- Let product and lifestyle photography carry colour.

### Don't
- Don't introduce extra accent colours; MUJI's UI has one brand hue.
- Don't use pill or large-radius buttons for main actions (pills appear only in the review widget).
- Don't set headings in regular-width Roboto.
- Don't use pure black for body text.
- Don't add decorative gradients or heavy shadows.

## Responsive Behavior

Measured at 390px:
- Hero slide titles stay 30px/36px/700.
- The newsletter copy stays 13.125px/19.6875px.
- The MUJI Rewards bar spans the full width (390px, 40px tall).
- Most-used mobile sizes: 14px, 10px, 13.125px, 18.2px, 12px, 16px, 12.25px, 29.4px.

## Iteration Guide

1. White canvas, `#363636` ink, `#4d4d4d` body.
2. Headings Roboto Condensed 700 with ~0.02em tracking (30px hero, 26px section, 36px collection).
3. Buttons: `button-primary` black, 3px, 48px; hover `#333333` + shadow.
4. Burgundy `#7f0019` only for rewards, links, bundle button; `#6a2230` announcement bar.
5. Pages: hero slider → category tiles → feature pair → product row → reviews → footer.
6. Verify each new value in the three MUJI JSON files or a recorded probe.
