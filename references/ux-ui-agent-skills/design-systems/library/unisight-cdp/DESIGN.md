---
version: alpha
name: UniSight
category: "Thai Brands"
description: "UniSight CDP (unisight.asia) home page measured live: IBM Plex Sans Thai in regular, semi-bold and bold at up to 68px, black #000000 pill buttons (50px radius, 42px tall), a LINE-green #06c755 add-friend button, mint #2beaa4 cards with 24px radius, and a mint-to-blue gradient call-to-action band on white."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-2: "#2beaa4"
  ink-3: "#111111"
  ink-4: "#5d5d5d"
  ink-5: "#a3a3a3"
  ink-6: "#555858"
  button-secondary-bg: "#06c755"
typography:
  display:
    fontFamily: "\"IBM Plex Sans Thai Bold\", sans-serif"
    fontSize: 68px
    fontWeight: 700
    lineHeight: 81.6px
  display-mobile:
    fontFamily: "\"IBM Plex Sans Thai Bold\", sans-serif"
    fontSize: 48px
    fontWeight: 300
    lineHeight: 60px
  heading:
    fontFamily: "\"IBM Plex Sans Thai Bold\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 33px
  subheading:
    fontFamily: "\"IBM Plex Sans Thai Semi-Bold\", sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 45px
  body:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: "\"IBM Plex Sans Thai Semi-Bold\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: "\"IBM Plex Sans Thai Semi-Bold\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  button-secondary:
    fontFamily: "\"IBM Plex Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 8px
  md: 12px
  lg: 18px
  xl: 20px
  2xl: 24px
  3xl: 30px
  4xl: 40px
  cta: 50px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 18px
  s8: 20px
  s9: 24px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 10px 20px
    height: 42px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.4xl}"
    padding: 10px 15px
    height: 35px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 0px 32px
  nav:
    textColor: "{colors.ink}"
  card:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink-3}"
    rounded: "{rounded.2xl}"
    padding: 24px
---

## Overview

This DESIGN.md documents the UniSight home page measured from https://www.unisight.asia/ (page title "Unisight - เครื่องมือเก็บข้อมูลและจัดการกลุ่มลูกค้า", a Thai customer-data collection and segmentation tool; the queue entry names the product "UniSight CDP"). The page is a long Thai-language marketing page, 11,236px tall at the 1280px desktop width. A translucent header holds the green circular logo with the "UNISIGHT" wordmark, the menu items Learn, Features and Solutions (with dropdowns), Blogs and About, and a black "Book Demo" pill. The hero is a full-bleed green-toned photograph of a woman with a laptop in a boutique, with floating product-UI cards (success rate, campaign charts, a notification) over it and the headline "รู้ใจลูกค้า เพิ่มยอดขาย ลดต้นทุนการตลาด" ("Know your customers, increase sales, reduce marketing costs") in heavy black Thai type at left, followed by two outlined pill buttons ("โทรหาเรา", "ติดต่อผู้เชี่ยวชาญ ฟรี").

Below the hero are a client-trust heading, a mint-to-blue gradient call-to-action band ("บอกสิ่งที่คุณ กำลังมองหากับเรา" with a black "ปรึกษาฟรี ไม่มีค่าใช้จ่าย" pill), and fanned, rotated feature cards in mint, blue and black. Three round floating contact buttons (Messenger, LINE and chat) sit at the right edge in the capture; they are third-party contact widgets and are not documented as brand components. The voice is direct Thai marketing copy with English product terms (POS, ERP, Campaign, Book Demo).

## Colors

`canvas` #ffffff dominates (9,495 area weight). `surface-2` #2beaa4 is the mint-green of the first feature card and the left stop of the gradient band (3,875). Black #000000 (`ink` and `primary`) fills the buttons and a black card (2,310), and #111111 (`ink-3`, 1,603) is the text colour on mint cards and the border of the outlined buttons. A vivid blue #006bff (1,875) is the second feature-card colour; further measured area colours are #293c5d, #004cb5, #0995a8, #eff5ff and a translucent white #ffffff1a. `button-secondary-bg` #06c755 is the fill of the "เพิ่มเพื่อน" (add friend) button (LINE's own green), and #1877f2 measured on four areas of a social widget. Text colours by character count: #000000 (1,422), white (1,033), #111111 (728), `ink-4` #5d5d5d (251), `ink-5` #a3a3a3 (194) and `ink-6` #555858 (1). The link gradient `linear-gradient(90deg, rgb(43, 234, 164) 30%, rgb(66, 132, 243) 70%)` was measured on the "โทรหาเรา" link background.

## Typography

