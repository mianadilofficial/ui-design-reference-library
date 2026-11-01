---
version: alpha
name: "デジタル庁 (Digital Agency, Japan)"
category: "Design Systems"
description: "The Digital Agency of Japan home page (digital.go.jp) is a plain government news portal: Noto Sans JP at 28px/700 headings and 17px body, #333333 text on white, a single deep-blue #00118f used for underlined links, black 1px outlines on 16px and 24px rounded cards, and a translucent white #ffffffe0 header."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#00118f"
  ink-secondary: "#666666"
  hairline: "#000000"
  nav-bg: "#ffffffe0"
typography:
  display:
    fontFamily: "\"Noto Sans JP\", -apple-system, blinkmacsystemfont, \"Segoe UI\", \"Hiragino Kaku Gothic ProN\", \"BIZ UDPGothic\", meiryo, sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 42px
    letterSpacing: 0.28px
  display-mobile:
    fontFamily: "\"Noto Sans JP\", -apple-system, blinkmacsystemfont, \"Segoe UI\", \"Hiragino Kaku Gothic ProN\", \"BIZ UDPGothic\", meiryo, sans-serif"
    fontSize: 22px
    fontWeight: 700
    lineHeight: 33px
    letterSpacing: 0.44px
  subheading:
    fontFamily: "\"Noto Sans JP\", -apple-system, blinkmacsystemfont, \"Segoe UI\", \"Hiragino Kaku Gothic ProN\", \"BIZ UDPGothic\", meiryo, sans-serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 28.9px
    letterSpacing: 0.34px
  nav:
    fontFamily: "\"Noto Sans JP\", -apple-system, blinkmacsystemfont, \"Segoe UI\", \"Hiragino Kaku Gothic ProN\", \"BIZ UDPGothic\", meiryo, sans-serif"
    fontSize: 14px
    fontWeight: 800
    lineHeight: 14px
    letterSpacing: 0.28px
rounded:
  xs: 4px
  sm: 16px
  md: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 24px
  s8: 32px
  s9: 40px
components:
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.sm}"
    height: 58px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

The measured site is https://www.digital.go.jp/ (page title "デジタル庁", the Digital Agency of the Government of Japan; 1280px viewport, 7844px tall). The list entry named it "Digital Agency Japan"; the site's own title is デジタル庁, so that is used with the English name. The home page is a public-information portal in Japanese: a white page, left-aligned section headings, long underlined blue link text, and rounded outlined cards. It has no hero banner, no promotional primary button and no brand imagery beyond news photographs, which is why the extractor found no primary call-to-action.

The page runs in this order: a header with the wordmark "デジタル庁" at left and a row of controls (a current-page pill "ホーム", "一般の方", "行政・事業者の方", a separator, "プレスルーム", a Language selector, "検索" search and "すべてのメニュー"); an "重要なお知らせ" (Important notices) section with four bulleted blue underlined links about fraud warnings, My Number portal phishing, health insurance card expiry and an earthquake response page; a "トピックス" (Topics) section with two large and three small image cards; and a "新着・更新" (New and updated) list of rounded outlined rows, each with a link title, a category label (組織情報, 調達情報, 会議等, 会見) and a date, ending in a circled-arrow icon.

The tone is formal, concrete and informational. Dates use the Japanese era format (令和8年) alongside Gregorian dates, and headlines state exactly what the page covers.

## Colors

