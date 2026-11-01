---
version: alpha
name: Zara
category: "Fashion & Apparel"
description: "Zara's storefront is a monochrome editorial frame around full-bleed fashion photography: Helvetica Now Text at weight 300 for almost every word (13px uppercase nav, 12px/18px body, 11px/16px uppercase product names, 10px micro copy), a Didot 32px campaign line, #000000 ink on a #ffffff canvas, square 0px buttons — black #000000 filled 32px tall with 2px 12px padding that hovers to #333333 — and a #0170e9 focus ring."

colors:
  primary: "#000000"
  on-primary: "#ffffff"
  primary-hover: "#333333"
  canvas: "#ffffff"
  ink: "#000000"
  content-mid: "#757575"
  content-low: "#cccccc"
  main-060: "#666666"
  main-040: "#999999"
  background-mid: "#949494"
  surface-low: "#f7f7f7"
  surface-low-alt: "#e5e5e5"
  main-005: "#f2f2f2"
  overlay: "#00000040"
  overlay-light: "#ffffffbf"
  chat-border-dark: "#262626"
  focus-ring: "#0170e9"
  info-low: "#bfdeff"
  danger: "#e90d01"
  danger-low: "#ffd8d6"
  success: "#0a882a"
  success-low: "#d6f4de"
  warning: "#b66009"
  warning-low: "#ffeacc"
  emphasis: "#ff3b30"
  notification: "#ff9500"
  done: "#34c759"
  sales: "#23f444"

typography:
  campaign-display:
    fontFamily: "Didot"
    fontSize: 32px
    fontWeight: 400
  title-l:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 300
  product-title:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 300
    lineHeight: 24px
    textTransform: uppercase
  product-title-mobile:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 300
  label-l:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 300
  nav-link:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 300
    lineHeight: 22px
    textTransform: uppercase
  button:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 300
    lineHeight: 16px
    textTransform: uppercase
  label-l-highlight:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: 0.8px
    textTransform: uppercase
  body-m:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 300
    lineHeight: 18px
  label-m:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 300
    lineHeight: 16px
    textTransform: uppercase
  label-s:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 11px
    fontWeight: 300
    lineHeight: 16px
    textTransform: uppercase
  label-s-highlight:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 11px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: 0.8px
    textTransform: uppercase
  body-s:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 10px
    fontWeight: 300
  button-second-line:
    fontFamily: "\"Helvetica Now Text\", Helvetica, Arial, sans-serif"
    fontSize: 9px
    fontWeight: 300

rounded:
  none: 0px
  xs: 2px
  sm: 4px

spacing:
  s00: 2px
  s01: 4px
  s02: 8px
  s03: 12px
  s04: 16px
  s05: 20px
  s06: 24px
  layout-top: 28px
  s07: 32px
  s08: 40px
  s09: 48px
  s11: 64px
  s13: 80px
  s14: 96px
  s15: 112px
  gutter: 20px
  lateral-margin: 48px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 2px 12px
    height: 32px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.ink}"
    padding: 2px 12px
    height: 32px
  button-secondary-hover:
    textColor: "{colors.content-mid}"
  button-add:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    border: "1px solid {colors.ink}"
    padding: 2px 12px
    height: 40px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.label-m}"
    padding: 8px 0px
  link-hover:
    textDecoration: underline
  link-focused:
    focusRingColor: "{colors.focus-ring}"
    focusRingWidth: 2px
    focusRingOffset: 2px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    padding: 5px 0px
    height: 32px
  category-link-active:
    textColor: "{colors.ink}"
    typography: "{typography.label-l-highlight}"
  product-card-name:
    textColor: "{colors.ink}"
    typography: "{typography.label-s}"
    rounded: "{rounded.none}"
  product-card-name-hover:
    textDecoration: underline
  product-title:
    textColor: "{colors.ink}"
    typography: "{typography.product-title}"
  product-description:
    textColor: "{colors.ink}"
    typography: "{typography.body-m}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.label-l}"
    padding: 0px 238px
  footer-heading:
    textColor: "{colors.ink}"
    typography: "{typography.label-s-highlight}"
---

## Overview

