---
version: alpha
name: Fairphone
category: "Consumer Electronics"
description: "Fairphone shop (fairphone.com): forest green #00433d brand ink on white and sand #f0f0ee surfaces, Bricolage Grotesque 600 headlines at 64px, DM Sans body at 14px, uppercase 14px buttons with 0px radius, 24px-radius product cards and a published sand and forest token scale."
colors:
  canvas: "#ffffff"
  page-body: "#f1f1f1"
  ink: "#646462"
  ink-strong: "#222220"
  primary: "#00433d"
  on-primary: "#f9f9f8"
  surface-sand: "#f0f0ee"
  text-on-sand-muted: "#babab7"
  surface-panel: "#f5f5f5"
  surface-panel-alt: "#f6f6f6"
  surface-mint: "#e9f6e9"
  nav-text: "#1f2021"
  text-input-text: "#000000"
  brand-accent: "#d8ff4f"
typography:
  display:
    fontFamily: "\"Bricolage Grotesque\", sans-serif"
    fontSize: 64px
    fontWeight: 600
    lineHeight: 61.44px
  display-mobile:
    fontFamily: "\"Bricolage Grotesque\", sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 33.28px
  subheading:
    fontFamily: "\"Bricolage Grotesque\", serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 31.2px
  body:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
  button:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 10.08px
    letterSpacing: 0.3px
    textTransform: uppercase
  nav:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.56px
  link:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20.8px
  input:
    fontFamily: >-
      -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Ubuntu, "Liberation Sans", Arial, "Odoo Unicode Support Noto", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 4px
  sm: 16px
  md: 20px
  lg: 24px
  xl: 40px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.surface-sand}"
    textColor: "{colors.text-on-sand-muted}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 48px
  button-outline-light:
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 48px
    borderColor: "{colors.on-primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.nav-text}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 0px 8px
    height: 40px
  card:
    backgroundColor: "{colors.surface-sand}"
    textColor: "{colors.nav-text}"
    rounded: "{rounded.lg}"
    padding: 20px
  footer:
    backgroundColor: "{colors.nav-text}"
    textColor: "{colors.on-primary}"
---

## Overview

