---
version: alpha
name: Awwwards
category: "Agencies & Studios"
description: "Awwwards' gallery-like, near-monochrome system — Inter Tight everywhere (600 for uppercase 112.31px display, 300 for 14px/28px body), #222222 ink and buttons on a #f8f8f8 canvas, 8px button radius, 14px card radius, a floating dark #222222cc dock, and a single #fa5d29 orange reserved for Academy offers and errors."

colors:
  primary: "#222222"
  primary-hover: "#383838"
  on-primary: "#ffffff"
  canvas: "#f8f8f8"
  ink: "#222222"
  surface-white: "#ffffff"
  surface-card: "#ffffffe6"
  surface-gray: "#e9e9e9"
  surface-soft: "#ededed"
  hairline: "#ededed"
  toggle-off: "#dedede"
  ink-muted: "#a7a7a7"
  ink-half: "#22222280"
  dock: "#222222cc"
  dock-item: "#3e3e3e"
  dock-border: "#4e4e4e"
  dock-border-hover: "#a7a7a7"
  dock-text: "#dedede"
  pricing-dark: "#272829"
  orange: "#fa5d29"
  connect: "#ff602c"
  notification: "#ff9667"
  learn: "#fff083"
  inspire: "#aaeec4"
  awards: "#502bd8"
  jobs: "#74bcff"
  blue: "#49b3fc"
  featured: "#f8f0ee"
  academy-sand: "#efe8de"
  alert-green: "#e0f4d9"

typography:
  display-hero:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 112.31px
    fontWeight: 600
    lineHeight: 112.31px
    letterSpacing: normal
  display-hero-mobile:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 42px
    fontWeight: 600
    lineHeight: 42px
    letterSpacing: normal
  display-academy:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 67.8592px
    fontWeight: 600
    lineHeight: 67.8592px
  section-title:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 39.1831px
    fontWeight: 600
    lineHeight: 47.0197px
    letterSpacing: normal
  section-title-mobile:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 26px
    fontWeight: 600
    lineHeight: 31.2px
  card-title-lg:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 28px
  card-title:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 20.1972px
    fontWeight: 600
    lineHeight: 24.2366px
  lead:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 20.1972px
    fontWeight: 400
    lineHeight: 28px
  title-sm:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 18px
  body-lg:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 28px
  body-md:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 300
    lineHeight: 18px
  body:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 28px
    letterSpacing: normal
  label:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 42px
  button-lg:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 60px
  button-cta-xl:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 28px
  button-compact:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 600
    lineHeight: 60px
  dock-link:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 28px
  input:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 13.3px
    fontWeight: 400
  caption:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 300
    lineHeight: 12px
  badge:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 11px
    fontWeight: 600
    lineHeight: 18px
  micro:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 10.5px
    fontWeight: 300
    lineHeight: 10.5px
  sup-pro:
    fontFamily: "\"Inter Tight\", Inter, Helvetica, Arial, sans-serif"
    fontSize: 7px
    fontWeight: 500
    lineHeight: 14px

rounded:
  small: 4px
  normal: 8px
  md: 12px
  card: 14px
  large: 16px
  full: 72px
  circle: 50%

