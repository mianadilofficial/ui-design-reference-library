---
version: alpha
name: "Suzuki Motor (Thailand)"
category: "Thai Brands"
description: "Suzuki Motor (Thailand) Co., Ltd. home page (suzuki.co.th) measured live: a white and #f5f5f5 Thai-language car catalogue with a #202020 menu bar, Suzuki blue #00368f square buttons, red #de0009 price and underline accents, Sukhumvit Set Medium and SemiBold at 16px with 0.3px tracking, and 30px to 50px rounded details."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f5f5"
  ink: "#000000"
  primary: "#00368f"
  on-primary: "#ffffff"
  surface-dark: "#202020"
  surface-grey-dark: "#4b4b4b"
  ink-soft: "#404040"
  accent-red: "#de0009"
  text-input-bg: "#f1f1f1"
  text-input-border: "#e4e4e4"
typography:
  display:
    fontFamily: Conv_SukhumvitSet-SemiBold
    fontSize: 30px
    fontWeight: 500
    lineHeight: 36px
    letterSpacing: 0.3px
  subheading:
    fontFamily: Conv_SukhumvitSet-Medium
    fontSize: 16px
    fontWeight: 500
    lineHeight: 19.2px
    letterSpacing: 0.3px
  body:
    fontFamily: Conv_SukhumvitSet-Medium
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: 0.3px
  button:
    fontFamily: Conv_SukhumvitSet-Medium
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
    letterSpacing: 0.3px
  nav:
    fontFamily: Conv_SukhumvitSet-Medium
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.8px
rounded:
  xs: 3px
  sm: 30px
  md: 50px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 15px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 5px
    height: 51px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 5px
    height: 51px
  link:
    textColor: "{colors.surface-dark}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.surface-dark}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.surface-dark}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 10px 50px 10px 15px
    height: 48px
    borderColor: "{colors.text-input-border}"
---

## Overview

The measured page is suzuki.co.th, titled "ซูซูกิ มอเตอร์ (ประเทศไทย) | Suzuki Motor (Thailand) Co., Ltd." It is the Thai distributor's own site, written in Thai with the document language flag set to `en`. The page is 4,071px tall at 1280px.

The header has two tiers. A white top row carries utility links on the left (หน้าหลัก home, เกี่ยวกับซูซูกิ about Suzuki, ร่วมเป็นผู้จำหน่าย become a dealer, ร่วมงานกับเรา careers) and on the right the group links Marine, Motorcycle and Global, a language switch (ไทย | EN) and a search icon. A centered white tab holds the red-and-blue Suzuki logo and hangs into the second tier, a #202020 menu bar with white items: รุ่นรถ (models), โปรโมชัน (promotions), บริการหลังการขาย (after-sales service), ประสบการณ์กับซูซูกิ (Suzuki experiences), ข่าวสาร (news) and ติดต่อสอบถาม (contact). The active utility link has a short red underline.

Under the header is a full-width hero carousel; the captured slide advertises the Fronx with a special price of 649,000 baht, set in heavy italic display lettering over a photograph, with left and right arrows and a row of eight thin progress bars (the second is red). A fixed vertical rail on the right edge offers four tools: find a dealer, test drive, get an offer and hide menu.

The model section, titled "รุ่นรถ" with a short red rule beneath, is a carousel of vehicle cut-outs (JIMNY, CARRY, ALL NEW SUZUKI FRONX, XL7 HYBRID, ALL NEW SUZUKI e VITARA). The selected model is shown larger with a red underline, a price line in red ("เริ่มต้นที่ 689,000 บาท", starting at 689,000 baht), a two-line description and a "ดูเพิ่มเติม" (see more) link with a red circular chevron. A #f5f5f5 band follows with "โปรโมชัน" (promotions), a large center-mode carousel of promotional banners with round white arrow buttons, and a dark-blue "ดูโปรโมชันทั้งหมด >" (see all promotions) button.

## Colors

