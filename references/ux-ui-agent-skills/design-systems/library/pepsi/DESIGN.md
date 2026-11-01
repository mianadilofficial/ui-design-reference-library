---
version: alpha
name: Pepsi
category: "Food & Beverage"
description: "Pepsi (pepsi.com, measured at https://www.pepsi.com/): a pure black canvas (#000000) with white uppercase text in pepsi-owner-extended, an electric blue #0000fe pill call-to-action with 30px radius and 18px uppercase label, brighter blues #0025ff and #2e86ff for accents, 60px section headings, and glowing product-can photography."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#0000fe"
  on-primary: "#ffffff"
  blue-accent: "#0025ff"
  blue-text: "#2e86ff"
  link: "#256bcc"
  primary-hover: "#7fa4ff"
typography:
  display:
    fontFamily: pepsi-owner-extended
    fontSize: 60px
    fontWeight: 500
    lineHeight: 66px
    textTransform: uppercase
  display-mobile:
    fontFamily: pepsi-owner-extended
    fontSize: 35px
    fontWeight: 500
    lineHeight: 43.75px
    textTransform: uppercase
  subheading:
    fontFamily: pepsi-owner-extended
    fontSize: 24px
    fontWeight: 500
    lineHeight: 30px
  button:
    fontFamily: pepsi-owner-extended, Arial, Helvetica, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 19.8px
    textTransform: uppercase
  nav:
    fontFamily: owners-text
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
rounded:
  xs: 8px
  sm: 30px
  circle: 50%
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 10px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 26px
  s9: 30px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 16px 32px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.canvas}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 50px 0px 25px
    borderColor: "{colors.ink}"
---

## Overview

This file documents the Pepsi homepage as re-measured on 2026-10-16 at `https://www.pepsi.com/` (1280px wide, 3220px tall, 376 visible elements, the cookie black-bar consent overlay hidden before measurement). The page is a dark, product-led brand site. A header with the round Pepsi globe logo and eight uppercase links (BUY PEPSI, PRODUCTS, RECIPES, FOOD DESERVES PEPSI, THE PEPSI CHALLENGE, CONTACT) sits above a hero showing a black "Zero Sugar" can surrounded by concentric halftone dots in blue. Next comes "OUR PRODUCTS", a carousel of cans (Pepsi-Cola Made With Real Sugar, Pepsi, Pepsi Zero Sugar; the measured headings also include Pepsi Prebiotic Cola and a cherry variant), each with a short tagline and a blue "FIND OUT MORE" pill. A "STAY ON THE PULSE" block pairs the globe with a large blue word, followed by a row of social-style tiles and a footer with social icons and three columns of legal and company links ending "2026 PepsiCo, Inc."

The voice is all-caps, short and upbeat ("MOMENTS WORTH SAVORING", "ZERO SUGAR, ALL THE PEPSI TASTE"). Black canvas, white type and blue accents mirror the logo's red, white and blue globe, which appears only inside logo and can imagery.

## Colors

Background area is #000000 (weight 1934), then #0000fe (271) for button fills, with #0025ff (6). Text is #ffffff (1529 characters), #2e86ff (20) and #0025ff (5).

- **canvas #000000**, **ink #ffffff**: the base pairing for the whole page.
- **primary #0000fe**: the "FIND OUT MORE" button fill, white text (on-primary #ffffff). Measured on 3 of the CTA candidates.
- **primary-hover #7fa4ff**: hover turns the same button light blue (rgb(127, 164, 255)) with black text (rgb(0, 0, 0)).
- **blue-accent #0025ff**: a brighter blue used for fills and text; **blue-text #2e86ff**: blue text and carousel arrow accents; both also appear in the stylesheet palette (#2e86ff is `--color-primary-500`).
- **link #256bcc**: link color measured in the stylesheet corpus.

