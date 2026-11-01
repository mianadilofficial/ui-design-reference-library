---
version: alpha
name: Kiehl's
category: "Beauty & Personal Care"
description: "Kiehl's Since 1851 storefront: a black #000000 header and footer framing a white #ffffff apothecary shelf, Amiri serif headings (44px/700 hero, 32px/400 section titles, 20px/700 product names) over Roboto 14px body, Roboto Condensed 16px/700 uppercase labels on square black buttons (0px radius, 39px tall) that invert to white on hover, 20px-radius shortcut chips and 10px-radius UGC tiles."

colors:
  primary: "#000000"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#000000"
  on-dark: "#ffffff"
  chrome: "#000000"
  surface-soft: "#f8f8f8"
  surface-grey: "#f2f2f2"
  charcoal: "#333333"
  tile-placeholder: "#777676"
  ink-muted: "#666666"
  ink-breadcrumb: "#373737"
  link-legal: "#2980b9"
  disabled: "#949494"
  border-select: "#cccccc"
  border-chip: "#e9e9e9"
  border-field: "#595959"
  border-secondary: "#d8d8d8"
  hover-on-dark: "#f8f8f8"

typography:
  display-hero:
    fontFamily: "Amiri, serif"
    fontSize: 44px
    fontWeight: 700
    lineHeight: 61.6px
  heading-promo:
    fontFamily: "Amiri, serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 50.4px
  heading-section:
    fontFamily: "Amiri, serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
  heading-section-mobile:
    fontFamily: "Amiri, serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24px
  heading-product-page:
    fontFamily: "Amiri, serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 45px
  heading-product-page-mobile:
    fontFamily: "Amiri, serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 36px
  subhead-hero:
    fontFamily: "Amiri, serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
  subhead-promo:
    fontFamily: "Amiri, serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  product-title:
    fontFamily: "Amiri, serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
  product-tagline:
    fontFamily: "Amiri, serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  body:
    fontFamily: "Roboto, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.4px
  body-sm:
    fontFamily: "Roboto, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  chip-label:
    fontFamily: "Roboto, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
    textTransform: uppercase
  nav-category:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  nav-utility:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 17.6px
    textTransform: uppercase
  price:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
  concern-label:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26.6px
  footer-heading:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 17.5px
    textTransform: uppercase
  badge:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 10px
    fontWeight: 700
    lineHeight: 12px
    textTransform: uppercase

rounded:
  none: 0px
  xs: 2px
  sm: 4px
  tile: 10px
  chip: 20px
  circle: 50%

spacing:
  "2": 2px
  "5": 5px
  "7": 7px
  "8": 8px
  "10": 10px
  "11": 11px
  "12": 12px
  "15": 15px
  "16": 16px
  "20": 20px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    border: "1px solid #000000"
    rounded: "{rounded.none}"
    padding: 11px 12px 10px
    height: 39px
    width: 170px
    typography: "{typography.button}"
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  button-primary-disabled:
    backgroundColor: "{colors.surface-soft}"
    textColor: "{colors.disabled}"
    border: "1px solid #949494"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    border: "1px solid #d8d8d8"
    rounded: "{rounded.none}"
    padding: 8px
    height: 41px
    fontFamily: "Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 400
  button-secondary-hover:
    boxShadow: "rgba(55, 55, 55, 0.9) 0px 0px 2px 0px"
  chip:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    border: "1px solid #e9e9e9"
    rounded: "{rounded.chip}"
    padding: 8px 10px
    height: 44px
    typography: "{typography.chip-label}"
  chip-hover:
    backgroundColor: "{colors.surface-soft}"
  select:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    border: "1px solid #cccccc"
    rounded: "{rounded.none}"
    padding: 0px 30px 0px 10px
    height: 40px
    fontFamily: "Roboto, sans-serif"
    fontSize: 14px
    lineHeight: 40px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    border: "1px solid #595959"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 39px
    fontFamily: "Roboto, sans-serif"
    fontSize: 14px
  ugc-tile:
    backgroundColor: "{colors.tile-placeholder}"
    rounded: "{rounded.tile}"
    width: 235px
    height: 417px
    imageTransform: "matrix(1.1, 0, 0, 1.1, 0, 0)"
  badge:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.badge}"
  nav:
    backgroundColor: "{colors.chrome}"
    textColor: "{colors.on-dark}"
    height: 171px
  nav-link:
    textColor: "{colors.on-dark}"
    typography: "{typography.nav-utility}"
  nav-link-hover:
    textColor: "{colors.hover-on-dark}"
  link-breadcrumb:
    textColor: "{colors.ink-breadcrumb}"
    fontFamily: "Roboto, sans-serif"
    fontSize: 12px
    lineHeight: 19.2px
    textTransform: capitalize
    padding: 7px 0px
  footer:
    backgroundColor: "{colors.chrome}"
    textColor: "{colors.on-dark}"
    typography: "{typography.body-sm}"
  footer-legal-link:
    textColor: "{colors.link-legal}"
    typography: "{typography.body}"
