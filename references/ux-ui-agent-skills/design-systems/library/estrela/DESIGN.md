---
version: alpha
name: Estrela Studio
category: "Agencies & Studios"
description: "Estrela Studio home page: near-black #020202 ground under a luminous glass-prism render, PP Migra serif display (48px and 110.222px) with PP Neue Montreal 16px body, off-white #fbfbf4 text and translucent glass buttons with 1.78px corners."
colors:
  canvas: "#020202"
  ink: "#fbfbf4"
  primary: "#fbfbf4"
  on-primary: "#fbfbf4"
  surface-3: "#000000"
  ink-3: "#666666"
  hairline: "#767676"
  button-primary-bg: "#ffffff1a"
  button-secondary-bg: "#bcbcbc1a"
  card-bg: "#fbfbf480"
typography:
  display:
    fontFamily: "\"PP Migra\", serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 48px
  display-mobile:
    fontFamily: "\"PP Neue Montreal\", serif"
    fontSize: 13.65px
    fontWeight: 400
    lineHeight: 16.38px
  heading:
    fontFamily: "\"PP Migra\", serif"
    fontSize: 110.222px
    fontWeight: 400
    lineHeight: 121.244px
  subheading:
    fontFamily: "\"PP Migra\", serif"
    fontSize: 30.2222px
    fontWeight: 400
    lineHeight: 30.2222px
  body:
    fontFamily: "\"PP Neue Montreal\", serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  button:
    fontFamily: "\"PP Neue Montreal\", serif"
    fontSize: 13.3333px
    fontWeight: 400
    lineHeight: 18.6667px
  input:
    fontFamily: Arial
    fontSize: 12.4444px
    fontWeight: 400
rounded:
  xs: 1.78px
  sm: 3.56px
  cta: 1.78px
spacing:
  s1: 1px
  s2: 3.56px
  s3: 7.11px
  s4: 8.89px
  s5: 10.67px
  s6: 13.33px
  s7: 16px
  s8: 17.78px
  s9: 19.56px
  s10: 20.44px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 0px 19.5556px
    height: 36px
    boxShadow: rgba(255, 255, 255, 0.02) 0px 0px 7.11111px 0px inset, rgba(255, 255, 255, 0.2) 0px 0px 1.77778px 0px inset
    transform: matrix(1, 0, 0, 1, 0, 0)
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    padding: 0px 19.5556px
    height: 36px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  nav:
    textColor: "{colors.ink}"
    padding: 17.7778px 0px 0px
    transform: matrix(1, 0, 0, 1, 0, -0.0422235)
  nav-link:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 0px 19.5556px
    boxShadow: rgba(255, 255, 255, 0.02) 0px 0px 7.11111px 0px inset, rgba(255, 255, 255, 0.2) 0px 0px 1.77778px 0px inset
    transform: matrix(1, 0, 0, 1, 0, 0)
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 0px 13.3333px 4.44444px
    height: 40px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink-3}"
    padding: 26.6667px 35.5556px
    boxShadow: rgba(255, 255, 255, 0.02) 0px 0px 7.11111px 0px inset, rgba(255, 255, 255, 0.2) 0px 0px 1.77778px 0px inset
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

# Estrela Studio

## Overview
The measured site, https://estrela.studio/, is titled "Estrela Studio" and presents a "people first digital studio". The first screen is almost entirely a looping, full-bleed render of glossy glass prisms catching orange, magenta, violet and white light against black. Over it the headline "A people first / digital studio" is split across the screen: "A people first" at the left edge, a small white star-shaped mark in the middle, and "digital studio" at the right edge. A floating pill navigation sits at top centre with "Estrela Studio", Work, About, Services, Contact and a three-dot overflow button, and the bottom edge carries the prompt "Scroll to discover our world". The page measured 2,400px tall at 1280px width, with an inner scroll container of 6,882px, so most content lives in a custom scroller.

Secondary headings read "Crafting competitive digital experiences" and "Product strategy and design"; call-to-action labels include "Discover Our Spark" and "What We Do". The voice is warm and brand-led rather than technical. The look is dark, cinematic and tactile, with glass-like translucent buttons.

## Colors
- **Canvas `#020202`** is the near-black page ground; **`colors.surface-3` `#000000`** is pure black used by media areas.
- **Ink `#fbfbf4`** is a warm off-white used for nearly all text (6,107 characters), and also for **primary** and **on-primary** as generated, because the detected button is a translucent glass chip whose text is the same off-white.
- **`colors.ink-3` `#666666`** is the mid grey (`--c-grey`) used for secondary text and card text.
- **`colors.hairline` `#767676`** is the one measured border color.
- **`colors.button-primary-bg` `#ffffff1a`**, **`colors.button-secondary-bg` `#bcbcbc1a`** and **`colors.card-bg` `#fbfbf480`** are translucent white fills for glass buttons and cards.

The root variables expose a named palette: `--c-white` #FBFBF4, `--c-black` #020202, `--c-purple` #D796FF, `--c-orange` #FF852D, `--c-blue` #89C8FF, `--c-yellow` #FDFF99, `--c-green` #AFFFA8, and a neutral ramp `--c-n-0` #222220 through `--c-n-6` #F4F4E8 (for example `--c-n-5` #E7E6DC, `--c-n-1` #41413D). The five hues are declared for content use; on the measured first screen the colour comes from the video, not from interface fills.

