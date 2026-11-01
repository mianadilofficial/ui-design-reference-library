---
version: alpha
name: "Globlex Securities"
category: "Thai Brands"
description: "Thai brokerage portal declaring Kanit but loading no font file: #f4f6f3 page body, white column, #32373e text, #42a9d3 sky-blue tabs and links, #d6c83e olive section headings, #232b5b navy contact card, 4px top-rounded tabs and light shadows."
colors:
  canvas: "#ffffff"
  page-body: "#f4f6f3"
  ink: "#32373e"
  primary: "#42a9d3"
  on-primary: "#ffffff"
  surface-dark-navy: "#17222c"
  surface-contact-navy: "#232b5b"
  ink-warm-grey: "#a8a39e"
  ink-heading-olive: "#d6c83e"
  hairline: "#d9d9d966"
  footer-border: "#eeeeee"
typography:
  display:
    fontFamily: Kanit
    fontSize: 30px
    fontWeight: 400
    lineHeight: 40px
  button:
    fontFamily: Kanit
    fontSize: 16px
    fontWeight: 100
    lineHeight: 22.8571px
  subheading:
    fontFamily: Kanit
    fontSize: 16px
    fontWeight: 400
    lineHeight: 34px
  body:
    fontFamily: Kanit
    fontSize: 14px
    fontWeight: 100
    lineHeight: 24px
  link:
    fontFamily: Kanit
    fontSize: 17.6px
    fontWeight: 100
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 5px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 20px
  s8: 25px
  s9: 30px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 15px
    height: 39px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-warm-grey}"
    borderColor: "{colors.footer-border}"
---

# Globlex Securities

## Overview

The measured site is globlex.co.th, the Thai-language home page of Globlex Securities Co., Ltd. (the document title is "Globlex Securities Co.,Ltd"; the root language attribute is `en`). The page is a compact, older-style brokerage portal 2206px tall at 1280px: a header with a circular blue-and-gold Globlex logo on a blurred chart photograph, a pale-blue login box (account name, password, "Login", a forgot-password link), a dark navigation bar (หน้าหลัก, เกี่ยวกับเรา, บริการของเรา, สมัครใช้บริการ, บทวิเคราะห์, ข้อมูลและข่าวสาร, ติดต่อเรา, PDPA, ThaiD eServices), a white page body, a navy contact card ("ที่อยู่", email, phones, online trading line, complaints line) with a blue "Contact Us" tab, "Product & Service" tiles over faded stock photographs, an "Online Trading" row of partner logos (Settrade, Aspen, AomWise, efinanceThai, StockRadars), a "บทวิเคราะห์ ล่าสุด" row of four blue-headed research cards with view counts and dates, a "ข่าวและประกาศบริษัท" news row, and a dark footer with link list, Facebook and LINE links and "© 2017 Globlex. All Rights Reserved."

An important caveat: the computed font family on every element is Kanit, but the page's loaded-font list contains only FontAwesome, so no Kanit file was loaded. In the capture the text renders in a serif fallback face. The DESIGN.md records Kanit as the declared family and the serif rendering as an observation, not as a design intent. No popup, scrim or grayscale filter was detected.

## Colors

Measured background areas: white `#ffffff` (2784), a translucent grey `#d9d9d926` (1055, panel and section tint), dark navy `#17222c` (165), contact-card navy `#232b5b` (102), sky blue `#42a9d3` (86), grey `#444444` (62), `#92c0de` (36) and a translucent blue `#0088cc80` (35). The page body (the `<body>` background) is `#f4f6f3`. Text by characters: `#32373e` (1550, default ink), white (465), blue `#42a9d3` (422, links and accents), warm grey `#a8a39e` (387, footer-style text), olive-yellow `#d6c83e` (66, section headings such as "Product & Service") and `#337ab7` (27 characters only), which is not used as a brand color here because it appears so rarely.

The accent is sky blue `#42a9d3`: it fills the "Contact Us" tab and the research-card headers and colors links. Section headings are olive-yellow `#d6c83e`, and the contact card and dark bars use navy tones. Borders: `#d9d9d966` (18 uses), white (11), `#f1f1f1` (6), `#dedede` (4), and `#eeeeee` on the footer.

## Typography

Declared family: Kanit throughout (2917 characters). Root variables are empty. The generator's tokens record these computed values: h1/h2 "Product & Service" 30px at 400 with a 40px line height; sub-heading 16px at 400 with a 34px line height; body 14px at weight 100 with a 24px line height; links 17.6px at 100; the button label 16px at 100. Default reading size is 17.2px (1550 characters), then 14px (783), 16px (204), 17.6px (114), 12px (90), 13px (76), 30px (66) and 18px (34). A hidden 40px bold navigation element was measured but is treated as noise and excluded from the tokens. Since Kanit was not loaded, rendering depends on the visitor's fallback font.

