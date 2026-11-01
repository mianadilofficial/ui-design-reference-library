---
version: alpha
name: Glossier
category: "Beauty & Personal Care"
description: "Glossier's storefront is a white (#ffffff) Shopify theme set entirely in Colophon's Apercu at weight 400 — 14px/19.6px body, 12px uppercase nav, Apercu Mono 12px uppercase badges — with pure black (#000000) ink, square 0px corners everywhere, light-grey #f7f7f7 product tiles, a #e8e8e8 conversion button framed by an animated \"marching ants\" 1px black border, a single electric-blue #0600ff accent for NEW badges and focus, and a pale pink #faf2f4 footer."

colors:
  primary: "#0600ff"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#000000"
  ink-muted: "#666666"
  ink-nav-secondary: "#464545"
  surface-tile: "#f7f7f7"
  surface-alt: "#f0f0f0"
  cta-fill: "#e8e8e8"
  cta-fill-hover: "#e2e2e2"
  hairline: "#e8e8e8"
  footer-pink: "#faf2f4"
  badge-pink: "#f6e3e6"
  scrim: "#00000099"
  charcoal: "#333333"
  error: "#d30000"
  success: "#00ac5a"

typography:
  display-product:
    fontFamily: "Apercu, \"Gill Sans\", sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 40px
  display-product-mobile:
    fontFamily: "Apercu, \"Gill Sans\", sans-serif"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 35px
    letterSpacing: -0.28px
  heading-section:
    fontFamily: "Apercu, \"Gill Sans\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  heading-section-mobile:
    fontFamily: "Apercu, \"Gill Sans\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  body-base:
    fontFamily: "Apercu, \"Gill Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
  body:
    fontFamily: "Apercu, \"Gill Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
    letterSpacing: 0.03px
  button:
    fontFamily: "Apercu, \"Gill Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.1px
    letterSpacing: 0.02625px
  nav-link:
    fontFamily: "Apercu, \"Gill Sans\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 19.6px
  eyebrow:
    fontFamily: "Apercu, \"Gill Sans\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20.4px
    letterSpacing: 0.04px
  label-mono:
    fontFamily: "\"Apercu Mono\", monospace"
    fontSize: 12px
    fontWeight: 400
    letterSpacing: 0.48px
  popup-ui:
    fontFamily: "\"Apercu Pro\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px

rounded:
  none: 0px
  circle: 50%

spacing:
  xxs: 4px
  xs: 6px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 20px
  xxl: 40px

components:
  button-primary:
    backgroundColor: "{colors.cta-fill}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 16px
    height: 40px
    border: "1px solid {colors.ink} on bottom and right edges only (background-image lines)"
  button-primary-hover:
    backgroundColor: "{colors.cta-fill}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 16px
    border: "0.5px dashed black on all four edges, animated marching-ants-full-1 1.5s linear infinite"
  button-add-to-bag:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 16px
    height: 40px
  button-add-to-bag-adding:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    border: "1px {colors.success} lines replace the black edge lines while the item is being added"
  button-popup:
    backgroundColor: "{colors.surface-tile}"
    textColor: "{colors.ink}"
    typography: "{typography.popup-ui}"
    rounded: "{rounded.none}"
    height: 42px
    border: "1px solid {colors.ink}"
  button-popup-hover:
    backgroundColor: "{colors.cta-fill-hover}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.ink}"
  button-popup-outlined:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.popup-ui}"
    rounded: "{rounded.none}"
    height: 42px
    border: "1px solid {colors.ink}"
  badge-new:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.label-mono}"
    rounded: "{rounded.none}"
    padding: 2px 8px 0
    height: 24px
  badge-secondary:
    backgroundColor: "{colors.badge-pink}"
    textColor: "{colors.ink}"
    typography: "{typography.label-mono}"
    rounded: "{rounded.none}"
    height: 24px
  product-tile:
    backgroundColor: "{colors.surface-tile}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 22px 8px 6px
    height: 46px
    border: "1px solid {colors.hairline}"
  text-input-search:
    backgroundColor: "{colors.surface-tile}"
    textColor: "{colors.ink}"
    typography: "{typography.body-base}"
    rounded: "{rounded.none}"
    padding: 8px 32px 8px 8px
    height: 36px
  text-input-error:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.error} (bottom edge)"
  promo-bar:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav-link}"
    height: 31.984375px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    height: 40px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.footer-pink}"
    textColor: "{colors.ink}"
    typography: "{typography.body-base}"
    padding: 16px
