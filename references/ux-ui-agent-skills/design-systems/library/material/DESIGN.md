---
version: alpha
name: Material Design 3
category: "Design Systems"
description: >-
  Google's Material Design 3 documentation site (m3.material.io) measured as a product of the Material system itself — a lavender-tinted #fefbff page with #f8f1f6 containers, #6442d6 purple pill buttons 80px tall with 48px radius, Google Sans display type at 88px/475 over Google Sans Text body, 24px-radius cards, and a left icon rail. The underlying system's published baseline tokens (primary #6750a4, Roboto, 28px extra-large corner) are cited from the material-web repository.

colors:
  canvas: "#f8f1f6"
  page-body: "#fefbff"
  ink: "#4d4256"
  primary: "#6442d6"
  on-primary: "#ffffff"
  surface-lavender: "#dcdaf5"
  ink-strong: "#1c1b1d"
  ink-light: "#f2f2f2"
  ink-deep: "#21182b"
  on-primary-hover: "#1e0060"
  baseline-primary: "#6750a4"
  baseline-primary-container: "#eaddff"
  baseline-on-primary-container: "#21005d"
  baseline-secondary: "#625b71"
  baseline-tertiary: "#7d5260"
  footer-text: "#1f1f1f"
  demo-filled: "#7f5700"
  demo-tonal: "#ffdca9"
  demo-on-tonal: "#5c4316"
typography:
  display:
    fontFamily: "\"Google Sans\", sans-serif"
    fontSize: 88px
    fontWeight: 475
    lineHeight: 96px
  display-mobile:
    fontFamily: "\"Google Sans\", sans-serif"
    fontSize: 45px
    fontWeight: 475
    lineHeight: 52px
  subheading:
    fontFamily: "\"Google Sans Text\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  body:
    fontFamily: "\"Google Sans Text\", sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 30px
  title-large:
    fontFamily: Roboto, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 28px
  body-large:
    fontFamily: Roboto, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.5px
  label-large:
    fontFamily: Roboto, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: 0.1px
  button:
    fontFamily: "\"Google Sans\", sans-serif"
    fontSize: 24px
    fontWeight: 475
    lineHeight: 32px
  nav:
    fontFamily: "\"Google Sans Text\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 16px
  md: 24px
  lg: 32px
  xl: 48px
  shape-small: 8px
  shape-medium: 12px
  shape-extra-large: 28px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 8px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 40px
  s8: 48px
  s9: 56px
  s10: 64px
components:
  button-filled:
    backgroundColor: "{colors.demo-filled}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.pill}"
    padding: 10px 24px
    height: 40px
  button-tonal:
    backgroundColor: "{colors.demo-tonal}"
    textColor: "{colors.demo-on-tonal}"
    rounded: "{rounded.pill}"
    padding: 10px 24px
    height: 40px
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 0px 48px
    height: 80px
  button-primary-hover:
    textColor: "{colors.on-primary-hover}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.xl}"
    padding: 1px
  nav:
    textColor: "{colors.ink-strong}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.xl}"
    padding: 1px
  card:
    backgroundColor: "{colors.surface-lavender}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.md}"
  footer:
    textColor: "{colors.footer-text}"
    padding: 64px 40px
---

## Overview

Material Design 3 is the product here. This file covers two things and keeps them separate:

1. **The documentation site** at `https://m3.material.io` (measured at 1280px and 390px, plus the Buttons overview page at `https://m3.material.io/components/buttons/overview`). Its colors, type sizes and radii are measurements from the live pages.
2. **The published system tokens** from the open-source `material-components/material-web` repository (version folder `v0_192`), which are cited per token in `SOURCES.json`. These are the official baseline values, not necessarily what the docs site paints. The docs site uses its own purple (`{colors.primary}` #6442d6) rather than the baseline primary (`{colors.baseline-primary}` #6750a4).

The home page capture shows:

- A narrow left icon rail on a slightly darker lavender-gray: a search button at the top in a pale violet rounded square, then `Home` (selected, shown inside a pill), `Get started`, `Develop`, `Foundations`, `Styles`, `Components`, `Blog`, each as an icon above a small caption. At the bottom of the rail are a circular pause control and a circular light/dark control.
- A large rounded hero panel on `{colors.canvas}` (#f8f1f6) with the headline `Material Design` at 88px, one line of intro text (`Material Design 3 is Google's open-source design system for building beautiful, usable products.`), and a purple pill `Get started` button.
- Under the hero, a dense wall of phone-screen mockups on lavender tiles, cropped by the panel edges, showing varied app UIs (a music player with a lime-yellow `PLAY` pill, a chat, a clock, a shopping page).
- A section `Material at Google I/O 2026` with three rounded cards: a pink-tinted card with two shopping phone screens beside text (`May 19, 2026`, `What's new at Google I/O 2026`), a dark purple card reading `Compose First`, and a black card with the Google I/O 2026 graphic.
- A section `M3 Expressive: Design with emotion` with a paragraph whose key words (`colors`, `motion`, `components`, `typography`, `shapes`) are purple links, then a pair of cards below.

The page's personality is soft, rounded and colorful, with large type and a lot of product imagery; chrome is quiet and tinted rather than gray.

**Key characteristics**
- Page background `{colors.page-body}` (#fefbff) with container fills `{colors.canvas}` (#f8f1f6) and `{colors.surface-lavender}` (#dcdaf5).
- One brand action color, `{colors.primary}` (#6442d6), used for the CTA fill, link text and nav-link text.
- Full-pill buttons: `button-primary` has `{rounded.xl}` (48px) corners at 80px tall.
- Type in Google Sans (display, buttons) and Google Sans Text (body, nav), with Google Symbols for icons.
- Panels and cards in the 16-32px radius range; the hero and cards measured 24px most often.

## Colors

### Measured on m3.material.io
- **Canvas** `{colors.canvas}` (#f8f1f6): the largest-area fill on the home page (hero panel and the rail area). 
- **Page body** `{colors.page-body}` (#fefbff): the body/main background below the hero.
- **Ink** `{colors.ink}` (#4d4256): the most-read text color (paragraphs and small headings).
- **Ink strong** `{colors.ink-strong}` (#1c1b1d): headline text (h1, h2) and card text.
- **Ink deep** `{colors.ink-deep}` (#21182b): a dark violet text color measured on a small number of characters.
- **Ink light** `{colors.ink-light}` (#f2f2f2): light text, measured on 144 characters, which in the capture fits the dark cards; exact elements were not identified.
- **Primary** `{colors.primary}` (#6442d6): CTA fill, link and nav-link text.
- **On primary** `{colors.on-primary}` (#ffffff): text on the CTA.
- **On primary, hover** `{colors.on-primary-hover}` (#1e0060): the measured hover color of a text/icon control; I can only confirm it was recorded on hover, not which control family it applies to across the site.
- **Surface lavender** `{colors.surface-lavender}` (#dcdaf5): card/tile background behind imagery.
- **Footer text** `{colors.footer-text}` (#1f1f1f).

Other measured surfaces on the pages (not tokenized): #f5eff1, #f2ecee (subtle container steps), #f1d3f9 (a pink-lavender used on small rail controls), #c4eed0 (a pale green chip color on the Buttons page).

### Published baseline (from `material-web`, cited)
In `tokens/versions/v0_192/_md-ref-palette.scss` the default palette includes `primary40` #6750a4, `primary90` #eaddff, `primary10` #21005d, `secondary40` #625b71 and `tertiary40` #7d5260. They are exposed here as:

- `{colors.baseline-primary}` #6750a4
- `{colors.baseline-primary-container}` #eaddff
- `{colors.baseline-on-primary-container}` #21005d
- `{colors.baseline-secondary}` #625b71
- `{colors.baseline-tertiary}` #7d5260

In `_md-sys-color.scss` the light scheme maps roles to palette tones:

| Role | Light tone | Role | Light tone |
|---|---|---|---|
| `primary` | primary40 | `on-primary` | primary100 |
| `primary-container` | primary90 | `on-primary-container` | primary10 |
| `secondary` | secondary40 | `on-secondary` | secondary100 |
| `secondary-container` | secondary90 | `on-secondary-container` | secondary10 |
| `tertiary` | tertiary40 | `on-tertiary` | tertiary100 |
| `tertiary-container` | tertiary90 | `on-tertiary-container` | tertiary10 |
| `surface`, `background` | neutral98 | `on-surface` | neutral10 |
| `surface-variant` | neutral-variant90 | `on-surface-variant` | neutral-variant30 |
| `outline` | neutral-variant50 | `outline-variant` | neutral-variant80 |
| `error` | error40 | `on-error` | error100 |

In the dark scheme primary becomes primary80, surface neutral6 and on-surface neutral90.

The [material-web color theming page](https://material-web.dev/theming/color/) states that tokens follow `--md-sys-color-<token>` with a matching `--md-sys-color-on-<token>`, and that schemes can be generated with the Material theme builder Figma plugin or at runtime with `material-color-utilities`. That library's README describes HCT as "hue, chrome, tone" based on CAM16 and L*.

### An important caution
The docs site's CTA (#6442d6) is not the baseline primary. Treat the baseline tokens as the system's defaults and the measured tokens as the docs site's rendering of a custom scheme.

## Typography

### Docs site (measured)
Families by character weight: Google Sans Text, Google Sans, and Google Symbols (icon font).

| Role | Family | Size / line | Weight |
|---|---|---|---|
| Display (h1) | Google Sans | 88px / 96px | 475 |
| Display, mobile (390px) | Google Sans | 45px / 52px | 475 |
| Section heading (h2) | Google Sans | 45px / 52px | 475 |
| Body (intro paragraph) | Google Sans Text | 22px / 30px | 400 |
| Subheading (h3) | Google Sans Text | 14px / 20px | 500 |
| Nav | Google Sans Text | 16px / 24px | 500 |
| Button | Google Sans | 24px / 32px | 475 |

Weight 475 is a variable-font value; the display text sits between regular and medium. Letter-spacing was measured as `normal` on all of these.

### Published type scale (cited)
The `_md-sys-typescale.scss` file in `material-web` defines the 15-style scale. Selected values used as tokens here: `title-large` 22px/28px weight 400, `body-large` 16px/24px weight 400 with 0.5px tracking, `label-large` 14px/20px weight 500 with 0.1px tracking. Its other entries run from `display-large` 57px/64px with -0.25px tracking down to `label-small` 11px/16px. Defaults are expressed in rem: for instance display-large is 3.5625rem. In `_md-ref-typeface.scss` both the brand and plain typefaces are Roboto, with weights 400, 500 and 700, and the typography theming page says to load Roboto if you do not change it.

### Note on font substitutes
Google Sans and Google Sans Text are what the docs site loads; I did not find a public license statement for them in the sources opened, so treat them as proprietary to the site. Substitute Roboto (the published default of the system) or any neutral humanist sans. Roboto is the only typeface named in the official tokens.

## Layout

- The page is a two-part frame: a left icon rail and a wide content area that starts directly beside it. Whether the rail is fixed on scroll was not tested.
- The hero panel spans nearly the full content width with a visible gap to the rail and to the page edge, and has rounded corners; the phone-mock wall continues directly under it and is cropped by the container edges.
- Below the wall, content sits in a narrower centered block of cards in the capture, with section headings left-aligned at the block edge.
- Cards come in two arrangements: one wide card with image left and text right, and a row of two cards with image on top and caption underneath.
- The footer has `64px 40px` padding and a measured text color of `{colors.footer-text}`.
- Spacing tokens `{spacing.s1}` through `{spacing.s10}` follow the measured gap and padding frequencies: 1, 2, 8, 16, 20, 24, 40, 48, 56 and 64px.

### Hover states recorded on the home page
- Rail search control: text/border color #4d4256 to #271430, fill stays #f1d3f9, radius stays 16px, no shadow appears.
- Pause control (a `button` element): recorded alongside the search control with the same starting text color #4d4256.
- Rail items and the CTA are anchors; only the color change is recorded, so no scale, ripple or elevation behavior is described.

### Reading the capture, section by section
1. Rail and hero: tinted, rounded, one primary action.
2. Device wall: color variety comes from the product screens, while the chrome stays lavender.
3. News row: three cards with dates in the first line of each text block, titles in a larger weight, descriptions in the ink color `{colors.ink}`.
4. Expressive section: a paragraph with five inline purple links as the navigation into the guideline areas.
5. Footer: starts with the lowercase `material_design` wordmark text and a short description.

## Elevation & Depth

The docs site is almost flat. The only box shadow measured on the home page is the two-layer `rgba(0,0,0,0.3) 0 1px 2px 0, rgba(0,0,0,0.15) 0 1px 3px 1px` (one element); the Buttons page measured none. Separation comes from tinted container fills: `{colors.page-body}` for the page, `{colors.canvas}` for panels, `{colors.surface-lavender}` for image tiles, and slightly different off-whites (#f5eff1, #f2ecee) for subtle steps. The hover state for the rail controls changes the label color, not the shadow.

## Shapes

Docs-site radii measured on the home page, by frequency: 24px (39 elements), 4px (29), 16px (10), 32px (2), 48px (2) and one 50% circle.

| Token | Value | Source |
|---|---|---|
| `{rounded.xs}` | 4px | measured |
| `{rounded.sm}` | 16px | measured: rail controls |
| `{rounded.md}` | 24px | measured: cards, hero panel |
| `{rounded.lg}` | 32px | measured |
| `{rounded.xl}` | 48px | measured: CTA and nav-link pills |
| `{rounded.pill}` | 9999px | full capsule |
| `{rounded.shape-small}` | 8px | published `corner-small` |
| `{rounded.shape-medium}` | 12px | published `corner-medium` |
| `{rounded.shape-extra-large}` | 28px | published `corner-extra-large` |

The published scale in `_md-sys-shape.scss` is: none 0, extra-small 4, small 8, medium 12, large 16, extra-large 28, full 9999 (pixels), with directional variants such as `corner-large-top` (16px 16px 0 0).

## Components

Docs-site elements are measured on m3.material.io. Live Material Web components were measured on `https://material-web.dev/components/button/` (extractor now pierces shadow DOM); that site uses its own amber theme, so its colors are demo values (`{colors.demo-filled}`, `{colors.demo-tonal}`, `{colors.demo-on-tonal}`), not Material's baseline. Outlined buttons and text fields were not returned by the extractor (the text-field page yielded no candidates), so they are not declared.

### Material Web filled and tonal buttons (`button-filled`, `button-tonal`)
`md-filled-button`: fill #7f5700, white label, 14px/500 , `{rounded.pill}` (9999px), padding `10px 24px`, 40px tall. `md-filled-tonal-button`: fill #ffdca9, label #5c4316, same 14px/500, pill, 40px. A third filled example with a 0px radius and #006a6a fill is a customized demo, not the default shape.

### Primary button (`button-primary`)
Fill `{colors.primary}`, text `{colors.on-primary}`, Google Sans 24px/475, padding `0px 48px`, 80px tall, `{rounded.xl}` corners. This is the hero `Get started` button. Its hover state, as recorded for text controls, changes text color to `{colors.on-primary-hover}`.

### Navigation links (`nav-link`, `link`)
Google Sans Text 16px/500 in `{colors.primary}`, `{rounded.xl}` radius, 1px padding. On the Buttons page, in-page chips like `Resources` measured as `{colors.ink-strong}` text on `{colors.surface-lavender}` with 32px radius, 8px 16px padding and 36px height.

### Rail
Icon above caption, the selected item in a pill. The search control is a 56px-tall square with 16px radius on #f1d3f9; its text color changes on hover from #4d4256 to #271430.

### Cards (`card`)
Fill `{colors.surface-lavender}` for image tiles, `{colors.canvas}` for linked news cards, 24px (`{rounded.md}`) radius, no shadow, with date, title and a two-line description in the text cards.

### Content links
Inline links are `{colors.primary}` text; the capture shows them underlined.

### Imagery
Rounded phone mockups on tinted tiles, product-style illustration, and a Google I/O brand graphic on black.

### Buttons overview page (extra measurement)
`https://m3.material.io/components/buttons/overview` shows the same shell with a docs-article layout: the h1 `Buttons` at 88px/96px/475, an h2 `Availability & resources` at 45px/52px/475, body paragraphs at 16px/24px in `{colors.ink-strong}`, and 14px/20px chip labels. Radii measured on that page by frequency were 4px (35), 16px (13), 8px (9), 40px (5), 32px (4), 24px (4) and 20px (3), plus one panel with 40px bottom corners only. The page's text colors were `{colors.ink-strong}` first, then `{colors.ink}`, `{colors.primary}` (428 characters, mostly links) and a dark green #0f5223 on a pale green #c4eed0 chip. No box shadows were measured on it. The extractor's primary-CTA guess on this page was the `Resources` chip, not a Material button, so no component-level button values are claimed from it.

## Design System Architecture

Material Design is itself the design system, and its implementations are public:

- [material-components/material-web](https://github.com/material-components/material-web): a Lit-based web-components library, Apache-2.0, whose README states it is in maintenance mode pending new maintainers. Its `tokens/` folder holds versioned SCSS for reference palette, system color, shape, typescale and typeface.
- [Material Web color theming](https://material-web.dev/theming/color/), [typography](https://material-web.dev/theming/typography/) and [shape](https://material-web.dev/theming/shape/): describe `--md-sys-color-*`, `--md-sys-typescale-<scale>-<size>-<property>` (five scales, each in small, medium and large) and `--md-sys-shape-<token>` custom properties, with `--md-ref-typeface-brand` and `--md-ref-typeface-plain` for global font changes.
- [material-color-utilities](https://github.com/material-foundation/material-color-utilities): libraries (C++, Dart, Java, Swift, TypeScript, Kotlin) for color generation and the HCT color space.

The architecture is therefore three-layered: reference tokens (palettes, typefaces), system tokens (color roles, type scale, shapes) and component tokens in each component's styles. The official design guidance pages on m3.material.io are client-rendered and could not be read through the fetch tool, so claims about the guidance text are not made here.

## Do's and Don'ts

### Do
- Pick colors from role pairs (`primary` with `on-primary`, `surface` with `on-surface`) as the published tokens do.
- Use pill-shaped primary actions with a large fixed height on marketing surfaces, as the measured CTA does.
- Use a tinted page and container ladder (`{colors.page-body}`, `{colors.canvas}`, `{colors.surface-lavender}`) instead of shadows.
- Use generous rounding for containers: 24px for cards on the docs site; 28px as the published extra-large corner.
- Load Roboto when no other typeface is set.

### Don't
- Do not copy the docs site's #6442d6 into an app and call it baseline Material; the published baseline primary is #6750a4.
- Do not add heavy shadows; the measured home page has one faint two-layer shadow.
- Do not mix brand and plain typefaces arbitrarily; the system distinguishes them by token.
- Do not rely on these tokens for dark mode: the dark values were not measured here (the site has a dark toggle, and the published dark scheme uses primary80 and neutral6 per the SCSS).

## Responsive Behavior

Measured at 390px: the h1 drops from 88px/96px to 45px/52px. Other mobile roles were not separately recorded in this file. The rail behavior at small widths was not captured, so no claim is made about it. The home page measured 392 visible elements at 1280px.

### Touch targets
The desktop hero CTA is 80px tall, the page chips are 36px tall, and the search rail control is 56px tall.

## Iteration Guide

1. Choose whether you are reproducing the docs site (use `{colors.primary}` and Google Sans) or the baseline system (use `{colors.baseline-primary}` and Roboto).
2. Build the page from three tinted fills before adding borders: `{colors.page-body}`, `{colors.canvas}`, `{colors.surface-lavender}`.
3. Make the primary button a 48px-radius capsule; scale it by height rather than adding shadows.
4. Set headings at weight 475 (variable) or 400 if the font is not variable.
5. Round containers by size: 16px for controls, 24px for cards, 28px for the largest published corner.
6. Show product screens as rounded device mockups on tinted tiles.
