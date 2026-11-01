---
version: alpha
name: SASOM
category: "Thai Brands"
description: "SASOM (Thai streetwear and collectibles marketplace) design system: Noto Sans Thai at 12 to 16px, neutral #f9f9f9 canvas, near-black #18181b login button with 4px radius, pill shortcuts and 12px media tiles."
colors:
  canvas: "#f9f9f9"
  page-body: "#ffffff"
  ink: "#5a5a5a"
  primary: "#18181b"
  on-primary: "#fafafa"
  surface-placeholder: "#e9e9e9"
  ink-strong: "#09090b"
  ink-heading: "#1b1b1b"
  ink-muted: "#767676"
  ink-black: "#0a0a0a"
  primary-hover: "#18181be6"
  button-secondary-bg: "#f2f2f2"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai Fallback\""
    fontSize: 20px
    fontWeight: 700
    lineHeight: 30px
  subheading:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai Fallback\""
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  body:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai Fallback\""
    fontSize: 14px
    fontWeight: 600
    lineHeight: 17.5px
  nav:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai Fallback\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  link:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai Fallback\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans Thai Fallback\""
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 10px
  2xl: 12px
  3xl: 33px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3.5px
  s4: 4px
  s5: 6px
  s6: 8px
  s7: 12px
  s8: 16px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.subheading}"
    rounded: "{rounded.sm}"
    padding: 8px 16px
    height: 36px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink-heading}"
    typography: "{typography.button-secondary}"
    padding: 16px
    height: 56px
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.button-secondary-bg}"
  nav-link:
    textColor: "{colors.button-secondary-bg}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 8px 12px
    height: 36px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
---

# Sasom

