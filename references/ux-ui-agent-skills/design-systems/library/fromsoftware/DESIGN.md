---
version: alpha
name: "FromSoftware"
category: "Gaming"
description: "FromSoftware (fromsoftware.jp, フロム・ソフトウェア) is the Japanese game developer's corporate site: near-black #0f0f0f with #151515 and #222222 panels, white and grey #a6a6a6 text, Archivo for Latin labels and a Noto Sans JP system stack for Japanese, edge-to-edge key art, 4px corners and grey #838382 date chips."
colors:
  canvas: "#0f0f0f"
  ink: "#ffffff"
  primary: "#838382"
  border-orange: "#ef7726"
  css-red: "#ff0033"
  css-blue: "#1b7fcccc"
  surface-raised: "#151515"
  surface-chip: "#222222"
  ink-secondary: "#a6a6a6"
  ink-dim: "#535353"
  ink-footer: "#646464"
  hairline: "#aaaaaa"
typography:
  display-mobile:
    fontFamily: Archivo, sans-serif
    fontSize: 20.67px
    fontWeight: 400
    lineHeight: 22.4px
  body:
    fontFamily: Archivo, sans-serif
    fontSize: 38.4px
    fontWeight: 400
    lineHeight: 22.4px
  link:
    fontFamily: "-apple-system, \"system-ui\", \"Helvetica Neue\", \"Noto Sans JP\", \"ヒラギノ角ゴ ProN W3\", \"Hiragino Kaku Gothic ProN\", Arial, Meiryo, sans-serif"
    fontSize: 35.84px
    fontWeight: 400
    lineHeight: 64.512px
    letterSpacing: 2.5088px
rounded:
  xs: 4px
spacing:
  s1: 8.96px
  s2: 14px
  s3: 24.32px
  s4: 24.73px
  s5: 35.84px
  s6: 56px
  s7: 64px
  s8: 134.4px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 24.32px 0px 0px
  nav:
    backgroundColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-footer}"
    padding: 134.4px 0px 153.6px
---

# FromSoftware

Measured from https://www.fromsoftware.jp/jp/ (the queued URL https://www.fromsoftware.jp redirects there; page title "FromSoftware | フロム・ソフトウェア", lang ja). This is the company's own Japanese-language home page, so it is documented under the name of the measured site. The scrollHeight is 5813px. The capture shows a single-column layout with the wordmark and a menu icon at the top, so the figures below are the sizes the extractor recorded for that layout; the extractor's own mobile pass recorded smaller sizes (see Responsive Behavior).

## Overview

The first screen shows the white "FROM SOFTWARE" wordmark at the left of a dark header and a three-line menu icon at the right. Below, full-width key art for "ELDEN RING NIGHTREIGN" (a cloaked warrior with a staff under a purple-blue storm sky) carries a dark outlined "MORE DETAIL" button. A strip of further key art follows (ARMORED CORE VI FIRES OF RUBICON, and others cut off at the edges). The first news row shows a grey date chip "2026.08.28", an outlined "NEWS" label and the headline 『ELDEN RING Tarnished Edition』本日発売 ("released today").

The opened page lists these title sections: ELDEN RING NIGHTREIGN, The Duskbloods, ARMORED CORE VI FIRES OF RUBICON, ELDEN RING, SEKIRO: SHADOWS DIE TWICE, DARK SOULS SERIES, Bloodborne, and a company block labelled 会社概要 / 沿革 / アクセス. Navigation items: COMPANY, PRODUCTS, NEWS, PRESS RELEASE, RECRUIT and SUPPORT; footer items: ACCESS, PRIVACY POLICY, SITE POLICY, CUSTOMER HARASSMENT POLICY, SITEMAP, SNS and a language link 日本語. Status labels read 発売中 (on sale) and 2026年発売予定 (planned for 2026). The site has no explicit call-to-action buttons beyond official-site links; the design is a catalog of game titles in which the game art supplies all the brand color.

## Colors

Measured background areas: #0f0f0f (weight 7440), #151515 (1024), #0000004d (262, a translucent scrim), #222222 (115), #838382 (16) and #cfcfcf (2). Text colors by characters: #ffffff (80), #a6a6a6 (64), #535353 (51), #151515 (10), #838382 (4) and #646464 (3). Border colors measured: #aaaaaa (6), #ffffff (2), #838382 (1) and #ef7726 (1). The stylesheet also contains #ff0033 (29 declarations) and #1b7fcccc (36), plus many translucent blacks and whites (#000000cc, #00000099, #ffffff33, #ffffff1a, #ffffffb3). The root variables are Swiper carousel defaults and are not brand colors.

- **canvas #0f0f0f**: the page and footer ground; **surface-raised #151515** and **surface-chip #222222** are slightly lighter panels.
- **ink #ffffff**; **ink-secondary #a6a6a6**; **ink-dim #535353** (the copyright line); **ink-footer #646464** (footer links).
- **primary #838382**: the fill of the date chip "2026.08.28"; there is no filled button, so this grey chip is the only measured solid accent.
- **hairline #aaaaaa**: the 1px outline around the "NEWS" label and the outlined buttons.
- **border-orange #ef7726**, **css-red #ff0033** and **css-blue #1b7fcccc**: present in measured borders or the stylesheet; their roles are not measured on this page.