The palette is deliberately minimal, measured as three text colors and two backgrounds. Text is {colors.ink} (#333333), the dominant color by characters read. Secondary text, such as dates and category labels, is {colors.ink-secondary} (#666666). Links and the single accent are {colors.primary} (#00118f), a deep ultramarine blue that is always underlined. The background is {colors.canvas} (#ffffff), and the sticky header uses {colors.nav-bg} (#ffffffe0, white at roughly 88 percent opacity) so content faintly shows through. Card and row outlines are {colors.hairline} (#000000) at 1px.

The Digital Agency design-system pages that were opened (https://design.digital.go.jp/dads/foundations/color/ and the color-palette page) describe key, common, functional, accent and semantic colors and state that actual color data comes from Figma design data; they publish no hex values in text, so none of the values above are cited to them. The captured news-card panels have a warm greige background that was not among the measured background colors and is therefore not tokenized.

## Typography

Noto Sans JP (variable, weights 100 to 900) is the only loaded family, with a fallback chain of -apple-system, BlinkMacSystemFont, Segoe UI, Hiragino Kaku Gothic ProN, BIZ UDPGothic, Meiryo and sans-serif. Section headings ({typography.display}) are 28px at weight 700 on 42px line height with 0.28px letter spacing; the mobile heading ({typography.display-mobile}) is 22px on 33px with 0.44px spacing. Body and link text ({typography.subheading}) is 17px at 400 on 28.9px line height with 0.34px spacing. Navigation labels ({typography.nav}) are 14px at weight 800 on 14px line height.

The line height of 150 to 175 percent for general web content and the 1 percent and 2 percent letter-spacing steps match what the Digital Agency design-system typography page (https://design.digital.go.jp/dads/foundations/typography/) documents for Noto Sans JP, which that page says is used for standard text under the SIL Open Font License. Font substitutes are not needed: Noto Sans JP is open source, and the stack falls back to Hiragino Kaku Gothic ProN or Meiryo on Apple and Windows systems.

## Layout

The page is a single column of left-aligned section headings with content that fills the viewport width inside side margins. The header height is set by the variable --header-block-size: 4.5rem. Topic cards use two layouts: a two-up row of large cards and a three-up row of smaller cards, each with a top image area, a link text block, and an icon in the lower right corner. News rows are full-width stacked boxes with a 24px radius. Spacing values measured include {spacing.s3} (8px), {spacing.s4} (12px), {spacing.s6} (16px), {spacing.s7} (24px), {spacing.s8} (32px) and {spacing.s9} (40px), with nav links padded 8px 16px.

Vertical rhythm is open: headings sit well above their lists, and cards are separated by generous gaps. The density is moderate; the text is long, but each unit sits in its own bordered box.

## Elevation & Depth

There is no shadow. All Tailwind shadow variables are set to "0 0 #0000". Separation comes only from the 1px {colors.hairline} outlines, from the translucent header and from color contrast between photographs and the white page. Interactive state is communicated by underlines and icon affordances rather than by elevation.

## Shapes

Cards and list rows are rounded outline boxes. The nav pill and the current-page pill use {rounded.pill} (9999px), the button-like link uses {rounded.sm} (16px), and cards and rows use {rounded.md} (24px). A {rounded.xs} (4px) value is also measured on small controls. The circled arrow icons repeat the round motif at the end of each row.

## Components

**button-secondary** is the outlined link-button style: {colors.canvas} fill, {colors.ink} text at 17px, 16px radius, 58px height and a {colors.hairline} 1px border (measured on "一般競争入札情報"). **link** is {colors.primary} 17px text with an underline. **nav** is a {colors.nav-bg} bar with {colors.ink} text; **nav-link** is a 14px weight-800 pill with 8px 16px padding, and the current page ("ホーム") is drawn as an outlined pill. **card** is a {colors.canvas} box with a 24px radius and a {colors.hairline} border, containing an image or text panel on top and a link paragraph below with a small circled arrow (or an external-link glyph for outbound pages). **footer** text is {colors.ink}.

No primary filled button was found on the page; the generated tokens therefore do not define a button-primary.

## Design System Architecture

The Digital Agency publishes its own design system, "デジタル庁デザインシステム" (beta, at https://design.digital.go.jp, which showed version 2.18.0 when opened). The page says it provides styling, UI components, and guidelines for usability and accessibility, with Figma data, GitHub and Storybook code snippets (HTML and React) and graphics. It is a real, official source. Whether this home page is built from it was not confirmed: the home page's served HTML uses its own class names (for example header, header__inner, header-logo__image) and a few Tailwind-style variables (--tw-ring-*, --header-block-size), with no links or packages that name the design system. Because of that, only the documented typography is mentioned as a matching reference; no token values are taken from the design system. The de-facto system here is a small set of BEM-style component classes with Tailwind utilities.

## Do's and Don'ts

- Do keep text at {colors.ink} on {colors.canvas} and use {colors.primary} only for links.
- Do underline all links, as every link on the page is underlined.
- Do use outlined, rounded boxes for cards and news rows with a visible circled arrow.
- Do set Japanese text in Noto Sans JP with 150 percent or greater line height.
- Don't add shadows or gradient fills; the page is flat.
- Don't introduce additional accent colors; the page has just one.
- Don't remove the date and category labels from news rows.

## Responsive Behavior

A mobile heading size of 22px (versus 28px) with 0.44px letter spacing was measured. Other breakpoints, the collapse of the header controls, and the stacking of the topic cards were not measured, so they are not described as fact here. The "すべてのメニュー" (All menu) control in the header suggests a menu pattern, but its behavior on small screens was not tested.

## Iteration Guide

1. Start with white canvas, {colors.ink} text, and Noto Sans JP 17px body at generous line height.
2. Use headings at 28px bold, left aligned, with plain section names.
3. Use {colors.primary} for underlined links only.
4. Build lists from 1px black rounded boxes at {rounded.md}, with category, date and a circled arrow.
5. Add images only as news-card photographs and keep everything else flat and shadowless.