---

## Overview

Glossier's storefront (measured on `glossier.com`, which geo-redirected to the `/en-th` Thailand storefront during extraction — prices render in ฿) is a near-silent retail interface whose job is to stay out of the way of product photography. Everything structural is black on white: pure `#000000` ink on a pure `#ffffff` canvas, square corners on every button, input, tile and badge, and one typeface — Colophon Foundry's **Apercu** — almost always at weight 400.

The "brand moments" are carried by photography and by a very small set of chromatic accents:
- **Electric blue `#0600ff`** — the `NEW` product badge, the "skip to main content" focus link, the free-shipping progress bar and select focus outlines. It is the only saturated UI color in the stylesheet and is used in tiny doses.
- **Pale pink** — `#faf2f4` fills the entire footer, and `#f6e3e6` is the secondary badge ("BEST SELLER") — the residue of the brand's famous millennial-pink packaging, reduced to a background wash.
- **Light greys** — product images sit on `#f7f7f7` tiles (the largest background area on the page), and the conversion button is a flat `#e8e8e8` slab.

The signature interaction is the **"marching ants" button**. Glossier's primary buttons have no CSS `border`; instead they draw a 1px black line along the bottom and right edges with `background-image` gradients. On mouse hover the gradients switch to 5px dashes on all four sides and a `marching-ants-full-1` keyframe animates them around the button (1.5s, linear, infinite). While a product is being added to the bag, the dashes turn green `#00ac5a`. This is the most "Glossier" detail on the site and is impossible to reproduce with an ordinary bordered button.

The homepage capture shows the information rhythm: a black 32px promo bar, a 40px white header with a small italic wordmark at the left and 12px uppercase category links across the middle, a full-bleed lifestyle hero with a giant translucent "Glossier." wordmark overlaid on the photograph, a four-up product carousel on grey tiles, then two large editorial image tiles, then a five-up category image row. A Klaviyo "Join the list" email modal (white panel, 0px radius, product photo on the left) appears on first visit.

**Key Characteristics:**
- One typeface family (Apercu, Apercu Mono, Apercu Pro) at weight 400 for nearly every role; 500 only for product-page titles.
- 14px is the dominant text size (1854 weighted chars on the homepage), then 12px (570).
- Square geometry: the only non-zero radius rendered on the homepage is a `50%` circle.
- Grey `#f7f7f7` product tiles and grey `#e8e8e8` conversion buttons; no filled black buttons.
- Electric blue `#0600ff` used only for tiny badges/indicators/focus.
- Marching-ants animated dashed border on button hover.
- No box shadows on the native theme (the shadows in the CSS corpus belong to third-party widgets).

## Colors

