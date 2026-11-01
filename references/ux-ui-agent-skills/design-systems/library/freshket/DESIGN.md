---
version: alpha
name: "Freshket (เฟรชเก็ต)"
category: "Thai Brands"
description: "Freshket (freshket.co, เฟรชเก็ต) is a Thai B2B fresh-food ordering marketplace for restaurants: white canvas, brand green #008065, sale red #de1b1b, Noto Sans Thai at 10px to 16px, 8px-radius cards and a 32px green \"สมัครสมาชิก\" button with a soft blue-grey shadow."
colors:
  canvas: "#ffffff"
  ink: "#6c757d"
  primary: "#008065"
  sale-red: "#de1b1b"
  green-hover: "#006650"
  green-soft: "#4ab093"
  surface-muted: "#f8f9fa"
  on-primary: "#ffffff"
  sale-red-dark: "#c02020"
  ink-strong: "#212529"
  ink-black: "#000000"
  hairline: "#ff6600"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  subheading:
    fontFamily: "\"Noto Sans Thai\""
    fontSize: 10px
    fontWeight: 400
    lineHeight: 16.6px
  body:
    fontFamily: "\"Noto Sans Thai\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: "\"Noto Sans Thai\""
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
    textTransform: capitalize
rounded:
  xs: 6px
  sm: 8px
  md: 10px
  lg: 16px
  xl: 40px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 1.2px
  s3: 2px
  s4: 4px
  s5: 6px
  s6: 8px
  s7: 12px
  s8: 16px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 6px 24px
    height: 32px
    boxShadow: rgba(122, 172, 193, 0.16) 0px 12px 30px 0px
  button-primary-hover:
    backgroundColor: "{colors.green-hover}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
    boxShadow: rgba(122, 172, 193, 0.16) 0px 4px 24px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.ink-black}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 6px 0px 7px
    height: 32px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 4px
---

# Freshket (เฟรชเก็ต)

Measured from https://freshket.co/business (queued as https://www.freshket.co/; page title "เฟรชเก็ต - สดจริง ส่งไว ใส่ใจร้านอาหาร", lang th). The page is a dense e-commerce home of 10083px: header with search, category icon rail, promotional banners, product carousels and a footer. The extractor measured the Thai-language page; an English toggle ("Eng") is visible in the header.

## Overview

The header holds the green "freshket" wordmark with an orange-outlined Thai line "ราคาตลาดวัน" under it, the links "สั่งของเข้าร้าน" and "เกี่ยวกับเรา", a language switch "ไทย | Eng", a wide search field with the placeholder "ค้นหาด้วยชื่อสินค้า, รหัสสินค้า", a cart icon with count 0, "เข้าสู่ระบบ" and the green "สมัครสมาชิก" button. Below it: the line "เฟรชเก็ตรับจบ ครบทุกวัตถุดิบ", a rail of category tiles with small red discount tags (for example "ลดสูงสุด 60%" for fruit and vegetables, "ปรับราคาลง" tags), a large editorial banner "Avo-Culture รวมวัตถุดิบ สำหรับทุกเมนูบรันช์" with dates, a salmon-to-orange promotion area of product cards, a "สินค้าแนะนำสำหรับคุณ" shelf with a "ดูทั้งหมด" link, a photographic banner of staff in green uniforms holding crates of vegetables, and a festival promotion row.

The page title tagline is "สดจริง ส่งไว ใส่ใจร้านอาหาร" ("truly fresh, fast delivery, caring for restaurants"). Product cards show Thai product names with pack size, a red "SAVE ฿..." badge, a bold price and a struck-through old price. The voice is practical and promotional, addressed to restaurant buyers.

## Colors

Measured background areas: white #ffffff (6820), dark red #c02020 (230), green #008065 (187), light green #4ab093 (89), red #de1b1b (80) and light grey #f8f9fa (58). Text colors by characters: grey #6c757d (3751), near-black #212529 (1736), white #ffffff (1367), red #de1b1b (324), black #000000 (147) and green #008065 (54). The root variables are Swiper carousel defaults (`--swiper-theme-color` #007aff, `--swiper-navigation-size` 44px) and are not brand colors.

- **canvas #ffffff**; **surface-muted #f8f9fa**.
- **primary #008065**: the brand green. It fills the "สมัครสมาชิก" button, colors the header link text and the wordmark, and is the text color of the root element. On hover the button fill is #006650 (**green-hover**, measured). **green-soft #4ab093** is the light green of the cookie notice strip.
- **sale-red #de1b1b** and **sale-red-dark #c02020**: sale badges, discount tags and the red "ดูทั้งหมด" chip that the extractor read as the first call to action.
- **ink #6c757d**: the most-read text color (secondary grey for product names); **ink-strong #212529** for headings and prices; **ink-black #000000** in the search input.
- **hairline #ff6600**: a measured orange border color.

The generated set had assigned `primary` to the red #de1b1b because the red chip was the first detected button. The green sign-up button is the measured brand action, it is in the extraction's CTA candidates (index 1), and `_roleOverrides.ctaPrimary` in SOURCES.json records that choice. The extractor's navigation link color #0000ee is the browser default link color and is dropped.

