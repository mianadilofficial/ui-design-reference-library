---
version: alpha
name: Muang Thai Insurance
category: "Thai Brands"
description: "Muang Thai Insurance (เมืองไทยประกันภัย) Thai homepage: DBHeavent type at 28px/600 headings and 16.1px body, deep teal-navy ink (#154d71), sky-blue primary (#3c83bb) on 40px-radius buttons, pale blue panels (#d6f1ff) on a #f0f2f5 page, white 11.9px-radius product cards with soft shadows."
colors:
  canvas: "#ffffff"
  page-body: "#f5f5f5"
  page-largest: "#f0f2f5"
  ink: "#154d71"
  primary: "#3c83bb"
  on-primary: "#333333"
  surface-2: "#d6f1ff"
  ink-5: "#000000d9"
  ink-6: "#8c8c8c"
typography:
  display:
    fontFamily: DBHeavent, sans-serif
    fontSize: 28px
    fontWeight: 600
    lineHeight: 34.44px
  body:
    fontFamily: DBHeavent, sans-serif
    fontSize: 16.1px
    fontWeight: 400
    lineHeight: 28.98px
  button:
    fontFamily: DBHeavent, sans-serif
    fontSize: 16.1px
    fontWeight: 500
    lineHeight: 38px
rounded:
  xs: 6px
  sm: 7px
  md: 8px
  lg: 10px
  xl: 11.9px
  2xl: 20px
  3xl: 30px
  4xl: 32px
  cta: 40px
spacing:
  s1: 0.01px
  s2: 1px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 8.3px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 0.01px 48px 0px
    height: 56px
    boxShadow: rgba(0, 0, 0, 0.1) 4px 4px 10px 0px
  card:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.xl}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 4px 20px 0px
---

# Muang Thai Insurance — Design System Notes

## Overview
Measured URL: https://www.muangthaiinsurance.com/ , which redirected to https://www.muangthaiinsurance.com/th/home (title "บริษัท เมืองไทยประกันภัย จำกัด (มหาชน) | ยิ้มได้เมื่อภัยมา", language th). Muang Thai Insurance is a Thai non-life insurer; the homepage navigation lists Products (Motor, Travel, Accident, Health, Property, Commercial, Miscellaneous), Services, About Us, News & Activities, Promotions, Contact Us and Investor Relations. The header sits on a pale blue utility strip with a text-size control ("A"), a TH language selector, social icons and an app button ("แอปเมืองไทยเฟรนด์ส"); the primary navigation has the blue square logo with the slogan under it, and a "ซื้อประกันออนไลน์" (buy insurance online) link with a cart icon at the right.

The page reads as friendly and consumer-oriented. A carousel hero shows a dark photographic banner with large yellow-orange display lettering and a translucent gray list of flood-safe parking locations. Below, the tagline in quotation marks, "เมืองไทยประกันภัย ยิ้มได้เมื่อภัยมา" (Muang Thai Insurance, smile when disaster strikes), heads a grid of seven rounded white tiles, each with a blue duotone pictogram carrying a shield-and-check badge: car, accident, travel, health, home and property, business (commercial), and other. A "ผลิตภัณฑ์แนะนำ" (recommended products) section with a short blue underline holds three promotional-artwork cards with a light-blue pill tag ("ประกันรถยนต์", "ประกันการเดินทาง", "ประกันอุบัติเหตุ"), a blue title, two lines of description and an "อ่านเพิ่มเติม" link with a chevron. A "โปรโมชันพิเศษสำหรับคุณ" (special promotions for you) carousel with ruled lines either side of the heading follows. A Messenger chat bubble floats at the right; it is a third-party widget (the page record notes a consent overlay was hidden) and not part of the brand UI.

