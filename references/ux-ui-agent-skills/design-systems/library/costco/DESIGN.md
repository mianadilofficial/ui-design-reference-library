---
version: alpha
name: Costco
category: "Retail & E-commerce"
description: "Costco Wholesale US storefront: white canvas (#ffffff), body ink #333333, Costco blue #005dab buttons with 3px radius, Costco red #e51937 accents, green #008000 savings text, set in Costco Sans Web with a Material UI token layer and dense promo tiles."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  ink-strong: "#000000"
  ink-muted: "#5f5f5f"
  ink-light: "#707070"
  primary: "#005dab"
  on-primary: "#ffffff"
  primary-hover: "#004c8a"
  success: "#008000"
  costco-red: "#e51937"
  surface-grey: "#eeeeee"
  surface-black: "#000000"
typography:
  display:
    fontFamily: "\"Costco Sans Web\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 24px
    fontWeight: 700
  lead:
    fontFamily: "\"Costco Sans Web\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 23.4px
  subheading:
    fontFamily: "\"Costco Sans Web\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  body:
    fontFamily: "\"Costco Sans Web\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  button:
    fontFamily: "\"Costco Sans Web\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 400
rounded:
  button: 3px
  base: 4px
  card: 8px
  md: 9px
  panel: 10px
  capsule: 100px
  pill: 9999px
spacing:
  mui-1: 4px
  mui-2: 8px
  mui-3: 12px
  mui-4: 16px
  mui-5: 24px
  mui-6: 32px
  mui-7: 48px
  mui-8: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 12px 16px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 2.5px 4px 2.5px 8px
    height: 40px
    borderColor: "{colors.canvas}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
    padding: 8px
  promo-text:
    textColor: "{colors.success}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.ink}"
---

## Overview

Costco is the US e-commerce home page of Costco Wholesale (page title "Welcome to Costco Wholesale"). It is a high-density retail storefront: a blue announcement bar, a white utility header with the red-and-blue Costco logo and a wide search field, a blue category bar, a row of grey promo tiles, then alternating black and light promo panels filled with product cards. The measured document is 12,404px tall at 1280px wide and contains 15,027 visible elements, so the page is a long scroll of carousels rather than a few hero moments.

The voice is transactional and member-focused. Banner and tile copy reads "Spend and Save on Select Appliances from Samsung, LG and More!", "Member Appreciation Days", "7 Days Only!", "Online-Only | Valid 10/5/26 - 10/11/26 | While Supplies Last" and "Spooky Season is Here!". Product cards carry short badge labels ("Costco Direct", "Online Only", "Members Only", "Instant Savings"), a star rating with a review count, a bold price, and a green savings line such as "After $150 - $200 OFF". Calls to action are "See Details" and, for signed-out visitors, "Sign In for Details". The header actions are "Sign In / Register", "Orders & Returns" and "Cart".

The visual character is functional rather than editorial: product photography on white, saturated promotional artwork inside black panels with rounded corners, and one consistent blue for every action. There is no decorative type; the brand expresses itself through the logo, the blue/red pairing and the density of offers.

## Colors

All hexes below are from the measured page or from CSS variables the page ships.

- **Canvas `#ffffff`** is the page background and covers the largest area (area weight 33,054, against 3,174 for the next colour).
- **Ink `#333333`** is the most-read text colour (15,090 characters) and the declared `--mui-palette-text-default`. **Strong ink `#000000`** follows (13,681 characters) and is the declared `--mui-palette-common-black`.
- **Primary `#005dab`** is Costco blue. It fills the "See Details" and "Sign In for Details" buttons, the announcement bar, the category bar and the tag labels. The theme declares it as `--mui-palette-primary-main`, `--mui-palette-blue-600` and `--mui-palette-costco-blue`. Hover darkens it to `#004c8a` (measured hover state, and the declared `--mui-palette-blue-700`).
- **Costco red `#e51937`** is declared as `--mui-palette-costco-red` and appears as a measured background (area weight 123); the capture shows it on the "Costco Direct" tag labels and the logo.
- **Success green `#008000`** colours savings text ("After $150 - $200 OFF", the measured body-text role) and is declared as `--mui-palette-text-success` and `--mui-palette-green-500`.
- **Muted inks** `#5f5f5f` (declared `text-medium` and `text-secondary`) and `#707070` (declared `text-light`) carry secondary labels such as "Online Price".
- **Surfaces.** `#eeeeee` is the footer background (declared `--mui-palette-grey-A200`); `#000000` is the background of the black promo panels (area weight 2,149).

