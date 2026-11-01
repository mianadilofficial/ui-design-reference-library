---
version: alpha
name: Thai-Denmark Milk Shop
category: "Thai Brands"
description: "Thai-Denmark Milk Shop (thaidenmark.com), the online shop for Thai-Denmark dairy products: white canvas, milk-carton red #ef1c23 pill CTAs at 35px radius, Noto Serif Thai body text, blue-tinted product tiles with 10px radius and WoodMart store patterns."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#ef1c23"
  on-primary: "#ffffff"
  red-bright: "#f01414"
  ink-muted: "#767676"
  ink-white-80: "#ffffffcc"
  ink-charcoal: "#242424"
  price-red: "#ff3a3a"
  nav-blue: "#2d5a91"
typography:
  display:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 21px
  subheading:
    fontFamily: "\"Noto Sans Thai\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22.4px
    textTransform: capitalize
  body:
    fontFamily: "\"Noto Serif Thai\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: "\"Noto Serif Thai\", Arial, Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16.8px
    textTransform: capitalize
  link:
    fontFamily: "\"Noto Serif Thai\", Arial, Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 16.8px
    textTransform: uppercase
rounded:
  xs: 5px
  sm: 6.67px
  md: 8.33px
  lg: 10px
  xl: 25px
  2xl: 35px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 7px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 15px
  s8: 18px
  s9: 20px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 5px 28px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 5px 28px
    height: 48px
  link:
    textColor: "{colors.price-red}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    padding: 82px 0px 0px
  nav-link:
    textColor: "{colors.nav-blue}"
    typography: "{typography.body}"
  text-input:
    textColor: "{colors.ink-muted}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 0px 70px 0px 20px
    height: 70px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.price-red}"
    rounded: "{rounded.lg}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
---

## Overview

thaidenmark.com is the online store "Thai-Denmark Milk Shop" (ร้านจำหน่ายผลิตภัณฑ์นมไทย-เดนมาร์ค), selling Thai-Denmark dairy products; the page title credits the producer as the Dairy Farming Promotion Organization of Thailand (องค์การส่งเสริมกิจการโคนมแห่งประเทศไทย, อ.ส.ค.). The menu has Home, Order milk products, Agro-tourism, About us and Contact us, with Login / Register, a wishlist and a cart total. A slim blue announcement bar at the top states that the products are 100 percent fresh milk from the Thai-Denmark brand, shipped straight from the factory, with a shipping fee of 75 baht per order.

The capture shows a standard e-commerce homepage with a strong brand image. A white header carries the red Thai-Denmark cow logo at left, five centred menu links (the current "หน้าแรก" in red, the others dark blue) and account links at right. A rounded full-width hero carousel holds product art (a Milky-D pouch and bottle, a sterilised-milk balloon, a farm landscape with milk splash and a 60th-anniversary mark). "ผลิตภัณฑ์แนะนำ" (recommended products) leads a four-column product grid on pale blue tiles: each tile carries the carton image, a "ไม่แต้งสี" style seal, a yellow round discount badge (for example -12%), a gray "SOLD OUT" badge, a heart wishlist icon, and a blue strip showing carton counts such as "180 36". Titles are dark; prices are red, with the original price struck through in gray. A large red headline "นมโคสดแท้ 100% ไม่ผสมนมผง" with a small gray caption above and below sits above two pill buttons: a filled red "สั่งซื้อนมไทย-เดนมาร์ค" and an outlined red "เกี่ยวกับฟาร์มโคนมไทย-เดนมาร์ค". Copy is plain, factual Thai retail language with prices in baht.

A black mourning ribbon in the top-right corner, a floating "Contact us" chat bubble and the cookie banner seen in the first capture are overlays, not brand components.

## Colors

