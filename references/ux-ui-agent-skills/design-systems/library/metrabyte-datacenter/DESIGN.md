---
version: alpha
name: Metrabyte Cloud (เมทราไบต์ คลาวด์)
category: "Thai Brands"
description: "Metrabyte Cloud (metrabyte.cloud), a Thai VPS and hosting provider: white canvas, brand red #e82331 pill CTAs with a 10px offset shadow, #202736 navy footer, skv Thai-Latin type at 16px body and 36px display, 50px pills and red speech-bubble cards."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#e82331"
  on-primary: "#ffffff"
  surface-navy: "#202736"
  red-card: "#ea2030"
  ink-grey-1: "#b4aeae"
  ink-grey-2: "#adadad"
  ink-grey-3: "#b7b7b7"
  ink-slate: "#54595f"
  hairline: "#333333"
  button-secondary-bg: "#e13939"
typography:
  display:
    fontFamily: skv, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 36px
  display-mobile:
    fontFamily: skv, sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 32px
  subheading:
    fontFamily: skv, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 20px
  body:
    fontFamily: skv, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: skv, sans-serif
    fontSize: 26px
    fontWeight: 600
    lineHeight: 26px
  button-secondary:
    fontFamily: skv, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 15px
rounded:
  xs: 1px
  sm: 5px
  md: 20px
  lg: 30px
  xl: 35px
  2xl: 45px
  3xl: 50px
  4xl: 80px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 7.2px
  s4: 10px
  s5: 12px
  s6: 13px
  s7: 14.4px
  s8: 15px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 20px 40px 15px
    height: 64px
    boxShadow: rgba(0, 0, 0, 0.29) -10px 10px 10px 0px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xl}"
    padding: 12px 24px
    height: 41px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    padding: 10px
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.canvas}"
---

# Metrabyte Cloud (เมทราไบต์ คลาวด์)

Measured from https://metrabyte.cloud/ (final URL identical; title "Metrabyte CLoud Cloud VPS & Cloud Hosting บน Cloud Server แท้"), 1280px desktop pass (page height 6,457px) and 390px mobile pass. The operator is บริษัท เมทราไบต์ คลาวด์ จำกัด (Metrabyte Cloud Co., Ltd.), a Thai web-hosting, VPS and server provider. The site is a WordPress build assembled with Elementor (193 `wp-content` references and 171 `elementor-element` classes in the home HTML).

## Overview

Loud, promotional and red. A black utility bar carries the company name, a phone number (02-0263-124), a support email and a LINE handle. Below it, a white masthead has the red cloud logo, a long dropdown nav (Home, Cloud Package, Cloud VPS, Server, Email, Service, payment notice, Blog, Info) and a dark-red "Login" button. The hero is a poster: huge black "NEXT MCLOUD" lettering between two red circles, "INFRASTRUCTURE AS A SERVICE (IaaS)" in red, a black ribbon label with "พร้อมให้บริการแล้ววันนี้!" (ready to serve today!), a promo line with a coupon chip "กรอกโค้ด : NextMcloud รับฟรีเครดิต 200.-" and a big red pill CTA "ไปที่ Next Mcloud →". Black and red circle shapes bleed off the edges. A row of red map-pin badges shows domain prices (.com 450, .net 480, .org 500, .in.th 400, .co.th 800, .go.th 800 baht per year) on a black timeline. A fraud-warning strip with a "ดูเพิ่มเติม" button runs across the page. Next come a domain-search pill ("ตรวจสอบว่าโดเมนที่คุณต้องการ ยังว่างอยู่หรือไม่"), "Our Services" with six white speech-bubble cards on red (Cloud Email, Cloud Hosting, Cloud VPS, Cloud VPS Forex, Dedicated Server, Co-Location), and "Why Choose Us" with red capsule feature rows (Credible, Support 24/7, Most Popular, Copyright).

## Colors

