---
version: alpha
name: "Eflowsys"
category: "Thai Brands"
description: "Eflowsys, Thai ERP and e-Tax software vendor: white canvas, blue #046bd2 buttons with 5px radius, Sarabun 16px body, Arial 700 48px hero headline, 20px-radius translucent cards over photography."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#046bd2"
  on-primary: "#ffffff"
  surface-3: "#e2e8f0"
  ink-2: "#3a3a3a"
  ink-3: "#334155"
  ink-4: "#054cd9"
  link: "#292929b8"
  nav-text: "#f9fafb"
  card-bg: "#ffffffb5"
  card-text: "#1e90ff"
  footer-bg: "#f9f9f9"
typography:
  display:
    fontFamily: Arial
    fontSize: 48px
    fontWeight: 700
    lineHeight: 72px
  display-mobile:
    fontFamily: Arial
    fontSize: 33.6px
    fontWeight: 700
    lineHeight: 50.4px
  heading:
    fontFamily: Sarabun, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 28.6px
  subheading:
    fontFamily: Sarabun, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
  body:
    fontFamily: Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26.4px
  button:
    fontFamily: Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
rounded:
  xs: 2px
  sm: 3px
  md: 5px
  lg: 20px
  xl: 26px
  2xl: 40px
  3xl: 50px
  4xl: 100px
  pill: 9999px
spacing:
  s1: 2px
  s2: 2.5px
  s3: 3px
  s4: 5px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 24px
    height: 42px
    borderColor: "{colors.primary}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 0px 0px 0px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 24px
    height: 42px
    borderColor: "{colors.primary}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 0px 0px 0px
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.card-text}"
    rounded: "{rounded.lg}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink}"
---

# Eflowsys

## Overview