Zara's website behaves like the layout of a fashion magazine rather than a shop. The homepage capture is one
full-bleed photograph from edge to edge: a campaign image (here the "Re{form} Zara" story, credited on the page to
"Couturier John Galliano") with no product grid, no price, no banner and no button above the fold. The only interface
on top of the photograph is a hairline hamburger icon at top-left, a "SEARCH" field drawn as text over a single
underline at top-right, and a short stacked column of uppercase links — `BAG [0]`, `LOG IN`, `HELP` — under it.

Everything that is interface is monochrome. `{colors.ink}` (`#000000`) is the only text colour measured on the
homepage (100% of 2,039 measured characters), set on `{colors.canvas}` (`#ffffff`). There is no brand accent hue in
the chrome: the photography carries all of the colour. The brand's "primary" is therefore black — the black filled
button on the product page, the black 1px borders, the black underline of the search field.

Typography is a single sans, **Helvetica Now Text**, at a light weight 300 for nearly all text (1,819 of 2,039 homepage
characters are 300). Sizes are small: the most-read size on the homepage is 10px, then 12px and 13px. Hierarchy is made
with uppercase, size steps of 1–2px, and an occasional 500 weight with 0.8px tracking — never with colour or with big
display type. The one expressive face is **Didot**, measured at 32px for the campaign line over the hero image.

Shapes are square. Every measured button, card, link and field has `border-radius: 0px`; the stylesheet only contains
small 2px/4px radii for incidental widgets. There are no box shadows on any of the three measured pages.

**Key Characteristics:**
- Full-bleed editorial photography as the page; the UI floats over it in tiny black type.
- One sans family (Helvetica Now Text), weight 300, sizes 9–18px, mostly uppercase for navigation and labels.
- Didot 32px reserved for campaign/editorial lines.
- Black and white only in the chrome: `#000000` on `#ffffff`, with greys `#757575`, `#cccccc`, `#e5e5e5`, `#f7f7f7`.
- Square 0px buttons: black filled (32px tall, `2px 12px`) and white outlined with a 1px black border.
- Hover = darker grey fill (`#333333`), grey text (`#757575`) or an underline — never a colour shift.
- Visible focus: a `#0170e9` ring, 2px stroke, 2px offset (`--focus-ring-stroke`, `--focus-ring-offset`).

## Colors

All hex values below are measured on the live site — either as computed styles or as Zara's own `:root` custom
properties (names quoted in parentheses).

### Brand & Accent
- **Primary / black** `#000000` (`--color-main`, `--color-basic-black`, `--color-content-high`,
  `--color-background-contrast`): text, filled buttons, borders, underlines.
- **On-primary** `#ffffff` (`--color-content-inverse`, `--color-basic-white`): text on black buttons.
- **Primary hover** `#333333` (`--color-background-contrast-alt`, `--color-main-080`): measured hover background of
  the black filled button on the product page.

### Surface
- **Canvas** `#ffffff` (`--color-background-base`, `--color-main-000`): body background on homepage, category and
  product pages; also the largest-area background on all three.
- **Surface low** `#f7f7f7` (`--color-background-low`, `--color-surface-low`).
- **Surface low alt** `#e5e5e5` (`--color-background-low-alt`, `--color-main-010`): also measured as a border colour
  on the product page.
- **Main 005** `#f2f2f2` (`--color-main-005`).
- **Overlay** `#00000040` (`--color-background-overlay`, `rgba(0,0,0,.25)`).
- **Overlay light** `#ffffffbf` (`--color-background-overlay-alt` / `--color-background-surface`,
  `rgba(255,255,255,.75)`): measured as the second-largest background area on the product page.
- **Chat dark border** `#262626` (`--chat-agent-message-border-color-dark`).

### Text
- **Ink** `#000000`: 100% of measured homepage characters; 7,305 of 7,305 on the category page.
- **Content mid** `#757575` (`--color-content-mid`): secondary text on the product page (21 characters) and the
  hover colour of the outlined button; also `--form-input-label-border-color-unfocused`.
- **Content low** `#cccccc` (`--color-content-low`, `--color-main-020`): measured border colour on homepage and
  category page.
- **Main 060** `#666666`, **Main 040** `#999999`, **Background mid** `#949494`: further steps of the grey ramp.

