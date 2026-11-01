---
version: alpha
name: reMarkable
category: "Consumer Electronics"
description: "reMarkable's 'Ark' web system: warm paper-cream surfaces (#f3efe7 sections on a #fcfbf8 base, #d9d2c4 and #e0dacc bands), near-black #211e1c footer and dark hero, a single pen-blue #2559f4 action colour (hover #1142d4) on 2px-radius buttons, reMarkableSerif at weight 375 for fluid headlines (59.168px h1) and reMarkableSans 400/500 for body (20.8992px) — both proprietary reMarkable typefaces."

colors:
  primary: "#2559f4"
  primary-hover: "#1142d4"
  on-primary: "#fcfbf8"
  canvas: "#f3efe7"
  background-1: "#fcfbf8"
  background-2: "#f9f6f1"
  background-4: "#ede8de"
  background-5: "#e7e1d5"
  background-6: "#e0dacc"
  background-7: "#d9d2c4"
  ink: "#211e1c"
  ink-inverse: "#fcfbf8"
  text-default: "#211e1c"
  text-muted: "#584f4b"
  text-red-dark: "#231a1a"
  dark-surface: "#211e1c"
  dark-surface-2: "#2c2826"
  dark-surface-3: "#584f4b"
  neutral-active: "#4d4542"
  button-dark-hover: "#37322f"
  border-muted: "#6e635e"
  margin-muted: "#d2cabc"
  secondary-border-red: "#745858"
  focus: "#003bb2"
  pen-blue-light: "#99c3ff"
  primary-subtle: "#e9f2ff"
  primary-subtle-hover: "#cce1ff"
  danger: "#da0810"
  success: "#009245"
  tag-dark: "#423c38"
  ghost-on-dark: "#fcfbf81a"
  backdrop: "#211e1cbf"
  black: "#000000"

typography:
  h1:
    fontFamily: "reMarkableSerif, \"Book Antiqua\", Georgia, serif"
    fontSize: 59.168px
    fontWeight: 375
    lineHeight: 65.0848px
  h1-mobile:
    fontFamily: "reMarkableSerif, \"Book Antiqua\", Georgia, serif"
    fontSize: 38px
    fontWeight: 375
    lineHeight: 41.8px
  heading-3xl:
    fontFamily: "reMarkableSerif, \"Book Antiqua\", Georgia, serif"
    fontSize: 53.84px
    fontWeight: 375
    lineHeight: 59.224px
  heading-2xl:
    fontFamily: "reMarkableSerif, \"Book Antiqua\", Georgia, serif"
    fontSize: 45.3728px
    fontWeight: 375
    lineHeight: 49.9101px
  heading-xl:
    fontFamily: "reMarkableSerif, \"Book Antiqua\", Georgia, serif"
    fontSize: 39.1392px
    fontWeight: 400
    lineHeight: 46.967px
  heading-lg:
    fontFamily: "reMarkableSerif, \"Book Antiqua\", Georgia, serif"
    fontSize: 31.7952px
    fontWeight: 400
    lineHeight: 38.1542px
  heading-md-medium:
    fontFamily: "reMarkableSerif, \"Book Antiqua\", Georgia, serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28.8px
  body-lead:
    fontFamily: "reMarkableSans, Helvetica, sans-serif"
    fontSize: 24.4672px
    fontWeight: 400
    lineHeight: 34.2541px
  body-md:
    fontFamily: "reMarkableSans, Helvetica, sans-serif"
    fontSize: 20.8992px
    fontWeight: 400
    lineHeight: 29.2589px
  body-md-mobile:
    fontFamily: "reMarkableSans, Helvetica, sans-serif"
    fontSize: 17.008px
    fontWeight: 400
    lineHeight: 23.8112px
  product-title:
    fontFamily: "reMarkableSans, Helvetica, sans-serif"
    fontSize: 20.8992px
    fontWeight: 500
    lineHeight: 29.2589px
  footer-link:
    fontFamily: "reMarkableSans, Helvetica, sans-serif"
    fontSize: 18.2336px
    fontWeight: 400
    lineHeight: 36.4672px
  body-sm:
    fontFamily: "reMarkableSans, Helvetica, sans-serif"
    fontSize: 16.6784px
    fontWeight: 400
    lineHeight: 23.3498px
  menu-item:
    fontFamily: "reMarkableSans, Helvetica, sans-serif"
    fontSize: 15.5552px
    fontWeight: 500
    lineHeight: 21.7773px
  button-large:
    fontFamily: "reMarkableSans, Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 18px
  button-medium:
    fontFamily: "reMarkableSans, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
  button-small:
    fontFamily: "reMarkableSans, Helvetica, sans-serif"
    fontSize: 14.5472px
    fontWeight: 500
    lineHeight: 20.3661px
  overline:
    fontFamily: "reMarkableSans, Helvetica, sans-serif"
    fontSize: 14.5472px
    fontWeight: 400
    lineHeight: 14.5472px
    letterSpacing: 1.45472px
  tag:
    fontFamily: "reMarkableSans, Helvetica, sans-serif"
    fontSize: 11.1104px
    fontWeight: 500
    letterSpacing: 1.11104px
  tag-12:
    fontFamily: "reMarkableSans, Helvetica, sans-serif"
    fontSize: 12px
    fontWeight: 500
    letterSpacing: 1.2px
  small:
    fontFamily: "reMarkableSans, Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18px
  input:
    fontFamily: "reMarkableSans, Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 18px

