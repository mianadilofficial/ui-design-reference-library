---
version: alpha
name: Harry's
category: "Beauty & Personal Care"
description: "Harry's runs a Shopify Hydrogen storefront built with Tailwind tokens: a light grey #f7f7f7 canvas, navy #001d48 text in TTCommonsProVariable (28px/600 headings with 0.9px tracking, 16px/23.68px body with 0.5px tracking), Harry's orange #d44316 primary buttons (hover #be3d15) and royal blue #0626a9 secondary buttons with 4px corners and 2px-tracked uppercase labels, white 8px-radius product cards, pale-blue #eef6fb pill badges and a #ededed footer."

colors:
  primary: "#d44316"
  primary-hover: "#be3d15"
  secondary: "#0626a9"
  secondary-hover: "#06218f"
  hero-blue: "#001d48"
  hero-blue-hover: "#00173a"
  purchase: "#00825b"
  purchase-hover: "#0b5c49"
  on-primary: "#ffffff"
  canvas: "#f7f7f7"
  surface: "#ffffff"
  ink: "#001d48"
  gray-1: "#4e4e4e"
  gray-2: "#666666"
  gray-3: "#868686"
  gray-4: "#bfbfbf"
  gray-5: "#dddddd"
  gray-6: "#ededed"
  special-1: "#eef6fb"
  special-2: "#fff4f1"
  special-3: "#eefcf8"
  tertiary-2: "#a01a00"
  tertiary-3: "#e0a529"
  secondary-1: "#0084d6"
  input-border: "#949596"
  scrim: "#14141480"

typography:
  display-pdp:
    fontFamily: "TTCommonsProVariable, \"TTCommonsProVariable Fallback: Arial\", \"TTCommonsProVariable Fallback: Helvetica Neue\", sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 64.32px
    letterSpacing: 1.5px
  heading:
    fontFamily: "TTCommonsProVariable, \"TTCommonsProVariable Fallback: Arial\", \"TTCommonsProVariable Fallback: Helvetica Neue\", sans-serif"
    fontSize: 28px
    fontWeight: 600
    lineHeight: 40.32px
    letterSpacing: 0.9px
  heading-sm:
    fontFamily: "TTCommonsProVariable, \"TTCommonsProVariable Fallback: Arial\", \"TTCommonsProVariable Fallback: Helvetica Neue\", sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 31.68px
    letterSpacing: 0.9px
  product-title-mobile:
    fontFamily: "TTCommonsProVariable, \"TTCommonsProVariable Fallback: Arial\", \"TTCommonsProVariable Fallback: Helvetica Neue\", sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: 0.5px
  subheading:
    fontFamily: "TTCommonsProVariable, \"TTCommonsProVariable Fallback: Arial\", \"TTCommonsProVariable Fallback: Helvetica Neue\", sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 24.48px
    letterSpacing: 0.5px
  body:
    fontFamily: "TTCommonsProVariable, \"TTCommonsProVariable Fallback: Arial\", \"TTCommonsProVariable Fallback: Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 23.68px
    letterSpacing: 0.5px
  body-sm:
    fontFamily: "TTCommonsProVariable, \"TTCommonsProVariable Fallback: Arial\", \"TTCommonsProVariable Fallback: Helvetica Neue\", sans-serif"
    fontSize: 15px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.5px
  body-xs:
    fontFamily: "TTCommonsProVariable, \"TTCommonsProVariable Fallback: Arial\", \"TTCommonsProVariable Fallback: Helvetica Neue\", sans-serif"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 23.66px
    letterSpacing: 0.5px
  legal:
    fontFamily: "TTCommonsProVariable, \"TTCommonsProVariable Fallback: Arial\", \"TTCommonsProVariable Fallback: Helvetica Neue\", sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 16.28px
    letterSpacing: 0.5px
  button-l:
    fontFamily: "\"Styrene A\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
    letterSpacing: 2px
  button-m:
    fontFamily: "TTCommonsProVariable, \"TTCommonsProVariable Fallback: Arial\", \"TTCommonsProVariable Fallback: Helvetica Neue\", sans-serif"
    fontSize: 13px
    fontWeight: 700
    lineHeight: 16px
    letterSpacing: 2px
  button-s:
    fontFamily: "TTCommonsProVariable, \"TTCommonsProVariable Fallback: Arial\", \"TTCommonsProVariable Fallback: Helvetica Neue\", sans-serif"
    fontSize: 10px
    fontWeight: 700
    lineHeight: 16px
    letterSpacing: 2px
  input:
    fontFamily: "TTCommons, Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 700

rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 12px
  xl: 16px
  pill: 9999px
  circle: 50%

spacing:
  xxs: 2px
  xs: 4px
  sm: 8px
  md: 12px
  base: 16px
  lg: 24px
  xl: 32px
  xxl: 40px
  section: 80px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-m}"
    rounded: "{rounded.sm}"
    padding: 4px 8px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-m}"
    rounded: "{rounded.sm}"
  button-primary-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-s}"
    rounded: "{rounded.sm}"
    padding: 4px
    height: 32px
  button-primary-disabled:
    backgroundColor: "{colors.gray-5}"
    textColor: "{colors.gray-2}"
    rounded: "{rounded.sm}"
  button-secondary:
    backgroundColor: "{colors.secondary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-m}"
    rounded: "{rounded.sm}"
    padding: 4px 8px
    height: 40px
  button-secondary-hover:
    backgroundColor: "{colors.secondary-hover}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.sm}"
  button-signup:
    backgroundColor: "{colors.secondary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-l}"
    rounded: "{rounded.sm}"
    height: 48px
  option-tile:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 8px 4px
    height: 64px
    border: "1px solid {colors.secondary}"
  badge:
    backgroundColor: "{colors.special-1}"
    textColor: "{colors.secondary}"
    typography: "{typography.legal}"
    rounded: "{rounded.xl}"
    padding: 0 8px
    height: 24px
  product-card:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 16px
  text-input:
    backgroundColor: "{colors.surface}"
    textColor: "#000000"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 0px 0px 0px 16px
    height: 44px
    border: "1px solid {colors.input-border}"
  promo-bar:
    backgroundColor: "{colors.secondary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-xs}"
  nav:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    height: 56px
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.body-xs}"
  footer:
    backgroundColor: "{colors.gray-6}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    border: "1px solid {colors.gray-4}"
---

## Overview

Harry's storefront (`harrys.com/en/`) is a friendly, orderly men's-grooming shop: a light grey `#f7f7f7` page, white product cards with 8px corners, deep navy `#001d48` type, and two vivid brand colours that map straight onto the products — **Harry's orange** `#d44316` (the orange razor handle, and every primary "SHOP NOW" / "ADD" / "SELECT" button) and **royal blue** `#0626a9` (the blue bottles and packaging, the promo bar, the email sign-up button, badges and secondary buttons).

Everything is set in **TT Commons Pro** (served as `TTCommonsProVariable`, with metric-matched Arial/Helvetica Neue fallbacks declared via `size-adjust`), with a gentle 0.5px tracking on body copy and 0.9px on 28px headings. Buttons use bold uppercase labels with very open 2px tracking. A second face, **Styrene A**, is self-hosted for the large email sign-up button.

The capture shows: a blue promo bar ("Unlock 5% off sitewide by signing up for any subscription"), a white header with the navy HARRY'S wordmark, ABOUT ▾, US flag, SIGN IN, search and cart, a category row in which "Start Shave Trial" is highlighted in red `#a01a00`, a dark atmospheric hero ("Confidence, Distilled.") with a "SHOP NOW" button, a "Keep in Touch" email modal over a 50% scrim, then "Best Sellers" as a carousel of white cards (pale-blue pill badge, packshot on light grey, star rating in gold, name, price, an info "i" icon and an orange "ADD"/"SELECT"), "Choose Your Razor" with two large 16px-radius grey cards (HARRY'S PLUS / HARRY'S ORIGINAL) each with an orange SHOP NOW, and "Shop By Category" photo tiles in saturated bathroom scenes.

