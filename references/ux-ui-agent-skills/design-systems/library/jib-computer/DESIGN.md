---
version: alpha
name: JIB Computer Group
category: "Thai Brands"
description: "Thai IT retailer (JIB Online): navy #2c3d92 header, white canvas, #333333 Kanit text at 10-16px, red #c9302c and #ff0000 price and buy accents, 3px radii and square 0px buttons in a dense Bootstrap-era product grid."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#2c3d92"
  on-primary: "#ffffff"
  button-neutral: "#dddddd"
  button-neutral-hover: "#e6e6e6"
  buy-red: "#c9302c"
  border-red: "#fa5754"
  surface-grey: "#666666"
  ink-2: "#444444"
  price-red: "#ff0000"
  ink-subtle: "#888888"
  ink-green: "#009900"
  text-input-text: "#555555"
  text-input-border: "#cccccc"
  card-bg: "#fafafa"
typography:
  display:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22.8571px
  display-mobile:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  subheading:
    fontFamily: Prompt, sans-serif
    fontSize: 17px
    fontWeight: 700
    lineHeight: 18.7px
  body:
    fontFamily: Prompt, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 17.1429px
  body-dominant:
    fontFamily: Kanit
    fontSize: 10px
    fontWeight: 400
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 8px
  xl: 10px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 5px
  s5: 5.6px
  s6: 6px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 13px
components:
  button-primary:
    backgroundColor: "{colors.button-neutral}"
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
    padding: 5px 15px
    height: 33px
  button-primary-hover:
    backgroundColor: "{colors.button-neutral-hover}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.display-mobile}"
    rounded: "{rounded.none}"
    padding: 6px 12px
    height: 34px
    borderColor: "{colors.text-input-border}"
    boxShadow: rgba(0, 0, 0, 0.075) 0px 1px 1px 0px inset
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink-2}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 4px 6px 0px, rgba(0, 0, 0, 0.19) 5px 5px 10px 0px
  footer:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

