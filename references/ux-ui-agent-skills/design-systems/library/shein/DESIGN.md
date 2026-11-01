---
version: alpha
name: SHEIN
category: "E-commerce & Retail"
description: "SHEIN's Thailand storefront (th.shein.com), measured — black #000000 header, nav and square Subscribe buttons, light grey #f6f6f6 and white #ffffff surfaces, promo orange-red #f93a00 prices, trend purple #9462ff, Muli 13px nav, Jost 28px banner titles, system-ui 12–16px copy, 0px buttons with 6px cards."
colors:
  canvas: "#f6f6f6"
  page-body: "#ffffff"
  ink: "#666666"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-footer: "#fafafa"
  ink-strong: "#222222"
  promo: "#f93a00"
  trend-purple: "#9462ff"
  promo-hairline: "#fed0c2"
  text-input-border: "#cccccc"
typography:
  display:
    fontFamily: Jost, -apple-system, system-ui, "Helvetica Neue", Arial, sans-serif
    fontSize: 28px
    fontWeight: 600
    textTransform: capitalize
  price-mobile:
    fontFamily: "-apple-system, system-ui, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 26px
    fontWeight: 700
    lineHeight: 29.9px
  body:
    fontFamily: "-apple-system, system-ui, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 13.8px
  button:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16.1px
  nav:
    fontFamily: Muli, Arial, Helvetica, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 40px
  input:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 13.8px
rounded:
  xs: 0.88px
  sm: 2px
  md: 3px
  lg: 4px
  xl: 6px
  2xl: 8px
  3xl: 40.5px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 13px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 16px
    height: 36px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.ink}"
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    padding: 0px 45px
    boxShadow: rgba(0, 0, 0, 0.04) 0px 2px 12px 0px
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 0px 10px
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.primary}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 0px 12px
    height: 36px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.promo}"
    rounded: "{rounded.xl}"
    padding: 11px
    borderColor: "{colors.page-body}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.none}"
    padding: 60px 10px 20px
---

# SHEIN

## Overview

Requests to `https://www.shein.com` were redirected to the Thailand storefront, `https://th.shein.com/`, whose title reads "Shop The Latest Styles | Fashion Clothes for Women, Men & Kids Online | SHEIN Thailand". The page was served in English (`lang="en"`) with baht prices, and everything here was measured on it at 1,280px (desktop) and 390px (mobile). Two consent and promotion layers were hidden by the extractor before measuring (`ip-popup` dialog and its `sui-modal` scrim). A dark "Sign in and enjoy more!" toast still sits over the category grid in the capture; it is a sign-in prompt, not brand UI, and is not documented as a component.

The page reads as a fast-fashion catalogue built on a monochrome frame. A black header holds the wide-tracked SHEIN wordmark, a long search box with a black search button, and account, bag, wishlist, support and language icons; directly below, a black navigation row lists Categories, Just for You, New In, Sale, Women Clothing, Beachwear, Curve, Jewelry & Accessories, Men Clothing, Kids, Shoes and more. The first content block is a lavender "Trends #SummerOutfit" banner with four product tiles carrying large orange-red price stickers. Under it sits a carousel of 24 round category thumbnails (Women, Curve, Kids, Men, Pet Supplies, Tops…), then two white panels side by side — "Super Deals" with Flash Sale and percent-off prices, and "Trends" with hashtag captions such as #SummerOutfit and #warmtonelayered. The footer is a quiet `#fafafa` block with uppercase column titles, social icons, three newsletter sign-up rows with black Subscribe buttons, and payment logos.

Imagery is all product photography: flat lays, mannequin shots and model photos on neutral backgrounds, cut into circles for categories and rectangles for deals. Microcopy is short and promotional — "Flash Sale", "20% OFF", "10% OFF", hashtags in purple.

## Colors

