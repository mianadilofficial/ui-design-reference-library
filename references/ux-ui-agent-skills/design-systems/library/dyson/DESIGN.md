---
version: alpha
name: Dyson
category: "Consumer Electronics"
description: "Dyson's US storefront (Adobe Experience Manager) is a monochrome engineering catalogue: one proprietary face, DysonFutura (Light 300 / Book 400 / Medium 500), set light at 32px/40px for section headings and 14px/20px for #555555 body copy, on a #ffffff canvas with a #000000 header, #fbfbfb product stages, #ebebeb hairlines and 4px-radius cards. Action colour is a transactional green #79b928 with black text (66px tall, 4px radius, darkening to #65a01b through a circular ripple), backed by a #ececec 'linking' button and a #333333 'interactive' button."

colors:
  primary: "#79b928"
  primary-pressed: "#65a01b"
  on-primary: "#000000"
  canvas: "#ffffff"
  ink: "#555555"
  ink-strong: "#333333"
  ink-price: "#2e2e2e"
  ink-muted: "#919191"
  ink-nav: "#999999"
  ink-subtle: "#757575"
  black: "#000000"
  on-dark: "#ffffff"
  nav-hover: "#222222"
  header-band: "#242424"
  surface-soft: "#fbfbfb"
  surface-alt: "#f8f8f8"
  button-linking: "#ececec"
  button-linking-pressed: "#c9c9c9"
  border-hover: "#dadada"
  hairline: "#ebebeb"
  magenta: "#c4398d"
  magenta-pressed: "#ab2975"
  link-blue: "#0066cc"
  price-now: "#006fdd"
  error: "#da2f47"
  label-new: "#ac5d00"
  promo-purple: "#522a86"

typography:
  hero-eyebrow:
    fontFamily: "DysonFutura, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  hero-eyebrow-mobile:
    fontFamily: "DysonFutura, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  display-category:
    fontFamily: "DysonFutura, sans-serif"
    fontSize: 44px
    fontWeight: 300
    lineHeight: 52px
  display-category-mobile:
    fontFamily: "DysonFutura, sans-serif"
    fontSize: 32px
    fontWeight: 300
    lineHeight: 40px
  heading-1:
    fontFamily: "DysonFutura, sans-serif"
    fontSize: 32px
    fontWeight: 300
    lineHeight: 40px
  heading-1-mobile:
    fontFamily: "DysonFutura, sans-serif"
    fontSize: 24px
    fontWeight: 300
    lineHeight: 32px
  section-title-lg:
    fontFamily: "DysonFutura, sans-serif"
    fontSize: 36px
    fontWeight: 300
    lineHeight: 44px
  heading-2:
    fontFamily: "DysonFutura, sans-serif"
    fontSize: 28px
    fontWeight: 300
    lineHeight: 36px
  heading-3:
    fontFamily: "DysonFutura, sans-serif"
    fontSize: 24px
    fontWeight: 300
    lineHeight: 32px
  heading-4:
    fontFamily: "DysonFutura, sans-serif"
    fontSize: 22px
    fontWeight: 300
    lineHeight: 28px
  heading-5:
    fontFamily: "DysonFutura, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  heading-6:
    fontFamily: "DysonFutura, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  product-title:
    fontFamily: "DysonFutura, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: "DysonFutura, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-sm:
    fontFamily: "DysonFutura, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: "DysonFutura, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  button-lg:
    fontFamily: "DysonFutura, sans-serif"
    fontSize: 18px
    fontWeight: 500
  search:
    fontFamily: "DysonFutura, sans-serif"
    fontSize: 12px
    fontWeight: 300
    lineHeight: 18px
  label-sm:
    fontFamily: "DysonFutura, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px

rounded:
  none: 0px
  xs: 2px
  sm: 4px
  md: 8px
  lg: 24px

