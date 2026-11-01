---
version: alpha
name: Wongnai
category: "Thai Brands"
description: "Wongnai (wongnai.com), Thailand's restaurant and lifestyle review platform, renders a light-grey #edf0f2 page with white 8px-radius content blocks, Thai type in the self-hosted DB Heavent Now (400/500/700) over a Helvetica Neue base, a #0093e8 blue for search, tabs and links, a #3d4245 grey ink, small 8px cards with a soft rgba(0,0,0,0.08) shadow, and dark-red #880b0b rating badges."

colors:
  primary: "#0093e8"
  primary-hover: "#0070a8"
  canvas: "#edf0f2"
  surface: "#ffffff"
  surface-footer: "#f4f6f7"
  fill: "#e9ecee"
  fill-hover: "#dee2e4"
  hairline: "#e9ecee"
  hairline-strong: "#dee2e4"
  ink: "#3d4245"
  ink-strong: "#282d2e"
  ink-muted: "#656c6f"
  ink-subtle: "#787f83"
  ink-faint: "#8c9396"
  placeholder: "#a0a6a9"
  on-primary: "#ffffff"
  rating-high: "#880b0b"
  rating-mid: "#cd1201"
  rating-low: "#f95700"

typography:
  hero-h1:
    fontFamily: "\"DB Heavent Now\", sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 32px
  hero-h1-mobile:
    fontFamily: "\"DB Heavent Now\", sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 32px
  title-bold-18:
    fontFamily: "\"DB Heavent Now\", sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28px
  title-bold-16-mobile:
    fontFamily: "\"DB Heavent Now\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  label-medium-16:
    fontFamily: "\"DB Heavent Now\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  body-16:
    fontFamily: "\"DB Heavent Now\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link-see-all:
    fontFamily: "\"DB Heavent Now\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  button-login:
    fontFamily: "\"DB Heavent Now\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.8571px
  label-medium-14:
    fontFamily: "\"DB Heavent Now\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  body-14:
    fontFamily: "\"DB Heavent Now\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  bold-14:
    fontFamily: "\"DB Heavent Now\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
  badge:
    fontFamily: "\"DB Heavent Now\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
  body-12-mobile:
    fontFamily: "\"DB Heavent Now\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  base:
    fontFamily: "\"Helvetica Neue\", Helvetica, Thonburi, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  footer-heading:
    fontFamily: "\"Helvetica Neue\", Helvetica, Thonburi, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
  seo-link:
    fontFamily: "\"Helvetica Neue\", Helvetica, Thonburi, Arial, sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 20px

rounded:
  xs: 4px
  badge: 6px
  md: 8px
  overlay: 12px
  icon-tile: 18px
  button-login: 20px
  circle: 9999px

spacing:
  xxs: 2px
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  input-x: 44px
  xxl: 64px
  page-x: 148px

components:
  header:
    backgroundColor: "{colors.surface}"
    height: 80px
    padding: 0px 148px
    borderBottom: "1px solid #e9ecee"
  search-input:
    backgroundColor: "{colors.fill}"
    textColor: "{colors.ink}"
    typography: "{typography.body-16}"
    rounded: 8px 0px 0px 8px
    padding: 4px 8px 4px 12px
    height: 36px
  location-input:
    backgroundColor: "{colors.fill}"
    textColor: "{colors.ink}"
    typography: "{typography.body-16}"
    rounded: "{rounded.md}"
    padding: 12px 44px
    height: 36px
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: 0px 8px 8px 0px
    padding: 6px 12px
    height: 36px
  button-login:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button-login}"
    rounded: "{rounded.button-login}"
    padding: 0px 4px
    height: 42px
    border: "1px solid #dee2e4"
  button-login-hover:
    backgroundColor: "{colors.canvas}"
    border: "1px solid #8c9396"
  button-see-all:
    backgroundColor: "{colors.fill}"
    textColor: "{colors.ink}"
    typography: "{typography.label-medium-14}"
    rounded: "{rounded.md}"
    padding: 4px 12px
    height: 28px
  button-see-all-hover:
    backgroundColor: "{colors.fill-hover}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link-see-all}"
  link-hover:
    textColor: "{colors.primary-hover}"
    textDecoration: underline
  tab-active:
    textColor: "{colors.primary}"
    typography: "{typography.label-medium-14}"
    padding: 8px 16px
  section-block:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    border: "1px solid #e9ecee"
  card-restaurant:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.body-14}"
    rounded: "{rounded.md}"
    boxShadow: "rgba(0, 0, 0, 0.08) 0px 2px 6px 0px"
  rating-badge:
    backgroundColor: "{colors.rating-high}"
    textColor: "{colors.on-primary}"
    typography: "{typography.badge}"
    rounded: "{rounded.badge}"
    padding: 0px 4px
    height: 18px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink}"
    typography: "{typography.base}"
    padding: 24px
