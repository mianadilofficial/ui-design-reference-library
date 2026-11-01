---
version: alpha
name: "Square"
category: "Product & SaaS"
description: "Square (squareup.com/us/en), the payments and point-of-sale platform from Block, Inc.: Exact Block serif display at 81px with -2.916px tracking, Cash Sans 14px body, Square Sans Text 16px navigation, #006aff blue actions, black footer and #f7f6f5 product tiles."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#006aff"
  surface-2: "#f7f6f5"
  ink-3: "#707070"
  ink-4: "#bbbbbb"
  ink-6: "#999999"
  hairline: "#cccccc"
  nav-bg: "#f2f2f2cc"
  nav-text: "#1a1a1a"
typography:
  display:
    fontFamily: "\"Exact Block\", Georgia, \"Times New Roman\", \"Noto Sans JP\", \"Hiragino Sans\", \"ヒラギノ角ゴ Pro W3\", メイリオ, Meiryo, \"ＭＳ Ｐゴシック\", serif"
    fontSize: 81px
    fontWeight: 400
    lineHeight: 81px
    letterSpacing: "-2.916px"
  display-mobile:
    fontFamily: "\"Exact Block\", Georgia, \"Times New Roman\", \"Noto Sans JP\", \"Hiragino Sans\", \"ヒラギノ角ゴ Pro W3\", メイリオ, Meiryo, \"ＭＳ Ｐゴシック\", serif"
    fontSize: 56px
    fontWeight: 400
    lineHeight: 56px
    letterSpacing: "-2.24px"
  heading:
    fontFamily: "\"Exact Block\", Georgia, \"Times New Roman\", \"Noto Sans JP\", \"Hiragino Sans\", \"ヒラギノ角ゴ Pro W3\", メイリオ, Meiryo, \"ＭＳ Ｐゴシック\", serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 45px
    letterSpacing: "-0.8px"
  body:
    fontFamily: "\"Cash Sans\", \"Helvetica Neue\", Helvetica, Arial, \"Noto Sans JP\", \"Hiragino Sans\", \"ヒラギノ角ゴ Pro W3\", メイリオ, Meiryo, \"ＭＳ Ｐゴシック\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: 0.28px
  nav:
    fontFamily: "\"Square Sans Text VF\", \"Square Sans Text\", Helvetica, Arial, \"Hiragino Sans\", \"ヒラギノ角ゴ Pro W3\", メイリオ, Meiryo, \"ＭＳ Ｐゴシック\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  input:
    fontFamily: "\"Square Sans Text VF\", \"Square Sans Text\", Helvetica, Arial, \"Hiragino Sans\", \"ヒラギノ角ゴ Pro W3\", メイリオ, Meiryo, \"ＭＳ Ｐゴシック\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: 0.14px
rounded:
  xs: 4px
  sm: 5px
  md: 6px
  lg: 10px
  xl: 12px
  2xl: 20px
  3xl: 50px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 18px
  s7: 20px
  s8: 21px
  s9: 22px
  s10: 30px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.3xl}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.nav-text}"
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 10px
    borderColor: "{colors.primary}"
  text-input:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.lg}"
    padding: 12px 16px
    height: 45px
    boxShadow: rgb(112, 112, 112) 0px 0px 0px 1px inset
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-3}"
---

# Square

The measured page is `https://squareup.com/us/en` (the queued `www.squareup.com` redirects there), titled "Power your entire business | Square", English (`en-US`), 9,185px tall, 948 visible elements. The legal line in the footer reads "Block, Inc. is a financial services platform and ..." (the paragraph begins with a footnote marker), so Square is presented as a Block, Inc. product. The home page leads with a full-bleed video-like hero photograph of a shop-owner on a street, white serif headline "Local legend or global icon. Make it big on your block.", and two pill buttons, "Get started" (white) and "Contact sales" (blue).

## Overview

