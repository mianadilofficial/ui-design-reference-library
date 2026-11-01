---
version: alpha
name: "Arco Design"
category: "Frontend Frameworks"
description: "Arco Design is ByteDance's open-source enterprise design system: Inter with CJK fallbacks at 14px, one cobalt blue #165dff on a white canvas, a cool grey ramp (#1d2129, #4e5969, #86909c, #e5e6eb, #f7f8fa), 32px controls with 2px radii, flat 1px-bordered surfaces and faint cool shadows."
colors:
  canvas: "#ffffff"
  ink: "#4e5969"
  primary: "#165dff"
  on-primary: "#ffffff"
  surface-subtle: "#f7f8fa"
  surface-dark: "#272e3b"
  ink-strong: "#1d2129"
  ink-muted: "#86909c"
  primary-light: "#4080ff"
  ink-disabled: "#c9cdd4"
  border: "#e5e6eb"
  fill: "#f2f3f5"
  primary-bg: "#e8f3ff"
  success: "#00b42a"
  warning: "#ff7d00"
  danger: "#f53f3f"
typography:
  heading-docs:
    fontFamily: Inter, -apple-system, "system-ui", "PingFang SC", "Hiragino Sans GB", "noto sans", "Microsoft YaHei", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 45px
  text:
    fontFamily: Inter, -apple-system, "system-ui", "PingFang SC", "Hiragino Sans GB", "noto sans", "Microsoft YaHei", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.001px
  display:
    fontFamily: Inter, -apple-system, "system-ui", "PingFang SC", "Hiragino Sans GB", "noto sans", "Microsoft YaHei", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 54px
    fontWeight: 500
    lineHeight: 67.5px
  display-mobile:
    fontFamily: Inter, -apple-system, "system-ui", "PingFang SC", "Hiragino Sans GB", "noto sans", "Microsoft YaHei", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 36px
  body:
    fontFamily: Inter, -apple-system, "system-ui", "PingFang SC", "Hiragino Sans GB", "noto sans", "Microsoft YaHei", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 13px
  button:
    fontFamily: Inter, -apple-system, "system-ui", "PingFang SC", "Hiragino Sans GB", "noto sans", "Microsoft YaHei", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 1px
  sm: 2px
  md: 3px
  lg: 4px
  xl: 6px
  2xl: 8px
  3xl: 12px
  4xl: 20px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 9px
  s7: 11px
  s8: 12px
  s9: 16px
  s10: 18px
components:
  button-default-size:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.text}"
    rounded: "{rounded.sm}"
    padding: 0px 15px
    height: 32px
  text-input:
    backgroundColor: "{colors.fill}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.text}"
    rounded: "{rounded.sm}"
    height: 32px
  tag:
    backgroundColor: "{colors.fill}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 0px 8px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.border}"
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 9px 28px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.ink-strong}"
  footer:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.ink-strong}"
    padding: 80px 20px 0px
---

# Arco Design

## Overview

Arco Design is ByteDance's open-source enterprise design system (React and Vue component libraries, Figma/Sketch kits, an icon platform and theme tools). arco.design is its documentation and marketing site, shown in the capture in Simplified Chinese ("智能设计体系 / 连接轻盈体验", "Intelligent design system, connecting a light experience").

The homepage reads as a clean, bright product site with a bright cobalt-blue accent: a left-aligned two-line hero headline (the first line in a sky-blue gradient, the second in near-black), a floating menu card of ecosystem products (Arco Pro, DesignLab, Material Market, IconBox, Platte) and a browser-window illustration on the right made of the system's own pieces (a type specimen "Aa", bar charts, a blue swatch grid, outlined/dashed/text buttons, a star rating, a toggle, a code block). Below: a row of trusted-by partner logos, a centred section title, and two large rounded panels side by side, one saturated cobalt (#165dff, "design resources") and one deep slate (#272e3b, "development resources"), then a four-column strip of the design principles agreement 一致, rhythm 韵律, clear 清晰 and open 开放, then an ecosystem tab row and a colour-tool preview with a wheel and a five-step blue palette.

Key characteristics:
- **One cobalt blue.** #165dff ("arcoblue-6") for buttons, links, selected tabs and the biggest panel.
- **Cool grey neutrals.** Text and borders come from a blue-tinted grey ramp: #1d2129, #4e5969, #86909c, #c9cdd4, #e5e6eb, #f2f3f5, #f7f8fa.
- **Inter first.** Inter with CJK fallbacks (PingFang SC, Hiragino Sans GB, Microsoft YaHei), body 14px; Fira Mono for code.
- **Tiny radii.** Controls are 2px, bordered cards 2px, tags 2px; larger showcase panels use 6 to 12px.
- **Flat, bordered surfaces.** 1px #e5e6eb borders and a faint cool shadow (`rgba(78, 89, 105, 0.14) 0px 2px 3px 0px`) carry hierarchy.
- **Photographic restraint.** Imagery is product illustration, colourful partner logos and abstract blue 3D shapes, never people photography.

