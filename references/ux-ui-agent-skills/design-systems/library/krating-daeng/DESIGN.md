---
version: alpha
name: Krating Daeng (TCP Group)
category: "Thai Brands"
description: "Krating Daeng (กระทิงแดง) energy-drink product page on TCP Group's site: white #ffffff canvas, deep navy #151f6d headings, red #e4002b accent text, #212529 body, DBHeaventRounded at 90px display and 24px body, 100px-radius outlined pills, and a pink and yellow gradient glow behind rounded white product cards."
colors:
  canvas: "#ffffff"
  ink: "#212529"
  primary: "#151f6d"
  on-primary: "#ffffff"
  accent-red: "#e4002b"
  on-dark-muted: "#ffffff99"
  on-dark-soft: "#ffffffb3"
typography:
  display:
    fontFamily: DBHeaventRounded, sans-serif
    fontSize: 90px
    fontWeight: 500
    lineHeight: 108px
  display-mobile:
    fontFamily: DBHeaventRounded, sans-serif
    fontSize: 45px
    fontWeight: 500
    lineHeight: 54px
  heading:
    fontFamily: DBHeaventRounded, sans-serif
    fontSize: 54px
    fontWeight: 700
    lineHeight: 64.8px
    letterSpacing: "-0.54px"
  body:
    fontFamily: DBHeaventRounded, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: DBHeaventRounded, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
  button-outline:
    fontFamily: DBHeaventRounded, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 36px
rounded:
  xs: 6px
  sm: 29.88px
  md: 30px
  xl: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 28.16px
  s8: 32px
  s9: 35px
  s10: 40px
components:
  button-outline-light:
    textColor: "{colors.on-primary}"
    typography: "{typography.button-outline}"
    rounded: "{rounded.xl}"
    padding: 8px 35px
    height: 54px
    borderColor: "{colors.on-primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    padding: 20px 43.04px
    boxShadow: rgba(0, 0, 0, 0.25) 0px 4px 20px 0px
  footer:
    textColor: "{colors.canvas}"
    padding: 80px 0px 0px
---

## Overview

The brand URL kratingdaeng.com redirects to the Krating Daeng product page on T.C. Pharmaceutical Industry Co., Ltd. (TCP) at https://www.tcp.com/th/products/energy-drink/kratingdaeng. The page title is "กระทิงแดง | บริษัท ที.ซี.ฟาร์มาซูติคอล อุตสาหกรรม จำกัด". That page is therefore the brand's official web presence and the one measured here, at 1280px wide and 3028px tall. It presents the Krating Daeng range (the classic product, Theoplex-L, Extra ABC, Extra Zinc and Super), and the headline product is described with "ทอรีน 1,000 มก. พร้อมวิตามิน 2 เท่า" (1,000 mg taurine with double vitamins) and the aim "เติมพลังกาย เพิ่มพลังใจ" (restore physical energy and mental strength). Markets listed are Thailand, Laos, Mongolia and Indonesia, shown as flags.

The design is bright and friendly rather than aggressive. A white header with a soft shadow carries the TCP mark; the page title "กระทิงแดง" appears in large navy rounded Thai letters over a breadcrumb trail (หน้าหลัก > ผลิตภัณฑ์ > เครื่องดื่มให้พลังงาน > กระทิงแดง); below sits a full-width campaign banner with two young performers and a row of bottles on a purple, blue and pink burst, then a full-bleed video still of a worker lifting a box with a white outlined "ดูวิดีโอ" pill over it, whose bottom edge curves into the white page. The product section is a rounded white card floating on soft pink and yellow radial glows, with a bottle photograph, a red product title, benefits copy with bullet points, a nutrition table (energy, sugar, fat, sodium) and three outlined action pills for ordering online, Facebook and LINE. A vertical strip of bottle thumbnails with up and down circular arrows sits beside the card.

A consent notice was present on the page; the extractor hid it (`consentOverlaysHidden` in the extraction) and a floating TCP 70-year badge at the right edge is a campaign element, not part of the interface components.

## Colors

- **Canvas `#ffffff`:** the page background (3361 of 3366 weighted background area).
- **Navy `#151f6d`:** the brand colour of headings and links (2010 characters), the title "กระทิงแดง".
- **Ink `#212529`:** body text (6796 characters), the Bootstrap body colour.
- **Red `#e4002b`:** the accent used for product titles and key phrases (705 characters).
- **White alphas `#ffffff99` and `#ffffffb3`:** secondary text on dark areas such as the footer.

The extractor first picked a 72px circular "Explore More" control as the primary button and read its text colour as `#0d6efd`. That value is Bootstrap's default `--bs-primary` link blue, not a brand colour, so it was dropped; the primary role is the brand navy with white foreground. The root variables also hold Bootstrap defaults and a Swiper `--swiper-theme-color: #007aff`, which are excluded.

## Typography