## Overview
SASOM is a Thai online marketplace for streetwear, brand-name goods, trading cards and collectibles with authenticity checks; the page title is "SASOM | สะสม ครบจบทุก Streetwear แบรนด์เนม การันตีของแท้ 100%". The measured page is the Thai home (https://sasom.co.th/th). It is a dense, app-like storefront: a black utility strip (Seller Center, ดาวน์โหลดแอป, social icons, ช่วยเหลือ), a white bar with the stacked "SA SOM" logo, tabs for หน้าหลัก and ช้อป, a wide rounded search field, a TH language dropdown, wishlist and bag icons and a black "เข้าสู่ระบบ" button, then a category strip (สำหรับคุณ, ดีลทั้งหมด, ทารัต, สนีกเกอร์, ลักชัวรี่, กีฬา, โทรศัพท์มือถือ, พรีเลิฟ, เครื่องประดับ, ของสะสม, นาฬิกา, มอลล์). Under that is a large rotating promotional banner (an iPhone offer in the capture), a row of round icon shortcuts (SASOM+, All Deals, Ship Now, Giftcard and more), live-stream tiles under "กำลัง LIVE" and "LIVE ที่กำลังจะมา", and product rows ("Faster to You Than Ever", "TCG เทรนด์มาแรง") with prices in baht and units sold. The voice is promotional-commercial and bilingual.

## Colors
The interface is neutral: the page canvas is `#f9f9f9`, content surfaces are white `#ffffff` (`page-body`), grey placeholders are `#e9e9e9`, and a light tint `#f4f4f5` appears on large areas. The primary action color is near-black `#18181b` (login button; hover `#18181be6`, i.e. 90 percent opacity), with `#fafafa` text. Secondary button fill is `#f2f2f2` with `#1b1b1b` text. Text is mid grey `#5a5a5a` (3,386 characters), near-black `#09090b` (3,181), `#1b1b1b` for headings, `#767676` for muted, and `#0a0a0a` on the top strip. Small accents measured in backgrounds and text: red-orange `#ff3000` and `#e31a00` (sale and live markers), `#e6f7e4` pale green tint, and `#ffc8b7`. The root variables follow shadcn/ui HSL tokens (`--primary` `240 5.9% 10%`, `--secondary` `240 4.8% 95.9%`, `--muted-foreground` `240 3.8% 46.1%`, `--destructive` `0 61.9% 44.3%`, `--radius` 0.5rem) plus `--chart-1` to `--chart-5`, `--action` `218.2 39.3% 11%` and `--bottom-nav-h` 3.5rem. `--swiper-theme-color` `#007aff` is a carousel default and not a brand color.

## Typography
Noto Sans Thai carries everything (8,670 measured characters; weights 400, 500, 600 and 700 loaded, with a generated fallback). Section headings such as "กำลัง LIVE" are 20px weight 700 with 30px line-height. Buttons are 14px weight 500 with 20px line-height; body-weight labels are 14px weight 600 with 17.5px line-height; navigation and category tabs are 12px weight 400 with 16px line-height; links are 16px. Most characters are 12px (3,153) or 16px (3,047), then 14px, 10px, 13px, 11px and 20px; letter-spacing of 0.25px or 0.275px is applied to the 10px and 11px badges. The scale is small and dense because the page shows many products at once. Noto Sans Thai is an open font, so no substitution is needed.

## Layout
The desktop capture is 1,280px wide and 5,914px tall. The page has a three-tier header (utility strip, main bar, category strip) followed by full-width content bands. Banners and live tiles run edge to edge inside the page gutter and scroll horizontally with round arrow buttons; product cards are five across with a heart icon and price line. The icon-shortcut row lays out ten circular entries in two rows of five. The root variables define a bottom navigation height (`--bottom-nav-h: 3.5rem`) and a safe-area inset, but whether and where that bar is shown was not measured. Measured gaps are 4px (198 uses), 8px, 16px and 12px; paddings are 12px, 16px, 2px, 4px and 8px.

## Elevation & Depth
The interface is flat. Box shadows are mostly zero-opacity tokens (46 uses) with a few light ones, including `0px 1px 2px` at 5 percent black (8 uses) and a slightly larger 10 percent black shadow. Product cards sit on white against the `#f9f9f9` canvas, separated by background difference rather than shadow. A black 70 percent overlay `#000000b3` and `#0000008c` are used as image scrims.

Visually the capture shows how the three kinds of imagery are kept apart: the hero banner is flat promotional artwork with a dark call-to-action chip, the live tiles are tall vertical video thumbnails with a red LIVE badge in the top-left corner and the seller name underneath, and product cards are white tiles with the item photographed on a clean background, a brand name in bold, a two-line product title, a price in baht with a small green marker and a heart outline at the lower right. Section headings are left-aligned with a small "ดูทั้งหมด" or "ดูเพิ่มเติม" link at the far right, repeated for every row, which gives the long page a regular rhythm.

## Shapes
Rounded geometry dominates: 9,999px (95 uses) for pills and circles, 6px (89) for inputs and many cards, 8px (59), 12px (17) for live and product tiles, 4px for the login button, 10px, 33px and 2px for outliers. Category icons are circles, search is a pill-like field, and image tiles use 12px.

## Components
**button-primary**: `#18181b` fill, `#fafafa` text, Noto Sans Thai 14px weight 500, radius 4px, padding 8px 16px, height 36px (เข้าสู่ระบบ, 80px wide); hover `#18181be6`.
**button-secondary**: `#f2f2f2` fill, `#1b1b1b` text, 16px weight 600, padding 16px, height 56px (the หน้าหลัก tab).
**nav-link**: 12px weight 400 on the black utility strip, text `#f2f2f2`.
**link**: 16px weight 400, `#09090b`.
**text-input**: 12px text, 6px radius, padding 8px 12px, height 36px (the search field).
**footer**: `#f9f9f9` background, `#09090b` text.
The LIVE badge, price chips and sold counters are in-product badges; the grey `#e9e9e9` blocks are image placeholders.

## Design System Architecture
No public design-system or brand-guideline page is linked from the home page. The page is built with Tailwind (the `--tw-*` variables) and shadcn/ui conventions (HSL variables for background, foreground, card, popover, primary, secondary, muted, accent, destructive, border, input, ring, chart-1 to chart-5). The brand adds `--action`, `--disabled` and the layout variables `--bottom-nav-h` and `--safe-bottom` (`env(safe-area-inset-bottom,0px)`). Swiper supplies the carousels (`--swiper-navigation-size` 44px).

## Do's and Don'ts
- Do keep the chrome monochrome (black, white, greys) and let product and live imagery carry the color.
- Do use `#18181b` for the single primary action with `#fafafa` text.
- Do use pills and circles for shortcuts and 12px radius for media tiles.
- Do show price, units sold and the heart on every product card.
- Don't use the Swiper default `#007aff` as a brand color.
- Don't add large shadows; the site relies on tonal layers.
- Don't mistake grey placeholder blocks for card styling.

## Responsive Behavior
At the 390px mobile pass the "กำลัง LIVE" heading remains 20px weight 700 (30px line-height, 93px wide) and the login button measured 12px weight 500 on mobile (14px on desktop). Mobile font sizes by character count: 16px (3,055), 10px (2,861), 14px (1,033), 12px (949), 13px, 11px, 20px. The mobile header lists Seller Center, ดาวน์โหลดแอป, ช่วยเหลือ, EN, TH and เข้าสู่ระบบ. Breakpoint widths were not measured.

## Iteration Guide
1. Use canvas `#f9f9f9`, white surfaces, ink `#5a5a5a` and `#09090b`, primary `#18181b`.
2. Build the header in three tiers: black strip, white bar with pill search, category tabs.
3. Fill the page with horizontally scrolling banners, live tiles and product rows.
4. Keep Thai text at 12px to 16px in Noto Sans Thai.
5. Use red-orange only for sale and live markers.
6. Re-run the gate after changes.
