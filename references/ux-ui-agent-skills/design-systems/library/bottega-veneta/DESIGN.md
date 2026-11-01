---
version: alpha
name: Bottega Veneta
category: "Luxury"
description: "Bottega Veneta's US store (bottegaveneta.com/en-us) is a white, square-cornered light table for photography: one proprietary face, bottegaveneta-regular-webfont, at weight 400 and mostly 14px/22px for everything from headings to CTAs, #000000 ink with #6d7882 slate secondary text, white outlined CTAs with 1px black borders and 8px 25px 5px padding, black #000000 primary buttons that hover to #31383e, a 36px black promo strip and #eeeff1 product image wells."

colors:
  primary: "#000000"
  primary-hover: "#31383e"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#000000"
  ink-muted: "#6d7882"
  ink-soft: "#212121"
  product-well: "#eeeff1"
  divider: "#ececec"
  video: "#151b17"
  overlay: "#00000033"

typography:
  hero-label:
    fontFamily: "bottegaveneta-regular-webfont, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
  hero-label-mobile:
    fontFamily: "bottegaveneta-regular-webfont, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
  section-title:
    fontFamily: "bottegaveneta-regular-webfont, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
    textTransform: uppercase
  body:
    fontFamily: "bottegaveneta-regular-webfont, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
  product-name:
    fontFamily: "bottegaveneta-regular-webfont, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  price:
    fontFamily: "bottegaveneta-regular-webfont, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18px
  load-more:
    fontFamily: "bottegaveneta-regular-webfont, sans-serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 22px
    letterSpacing: 0.25px
  small:
    fontFamily: "bottegaveneta-regular-webfont, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  utility-caps:
    fontFamily: "bottegaveneta-regular-webfont, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    textTransform: uppercase
  small-bold:
    fontFamily: "bottegaveneta-bold-webfont, sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 18px
  tag:
    fontFamily: "bottegaveneta-regular-webfont, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 19px
  swatch-count:
    fontFamily: "bottegaveneta-regular-webfont, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 14px
  promo-strip:
    fontFamily: "bottegaveneta-regular-webfont, sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 12px

rounded:
  none: 0px

spacing:
  xxs: 2px
  xs: 4px
  sm: 8px
  md: 12px
  base: 16px
  lg: 24px
  xl: 32px
  xxl: 50px
  panel: 60px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    border: "1px solid #000000"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 6px 28px 5px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    border: "1px solid #31383e"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    border: "1px solid #000000"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 6px 28px 5px
    height: 40px
  button-secondary-hover:
    textColor: "{colors.primary-hover}"
    border: "1px solid #31383e"
  hero-cta:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    border: "1px solid #000000"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 8px 25px 5px
    height: 40px
  filter-button:
    rounded: "{rounded.none}"
    padding: 8px 12px
    height: 40px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 4px 0px
    height: 30px
  input-label:
    textColor: "{colors.ink-muted}"
    typography: "{typography.body}"
  product-card:
    imageBackground: "{colors.product-well}"
    imageSize: 300px x 353px
    rounded: "{rounded.none}"
    nameTypography: "{typography.product-name}"
    priceTypography: "{typography.price}"
    tagTypography: "{typography.tag}"
    tagColor: "{colors.ink-muted}"
  promo-strip:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.promo-strip}"
    padding: 12px 16px
    height: 36px
  side-panel:
    backgroundColor: "{colors.canvas}"
    width: 640px
    headPadding: 32px 60px
    titleTypography: "{typography.section-title}"
  nav-utility:
    textColor: "{colors.ink}"
    typography: "{typography.utility-caps}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 0px 24px
    titleTypography: "{typography.section-title}"
  footer-copyright:
    textColor: "{colors.ink-muted}"
    typography: "{typography.small}"
---

## Overview

Bottega Veneta's US store behaves like a white gallery wall with photographs pinned to it. The interface
is almost invisible: one typeface, one weight, one size for nearly everything, black on white, no radius, no
shadow. Every bit of colour and texture comes from the campaign photography and the intrecciato leather in it.

What the capture shows, top to bottom:

