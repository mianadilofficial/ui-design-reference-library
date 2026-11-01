---
version: alpha
name: Bang & Olufsen
category: "Consumer Electronics"
description: "Bang & Olufsen's US storefront is a gallery-quiet system set in one self-hosted custom face, BeoSupreme (with Lexend Deca as the declared fallback), at weight 400 for every headline and 500 only for buttons: 24px/36px hero titles, 48px/64px page titles with -0.5px tracking, 16px/26px body with 0.2px tracking and 12px/20px product labels. Warm near-black #191817 ink and buttons on a #ffffff canvas, cream #fcfaee button text, #fafafa square product tiles, 40px-radius 44px-tall pill buttons, and a full-bleed ultramarine #060daa footer."

colors:
  primary: "#191817"
  on-primary: "#fcfaee"
  canvas: "#ffffff"
  ink: "#191817"
  ink-muted: "#555555"
  icon: "#000000"
  surface: "#fafafa"
  cream: "#fcfaee"
  ultramarine: "#060daa"
  on-dark: "#ffffff"
  stone: "#aca69f"
  hairline: "#e5e5e5"
  focus: "#3082fd"
  focus-halo: "#bfdefb"

typography:
  display-xl:
    fontFamily: "BeoSupreme, \"Lexend Deca\", Arial, Helvetica, sans-serif"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 72px
    letterSpacing: -0.5px
  display:
    fontFamily: "BeoSupreme, \"Lexend Deca\", Arial, Helvetica, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: -0.5px
  section-title:
    fontFamily: "BeoSupreme, \"Lexend Deca\", Arial, Helvetica, sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 54px
    letterSpacing: -0.5px
  hero-title:
    fontFamily: "BeoSupreme, \"Lexend Deca\", Arial, Helvetica, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
  hero-title-mobile:
    fontFamily: "BeoSupreme, \"Lexend Deca\", Arial, Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  newsletter-title:
    fontFamily: "BeoSupreme, \"Lexend Deca\", Arial, Helvetica, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: 1px
  body-lg:
    fontFamily: "BeoSupreme, \"Lexend Deca\", Arial, Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: 0.2px
  body:
    fontFamily: "BeoSupreme, \"Lexend Deca\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: 0.2px
  newsletter-intro:
    fontFamily: "BeoSupreme, \"Lexend Deca\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 35px
    letterSpacing: 0.4px
  input:
    fontFamily: "BeoSupreme, \"Lexend Deca\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
    letterSpacing: 0.2px
  eyebrow:
    fontFamily: "BeoSupreme, \"Lexend Deca\", Arial, Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 1.7px
  eyebrow-wide:
    fontFamily: "BeoSupreme, \"Lexend Deca\", Arial, Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 2px
  body-sm:
    fontFamily: "BeoSupreme, \"Lexend Deca\", Arial, Helvetica, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.1px
  legal:
    fontFamily: "BeoSupreme, \"Lexend Deca\", Arial, Helvetica, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 0.4px
  badge:
    fontFamily: "BeoSupreme, \"Lexend Deca\", Arial, Helvetica, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
  micro-label:
    fontFamily: "BeoSupreme, \"Lexend Deca\", Arial, Helvetica, sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 2px
  button:
    fontFamily: "BeoSupreme, \"Lexend Deca\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.1px
  button-compact:
    fontFamily: "BeoSupreme, \"Lexend Deca\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: 0.1px
  button-sm:
    fontFamily: "BeoSupreme, \"Lexend Deca\", Arial, Helvetica, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 18px
    letterSpacing: 0.1px

rounded:
  none: 0px
  badge: 2px
  button-sm: 24px
  button: 40px
  circle: 9999px