`page-largest` (#f5f5f5, weight 1249) is the largest background and the promotions band. `canvas` (#ffffff, weight 96) is the header and model section. `surface-dark` (#202020, weight 748) is the main menu bar and footer-style dark areas, and is also the color of the utility link text. `surface-grey-dark` (#4b4b4b, weight 122) is a secondary dark. `primary` (#00368f, weight 34) is Suzuki blue and fills the dark-blue buttons; its label is white (`on-primary`). Reds are measured twice: `accent-red` (#de0009, weight 7 as a background, 117 characters as text) is used for prices, rules and underlines, and #de1431 (weight 15) appears as a background on small elements. Text colors: `ink` (#000000, 1340 characters), white (756), `ink-soft` (#404040, 165) and #202020 (81). The input uses a #f1f1f1 fill (`text-input-bg`) with a #e4e4e4 border (`text-input-border`). The site's root variables also include Bootstrap 4 defaults (`--primary` #007bff, `--danger` #dc3545 and so on) and Swiper's #007aff theme color; these are framework defaults, not brand colors.

## Typography

Two faces from the same family, both converted web fonts: Conv_SukhumvitSet-Medium (2317 characters) and Conv_SukhumvitSet-SemiBold (142). The loaded set also includes two icon fonts (icomoon and ico-suzuki). All measured text uses a 0.3px letter spacing.

`display` is SemiBold 30px on a 36px line (the "รุ่นรถ" h1). `subheading` is Medium 16px on 19.2px, `body` is Medium 16px on 22.4px, `button` is Medium 18px on 27px, and `nav` is 12px on 16.8px. By characters, 16px (1161) and 14px (863) dominate, followed by 20px (131), 12px (128), 15px, 18px, 24px, 30px and 36px. The computed weights are 400 for 2112 characters and 500 for 347; the SemiBold is a separate font file whose family name carries the weight.

## Layout

The desktop layout is 1280px wide. The h1 element spans 1250px. The header's centered logo tab and two-tier bars are symmetric; the model carousel shows five vehicles at once with the selected one enlarged in the middle; the promotions carousel shows one full banner with its neighbours cut off on both sides. Measured spacing steps are 1, 2, 5, 6, 7, 8, 10, 12, 15 and 20px. The text input is 48px tall with padding 10px 50px 10px 15px, and buttons are 51px tall with 12px 5px padding. No container gaps were recorded.

## Elevation & Depth

Shadows are faint and wide: `rgba(0, 0, 0, 0.05) 0px -1px 20px 0px, rgba(0, 0, 0, 0.05) 0px 6px 6px 0px` (2 elements), `rgba(0, 0, 0, 0.2) 0px 0px 0px 0px, rgba(0, 0, 0, 0.19) 0px 0px 20px 0px` (1 element) and an inset `rgba(0, 0, 0, 0.1) 0px 12px 15px 0px` (1 element). Most separation comes from the dark menu bar, the grey band and the white logo tab. The utility link hover changes only its bottom border color to #0056b3.

## Shapes

The brand mixes square and fully rounded forms. `none` (0px) is the radius on the blue buttons, nav and input. `xs` 3px was measured on 4 elements, `sm` 30px on 6, `md` 50px on 3, with 50px 50px 0px 0px and 0px 0px 50px 50px each on one element, and 50% on 19 circular elements (arrow buttons, chevron markers). `pill` 9999px is declared.

## Components

- **button-primary / button-secondary**: #00368f fill, white 18px Medium label, 0px radius, padding 12px 5px, 51px tall (220px wide in the measured case).
- **nav / nav-link**: #202020 label color at 12px on the white utility row; the dark main menu carries white labels.
- **link**: 12px, #202020.
- **text-input**: #f1f1f1 fill, black 16px text, 0px radius, padding 10px 50px 10px 15px, 48px tall, 1px #e4e4e4 border.
- **Model selector item**: uppercase Latin model name in grey, the selected one in black with a red top rule.
- **Promo carousel**: banner images with round white arrow buttons and small grey pager dots (the active dot is red).

## Design System Architecture

No public design-system documentation was opened. The root exposes Bootstrap 4 defaults (colors, `--breakpoint-sm` 576px, `--breakpoint-md` 768px, `--breakpoint-lg` 992px, a system sans stack) and Swiper variables (`--swiper-navigation-size` 44px), which are framework settings and not brand tokens. The brand layer is read from computed styles: Sukhumvit Set, #202020 and #f5f5f5 surfaces, Suzuki blue and red, and 0.3px tracking. No tokens repository was consulted. A cookie banner exists on the site (the extraction recorded "block-cookie active" as hidden); it is not documented here.

## Do's and Don'ts

- Do set every text in Sukhumvit Set with 0.3px letter spacing.
- Do use #202020 for the menu bar and #f5f5f5 for alternating bands.
- Do use #00368f for buttons, square-cornered, and #de0009 only for prices, rules and active markers.
- Do keep the logo in a white tab at the header's center.
- Don't use Bootstrap's #007bff as a brand blue.
- Don't use heavy shadows; the measured ones are faint.
- Don't document the cookie banner or the fixed side rail's icons as brand components.

## Responsive Behavior

Measured at 390px: the h1 stays at 30px on a 36px line with 0.3px tracking. The mobile size census is led by 16px (1073 characters) and 14px (785), then 20px (101), 12px (50), 18px (30), 30px (21) and 36px (6). Bootstrap's breakpoints are published (576, 768 and 992px), but how the layout reflows was not measured.

## Iteration Guide

1. Start with a two-tier header: white utility row and a #202020 menu with a centered logo tab.
2. Add a full-bleed hero with progress bars, then a titled section with a short red rule.
3. Show vehicles as cut-outs in a carousel, with a red price line for the selected one.
4. Put promotions on #f5f5f5 with a single blue square button.
5. Keep all type at 0.3px tracking in Sukhumvit Set and reserve red for small accents.
