---
version: alpha
name: "TrueMoney (ทรูมันนี่)"
category: "Thai Brands"
description: "TrueMoney Thailand home page: white canvas (#ffffff) with navy ink (#0e162c), a single orange accent (#ff5a00) used for pill-shaped outlined buttons (9999px radius, 48px high), peach cards (#ffede2, 24px radius) and the graphikth Thai/Latin typeface at 400 and 600 weights."
colors:
  canvas: "#ffffff"
  ink: "#0e162c"
  primary: "#ffffff"
  on-primary: "#ff5a00"
  surface-2: "#f4f4f4"
  surface-3: "#cccccc"
  ink-4: "#030303"
  card-bg: "#ffede2"
  footer-bg: "#f6f6f9"
typography:
  display:
    fontFamily: graphikth
    fontSize: 40px
    fontWeight: 600
    lineHeight: 68px
  heading:
    fontFamily: graphikth
    fontSize: 98px
    fontWeight: 600
    lineHeight: 147px
  subheading:
    fontFamily: graphikth
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
  body:
    fontFamily: graphikth
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: graphikth
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
  link:
    fontFamily: graphikth
    fontSize: 21px
    fontWeight: 600
    lineHeight: 31.5px
  button-secondary:
    fontFamily: graphikth
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
rounded:
  xs: 12px
  sm: 16px
  md: 21px
  lg: 24px
  xl: 60px
  pill: 9999px
spacing:
  s1: 7px
  s2: 8px
  s3: 10px
  s4: 14px
  s5: 16px
  s6: 28px
  s7: 30px
  s8: 32px
  s9: 50px
  s10: 70px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 14px
    height: 48px
    borderColor: "{colors.on-primary}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 0px 14px
    height: 48px
    borderColor: "{colors.on-primary}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
    padding: 7px 28px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 14px 7px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink}"
    padding: 0px 16px
---

## Overview

TrueMoney's Thai home page (https://www.truemoney.com/, document language `th`, title "ทรูมันนี่ จ่ายง่ายได้ทุกที่") presents a payments app as a friendly, orange-lit consumer product. The first screen is a full-bleed orange hero carrying a three-dimensional red, orange and yellow "W" sculpture whose compartments contain small illustrated scenes of people paying, scanning and transferring. Over it sits the white word "ทรูมันนี่" (98px, weight 600, line height 147px) with the tagline "จ่ายง่ายได้ทุกที่" and a white pill button labelled "ดาวน์โหลดแอป". Below the hero the page returns to a white canvas, where the h1 "แอปเดียวครบทุกการใช้จ่าย" (40px, weight 600, line height 68px, color #0e162c) introduces the four verbs "แตะ สแกน โอน ผูก" as four equal peach cards.

The extraction measured 315 visible elements on a 4,220px-tall page at 1,280px width. A single font family, graphikth, carries 100% of the measured characters (1,808 of 1,808), at two weights: 400 (1,579 characters) and 600 (229 characters). There is no third weight and no secondary typeface, which gives the page a calm, uniform voice even though the imagery is loud.

The brand's character, as measured and visible in the capture: orange is the only chromatic UI color, navy is the only text color of any volume, and everything else is neutral white and pale grey. Buttons are always pills with an orange outline and orange label on white, never a solid orange fill; the orange fills live in photography, hero art and the peach card tint.

