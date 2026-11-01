---
version: alpha
name: "M·A·C Cosmetics"
category: "Beauty & Personal Care"
description: "M·A·C Cosmetics storefront: achromatic black, white and #f5f5f5 interface, Druk Text uppercase headings with Roboto Mono body, square 0px black ADD TO BAG buttons, round shade swatches and edge-to-edge beauty photography."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-card: "#f5f5f5"
  text-input-border: "#959595"
typography:
  display:
    fontFamily: "\"Druk Text\""
    fontSize: 36px
    fontWeight: 500
    lineHeight: 42.012px
    letterSpacing: 0.50004px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Druk Text\""
    fontSize: 22px
    fontWeight: 500
    lineHeight: 32.01px
    letterSpacing: 0.19998px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Druk Text\""
    fontSize: 18px
    fontWeight: 500
    lineHeight: 23.994px
    letterSpacing: 0.19998px
    textTransform: uppercase
  body:
    fontFamily: "\"Roboto Mono\""
    fontSize: 14px
    fontWeight: 300
    lineHeight: 21.994px
  button:
    fontFamily: "\"Roboto Mono\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14px
    textTransform: uppercase
  link:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 8px
  s5: 8.61px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 28.44px
  s10: 36px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 16px
    height: 40px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 4px 8px
    height: 40px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

M·A·C Cosmetics (maccosmetics.com, measured from the US site at 1280px) is a makeup, skincare and fragrance retailer-brand whose storefront is built as a stark black-and-white editorial grid. The fetched home page promotes the M·A·C Lover loyalty program, in-store makeup appointments, the Pro membership, Viva Glam, and an editorial section called M·A·Czine. The measured home page opens with a full-bleed campaign photograph overlaid with the headline "WELCOME BACK, FROST LIPSTICK" and a small white "SHOP NOW" button, followed by a "SHOP THE COLLECTION" carousel of product cards on light-grey tiles, a row of five close-up beauty portraits labelled NEW, LIPS, EYES, FACE and SKIN, a "WHAT'S NEW" pair of large images, and a black "WANT MORE HELP?" block with three service cards. The product, the face and the swatch carry all of the color; the interface itself is pure black, white and a single light grey. The page measures 3828px tall. A region-selection modal and a dimming scrim appeared in the first extraction, so the measurement was repeated with consent overlays hidden; the tokens here come from that repeat, and no popup, scrim or region picker is documented as brand UI.

## Colors

Everything measured is achromatic: `canvas` `#ffffff`, `ink` `#000000`, `surface-card` `#f5f5f5` (the product tiles) and `#000000` as a dark section and footer background. By area, white covers 4104 units, light grey 1975 and black 1793. Text colors are only black (2222 characters) and white (1169). `primary` is `#000000`, the fill of the "ADD TO BAG" button, with white text (`on-primary` `#ffffff`). The form border `#959595` is also published as the root variable `--color-forms-border`. The many other background colors with weight 1 (for instance `#d05170`, `#b0776b`, `#683e2f`, `#bc2f47`) are the shade swatches of individual products, not interface color, and they are deliberately left out of the token set. Other root variables such as `--color-info-on-container` `#21439b` and `--button-secondary-focus-color` `#3B52E8` exist in the stylesheet but are not measured on rendered page surfaces here, so they are not tokens.

## Typography

Two typefaces are loaded: Druk Text at weight 500 for headings and navigation, and Roboto Mono in weights 300, 400, 500 and 700 for everything else. Display type is Druk Text uppercase at 36px on a 42.012px line height with 0.50004px letter-spacing (used for "SHOP THE COLLECTION", "WHAT'S NEW" and "WANT MORE HELP?"); the 18px Druk Text step with 0.19998px tracking is the subheading and menu size. Body copy is Roboto Mono at 14px, weight 300, on a 21.994px line height. Buttons and many UI labels are Roboto Mono 12px, weight 400, 14px line height, uppercase, and 12px is by far the most used size (2288 characters). Product names and prices appear in the same monospace. The sans stack `ui-sans-serif, system-ui, sans-serif` is the 16px default for plain links and the body element. The contrast between a condensed grotesque display face and a monospaced text face gives the page a catalogue, price-tag voice.

## Layout

The grid is a wide, edge-aware page with 49.7778px side padding measured on the header and several containers. Common paddings are 16px (133 uses), 12px (48), 8px (39) and 3px; common gaps are 12px (123), 8px (78), 10px (49), 4px and 2px, with larger spacing steps at 28.4444px, 36px and 71.1111px. The home page rhythm is: hero banner, a horizontally scrolling product carousel with previous and next arrows, a five-up image row with underlined text labels, a two-up editorial pair, and a black help band that ends in a multi-column footer (SHOPPING, NEED HELP?, ABOUT BRAND, YOUR M·A·C STORE, PRIVACY & TERMS). Product cards stack a "New" or "Best Seller" tag, the product image, a shade name, circular shade swatches, a product title, a descriptor, a star rating with a count, a price and a full-width button.

