---
version: alpha
name: freee
category: "Design Systems"
description: "freee marketing site: Japanese cloud accounting brand in Noto Sans JP (34px/51px headline, 16px body), saturated blue #2864f0 with navy #1e46aa on white and #f7f5f5, 8px primary buttons 48px high, white cards with a soft 2px shadow and pale-blue illustration tiles."
colors:
  canvas: "#ffffff"
  ink: "#323232"
  primary: "#2864f0"
  on-primary: "#ffffff"
  surface-dark: "#464343"
  surface-subtle: "#f7f5f5"
  ink-on-dark: "#d7d2d2"
  primary-deep: "#1e46aa"
  ink-soft: "#3b3b3b"
  link-border: "#aac8ff"
typography:
  display:
    fontFamily: "\"Noto Sans JP\", sans-serif"
    fontSize: 34px
    fontWeight: 500
    lineHeight: 51px
    letterSpacing: 1.36px
  display-mobile:
    fontFamily: "\"Noto Sans JP\", sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 36px
    letterSpacing: 0.96px
  subheading:
    fontFamily: "\"Noto Sans JP\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 36px
  body:
    fontFamily: "\"Noto Sans JP\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Noto Sans JP\", sans-serif"
    fontSize: 16px
    fontWeight: 700
  link:
    fontFamily: "\"Noto Sans JP\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  button-secondary:
    fontFamily: "\"Noto Sans JP\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 21px
rounded:
  xs: 5px
  sm: 8px
  md: 10px
  lg: 13px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 18px
  s8: 20px
  s9: 21px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 10px 10px 10px 20px
    height: 48px
    borderColor: "{colors.primary}"
  button-primary-hover:
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 4px 20px
    height: 31px
    borderColor: "{colors.primary}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary-deep}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 10px 10px 10px 20px
    borderColor: "{colors.link-border}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 32px 0px 0px
    boxShadow: rgba(70, 67, 67, 0.2) 0px 2px 4px 0px
  footer:
    textColor: "{colors.ink}"
---

## Overview

freee.co.jp is the marketing site of a Japanese cloud accounting and business-management company. Everything is built from one saturated blue, #2864f0, on white and a warm off-white (#f7f5f5), with a deeper navy-blue (#1e46aa, and #143278 in the measured backgrounds) for secondary buttons and headings. The measured document title is "クラウド会計ソフト｜freee" (cloud accounting software | freee), and the page language is Japanese.

The top of the page is a rotating hero carousel with pause and page-dot controls. Each slide is a rounded pale-blue panel with product screenshots floating at the right and a headline at the left; the measured desktop headline reads "すべてのスモールビジネスを支える統合型経営プラットフォーム" (an integrated management platform supporting every small business) with part of the line in blue. Under it sit two buttons, a blue "無料で始める" (start free) and a navy "資料ダウンロード" (download materials), each with small reassurance captions in slash-bracketed microcopy such as "＼クレジットカード不要／" (no credit card required).

Below, a header row carries the winged freee logo, audience menus (for sole proprietors, for corporations, product list, pricing, case studies, for tax accountants, freee AI), a small blue "無料ではじめる" button and an outlined "ログイン". A section titled "法人のお客さまへ" (for corporate customers) frames two white cards, accounting and HR/labor, with full-width blue footer bars. A product-family grid of pale-blue tiles shows each product logo beside a flat illustration (a folder, a money bag, a calculator). Imagery mixes photographs of staff and customers, desaturated at the edges, with friendly flat spot illustrations in blue line art. The voice is warm and plain Japanese, with short reassurance phrases rather than jargon.

## Colors

Primary blue #2864f0 is measured as the fill of the primary CTA (white text, 2px border in the same blue) and the compact "無料ではじめる" link button; the same hue appears in the emphasized words of headlines (#2964f0). The darker #1e46aa is used for card headings and link text, and #143278 for the navy download buttons. A very light blue (#ebf3ff) tints tiles and sections, and #aac8ff is the border of outlined link buttons.

Text is #323232 for headings and body, #3b3b3b for secondary, and #d7d2d2 on dark. The largest background area is #464343 (a dark warm grey, the footer), followed by #f7f5f5 and white. Hover on the primary button inverts the fill: the text takes the blue as measured in the hover state.

## Typography

