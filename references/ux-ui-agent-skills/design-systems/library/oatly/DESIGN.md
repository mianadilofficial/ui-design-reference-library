---
version: alpha
name: Oatly
category: "Food & Beverage"
description: "Oatly's US site rendered as a desktop 'browser window': a cream #fffef6 panel with a 1px #000000 frame on a white #ffffff grid backdrop, black #000000 Margo Pro Regular uppercase text at 16px, square cards with a 1px black border and a hard 2px 2px 0 black offset shadow, pastel tag chips (#fdcf85, #98c5d3, #f8c8d8, #c6c6c6), a black 9999px pill SHOW MORE button in Margo Pro Bold, and loud display faces (Girdo Black Pro, Toni Noveau Pro) on inner pages."

colors:
  primary: "#000000"
  on-primary: "#ffffff"
  canvas: "#fffef6"
  frame: "#ffffff"
  surface: "#ffffff"
  ink: "#000000"
  hover-gray: "#888888"
  muted-gray: "#c6c6c6"
  chip-gray: "#f4f4f4"
  primary-yellow: "#fdcf85"
  primary-blue: "#98c5d3"
  primary-pink: "#f8c8d8"
  primary-purple: "#a67eb1"
  primary-brown: "#a0632d"
  secondary-pink: "#fbcccc"
  secondary-red: "#e43e39"
  secondary-green: "#68c74e"
  secondary-dark-blue: "#24356a"
  secondary-light-gray: "#eeeeee"
  secondary-dark-gray: "#444444"
  nav-hover-tastebuds: "#fef4f7"
  nav-hover-news: "#fff5e7"
  nav-hover-sustainability: "#ede5ef"
  nav-hover-health: "#fef5f5"

typography:
  h1:
    fontFamily: "\"Margo Pro Regular\", sans-serif"
    fontSize: 28.4912px
    fontWeight: 400
    lineHeight: 28.4912px
  h1-mobile:
    fontFamily: "\"Margo Pro Regular\", sans-serif"
    fontSize: 21px
    fontWeight: 400
  display:
    fontFamily: "\"Girdo Black Pro\", Impact, sans-serif"
    fontSize: 110.667px
    fontWeight: 400
    lineHeight: 86.0987px
  display-mobile:
    fontFamily: "\"Girdo Black Pro\", Impact, sans-serif"
    fontSize: 59.5px
    fontWeight: 400
    lineHeight: 46.291px
  product-title:
    fontFamily: "\"Toni Noveau Pro\", sans-serif"
    fontSize: 74.9474px
    fontWeight: 400
    lineHeight: 62.4312px
  product-title-mobile:
    fontFamily: "\"Toni Noveau Pro\", sans-serif"
    fontSize: 42px
    fontWeight: 400
    lineHeight: 34.986px
  body-lg:
    fontFamily: "\"Margo Pro Regular\", sans-serif"
    fontSize: 19.1228px
    fontWeight: 400
    lineHeight: 22.9474px
  body:
    fontFamily: "\"Margo Pro Regular\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
  body-mobile:
    fontFamily: "\"Margo Pro Regular\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
  label:
    fontFamily: "\"Margo Pro Regular\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
  button-pill:
    fontFamily: "\"Margo Pro Bold\", sans-serif"
    fontSize: 19.1228px
    fontWeight: 400
    lineHeight: 19.1228px
  button-outline:
    fontFamily: "\"Margo Pro Regular\", sans-serif"
    fontSize: 19.1228px
    fontWeight: 400
    lineHeight: 19.1228px
  button-buy:
    fontFamily: "\"Margo Pro Regular\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px

rounded:
  none: 0px
  pill: 9999px
  circle: 50%