- A **36px black promo strip** with a single centred 10px white line ("Discover Corso, a new Intrecciato
  leather tote").
- A header with an uppercase 12px "MENU" button at left and the serif **BOTTEGA VENETA** wordmark centred
  (an SVG; the h1 that wraps it has a 0px font size).
- A **full-width hero image** (a hand holding a black woven bag) with a tiny white "WINTER 2026" label and a
  white outlined CTA "WOMEN'S NEW BAGS".
- A **two-up row** of square-ish images (a woven tote, a loafer), each with "WINTER 2026" and a white outlined CTA
  ("MEN'S NEW BAGS", "MEN'S NEW SHOES").
- A **full-bleed 1280×720 campaign video** of the runway with a "DISCOVER MORE" CTA.
- "BESPOKE SERVICES" as a 14px uppercase heading over a three-up row of service images (appointment,
  personalisation).
- A white footer of accordions ("STORE LOCATOR", "SUBSCRIBE TO OUR NEWSLETTER", "NEED HELP?"), a newsletter
  e-mail field, and a 12px slate copyright line.

In the capture the right half is covered by the site's own **"Select your location" side panel** (640px,
white): a geo-detected market prompt with a black "Go to Thailand" button and an outlined "Continue on United
States" button. These are the site's real primary and secondary buttons, and the only buttons on the
homepage with measured hover states.

Microcopy is terse and literal ("WINTER 2026", "MEN'S NEW SHOES", "DISCOVER MORE"). Headings are not bigger
than body text — hierarchy is carried by case, position and whitespace.

## Colors

### Brand & Accent

- **Primary `#000000`** — fill of primary buttons (location panel, newsletter submit, filter apply), the promo
  strip, all ink.
- **Primary hover `#31383e`** — a slate graphite that replaces black on hover: background + border of the
  primary button, text + border of the secondary button.
- No chromatic accent colour is used in the interface.

### Surface

- **Canvas `#ffffff`** — page, header, side panels, footer, outlined CTAs.
- **Product well `#eeeff1`** — light grey behind each product image on listing pages.
- **Video `#151b17`** — background of the campaign video element before frames load.
- **Overlay `#00000033`** — black at 0.2 alpha behind open filter panels and drawers.
- **Divider `#ececec`** — top border of the filter-panel footer.

### Text

- **Ink `#000000`** — all primary text.
- **Muted `#6d7882`** — product tags ("New", "Pre-order", "Find in store"), the e-mail label, the copyright.
- **Soft `#212121`** — the country name in the footer locale selector.
- **On primary `#ffffff`** — text on black and over photography.

## Typography

### Font Family

The site sets three CSS variables: `--bv-font-primary: "bottegaveneta-regular-webfont"`,
`--bv-font-semibold: "bottegaveneta-semibold-webfont"`, `--bv-font-bold: "bottegaveneta-bold-webfont"`.
Stylesheets also declare `bottegaveneta-regular-perso-webfont` and `masked-text-webfont` (not seen in measured
text). Measured text is 98% regular weight 400; bold 700 appears only on the current breadcrumb item.

The typeface's origin and foundry are not published; searches found only third-party speculation (ignored).

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Case | Use |
|---|---|---|---|---|---|---|
| hero-label | 14px | 400 | 22px | — | as typed (uppercase copy) | "WINTER 2026" over imagery |
| section-title | 14px | 400 | 22px | — | uppercase | "Bespoke Services", footer accordions, panel titles |
| body | 14px | 400 | 22px | — | sentence | CTAs, links, inputs, labels |
| product-name | 14px | 400 | 20px | — | sentence | "Baby Barbara Tote" |
| price | 14px | 400 | 18px | — | — | "$ 4,600" |
| load-more | 17px | 400 | 22px | 0.25px | sentence | Listing "Loading: Manual / Automatic" |
| small | 12px | 400 | 18px | — | sentence | Newsletter copy, copyright |
| utility-caps | 12px | 400 | 18px | — | uppercase | MENU, SEARCH, LOGIN |
| small-bold | 12px | 700 | 18px | — | sentence | Current breadcrumb (bold webfont) |
| tag | 11px | 400 | 19px | — | sentence | "New", "Add initials" |
| swatch-count | 11px | 400 | 14px | — | — | "+4" colours |
| promo-strip | 10px | 400 | 12px | — | sentence | Black promo strip |