The look is editorial rather than fintech-generic. Large serif headlines with tight negative tracking sit over photography; between them is a field of rounded-square photo tiles and hand-drawn black-and-white illustrations (a produce basket, an OPEN sign, a smiling bag, a THANK YOU stack) laid out in a loose grid, with customer-brand names faded in the rows. The word marks of merchants appear in grey. The sections that follow are white and near-white (`#f7f6f5`) with product photography on soft grey tiles: a "HARDWARE" eyebrow, the heading "Smooth checkout, every time", the line "Choose from a range of sleek options for however you do business. All equally easy to use.", a "Shop deals" underlined link, and left/right arrows for the tile carousel. The footer is black with grey links.

Color areas measured: black `#000000` (weight 9,911, the hero and footer), `#00000040` (1,024, an overlay), `#f7f6f5` (928) and white (103). The capture shows the mid-page sections as white and cream, so the generated canvas is `#ffffff`.

## Colors

- `canvas` `#ffffff`; `surface-2` `#f7f6f5` is the product-tile and card ground (CSS `--color-gray-5`, `--color-neutral-900`).
- `ink` `#000000`: headlines on white; most-read text is `#ffffff` (3,348 characters) because the hero and footer are black.
- `primary` `#006aff`: Square blue; CSS `--color-blue-fill` and `--color-blue-text` are both `#006aff`; link text and the focus border `2px solid #006aff`. In dark mode the CSS declares `--color-blue-text-color-mode-dark: #4a95ff`.
- `ink-3` `#707070`, `ink-4` `#bbbbbb`, `ink-6` `#999999`: grey text steps (footer links `#707070`).
- `hairline` `#cccccc`: dividing lines and the secondary border (4 elements).
- `nav-bg` `#f2f2f2cc` with `nav-text` `#1a1a1a`: the translucent header bar.

The shipped CSS also declares `--color-green #0bb634`, `--color-gray-80 #333333`, `--color-gray-13 #e5e5e5` and `--color-blue-400 #4a95ff`; they are not in the measured elements of this page.

## Typography

Four families are loaded: Exact Block (400), Square Sans Display VF, Square Sans Text / Square Sans Text VF (400 to 700 variable), and Cash Sans (400, 500) with Cash Sans Mono (500). By characters, Cash Sans carries 3,059, Square Sans Text VF 1,409, Exact Block 315 and Cash Sans Mono 71.

- `display`: Exact Block 81px, weight 400, line-height 81px, -2.916px (-0.036em). `display-mobile` 56px, 56px line-height, -2.24px.
- `heading`: Exact Block 40px, line-height 45px, -0.8px.
- `body`: Cash Sans 14px, weight 400, line-height 21px, 0.28px tracking (the most-used size, 2,936 characters).
- `nav`: Square Sans Text VF 16px, weight 500, line-height 24px.
- `input`: Square Sans Text VF 14px, 21px line-height, 0.14px.

Uppercase eyebrow text (HARDWARE) is set at 14px with 1.4px tracking (71 characters). The font stacks name Japanese fallbacks (Noto Sans JP, Hiragino Sans, Meiryo) after the Latin faces, as the site ships a Japanese locale. Exact Block, Cash Sans and Square Sans are proprietary faces; the stylesheet's own fallbacks are Georgia / Times New Roman for display and Helvetica Neue / Helvetica / Arial for text.

## Layout

CSS declares breakpoints (`--breakpoint-small-min-width: 46.25rem`, `--breakpoint-width-large: 1280px`, `--breakpoint-width-extra-large: 1680px`), container widths (`--container-width-medium: 960px`, `large: 1200px`, `extra-large: 1400px`, `--container-max-width: 156rem`) and gutters (`--container-outer-gutter-base: 3rem`, `extra-large: 4rem`, `--container-gutter: 6rem`). Measured gaps: 20px (72 elements), 40px (36), 10px (27), 60px (15), 30px (7), 80px (5). Paddings: 20px (37), 10px (26), 18px (8), 40px (8), 120px (4). The header is 72px high. Hero content is centred; tile rows are evenly spaced with 90px thumbnails in the capture.

## Elevation & Depth

