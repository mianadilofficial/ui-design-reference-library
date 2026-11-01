---
version: alpha
name: 中国工商银行 (ICBC Ltd corporate site)
category: "Banking & Insurance"
description: "ICBC Ltd corporate site (icbc-ltd.com) measured: a 1280px white page of Arial 12px/22px text, ICBC red #bc0021 links and bullets, #666666 body copy, #f2f2f2 panels, a #d1d1d1 hairline on the 宋体 search field, a red navigation bar and 0px computed radii everywhere."
colors:
  canvas: "#ffffff"
  ink: "#666666"
  primary: "#bc0021"
  surface-panel: "#f2f2f2"
  red-nav: "#d90000"
  ink-dark: "#333333"
  black: "#000000"
  ink-bronze: "#a86c2c"
  hairline: "#d1d1d1"
typography:
  display:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 22px
  input:
    fontFamily: 宋体
    fontSize: 12px
    fontWeight: 400
    lineHeight: 22px
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 2px
  s3: 12px
components:
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 1px 2px
    height: 29px
    borderColor: "{colors.hairline}"
---

## Overview

This is the corporate site of Industrial and Commercial Bank of China Limited (title "中国工商银行股份有限公司网站", final URL https://www.icbc-ltd.com/), the investor and company information site rather than the retail banking app. It is a classic fixed-width Chinese portal: a narrow top strip ("本网站支持IPv6", "打开无障碍" for accessibility mode, language links 简体中文 / 繁体中文 / English), a logo row with the ICBC mark and 中国工商银行 wordmark and a keyword search field with a red "搜 索" button, a full-width red navigation bar (首页, 关于我行, 产品与服务, 投资者关系, 公司治理, 工行ESG, 公司公告, 职业发展) with a grey "网上银行登录" (online banking login) button at right, then a hero banner carrying the slogan 工于至诚 行以致远 inside the image.

Below the hero the page is a three-column grid of light panels: 工行ESG and 全球分支网站 (global branch sites, with a world map and region links Asia, Europe, North America, Oceania, South America) at left; 新闻动态 (news, with 工行快讯 | 公司公告 filters and dated items such as "11.28.2025 中国工商银行前三季度经营稳中有进") and a tabbed product block (个人金融服务, 企业金融服务, 电子银行服务, 银行卡服务) in the centre; 职业发展 (careers) and 更多信息 at right. The footer is a taupe band with "联系我行 | 网站声明", "中国工商银行版权所有" and the ICP and public-security registration numbers. The page is only 1006px tall, so it fits almost entirely in one view. Tone: formal, concise and bulleted, with small red square bullets and red section markers. Headlines are factual statements of results and announcements, dates are written numerically (MM.DD.YYYY in the news list), and the careers panel uses a short promise sentence about talent. The top strip offers Simplified Chinese, Traditional Chinese and English links, and an accessibility mode can be switched on from the first link.

## Colors

- **Canvas** `#ffffff` (384 area units) with light grey `#f2f2f2` panels (20 units).
- **Ink** `#666666` is the most-read text colour (308 characters); `#333333` (82) is darker body text, `#000000` (31) is the top strip and headers, and `#ffffff` (87) is the label on the red nav bar.
- **Primary** `#bc0021` is the ICBC red used for links, news headlines and bullets (32 characters of text). A second red `#d90000` is measured as a background colour, recorded here as `red-nav`; its area weight in the extraction is 0, so it is a declared colour rather than a large measured fill.
- **Bronze** `#a86c2c` (20 characters) appears in small text.
- **Hairline** `#d1d1d1` is the only border colour measured (the search input).
- The nav bar, footer band and panel header gradients seen in the capture are image or gradient backgrounds whose exact values were not measured.

## Typography

The body font is **Arial, Helvetica, sans-serif** at 12px weight 400. The search input uses **宋体** (SimSun) at 12px. The stylesheet corpus also lists 宋体 (16 declarations), Verdana (13), Arial (10), Geneva (4), a GB2312 font name (3) and Webdings (2). Only one size is used in the whole page: 12px accounts for all 560 measured characters; weights are 400 (459 characters) and 700 (101, used for nav labels and headings). The line-height measured is 22px. No separate heading scale exists, so hierarchy is made with weight, colour and red markers.

## Layout

The desktop pass is 1280px wide and the content sits in a centred column narrower than the viewport, with white margins on both sides in the capture; the column width in pixels was not measured. The structure is a header, a nav bar, a hero, a three-column body (left sidebar, wide centre, right sidebar) and a footer. Panels are separated by small gaps. Spacing values measured: 1px, 2px and 12px. Row lists inside panels use thin grey dividers and a red bullet at the left of each item.

## Elevation & Depth

The site is almost flat in measured terms: the shadow list is empty, there is one border colour, and the hierarchy is made with panel titles, red markers and dividers instead of layers. No box shadows were measured. The capture shows subtle gradient headers on panels and a raised-looking grey login button; these come from backgrounds and borders not captured in the measurements, so no values are given.

## Shapes

`desktop.frequencies.borderRadii` is empty: every rendered element computes a 0px radius, so the generated tokens use `rounded: none: 0px`. The capture appears to show softly rounded panel corners and a pill-shaped "搜 索" button; those shapes are therefore drawn by images, not CSS radii, and cannot be reproduced from the measured data.

## Components

- **Search field**: `宋体` 12px, text `#666666`, white fill, 1px `#d1d1d1` border, padding 1px 2px, height 29px, 0px radius, placeholder "请输入关键字……".
- **Navigation bar**: red, white 12px bold labels, items 首页 through 职业发展.
- **Login button**: light grey, "网上银行登录".
- **Panel**: white/`#f2f2f2` box with a small red square marker and bold title (工行ESG, 新闻动态, 全球分支网站, 职业发展, 更多信息).
- **News list item**: grey date, headline in link colour, thin divider line, red bullet.
- **Tabs**: four tabs with the active one outlined and a red underline in the capture.
- **Footer band**: taupe, white links.
- No filled call-to-action button with a measured fill was detected, which is why the frontmatter declares no button component and only a text-input component.

## Design System Architecture

No public design-system or brand-guideline page was linked from https://www.icbc-ltd.com/ and none was searched. The page ships no CSS custom properties (0 on `:root`) and no web fonts (the loaded-fonts list is empty), so the de-facto system is table/class-driven CSS using system fonts, with image-based chrome. The font stack names Chinese Windows system fonts (宋体) and legacy faces (Verdana, Geneva, Webdings), consistent with an older code base.

The practical consequence for anyone rebuilding this page is that fidelity depends on three things the tokens do capture (Arial 12px/22px, the red and grey text palette and square CSS corners) and several things they do not (gradient headers, image buttons and the hero artwork), which must be taken from the live page assets rather than invented. Anything not listed in the frontmatter should be recorded as not measured.

## Do's and Don'ts

- Do keep text at 12px Arial with 22px line-height and use `#666666` for most copy.
- Do use ICBC red `#bc0021` for headlines, links and bullets and white on the red nav bar.
- Do structure content in titled panels with red square markers.
- Do keep all CSS corners at 0px; rounded appearance, where used, comes from images.
- Don't add web fonts, shadows or a second type size.
- Don't use browser-default link blue; none was measured.

## Responsive Behavior

The mobile pass at 390px recorded the same single role (the accessibility link, 12px/22px Arial) and a single font size, 12px (560 characters); no mobile primary button or navigation was detected, and layout changes are not measured.

## Iteration Guide

This guide lists the steps in the order a rebuild should follow, using only measured values from the frontmatter above and the page structure described in the Overview section.

1. Start with a white page and set everything in Arial 12px/22px.
2. Add a red navigation bar with white bold labels, and a keyword search field with a 1px `#d1d1d1` border.
3. Build content in three columns of titled panels; mark panel titles with a small red square.
4. Use `#bc0021` for links and headlines, `#666666` for copy, `#f2f2f2` for panel fills.
5. Keep CSS radii at 0px and treat any rounded effect as imagery.
6. End with a taupe footer carrying contact, legal and registration text; do not introduce values outside the frontmatter.