spacing:
  xxs: 4px
  xs: 8px
  sm: 16px
  md: 20px
  lg: 24px
  xl: 32px
  xxl: 40px
  section-gap: 56px
  section: 64px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 8px 32px
    height: 44px
    border: 2px solid transparent
  button-primary-hover:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    border: "2px solid {colors.primary}"
  button-primary-disabled:
    backgroundColor: "{colors.stone}"
    textColor: "{colors.ink-muted}"
  button-primary-focused:
    rounded: "{rounded.button-sm}"
    boxShadow: "0px 0px 0px 1px {colors.focus}, 0px 0px 0px 3px {colors.focus-halo}"
  button-secondary:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    typography: "{typography.button-compact}"
    rounded: "{rounded.button}"
    padding: 8px 32px
    height: 40px
    border: "2px solid {colors.primary}"
  button-secondary-disabled:
    textColor: "{colors.stone}"
    border: "2px solid {colors.stone}"
  button-on-dark:
    backgroundColor: transparent
    textColor: "{colors.on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 8px 32px
    height: 44px
    border: "2px solid {colors.on-dark}"
  button-on-dark-hover:
    backgroundColor: "{colors.on-dark}"
    textColor: "{colors.primary}"
    border: 2px solid transparent
  button-white:
    backgroundColor: "{colors.on-dark}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 8px 32px
    height: 44px
  button-small:
    typography: "{typography.button-sm}"
    rounded: "{rounded.button-sm}"
    padding: 8px 20px
  product-tile:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.body-sm}"
    rounded: "{rounded.none}"
    width: 268px
    height: 390px
  badge-new:
    textColor: "{colors.ultramarine}"
    typography: "{typography.badge}"
    rounded: "{rounded.badge}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 1px 2px 1px 0px
    height: 38px
    border: "0 0 1px solid {colors.ink}"
  link-category:
    textColor: "{colors.ink-muted}"
    typography: "{typography.eyebrow-wide}"
    textTransform: uppercase
  carousel-arrow:
    backgroundColor: transparent
    textColor: "{colors.icon}"
    rounded: "{rounded.circle}"
    width: 60px
    height: 60px
  footer:
    backgroundColor: "{colors.ultramarine}"
    textColor: "{colors.cream}"
    typography: "{typography.body-sm}"
    rounded: "{rounded.none}"
    padding: 24px
  footer-heading:
    textColor: "{colors.on-dark}"
    typography: "{typography.body}"
  footer-link:
    textColor: "{colors.cream}"
    typography: "{typography.body-sm}"
    padding: 4px 0px
---

## Overview

Bang & Olufsen's storefront (bang-olufsen.com/en/us) behaves like a showroom with the lights dimmed. The first
728px of the homepage is a single full-bleed hero: a dark `{colors.primary}` (`#191817`) block that carries an
autoplaying product film, with the wordmark "BANG & OLUFSEN / Est. 1925" centred in the header, "Menu" and
"Search" at top-left, and three line icons (account, store locator, basket) at top-right. Over the film sits a
deliberately small headline — "A familiar form. A fresh perspective." at 24px/36px, weight 400, in cream
`{colors.cream}` (`#fcfaee`) — one 16px/26px line of supporting copy, and a single outlined pill button.

Below the hero the page flips to a bright white `{colors.canvas}` (`#ffffff`) gallery. A 16px "Explore our
bestsellers" label introduces a horizontal carousel of product tiles: square-cornered `{colors.surface}`
(`#fafafa`) panels 268px wide and 390px tall, each holding a cut-out product photograph floating in generous
empty space, and under it a 12px/20px name and price in `{colors.ink}`. Large editorial blocks follow — "Art of
the A9 Sydney Edition", "For every place you go", "Gallery worthy design" — alternating full-bleed photography
with left-aligned text columns about 430–460px wide. The page closes on a newsletter block and a full-bleed
ultramarine `{colors.ultramarine}` (`#060daa`) footer, the only saturated colour field on the page.

The system is built from very few parts. One typeface (BeoSupreme), one ink (`#191817`, a warm near-black rather
than pure black), one action shape (a 40px-radius pill), one tile colour (`#fafafa`) and one accent field
(`#060daa`). Hierarchy comes from size and space, never from weight: every heading on the measured pages is
weight 400; weight 500 is reserved for buttons and the "New" badge.