### Brand & Accent
- **Electric Blue** (`{colors.primary}` — `#0600ff`): Glossier's only saturated UI color. Fills the `NEW` badge (`.media-text__badge`, `.pv-header__badge`), the skip-link focus state, the shipping-progress bar, and the 2px select focus outline. White text on it (`{colors.on-primary}` — `#ffffff`). Never used for large surfaces or buttons.
- **Ink** (`{colors.ink}` — `#000000`): the real action color. Button edge lines, all body copy, nav, headings, the promo bar fill.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page background, header, add-to-bag buttons, modal panel.
- **Tile Grey** (`{colors.surface-tile}` — `#f7f7f7`): product image tiles (`.pi__img`), the search input fill and the email-modal "Sign up" button. Largest background area on the homepage.
- **Surface Alt** (`{colors.surface-alt}` — `#f0f0f0`): secondary grey fill seen on variant chips and minor panels.
- **CTA Fill** (`{colors.cta-fill}` — `#e8e8e8`): `.btn--primary-conversion` background ("Shop now", "Add to bag" on the product page). Also the 1px input hairline (`{colors.hairline}`).
- **CTA Fill Hover** (`{colors.cta-fill-hover}` — `#e2e2e2`): measured hover fill of the modal "Sign up" / "No thanks" buttons.
- **Footer Pink** (`{colors.footer-pink}` — `#faf2f4`): the whole `.footer` and end-card placeholders.
- **Badge Pink** (`{colors.badge-pink}` — `#f6e3e6`): `.pi__img-label--secondary` ("BEST SELLER").
- **Scrim** (`{colors.scrim}` — `#00000099`): 60% black overlay behind the email modal.
- **Charcoal** (`{colors.charcoal}` — `#333333`): small dark fills (carousel/indicator elements).

### Text
- **Ink** (`{colors.ink}` — `#000000`): 1931 weighted chars — the most-read color.
- **Ink Muted** (`{colors.ink-muted}` — `#666666`): product subtitles ("Eau de parfum", "Limited edition"), helper text (`.form-item .additional-text`), disabled conversion-button text, footer secondary links.
- **Nav Secondary** (`{colors.ink-nav-secondary}` — `#464545`): secondary header text.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): promo bar text, badge text.

### Semantic
- **Error** (`{colors.error}` — `#d30000`): 1px bottom border on invalid inputs (`.input--error`, `.form-item .has-error`) and error checkbox outlines.
- **Success** (`{colors.success}` — `#00ac5a`): the green marching-ants lines on an add-to-bag button in its `.adding` state.

## Typography

### Font Family
- **Apercu** — served as `Apercu` (weights 400, 400 italic, 500, 500 italic, 600–700) with the stack `Apercu, "Gill Sans", sans-serif`. It carries 2008 weighted characters on the homepage.
- **Apercu Pro** — served as `"Apercu Pro"` (400) by the Klaviyo email modal, stack `"Apercu Pro", Helvetica, Arial, sans-serif`.
- **Apercu Mono** — served as `"Apercu Mono"` (400–500) for uppercase badge labels.

Apercu was designed by Anthony Sheret and Edd Harrington (Colophon Foundry / The Entente), developed from December 2009 and commercially released in August 2010 as "an amalgamation of classic realist typefaces": Franklin Gothic, Johnston, Gill Sans and Neuzeit — which is why Glossier's own fallback is `"Gill Sans"`.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Where |
|---|---|---|---|---|---|
| `{typography.display-product}` | 32px | 500 | 40px | — | Product page h1 ("Glossier You") |
| `{typography.display-product-mobile}` | 28px | 500 | 35px | -0.28px | Product h1 at 390px |
| `{typography.heading-section}` | 20px | 400 | 28px | — | Home hero/section h2 ("The Holiday Gift Shop") |
| `{typography.heading-section-mobile}` | 18px | 400 | 25.2px | — | Same h2 at 390px |
| `{typography.body-base}` | 16px | 400 | 18.4px | — | `body` default, footer, search input |
| `{typography.body}` | 14px | 400 | 19.6px | 0.03px | Paragraphs, product names, prices |
| `{typography.button}` | 14px | 400 | 16.1px | 0.02625px | `.btn` labels |
| `{typography.nav-link}` | 12px | 400 | 19.6px | — | Uppercase header categories |
| `{typography.eyebrow}` | 12px | 400 | 20.4px | 0.04px | Uppercase product-page subheads ("SAVE WITH SETS") |
| `{typography.label-mono}` | 12px | 400 | — | 0.48px | Apercu Mono uppercase badges |
| `{typography.popup-ui}` | 14px | 400 | 14px | — | Klaviyo modal buttons |

