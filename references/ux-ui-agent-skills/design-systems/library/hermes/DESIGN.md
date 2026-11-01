---
version: alpha
name: Hermès
category: "Luxury"
description: "Hermès' US online store (hermes.com/us/en) is a quiet cream-paper system: #fcf7f1 canvas with #fffcf7 media wells and a white footer, pure #000000 ink, three free typefaces in strict roles — EBGaramond italic for editorial (34px/440 titles, 20px paragraphs), Overpass Mono uppercase for labels and buttons (12px/300 category labels, 12px/500 buttons), Manrope for UI (12px/400, 10px/700 tracked nav) — 0px photo corners and a single 4px-radius outlined black button."

colors:
  primary: "#000000"
  canvas: "#fcf7f1"
  ink: "#000000"
  ink-muted: "#696969"
  surface: "#fffcf7"
  surface-white: "#ffffff"
  header-scrim: "#fcf7f1ba"
  overlay: "#ffffffe6"
  on-media: "#ffffff"
  consent-ink: "#2c2d2c"
  consent-button: "#444444"

typography:
  editorial-title:
    fontFamily: "EBGaramond, \"Bell MT\", \"Times New Roman\", sans-serif"
    fontSize: 34px
    fontWeight: 440
    fontStyle: italic
  editorial-title-mobile:
    fontFamily: "EBGaramond, \"Bell MT\", \"Times New Roman\", sans-serif"
    fontSize: 34px
    fontWeight: 440
    fontStyle: italic
  editorial-body:
    fontFamily: "EBGaramond, \"Bell MT\", \"Times New Roman\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    fontStyle: italic
  sr-heading:
    fontFamily: "\"Overpass Mono\", \"Gill Sans MT\", calibri, sans-serif"
    fontSize: 24px
    fontWeight: 300
    lineHeight: 34px
    textTransform: uppercase
  column-header:
    fontFamily: "\"Overpass Mono\", \"Gill Sans MT\", calibri, sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 22px
    textTransform: uppercase
  category-label:
    fontFamily: "\"Overpass Mono\", \"Gill Sans MT\", calibri, sans-serif"
    fontSize: 12px
    fontWeight: 300
    lineHeight: 18px
    textTransform: uppercase
  button-label:
    fontFamily: "\"Overpass Mono\", \"Gill Sans MT\", calibri, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
    textTransform: uppercase
  media-cta:
    fontFamily: "\"Overpass Mono\", \"Gill Sans MT\", calibri, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 1px
    textTransform: uppercase
  paragraph-medium:
    fontFamily: "Manrope, Roboto, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
  body:
    fontFamily: "Manrope, Roboto, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20px
  footer-link:
    fontFamily: "Manrope, Roboto, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  nav-category:
    fontFamily: "Manrope, Roboto, sans-serif"
    fontSize: 10px
    fontWeight: 700
    lineHeight: 14px
    letterSpacing: 1px
    textTransform: uppercase

rounded:
  none: 0px
  dialog: 3px
  button: 4px
  consent-button: 8px
  circle: 50%

spacing:
  xs: 8px
  sm: 10px
  md: 12px
  base: 16px
  lg: 20px
  xl: 24px
  xxl: 40px
  section: 72px
  section-lg: 128px

components:
  button-secondary:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    border: "1px solid #000000"
    typography: "{typography.button-label}"
    rounded: "{rounded.button}"
    padding: 11px 16px
    height: 40px
  media-cta:
    backgroundColor: transparent
    textColor: "{colors.on-media}"
    typography: "{typography.media-cta}"
    rounded: "{rounded.none}"
  header:
    backgroundColor: "{colors.header-scrim}"
    height: 110px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav-category}"
  category-tile:
    backgroundColor: "{colors.surface}"
    rounded: "{rounded.none}"
    size: 278px
    labelTypography: "{typography.category-label}"
    labelColor: "{colors.ink}"
  media-icon-button:
    backgroundColor: "#ffffffcc"
    rounded: "{rounded.circle}"
    size: 24px
  carousel-counter:
    textColor: "{colors.ink}"
    typography: "{typography.paragraph-medium}"
  footer:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.footer-link}"
  footer-column-header:
    textColor: "{colors.ink}"
    typography: "{typography.column-header}"
  consent-button:
    backgroundColor: "{colors.consent-button}"
    textColor: "{colors.on-media}"
    rounded: "{rounded.consent-button}"
    padding: 10px 23px
    height: 44px
---

## Overview

Hermès' US online store reads like a printed lookbook on cream paper. The page colour is a warm off-white
`#fcf7f1`, not white; images sit in slightly lighter `#fffcf7` wells; the footer interior turns pure
`#ffffff`. Text is pure black `#000000`. There is no brand orange anywhere in the interface — the
homepage carries colour only through photography and video.

What the capture and the DOM show, top to bottom:

