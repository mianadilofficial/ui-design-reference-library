---
version: alpha
name: OLIPOP
category: "Food & Beverage"
description: "OLIPOP's Shopify storefront: a warm cream #fff6ea canvas, deep forest-teal #14433d ink set in Alias Ano (16-20px), chunky WindsorEF 800 display headlines (90px hero, 52px sections), hot-pink #e31a82 pill CTAs (50px radius, hover plum #5a0c3c), forest #034638 secondary pills, a plum #5a0c3c announcement bar and a #008168 green footer."

colors:
  primary: "#e31a82"
  primary-hover: "#5a0c3c"
  on-primary: "#fff6ea"
  on-primary-modal: "#ffffff"
  canvas: "#fff6ea"
  surface-white: "#ffffff"
  surface-cream-light: "#fffbf5"
  surface-cream-alt: "#fff7e5"
  ink: "#14433d"
  forest: "#034638"
  forest-dark: "#123a35"
  forest-pressed: "#0a3128"
  forest-hover: "#18312a"
  outline-hover: "#1e302a"
  nav-hover: "#1f7369"
  footer-green: "#008168"
  plum: "#5a0c3c"
  pink-soft: "#ff9ec8"
  blush: "#ffb8b3"
  lemon: "#ffff7d"
  lemon-hover: "#e2eb28"
  flavor-yellow: "#fddb02"
  flavor-yellow-soft: "#fee967"
  mint-100: "#edf6f3"
  mint-200: "#d3e8e3"
  mint-300: "#a7d1c5"
  border-cream: "#f3e4cd"
  text-grey: "#3a3a3a"
  scrim: "#14141499"
  error: "#d20000"
  success: "#1f873d"

typography:
  display-hero:
    fontFamily: "WindsorEF, sans-serif"
    fontSize: 90px
    fontWeight: 800
    lineHeight: 85.5px
  display-hero-mobile:
    fontFamily: "WindsorEF, sans-serif"
    fontSize: 56px
    fontWeight: 800
    lineHeight: 51.52px
  page-title:
    fontFamily: "WindsorEF, sans-serif"
    fontSize: 72px
    fontWeight: 700
    lineHeight: 72px
  h2:
    fontFamily: "WindsorEF, sans-serif"
    fontSize: 52px
    fontWeight: 800
    lineHeight: 52px
  h2-mobile:
    fontFamily: "WindsorEF, sans-serif"
    fontSize: 36px
    fontWeight: 800
    lineHeight: 36px
  h3:
    fontFamily: "WindsorEF, sans-serif"
    fontSize: 48px
    fontWeight: 800
    lineHeight: 52.8px
  product-title:
    fontFamily: "WindsorEF, sans-serif"
    fontSize: 48px
    fontWeight: 800
    lineHeight: 48px
  collection-heading:
    fontFamily: "WindsorEF, sans-serif"
    fontSize: 40px
    fontWeight: 800
    lineHeight: 44px
  body-lg:
    fontFamily: "Ano, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  body-hero:
    fontFamily: "Ano, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  body:
    fontFamily: "Ano, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  body-reading:
    fontFamily: "Ano, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav-link:
    fontFamily: "Ano, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 30px
  button-lg:
    fontFamily: "Ano, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28px
  button-hero:
    fontFamily: "Ano, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 18px
  button-modal:
    fontFamily: "\"Ano Bold\", Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
  button-sm:
    fontFamily: "Ano, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 25.2px
  chip:
    fontFamily: "Ano"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16.8px
  product-name:
    fontFamily: "Ano, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22.4px
  input:
    fontFamily: "Ano"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 19.2px
  caption-bold:
    fontFamily: "\"Ano Bold\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 25.2px
  announcement-mobile:
    fontFamily: "Ano"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.8px

rounded:
  none: 0px
  input-form: 10px
  card-contact: 15px
  card: 16px
  input-pill: 48px
  button: 50px
  button-wide: 100px
  chip: 9999px
  circle: 50%

