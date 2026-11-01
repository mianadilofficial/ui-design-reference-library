---
version: alpha
name: Gary et la forêt infinie (Garance)
category: "Culture & Events"
description: "Gary et la forêt infinie (play.garance.com) is a French-language game page by Garance: a full-viewport illustrated forest scene with cream #fbffdc UI text in Kilimanjaro 400 (14.6286px), a 65px nav bar, chunky 29.2573px-radius controls, a green #006468 palette and orange #f47f46 action buttons."
colors:
  canvas: "#006468"
  page-body: "#fbffdc"
  ink: "#fbffdc"
  primary: "#fbffdc"
  surface: "#000000"
  forest-green: "#006468"
  forest-green-dark: "#005053"
  forest-green-light: "#81e4b6"
  menu-green: "#008970"
  sky-blue: "#6be7ec"
  action-orange: "#f47f46"
  dark-orange: "#d96933"
  brown: "#b5441a"
typography:
  display:
    fontFamily: Kilimanjaro, -apple-system, Roboto, "Open Sans", sans-serif
    fontSize: 14.6286px
    fontWeight: 400
    lineHeight: 21.943px
  display-mobile:
    fontFamily: Kilimanjaro, -apple-system, Roboto, "Open Sans", sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  body:
    fontFamily: Kilimanjaro, -apple-system, Roboto, "Open Sans", sans-serif
    fontSize: 20.2778px
    fontWeight: 400
    lineHeight: 30.4167px
rounded:
  xs: 4.57px
  sm: 29.26px
  pill: 9999px
spacing:
  s1: 24.33px
  s2: 29.26px
  s3: 64.67px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
---

## Overview

https://play.garance.com/ (title "Gary et la forêt infinie - Garance", language fr) is the play page of "Gary and the endless forest", a game by Garance. The measured document is 1280px wide and only 800px tall: the page is a single viewport, and the capture shows a full-screen illustrated scene rather than a content layout. Layered flat-vector forest foliage in several greens frames a log cabin, a small bear character in an orange hat holding a wave, red berries, a purple beetle and a rounded logo lockup reading "Gary et la forêt infinie" in cream letters on a dark teal plaque. Under the character, cream centred text says "Une cueillette qui porte ses fruits", above a squarish orange button labelled "C'EST PARTI !". At the top left is the Garance logo with the word "Garance"; at the top right is a rounded orange menu button with two horizontal bars.

The DOM text the extractor measured is minimal: a nav containing "Garance" and a counter "0", and footer-like links "Mentions légales", "Cookies" and a "Rep..." entry. The measured palette, type and shapes therefore describe the UI chrome around the illustration; the illustration itself is artwork, not tokens. The studio's own tone, from the one visible tagline, is warm, short and French-language.

## Colors

