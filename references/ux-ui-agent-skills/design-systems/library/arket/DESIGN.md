---
version: alpha
name: ARKET
category: "Fashion & Apparel"
description: "ARKET's web store as measured on arket.com: a white #ffffff canvas, pure black #000000 text and buttons, and full-bleed editorial photography, set entirely in the brand's own monospaced arketSansMono (one weight, 400) with an arketSCSansMono small-caps companion for chips and badges. Corners are almost square — 2px buttons, 1px badges, 4px search field — with 12px pill-ish category chips in #eaeae8, a cream #fff3db 'New' badge and sale red #d80404 as the only accents."

colors:
  primary: "#000000"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#000000"
  ink-muted: "#767676"
  surface-soft: "#f5f5f5"
  input-fill: "#f9f9f9"
  chip: "#eaeae8"
  badge-new: "#fff3db"
  sale-red: "#d80404"
  flag-blue: "#0851bd"
  hairline: "#e0e0e0"
  hairline-alt: "#dddddd"
  overlay: "#a49b7033"

typography:
  display:
    fontFamily: "arketSansMono, \"arketSansMono Fallback\", sans-serif"
    fontSize: 60px
    fontWeight: 400
  display-mobile:
    fontFamily: "arketSansMono, \"arketSansMono Fallback\", sans-serif"
    fontSize: 40px
    fontWeight: 400
  heading-page:
    fontFamily: "arketSansMono, \"arketSansMono Fallback\", sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 34px
  heading-page-mobile:
    fontFamily: "arketSansMono, \"arketSansMono Fallback\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 30px
  heading-section:
    fontFamily: "arketSansMono, \"arketSansMono Fallback\", sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 28px
  heading-section-mobile:
    fontFamily: "arketSansMono, \"arketSansMono Fallback\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
  nav-mobile:
    fontFamily: "arketSansMono, \"arketSansMono Fallback\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  body:
    fontFamily: "arketSansMono, \"arketSansMono Fallback\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  nav:
    fontFamily: "arketSansMono, \"arketSansMono Fallback\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 30px
  product-name:
    fontFamily: "arketSansMono, \"arketSansMono Fallback\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18px
  label-smallcaps:
    fontFamily: "arketSCSansMono, \"arketSCSansMono Fallback\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  body-small:
    fontFamily: "arketSansMono, \"arketSansMono Fallback\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  badge:
    fontFamily: "arketSCSansMono, \"arketSCSansMono Fallback\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
  root:
    fontFamily: "arketSansMono, \"arketSansMono Fallback\", sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 15px

rounded:
  none: 0px
  badge: 1px
  button: 2px
  input: 4px
  card: 6px
  chip: 12px

spacing:
  xxs: 2px
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  2xl: 32px
  3xl: 48px
  4xl: 64px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.button}"
    padding: 4px 12px
    height: 32px
  button-primary-hover:
    opacity: 0.9
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.button}"
    border: "1px solid #000000"
    padding: 4px 12px
    height: 32px
  button-secondary-hover:
    backgroundColor: "{colors.primary}"
    opacity: 0.9
  label-on-image:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.heading-section}"
    rounded: "{rounded.button}"
    padding: 10px 16px
    height: 50px
  chip-category:
    backgroundColor: "{colors.chip}"
    textColor: "{colors.ink}"
    typography: "{typography.label-smallcaps}"
    rounded: "{rounded.chip}"
    border: "1px solid #eaeae8"
    padding: 0px 12px 2px
    height: 28px
  chip-active:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.label-smallcaps}"
    rounded: "{rounded.chip}"
    padding: 0px 12px 2px
    height: 28px
  tag-new:
    backgroundColor: "{colors.badge-new}"
    textColor: "{colors.ink}"
    typography: "{typography.badge}"
    rounded: "{rounded.badge}"
    padding: 2px 6px 4px
    height: 18px
  search-input:
    backgroundColor: "{colors.input-fill}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.input}"
    padding: 0px 48px 0px 44px
    height: 40px
  card-product:
    textColor: "{colors.ink}"
    typography: "{typography.product-name}"
    rounded: "{rounded.none}"
  card-country:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    height: 120px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer-legal-bar:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    padding: 10px 32px
    height: 46px
---

## Overview

