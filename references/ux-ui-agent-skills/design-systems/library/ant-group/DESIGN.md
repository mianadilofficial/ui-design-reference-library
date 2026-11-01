---
version: alpha
name: Ant Group
category: "Banking & Insurance"
description: "Ant Group (蚂蚁集团) corporate site: white canvas, #666666 body text, #333333 headings, Ant blue #1677ff for the active tab, deep navy #0c1f3a footer, AlibabaPuHuiTi display at 48px, full-bleed photography, 24px-radius ghost buttons."
colors:
  canvas: "#ffffff"
  ink: "#666666"
  primary: "#1677ff"
  surface-soft: "#f7f8fa"
  surface-navy: "#0c1f3a"
  on-dark-72: "#ffffffa6"
  on-dark-64: "#ffffffa3"
  ink-strong: "#333333"
  ink-muted: "#999999"
typography:
  display:
    fontFamily: AlibabaPuHuiTiRegular
    fontSize: 48px
    fontWeight: 600
  display-mobile:
    fontFamily: AlibabaPuHuiTiRegular
    fontSize: 22px
    fontWeight: 500
  heading:
    fontFamily: AlibabaPuHuiTiRegular
    fontSize: 28px
    fontWeight: 500
    lineHeight: 46px
  subheading:
    fontFamily: AlibabaPuHuiTiRegular
    fontSize: 20px
    fontWeight: 500
    lineHeight: 28px
  body:
    fontFamily: "-apple-system, blinkmacsystemfont, \"Helvetica Neue\", helvetica, \"segoe ui\", arial, roboto, \"PingFang SC\", miui, \"Hiragino Sans GB\", \"Microsoft Yahei\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: "-apple-system, blinkmacsystemfont, \"Helvetica Neue\", helvetica, \"segoe ui\", arial, roboto, \"PingFang SC\", miui, \"Hiragino Sans GB\", \"Microsoft Yahei\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28.287px
rounded:
  xs: 4px
  sm: 5px
  md: 8px
  lg: 24px
spacing:
  s1: 28px
  s2: 30px
  s3: 48px
  s4: 80px
  s5: 100px
  s6: 130px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.lg}"
    height: 48px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.surface-navy}"
    textColor: "{colors.canvas}"
    padding: 130px 0px 40px
---

## Overview

The measured page is antgroup.com, the Simplified Chinese home of Ant Group (蚂蚁集团), 1280px wide and 8026px tall. The document language is zh. The first screen is a full-bleed photograph (snow mountains under blue sky) carrying the white headline of a sustainability report with a ghost "了解更多" button, a pagination dot pair, and a transparent header (logo at left; 关于我们, 业务发展, 科技创新, ESG, 最新动态, 加入我们 and a language switcher showing 简). Below the hero is a white sub-navigation strip (最新动态, 使命和愿景, 公司简介, 公司历程, 加入我们) whose active item is blue, then a "最新动态" news section laid out as a five-card photographic mosaic with white titles over a bottom gradient, then a "我们的使命" / "我们的愿景" panel over a grayscale photo collage, and a dark navy footer.

The tone is institutional and warm: documentary photography of people (fishermen, volunteers, office staff), a calm hierarchy and little decoration. The mission line is "让天下没有难做的生意" and the vision text speaks of building digital infrastructure for future services.

## Colors

