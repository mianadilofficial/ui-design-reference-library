---
version: alpha
name: "Asia Plus Securities"
category: "Thai Brands"
description: "Thai brokerage and research portal in DB Heavent: 86px weight-100 headings, navy #132a4b bands, teal #04a791 accents, white #ffffff research cards, 0px-radius navy submit button and 4px-radius cards with 50px pill outlines."
colors:
  canvas: "#132a4b"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#132a4b"
  on-primary: "#ffffff"
  surface-teal: "#04a791"
  ink-body: "#5c5c5c"
  ink-strong: "#272727"
  ink-muted: "#6f6f6f"
  ink-field: "#000000de"
  ink-subtle: "#717171"
  hairline: "#dedede"
  button-secondary-bg: "#ffffff0d"
typography:
  display:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 86px
    fontWeight: 100
    lineHeight: 64.5px
  display-mobile:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 46px
    fontWeight: 100
    lineHeight: 34.5px
  subheading:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 28px
    fontWeight: 500
  body:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 21px
    fontWeight: 400
  button:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 22px
    fontWeight: 400
  link:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 22px
    fontWeight: 500
  button-secondary:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 24px
    fontWeight: 500
rounded:
  xs: 3px
  sm: 4px
  md: 30px
  lg: 50px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 7px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 7px 45px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink-field}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    padding: 0px 15px
    height: 58px
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.ink-field}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 4px 0px 5px
    height: 41px
  footer:
    textColor: "{colors.page-body}"
    rounded: "{rounded.none}"
---

# Asia Plus Securities

Note on naming: the queue lists this brand as Asia Plus Group Holdings (asiaplus.co.th). The measured page is the securities brokerage site: its title is "หลักทรัพย์ เอเซีย พลัส | เปิดพอร์ตซื้อขายหุ้นไทยหุ้นต่างประเทศ | Asia Plus Securities" and its footer reads "© 2026 Asia Plus Securities Company Limited.", so this file is named after the securities company.

## Overview

The site is a Thai-language retail brokerage portal in which research content is the headline product. The top of the page is a hero carousel with a laptop photograph and a blue "คลิก" pill button, with a stack of translucent teal link panels on the right ("เครื่องมือลงทุนครบวงจร", "มัดรวมหุ้นก็ออกใหม่ 2569", "ผู้แทนผู้ถือหุ้นกู้", and an investor notice). Below it, a large thin "Research / บทวิเคราะห์" heading introduces a left rail of research categories and a three-column grid of article cards with blue banner artwork, green category tags, a ticker code at the right and a publication date in the Buddhist-era format (for example 09.10.2569). Further down a full-width navy band titled "Products & Services" holds tabs and photo tiles with teal caption panels.

The capture was taken with a modal announcement open (a white dialog with carousel dots, a "ไม่แสดงอีกในวันนี้" checkbox and a close "×"); that dialog is a notice, not brand UI, and its card styling was dropped from the tokens. The extractor logged the dialog's scrim as hidden for measurement.

## Colors

Measured background areas: white `#ffffff` (5164), navy `#132a4b` (2357), translucent blue `#3e6ab233` (207), teal `#04a791` (206) and a translucent white `#ffffff0d` (74). The generator's canvas role is the navy `#132a4b` and the white page body is stored as `page-body`; navy is both the detected primary button fill and the large section ground, while white is the reading surface for research cards.

Text colors by character count: white `#ffffff` (2938, on navy and teal), body grey `#5c5c5c` (1602), `#272727` (626, link text), `#6f6f6f` (440), `#000000de` (405, field text), `#717171` (270) and navy `#132a4b` (165, the big heading). Hairline `#dedede` (6 border uses). The teal `#04a791` is the second brand color, used for panels, tags and the left rail markers; on hover the nav pill recorded `rgba(4, 167, 145, 0.8)` fill with `rgba(73, 224, 154, 0.8)` border and `rgb(238, 238, 238)` text. The swiper theme color `#007aff` in root variables is a library default and is not used as brand color.

## Typography

DB Heavent is the only family (6825 characters), loaded at 400, 500 and 700 with a sans-serif fallback. It is a commercial Thai face; if unavailable, Sarabun or Noto Sans Thai are suggestions only and were not measured.

Measured roles: the display heading "Research / บทวิเคราะห์" is 86px at weight 100 with a 64.5px line height in navy; the sub-heading is 28px at 500; body is 21px at 400; button label 22px at 400; link 22px at 500; the secondary button label is 24px at 500. The most frequent sizes are 22px (1972 characters), 21px (1602), 19px (855), 20px (623), 27px (384) and 24px (221). The extremely light 100 weight at 86px paired with 500-weight small text is the signature contrast.

