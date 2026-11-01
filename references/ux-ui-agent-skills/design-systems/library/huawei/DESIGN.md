---
version: alpha
name: Huawei
category: "Telecom"
description: "Huawei corporate site (huawei.com/en) measured live: HuaweiSans Regular and Bold, Huawei red #c7000b for links, underline accents and chevrons, #191919 ink on white and #f3f3f3 surfaces, 16px-radius white cards, 6px 48px search input, built on an hwp- design token system with red 60 brand colour."
colors:
  canvas: "#ffffff"
  page-largest: "#f3f3f3"
  ink: "#191919"
  primary: "#c7000b"
  surface-3: "#f2f2f2"
  ink-2: "#595757"
  ink-3: "#666666"
  ink-4: "#333333"
  ink-5: "#595959"
  nav-bg: "#ffffff99"
  text-input-border: "#d4d4d4"
typography:
  display:
    fontFamily: HuaweiSans-Regular, Helvetica, Arial, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 45.7143px
  display-mobile:
    fontFamily: HuaweiSans-Regular, Helvetica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 40px
  heading:
    fontFamily: HuaweiSans-Bold, Helvetica, Arial, sans-serif
    fontSize: 30.4px
    fontWeight: 400
    lineHeight: 45.6px
  subheading:
    fontFamily: HuaweiSans-Bold, Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  body:
    fontFamily: HuaweiSans-Regular, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24.8896px
  nav:
    fontFamily: HuaweiSans-Regular, Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: HuaweiSans-Regular, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17.15px
rounded:
  xs: 1px
  sm: 6px
  md: 16px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 15.19px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 30px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink-4}"
  nav-link:
    textColor: "{colors.ink-4}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-4}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 0px 50px 0px 20px
    height: 48px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 15px
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.ink-2}"
    padding: 20px 0px 0px
---

## Overview
The measured page is https://www.huawei.com/en/ (title "Huawei - Building a Fully Connected, Intelligent World", lang `en`), the global corporate home page of Huawei. The capture shows a semi-transparent white navigation bar (78px tall, text `#333333`) with the red flower mark and "HUAWEI" wordmark at the left, five links (Consumer Products, Business Products, Support, Partners & Developers, About Huawei) and a search icon at the right. A pastel gradient hero for the Ultra-Broadband Forum 2026 (October 12-13, Vienna, Austria) carries the headline "Agentic UBB Beyond Connectivity", a red "Learn More" link and a floating white carousel strip.

Below, a pale grey panel titled "What We Do" (with a short red underline and the line "Learn more about our business") holds six white tiles with thin red outline icons and chevrons: Enterprise, Carrier, Consumer, Huawei Cloud, Digital Power, Intelligent Automotive Solution. "What's New" follows with a centred heading and a three-column mosaic of product and story cards (HUAWEI MatePad Pro 12, HUAWEI WATCH 6 Pro, an ICT competition card, an education story). "Latest News" sits on a grey band with dated white cards (Oct 05, 2026; Sep 30, 2026; Sep 24, 2026). The register is corporate and measured: short headings, restrained copy, product imagery with soft gradients.

## Colors
- **Canvas** `#ffffff`, with `#f3f3f3` the largest background by area (1443; `--hwp-color-bg-2`) and `#f2f2f2` (814) for the footer. Pale `#f5f5f5`, `#eeeeee` and `#e6e6e6` serve as dividers and card washes.
- **Ink** `#191919` (1335 characters; `--hwp-color-text-primary`). Secondary text: `#595757` (356), `#666666` (175), `#333333` (159, nav and form text) and `#595959` (127; `--hwp-color-text-secondary`).
- **Primary red** `#c7000b` (125 characters of link text; `--hwp-color-brand` and `--hwp-color-red-60`): "Learn More" links, chevrons, the short underline bars under section titles and the privacy-policy link. Hover red is `#e02128` (`--hwp-color-brand-hover`) and active is `#850f12` (`--hwp-color-brand-active`). On hover the "Enterprise" tile text turns rgb(199, 0, 11).
- **Nav** `#ffffff99` translucent white over the hero.
- **Input border** `#d4d4d4`.
The root scale also declares reds 05 to 90, yellow (`#fcc800`), orange, pink, rose and more, none of which measured on the visible page.

## Typography
Two Huawei faces carry the page: "HuaweiSans-Regular" (1467 characters) and "HuaweiSans-Bold" (884), each with Helvetica, Arial and sans-serif fallbacks; "corpfont", "iconfont" and "hwicon" icon fonts are also loaded. Weight is declared 400 on the face names; bold look is the separate Bold face. A few elements measure weight 600 (21) and 700 (81).

- **display**: HuaweiSans-Regular 32px, line-height 45.7143px (the first slide title).
- **display-mobile**: 28px / 40px.
- **heading**: HuaweiSans-Bold 30.4px, line-height 45.6px ("What We Do").
- **subheading**: HuaweiSans-Bold 20px / 30px (card titles, the most used size with 711 characters).
- **body**: HuaweiSans-Regular 16px, line-height 24.8896px.
- **nav**: 18px / 20px (the measured nav-link role; the visible bar renders 14.4px text).
- **link**: 14px / 17.15px.
Other sizes: 13px (443), 19.5552px, 14px and 18px. Letter-spacing is normal throughout. HuaweiSans is a corporate face; no substitute was measured.

