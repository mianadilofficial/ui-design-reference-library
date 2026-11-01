---
version: alpha
name: BaNANA (Banana IT)
category: "Thai Brands"
description: "BaNANA (bnn.in.th), Com7's Thai IT and gadget retailer: a dense promo-driven storefront on #ffffff with #f8f8f8 header strip, banana-yellow #ffdd00 CTAs and search accents, #252525 ink, red #f1574f prices, SukhumvitSet type at 12 to 16px, 4px buttons and 8px product cards."
colors:
  canvas: "#ffffff"
  ink: "#252525"
  primary: "#ffdd00"
  on-primary: "#252525"
  surface-header: "#f8f8f8"
  black: "#000000"
  ink-subtle: "#00000073"
  ink-70: "#000000b3"
  price-red: "#f1574f"
  badge-red: "#ea001f"
  ink-disabled: "#bababa"
  border-hairline: "#00000014"
typography:
  display:
    fontFamily: SukhumvitSet, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  display-mobile:
    fontFamily: SukhumvitSet, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  subheading:
    fontFamily: SukhumvitSet, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 12px
    fontWeight: 600
    lineHeight: 15.6px
  body:
    fontFamily: SukhumvitSet, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 19.6px
  button:
    fontFamily: SukhumvitSet, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
  input:
    fontFamily: SukhumvitSet, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 2px
  sm: 4px
  md: 5px
  lg: 7px
  xl: 8px
  2xl: 16px
  3xl: 56px
  4xl: 104px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 16px
    height: 39px
    borderColor: "{colors.primary}"
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 4px 16px 4px 8px
    height: 34px
    borderColor: "{colors.black}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.surface-header}"
    textColor: "{colors.ink}"
    padding: 8px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  text-input:
    textColor: "{colors.ink-subtle}"
    typography: "{typography.input}"
    height: 21px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-subtle}"
    rounded: "{rounded.xl}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

BaNANA is the online store of Banana IT, the Thai retailer of phones, laptops, accessories and gadgets whose footer reads "© Copyright 2026 Com7 Public Company Limited All Rights Reserved." The site (bnn.in.th, redirecting to /th) is a Thai-language, promotion-first marketplace: nearly every pixel is a campaign banner, a product card or a service promise, and the interface itself is deliberately quiet so the promo art can shout.

The page opens with a thin #f8f8f8 utility strip carrying "จัดสเปคคอม E-QUIP" (PC builder), "ค้นหาร้านใกล้คุณ" (find a store near you) and a "TH" language switch. Below it the main header holds a hamburger icon, the black-and-yellow BaNANA banana logo, a category selector ("ทั้งหมด", all), a wide search field with a yellow outline and a small yellow "ค้นหา" (search) button, a login link ("เข้าสู่ระบบ") and a cart icon. A full-width hero carousel follows with brand campaign art (a Samsung Halloween sale in the earlier capture, an iPhone promotion in the later one), then a strip of three smaller promo banners with dots below.

The commerce rhythm repeats down the page. A "FLASH SALE" module has an orange-to-yellow gradient panel with a countdown ("Ends in...", hours, minutes, seconds) and a yellow "ดูเพิ่มเติม" (see more) button, beside white product cards. After that come product rows with section titles ("สินค้าเข้าใหม่", new arrivals, followed by a small "ดูทั้งหมด" link), multi-banner mosaics for brands (HUAWEI, vivo, Infinix, HONOR), and rows of four or five product cards. Footer promises sit at the bottom: "ส่งฟรีทั่วไทย" (free delivery nationwide, with the condition "ช้อปครบ 3,000.- ขึ้นไป"), "ส่งด่วนภายใน 3 ชั่วโมง", "รับเองที่ร้าน" and "เปลี่ยน คืน ง่าย ภายใน 7 วัน*".

Tone is retail-friendly Thai with English product names kept verbatim (for example "TECHPRO USB-C to Lightning Cable 30W 1M."). Prices use the baht sign with a space and comma thousands ("฿ 35,999"), shown in red, with a struck-through grey old price below. A notification-permission dialog ("เปิดก่อน! ได้เปรียบ") covered the capture and a PDPA consent bar was hidden by the extractor; neither is documented as brand UI.

## Colors

The identity is banana yellow on white, with red reserved for money.