## Colors
- **Canvas `#ffffff`**: card and header surface. **`page-body` `#f5f5f5`** and **`page-largest` `#f0f2f5`** are the page backgrounds; `#f0f2f5` holds the largest area (10,240 area-weight units), so the page reads as light gray-blue rather than white. Additional light fills measured by area are `#fafafa`, `#f4f6f9` and `#eaf2f8`.
- **Sky-blue `#d6f1ff` (`surface-2`)**: second-largest area (8,141): pale panels and tag backgrounds.
- **Ink `#154d71`**: the dominant text color (1,118 characters): headings, nav labels, section titles. On hover, the small "A"/language buttons invert to a `#154d71` fill with white text.
- **Primary `#3c83bb`**: the fill of the measured CTA ("รู้จักกับ CEO") and also the text color of 671 characters, i.e. links, pill labels and card titles. It is also declared as `--swiper-theme-color` and `--antd-wave-shadow-color` on `:root`, which supports reading it as the site's brand blue.
- **`on-primary` `#333333`**: the text color measured on that primary-filled button. It is a dark gray, not white. `#333333` is also the general body text color (597 characters).
- **`ink-5` `#000000d9`** (Ant Design's standard 85% black) and **`ink-6` `#8c8c8c`** appear in 59 characters each and are utility text colors.

Accent colors in the promotional artwork (yellow-orange lettering, red location pins, red "ซื้อเลย" button in a promo) belong to individual campaigns and were not measured as brand tokens.

## Typography
One family carries the site: **DBHeavent** in weights 300, 400, 500 and 700 (all loaded), with generic sans-serif as fallback; 2,777 characters measured. An `icomoon` icon font is also loaded.

- `display`: 28px / 34.44px, weight 600 (the quoted tagline and section headings).
- `body`: 16.1px / 28.98px, weight 400.
- `button`: 16.1px / 38px, weight 500.

DBHeavent is a condensed Thai/Latin display face from DB Fonts; since it is commercial, a substitute such as Sarabun, Prompt or Noto Sans Thai at slightly larger sizes is a reasonable stand-in (this is a recommendation, not a measurement). The root declares `--font-size` 14px.

## Layout
Document width 1280px, height 4650px. Sections are full-bleed bands alternating between the light gray page color and white or pale blue panels. The category grid is centered and wraps (four tiles in the first row, three in the second, centered), and the product card grid uses three equal cards with about equal gutters. Spacing tokens: 0.01, 1, 6, 7, 8, 8.3, 12, 15, 16 and 20px. The primary button is `0.01px 48px 0px` padded and 56px high; the secondary pill is `8.3px 32px` and 40px high.

## Elevation & Depth
Shadows are soft and offset toward the lower right: `rgba(0, 0, 0, 0.05) 4px 4px 10px 0px` (12 uses, the tile shadow), `rgba(0, 0, 0, 0.1) 0px 4px 20px 0px` (7 uses, the product cards), `rgba(0, 0, 0, 0.1) 4px 4px 10px 0px` (6 uses, buttons), `rgba(0, 0, 0, 0.016) 0px 2px 0px 0px` (2 uses, small controls) and two minor ones. The effect is white cards floating on a gray-blue page.

## Shapes
Rounded corners are a defining trait: 32px (15 uses) and 20px (15 uses), 11.9px (7 uses), `7px 7px 0px 0px` (7 uses, card-image top corners), 6px, 30px (4) and 40px (4). `button-primary` uses the 40px `cta` radius, giving a pill, while product cards use 11.9px (`xl`).

## Components
- **button-primary**: `#3c83bb` fill, `#333333` text, 16.1px/500, 40px radius, 56px tall, `rgba(0, 0, 0, 0.1) 4px 4px 10px 0px` shadow.
- **Secondary button**: an outlined pill with the same soft shadow as the primary one; the extractor reported identical fill and text colors for it, a measurement artifact of an outline style, so it is not declared as a token.
- **card**: white, 11.9px radius, `rgba(0, 0, 0, 0.1) 0px 4px 20px 0px` shadow.
- **Header utility buttons**: 32px-high rounded buttons that invert to navy on hover.
- **Category tile**: white rounded square, duotone icon, bold blue label.
- **Tag pill**: light-blue pill sitting over the bottom edge of the card image.

## Design System Architecture
No public design system exists as far as the opened source shows: https://www.muangthaiinsurance.com/th/home publishes no design-system or brand-guideline page (the pages opened list products, services, news, promotions, legal and social links only), so no search was done. The shipped CSS shows Ant Design influence (`--antd-wave-shadow-color` and the `#000000d9` text color) together with Swiper (`--swiper-theme-color` `#3C83BB`, navigation size 44px), and brand values are applied through component styles rather than a published token set.

## Do's and Don'ts
- Do pair `#154d71` headings with `#3c83bb` links and pills.
- Do use very rounded containers (11.9px cards, 40px buttons) and soft right-bottom shadows.
- Do show insurance lines as duotone pictograms with a shield-check badge.
- Don't put white text on `#3c83bb` buttons without checking contrast; the measured site uses `#333333`.
- Don't treat the floating chat bubble or consent popups as brand UI.
- Don't mix in other families; DBHeavent carries every measured character.

## Responsive Behavior
The page uses Swiper carousels with 44px navigation controls, and a text-size control is provided in the header. A mobile measurement was not separately examined for this slug, so no breakpoints are claimed.

## Iteration Guide
1. Set the page on `#f0f2f5`, cards on `#ffffff` with 11.9px radius.
2. Headings in DBHeavent 28px/600, `#154d71`; body 16.1px at 28.98px line height.
3. Primary action: `#3c83bb`, 40px radius, 56px height, 48px side padding.
4. Use `#d6f1ff` panels and light-blue pills for categories.
5. Keep promotional artwork colorful; keep the interface chrome blue and gray.

## Content and Voice
Microcopy is warm and reassuring and uses the brand slogan as a refrain: the page title, the quoted section tagline and the hero all return to "ยิ้มได้เมื่อภัยมา". Product tiles name the line in two or three words ("ประกันรถยนต์", "ประกันอุบัติเหตุ", "ประกันเดินทาง", "ประกันสุขภาพ"), cards give a short title and a two-line promise, and every card ends with the same quiet "อ่านเพิ่มเติม" link. Imagery is a mix of campaign posters (cars on a mountain road, Eiffel Tower travel scene, smiling family) and flat duotone pictograms; the posters are loud and colorful while the surrounding interface stays restrained, which keeps the brand blue recognizable between campaigns.
