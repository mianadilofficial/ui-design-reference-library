---
version: alpha
name: True Corporation (True-dtac)
category: "Telecom"
description: "True Corporation Thai home page (true.th, True-dtac): white and #f9f9fc canvas, True red #e00000 pill buttons with 100px radius, slate ink #303c46, BetterTogether typeface, 24px-radius cards with a soft blue-grey shadow and a 60px-radius search field."
colors:
  canvas: "#f9f9fc"
  page-body: "#ffffff"
  ink: "#303c46cc"
  primary: "#e00000"
  on-primary: "#ffffff"
  surface-soft: "#f8f9fa"
  ink-strong: "#303c46"
  link-blue: "#007ad0"
  ink-nav: "#333333"
  hairline: "#dddddd"
  text-input-text: "#000000de"
  text-input-border: "#f0f0f3"
  card-text: "#595959"
  hover-red: "#e60012"
typography:
  display:
    fontFamily: BetterTogether
    fontSize: 32px
    fontWeight: 500
    lineHeight: 44.8px
  display-mobile:
    fontFamily: BetterTogether
    fontSize: 24px
    fontWeight: 500
    lineHeight: 33.6px
  subheading:
    fontFamily: BetterTogether
    fontSize: 18px
    fontWeight: 600
    lineHeight: 27px
  body:
    fontFamily: BetterTogether
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  button:
    fontFamily: BetterTogether, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  link:
    fontFamily: BetterTogether
    fontSize: 20px
    fontWeight: 500
    lineHeight: 28px
  input:
    fontFamily: BetterTogether
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3.6px
  sm: 4px
  md: 8px
  lg: 15px
  xl: 16px
  2xl: 20px
  3xl: 24px
  4xl: 60px
  cta: 100px
  pill: 9999px
spacing:
  s1: 2px
  s2: 2.4px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 8px
  s8: 9.92px
  s9: 10px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 10px 20px
    height: 40px
  link:
    textColor: "{colors.link-blue}"
    typography: "{typography.link}"
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.4xl}"
    padding: 12px 16px
    height: 50px
    borderColor: "{colors.text-input-border}"
  card:
    textColor: "{colors.card-text}"
    rounded: "{rounded.3xl}"
    boxShadow: rgba(129, 148, 166, 0.1) 1px 2px 10px 6px
---

## Overview

The measured page is `https://www.true.th/`, the Thai-language home page of True Corporation, titled "ทรู ดีแทค เพื่อชีวิตที่ดีกว่า บนเครือข่ายอัจฉริยะอันดับ 1 | True-dtac" ("True dtac, for a better life on the No. 1 smart network"). It is a consumer telecom and device storefront, 6,877px tall with 1,148 visible elements. A thin utility row carries "บริษัทของเรา" (our company), "ลูกค้าองค์กร" (enterprise customers) and "ค้นหาทรูช็อป" (find a True shop) at the left, and at the right a True mark with "แอปทรู" (True app), a two-state Thai/Eng switch (Thai active, dark) and an avatar. Below it a white bar holds the red lowercase "true" logo and the menu: แพ็กเกจโปรโมชัน, เน็ตบ้าน, ออนไลน์สโตร์, บริการลูกค้า, สิทธิพิเศษ, เครือข่ายและเทคโนโลยี, plus a search icon.

The first screen is a full-width promotional carousel, a split of a silver "iPhone 18 Pro" visual and a hot-pink and red "True | dtac 5G" offer panel, with dot pagination under it. A row of nine icon shortcuts (beautiful numbers, mobile packages, postpaid, top-up, devices and accessories, bill pay, privileges, see more) sits above "โปรโมชันพิเศษ" (special promotions), a carousel of tall poster cards with a blue "ดูเพิ่ม" (see more) link, then "สินค้าขายดี" (best sellers), a row of product cards with struck-through list prices, large sale prices in baht and red discount tags (-15%, -25%, -37%, -27%). A dark photographic band, "แพ็กเกจเสริมสำหรับคุณ" (add-on packages for you), closes the measured area with red and white pill tabs and photo cards. The tone is retail-promotional: big numerals, short Thai headlines, dense offer posters.

## Colors