---

## Overview

Kiehl's (logo lockup "SINCE Kiehl's 1851") presents its storefront as an apothecary counter
inside a black frame. The capture of https://www.kiehls.com/ opens with a pure-black header: a
utility row in white condensed caps on the left ("$ - US (EN)", "FIND A STORE", "CUSTOMER
SERVICE"), the script wordmark centred, account links on the right ("SIGN IN", a heart with
"JOIN REWARDS", a bag icon with "MY BAG"), and below it a centred row of category links
(NEW! COLLASHOT · BESTSELLERS · SKINCARE · MEN'S · BODY · HAIR · GIFTS & SETS · SERVICES ·
DISCOVER · OFFERS) with a small white search box on the far right.

The hero is a full-bleed photographic banner — a periwinkle-blue studio backdrop, the black
"Finest Apothecary Skincare" tote, a cream pouch and a row of minis lined up like a pharmacy
shelf. The headline "FALL INTO BETTER SKIN!" sits left in a heavy upright serif (Amiri 44px/700),
followed by a serif sub-line at 24px and a tiny "*While Supplies Last." disclaimer, then a
square black "SHOP NOW" button.

Under the hero, a white strip holds five rounded shortcut chips with small circular thumbnails
(Virtual Consultation · My Kiehl's Rewards · Gift Sets · Exclusive Offers · Skincare Advice).
A second banner, "VIRTUAL CONSULTATION", pairs a light-grey photographic background with a
skin close-up and a smiling Skin Pro in a white lab coat, plus "BOOK NOW".

Then the page goes editorial: a centred "SHOP BY CONCERN" serif title, a carousel of
square-cornered product still-lifes on light grey (Anti-Aging, UV Protection, Oily Skin, Dark
Spots) labelled in condensed type, two thin pagination bars, and "EXPLORE OUR BEST SELLERS" — four
product tiles with a heart (wishlist) icon, image arrows, serif product names, red star ratings
with review counts, a "Size" select, a condensed price and a full-width black add-to-bag button.
The footer (measured, below the capture) is black again with white condensed headings.

The character comes from the contrast of three faces — a bookish Arabic-heritage serif (Amiri)
for anything that names or sells, plain Roboto for reading, and Roboto Condensed for every label,
button and price — and from the absolute refusal of colour in the UI. Every action is black and
white; colour comes only from product packaging and photography.

**Key Characteristics:**
- Black (`#000000`) header (171px tall) and footer; white (`#ffffff`) content canvas.
- One action colour: black `#000000` with white text — square (0px radius), 39px tall, Roboto Condensed 16px/700 uppercase.
- Primary hover inverts: white background, black text, black 1px border kept (measured on the PDP add-to-bag).
- Amiri serif for headings and product names; Roboto 14px/400 (line-height 22.4px) for body; Roboto Condensed for UI labels.
- Rounded corners only on chips (20px), UGC tiles (10px) and circular thumbnails (50%); everything transactional is square.
- Greys are pure neutrals: `#f8f8f8`, `#f2f2f2`, `#e9e9e9`, `#d8d8d8`, `#cccccc`, `#949494`, `#666666`, `#595959`, `#373737`, `#333333`.
- The only non-neutral UI colour measured is the legal-link blue `#2980b9` in the footer sign-up copy.

## Colors

> Source: `web/data/extracted/kiehls.json` (homepage) and `web/data/extracted/kiehls--product.json`
> (Ultra Facial Cream product page). No official colour documentation exists publicly (see SOURCES.json).

### Action
- **Primary** (`{colors.primary}` — `#000000`): every filled button — SHOP NOW, BOOK NOW, add-to-bag, Apply.
- **On primary** (`{colors.on-primary}` — `#ffffff`): button label.
- **Primary hover**: background `#ffffff`, text `#000000`, border stays `1px solid #000000` (measured on the product page).
- **Disabled** (`{colors.disabled}` — `#949494`): text and 1px border of the footer Submit / Sign up buttons before the form is valid, on `#f8f8f8`.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): the page background the viewer sees between banners.
- **Chrome** (`{colors.chrome}` — `#000000`): header, footer and the newsletter block — the largest
  measured background by area (4,798) because the footer is 2,171px tall.
