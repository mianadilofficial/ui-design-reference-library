---
version: alpha
name: Gourmet Market
category: "Thai Brands"
description: "Gourmet Market (กูร์เมต์ มาร์เก็ต), a Thai online supermarket, is set entirely in Noto Sans Thai on a white canvas (#ffffff) with near-black ink (#252525), a single crimson action color (#b30838), soft grey surfaces (#f5f5f5), hairline #ebebeb borders and generously rounded pill controls (30px) and cards (16px)."
colors:
  canvas: "#ffffff"
  ink: "#252525"
  primary: "#b30838"
  on-primary: "#ffffff"
  surface-subtle: "#f5f5f5"
  ink-muted: "#a2a2a2"
  hairline: "#ebebeb"
  nav-link-text: "#000000"
  text-input-text: "#212529"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", system-ui, -apple-system"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", system-ui, -apple-system"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  nav:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", system-ui, -apple-system"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 14px
  xl: 16px
  2xl: 30px
  3xl: 40px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.2xl}"
    padding: 12px 16px
    height: 50px
    borderColor: "{colors.hairline}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    padding: 5px 0px
  text-input:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.body}"
    rounded: "{rounded.2xl}"
    padding: 12px 28px 12px 24px
    height: 50px
    borderColor: "{colors.surface-subtle}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    padding: 8px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.ink}"
    padding: 40px 0px
---

## Overview

Gourmet Market describes itself on its own homepage as "Gourmet Market & Home Fresh Mart จุดหมายปลายทางของนักชิมระดับโลก", a destination for world-class food enthusiasts. The site is an online grocery storefront, and the design serves that job: a quiet white shell with near-black text, one crimson accent, and a lot of space handed over to photography. The interface itself stays neutral so that the campaign banners, product packshots and pastel category medallions carry all the colour and personality.

The first thing the capture shows is a thin dark strip at the very top carrying a service announcement in Thai about a new "Call Chat Shop" shopper assistant, followed by a white header with a round crimson logo medallion, a rounded category button, a wide pill-shaped search field with a circular crimson search button, text links for help and store locations, a language switcher and a basket icon. Below that sit stacked full-width promotional banners with rounded corners, a horizontally scrolling row of product cards, two rows of six circular category tiles, and a "What's New" section whose "ดูทั้งหมด" (view all) link is set in the crimson accent.

The voice is Thai-first and practical. Navigation labels are plain nouns and verbs: "หมวดหมู่สินค้า" (product categories), "การช่วยเหลือ และสนับสนุน" (help and support), "สาขา กูร์เมต์ มาร์เก็ต" (store locations). Calls to action seen on the homepage include "เพิ่มสินค้าในตะกร้า" (add to cart) and "วิธีการสั่งสินค้า" (how to order). Prices are shown in baht with a per-piece unit. The overall character is friendly, busy and retail-promotional, not luxury-minimal, despite the "gourmet" name.

## Colors

