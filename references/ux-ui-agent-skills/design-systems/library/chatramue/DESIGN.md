---
version: alpha
name: ChaTraMue
category: "Thai Brands"
description: "ChaTraMue (Original Thai Tea Since 1945): a white, near-flat storefront set entirely in Nunito at weight 300, with charcoal #3a3a3a actions, #333232 body text, near-square 0px and 2px corners and no shadows, letting red and green tea packaging supply all the color."

colors:
  canvas: "#ffffff"
  page-largest: "#f7f7f7"
  ink: "#333232"
  primary: "#3a3a3a"
  on-primary: "#ffffff"
  surface-footer: "#f6f6f6"
  ink-black: "#000000"
  border-input: "#cccccc"
typography:
  display:
    fontFamily: Nunito, sans-serif
    fontSize: 33.6px
    fontWeight: 300
    lineHeight: 40.32px
  display-mobile:
    fontFamily: Nunito, sans-serif
    fontSize: 25.2px
    fontWeight: 300
    lineHeight: 30.24px
  subheading:
    fontFamily: Nunito, sans-serif
    fontSize: 32px
    fontWeight: 300
    lineHeight: 38.4px
  body:
    fontFamily: Nunito, sans-serif
    fontSize: 18px
    fontWeight: 300
    lineHeight: 27px
  button:
    fontFamily: Nunito, sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 21px
    letterSpacing: 1.12px
    textTransform: uppercase
  link:
    fontFamily: Nunito, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
rounded:
  xs: 2px
  none: 0px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 3.2px
  s5: 4px
  s6: 5px
  s7: 6px
  s8: 8.8px
  s9: 10px
  s10: 11px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 18px
    height: 46px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 10px 28px 10px 18px
    height: 41px
    borderColor: "{colors.border-input}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
    padding: 0px 55px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 10px 18px
    height: 46px
    borderColor: "{colors.border-input}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 45px 0px 35px
---

# ChaTraMue — Design System

## Overview

ChaTraMue presents itself as "Original Thai Tea Since 1945" on a storefront that gets out of the way of its packaging. The measured page is a white, quiet shop: a pale hero photograph of a red tin of tea mix next to a jug of milk being poured into iced tea, a centered one-paragraph brand statement, a single featured product with a quantity box, and a grid of tea packets. The words carry the heritage ("For over 80 years, ChaTraMue has been Thailand's original Thai tea brand") while the interface stays almost neutral, so the red and green foil packs, which are the only saturated things on the page, do the selling. Product photography is shot on pale backgrounds with soft contact shadows; the hero uses a washed wooden tabletop.

The tone of the copy, confirmed on the home page and the Our History page, is nostalgic but assured: honesty, quality and care "in every cup". The site calls the product "Number One Brand Tea" in a serif italic hero overlay, which is part of the photographic artwork rather than the interface type. The interface itself uses a single sans family at a light weight and tracks its small caps labels wide, which gives a calm, boutique feel.

## Colors

