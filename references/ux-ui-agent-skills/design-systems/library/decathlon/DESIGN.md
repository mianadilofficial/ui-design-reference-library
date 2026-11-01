---
version: alpha
name: Decathlon
category: "Design Systems"
description: Decathlon America's storefront is a white (#ffffff) Inter-only retail layout with 56px/700 hero headlines, near-black ink (#000000cf), an indigo store action colour (#3643ba) for announcement bar and cart buttons, a yellow (#ffcd4e) "Shop" pill, and 12px-radius buttons, over full-bleed outdoor lifestyle photography.
colors:
  canvas: "#ffffff"
  page-largest: "#ffffff"
  ink: "#000000cf"
  primary: "#3643ba"
  on-primary: "#ffffff"
  primary-hover: "#2e3998"
  accent-yellow: "#ffcd4e"
  modal-blue: "#0082c3"
  modal-blue-hover: "#006aa7"
  ink-soft: "#101010"
  ink-gray: "#232323"
  ink-black: "#000000"
  border-gray: "#e1e0df"
  text-input-bg: "#ffffffc7"
  scrim: "#00000026"
typography:
  display:
    fontFamily: Inter, sans-serif
    fontSize: 56px
    fontWeight: 700
    lineHeight: 56px
  display-mobile:
    fontFamily: Inter, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 48px
  heading:
    fontFamily: Inter, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 28px
  subheading:
    fontFamily: Inter, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: Inter, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 17.4px
  button:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 600
  nav:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 26.7429px
  link:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.4px
  input:
    fontFamily: Inter, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  lg: 8px
  2xl: 12px
  4xl: 32px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s5: 8px
  s6: 10px
  s8: 12px
  s9: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-shop-yellow:
    backgroundColor: "{colors.accent-yellow}"
    textColor: "{colors.ink-black}"
    typography: "{typography.link}"
    rounded: "{rounded.2xl}"
    padding: 16px 24px
    height: 54px
  button-modal:
    backgroundColor: "{colors.modal-blue}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 48px
    borderColor: "{colors.modal-blue}"
    boxShadow: rgba(0, 0, 0, 0.14) 0px 2px 2px 0px, rgba(0, 0, 0, 0.2) 0px 3px 1px -2px, rgba(0, 0, 0, 0.12) 0px 1px 5px 0px
  button-modal-hover:
    backgroundColor: "{colors.modal-blue-hover}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink-soft}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 12px 14px
    height: 48px
  card:
    backgroundColor: "{colors.scrim}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
  footer:
    textColor: "{colors.ink-soft}"
---

## Overview

The measured page is the American storefront of Decathlon (decathlon.com, title "Decathlon America | Outdoor Sports Clothing & Gear"). The capture shows a deliberately plain retail shell: a thin indigo announcement bar reading "Free Shipping on Orders $49+" in small white text, a white header, then full-bleed outdoor photography of people camping, hiking and sitting in a tent. Imagery carries the brand; the interface contributes almost no decoration. A "Best Sellers" row heads a product rail with a "View all" link, and a large video panel of a designer's desk sits below.

The capture was taken while two overlays were open: a geo-location dialog ("Looks like you're outside the U.S.", with a "Select Your Country" button and a "Stay on U.S. Site" outlined button) and a cart drawer ("Your cart", "You are $50.00 away from FREE SHIPPING!", "Get started with our top sellers"). The extractor picked the dialog's blue button as the primary call to action, but it is a utility dialog, not the storefront's main action. The storefront's own button variables, read from the page's CSS custom properties, set the primary button to #3643ba, which is also the colour of the announcement bar and the "Options" buttons in the cart. This file therefore treats #3643ba as primary and keeps the dialog blue (#0082c3) as a separate modal-blue token.

Microcopy is brisk and practical: sentence-case calls such as "Shop Hiking", "Select Your Country" and "Options", plain product names such as "Simond Men's MT100 Hooded Down Puffer Jacket", prices with a struck-through compare-at value ("$80.00 $119.00").

## Colors