spacing:
  xxs: 6px
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
  xl: 24px
  2xl: 32px
  3xl: 40px
  gutter: 55px
  section: 80px
  container: 1200px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-hero}"
    rounded: "{rounded.button}"
    padding: 15px 32px
    height: 48px
    transition: "0.25s cubic-bezier(0.4, 0, 0.2, 1)"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-modal:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary-modal}"
    typography: "{typography.button-modal}"
    rounded: "{rounded.button}"
    height: 45px
    width: 400px
  button-modal-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.surface-cream-alt}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.button}"
    padding: 10px 32px
    height: 48px
  button-secondary-hover:
    backgroundColor: "{colors.forest-hover}"
  button-shop-now:
    backgroundColor: "{colors.forest}"
    textColor: "{colors.surface-white}"
    rounded: "{rounded.button-wide}"
    border: "2px solid #16433d"
    padding: 8px 15px
    height: 49px
    fontSize: 16px
    fontWeight: 600
  button-add-to-cart:
    backgroundColor: "{colors.forest-dark}"
    textColor: "{colors.surface-white}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.button}"
    border: "3px solid #14433d"
    padding: 8px 16px
    height: 48px
  button-small:
    backgroundColor: "{colors.forest}"
    textColor: "{colors.surface-white}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.button}"
    padding: 3px 20px 1px
    height: 29px
    transition: "0.25s ease-in-out"
  button-small-hover:
    backgroundColor: "{colors.forest-pressed}"
  button-outlined:
    backgroundColor: transparent
    textColor: "{colors.forest}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.button}"
    border: "1px solid #034638"
    padding: 3px 20px
    height: 33px
  button-outlined-hover:
    textColor: "{colors.outline-hover}"
    border: "1px solid #1e302a"
  button-lemon:
    backgroundColor: "{colors.lemon}"
    textColor: "{colors.forest}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.button}"
    padding: 10px 32px
    height: 48px
  button-lemon-hover:
    backgroundColor: "{colors.lemon-hover}"
  chip-tab:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.chip}"
    fontWeight: 600
    rounded: "{rounded.chip}"
    boxShadow: "rgb(20, 67, 61) 0px 0px 0px 1.5px"
    padding: 8px 20px 6px
    height: 31px
  chip-tab-active:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.surface-white}"
    fontWeight: 700
  chip-tab-hover:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.surface-white}"
  text-input-pill:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.forest}"
    typography: "{typography.input}"
    rounded: "{rounded.input-pill}"
    padding: 14px 20px
    height: 47px
  text-input-form:
    backgroundColor: "{colors.surface-white}"
    textColor: "#000000"
    typography: "{typography.body}"
    rounded: "{rounded.input-form}"
    padding: 13.008px 24px
    height: 48px
  card-contact:
    backgroundColor: "{colors.mint-100}"
    textColor: "{colors.text-grey}"
    rounded: "{rounded.card-contact}"
    padding: 60px 20px
  product-gallery:
    backgroundColor: "{colors.flavor-yellow-soft}"
    rounded: "{rounded.card}"
    boxShadow: "rgb(254, 233, 103) 4px 4px 0px 0px"
  link:
    textColor: "{colors.forest}"
    typography: "{typography.product-name}"
  link-hover:
    textColor: "{colors.ink}"
    textDecoration: underline
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    height: 70px
  nav-link-hover:
    textColor: "{colors.nav-hover}"
  announcement-bar:
    backgroundColor: "{colors.plum}"
    textColor: "{colors.surface-white}"
    typography: "{typography.body}"
    height: 40px
  footer:
    backgroundColor: "{colors.footer-green}"
    textColor: "{colors.surface-white}"
    headingTypography: "{typography.h3}"
    headingColor: "{colors.canvas}"
---

# OLIPOP Design System

## Overview

