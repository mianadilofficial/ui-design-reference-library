---
version: alpha
name: BigCommerce
category: "Design Systems"
description: "BigCommerce's marketing site sets AeonikPro at 64px/500 on a dark hero, then moves to white and pale-lavender bands. Buttons are black #000000 rectangles with 2px radius and white 16px labels, text is near-black #121118, with a navy #031033 footer-type surface and brand accents blue #2664ff and green #03eada."
colors:
  canvas: "#ffffff"
  ink: "#121118"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-navy: "#031033"
  ink-secondary: "#4c4b58"
  ink-light: "#d0d5dd"
  ink-slate: "#344054"
  primary-hover: "#2b2935"
  bc-blue: "#2664ff"
  bc-green: "#03eada"
typography:
  display:
    fontFamily: AeonikPro
    fontSize: 64px
    fontWeight: 500
    lineHeight: 70.4px
  display-mobile:
    fontFamily: AeonikPro
    fontSize: 40px
    fontWeight: 500
    lineHeight: 44px
  heading:
    fontFamily: AeonikPro
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
  subheading:
    fontFamily: AeonikPro
    fontSize: 18px
    fontWeight: 500
    lineHeight: 25.2px
  body:
    fontFamily: AeonikPro
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  button:
    fontFamily: AeonikPro, system-ui, -apple-system, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: "-0.168px"
  nav:
    fontFamily: AeonikPro, system-ui, -apple-system, sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: "-0.168px"
  link:
    fontFamily: AeonikPro
    fontSize: 11px
    fontWeight: 500
    lineHeight: 15.4px
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 16px
  xl: 24px
  2xl: 56px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 20px
    height: 48px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 20px
    height: 48px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-secondary}"
  nav-link:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
---

## Overview

Measured at https://www.bigcommerce.com/ (title "Commerce built for momentum. | BigCommerce", 1280px viewport, 11359px tall), the home page leads with an almost-black hero whose headline reads "Get your brand ready for agentic commerce." in white AeonikPro 64px, the last words tinted a pale periwinkle (#cfdcff measured as a child color of the h1). Under it a light centered paragraph explains AI-agent commerce, a white button reads "Explore Agentic Commerce", and a large product-UI mockup (a B2B Orders table for a sample store called Forma with a channel picker and an AI prompt chip) fades into a purple-grey gradient at the bottom of the hero.

The remainder of the page runs on pale lavender and white. "Endless solutions for every kind of brand." introduces a row of five customer-site screenshot cards (UPLIFT Desk, The RealReal, BMW, Sellars, Hanna Instruments). A large rounded lavender panel follows with an embedded storefront-builder video and the heading "Why settle? Create a shopping experience that's iconic.", then a bulleted list of bold lead-ins ("Build it visually", "Customizable checkout that converts") and two buttons, one filled black and one outlined.

Above the main navigation there is a thin utility bar (Commerce, Feedonomics, Makeswift, Help Center, Developer Center, Log In, a flag). The header shows the logo, five links (Platform, Services, Resources, Pricing) and the buttons "Get a demo" (filled black) and "Try for free" (outlined). The voice is product-confident and concrete, with outcome-first headlines.

## Imagery and Art Direction

Imagery is almost entirely product UI and customer storefronts rather than lifestyle photography. The hero mockup is a dimmed dark-mode dashboard: grey table text, olive-green status pills reading "Waiting for approval", and a floating white Channels menu listing Storefronts, Ads and social, Agentic, Marketplaces and Affiliate and influencer, with the Agentic row highlighted by a soft blue-to-yellow tint. A cluster of round app icons connected by a dotted line sits at the right edge. In the lower panel a storefront called FORMA is shown inside a browser frame with an editor toolbar down its left side and a play button over a living-room photograph, and the overlay text "Elevated living, made effortless" is set in large white type across the photo. The customer cards crop each site's own homepage to the same height under a bold site name. Overall the art direction is light, airy and software-forward, with the dark hero acting as the single dramatic moment.

## Microcopy Voice

Copy is short and outcome-led: "Get a demo", "Try for free", "Explore Agentic Commerce", "Try checkout". Bulleted benefits use a bold lead-in followed by a plain-language explanation ("Complex products, simple experiences: every variant, bundle, and configuration. Easy for shoppers, organized for you."). Headlines are written as confident statements or rhetorical questions ("Why settle?"), and sentence case is used throughout rather than title case or all caps.

## Colors