## Typography

Fonts loaded: Noto Sans Thai (400, 500, 600, 700) and Prompt (400, 500, 700). By characters: Noto Sans Thai 7290, Prompt 89, Arial 8. Both are open-source Google fonts that include Thai glyphs.

- **display** (the h1 candidate "สั่งของเข้าร้าน"): Noto Sans Thai 14px, weight 400, line-height 20px.
- **subheading** (product names in cards): Noto Sans Thai 10px, weight 400, line-height 16.6px.
- **body**: Noto Sans Thai 16px, weight 400, line-height 20px.
- **button**: Noto Sans Thai 14px, weight 700, line-height 20px, capitalize.

Size frequencies by characters: 10px (3480), 14px (1969), 11px (727), 12px (532), 16px (338), 18px (128), 20px (106), 9px (77), 24px (9). The page is small-type and information-dense: the dominant size is 10px for product names and pack sizes. Letter-spacing is "normal" at every measured role. The page has no h2; section titles are bold Thai text in the shelf headers.

## Layout

Content is a single full-width column with 1280px-wide bands in the measurement window: a 104px-high header, a category rail, banners with arrow controls, and carousel shelves of product cards. Shelves sit in white rounded containers on the page. Spacing tokens measured: 1px, 1.2px, 2px, 4px, 6px, 8px, 12px, 16px, 24px and 32px. Product cards use 4px padding. The carousel library Swiper drives the rails (its variables are in the root).

## Elevation & Depth

Shadows are soft and blue-grey: rgba(122, 172, 193, 0.16) 0px 12px 30px 0px (39 uses, on the sign-up button and elevated cards), rgba(122, 172, 193, 0.16) 0px 4px 24px 0px (38 uses, the header), rgba(110, 116, 128, 0.24) 0px 2px 6px 0px (10), rgba(255, 0, 0, 0.24) 0px 1px 4px 0px (8, the red badges) and rgba(0, 0, 0, 0.15) 0px 4px 12px 0px (1). On hover the sign-up button's shadow changes to rgba(0, 0, 0, 0.31) 0px 0px 1px 0px, rgba(0, 0, 0, 0.25) 0px 3px 4px -2px.

## Shapes

Radii measured: 10px (109, inputs and tiles), "0px 0px 20px" (93), 8px (79, cards and the button), 16px (18), "0px 0px 10px 10px" (14), 50% (11), 6px (10), "50% 0px 0px 50%" (8), "8px 8px 0px 0px" (7), "0px 50% 50% 0px" (2) and 40px (2). The sign-up button is 8px, the search input 10px, product cards 8px, and category tiles are rounded squares.

## Components

- **button-primary**: "สมัครสมาชิก", fill #008065, text #ffffff, Noto Sans Thai 14px/700, padding 6px 24px, height 32px, width 122px, radius 8px, shadow rgba(122, 172, 193, 0.16) 0px 12px 30px 0px; hover fill #006650.
- **nav**: white header, 104px high, shadow rgba(122, 172, 193, 0.16) 0px 4px 24px 0px, text #008065.
- **text-input**: the search field, text #000000, Noto Sans Thai 16px, radius 10px, padding 6px 0px 7px, height 32px, width 674px.
- **card**: white, 8px radius, 4px padding, grey #6c757d name, green price accent (child colors #008065 and #6c757d), a red "SAVE ฿8" badge and the price.
- **discount tag**: small red label on category tiles and cards.

A cookie notice with a green "ตกลง" button (6px radius) was captured and is not documented as brand UI.

## Design System Architecture

No public design system or brand guideline is linked on the opened page; its only link is the logo. The de-facto system is utility-class CSS with Swiper defaults in the root and fonts Noto Sans Thai and Prompt. Source page: https://www.freshket.co/ (opened) and the measured final URL https://freshket.co/business.

## Do's and Don'ts

- Do keep the page white with green #008065 actions and red #de1b1b only for price and discount signals.
- Do set Thai text in Noto Sans Thai at 10px to 16px with generous line-height (16.6px at 10px, 20px at 14px and 16px).
- Do use 8px-radius cards and soft blue-grey shadows.
- Do show weight, pack size, saving and price on every product card.
- Don't use the browser link blue #0000ee or Swiper's #007aff as brand colors.
- Don't document the cookie notice or the live-chat avatar as brand components.

## Responsive Behavior

The mobile pass recorded: the "ดูทั้งหมด" link at 14px, the copyright line at 16px, and the header text at 12px with weight 700 and capitalize. Mobile size frequencies: 10px (3480 characters), 14px (1914), 11px (727), 12px (555), 16px (338), 18px (128), 20px (106), 9px (77). Menu behavior, column counts and breakpoints were not measured.

## Iteration Guide

1. White canvas, ink #6c757d, brand green #008065.
2. Noto Sans Thai: 10px product names, 14px labels and buttons, 16px body.
3. Buttons: 32px high, 8px radius, 6px 24px padding, green fill with a #006650 hover.
4. Sale signals in #de1b1b with a "SAVE ฿" badge.
5. Product cards: 8px radius, 4px padding, white.
6. Write Thai first; keep an "Eng" toggle in the header.
