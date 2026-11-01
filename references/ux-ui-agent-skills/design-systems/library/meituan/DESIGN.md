---
version: alpha
name: Meituan (美团)
category: "Retail & E-commerce"
description: "Meituan corporate site (meituan.com): canvas #f7f8f9, navy-black ink #111925, brand yellow #ffd100, white 16px-radius news cards, MTTiJ display at 52px/500 and PingFang SC body at 14px, Chinese-first with a soft yellow hero glow."
colors:
  canvas: "#f7f8f9"
  page-grey: "#f3f3f3"
  ink: "#111925"
  primary: "#ffd100"
  surface-card: "#ffffff"
  surface-footer: "#f3f3f4"
  ink-faint: "#b8babe"
  ink-secondary: "#0f1925a6"
  ink-tertiary: "#11192559"
  ink-grey: "#656a72"
  ink-strong-alpha: "#111925d9"
  hairline: "#11192533"
typography:
  display:
    fontFamily: MTTiJ, "PingFang SC", "Microsoft YaHei UI", "Microsoft YaHei", "Source Han Sans CN"
    fontSize: 52px
    fontWeight: 500
    lineHeight: 72px
  display-mobile:
    fontFamily: MTTiJ, "PingFang SC", "Microsoft YaHei UI", "Microsoft YaHei", "Source Han Sans CN"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 24px
  heading:
    fontFamily: "\"PingFang SC\", \"Microsoft YaHei UI\", \"Microsoft YaHei\", \"Source Han Sans CN\", sans-serif, \"Helvetica Neue\", Helvetica, Arial"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 40px
  body:
    fontFamily: "\"PingFang SC\", \"Microsoft YaHei UI\", \"Microsoft YaHei\", \"Source Han Sans CN\", sans-serif, \"Helvetica Neue\", Helvetica, Arial"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  nav:
    fontFamily: "\"PingFang SC\", \"Microsoft YaHei UI\", \"Microsoft YaHei\", \"Source Han Sans CN\", sans-serif, \"Helvetica Neue\", Helvetica, Arial"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 16px
spacing:
  s1: 3px
  s2: 4px
  s3: 8px
  s4: 9px
  s5: 10px
  s6: 13px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 40px
components:
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    height: 60px
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink}"
    padding: 48px 0px 0px
---

# Meituan (美团)

Measured from https://www.meituan.com (final URL https://www.meituan.com/), simplified Chinese (`lang zh-CN`, title "美团 - 帮大家吃得更好，生活更好"), 1280px desktop pass (page height 2,595px) and 390px mobile pass. A consent/overlay element (`S`) was hidden by the extractor. This is the corporate site of the Chinese technology-retail company, not its consumer app.

## Overview

A light, airy corporate home with one brand signal: Meituan yellow. The header is a white-to-pale bar carrying the yellow rounded-square logo mark with the 美团 wordmark and a horizontal nav (首页, 和美团合作, 我们的科技, 企业社会责任, 美团公益, 信息公开, 投资者关系, 加入我们, 下载和关注, 简体中文); the active item has a short yellow underline. The hero has a soft yellow glow behind a centered 52px headline, "美团是一家科技零售公司" ("Meituan is a technology retail company"), a mission line ("帮大家吃得更好，生活更好"), a small paragraph on company history and a "下载美团App" link with a QR icon. Under the hero, "最新动态" (Latest news) has a "查看全部" (View all) button and a grid of white cards: a wide feature card, then two-column and three-column rows, each with a photo or illustration, a bold title, a grey one-line summary and a date such as 2026-10-07. A centered "查看全部" button closes the list, followed by a light grey footer with a yellow logo and four link columns (了解更多, 加入我们, 联系我们, 下载和关注).

Photography is bright, cheerful and product-centered: illustrated holiday scenes, delivery riders in yellow helmets, a yellow Meituan block mark, a pharmacy sign. Copy is formal Chinese with concrete figures ("营收增至1046亿元").

## Colors

- **Canvas `#f7f8f9`** (largest background area, 2,829); body background `#f3f3f3`; cards `#ffffff` (1,760); footer `#f3f3f4` (493); `#ffffffd9` frosted white (102).
- **Ink `#111925`**: a blue-tinted near-black; 550 characters; tints `#0f1925a6` (142, summaries), `#11192559` (88, dates), `#111925d9` (44) and grey `#656a72` (72); light grey `#b8babe` (267, 12px footer links).
- **Primary `#ffd100`**: Meituan yellow. It is the site's `--adm-color-primary` and appears 12 times in the stylesheet (plus `#ffd10026` 4 times). The extractor's generated primary was the ink color; this file reassigns primary to the measured yellow, because the yellow is the brand action and logo color visible in the capture and `#111925` remains `ink`.
- Hairline `#11192533` (button borders) and `#e7e8e9`.
- Other stylesheet variables (`--adm-color-danger #ff3141`, `--adm-color-success #00b578`, `--adm-color-warning #ff8f1f`, `--adm-color-text #333`) belong to the Ant Design Mobile component set and were not seen on this page.

## Typography