rounded:
  none: 0px
  button: 2px
  pill: 9999px

spacing:
  spacing-4: 4px
  spacing-6: 6px
  spacing-8: 8px
  spacing-12: 12px
  spacing-16: 16px
  spacing-20: 20px
  spacing-24: 24px
  spacing-32: 32px
  spacing-48: 48px
  responsive-1x: 64px
  spacing-80: 80px
  spacing-128: 128px
  margin-width: 128px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-large}"
    rounded: "{rounded.button}"
    padding: 8px 20px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-medium:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-medium}"
    rounded: "{rounded.button}"
    padding: 4px 16px
    height: 40px
  button-secondary:
    backgroundColor: transparent
    textColor: "{colors.text-red-dark}"
    typography: "{typography.button-large}"
    rounded: "{rounded.button}"
    boxShadow: "rgb(116, 88, 88) 0px 0px 0px 1px inset"
    padding: 8px 20px
    height: 48px
  button-secondary-hover:
    textColor: "{colors.primary-hover}"
    boxShadow: "rgb(17, 66, 212) 0px 0px 0px 1px inset"
  button-secondary-small-on-dark:
    backgroundColor: transparent
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.button}"
    boxShadow: "rgb(210, 202, 188) 0px 0px 0px 1px inset"
    padding: 0px 12px
    height: 32px
  button-secondary-small-on-dark-hover:
    textColor: "{colors.pen-blue-light}"
    boxShadow: "rgb(153, 195, 255) 0px 0px 0px 1px inset"
  button-light:
    backgroundColor: "{colors.background-1}"
    textColor: "{colors.ink}"
    typography: "{typography.button-large}"
    rounded: "{rounded.button}"
    padding: 8px 20px
    height: 48px
  button-ghost-on-dark:
    backgroundColor: "{colors.ghost-on-dark}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-large}"
    rounded: "{rounded.button}"
    padding: 8px 20px
    height: 48px
  button-dark:
    backgroundColor: "{colors.dark-surface}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.button}"
  button-dark-hover:
    backgroundColor: "{colors.button-dark-hover}"
  tag-info:
    backgroundColor: "{colors.primary-subtle}"
    textColor: "{colors.focus}"
    typography: "{typography.tag}"
    rounded: "{rounded.pill}"
    padding: 6px 12px
    textTransform: uppercase
  tag-themed-filled:
    backgroundColor: "{colors.tag-dark}"
    textColor: "{colors.on-primary}"
    typography: "{typography.tag-12}"
    rounded: "{rounded.pill}"
    padding: 6px 12px
    textTransform: uppercase
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.button}"
    boxShadow: "rgb(110, 99, 94) 0px 0px 0px 1px inset"
    padding: 0px 16px
    height: 48px
  sub-nav-pill:
    backgroundColor: "{colors.background-1}"
    textColor: "{colors.ink}"
    rounded: "{rounded.pill}"
    height: 38px
  sub-nav-pill-hover:
    backgroundColor: "{colors.background-2}"
  nav:
    backgroundColor: "{colors.dark-surface}"
    textColor: "{colors.on-primary}"
    typography: "{typography.menu-item}"
    height: 64px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.small}"
  footer:
    backgroundColor: "{colors.dark-surface}"
    textColor: "{colors.on-primary}"
    padding: 64px 0px
  footer-link-muted:
    textColor: "{colors.background-6}"
    typography: "{typography.button-small}"
