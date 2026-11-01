---
version: alpha
name: "Thitikorn"
category: "Thai Brands"
description: "Thai consumer-finance site in Prompt: white #ffffff page, #6e6e6e body copy, lime #5dc100 navigation and headings, #008452 green footer with #ffffffcc text, #025454 deep teal accent, circular badges only and no shadows."
colors:
  canvas: "#ffffff"
  ink: "#6e6e6e"
  primary: "#5dc100"
  surface-footer-green: "#008452"
  surface-deep-teal: "#025454"
  ink-on-green: "#ffffffcc"
  hairline: "#e5e5e5"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.16px
  display-mobile:
    fontFamily: prompt
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28.8px
    letterSpacing: "-0.72px"
  heading:
    fontFamily: prompt
    fontSize: 16px
    fontWeight: 500
    lineHeight: 32px
    letterSpacing: "-0.72px"
  body:
    fontFamily: Prompt
    fontSize: 16px
    fontWeight: 400
    letterSpacing: 0.16px
  link:
    fontFamily: Prompt
    fontSize: 14px
    fontWeight: 400
    letterSpacing: 0.14px
rounded:
  pill: 9999px
spacing:
  s1: 12px
  s2: 14.8px
  s3: 16px
  s4: 25px
  s5: 29.6px
  s6: 32px
  s7: 60px
  s8: 70px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.display}"
    padding: 32px 16px
  footer:
    backgroundColor: "{colors.surface-footer-green}"
    textColor: "{colors.ink-on-green}"
---

# Thitikorn

## Overview

The measured site is tk.co.th, titled "บริษัท ฐิติกร จำกัด(มหาชน) | Thitikorn Public Company Limited" (language th). Thitikorn is a Thai consumer-finance company; the page presents motorcycle hire-purchase loans, motorcycle registration-book loans and a micro-business loan, and promotes the "TK Plus" bill-payment app. The page is 2486px tall at 1280px. A cookie banner (`cookie-law-info-bar`) was detected and hidden for measurement, and the square back-to-top button visible at the right edge of the capture is page chrome; neither is documented as brand UI.

The capture shows a white header with green text navigation (ฐิติกร, เกี่ยวกับบริษัท, บริการสินเชื่อ, ข่าวประชาสัมพันธ์, สาระน่ารู้, นักลงทุนสัมพันธ์), a small-caps "Call : 02-310-7000" link and a language flag; a full-width green carousel banner for TK Plus ("จ่ายบิลออนไลน์ ผ่านแอป และไลน์", "สะดวก ง่าย จ่ายได้ทุกเวลา") with a smiling man holding a phone, rounded green bubbles reading ตรวจยอดชำระ, เช็คยอดปัจจุบัน, จ่ายออนไลน์ได้ทุกที่, ประวัติการชำระ and ค้นหาสาขาใกล้บ้าน, grids of bank and wallet logos and App Store, Google Play and LINE badges; a green-ruled section title "ผลิตภัณฑ์ของบริษัท"; three promotional loan banners with a cartoon mascot and motorcycles; centered green product titles with grey bulleted eligibility and document lists; and a solid green footer holding the company address, links, social icons and app-store badges.

## Colors

Measured background areas: white `#ffffff` (3182), green `#008452` (490, the footer) and deep teal `#025454` (106). Text by characters: grey `#6e6e6e` (605, body and list copy), lime green `#5dc100` (312, navigation, headings, links), translucent white `#ffffffcc` (91, footer text on green) and white (56). Borders: `#e5e5e5` (5), `#ffffff4d` (1) and `#6dab3c` (1).

Green is the brand: lime `#5dc100` for text accents on white, and the darker `#008452` for the footer; the hover state of a navigation link recorded text and border `rgb(0, 132, 82)` (`#008452`) with an underline. The extractor found no filled button, so `primary` is the lime text and link color. The carousel banner and promotional images carry additional greens and yellows as artwork that were not measured as interface colors. WordPress preset colors in the root variables (for example `--wp--preset--color--vivid-purple: #9b51e0`) are defaults and are not used.

## Typography

Prompt is the only family (1064 characters; computed as `prompt` for 703 and `Prompt` for 361), loaded at 300, 400, 500 and 700.

Measured roles: the desktop h1 candidate is the logo/navigation text "ฐิติกร" at 16px and weight 500 with a 24px line height and 0.16px letter spacing, so the h1 role here is a navigation label rather than a hero headline; the h2 "ผลิตภัณฑ์ของบริษัท" is 16px at 500 with a 32px line height and -0.72px letter spacing; body is 16px at 400; links such as the phone number are 14px at 400 with 0.14px letter spacing. The most frequent size is 13.3333px (605 characters, the grey list copy), then 16px (228), 14px (151) and 24px (80, product titles in the mobile pass). The page is typographically quiet: weight 500 and green color do the work of hierarchy.