### Principles
- Weight is almost never used for hierarchy: 400 accounts for 2456 of 2478 weighted chars. Size and case do the work.
- Uppercase is reserved for 12px navigation, eyebrows and mono badges.
- Tracking is tiny and positive (0.02625–0.04px at 12–14px); 0.48px only on uppercase 12px labels.
- The homepage has no rendered `h1`; the hero heading is a 20px h2. The giant "Glossier." in the hero is part of the image/graphic, not live text.

### Note on Font Substitutes
Apercu is a commercial Colophon Foundry typeface (Colophon now distributes through Monotype/MyFonts). If it is unavailable, use the brand's own fallback `"Gill Sans"` and then a neutral grotesque; keep weight 400 and the same px sizes. For Apercu Mono use any monospace in uppercase at 12px.

## Layout

### Spacing System
Measured gaps cluster at 8px (18), 6px (10), 10px and 16px; paddings at 16px (34), 8px (24), 4px (9), 10px and 12px. The theme writes its spacing in rem (`.5rem 1rem` button padding, `.75rem` container gutters).
- `{spacing.xxs}` 4px · `{spacing.xs}` 6px · `{spacing.sm}` 8px · `{spacing.md}` 12px · `{spacing.lg}` 16px · `{spacing.xl}` 20px · `{spacing.xxl}` 40px.

### Grid & Container
- `.container` is `max-width: 1920px` with `0.75rem` side padding on mobile, `1rem` on larger viewports, and a percentage gutter (`1.1428571429%`) at the widest breakpoint.
- Homepage product carousel: four cards per row at 1280px, each card a full-height grey tile with name, subtitle and price below and a full-width "Add to bag" button pinned at the bottom.
- Editorial row: two equal image tiles side by side; category row: five equal tiles.

### Whitespace Philosophy
Dense, catalogue-like spacing (8px/16px) inside cards, but generous vertical breaks between sections. The grid is edge-to-edge with a thin gutter; whitespace comes from the white canvas around grey tiles rather than from padding inside cards.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat — no shadow | Everything in the native theme |
| Scrim | `{colors.scrim}` `#00000099` | Behind the email modal |

The homepage's `boxShadows` frequency table is empty. Shadows in the CSS corpus (e.g. `0px 0px 12px 2px #c7c5c7`) come from third-party widgets (reviews, payments), not the Glossier theme. Depth is created by grey-vs-white tiles and by the black edge lines on buttons, never by shadow.

## Shapes

### Border Radius Scale
- `{rounded.none}` 0px — buttons (`.btn { border-radius: 0 }`), inputs, tiles, badges, modal.
- `{rounded.circle}` 50% — the only rendered non-zero radius on the homepage (round icon/indicator elements, e.g. the "20% SAVINGS" sticker and close icon).

### Photography Geometry
Product tiles are tall rectangles (roughly 4:5) with the product centred on `#f7f7f7`. Editorial tiles are full-bleed lifestyle or still-life photographs with soft natural light, pink paper, red ribbon and the brand's hand-lettered packaging; pills/labels sit on top of the photograph as white rectangles.

## Components

### Buttons
**Primary / conversion** (`.btn--primary-conversion`) — "Shop now", product-page "Add to bag":
- Background `{colors.cta-fill}` `#e8e8e8`, text `{colors.ink}`, `{typography.button}` (14px/400, 16.1px line, 0.02625px tracking).
- Padding 8px 16px, height 40px, radius 0.
- Edge: 1px black lines on the bottom and right only, drawn with `background-image` (`background-size: 0 0, 100% 1px, 0 0, 1px 100%`).
- Hover (mouse intent): lines become 5px × 0.5px dashes on all four sides and animate (`marching-ants-full-1`, 1.5s linear infinite). Fill unchanged.
- Disabled: `#e8e8e8` fill with `#666` text.

**Add to bag (product card)** (`.btn--add-to-bag`) — white fill, same edge lines and marching-ants hover; during `.adding` the lines turn `{colors.success}` `#00ac5a`. Full card width, 40px tall.

**Secondary** (`.btn--secondary`) — white, a single 1px black underline at the bottom; marching ants on hover.

