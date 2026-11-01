---
version: alpha
name: Dot Property
category: "Thai Brands"
description: "Dot Property (dotproperty.co.th), a Thai-language property portal for buying, renting and listing homes, condos and land. Noto Sans Thai at weights 200 to 500, white and #f3f4f6 surfaces, near-black ink, #2a6b2a green accent text, a declared #4FB84F brand variable, pill-shaped search bar and 8px-radius cards over photography."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#2a6b2a"
  on-primary: "#000000"
  surface-light: "#f3f4f6"
  surface-border: "#e5e7eb"
  ink-dark: "#1f2937"
  ink-mid: "#374151"
  ink-soft: "#4b5563"
  button-primary-bg: "#0000000d"
  brand-green-declared: "#4FB84F"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai Fallback\", system-ui, sans-serif, sans-serif"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 48px
  display-mobile:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai Fallback\", system-ui, sans-serif, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
  subheading:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai Fallback\", system-ui, sans-serif, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai Fallback\", system-ui, sans-serif, sans-serif"
    fontSize: 16px
    fontWeight: 200
    lineHeight: 24px
  button:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai Fallback\", system-ui, sans-serif, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  input:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai Fallback\", system-ui, sans-serif, sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 12px 0px 20px
    height: 60px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 12px 48px
    height: 58px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    borderColor: "{colors.surface-border}"
  footer:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.ink}"
---

## Overview

Dot Property is measured on `https://www.dotproperty.co.th/`, `lang="th"`, titled "ซื้อขาย-ให้เช่า บ้านเดี่ยว คอนโด ทาวน์โฮม ทาวน์เฮ้าส์ ที่ดิน | Dot Property". It is the Thai edition of a property portal. The home page is a classic listings landing page: a transparent top bar over a hero photograph with the logo (a green "dot" wordmark with the tagline "MOVING ASIA ONLINE"), menu items (ซื้อ buy, เช่า rent, ลงประกาศ list, โครงการใหม่ new projects, นายหน้า agents, Awards), a THB currency control, a language control and a login link. The hero headline "ซื้อขายบ้าน คอนโด ออนไลน์" (buy and sell homes and condos online) is white on a darkened skyline-interior photograph, with a sub-line and a pill-shaped search bar: a "ขาย" (sale) selector, a location input with a navigation arrow icon and a green magnifier.

Below the hero are: "โครงการที่น่าสนใจ" (featured projects) as a grid of photo tiles with white text over a dark gradient and a "starting from" price in baht; "ค้นหาบ้านและคอนโด ในทำเลใกล้คุณ" with three tabs (newly listed, most viewed, cheapest) and a horizontal carousel of listing cards (an image, a "new listing" badge with the time since posting, a baht price, bedroom / bathroom / area facts and the location); "พื้นที่ยอดนิยม" (popular areas) as a mosaic of photo tiles with the listing count; and a block about the company with large photographic call-to-action tiles. The tone is plain, informational Thai, with photography doing most of the visual work.

## Colors

The measured palette is neutral. `canvas` #ffffff and `surface-light` #f3f4f6 (the footer and alternating bands) are the main surfaces, with `surface-border` #e5e7eb for borders and a darker band; hero and tile overlays are translucent black (#00000066, #00000080) and are image scrims, not brand surfaces. Text is `ink` #000000 (3,508 characters), `ink-dark` #1f2937 (1,240), `ink-mid` #374151 (216), `ink-soft` #4b5563 (122) and white on photographs (1,940). The extraction's `primary` is #2a6b2a, the color of 58 characters of green text; `on-primary` black belongs to the one detected button, a translucent #0000000d fill (the "ขาย" selector, 60px tall, left side fully rounded).

The site's stylesheet also declares root variables `--primary-color: #4FB84F`, `--accent-color: #00488a` and `--secondary-color: #EB7100`. The capture shows green accents (the wordmark, the search icon, the underline of the active tab), and `brand-green-declared` records the declared #4FB84F; the exact painted values of those accents were not measured, and the blue and orange variables were not seen in measured paint, so they are not tokens. Tailwind's default ring color `rgb(59 130 246/0.5)` is also present and is not a brand color.

## Typography

One family: Noto Sans Thai (fallbacks "Noto Sans Thai Fallback", system-ui, sans-serif), loaded at weights 300, 400, 500 and 700, accounting for all 7,106 measured characters. It covers both Thai and Latin text. The weight distribution is unusually light: 2,912 characters at 300, 2,062 at 200, 1,743 at 500, 322 at 400 and 67 at 600.

