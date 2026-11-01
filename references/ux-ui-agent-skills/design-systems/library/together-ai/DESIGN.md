---
version: alpha
name: Together AI
category: "AI & LLM Platforms"
description: "Together AI's marketing site sets \"The Future\" (a Futura-inspired geometric sans) at 56.8889px/500 on a pale-blue-to-white canvas, with black #000000 uppercase mono buttons, a deep navy #010120 research band, and lilac, cyan and magenta accents lifted from its own CSS variables."
colors:
  canvas: "#ffffff"
  page-largest: "#010120"
  ink: "#000000"
  ink-muted: "#000000b3"
  primary: "#000000"
  primary-hover: "#000000b4"
  on-primary: "#ffffff"
  hairline: "#00000014"
  card-on-dark: "#ffffff14"
  brand-purple: "#caaef5"
  brand-magenta: "#ef2cc1"
  accent-cyan: "#70e9f0"
  accent-blue: "#9bcdf5"
typography:
  display:
    fontFamily: "\"The Future\", Arial, sans-serif"
    fontSize: 56.8889px
    fontWeight: 500
    lineHeight: 62.5778px
    letterSpacing: "-1.70667px"
  display-mobile:
    fontFamily: "\"The Future\", Arial, sans-serif"
    fontSize: 38px
    fontWeight: 500
    lineHeight: 41.8px
    letterSpacing: "-1.14px"
  heading:
    fontFamily: "\"The Future\", Arial, sans-serif"
    fontSize: 35.5556px
    fontWeight: 500
    lineHeight: 42.6667px
    letterSpacing: "-0.711111px"
  body:
    fontFamily: "\"The Future\", Arial, sans-serif"
    fontSize: 12.4444px
    fontWeight: 400
    lineHeight: 17.4222px
  button:
    fontFamily: "\"PP Neue Montreal Mono\", Georgia, sans-serif"
    fontSize: 14.2222px
    fontWeight: 500
    lineHeight: 14.2222px
    letterSpacing: 0.0711111px
    textTransform: uppercase
  nav:
    fontFamily: "\"The Future\", Arial, sans-serif"
    fontSize: 14.2222px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 3.56px
  sm: 7.11px
  md: 14.22px
  cta: 3.56px
spacing:
  s1: 1.78px
  s2: 3.56px
  s3: 5.33px
  s4: 7.11px
  s5: 8.89px
  s6: 10.67px
  s7: 14.22px
  s8: 17.78px
  s9: 21.33px
  s10: 28.44px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 14.2222px
    height: 36px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 7.11111px 14.2222px
    height: 28px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.card-on-dark}"
    textColor: "{colors.canvas}"
    padding: 17.7778px 35.5556px
  footer:
    textColor: "{colors.ink}"
---

## Overview

The Together AI homepage, as captured at 1280px, is a developer-infrastructure product page that avoids the usual dark-mode look for its first screen. The hero sits on a very pale blue wash. A floating, rounded white navigation bar holds the logo, six menu items with chevrons (Inference, Compute, Model Shaping, Research, Developers, Company) plus Pricing, and, in a second small panel on the right, CONTACT SALES and a black SIGN IN button. The headline reads "Build what's next on the AI Native Cloud", with its second line in a lighter grey, followed by one sentence ("Full-stack AI platform, powered by cutting-edge research.") and two buttons, START BUILDING in black and CONTACT SALES in a faint grey.