**Email modal buttons** (Klaviyo) — "Sign up": `{colors.surface-tile}` fill, 1px solid black border, 42px tall, Apercu Pro 14px. "No thanks": white fill, same border. Measured hover for both: fill `{colors.cta-fill-hover}` `#e2e2e2`.

### Cards & Containers
- **Product card**: grey `{colors.surface-tile}` image tile (0px radius), badge top-left, optional round sticker top-right, then product name (`{typography.body}` ink), subtitle (`{colors.ink-muted}`), price, optional size chips ("100 ml", "50 ml", "8 ml" in grey boxes with the selected one outlined in black), and the add-to-bag button.
- **Editorial tile**: full-bleed photograph with a small white rectangular label centred near the bottom ("Gift Guide", "Holiday Fragrance Kits").
- **Hero text card**: rectangular panel in the top-left of the hero with a 12px uppercase eyebrow ("IT'S HERE"), the 20px h2, a 14px paragraph and a "Shop now" conversion button.

### Inputs & Forms
- **Email input (modal)**: white, 1px solid `{colors.hairline}`, padding 22px 8px 6px (floating label), 46px tall, placeholder `{colors.ink-muted}`, 14px.
- **Search input**: `{colors.surface-tile}` fill, no border, 16px text, padding 8px 32px 8px 8px, 36px tall.
- **Error state**: 1px `{colors.error}` bottom border.
- **Select (collection filters)**: borderless, 14px, padding 10px 0, 40px tall.
- Focus: keyboard users get the browser `outline: auto`; selling-plan selects use `2px solid #0600ff`.

### Navigation
- **Promo bar**: fixed, black `{colors.ink}` with white 12px text and arrow controls; height 31.984375px (`--promo-bar-height`).
- **Header**: white, `--header-height: 2.5rem` (40px). Wordmark left, 12px uppercase category links (SKINCARE, MAKEUP, BALMS, BODY, FRAGRANCE, GLOSSIER GOODS, SETS, SHOP ALL) — the "Gift Guide" entry is a hand-drawn script image. Right side: search icon, locale (globe + "TH"), STORES, LOG IN, BAG (0).
- Mobile header collapses to wordmark, MENU and BAG (0).

### Pills, Tags, and Chips
- **NEW badge**: `{colors.primary}` fill, white Apercu Mono 12px uppercase, 24px tall, padding 2px 8px 0.
- **Secondary badge** ("BEST SELLER"): `{colors.badge-pink}` fill, ink Apercu Mono uppercase.
- **Size chips**: grey rectangles, italic 14px labels, selected chip outlined in black.

### Signature Components
- **Marching-ants button** — the dashed animated border on hover; see Buttons.
- **Giant wordmark hero** — a full-width translucent "Glossier." set over the hero photograph.
- **Pink footer** — `{colors.footer-pink}` across the full width, 16px padding, 16px text, `#666666` secondary links.

### Motion
- `marching-ants-full-1`: background-position animates from `0 0, 0 100%, 0 0, 100% 0` to `10px 0, -10px 100%, 0 -10px, 100% 10px` over 1.5s, linear, infinite; paused by default, running on hover or with the `.marching` class; `.reverse` flips direction.
- `.btn` transitions `font-size .4s ease-in-out`; `.container` transitions its padding `.4s ease-in-out` across breakpoints.
- Product hover images cross-fade with `visibility/opacity .5s ease-in-out`.
- No parallax, no scroll-triggered reveals in the native theme.

### Voice & Microcopy
- Short, friendly, lower-key: "Shop now", "Add to bag", "Join the list", "No thanks", "IT'S HERE".
- Sentence case for buttons and headings; uppercase only for nav, eyebrows and badges.
- Product subtitles are plain descriptors in grey: "Eau de parfum", "Limited edition".
- Prices sit directly under the subtitle with no "from" or currency prefix styling beyond the locale symbol.