spacing:
  xxs: 4px
  xs: 6px
  sm: 8px
  md: 12px
  lg: 16px
  gutter: 20px
  button-pad: 24px
  xl: 30px
  xxl: 32px
  pad-inner: 52px
  header-height: 71px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.normal}"
    padding: 0px 20px
    height: 42px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.normal}"
    padding: 0px 20px
    height: 42px
  button-outlined:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    border: "1px solid #222222"
    typography: "{typography.button}"
    rounded: "{rounded.normal}"
    padding: 0px 20px
    height: 42px
  button-outlined-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.normal}"
    padding: 0px 20px
    height: 42px
  button-secondary:
    backgroundColor: "{colors.surface-gray}"
    textColor: "{colors.ink}"
    typography: "{typography.button-compact}"
    rounded: "{rounded.normal}"
    padding: 0px 15.6px
    height: 60px
  button-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.normal}"
    padding: 0px 48px
    height: 60px
  button-filter-reset:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.normal}"
    padding: 0px 24px
    height: 42px
  button-filter-reset-hover:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink}"
  button-academy-offer:
    backgroundColor: "{colors.orange}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-cta-xl}"
    rounded: "{rounded.normal}"
    padding: 0px 60px
    height: 72px
  button-academy-offer-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    height: 54px
  nav-link-hover:
    textColor: "{colors.ink}"
    opacity: 0.7
  search-field:
    backgroundColor: "{colors.surface-soft}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 0px 0px 0px 38px
    height: 42px
  dock:
    backgroundColor: "{colors.dock}"
    textColor: "{colors.dock-text}"
    typography: "{typography.dock-link}"
  dock-link:
    backgroundColor: transparent
    textColor: "{colors.dock-text}"
    border: "1px solid #4e4e4e"
    typography: "{typography.dock-link}"
    rounded: "{rounded.normal}"
    height: 48px
  dock-link-hover:
    textColor: "{colors.dock-text}"
    border: "1px solid #a7a7a7"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card-course:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    typography: "{typography.body-md}"
    rounded: "{rounded.card}"
    padding: 0px
  card-pricing-dark:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.card}"
  card-pricing-light:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.card}"
  cookie-banner:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.normal}"
    padding: 30px
  badge-special-offer:
    backgroundColor: "{colors.learn}"
    textColor: "{colors.ink}"
    typography: "{typography.badge}"
  footer:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
---

## Overview

Awwwards presents itself as a gallery, not a product. The homepage opens on a
pale `#f8f8f8` canvas with a single enormous uppercase headline — the name of
today's Site of the Day ("LIDAR DRONE SCANNING" in the capture) set in Inter
Tight 600 at 112.31px with a line-height equal to its size (112.31px). Above it,
a small 14px meta row ("Site of the Day · Oct 6, 2026 · Score 7.68 of 10")
frames the award like a museum label; below it, the author credit with a round
avatar and an underlined name. Everything else on the page exists to hand the
stage to other people's work.

The interface is almost entirely achromatic. Text is `#222222`, the primary
button is `#222222`, the canvas is `#f8f8f8`, cards are white or translucent
white (`#ffffffe6`), and neutral bands use `#e9e9e9` and `#ededed`. Colour
enters only through the showcased screenshots and through a short list of
section-coded accents declared as CSS custom properties (`--color-learn`
`#FFF083`, `--color-inspire` `#AAEEC4`, `--color-awards` `#502bd8`,
`--color-jobs` `#74bcff`, `--color-orange` `#FA5D29`). The orange is the only
accent that ever fills a button — on the Academy offer band.

There is exactly one typeface: **Inter Tight** (the tighter-spaced display cut
of Inter by Rasmus Andersson), served as a variable font with a 100–900 weight
range. Hierarchy is created by size and weight only: 600 for every display,
title and emphasised `strong`, 300 for running text, 400 for meta labels and
500 for header buttons.

The signature interaction object is the **floating dock**: a dark, translucent
bar (`#222222cc` surface, `#3e3e3e` items) that hovers over the hero
screenshot containing the "W." mark and outlined tabs ("Nominees", "Courses",
"Collections", "Directory", "Market"), each 48px tall with a 1px `#4e4e4e`
border that brightens to `#a7a7a7` on hover.

**Key Characteristics:**
- One family, Inter Tight; uppercase 600 display at 112.31px (42px on mobile) with line-height 1.
- `#222222` is ink, button fill, table border (`--border-table: #222`) and primary token (`--color-primary: #222`).
- Canvas `#f8f8f8` (`--bg-primary`) with white and translucent-white cards on top.
- 8px radius for every button (`--button-rounded: 8px`), 14px for media cards, 50% for avatars.
- No box-shadows on the measured pages — depth comes from screenshots, dark slabs and the dock.
- Section accents live in custom properties, one hue per product area (Learn, Inspire, Awards, Jobs, Connect).
- Body copy is light (300) at 14px with a generous 28px line-height.
- Hover is quiet: buttons darken to `#383838`, nav links fade to opacity 0.7.

