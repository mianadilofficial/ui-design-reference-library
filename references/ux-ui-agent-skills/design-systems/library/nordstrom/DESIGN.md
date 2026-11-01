---
version: alpha
name: "Nordstrom"
category: "Retail & E-commerce"
description: "Nordstrom (nordstrom.com) retail home: Brandon Text bold 60px hero headline over full-bleed photography, near-black ink #191a1b on white and #f0f3f5, sale prices in #d82508, 4px-radius black buttons and cards with a 1px 4px soft shadow, built on the NDLS design variables."
colors:
  canvas: "#ffffff"
  page-largest: "#f0f3f5"
  ink: "#191a1b"
  primary: "#191a1b"
  on-primary: "#ffffff"
  price-sale: "#d82508"
  ink-gray-60: "#647175"
  ink-black: "#000000"
  sale-red-dark: "#b80009"
  hairline: "#191a1b45"
  border-critical: "#fd4830"
  rack-blue: "#186adc"
typography:
  display:
    fontFamily: "\"Brandon Text\", Arial, sans-serif"
    fontSize: 60px
    fontWeight: 700
    lineHeight: 68px
  display-mobile:
    fontFamily: "\"Brandon Text\", Arial, sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  heading:
    fontFamily: "\"Brandon Text\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 31.92px
  body:
    fontFamily: "\"Brandon Text\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
  button:
    fontFamily: "\"Brandon Text\", Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 14.95px
  button-secondary:
    fontFamily: "\"Brandon Text\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  none: 0px
  pill: 9999px
spacing:
  s1: 0.1px
  s2: 1px
  s3: 2px
  s4: 3px
  s5: 4px
  s6: 5px
  s7: 6px
  s8: 8px
  s9: 9px
  s10: 10px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 30px
    height: 40px
    borderColor: "{colors.ink}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 8px 16px
    height: 40px
    borderColor: "{colors.ink}"
  link:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 0px 5px
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-black}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 1px 2px
    height: 42px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(25, 26, 27, 0.15) 0px 1px 4px 0px
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

# Nordstrom

