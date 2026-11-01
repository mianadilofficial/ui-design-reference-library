---
version: alpha
name: Ulta Beauty
category: "Beauty & Personal Care"
description: "Ulta Beauty home page measured live: white canvas with warm greys (#f8f5f2, #eae5e1) and black #000000 Circular text at light weight 300, black pill buttons with 100px radius and 40px height, a magenta #cc0058 price accent, 8px card radius, and saturated pink and orange promotional bands."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-2: "#f8f5f2"
  surface-3: "#fdf1f3"
  ink-3: "#736d69"
  ink-4: "#cc0058"
  ink-5: "#57544f"
  primary-hover: "#242018"
typography:
  display:
    fontFamily: Circular, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28px
    letterSpacing: "-0.3px"
  display-mobile:
    fontFamily: Circular, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.15px
  body:
    fontFamily: Circular, sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 16px
    letterSpacing: 0.25px
  button:
    fontFamily: Circular, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: 0.25px
  nav:
    fontFamily: Circular, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: 0.25px
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 7px
  s5: 8px
  s6: 11px
  s7: 13px
  s8: 16px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 11px 24px
    height: 40px
    borderColor: "{colors.ink}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 11px 24px
    height: 40px
    borderColor: "{colors.ink}"
  link:
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.lg}"
    padding: 13px 32px
  footer:
    textColor: "{colors.ink-3}"
---

## Overview

This DESIGN.md documents the Ulta Beauty home page measured from https://www.ulta.com/ (title "Ulta Beauty | Makeup, Skin Care, Fragrance, Hair Care & Beauty Products", language en-US, page 1280px wide and 6,098px tall in the first measurement). It is a dense retail page: a thin black-on-white utility strip ("Beauty in 2 hours or less—order online, pick up in store." with Join / Sign in, Track an Order, Community, Ulta Beauty Rewards, Find a Store, Gift Cards), a header with the orange-and-black ULTA BEAUTY wordmark and the primary links Shop, New, Brands, Deals, Discover, Services & Events, then a hero of promotional tiles, product carousels with "Add to bag" buttons, and saturated full-width promo bands in orange and hot pink.