Text is {colors.ink} (#121118), which the site also exposes as the variable --bc-black. Secondary text is {colors.ink-secondary} (#4c4b58); two further greys seen in the product mockups and footer are {colors.ink-slate} (#344054) and {colors.ink-light} (#d0d5dd). Page canvas is {colors.canvas} (#ffffff). A deep navy {colors.surface-navy} (#031033) is one of the larger background areas.

Primary actions are {colors.primary} (#000000) with {colors.on-primary} (#ffffff) labels; the measured hover fill is {colors.primary-hover} (#2b2935). The root variables --bc-blue (#2664FF, {colors.bc-blue}) and --bc-green (#03eada, {colors.bc-green}) are the site's named accent colors; the lavender page bands and the hero's gradient are subtler tints seen in the capture. The brand blue is not used as the button color on this page.

The BigCommerce press page (https://www.bigcommerce.com/press/) offers the wordmark logo and the "B" mark as downloads and refers to brand guidelines, but gives no color or type values on the page, so none are taken from it.

## Typography

AeonikPro (weights 400 and 500) is the single typeface; AeonikFono (400) and Geist Mono (300) are also loaded. Display ({typography.display}) is 64px at weight 500 on a 70.4px line height; the mobile display ({typography.display-mobile}) is 40px on 44px. Section headings ({typography.heading}) are 40px at weight 400 on 48px. Subheadings ({typography.subheading}) are 18px at 500, body ({typography.body}) is 16px on 22.4px, buttons ({typography.button}) are 16px weight 400 with -0.168px letter spacing, navigation ({typography.nav}) is 12px at 500 and small links ({typography.link}) are 11px at 500.

The root variables follow a Tailwind-style scheme (--text-display--letter-spacing: -0.01em, --text-eyebrow--font-weight: 700, --font-weight-regular: 400), indicating tight tracking on large text.

Font substitutes: AeonikPro is a commercial typeface; a clean grotesque such as Inter or a system sans-serif is the nearest practical stand-in.

## Layout

The hero is a centered single column with a wide product image below. Content bands are full width with a centered container; the customer-card row holds five equal cards, and the feature panel is a two-column split with media left and copy right. Measured spacing values include {spacing.s2} (4px), {spacing.s5} (8px), {spacing.s8} (12px), {spacing.s9} (16px) and {spacing.s10} (20px); buttons use 12px 20px padding and are 48px tall. The page contains about 2,369 visible elements, a dense, content-heavy page.

## Elevation & Depth

Depth is created by color-field changes (black hero, lavender and white bands) and by floating UI mockups with small popovers (the Channels dropdown, the AI prompt chip) over blurred dashboards. White cards carry a thin light border. The Tailwind shadow variables are all set to "0 0 #0000" in the root, so no global shadow is defined.

## Shapes

Buttons use {rounded.xs} (2px), nearly square. Cards use {rounded.md} (8px). The larger lavender feature panel in the capture is visibly more rounded; measured radii on the page also include {rounded.sm} (4px), {rounded.lg} (16px), {rounded.xl} (24px), {rounded.2xl} (56px) and {rounded.pill} (9999px).

## Components

**button-primary**: {colors.primary} fill, 1px solid black border, {colors.on-primary} AeonikPro 16px label, 2px radius, 48px tall, 12px 20px padding; hover {colors.primary-hover}. An outlined counterpart ("Try for free", "Try checkout") has a transparent fill and dark border. On the hero a white inverted button is used on the dark field. **nav** is a white bar with {colors.ink-secondary} 12px links and small dropdown carets. **card** is white with an 8px radius, a site-name caption and a screenshot. **footer** is black with white text.

## Design System Architecture

BigCommerce publishes BigDesign, "BigCommerce's library of React components" for building apps with a native BigCommerce feel (https://bigcommerce.github.io/big-design/, package @bigcommerce/big-design, which uses Source Sans 3 per its docs page). This marketing site does not use it: the served HTML has no BigDesign references, the site's typeface is AeonikPro rather than Source Sans 3, and its root variables are Tailwind-style (--tw-ring-*, --text-*, --font-weight-*) plus three brand variables (--bc-blue, --bc-green, --bc-black). No values were taken from BigDesign. The de-facto system here is therefore a Tailwind utility theme with a few named brand colors and a text-scale variable set.

## Do's and Don'ts

- Do set headlines in AeonikPro 500 at display sizes and keep body at 16px.
- Do use black, 2px-radius, 48px-tall buttons with white labels.
- Do use a dark hero with a product mockup, then pale lavender and white bands.
- Do keep {colors.ink} for text on light backgrounds.
- Don't round primary buttons beyond 2px.
- Don't apply BigDesign (Source Sans 3) styling to the marketing site.
- Don't use {colors.bc-blue} for buttons on this page; it is an accent.

## Responsive Behavior

A mobile display size of 40px (down from 64px) was measured. The utility bar and header collapse on narrow screens is not measured and not claimed. Customer cards, the feature panel and the hero mockup are fixed-art, so exact breakpoints were not measured; none are stated.

## Iteration Guide

1. Begin with a dark {colors.ink} or black hero, white AeonikPro 500 headline, one white button.
2. Alternate with {colors.canvas} and pale-lavender bands.
3. Use {colors.primary} buttons at 48px height and {rounded.xs}.
4. Add accent color only from {colors.bc-blue} and {colors.bc-green}, sparingly.
5. Substitute a neutral grotesque if AeonikPro is unavailable.
