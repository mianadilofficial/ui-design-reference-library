---
version: alpha
name: King Power Online
category: "Thai Brands"
description: "King Power Online (kingpower.com/en) is a duty-free shopping site in the proprietary KingPowerHeadline and KingPowerText faces, using bright royal blue #0b56a4 for navigation and actions, price-red #ef3b37, 4px-radius outlined buttons and white product cards on a #f8f8f8 page."
colors:
  canvas: "#ffffff"
  ink: "#000000cc"
  primary: "#0b56a4"
  sale-red: "#ef3b37"
  surface-grey: "#f8f8f8"
  banner-navy: "#1a396e"
  ink-border: "#00000033"
  on-dark: "#fffffff2"
  ink-muted: "#00000070"
  teal-hairline: "#0087a0"
  link: "#4183c4"
  text-input-text: "#000000"
  card-text: "#000000de"
typography:
  display:
    fontFamily: KingPowerHeadline-Bold
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  display-mobile:
    fontFamily: KingPowerText-Regular
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.999px
  body:
    fontFamily: KingPowerText-Regular
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.999px
  heading:
    fontFamily: KingPowerHeadline-Bold
    fontSize: 32px
    fontWeight: 400
    lineHeight: 48px
  subheading:
    fontFamily: KingPowerHeadline-Bold
    fontSize: 28px
    fontWeight: 400
    lineHeight: 42px
  nav:
    fontFamily: KingPowerHeadline-Black
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  button-secondary:
    fontFamily: KingPowerHeadline-Bold
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
    letterSpacing: 0.28px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 10px
  xl: 64px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 24px
  s10: 32px
components:
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 10px 16px
    height: 45px
    borderColor: "{colors.ink-border}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.display-mobile}"
  nav:
    textColor: "{colors.primary}"
    padding: 12px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.display-mobile}"
    rounded: "{rounded.sm}"
    padding: 1px 40px 1px 12px
    height: 36px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.card-text}"
    rounded: "{rounded.lg}"
    padding: 24px
---

## Overview