The root variables also list a primary ramp (#97c3ff, #589eff, #2e86ff, #00529c, #00396d) and Bootstrap grays; these are in the stylesheet but were not read on screen, so they are not tokens. Red from the logo exists only in imagery.

## Typography

Two families are loaded: **pepsi-owner-extended** (a wide, heavy display face, 736 characters) and **owners-text** (818 characters, body and small text), plus an `icomoon` icon font. The root variables also reference `gt-america-trial`, which the measured screen did not render.

- **display**: pepsi-owner-extended 60px, weight 500, line-height 66px, uppercase ("OUR PRODUCTS"). Mobile (390px): 35px / 43.75px.
- **subheading**: 24px, weight 500, line-height 30px (product names).
- **button**: pepsi-owner-extended 18px, weight 400, line-height 19.8px, uppercase.
- **nav**: owners-text 16px, weight 400, line-height 25.6px.
- Body default measured on the body element: 14px / 21px uppercase. Sizes by characters: 18px (885), 24px (392), 16px (180), 14px (69), 60px, 48px and 113px (5, the "PULSE" word). Weights: 400, 500 and 700.

Font substitutes: both faces are proprietary; the declared button fallback is Arial, Helvetica, sans-serif.

## Layout

Bands: a 2367px black main band holding header, hero and products; a 339px media band; and a 514px black footer band, each three columns wide at most. The carousel shows three products per view with round arrows at the left and right edges and a dotted pagination row. Cards go up to 19 columns in the DOM measurement because of carousel slides. Gaps are 16px (76 uses), 30px, 40px, 10px and 26px; paddings 16px and 32px (button padding 16px 32px), 4px, 15px, 30px, 50px, 100px, 122px. Header and footer are separated from content by a thin white rule (border color #ffffff). Content is centred; headings and captions are centre-aligned in the capture.

## Elevation & Depth

No box shadows were measured (`boxShadows` is empty). Depth is produced by imagery: radial blue halftone and a blue glow behind each can, wet-can photography and a glowing globe. Borders are 1px white (#ffffff, three elements), a faint white (#ffffff1a) line and one black border; the footer has a white top rule.

## Shapes

Measured radii by frequency: 8px (30), 30px (19) and 50% (5). The "FIND OUT MORE" pill is 30px at 56px height; carousel arrows are circles (50%); 8px is the small container radius. Product and tile imagery is rectangular or can-shaped. The stylesheet also lists Bootstrap radii (2px, 5px, 2rem) that were not on the rendered screen.

## Components

- **Primary button**: `a`, 256px wide, 56px high, fill #0000fe, white 18px uppercase label, 30px radius, padding 16px 32px, 2px border. Hover fill #7fa4ff with black text.
- **Header nav**: eight uppercase white links on black; round logo at left.
- **Product card**: can image with blue glow, 24px/500 name, uppercase small tagline, button below.
- **Carousel controls**: round blue (#0025ff-family) arrow buttons, tiny dot pagination (the first dot ringed).
- **Footer**: logo, six social icons (Threads, TikTok, X, Facebook, Instagram, YouTube), three link columns in 16px or smaller uppercase white text, copyright line.

## Design System Architecture

No public Pepsi design-system site was opened; this is the de-facto system read from the page's own CSS. The site ships Bootstrap variables (`--bs-border-radius`, `--bs-gray-100`, `--bs-danger`) alongside brand variables named `--color-primary-300` to `-800`, `--color-dark-black`, `--desktop-headline-1-font-family`, `--mobile-headline-3-font-size`, `--copy-cta-font-size` (18px), `--copy-textlink-font-weight` (700) and `--wl-module-sec-spacing-small-top` (30px), so type roles are split into desktop and mobile headline scales and copy styles. Carousels use Swiper (`swiper-preloader-spin` keyframes). Most used durations are 200ms (32) and 150ms (21); easings are ease and ease-in-out. Breakpoints in CSS: min-width 992px (186 declarations), 768px, 1200px, 1400px, 1440px.

## Do's and Don'ts

- Do keep the canvas pure black and type white.
- Do make every CTA a 30px-radius #0000fe pill with an uppercase label, hover #7fa4ff with black text.
- Do set headings in uppercase wide display type at weight 500.
- Do let can photography with blue glow carry color.
- Don't add drop shadows: none were measured.
- Don't use the Bootstrap grays or danger red as brand colors.
- Don't render the cookie bar or consent overlay as brand UI.

## Responsive Behavior

Measured at 390px: the display heading is 35px with 43.75px line-height; body sizes are 18px, 21px and 16px; the header shows 2 links and a menu toggle labelled "Toggle navigation" (desktop: 8 links, no toggle); card columns measured 15. Layout of the carousel and footer at mobile width is not measured. The stylesheet declares media queries at 576px, 768px, 992px, 1200px, 1400px and 1440px.

## Iteration Guide

1. Start with canvas #000000 and ink #ffffff.
2. Use #0000fe only for actions and hero glow; never for body text.
3. Headings: `display` for section titles, `subheading` for product names.
4. Buttons: 56px high, 30px radius, 16px 32px padding.
5. Re-measure after wait: preloaders and the consent bar hide content; confirm values on the live page before adding tokens.

### Measured notes for implementers

The extraction records these additional facts. The first heading in the document order is "OUR PRODUCTS" because the hero is imagery only. The page scroll height is 3220px, and the body text transform is uppercase, so even captions such as "TIMELESS FLAVOR, REAL SUGAR" are set in capitals. The "Stay on the pulse" block uses a 113px display size on the word "PULSE" in blue, measured on 5 characters,. Hover states measured on the button change only background and text color; no transform or shadow was recorded. The logo is a round globe image on a transparent background, placed at the left of the header and again above the pulse heading and in the footer. Social tiles beneath the pulse heading mix portrait photography, a product lineup graphic and a white chat-bubble mockup, so the page does not enforce one tile style. Keyboard focus styling was not measured.
