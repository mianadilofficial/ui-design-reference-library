---
version: alpha
name: "Graff"
category: "Luxury"
description: "Graff luxury jewellery home page measured live: white and #f8f8f9 surfaces, black ink, bronze-gold #897358 primary button, ChronicleDisplay serif at 50px with 2.1px tracking and OptimaNovaLTPro sans at 17px, square 0px corners and almost no shadow."
colors:
  canvas: "#ffffff"
  page-largest: "#f8f8f9"
  ink: "#000000"
  primary: "#897358"
  on-primary: "#ffffff"
  ink-muted: "#767676"
  ink-footer: "#333333"
  gold-text: "#7f6e59"
  text-input-border: "#bababa"
typography:
  display:
    fontFamily: ChronicleDisplay, sans-serif
    fontSize: 50px
    fontWeight: 400
    lineHeight: 50px
    letterSpacing: 2.1px
  display-mobile:
    fontFamily: ChronicleDisplay, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: 2.1px
  body:
    fontFamily: OptimaNovaLTPro, sans-serif
    fontSize: 17px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: OptimaNovaLTPro
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 1.5px
    textTransform: uppercase
  nav:
    fontFamily: OptimaNovaLTPro, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: OptimaNovaLTPro, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  none: 0px
spacing:
  s1: 2px
  s2: 5px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 18px
  s8: 20px
  s9: 24px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 48px
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 12px 13px 11px
    height: 48px
    borderColor: "{colors.text-input-border}"
  footer:
    textColor: "{colors.ink-footer}"
    rounded: "{rounded.none}"
---

# Graff

## Overview

The Graff home page (graff.com, international English store) is a luxury jewellery storefront built around restraint. A thin bronze-gold utility strip carries "International", "Find A Boutique", "Client Services", "Book An Appointment" and a phone number; below it a white navigation bar sets a widely letter-spaced "GRAFF" wordmark beside six uppercase links (High Jewellery, Jewellery, Engagement & Bridal, Watches, Gifts, The House) and four icons. A split-screen hero of two photographs follows, then a white section titled "A World of Diamonds" with a row of product tiles (Butterfly Diamond Necklace, Earrings, Bracelet, Ring), and then a deep-green full-bleed campaign panel headed "Unmistakably Graff" with a gold "DISCOVER" button. The extracted page height is 4921px at a 1280px viewport.

