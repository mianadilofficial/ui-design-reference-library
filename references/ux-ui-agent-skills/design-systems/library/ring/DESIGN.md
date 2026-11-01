---
version: alpha
name: "Ring"
category: "Consumer Electronics"
description: "Ring home security site: white canvas with #424242 body ink, near-black #121212 buttons with 8px radius and 18px bold RingSans labels, #0063a5 blue navigation links, #f6f8fa and #fafbfc cool grey surfaces, 12px-radius bordered product cards, and 42px/500 display headlines."
colors:
  canvas: "#ffffff"
  ink: "#424242"
  primary: "#121212"
  on-primary: "#ffffff"
  surface-2: "#f6f8fa"
  surface-3: "#fafbfc"
  ink-2: "#0063a5"
  ink-5: "#6e6e6e"
  hairline: "#dee5ec"
  primary-hover: "#282b2f"
  card-border: "#bdbdbd"
typography:
  display:
    fontFamily: RingSans, Helvetica, Arial, sans-serif
    fontSize: 42px
    fontWeight: 500
    lineHeight: 54px
  display-mobile:
    fontFamily: RingSans, Helvetica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 42px
  body:
    fontFamily: RingSans, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: RingSans, Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28px
  nav:
    fontFamily: RingSans, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 0px
  link:
    fontFamily: RingSans, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 12px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 10px 16px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 10px 16px
    height: 48px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink-2}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.ink}"
    borderColor: "{colors.hairline}"
---

## Overview

Ring (page title "Home Security Systems - Cameras, Alarms, Doorbells | Ring", ring.com) sells doorbells, cameras, alarms and subscriptions. The capture shows a blue promotional strip ("Free shipping and free returns on all US orders. Shop Now.") with left and right carousel arrows, a white header with the lowercase ring logo, five links (Products, Plans, Services, Neighbors, Business) and Sign in, Search, Help and Cart controls at the right. Beneath sits a full-width hero photograph of a white indoor camera being placed on a wooden table, then a centred statement "All-over protection. All in Retinal 4K." with a supporting paragraph and a black "See What's New" button.

Below that is a horizontally scrolling row of category cards (Doorbells, Outdoor Cameras, Indoor Cameras, Alarms & Sensors, Accessories), each with a product photo, a label and an outlined "Shop Now" button, followed by "See what's new" with blue-gradient product cards (Ultra-sharp 4K lineup, Go 360°, Built for business) that carry black "Shop Now" and "Notify Me" buttons. The voice is plain and reassuring: short benefit statements ("All-new cameras. Crazy-clear detail.") and imperative buttons. A floating round chat control at the right edge is a support widget, not brand UI.

The WebFetch research call failed (see SOURCES.json); this document is built from the extraction and capture.

## Colors

- canvas #ffffff is the page background (area weight 11,719). Cool tinted surfaces step down from it: surface-2 #f6f8fa (1038) and surface-3 #fafbfc (368, used for the footer).
- ink #424242 is the main text colour (3369 characters); the site's CSS names it --color-darkest-grey and --color-neutral-500. ink-5 #6e6e6e is a lighter grey (18 characters).
- primary #121212 is the button fill (with white on-primary text); primary-hover #282b2f is the measured hover fill.
- ink-2 #0063a5 is the blue of navigation links (113 characters). A brighter blue #007bc2 fills the promotional strip (72 area weight) and a #0074c2 variant appears.
- hairline #dee5ec borders the footer and dividers (10 uses); card-border #bdbdbd outlines product cards.

