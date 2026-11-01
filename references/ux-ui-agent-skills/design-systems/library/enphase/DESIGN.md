---
version: alpha
name: Enphase
category: "Energy & Climate"
description: "Enphase Energy's web system: warm off-white #faf6ef pages with white #ffffff panels and black #000000 header and media bands, Enphase orange #ea6100 (hover #ff8b49) reserved for the 'Get started' pill, black and white pill buttons (36px and 56px radius) in enphase-visuelt-medium, enphase-visuelt-regular 400 headlines at 64px/-1.28px and 42px, 20px/32px body, and T-Star Pro uppercase 20px labels tracked 1.6px."

colors:
  primary: "#ea6100"
  primary-hover: "#ff8b49"
  on-primary: "#000000"
  canvas: "#faf6ef"
  white: "#ffffff"
  black: "#000000"
  menu-bar: "#131313"
  ink: "#000000"
  text-secondary: "#3c3c3c"
  nav-link: "#dcdcd6"
  hairline: "#dcdcd6"
  text-grey: "#6e6e73"
  text-muted-yxt: "#757575"
  heading-grey: "#696969"
  surface-warm-grey: "#f4f3f0"

typography:
  display:
    fontFamily: "enphase-visuelt-regular, sans-serif"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 76.8px
    letterSpacing: -1.28px
  display-mobile:
    fontFamily: "enphase-visuelt-regular, sans-serif"
    fontSize: 32px
    fontWeight: 400
  stat:
    fontFamily: "enphase-visuelt-regular, sans-serif"
    fontSize: 100px
    fontWeight: 400
    letterSpacing: -0.5px
  headline-56:
    fontFamily: "enphase-visuelt-regular, sans-serif"
    fontSize: 56px
    fontWeight: 400
    letterSpacing: -1.12px
  h3:
    fontFamily: "enphase-visuelt-regular, sans-serif"
    fontSize: 42px
    fontWeight: 400
    lineHeight: 54.6px
  h3-mobile:
    fontFamily: "enphase-visuelt-regular, sans-serif"
    fontSize: 26px
    fontWeight: 400
  title-24:
    fontFamily: "enphase-visuelt-regular, sans-serif"
    fontSize: 24px
    fontWeight: 400
    letterSpacing: 0.24px
  card-label:
    fontFamily: "\"T-Star Pro\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: 1.6px
  body-lg:
    fontFamily: "enphase-visuelt-regular, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
  body-lg-mobile:
    fontFamily: "enphase-visuelt-regular, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  subtitle:
    fontFamily: "enphase-visuelt-regular, sans-serif"
    fontSize: 18px
    fontWeight: 400
    letterSpacing: 0.18px
  body:
    fontFamily: "enphase-visuelt-regular, sans-serif"
    fontSize: 16px
    fontWeight: 400
  button:
    fontFamily: "enphase-visuelt-medium, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  button-sm:
    fontFamily: "enphase-visuelt-medium, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  nav-cta:
    fontFamily: "enphase-visuelt-regular, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 15.96px
  footnote:
    fontFamily: "enphase-visuelt-regular, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.6px
    letterSpacing: 0.12px

rounded:
  none: 0px
  card: 16px
  button-sm: 20px
  nav-cta: 24px
  button-dark: 36px
  button-light: 56px