Note on the capture: a cookie-consent card with a button labelled "ยินยอม" overlays the hero at the time of capture. It is a consent control, not brand UI, and its blue link color (#118df5) has been left out of the tokens.

## Colors

All colors below are measured in `web/data/extracted/truemoney.json` and appear in the frontmatter.

- **canvas `#ffffff`** is the dominant page background (by area weight 11,573, far above the next color) and the header background.
- **ink `#0e162c`** is the most-read text color: 1,609 characters, against 82 for orange and 62 for white. It is a dark navy, not black, and also the `--primary_color` root variable shipped in the site's stylesheet.
- **on-primary `#ff5a00`** is the brand orange. It is the label and border color of the measured primary and secondary buttons, the color of the "ดาวน์โหลดแอป" link, the nav hover color (`--menu_hover_first_color`) and the text of 82 characters.
- **primary `#ffffff`** is the measured fill of the primary button; the extractor reports the CTA as a white pill with an orange label. The token keeps that measured role rather than promoting orange to a fill.
- **card-bg `#ffede2`** is the peach tint of the four feature cards. A second peach, #ffe9dd, appears among the background areas (weight 538) but is not tokenized.
- **footer-bg `#f6f6f9`** is the footer and dropdown-menu background (the stylesheet's `--menu_sub_bg_color` is also #f6f6f9).
- **surface-2 `#f4f4f4`** and **surface-3 `#cccccc`** are neutral background areas; the grey #cccccc is the large rounded placeholder block visible below the h1 in the capture, where a video or embed had not rendered.
- **ink-4 `#030303`** is a near-black text color used on 33 characters.

Hover behavior measured on three elements: the cookie button "ยินยอม" fills from #ffffff to rgb(255, 198, 130); the "ดาวน์โหลดแอป" link changes text and border from #ff5a00 to #0e162c; the top nav item "จ่าย" changes text from #0e162c to #ff5a00 and gains an orange border. No other hover states were measured.

## Typography

The only family is **graphikth**, loaded at weights 400 and 600 (plus an icon font, awb-icons, and icomoonCustom, which are not text faces). Because Thai script is present, no fallback families were measured and none are documented here.

| Role | Size / line height | Weight | Where |
|---|---|---|---|
| display (h1) | 40px / 68px | 600 | "แอปเดียวครบทุกการใช้จ่าย" |
| heading (h2) | 98px / 147px | 600 | white hero word "ทรูมันนี่" |
| subheading (h3) | 24px / 36px | 400 | "แตะ สแกน โอน ผูก จ่ายง่ายได้ทุกที่" |
| link | 21px / 31.5px | 600 | "ดาวน์โหลดแอป" |
| button-secondary | 16px / 24px | 600 | "มาทำความรู้จักกัน" |
| button | 14px / 21px | 600 | "เปิดใช้แตะจ่าย" |
| body | 14px / 21px | 400 | descriptions, nav |

The by-character size ranking is 14px (1,028 characters), 12px (437), 17.5px (83), 16px (72), 40px (44), 24px (34), 18px (33) and 49px (17). The 17.5px size is the footer text; 18px at weight 600 is the card text. Line height is consistently 1.5 times the font size for body, link and subheading text (21/14, 31.5/21, 36/24), and 1.7 for the h1 (68/40) and 1.5 for the hero word (147/98). Letter spacing is `normal` everywhere; no letter-spacing values were measured.

The mobile pass of the extraction was answered by a bot-protection page ("Sorry, you have been blocked"), so no mobile type sizes for the real site were recorded and the mobile typography token has been dropped.

No font substitute is documented: graphikth is the font the site itself loads, and no official source for it was opened.

## Layout

The page is a single centered column on a 1,280px desktop viewport. The stylesheet exposes `--site_width: 1140px` as a root variable; the h1 and h3 elements are measured at 1,100px wide, which is consistent with a 1,140px container minus padding. The header is 173px high and 1,280px wide on a white background, holding the logo on one row and the nine-item primary navigation on the next (labels visible in the capture: จ่าย, โอนและรับ, เพย์ เน็กซ์, บริการทางการเงิน, บัตร Mastercard, TrueMoney Rewards, TrueMoney for Business, ช่วยเหลือ, ความปลอดภัย, เกี่ยวกับเรา).

Spacing values measured as gaps are 7px and 14px; paddings are led by 14px (26 uses), 7px (5), 16px (4), 8px (4), 30px (2), 50px (2), 128px (1) and 80px (1). The spacing tokens s1 to s10 (7, 8, 10, 14, 16, 28, 30, 32, 50, 70px) come from these measurements. The four feature cards are 258px wide and 171px high, set in a single row.

Section rhythm in the capture: orange hero, white intro block with an orange ribbon graphic and a mascot-like character at the right edge, a grey rounded media placeholder, the four peach cards, then a split section with a photograph and the large orange Thai headline "ท่าไหนๆ" over "ก็แตะจ่ายสบาย" with an outlined pill button. The footer is 380px high on #f6f6f9.

## Elevation & Depth

Elevation is almost absent. Only two box shadows were measured on the whole page: `rgba(0, 0, 0, 0.14) 0px 10px 50px -2px` (a large, soft, negative-spread shadow) and `rgba(35, 57, 120, 0.15) 0px 0px 4px 0px, rgba(35, 57, 120, 0.15) 0px 4px 6px 0px` (a two-layer small shadow). The cards, buttons and header carry no box-shadow in the extraction. Depth in this design comes from photography and 3D rendering (the hero sculpture, the glossy orange curves), not from interface shadows. The stylesheet's WordPress shadow presets (such as `12px 12px 50px rgba(0, 0, 0, 0.4)`) are framework variables, not measured on rendered elements.

## Shapes

The measured radius vocabulary is large and soft: 24px (6 elements), 50% (6, circles), 21px (4), 12px (4), 999px (2, pills), 16px (1), 60px (1) and a top-only `24px 24px 0px 0px` (1). The rounded tokens are xs 12px, sm 16px, md 21px, lg 24px, xl 60px and pill 9999px.

- Buttons (primary and secondary) are pills: 48px high, horizontal padding 14px, border radius 999px, 1px solid #ff5a00.
- The "ดาวน์โหลดแอป" link is 44px high with 7px 28px padding and a 21px radius.
- The four feature cards use the 24px radius.
- Circles (50%) are used for icon and avatar shapes.

## Components

**Primary button** (`button-primary`): white fill (#ffffff), orange label (#ff5a00), 1px orange border, 9999px radius, 14px/600 type, 48px tall, 173px wide for the label "เปิดใช้แตะจ่าย".

**Secondary button** (`button-secondary`): the same white pill and orange outline with 16px/600 type, label "มาทำความรู้จักกัน".

**Link** (`link`): orange 21px/600 text, 44px high, with a 21px radius; on hover the text and border turn navy #0e162c.

**Navigation** (`nav`, `nav-link`): white header, navy 14px/400 labels; hover turns a label orange.

**Card** (`card`): peach #ffede2 background, navy text, 24px radius, 14px 7px padding; each card has a pictogram, a 18px/600 verb (แตะ, สแกน, โอน, ผูก) and a short description.

**Footer** (`footer`): #f6f6f9 background, navy 17.5px text, 0px 16px padding, columns beginning with "บริการจ่าย" and links such as "จ่ายที่ 7-11" and "จ่ายบิลทรู".

No input fields were found on the page (the extraction reports no input role).

## Design System Architecture

No public design system for TrueMoney was found: the official page https://www.truemoney.com/ returned HTTP 403 Forbidden to WebFetch, so no brand guideline, press kit or design-token page could be opened, and none is linked in the measured data. The de-facto system is visible in the shipped CSS variables: the site's root variables include WordPress block-editor presets (`--wp--preset--*`) and Avada/Fusion theme variables (`--awb-*`, `--primary_color: #0e162c`, `--site_width: 1140px`, `--menu_hover_first_color: #ff5a00`, `--form_border_color: #e2e2e2`), which shows the page is built on a WordPress theme with the brand colors set in its options rather than from a published token package. The h1 root variable `--h1_typography-font-size` is 24px, which matches the measured mobile-sized h1 of the theme options rather than the 40px desktop h1; the desktop 40px value is the one used in the tokens.

## Do's and Don'ts

- Do use graphikth at weights 400 and 600 only.
- Do keep body copy in navy #0e162c on white; use orange #ff5a00 only for actions, hover states and display headlines over photography.
- Do make buttons pills with a 1px orange outline on white.
- Do round cards at 24px and tint them #ffede2.
- Don't add shadows to cards or buttons; only two shadows were measured and neither is on those components.
- Don't use the blue #118df5 of the cookie-consent link as a brand color.
- Don't treat the grey #cccccc block as a design surface: it is a media placeholder.
- Don't present the white pill as a filled orange button; the measured CTA has a white fill.

## Responsive Behavior

Not measured. The mobile pass of the extraction at 390px returned a security block page ("Sorry, you have been blocked") instead of the TrueMoney site, so no mobile layout, type size or breakpoint was recorded. The only responsive evidence in the data is the stylesheet variable `--h1_typography-font-size: 24px`, whose context was not measured. No hamburger, menu or column behavior is documented here.

## Iteration Guide

1. Start from the frontmatter tokens: canvas #ffffff, ink #0e162c, orange #ff5a00 for labels and outlines.
2. Build the hero as an orange full-bleed image with the 98px/600 white word and a white pill button; do not draw it with flat color.
3. Build the four feature cards at 258px by 171px, #ffede2, 24px radius.
4. Use 48px-high pills with 14px side padding for all outlined buttons.
5. Re-measure the mobile layout before documenting it; the current measurement was blocked.
6. Run `node web/scripts/verify-designs.mjs --slug=truemoney` after any token edit.
