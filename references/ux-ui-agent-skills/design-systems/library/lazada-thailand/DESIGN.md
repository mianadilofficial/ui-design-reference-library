---
version: alpha
name: Lazada Thailand
category: "Thai Brands"
description: 'Lazada Thailand marketplace home page measured live: light #f5f5f5 canvas with white modules, Lazada orange #f57224 for actions, NotoSans-Regular text at 12px to 22px, small 2px to 6px radii and dense product grids.'
colors:
  canvas: '#f5f5f5'
  page-largest: '#ffffff'
  ink: '#000000'
  primary: '#f57224'
  surface-input: '#eff0f5'
  surface-text-band: '#f4f4f6'
  ink-muted: '#888888'
  ink-3: '#606060'
  ink-input: '#212121'
  ink-5: '#9e9e9e'
  card-text: '#2e3346'
typography:
  display:
    fontFamily: NotoSans-Regular, -apple-system, "system-ui", Roboto, "Helvetica Neue", Helvetica, Tahoma, Arial, "PingFang SC", "Microsoft YaHei", sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 38px
  subheading:
    fontFamily: NotoSans-Regular, -apple-system, "system-ui", Roboto, "Helvetica Neue", Helvetica, Tahoma, Arial, "PingFang SC", "Microsoft YaHei", sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 35px
  body:
    fontFamily: NotoSans-Regular, -apple-system, "system-ui", Roboto, "Helvetica Neue", Helvetica, Tahoma, Arial, "PingFang SC", "Microsoft YaHei", sans-serif
    fontSize: 12px
    fontWeight: 200
    lineHeight: 14px
  link:
    fontFamily: NotoSans-Regular, -apple-system, "system-ui", Roboto, "Helvetica Neue", Helvetica, Tahoma, Arial, "PingFang SC", "Microsoft YaHei", sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 13.8px
  button-secondary:
    fontFamily: NotoSans-Regular, -apple-system, "system-ui", Roboto, "Helvetica Neue", Helvetica, Tahoma, Arial, "PingFang SC", "Microsoft YaHei", sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 35px
  input:
    fontFamily: Roboto-Regular, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
rounded:
  xs: 2px
  sm: 3px
  md: 6px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 13px
  s9: 15px
  s10: 16px
components:
  button-secondary:
    textColor: '{colors.primary}'
    typography: '{typography.button-secondary}'
    rounded: '{rounded.xs}'
    padding: 0px 10px
    height: 37px
    borderColor: '{colors.primary}'
  link:
    backgroundColor: '{colors.surface-input}'
    textColor: '{colors.ink}'
    typography: '{typography.link}'
  text-input:
    backgroundColor: '{colors.surface-input}'
    textColor: '{colors.ink-input}'
    typography: '{typography.input}'
    rounded: '{rounded.xs}'
    padding: 13px 19px
    height: 45px
  card:
    backgroundColor: '{colors.page-largest}'
    textColor: '{colors.card-text}'
    rounded: '{rounded.md}'
---

## Overview

Lazada Thailand is the Thai storefront of the Lazada e-commerce marketplace, and the measured page (`https://www.lazada.co.th/`) is a dense, bilingual (Thai and English) shopping home page. The opened page's title is "Lazada Thailand | ช้อปออนไลน์ สินค้าดี พร้อมดีลพิเศษทุกวัน!" and its long-form text frames the brand around "Effortless shopping" and the tagline "Go Where Your Heart Beats".

The capture shows, from the top: a promotional strip with campaign art and an app-download bar; a header with the orange-and-pink heart Lazada logo, a wide search field with an orange search button at its right end, a cart icon and a campaign icon; a large campaign carousel with an app QR-code card beside it; a row of four tiles (LazMall, Travel, Brand Wiki, Lazada Blog); and then repeated sections named "Flash Sale" (with a countdown in red boxes), "LazMall" (store cards with a "Shop More" link), "Categories" (an eight-column icon grid) and "Just For You" (a product grid with prices, discounts and star ratings). The footer carries Customer Care, Payment Methods, Delivery Services, Verified by and Follow Us blocks.

The voice is promotional and reassuring: flash sales with countdowns, vouchers, free shipping, authentic-products reassurance and, in the long article, security and hassle-free returns. Imagery is product photography on white cards plus colorful campaign art. A floating messaging control and a promotional campaign banner appear in the capture; both are transient and are not treated as brand UI.

