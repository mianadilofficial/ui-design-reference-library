---
version: alpha
name: MK Delivery 1642
category: "Thai Brands"
description: "MK Online Delivery (mk1642.com) ordering site - a #d00016 deep-red header over white, #ed2e34 red 5px-radius 'Read more' buttons and price chips, #333333 body text, db_helvethaica x55 regular and x75 bold at 26px base, photo-led promotion cards with 10px radius."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#ed2e34"
  on-primary: "#ffffff"
  header-red: "#d00016"
  surface-grey: "#e6e6e6"
  ink-strong: "#212529"
  ink-muted: "#797979"
  ink-scrim: "#00000080"
  ink-maroon: "#850000"
  accent-green: "#00771e"
  hairline: "#eeeeee"
  text-input-text: "#666666"
typography:
  display:
    fontFamily: db_helvethaica_x75_bd
    fontSize: 36.8px
    fontWeight: 500
    lineHeight: 36.8px
  display-mobile:
    fontFamily: db_helvethaica_x75_bd
    fontSize: 23px
    fontWeight: 500
    lineHeight: 23px
  subheading:
    fontFamily: db_helvethaica_x55_regular
    fontSize: 26px
    fontWeight: 700
    lineHeight: 26px
  body:
    fontFamily: db_helvethaica_x55_regular
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  button:
    fontFamily: db_helvethaica_x55_regular
    fontSize: 30.4px
    fontWeight: 400
    lineHeight: 30.4px
  input:
    fontFamily: db_helvethaica_x55_regular
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
rounded:
  xs: 3px
  sm: 5px
  md: 10px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 5px
  s5: 8px
  s6: 10px
  s7: 13px
  s8: 15px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 5px 15px
    height: 38px
  nav:
    backgroundColor: "{colors.header-red}"
    textColor: "{colors.canvas}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 2px 25px 2px 13px
    height: 29px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.ink}"
    padding: 30px 15px 45px
---

## Overview

MK Delivery 1642 (www.mk1642.com) is the online delivery ordering site of MK Restaurants, Thailand. The extraction resolved to the English route /en, with a page title that reads "MK Online Delivery at www.mk1642.com or Tel. 1642" and the menu line "MK Roasted Duck, Crispy Pork, BBQ Pork, Green Noodle, Fried Taro, Suki, Fresh Suki, Dim Sum, Snack Box, Catering"; the Thai route /th/ carries the same description in Thai. The number 1642 is the delivery hotline, and it is the brand mark: the circular MK logo beside the large "1642 DELIVERY" wordmark appears top left.

The homepage is an app-like storefront. A deep-red `#d00016` header carries the logo with the service hours ("Can order from 10:00 AM - 7:45 PM"), a centred "Welcome to MK Online Delivery" title in white, Delivery and Self Pick-up toggle chips, a white search field with a locate-me button ("Search for a location to check the delivery area."), and sign-in, language (EN / TH) and basket controls on the right. A white strip below lists eight icon categories: Promotion, M Catering, Single Dish, Set Meal, Fresh Suki, Roasted, Snack, Drink & Dessert. A promotional banner carousel follows with pagination dots, then a "Promotion" section with a megaphone icon, a "View all" link and a two-column grid of set photos, each followed by the set name and a red price chip carrying a small basket glyph.

The voice is utilitarian and transactional: short English or Thai labels, prices ending in ".-" and promotional artwork baked into the photographs.

## Colors

- **Canvas `#ffffff`**: the white content surface (area 309 on the desktop pass).
- **Header red `#d00016`**: the largest background by area (521); the header band.
- **Primary `#ed2e34`**: the fill of "Read more" buttons and the price chips (area 211), with white text.
- **Surface grey `#e6e6e6`**: the footer background (area 426).
- **Ink `#333333`**: the most-read text (1299 characters).
- **Ink strong `#212529`**: headings such as the section title (345 characters).
- **Ink muted `#797979`** (174 characters) and **ink scrim `#00000080`** (a half-transparent black used for secondary labels such as category names, 75 characters).
- **Ink maroon `#850000`**: text on the price chips of two promotions and a measured background (area 35).
- **Accent green `#00771e`**: 16 characters of text; the element was not identified.
- **Hairline `#eeeeee`**: the 1px border of the image cards.
- **Text input text `#666666`**: the search field's text colour.

The page's `rootVars` are the stock Bootstrap 4 set; its link colour `#007bff` and danger red `#dc3545` (22 characters of text) are framework defaults and are not used as brand colours. The event popup scrim was hidden by the extractor before measuring.

## Typography

Two weights of the DB Helvethaica family are loaded as separate faces: `db_helvethaica_x55_regular` (2407 characters) and `db_helvethaica_x75_bd` (167 characters); FontAwesome and an icon font called font-360 supply icons.

