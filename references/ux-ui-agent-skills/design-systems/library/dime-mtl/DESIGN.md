---
version: alpha
name: "Dime MTL"
category: "Fashion & Apparel"
description: "Dime MTL is a Shopify apparel and skate storefront: white #ffffff canvas, black #000000 ink, Instrument Serif 80px titles in white over full-bleed photography, Habitus weight 300 at 12px and 10px with negative tracking, 0px-radius square geometry and no chromatic accent."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-input: "#f2f2f2"
  ink-muted: "#767676"
  hairline: "#e5e5e5"
  grey-300: "#B8B8B8"
  grey-400: "#9A9A9A"
  grey-700: "#626262"
  grey-900: "#1F1F1F"
  red: "#EC0000"
  yellow: "#FAFF00"
typography:
  display:
    fontFamily: "\"Instrument Serif\", \"Times New Roman\", serif"
    fontSize: 80px
    fontWeight: 400
    lineHeight: 80px
    letterSpacing: "-0.8px"
  display-mobile:
    fontFamily: "\"Instrument Serif\", \"Times New Roman\", serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: "-0.8px"
  heading:
    fontFamily: Habitus, Arial, Helvetica, sans-serif
    fontSize: 12px
    fontWeight: 300
    lineHeight: 15.6px
    letterSpacing: "-0.24px"
  body:
    fontFamily: Habitus, Arial, Helvetica, sans-serif
    fontSize: 10px
    fontWeight: 300
    lineHeight: 14px
    letterSpacing: "-0.2px"
  title-serif:
    fontFamily: "\"Instrument Serif\", \"Times New Roman\", serif"
    fontSize: 32px
    fontWeight: 300
    lineHeight: 32px
    letterSpacing: "-0.8px"
rounded:
  xs: 4px
  sm: 8px
  md: 10px
  none: 0px
spacing:
  s1: 0.5px
  s2: 0.6px
  s3: 0.89px
  s4: 4px
  s5: 6.4px
  s6: 8px
  s7: 12px
  s8: 14.22px
  s9: 16px
  s10: 20px
  header-height: 80px
  header-announcement-height: 40px
  lookbook-navigation-height: 48px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.none}"
    padding: 0.6px 0px
  text-input:
    backgroundColor: "{colors.surface-input}"
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
    rounded: "{rounded.xs}"
    padding: 20px 40px 6px 12px
    height: 40px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

# Dime MTL

## Overview

Dime MTL is the online store of Dime, an apparel and skate brand: the measured site, `https://dimemtl.com/`, shows a shop mega-menu (Tops, Bottoms, Accessories, Skateshop with subcategories such as Hoodies, Pants, Hats, Boards and Trucks), a Lookbook, Stores and Projects, a currency and language selector (CAD, USD, JPY, GBP, EUR and others; English, Français, 日本語) and a cart. The home page announces the collection "Fall 26 D2" with a release date in October 2026, then "Classics" and a gift card. The measured site is a Shopify storefront (assets served from `/cdn/shop/...`).

The look is monochrome editorial. The canvas is white `#ffffff`, text is black `#000000`, and the only chroma on the page comes from photography. Two typefaces do all the work: Instrument Serif at 80px in white, centered over full-bleed campaign photographs for collection titles, and Habitus, a light grotesque at weight 300, at the small sizes of 12px and 10px for navigation, labels and legal text. Letter-spacing is slightly negative throughout. The result reads like a fashion lookbook rather than a retail grid: large photographic bands, one big serif title per band, tiny uppercase utility text.

Microcopy is casual and slightly wry: the footer newsletter title is "Know everything", the privacy column is labelled "Serious Stuff", and the wishlist empty state reads "So sad to see your wishlist empty." The capture also shows a country and language selector panel and a dimming scrim covering the left of the page. That panel is a pop-up, so its controls, its scrim (`#00000080` in the background list) and its hover and focus states are not documented here as brand UI. A small floating shield-shaped privacy widget at the bottom-left of the capture is likewise third-party UI.

