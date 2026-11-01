---
version: alpha
name: ALLY REIT
category: "Thai Brands"
description: "Thai-language investor site of ALLY Freehold and Leasehold Real Estate Investment Trust, set in Avenir LT Std with kohinoor-thai fallback, deep teal #056967 ink and footer, mint #4bcfab pill buttons (120px radius, 11px uppercase type), dark brown-black #35292b body text and a white canvas."
colors:
  canvas: "#ffffff"
  ink: "#056967"
  primary: "#4bcfab"
  on-primary: "#ffffff"
  ink-body: "#35292b"
  surface-deep: "#045452"
  border-beige: "#ddd7c8"
typography:
  display:
    fontFamily: "\"Avenir LT Std\", kohinoor-thai, sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 81.6px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Avenir LT Std\", kohinoor-thai, sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 76.8px
    textTransform: uppercase
  body:
    fontFamily: "\"Avenir LT Std\", kohinoor-thai, sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 25.6px
  button:
    fontFamily: "\"Avenir LT Std\", kohinoor-thai, sans-serif"
    fontSize: 11px
    fontWeight: 500
    lineHeight: 16.5px
    letterSpacing: 0.55px
    textTransform: uppercase
rounded:
  xs: 5px
  sm: 6px
  md: 7px
  lg: 8px
  xl: 36px
  2xl: 100px
  3xl: 120px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 4px
    height: 48px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 4px
  nav:
    textColor: "{colors.ink-body}"
  nav-link:
    textColor: "{colors.ink-body}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

## Overview

ALLY REIT is the investor website of "ALLY Freehold and Leasehold Real Estate Investment Trust" (title: "ทรัสต์เพื่อการลงทุนในอสังหาริมทรัพย์และสิทธิการเช่าอสังหาริมทรัพย์ อัลไล"). The address `https://www.allyreit.com/` first serves a memorial entry page (a tribute for 13 October with a portrait and an "Enter Site" / "เข้าสู่หน้าหลัก" button); that page is not the brand site, so the measurements here were taken from the real Thai home page `https://www.allyreit.com/th/home`, reached through the entry page's own link.

The home page is a Thai-language investor communication page. A full-width photographic hero shows a render of a community mall with the headline "ร่วมลงทุนและพัฒนา สถานที่แห่งความสุข ให้เติบโตและยั่งยืน" in white over the image, with four translucent pill shortcuts along the bottom edge. Below it a white band opens "เกี่ยวกับ ALLY REIT" (About ALLY REIT) in two columns, followed by "จุดเด่นของ REIT" (REIT highlights) with four key figures in large mint numerals and line icons: 15 projects, 165,038 square metres of net lettable area, 89.7 percent average occupancy and a 9.2 percent annual yield, each with an "as of 30 June 2026" caption. Then come "อสังหาริมทรัพย์ที่ลงทุน" (invested properties) as a bordered logo grid of the properties (Crystal Design Center, The Crystal, ALLY VILLAGE branches), investor corner and latest news.

The tone is calm, institutional and green: teal and mint carry a "sustainable growth" message, and imagery is architectural renders rather than people.

## Colors

`canvas` is #ffffff. `ink` #056967, a deep teal, is the colour of section headings and of the footer background and is the second most-read text colour (657 characters). `ink-body` #35292b, a warm near-black, is the running body and navigation text (493 characters). `primary` #4bcfab is a mint used for the pill buttons ("ดูเพิ่มเติม", "ติดต่อเรา", "สมัครรับข่าวสาร"), for the large statistic numerals and for small accents; `on-primary` is white text. `surface-deep` #045452 is a darker teal measured as a background area in the footer region. `border-beige` #ddd7c8 is the measured border colour of the property logo grid and is also used at low alpha (#ddd7c826) as a section tint.

