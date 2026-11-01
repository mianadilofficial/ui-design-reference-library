---
version: alpha
name: Bangkok Insurance
category: "Thai Brands"
description: "Bangkok Insurance (bangkokinsurance.com, กรุงเทพประกันภัย), a Thai non-life insurer: a Bootstrap 3 site on a #f2fafd pale-blue page with navy #063868 navigation, bands and text, DB Helvethaica X Thai type at 19.6px, white promo cards, square-cornered outlined buttons and colorful circular product icons."
colors:
  canvas: "#ffffff"
  page-largest: "#f2fafd"
  ink: "#063868"
  primary: "#063868"
  on-primary: "#ffffff"
  surface-light: "#f0f9fe"
  surface-mint: "#f1f9fb"
  surface-slate: "#4e6c7c"
  surface-warm: "#e5e3df"
  surface-pale: "#dae9ec"
  ink-body: "#4e4e4e"
  ink-black: "#000000"
  ink-navy-alt: "#163a68"
  border-grey: "#d6d5d4"
typography:
  display:
    fontFamily: Verdana, Arial, Helvetica, sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 49px
  display-mobile:
    fontFamily: DB_Helvethaica_X_Med, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 25.2px
    fontWeight: 500
    lineHeight: 27.72px
  heading:
    fontFamily: DBHelvethaicaX-Li, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 25.2px
    fontWeight: 500
    lineHeight: 27.72px
  subheading:
    fontFamily: DB_Ozone_X_Bd, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 30.8px
  body:
    fontFamily: DB_Helvethaica_X_Med, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 19.6px
    fontWeight: 400
    lineHeight: 22px
  link:
    fontFamily: DBHelvethaicaX-Li, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 21px
    fontWeight: 400
    lineHeight: 30px
  button-secondary:
    fontFamily: DB_Helvethaica_X_Med, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16.8px
    fontWeight: 300
    lineHeight: 33.6px
rounded:
  none: 0px
  xs: 4px
spacing:
  s1: 3px
  s2: 5px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 15px
  s10: 18px
components:
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    padding: 0px 5px
    height: 34px
    borderColor: "{colors.ink}"
    boxShadow: rgba(255, 255, 255, 0.3) 0px 0px 0px 1px inset
  quick-menu-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    height: 40px
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    boxShadow: rgba(0, 0, 0, 0.25) 0px 0px 3.5px 0px
  promo-card-footer:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    padding: 0px 20px
    height: 34px
---

## Overview

Bangkok Insurance (กรุงเทพประกันภัย), the non-life insurer Bangkok Insurance Public Company Limited, runs a Thai-language portal at bangkokinsurance.com with an English switch ("ไทย" and "Eng"). The measured page title is "บริษัท กรุงเทพประกันภัย จำกัด (มหาชน)", and the site carries the tasks an insurance customer needs: buy online, pay premiums, renew a policy, find repair garages and hospitals, file a claim (i-Claim), contact an agent, read investor information.