spacing:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
  xl: 24px
  button-x: 32px
  section: 80px
  section-lg: 100px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav-cta}"
    rounded: "{rounded.nav-cta}"
    height: 34px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-inversed:
    backgroundColor: "{colors.white}"
    textColor: "{colors.black}"
    typography: "{typography.button}"
    rounded: "{rounded.button-light}"
    padding: 0px 20px
    height: 54px
  button-inversed-hover:
    textColor: "{colors.text-secondary}"
  button-dark:
    backgroundColor: "{colors.black}"
    textColor: "{colors.white}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.button-dark}"
    border: "1px solid #000000"
    padding: 12px 32px
    height: 44px
  button-outline:
    backgroundColor: transparent
    textColor: "{colors.text-secondary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.button-dark}"
    border: "1px solid #3c3c3c"
    padding: 12px 32px
    height: 44px
  button-outline-on-dark:
    backgroundColor: transparent
    textColor: "{colors.white}"
    typography: "{typography.button}"
    rounded: "{rounded.button-light}"
    border: "1px solid #ffffff"
    padding: 0px 20px
    height: 54px
  button-outline-on-dark-hover:
    backgroundColor: "{colors.white}"
    textColor: "{colors.text-secondary}"
  button-small-secondary:
    backgroundColor: transparent
    textColor: "{colors.text-secondary}"
    typography: "{typography.nav-cta}"
    rounded: "{rounded.button-sm}"
    border: "1px solid #3c3c3c"
    padding: 8px 16px
  media-card-hover:
    boxShadow: "rgba(0, 0, 0, 0.1) 0px 20px 36px -8px"
  nav:
    backgroundColor: "{colors.black}"
    textColor: "{colors.nav-link}"
    height: 54px
  nav-link-hover:
    textColor: "{colors.white}"
  product-menu-bar:
    backgroundColor: "{colors.menu-bar}"
    textColor: "{colors.white}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-secondary}"
    typography: "{typography.footnote}"
    border: "1px solid #dcdcd6"
---

## Overview

Enphase Energy sells microinverters, batteries, EV chargers and the app that ties them together. Its website
reads like a premium hardware brand: warm off-white pages, black chrome, large calm headlines in a single
regular weight, pill buttons, glossy product renders — and the brand orange used sparingly, on one button.

Measured pages:

- https://enphase.com — from the measuring location this redirected to the Thai locale
  (`https://enphase.com/th-th`), so the main extraction is the Thai homepage (same templates, Thai copy).
- https://enphase.com/homeowners (English) — measured as an extra page to get the English headline scale, the
  orange CTA and the black pill buttons.

What the captures show:

1. A 54px black header: the round Enphase "e" mark, audience links in `#dcdcd6` (Homeowners, Business owners,
   Data centers, Installers, Store, Support), an orange "Get started" pill with a chevron, cart and search icons.
2. On the homeowners page a second `#131313` bar of product shortcuts — line icons with 12px labels (Enphase App,
   Batteries, Microinverters, Thermostats, EV chargers, Portable energy, Find an installer, System estimator …).
