---
version: alpha
name: Jim Thompson
category: "Thai Brands"
description: "Thai luxury silk and lifestyle retailer on a white canvas (#ffffff) with black ink (#000000), a custom Jim Thompson Roman serif at 40px for headings, Public Sans light 14px body and wide Akzidenz-Grotesk Pro Ext uppercase buttons with 1px radius and a #d83d26 hover."
colors:
  canvas: "#ffffff"
  page-largest: "#eeeeee"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-grey: "#dddddd"
  ink-muted: "#646867"
  primary-hover: "#d83d26"
  footer-bg: "#f1f2f2"
typography:
  display:
    fontFamily: "\"Jim Thompson Roman\", serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 44px
  display-mobile:
    fontFamily: "\"Jim Thompson Roman\", serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 35.2px
  body:
    fontFamily: "\"Public Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 21px
    letterSpacing: 0.14px
  button:
    fontFamily: "\"Akzidenz-Grotesk Pro Ext\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
    letterSpacing: 0.96px
    textTransform: uppercase
  input:
    fontFamily: "\"Public Sans\", sans-serif"
    fontSize: 13px
    fontWeight: 300
    lineHeight: 19.5px
    letterSpacing: 0.13px
rounded:
  xs: 1px
  sm: 2px
  md: 5px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 38px 16px 24px
    height: 46px
    borderColor: "{colors.ink}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 24px 0px
    transform: matrix(1, 0, 0, 1, -90, -37.5)
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 14px 16px
    height: 48px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink}"
    padding: 60px 0px 24px
---

## Overview

jimthompson.com is the online store of Jim Thompson, a Thai silk and lifestyle house; the page title reads "Everyday Premium Lifestyle Wear & Accessories | Jim Thompson". The measured desktop page is 1280px wide and 8908px tall. It is an editorial storefront: a full-bleed hero banner titled "Jim Thompson x Bill Bensley" with a "DISCOVER THE COLLECTION" button, then alternating blocks that pair a large lifestyle photograph with a two-product strip and a short serif heading ("WILD CACTUS", "SHOUSON", the pet collection, "ECHOES OF HERITAGE", "BEYOND SILK, BEYOND THAILAND").

Below these come three tall category tiles for Women, Men and Home Decor, a "NEW ARRIVALS" product carousel, a "NEW ARRIVALS - HOME DECOR" carousel, a three-up tile row (Fashion, Home Furnishings, Restaurant and Bar) and a footer containing a "Join Our Newsletter" form, account/support link columns and a handwritten-style signature mark.

The first capture of this page was covered by a promotional modal ("Something Special Awaits", a tote-bag offer) and a grey scrim. The extractor reported hiding four consent/promo overlays (free-gifts, bogos and a Klaviyo popup) and was re-run; the tokens here come from the re-measurement without them. Popup controls are not documented as brand UI.

The tone is quiet, textile-led and storytelling: product copy describes motifs, such as the rainforest-inspired Wild Cactus print and the "Nak Chuson" ancient mudmae motif behind Shouson, rather than shouting promotions. Photography is saturated and painterly for prints and warm and domestic for interiors, set on a neutral white page so the garments carry the color.

## Colors

The interface is neutral so the fabrics supply color.

- **canvas #ffffff** is the page background and the nav background.
- **page-largest #eeeeee** is the largest background area on the page (weight 7341), the light grey behind product photography tiles.
- **surface-grey #dddddd** is a mid-light surface (3491) and the common 1px border color.
- **footer-bg #f1f2f2** fills the footer.
- **ink #000000** is the main text color (5068 weighted characters). **primary #000000** is the same black, since the one filled call to action is black.
- **on-primary #ffffff** is the text on that button (245).
- **ink-muted #646867** is the secondary grey for small labels such as collection names above product titles (615).
- **primary-hover #d83d26** is the primary CTA hover color recorded by the extraction (desktop.hover, ctaPrimary after hover).

