---
version: alpha
name: "GODIVA"
category: "Food & Beverage"
description: "Godiva Chocolatier retail site: warm white #fcfaf7 canvas with #ffeceb blush and #faf4eb cream bands, #212121 ink, gold #dcc193 square buttons with uppercase 16px gotham bold, 64px gotham uppercase hero, Castoro serif 18px body, 12px card radius and product-led holiday photography."
colors:
  canvas: "#fcfaf7"
  blush: "#ffeceb"
  ink: "#212121"
  primary: "#dcc193"
  on-primary: "#212121"
  surface-cream: "#faf4eb"
  surface-white: "#ffffff"
  ink-soft: "#3d3d3d"
  ink-black: "#000000"
  on-dark-light: "#cccccc"
  on-dark-muted: "#b8b8b8"
  text-input-bg: "#333333"
  text-input-text: "#e0e0e0"
typography:
  display:
    fontFamily: gotham, sans-serif
    fontSize: 64px
    fontWeight: 500
    lineHeight: 64px
    textTransform: uppercase
  display-mobile:
    fontFamily: gotham, sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 39.6px
    textTransform: uppercase
  subheading:
    fontFamily: gotham, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 23.94px
    letterSpacing: 0.8px
    textTransform: uppercase
  body:
    fontFamily: Castoro, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28.08px
  button:
    fontFamily: gotham, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: 0.8px
    textTransform: uppercase
  nav:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: gotham, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 15.96px
  input:
    fontFamily: Castoro, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 12px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 2.1px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 11px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 32px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.surface-white}"
  button-secondary:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 32px
    height: 48px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 0px 12px
    height: 44px
---

## Overview

Godiva (godiva.com, "GODIVA Chocolates | Gourmet Chocolate Gifts and Truffles – GODIVA Chocolatier, Inc.") is a premium chocolate gift retailer. The measured page is a long, seasonal commerce home page: a pink announcement bar ("Free Standard Shipping on Orders $50+ Code: FREESHIP50"), a white header with the GODIVA wordmark and "BELGIUM 1926" under it, five uppercase menu items (Holiday Preview, Best Sellers, Chocolate, Gifts, About Godiva) with search, account and bag icons, and a full-width campaign hero with a large uppercase headline, a short serif paragraph and a gold "LEARN MORE" button. The extracted h1 reads "THE SEASON OF GIVING STARTS HERE", and the later capture shows another slide, "PERSONALIZE YOUR GIFTS", so the hero rotates.

Below the hero come product rows ("NEW ARRIVALS", "BIRTHDAY GIFTS") of cream product cards with the name in uppercase gotham, a dollar price and a star rating with review count, a "GODIVA.COM EXCLUSIVES" row of three photographed offers, a campaign band for the 2026 Advent Calendar, a dark black-and-white heritage band "UNPARALLELED BELGIAN HERITAGE SINCE 1926", a four-column "THE ART OF INDULGENCE" values row (Bold, Irresistible, Generous, Sensorial), collection tiles (Truffles, Gold Collection, Masterpiece), a "GIVE THE GIFT OF GODIVA" bar and a dark footer with a newsletter field.

The first capture frame also showed an email-signup modal ("UNLOCK 15% OFF YOUR FIRST ORDER"), a dim scrim and a cookie panel; those are overlays and are not documented here as brand UI. The voice is polished and warm: uppercase titles, serif body sentences and gifting language.

## Colors

- **Canvas** `#fcfaf7`, a warm off-white, with **blush** `#ffeceb` (the largest measured background area, 2950 units, used for large pink campaign bands) and **surface cream** `#faf4eb` (1612 units) for product image wells and alternating bands; `#ffffff` (820 units) for the navigation and white buttons.
- **Ink** `#212121` is the text and dark-button color (2831 characters); `#3d3d3d` (ink soft) carries 1025 characters of paragraph text; `#000000` appears for 203 characters.
- **Primary** `#dcc193`, a muted gold, fills the primary button (23 area units) with `#212121` text, and also appears as text on 37 characters.
- **Dark surfaces**: `#1f1f1f` (649 units) for the heritage band and footer, `#212121` (201 units); text on dark is `#ffffff`, `#cccccc` and `#b8b8b8`.
- **Pink** `#f1bbc0` (41 units) is the announcement bar fill. A dark input fill `#333333` with `#e0e0e0` text is the newsletter field.

The theme variables name a gold tint scale, for example `--color-secondary-warm-gold-tint-4` is `252 250 247` (the canvas).

## Typography

Three families are measured: **gotham** (2333 characters; 400, 500 and 700), **Castoro** (2614 characters; 400, a serif) and `ui-sans-serif` system fonts (140 characters), with Arial for 102 characters.

- **Display**: gotham 64px, weight 500, line height 64px, uppercase (36px, line height 39.6px on mobile).
- **Subheading**: gotham 18px, weight 700, line height 23.94px, letter spacing 0.8px, uppercase (product names).
- **Body**: Castoro 18px, weight 400, line height 28.08px.
- **Button**: gotham 16px, weight 700, line height 24px, letter spacing 0.8px, uppercase.
- **Nav**: system sans 16px for the icon area; the visible menu items measure gotham 14px, weight 700, letter spacing 0.8px.
- **Link**: gotham 12px, weight 700, line height 15.96px (the promo code link).
- **Input**: Castoro 16px, weight 400.

