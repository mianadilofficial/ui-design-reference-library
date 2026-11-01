---
version: alpha
name: Korea Government (KRDS)
category: "Design Systems"
description: "The Korea Design System (KRDS) published by the Ministry of the Interior and Safety — a government UI kit built on the Pretendard GOV typeface at 17px body and 44px bold display, a single civic blue (#256ef4) for primary actions with a deeper #0b50d0 hover and #052b57 navy text, white canvases, 8px-radius 64px-tall buttons and 12px-radius outlined cards with #cdd1d5 hairlines."
colors:
  canvas: "#ffffff"
  ink: "#464c53"
  primary: "#256ef4"
  on-primary: "#ffffff"
  surface-subtle: "#f4f5f6"
  surface-tint: "#eef2f7"
  ink-strong: "#1e2124"
  primary-deep: "#0b50d0"
  ink-navy: "#052b57"
  hairline: "#cdd1d5"
typography:
  display:
    fontFamily: "\"Pretendard GOV\""
    fontSize: 44px
    fontWeight: 700
    lineHeight: 66px
  display-mobile:
    fontFamily: "\"Pretendard GOV\""
    fontSize: 32px
    fontWeight: 700
    lineHeight: 48px
  heading:
    fontFamily: "\"Pretendard GOV\""
    fontSize: 25.5px
    fontWeight: 700
    lineHeight: 38.25px
  body:
    fontFamily: "\"Pretendard GOV\""
    fontSize: 17px
    fontWeight: 400
    lineHeight: 25.5px
  button:
    fontFamily: "\"Pretendard GOV\""
    fontSize: 19px
    fontWeight: 400
    lineHeight: 28.5px
  nav:
    fontFamily: "\"Pretendard GOV\""
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
  button-secondary:
    fontFamily: "\"Pretendard GOV\""
    fontSize: 17px
    fontWeight: 700
    lineHeight: 25.5px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 12px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 32px
  s8: 40px
  s9: 80px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 24px
    height: 64px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-deep}"
  button-secondary:
    textColor: "{colors.ink-navy}"
    typography: "{typography.button-secondary}"
    padding: 0px 4px
    height: 48px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary-deep}"
    typography: "{typography.nav}"
    rounded: "{rounded.xl}"
    padding: 32px
    borderColor: "{colors.hairline}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary-deep}"
    rounded: "{rounded.xl}"
    padding: 32px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.ink-strong}"
---

## Overview

KRDS is the Korea Design System, the official design framework for South Korean digital government services. The documentation site at krds.go.kr carries a copyright line for the Ministry of the Interior and Safety (행정안전부), and its overview describes the system as "principles, guidelines and code" for designers, developers and government officials. The homepage captured here is therefore both the brand's public face and a live demonstration of the system it documents: a thin government-identifier strip ("이 누리집은 대한민국 공식 전자정부 누리집입니다") above a dark-navy hero banner with isometric, blue-lit UI-layer illustrations, then a quiet white page of outlined cards.

