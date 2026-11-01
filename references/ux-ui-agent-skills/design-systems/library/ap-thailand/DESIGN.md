---
version: alpha
name: AP Thai
category: "Thai Brands"
description: "AP Thai (AP Thailand) Thai-language home: white canvas with #f5f5f7 bands, AP typeface, brand red #921d1e pill buttons at 9999px radius, 36px-radius project cards, gray #6b6b70 body text, warm #f5f0ea section surfaces, real-estate listings."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f5f7"
  ink: "#6b6b70"
  primary: "#921d1e"
  on-primary: "#ffffff"
  surface-warm: "#f5f0ea"
  ink-strong: "#000000"
  ink-deep: "#222229"
  price-red: "#c81e1e"
  hairline: "#ededf1"
  button-secondary-bg: "#921c1e"
  card-border: "#00000014"
typography:
  display:
    fontFamily: AP, ui-sans-serif, system-ui, Arial, sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 56px
  display-mobile:
    fontFamily: AP, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  heading:
    fontFamily: AP, ui-sans-serif, system-ui, Arial, sans-serif
    fontSize: 30px
    fontWeight: 400
    lineHeight: 45px
  subheading:
    fontFamily: AP, ui-sans-serif, system-ui, Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
  body:
    fontFamily: AP, ui-sans-serif, system-ui, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  button:
    fontFamily: AP, ui-sans-serif, system-ui, Arial, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 20px
  nav:
    fontFamily: AP, ui-sans-serif, system-ui, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: AP, ui-sans-serif, system-ui, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 10px
  md: 16px
  lg: 24px
  xl: 25.4px
  2xl: 26px
  3xl: 28px
  4xl: 36px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.4xl}"
    borderColor: "{colors.card-border}"
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 40px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(196, 82, 77, 0.3) 0px 4px 15px 0px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 10px 0px
    height: 40px
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
---

## Overview

The measured page is apthai.com/th, the Thai-language home of AP (Thai) Public Company, a residential developer (house, townhome and condominium projects). The page is 1280px wide and 7773px tall. A consent dialog, scrim and promotional pop-up were present in the first capture; the extractor's second run hid them (it records `consentOverlaysHidden: scrim body`), so the values below come from the underlying page. From the top: a header with a menu button, the AP logo and an AI-assistant prompt "อยากได้บ้านแบบไหน...พิมพ์บอกเราที่นี่" with a search field and a red "ถามมาได้เลย" button; a large promotional hero ("LEADER'S DEAL No.1" with price call-outs); a deep-red "AP CODE" band ("หลักการ และ มาตรฐาน ในการทำงานแบบ AP") with a white "ดูเพิ่มเติม" button; the headline "AP ครบจบทุกความต้องการ / บ้านเดี่ยว ทาวน์โฮม หรือคอนโด" above pill-shaped filter tabs (โครงการใหม่, โครงการพร้อมอยู่, โครงการใกล้ฉัน, ใกล้รถไฟฟ้า, ใกล้ทางด่วน, ลงทุนปล่อยเช่า, ครอบครัว); a row of project cards (THE CITY, LIFE, ASPIRE, CENTRO and others) each with a rounded photo, project name, location, a red price line, three small icon-led facts, a red "ดูข้อมูลโครงการ" pill and a green LINE button; then a lifestyle section with arch-topped photographs, a promotions slider, a blog row and a mega-footer of project links.

It is a busy, commercial property portal. Red is the one brand color, softened by pale gray and cream surfaces and generous rounded photography.

## Colors

