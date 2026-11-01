---
version: alpha
name: Tops Online
category: "Thai Brands"
description: "Thai grocery delivery storefront Tops Online (English): IBM Plex-style ibmregular and ibmsemibold at 16px body and 28px headings, white canvas on a #e3e4e3 page, ink #121212, Tops red-orange #ff3d1c buttons and a #f70405 header strip, 6px to 12px radii, gold Tops Prime Plus card."
colors:
  canvas: "#ffffff"
  page-body: "#e3e4e3"
  ink: "#121212"
  primary: "#ff3d1c"
  on-primary: "#ffffff"
  surface-warm: "#f8f4f1"
  ink-black: "#000000"
  ink-muted: "#666666"
  promo-green: "#27ae60"
  hairline: "#0000001a"
  primary-hover: "#ff3d1ccc"
  nav-bg: "#f70405"
  text-input-text: "#323a46"
  prime-gold: "#f8ebc5"
typography:
  display:
    fontFamily: ibmsemibold
    fontSize: 28px
    fontWeight: 600
    lineHeight: 28px
  display-mobile:
    fontFamily: ibmsemibold
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  button:
    fontFamily: ibmregular
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: ibmregular
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  link:
    fontFamily: ibmsemibold
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 5px
  md: 6px
  lg: 8px
  xl: 10px
  2xl: 12px
  3xl: 16px
  4xl: 20px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3.2px
  s4: 4px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 3.2px 0px 0px
    height: 30px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
    padding: 16px
    height: 40px
  link:
    textColor: "{colors.ink-black}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 4px 10px
    height: 29px
  card:
    textColor: "{colors.prime-gold}"
    rounded: "{rounded.xl}"
    padding: 8px 16px
    borderColor: "{colors.prime-gold}"
---

## Overview