---

## Overview

Wongnai is Thailand's review platform for restaurants, cafés, hotels, travel and beauty. The homepage
is a **discovery feed**: a full-width food photograph credited to the reviewer who shot it
("ภาพถ่ายโดย …"), a row of eight category shortcuts (ร้านอาหาร, กาแฟ / ของหวาน, Users' Choice,
ที่เที่ยว, สั่งเดลิเวอรี, สั่งไว้รับเลย, ทำอาหาร, เพิ่มเติม), then a stack of white blocks —
"แนะนำสำหรับคุณ" (recommended for you), "#Vibes", "สิทธิประโยชน์และส่วนลด" (perks and discounts),
"หาร้านตามประเภทอาหาร" (find by food type), curated collections — each sitting on a light grey page.

The visual language is that of a utility app rather than a magazine: small type, tight cards, grey
structure and one blue. The food photography carries all the color; the UI chrome is neutral greys
from a numbered palette (`--light-gray-25` … `--light-gray-900`) and a single action blue
(`--light-blue-600` `#0093e8`).

**Key Characteristics:**
- Grey page (`{colors.canvas}` `#edf0f2`) with white 8px-radius **section blocks** 984px wide, centered by 148px side margins.
- A white 80px header with the logo, a location field, a joined search field + blue search button, and an outlined 20px-radius login button.
- **DB Heavent Now** for all Thai UI text at 400 / 500 / 700; Helvetica Neue for the base and footer.
- Restaurant cards: photo on top, an 18px bold name, a 14px grey category line, a colored rating badge and a review count.
- Rating badges colored by score: dark red `#880b0b` for the highest scores, red `#cd1201` mid, orange `#f95700` lower.
- Interaction blue `{colors.primary}` for the search button, the active tab and "ดูทั้งหมด" links; hover darkens to `#0070a8` and underlines.
- Flat structure: section blocks have a 1px hairline, only cards carry a soft shadow.

## Colors

> **Source:** homepage extraction (`desktop.rootVars` exposes the full `--light-*` / `--dark-*` palette) plus recorded probes in `SOURCES.json`.

