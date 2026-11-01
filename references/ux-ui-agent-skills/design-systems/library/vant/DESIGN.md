---
version: alpha
name: "Youzan (有赞)"
category: "Design Systems"
description: "Youzan (有赞) home page, a Chinese retail-SaaS marketing site on a white canvas (#ffffff) with near-black ink (#323233 body, #1d1d1f headings), a single bright blue action color (#3370ff) on pill buttons (26px radius, 52px tall), a system font stack (-apple-system with PingFang SC fallbacks) at 400/600 weights, and 16px rounded white cards over a pale blue hero wash."

colors:
  canvas: "#ffffff"
  ink: "#323233"
  primary: "#3370ff"
  on-primary: "#ffffff"
  surface-footer: "#000000"
  ink-muted: "#969799"
  ink-secondary: "#646566"
  ink-strong: "#1d1d1f"
  ink-disabled: "#c8c9cc"
  primary-hover: "#0055cc"
  text-input-bg: "#f7f8fa"
typography:
  display:
    fontFamily: >-
      -apple-system, "system-ui", "Helvetica Neue", Helvetica, Arial, "PingFang SC", "Hiragino Sans GB", "Microsoft Yahei", STHeiti, SimSun, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe
      UI Symbol", "Noto Color Emoji"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 66px
  display-mobile:
    fontFamily: >-
      -apple-system, "system-ui", "Helvetica Neue", Helvetica, Arial, "PingFang SC", "Hiragino Sans GB", "Microsoft Yahei", STHeiti, SimSun, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe
      UI Symbol", "Noto Color Emoji"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 33px
  subheading:
    fontFamily: >-
      -apple-system, "system-ui", "Helvetica Neue", Helvetica, Arial, "PingFang SC", "Hiragino Sans GB", "Microsoft Yahei", STHeiti, SimSun, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe
      UI Symbol", "Noto Color Emoji"
    fontSize: 26px
    fontWeight: 600
    lineHeight: 35.75px
  body:
    fontFamily: >-
      -apple-system, "system-ui", "Helvetica Neue", Helvetica, Arial, "PingFang SC", "Hiragino Sans GB", "Microsoft Yahei", STHeiti, SimSun, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe
      UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: >-
      -apple-system, "system-ui", "Helvetica Neue", Helvetica, Arial, "PingFang SC", "Hiragino Sans GB", "Microsoft Yahei", STHeiti, SimSun, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe
      UI Symbol", "Noto Color Emoji"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  nav:
    fontFamily: >-
      -apple-system, "system-ui", "Helvetica Neue", Helvetica, Arial, "PingFang SC", "Hiragino Sans GB", "Microsoft Yahei", STHeiti, SimSun, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe
      UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button-secondary:
    fontFamily: >-
      -apple-system, "system-ui", "Helvetica Neue", Helvetica, Arial, "PingFang SC", "Hiragino Sans GB", "Microsoft Yahei", STHeiti, SimSun, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe
      UI Symbol", "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 28px
rounded:
  xs: 2px
  sm: 16px
  md: 26px
  lg: 32px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 36px
    height: 52px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 0px 20px
    height: 52px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 36px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    height: 18px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.sm}"
    padding: 32px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.canvas}"
    padding: 24px 0px 132px
---

## Overview

This document describes the Youzan (有赞) marketing home page at https://www.youzan.com, a Chinese retail SaaS vendor whose page sells CRM, omnichannel selling, private-domain operations and "AI" store operations. The capture opened on 2026-10-09 shows a dark navy partner strip at the top (an "allvalue" banner with a "了解更多" pill), a white navigation bar with four two-line menu items, and below it a hero that sits on a pale sky-blue gradient wash. The page is dense, Chinese-language, and product-led: pill tabs ("找有赞 / 新零售 / 电商 / 本地生活") switch the hero, large two-line headlines state a benefit, and illustrated cards in soft 3D-style icons list product modules.