### Semantic
Declared as custom properties in the shipped CSS (not visible on the measured pages):
- **Danger** `#e90d01` / `#ffd8d6` (`--color-semantic-danger-high` / `-low`).
- **Success** `#0a882a` / `#d6f4de` (`--color-semantic-success-high` / `-low`).
- **Warning** `#b66009` / `#ffeacc` (`--color-semantic-warning-high` / `-low`).
- **Info** `#0170e9` / `#bfdeff` (`--color-semantic-info-high` / `-low`); `#0170e9` is also `--color-focus-ring`.
- **Emphasis** `#ff3b30` (`--color-emphasis`), **Notification** `#ff9500` (`--color-notification`),
  **Done** `#34c759` (`--color-done`), **Sales** `#23f444` (`--color-sales`, `--color-semantic-sales`).

The extractor also recorded a `#fd2e00` background over a large area of the homepage DOM, but that colour does not
appear anywhere in the 2400px capture, so it is not a token here.

## Typography

### Font Family
- **Helvetica Now Text** — served as `"Helvetica Now Text", Helvetica, Arial, sans-serif`
  (`--font-family-main`). Loaded faces: 300 and 400 (normal). Weight 500 is used for highlight labels
  (`--font-weight-label-*-highlight: 500`) and 700 appears on the category page (320 characters).
- **Didot** — loaded at normal weight; measured at 32px (42 characters) on the homepage campaign line.
- The stylesheet also declares campaign/collab faces via `@font-face` (e.g. `XXemeEtageRegular` as
  `--font-family-origins`, `adobeCaslon` as `--font-family-bamo`, `Apercu` as `--font-family-srpls`,
  `MagisterMono` as `--font-family-luca`, `Gilroy`, `ZaraAthleticz`) and `"Times New Roman"` for
  `--font-family-title-alt-*`. None of these were seen rendering on the three measured pages.

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Case | Where measured |
|---|---|---|---|---|---|---|---|
| campaign-display | Didot | 32px | 400 | — | — | as set | homepage hero line |
| title-l | Helvetica Now Text | 18px | 300 | — | — | — | `--font-size-title-l`; 18px text on category page |
| product-title | Helvetica Now Text | 15px | 300 | 24px | normal | uppercase | product page h1 |
| product-title-mobile | Helvetica Now Text | 13px | 300 | — | — | — | product page h1 at 390px |
| label-l | Helvetica Now Text | 13px | 300 | — | normal | — | homepage h1/nav/footer |
| nav-link | Helvetica Now Text | 13px | 300 | 22px | normal | uppercase | BAG / LOG IN / HELP |
| button | Helvetica Now Text | 13px | 300 | 16px | normal | uppercase | product page buttons |
| label-l-highlight | Helvetica Now Text | 13px | 500 | 16px | 0.8px | uppercase | active subcategory link |
| body-m | Helvetica Now Text | 12px | 300 | 18px | normal | — | product description |
| label-m | Helvetica Now Text | 12px | 300 | 16px | normal | uppercase | newsletter link, category h2 |
| label-s | Helvetica Now Text | 11px | 300 | 16px | normal | uppercase | product names in grid |
| label-s-highlight | Helvetica Now Text | 11px | 500 | 16px | 0.8px | uppercase | footer column heading |
| body-s | Helvetica Now Text | 10px | 300 | — | — | — | homepage most-read size |
| button-second-line | Helvetica Now Text | 9px | 300 | — | — | — | `--font-size-button-second-line`; 9px on product page |

Zara's own token names follow `--font-{property}-{role}-{size}`: `--font-size-label-l: calc(.8125rem * 1)` (13px),
`--font-size-label-m: calc(.75rem * 1)` (12px), `--font-size-label-s: calc(.6875rem * 1)` (11px),
`--font-size-label-xs: calc(.625rem * 1)` (10px), `--font-size-body-m: calc(.75rem * 1)` (12px),
`--font-size-body-s: calc(.625rem * 1)` (10px), `--font-size-title-m: calc(.9375rem * 1)` (15px),
`--font-size-title-l: calc(1.125rem * 1)` (18px), each with matching `--font-weight-*` (300, or 500 for
`-highlight`) and `--font-stretch-*` (normal).

