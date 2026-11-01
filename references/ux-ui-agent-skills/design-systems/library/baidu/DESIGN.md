---
version: alpha
name: Baidu
category: "AI"
description: "Baidu's search homepage (baidu.com): a single white #ffffff screen with the red and blue Baidu logo, a wide rounded search box with a blue-to-violet 百度一下 button, #4e6ef2 login pill, #222222 Arial links at 13px, PingFang SC 16px AI banner, and a two-column hot-search list with red, orange and yellow rank numerals."
colors:
  canvas: "#ffffff"
  ink: "#222222"
  primary: "#4e6ef2"
  on-primary: "#ffffff"
  primary-hover: "#315efb"
  surface-pill: "#f5f6fa"
  ink-body: "#333333"
  ink-soft: "#9195a3"
  ink-gray: "#626675"
  ink-muted: "#bbbbbb"
  ink-input: "#000000"
  rank-red: "#fe2d46"
  rank-orange: "#ff6600"
  rank-yellow: "#faa90e"
  icon-red: "#f63051"
  hairline: "#dbdce0"
typography:
  display:
    fontFamily: "\"PingFang SC\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  nav:
    fontFamily: Arial, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 23px
  hot-item:
    fontFamily: Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 36px
  rank:
    fontFamily: Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: "-1px"
  search-button:
    fontFamily: arial
    fontSize: 17px
    fontWeight: 500
  caption:
    fontFamily: Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
  body:
    fontFamily: Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 39px
  input:
    fontFamily: arial
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
rounded:
  xs: 4px
  sm: 9px
  md: 12px
  lg: 15px
  xl: 19px
  2xl: 21px
  3xl: 22px
  4xl: 24px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 7px
  s4: 9px
  s5: 11px
  s6: 18px
  s7: 19px
  s8: 21px
  s9: 24px
  s10: 45px
components:
  button-login:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    height: 29px
  button-login-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav-link-hover:
    textColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-input}"
    typography: "{typography.input}"
    padding: 0px 6px 0px 0px
    height: 28px
  ai-banner:
    backgroundColor: "{colors.surface-pill}"
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.4xl}"
  hot-list:
    textColor: "{colors.ink}"
    typography: "{typography.hot-item}"
---

## Overview

Baidu's homepage (title "百度一下，你就知道", "Baidu it, you'll know") is the brand's search front door. The measured page is a single 1280 by 800px screen with 163 visible elements and no scroll (`scrollHeight` 800). It is pure white with one centered column: a top bar of product links, the red and blue logo, a wide rounded search box, a small AI-assistant banner, and a two-column "百度热搜" (hot searches) list, with legal links along the bottom.

From the top: a left-aligned row of plain text links (新闻, hao123, 地图, 贴吧, 视频, 图片, 网盘, 库库AI, 文心, 百度搭子, 更多) at 13px in `#222222`; at the right "设置" (settings) and a blue pill "登录" (log in). The logo is an image: red "Bai" and "百度" lettering with a blue paw print containing "du". Below it, the search box is white with a soft blue-to-violet outline and a bluish shadow; it shows a grey placeholder search suggestion, a microphone icon, a plus icon and a rounded blue-to-violet gradient button "百度一下". Beneath, a pale pill banner with a "文心" mark reads "复杂问题就找文心助手，深入思考回答更优" ("for complex questions, ask the Wenxin assistant"). The hot-search block has a heading "百度热搜", a "换一换" (refresh) control with a refresh icon and ten headlines in two columns (a pinned first item without a number, then ranks 1 to 9), with small red "热" (hot) and "新" (new) tags. Along the bottom, grey legal links: 关于百度, About Baidu, 使用百度前必读, 帮助中心, 企业推广 and the ICP and public-security filing numbers. Two small icons ("下载", "辅助") sit in a floating toolbar at the right edge. The copy is Chinese, terse and utilitarian.

## Colors