## Colors

Everything measured outside the pop-up is grayscale.

- **Canvas `#ffffff`**: page and footer background.
- **Ink `#000000`** and **primary `#000000`**: text, the footer rule lines and the wordmark. The site has no chromatic action color on the page, so primary is the same black as ink.
- **On-primary `#ffffff`**: text over photography (header links, hero titles).
- **Surface input `#f2f2f2`**: the fill of the newsletter email field, equal to the site's `--color-grey-100`.
- **Ink muted `#767676`**: secondary text, equal to `--color-grey-600`.
- **Hairline `#e5e5e5`**: dividers, equal to `--color-grey-200`.
- **Declared grays**: `--color-grey-300 #B8B8B8`, `--color-grey-400 #9A9A9A`, `--color-grey-700 #626262`, `--color-grey-900 #1F1F1F`.
- **Declared accents**: `--color-red #EC0000` and `--color-yellow #FAFF00` exist in the root variables; the extraction does not record either on a rendered element outside the pop-up, so their usage is not measured.

Text colors by measured character count are black (323), `#767676` (160) and white (68). The photographic bands carry dark sampled fills; those are image content and not tokens. The Swiper carousel default `#007aff` also appears in the root variables and is a library default, not a brand color.

## Typography

Fonts loaded: Instrument Serif, Habitus and a Swiper icon font. The Habitus files `Habitus-Book.woff2` and `Habitus-Medium.woff2` are self-hosted in the theme assets; Instrument Serif is listed on Google Fonts (the specimen page title was the only content I could read from it).

- **Display**: Instrument Serif 80px / 80px, weight 400, letter-spacing -0.8px. Used for "Fall 26 D2" and "Classics" in white over photography. On the 390px mobile pass the same h1 measures 48px / 48px (`display-mobile`).
- **Title serif**: Instrument Serif 32px / 32px, letter-spacing -0.8px, the footer "Know everything".
- **Heading**: Habitus 12px / 15.6px, weight 300, letter-spacing -0.24px; the header navigation and column labels.
- **Body**: Habitus 10px / 14px, weight 300, letter-spacing -0.2px; legal and helper text.

Habitus accounts for 488 measured characters and Instrument Serif for 63, so the page is overwhelmingly small light sans with occasional large serif. Only weights 300 and 400 are measured in use. The 14px body size common to many shops does not appear: the largest sans size measured is 12px. If Habitus is not licensed, use a light neo-grotesque at weight 300 and keep the negative tracking.

## Layout

The desktop pass measured a 1280px viewport and a 2,025px page height. The header is 80px tall (`--header-height: 80px`) with an additional 40px announcement strip (`--header-announcement-height`) and a 48px lookbook sub-navigation (`--lookbook-navigation-height`). Header links render in white at 12px directly over the hero photograph, with no filled bar. The root variables also record `--max-columns: 24` and `--size-ref: 375`.

Page bands alternate: a carousel hero (466px tall at desktop), solid dark strips whose colors are sampled from adjacent images, and full-bleed photographic bands (438px, 317px and 400px) each with a centered 80px serif title. The footer is a 1280 × 425px white block: on the left the "Know everything" newsletter title, a "JOIN OUR NEWSLETTER" label, an email field and ten-pixel legal copy; on the right three link columns (Help Center, Follow Us, Serious Stuff) each topped by a thin black rule; and an oversized Dime wordmark at the bottom right with a copyright line at the bottom left. Frequent gaps are 8px (21 uses) and 16px; frequent paddings are 12px and 16px.

## Elevation & Depth

The page is flat. The one shadow recorded is `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` on a single element, which in the capture is the floating privacy widget, so it is not a brand shadow. Depth comes from photography, white-on-photo type and the thin lines: borders were measured in `#e5e5e5` (4 uses) and `#000000` (4 uses). The pop-up's dimming scrim is the only translucent layer and is not part of the brand system.

## Shapes