### Brand & Accent
- **Wongnai Blue** (`{colors.primary}` — `#0093e8`, token `--light-blue-600`): search button, active tab label, "ดูทั้งหมด" text links.
- **Blue Hover** (`{colors.primary-hover}` — `#0070a8`, token `--light-blue-700`): link hover, with underline.
- The official brand page says the brand is remembered as **blue and orange**, with pink added for Beauty & Spas
  ([wongnai.com/blogs/wongnai-logo-update-2016](https://www.wongnai.com/blogs/wongnai-logo-update-2016)). On the
  homepage UI, orange appears only inside the logo artwork and in the palette tokens; the UI accent is blue.

### Surface
- **Canvas** (`{colors.canvas}` — `#edf0f2`, `--light-gray-50`): the grey page area (`div.body.greybg`) under the header.
- **Surface** (`{colors.surface}` — `#ffffff`): header, section blocks, cards, body background.
- **Footer Surface** (`{colors.surface-footer}` — `#f4f6f7`, `--light-gray-25`): the footer band.
- **Fill** (`{colors.fill}` — `#e9ecee`, `--light-gray-75`): input fields and the full-width "ดูทั้งหมด" button.
- **Fill Hover** (`{colors.fill-hover}` — `#dee2e4`, `--light-gray-100`): hover of the fill button.
- **Hairline** (`{colors.hairline}` — `#e9ecee`): header bottom border and section-block border.
- **Hairline Strong** (`{colors.hairline-strong}` — `#dee2e4`): login-button border and tab-bar underline.

### Text
- **Ink** (`{colors.ink}` — `#3d4245`, `--light-gray-700`): default text, titles, card names. Most-read color.
- **Ink Strong** (`{colors.ink-strong}` — `#282d2e`, `--light-gray-850`): login button label and dense text.
- **Ink Muted** (`{colors.ink-muted}` — `#656c6f`, `--light-gray-550`): card category line and review count.
- **Ink Subtle** (`{colors.ink-subtle}` — `#787f83`, `--light-gray-500`): the 10px SEO link wall.
- **Ink Faint** (`{colors.ink-faint}` — `#8c9396`, `--light-gray-400`): copyright line; login hover border.
- **Placeholder** (`{colors.placeholder}` — `#a0a6a9`, `--light-gray-300`): search placeholder.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): icon on the search button, badge text, text over photos.

### Semantic — rating scale
- **Rating High** (`{colors.rating-high}` — `#880b0b`): badges observed for scores 4.3–4.9.
- **Rating Mid** (`{colors.rating-mid}` — `#cd1201`): badges observed for 3.9–4.0.
- **Rating Low** (`{colors.rating-low}` — `#f95700`): badge observed for 3.6.
The exact score thresholds are not published; only the observed score → color pairs above are measured.

## Typography

### Font Family
- **DB Heavent Now** — self-hosted, loaded by the page at weights 400, 500 and 700 (document.fonts reports all three
  as loaded). Used for every Thai UI string: titles, labels, card text, buttons, inputs.
- **Helvetica Neue** (`"Helvetica Neue", Helvetica, Thonburi, Arial, sans-serif`) — the body base family. It shows
  through in the footer and the SEO link list, which do not set DB Heavent Now.
- The page also declares **Nunito** and **Prompt** @font-face rules, but they stayed unloaded on the homepage.

### Hierarchy

| Token | Family | Size | Weight | Line Height | Use |
|---|---|---|---|---|---|
| `{typography.hero-h1}` | DB Heavent Now | 20px | 700 | 32px | h1 hero block (photo, no visible text) |
| `{typography.hero-h1-mobile}` | DB Heavent Now | 18px | 700 | 32px | h1 at 390px |
| `{typography.title-bold-18}` | DB Heavent Now | 18px | 700 | 28px | Section titles (`bd18`), card names |
| `{typography.title-bold-16-mobile}` | DB Heavent Now | 16px | 700 | 24px | Section titles at 390px (`bd16-mWeb`) |
| `{typography.label-medium-16}` | DB Heavent Now | 16px | 500 | 24px | Category shortcut labels (`md16`) |
| `{typography.body-16}` | DB Heavent Now | 16px | 400 | 24px | Inputs, large body (`rg16`) |
| `{typography.link-see-all}` | DB Heavent Now | 16px | 400 | 28px | Blue "ดูทั้งหมด" links |
| `{typography.button-login}` | DB Heavent Now | 16px | 400 | 22.8571px | Login button |
| `{typography.label-medium-14}` | DB Heavent Now | 14px | 500 | 20px | Tabs, fill button (`md14`) |
| `{typography.body-14}` | DB Heavent Now | 14px | 400 | 20px | Card category, counts (`rg14`) |
| `{typography.bold-14}` | DB Heavent Now | 14px | 700 | 20px | Photo credit name (`bd14`) |
| `{typography.badge}` | DB Heavent Now | 14px | 500 | 14px | Rating value |
| `{typography.body-12-mobile}` | DB Heavent Now | 12px | 400 | 16px | Small text at 390px |
| `{typography.base}` | Helvetica Neue | 14px | 400 | 20px | Body base, footer links |
| `{typography.footer-heading}` | Helvetica Neue | 14px | 700 | 20px | Footer headings |
| `{typography.seo-link}` | Helvetica Neue | 10px | 400 | 20px | "… Near Me" SEO link list |

### Principles
- **Utility type classes.** Sizes are applied through classes named weight + size: `rg14`, `rg16`, `md14`, `md16`,
  `bd14`, `bd18`, plus a mobile override suffix (`bd16-mWeb`, `rg12-mWeb`, `bd14-mWeb`). `rg` = 400, `md` = 500,
  `bd` = 700 (as measured).
- **Small and dense.** The main reading size is 14–16px; titles never exceed 18px on the homepage. Hierarchy comes
  from weight (400 → 500 → 700), not from size jumps.
- **Generous line boxes for Thai.** 14px/20px, 16px/24px, 18px/28px — leading ≈ 1.43–1.56 to fit Thai tone marks.
- **No letter-spacing.** None was measured anywhere.

### Note on Font Substitutes
DB Heavent Now is a commercial Thai typeface; no official substitute is named by Wongnai. Keep the measured sizes and
line-heights and fall back to `sans-serif` (the site's own fallback), or to the Helvetica Neue stack the site uses for its base.

## Layout

### Spacing System
- **Tokens:** `{spacing.xxs}` 2px · `{spacing.xs}` 4px · `{spacing.sm}` 8px · `{spacing.md}` 12px · `{spacing.lg}` 16px ·
  `{spacing.xl}` 24px · `{spacing.input-x}` 44px · `{spacing.xxl}` 64px · `{spacing.page-x}` 148px.
- The most frequent padding is 8px, then 16px and 4px; flex gaps measured 4px and 8px.
- Header: `0px 148px`; footer: 24px; tab buttons `8px 16px`; fill button `4px 12px`.

### Grid & Container
- Content column is 984px (1280 − 2 × 148px), holding stacked white section blocks.
- "แนะนำสำหรับคุณ": a 4-column grid of 232x245 restaurant cards in two rows, then a full-width "ดูทั้งหมด" fill button.
- Category shortcuts: 8 icon + label items in one row under the hero.
- "หาร้านตามประเภทอาหาร": a row of 8 square photo tiles with white labels over the image.
- Collections: 4-up image carousels with blue pagination dots.

### Whitespace Philosophy
Compact. Blocks are separated by a narrow band of grey canvas; inside blocks, cards sit on an 8px rhythm. The grey
page frame plus white blocks gives the feed an app-like, list-of-modules feel.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat, `1px solid #e9ecee` | Header bottom, section blocks |
| 1 | `rgba(0, 0, 0, 0.08) 0px 2px 6px 0px` | Restaurant cards |

The page's only shadow is the soft level-1 card shadow. Depth otherwise comes from white-on-grey.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 4px | Photos and image tiles (most frequent radius) |
| `{rounded.badge}` | 6px | Rating badges |
| `{rounded.md}` | 8px | Cards, section blocks, inputs, fill button |
| `{rounded.overlay}` | 12px | `--overlay-rounded` root variable |
| `{rounded.icon-tile}` | 18px | 48x48 category icon tile |
| `{rounded.button-login}` | 20px | Login button |
| `{rounded.circle}` | 9999px (measured 50%) | Avatars, pagination dots |

Joined controls split the radius: the search input is `8px 0px 0px 8px` and the search button `0px 8px 8px 0px`.

## Components

### Header
**`header`** — white, 80px, `0px 148px` padding, `1px solid #e9ecee` bottom border. Left: the blue/orange "wongnai"
logo. Center: **`location-input`** (fill `#e9ecee`, 8px radius, `12px 44px` padding with pin icon and chevron) then
**`search-input`** (fill, `8px 0px 0px 8px`, `4px 8px 4px 12px`, placeholder `#a0a6a9`) joined to
**`button-primary`** (`#0093e8`, white magnifier, `0px 8px 8px 0px`, `6px 12px`, 48x36). Right:
**`button-login`** — white, `1px solid #dee2e4`, 20px radius, 42px tall, user icon + "เข้าสู่ระบบ" in `#282d2e`;
hover fills `#edf0f2` and darkens the border to `#8c9396`. A circular chevron button sits next to it.

### Hero
A 320px full-bleed photograph (`background-size: cover`) with a centered white photo credit in 14px (`rg14`) with the
photographer's name in 14px bold (`bd14`).

### Section blocks and tabs
**`section-block`** — white, 8px radius, `1px solid #e9ecee`, 984px wide. Title in `{typography.title-bold-18}` at the
top left; optional right-aligned blue `{components.link}` "ดูทั้งหมด". Tabs below the title: label `{typography.label-medium-14}`,
active in `{colors.primary}`, buttons `8px 16px`, the tab bar underlined by `1px solid #dee2e4`.

### Cards
**`card-restaurant`** — 232x245, white, 8px radius, level-1 shadow. Photo on top, then name in `{typography.title-bold-18}`
(single line, ellipsis), category in `{typography.body-14}` `{colors.ink-muted}`, then a `rating-badge` and "23 รีวิว"
review count in `{colors.ink-muted}`.

**`rating-badge`** — 43x18, 6px radius, `0px 4px` padding, score in `{typography.badge}` white plus a 12px star icon.
Fill by score: `{colors.rating-high}`, `{colors.rating-mid}` or `{colors.rating-low}`.

### Buttons
- **`button-primary`** — blue search button (above). The only filled blue button on the homepage.
- **`button-see-all`** — full-width grey fill `#e9ecee`, 8px radius, 28px tall, `4px 12px`, `{typography.label-medium-14}`
  in `{colors.ink}`; hover `#dee2e4`.
- **`button-login`** — outlined 20px-radius button (above).

### Links
**`link`** — `{colors.primary}` `{typography.link-see-all}`; hover `{colors.primary-hover}` with underline (measured on
the perk banners and "ดูทั้งหมด").

### Footer
**`footer`** — `#f4f6f7`, 24px padding, Helvetica Neue 14px/20px `{colors.ink}`; headings ("Download Wongnai App Free",
"Follow Us") 14px/700; app-store badges and social icons; "Copyright 2010-2026" in `{colors.ink-faint}`. Above it, a dense
list of 10px `{typography.seo-link}` "… Near Me" links in `{colors.ink-subtle}`.

## Design System Architecture

Wongnai publishes **no public design-system documentation** or token package. Its official brand material is limited to
the [brand-assets page](https://www.wongnai.com/brand-assets) (logo versions, 24 px / 24 mm minimum size, clear space,
"never modify", English-only name) and the [2016 logo-update post](https://www.wongnai.com/blogs/wongnai-logo-update-2016)
(blue + orange kept, pink added for Beauty & Spas). Searches for a Wongnai / LINE MAN Wongnai design system returned nothing
official (see `SOURCES.json`). What follows is the de-facto system measured on the live site.

- **Token architecture:** the page defines 241 CSS custom properties on `:root`. Color primitives follow
  `--{mode}-{hue}-{step}`: hues `gray, blue, brick, cyan, green, orange, pink, red, teal, yellow`; steps
  `10, 100 … 900` (gray adds `25, 50, 75, 150, 250, 550, 650, 850, white`). Verbatim examples:
  `--light-blue-600: #0093e8`, `--light-gray-700: #3d4245`, `--light-gray-50: #edf0f2`, `--light-orange-600: #f45e28`,
  `--light-green-600: #00a838`, `--light-red-600: #ff1d00`, `--dark-blue-500: #2da8ed`, `--dark-gray-white: #ffffff`.
  Component-level variables exist for third-party widgets: `--cc-*` (cookie consent: `--cc-btn-primary-bg: #2d4156`),
  `--rsbs-*` (bottom sheet), plus `--overlay-rounded: 12px`. No semantic tier (e.g. `--color-text-primary`) was found.
- **Theming:** a parallel `--dark-*` palette is defined alongside `--light-*`, so a dark mode palette exists in CSS; the
  homepage renders the light palette. How the site switches to dark was not observed.
- **Type & spacing:** utility classes `rg|md|bd` + size (`rg14`, `md16`, `bd18`) with `-mWeb` mobile overrides, and color
  utilities named after the palette (`text-gray-700`, `text-gray-550`). Spacing utilities like `mb-0`, `pl-12` appear.
  The most frequent measured paddings are 8 / 16 / 4 / 12 / 24px.
- **Component model:** React with styled-components (classes like `StyledButton-sc-1lpnvbj`, `StyledButtonLink-sc-5ip0m6`,
  `InputStyled-sc-9199qm`, `Container-sc-1lk8ybd`, `FooterContainer-sc-9rgxm4`, `Gap-sc-ilei7b`, `Flex-sc-3uaums`).
  Components seen: header, location input, search input + button, login button, hero, category shortcuts, section block,
  tabs, restaurant card, rating badge, fill button, image tiles, carousel with dots, footer.
- **Accessibility:** no published rules. Measured: body ink `#3d4245` on white/`#edf0f2`; the 10px SEO list in `#787f83` is
  the lowest-contrast, smallest text.
- **Delivery:** no public npm package, Figma kit or versioned library was found.

## Do's and Don'ts

### Do
- Put content in white 8px-radius blocks on the `#edf0f2` grey page.
- Use DB Heavent Now with the measured size/weight pairs (`rg14`, `md16`, `bd18` …).
- Use `{colors.primary}` `#0093e8` for the one action (search), active tabs and text links.
- Color rating badges by score with the measured dark red / red / orange.
- Keep card shadows at `rgba(0, 0, 0, 0.08) 0px 2px 6px 0px` and blocks flat with a hairline.
- Let the food photography supply color; keep chrome in the gray palette.
- Use the English name "Wongnai" and never modify the logo (official rule).

### Don't
- Don't scale titles beyond 18px on feed pages — hierarchy is weight-driven.
- Don't use orange as a UI action color; it lives in the logo.
- Don't add heavy shadows or borders to cards.
- Don't use pure black for text; ink is `#3d4245`.
- Don't put the logo below 24px on screen (official minimum).
- Don't round photos beyond 4px or blocks beyond 8px.

## Responsive Behavior

### Breakpoints
Measured at 1280px and 390px.

| Width | Measured changes |
|---|---|
| 1280px | 80px header, 984px content column, h1 hero 320px tall, section titles 18px/28px |
| 390px | h1 hero 98px tall at 18px; section titles 16px/24px (`bd16-mWeb`); small text 12px/16px; the "ดูทั้งหมด" fill button is 358px wide, 14px/500, `4px 12px`, 28px tall |

### Touch Targets
- Login button 42px tall; header inputs and search button 36px; fill button 28px; rating badges 18px (not interactive).

### Collapsing Strategy
- Type steps down via `-mWeb` classes (18 → 16px, 14 → 12px).
- The hero image shrinks from 320px to 98px tall.

### Image Behavior
Photos are `cover`-cropped into fixed-ratio tiles with 4px radius; collection banners scroll horizontally in carousels.

## Iteration Guide

1. Start with `{colors.canvas}` page, an 80px white `{components.header}` with a 1px `#e9ecee` bottom border.
2. Build each feed module as a `{components.section-block}` with a `{typography.title-bold-18}` title.
3. Fill with `{components.card-restaurant}` items in a 4-column grid; add `{components.rating-badge}` by score.
4. End modules with `{components.button-see-all}` or a blue `{components.link}`.
5. Use `{components.button-primary}` only for the main search action.
6. Apply `-mWeb` size steps at mobile width.
7. Close with the `#f4f6f7` `{components.footer}` in Helvetica Neue 14px.