## Colors

Values below are from `web/data/extracted/lazada-thailand.json`.

- **Canvas `#f5f5f5`**: the body background. The largest measured area is white `#ffffff` (token `page-largest`, weight 5421), which is the module and card surface.
- **Surface-input `#eff0f5`**: the second-largest area (weight 2750), the background of the search input and link blocks.
- **Surface-text-band `#f4f4f6`**: the background behind the SEO text block (weight 1902).
- **Ink `#000000`**: the most-read text color (4531 characters).
- **Ink-muted `#888888`**: the body-text role color (4260 characters), used on the long description text.
- **Ink-3 `#606060`**, **ink-input `#212121`**, **ink-5 `#9e9e9e`**: secondary text steps (509, 499 and 384 characters). The input text is `#212121`.
- **Card text `#2e3346`**: text color on module cards. The same value is published as `--iweb-text_black` in the site CSS variables.
- **Primary `#f57224`**: Lazada orange. It appears as the text color and border of the "SHOP ALL PRODUCTS" outlined button, as the fill of the search button at the end of the search field, and as `--iweb-old_brand_yellow_bg`.

The site CSS also declares a brand gradient (`--iweb-brand_gradient: #f06` ending at `--iweb-brand_gradient_end: #fa2c99`), `--iweb-color-primary-from: #ff933f`, `--iweb-colour_cb_lazglobal: #aa3cff`, `--iweb-star_fill_color: #ffc83c` for rating stars, `--iweb-text_success: #018434`, `--iweb-line_active: #1e71ff` and `--iweb-colour_fill_module01: #272833`. These are declared in CSS variables and are not separately tokenized in the frontmatter.

## Typography

One family dominates: **NotoSans-Regular** (11073 characters), with the stack `-apple-system, system-ui, Roboto, Helvetica Neue, Helvetica, Tahoma, Arial, PingFang SC, Microsoft YaHei, sans-serif`. **Roboto-Regular** (93 characters) is used for the search input. A `lazada` icon font is also loaded.

| Token | Size / line-height | Weight | Where |
|---|---|---|---|
| `display` | 22px / 38px | 400 | h1 role, section titles such as "Flash Sale" |
| `subheading` | 16px / 35px | 300 | h3 role, e.g. "Customer Care" |
| `body` | 12px / 14px | 200 | long description text |
| `link` | 12px / 13.8px | 400 | link role |
| `button-secondary` | 14px / 35px | 500 | outlined button |
| `input` | 14px / 14px | 400 | Roboto-Regular, search input |

By character count the sizes are 14px (5011), 12px (3536), 11px (1801), 16px (455), 18px (279) and 10px (53). Weights: 400 (5941), 200 (4500), 300 (574) and 500 (159). Letter-spacing was measured on one pair only: 18px with -0.56px (44 characters). The site declares font-size variables such as `--iweb-font-size-main: 14px`, `--iweb-font_size_regular04: 11px`, `--iweb-font_size_small: 10px`, `--iweb-font_size_medium: 20px`, `--iweb-font_size_large: 32px` and `--iweb-fontsize_content_larger: 16px`. Thai text uses the same Noto Sans stack; no separate Thai face was measured.

## Layout

The page is a centered column of white modules on the light-gray canvas, with each module carrying a title (22px) above a grid. The product grids in "Flash Sale", "LazMall", "Categories" and "Just For You" are multi-column rows of equal-width tiles, as visible in the capture. Page height measured 3971px.

Spacing tokens: 2px, 4px, 6px, 8px, 10px, 11px, 12px, 13px, 15px and 16px. The padding table: 4px (48 uses), 8px (36), 16px (16), 12px (9), 17px (8) and 24px (6). Gap: 12px (2 uses). The CSS variables define module gutters and margins such as `--iweb-gutter_module_top_regular: 24px`, `--iweb-margin_inside_module_bottom_thin: 12px`, `--iweb-gutter_module_right_medium: 30px` and `--iweb-padding_inside_module_horizontally_medium: 30px`. Density is high: small 12px text, compact cards and tight padding.

## Elevation & Depth

