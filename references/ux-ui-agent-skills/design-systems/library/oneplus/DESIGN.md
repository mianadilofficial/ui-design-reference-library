---
version: alpha
name: OnePlus
category: "Consumer Electronics"
description: "OnePlus US store (oneplus.com/us): white and #fafafa product stages with black #000000 bands, black 999px-radius Buy now pills (32px high, hover #4d4d4d), OnePlus Sans Regular and Medium at 36px headlines, a 4px-or-pill radius system and translucent ink colors like #1a1a1af2."
colors:
  canvas: "#ffffff"
  surface-dark: "#000000"
  page-body: "#ffffff"
  ink: "#1a1a1af2"
  ink-on-dark-muted: "#ffffff8c"
  primary: "#000000"
  on-primary: "#fffffff2"
  surface-3: "#fafafa"
  ink-4: "#ffffffbf"
  ink-5: "#1a1a1abf"
  ink-6: "#000000f2"
  hairline: "#1a1a1a26"
  link: "#000000bf"
  primary-hover: "#4d4d4d"
  card-bg: "#262626"
  footer-border: "#00000033"
typography:
  display:
    fontFamily: "\"OnePlus Sans Medium\", \"Helvetica Neue\", Helvetica, Arial, sans-serif, system-ui"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 43px
  display-mobile:
    fontFamily: "\"OnePlus Sans Medium\", \"Helvetica Neue\", Helvetica, Arial, sans-serif, system-ui"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38px
  heading:
    fontFamily: "\"OnePlus Sans Regular\", \"Helvetica Neue\", Helvetica, Arial, sans-serif, system-ui"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  body:
    fontFamily: "\"OnePlus Sans Regular\", \"Helvetica Neue\", Helvetica, Arial, sans-serif, system-ui"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"OnePlus Sans Regular\", Roboto, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
  link:
    fontFamily: "\"OnePlus Sans Regular\", \"Helvetica Neue\", Helvetica, Arial, sans-serif, system-ui"
    fontSize: 14px
    fontWeight: 400
rounded:
  xs: 4px
  pill: 9999px
spacing:
  s1: 2px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 32px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-6}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.xs}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-primary}"
    padding: 0px 24px 32px
    borderColor: "{colors.footer-border}"
---

## Overview

The measured page is the US storefront at https://www.oneplus.com/us (title "OnePlus Official Site"). The stored capture shows, top to bottom: a thin black strip ("You are visiting United States (English/USD) site." with a "Switch to Thailand (ภาษาไทย/THB)" link), a black notice bar ("[Important] OnePlus Business Adjustment Notice >>"), a white header with the red OnePlus logo and the menu Store, Phone, Tablet, Wearables, Audio, More Products, OneTopia, Community, Support, then product heroes on pale grey: "OnePlus 15" (From $999.99) and "OnePlus 15R" ("A Mind Blowing Battery.", From $699.99), "OnePlus Pad Go 2" ("Designed for Your Flow"), and "OnePlus Nord Buds 3 Pro" and "OnePlus Buds Pro 3" side by side. Each has a black pill "Buy now" and an underlined "Learn more" link. A black section follows: "OnePlus Store", "Currently in Community", "2025 OnePlus Photography Awards", "OxygenOS 16 Intelligently Yours", a light "Support" area with cards and pill chips (Product help, Shopping FAQ, Troubleshooting, Protection plan), a "Stay connected" band with the app promo "Get exclusive 20% off audios and accessories with the App code: OPAPP20" and a newsletter field, and a black footer.

WebFetch of the same URL returned only "OnePlus Official Site" and a skip link, so copy above comes from the extraction and the capture, not from the fetch. The look is Apple-like retail minimalism: pale product stages, centered product names in medium weight, price lines in small type, and a restrained monochrome interface in which the only saturated color is the red logo.

## Colors

- **Canvas `#ffffff`** is the header and body background (2119 area units); **surface-dark `#000000`** is the largest background area (2817 units: notice bar, store band, community band and footer). **Surface-3 `#fafafa`** (1737 units) is the product-stage grey and the light support-card fill; **card-bg `#262626`** (747 units) is the dark card fill.
- **Primary `#000000`** with **on-primary `#fffffff2`** (white at 95%) is the "Buy now" pill. Its hover state is **`#4d4d4d`**, measured.
- **Ink `#1a1a1af2`** is the main text on light areas and the most-read text color (986 characters). On dark areas the text colors are `#fffffff2` (420 characters), `#ffffffbf` (251) and **ink-on-dark-muted `#ffffff8c`** (528). **Ink-5 `#1a1a1abf`** (156) is the description tone on light; **ink-6 `#000000f2`** (116) is the nav text; **link `#000000bf`** (32).
- **Hairline `#1a1a1a26`** is the main border color (4 occurrences); `#ffffff59` borders the outlined "Google Play" button and **footer-border `#00000033`** the footer rule.
- The stylesheet declares the brand red as `--v-theme-color_brand_default: 245,5,20` and hover `255,89,89`, an information blue `76, 130, 247` and success and error colors. These are declared RGB triplets; the red was not found in the rendered color lists except as the logo in the capture, so no red token is defined.
- `--swiper-theme-color: #007aff` is a slider-library default and not a brand color.

## Typography

