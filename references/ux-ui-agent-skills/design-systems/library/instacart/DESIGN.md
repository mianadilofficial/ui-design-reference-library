---
version: alpha
name: Instacart
category: "Food & Beverage"
description: "Instacart's US grocery marketplace: a white #ffffff canvas under a warm #f7f5f0 header, a deep-kale #003d29 hero band, Instacart Green #108910 pill buttons (hover #007200) with 20px/28px radii, #343538 and #242529 grey ink, #e8e9eb filter chips at 999px, 8px-radius retailer cards with a #0000001f hairline, #ffdc23 deal badges, all set in the custom Instacart Sans (400/600/700)."

colors:
  primary: "#108910"
  primary-hover: "#007200"
  primary-dark: "#0d720d"
  primary-extra-dark: "#0a610a"
  primary-light: "#e9fbe9"
  primary-extra-light: "#f6fdf6"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  header: "#f7f5f0"
  tertiary: "#faf1e5"
  tertiary-dark: "#efe9e1"
  kale: "#003d29"
  kale-dark: "#003121"
  kale-extra-dark: "#001810"
  kale-light: "#edf7f4"
  mint: "#b1e5d5"
  ink: "#343538"
  ink-strong: "#242529"
  ink-black: "#000000"
  ink-faq: "#424242"
  ink-secondary: "#56595e"
  ink-muted: "#72767e"
  gray-00: "#ffffff"
  gray-10: "#f6f7f8"
  gray-20: "#e8e9eb"
  gray-30: "#c7c8cd"
  gray-40: "#8f939b"
  gray-50: "#72767e"
  gray-60: "#56595e"
  gray-70: "#343538"
  gray-80: "#242529"
  gray-90: "#191a1c"
  gray-99: "#0b0c0d"
  hover-neutral: "#d1d1d1"
  hover-chip: "#c7c8cd"
  hover-gray: "#bebfc0"
  hairline: "#0000001f"
  scrim: "#00000099"
  deal: "#ffdc23"
  plus: "#750046"
  plus-light: "#b00074"
  plus-dark: "#5e0038"
  plus-extra-light: "#ffd7e8"
  error: "#de3534"
  error-dark: "#bb1c1b"
  error-extra-dark: "#ac1615"
  error-light: "#fef0f0"
  alert: "#ffa500"
  alert-light: "#ffbe1d"

typography:
  h1:
    fontFamily: "\"Instacart Sans\", \"Instacart Sans Fallback\", Arial, sans-serif"
    fontSize: 26px
    fontWeight: 600
    lineHeight: 33px
  h1-mobile:
    fontFamily: "\"Instacart Sans\", \"Instacart Sans Fallback\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 28px
  store-title:
    fontFamily: "\"Instacart Sans\", \"Instacart Sans Fallback\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 36.8px
  section-heading:
    fontFamily: "\"Instacart Sans\", \"Instacart Sans Fallback\", Arial, sans-serif"
    fontSize: 26px
    fontWeight: 600
    lineHeight: 33px
  section-heading-light:
    fontFamily: "\"Instacart Sans\", \"Instacart Sans Fallback\", Arial, sans-serif"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 33px
  faq-question:
    fontFamily: "\"Instacart Sans\", \"Instacart Sans Fallback\", Arial, sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 32px
  stat-caption:
    fontFamily: "\"Instacart Sans\", \"Instacart Sans Fallback\", Arial, sans-serif"
    fontSize: 23px
    fontWeight: 400
    lineHeight: 28px
  h2:
    fontFamily: "\"Instacart Sans\", \"Instacart Sans Fallback\", Arial, sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 25px
  h2-mobile:
    fontFamily: "\"Instacart Sans\", \"Instacart Sans Fallback\", Arial, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 22px
  h3:
    fontFamily: "\"Instacart Sans\", \"Instacart Sans Fallback\", Arial, sans-serif"
    fontSize: 17px
    fontWeight: 600
    lineHeight: 20px
  body:
    fontFamily: "\"Instacart Sans\", \"Instacart Sans Fallback\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
  body-long:
    fontFamily: "\"Instacart Sans\", \"Instacart Sans Fallback\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  ui:
    fontFamily: "\"Instacart Sans\", \"Instacart Sans Fallback\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  ui-strong:
    fontFamily: "\"Instacart Sans\", \"Instacart Sans Fallback\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
  button-label-lg:
    fontFamily: "\"Instacart Sans\", \"Instacart Sans Fallback\", Arial, sans-serif"
    fontSize: 17px
    fontWeight: 600
    lineHeight: 20px
  caption:
    fontFamily: "\"Instacart Sans\", \"Instacart Sans Fallback\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  input:
    fontFamily: "\"Instacart Sans\", \"Instacart Sans Fallback\", Arial, sans-serif"
    fontSize: 15px
    fontWeight: 400