Eflowsys (https://www.eflowsys.com/, footer "Eflowsys Company Limited / บริษัท อีโฟลว์ซิส จำกัด") is a Thai software company selling the eToday ERP cloud accounting suite, an e-Tax Invoice engine, an MRP web application, web mail and hosting, and cloud services. The page title is "โปรแกรมบัญชีสำเร็จรูป-Accounting Software ERP : Eflowsys" and the document language attribute is `en-US`. Copy is bilingual Thai and English, dense and keyword-rich: the page body lists terms like "โปรแกรมบัญชี, ระบบบัญชี, Accounting Program" and the capture's feature bullets read like sales checklists ("Real Time 100% Cloud Online", "Anywhere Anytime Work Smart", "SSL Security").

The 1280px capture shows: a dark-blue top bar with the script-style "eflowsys" logo at left, six menu items in bold white (Product, Service, Reference ShowCase, Support, Knowledge, Contact Us), each with a dropdown chevron, and a blue phone icon and a green LINE chat icon at right; a hero slider of photographs of smiling people in blue-tinted office scenes with a translucent frosted white card carrying the slide text (headline "e-Tax Invoice ครบจบในที่เดียว", subline "ขึ้นระบบได้ภายใน 2 วันทำการ !!", and green-check bullets); a "Testimonial : เสียงตอบรับจากลูกค้า" carousel with arrows and pagination dots; a section on a pale teal band with curved top and bottom edges, headed "eToday ERP Cloud โปรแกรมบริหารจัดการองค์กร", with a bullet list on the left and an embedded explainer video on the right; and a "Products & Services" grid of product cards with illustrated box art. The page is 6720px tall.

The overall impression is corporate blue with a photographic hero and many small text blocks.

## Colors

- Canvas `#ffffff` (5972 by area) and `card-bg` `#ffffffb5` (translucent white cards over hero photography, 2573).
- Ink `#000000` is the most-read text colour (16450 characters); `ink-2` `#3a3a3a` second (6477); `ink-3` `#334155` (the Astra theme's `--ast-global-color-3`) for outlined-button text.
- Primary `#046bd2` (`--ast-global-color-0`): the fill and 1px border of the filled "Learn more" buttons, with white text. A deeper blue `#045cb4` (`--ast-global-color-1`) was measured as hover/second blue (121 characters of text, 15 area weight).
- `ink-4` `#054cd9` and `card-text` `#1e90ff`: blues for headings on cards; `#3328ee` is the hero headline colour in the capture's slide card.
- `surface-3` `#e2e8f0` (`--ast-global-color-6`): borders and light panels; `footer-bg` `#f9f9f9`; `nav-text` `#f9fafb` (`--ast-global-color-4`), the menu text colour; `link` `#292929b8`, a translucent dark grey for secondary links.
- Menu hover turns text from `#f9fafb` to `rgb(93, 180, 228)`.
- Also measured as text: red `#f90909` (41 characters) and `#357cbd`, `#444444`.

The pale teal band and the nav's dark blue gradient are visible in the capture but their fills were not measured as tokens, so they are not declared.

## Typography

Sarabun (400) is the Thai and Latin body face (21678 measured characters), with Arial (2490) for card headlines and the hero, Source Serif 4 (700) on 58 characters in the header, and a system font stack. Weights are 400 (18090 characters), 700 (5888) and 500 (286, buttons).

- `display`: Arial 700, 48px/72px (hero slide headline); mobile 33.6px/50.4px.
- `heading` (h2): Sarabun 400, 22px/28.6px.
- `subheading` (h3): Sarabun 400, 20px/26px.
- `body`: Sarabun 400, 16px/26.4px (most characters, 19542).
- `button`: Sarabun 500, 16px with line-height 16px.
- Other sizes: 18px (1984), 20px (1721), 28px with 1px letter-spacing (349), 40px, 36px, 32px, 13.3333px, 13px and 10px.

Both Sarabun and Arial were measured as used fonts.

## Layout

The page is full-width sections, container content width around 1336px for text blocks (h2, h3, body measured at 1336px wide). The header is 85px high. Spacing is based on 10px: gaps of 20px (91 instances) and 10px (87), paddings of 10px (211) and 20px (42), plus 7px, 12px, 3px, 8px, 40px and 50px. The hero card measures 726px by 377px and the e-Tax card 716px by 500px with a 20px radius. The framework class names visible in root variables (`--ast-container-default-xs-padding: 2.4em`, `--ast-normal-container-width`) belong to the Astra WordPress theme.

## Elevation & Depth

Shadows are declared but flat: `rgba(0, 0, 0, 0.44) 0px 0px 0px 0px` (113 elements) and `rgba(0, 0, 0, 0.15) 0px 0px 0px 0px` (13), both with zero offset and blur, so they render nothing. The depth in the capture is photographic: frosted translucent cards (`#ffffffb5`, one with a 1px `#ffffff` border) sit on the hero image, and the teal band has curved edges. The WordPress preset `--wp--preset--shadow--outlined` is a hard offset shadow that is declared in the theme and not measured on a component.

## Shapes

Radii: 5px for buttons (`md`), 20px for cards (29 instances, `lg`), 50px (21) and 50% (13) for round icon holders, 26px, 40px, 100px, 250px, 3px and 2px. The pill token is 9999px. Primary buttons are 5px rounded with a 1px border in the fill colour; the outlined "Read more" chips are 5px rounded with a `#e2e8f0` border.

## Components

- Primary button: Sarabun 500 16px, white on `#046bd2`, border 1px solid `#046bd2`, radius 5px, padding 12px 24px, height 42px (examples "Web Mail & Hosting | Learn more", 277px wide; "Cloud Solution | Learn more", 243px wide).
- Outlined chip: text `#334155`, border 1px solid `#e2e8f0`, padding 5px 10px, height 28px (for example "ยานยนต์ | Read more").
- Menu: bold, 16px, `#f9fafb` text; hover `rgb(93, 180, 228)`.
- Hero card: `#ffffffb5` fill, 20px radius, Arial 48px headline.
- Footer: `#f9f9f9` background, black text, 557px tall, starting with the company name in Thai and English and the sitemap columns (Product, Service, ...).
- Contact icons: phone and LINE in the header.
- Carousel: arrows and pagination dots (swiper bullets 12px by 12px).

## Design System Architecture

No public design system or brand guideline is linked from the site. The CSS belongs to the Astra WordPress theme plus the Swiper carousel library: colour variables `--ast-global-color-0` to `-8` (`#046bd2`, `#045cb4`, `#1e293b`, `#334155`, `#f9fafb`, `#FFFFFF`, `#e2e8f0`, `#cbd5e1`, `#94a3b8`), `--wp--preset--*` WordPress presets, and `--swiper-pagination-bullet-*`. The brand layer is thin: blue `#046bd2` as the action colour on top of the theme's slate neutrals. Source: root variables in the extraction of https://www.eflowsys.com/.

## Do's and Don'ts

Do:
- Use `#046bd2` for filled actions with white 16px Sarabun 500 text and a 5px radius.
- Keep body copy in Sarabun 16px/26.4px black.
- Use the 20px radius on cards and translucent white over photography.
- Write bilingual Thai/English headings.

Don't:
- Do not treat zero-blur shadows as visible elevation.
- Do not use the WordPress preset colours (`#9b51e0`, `#f78da7`) as brand colours.
- Do not set Thai text in Arial; Sarabun is the Thai face.
- Do not add colours that are not measured.

## Responsive Behavior

The 390px mobile pass measured: the h1 role resolving to the card headline "MRP WEBBASED APPLICATION" at Arial 700, 33.6px/50.4px, in `#1e90ff` (374px wide); the h2 unchanged at 22px/28.6px (414px wide); body text at 14.592px/24.0768px (274px wide); and character sizes 14.592px (19118), 10.8px (1984), 20px, 16px, 28px and 22px. The primary CTA remained present on mobile. Menu behaviour, carousel behaviour and breakpoints were not measured.

## Iteration Guide

1. White ground, black text, blue `#046bd2` actions.
2. Sarabun 400 at 16px/26.4px; headline Arial 700 48px/72px.
3. 5px-radius buttons with 12px 24px padding; 20px-radius translucent cards.
4. Build the hero as a photograph with a frosted card; add the curved pale section band.
5. Run `node web/scripts/verify-designs.mjs --slug=eflowsys`.