**Key Characteristics:**
- Grey `#f7f7f7` canvas with white cards; navy `#001d48` text.
- Orange `#d44316` for buying, blue `#0626a9` for brand/secondary actions.
- TT Commons Pro 600 headings with positive tracking; 0.5px tracking on all body sizes.
- 4px-radius buttons with 2px-tracked uppercase labels; 8px cards; 16px feature cards; pill badges.
- A full semantic Tailwind token vocabulary (`bg-button-primary`, `hover:bg-button-hover-primary`, `typography-button-s`, `h-md`, `ring-p-focus`).

### Art Direction (from the capture)
- Product colour is brand colour: blue bottles and tubes, orange and blue razor handles, so photography and buttons share one palette.
- Packshots sit upright and centred on very light grey squares inside white cards — consistent scale, no props.
- Lifestyle/category photography is close-up and saturated: green subway tiles, blue water, olive walls, warm amber light in the hero.
- The razor chooser uses studio shots of handles on a pale grey gradient, cropped so the handle runs off the bottom edge.
- Ratings use gold stars with a small grey count in parentheses.
- Section titles are centred with a one-line grey subtitle below.
- The email modal is split: white form panel left with a blue title "Keep in Touch", product photo right, circular outlined close button.
- Icons are simple line icons in navy (search, cart, info "i").

## Colors

### Brand & Accent
- **Orange** (`{colors.primary}` — `#d44316`): `bg-button-primary` / `bg-secondary-3`; primary purchase buttons. Hover `{colors.primary-hover}` `#be3d15` (`hover:bg-button-hover-primary`).
- **Royal Blue** (`{colors.secondary}` — `#0626a9`): `bg-primary-1` / `bg-button-secondary`; promo bar, sign-up and "ADD BLADES TO CART" buttons, badge text, outlined option tiles, focus ring (`ring-primary-1`). Hover `{colors.secondary-hover}` `#06218f`.
- **Hero Navy** (`{colors.hero-blue}` — `#001d48`): `bg-primary-2` / `bg-button-hero-blue`; also the main text colour. Hover `{colors.hero-blue-hover}` `#00173a`.
- **Purchase Green** (`{colors.purchase}` — `#00825b`): `bg-button-purchase`, hover `{colors.purchase-hover}` `#0b5c49`.
- **Red** (`{colors.tertiary-2}` — `#a01a00`): highlighted nav item ("Start Shave Trial").
- **Gold** (`{colors.tertiary-3}` — `#e0a529`): `bg-tertiary-3` accents.
- **Sky** (`{colors.secondary-1}` — `#0084d6`).

### Surface
- **Canvas** (`{colors.canvas}` — `#f7f7f7`): `bg-neutral-2`; `body` background (9959 weighted area units).
- **Surface** (`{colors.surface}` — `#ffffff`): `bg-neutral-1`; cards, header.
- **Footer Grey** (`{colors.gray-6}` — `#ededed`).
- **Special 1** (`{colors.special-1}` — `#eef6fb`): pill badges. **Special 2** (`{colors.special-2}` — `#fff4f1`), **Special 3** (`{colors.special-3}` — `#eefcf8`): tinted panels.
- **Scrim** (`{colors.scrim}` — `#14141480`): behind the email modal.

### Text
- **Ink** (`{colors.ink}` — `#001d48`): headings, body, nav (`text-primary-2`).
- **Gray 1** (`{colors.gray-1}` — `#4e4e4e`), **Gray 2** (`{colors.gray-2}` — `#666666`): secondary copy; **Gray 3** (`{colors.gray-3}` — `#868686`).
- **On Primary** (`{colors.on-primary}` — `#ffffff`).

### Borders
- **Gray 4** (`{colors.gray-4}` — `#bfbfbf`): footer border, scrollbar thumb (`--scrollbar-thumb: #BFBFBF`).
- **Gray 5** (`{colors.gray-5}` — `#dddddd`): `bg-button-inactive` (disabled buttons).
- **Input Border** (`{colors.input-border}` — `#949596`).

## Typography