The root variables also expose a longer functional palette (for example --color-access-controller-500 #00994A, --color-orange-dark #9C4308, --color-caution-100 #FEFBEA and RGB triplets for primary, tertiary and positive ramps); these are used by product flows and were not measured on the home page interface, so they are not declared as tokens.

## Typography

One family, RingSans (loaded in weights 300, 400, 500 and 700), with Helvetica, Arial, sans-serif as fallback, sets all 3660 measured characters.

- display: 42px, weight 500, line-height 54px (mobile 28px, line-height 42px).
- body: 14px, weight 300, line-height 24px.
- button: 18px, weight 700, line-height 28px.
- nav: 16px, weight 500; link: 16px, weight 300, line-height 24px.

Sizes by character count: 14px (1929), 20px (774), 16px (620), 42px (111), 18px (100), 28px (100), 11px (14), 10.5px (10). RingSans is Ring's own face; Helvetica or Arial is its declared fallback.

## Layout

The measured page is 1280px wide and 5266px tall. Content uses a wide container with full-bleed hero photography, centred text blocks of about three lines under headlines, and card rows that bleed off the right edge to signal horizontal scroll. The "See what's new" grid shows three columns of cards with a fourth starting a new row. Spacing tokens: 3px, 4px, 8px, 10px, 12px, 14px, 15px, 16px, 20px, 24px; buttons use 10px 16px padding at 48px height.

## Elevation & Depth

Three box shadows were measured: rgba(0, 0, 0, 0.1) 0px 4.5px 9px 0px (5 elements, cards), rgba(0, 0, 0, 0.25) 0px 1px 4px 0px (1) and rgba(0, 0, 0, 0.15) 0px 8px 12px 0px (1). Cards combine a soft shadow with a 1px border (#bdbdbd), and sections alternate white and cool grey. Product imagery sits on blue gradient backgrounds in the "what's new" cards.

## Shapes

Buttons are 8px radius; cards are 12px (10 elements), with 12px 12px 0px 0px on five elements where the top image corners are rounded and the card body is square at the bottom; 50% appears on 8 circular elements (icon buttons) and one 20000px pill. Tokens: xs 8px (buttons), sm 12px (cards), pill 9999px.

## Components

- Primary button ("See What's New", "Shop Now", "Notify Me"): #121212 fill, white RingSans 18px weight 700, 8px radius, 10px 16px padding, 48px high; hover fill #282b2f.
- Outlined button ("Shop Now" on category cards): transparent, #121212 text and 1px #121212 border, same size and radius.
- Category card: white, 12px radius, #bdbdbd border, product photo with rounded top corners, 20px label and button.
- Promo strip: #007bc2 background with white centred 14px text and arrow controls.
- Navigation: white bar, 16px weight 500 links in #0063a5, with icon buttons (search, help, cart) labelled with 11px captions.
- Footer: #fafbfc fill, #424242 text, #dee5ec border.

## Content and imagery

Photography is product-in-context: a hand setting a camera on a side table beside keys and a plant, a doorbell beside a door lock, a floodlight camera at an angle. Cards for new products switch to studio shots on a blue gradient, so launch items are visually separate from everyday categories. The category row names five product families (Doorbells, Outdoor Cameras, Indoor Cameras, Alarms & Sensors, Accessories); the announcement cards name Ultra-sharp 4K lineup, Go 360° (a pan-tilt indoor camera) and Built for business (a dome camera with AI alerts), with footnote superscripts on claims. A link in the page text promotes an NFL Game Day decoration offer. Button labels are consistently two words ("Shop Now", "Notify Me", "See What's New") and headlines use sentence case with full stops between short claims.

## Design System Architecture

No public design system or brand guideline was seen; the research fetch failed. The de-facto system is a token set exposed as CSS custom properties with a numeric ramp naming scheme: --color-black-900, --color-darkest-grey, --color-neutral-500, --color-primary-300-rgb, --color-tertiary-300-rgb and -700-rgb, --color-positive-400 and -700, --color-caution-100, --color-secondary-600 and -800, and --color-orange-dark, with rgb triplets for alpha use. Typography is a single in-house family in four weights, and shapes use an 8px and 12px pair.

## Do's and Don'ts

Do:
- Use #121212 fills with white 18px bold labels for primary actions and an outlined twin for secondary.
- Keep body copy light (weight 300, 14px, 24px line-height) in #424242.
- Use 8px radius on buttons and 12px on cards, with a soft 9px blur shadow.
- Present products on neutral or blue-gradient backdrops with plain labels.

Don't:
- Do not use #0063a5 for buttons; it is the navigation link colour.
- Do not treat the chat bubble or consent banner as brand components.
- Do not add the unmeasured functional palette (greens, oranges) to marketing pages.
- Do not exceed weight 700 or go below 300; those are the loaded weights.

## Responsive Behavior

On the 390px mobile pass the display size is 28px (desktop 42px; line-height 42px). The mobile size distribution is 12px (2903 characters), 16px (689), 14px (665), 28px (111), 18px (100), 24px (100), 20px (83), 9px (14) and 11px (10), so small text steps down to 12px. Breakpoints, menu collapse and column counts on mobile were not measured.

## Iteration Guide

1. Start with {colors.canvas}, {colors.ink} text and {colors.surface-2} for alternating sections.
2. Use {components.button-primary} for the main action and an outlined variant for category cards.
3. Headlines use {typography.display}; paragraphs use {typography.body}.
4. Cards use {rounded.sm}, a {colors.card-border} outline and the 4.5px 9px shadow.
5. Validate with `node web/scripts/verify-designs.mjs --slug=ring`.