Two shadows measured: a hairline inset `rgb(112, 112, 112) 0px 0px 0px 1px inset` on the dark input, and `rgba(0, 0, 0, 0.15) 0px 4px 12px 0px, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px` on one floating element. The header uses a translucent `#f2f2f2cc` fill. Product tiles are separated by tone (`#f7f6f5` on white), not shadow.

## Shapes

Radii measured: `50px` (16 elements; pill links and tabs), `20px` (13; photo tiles), `4px` (10), `100%` (4), `5px` (2) and `10000px` (1; the mobile primary button). Tokens: `xs 4px`, `sm 5px`, `md 6px`, `lg 10px` (input), `xl 12px`, `2xl 20px`, `3xl 50px`, `pill 9999px`. CSS declares `--container-border-radius: 1rem`, `-base: 1.6rem`, `-medium: 2.4rem`, text-field radius `1rem` and the focus outline radius `5px`.

## Components

- **Pill buttons.** Hero "Get started" white with blue text; "Contact sales" blue `#006aff` with white 12px/500 text and padding `10px 20px`, height 38px (mobile pass; the desktop pass did not detect a CTA). Radius 10000px. CSS declares `--action-variant-button-size-regular-padding: 1rem 2rem` and `--action-variant-button-alt-border-color: #006aff`.
- **Link.** "Get started" in `#006aff`, 16px/500, radius 50px, 44px tall.
- **Skip link.** White, `2px solid #006aff`, radius 5px, padding 10px, 48px tall.
- **Input.** Black fill, white 14px text, radius 10px, padding `12px 16px`, height 45px, inset 1px grey ring.
- **Navigation.** Logo glyph (square-in-square), Business types, Products, Hardware, Pricing, What's new at left; Sign in, Support, search and cart icons at right; white text on the hero, hover swaps black and white (measured, hover opacity 0.7 on Sign in).
- **Footer.** Black, text `#707070`, 16px/500, line-height 28px; 1,164px tall.

## Design System Architecture

No public design-system site was found: the `/us/en/press` page opened lists only a logo image and no guidelines, colors or typefaces. The shipped stylesheet exposes the system through about 400 root custom properties: color scales (`--color-gray-05` to `--color-gray-100`, `--color-neutral-000` to `-900`, `--color-blue-*`), font roles (`--font-family-h1` to `h6`, `--font-family-display`, `-eyebrow`, `-body-small`, `-cash-sans-mono`), `--action-variant-*` button tokens, tab, tooltip and form-field tokens, and `-color-mode-dark` twins for dark mode.

## Do's and Don'ts

Do set display lines in Exact Block with negative tracking, white on photography. Do use `#006aff` for the single primary action and pill shapes for buttons. Do pair hand-drawn black-and-white illustration with rounded 20px photo tiles. Do keep product tiles on `#f7f6f5`.

Don't use more than one saturated color; blue is the only chromatic accent measured. Don't use drop shadows for cards. Don't set body copy above 16px; the page's text is 12 to 16px. Don't set Exact Block in bold; only weight 400 is loaded.

## Responsive Behavior

Mobile pass: h1 56px/56px with -2.24px (81px on desktop); h2 32px/36px (40px); body 12px/18px with 0.24px (14px); primary button "Contact sales" 12px/500, `10px 20px` padding, radius 10000px, 38px tall; header still 72px, containing "Open menu" and "Contact sales" entries in its text, which the desktop header does not list (Skip to Content, Square, Business types and Products are the desktop items). Mobile font sizes by characters: 12px (1,920), 16px (1,442), 14px (1,055), 32px (220), 56px (55). Column counts are not measured.

## Iteration Guide

1. Canvas white, ink black, one blue `#006aff`; black sections for hero and footer.
2. Exact Block for headings, Cash Sans 14px for body, Square Sans Text 16px/500 for navigation.
3. Pill buttons (radius 9999px), 20px photo tiles, 10px inputs.
4. Compose with photography plus line illustration.
5. Write short, plain-spoken copy such as "Smooth checkout, every time", and keep eyebrow labels uppercase.
6. Gate: `node web/scripts/verify-designs.mjs --slug=square`.