- **Display**: db_helvethaica_x75_bd, 36.8px, weight 500, line-height 36.8px; 23px on the 390px mobile pass.
- **Subheading**: x55 regular, 26px, weight 700.
- **Body**: x55 regular, 16px, 16px line-height (the measured paragraph is "Single Dish" at 66px wide).
- **Button**: x55 regular, 30.4px on the desktop "Read more" candidates (16px on mobile).
- **Input**: 18px, line-height 27px.
- Most common sizes by character: 26px (1259), 32px (352), 22px (291), 19.2px (273), 22.4px (137), 16px (88), 36.8px (48), 30.4px (36).

The Thai face is a licensed commercial family; no substitute was documented by the site.

## Layout

The desktop page is 1280px wide and 9996px tall, a long scroll of product tiles. The structure is header, category strip, full-width carousel, then content columns: the promotion grid shows two wide cards per row with a large photo (about 207px high thumbnails were measured in the cards role, 333px wide) and a caption row. Spacing steps measured are 1, 2, 3, 5, 8, 10, 13, 15, 16 and 18px. The footer has `30px 15px 45px` padding, a grey fill and a background pattern image (Group-3211.png), with links for MK Delivery, Tel. 1642 (tap to call), Promotion, M Catering and more.

## Elevation & Depth

The measured roles report no box shadows. Cards are separated by a 1.05px `#eeeeee` border and 10px radius; hierarchy comes from the red header against white and from the red price chips. The mobile pass also records an order drawer header ("Your order", total, shipping, subtotal and a Confirm Order action) in white text, which is shown as a cart panel and not as a depth token.

## Shapes

Radii measured: 3px, 5px, 10px and a pill value. Buttons ("Read more") use 5px; the search input is `5px 0px 0px 5px` (rounded on the outer side only, joining the locate button); image cards use 10px. The circular elements are the MK logo, language chips and carousel dots.

## Components

- **Primary button** ("Read more"): red `#ed2e34`, white text, 5px radius, `5px 15px` padding, 38px tall on desktop; on mobile 16px text, `7px 15px` padding, 28px tall and 79px wide.
- **Price chip**: red fill with a basket glyph and the price ("249 .-"), set to the right of each product name.
- **Search field**: white, 29px tall, 465px wide, 5px outer radius, with a right-hand locate control.
- **Category strip**: icon over a small label; hover shifts the label from rgba(0,0,0,0.5) to rgba(0,0,0,0.7) and fills the item with `#efefef`.
- **Image card**: 10px radius, 1px `#eeeeee` border.
- **Footer**: grey with a pattern background.

## Design System Architecture

No public design system or brand guideline was found: the homepage's only brand-adjacent link is a chat stylesheet resource, and no brand, press or design link appears. The site serves stylesheets from /CMSPages/GetResource.ashx and /App_Themes/Source/ and uses Bootstrap 4 (`rootVars` list the stock colours and `--breakpoint-sm: 576px`, `--breakpoint-md: 768px`, `--breakpoint-lg: 992px`, `--breakpoint-xl: 1200px`). The brand layer is custom: the two DB Helvethaica faces, the red `#d00016` / `#ed2e34` pair and the 1642 wordmark. Sources opened: https://www.mk1642.com (redirects to /th/ and /en).

## Do's and Don'ts

- Do keep the header in deep red `#d00016` with white text and use `#ed2e34` for buttons and price chips.
- Do pair each product photograph with a name and a red price chip.
- Do use 5px radius for buttons and inputs and 10px for image cards.
- Do keep body copy `#333333` on white and headings `#212529`.
- Don't use Bootstrap blue `#007bff` or `#dc3545` as brand colours.
- Don't document the event popup scrim as brand UI.
- Don't set the button at 30.4px on small screens; the mobile pass measured 16px.
- Don't invent a role for the green `#00771e` text; none was recorded.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 ("Promotion") is 23px, weight 500, line-height 23px, with `0px 0px 0px 15px` padding; the paragraph "Single Dish" is 16px with 16px line-height in `#00000080`; the primary "Read more" button is 16px text with `7px 15px` padding, 28px high and 79px wide, still `#ed2e34` with a 5px radius. How the header, categories and grid rearrange on mobile was not measured.

## Iteration Guide

1. Begin with canvas, header-red, primary, ink and the two DB Helvethaica faces.
2. Reuse the red price chip and the 5px button for actions; keep cards at 10px with the hairline border.
3. Measure any new component before adding it (`node web/scripts/extract-tokens.mjs`), especially the cart drawer.
4. Verify with `node web/scripts/verify-designs.mjs --slug=mk1642`.
