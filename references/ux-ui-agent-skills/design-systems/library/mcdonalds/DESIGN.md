---
version: alpha
name: McDonald's
category: "Food & Beverage"
description: "McDonald's US site: a plain #ffffff canvas with #292929 Speedee text, a single golden #ffbc0d 48px-radius pill CTA with a 1px #c08b00 border (hover #ffcc49), white outline pills bordered #7c7c7c, #006bae underlined links, a #292929 utility bar, 12px-radius promo images and teaser cards with a hairline #cecece border, all set in the proprietary Speedee typeface (400/700, -0.15px tracking)."

colors:
  primary: "#ffbc0d"
  primary-hover: "#ffcc49"
  primary-border: "#c08b00"
  on-primary: "#292929"
  canvas: "#ffffff"
  ink: "#292929"
  ink-black: "#000000"
  surface-dark: "#292929"
  on-dark: "#ffffff"
  on-dark-hover: "#eaeaea"
  surface-soft: "#f9f9f9"
  secondary-hover: "#f4f4f4"
  outline-border: "#7c7c7c"
  nav-hover: "#606060"
  divider: "#d6d6d6"
  card-border: "#cecece"
  tile-border: "#adadad"
  link: "#006bae"
  accent-red: "#d90007"
  flag: "#b84d00"
  card-shadow: "#00000014"

typography:
  display-h1:
    fontFamily: "Speedee, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif"
    fontSize: 54px
    fontWeight: 700
    lineHeight: 56px
    letterSpacing: -0.15px
  display-h1-mobile:
    fontFamily: "Speedee, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: -0.14px
  h2-lg:
    fontFamily: "Speedee, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 46px
    letterSpacing: -0.15px
  h2:
    fontFamily: "Speedee, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: -0.15px
  h2-mobile:
    fontFamily: "Speedee, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 32px
    letterSpacing: -0.15px
  menu-item:
    fontFamily: "Speedee, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    letterSpacing: -0.19px
  body:
    fontFamily: "Speedee, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: -0.15px
  button:
    fontFamily: "Speedee, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
    letterSpacing: -0.15px
  nav-link:
    fontFamily: "Speedee, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
    letterSpacing: -0.15px
  nav-utility:
    fontFamily: "Speedee, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: -0.15px
  footer-heading:
    fontFamily: "Speedee, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
  footer-link:
    fontFamily: "Speedee, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  flag:
    fontFamily: "Speedee, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 700
  legal:
    fontFamily: "Speedee, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif"
    fontSize: 11px
    fontWeight: 300
    lineHeight: 15.95px
    letterSpacing: -0.15px
  legal-menu:
    fontFamily: "Speedee, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: -0.15px

rounded:
  none: 0px
  tile: 4px
  card: 12px
  pill: 48px

spacing:
  xxs: 4px
  xs: 8px
  sm: 12px
  md: 16px
  lg: 24px
  xl: 32px
  section: 100px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    border: "1px solid #c08b00"
    padding: 8px 16px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    border: "1px solid #7c7c7c"
    padding: 11px 16px
    height: 48px
  button-secondary-hover:
    backgroundColor: "{colors.secondary-hover}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  utility-bar:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-dark}"
    typography: "{typography.nav-utility}"
  utility-bar-link-hover:
    textColor: "{colors.on-dark-hover}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    height: 88px
    borderBottom: "1px solid #d6d6d6"
  nav-utility-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav-utility}"
  nav-utility-link-hover:
    textColor: "{colors.nav-hover}"
  teaser-card:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.card}"
    border: "1px solid #cecece"
    shadow: "rgba(0, 0, 0, 0.08) 0px 1.5px 1.5px 0px"
  promo-image:
    rounded: "{rounded.card}"
  category-tile:
    rounded: "{rounded.tile}"
    border: "1px solid #adadad"
    shadow: "rgba(41, 41, 41, 0.08) 0px 1.5px 1.5px 0px"
  category-active:
    borderLeft: "5px solid #d90007"
  product-card:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.tile}"
    border: "1px solid #cecece"
    shadow: "rgba(0, 0, 0, 0.08) 0px 1.5px 1.5px 0px"
  menu-flag:
    textColor: "{colors.flag}"
    typography: "{typography.flag}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.footer-link}"
  legal-text:
    textColor: "{colors.ink}"
    typography: "{typography.legal}"
---

# McDonald's — DESIGN.md

## Overview