Nordstrom (https://www.nordstrom.com/, title "Nordstrom Online & in Store: Shoes, Jewelry, Clothing, Makeup, Dresses") is a US fashion department-store retailer. The measured home page is an editorial-plus-commerce layout built on the company's own design language, which its CSS names NDLS (`--ndls-*`): near-black ink #191a1b on white, a pale grey-blue band #f0f3f5, a single typeface (Brandon Text), small 4px-rounded buttons and cards with a very light shadow, and sale-price red. This document records what was measured.

## Overview

The page is 10367px tall. The top of the page is a near-black utility strip with the line "Shipping outside of the U.S.? Learn About International Shopping" and a country selector (Thailand). Beneath it is a white header: the wide-tracked NORDSTROM wordmark at the left, a long grey search field ("Search for products or brands"), a "Shop with AI" beta chip, "Sign In" and a bag icon with a counter. A single-row category nav follows (New & Now, Women, Men, Beauty, Shoes, Accessories, Kids, Designer, Home, Gifts, Sale, Services), with "Sale" in red.

The hero is a full-bleed editorial photograph carousel (1/6, with arrow controls and a play/pause control) with the headline "CHANEL Fall Winter 2026 Collection" in white bold 60px at the lower left and a white "Discover More" button. Below it, "Top Picks for You" is followed by a tab row (New Markdowns, Women's Work Clothing, Men's Work & Business Casual Outfits, Women's Under $100 and others) and a horizontally scrolling row of product cards: product image on a pale grey ground, a "Popular" tag, color swatches, a red "New Markdown" label, the brand name, a red sale price range with the struck-through original price in grey, and a star rating with a review count. A two-up editorial block, "Fall Dressing Starts Here", pairs two full-height portrait photographs with a centred text block and a black "Women's New Arrivals" button plus a text link "What's Hot Now".

## Colors

- `canvas` #ffffff: the page and header; `page-largest` #f0f3f5: the largest measured background (1345 units, `--ndls-color-background-subtle`), used for the search field and card image grounds.
- `ink` #191a1b (also `primary`): text (11713 characters), the "Sign up" and "Book Your Free Appointment" button fill, the utility strip and the selected-tab underline (`--ndls-color-border-selected`).
- `on-primary` #ffffff: text on dark buttons and over photography.
- `price-sale` #d82508: sale prices and "New Markdown" labels (2176 characters); `sale-red-dark` #b80009 appears on 4 characters.
- `ink-gray-60` #647175: secondary text, review counts and original prices (`--ndls-color-scale-gray-60`).
- `ink-black` #000000: input text (36 characters).
- `hairline` #191a1b45: the 1px card and divider border (171 elements); `#c2cbcd` and `#838d91` appear as lighter border tones (`--ndls-color-border-subtle`, `--ndls-color-border-default`).

Other measured backgrounds: #fff0ee (88 units, `--ndls-color-background-critical`), #efefef, #ffffffe6 and #f1bff5. The NDLS variables also publish a status set: `--ndls-color-border-critical` #fd4830, `--ndls-color-background-success` #ddf9f1, `--ndls-color-border-success` #209c7e, `--ndls-color-background-warning` #fff4d1, `--ndls-color-border-warning` #b28300, `--ndls-color-background-info` #ecf5fd, `--ndls-color-border-info` #3d8cff, plus sub-brand colors `--ndls-color-brand-rack-primary` #186adc (Nordstrom Rack) and `--ndls-color-brand-holiday-blue` #002456. Of these, #fd4830 and #186adc are recorded as tokens.

## Typography

One family: Brandon Text (regular and bold), declared as `--ndls-font-family-default` with an Arial, sans-serif fallback; 15121 of the measured characters use it. The NDLS also declares `Rack Sans` (`--ndls-font-family-rack-sans`) for the Rack sub-brand, and the page loads Noto Sans JP and KR, InterVariable and AS Circular for other components. Weights by character count: 400 (9678), 700 (5434), 390 (9).

- `display`: 60px / 68px, weight 700 (hero headline, white over photography). Mobile: 40px / 48px.
- `heading`: 24px / 31.92px, weight 700 ("Top Picks for You"). Mobile: 20px / 28px.
- `body`: 16px, weight 400 (11819 characters), line height normal.
- `button`: 13px / 14.95px, weight 400 ("Sign up").
- `button-secondary`: 14px / 20px, weight 700 (editorial CTAs).

Other measured sizes: 14px (1112), 12px (646), 13px (546), 28px (370), 32px (185), 15px, 24px and 40px. Letter-spacing is default everywhere except 14px with 2px (3 characters). Brandon Text is a licensed typeface; no open substitute was identified from a source, so use the Arial, sans-serif fallback.

## Layout

The page is a stack of full-width bands with the wordmark and headings aligned to a shared left gutter. The hero is full-bleed; the product row is a horizontal carousel with arrow buttons at each edge; the editorial block is a three-column arrangement of image, text, image. Measured gaps: 8px (216), 12px (119), 16px (31), 5px, 11px, 24px, 60px and 4px. Paddings: 1px (184), 6px (171), 3px (154), 8px (153), 2px (118), 16px (74), 4px (61), 32px (38), 30px and 24px. The NDLS defines layout spacing variables such as `--ndls-layout-space-11` 96px.

## Elevation & Depth

One shadow dominates: `rgba(25, 26, 27, 0.15) 0px 1px 4px 0px`, measured on 78 elements (product cards and carousel controls). The NDLS also publishes a larger elevation, `--ndls-elevation-scale-shadow-80` `0px 12px 32px 0px rgba(25,26,27,0.15)`. Product images sit under a `--ndls-color-overlay-product-image` of rgba(25,26,27,0.05). Otherwise depth is flat: borders at 45% alpha and the #f0f3f5 band separate content.

## Shapes

Radii measured by frequency: 2px (229 elements), 4px (134), 8px (40), 50% (6, circular carousel buttons and swatches), 500px (1) and 9999px (1). The NDLS names them `--ndls-border-radius-00` 0px, `-40` 4px, `-80` 8px, `-160` 16px, `-pill` 500px, `-circle` 50%, `-input` 4px and `-image` 4px. The primary "Sign up" button is square (0px), editorial buttons are 4px, cards and images are 4px.

## Components

- Primary button ("Sign up"): #191a1b fill, white 13px text, 0px radius, 0px 30px padding, 40px tall (239px wide), 1px #191a1b border.
- Secondary button ("Book Your Free Appointment", "Women's New Arrivals"): #191a1b fill, white 14px bold, 4px radius, 8px 16px padding, 40px tall, 2px #191a1b border.
- Outlined or light button ("Discover More"): white fill, #191a1b bold 14px text, 4px radius, 2px white border; hover fill rgb(240, 243, 245).
- Search field: #f0f3f5 fill, 42px tall, 1px 2px padding, 16px text.
- Product card: 4px radius, shadow `rgba(25, 26, 27, 0.15) 0px 1px 4px 0px`, pale image ground, "Popular" tag, swatches, red price, struck original price in grey, star rating.
- Tabs: text tabs with a 2px black underline on the selected tab.
- Carousel control: white circle with a chevron, 50% radius.

## Design System Architecture

Nordstrom's design system is visible in the shipped CSS as NDLS, with about 400 custom properties on `:root`. They are named in layers: scales (`--ndls-color-scale-gray-20` #dce3e6, `-30` #c2cbcd, `-40` #a4afb2, `-50` #838d91, `-60` #647175, `-80` #3e4142; `--ndls-color-scale-red-10` #fff0ee through `-100` #370902), semantic colors (`--ndls-color-background-default` #fff, `-subtle` #f0f3f5, `--ndls-color-border-default`, `-subtle`, `-disabled` #dce3e6, `-selected` #191a1b), brand colors (`--ndls-color-brand-primary` #000, `--ndls-color-brand-nordstrom-primary` #000, `--ndls-color-brand-nordstrom-secondary` #fff), typography (`--ndls-font-family-default`, `--ndls-font-size-80` 0.875rem, `--ndls-line-height-170` 2.25rem, `--ndls-text-body-strong-mobile-medium-size` 1rem, `--ndls-text-heading-mobile-small-size` 1.25rem, `--ndls-text-detail-strong-desktop-xsmall-weight` 700), borders (`--ndls-border-width-10` 1px, `-40` 4px) and radii. A separate `--chat-messenger-*` set belongs to an embedded chat widget and is not documented as brand UI. No public NDLS documentation was opened, so only the shipped variables are cited.

## Do's and Don'ts

- Do use #191a1b for text and primary buttons on white; use #f0f3f5 for subtle surfaces.
- Do use Brandon Text, bold for headings and prices, regular for body.
- Do show sale prices in #d82508 with the original price struck through in grey.
- Do keep corners to 2px to 8px, and use a single 1px 4px soft shadow on cards.
- Don't use pure black for UI text; ink is #191a1b (pure black only in inputs and the brand wordmark variable).
- Don't use the Rack blue or the holiday blue on the main Nordstrom brand page.
- Don't document the chat messenger widget as brand UI.

## Responsive Behavior

Measured at the 390px mobile pass: the hero headline is 40px / 48px (60px / 68px on desktop), the h2 is 20px / 28px (24px / 31.92px on desktop), body is 16px, the primary button text is 14px / 20px on #191a1b, and the nav role is 20px / 28px. Common mobile sizes by character: 16px (11819), 14px (1100), 12px (646), 13px (539), 28px (488). The carousel behavior, nav collapse and card count per row on mobile were not measured.

## Iteration Guide

1. Set white and #f0f3f5 surfaces with #191a1b text; set the hero headline in white bold 60px over a full-bleed photo.
2. Build product cards with 4px radius and the 1px 4px shadow; show prices in #d82508.
3. Use black 4px-radius buttons with white bold 14px labels for editorial CTAs, and a square 13px "Sign up" button.
4. Take values from the NDLS variable names where available.
5. Re-run the gate after renames; keep measured values unchanged.