### Font Family
- **TT Commons Pro** — served as `TTCommonsProVariable` (via a Fonts.net kit), declared as `--font-primary` and `--font-secondary`; fallbacks `"TTCommonsProVariable Fallback: Arial"` (`size-adjust: 95.7827%`) and `"TTCommonsProVariable Fallback: Helvetica Neue"` (`size-adjust: 94.8889%`). 2379 weighted chars on the homepage.
- **Styrene A** — self-hosted in `custom-font-*.css`; used for the large sign-up button.
- **TTCommons** — email input.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Theme class / use |
|---|---|---|---|---|---|
| `{typography.display-pdp}` | 48px | 600 | 64.32px | 1.5px | `text-header-2` — PDP "WHAT'S GOOD ABOUT IT" |
| `{typography.heading}` | 28px | 600 | 40.32px | 0.9px | `text-header-4` — h1 "Confidence, Distilled.", "Best Sellers", "HARRY'S PLUS" |
| `{typography.heading-sm}` | 24px | 600 | 31.68px | 0.9px | `text-header-5` — PDP h1, mobile section h2 |
| `{typography.product-title-mobile}` | 20px | 600 | 24px | 0.5px | `text-header-6` — PDP h1 at 390px |
| `{typography.subheading}` | 18px | 600 | 24.48px | 0.5px | `text-header-7` — PDP h2 (blue) |
| `{typography.body}` | 16px | 400 | 23.68px | 0.5px | `text-body-1` — body, nav, cards |
| `{typography.body-sm}` | 15px | 500 | 24px | 0.5px | `text-body-2` — quantities |
| `{typography.body-xs}` | 13px | 500 | 23.66px | 0.5px | `text-body-4` — promo bar link |
| `{typography.legal}` | 11px | 400 | 16.28px | 0.5px | `text-body-5` — consent copy, badges |
| `{typography.button-l}` | 16px | 700 | 16px | 2px | `typography-button-l` — sign-up |
| `{typography.button-m}` | 13px | 700 | 16px | 2px | `typography-button-m` — SHOP NOW, ADD TO CART |
| `{typography.button-s}` | 10px | 700 | 16px | 2px | `typography-button-s` — ADD / SELECT in cards |
| `{typography.input}` | 16px | 700 | — | — | Email input |

The theme's full scale (from `app-*.css`): `text-header-0` 4.5rem … `text-header-8` 1rem (600 weight; 1.5px tracking from header-0 to header-3, 0.9px for 4–5, 0.5px for 6–8); `text-body-0` 1.125rem … `text-body-5` .6875rem (0.5px); `text-subtitle-0…3` (600, 2px tracking); `text-link-1…3`; `text-button-s` .625rem/2px.

### Principles
- Headings are 600 and title case ("Best Sellers", "Choose Your Razor"), with occasional uppercase product lines ("HARRY'S PLUS").
- All text carries positive tracking; buttons 2px.
- Uppercase is limited to buttons, nav utility links (ABOUT, SIGN IN) and product-line headings.

### Note on Font Substitutes
TT Commons Pro is a commercial TypeType family ("a versatile geometric sans serif", 104 styles, 2 variable fonts). Harry's own fallback strategy is metric-adjusted Arial/Helvetica Neue — use the same `size-adjust` overrides if the variable font is unavailable. Styrene A is a commercial typeface; substitute TT Commons Pro 700 at the same size and 2px tracking.

## Layout

### Spacing System
Measured gaps: 8px (114), 16px (77), 4px (20), 12px, 32px, 80px; paddings: 16px (40), 4px (35), 2px (30), 8px, 24px, 80px (section), 32px, 40px. Tailwind's 4px grid with named tokens (`gap-button-gap-md` .5rem, `py-inputs-height-sm` .25rem, `py-inputs-height-lg` 1rem, `px-button-padding-left-right-md/lg/xl` .25/.5/1rem, `px-2xs` .5rem, `my-s` 1rem).
- `{spacing.xxs}` 2px · `{spacing.xs}` 4px · `{spacing.sm}` 8px · `{spacing.md}` 12px · `{spacing.base}` 16px · `{spacing.lg}` 24px · `{spacing.xl}` 32px · `{spacing.xxl}` 40px · `{spacing.section}` 80px.

