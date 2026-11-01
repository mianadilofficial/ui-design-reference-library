---
version: alpha
name: itch.io
category: "Gaming"
description: "itch.io is an open indie-game marketplace with a utilitarian, catalog-dense interface — a white #ffffff main column beside a #f4f4f4 sidebar, near-black #222222 Lato text at 12–20px, hot red #ff2449 actions with a deeper #da2c49 for tags and links, the official 'itchy carnation' #fa5c5c brand color, and tiny 2–4px radii on outline buttons, price tags and thumbnails. Cover art does all the color work; the chrome stays flat, bordered and quiet."

colors:
  primary: "#ff2449"
  primary-deep: "#da2c49"
  primary-hover-border: "#de425c"
  primary-outline: "#ff244966"
  carnation: "#fa5c5c"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  canvas-gray: "#f4f4f4"
  ink: "#222222"
  ink-med: "#434343"
  ink-light: "#606060"
  ink-gray: "#767676"
  ink-lighter: "#858585"
  border: "#dadada"
  edge-border: "#cdcdcd"
  input-focus: "#361275"
  brand-slate: "#40434e"
  price-tag: "#737373"
  meta-tag: "#2323231a"
  sale: "#34a0f2"
  overlay: "#1e1e1ee6"
  overlay-hover: "#282828e6"
  scrim: "#00000080"
  header-button-hover: "#ffffffcc"
  warning-bg: "#fffdbd"
  light-highlight: "#fff0f0"
  target-bg: "#d7fcaf"
  black: "#000000"

typography:
  logo-h1:
    fontFamily: "Lato, sans-serif"
    fontSize: 32px
    fontWeight: 700
  logo-h1-mobile:
    fontFamily: "Lato, sans-serif"
    fontSize: 32px
    fontWeight: 700
  featured-title:
    fontFamily: "Lato, sans-serif"
    fontSize: 28px
    fontWeight: 900
  browse-title:
    fontFamily: "Lato, sans-serif"
    fontSize: 24px
    fontWeight: 900
    lineHeight: 28.8px
  section-title:
    fontFamily: "Lato, sans-serif"
    fontSize: 20px
    fontWeight: 900
  cta-ghost:
    fontFamily: "Lato, sans-serif"
    fontSize: 18px
    fontWeight: 900
  nav-tab:
    fontFamily: "Lato, sans-serif"
    fontSize: 16px
    fontWeight: 700
  body-lg:
    fontFamily: "Lato, sans-serif"
    fontSize: 16px
    fontWeight: 400
  featured-short:
    fontFamily: "Lato, sans-serif"
    fontSize: 16px
    fontWeight: 700
  sidebar-heading:
    fontFamily: "Lato, sans-serif"
    fontSize: 15px
    fontWeight: 900
    textTransform: uppercase
  body-md:
    fontFamily: "Lato, sans-serif"
    fontSize: 14px
    fontWeight: 400
  body-mobile:
    fontFamily: "Lato, sans-serif"
    fontSize: 14px
    fontWeight: 400
  button:
    fontFamily: "Lato, sans-serif"
    fontSize: 14px
    fontWeight: 700
  card-title:
    fontFamily: "Lato, sans-serif"
    fontSize: 14px
    fontWeight: 700
  body-sm:
    fontFamily: "Lato, sans-serif"
    fontSize: 13px
    fontWeight: 400
  card-sub:
    fontFamily: "Lato, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14.4px
  meta-tag:
    fontFamily: "Lato, sans-serif"
    fontSize: 12px
    fontWeight: 700
    letterSpacing: 0.6px
    textTransform: uppercase

rounded:
  none: 0px
  xs: 2px
  sm: 3px
  md: 4px

spacing:
  px-2: 2px
  px-3: 3px
  px-4: 4px
  px-5: 5px
  px-8: 8px
  px-10: 10px
  px-12: 12px
  px-15: 15px
  px-20: 20px
  px-30: 30px
  gutter: 40px