spacing:
  hairline: 1px
  tag-y: 1.6px
  xxs: 4.8px
  xs: 8px
  icon: 11.2px
  sm: 12px
  md: 16px
  window-inset: 17.6561px
  lg: 24px
  grid: 31.7193px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-pill}"
    textTransform: uppercase
    rounded: "{rounded.pill}"
    padding: 16px 24px
    height: 51px
  button-secondary:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.button-outline}"
    textTransform: uppercase
    rounded: "{rounded.none}"
    boxShadow: "inset 0 0 0 1px #000000"
    padding: 12px 16px
    height: 43px
  button-secondary-hover:
    boxShadow: "inset 0 0 0 1px #888888"
  button-buy:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-buy}"
    textTransform: uppercase
    rounded: "{rounded.none}"
    padding: 15px 24px
    height: 46px
  button-buy-hover:
    textColor: "{colors.muted-gray}"
    borderColor: "#c6c6c6"
  card:
    backgroundColor: "{colors.surface}"
    border: "1px solid #000000"
    boxShadow: "2px 2px 0 0 #000000"
    rounded: "{rounded.none}"
  card-meta:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    textTransform: uppercase
    padding: 8px
    gap: 8px 16px
  tag:
    backgroundColor: "{colors.primary-yellow}"
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    textTransform: uppercase
    rounded: "{rounded.none}"
    padding: 1.6px 8px
    height: 22px
  tag-blue:
    backgroundColor: "{colors.primary-blue}"
  tag-pink:
    backgroundColor: "{colors.primary-pink}"
  tag-gray:
    backgroundColor: "{colors.muted-gray}"
  breadcrumb-chip:
    backgroundColor: "{colors.chip-gray}"
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    textTransform: uppercase
    padding: 5px 8px 3.2px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body-lg}"
  link-hover:
    textColor: "{colors.hover-gray}"
  browser-window:
    backgroundColor: "{colors.canvas}"
    border: "1px solid #000000"
    margin: 17.6561px
  nav:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    height: 76px
  nav-top-rail-button:
    backgroundColor: "{colors.surface}"
    borderLeft: "1px solid #000000"
    padding: 11.2px
    width: 43px
    height: 42px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    textTransform: uppercase
    border: "4px solid #ffffff"
    padding: 2px 0px
    height: 32px
  nav-link-hover:
    backgroundColor: "{colors.chip-gray}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    border: "1px solid #000000"
    gap: 1px
  footer-link:
    backgroundColor: "{colors.surface}"
    typography: "{typography.label}"
    textTransform: uppercase
    padding: 4.8px
---

## Overview

