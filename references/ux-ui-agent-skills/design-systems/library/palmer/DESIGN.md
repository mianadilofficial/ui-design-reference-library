---
version: alpha
name: "Palmer"
category: "Food & Beverage"
description: "Palmer dinnerware exploration site measured live with a warm #f5f6ee canvas, #222222 ink and dark controls, TWK Lausanne 300 at 106.667px with -4.26667px tracking, 12px body, hairline #a1a19c, 2.67px control radii and no UI shadows."
colors:
  canvas: "#f5f6ee"
  ink: "#222222"
  primary: "#222222"
  on-primary: "#f5f6ee"
  swatch-loam-green: "#506157"
  swatch-eccentric-brown: "#382317"
  swatch-eccentric-blue: "#bbc1c8"
  ink-black: "#000000"
  hairline: "#a1a19c"
typography:
  display:
    fontFamily: "\"TWK Lausanne\""
    fontSize: 106.667px
    fontWeight: 300
    lineHeight: 96px
    letterSpacing: "-4.26667px"
  display-mobile:
    fontFamily: "\"TWK Lausanne\""
    fontSize: 58.6221px
    fontWeight: 300
    lineHeight: 52.7599px
    letterSpacing: "-2.34489px"
  body:
    fontFamily: "\"TWK Lausanne\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.8px
    letterSpacing: "-0.24px"
  link:
    fontFamily: "\"TWK Lausanne\""
    fontSize: 10.6667px
    fontWeight: 500
    lineHeight: 14.9333px
rounded:
  xs: 2.67px
  sm: 4px
  md: 8px
  lg: 21.33px
  xl: 100px
  pill: 9999px
spacing:
  s1: 2.67px
  s2: 4px
  s3: 5px
  s4: 5.33px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 10px
  s9: 10.67px
  s10: 12px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    transform: matrix(1, 0, 0, 1, 0, -48)
  nav:
    textColor: "{colors.ink}"
  card:
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
---

# Palmer

## Overview

www.palmer-dinnerware.com (title "Palmer - Explore Palmer's Dinnerware Collections") is an exploratory catalogue of dinnerware rather than a conventional page. The measured screen is 1280px by 800px (a single viewport, scroll height 800px) on a warm off-white canvas `#f5f6ee`. Glazed plates, bowls and a cup in deep blues, greens, pinks, aubergine and grey float freely across the whole screen as top-down photographs with soft drop shadows; the visitor drags to explore. The "palmer" wordmark sits top left, an "experience view" control top centre, a "menu" and a "filter" control bottom centre, and a "Drag to explore" hint with round minus and plus controls bottom right. The site is a Webflow build (the CSS references `webflow-icons` and the root variables are Webflow variable names). The detected h1 is "Explore Palmerdinnerware collections" at 106.667px in `#222222`, rendered large and light; the products, not the interface, carry the colour.

## Colors

Only two interface colors were measured: `#f5f6ee` (canvas and the light text on dark controls) and `#222222` (ink, and the fill of the dark controls). Backgrounds by area: `#222222` (weight 69), `#f5f6ee` (14); text by characters: `#222222` (889) and `#f5f6ee` (337). The hairline is `#a1a19c` (10 borders), also declared as `--swatch--grey`. The root variables expose the theme: `--swatch--light: #f5f6ee`, `--swatch--dark: #222`, `--swatch--grey: #a1a19c`, and three product-oriented swatches, `--swatch--eccentric-brown: #382317`, `--swatch--eccentric-blue: #bbc1c8` and `--swatch--loam-green: #506157`, plus transparent variants (`#eef0f200`, `#171c1c00`). Theme roles map them: background and menu text are light; heading, body text, button text, button outline, menu background and cursor-select background are dark; border is grey. The dark control fill `#222222` with `#f5f6ee` text is the brand action in the capture (the "menu" button), so `primary` is set to `#222222` and `on-primary` to `#f5f6ee`; the generated `primary` value was `#f5f6ee`, which is kept as `canvas`. The three named swatches are carried as tokens from the root variables without a claim about where they render.

## Typography

One family, TWK Lausanne, loaded in three weights: 300, 400 and 500 (1226 characters, all in this face; the CSS also names Arial, Inter, Monaco and sans-serif for unrelated fallbacks). Weights by characters: 300 (691), 500 (405), 400 (130). Sizes by characters: 10.6667px (688), 16px (369), 12px (130), 106.667px (34) and 9.33333px (5). Measured roles: display 106.667px / 96px at -4.26667px tracking, weight 300; display on a 390px viewport 58.6221px / 52.7599px at -2.34489px; body 12px / 16.8px at -0.24px, weight 400; the 16px run tracks at -0.48px; the link/label role is 10.6667px / 14.9333px at weight 500. TWK Lausanne is a commercial face from Weltkern; Helvetica Neue or Arial would be the nearest installed substitute, though the site does not declare one.

## Layout

