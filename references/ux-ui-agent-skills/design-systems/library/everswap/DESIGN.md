---
version: alpha
name: EverSwap
category: "Tech & AI"
description: "EverSwap DeFi home page: a painterly mountain hero, Feature Display light serif and Britti Sans, off-white #fbfff4 text, a forest-green #203727 palette from root variables, a translucent pill Launch App button and a fluid type scale on a 16-column grid."
colors:
  dark-green: "#203727"
  light-green: "#e0ffab"
  light-green-2: "#bccca2"
  dark-link: "#516e5a"
  dark-link-2: "#62866d"
  charcoal: "#333338"
  canvas: "#203727"
  page-body: "#ffffff"
  ink: "#fbfff4"
  primary: "#fbfff4"
typography:
  display:
    fontFamily: "\"Feature Display\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  display-mobile:
    fontFamily: "\"Feature Display\""
    fontSize: 30px
    fontWeight: 200
    lineHeight: 42px
  nav:
    fontFamily: Times
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
rounded:
  sm: 3px
  pill: 1000px
spacing:
  s1: 16px
  s2: 35.56px
components:
  nav:
    textColor: "{colors.ink}"
    transform: matrix(1, 0, 0, 1, 0, -68.4766)
  footer:
    textColor: "{colors.ink}"
---

# EverSwap

## Overview
The measured site, https://everswap.com/, is the home page of EverSwap, titled "EverSwap - Trade, Lend, Borrow. DeFi at Peak." The page is a scroll-driven, single-viewport experience: the measured document is 800px tall at 1280px and a "Scroll to start" prompt sits under the hero. The first screen is a full-bleed painterly illustration of green mountain peaks against a deep-to-pale blue sky, with the EverSwap logomark (a diamond built from stacked chevrons) and wordmark at the top left, the line "DeFi at Peak." centred in the header, and a translucent pill button "Launch App" with a round white arrow at the top right. The word "EverSwap" is set very large and light in a high-contrast serif across the middle of the image. Five small diamond markers at the left edge act as a section index.

A first extraction caught the page's preloader (a percentage counter, "95%", with dark forest-green corners around a diamond-cropped view of the same mountains); the page was measured again after load and the second measurement is the one documented here. The brand is a DeFi (trade, lend, borrow) product, but the measured home screen avoids charts, tickers and interface chrome: the tone is calm, painterly and nature-themed, built around the mountain-peak metaphor.