### Grid & Container
- Content column ~1120px wide at 1280px (the "Best Sellers" h2 is 1120px wide), centred.
- Product carousel cards 272px wide, 471px tall, 16px padding.
- Razor chooser: two equal 16px-radius cards; category row: four photo tiles.
- `--height-nav` is 3rem, increasing to 4rem and 6rem at larger breakpoints.

### Whitespace Philosophy
Comfortable and retail-standard: 80px between sections, 16px inside cards, centred section titles with a one-line subtitle ("Designed and formulated for quality.").

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat on `#f7f7f7` | Cards, tiles |
| 1 | `rgba(0, 0, 0, 0.15) 1px 2px 6px 0px` | One floating element on the homepage |
| Scrim | `#14141480` | Email modal |

Cards rely on white-on-grey contrast rather than shadow.

## Shapes

### Border Radius Scale
- `{rounded.xs}` 2px — email input.
- `{rounded.sm}` 4px — every button (`rounded-sm` .25rem), option tiles.
- `{rounded.md}` 8px — product cards (`rounded-md` .5rem).
- `{rounded.lg}` 12px — PDP panels (`rounded-lg` .75rem).
- `{rounded.xl}` 16px — razor cards and pill badges (`rounded-xl` 1rem).
- `{rounded.pill}` 9999px — fully rounded elements (measured as 1000px and 9999px).
- `{rounded.circle}` 50% — info icons, carousel dots.

### Photography Geometry
Packshots centred on pale grey squares inside white cards; lifestyle and category photography is saturated and moody (green tiles, blue water, warm bathroom light) with the product in focus.

## Components

### Buttons
- **Primary** (`bg-button-primary text-neutral-1 hover:bg-button-hover-primary rounded-sm`): orange fill, white `{typography.button-m}` uppercase, padding 4px 8px, 40px (`h-lg`); hover `#be3d15`.
- **Primary small** (card ADD/SELECT): `{typography.button-s}`, padding 4px, 32px (`h-md`), `min-w-24`.
- **Secondary** (`bg-button-secondary`): blue fill, white label; hover `#06218f`. "WRITE A REVIEW"/"SHOW MORE" variants measure padding 12px 24px with a 1px blue border.
- **Sign-up** (`typography-button-l h-xl`): blue, Styrene A 16px/700, 2px tracking, 48px.
- **Disabled**: `bg-button-inactive` `#ddd` with `text-gray-2` `#666`.
- Focus: `focus-visible:ring-2 focus-visible:ring-p-focus` with `ring-offset-t-background`.

### Cards & Containers
- **Product card**: white, 8px radius, 16px padding; pill badge top-left; packshot on grey; gold stars + review count; name; price; info icon + orange button row.
- **Razor chooser card**: light grey gradient, 16px radius, uppercase 28px navy title, one-line subtitle, large product photo, orange SHOP NOW anchored at the bottom.
- **Category tile**: photo with white title overlaid at the top.

### Inputs & Forms
- **Email input**: white, 1px `#949596` border, 2px radius, 16px left padding, 44px.
- **Option tile** (PDP, "4 blades $3.75/EA"): white, 1px blue border, 4px radius, padding 8px 4px, 64px.

### Navigation
- Promo bar: blue `#0626a9`, white 13px text with underlined link.
- Header: white, 56px; wordmark left, utilities right (ABOUT ▾, flag + US, SIGN IN, search, cart).
- Category row: centred 13–14px links, "Start Shave Trial" in red.
- Mobile header 48px.

### States (from shipped classes)
- Hover: primary `#d44316 → #be3d15`; secondary `#0626a9 → #06218f`; hero navy `#001d48 → #00173a`; purchase `#00825b → #0b5c49`.
- Text-link hover utilities: `hover:text-primary-1` (`#0626a9`), `hover:text-tertiary-2` (`#a01a00`), `hover:no-underline`.
- Disabled: `#ddd` fill, `#666` text, hover locked to the same values.
- Focus: 2px ring in the `p-focus` colour with a `t-background` offset; peer inputs use `ring-primary-1` with `ring-offset-2`.
- An opacity hover utility (`hover:opacity-90`) is also defined.