## Colors

Measured on arco.design (homepage, and the component pages for button, input, select, tag and card) and confirmed in the published stylesheet of `@arco-design/web-react` (`dist/css/arco.css`, downloaded and read), where each colour is an RGB triplet variable.

### Brand
- **Primary** `{colors.primary}` (#165dff): `--arcoblue-6: 22,93,255`; `--primary-6` and `--link-6` alias it.
- **On primary** `{colors.on-primary}` (#ffffff).
- **Primary light** `{colors.primary-light}` (#4080ff): brighter blue measured as link/emphasis text on the homepage.
- **Primary bg** `{colors.primary-bg}` (#e8f3ff): the pale blue tint behind blue tags and selected rows.

### Neutrals (the gray ramp)
- **Canvas** `{colors.canvas}` (#ffffff): page background (`--color-bg-1` is #fff).
- **Surface subtle** `{colors.surface-subtle}` (#f7f8fa): `--gray-1`; the footer and alternate bands.
- **Fill** `{colors.fill}` (#f2f3f5): `--gray-2`; default input and tag fill (`--color-fill-2`).
- **Border** `{colors.border}` (#e5e6eb): `--gray-3`; `--color-border`.
- **Ink disabled** `{colors.ink-disabled}` (#c9cdd4): `--gray-4`; `--color-text-4`.
- **Ink muted** `{colors.ink-muted}` (#86909c): `--gray-6`; `--color-text-3`, the small grey captions.
- **Ink** `{colors.ink}` (#4e5969): `--gray-8`; `--color-text-2`, most body copy (934 characters measured).
- **Ink strong** `{colors.ink-strong}` (#1d2129): `--gray-10`; `--color-text-1`, headings (702 characters).
- **Surface dark** `{colors.surface-dark}` (#272e3b): `--gray-9`; the "development resources" panel.

### Status
- **Success** `{colors.success}` (#00b42a): `--green-6: 0,180,42`.
- **Warning** `{colors.warning}` (#ff7d00): `--orange-6: 255,125,0`.
- **Danger** `{colors.danger}` (#f53f3f): `--red-6: 245,63,63`.

### Dark mode
The stylesheet redefines the ramps under `body[arco-theme='dark']`: the page becomes #17171a (`--color-bg-1`) with border #333335, and the arcoblue-6 becomes 60,126,255. This document describes the light theme only.

### Decorative
Syntax-highlight colours in the code block (#98c379, #b882ff, #a6d8ff on #282c34) and the colourful partner logos are illustration, not tokens.

## Typography

Font family (from the library stylesheet and measured on the page): `Inter, -apple-system, BlinkMacSystemFont, PingFang SC, Hiragino Sans GB, noto sans, Microsoft YaHei, Helvetica Neue, Helvetica, Arial, sans-serif`; code `Consolas, Menlo` in the library, and Fira Mono on the site (132 characters measured).

| Role | Token | Size / weight / line |
|---|---|---|
| Hero headline | `{typography.display}` | 54px / 500 / 67.5px |
| Hero headline, mobile | `{typography.display-mobile}` | 24px / 500 / 36px |
| Docs page title | `{typography.heading-docs}` | 36px / 500 / 45px |
| Button (hero) | `{typography.button}` | 16px / 500 / 24px |
| Text, control, docs body | `{typography.text}` | 14px / 400 / 22.001px |
| Caption | `{typography.body}` | 13px / 400 / 13px |

The library's global font-size scale (from `components/style/theme/global.less` in the npm package): display 56, 48, 36px; title 24, 20, 16px; body 14, 13, 12px; caption 12px; base 14px, line-height 1.5715.

Measured sizes by character: 14px (1765), 12px (176), 16px (88), 18px (84), 36px (61), 20px (60), 24px (30), 54px (12). Weights are 400 and 500; headings are medium, not bold.

### Font substitutes
Inter is open source (use as-is). For CJK, PingFang SC on Apple, Microsoft YaHei on Windows, Noto Sans CJK elsewhere.

## Layout

- Header bar with logo, a `⌘ K` search field (32px high, #f2f3f5 fill, 2px radius), dropdowns (设计, 开发, 生态产品), language, direction (LTR) and theme controls, avatar.
- Hero is a two-column split: text left, composed illustration right.
- Sections are centred, with a small grey eyebrow label (e.g. 快速上手) above a 36px-class title.
- Two large resource panels sit side by side and fill the container width; the second row of principles is a four-up strip inside a bordered white card.
- The footer is a #f7f8fa block with 80px top padding and link columns (设计, 组件, 开发 ...).
- Spacing values measured: 2, 4, 6, 7, 8, 9, 11, 12, 16 and 18px. The library's size ladder is a 4px step: mini 24, small 28, default 32, large 36px.

## Elevation & Depth

- Hierarchy mostly comes from 1px borders (#e5e6eb) and flat fills.
- Light shadows, all measured: `rgba(78, 89, 105, 0.14) 0px 2px 3px 0px` (13 uses), `rgba(78, 89, 105, 0.14) 0px 1px 2px 0px`, `rgb(201, 205, 212) 0px 1px 0px 0px`.
- Floating menus use a layered cool shadow: `rgba(78, 89, 105, 0.06) 0px 10px 11px 0px, rgba(78, 89, 105, 0.03) 0px 6px 4px 0px, rgba(78, 89, 105, 0.06) 0px 0px 0px 1px` plus finer layers.
- Card inset outline: `rgba(58, 60, 70, 0.1) 0px 0px 0px 1px inset` on the homepage cards.
- The library defines three shadow tiers with blur radii of 5, 10 and 20px at 0.1 alpha black (global.less).

## Shapes

Radius ladder as measured: 1px `{rounded.xs}`, 2px `{rounded.sm}`, 3px `{rounded.md}`, 4px `{rounded.lg}`, 6px `{rounded.xl}`, 8px `{rounded.2xl}`, 12px `{rounded.3xl}`, 20px `{rounded.4xl}`, and `{rounded.pill}` / 50% for circles.

The library's own radius tokens are `border-radius-small: 2px`, `medium: 4px`, `large: 8px`, `circle: 50%`. The inputs, tags, default buttons and bordered cards use the small radius; the hero CTA measures 3px; the large resource panels measure 8px.

## Components

### Buttons
- **Hero primary:** `{components.button-primary}`: 44px, padding 9px 28px, 3px radius, 16px/500, cobalt fill. Hover in the measurement turns the fill to {colors.ink-strong}.
- **Default size:** `{components.button-default-size}`: 32px high, padding 0 15px, 2px radius, 14px/400 (measured on the Button page). Sizes mini 24, small 28, default 32, large 36px from the library.
- Types in the docs: primary, secondary, dashed, outline, text, each with warning, danger and success statuses.

### Text input and select
`{components.text-input}`: #f2f3f5 fill (`input-color-bg: color-fill-2`), transparent border, 2px radius (`input-border-radius: @radius-small`), 32px height, 14px text. On focus the fill turns white (`input-color-bg_focus: color-bg-2`).

### Tag
`{components.tag}`: 2px radius (`tag-border-radius`), 8px horizontal padding, 12px default font; status variants use the 1-step pale colour for background and the 6-step colour for border (for example `tag-red-bordered-color-border` is red-6 #f53f3f).

### Card
`{components.card}`: white (`color-bg-2`), 1px solid neutral-3 border and 2px radius when bordered, header 46px high with 16px side padding, 14px text in default size.

### Navigation and footer
Top bar white with the search field and dropdowns; `{components.footer}` is a #f7f8fa block with link columns.

### Resource panels
The two large panels (cobalt and slate) have white 16px headings, small translucent-white subcopy, a grid of white icon tiles with 12px labels, and a bottom row of text links separated by a hairline.

## Art Direction and Imagery

- **Illustration made of the system.** The hero picture is a mock browser window assembled from real Arco parts: type specimen, bar chart, blue swatch grid, buttons (Primary, Secondary, Dashed, Outline, Text), rating stars, toggle and a code block; around it float round blue glossy "orbs" holding product icons.
- **Blue 3D shapes.** Abstract blue wave and atom renders fill image cells, tying into the cobalt accent.
- **Partner logos in full colour.** The trust strip (大力, 头条号, 今日头条, 西瓜视频, 瓜瓜龙启蒙, 轻服务, 番茄小说, 飞连) uses each brand's own colours at uniform height.
- **Colour tool preview.** A hue wheel beside a five-step blue ramp spanning light sky to navy shows the palette method.
- **Density.** Moderate: generous section spacing, but each panel packs icon grids with 12px labels.

## Microcopy Patterns

| Pattern | Example in the capture |
|---|---|
| Hero headline, two lines | 智能设计体系 / 连接轻盈体验 |
| Eyebrow + title | 快速上手 / 完善的设计开发资源 |
| Panel title + one-line description | 设计资源: 使用 Arco 设计资源，帮助你创造优秀的产品设计 |
| Principle: English word + Chinese word + sentence | agreement 一致 / rhythm 韵律 / clear 清晰 / open 开放 |
| CTA | 开始使用, 立即使用 |
| Text link with arrow | 设计原则 >, 样式指南 >, 组件用法 > |

The English docs pages (arco.design/react/en-US/components/...) use plain descriptive sentences ("Buttons can be mini, small, medium and large in size...").

## Measured Reference

| Item | Value |
|---|---|
| Hero CTA | 44px high, padding 9px 28px, radius 3px, 16px/500, #165dff |
| Default button (docs) | 32px high, padding 0 15px, radius 2px, 14px/400 |
| Docs h1 | 36px / 500 / 45px, #1d2129 |
| Docs body | 14px / 400 / 21px, #4e5969 |
| Input | 32px, fill #f2f3f5, radius 2px |
| Tag | radius 2px, padding 0 8px, 12px font |
| Card (bordered) | 1px #e5e6eb, radius 2px, header 46px |
| Footer | #f7f8fa, padding 80px 20px 0 |
| Border colours seen | #e5e6eb, #f2f3f5, #c9cdd4, #165dff, #ff7d00, #f53f3f, #00b42a |
| Status tints seen | #e8f3ff, #fff3e8, #fff7e8, #ffece8, #e8ffea, #e8f7ff, #ffe8fb, #ffe8f1 |

## Status Colour Pairs

| Status | Solid (step 6) | Tint seen on pages |
|---|---|---|
| Primary | #165dff | #e8f3ff |
| Success | #00b42a | #e8ffea |
| Warning | #ff7d00 | #fff7e8 / #fff3e8 |
| Danger | #f53f3f | #ffece8 |

- Solid colours are used for borders, icons and filled buttons; tints are used behind tags and alerts.
- Text on a tint stays the solid colour; text on a solid fill is white.
- Disabled content uses {colors.ink-disabled} (#c9cdd4).
- The library exposes ten steps per hue (`--arcoblue-1..10`), of which this document reports only the measured steps.

## Design System Architecture

Arco Design publishes its system openly:
- Source and issues: https://github.com/arco-design/arco-design (the React library); the npm package `@arco-design/web-react` ships the Less sources under `es/style/theme/` (`default.less`, `global.less`, `color/css-variables.less`) and per-component `style/token.less` files, plus the compiled `dist/css/arco.css`.
- Token architecture: colour ramps are CSS variables holding RGB triplets (`--arcoblue-1..10`, `--gray-1..10`, `--red-`, `--orange-`, `--green-` ...) with semantic aliases (`--primary-6`, `--success-6`, `--danger-6`, `--warning-6`, `--link-6`) and role variables (`--color-text-1..4`, `--color-fill-1..4`, `--color-border-1..4`, `--color-bg-1..5`). A dark theme switches them via `body[arco-theme='dark']`.
- Less layer: global tokens (`@radius-small`, `@size-default`, `@font-size-body-3`, spacing ladder) feed component tokens such as `@input-border-radius: @radius-small`, `@tag-border-radius: @radius-small`, `@tag-padding-horizontal: 8px`, `@card-size-default-height-title: 46px`.
- Principles (shown on the homepage): agreement 一致, rhythm 韵律, clear 清晰, open 开放.
- Tooling: Design Lab (theme configuration), Material Market, IconBox and Palette (colour tool) are listed in the site's ecosystem section; I did not open their pages.
- The product is the component library; the site is just a showcase.

## Do's and Don'ts

### Do
- Use #165dff as the only brand accent and the cool-grey ramp for everything else.
- Keep controls at 32px high with a 2px radius; use 36px (large) sparingly.
- Show hierarchy with 1px #e5e6eb borders and flat fills before reaching for shadow.
- Use Inter at 14px/400 for UI text and 500 for headings.
- Pair a pale tint (e.g. #e8f3ff) with the saturated 6-step colour for statuses.
- Provide CJK font fallbacks.

### Don't
- Don't use pure black text; use #1d2129 and #4e5969.
- Don't round standard controls beyond 4px.
- Don't add a second brand hue; status colours are for status only.
- Don't use heavy drop shadows; the shadows measured are all faint and cool-tinted.
- Don't bold headings above weight 500 in the interface.

## Responsive Behavior

- The mobile measurement shows the hero headline reducing from 54px to 24px (line 36px) at weight 500.
- Behaviour of the hero split and panels below the measured widths was not captured.
- The site toggles light/dark and LTR/RTL from the header.
- The partner-logo row is a horizontally spaced strip and the ecosystem tabs (DesignLab, ArcoPro, Palette, IconBox, MaterialMarket, More) form a tab bar.

## Iteration Guide

1. Set the tokens: #165dff, #1d2129 / #4e5969 / #86909c text, #e5e6eb border, #f7f8fa subtle surface.
2. Build the 32px button (2px radius, 14px label) and the input (2px radius, #f2f3f5 fill) first.
3. Add tags and cards with the same 2px radius and 1px border.
4. For marketing sections, add large panels in #165dff and #272e3b with white text and translucent white captions.
5. Use Inter 54px/500 for a hero and 36px/500 for page titles.
6. Check dark mode by mapping the ramp (page #17171a, border #333335) rather than inverting.