The measured page is the Fairphone shop home page (https://www.fairphone.com/, title "Fairphone Shop | Fairphone"). Fairphone sells modular, repairable smartphones and accessories, and the page is a storefront: a full-bleed video hero over a forest meadow with the line "Switch to fair. Switch to better." and an outlined white button "THE FAIRPHONE (GEN. 6+) →"; a "Smartphone" label above a large grey rounded panel holding a white product card ("The Fairphone (Gen. 6+)", "Modular design with 12 replaceable parts. Five-year warranty. Software support till 2033.", "€649" and a "LEARN MORE →" outlined button); a row of four accessory cards (Card Holder, Finger Loop, Lanyard, Protective Case, priced €27.95 and €29.95, each with colour swatches and a circular arrow button); and a panel for "The Fairphone (Gen. 6+) with /e/OS", "Privacy by design", "App lounge for curated privacy-first apps".

The header is a transparent bar over the hero: the lowercase "fairphone" wordmark, links Shop, About, Fairphone Stories, Keep Club, Business and Support, then account, cart (with a green count badge) and a language selector (EN). Copy in the page markup is about longevity and repair ("An old battery shouldn't mean a new device. With Fairphone, repairs are simple enough for anyone. Swap one part in minutes"). The voice is warm and values-led, with short declarative headlines and soft, rounded containers around product content. The floating chat bubble and accessibility button at the right edge of the capture are widgets and are not brand UI.

## Colors

The palette is a published scale of "sand" neutrals and "forest" greens, with semantic names in the stylesheet.

- Primary `#00433d` (declared `--content-brand`, forest) is the brand colour: the product-card titles, links ("Repair your device"), nav links, prices and the border of the outlined "LEARN MORE" button. It is 1031 characters of measured text. On-primary `#f9f9f8` (declared `--content-brand-invert`) is the text and outline colour on the hero image and on dark areas (436 characters).
- Ink `#646462` (declared `--content-default-light`, `--sand-1100`) is the most-read text colour (1297 characters); ink strong `#222220` (declared `--content-default`) is the dark text (1069 characters).
- Canvas `#ffffff` is the page background (area 7547). Page-body `#f1f1f1` is a light grey body tone; surface panel `#f5f5f5` (area 2860) and `#f6f6f6` (2728) are the large rounded section panels; surface sand `#f0f0ee` (area 1240) is the card and primary-button fill; surface mint `#e9f6e9` (area 509) is a light green tint panel.
- Text on sand muted `#babab7` (declared `--sand-800`, `--content-default-lighter`) is the label colour on the sand-filled "SIGN UP" and "SUBSCRIBE" buttons.
- Nav text and footer background `#1f2021`; the footer is a dark block (area 1140).
- Brand accent `#d8ff4f` (declared `--content-brand-accent`) is a lime highlight in the stylesheet.
- Other declared scale values: forest-1200 `#01433d`, forest-1000 `#1b554f`, forest-500 `#a7eee8`, sand-500 `#e0e0dd`, sand-900 `#8d8d8a`, border-on-selected `#9eb84c`, border-on-error `#ec8e7b`.

Framework default colours such as `#6c757d` (Bootstrap grey, 79 characters), `#dc3545` and `#e83e8c` also exist in the root CSS (the CSS carries Odoo identifiers); they are not documented as brand tokens.

## Typography

Two variable families are loaded: Bricolage Grotesque (weight range 200 to 800) for headlines and DM Sans (100 to 1000) for body, navigation and buttons. The form fields use the system stack (-apple-system, Segoe UI, Roboto and others). DM Sans carries 3796 characters and Bricolage Grotesque 955.

Measured scale (desktop):

- Display: Bricolage Grotesque 600, 64px on 61.44px (line height below 1, tight).
- Subheading: Bricolage Grotesque 600, 24px on 31.2px.
- Body: DM Sans 400, 14px on 18.2px.
- Button: DM Sans 600, 14px, letter spacing 0.3px, uppercase.
- Nav: DM Sans 400, 16px on 18.56px.
- Link: DM Sans 600, 16px on 20.8px.
- Input: system sans 14px on 21px.

Frequent sizes by character count: 14px, 16px, 20px, 40px, 24px, 12px, 18px and 64px. The stylesheet declares generic sans-serif as the fallback.

## Layout

A centred content column with generous gutters inside a full-bleed hero. Product content sits inside large rounded grey panels (the panel pairs `#f5f5f5` and `#f6f6f6`) holding white product cards; accessories use a four-column card row with the swatches below the title. The footer is a dark block 891px high. Spacing values measured: 4, 8, 10, 12, 16, 20, 24, 32, 40 and 48px. Scroll height at 1280px: 8009px. The header sits over the hero in transparent state with white text.

## Elevation & Depth

No box-shadow is measured on the extracted roles (card, buttons, nav show none). Depth comes from tonal layering: white cards on grey panels on a white page, and white text over the video. The only translucent surface measured is `#ffffffe6` (white at 90%, area 37).

## Shapes

Two shape languages coexist. Buttons, inputs and nav are square (0px radius) and uppercase, while containers are heavily rounded. Declared radius tokens: 4px (xxs), 8px, 16px, 20px, 24px, 40px and full (500px), matching the measured set 4, 16, 20, 24, 40 and 9999px. The measured product card uses 24px with 20px padding.

## Components

- Primary button (SIGN UP and SUBSCRIBE): fill `#f0f0ee`, label `#babab7`, DM Sans 14px weight 600 uppercase with 0.3px tracking, padding 0px 20px, height 48px, 0px radius.
- Outlined light button: transparent, 1px solid `#f9f9f8` border and text, same type and height, used over the hero image ("THE FAIRPHONE (GEN. 6+)" with an arrow).
- Outlined brand button: forest `#00433d` border and label ("LEARN MORE" with an arrow) on a white card.
- Product card: white or sand surface, 24px radius, 20px padding, forest title in Bricolage Grotesque, price in forest, colour-swatch dots, circular arrow button.
- Nav: DM Sans 16px, text `#1f2021` on light, white over the hero; 72px high on desktop, and the mobile bar measures 56px high.
- Text input: 40px high, 0px radius, padding 0px 8px, system sans 14px.
- Link: DM Sans 600 16px in forest.

## Design System Architecture

No public design system or brand guideline was found: the page https://www.fairphone.com/ was opened and has no link to a design system, brand guideline, press kit or developer GitHub organisation, so none is cited. The shipped CSS shows a real token system on the root: about 400 custom properties including semantic content tokens (`--content-default`, `--content-default-light`, `--content-brand`, `--content-brand-invert`, `--content-brand-accent`, `--content-on-error`), border tokens (`--border-default`, `--border-on-selected`, `--border-on-error`, `--border-width-sm: 2px`, `--border-width-lg: 4px`), a radius scale (`--border-radius-0` to `--border-radius-600` and `--border-radius-full: 500px`) and colour scales named sand-100 to sand-1100 and forest-400 to forest-1200. The CSS carries Odoo identifiers (the input font stack contains "Odoo Unicode Support Noto" and the root has `--o-*` variables),.

## Do's and Don'ts

Do:
- Use forest `#00433d` for titles, prices, links and the outline of secondary buttons; use `#f9f9f8` on photography.
- Keep buttons square, uppercase and 48px high, and containers rounded (24px on cards).
- Set headlines in Bricolage Grotesque 600 with a line height just below the font size.
- Use sand and light-grey panels to group products.

Don't:
- Use Bootstrap or Odoo default colours (`#6c757d`, `#dc3545`, `#e83e8c`) as brand colours.
- Round buttons; the measured buttons are 0px.
- Add drop shadows; none are measured.
- Document the chat bubble or accessibility widget as brand components.

## Responsive Behavior

Measured with the 390px mobile pass: h1 "Switch to fair. Switch to better." is Bricolage Grotesque 32px weight 600 on 33.28px, colour `#f9f9f8`; h2 "Real impact. Real innovation." is 32px 600 in `#00433d`; body text is DM Sans 14px in `#646462`; the SIGN UP button keeps its 48px height, 14px type and 0px radius; the nav bar measures 56px high and shows a cart count and language ("0 en"). Frequent mobile font sizes by character count: 14px, 16px, 24px, 20px, 18px and 32px. Reflow of the panels, card row and menu at mobile width is not measured.

## Iteration Guide

1. Start with white, `#f5f5f5` panels and sand `#f0f0ee` cards; make forest `#00433d` the brand colour.
2. Use Bricolage Grotesque 600 for headlines (64px desktop, 32px mobile) and DM Sans for everything else.
3. Build buttons as 48px-high, 0px-radius, uppercase 14px, outlined in forest or in `#f9f9f8` on photography.
4. Wrap product cards at 24px radius with 20px padding and a circular arrow button.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=fairphone --url=https://www.fairphone.com --force --no-motion` and run `node web/scripts/verify-designs.mjs --slug=fairphone`.
