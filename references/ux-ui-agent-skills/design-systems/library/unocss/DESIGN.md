---
version: alpha
name: UnoCSS
category: "Atomic CSS & Utilities"
description: "UnoCSS is an on-demand atomic CSS engine; its VitePress docs site uses the system UI sans stack, #3c3c43 ink on a #f6f6f7 and white canvas, a #00a98e teal brand with a #009ff7 gradient partner, and pill buttons with 20px radius and 12px-radius feature cards."
colors:
  canvas: "#ffffff"
  page-largest: "#f6f6f7"
  ink: "#3c3c43"
  ink-muted: "#67676c"
  primary: "#00a98e"
  on-primary: "#ffffff"
  surface-chip: "#ebebef"
  primary-hover: "#4ad1b4"
  brand-lighter: "#78fadc"
  brand-dark: "#008269"
  brand-darker: "#005d47"
  brand-next: "#009ff7"
  footer-border: "#e2e2e3"
typography:
  display:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 56px
    fontWeight: 700
    lineHeight: 64.0002px
    letterSpacing: "-0.4px"
  display-mobile:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: "-0.4px"
  heading:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  subheading:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
    letterSpacing: "-0.2px"
  body:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 24.0001px
  button:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 38.0001px
  link:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 11px
  xl: 12px
  2xl: 20px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 0px 20px
    height: 40px
    borderColor: "{colors.primary-hover}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.surface-chip}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 0px 20px
    height: 40px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    borderColor: "{colors.page-largest}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 32px
    borderColor: "{colors.footer-border}"
---

## Overview

The unocss.dev homepage, captured at 1280px, is a standard documentation-site landing page: light, airy, and organized as a feature grid. A top bar holds the two-tone UnoCSS logo mark and wordmark, a "Search" field with a keyboard shortcut chip, menu items with chevrons (Guide, Integrations, Config, Presets, Resources, and a version selector), a light/dark switch and three social icons. The hero places the name "UnoCSS" in a blue-to-teal gradient at 56px above the dark-grey bold strapline "Instant On-demand Atomic CSS Engine", then a lighter line "Customizable · Powerful · Fast · Joyful" and four pill buttons: a filled teal "Getting Started" and three light-grey ones (Interactive Docs, Playground, Tutorial). At the right, a soft cyan glow sits behind a logo-like composition of three rounded geometric shapes (an arch, a quarter-round block and a circle) in translucent teal.