Two faces from one family: **OnePlus Sans Regular** (weight 400, 2553 characters) and **OnePlus Sans Medium** (weight 500, 92 characters, root variable `--v-font_medium`), with Roboto as the declared fallback for buttons and Helvetica Neue, Helvetica, Arial, system-ui behind the others.

- **Display (H1 "OnePlus 15"):** Medium 36px, line-height 43px (mobile 32px, line-height 38px).
- **Heading (H2/H3):** Regular 24px, line-height 32px (mobile H2 20px, line-height 26px).
- **Body:** Regular 16px, weight 400, line-height 24px.
- **Button:** Roboto-fallback stack at 12px, weight 500, line-height 16px.
- **Link:** 14px, weight 400. Sizes by characters: 14px (1163), 12px (806), 16px (185), 18px (137), 28px (108), 24px (95), 36px (92), 32px (38), 40px (21).

Letter spacing is normal except 0.13125px on 12px (233 characters) and 14px (27 characters) text. Weight 400 covers 2394 characters and 500 covers 251.

## Layout

The page is 5617px tall at 1280px. It is built from full-width bands: hero product stages (two side-by-side halves for the flagship phones, one centered stage for the tablet, two half-width stages for earbuds with arrow controls), then dark rows with a split image and text card, a three-card community row, a two-up support row, a newsletter band and a five-column footer (Phones, Accessories, Programs, Support, Company). Paddings measured: 8px (20), 20px (18), 24px (17), 32px (11), 10px (9), 16px (7) and large lateral paddings such as 407.328px and 208px for centered content. Gaps are rarely set (12px, 8px, 2px). The footer padding is 0px 24px 32px.

## Elevation & Depth

No box shadows were measured. Product stages use a subtle vertical gradient from white to `#fafafa` in the capture, dark cards sit on black with the `#262626` fill, and borders use the translucent hairline. Depth is therefore tonal.

## Shapes

Radii: 999px on 25 elements (pill buttons and chips), 4px on 14 (cards and outlined buttons), 100% and 50% on two each (round arrow controls), and two half-rounded values (`4px 0px 0px 4px`, `0px 4px 4px 0px`) for a segmented field. The stylesheet maps every radius size (`--v-radius_sm`, `md`, `lg`, `xl`, `xxl`) to 4px and `--v-radius_full` to 999px, so the system has exactly two shapes: 4px and full pill.

## Components

- **Button primary:** `#000000` pill, `#fffffff2` label, 12px weight 500, padding 0px 16px, height 32px; hover `#4d4d4d`.
- **Outlined pill chip:** transparent with a 1px `#1a1a1a26` border, 14px weight 500, padding 0px 24px ("Troubleshooting").
- **Outlined store badge:** 1px `#ffffff59` border, 4px radius, white 14px text ("Google Play").
- **Text link:** underlined 14px "Learn more", color `#000000bf` on light.
- **Card:** `#262626` fill, `#fffffff2` text, 4px radius (community and store cards); light cards use `#fafafa` with `#1a1a1abf` text and 4px radius.
- **Nav:** white band, `#000000f2` text, 14px. **Footer:** black, `#fffffff2` text, bottom rule `#00000033`.

## Design System Architecture

No public design-system or brand-guideline page is linked from the home page. The shipped CSS exposes a Vuetify-style token layer with the prefix `--v-`: color families (`--v-color_background_primary: 255, 255, 255`, `--v-color_background_secondary: 250, 250, 250`, `--v-color_background_tertiary: 242, 242, 242`, `--v-color_text_fixed_primary: rgba(26, 26, 26, 0.95)`, `--v-color_border_default: rgba(26, 26, 26, 0.15)`, `--v-color_state_hover: 77, 77, 77`, `--v-color_special_mask: rgba(0, 0, 0, 0.55)`), status colors (success, warning, error, information with default, hover, activated and disabled states), brand theme triplets (`--v-theme-color_brand_default`, `_hover`, `_activated`, `_disabled`, `_background`) and radius tokens. Values are stored as bare comma-separated channels so they can be composed with alpha, which explains the many translucent ink and white colors in the measurements.

## Do's and Don'ts

- Do use black pill buttons with `#fffffff2` labels at 12px weight 500, 32px high.
- Do pair a medium-weight centered product name with a small price line on a `#fafafa` stage.
- Do use only 4px or full-pill radii.
- Do express text colors as translucent black or white (`#1a1a1af2`, `#ffffff8c`) as the site does.
- Don't use the swiper blue `#007aff` or declared status colors without measuring them in use.
- Don't add shadows; none were measured.
- Don't recolor the logo; the red is declared as a theme color but no UI element uses it as a fill.

## Responsive Behavior

Measured at 390px: H1 32px (line-height 38px), H2 20px (line-height 26px), body 16px (line-height 24px) and the "Buy now" button unchanged at 12px with a 999px radius and 0px 16px padding. The header band measured at that width is white with 16px text. Mobile text sizes by characters are 14px (1124), 12px (921), 16px (337), 24px (108), 20px (95) and 32px (92). The menu pattern and column counts at 390px were not measured and breakpoints were not read from the stylesheet.

## Iteration Guide

1. Start with white and `#fafafa` product stages, black bands for storytelling, and `#1a1a1af2` text.
2. Make the one primary action a black pill, 32px high, with a `#4d4d4d` hover.
3. Use OnePlus Sans Medium 36px for hero names and Regular for everything else.
4. Keep radii to 4px and 999px.
5. Record any new measurement in SOURCES.json before adding tokens.