**Key Characteristics:**
- Single proprietary face, BeoSupreme, served from `/static-assets/fonts/beosupreme/` at 300/400/500; the
  declared fallback stack is `"Lexend Deca", Arial, Helvetica, sans-serif`.
- Headlines at weight 400 with -0.5px tracking from 36px up; body copy loosened to +0.2px; uppercase eyebrows
  tracked +1.7px to +2px.
- Warm near-black `#191817` used for both text and filled buttons; button labels in cream `#fcfaee`, not white.
- Pill buttons: 40px radius, `8px 32px` padding, 2px border, 44px tall.
- Square (0px) `#fafafa` product tiles; product photography is cut out and isolated on the tile.
- Ultramarine `#060daa` footer — the brand's one full-bleed chromatic moment.
- Focus ring is a two-layer blue box-shadow (`#3082fd` 1px + `#bfdefb` 3px), not an outline.

## Colors

> **Source pages:** homepage (`/en/us`), Beosound A9 PDP (`/en/us/speakers/beosound-a9`), speakers category
> (`/en/us/speakers`). Hex values below are the computed values from the extractions; rule-only values (focus,
> disabled) come from the inline CSS shipped in the homepage HTML.

### Brand & Accent
- **Ink Black** (`{colors.primary}` — `#191817`): The action colour. Filled primary buttons ("Subscribe", "Add to
  basket"), outlined button borders on light surfaces, the hero block behind the film, and the most-read text
  colour on the page. Note the warm cast — it is not `#000000`.
- **Ultramarine** (`{colors.ultramarine}` — `#060daa`): Full-bleed footer background (`.o-footer{background:#060DAA}`)
  and the text colour of the 12px "New" badge on product tiles. Used nowhere else.
- **Cream** (`{colors.cream}` / `{colors.on-primary}` — `#fcfaee`): Label colour on filled black buttons, hero
  headline colour over the film, footer link colour. It also appears as a band background on the category page.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): Page background for every section below the hero; also the
  newsletter input fill.
- **Surface** (`{colors.surface}` — `#fafafa`): Product tile background — the only "card" colour.
- **On Dark** (`{colors.on-dark}` — `#ffffff`): Text and 2px border of the outlined hero button, footer column
  headings, and the fill of the white "Shop" button on the PDP hero.

### Text
- **Ink** (`{colors.ink}` — `#191817`): Headings, body copy, product names and prices.
- **Ink Muted** (`{colors.ink-muted}` — `#555555`): Secondary copy — category intro paragraph, newsletter intro,
  legal consent text, uppercase category links such as "ALL SPEAKERS", and the 10px `.h6` micro label.
- **Icon** (`{colors.icon}` — `#000000`): Computed colour of header icon buttons and carousel arrows.

### State
- **Stone** (`{colors.stone}` — `#aca69f`): Disabled primary button fill (`.-primary.disabled`), disabled
  secondary border/text, and a border colour on the PDP.
- **Hairline** (`{colors.hairline}` — `#e5e5e5`): Disabled checkout button fill and light borders on the PDP.
- **Focus** (`{colors.focus}` — `#3082fd`) and **Focus Halo** (`{colors.focus-halo}` — `#bfdefb`): the 1px + 3px
  box-shadow ring drawn on focused buttons.

The site publishes no success/error palette that the measured pages show, so none is declared here.

## Typography