The key art is dark blue, purple and grey; the interface deliberately avoids competing color.

## Typography

Fonts loaded: Archivo (400 and 800) and Noto Sans JP (400); the Japanese stack also names -apple-system, system-ui, Helvetica Neue, Hiragino Kaku Gothic ProN (ヒラギノ角ゴ ProN W3), Arial and Meiryo. Archivo and Noto Sans JP are open-source Google fonts. By characters: Archivo 111, the system stack 101.

- **body**: Archivo 38.4px, weight 400, line-height 22.4px: the copyright line "© 1994-2021 FromSoftware, Inc. All rights reserved." at the measured scale.
- **link**: the Japanese stack, 35.84px, weight 400, line-height 64.512px, letter-spacing 2.5088px (7%): news headlines.
- **display-mobile**: Archivo 20.67px, weight 400, line-height 22.4px: the "COMPANY" menu label on the mobile pass.

Size frequencies: 35.84px (112 characters), 38.4px (51), 67.84px (46) and 46.08px (3, the footer, with letter-spacing 9.216px). Letter-spacing pairs measured: 35.84px/2.5088px (34 uses) and 46.08px/9.216px (3). No h1 or h2 was detected, so there is no display heading token measured on this page; the game titles are images of logotypes.

## Layout

Cards of key art run edge to edge in a vertical sequence, with a horizontal strip of titles that continues past the viewport edges. Paddings measured: 8.96px (3 uses), 24.7296px (2), 35.84px, 24.32px, 134.4px, 56px and 64px (1 each). The footer has padding 134.4px 0px 153.6px. News headlines have 24.32px of top padding and are 769px wide, 89px high. The spacing tokens are 8.96px, 14px, 24.32px, 24.73px, 35.84px, 56px, 64px and 134.4px.

## Elevation & Depth

No box shadows were measured. A translucent black scrim (#0000004d) overlays imagery and the stylesheet contains many black translucent layers (#000000cc, #00000099) for text legibility over art. Panels differ from the ground by a few percent of lightness (#0f0f0f, #151515, #222222).

## Shapes

Radius 4px was measured on three elements (the chips and label), everything else is square. The "MORE DETAIL" button in the capture is a rectangle with a thin light outline over the key art and a letter-spaced uppercase label; its radius and size were not measured as a role.

## Components

- **date chip**: grey fill #838382 with dark text (#151515), radius 4px, e.g. "2026.08.28".
- **news label**: an outlined rectangle with a 1px #aaaaaa border and the uppercase bold text "NEWS".
- **news headline link**: white, 35.84px in the measured layout with 2.5088px tracking.
- **header**: the wordmark and a three-line menu icon on #0f0f0f, with a background image URL declared on the header element (bg_nr.jpg).
- **footer**: #0f0f0f, text #646464, 46.08px with 9.216px tracking on the measured language link.
- **title strip**: full-width key art tiles of the game series.

## Design System Architecture

No public design system, brand guideline or press kit is linked on the opened page; the PRESS RELEASE link leads to a release list. The shipped CSS shows no custom-property system other than the Swiper defaults (`--swiper-theme-color`, `--swiper-navigation-size` 44px); the layout is built from static class styles. Source page: https://www.fromsoftware.jp/jp/.

## Do's and Don'ts

- Do keep the ground near-black #0f0f0f and let game key art provide the color.
- Do set Japanese headlines with 7% letter-spacing and Latin labels in Archivo.
- Do mark dates with a grey #838382 chip and categories with a 1px #aaaaaa outline.
- Do keep corners at 4px or square.
- Don't add brand-color fills to the interface; the page has none.
- Don't use the Swiper default #007aff.
- Don't treat the scrim or background image URL as tokens.

## Responsive Behavior

The extractor's mobile pass recorded: the "COMPANY" menu link at 20.67px in Archivo with a 1px solid #aaaaaa border, 87px high and 240px wide; the copyright line at 11.7px; and size frequencies 10.92px (112 characters), 11.7px (51), 20.67px (46) and 14.04px (3). The header on this pass kept the background image URL and fill #0f0f0f. Breakpoints and column changes were not measured.

## Iteration Guide

1. Canvas #0f0f0f, panels #151515 and #222222, text #ffffff and #a6a6a6.
2. Show each game as a full-width piece of key art with its logotype.
3. Add a grey #838382 date chip and an outlined 1px #aaaaaa category label to each news row.
4. Set Japanese headline text with 7% tracking and 22.4px line-heights at body size.
5. Use Archivo for Latin navigation labels.
6. Measure any new page with the extractor before adding tokens.

## Content Notes

The opened page also carries recruiting links in Japanese: 採用トップ, 新卒採用, キャリア採用, 障がい者採用, アルバイト, 会社紹介 and 社員インタビュー. Titles are shown by series with a status label (発売中 or 2026年発売予定) and an official-site link for Armored Core and Dark Souls. Microcopy mixes English uppercase navigation (COMPANY, PRODUCTS, NEWS, PRESS RELEASE, RECRUIT, SUPPORT) with Japanese headlines; keep that split when adding pages, and keep the copyright line in Archivo at the lowest-contrast grey #535353.
