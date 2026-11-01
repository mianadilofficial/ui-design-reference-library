---
version: alpha
name: "DISAYA"
category: "Thai Brands"
description: "DISAYA is a Bangkok fashion label whose Shopify storefront (Shella theme) uses a white #ffffff canvas, black #000000 ink, a single Questrial face, a blush #f9dcd6 and deep-teal #224d51 pair for 30px-radius pill buttons, flat shadow-free surfaces and full-bleed editorial photography."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#f9dcd6"
  on-primary: "#224d51"
  hairline: "#f2f2f2"
  surface-soft: "#F5F5F5"
  error: "#ff0000"
  accent-olive: "#d8cb48"
  neutral-silver: "#c0c0c0"
typography:
  display:
    fontFamily: Questrial, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 33px
    letterSpacing: 1.5px
  display-mobile:
    fontFamily: Questrial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: Questrial, sans-serif
    fontSize: 10px
    fontWeight: 400
    lineHeight: 11px
    letterSpacing: 0.5px
    textTransform: uppercase
  link:
    fontFamily: Questrial, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 17px
  body:
    fontFamily: Questrial, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 17px
rounded:
  xs: 30px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 7px
  s5: 10px
  s6: 15px
  s7: 16px
  s8: 25px
  s9: 30px
  s10: 35.53px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 35px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 35px
    borderColor: "{colors.on-primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
---

# DISAYA

## Overview

DISAYA is a Bangkok fashion and women's lifestyle label; the measured site, `https://disaya.com/`, is titled "DISAYA Official Website - Fashion, Women's Lifestyle, Ready-to-wear" and describes itself as a world "full of a unique lifestyle, fashion, ready-to-wear, and jewelry for every Disaya girl". The page lists a Gaysorn Amarin address in Lumpini, Pathum wan, Bangkok at the top, prices in Thai baht with a currency switcher (THB, USD, EUR, CNY, JPY), and a footer credit to West 8 Co.,Ltd. Navigation is brief: DISAYA, DISAYA VACATIONIST and DISAYA SAVOIR-FAIRE in a centered row under the wordmark, with a mega-menu split into SHOP BY CATEGORY (Tops, Dresses, Skirts, Shorts/Trousers, Jewelry, Jumpsuits, Outerwears) and SHOP BY COLLECTION (SS2026, SS2025, MACRAME SIGNATURE, Disaya Vacationist, Disaya Savoir-Faire).

The look is a quiet luxury storefront. The canvas is pure white `#ffffff`, text is black `#000000`, and the only chroma is a blush pink `#f9dcd6` paired with a deep teal `#224d51`, used together in the hero call to action and the add-to-cart button. One typeface, Questrial, covers essentially everything: it carries 1,460 of the 1,563 measured characters. The hero is a full-bleed editorial photograph of a dark-denim set with crystal macramé detailing, with the white words "DISAYA" and "MACRAME SIGNATURE" over it and a pink pill button reading "DISCOVER MORE". Below the hero a product carousel shows one tall model photograph per card with a name, a price in baht (฿12,090.00 in the capture), a color dot, UK size chips (UK4 to UK12), an outlined "ADD TO CART" pill and a heart icon, with carousel dots underneath.

Microcopy is plain retail English: "Newsletter subscription", "Contact us", "Line Official Account : @disaya", "client services", "Your shopping bag is empty." There is no playful tone; the voice is service-oriented and uppercase for labels.

## Colors

- **Canvas `#ffffff`**: the page background and product-card background; it dominates the measured background area by a wide margin.
- **Ink `#000000`**: the most-read text color (1,243 characters), plus the wordmark and icons.
- **Primary `#f9dcd6`**: blush pink fill of the hero "DISCOVER MORE" button; the site declares it as `--theme9`, `--theme-success` and `--button-act-bg`.
- **On-primary `#224d51`**: deep teal, declared as `--theme10`; it is the text color on the pink button and the text and 1px border color of the outlined "ADD TO CART" button.
- **Hairline `#f2f2f2`**: borders on product options and tabs (56 uses), declared as `--theme5` and `--product-options-bd`.
- **Surface soft `#F5F5F5`**: declared as `--theme13`; its on-screen use is not measured.
- **Error `#ff0000`**: `--theme-error`, declared for form errors; not measured on screen.
- **Single-element backgrounds**: `#d8cb48` and `#c0c0c0` were each measured as the background of one element; the extraction does not attribute them to a component, so they are kept as `accent-olive` and `neutral-silver` without assigned roles.

Hover inverts the primary button: the measured state swaps the pink fill and teal text to a teal `#224d51` fill with pink `#f9dcd6` text. Header nav links gain a white background and an underline on hover while keeping black text.

## Typography

The single family is Questrial (declared as `--base-family: Questrial, sans-serif`), and the loaded-font record lists only "Questrial 400 normal", although a computed weight of 700 was measured on 166 characters including the hero "DISAYA" label. Measured sizes by character count are 15px (723), 13px (311), 10px (200), 17px (160), 12px (43), 20px (17) and 30px (6).

- **Display**: Questrial 30px / 33px, weight 700, letter-spacing 1.5px; the white "DISAYA" label over the hero (the site declares `--h1-size: 30px` and `--h1-letter-spacing: 0.05em`). On the 390px mobile pass the hero title is "MACRAME SIGNATURE" at 20px / 27px, weight 400 (`display-mobile`).
- **Body**: Questrial 13px / 17px, weight 400, from `--body-size`, `--body-line-height` and `--body-weight`.
- **Link**: Questrial 13px / 17px, weight 400, black.
- **Button**: Questrial 10px / 11px, weight 400, letter-spacing 0.5px, uppercase.