## Typography
Two families: **PP Migra** (a high-contrast serif, loaded in roman and italic) for display and **PP Neue Montreal** (declared with a `serif` fallback) for body and interface text. `typography.heading` is PP Migra 110.222px / 400 / line-height 121.244px, `typography.display` is PP Migra 48px / 400 / 48px (this is the hero statement role measured on desktop) and `typography.subheading` is PP Migra 30.2222px / 400 / 30.2222px. `typography.body` is PP Neue Montreal 16px / 400 / 22.4px and `typography.button` is 13.3333px / 400 / 18.6667px. Form inputs fall back to Arial at 12.4444px (`typography.input`).

All measured text is weight 400: the contrast comes from the serif versus the grotesque and from scale, not from bold. The mobile pass measured the first heading role at 13.65px in PP Neue Montreal (`typography.display-mobile`), with a 33.15px size also present, which is what the extractor recorded rather than a designed mobile headline. PP Migra and PP Neue Montreal are commercial foundry faces; where they are unavailable use a refined transitional serif for display and a neutral grotesque for text.

## Layout
The home page is composed as full-viewport scenes. The hero splits its headline to opposite edges to leave the centre for the mark and the 3D render. A fixed-position navigation capsule floats above the content with its own padding (17.7778px top). The root variable `--header-height` is 7.2rem. Measured paddings are small and fractional (17.7778px, 8.88889px, 113.778px, 7.11111px) because sizes scale from a viewport-relative base; the largest recorded padding is 113.778px. Density is very low: one idea per screen.

## Elevation & Depth
Depth is built from inset glows rather than drop shadows. The measured shadow on buttons, nav links and cards is `rgba(255, 255, 255, 0.02) 0px 0px 7.11111px 0px inset, rgba(255, 255, 255, 0.2) 0px 0px 1.77778px 0px inset`, a faint white inner edge that makes translucent surfaces read as frosted glass over the moving background. There are no outer shadows measured. The root easing variable `--ease` is `cubic-bezier(.16, 1, .3, 1)`.

## Shapes
Corners are very tight. `rounded.xs` and `rounded.cta` are 1.78px (used by the primary button and nav-link chips) and `rounded.sm` is 3.56px (secondary button, 22 uses). The CSS corpus also lists 6.4px, 3.2px and 100px radii that were not promoted. Surfaces are small rectangles with hairline-soft corners rather than pills; the only round element is the star mark and the overflow button's icon.

## Components
- **Button primary** (`components.button-primary`): translucent `#ffffff1a` fill, off-white 13.3333px text, 36px tall, padding 0px 19.5556px, with the double inset glow. The detected CTA in the capture is the "Home" capsule of the navigation.
- **Button secondary**: `#bcbcbc1a` fill, 36px tall, same padding; labels such as "Discover Our Spark" are measured with a 3.55556px radius.
- **Nav / nav-link**: a floating capsule of nav-link chips (Work, About, Services, Contact) with the same glass fill and inset glow.
- **Text input**: 40px tall, Arial 12.4444px, padding 0px 13.3333px 4.44444px.
- **Card**: `#fbfbf480` fill, 26.6667px by 35.5556px padding, the inset glow, grey `#666666` text.
- **Footer**: canvas fill, ink text.

## Design System Architecture
No public design-system documentation or brand guidelines were located from the page opened; the only page read was the home page, https://estrela.studio/, measured by the extractor. The de-facto system lives in `:root` custom properties with short names: `--c-*` for colour, `--f-heading` (PP Migra) and `--f-body` (PP Neue Montreal) for type, `--header-height` and `--ease`. A video-player library's `--plyr-font-family` is also present. The consistent fractional pixel sizes (1.77778px, 3.55556px, 17.7778px) show that the site scales its CSS units from the viewport width.

## Do's and Don'ts
- Do keep the ground `#020202` and let a luminous 3D render supply all colour.
- Do set display lines in PP Migra, split to the edges of the viewport.
- Do build controls as translucent glass chips with the white inset glow.
- Do use off-white `#fbfbf4`, never pure white, for text.
- Don't add outer drop shadows; none were measured.
- Don't round controls into pills; the measured radii are 1.78px and 3.56px.
- Don't use bold weights; every measured run is 400.
- Don't fill interface surfaces with the purple, orange, blue, yellow or green hues.

## Responsive Behavior
The 390px mobile pass recorded the first heading role at 13.65px in PP Neue Montreal and a 33.15px size, with 14.625px also present; the extractor's mobile character counts are small, so mobile typography was only partly captured. Column behaviour, navigation changes and breakpoints were not measured and are not described.

## Iteration Guide
1. Start with `colors.canvas` and `colors.ink`, then add the glass fills only for controls.
2. Use PP Migra for statements at `typography.display` or `typography.heading`; use PP Neue Montreal for everything else.
3. Reuse the exact inset-shadow pair for every glass surface.
4. Keep radii at 1.78px or 3.56px.
5. Verify with `node web/scripts/verify-designs.mjs --slug=estrela`.
6. Measure an inner page (Work, About) with the extractor before adding tokens.
7. When writing new copy, follow the measured voice: short, warm, human statements ("A people first digital studio", "Scroll to discover our world") and capitalised call-to-action labels such as "Discover Our Spark".
8. When adding imagery, use full-bleed moving renders with strong colour against black; the capture shows one such scene and no photographic portraits or flat illustration.
9. Keep the interface quiet: the navigation capsule, the hero statement and the scroll prompt are the only text elements visible on the first screen of the capture, so new sections should add one idea at a time.