## Colors
The measured palette is small and comes from the root variables, so it is documented as the site's declared colour set.
- **Canvas `#203727`** (`--color-dark-green`) is the flat ground the visitor actually sees behind the content. The body background, kept as **`colors.page-body` `#ffffff`**, is never visible: a full-viewport WebGL canvas covers it. That WebGL canvas paints the painterly scenes, and the closing "Climb with EverSwap" scene is a flat field whose rendered pixels were sampled at exactly `#203727` (recorded probe, see SOURCES.json `_probes`). The same value is the `#preloader` background in the shipped CSS.
- **Ink `#fbfff4`** (`--color-white`) is a warm off-white and is the only measured text colour in the loaded state (23 characters); it is set over the illustration and over the forest-green ground, where it reads at high contrast. `colors.primary` repeats it because no filled button role was detected; the "Launch App" pill is a translucent glass control, not a solid fill.
- **`colors.dark-green` `#203727`** (`--color-dark-green`) is the same deep forest green as `colors.canvas`, kept under its CSS name; it is also the text and icon colour of the lime pill buttons (`.button`, `#home-join__buttons`).
- **`colors.light-green` `#e0ffab`** (`--color-light-green`) is a lime highlight, **`colors.light-green-2` `#bccca2`** a sage, **`colors.dark-link` `#516e5a`** and **`colors.dark-link-2` `#62866d`** are the two link greens, and **`colors.charcoal` `#333338`** (`--color-black`) is the soft black. Pure black (`--color-pure-black` #000) and pure white (`--color-pure-white` #fff) are also declared.

Translucent whites (#f8f7f266, #f8f7f233, #f8f7f21a) and a 30% black (#0000004d) are present in the CSS corpus and drive the glass-like button. The browser default link colour (#0000ee) was reported by the extractor for an unstyled link and is not a brand colour, so it was dropped.

## Typography
Two custom families: **Feature Display** (a light, high-contrast display serif; weights 200 and 400 are loaded) and **Britti Sans** (weights 300, 400 and 600). The root variables declare them as `--header-font` and `--default-font`. `typography.display` is Feature Display 18px / 400 / 25.2px (the "DeFi at Peak." header line, measured as the page's H1 role), and `typography.display-mobile` is Feature Display 30px / 200 / 42px (the mobile H1 role). Britti Sans at 16px and weight 600 sets the "Launch App" label (10 characters). `typography.nav` is Times 16px and records an unstyled element's browser default and is not a design choice.

The large "EverSwap" wordmark in the hero is a display title; its pixel size was not recovered in the loaded measurement, so it is described only as very large and light. The root variables show how the type scale is built: sizes are fluid, computed from `--content-unit` (content width divided by a 1440px reference width) with minimums: `--h1` max(80px, 200 units), `--h2` max(65px, 110), `--h3` max(55px, 80), `--sub1` max(16px, 22), `--sub2` max(18px, 18), `--body1` max(16px, 20), `--body2` max(14px, 16), `--btn1` max(16px, 16), `--btn2` max(16px, 18), `--preloader` max(30px, 45) and `--link-footer` max(14px, 16). Those formulas are measured declarations, not resolved sizes.

## Layout
Layout is declared as a 16-column grid in root variables: `--grid-columns` 16, `--grid-rows` 1, `--grid-gap-scale` .15, and span helpers `--grid-span-1` to `--grid-span-16`, with outer padding `--site-padding-x` equal to min(60px, 40 units of the 1440px reference) and `--site-padding-y` equal to the same value. `--site-header` is 24px. The loaded first screen uses very little of this grid: the logo at the left edge, the tagline centred, the button at the right edge, and a huge centred wordmark. Spacing values measured are 16px gaps (2 uses) and 35.56px padding on the button. Density is minimal.

## Elevation & Depth
No box shadows were measured. Depth is carried by the illustration itself (layered peaks with atmospheric haze and a blurred foreground) and by the translucent glass look of the button over it. The preloader state used a diamond crop with dark green corners, a hard-edged shape rather than a shadowed one.

## Shapes
The geometry is diamond-based: the logomark, the section markers on the left and the preloader crop are all diamonds, tying to the mountain-peak motif. Two radii exist in the CSS corpus: 3px (1 use) and 1000px (1 use, a full pill for the "Launch App" control). They are recorded as `rounded.sm` and `rounded.pill`; which one belongs to which element was not separately measured, so no element mapping is claimed beyond the pill-shaped button visible in the capture.

## Components
- **Launch App button**: translucent pill with a Britti Sans 600 label and a round white icon holding a north-east arrow; the padding recorded is 35.5556px (2 uses). It is the only action on the first screen.
- **Header**: logomark and "EverSwap" wordmark at the left, the tagline "DeFi at Peak." centred (`typography.display`), the button at the right. `components.nav` text is off-white.
- **Section index**: five small diamond outlines stacked vertically at the left edge, the first one filled to mark the current section.
- **Scroll prompt**: "Scroll to start" in small off-white type under the wordmark.
- **Footer** (`components.footer`): off-white text; the root variable `--link-footer` sets its link size to max(14px, 16 units).

## Design System Architecture
No public design-system documentation or brand-guideline site was located from the pages opened; the only page read was the home page, https://everswap.com/, measured by the extractor. The CSS is nonetheless a deliberate, token-driven system declared on `:root`: named colours (`--color-white`, `--color-dark-green`, `--color-light-green`, `--color-light-green2`, `--color-dark-link`, `--color-dark-link-2`, `--color-black`, `--color-pure-black`, `--color-pure-white`), fonts (`--header-font`, `--default-font`), a fluid type scale (`--h1` to `--h3`, `--sub1`, `--sub2`, `--body1`, `--body2`, `--btn1`, `--btn2`), a 16-column grid (`--grid-*`), content units (`--content-width`, `--content-unit`, `--ref-screen-width` 1440) and an `--is-mobile` flag (0 on desktop).

## Do's and Don'ts
- Do set the brand name large, light and serif over painterly landscape imagery.
- Do keep interface chrome to a logo, a tagline and a single glass pill button.
- Do use off-white `#fbfff4` for text on imagery and on the forest-green `#203727` ground; use the forest-green family for solid areas.
- Do use diamond shapes for markers and loaders.
- Don't use the browser default link blue; the system's link colours are `#516e5a` and `#62866d`.
- Don't add drop shadows or heavy borders; none were measured.
- Don't fill the first screen with charts or figures.
- Don't pick fixed pixel sizes for headings; the system scales them from content width with minimums.

## Responsive Behavior
The 390px mobile pass measured the H1 role at 30px in Feature Display (`typography.display-mobile`), with 18px (13 characters) and 16px (10 characters) text, and recorded no header links visible, no visible menu toggle, and a single card column. The document height measured on mobile is 16,000px in one band, a figure the extractor reports for the scroll container. The root variables name a mobile flag, `--is-mobile`. Breakpoints and navigation behaviour were not measured.

## Iteration Guide
1. Start with a full-bleed illustrated hero over the `colors.canvas` forest-green ground, `colors.ink` text and the forest-green family for solid sections.
2. Use `typography.display` for header lines and a very large light Feature Display wordmark for the hero.
3. Use the translucent pill for the one primary action.
4. Keep section navigation as five diamond markers.
5. Verify with `node web/scripts/verify-designs.mjs --slug=everswap`.
6. Scroll past the first screen with the extractor before adding tokens; only the first viewport was measured here.