The site uses Noto Sans JP at weights 400, 500 and 700 for everything (loaded fonts list those three). The measured desktop headline is 34px at weight 500 with a 51px line height and 1.36px letter-spacing; on mobile it is 24px/36px with 0.96px. Card and section headings are 24px bold on a 36px line, body copy is 16px/24px regular, primary buttons are 16px bold, compact buttons and link buttons are 14px bold, and links are 16px at weight 500.

Noto Sans JP is the only face measured, with a generic sans-serif fallback.

## Layout

The page is about 7280px tall on a 1280px viewport. A centered column holds the hero panel and the card pairs, with photographic bands bleeding to both edges behind the cards. Cards sit side by side with an equal split, followed by wide product-tile rows that scroll horizontally. Sections alternate white and #f7f5f5 grounds, and a pale-blue band closes with illustrated four-up topic columns that each have a short blue vertical bar as a bullet.

Spacing is generous: card padding runs to 32px at the top, buttons are 48px tall for the primary and 31px for compact ones.

## Elevation & Depth

Depth is gentle. Cards carry rgba(70, 67, 67, 0.2) 0px 2px 4px 0px, a short, tinted shadow derived from the footer grey. Overlapping layers, such as white cards over blurred photographs and the floating "導入お問い合わせ" inquiry chip at the right edge, create the rest of the depth through contrast rather than blur.

## Shapes

Radii are measured at 5px, 8px, 10px and 13px, plus 50 percent circles and full pills. The primary CTA is 8px, the compact CTA 5px, cards 8px, with the bottom bars of the cards rounded at 6px on their lower corners. Section labels such as "法人のお客さま" use a pill outline. Icons sit in rounded-square pale tiles.

## Components

Primary button: blue #2864f0 fill, white 16px bold label, 8px radius, 48px high, padding 10px 10px 10px 20px with a trailing chevron icon, a 2px border in the same blue. Secondary compact button: same fill, 14px bold, 5px radius, 31px high, padding 4px 20px. Navy download button: #143278 fill with a download icon. Link button: white fill, #1e46aa text at 16px/500, #aac8ff border, 8px radius.

Cards: white, 8px radius, 32px top padding, soft shadow, centered product logo, two buttons, and a full-width blue bar link at the bottom. Navigation: white header, #323232 14px text with dropdown chevrons. Footer: dark #464343 with #d7d2d2 text and a large multi-column link list.

## Design System Architecture

freee publishes a design system called Vibes. The repository https://github.com/freee/vibes describes it as the design system used at freee (the README text is Japanese), licensed Apache-2.0, distributed as the npm package @freee_jp/vibes with React components and a vibes_2021.css stylesheet. The address in the catalog, https://vibes.freee.co.jp, is its Storybook: its stories index (index.json) lists documents such as doc/Colors, doc/Design/Layout and doc/Stylesheets and component groups such as lv1/buttons/Button, lv1/forms/TextField, lv1/bases/CardBase and lv1/grids/Grids. I did not read those component pages.

The marketing site does not use it. The served home page markup uses its own class names (g-footerNav_*, topLevelHeaderLogin_*, i-label, lazy_image, u-display-only-md) and nothing referencing vibes, so no value in this file comes from Vibes; the numbers are the live measurements of the marketing site.

## Do's and Don'ts

Do use #2864f0 for the main action and the emphasized words of a headline, and pair it with the navy for a second action. Do keep Noto Sans JP, 16px/24px body and generous letter-spacing on headlines. Do keep the slash-bracket reassurance captions above CTA buttons.

Don't use pure black text; the system's ink is #323232. Don't add a second accent hue; illustrations stay in blue line art. Don't use heavy shadows or sharp corners; radii are 5px to 13px.

## Responsive Behavior

The measured mobile pass shows the hero headline at 24px/36px with 0.96px tracking against 34px/51px on desktop, and the mobile slide carries a different message ("好きなことをする時間を大切にして欲しいから。", roughly "because we want you to treasure time for the things you love"). The markup also contains paired utility classes named u-display-only-md and u-display-none-md, which indicates separate desktop and mobile elements. Other breakpoint details were not measured.

## Iteration Guide

Begin with white and #f7f5f5 grounds, #323232 text and #2864f0 as the single action color; add #1e46aa for headings and secondary actions. Set everything in Noto Sans JP, 34px/51px with 1.36px tracking for hero headlines, 16px/24px body. Build buttons at 48px and 8px radius with a trailing chevron, and cards at 8px radius with rgba(70, 67, 67, 0.2) 0px 2px 4px 0px. Keep the reassurance microcopy, the pale-blue illustration tiles, and the blue emphasis within headlines. Re-measure on the live page before adding any new value.
