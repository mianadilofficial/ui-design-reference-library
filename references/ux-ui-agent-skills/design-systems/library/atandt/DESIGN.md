---
version: alpha
name: AT&T
category: "Telecom"
description: "AT&T consumer home page: white #ffffff and cool grey #f3f4f6 surfaces with sky tint #f2fafd, ink #1d2329, brand cobalt #00388f pill buttons (28px radius, 48px tall), cyan #009fdb hero headline, bold sans at 48px with -1.44px tracking, card shadow 0 4px 20px 6px."
colors:
  canvas: "#ffffff"
  ink: "#1d2329"
  primary: "#00388f"
  on-primary: "#ffffff"
  primary-hover: "#0057b8"
  surface-grey: "#f3f4f6"
  tint-sky: "#f2fafd"
  ink-secondary: "#454b52"
  link-blue: "#0072b2"
  accent-cyan: "#009fdb"
  text-input-border: "#686e74"
typography:
  display:
    fontFamily: font-bold, sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 55.2px
    letterSpacing: "-1.44px"
  display-mobile:
    fontFamily: font-bold, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 32.2px
    letterSpacing: "-0.84px"
  subheading:
    fontFamily: font-bold, sans-serif
    fontSize: 26px
    fontWeight: 400
    lineHeight: 29.9px
    letterSpacing: "-0.78px"
  body:
    fontFamily: font-regular, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 27.6px
    letterSpacing: "-0.72px"
  button:
    fontFamily: font-bold, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
  input:
    fontFamily: font-regular, sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 28px
  xl: 32px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 24px
  s8: 32px
  s9: 48px
  s10: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 32px
    height: 48px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 32px
    height: 48px
    borderColor: "{colors.canvas}"
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 32px
    borderColor: "{colors.primary}"
  nav:
    textColor: "{colors.tint-sky}"
  nav-link:
    textColor: "{colors.tint-sky}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 32px
    borderColor: "{colors.tint-sky}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 0px 48px 0px 16px
    height: 48px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0.4) 0px 4px 20px 6px
    transform: matrix(1, 0, 0, 1, 0, 0)
---

## Overview

att.com ("AT&T Official Site | Our Best Wireless & Internet Service", language en) is the personal-customer storefront of the US carrier. The capture starts with a thin utility strip (Personal, Business, Find a store, Ver en español) above the main bar: the AT&T globe-and-wordmark logo at the left, a menu of Shop, Deals, AT&T Difference and Support, a "Search or chat" pill, a cart icon and an account icon. A pale sky banner follows ("Switch to AT&T and learn how to get up to $800/line to break your contract. Shop now") and a large cyan headline, "Great connections start here". A floating "ORDER NOW 844-993-0786" tab and a "CHAT" control sit at the right edge.

Below are promotional bands: a grey band with "Get the new iPhone 18 Pro for $0" and a "Shop now" pill; a carousel with "Get the new iPhone 18 Pro Max for up to $1,200 off" and a phone on a white rounded card flanked by outlined circular arrows; a deep-blue AT&T Fiber band ("Get unlimited 300Mbps internet for $50/mo.") with an address form and a "Check availability" button; a row of white offer cards with "Online only" circles; "Explore more of AT&T" with a line-icon shortcut row (Holiday gift guide, Explore internet, Shop phones and so on); a holiday gift-guide band; an "Unlimited Your Way" band; and "Let's get you connected" with four product cards and "Learn more" pills.

A privacy and cookie banner ("Manage your preferences", "Opt out", "Continue without changes"), the chat control and the order-now tab were in the capture; they are not brand UI and are not documented as tokens. The first extraction caught a version of the page with a different layout and it was re-measured once; this file reflects the second measurement (5,300px tall at 1280px).

The voice is plain and offer-led: a customer-type label ("New & existing customers"), a bold price-first headline, one sentence explaining the condition ("Any condition."), small legal text beneath, and a "Shop now" pill.

## Colors

