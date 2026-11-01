---
version: alpha
name: Alibaba.com
category: "Design Systems"
description: "Alibaba.com is a dense B2B marketplace set in Alibaba_B2B_Sans: white canvas, #222222 ink, Alibaba orange (#ff6600) pill buttons at 36px tall, promo tiles in #fff3ea tints, product cards with 8px radius and bold price lines, and its own --pc-* and --color-* token layer exposed as CSS variables on the page."

colors:
  canvas: "#ffffff"
  ink: "#222222"
  surface-dim: "#f4f4f4"
  surface: "#f8f8f8"
  ink-strong: "#000000"
  ink-helper: "#767676"
  support-green: "#22891f"
  promo-red: "#ff4014"
  ink-secondary: "#666666"
  hairline: "#dddddd"
  primary: "#ff6600"
  accent-secondary: "#fa6400"
  accent-primary: "#d64000"
  on-primary: "#ffffff"
  overlay: "#000000b3"
typography:
  display:
    fontFamily: Alibaba_B2B_Sans, Inter, "SF Pro Text", Roboto, "Helvetica Neue", Helvetica, Tahoma, Arial, "PingFang SC", "Microsoft YaHei"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 38px
  subheading:
    fontFamily: Alibaba_B2B_Sans, Inter, "SF Pro Text", Roboto, "Helvetica Neue", Helvetica, Tahoma, Arial, "PingFang SC", "Microsoft YaHei"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 26px
  link:
    fontFamily: Alibaba_B2B_Sans, Inter, "SF Pro Text", Roboto, "Helvetica Neue", Helvetica, Tahoma, Arial, "PingFang SC", "Microsoft YaHei"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  input:
    fontFamily: Alibaba_B2B_Sans, Inter, "SF Pro Text", Roboto, "Helvetica Neue", Helvetica, Tahoma, Arial, "PingFang SC", "Microsoft YaHei"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  body:
    fontFamily: Alibaba_B2B_Sans, Inter, "SF Pro Text", Roboto, "Helvetica Neue", Helvetica, Tahoma, Arial, "PingFang SC", "Microsoft YaHei"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18px
  button:
    fontFamily: Alibaba_B2B_Sans, Inter, "SF Pro Text", Roboto, "Helvetica Neue", Helvetica, Tahoma, Arial, "PingFang SC", "Microsoft YaHei"
    fontSize: 14px
    fontWeight: 600
rounded:
  xs: 2px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 18px
  2xl: 20px
  3xl: 100px
  4xl: 108px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 19px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 36px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    padding: 0px 3px 0px 0px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 22px
  product-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
---

## Overview

Alibaba.com is a business-to-business marketplace, and its homepage is built for scanning rather than for atmosphere. A white header carries the wordmark, a delivery-country selector, cart, account and a "Create account" button in Alibaba orange; beneath it a row of large tabs (AI Mode, Products, Manufacturers, Worldwide) leads into a search box with an image-search affordance and an orange Search button. Below that sit a category list on the left, a promotional carousel on the right, and then a long, dense grid of product cards. In the captured screenshot a promotional modal ("Negotiate effortlessly with AI", with a white "Try for free" pill) dims the top of the page under a black overlay; this file describes the underlying page and treats the modal as a promo pattern, not as the canvas.

The voice is transactional and numeric: "MOQ: 10 pieces", "THB 34.29", "412 sold", "Verified · 1 yr · CN", "FREE shipping", "10% off". Product photography is supplier-supplied, on white or lightly coloured backgrounds, with no art direction beyond a consistent square crop. Colour is reserved for commercial signals: orange for actions, promotion red for discounts, green and blue for trust badges.

**Key Characteristics:**
- Alibaba orange (`{colors.primary}`) as the single action colour, in pill buttons.
- A dense five-column product grid with bold price lines and small grey metadata.
- Tinted promotional tiles (peach, lilac, plum) set against an otherwise neutral page.
- Trust badges ("Verified", "Guaranteed", "Easy Return") as small coloured labels on cards.
- A proprietary typeface, Alibaba_B2B_Sans, with system fallbacks and Chinese-language fallbacks.