The measured palette is small. Page backgrounds are white (`canvas`, #ffffff) and a light grey (`surface-subtle`, #f5f5f5) that fills the footer and the search input. Text is overwhelmingly `ink` (#252525), which is the most-read text color on the page. Secondary and placeholder text uses `ink-muted` (#a2a2a2). Lines and card outlines use `hairline` (#ebebeb). The nav links are measured as pure black (`nav-link-text`, #000000) and the text typed into the search input as #212529 (`text-input-text`), the Bootstrap body color.

The only saturated interface color is `primary` (#b30838), a deep crimson. It appears as the search button fill, the "ดูทั้งหมด" link, the active segment of the product-carousel progress bar and the logo medallion area. On hover, the white category button turns into a crimson fill with white text; that white (`on-primary`, #ffffff) is the measured hover text color. The extractor found no filled primary button in the static state, so the crimson is documented as the action and accent color rather than as a labelled button style.

Everything else colorful on the page is campaign imagery supplied by suppliers and advertisers (a mint Kimberly-Clark banner, a golden festival banner, a red Coca-Cola banner). Those colors are not part of the interface system and should not be copied into UI tokens. The page also exposes Bootstrap 5 default custom properties such as #0275d8 for `--bs-primary` and #0d6efd for links; these are framework defaults that the site does not use for its visible controls, so they are not brand colors.

## Typography

One family does all the work: Noto Sans Thai, loaded as a variable font covering weights 100 to 1000, with "Noto Sans" and the system UI stack as fallbacks. Thai and Latin text are set in the same family, which gives mixed Thai and English strings such as "Call Chat Shop" a uniform texture.

The measured sizes are modest. The most-used size is 16px (the `display` token, line height 24px), followed by 14px (the `body` token, line height 21px) used for product titles and descriptive copy, then 18px, 12px, 26px and 28px for lesser and greater accents. The nav links are measured at 20px with line height 30px and uppercase transform (`nav`), which affects Latin labels only. Weights are 400 for most text, 700 for most of the remainder (headings such as "What's New", prices) and 600 in a few places.

There is no large display type in the interface. The extractor's "h1" is the announcement strip text at 16px, so the `display` token documents that strip, not a hero headline; the true display voice of the page lives inside the banner artwork, which is raster imagery with its own lettering. Do not substitute Noto Sans Thai for those images, and do not invent a larger heading scale from them.

Noto Sans Thai is an open-source family, so no font substitute is required.

## Layout

The page is a single long column, 5398px tall at the 1280px desktop viewport used for measurement. Content runs nearly edge to edge with a narrow outer gutter; banners fill the container width and stack with small gaps between them. The spacing values observed in paddings are 2, 5, 7, 8, 10, 12, 15, 16, 20 and 24px plus 40px for the footer's vertical padding, captured here as `s1` to `s10`. Eight pixels is by far the most frequent padding (inside cards), then 40px, 16px and 15px.

Sections follow a fixed rhythm: promotional banners, a horizontally scrolling product row with a thin progress rail underneath, a grid of twelve circular category tiles in two rows of six with centred Thai captions, then titled sections such as "What's New" with a left-aligned bold title and a right-aligned crimson "view all" link. The site loads the UIkit framework alongside Bootstrap, and exposes UIkit breakpoints of 640px, 960px, 1200px and 1600px as root variables.

## Elevation & Depth

The page is flat. No box shadows were measured at all; separation is made with 1px hairline borders in #ebebeb (109 occurrences in the measurement), background changes between white and #f5f5f5, and the difference between a photograph and a plain surface. Cards carry a hairline border and 8px of inner padding, not a shadow. The announcement strip at the very top is the single dark band (#252525) and acts as the page's only heavy contrast element. Do not add drop shadows to product cards; use the border and let imagery supply depth.

## Shapes

Rounding is the signature shape language. The measured radii are 4px, 6px, 8px, 14px, 16px, 30px, 40px, full pill (9999px) and 100% for circles. Product cards and banners use 16px (`xl`); the category button and the search field use 30px (`2xl`); small chips and thumbnails use 8px or less; the logo, search button, add-to-cart "+" buttons and category medallions are fully circular. The result is a soft, bubbly interface where almost no rectangle has a sharp corner.

## Components

**Category button (`button-secondary`).** White fill, `ink` text at 16px, 1px #ebebeb border, 30px radius, 12px by 16px padding and a 50px height. On hover it inverts to a crimson #b30838 fill with white text. It carries a small grid icon and the label "หมวดหมู่สินค้า".

**Search input (`text-input`).** Light grey #f5f5f5 fill and border, 30px radius, 50px height, padding 12px 28px 12px 24px, 14px text, placeholder in a muted grey. A circular crimson button with a magnifier icon sits on the right edge.

**Navigation (`nav`, `nav-link`).** White bar; links in black at 20px with 5px vertical padding. Utility icons for language and basket sit at the far right.

**Product card (`card`).** White, 1px #ebebeb border, 16px radius and 8px padding. It shows a packshot, a two-line Thai title at 14px, a bold baht price with a per-piece unit, and a small circular "+" button at the bottom right of the image area.

**Footer (`footer`).** Light grey #f5f5f5 background, `ink` text, 40px vertical padding.

## Design System Architecture

No public design system, brand guideline or token package was found; the homepage states no font or color specifications. The de-facto system is Bootstrap 5 (its `--bs-*` root variables, including a 2rem 2xl radius and a 0.375rem default radius, are present) layered with UIkit (`--uk-breakpoint-*` variables) and Bootstrap Icons, which is loaded as an icon font. Site-specific styling overrides the framework: the 30px, 16px and 40px radii and the crimson accent are custom, while the Bootstrap blue primary is unused on visible controls. For reuse, treat the measured tokens above as the system, and keep framework defaults out.

## Do's and Don'ts

- Do keep the shell white and grey and let product photography carry color.
- Do reserve #b30838 for actions, view-all links and the search button.
- Do round every control: 30px for pills, 16px for cards, circles for icon buttons.
- Do write Thai labels first, short and literal, as the site does.
- Don't use Bootstrap's default blue (#0d6efd) for links or buttons.
- Don't add shadows; use hairlines.
- Don't document banner colors from suppliers as brand colors.
- Don't set primary text in anything lighter than #252525 except placeholders (#a2a2a2).

## Responsive Behavior

The mobile measurement was taken at 390px wide. Body text stays at 14px at that width and the most frequent text size remains 16px, so type does not scale down much; layout does the adapting. The UIkit breakpoints (640px, 960px, 1200px, 1600px) are the framework's switch points. The product row already scrolls horizontally on desktop, which is the natural pattern for narrow screens too, and the twelve-tile category grid reflows to fewer columns. Tap targets such as the 50px-high category button and search input are comfortably large, and the circular icon buttons should stay at least as big as they are on desktop.

## Iteration Guide

1. Start from `canvas` white and `ink` #252525; add `surface-subtle` only for inputs and the footer.
2. Add one crimson (#b30838) element per view region, such as the search button or a view-all link.
3. Build controls from the radius ladder: 30px for fields and pill buttons, 16px for cards, 8px for small tiles, full circles for icon buttons.
4. Set all text in Noto Sans Thai at 14px or 16px, 700 for titles and prices.
5. Keep depth to 1px #ebebeb borders; test that no shadow crept in.
6. Validate by comparing with the live homepage and re-measure before adding any new value.
