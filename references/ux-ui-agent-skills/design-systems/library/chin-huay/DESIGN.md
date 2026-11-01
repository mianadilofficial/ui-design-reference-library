---
version: alpha
name: Chin Huay
category: "Thai Brands"
description: "Corporate site of Chin Huay Public Company Limited, a Thai canned fish, dried fruit and snack maker, in Poppins 400/600 with an 85px uppercase hero, brand magenta #ec008c, forest green #558257 outlined pill buttons, pale lime #e9f2d0 bands and heavily rounded organic shapes (15px to 97px)."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ec008c"
  on-primary: "#ffffff"
  surface-grey: "#ededed"
  green-forest: "#558257"
  green-bright: "#99bd05"
  button-primary-bg: "#ffffff33"
  footer-bg: "#e9f2d0"
typography:
  display:
    fontFamily: Poppins, "FC Minimal", sans-serif
    fontSize: 85px
    fontWeight: 600
    lineHeight: 106.25px
    textTransform: uppercase
  display-mobile:
    fontFamily: Poppins, "FC Minimal", sans-serif
    fontSize: 44px
    fontWeight: 600
    lineHeight: 55px
    textTransform: uppercase
  heading:
    fontFamily: Poppins, "FC Minimal", sans-serif
    fontSize: 31px
    fontWeight: 600
    lineHeight: 38.75px
  body:
    fontFamily: Poppins, "FC Minimal", sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  button:
    fontFamily: Poppins, "FC Minimal", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: Poppins, "FC Minimal", sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
rounded:
  sm: 15px
  md: 19px
  lg: 20px
  xl: 30px
  2xl: 36px
  3xl: 97px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 9.6px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 24px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 9.6px 16px
    height: 45px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.green-forest}"
    typography: "{typography.link}"
    rounded: "{rounded.xl}"
    padding: 9.6px 16px
    borderColor: "{colors.green-forest}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 8px 0px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 12px 20px 12px 44px
    height: 50px
  card:
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 3px 10px 0px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.primary}"
---

## Overview

The measured page is the English home page of chinhuay.com (redirected to /en/home), titled "Chin Huay". The company is Chin Huay Public Company Limited, and the page explains the name: "Chin" means prosperous or modern, "Huay" means goods or industry, a name chosen by the founding generation, and the copy says the heritage has passed down from generation to generation. The hero headline reads "Expand Control and Be Known", and the three business lines presented are Canned Fish, Dried Fruit and Snack, with sections for Chin Huay's Story, Certifications & Awards, Leadership, Social Activities and a hiring call.

The site is listed-company corporate with a consumer-friendly face. Its navigation is deep (Who We Are, What We Do, Investor Relations, Corporate Governance, News and Media, Careers, Contact Us), including investor pages such as Stock Quote, Form 56-1 One Report and SET Announcements, yet the visual language is playful and organic: a grassy hero with a wavy lime edge, photographs cropped into circles and half-capsules, a wheat-field banner with brightly colored snack packs, and cards with large rounded corners.

In the capture, a centenary promotional popup ("A Century of Timeless Legacy to the New Frontier", with a 100-year mark) and a cookie notice with an "Allow cookies" button overlay the hero. They are overlays, not brand components, and are not documented as such; the re-extraction run still saw them in the capture, so the cookie notice card values are excluded from the tokens.

## Colors

