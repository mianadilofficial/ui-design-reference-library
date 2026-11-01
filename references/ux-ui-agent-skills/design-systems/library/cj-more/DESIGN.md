---
version: alpha
name: CJ MORE
category: "Thai Brands"
description: "CJ MORE (ซีเจ มอร์), the C.J. Express Group supermarket chain, runs a green-and-yellow Thai site in the condensed db_helvethaica_x_cond face (34px body, 26px nav) with 80px db_helvethaica_x_med headings, a #00a150 green header and footer, #ffc934 and #fedb21 yellow buttons and a #f5f5f5 canvas."
colors:
  canvas: "#f5f5f5"
  page-largest: "#e6eeec"
  ink: "#015a2d"
  primary: "#ffc934"
  on-primary: "#015a2d"
  brand-green: "#00a150"
  on-green: "#ffffff"
  ink-black: "#000000"
  on-green-muted: "#ffffffb3"
  accent-yellow-bright: "#ffe600"
  primary-hover: "#e3b11a"
  yellow-button: "#fedb21"
typography:
  display:
    fontFamily: db_helvethaica_x_med
    fontSize: 80px
    fontWeight: 400
    lineHeight: 72px
  display-mobile:
    fontFamily: db_helvethaica_x_med
    fontSize: 40px
    fontWeight: 400
    lineHeight: 36px
  body:
    fontFamily: db_helvethaica_x_cond
    fontSize: 34px
    fontWeight: 400
    lineHeight: 34px
  button:
    fontFamily: db_helvethaica_x_cond
    fontSize: 24px
    fontWeight: 400
    lineHeight: 34.2857px
  nav:
    fontFamily: db_helvethaica_x_cond
    fontSize: 26px
    fontWeight: 400
    lineHeight: 37.1428px
rounded:
  xs: 6px
  sm: 80px
  md: 100px
  none: 0px
spacing:
  s1: 5px
  s2: 10px
  s3: 12px
  s4: 15px
  s5: 17px
  s6: 20px
  s7: 30px
  s8: 40px
  s9: 50px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 12px
    height: 28px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.ink-black}"
  button-secondary:
    backgroundColor: "{colors.yellow-button}"
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 5px 20px
    height: 47px
  link:
    textColor: "{colors.on-green}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.brand-green}"
    textColor: "{colors.on-green}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.on-green}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.brand-green}"
    textColor: "{colors.on-green}"
    rounded: "{rounded.none}"
---

## Overview

The site describes the brand as "CJ MORE (ซีเจ มอร์) ร้านซูเปอร์มาร์เก็ต" operated by "บริษัท ซี.เจ. เอ็กซ์เพรส กรุ๊ป จำกัด" (C.J. Express Group Co., Ltd.), under the concept "ครบ ถูก คุ้ม", complete, affordable, worthwhile. The about page also states a network of more than 1,700 branches across 54 provinces. The website is not a shopping cart; it is a membership and information site for the chain, and the capture reads that way.

A solid green bar runs across the top of the page, with the square CJ MORE logo (a yellow tile with a red and blue "CJ" mark and the word "MORE") hanging at the left, and white navigation labels: หน้าแรก (Home), โปรโมชั่น (Promotion), ข่าวและกิจกรรม (News and Activities), สมาชิก (Member, with a dropdown), รู้จักซีเจ (About CJ), plus links for selling products and offering space. Under it, a row of four small yellow tab buttons: สมัครสมาชิก (Register), ตรวจสอบแต้ม (Check Points), สาขาทั้งหมด (All Branches) and สาขาที่รับบัตรสวัสดิการแห่งรัฐ (branches accepting the state welfare card).

The content sits in a centred column. A carousel with arrows and dot pagination comes first (the captured slide is a dark commemorative notice), followed by a large green panel promoting the "ซีเจ สบายการ์ด" (CJ Sabai Card) with a hand holding the card and a yellow "สิทธิพิเศษและเงื่อนไข" (Special Rights and Conditions) button, then a three-up band of green panels with white outline icons and yellow semicircle labels: ที่ตั้งสาขา (branch locations), บริการลูกค้า (customer service) and ร่วมงานกับเรา (work with us). The footer repeats the green with link columns and a yellow call center number. Social buttons for Facebook, Twitter, TikTok and LINE float at the right edge.

## Colors

