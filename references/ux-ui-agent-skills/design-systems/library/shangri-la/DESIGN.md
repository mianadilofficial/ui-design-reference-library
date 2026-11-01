---
version: alpha
name: Shangri-La Hotels and Resorts
category: "Travel & Hospitality"
description: "Shangri-La Hotels and Resorts (shangri-la.com): luxury hotel group site with PlayfairDisplay serif headings (36px/44px, weight 500) over Montserrat 14px/20px body, a gold #e0aa14 square-cornered Join Now button with #333333 text, white canvas #ffffff, pale grey #f4f5f6 sections and a deep teal #0b363c footer area."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#e0aa14"
  on-primary: "#333333"
  surface-subtle: "#f4f5f6"
  surface-deep: "#0b363c"
  ink-soft: "#000000d9"
  ink-black: "#000000"
  primary-hover: "#f6bc19"
  nav-bg: "#f4f0ee"
typography:
  display:
    fontFamily: PlayfairDisplay, Georgia, "Times New Roman", serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 44px
  display-mobile:
    fontFamily: PlayfairDisplay, Georgia, "Times New Roman", serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
  heading:
    fontFamily: PlayfairDisplay, serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 38px
  body:
    fontFamily: Montserrat, Verdana, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: Montserrat, Verdana, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 38px
  input:
    fontFamily: Montserrat, Verdana, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.144px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 10px
  xl: 20px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 19px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 15px
    height: 40px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    textColor: "{colors.ink-soft}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    height: 36px
    borderColor: "{colors.ink}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.ink-soft}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 6.5px 11px 6.5px 0px
    height: 46px
  footer:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