## Colors

> **Source pages measured:** home (`/`), `/pro`, `/websites/`, `/submit/`, `/academy/`.
> Token names in parentheses are Awwwards' own CSS custom properties read from `:root`.

### Brand & Action
- **Primary** (`{colors.primary}` — `#222222`, `--color-primary: #222`, `--button-bg: var(--color-primary)`): fill of "Be Pro", "Buy Plan", "Load more", the dark pricing cards and the cookie banner.
- **Primary Hover** (`{colors.primary-hover}` — `#383838`): measured hover fill of "Be Pro" (rgb 56,56,56) and of outlined buttons on hover.
- **On Primary** (`{colors.on-primary}` — `#ffffff`, `--button-color: var(--color-white)`): label colour on dark buttons.

### Surfaces
- **Canvas** (`{colors.canvas}` — `#f8f8f8`, `--bg-primary`): page background; also `--color-odd-rows`, `--avatar-bg`, `--bg-input-hover`.
- **Surface White** (`{colors.surface-white}` — `#ffffff`, `--bg-input`): white pricing card, filter-button hover fill.
- **Surface Card** (`{colors.surface-card}` — `#ffffffe6`): translucent white of the Academy course cards (90% white).
- **Surface Gray** (`{colors.surface-gray}` — `#e9e9e9`, `--ch-bg`): the largest background by area on the homepage — the band behind the Site of the Day hero and the "Visit Sotd." button.
- **Surface Soft** (`{colors.surface-soft}` — `#ededed`, `--sf-bg`, `--bg-3rd`): search field fill, filter bar.
- **Hairline** (`{colors.hairline}` — `#ededed`, `--border-gray`, `--border-input`): input and divider borders.
- **Toggle Off** (`{colors.toggle-off}` — `#dedede`, `--check-toggle-color-bg`): unchecked billing toggle track.
- **Pricing Dark** (`{colors.pricing-dark}` — `#272829`): the largest background by area on `/pro` — the dark plan section.
- **Academy Sand** (`{colors.academy-sand}` — `#efe8de`): the warm "Enjoy over 100 Courses" band on `/academy/`.
- **Featured** (`{colors.featured}` — `#f8f0ee`, `--color-featured`): featured-row tint on `/pro`.

### Text
- **Ink** (`{colors.ink}` — `#222222`): the most-read colour on every measured page (2,605 of 3,019 characters on the homepage).
- **Ink Muted** (`{colors.ink-muted}` — `#a7a7a7`): secondary labels such as the 12px "Awards / Inspiration" captions; also the dock hover border.
- **Ink Half** (`{colors.ink-half}` — `#22222280`): 50% ink used for de-emphasised text on `/pro`.
- **Dock Text** (`{colors.dock-text}` — `#dedede`): label colour inside the floating dock.

### Dock
- **Dock** (`{colors.dock}` — `#222222cc`): translucent dark surface (80% `#222222`).
- **Dock Item** (`{colors.dock-item}` — `#3e3e3e`): inner tile fill.
- **Dock Border** (`{colors.dock-border}` — `#4e4e4e`) → **Dock Border Hover** (`{colors.dock-border-hover}` — `#a7a7a7`).

