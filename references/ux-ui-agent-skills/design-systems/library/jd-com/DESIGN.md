---
version: alpha
name: JD.com Global (京东全球版)
category: "Retail & E-commerce"
description: "JD.com's global-edition shopping home page (global.jd.com), Simplified Chinese: cool grey canvas #f5f6fa with white 8px-radius cards, JD red #ff0f23 search button and hover color, Microsoft YaHei and PingFang SC at 12px to 18px, gray footer #eaeaea and a soft 2px 8px 1px shadow."
colors:
  canvas: "#f5f6fa"
  page-largest: "#eaeaea"
  ink: "#666666"
  primary: "#ff0f23"
  on-primary: "#ffffff"
  ink-secondary: "#999999"
  ink-strong: "#1a1a1a"
  ink-nav: "#505259"
  ink-444: "#444444"
  ink-faint: "#cccccc"
  text-input-text: "#000000"
typography:
  display:
    fontFamily: "\"Microsoft YaHei\""
    fontSize: 18px
    fontWeight: 600
    lineHeight: 18px
  body:
    fontFamily: "\"Microsoft YaHei\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 22px
  button:
    fontFamily: "\"PingFang SC\""
    fontSize: 16px
    fontWeight: 600
  button-secondary:
    fontFamily: "\"PingFang SC\", system-ui, -apple-system, tahoma, arial, \"Microsoft YaHei\", \"Hiragino Sans GB\", u5b8bu4f53, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 36px
  input:
    fontFamily: "\"PingFang SC\", \"Source Han Sans CN\", \"Microsoft YaHei\", \"Heiti SC\", tahoma, arial, \"Hiragino Sans GB\", 宋体, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 32px
rounded:
  xs: 4px
  sm: 5px
  md: 6px
  lg: 8px
  xl: 9px
  2xl: 25px
spacing:
  s1: 2px
  s2: 5px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 16px
  s8: 19px
  s9: 20px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 38px
  button-secondary:
    textColor: "{colors.ink-nav}"
    typography: "{typography.button-secondary}"
    padding: 0px 20px 0px 8px
    height: 36px
    borderColor: "{colors.on-primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.lg}"
    padding: 2px 44px 2px 19px
    height: 36px
  card:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.lg}"
    boxShadow: rgba(0, 0, 0, 0.05) 0px 2px 8px 1px
---

## Overview

The measured page is `https://global.jd.com/`, titled "京东全球版-专业的综合网上购物商城" (JD.com Global Edition, a professional general online shopping mall). The page text is Simplified Chinese; the document language attribute was not set (`lang` null). It is 1,280px wide and 1,633px tall. The queued brand is JD.com, and the measured URL is the group's global edition site, so the DESIGN.md is named for that site.

Top to bottom, the capture shows: a thin white utility bar (京东首页, 京东全球版 with a chevron, "你好，请登录" in red, 免费注册, 切换至企业版, and at the right 购物车, 我的订单, 我的京东, 企业采购, 商家服务, 网站导航, 手机京东); a header row with the JD Global logo (the white JD dog mascot and the red 京东 wordmark with a small red "全球" tag), a wide search field with a red "搜索" button and suggested searches (平板电脑, 爆款耳机, 手机, 女装), and a white cart button "购物车"; a three-column hero (a white category list at the left with entries such as 手机/数码, 家用电器, 电脑/办公, a large red-orange promotional banner "海外包邮福利升级 / 下载APP可享" with two smaller banners below it, and a white member card at the right with 新人福利 and PLUS会员 buttons, "全球特讯" news and "国际支付" payment icons); a "频道广场" (channel plaza) section of white tiles (新品首发, 超级排行榜, 京喜自营, 京东京造, 京东服饰, 电脑数码); and a grey footer with four value-prop icons (多, 快, 好, 省: wide selection, fast delivery, genuine goods, low prices), link columns (购物指南, 物流配送, 帮助中心, 联系我们), a legal line with licence numbers and trust badges.

The tone is utility-first and promotional: short slogans, dense lists and bright promotional artwork. A fetch of the page described it the same way, naming the four value points, the footer navigation and the licence and trust-seal blocks.

## Colors

- **Canvas `#f5f6fa`** (`colors.canvas`): the cool, slightly blue-grey page background behind the white cards.
- **Page-largest `#eaeaea`** (`colors.page-largest`): the footer area (627 area weight, the largest measured background); **white `#ffffff`** (350) for cards and bars.
- **Primary `#ff0f23`** (`colors.primary`): JD red. It is the fill of the "搜索" search button (white text, `colors.on-primary`), the color of the "请登录" link, and the hover color of utility links (measured: text and border change from `rgb(80, 82, 89)` to `rgb(255, 15, 35)`).
- **Ink `#666666`** (`colors.ink`): link and footer-nav text; **ink secondary `#999999`** (273 characters, the most read color): copyright and legal text; **ink strong `#1a1a1a`**: headings and category lists; **ink nav `#505259`**: utility-bar links; **ink 444 `#444444`** and **ink faint `#cccccc`**: minor text and dividers; **text input text `#000000`**.
- Border colors seen: `#ffffff` (6), `#666666` (3), `#ff0f23` (1), `#00000014` (1) and `#dedede` (1).
- Promotional artwork (the red-orange banner, the gold trophy, product photography) provides additional colours that are content, not UI tokens. No CSS custom properties are published (`rootVars` is empty), so there are no named root colours to cite.

