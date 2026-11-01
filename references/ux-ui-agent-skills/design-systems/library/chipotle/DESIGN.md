---
version: alpha
name: Chipotle
category: "Food & Beverage"
description: 'Chipotle Mexican Grill''s web system as measured on chipotle.com — a pure white #ffffff canvas, burnt-brown #451400 ink used for nearly all text and headings, a chili-red #ad2118 ORDER NOW button and a mustard-gold #b68207 catering button, uppercase "Trade Gothic LT Bold" headlines (33.6px/500 h1, 48px section titles, 24px nav) over Nunito 18px body copy, 4px button corners, 14px reward cards, and a signature left-to-right color-wipe hover on every filled button.'

colors:
  primary: "#ad2118"
  primary-wipe: "#b3473f"
  primary-deep: "#9c1f16"
  canvas: "#ffffff"
  ink: "#451400"
  ink-wipe: "#6b321b"
  ink-muted: "#786259"
  on-primary: "#ffffff"
  gold: "#b68207"
  gold-wipe: "#976500"
  gold-link-hover: "#946300"
  gold-locator: "#996f14"
  amber: "#a76721"
  hairline: "#d4cbc7"
  surface-cream: "#f7f2ed"
  surface-grey: "#f0f0f0"
  surface-utility: "#f2f2f2"
  surface-card: "#f7f7f7"

typography:
  display-hero:
    fontFamily: "\"Trade Gothic LT\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 55px
    fontWeight: 400
    lineHeight: 50px
  display-section:
    fontFamily: "\"Trade Gothic LT Bold\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 38px
  heading-h1:
    fontFamily: "\"Trade Gothic LT Bold\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 33.6px
    fontWeight: 500
    lineHeight: 33.6px
  heading-h1-mobile:
    fontFamily: "\"Trade Gothic LT Bold\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 33.6px
    fontWeight: 500
    lineHeight: 33.6px
  heading-section-mobile:
    fontFamily: "\"Trade Gothic LT Bold\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 38px
  heading-locator:
    fontFamily: "\"Trade Gothic LT\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: -1px
  footer-display-link:
    fontFamily: "\"Trade Gothic LT Bold\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 28px
    fontWeight: 400
  nav-primary:
    fontFamily: "\"Trade Gothic LT Bold\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 500
  heading-card:
    fontFamily: "\"Trade Gothic LT Bold\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
  heading-h3:
    fontFamily: "\"Trade Gothic LT Bold\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 18px
    fontWeight: 500
  button-cta:
    fontFamily: "\"Trade Gothic LT\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 40px
  button-cta-bold:
    fontFamily: "\"Trade Gothic LT Bold\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
  button-rewards:
    fontFamily: "FestivoLettersNo2, \"Trade Gothic LT Bold\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 32px
  button-outlined:
    fontFamily: "\"Trade Gothic LT Bold\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 29px
  link-signin:
    fontFamily: "\"Trade Gothic LT Bold\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 19.2px
    fontWeight: 500
    lineHeight: 32px
  body-lg:
    fontFamily: "Nunito, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
  body:
    fontFamily: "Nunito, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
  footer-link:
    fontFamily: "\"Nunito Extra Bold\", Nunito, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
  utility-caps:
    fontFamily: "\"Nunito Extra Bold\", Nunito, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 700
    letterSpacing: 1px
  micro-caps:
    fontFamily: "\"Nunito Extra Bold\", Nunito, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 11px
    fontWeight: 700
    letterSpacing: 0.85px
  eyebrow-badge:
    fontFamily: "Gotham, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 38px
    letterSpacing: 1.6px

rounded:
  none: 0px
  sm: 4px
  md: 12px
  card: 14px
  pill: 9999px