### Section accents (custom properties)
- **Orange** (`{colors.orange}` — `#fa5d29`, `--color-orange`, `--color-red`, `--color-errors`): Academy "Start Learning!" button, strike-through prices, countdown, and form errors.
- **Connect** (`{colors.connect}` — `#ff602c`, `--color-connect`).
- **Notification** (`{colors.notification}` — `#ff9667`, `--nf-bg-count`): notification count bubble.
- **Learn** (`{colors.learn}` — `#fff083`, `--color-learn`, `--alert-yellow`): "Special offer" badges, score underline bars, the "Academy New" area.
- **Inspire** (`{colors.inspire}` — `#aaeec4`, `--color-inspire`).
- **Awards** (`{colors.awards}` — `#502bd8`, `--color-awards`).
- **Jobs** (`{colors.jobs}` — `#74bcff`, `--color-jobs`).
- **Blue** (`{colors.blue}` — `#49b3fc`, `--color-blue`).
- **Alert Green** (`{colors.alert-green}` — `#e0f4d9`, `--alert-green`): success alert fill.

Each accent family also ships `-2` and `-3` steps in `:root` (e.g. `--color-learn-2: #FFF9D0`, `--color-learn-3: #fffbe2`, `--color-inspire-2: #C8E4D3`, `--color-inspire-3: #E2F4E9`). They are listed here for reference; this file declares only the base step as a token.

## Typography

### Font Family