spacing:
  xxs: 2px
  xs: 4px
  sm: 8px
  gutter: 10px
  md: 12px
  lg: 16px
  xl: 20px
  xxl: 24px
  section-gap: 28px
  huge: 48px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.sm}"
    padding: 20px 24px
    height: 66px
  button-primary-hover:
    backgroundColor: "{colors.primary-pressed}"
  button-primary-pressed:
    backgroundColor: "{colors.primary-pressed}"
  button-linking:
    backgroundColor: "{colors.button-linking}"
    textColor: "{colors.black}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 16px
    height: 66px
    border: "1px solid {colors.button-linking}"
  button-linking-hover:
    border: "1px solid {colors.border-hover}"
  button-linking-pressed:
    backgroundColor: "{colors.button-linking-pressed}"
  button-secondary:
    backgroundColor: "{colors.ink-strong}"
    textColor: "{colors.on-dark}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.none}"
    padding: 20px 8px
    height: 66px
  button-secondary-hover:
    backgroundColor: "{colors.black}"
  button-linking-alt:
    backgroundColor: "{colors.magenta}"
    textColor: "{colors.on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 16px 8px
  button-linking-alt-pressed:
    backgroundColor: "{colors.magenta-pressed}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 16px
    height: 56px
    border: "1px solid {colors.ink-muted}"
  text-input-focused:
    border: "2px solid {colors.ink-strong}"
  text-input-error:
    border: "1px solid {colors.error}"
  search-input:
    textColor: "{colors.ink-strong}"
    typography: "{typography.search}"
    rounded: "{rounded.none}"
    padding: 0px 0px 0px 10px
  benefit-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.black}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 16px
    height: 126px
    border: "1px solid {colors.hairline}"
  support-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    border: "1px solid {colors.hairline}"
  product-tile:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.border-hover}"
  product-tile-hover:
    border: "1px solid {colors.ink-strong}"
  nav:
    backgroundColor: "{colors.black}"
    textColor: "{colors.on-dark}"
    typography: "{typography.body}"
    height: 179px
  nav-link-hover:
    backgroundColor: "{colors.nav-hover}"
    textDecoration: underline
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
  link-inline:
    textColor: "{colors.link-blue}"
    typography: "{typography.body}"
  footer:
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
---

## Overview

Dyson.com (US) reads like a technical catalogue rather than a lifestyle magazine. The page is built from three
tonal blocks: a **black header** (`{colors.black}` `#000000`) with a charcoal country strip on top, a **full-bleed
campaign hero** (in the measured capture, a saturated electric-blue product silhouette scene), and then a long
**white canvas** (`{colors.canvas}` `#ffffff`) where category thumbnails, editorial tiles and product grids sit on
pale `{colors.surface-soft}` `#fbfbfb` stages. There is no decorative colour on the chrome: everything outside of
photography is black, white and a ladder of greys.

Typography is a single proprietary face, **DysonFutura**, served in exactly three weights (Light 300, Book 400,
Medium 500 — the woff files are named `DysonFutura-Light`, `DysonFutura-Book`, `DysonFutura-Medium`). The
signature move is that headings are set **light**: section headings such as "Latest from Dyson" and "Featured"
are 32px/40px at weight 300 in `{colors.ink-strong}` `#333333`; category page titles go to 44px/52px, still at 300.
Weight 500 is reserved for buttons, product names and prices. Body copy is a soft grey `{colors.ink}` `#555555` —
the most-read text colour on the homepage — at 14px/20px.

Colour is functional and named by job in the shipped CSS: `.button--transactional` is green `{colors.primary}`
`#79b928` with **black** text (add to basket / Shop now on product pages), `.button--linking` is pale grey
`{colors.button-linking}` `#ececec` (the hero "Shop now"), `.button--interactive` is charcoal
`{colors.ink-strong}` `#333333` with white text ("Notify me"), and `.button--linking-alt` is magenta
`{colors.magenta}` `#c4398d`. Hover is not a colour swap but a **circular ripple**: a `::after` disc with
`border-radius: 50%` grows from the button centre to 90rem in 0.6s `cubic-bezier(0.6, 0.1, 0.9, 0.6)`, filling the
button with the darker state colour.