The canvas is white (#ffffff) and the text is black (#000000), the most-read color by far. The brand's pink is #ec008c: it is the footer's text color, appears in the logo mark in the header, and is published in the stylesheet root as --pink-500, alongside a darker --pink-600 to --pink-900 scale. Green is the action color: #558257 is the text and 1px border color of the outlined "Explore More" pill and the fill that appears when a round close button is hovered (rgb(85, 130, 87)). A brighter green, #99bd05, matches the root variable --green-500.

Surfaces are quiet: #ededed grey (also --grey-200), #f7f7f7 and #f7fce9 for pale blocks, and #e9f2d0, a soft lime, for the footer and the capsule shapes behind the circular photographs. A translucent white fill, #ffffff33, is the background of the white-outlined button that sits over photographs.

The stylesheet root also carries a large product-category palette (for example --grain-based-snacks-header #FAA61A, --vacuum-fried-snacks-header #EC6806, --healthy-others-header #25955D, --plant-bases-jerky-header #99BD05) and Bootstrap defaults such as --success #28a745 and --danger #dc3545. The category colors are brand-system values that tag product lines; the Bootstrap defaults are not brand colors.

## Typography

Poppins is the single typeface, loaded in weights 400 and 600, with "FC Minimal" (a Thai typeface loaded in 400 and 600) after it for Thai script. The hero h1 is 85px at weight 600 with a 106.25px line height, uppercase; on the 390px mobile measurement it is 44px with a 55px line height. Its measured fill is a horizontal gradient clipped to the text, running white to #558257 and back to white. Section headings ("Social Activities", "Stock Quote") are 31px at weight 600 with a 38.75px line height. Large card titles measured 39px with a 48.75px line height. Body is 20px with a 30px line height, centered in the intro block.

Buttons and navigation are 16px with a 24px line height at weight 400, and the outlined link variant is weight 600. Smaller footer and notice text is 14px with a 21px line height. By character count the sizes in use are 20px, 16px and 14px, followed by 31px, 25px, 39px and 85px for headlines.

## Layout

The page is 1280px wide and 5089px tall. A transparent header sits over the hero with the five main sections split around a centered logo: Who We Are, What We Do and Investor Relations on the left, News and Media, Careers and Contact Us on the right, then the language switch (EN), a divider and a search icon. The header's bottom corners are rounded (0px 0px 20px 20px).

Below the hero, the intro paragraph is a centered narrow column with decorative photographs bleeding off both sides in circles and capsule shapes. A centered "Explore More" pill follows. The business-line banner is a wide rounded image carousel with a heading, a button and pagination dots. A row of three cards follows (a wide story card and two narrower ones), then a two-column row for Social Activities and hiring. The theme declares a hybrid-column-space of 15px and Bootstrap breakpoints at 768px, 992px, 1200px and a custom 1640px xxl.

## Elevation & Depth

Elevation is soft and light. Cards such as "Chin Huay's Story" carry rgba(0, 0, 0, 0.1) 0px 3px 10px 0px, which accounts for ten measured elements, a single 10% black shadow with no spread. A larger rgba(0, 0, 0, 0.1) 0px 6px 30px 0px belongs to the cookie notice and is not declared. Depth otherwise comes from layered image shapes, a 20% white translucent button over photography, and a wavy lime-green edge dividing the hero from the white content area. Overlays add a dark scrim over the page while they are open.

## Shapes

Shape is the signature. The measured radii are 15px (thirteen elements, the cards and banners), 30px (eleven, the pill buttons), 50% (nine, round buttons and circular photographs), 19px, 20px, 36px and one 10px, along with asymmetric radii such as 0px 97px 97px 0px for the capsule behind a circular photo and 0px 0px 20px 20px on the header. The tokens keep 15, 19, 20, 30, 36 and 97px plus a full pill. Photographs are cropped into circles and capsules and sit partly off-canvas, and the hero ends in an organic wave rather than a straight line. The only square element measured is the text input (0px radius).

## Components

Primary button: a 45px-high pill (30px radius) with 9.6px by 16px padding, white 16px text and a 1px white border over a translucent #ffffff33 fill, used on top of photographs ("Explore More" on the snack banner). Outlined link button: the same pill geometry with 600-weight #558257 text and a 1px #558257 border on white, as in the intro block's "Explore More".

Navigation: 16px black text with 8px vertical padding, a language switch with a chevron and a search icon. Card: a rounded 15px image tile with white text on the photo and the 3px 10px soft shadow; the Certifications tile is solid green, and Leadership is a pale tile with a portrait and an arrow. Text input: 50px high, 12px 20px 12px 44px padding (space for a leading search icon), black text. Footer: #e9f2d0 background, upper-case 14px weight-600 text in the brand pink with the company name and a Thakham Road address. The cookie notice, its "Allow cookies" pill and the centenary popup with its round close button are overlays, not brand components.

## Design System Architecture

No public design system or brand-guideline was found on the pages opened; the site links to corporate, investor and news sections only. The de-facto system is a Bootstrap-based stylesheet with custom properties for a numbered palette (pink-400 to pink-900, green-200 to green-900, brown, orange, gold, yellow, blue) plus semantic names per product family (for example --plant-bases-jerky-header and --plant-bases-jerky-body, --healthy-trail-mix-body, --sumaco-yellow). The numbered-scale approach lets each brand line take a header and a body tone from a shared palette. Icons use Font Awesome 6 Pro (thin, light, regular, duotone) and an icomoon set; carousels use Swiper (its --swiper-theme-color #007aff is a library default). The tokens in this file are the computed values measured on the live page.

## Do's and Don'ts

Do use #ec008c for the logo and footer text, #558257 for outlined buttons and hover fills, and pale lime #e9f2d0 for supporting shapes. Do crop photography into circles and capsules, let shapes bleed off the edge, and end hero imagery in a soft wave. Do keep Poppins 600 for headlines and 400 for body, and set the hero in uppercase.

Don't use Bootstrap success green or Swiper blue. Don't place square corners on buttons or cards; stay at 15px or above, and 30px for buttons. Don't use heavy shadows; keep to 10% black with a small offset. Don't treat the cookie notice or the anniversary popup as brand UI. Don't mix the per-product-line palette colors into corporate chrome.

## Responsive Behavior

The extractor measured a 390px viewport: the h1 falls from 85px to 44px (line height 106.25px to 55px) at the same weight 600 and uppercase treatment. The theme includes Bootstrap's 768px, 992px and 1200px breakpoints and an extra 1640px xxl breakpoint, so the header's split menu and the three-card row are built on a responsive grid. How the deep navigation collapses was not captured, so it is not described.

## Iteration Guide

Start with white, black text and Poppins. Use the brand pink only for identity moments (logo, footer text) and the green #558257 for action. Build buttons as 30px-radius pills at 45px height: translucent white with a white border over imagery, or green-outlined on white. Group pictures into circles and half-capsules with #e9f2d0 backing shapes. Keep cards at 15px radius with the 3px 10px 10% shadow and white headline text on photography. Set the hero in 85px uppercase Poppins 600 (44px on mobile). When adding product-line tiles, draw header and body tones from the root palette's named variables rather than inventing colors, and measure anything new before declaring it.
