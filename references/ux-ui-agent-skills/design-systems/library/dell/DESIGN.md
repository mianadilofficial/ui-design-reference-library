---
version: alpha
name: Dell
category: "Design Systems"
description: "Dell's homepage is a dark-navy retail canvas (#0a0e14) with white Roboto text, Dell blue (#0672cb) buttons with a 2px radius, near-square 2px white cards with a faint shadow, and a #f0f0f0 footer. The public Dell Design System (DDS v3) documents the same Roboto/blue/slate language as --dds-* tokens."
colors:
  canvas: "#0a0e14"
  ink: "#ffffff"
  primary: "#0672cb"
  on-primary: "#ffffff"
  surface-footer: "#f0f0f0"
  surface-slate: "#1d2c3b"
  ink-body-muted: "#636363"
  ink-black: "#000000"
  ink-dark-grey: "#444444"
  ink-near-black: "#0e0e0e"
  text-input-text: "#6e6e6e"
  text-input-border: "#b6b6b6"
  brand-hover: "#0063b8"
  brand-pressed: "#00468b"
  success: "#4f7d00"
  error: "#d0353f"
typography:
  heading:
    fontFamily: Roboto, "Cordia New", "Microsoft Sans Serif", Utsaah, "Devanagari MT", "Nirmala UI", Latha, InaiMathi, Gautami, "Telugu Sangam MN", Tunga, "Kannada Sangam MN", Kartika, "Malayalam Sangam MN", Shruti, "Gujarati MT", "Gujarati Sangam MN", Vrinda, "Bangla Sangam MN", "Meiryo UI", メイリオ, "MS UI Gothic Reg", "Hiragino Kaku Gothic Reg", "ヒラギノ角ゴ Pro W3 Reg", "Microsoft YaHei", 微软雅黑, "Hiragino Sans GB", "Microsoft JhengHei", 微軟正黑體, "Malgun Gothic", "맑은 고딕", Gulim, AppleGothic, "Apple LiGothic", "LiHei Pro", Osaka, STHeiti, 华文黑体, STXihei, 华文细黑, SimHei, 黑体, "Arial Unicode MS", Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  display:
    fontFamily: Roboto, sans-serif
    fontSize: 32px
    fontWeight: 300
    lineHeight: 40px
  body:
    fontFamily: Roboto, sans-serif
    fontSize: 12px
    fontWeight: 400
  button:
    fontFamily: Roboto, "Cordia New", "Microsoft Sans Serif", Utsaah, "Devanagari MT", "Nirmala UI", Latha, InaiMathi, Gautami, "Telugu Sangam MN", Tunga, "Kannada Sangam MN", Kartika, "Malayalam Sangam MN", Shruti, "Gujarati MT", "Gujarati Sangam MN", Vrinda, "Bangla Sangam MN", "Meiryo UI", メイリオ, "MS UI Gothic Reg", "Hiragino Kaku Gothic Reg", "ヒラギノ角ゴ Pro W3 Reg", "Microsoft YaHei", 微软雅黑, "Hiragino Sans GB", "Microsoft JhengHei", 微軟正黑體, "Malgun Gothic", "맑은 고딕", Gulim, AppleGothic, "Apple LiGothic", "LiHei Pro", Osaka, STHeiti, 华文黑体, STXihei, 华文细黑, SimHei, 黑体, "Arial Unicode MS", Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: Roboto, Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
  button-secondary:
    fontFamily: Roboto, "Cordia New", "Microsoft Sans Serif", Utsaah, "Devanagari MT", "Nirmala UI", Latha, InaiMathi, Gautami, "Telugu Sangam MN", Tunga, "Kannada Sangam MN", Kartika, "Malayalam Sangam MN", Shruti, "Gujarati MT", "Gujarati Sangam MN", Vrinda, "Bangla Sangam MN", "Meiryo UI", メイリオ, "MS UI Gothic Reg", "Hiragino Kaku Gothic Reg", "ヒラギノ角ゴ Pro W3 Reg", "Microsoft YaHei", 微软雅黑, "Hiragino Sans GB", "Microsoft JhengHei", 微軟正黑體, "Malgun Gothic", "맑은 고딕", Gulim, AppleGothic, "Apple LiGothic", "LiHei Pro", Osaka, STHeiti, 华文黑体, STXihei, 华文细黑, SimHei, 黑体, "Arial Unicode MS", Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  input:
    fontFamily: Roboto, Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 10px
  xl: 30px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 11px
  s9: 12px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 11px 19px
    height: 48px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-near-black}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 11px 19px
    height: 48px
    borderColor: "{colors.ink}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-body-muted}"
  text-input:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 5px 70px 5px 16px
    height: 32px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.xs}"
    padding: 12px
    boxShadow: rgba(0, 0, 0, 0.05) 0px 4px 10px 0px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-body-muted}"