Under the hero is a three-column, four-row grid of twelve cards on a pale grey (#f6f6f7) background. Each card has a small icon tile at the top left, a bold title (Fully Customizable, Instant, Lightweight, Rich Integrations, Shortcuts, Attributify Mode, Pure CSS Icons, Variant Groups, CSS Directives, Compilation Mode, Inspector, CDN Runtime Build), one or two lines of grey description, and often a teal link with an arrow (for example "Getting Started" or "@unocss/runtime"). The page ends with a "Sponsored by" block with centered tiers: Special Sponsor, Platinum, Gold and Silver, each as a row of logos. The copy is terse, technical and slightly playful: "No parsing, no AST, no scanning. It's 5x faster than Windi CSS or Tailwind CSS JIT." and "Zero deps and browser friendly: ~6kb min+brotli".

## Colors

- **Canvas #ffffff** is the page background; **page-largest #f6f6f7** is the largest area in the measurement (the card grid and hero zone) and the card fill. **Surface-chip #ebebef** fills the secondary pill buttons and icon tiles.
- **Ink #3c3c43** is the color of headings, nav text and, on the docs pages, nearly all copy (2,105 characters on the guide page). **Ink-muted #67676c** is the card-description grey and the most-read color on the homepage (686 characters against 364 for #3c3c43).
- **Primary #00a98e** is the filled button, link and tip color; **primary-hover #4ad1b4** is its lighter state and the 1px border on the filled button.
- The brand ramp comes straight from the site's `rainbow.css`: `--vp-c-brand-1` #00a98e, `--vp-c-brand-light` #4ad1b4, `--vp-c-brand-lighter` #78fadc, `--vp-c-brand-dark` #008269, `--vp-c-brand-darker` #005d47 and `--vp-c-brand-next` #009ff7. The last is the gradient partner of the hero name and the hero image glow (`linear-gradient(120deg, brand-1 30%, brand-next)`).
- **Footer-border #e2e2e3** is the divider color on the docs pages (section rules and the footer).

The `rainbow.css` file also defines a 40-second `rainbow` keyframe animation that steps the whole brand ramp through other hues when the `rainbow` class is on the html element; without it, the six values above are fixed (`animation: none`). The captured page shows the fixed teal.

## Typography

There is no webfont. The page declares the system stack `ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif` plus emoji fonts, and `ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace` for code. The sans stack carries all measured text on the homepage (1,308 characters); the guide page adds 769 characters of monospace code.

- **Display**: 56px/64px, weight 700, tracking -0.4px; on mobile 32px/40px with the same tracking.
- **Subheading**: 20px/28px, weight 600, tracking -0.2px.
- **Heading**: 16px/24px, weight 600, for card titles and nav links.
- **Body**: 14px/24px, weight 500 for card descriptions; on the guide page body copy measures 16px/28px at weight 400.
- **Button**: 14px, weight 600, line height 38px. **Link**: 16px, weight 500.

Doc-page headings measure 32px/600 (h1) and 24px/600 (h2) with a 1px #e2e2e3 rule above h2.

## Layout

The layout follows VitePress's home and doc templates. The home page is a left-aligned hero, then a 3-column grid of equal cards, running between the same left and right insets as the hero. Spacing values measured: 4, 6, 8, 10, 12, 16, 20, 24, 32 and 64px. Cards stack icon tile, title, text and link. The sponsor block is centered, with generous vertical gaps between tiers. Docs pages use the VitePress sidebar of width 17rem (`--vp-sidebar-width`) next to a content column.

## Elevation & Depth

Flat. Cards are distinguished from the page only by their #f6f6f7 fill, and the card border color equals the fill. The one decorative depth effect is the blurred glow behind the hero image (`--vp-home-hero-image-filter: blur(80px)` over the brand gradient, set to 0.8 opacity and 0.2 on hover). The stylesheet defines `--vp-shadow-5` as `0 18px 56px #00000029, 0 4px 12px #00000029` for floating menus; it is not visible in the capture.

## Shapes

Measured radii: full pill (42 elements), 12px (12, the cards), 6px (12), 20px (4, the main buttons), 50% (3), 8px (2, the search field and code-block corners) and one each of 4px and 11px. The primary button radius is 20px, which at 40px tall produces a full capsule. Feature cards are 12px; code blocks round only their bottom or top corners at 8px.

## Components

- **Primary button** ("Getting Started"): #00a98e fill, white 14px/600 text, 0px 20px padding, 40px height, 20px radius, 1px #4ad1b4 border; hover fills with #4ad1b4.
- **Secondary buttons** (Interactive Docs, Playground, Tutorial): #ebebef fill, #3c3c43 text, same 40px/20px shape.
- **Search**: 8px radius, #f6f6f7 fill, grey text and a keyboard hint.
- **Feature card**: #f6f6f7, 12px radius, 24px-class padding, an icon tile, bold 16px title, 14px grey description, teal arrow link.
- **Links**: #00a98e at 14px or 16px with weight 500.
- **Code block** (docs): fill `#7d7d7d0a` (about 4% grey), 8px corner radius, monospace 12px/18px.
- **Footer** (docs pages): #e2e2e3 is the measured footer border; the "Suggest changes to this page" link is teal.

## Design System Architecture

UnoCSS is a CSS engine with presets; it does not ship a single visual design system for its docs. The docs site is built on VitePress's default theme and customised through variable overrides, documented in the repository: [`docs/.vitepress/theme/vars.css`](https://github.com/unocss/unocss/blob/main/docs/.vitepress/theme/vars.css) overrides `--vp-*` variables (brand button colors, code block background, hero gradient and blur), and [`docs/.vitepress/theme/rainbow.css`](https://github.com/unocss/unocss/blob/main/docs/.vitepress/theme/rainbow.css) defines the brand ramp and the optional rainbow animation. [`overrides.css`](https://github.com/unocss/unocss/blob/main/docs/.vitepress/theme/overrides.css) adds small fixes. The live page also exposes UnoCSS's own utility-engine variables (`--un-shadow`, `--colors-*`, `--text-*-fontSize`, `--font-mono`), which are consistent with the site using UnoCSS utilities, though I did not confirm that from the source. Beyond the docs theme, I did not open the preset theme source files, so the utility theme scale (the library's palette) is not described here.

## Do's and Don'ts

- Do use #00a98e for primary actions and links, and its lighter state #4ad1b4 for hover.
- Do keep headings in #3c3c43 and descriptions in #67676c.
- Do use pill buttons and 12px cards with flat fills.
- Do use the system font stacks, not webfonts.
- Don't use drop shadows on cards; use the soft grey fill.
- Don't use the gradient partner #009ff7 for text or buttons other than the hero name and glow.
- Don't set long copy in weight 700; reserve it for display text.
- Don't introduce a second teal; use the ramp.

## Responsive Behavior

On a 390px viewport the display heading drops from 56px/64px to 32px/40px, with the same -0.4px tracking. Only the mobile headline metrics were measured; the reflow of the nav and the three-column card grid at mobile width was not captured, so it is not described here.

## Iteration Guide

1. Set the page in system fonts with #3c3c43 headings, #67676c descriptions and a #ffffff or #f6f6f7 canvas.
2. Use #00a98e for the one primary pill; use #ebebef pills for secondaries.
3. Build feature grids from 12px #f6f6f7 cards with an icon tile, bold title, short description and teal link.
4. Take any other brand shade from the ramp: #4ad1b4, #78fadc, #008269, #005d47.
5. Use the gradient to #009ff7 only for the hero name and glow.