## Elevation & Depth

No visible shadow is used. The only box-shadow values measured are fully transparent stacks (the Tailwind-style ring defaults, `--tw-inset-shadow: 0 0 #0000`), and one focus ring measured as a 1px `rgb(75, 61, 196)` outline-like shadow in the first pass. Separation is made with the `#f5f5f5` tile against white, a black band against white, and 1px black borders (17 measured) on buttons and tags.

## Shapes

Corners are square. The primary button, the text input and the nav are all measured at 0px radius (`--radius-none: 0`). A 2px radius appears on six elements (`rounded.xs`) and a fully round radius (measured as 3.35544e+07px, the computed value of a very large radius) appears on 24 elements, which are the circular shade swatches and similar dots, so `rounded.pill` is a swatch shape rather than a button shape.

## Components

- **Add to bag (button-primary):** a black rectangle, 40px tall, 252px wide in a product card, 12px Roboto Mono uppercase in white, 8px 16px padding, 1px solid black border, 0px radius. On the 390px pass the hero "SHOP NOW" link has the same black fill, 12px/400 type, 8px 16px padding and 40px height at 92px wide.
- **Text input:** white fill, `#959595` border, 14px Roboto Mono 300, 4px 8px padding, 40px tall, square corners.
- **Product card:** `#f5f5f5` tile with a top-left tag, centered product image, circular swatches with the selected one outlined, centered text, a price line with strike-through original price and a "(30% off)" note on sale items.
- **Category tiles:** square photographs with a bold underlined label below.
- **Footer and help band:** black background, white text, three image cards with an imperative underlined link ("JOIN NOW", "BOOK NOW", "CHAT NOW").
- **Promo bar:** top strip carrying "FREE SHIPPING ON ORDERS $60+" and a "SHOP" link, plus "M·A·C LOVERS SIGN UP FOR 15% OFF NEXT PURCHASE" in the fetched text.

## Design System Architecture

No public brand guideline or design-system page is linked from the home page; the footer links are Accessibility, Privacy Policy, Terms & Conditions and Counterfeit Education, so there is no official system to cite (source page: https://www.maccosmetics.com/). The de-facto system is visible in the stylesheet root variables: a Tailwind-based build (`--tw-inset-shadow`, `--pr-ring-offset-width`, `--max-width-sm` 24rem, `--max-width-md` 28rem, `--max-width-xl` 36rem, `--color-gray-300` in oklch) layered with brand semantic tokens named by role, such as `--button-primary-bg: #000000`, `--button-primary-border-width: 1px`, `--button-primary-inverse-bg: #fff`, `--button-gap: .5rem`, `--color-forms-border: #959595`, `--color-icon-primary: #000`, `--color-badge-secondary-text: #fff`, and typography variables like `--Typography-Body-XL-Font-Strong-Line-Height: 1.125` and `--Typography-Product-Price-Sale-Font-Size: .75rem`. The naming shows a component-token structure with inverse variants for dark sections.

## Do's and Don'ts

- Do keep the interface strictly black, white and `#f5f5f5`; let product shades supply color.
- Do set headings in Druk Text uppercase and everything else in Roboto Mono.
- Do use square-cornered, full-width black buttons with short imperative labels (ADD TO BAG, SHOP NOW, JOIN NOW, BOOK NOW).
- Do reserve circles for shade swatches.
- Don't add shadows or gradients; none are measured.
- Don't use the swatch colors as UI accents.
- Don't round buttons or inputs.
- Don't document the region-selection modal or scrim as brand UI.

## Responsive Behavior

The 390px mobile pass measured the display heading at 22px with a 32.01px line height and 0.19998px letter-spacing (down from 36px), body text at 12px weight 300 on a 16.8px line height, and a mobile font-size distribution of 12px, 16px, 14px, 18px and 22px. The hero button measured on mobile is the 40px-tall "SHOP NOW" link. Column counts, carousel behavior, navigation form and breakpoints on mobile are not measured.

## Iteration Guide

1. Start from white, black and `#f5f5f5`; no other interface color.
2. Headings: Druk Text 500 uppercase, 36px on desktop and 22px on the measured mobile pass.
3. Text: Roboto Mono, 14px weight 300 for body, 12px weight 400 uppercase for buttons.
4. Buttons: black, 40px tall, 8px 16px padding, 1px black border, 0px radius.
5. Photograph faces and products tightly cropped; keep captions to a name, a descriptor and a price.
6. Run `node web/scripts/verify-designs.mjs --slug=mac-cosmetics` after changes.