`canvas` is {colors.canvas} (#ffffff). `ink` ({colors.ink}, #666666) is the most-read body color; `ink-strong` is #333333 for headings and hovered navigation; `ink-muted` is #999999. `primary` ({colors.primary}, #1677ff) is Ant's blue and is measured on the active sub-navigation tab (low text weight: 4 characters), not on a filled button; the stylesheet also declares it as `--adm-color-primary` and as the wave shadow color. `surface-soft` is #f7f8fa, a pale gray band, and `surface-navy` ({colors.surface-navy}, #0c1f3a) is the footer. Text on dark and on photography uses two translucent whites, `on-dark-72` (#ffffffa6) and `on-dark-64` (#ffffffa3). A translucent dark (#050a1a33) and a white at 80% (#ffffffcc) are present as backgrounds in the mission panel and header.

The root custom properties come from the Ant Design Mobile token set (`--adm-*`): danger #ff3141, success #00b578, warning #ff8f1f, border #eeeeee, box #f5f5f5, and so on. Those status colors are declared by the library on this page; no status UI was seen in the capture, so they are not promoted to tokens.

## Typography

The only loaded webfont is AlibabaPuHuiTiRegular (400), used for every heading. Body and nav text fall back to the system stack `-apple-system, blinkmacsystemfont, "Helvetica Neue", helvetica, "segoe ui", arial, roboto, "PingFang SC", miui, "Hiragino Sans GB", "Microsoft Yahei", sans-serif`, which carries the most measured characters. Sizes by use:

- `display`: AlibabaPuHuiTi 600 at 48px (the hero headline, in white).
- `heading`: 500 at 28px with 46px line height ("我们的使命").
- `subheading`: 500 at 20px with 28px line height (white news-card titles).
- `body`: system stack 400 at 16px with 24px line height.
- `link`: 400 at 18px with 28.287px line height (the ghost button label).

The page's character-weighted size distribution is 12px (224), 18px (209), 16px (151), 20px (126), 48px, 28px and 36px. The loaded family is AlibabaPuHuiTiRegular as named in the font loader; if it is unavailable, the fallback chain already declared on the page (PingFang SC, Hiragino Sans GB, Microsoft Yahei) is the measured substitute order.

## Layout

The content column in the capture is a centered block with roughly equal outer gutters, holding a mosaic of five cards in two rows (a wide card and a narrow card above, three equal cards below). Measured spacing values are 28, 30, 48, 80, 100 and 130px, which describe section gaps rather than a small base grid: the footer has padding 130px 0px 40px. Photography fills the hero edge to edge and the mission panel sits on a full-width grayscale collage.

## Elevation & Depth

Shadows on this page are soft and cool: `0 2px 12px rgba(216,218,224,.5)` (89 uses, the most common) gives the news cards and sub-nav strip their lift; a layered `0 3px 6px -4px rgba(0,0,0,.12), 0 6px 16px rgba(0,0,0,.08), 0 9px 28px 8px rgba(0,0,0,.05)` appears 13 times (the Ant Design popover shadow); focus rings are `0 0 0 2px rgba(22,119,255,.2)` and, for error, `0 0 0 2px rgba(255,77,79,.2)`. 69 declarations use no shadow. News cards darken toward the bottom with a gradient so white titles stay legible.

## Shapes

The measured radii are 5px (361 uses), 2px (219), 8px (100), 4px (77), 100px (26), 32px (7) and 1px (6). The token set keeps 4, 5, 8 and 24px. Photo cards use the mid radii, the ghost "了解更多" pill uses {rounded.lg} (24px) and the mission panel is a rounded white card over the collage.

## Components

- `button-secondary`: a ghost pill, 48px tall, 24px radius, white 1px border and white {typography.link} text on the hero photograph. No filled primary button was detected on the page, so no `button-primary` is declared.
- `link`: white 18px text with a white border and 24px radius where it is used as the same pill.
- Header navigation: transparent over the hero, white text; the measured hover state changes link color from #ffffff to #333333 (the header becomes white on hover).
- Sub-navigation strip: white bar, active label in {colors.primary}.
- `footer`: {colors.surface-navy} background, white text, padding 130px 0px 40px.

The generated `nav` typography was 0px/0px and was dropped as an extraction artifact, along with the `nav` and `nav-link` components that referenced it.

## Design System Architecture

No public brand-guideline page was opened for Ant Group itself. The home page at [antgroup.com](https://www.antgroup.com/) ships the Ant Design Mobile variable set (`--adm-color-primary`, `--adm-radius-s/m/l` of 4, 8 and 12px, `--adm-font-size-1` to `10` from 9px to 18px, `--adm-color-text` #333333, `--adm-color-text-secondary` #666666, `--adm-color-weak` #999999, `--adm-color-border` #eeeeee) and its CSS bundle is served from alipayobjects.com. The page's actual body and heading colors (#666666, #333333, #999999) match those variables, so the corporate site is measured using values from that token set. Page-level styling (hero, mosaic, panel) is bespoke.

The consequence is a two-layer system: library tokens decide the neutrals, text grays, borders and radii; the page layer adds the navy footer, the photographic hero and the translucent white overlays. A new page in this style should take its text and border colors from the library layer first and introduce the navy only for the footer.

## Do's and Don'ts

- Do use full-bleed documentary photography with white text on a bottom gradient.
- Do keep blue {colors.primary} for the active state of navigation and links, in small quantities.
- Do pair a 48px white headline with a ghost pill button on photography.
- Do use soft, cool, low-opacity shadows (`0 2px 12px rgba(216,218,224,.5)`) for card lift.
- Don't use saturated fills on large surfaces; large areas are white, pale gray or deep navy.
- Don't add status colors to marketing surfaces.
- Don't use sharp 0px corners on cards; the measured range is 2px to 8px.

## Responsive Behavior

Measured at 390px: the headline drops from 48px to 22px (weight 500, padding 0px 25px, in the narrow-width capture the carousel shows the headline "蚂蚁集团2025可持续发展报告"), the "我们的使命" heading is 19px at weight 600 with 29px line height, and body copy is 13px with a 20px line height in white at 80% opacity (#ffffffcc). The mobile page was measured as a full page; the extractor recorded no navigation-toggle or column-count data for mobile, so those are not measured.

## Iteration Guide

1. Start from the white canvas, #666666 body and #333333 headings.
2. Use AlibabaPuHuiTi (or a Chinese sans) at 48/28/20px with weights 600/500/500.
3. Build cards with 5px or 8px radii and the soft cool shadow.
4. Reserve #1677ff for the active tab; use #0c1f3a for the footer.
5. Re-run `node web/scripts/verify-designs.mjs --slug=ant-group` after renames.