---

## Overview

reMarkable sells paper tablets, and its website is built to feel like paper: every light surface is a warm
off-white or oatmeal tone, never pure white; headlines are set in a light-weight custom serif; and a single
saturated "pen blue" is reserved for actions. Body text on the cream canvas is the warm near-black `#211e1c` (`ink`);
cream `#fcfbf8` (`ink-inverse`) is used only on the dark hero, nav and footer. Measured pages: the homepage https://remarkable.com/ and the
product page https://remarkable.com/products/remarkable-paper/pro (desktop 1280px, mobile 390px).

What the capture shows (top 2400px at 1280px):

1. A full-bleed, dark, warm-lit hero photograph (a Paper Pro on a desk in amber light). Over it: a pale-blue
   pill tag "LAST CHANCE", a two-line serif headline "The final sale of reMarkable 2" in cream, a 20.9px
   sans paragraph and one blue "Shop now" button.
2. The navigation bar sits at the bottom edge of the hero at first load (dark `#211e1c`-tinted, cream
   links "Shop / Explore / For business / Support", a user icon and an outlined "All products" small button).
3. A trust strip of three uppercase, widely tracked statements with line icons ("AWARD-WINNING",
   "4.6 / 5 RATING", "2+ MILLION SOLD").
4. A split section on a beige photo backdrop: a TIME "Best Inventions 2025" badge, a serif headline with an
   italic *Time*, and an outlined "Learn more →" secondary button.
5. A cookie bar on `#fcfbf8` with a small dark "OK" button.
6. A cream `#f3efe7` editorial section with asymmetric, offset lifestyle photographs (hands writing, a
   burgundy folio), then a large centred serif statement "A place for your thoughts" with a sans subline.

Character: calm, editorial, tactile. Lots of empty cream space, imagery with warm natural light and real
materials (leather, fabric, paper), thin 1px inset outlines instead of shadows, almost-square 2px corners on
buttons and pill-shaped tags.

## Colors

### Brand & Accent

- `primary` `#2559f4` — the only filled action colour (`--ark-interaction-primary-default`). Text on it is
  `#fcfbf8` (`--ark-interaction-primary-foreground`).
- `primary-hover` `#1142d4` — measured hover fill of "Shop now" / "Configure" (`--ark-interaction-primary-hover`,
  also `--color-pen-blue`).
- `focus` `#003bb2` — `--ark-interaction-focus-default` and `--color-pen-blue-dark`; also the text colour of the
  info tag.
- `pen-blue-light` `#99c3ff` — hover colour of the small outlined button on dark (`--color-pen-blue-light`).
- `primary-subtle` `#e9f2ff` / `primary-subtle-hover` `#cce1ff` — info tag fill and its hover token.

### Surface

The "paper" scale is exposed as `--background-N` and `--color-neutral-light-N`:

| Token | Hex | Variable |
|---|---|---|
| background-1 | `#fcfbf8` | `--background-1`, body background |
| background-2 | `#f9f6f1` | `--background-2`, sub-nav pill hover |
| canvas | `#f3efe7` | `--background-3`, editorial sections (the colour covering most of the capture) |
| background-4 | `#ede8de` | `--background-4` |
| background-5 | `#e7e1d5` | `--color-neutral-light-5` |
| background-6 | `#e0dacc` | `--background-6`, muted footer link text |
| background-7 | `#d9d2c4` | `--background-7`, the largest-area band on the homepage |

Dark surfaces: `dark-surface` `#211e1c` (`--color-neutral-dark-8`, footer and nav), `dark-surface-2` `#2c2826`
(`--color-neutral-dark-7`), `dark-surface-3` `#584f4b` (`--color-neutral-dark-3`), `neutral-active` `#4d4542`.

### Text