The interface itself is neutral: white (`canvas` #ffffff) and warm-grey (`surface-2` #f8f5f2) surfaces and black text. Colour arrives from product photography and campaign bands. The voice is promotional and benefit-led: "Deals for you", "Today's deals", "Come see us!", "Up to 30% off", "Shop now", "Add to bag". The capture contains a Rewards sign-in popup and a floating feedback tab; these are not brand UI and are excluded from the tokens.

## Colors

`canvas` #ffffff dominates (11,767 area weight), with `surface-2` #f8f5f2 (6,676) as the product-card and section background and `surface-3` #fdf1f3 (997), a pale pink tint. A darker neutral #eae5e1 (941) and #e0dbd6 (4) were also measured. Saturated background areas: #f04c24 orange (382), #e90b5a hot pink (358) and #cc0058 deep magenta (25). Text colours by character count: `ink` #000000 (10,000), white (786), `ink-3` #736d69 (690, secondary and footer text), `ink-4` #cc0058 (481, sale prices and emphasis) and `ink-5` #57544f (106). `primary` is #000000 with `on-primary` #ffffff and `primary-hover` #242018 on hover. Borders measured as #000000 (66) and #e90b5a (1). The stylesheet exposes `--pal-color-*` tokens (for example `--pal-color-neutral-600` #736d69, `--pal-color-brand-orange-600` #ba4301), confirming the neutral and brand values come from a palette layer.

## Typography

The family is Circular (weights 300, 500, 700, with Circular Std 400/500/700 also loaded); sans-serif is the declared fallback. Circular carried 9,346 measured characters and Circular Std 2,150. The h3 role measured as Circular 500 at 24px / 28px with -0.3px letter spacing (`display`); mobile reduces it to 20px / 24px with 0.15px letter spacing (`display-mobile`). Body is Circular 300 at 14px / 16px with 0.25px letter spacing; buttons are 500 at 14px / 16px with 0.25px; nav is 500 at 16px / 20px with 0.25px. Weight 300 carries 8,997 characters, 500 carries 1,593 and 700 carries 906. Sizes by character count: 14px, 16px, 12px, 24px, then 20px, 32px and 40px. Circular is a commercial typeface; substitute a geometric sans only if it cannot be licensed.

## Layout

Content sits in a 1280px wide layout with about 30px side margins in the capture. Sections alternate a heading with a small item count ("Deals for you", "12 items") and a horizontally scrolling carousel with circular arrow buttons. Product cards sit on #f8f5f2 tiles with the brand in bold small caps above the product name, a star rating, a magenta price with the struck-through list price and a black "Add to bag" pill. Promo bands put a coloured text panel on the left and white cards on the right. Measured gaps are 8px (418 uses), 4px, 1px, 2px, 16px, 24px and 32px; paddings are 8px, 4px, 24px, 11px, 16px, 7px, 13px, 32px, 80px, 2px and 40px.

## Elevation & Depth

Depth is rare. Two box shadows were measured, both on floating panels: `rgba(35, 35, 35, 0.12) 0px 4px 16px 0px, rgba(35, 35, 35, 0.04) 0px -1px 4px 0px` and `rgba(22, 27, 29, 0.3) 0px 0px 16px 0px`. The measured card with the first shadow is the Rewards popup, so the shadow is documented here only as a fact of the page, not as a product-card style. Product tiles are flat colour fields. The stylesheet defines `--pal-default-elevation-low/medium/high/top` tokens and `--asc-box-shadow-02`.

## Shapes

Measured radii by count: 8px (156, cards and tiles), 4px (105), 100px (67, pill buttons), 50% (22, circular arrow and icon buttons), 16px (6) and one 16px 0px 0px 16px. Tokens: `xs` 4px, `sm` 8px, `md` 16px, `lg` 100px, `pill` 9999px. Primary buttons use `lg` 100px, producing a full pill at 40px height.

## Components

`button-primary` ("Shop now", "Add to bag", "Sign in or join for free*"): black fill, white Circular 500 14px label, 100px radius, 11px 24px padding, 40px tall, 1px black border; hover fill #242018. `button-secondary` has the same measured values. Outlined pills ("Shop all", "Find a store", "Find an event") use a 1px #000000 border. `nav-link` measured as a skip link ("SKIP TO MAIN", white text, 13px 32px padding, 46px tall, 100px radius), so it does not describe the visible nav; visible nav links in the capture are black 500 text. The header measured 146px tall. `footer` text is #736d69 with 700-weight column titles, containing Ulta Beauty Rewards, Help, Company, Social Media and an app-download block.

## Design System Architecture

No public Ulta design-system site was opened. The page's `:root` exposes two shipped token families: `--pal-*` (colour, spacing such as `--pal-l-spacer-03` 1.5rem, line height and font size scales, elevation) and `--asc-*` (box shadow and spacing such as `--asc-spacing-l4` 3.5rem), plus `--chat-messenger-typescale-*` for a third-party chat widget. Tailwind ring variables also appear in the shadow corpus. The de-facto system is therefore palette-driven tokens with a Circular type ramp and three component radii.

## Do's and Don'ts

Do keep the UI chrome black, white and warm grey and let photography and campaign bands carry colour. Do use black pill buttons at 40px with 11px 24px padding. Do use #cc0058 for sale prices. Do keep body weight at 300.

Don't document the Rewards popup, feedback tab or chat controls as brand components. Don't use shadows on product tiles. Don't use heavy body weights; 300 is the measured body weight. Don't use sharp-cornered primary buttons.

## Responsive Behavior

The mobile pass (390px wide) recorded: heading size 20px / 24px weight 500, body 14px / 16px weight 300, the primary CTA unchanged at 14px with a 309px by 40px black button, and a 390px by 90px header whose utility text is 12px. Carousel behaviour, column counts and menu form on mobile are not measured.

## Iteration Guide

1. Set canvas #ffffff, tiles #f8f5f2, text #000000, secondary text #736d69.
2. Build black 100px-radius pills, 40px tall, Circular 500 14px.
3. Show prices in #cc0058 with the list price struck through.
4. Use #f04c24 and #e90b5a only as full-width campaign bands.
5. Gate with `node web/scripts/verify-designs.mjs --slug=ulta-beauty`.

## Additional Measurements

Fonts loaded include Material Icons and Google Symbols for icon glyphs. Letter spacing was 0.25px on body, button and nav roles, which is the ramp's default tracking. The extraction counted a large number of characters at 0px font size (2,433), which are visually hidden accessibility strings and not a type size to reproduce. The cards in the product carousel show small colour-count captions ("3 colors"), a bold brand line, and a review count in grey; promo labels such as "Sale", "Online only", "App only" and "In store & online" appear as small badges on the tile corners in the capture.

The header and utility strip are white with black text, separated from the page by a thin grey rule in the capture. The wordmark is the only orange element in the header.
