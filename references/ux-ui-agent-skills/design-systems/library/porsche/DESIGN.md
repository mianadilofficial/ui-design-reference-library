---
version: alpha
name: Porsche
category: "Design Systems"
description: "Porsche's site is built on its own Porsche Design System: Porsche Next type at 16px/400, black #010205 buttons with 12px radius and 56px height, white #ffffff canvas with full-bleed dark car photography, 24px and 32px rounded image tiles, and frosted translucent grey secondary buttons."

colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#010205"
  on-primary: "#ffffff"
  ink-on-dark: "#fafbff"
  ink-on-dark-muted: "#f6f6f8ab"
  hairline: "#4f505953"
  surface: "#f1f1f4"
  surface-dark: "#19191a"
  frosted-strong: "#6465723c"
  frosted-on-dark: "#9c9c9f4d"
  info: "#1a44ea"
  success: "#197e10"
  warning: "#ac5102"
  error: "#ba171f"
typography:
  display:
    fontFamily: "\"Porsche Next\", \"Arial Narrow\", Arial, \"Heiti SC\", SimHei, sans-serif"
    fontSize: 66.784px
    fontWeight: 400
  button:
    fontFamily: "\"Porsche Next\", \"Arial Narrow\", Arial, \"Heiti SC\", SimHei, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 12px
  md: 14.88px
  lg: 24px
  xl: 32px
  pill: 9999px
spacing:
  sp-1: 1px
  sp-2: 2px
  sp-4: 4px
  sp-6: 6px
  sp-8: 8px
  sp-10: 10px
  sp-12: 12px
  sp-16: 16px
  sp-32: 32px
  sp-48: 48px
  sp-80: 80px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 56px
    padding: 16px 28px
  button-secondary:
    backgroundColor: "{colors.frosted-strong}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 56px
  button-on-dark:
    backgroundColor: "{colors.frosted-on-dark}"
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 56px
  card:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-on-dark}"
    rounded: "{rounded.xl}"
---

## Overview

The Porsche home page (the capture is the Thailand / English storefront, redirected from porsche.com) is a cinematic, car-first page with almost no interface chrome. At capture time a white cookie dialog ("Your cookie settings. Personalised experiences at full control.", with an "Accept all" button and an "Only necessary cookies" button) sits over a dark hero that has a faint red glow and a frosted "Discover more" button peeking out beneath it. Above it are a region bar ("You are currently seeing contents for: Thailand / English", with a "Change" link) and a header with a "Menu" hamburger at left, the spaced-out PORSCHE wordmark centred and a flag at right.

Beneath the hero the page turns white. Three small image teasers (Adventure Accessories., Victory at Petit Le Mans., Cayenne.) are rounded photo cards with white text and a circular arrow button. Then a large, black, sentence-case headline, "Your Porsche journey starts now.", leads into a two-column grid of tall model tiles (911, 718, Taycan, Panamera), each a full-bleed photograph with the model's logotype at the top, a small frosted chip ("Gasoline") or availability notice ("Model unavailable for order. Explore available inventory.") and a one-line description ("Iconic sports car with rear engine: 2 doors, 2+2 seats.") above a circular arrow button.

The voice is confident and terse: short declarative headings ending in full stops, factual spec lines instead of marketing adjectives. Imagery is dramatic, in-motion photography of cars in desert, road and architectural settings, with a dark vignette at the bottom of each tile so white text stays legible.

## Colors