### Font Family
Every element on the measured pages computes to `BeoSupreme, "Lexend Deca", Arial, Helvetica, sans-serif`.
BeoSupreme is self-hosted in three weights (300, 400, 500); only 400 and 500 were loaded on the homepage. A
second custom family, BeoLogue (300/400/500), is declared and loaded at 500 but carries only a handful of
characters on the page.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|
| `{typography.display-xl}` | 64px | 400 | 72px | -0.5px | `.h1` at ≥ 64rem (CSS) |
| `{typography.display}` | 48px | 400 | 64px | -0.5px | PDP / category page title ("Speakers") |
| `{typography.section-title}` | 36px | 400 | 54px | -0.5px | Homepage editorial headings ("Gallery worthy design") |
| `{typography.hero-title}` | 24px | 400 | 36px | — | Hero headline, A9 story heading, category h1 |
| `{typography.hero-title-mobile}` | 18px | 400 | 28px | — | Hero headline at 390px |
| `{typography.newsletter-title}` | 24px | 400 | 30px | 1px | "Join our global community" |
| `{typography.body-lg}` | 18px | 400 | 28px | 0.2px | `.b2` lead copy (CSS) |
| `{typography.body}` | 16px | 400 | 26px | 0.2px | Paragraphs, hero subline, carousel heading |
| `{typography.newsletter-intro}` | 16px | 400 | 35px | 0.4px | Newsletter intro line |
| `{typography.input}` | 16px | 400 | 18.4px | 0.2px | Email field |
| `{typography.eyebrow}` | 14px | 400 | 24px | 1.7px | PDP product eyebrow ("BEOSOUND A9"), uppercase |
| `{typography.eyebrow-wide}` | 14px | 400 | 20px | 2px | "THE HOUSE OF BANG & OLUFSEN", uppercase |
| `{typography.body-sm}` | 12px | 400 | 20px | 0.1px | Product name + price, footer links, PDP copy |
| `{typography.legal}` | 12px | 400 | 16px | 0.4px | Newsletter consent text |
| `{typography.badge}` | 12px | 500 | 16px | — | "New" badge |
| `{typography.micro-label}` | 10px | 400 | 18px | 2px | `.h6` micro label (CSS) |
| `{typography.button}` | 16px | 500 | 24px | 0.1px | Pill buttons |
| `{typography.button-compact}` | 16px | 500 | 20px | 0.1px | Outlined "Read the story" |
| `{typography.button-sm}` | 12px | 500 | 18px | 0.1px | `.-small` buttons (CSS) |

### Principles
- **Weight never carries hierarchy.** Headings from 14px to 64px are all 400. Use size, line height and space.
- **Tracking follows size.** Negative (-0.5px) at 36px and above; positive 0.1–0.4px at 12–16px; wide 1.7–2px on
  uppercase eyebrows. Hero headlines at 24px use normal tracking.
- **Generous line height.** Body runs at 26px on 16px (1.625); display at 64px on 48px.
- **Small headline, big picture.** The homepage hero headline is only 24px — the film does the shouting.

### Responsive type scale (from the shipped CSS)
The site's own heading classes step at `min-width:48rem` and `min-width:64rem`:
- `.h1` 40px/48px → 48px/56px → 64px/72px
- `.h2` 32px/42px → 36px/48px → 48px/64px
- `.h3` 24px/32px → 26px/40px → 36px/54px
- `.h4` 18px/28px → 22px/32px → 24px/36px
- `.h5` 12px/20px (1.5px) → 12px/20px (1.7px) → 14px/24px
- `.b2` 18px/28px → 20px/32px → 24px/36px; `.b1` 16px/26px and `.b3` 12px/20px stay fixed.

Only the desktop endpoints that appear on measured pages (and the cited 64px/18px values) are tokens above.

### Note on Font Substitutes
BeoSupreme is proprietary to Bang & Olufsen; no public foundry listing or licence was found (see SOURCES.json).
The brand's own CSS names **Lexend Deca** (Google Fonts, OFL) as the first fallback, and ships an `@font-face`
for it, so Lexend Deca is the substitute the site itself chooses. Keep weight 400 for headings and 500 for
buttons, and keep the tracking values above — Lexend Deca is wider than BeoSupreme, so check line breaks in
48px titles.

## Layout