Geometry is square. Buttons, links, nav and the footer all measure 0px radius. The only rounded component outside the pop-up is the newsletter input at 4px. Two further radii, 8px and 10px, were each measured on one element that the extraction does not attribute to a documented component, so they are kept as tokens but not assigned. Icons are thin line glyphs: the capture shows a plain arrow inside the email field and a close cross, with no filled or rounded icon containers.

## Components

- **Hero link**: the full-width link containing the collection title and "SHOP"; Instrument Serif 80px, white, 0px radius, 1280 × 800px.
- **Nav link**: Habitus 12px / 14.4px, white, padding 0.6px 0px; the labels render in uppercase (SHOP, LOOKBOOK, STORES, PROJECTS), followed by a currency and language toggle and the cart.
- **Newsletter input**: `#f2f2f2` fill, 4px radius, 260 × 40px, padding `20px 40px 6px 12px` (the extra top padding holds a floating label), text 12px black.
- **Footer**: white fill, black text, 0px radius.
- **Column rule**: thin black line above each footer link column.

No primary button on the page itself was recorded: the only measured button with a filled style is "CONFIRM" in the shipping pop-up (black fill, 10px white text, 352 × 40px), and it is excluded as pop-up UI.

## Design System Architecture

No public design system, brand guideline or press kit was found: the fetched home page `https://dimemtl.com/` links to none. The de-facto system is a Shopify theme (theme asset path `/cdn/shop/t/105/assets/`) with root custom properties: a gray ramp `--color-grey-100/200/300/400/600/700/900`, `--color-black`, `--color-white`, `--color-red`, `--color-yellow`, matching `--rgb-color-*` triplets for alpha use, layout variables (`--header-height`, `--header-announcement-height`, `--lookbook-navigation-height`, `--max-columns`, `--size-ref`, `--vh`, `--sbw`, `--scrollbar-width`) and Swiper's `--swiper-theme-color`. Fonts are declared with `@font-face` for Instrument Serif, Habitus and the carousel icon font. Source: `https://fonts.google.com/specimen/Instrument+Serif` for the serif family name.

## Do's and Don'ts

- Do keep the page monochrome: white canvas, black ink, `#767676` for secondary text and `#e5e5e5` for hairlines.
- Do set collection titles in Instrument Serif at 80px, white, centered on full-bleed photography.
- Do keep utility text small: Habitus at 12px or 10px, weight 300, with the negative tracking.
- Do keep corners square, except the 4px newsletter field.
- Do write short, wry microcopy in the voice of "Know everything" and "Serious Stuff".
- Don't add drop shadows or rounded cards; the only shadow measured belongs to a widget.
- Don't treat the country selector, its scrim, or the privacy widget as brand components.
- Don't invent a chromatic accent: red and yellow are declared variables with no measured use.
- Don't set body copy larger than the measured small sans sizes without re-measuring.

## Responsive Behavior

On the 390px mobile pass the extraction recorded: the h1 at 48px / 48px (down from 80px / 80px), a header reading "MENU CLOSE CART (0)" at 10px / 11px that is 390 × 54px, a visible menu toggle labelled "Open menu" with one header link visible, a maximum of 2 product-card columns, and the footer title "Know everything" at 32px / 32px. Body legal text stays at 10px / 14px. Breakpoints, the product grid on desktop, and tablet widths were not measured.

## Iteration Guide

1. Set canvas `#ffffff` and ink `#000000`, and load Habitus (300) plus Instrument Serif (400).
2. Build the header as 80px of white 12px uppercase links directly over the hero photograph.
3. Stack full-bleed photographic bands, each with one 80px serif title (48px on mobile) and a single "SHOP" link.
4. Finish with the white footer: 32px serif newsletter title, a `#f2f2f2` 4px-radius field, three ruled link columns and the wordmark.
5. Keep corners at 0px and avoid shadows.
6. Re-measure any new component before adding a token, then run `node web/scripts/verify-designs.mjs --slug=dime-mtl`.
