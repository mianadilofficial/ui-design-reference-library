---
version: alpha
name: Vitra
category: "Home & Furniture"
description: "Vitra's US online shop (vitra.com/en-us) is a white, gallery-like system set in the bespoke Lineto-refined corporate Futura served as vitraFutura and vitraFuturaV2: 50px/400 hero titles over full-bleed photography, 40px/44px section heads in #101010, 17px/500 #333333 navigation that turns signal red #d43e42 on hover, ghost CTAs drawn as 1px rules above and below the label, #333333 5px-radius Buy buttons that darken to #101010, #f7f7f7 newsletter band and 0px photo corners."

colors:
  primary: "#333333"
  primary-hover: "#101010"
  on-primary: "#ffffff"
  accent: "#d43e42"
  canvas: "#ffffff"
  ink: "#333333"
  ink-strong: "#101010"
  ink-muted: "#767676"
  ink-faint: "#cccccc"
  surface-soft: "#f7f7f7"
  surface-grey: "#e6e6e6"
  surface-light: "#f5f5f5"
  on-photo: "#ffffff"

typography:
  hero-title:
    fontFamily: "vitraFuturaV2, Futura, Arial, sans-serif"
    fontSize: 50px
    fontWeight: 400
    lineHeight: 50px
  section-title:
    fontFamily: "vitraFuturaV2, Futura, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 44px
  product-title:
    fontFamily: "vitraFuturaV2, Futura, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 35.2px
  hero-title-mobile:
    fontFamily: "vitraFuturaV2, Futura, Arial, sans-serif"
    fontSize: 30px
    fontWeight: 400
    lineHeight: 36px
  section-title-mobile:
    fontFamily: "vitraFuturaV2, Futura, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 35.2px
  hero-subtitle:
    fontFamily: "vitraFuturaV2, Futura, Arial, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 33px
  long-copy:
    fontFamily: "vitraFuturaV2, Futura, Arial, sans-serif"
    fontSize: 22px
    fontWeight: 300
    lineHeight: 33px
  tile-label:
    fontFamily: "vitraFuturaV2, Futura, Arial, sans-serif"
    fontSize: 22px
    fontWeight: 500
    lineHeight: 26.4px
  footer-heading:
    fontFamily: "vitraFutura, Futura, Arial, sans-serif"
    fontSize: 22px
    fontWeight: 600
    lineHeight: 32.3px
  lead:
    fontFamily: "vitraFuturaV2, Futura, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  teaser-copy:
    fontFamily: "vitraFuturaV2, Futura, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  price:
    fontFamily: "vitraFuturaV2, Futura, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: "vitraFutura, Futura, Arial, sans-serif"
    fontSize: 17px
    fontWeight: 500
    lineHeight: 32.3px
  tab:
    fontFamily: "vitraFuturaV2, Futura, Arial, sans-serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 25.5px
  caption:
    fontFamily: "vitraFuturaV2, Futura, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  button:
    fontFamily: "vitraFuturaV2, Futura, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 30px
  body:
    fontFamily: "vitraFuturaV2, Futura, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-cart:
    fontFamily: "vitraFuturaV2, Futura, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 18.3px
  menu-item:
    fontFamily: "vitraFutura, Futura, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 500
    lineHeight: 32.3px
  utility:
    fontFamily: "vitraFutura, Futura, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 24.225px
  label-caps:
    fontFamily: "vitraFutura, Futura, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 32.3px
    letterSpacing: 2.1px
  legal:
    fontFamily: "vitraFutura, Futura, Arial, sans-serif"
    fontSize: 13.0001px
    fontWeight: 500
    lineHeight: 32.3px
    letterSpacing: 1px

rounded:
  none: 0px
  button: 5px
  control: 6px

spacing:
  xxs: 6px
  xs: 8px
  sm: 16px
  md: 20px
  lg: 32px
  xl: 40px
  section: 64px
  block: 72px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.button}"
    padding: 8px 18px 10px
    height: 42px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-add-to-cart:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-cart}"
    rounded: "{rounded.button}"
    padding: 12px 22px
    height: 42px
  button-ruled:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 40px 10px
    height: 48px
    rules: "1px solid #333333 top and bottom (::before)"
  button-ruled-hover:
    rules: "::before height 48px -> 44px, transition height 0.1s"
  button-ruled-on-photo:
    textColor: "{colors.on-photo}"
    rules: "1px solid #ffffff top and bottom (::before)"
  back-to-top:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.label-caps}"
    rounded: "{rounded.none}"
    padding: 9.075px 21px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav-link-hover:
    textColor: "{colors.accent}"
  utility-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.utility}"
  utility-link-hover:
    textColor: "{colors.accent}"
  tab:
    textColor: "{colors.ink}"
    typography: "{typography.tab}"
  tab-selected:
    textColor: "{colors.accent}"
  teaser-card:
    imageRadius: "{rounded.none}"
    titleTypography: "{typography.caption}"
    titleColor: "{colors.ink}"
    subtitleColor: "{colors.ink-muted}"
  configurator-panel:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.button}"
    shadow: "rgba(0, 0, 0, 0.1) 0px 0px 10px 0px"
  newsletter-band:
    backgroundColor: "{colors.surface-soft}"
    textColor: "{colors.ink}"
    typography: "{typography.footer-heading}"
  breadcrumb:
    textColor: "{colors.ink-faint}"
    fontWeight: 100
    letterSpacing: 0.5px
