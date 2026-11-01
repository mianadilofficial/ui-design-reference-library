---
version: alpha
name: Shiseido
category: "Beauty & Personal Care"
description: "Shiseido (shiseido.com, US store): white canvas #ffffff with black #000000 ink, square-ish black 12px uppercase ShiseidoGinzaExtBold buttons (5px radius, 40px tall), a red #d6001c promo bar and Get Help pill, ShiseidoGinzaExtRegular 36px/43.2px headings over ShiseidoGinzaRegular 14px/19.6px body."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  accent-red: "#d6001c"
  on-primary: "#ffffff"
  charcoal: "#2b2b2b"
  ink-soft-white: "#fefefe"
  ink-grey: "#505050"
  ink-grey-light: "#757575"
  ink-teal: "#0097b5"
  card-border: "#e1e1e1"
typography:
  display:
    fontFamily: ShiseidoGinzaExtRegular, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 43.2px
  display-mobile:
    fontFamily: ShiseidoGinzaExtRegular, sans-serif
    fontSize: 22px
    fontWeight: 400
  subheading:
    fontFamily: ShiseidoGinzaExtRegular, sans-serif
    fontSize: 23px
    fontWeight: 400
    lineHeight: 27.6px
    textTransform: capitalize
  body:
    fontFamily: ShiseidoGinzaRegular, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  link:
    fontFamily: ShiseidoGinzaRegular, sans-serif
    fontSize: 11px
    fontWeight: 400
    lineHeight: 15.4px
  button:
    fontFamily: ShiseidoGinzaExtBold, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 14.4px
    letterSpacing: 0.6px
    textTransform: uppercase
  input:
    fontFamily: ShiseidoGinzaRegular, sans-serif
    fontSize: 26px
    fontWeight: 400
    lineHeight: 29.9px
rounded:
  xs: 2.2px
  sm: 3px
  md: 3.56px
  lg: 5px
  xl: 15px
  2xl: 50px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 16.24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 12px 28px
    height: 40px
    borderColor: "{colors.charcoal}"
  button-help:
    backgroundColor: "{colors.accent-red}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.2xl}"
    padding: 10px 20px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 12px 28px
    height: 40px
    borderColor: "{colors.charcoal}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 0px 15px 0px 0px
    height: 31px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 0px 16.24px 16.24px
    borderColor: "{colors.card-border}"
  footer:
    textColor: "{colors.ink}"
    padding: 60px 33px
---

## Overview

