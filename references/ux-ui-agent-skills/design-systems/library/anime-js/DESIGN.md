---
version: alpha
name: Anime.js
category: "Tech & AI"
description: "Anime.js: warm near-black canvas #252423, stone text #b4b1af, DIN 800 display and 64px 700 hero, uppercase Mono labels, lime #b7ff54 accent, square-cornered buttons with 1px hairline borders; a JavaScript animation engine site."
colors:
  canvas: "#252423"
  ink: "#b4b1af"
  primary: "#2a2928"
  on-primary: "#b4b1af"
  accent-lime: "#b7ff54"
  ink-soft: "#d5d3d1"
  code-fg: "#abb2bf"
  code-blue: "#61aeee"
  code-green: "#98c379"
  surface-input: "#353432"
  hairline: "#615e5b"
  nav-link-text: "#f6f4f2"
typography:
  display:
    fontFamily: DIN, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 40px
    fontWeight: 800
    lineHeight: 38px
    letterSpacing: "-0.5px"
  display-mobile:
    fontFamily: DIN, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 32px
    fontWeight: 800
    lineHeight: 30.4px
    letterSpacing: "-0.4px"
  heading:
    fontFamily: DIN, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 64px
    fontWeight: 700
    lineHeight: 55.36px
  body:
    fontFamily: DIN, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 25px
  button:
    fontFamily: Mono, monospace
    fontSize: 12px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: 0.12px
    textTransform: uppercase
  nav:
    fontFamily: DIN, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 600
    letterSpacing: 0.12px
    textTransform: uppercase
  link:
    fontFamily: DIN, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 4px
  sm: 12px
  md: 20px
  lg: 50px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 7.37px
  s4: 8px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 24px
  s9: 28px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 8px 0px 40px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 8px 0px 40px
    height: 48px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 0px 24px
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.surface-input}"
    textColor: "{colors.nav-link-text}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px
    height: 44px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.hairline}"
    rounded: "{rounded.none}"
    padding: 0px 24px 24px
---

## Overview

animejs.com is the home page of Anime.js, a JavaScript animation library, and it presents the product the way a toolmaker would: a dark, warm-gray page with an all-caps monospace header (Docs, Easings, Learn, Examples, GitHub, Discord, Sponsor, plus a version switcher listing 4.0.0, 3.2.2 and 2.1.0), a hero reading "All-in-one animation engine." and "A fast and flexible JavaScript library to animate the web.", an `npm i animejs` install line with a "Learn more" button, a "Sponsored by" strip, and feature sections titled "The complete animator's toolbox", "Intuitive API", "Per property parameters", "Flexible keyframes system", "Built-in easings" and "Enhanced transforms". The measured page is 1280px wide and 18842px tall.

The page is a live demo of its own library: sections are animated demonstrations rather than screenshots. The stored full-page capture for this site is almost entirely black, so it shows only a preloader arc; every value in this file comes from the DOM measurement instead of the image, and nothing here is read off the capture.

## Colors