Shangri-La Hotels and Resorts (https://www.shangri-la.com/, page title "Luxury Escape at Best Rate | Shangri-La Hotels and Resorts") is the booking and loyalty front door of a hotel group. The home page opens with a thin white header carrying the Shangri-La Circle logo, Sign In, Join Now, Find Reservations, a language selector (English) and a currency selector (USD). Below it a pale warm-grey navigation bar (#f4f0ee, 40px tall) lists Hotels & Resorts, Offers, Experiences, Restaurants & Bars, Shangri-La Circle and Shangri-La Boutique. A full-bleed hero carousel follows with a booking widget laid on top: destination and hotel, dates, rooms and guests, a corporate or special rate field, and a gold Search button. Under the widget, the line "Book directly for the best rate, guaranteed. Only via Shangri-La.com" states the price-match promise.

The capture shows a turquoise aerial beach photograph with long palm shadows, a gold anniversary lockup for the Shangri-La Circle and KrisFlyer partnership, and the headline "A Decade of Infinite Journeys, Soaring Miles Beyond". Below the hero, a membership band uses a white background with faint pale ink-wash mountain line art, the serif headline "Join Shangri-La Circle today", a gold "Join Now" button, and four circular line icons for member benefits (Member Exclusive Offers, Mobile Check-In & Out, Children Eat Free, Earn Free Nights). Next come a pale grey "Our Brands" section (Shangri-La Hotels, Kerry Hotels, Traders Hotels, JEN) with a large architectural interior photograph, and a white "Restaurant & Bar" section with a plated-food photograph. Overall the site is image-led, warm and aspirational: a restrained serif and sans pairing, one gold accent, and photography doing most of the emotional work.

Microcopy is short and member-focused: "Join Now", "Learn More", "Search", "Take your pick. Choose from more than 100 hotels and resorts across our four distinct brands".

## Colors

- **Canvas #ffffff.** The page background; the largest background area (7,732 measured area weight).
- **Surface #f4f5f6.** Pale grey band used for sections such as Our Brands (3,773 area weight). Named `surface-subtle` here.
- **Deep teal #0b363c.** A dark background area (380 weight), named `surface-deep`. Footer text measured white (#ffffff) on the footer element.
- **Nav band #f4f0ee.** The navigation bar background, also the measured hover and select tint (`--color-brand-select-hover` is #F4F0EE).
- **Ink #333333.** Most-read text color (4,402 characters), nav link color and button text color.
- **Ink soft #000000d9.** Body paragraph and heading color in the hero and membership sections (1,705 characters).
- **Primary gold #e0aa14.** The Join Now fill and border, published in the page's own custom properties as `--color-brand` and `--color-primary-button-bg`. Text on it is #333333 (`--color-primary-button-text`).
- **Gold hover #f6bc19.** The measured hover fill and border of the primary button (`--color-button-hover-border`, `--sl-ui-primary-color-hover`); the pressed state is #cc9a0d (`--color-button-active-bg`, active text #333).

Border colors measured: #333333 on outlined controls (26 uses), #00000014 hairlines (21), #d0ccca (4). The shipped CSS also contains Ant Design defaults (#1890ff, #ff4d4f, #d9d9d9) and a Swiper theme color (#007aff) from third-party widget libraries; they are not brand colors and are not documented as tokens.

## Typography

Two families, both loaded as web fonts: **PlayfairDisplay** (400 and 700) for headings, and **Montserrat** (400, 500, 700) for everything else. An icon font named "weapp" supplies the glyphs in the header (it shows as the body family because of private-use characters) and is not a text face. The stylesheet also declares "OfeliaDisplay", but it was not measured on a rendered text node.

- **Display:** PlayfairDisplay, Georgia, "Times New Roman", serif, 36px / 44px, weight 500, for the h1 ("Join Shangri-La Circle today"). Mobile measured 24px / 32px.
- **Heading:** PlayfairDisplay, serif, 28px / 38px, weight 500, for h2 ("Meetings & Events").
- **Body:** Montserrat, Verdana, Helvetica, Arial, sans-serif, 14px / 20px, weight 400. Character counts by size: 14px 4,137, 12px 2,468, 20px 152, 16px 127, 18px 109, 28px 76, 32px 63, 36px 28.
- **Button:** Montserrat 14px, weight 500, line height 38px.
- **Input:** Montserrat 16px / 25.144px, weight 400.

PlayfairDisplay is an open-source Google Fonts family and Montserrat is also open source, so both are available if the exact files are not at hand.

## Layout

Desktop pass: 1,280px wide, 5,688px tall. The header is a two-row structure: logo and utility links on white, then a 40px, 1,280px-wide pale nav band. Content sections alternate white and #f4f5f6 bands, each with a centered serif title and either a two-column image and text arrangement or a centered paragraph. Measured paddings include 8px (68 uses), 10px (31), 15px (30), 20px (17), 4px, 19px and 96px (9 uses); the only measured gap is 4px. The primary button is 162px wide and 40px tall with 0px 15px padding; the outlined Learn More button is 140px by 36px.

## Elevation & Depth

Elevation is sparse. The one measured box shadow on rendered elements is `rgba(0, 0, 0, 0.18) 0px 3px 6px 0px`, which appears on the photographic card in the Our Brands section. Hairline borders (#00000014) and flat color bands do the rest of the separation. Dropdown shadows exist in the stylesheet (inherited from the component library) but were not measured on the rendered home page.

## Shapes

The primary button, the outlined button, the nav, the input and the footer all measure a 0px radius: square corners. Measured radii on other elements are 10px (45 weighted uses), 20px (9), 2px (4), 50% (2, the circular carousel arrows and benefit icons), 6px and 4px. The 10px radius belongs to image and card treatments rather than buttons. The tokens keep xs 2px, sm 4px, md 6px, lg 10px, xl 20px, none 0px and pill 9999px; 9999px is a generated pill token and 50% circles are the measured round shapes.

## Components

- **Primary button.** Gold #e0aa14 fill, 1px solid #e0aa14 border, #333333 Montserrat 500 14px label, 0px radius, 0px 15px padding, 40px tall. Hover fill and border #f6bc19. Example: "Join Now", 162px wide.
- **Secondary (outlined) button.** Transparent, 1px solid #333333, Montserrat 14px weight 400 text in #000000d9, 36px tall, 140px wide, 0px radius. Example: "Learn More".
- **Navigation.** 40px band in #f4f0ee, #333333 Montserrat 500 14px links, hover tint #F4F0EE for selects.
- **Text input.** Montserrat 16px, 46px tall, padding 6.5px 11px 6.5px 0px, borderless on the left, used in the booking widget.
- **Footer.** Dark background area with white text (#ffffff), 475px tall.
- **Carousel controls.** Circular white arrows and dot pagination over the hero (styling beyond the circular shape was not measured).

## Design System Architecture

No public design-system or brand-guideline page was found: the home page footer and menus link only to legal and corporate pages (Privacy Policy, Terms & Conditions, Cookies Policy, Supplier Code of Conduct, Cyber Security, Safety & Security). The de-facto system is visible in the page's custom properties: a Shangri-La namespace (`--sl-header-*`, `--sl-searchbar-*`, `--sl-ui-*`) with `--color-brand`, `--color-primary-button-bg`, `--color-primary-button-text`, `--color-button-hover-border`, `--color-button-active-bg` and `--color-brand-select-hover`, layered on top of Ant Design Mobile variables (`--adm-color-primary: var(--color-brand)`, `--adm-radius-s: 4px`, `--adm-radius-m: 8px`, `--adm-font-size-6: 14px`). The shipped CSS also holds Ant Design Web colors and Swiper (`--swiper-theme-color`), which means the brand overrides a component library by variable. A global modal for cookies (`js-cookie-modal`) was hidden during measurement and is not documented as brand UI.

## Do's and Don'ts

- Do use PlayfairDisplay 500 for titles and Montserrat for all interface text.
- Do reserve gold #e0aa14 for the primary action and the search button; hover to #f6bc19.
- Do keep primary and outlined buttons square (0px radius) with #333333 text.
- Do alternate #ffffff and #f4f5f6 section bands and use photography as the main visual.
- Don't use the Ant Design blue #1890ff or Swiper #007aff as brand colors.
- Don't use rounded pill buttons for primary actions; the measured primary button radius is 0px.
- Don't document cookie modals, carousels' arrows or chat widgets as brand components.

## Responsive Behavior

The mobile pass measured: h1 24px / 32px PlayfairDisplay weight 500 (vs 36px / 44px on desktop), body 14px / 20px Montserrat unchanged, and the primary "Join Now" button unchanged at 40px tall and 162px wide with the same gold fill. The mobile pass found no desktop navigation element (nav is null). Mobile character counts by size: 14px 2,335, 12px 1,764, 20px 637. Breakpoints, hamburger behavior and booking widget stacking were not measured.

## Iteration Guide

1. Start with a white canvas, #f4f5f6 section bands, #333333 text.
2. Titles in PlayfairDisplay 500 (36px/44px desktop, 24px/32px mobile); body in Montserrat 14px/20px.
3. One gold primary button per view (#e0aa14, 0px radius, 40px tall), outlined secondary for "Learn More".
4. Use full-bleed photography with a booking panel overlaid; keep copy short and member-oriented.
5. After edits, run `node web/scripts/verify-designs.mjs --slug=shangri-la`.