### Pills, Tags, and Chips
- **Badge**: `bg-special-1 text-primary-1 body-5m rounded-xl h-sm px-2xs` — pale blue pill, blue 11px/500 text, 24px tall, 8px side padding ("Dermatologist Tested", "Best Seller [U+2605]").

### Signature Components
- Product-coloured CTAs (orange razor → orange button).
- Razor chooser module.
- Email capture modal (split layout: form left, product photo right, round close button).

### Content Patterns
- Card footer row: circular info icon on the left, orange action button on the right.
- Price formatting: "$10", "$9" on cards; "$3.75/EA" unit price inside option tiles on the PDP.
- PDP purchase stack: orange "ADD TO CART" then blue "ADD BLADES TO CART - $15.00" cross-sell.
- Badge copy is a short claim or status ("Dermatologist Tested", "Best Seller [U+2605]", "No Parabens or Sulfates").
- Footer opens with "Keep in Touch" and a newsletter field before link columns.

## Design System Architecture

Harry's does not publish a public design-system site, token package or Figma kit (WebSearch was unavailable for part of this research session, so the search log is incomplete — see SOURCES.json). The architecture below is read directly from Harry's shipped storefront code.

- **Platform**: a Shopify Hydrogen storefront (the page payload references `hydrogenSubchannelId`); styles are Vite-hashed bundles `https://www.harrys.com/assets/app-CAhqxak_.css`, `index-Mxs2DYxu.css` and `custom-font-BF-lCpJ0.css`, plus a Fonts.net kit for TT Commons Pro.
- **Token architecture**: Tailwind CSS (v3-style `--tw-*` preflight) with a custom theme whose names form the token tiers:
  - *Primitive palette*: `primary-1` `#0626a9`, `primary-2` `#001d48`, `secondary-1` `#0084d6`, `secondary-3` `#d44316`, `secondary-5` `#00825b`, `tertiary-2` `#a01a00`, `tertiary-3` `#e0a529`, `tertiary-5` `#d5d7d7`, `neutral-1` `#fff`, `neutral-2` `#f7f7f7`, `gray-1…6`, `special-1…3`, `special-highlight` `#e1e7ea`, `product-1…7`, `scent-1…6`.
  - *Semantic/component*: `button-primary`, `button-hover-primary`, `button-secondary`, `button-hover-secondary`, `button-purchase`, `button-hover-purchase`, `button-hero-blue`, `button-hover-hero-blue`, `button-inactive`, `button-facebook`; spacing tokens `button-gap-md`, `inputs-height-sm/lg`, `button-padding-left-right-md/lg/xl`, sizes `h-sm/md/lg/xl` (1.5/2/2.5/3rem); ring tokens `p-focus`, `t-background`.
  - *Typography utilities*: `typography-button-s/m/l`, `text-header-0…8`, `text-body-0…5`, `text-subtitle-0…3`, `text-link-1…3`, `body-5m`; font roles `font-display` → `var(--font-primary)`, `font-body` → `var(--font-secondary)`.
- **Runtime variables**: `--font-primary`, `--font-secondary`, `--height-nav` (3rem → 4rem → 6rem), `--screen-height`, `--screen-height-dynamic`, `--scrollbar-thumb`, `--scrollbar-track`. Third-party widgets bring their own (`--oke-*` from the Okendo reviews stylesheets loaded on the page, themed with `--oke-button-backgroundColor: #0626a9`; `--atlas-*` from another embedded widget).
- **Component model**: a shadcn-style button recipe visible in markup — `inline-flex items-center uppercase justify-center whitespace-nowrap ring-offset-t-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-p-focus disabled:pointer-events-none rounded-sm gap-button-gap-md` + variant (`bg-button-primary` / `bg-button-secondary`) + size (`h-md typography-button-s` / `h-lg typography-button-m` / `h-xl typography-button-l`). Badges use `bg-special-1 text-primary-1 body-5m rounded-xl h-sm`.
- **Theming**: light only; product- and scent-specific colours (`product-*`, `scent-*`) are applied per product rather than as themes.
- **Accessibility**: "Skip to content" link first; 2px focus ring on `:focus-visible` via `ring-p-focus` with offset; disabled states use `#ddd`/`#666`. Card buttons are 32px tall, primary 40px, sign-up 48px.
- **Delivery**: compiled hashed assets only; no public npm package or versioning.

