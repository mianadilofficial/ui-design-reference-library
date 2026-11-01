---
version: alpha
name: Graza
category: "Food & Beverage"
description: "Graza's Shopify storefront: a peachy #f6e6d9 canvas, olive #3c422e ink, a chartreuse #d1e030 pill CTA with a 1px olive outline and a 6px checker-dot 'shadow' offset 4px that the face slides onto on hover, cream #fff4ec cards with 20px corners, ITC Garamond Condensed 72-120px display set tight (-2.16px), and GT Alpina Typewriter 16/24 for everything else."

colors:
  primary: "#d1e030"
  on-primary: "#3c422e"
  canvas: "#f6e6d9"
  ink: "#3c422e"
  highlight: "#fff4ec"
  secondary: "#fbd535"
  accent: "#9eef80"
  stroke: "#9fcd7a"
  shading: "#e8d6c8"
  hero-scrim: "#00000066"
  skip-link-bg: "#ffffff"
  skip-link-ink: "#000000"

typography:
  display-xl:
    fontFamily: "\"ITC Garamond Condensed\", serif"
    fontSize: 120px
    fontWeight: 400
    lineHeight: 120px
    letterSpacing: -3.6px
  display-lg:
    fontFamily: "\"ITC Garamond Condensed\", serif"
    fontSize: 102px
    fontWeight: 400
    lineHeight: 91.8px
    letterSpacing: -2.16px
  display-lg-strong:
    fontFamily: "\"ITC Garamond Condensed\", serif"
    fontSize: 102px
    fontWeight: 500
    lineHeight: 91.8px
    letterSpacing: -2.16px
  h1:
    fontFamily: "\"ITC Garamond Condensed\", serif"
    fontSize: 72px
    fontWeight: 400
    lineHeight: 72px
    letterSpacing: -2.16px
  h1-mobile:
    fontFamily: "\"ITC Garamond Condensed\", serif"
    fontSize: 46px
    fontWeight: 400
    lineHeight: 46px
    letterSpacing: -1.44px
  product-title:
    fontFamily: "\"ITC Garamond Condensed\", serif"
    fontSize: 60px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: -1.44px
  product-subhead:
    fontFamily: "\"ITC Garamond Condensed\", serif"
    fontSize: 60px
    fontWeight: 400
    lineHeight: 60px
    letterSpacing: -1.8px
  card-title:
    fontFamily: "\"ITC Garamond Condensed\", serif"
    fontSize: 46px
    fontWeight: 400
    lineHeight: 46px
    letterSpacing: -1.44px
  body-lg:
    fontFamily: "\"GT Alpina Typewriter\", monospace"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 25px
  product-name:
    fontFamily: "\"GT Alpina Typewriter\", monospace"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 20px
  body:
    fontFamily: "\"GT Alpina Typewriter\", monospace"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-mobile:
    fontFamily: "\"GT Alpina Typewriter\", monospace"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
  label:
    fontFamily: "\"GT Alpina Typewriter\", monospace"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    textTransform: uppercase
  button:
    fontFamily: "\"GT Alpina Typewriter\", monospace"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
  small:
    fontFamily: "\"GT Alpina Typewriter\", monospace"
    fontSize: 14px
    fontWeight: 400
  micro-label:
    fontFamily: "\"GT Alpina Typewriter\", monospace"
    fontSize: 12px
    fontWeight: 500
    textTransform: uppercase
  footer-link-mobile:
    fontFamily: "\"GT Alpina Typewriter\", monospace"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  tag:
    fontFamily: "Apercu, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 13px
    textTransform: uppercase

rounded:
  none: 0px
  input: 8px
  segment: 10px
  card: 20px
  review-button: 30px
  cart: 32px
  pill: 9999px
  circle: 100%