- A 110px header, translucent canvas colour `#fcf7f1ba`, with the centred engraved **Hermès Paris** wordmark and
  carriage emblem, and small 10px/700 uppercase tracked category links ("Women", "Men", "Leather goods").
- A full-bleed 1280×720 runway video (`h-video` element) with a white EBGaramond italic 34px/440 title
  ("Women’s spring-summer 2027 runway show") and a tiny white Overpass Mono CTA "Relive the show", plus two
  24px round translucent-white mute/play buttons.
- A 4×2 grid of 278×278 product-category images (ready to wear, shoes, fine jewelry, small leather goods,
  belts, bags, fashion jewelry, silk), each object photographed on a pale neutral ground, captioned
  underneath with a 12px/300 uppercase monospace label ("WOMEN'S READY TO WEAR").
- A centred italic EBGaramond 20px paragraph — prose, not marketing: "The scene unfolds outdoors, at the height
  of summer. A recurring motif, the fan sets the air in motion."
- A horizontal runway carousel of portrait looks (348×464 images) with a 14px "01 / 62" counter and chevrons.
- More editorial paragraphs and pairs of large portrait images (596×795), then a 1232×693 landscape image.
- A 740px footer: `#fffcf7` outer, white inner, monospace uppercase column headers ("SERVICES", "ORDERS"),
  12px grey `#696969` links, and one outlined black "Subscribe to the newsletter" button.

Note on the capture: its top 600px shows an anti-bot interstitial ("Access is temporarily restricted") laid over
the page. It is not part of the design; the DOM beneath it was measured normally.

The voice is literary and restrained. Labels are uppercase monospace like museum captions; storytelling is
italic serif; utility text is a small neutral sans. Nothing is bold except the tiny navigation labels.

## Colors

### Brand & Accent

- **Primary `#000000`** — the only action colour: border and label of the outlined button, all link text.
  The homepage has no filled primary button.
- No accent colour is used in the interface.

### Surface

- **Canvas `#fcf7f1`** — the `body` background, warm cream.
- **Surface `#fffcf7`** — image wells behind every product photo, the hero video element and the footer
  outer band (largest background by area).
- **Surface white `#ffffff`** — inner footer panel.
- **Header scrim `#fcf7f1ba`** — the canvas colour at 0.73 alpha behind the header.
- **Overlay `#ffffffe6`** — white at 0.9 alpha behind modal layers.

### Text

- **Ink `#000000`** — headings on light ground, editorial paragraphs, labels, nav.
- **Muted `#696969`** — footer links and footer descriptions ("Monday to Saturday 10am - 9pm EST").
- **On media `#ffffff`** — titles and CTAs over video and photography.

### Third-party consent

The cookie dialog is a Didomi component (classes `didomi-*`): text `#2c2d2c`, buttons `#444444`. It is not
part of the Hermès interface and should not be used as a brand colour.

## Typography

### Font Family

The site declares its families as CSS custom properties:

- `--font-primary: "Manrope", "Roboto", sans-serif` — UI text (loaded 200–800 variable).
- `--font-secondary: "Overpass Mono", "Gill Sans MT", calibri, sans-serif` — labels, buttons, column headers
  (loaded 300–700).
- `--font-edito: "EBGaramond", "Bell MT", Times New Roman, sans-serif` — editorial titles and prose, served
  in italic (loaded 400–800 italic).

Further declared variables reference typefaces not used in the measured homepage text:
`--font-jungle-love`, `--font-akkurat`, `--font-filosofia`, `--font-mors-a-jouet`, `--font-brides-de-gala`.