The root variables also declare a Swym wishlist and "hm" theme palette (for example --hm-color-btn-text #ffffff, #171722 for carousel icons). Those belong to apps and theme internals, and only the values above are used as tokens. Small color swatches on product cards (blue, cream, black) are product data, not interface colors.

## Typography

Three families, each with a single job.

- **Jim Thompson Roman** (serif, weight 400) is the brand display face, loaded as a custom font. display is 40px / 44px line-height for h1 and h2 ("WILD CACTUS", "Jim Thompson x Bill Bensley"); the h3 "Join Our Newsletter" measures 32px; the mobile pass reads 32px with 35.2px line-height (display-mobile).
- **Public Sans** is the body face, loaded as a variable font (100 to 900) plus 400 and 700 static files. body is 14px / 21px, weight 300, letter-spacing 0.14px. input text is 13px / 19.5px, weight 300, letter-spacing 0.13px. It carries 4754 weighted characters, far more than any other face.
- **Akzidenz-Grotesk Pro Ext** (extended grotesque, weight 400 and 300) is used for buttons and the currency selector: button is 12px, line-height 12px, letter-spacing 0.96px, uppercase.

The pairing is a classical serif for titles, a light humanist sans for reading and a wide uppercase grotesque for commands. Akzidenz-Grotesk Pro Ext is a commercial typeface and Jim Thompson Roman is a custom face, so for prototypes substitute Cormorant or a similar high-contrast serif for display, keeping Public Sans as is and any wide grotesque for buttons.

## Layout

The page is 1280px wide at measurement and built from two-column editorial rows: a large photograph on one side and a text column with a two-card product strip on the other, alternating sides down the page. Product cards show a grey photo tile, the collection name in small muted caps, the product name, the price in THB and a color swatch, with a heart icon for the wishlist at the tile's lower right.

Spacing tokens measured: 2px, 4px, 6px, 8px, 12px, 14px, 16px, 20px, 24px and 32px. The footer measures 60px top padding and 24px bottom padding, the nav links 24px vertical padding, the text input 14px 16px padding and 48px height, and the primary button 16px 38px 16px 24px padding with a 46px height. The header is a centered wordmark with a menu icon at left and a currency dropdown (THB, USD, GBP, EUR, SGD, CNY, JPY) with search, account, wishlist and bag icons at right.

## Elevation & Depth

The shadow measurement is empty: no element uses a box shadow. Hierarchy comes from the grey photo tiles (#eeeeee) on white, 1px borders (#dddddd, #000000 and #ffffff were measured as border colors) and full-bleed imagery. Overlays used for promotions and consent were treated as scrims and excluded.

## Shapes

Radii measured: 1px (weight 8), 2px, 5px, plus 0%, 50% and 100% on circular items. Tokens: xs 1px, sm 2px, md 5px and pill 9999px. The primary button uses 1px, an almost square corner. Product tiles and photographs are rectangles with no radius.

## Components

- **button-primary**: black (#000000) fill, white (#ffffff) text, button typography (12px uppercase, 0.96px tracking), 1px radius, padding 16px 38px 16px 24px, height 46px, 1px solid #000000 border. Its label in the hero is "DISCOVER THE COLLECTION". The asymmetric padding (38px right, 24px left) leaves room for an arrow glyph after the label.
- **button-primary-hover**: background #d83d26 as recorded in the extraction's hover pass.
- **link**: black body text (14px, weight 300). Secondary calls such as "SHOP COLLECTION" are small underlined uppercase links in the capture.
- **nav / nav-link**: white nav background, black links, 24px vertical padding.
- **text-input**: 13px light text, 14px 16px padding, 48px height (newsletter email field).
- **footer**: #f1f2f2 background, black text, 60px 0 24px padding.

## Design System Architecture

No public design system or brand guidelines for jimthompson.com were found; the home page links to none, so none are cited. The shipped CSS shows a de-facto system: theme variables prefixed `--hm-` (for example `--hm-text-base`, `--hm-color-btn-text`, `--hm-color-form-text-200` defined with color-mix) that follow a Tailwind-style scale (`--tw-ring-shadow`, `--hm-color-red-600` in oklch), and third-party app variables prefixed `--swym-` for the wishlist widget. The extractor also noted promo apps injecting popup containers (free gifts, bogos, Klaviyo). Source: the measured root variables in web/data/extracted/jim-thompson.json from https://www.jimthompson.com/.

## Do's and Don'ts

- Do keep the page white (#ffffff) with black (#000000) text and let the textile photography provide color.
- Do set headings in Jim Thompson Roman at 40px with a 44px line-height; body in Public Sans weight 300.
- Do write commands in uppercase Akzidenz-Grotesk Pro Ext at 12px with 0.96px tracking.
- Do keep corners nearly square: 1px on buttons, 0 on tiles.
- Do show product cards as grey tile, small grey collection label, name, THB price and swatch.
- Don't add shadows; none were measured.
- Don't recolor buttons with the wishlist or theme-app palette values.
- Don't document the modal promotions or scrims as brand elements.
- Don't use heavy weights for body text; 300 is the measured reading weight.

## Responsive Behavior

Measured in the 390px mobile pass: the h1 is 32px (line-height 35.2px) against 40px on desktop and body text remains 14px. Other mobile behavior, including the menu, product grids and carousels, was not measured.

## Iteration Guide

1. Start with white canvas, black ink and #eeeeee photo tiles.
2. Write the title in display (40px serif), then body in 14px Public Sans light.
3. Add one black button with 12px uppercase wide grotesque text; hover recorded as #d83d26.
4. Pair a large lifestyle image with a two-card product strip and alternate sides.
5. Use the measured spacing steps from 2px to 32px.
6. Re-run `node web/scripts/verify-designs.mjs --slug=jim-thompson` after edits.