OLIPOP (drinkolipop.com) sells prebiotic soda through a Shopify storefront, and the site
looks like the can: retro, sweet, a bit cheeky. The page sits on a warm cream canvas
(`#fff6ea`). Text and the logo are a deep forest-teal (`#14433d`). Headlines are set in
**WindsorEF**, a heavy, soft-serifed 1900s display face pushed to weight 800, which gives
everything a 1970s soda-fountain feel. Body copy, navigation and buttons use **Ano**
(Alias), a round geometric sans.

The capture (1280px desktop, top 2400px) shows this order:

1. A slim **plum announcement bar** (`#5a0c3c`, 40px tall) with white Ano 16px copy and
   an underlined link ("Shop Pomegranate Sparkle"), plus left/right arrows for the slider.
2. A 70px **cream header** (`#fff6ea`) with text links on the left (Shop, Learn, Subscribe),
   the curved OLIPOP wordmark centred, and Find a store, account and cart on the right.
3. A **split hero**. On the left, a pink seasonal panel with the 90px WindsorEF headline
   "Come sip with us" in plum `#5a0c3c`, an 18px Ano paragraph and a hot-pink pill CTA.
   On the right, a full-bleed product photograph of the can with a scalloped
   "limited edition" sticker.
4. An **email-capture modal** that opens on load. It has a pink `#ff9ec8` body, a
   WindsorEF "Get 15% Off" heading, a white pill input and a full-width `#e31a82`
   "Count Me In" pill. A `#14141499` scrim covers the page behind it.
5. **"Shop our collections"**: a 52px WindsorEF heading, a row of outlined pill tabs
   (9g Fiber, 6g Fiber, MINIs, Limited Edition, Variety Packs) and a horizontal carousel
   of cut-out can renders with star ratings, a fiber label and the product name.
6. **"Why OLIPOP?"**: a sky-and-ice-cubes photograph with a centred WindsorEF heading,
   a 20px Ano paragraph, a forest pill CTA ("Find Your Flavor") and a line-up of five
   cans standing on ice.
7. A **green footer** (`#008168`) with a 48px WindsorEF "Sign up to get 15% off your
   first order" in cream and a lemon `#ffff7d` Subscribe pill.

The art direction leans on product photography and flavour colour. Each can's colour
(banana yellow, pomegranate pink, grape purple) floods the section around it, while the
chrome stays fixed in cream and forest. Microcopy is warm and playful: "Count Me In",
"Find Your Flavor", "Come sip with us", "Keep refrigerated [U+2744]".

No public OLIPOP design system, token package or brand-guideline site exists (see
Design System Architecture). Every value in this file was measured on drinkolipop.com
(homepage, `/products/banana-cream`, `/collections/drinks`, `/pages/contact-us`) or
recorded as a probe in `SOURCES.json`.

## Colors

### Brand & Accent

