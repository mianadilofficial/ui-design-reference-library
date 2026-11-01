---
version: alpha
name: "OfficeMate (OFM)"
category: "Thai Brands"
description: "OfficeMate Thailand (ofm.co.th) measured live: white #ffffff canvas with a #ebf1f4 page tint, deep navy #2c2d4e text, flash-sale red #ff0000 buttons with 4px radius, Kanit at 12px/18px body and 13px buttons, and a dense Thai e-commerce layout."
colors:
  canvas: "#ffffff"
  page-body: "#ebf1f4"
  ink: "#2c2d4e"
  primary: "#ff0000"
  on-primary: "#ffffff"
  ink-2: "#0171cd"
  ink-3: "#313252"
  ink-4: "#aaaaaa"
  ink-6: "#2f2f51"
  button-primary-border: "#dc3545"
  text-input-text: "#002433"
  surface-cream: "#fff3cc"
  surface-ice: "#f5fcff"
typography:
  display:
    fontFamily: Kanit, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  display-mobile:
    fontFamily: Kanit, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  button:
    fontFamily: Kanit, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
rounded:
  xs: 2px
  sm: 3.2px
  md: 4px
  lg: 4.8px
  xl: 5px
  2xl: 8px
  3xl: 15px
  4xl: 25px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 12px
    height: 36px
    borderColor: "{colors.button-primary-border}"
  link:
    textColor: "{colors.ink-2}"
    typography: "{typography.display-mobile}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 20px 30px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.display}"
    padding: 0px 48px 0px 18px
    height: 40px
---

# OfficeMate (OFM)

## Overview

The measured page is https://www.ofm.co.th/ (title "OfficeMate รวมสินค้าเพื่อธุรกิจและสำนักงานครบวงจร", lang th), 1740 visible elements. The queued name was "OfficeMate" and the measured site is the Thai online store of OfficeMate (OFM), a supplier of office and business supplies, which the opened page text says is part of Central Retail. It is an information-dense Thai e-commerce home page. A white header shows the OFM logo in blue and red, a wide grey search field with a magnifier, a language switch (TH), a bell, a log in or sign up link, favourites and a cart link; a thin blue rule separates it from a category bar with "หมวดหมู่สินค้า" and quick links (order from past orders, order by product code, store locator).

Below this come a dark promotional banner strip, a large banner carousel with side promo tiles, a row of circular icon categories (for example "ซื้อยกแพ็ค ประหยัดกว่า"), three wide promo banners, and a solid red "FLASH SALE ONLINE ONLY" block with a countdown of four white boxes (days, hours, minutes, seconds), category tabs on a cream background and a row of product cards. Each card has a product photograph, a name, a SKU line, a red price with a struck-through old price, a progress bar and a full-width red "ซื้อเลย" button. A "โปรโมชั่น" row of tall coloured promo cards, tabbed product lists in light blue, brand logo carousels, banners, articles and a long footer with link columns, group brands, contact centre and app badges complete the page. At the time of the measurement a promotional pop-up with a dark scrim covered the top of the page, and a floating round chat button sits at the right; neither is documented as brand UI, and the page was re-measured once with `--no-motion` for this reason.

## Colors

Background area: `#ffffff` (4919), `#000000` (1035, the pop-up scrim, not a brand surface), `#ff0000` (981), `#fe0000` (737), `#ebf1f4` (190), `#fff3cc` (156), `#f5fcff` (120). Text by characters: `#2c2d4e` (6278), `#0171cd` (865), `#313252` (675), `#aaaaaa` (618), `#ffffff` (508), `#2f2f51` (261), `#888888` (254).

- `canvas` #ffffff and `page-body` #ebf1f4 (the page tint and the search field fill).
- `ink` #2c2d4e: the deep navy used for almost all text; `ink-3` #313252 and `ink-6` #2f2f51 are near-identical navies measured on headings and menu items.
- `primary` #ff0000 with `on-primary` #ffffff: the sale red of buttons and the flash-sale block; `button-primary-border` #dc3545 is the measured 1px border of the CTA (and equals the root variable `--danger`).
- `ink-2` #0171cd: link and accent blue.
- `ink-4` #aaaaaa: muted grey text such as SKU lines.
- `surface-cream` #fff3cc and `surface-ice` #f5fcff: the tab bar fills.
- `text-input-text` #002433: search field text.

#007bff (the Bootstrap default link blue measured on nav links) is not a brand color and is not a token. The root declares Bootstrap 4 palette variables (`--yellow: #ffc107`, `--green: #28a745`, `--pink: #e83e8c`, `--teal: #20c997`) which are framework defaults, plus site variables such as `--b-100: #F2F3F7` and `--s-700: #37546D`.

## Typography

One family, Kanit (a Thai and Latin typeface, loaded in 300, 400 and 500), covers all 9692 counted characters. Weights: 400 (8603 chars), 500 (961), 300 (59), 600 (46), 200 (16), 700 (7). Sizes by characters: 12px (7380), 13px (585), 14px (527), 11px (464), 16px (194), 18px (161), 15px (153).