### Spacing System
- **Measured steps:** `{spacing.xxs}` 4px · `{spacing.xs}` 8px · `{spacing.sm}` 16px · `{spacing.md}` 20px ·
  `{spacing.lg}` 24px · `{spacing.xl}` 32px · `{spacing.xxl}` 40px · `{spacing.section-gap}` 56px ·
  `{spacing.section}` 64px.
- Button padding is always `8px 32px` (`8px 20px` for `.-small`).
- Footer padding is `24px` (CSS steps it to 16px on small screens).
- Product tiles sit 8px apart in the carousel; tile imagery is inset with 63.5px/32px padding.

### Grid & Container
- Container max-width in the CSS is 1512px (with 1700px and 1920px caps for wider modules).
- Homepage editorial modules are two-column "fifty-fifty" text-and-image blocks
  (`m-textAndImage.-fiftyFifty`) with a text column about 430–460px wide.
- The bestseller carousel shows full-width rows of 268px tiles with 60px circular arrow buttons.

### Whitespace Philosophy
Sections are separated by large blank fields rather than rules or colour changes: the bestseller rail starts
about 120px below the hero, and editorial blocks are hundreds of pixels apart. The only hard colour boundaries
are the dark hero and the ultramarine footer.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat, no shadow | Everything — tiles, buttons, sections |
| Focus | `0 0 0 1px #3082fd, 0 0 0 3px #bfdefb` | Keyboard focus on buttons |

No box-shadows were measured on any brand element. Depth comes from photography: products are cut out and
lit like museum objects on `#fafafa`, and full-bleed lifestyle images provide the atmosphere.

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | Product tiles, input, sections, footer |
| `{rounded.badge}` | 2px | "New" badge |
| `{rounded.button-sm}` | 24px | `.-small` buttons and focused buttons |
| `{rounded.button}` | 40px | Every standard pill button |
| `{rounded.circle}` | 9999px | Carousel arrows (50%), hero play/pause button |

No clip-paths, skews or notched shapes were measured. The contrast between square tiles and fully round
buttons is the shape signature.

## Components

### Buttons
**`button-primary`** — "Subscribe", "Add to basket". `{colors.primary}` fill, `{colors.on-primary}` label,
`{typography.button}` (16px/500/24px/0.1px), `{rounded.button}` 40px, padding `8px 32px`, 44px tall, 2px
transparent border.
- **Hover / active** (`.-primary:hover`): inverts to transparent fill, `{colors.primary}` label and 2px
  `{colors.primary}` border; transition `all 400ms cubic-bezier(.165,.84,.44,1)`.
- **Disabled** (`.-primary.disabled`): `{colors.stone}` fill, `{colors.ink-muted}` label.
- **Focused**: 24px radius plus the two-layer blue ring.

**`button-secondary`** — "Read the story", "Experience in store". Transparent fill, 2px `{colors.primary}` border,
`{colors.primary}` label, 40px radius, `8px 32px`. "Read the story" measures 40px tall with a 20px line height;
"Experience in store" on the PDP measures 44px.
- **Disabled**: `{colors.stone}` label and border.

**`button-on-dark`** — the hero CTA ("Beosound A9 Sienna Brown"). Transparent, 2px `{colors.on-dark}` border and
label, 44px tall. **Hover** (`.-secondary.-white:hover`): white fill, `{colors.primary}` label.

**`button-white`** — "Shop" on the PDP hero: `{colors.on-dark}` fill, `{colors.primary}` label, same pill metrics.

**`button-small`** — `.-small`: 12px/18px, `8px 20px`, 24px radius, min-width 56px.

### Product Tile
**`product-tile`** — 268×390px, `{colors.surface}` fill, 0px radius, no border or shadow. A cut-out product
image occupies the top 318px; under it a "New" badge (`badge-new`: 12px/500 `{colors.ultramarine}`, 2px radius),
then name and price in `{typography.body-sm}` `{colors.ink}`. The whole tile is the link.