spacing:
  xs: 8px
  sm: 10px
  md: 16px
  gutter: 20px
  lg: 24px
  card-pad: 30px
  xl: 32px
  section-sm: 40px
  section: 48px
  section-lg: 60px
  grid-gap-lg: 68px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    border: "1px solid #3c422e"
    height: 34px
    padding: 0px 16px
    offsetShadow: "::after pill, top/left 4px, 1px solid #3c422e, 6px checker of #3c422e (four 45deg/-45deg linear-gradients)"
  button-primary-hover:
    transform: "translate(4px, 4px)"
    transition: "transform 0.3s ease-in-out"
  button-large-cream:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    textTransform: uppercase
    rounded: "{rounded.pill}"
    border: "1px solid #3c422e"
    height: 55px
    padding: 0px 40px
  button-submit-square:
    backgroundColor: "{colors.accent}"
    textColor: "{colors.ink}"
    rounded: "{rounded.input}"
    height: 32px
  button-review:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.review-button}"
    border: "1px solid #3c422e"
    padding: 12px 24px
    height: 42px
  cart-pill:
    backgroundColor: "{colors.highlight}"
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    rounded: "{rounded.cart}"
    border: "1px solid #3c422e"
    height: 36px
  cart-pill-hover:
    backgroundColor: "{colors.primary}"
  nav-link-on-hero:
    textColor: "{colors.highlight}"
    typography: "{typography.body}"
  nav-link-hover:
    textColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  text-input:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    rounded: "{rounded.input}"
    border: "1px solid #3c422e"
    padding: 16px
    height: 58px
  card-promo:
    backgroundColor: transparent
    rounded: "{rounded.card}"
    border: "1px dashed #3c422e"
  card-product:
    backgroundColor: "{colors.highlight}"
    rounded: "{rounded.card}"
    border: "1px solid #3c422e"
    padding: 20px
  carousel-arrows:
    rounded: "{rounded.segment}"
    border: "1px solid #3c422e"
    height: 30px
  tag:
    textColor: "{colors.ink}"
    typography: "{typography.tag}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
---

# Graza — DESIGN.md

## Overview