**Key Characteristics:**
- One typeface, DysonFutura, three weights; headings at 300, never bold.
- Black header + white canvas; full-bleed photographic heroes carry all the colour.
- Body text in grey `#555555`, headings in `#333333`, pure `#000000` only on chrome and button labels.
- Green `#79b928` transactional button with black label — the only saturated UI colour on product pages.
- Tall, generous buttons: 66px on desktop hero and product buy boxes; 56px minimum from the base `.button` class.
- Square or near-square geometry: radii 0px, 2px, 4px, 8px; no pills on primary actions.
- Hover ripple animation (circular `::after` growth) rather than instant colour change.
- Product photography on `#fbfbfb` / `#f8f8f8` light-grey stages, shot frontally, objects isolated.

## Colors

> **Source pages:** home (`/en`), category (`/vacuum-cleaners`), product (`/hair-care/hair-dryers/supersonic/...`),
> plus the shipped stylesheet `clientlib-homepage.min.css` and product-page clientlibs.

### Brand & Action
- **Transactional Green** (`{colors.primary}` — `#79b928`): `.button--transactional`; measured on the product
  page "Shop now" (66px tall, 4px radius). Text on it is black.
- **Green Pressed** (`{colors.primary-pressed}` — `#65a01b`): the ripple fill on hover and the `:active` background.
- **On Primary** (`{colors.on-primary}` — `#000000`): label colour on green and grey buttons.
- **Magenta** (`{colors.magenta}` — `#c4398d`): `.button--linking-alt` (white text); pressed `{colors.magenta-pressed}` `#ab2975`.

### Neutrals (text)
- **Ink** (`{colors.ink}` — `#555555`): most-read text on the homepage and category page (paragraphs, card copy).
- **Ink Strong** (`{colors.ink-strong}` — `#333333`): headings, `body` colour in CSS, product names, links, input text.
- **Ink Price** (`{colors.ink-price}` — `#2e2e2e`): `.price` text colour.
- **Ink Muted** (`{colors.ink-muted}` — `#919191`): secondary copy and the 1px border of form fields.
- **Ink Nav** (`{colors.ink-nav}` — `#999999`): idle nav/header text such as "Your basket is empty."
- **Ink Subtle** (`{colors.ink-subtle}` — `#757575`): small helper text.
- **On Dark** (`{colors.on-dark}` — `#ffffff`): header links, hero copy, labels on charcoal and magenta buttons.

### Surfaces
- **Canvas** (`{colors.canvas}` — `#ffffff`): page background — the dominant area in every capture.
- **Black** (`{colors.black}` — `#000000`): header/mega-nav background.
- **Header Band** (`{colors.header-band}` — `#242424`): the dark strip that holds the country selector.
- **Nav Hover** (`{colors.nav-hover}` — `#222222`): background behind a hovered category link.
- **Surface Soft** (`{colors.surface-soft}` — `#fbfbfb`): product image stages and the "Buy from Dyson.com" band.
- **Surface Alt** (`{colors.surface-alt}` — `#f8f8f8`): secondary product stage tone.
- **Promo Purple** (`{colors.promo-purple}` — `#522a86`): a full-width promotional band measured on the product page.

### Lines & Controls
- **Button Linking** (`{colors.button-linking}` — `#ececec`): hero "Shop now" fill; pressed `{colors.button-linking-pressed}` `#c9c9c9`.
- **Border Hover** (`{colors.border-hover}` — `#dadada`): border that appears on hover of the grey button; idle border of product tiles.
- **Hairline** (`{colors.hairline}` — `#ebebeb`): 1px borders of benefit cards and support cards.

### Semantic
- **Link Blue** (`{colors.link-blue}` — `#0066cc`): inline links inside product content and the basket notification map text.
- **Price Now** (`{colors.price-now}` — `#006fdd`): `.add-to-basket-notification__price-now`.
- **Error** (`{colors.error}` — `#da2f47`): `.forms--error` borders.
- **Label New** (`{colors.label-new}` — `#ac5d00`): the amber "NEW" label above product names in the Featured grid.