---

# Dell

## Overview

The Dell homepage captured here is a retail-and-enterprise storefront drawn on a dark navy canvas (`colors.canvas`, #0a0e14) with white (`colors.ink`) Roboto text. The page opens with a white header carrying the blue Dell Technologies wordmark, a search field, an account/cart cluster and a second row of category menus (Artificial Intelligence, IT Infrastructure, Computers & Accessories, Services, Support, Deals, Financing). Below it, an AI shopping prompt headed "How can I help you today?" sits on the navy field, followed by a rotating hero, an eight-tile category grid, a "Featured Products and Solutions" carousel and a full-bleed McLaren Racing banner.

The visual personality is product-first and restrained: photography of laptops, monitors, servers and storage on pale blue-grey backdrops, set against flat navy bands, with almost no decorative ornament. Dell blue (`colors.primary`, #0672cb) is reserved for primary buttons and for links and inline actions ("Shop Now →"). Corners are nearly square: 2px on cards and buttons. Copy is plain and transactional ("Shop Now", "Show current deals", "Sign In", "Cart"), with short two-line headlines in light-weight Roboto.

## Colors

The palette is mostly neutral. Measured page backgrounds, by area: #f0f0f0 (`colors.surface-footer`, the large footer), #0a0e14 (`colors.canvas`), #1d2c3b (`colors.surface-slate`) and white cards. Text is dominated by #636363 (`colors.ink-body-muted`, the 14px body copy in the header and footer), then white on the navy sections, then pure black (`colors.ink-black`) and #444444 (`colors.ink-dark-grey`) inside white cards. #0e0e0e (`colors.ink-near-black`) is the text color of the white "Shop Now for Deals" button.

Blue carries all action: `colors.primary` for the filled button (1px border of the same blue) and for blue text and borders. The Dell Design System documentation (opened at the URLs in the architecture section) publishes a closely related set of semantic values as CSS variables, which are included here as cited additions: brand hover `colors.brand-hover` (#0063b8), brand pressed `colors.brand-pressed` (#00468b), success `colors.success` (#4f7d00) and error `colors.error` (#d0353f). Form fields use `colors.text-input-text` (#6e6e6e) text and a `colors.text-input-border` (#b6b6b6) border.

## Typography

Everything is set in Roboto (loaded weights 300 and 400 on the homepage; 500, 600, 700 and 900 also appear in measured text). The hero prompt heading is 32px at weight 300 with a 40px line height (`typography.display`). Section and card headings are 16px/400 on a 24px line (`typography.heading`), while the white secondary button label is 16px/500 (`typography.button-secondary`). The primary button label is 16px/500 on 24px (`typography.button`). Navigation links are 16px/400 (`typography.nav`), inputs 14px/400 (`typography.input`) and fine print such as the "Please verify responses. Transparency Statement" line is 12px/400 (`typography.body`).

The font stack for headings extends Roboto with a long list of regional fallbacks (Cordia New, Meiryo UI, Microsoft YaHei, Malgun Gothic and others), and the same stack is used for buttons. The headline face is Roboto itself, so no font substitute is needed. The one measured letter-spacing is 0.08px at 16px on card text; everywhere else spacing is normal.

## Layout

The extraction was taken at 1280px wide and the page scrolls about 8,279px. In the capture the category tile grid sits in a centred column (four tiles per row, two rows) while the carousel and McLaren banner run wider, with the carousel showing neighbouring slides cut off at the viewport edges. Vertical rhythm alternates full-width bands: white header, navy AI prompt, photographic hero, navy tile grid, slightly lighter navy showcase, photographic banner, then a very tall light-grey footer (about 3,020px) of link columns.

Spacing follows a 4px base. Measured padding values are 8, 11, 12, 16, 19, 24 and 32px, and measured gaps are 4, 8, 12, 16, 20, 24 and 40px. The Dell Design System states that the 4-pixel grid is its standard and that layouts use a 12-column grid, collapsing to 6 columns at 480 to 767px and 2 columns at 479px and below.

## Elevation & Depth

Depth is almost absent. The only measured shadows are `rgba(0, 0, 0, 0.05) 0px 4px 10px 0px` on white product cards and `rgba(0, 0, 0, 0.06) 0px 2px 12px 0px` on one other element. On a dark canvas these shadows are nearly invisible, so separation comes from fill contrast: white cards on navy, pale product photography on slate tiles, and an overlay modal that dims the page behind it. The design system documents four elevation levels and left, bottom or right shadow directions, but the homepage uses only the lightest.

## Shapes

Shapes are rectilinear. Radii measured on the page are 2px (most elements, including cards and the white button), 4px (small controls), 8px (the outlined chat suggestion chips), 10px (one element), 30px (two elements) and 50% (two elements). Inputs are 2px. The tokens map these as `rounded.xs` 2px, `rounded.sm` 4px (DDS `--dds-border-radius-sm`), `rounded.md` 8px, `rounded.lg` 10px, `rounded.xl` 30px and `rounded.pill` for fully round elements.

## Components

**Primary button** (`button-primary`): `colors.primary` fill, white 16px/500 label, 2px radius, 11px 19px padding, 48px tall, 1px border in the same blue; measured on the "Learn More about Dell Rewards" button. **Secondary button** (`button-secondary`): white fill, `colors.ink-near-black` 16px/500 text, 2px radius, 11px 19px padding, 48px tall (the "Shop Now for Deals" button). **Text input** (`text-input`): white, 32px tall, 2px radius, 5px 70px 5px 16px padding to leave room for the search icon, grey border. **Cards**: white, 12px padding, 2px radius and the 0.05 alpha shadow, with a small product label above a 16px/500 headline and a blue "Shop Now →" link. **Footer**: `colors.surface-footer` with #636363 14px links. The outlined "Show current deals" chip measures a 2px border and 8px radius. The carousel has numbered controls ("1/3", "Play") and a "Pause" button on near-black.

## Design System Architecture

Dell publishes its design system at https://www.delldesignsystem.com, confirmed as Dell's own: the footer reads "Copyright © 2026 Dell Inc." and the page is titled "Dell Design System". The About page (https://www.delldesignsystem.com/getting-started/about) describes DDS v3 as "token-based", aligned with Dell Technologies brand guidelines, built in-house with no third-party dependencies and targeting WCAG 2.2 AA. The tokens page (https://www.delldesignsystem.com/getting-started/tokens) defines three levels (global, semantic, component), a naming format of `{prefix}-{category}-{type}-{variant}--{state}` with the `dds-` prefix, and says tokens ship as CSS variables, helper classes, a Figma UI Kit and Storybooks per framework. Foundations pages cover colour, elevation, grid, icons, spacing and typography; for example the spacing page lists `--dds-spacing-xs` to `--dds-spacing-7xl` from 4px to 96px, and the typography page defines a default ramp at 1024px and above and a compact ramp below it.

The button page (https://www.delldesignsystem.com/components/button) documents four kinds (filled, outline, minimal, ghost), four semantic colours (brand Blue 60, destructive Red 60, success Green 60, neutral slate) and four sizes, plus rest/hover/press/inactive/focus states. Measuring that page with the extractor found 2px radii on buttons and inputs and a root-variable set that includes `--dds-color-background-brand-base-rest: #0672cb`, `--dds-color-background-brand-base-hover: #0063b8`, `--dds-color-background-brand-base-pressed: #00468b`, `--dds-border-radius-xs: 0.125rem` and `--dds-border-radius-sm: 0.25rem`; these match the 2px and 4px radii and blues measured on dell.com. The same variable set contains `--dds-ai-color-slate-95: #0a0e14`, the value of this page's navy canvas. The homepage itself exposed no root custom properties, so this document does not claim that dell.com loads the DDS stylesheet; the correspondence is in documented values only.

## Do's and Don'ts

Do use `colors.primary` for one filled action per area and keep other actions white or outlined, which matches the design system's advice to use filled buttons sparingly. Do pair light-weight 32px headlines with white text on navy. Do keep corners at 2px to 4px. Do use photography on pale backgrounds for products.

Don't introduce additional accent colours: success and error colours belong to status and purchase flows only (the design system reserves green for money-related actions such as Add to Cart). Don't set black text on the navy canvas; the page's own h1 measures #000000 against the #0a0e14 canvas and does not appear in the capture. Don't round cards or primary buttons into pills. Don't rely on shadows on the dark canvas.

## Responsive Behavior

The design system defines XS (320 to 479px, 2 columns), S (480 to 767px, 6 columns) and larger breakpoints on a 12-column grid, with a compact typography ramp below 1024px. The extractor also measured the page at 390px width. Buttons are documented as resizing with breakpoint (large at L-12 and up, medium default, small at M-6 and below, extra small for tables).

## Iteration Guide

Start from `colors.canvas` and `colors.ink`, add `colors.primary` for one button, then set headlines with `typography.display`. Check each new colour against the DDS variable list before inventing it. Prefer `rounded.xs` and `rounded.sm`. When adding components, measure them on the docs page at https://www.delldesignsystem.com/components/button rather than copying homepage marketing blocks, and keep spacing in multiples of 4px. If a new section needs depth, raise fill contrast first, shadow second.