- `ink` `#211e1c` (= `text-default`, `--ark-text-default`) — the body ink on the `#f3efe7` canvas and every
  light surface (855 homepage characters; 3,712 on the Paper Pro page, where it is the most-read colour).
- `ink-inverse` `#fcfbf8` — cream type on the dark hero, nav, trust strip and footer; by raw count the most-read
  text colour on the homepage (1,049 characters), but only ever on dark surfaces, never on the cream canvas.
- `text-muted` `#584f4b` — `--ark-text-muted`, secondary paragraphs (`fluid-body-sm`).
- `text-red-dark` `#231a1a` — `--color-red-dark-8`, used by the "Best Inventions" section in the red-tinted theme.

### Semantic

- `danger` `#da0810` — `--color-feedback-red-500` / `--ark-interaction-danger-default`.
- `success` `#009245` — `--color-feedback-green-500`.
- `backdrop` `#211e1cbf` — `--ark-interaction-backdrop` (modal scrim).

## Typography

### Font Family

- **reMarkableSerif** — headlines. Loaded as a variable font with a weight axis 300–800, upright and italic
  (`desktop.loadedFonts: "reMarkableSerif 300 800 normal"`, `"reMarkableSerif 300 800 italic"`). Fallbacks:
  `"Book Antiqua", Georgia, serif`.
- **reMarkableSans** — body, UI, buttons. Variable 300–800. Fallbacks: `Helvetica, sans-serif`.
- Both are custom typefaces; the brand's own site does not name the designer. reMarkable published no type
  specimen we could open, so no foundry is asserted here.

### Hierarchy

All sizes below are measured at a 1280px viewport. The odd decimals come from the site's fluid type classes
(`fluid-heading-4xl`, `fluid-body-md` …) that interpolate between breakpoints.

| Token | Family | Size / line | Weight | Class | Where |
|---|---|---|---|---|---|
| h1 | Serif | 59.168px / 65.0848px | 375 | `fluid-heading-4xl` | Hero headline |
| heading-3xl | Serif | 53.84px / 59.224px | 375 | `fluid-heading-3xl` | Big section statements |
| heading-2xl | Serif | 45.3728px / 49.9101px | 375 | `fluid-heading-2xl` | Section h1 on light |
| heading-xl | Serif | 39.1392px / 46.967px | 400 | `fluid-heading-xl` | "reMarkable Paper Pro: one of Time magazine's…" |
| heading-lg | Serif | 31.7952px / 38.1542px | 400 | `fluid-heading-lg` | Footer heading, testimonial h3 |
| heading-md-medium | Serif | 24px / 28.8px | 500 | `fluid-heading-lg text-24` | Small serif headings |
| body-lead | Sans | 24.4672px / 34.2541px | 400 | `fluid-body-md` | Lead paragraphs |
| body-md | Sans | 20.8992px / 29.2589px | 400 | `fluid-body-md` | Hero paragraph, main body |
| product-title | Sans | 20.8992px / 29.2589px | 500 | — | Bundle titles (Paper Pro page h3) |
| footer-link | Sans | 18.2336px / 36.4672px | 400 | `ark-link` | Footer link list |
| body-sm | Sans | 16.6784px / 23.3498px | 400 | `fluid-body-sm` | Muted secondary copy |
| menu-item | Sans | 15.5552px / 21.7773px | 500 | `text-fluid-menu-item` | Nav labels |
| button-large | Sans | 18px / 18px | 500 | `ark-button-large` | Primary/secondary buttons |
| button-medium | Sans | 16px / 16px | 500 | — | "Configure" in the product header |
| button-small | Sans | 14.5472px / 20.3661px | 500 | `ark-button-small` | "All products" |
| overline | Sans | 14.5472px / 14.5472px | 400 | `ark-uppercase fluid-body-3xs` | Trust strip, +1.45472px tracking |
| tag | Sans | 11.1104px | 500 | `ark-tag-fluid-small` | "LAST CHANCE", +1.11104px tracking |
| tag-12 | Sans | 12px | 500 | `ark-tag` | Themed filled tag, +1.2px tracking |
| small | Sans | 14px / 18px | 400 | — | Cookie copy and inline link |

Mobile (390px): h1 38px / 41.8px (375); body-md 17.008px / 23.8112px. Top mobile sizes: 17.008px, 20px,
16px, 14px, 15.008px, 24px, 18px, 12px, 44px, 28px, 36px, 38px.