mcdonalds.com (US, `/us/en-us.html`) is a utilitarian retail surface wrapped around
very loud food and campaign photography. The chrome itself is almost colourless: a
white `#ffffff` canvas, near-black `#292929` text everywhere, and exactly one
saturated UI colour — the McDonald's gold `#ffbc0d` — which appears on a single
element above the fold: the **Order Now** pill at the right end of the nav.

Everything expressive is carried by imagery. In the capture the hero is a full-bleed
campaign photograph (the Monopoly "Get Your Bag" promotion) with its own 3D
lettering baked into the image; the HTML page itself has no visible `h1` on the
homepage (the extractor found none). Below the hero the page drops straight into a
quiet editorial rhythm: a bold 36px headline, two paragraphs of 16px copy with
inline bold phrases and underlined `#006bae` links, a white outline pill, then a
block of 11px light (weight 300) legal copy. Promos then alternate as a 12px-radius
image on the left (about 59% of the width) and a text column on the right.

The voice is chatty and first-person ("…and don't say I didn't warn you. – Mr.
Monopoly", "Make any day fry day."). Buttons are short imperatives: "Order Now",
"Start Your Order", "Start Sipping", "Get a Free Medium Fries in the App".

Key characteristics:
- One typeface, **Speedee**, at weights 400 and 700 (plus 300 for legal copy), with
  a constant `-0.15px` letter-spacing on nearly every size.
- One accent: gold `#ffbc0d` with a darker gold hairline `#c08b00` border.
- Pills (48px radius) for every button; 12px for imagery and teaser cards; 4px for
  product and category tiles. Nothing else is rounded.
- Almost no shadow: a single 1.5px, 8%-alpha drop under cards.
- Dense legal disclaimers are a first-class, highly visible part of the layout.
- A dark `#292929` utility strip sits above a white 88px nav row.

## Colors

All values are measured computed styles from mcdonalds.com (homepage, full menu,
Big Mac product page). The site exposes no CSS custom properties (`rootVars` is
empty), so the token names below are descriptive, not the brand's own.

### Brand & Accent
- **Primary / Gold** `#ffbc0d` — the Order Now pill background. The only filled
  button colour on the site.
- **Primary hover** `#ffcc49` — measured background of Order Now on hover.
- **Primary border** `#c08b00` — 1px border around the gold pill, giving it a
  slightly embossed edge against white.
- **On primary** `#292929` — the gold pill's label is dark, never white.
- **Accent red** `#d90007` — appears as the 5px left border of the active category
  in the full-menu sidebar. Red is otherwise carried only by photography (fry
  cartons, the "FREE" disc inside the fries image), not by UI.
- **Flag** `#b84d00` — burnt-orange 14px/700 text for menu flags such as "New",
  "Limited Time Only", "Now Crispier McCrispy® Strip".

### Surface
- **Canvas** `#ffffff` — page background; covers the overwhelming majority of the
  capture outside images.
- **Surface soft** `#f9f9f9` — light grey band on the product page and the header
  embed band.
- **Surface dark** `#292929` — the utility bar ("Language", "Sign Up for Email",
  "Careers") across the very top.
- **Secondary hover** `#f4f4f4` — background of the white outline pill on hover.

### Text
- **Ink** `#292929` — body copy, headlines, nav, footer, button labels. It is by
  far the most-read colour (7,565 weighted chars on the homepage).
- **Ink black** `#000000` — language-picker items.
- **Link** `#006bae` — inline links ("Register to play today", "Strawberry
  Watermelon Refresher"), underlined in the capture.
- **On dark** `#ffffff` — utility bar text; **on dark hover** `#eaeaea`.
- **Nav hover** `#606060` — Search / Change your Location text on hover.

### Lines
- **Outline border** `#7c7c7c` — 1px border of secondary pills.
- **Divider** `#d6d6d6` — 1px bottom border of the nav row.
- **Card border** `#cecece` — teaser and product cards.
- **Tile border** `#adadad` — the full-menu category list container.
- **Card shadow** `#00000014` — i.e. `rgba(0, 0, 0, 0.08)`, the only shadow colour.

### Semantic
No success / warning / error palette is visible on the measured pages, and no
official source documents one, so none is declared here.

## Typography

### Font Family
Every glyph on the page is **Speedee** (100% of measured characters). The served
stack is:

`Speedee, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif`

The stylesheet declares `@font-face` families `Speedee` and `Speedee-light`
(plus `icomoon` for icons). At measurement time the browser had loaded the
`Speedee 400` and `Speedee 700` faces.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Where |
|---|---|---|---|---|---|
| display-h1 | 54px | 700 | 56px | -0.15px | "McDonald's Menu" page title |
| display-h1-mobile | 36px | 700 | 40px | -0.14px | same, at 390px |
| h2-lg | 40px | 700 | 46px | -0.15px | product page section ("Ingredients in the Big Mac®") |
| h2 | 36px | 700 | 40px | -0.15px | homepage section heads, "Featured Favorites" |
| h2-mobile | 28px | 700 | 32px | -0.15px | homepage heads at 390px |
| menu-item | 20px | 400 | — | -0.19px | product names under menu photos |
| body | 16px | 400 | 24px | -0.15px | paragraphs, utility links |
| button | 16px | 700 | 20px | -0.15px | all pills |
| nav-link | 16px | 700 | 20px | -0.15px | "Our Menu", "Download App" |
| nav-utility | 16px | 400 | 24px | -0.15px | "Search", "Change your Location", utility bar |
| footer-heading | 16px | 700 | 20px | — | footer column titles |
| footer-link | 16px | 400 | 22px | — | footer links |
| flag | 14px | 700 | — | — | "New", "Limited Time Only" |
| legal | 11px | 300 | 15.95px | -0.15px | homepage disclaimers |
| legal-menu | 11px | 400 | 16px | -0.15px | nutrition disclaimer on menu/product pages |

The extractor's `bodyText` role on the homepage landed on the 11px legal block,
because the disclaimers are the longest paragraphs on the page — a measurable fact
about how much legal copy the site carries.

### Principles
- Two weights do all the work: 700 for anything you should look at (headlines,
  nav, buttons, bold phrases inside paragraphs), 400 for reading.
- Headlines are tight: 36px on 40px, 54px on 56px. No uppercase, no wide tracking.
- Tracking is a constant -0.15px across sizes (menu item names use -0.19px at 20px).
- Emphasis inside paragraphs is done with **bold**, not colour.

### Note on Font Substitutes
Speedee is a custom McDonald's typeface; it is not publicly licensed (press
coverage of the 2018 identity credits Dalton Maag with Turner Duckworth). There is
no published official substitute. The site's own fallback chain is the system UI
stack (`-apple-system`, `system-ui`, `Segoe UI`, `Roboto`), which is what a
reproduction without Speedee should use — keep the 700/400 contrast and the
-0.15px tracking.

## Layout

### Spacing System
Measured gaps cluster on **4px, 8px, 16px, 24px**; paddings on **12px, 16px, 32px**
and a large **100px** section padding. Button paddings are 8px 16px (gold) and
11px 16px (outline). The menu grid uses 8px and 30px cell paddings (menu page
frequency table).

### Grid & Container
- Desktop width measured at 1280px; content blocks are ~1106px wide (the `h2` and
  the legal paragraph both measure 1106px), i.e. roughly 87px side margins.
- Homepage promos: image left (756px wide, 336px tall, 12px radius), text column
  right; headline 36px, body 16px, legal 11px, outline pill.
- Full menu: a left sidebar of category tiles (photo + label) inside a 4px-radius
  bordered container, with the active item marked by a 5px red left border; the
  main area is a 3-up (featured) or 4-up (meal) grid of isolated product shots on
  white with 20px names centred beneath.

### Whitespace Philosophy
White space is generous between blocks (large vertical gaps between promo rows in
the capture) but tight inside them — headline, copy, legal and pill stack closely.
Product photography is cut out on pure white so the grid reads as a catalogue.

## Elevation & Depth

The site is essentially flat.

| Level | Treatment | Used on |
|---|---|---|
| 0 | none | page, nav, buttons, promo images |
| 1 | `rgba(0, 0, 0, 0.08) 0px 1.5px 1.5px 0px` + 1px `#cecece` border | teaser cards, product cards |
| 1 (tile) | `rgba(41, 41, 41, 0.08) 0px 1.5px 1.5px 0px` + 1px `#adadad` border | menu category list |

The nav row separates from content with a 1px `#d6d6d6` hairline, not a shadow
(box-shadow measured `none`). Buttons have no shadow in either state.

### Decorative Depth
All depth (3D type, dramatic lighting, flying cash in the Monopoly hero) lives
inside photographs. The CSS never adds gradients, glows or blur.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| none | 0px | nav, utility bar, footer, text |
| tile | 4px | product cards, category list container |
| card | 12px | promo images, teaser cards |
| pill | 48px | every button (40px and 48px tall, so fully round ends) |

No clip-paths, skews or notches were measured. The Golden Arches appear only as
the logo image at the top-left of the nav.

### Photography Geometry
- Homepage promo images: 756×336, 12px radius, no border.
- Menu product shots: cut-out food on white, no frame at all.
- Hero: full-bleed, square-cornered.

## Components

### Buttons
**Primary — gold pill** ("Order Now")
- Background `#ffbc0d`, text `#292929`, 1px solid `#c08b00` border.
- Speedee 16px / 700 / 20px line height, -0.15px.
- Padding 8px 16px, height 40px, radius 48px.
- Hover: background `#ffcc49`; text, border and height unchanged.
- On mobile (390px) the same pill keeps 40px height with padding 0px 16px and a
  37px line height.

**Secondary — white outline pill** ("Start Your Order", "Join Now", "Nutrition
Calculator")
- Background `#ffffff`, text `#292929`, 1px solid `#7c7c7c` border.
- Speedee 16px / 700 / 20px.
- Padding 11px 16px, height 48px, radius 48px.
- Hover: background `#f4f4f4`.

Note the asymmetry: the gold pill is 40px tall, the outline pill 48px.

### Cards & Containers
**Teaser card** (full menu, e.g. "Earn Points for Free…")
- Transparent/white fill, 1px `#cecece` border, 12px radius,
  `rgba(0, 0, 0, 0.08) 0px 1.5px 1.5px 0px`, 573×406 at desktop.

**Product card** (Big Mac page, "Quarter Pounder® with Cheese" etc.)
- `#ffffff`, 1px `#cecece`, 4px radius, same 1.5px shadow.

**Category list** (full menu sidebar)
- 1px `#adadad`, 4px radius, `rgba(41, 41, 41, 0.08) 0px 1.5px 1.5px 0px`.
- Active row: 5px solid `#d90007` left border.

### Inputs & Forms
No text input is present on the measured pages, so no input style is declared.

### Navigation
- **Utility bar**: `#292929` background, white 16px/400 links ("Language",
  "Sign Up for Email", "Careers"); hover text `#eaeaea`.
- **Main nav row**: white, 88px tall, 1px `#d6d6d6` bottom border. Left: gold
  arches logo. Then 16px/700 `#292929` items ("Our Menu", "Download App",
  "MyMcDonald's Rewards", "McValue® & Deals", "More") with chevrons on the
  dropdowns. Right: icon + 16px/400 "Search" and "Change your Location"
  (hover `#606060`), then the gold Order Now pill.
- **Mobile**: header collapses to logo + Order Now; the mobile nav panel has a
  1px `#d6d6d6` border.

### Pills, Tags, and Chips
- **Menu flag**: plain text, 14px/700, `#b84d00` ("New", "Limited Time Only")
  above a product name. No background.
- "Protein 17g" badges on the menu are part of the product images, not CSS.

### Signature Components
- **Promo row**: 12px-radius image + text column (36px headline, 16px body with
  bold inline phrases, 11px/300 legal, outline pill).
- **Legal block**: 11px / 300 / 15.95px `#292929` full-width paragraph under
  campaign copy — long, always visible, never collapsed.
- **Footer**: white; column titles 16px/700/20px, links 16px/400/22px in `#292929`.

## Design System Architecture

McDonald's publishes **no public design system** for its web or app UI: no
documentation site, token package or Figma community kit was found (searches
recorded in `SOURCES.json`, including npm, corporate.mcdonalds.com and the type
foundry's portfolio). What is public:

- The identity agency's case study,
  [turnerduckworth.com/work/mcdonalds](https://www.turnerduckworth.com/work/mcdonalds),
  says the identity "extends to every touchpoint, including sub-brands, loyalty
  programs, retail locations, corporate conventions and the headquarters itself",
  describes "engineered curves of the custom font" inspired by the Golden Arches,
  and says "a digital hub was built to guide global clients and agency partners".
  That hub is not public, and the case study gives no token names, values,
  theming or component inventory.
- Press coverage
  ([It's Nice That](https://www.itsnicethat.com/articles/turner-duckworth-redesign-mcdonalds-branding-visual-identity-graphic-design-250719))
  quotes the agency: Speedee was developed with Dalton Maag, comes in "three
  weights", and the colour palette moved to "a much more disciplined palette"
  with gold more prominent than red. This is a secondary source; no value in this
  file is taken from it.

Because nothing official documents tokens, theming, scales, component anatomy,
accessibility rules or delivery packages, this section describes only what is
measurable on mcdonalds.com (the de-facto system):

- **Token architecture**: none exposed. `rootVars` is empty — the site ships no
  CSS custom properties, so colours are hard-coded per rule. The stylesheets
  repeat a small set: `#292929` (229 occurrences), `#ffffff` (142), `#f4f4f4`
  (118), `#7c7c7c` (40), `#ffbc0d` (27), `#006bae` (25), `#ffcc49` (17).
- **Class naming**: BEM-style component classes with a `cmp-` prefix, quoted from
  the DOM: `cmp-global-header__container`, `cmp-teaser`, `cmp-image__image`,
  `cmp-list__item-link`, `cmp-category__link-item`, `cmp-category__item-flag`,
  `cmp-footer__container`, `cmp-legal-bumper`, `cmp-button__text`.
- **Theming**: no dark mode or alternate theme observed; no theme switch exists.
- **Type & spacing**: a single family (Speedee) and a constant -0.15px tracking;
  spacing values cluster on 4 / 8 / 16 / 24 / 32px.
- **Component inventory observed**: global header (utility bar + nav row),
  pill buttons (gold primary, outline secondary), teaser card, product card,
  category list with active state, menu flag, promo image, legal bumper, footer
  link columns.
- **Accessibility observable on the page**: a "Skip To Main Content" link is the
  first focusable element in the header; secondary pills are 48px tall. No
  documented contrast or focus-ring rules were found.
- **Delivery**: no npm package, framework binding, Figma kit or versioning is
  published.

## Do's and Don'ts

### Do
- Keep the page white `#ffffff` and set all text in `#292929`.
- Use gold `#ffbc0d` for the one primary action per view, always with the 1px
  `#c08b00` border and a `#292929` label.
- Use the 48px pill for every button; 40px tall for gold, 48px for outline.
- Set everything in Speedee 400/700 with -0.15px tracking.
- Let photography carry colour and drama; keep UI chrome flat.
- Put food on pure white in grids; round promo photos to 12px.
- Underline inline links in `#006bae`.
- Keep the long 11px legal copy visible beneath any offer.

### Don't
- Don't put white text on the gold button or fill buttons with red.
- Don't add heavy shadows, gradients or glows; the maximum is the 1.5px / 8% drop.
- Don't introduce extra accent colours in UI — red appears only as the 5px active
  marker and inside images.
- Don't round cards beyond 12px or use square buttons.
- Don't use uppercase or wide letter-spacing for headings.
- Don't hide disclaimers behind toggles.
- Don't recolour or redraw the Golden Arches logo.

## Responsive Behavior

### Breakpoints
Measured at 1280px (desktop) and 390px (mobile).

| Element | Desktop | Mobile |
|---|---|---|
| h2 | 36px / 40px | 28px / 32px |
| Menu h1 | 54px / 56px | 36px / 40px |
| Product h1 | 32px | 28px |
| Gold pill | 40px tall, 8px 16px | 40px tall, 0px 16px, 37px line height |
| Header | utility bar + 88px nav | logo + Order Now, 65px header |

Mobile size table (homepage): 11px, 16px, 10px, 14px, 28px, 12px, 18px. On the
menu page at 390px the most frequent size is 18px (20px is the most frequent at
desktop).

### Touch Targets
Outline pills are 48px tall; the gold Order Now pill is 40px tall on both
breakpoints. Language picker links are 48px tall (12px 48px 12px 24px padding).

### Collapsing Strategy
- Main nav items collapse into a mobile nav panel (white, 1px `#d6d6d6` border,
  `rgba(0, 0, 0, 0.4)` scrim behind the links panel).

### Image Behavior
The hero stays full-bleed; promo images keep their 12px radius at all widths;
product shots stay on white.

## Iteration Guide

1. Start with white `#ffffff`, `#292929` Speedee text at 16px/400/24px, -0.15px.
2. Add the header: `#292929` utility bar, then the white 88px nav with a 1px
   `#d6d6d6` bottom line, 16px/700 items, and the gold Order Now pill on the right.
3. Headlines: 36px/700/40px (sections), 54px/700/56px (page titles).
4. Buttons: gold `#ffbc0d` pill with `#c08b00` border, 8px 16px, 40px, hover
   `#ffcc49`; white outline pill with `#7c7c7c` border, 11px 16px, 48px, hover
   `#f4f4f4`. Both 48px radius, 16px/700 labels.
5. Content blocks: 12px-radius photo + text column; add 11px/300/15.95px legal
   copy under offers.
6. Cards: 1px `#cecece`, 12px (teaser) or 4px (product), `rgba(0, 0, 0, 0.08)
   0px 1.5px 1.5px 0px`.
7. Links `#006bae`, underlined; flags 14px/700 `#b84d00`.
8. Check: is gold used once per view? Is everything else neutral? Is any UI
   element red? (Only the active category marker should be.)