## Typography

### Font Family
**DysonFutura** is the only text face on the site. The stylesheet declares three `@font-face` rules for the family
`DysonFutura` (`DysonFutura-Light.woff` 300, `DysonFutura-Book.woff` 400, `DysonFutura-Medium.woff` 500, all
`font-display: swap`) and a fourth for **FoundryGridnik** Medium 500, a square technical face used for occasional
spec numerals. Every rule falls back to the generic `sans-serif` — there is no named fallback stack.

### Hierarchy

| Token | Size | Weight | Line height | Where |
|---|---|---|---|---|
| `{typography.display-category}` | 44px | 300 | 52px | Category page title ("Floorcare") |
| `{typography.section-title-lg}` | 36px | 300 | 44px | Category page "Latest from Dyson" |
| `{typography.heading-1}` | 32px | 300 | 40px | Homepage hero headline, section headings (`.typography-heading1`, `h1` in CSS = 2rem/2.5rem) |
| `{typography.heading-2}` | 28px | 300 | 36px | Product name block on PDP (`h2` = 1.75rem/2.25rem) |
| `{typography.heading-3}` | 24px | 300 | 32px | `h3` = 1.5rem/2rem |
| `{typography.heading-4}` | 22px | 300 | 28px | `h4` = 1.375rem/1.75rem |
| `{typography.heading-5}` | 20px | 400 | 28px | `h5` = 1.25rem/1.75rem |
| `{typography.hero-eyebrow}` | 18px | 400 | 24px | The homepage `h1` "Dyson deals" sits above the big line |
| `{typography.product-title}` | 18px | 500 | 24px | Product card names on category grids |
| `{typography.heading-6}` | 16px | 500 | 24px | `h6` = 1rem/1.5rem |
| `{typography.body}` | 16px | 400 | 24px | `.typography-body`, review text, nav links |
| `{typography.body-sm}` | 14px | 400 | 20px | `p` default (0.875rem/1.25rem), most homepage copy |
| `{typography.button}` | 16px | 500 | 24px | `.button` base |
| `{typography.button-lg}` | 18px | 500 | — | Buy-box buttons on desktop |
| `{typography.search}` | 12px | 300 | 18px | Header search field |
| `{typography.label-sm}` | 12px | 400 | 18px | Small labels |

Note the homepage oddity: the semantic `h1` is the small 18px eyebrow "Dyson deals" while the large visible line
"TOO GOOD TO MISS" is an `h2` at 32px/300. On product pages the `h1` is the 16px breadcrumb-style product name
and the visible 28px name is an `h2`. Do not "fix" this when reproducing the look — size follows role, not tag.

On the homepage, `p` text inside the footer disclaimer measured 14px with a 21px line height at desktop and 20px
at mobile; the stylesheet's `p` rule is 0.875rem / 1.25rem (20px), which is the value used for `{typography.body-sm}`.

### Letter-spacing & case
DysonFutura is set with `letter-spacing: normal` everywhere on the measured pages. Casing comes from copy, not CSS:
the hero headline is typed in capitals; navigation, buttons and headings are sentence case.

### Mobile
At 390px the homepage hero headline drops to `{typography.heading-1-mobile}` (24px/32px, 300), the eyebrow to
`{typography.hero-eyebrow-mobile}` (16px/24px), the category title to `{typography.display-category-mobile}`
(32px/40px) and body copy stays 14px/20px.

### Note on Font Substitutes
DysonFutura is proprietary and is served only from Dyson's own clientlib (no public licence was found). The
closest freely licensed geometric sans in the same 1920s German lineage is **Jost\*** by indestructible type*
(SIL Open Font License). When substituting, keep the three-weight discipline (300/400/500) and set headings light.

## Layout

