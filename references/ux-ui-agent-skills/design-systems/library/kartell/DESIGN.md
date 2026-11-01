---
version: alpha
name: Kartell
category: "Home & Furniture"
description: "Kartell official US site (kartell.com/us/en/ktus): a gallery-white (#ffffff) and black (#000000) shop for designer plastic furniture, set entirely in Helvetica Neue (80px weight-500 uppercase hero, 46.4px section titles, 16px body), with #212529 outlined square buttons, a greige panel (#d1ccc3), 0px corners on controls and no shadows."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#212529"
  ink-soft: "#393939"
  ink-muted: "#6c757d"
  ink-light: "#f8f9fa"
  surface-greige: "#d1ccc3"
  button-primary-bg: "#ffffff99"
  text-input-border: "#888888"
  footer-border: "#dee2e6"
typography:
  display:
    fontFamily: "\"Helvetica Neue\", sans-serif"
    fontSize: 80px
    fontWeight: 500
    lineHeight: 96px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Helvetica Neue\", sans-serif"
    fontSize: 35px
    fontWeight: 400
    lineHeight: 42px
    textTransform: uppercase
  heading:
    fontFamily: "\"Helvetica Neue\", sans-serif"
    fontSize: 46.4px
    fontWeight: 500
    lineHeight: 55.68px
    textTransform: uppercase
  body:
    fontFamily: "\"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Helvetica Neue\", sans-serif"
    fontSize: 18.4px
    fontWeight: 400
    lineHeight: 27.6px
rounded:
  xs: 4px
  sm: 100px
  none: 0px
spacing:
  s1: 1px
  s2: 2px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 20px
    height: 50px
    borderColor: "{colors.primary}"
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 6px 12px
    height: 38px
    borderColor: "{colors.primary}"
  link:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 20px
    borderColor: "{colors.primary}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 1px 2px
    height: 36px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.none}"
    borderColor: "{colors.footer-border}"
---

## Overview

The queued address `https://www.kartell.com` redirects to `https://www.kartell.com/us/en/ktus/` (title "Kartell Official Site | Kartell", language `en`), the United States storefront of the Italian furniture and lighting brand. The initial capture was covered by a newsletter modal ("Join the Kartell Lovers community!"), a country-change dialog ("Change country? You are visiting www.kartell.com from United States") and a dimming scrim; the extraction was re-run with the batch tool (`phase2.json`, `--only=kartell --force --no-motion`), which hid those overlays (`consentOverlaysHidden: ["centered","newsletterModal","georedirect-modal"]`), and tokens were regenerated. The overlays, the cookie and accessibility buttons are not documented as brand UI.

The page is 8327px tall with 652 visible elements. It reads as a retail magazine: a full-bleed lifestyle hero headed "MAKE YOURSELF AT HOME" over a "Buy now" button; a product-story carousel (the current slide "ALTA TENSIONE & UMBRELLA STAND" with the line "Clean lines, vibrant colors. Coordinated Alta Tensione and Umbrella Stand transform even a small corner into a true style statement." and a "BUY NOW" button, with arrows at left and right); a row of five product tiles under "SIT BACK AND RELAX" (names in uppercase, prices such as "$ 760.00"); a large collage "KARTELL INSPIRATION"; a "SPECIAL PROJECT" band in dark olive-brown with "LEPID" and "DESIGN BY PATRICIA URQUIOLA"; "SHOP BY LOOK"; a "STORIES & NEWS" row of white cards on a greige field; and a final mosaic of colored tiles "CATALOGS", "MyKartell@home" and "STORE LOCATOR". The footer lists "In-store appointment", "Fast returns", "Service and Warranty" and social icons. A top ribbon reads "ENJOY FREE STANDARD SHIPPING".

The voice is short, imperative and lifestyle-led ("Make yourself at home", "Sit back and relax"); the interface stays quiet so product color (chairs in teal, red, ochre, translucent blue) carries the page.

Product naming follows a consistent pattern: capitalized collection or model names ("A.I. LITE (2 CHAIRS)", "HIRAY SMALL ARMCHAIR", "RE-CHAIR (2 CHAIRS)", "MASTERS", "VICTORIA GHOST") with the price directly below in bold. Editorial blocks name designers and projects in the same uppercase setting ("DESIGN BY PATRICIA URQUIOLA"), and news cards give the outlet, place and month ("Elle Decor", "WWD Women's Wear Daily", "Kartell Flagship Store Bologna - New Opening"). The effect is a catalog layout where every text element is short, uppercase or title-cased and aligned to the image above it.

## Colors

- **Canvas `#ffffff`** (area 2073) and **ink `#000000`** (1566 characters, the top text color) are the base. Alongside them the dominant text color of Bootstrap-based body copy is `#212529` (1415 characters).
- **Primary `#212529`**: the root variables `--button-primary-main-color`, `--button-primary-border-color`, `--input-border-color` and `--text-primary-color` are all `#212529`; it is the label and 1px border color of every outlined button ("Buy now", "BUY NOW").
- **Ink soft `#393939`** (`--text-default-color`) for 269 characters, **ink muted `#6c757d`** for footer text, **ink light `#f8f9fa`** for text on dark.
- **Surface greige `#d1ccc3`** (area 2119): the background of the "Stories & News" field. Other large measured fills are tile and band colors that come from imagery and campaign blocks: `#4d3e24` (olive brown, 872), `#7a4849` (rose brown, 479), `#5b5d74` (slate violet, 479), `#8e7a76` (474) and `#f5f5f5` (194, `--background-main-color`).
- **Button background `#ffffff99`**: the 60%-white fill of the "Buy now" button over the hero image.
- Lines: `#888888` (input border), `#dee2e6` (footer border).