Tops Online (https://www.tops.co.th/en, title "TOPS ONLINE Shop Grocery with Free & Fast Delivery | Freshness Guarantee") is the English storefront of the Thai supermarket Tops. The extractor measured 16312 visible elements, so this is a very dense commerce page, not a bot wall (the queue flagged the brand as blocked, but the measurement succeeded). The capture shows a feedback prompt bar ("Are you satisfied with your website feedback today?" with a "Share Your Thoughts" button; a survey overlay, not documented as brand UI), a red utility strip (Help, ไทย, EN), a white header with the red "Tops" logo, a search field with a red magnifier button, an outlined "Login" and a solid "Register" button, a category sidebar (Looks Beauty Awards, Express Ready Meal, Only At Tops, Fruits & Vegetables, Meat & Seafood, Fresh Food & Bakery, Pantry & Ingredients, Snacks & Desserts, Beverages, Health & Beauty Care, Vitamins & Supplements, Mom & Kids, Household & Merit, PET 'N ME), a yellow delivery strip ("Shop ฿399 - Free Standard Delivery!"), a hero banner slot, "Shop by Category" round-icon tiles, a dark gold "Tops Prime Plus+" membership card ("Enjoy Exclusive Shopping Privileges", "Subscribe Now"), "Category Campaigns" promo cards, and product grids with price, discount, "Add" button and heart icons.

The voice is promotional and direct: short imperatives ("Add", "Subscribe Now", "View All"), prices in baht in red, and "Best Seller" or "Save" micro-labels. Colour is functional: red for action and price, gold for the premium membership, green for savings text.

## Colors

- Canvas `#ffffff` (largest area, 40819); page-body `#e3e4e3` (3952), the grey page field behind white cards; surface-warm `#f8f4f1` (3945), a warm panel tint.
- Ink `#121212` (14774 characters, body) and ink-black `#000000` (10118, headings); ink-muted `#666666` (5945, secondary text such as "For order dates").
- Primary `#ff3d1c` (2238 area; buttons Register, Add; Login text and border; 51 stylesheet uses), with hover `#ff3d1ccc` (measured: Register goes to 80% alpha). Nav-bg `#f70405` is the red utility strip (154 area); the primary and the strip are two different reds.
- Promo-green `#27ae60` (1074 characters) for savings text such as "Buy 2 pcs. for 200 (Save 38)".
- Prime-gold `#f8ebc5` (text and 5 borders on the dark Prime card) with `#d3b981` (gold border, 12 stylesheet uses); `#ffc132` (41 area) is the yellow delivery strip.
- Hairline `#0000001a`: 336 borders; text-input text `#323a46`.
- Swiper `#007aff` and Tailwind ring colour `rgba(59,130,246,.5)` are library defaults, not brand colours.

## Typography

Two custom IBM-style fonts: `ibmregular` (28768 characters) and `ibmsemibold` (6615), plus `ibmlight` and `ibmbold` loaded; icon fonts bootstrap-icons and swiper-icons.

- Display: ibmsemibold 28px/28px weight 600 ("Shop by Category"); mobile 20px/28px.
- Button: ibmregular 16px/28px weight 400 (Register, Login); the "Add" button uses ibmsemibold 16px/20px weight 600.
- Nav: ibmregular 14px/21px (utility strip, white on red).
- Link: ibmsemibold 16px/24px ("All Today's Promotions - Click -").
- Dominant sizes by characters: 16px (18176), 12px (9529), 14px (4416), 18px (2332), 28px (389), 13px, 17px, 10px, 30px. No letter spacing is recorded.

Font substitute: the `ibm*` files are self-hosted; IBM Plex Sans / Plex Sans Thai is a design substitute, not a measured identity.

## Layout

A 1280px desktop layout with a 120px header block (red strip plus white bar), a fixed-width left category sidebar and a main column with horizontally swiped carousels (Swiper arrows 44px). Product grids show 4 tiles beside a lifestyle image. Gaps: 8px (2055), 2px (496), 6px (82), 16px, 24px. Paddings: 16px (740), 10px (709), 1px (344), 8px (177), 4px (168). Cards in the Prime block use padding `8px 16px`.

## Elevation & Depth

Shadows measured: `rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px` (36 occurrences, product and category tiles), `rgba(0, 0, 0, 0.2) 0px 0px 5px 0px` (22 and 12, carousel arrows and sticky elements). Borders `#0000001a` separate list rows. The dark Prime card creates the strongest contrast on the page, with gold outlines on dark.

## Shapes

Radii: 12px (385 elements), 6px (350), 8px (237), 9999px (105, pills and badges), 100% (24, round icons), 5px (21), 10px (5), 4px, and `20px 20px 0px 0px`. Primary Register and Login buttons are square (0px, measured) while "Add" buttons and inputs use 6px, and cards use 10 to 12px.

## Components

- Button Register: fill `#ff3d1c`, white ibmregular 16px, 1px `#ff3d1c` border, 0px radius, 30px high, 170px wide; hover 80% alpha.
- Button Login (outlined): white fill, `#ff3d1c` text and border, 150px wide.
- Button Add: `#ff3d1c` fill, white ibmsemibold 16px, 6px radius, padding 16px, 40px high, 160px wide.
- Search input: white, text `#323a46`, 14px, 6px radius, padding `4px 10px`, 29px high, 478px wide.
- Nav: `#f70405` strip, white 14px text with pipe separators (Help | ไทย | EN).
- Prime card: dark field, `#f8ebc5` text and border, 10px radius, padding `8px 16px` ("Discount Stickers Up to 20% Off", "Member Exclusive Price Items").
- Product tile: white, shadow, price in red, strike-through old price, heart icon.

## Design System Architecture

No public Tops design system or brand guideline was found; the page https://www.tops.co.th/en was measured by the extractor. The stylesheet has only 11 root variables, all Tailwind utility (`--tw-*`) and Swiper values (`--swiper-navigation-size` 44px), so the design system is utility-class based with fixed brand values repeated in CSS: `#ff3d1c` (51 uses), `#d3b981` (12), `#b22a13` (8), the `ibm*` font faces and the shadow recipes above.

## Do's and Don'ts

- Do use `#ff3d1c` for the single action per tile (Add) and for price emphasis.
- Do reserve gold `#f8ebc5` and `#d3b981` on dark for the Tops Prime Plus membership.
- Do show savings in green `#27ae60` and old prices struck through.
- Do keep cards at 10 to 12px radius with the soft 4px 6px shadow.
- Don't use the `#f70405` strip colour for buttons; it is a header colour.
- Don't use Swiper's `#007aff`.
- Don't treat the feedback bar or promo banners as brand UI.

## Responsive Behavior

Mobile (390px) measured: h1 20px/28px (from 28px); sizes by characters 14px (18329), 12px (8612), 16px (3893), 18px (1265), 20px (389), 13px (324). Sidebar behaviour, tile counts and menu patterns were not measured.

## Iteration Guide

1. White cards on a `#e3e4e3` page; ink `#121212`.
2. Red-orange `#ff3d1c` for actions, red strip `#f70405` for the utility bar.
3. 28px semibold section titles; 16px body; 12px captions.
4. Dark gold Prime card for premium offers.
5. Gate: `node web/scripts/verify-designs.mjs --slug=tops`.

### Measured reference

All figures in this block are verbatim from the desktop extraction (weight in parentheses is the measured character, area or occurrence weight).

- Font families by characters: ibmregular (28768), ibmsemibold (6615).
- Font sizes by characters: 16px (18176), 12px (9529), 14px (4416), 18px (2332), 28px (389), 13px (324), 17px (117), 10px (65), 30px (35).
- Font weights by characters: 400 (28762), 600 (6597), 500 (24).
- Letter spacing by size: none recorded.
- Text colours by characters: #121212 (14774), #000000 (10118), #666666 (5945), #ffffff (1803), #ff3d1c (1132), #27ae60 (1074), #333333 (225), #f8ebc5 (147), #404040 (130), #d3b981 (35).
- Background colours by area: #ffffff (40819), #e3e4e3 (3952), #f8f4f1 (3945), #ff3d1c (2238), #f70405 (154), #f6f6f6 (96), #121212 (64), #ffc132 (41), #ffffffcc (19), #000000 (17), #d3b981 (8), #534741 (2).
- Border radii: 12px (385), 6px (350), 8px (237), 9999px (105), 100% (24), 5px (21), 10px (5), 0px 0px 5px 5px (4), 4px (3), 20px 20px 0px 0px (1), 16px (1), 0px 6px 6px 0px (1).
- Box shadows: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px (36), rgba(0, 0, 0, 0.2) 0px 0px 5px 0px (22), rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.2) 0px 0px 5px 0px (12).
- Border colours: #0000001a (336), #f8ebc5 (5), #404040 (5), #ff3d1c (3), #e5e7eb (2), #d3b981 (1), #000000 (1).
- Gaps: 8px (2055), 2px (496), 6px (82), 16px (6), 24px (2).
- Paddings: 16px (740), 10px (709), 1px (344), 8px (177), 4px (168), 2px (51), 14px (36), 24px (29), 32px (28), 6px (26), 12px (21), 20px (4).
- Stylesheet colours by count: #ff3d1c (51), #ffffff (42), #00000000 (28), #0000001c (20), #000000 (16), #ff3d1c0a (16), #d3b981 (12), #0000001a (12), #00000042 (10), #cccccc (9), #ff3d1c80 (8), #b22a13 (8), #00000033 (7), #00000012 (6).
- Stylesheet font sizes: 14px, 16px, 12px, 24px, 18px, 20px, 30px, 36px, 10px, 15px, 8px, 11px, 13px, 26px.
- Stylesheet radii: 8px, 4px, 5px, 6px, 14px, 7px, 10px, 3px, 16px, 24px.
- Fonts loaded: ibmlight 300 normal, ibmregular 400 normal, ibmsemibold 600 normal, ibmbold 700 normal, bootstrap-icons normal normal, swiper-icons 400 normal.
- Visible elements: 16312; document language: en; hover states recorded: 11.
