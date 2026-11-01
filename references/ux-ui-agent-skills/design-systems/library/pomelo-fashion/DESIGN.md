---
version: alpha
name: Pomelo Fashion
category: "Thai Brands"
description: "Pomelo's US storefront (pomelofashion.com/us/en) is a white-canvas, photo-led fashion shop: black #000000 ink, a #e4e4e4 grey product-tile ground, CircularXX Web Medium/Regular set small (12-20px), 1px square outlined SHOP NOW buttons with 1.35px uppercase tracking, and a #dd5260 coral reserved for error and sale emphasis."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  surface-tile: "#e4e4e4"
  ink-muted: "#666666"
  ink-promo: "#89bcc8"
  ink-soft: "#a1a1a1"
  border-soft: "#cccccc"
  coral: "#dd5260"
  promo-banner: "#fff5b0"
typography:
  display:
    fontFamily: circularxxweb-medium, "Helvetica Neue", helvetica, arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: 0.15px
  heading:
    fontFamily: circularxxweb-medium, "Helvetica Neue", helvetica, arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.1px
  nav:
    fontFamily: "\"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
  link:
    fontFamily: circularxxweb-regular, "Helvetica Neue", helvetica, arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
    letterSpacing: 0.44px
  button-outline:
    fontFamily: circularxxweb-medium, "Helvetica Neue", helvetica, arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18px
    letterSpacing: 1.35px
    textTransform: uppercase
rounded:
  xs: 1px
  sm: 1.11px
  md: 2px
  lg: 4px
  xl: 8px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 11px
  s9: 12px
  s10: 16px
components:
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button-outline}"
    rounded: "{rounded.xs}"
    padding: 0px 12px
    height: 40px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 0px 24px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
    borderColor: "{colors.surface-tile}"
---

## Overview

