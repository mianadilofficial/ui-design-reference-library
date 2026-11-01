---
version: alpha
name: AliExpress
category: "Retail & E-commerce"
description: "AliExpress Thai storefront: white canvas, TT Norms Pro 12-14px text, red #f00633 prices and #fd384f brand red, grey #f5f5f5 pill category button with 30px radius, black 40px buttons and 8px panels."
colors:
  canvas: "#ffffff"
  ink: "#191919"
  primary: "#f5f5f5"
  on-primary: "#191919"
  ink-body: "#666666"
  price-red: "#f00633"
  ink-heading: "#222222"
  ink-slate: "#606472"
  ink-grey: "#757575"
  hairline: "#0000001a"
  brand-red: "#fd384f"
  button-black: "#000000"
  nav-text: "#3a3e4a"
  footer-text: "#333333"
typography:
  display:
    fontFamily: "\"TT Norms Pro\", \"Open Sans\", Roboto, Arial, Helvetica, sans-serif, SimSun"
    fontSize: 32px
    fontWeight: 700
  display-mobile:
    fontFamily: "\"TT Norms Pro\", \"Open Sans\", Roboto, Arial, Helvetica, sans-serif, SimSun"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 31px
  heading:
    fontFamily: "\"TT Norms Pro\", \"Open Sans\", Roboto, Arial, Helvetica, sans-serif, SimSun"
    fontSize: 21px
    fontWeight: 700
  body:
    fontFamily: "\"TT Norms Pro\", \"Open Sans\", Roboto, Arial, Helvetica, sans-serif, SimSun"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.36px
  button:
    fontFamily: "\"TT Norms Pro\", \"Open Sans\", Roboto, Arial, Helvetica, sans-serif, SimSun"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20px
  nav:
    fontFamily: "\"TT Norms Pro\", \"Open Sans\", Roboto, Arial, Helvetica, sans-serif, SimSun"
    fontSize: 14px
    fontWeight: 400
  link:
    fontFamily: "\"TT Norms Pro\", \"Open Sans\", Roboto, Arial, Helvetica, sans-serif, SimSun"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 40px
  button-secondary:
    fontFamily: "\"TT Norms Pro\", \"Open Sans\", Roboto, Arial, Helvetica, sans-serif, SimSun"
    fontSize: 16px
    fontWeight: 500
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 15px
  xl: 16px
  2xl: 20px
  3xl: 24px
  4xl: 30px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 10px 16px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.button-black}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    padding: 10px 16px
    height: 40px
  link:
    textColor: "{colors.brand-red}"
    typography: "{typography.link}"
    padding: 0px 16px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.nav-text}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.button-black}"
    typography: "{typography.nav}"
    padding: 0px 0px 0px 10px
    height: 34px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-heading}"
    rounded: "{rounded.md}"
    padding: 16px
    boxShadow: rgba(15, 17, 17, 0.5) 0px 0px 14px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.footer-text}"
---

# AliExpress