All three active families are open-source Google Fonts (OFL): Manrope by Mikhail Sharanda
([metadata](https://raw.githubusercontent.com/google/fonts/main/ofl/manrope/METADATA.pb)), Overpass Mono by
Delve Withrington, Dave Bailey and Thomas Jockin
([metadata](https://raw.githubusercontent.com/google/fonts/main/ofl/overpassmono/METADATA.pb)), EB Garamond by
Georg Duffner and Octavio Pardo ([metadata](https://raw.githubusercontent.com/google/fonts/main/ofl/ebgaramond/METADATA.pb)).

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Case | Use |
|---|---|---|---|---|---|---|---|
| editorial-title | EBGaramond italic | 34px | 440 | normal | — | sentence | Hero title over video |
| editorial-body | EBGaramond italic | 20px | 400 | normal | — | sentence | Centred editorial prose |
| sr-heading | Overpass Mono | 24px | 300 | 34px | — | upper | Visually hidden page h1 |
| column-header | Overpass Mono | 14px | 300 | 22px | — | upper | Footer column headers |
| category-label | Overpass Mono | 12px | 300 | 18px | — | upper | Labels under category images |
| button-label | Overpass Mono | 12px | 500 | 16px | — | upper | Outlined button |
| media-cta | Overpass Mono | 11px | 400 | 16px | 1px | upper | "Relive the show" |
| paragraph-medium | Manrope | 14px | 400 | 22px | — | sentence | Carousel counter "01 / 62" |
| body | Manrope | 12px | 400 | 20px | — | sentence | Notices, account labels, FAQs |
| footer-link | Manrope | 12px | 400 | 16px | — | sentence | Footer links |
| nav-category | Manrope | 10px | 700 | 14px | 1px | upper | Header category links |

Mobile (390px): the editorial title stays 34px/440 (wrapping to two lines, 88px tall); editorial body stays 20px;
UI text stays 12px.

The site's own type-size tokens (from `:root`): `--font-size-body-xs: .5rem`, `--font-size-body-s: .625rem`
(10px), `--font-size-body-default: .6875rem` (11px), `--font-size-body-m: .75rem` (12px),
`--font-size-body-l: .875rem` (14px), `--font-size-body-xl: 1rem`, `--font-size-heading-xs: 1.125rem`,
`--font-size-heading-s: 1.25rem`, `--font-size-heading-default: 1.375rem`, `--font-size-heading-m: 1.5rem`,
`--font-size-heading-l: 1.625rem`, `--font-size-heading-xl: 1.875rem` (30px),
`--font-size-heading-xxl: 2.125rem` (34px).

### Principles

- **Three voices, never mixed**: serif italic tells stories, monospace uppercase names things, sans serves.
- Editorial type is always italic and centred.
- Labels are light (300) monospace uppercase; weight 500 only on the button label; 700 only on 10px nav.
- Small sizes dominate: 12px is by far the most used size.
- Tracking 1px appears only on 10px and 11px uppercase labels.

### Note on Font Substitutes

No substitute is needed: Manrope, Overpass Mono and EB Garamond are free (OFL) on Google Fonts. Load EB Garamond
italic in the 400–800 range so the 440 weight renders as measured.

## Layout

### Spacing System

Measured gaps: 16px, 20px, 40px. Measured paddings: 8px, 10px, 12px, 15px, 16px, 20px, 24px, 72px, 128px.
The button pads `11px 16px`. The site defines `--header-menu-top: 58px`.

### Grid & Container

- Category grid: 4 columns of 278px square images; rows start at 784px and 1112px (328px pitch including the
  label line).
- Runway carousel: 348×464 portrait cards bleeding off both edges.
- Editorial image pairs: two 596×795 portraits; a 1232×693 landscape image (24px side margins at 1280px).
- Editorial paragraphs are centred in a narrow measure (about 655px wide).

### Whitespace Philosophy

Generous bands of empty cream between blocks; paragraphs float alone in the middle of the page. The grid is
dense, the gaps between sections are not.

## Elevation & Depth

The Hermès interface itself is flat: no box-shadow was measured on any Hermès element. Depth comes from
the translucent header (`#fcf7f1ba`) over moving video and from photography.

The only measured shadow belongs to the third-party consent dialog: `rgba(0, 0, 0, 0.18) 0px 12px 28px 0px`.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| none | 0px | All photography, video, tiles, header, footer |
| dialog | 3px | Consent dialog (third-party) |
| button | 4px | Outlined button (`border-radius-default` class) |
| consent-button | 8px | Consent buttons (third-party) |
| circle | 50% | 24px mute / play icon buttons on video |

### Photography Geometry

Squares (278×278) for category objects, 3:4 portraits for runway looks and editorial pairs, a wide landscape
for the closing image. Objects are centred on pale neutral grounds with no props.

## Components

### Buttons

- **Outlined button** (class `button-secondary`): transparent, 1px solid `#000000` border, `#000000` label in
  Overpass Mono 12px/500/16px uppercase, 4px radius, `11px 16px` padding, 40px tall (200px wide in the footer).
  No hover change was measured.
- **Media CTA** ("Relive the show"): plain white text link over video, Overpass Mono 11px/400/16px, 1px tracking,
  uppercase, no border or fill. No hover change was measured.
- **Media icon buttons**: 24px circles, white at 0.8 alpha, on the hero video.
- No filled primary button exists on the homepage.

### Cards & Containers

- **Category tile**: 278×278 image in a `#fffcf7` well, 0px radius, label under it in Overpass Mono 12px/300/18px
  uppercase `#000000`.
- **Runway card**: 348×464 portrait image, no caption, inside a horizontally scrolling carousel with a
  "01 / 62" counter (Manrope 14px/400/22px) and chevron arrows.

### Inputs & Forms

The homepage measured one search input (Manrope 12px/400, no border, no background, 18px tall). No form fields
were measured beyond it; inputs are not specified further here.

### Navigation

- **Header**: 110px tall, `#fcf7f1ba` background, centred wordmark.
- **Category links**: Manrope 10px/700/14px, 1px tracking, uppercase, `#000000`.
- **Utility labels** ("Account", "FAQs"): Manrope 12px/400/20px `#000000`.

### Footer

`#fffcf7` outer band, `#ffffff` inner panel (618px of 740px). Column headers Overpass Mono 14px/300/22px
uppercase black; links Manrope 12px/400/16px `#696969`; the outlined newsletter button.

### Signature Components

- **Captioned object grid** — square photos with monospace uppercase captions, like a museum catalogue.
- **Italic interlude** — a single centred EBGaramond italic paragraph between visual blocks.
- **Runway reel** — an edge-to-edge carousel of looks with a numeric counter.

## Design System Architecture

Hermès publishes **no public design system**, brand portal, token package or type guideline. Searches
("Hermès design system digital brand guidelines typography", "Hermès press kit logo download official",
"hermes.com github design tokens npm", brand portal / media kit) returned only third-party aggregators, which
were ignored. What follows is the de-facto system measurable on hermes.com.

### Token architecture

The site ships CSS custom properties on `:root`, in one primitive tier:

- Families: `--font-primary`, `--font-secondary`, `--font-edito` (plus bespoke-family variables
  `--font-akkurat`, `--font-filosofia`, `--font-jungle-love`, `--font-mors-a-jouet`, `--font-brides-de-gala`).
- Sizes: `--font-size-body-{xs,s,default,m,l,xl}` and `--font-size-heading-{xs,s,default,m,l,xl,xxl}`, in rem.
- Weights: `--font-weight-100` … `--font-weight-800`.
- Layout: `--header-menu-top: 58px`.

No colour custom properties were found in `:root`; colours are set directly in component CSS.

### Theming

No dark mode, high-contrast mode or theme switch was observed.

### Type & spacing systems

Type sizes follow the rem tokens above (10 / 11 / 12 / 14px for body, 18–34px for headings). Spacing values
are not tokenised; measured values are listed under Layout.

### Component model

Utility-style composable classes on components, e.g. the button carries
`border-radius-default button-base button-secondary height-normal label-medium`; text uses role classes such as
`heading-4`, `heading-5`, `paragraph-medium`, `column-header`, `edito-subtitle`. Elements carry Angular's
`ng-star-inserted` class, and the hero video is a custom element `h-video`.

### Accessibility

The page provides skip links ("Go to main content", "Go to product browsing", "Accessibility") and a visually
hidden h1. No documented contrast or focus policy was found.

### Delivery

No npm package, Figma kit or versioning is public.

## Do's and Don'ts

### Do

- Use cream `#fcf7f1` as the page and `#fffcf7` behind images.
- Set labels in Overpass Mono uppercase, weight 300 (12px under images, 14px for column heads).
- Set stories in EBGaramond italic, centred: 34px/440 titles, 20px paragraphs.
- Keep utility text in Manrope 12px; navigation in Manrope 10px/700 with 1px tracking.
- Keep photography square-cornered and objects isolated on neutral grounds.
- Use the outlined black 4px-radius button as the only button style.

### Don't

- Don't add Hermès orange to the UI; the homepage uses none.
- Don't use pure white as the page background.
- Don't bold headlines; editorial weight is 440 and labels are 300.
- Don't round images or add shadows to cards.
- Don't use the Didomi consent styles (`#444444` 8px buttons) as Hermès components.

## Responsive Behavior

### Breakpoints

Measured at 1280px and 390px.

### Mobile (390px)

- Header shrinks to 50px tall.
- Editorial title keeps 34px/440 and wraps to two lines (88px tall, 358px wide).
- Editorial body keeps 20px in a 250px-wide column.
- Category labels and UI text keep their 12px sizes.

### Touch Targets

The outlined button is 40px tall; media icon buttons are 24px.

### Image Behavior

Images fill their containers edge to edge; the hero video is full-bleed at all widths.

## Iteration Guide

1. Start with `#fcf7f1` canvas and `#000000` text; add `#fffcf7` wells behind every image.
2. Load Manrope, Overpass Mono and EB Garamond italic (Google Fonts).
3. Build the header: 110px, translucent `#fcf7f1ba`, centred logo, 10px/700 uppercase tracked links.
4. Hero: full-bleed video, white EBGaramond italic 34px/440 title, white 11px Overpass Mono CTA, 1px tracking.
5. Category grid: 4 × 278px squares, captions in Overpass Mono 12px/300/18px uppercase.
6. Interlude: centred EBGaramond italic 20px paragraph.
7. Carousel of 348×464 portraits with a Manrope 14px "01 / 62" counter.
8. Footer: `#fffcf7` band, white inner panel, Overpass Mono 14px/300 headers, `#696969` 12px links,
   outlined 4px-radius black button with `11px 16px` padding.
9. Check: no orange, no shadows, no rounded images, no bold headlines.
