---
version: alpha
name: PepsiCo
category: "Food & Beverage"
description: "PepsiCo corporate site: white canvas, deep navy #02355a text and footer, light-blue #a5caee pill buttons, lime #bfde7d and forest #0f440e accents, Pressural 900 uppercase display at 224px with -7.84px tracking, Gilroy 400 to 600 body, and 24px or full-pill corners."
colors:
  canvas: "#ffffff"
  ink: "#222222"
  primary: "#a5caee"
  on-primary: "#02355a"
  green-deep: "#0f440e"
  green-mid: "#5e910d"
  accent-amber: "#eb9f0a"
  link: "#000000"
  primary-hover: "#71a8e3"
  button-secondary-bg: "#bfde7d"
  card-bg: "#155798"
  blue-mid: "#3680ce"
  off-white: "#f7f5f3"
typography:
  display:
    fontFamily: __pressural_5857d1, __pressural_Fallback_5857d1
    fontSize: 224px
    fontWeight: 900
    lineHeight: 190.4px
    letterSpacing: "-7.84px"
    textTransform: uppercase
  display-mobile:
    fontFamily: __pressural_5857d1, __pressural_Fallback_5857d1
    fontSize: 60px
    fontWeight: 900
    lineHeight: 51px
    letterSpacing: "-1.8px"
    textTransform: uppercase
  body:
    fontFamily: __gilroy_947ebf, __gilroy_Fallback_947ebf
    fontSize: 22px
    fontWeight: 500
    lineHeight: 29.7px
    letterSpacing: "-0.11px"
  button:
    fontFamily: __gilroy_947ebf, __gilroy_Fallback_947ebf
    fontSize: 20px
    fontWeight: 600
    lineHeight: 26px
  nav:
    fontFamily: __gilroy_947ebf, __gilroy_Fallback_947ebf
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 28px
  s8: 32px
  s9: 40px
  s10: 44px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 20px 28px
    height: 66px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.green-deep}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 20px 28px
    height: 66px
  link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.link}"
  footer:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.canvas}"
---

## Overview

This is the corporate home page of PepsiCo, measured at https://www.pepsico.com/ (title "PepsiCo | Food and Drinks to Smile About", 5449px tall at 1280px wide). It is a brand-portfolio page, not a product shop. The first screen is a full-bleed food photograph (a table of dishes, a hand taking a Lay's chip, Sabra hummus) with a floating white rounded panel that holds the navigation: the PepsiCo logo, then About, Innovation, Brands, Partners, Investors, News & Media, with Careers, Contact, a globe and a search icon. A light-blue pill button "Discover who we are" sits at the bottom of the hero.

Further down, the page opens with a huge headline in a heavy, condensed display face (the extraction measures a 224px h1 reading "AHHH"), a section titled "FIND YOUR FAVES" in forest green with the line "Discover more about our food, drinks, nutrition, and new favorites.", a segmented pill filter (Featured, Food, Drinks) with the active tab in lime, and a product carousel with the Lay's bag in focus and Starbucks, Lipton, Tostitos and Quaker marks faded to the sides, steered by round dark-green arrow buttons. A "Discover PepsiCo Positive" lime button and an "Explore our brands" green button represent the sustainability and portfolio entry points. The footer is a deep navy block with white links.

A small round blue cookie-settings button sits at the lower right of the hero in the capture; it is a consent control and is not documented as brand UI. In the capture, a blue panel and a blank white area appear in the hero and below it, which are images and animated blocks that had not rendered when the screenshot was taken; the tokens here come from the measured DOM, not from those blank areas.

## Colors

Colour is large-block and saturated, built around blue and green. `canvas` is `#ffffff` (8331 area weight). The navy `on-primary` `#02355a` is the text colour on light blue buttons, the nav text and the footer fill (770 area weight). `primary` `#a5caee` is the light-blue button fill, with `primary-hover` `#71a8e3` measured on hover. `card-bg` `#155798` is the mid-blue panel (364 area weight) and `blue-mid` `#3680ce` is the colour of the huge headline.

Greens: `green-deep` `#0f440e` is the forest green for the "Explore our brands" fill, secondary button text and the "FIND YOUR FAVES" title; `button-secondary-bg` `#bfde7d` is the lime fill; `green-mid` `#5e910d` is a green text colour. `accent-amber` `#eb9f0a` is a measured warm text accent (32 characters). `ink` `#222222` is body text on white, `link` `#000000` is the default link colour, and `off-white` `#f7f5f3` is a warm paper tone for a few panels.

The CSS defines a full Tailwind-style ladder behind these (blue 50 to 600, green 100 to 600, yellow, red, violet and teal families, for example `--color-blue-500: #02355a`, `--color-green-500: #0f440e`, `--color-green-100: #bfde7d`, `--color-blue-100: #a5caee`, `--color-blue-400: #155798`), plus an error colour `--color-error: #b80000`. Only the ones above were measured in rendered output.

## Typography