- **Canvas `#ffffff`** is the page: about 91% of the capture's pixels and the largest background area (164 units). **Surface pill `#f5f6fa`** (16 units) is the pale fill of the AI banner.
- **Ink `#222222`** (174 characters) is the color of the top links, the hot-search headlines and the AI banner text; **ink body `#333333`** (4) and **ink gray `#626675`** (41 uses in the stylesheet) are secondary; **ink soft `#9195a3`** (12 characters) colors the refresh control, unranked numerals (4 to 9) and icons; **ink muted `#bbbbbb`** (114 characters) is the footer links.
- **Primary blue `#4e6ef2`** is the brand action color: the fill of the "登录" pill (white text, radius 999px, 29px tall) and the heaviest chromatic value in the stylesheet (130 uses). **Primary hover `#315efb`** (70 uses) is the hover fill of that pill and the hover color of every top link. The stylesheet also contains `#335bff` (15) and `#1d4fff` (14) as deeper blues.
- **Rank colors**: rank 1 `#fe2d46`, rank 2 `#ff6600`, rank 3 `#faa90e` (one character each, Arial 18px), and `#f63051` for icon glyphs (10 icon characters at 18px). These are list-position colors, not general action colors; the orange `#ff6600` is rank 2's numeral only.
- **Hairline `#dbdce0`** (2 border instances, 19 stylesheet uses) is the divider.

The browser default link blue `#0000ee` (reported on 11 characters of hidden, unstyled tab text) is not a brand color and is dropped.

## Typography

Two live families: **Arial** (288 characters) for Latin, numerals and Chinese fallback, and **PingFang SC** (19 characters, declared with `PingFangSC-Regular` and `PingFangSC-Medium` faces) for the AI banner and download label. Two icon fonts, `cIconfont` and `cos-icon`, carry all icons. Weights by character: 400 (310), 500 (5), 200 (2).

- **Nav**: Arial 13px / 23px, 400 (the top links; hover turns them `#315efb`). **Login label**: Arial 13px / 24px, white.
- **Display (AI banner)**: PingFang SC 16px / 16px, 400, `#222222`. **Hot item**: Arial 16px with a 36px line-height, 400, `#222222`. **Rank numeral**: Arial 18px, `-1px` letter-spacing.
- **Search button**: arial 17px, 500, white. **Search input**: arial 16px / 26px, 400, `#000000`.
- **Caption**: Arial 14px ("换一换", the "随时随地 百度一下" line). **Footer body**: Arial 12px with a 39px line-height, `#bbbbbb`.

Sizes by character: 16px (143), 12px (120), 13px (34), 18px (10), 14px (5), 17px (4), 15px (1). The scale is compressed (12 to 18px), and weight 400 dominates.

## Layout