- **Canvas** `#ffffff` (3,153 area units); **surface grey** `#f3f4f6` (2,164, the promo band background); **tint sky** `#f2fafd` (1,899 area units; also the root body text color value and the 15-character nav text).
- **Ink** `#1d2329` covers 1,417 measured characters; **ink secondary** `#454b52` covers 786; white covers 669 on blue bands.
- **Primary** `#00388f`, a cobalt: the "Shop now" fill (white 14px bold text, 28px radius, 48px tall, border 2px solid #00388f), 41 characters of text and 59 area units. **Primary hover** rgb(0, 87, 184), #0057b8, measured on hover of "Shop now" (fill and border).
- **Link blue** `#0072b2` (125 characters) is the underlined link color; **accent cyan** `#009fdb` (28 characters) colors the hero headline "Great connections start here" and the inset focus ring `0 0 0 2px #009fdb inset`.
- **Text-input border** `#686e74`.

A dark teal `#002837` appears in the area list (2,691 units on this measurement) and corresponds to the privacy banner area; it is excluded from the tokens as a consent control color. The root variables (icon data URIs, `--ON`, `--OFF`, `--awd-select-focus` #0072b2 in a focus ring) contain no further palette.

## Typography

Three faces are loaded: font-regular (2,198 measured characters), font-bold (1,035) and font-black.

- Display ("Get the new iPhone 18 Pro" style headings): font-bold, 48px / 55.2px, letter-spacing -1.44px (-3%). Mobile: 28px / 32.2px, -0.84px.
- Subheading: font-bold, 26px / 29.9px, -0.78px.
- Body: font-regular, 24px / 27.6px, -0.72px (the intro line "New & existing customers"; the mobile pass measured the same role at 20px / 23px, -0.6px). The most-used size on the page is 12px (legal text, 1,366 characters), then 18px (930), 26px, 14px, 48px, 15px and 16px.
- Button: font-bold 14px / 14px. Input: font-regular 16px.

The family names are internal (`font-regular`, `font-bold`, `font-black`), so the actual typeface is not named by the CSS. Font substitutes: any neutral grotesque (such as Inter or Public Sans) at regular and bold weights with -3% tracking on large sizes.

## Layout

The header has the logo at the left and an icon cluster at the right, and bands span the full width. Promo bands use a two-column split with text at the left and product art or photography at the right; carousels show one full card plus the start of the next one. The offer-card row shows 2.5 cards with a progress dot row and a play/pause control. The layout probe counted 6 visible header links and up to 7 card columns on desktop. Spacing steps measured: 1, 2, 3, 8, 12, 16, 24, 32, 48 and 64px; buttons use 32px horizontal padding.

## Elevation & Depth

Cards and the product panel carry `rgba(0, 0, 0, 0.4) 0px 4px 20px 6px`. Inputs and focus states use inset rings: `0 0 0 1px #fff inset, 0 0 0 2px var(--awd-select-focus, #0072b2) inset` (6 uses), `0 0 0 2px #009fdb inset, 0 0 0 2px #fff !important` (6) and `0 0 0 1px #dcdfe3 inset` (8). 7 elements have no shadow. Ribbon and silver gift-wrap illustrations create decorative depth in the holiday bands.

## Shapes

Buttons are 28px pills (the token set carries 28px and a 9999px pill); cards are 16px in the tokens, and the stylesheet's measured radii are 12.8px (20 uses), 25.6px (8), 6.4px (6), 16px (5), 9.6px (4) and 3px (4). Inputs are 8px. Carousel arrows are circles and the "Online only" badge is a circle with a cyan outline.

## Components

- **Primary button** ("Shop now"): #00388f fill, white font-bold 14px, 48px tall, 134px wide in the measured instance, 28px radius, padding 0px 32px; hover fill #0057b8.
- **Secondary button:** white fill, #00388f text, same size and radius.
- **Text input** (address field): white, 16px text, 48px tall, padding 0px 48px 0px 16px, 8px radius, #686e74 border.
- **Offer card:** white, 16px radius, large soft shadow, small label, 26px bold title, body and legal text, button, product image.
- **Carousel controls:** circular outlined arrows in blue, dots, and a play/pause circle.
- **Icon shortcut row:** line icons in blue with bold blue labels.
- **Nav:** bold 14px menu with chevrons; "Search or chat" is a bordered pill.

## Design System Architecture

No public design system or brand guideline site was found on the pages opened (att.com home via extraction); the page links to none. The shipped CSS uses internal variable names (`--icon-chevron-right`, `--icon-bold-chevron-right`, `--icon-long-arrow-right`, `--icon-close-x` as inline SVG data URIs, and a form-control focus variable `--awd-select-focus`), with `font-regular`, `font-bold` and `font-black` as font-face names. Beyond those, the brand is expressed through components rather than documented tokens.

## Do's and Don'ts

- Do use cobalt #00388f pill buttons for every primary action and cyan #009fdb for the hero headline.
- Do lead each offer with the price or discount in bold type with -3% tracking.
- Do keep legal copy small (12px) under the CTA.
- Do put products on white rounded cards or full-bleed photo bands.
- Don't show the privacy banner, chat tab or order-now tab as brand components.
- Don't use #002837 as a surface; it is the consent banner's color.
- Don't use square buttons; the shape is a 28px pill.

## Responsive Behavior

A 390px mobile pass measured: the promo heading at 28px / 32.2px (-0.84px) in a 327px-wide box, the intro text at 20px / 23px (-0.6px), the "Shop now" button unchanged (48px, 28px radius), 2 visible header links (6 on desktop), a menu toggle, and up to 6 card columns (7 on desktop). Breakpoints and carousel behavior on mobile: not measured.

## Iteration Guide

1. White and #f3f4f6 surfaces, #1d2329 ink, #00388f for actions with #0057b8 hover.
2. Bold 48px headlines with -1.44px tracking; 12px legal text.
3. 28px pill buttons, 16px cards, soft 20px shadow.
4. Alternate promo bands (grey, blue, photo) in a two-column split.
5. Run `node web/scripts/verify-designs.mjs --slug=atandt`, then measure mobile carousels.
