---
version: alpha
name: SmartHR
category: "Design Systems"
description: "SmartHR corporate site (smarthr.co.jp): white pages with near-black ink #1d1c1b and SmartHR Green #00c4cc, a giant Heebo weight-100 wordmark line at 113px, YakuHanJP/Noto Sans JP text with wide tracking, black arrow buttons, 1px black rules and ribbon-like turquoise imagery."
colors:
  canvas: "#ffffff"
  ink: "#1d1c1b"
  primary: "#1d1c1b"
  on-primary: "#ffffff"
  brand-green: "#00c4cc"
  teal-bright: "#55fffd"
  yellow-accent: "#ffe556"
  mint-tint: "#d4f4f5"
  ink-soft: "#484644"
  hairline: "#e6e9e9"
  ink-muted: "#6a6a6a"
typography:
  display:
    fontFamily: Heebo, sans-serif
    fontSize: 113.067px
    fontWeight: 100
    lineHeight: 84.8px
  heading:
    fontFamily: YakuHanJP, "Noto Sans JP", "ヒラギノ角ゴ ProN W3", Meiryo, sans-serif
    fontSize: 25.7778px
    fontWeight: 500
    lineHeight: 38.6667px
    letterSpacing: 2.57778px
  label:
    fontFamily: YakuHanJP, "Noto Sans JP", "ヒラギノ角ゴ ProN W3", Meiryo, sans-serif
    fontSize: 15.1111px
    fontWeight: 500
    lineHeight: 21.1556px
    letterSpacing: 0.755556px
  body:
    fontFamily: YakuHanJP, "Noto Sans JP", "ヒラギノ角ゴ ProN W3", Meiryo, sans-serif
    fontSize: 14.2222px
    fontWeight: 400
    lineHeight: 27.0222px
    letterSpacing: 0.711111px
  button:
    fontFamily: YakuHanJP, "Noto Sans JP", "ヒラギノ角ゴ ProN W3", Meiryo, sans-serif
    fontSize: 14.2222px
    fontWeight: 500
    lineHeight: 19.9111px
    letterSpacing: 0.711111px
rounded:
  xs: 20.8px
  sm: 24.32px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 8px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    padding: 14.4px 21.3333px 15.5733px
    height: 52px
    borderColor: "{colors.ink}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 106.667px 70.4px 70.4px
---

## Overview

smarthr.co.jp is the corporate site of SmartHR, Inc. (the measured title is "株式会社SmartHR｜労働にまつわる社会課題をなくし、誰もがその人らしく働ける社会をつくる。", that is, the company that wants to remove social problems around work so that everyone can work as themselves). It is not the product site; the page is a mission-led brand page about 5939px tall, set in Japanese.