Scale: `display` 48px / 48px, weight 500, white, for the hero headline; the section heading (h2, "โครงการที่น่าสนใจ") is 24px / 32px, weight 500 (the value used for `display-mobile`); `subheading` 20px / 24px, weight 500, for tile titles; `body` 16px / 24px, weight 200; `button` 18px / 28px, weight 400; `input` 16px / 24px, weight 300. By character count the sizes are 16px (2,486), 14px (1,846), 18px (1,572), 15px (588) and 20px (289). Footer headings are 14px, weight 500, uppercase.

## Layout

The desktop capture is 1280px wide and 5,635px tall. Content sits in a 1,232px wide container (h2 and body paragraph boxes). The header is a transparent bar on the hero; the hero search bar is centered, with the input measuring 647px wide and 58px tall. The featured-project grid has four tiles in the first row and two in the second; listing cards scroll horizontally with round arrow buttons; the popular-area block is a mosaic with one tall tile and smaller square tiles. The company block uses three large photo tiles. Measured spacing steps are 2, 4, 6, 8, 10, 12, 14, 16, 18 and 20px.

## Elevation & Depth

Shadows are Tailwind-style and light: `rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px` (4 elements), `rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.1) 0px 8px 10px -6px` (2) and a smaller `0px 4px 6px -1px` variant. Depth also comes from dark gradients over photographs and from the white search bar floating over the hero.

## Shapes

Radii on screen: 8px (50 elements, cards and tiles), 4px (40, small tags and badges), 9999px (15, the search bar, the selector and round arrows), 6px (4), and the paired halves `9999px 0px 0px 9999px` and `0px 9999px 9999px 0px` that make the search bar a single pill from the selector to the magnifier.

## Components

**Search bar** — white pill, 58px tall inputs with 12px 48px padding for the icons, Noto Sans Thai 300 16px; the left selector ("ขาย") is 120px wide, 60px tall with padding 0 12px 0 20px and a #0000000d fill. **Project tile** — photograph with a dark gradient, white 20px weight-500 title, a white small price line and a location line, 8px radius. **Listing card** — white, 1px light border, image, a badge with a home icon and "รายการใหม่" (new listing), a bold baht price, facts line and location; heart and menu icons at the top right of the price row. **Tabs** — text tabs with a green underline on the active tab. **Footer** — `surface-light` fill with uppercase 14px weight-500 column headings (เกี่ยวกับ DOT PROPERTY and others).

## Design System Architecture

No public design system, brand guideline or press kit was found: the homepage HTML links none (it links a "brands" page on lifullconnect.com, a parent-company brand listing, not opened and not a design resource) and no search was run. The site is built with Tailwind utility classes (the shipped CSS carries `--tw-*` variables) plus a small set of root variables: `--primary-color` #4FB84F, `--accent-color` #00488a, `--secondary-color` #EB7100, `--background` #ffffff, `--border-color` rgb(210,210,210) and `--gray-light-color` rgb(243,243,243). The de-facto system is Tailwind's neutral gray ramp (#f3f4f6, #e5e7eb, #1f2937, #374151, #4b5563) combined with Noto Sans Thai.

## Do's and Don'ts

Do set Thai text in Noto Sans Thai, light weights (200 to 300) for running text and 500 for titles. Do put white titles over darkened photography with 8px-radius tiles. Do use the pill search bar as the primary action, with the green magnifier. Do keep neutral Tailwind grays for text and borders.

Don't use Tailwind's default ring blue as a brand color. Don't add a heavy filled button color that was not measured; the one detected button is a 5%-black pill. Don't set Thai body copy above weight 500. Don't use the declared #00488a or #EB7100 without measuring where they are painted.

## Responsive Behavior

Measured at a 390px viewport: the h1 drops from 48px to 24px (line height 32px; the box wraps to 80px in a 358px column); the section h2 drops from 24px to 20px (line height 28px); body stays 16px / 24px weight 200 (the paragraph box becomes 336px tall at 342px wide); the header measures 112px tall; the detected call-to-action becomes the "เกี่ยวกับเรา" (about us) link, 14px weight 300, 390px wide and 49px tall with padding 14px 16px, a white fill, #1f2937 text and a 1px #e5e7eb border. Most frequent mobile sizes: 16px, 18px, 13px, 14px and 15px. How the menu collapses and how the carousels behave at mobile width were not measured.

## Iteration Guide

Start from the neutral tokens, add green only for accents (icon, active tab) and keep photography large. New listing surfaces should reuse the 8px card, the baht price in a heavier weight and a one-line fact row. Before using the declared blue and orange variables, measure where they are painted. Dark mode and hover states were not measured for this site.
