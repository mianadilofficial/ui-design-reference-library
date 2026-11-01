---
version: alpha
name: ShopeePay Thailand
category: "Thai Brands"
description: "ShopeePay Thailand (shopeepay.co.th): e-wallet marketing site in Shopee orange #ee4d2d on white #ffffff with charcoal ink #202325, Thai type in SukhumvitBold 32px and 22px headings over Thonburi 14px body, 8px-radius bordered feature cards, and a 36px-tall orange download button."
colors:
  canvas: "#ffffff"
  ink: "#202325"
  primary: "#ee4d2d"
  on-primary: "#ffffff"
  surface-light: "#f9f9f9"
  ink-soft: "#000000de"
  ink-black: "#000000"
  hairline: "#e5e5e5"
typography:
  display:
    fontFamily: SukhumvitBold
    fontSize: 32px
    fontWeight: 700
  heading:
    fontFamily: SukhumvitBold
    fontSize: 22px
    fontWeight: 700
  body:
    fontFamily: Thonburi
    fontSize: 14px
    fontWeight: 400
  button:
    fontFamily: Thonburi
    fontSize: 14.4px
    fontWeight: 400
  nav:
    fontFamily: Thonburi
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 3px
  sm: 8px
  md: 32px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 6px
  s3: 6.4px
  s4: 8px
  s5: 12.8px
  s6: 15px
  s7: 16px
  s8: 19.2px
  s9: 22.4px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 36px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 2px 2px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 48px 0px 28px
    borderColor: "{colors.hairline}"
---

## Overview