Other measured backgrounds include `#f4ede7` (905), `#fafafa` (709), `#0e0e0e`, `#ffc20f`, `#27509b`, plus a lilac and a deep-navy used inside campaign artwork; these belong to individual promotions rather than the interface. Costco's stylesheet also contains Bootstrap-era values such as `#337ab7`; those are framework defaults and are not used as brand colours here.

## Typography

One family carries the page: **Costco Sans Web**, loaded with a weight range of 100 to 900, with the stack `-apple-system, "system-ui", "Segoe UI", Roboto, sans-serif` as fallback. It accounts for 40,803 measured characters; Arial appears on 1,488 characters and Roboto is also declared as a font face.

Measured desktop sizes by characters: 14px (16,579), 16px (15,519), 12px (8,846), 24px (618), 18px (332), 26px (313), 11px, 15px, 32px and 70px (5). Weights are 400 on 39,660 characters and 700 on 2,631.

- **Display, 24px / 700:** the heading role (the measured `h2`).
- **Lead, 18px / 400, line-height 23.4px:** the default size of the document body element.
- **Subheading, 14px / 400, line-height 21px:** product titles such as "Sony PlayStation - Four $25 eGift Cards Digital Download", colour `#333333`.
- **Body, 12px / 400, line-height 18px:** promo and savings lines.
- **Button, 16px / 400:** the "See Details" label.

The Material UI theme also declares a larger scale in root variables: `--mui-font-h1` 300 6rem/1.167, `--mui-font-h2` 300 3.75rem/1.2, `--mui-font-h3` 400 3rem/1.167, `--mui-font-h4` 400 2.125rem/1.235, `--mui-font-h5` 400 1.5rem/1.334, `--mui-font-h6` 500 1.25rem/1.6, `--mui-font-body1` 400 1rem/1.5, `--mui-font-body2` 400 0.875rem/1.43, `--mui-font-caption` 400 0.75rem/1.66 and `--mui-font-button` 500 0.875rem/1.75. These are declared by the theme; the 6rem and 3.75rem sizes were not measured on the home page.

**Substitutes.** Costco Sans Web is proprietary; the declared fallbacks are the system UI stack and Roboto.

## Layout

Desktop is measured at 1280px. Top to bottom: a blue announcement bar; a utility row ("While Supplies Last", "Online-Only", "Treasure Hunt", "What's New", "Member Favorites", "Recommendations for You", "Get Email Offers", "Customer Service"); the logo, search field and "Sign In / Register", "Orders & Returns", "Cart"; a blue category bar ("Shop", "Grocery", "Same Day", "Savings", "Business Delivery", "Optical", "Pharmacy", "Services", "Photo", "Travel", "Membership", "Locations"); a warehouse and delivery-location strip; and a carousel of grey rounded tiles.

Below that, full-width black panels with rounded corners (10px) hold a promo banner and a product carousel with pagination dots. Product cards measure 216px wide and 539px tall with 8px padding. The footer is a grey block 847px high with grouped links: About Us, Membership, Vendors & Suppliers, Customer Service, Locations & Services.

Spacing follows the theme's 4px base: `--mui-spacing-1` through `-8` are 4px, 8px, 12px, 16px, 24px, 32px, 48px and 64px. The most common measured gaps are 4px (4,462 uses), 16px, 12px and 24px; common paddings are 2px, 8px, 16px, 3px, 4px and 12px.

## Elevation & Depth

Depth is light. The most frequent measured shadow is `rgba(0, 0, 0, 0.3) 0px 0px 5px 0px` (191 uses), a soft all-round halo; a second, `rgba(0, 0, 0, 0.25) 0px 0px 4px 0px`, appears once. The stylesheet also contains focus and form shadows such as `0px 0px 4px 0px #005dab` and `inset 0px 0px 0px 1px #ccc`. The Material UI elevation ladder (`--mui-shadows-1`, `-2`, `-4`, `-15`) is declared in the root variables. Separation on the page comes mostly from colour blocks: white, grey `#eeeeee` and black panels.