The Bootstrap palette variables in the root (`--bs-primary #0d6efd`, `--bs-secondary #6c757d`, `--bs-pink`, `--bs-teal` and the rest) and the Swiper blue `#007aff` are framework defaults and are not brand colors. `#6c757d` appears only as footer grey.

## Typography

**Helvetica Neue** (regular and bold faces, fallback `sans-serif`; 3613 characters) is the only text family besides Verdana (137 characters). A custom icon font named `kartell` is also loaded.

- Display: 80px, weight 500, line-height 96px, uppercase, white over the hero; 35px weight 400 and line-height 42px on mobile.
- Heading: 46.4px, weight 500, line-height 55.68px, uppercase ("ALTA TENSIONE & UMBRELLA STAND").
- Body: 16px, weight 400, line-height 24px, `#212529`.
- Button: 18.4px, weight 400, line-height 27.6px (hero "Buy now"); carousel buttons are uppercase at 16px.

Desktop ladder: 16px (2276 characters), 24px (466), 46.4px (372), 10px (269, product or price captions), 80px (147), 14.4px, 18.4px, 27.2px, 12px. Mobile ladder: 14px (1935), 18px (571), 30px (342), 10px, 16px, 35px, 24px, 12.6px, 40px, 23.8px.

Font substitutes: only the declared `sans-serif` fallback was measured.

## Layout

Bootstrap grid (`--bs-gutter-x: 1.5rem`) with full-bleed hero and collage sections and a boxed 5-up product row. Section titles are left-aligned, large and uppercase, over wide margins; product tiles are centered images with an uppercase name and a bold price beneath; the story carousel places a tall image at the left and text at the right with arrow controls at both edges and five dot indicators. Spacing measured includes 1, 2, 6, 8, 10, 12, 15, 16, 20 and 24px. Tiles in the closing mosaic are flat colored rectangles with an outlined, small "DOWNLOAD", "DISCOVER MORE" or "FIND SHOPS" button.

## Elevation & Depth

No shadow remains in the measurement (`boxShadows` is empty). Cards on the greige field are plain white rectangles separated from the field by color contrast alone, and depth in the page comes from photography and from the layering of the translucent white button over the hero image.

## Shapes

Measured radii are 4px (4 elements) and 100px (1 element). Primary and secondary buttons, inputs and the footer are 0px, so the typical control is a sharp 1px-outlined rectangle. Product images and tiles are rectangular.

## Components

- **Primary button ("Buy now")**: `#ffffff99` fill, `#212529` label at 18.4px, padding 10px 20px, 50px tall, 1px solid `#212529`, 0px radius.
- **Secondary button ("BUY NOW")**: transparent, uppercase 16px label, padding 6px 12px, 38px tall, 1px solid `#212529`.
- **Text input**: white, black 16px text, 1px solid `#888888`, 36px tall, padding 1px 2px.
- **Product tile**: image, uppercase name, price in bold.
- **Story card**: white, centered image, source and date caption ("Italy 06 2026").
- **Footer**: white background, `#6c757d` text, 1px `#dee2e6` border.

## Design System Architecture

No public design-system page was linked from the page opened. The site is a Bootstrap 5 storefront: root variables are the full Bootstrap set (`--bs-*` colors, gray ramp `--bs-gray-100` to `--bs-gray-900`, font stacks, `--bs-gutter-x`) plus brand layer variables: `--button-primary-main-color`, `--button-primary-border-color`, `--input-border-color`, `--text-primary-color`, `--text-default-color #393939`, `--text-default-color-light #848484`, `--text-default-active-color`, `--background-main-color #F5F5F5`, `--bottom-promo-slider-*` and `--box-background-color` (`#067EC1`, a promo color). Swiper provides the carousel. The brand identity is carried by photography and by one outlined-button style.

## Do's and Don'ts

Do:
- Keep chrome white, black and `#212529`; let furniture color lead.
- Use Helvetica Neue uppercase for titles at weight 500 and regular for body.
- Use 1px `#212529` outlined rectangular buttons, 0px radius.
- Use `#d1ccc3` for editorial fields behind white cards.

Don't:
- Do not use Bootstrap blue or gray defaults as brand colors.
- Do not add shadows or round the buttons.
- Do not document the newsletter modal, country dialog, scrim or accessibility button as UI tokens.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 is 35px weight 400 and black (`#000000`) rather than 80px white; body is 14px; the size ladder moves to 14px, 18px, 30px, 10px, 16px, 35px, 24px, 12.6px, 40px and 23.8px. Column stacking, menu behavior and carousel handling on mobile were not measured.

## Iteration Guide

1. White canvas, black type, one `#212529` outline for every button.
2. Helvetica Neue uppercase 80px/46.4px titles at weight 500; 16px body.
3. Lifestyle hero with a translucent white button; product rows of five tiles with uppercase names and bold prices.
4. Greige `#d1ccc3` field for stories; flat colored tiles for utility links.
5. Verify with `node web/scripts/verify-designs.mjs --slug=kartell`.