The page opens with a navy header strip (#063868) holding the Bangkok Insurance logo, the main navigation in white (หน้าแรก, สินค้าประกันภัย, เคลม, นักลงทุนสัมพันธ์, บริษัทของเรา, ร่วมงานกับเรา, ติดต่อเรา, MY ACCOUNT) and a small ไทย | Eng language switch. Under it a full-width hero photograph of the Bangkok skyline and river carries the white wordmark in the center and, at the right, a stack of nine navy quick-action buttons, each with a white label and a circular white icon (เข้าสู่ระบบ, ซื้อประกันภัยออนไลน์, ชำระเบี้ยประกันภัย, ต่ออายุกรมธรรม์, อู่ซ่อมมาตรฐาน/ศูนย์ซ่อมฯ, รายชื่อโรงพยาบาล, i-Claim, ตัวแทน/นายหน้า, มาตรฐานกรอบระยะเวลาการให้บริการ).

Below the hero, a full-width navy band titled "Highlight" (white, centered, with a short rule beneath) shows a carousel of two white promotion cards with large Thai headlines, a "ผ่อน 0% สูงสุด 10 เดือน" style subtitle, a small outlined "ดูรายละเอียด" button, and an expiry line ("วันนี้ - 31 ธันวาคม 2569"). A pale-blue band, "สินค้าแนะนำ" (recommended products), shows nine large colored circles with white pictograms (cyber, PA accident cover, home, travel, car, cancer ribbon and others) and navy captions. A slate band, "ข่าวสารและกิจกรรม", holds a NEWS block with three white article cards and a PRESS list with "อ่านเพิ่มเติม" buttons. Further down are credit ratings (S&P and A.M. Best), a contact block and a multi-column footer.

The voice is Thai consumer-insurance language: benefit-led headlines ("คุ้มครองทุกที่ตลอด 24 ชม."), explicit numbers (0% installments, 18% discount, 135 baht), and polite labels. A cookie consent popup was hidden by the extractor and is not documented as brand UI.

## Colors

A navy-and-pale-blue palette with plain neutrals.

- **primary and ink #063868** — the navy for text (4011 characters, the most-read color), the header strip, the Highlight band (1723 area units) and borders (24 measured). White (#ffffff) text sits on it. The generated primary, #337ab7, is Bootstrap 3's default link color (measured on 198 characters of anchor text) and is not a brand color.
- **canvas #ffffff** — cards (436 area units); **page-largest #f2fafd** — the dominant page background (4815 units).
- **surface-light #f0f9fe** (1012) and **surface-mint #f1f9fb** (860) — pale-blue section tints; **surface-pale #dae9ec** (139).
- **surface-slate #4e6c7c** (742 units) — the news band; **surface-warm #e5e3df** (576) — a warm grey surface.
- **ink-body #4e4e4e** (930 characters) — paragraph text; **ink-black #000000** (394) and **ink-navy-alt #163a68** (12) — other text colors.
- **border-grey #d6d5d4** — a measured light border.

The product pictograms in the "สินค้าแนะนำ" row are colored circles (purple, magenta, red-orange, blue, green and orange in the capture); they are image assets and their fills were not measured. The shipped CSS lists Bootstrap 3's alert colors (#3c763d, #8a6d3b, #a94442) and the blue #337ab7; none is a Bangkok Insurance brand color.

## Typography

The site uses Thai display faces from the DB family, referenced by names such as **DB_Helvethaica_X_Med** (5352 characters, the main text face), **DBHelvethaicaX-Li** (808 characters, a lighter face for headings and links), and **DB_Ozone_X_Bd** (91 characters, for the "Highlight" heading). Roboto (400) is also loaded, and Verdana appears for the logo `h1`. The measured stacks supply `"Helvetica Neue", Helvetica, Arial, sans-serif` as their fallbacks. No substitute is published beyond those stacks.

- **display — Verdana 500, 36px / 49px.** The page `h1` (an empty element wrapping the logo; measured 140px wide), kept because it is the page's measured h1.
- **display-mobile and heading — 25.2px / 27.72px, 500.** Section and promo headlines in DB Helvethaica X (Med on mobile, Light on desktop).
- **subheading — DB Ozone X Bold, 28px / 30.8px.** "Highlight".
- **body — DB Helvethaica X Med 400, 19.6px / 22px.** Card copy in #063868 and paragraphs.
- **link — DB Helvethaica X Li 400, 21px / 30px.** Quick-menu items.
- **button-secondary — DB Helvethaica X Med 300, 16.8px / 33.6px.** "ดูรายละเอียด" buttons and promo-card footer lines.

Sizes by character count: 19.6px (3042), 14px (1071), 18.2px (965), 25.2px (670), 16.8px (261), 21px (125), 28px (100) and 10px (62). Weights are 400 (5299), 500 (771) and 300 (255).

## Layout

The desktop page measured 1280px wide and 4789px tall. The page is a stack of full-bleed bands: navy header, hero photograph, navy Highlight band, pale-blue product band, slate news band, then ratings, contact and footer. Inside bands, content is centered: two promo cards side by side with carousel arrows at the outer edges; nine product circles in rows of five and four; news as three cards beside a press list. Measured paddings are 10px (67 elements), 5px (60), 20px (59), 15px (51), 8px (9), 12px (9), 6px (7) and 3px (4).

The shipped stylesheet is Bootstrap 3-based (`/css/app.css`, about 600 KB) with site-specific rules and a small `/css/site-mini.css`.

## Elevation & Depth

Flat with minimal shadow. The header strip carries `rgba(0, 0, 0, 0.25) 0px 0px 3.5px 0px`. Outlined buttons use an inset 1px white highlight, `rgba(255, 255, 255, 0.3) 0px 0px 0px 1px inset` (21 elements). Bootstrap's own form shadows (`inset 0 1px 1px rgba(0, 0, 0, 0.075)`) appear in the CSS. Hierarchy is made by color bands (navy, pale blue, slate, white cards) rather than elevation.

## Shapes

Mostly square. The extracted buttons and quick-menu items have 0px radius; only a `4px 4px 0px 0px` and a `0px 0px 4px 4px` radius were measured (one element each, the top and bottom edges of grouped cards). The CSS also lists 4px (35 occurrences), 3px, 5px and 6px radii from Bootstrap and plugins. The product pictograms are full circles, drawn as images.

## Components

**Outline button.** "ดูรายละเอียด": transparent, 1px #063868 border, #063868 label in DB Helvethaica X Med 300 at 16.8px / 33.6px, padding `0px 5px`, height 34px, width 74px, radius 0px, inset white 30% highlight.

**Header navigation.** #063868 strip with white 19.6px DB Helvethaica X Li links and a `0 0 3.5px` 25% shadow; hover changes the link height from 40px to 42px in the measurement.

**Quick-menu link.** White 21px / 30px DB Helvethaica X Li on a navy fill, 40px tall, 223px wide, each ending in a white circular icon (the navy fill of the buttons was not measured separately).

**Promo card.** White card on the navy band with a photo header, a bold navy title, small description, "ดูรายละเอียด" and an expiry line (the footer line measures 16.8px / 33.6px, 34px tall, with `0px 20px` padding).

**Product icon.** A colored circle with a white pictogram and a navy 14 to 18px caption.

**News card and press list.** White cards with photograph, navy title strip, short copy and an outlined "อ่านเพิ่มเติม" button; the PRESS list is a column of white rows with navy bottom bars.

**Footer.** Multi-column Thai link groups (products, claims, investor relations, company, careers, contact, MY ACCOUNT), legal links, partner portal images and app promotion.

## Design System Architecture

No public design system or brand guideline is published for Bangkok Insurance. The home page https://www.bangkokinsurance.com/ was opened; it has no link to brand guidelines, a press kit or a logo download (only inline logo images such as `/images/logo/logo2.png`).

The de-facto system is a Bootstrap 3 site: the measured link color is #337ab7, the CSS includes Glyphicons Halflings and Bootstrap's contextual alert colors and form shadows, and brand rules sit on top in `/css/app.css` and `/css/site-mini.css`. Colors, sizes and radii are literals, with no `:root` custom properties measured. Media queries in the stylesheets: `max-width: 991px` (153 rules), `max-width: 767px` (75), `min-width: 768px` (26), `max-width: 1350px` (22), `max-width: 800px` (20), `max-width: 600px` (20), `min-width: 1200px` (8) and `max-width: 1199px` (7).

## Do's and Don'ts

- Do use navy #063868 for the header, the Highlight band and Thai text, with white text on navy.
- Do tint the page with #f2fafd and #f0f9fe and use white cards for promotions.
- Do keep buttons square-cornered, outlined in #063868, with 16.8px Thai text.
- Do set Thai text in the DB Helvethaica X family at 19.6px for body and 25.2px for headlines.
- Do center section titles with a short rule beneath.
- Don't use Bootstrap's #337ab7 as a brand color.
- Don't round the buttons; the measured radius is 0px.
- Don't use heavy shadows; the measured header shadow is 25% opacity at 3.5px.
- Don't document the cookie consent popup or logout modal as brand UI.

## Responsive Behavior

Measured at the 390px mobile pass: the promo headline measures 25.2px / 27.72px in DB Helvethaica X Med weight 500 (#063868, 248px wide), body copy is 19.6px / 22px with `0px 20px` padding (288px wide), and the header region measures 65px tall at 288px wide. The most common mobile sizes are 19.6px (2994 characters), 18.2px (1275), 16.8px (707), 25.2px (532), 14px (426), 21px (107) and 12.6px (86).

The stylesheet declares Bootstrap-style breakpoints at 767px, 768px, 991px, 1199px and 1200px plus 600px, 800px and 1350px. How the navigation, quick menu and bands reflow at mobile widths was not measured, and no mobile capture image exists.

## Iteration Guide

1. Set the page on #f2fafd with white cards and a navy (#063868) header and bands.
2. Use the DB Helvethaica X family for Thai at 19.6px body and 25.2px headlines, with Helvetica Neue, Helvetica, Arial as fallbacks.
3. Build the hero as a photograph with a stacked column of navy quick-action buttons at the right.
4. Use square outlined buttons (34px tall, 1px #063868) for "ดูรายละเอียด" and "อ่านเพิ่มเติม".
5. Use colored circular pictograms for product categories with navy captions.
6. Re-measure hover, focus and mobile reflow before documenting them.
7. Gate with `node web/scripts/verify-designs.mjs --slug=bangkok-insurance`.