components:
  button-primary:
    backgroundColor: "{colors.carnation}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 10px
    height: 35px
    border: "1px solid #0000001a"
    boxShadow: rgba(255, 255, 255, 0.21) 0px 0px 1px 0px inset
  button-outline:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 10px
    height: 28px
    border: "1px solid {colors.primary-outline}"
    boxShadow: rgba(255, 255, 255, 0.21) 0px 0px 1px 0px inset
  button-outline-hover:
    border: 1px solid rgba(255, 36, 73, 0.6)
  button-secondary:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 15px
    height: 30px
    border: "2px solid {colors.border}"
  button-secondary-hover:
    textColor: "{colors.primary}"
    backgroundColor: "{colors.header-button-hover}"
  button-ghost-on-dark:
    backgroundColor: transparent
    textColor: "{colors.on-primary}"
    typography: "{typography.cta-ghost}"
    rounded: "{rounded.sm}"
    padding: 5px 12px
    height: 36px
    border: "2px solid #ffffff"
  collection-overlay-button:
    backgroundColor: "{colors.overlay}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.sm}"
    height: 28px
  collection-overlay-button-hover:
    backgroundColor: "{colors.overlay-hover}"
  link:
    textColor: "{colors.primary-deep}"
    typography: "{typography.body-lg}"
    textDecoration: underline
  nav:
    backgroundColor: "{colors.canvas}"
    height: 50px
    padding: 0px 20px 0px 22px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px
  nav-tab:
    textColor: "{colors.ink}"
    typography: "{typography.nav-tab}"
    padding: 5px 0px
    border: 4px solid transparent
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.body-md}"
    padding: 4px 0px 4px 10px
    height: 30px
  sidebar:
    backgroundColor: "{colors.canvas-gray}"
    padding: 20px 0px
  sidebar-tag-link:
    textColor: "{colors.ink}"
    typography: "{typography.body-md}"
    rounded: "{rounded.md}"
    padding: 3px 10px
    height: 27px
  card-game-cell:
    thumbnailWidth: 227px
    thumbnailShadow: rgba(0, 0, 0, 0.15) 0px 0px 2px 0px
    titleTypography: "{typography.card-title}"
    subTypography: "{typography.card-sub}"
    textColor: "{colors.ink}"
  tag-price:
    backgroundColor: "{colors.price-tag}"
    textColor: "{colors.on-primary}"
    typography: "{typography.meta-tag}"
    rounded: "{rounded.sm}"
    padding: 2px 5px
  tag-meta:
    backgroundColor: "{colors.meta-tag}"
    textColor: "{colors.ink}"
    typography: "{typography.meta-tag}"
    rounded: "{rounded.sm}"
    padding: 2px 5px
  tag-sale:
    backgroundColor: "{colors.sale}"
    textColor: "#ffffffcc"
    rounded: 0px 2px 2px 0px
  app-banner:
    textColor: "{colors.on-primary}"
    typography: "{typography.body-lg}"
    padding: 15px 40px
    height: 67px
  footer:
    textColor: "{colors.ink-lighter}"
    typography: "{typography.body-md}"
    padding: 20px 20px 0px
---

## Overview

itch.io is an open marketplace for independent digital creators, focused on indie video games.
Its homepage is a store catalog first and a brand surface second: the interface is deliberately
plain so that thousands of wildly different pieces of cover art can sit side by side without the
chrome competing. Everything you see in the capture that is colorful — pixel art, neon
illustrations, hand-lettered logos, 3D renders — belongs to the games. The itch.io UI itself is
white, light gray, near-black text and one hot red.