The experience is a full-viewport canvas: product photographs are positioned freely, not on a column grid. UI is pinned to the edges in small groups with a 4px gap (51 elements) or 10.6667px gap (45), 5px (14) and an 80px gap in 30 places. Declared variables: `--size-container-min: 1280px`, `--size-container-ideal: 1920`, `--size-container-max: 1920px`, `--padding-global--desktop: 1.25em`, `--padding-global--tablet: 1em`, `--padding-global--mobile: 1rem`, `--grid--gap-desktop: 2em`, `--grid--gap-tablet: 1.5em`, `--grid--gap-mobile: 1em`, `--item-card-width: 410.671875px` and a `--spacing--*` scale in em for desktop, tablet and mobile (2px, 8px, 12px, 24px, 56px, 72px, 88px, 128px, 224px, 256px steps). Measured paddings: 10.6667px (22 elements), 16px, 13.3333px, 12px, 7px, 10px, with large 58.6667px to 160px section values.

## Elevation & Depth

No box shadow was measured on interface elements (the shadows on the plates are part of the photographs). Controls are flat, defined by a `#a1a19c` hairline or a solid `#222222` fill. Depth in the capture is entirely photographic.

## Shapes

Radii: 2.66667px (47 elements, the control tiles), 8px (21), 4px (4), 21.3333px (3), 100px (3), 100% (1, round buttons). Tokens: `xs` 2.67px, `sm` 4px, `md` 8px, `lg` 21.33px, `xl` 100px, `pill` 9999px. The card component uses the 8px step.

## Components

- **Dark control ("menu")**: `#222222` fill, `#f5f6ee` text in TWK Lausanne 10.6667px, paired with a square icon tile; the button pair is joined at the edge.
- **Light control ("experience view", "filter")**: canvas fill with a `#a1a19c` hairline and `#222222` text, with a square icon tile at the left.
- **Round zoom controls**: minus and plus in circular outlined buttons (100% radius) at the bottom right.
- **Link ("explore")**: `#f5f6ee`, 10.6667px / 14.9333px, weight 500, on product cards; the element carries a measured `matrix(1, 0, 0, 1, 0, -48)` transform.
- **Card**: light text `#f5f6ee` on a product image, 8px radius.
- **Navigation**: `#222222` text on the canvas.

## Design System Architecture

No public design system or brand guideline was opened (no search was run, and the homepage was measured only with the extractor). The de-facto system is the Webflow variables: 135 custom properties named in layers: `--swatch--*` (raw colors), `--_theme---color--*` (semantic roles: background, body-text, heading, border, button-text, button-outline, menu-text, menu-background, cursor-select-bg, cursor-select-text), `--spacing--desktop-NNpx|tablet|mobile` (em values), `--padding-global--*`, `--grid--gap-*`, `--blueprint--gap`, `--blueprint--label-height: 3em`, `--blueprint--label-text-size: .875em`, and `--size-unit: 16`. Several variables are marked `<deleted|variable-...>` in their names (button height `3rem`, card radius and padding on mobile `1em`, field label size `.875em`), which are leftovers from Webflow's variable manager and not documented here as active.

## Do's and Don'ts

- Do keep the canvas `#f5f6ee` clear so the glazed products supply the colour.
- Do set display text in TWK Lausanne 300 at 106.667px with -4.26667px tracking.
- Do use `#222222` for the single dark action and `#f5f6ee` for its label.
- Do use 2.67px radii on controls and keep hairlines at `#a1a19c`.
- Don't add UI shadows or accent colours; none were measured.
- Don't use a bold display weight; 300 is the display weight.
- Don't treat deleted Webflow variables as live tokens.

## Responsive Behavior

Measured at 390px: the h1 is 58.6221px / 52.7599px with -2.34489px tracking and weight 300, body 14.6555px / 20.5177px at -0.293111px; font sizes by characters were 13.0271px, 9.77036px, 14.6555px and 58.6221px. The interface layout at that width and the breakpoints are not measured beyond the declared tablet and mobile padding and gap variables.

## Iteration Guide

1. Canvas `#f5f6ee`, ink `#222222`, hairline `#a1a19c`, action `#222222` with `#f5f6ee` text.
2. TWK Lausanne: 300 for display, 400 for body at 12px, 500 for 10.6667px labels.
3. Pin small controls to the edges; let photography fill the centre.
4. Use 2.67px radius for tiles, 8px for cards, 100% for round buttons.
5. Check any new value against `web/data/extracted/palmer.json` and its root variables.

## Content and Voice

Per a WebFetch of https://www.palmer-dinnerware.com/, the page copy is short and product-led. The headline reads "Explore Palmer dinnerware collections" and the body line is "Rich colors and beautifully textured finishes transform every meal into a dish worth celebrating." The menu lists Collections, About and Contact. Collections named on the page include Lotus, Sandy Loam (in grey, blue and green), Light Blue Sea, Antigo, Miami, Kiryu, Midori, Eccentric, Barolo, Cecil, Jory, Wisteria, Ruston, Houston and Coco, and product types include plate, bowl, deep plate, cup, saucer, pasta plate and oval plate. Interface labels are lowercase and terse: "buy product", "explore collection", "reset", "menu", "explore", "Drag to explore" and "Drag for more", with a "Products" heading. The voice describes colour and glaze texture rather than features, and the interface words stay out of the way of the photography. The page also still contains default Webflow filler text ("This is some text inside of a div block."), which is not brand copy and should not be reproduced. The images and icons are served from the Webflow CDN, and no separate style guide link appears in the page content.