## Do's and Don'ts

### Do
- Use orange `#d44316` for buying actions and blue `#0626a9` for brand/secondary actions.
- Set text in TT Commons Pro with 0.5px tracking; headings 600 with 0.9px.
- Keep buttons 4px-radius with 2px-tracked uppercase labels in three sizes (32/40/48px).
- Put products on white 8px cards over the `#f7f7f7` page.
- Use pale-blue pill badges for claims ("Dermatologist Tested").

### Don't
- Don't use pure black text; navy `#001d48` is the ink.
- Don't make buttons pills or square; 4px only.
- Don't use orange for decorative backgrounds.
- Don't drop the letter-spacing; tracking is part of the voice.
- Don't add heavy shadows to cards.

## Responsive Behavior

### Breakpoints
Measured changes at 390px: section h2 24px/31.68px, PDP h1 20px/24px, nav 48px, hero h1 stays 28px.

### Touch Targets
- Primary buttons 40px, card buttons 32px, sign-up 48px, email input 44px, option tiles 64px.

### Collapsing Strategy
- Mobile header is 48px tall (desktop 56px).
- Carousels show dots beneath (five dots on the homepage).

### Image Behavior
Hero uses full-bleed photography with left-aligned text; category tiles crop to squares.

### Motion
- Buttons carry Tailwind's `transition-all` class for hover colour changes.
- Carousel slides with dot pagination.

### Voice & Microcopy
- Warm, plain-spoken: "Confidence, Distilled.", "Designed and formulated for quality.", "Keep in Touch", "NO, THANKS".
- Prices are short ("$10"); claims are factual ("No Parabens or Sulfates").

## Iteration Guide

1. `#f7f7f7` page, navy `#001d48` TT Commons Pro 16px/23.68px with 0.5px tracking.
2. Blue promo bar, white 56px header, category row with one red highlight.
3. Section titles 28px/600/40.32px, 0.9px tracking, centred.
4. White 8px cards, pill badges, gold stars, orange 32px ADD buttons.
5. Primary orange 40px buttons with 13px/700/2px labels; hover `#be3d15`.
6. `#ededed` footer with a `#bfbfbf` top border.

### Measurement Notes
- `textColorsByChars[0]` on the homepage is `#ffffff` (980 chars) because the email modal's consent text and the blue promo bar are white; the readable page ink is navy `#001d48` (716 chars on the homepage, 2772 on the product page), so `{colors.ink}` is navy and white is `{colors.on-primary}`.
- The extractor's primary CTA was the email modal's "SIGN ME UP"; `_roleOverrides.ctaPrimary` points to the page's orange "SHOP NOW" (`bg-button-primary`). The modal button is still documented as `button-signup`.
- Hover colours come from the shipped Tailwind classes on those elements (`hover:bg-button-hover-primary`, `hover:bg-button-hover-secondary`); `desktop.hover` was empty.

### Prompting Checklist
- "Light grey #f7f7f7 page, white 8px cards, navy #001d48 TT Commons Pro text with 0.5px tracking."
- "Orange #d44316 primary buttons (hover #be3d15), blue #0626a9 secondary, 4px radius, uppercase 2px tracking."
- "Button sizes: 32px (10px label), 40px (13px label), 48px (16px label)."
- "Pale-blue #eef6fb pill badges with blue 11px text."
- "Centred 28px/600 section titles with 0.9px tracking."
- "Blue promo bar; #ededed footer with #bfbfbf border."