- `display` Kanit 14px / 21px, weight 400: the measured h1-like element (the category menu label) and input text; at 390px the matching element measured 12px / 18px (`display-mobile`).
- `button` Kanit 13px / 19.5px, weight 400: button and nav labels.
- Body copy is 12px / 18px, weight 400, color navy #2c2d4e (the footer paragraph measured this way).

The page is set small and dense: 12px is the reading size for 7380 characters.

## Layout

The layout follows Bootstrap 4 conventions: the root declares `--breakpoint-md: 768px` and `--breakpoint-xl: 1200px`. Content sits in a 1248px-wide band (the body paragraph measured 1248px wide at the 1280px viewport) with horizontal carousels (Swiper, `--swiper-navigation-size: 44px`) for banners and products. Measured paddings: 5px (51), 15px (34), 6px (29), 16px (19), 10px (17), 8px (12), 12px (11). The nav has `20px 30px` padding. Rows of five product cards share equal widths; the promo cards are tall portrait tiles.

## Elevation & Depth

Three soft shadows were measured: `rgb(214, 214, 214) 1px 1px 8px 0px`, `rgb(213, 219, 222) 0px 2px 6px 0px` and `rgba(0, 0, 0, 0.2) 0px 4px 12px 0px`, one element each. Depth is mostly color blocking: a solid red sale block on a white page, tabs in cream and light blue, and white cards.

## Shapes

Radii: 4px (55 elements, buttons and cards), 50% (27, circular icons and avatars), `5px 5px 0px 0px` (14, tab tops), 15px (14), 5px (4), `8px 8px 0px 0px` (3) and 25px (2). Tokens: `xs` 2px, `sm` 3.2px, `md` 4px, `lg` 4.8px, `xl` 5px, `2xl` 8px, `3xl` 15px, `4xl` 25px, `pill` 9999px. Primary buttons are small rounded rectangles (4px), unlike capsule buttons elsewhere.

## Components

- **button-primary**: red #ff0000 fill, white 13px label, 1px solid #dc3545 border, 4px radius, 36px height, padding 6px 12px; 210px wide in the measured flash-sale card ("ซื้อเลย").
- **nav**: white bar with `20px 30px` padding and navy text; nav links use the 13px label style.
- **link**: 12px text in the accent blue #0171cd.
- **text-input**: the search field, 40px high, with a page-tint fill (#ebf1f4), navy text #002433, 14px text and padding `0px 48px 0px 18px`.
- **flash-sale block**: red panel with white countdown boxes and cream category tabs.
- **product card**: photograph, discount tag, name, SKU, star rating, red price and full-width red button.

## Design System Architecture

No public design system or brand guideline link was found on https://www.ofm.co.th/; the opened page text lists customer service, help topics, company information, privacy and terms and group brand links only. The de-facto system is Bootstrap 4 (root variables `--primary`-style color names, `--breakpoint-*`, `--font-family-monospace`) with Swiper, a site palette (`--b-100`, `--s-700`) and Kanit. Source: `web/data/extracted/officemate.json`.

## Do's and Don'ts

- Do use red #ff0000 for the single dominant action ("ซื้อเลย") and flash-sale blocks.
- Do set Thai text in Kanit at 12px body and navy #2c2d4e.
- Do show a red price beside a struck-through old price on product cards.
- Don't use Bootstrap blue #007bff or yellow #ffc107 as brand colors.
- Don't document the promotional pop-up, its black scrim or the chat button as brand UI.
- Don't increase radii beyond 4px for buttons.

## Responsive Behavior

The 390px pass measured the h1-like element and the h2 at 12px / 18px weight 400 (against 14px / 21px for the h1-like element on desktop). The root declares breakpoints at 768px and 1200px. Column counts and navigation behavior at mobile width are not measured.

## Iteration Guide

1. White canvas, navy text, red for the action.
2. Kanit at 12px body, 13px buttons.
3. Rectangular 4px-radius buttons, 36px high.
4. Group promotions in colored tall cards and a red flash-sale band with countdown.
5. Gate: `node web/scripts/verify-designs.mjs --slug=officemate`.

### Content and imagery notes

Imagery is promotional: product photography on white (reams of paper, printers, mice, office chairs), illustrated seasonal promo cards with discount numerals such as 38%, 50%, 40% and 30%, and trust icons in the footer band. Promo cards use saturated single-color backgrounds in red, teal, blue, purple, orange and maroon with a white headline and a white pill button "ช้อปเลย". Copy in the opened page text uses reassuring service claims (30-day exchange guarantee, credit terms up to 60 days, free nationwide delivery) and the line "ช้อปครบ จบในที่เดียว". The logo is the blue and red OFM wordmark with a small "OfficeMate" above it.