spacing:
  xxs: 4px
  xs: 8px
  sm: 10px
  md: 12px
  ml: 15px
  lg: 16px
  xl: 20px
  xxl: 24px
  xxxl: 32px
  huge: 64px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-cta}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 40px
    backgroundImage: "linear-gradient(to right, rgb(179, 71, 63) 50%, rgb(172, 33, 23) 50%)"
    backgroundSize: 200% 100%
    backgroundPosition: 100% 50%
    transition: background-position 0.12s
  button-primary-hover:
    backgroundColor: "{colors.primary-wipe}"
    backgroundPosition: 0px 100%
  button-brown:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-cta-bold}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 36px
    backgroundImage: "linear-gradient(to right, rgb(107, 50, 27) 50%, rgb(69, 20, 0) 50%)"
    backgroundSize: 200% 100%
  button-brown-hover:
    backgroundColor: "{colors.ink-wipe}"
    backgroundPosition: 0% 100%
  button-gold:
    backgroundColor: "{colors.gold}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-cta-bold}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 60px
    backgroundImage: "linear-gradient(to right, rgb(151, 101, 0) 50%, rgb(182, 130, 7) 50%)"
    backgroundSize: 200% 100%
  button-gold-hover:
    backgroundColor: "{colors.gold-wipe}"
    backgroundPosition: 0% 100%
  button-rewards:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-rewards}"
    rounded: "{rounded.sm}"
    padding: 0px 12px
    height: 35px
    textTransform: uppercase
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-outlined}"
    rounded: "{rounded.sm}"
    padding: 10px 20px
    height: 51px
    border: "1px solid #786259"
    textTransform: uppercase
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-primary}"
    height: 101px
    boxShadow: "rgba(0, 0, 0, 0.1) 0px 10px 11px -5px"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav-primary}"
    textTransform: uppercase
  nav-link-hover:
    textColor: "{colors.primary-deep}"
  link-signin:
    textColor: "{colors.gold}"
    typography: "{typography.link-signin}"
  link-signin-hover:
    textDecoration: underline
  link-utility:
    textColor: "{colors.ink}"
    typography: "{typography.micro-caps}"
  link-utility-hover:
    textColor: "{colors.gold-link-hover}"
    textDecoration: underline
  card-feature:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-lg}"
    rounded: "{rounded.none}"
    border: "1px solid #d4cbc7"
  card-rewards:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    typography: "{typography.heading-h3}"
    rounded: "{rounded.card}"
    size: 310px
  card-rewards-raised:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
    boxShadow: "rgba(0, 0, 0, 0.2) 0px 0px 8px 0px"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.footer-display-link}"
---

## Overview

Chipotle's website reads like the restaurant's menu board translated to a screen: a bright white
`#ffffff` page, food photography cut out on white or shot close and saturated, and loud uppercase
condensed-feeling headlines in a single warm, burnt-brown ink (`#451400`). There is no black
anywhere in the primary hierarchy — headings, nav, body text, borders and even the footer all use
the same brown, which gives the whole site an earthy, "kitchen-paper" warmth instead of a tech
product's neutral grey.

Color is used like condiments. Chili red `#ad2118` belongs to the hero ORDER NOW button and the
rewards brand moments. Mustard gold `#b68207` is reserved for catering / group-order buttons and
the inline SIGN IN link. The burnt brown doubles as a button fill (JOIN REWARDS, the card ORDER NOW
buttons, FIND A CHIPOTLE). Everything else is white, a cream band (`#f7f2ed`) behind the FEATURED
section, and light greys (`#f0f0f0`, `#f2f2f2`) for the utility strip and image wells.