### Principles

- Serif for statements, sans for everything functional.
- The serif runs light: 375 for the biggest sizes, 400 below ~40px, 500 only for small serif headings.
- Uppercase is only for tags and the trust strip, and always with tracking of 0.1em (14.5472px → 1.45472px,
  11.1104px → 1.11104px, 12px → 1.2px), matching `--tracking-widest: .1em`.
- Line-height tokens exist as `--leading-100/110/120/150` (1, 1.1, 1.2, 1.5) and `--leading-loose: 2`; headline
  line-heights measure at 1.1 (59.168 → 65.0848) and 1.2 (31.7952 → 38.1542), body at 1.4.
- Italic serif is used inline for titles (*Time*).

### Note on Font Substitutes

reMarkableSans and reMarkableSerif are proprietary to reMarkable. The site's declared fallbacks are
`Helvetica` for the sans and `"Book Antiqua", Georgia` for the serif — use those stacks if the custom faces are
unavailable. Note that the 375 weight only exists on a variable font; with static fallbacks the browser will
round to 400.

## Layout

### Spacing System

The site exposes a 4px-based spacing scale as CSS variables, all in rem: `--spacing-4: .25rem`,
`--spacing-6`, `--spacing-8`, `--spacing-12`, `--spacing-16`, `--spacing-20`, `--spacing-24`, `--spacing-32`,
`--spacing-48`, `--spacing-80`, `--spacing-128: 8rem`. Responsive spacing: `--spacing-responsive-1x: 4rem`,
`--ark-responsive-spacing-quarter: 1rem`, `-half: 2rem`, `-three-quarters: 3rem`.

Measured: gaps 12px (65), 32px (24), 24px (12), 64px (12), 8px (10); paddings 64px (17), 16px, 20px, 8px.
Footer padding is 64px 0 (`pt-responsive-1x`). Page side margin `--container-margin-width: 8rem` and
`--ark-margin-width: 8rem` (128px).

### Grid & Container

- Content aligns to a 128px left margin at 1280px (the hero copy and nav logo start at the same x).
- Editorial image sections use deliberately asymmetric placement: one landscape image left, a smaller
  portrait image right and lower.
- Nav height tokens: `--ark-navbar-height: 67px`, `--spacing-menu: 52px`, `--spacing-menu-md: 67px`;
  the measured `nav` element is 64px tall.

### Whitespace Philosophy

Sections are separated by large cream fields rather than rules. Copy blocks are narrow (the hero paragraph
is 512px wide) and frequently centred for statements.

## Elevation & Depth

- The system draws edges with **inset 1px rings** rather than borders or shadows:
  `rgb(110, 99, 94) 0px 0px 0px 1px inset` (input, `--ark-border-muted`),
  `rgb(210, 202, 188) 0px 0px 0px 1px inset` (small outlined button on dark, `--ark-margin-muted`),
  `rgb(116, 88, 88) 0px 0px 0px 1px inset` (secondary button in the red theme).
- The only drop shadows measured are layered soft product shadows:
  `rgba(0, 0, 0, 0.1) 3px 2px 7px 0px, rgba(0, 0, 0, 0.08) 10px 8px 13px 0px, rgba(0, 0, 0, 0.05) 23px 19px 18px 0px`.
- Depth otherwise comes from photography lighting.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| none | 0px | Sections, images in editorial layouts |
| button | 2px | All buttons, inputs, image cards (`--radius: .125rem`) |
| pill | 9999px | Tags, sub-nav pills (computed as 79992px) |

The search field in the product header uses `100px 0px 0px 100px` (left-rounded half of a pill group).
No clip-paths or skews.

### Photography Geometry

Rectangular, square-cornered lifestyle images; product shots on dark warm backdrops.

## Components

### Buttons

- **button-primary** — `#2559f4`, `#fcfbf8` text, reMarkableSans 18px/500, line-height 18px, 2px radius,
  padding 8px 20px, 48px tall (`ark-button ark-button--primary ark-button-large`).
  Hover → `#1142d4` (measured).