Graza sells Spanish extra-virgin olive oil in squeeze bottles ("Sizzle" for cooking, "Drizzle" for finishing),
and the storefront at graza.co reads like the bottle label blown up to page size. The page sits on a warm peachy
canvas `#f6e6d9` (the site's own `--color-background`), every line of text is a single olive green `#3c422e`
(`--color-text`), and the only loud color is the chartreuse `#d1e030` (`--color-brand`) that fills the pill buttons.
Trade press reports that the identity and packaging were designed by the agency Gander
([The Dieline](https://thedieline.com/gander-designed-graza-is-olive-oil-meant-to-be-used/)).

What makes it recognisable is the type pairing and the button. Headlines are ITC Garamond Condensed at very
large sizes (72px hero, 102px section titles, 120px manifesto lines) with tight negative tracking, and everything
else (nav, body, prices, labels, buttons) is GT Alpina Typewriter, a typewriter serif that makes product copy feel
typed on a label. The primary button is a chartreuse pill with a 1px olive outline sitting on a second pill filled
with a 6px checker of olive dots, offset 4px down-right. On desktop hover the face slides 4px onto the dots, like a
key being pressed.

The capture shows the rhythm: a full-bleed hero video (a hand holding the Drizzle bottle) under a `#00000066`
scrim with the cream `#fff4ec` H1 "Extra Virgin Olive Oil makes everything better." and a full-width lime SHOP NOW
pill; then a cream rounded ticker strip ("Now Serving Olives from: Andalusia, Spain / Harvesting Season: October -
January"); then a sunflower `#fbd535` band split in two, copy on the left (eyebrow, 102px title, typewriter body,
cream FIND CHIPS pill, segmented arrow pair) and a product photo inside a dashed-outline 20px-radius card on the
right; then back on the peach canvas, a hand-drawn olive-with-spout illustration in solid olive and a 120px
staggered manifesto: "Olive oil so fresh, / you can taste it."

Key characteristics:
- One ink color: `#3c422e` for body, headings, borders, dashed outlines and illustration fills.
- Canvas `#f6e6d9`, cards and chips `#fff4ec`, product-page bands `#e8d6c8`.
- Accent fields at full saturation: lime `#d1e030`, sunflower `#fbd535`, mint `#9eef80`.
- No drop shadows anywhere (`boxShadows` measured empty); depth comes from the dotted offset pill.
- Outlines instead of fills: 1px solid or 1px dashed `#3c422e` on cards, inputs, pills.
- Display serif condensed and tight; UI text in a typewriter face, never a neutral sans (Apercu appears only in tiny uppercase product-type tags).

## Colors

All hex values below were measured on the live site; names in backticks are the site's own CSS custom properties.

### Brand & Accent
- **Primary / Chartreuse** (`#d1e030`, `--color-brand`): fill of every primary pill (SHOP NOW, Shop Olive Oil),
  the Cart pill's hover fill, Okendo review buttons, and a large band area on the homepage.
- **Secondary / Sunflower** (`#fbd535`, `--color-secondary`): the full-bleed chips section band.
- **Accent / Mint** (`#9eef80`, `--color-accent`): the square newsletter submit button and small highlights.
- **Stroke** (`#9fcd7a`, `--color-stroke`): declared as a root token; light green stroke color.

### Surface
- **Canvas** (`#f6e6d9`, `--color-background`): body background and most section backgrounds.
- **Highlight / Cream** (`#fff4ec`, `--color-highlight`): product cards, Cart pill, and the text color
  over the hero video.
- **Shading** (`#e8d6c8`, `--oke-shadingColor`): darker sand bands on product pages.
- **Hero scrim** (`#00000066`): 40% black overlay on the hero video so cream text reads.

### Text
- **Ink** (`#3c422e`, `--color-text`): every paragraph, heading, link, label, border. 2624 of ~2880 measured characters.
- **On hero** (`#fff4ec`): H1 and nav links while the header floats over the video.
- **On primary** (`#3c422e`): button text on chartreuse.
- **Skip link** (`#000000` on `#ffffff`): the visually hidden "Skip to main content" link (accessibility only).

### Semantic
No error/success/warning palette was found on the pages measured, and Graza publishes no design system that
defines one. Do not invent one; if needed, express states with the olive ink and outlines.

## Typography

### Font Family
- **ITC Garamond Condensed** (`--font-heading: "ITC Garamond Condensed","serif"`): all display type. A commercial
  ITC family by Claude Garamond / Tony Stan with Condensed Light, Book, Bold and Ultra styles
  ([MyFonts](https://www.myfonts.com/collections/garamond-font-itc)). Served weight: 400 (and 500 on `<strong>`).
- **GT Alpina Typewriter** (`--font-body: "GT Alpina Typewriter","monospace"`): body, nav, buttons, labels,
  inputs, footer. Part of Grilli Type's GT Alpina family by Reto Moser, released 2020
  ([Grilli Type](https://www.grillitype.com/typeface/gt-alpina)). Served weights: 400 and 500.
- **Apercu** (`--font-tag: "Apercu","sans-serif"`): only for small uppercase product-type tags ("FINISHING OIL").

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|---|
| display-xl | ITC Garamond Condensed | 120px | 400 | 120px | -3.6px | manifesto lines ("Olive oil so fresh,") |
| display-lg | ITC Garamond Condensed | 102px | 400 | 91.8px | -2.16px | section titles ("Get The Trio") |
| display-lg-strong | ITC Garamond Condensed | 102px | 500 | 91.8px | -2.16px | "New E.V.O.O. Potato Chips" |
| h1 | ITC Garamond Condensed | 72px | 400 | 72px | -2.16px | hero H1, collection H1 |
| h1-mobile | ITC Garamond Condensed | 46px | 400 | 46px | -1.44px | hero H1 at 390px |
| product-title | ITC Garamond Condensed | 60px | 400 | 48px | -1.44px | product page H1 ("Sizzle") |
| product-subhead | ITC Garamond Condensed | 60px | 400 | 60px | -1.8px | product page H3 |
| card-title | ITC Garamond Condensed | 46px | 400 | 46px | -1.44px | product names in cards |
| body-lg | GT Alpina Typewriter | 20px | 400 | 25px | normal | newsletter lead, intro copy |
| product-name | GT Alpina Typewriter | 20px | 500 | 20px | normal | collection product titles |
| body | GT Alpina Typewriter | 16px | 400 | 24px | normal | paragraphs, footer links, nav |
| body-mobile | GT Alpina Typewriter | 15px | 400 | 22.5px | normal | body at 390px |
| label | GT Alpina Typewriter | 16px | 500 | 24px | normal | uppercase eyebrows, Cart, inputs |
| button | GT Alpina Typewriter | 16px | 500 | 16px | normal | pill buttons |
| small | GT Alpina Typewriter | 14px | 400 | — | — | product-page small print |
| micro-label | GT Alpina Typewriter | 12px | 500 | — | — | uppercase ticker heading |
| footer-link-mobile | GT Alpina Typewriter | 12px | 400 | 18px | normal | footer links at 390px |
| tag | Apercu | 13px | 400 | 13px | normal | uppercase product-type tags |

### Principles
- The display serif is always condensed, always large, always tracked tight (-2.16px at 72px and 102px,
  -3.6px at 120px, -1.44px at 46px and 60px). It is never set in caps.
- Display line-height is 1.0 or tighter (91.8px on 102px = 0.9; 48px on 60px = 0.8).
- The typewriter face carries all UI. Eyebrows are typewriter 16px/500 uppercase, flanked by a small asterisk
  glyph in the capture ("[U+273B] NOT YOUR AVERAGE CHIP [U+273B]").
- Only two weights of the body face are used: 400 for reading, 500 for labels, buttons and nav emphasis.

### Note on Font Substitutes
All three faces are commercial. GT Alpina Typewriter requires a Grilli Type license and ITC Garamond Condensed an
ITC/Monotype license. No substitute is named by Graza. If a license is unavailable, any condensed Garamond-style
serif and any typewriter serif can stand in for prototypes, but the result will not match the brand; keep the
measured sizes, line heights and tracking.

## Layout

### Spacing System
Measured gaps: 8px, 10px, 16px, 24px, 32px, 35px, 36px, 40px, 48px, 68px. Measured paddings: 8px, 10px, 12px, 16px,
20px, 24px, 30px (most frequent), 32px, 35px, 40px, 60px. The theme declares `--gutter: 20px`. Tokens:
`xs` 8px, `sm` 10px, `md` 16px, `gutter` 20px, `lg` 24px, `card-pad` 30px, `xl` 32px, `section-sm` 40px,
`section` 48px, `section-lg` 60px, `grid-gap-lg` 68px.

### Grid & Container
The theme defines its grid in root variables: `--container-width: clamp(0,100vw,1440px)`, `--column-count: 2`,
`--gutter: 20px`, `--column: calc((1440px - var(--gutter)*var(--gutter-count))/var(--column-count))`. The hero
SHOP NOW button uses the utility `lg:w-column-3` (352.5px at 1280px). Sections are full-bleed color bands; content
inside splits into two equal halves (copy / image) as in the chips section.

### Whitespace Philosophy
Generous but not airy: sections are tall (the chips band is about 500px at 960px capture width), copy is centred in
its half, and the manifesto lines are staggered left/right across the full width with large empty canvas around
them. Header height is `--height-bar: 60px` plus `--height-promo: 20px`.

## Elevation & Depth

The homepage computes no `box-shadow` on any element. Depth is graphic, not lit:
- **Dotted offset pill**: buttons sit on an `::after` copy of themselves filled with a 6px olive checker
  (`background-size: 6px 6px`, four 45deg/-45deg linear gradients of `#3c422e` and transparent), offset
  `top: 0.25rem; left: 0.25rem`. It reads as a halftone shadow.
- **Hero scrim**: `#00000066` over video.
- **Outlines**: 1px dashed `#3c422e` around promo image cards and section dividers (the capture shows a dotted
  rule between the ticker and the sunflower band).

### Decorative Depth
Hand-drawn single-color illustrations (the olive with a tap spout) in solid `#3c422e` on canvas; product
photography is cut-out packaging on a cream backdrop with soft natural shadows inside the photo, not in CSS.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| none | 0px | sections, hero, text links |
| input | 8px | email input, square submit button |
| segment | 10px | carousel arrow pair (10px 0 0 10px / 0 10px 10px 0) |
| card | 20px | promo image cards, product cards (most frequent radius) |
| review-button | 30px | Okendo review / filter buttons on product pages |
| cart | 32px | header Cart pill |
| pill | 9999px | all `.btn--std` / `.btn--large` / `.btn--small` buttons |
| circle | 100% | header search and account icon buttons |

### Photography Geometry
Images live inside 20px-radius cards with a 1px dashed olive outline; the hero video is full-bleed with square corners.

## Components

### Buttons
**Primary pill (`.btn--std`)** — the `<a>` itself is transparent; the visible pill is its `::before`
(`content: attr(data-content)`):
- face: background `#d1e030` (`var(--background, var(--color-brand))`), 1px solid `#3c422e`, radius 9999px,
  padding 0 16px, flex-centred text;
- size: height 34px (`2.125rem`); width 100% on mobile, `lg:w-column-3` (352.5px) on desktop in the hero;
- text: GT Alpina Typewriter 16px / 500 / line-height 16px, `#3c422e`;
- `::after`: same pill, 1px solid `#3c422e`, 6px olive checker, offset 4px right and 4px down, `z-index: 1`.
- **Hover** (≥1024px only): `::before` gets `transform: translate(4px, 4px)` with `transition: transform 0.3s
  ease-in-out`, covering the dots. Child spans translate the same 4px.
- **Focus-visible**: outline removed on the link; the face gets `outline: currentcolor dotted 2px;
  outline-offset: 2px`.
- Variants from the theme CSS: `.btn--large` hover moves 6px, `.btn--small` hover moves 2px.

**Large cream pill** (FIND CHIPS, SHOP THE TRIO): same construction, face `#f6e6d9`, height 55px, padding 0 40px,
uppercase 16px/500.

**Square submit** (footer newsletter): `#9eef80` fill, radius 8px, 32px tall, SUBMIT in typewriter 16px/500.

**Review button** (Okendo widget on product pages, themed via `--oke-button-*`): `#d1e030`, 1px solid `#3c422e`,
radius 30px, padding 12px 24px, 42px tall, 16px/500.

### Cards & Containers
- **Promo image card**: transparent, 1px dashed `#3c422e`, radius 20px, 593px square at desktop.
- **Product card** (product page): `#fff4ec`, 1px solid `#3c422e`, radius 20px, padding 20px (16px variant).
- **Ticker strip** (seen in the capture, not measured): cream rounded bar with typewriter copy separated by a slash, asterisk glyphs at each end.

### Inputs & Forms
Email input (footer and collection page): transparent background, 1px solid `#3c422e`, radius 8px, padding 16px,
58px tall, GT Alpina Typewriter 16px/500, `#3c422e`.

### Navigation
- Header floats over the hero: GRAZA wordmark at left in cream, links Shop / Get Refills / About / Glog in
  GT Alpina Typewriter 16px/400 `#fff4ec`, then circular search and account icons and the Cart pill.
- **Cart pill**: `#fff4ec`, 1px solid `#3c422e`, radius 32px, 36px tall, "Cart [0]" 16px/500. Hover fill `#d1e030`.
- Link hover measured: "Shop" turns from `#fff4ec` to `#3c422e`, "Get Refills" from `#3c422e` to `#fff4ec` —
  the header inverts between cream-on-video and olive-on-canvas depending on state.

### Pills, Tags, and Chips
Product-type tags use Apercu 13px/400 uppercase `#3c422e`. Carousel arrows are a segmented pair 30px tall, each about
86px wide, left radius 10px 0 0 10px, right 0 10px 10px 0, olive outline, arrow glyphs.

### Signature Components
- **Dotted press button** — the single most identifying element; reproduce the `::before`/`::after` construction exactly.
- **Two-tone split band** — sunflower `#fbd535` band with centred copy left and a dashed-outline image card right.
- **Staggered manifesto** — 120px condensed serif lines offset left and right across the width.

## Design System Architecture

Graza publishes no public design system, token package, brand portal or press kit. Searches run:
"Graza olive oil brand identity design system typeface", "Graza press kit brand guidelines logo",
"graza.co design system tokens github", plus foundry lookups for the fonts. Only third-party aggregator pages
turned up, which are not used here. The identity is credited to Gander by
[The Dieline](https://thedieline.com/gander-designed-graza-is-olive-oil-meant-to-be-used/); that article
describes packaging, not a web system. What follows is the de-facto system measurable on graza.co.

- **Token architecture**: a single flat tier of CSS custom properties on `:root`, named by role:
  `--color-brand: #D1E030`, `--color-text: #3C422E`, `--color-background: #F6E6D9`,
  `--color-highlight: #FFF4EC`, `--color-secondary: #FBD535`, `--color-accent: #9EEF80`,
  `--color-stroke: #9FCD7A`, `--color-header: var(--color-text)`; fonts `--font-heading`, `--font-body`,
  `--font-tag`. Third-party widgets are themed with their own prefixed variables mapped to these colors
  (Okendo reviews `--oke-button-backgroundColor: #d1e030`, `--oke-button-borderRadius: 30px`,
  `--oke-text-primaryColor: #3c422e`; Algolia autocomplete `--aa-*`).
- **Theming**: one light theme. Buttons read `var(--background, var(--color-brand))`, so a section can set
  `--background` to recolor its buttons (the cream FIND CHIPS pill is this mechanism). No dark mode observed.
- **Type & spacing**: Tailwind-style utilities (`mt-24`, `px-40`, `rounded-20`, `text-12`, `lg:w-column-3`)
  where the number equals pixels; grid from `--container-width`, `--column-count: 2`, `--gutter: 20px`.
  Body steps from 16px (desktop) to 15px (390px); display steps 72px → 46px.
- **Component model**: BEM-ish button classes `.btn--std`, `.btn--large`, `.btn--small`, `.btn--square`, each
  using `::before` for the face and `::after` for the dotted shadow; hover offsets 4px / 6px / 2px respectively.
- **Accessibility**: a "Skip to main content" link and a "Play animations" toggle are present (visually hidden
  until focused); buttons show a 2px dotted outline on `:focus-visible`. Olive `#3c422e` on `#f6e6d9` is the
  standard text pairing.
- **Delivery**: a Shopify storefront (product URLs `/products/…`, `/collections/…`, `shopify-section` classes)
  with Vue-initialised sections (`vue-initialized` classes). No npm package, Figma kit or versioned library is published.

## Do's and Don'ts

### Do
- Set every text, border and illustration in `#3c422e` on `#f6e6d9`.
- Use ITC Garamond Condensed 400 at 72px+ with the measured negative tracking for headlines.
- Use GT Alpina Typewriter for all UI text at 16px/24px (15px/22.5px on mobile).
- Build primary buttons as a `#d1e030` pill with 1px olive outline and the 4px-offset 6px checker shadow.
- Slide the button face 4px onto its shadow on hover (desktop only), 0.3s ease-in-out.
- Use 20px radius for cards and image frames; 8px for inputs.
- Use dashed 1px olive outlines for image frames and section dividers.
- Alternate full-bleed bands of canvas, sunflower `#fbd535` and lime `#d1e030`.

### Don't
- Don't add `box-shadow`, gradients or glassmorphism; the site has none.
- Don't use a neutral sans for body text; Apercu is only for 13px tags.
- Don't use pure black text; `#000000` appears only on the hidden skip link.
- Don't set the display serif in caps or bold; it is 400 (500 on one emphasised title).
- Don't round buttons to anything but full pills (9999px), except the 8px square submit and 30px review buttons.
- Don't invent semantic colors or tints of the lime.
- Don't loosen display line-height above 1.0.

## Responsive Behavior

### Breakpoints
Measured at 1280px and 390px. The button hover offset is wrapped in `@media (min-width: 1024px)`, the `lg:` prefix
in utilities. Between those, behavior was not measured.

### Touch Targets
Primary pills are 34px tall at both widths; large pills 55px; inputs 58px; the Cart pill 36px.

### Collapsing Strategy
- Hero H1 72px → 46px (tracking -2.16px → -1.44px).
- Body 16px/24px → 15px/22.5px; footer links 16px/24px → 12px/18px.
- Primary pill goes full-width (350px at 390px) and text 16px → 15px.
- Mobile header layout was not measured.

### Image Behavior
The hero is a full-bleed autoplay video (with a "Play animations" control); product images are framed in 20px cards
and scale with the column.

## Iteration Guide

1. Start with canvas `#f6e6d9`, ink `#3c422e`, and the two font stacks.
2. Set headlines in ITC Garamond Condensed with the exact size / line-height / tracking triples from the table.
3. Build `.btn--std` first: `::before` face + `::after` dotted shadow + hover translate. Verify height 34px.
4. Add cream `#fff4ec` cards with 20px radius and 1px olive borders; dashed for image frames.
5. Compose full-bleed bands: video hero with `#00000066` scrim, sunflower split band, canvas manifesto.
6. Check mobile: 46px H1, 15px body, full-width pills.
7. Before shipping, compare against the live site: no shadows, no extra colors, no sans-serif body.