## Colors

The neutrals form a layered grey scale: `{colors.canvas}` white for cards and the header, `{colors.surface}` and `{colors.surface-dim}` for page bands and the category panel, `{colors.hairline}` for dividers and outlines. Text steps from `{colors.ink-strong}` (pure black, used in headings on some blocks) and `{colors.ink}` (the default read colour) down through `{colors.ink-secondary}` to `{colors.ink-helper}`, the grey of helper text and metadata.

Orange is the brand colour. The "Create account" button measured `{colors.primary}` with `{colors.on-primary}` text (a probe of the live page, recorded in SOURCES.json). The page also exposes `--color-accent-secondary` (`{colors.accent-secondary}`) and `--color-accent-primary` (`{colors.accent-primary}`, a deeper red-orange used behind a Sign in button), so the orange family has at least three measured steps. `{colors.promo-red}` is the red-orange for discounts and free-shipping labels, and `{colors.support-green}` is the green used on guarantee text. `{colors.overlay}` is the black scrim at 70% opacity behind modals (also published as `--color-add-on-overlay`).

The root variables also name semantic groups for business badges (local, guaranteed, customize, ranking, buyer-AI) and support states (error, warning, success, notice), each with a container tint; they confirm that colour is organised by commercial meaning.

## Typography

One family is loaded, Alibaba_B2B_Sans, in weights 400, 500, 600 and 700; the declared stack continues with Inter, SF Pro Text, Roboto, Helvetica Neue, Helvetica, Tahoma, Arial, PingFang SC and Microsoft YaHei. Because the primary face is proprietary, use Inter as the substitute.

- **Display (`{typography.display}`)**: 28px, weight 700, line-height 38px; the large tabs and block headings.
- **Subheading (`{typography.subheading}`)**: 20px, weight 700, line-height 26px.
- **Link (`{typography.link}`)**: 16px, weight 600, line-height 24px.
- **Input (`{typography.input}`)**: 16px, weight 400, line-height 22px.
- **Body (`{typography.body}`)**: 14px, weight 400, line-height 18px, the default size for card text (the site declares `--pc-body-font-size` as 14px).
- **Button (`{typography.button}`)**: 14px, weight 600.

The root variables define a full scale: display sizes 28px–36px (large 36px with 48px line height), heading sizes 16px–24px, body 14px and caption 12px with 16px line-height. Tracking is 0 throughout. Compactness is the point: 14px body with 18px leading lets a card show title, price, MOQ and supplier in about a hundred pixels.

## Layout

A fixed content width of 1440px (the `--floorWrapperWidth` variable) holds floors, the sections the page is built from: header, search, category and carousel block, promotional pair, then the product grid. The grid has five columns at desktop width, each card showing a square image, a two-line title, optional badges, a price, MOQ and sold count, and a supplier line. Section headings are centred with thin rules ("Recommended for your business"). Spacing follows the site's `--pc-spacing-*` scale: 2px, 4px, 8px, 12px, 16px, 20px, 24px, 28px, 32px, 36px, 40px and 48px; the generated spacing tokens (`{spacing.s5}` 8px, `{spacing.s8}` 16px, `{spacing.s10}` 20px) are the subset measured on the page.

## Elevation & Depth

Depth is light. The most frequent measured shadow is `rgba(0, 0, 0, 0.12) 0px 2px 6px 2px`, the most frequently measured (66 uses), with softer layered shadows for larger panels (`rgba(0, 0, 0, 0.05) 0px 4px 20px`). Hover and press states are expressed as black overlays at 8% and 12% opacity (`--color-add-on-hover`, `--color-add-on-press`). One element also carries a white inset glow shadow. Most separation, however, comes from `{colors.surface-dim}` bands and `{colors.hairline}` outlines.

## Shapes