## Layout

A boxed content column under a full-bleed header and carousel (the column width was not measured). The products section is a two-column grid of banner images with centered titles and left-aligned lists beneath; the third product sits alone in the left column. The footer is a full-width green block 383px tall with three areas: company details, a "ฐิติกร" link list, and social and app badges. Spacing steps recorded: 12, 14.8, 16, 25, 29.6, 32, 60 and 70px.

## Elevation & Depth

No box shadows were measured. Depth is minimal: thin `#e5e5e5` lines, a green rule under the section title, and the contrast between white sections and the green footer.

## Shapes

The only measured radius is 50% (5 uses), for circular badges and icons. Banners, lists and the footer are square-cornered; the carousel pager dots are circles.

## Components

- Navigation link: `#5dc100`, Prompt 16px at 500, letter spacing 0.16px, padding `32px 16px`, 88px tall; hover turns the text `#008452` with an underline.
- Link ("02-310-7000"): `#5dc100`, 14px at 400, 21px tall.
- Section title: green text with a thin green rule below.
- Product block: promotional banner image, centered green title, grey list with small circle bullets.
- Footer: `#008452` fill, `#ffffffcc` text, 14px at 500, social icons and store badges.

## Design System Architecture

No public design system or brand guideline was found; the home page HTML was opened and no such link is present. The de-facto system is a WordPress site: root variables include `--wp--preset--*` values, `--wp-admin-theme-color-darker-20`, a grid breakpoint variable (`--grid-breakpoints-xl: 1200px`) and button variables such as `--btn-font-family`. Brand green and the Prompt family are applied in page-level styles; the preset palette is unused.

## Do's and Don'ts

Do use lime `#5dc100` for navigation and links on white, `#008452` for the footer, and `#6e6e6e` for body lists. Do use the Prompt family at 500 for headings. Do use friendly mascot illustration and photography of people with motorcycles in banners.
Don't use WordPress preset colors. Don't treat the cookie banner or back-to-top button as brand UI. Don't add shadows or rounded boxes; none were measured.

## Responsive Behavior

The 390px mobile pass measured: h1 "สินเชื่อเช่าซื้อรถจักรยานยนต์" at 24px, weight 500, 28.8px line height and -0.72px letter spacing; h2 16px at 500 (32px high); footer address text 16px at 400; and a navigation block 50px tall in `#6e6e6e` at 16px weight 400. Mobile font sizes recorded: 13.3333px, 14px, 16px and 24px. The carousel, the product grid and the menu behavior on mobile were not measured.

## Iteration Guide

1. White page, `#6e6e6e` text, lime `#5dc100` navigation and headings.
2. Prompt 16px at 500 for headings, 13.3333px for list copy.
3. Deep green `#008452` footer with `#ffffffcc` text.
4. Banner imagery with mascot and motorcycles, centered green titles.
5. Re-measure before adding values.

### Imagery and voice

The visual voice is warm, friendly and promotional rather than formal. Banners use saturated green gradients, a cheerful cartoon fruit-like mascot, and presenters in dark shirts posed with motorcycles, with hand-lettered Thai headlines in white or green outlined type ("สินเชื่อมอเตอร์ไซค์ ที่เข้าใจคุณ!", "เงินสดฉุกเฉิน", "ที่เค เงินทันใจ"). Small check-mark badges list benefits such as ไม่ต้องออกรถ, ไม่โอนเล่ม and ได้ทุกอาชีพ. Product text beneath the banners is plain and checklist-like: three loan products (สินเชื่อเช่าซื้อรถจักรยานยนต์, สินเชื่อจำนำทะเบียนรถจักรยานยนต์ and สินเชื่อนาโนไฟแนนซ์) each give eligibility bullets (for example an age of 20 or over for the hire-purchase loan) and a "ใช้เอกสาร 4 อย่าง" list headed by the national ID card and house registration. The footer repeats contact entry points: the phone number 02-310-7000, a "ติดต่อ-สอบถาม/ร้องเรียน" link, and policy links for personal-data protection and cyber security.

The carousel pairs a large central headline with two columns of payment-channel logos grouped under short Thai captions (one for bank apps linked to the TK Plus app, one for QR code and barcode payment at counters and machines), with five round pager dots beneath. Logos sit on small white rounded tiles in the capture, which makes the banner busy but keeps every channel legible.