- **Pink / primary** `#e31a82`: fill for the main CTAs (the hero "Shop Pomegranate
  Sparkle" and the modal "Count Me In"). Pills only, never large areas.
- **Plum / primary-hover** `#5a0c3c`: the hover fill of every pink CTA (measured on both
  pink buttons). Also the announcement-bar background and the hero headline colour in the
  current seasonal campaign.
- **Pink soft** `#ff9ec8`: body of the email-capture modal.
- **Blush** `#ffb8b3`: a large-area background measured on the homepage
  (`backgroundColorsByArea`).
- **Lemon** `#ffff7d` with hover `#e2eb28`: the footer Subscribe pill.
- **Flavor yellow** `#fddb02` / `#fee967`: the Banana Cream product page. The flavour
  colour floods the page and drives the gallery's hard offset shadow. The CSS references
  `var(--flavor-color-200, #ffdbd9)`.

### Surface

- **Canvas** `#fff6ea`: header, collection sections, product pages. It covers the largest
  area on the homepage and collection page, and is the cream you see in the capture.
- **Surface white** `#ffffff`: the computed `body` background. On screen it shows only
  in inputs and small cards.
- **Cream light** `#fffbf5` and **cream alt** `#fff7e5`: alternate cream bands. `#fff7e5`
  is also the label colour on forest pills.
- **Footer green** `#008168`: the full-width footer band. The same colour is used as
  text for the "Keep refrigerated" caption.
- **Mint** `#edf6f3` / `#d3e8e3` / `#a7d1c5`: the contact page, which uses its own cool
  mint surfaces.
- **Scrim** `#14141499`: the overlay behind the modal.
- **Border cream** `#f3e4cd`: the most frequent border colour, used for hairlines on cream.

### Text

- **Ink** `#14433d`: the most-read text colour on every measured page. Used for
  headlines, body, nav and tab outlines.
- **Forest** `#034638`: product-name links, small add-to-cart pills, collection headings
  on `/collections/drinks` and input text.
- **Forest dark** `#123a35`: the "Add to Cart" fill on product pages.
- **Forest pressed** `#0a3128` and **forest hover** `#18312a`: hover fills of the forest
  pills.
- **Outline hover** `#1e302a`: the text and border colour of outlined pills on hover.
- **Nav hover** `#1f7369`: the header "Log in" link turns this colour on hover.
- **Text grey** `#3a3a3a`: copy on the contact-page help cards.
- **On-primary** `#fff6ea` (cream on the hero CTA) and `#ffffff` (white on the modal CTA).

### Semantic

Rendered pages showed no error or success states. The site's `:root` declares
`--color-error: #d20000` and `--color-success: #1F873D`, recorded here as `error` and
`success`. They come from root variables, not observed UI.

## Typography

### Font Family

- **WindsorEF** (served as `WindsorEF, sans-serif`; @font-face families `WindsorEF` and
  `WindsorEF-UltraHeavy`, both loaded at 900). This is the display face for every heading.
  Windsor was designed by Elisha Pechey and released by the Stephenson Blake foundry in
  1905 as a display face ([Wikipedia](https://en.wikipedia.org/wiki/Windsor_(typeface))).
  The served name "WindsorEF" refers to the Elsner+Flake edition. MyFonts now lists that
  edition as no longer available
  ([MyFonts](https://www.myfonts.com/collections/windsor-font-elsner-flake)).
- **Ano** (served as `Ano, "Helvetica Neue", Helvetica, Arial, sans-serif`, or bare
  `Ano`). Used for body text, navigation, buttons, inputs and tabs. Ano was designed by
  Gareth Hague and is published by Alias
  ([MyFonts](https://www.myfonts.com/collections/ano-font-alias)). Fonts In Use credits
  the OLIPOP identity (Break Maiden, 2018) with "Alias Ano" for logotype and text and
  Windsor as accent type ([Fonts In Use](https://fontsinuse.com/uses/25089/olipop)).
- **"Ano Bold"**: a separately named @font-face for the bold cut. It renders at
  `font-weight: 400` because the boldness is in the file. The modal button and the
  "Keep refrigerated" caption use it.

### Hierarchy

| Token | Family | Size | Weight | Line height | Where |
|---|---|---|---|---|---|
| display-hero | WindsorEF | 90px | 800 | 85.5px | Homepage hero h1 "Come sip with us" |
| display-hero-mobile | WindsorEF | 56px | 800 | 51.52px | Same h1 at 390px |
| page-title | WindsorEF | 72px | 700 | 72px | Contact "How can we help?" |
| h2 | WindsorEF | 52px | 800 | 52px | "Shop our collections" |
| h2-mobile | WindsorEF | 36px | 800 | 36px | Same at 390px |
| h3 | WindsorEF | 48px | 800 | 52.8px | Footer sign-up heading |
| product-title | WindsorEF | 48px | 800 | 48px | PDP "Banana Cream" |
| collection-heading | WindsorEF | 40px | 800 | 44px | "9g fiber" on /collections/drinks |
| body-lg | Ano | 20px | 400 | 28px | "Why OLIPOP?" paragraph |
| body-hero | Ano | 18px | 400 | 25.2px | Hero paragraph |
| body | Ano | 16px | 400 | 22.4px | Default copy, announcement, fiber label |
| body-reading | Ano | 16px | 400 | 24px | PDP reviews/description |
| nav-link | Ano | 18px | 700 | 30px | Shop / Learn / Subscribe / Find a store |
| button-lg | Ano | 18px | 700 | 28px | Find Your Flavor, Subscribe, Add to Cart |
| button-hero | Ano | 18px | 700 | 18px | Hero pink CTA |
| button-modal | "Ano Bold" | 20px | 400 | 20px | "Count Me In" |
| button-sm | Ano | 14px | 700 | 25.2px | "Add 12 Pack", outlined pills |
| chip | Ano | 14px | 700 (active) / 600 | 16.8px | Collection tabs |
| product-name | Ano | 16px | 700 | 22.4px | Carousel product name link |
| input | Ano | 16px | 700 | 19.2px | Email pill input |
| caption-bold | "Ano Bold" | 14px | 400 | 25.2px | "Keep refrigerated" |
| announcement-mobile | Ano | 12px | 400 | 16.8px | Announcement bar at 390px |

Letter-spacing is `normal` on every measured element, and no text is uppercased
(`textTransform: none` throughout).

### Principles

- WindsorEF is for headlines only. It never appears below 36px on measured pages.
- Display headlines run at a line-height at or below 1.0 (90/85.5, 52/52, 56/51.52), so
  stacked lines nearly touch, like lettering on a can.
- Ano carries everything functional. Emphasis is a weight change to 700, never italics
  or colour.
- Headline and body share one colour (ink, or the section's flavour colour), so
  hierarchy comes from size and face alone.

### Note on Font Substitutes

Both faces are commercial. Ano is licensed from Alias; Windsor exists in several
commercial digitisations, including Bitstream's (per Wikipedia). The site's own fallback
stack after Ano is `"Helvetica Neue", Helvetica, Arial, sans-serif`. Headings fall back
to `sans-serif`, which loses the whole character, so license a Windsor cut for any
faithful reproduction. OLIPOP publishes no recommended free substitute.

## Layout

### Spacing System

Measured gaps cluster at 6px (most frequent), 8px, 12px, 16px and 24px. Paddings cluster
at 16px and 20px, then 8px, 10px, 12px, 32px, 40px and 80px. Button padding is either
`10px 32px` or `15px 32px` for large pills, and `3px 20px 1px` for small ones. The theme
also declares `--gutter-site: 55px`, `--section-spacing: 55px`,
`--gutter-site-mobile: 22px` and `--width-site: 1200px`.

Scale used here: 6 · 8 · 12 · 16 · 20 · 24 · 32 · 40 · 55 (gutter) · 80 (section).

### Grid & Container

- Content is centred, with a max width of 1200px (`--width-site`).
- The hero is a two-column split: a text panel on the left and a photo bleeding to the
  right edge.
- Collections use a horizontal carousel showing three full cans plus partial cans at the edges in the capture. Prev/next
  buttons are circles on the left and right edges.
- "Why OLIPOP?" is a centred single column (text about 740px wide) over a full-bleed photo.
- The contact page uses mint help cards (322px wide, 15px radius).

### Whitespace Philosophy

Sections are tall and airy in the capture: 80px paddings were measured, and the
≤ 1.0 line-height headings have generous space above and below. Product renders sit on bare cream with no
card chrome, so the cans carry the colour.

## Elevation & Depth

The site is almost flat. Measured shadows:

- **None** on most buttons (computed as a transparent 3-layer Tailwind ring stack).
- **Tab outline ring**: `rgb(20, 67, 61) 0px 0px 0px 1.5px`. The outlined collection tabs
  draw their border with a box-shadow ring, not a border.
- **Hard offset flavour shadow**: `rgb(254, 233, 103) 4px 4px 0px 0px` on the Banana
  Cream page, from CSS `4px 4px 0 0 var(--flavor-color-200, #ffdbd9)`. A solid,
  zero-blur, sticker-like offset tinted with the flavour colour.
- **Inset hairline**: `rgba(0, 0, 0, 0.25) 0px 0px 2px 0px inset` on PDP elements.
- **Modal scrim**: `#14141499` over the page.

### Decorative Depth

Depth comes from photography (cans on ice, a can in snow), cut-out product renders that
overlap section edges, and flat stickers: the scalloped "limited edition" seal and the
mint scalloped "New" badge.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| none | 0px | Sections, header, footer |
| input-form | 10px | Contact-form inputs |
| card-contact | 15px | Contact help cards |
| card | 16px | Product gallery, collection tiles |
| input-pill | 48px | Email pill input |
| button | 50px | All primary/secondary pills |
| button-wide | 100px | "Shop Now" pill |
| chip | 9999px | Collection tabs |
| circle | 50% | Carousel arrows, icon buttons |

The extraction found no clip-paths, skews or notches on buttons. Scalloped badges are
images or SVG, not CSS shapes.

### Photography Geometry

Product shots are cut-out cans on transparent backgrounds. Lifestyle shots run full-bleed
with square edges. The modal's top image is square-edged.

## Components

### Buttons

- **Primary (pink pill)**: `#e31a82` fill, cream `#fff6ea` label, Ano 18px/700
  (line-height 18px), padding `15px 32px`, height 48px, radius 50px. Hover changes the
  fill to plum `#5a0c3c` over `0.25s cubic-bezier(0.4, 0, 0.2, 1)`.
- **Modal CTA**: `#e31a82` fill, white label, "Ano Bold" 20px/400, height 45px, width
  400px (full width of the form), radius 50px. Hover fill `#5a0c3c`.
- **Secondary (forest pill)**: `#14433d` fill, `#fff7e5` label, Ano 18px/700/28px, padding
  `10px 32px`, height 48px, radius 50px. Hover fill `#18312a`.
- **Shop Now**: `#034638` fill, white Ano 16px/600 label, `2px solid #16433d` border,
  padding `8px 15px`, height 49px, radius 100px.
- **Add to Cart (PDP)**: `#123a35` fill, white 18px/700 label, `3px solid #14433d` border,
  padding `8px 16px`, height 48px, radius 50px.
- **Small add pill** ("Add 12 Pack"): `#034638` fill, white Ano 14px/700/25.2px, padding
  `3px 20px 1px`, height 29px, radius 50px. Hover `#0a3128` over `0.25s ease-in-out`.
- **Outlined pill** ("Shop Variety Packs"): transparent fill, `1px solid #034638` border,
  `#034638` 14px/700 label, padding `3px 20px`, height 33px. On hover the label and
  border turn `#1e302a`.
- **Lemon pill** (footer Subscribe): `#ffff7d` fill, `#034638` 18px/700 label, padding
  `10px 32px`, height 48px. Hover fill `#e2eb28`.

### Cards & Containers

- **Product tile** (carousel): no box. A cut-out can, a star row, a fiber label
  (Ano 16px/400 `#14433d`) and a name link (Ano 16px/700 `#034638`), all centred.
- **Product gallery** (PDP): a flavour-coloured block (`#fee967` for Banana Cream) with a
  16px radius and the hard `4px 4px 0 0` flavour shadow.
- **Contact help card**: `#edf6f3` background, 15px radius, padding `60px 20px`, `#3a3a3a`
  text, 322px wide.

### Inputs & Forms

- **Email pill input** (modal and footer): white background, `#034638` Ano 16px/700
  (line-height 19.2px) text, padding `14px 20px`, height 47px, radius 48px, envelope icon
  on the left.
- **Form input** (contact page): white background, `#000000` Ano 16px/400 text, padding
  `13.008px 24px`, height 48px, radius 10px.

Focus styles were not measured. The root declares
`--vw-focus-outline-color: #0018ff`, but it was not observed in use.

### Navigation

- **Announcement bar**: `#5a0c3c`, 40px tall, white Ano 16px/22.4px (12px/16.8px on
  mobile), an underlined link and a slider with chevrons.
- **Header**: `#fff6ea`, 70px tall. Nav links are Ano 18px/700/30px `#14433d`, and the
  centred logo is a curved wordmark. The header "Log in" link hovers to `#1f7369`.
- **Collection tabs**: Ano 14px pills (radius 9999px, padding `8px 20px 6px`, height
  31px), outlined by a `1.5px` `#14433d` ring. Inactive tabs are transparent with a
  `#14433d` label at weight 600. The active tab, and any tab on hover, fills `#14433d`
  with a white label at weight 700.
- **Text links**: `#034638`. In-content links hover to `#14433d` with an underline.

### Pills, Tags, and Chips

- The collection tabs above are the chip pattern.
- "New" is a 72px (desktop) / 56px (mobile) scalloped mint badge with Ano 14px/700
  `#034638` text.
- "Keep refrigerated [U+2744]" is a "Ano Bold" 14px caption in `#008168`.

### Signature Components

- **Email-capture modal**: image top, `#ff9ec8` body, WindsorEF headline, centred Ano copy
  with bold emphasis, a pill input and a full-width pink pill.
- **Flavour-flood product page**: the whole PDP takes the flavour colour (`#fddb02` /
  `#fee967` for Banana Cream) with a hard offset shadow.
- **Green sign-up footer**: `#008168` band with a 48px cream WindsorEF heading and a
  lemon pill.

## Design System Architecture

**OLIPOP publishes no public design system.** No design-system site, brand portal, token
package (npm/GitHub) or downloadable brand guidelines were found. The official press page
([drinkolipop.com/pages/press](https://drinkolipop.com/pages/press)) offers only press
coverage and a press email. Searches run are listed in `SOURCES.json` → `_research`
(brand guidelines/press kit, typeface/agency, GitHub/npm tokens, foundry pages).

Published sources describe the identity, not a system. Per
[Fonts In Use](https://fontsinuse.com/uses/25089/olipop), the 2018 identity and packaging
by Break Maiden pairs Alias Ano (logotype and text) with Windsor (accent type).
[The Dieline](https://thedieline.com/blog/2019/1/30/break-maiden-designs-gut-happiness-for-olipop)
also credits Break Maiden with the packaging.

What can be measured on the site (the de-facto system):

- **Platform**: the page source exposes
  `Shopify.theme = {"name":"Production | ehouse","schema_name":"Olipop","schema_version":"1.0","theme_store_id":null}`,
  a custom Shopify theme, not one from the theme store.
- **Token architecture**: no semantic token layer is exposed for the brand colours.
  `:root` mixes generic theme variables (`--color-btn-primary: #3a3a3a`,
  `--color-body-text: #333232`, `--border-radius: 2px`, `--font-stack-body: Helvetica,
  Arial, sans-serif`) that do **not** match the rendered UI, a single brand variable
  `--color-dark-green: #14433D`, and type-scale numbers (`--font-h1-mobile: 32`,
  `--font-h2-mobile: 18`, `--font-mega-title-large-desktop: 65`). Large sets of other
  prefixed variables (`--sl-*`, `--rb-*`, `--kl-*`) are also declared.
- **Utility CSS**: elements carry Tailwind-style utilities with a `tw-` prefix, for
  example the hero h1 class `tw-font-display tw-text-inherit tw-text-center` and the
  footer `tw-font-ano`. The display and body faces are utility aliases
  (`tw-font-display` → WindsorEF, `tw-font-ano` → Ano).
- **Per-flavour theming**: CSS references `--flavor-color-100`, `--flavor-color-200` and
  `--flavor-color-selector`. Shadows use `var(--flavor-color-200, #ffdbd9)`. On the Banana Cream page that shadow
  renders `rgb(254, 233, 103)` (`#fee967`) and the page uses `#fddb02` / `#fee967`. No
  dark mode, high-contrast or density modes were observed.
- **Type & spacing**: no documented base unit. Measured spacing clusters on 4px multiples
  (8, 12, 16, 20, 24, 32, 40, 80) plus a 6px gap and a 55px gutter.
- **Component model**: no documented inventory. Measured components are listed under
  Components (pills in 5 colourways, chip tabs, pill and form inputs, contact cards,
  modal, announcement bar, header, footer).
- **Accessibility**: an "Accessibility Statement" skip link is present in the body text,
  and the site has an `/pages/accessibility` page. No contrast or touch-target rules are
  published.
- **Delivery**: no packages, Figma kit or versioning are public.

## Do's and Don'ts

### Do

- Use cream `#fff6ea` as the page and forest-teal `#14433d` for text and outlines.
- Set every headline in WindsorEF at weight 800 with line-height ≤ 1.0 (90/85.5 hero,
  52/52 section).
- Make every button a pill (50px radius, 9999px for tabs), with Ano 700 labels and no
  uppercase.
- Keep pink `#e31a82` for the single most important CTA, and hover it to plum `#5a0c3c`.
- Use forest `#14433d` / `#034638` pills for secondary actions, hovering to darker forest
  (`#18312a`, `#0a3128`).
- Let the flavour colour flood a product section, and add hard zero-blur offset shadows
  in that colour.
- Show cut-out cans on bare backgrounds, with no card boxes or borders.
- Write warm, playful microcopy ("Count Me In", "Find Your Flavor").

### Don't

- Don't use blurred drop shadows. The site's depth is flat or hard-offset.
- Don't set body copy in WindsorEF or headlines in Ano.
- Don't use square or slightly rounded buttons (the theme's leftover `--border-radius:
  2px` is not used by the visible UI).
- Don't use pure black text. Ink is `#14433d`, except on contact form inputs (`#000000`).
- Don't add letter-spacing or uppercase transforms. Everything measured is `normal` /
  `none`.
- Don't spread pink across large surfaces. It is a CTA colour (the soft `#ff9ec8` is the
  surface pink).

## Responsive Behavior

### Breakpoints

Measured at 1280px (desktop) and 390px (mobile). The hero h1 class includes an
`lg:` variant (`lg:tw-text-center`), which shows a Tailwind-style `lg` breakpoint. Its
pixel value was not measured.

### Type Scaling

| Element | Desktop | Mobile (390px) |
|---|---|---|
| Hero h1 | 90px / 85.5px | 56px / 51.52px |
| Section h2 | 52px / 52px | 36px / 36px |
| Body paragraph | 20px / 28px | 16px / 22.4px |
| Hero paragraph | 18px / 25.2px | 16px / 22.4px |
| Announcement | 16px / 22.4px | 12px / 16.8px |
| "New" badge | 72px, label 14px | 56px, label 12px |

### Touch Targets

The large pills are 45-49px tall. Small add pills are 29px and tabs about 31px. No
target-size rule is published.

### Collapsing Strategy

At 390px the measured header text is only "Log in", so the desktop text links
(Shop / Learn / Subscribe) are not shown inline. Headline and paragraph sizes step down
as listed in the Type Scaling table. Other mobile layout changes were not measured.

### Image Behavior

Hero and "Why OLIPOP?" photographs are full-bleed at desktop. Mobile image behaviour
was not measured.

## Iteration Guide

1. Start with cream `#fff6ea`, ink `#14433d`, WindsorEF 800 for headings and Ano for
   everything else.
2. Build pills first: pink primary (`15px 32px`, 48px, radius 50px, hover `#5a0c3c`),
   forest secondary (`10px 32px`, hover `#18312a`), small forest (`3px 20px 1px`, 29px),
   and outlined (1px `#034638`).
3. Add chip tabs with the 1.5px box-shadow ring, filling `#14433d` when active or hovered.
4. Frame the page with the plum announcement bar (40px), the cream 70px header and the
   `#008168` footer with the lemon pill.
5. For product content, pick the flavour colour and flood the section, adding the
   `4px 4px 0 0` hard shadow.
6. Check against measurements: h1 90/85.5/800, h2 52/52/800, body 20/28 or 16/22.4,
   no letter-spacing, no uppercase.
7. Values not listed here (focus ring, disabled states, dark mode) were not measured and
   have no official source. Leave them out rather than invent them.