## Layout

The page is a boxed white column centered on a pale photographic background, with a dark nav bar across the top of the box. Under the navigation, an empty wide column on the left (the slider area has no visible content in the capture) sits beside the navy contact card on the right. Below that, content sections each have an olive heading at left and a "ดูทั้งหมด ›" (view all) link at right, then a grid: six tiles in three columns by two rows, five logos in a row, four research cards, and four news columns. Spacing steps recorded: 3, 5, 8, 10, 12, 15, 20, 25, 30 and 32px.

## Elevation & Depth

Two shadows were measured: `rgba(0, 0, 0, 0.2) 0px 1px 10px 0px` and a button-style `rgba(255, 255, 255, 0.15) 0px 1px 0px 0px inset, rgba(0, 0, 0, 0.075) 0px 1px 5px 0px`, each used once. Depth is mostly from thin `#d9d9d966` borders around cards and from the navy contact card sitting against the light page.

## Shapes

Radii: 4px and 5px with squared bottoms (`4px 4px 0px 0px` on the Contact Us tab, `5px 5px 0px 0px` twice on card headers), 5px (3 uses) and 50% (4 uses, the circular icons in card headers and the logo). Tabs and card headers are rounded only on top.

## Components

- Primary button ("Contact Us" tab): fill `#42a9d3`, white 16px text at weight 100, padding `8px 15px`, 39px tall, radius `4px 4px 0px 0px`.
- Link: `#42a9d3`, 17.6px at weight 100 (for example "ซื้อขายหลักทรัพย์").
- Research card: blue header band with a circular icon and a category name (Daily reports, Technical Insight, Derivatives), a photo with a date and view counter, and a "อ่านรายละเอียด" (read more) link with a plus icon.
- Contact card: `#232b5b` with white text and blue pin, mail and phone icons.
- Footer: link row separated by thin vertical rules, social links, copyright in `#a8a39e`.

## Design System Architecture

No public design system or brand guideline was found; the home page HTML was opened and no such link is present. There are no root custom properties (the list is empty) and FontAwesome is the only loaded font file. The de-facto system is a hand-styled layout: colors and spacing are set directly in the CSS rather than through named variables, and the same few values (`#42a9d3`, `#d6c83e`, `#232b5b`, `#32373e`) recur across components.

## Do's and Don'ts

Do use sky blue `#42a9d3` for tabs, card headers and links, olive `#d6c83e` for section headings, and navy `#232b5b` for the contact card. Do round only the top corners of tabs and card headers. Do pair every section heading with a right-aligned view-all link.
Don't use the rare `#337ab7` as a brand color. Don't assume Kanit renders: no Kanit file was loaded. Don't add heavy shadows; only two light ones were measured.

## Responsive Behavior

The 390px mobile pass measured: the "Contact Us" button at 16px, weight 100, padding 10px and 43px tall (it was also the first heading candidate), the h2 "Product & Service" at 30px with padding `5px 0px 15px`, body 14px, and a navigation block 289px tall with padding `30px 15px`. Mobile font sizes recorded: 17.2px, 14px, 16px, 17.6px, 12px and 13px. Card column counts and the header layout on mobile were not measured.

## Iteration Guide

1. Page body `#f4f6f3`, white content column, `#32373e` text.
2. `#42a9d3` for tabs, links and card headers; olive `#d6c83e` section headings at 30px.
3. Navy `#232b5b` contact card; dark `#17222c` bars.
4. Round only the top corners (4px or 5px).
5. Load a real Thai font; the measured site did not.

### Imagery and voice

Imagery is generic financial stock photography (candlestick charts, coins and a balance, a calculator, a laptop with charts) shown as faded, desaturated tile backgrounds with blue Thai or English labels laid over them, so the labels (ซื้อขายหลักทรัพย์, ซื้อขายตราสารอนุพันธ์, ซื้อขายกองทุนรวม, ซื้อขายตราสารหนี้, งานวานิชธนกิจ, Finnize) carry the tile. Research cards use a bright blue header, a chart or desk photograph and file-style titles such as "Morning_call261009" and "Technical_Insight261009". Dates are shown as dd/mm/yyyy with a clock icon and view counts with an eye icon. The tone is formal and informational: news items are Thai regulatory announcements such as lists of securities, commission-rate notices and corporate-governance notices.