A single family, **DBHeaventRounded** (loaded at 400, 500 and 700), sets all 9852 measured characters. Its rounded Thai letterforms are the most recognisable typographic trait: the page title is large and soft.

- Display: 90px/108px, weight 500; on mobile 45px/54px.
- Heading: 54px/64.8px, weight 700, letter-spacing -0.54px.
- Body: 24px/24px, weight 400 (8561 characters at 24px).
- Link: 20px/20px, weight 400.
- Outline button label: 24px/36px, weight 500.
- Other sizes in use: 32px (922 characters), 36px (229) and 16px.

DBHeaventRounded is a commercial Thai typeface; if it is not available, use another rounded Thai sans with similar proportions. The icon fonts Font Awesome 5 Pro and a custom `tcp` icon font are loaded for symbols.

## Layout

The page is a centred, generous column with a 43.04px side padding in the header and 80px of top padding in the footer. Measured paddings are 8px (96 elements), 35px (77), 28.16px (54) and 32px (21). Sections alternate between full-bleed media (banner and video) and a centred narrow column of text with a card. Copy blocks are centred and set at a large 24px, so the page reads like a poster rather than a dense catalogue.

## Elevation & Depth

Two shadows are measured: `rgba(0, 0, 0, 0.25) 0px 4px 20px 0px` (header) and `rgba(0, 0, 0, 0.25) 0px 10px 20px 0px` (one element). Depth otherwise comes from the product card floating on coloured radial glows (pink and yellow) and from the curved bottom edge of the video block, which creates a scooped transition into the white page.

## Shapes

The 100px radius is the dominant shape (77 elements), turning chips and outlined buttons into pills. Others are 100% and 50% (circular arrows and badges), 6px (2), 29.879px (2) and 30px (1), which round the large card and image frames. The video block's lower edge is a large curve rather than a straight cut.

## Components

- **Outlined action pill:** white-on-image "ดูวิดีโอ" button with a 1px white border, 24px weight-500 label, 100px radius, padding 8px 35px and height 54px. On the white product card the same pill shape appears in navy outline for "สั่งซื้อออนไลน์ที่นี่", "KratingDaeng" and "@myredclub".
- **Header:** white bar with `0px 4px 20px` shadow, padding 20px 43.04px and navy links.
- **Product card:** rounded white panel with a bottle image, a red heading, bullet benefits, a nutrition table and the three pills.
- **Thumbnail rail:** vertical bottle thumbnails with circular up and down arrows.
- **Breadcrumb:** small navy text with chevrons.
- **Footer:** white text, 80px top padding.

## Imagery and Voice

Photography is warm and human: young celebrities in a campaign banner with the line "เป้าหมายถึงไว พลังใจไม่มีท้อ" (the goal arrives sooner, spirit never gives up), a working man in a cap lifting a box in a shop, and clean studio shots of amber glass bottles with the red-bull label. The copy is plain, factual Thai, with a gently motivational tone and small print about vitamins and balanced eating. Product names are in red; reassurance text is in dark ink.

## Design System Architecture

No public Krating Daeng design system or brand guideline was found: https://www.tcp.com/th/about-us and https://www.tcp.com/th/brand both returned HTTP 404, and the product page itself is the only source opened. The stylesheet shows a Bootstrap 5 base (`--bs-body-font-size: 1rem`, `--bs-border-radius-xl: 1rem`, `--bs-border-radius-2xl: 2rem`) with Swiper for carousels, Font Awesome 5 Pro and a `tcp` icon font, plus custom styles for DBHeaventRounded, the navy and red colours and the pill radii. Source: https://www.tcp.com/th/products/energy-drink/kratingdaeng.

## Do's and Don'ts

- Do use DBHeaventRounded for every piece of text and keep headings navy `#151f6d`.
- Do use red `#e4002b` sparingly for product names and key claims.
- Do use 100px-radius pills for outlined actions.
- Do float product cards on soft pink and yellow glows.
- Don't use Bootstrap's blue `#0d6efd` for buttons or text.
- Don't fill buttons with strong colours; use outlines on white and white outlines on imagery.
- Don't treat the cookie notice or the 70-year badge as part of the component set.

## Responsive Behavior

At the 390px viewport the display heading is 45px (against 90px) and the h2 is 40px (against 54px); body text stays 24px. The scooped video edge, the centred copy and the card layout carry through; only the type-size changes were measured. The extraction recorded no primary button at mobile width.

## Iteration Guide

1. Start from `canvas #ffffff`, `ink #212529`, `primary #151f6d` and the red accent `#e4002b`.
2. Set text in DBHeaventRounded: 90px display (45px on mobile), 54px/700 headings, 24px body.
3. Build actions as outlined 100px-radius pills; keep fills out of the button set.
4. Put product cards on white with pink and yellow background glows and a soft shadow.
5. Re-measure with the extractor if TCP changes the page.