## Layout

The desktop page is 5673px tall. The research section uses a narrow left rail (category links separated by thin rules with a green vertical bar marker at the start of each) and a three-column card grid on the right. The Products & Services band is a navy section with a two-part layout: a tall promotional image on the left and a heading, tab row and a grid of photo tiles on the right. Spacing values recorded: 2, 4, 5, 7, 8, 9, 10, 12, 14 and 15px.

## Elevation & Depth

Shadows recorded: `rgba(0, 0, 0, 0.16) 0px 3px 6px 0px` (3 uses, also an inset pair, 4 uses) on pill buttons such as "ดูทั้งหมด", and a large layered shadow on the modal dialog (not brand UI). Research cards are separated by light borders and white-on-white spacing instead of heavy shadows.

## Shapes

Radii measured: 50% (24 uses, circles), 50px (13, pill buttons and the nav pill), 4px (8, cards), 30px (and the half-pill pair `30px 0px 0px 30px` / `0px 30px 30px 0px`), and 3px. The primary submit button and the secondary button are `0px` radius.

## Components

- Primary button ("ส่งข้อมูล"): fill `#132a4b`, text `#ffffff`, DB Heavent 22px 400, padding `7px 45px`, 40px tall, 0px radius.
- Secondary button ("บทวิเคราะห์ในประเทศ และต่างประเทศ"): fill `#ffffff0d`, text `#000000de`, 24px at 500, padding `0px 15px`, 58px tall.
- Outlined pill ("ดูทั้งหมด"): text `#8b8282`, 22px, 50px radius, `1px solid #dddddd`, shadow `rgba(0, 0, 0, 0.16) 0px 3px 6px 0px`, 44px tall.
- Text input: `#000000de` text, 22px, 41px tall, padding `4px 0px 5px`, 0px radius.
- Link: `#272727`, 22px at 500 ("House View", "The ART Talk Channel").
- Footer: white text, 20px, 104px tall.

## Design System Architecture

No public design system or brand guideline was found: the home page was opened and the request returned a 302 for a plain HTTP fetch, and the measured render shows no design-system link. The de-facto system is a bespoke theme using Slick and Swiper carousels (the loaded fonts include "slick"), Material UI class names for the modal backdrop, and a single typeface. Brand colors are applied directly rather than through root variables (the only root variables are swiper and animate.css settings).

## Do's and Don'ts

Do use navy `#132a4b` for large bands and the submit button, teal `#04a791` as the accent, and white for research cards. Do pair a very light 86px heading with compact 21-22px text. Do keep Buddhist-era dates and ticker codes on cards.
Don't use the swiper blue `#007aff`. Don't copy the modal dialog's shadow or card as a brand card. Don't round the submit button; the measured primary has 0px radius.

## Responsive Behavior

The 390px mobile pass measured: h1 46px at weight 100 with a 34.5px line height, body text 20px at 400, and the primary button "ประเภทบทวิเคราะห์" (research-type selector) with navy fill, white 20px text, padding 10px and a 44px height. The measured mobile font sizes are 20px, 22px, 19px, 19.024px, 24px, 18px, 46px and 28px. Behaviour of the card grid, rail and carousel on mobile was not measured.

## Iteration Guide

1. Start with white reading surfaces and navy `#132a4b` bands; accents in teal `#04a791`.
2. Set all text in DB Heavent; heading 86px at 100, body 21px at 400.
3. Build cards at 4px radius with a banner image, a green tag, a ticker and a date.
4. Keep the submit button square and navy.
5. Re-measure with the extractor before adding colors; discard the modal.

### Imagery and voice

Navigation labels (from the measured body text) are หน้าหลัก, บทวิเคราะห์, ผลิตภัณฑ์และบริการ and ข่าวสารและโปรโมชั่น. Research cards use illustrated blue banners with English series names (Global News Story, Technical Snap, Synapse Market Insight, Technical Stories) and Thai sector banners, a green tag naming the series, a Buy or Trading rating with a ticker, and a two-line headline in Thai with English tickers such as SPCX US or 2330 TT. Product tiles use dark, high-contrast stock photography (a yacht for wealth management, a trading chart, a diver, coins, a globe) with a teal caption panel carrying a short Thai description. The voice is informational and market-focused rather than promotional; the one call to action in the hero is a short "คลิก" pill.