The "link" variant is a white pill with teal text (#056967) used for "เกี่ยวกับเรา". White text is used over the hero image and on the teal footer. A black layer measured at the viewport size belongs to the dark scrim of a payment-announcement pop-up that was open when the page was captured; it is not a brand colour and is not tokenised. The pop-up itself (a green card announcing an interim distribution) and the cookie control at the lower left are overlays, not brand UI, and are not documented as components.

Bootstrap variables such as --bs-primary #0d6efd exist in the stylesheet and are framework defaults; they are not brand colours.

## Typography

The site loads Avenir LT Std (weights 300, 500, 900 and a regular) for Latin characters and kohinoor-thai (300, 400, 500, 600, 700) for Thai, and a custom icon font named "ally". The CSS stack is `"Avenir LT Std", kohinoor-thai, sans-serif`. Avenir LT Std carried all 2615 measured characters on the page.

Measured scale: `display` 48px / 81.6px at weight 700, uppercase (the hero headline); `display-mobile` 48px / 76.8px at weight 600 (the "เกี่ยวกับ ALLY REIT" heading in the 390px pass); `body` 16px / 25.6px at weight 300; `button` 11px / 16.5px at weight 500 with 0.55px letter-spacing, uppercase. Other measured sizes include 14px, 24px, 36px and 20px. Weight 300 is the dominant text weight (1180 characters), so body copy reads light against bold headings. Avenir LT Std and kohinoor-thai are commercial families; if they are unavailable, any humanist sans with a Thai companion can stand in, but no substitute was measured.

## Layout

The measured page is 1280px wide and 5442px tall. The header is 100px tall, with a logo on the left and a search icon, EN language switch and menu icon on the right (nav text colour #35292b). The hero is full-bleed; below it content sits in a centred container with two-column splits for the About block, a four-column statistic row separated by thin vertical rules, and a five-column bordered logo grid. Measured gaps are 16px (26 uses), 4px and 10px; paddings 12px (57 uses), 4px, 8px and 32px.

## Elevation & Depth

Shadows are light. Three elements carry `rgba(0, 0, 0, 0.1) 0px 0px 40px 0px` (a wide soft glow), one form control carries a Bootstrap focus ring `rgba(13, 110, 253, 0.25) 0px 0px 0px 4px` (a framework default) and one element has `rgba(204, 204, 204, 0.5) 0px 2px 10px 0px`. Depth otherwise comes from imagery, the translucent hero shortcut pills and layering of the teal footer.

## Shapes

Measured radii: 5px, 6px, 7px, 8px (small controls), 36px, 100px, 120px (the button pill), and 50% for round icon buttons. Primary buttons are 48px tall with a 120px radius, rendering as a full pill; the token `pill` records the 9999px equivalent. The logo grid and statistic row use square corners and hairline borders.

## Components

**Primary button.** Mint #4bcfab fill, white 11px uppercase text at weight 500 with 0.55px tracking, 120px radius, 48px high; a small round play-style icon sits at its left end in the capture.

**Link pill.** White fill, teal #056967 text, same type and radius, used on dark photography.

**Navigation.** Header links in #35292b at 16px / 25.6px weight 300; a three-link header with a "Toggle navigation" button is what the mobile pass recorded. The site menu (About Us, Investment Properties, Investors, Sustainability, Activities & Promotions, Newsroom, Contact Us) was read from the page text.

**Statistic block.** Large mint numerals with a unit, a line icon above and a small teal caption below, separated by vertical hairlines.

**Footer.** Teal #056967 background, white text at 20px / 36px, with management-company and trustee details.

## Design System Architecture

No public design system, brand guideline or press kit is linked from the home page (the page text was read and offered none). The de-facto system is a Bootstrap 5 build (the stylesheet exposes the standard --bs-* variables, breakpoints and utility radii) overlaid with brand CSS: Avenir LT Std plus kohinoor-thai, a mint-and-teal palette, pill buttons and a custom "ally" icon font. Brand tokens are therefore expressed in component CSS, not in published variables.

## Do's and Don'ts

- Do keep teal #056967 for headings and the footer and mint #4bcfab for actions and key figures.
- Do pair a 300-weight 16px body with bold uppercase display headings.
- Do present figures with an "as of" date caption, as the highlights row does.
- Don't use Bootstrap default blue #0d6efd as a brand colour.
- Don't document the distribution pop-up, cookie control or the black scrim as brand UI.
- Don't use the memorial entry page's gold-brown (#794a00 measured there) as the site palette; it is a one-day tribute treatment.

## Responsive Behavior

Measured at 390px: the header shows 3 links and a "Toggle navigation" menu button; cards lay out in at most 2 columns; the About heading stays 48px / 76.8px, body stays 16px / 25.6px, and the primary button keeps 11px type, 48px height and a 120px radius. No other mobile layout data was recorded, so the behaviour of the hero, statistic row and logo grid at that width is not measured.

## Iteration Guide

1. Keep tokens as listed; change a value only after re-measuring `https://www.allyreit.com/th/home`.
2. New sections: white canvas, teal #056967 heading at `display` scale, 16px light body in #35292b, one mint pill button.
3. Show numbers in mint with small teal captions and thin vertical dividers.
4. Re-measure with the pop-up closed if exact hero text colours are needed; the capture was taken with an announcement pop-up open.
5. Run `node web/scripts/verify-designs.mjs --slug=ally-reit` after edits.