- **Primary `#000000`** — the brand color. SHEIN's own stylesheet declares `--color_brand_primary: #000000`. It fills the header, the 40px navigation bar and every Subscribe button, and is the input text color.
- **On-primary `#ffffff`** — wordmark, nav labels and button labels on black.
- **Canvas `#f6f6f6`** — the largest measured background area (3,145 units) and about 23% of the capture pixels; it sits behind the category thumbnails and the body grid.
- **Page body `#ffffff`** — the body element and the white Super Deals / Trends panels and inputs.
- **Surface footer `#fafafa`** — the footer background.
- **Ink `#666666`** — the most-read text color (551 characters): footer links, secondary labels and the button hover fill.
- **Ink strong `#222222`** — body text, the footer column titles and product names (529 characters).
- **Promo `#f93a00`** — the sale price and discount color. It is declared three times in the shipped CSS: `--product-card_color-discount`, `--color_promo_primary` and `--color-promo-fs-sale-price-primary`.
- **Trend purple `#9462ff`** — the hashtag captions in the Trends panel; declared as `--color_home_trend`. The lavender `#d9ccff` behind the Trends banner was measured as a background.
- **Promo hairline `#fed0c2`** — the most frequent border color (30 elements), a pale tint of the promo orange.
- **Text input border `#cccccc`** — the 1px outline of the search and newsletter fields.