The layout in the capture is, from the top: a thin grey utility bar with "ENABLE ACCESSIBILITY",
a 101px white header with the round red pepper logo, five uppercase nav items (MENU, CATERING,
REWARDS, OUR VALUES, NUTRITION) and right-side utilities (FIND A CHIPOTLE, SIGN IN / JOIN, bag);
a three-panel photographic hero strip (chips being tossed, the promo center panel, guacamole) with
a centered white headline and a red ORDER NOW button; a slim rewards banner with the pepper roundel,
"JOIN CHIPOTLE REWARDS. UNLOCK FREE CHIPOTLE.", a brown JOIN REWARDS button, "OR" and a gold
underlined SIGN IN; a 3×3 grid of cut-out menu items (Family Meals, Burrito, Burrito Bowl, High
Protein Menu, Quesadilla, Salad, Tacos, Kid's Meal, Chips & Sides) with big uppercase labels and
tiny dark pill badges ("DIGITAL ONLY", "NEW"); two bordered editorial cards with image-right
photography (avocados, the Pollo Asado bowl); and a cream, line-illustration-patterned FEATURED band.

**Key Characteristics:**
- White `#ffffff` canvas; burnt-brown `#451400` is the ink for text, headings, nav and footer.
- Chili red `#ad2118` primary ORDER NOW button; mustard gold `#b68207` catering buttons; brown `#451400` secondary fills.
- Uppercase "Trade Gothic LT Bold" for every headline, nav item, card title and footer link.
- Nunito for running text: 18px/400 on desktop cards, 16px/400 on mobile and in the shell.
- Buttons are 4px-radius rectangles with a measured left-to-right color wipe on hover (`background-position` transition, 0.12s).
- Almost no elevation: one soft header shadow and one card glow on the rewards page.
- Photography carries the brand — cut-out food on white and tight, saturated close-ups.

## Colors

All values below were measured from the live site (computed styles, stylesheet corpus, hover
probes). Chipotle publishes no public color specification (see Design System Architecture).

### Brand & Accent
- **Chili Red** (`#ad2118`): `colors.primary`. Background of the hero ORDER NOW button and the rewards page LEARN MORE / JOIN NOW buttons.
- **Chili Red Wipe** (`#b3473f`): `colors.primary-wipe`. The left half of the red button's 200%-wide gradient, slid into view on hover.
- **Deep Red** (`#9c1f16`): `colors.primary-deep`. Nav link hover color (MENU, CATERING, REWARDS…) and a footer accent.
- **Mustard Gold** (`#b68207`): `colors.gold`. ORDER CATERING / START A GROUP ORDER buttons and the SIGN IN link text.
- **Gold Wipe** (`#976500`): `colors.gold-wipe`. Hover fill revealed on gold buttons.
- **Gold Link Hover** (`#946300`): `colors.gold-link-hover`. Hover color of the ENABLE ACCESSIBILITY utility link.
- **Locator Gold** (`#996f14`): `colors.gold-locator`. Second most-read text color on the locations.chipotle.com store directory.
- **Amber** (`#a76721`): `colors.amber`. Small accent text on the homepage.

### Surface
- **Canvas** (`#ffffff`): `colors.canvas`. Body, header and card background; the dominant color of the capture.
- **Cream** (`#f7f2ed`): `colors.surface-cream`. The FEATURED band (with a tonal food-icon line pattern).
- **Grey Well** (`#f0f0f0`): `colors.surface-grey`. Large image wells and rewards-page sections.
- **Utility Grey** (`#f2f2f2`): `colors.surface-utility`. The thin bar above the header.
- **Card Grey** (`#f7f7f7`): `colors.surface-card`. Rewards points cards (measured on /rewards).

### Text
- **Ink** (`#451400`): `colors.ink`. The most-read text color on every page measured (homepage, rewards, locations). Body copy, headings, nav, footer.
- **Ink Wipe** (`#6b321b`): `colors.ink-wipe`. Hover fill of brown buttons.
- **Muted Brown** (`#786259`): `colors.ink-muted`. Second most-read text color — secondary copy, legal text, and the outlined button border.
- **On Primary** (`#ffffff`): text on red, brown and gold buttons and on hero photography.

### Lines
- **Hairline** (`#d4cbc7`): `colors.hairline`. 1px border of the editorial image-right cards and footer rules.

## Typography

### Font Family
Five families are served via `@font-face` and appear in computed styles:

- **"Trade Gothic LT Bold"** — every uppercase headline: h1, section titles, nav, card titles, footer links, card ORDER NOW buttons.
- **"Trade Gothic LT"** — the 55px/400 hero headline, the hero ORDER NOW button (20px/400) and the h1 on the locations subdomain (40px/700).
- **Nunito** (with "Nunito SemiBold", "Nunito Extra Bold", "Nunito Light" faces) — body copy, utility links, footer secondary links.
- **Gotham** — the "ALL-NEW" eyebrow badge in the hero.
- **FestivoLettersNo2** — the JOIN REWARDS button label.

The stylesheet corpus also declares "Trade Gothic LT Std Extended", "Trade Gothic LT Std Bold Extended",
knockout, "Relative Mono 12 Pitch", BeausVarsity and "Open Sans" faces; none of them carried measured
text in the captured viewport.

By characters on the homepage: Nunito 801, "Trade Gothic LT Bold" 498, "Nunito SemiBold" 270,
"Nunito Extra Bold" 179, "Trade Gothic LT" 27, Gotham 18.

### Hierarchy

| Token | Family | Size | Weight | Line height | Letter spacing | Use |
|---|---|---|---|---|---|---|
| display-section | Trade Gothic LT Bold | 48px | 500 | 38px | — | FEATURED section title (uppercase) |
| display-hero | Trade Gothic LT | 55px | 400 | 50px | — | Hero headline on the homepage ("& CHILI LIME CHIPS" at the time of capture) |
| heading-h1 | Trade Gothic LT Bold | 33.6px | 500 | 33.6px | — | h1 "CROWD PLEASERS" (uppercase) |
| heading-h1-mobile | Trade Gothic LT Bold | 33.6px | 500 | 33.6px | — | h1 at 390px (unchanged) |
| heading-section-mobile | Trade Gothic LT Bold | 40px | 500 | 38px | — | FEATURED at 390px |
| heading-locator | Trade Gothic LT | 40px | 700 | 40px | -1px | locations.chipotle.com h1 |
| footer-display-link | Trade Gothic LT Bold | 28px | 400 | — | — | CONTACT SUPPORT, CAREERS… |
| nav-primary | Trade Gothic LT Bold | 24px | 500 | — | — | MENU, CATERING, REWARDS… |
| heading-card | Trade Gothic LT Bold | 24px | 400 | — | — | rewards banner, editorial card titles |
| heading-h3 | Trade Gothic LT Bold | 18px | 500 | — | — | DOWNLOAD OUR APP |
| button-cta | Trade Gothic LT | 20px | 400 | 40px | — | hero ORDER NOW |
| button-cta-bold | Trade Gothic LT Bold | 20px | 400 | — | — | card / catering buttons |
| button-rewards | FestivoLettersNo2 | 16px | 700 | 32px | — | JOIN REWARDS (uppercase) |
| button-outlined | Trade Gothic LT Bold | 24px | 700 | 29px | — | JOIN NOW outlined |
| link-signin | Trade Gothic LT Bold | 19.2px | 500 | 32px | — | inline SIGN IN |
| body-lg | Nunito | 18px | 400 | — | — | card paragraphs (desktop) |
| body | Nunito | 16px | 400 | — | — | shell text; paragraphs at 390px |
| footer-link | Nunito Extra Bold | 16px | 700 | — | — | Our Values, News & Events, Investors… |
| utility-caps | Nunito Extra Bold | 14px | 700 | — | 1px | FIND A CHIPOTLE, SIGN IN / JOIN |
| micro-caps | Nunito Extra Bold | 11px | 700 | — | 0.85px | ENABLE ACCESSIBILITY |
| eyebrow-badge | Gotham | 16px | 600 | 38px | 1.6px | "ALL-NEW" hero badge |

Line heights marked "—" compute to `normal` and are intentionally left unset.

### Principles
- Headlines are always uppercase (`text-transform: uppercase` on h1/h2/h3, nav and footer links).
- Headline letter-spacing is `normal`; tracking only appears on small Nunito Extra Bold utility caps (0.85px–1px) and the Gotham eyebrow (1.6px).
- Weight contrast is carried by family choice (Trade Gothic Bold vs Nunito) more than by numeric weight.
- Body text is never pure black — always `#451400`.

### Note on Font Substitutes
Trade Gothic is a commercial Linotype family designed by Jackson Burke (MyFonts lists 14 fonts,
desktop licenses sold per style) — it must be licensed. Nunito is an open-source (OFL) family by
Vernon Adams, Cyreal and Jacques Le Bailly, available from Google Fonts. Gotham and FestivoLettersNo2
are served by the site but their licensing was not researched here. The site's own fallback stacks are
`"Helvetica Neue", Arial, sans-serif` (Trade Gothic) and `Arial, sans-serif` (Gotham); use those
stacks when the licensed faces are unavailable rather than picking a lookalike.

## Layout

### Spacing System
Measured paddings on the homepage, by frequency: 20px (most common), 16px, 15px, 10px, 4px, 32px,
12px, 64px, 8px, 24px. Tokens: `xxs` 4px, `xs` 8px, `sm` 10px, `md` 12px, `ml` 15px, `lg` 16px,
`xl` 20px, `xxl` 24px, `xxxl` 32px, `huge` 64px. Buttons use 0 vertical padding — their height comes
from `line-height` (40px hero button, 36px card buttons, 60px catering buttons) with 16px side padding
(12px on JOIN REWARDS).

### Grid & Container
- Header is full-width 1280px at the desktop viewport, 101px tall.
- The hero is a three-panel photographic strip spanning the full width.
- The menu grid is three columns of cut-out food photography with centered uppercase labels.
- Editorial cards sit two-up; each measured card wrapper is 570px wide with a 538px bordered inner card inset 16px on each side, text left and photograph right.
- The FEATURED band runs full-bleed in cream.

### Whitespace Philosophy
Generous white around cut-out food images — each menu tile floats on white with no card chrome.
Density increases only in the footer, where large Trade Gothic links stack in a column.

## Elevation & Depth

| Level | Value | Where |
|---|---|---|
| Flat | none | almost everything: buttons, menu tiles, editorial cards |
| Header | `rgba(0, 0, 0, 0.1) 0px 10px 11px -5px` | the white sticky header |
| Card glow | `rgba(0, 0, 0, 0.2) 0px 0px 8px 0px` | the raised reward-item card on /rewards |

Depth is expressed with borders (`1px solid #d4cbc7`) and photography rather than shadow.

### Decorative Depth
The FEATURED band uses a light tonal line-illustration pattern (food icons) on cream `#f7f2ed`. The
hero relies on photographic depth of field.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| none | 0px | editorial cards, images, header |
| sm | 4px | every button (primary, brown, gold, rewards, outlined) |
| md | 12px | measured on the homepage (second most common radius) |
| card | 14px | rewards points cards on /rewards |
| pill | 9999px | pill badges ("DIGITAL ONLY", "NEW", "ALL-NEW") — 9999px in the stylesheet corpus |

No skewed, clipped or masked shapes were measured; buttons are plain rectangles with 4px corners.

### Photography Geometry
Menu items are cut-outs on white (no frame). Editorial-card photographs fill the right half edge to
edge with square corners. The logo is a round red roundel.

## Components

### Buttons
**button-primary — hero ORDER NOW.** Background `#ad2118`, text `#ffffff`, "Trade Gothic LT" 20px/400,
line-height 40px, height 40px, padding 0px 16px, radius 4px. It carries
`background-image: linear-gradient(to right, rgb(179, 71, 63) 50%, rgb(172, 33, 23) 50%)` at
`background-size: 200% 100%`, resting at `background-position: 100% 50%`.
**button-primary-hover.** Measured: `background-position` moves to `0px 100%` with
`transition: background-position 0.12s`, so the `#b3473f` half wipes in from the left.

**button-brown — card ORDER NOW / FIND A CHIPOTLE.** Background `#451400`, text `#ffffff`,
"Trade Gothic LT Bold" 20px/400, height 36px, padding 0px 16px, radius 4px, gradient
`linear-gradient(to right, rgb(107, 50, 27) 50%, rgb(69, 20, 0) 50%)` at 200% 100%.
Hover: position to `0% 100%`, revealing `#6b321b`.

**button-gold — ORDER CATERING / START A GROUP ORDER.** Background `#b68207`, text `#ffffff`,
"Trade Gothic LT Bold" 20px/400, height 60px, padding 0px 16px, radius 4px, gradient
`linear-gradient(to right, rgb(151, 101, 0) 50%, rgb(182, 130, 7) 50%)`. Hover reveals `#976500`.

**button-rewards — JOIN REWARDS.** Background `#451400`, text `#ffffff`, FestivoLettersNo2 16px/700
uppercase, line-height 32px, height 35px, padding 0px 12px, radius 4px. Same brown wipe on hover.

**button-secondary — outlined JOIN NOW.** Text `#451400`, "Trade Gothic LT Bold" 24px/700 uppercase,
line-height 29px, padding 10px 20px, height 51px, `border: 1px solid #786259`, radius 4px. The text
itself is painted with the brown gradient via `background-clip: text`.

### Cards & Containers
**card-feature — editorial image-right card.** White, `1px solid #d4cbc7`, square corners. Left: a
24px Trade Gothic Bold uppercase title stacked over several short lines, an 18px Nunito paragraph in
`#451400`, and a full-width brown ORDER NOW button at the bottom. Right: an edge-to-edge photograph.

**card-rewards.** `#f7f7f7`, 14px radius, 310×310px, with a Trade Gothic Bold points number and the
red `#ad2118` accent (measured on /rewards). **card-rewards-raised** is white with
`rgba(0, 0, 0, 0.2) 0px 0px 8px 0px`.

**Menu tiles.** No container: cut-out food photo, optional dark pill badge, uppercase Trade Gothic
Bold label in `#451400`, optional Nunito sub-label ("Serves 4-6 people").

### Inputs & Forms
No text input was rendered on the homepage, /rewards or locations.chipotle.com during measurement, so
no input component is declared.

### Navigation
**nav.** White `#ffffff`, 101px tall, `box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 11px -5px`. Left: the
round pepper logo, then MENU / CATERING / REWARDS / OUR VALUES / NUTRITION in "Trade Gothic LT Bold"
24px/500 uppercase `#451400`. **nav-link-hover:** text turns `#9c1f16`, no underline.
Right: FIND A CHIPOTLE (pin icon) and SIGN IN / JOIN (person icon) in "Nunito Extra Bold" 14px/700 with
1px letter-spacing, then a bag icon.
Above the header, a `#f2f2f2` strip holds ENABLE ACCESSIBILITY in "Nunito Extra Bold" 11px/700,
0.85px tracking; **link-utility-hover** turns it `#946300` and underlined.

### Links
**link-signin.** `#b68207`, "Trade Gothic LT Bold" 19.2px/500, line-height 32px, underlined in the
capture; hover keeps the color with `text-decoration: underline`.

### Footer
White background, `#451400` text. A column of large uppercase "Trade Gothic LT Bold" 28px/400 links
(CONTACT SUPPORT, CAREERS, CHIPOTLE GOODS, GIFT CARDS, FUNDRAISING, REWARDS) beside smaller
"Nunito Extra Bold" 16px/700 mixed-case links (Our Values, News & Events, Investors, Health & Safety,
Cultivate Foundation, Cultivate Next). Footer child colors include `#d4cbc7`, `#786259` and `#9c1f16`.

### Pills, Tags, and Chips
Dark pill badges ("DIGITAL ONLY", "NEW") sit above menu labels in the capture; the hero "ALL-NEW"
badge is a white pill with Gotham 16px/600, 1.6px tracking, `#ad2118` text. Pill radius `9999px`.

### Signature Components
- **The color-wipe button.** Every filled button is a two-tone 200%-wide hard-stop gradient whose
  `background-position` slides on hover in 0.12s. This is the single most recognizable interaction.
- **Rewards banner.** One line: pepper roundel, 24px Trade Gothic Bold uppercase promise, brown JOIN
  REWARDS, "OR" (Nunito 16px/500), gold underlined SIGN IN.

## Design System Architecture

Chipotle publishes **no public design system, token package or brand-guideline site**. Searches for a
Chipotle design system, component library, GitHub/npm packages, and brand guidelines returned only
third-party aggregators (ignored). The official newsroom media kit at
[newsroom.chipotle.com/media-kits](https://newsroom.chipotle.com/media-kits) requires a registered
login ("You must be registered to view this content"), and `api.github.com/orgs/chipotle` returns 404.
What follows is therefore the de-facto system measurable on the site.

- **Token architecture.** No CSS custom properties are exposed on `:root` (the extraction's `rootVars`
  is empty). Colors and type are applied through utility classes visible in the DOM, e.g. the hero
  button's classes `cmp-button cta-order-now-red font-trade-gothic font-size-20 px-4 mb-5 color-white
  bg-red text-nowrap text-no-decoration`, and the catering button's `aem-card__button cmp-button
  font-trade-gothic-bold font-size-20 color-white bg-brown`. Naming is literal (color name, family
  name, pixel size) rather than semantic tiers. Note the gold `#b68207` catering button carries the
  class `bg-brown` — the class names are not a reliable color reference.
- **Component naming.** BEM-style block/element classes: `aem-hero__button`, `aem-card`,
  `aem-card__button`, `cmp-button`, `cmp-button__text`, `card card__cta-primary btn-color-brown
  btn-short`, `card-image-right`.
- **Theming.** Only a light theme was observed; no dark mode or theme switch was found.
- **Type & spacing.** Responsive utilities with `sm:` and `lg:` prefixes (`sm:d-block`,
  `lg:flex-row`) and spacing utilities (`px-4`, `mb-5`, `ma-4`). The h1 stays 33.6px at 390px; the
  FEATURED title drops from 48px to 40px; card paragraphs drop from 18px to 16px.
- **Component inventory (observed).** Filled buttons (red, brown, gold, rewards), outlined button,
  header nav, utility bar, hero promo, rewards banner, menu tile grid, editorial image-right card,
  rewards points card, footer link columns, pill badges.
- **Accessibility.** The first focusable element is an "ENABLE ACCESSIBILITY" link with class
  `UsableNetAssistive`. No published contrast or focus-style rules were found. Measured: ink
  `#451400` on white and white on `#ad2118` both read with strong contrast.
- **Delivery.** Not publicly documented.
- **Typefaces.** Trade Gothic: [MyFonts — Linotype Trade Gothic](https://myfonts.com/fonts/linotype/trade-gothic/)
  (Jackson Burke, 14 fonts, commercial). Nunito: [google/fonts METADATA](https://raw.githubusercontent.com/google/fonts/main/ofl/nunito/METADATA.pb)
  (Vernon Adams, Cyreal, Jacques Le Bailly; OFL).

## Do's and Don'ts

### Do
- Use `#451400` for all text, headings and nav — never black.
- Set headlines, nav and footer links in uppercase "Trade Gothic LT Bold".
- Reserve `#ad2118` for the primary ORDER NOW action and rewards moments.
- Use `#b68207` gold for catering / group-order actions and the SIGN IN link.
- Build filled buttons as 4px-radius rectangles with height from line-height and 16px side padding.
- Implement hover as the two-tone gradient wipe (`background-size: 200% 100%`, position 100% → 0%, 0.12s).
- Float cut-out food photography on white with no card chrome.
- Keep borders at `1px solid #d4cbc7` for containers.

### Don't
- Don't round buttons into pills — the pill shape belongs to small badges only.
- Don't add drop shadows to cards or buttons on the homepage; only the header has a shadow.
- Don't use Nunito for headlines or Trade Gothic for paragraphs.
- Don't add letter-spacing to Trade Gothic headlines (measured `normal`).
- Don't introduce cool greys or blues — every neutral is white, cream or warm brown.
- Don't change the button color on hover with a flat fade; the wipe is the brand behavior.

## Responsive Behavior

### Breakpoints
Measured at 1280px (desktop) and 390px (mobile). Breakpoint pixel values were not measured; the DOM
uses `sm:` and `lg:` responsive class prefixes.

### Touch Targets
Filled buttons are 35–60px tall (hero ORDER NOW 40px at both widths, catering 60px).

### Collapsing Strategy
- At 390px the header shrinks to 71px; its only measured text is FIND A CHIPOTLE.
- The h1 stays at 33.6px; FEATURED title goes from 48px to 40px with 0px 20px padding.
- Card paragraphs go from Nunito 18px to 16px.
- Editorial cards switch from side-by-side (`lg:flex-row`) to stacked (`flex-col`).

### Image Behavior
Hero panels and editorial photos crop edge to edge; menu cut-outs scale within their column.

## Iteration Guide
1. Start with `colors.canvas` `#ffffff` and set all text to `colors.ink` `#451400`.
2. Set every headline in uppercase `typography.heading-h1` / `display-section` (Trade Gothic LT Bold, weight 500).
3. Body copy: `typography.body-lg` (Nunito 18px) on desktop, `typography.body` (16px) on mobile.
4. Primary action: `components.button-primary` with the measured gradient and 0.12s wipe.
5. Secondary actions: brown `button-brown` or gold `button-gold`; outlined `button-secondary` for JOIN NOW.
6. Header: `components.nav` 101px, white, the measured soft shadow, nav links hover to `#9c1f16`.
7. Containers: square corners with `1px solid #d4cbc7`; rewards cards 14px radius on `#f7f7f7`.
8. Check every new color against this file — if it is not listed, it was not measured on chipotle.com.