rounded:
  none: 0px
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  button: 20px
  xl: 24px
  capsule: 28px
  pill: 999px
  circle: 50%

spacing:
  space-4: 4px
  space-8: 8px
  space-12: 12px
  space-16: 16px
  space-20: 20px
  space-24: 24px
  space-32: 32px
  space-40: 40px
  space-48: 48px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.ui-strong}"
    rounded: "{rounded.button}"
    padding: 0px 16px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-lg:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-label-lg}"
    rounded: "{rounded.capsule}"
    padding: 0px 16px
    height: 56px
  button-primary-lg-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.ui-strong}"
    rounded: "{rounded.button}"
    border: "1px solid #c7c8cd"
    padding: 0px 16px
    height: 40px
  button-secondary-hover:
    backgroundColor: "{colors.hover-neutral}"
    border: "1px solid #00000000"
  button-tonal:
    backgroundColor: "{colors.gray-20}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
    rounded: "{rounded.button}"
    padding: 0px 16px
    height: 40px
  button-tonal-hover:
    backgroundColor: "{colors.hover-gray}"
  button-add:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.button}"
    height: 36px
  chip-filter:
    backgroundColor: "{colors.gray-20}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.ui-strong}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 32px
  chip-filter-hover:
    backgroundColor: "{colors.hover-chip}"
  chip-filter-selected:
    backgroundColor: "{colors.ink-strong}"
    textColor: "{colors.on-primary}"
  chip-filter-selected-hover:
    backgroundColor: "{colors.gray-60}"
  search-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.capsule}"
    border: "1px solid #c7c8cd"
    boxShadow: "rgba(0, 0, 0, 0.05) 0px 2px 4px 0px inset"
    height: 56px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.ui}"
    rounded: "{rounded.sm}"
    boxShadow: "rgb(143, 147, 155) 0px 0px 0px 1px"
    padding: 22px 12px 8px
    height: 48px
  text-input-label:
    textColor: "{colors.ink-strong}"
    typography: "{typography.caption}"
  card-retailer:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    border: "1px solid #0000001f"
    height: 134px
  badge-deal:
    backgroundColor: "{colors.deal}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.xs}"
    padding: 1px 6px
    height: 22px
  modal:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    boxShadow: "rgba(0, 0, 0, 0.16) 0px 0px 16px 0px"
  modal-scrim:
    backgroundColor: "{colors.scrim}"
  sidebar-item-active:
    backgroundColor: "{colors.ink-strong}"
    textColor: "{colors.on-primary}"
    typography: "{typography.ui-strong}"
    rounded: "{rounded.sm}"
    padding: 0px 12px
    height: 40px
  link:
    textColor: "{colors.primary}"
    textDecoration: none
  link-hover:
    textDecoration: underline
  nav:
    backgroundColor: "{colors.header}"
    height: 80px
  hero-band:
    backgroundColor: "{colors.kale}"
    textColor: "{colors.on-primary}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.ui}"
---

# Instacart — DESIGN.md

## Overview

Instacart's logged-out homepage (instacart.com, measured at 1280×800 and 390px) is a utilitarian
marketplace dressed in food colour. The page reads top to bottom as: a warm off-white header band
(`#f7f5f0`) holding the carrot wordmark, a 56px capsule search field and two 40px pill buttons;
a deep kale-green hero band (`#003d29`) with a white 26px headline and a big green capsule CTA beside
a rounded food photograph; then a white canvas (`#ffffff`) carrying a 3-column grid of retailer
cards, a row of grey filter chips, a mint (`#b1e5d5`) app-download banner, three photographic
"how it works" tiles, stats, an FAQ accordion and a dense multi-column footer.