Mobile (390px): the hero label stays 14px/400/22px; body sizes stay 14px and 12px.

### Principles

- **One size does it all.** 14px/22px is headline, button and body. Never scale headings up.
- **Case is the hierarchy.** Section titles and utilities are uppercase; content is sentence case.
- **One weight.** 400 everywhere; bold only for a breadcrumb's current item.
- **No tracking** except 0.25px on the 17px listing toggle.

### Note on Font Substitutes

bottegaveneta-regular-webfont is proprietary and not distributed. No official substitute is named. When it
is unavailable, use a neutral grotesque at regular weight and keep the measured sizes and line heights;
do not substitute a display face, because the site never uses one for text.

## Layout

### Spacing System

Measured gaps: 2, 4, 8, 12, 16, 30, 50px. Measured paddings: 6, 8, 12, 16, 20, 24, 28, 32, 60px.
Buttons pad `6px 28px 5px` (primary/secondary) and `8px 25px 5px` (hero CTAs) — slightly more space above the
label than below. Side panels pad their head `32px 60px`; footer and listing headers pad `0px 24px`.

### Grid & Container

- Hero: full width, edge to edge.
- Second row: two equal images with a narrow gutter.
- Video: full width, 1280×720.
- Bespoke services: three equal images in a centred block.
- Product listing: four columns of 300×353 image wells at 1280px.

### Whitespace Philosophy

The page is dense with images and almost empty of text. Labels sit inside the photographs near the bottom edge;
large white space appears only around the services heading and in the footer.

## Elevation & Depth

Flat. No box-shadow was measured on any Bottega Veneta element. Layering is done with
the `#00000033` overlay behind side panels and filters, and with full-height white panels sliding in from the
right. (The OneTrust cookie banner carries its own shadow; it is third-party.)

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| none | 0px | Every button, input, image, swatch, panel |

Colour swatches in the filter panel are 24×24 squares, not circles. The footer accordion wrapper declares a 7px
radius but has no background or border, so it renders square.

### Photography Geometry

Full-bleed hero, two-up near-square tiles, 16:9 video, and 300×353 portrait product wells. Photography is warm,
tactile and close-cropped on leather texture; product shots sit on the flat `#eeeff1` grey.

## Components

### Buttons

- **Primary** (`c-button--primary`): `#000000` fill, white 14px/400/22px label, 1px `#000000` border, 0px radius,
  `6px 28px 5px` padding, 40px tall, often full width of its panel. Hover: fill and border `#31383e`.
- **Secondary** (`c-button--secondary`): white fill, black label, 1px `#000000` border, same padding and height.
  Hover: label and border `#31383e`.
- **Hero CTA** (`c-hometop__cta`): white fill, black label, 1px `#000000` border, `8px 25px 5px`, 40px tall,
  sitting on photography. No hover change was measured.
- **Filter apply / reset**: black or white, 1px black border, `8px 12px`, 288×40.

### Cards & Containers

- **Product card**: 300×353 `#eeeff1` image well (image carousel), then name 14px/400/20px, price 14px/400/18px,
  a slate 11px/400/19px tag ("New"), and colour swatches with a "+4" 11px/400/14px count. No border, no radius.
- **Side panel** (`c-popin`): 640px white drawer from the right, head padding `32px 60px`, uppercase 14px title.

### Inputs & Forms

- **E-mail field**: white, 14px/400/22px black text, `4px 0px` padding, 30px tall, 0px radius; label "E-mail*" in
  14px `#6d7882`. No border is set on the input element itself.
- **Select** (country): white, `4px 18px 4px 0px` padding, 31px tall.

### Navigation

- **Promo strip**: `#000000`, 36px tall, `12px 16px` padding, 10px/400/12px white text.
- **Header**: white on listing pages (52px); MENU / SEARCH / LOGIN in 12px/400/18px uppercase.
- **Breadcrumbs**: 12px/18px, current item in the bold webfont (700).

### Footer

White, `0px 24px` padding, accordion titles 14px/400/22px uppercase, links 14px/22px, copyright 12px/18px
`#6d7882` ("© 2026 Bottega Veneta").

### Signature Components

- **Label-in-image**: a tiny uppercase label plus a white outlined CTA placed low and centred on a photograph.
- **Full-height side panels** for location, newsletter, appointment and cart.

