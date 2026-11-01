---
version: alpha
name: "DoHome"
category: "Thai Brands"
description: "DoHome is a Thai home-improvement retailer whose Tailwind v4 storefront uses Prompt, a #f26529 orange primary with a #f15a24 promo panel, #343a40 ink on #f8f9fa and white surfaces, 10px-radius cards and add-to-cart buttons, and one soft 0 4px 12px shadow."
colors:
  canvas: "#ffffff"
  page-largest: "#f8f9fa"
  ink: "#343a40"
  primary: "#f26529"
  on-primary: "#ffffff"
  surface-promo: "#f15a24"
  surface-footer: "#f5f5f5"
  ink-grey: "#4d4d4f"
  ink-red: "#e7000b"
  ink-blue: "#3465d5"
  hairline: "#e0e0e3"
  orange-50: "#fef3ed"
  orange-100: "#fde7db"
  orange-200: "#fbcfb7"
  orange-700: "#e04e0f"
  orange-800: "#b23f0c"
  orange-900: "#832f09"
  orange-bg-light: "#fff4ec"
  teal: "#50c6b2"
  green: "#008c70"
  amber: "#ffb300"
  surface-grey: "#efefef"
  surface-lavender: "#e3e8ff"
  muted: "#b9b9b9"
typography:
  display:
    fontFamily: Prompt, "Prompt Fallback", Arial, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 30px
  button:
    fontFamily: Prompt, "Prompt Fallback", Arial, sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 18px
  nav:
    fontFamily: Prompt, "Prompt Fallback", Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: Prompt, "Prompt Fallback", Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: Prompt, "Prompt Fallback", Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
rounded:
  xs: 3px
  sm: 5px
  md: 6px
  lg: 8px
  xl: 10px
  2xl: 20px
  3xl: 30px
  4xl: 35px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 8px
    height: 34px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.ink-grey}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 8px 0px 8px 14px
    height: 40px
  card:
    textColor: "{colors.primary}"
    rounded: "{rounded.xl}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-grey}"
    padding: 32px 0px 16px
    borderColor: "{colors.primary}"
---

# DoHome

## Overview

DoHome (ดูโฮม) is a Thai home-improvement and construction-materials retailer; the measured site, `https://www.dohome.co.th/`, is titled "ดูโฮมออนไลน์ | สั่งง่าย ส่งไว ครบทุกวัสดุก่อสร้าง เครื่องใช้ไฟฟ้าราคาดี" ("order easily, ship fast, every construction material and electrical appliance at good prices"), with the site name "DoHome E-commerce", Thai-language content (`lang="th"`) and a footer credit to DoHome Public Company Limited, version v.2.3.8. The utility bar carries "ดูโฮมการ์ด" (member card), "ค้นหาสาขา" (find a branch) and "ติดตามสถานะ" (order tracking); the main bar has the orange logo tile, a wide search field with an orange search button, a cart with a count badge and a login button. A category bar follows with an orange "หมวดหมู่สินค้า" (product categories) button, then Brands, Coupons, Branch services, Contractors and Catalog.

The identity is a high-energy retail orange, `#f26529`, on a near-white page. Above the fold the capture shows a promotional sticker strip ("แจก 5,000,000 พอยต์"), a hero carousel with photographic staff and a 2 x 2 grid of colored promo tiles (orange, grey, teal "ส่งฟรี", and a 0 percent installment tile), then coupon cards, a wide illustrated promo banner and an orange panel "ฉีกราคา ลดท้ายบิล" holding four receipt-styled product offers. Below that a "เครื่องใช้ไฟฟ้า ราคาพิเศษ" banner leads into product carousels with percentage-off badges in red, free-shipping labels and Thai product names (TCL, TOSHIBA). The density is high and the tone is promotional: big Thai display lettering, coin and ticket illustrations, many badges.

Chat and cookie controls are present on the page (a floating orange chat button in the capture, a sticky bottom consent element recorded as hidden); they are not documented as brand UI.

## Colors

- **Canvas `#ffffff`**; **page largest `#f8f9fa`**: the most extensive measured background (5,840 area units), the light page wash behind sections and the search field.
- **Ink `#343a40`**: the most-read text color (6,443 characters), declared as `--grey-dark` and `--foreground`.
- **Ink grey `#4d4d4f`**: utility and nav text, declared as `--grey-primary`.
- **Primary `#f26529`**: DoHome orange, declared as `--orange-600` and `--orange`; the add-to-cart button fill, with white `#ffffff` text.
- **Surface promo `#f15a24`**: the slightly redder orange of the large promo panel (688 area units).
- **Surface footer `#f5f5f5`**: footer fill, with a 2px orange top border.
- **Ink red `#e7000b`**: discount percentages and price emphasis (340 characters).
- **Ink blue `#3465d5`**: a small amount of blue text (35 characters).
- **Hairline `#e0e0e3`**: card and field borders (105 uses), declared as `--border-light` and `--input`.
- **Orange scale (declared)**: `#fef3ed` (50), `#fde7db` (100), `#ffece6` (150), `#fbcfb7` (200), `#f9b794` (300), `#f69f70` (400), `#f4874c` (500), `#e04e0f` (700, also `--orange-hover`), `#b23f0c` (800), `#832f09` (900), plus `--orange-bg-light #fff4ec`.
- **Other declared or measured accents**: teal `#50c6b2` (a measured background, the free-shipping tile), green `#008c70` (`--secondary-hover`), amber `#ffb300` (`--accent-hover`), grey `#efefef` and `#e3e8ff` backgrounds, `#b9b9b9` (`--muted-foreground`).