### Grid & Container
The stylesheet sizes `.container` in fixed steps — 288px, 336px, 696px, 960px and 1296px, each with
`max-width: 100%` — switched by the breakpoints `375px`, `768px`, `1025px` and `1440px`. The base container has
10px side padding. At the 1280px capture the content column starts about 78px from the left edge and the hero
and header run full-bleed.

### Rhythm
- Header: 179px tall on desktop (country strip + utility row + category row); 112px on mobile.
- Hero: full-bleed image about 450px tall at 1280px, centred text stack: eyebrow → headline → one sentence → grey button.
- Category carousel: a row of square image tiles (light-grey stages) with a 16px caption underneath, overflowing to the right with a circular arrow.
- Editorial pair: two 50% tiles with 4px-cornered photography, an 18px title, two lines of grey copy and a "Shop now →" text link.
- Benefits band: `{colors.surface-soft}` background, four bordered `{components.benefit-card}` items.
- Featured grid: four product tiles, image on a pale stage, amber "NEW" label, product name below.

### Spacing scale
Measured paddings and gaps cluster on 2, 4, 8, 10, 12, 16, 20, 24, 28 and 48px (`{spacing.xxs}` to `{spacing.huge}`).
8px is the most frequent padding, 16px second; 10px recurs as the container gutter and link padding.

## Elevation & Depth

The site is essentially flat. On the measured pages the only computed box-shadow is a 1px inset ring
(`rgb(51, 51, 51) 0px 0px 0px 1px inset`) on a selected control. The stylesheets contain a few utility shadows
(e.g. `0 .125rem .625rem 0 rgba(0,0,0,.2)` and `0 12px 24px rgba(0,0,0,.2)`) for overlays and menus, but cards and
buttons do not float — separation comes from `#ebebeb` hairlines and from `#fbfbfb` stages against white.
Depth on the page is photographic: product renders with real shadows on pale grounds, and lifestyle imagery with
warm, directional light.

## Shapes

- **0px** (`{rounded.none}`): base `.button`, charcoal "Notify me", form fields, product tiles.
- **2px** (`{rounded.xs}`): focus outline radius on `.button:focus`; small controls.
- **4px** (`{rounded.sm}`): green and grey buttons, benefit cards, editorial images (`.button { border-radius: 0.25rem }` context).
- **8px** (`{rounded.md}`): support/contact cards and image tiles — the most frequent radius by count on the homepage.
- **24px** (`{rounded.lg}`): rare rounded chips.
- Circles (50%) appear only on round icon buttons such as carousel arrows and inside the hover ripple.

No skewed, notched or clipped shapes were measured.

## Components

### Buttons
All buttons inherit `.button`: DysonFutura 500, 16px/24px, `min-height: 56px`, `min-width: 100px`, padding
16px 8px, centred, `overflow: hidden` (so the ripple is clipped). Variants are named by intent:

**`{components.button-primary}`** — `.button--transactional`. Green `#79b928`, black label, 18px/500, padding
20px 24px, 66px tall, 4px radius (measured "Shop now" on the product page).
- Hover: `::after` disc grows from centre, `background-color: #65a01b` (`{components.button-primary-hover}`).
- Active: `#65a01b` (`{components.button-primary-pressed}`).

**`{components.button-linking}`** — `.button--linking`. Grey `#ececec`, black label, 4px radius, 66px tall on the
homepage hero, padding 16px measured at mobile. Hover keeps the fill and turns the border `#dadada`
(measured), while the ripple fills toward `#c9c9c9`; active `#c9c9c9`.

**`{components.button-secondary}`** — `.button--interactive`. Charcoal `#333333`, white label, square corners,
padding 20px 8px, 66px tall ("Notify me" on the product page). Ripple and active fill `#000000`. `[disabled]`
keeps the same `#333333` colours.

**`{components.button-linking-alt}`** — `.button--linking-alt`. Magenta `#c4398d` with white label from the
shipped CSS; ripple/active `#ab2975`. Not visible on the measured pages.