The look is editorial and graphic. The page is white with near-black ink (#1d1c1b) and thin black horizontal rules that divide sections and carry small section labels with a turquoise square at the left edge ("ミッション" and "サービス"). The brand's turquoise, a pale, saturated cyan, appears as a huge folded ribbon with a halftone, dry-brush texture that zigzags down the page behind the type. Over it the hero statement is set in large wide-tracked Japanese ("労働にまつわる社会課題をなくし、誰もがその人らしく働ける社会をつくる。"), with the SmartHR logo in the top-left, a compact utility strip (モーション pause control, 日本語 | English) and a primary menu (私たちについて, サービス, ニュース, 会社情報, サステナビリティ, 採用サイト), and a black round menu button at the top right.

Beneath the hero sit a news item with a thumbnail, date and a small "お知らせ" tag, a one-word typographic moment, "well-working", set in a very thin giant Latin face, a two-column mission text, rounded photographs of employees, and stacks of black buttons with arrows. Photography is natural and soft-focused office scenes with generously rounded corners. Microcopy is calm and sincere.

## Colors

The brand's own logo policy (SmartHR Brand Assets Guide v2.0) names "SmartHRグリーン" as #00C4CC, the only logo color besides white, and the same value was measured on the home page as the logo link's text color. It is the signature hue but is used sparingly in UI text; most surfaces are white and the working color is the near-black #1d1c1b, which is the most-read text color, the button fill and the footer background.

A brighter cyan, #55fffd, and a pale mint, #d4f4f5, appear in the ribbon artwork and tinted areas, and a yellow, #ffe556, in small accents (all measured as background areas). Secondary ink is #484644 and #6a6a6a, and a hairline tone #e6e9e9 appears in dividers. The footer is #1d1c1b with white text.

## Typography

Japanese text is set in YakuHanJP with Noto Sans JP, Hiragino Kaku Gothic ProN and Meiryo as fallbacks (loaded fonts: YakuHanJP 400 and 500, Noto Sans JP 400 and 500). Latin display text uses Heebo, loaded at weights 100 and 300. Sizes are fluid: the measured custom properties are written as max(rem, 100vw * N / 1440), so at the 1280px viewport the statement heading is 25.7778px at 500 with a 38.6667px line and 2.57778px tracking, labels are 15.1111px/500, body is 14.2222px with a 27.0222px line and 0.711111px tracking.

The "well-working" word is Heebo 113.067px at weight 100 on an 84.8px line, a very thin, tall setting that contrasts with the dense Japanese blocks. Tracking is deliberately wide on all Japanese text.

## Layout

The layout is full-bleed with a two-column editorial grid: a label and heading in the left half and body text with a button column in the right half, separated by horizontal rules that span the full width. Images are rounded and cropped as tall and wide panels of different sizes in a single row. The ribbon artwork runs behind several sections and breaks the grid on purpose.

The fixed header is 69px tall, white, with no border measured. The footer is padded 106.667px 70.4px 70.4px on #1d1c1b.

## Elevation & Depth

There is no measured box-shadow on the page. Depth comes from layering: the textured ribbon behind the type, photographs on white, and black buttons on white. Section edges are drawn with 1px black rules rather than shadows, and a gradient-clipped heading (from #1d1c1b to a light grey #d6d6d6) is applied to the large h3 headings through background-clip text.

## Shapes

Shapes are a mix of strictly rectilinear rules and generous curves. The measured radii include 20.8px and 24.32px on images and button fills, 999px pills, 50% circles (the round menu button) and an unusually large 130.133px on some image masks. The button box itself has a 0px radius with a 1px #1d1c1b border, while its black fill element (class link-bg) carries a 24.32px radius that is part of the hover animation (class u-hover-round).

## Components

Primary button: the link is a 322px wide, 52px tall box with padding 14.4px 21.3333px 15.5733px and a 1px #1d1c1b border; the fill is a child element in #1d1c1b with 24.32px radius, the label is white 14.2222px at 500 with 0.711111px tracking, and a small white arrow sits at the right. These measurements come from a DOM probe of the "私たちについて" button, recorded in SOURCES.json.

Navigation: white header with 12px to 14px labels in #1d1c1b with an animated underline on hover (class u-hover-line), dropdown chevrons, and a language switch. Section label: a small turquoise square, a text label and a 1px black rule. Round menu button: black circle with a two-line icon. News row: thumbnail, date, a pill tag in pale cyan, and a text link with an arrow.

## Design System Architecture

SmartHR maintains a public design system at https://smarthr.design (SmartHR Design System), with an open-source React library, SmartHR UI, at https://github.com/kufu/smarthr-ui (owner kufu, MIT license). The design-system home page lists Foundation, Basic Elements, Accessibility, Products and Communication sections. This corporate site does not use it: the served markup is an Astro build (/_astro/ stylesheets) with its own class names (child-link, u-hover-line, u-hover-round, link-bg, js-drawer-menu-item-primary) and its own custom properties (--font-size--*, --section--space--*, --space--*, --radius: 15px), with no smarthr-ui identifiers. So no value in this file comes from the design system; the only externally sourced value is the logo color from the Brand Assets Guide at https://developer.smarthr.jp/design/logo-policy.pdf.

## Do's and Don'ts

Do keep surfaces white and ink #1d1c1b, use SmartHR Green #00c4cc only for the logo and small brand marks, and let the textured turquoise ribbon carry the color. Do set Japanese text with wide tracking and generous line height, and use the thin Heebo giant word as a single typographic moment per page. Do use black arrow buttons stacked in a column.

Don't change the logo color; the brand guide allows only the green or white, and white on imagery. Don't add drop shadows. Don't use more than one saturated hue next to the cyan, and keep the yellow to small accents.

## Responsive Behavior

The type is fluid by design: sizes are written as multiples of viewport width over 1440, with rem floors (for example max(5.2rem, 100vw * 66 / 1440) for a large step), so headings scale with the window rather than jumping at breakpoints. The mobile pass measured the logo heading at 32.78px against 28.4444px on desktop. Other mobile layout details were not measured.

## Iteration Guide

Start with a white page and #1d1c1b ink, add 1px black rules and small label bars with a turquoise square, and set Japanese copy in YakuHanJP/Noto Sans JP at 14.2222px/27.0222px with 0.711111px tracking. Use Heebo 100 at very large size for one English word, buttons at 52px high with a black fill, white label and arrow, and keep imagery in soft, rounded crops with the turquoise ribbon behind. Use #00c4cc only where the brand mark appears, and re-measure on the live page before adding values.