The page is built on a stepped warm-gray scale. `canvas` is {colors.canvas} (#252423), the dominant background (measured area weight 706). `primary` ({colors.primary}, #2a2928) is the fill of the main button, a hair lighter than the canvas. `surface-input` is #353432, the fill of text inputs. `ink` is #b4b1af, the most-read text color, and `ink-soft` is #d5d3d1 for body paragraphs. `nav-link-text` is #f6f4f2, near white, used for navigation links and the hero heading. `hairline` is #615e5b, the border color of buttons and inputs. On hover the measured "LEARN" link goes from #b4b1af to #f6f4f2, and the "LEARN MORE" button text goes from #93908d to #b4b1af with its border from #615e5b to #93908d.

The single saturated brand accent is `accent-lime` ({colors.accent-lime}, #b7ff54). Code samples use a separate syntax palette that appears in the measured text colors: `code-fg` #abb2bf, `code-blue` #61aeee, `code-green` #98c379. The stylesheet declares a large `--hex-*` custom-property scale (lime, turquoise, cyan, sky, king blue, indigo, purple, magenta, pink, red, corail, orange, yellow, citrus, green, each with steps 1 to 8, plus bg, fg, black and white grays) so demos and syntax highlighting can pick tinted dark backgrounds; the h1 text itself is #302e2d, a color a single step above the canvas, so the large "The complete animator's toolbox" heading reads as a ghosted watermark rather than as high-contrast type.

## Typography

Two faces are loaded: "DIN" (variable, weight range 100 to 900, with an oblique axis) and "Mono". All display and body copy is DIN with Helvetica Neue, Helvetica and Arial as fallbacks; all labels and buttons are Mono.

- `display`: DIN 800, 40px, 38px line height, -0.5px tracking (the "complete animator's toolbox" heading).
- `heading`: DIN 700, 64px, 55.36px line height (the hero "All-in-one animation engine.").
- `body`: DIN 600, 20px, 25px line height.
- `link`: DIN 400, 16px.
- `button` and `nav`: 12px, weight 600, 0.12px tracking, uppercase; buttons use Mono with a 24px line height, nav links use DIN.

Headings are set with line height below the font size (38px on 40px, 55.36px on 64px), a tight, poster-like setting. The `--text-*` scale in the stylesheet runs .75rem (xxxs), 1rem (s), 1.25rem (l), 1.5rem (xl), 2rem (xxl), 2.5rem (xxxxl). "DIN" and "Mono" are the site's own loaded files; they are not substituted here.

## Layout

The page is a long single scroll with a fixed-width docs-style grid of 12-rem demo tiles (`--docs-demo-height: 12rem`, `--docs-sidebar-width: 14rem` for the documentation area). The stylesheet also declares a rem margin scale starting at .25rem (`--margin-xxxs`), 1rem (`--margin-s`) and 3rem (`--margin-xxl`). Spacing values measured on the page are 1, 4, 7.37, 8, 12, 14, 16, 24, 28 and 32px. The nav strip is 71px tall with 24px horizontal padding.

## Elevation & Depth

There is almost no elevation. The measured shadows are `none` (2 uses) and 1px ring shadows in solid colors (`0 0 0 1px #ff0`, `red`, `green`, `#ff320080`) that belong to demo elements, not to the interface. `--shadowColor` is #212121 in the root. Depth is created with tint steps of the warm gray and with the animated demos themselves.

## Shapes

The generated tokens keep `none` (0px) for buttons, nav and footer, 4px (`xs`) for inputs, and also 12px, 20px, 50px and 9999px values that come from the page's CSS. The CSS corpus lists radii 0px (4 uses), 10px, 50px, 20px, 3px and 16px, one use each. The stylesheet defines `--br-xs: .125rem`. The measured hover capture records the "LEARN MORE" button with a 4px radius while the main-button token is 0px; both values are as measured and the difference is not resolved here.

## Components

- `button-primary` / `button-secondary`: {colors.primary} fill, {colors.ink} Mono text 12px uppercase, 48px tall, padding 0px 8px 0px 40px, 1px #615e5b border in the hover capture.
- `nav-link`: DIN 600 12px uppercase in {colors.nav-link-text}, nav padding 0px 24px.
- `text-input`: {colors.surface-input} fill, Mono 12px, 4px radius, 12px padding, 44px tall.
- `link`: DIN 16px in {colors.ink}.
- `footer`: canvas background, hairline-gray text, padding 0px 24px 24px.

I removed the generated `card` token, because it paired the lime fill with identical lime text and a pill radius and was taken from an animated demo element mid-transform.

## Design System Architecture

Anime.js publishes documentation at animejs.com/documentation and a GitHub link appears in the header, but no separate design-system or brand-guidelines page was opened, so this file describes the de-facto system from the shipped CSS: custom properties for colors (`--hex-<hue>-<step>`), type (`--text-xxxs` to `--text-xxxxl`, `--font-body`), spacing (`--margin-*`) and radius (`--br-xs`). Source: the shipped page at [animejs.com](https://animejs.com/) (the stylesheet and inline script were read from the home page itself). The page exposes its asset locations in an inline `window.paths` object (demos, easings JSON, sponsor lists).

The practical consequence for a reproduction is that the system is a token ladder rather than a component kit: every gray, tint and size is a named custom property, and the interface chrome (header, buttons, inputs, footer) uses only a handful of them. Anything that needs a hue beyond lime, for example a chart or a demo tile, should be pulled from the same `--hex-*` scale at its darker steps (6 to 8) when it needs to sit on the canvas, and at its lighter steps (1 to 3) when it is a foreground mark. Those scale steps are published in the page's root and can be cited from it; no usage rule for them was found, so none is stated here.

## Do's and Don'ts

- Do keep the near-black warm-gray canvas and use lime only as the single accent.
- Do set labels and buttons in uppercase Mono at 12px.
- Do use DIN at heavy weights (700 to 800) with line height tighter than the font size for large headings.
- Don't add a second saturated accent next to lime; the tinted `--hex-*` steps are for demos and code.
- Don't use rounded pill buttons; buttons are square.
- Don't rely on the stored capture for design values; it is black.

## Responsive Behavior

Measured at 390px: the display heading drops from 40px to 32px (line height 30.4px, -0.4px tracking), and the hero heading from 64px to 40px (34.6px line height). Navigation, layout columns and spacing at mobile width were not measured; the extractor recorded no mobile layout block for this page.

## Iteration Guide

1. Start from canvas #252423 and ink #b4b1af; use #f6f4f2 for emphasis.
2. Use lime #b7ff54 once per view.
3. Type: DIN 800 40px/38px for section titles, DIN 700 64px for the hero, Mono 12px uppercase for controls.
4. Use 1px #615e5b outlines on controls and lighten them to #93908d on hover.
5. Re-run `node web/scripts/verify-designs.mjs --slug=anime-js` after renames.