Focus: `.button:focus { outline: #000000 solid 2px; outline-offset: 3px; border-radius: 2px }`.

### Text links
- `{components.link}`: `#333333`, 16px/24px, no underline at rest; header links gain `text-decoration: underline` on hover (measured).
- Benefit-card titles are underlined at rest (visible in the capture).
- `{components.link-inline}`: `#0066cc` in product content.
- Editorial tiles end with "Shop now →" in `#333333`, 16px, followed by an arrow glyph.

### Forms
`{components.text-input}` — `.forms-text` / `.forms-select` / `.forms-textarea`: 56px (3.5rem) tall, white,
`1px solid #919191`, 0 radius, 16px padding, 16px DysonFutura in `#333333`. Focus: border `#333333` at 2px
(`{components.text-input-focused}`). Error: `.forms--error` borders `#da2f47`. Labels (`.forms-label`) are
14px/20px in `#555555`. The header search (`{components.search-input}`) is a bare 12px/300 field inside a white box
in the black header.

### Cards
- `{components.benefit-card}`: white, `1px solid #ebebeb`, 4px radius, 16px padding, 126px tall, icon + underlined title + 14px grey line.
- `{components.support-card}`: white, `1px solid #ebebeb`, 8px radius (category page "Live chat", "Phone").
- `{components.product-tile}`: white, square, `1px solid #dadada` that turns `#333333` on hover (measured on PDP related-products).

### Navigation
`{components.nav}`: black, 179px tall at desktop. Row 1: country selector (`#242424` band, bordered `1px solid
#919191` select). Row 2: the lowercase dyson wordmark at left, utility links in white at right (Dyson Certified
Refurbished, Find a store, For business, Register machine, Contact us, Sign in / Join). Row 3: category links
(Vacuums & cleaners, Hair care, Oral care, Air treatment, Headphones, Lighting, Support, Deals), search field and
basket icon. Category hover: `#222222` background + underline (`{components.nav-link-hover}`).

### Footer
`{components.footer}`: link columns (Products, …) in DysonFutura 16px/24px; legal paragraphs at 14px.

## Design System Architecture