A single centered column in the middle of a 1280px white canvas (the search field's textarea measured 771px wide); the top bar spans the full width. The stylesheet declares `--s-top-height: 60px`, `--fixed-top-offset: 78px`, `--bubble-width: 500px` and `--bubble-padding-left: 500px`. Vertical order: top bar, logo, search box, AI banner, hot-search block, footer. The hot-search list is two columns of five rows, each row with a 36px line-height. Measured paddings: 2px (10 uses), 9px (2), 18px (2), 24px, 45px, 7px, 11px, 21px, 19px and 1px (one each). Density is low: one task per screen, large white margins.

## Elevation & Depth

Almost flat. The search box carries bluish shadows, measured as `rgba(77, 128, 255, 0.1) 0px 10px 40px -8px` and `rgba(77, 128, 255, 0.2) 0px 13px 18px -15px`; the stylesheet declares many others (`0 2px 10px 0 rgba(0,0,0,.1)` on 13 rules, `0 6px 21px 0 #1e1f2433` on 5, `0 2px 20px 0 #00000014` on 5, `0 2px 12px 0 rgba(51,91,255,.08)` on 4) for dropdowns and bubbles that are not visible on the first screen. Hairlines (`#dbdce0`) and the pale `#f5f6fa` banner fill do the rest.

## Shapes

Rounded, with an unusual spread of values. Measured: `19px` (4 elements), `24px` (3), `22px` (2), `4px` (2), `999px` (1, the login pill), and one each of `12px`, `15px`, `21px` and `9px`. The extraction does not say which element carries which value, except the 999px login pill; in the capture the search box, the AI banner and the search button are all rounded rectangles or pills, and the login button is a full pill. The stylesheet's radius list also includes 6px (44 uses), 12px (64 uses), 8px, 10px and 22px.

## Components

- **Login button ("登录")**: `#4e6ef2` fill, `#ffffff` text, Arial 13px, radius 999px, 29px tall; on hover it becomes `#315efb` and shows a tooltip bubble ("登录体验更多服务").
- **Top link**: `#222222`, Arial 13px/23px, no underline; hover `#315efb` text and border color.
- **Search box**: white, rounded, blue-to-violet gradient outline (the gradient stops were not measured) with the bluish shadows above; inner field is a textarea 771px wide and 28px tall, arial 16px/26px, `#000000`, padding `0px 6px 0px 0px`.
- **Search button ("百度一下")**: arial 17px / 500, white text on a blue-to-violet gradient fill with a rounded shape (gradient stops and size not measured).
- **AI banner**: `#f5f6fa` pill with the 文心 mark and a chevron, text PingFang SC 16px, 310px wide text.
- **Hot-search list**: ten rows, Arial 16px / 36px `#222222`, rank numerals at 18px, tags "热" and "新" in red and orange-red (fill `#ff455b` was reported with zero area).
- **Footer links**: Arial 12px / 39px, `#bbbbbb`, separated by gaps; filing numbers appear as plain text.

## Design System Architecture

Baidu publishes no brand or design guidelines on the pages opened: the homepage (https://www.baidu.com/) and the corporate site (https://home.baidu.com/) link investor relations, sustainability, a media resource library, contact and legal pages; the media library (http://home.baidu.com/media_resource/) has no logo downloads, hex values or typography, and its "百度品牌" (Baidu brand) entry is a placeholder link with no destination. The de-facto system lives in the shipped stylesheet: four `:root` variables (`--bubble-padding-left`, `--s-top-height`, `--bubble-width`, `--fixed-top-offset`), two icon fonts (`cIconfont`, `cos-icon`), `Arial` and `PingFang SC` text faces, and hard-coded color values counted across the CSS (`#ffffff` 205, `#4e6ef2` 130, `#333333` 81, `#315efb` 70, `#222222` 61, `#9195a3` 61, `#626675` 41, `#dbdce0` 19). There are no named tokens.

## Do's and Don'ts

- Do keep the page white with one column and a single dominant element, the search box.
- Do use `#4e6ef2` for primary actions and `#315efb` for hover; keep top links plain `#222222` at 13px.
- Do render ranks 1 to 3 in red, orange and yellow, and 4 to 9 in `#9195a3`.
- Do set Chinese text in Arial with PingFang SC for the AI banner; keep sizes between 12px and 18px.
- Don't add shadows beyond the soft blue glow around the search box.
- Don't use `#ff6600` as an action color; it marks rank 2.
- Don't use the browser default `#0000ee` for links.
- Don't treat the floating download and assist toolbar as brand navigation.

## Responsive Behavior

The mobile pass at 390px measured the same roles as desktop: the AI banner text is 16px / 16px in a 310px-wide box, and the footer label ("About Baidu") is 12px with a 39px line-height. The mobile character-size histogram is 16px (143), 12px (24), 13px (20), 18px (10), 14px (5), 17px (4) and 15px (1), against desktop 16px (143), 12px (120), 13px (34). The stylesheet declares `--bubble-width: 500px`. How the page reflows at narrow widths was not measured.

## Iteration Guide

1. Keep the canvas pure `#ffffff`; one centered column; use `#222222` for text and `#bbbbbb` for footer links.
2. Make the search box the focal element: wide, rounded, white, with a blue glow and a blue-to-violet button.
3. Use `#4e6ef2` only for the login pill and search emphasis; hover to `#315efb`.
4. Keep the hot-search block at 16px / 36px rows with 18px rank numerals in red, orange and yellow.
5. Re-measure after the page loads fully (`node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=baidu --force --no-motion`), then `node web/scripts/verify-designs.mjs --slug=baidu`.