- **primary #ffdd00** — the CTA fill ("ดูเพิ่มเติม"), the border of the search field and the small search button, the cart icons on cards, and the stripe that frames product cards in the capture. It also appears 66 times in the CSS.
- **on-primary / ink #252525** — the most-read text color (5205 characters) and the label color on yellow. It is a softened black, not pure #000000.
- **canvas #ffffff** — page and card surfaces (17511 area units).
- **surface-header #f8f8f8** — the utility strip and header band, plus the general page backdrop around sections (5673 area units).
- **black #000000** — secondary-button border and some text (754 characters); also the logo letterforms.
- **ink-subtle #00000073** — second most-read text color (4997 characters): product titles and secondary information on cards, and the search placeholder.
- **ink-70 #000000b3** — 240 characters of stronger secondary text.
- **price-red #f1574f** — 630 characters; the price numbers on product cards.
- **badge-red #ea001f** — background of the discount badges in the card corner ("-฿ 1,000"), about 28 area units.
- **ink-disabled #bababa** — 116 characters of pale grey text, as in the struck-through previous price.
- **border-hairline #00000014** — 7 area units and 58 occurrences in the CSS; the fine divider and card outline color.

The shipped CSS lists more colors with their counts: #eba614 (45), #d73d3d (27), #3ec36f (8), #fff6bf (8) and #ffee7f (6); their elements were not identified in the measurement, so they are not tokenized. The `--com7-*` custom properties (#fffbde body background, #fff6bf user bubble) belong to the Com7 AI chat widget and are not brand tokens. Swiper's default #007aff is a carousel library default.

## Typography

One typeface family carries the whole interface: **SukhumvitSet**, self-hosted as TTF files in four weights (400 Text, 500 Medium, 600 SemiBold, 700 Bold) with `font-display: swap`, and a system fallback stack: -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif. A second face, AngsanaNew, is declared in the stylesheet; no measured text uses it. SukhumvitSet covers both Thai and Latin text in the measured copy, which is why Thai headings and English product names share one family. If the licensed font files are unavailable, the site names no substitute; the system stack above is its own fallback.

Hierarchy is created by weight and color, not by large sizes. By character count: 16px (5733), 12px (4970), 15px (735), 14px (594), 24px (154), 20px (19) and 32px (6). Weights are 500 (5182), 400 (4788), 700 (1337) and 600 (904).

- **display — 16px / 24px, 500.** The measured top "heading" text, the category selector label "ทั้งหมด". The extractor found no h1 element on the page; the largest measured sizes are 24px (154 characters) and 32px (6 characters).
- **body — 14px / 19.6px, 500.** Body copy, footer text.
- **subheading — 12px / 15.6px, 600.** Small headings such as "Ends in..." and card labels.
- **button — 14px / 21px, 600.** Button and link labels, with a 0.14px letter spacing on 5 characters at 14px.
- **input — 14px / 21px, 400.** The search field.

## Layout

The desktop page is 1280px wide and 6199px tall. It is built from horizontal bands: header, hero carousel, promo strip, flash-sale module, product rows and banner mosaics, each with its own horizontal carousel arrows. Product rows hold four or five cards across; banner mosaics pair one tall banner with two stacked ones. The compiled CSS declares container maximums of 1176px and 1680px.

Spacing measured is small and dense: gaps of 4px (218 occurrences), 2px (24), 10px (5) and 6px (2); paddings of 16px (286), 8px (194), 10px (55), 4px (28), 12px (15), plus large structural paddings of 238px (72), 165.594px (17) and 183.859px (14). Cards are 262px wide and 436px tall in the extraction, and the page background alternates between #ffffff and #f8f8f8 sections.

## Elevation & Depth

Depth is mostly flat. The extraction measured one box shadow on the page: `rgba(0, 0, 0, 0.3) 0px 0px 4px 0px`. The CSS also declares several soft shadows (for example `0 .125rem .5rem 0 hsla(0,0%,53.3%,.2)`, `0 .5rem 1.5rem 0 hsla(0,0%,53.3%,.2)` and a yellow focus ring `0 0 0 .1875rem rgba(255,221,0,.25)`), but where they apply was not measured. Separation instead comes from white cards on #f8f8f8 bands, yellow borders (12 measured, #ffdd00), a 1px #00000014 hairline, and gradient promo panels. Card tops carry a yellow banner strip ("เฉพาะที่ BaNANA Online") that acts as a frame.

## Shapes

Corners are small and consistent. The most measured radii are 4px (160 occurrences; buttons) and 8px (132; cards), then `0px 0px 8px` (83; bottom-rounded elements such as card footers), 7px (15), 5px (12), 2px (1), and one each of 56px and 104px pill shapes. The CSS also lists 16px, 24px, 10px, 15px, 6px, 3px and 20px. Buttons are 4px-radius rectangles, not pills. Search-field and search-button shapes are rounded and yellow-outlined; the pill values 56px and 104px each appear once.