The homepage's visible `<h1>` is the document title ("ZARA United States | New Collection Online") at 13px/300 — the
same as `label-l`. Headings do not get bigger type than the navigation; the photograph is the headline.

### Principles
- Light weight (300) everywhere; 500 only for an active/highlighted label.
- Uppercase is the default for navigation, buttons, product names and footer headings.
- Positive tracking (0.8px) appears only together with weight 500.
- Size steps are 1px apart (9, 10, 11, 12, 13, 15, 18px) — hierarchy is quiet.
- Serif (Didot) is editorial, never interface.

### Note on Font Substitutes
Helvetica Now is a commercial Monotype family (Micro, Text and Display optical sizes,
[monotype.com/fonts/helvetica-now](https://www.monotype.com/fonts/helvetica-now)). Zara's own fallback stack is
`Helvetica, Arial, sans-serif`; use that stack if Helvetica Now Text cannot be licensed. Didot is a commercial face as
served; the site supplies no fallback for it in the measured stack.

## Layout

### Spacing System
Zara ships a numbered spacing scale on `:root` (`--spacing-00` … `--spacing-16`): 2px, 4px, 8px, 12px, 16px, 20px,
24px, 32px, 40px, 48px, 56px, 64px, 72px, 80px, 96px, 112px, 120px. The frontmatter keeps the steps that are measured
in use (2px, 4px, 8px, 12px, 16px, 20px, 24px, 32px, 40px, 48px, 64px, 80px, 96px, 112px) plus the layout values below.

Measured on pages: 8px is the most common padding (54 elements on the homepage) and gap (78 on the category page);
2px and 4px gaps sit between product-card lines; 20px gaps separate larger groups.

### Grid & Container
- `--grid-column-gutter: 1.25rem` (20px) and `--grid-lateral-margin: 1.25rem` (20px).
- `--layout-lateral-margin: 3rem` (48px), `--layout-top-padding: 1.75rem` (28px), `--layout-horizontal-padding: 1.25rem`.
- Template widths come in 60px steps: `--grid-template-spacing-01: 3.75rem` (60px) through `-12: 45rem` (720px).
- The footer is inset with `0px 238px` padding at 1280px wide.
- On the category page the product images sit in a single centred column (about 412px wide in the 960px capture),
  with the subcategory list in a fixed left column and the BAG/LOG IN/HELP stack in a fixed right column.

### Whitespace Philosophy
The page is either all image (homepage) or mostly white (category/product). Large empty bands separate products
vertically; the text blocks under each product are three tiny lines (`NEW`, name, price) with a "+" add icon at right.
Nothing is boxed; nothing is centred inside a card.

## Elevation & Depth

No box shadows are rendered on the homepage, category page or product page (`boxShadows: []` on all three). Depth is
created by layering: UI type sits directly on the photograph, and overlays use translucent white
(`#ffffffbf`, `rgba(255,255,255,.75)`) or translucent black (`#00000040`). The stylesheet declares an elevation set via
`--mds-elevation-shadow-*` variables and a few literal shadows (e.g. `0 0 18px rgba(0,0,0,.2)`), but none were seen
rendering, so no shadow token is declared.

### Decorative Depth
The cookie notice in the capture is a flat white panel with a thin grey border (`#cccccc` is the measured border
colour on the homepage) floating over the image at bottom-left — no shadow.

## Shapes

### Border Radius Scale
- `none` 0px — every measured button, link, card and field.
- `xs` 2px — most frequent radius in the stylesheet (15 rules); one element on the homepage.
- `sm` 4px — present in the stylesheet (11 rules), not seen on measured components.

No pills, no rounded cards. `--chat-border-radius: 0px` confirms square corners even in the chat widget.

### Lines
Lines carry the shape language: `--zds-line-width: 1px`, `--zds-line-width-thick: 2px`. The search field is a single
1px underline; the hamburger is two hairlines; outlined buttons use `1px solid #000000`; the bag count `[0]` is drawn
inside thin bracket rules.

### Photography Geometry
Product images are tall portrait rectangles with square corners, edge-aligned with the text under them. Campaign images
bleed off all four edges of the viewport.

## Components

### Buttons
- **button-primary** — `#000000` background, `#ffffff` text, Helvetica Now Text 13px/300/16px uppercase,
  `border-radius: 0px`, padding `2px 12px`, height 32px. Hover: background `#333333` (measured). Text and border
  unchanged.
- **button-secondary** — `#ffffff` background, `#000000` text, `1px solid #000000` border, same type, padding
  `2px 12px`, 32px tall. Hover: text `#757575` (measured), background and border unchanged.
- **button-add** — the product-page "ADD" button: outlined like button-secondary, 40px tall, padding `2px 12px`.
- A second line inside a button uses `--font-size-button-second-line` 9px / `--font-weight-button-second-line` 300.

### Cards & Containers
Product cards in the grid have no container: image, then `NEW` (label), product name (11px/300/16px uppercase),
price, colour swatches as tiny squares, and a "+" icon aligned right. Product name hover = underline (measured).

### Inputs & Forms
No form input was rendered on the measured pages besides the search trigger, which the capture shows as uppercase
"SEARCH" text right-aligned over a single black underline. Zara's CSS declares the input states as variables:
`--input-hover-border-color: black`, `--input-unfocused-border-color: transparent`,
`--input-disabled-border-color: transparent`, `--form-input-label-border-color-unfocused: #757575`,
`--form-input-label-padding-top: 1.5rem`. No input component token is declared because none was measured.

### Navigation
- Top-left: hamburger made of two horizontal hairlines.
- Top-right: `SEARCH` over an underline, then a vertical stack `BAG [0]`, `LOG IN`, `HELP` — 13px/300 uppercase,
  line height 22px, padding `5px 0px`, 32px tall each.
- Category page left rail: numbered subcategories `|01| VIEW ALL`, `|02| GOING OUT` …; the active one is
  13px/500/16px with 0.8px tracking, the others 13px/300.
- Links: 12px/300/16px uppercase with `8px 0px` padding (newsletter link); hover = underline (measured on the
  "Cookie Policy" link and product names).
- Focus: `#0170e9` ring (`--color-focus-ring`), 2px stroke (`--focus-ring-stroke: .125rem`), 2px offset
  (`--focus-ring-offset: .125rem`) — visible around "Cookie Policy" in the capture.

### Footer
White, `0px 238px` padding at 1280px, column headings like `HELP` at 11px/500/16px/0.8px uppercase, body 13px/300.

### Signature Components
- **Editorial hero** — one photograph, full bleed, with a Didot line set directly on it.
- **Bracketed counter** — `BAG [0]` with the count inside a thin bracket.
- **Numbered category rail** — `|01|`-style indices before each subcategory.

## Design System Architecture

Zara publishes **no public design system documentation**. Searches for a Zara/Inditex design system, component
library, token package or brand guidelines (listed in `SOURCES.json`) found none; the official Inditex brand page
([inditex.com/itxcomweb/en/brands/zara](https://www.inditex.com/itxcomweb/en/brands/zara)) offers no guidelines. What
follows describes only the de-facto system measurable in the CSS shipped on
[zara.com/us](https://www.zara.com/us/).

- **Token architecture.** Around 300 custom properties on `:root`. A primitive tier (`--color-basic-black`,
  `--color-basic-white`, the grey ramp `--color-main-000` … `--color-main-080`) is referenced by a semantic tier
  (`--color-background-base`, `--color-content-high`, `--color-content-mid`, `--color-surface-low`,
  `--color-semantic-danger-high`), which component variables reference again
  (`--chat-button-primary-background-color-light: var(--color-background-contrast)`). Prefixes `--zds-`
  (`--zds-line-width`, `--zds-layout-gap`, `--zds-theme-scale-factor`) and `--mds-` (`--mds-elevation-shadow-*`,
  `--mds-typo-label-m-font-family`) appear in the CSS; the site does not explain what these prefixes stand for.
- **Theming.** Component variables come in `-light` / `-dark` pairs (e.g. `--chat-panel-background-color-dark`,
  `--chat-panel-background-color-light`). Type sizes are written as `calc(<rem> * 1)` and a
  `--zds-theme-scale-factor: 1` variable exists. How themes are switched is not documented publicly.
- **Type & spacing.** Type tokens by role and size (`title-l/m`, `title-alt-l/m/s`, `body-l/m/s`,
  `label-l/m/s/xs` each with a `-highlight` variant at weight 500). Spacing is a numbered rem scale
  (`--spacing-00: .125rem` … `--spacing-16: 7.5rem`); grid templates step by 3.75rem (60px).
- **Component model.** Not documented publicly. Observable components: filled and outlined square buttons, links,
  navigation stack, product card, footer, cookie notice, chat widget (configured by `--chat-*` variables).
- **Accessibility.** A "SKIP TO MAIN CONTENT" link is the first text on every page; focus rings are defined
  (`--color-focus-ring: #0170e9`, `--focus-ring-stroke`, `--focus-ring-offset`) and visible in the capture. No
  published contrast or touch-target policy was found. `--layout-actionable-size: 2.5rem` (40px) and
  `--layout-actionable-height: 2rem` (32px) match the measured 40px ADD button and 32px buttons.
- **Delivery.** No public npm package, Figma kit or repository was found.

## Do's and Don'ts

### Do
- Let a full-bleed photograph be the page; put UI in small black type on top.
- Use Helvetica Now Text 300 for everything functional, uppercase for navigation, buttons and product names.
- Keep sizes in the 9–18px range from the token scale; make emphasis with 500 + 0.8px tracking.
- Use `#000000` on `#ffffff`; greys `#757575`/`#cccccc`/`#e5e5e5`/`#f7f7f7` only for secondary text, lines, surfaces.
- Square everything: `border-radius: 0px` on buttons, cards and images.
- Use 1px black lines (underline, outline, brackets) as the main graphic element.
- Show focus with the `#0170e9` 2px ring.
- Reserve Didot for editorial headlines on imagery.

### Don't
- Don't add a brand accent colour to buttons or links — there isn't one.
- Don't use large bold sans headings; the measured h1s are 13px and 15px at weight 300.
- Don't round corners or use pills.
- Don't add drop shadows to cards or buttons.
- Don't box product cards in borders or tinted panels.
- Don't use colour for hover — use `#333333` fill, `#757575` text or an underline.
- Don't centre-stack marketing copy blocks with CTAs over the hero; the measured hero has none.
- Don't use the semantic colours (`#e90d01`, `#0a882a`, …) decoratively.

## Responsive Behavior

### Breakpoints
Zara does not publish breakpoints; none are declared as tokens here. Measured at 390px: the homepage h1 and nav stay
13px/300; the 32px desktop campaign line has a 20px counterpart run of the same length (42 characters) on mobile; the
product title drops from 15px/300/24px to 13px/300; the category page's most-read sizes become 12px and 11px.

### Touch Targets
Measured actionable heights: 32px (filled/outlined buttons, nav links) and 40px (ADD). The CSS variables
`--layout-actionable-height: 2rem` and `--layout-actionable-size: 2.5rem` hold the same values.

### Collapsing Strategy
At 390px the header is 48px tall (measured), with the same icon-and-text vocabulary.

### Image Behavior
Campaign images stay full bleed; product images remain tall portrait rectangles with square corners.

## Iteration Guide

1. Start with a white `#ffffff` page and one full-bleed photograph.
2. Put the navigation as 13px/300 uppercase black text in the corners: hamburger at left, SEARCH + underline and a
   BAG/LOG IN/HELP stack at right.
3. Set all interface text in Helvetica Now Text 300 at 10–13px; product titles at 15px/300/24px uppercase.
4. Use Didot 32px only for editorial lines over imagery.
5. Buttons: black filled 32px with `2px 12px` padding, or white with a 1px black border; corners 0px.
6. Hover: `#333333` for filled, `#757575` text for outlined, underline for links.
7. Focus: `#0170e9` ring, 2px, offset 2px.
8. Spacing from the scale (2, 4, 8, 12, 16, 20, 24, 32, 40, 48px…), 8px as the default unit of padding/gap.
9. No shadows, no radii, no accent colour.
10. Check every value against `web/data/extracted/zara*.json` before adding a token.
