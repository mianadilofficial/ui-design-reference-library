---
version: alpha
name: Naiin (นายอินทร์)
category: "Thai Brands"
description: >-
  Naiin, the Thai online bookstore: a blue-and-teal storefront set entirely in Noto Sans Thai, with a brand blue (#0059af) header, a teal (#1eb2aa) 300px-radius login pill, cream (#fff4e8) shelf bands and dense book-cover carousels.
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#1eb2aa"
  on-primary: "#ffffff"
  surface-cream: "#fff4e8"
  surface-gray: "#f6f6f6"
  ink-body: "#2c2c2c"
  brand-blue: "#0059af"
  ink-muted: "#717171"
  ink-gray: "#808080"
  ink-quiet: "#666666"
  primary-hover: "#1ca9a2"
  button-secondary-bg: "#04a6b1"
  button-secondary-border: "#ededed"
  card-bg: "#003a7033"
  footer-border: "#0000001a"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 16px
  display-mobile:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 16px
  body:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 13px
    fontWeight: 200
    lineHeight: 20px
  button:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 17.5px
    textTransform: uppercase
  button-secondary:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 18px
    fontWeight: 600
  input:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 7px
  sm: 8px
  md: 10px
  lg: 30px
  xl: 40px
  2xl: 100px
  3xl: 200px
  4xl: 300px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 20px
  s10: 22px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 0px 15px
    height: 36px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 7px 35px
    height: 42px
    borderColor: "{colors.button-secondary-border}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.brand-blue}"
    padding: 0px 30px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xl}"
    padding: 0px 8px 0px 10px
    height: 34px
  footer:
    backgroundColor: "{colors.surface-gray}"
    textColor: "{colors.ink}"
    borderColor: "{colors.footer-border}"
---

## Overview

Naiin (นายอินทร์) is a Thai bookstore storefront whose page title, as measured, reads "ร้านหนังสือนายอินทร์ ร้านขายหนังสือออนไลน์ อีบุ๊ก และสินค้าไลฟ์สไตล์" — an online shop for books, e-books and lifestyle goods. The page is a catalogue first and a brand statement second. A blue (`{colors.brand-blue}` `#0059af`) header carries a white search field, a basket icon and a teal login pill; beneath it a white strip of category links leads into a wide promotional carousel, a row of circular blue icon shortcuts, and then shelf after shelf of book covers.

The visual character is busy but orderly. Book covers, sale banners and a Halloween campaign supply nearly all of the colour; the interface itself stays in a narrow range of blues and teals on white, with warm cream (`{colors.surface-cream}` `#fff4e8`) panels behind the two best-seller shelves so each reads as a distinct display table. Every piece of text is Noto Sans Thai, and the interface speaks in short Thai nouns: โปรโมชั่น, ข่าวสาร, อ่านฟรี, วิธีการสั่งซื้อ, สาขานายอินทร์.

**Key Characteristics:**
- Noto Sans Thai is the only text face, loaded at weights 300, 400, 500 and 600 plus a 700 display weight.
- Brand blue `{colors.brand-blue}` for the header, section headings and "ดูทั้งหมด >" links; teal `{colors.primary}` for the login pill and `{colors.button-secondary-bg}` for the active shelf tab.
- Cream `{colors.surface-cream}` and light-gray `{colors.surface-gray}` bands separate shelves and the footer from the white canvas `{colors.canvas}`.
- Pill-shaped controls: the primary button uses a `{rounded.4xl}` (300px) radius, the search field `{rounded.xl}` (40px).
- Very small body copy (`{typography.body}`, 13px at weight 200) because product metadata dominates the page.

## Colors

The palette is two families, blue and teal, over a white canvas. Hexes are the measured values; the captured page is the source for where each appears.

### Brand & Accent
- **Teal** (`{colors.primary}` — `#1eb2aa`): fill of the login / register button in the header, the detected primary call to action; its hover state is `{colors.primary-hover}` (`#1ca9a2`). Text on it is `{colors.on-primary}` (`#ffffff`).
- **Deep teal** (`{colors.button-secondary-bg}` — `#04a6b1`): fill of the active "หนังสือ" tab above the recommendation shelf, with a `{colors.button-secondary-border}` (`#ededed`) hairline.
- **Brand blue** (`{colors.brand-blue}` — `#0059af`): the header bar and the shelf headings such as "อีบุ๊กขายดี".

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page background and book-card ground.
- **Cream** (`{colors.surface-cream}` — `#fff4e8`): the rounded panels behind the e-book and book best-seller shelves.
- **Light gray** (`{colors.surface-gray}` — `#f6f6f6`): footer ground, with a `{colors.footer-border}` (`#0000001a`) rule.

### Text
- **Ink** (`{colors.ink}` — `#000000`) is the most-read colour; `{colors.ink-body}` (`#2c2c2c`) is the second most-read; `{colors.ink-muted}` (`#717171`), `{colors.ink-gray}` (`#808080`) and `{colors.ink-quiet}` (`#666666`) carry author names, categories and strikethrough list prices.

Red percentage tags and the campaign artwork add further colour, but they were not captured as interface tokens, so they are left out of the token set.

## Typography

### Font Family
Everything is set in Noto Sans Thai with a generic sans-serif fallback. The extractor's loaded-font list shows four static weights (300, 400, 500, 600). No Latin display face is used; English titles on covers are part of the cover images.