Depth is flat: white cards on a gray canvas with subtle shadows. Two shadows were measured: `rgba(0, 0, 0, 0.25) 0px 0px 4px 0px` (6 uses) and `rgb(0, 62, 82) 0px 2px 4px 0px` (1 use). Borders measured: `#f57224` (outlined button), `#1a9cb8` and `#e2e2e2`, one each. A scrim `--iweb-mask-bg-default: #00000099` is declared for overlays.

## Shapes

Radii measured: 50% (8 elements), 2px (5), 6px (4), 3px (1), and two partial radii, `0px 2px 2px 0px` (the search button, square at the field side) and `2px 2px 0px 0px`. Tokens: `xs: 2px`, `sm: 3px`, `md: 6px`, `pill: 9999px`. Buttons and inputs use 2px; cards use 6px; circular elements (50%) are icon badges and avatars. The CSS also declares `--iweb-radius-token-radius_regular: 12px` and `--iweb-input-border-radius-style: 6px`.

## Components

**Outlined button (`button-secondary`)**: transparent fill, orange `#f57224` text and 1px orange border, 14px weight 500, radius 2px, padding `0px 10px`, height 37px. Label: "SHOP ALL PRODUCTS".

**Search button**: orange `#f57224` fill with a `0px 2px 2px 0px` radius and 45px height, label "SEARCH" in the hover probe; its text and border changed from black to `#f36d00` on hover. No `button-primary` token is declared because the extractor detected no primary call to action.

**Text input (`text-input`)**: `#eff0f5` background, `#212121` text, Roboto-Regular 14px, radius 2px, padding `13px 19px`, height 45px.

**Card (`card`)**: white `#ffffff` background, `#2e3346` text, 6px radius.

**Link block (`link`)**: `#eff0f5` background, black text, 12px.

**Flash Sale countdown**: red boxes with white digits, visible in the capture; not measured as tokens.

## Design System Architecture

No public brand guideline or design system is linked from lazada.co.th: the opened page links to policy pages and a "Press & Media" footer link that was not opened, so no official source exists to cite beyond the site itself (https://www.lazada.co.th/). The shipped CSS carries a de-facto design system of 284 root custom properties with an `--iweb-` prefix and semantic names: colors (`--iweb-text_black`, `--iweb-text_gray_02: #858b9c`, `--iweb-text_gray_03: #c6cad2`, `--iweb-line_gray_01: #cbced5`, `--iweb-line_gray_02: #e3e7f1`), typography (`--iweb-fontsize_title_page_large: 32px`, `--iweb-fontsize_subtitle_module_medium: 16px`, `--iweb-fontsize_content_medium: 14px`), spacing (`--iweb-space_04: 18px`), radius and component tokens (`--iweb-btn-secondary-hover-bg: #ffe5f0`, `--iweb-select-border: #cbced5`). Sub-brand colors for LazGlobal, LazChoice and LazMall are declared (`--iweb-colour_cb_lazglobal: #aa3cff`, `--iweb-colour_cb_lazchoice: #c06`, `--iweb-colour_cb_lazmall_secondary: #0b0a16`).

## Do's and Don'ts

Do:
- Use orange `#f57224` for actions and the search button.
- Keep modules white `#ffffff` on a `#f5f5f5` canvas.
- Use NotoSans-Regular at 12px to 14px for dense listings.
- Use 2px radius for buttons and inputs, 6px for cards.
- Show prices and discounts prominently inside product cards.

Don't:
- Do not use heavy shadows; the measured shadows are 4px blurs.
- Do not use pill buttons for primary actions; the measured radius is 2px.
- Do not treat campaign banner colors or the floating chat control as brand tokens.
- Do not set text below 10px.

## Responsive Behavior

The 390px mobile pass recorded only the h1 and body roles, and both matched desktop: h1 22px / 38px and body 12px / 14px weight 200. Layout, navigation and grid behavior at mobile widths are not measured.

## Iteration Guide

1. Set `canvas` `#f5f5f5`, module surface `#ffffff`, `ink` `#000000`, `primary` `#f57224`.
2. Use NotoSans-Regular: 22px titles, 14px controls, 12px detail text.
3. Use 2px radius for buttons and fields; 6px for cards.
4. Use the measured spacing steps of 4px, 8px, 12px and 16px.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=lazada-thailand --url=https://www.lazada.co.th/ --force --no-motion` before changing any value, then `node web/scripts/verify-designs.mjs --slug=lazada-thailand`.
