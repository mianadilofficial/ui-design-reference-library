---
version: alpha
name: Amarin Books
category: "Thai Brands"
description: "Online bookstore of the Amarin publishing group in chuanpim-x type (13.6 to 25.6px, uppercase headings), on white with #334862 slate ink, #149f8e teal as the brand and action color, square 0px buttons, a #ffffffe6 frosted header and #777777 footer text, built on a Flatsome WooCommerce theme."
colors:
  canvas: "#ffffff"
  ink: "#334862"
  primary: "#149f8e"
  on-primary: "#f1f1f1"
  ink-grey: "#777777"
  ink-black: "#111111"
  ink-ghost: "#ffffff80"
  ink-dark: "#333333"
  nav-bg: "#ffffffe6"
  nav-text: "#ffffffcc"
typography:
  display:
    fontFamily: chuanpim-x
    fontSize: 25.6px
    fontWeight: 700
    lineHeight: 33.28px
    textTransform: uppercase
  nav-label:
    fontFamily: chuanpim-x
    fontSize: 22px
    fontWeight: 700
    lineHeight: 16px
    letterSpacing: 0.44px
    textTransform: uppercase
  display-mobile:
    fontFamily: chuanpim-x
    fontSize: 22px
    fontWeight: 400
    lineHeight: 22px
  heading:
    fontFamily: chuanpim-x
    fontSize: 25.6px
    fontWeight: 700
    lineHeight: 33.28px
    textTransform: uppercase
  subheading:
    fontFamily: chuanpim-x
    fontSize: 20px
    fontWeight: 700
    lineHeight: 32px
  body:
    fontFamily: chuanpim-x
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: chuanpim-x
    fontSize: 13.6px
    fontWeight: 700
    lineHeight: 21.76px
    textTransform: uppercase
  nav:
    fontFamily: chuanpim-x
    fontSize: 19.2px
    fontWeight: 400
    lineHeight: 30.72px
  link:
    fontFamily: chuanpim-x
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
rounded:
  xs: 3px
  sm: 5px
  md: 10px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 5px
  s4: 5.44px
  s5: 7.19px
  s6: 7.5px
  s7: 7.68px
  s8: 10px
  s9: 10.08px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 5.44px 0px 6.8px
    height: 34px
  link:
    textColor: "{colors.ink-black}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.nav-text}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.nav-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 5px 0px
  footer:
    textColor: "{colors.ink-grey}"
    rounded: "{rounded.none}"
---

## Overview