**Inter Tight** is the only family in use (`--font-1: Inter Tight`; 3,019 of
3,019 measured characters on the homepage). It loads as one variable face
(`Inter Tight 100 900 normal`). Inter Tight is the display-oriented cut of
Inter by Rasmus Andersson with tighter spacing, published under the SIL Open
Font License on Google Fonts with a `wght` axis from 100 to 900
([Google Fonts METADATA](https://raw.githubusercontent.com/google/fonts/main/ofl/intertight/METADATA.pb),
[description](https://raw.githubusercontent.com/google/fonts/main/ofl/intertight/DESCRIPTION.en_us.html)).

Weight tokens are declared as custom properties: `--font-light: 300`,
`--font-normal: 400`, `--font-medium: 500`, `--font-bold: 600`,
`--font-extrabold: 700`, `--font-black: 800`. Note that Awwwards' "bold" is
600, which is the weight of every headline on the site.

### Hierarchy

| Token | Size | Weight | Line Height | Use |
|---|---|---|---|---|
| `{typography.display-hero}` | 112.31px | 600 | 112.31px | Uppercase Site-of-the-Day name, "NOMINEES" |
| `{typography.display-hero-mobile}` | 42px | 600 | 42px | Same headline at 390px |
| `{typography.display-academy}` | 67.8592px | 600 | 67.8592px | "ACADEMY" page title |
| `{typography.section-title}` | 39.1831px | 600 | 47.0197px | "Recent Sites of the Day", dark promo titles |
| `{typography.section-title-mobile}` | 26px | 600 | 31.2px | Section title at 390px |
| `{typography.card-title-lg}` | 24px | 600 | 28px | Course titles on the homepage |
| `{typography.card-title}` | 20.1972px | 600 | 24.2366px | Site / template card titles |
| `{typography.lead}` | 20.1972px | 400 | 28px | "Vote for the latest websites on awwwards" |
| `{typography.title-sm}` | 18px | 600 | 18px | Agency names in the directory table |
| `{typography.body-lg}` | 16px | 300 | 28px | Section descriptions |
| `{typography.body-md}` | 15px | 300 | 18px | Instructor names, menu items |
| `{typography.body}` | 14px | 300 | 28px | Default body (`--text-size-primary: 14px`) |
| `{typography.label}` | 14px | 400 | 28px | Meta row, nav links |
| `{typography.button}` | 14px | 500 | 42px | Header buttons |
| `{typography.button-lg}` | 16px | 300 | 60px | "Buy Plan", "Load more" |
| `{typography.button-cta-xl}` | 22px | 400 | 28px | Academy "Start Learning!" |
| `{typography.button-compact}` | 13px | 600 | 60px | "Visit Sotd." |
| `{typography.dock-link}` | 13px | 400 | 28px | Floating dock tabs |
| `{typography.input}` | 13.3px | 400 | — | Search input, filter reset |
| `{typography.caption}` | 12px | 300 | 12px | Category captions in `#a7a7a7` |
| `{typography.badge}` | 11px | 600 | 18px | "Special offer" badge |
| `{typography.micro}` | 10.5px | 300 | 10.5px | "by" connector between work and author |
| `{typography.sup-pro}` | 7px | 500 | 14px | Superscript "PRO" after member names |

All measured letter-spacing values are `normal`; no tracking is applied anywhere.
`textTransform: uppercase` is applied to the hero display only.

### Principles
- **Scale is the hierarchy.** One family, four weights; display and body differ by 8× in size.
- **Display line-height = font-size.** The 112.31px headline sets lines exactly 112.31px apart; the Academy title 67.8592px on 67.8592px.
- **Fractional sizes are computed.** 112.31px, 67.8592px, 39.1831px, 20.1972px and 13.2958px are the rendered results of fluid sizing at a 1280px viewport; reproduce them with viewport-relative sizing, not by rounding.
- **Light body, bold titles.** Running text is 300; every title and `strong` is 600. 400 is for meta labels, 500 for header buttons.
- **28px rhythm.** The body line-height of 28px is shared by 14px, 15px, 16px and 20.1972px text.

### Note on Font Substitutes
Inter Tight is free (OFL) and should be used directly. If it is unavailable,
Inter is the same design with looser default spacing; Helvetica/Arial are the
system fallbacks listed here (the site itself declares only `Inter Tight`).

## Layout

### Spacing System
- **Gutter**: `--gutter: 20px` — the page side gutter and the most common grid gap after 8px.
- **Measured gaps** (homepage): 8px (most frequent), 20px, 12px, 16px, 6px, 30px, 24px, 4px.
- **Measured paddings**: 30px, 32px, 20px, 24px, 12px, 10px, 6px.
- **Tokens**: `{spacing.xxs}` 4px · `{spacing.xs}` 6px · `{spacing.sm}` 8px · `{spacing.md}` 12px · `{spacing.lg}` 16px · `{spacing.gutter}` 20px · `{spacing.button-pad}` 24px · `{spacing.xl}` 30px · `{spacing.xxl}` 32px · `{spacing.pad-inner}` 52px.
- **Fixed heights** (custom properties): `--header-height: 71px`, `--nf-height: 54px`, `--sf-height: 42px`, `--button-height: 48px`, `--height-input: 48px`, `--check-toggle-height: 40px`.

### Grid & Container
- The header is a single row at 54px measured height: "W." logo, "Explore ▾ / Directory / Academy [New] / Jobs / Market", a wide search field, then "Log in", "Sign Up", "Be Pro" (filled) and "Submit Website" (outlined).
- The hero is centred: meta row → uppercase display → author credit → a full-bleed dark slab with the winning site's screenshot inset.
- Below, cards run in a two-column grid (e.g. Nominees, Academy courses) with 20px gutters inside a centred container.
- `--innerWidth: 1816px` is declared in `:root` as an inner-width value.
- Screenshot aspect ratios are tokens too: `--img-resizing-site: 16 / 12`, `--img-resizing-desktop: 19 / 10`, `--img-resizing-paronamic: 2 / 1`.

### Whitespace Philosophy
The page breathes vertically: the display headline sits in a wide band of
empty canvas, and each section starts with a tiny 14px eyebrow ("Latest")
above a huge title. Inside cards, information is packed tight (15px names,
14px scores, 10.5px "by") so that the images get the space.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat, no shadow | Every measured card, button and band |
| 1 | Colour step: `#f8f8f8` → `#ffffff` / `#ffffffe6` | Cards on canvas |
| 2 | Dark slab `#222222` / `#272829` | Hero screenshot frame, pricing section, cookie banner |
| 3 | Translucent dock `#222222cc` | Floating navigation above content |

No box-shadow was measured on any rendered element on the five pages. The CSS
corpus does contain one brand shadow,
`10px 10px 20px -10px rgba(var(--color-primary-rgb), 0.4)`, but it was not
seen on a rendered element, so it is not a token here.

### Decorative Depth
Depth comes from the work itself: full-colour screenshots and device mockups
sit inside dark slabs, and 3D renders (the black "W." boxes on `/pro`) float
on the pale canvas. The interface stays flat so the imagery is the only thing
with volume.

## Shapes

### Border Radius Scale

| Token | Value | Source | Use |
|---|---|---|---|
| `{rounded.small}` | 4px | `--rounded-small` | Small chips, thumbnails |
| `{rounded.normal}` | 8px | `--button-rounded`, `--rounded-normal` | Every button, dock tabs, cookie banner |
| `{rounded.md}` | 12px | measured | Info panels |
| `{rounded.card}` | 14px | measured | Course, nominee and pricing cards |
| `{rounded.large}` | 16px | `--rounded-large: 1rem` | Large panels |
| `{rounded.full}` | 72px | `--button-rounded-full` | Fully rounded buttons |
| `{rounded.circle}` | 50% | measured | Avatars, author logos |

A left-only `8px 0px 0px 8px` radius was also measured once (element not identified).

### Photography Geometry
Screenshots and course photos are cropped hard to the card's 14px corners,
with titles and meta set beneath the image on the card surface, separated by
thin rows. Author avatars are always circles.

## Components

### Buttons

**`button-primary`** — "Be Pro".
- Background `{colors.primary}` `#222222`, text `{colors.on-primary}`, `{typography.button}` (14px/500), height 42px, padding 0 20px, radius `{rounded.normal}` 8px.
- Hover (`button-primary-hover`): background `{colors.primary-hover}` `#383838`.

**`button-outlined`** — "Submit Website", "Join Directory", "Buy Standard".
- Transparent fill, 1px solid `#222222` border, `{colors.ink}` text, same 42px / 0 20px / 8px geometry.
- Hover (`button-outlined-hover`): fills `#383838` and the label turns white.

**`button-secondary`** — "Visit Sotd.".
- Background `{colors.surface-gray}` `#e9e9e9`, `{typography.button-compact}` (13px/600), height 60px, padding 0 15.6px, radius 8px.

**`button-large`** — "Buy Plan", "Load more".
- Background `#222222`, `{typography.button-lg}` (16px/300), height 60px, padding 0 48px, radius 8px.
- A 48px-tall sibling ("Buy Professional") uses 14px/300 with 0 24px padding (`--button-height: 48px`, `--button-pad: 24px`).

**`button-filter-reset`** — "Reset filters".
- Background `{colors.canvas}`, 13.3px/500, height 42px, padding 0 24px, radius 8px; hover background `#ffffff`.

**`button-academy-offer`** — "Start Learning!".
- Background `{colors.orange}` `#fa5d29`, white 22px/400 label, height 72px, padding 0 60px, radius 8px; hover background `#222222`.

### Navigation

**`nav`** — 54px-tall header on the canvas, ink text. Links are 14px/400; "Log in" and "Sign Up" are `strong` 14px/600. Hover fades links to opacity 0.7 (`nav-link-hover`).

**`search-field`** — `--sf-bg` `#ededed` field, `--sf-height` 42px, 13.3px/400 input with 38px left padding for the magnifier icon, placeholder "Search by Inspiration".

**`dock`** — floating translucent bar `#222222cc` with `#3e3e3e` tiles, holding the "W." mark and tabs. **`dock-link`**: 48px tall, 1px `#4e4e4e` border, `#dedede` 13px/400 text, radius 8px; hover border `#a7a7a7`.

### Cards & Containers

**`card-course`** — Academy course card: `#ffffffe6` surface, radius 14px, padding 0 (the image is flush to the top), then title row, author/price row and score row separated by thin rules. Measured 387px wide × 593px tall on the homepage.

**`card-pricing-dark`** / **`card-pricing-light`** — `/pro` plan cards: `#222222` with white text (Basic, Professional) or `#ffffff` with ink text (International), radius 14px.

**`cookie-banner`** — `#222222` panel, white 14px/300 text on 28px leading, padding 30px, radius 8px, with an outlined white "GOT IT" button.

**`badge-special-offer`** — `{colors.learn}` `#fff083` yellow chip with 11px/600 ink "Special offer", pinned to the top-right of course images.

### Links
**`link`** — ink `#222222`, inherits 14px/300. Author names use an underline (see capture: "Riotters").

### Footer
**`footer`** — on the canvas, ink 14px/300, columns of section links (Websites, Collections, Elements, Academy, Jobs, Market, Directory).

## Design System Architecture

Awwwards publishes **no public design system**, brand portal, press kit or
token package. Searched: "Awwwards brand guidelines logo press kit",
"Awwwards design system Inter Tight typeface redesign", "awwwards.com logo
download brand assets official", "github awwwards organization open source UI
components". The official About page
([awwwards.com/about-us](https://www.awwwards.com/about-us/)) links no press or
brand resources, and the official GitHub organisation
([github.com/awwwards](https://github.com/awwwards)) has zero public
repositories. Third-party "Awwwards UI skills" / style-scrape pages exist but
are not official and were not used.

What follows is the **de-facto system**, read from the live site's `:root`
custom properties and computed styles.

### Token architecture
- **Two tiers.** Primitive colour values are declared once (`--color-primary: #222`, `--color-white: #fff`, `--color-orange: #FA5D29`) and aliased into role tokens: `--button-bg: var(--color-primary)`, `--button-color: var(--color-white)`, `--button-border-color: var(--color-primary)`, `--color-underlined: var(--color-primary-rgb)`, `--hf-bg: var(--bg-primary)`.
- **Naming convention**: kebab-case, prefixed by category — `--color-*`, `--bg-*`, `--border-*`, `--font-*`, `--text-size-*`, `--rounded-*`, `--button-*`, plus component prefixes `--nf-*` (navigation bar), `--sf-*` (search field), `--ch-*`, `--check-toggle-*`, `--budget-circle-*`.
- **RGB triplets** for alpha compositing: `--color-primary-rgb: 34, 34, 34`, `--bg-primary-rgb: 248, 248, 248`, `--alert-yellow-rgb: 255, 240, 131`.
- **Section palettes** in numbered steps: `--color-learn`, `--color-learn-2`, `--color-learn-3`; same for `inspire`, `awards`, `jobs`, `connect`, `read`.
- **Type scale tokens**: `--text-size-small: 11px`, `--text-size-primary: 14px`, `--text-size-medium: 18px`, `--text-size-large: 22px`; weights `--font-light` 300 … `--font-black` 800.
- **Shape tokens**: `--rounded-small: 4px`, `--rounded-normal: 8px`, `--rounded-large: 1rem`, `--button-rounded: 8px`, `--button-rounded-full: 72px`, `--border-thin: 0.5px`.

### Theming
Only a light theme was observed. No `prefers-color-scheme` dark tokens and no
theme class were found in `:root`. Dark surfaces (dock, pricing section,
cookie banner) are local component choices on the same light theme, not a
switchable mode. `--modal-alpha: 0.7` sets the modal backdrop opacity.

### Type & spacing systems
- One family (`--font-1: Inter Tight`), four weights in use (300/400/500/600).
- Display sizes are fluid: the hero renders 112.31px at 1280px and 42px at 390px; section titles 39.1831px → 26px; card titles 20.1972px → 18px.
- Spacing has no published base unit. Measured values cluster on 4/8/12/16/20/24/30/32px, with `--gutter: 20px`, `--pad-inner: 52px`, `--pad-input: 16px`, `--button-pad: 24px`.

### Component model
De-facto inventory seen on the five measured pages: header nav, search field,
filled / outlined / large / filter / offer buttons, floating dock with tabs,
Site-of-the-Day hero, site cards, course cards, pricing cards with a
billing toggle (`--check-toggle-width: 80px`, `--check-toggle-height: 40px`),
directory table (`--border-table: #222`, `--color-odd-rows: #f8f8f8`),
"Special offer" badge, notification count (`--nf-bg-count: #FF9667`), cookie
banner, footer. Sizes are expressed as fixed heights (42px header buttons,
48px dock tabs / `--button-height`, 60px large buttons, 72px offer button).

### Accessibility
No published accessibility rules. Measured: `#222222` on `#f8f8f8` is the
main text pair; hover feedback relies on opacity (0.7) and a `#383838` fill;
the `#a7a7a7` caption colour on the light canvas is low-contrast and should be
kept to non-essential labels. No focus style was measured.

### Delivery
No npm package, Figma kit or public versioning. The font is the public
Inter Tight from Google Fonts
([METADATA.pb](https://raw.githubusercontent.com/google/fonts/main/ofl/intertight/METADATA.pb)).

## Do's and Don'ts

### Do
- Do use Inter Tight for everything, at 600 for titles and 300 for body.
- Do set the hero title uppercase at 112.31px/112.31px (42px/42px on mobile).
- Do keep the UI achromatic — `#222222`, `#f8f8f8`, `#ffffff`, `#e9e9e9`, `#ededed`.
- Do use 8px radius on every button and 14px on media cards.
- Do let showcased screenshots carry all saturated colour.
- Do use section accents (`#fff083`, `#aaeec4`, `#502bd8`, `#74bcff`) only as small markers for their product area.
- Do use opacity 0.7 for nav-link hover and `#383838` for button hover.
- Do keep body copy at 14px with 28px line-height.

### Don't
- Don't introduce a second typeface or italic display styles.
- Don't add drop shadows to cards; separate with surface colour instead.
- Don't fill buttons with orange outside the Academy offer context — orange is also the error colour (`--color-errors`).
- Don't round buttons into pills by default; `--button-rounded-full` (72px) is the exception.
- Don't add letter-spacing; every measured style is `normal`.
- Don't use pure black `#000000` for text.
- Don't round the fractional display sizes to whole pixels.

## Responsive Behavior

### Breakpoints
Measured at two widths: 1280px (desktop) and 390px (mobile).

| Element | 1280px | 390px |
|---|---|---|
| Hero display | 112.31px / 600 / 112.31px | 42px / 600 / 42px |
| Section title | 39.1831px / 47.0197px | 26px / 31.2px |
| Site card title | 20.1972px | 18px |
| Body | 14px / 28px | 14px / 28px |
| Header height | 54px | 54px |

### Touch Targets
Header buttons are 42px tall, dock tabs 48px, large buttons 60px, the Academy
CTA 72px. On mobile the "Be Pro" button is not detected in the header (no
primary CTA was found at 390px); the measured mobile header is a 54px `#f8f8f8`
bar.

### Collapsing Strategy
- Display and title sizes step down (see table); body text size does not change between breakpoints.
- Grid column counts at 390px were not measured; check the live page before assuming a collapse pattern.

### Image Behavior
Screenshots keep the declared aspect-ratio tokens (`16 / 12`, `19 / 10`,
`2 / 1`) and scale to the container width.

## Iteration Guide

1. Start from the canvas `{colors.canvas}` `#f8f8f8` and ink `{colors.ink}` `#222222`.
2. Load Inter Tight (variable, 100–900) and set body to `{typography.body}` 14px/300/28px.
3. Build the header: logo, 14px/400 links, `#ededed` 42px search field, then `button-primary` and `button-outlined`.
4. Add the centred hero with `{typography.display-hero}` uppercase and a 14px meta row.
5. Frame showcased work in dark slabs and 14px-radius cards; avoid shadows.
6. Use `{typography.section-title}` for section openers, each preceded by a 14px eyebrow.
7. Add accents only as small badges or underlines tied to a section.
8. Verify hover states: `#383838` fills, opacity 0.7 links, `#a7a7a7` dock borders.
9. Check 390px: hero 42px, section titles 26px, card titles 18px.
10. Read every new value from the live site before adding it as a token.