### Inputs
**`text-input`** — newsletter email field: white fill, `{colors.ink}` text in `{typography.input}`, no box, only a
1px `{colors.ink}` bottom border, 38px tall, 0px radius. The consent checkbox and legal copy below it use
`{typography.legal}` in `{colors.ink-muted}`.

### Navigation
The header overlays the hero: "Menu" (hamburger + label) and "Search" at left, the "BANG & OLUFSEN / Est. 1925"
wordmark centred, account / store / basket icons in 32×32 hit areas at right. Category pages use an uppercase
sub-navigation (`link-category`: 14px/24px/2px, `{colors.ink-muted}`).

### Carousel controls
`carousel-arrow` — 60×60px circular buttons with `{colors.icon}` arrows; the inactive arrow computes to a
translucent ink. A 45px circular play/pause control sits bottom-right of the hero film.

### Footer
**`footer`** — full-bleed `{colors.ultramarine}` with 24px padding. Column headings ("Customer Care") are
`{typography.body}` in `{colors.on-dark}`; links ("Exclusive services", "Change Cookie Settings") are
`{typography.body-sm}` in `{colors.cream}` with `4px 0px` padding.

## Design System Architecture

**Bang & Olufsen publishes no public design system.** Searches for a design-system site, token package, brand
guideline pages and typeface documentation found none (queries listed in SOURCES.json). A Frontify article
(https://www.frontify.com/en/blog/rebrand-from-functional-experiential) says B&O's brand assets live on Frontify
and names Snask and Reed Words for the identity and tone of voice, but no portal is public and it gives no
values. Everything below is the de-facto system observable in the HTML shipped at
https://www.bang-olufsen.com/en/us.

### Token architecture
- There is no exposed token layer. Values are hard-coded hex in component CSS (`#191817`, `#FCFAEE`, `#060DAA`,
  `#ACA69F`, `#E5E5E5`, `#555555`), repeated across components — `#191817` appears 151 times in the homepage HTML.
- The `:root` custom properties on the page (`--gle-black`, `--gle-font-family`, `--main-color: #2C622C`,
  `--decline-color`) belong to the Cookie Information consent widget, not to B&O's own styles.
- The closest thing to semantic tokens is the set of typographic classes: `h1`–`h7` and `b1`–`b3`
  (e.g. `.b1{font-size:1rem;line-height:1.625rem;letter-spacing:0.2px}`).

### Theming
- One light theme. Dark appears only as component variants: modifiers `-white` and `-black` on
  `.a-anchorButton` swap fill/label for use over film or photography.
- No dark mode, density mode or high-contrast mode is declared in the shipped CSS.

### Type & spacing systems
- Type is in rem with three steps: base, `min-width:48rem`, `min-width:64rem` (scale listed under Typography).
- Breakpoints used in the CSS: 23.375rem, 30rem, 48rem (with 47.9375rem max), 64rem (63.9375rem max), 90rem,
  100rem, 120rem.
- Spacing values are literal px (8, 16, 20, 24, 32, 40, 56, 64); no named spacing scale is exposed.

### Component model
- Styles ship as styled-components (generated `sc-` class hashes and `/*!sc*/` markers) inside a Next.js page
  (`__NEXT_DATA__` present).
- Class names carry `a-`, `m-` and `o-` prefixes — e.g. `a-anchorButton`, `a-headerLogo`, `a-svgIcon`,
  `m-product`, `m-textAndImage`, `m-footer`, `o-header`, `o-hero`, `o-footer` — with BEM-style elements
  (`o-footer__vertical`, `m-textAndImage__wrapper`) and hyphen-prefixed modifiers (`-primary`, `-secondary`,
  `-small`, `-large`, `-underlined`, `-fiftyFifty`, `-immersive`).
- Button inventory from the CSS: `-primary`, `-secondary`, `-track`, `-underlined`, `-text-icon-explore`,
  `-addToCart`, `-addToCartDark`, `-checkout`, `-compare`, `-addGiftWrap`, `-play`, `-pause`, `-close`; sizes
  `-small`, `-medium`, `-large` (min-width 289px); states hover/active/focus/disabled.

### Accessibility
- Focus is shown with `box-shadow: 0 0 0 1px #3082fd, 0 0 0 3px #bfdefb` and suppressed for pointer users via
  the `.focus-visible` polyfill pattern (`:focus:not(.focus-visible){box-shadow:none}`).
- `visually-hidden` utility classes are used for screen-reader text.
- No published contrast or touch-target rule was found; measured buttons are 40–44px tall and icon buttons 32px.

### Delivery
No npm package, Figma kit, or versioned library is public. Fonts are self-hosted as woff2/woff/ttf/otf under
`/static-assets/fonts/`.

## Do's and Don'ts

### Do
- Set everything in BeoSupreme (or Lexend Deca as the site's own fallback) at weight 400; use 500 only on buttons
  and badges.
- Use `#191817` for ink and filled buttons, with `#fcfaee` labels.
- Keep buttons as 40px-radius pills with `8px 32px` padding and a 2px border; invert to outline on hover.
- Put products on square `#fafafa` tiles with lots of empty space around a cut-out image.
- Track display type -0.5px and uppercase eyebrows +1.7–2px.
- Reserve `#060daa` for the footer and the "New" badge.
- Let photography and film carry the emotion; keep the headline small.

### Don't
- Don't use bold headings — no heading on the measured pages is heavier than 400.
- Don't use pure `#000000` for text or buttons; the brand black is warm `#191817`.
- Don't round product tiles or add shadows to them.
- Don't introduce extra accent colours or gradients; the palette is ink, white, `#fafafa`, cream and ultramarine.
- Don't use the consent-banner styles (`#f6f6f6` 3px buttons, `#2C622C` toggles) as brand components.
- Don't replace the blue focus ring with a plain outline.

## Responsive Behavior

### Breakpoints
| Name | Width | Key changes |
|---|---|---|
| Small | < 30rem (480px) | single column; 23.375rem–30rem band for narrow phones |
| Mobile | < 48rem (768px) | footer padding 16px; base heading sizes |
| Tablet | 48rem–63.9375rem | first heading step (`.h1` 48px, `.h2` 36px) |
| Desktop | ≥ 64rem (1024px) | full scale (`.h1` 64px, `.h2` 48px, `.h3` 36px) |
| Wide | ≥ 90rem / 100rem / 120rem | wider modules; containers capped at 1512–1920px |

### Measured at 390px
- Hero headline drops from 24px/36px to `{typography.hero-title-mobile}` 18px/28px.
- Carousel heading stays 16px/26px/0.2px; consent copy stays 12px/16px/0.4px.
- The "Subscribe" button keeps 16px/500, `8px 32px`, 44px height and 40px radius, stretching to the column
  width (326px).

### Touch targets
Primary and outlined pills are 44px tall; header icon buttons are 32×32px; carousel arrows 60×60px.

## Iteration Guide

1. Start every page with a full-bleed dark (`#191817`) or photographic hero and a small 24px cream headline.
2. Follow with white `#ffffff` sections; never tint the page background.
3. Products always go on `#fafafa` square tiles (268×390px in the carousel), name and price at 12px/20px/0.1px.
4. One filled `#191817` pill per block at most; secondary actions are outlined pills.
5. Editorial headings: 36px/54px/-0.5px on desktop, weight 400; page titles 48px/64px/-0.5px.
6. Body copy: 16px/26px/0.2px in `#191817`, secondary in `#555555`.
7. End with the `#060daa` footer, cream links at 12px/20px.
8. Check focus states: two-layer blue ring, 24px radius on buttons.
9. When BeoSupreme is unavailable, use Lexend Deca and keep all sizes, weights and tracking unchanged.
10. Verify nothing added a shadow, a bold weight, or a new colour.