On the right of the hero is a 3D-rendered abstract object made of translucent and glossy discs and slabs in blue, purple and red-orange, annotated with thin leader lines and tiny uppercase mono labels (PRODUCTION INFERENCE, OPTIMIZED TRAINING, CUTTING-EDGE RESEARCH). Below it, a "TRUSTED BY" row of grey customer logos. The next band returns to white with a centered "The Together AI Platform" title and three tabs (Inference, Compute, Model shaping), the first tab tinted light cyan, and a white panel pairing a vertical list of product names with a product screenshot that shows a dark code window. The page closes this stretch with a deep navy band (#010120) headed "Grounded in cutting-edge research", a row of four translucent cards each carrying a mono category label (KERNELS, AGENTS), a centered title and author names in tiny mono caps, then a "RECOGNIZED BY" row of conference logos.

The voice is technical and declarative: the copy names the stack ("model, inference, ...") and the research, and avoids marketing adjectives other than "AI Native". Visual interest comes from the 3D hero object and the pastel product art, never from heavy chrome.

## Colors

All colors are either measured on the live page or read from the CSS custom properties the page declares.

- **Canvas #ffffff** is the body background; the hero adds a pale blue gradient on top of it.
- **Page-largest #010120** is the dark navy of the research band, the largest opaque background by area in the measurement.
- **Ink #000000** is the text on light surfaces and the fill of the primary button; **ink-muted #000000b3** is the same black at 70% alpha for secondary copy. On the navy band, text is white (#ffffff), which by character count is the most-read text color (9,804 characters against 2,093 for black).
- **Hairline #00000014** (black at 8%) is the border color and the fill of the secondary button. Cards on the dark band use **#ffffff14** (white at 8%).
- **Primary-hover #000000b4** is the black button's computed hover background.
- Accent colors come from the page's own variables: `--brand--brand-purple` #caaef5, `--brand--brand-magneta` #ef2cc1 (spelled that way in the stylesheet), `--product--cyan-01` #70e9f0 and `--product--blue-01` #9bcdf5. They appear in the artwork, the cyan tab tint and the lilac connectors between research cards; they are not used for buttons.

The Together AI brand page, which I opened, says the primary palette is "comprised of three foundational color families" but gives no hex values on the text I could read, so the hexes here are the stylesheet's, not a published specification.

## Typography

The brand page states that The Future is the primary typeface for headline and body copy and describes it as "a careful observation of Futura's geometric architecture". In the measurement it is the dominant family (8,286 characters), at weights 500 and 400. The second family, PP Neue Montreal Mono (3,762 characters), is used for uppercase labels and buttons in weights 500 and 400, including an italic.

- **Display**: 56.8889px / 62.5778px, weight 500, tracking -1.70667px; the mobile version at 390px is 38px / 41.8px with -1.14px tracking.
- **Heading**: 35.5556px / 42.6667px, weight 500, tracking -0.711111px ("The Together AI Platform").
- **Body**: 12.4444px / 17.4222px, weight 400, used for the hero tagline and card descriptions; the root body element is 14.2222px.
- **Button and labels**: PP Neue Montreal Mono 14.2222px, weight 500, uppercase, 0.0711111px tracking.
- **Nav**: The Future 14.2222px weight 400 on 20px.

The unusual decimals are not errors. The page declares `--size-unit: 16`, `--size-container-ideal: 1440` and a `--size-font` that divides a clamped container width by the ideal width, so every size is a fraction of the viewport: at 1280px the scale is 0.8889, and the 56.8889px display size equals 64px at 1440px (derived arithmetic, not a separate measurement). Use fluid scaling rather than rounding these values. Headings carry negative tracking that tightens as size increases.

## Layout

The layout is centered, wide and banded. Each band is a full-width color block: pale blue hero, white platform section, navy research section, then white. Content columns are inset by `--_spacers---padding-global` (3em in the stylesheet) and a floating nav bar inset from the page edge. The hero is a two-column composition with copy left and artwork right; the platform section is a centered title above a three-tab bar, then a two-column panel (list left, screenshot right); the research cards are four equal columns.

Measured spacing values: 1.78, 3.56, 5.33, 7.11, 8.89, 10.67, 14.22, 17.78, 21.33 and 28.44px, with the most common gaps 7.11px, 5.33px and 78.22px, and paddings of 14.22px, 7.11px and 35.56px. Because everything is em-based, spacing scales with the same fluid unit as type.

## Elevation & Depth

Flat by default. The only box-shadow measured on the page is `rgba(1, 1, 32, 0.1) -10px 0px 75px 0px`, a soft leftward navy-tinted glow that appears twice. The nav and the white platform panel separate from the background through contrast (white on pale blue), rounded corners and 8% hairlines, not shadows. On the navy band, depth comes from 8% white translucent cards. The 3D hero artwork supplies the only true depth cue in the whole screen.

## Shapes

Three radii were measured: 3.56px (269 elements, including the buttons, tabs and tags), 7.11px (9) and 14.22px (1). The primary button uses 3.56px, which is a slightly softened square, not a pill. Larger containers like the nav bar and platform panel appear more rounded than buttons in the capture, consistent with the 14.22px and the 12-to-16 `--_radius---*` variables the stylesheet declares (.75em and 1em).

## Components

- **Primary button** (START BUILDING, SIGN IN, LEARN MORE): #000000 fill, white PP Neue Montreal Mono 14.2222px uppercase, 14.2222px padding, 36px height, 3.56px radius; hover darkens to #000000b4 in the computed measurement.
- **Secondary button** (CONTACT SALES): #00000014 fill, black text, 28px height, 7.11px by 14.22px padding.
- **Nav link**: The Future 14.2222px/400 in black with a chevron where a menu opens.
- **Tabs**: three equal white tiles, with the selected tab tinted light cyan; labels in The Future.
- **Research card**: a #ffffff14 panel on navy, with padding 17.7778px by 35.5556px, a small mono category at top, centered white title, and mono authors at the bottom.
- **Product list rows**: icon in a rounded square, product name, hairline dividers.

## Design System Architecture

Together AI publishes a [brand page](https://www.together.ai/brand) that names The Future as its primary typeface and offers a downloadable logo suite; I found no public design-system, component library or token package. The de-facto system is visible in the stylesheet: custom properties are grouped by prefix, for example `--shades--black-opacity-8` and `--shades--white-opacity-16` for alpha ramps, `--brand--*` for brand colors, `--product--*` for product-art tints, `--opacity--*` for 16% and 40% tints of accent hues, `--_radius---8/12/16` in em and `--_spacers---*` in em. Combined with the fluid `--size-font` calculation, this is a variable-driven, em-based system built in the style of a site builder's variables panel, though the page source I have does not say which tool produced it.

## Do's and Don'ts

- Do use black for actions and keep each region to one primary action.
- Do set buttons and labels in the mono face, uppercase.
- Do use pale blue, white and the navy #010120 as alternating bands.
- Do apply negative tracking to headlines and scale type fluidly.
- Don't use purple, magenta or cyan as button fills; they belong to artwork and highlights.
- Don't add heavy shadows; the single glow is navy at 10% opacity.
- Don't use pill-shaped buttons; the radius is 3.56px.
- Don't set body copy below the 12.4444px body token on desktop.

## Responsive Behavior

At 390px the display headline is 38px on a 41.8px line with -1.14px tracking, replacing the 56.8889px desktop size. Because sizes derive from a fluid unit capped by container min and max variables, type and spacing scale continuously between breakpoints. The mobile layout beyond the headline metrics was not captured, so how the tab bar and card row reflow is not described here.

## Iteration Guide

1. Choose the band first: pale blue hero, white content, or #010120 for research and proof.
2. Set the headline in The Future 500 with tracking near -3% of size; set labels in the mono face uppercase.
3. Make the main action a black 3.56px-radius button and the secondary one an 8% black fill.
4. Introduce color only through artwork and small tints, using #caaef5, #70e9f0 and #ef2cc1.
5. Express every size as a multiple of the base unit so it scales with the viewport, then check the result against the capture.