Measured text colour is a single value: `{colors.ink}` (#fbffdc, cream, `--ui-color-garance-cream`), on all 77 measured characters; `primary` repeats it. The `html` background is the same cream and is kept as `{colors.page-body}`, but it is never seen: two full-viewport WebGL canvases (`canvas.webgl-canvas`) paint the illustrated forest over it. `{colors.canvas}` is #006468 (`--ui-color-garance-green`), the one flat CSS surface that fills the viewport: `.preloader-background`, the full-screen loading view on which the cream Garance logo and percentage counter appear before the scene fades in (recorded probe, see SOURCES.json `_probes`). The loaded scene itself is illustration in the same teal-green family. `{colors.surface}` (#000000) is the other measured background (area weight 0).

The site's stylesheet publishes a "garance" palette as root variables (measured in the extraction): cream #fbffdc, green #006468, darker green #005053, even-darker green #023031, light green #81e4b6, alt light green #75e1ac, hover light green #99f3cf, electric green #93d244, sky blue #6be7ec, daintree #032530, menu background #008970, orange #f47f46, dark orange #d96933, light orange #ff9968, yellow #f0954a, brown #b5441a, dark brown #792b0e, light brown #d14d1d, pink #f080b8, dark pink #cc6398, purple #572b78, dark purple #3d1b58, plus neutrals #fff, #eee, #838383, #555, #000 and an error red #f00. Of these, the greens, cream and the orange family match what the capture shows; a representative set is tokenised below as published values. The Axeptio consent widget's fonts (Axeptio Source Sans 3) are third-party.

## Typography

Kilimanjaro is the only measured family (77 characters, weight 400), with the stack -apple-system, Roboto, "Open Sans", sans-serif. Kilimanjaro is Garance's display face, shown in the rounded, heavy letters of the logo lockup in the capture; it is a custom face, and a rounded bold sans such as the fallback stack is the nearest substitute. Measured sizes are 14.6286px/21.943px (nav and links, `display` token), 20.2778px/30.4167px (the counter), 18.2858px and 21.943px (by characters), and 12px/18px on mobile. The base text size is published as `--base-text` = 22px multiplied by a height-demultiplier variable (`--h-demult`), so type scales with viewport height. No letter-spacing, uppercase transform or weight other than 400 was measured; the capture shows uppercase on the call-to-action and plaque letters, which were drawn in artwork or canvas and are not measured text.

## Layout

The layout is a full-viewport stage. Navigation is a 65px-high bar across 1280px with the Garance link (114px wide) at the left and a menu button at the right. The measured paddings are 24.3333px, 64.6667px and 29.2573px. The stylesheet publishes breakpoints xxs 400px, xs 450px, s 640px, sm 768px, md 1024px, lg 1200px, xl 1600px and xxl 1920px (`--ui-bps`), and viewport variables `--vp-height` and `--inner-height` (both 800px in the capture). Content is centred on the vertical axis; the cabin sits left, the character centre, the beetle right.

## Content and Voice

The visible copy is in French and kept to a handful of fragments: the title "Gary et la forêt infinie", the tagline "Une cueillette qui porte ses fruits" (roughly "a harvest that bears its fruit") and the imperative "C'est parti !" ("Let's go!"). Legal links use the standard French labels "Mentions légales" and "Cookies". The tone is gentle and child-friendly, led by character and scenery instead of copy, and the page contains no marketing blocks, prices, forms or product grids. Everything the player needs is the single start action and the menu button.

## Known Measurement Limit

The generator first set `canvas`, `ink` and `primary` to the same cream because the only measured text colour is #fbffdc and the `html` background is also #fbffdc; that pairing is unreadable and is not what a visitor sees, since WebGL covers the `html` background. A Playwright probe (recorded in SOURCES.json) found the visible flat ground: `.preloader-background` computes to rgb(0, 100, 104) = #006468 at 1440x900, and rendered pixels sampled on the loading screen read #006468. That value is now `canvas`; the cream stays as `ink` and `page-body`. The loaded forest scene is artwork, so its many greens are not tokens.

## Elevation & Depth

No box shadows were measured. Depth is painted into the illustration: overlapping foliage layers in lighter and darker greens, light shafts falling from the top, and a spotlight on the clearing under the character. UI elements are flat.

## Shapes

Measured radii: 29.2573px (4 elements, the large rounded buttons), 4.57145px (2) and 50% (1, a round element). The menu button and the call-to-action in the capture have markedly rounded, chunky outlines consistent with these values; the plaque around the logo is artwork. Foliage and characters use soft organic shapes rather than geometric ones.

## Components

- Brand link: "Garance" with a round "G" icon at the top left, cream 14.6286px text, 65px high bar.
- Menu button: rounded orange button at the top right with two horizontal bars.
- Call-to-action: orange squarish button labelled "C'EST PARTI !" with an upward arrow, centred under the tagline.
- Footer links: "Mentions légales", "Cookies", and a third entry beginning "Rep", in cream 14.6286px text.
- Counter: a "0" in 20.2778px cream text in the navigation (its function was not verified).
- Consent widget: Axeptio (third-party); not documented as brand UI.

## Design System Architecture

No public design system or brand guidelines page was reached for this game. The stylesheet exposes a `--ui-*` token layer: colours (`--ui-color-garance-cream`, `--ui-color-garance-green`, `--ui-color-garance-orange` and so on), breakpoints (`--ui-bps`), a `--base-text` unit of 22px, a `--padding` equal to that unit, and viewport helpers (`--vp-height`, `--inner-height`, `--scrollbar-width`). This is a de-facto system shared across Garance's web experiences, using a named studio palette and a height-scaled base unit rather than a documented component library.

## Do's and Don'ts

- Do use the cream #fbffdc for text and logo letters over the green #006468 ground and the green scene.
- Do use warm orange (#f47f46 family) for the main play action against the green background.
- Do build scenes in layered flat vector greens with a clearing and light shafts.
- Do use chunky rounded corners (29.2573px) on controls.
- Don't use shadows or gradients on interface controls; none were measured.
- Don't treat the consent widget's Source Sans typography as brand type.
- Don't present #0000ee-style default link colours; links here are cream.

## Responsive Behavior

At 390px the navigation measured 60px high with 12px/18px text; the footer link text was 12px; the counter was 15px/22.5px; and the sizes recorded by characters were 20px (34), 12px (30), 16px (12) and 15px (1). Layout reflow of the illustration, button positions and menu behaviour on mobile were not measured.

## Iteration Guide

1. Start from the illustration: layered greens, cream type, orange action.
2. Use Kilimanjaro 400 for UI text at 14.6286px, scaled by viewport height through a base unit of 22px.
3. Round controls generously (29.2573px) and keep them flat.
4. Take colours from the published `--ui-color-garance-*` variables rather than new ones.
5. The loading screen is the flat #006468 canvas with the cream logo. Anything not listed here, such as hover states and dark mode, was not measured.