Pomelo is a Southeast-Asian fast-fashion label, and this file documents what was measured on its US/English storefront at `https://www.pomelofashion.com/us/en/` (the extractor's final URL). The page is a retail catalogue, not a brand story: a one-line promo strip, a slim white header, one large black-and-white campaign hero ("POMELO.MAN"), a "Best Sellers" carousel and then a four-column product grid that runs for 9,592px of scroll height. Almost all colour on the page comes from photography. The interface itself is deliberately colourless so that garments carry the page: white canvas, black text, grey product tiles.

The voice is short and transactional. The promo strip reads "10.10 Sale Now On: Up to 35% off | Don't Miss Out! Voucher Expires Soon" with a live day/hour/minute/second countdown; product cards read "Striped Long Sleeve Tee - Baby Blue" with a price and a "34 sold" counter; the footer tagline is "Your Fashion Playground". Navigation labels are plain category words: For You, New In, Signature, Top Seller, Man, then Tops, Dresses, Bottoms, Restock.

Density is high but the type is small and quiet. The dominant text sizes by character count are 12px (3,104 characters), 14px (865), 10px (78), 16px (63) and 20px (12), so the product grid is read at 12px while the single largest interface string, the "Best Sellers" section title, is only 20px.

## Colors

The palette is neutral by construction. Measured text colours by character count: `#000000` (3,324), `#666666` (459), `#dd5260` (136), `#89bcc8` (95), `#a1a1a1` (93), `#cccccc` (10).

- **canvas `#ffffff`** is the header and page ground. Largest measured background by area is `#e4e4e4`, which is the grey behind product cut-outs (bags, shoes, shorts) in the grid; it is named `surface-tile`.
- **ink / primary `#000000`** is body text, nav, the outlined button text and border, and the site's own CSS custom property `--primary: #000`. There is no filled brand-colour button on the measured page, so `primary` is black, taken from that published variable.
- **ink-muted `#666666`** carries secondary text such as sold counts and prices metadata; **ink-soft `#a1a1a1`** equals `--secondary-dark`; **border-soft `#cccccc`** equals `--secondary`.
- **coral `#dd5260`** is the site's `--error` variable and is also the third most-read text colour, so it appears as emphasised sale or alert text. The same family appears as `--error-light #f4afb8` and `--error-dark #980017`.
- **promo-banner `#fff5b0`** is the pale yellow fill of the top promotional strip, and **ink-promo `#89bcc8`** is the teal of the strip's text (it is also the colour measured on the body element at capture time).

Other custom properties published in the stylesheet root, not seen as large surfaces on the home page: `--accent #6f61e2` with `--accent-light #cfceeb` and `--accent-dark #3e05a5`, `--success #74b5a1`, `--warning #efbdb4`, `--desktop-banner #fff4de`, and a loyalty-tier set (`--loyalty-gold #D3B98C`, `--loyalty-pink #FF829A`, `--loyalty-diamond-primary #7FBCFD`, `--loyalty-black #000000`, `--loyalty-gray-light #FAFAFA`). Treat these as the system's reserve palette, used outside the measured home view.

## Typography

Two commercial-looking web fonts are loaded: `CircularXXWeb-Medium` and `CircularXXWeb-Regular` (the CircularXX family), plus `graphikth-regular`, a Thai-script face used for Thai strings. The measured family weights by character count are circularxxweb-regular 2,340, circularxxweb-medium 819, graphikth-regular 496 and Helvetica Neue 467. Fallback stack on every token: `"Helvetica Neue", helvetica, arial, sans-serif`. No licensed-font substitute is declared by the site beyond that stack.

- **display** (the "Best Sellers" title): CircularXX Medium, 20px, weight 400 (the Medium cut is loaded as its own family, so the numeric weight stays 400), 28px line-height, 0.15px tracking.
- **heading** (the "Pomelo." wordmark element and card labels): CircularXX Medium, 14px/20px, 0.1px tracking.
- **link / body copy**: CircularXX Regular, 16px/22px with 0.44px tracking for category links such as Tops and Dresses.
- **nav**: Helvetica Neue stack, 16px, weight 400, no tracking.
- **button-outline**: CircularXX Medium, 14px, weight 500, 18px line-height, 1.35px letter-spacing, uppercase. This wide tracking on small caps is the one distinctive typographic gesture of the interface.

Weights measured by character count: 400 (3,718), 500 (397), 700 (7). Hierarchy is made by cut (Medium vs Regular), size and the uppercase button style, not by bold weights.

## Layout

The header is 48px high, white, with 24px horizontal padding; the centred nav (For You, New In, Signature, Top Seller, Man) sits between a menu icon plus "Pomelo." wordmark on the left and Register / Login, search and bag icons on the right. Above it runs the full-width yellow promo strip.

The hero is a full-bleed split photograph (two portraits side by side) with a single white wordmark "POMELO.MAN" centred over the join and slide dots plus arrows at the edges. Beneath it, category links (Tops, Dresses, Bottoms, Restock) sit over a white gradient.

Below that: a "Best Sellers" row, a horizontally scrolling carousel of portrait product images with name, price at left and sold count at right, with a next arrow at the right edge; a centred SHOP NOW outlined button; then a filter row (Tops, Bottoms, Dresses, Outerwear, Accessories, Bags as small bordered chips, plus Size and Sort & Filter at the right) and a four-column grid. Each grid card is image, brand label ("Pomelo." or "PML." in bold), heart icon, product name, price, sold count, and a row of colour swatches with a "+" overflow.

Measured spacing values in use: 2, 3, 4, 5, 6, 8, 10, 11, 12 and 16px; the scale is small and tight.

## Elevation & Depth

The interface is flat. The single measured box-shadow on the page is `rgba(0, 0, 0, 0.1) 0px 0px 15px 0px`, a soft ambient glow used once. Separation is made with the `#e4e4e4` tile ground, hairline 1px borders (the footer border is `1px solid #e4e4e4`) and whitespace. The hero image carries a white fade at its lower edge to hand over to the white canvas. A cookie alert (`jsx-279957201 alert-cookie`) was hidden during measurement and is not documented as brand UI.

## Shapes

Radii measured by frequency: 1.11px (59), 8px (45), 4px (13), 1px (4), 50% (1), 2px (1). The outlined button uses 1px, effectively square; the 1.11px and 8px values belong to card and image containers and chips; a 50% radius appears once (a circular icon control such as the carousel arrow). A `pill` 9999px token is retained from the generated tokens set but is not a dominant shape. Square, hairline-bordered controls are the house style.

## Components

- **button-outline (SHOP NOW)**: transparent fill, `1px solid #000000` border, 1px radius, 40px high, 0 12px padding, CircularXX Medium 14px uppercase with 1.35px tracking, black text. Width measured at 115px.
- **Filter chips**: small bordered rectangles with 12px text (Tops, Bottoms, Dresses, Outerwear, Accessories, Bags); the Size dropdown and "Sort & Filter" control are at the right of the same row.
- **Product card**: image on a `#e4e4e4` tile, bold brand label, heart (wishlist) icon, name, price in 12px, sold count right-aligned in `#666666`; colour swatches beneath, with a "+" for extra colours.
- **Nav**: 48px, white, links in black 16px; hover was measured on nav links and the colour did not change (black before and after).
- **Footer**: black text on canvas, "Pomelo / Your Fashion Playground", with a 1px `#e4e4e4` border.
- **Promo strip**: `#fff5b0` fill, teal `#89bcc8` text, centred, with a countdown.

## Design System Architecture

No public design-system site or brand-guideline page was opened for this brand, so no official system is documented here. The de-facto system is visible in the shipped CSS. It declares semantic custom properties on the root: `--primary #000`, `--secondary #ccc`, `--secondary-light #e4e4e4`, `--secondary-dark #a1a1a1`, `--neutral #fff`, `--accent`, `--success`, `--warning`, `--error` (each with `-light` / `-dark` variants) and a `--loyalty-*` tier palette, plus `--ff` set to the Helvetica Neue stack. Component class names are generated by styled-jsx (for example `jsx-279957201`), so styling is scoped per component. Source of measurement: `web/data/extracted/pomelo-fashion.json`, page `https://www.pomelofashion.com/us/en/`.

## Do's and Don'ts

- Do keep the canvas white and let photography supply colour.
- Do use `#000000` for text and button borders, and `#e4e4e4` behind cut-out products.
- Do set button labels in uppercase CircularXX Medium 14px with 1.35px tracking.
- Do keep controls square (1px radius) and bordered rather than filled.
- Don't use `#dd5260` as a decorative brand colour; it is the `--error` value and sale/alert emphasis.
- Don't add shadows; the page has one faint ambient shadow and otherwise relies on borders.
- Don't treat the cookie alert or the countdown timer as brand components.
- Don't introduce bold weights; the page uses 400 and 500 almost exclusively (700 appears on 7 characters).

## Responsive Behavior

The extractor's mobile pass recorded type only: the "Best Sellers" title stayed 20px/28px, and the mobile font-size distribution was 12px (3,104 characters), 14px (852), 10px (78), 16px (25) and 20px (12), against 16px (63) on desktop. Mobile nav, grid column count, breakpoints and touch-target sizes were not measured. The desktop capture was taken at a 1280px viewport.

## Iteration Guide

1. Start from `canvas #ffffff` and `ink #000000`; add `surface-tile #e4e4e4` only behind product images.
2. Build buttons from the `button-outline` token: 40px high, 1px black border, 1px radius, uppercase 14px with 1.35px tracking.
3. Use CircularXX Medium for titles and labels and CircularXX Regular for links; keep the Helvetica Neue stack as the fallback.
4. Keep text at 12px for dense catalogue content, 14px for labels and 16px for navigation links; reserve 20px for section titles.
5. Use `coral #dd5260` only for error or sale emphasis, and `promo-banner #fff5b0` only for the top announcement strip.
6. Re-measure with `node web/scripts/extract-tokens.mjs --slug=pomelo-fashion --url=https://www.pomelofashion.com/us/en/ --force --no-motion` after any change, then run `node web/scripts/verify-designs.mjs --slug=pomelo-fashion`.
