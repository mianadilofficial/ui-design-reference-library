---
version: alpha
name: Eastern Polymer Group (EPG)
category: "Thai Brands"
description: "Eastern Polymer Group (EPG) Thai homepage (epg.co.th/th/home/): Noto Sans Thai at 14px body and 600-weight headings, royal blue #1e51a4 on white with #f8f8f8 menu bars, orange #f29400 accents, 5px and 18px radii and soft 0 0 10px shadows on news cards."
colors:
  canvas: "#ffffff"
  ink: "#1e51a4"
  primary: "#1e51a4"
  surface-2: "#f8f8f8"
  ink-2: "#000000"
  ink-3: "#adadad"
  ink-4: "#222222"
  navy-teal: "#002c42"
  hairline: "#eaeaea"
  link: "#4f4343"
  text-input-text: "#454545"
  accent-orange: "#f29400"
  accent-yellow: "#ffba00"
typography:
  display:
    fontFamily: noto-sans-thai, noto-sans, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  display-mobile:
    fontFamily: noto-sans-thai, noto-sans, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 25.2px
  heading:
    fontFamily: noto-sans-thai, noto-sans, sans-serif
    fontSize: 25px
    fontWeight: 600
    lineHeight: 25px
  body:
    fontFamily: noto-sans-thai, noto-sans, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.75px
  nav:
    fontFamily: noto-sans-thai, noto-sans, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24.375px
  link:
    fontFamily: Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  input:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 15px
    fontWeight: 500
    lineHeight: 15px
rounded:
  xs: 5px
  sm: 18px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 7px
  s6: 10px
  s7: 12px
  s8: 12.67px
  s9: 15px
  s10: 16px
components:
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.link}"
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
    padding: 4px 0px
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 0px 12.6667px
    height: 38px
---

## Overview

The measured site is `https://www.epg.co.th/th/home/`, titled "บริษัท อีสเทิร์นโพลีเมอร์ กรุ๊ป จำกัด (มหาชน) - EPG", the Thai homepage of Eastern Polymer Group Public Company Limited, whose logo reads "EPG" with the tagline "CREATIVE INNOVATION ORGANIZATION" and "EASTERN POLYMER GROUP". The queue entry for this slug named it "Eastern Power Group" (slug `eastern-power`); the site that the URL actually shows is Eastern Polymer Group, so this DESIGN.md is named after the measured site.

The page is a clean corporate portal, 1,280px wide and 2,575px tall. A blue strip crowns a white header with the logo, a gray search field with a blue magnifier and TH and EN flag links. A light-gray `#f8f8f8` menu bar carries seven items (หน้าหลัก, เกี่ยวกับเรา, นักลงทุนสัมพันธ์, ข่าวสาร, บรรษัทภิบาล, การพัฒนาอย่างยั่งยืน, ติดต่อเรา) with chevrons on dropdown items. A carousel shows a tall night-city photograph beside a wide airport-ceiling photograph with the English headline "ADVANCED TECHNOLOGY FOR A BETTER FUTURE". A white floating panel offers three icon shortcuts in orange (ข้อมูลบริษัท, นักลงทุนสัมพันธ์, ติดต่อเรา) each with a blue "อ่านเพิ่มเติม" link. Two news rows ("ข่าวอีพีจี" and "ข่าวบริษัทในเครือ") show three photo cards each, with a small orange rule over a gray "News" label, a blue bold headline and a date. A blue footer band carries the company name and a Facebook icon, followed by link columns with orange chevron bullets.

The back-to-top square at the right edge of the capture is a control, not brand UI.

## Colors

- **Canvas `#ffffff`** is the dominant background (weight 3,100); **`#f8f8f8`** (280) is the menu bar and some panels; **blue `#1e51a4`** (146) is the blue strip, footer band and the hover fill of menu items.
- **Ink `#1e51a4`** is the most-read text color (780 characters: card headlines, links, footer headings); black `#000000` (732 characters) is body and shortcut titles; `#adadad` (103) is date and meta text; `#222222` (75) is menu-bar text; `#002c42` (27) is a dark teal-navy text color.
- **Link `#4f4343`** is the language-link color; **text-input text `#454545`**; **hairline `#eaeaea`** is the card and panel border (six elements).
- **Orange `#f29400`** is a border color on five elements and the 48-count stylesheet color of the icon and rule accents; **yellow `#ffba00`** is a measured background with zero area weight (a carousel marker in the capture).
- Menu hover (measured): the item switches from `#222222` on `#f8f8f8` to white text on `#1e51a4`.

## Typography

**Noto Sans Thai** (loaded as `noto-sans-thai` at weights 400, 500, 600 and 700, with `noto-sans`) sets 1,674 measured characters; **Sarabun** (400) sets 111 characters in link blocks. Roboto and dashicons are also loaded; Font Awesome 5 supplies icons.