## Components

**Primary button.** "ดูเพิ่มเติม": fill #ffdd00, 1px #ffdd00 border, text #252525, SukhumvitSet 600 at 14px / 21px, radius 4px, padding `8px 16px`, height 39px, 120px wide. At the 390px mobile pass the same button measures 16px / 24px, height 42px.

**Secondary button.** "ค้นหาร้านใกล้คุณ": transparent fill, 1px #000000 border, text #252525, radius 4px, padding `4px 16px 4px 8px` (an icon sits in the left padding), height 34px, 151px wide.

**Navigation.** A 36px utility strip (`padding: 8px 0px`) on #f8f8f8 with 14px / 600 links, above the main header.

**Product card.** White (#ffffff), radius 8px, 262px by 436px: a yellow-framed brand banner, product photo, title and specs in #00000073, red price, a grey struck-through previous price, a yellow cart button at the lower right and a red discount badge at the upper right.

**Search field.** 14px / 21px, placeholder color #00000073, yellow outline, with a small yellow search button.

**Footer.** Four service promises, help and legal link groups, app-store badges, social links, and "Verified by" badges (DBD Registered, OCPB, Mastercard, Visa), as listed on the page.

Hover and focus states were not captured (`hover` is empty).

## Design System Architecture

No public design system or brand guideline exists for BaNANA. The Thai home page https://www.bnn.in.th/th was opened; its footer offers careers, legal and app-download links only, with no brand, press or design-system page.

The de-facto system is a Nuxt application: stylesheets live under `/_nuxt/` (`app.c4e0c8b.css`, `vendors/app.aeac4ef.css` and per-page chunks) and the root declares only widget variables (`--com7-*`, `--swiper-*`, `--client-width: 1280px`, `--app-min-vh`). Colors, sizes and radii are written as literals in the compiled CSS, not as design tokens, which is why tokens here come from measured computed styles. The stylesheet declares SukhumvitSet in four weights and AngsanaNew. Breakpoints are expressed in rem: 87 rules at `min-width: 64rem`, 4 at 48rem, 2 at 120rem, one `max-width: 63.9375rem`, plus 600px and 480px queries.

## Do's and Don'ts

- Do use #ffdd00 for the single primary action per module and for search and cart accents, with #252525 text.
- Do show prices in #f1574f and previous prices in light grey with a strike-through.
- Do use 4px radius for buttons and 8px for cards.
- Do keep type small and weight-driven: 12px, 14px and 16px at 400 to 700, one family throughout.
- Do let campaign art carry the color; keep page chrome white and #f8f8f8.
- Don't use white text on yellow; the measured label color is #252525.
- Don't use pill buttons; the pill radii appear once each.
- Don't treat the notification-permission dialog, the PDPA consent bar or the Com7 AI chat widget variables as brand UI.
- Don't invent heading sizes above 24px for section titles; 32px was measured only 6 times.

## Responsive Behavior

Measured at a 390px mobile pass: the primary button grows to 16px / 24px (height 42px, same 4px radius and `8px 16px` padding, still 120px wide), footer copy is 12px / 15.6px weight 600 with `0px 32px` padding, and the header measures 61px high. Most common mobile sizes are 14px (5433 characters), 12px (5083), 15px (735), 16px (269) and 20px (179).

The compiled CSS declares its main breakpoint as `@media (min-width: 64rem)`; the markup also includes separate desktop and mobile hero banner images linked to /mkt/ campaign pages, as reported by the opened page. How cards and rows reflow at mobile widths was not measured, and no mobile capture exists.

## Iteration Guide

1. Start with #ffffff canvas, #f8f8f8 header band, #252525 ink and #ffdd00 as the only action color.
2. Set everything in SukhumvitSet (or the stated system fallback) at 12, 14 and 16px, weights 400 to 700.
3. Build product cards at 8px radius with #00000073 secondary text, #f1574f prices and a #ea001f badge.
4. Make the yellow "ดูเพิ่มเติม" button 39px tall with `8px 16px` padding and 4px radius.
5. Keep banner art full-bleed and chrome quiet; add carousel arrows and dots, not shadows.
6. Re-measure hover, focus and mobile reflow before documenting them.
7. Gate with `node web/scripts/verify-designs.mjs --slug=banana-it`.