## Layout
Desktop pass: 1280px wide, 4185px tall. The nav bar sits above a full-width hero; below, content is held in a centred container. "What We Do" is a 3 by 2 grid of tiles inside a grey container with a title block at the left, "What's New" is a three-column mosaic with a tall left card and two stacked cards, and "Latest News" is a row of three white cards on a grey full-width band. The footer is 636px tall on `#f2f2f2` with link columns and 20px top padding. Spacing tokens: 4, 8, 10, 12, 15, 15.19, 16, 20, 24 and 30px; the root variable `--hwp-spacing-layout-vertical-xl` is 48px.

## Elevation & Depth
No box shadow was measured on rendered elements. The root variables define soft shadows such as `--hwp-shadow-sm: 0 1px 6px 0 #00000014` and `--hwp-shadow-t-sm: 0 -1px 6px 0 #00000014`, which are unused in the measured state. Depth is created by white tiles on `#f3f3f3` panels, translucent nav over the gradient hero and the floating white carousel strip.

## Shapes
Measured radii: 16px (18 elements, tiles and cards), 100% (4, round controls and the red support button), 6px (3, inputs), plus joined 16px left and right edges on grouped controls and a 1px element. The design tokens define a scale: `--hwp-radius-xs: 4px`, `sm: 8px`, `md: 8px`, `lg: 12px`, `xl: 16px`, `2xl: 24px`, `full: 9999px`. Icons are thin outline glyphs in red; section titles carry a short red bar beneath them.

## Components
- **card**: white fill, 16px radius, 15px padding, ink text, with a thin red icon and a red chevron on tiles.
- **link**: `#c7000b`, 14px, with chevron ("Learn More", "Read our privacy policy").
- **text-input**: white, 6px radius, 48px tall, padding 0 50px 0 20px, 1px `#d4d4d4` border, `#333333` text.
- **nav / nav-link**: translucent white bar, `#333333` text.
- **footer**: `#f2f2f2` with `#595757` 14px links.
- **floating support button**: red rounded square at the right edge.
No filled primary button was detected on the home page; calls to action are red text links with chevrons.

## Design System Architecture
No public design-system site was linked from the page, but the shipped CSS contains Huawei's own token layer with the prefix `--hwp-` (344 root variables): colour roles (`--hwp-color-brand: #c7000b`, `--hwp-color-text-primary: #191919`, `--hwp-color-bg-1: #fff`, `--hwp-color-bg-2: #f3f3f3`, `--hwp-color-border-separator-subtle: #f3f3f3`, `--hwp-color-text-inverse: #fff`), colour ramps (`--hwp-color-red-05` to `-90`), radii (`--hwp-radius-*`), shadows (`--hwp-shadow-*`), spacing (`--hwp-spacing-layout-vertical-xl: 48px`) and a typographic scale (`--hwp-font-headline-11-size: 48px`, `--hwp-font-headline-11-weight: 600`, `--hwp-font-body-4-line-height: 1.5556`). This is the de-facto system that the home page draws from.

## Do's and Don'ts
- Do use `#c7000b` for links, chevrons and accent bars; use `#e02128` for hover.
- Do set titles in HuaweiSans-Bold and text in HuaweiSans-Regular.
- Do place white 16px-radius cards on `#f3f3f3` panels.
- Do pair each section title with a short red bar.
- Don't add shadows; none were measured.
- Don't fill large areas with red; it is an accent.
- Don't use the unmeasured ramp colours (yellow, pink, rose) in layouts.

## Responsive Behavior
At 390px the mobile pass measured: h1 28px (32px desktop), h2 26.6px (30.4px desktop), body 14px, the nav block 66px tall with a "Toggle Navigation" control, and an "Enterprise" tile 358px wide by 60px tall with white fill. Frequent mobile sizes: 14px (682 characters), 16px, 18px, 15.75px, 28px. Other mobile layout changes are not measured.

## Iteration Guide
1. Build a translucent white nav and a pastel gradient hero with a red text link.
2. Place white 16px cards on `#f3f3f3` panels; put thin red outline icons on tiles.
3. Set titles in HuaweiSans-Bold 30.4px and body in Regular 16px, ink `#191919`.
4. Underline each section title with a short red bar.
5. Finish with a `#f2f2f2` footer and `#595757` links.

## Notes for Rebuilding
The home page uses red as a signalling colour rather than a surface colour. Every interactive affordance is red text plus a chevron (Learn More, Read our privacy policy, the tile arrows), while the surfaces stay white and light grey, so the brand reads through the logo, the accent bars under headings and the link colour. Cards have no border or shadow in the measured state; their edge is defined by the contrast between the white tile and the `#f3f3f3` container. Hero artwork is soft pastel illustration with a gradient wash, and product cards use light grey fills (`#f5f5f5`-range) with centred titles at 20px and a one-line subtitle above a red link. News cards begin with a grey date line and a bold headline set in the Bold face. The support button at the right edge is the only saturated filled red shape on the page and is a utility control, not a call to action.