Green and yellow are the brand. The header, panels and footer use `brand-green` (#00a150) with `on-green` (#ffffff) text and a 70 percent white variant (`on-green-muted`, #ffffffb3) for secondary lines. The page background around the content column is `canvas` (#f5f5f5), with a slightly green-grey area `page-largest` (#e6eeec) behind the hero zone.

The action color is yellow. `primary` (#ffc934) fills the small tab buttons, with dark green text (`on-primary`, #015a2d) and a darker `primary-hover` (#e3b11a) when hovered, at which point the text turns black. The bigger hero button uses a slightly different yellow, `yellow-button` (#fedb21), with black text (`ink-black`, #000000). The call center number in the footer is the brightest yellow, `accent-yellow-bright` (#ffe600).

Text on light surfaces is `ink` (#015a2d), a deep green rather than black, which keeps the page inside the brand hue. Pure black appears only on yellow buttons. A translucent black (#00000099) is measured as the dark overlay of the carousel slide, and the carousel dots and social icons bring their own colors (Facebook blue, LINE green), which are third-party and not brand colors.

## Typography

Two faces are loaded and nothing else: db_helvethaica_x_cond for body, navigation and buttons, and db_helvethaica_x_med for large headings. Both are Thai-capable and set at weight 400 throughout (the single bold use is nine characters of Arial text). No public specification for these faces was found, so Arial is the only documented fallback seen in the measurement.

Because the condensed face is small on the em, sizes are large: body at 34px with 34px line height (`body`), navigation at 26px (`nav`, line height 37.1428px), buttons at 24px (`button`, line height 34.2857px), and headings at 80px with 72px line height on desktop (`display`) and 40px with 36px line height at 390px wide (`display-mobile`). The extractor's h1 is the "ซีเจ สบายการ์ด" title in the green promotional panel, which is white on green. Other sizes in use are 23px, 20px, 20.8px and 22.1px for captions and footer links.

## Layout

The page is 2048px tall at 1280px width. Content lives in a fixed centred column that is narrower than the viewport, with the grey canvas visible on both sides, and the green nav bar sits inside that column in the capture. Stacked bands are full column width: carousel, Sabai Card panel, three-up service panel, then a yellow strip leading into the green footer.

Spacing values measured in paddings are 5, 10, 12, 15, 17, 20, 30, 40 and 50px, listed as `s1` to `s9`. The three-up panel uses equal thirds with a centred icon above a semicircular yellow label. Footer content is three columns: member links, About CJ links, and a contact column with social buttons, call center (Call Center) number and opening hours.

## Elevation & Depth

Depth is minimal. Two shadows were measured: a 2px inset yellow ring (rgb(255, 201, 52)) around eight elements, which gives tab buttons a double-edge look, and a soft rgba(0, 0, 0, 0.2) 0px 4px 8px 0px drop shadow under two elements. Otherwise depth comes from color blocking, overlapping semicircles, and the photograph of the card with its hand. Do not introduce heavy shadows.

## Shapes

Radii vary by role. The small tab buttons are square at the top and rounded at the bottom (0px 0px 6.4px 6.4px), as if hanging from the header. The hero button is a 6px rounded rectangle (`xs`). Large 80px and 100px radii (`sm`, `md`) shape the semicircle labels in the service panel and similar capsule forms. Everything structural (nav bar, footer, panels) has 0px radius, creating a modular block look with rounded accents.

## Components

**Tab button (`button-primary`).** Yellow #ffc934 fill, dark green #015a2d text, 24px, 0px 12px padding, 28px high, bottom corners 6.4px; hover changes to #e3b11a with black text.

**Hero button (`button-secondary`).** #fedb21 fill, black 26px text, 5px 20px padding, 47px high, 6px radius. Used for "สิทธิพิเศษและเงื่อนไข".

**Navigation (`nav`, `nav-link`).** Green #00a150 bar, white 26px labels, 0px radius; a chevron marks the dropdown on Member.

**Service tile.** Green panel with a white outlined icon and a yellow semicircle holding a two-line green label.

**Footer (`footer`).** Green with white 26px links in three columns and a copyright line reading "©2015 C.J. Express Group Co.,Ltd. All Rights Reserved." followed by a version string.

## Design System Architecture

No public design system, brand guideline or token package was found. The about and home pages opened for research contain content and navigation text only. The shipped system is two custom web fonts and flat component styling with no CSS custom properties in the measured root (the root variable list is empty), so every style is a literal value in the stylesheet. Reproduce the system from the measured tokens above, using the names as documentation, and do not infer a hidden scale.

## Do's and Don'ts

- Do pair #00a150 green blocks with yellow action buttons.
- Do set text on light surfaces in #015a2d, not black.
- Do keep structural blocks square and use rounded capsules only for labels and buttons.
- Do write short Thai labels in the condensed face at the large sizes shown.
- Don't use Arial, system fonts or a thin weight for headings.
- Don't treat the dark carousel overlay or social icon colors as brand colors.
- Don't use heavy shadows; limit to the 2px inset ring and the soft 4px 8px drop.
- Don't put white text on the yellow fills.

## Responsive Behavior

The mobile pass at 390px halves the display heading from 80px to 40px, and its line height from 72px to 36px, while the condensed body face stays large at 34px for legibility. Mobile layout of the centred column, service tiles, footer and the yellow tab row (28px tab height) was not measured.

## Iteration Guide

1. Start with #f5f5f5 canvas and a #00a150 header with white 26px labels.
2. Use yellow #ffc934 or #fedb21 for every call to action, with dark green or black text.
3. Set headings in db_helvethaica_x_med at 80px and everything else in db_helvethaica_x_cond.
4. Keep blocks square; round only tabs (bottom 6.4px), buttons (6px) and semicircle labels.
5. Keep text on light backgrounds in #015a2d.
6. Re-measure with the extractor before adding any value.