ARKET (H&M Group's "modern-day market", whose name means "sheet of paper" in Swedish per
https://hmgroup.com/?p=22638) runs a store that looks like a printed catalogue. The homepage is a grid
of full-bleed photographs that touch each other edge to edge: a woman in a herringbone blazer, a black
duffle coat, a man in a purple jumper, a seated woman in black under "SALE IS NOW OPEN". Each tile
carries a small white rectangular label ("Women's new arrivals", "Women's coats and jackets").

Everything typographic is set in ARKET's own monospaced face (served as `arketSansMono`), at a
single weight. There is no bold anywhere — the extraction found weight 400 for 100% of characters.
Hierarchy comes only from size, case (uppercase product names) and the small-caps companion
(`arketSCSansMono`) used for chips, badges and counts.

Colour is almost absent from the interface: white canvas, black text, black buttons. The only accents
are functional — sale red `#d80404` on the "Sale" nav item, a cream `#fff3db` "New" badge, a blue
`#0851bd` "New" flag in the menu, and the soft grey `#eaeae8` of category chips. The photography
supplies all the colour.

Corners are nearly square. Buttons are 2px, badges 1px, the search field 4px, product images 0px.
The only noticeably rounded element is the 12px category chip.

**Key characteristics**
- One monospaced family at one weight (400), plus a small-caps cut.
- White `#ffffff` canvas, black `#000000` text and buttons.
- Full-bleed, edge-to-edge editorial photography with 4px gutters in product grids.
- Near-square shapes: 0px / 1px / 2px / 4px, 12px for chips.
- Sticky 120px white header closed by a 2px black rule.
- Uppercase product names and prices at 16px/18px.
- Sale red `#d80404` is the only "loud" colour.

## Colors

### Brand & Accent
- **Primary** `#000000`: primary buttons ("Continue to Argentina"), active "View all" chip, footer
  legal bar, all text.
- **On primary** `#ffffff`.
- **Sale red** `#d80404`: the "Sale" item in the main navigation.
- **Flag blue** `#0851bd`: the small-caps "New" flag next to menu items.

### Surface
- **Canvas** `#ffffff`: page background, header, footer.
- **Surface soft** `#f5f5f5`: soft panels (measured as a background area on both pages).
- **Input fill** `#f9f9f9`: the header search field.
- **Chip** `#eaeae8`: category chips (background and 1px border).
- **Badge new** `#fff3db`: cream "New" badge on product cards.
- **Overlay** `#a49b7033`: translucent warm tint measured over the page while the location dialog is open.

### Text
- **Ink** `#000000`: 18,000+ characters of measured text on each page are pure black.
- **Ink muted** `#767676`: field labels ("Search country") and "Not available".
- Search text renders at `rgba(0, 0, 0, 0.6)` placeholder strength.

### Borders
- **Hairline** `#e0e0e0` and **hairline alt** `#dddddd`: thin dividers.
- Buttons and the header rule use pure black borders (1px buttons, 2px header).

## Typography

### Font Family
- **arketSansMono** — `var(--font-regular)`: `'arketSansMono', 'arketSansMono Fallback'`.
- **arketSCSansMono** — `var(--font-small-caps)`: `'arketSCSansMono', 'arketSCSansMono Fallback'`.
- The third-party cookie banner uses a separate `"Arket Sans"` stack at 13px; it is not part of the
  store UI and is excluded from the tokens.
- According to ARKET's in-house team, the typeface is "Arket Sans by Icelandic and Danish design duo,
  Or Type", with "monospace numerals, small caps, icons for Arket's digital store and custom care
  symbols" (https://www.itsnicethat.com/articles/arket-identity-graphic-design-121017).

### Hierarchy

| Token | Family | Size | Line height | Case | Where |
|---|---|---|---|---|---|
| display | arketSansMono | 60px | — | as typed (uppercase copy) | "SALE IS NOW OPEN" over photo |
| display-mobile | arketSansMono | 40px | — | — | same at 390px |
| heading-page | arketSansMono | 28px | 34px | — | category h1 "Women's knitwear" |
| heading-page-mobile | arketSansMono | 24px | 30px | — | same at 390px |
| heading-section | arketSansMono | 22px | 28px | — | "Discover more", footer h2, image labels |
| heading-section-mobile | arketSansMono | 20px | 26px | — | footer h2 at 390px |
| nav | arketSansMono | 16px | 30px | — | Women / Men / Children / Homeware / Sale |
| nav-mobile | arketSansMono | 20px | 28px | uppercase | mobile menu |
| body | arketSansMono | 16px | 22px | — | running text, buttons, search |
| product-name | arketSansMono | 16px | 18px | uppercase | product name and price |
| label-smallcaps | arketSCSansMono | 16px | 16px | small caps | chips, "74 items" |
| body-small | arketSansMono | 12px | 16px | — | "Read more", country list text |
| badge | arketSCSansMono | 12px | 12px | small caps | "New" badge |
| root | arketSansMono | 10px | 15px | — | `html` font-size; wrappers only |

All weights are 400. Letter-spacing is `normal` everywhere (no tracking values were measured).
Line heights for the 60px/40px display were not isolated and are omitted.

### Principles
- Never bold. Use size, uppercase or small caps for emphasis.
- Monospaced rhythm: prices and names align like a ledger.
- Product names and prices are uppercase at 16px/18px, tight leading.
- The root is 10px, so rem values in ARKET's CSS are tenths of the px value (e.g. 2.56rem = 25.6px).

### Note on Font Substitutes
Arket Sans is bespoke: the Or Type site (https://ortype.is) does not list it, and no retail licence was
found. A substitute must be a monospaced grotesque with a single regular weight and a true small-caps
companion; keep the measured sizes and line heights, letter-spacing normal.

## Layout

### Spacing System
- Gaps: 16px (dominant), 8px, 4px, 6px, 64px, 32px, 24px, 12px, 48px.
- Paddings: 16px, 8px, 4px, 12px, 6px, 2px, 10px, 32px.
- Product grid: four 317px columns, column gap 4px, row gap 16px, 24px top padding (at 1280px).
- Footer legal bar padding 10px 32px.

### Grid & Container
- Homepage: two-column full-bleed photo grid (each tile 640px wide at 1280px), no gutters between tiles.
- "Discover more": four images in a row with small gaps, inset from the edge (capture).
- Category: four-up product grid with 3:4 images (317 × 422.66px), object-fit cover.

### Whitespace Philosophy
Tight and orderly. Photos touch; text blocks sit close to the images they describe; the sticky
header keeps navigation always visible. White space is mostly the white of the canvas between
grid rows (16px) and under section headings.

## Elevation & Depth

| Level | Value | Use |
|---|---|---|
| 0 | none | everything in the store UI |
| 1 | `rgba(0, 0, 0, 0.1) 0px 2px 10px 2px` | country rows in the location dialog (6px radius) |

The CSS corpus also contains `0 4px 16px rgba(0, 0, 0, 0.2)` and the toast shadow
`0px 4px 12px rgba(0, 0, 0, 0.1)` (`--toastify-toast-shadow`). Depth otherwise comes from photography.

### Decorative Depth
None — no gradients or textures. A small "+" button sits on the edge of photo tiles (capture).

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| none | 0px | photos, product cards, header |
| badge | 1px | "New" badge |
| button | 2px | primary / secondary / filter buttons, image labels |
| input | 4px | header search field |
| card | 6px | location dialog country rows |
| chip | 12px | category chips (28px tall) |

The extraction also counts a 20px radius on 3 elements whose role was not identified.

### Photography Geometry
Product images are 3:4 portrait, 0px radius, cover-cropped. Homepage tiles are large portrait crops,
edge to edge. Subjects are single models in neutral studios or soft interiors; colours are muted and
natural.

## Components

### Buttons
- **button-primary** — black `#000000` background, white label, arketSansMono 16px/22px, padding 4px
  12px, height 32px, radius 2px. Hover: opacity 0.9. (Measured on "Continue to Argentina".)
- **button-secondary** — transparent with 1px black border, black label, same metrics. Hover: background
  turns black, opacity 0.9. (Measured on "Stay in Thailand".)
- **Filter** button on the category page: transparent, 1px solid black, 16px/22px, padding 4px 12px,
  32px tall, radius 2px.
- **label-on-image** — white box, 22px/28px black text, padding 10px 16px, 50px tall, radius 2px
  ("Women's new arrivals").

### Chips & Tags
- **chip-category** — `#eaeae8` background and 1px border, 12px radius, padding 0px 12px 2px, 28px tall;
  label arketSCSansMono 16px/16px black ("Cardigans", "Cashmere collection").
- **chip-active** — the "View all" chip: black background, white small-caps label.
- **tag-new** — `#fff3db` background, black arketSCSansMono 12px/12px, padding 2px 6px 4px, 18px tall,
  1px radius.

### Inputs & Forms
- **search-input** — `#f9f9f9` fill, no border, radius 4px, 600 × 40px, padding 0px 48px 0px 44px
  (search icon left), text 16px/22px at `rgba(0, 0, 0, 0.6)`.
- Location dialog: a bordered "Search country" field with a magnifier icon and a 2px black rule under
  the dialog title (capture).

### Cards & Containers
- **card-product** — no frame: 3:4 image, then uppercase name and price at 16px/18px, optional "New" tag.
- **card-country** — white rows with 6px radius and the level-1 shadow, flag + country + currency code.

### Navigation
- Sticky white header, 120px tall, closed by a 2px solid black rule.
- Top: "SALE | Now open" message bar; then the ARKET wordmark (uppercase, in the house face), a
  search field, and category links Women / Men / Children / Homeware / Sale (red) / ARKET CAFÉ at
  16px/30px.
- At 390px the menu items become uppercase 20px/28px.

### Footer
- White footer with 22px/28px section headings ("About ARKET") and 16px link lists.
- A black legal bar (46px, padding 10px 32px) with white "Terms & conditions | Privacy …" links.

### Signature Components
- Edge-to-edge photo grid with small white square labels.
- Uppercase monospaced product name + price.
- Small-caps chips and badges.

## Design System Architecture

ARKET publishes **no public design system** — no documentation site, token package, component
library or Figma kit was found (searches in `SOURCES.json`). The official identity facts available
are the typeface (Arket Sans by Or Type, with monospace numerals, small caps, store icons and care
symbols) and the logo as the brand name in uppercase in that typeface, from the in-house team's
interview (https://www.itsnicethat.com/articles/arket-identity-graphic-design-121017), and the
brand concept from H&M Group (https://hmgroup.com/?p=22638). The rest is the de-facto system on
the live site.

### Token architecture (de facto)
The only brand tokens on `:root` are two font variables: `--font-regular:'arketSansMono',
'arketSansMono Fallback'` and `--font-small-caps:'arketSCSansMono', 'arketSCSansMono Fallback'`.
The other custom properties belong to libraries — `--tw-*` (Tailwind utilities) and `--toastify-*`
(React-Toastify notifications, e.g. `--toastify-toast-bd-radius:6px`). Colours, radii and spacing are
literal values in classes, not named tokens.

### Theming
Light only. No dark-mode or high-contrast variables or classes were found.

### Type & spacing systems
- Root font-size 10px, so the stylesheet's rem sizes map to px ×10 (e.g. 2.56rem, 3.52rem, 6.4rem
  in the CSS corpus).
- One family, one weight; sizes 12 / 16 / 20 / 22 / 24 / 28 / 40 / 60px measured.
- Spacing clusters on 4px multiples (4 / 8 / 12 / 16 / 24 / 32 / 48 / 64) plus 2px and 6px.

### Component model
Measured inventory: primary and secondary buttons, filter button, image label, category chip, active
chip, "New" tag, search input, product card, country row, sticky header, footer with legal bar.

### Accessibility
No published rules. Observed: black on white text; 32px-tall buttons on desktop; field labels in
`#767676`.

### Delivery
The `--tw-*` variables indicate Tailwind CSS utilities and `--toastify-*` React-Toastify. No public
packages or versioning are published.

## Do's and Don'ts

### Do
- Use arketSansMono 400 for everything; switch to the small-caps cut for chips, badges and counts.
- Keep text and primary buttons pure black on pure white.
- Keep corners at 0–2px (1px badges, 4px search, 12px chips only).
- Uppercase product names and prices at 16px/18px.
- Let photography run edge to edge; use 4px gutters in product grids.
- Mark sale content in `#d80404` only.

### Don't
- Don't use bold or a second typeface.
- Don't add colour to buttons — they are black or outlined black.
- Don't round images or cards.
- Don't add drop shadows outside the location dialog.
- Don't add letter-spacing; the monospaced face carries the rhythm.

## Responsive Behavior

### Breakpoints
Media queries found in ARKET's stylesheets: `(min-width: 769px)`, `(max-width: 768px)`,
`(min-width: 1025px)`, `only screen and (max-width: 480px)`, `screen and (min-width: 35.5625em)`, plus
`(hover: hover) and (pointer: fine)` for hover effects.

### Touch Targets
- Buttons stay 32px tall on mobile ("Continue to Argentina" full width, 326px at 390px).
- Chips 28px; search 40px.

### Collapsing Strategy
- Page h1: 28px/34px → 24px/30px (bottom padding 16px → 8px).
- Section h2: 22px/28px → 20px/26px.
- Display: 60px → 40px.
- Navigation becomes an uppercase 20px/28px menu.
- Body text stays 16px; 12px small text remains.

### Image Behavior
Photos keep object-fit cover and 0px corners. The mobile column count of the product grid was not measured.

## Iteration Guide

1. White canvas, black arketSansMono 16px/22px, weight 400, no tracking.
2. Headings by size only: 28px/34px page, 22px/28px section, 60px display over photos.
3. Buttons: black fill or 1px black outline, 4px 12px padding, 32px tall, 2px radius, hover opacity 0.9.
4. Chips: `#eaeae8`, 12px radius, small-caps 16px label; active chip black/white.
5. Products: 3:4 image, uppercase 16px/18px name and price, cream `#fff3db` "New" tag with 1px radius.
6. Header: sticky, white, 2px black bottom rule; "Sale" in `#d80404`.
7. Footer: white with a black 46px legal bar.