Weights by character: 400 (2969), 700 (1838), 500 (382). Sizes: 18px (2796), 16px (1601), 12px (317), 36px (244), 14px, 64px (75). The pairing of tracked-out uppercase sans with a book serif is the central typographic gesture.

## Layout

The page is 1280px wide and 7367px tall. Content uses a wide centered container with generous side margins; product rows are carousels showing about four and a half cards with the last cut off by the edge, and exclusives sit in three equal columns. Campaign bands alternate full-bleed image and text halves. The header height variable is `--header-height` 111.953125px. Measured spacing: 2, 2.1, 4, 6, 8, 11, 12, 16, 20 and 28px; the buttons are padded 12px 32px and inputs 0 12px. The theme exposes responsive space variables (`--space-responsive-4xs`, `--space-responsive-xs`, `--space-responsive-sm`) mapped to mobile values and `--space-block-alternate-bottom-mobile` of 96px.

## Elevation & Depth

Only one shadow is measured, a Tailwind-style `rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px`. Cards are flat on cream wells; depth comes from photography, the dark scrim over modals and the dark heritage band.

## Shapes

Radii: 12px (22 uses; cards, inputs and chips) and 9999px (7 uses; circular icon buttons such as the bag counter). Buttons are square: the primary CTA radius is 0px. Tokens: `none` 0px, `xs` 12px and `pill` 9999px.

## Components

- **Primary button**: `#dcc193` fill, `#212121` text, gotham 16px bold uppercase with 0.8px tracking, padding 12px 32px, 48px high, square corners. Hover changes the background to white (`#ffffff`).
- **Secondary button**: white fill, dark text, same type and size ("SHOP NOW").
- **Dark button**: `#212121` fill, white text (the mobile primary, "CELEBRATE WITH GODIVA").
- **Product card**: cream image well, uppercase 18px bold name, price in bold, gold stars with count.
- **Navigation**: white bar, uppercase 14px bold items with chevrons.
- **Newsletter input**: `#333333` fill, `#e0e0e0` text, 44px high, 12px horizontal padding.
- **Icon buttons**: circular (9999px), light grey `#f5f5f5` background on hover state `#eaeaea`.

## Design System Architecture

No public Godiva design system or brand guideline was found. The shipped CSS is a Tailwind build with a custom token layer: 173 root variables, including `--base-size-1` (1px), a type scale (`--font-size-title1` as `--base-size-18`, `--font-size-t1` as `--base-size-32`, `--font-size-quote3` as `--base-size-22`), responsive spacing tokens, `--space-exception-title-8` (8px), `--header-height`, and color tokens such as `--color-secondary-warm-gold-tint-4`. Swiper icons are used for carousels. The system is therefore tokenized with base sizes and named color tints.

## Do's and Don'ts

- Do use warm whites (`#fcfaf7`, `#faf4eb`) with blush `#ffeceb` for campaign bands.
- Do pair tracked uppercase gotham with Castoro serif body.
- Do keep buttons square, gold with dark text, 48px high.
- Do show products on cream wells with price and rating.
- Don't round buttons; the measured radius is 0px.
- Don't use bright colors in the interface; product and holiday photography provides the color.
- Don't document the signup modal, scrim or cookie panel as brand UI.

## Responsive Behavior

The mobile pass at 390px recorded: h1 at 36px weight 500 (350px wide, 119px high), body at 16px, weight 400 (350px wide), a dark primary button "CELEBRATE WITH GODIVA" at 16px weight 700 (350px wide, 48px high) and a nav block 390px wide and 65px high. Mobile sizes by character are 16px (2312), 14px (1868), 13.008px (775), 12px (317), 9px (313), 28px (204), 18px (161) and 36px (75). Column counts and menu behavior are not measured.

## Iteration Guide

1. Start on `{colors.canvas}` with `{colors.blush}` and `{colors.surface-cream}` bands.
2. Use `{typography.display}` for campaign headlines and `{typography.body}` in Castoro for supporting copy.
3. Use `{components.button-primary}` for the main call to action.
4. Show products at `{rounded.xs}` on cream with uppercase names.
5. Run `node web/scripts/verify-designs.mjs --slug=godiva` after changes.

Imagery and microcopy: the capture shows styled still-life photography of boxed truffles on cream wells, green and red holiday tins with gold detailing, a vintage pink delivery truck and archival black-and-white photographs of chocolatiers in white coats, and a decorative script wordmark pattern behind the pink hero band. Copy is gift-centered and sensory ("Bold", "Irresistible", "Generous", "Sensorial"), headlines are uppercase, and the heritage band states "Founded in Brussels" style history in serif paragraphs. Offers are phrased plainly, such as "A free gift with your 24-piece cherry cordials purchase".