King Power Online (https://www.kingpower.com/en, page title "KING POWER ONLINE | Duty Free & Home Delivery Shopping") is a promotion-heavy retail storefront. The first screen stacks a dark-navy announcement strip ("SIGN UP FREE! GET DISCOUNT UP TO 30%" with a POWER PASS logo), a thin utility row (language, Power Pass, About Us, Contact Us), a header with the spaced-capitals King Power wordmark, a wide search field with suggestion keywords (Online Exclusive Gift, New Arrivals, Skincare, Perfumes, Watches, Bags), a cart icon and "LOG IN / REGISTER", and a category bar: DEAL OF THE MONTH, BEAUTY&HEALTH, FRAGRANCE, WATCHES&FASHION, HOME&LIVING, FOOD&SOUVENIR, SPORT&LEISURE, HOME DELIVERY, LIQUOR, PROMOTION, ALL BRANDS.

Below the header are large campaign banners in saturated blue with 3D gift-box, football-pitch and skyline art for the "37th Anniversary Delights & Surprises 2026" event, a four-item benefit row (POWER PASS Membership, CARAT Rewards, 0% interest instalment, Click & Collect), a carousel of partner promo tiles, and horizontally scrolling product rows ("Special Offers Up to 50% Off", "Season's Best Sellers") with product photos on white cards. Copy is transactional and percentage-led (UP TO 25%, 40% off) with prices in Thai baht. The tone is festive and busy, kept orderly by white space and a strict blue/red/neutral palette.

## Colors

Ink is a 80%-alpha black (#000000cc), the most-read text color by far, on white (#ffffff) with a very light grey (#f8f8f8) used as the secondary page background. Royal blue #0b56a4 is the action and navigation color: the category bar, "VIEW ALL BRANDS" button text, "View All" links and the section accents. A deeper navy #1a396e fills the announcement strip. Red #ef3b37 is the price and discount color (574 characters of text measured in it), with a pale pink #fecfce behind percentage tags. Gold #b3811e appears as a text and fill color in the loyalty and promo areas, a pale blue #def3ff as a tint, and a brighter blue #375aef and teal #0087a0 as border accents. Border and disabled neutrals are black at 20% (#00000033) and muted text at 44% (#00000070); text on the navy strip is white at 95% (#fffffff2).

The link blue #4183c4 is the measured link color on unstyled anchors. The root variables also include Bootstrap-style names (--red: #dc3545, --pink: #e83e8c, --success: #28a745) which are framework defaults and are not used here as brand colors.

## Typography

Four custom faces are loaded: KingPowerHeadline-Black, KingPowerHeadline-Bold, KingPowerText-Bold and KingPowerText-Regular. As with other custom-font sites, weight is encoded in the family name and measured CSS weights are 400. Section headings use KingPowerHeadline-Bold at 32px/48px ("Special Offers Up to 50% Off") and 28px/42px ("10.10 DELIGHTS & SURPRISES"). Category navigation uses KingPowerHeadline-Black at 12px/16px. Body text, links and inputs use KingPowerText-Regular at 14px with a 19.999px line height. The membership label "POWER PASS Membership" (the extractor's largest hero text role) is KingPowerHeadline-Bold at 16px/24px. Buttons are uppercase KingPowerHeadline-Bold at 14px/22px with 0.28px letter-spacing.

## Layout

The page measures 1280px wide and 5404px tall. A left-aligned container holds the header and every section title, with "View All" aligned to the right end of the same row. Hero banners bleed across the full width with carousel arrows at both edges. The benefit row is four equal columns separated from the promo-tile carousel by a hairline. Product rows are horizontally scrolling carousels of equally sized white cards with a right-edge arrow.

Spacing values measured from paddings and gaps: 1px, 2px, 4px, 6px, 8px, 10px, 12px, 16px, 24px and 32px. The product card measured with 24px padding; the search input has padding 1px 40px 1px 12px (room for the magnifier icon) and a 36px height.

## Elevation & Depth

Almost no shadow is used: the only box-shadow measured is the Tailwind ring reset (rgb(255, 255, 255) 0px 0px 0px 0px, rgba(59, 130, 246, 0.5) 0px 0px 0px 0px), which renders nothing. Separation comes from the #f8f8f8 background against white cards, a 1px border of black at 20% on outlined buttons, and the blue banner art. Product cards sit as white tiles with a faint edge on the grey page.

## Shapes

Measured radii by frequency: 4px (397 elements, the default for buttons, inputs and tags), 2px (46), 8px (31), 64px (30, pills such as category chips), 50% (16, circular arrows and icons), 9999px (13), and two partial-corner values: 4px 4px 0px 0px (tab-like tops) and 4px 0px 0px 4px / 10px 0px 0px 10px for segmented joins (search input and card edges). The overall geometry is small-radius rectangles with occasional fully round controls.

## Components

- Outlined button ("VIEW ALL BRANDS"): white fill, #0b56a4 uppercase KingPowerHeadline-Bold 14px text, 0.28px tracking, 1px solid #00000033 border, 4px radius, padding 10px 16px, height 45px. No filled primary button was detected on the home page.
- Category navigation: KingPowerHeadline-Black 12px/16px in #0b56a4, padding 12px 0px, preceded by a circular "DEAL OF THE MONTH" badge icon.
- Search field: white, black 14px text, 4px left radius joined to a button on the right, height 36px, magnifier icon at the right inside the field.
- Product card: white fill, near-black text (#000000de), 10px radius on measured edges, product photo above brand, name, red discount tag (for example "40% off") with strikethrough original price and a bold red price.
- Promo tag: small colored label ("Best Seller", "UP TO 37% OFF", "10.10") above the product name.
- Announcement strip: navy #1a396e with white text and a chevron to collapse it.

## Design System Architecture

No public design-system or brand-guideline page was opened for this document. The shipped CSS is Tailwind-based (root variables such as --tw-ring-color: rgba(59,130,246,.5) and --tw-ring-offset-color: #fff) with Bootstrap-style color variables (--red, --pink, --success) and a --breakpoint-xl: 1600px variable, plus a large set of --motion-* variables for animation. Brand identity lives in the custom font files and the blue/red palette rather than in published tokens.

## Do's and Don'ts

Do use #0b56a4 for navigation and secondary actions, red #ef3b37 only for prices and discounts, and keep body copy in KingPowerText-Regular 14px. Do put large festive campaign art in banners and keep product cards plain white. Do set section titles in KingPowerHeadline-Bold with a right-aligned "View All".

Don't use red for navigation or generic buttons. Don't use the Bootstrap defaults (#dc3545, #e83e8c, #28a745) as brand colors. Don't round buttons beyond 4px; reserve pill radii for chips and circular icons. Don't add shadows to cards.

## Responsive Behavior

The mobile pass (390px) recorded body text as KingPowerText-Regular 14px/19.999px and a most frequent font size of 12px (6620 characters), followed by 10px and 14px. It did not detect a mobile CTA. Navigation collapse, column counts and breakpoints (apart from the --breakpoint-xl: 1600px variable in the CSS) were not measured.

## Iteration Guide

1. Build on white with a #f8f8f8 secondary background and #000000cc text.
2. Use #0b56a4 for nav and actions, #1a396e for announcement strips, #ef3b37 for price and discount figures.
3. Set headings in KingPowerHeadline-Bold at 28-32px, nav in Headline-Black 12px, body in KingPowerText-Regular 14px.
4. Make buttons 4px-radius outlined rectangles (45px high, uppercase) and use 64px or 9999px only for chips.
5. Fill banners with saturated blue campaign art; keep product tiles white and flat.

## Additional Notes

The capture also shows the hover behavior measured on the utility links: "POWER PASS" text moves from black at 20% alpha with a rgb(65, 131, 196) border color to rgb(30, 112, 191) text and border, a shift from a faint grey to a saturated blue. Hover on other elements was not measured. Imagery is a mix of campaign illustration (blue stadium scene, football pitch lines, gift boxes), partner brand photography such as headphones, running shoes and wine glasses on promo tiles, and clean studio packshots on product cards. Thai-language headline lettering appears inside campaign banners as artwork rather than live text.