`{colors.canvas}` is a cool off-white (#f9f9fc, 11,251 area units) and `{colors.page-body}` is white (#ffffff, 12,612 units), the two surfaces that alternate behind cards. `{colors.surface-soft}` (#f8f9fa) is a third near-white. Text is slate: `{colors.ink}` (#303c46cc, an 80%-opacity slate, 2,234 characters), `{colors.ink-strong}` (#303c46, 1,720 characters), `{colors.ink-nav}` (#333333) and `{colors.card-text}` (#595959). Input text is `{colors.text-input-text}` (#000000de).

The brand action colour is True red, `{colors.primary}` (#e00000), filling the "รับสิทธิ์เลย" (claim the offer) buttons with white `{colors.on-primary}` labels, discount tags and the red tab pill. Measured hover on header links shifts the text from #333333 to `{colors.hover-red}` (#e60012, measured in the hover pass). `{colors.link-blue}` (#007ad0, 204 characters) colours "ดูเพิ่ม" links. Lines are `{colors.hairline}` (#dddddd) and input borders `{colors.text-input-border}` (#f0f0f3). A pale bg #f3f3f6 and a brown-grey #a08c89 also appear in the area list; black (#000000, 1,907 units) fills the dark band.

## Typography

One family, BetterTogether (400, 500 and 700 loaded), covers 5,878 measured characters. Section headings such as "โปรโมชันพิเศษ" (`{typography.display}`) are 32px weight 500 on a 44.8px line; card group titles (`{typography.subheading}`) are 18px weight 600 on 27px; the "ดูเพิ่ม" link (`{typography.link}`) is 20px weight 500; buttons (`{typography.button}`) are 14px weight 500 on 20px; inputs (`{typography.input}`) are 16px; and small descriptive text (`{typography.body}`) is 12px on 18px.

Weights split 400 (3,320 characters), 500 (2,247), 700 (217) and 600 (94). Sizes run 12px, 16px, 14px, 20px, 32px, 24px, 18px and 13px. Thai text has no letter-spacing adjustment (normal everywhere measured). Prices and promotional numerals inside posters are image artwork, not live text.

## Layout

Content is left-aligned in a wide container; carousels bleed past the right edge to hint at more cards. The header is two rows. Measured gaps cluster on 8px (144 uses), 16px (42), 4px (26) and 32px (18); paddings are led by 16px (107 uses), then 8px, 12px, 4px, 20px, 10px and 44px (14). Several cards are visible per carousel row at desktop width.

The measured spacing tokens run from 2px to 12px at the fine end; larger steps in use are 16px, 24px, 32px and 40px.

## Elevation & Depth

Cards carry a single soft shadow, `rgba(129, 148, 166, 0.1) 1px 2px 10px 6px`, measured on 35 elements, a blue-grey tint with a wide spread. Other shadows are minor: `rgb(255, 255, 255) 0px 0px 3px 0px` (5), `rgba(0, 0, 0, 0.08) 0px 2px 4px 0px` and `rgba(0, 0, 0, 0.1) 0px 1px 3px 0px` (1 each). Borders are used sparingly: #dddddd (2 elements), #f0f0f3 (1, the search field), #e00000 (1) and a translucent white #ffffff1a (1).

## Shapes

Shape is generously rounded. 24px (`{rounded.3xl}`) is the dominant radius with 53 elements (cards), 16px (`{rounded.xl}`) on 29, 100px (`{rounded.cta}`) on 17 (buttons), 8px on 13, 20px on 12 and the top-rounded `24px 24px 0px 0px` on 12 (poster tops). The search field uses 60px (`{rounded.4xl}`), tiny tags 3.6px and 4px, and avatars and icon circles 50%. A 166.667px radius appears on 6 elements.

## Components

**Primary button.** `{colors.primary}` fill, white 14px weight 500 label, padding 10px 20px, 40px tall, 100px radius ("รับสิทธิ์เลย", repeated six times among the candidates).

**Text input (search).** White, 16px text, 50px tall, 12px 16px padding, 60px radius, 1px #f0f0f3 border.

**Card.** 24px radius, the soft shadow, 16px padding; poster cards are tall (469px in the measurement) with an image on top.

**Link.** `{colors.link-blue}` 20px weight 500 ("ดูเพิ่ม").

**Tabs.** Pill tabs in red and white on the dark band.

**Discount tag.** Red rounded rectangle with white numerals at the bottom right of product cards.

**Language switch.** Two-segment pill, Thai active in dark, Eng light.

## Design System Architecture

No public design-system or brand-guideline page was opened. The root variables on the page are only framework defaults (Tailwind-style `--font-sans`, `--font-mono`, `--default-font-family`) and a carousel library's tokens (`--swiper-theme-color: #007aff`, `--swiper-navigation-size: 44px`, plus an `--f-*` set from a lightbox library). None are brand tokens, and the blue #007aff must not be used as a brand colour. The system is therefore the de-facto one visible in rendered values: a single typeface, a red action colour, a slate text ramp, 24px card radii and a shared soft shadow.

Values are consistent across promotions, product cards and add-on packages; component names are not exposed in the measured data.

## Do's and Don'ts

- Do use True red (#e00000) for the primary pill action and for discount tags.
- Do round cards at 24px and buttons at 100px.
- Do use the slate text ramp (#303c46 at 80% and 100%) rather than pure black.
- Do use the single soft blue-grey shadow on cards.
- Don't introduce additional accent hues for UI; promotional posters carry their own artwork.
- Don't use the carousel library's #007aff as a brand colour.
- Don't set Thai text with added letter-spacing.

## Responsive Behavior

The 390px mobile pass recorded the section heading at 24px weight 500 on a 33.6px line (down from 32px), body text at 12px on 18px, and the primary button unchanged (14px weight 500, 40px tall, 100px radius). The most common mobile sizes are 12px (2,791 characters), 16px (1,229), 14px (692), 20px (360), 24px (193) and 18px (56). Column counts, menu collapse and carousel behaviour on mobile were not measured.

## Iteration Guide

1. Alternate `{colors.canvas}` and white `{colors.page-body}` sections.
2. Text in `{colors.ink-strong}` or `{colors.ink}`; links in `{colors.link-blue}`.
3. One red 40px pill per offer, 100px radius.
4. Cards at 24px radius with the 1px 2px 10px 6px blue-grey shadow.
5. Headings in BetterTogether 500 at 32px; body at 12px to 16px.
6. Keep gaps on the 8px base (8, 16, 32).