## Typography

Declared and measured fonts: **Microsoft YaHei** (605 characters), **PingFang SC** (162), and the loaded `impact` and `iconfont` faces; a `JDZhengHT-EN` face (1 character) and Microsoft YaHei UI (4) also appear. The PingFang stack continues with system-ui, tahoma, arial, Hiragino Sans GB and 宋体 as fallbacks.

| Role | Font | Size / weight / line-height |
| --- | --- | --- |
| Display (h1 "全球特讯") | Microsoft YaHei | 18px / 600 / 18px |
| Button ("搜索") | PingFang SC | 16px / 600 |
| Body (footer legal) | Microsoft YaHei | 12px / 400 / 22px |
| Utility link | PingFang SC | 12px / 400 / 36px |
| Search input | PingFang SC stack | 14px / 400 / 32px |

Sizes by characters: 12px (636), 18px (48), 13px (39), 14px (32), 16px (15), 10px (4), 28px (4). Weights: 400 (673), 700 (60), 600 (25), 500 (20). The scale is small and dense: 12px dominates almost the whole page. Microsoft YaHei and PingFang SC are system fonts on Windows and Apple platforms respectively; they are not downloaded by the page.

## Layout

- Desktop 1,280px, 1,633px tall; the home hero is a three-column arrangement: a left category card (230px wide, 470px high), a wide banner, and a right member card (228px wide, 470px high).
- Paddings: 2px (22 uses), 20px (14), 8px (13), 7px (13), 10px, 19px, 30px and 16px (2 each). The spacing tokens are 2, 5, 6, 7, 8, 10, 16, 19, 20, 30px. No gaps were measured (`gaps` empty), so spacing comes from padding and margins.
- The search input is 623px by 36px with an 80px by 38px red button; the footer content line is 1,210px wide.
- Channel tiles are white 8px-radius cards in a mixed grid of tall and short tiles.

## Elevation & Depth

One shadow was measured: `rgba(0, 0, 0, 0.05) 0px 2px 8px 1px` on the left category card (and declared on the `card` component). All other panels are flat white against `#f5f6fa`. Depth otherwise comes from tonal steps (grey canvas, white cards, grey footer).

## Shapes

Radii: 8px (12 elements, `rounded.lg`), 5px (2), 6px (1, the search button, `rounded.md`), 9px (1), 4px (1), 25px (1, `rounded.2xl`) and two partial radii, `8px 8px 0px 0px` and `0px 0px 8px 8px` (one element each). Cards and the search input use 8px; the search button 6px; utility links are square.

## Components

- **Search button (`button-primary`)**: `#ff0f23` fill, white 16px/600 PingFang SC label "搜索", 6px radius, 38px by 80px.
- **Utility links (`button-secondary`)**: PingFang SC 12px/400, `#505259`, 36px high, padding 0px 20px 0px 8px, a 1px white border that turns red on hover with the text.
- **Text input**: black 14px text, 8px radius, 36px by 623px, padding 2px 44px 2px 19px (room for the button).
- **Card (`card`)**: white fill, `#1a1a1a` text, 8px radius, `rgba(0, 0, 0, 0.05) 0px 2px 8px 1px` shadow.
- **Footer links**: `#666666` 12px Microsoft YaHei, legal text `#999999` 12px/22px.
- **Member card**: 16px padding, 16px/600 "HI～欢迎来到京东!" greeting with login/register links and two small buttons (新人福利 in red, PLUS会员 in blue).

## Design System Architecture

No public design system or brand-guidelines page was found; the home page links About Us, Media & IR, Marketing Center and community pages, none of which is a design-asset page, and no CSS custom properties are exposed (`rootVars` is empty). The site is therefore a hand-written, class-based storefront; all values here come from computed styles. Typography relies on the operating system's Chinese fonts instead of a webfont.

## Do's and Don'ts

- Do use JD red `#ff0f23` for the search button, login link and hover states only.
- Do place white 8px-radius cards on a `#f5f6fa` canvas and keep shadows to the 0.05-alpha soft drop.
- Do set body at 12px in Microsoft YaHei or PingFang SC and keep link grey `#666666`.
- Do keep promotional artwork bright and red-orange while the UI stays neutral.
- Don't add display typography; headings are 18px at weight 600.
- Don't tint the footer with brand red; it is `#eaeaea`.
- Don't use heavy shadows; none were measured.

## Responsive Behavior

Not measured. At a 390px viewport the extraction returned the same values as desktop (h1 18px, body 12px/22px, the copyright text box 1,210px wide), and no mobile navigation or call to action was detected, so no responsive layout is documented. Mobile text sizes by characters were 12px (636), 18px (48), 13px (39), 14px (32), 16px (15).

## Iteration Guide

1. Canvas `#f5f6fa`, cards `#ffffff` at 8px radius, footer `#eaeaea`.
2. Text: `#1a1a1a` for headings, `#666666` for links, `#999999` for legal copy; 12px Microsoft YaHei or PingFang SC.
3. Red `#ff0f23` only for the search button, login and hover.
4. Search field 36px high with 8px radius and an 80px by 38px button at 6px radius.
5. Use padding steps 2, 8, 10, 16, 20, 30px.
6. Keep copy short and slogan-like in Simplified Chinese, with numbered or icon value-prop lists.