ShopeePay Thailand (https://shopeepay.co.th/, page title "ShopeePay | ช่องทางการจ่ายเงินอันดับ 1 สำหรับอีคอมเมิร์ส", "the number 1 payment channel for e-commerce") is the Thai marketing site of the Shopee e-wallet. It is a single long landing page of 1,280px by 4,484px in Thai. A white header with the "S Pay" logo carries the navigation (หน้าแรก Home, บริการ Services, คำถามที่พบบ่อย FAQ, ติดต่อเรา Contact, คู่มือและข้อมูล Guides and information) and an orange "ดาวน์โหลด" (Download) button. The hero is a full-width photograph of a hand holding a phone showing the orange app, with an orange block at the right carrying the headline "ShopeePay ที่ 1 ตัวจริง คุ้มทุกการใช้จ่าย!" and Google Play, App Store and AppGallery badges. Below the hero come the large logo and "เกี่ยวกับ ShopeePay" (About ShopeePay), the benefits section "สิทธิประโยชน์ ShopeePay" with four orange line icons (บริการครบวงจร all-in-one services, สแกนจ่ายที่ร้านค้าด้วย QR code, สิทธิพิเศษบน Shopee, เติมเงินง่าย ปลอดภัยทุกการใช้จ่าย), a "พาร์ทเนอร์" (Partners) logo wall, and a certification section whose cards say the service is internationally certified and licensed by the Bank of Thailand ("ได้รับใบอนุญาตดำเนินการ จากธนาคารแห่งประเทศไทย"). The address block names Singha Complex, floor 26, Phetchaburi Tat Mai Road.

Imagery is a photographic hero plus flat orange line icons and partner logos (Free Fire, ROV, AIS, EXAT, Major Group, Google Play, SF, Bangkok Airways, Karmart, H&M, SE-ED, Konvy, Eve and Boy, McDonald's, Dunkin' and others in the capture). Copy voice is friendly, benefit-led Thai marketing language with short headings and centered grey explanatory paragraphs.

## Content and Voice Notes

Hero copy promises value in one line: "ShopeePay ที่ 1 ตัวจริง คุ้มทุกการใช้จ่าย!" and a two-line subtitle about an online wallet that makes life more convenient with a full set of services. The About section describes an e-wallet that suits every lifestyle of spending, with special privileges and many promotions. The four benefit titles are short noun phrases, each followed by a grey two- or three-line description: top-ups for games and mobile credit, bill payments and online shopping; paying by scanning a QR code at shops nationwide; coupons and shipping discounts on Shopee; and topping up from a bank account with identity confirmation on every transaction. Headings are in the bold Sukhumvit face and descriptions are in a lighter grey weight, so scanning is by headline and icon. The certification cards carry the reassurance messages in the 22px light Sukhumvit style, and the footer gives the registered address.

## Colors

- **Canvas #ffffff.** The page background.
- **Primary #ee4d2d.** Shopee orange: the Download button fill, the nav link colour for the active and brand items, and the largest background area (1,170 area weight, the hero orange block and band). Text on it is #ffffff (774 characters).
- **Ink #202325.** Headings and body text (1,440 characters).
- **Text variants.** #000000de (71 characters) and #000000 (15).
- **Surface #f9f9f9.** A light grey background area (7 weight).
- **Hairline #e5e5e5.** The 1px card border (3 uses); #eeeff2 and #00000024 are other measured border colours (1 each).
- **Other.** #e4e4e4 is a small background area (2 weight).

## Typography

Thai is set in **SukhumvitBold** (headings, 196 characters) and **SukhumvitSet** (feature card text, weight 300, 417 characters), with **Thonburi** (body and navigation, 1,554 characters; a system Thai face on Apple platforms) and the Latin faces **OpenSansSemiBold** (112) and **shopeeDisplayBold** (28, the large "55px" numerals). The stylesheet also declares OpenSansRegular and shopeeDisplayRegular. Sukhumvit is a commercial Thai typeface family; Thonburi ships with macOS and iOS.

- **Display:** SukhumvitBold 32px, weight 700 (h1 "เกี่ยวกับ ShopeePay").
- **Heading:** SukhumvitBold 22px, weight 700 (h2 "บริการครบวงจร"; feature card titles).
- **Body:** Thonburi 14px, weight 400 (the address paragraph).
- **Button:** Thonburi 14.4px, weight 400.
- **Nav:** Thonburi 16px, weight 400.
- **Card text:** SukhumvitSet 22px, weight 300 in the certification cards.

Sizes by characters: 16px (979), 14px (558), 22px (509), 32px (120), 14.4px (102), 55px (39). Weights: 400 (1,301), 300 (668), 700 (338). No letter spacing and no line height were recorded (both normal).

## Layout

The page is 1,280px wide and 4,484px tall. A 64px-tall white header with a soft shadow spans the full width. Content is centered: hero photo and orange block side by side, then centered titles with centered paragraphs, a four-column benefits row (icons above bold titles and grey descriptions) and a six-column partner logo grid. Measured gaps: 8px (16 uses), 12.8px, 30px, 6.4px, 32px, 16px, 15px, 80px. Paddings: 48px (3 uses), 19.2px (2), 22.4px (2), 210px (2), 1px, 6px, 6.4px, 32px. Certification cards are 391px wide and 360px tall with padding 48px 0px 28px.

## Elevation & Depth

Two shadows were measured: `rgba(0, 0, 0, 0.1) 0px 2px 2px 0px` on the header, and `rgba(0, 0, 0, 0.12) 0px 1px 4px 0px` on one more element. The stylesheet also contains `0px 4px 12px rgba(0,0,0,.1)`, `0px 8px 16px 0px rgba(0,0,0,.2)` and `0px 6px 12px rgba(0,0,0,.05)`, which were not measured on rendered elements. The design is mostly flat: elevation is a thin header shadow plus 1px card borders.

## Shapes

Measured radii: 8px (3 uses, the certification cards), 100% (2, circular elements), 32px (1) and 3px (1). The extractor recorded the Download button element itself at 0px radius; the capture shows a rounded pill at that position, so the rounding comes from an element other than the measured anchor and is not documented as a token for it. The tokens keep xs 3px, sm 8px, md 32px, none 0px and pill 9999px.

## Components

- **Primary button.** "ดาวน์โหลด": #ee4d2d fill, #ffffff text, Thonburi 14.4px weight 400, 36px tall and 99px wide, measured radius 0px on the anchor (see Shapes).
- **Navigation.** White, 64px tall, Thonburi 16px links in #ee4d2d, with the shadow `rgba(0, 0, 0, 0.1) 0px 2px 2px 0px`.
- **Card.** #ffffff fill, #202325 text, 1px solid #e5e5e5, 8px radius, padding 48px 0px 28px, 391px by 360px.
- **Store badges.** Google Play, App Store and AppGallery black badges under the hero headline (images).
- **Partner logo wall.** Six columns of logos on white.

## Design System Architecture

No public design system or brand guideline link was found: the single page was opened and shows none (the fetch returned only the word ShopeePay), and no search was run. The root declares no custom properties (`rootVars` is empty), so the system is de-facto: Shopee orange, charcoal ink, a Thai type pairing and 8px cards. Font files are declared as `SukhumvitSet`, `SukhumvitBold`, `Thonburi`, `OpenSans*` and `shopeeDisplay*`.

## Do's and Don'ts

- Do use #ee4d2d for the primary action, the nav and the hero block, and #202325 for text.
- Do set Thai headings in SukhumvitBold 32px or 22px and body in Thonburi 14px.
- Do put features in 1px #e5e5e5 cards with an 8px radius.
- Do show partner and certification logos as proof.
- Don't use heavy shadows; measured shadows are 2px or smaller blurs.
- Don't set Thai text with letter spacing; none was measured.
- Don't add a second brand colour; only orange appears as an accent.

## Responsive Behavior

The mobile pass measured: the same h1 (32px) and h2 (22px) sizes as desktop, body 14px, the navigation as a 390px-wide white 64px-tall bar with the same links, and no primary CTA detected (`ctaPrimary` is null on mobile). Character counts by size match the desktop. Breakpoint behaviour, hamburger menus and column stacking were not measured.

## Iteration Guide

1. White page, #202325 text, #ee4d2d orange for hero block, nav links and Download.
2. Thai headings SukhumvitBold 32px and 22px; body Thonburi 14px.
3. Feature cards: 8px radius, 1px #e5e5e5, centered icon, title and grey paragraph.
4. Partner logo wall and certification cards as proof section.
5. Run `node web/scripts/verify-designs.mjs --slug=shopeepay-thailand` after edits.