- **button-primary-medium** — 16px/500, padding 4px 16px, 40px tall ("Configure" in the sticky product header).
- **button-secondary** — transparent, `#231a1a` text, 1px inset ring `rgb(116, 88, 88)`, 18px/500,
  48px tall ("Learn more →"). Hover: text and ring turn `#1142d4` (measured).
- **button-secondary-small-on-dark** — transparent, cream text, 1px inset ring `rgb(210, 202, 188)`,
  14.5472px/500, padding 0 12px, 32px tall ("All products"). Hover: text and ring `#99c3ff` (measured).
- **button-light** — `#fcfbf8` fill, `#211e1c` text ("Learn about Connect").
- **button-ghost-on-dark** — `#fcfbf81a` (10% cream) fill with cream text ("Pricing and plans").
- **button-dark** — `#211e1c` fill ("OK" in the cookie bar, "Sign up"); hover `#37322f` (measured).

### Cards & Containers

Image cards are 2px-radius rectangles (e.g. 320×359 accessory images on `#4d4542` on the Paper Pro page).
No shadowed card container was measured.

### Inputs & Forms

- **text-input** (`ark-input`, footer newsletter) — `#f3efe7` fill, `#211e1c` text, 18px, 2px radius,
  padding 0 16px, 48px tall, ring `rgb(110, 99, 94) 0px 0px 0px 1px inset` on the homepage
  (`rgb(210, 202, 188)` inside the dark footer).

### Navigation

- **nav** — 64px dark bar; cream reMarkableSans 15.5552px/500 labels with chevrons ("Shop", "Explore"),
  an arrow-out icon on "Support", account icon and the small outlined "All products" button.
- **sub-nav pills** on the product page ("Overview", "Features", "Compare") — 38px-tall pills; hover on light
  `#fcfbf8 → #f9f6f1`, on dark transparent → `rgba(252, 251, 248, 0.1)` (measured).

### Pills, Tags, and Chips

- **tag-info** (`ark-tag--info-light`) — `#e9f2ff` fill, `#003bb2` text, 11.1104px/500 uppercase,
  1.11104px tracking, padding 6px 12px, pill radius, 25px tall.
- **tag-themed-filled** — `#423c38` fill, cream text, 12px/500 uppercase, 1.2px tracking, 6px 12px, pill.

### Signature Components

- **Trust strip** — three uppercase 14.5472px statements with +1.45472px tracking and 12px icon gaps.
- **Footer** — `#211e1c`, 64px vertical padding, a serif `heading-lg` ("Creative Edge: get the workbook"),
  newsletter input + blue "Sign up", link columns at 18.2336px with a 36.4672px line-height, muted links in `#e0dacc`.

## Design System Architecture