## Overview
The measured page is the Thai storefront of AliExpress, th.aliexpress.com (the site served the Thai localisation at the global address; document language `th`, title "TH.AliExpress | AliExpress ไทย"). It is a very dense marketplace home page on a white canvas: a white 72px header with the AliExpress logo, a search bar with a black round search button, icon links, and a "มากขึ้น" menu; a full-width campaign banner whose color and artwork change with the promotion (blue in one capture, green in another, so the banner color is a campaign asset and not a token); a "free shipping for Choice items" strip; and then "ดีลของวันนี้" (today's deals) with two bordered panels, an "AliExpress Business" dark photo band with count-up statistics (5M+, 20M+, 10, 24H), a category-shopping grid with a pale blue "Viva" panel, and an endless grid of product tiles.

The capture also shows a browser-notification permission prompt at the top left ("อนุญาตให้เว็บไซต์แจ้งเตือน"). It is a popup, and the extraction was re-run once with the popup-handling batch; it is not documented as brand UI or tokens. The side icon rail at the right edge is a utility control and is likewise excluded.

## Colors
- **canvas** `#ffffff`: dominant background (13943 area weight); `#0000000a` (2710) is a faint grey wash used on section backgrounds.
- **ink** `#191919`: the most-read text color (8475 characters), also `--color-grey-10`.
- **ink-body** `#666666`: secondary text (8340 characters).
- **ink-heading** `#222222`: section headings.
- **ink-slate** `#606472` and **ink-grey** `#757575` (`--color-grey-6`): captions and meta text.
- **price-red** `#f00633`: prices and discount badges; the strongest accent by character count (4322).
- **brand-red** `#fd384f`: the site's `--color-brand-primary`. Related variables: `--color-brand-bg` `#ffe6e7` and `--color-brand-disable` `#ffb5bb`. The measured `#fff6f7` and `#ffcbcb` backgrounds belong to the same pink family.
- **primary** `#f5f5f5` with **on-primary** `#191919`: the detected primary button, the grey "หมวดหมู่ทั้งหมด" (all categories) pill, is a light grey fill with dark text.
- **button-black** `#000000`: the "ช้อปเลย" (shop now) button and the search button.
- **nav-text** `#3a3e4a` and **footer-text** `#333333`.
- **hairline** `#0000001a`: 1px borders on panels.
Other measured colors: `#adf1fe` pale blue (the Viva panel), `#018941` green text, `#ec0936` red text, `#cccccc`, `#ebebeb` (`--color-grey-2`), `#096` (`--color-success-primary`), and `#3170ee` (`--color-function-2-1`). `#59922b` (a campaign banner background in a later capture) is not tokenised.

## Typography
The stack is "TT Norms Pro", "Open Sans", Roboto, Arial, Helvetica, sans-serif, SimSun, with TT Norms Pro in 400, 500, 600 and 700 and Open Sans in 400 and 700 loaded. TT Norms Pro covers the Latin text (26535 characters measured); Thai glyphs fall through to the later fonts in the stack. TT Norms Pro is a commercial typeface from Type Type; a substitute is not published by the brand.
- **display** 32px / 700 ("ดีลของวันนี้").
- **heading** 21px / 700.
- **subheading** 24px / 700 / 31px (panel titles).
- **body** 12px / 400 / 15.36px.
- **button** 16px / 600 / 20px; **button-secondary** 16px / 500.
- **nav** 14px / 400.
- **link** 16px / 700 / 40px.
By character count, 14px (12598) and 12px (8561) dominate, then 16px (4481), 20px (524), 13px (126), 15px (117), 32px (67), 24px (36) and 21px (25). The page is small-type heavy, as is expected of a product grid; this is measured, not assumed.

## Layout
Measured at 1280px wide. The header is 72px tall. Content panels run in two equal columns ("ดีลซื้อเป็นชุด" and "ซูเปอร์ดีล") each showing three product tiles with price, strikethrough price, discount badge, star rating and sold count. The category section is a feature panel at left and a 2 by 3 grid of image tiles at right. Below, a five-column product grid continues down the page. The page defines a spacing scale: `--s-1` 4px, `--s-2` 8px, `--s-4` 16px, `--s-6` 24px, `--s-8` 32px and `--s-16` 64px; button padding is 10px 16px and the search input has 10px left padding at 34px high.

## Elevation & Depth
Shadows are soft and used sparingly: `0 2px 8px rgba(0,0,0,.1)`, `0 4px 20px rgba(0,0,0,.15)`, `0 3px 6px -4px rgba(0,0,0,.12), 0 6px 16px 0 rgba(0,0,0,.08), 0 9px 28px 8px rgba(0,0,0,.05)`, plus the root `--shadow-2-down` `0px 4px 16px 0px rgba(0,0,0,0.2)` and `--shadow-1-up` `0px -1px 0px 0px rgba(0,0,0,0.1)`. The dropdown panel measured `rgba(15, 17, 17, 0.5) 0px 0px 14px 0px` at 8px radius with 16px padding. Product panels rely on 1px hairline borders instead of shadows.

## Shapes
Root variables: `--corner-s` 8px, `--corner-m` 16px, and for the mobile set `--m-corner-xs` 2px and `--m-corner-xl` 500px. Measured radii: 24px (8 uses), 4px (5), 20px (3), 15px (2), 8px, 16px, 30px and 6px. The primary pill button is 30px; panels 8px; the badge corners 4px.

## Components
- **button-primary**: `#f5f5f5` fill, `#191919` text, 16px / 600, radius 30px, padding 10px 16px, 40px high.
- **button-secondary**: black fill, white text, 16px / 500, 0px radius, 40px high, padding 10px 16px.
- **text-input**: white, black 14px text, 34px high, 10px left padding.
- **nav**: white, `#3a3e4a` text at 14px.
- **card**: white, 8px radius, 16px padding.
- Product tile: image, 2-line title, price in red bold, strikethrough list price in grey, star rating and "ขายแล้ว" (sold) count, red percentage badge such as "-51%".

## Design System Architecture
No public design system or brand-guideline page was found on the opened pages (the Thai home page markup contains no brand, press or design links). The site exposes a large token set as root variables: `--color-brand-*`, `--color-grey-*`, `--color-function-*`, `--color-mask-*`, `--font-size-1` through `-10` (for example `--font-size-5` 24px, `--font-size-10` 60px), `--font-lineheight-*`, `--s-*`, `--corner-*`, `--line-*`, `--icon-*` and paired `--m-*` variants for mobile (`--m-font-size-5` 12px, `--m-s-8` 16px). This paired mobile token set is the de-facto system.

## Do's and Don'ts
- Do show prices in red bold with a grey strikethrough list price.
- Do keep body text at 12px to 14px on white.
- Do use pale pink or blue panel fills for themed sections.
- Do round the primary pill to 30px.
- Don't use shadows for product tiles; use hairline borders.
- Don't treat campaign banner colors as tokens.
- Don't document the notification prompt or side rail.

## Responsive Behavior
Not measured. The extractor's mobile pass returned boxes as wide as the desktop page (a 1056px body paragraph), so no usable mobile layout was recorded. The only responsive evidence is the existence of paired `--m-*` root variables, whose use was not measured.

## Iteration Guide
1. Use white canvas, `#191919` ink, `#f00633` prices.
2. Build tiles with image, title, price row, rating and sold count.
3. Keep corners small (4px to 8px) except for pills (30px).
4. Check new values against `web/data/extracted/aliexpress.json` or the root variables.
5. Treat banners as campaign content.

## Imagery and Voice
Photography is product-first on white or lifestyle backdrops: fashion models in the category grid, kitchen and tool items on the Business band, small 3-up product rows in each deal panel. Microcopy is transactional Thai with currency symbols (฿), for example "3 ชิ้นในราคาเริ่มต้น US $2.99", "ส่งฟรี สำหรับสินค้า Choice ทุกชิ้น" and "ดูเพิ่มเติม". Badges are short: "Choice", "Verified", percentage discounts.

Section titles are centered, bold and black, such as "การช้อปตามหมวดหมู่" (shopping by category) and "อื่นๆ อีกมากมายสำหรับรายการโปรดของคุณ" (many more for your favorites), which separate the long page into clearly labeled blocks. The "AliExpress Business" band overlays white text and large figures on a dimmed photograph, the only dark block on the page.