- **Surface soft** (`{colors.surface-soft}` — `#f8f8f8`): chip hover, inactive footer buttons (556 area).
- **Surface grey** (`{colors.surface-grey}` — `#f2f2f2`): product-page panels (983 area on the PDP).
- **Charcoal** (`{colors.charcoal}` — `#333333`): 410 area of background on the homepage.
- **Tile placeholder** (`{colors.tile-placeholder}` — `#777676`): background of the 10px-radius UGC image tiles before images load.

### Text
- **Ink** (`{colors.ink}` — `#000000`): text on the white canvas — headings, product names, prices, select values.
  On the product page it is the most-read colour by far (7,198 chars).
- **On dark** (`{colors.on-dark}` — `#ffffff`): text on the black header, footer and newsletter
  block. On the homepage this is the most-read colour by character count (2,338 vs 1,858 for black),
  because the black footer carries a long block of white copy.
- **Muted** (`{colors.ink-muted}` — `#666666`): "Size" label above selects, footer email label, help copy (256 chars).
- **Breadcrumb** (`{colors.ink-breadcrumb}` — `#373737`): PDP breadcrumb ("Home"); also the site variable `--darkgray-light-10`.
- **Legal link** (`{colors.link-legal}` — `#2980b9`): "Mobile Terms" and similar links in the white sign-up disclaimer.
- **Hover on dark** (`{colors.hover-on-dark}` — `#f8f8f8`): header links shift from `#ffffff` to `#f8f8f8` on hover (measured).

### Borders
- `#000000` — primary button border (1px).
- `#e9e9e9` (`{colors.border-chip}`) — shortcut chips.
- `#cccccc` (`{colors.border-select}`) — size selects.
- `#d8d8d8` (`{colors.border-secondary}`) — "PICK UP AT A NEARBY STORE TODAY".
- `#595959` (`{colors.border-field}`) — footer email field.

### What is not there
No semantic success / error / warning colours were measured on the pages visited, and no official
source documents them, so none are declared. The stylesheet corpus contains many blues, teals and
reds (e.g. `#0176d3`, `#1b96ff`, `#ea001e`) but they sit under `--slds-*` variable references, not in
any storefront element measured here; do not use them for Kiehl's UI.

## Typography

### Font Family
Three families are served from the site's own `@font-face` rules (loaded faces measured: `Roboto 400`,
`Amiri 400`, `Amiri 700`, `Roboto Condensed 700`):