## Shapes

Measured corner radii by frequency: 50% (476, circular controls and icons), `3px 3px 0px` (221), 3px (191), 8px (170), 10px (149), `10px 10px 0px 0px` (34), `0px 0px 10px 10px` (29), 100px (13), `0px 3px 3px 0px` (2) and 4px (1). The primary button is 3px; cards are 8px; the large promo panels and heading container are 10px; the theme's base `--mui-shape-borderRadius` is 4px. Which elements carry the 100px and 50% radii was not isolated in the extraction.

## Components

- **Primary button.** Blue `#005dab` fill, white 16px / 400 label, radius 3px, padding 12px 16px, height 44px, measured width 174px on product cards ("See Details", "Sign In for Details"). Hover fills `#004c8a`.
- **Search input.** 40px high, 520px wide, padding 2.5px 4px 2.5px 8px, 16px text in `#333333`, a 1px white border.
- **Product card.** White background, 8px radius, 8px padding, 216px by 539px; contents in order: photo, tag labels, title (14px), rating, price, savings line, button and a wishlist control.
- **Tags.** Small labels such as "Costco Direct" (red) and "Online Only" (blue).
- **Footer.** `#eeeeee` background, text `#333333`.
- **Cookie and feedback overlays** (a "Feedback" tab on the right edge in the capture) are third-party or consent controls and are not part of the brand UI.

## Design System Architecture

Costco publishes no design system or brand guideline that the home page links to: the page's own footer offers "Logo and Media Requests" (a logo-use page) but nothing for developers, so no public system is documented. The de-facto system is a Material UI theme with CSS variables, visible as 230 root custom properties named `--mui-palette-*`, `--mui-font-*`, `--mui-spacing-*`, `--mui-shadows-*` and `--mui-shape-borderRadius`. Palette scales are named `blue-100` to `blue-700`, `green-100` to `green-700`, `red-100`/`red-500`, `yellow-100`/`yellow-200` and `grey-50` to `grey-A700`, plus brand entries `costco-red` and `costco-blue`. Typography has both MUI names (`h1` to `h6`, `body1`, `body2`) and Costco names (`t1` to `t7`, `t1-v2` to `t4-v2`, `bodyCopy`). Source opened: https://www.costco.com/.

## Do's and Don'ts

- Do use `#005dab` for every primary action, with `#004c8a` on hover and white 16px text, radius 3px.
- Do show savings in `#008000` and keep prices bold with 12px or 14px supporting text.
- Do give promo panels black or tinted backgrounds with 10px corners and leave product photography on white cards.
- Do keep spacing on the 4px grid.
- Don't introduce a second action colour; red `#e51937` is a tag and logo colour, not a button fill.
- Don't use Bootstrap defaults such as `#337ab7`.
- Don't document or recreate the consent, feedback and carousel controls as brand components.

## Responsive Behavior

Measured at 390px: the measured primary-CTA candidate is the announcement-bar link, `#005dab`, 390px wide and 56px high with 16px text and 0px radius; the first visible heading role is "Shop" at 18px / 27px, white; the h2 role stays 24px / 700 and measures 326px wide and 134px high; body text stays 12px / 18px. Mobile font sizes by characters are 16px (15,427), 14px (14,468), 12px (8,846), 10px (1,127), 24px, 22px and 18px. Layout changes of the carousels, category bar and footer at 390px were not measured.

## Iteration Guide

1. Set canvas `#ffffff`, ink `#333333`, primary `#005dab` and in Costco Sans Web (or Roboto) at 14px for product text.
2. Build buttons at 44px high, radius 3px, padding 12px 16px; hover `#004c8a`.
3. Put campaigns in 10px-radius panels (black `#000000` or tinted) with carousels of 216px-wide, 8px-radius cards.
4. Use the 4px spacing ladder from the theme (4, 8, 12, 16, 24, 32, 48, 64).
5. Before adding a colour, check whether it exists in the `--mui-palette-*` variables; measure new components with the extractor before adding tokens.