The palette is restrained where the user works and loud only where it sells: Instacart Green
`#108910` is the single action colour (buttons, "Delivery by" times, links, % off), grey ink
`#343538` / `#242529` carries almost all text, and the turmeric-like yellow `#ffdc23` appears
only as a highlighter behind deal copy ("No markups", "$10 off on $50+"). Instacart's own 2022
brand announcement describes a palette "grounded in food" with colours named "Kale" green,
"Turmeric" yellow and "Guava" pink ([company.instacart.com](https://company.instacart.com/updates/carrot-evolution-a-new-brand-identity));
it does not publish hex values, so the hexes here are the ones the site ships.

Everything is set in **Instacart Sans**, the custom family created for the 2022 rebrand
(D&AD 2023 Wood Pencil entry "Instacart Sans & Instacart Contrast", Wolff Olins New York —
[dandad.org](https://www.dandad.org/work/d-ad-awards-archive/instacart-sans-instacart-contrast)).
The site's stylesheets also declare `@font-face` for **Instacart Contrast**, but no measured
text on the homepage or storefront rendered in it.

Shapes are soft and consistent: 8px retailer cards and modals, 20px radius on 40px buttons
(fully round ends), 28px on 56px capsules, 999px chips. Depth is almost absent — a single
`#0000001f` hairline outlines cards; only modals and floating panels get a shadow.

Imagery is warm, saturated, candid lifestyle photography (families with phones, a hand holding a
grocery bag, an overhead spread of vegetables), always cropped into rounded rectangles. Retailer
logos sit in small white tiles inside the cards. Microcopy is plain and benefit-led: "Order groceries for delivery or
pickup today", "Grocery delivery you can count on", with legal asterisks set in 12px.

## Colors

### Brand & Accent
- **Instacart Green** `#108910` (`--ids-color-brand-primary-regular`) — every primary button, the
  "+ Add" product button, "Delivery by 9:00pm" lines, the location link in "All stores in San
  Francisco Bay Area", "20% off" labels.
- **Green hover** `#007200` — measured background of "Sign up", the hero CTA and "Continue" on hover.
- **Green dark** `#0d720d` (`--ids-color-brand-primary-dark`) and **extra dark** `#0a610a`
  (`--ids-color-brand-primary-extra-dark`) — declared tokens; also the success-feedback scale.
- **Green light** `#e9fbe9` and **extra light** `#f6fdf6` — declared tokens for tinted surfaces.
- **Kale** `#003d29` (`--ids-color-brand-secondary-regular`) — the full-width hero band.
- **Kale dark** `#003121` (`--ids-color-brand-secondary-dark`) — header text ("Departments") and logo area.
- **Kale extra dark** `#001810`, **Kale light** `#edf7f4` — declared secondary-scale tokens.
- **Mint** `#b1e5d5` — the "Get the full Instacart experience" QR banner.
- **Deal yellow** `#ffdc23` (`--ids-color-brand-max-light`) — highlighter badges behind deal text.
- **Plus magenta** `#750046` (`--ids-color-brand-plus-regular`), `#b00074` (plus-light),
  `#5e0038` (plus-dark), `#ffd7e8` (plus-extra-light) — declared "plus" scale; not visible on the
  logged-out homepage.

### Surface
- **Canvas** `#ffffff` — the page background under all content below the hero.
- **Header** `#f7f5f0` (`--ids-color-brand-tertiary-light`) — the top navigation band.
- **Tertiary** `#faf1e5` (`--ids-color-brand-tertiary-regular`) and `#efe9e1` (tertiary-dark) — declared warm neutrals.
- **Gray 10** `#f6f7f8` — the second-largest background by area on the homepage (light grey tiles).
- **Gray 20** `#e8e9eb` — filter chips, tonal buttons ("Show all", social login).
- **Scrim** `#00000099` — modal backdrop on the storefront.

### Text
- **Ink** `#343538` (`--ids-color-system-grayscale-70`) — the most-read text colour (card meta,
  "how it works" headings, stats, footer links). Contrast on white is high (≈ 12:1).
- **Ink strong** `#242529` (`--ids-color-system-grayscale-80`, also `--ids-color-brand-max-dark`) —
  section headings, retailer names, chip and secondary-button labels.
- **Black** `#000000` — default body text and FAQ answers.
- **FAQ grey** `#424242` — FAQ question rows.
- **Secondary** `#56595e` (grayscale-60) — product names on the storefront.
- **Muted** `#72767e` (grayscale-50) — copyright line and inactive country labels.
- **On primary** `#ffffff` — text on green and kale.

### Grayscale ladder (system tokens, verbatim)
`grayscale-00 #ffffff`, `-10 #f6f7f8`, `-20 #e8e9eb`, `-30 #c7c8cd`, `-40 #8f939b`, `-50 #72767e`,
`-60 #56595e`, `-70 #343538`, `-80 #242529`, `-90 #191a1c`, `-99 #0b0c0d`.
Interaction greys measured on hover: `#c7c8cd` (chip hover), `#d1d1d1` (Log in hover),
`#bebfc0` (Show all / social button hover).

### Semantic
- **Detrimental / error** `#de3534` regular, `#bb1c1b` dark, `#ac1615` extra dark, `#fef0f0` light.
- **Alert** `#ffa500` regular, `#ffbe1d` light (also measured as a text colour on the storefront).
- **Success** = the green scale (`--ids-color-system-feedback-success-regular` is `#108910`).

## Typography

### Font Family
- **Instacart Sans** — served as `"Instacart Sans", "Instacart Sans Fallback", Arial, sans-serif`.
  The loaded face reports a variable weight range of 400–800; the pages use 400, 600 and 700.
- **Instacart Contrast** — declared in the CSS (with "Instacart Contrast Fallback") but not
  observed in rendered text on the measured pages.

### Hierarchy

| Token | Size | Weight | Line height | Where |
|---|---|---|---|---|
| store-title | 32px | 700 | 36.8px | storefront h1 "Costco - Shop" |
| faq-question | 28px | 400 | 32px | FAQ accordion rows, `#424242` |
| h1 | 26px | 600 | 33px | hero "Order groceries for delivery or pickup today", white |
| section-heading | 26px | 600 | 33px | "Grocery delivery you can count on", stat numbers |
| section-heading-light | 26px | 400 | 33px | "The largest online grocery marketplace in North America" |
| h1-mobile | 24px | 600 | 28px | hero h1 at 390px |
| stat-caption | 23px | 400 | 28px | "available to shop across the catalog" |
| h2 | 20px | 600 | 25px | "All stores in San Francisco Bay Area" |
| h2-mobile | 18px | 600 | 22px | same at 390px |
| h3 | 17px | 600 | 20px | retailer names, "Choose what you want" |
| button-label-lg | 17px | 600 | 20px | hero CTA label |
| body | 16px | 400 | normal | default body |
| body-long | 16px | 400 | 26px | FAQ answers |
| input | 15px | 400 | normal | header search field |
| ui-strong | 14px | 600 | 20px | chips, button labels, "Delivery by", sidebar |
| ui | 14px | 400 | 20px | card meta ("EBT"), footer links, email field |
| caption | 12px | 400 | 16px | legal asterisk lines, field labels |

14px is by far the most-read size on the homepage; 12px dominates at 390px.

### Principles
- Two weights do almost all the work: 400 for reading, 600 for anything scannable or tappable.
  700 appears only on the storefront page title.
- No letter-spacing adjustments were measured anywhere (`letterSpacing: normal` on every role).
- No uppercase transforms; headings are sentence case.
- Line heights are tight on UI text (20px on 14px and 17px) and opened up only for long-form FAQ answers.
- Button elements report 16px/400, but their visible label is an inner span at 14px/600
  (40px buttons) or 17px/600 (56px capsules) — style the label, not the button.

### Note on Font Substitutes
Instacart Sans and Instacart Contrast are proprietary; no public licence or foundry release was
found. The site's own fallback stack is `"Instacart Sans Fallback", Arial, sans-serif`
When the real face is unavailable, use
that same stack; do not substitute another brand's typeface.

## Layout

### Spacing System
The live CSS declares a spacing scale as `--ids-system-space-*`: **4, 8, 12, 16, 24, 32, 40, 48px**.
Measured paddings also use 20px (card internals) and 2px/7px micro-paddings. Gaps between chip
and meta items are 2px and 4px; between cards 16px and 24px.

### Grid & Container
- Content column is 1152px wide on a 1280px viewport (64px side margins; h2 width 1152px).
- Retailer cards: 3 columns, 368px wide, 134px tall; the remaining 48px of the 1152px row is split over two gutters (24px each).
- "How it works" tiles: 3 columns of photo-over-text tiles on `#f6f7f8`.
- Hero: two columns — text block (384px wide headline and CTA) left, rounded photo right.
- Header: 80px tall on desktop, 64px on mobile.

### Whitespace Philosophy
Dense where shopping happens (the retailer grid packs logo, name, delivery time, pickup distance
and deal badges into 134px) and airy where the brand speaks (large vertical gaps around the
centered 26px section headings and the full-width photograph).

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | none | almost everything |
| hairline | `1px solid #0000001f` | retailer cards (`--ids-opacity-border: 0.12`) |
| inset | `rgba(0, 0, 0, 0.05) 0px 2px 4px 0px inset` | header search field |
| raised | `rgba(0, 0, 0, 0.08) 0px 1px 8px 0px` | most frequent shadow on the storefront (30 elements) |
| modal | `rgba(0, 0, 0, 0.16) 0px 0px 16px 0px` | login modal card |
| scrim | `#00000099` | backdrop behind modals |

The CSS declares opacity tokens `--ids-opacity-light: 0.08`, `--ids-opacity-border: 0.12`,
`--ids-opacity-regular: 0.16`, `--ids-opacity-dark: 0.24` — the shadow and hairline alphas above
match them.

### Decorative Depth
None. No gradients, glows or blur. Photography supplies all the visual richness.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| none | 0px | page bands |
| xs | 4px | deal badges |
| sm | 8px | retailer cards, modal, email field, active sidebar item, "Shop" button |
| md | 12px | photo tiles (12px 12px 0 0 top / 0 0 12px 12px bottom halves) |
| lg | 16px | measured once on the homepage (element not attributed) |
| button | 20px | 40px buttons (fully round), "+ Add" button |
| xl | 24px | declared token (`--ids-system-radius-24`) |
| capsule | 28px | 56px hero CTA, "Continue", header search field |
| pill | 999px | filter chips |
| circle | 50% | carousel arrows, avatar/logo circles |

Declared radius tokens: `--ids-system-radius-0/4/8/12/24`. 20px and 28px are half the control
height, so buttons always read as stadiums.

### Photography Geometry
Photos are rounded rectangles (12px corners measured on the tile halves), not circles or full-bleed.

## Components

### Buttons
- **Primary (40px)** — `#108910` bg, white 14px/600 label, 20px radius, `0 16px` padding, 40px
  tall (header "Sign up", 166px wide). Hover: `#007200`. No border, no shadow.
- **Primary large (56px)** — same colours, 28px radius, 56px tall, 17px/600 label
  ("Sign up to get $0 delivery fee*", 384px wide; "Continue" in the login modal, 400px wide).
  Hover `#007200`.
- **Secondary** — white bg, `1px solid #c7c8cd`, `#242529` 14px/600 label, 20px radius, 40px
  ("Log in"). Hover: bg `#d1d1d1`, border becomes transparent.
- **Tonal** — `#e8e9eb` bg, `#242529` label, 20px radius, 40px ("Show all", "Google",
  "Facebook", "Phone"). Hover `#bebfc0`.
- **Add** — the storefront's floating "+ Add" on each product image: `#108910`, white, 20px
  radius, 36px tall, ~77px wide.

### Chips (filters)
32px tall, 999px radius, `0 16px` padding, 14px/600. Default `#e8e9eb` bg with `#242529` text,
hover `#c7c8cd`. Selected ("All"): `#242529` bg with white text, hover `#56595e`.

### Cards & Containers
- **Retailer card** — white, `1px solid #0000001f`, 8px radius, 368×134px. Contents left to right:
  logo tile, then a text stack — retailer name 17px/600 `#242529`; "[U+26A1] Delivery by 9:00pm"
  14px/600 `#108910`; pickup line; tags row ("No markups" 14px/600 `#343538` on yellow badge,
  "EBT" 14px/400 `#242529`).
- **How-it-works tile** — light grey tile with photo top (12px top corners) and 17px/600 heading +
  14px body below.
- **Stat tile** — light grey tile, number 26px/600, caption 23px/400, both `#343538`.

### Inputs & Forms
- **Header search** — 56px tall, 28px radius, `1px solid #c7c8cd`, inset shadow
  `rgba(0, 0, 0, 0.05) 0px 2px 4px 0px inset`, 15px text `#343538`, 48px right padding,
  leading magnifier icon, placeholder "Search products and stores".
- **Text field (login modal)** — 48px tall, white, 8px radius, outline drawn as a
  `rgb(143, 147, 155) 0px 0px 0px 1px` ring on the wrapper; floating label 12px `#242529`;
  input text 14px/20px `#242529` with `22px 12px 8px` padding.

### Badges
- **Deal badge** — `#ffdc23` bg, `#242529` text, 4px radius, `1px 6px` padding, 22px tall
  ("$3.50 off; limit 5", "$10 off on $50+").
- **% off** — plain text 14px/600 `#108910`.
- **Stock** — "Many in stock" 14px/600 `#343538` with a small icon.

### Navigation
- **Header** — `#f7f5f0` band, 80px: hamburger, carrot wordmark, search capsule centred, then
  "Log in" (secondary) and "Sign up" (primary).
- **Storefront sidebar** — retailer logo and name, then items ("Shop", "Flyers", "Meals");
  active item `#242529` bg, white 14px/600, 8px radius, 40px tall, 235px wide. Aisle links
  14px/600 `#242529`, `9px 0` padding.
- **Links** — green `#108910`, no underline; underline on hover ("San Francisco Bay Area").

### Modal
Login modal on the storefront: white card, 8px radius, `rgba(0, 0, 0, 0.16) 0px 0px 16px 0px`,
over a `#00000099` scrim. Content: tonal "Log in" pill top right, headline with yellow
highlight on "$0 delivery fee", green legal link, email field, 56px "Continue", divider "Or
continue with", three tonal social buttons, business-profile link.

### Footer
White, 14px/20px links in `#343538`, multi-column lists (departments, cities, help), app badges,
copyright 14px `#72767e`, country switch with "Change" in green.

### Signature Components
- The kale hero band with a full-width green capsule CTA and an asterisked 12px legal line.
- Retailer cards with the green lightning "Delivery by" line and yellow highlighter badges.
- The mint QR-code banner ("Get the full Instacart experience", underlined heading, QR code at right).

## Design System Architecture

Instacart has an internal design system called **IDS — the Instacart Design System**. An
Instacart job posting describes it as "a dynamic and evolving foundation that enables cohesive,
accessible, and scalable product experiences across our 4 sided marketplace", spanning consumer
apps, shopper experiences, retailer platforms, CPG tools and connected-store solutions
([job posting](https://jobs.khoslaventures.com/companies/instacart/jobs/60913323-senior-manager-design-systems-foundations)).
There is **no public IDS documentation site, token package or Figma kit**: searches for an IDS
site, an `@instacart` npm package and engineering-blog write-ups found none (queries listed in
SOURCES.json). Everything below about tokens is read from the CSS custom properties the live site
ships (`desktop.rootVars`), not from documentation.

- **Token architecture (observed)** — custom properties are prefixed `--ids-` and split into
  `color-brand-*`, `color-system-*`, `system-space-*`, `system-radius-*` and `opacity-*`.
  Brand colours are families × steps: `--ids-color-brand-primary-regular` (`#108910`),
  `--ids-color-brand-primary-dark`, `--ids-color-brand-secondary-regular` (`#003D29`),
  `--ids-color-brand-tertiary-light` (`#F7F5F0`), `--ids-color-brand-plus-regular` (`#750046`),
  `--ids-color-brand-max-light` (`#FFDC23`), with steps `extra-light / light / regular / dark /
  extra-dark`. System colours are `--ids-color-system-grayscale-00…99` and
  `--ids-color-system-feedback-{success|alert|detrimental}-{light|regular|dark|extra-dark}`.
  Dimensions are literal-named: `--ids-system-space-16: 16px`, `--ids-system-radius-8: 8px`.
  No component-tier variables were exposed at `:root`.
- **Theming** — no dark-mode or alternate-theme variables were present in the measured root
  variables, and no public documentation of themes was found.
- **Type & spacing** — one family (Instacart Sans) at 400/600/700; spacing tokens on a 4px base
  (4, 8, 12, 16, 24, 32, 40, 48). Responsive type is a straight step down at 390px
  (h1 26→24px, h2 20→18px). Motion tokens are declared as easing curves:
  `--smooth-easing-function: cubic-bezier(0, 0, 0, 1)`,
  `--elevated-easing-function: cubic-bezier(0, 1.25, 0.6, 1)`,
  `--bounce-easing-function: cubic-bezier(0, 1.7, 0.4, 0.9)`.
- **Component model** — not publicly documented. Observable on the site: primary / secondary /
  tonal buttons in 36, 40 and 56px heights, filter chips with selected state, retailer cards,
  product tiles with an Add button, deal badges, floating-label text field, modal, sidebar nav,
  accordion. A press-state hint is exposed as `--ids-pressable-touch-action: manipulation`.
- **Accessibility** — the job posting lists WCAG knowledge and "building inclusive systems by
  default" as a requirement; no published contrast or focus rules were found. The site ships a
  "Skip Navigation" link on the storefront.
- **Delivery** — Instacart's public GitHub has an older React library,
  **Snacks — "The Instacart Component Library"** (npm `ic-snacks`, React 15/16 with
  `@instacart/radium`, self-described "pre-release") ([github.com/instacart/snacks](https://github.com/instacart/snacks));
  it does not contain the `--ids-` tokens used on the live site. Brand identity (carrot symbol,
  food-named palette, custom typefaces) came from the 2022 rebrand with Wolff Olins
  ([wolffolins.com](https://wolffolins.com/work/instacart)).

## Do's and Don'ts

### Do
- Use `#108910` as the only action colour; hover it to `#007200`.
- Make buttons stadiums: radius = half the height (20px on 40px, 28px on 56px), chips at 999px.
- Set UI text at 14px/600/20px and reading text at 14–16px/400.
- Use `#343538` and `#242529` for text on white; reserve pure `#000000` for default body copy.
- Outline cards with `1px solid #0000001f` at 8px radius instead of shadows.
- Use `#ffdc23` only as a tight highlighter (4px radius, `1px 6px`) behind deal text.
- Keep the warm `#f7f5f0` header and the kale `#003d29` hero band as the brand's colour moments.
- Use warm, candid food and family photography in rounded rectangles.

### Don't
- Don't introduce other accent hues for buttons; magenta "plus" and yellow are not CTA colours.
- Don't add shadows to cards or buttons; only modals and floating panels are raised.
- Don't use letter-spacing or uppercase on headings.
- Don't go above weight 600 for headings on marketing pages (700 is only the storefront title).
- Don't put text in green on the kale band — text there is white.
- Don't use square corners on interactive controls.

## Responsive Behavior

### Breakpoints
Measured at 1280px and 390px only. At 390px: header drops to 64px with "Log in" / "Sign up"
kept; hero h1 26→24px (line height 28px); h2 20→18px (22px); the hero CTA becomes full width
(358px) at 56px tall with 28px radius; 12px becomes the most-read size.

### Touch Targets
Primary actions are 40px or 56px tall; chips are 32px; the storefront Add button is 36px.

### Collapsing Strategy
Only the hero was measured at 390px (full-width 358px CTA, smaller h1/h2); the collapse of the
retailer grid and footer was not measured, so match the live site rather than assuming a pattern.

### Image Behavior
Photos keep their rounded-rectangle crop and scale to column width.

## Iteration Guide
1. Start with white canvas, `#f7f5f0` header (80px) and a `#003d29` hero band.
2. Set everything in `"Instacart Sans", "Instacart Sans Fallback", Arial, sans-serif`.
3. Hero h1: 26px/600/33px white; mobile 24px/600/28px.
4. Primary CTA: `#108910`, white 17px/600 label, 56px, 28px radius; hover `#007200`.
5. Header buttons: 40px, 20px radius — "Log in" white with `1px solid #c7c8cd`, "Sign up" green.
6. Retailer grid: 3 × 368px cards, `1px solid #0000001f`, 8px radius, name 17px/600 `#242529`,
   delivery line 14px/600 `#108910`.
7. Filter chips: 32px, 999px, `#e8e9eb` → hover `#c7c8cd`; selected `#242529` with white text.
8. Deal badges `#ffdc23`, 4px radius, `1px 6px`.
9. Section headings centred 26px/600/33px `#242529`; FAQ rows 28px/400/32px `#424242`.
10. Spacing only from 4 / 8 / 12 / 16 / 24 / 32 / 40 / 48px.
11. Check: no shadows on cards, no letter-spacing, every control a stadium.