Other measured backgrounds: `#f0eeec` (the circular category thumbnails' warm grey), `#fff5f2` (pale promo tint) and translucent blacks `#00000099` and `#000000cc`.

## Typography

Three web fonts were loaded: **Muli** 400 and 700, and **Jost** as a variable font (weights 100–900). By characters the page is set mostly in the system stack (`-apple-system, system-ui, "Helvetica Neue", Arial` — 1,005 characters), then Muli (709), Arial (444), SF Pro (29) and Jost (13).

- **Display — Jost 28px / 600, `text-transform: capitalize`.** The "#SummerOutfit" title on the lavender Trends banner, the largest live text on the page.
- **Body — system stack 12px / 400 / 13.8px.** Product names and small copy; 12px is the second most common size (624 characters) after 16px (847).
- **Nav — Muli 13px / 400 / 40px.** The black navigation row; the 40px line height sets the bar height.
- **Button — Arial 14px / 700 / 16.1px.** The Subscribe label.
- **Input — Arial 12px / 400 / 13.8px.** Search and newsletter field text.
- **Price (mobile) — system stack 26px / 700 / 29.9px.** The largest text recorded at 390px is a price figure ("219"), which shows how prices dominate the type hierarchy.

Weights measured: 400 (1,821 characters), 700 (292), 590 (48), 860 (26) and 600 (13). No letter-spacing was measured. Footer column titles are uppercase 12px/700 Arial.

**Substitutes:** Muli is the earlier name of the Google font Mulish; Jost is on Google Fonts under its own name. Both are freely available.

## Layout

The desktop page measured 1,942px tall. The extractor found two bands: the black header and nav (0–96px) and the long light-grey content area (96–1,942px) with up to eight card columns — the eight category thumbnails per row in the capture. The navigation shows 24 visible links on desktop with `0 45px` side padding on the bar and `0 10px` per link. The Trends banner spans the content width with rounded corners; the Super Deals and Trends panels split the width in two, each showing three product tiles. The footer uses `60px 10px 20px` padding and a four-plus-two column arrangement: company info, help and support, customer care on the left; social, newsletter and payment on the right.

The most frequent paddings are 10px (45), 8px (20) and 16px (11); measured gaps include 10px and 12px plus percentage gaps (2.67%, 4.9%, 7.6%) in the carousels.

## Elevation & Depth

Depth is minimal. Four shadows were measured, each on one element: `rgba(0, 0, 0, 0.04) 0px 2px 12px 0px` (the nav bar), `rgba(0, 0, 0, 0.08) -2px 0px 3px 0px`, `rgba(0, 0, 0, 0.08) 0px 0px 15px 0px` and `rgba(0, 0, 0, 0.3) 0px 0px 1px 0px`. Panels separate from the grey canvas through white fill alone, not shadow.

## Shapes

Buttons, inputs, the header and the nav are square (0px). Cards use a 6px radius. The category thumbnails use an organic `50% 80% / 80% 50%` radius (31 elements) and 50% circles (14). Other measured radii: 0.88px, 2px, 3px, 4px, 8px, 40.5px, half-rounded corners such as `4px 0 0 4px` and `0 4px 4px 0`, and pills. The square black button against round product imagery is the core shape contrast.

## Components

- **Primary button** — black `#000000` fill and border, white Arial 14px/700 label, 36px tall, `0 16px` padding, 0px radius. Measured hover: fill and border change to `#666666`.
- **Navigation bar** — black, 40px tall, Muli 13px white links with `0 10px` padding, faint 4% shadow.
- **Text input** — white, `1px solid #cccccc`, 36px tall, `0 12px` padding, Arial 12px, square. The header search field is 456px wide with a black square search button attached.
- **Card (deal panel)** — white, 6px radius, 11px padding, orange-red `#f93a00` prices below each photo.
- **Category thumbnail** — round product photo on warm grey `#f0eeec` with a 13px label below; arrows at both ends scroll the carousel.
- **Footer** — `#fafafa`, `#222222` text, uppercase 12px/700 column titles.

## Design System Architecture

No public SHEIN design system or brand-guideline site was found. The research opened `https://www.shein.com/about`, which redirected to `https://th.shein.com/about`, and that returned HTTP 404. The shipped CSS does show the internal system: 53 custom properties on `:root`, grouped into semantic families — `--color_brand_primary` (#000000), `--color_promo_*` (primary #F93A00, base #FC4812, elevated #FF6233, light #FFF1EB), `--color_flashsale_*` (primary #FACF19, base #A86104), `--color_safety_*` (primary #007D49, base #008C52), `--color_newflash_*`, `--color_ndaysdelivery_*` test variants, `--color_neutrals_text_*` (tertiary #767676, hint #959595, disabled #BBBBBB) and component-scoped variables such as `--product-card_color-discount` and `--product-card_color-new-tag` (#3CBD45). Class names use an `sui-` prefix (`sui-dialog`, `sui-modal`), the house UI component library. Only the colors used on this page are tokens in the frontmatter.

## Do's and Don'ts

**Do**
- Keep the frame black and white: black header, nav and buttons; white panels on a light grey canvas.
- Use `#f93a00` only for prices, discounts and sale labels.
- Set navigation in Muli 13px and product text at 12px in the system stack.
- Keep buttons and inputs square, and let product imagery carry the roundness.
- Use hashtags in `#9462ff` for trend content.

**Don't**
- Don't introduce a colored primary button — the brand primary is black.
- Don't add heavy shadows to panels.
- Don't document the sign-in toast or promotional pop-ups as components.
- Don't mix the promo orange into navigation or body copy.

## Responsive Behavior

Measured at 390px: the black header and nav band keeps its 96px height, and the nav keeps Muli 13px/400/40px with `0 45px` padding at 390px width; the extractor still counted 24 header links in the DOM and no visible menu toggle. The content band below measured 1,265px tall in a single column, followed by a media band and a `#fafafa` footer band 243px tall split in two columns. The largest mobile text is a 26px/700 price; mobile font sizes by frequency were 13px, 12px, 14px, 16px, 24px, 15px and 26px. The newsletter country-code field measured 36px tall with a `1px solid #e5e5e5` border and `#666666` text. No primary button was detected in the mobile viewport. Breakpoint widths and how the category carousel and deal panels reflow: not measured.

## Iteration Guide

1. Set the canvas to `#f6f6f6`, panels to `#ffffff` and body text to `#222222` / `#666666`.
2. Build the 96px black header + nav with Muli 13px links.
3. Add a full-width rounded promo banner with a Jost 28px/600 title.
4. Use round category thumbnails in rows of eight on desktop.
5. Place deals in white 6px-radius panels with `#f93a00` prices.
6. Finish with the `#fafafa` footer and square black Subscribe buttons that hover to `#666666`.
7. Add any new color from the measured `:root` variables, not by eye.