### Measurement Notes
- The extraction was served the Thailand storefront (`/en-th`); layout and styles are shared across locales, only currency and promo copy change.
- The homepage has no rendered `h1`; the 32px/500 title token comes from the product page measurement.
- The "Sign up" / "No thanks" buttons and the email input belong to the Klaviyo modal (Apercu Pro), not to the theme's `.btn` system.

## Design System Architecture

Glossier publishes **no public design system, component library, token package or brand portal**. Searches for an official system, GitHub/npm tokens, a brand/press kit and rebrand documentation returned only third-party scraped "DESIGN.md" aggregators (excluded by policy) and press coverage. What follows is the de-facto system observable in Glossier's own shipped theme files.

- **Platform**: a custom Shopify Online Store theme. The homepage HTML declares `Shopify.theme = {"schema_name":"Glossier","schema_version":"3.51.0"}` with a seasonal theme name ("Holiday 10/6 Prep"), served from `https://www.glossier.com/cdn/shop/t/1470/assets/style.css` and `index.css`.
- **Token architecture**: there is no token tier. The stylesheet hard-codes hex values (`#000`, `#fff`, `#666`, `#f7f7f7`, `#e8e8e8`, `#0600ff`, `#faf2f4`, `#f6e3e6`, `#d30000`, `#00ac5a`) and rem sizes. The only theme custom properties are layout values: `--header-height: 2.5rem`, `--promo-bar-height`, `--logo-badge-width: 70px`, plus `--end-card-background-color` with a `#faf2f4` fallback. Other `--*` variables on the page (`--kl-reviews-*`, `--rc-*`) belong to Klaviyo reviews and ReCharge.
- **Naming convention**: BEM — blocks such as `btn`, `pi` (product item), `nav`, `footer`, `config`, `pv-header` (product view) with `__element` and `--modifier` classes: `btn--primary`, `btn--primary-conversion`, `btn--secondary`, `btn--tertiary`, `btn--quaternary`, `btn--add-to-bag`, `btn--notify`, `btn--transparent`, `pi__img`, `pi__img-label--secondary`, `pi__price--current`, `config__option`, `footer__nav-link`. JS hooks are separated with a `js-` prefix (`js-product-item-link`, `js-input`). Icons come from one SVG sprite (`sprite-icon-*.svg`) addressed by modifier classes such as `--chevron-right-black`, `--close-white`.
- **Theming**: a single light theme. No dark mode, no high-contrast mode, no density modes. Interaction mode is switched with the What Input library: `[data-whatintent=mouse]` enables marching-ants hover; `[data-whatinput=keyboard] button:focus { outline: auto !important }` restores focus rings for keyboard users.
- **Type & spacing system**: one family (Apercu, Apercu Mono; Apercu Pro inside Klaviyo), sizes written in rem from a 16px root (`.75rem` = 12px, `.875rem` = 14px, `1.25rem` = 20px, `2rem` = 32px). Spacing uses rem multiples of 4px (.25rem, .5rem, .75rem, 1rem). Breakpoints in the CSS: 480, 767/768, 834, 979/980, 1024/1025, 1281, 1401 and 1921px.
- **Component model**: button variants listed above; product item (`pi`), product view header (`pv-header`) with badges, variant configurator (`config__option`, `config__option--color-block`), media-text blocks, featured-product tabs, bag drawer with free-shipping progress, footer accordions. States are expressed as classes (`.marching`, `.reverse`, `.adding`, `.is-active`, `.has-error`).
- **Accessibility**: a `.skip-to-main` link that becomes visible on focus in `#0600ff` with white text; `.screenreader` utility (60 uses on the homepage); keyboard-only focus outlines via What Input; `2px solid #0600ff` focus outlines on selling-plan controls; `outline: #000 solid .0625rem; outline-offset: .25rem` on featured-product tabs. No published contrast or touch-target policy; measured mobile buttons are 44px tall.
- **Delivery**: shipped only as compiled theme CSS/JS on the Shopify CDN; no npm package, no Figma kit, no public versioning. Typeface supplied by Colophon Foundry ([It's Nice That on Aperçu](https://www.itsnicethat.com/articles/3198-colophon-apercu)). Brand voice reference: [glossier.com/pages/about](https://www.glossier.com/pages/about) ("Skin First. Makeup Second™", beauty "accessible and uncomplicated").

## Do's and Don'ts

### Do
- Use Apercu 400 for everything; reserve 500 for product titles (32px desktop, 28px mobile).
- Keep every corner at `{rounded.none}`; only round icons/stickers use `{rounded.circle}`.
- Put product photography on `{colors.surface-tile}` `#f7f7f7` tiles.
- Build primary buttons as `{colors.cta-fill}` slabs with 1px black bottom/right lines and the marching-ants hover.
- Use `{colors.primary}` `#0600ff` only for tiny signals: NEW badges, focus, progress.
- Set navigation, eyebrows and badges in 12px uppercase; body and buttons in 14px sentence case.
- Close the page with the full-width `{colors.footer-pink}` footer.

### Don't
- Don't fill buttons with black or blue; Glossier has no solid-black CTA.
- Don't add box shadows, gradients or rounded cards.
- Don't use bold (700) for headings; the system expresses hierarchy through size and case.
- Don't reintroduce bright "Glossier pink" as a UI color; pink exists only as `#faf2f4`/`#f6e3e6` washes.
- Don't increase tracking on sentence-case text; 0.48px is for uppercase 12px labels only.
- Don't round product images or put drop shadows under packshots.

## Responsive Behavior

### Breakpoints
| Name | Width | Key changes |
|---|---|---|
| Small mobile | ≤ 480px | tighter modules |
| Mobile | ≤ 767px | header shows MENU / BAG; section h2 18px; product h1 28px |
| Tablet | 768–1024px | 2–3 column grids, `834px` and `980px` intermediate rules |
| Desktop | ≥ 1025px | full category nav, 4-up product carousel |
| Wide | ≥ 1281 / 1401 / 1921px | container gutter becomes a percentage; max-width 1920px |

### Touch Targets
- Mobile conversion button measured 44px tall (padding 6px 12px 8px); desktop 40px.
- Email-modal buttons 42px tall.
- `.btn` mobile rule sets `min-height: 2.75rem` (44px).

### Collapsing Strategy
- Category nav moves into a MENU drawer (`mobile-subnav__*` classes).
- Product carousel becomes a horizontally scrolling Flickity row; non-enabled carousels fall back to overflow scrolling.
- Footer link columns become accordions (`footer__acc-*`).

### Image Behavior
Images are lazy-loaded (`lazyload` class); product tiles show a second "hover" image that fades in over 0.5s (`.pi__img-wrapper--hover`) on desktop.

## Iteration Guide

1. Start with white canvas, black ink, Apercu 400 at 14px/19.6px.
2. Add the 40px header with 12px uppercase links and the black promo bar above it.
3. Lay products on `#f7f7f7` tiles, square corners, name/subtitle/price in 14px with `#666666` subtitle.
4. Implement buttons as `#e8e8e8` (conversion) or white (add to bag) with 1px black bottom/right background-image lines; then add the marching-ants hover keyframes.
5. Add `#0600ff` Apercu Mono NEW badges and `#f6e3e6` secondary badges, 24px tall.
6. Finish with the `#faf2f4` footer at 16px.
7. Check: no shadows, no radii, no bold, no saturated color except tiny blue accents.

### Prompting Checklist
- "Apercu 400, 14px/19.6px, black on white, square corners."
- "Product tiles on #f7f7f7, no shadow, badge top-left in Apercu Mono 12px uppercase."
- "Conversion button #e8e8e8, 8px 16px, 40px tall, 1px black bottom/right lines, marching-ants dashed hover."
- "Header 40px white, 12px uppercase links; black promo bar above."
- "Footer full-width #faf2f4, 16px text, #666666 secondary links."
- "Accent #0600ff only for NEW badges, focus and progress."
- "No bold headings, no gradients, no rounded corners."