The Swiper default `#007aff` is a library variable, not a brand color.

## Typography

Prompt, a Thai-capable sans, carries all 9,780 measured characters; the declared stack is Prompt, "Prompt Fallback", Arial, sans-serif, and the Kanit face is also loaded in the font list. Sizes by character count: 14px (5,628), 12px (2,875), 22px (854), 8px (147), 20px (119), 16px (85), 10px (46).

- **Display**: 20px / 30px, weight 600, the section heading style ("คูปองส่วนลด").
- **Body**: 12px / 18px, weight 400, the base text color `#4d4d4f`.
- **Nav**: 14px / 20px, weight 400.
- **Link**: 16px / 24px, weight 400.
- **Button**: 12px / 18px, weight 500.

Measured weights are 400 (6,204 characters), 500 (1,732), 600 (1,017), 300 (723) and 700 (104). The 22px runs (854 characters) were not attributed to an element by the extraction, so no token is assigned. Footer column headings measured 14px / 21px at weight 700.

## Layout

The desktop pass measured a 1280px viewport and an 8,715px page height; the header block is 196px tall. Content sits in a container about the width of the 1110px section heading, with the hero carousel on the left and a 2 x 2 promo tile grid on the right, then full-width banners and horizontally scrolling product carousels with arrow buttons. The root variables declare `--container-7xl: 80rem`, `--breakpoint-xl: 80rem` and a `--spacing: .25rem` scale. Frequent paddings are 8px, 10px and 15px (about 205 uses each) and 18px (102). The footer is 1,280 × 411px with `32px 0px 16px` padding and lists company information (ข้อมูลบริษัท DOHOME, history, investors), a call line "1746 กด 2" open daily 09:00 - 20:00, and social links to Facebook, Instagram, LINE and YouTube.

## Elevation & Depth

One shadow value was measured, `0 4px 12px 0 rgba(0, 0, 0, 0.2)` (10 elements); the extraction does not name which elements carry it. Everything else is flat with borders in `#e0e0e3`. Depth is mostly color: orange panels, pale grey sections, and white cards raised against `#f8f9fa`.

## Shapes

The base radius is 10px (226 elements): buttons, cards, fields and tiles. Others: 6px (39), 3px (39), fully round pills (15, an effectively infinite radius), 20px (10, large promo panels), 70px (5), 8px, 5px, 35px and 30px. The root variable `--radius: .625rem` (10px) is the theme default. Coupon cards have notched side cut-outs in the capture; promo stickers are ticket and coin illustrations.

## Components

- **Add-to-cart button** (`button-primary`): orange `#f26529` fill, white 12px / weight 500 Thai text "เพิ่มลงรถเข็น", 10px radius, 34px tall, 108px wide, padding 8px. On the 390px mobile pass it measured 10px / 15px text at 97 × 31px.
- **Search field** (`text-input`): `#f8f9fa` fill, 16px text, 40px tall, padding `8px 0px 8px 14px`, 878px wide, with an attached orange search button.
- **Nav link**: 14px `#4d4d4f`; the utility links and login button gain a light grey hover fill (login button: 8px radius, 38px tall).
- **Card**: white, 10px radius, `#e0e0e3` border, with orange accents.
- **Footer**: `#f5f5f5`, `#4d4d4f` text, 2px orange top border.

## Design System Architecture

No public DoHome design system or brand-guideline page was found: the home page links to branch, order tracking, app download, privilege, coupon, inspiration and category pages, plus social channels, and none to guidelines. The shipped CSS is a Tailwind v4 build with a shadcn-style token layer (variables named `--card`, `--card-foreground`, `--muted`, `--popover`, `--sidebar-primary-foreground`, `--primary-foreground`, `--radius`) using oklch values for neutrals, and a brand layer of hex custom properties: the `--orange-*` scale, `--grey-primary`, `--grey-dark`, `--border-light`, `--primary-hover`, `--secondary-hover` and `--accent-hover`. There are 140 root variables recorded. Source: `https://www.dohome.co.th/`.

## Do's and Don'ts

- Do use orange `#f26529` for the main purchase action and promo surfaces, with `#e04e0f` as the declared hover.
- Do keep Prompt for Thai and Latin text, with weight 400 body and 500 to 600 for emphasis.
- Do round cards and buttons at 10px and keep fields on `#f8f9fa`.
- Do mark discounts with red `#e7000b` percentage badges.
- Don't use the Swiper blue `#007aff` or the floating chat and cookie controls as brand elements.
- Don't use shadows beyond the single measured `0 4px 12px` value.
- Don't present the unmeasured 22px promotional text as a type token without measuring it.

## Responsive Behavior

The mobile pass at 390px recorded: the section heading "คูปองส่วนลด" unchanged at 20px / 30px, the add-to-cart button reduced to 10px / 15px text and 97 × 31px, and a header 390 × 78px tall. The root variables declare `--breakpoint-xl: 80rem`. The mobile menu mechanism, grid columns and carousel behavior on small screens were not measured.

## Iteration Guide

1. Set canvas `#ffffff` with `#f8f9fa` section washes, ink `#343a40` and Prompt.
2. Build the header: utility links, logo tile, wide search with orange button, cart badge, login, then the orange category button and a text nav.
3. Use orange `#f26529` and `#f15a24` panels for promotions, white cards with 10px radius and `#e0e0e3` borders for products.
4. Add red `#e7000b` discount badges and keep the single `0 4px 12px` shadow for floating elements.
5. Close with the `#f5f5f5` footer and its 2px orange top border.
6. Run `node web/scripts/verify-designs.mjs --slug=dohome` after editing.