Canvas is pure white (#ffffff); that is the largest background area (9,330 weighted units against 1,024 for the 20% black overlay). Ink is #000000cf, black at about 81% opacity, and it is the most-read text colour (2,182 weighted characters), used for nav links, headings and body. Additional text colours are #101010 for prices and form text, #232323 (the store's gray-80 variable), and pure #000000 on the yellow button.

Primary is the indigo #3643ba with white text; the store's primary-button hover background variable is rgb(46 57 152), which is #2e3998. A warm yellow #ffcd4e (the store variable named catchy) fills the "Shop Hiking" pill, with black text. The Decathlon-branded blue #0082c3 appears only in the country dialog, where it fades to #006aa7 on hover. The hairline border grey is #e1e0df (the store's gray-20). #ffffffc7 is the translucent input fill, and #00000026 is the scrim behind cards drawn over photography.

## Typography

One family does everything: Inter. The loaded font list also includes GT Standard, Font Awesome 5 Pro and three weights of a face named Decathlon Display, but Inter accounts for 3,374 weighted characters, against 51 and 38 for the two Display weights that appear. Hero display is Inter 56px/700 with a 56px line-height (48px/700 on mobile); section headings are 28px/700 ("Follow Us @Decathlon America") and 24px/700 ("Best Sellers"). Navigation is 16px/700. Buttons are 16px/600 in the dialog and 14px/400 on the yellow pill. The most-read size is 14px (1,527 characters), followed by 16px; the 12px/400 token is legal fine print ("By continuing, you agree to our Terms and Privacy Policy.") and is not the real reading size. Letter-spacing is negative at large sizes: 56px text is tracked -1.68px.

Inter is open source, so no substitute is required. Decathlon Display is proprietary; where unavailable, use Inter at weight 700 and treat it as an unmeasured accent.

## Layout

The page is a full-width stack: announcement bar, header, hero imagery edge to edge, then content rows inset by roughly 30px at the 960px capture scale. Product rails are horizontal strips of equal-width tiles with 8px gaps (the most frequent gap, 100 uses), 4px and 2px micro-gaps, and 11.2px in compact groups. Padding most often measures 16px, 10px and 40px. Header navigation items are 56px tall. The cart drawer is a right-anchored white panel with a product list in which each row pairs a square image, a title and price, and a right-aligned blue "Options" button.

## Elevation & Depth

The storefront is flat. The only measured shadow on actions is the three-layer Material-style stack rgba(0, 0, 0, 0.14) 0px 2px 2px, rgba(0, 0, 0, 0.2) 0px 3px 1px -2px and rgba(0, 0, 0, 0.12) 0px 1px 5px on the dialog buttons; a soft rgba(0, 0, 0, 0.15) 0px 0px 30px shadow also appears once on the page. Photography is separated by a dark scrim (#1414149c, #00000033) rather than by shadow.

## Shapes

Storefront primary and yellow buttons carry 12px radii (the style variable for primary buttons is 12px). The measured radii on the page are 32px (70 uses, the most common), 8px (17), 50% (8), 100px (7), 4px (7) and 40px (5); the style variable for variant-picker buttons is 4px, and the dialog buttons are 2px. Which element carries which of the larger radii was not individually verified. This blend of near-square utility buttons and generous 32px image corners is the visual signature.

## Components

Primary button: #3643ba fill, white label, 12px radius; hover #2e3998. Yellow "Shop" pill: #ffcd4e, black 14px/400 label, 16px 24px padding, 54px height, 12px radius. Dialog buttons: #0082c3 fill, white 16px/600 label, 12px 24px padding, 48px height, 2px radius and the three-layer shadow, with an outlined twin that has a #0082c3 2px border and light-grey hover. Text input: translucent white (#ffffffc7), #101010 text at 15px/400, 4px radius, 12px 14px padding, 48px tall. Product tile (from the cart's top sellers): square image, small title, price in #101010 and a struck-through compare-at price.

## Design System Architecture

Decathlon publishes a design system named Vitamin, at https://www.decathlon.design. The page I opened says Vitamin has evolved into Vitamin Play and asks visitors to log in with a Decathlon account to see the new components and documentation, so its foundation, token and component pages could not be read or measured; a link on that page leads to an archived version on zeroheight (https://zeroheight.com/726f8c765/), which opened only as a page titled Decathlon Design System with no readable content.

The public code is the Apache-2.0 repository https://github.com/Decathlon/vitamin-web, described as the web component library for the Decathlon Design System, with @vtmn/css (generated with Tailwind CSS), @vtmn/css-design-tokens, @vtmn/icons and @vtmn/assets, plus React, Svelte and Vue packages. Its token sources (packages/sources/css/src/design-tokens/src) define Roboto and Roboto Condensed as the typefaces and a radius scale of 4, 8, 12, 16, 20, 24, 32 and 48px. The measured storefront does not use Roboto; it uses Inter and theme custom properties such as --color-primary-button-text and --style-border-radius-buttons-primary, so the storefront is not a Vitamin build and no Vitamin token is used in this file. Vitamin is the corporate system; the de-facto storefront system is this file.

## Do's and Don'ts

Do let photography fill the width and keep interface chrome white, with ink at #000000cf. Do use #3643ba for primary actions and #ffcd4e for the single merchandising pill. Do show price and compare-at price together. Do set big headlines in Inter 700 with tight tracking.

Don't use the dialog blue #0082c3 for marketing buttons. Don't add decorative shadows to the storefront; only dialogs carry them. Don't mix 2px dialog radii into the 12px storefront button family. Don't present Decathlon Display as measured on this page beyond its small share of text.

## Responsive Behavior

The extractor measured a 390px mobile viewport; the only measured difference reflected here is the hero heading, which drops from 56px/700 to 48px/700 with a 48px line-height. No breakpoints from the storefront's CSS were read, so none are stated. Header navigation, the product rail and the cart were captured at desktop width only.

## Iteration Guide

Start from white and #000000cf. Use Inter throughout: 56px/700 hero, 28px/700 section titles, 14px/400 reading text. Choose #3643ba for the primary action with 12px corners, and reserve #ffcd4e for one merchandising pill per section. Put people outdoors in the photography. Do not apply Vitamin tokens from the public repository (Roboto, 4-48px radii) to this storefront without measuring them there first.