reMarkable publishes **no public design-system documentation, token package or brand-guideline site**.
Searches ("reMarkable design system ark reMarkableSans typeface", "reMarkable engineering blog design system
Ark components", "lettersfromsweden.se reMarkable", "Letters from Sweden reMarkable custom typeface") returned
only third-party font catalogues and the unrelated open-source Ark UI library. The official press page
([news.remarkable.com/media](https://news.remarkable.com/media)) offers product photography only — no logos,
colour or type specifications. Everything below is what the live site itself exposes.

- **Name (observed).** Component classes and variables are prefixed `ark-` (`ark-button`, `ark-tag`,
  `ark-input`, `ark-link`, `ark-focus-visible`, `--ark-interaction-primary-default`). We do not assert any
  relation to the third-party "Ark UI" library.
- **Token tiers (observed).** Three layers are visible in the 400 root variables:
  1. *Primitives* — hue ramps named by family, tone and step: `--color-neutral-light-1 … -8`,
     `--color-neutral-dark-2 … -8`, `--color-red-light-1 … -7` / `--color-red-dark-1 … -8`,
     `--color-green-light-*`, `--color-sky-blue-*`, plus product-material swatches
     (`--color-materials-brown-leather: #996849`, `--color-materials-polymer-weave: #b3b3b3`) and pen colours
     (`--color-pen-blue: #1142d4`, `--color-pen-red: #9a2814`, `--color-highlighter-green: #5ccd5a`).
  2. *Themed semantic* — `--color-{mode}-{theme}-{role}-{variant}-{state}`, e.g.
     `--color-light-neutral-interaction-primary-default: #2559f4`,
     `--color-dark-neutral-interaction-link-hover: #2559f4`,
     `--color-light-red-interaction-primary-neutral-default: #231a1a`,
     `--color-dark-green-interaction-danger-default: #f7979b`.
  3. *Resolved component aliases* — `--ark-*` (`--ark-text-default`, `--ark-border-muted`,
     `--ark-interaction-secondary-border-hover`, `--ark-navbar-height`) which the components consume.
- **Theming (observed).** Two modes (`light`, `dark`) × at least three colour themes (`neutral`, `red`,
  `green`) are defined as parallel token sets; sections switch theme (the "Best Inventions" block uses
  red-dark text `#231a1a` and a red-tinted ring). Legacy aliases `--background-1…7` and `--foreground-1…8` map
  onto the neutral ramp.
- **Type & spacing.** Tailwind-style scales (`--text-12 … --text-76`, `--spacing-4 … --spacing-128`,
  `--leading-*`, `--tracking-tight/-wider/-widest`) plus fluid classes `fluid-heading-{lg…4xl}` and
  `fluid-body-{3xs…md}`; Tailwind runtime variables (`--tw-*`) and utility classes (`max-md:hidden`,
  `lg:mb-20`) are present.
- **Component model (observed).** BEM-like modifiers with size suffixes: `ark-button--primary|secondary`,
  `ark-button-large|small|fluid`, `ark-tag--info-light|themed-filled`, `ark-tag-fluid-small`,
  `ark-link--inline`.
- **Accessibility (observed).** A dedicated focus colour (`--ark-interaction-focus-default: #003bb2` with
  `--ark-interaction-focus-foreground`), `ark-focus-visible` and `target-size` utility classes on footer links,
  and `--opacity-disabled`. No published contrast policy found.
- **Delivery (observed).** The served HTML is a Next.js app (`_next/static`) with content from Sanity (asset
  URLs). No npm package, Figma kit or versioning is public.

## Do's and Don'ts

### Do

- Use warm paper tones for every light surface — `#f3efe7` sections on a `#fcfbf8` base.
- Reserve `#2559f4` for the single most important action per view; hover to `#1142d4`.
- Keep button corners at 2px and buttons 48px tall with 8px 20px padding.
- Set statements in reMarkableSerif 375 with a 1.1 line-height; body in reMarkableSans 400 at ~1.4.
- Outline with 1px inset rings in muted warm greys instead of borders or shadows.
- Track uppercase labels at 0.1em.
- Use warm, natural-light photography of hands, paper and materials.

### Don't

- Don't use pure white `#ffffff` surfaces or pure black text — the system's extremes are `#fcfbf8` and `#211e1c`.
- Don't round buttons into pills; pills are for tags and sub-nav only.
- Don't use the serif at bold weights for large headlines.
- Don't introduce extra accent colours; blue is the only action hue (red/green are semantic or themed).
- Don't put drop shadows on UI elements.

## Responsive Behavior

### Breakpoints

Measured at 1280px and 390px. The fluid classes interpolate type between breakpoints; at 390px the h1 is 38px
(1.1 line-height), body 17.008px / 23.8112px. Buttons keep 18px type, 8px 20px padding and 48px height.

### Touch Targets

Buttons are 48px tall on both viewports; footer links carry a `target-size` utility.

### Collapsing Strategy

Nav labels collapse into a menu (`max-lg:` utilities); the trust strip stacks.

### Image Behavior


## Iteration Guide

1. Start on `#f3efe7` with body text in `ink` `#211e1c`, and a dark `#211e1c` nav and footer with `ink-inverse` `#fcfbf8` type.
2. Hero: full-bleed warm photograph, `tag-info`, serif h1 59.168px/375, 20.8992px body, blue 48px button.
3. Add the uppercase trust strip (14.5472px, +1.45472px tracking).
4. Statement sections: centred serif heading-3xl (53.84px/375), sans subline.
5. Secondary actions: transparent buttons with a 1px inset ring; hover to `#1142d4`.
6. Footer: serif heading-lg, `ark-input` newsletter field, link list at 18.2336px / 36.4672px.
7. Check mobile: h1 38px, body 17.008px.
8. Re-run `node web/scripts/verify-designs.mjs --slug=remarkable`.