The family is IBM Plex Sans Thai in three loaded faces: regular ("IBM Plex Sans Thai"), "IBM Plex Sans Thai Semi-Bold" and "IBM Plex Sans Thai Bold", each referenced as its own family name with weight 400 in CSS (the weights are carried by the face, not by font-weight). Roles: `display` (Bold face) 68px / 81.6px, mobile 48px / 60px; `heading` 24px / 33px; `subheading` (Semi-Bold face) 36px / 45px; `body` (regular) 20px / 28px; `button` (Semi-Bold) 14px / 20px; `link` (Semi-Bold) 18px / 28px; `button-secondary` (regular) 16px / 24px. Sizes by character count: 20px (1,153), 16px (731), 18px (412), 48px (388), 28px (364), 14px (209), 24px (154), then 60px, 68px, 36px, 80px and 90px for hero and statistic numerals. IBM Plex Sans Thai is an open-source typeface.

## Layout

The page is a stack of full-width bands: hero photograph, white client section, a gradient CTA band with 30px-ish rounded outer corners and an inset content row, and a card section on a pale mint-to-white gradient wash. Measured gaps: 16px (8), 24px (8), 32px, 30px, 18px, 4px, 128px, 64px, 50px and 20px; paddings: 20px (35), 24px (20), 8px (14), 40px, 32px, 96px and others up to 160px. Cards are 488px wide in the first measurement and use 24px padding.

## Elevation & Depth

Shadows are Tailwind-style soft drops: `0 20px 25px -5px rgba(0,0,0,0.1), 0 8px 10px -6px rgba(0,0,0,0.1)` (2 uses), `0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -4px rgba(0,0,0,0.1)` (1) and a 4px translucent white ring `rgba(255, 255, 255, 0.3) 0px 0px 0px 4px` (1). The hero's floating UI cards are translucent glass panels over the photograph. Fanned feature cards are rotated rather than shadowed.

## Shapes

Radii are generous and varied: 9999px (13 elements), 2px (5), 50% (5), 18px (3), 24px (3), 20px (3), 12px (2), 30px (2), 50px (1), 8px (1), 40px (1) and 100px (1). Tokens: `xs` 2px, `sm` 8px, `md` 12px, `lg` 18px, `xl` 20px, `2xl` 24px, `3xl` 30px, `4xl` 40px, `cta` 50px, `pill` 9999px. The black "Book Demo" button uses 50px, the LINE button 40px and the outlined contact buttons 9999px; cards use 24px and the gradient band's outer corners are rounded.

## Components

`button-primary` ("Book Demo"): black fill, white Semi-Bold 14px label, 50px radius, 10px 20px padding, 42px tall, 140px wide; hover state recorded in the extraction. `button-secondary` ("เพิ่มเพื่อน"): #06c755 fill, white regular 16px label, 40px radius, 10px 15px padding, 35px tall, 118px wide. `link` is a 56px-tall, 280px-wide pill ("โทรหาเรา") with the mint-to-blue gradient background and white Semi-Bold 18px label, padding 0px 32px; an outlined variant has a 2px #111111 border, black text and transparent fill. `card`: #2beaa4 fill, #111111 text at 28px / 35px, 24px radius and 24px padding. `nav` is a translucent header with dark text.

## Design System Architecture

No public UniSight design system or brand guideline page was opened. The shipped CSS shows Tailwind utility output (`--tw-ring-*`, `--tw-shadow` variables), a few theme variables (`--b-100` #F2F3F7, `--s-700` #37546D, `--foreground-rgb`, `--background-start-rgb`) and Swiper's `--swiper-theme-color` #007aff for the carousel. The de-facto system is a Tailwind-built Thai marketing site with three IBM Plex Sans Thai faces, black pill buttons, a mint-and-blue accent pair and large radii.

## Do's and Don'ts

Do use IBM Plex Sans Thai faces by name (Bold for display, Semi-Bold for buttons, regular for body). Do use black pill buttons with white labels and mint #2beaa4 with blue #006bff as the two accent surfaces. Do give cards a 24px radius and 24px padding. Do use the mint-to-blue gradient for the contact call-to-action.

Don't document the floating Messenger, LINE or chat widgets as UniSight components. Don't use #06c755 or #1877f2 as product accent colours; they are the LINE and Facebook platform colours. Don't use font-weight values to select Plex weights on this page; the faces are separate families.

## Responsive Behavior

The mobile pass (390px) recorded: h1 48px / 60px at weight 300; h2 24px / 33px; body 18px / 24.75px; the first CTA measured as the 16px, 118px by 35px LINE button; and a full-width 390px h2 block. Menu form, column collapse and card layout on mobile are not measured.

## Iteration Guide

1. White canvas, #000000 text and buttons, #2beaa4 and #006bff feature cards.
2. Headlines in IBM Plex Sans Thai Bold at 68px; body 20px regular.
3. Black 50px-radius "Book Demo" pill at 42px; gradient 56px pill for contact.
4. Cards at 24px radius with 24px padding.
5. Gate with `node web/scripts/verify-designs.mjs --slug=unisight-cdp`.

## Additional Measurements

Large numeric display sizes of 80px (30 characters) and 90px (16 characters) were measured in feature visuals and statistics, in addition to the 60px and 68px headline sizes. The page's borders are rare: only #111111 (2 uses). The extraction ran with the default settings and detected no consent overlay on this page. Product screenshots appear inside glass-style cards in the hero and as illustration thumbnails within the fanned cards.