Two commercial families, loaded as self-hosted fonts, carry the page. Pressural (weight 900) is the display face: uppercase, 224px with 190.4px line height and -7.84px tracking (-3.5 percent); on mobile 60px/51px with -1.8px tracking. Gilroy (400, 500, 600) is the text face: body copy 22px weight 500 with 29.7px line height and -0.11px tracking, buttons 20px weight 600 with 26px line height, and navigation 16px weight 400 (the nav bar itself uses 16px weight 600). Other measured sizes: 96px (162 characters, for the large section titles), 24px and 12px. Neither font is open source; the declared fallbacks are the generated "Fallback" faces `__pressural_Fallback_5857d1` and `__gilroy_Fallback_947ebf`, and a heavy condensed grotesque plus a geometric sans are the nearest stand-ins.

## Layout

The page is a series of full-width bands. The hero is an edge-to-edge photograph with a floating rounded white panel inset from the sides, containing the navigation (nav height 76px). Below are centred content sections with a centred title and subtitle, a pill-shaped tab control, and a wide carousel with arrow buttons at each side. Spacing measured: 4, 8, 10, 16, 20, 24, 28, 32, 40 and 44px. Buttons are centred under their section and use generous 20px 28px padding. The CSS declares `--breakpoint-xl: 80rem` and a base radius of 24px.

## Elevation & Depth

No box shadows were measured. Separation comes from block colour (navy, forest green, mid-blue panels against white), photography, and the rounded floating panel on the hero. Borders measured are white (`#ffffff`, 14 elements) used inside coloured controls. Keep surfaces flat.

## Shapes

Radii in the extraction: 24px (13 elements, the base radius), full-round (10 elements: buttons, tabs, arrow circles), and asymmetric corners such as `0px 0px 16px 16px` (2), `0px 0px 0px 24px` (1) and `0px 0px 24px` (1), which are the rounded bottoms of panels. The CSS names `--radius-btn: 64px`, `--radius-image: 20px`, `--radius-3xl: 1.5rem` and `--radius-circle: 99px`. Buttons are always pills.

## Components

**Primary button.** `#a5caee` fill, `#02355a` text, 20px weight 600, padding 20px 28px, 66px tall, full pill; on hover the fill becomes `#71a8e3` with the same navy text and border.

**Secondary lime button.** `#bfde7d` fill, `#0f440e` text, same size and pill shape ("Discover PepsiCo Positive").

**Inverse green button.** `#0f440e` fill, `#bfde7d` text ("Explore our brands").

**Navigation.** A white panel (nav background `#ffffff`, navy `#02355a` 16px weight 600 labels), chevrons on dropdown items, secondary links (Careers, Contact) in grey, and globe and search icons.

**Segmented tabs.** A light-grey pill container with the active tab filled lime and text in deep green.

**Carousel arrows.** Round buttons in `#0f440e` with white arrows.

**Footer.** Navy `#02355a` block (601px tall) with white 16px weight-600 links: About PepsiCo, Media Library, Investors, Brands, Sustainability.

## Design System Architecture

No public PepsiCo design-system or brand-guideline page was opened for this document, so there is no official token source to cite. The shipped CSS shows a Tailwind v4 theme with brand tokens: named colour ramps (`--color-blue-50` to `--color-blue-600`, and likewise green, yellow, red, violet, teal, gray), semantic names (`--color-stand-out`, `--color-off-white: #f7f5f3`, `--color-border-article: #e4e4e4`, `--color-error: #b80000`), font tokens (`--font-gilroy`, `--font-pressural`, weights from 400 to 900), radius tokens (`--radius-base: 24px`, `--radius-btn: 64px`, `--radius-image: 20px`) and an easing `--ease-init: cubic-bezier(.25,.1,.25,1)`. Fonts are served through Next.js-style hashed family names (`__gilroy_947ebf`).

## Do's and Don'ts

- Do use white as the ground and big navy, forest and blue blocks for emphasis.
- Do set display text in Pressural 900 uppercase with tight tracking and body in Gilroy.
- Do use full pill buttons with 20px 28px padding and 66px height.
- Do pair lime fills with forest-green text and light-blue fills with navy text.
- Do let product and food photography fill the width.
- Don't add shadows or thin outline buttons.
- Don't use the cookie-settings button or the carousel's faded logos as design reference.
- Don't set display text in lower case or at light weights.

## Responsive Behavior

The 390px mobile pass measured: the h1 is 60px/51px at 900, body text is 18px/24.3px at weight 500, and the primary button stays at 20px/26px weight 600. Navigation, column counts and carousel behaviour at mobile width are not measured.

## Iteration Guide

1. Start from `canvas` `#ffffff` with `ink` `#222222` text and navy `#02355a` for nav and footer.
2. Add a full-bleed photograph hero with a floating white rounded nav panel.
3. Use Pressural 900 uppercase at 224px/-7.84px (60px on mobile) for one big word.
4. Use pill buttons: light blue with navy text, lime with forest text, forest with lime text.
5. Present products in a centred carousel with round forest-green arrows.
6. Verify with `node web/scripts/verify-designs.mjs --slug=pepsico`.