The page declares `--h2-size: 14px` with 0.05em tracking and a larger body line-height of 23px, which the measured top bar (13px / 23px) uses. Where the Questrial files are hosted was not traced.

## Layout

The desktop pass measured a 1280px viewport and a 2,350px page height. The header is 1,280 × 139px and has three tiers: an address strip, a centered wordmark row with account, wishlist, "Bag (0)" and currency controls on the right, and a centered text navigation. On mobile the header measured 390 × 89px.

The hero is a full-bleed photograph whose overlay text block (DISAYA, MACRAME SIGNATURE, button) is 440px wide and sits right of center; the product carousel beneath it is a single centered card column. The most frequent paddings are 4px (73 uses), 10px (68), 15px (43), 6px, 2px and 16px, and the capture shows a large empty white area below the carousel where lazy-loaded content had not rendered. No gap values were recorded by the extraction. The footer lists "client services" (Disaya Stores, Return & Exchange, Shipping, Cookie Privacy Policy, Terms and Conditions), social links to Facebook, Instagram and YouTube, a newsletter block and the West 8 Co.,Ltd. copyright line.

## Elevation & Depth

The storefront is flat: no box shadow was recorded on any element (the extraction's shadow list is empty). Depth comes from photography, hairlines in `#f2f2f2`, and a black outline on the active size chip (UK6 in the capture). Bag, wishlist, account and sign-up panels exist in the markup with the texts "MY BAG", "MY WISHLIST" and "MY ACCOUNT"; their layout and elevation were not measured.

## Shapes

Two radii appear: 30px on 35 elements (the pill buttons) and 50% on 69 elements (round color dots, carousel dots and icon buttons). Size chips are small rectangles with a thin square outline. The token set keeps `xs: 30px` for the buttons and `pill: 9999px`, which the generator derived for fully rounded shapes. Buttons are 35px tall with `0px 16px` padding; the hero button is 162px wide and the add-to-cart button is 128px wide.

## Components

- **Primary button** (`button-primary`): pink `#f9dcd6` fill, teal `#224d51` text, 1px pink border, 30px radius, 35px tall, padding `0px 16px`, 10px uppercase text ("DISCOVER MORE"). Hover: teal fill, pink text.
- **Secondary / outlined button** (`button-secondary`): white fill, teal text, 1px teal border, same radius and height ("ADD TO CART", with a bag icon).
- **Nav link**: black, underlined on hover with a white background.
- **Link**: black 13px / 17px.
- **Product card**: tall photo, name at body size, bold price, one color dot, row of UK size chips, outlined add-to-cart button and a heart icon.
- **Cookie notice and subscription popup**: the page contains a cookie notice and the theme declares a subscription popup; neither is documented as brand UI.

## Design System Architecture

No public design system or brand guideline exists for DISAYA: the home page `https://disaya.com/` links only to collections, policies, social pages and a Line official account. The site runs on Shopify; the page's own `Shopify.theme` object names the theme "Disaya (Shella Theme 4)" with schema name "Shella" and version 4.8.0, so the de-facto system is a configurable commercial theme. Its configuration is exposed as 400 recorded root custom properties: palette slots `--theme`, `--theme3`, `--theme5`, `--theme8`, `--theme9`, `--theme10`, `--theme13`, heading scales `--h1-size` to `--h6-line-height`, five button variants (`--button-*` through `--button5-*`, each with background, color, border and hover/active states), and per-section groups such as `--header-style-1..4-*`, `--footer-style-*`, `--promobox-style-*` and `--popup-subscription-*`. Most of those are unused variants of the theme; only the values that were measured on screen are tokens here.

## Do's and Don'ts

- Do keep the page white and black, with blush pink `#f9dcd6` and teal `#224d51` reserved for calls to action.
- Do use Questrial only, with uppercase 10px labels at 0.5px tracking on buttons.
- Do use 30px pill buttons that are 35px tall and invert their colors on hover.
- Do let editorial photography carry the color and keep text overlays white.
- Don't add drop shadows or rounded product cards; none were measured.
- Don't use the unattributed `#d8cb48` or `#c0c0c0` as brand colors without re-measuring them.
- Don't document the cookie banner or subscription popup as part of the brand.
- Don't specify a separate bold Questrial file: the loaded-font record lists only the 400 face.

## Responsive Behavior

The mobile pass at 390px recorded: the hero title "MACRAME SIGNATURE" at 20px / 27px, weight 400, the pink "DISCOVER MORE" button unchanged at 162 × 35px, and a header 390 × 89px tall. No mobile menu mechanism, column count, breakpoint or product-grid behavior was recorded (not measured), so none is described here.

## Iteration Guide

1. Set canvas `#ffffff`, ink `#000000`, and load Questrial at 400.
2. Build the header as an address strip, a centered DISAYA wordmark with account, wishlist, bag and currency controls, and a centered three-link navigation.
3. Place a full-bleed editorial photograph with white overlay text and a pink 35px pill button.
4. Make product cards from tall photographs, a baht price, UK size chips and an outlined teal add-to-cart pill.
5. Keep surfaces flat; separate with `#f2f2f2` hairlines only.
6. Re-measure any new element, add tokens only from measurements, then run `node web/scripts/verify-designs.mjs --slug=disaya`.