The measured page is the home page of amarinbooks.com, titled "Amarinbooks.com | ร้านหนังสือออนไลน์ในเครืออมรินทร์" ("online bookstore of the Amarin group"). It sells books from imprints of the Amarin group: the navigation lists publisher families (Entertainment, Literature, Non-Fiction, Kids, with imprints such as Amarin How-To, Prism, Piccolo, Sophia, Steps, Springbooks and Amarin Kids), book categories (literature, translated Japanese and Korean fiction, romance, psychology and self-development, business, travel, history, food and health, lifestyle, home and garden, children's books), E-books, a payment-notification page, an order-status page and "NAK Scoops".

The first screen is a utility strip in teal with account and order links, a white header with the stacked "AMARIN BOOKS" logo, a cart readout ("CART / ฿ 0.00") in a square outlined counter, and a center menu of bold Thai labels with chevrons. A large promotional slider follows, here a hot-pink "Money Monster" book campaign with a ring of pagination dots. Below it, a "หนังสือใหม่" (new books) section shows a carousel of book covers with Thai-and-English titles, baht prices and a teal outlined "ADD TO CART" button under each, then a wide "see more" bar and a second full-width campaign banner.

The look is a utilitarian WooCommerce storefront (the markup carries "No products in the cart", wishlist and Quick View controls) with the publisher's book art and banners providing the color. A cookie notice bar with two blue buttons overlays the hero in the capture; it is a consent control and not brand UI, and its blue (#3860be) was excluded from the tokens after re-extraction.

## Colors

White (#ffffff) is the canvas and slate navy #334862 is the reading color: it is both the body text color and the theme's link color, and the most-read text color on the page by a wide margin. Teal #149f8e is the brand and action color: it is published in the stylesheet root as --primary-color and --fs-color-primary and --fs-color-secondary, fills the top utility strip and the Quick View buttons, and is the text and 2px border color of the "ADD TO CART" outlined button and of the "see more" bar. Text on teal is #f1f1f1.

Neutrals are #111111 for links and titles, #333333 for dark labels, #555555 for the section heading, #777777 for footer text and a #777777 footer band, plus #ffffff80 and #ffffffcc for semi-transparent text on dark. The header is a frosted white, #ffffffe6. Light page areas tint to #00000008, an almost-invisible 3% black wash.

The theme root defines many button variables (for example --color-add-to-cart-background #333333 with hover #4F4F4F, social-share colors such as Facebook #39599E and WhatsApp #00A901, and --fs-color-alert #b20000), and WooCommerce purple #720eec. These are theme defaults for components or states not visible in the measured design, so they are not declared as brand colors; the measured add-to-cart button is teal outline, not the theme's charcoal default.

## Typography

One typeface, chuanpim-x, carries all text, with no fallback listed in the measured values; it is a Thai text face loaded as a web font. Sizes are small and compact: 22px accounts for the most characters (book titles and menu labels), followed by 18px, 20px, 13.6px, 12.8px, 14px and 16px. The home page's body baseline is 16px with a 25.6px line height. Section headings, such as "หนังสือใหม่" (the first h2), are 25.6px at weight 700 with a 33.28px line height and uppercase transformation, in #555555.

Main menu labels are 22px at weight 700 with 0.44px letter spacing, while top-strip links and secondary navigation are 19.2px at weight 400 with a 30.72px line height. Buttons are 13.6px at weight 700, uppercase; the outlined "ADD TO CART" is 20px at weight 700 with a 36px line height and 0.6px tracking. The first heading the extractor found is the menu item "สำนักพิมพ์" (publishers), so the display token here uses the h2 values and keeps the menu label separately as nav-label.

## Layout

The page is 1280px wide and 8423px tall. The header is stacked: a thin teal strip of utility links, a white logo-and-cart row with search at the far left, and a centered menu row. The root declares a sticky header height of 125px (--flatsome--header--sticky-height). Content sits in an inner column of about 1190px, which is the measured width of the heading and the home banner link.

The sections are: a full-width promotional slider, a ruled section title centered in a small outlined tab ("หนังสือใหม่"), a five-up product carousel with pagination dots, a full-width see-more bar and further banners. Each product item stacks cover, title (centered, two lines), price and a button. Spacing values in the tokens are small steps (2, 3, 5, 7.5, 10 and 15px), with larger gaps between sections from padding.

## Elevation & Depth

Elevation is minimal. Two small shadow stacks are measured: rgba(0, 0, 0, 0.16) 0px 3px 6px -4px together with rgba(0, 0, 0, 0.23) 0px 3px 6px 0px on seven elements (book covers and controls), and a rgba(0, 0, 0, 0.25) 0px 2px 5px 0px on one. The header is a 90% white veil that lets the page show faintly through it when it sticks. The "see more" bar has a rounded outline and a soft shadow under it in the capture. No layered cards or heavy depth are present; the banners provide visual weight.

## Shapes

Radii are mixed. Fully round (999px) is the most common, on ninety-four elements (the carousel pagination dots, round icon buttons and some tabs); 3px appears on forty-five (small buttons and tags), 50% and 100% on twenty-seven (circular icons and avatars), 10px on seven and 5px on two. The theme also declares --rounded-corners-radius: 16px and --add-to-cart-rounded-corners-radius: 16px, though the measured outlined add-to-cart button has a 0px radius. The primary measured buttons and the nav are square. Book covers are rectangular, and the "see more" bar is a wide, softly rounded outline.

## Components

Primary button (Quick View): 34px high, #149f8e fill, #f1f1f1 13.6px bold uppercase text, square corners, 5.44px top and 6.8px bottom padding; on hover its text turns white and its border white. Outlined button (Add to cart): 40px high, 24px horizontal padding, 2px #149f8e border, teal 20px bold uppercase text with 0.6px tracking and square corners.

Header: a #ffffffe6 frosted bar with bold Thai menu labels and chevrons for dropdown groups, a cart counter in a square outline (the count is 0 in the capture) and a search icon at the far left. Utility strip: teal bar with 19.2px light links separated by thin vertical rules and "Login" at the right. Slider: full-width promotional image with round pagination dots below. Product tile: cover, title, baht price, outlined add button. Section tab: a small outlined box centered on a thin horizontal rule. Footer: a TAGS block in #777777 22px uppercase text with 1.1px tracking, and light grey links. The cookie notice with its blue "ยอมรับ" and "ไม่ยอมรับ" buttons is an overlay, not a brand component.

## Design System Architecture

No public design system or brand guideline was found on the pages opened; the visible navigation covers imprints, categories and order services only. The system is a Flatsome WordPress theme (variables prefixed --fs- and --flatsome-) with WooCommerce: --fs-color-primary and --fs-color-secondary both #149f8e, --fs-color-success #7a9c59, --fs-color-alert #b20000, --fs-experimental-link-color #334862 (hover #111), --color-headers-background #F4F4F4, and numerous --color-button-style-* variables. Icons come from the theme's fl-icons font. Brand identity is therefore set in the theme options (one teal, one slate link color), and the home page's banners are authored as images. This file records the computed values measured on the live page and the theme variables that match them.

## Do's and Don'ts

Do use teal #149f8e for the utility strip, filled Quick View buttons and the outlined add-to-cart and see-more controls. Do set reading text and links in slate #334862, headings in #555555 uppercase, and keep type compact (13.6px to 25.6px) in chuanpim-x. Do keep controls square and outlined with a 2px border, and let publisher artwork supply the color.

Don't use the theme's charcoal button defaults (#333333 with #4F4F4F hover) for primary actions. Don't use the cookie bar's blue (#3860be) as a brand color. Don't introduce WooCommerce purple. Don't add heavy shadows or round the primary buttons. Don't remove the baht price from beside the title; each product carries both.

## Responsive Behavior

A 390px mobile measurement exists. Its first measured link shows a 22px title in weight 400 (instead of the desktop menu label in weight 700), "The Secret of Secrets ความลับแห่งความลับ", and the extractor gave display-mobile as 22px with a 22px line height. The theme defines a sticky header height of 125px, and the carousel and slider are built for swiping, but how the menu and category groups collapse at phone width was not captured, so the stacking behavior is not described.

## Iteration Guide

Start with a white page, slate #334862 text and chuanpim-x. Use teal #149f8e only for actions and the utility strip: a 34px filled button with #f1f1f1 13.6px bold uppercase text, and a 40px outlined one with a 2px teal border. Set section headings at 25.6px weight 700 uppercase in #555555 and menu labels at 22px weight 700. Keep the header a 90% white veil, with a thin teal strip above it. Present each book as cover, two-line title, baht price and an outlined add-to-cart button, in a five-up carousel with round dots. Let banners from the publishers' campaigns supply the saturated color, and keep Thai and English titles in the same face. Capture new pages with consent bars dismissed, and measure each component before adding a token.