- **Amiri** — headings, banner headlines, product names and taglines. An open-source (OFL-1.1)
  Naskh-style typeface reviving the early-20th-century Bulaq (Amiria) Press type of Cairo
  ([aliftype/amiri](https://github.com/aliftype/amiri)); its Latin is a sturdy, bookish old-style serif
  that echoes the brand's apothecary labels.
- **Roboto** — body copy, chips, selects, footer links (the dominant family: 3,059 chars).
- **Roboto Condensed** — buttons, category nav, utility links, prices, badges, footer headings.
  Both widths come from Google's open-source Roboto family, OFL-1.1
  ([googlefonts/roboto-classic](https://github.com/googlefonts/roboto-classic)).

Only the 700 face of Roboto Condensed is loaded. Elements whose computed weight is 400 (category nav,
utility links, prices) therefore render with the 700 face, which is why the nav reads heavy in the
capture even though its computed `font-weight` is 400.

### Hierarchy

| Token | Family | Size / Weight / Line-height | Use |
|---|---|---|---|
| `display-hero` | Amiri | 44px / 700 / 61.6px | "FALL INTO BETTER SKIN!" hero headline (uppercase copy) |
| `heading-promo` | Amiri | 36px / 700 / 50.4px | "VIRTUAL CONSULTATION" banner headline |
| `heading-section` | Amiri | 32px / 400 / 32px | "SHOP BY CONCERN", "EXPLORE OUR BEST SELLERS" (h2) |
| `heading-section-mobile` | Amiri | 24px / 400 / 24px | same h2 at 390px |
| `heading-product-page` | Amiri | 30px / 700 / 45px | PDP product name (h1) |
| `heading-product-page-mobile` | Amiri | 24px / 700 / 36px | PDP h1 at 390px |
| `subhead-hero` | Amiri | 24px / 400 / 36px | hero sub-line |
| `subhead-promo` | Amiri | 18px / 400 / 27px | "Book a complimentary consultation with a Skin Pro" |
| `product-title` | Amiri | 20px / 700 / 28px | product tile names (h3) |
| `product-tagline` | Amiri | 14px / 400 / 19.6px | "Collagen SPF 50+ Serum" (italic in the capture) |
| `body` | Roboto | 14px / 400 / 22.4px | paragraphs, footer disclaimer |
| `body-sm` | Roboto | 12px / 400 / 18px | base body size, footer links |
| `chip-label` | Roboto | 14px / 400 / 21px | shortcut chip labels |
| `button` | Roboto Condensed | 16px / 700 / 16px, uppercase | all filled buttons |
| `nav-category` | Roboto Condensed | 16px / 400 / 22.4px | category row in the header |
| `nav-utility` | Roboto Condensed | 11px / 400 / 17.6px, uppercase | FIND A STORE, CUSTOMER SERVICE |
| `price` | Roboto Condensed | 20px / 400 / 20px | "$115.00" |
| `concern-label` | Roboto Condensed | 20px / 400 / 26.6px | concern carousel labels |
| `footer-heading` | Roboto Condensed | 14px / 700 / 17.5px, uppercase | CONTACT US, SIGN UP |
| `badge` | Roboto Condensed | 10px / 700 / 12px, uppercase | "$156 VALUE" on black |

The `<body>` base is Roboto 12px/400/18px. Letter-spacing is `normal` everywhere it was measured
(the only exception, 0.13008px on a 13.008px button, belongs to the cookie-consent banner).

### Principles
- Serif = the product's voice: names, headlines, promises. Sans = information. Condensed = commands and numbers.
- Headlines are set in uppercase copy ("FALL INTO BETTER SKIN!", "SHOP BY CONCERN") but with
  `text-transform: none` — the capitals are typed, not styled. Buttons, by contrast, use `text-transform: uppercase`.
- Section titles are regular weight (400) and centred; banner headlines are bold (700) and left-aligned.
- Line-heights follow 1.4× for Amiri headlines (44 → 61.6, 36 → 50.4) and 1.6× for Roboto body (14 → 22.4).

### Note on Font Substitutes
None needed: Amiri, Roboto and Roboto Condensed are all OFL-licensed open-source families and can be
loaded directly. If the Roboto Condensed 400 face is added in a reproduction, the category nav will look
lighter than the real site; to match, load only the 700 face as Kiehl's does.

## Layout

### Spacing System
Measured paddings and gaps cluster on small odd-and-even values rather than a strict 4/8 grid:
2px, 5px, 7px, 8px, 10px, 11px, 12px, 15px, 16px, 20px. The most frequent padding is 10px (64 uses),
then 12px and 15px; gaps are 10px and 8px. Buttons use the asymmetric `11px 12px 10px` padding,
chips `8px 10px`, the breadcrumb `7px 0px`, the footer email field `0px 20px`.

### Grid & Container
- Viewport measured at 1280px; the header and footer run full width (1280px).
- Content blocks (hero copy, chip row, carousels) are inset with roughly equal side gutters; product
  tiles sit four across in the best-seller carousel, each about 270px wide (the size select is 270px).
- The concern carousel bleeds past the left edge (a cropped tile peeks in), signalling horizontal scroll.
- Banners are full-bleed photographs with copy overlaid on the left half.

### Whitespace Philosophy
Generous vertical gaps separate sections (the capture shows large white bands above "SHOP BY CONCERN"
and "EXPLORE OUR BEST SELLERS"), while inside each product tile the stack is dense: name, tagline,
rating, size, price, button with tight spacing — like a printed product label.

## Elevation & Depth

The storefront is flat. Measured shadows are rare and soft:
- `rgba(0, 0, 0, 0.08) 0px 0px 16px 0px` — 3 uses on the homepage.
- `rgb(34, 34, 34) 0px 0px 8px 0px` — 4 uses on the homepage.
- `rgba(0, 0, 0, 0.2) 0px 0px 2px 0px` and `rgba(0, 0, 0, 0.2) 0px 0px 18px 0px` — one each on the product page.
- Secondary button hover adds `rgba(55, 55, 55, 0.9) 0px 0px 2px 0px` (measured).

Depth comes from photography (cast shadows of jars and bottles on grey studio surfaces) and from the
black/white polarity switch between chrome and content — not from layered cards.

## Shapes

### Border Radius Scale

| Token | Value | Where |
|---|---|---|
| `none` | 0px | all buttons, selects, inputs, product tiles, banners |
| `xs` | 2px | small controls on the product page |
| `sm` | 4px | rare (3 uses on the homepage) |
| `tile` | 10px | UGC image tiles |
| `chip` | 20px | shortcut chips ("Virtual Consultation" etc.) |
| `circle` | 50% | chip thumbnails, the round chat button |

### Other shapes
- The add-to-bag buttons show a "LOADING ..." spinner whose `::before` pseudo-element is rotated
  with `transform: matrix(-0.868151, 0.496301, -0.496301, -0.868151, 0, 0)` (white) — a loading
  state, not a decorative shape.
- UGC tiles scale their image layer with `transform: matrix(1.1, 0, 0, 1.1, 0, 0)` (a 1.1× crop).
- The hero image has a slanted white floor line under the products; that is part of the photograph.

## Components

### Buttons
- **Primary** (`button-primary`): `#000000` background, `#ffffff` label, `1px solid #000000` border,
  0px radius, padding `11px 12px 10px`, 39px tall, 170px wide in banners (full tile width — about
  268–275px — under products). Label Roboto Condensed 16px/700/16px uppercase.
- **Primary hover**: background `#ffffff`, label `#000000`; the black border stays, so the button
  becomes an outlined black box.
- **Primary disabled / inactive**: background `#f8f8f8`, label and 1px border `#949494` (footer Submit
  and Sign up before valid input).
- **Secondary** (`button-secondary`): "PICK UP AT A NEARBY STORE TODAY" on the PDP — white background,
  black Roboto 16px/400 label, `1px solid #d8d8d8`, 0px radius, padding 8px, 41px tall; hover adds
  `rgba(55, 55, 55, 0.9) 0px 0px 2px 0px`.

### Chips
`chip`: white background, black Roboto 14px/400/21px label, `1px solid #e9e9e9`, 20px radius,
padding `8px 10px`, 44px tall, a circular 50%-radius thumbnail at the left. Hover changes only the
background to `#f8f8f8` (measured on all five chips).

### Product tile (best sellers)
Measured parts: heart icon top-right; product photo on white with left/right arrows; name in
`product-title` (Amiri 20px/700/28px, centred, two lines); optional tagline `product-tagline`;
star rating with count in parentheses; "Size" label (`#666666`, Roboto 14px) above a `select`;
price in `price` (Roboto Condensed 20px/400/20px); full-width primary button. A black `badge`
("$156 VALUE", Roboto Condensed 10px/700 uppercase) can sit top-left. Tiles have no border, no
radius and no shadow.

### Inputs & Forms
- **Select** (`select`): white, black Roboto 14px text, `1px solid #cccccc`, 0px radius, padding
  `0px 30px 0px 10px`, 40px tall, line-height 40px, chevron on the right.
- **Text input** (`text-input`, footer newsletter email): white on black, `1px solid #595959`,
  0px radius, padding `0px 20px`, 39px tall, Roboto 14px; label "Email" in `#666666`.
- **Header search**: a small white box on black with "Search" in Roboto Condensed 14px and a magnifier.

### Navigation
- **Header** (`nav`): `#000000`, 171px tall at desktop (165px at 390px). Utility links white
  Roboto Condensed 11px uppercase; hover to `#f8f8f8`. Category row Roboto Condensed 16px, centred.
  Centred script wordmark with "SINCE … 1851".
- **Breadcrumb** (`link-breadcrumb`, PDP): `#373737`, Roboto 12px/19.2px, capitalize, padding `7px 0px`.

### Cards — UGC tiles
`ugc-tile`: 235 × 417px, 10px radius, `#777676` placeholder background, image scaled 1.1×. These
are the only rounded image containers on the page.

### Footer
`footer`: `#000000` background, white text. Accordion headings (CONTACT US, Customer Care, About
Kiehl's) in Roboto Condensed — 14px/700/17.5px uppercase for headings, 16px on the toggle buttons
with padding `16px 16px 16px 0px`; links Roboto 12px/400/18px white; sign-up block with
Roboto 14px/22.4px white disclaimer and `#2980b9` legal links; copyright Roboto 12px/19.2px.

## Design System Architecture

Kiehl's publishes **no public design system**: no documentation site, token package, Figma
community kit or brand portal was found. Searches run (recorded in SOURCES.json): "Kiehl's brand
guidelines typography font logo design system", "Kiehl's design system site:kiehls.com OR
site:loreal.com brand identity", "Kiehl's press kit media kit logo download official" and
"\"Kiehl's\" npm design tokens github component library". Only third-party logo and font blogs
appeared, and they were not used. What follows is the de-facto system measurable on the site.

### Token architecture (de-facto)
- There is no visible primitive → semantic → component token tier on the storefront. The site's
  `:root` custom properties are few and mostly belong to embedded third-party code: `--flowplayer-*`
  (e.g. `--flowplayer-blue: #006680`), `--fp-sub-*`, `--esw*` (e.g. `--eswButtonRight: 30px`) and,
  in the stylesheet corpus, `--slds-*` references such as `--slds-g-shadow-outset-focus-1`.
- A small set of site-level names exists: `--black: #010000`, `--darkgray: #1d1d1d`,
  `--darkgray-light-10: #373737`, `--darkgray-light-20: #505050`, `--lightgray: #fdfdfd`,
  `--pink: #f70483`, `--spacing: .9em`, `--vh: 8px`. Of these only `#373737` was found on a measured
  storefront element (the PDP breadcrumb).
- Everything else (black, white, greys, radii) is hard-coded in component CSS; the repeated values
  above are the real "tokens".

### Theming
One light theme only. No dark mode, high-contrast mode or density switch was found; the black
header/footer are fixed chrome, not a theme.

### Type & spacing systems
Three families with fixed roles (Amiri / Roboto / Roboto Condensed). Sizes step 10 · 11 · 12 · 13 ·
14 · 16 · 18 · 20 · 24 · 28 · 30 · 32 · 36 · 44px (homepage + PDP). At 390px headings drop
(h2 32 → 24px, PDP h1 30 → 24px) while body (14px) and buttons (16px) stay. Spacing has no strict
base unit; 10px is the most frequent padding.

### Component model (observed inventory)
Primary button (default / hover / disabled / loading), secondary button, shortcut chip, select,
text input, product tile, badge, UGC tile, carousel with bar pagination, header with utility row +
category row + search, breadcrumb, accordion footer with newsletter sign-up, round chat launcher.

### Accessibility (observed, not mandated by any published rule)
- A visually hidden h1 ("Kiehl's Homepage", `clip-path: inset(50%)`, 1×1px) and "Skip to content" /
  "Skip to footer navigation" links exist for assistive tech.
- Black on white (`#000000` / `#ffffff`) gives maximum contrast for every action. The disabled
  `#949494` on `#f8f8f8` is deliberately low.
- Chips are 44px tall; primary buttons 39px.

### Delivery
No npm package, framework kit or Figma library is published. Fonts are open-source:
[Amiri (OFL-1.1)](https://github.com/aliftype/amiri) and
[Roboto / Roboto Condensed (OFL-1.1)](https://github.com/googlefonts/roboto-classic).

## Do's and Don'ts

### Do
- Use `#000000` filled, square (0px) buttons with white Roboto Condensed 16px/700 uppercase labels, 39px tall, padding `11px 12px 10px`.
- Invert on hover: white fill, black text, keep the 1px black border.
- Set headlines and product names in Amiri; keep section titles at 32px/400 and banner headlines at 700.
- Type headline copy in capitals rather than using `text-transform`.
- Frame pages with a black header and black footer; keep the content canvas white.
- Let product photography supply all colour; keep UI strictly black, white and neutral grey.
- Use the 20px-radius chip for quick links and 10px only for UGC imagery.
- Write microcopy plainly and commercially: "SHOP NOW", "BOOK NOW", "Discover our best-selling formulas below".

### Don't
- Don't round buttons, selects, inputs or product tiles.
- Don't introduce a brand accent colour for actions — there is none.
- Don't use the `--slds-*` blues/reds or `--pink: #f70483` in storefront UI; none appear on measured elements.
- Don't add drop shadows to product tiles or banners.
- Don't set body copy in Amiri or headlines in Roboto.
- Don't add letter-spacing; it is `normal` throughout.
- Don't load Roboto Condensed 400 if you want the nav to match; the site serves only 700.

## Responsive Behavior

### Breakpoints
Measured at 1280px (desktop) and 390px (mobile). Intermediate breakpoints were not measured.

### What changes at 390px
- Header: 171px → 165px tall; the utility row shows FIND A STORE and MY BAG plus a search field.
- Section h2: Amiri 32px/400/32px → 24px/400/24px.
- PDP h1: Amiri 30px/700/45px → 24px/700/36px.
- Body stays Roboto 14px/400/22.4px; the primary button stays 16px, 39px tall, 170px wide.
- Mobile font sizes by frequency: 14px, 12px, 24px, 16px, 11px, 18px, 10px, 13px.

### Touch Targets
Chips 44px; primary buttons 39–40px; selects 40px; footer accordion toggles have 16px padding.

### Collapsing Strategy
Carousels (concern, best sellers) scroll horizontally with partially visible tiles at desktop;
banner reflow at 390px was not captured, so it is not specified here.

### Image Behavior
Product shots are cut-out packshots on white (tiles) or styled still-lifes on light grey (concern
carousel); banners are wide studio photographs.

## Iteration Guide

1. Start with the frame: black 171px header, white canvas, black footer.
2. Load Amiri 400/700, Roboto 400 and Roboto Condensed 700 only.
3. Build `button-primary` first (black, square, 39px, `11px 12px 10px`, inverted hover) — it is used for every action.
4. Set the heading ladder: 44/700 hero, 36/700 promo, 32/400 section, 20/700 product, 14px Roboto body.
5. Add the chip row (20px radius, `#e9e9e9` border, `#f8f8f8` hover) under the hero.
6. Build product tiles: Amiri name, stars, `#cccccc` select, Roboto Condensed price, full-width black button.
7. Compare against the capture: if anything is coloured that is not a photograph, remove the colour.
8. Check mobile: h2 24px, PDP h1 24px, body unchanged.