**Dyson publishes no public design system.** Searches for a Dyson design system, brand guidelines, press kit or
token package returned only third-party aggregator pages (ignored per brief) and nothing on dyson.com or GitHub/npm
(see `SOURCES.json` → `_research`). What follows is the de-facto system readable from the site's own shipped CSS:
[`clientlib-homepage.min.css`](https://www.dyson.com/etc.clientlibs/dyson/clientlibs/clientlib-homepage.min.6c03ba032ce6dd949b4ff807740519db.css)
and the product-page clientlibs served from `https://www.dyson.com/etc.clientlibs/dyson/clientlibs/`.

- **Token architecture**: there are no Dyson CSS custom properties; the 234 `:root` variables on the page belong to
  third-party widgets (`--yxt-*` from the Yext search bar, `--esw*` from the Salesforce chat). Values are hard-coded
  in component classes. The tiers are therefore class-level: typography classes (`.typography-heading1` …
  `.typography-heading6`, `.typography-body`, `.typography-body--small`, `.typography-body--fine`), element
  defaults (`h1`–`h6`, `p`, `small`), and BEM component classes (`.button`, `.button--transactional`,
  `.button--linking`, `.button--linking-alt`, `.button--interactive`, `.forms-text`, `.forms-label`,
  `.sitewide-banner__heading`, `.add-to-basket-notification__price-now`, `.sticky-nav__button`).
- **Theming**: no dark mode or density mode was found. Contextual themes are applied by modifier classes in rich
  content blocks, e.g. `.rich-content__button.theme-lg--black.theme-xl--black.green` — i.e. per-breakpoint theme
  classes (`theme-lg--*`, `theme-xl--*`) rather than CSS variables.
- **Type & spacing**: rem-based headings on a 16px root — 2rem, 1.75rem, 1.5rem, 1.375rem, 1.25rem, 1rem — with
  line heights 2.5/2.25/2/1.75/1.75/1.5rem; weights step 300 → 400 → 500 down the scale. Breakpoints are
  `375px`, `768px`, `1025px`, `1440px` (plus `max-width: 374px`), with fixed container widths per step.
- **Component model**: buttons have intent variants (transactional, linking, linking-alt, interactive, profile),
  states (`:hover` ripple via `@keyframes hover-in-*`, `:active` via `@keyframes clicked-on-*`, `[disabled]`,
  `:focus`), and a `.button-no-active-state` opt-out. Forms have `--valid` and `--error` states.
- **Accessibility**: Dyson's [Website Accessibility Statement](https://www.dyson.com/inside-dyson/terms/website-accessibility-statement)
  says Dyson "aims to comply with … Web Content Accessibility Guidelines 2.0 up to Level AA (WCAG 2.0 AA)" and
  offers phone/email assistance. The page starts with "Skip navigation" and "Accessibility Statement" links;
  `.button:focus` draws a 2px black outline offset 3px.
- **Delivery**: Adobe Experience Manager client libraries (`/etc.clientlibs/dyson/clientlibs/…`), Scene7 dynamic
  media for imagery, slick-carousel 1.9.0 from cdnjs for carousels. No npm package, Figma kit or versioned design
  system was found.

## Do's and Don'ts

### Do
- Set every heading in DysonFutura weight 300 and let size do the work.
- Use `#555555` for running text and `#333333` for headings and names.
- Keep the chrome black/white; let full-bleed photography supply colour.
- Use the green `#79b928` button with a **black** label for buying actions only.
- Make buy buttons tall (66px at desktop, minimum 56px) and full-width in narrow columns.
- Use the circular ripple hover with the darker state colour (`#65a01b`, `#c9c9c9`, `#000000`, `#ab2975`).
- Separate content with `#ebebeb` hairlines and `#fbfbfb` stages, not shadows.
- Keep radii at 0px, 4px or 8px.

### Don't
- Don't bold headings (no 600/700 on the Latin site).
- Don't put white text on the green button.
- Don't introduce pills or large radii on buttons.
- Don't add drop shadows to cards.
- Don't use letter-spacing; DysonFutura runs at `normal`.
- Don't use blue as a button colour — `#0066cc` is an inline-link colour only.
- Don't mix in a second sans for UI; FoundryGridnik is for spec numerals only.

## Responsive Behavior

- **Breakpoints** (from CSS): ≤374px, 375–767px, 768–1024px, 1025–1439px, ≥1440px.
- **Header**: 179px → 112px; at 390px the header text content is reduced to the country selector, a search
  control ("Conduct a search") and the basket, and header text drops to 14px/22px.
- **Hero**: headline 32px → 24px (line height 40px → 32px); eyebrow 18px → 16px; the grey button spans the full
  content width (337px at 390px viewport, 56px tall, 16px padding, 4px radius).
- **Category page**: title 44px → 32px, section titles 36px → 28px (36px line height).
- **Body**: 14px with 20px line height on mobile.
- **Grids**: mobile grid behaviour was not captured; reproduce the desktop rows only where a measurement exists.

## Iteration Guide

1. Start with `{colors.canvas}` white and a `{colors.black}` header; nothing else coloured until there is a photo.
2. Load DysonFutura (or Jost\* as a stand-in) at 300/400/500 only.
3. Build headings from the rem scale: 32/28/24/22/20/16px with their line heights.
4. Body: 14px/20px `#555555`; names and headings `#333333`.
5. Buttons: pick by intent — transactional green, linking grey, interactive charcoal — then add the ripple hover.
6. Cards: white + `1px solid #ebebeb`, 4px (benefit) or 8px (support) radius.
7. Forms: 56px, `1px solid #919191`, 0 radius, focus `2px solid #333333`, error `#da2f47`.
8. Check the page at 375, 768, 1025 and 1440px against the container widths.
9. Compare against a live capture: if anything looks bolder, rounder or more colourful than Dyson, remove it.