3. Homeowners hero: on warm white, a single-line 64px headline "Complete home energy, powered by the sun" over a
   large isometric 3D house cut-away with small white pill callouts in uppercase mono-like labels ("ENPHASE IQ
   MICROINVERTERS", "ENPHASE IQ BATTERY"). The hero panel has rounded bottom corners (`0 0 24px 24px`).
4. Thai homepage: a full-bleed sunset rooftop video with a centred white 64px headline, an 18px subline, a white
   pill "Learn more" next to a white-outlined pill "Watch video"; then a black band with a dramatic close-up of an
   IQ8 microinverter and a centred 42px title + white pill; then a 2×2 grid of full-bleed image tiles separated
   by thin cream gutters, each with a centred 42px white title, 18px subtitle and a small outlined pill.

Character: restrained, technical, premium; black + warm white; photography and renders do the selling; type
is large but never bold.

## Colors

### Brand & Accent

- `primary` `#ea6100` — Enphase orange, measured on the header "Get started" pill (black text on orange).
  Enphase's trademark guidelines name its orange trade dress "Pantone Matching System 'PMS' color 1665"
  ([enphase.com/node/341](https://enphase.com/node/341)); no hex is given there, and the live value is `#ea6100`.
- `primary-hover` `#ff8b49` — measured hover fill of "Get started".
- `on-primary` `#000000`.

### Surface

- `canvas` `#faf6ef` — the body background (both pages) and the gutters between image tiles.
- `white` `#ffffff` — hero panels and content panels on the homeowners page (largest-area background there).
- `black` `#000000` — header, media bands (the largest-area background on the Thai homepage).
- `menu-bar` `#131313` — product shortcut bar.
- `surface-warm-grey` `#f4f3f0` — present in the stylesheet (22 uses).

### Text

- `ink` `#000000` — body copy and headlines on light surfaces (4,290 characters on the homeowners page).
- `text-secondary` `#3c3c3c` — secondary copy, outlined buttons, footer footnotes (the most-read colour on the Thai page).
- `nav-link` `#dcdcd6` — header links at rest; hover → `#ffffff` (measured). Also the footer top border (`hairline`).
- `text-grey` `#6e6e73`, `heading-grey` `#696969`, `text-muted-yxt` `#757575` — further greys from the stylesheet
  and the search widget variables.

### Semantic

No error / success colours were measured on the brand UI; none are declared (the search widget's
`--yxt-color-error: #940000` belongs to that widget).

## Typography

### Font Family

- **enphase-visuelt-regular** / **enphase-visuelt-medium** — two separately named `@font-face` families whose
  names reference Visuelt; the site itself does not state the typeface's source. All weights compute as 400; "medium" is a different file, not a CSS weight.
  Body stack as served: `enphase-visuelt-regular, sans-serif`; buttons: `enphase-visuelt-medium` (no fallback
  declared on the button rule; `sans-serif` is added here).
- **T-Star Pro** — uppercase labels on product cards (`h2.card-headline`), loaded from a 700 file but computed at
  weight 400, tracked 1.6px.
- A foundry page for Visuelt (colophon-foundry.org) returned 404 when opened, so no foundry facts are asserted.

### Hierarchy

| Token | Family | Size / line | Weight | Tracking | Where |
|---|---|---|---|---|---|
| stat | regular | 100px | 400 | -0.5px | Big figures (homeowners page) |
| display | regular | 64px / 76.8px | 400 | -1.28px | Hero headline (`.h1` class; Thai `h2`) |
| headline-56 | regular | 56px | 400 | -1.12px | Section headlines (homeowners page) |
| h3 | regular | 42px / 54.6px | 400 | — | Tile titles, "Get more from your solar" |
| title-24 | regular | 24px | 400 | 0.24px | Card titles (homeowners page) |
| card-label | T-Star Pro | 20px / 30px | 400 | 1.6px | "IQ BATTERY" uppercase card headline |
| body-lg | regular | 20px / 32px | 400 | — | Body paragraphs |
| subtitle | regular | 18px | 400 | 0.18px | Hero and tile subtitles |
| body | regular | 16px | 400 | — | Base |
| button | medium | 16px / 22.4px | 400 | — | Large pills |
| button-sm | medium | 14px / 19.6px | 400 | — | Black / outlined pills |
| nav-cta | regular | 14px / 15.96px | 400 | — | "Get started" |
| footnote | regular | 12px / 15.6px | 400 | 0.12px | Footer links, product-bar labels |

Mobile (390px): display 64px → 32px; h3 42px → 26px; body-lg 20px/32px → 16px/25.6px; button text 16px → 14px
(44px-tall pill). Line-heights for the mobile display and h3 were not measured.

### Principles

- One weight everywhere (400); emphasis comes from size and the separate "medium" file for buttons.
- Large sizes tighten (-2%: 64 → -1.28px, 56 → -1.12px); small sizes open slightly (+1%: 24 → 0.24px,
  18 → 0.18px, 12 → 0.12px).
- Uppercase only in T-Star Pro labels.

### Note on Font Substitutes

The site serves its own font files and declares only `sans-serif` as fallback; licensing of the
"enphase-visuelt" files is not documented by Enphase. T-Star Pro has no declared fallback. No substitute is specified by the brand.

## Layout

### Spacing System

Measured paddings (homeowners): 32px (24), 16px (15), 12px (14), 24px (13), 8px (10), 100px, 80px, 20px.
Thai homepage: 24px (11), 6px, 16px, 20px, 12px, 32px, 96px.

- 8 / 12 / 16px inside controls; 32px horizontal pill padding; 20px on the large white pill.
- 24px container side padding (`card-grid container` is `0 24px`, inner wrapper 1232px).
- 80–100px vertical section padding.

### Grid & Container

- Full-width 1280px with a 1232px inner wrapper.
- Thai homepage tiles: a 2-column grid of large image tiles separated by thin `#faf6ef` gutters.
- Header 54px (`--header-height: 54px`), header + product bar `--navbar-height: 86px`; hero banners use
  `--banner-height: calc(100vh - var(--header-height))`.

### Whitespace Philosophy

Hero panels are tall (viewport-height banners) with one headline; content sections are separated by large
off-white fields.

## Elevation & Depth

- Image-card hover adds `rgba(0, 0, 0, 0.1) 0px 20px 36px -8px` (measured on the Thai tile links).
- Stylesheet also defines `0 20px 36px -8px rgba(14,14,44,.1), 0px 1px 2px rgba(0,0,0,.05)` and
  `inset 0px -1px 0px #e3e3e3`; otherwise flat.
- Renders carry baked soft shadows (the isometric house).

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| none | 0px | Bands, tiles |
| card | 16px | Cards (homeowners) |
| button-sm | 20px | Small secondary pill (footer) |
| nav-cta | 24px | "Get started" pill; hero panel bottom corners `0 0 24px 24px` |
| button-dark | 36px | Black and outlined pills |
| button-light | 56px | White / white-outlined pills |

No clip-paths or skews. The radii are large enough relative to height that every button reads as a full pill.

### Photography Geometry

Full-bleed videos and photos; product renders isolated on white/black; isometric illustrations with pill callouts.

## Components

### Buttons

- **button-primary** — `#ea6100`, black text, enphase-visuelt-regular 14px (line 15.96px), 24px radius, 34px
  tall, chevron icon ("Get started" in the header). Hover → `#ff8b49` (measured).
- **button-inversed** — white, black text, enphase-visuelt-medium 16px/22.4px, 56px radius, padding 0 20px,
  54px tall (Thai hero/tiles; on the homeowners page the same class `btn btn--inversed btn-primary` measures
  padding 16px 32px). Hover → text `#3c3c3c` (measured).
- **button-dark** — black, white text, 14px/19.6px medium, 36px radius, `1px solid #000000`, padding 12px 32px,
  44px tall (54px in the hero variant).
- **button-outline** — transparent, `#3c3c3c` text and 1px border, 36px radius, 12px 32px.
- **button-outline-on-dark** — transparent, white text and 1px white border, 56px radius, 54px tall.
  Hover → white fill with `#3c3c3c` text (measured).
- **button-small-secondary** — `btn-secondly btn-small`: 1px `#3c3c3c` border, 20px radius, 8px 16px, 14px text.

### Cards & Containers

- Image tiles (Thai homepage): full-bleed photo, centred 42px white title, 18px subtitle, small outlined pill;
  hover shadow `rgba(0, 0, 0, 0.1) 0px 20px 36px -8px`.
- Product cards (homeowners): 16px radius, T-Star Pro uppercase 20px label.

### Navigation

- **nav** — black 54px header, `#dcdcd6` links → `#ffffff` on hover, orange "Get started".
- **product-menu-bar** — `#131313` icon row with 12px labels.

### Signature Components

- **Isometric system hero** with white pill callouts.
- **Footer** — warm `#faf6ef`, 1px `#dcdcd6` top border, link columns in 12px/15.6px `#3c3c3c` footnote style.

## Design System Architecture

Enphase publishes **no public design-system documentation, token package or style-guide site**. Searches:
"Enphase brand guidelines Visuelt typeface orange logo", "Enphase design system web components Drupal enphase.com
style guide", "Colophon Foundry Visuelt typeface", "Authorized Uses of Enphase Marks". Two sources say something
official or first-hand:

- Enphase's trademark page ([enphase.com/node/341](https://enphase.com/node/341)) protects the orange as trade
  dress ("PMS color 1665"), forbids imitating "distinctive Enphase hardware or software designs, including …
  website or application design", and refers to separate "Enphase logo guidelines" not published on that page.
- The agency SMAL describes its Enphase work ([smal.de](https://www.smal.de/work/enphase-global-digital-rollout)):
  "60+ localized websites globally deployed via Drupal multi-site architecture", "50+ product launches powered by a
  unified, scalable design system", an "integrated Figma-Notion workflow", design "split by audience" (homeowners
  vs installers), and "the same visual language carried from screen to print". It lists no tokens, type or colours.

Observed on the live site:

- **Stack.** Drupal (the served HTML references Drupal; content blocks carry Drupal paragraph classes such as
  `paragraph--type--panel-card-grid`). The Thai and English pages use the same class names.
- **Tokens.** Almost none are exposed as CSS variables: layout vars (`--header-height: 54px`,
  `--navbar-height: 86px`, `--banner-height`) and `--ai-font-size-h1 … -h6` aliases pointing at
  `var(--font-size-h1)` etc. A separate `--yxt-*` set (`--yxt-searchbar-*`, `--yxt-autocomplete-*`,
  `--yxt-color-brand-primary: #0f70f0`) styles the site search widget, not the brand UI.
- **Component model.** Global utility/BEM-ish classes: `btn`, `btn-primary`, `btn--inversed`, `btn-secondly`,
  `btn-small`, `btn-with-icon`, `h1` / `h2` heading classes on non-heading elements, `card-grid`, `card-headline`,
  `footnote`, `menu-header-main__link`.
- **Theming.** Light (warm white) and dark (black band) sections; no user dark mode found.
- **Accessibility.** "Skip to main content" link first in the DOM; pills are 34–54px tall. No published policy.
- **Delivery.** No npm package or public Figma kit.

## Do's and Don'ts

### Do

- Use warm `#faf6ef` as the page, white for panels, black for chrome and media bands.
- Keep headlines at weight 400 with -2% tracking at large sizes.
- Make every button a pill; white on dark media, black on light.
- Reserve orange `#ea6100` for the single conversion action ("Get started"); hover `#ff8b49`.
- Use T-Star Pro uppercase, 1.6px tracked, only for small product labels.
- Let full-bleed product photography and isometric renders carry the page.

### Don't

- Don't use bold headlines; the system has one weight.
- Don't spread orange across backgrounds, links or icons.
- Don't use square buttons or small radii on actions.
- Don't use cold greys for page backgrounds; the light neutral is warm.
- Don't add heavy shadows; one soft hover lift is the maximum.

## Responsive Behavior

### Breakpoints

Measured at 1280px and 390px. At 390px: display 32px, h3 26px, body 16px/25.6px, pill text 14px / 19.6px with
44px height (Thai hero pill: 14px, 0 20px, 44px).

### Touch Targets

Pills 44–54px tall; header CTA 34px.

### Collapsing Strategy

Mobile header, shortcut bar and tile layout were not measured.

### Image Behavior

Hero media remains full-bleed and viewport-tall (`--banner-height`).

## Iteration Guide

1. Black 54px header with `#dcdcd6` links and one orange 24px-radius "Get started" pill.
2. Viewport-tall hero: full-bleed media or a white panel with a 64px/76.8px headline at -1.28px.
3. Pills: white 56px-radius on dark, black 36px-radius on light, outlined variants with 1px borders.
4. Tiles: full-bleed images, centred 42px/54.6px white titles, 18px subtitles.
5. Body copy 20px/32px in black; secondary text `#3c3c3c`.
6. Footer on `#faf6ef` with a `#dcdcd6` top rule and 12px footnote links.
7. Re-run `node web/scripts/verify-designs.mjs --slug=enphase`.