---

## Overview

Vitra's US site is an online shop that looks like a museum catalogue. It opens with a full-bleed photograph —
in the capture, a raw concrete stairwell with a gold Panton Chair — overlaid with a centred white 50px title
("Panton Chair Classic Gold"), a 22px subtitle ("Limited Edition 2026"), and a ghost CTA: the words "Buy now"
framed only by a thin white rule above and below. There is no button fill, no pill, no gradient.

Below the hero the page turns white `#ffffff` and calm:

- A header row: the lowercase **vitra.** wordmark at left, seven 17px/500 navigation links (Products,
  Inspirations, Services, Professionals, Magazine, Vitra Campus, About Vitra), small grey utility links ("Find
  Vitra" with a pin icon, "Contact") above the icons for search, account, cart and a country flag.
- A 2×2 grid of large lifestyle photographs (Bascule, Antony, Home Stories, Mynt Soft), each captioned
  centrally with a 16px/500 `#333333` title and a `#767676` subtitle ("Tailored to Move. Made for Comfort.").
- A centred text block: "Discover our in stock products" in 40px/400 `#101010`, a 20px/30px paragraph, and a
  dark ruled "Discover" link sitting over a pale photographic band.
- "Product categories" — 40px heading, then a row of image tiles with white 22px/500 labels.
- A `#f7f7f7` newsletter band ("Vitra Newsletter", 22px/600) and a dense footer with 13px legal copy.
- A square `#333333` back-to-top button pinned to the right edge.

Colour is almost absent from the interface: `#333333` and `#101010` text, white and very light greys. The one
signal colour is **red `#d43e42`**, used only as the hover colour for every navigation and utility link and for
the selected tab on product pages. The voice is understated and descriptive ("Vitra generally manufactures to
order. However, a selection of our bestselling products is kept in stock for faster delivery.").

## Colors

### Brand & Accent

- **Primary action `#333333`** — fill of the "Buy" and "Add to cart" buttons and the back-to-top button.
  Hover darkens to **`#101010`**.
- **Accent red `#d43e42`** — link hover colour (nav, utility links) and the selected product-page tab. Never a fill.

### Surface

- **Canvas `#ffffff`** — page background.
- **Soft grey `#f7f7f7`** — newsletter band in the footer; the largest light-grey area on the homepage.
- **Grey `#e6e6e6`**, **light grey `#f5f5f5`** — image backdrops and product-page panels.

### Text

- **Ink `#333333`** — navigation, captions, product titles, body UI text (the body colour).
- **Strong ink `#101010`** — section titles and long-form paragraphs.
- **Muted `#767676`** — subtitles, utility links, designer/year lines ("Verner Panton, 1959").
- **Faint `#cccccc`** — breadcrumbs on product pages.
- **On photo `#ffffff`** — hero titles, tile labels.

## Typography

### Font Family

Vitra's corporate typeface is a refined Futura made bespoke by Lineto: per
[Lineto](https://lineto.com/bespoke/vitra), Lineto "refitted and refined the corporate typeface of Swiss
furniture maker Vitra into a systematic type family" (agency Cornel Windlin, introduced 2004), with "five evenly
balanced weights" and optimisation "for screen use in a wide range of sizes". The site serves two builds:

- **vitraFuturaV2** (loaded weights 300, 400, 500, 600) — headings, captions, buttons, product copy.
  Stack `vitraFuturaV2, Futura, Arial, sans-serif`.
- **vitraFutura** (loaded weights 100, 500, 600, 700) — navigation, menus, footer, breadcrumbs.
  Stack `vitraFutura, Futura, Arial, sans-serif`.

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|---|
| hero-title | V2 | 50px | 400 | 50px | — | Hero H1 over photo |
| section-title | V2 | 40px | 400 | 44px | — | "Discover our in stock products", "Product categories" |
| product-title | V2 | 32px | 500 | 35.2px | — | Product page H1 |
| hero-subtitle | V2 | 22px | 400 | 33px | — | Hero subline |
| long-copy | V2 | 22px | 300 | 33px | — | Product story paragraphs |
| tile-label | V2 | 22px | 500 | 26.4px | — | Category tile labels on images |
| footer-heading | vitraFutura | 22px | 600 | 32.3px | — | "Vitra Newsletter" |
| lead | V2 | 20px | 400 | 30px | — | Section intro paragraphs |
| teaser-copy | V2 | 20px | 400 | 28px | — | Teaser text |
| price | V2 | 20px | 500 | 24px | — | "USD 5,900" |
| nav | vitraFutura | 17px | 500 | 32.3px | — | Main navigation, body default |
| tab | V2 | 17px | 400 | 25.5px | — | Product page tabs |
| caption | V2 | 16px | 500 | 24px | — | Teaser title/subtitle |
| button | V2 | 16px | 400 | 30px | — | Ruled CTA label |
| body | V2 | 16px | 400 | 24px | — | Product spec text, Buy button |
| button-cart | V2 | 15px | 400 | 18.3px | — | Add to cart |
| menu-item | vitraFutura | 15px | 500 | 32.3px | — | Mega menu links (row heads 700) |
| utility | vitraFutura | 14px | 500 | 24.225px | — | Find Vitra, Contact |
| label-caps | vitraFutura | 14px | 600 | 32.3px | 2.1px | Skip link, back-to-top (uppercase) |
| legal | vitraFutura | 13.0001px | 500 | 32.3px | 1px | Copyright line |

Mobile (390px): hero title 30px/36px, section titles 32px/35.2px, product title 26px/31.2px, body/lead 17px.

### Principles

- Large sizes use **regular weight 400** (50px, 40px); emphasis comes from size, not weight.
- Medium (500) is the UI weight for navigation, captions and prices; 600 only for small headings.
- Tracking is normal everywhere except uppercase micro-labels (2.1px at 14px, 1px at 13px) and light breadcrumbs (0.5px).
- Sentence case throughout; uppercase only for skip/back-to-top labels and the copyright line.

### Note on Font Substitutes

vitraFutura is proprietary to Vitra (Lineto bespoke). The site's own fallback is **Futura** (a commercial typeface), then Arial. Free geometric substitutes with a similar construction include Jost and League
Spartan; when substituting, keep the 400 weight for large headings and 500 for UI text.

## Layout

### Spacing System

Measured gaps and paddings: 6, 8, 16, 20, 32, 40, 64, 72px, plus 8.075px / 16.15px / 24.225px values
(arithmetically 0.475×, 0.95× and 1.425× of the 17px base; the nav line-height 32.3px is 1.9× 17px). Ruled CTAs pad
`8px 40px 10px`; section headings carry 40px bottom padding on product pages; 72px paddings separate blocks.

### Grid & Container

- Header spans the viewport with the wordmark at the left edge.
- Teaser grid: two columns of large photographs with a narrow gutter, captions centred below each.
- Product categories: a horizontal row of five image tiles.
- Text sections are centred, with headings and paragraphs constrained to a narrow measure.

### Whitespace Philosophy

Very generous vertical spacing (large empty bands between the hero, teaser grid and text sections) — the page
breathes like a printed catalogue. Content blocks are few and large.

## Elevation & Depth

The page is flat. Measured shadows:

- `rgba(0, 0, 0, 0.1) 0px 0px 10px 0px` — the floating product configurator panel (white, 5px radius).
- `rgba(0, 0, 0, 0.15) 0px 2px 4px 0px` — small controls on the product page.
- `rgba(0, 0, 0, 0.22) 0px 2px 4px 0px inset` — a pressed/inset control on the product page.

Photography supplies all depth on the homepage.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| none | 0px | Photographs, ruled CTAs, back-to-top button |
| button | 5px | Buy / Add to cart buttons, configurator panel |
| control | 6px | Small product-page controls |

### The Ruled CTA

Vitra's signature shape is not a shape at all: the CTA is a transparent box whose `::before` pseudo-element draws
a 1px rule on the top and bottom edges (white on photos, `#333333` on light backgrounds). On hover the rules close
in from 48px to 44px apart (`transition: height 0.1s`).

## Components

### Buttons

- **Buy (primary)**: `#333333`, white 16px/400/24px, 5px radius, `8px 18px 10px`, 42px tall; hover `#101010`.
- **Add to cart**: `#333333`, white 15px/400/18.3px, 5px radius, `12px 22px`, 42px tall, wide in the buy panel.
- **Ruled CTA** ("Buy now", "Discover", "More details"): transparent, 16px/400/30px label, `8px 40px 10px`,
  48px tall, 1px rules top and bottom, no side borders, 0px radius.
- **Back to top**: square `#333333` block with white chevron, pinned right; label style 14px/600 uppercase 2.1px.

### Cards & Containers

- **Teaser card**: photograph with 0px corners, centred 16px/500 title `#333333` and subtitle `#767676`.
- **Category tile**: photograph with a white 22px/500 label.
- **Configurator panel**: white, 5px radius, `rgba(0,0,0,0.1) 0 0 10px` shadow; contains product name, price,
  delivery window and the Add to cart button.

### Inputs & Forms

No text input was measured on the homepage or product page. Inputs are not specified here.

### Navigation

- **Main nav**: 17px/500 `#333333` links; hover `#d43e42`. No underline.
- **Utility links**: 14px/500 `#767676`; hover `#d43e42`.
- **Mega menu**: 15px/500 links in `#333333`, row heads 15px/700.
- **Breadcrumbs (product page)**: 17px weight 100, `#cccccc`, tracked 0.5px, `/` separators.

### Tabs

Product-page tabs ("Production", "Product and safety information", "Colours and materials"): 17px/400/25.5px
`#333333`; the selected tab is `#d43e42`.

### Signature Components

- Full-bleed hero with centred white title, subtitle and ruled CTA.
- Ruled CTA (rules only, no fill).
- Red-on-hover navigation.

## Design System Architecture

No public Vitra design-system documentation, token package or brand guideline was found (searches recorded in
SOURCES.json; the [press page](https://www.vitra.com/en-us/about-vitra/press) returned HTTP 403). The only
official identity source opened is the [Lineto bespoke page](https://lineto.com/bespoke/vitra) for the typeface.
What follows is what the live DOM shows:

- **Token architecture (observed)**: no CSS custom properties on `:root` (zero root variables measured); colours
  appear as literal values in hashed CSS-in-JS classes. The only `var(--…)` tokens in the stylesheets belong to the
  embedded Adyen payment SDK (`--adyen-sdk-color-outline-primary-active` etc.), not Vitra.
- **Component model (observed)**: components carry a `vds_` prefix with hashed suffixes and BEM-like names —
  `vds_bbnesj1__base`, `vds_solozpb__secondary`, `vds_tsvq7ep__tabsListItem` — alongside a newer `v2_` set
  (`v2_b1ixcnix__button`, `v2_m1lktrl1__marquee_content`). The ruled CTA is the `__secondary` variant.
- **Theming**: one light theme; components switch between dark and white variants depending on the background
  (e.g. `headline__black` / `headline__white`, `content__black` / `content__white` class pairs).
- **Type & spacing**: two font builds (vitraFutura, vitraFuturaV2); navigation line-height 32.3px (1.9 × 17px)
  and fractional spacing values (8.075px, 16.15px, 24.225px).
- **Accessibility (observed)**: a "Skip to content" link, an accessibility contact disclaimer in the footer for
  screen-reader users, and hover states that change colour rather than relying on underline only.
- **Delivery**: no npm package, Figma kit or versioned release found publicly.

## Do's and Don'ts

### Do

- Keep the canvas white and text `#333333` / `#101010`.
- Use regular weight 400 for big headings (50px hero, 40px section titles).
- Use ruled CTAs (1px top + bottom rule, no fill) for editorial links; `#333333` 5px buttons only for commerce.
- Use `#d43e42` only for hover and selected states.
- Let photographs run full-bleed in the hero and 0px-cornered in grids.
- Centre captions below images with a muted `#767676` subtitle.

### Don't

- Don't fill CTAs with red or round them into pills.
- Don't bold large headlines.
- Don't add drop shadows to cards or photos; reserve shadow for the floating configurator.
- Don't underline navigation on hover — change colour to `#d43e42`.
- Don't use uppercase for headings.
- Don't introduce coloured backgrounds; light greys (`#f7f7f7`) are the only surfaces.

## Responsive Behavior

### Breakpoints

Measured at 1280px and 390px. At 390px: hero title 50px → 30px/36px; section titles 40px → 32px/35.2px; product
title 32px → 26px/31.2px; product paragraphs 20px/30px → 17px/25.5px; the default UI size stays 17px.

### Touch Targets

Buy buttons are 42px tall; ruled CTAs 48px; the mobile "BACK TO TOP" bar is 48px tall and full width (351px).

### Collapsing Strategy

At 390px the back-to-top control becomes a full-width `#333333` bar labelled "BACK TO TOP" (17px/500). Other
layout changes at 390px were not measured.

### Image Behavior

Photographs keep 0px corners and fill their containers; the hero is full-bleed at both widths.

## Iteration Guide

1. White canvas, `#333333` text, Futura-like face at 17px/500 for UI.
2. Build the header: wordmark left, 17px nav, small grey utility links, icons right; hover `#d43e42`.
3. Full-bleed hero photo with centred 50px/400 white title, 22px subtitle, white ruled CTA.
4. 2-column teaser grid with centred 16px/500 captions and `#767676` subtitles.
5. Centred 40px/400 section titles with 20px/30px intro copy and a dark ruled CTA.
6. Commerce: `#333333` 5px-radius buttons, 42px tall, hover `#101010`.
7. Finish with the `#f7f7f7` newsletter band and 13px legal footer.