Canvas is white (#ffffff) and body ink is #333333. The brand color is milk-carton red, `primary` #ef1c23, used for the filled CTA pills, the footer and nav highlights, with white `on-primary` text. A second measured red `red-bright` #f01414 and the coral `price-red` #ff3a3a (the measured link/price color) appear in prices and link text. Blue is the secondary hue: `nav-blue` #2d5a91 for navigation links and the announcement bar in the capture. Neutrals are `ink-muted` #767676, `ink-charcoal` #242424 and a translucent white `ink-white-80` #ffffffcc used over dark areas.

The stylesheet contains theme variables from the WoodMart WordPress theme and extension plugins (for example --bgcolor-gray-100 #f7f7f7, --color-lime #94c752, GiveWP and Events Calendar variables); these are plugin defaults rather than brand colors. The yellow discount badges and the blue tile backdrops come from product artwork and the theme and are not tokenised.

## Typography

Text uses Google Fonts in the Thai script family: `"Noto Serif Thai"` for body copy, buttons and links, `"Noto Sans Thai"` for subheadings, with IBM Plex Sans Thai and Lexend Deca also loaded. The display token is a system sans stack (-apple-system, Segoe UI, Roboto...) at 17px and weight 400, which reflects an element in the theme chrome.

Measured styles: subheading 16px at 500 with 22.4px line height and capitalised; body 16px at 400 with 25.6px line height; button 14px at 500 with 16.8px line height, capitalised; link 14px at 600, uppercase, with 16.8px line height. Titles on product tiles are set larger in the capture, but those sizes were not recorded as tokens. All faces are open Google Fonts.

## Layout

The page follows a WoodMart storefront layout: announcement bar, header, rounded hero, section heading, four-column product grid, then a centred brand statement and CTA row. The theme declares --wd-header-general-sm-h 70px and --wd-block-spacing 20px. Measured spacing values are 1, 5, 7, 10, 12, 14, 15, 18, 20 and 25px, with the nav block padded 82px at the top. The sections are stacked vertically with the section heading left-aligned above the product grid and the closing brand statement centred, so the page alternates between a dense catalogue zone and a calm, large-type message zone. Cart and wishlist totals in the header are shown in baht with item counts, and each product tile exposes quick-view, compare and wishlist actions in the markup. The text input is 70px tall with 0px 70px 0px 20px padding (a large search field).

## Elevation & Depth

The storefront is mostly flat. Product tiles are separated by pale blue backgrounds rather than shadows; the extraction recorded no box shadow on the buttons. A header with a thin edge floats over the hero, and the discount and sold-out badges overlap the tile corners. The chat bubble and mourning ribbon are fixed overlays.

## Shapes

Measured radii: 5px, 6.67px, 8.33px, 10px, 25px, 35px and a full pill. The red CTA pills use 35px; the search input uses 3 to 5px; cards use 10px, matching the rounded product tiles; the hero has softly rounded corners. The mix of tight 5px fields and generous 35px pill buttons is a defining shape contrast.

## Components

**Primary button**: red #ef1c23 fill, white 14px Noto Serif Thai at weight 500, capitalised, 35px radius, 5px 28px padding, 48px tall ("สั่งซื้อนมไทย-เดนมาร์ค"); the secondary booking CTA ("จองแพคเกจท่องเที่ยว") shares the same measurement.

**Link**: coral #ff3a3a, 14px uppercase at weight 600.

**Navigation**: white bar, red current item, #2d5a91 links at 16px body style, 82px top padding.

**Text input**: #767676 text, 5px-range radius, 70px tall, padding 0px 70px 0px 20px.

**Card**: white background, 10px radius, price-red text.

**Footer**: red #ef1c23 background with white text.

## Design System Architecture

No public design system, brand guideline or press kit is linked from the pages opened (the homepage links only to an About us page). The de-facto system is the WoodMart WooCommerce theme: root variables such as --wd-header-general-sm-h, --wd-block-spacing and --wd-title-font-weight 500 come from the theme, with variables from The Events Calendar (--tec-*) and GiveWP (--givewp-*) plugins. Fonts are Noto Serif Thai, Noto Sans Thai, IBM Plex Sans Thai and Lexend Deca; icons come from woodmart-font. Source: https://thaidenmark.com/ (homepage and stylesheet as measured by the extractor).

## Do's and Don'ts

Do use milk-carton red for CTAs and prices on a white canvas, pair it with navy-blue navigation text, show products on pale blue tiles and set copy in Noto Serif Thai. Do use pill buttons with 35px radius for primary actions and a red outline variant for secondary ones.

Don't use the cookie banner, the chat bubble or the black mourning ribbon as design elements. Don't use plugin default colors (lime, GiveWP greens). Don't add heavy shadows; the shop is flat.

## Responsive Behavior

The extraction includes a mobile pass. The stylesheet root declares --wd-header-general-sm-h 70px, a smaller-screen header height variable. Breakpoints and other mobile layout values are not measured.

## Iteration Guide

Use the frontmatter tokens only. Start with a white page and blue announcement bar, a rounded hero, a four-column grid of pale blue product tiles with red prices, then a centred red headline and two pill buttons (filled and outlined). Measure any new component on the live site, cite it, then re-run the gate.

Token reference for iteration: colors are canvas #ffffff, ink #333333, primary #ef1c23, on-primary #ffffff, red-bright #f01414, ink-muted #767676, ink-white-80 #ffffffcc, ink-charcoal #242424, price-red #ff3a3a, nav-blue #2d5a91. Radii are xs 5px, sm 6.67px, md 8.33px, lg 10px, xl 25px, 2xl 35px, pill 9999px. Spacing steps are s1 1px, s2 5px, s3 7px, s4 10px, s5 12px, s6 14px, s7 15px, s8 18px, s9 20px, s10 25px. Every value here is measured on the live site; anything not listed is not measured.