The page is a classic two-pane web app. A fixed 50px white header (logo, Browse Games, Game Jams,
Upload Game, Developer Logs, Community, a search field, Log in / Register) sits over a light gray
`#f4f4f4` left sidebar and a white `#ffffff` main column. The sidebar is a dense index of text
links (Popular Tags, Browse, Games by Price, From the itch.io blog) under black-weight uppercase
headings. The main column opens with a one-line pitch ("itch.io is a simple way to find and share
indie games online for free.") with inline red links, a dark desktop-app promo strip, a full-width
featured-game hero on a dark translucent scrim, and then a four-column grid of game cells that
repeats for "Latest Featured Games", "Fresh Games", "Featured jams" and "More Featured Games".

The voice is lowercase, plainspoken and community-flavored: "Constantly updating with the latest
games on itch.io", "Get the most out of itch.io! Install and manage your games with our desktop
app", "Randomizer". The official press kit insists that both **itch.io** and **itch** are always
written lowercase — itch.io is the company and website, itch is the desktop application.

Density is the defining trait. Body copy runs at 12px and 14px (the two most-read sizes by
character count), type is Lato throughout, and the spacing system is built from tiny numbers —
2px, 3px, 5px, 10px, 20px — rather than a generous 8px grid. Corners are nearly square (2–4px).
There are almost no shadows: a 1px 2px header shadow and a 2px blur around cover thumbnails.

A second, very different design layer exists on creator project pages (e.g.
`leafo.itch.io/x-moon`): there, each creator themes their own page through the theme editor
(background, column background, text, link and button colors, page and header fonts), so those
pages do not follow the homepage palette. The documented theme variables are listed in the
Design System Architecture section.

Key characteristics:
- White `#ffffff` main column + `#f4f4f4` sidebar; text `#222222`.
- Action red `#ff2449` (outline buttons, hover text), deeper `#da2c49` for inline links and
  genre hashtags, official brand color `#fa5c5c` "itchy carnation".
- Lato only, weights 400 / 700 / 900, sizes 12–32px.
- Radii 2px / 3px / 4px; pills are not used in the main chrome.
- Flat surfaces; cover art supplies all color and depth.

## Colors

### Brand & Accent
- **Primary / action red** `#ff2449` — the most-used color in the site CSS (124 occurrences).
  Text and border of the "View all" / "View more" outline buttons, the hover text color of
  Log in / Register and the sidebar "Download app" link, and the background of the skip link.
- **Primary deep** `#da2c49` — the red readers see most often in running text (911 characters on
  the homepage): inline links such as "Add your game" / "Read the FAQ", the game-cell hashtag
  genres (#Strategy, #Roguelike) and the red half of the logo text. Also the 4px border on the
  "Add to collection" overlay on the browse page.
- **Primary hover border** `#de425c` — the border of the "Add to collection" overlay on hover
  (measured hover state on itch.io/games).
- **Primary outline** `#ff244966` — `#ff2449` at 40% alpha, the resting border of the outline
  button; on hover it becomes `rgba(255, 36, 73, 0.6)`.
- **Itchy carnation** `#fa5c5c` — the official brand color named in the press kit, and the
  `carnation` token in the open-source itch desktop app. On the homepage it does not appear as a
  fill; it was measured as the "Download Now" button and link color on the creator page
  leafo.itch.io/x-moon.
- **On primary** `#ffffff` — text on red, on dark overlays and on the price tag.

### Surface
- **Canvas** `#ffffff` — the main column and header background (the largest area on the page).
- **Canvas gray** `#f4f4f4` — the body background, visible as the left sidebar and the gutters
  (`--itchio_gray_back`).
- **Scrim** `#00000080` — 50% black behind the featured-game hero and app-promo strip.
- **Overlay** `#1e1e1ee6` → **overlay hover** `#282828e6` — the "Add to collection" button that
  appears over a cover on hover.
- **Warning bg** `#fffdbd`, **light highlight** `#fff0f0`, **target bg** `#d7fcaf` — utility
  backgrounds defined as root variables (`--itchio_warning_bg`, `--itchio_light_highlight`,
  `--itchio_target_bg`); they were not visible on the homepage capture.
- **Brand slate** `#40434e` — `--itchio_brand_color` root variable; not visible in the capture.

### Text
- **Ink** `#222222` — body and title text (`--itchio_body_color`); 5010 characters on the
  homepage, by far the most-read color. Listed by the press kit as a text color for white
  backgrounds.
- **Ink med** `#434343` — sidebar uppercase headings (`--itchio_body_color_med`); press-kit text color.
- **Ink light** `#606060` — section subtitles such as "Constantly updating with the latest games
  on itch.io" (`--itchio_body_color_light`).
- **Ink gray** `#767676` — `--itchio_body_color_gray`.
- **Ink lighter** `#858585` — timestamps in the blog list ("5h", "34d") and the footer
  (`--itchio_body_color_lighter`); press-kit text color.

### Lines & Tags
- **Border** `#dadada` — `--itchio_border_color`; the 2px border on Log in / Register.
- **Edge border** `#cdcdcd` — `--itchio_edge_border_color` and `--itchio_input_border_color`.
- **Input focus** `#361275` — `--itchio_input_focus_color`.
- **Price tag** `#737373` — solid gray behind prices ("$16.99").
- **Meta tag** `#2323231a` — 10% near-black behind FREE / WEB tags.
- **Sale** `#34a0f2` — the sale percentage tag ("10% OFF", "-15%"); also the color of a
  `0 0 0 3px` focus-style ring measured in the page's box shadows.

## Typography

### Font Family
Lato is the only text face — served as `Lato` (weights 400, 700, 900 loaded) with a
`LatoExtended` face declared for extended character sets, and an `icomoon` icon font. The press
kit names "the high-quality open source Lato" as the typeface used throughout itch.io's
products. Lato was designed in 2010 by Łukasz Dziedzic and is published under the SIL Open Font
License (latofonts.com). The site CSS also declares pixel faces `unscii8`, `unscii16`,
`unscii8tall` and display faces `Bebas Neue` / `Archivo Black`; none of them render on the
homepage.

### Hierarchy

| Token | Size | Weight | Extra | Used for |
|---|---|---|---|---|
| logo-h1 | 32px | 700 | — | the `h1` "itch.io" logotype text in the header |
| logo-h1-mobile | 32px | 700 | — | same h1 at 390px width |
| featured-title | 28px | 900 | white | featured-game hero title |
| browse-title | 24px | 900 | line-height 28.8px | "Games" title picker on /games |
| section-title | 20px | 900 | — | "Latest Featured Games", "Fresh Games" |
| cta-ghost | 18px | 900 | — | "Get the game →" |
| nav-tab | 16px | 700 | — | header Browse Games / Game Jams |
| body-lg | 16px | 400 | — | intro line, section subtitles, app banner |
| featured-short | 16px | 700 | white | featured-game short text |
| sidebar-heading | 15px | 900 | uppercase | POPULAR TAGS, BROWSE, GAMES BY PRICE |
| body-md | 14px | 400 | — | sidebar links, search input, footer |
| body-mobile | 14px | 400 | — | body text at 390px |
| button | 14px | 700 | — | Log in, Register, View all |
| card-title | 14px | 700 | — | game cell title |
| body-sm | 13px | 400 | — | "Download app", default body size |
| card-sub | 12px | 400 | line-height 14.4px | game cell description |
| meta-tag | 12px | 700 | letter-spacing 0.6px, uppercase | FREE, WEB, $16.99 |

Line heights are mostly the browser `normal`; only the browse title (28.8px) and card description
(14.4px) were measured with explicit values, so other tokens omit `lineHeight`.

### Principles
- Weight carries the hierarchy, not size. Titles jump to 900 (Black) at only 15–28px.
- The type scale is compact: 12px is the most-read size (4159 characters), then 14px.
- Uppercase is reserved for sidebar headings and meta tags; the tags add 0.6px tracking.
- Letter-spacing is otherwise `normal`.

### Note on Font Substitutes
Lato is free and open source (SIL OFL) and available on Google Fonts, so no substitute is
needed. Load weights 400, 700 and 900 — the three the site loads.

## Layout

### Spacing System
Spacing values are small and irregular, measured from real gaps and paddings: 2px, 3px, 4px,
5px (the most frequent padding), 8px, 10px, 12px, 15px, 20px, 30px and a 40px gutter
(`--itchio_gutter_width: 40px`). Grid gaps are 10px, 20px and 30px. There is no 8px base grid;
treat 5px and 10px as the working units.

### Grid & Container
- Header: full width, 50px tall, padding `0px 20px 0px 22px`.
- Sidebar: 260px wide scrolling column, `#f4f4f4`, padding `20px 0px`.
- Main column: 1020px wide on a 1280px viewport, white.
- Game grid: four columns of 227px-wide covers with a 20px-scale gap.
- App banner: padding `15px 40px` (the 40px gutter).
- Creator project pages use `#inner_column` at a 960px default width with a 553px
  `.formatted_description` (CSS guide).

### Whitespace Philosophy
Whitespace is functional, not atmospheric. Rows of game cells are separated by just enough
room for a title, a tag line and a two-line description. Sections are separated by a 20px
black-weight heading with an outline "View all →" button beside it, not by large vertical gaps.

## Elevation & Depth

| Level | Value | Use |
|---|---|---|
| 0 | none | almost everything |
| header | `rgba(0, 0, 0, 0.1) 0px 1px 2px 0px` | sticky header |
| thumbnail | `rgba(0, 0, 0, 0.15) 0px 0px 2px 0px` | game cover edges |
| inset sheen | `rgba(255, 255, 255, 0.21) 0px 0px 1px 0px inset` | outline and filled buttons |
| ring | `rgb(52, 160, 242) 0px 0px 0px 3px` | a 3px sale-blue ring measured on the page |

### Decorative Depth
Depth comes from the cover art and the dark scrim (`#00000080`) laid over the featured game's
blurred screenshot. There are no gradients, glows or layered cards in the chrome.

## Shapes

### Border Radius Scale
- `0px` — header, sidebar, main column, inputs, headings.
- `2px` (`xs`) — joined price/sale tags on the browse page (`2px 0px 0px 2px` / `0px 2px 2px 0px`).
- `3px` (`sm`) — the workhorse: Log in, Register, View all, Get the game, Download Now, price and
  meta tags, Add to collection overlay. 151 occurrences in the CSS.
- `4px` (`md`) — sidebar tag links; also the `explanation` radius in the itch app.

### Photography Geometry
Covers are landscape, 227px × 180.156px in the grid (≈ 315:250, the itch.io cover ratio), with
square corners and a faint 2px shadow. GIF covers carry a small "GIF" label in the top-left
corner; discounts sit as a blue block in the bottom-right corner of the cover.

## Components

### Buttons
- **button-outline** ("View all →", "View more →"): transparent, text `#ff2449`, 14px/700, border
  `1px solid #ff244966`, radius 3px, padding `0px 10px`, height 28px, inset white sheen. Hover only
  raises the border alpha to 0.6.
- **button-secondary** (header Log in / Register): transparent, text `#222222`, 14px/700, border
  `2px solid #dadada`, radius 3px, padding `0px 15px`, height 30px, line-height 26px. Hover:
  text `#ff2449`, background `#ffffffcc`.
- **button-ghost-on-dark** ("Get the game →" on the featured hero): white text 18px/900, border
  `2px solid #ffffff`, radius 3px, padding `5px 12px`, height 36px, followed by an arrow.
- **button-primary** (filled): measured on the creator page leafo.itch.io/x-moon as "Download
  Now" — background `#fa5c5c`, white 14px/700, radius 3px, padding `0px 10px`, height 35px,
  border `1px solid #0000001a`, inset sheen. Creator pages can recolor it through
  `--itchio_button_color` and related variables, so treat this as one themed instance.
- **collection-overlay-button** ("Add to collection" over a cover): background `#1e1e1ee6`, white
  text, radius 3px, height 28px; hover background `#282828e6`.

### Cards & Containers
- **card-game-cell**: a 227px-wide cover (shadow `rgba(0, 0, 0, 0.15) 0px 0px 2px 0px`), then a row
  with the title (14px/700 `#222222`, underline on hover) and a right-aligned price or meta tag,
  then red hashtag genres in `#da2c49`, then a 12px description with 14.4px line-height. No card
  background, border or padding — the cell is just the cover and text.

### Inputs & Forms
- **text-input** (header search): no visible box of its own in the computed style, 14px/400
  `#222222`, padding `4px 0px 4px 10px`, height 30px, ~248px wide, with a magnifier icon.
  Root variables declare `--itchio_input_border_color: #cdcdcd` and
  `--itchio_input_focus_color: #361275`. The login and register pages returned HTTP 403 to the
  extractor, so no full form was measured.

### Navigation
- **nav** (header): white, 50px, padding `0px 20px 0px 22px`, shadow
  `rgba(0, 0, 0, 0.1) 0px 1px 2px 0px`. Logo (black icon + "itch.io" 32px/700), then **nav-tab**
  items 16px/700 `#222222` with padding `5px 0px` and a 4px transparent bottom border slot
  (active tab indicator), then the search field and the two secondary buttons at the right.
- **sidebar**: `#f4f4f4`, uppercase 15px/900 `#434343` headings, two-column lists of
  **sidebar-tag-link** items (14px/400, padding `3px 10px`, radius 4px, height 27px), a social
  row and a "Download app" link (13px, padding `4px 8px`, radius 3px, hover `#ff2449`).

### Pills, Tags, and Chips
- **tag-price**: `#737373`, white 12px/700, uppercase, 0.6px tracking, radius 3px, padding `2px 5px`.
- **tag-meta** (FREE, WEB): `#2323231a` background, `#222222` text, same type and shape.
- **tag-sale**: `#34a0f2` background, `#ffffffcc` text, radius `0px 2px 2px 0px`, joined to a
  gray price block with radius `2px 0px 0px 2px`.

### Signature Components
- **Featured-game hero**: full main-column width on a dark scrim; a video or screenshot left, the
  title at 28px/900 white, a 16px/700 white short text, three screenshots in a row, a FREE meta
  tag, hashtag tags at the right and the ghost "Get the game →" button.
- **app-banner**: a dark strip with a white-bordered "Download app" button and the message "Get
  the most out of itch.io! Install and manage your games with our desktop app", white 16px,
  padding `15px 40px`, 67px tall.
- **Intro line**: "itch.io is a simple way to find and share indie games online for free." with
  underlined `#da2c49` links "Add your game" or "Read the FAQ".
- **footer**: `#858585` 14px text, padding `20px 20px 0px`, uppercase social icons and the
  copyright line "Copyright © 2026 itch corp" (line-height 25px).

## Design System Architecture

**itch.io publishes no public design system, component library or token package for its
website.** Searches for an itch.io design system, component library, token npm package and
GitHub source (listed in SOURCES.json) found none; the third-party "itch-io design.md" pages that
surfaced were ignored. What exists officially:

- **Brand guidelines** — the [press kit](https://itch.io/press-kit) defines a single brand color
  ("itchy carnation" `#fa5c5c`), three text colors for white backgrounds (`#222222`, `#434343`,
  `#858585`), the Lato typeface, logo files (black, white, app icon, badges) and lowercase naming.
- **Token architecture (de-facto, measured)** — the live site exposes a flat set of CSS custom
  properties on `:root`, all prefixed `--itchio_` and named by role rather than by tier:
  `--itchio_body_color`, `--itchio_body_color_med`, `--itchio_body_color_light`,
  `--itchio_body_color_lighter`, `--itchio_body_color_gray`, `--itchio_border_color`,
  `--itchio_edge_border_color`, `--itchio_input_border_color`, `--itchio_input_focus_color`,
  `--itchio_gray_back`, `--itchio_white_back`, `--itchio_bg_color`, `--itchio_brand_color`,
  `--itchio_warning_bg`, `--itchio_light_highlight`, `--itchio_target_bg` and
  `--itchio_gutter_width`. There is no visible primitive → semantic → component tiering;
  component classes use snake_case (`game_cell`, `price_tag`, `free_tag meta_tag`,
  `panel_button register_button`, `button outline forward_link`, `primary_header`).
- **Theming** — theming is a creator feature, not a light/dark mode. The
  [page design guide](https://itch.io/docs/creators/design) lets creators set BG, BG2 (with
  opacity), Text, Link, Buttons and Headers colors, the page font and size, a header font from
  Google Fonts, a banner and a background image. The
  [CSS guide](https://itch.io/docs/creators/css-guide) documents the theme variables applied on
  `#wrapper`: `--itchio_link_color`, `--itchio_button_color`, `--itchio_button_fg_color`,
  `--itchio_button_hover_color`, `--itchio_button_active_color`,
  `--itchio_button_shadow_color`, `--itchio_button_border_color`, `--itchio_border_color` and
  `--itchio_border_radius`. Custom classes must start with `custom-` and all custom rules must
  be scoped inside `#wrapper`. No site-wide dark mode or density mode was found.
- **Type & spacing** — one family (Lato, per the press kit), measured sizes 12–32px, no
  documented scale or base unit. Layout widths are documented for creator pages: `#inner_column`
  960px default, `.formatted_description` 553px default, jam `.jam_body` 960px max
  ([CSS guide](https://itch.io/docs/creators/css-guide)).
- **Component model** — no official inventory is published for the website. The open-source
  itch desktop app ([itchio/itch styles.ts](https://raw.githubusercontent.com/itchio/itch/master/src/renderer/styles.ts))
  keeps its own named palette (e.g. `carnation` `#fa5c5c`, `flushMahogany` `#d14343`, `sale`
  `#34a0f2`, dark `background` `#1d1d1d`, `border` `#404040`), a font-size map (`small` 12px,
  `baseText` 15px, `large` 16px, `huge` 19px, `huger` 23px, `enormous` 30px) and a 4px
  `explanation` radius — the app, not the website, but the same brand palette.
- **Accessibility** — the CSS guide requires that custom pages stay accessible and mobile
  responsive and forbids tricking visitors into unintended actions; the design guide recommends
  checking smaller resolutions. No contrast target, focus style or touch-target size is
  documented. The homepage includes a skip link ("Skip to main content", `#ff2449` background,
  shown on focus) and screen-reader-only labels on overlay buttons.
- **Delivery** — no npm package, Figma kit or versioned release. Brand assets ship as a
  logo/badge zip from the press kit; the desktop app source is on GitHub.

## Do's and Don'ts

### Do
- Keep the chrome white `#ffffff` / `#f4f4f4` with `#222222` text and let cover art supply color.
- Use Lato at 400 for reading, 700 for titles and buttons, 900 for section headings.
- Use `#ff2449` for action outlines and hover text, `#da2c49` for inline links and hashtags.
- Keep radii at 2px, 3px or 4px; most interactive elements are 3px.
- Use outline buttons (`1px solid #ff244966`) beside section titles, not filled red slabs.
- Show price as a solid `#737373` tag and FREE / WEB as a translucent `#2323231a` tag, 12px/700
  uppercase with 0.6px tracking.
- Write lowercase "itch.io" and "itch", and keep microcopy plain and friendly.
- Pack the grid densely: four 227px covers per row with short two-line descriptions.

### Don't
- Don't add gradients, glassmorphism or heavy shadows; the only shadows are 1–2px.
- Don't use pill-shaped buttons in the main chrome.
- Don't capitalize the brand ("Itch.io", "ITCH.IO").
- Don't distort the logo, add effects to it or hotlink the press-kit images.
- Don't swap Lato for a geometric display face in the store UI.
- Don't round cover images or put them in padded cards.
- Don't use the carnation `#fa5c5c` as a large background block on the homepage — it is the
  brand color, but the shipped store chrome uses it nowhere as a fill.

## Responsive Behavior

### Breakpoints
Measured at two widths: 1280px desktop and 390px mobile. No breakpoint values are published.

### Touch Targets
Desktop controls are small: secondary buttons 30px tall, outline buttons 28px, sidebar links
27px, the featured ghost button 36px. No touch-target rule is documented.

### Collapsing Strategy
At 390px the h1 logotype stays 32px/700, sidebar headings stay 15px/900, and body text drops from
16px to 14px ("Constantly updating with the latest games on itch.io" measures 16px desktop,
14px mobile). The most-read size on mobile is still 12px, then 14px.

### Image Behavior
Covers keep their landscape ratio and scale with the grid column; narrow-screen layout of the featured hero was not measured.

## Iteration Guide

1. Start with the two surfaces: `#f4f4f4` sidebar and gutters, `#ffffff` main column.
2. Set every text node in Lato; `#222222` for body, `#434343` for uppercase sidebar headings,
   `#606060` for subtitles, `#858585` for timestamps and footer.
3. Build the 50px white header with the 1px 2px shadow and 16px/700 nav tabs.
4. Add Log in / Register as 30px, `2px solid #dadada`, 3px-radius buttons that turn text
   `#ff2449` on hover.
5. Lay out section headings at 20px/900 with a `#ff2449` outline "View all →" button.
6. Fill a four-column grid of game cells: 227px cover, 14px/700 title, `#da2c49` hashtags,
   12px description with 14.4px line-height, and a price or meta tag at the right.
7. Add the dark featured hero with a 28px/900 white title and a white 2px ghost button.
8. Check every radius is 0px, 2px, 3px or 4px and every shadow is one of the listed values.
9. For creator pages, expose the documented `--itchio_*` theme variables instead of hard-coding
   the homepage palette.
10. Compare against the capture: the UI should look plain until the cover art loads.