- **Display** 20px/600/28px (section titles such as "ข้อมูลบริษัท"); mobile 18px/25.2px.
- **Heading** 25px/600/25px (the company name in white on the blue footer band).
- **Body** 14px/400/22.75px; the most common sizes are 14px (682 characters) and 15px (668).
- **Navigation** 15px/400/24.375px.
- **Link** Sarabun 16px/400/26px.
- **Input** 15px/500.
- Other sizes: 12, 13, 17, 18, 22 and 24px. Weights: 400 (818), 600 (791), 500 (149), 700 (27). No letter-spacing was recorded.

### Font substitutes

Noto Sans Thai, Sarabun and Roboto are open Google Fonts families; the declared fallback is `sans-serif`.

## Layout

A centered container with 30px-class gutters. The header is a white block holding the logo at left, the 206px-wide, 38px-high search field and language links at right; the menu bar below is full-width. The news sections use three equal columns with 10px-class gaps; each card is a photograph over a text block with a hairline-separated date row. The shortcut panel is a three-column white card floating over the carousel edge with vertical hairline dividers. The footer is a blue band followed by a four-column link grid (logo and address, เกี่ยวกับเรา, นักลงทุนสัมพันธ์, บริษัทในเครือ) with phone, fax and website lines in orange icons. Padding values: 10px (21 uses), 20px (13), 2px (8), 18px (7), 5px (6). Spacing values: 2, 3, 4, 5, 7, 10, 12, 12.67, 15 and 16px.

## Elevation & Depth

Cards and panels float with soft, wide shadows: `rgba(0, 0, 0, 0.15) 0px 0px 10px 0px` (six elements), `rgba(0, 0, 0, 0.1) 0px 10px 20px 0px` (one) and `rgba(0, 0, 0, 0.16) 0px 0px 50px 0px` (one, the large shortcut panel in the capture). Hairline `#eaeaea` borders and the light-gray menu bar provide separation.

## Shapes

Radii are modest: 5px (three elements) and 18px (two). The search field and cards are lightly rounded; photographs are rectangular; the blue strip, menu bar and footer band are square. Icon shortcuts are line icons without containers.

## Components

- **Menu bar.** `#f8f8f8` background, 15px Noto Sans Thai items in `#222222`; hover fills the item with `#1e51a4` and turns the text white (measured).
- **Search field.** Light-gray field, `#454545` 15px/500 text, 206px by 38px, padding 0px 12.6667px, blue magnifier button at right.
- **Language links.** "TH" and "EN" with flag icons in `#4f4343`, 15px; hover text becomes `#444444`.
- **Shortcut panel.** White, large soft shadow, three orange icons, 20px/600 titles in black and "อ่านเพิ่มเติม" links in blue.
- **News card.** Photograph, blue 14px-class bold headline, a hairline, and a date line in `#adadad`.
- **Section header.** Gray "News" label with a short orange rule, then a 25px-class bold black Thai heading, with a blue "อ่านเพิ่มเติม →" link at the right.
- **Footer.** Blue band with white 25px/600 company name; link columns with orange chevron bullets.
- **Not documented as brand UI:** the back-to-top control.

## Design System Architecture

No public design system or brand guideline was found: the Thai homepage was opened and links only to corporate content, and no search was run. The root custom properties were not recorded as a usable set. The page ships WordPress-style assets (dashicons) and Font Awesome 5, and its type is declared as `noto-sans-thai, noto-sans, sans-serif`. The de-facto system is a blue-and-orange corporate palette on white, Noto Sans Thai at weights 400/600, soft-shadow cards and chevron-linked footers. Source: https://www.epg.co.th/th/home/ as measured by the repository extractor.

## Do's and Don'ts

- Do use `#1e51a4` for headlines, links and the footer band, with black body text on white.
- Do use the `#f8f8f8` menu bar with a full blue fill on hover.
- Do use orange `#f29400` only for icons, rules and bullets.
- Do float cards with soft wide shadows such as `rgba(0, 0, 0, 0.15) 0px 0px 10px 0px`.
- Don't use heavy borders; the hairline is `#eaeaea`.
- Don't present the back-to-top control as a component.
- Don't call this site "Eastern Power"; the measured company is Eastern Polymer Group.

## Responsive Behavior

Measured on a 390px mobile pass: the h1 role ("ข้อมูลบริษัท") falls from 20px/28px to 18px/25.2px (86px by 26px box); the company-name h2 falls from 25px to 20px with a 340px by 40px box (it wraps to two lines); body text stays 14px/22.75px with a 342px-wide box. The mobile pass recorded no layout counts (header links, menu toggle, columns), so those are not measured. Other breakpoints are not measured.

## Iteration Guide

1. Use the tokens as measured.
2. White canvas, `#1e51a4` headings and links, black body copy at 14px/22.75px in Noto Sans Thai.
3. Use a light-gray menu bar whose items fill blue on hover.
4. Use orange accents only on icons and short rules.
5. Name the brand Eastern Polymer Group (EPG); the queue name is a mismatch.
6. Run `node web/scripts/verify-designs.mjs --slug=eastern-power` until it passes.