### Hierarchy
| Role | Size | Weight | Notes |
|---|---|---|---|
| `{typography.display}` | 24px | 700 | Shelf headings, brand blue |
| `{typography.display-mobile}` | 18px | 700 | Same heading at a 390px viewport |
| `{typography.body}` | 13px | 200 | Product metadata, 20px line height |
| `{typography.button}` | 14px | 600 | Login pill, uppercase transform |
| `{typography.button-secondary}` | 18px | 600 | Active tab |
| `{typography.input}` | 16px | 400 | Search field |

### Principles
Weight does the hierarchy work: 700 for headings, 600 for buttons and prices, a very light 200 for descriptive copy. Thai script has no capitals, so the uppercase transform on `{typography.button}` only affects Latin characters. The measured display line height is smaller than the display size; headings sit on their own row with generous margin instead of relying on leading.

### Note on Font Substitutes
Noto Sans Thai is an open-source family; no substitute is needed. If it fails to load, a system Thai sans-serif is the fallback named in the stack.

## Layout

### Spacing System
The measured spacing scale runs 2, 4, 5, 7, 8, 10, 12, 15, 20 and 22px (`{spacing.s1}` to `{spacing.s10}`). Shelf cards sit with roughly 8–12px gutters; section headers sit above the shelf with the "ดูทั้งหมด >" link right-aligned on the same row.

### Grid & Container
The page is measured at a 1280px viewport. Content runs nearly edge to edge in a single wide column: a three-up promo carousel with partial neighbours peeking in, an eight-icon shortcut row, then horizontally scrolling shelves of seven or more covers with a circular next arrow at the right edge.

### Whitespace Philosophy
Density is high. White space is spent between sections (a rounded cream panel, then a gap, then the next heading) rather than inside card rows, where cover, title, author, format, price and a round basket button are stacked tightly.

## Elevation & Depth

Depth is mostly flat. The most common measured shadow is a soft three-layer shadow built from `rgba(17, 17, 26, 0.1)` offsets (1px, 2px and a 16px-offset 48px blur), used on floating panels; inset 4px bottom shadows appear on some controls. Book covers carry no shadow of their own and rely on their artwork edges. Cream panels with 10px corners, not shadows, group content.

## Shapes

### Border Radius Scale
`{rounded.xs}` 7px, `{rounded.sm}` 8px, `{rounded.md}` 10px (the most frequent measured radius), `{rounded.lg}` 30px, `{rounded.xl}` 40px, `{rounded.2xl}` 100px, `{rounded.3xl}` 200px and `{rounded.4xl}` 300px. The last four are all "fully round" for their elements; 300px on the 36px-tall login pill simply means a capsule.

### Photography Geometry
Book covers are rectangular with square corners and a small diagonal "BEST SELLER" ribbon in the top-right corner and a red percentage tag at top-left. Circular icon buttons use a light blue ring with a blue glyph.

## Components

### Buttons
**Primary (`button-primary`)**: `{colors.primary}` fill, white text, `{typography.button}`, `{rounded.4xl}` radius, 36px tall, `0px 15px` padding. Hover darkens to `{colors.primary-hover}`.
**Secondary (`button-secondary`)**: `{colors.button-secondary-bg}` fill, white 18px/600 text, `{rounded.sm}` radius, 42px tall, `7px 35px` padding, `{colors.button-secondary-border}` border.

### Inputs
The header search field (`text-input`) is a white pill, 34px tall, `{rounded.xl}`, with `0px 8px 0px 10px` padding and 16px text; a magnifier sits at the left.

### Navigation
The nav (`nav`) is the `{colors.brand-blue}` bar with `0px 30px` side padding; the second row of links is dark-blue Noto Sans Thai at 13px weight 200, ending in a "หมวดหมู่" menu.

### Product shelves
Shelf cards are unframed: cover, two-line title, author, rating stars, format label, blue price with a struck-through original price beneath it, and a round blue basket button.

### Footer
Light gray `{colors.surface-gray}` ground with a hairline border.

## Design System Architecture

No public design-system or brand-guideline page was reachable (the site's pages returned HTTP 402 to the research fetcher). The de-facto system is visible in measured CSS: root variables are named `--tw-*` (for example `--tw-font-weight-medium`, `--tw-text-3xl` and `--tw-leading-snug`), showing a Tailwind-style utility build. Colour, radius and spacing are therefore applied utility by utility rather than from a named brand token layer, which is why the same blue appears under several text and background roles. The tokens in this file are the measured values renamed to their visible jobs.

## Do's and Don'ts

### Do
- Use `{colors.primary}` for the single account action and keep it capsule-shaped.
- Put section headings in `{colors.brand-blue}` at `{typography.display}`.
- Back best-seller shelves with `{colors.surface-cream}` panels.
- Keep Noto Sans Thai as the only text face.

### Don't
- Don't use the red percentage tags or the campaign artwork colours as interface colours.
- Don't add shadows to book covers.
- Don't use body weight 200 below 13px; it is already the lightest weight used.
- Don't mix the teal buttons with other accent hues.

## Responsive Behavior

The only measured mobile difference (390px viewport) is the section heading, which shrinks from `{typography.display}` (24px) to `{typography.display-mobile}` (18px). Other mobile layout behaviour was not measured and is not described here. On desktop the shelves are horizontal scrollers with circular arrow buttons at the right edge, and the category strip ends in a "หมวดหมู่" menu entry.

## Iteration Guide

1. Start from white `{colors.canvas}`, a `{colors.brand-blue}` header and Noto Sans Thai.
2. Add the teal capsule `button-primary` once, top right.
3. Build each shelf as heading, "ดูทั้งหมด >" link and a horizontal row of covers; give the first two shelves cream panels.
4. Check that body copy stays 13px and prices use weight 600.
5. Re-run `node web/scripts/verify-designs.mjs --slug=naiin` after any token rename.