The display face is **MTTiJ** (400 weight loaded; 11 characters on the page, the H1), followed by `"PingFang SC", "Microsoft YaHei UI", "Microsoft YaHei", "Source Han Sans CN"`. Body text uses the CJK stack followed by `sans-serif, "Helvetica Neue", Helvetica, Arial`; PingFang SC covers 938 characters and PingFangSC-Regular 214. These are system CJK fonts and are not shipped by the site. No Latin substitute is needed; for non-Apple, non-Windows systems use Noto Sans SC.

Scale: display 52px/72px weight 500 (24px/24px on mobile), heading 28px/40px weight 500, card title 20px weight 500, nav 16px/24px weight 400, body 14px/20px weight 400 (315 characters), small 12px (275). Weights: 400 (872 characters) and 500 (291). Letter-spacing `normal`; no uppercase transforms (Chinese text).

## Layout

Content fills the 1280px frame with a narrow outer gutter; cards share the same left and right edges as the section headings in the capture. Measured paddings: 20px (18), 8px (11), 10px (9), `300.234px` (7), 4px; the H1 carries `60px 0 0` padding (48px on mobile) and the footer `48px 0 0`. CSS variables `--gy-label-pc-width: 88px` and `--gy-label-mo-width: 75px` define a label width for PC and mobile. The news grid is one wide card, then a two-up row, then three-up rows (as captured).

## Elevation & Depth

No box shadows were measured (the boxShadows list is empty). Cards separate from the `#f7f8f9` canvas by their white fill and 16px radius only. The hero glow is a soft yellow wash on the canvas (stylesheet colors `#ffd10026`, `#ffef8933` and `#ffd10000` are the translucent yellows).

## Shapes

Radii measured: 3px (8), 16px (8), 6px, 8px, 4px. The 16px radius belongs to the news cards (the card role measures `#ffffff`, 20px/500 title); 6px to the "查看全部" button (hover turns its fill to `rgb(245, 245, 245)`); the 3px radius was measured on 8 elements whose role the extractor did not label. Tokens: xs 3px, sm 4px, md 6px, lg 8px, xl 16px.

## Components

- **Nav link:** `#111925` 16px/24px weight 400; active state has a yellow underline (from the capture).
- **Outlined button:** transparent, 1px `#11192533` border, 6px radius, 32px tall ("查看全部"), 60px tall in the centered variant at the bottom of the list; hover fill `rgb(245, 245, 245)`.
- **News card:** white fill, 16px radius, image on top, 20px weight-500 title, `#0f1925a6` summary, `#11192559` date.
- **Download link:** QR icon plus "下载美团App" at 20px.
- **Footer:** `#f3f3f4`, `#111925` text at 14px weight 500 for column headings, `#b8babe` 12px for links; padding `48px 0px 0px`.
No filled primary button was detected on the page.

## Content and Voice

Every label is in simplified Chinese and written in a formal corporate register. The company description reads that since March 2010 Meituan has continued to promote digital upgrades on both the demand and supply sides of retail and commodity retail, working with partners to provide quality supply to consumers, and that it listed on the Hong Kong Stock Exchange on 20 September 2018. The news cards pair a headline with one sentence of detail and an ISO-style date: the capture lists items from 2026-08-13 to 2026-10-07, including a holiday consumption report, a food-safety campaign, a drone delivery network, a map-based merchant display feature, second-quarter results ("营收增至1046亿元", with R&D growth of 22.5% year on year), a courier recognized for a good deed, a network of 24-hour pharmacies lit by a yellow lamp, and a delivery-time feature for riders. The footer organizes people into audiences (learn more, join us, contact us, download and follow) rather than products, and lists the app and social accounts with small colored icons.

## Design System Architecture

No public Meituan design system or brand guideline was reachable: the home page (https://www.meituan.com/) was opened and links only to corporate pages and app downloads. The shipped CSS shows a Tailwind runtime (`--tw-ring-*`, `--tw-shadow` variables) and an Ant Design Mobile variable set (`--adm-color-*`, `--adm-radius-s/m/l` of 6px, 8px, 12px, `--adm-font-size-1…10`) with the primary overridden to `#ffd100`; the company's custom MTTiJ face is used for the H1. This is the de-facto system: Tailwind utilities, Ant Design Mobile tokens and Meituan overrides.

## Do's and Don'ts

- Do use `#ffd100` for the logo mark, active underline and key highlights; keep text `#111925`.
- Do use 16px-radius white cards on the `#f7f8f9` canvas with a title, summary and date.
- Do keep body text at 14px and card titles at 20px weight 500.
- Don't add shadows; none were measured.
- Don't use the Ant Design Mobile danger/success/warning colors as brand colors.
- Don't set headings in italic or uppercase; none were measured.

## Responsive Behavior

Measured at 390px: H1 24px/24px weight 500 in MTTiJ with 48px top padding (desktop 52px/72px, 60px); the section heading "最新动态" 18px/20px weight 500. Card, nav and footer layout changes at mobile width were not measured.

## Iteration Guide

1. Canvas `#f7f8f9`, white cards at 16px radius, ink `#111925` with alpha tints for secondary text.
2. Primary `#ffd100`, used sparingly (logo, underline, glow).
3. CJK stack at 14px/20px body, 20px card titles, 52px display.
4. Outlined 6px-radius buttons, hover `#f5f5f5`.
5. Run `node web/scripts/verify-designs.mjs --slug=meituan`.