The palette is neutral on purpose. The page canvas is `{colors.canvas}` (#ffffff), with two near-white section tints: `{colors.page-largest}` (#f7f7f7), the largest measured background area, and `{colors.surface-footer}` (#f6f6f6), used for the footer. Body copy is `{colors.ink}` (#333232), the most-read text color, and headings and navigation use `{colors.primary}` (#3a3a3a), a soft charcoal that is also the fill of the one detected call-to-action, the newsletter SUBSCRIBE button, which carries `{colors.on-primary}` (#ffffff) text. Pure black `{colors.ink-black}` (#000000) appears only on a few input and secondary-button labels, and `{colors.border-input}` (#cccccc) draws input and secondary button outlines.

There is no brand red or green in the interface layer. Those colors live in photographs of packaging. A designer extending this system should resist adding a bright accent to buttons: the measured primary action is charcoal, and the sold-out state is conveyed by reducing opacity (the hover probe shows the SOLD OUT button at 0.5 opacity with a #3a3a3a outline on white), not by recoloring.

## Typography

Everything is set in Nunito with a generic sans-serif fallback. Three weights load (300, 400 and 700), but the page is overwhelmingly weight 300: the display style `{typography.display}` is Nunito 300 at 33.6px on a 40.32px line (the "Original Thai Tea Since 1945" heading), reduced to `{typography.display-mobile}` at 25.2px on 30.24px at a 390px viewport. Product titles use `{typography.subheading}` at 32px and 38.4px leading. Body copy `{typography.body}` is 18px on 27px, and links use `{typography.link}` at 16px on 24px.

Buttons use `{typography.button}`: 14px, uppercase, with 1.12px letter spacing. The section label "SHOP OUR TEA" and similar eyebrows follow the same wide-tracked uppercase pattern (measured letter spacing values of 1.8px at 18px, 1px at 11.2px and 1px at 12px appear in the frequency data). Light weight plus open tracking is the signature; do not switch headings to bold.

Font substitutes: Nunito is the delivered webfont, so no substitute is required on this site. If it fails to load, the declared fallback is the platform sans-serif; keep weight 300 for headings so the rhythm survives.

## Layout

The page is a single centered column of generous bands. The header is a white bar with the logo at left, four centered links (Shop, Our History, Wholesale, Contact) and search, account and cart icons at right; the nav container carries horizontal padding of 55px. Below it the hero is a full-bleed photograph, then a narrow centered text block, then a two-column product feature with the gallery at left and the buy box at right, then a section label and a grid of product cards. Whitespace is large and vertical: the footer padding is 45px at the top and 35px at the bottom, and section transitions are mostly empty white.

The spacing scale extracted from the live CSS is small and irregular (1px, 2px, 3px, 3.2px, 4px, 5px, 6px, 8.8px, 10px, 11px): it describes tight component internals, not page rhythm. Page rhythm comes from the 10px / 18px control padding, the 55px header padding and generous section margins.

## Elevation & Depth

The interface is flat. No box shadows were measured on any interface element, and there are no cards with borders or elevation. Depth comes entirely from photography: soft shadows baked into packshots, the shallow depth of the hero image, and the contrast of a dark tin against a pale tabletop. Section separation uses the two near-white tints `{colors.page-largest}` and `{colors.surface-footer}` rather than lines or shadows. The selected thumbnail in the product gallery uses a solid dark outline, which is the only emphasis device besides opacity.

## Shapes

Corners are almost square. The rounded scale has two values: `{rounded.none}` (0px) and `{rounded.xs}` (2px). The primary SUBSCRIBE button is square on the side that touches the email field and carries a 2px radius on its outer edge (measured as "0px 2px 2px 0px"), and the paired text input has the mirrored radius. Secondary buttons, inputs and the SOLD OUT status tag use `{rounded.xs}`. Do not introduce pill buttons or large radii; the squareness reads as printed-label and apothecary.

## Components

**Primary button.** `{components.button-primary}`: charcoal `{colors.primary}` fill, white label, uppercase 14px Nunito with 1.12px tracking, 10px 18px padding, 46px tall, square corners. It is used for the newsletter SUBSCRIBE action next to a text input.

**Secondary button.** `{components.button-secondary}`: white fill, black 16px label, a #cccccc outline, 2px radius, 10px 28px 10px 18px padding and 41px height. The product page's SOLD OUT button follows the outline pattern and sits at reduced opacity.

**Text input.** `{components.text-input}`: white fill, 16px text, #cccccc border, 2px radius, 46px tall, 10px 18px padding, matching the button height so the pair aligns.

**Navigation.** `{components.nav}` is a white bar with `{components.nav-link}` links in the 18px body style and charcoal color; links are plain text with no underline or pill treatment at rest. **Footer.** `{components.footer}` uses the #f6f6f6 tint with #333232 text. **Link.** `{components.link}` is charcoal 16px with a charcoal border color token for its underline treatment.

## Design System Architecture

No public design system, token package or brand guideline for the storefront was found on the pages opened (https://www.chatramue.com/ and https://www.chatramue.com/pages/our-history); there is no official public system. The de-facto system can be read from the shipped page: a minimal CSS custom property set (focus outline variables only), a single webfont family, a handful of repeating control sizes, and a very short color list. The two root variables are a focus outline of 0.2rem and an offset of 0.3rem, which means interactive focus styling is defined centrally but color is not tokenized. The navigation exposes Shop, Our History, Wholesale and Contact pages; the brand voice lives in the copy and the photography, not in a component library. Treat this document as a description of a restrained retail skin rather than a reusable framework.

## Do's and Don'ts

- Do keep the canvas white and let packaging supply color.
- Do set headings in Nunito 300 and use uppercase, widely tracked labels for buttons and eyebrows.
- Do keep corners at 0px or 2px.
- Do show unavailability by reducing opacity rather than switching color.
- Don't add a saturated accent color to buttons; the measured primary is #3a3a3a.
- Don't use shadows on interface elements; none were measured.
- Don't use bold display headings; the live weight is 300.
- Don't treat the serif italic hero overlay as interface type; it is part of the photograph.

## Responsive Behavior

The page was measured at 1280px desktop and at a 390px mobile viewport. The only typographic change captured for the headline is `{typography.display}` (33.6px) stepping down to `{typography.display-mobile}` (25.2px). Only the headline step-down was recorded at the narrow viewport; layout collapse was not measured, so verify it before copying it. Measured control heights are 46px for primary controls and 41px for secondary ones. At desktop width the image bands are full-bleed and text blocks are centered with generous side margins.

## Iteration Guide

1. Start from the white canvas and the two near-white tints; only introduce color through photography.
2. Build every control at 46px or 41px tall with the 10px 18px padding pattern.
3. Use Nunito 300 for display, body and links, 14px uppercase with 1.12px tracking for buttons.
4. Keep radii at 0px or 2px and remove shadows.
5. When adding a new page, mirror the hero-photo, centered paragraph, product feature, product grid sequence and keep the copy proud, warm and short.
6. Verify any new color against the measured list: #ffffff, #f7f7f7, #f6f6f6, #333232, #3a3a3a, #000000, #cccccc.