The radius scale is `{rounded.xs}` 2px, `{rounded.sm}` 8px, `{rounded.md}` 12px, `{rounded.lg}` 16px, `{rounded.xl}` 18px, `{rounded.2xl}` 20px, `{rounded.3xl}` 100px, `{rounded.4xl}` 108px and `{rounded.pill}`. The root variables use the names `--pc-radius-*` for desktop and `--app-radius-*` for the mobile app. Product cards and images use 8px; the search container 18px; buttons and badges are fully round pills.

## Components

**button-primary** — the "Create account" pill: `{colors.primary}` fill, `{colors.on-primary}` text, `{typography.button}`, `{rounded.pill}`, padding 0px 24px, height 36px. A "Sign in" button uses the deeper `{colors.accent-primary}` with 40px height and 16px side padding.

**product-card** — white, `{rounded.sm}`, text in `{colors.ink}`; price in bold, metadata in `{colors.ink-helper}`, badges in `{colors.promo-red}` or `{colors.support-green}`.

**text-input** — the search field, text `{colors.ink}`, `{typography.input}`, inside an 18px-radius container with a red-orange outline and an orange Search button.

**nav-link** — the large tabs in `{typography.display}`, `{colors.ink}`, the active tab coloured orange in the capture. **link** — 16px, weight 600.

**Promo tiles** — "First order deal" in plum and "Alibaba Guaranteed" in brown-maroon, each holding three white product cards.

## Design System Architecture

No public Alibaba.com design system documentation was found. The site's own pages expose the de-facto system: 132 CSS custom properties on the root (some are Tailwind internals), in four main families. `--color-*` carries semantic colour roles (layer, on-layer, outline, accent, support, business, add-on); `--pc-*` carries desktop type, spacing and radius scales (`--pc-heading-m-font-size`, `--pc-spacing-xl`, `--pc-radius-m`); `--app-radius-*` carries the app radius scale; and `--rc-*` carries tokens for a third-party component. The naming follows a Material-like pattern, with a "container" and "on-container" pair for each tint and an "inverse" mirror for dark surfaces.

The `dsUrl` supplied for this brand, [ant.design](https://ant.design), is not Alibaba.com's design system. I opened it and its introduction page ([ant.design/docs/spec/introduce](https://ant.design/docs/spec/introduce)): the introduction attributes the system to Ant Financial's user-experience design team ("Ant User-Experience Design Team builds a design system for enterprise products based on four design values of Natural, Certain, Meaningful, and Growing"). It is a design system for Ant's enterprise products, and I found no statement that Alibaba.com uses it. Alibaba.com's measured fonts, colours and radii do not match it either. It is therefore not used here. Alibaba Group's own corporate page ([alibabagroup.com](https://www.alibabagroup.com/en-US/about-alibaba-brand)) was opened and contains no brand guidelines.

## Do's and Don'ts

- Do keep orange for actions only, in pill buttons with 24px side padding.
- Do show price in bold and metadata in `{colors.ink-helper}` at 14px or smaller.
- Do use tint pairs (a pale container with a dark on-container text) for badges and promo tiles.
- Don't add decorative imagery between product rows; the grid is the content.
- Don't use more than one orange shade in a single component.
- Don't use Ant Design tokens or components as if they were Alibaba.com's.
- Don't set body copy above 16px; the density depends on 14px and 18px leading.

## Responsive Behavior

The extractor's 390px mobile measurement returned the same desktop values: the "AI Mode" heading stayed at 28px (weight 700, 38px line-height) and the navigation element still measured 960px wide, so the desktop page did not reflow in that measurement. No mobile-specific type scale or column count was captured. The page does declare a separate `--app-radius-*` scale and mobile-oriented variables (such as `--rc-drag-handle-mobile-size`), which hints at an app layer, but its layout is not described here because it was not measured.

## Iteration Guide

1. Start with a white canvas and a `{colors.surface-dim}` band; place content in a 1440px floor.
2. Use `{colors.primary}` on one pill per section; use tint containers for secondary promotions.
3. Set card text at `{typography.body}` and prices in bold.
4. Draw radii from the 8px / 12px / 16px steps; keep pills for buttons and badges.
5. Check any new value against the page's own `--color-*` and `--pc-*` variables before adding a token.