The system is deliberately plain. Text is a near-black neutral (`{colors.ink}` #323233 for most reading, `{colors.ink-strong}` #1d1d1f for headings), the canvas is white (`{colors.canvas}` #ffffff), and one saturated blue (`{colors.primary}` #3370ff) carries every filled call to action. Everything else is gray steps or imagery.

**Key Characteristics:**
- One action color: `{colors.primary}` #3370ff fills the "免费试用" (free trial) button and the "免费领取" banner button, and colors text links such as "了解方案".
- Pill-shaped controls: the hero CTA is 52px tall with 0px 36px padding and a 26px radius; the secondary banner button and small buttons use the 9999px pill radius.
- Gray ladder for text: #323233, #646566, #969799, #c8c9cc, with #f7f8fa and #ebedf0 as light fills and dividers.
- Heavy, large headlines: 48px at weight 600 on desktop, 24px at weight 600 on a 390px viewport.
- White cards at 16px radius floating on a blue-tinted hero, with soft low-opacity shadows.
- A solid black footer (`{colors.surface-footer}` #000000) with white text.

## Colors

> **Source pages:** home (`/`), measured at 1280px and 390px.

### Brand & Accent
- **Youzan Blue** (`{colors.primary}` #3370ff): measured as the fill of the primary CTA and the most frequent non-neutral color in the stylesheet. Text links reuse it.
- **Blue Hover** (`{colors.primary-hover}` #0055cc): the measured background of the hero trial link after hover.
- **On Primary** (`{colors.on-primary}` #ffffff): label color on blue fills.

### Surface
- **Canvas** (`{colors.canvas}` #ffffff): body background and card fill, by far the largest area in the measurement.
- **Footer black** (`{colors.surface-footer}` #000000): the footer area background, the second-largest area.
- **Input fill** (`{colors.text-input-bg}` #f7f8fa): the measured background of text inputs and light chips.

### Text
- **Ink** (`{colors.ink}` #323233): the most-read text color.
- **Ink Strong** (`{colors.ink-strong}` #1d1d1f): headline and card title color.
- **Ink Secondary** (`{colors.ink-secondary}` #646566) and **Ink Muted** (`{colors.ink-muted}` #969799): supporting copy and captions.
- **Ink Disabled** (`{colors.ink-disabled}` #c8c9cc): inactive tab labels such as the faded "户外运动" and "数码家电" pills in the capture.

### Semantic
The home page does not expose a semantic palette. Other colors in the stylesheet (for example #df3320 and #ff5a52, a purple #6555c5) appear only in small counts, and no component on the captured page uses them for status, so none are promoted to tokens.

## Typography

### Font Family
The page loads no web font for text; the only loaded face reported is an icon font ("zenticon"). Text falls to the system stack `-apple-system, "system-ui", "Helvetica Neue", Helvetica, Arial, "PingFang SC", "Hiragino Sans GB", "Microsoft Yahei", STHeiti, SimSun, sans-serif` followed by emoji fonts. On macOS this renders in the system font with PingFang SC for Han characters, which is what the capture shows.

### Hierarchy

| Token | Size | Weight | Line Height | Use |
|---|---|---|---|---|
| `{typography.display}` | 48px | 600 | 66px | Hero headline (desktop) |
| `{typography.display-mobile}` | 24px | 600 | 33px | Hero headline at 390px |
| `{typography.subheading}` | 26px | 600 | 35.75px | Card headings ("公域获客环环相扣") |
| `{typography.body}` | 16px | 400 | 28px | Paragraph copy |
| `{typography.button}` | 20px | 400 | 30px | Primary CTA label |
| `{typography.button-secondary}` | 18px | 600 | 28px | Banner CTA label |
| `{typography.nav}` | 14px | 400 | 21px | Navigation links and inputs |

### Principles
- Two weights do the work: 600 for anything that announces, 400 for reading text. A 500 weight appears on a few labels but no token needs it.
- Line height is generous (1.375 on headlines, 1.75 on body) because the Han script needs air.
- Headlines break into two deliberate lines, a short claim and a longer consequence, as in "门店+CRM+导购 / 客户运营招式多 利润多".

## Layout

### Spacing System
Measured paddings cluster at 4, 6, 12, 16, 24, 32, 40 and 44px, and gaps at 4, 8 and 16px. The spacing tokens `{spacing.s1}` 2px through `{spacing.s10}` 28px record the small steps found in the stylesheet; larger section gaps are generous (the 1280px page is 7664px tall).

### Grid & Container
The navigation uses a centered max-width container class (`max-w-c mx-auto px-c`) and the capture shows content aligned to a left gutter of roughly the same width as the card edge, with two equal cards side by side below the headline band. Card padding is 32px.

### Whitespace Philosophy
Sections are separated by large vertical gaps and one headline pair each: a lighter 26px lead line with a small outlined pill link ("了解 AI 获客"), then a 48px bold claim.

## Elevation & Depth

Measured shadows are soft and cool: `rgba(0,0,0,0.06) 0 4px 6px`, `rgba(0,0,0,0.06) 0 0 7px`, `rgba(50,50,51,0.16) 0 2px 8px`, and a larger blue-gray `rgba(45,82,147,0.2) 0 14px 48px` used on the floating promo banner. The hero's depth comes mostly from the pale blue gradient wash with an inset blue glow, not from borders. Cards are white on that wash and read as raised through contrast rather than outlines.

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 2px | Text inputs |
| `{rounded.sm}` | 16px | Cards (the most common radius, 118 occurrences) |
| `{rounded.md}` | 26px | Primary CTA (52px tall, so a full pill) |
| `{rounded.lg}` | 32px | Large containers |
| `{rounded.pill}` | 9999px | Tabs, tags, small buttons |

Imagery is soft-rendered 3D-style icons in pastel color (a yellow "碰碰贴", a blue calendar card, a pink bag) on white cards, plus product UI screenshots faded behind the hero.

## Components

### Buttons
**`button-primary`**: fill `{colors.primary}`, text `{colors.canvas}`, `{typography.button}` 20px, radius `{rounded.md}`, padding 0px 36px, height 52px. Hover fill is `{colors.primary-hover}`.

**`button-secondary`**: the same blue fill, `{typography.button-secondary}` 18px/600, `{rounded.pill}`, padding 0px 20px, height 52px (the "免费领取" button in the promo banner).

**`link`**: blue text with a blue border, same radius and padding as the primary button; this is the outlined "获取方案" button beside the trial CTA.

### Navigation
White bar (`{colors.canvas}`) with `{typography.nav}` links in `{colors.ink}` and two-line menu entries whose second line is a gray description.

### Inputs
`text-input`: fill `{colors.text-input-bg}`, text `{colors.ink}`, 14px, radius `{rounded.xs}`.

### Cards
`card`: white, 16px radius, 32px padding, title in `{colors.ink-strong}`.

### Footer
`footer`: black fill, white text, padding 24px 0px 132px.

## Design System Architecture

Youzan publishes an open-source mobile Vue library called Vant (documentation at https://vant-ui.github.io/vant, repository at https://github.com/youzan/vant). That library was confirmed as a real design system by the same organization, but this home page does not use it: the page markup carries classes such as `zng-navigation`, `zng-navigation__content` and Tailwind-style utilities (`group/root`, `max-w-c`, `px-c`), the extracted stylesheet contains no `.van-` selectors and no `--van-` variables, and the primary blue #3370ff is not the Vant default. For that reason no Vant token is adopted here. One observation, stated only as a value comparison: Vant's published css-variables file defines grays #f7f8fa, #ebedf0, #c8c9cc, #969799, #646566 and #323233, which are the same hex values this page uses for fills and text, but the page does not reference the library by name.

The de-facto system of the page is therefore a Tailwind-based utility layer plus BEM-named `zng-*` component classes, with root variables limited to `--navigation-height: 92px` and Swiper and Tailwind defaults. No public brand guideline or logo kit for Youzan was found.

## Do's and Don'ts

**Do**
- Use `{colors.primary}` for the single filled CTA in a band.
- Keep headlines at weight 600 and break them into two lines.
- Put white cards at 16px radius over tinted backgrounds.
- Keep body text in `{colors.ink}`, never pure black.

**Don't**
- Don't add a second saturated fill color to buttons.
- Don't use the Vant default blue and assume it matches this site.
- Don't use web fonts; the stack is system fonts.
- Don't use pill radius on cards.

## Responsive Behavior

Measured at 1280px and 390px. The hero headline drops from 48px/66px to 24px/33px at weight 600, and its color on mobile is #001859 in the measurement. Body copy drops to 14px, the primary CTA to 16px with the label "预约回电". Touch targets stay at or above 52px for the primary CTA on desktop.

## Iteration Guide

1. Start from the white canvas and `{colors.ink}`; add blue only for actions.
2. Reuse the 52px pill CTA geometry before inventing new buttons.
3. Verify any new radius against the 2 / 16 / 26 / 32 / 9999px set.
4. When adding Chinese copy, keep line height at about 1.4 for headlines and 1.75 for body.
5. Treat Vant as a reference library only; test any imported Vant component against the measured values here.