JIB (https://www.jib.co.th/web/, operated by JIB Computer Group; the footer reads "2020-2026 JIB COMPUTER GROUP" and "เจไอบี ออนไลน์") is a Thai online and retail store for computers and IT products. The page title is "ศูนย์รวมสินค้าไอที คอมประกอบ Notebook ผ่อน 0% ราคาดีที่ JIB" (IT product centre, built PCs, notebooks on 0% instalments, good prices). The home page is a dense catalogue: a navy header with logo, a wide search field with a category dropdown, a cart and account links and language flags; a white link bar of site sections (home, products, PC build, promotions, price list, terms, and so on); a left category column listing Apple products, notebooks, computer sets, desktops, monitors, gaming gear, memory cards, networking, smartphones, printers and many more; a rotating three-banner hero; a grid of brand logo tiles (Microsoft, ASUS, MSI, Intel, AMD, Lenovo, SteelSeries, Corsair, Gigabyte and others); wide promotional banners with starting prices; and a product grid titled "โปรโมชั่น" with MORE link.

The product cards follow a fixed order: image with small badges, a red "ซื้อเลย" (buy now) button, uppercase product title, tiny spec bullet text, a red promotional price with a struck-through original price and a discount chip, then views and sold counts and a "ลดเหลือ" line. This is a retail-density layout in which promotional artwork supplies all of the colour variety; the interface chrome stays navy, white, grey and red.

## Colors

- **Navy `#2c3d92`** is the header bar background (measured backgroundColorsByArea weight 123; visible as the top bar in the capture). It is used here as the primary brand color. White `#ffffff` is the text on it.
- **Canvas `#ffffff`** dominates (9,299 background area weight). **`#f2f2f2`** (94) and **card-bg `#fafafa`** (68) are the light grey surfaces.
- **Ink `#333333`** is the most-read text (30,972 characters), then **`#444444`** (18,478) for card text, **`#888888`** (7,956) for secondary text and `#777777` for tertiary.
- **Reds:** `#ff0000` is the third most-read text color (10,700 characters, the promotional prices) and a border/background color (208 and 92 weight); **`#c9302c`** is the second most common background by area (694) and is the red seen on the buy buttons in the capture; **`#fa5754`** is the most frequent border color (274). `#c9302c` also equals Bootstrap 3's danger-hover value, and the page loads Glyphicons Halflings, which is a Bootstrap 3 asset.
- **Green `#009900`** is measured on 1,644 text characters; `#1a936f` appears on 13.
- **Grey `#666666`** is the footer background (662 weight) and `#4d4d4d` a darker grey surface (41).
- **Neutral button `#dddddd`** (hover `#e6e6e6`) is the fill of the detected button, the category-menu control "หมวดหมู่สินค้า", with `#333333` text.

## Typography

Three families appear. **Kanit** is the dominant face by far (72,786 characters), loaded at 400; **Prompt** (734 characters) is the measured body stack at 12px / 17.1429px and the 17px / 700 / 18.7px subheading ("เจไอบี ออนไลน์" footer heading); **Helvetica Neue** with Helvetica, Arial and sans-serif fallbacks (1,362 characters) is the measured display and input face at 16px / 700 / 22.8571px (the category button label) and 14px / 400 / 20px (inputs). The extraction also records an `ekachon-light` font used for 26px navigation glyphs and the icon fonts FontAwesome, Glyphicons Halflings and slick.

Sizes by character count are led by 10px (30,795 characters, product spec text), 13px (19,592), 16px (18,197), 14px (3,382) and 24px (2,048, headings and prices). Weights are 400 (71,986), 700 (2,783) and 500 (114). The page has no conventional h1; the display token is measured from the first heading-like link, the category button. Kanit and Prompt are Google Fonts families and need no substitute.

## Layout

At 1280px wide the page scrolls 6,165px. The structure from the capture: header bar with search; link bar; a two-part band with the category list at left and a three-banner carousel at right; a brand-logo grid two rows deep with equal tiles; wide banners; a left column of three stacked ad tiles beside a four-column product grid. Paddings measured: 15px (2,876 occurrences), 1px, 5px, 2px, 10px and 20px, so spacing is tight and the grid is edge-to-edge with narrow gutters.

## Elevation & Depth

Two shadows are recorded: `rgba(0, 0, 0, 0.075) 0px 1px 1px 0px inset` on the search input and `rgba(0, 0, 0, 0.2) 0px 4px 6px 0px, rgba(0, 0, 0, 0.19) 5px 5px 10px 0px` on a card. Elsewhere depth comes from 1px borders in `#fa5754`, `#ff0000`, `#999999` and `#cccccc` rather than shadow.

## Shapes

Radii are small: 3px (756 occurrences) and 5px (275) dominate, with 4px, `3px 3px 0px 0px` (tab-style tops), 8px, 10px and 50%. The detected button, the text input and the footer measure 0px. The result is a squared, utilitarian look with slightly rounded product buttons and badges.

## Components

- **Category button:** `#dddddd` fill, `#333333` Helvetica Neue 16px / 700 text, 0px radius, `5px 15px` padding, 33px tall. On hover the measured text and border color turn `#ff0000`.
- **Text input:** white, `#555555` text, 1px `#cccccc` border, 0px radius, `6px 12px` padding, 34px tall, inset shadow.
- **Buy button, price and badges:** red controls on product cards seen in the capture; their exact computed values were not captured as components beyond the red palette above.
- **Card:** `#fafafa` fill, `#444444` text, 4px radius, the two-layer shadow above.
- **Footer:** `#666666` background, white 17px / 700 headings, 12px body text.
- A cookie notice, a promotional popup and LINE contact controls appear on the live page and are not brand components.

## Design System Architecture

No public design system or brand guidelines were found on the pages opened. The de-facto system is a Bootstrap 3-era stylesheet stack: the extraction lists Glyphicons Halflings and FontAwesome icon fonts and the slick carousel font, and the input uses Bootstrap-style `6px 12px` padding with a `#cccccc` border and inset shadow. Root CSS variables are empty, so values are hard-coded per component. Type is loaded from Google Fonts families Kanit and Prompt plus a local `ekachon-light` face.

## Do's and Don'ts

Do keep the navy header and white canvas, and reserve red (`#ff0000`, `#c9302c`) for prices, buy actions and promotions. Do use Kanit for dense Thai product text at 10px and 13px, and Prompt for body. Do keep radii at 3px to 5px, with 0px on inputs and the category button. Do separate sections with 1px borders.

Don't use pill buttons; the measured controls are square or 3px. Don't add a second saturated accent beside red and navy; colour variety comes from brand artwork. Don't treat the popup or cookie banner as UI tokens.

## Responsive Behavior

Measured at 390px: `headerLinksVisible` is 0, a menu toggle is visible with the label "หมวดหมู่สินค้า", and `maxCardColumns` is 3. Body text is 12px / Prompt and the primary-role text is 14px in the mobile pass. Other breakpoints, tablet behaviour and how the category list collapses were not measured.

## Iteration Guide

1. Use the frontmatter tokens as-is; `primary` is the measured navy header and the neutral grey button is kept under `button-neutral`.
2. Compose pages as navy header, link bar, category column plus banners, then a 4-up product grid with 15px gutters.
3. Use red only for price and buy affordances; use `#888888` for secondary text.
4. Keep corner radii at 3px and square inputs.
5. Set product specs in Kanit 10px; set titles uppercase in the grid.
6. Anything not listed (hover on cards, dark mode, tablet) was not measured.