The design language is quiet and photographic. Product images are cut-outs on a pale grey tile (`page-largest`, #f8f8f9) with a hairline of space and a one-line serif caption. Editorial photography is large and cropped tight on skin, hands and stone. There is almost no UI chrome: no heavy buttons, no icons beyond thin outlines, and a single warm metallic color to stand for gold.

Copy is formal and declarative: "The House of Graff has designed and crafted exceptional jewellery that is a testament to breathtaking beauty and unrivalled desirability." and "For over half a century, Graff has crafted the world's finest diamonds into timeless jewels." Calls to action are one or two words in uppercase ("SHOP NOW", "DISCOVER", "DISCOVER THE STORY").

The capture also shows a floating gold chat launcher at the right edge and the extractor hid cookie-consent and mini-cart modals before measuring; neither is brand UI and neither is documented as a token.

The hero is intentionally split into two photographs side by side with a small slide counter and arrows at the lower left, and a ruled "DISCOVER THE STORY +" link over the right image. This asymmetry, together with the metallic bronze utility strip at the very top, is the page's main moment of ornament; everything below it returns to white space and thin type.

## Colors

- `canvas` #ffffff is the page background; `page-largest` #f8f8f9 is the largest background area and the product tile fill.
- `ink` #000000 is the main text color and is used for headings, nav and body. `ink-3` #767676 is secondary text and the nav link color in the measured component. `ink-4` #333333 is footer text.
- `primary` #897358 is Graff's bronze-gold and the fill of the primary button and of the top utility strip; `on-primary` #ffffff is the label color on it. `ink-5` #7f6e59 is a slightly deeper gold-brown used for small text accents. The extraction also measured a 20%-alpha version of the gold (#89735833) used as a progress-rail track below the product carousel.
- `text-input-border` #bababa is the border of form fields.

Photography contributes a deep emerald green and sapphire blue in the campaign panel; these are image content, not measured UI colors, and should not be turned into tokens.

## Typography

Two families are loaded: ChronicleDisplay (a high-contrast display serif, weights 200 and 400) and OptimaNovaLTPro (a flared humanist sans, weight 400).

- `display` is ChronicleDisplay at 50px, weight 400, line height 50px and letter-spacing 2.1px (section headlines such as "Unmistakably Graff"); `display-mobile` is 40px with line height 40px and the same 2.1px tracking.
- `body` is OptimaNovaLTPro 17px, weight 400, line height 28px.
- `button` is OptimaNovaLTPro 14px, weight 400, line height 20px, letter-spacing 1.5px and uppercase.
- `nav` is OptimaNovaLTPro 15px, weight 400, line height 24px (the nav links are uppercase with open tracking in the capture).
- `input` is OptimaNovaLTPro 16px, weight 400, line height 24px.

By character count, the sans carries roughly three quarters of the text and the display serif the rest. Weights in use are 200, 300 and 400; there is no bold. Hierarchy comes from size, serif/sans contrast, case and tracking. Chronicle and Optima Nova are commercial fonts; reasonable substitutes are a Didone-leaning display serif and a flared humanist sans.

## Layout

The grid is a left-aligned wide container; the product row scrolls horizontally with an arrow at the right edge and a thin progress rail below. Section headings are left-aligned with a short paragraph and a text link ("Shop Now") under them. Campaign panels are full-bleed with text anchored bottom-left.

The measured spacing values are 2, 5, 10, 12, 15, 16, 18, 20, 24 and 30px (`s1`-`s10`). The header has a collapsed height of 64px (`--l-page-header-collapsed-height`), and the root also declares `--animation-shine` rgb(255, 255, 255) and `--animation-percent` 6%, which belong to a shine animation on imagery.

## Elevation & Depth

Almost flat. The only box shadow measured is `rgba(0, 0, 0, 0.2) 0px 1px 2px 0px, rgba(0, 0, 0, 0.1) 0px 1px 3px 0px`, used once (a small floating control). Separation is done with the pale tile fill, white space and thin rules; recorded border colors are #ffffff, #707070 and #bababa. The hero uses a straight split of two photographs rather than layered cards.

## Shapes

Corners are square. The button, link, nav, input and footer components all use 0px, and the only measured radius is a 2px value on two elements (`xs`). Product tiles are plain rectangles. The campaign panel and hero images are full-bleed rectangles.

## Components

- **button-primary**: fill `primary` (#897358), text `canvas`, OptimaNovaLTPro 14px uppercase with 1.5px tracking, height 48px, radius 0px ("SHOP NOW", "DISCOVER").
- **link**: same fill and type as the button when rendered as a block link; text links such as "Shop Now" and "DISCOVER THE STORY" are underlined or ruled uppercase labels with a small plus or arrow.
- **nav-link**: text `ink-3`, 15px OptimaNovaLTPro, 0px radius; the whole header bar is white in the capture.
- **text-input**: fill `canvas`, text `ink-3`, 16px, padding 12px 13px 11px, height 48px, 1px `text-input-border`, radius 0px.
- **footer**: text `ink-4`, radius 0px.
- **Product tile**: `page-largest` fill, centered cut-out image, serif caption in `ink` at the bottom-left.

## Design System Architecture

No public design-system or brand-guidelines page was found: the research fetch of the home page failed (see the recorded tool error) and the page itself was only measured. The de-facto system seen in the shipped CSS is small and platform-driven: the store uses classes with BEM-like prefixes (`b-modal`, `js-modal`, `b-minicart`, `l-page-header`) and only eleven root custom properties, none of them color tokens. The visual system therefore lives in compiled stylesheets; the values in this document are measurements, not published tokens.

## Do's and Don'ts

Do:
- Use bronze-gold #897358 sparingly: the utility strip, the primary button and one progress rail.
- Keep headlines in the display serif with 2.1px tracking and body in the flared sans.
- Let photography and pale tiles do the work; keep corners at 0px.
- Write calls to action as one or two uppercase words with open tracking.

Don't:
- Use bold weights; the family ships at 200 to 400.
- Add colored UI around the gemstone photography.
- Round buttons or add heavy shadows.
- Treat the chat launcher or cookie modals as brand components.

## Responsive Behavior

Measured at the mobile viewport: the h1 is 40px with line height 40px (versus 50px on desktop) and body text is 15px (versus 17px on desktop). Other mobile behavior (navigation collapse, tile counts) was not measured.

## Iteration Guide

1. Start with white and `page-largest` surfaces and black text.
2. Add a display-serif headline at 50px with 2.1px tracking and a one-sentence paragraph.
3. Use a single `button-primary` in bronze-gold with uppercase 14px tracking.
4. Show product on pale tiles with serif captions.
5. Confirm all radii are 0px (or the 2px `xs` exception) and no weight above 400 is used.