`canvas` is {colors.canvas} (#ffffff). `page-largest` ({colors.page-largest}, #f5f5f7) is the largest background area (weight 2930), and `surface-warm` (#f5f0ea) is a cream band (991). A further cream (#f8f7f3) is measured with weight 513 and is not tokenized. `primary` is {colors.primary} (#921d1e, a deep red) with white text; a nearly identical #921c1e (`button-secondary-bg`) fills the secondary buttons. The measured text colors are `ink` #6b6b70 for most body text (4259 characters), `ink-strong` #000000 for headings and names, `ink-deep` #222229, `price-red` #c81e1e for the price lines, and #111827 and #333333cc in small amounts. `hairline` is #ededf1 and `card-border` is a 8%-alpha black (#00000014). Consent-dialog backgrounds (#00000080 scrim, #000000bf) are not brand colors and are not tokenized. The stylesheet declares Swiper's default theme color #007aff (`--swiper-theme-color`), which is a library default and is not used as a brand color here.

## Typography

One proprietary family, "AP", is loaded at weights 400, 500 and 700; the stack is `AP, ui-sans-serif, system-ui, Arial, sans-serif`.

- `display` (h1): AP 500, 36px, 56px line height.
- `heading` (h2): AP 400, 30px, 45px line height.
- `subheading`: AP 700, 16px, 20px line height.
- `body`: AP 400, 12px, 16px line height (the card facts; 14px body at 20px line height is measured on paragraph text).
- `nav`: AP 400, 16px, 24px line height.
- `button`: AP 500, 20px, 20px line height; `button-secondary` 14px, weight 500.

By characters, 12px dominates (4253), then 16px, 14px, 18px and 36px. The site specifies no substitute beyond the system stack. Display and heading line heights are 1.56 (56px on 36px) and 1.5 (45px on 30px) of the font size.

## Layout

The page uses a centered container with a tab row, a four-up card row and full-bleed promotional bands. Spacing values measured are 2, 4, 6, 7, 8, 10, 12, 16, 20 and 24px. Project cards are four equal columns, each a white rounded card with a photograph filling the top. The red AP CODE band and the footer span the whole width. Section backgrounds alternate between #f5f5f7, white and cream.

## Elevation & Depth

Cards are almost flat: a hairline border of #00000014 and a very light surface, with 4 shadow declarations of a soft red glow (`0 0 20px 4px #eb827880, 0 0 8px 2px #eb827859`). The Tailwind ring placeholders account for 66 of the shadow declarations and resolve to no visible shadow. The primary button has a tinted shadow `rgba(196, 82, 77, 0.3) 0px 4px 15px 0px` (measured on the "ถามมาได้เลย" button).

## Shapes

Shape is the signature: pill buttons and tabs (9999px, 40 uses), very round cards (36px, 15 uses, the `4xl` radius), and 4px, 16px, 24px and 32px radii elsewhere. Photographs inside cards are rounded to match; the lifestyle row uses arch-topped photographs. The secondary white button "ดูเพิ่มเติม" is the exception, with a 4px radius in the hover capture.

## Components

- `button-primary`: {colors.primary} fill, white AP 500 20px text, pill (9999px), 40px tall, padding 0px 16px, with the tinted shadow above.
- `button-secondary`: {colors.button-secondary-bg} fill, {colors.page-largest} text, AP 500 14px, pill, 40px tall, used as "ดูข้อมูลโครงการ" on cards.
- `card`: white fill, {colors.card-border} border, 36px radius, project photo, bold name (AP 700), location line, price in {colors.price-red}, icon-led facts at 12px.
- Filter tabs: pill outlines with a small icon; the active tab is red-outlined with a red label.
- `link`: {colors.ink-strong} AP 400 16px.

The generated nav and nav-link tokens (white text with a transform matrix) were dropped because they describe the hidden mobile-menu overlay, and the generated card textColor (white on white) was replaced with {colors.ink-strong}, a measured heading color.

## Design System Architecture

No public design-system or brand-guideline page was found from the opened home page. The site is a Tailwind build (`--tw-*` variables) with Swiper sliders (`--swiper-navigation-size: 44px`). The brand look is carried by the custom AP typeface, the red #921d1e and the pill and 36px radius shapes. The AP CODE band shows the brand's own sub-identity ("THE CODE OF Living Quality"). Source: [apthai.com/th](https://www.apthai.com/th).

## Content and Imagery

The imagery is architectural and aspirational: rendered facades of detached houses and condominium towers, a pool-and-landscape aerial view of a project, a couple signing keys, and family scenes in a street of houses. Photographs are cropped with large radii inside cards and with arch-topped masks in the lifestyle row. Promotional banners are illustrated and bright red with gold numerals. Microcopy is Thai and direct: a question as the page prompt ("อยากได้บ้านแบบไหน"), prices stated as "ราคา" or "เริ่มต้น" with the amount in million baht, and a green LINE shortcut on every card for chat contact.

## Do's and Don'ts

- Do use the deep red #921d1e for the one primary action per section and for prices in #c81e1e.
- Do use pills for buttons and filters, and 36px for cards.
- Do keep body copy gray #6b6b70 and names black.
- Do use soft pale gray and cream bands to separate sections.
- Don't use the consent dialog's dark scrim or its buttons as brand components.
- Don't use the library blue #007aff.
- Don't use sharp corners on cards or main buttons.

## Responsive Behavior

Measured at 390px: the largest text is the 32px, weight 700 AI-prompt line "อยากได้บ้านแบบไหน...พิมพ์บอกเราที่นี่" (40px line height, color #222229); the AP CODE h2 drops from 30px to 24px (28.8px line height); body text is 14px on 20px line height in black. Navigation behavior, the card column count and spacing at mobile width were not measured in structured form.

## Iteration Guide

1. White and #f5f5f7 grounds; body #6b6b70; names #000000.
2. Primary: #921d1e pill, 40px tall, AP 500 20px, soft red shadow.
3. Cards: 36px radius, #00000014 border, red price line.
4. Headings in AP 500 36px / 30px with 1.5 line height for Thai.
5. Run `node web/scripts/verify-designs.mjs --slug=ap-thailand` after edits.