`{colors.canvas}` (#ffffff) is the page ground in the light section and `{colors.ink}` (#000000) the most-read text color. The brand's own near-black, `{colors.primary}` (#010205), fills the primary button and equals the dark-theme canvas in the system's color variables; `{colors.on-primary}` (#ffffff) is the label on it. On dark sections text is `{colors.ink-on-dark}` (#fafbff), with `{colors.ink-on-dark-muted}` (#f6f6f8ab) for secondary copy.

Neutral surfaces come from the system's color tokens: `{colors.surface}` (#f1f1f4) in light mode and `{colors.surface-dark}` (#19191a) in dark mode. Secondary buttons are translucent: `{colors.frosted-strong}` (#6465723c) on light backgrounds and `{colors.frosted-on-dark}` (#9c9c9f4d) over photography. `{colors.hairline}` (#4f505953) is a translucent grey border. The state colors are the light-theme values of the system's feedback tokens: `{colors.info}` (#1a44ea), `{colors.success}` (#197e10), `{colors.warning}` (#ac5102) and `{colors.error}` (#ba171f); each has a different dark-theme value in the shipped CSS. The color system is built on the CSS `light-dark()` function, so every semantic color has a light and a dark value.

## Typography

Everything is set in **Porsche Next**, the brand typeface, with the stack Arial Narrow, Arial, Heiti SC and SimHei behind it. The Porsche Design System states that it ships Porsche Next in three weights (normal, semibold, bold) covering Latin, Greek, Cyrillic, Arabic and Vietnamese, and uses system fonts for CJK scripts. Only weights 400 and 600 are loaded on the home page and 400 is the only weight measured on text. Body and button text is 16px/24px (`{typography.button}`), with 14px and 12px used for captions and chips. The big headline measured 66.784px at the 1280px capture, at weight 400 (`{typography.display}`); its line height was not measured. That size matches the system's fluid `--p-typescale-4xl` variable (clamp from 2.03rem to 5.61rem) evaluated at this viewport width. Porsche Next is proprietary, so Arial Narrow and Arial are the substitutes named by the system itself.

## Layout

The page is a stack of full-width bands: dark hero, then a white band holding a row of three teasers, a very large headline aligned to the left edge, and a two-column grid of tall model tiles with an even gutter. The system's spacing tokens are `--p-spacing-static-*` (1, 4, 8, 16, 32, 48, 80px) and fluid steps built with `clamp()` (for example `--p-spacing-fluid-md`: 16px at small widths growing with the viewport), and the porsche.com layer repeats them as `--pcom-spacing-*`. Section edges are generous; the teaser row is narrower than the model grid, centred above it.

## Elevation & Depth

Depth comes mostly from photography and from darkening gradients on image tiles, plus frosted translucency (the system defines a 32px frosted blur variable). Three shadows are defined as tokens: small (0 3px 8px at 16% black), medium (0 4px 16px) and large (0 8px 40px), though none was measured on the home page itself. The cookie dialog is a white rounded sheet over a dimmed page.

## Shapes

Corners are rounded and consistent. Buttons use `{rounded.sm}` (12px) and small controls `{rounded.xs}` (8px). The photo teasers and model tiles use the larger rounded rectangles, `{rounded.lg}` (24px, the most frequent measured radius after the pill) and `{rounded.xl}` (32px); which of the two belongs to which card type was not isolated. A 14.88px radius is also measured and its element is unexplained. Arrow buttons inside tiles are circles (`{rounded.pill}`). The system's published radius tokens run 2, 4, 6, 8, 12, 16, 24, 32 and full.

## Components

**Primary button** (`button-primary`): #010205 fill, white 16px/400 Porsche Next label, 12px radius, 56px high, padding 16px 28px. Measured identically (apart from the label) on the home page's cookie dialog ("Accept all") and in the Porsche Design System's Button configurator (label "Some label"), so the cookie dialog's buttons match the system's Button.

**Secondary button** (`button-secondary`): translucent grey fill (#6465723c), #010205 label, same geometry ("Only necessary cookies").

**On-dark button** (`button-on-dark`): translucent light-grey fill (#9c9c9f4d) with #fafbff label ("Discover more" over the hero).

**Teaser and model tile** (`card`): full-bleed photo with a dark gradient, white text, a circular arrow button, optional frosted chip, 24px or 32px corners.

**Header**: transparent bar over the hero, "Menu" button at left, centred wordmark, region flag at right.

## Design System Architecture

Porsche publishes its system as the [Porsche Design System](https://designsystem.porsche.com) (documentation v4, release 4.8.0 at the time of reading): "an all-in-one toolkit ... with intuitive Figma libraries, robust Web Components, and comprehensive guidelines", with public npm packages for Angular, React, Vue, Next.js, Astro, React Router, Remix and vanilla JS, all built on Web Components with TypeScript and SSR support. Documentation sections cover Designing (Figma), Developing, Components with live configurators (Button, Heading, Display, Carousel, Flyout and many more), the Emotion style helpers (typography, color, spacing, shadow, media-query), and Must-know pages on typography, theme and accessibility. The theme page explains the native CSS `light-dark()` colour system with `.scheme-light`, `.scheme-dark` and `.scheme-light-dark` utility classes that can be nested.

The home page demonstrably uses this system: its root CSS carries the system's `--p-*` custom properties (`--p-color-primary`, `--p-color-canvas`, `--p-radius-*`, `--p-spacing-static-*`, `--p-typescale-*`, `--p-font-porsche-next`) alongside porsche.com-specific `--pcom-*` variables, and the primary button measured on the page equals the one measured on the system's Button page (#010205, 12px radius, 56px). Values in this file were therefore checked against the system's configurator pages. The `--ch-*` variables on the page belong to a further layer whose origin is not documented in the pages opened here.

## Do's and Don'ts

- Do let photography carry the page; keep UI chrome to a hamburger, a wordmark and a flag.
- Do use #010205 buttons with white labels on light sections and frosted translucent buttons over images.
- Do write short sentence-case headings that end with a full stop.
- Do round all image tiles (24px to 32px) and buttons (12px).
- Don't add a chromatic accent: the home page measures none, and the system's blue, green, orange and red are feedback colors.
- Don't vary weight for hierarchy on the home page: only weight 400 is measured on text, with size doing the work.
- Don't put black text on photography without a dark gradient behind it.
- Don't mix themes inside one section; use a scoped dark island (.scheme-dark) instead.

## Responsive Behavior

Typography and spacing are fluid: the typescale and spacing tokens are `clamp()` expressions, so the 66.784px headline measured at 1280px shrinks smoothly on narrower screens rather than at fixed breakpoints. The model grid is two columns at the capture width; its narrow-screen layout was not measured. The documentation lists a media-query helper among its Emotion styles, and the page defines responsive aspect-ratio variables for background media at xs through xxl, but their breakpoint widths were not read here.

## Iteration Guide

1. Choose a scheme (light, dark, or a dark island inside a light page) and take `{colors.canvas}`, `{colors.ink}` and `{colors.primary}` from it.
2. Set everything in Porsche Next at 16px/24px, with one fluid headline per section.
3. Use `button-primary` for the single main action and `button-on-dark` over imagery.
4. Round tiles at 24px to 32px and buttons at 12px; keep arrow buttons circular.
5. Read sizes and colors from the `--p-*` variables rather than copying hex values.
6. Check any new component against its configurator page on designsystem.porsche.com.