- **Canvas `#ffffff`** (area 1,411); ink `#000000` (1,786 characters).
- **Primary `#e82331`**: brand red, the fill of the hero CTA, the domain-search pill and the capsule rows (375 area); "Our Services" and "Why Choose Us" headings are also in this red. White text `#ffffff` (1,006 characters) sits on it.
- **Red card `#ea2030`** (483 area, nearly the same red as primary; used for the speech-bubble frames with an inset glow `rgb(234, 32, 48) 0px 0px 100px -30px inset`).
- **Secondary red `#e13939`** (105): the "ABOUT US" button.
- **Navy `#202736`** (644 area): the footer and dark blocks.
- **Greys:** `#b4aeae` (230), `#adadad` (71), `#b7b7b7` (49), slate `#54595f` (47); hairline `#333333`.
- **Body color `#cc3366`** (38 characters, the body element's own color), and a one-off `#25c32b` green (weight 1).
WordPress editor presets (`--wp--preset--color--vivid-cyan-blue`, `vivid-purple`, `pale-pink` and others) are defaults and are not brand colors.

## Typography

One family: **skv** (400 loaded; 3,281 characters), with `sans-serif` fallback. It sets Thai and Latin text alike. Icon fonts are loaded too (eicons, Font Awesome 5, elementskit). A Thai-capable sans such as Noto Sans Thai or Prompt can stand in.

Scale: display 36px/36px weight 400 (the domain headline; 32px weight 600 on mobile), a 42px size (143 characters, the large price figure), subheading 20px/20px weight 600 (card titles), body 16px/24px weight 400 (1,753 characters), 14px and 15px small, 18px, button 26px/26px weight 600, secondary button 15px/15px weight 400. Weights: 400 (2,395), 600 (767), 500 (109), 700 (10).

## Layout

WordPress global settings: wide size 1200px and block gap 24px. Measured paddings: 10px (86 uses), 13px, 20px, 50px, 15px, 60px; gaps 20px (39), 5px (16), 25px, 10px. Content is centered with section headings in the middle; cards sit in a three-column grid of two rows. Decorative circles overflow the margins in the hero.

## Elevation & Depth

Depth is theatrical. Measured shadows: `rgb(234, 32, 48) 0px 0px 100px -30px inset` (4, the red glow inside cards), `rgba(0, 0, 0, 0.15) 0px 0px 10px 0px` (3), `rgba(0, 0, 0, 0.29) -10px 10px 10px 0px` (2, the hard offset shadow under the primary CTA), and `rgba(0, 0, 0, 0.2) 2px 8px 23px 3px`. White cards have a pointed tail below them, giving a speech-bubble silhouette.

## Shapes

Radii measured: `50%` (16, the round price badges and icon circles), `100px` (8, capsule feature rows), `1px` (5), `80px` (4), `20px` (3), `999px` (3), `5px` (3). Buttons: primary 50px, secondary 35px. Tokens run from 1px to 80px plus `pill`; the CTA token is `3xl` 50px.

## Components

- **Primary button:** `#e82331` fill, white skv 26px weight 600, padding `20px 40px 15px`, height 64px, radius 50px, shadow `rgba(0, 0, 0, 0.29) -10px 10px 10px 0px`; label "ไปที่ Next Mcloud" with an arrow.
- **Secondary button:** `#e13939`, white 15px, padding `12px 24px`, height 41px, radius 35px ("ABOUT US").
- **Domain-search pill:** `#e82331` fill, white 16px weight 600 text with a magnifier.
- **Capsule feature row:** `#e82331` fill, 100px radius, 2px `#333333` border, 10px padding, 610px by 170px; a circled icon, a vertical divider, a white 24px weight-600 title and 14px copy, with a black outer ring.
- **Service card:** white speech-bubble on a red frame, icon, 20px bold title, grey description.
- **Login button:** dark red with a user icon.
- **Notice bar:** white strip with a red "ดูเพิ่มเติม" pill and a close box.
- **Footer:** `#202736`-based, white 15px weight 500, "24/7 Customer Support" and email.

## Content and Voice

Copy mixes Thai with English product names. The nav is an inventory of the business: Cloud Package (Cloud Hosting WordPress, Windows, Linux, Cloud Backup), Cloud VPS (Windows SSD, Linux SSD, Forex, Forex Singapore), Server (Dedicated, Streaming Server, Colocation, second-hand servers, server hire-purchase), Email (Google Workspace, Office 365, Zoho Mail), and Service (website building, sales pages, SEO, Google Ads, domain registration, SSL certificates, OpenStack consulting). Promotional lines are short and price-led: "จดโดเมนวันนี้เพียง 450 บาท/ปี" with "จดโดเมนในนามลูกค้า 100% มีบริการ Support 24 ช.ม." beneath it. Feature rows use one English word and one Thai sentence: CREDIBLE, SUPPORT 24/7, MOST POPULAR, COPYRIGHT, with claims such as more than 10 years of operation and Windows licensing sold with rights.

## Design System Architecture

No public design system or brand guideline exists for this site; the home page (https://metrabyte.cloud/) was opened and only links to its own services and a /wordpress/ landing page. The de-facto system is Elementor on WordPress: the :root holds `--wp--preset--*` presets (font sizes 13px and 36px, `--wp--style--global--wide-size: 1200px`, `--wp--style--block-gap: 24px`), Swiper navigation (`--swiper-navigation-size: 44px`) and icon fonts. Brand color is applied directly in Elementor widget styles, not through named variables.

## Do's and Don'ts

- Do use `#e82331` for every action and heading accent; pair it with black and white only.
- Do use pill buttons with a 10px hard offset shadow for the main call to action.
- Do use large red circles and black shapes bleeding off the edges as decoration.
- Do present prices as circular red badges with the figure at 42px.
- Don't use the WordPress preset blues and purples.
- Don't flatten the speech-bubble cards; the tail and inset glow are part of the look.
- Don't use thin radii on buttons; the smallest measured button radius is 35px.

## Responsive Behavior

Measured at 390px: the "Our Services" heading is 32px/32px weight 600 in `#e82331` (desktop 36px weight 400 for the domain headline), and the mobile CTA role is the domain-search link at 16px/24px weight 600, white on `#e82331`. Column counts and the dropdown nav's mobile form were not measured (the HTML contains separate "MENU" and "Login" items twice).

## Iteration Guide

1. White canvas, black ink, one red `#e82331`, navy `#202736` footer.
2. Pill CTA: 64px tall, 50px radius, 26px/600, offset shadow.
3. Speech-bubble cards on red frames with an inset red glow.
4. Large round price badges (50% radius) on a black timeline.
5. Run `node web/scripts/verify-designs.mjs --slug=metrabyte-datacenter`.