Oatly's website is built as a joke on the medium itself: the whole page is drawn as a
desktop "browser window". On a 1280px viewport the body is white (#ffffff) and carries a faint
grid illustration (`browser-desktop-grid.svg`), and inset by 17.6561px sits a cream (#fffef6)
section with a 1px solid #000000 frame. That cream window is what the visitor perceives as the
page, so `canvas` is #fffef6 and the white grid around it is `frame` (#ffffff).

Inside the window, everything is monochrome black on cream or white. Text is set in the
house sans "Margo Pro Regular" in black (#000000), almost always uppercase, at a steady 16px.
There is no grey body text, no blue links, no gradients. Colour arrives only through the
photography and through tiny pastel tag chips — butter yellow #fdcf85 for NEWS, powder blue
#98c5d3 for OTHER, pink #f8c8d8 for TASTEBUDS, grey #c6c6c6 for PRODUCTS.

The homepage is a masonry-like grid of square-cornered cards. Each card is an image (campaign
photo, packaging, a zine-style poster) above a white meta bar holding an uppercase title on the
left and a tag chip on the right. Cards have a 1px black border and a hard, unblurred
2px 2px 0 black offset shadow — the look of a cut-out pasted onto paper, not of a floating
material surface.

The top-left of the window holds the mission statement as the visible h1: "WE EXIST TO MAKE IT
EASIER FOR PEOPLE TO LIVE HEALTHIER LIVES WITHOUT RECKLESSLY TAXING THE PLANET'S RESOURCES IN
THE PROCESS." set at 28.4912px uppercase with line-height equal to the font size, centred above
a square outlined "READ MORE →" button.

Inner pages raise the volume with display faces the site loads as separate font families:
"Girdo Black Pro" (a heavy condensed display; CONTACT US at 110.667px) and "Toni Noveau Pro"
(product names at 74.9474px). Body copy on those pages is 19.1228px Margo Pro Regular.

Voice of the microcopy is deadpan and self-aware: "FAQ" is labelled as "FREQUENTLY ASKED
QUEST…", the contact page opens with "Welcome to the Internet's leading page f[or]…", product
pages carry a section titled "I hate Oatly but I don't know how to put…", and the CTA on a
product reads "BUY IT HERE!". Navigation labels are blunt nouns: PRODUCTS, TASTEBUDS, NEWS,
SUSTAINABILITY, HEALTH.

**Key Characteristics:**
- Page drawn as a browser window: cream #fffef6 panel, 1px #000000 frame, 17.6561px inset on a white grid backdrop
- Black #000000 is both ink and the action colour; white #ffffff on black for filled buttons
- Margo Pro Regular uppercase at 16px / 19.2px for nearly every label
- Square corners everywhere (0px) except the black SHOW MORE pill (9999px)
- Hard offset shadow `2px 2px 0 0 #000000` + 1px black border on cards
- Pastel tag chips from the `--color-primary-*` palette
- Hairline 1px rules built from black backgrounds showing through 1px grid gaps (footer)
- Loud inner-page display type: Girdo Black Pro, Toni Noveau Pro

## Colors

### Brand & Accent
- **Primary / Black** (`#000000`): `--color-primary-black`. Text, borders, the filled SHOW MORE pill and BUY IT HERE! button. Oatly's action colour is black, not a hue.
- **On Primary** (`#ffffff`): text on black buttons.
- **Primary Yellow** (`#fdcf85`): `--color-primary-yellow`. NEWS tag chip; also the offset colour in the contact page's double shadow `2px 4px 0 #ffffff, 6px 8px 0 #fdcf85`.
- **Primary Blue** (`#98c5d3`): `--color-primary-blue`. OTHER tag chip.
- **Primary Pink** (`#f8c8d8`): `--color-primary-pink`. TASTEBUDS tag chip.
- **Primary Purple** (`#a67eb1`): `--color-primary-purple`. Measured as a small background area on the homepage.
- **Primary Brown** (`#a0632d`): `--color-primary-brown` (root variable).
- **Secondary Pink** (`#fbcccc`): `--color-secondary-pink`, measured as a small background area.
- **Secondary Red** (`#e43e39`), **Secondary Green** (`#68c74e`), **Secondary Dark Blue** (`#24356a`): root variables `--color-secondary-red`, `--color-secondary-green`, `--color-secondary-dark-blue`. They exist in the token set; the homepage capture does not show them as UI colour.

### Surface
- **Canvas** (`#fffef6`): the cream browser-window section, the largest painted area on the homepage.
- **Frame** (`#ffffff`): the body background behind the window (with the grid SVG), also card meta bars, nav cells and footer cells.
- **Surface** (`#ffffff`): white fill of meta bars, outline buttons, top-rail icon buttons.
- **Chip Gray** (`#f4f4f4`): breadcrumb chip on product listing, and hover fill of the PRODUCTS nav link.
- **Secondary Light Gray** (`#eeeeee`): `--color-secondary-light-gray` (root variable).

### Text
- **Ink** (`#000000`): every heading, label and paragraph. 774 of 840 measured homepage characters are black; the rest are white on black.
- **Hover Gray** (`#888888`): `--hover-color` / `--color-secondary-medium-gray`. Text links and breadcrumbs turn #888888 on hover; the outline button's 1px inset ring turns #888888.
- **Muted Gray** (`#c6c6c6`): `--color-primary-gray`. The BUY IT HERE! button's text and border turn #c6c6c6 on hover; PRODUCTS tag chip.
- **Secondary Dark Gray** (`#444444`): `--color-secondary-dark-gray` (root variable).

### Navigation hover tints
Each item of the bottom navigation rail fills with its own pale tint on hover (measured):
- PRODUCTS → `#f4f4f4`
- TASTEBUDS → `#fef4f7`
- NEWS → `#fff5e7`
- SUSTAINABILITY → `#ede5ef`
- HEALTH → `#fef5f5`

### Semantic
No error/success/warning colours were measured in a UI state and no official source documents
them, so none are declared.

## Typography

### Font Family
All families are served by the site as separate `@font-face` families, each at weight 400:
- **"Margo Pro Regular"** — the text face. Fallback declared by the site: `sans-serif`.
- **"Margo Pro Bold"** — the bold cut, loaded as its own family (used at `font-weight: 400`), e.g. the SHOW MORE pill.
- **"Girdo Black Pro"** — display face on inner pages; fallback `Impact, sans-serif`.
- **"Toni Noveau Pro"** — product-name display face; fallback `sans-serif`.
- Also present as `@font-face` in the CSS: "Girdo Rounded Pro", "Bjorn Serif Pro", "Tinny Serif Pro", "Petra Antikva Pro", "GT Alpina", "Courier Prime", "Univers", and the icon font "oatly-icons".

The site exposes a full heading/paragraph matrix in root variables, named
`--font-heading-{family}-{size}` and `--font-paragraph-{family}-{size}` with sizes
`xs, s, m, l, xl, xxl`, e.g. `--font-heading-girdo-xxl`, `--font-heading-toni-noveau-pro-l`,
`--font-paragraph-margo-pro-regular-m`, `--font-paragraph-margo-pro-bold-l`.

### Hierarchy

| Role | Font | Size | Weight | Line Height | Notes |
|------|------|------|--------|-------------|-------|
| Display (contact h1) | Girdo Black Pro | 110.667px | 400 | 86.0987px | uppercase |
| Display mobile | Girdo Black Pro | 59.5px | 400 | 46.291px | uppercase |
| Product title | Toni Noveau Pro | 74.9474px | 400 | 62.4312px | product h1 |
| Product title mobile | Toni Noveau Pro | 42px | 400 | 34.986px | |
| H1 (homepage mission) | Margo Pro Regular | 28.4912px | 400 | 28.4912px | uppercase, centred |
| H1 mobile | Margo Pro Regular | 21px | 400 | — | |
| Body large | Margo Pro Regular | 19.1228px | 400 | 22.9474px | inner-page paragraphs, links |
| Body | Margo Pro Regular | 16px | 400 | 20.8px | root text |
| Body mobile | Margo Pro Regular | 14px | 400 | 18.2px | root text at 390px |
| Label | Margo Pro Regular | 16px | 400 | 19.2px | uppercase card titles, tags, nav, footer |
| Button pill | Margo Pro Bold | 19.1228px | 400 | 19.1228px | uppercase |
| Button outline | Margo Pro Regular | 19.1228px | 400 | 19.1228px | uppercase |
| Button buy | Margo Pro Regular | 16px | 700 | 16px | uppercase |

### Principles
- **Uppercase is the default voice.** Card titles, tags, nav, footer links and buttons are all `text-transform: uppercase`.
- **Fluid sizes.** The paragraph and heading variables are `clamp()` ramps that interpolate between a 48rem (768px) and a 105rem (1680px, `--max-width`) viewport; for example `--font-paragraph-margo-pro-regular-m` is `clamp(1.125rem, … , 1.25rem)/1.2`, which resolves to the measured 19.1228px / 22.9474px at 1280px. This is why many measured sizes are fractional.
- **Tight display leading.** Display variables use line-heights below 1 (`/0.833`, `/0.778`, `/0.74`), matching the measured 86.0987px on 110.667px.
- **Bold is a different family**, not a weight: use "Margo Pro Bold" at 400 where emphasis is needed (except the BUY IT HERE! button, measured as Margo Pro Regular at 700).
- `letter-spacing` is `normal` throughout.

### Note on Font Substitutes
No official source naming the designer, foundry or licence of Margo Pro, Girdo Black Pro or
Toni Noveau Pro was found (searches listed in SOURCES.json). The only fallbacks the site itself
declares are `sans-serif` (Margo Pro, Toni Noveau Pro) and `Impact, sans-serif` (Girdo). No
substitute is recommended here, because none is documented.

## Layout

### Spacing System
- The site's own spacers: `--spacer-1: 0.25rem`, `--spacer-2: 0.5rem`, `--spacer-3: 0.75rem`, `--spacer-4: 1rem` (4 / 8 / 12 / 16px).
- Measured: 8px is by far the most common padding and gap (card meta bar padding, tag gap), 16px horizontal meta gap, 24px button side padding, 12px 16px outline-button padding.
- Fluid: the card grid gap and padding are 31.7193px at 1280px; the window inset is 17.6561px — both resolve from `clamp()` gutters (`--gutter` ramps from 1rem to 3.15rem).
- Small: tags use 1.6px 8px; footer links 4.8px; top-rail icon buttons 11.2px.

### Grid & Container
- `--grid-col` divides the viewport (minus `--gutter`) into 14 columns on desktop; `--grid-col-6` into 6 on mobile. Max-widths are multiples of those (`--max-width-m: calc(var(--grid-col) * 12)`); the overall `--max-width` is 1680px.
- Homepage card grid: 4 columns of 271.031px with 31.7193px gaps and padding. Feature cards span 2 columns (574px measured), and tall cards span 2 rows.
- Header: a 42px top rail (`--oatly-header-height-top-rail: 42px`) above a 5-column bottom navigation rail; total header height 76px (`--oatly-header-height`).
- Footer: a 4-column grid of white cells on a black background with 1px gaps — the black shows through as hairline rules.

### Whitespace Philosophy
Density is high but orderly. The cream window gives a constant margin of 31.7193px around the
grid, cards sit tight in the 4-column grid, and empty grid cells are sometimes filled with a
decorative dot pattern (`dot-pattern.svg`) rather than left blank — visible beside the cards in the capture.

## Elevation & Depth

| Level | Treatment | Use |
|-------|-----------|-----|
| Flat | none | Text, nav, footer, tags |
| Outline | `inset 0 0 0 1px #000000` | Outline (READ MORE →) button |
| Pasted card | `1px solid #000000` + `2px 2px 0 0 #000000` | Every content card |
| Double offset | `2px 4px 0 0 #ffffff, 6px 8px 0 0 #fdcf85` | Measured on the contact page |

There are no blurred shadows in the visible UI. Depth is graphic: hard offset shadows and 1px
black lines, like printed matter. Blurred shadows (`0 4px 32px rgba(11,26,41,.12)…`) appear only
in third-party CSS in the corpus and are not part of the visible design.

### Decorative Depth
- The `browser-desktop-grid.svg` backdrop around the window.
- `pixel-lines-pattern.png` tiled at 8px 8px on a full-viewport layer.
- `dot-pattern.svg` behind the SHOW MORE button container.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|-------|-------|-----|
| none | 0px | Cards, tags, outline button, BUY IT HERE!, nav, window |
| pill | 9999px | SHOW MORE button only |
| circle | 50% | measured on the contact page (5 elements) |

Everything is rectangular. The single rounded element on the homepage is the black pill.
No clip-path, skew or notched shapes are used on visible UI (the only `clip-path` measured is
the `inset(50%)` of the visually hidden h1).

### Photography Geometry
Photos fill cards edge-to-edge, cropped square or tall, with no radius. Imagery mixes campaign
photography (beach, office, product pours), packaging shots on flat colour, and black-and-white
poster typography ("F.A.Q-ING AMAZING", "LOVE IS BLIND", "WAKE UP") that looks hand-stamped.

## Components

### Buttons

**Primary — black pill (SHOW MORE)**
- Background `#000000`, text `#ffffff`
- "Margo Pro Bold" 19.1228px, line-height 19.1228px, uppercase
- Padding 16px 24px, height 51px, radius 9999px
- No hover change was measured.

**Secondary — outline (READ MORE →)**
- Background `#ffffff`, text `#000000`
- "Margo Pro Regular" 19.1228px, line-height 19.1228px, uppercase, arrow glyph after label
- Border drawn as `inset 0 0 0 1px #000000`, radius 0, padding 12px 16px, height 43px
- Hover: the inset ring becomes `#888888`; background and text unchanged.

**Buy — square black (BUY IT HERE!, product page)**
- Background `#000000`, text `#ffffff`
- "Margo Pro Regular" 16px weight 700, line-height 16px, uppercase
- Padding 15px 24px, height 46px, radius 0
- Hover: text and border colour become `#c6c6c6`; background stays black.

### Cards & Containers

**Content card**
- `article`, radius 0, border 1px solid #000000, box-shadow 2px 2px 0 0 #000000
- Image area on top; white meta bar below: padding 8px, gap 8px 16px
- Title: label style (16px / 19.2px uppercase), truncated with an ellipsis on one line
- Tag chip right-aligned in the meta bar

**Browser window**
- Cream #fffef6, 1px solid #000000, inset 17.6561px from the viewport edge on the grid backdrop

### Tags

- Square chip, padding 1.6px 8px, height 22px, label style uppercase, text #000000
- Background by category: NEWS `#fdcf85`, OTHER `#98c5d3`, TASTEBUDS `#f8c8d8`, PRODUCTS `#c6c6c6`
- Class names follow the palette names (`MetaInfo_primaryYellow`, `MetaInfo_primaryBlue`).

### Breadcrumb chip (product listing)
- Background `#f4f4f4`, text #000000, label style uppercase, padding 5px 8px 3.2px
- Breadcrumb text links turn `#888888` on hover.

### Navigation
- **Top rail** (42px): a home icon button at left, an empty address-bar-like strip, and square icon buttons at right (FAQ, BIZ, globe, close) — each 43×42px, white, `border-left: 1px solid #000000`, padding 11.2px, glyphs from the "oatly-icons" font at 20px. A 1px black rule closes the rail.
- **Bottom rail**: five equal 248.5px columns (PRODUCTS, TASTEBUDS, NEWS, SUSTAINABILITY, HEALTH), centred uppercase labels at 16px / 19.2px, each link 32px tall with a 4px solid #ffffff border and padding 2px 0; a 1px black rule under the row.
- **Hover**: each link fills with its own tint (see Colors → Navigation hover tints).

### Footer
- 4-column grid of white cells separated by 1px black gaps (the list's background is #000000), outer border 1px solid #000000.
- Links: uppercase label style, padding 4.8px: FAQ, SUSTAINABILITY, CAREERS, FOR INVESTORS, CONTACT, LEGAL, PRIVACY…

### Signature Components
- **Browser-window chrome** — the whole site framed as a desktop app window.
- **Pasted card** — 1px border + 2px hard shadow.
- **Pastel tag chips** keyed to content type.
- **Dot-pattern filler** in empty grid cells.

## Design System Architecture

Oatly publishes **no public design system**, token package, or brand portal that could be
found. Searches for an official design system, brand guidelines/press kit, the typefaces'
origin, a GitHub repository and npm packages returned only third-party scrape sites (excluded by
the brief); the queries are listed in `SOURCES.json`. The only official page consulted with a
system-relevant statement is the
[accessibility statement](https://www.oatly.com/en-us/legal/accessibility-statement). What
follows is the de-facto system measurable on the live site.

**Token architecture (from root CSS variables).** Tokens are flat, single-tier CSS custom
properties named by palette role and hue:
`--color-primary-black`, `--color-primary-yellow`, `--color-primary-blue`,
`--color-primary-pink`, `--color-primary-purple`, `--color-primary-brown`,
`--color-primary-gray`, `--color-primary-white`, and a second set
`--color-secondary-red`, `--color-secondary-green`, `--color-secondary-dark-blue`,
`--color-secondary-pink`, `--color-secondary-medium-gray`, `--color-secondary-light-gray`,
`--color-secondary-dark-gray`. A few semantic aliases exist alongside: `--hover-color: #888`,
`--link-color: #000`, `--text-color: #222`, `--footer-background: #f6f6f6`. No component-tier
tokens are exposed.

**Type tokens.** Shorthand `font` values per family and size step:
`--font-heading-{family}-{xs…xxl}` and `--font-paragraph-{family}-{xs…xl}`, for Margo Pro
Regular/Bold, Girdo, Girdo Rounded, Toni Noveau Pro, Bjorn Serif, Tinny Serif Pro and Petra.
Each is a `clamp()` between 48rem and 105rem viewports. Base: `--font-base-regular: 16`,
`--line-height-regular: 1.3` (= the 20.8px root line-height).

**Spacing & grid.** `--spacer-1…4` (0.25–1rem), fluid `--gutter`, `--grid-col` (14 columns),
`--grid-col-6` (6 columns, mobile), `--max-width-{s…xxl}` and `--max-width-mobile-{s…xl}`
expressed in grid columns, `--max-width: 1680px`.

**Layout tokens.** `--oatly-header-height: 76px`, `--oatly-header-height-top-rail: 42px`,
`--oatly-browser-window-width` / `--oatly-browser-window-height` (1245px / 2365px measured).

**Motion.** `--transition-duration: 0.3s`, `--transition-timing-function: ease-in-out`.

**Theming.** No dark mode, high-contrast mode or density switch was found in the variables or on
the page.

**Component model.** Class names follow a `Component_Element__hash` pattern (e.g.
`BaseCard_BaseCard__z1egA`, `BaseCard_clickEffect__jDbmn`, `MetaInfo_Tag__4fZTt`,
`BrowserWindow_Content__OrwWT`, `TopRail_TopRail__vWwH5`, `BottomRail_NavigationItem__mb_4X`,
`BrowserFooter_LinkList__yugME`, `CardGrid_Grid__eDpdq`, `Button-headless-module_ButtonHeadless__VHF7f`).
Visible inventory: browser window, top rail, bottom rail, breadcrumbs, card grid, base card,
meta info + tags, outline button, pill button, buy button, footer link grid. Images are served
from `a.storyblok.com`; static assets from `/_next/static/`.

**Accessibility.** The official statement names no WCAG level; it says the site is tested with
"accessibility testing tools and manual testing". Measured: skip links ("Skip to main content",
"Skip to footer"), a visually hidden h1 for screen readers, `js-focus-visible` on the html
element. Black on cream is 20:1-class contrast.

**Delivery.** No npm package, Figma kit or versioning is published.

## Do's and Don'ts

### Do
- Frame the page as a browser window: cream `#fffef6`, 1px `#000000` border, inset 17.6561px on white.
- Set labels in "Margo Pro Regular" 16px / 19.2px, uppercase, black.
- Give cards a 1px black border and a `2px 2px 0 0 #000000` hard shadow, 0 radius.
- Use black `#000000` as the action colour; white text on black.
- Use the pastel palette only for small tag chips (`#fdcf85`, `#98c5d3`, `#f8c8d8`, `#c6c6c6`).
- Keep 8px as the default internal padding.
- Use `#888888` for hover text/ring changes.
- Let inner-page headlines go huge in Girdo Black Pro or Toni Noveau Pro with sub-1 leading.

### Don't
- Don't round corners — only the SHOW MORE pill is 9999px.
- Don't use blurred drop shadows.
- Don't introduce a coloured brand button (no blue/green CTA); Oatly's CTA is black.
- Don't use grey body text; ink is pure `#000000`.
- Don't use pastel colours as large backgrounds behind text blocks on the homepage.
- Don't set labels in sentence case where the site uses uppercase.
- Don't fake bold Margo with `font-weight: 700` where the site uses the "Margo Pro Bold" family.

## Responsive Behavior

### Breakpoints
The fluid ramps run from 48rem (768px) to 105rem (1680px). Below 48rem the mobile grid
(`--grid-col-6`) and mobile max-widths apply.

| Viewport | Measured behaviour |
|----------|-------------------|
| 390px | root text 14px / 18.2px; h1 mission 21px; label 12.25px; header 38px tall |
| 1280px | root 16px / 20.8px; h1 28.4912px; body-lg 19.1228px; 4-column card grid |
| 1680px+ | ramps reach their max (`--max-width: 1680px`) |

Mobile measured sizes: display (contact) 59.5px / 46.291px, product title 42px / 34.986px,
inner-page body 15.75px.

### Touch Targets
- Top-rail icon buttons: 43×42px.
- SHOW MORE pill: 51px tall; BUY IT HERE!: 46px; READ MORE →: 43px.
- Bottom-rail links: 32px tall on desktop.

### Collapsing Strategy
- On mobile the header shrinks to a 38px bar; the five-column bottom rail is not shown in the measured mobile header.
- Mobile padding scales down with `--gutter` (min 1rem).

### Image Behavior
Images stay full-bleed inside their card; the card keeps its 1px border and hard shadow at all sizes.

## Iteration Guide

1. Start with the white body and grid backdrop, then the cream `#fffef6` window with a 1px `#000000` border, inset 17.6561px.
2. Add the 76px header: 42px top rail with 43×42 icon buttons (1px left border) and a 5-column uppercase bottom rail.
3. Lay out a 4-column grid, 271px columns, 31.7193px gap and padding.
4. Build the card: image + white meta bar (8px padding), 1px black border, `2px 2px 0 0 #000000` shadow.
5. Add tag chips: 1.6px 8px padding, square, pastel background, 16px uppercase.
6. Put the uppercase mission h1 (28.4912px, line-height 1) and an outline READ MORE → button in the first cell.
7. End the grid with a black 9999px SHOW MORE pill in Margo Pro Bold 19.1228px, 16px 24px, 51px tall.
8. Footer: 4 white columns on black with 1px gaps.
9. Check: everything black on cream/white, uppercase, square, no blur.

**Quick reference**
- Canvas `#fffef6` · frame `#ffffff` · ink `#000000` · primary `#000000` · hover `#888888`
- Tags `#fdcf85` / `#98c5d3` / `#f8c8d8` / `#c6c6c6`
- Margo Pro Regular 16px / 19.2px uppercase; h1 28.4912px; body-lg 19.1228px / 22.9474px
- Radius 0px; pill 9999px; card shadow `2px 2px 0 0 #000000`