Shiseido (https://www.shiseido.com/, which resolves to https://www.shiseido.com/us/en/; page title "SHISEIDO | Skincare, Makeup & Suncare from Japan") is the US online store of the Japanese beauty company. The page opens with a thin red promo bar (#d6001c, "5-Piece Gift with $125+ Purchase CODE: RESET" in the capture), a white header with the SHISEIDO GINZA TOKYO logotype, a main navigation (Best Sellers, New, Skincare, Sunscreen, Makeup, Zen Fragrance, Sets & Travel, HSA/FSA, Discover and others) and utility icons for store locator, account and bag, then a search field with the placeholder "Search 'Body Sunscreen'". A full-width carousel hero comes next, followed by the tagline "Modern Tradition. Thoughtful Technology. Timeless Beauty." with outlined pill links Offers, Get Help and Services. Sections include a Shop Best Sellers product carousel, a Shop by Collection band (Benefiance, Vital Perfection, Ultimune), a Shop by Concern grid, testimonials, Shop by Skin Type, and brand statistics (150 years, 2,500 patents, 28,000 clinical trials), then a signup footer ("Sign up for 15% off your first order.").

The initial capture contained a country-selection dialog ("Welcome to Shiseido", a country drop-down, ACCESS THE WEBSITE) over a dark scrim. These are overlays and are not documented as brand UI; the page was re-measured with the overlay hidden (`consentOverlaysHidden: minimized-header-container, reveal-overlay`).

Photography is studio product still life on neutral and warm backgrounds (red and gold ampoules, white pedestals, black gift boxes) and beauty portraits; product cards sit on white. Copy is polished and benefit-led, with short imperative calls to action: "SHOP NOW", "EXPLORE NOW", "ADD TO BAG - $165.00".

## Colors

- **Canvas #ffffff.** The page and card background.
- **Ink #000000.** Almost all text (4,767 characters) and the fill of the primary buttons.
- **Primary #000000.** The black buttons are the brand's call to action: SHOP NOW, BENEFIANCE, VITAL PERFECTION, ULTIMUNE and EXPLORE NOW all measure a #000000 fill with white text. In this file `primary` is reassigned to that measured black rather than the generator's pick (see Iteration Guide); the extractor's top candidate was the red "Get Help" pill.
- **Promo red #d6001c.** The promo bar (258 area weight) and the fill of the Get Help button on hover (the hover probe shows transparent to #d6001c with white text). Named `accent-red`.
- **Charcoal #2b2b2b.** 1px borders on buttons (25 uses), the Add to Bag buttons' fill (hover turns it #ffffff with #0a0a0a text) and 199 area weight.
- **Soft white #fefefe.** Text over imagery (397 characters).
- **Greys.** #505050 (59 characters), #757575 (42), #8e8e8e; borders #e1e1e1 on cards (16 uses), #dcdcdc, #b3b3b3.
- **Teal #0097b5.** A text colour used on 30 characters (rating or link text); named `ink-teal`.
- **Surfaces.** #ebebeb and #fafafa are small background areas; #ffffffd9 is a translucent white (113 area), used for the Shop by Collection panel in the capture.

## Typography

A family of in-house faces: **ShiseidoGinzaRegular** (400, body, 4,070 characters), **ShiseidoGinzaExtRegular** (400, headings, 925), **ShiseidoGinzaMedium** (500, 521), **ShiseidoGinzaExtBold** (700, buttons, 134) and **ShiseidoGinzaBold** (700, 45). The stylesheet also declares italics and an extra-light weight that no measured text used. These are proprietary fonts; no public substitutes are published on the pages opened. Fallback stack on every rule is `sans-serif`.

- **Display:** ShiseidoGinzaExtRegular 36px / 43.2px, weight 400 (section titles such as "25% Off Skincare Essentials*"); mobile 22px.
- **Subheading:** ShiseidoGinzaExtRegular 23px / 27.6px, weight 400, capitalised ("Cleanse").
- **Body:** ShiseidoGinzaRegular 14px / 19.6px, weight 400.
- **Button:** ShiseidoGinzaExtBold 12px / 14.4px, weight 700, letter spacing 0.6px, uppercase.
- **Link and fine print:** ShiseidoGinzaRegular 11px / 15.4px.
- **Select:** ShiseidoGinzaRegular 26px / 29.9px ("Best Sellers" drop-down in the Shop heading).

Sizes by character count: 14px (2,903), 12px (1,344), 11px (680), 26px (298), 9px (155), 23px (151), 36px (99), 18px (61). Weights: 400 (4,936), 500 (551), 700 (208).

## Layout

The page is 1,280px wide and 6,247px tall. A 1,280px-wide white header precedes full-bleed hero banners; below them content is a 3-up card carousel with 15px and 20px gaps (gaps measured: 15px 30 uses, 12px 30, 5px 28, 20px 9). Product cards measure 376px wide. Paddings: 3px (150 uses), 12px (39), 4px (36), 10px (25), 33px (15), 16.24px (15), 24px (15). The footer is 587px tall with 60px by 33px padding and a signup form. The Shop by Collection panel in the capture is a white translucent box over a product photograph, holding three equal black buttons.

## Elevation & Depth

No box shadows were measured on rendered elements (`boxShadows` is empty). The stylesheet contains Salesforce Lightning focus shadows (`--slds-g-shadow-*-focus-1`, `0 0 3px #0176d3`) from an embedded widget; they are not brand styling. Separation comes from 1px borders (#e1e1e1 on cards, #2b2b2b on buttons) and from white translucent panels over photography.

## Shapes

Measured radii: 3px (75 weighted uses), 5px (58, the buttons and product cards), 15px (18), 2.2px (15), 50% (4, circular carousel controls), 3.56px (1), 50px (2, the Get Help pill). The tokens keep xs 2.2px, sm 3px, md 3.56px, lg 5px, xl 15px, 2xl 50px and pill 9999px. Buttons and cards use the 5px radius; the Get Help button is a 50px pill; carousel arrows are circular.

## Components

- **Primary button.** Black #000000 fill, white text, ShiseidoGinzaExtBold 12px/14.4px uppercase with 0.6px tracking, 1px solid #2b2b2b border, 5px radius, padding 12px 28px, 40px tall, 145px to 220px wide. On hover the fill inverts to white with black text (SHOP NOW hover probe).
- **Add to Bag button.** #2b2b2b fill, white label; hover turns #ffffff with #0a0a0a text.
- **Get Help pill.** ShiseidoGinzaRegular 14px/19.6px, 0.2px tracking, 50px radius, padding 10px 20px, 40px by 101px, white on #d6001c in the extractor's measurement; transparent at rest, red on hover.
- **Select (Shop heading).** 26px/29.9px, 31px tall, 174px wide, padding 0px 15px 0px 0px.
- **Product card.** 5px radius, 1px solid #e1e1e1 border, padding 0px 16.24px 16.24px, white; a "Best Seller" tag at top left; rating row; a size select and an Add to Bag button.
- **Footer.** Black text on white, 60px by 33px padding, 587px tall.

## Design System Architecture

No public design system, brand guideline or press kit was found on the home page: the closest links are About the Brand, the corporate site (group.shiseido.com), Careers, Terms of Use and Privacy Policy. No search was run. The page's custom properties are generic (`--pr-ring-*` utility variables, `--eswIcon*` variables from a chat widget, `--swiper-theme-color: #007aff`), and the brand is carried by its self-hosted type family (`ShiseidoGinza*`) and a small set of repeated components, not by a published token layer. The Swiper blue and Salesforce focus blue are third-party and are not brand colours.

## Do's and Don'ts

- Do use black #000000 buttons with white uppercase ShiseidoGinzaExtBold 12px labels and a 5px radius.
- Do use #d6001c sparingly for promotion bars and help affordances.
- Do put product cards on white with a 1px #e1e1e1 border and 5px radius.
- Do keep body text at 14px/19.6px regular and headings in the Ext Regular face at 36px.
- Don't use the Swiper #007aff or Salesforce #0176d3 blues as brand colours.
- Don't add drop shadows; none were measured.
- Don't document the country selector dialog or its scrim as brand UI.

## Responsive Behavior

The mobile pass measured: the h2 heading at 22px (desktop 36px) with normal line height, the primary shop buttons unchanged at 12px bold uppercase with 5px radius and 40px height (BENEFIANCE 230px wide), and body text at 14px. Menu behaviour, grid reflow and breakpoints were not measured.

## Iteration Guide

1. White canvas, black ink, black uppercase buttons with a 5px radius.
2. Red #d6001c only for the promo bar and help pill.
3. Headings in the Ext Regular face at 36px/43.2px; body 14px/19.6px.
4. Cards: 1px #e1e1e1 border, 5px radius, centred product still life.
5. The generator's primary was the red Get Help pill; this file reassigns `primary` to the measured black buttons and keeps the red as `accent-red`.
6. Run `node web/scripts/verify-designs.mjs --slug=shiseido` after edits.