The personality is institutional, calm and legible rather than expressive. Everything is Korean-first (the page language is `ko`, with an English version linked from the utility bar), set in Pretendard GOV at generous sizes: body at 17px on a 25.5px line, the hero headline at 44px bold. Colour is rationed to one civic blue (#256ef4) for action, a deeper blue (#0b50d0) for links and hover, a navy (#052b57) for selected tabs and secondary text, and a neutral grey scale for everything else. Imagery is flat-to-isometric illustration in muted slate-blue tints (#eef2f7-adjacent panels) rather than photography. The microcopy is plain and directive: section titles such as 시작하기 (Getting started) and 주요 구성 (Main components) followed by one-sentence explanations.

## Colors

The palette is measured from the live page and its published root variables (the stylesheet exposes hundreds of `--krds-*` custom properties, grouped as light and high-contrast themes).

- **Canvas** `#ffffff` is the page background; the largest share of the screen is this white.
- **Primary** `#256ef4` fills the main button and matches the `--krds-light-color-button-primary-fill` variable. Its hover state is `#0b50d0` (`--krds-light-color-button-primary-fill-hover`), the same value the system uses for primary-coloured text (`--krds-light-color-text-primary`), which is why links and card titles use `primary-deep`.
- **Ink** `#464c53` is the most-read body colour (paragraph copy and descriptions); **ink-strong** `#1e2124` is the heading, navigation and page-level text colour (the `body` element's own colour).
- **Ink-navy** `#052b57` colours selected tabs and secondary buttons (`--krds-light-color-text-secondary`).
- **Surface-subtle** `#f4f5f6` is the footer and quiet-panel background; **surface-tint** `#eef2f7` is the hover/selected fill of secondary actions (the measured hover state of utility and menu buttons is this tint).
- **Hairline** `#cdd1d5` draws card and divider borders.

The root variables also define a full high-contrast theme and separate semantic families for success, warning, danger and information; the system publishes light and high-contrast variants of each. Only the values above are used in the captured homepage chrome.

## Typography

Pretendard GOV is the only family on the page (the measured font corpus counts it on essentially every text node), loaded in two weights: 400 and 700. The page head links a `pretendard-gov-dynamic-subset` stylesheet from the orioncactus/pretendard package on jsDelivr. If it is unavailable, a system Korean sans (Apple SD Gothic Neo, Noto Sans KR, Malgun Gothic) is the safest substitute; keep weight 700 for headings and 400 for body.

- **Display** 44px / 66px, weight 700 (1.5 line-height) — the hero headline; **display-mobile** drops to 32px / 48px at 390px width.
- **Heading** 25.5px / 38.25px, weight 700 — section titles.
- **Body** 17px / 25.5px, weight 400 — all paragraph text.
- **Button** 19px / 28.5px, weight 400; **button-secondary** 17px / 25.5px weight 700 for tabs.
- **Nav** 15px / 22.5px, weight 400 for utility and breadcrumb links.

The ratio is consistent: every size carries a 1.5 line-height, which gives Hangul room to breathe. The root variables define pc and mobile size ramps (for example `--krds-pc-font-size-body-large` 1.9rem, `heading-medium` 2.4rem) on a 10px root.

## Layout

The homepage is a single column inside a roughly 900px-wide content box (about 30px side margins at the 960px capture), centred under a full-width header. Structure from top: government identifier strip, hero banner with rounded corners, utility links right-aligned (English, 글자·화면 설정, search), logo row, a full-width main menu bar with seven drop-down items (시작하기, 디자인 스타일, 컴포넌트, 기본 패턴, 서비스 패턴, 소식·소통, KRDS 소개), then content sections.

Sections follow a rhythm of title, one-line lede, then a grid: a two-column block (three stacked outlined cards beside one tall illustration) and a three-column grid of illustrated cards (디자인 원칙, 디지털 포용, 스타일, 컴포넌트, 기본 패턴, 서비스 패턴). The spacing scale is 2, 4, 8, 12, 16, 24, 32, 40 and 80px; card padding is 32px; the root variables name layout gaps such as `--krds-pc-gap-layout-h2-h2` (8rem, i.e. 80px between major sections) and `--krds-pc-gap-layout-title-body-large` (2.4rem, 24px).

## Elevation & Depth

Depth is almost entirely flat. Cards are separated by 1px `#cdd1d5` hairlines on white, not shadows. The measured shadow corpus is dominated by inset outline shadows (`--krds-box-shadow-outline-inset`, used for focus rings, 19 occurrences) with a single two-layer drop shadow (0 0 2px and 0 4px 8px, driven by alpha shadow variables) for floating layers such as dropdown menus. Focus is shown as a thick blue inset ring (`inset 0 0 0 0.6rem` in the primary border colour), consistent with the system's stated accessibility target of WCAG level AA.

## Shapes

Radii are small and stepped: 4px (xs) for small links, 6px (sm) for utility buttons, 8px (md) for primary buttons, 10px (lg), and 12px (xl) for cards and the hero banner corners. Button radius is 8px (the system variable `--krds-radius-medium4` equals 0.8rem). Tabs and menu bar buttons are square (0px). Illustration panels inside cards keep the card's top corners and are cropped to a flat, unrounded bottom edge.

## Components

The component documentation lists 37 components in 11 categories: Identity (Masthead, Identifier, Header, Footer), Navigation (Skip Link, Main Menu, Breadcrumb, Side Navigation, In-page Navigation, Pagination), Layout and Presentation, Action (Link, Button, FAB), Selection, Feedback, Help, Input, Settings, Content, and Mobile.

- **Button primary**: `#256ef4` fill, white 19px label, 8px radius, 0 24px padding, 64px tall (the large size); hover deepens to `#0b50d0`. The button documentation describes primary (filled), secondary (outlined) and tertiary (text) variants in five sizes, advises one primary button per page, and recommends a 44px minimum touch target.
- **Secondary / tab button**: navy `#052b57` 17px bold text, 48px tall, no fill; a selected tab is announced with the accessible text 선택됨.
- **Card**: white, 1px `#cdd1d5` border, 12px radius, 32px padding, blue-deep title with a chevron, grey description, and a small outlined category tag (튜토리얼, 리소스, 디자인 토큰) in blue.
- **Nav**: white bar, 15px links in `#1e2124`, chevron drop-downs, hover fill `#eef2f7`.
- **Footer**: `#f4f5f6` background with `#1e2124` text.

## Design System Architecture

KRDS is itself a design system, and the site documents it openly. Verified from the pages opened for this entry:

- **Governance**: published by the Ministry of the Interior and Safety (footer copyright); the contact address in the page is krds@nia.or.kr. The style overview defines two application tiers: a Standard Style, mandatory for central ministries that carry the government symbol, and an Adaptive Style, which allows an institution with its own logo to customise within baseline rules. It requires WCAG AA conformance and offers self-check lists (font sizes, contrast, icon size, line height).
- **Layers**: design styles (colour, typography, shape, layout, icon, elevation) feed design tokens; tokens feed 37 components; components compose basic patterns and service patterns.
- **Tokens**: the page ships roughly 400 CSS custom properties prefixed `--krds-`, split by theme (`--krds-light-color-*`, `--krds-high-contrast-color-*`), by role (`action`, `button`, `text`, `border`, `surface`, `icon`, `divider`) and by device (`--krds-pc-*`, `--krds-mobile-*`). Primitive scales (for example `--krds-color-light-gray-95`, `--krds-number-16`) sit under semantic aliases.
- **Distribution**: an HTML Component Kit is published on GitHub (KRDS-uiux/krds-uiux, installable with `npm install krds-uiux`) and a Figma community profile is linked from the site.
- **Class naming**: component markup uses the `krds-` prefix (button markup on the button page uses `krds-btn`).

Sources: https://www.krds.go.kr/html/site/index.html, https://www.krds.go.kr/html/site/style/style_01.html, https://www.krds.go.kr/html/site/component/component_summary.html, https://www.krds.go.kr/html/site/component/component_05_02.html, https://github.com/KRDS-uiux/krds-uiux.

## Do's and Don'ts

- Do use `#256ef4` only for the single most important action in a view, and `#0b50d0` for its hover and for link text.
- Do keep every text line at 1.5 line-height and body at 17px; Hangul at smaller sizes loses legibility.
- Do draw card boundaries with 1px `#cdd1d5` borders and 12px radii rather than shadows.
- Do show keyboard focus as the thick blue inset ring and keep buttons at least 44px high.
- Do announce state in text (선택됨) as well as colour.
- Don't place more than one filled primary button in one view; use outlined or text variants for the rest.
- Don't introduce additional accent colours; status colours come from the semantic success, warning, danger and information families only.
- Don't round tabs or main menu buttons; they are intentionally square.
- Don't use photography in hero banners; the system uses dark-navy gradient illustration.

## Responsive Behavior

The display headline falls from 44px (desktop) to 32px (390px viewport), with line-height scaling from 66px to 48px. The system defines separate `--krds-pc-*` and `--krds-mobile-*` variables for font sizes and layout gaps (for example the heading-to-heading gap is 8rem on PC and smaller on mobile), and its component list includes a dedicated Mobile category (Bottom Sheet, Tab Bar, Toast, Snackbar, Splash Screen, Back Button). Mobile layout of the card grid and main menu was not measured.

## Iteration Guide

1. Start from white canvas, `#464c53` body at 17px/25.5px, `#1e2124` headings in Pretendard GOV 700.
2. Add exactly one `#256ef4` 8px-radius button (64px tall for hero use, smaller sizes elsewhere) and give it `#0b50d0` for hover.
3. Build content from outlined 12px-radius cards with 32px padding and `#cdd1d5` hairlines; use `#f4f5f6` or `#eef2f7` for quiet backgrounds and hover fills.
4. Use `--krds-*` variable names when implementing so light and high-contrast themes can swap values.
5. Check each screen against the WCAG AA contrast and font-size checklists that the style overview describes before shipping.