## Design System Architecture

Bottega Veneta publishes **no public design system**, brand guideline, token package or typeface statement.
Searches ("Bottega Veneta brand guidelines design system digital press kit", "bottegaveneta.com design tokens
github npm", "Bottega Veneta logo typeface new wordmark 2025 custom font designed by", "Bottega Veneta official
typeface 'bottegaveneta-regular-webfont' foundry") found only third-party sites. An agency case study
([Code and Theory](https://codeandtheory.com/things-we-make/bottega-veneta)) covers earlier projects and says
nothing about the current system. What follows is the de-facto system measurable on the site.

### Token architecture

`:root` exposes only a handful of variables: font families (`--bv-font-primary`, `--bv-font-semibold`,
`--bv-font-bold`) and banner layout values (`--festiveBannerHeight: 36px`, `--festiveBannerLayoutHeight: 36px`,
`--cookieBannerHeight`, `--topBannersHeight`). Colours and sizes are not tokenised as custom properties.

### Theming

No dark mode, density mode or theme switch was observed. The header has a `l-header--bgwhite` modifier for its
white state.

### Type & spacing systems

A single typeface, 400 weight, with sizes 10 / 11 / 12 / 14 / 17px. Spacing values are listed under Layout; no
base unit is declared.

### Component model

BEM-style class names with prefixes: `c-` for components (`c-button`, `c-button--primary`,
`c-button--secondary`, `c-button--full`, `c-hometop__cta`, `c-popin--countryselector`, `c-product__name`,
`c-price__value--current`, `c-filters__apply`, `c-festivebanner`), `l-` for layout (`l-header`, `l-footer__wrapper`,
`l-searchresults__header`), and `u-` utilities with responsive suffixes (`u-hidden@md`, `u-hidden@lg`).
Video uses Video.js (`video-js`), cookies use OneTrust.

### Accessibility

A "Skip to main content" link is present. No published contrast or focus policy was found.

### Delivery

No npm package, Figma kit or versioning is public.

## Do's and Don'ts

### Do

- Use white `#ffffff` and black `#000000` only for the interface.
- Set everything in bottegaveneta-regular-webfont 400, mostly 14px/22px.
- Signal hierarchy with uppercase, not size or weight.
- Use 1px black borders on white CTAs; black fill for the one primary action in a panel.
- Hover to `#31383e`, never to grey or opacity.
- Keep all corners at 0px, including swatches.
- Put product shots on `#eeeff1`.

### Don't

- Don't enlarge headings — the site's headings are 14px.
- Don't add a brand green or any accent colour to the UI.
- Don't round buttons, inputs, swatches or images.
- Don't add shadows to cards or panels.
- Don't use bold for emphasis outside breadcrumbs.

## Responsive Behavior

### Breakpoints

Measured at 1280px and 390px. Utility classes `u-hidden@md` / `u-hidden@lg` switch elements by breakpoint.

### Mobile (390px)

- The header grows to 108px including the promo strip.
- The primary button becomes full width (358px), `6px 28px 5px`, 40px tall.
- Hero label stays 14px/400/22px; text sizes stay 14px, 12px, 10px.
- Newsletter copy column narrows to 362px.

### Touch Targets

All buttons and CTAs are 40px tall; filter buttons 40px.

### Image Behavior

Images and video fill their columns edge to edge; listing images are carousels inside fixed wells.

## Iteration Guide

1. White canvas, black ink, one typeface at 400.
2. Add the 36px black promo strip with 10px white text.
3. Header: centred wordmark, uppercase 12px MENU / SEARCH / LOGIN.
4. Hero: full-bleed photo, white 14px uppercase label and a white outlined CTA (`8px 25px 5px`, 40px).
5. Two-up and full-bleed video rows with the same label + CTA pattern.
6. Section titles: 14px uppercase — no larger.
7. Product grid: 300×353 `#eeeff1` wells, 14px name and price, 11px slate tags.
8. Panels: 640px white drawers, `32px 60px` head, black primary + outlined secondary buttons (`6px 28px 5px`).
9. Hover: black → `#31383e`.
10. Check: no radius, no shadow, no accent colour, no big type.
