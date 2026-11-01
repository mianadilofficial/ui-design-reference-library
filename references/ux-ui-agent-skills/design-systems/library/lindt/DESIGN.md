---
version: alpha
name: "Lindt"
category: "Food & Beverage"
description: "Lindt Switzerland (lindt.ch/de, Lindt Schokolade seit 1845): Optima display and button type with Roboto body, white canvas #ffffff over a #f2f2f2 page tone, gold #917236 square buttons, grey ink #555555, bright red #e91138 promo labels, product-photo tiles."
colors:
  canvas: "#ffffff"
  page-largest: "#f2f2f2"
  ink: "#555555"
  primary: "#917236"
  on-primary: "#ffffff"
  ink-4: "#595959"
  ink-5: "#e91138"
  ink-6: "#cba152"
typography:
  display:
    fontFamily: Optima, Helvetica, Arial, sans-serif
    fontSize: 42px
    fontWeight: 400
    lineHeight: 46.2px
  heading:
    fontFamily: Optima, Helvetica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 30.8px
  subheading:
    fontFamily: Optima, Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 22px
    textTransform: uppercase
  body:
    fontFamily: Roboto, Helvetica, Arial, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Optima, Helvetica, Arial, sans-serif
    fontSize: 15px
    fontWeight: 600
    lineHeight: 21px
    letterSpacing: 1px
    textTransform: uppercase
  input:
    fontFamily: Roboto, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.8571px
rounded:
  xs: 10px
  sm: 40px
  none: 0px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 10px
  s6: 10.5px
  s7: 11px
  s8: 12px
  s9: 14px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 61px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 61px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 0px 20px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 0px 35px 0px 0px
    height: 36px
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

## Overview

The measured site is the Swiss German storefront of Lindt, whose page title is "Lindt Schokolade seit 1845 | Lindt CH". The requested URL was lindt.com and the browser landed on https://www.lindt.ch/de/, so the DESIGN.md describes the Swiss shop and the name is kept as Lindt. The capture is a Christmas-season shop front: a thin top strip announcing free-delivery progress ("Es fehlen noch CHF 80.00 für die kostenlose Lieferung"), utility links (MyLindt Bonus Club, Karriere, Kontakt, Geschäftskunden, a Schweiz / Suisse (CHF) selector, a language selector), the script Lindt logo with "Maître Chocolatier depuis 1845", a search field, store locator and account icons, a rotating hero banner with a chef, a row of tabs (WEIHNACHTEN, BESTSELLER, PERSONALISIERT), a carousel of five products with prices in CHF, the heading "Jetzt Schokolade bequem online bestellen", and an eight-tile category grid.

The category tiles are photographed on saturated red and green backdrops with gold ribbons, labelled in capitals (DUBAI STYLE CHOCOLADE, LINDOR, TAFELN, PRALINEN, PERSONALISIERTE GESCHENKE, LINDOR PICK & MIX, NEUHEITEN, GESCHENKIDEEN). The tone is a warm, premium, gift-oriented retail voice in German. A newsletter dialog covered the upper capture on first load; it is a popup and is excluded from the documented UI.

Product packaging provides most of the color on the page. The advent calendars, Lindor tins and teddy bears in the carousel are red, gold and blue, so the interface itself is kept neutral (white, grey, gold) to let packaging stand out. Prices are shown in gold directly under each product name, and the small bold uppercase flags above names (WIEDER VERFÜGBAR, PERSONALISIERBAR, MYLINDT: 15% RABATT) are the only places where color labels are applied to product cards. Copy is addressed to the shopper in the polite German form ("Jetzt Schokolade bequem online bestellen", "Jetzt zum Lindt Newsletter anmelden") and actions are phrased as short imperatives in capitals.

## Colors

Backgrounds are neutral: white #ffffff is the page canvas and a light grey #f2f2f2 is the largest area measured (653 against 363 for white), seen behind sections of the shop. The brand color is a muted gold-brown, #917236, which fills the call-to-action buttons (area 73), colors the nav and product prices and is the body-level text color on the root element. A lighter gold, #cba152, appears in 9 characters of text. Running text is a medium grey, #555555 (4312 characters, the most read), with #595959 for secondary text, white over photography (1666), and a saturated red #e91138 for promotional flags such as the "MYLINDT: 15% RABATT" label (38 characters).

Borders measured: white (#ffffff), the gold #917236, #cccccc, #555555 and #e5e5e5. A translucent near-white, #fcfcfce6, backs the round carousel arrows.

- Canvas #ffffff; page-largest #f2f2f2.
- Ink #555555; ink-4 #595959.
- Primary #917236 with on-primary #ffffff.
- Promo red #e91138; light gold #cba152.

## Typography

Two families carry the system: Optima (4484 characters) for headings, product category labels and buttons, and Roboto (2947) for running text, form fields and navigation. An icon font called lindt-icons is also loaded. Optima is loaded at 400 and 600; Roboto at 300, 400 and 700.

The display size is Optima 42px at weight 400 and 46.2px line-height (the hero headline "Persönlicher Lindt TEDDY", white on the image). The section heading is Optima 28px on 30.8px. The uppercase subheading is Optima 20px on 22px, weight 400. Body copy is Roboto 15px on 24px, inputs are Roboto 16px on 22.8571px, and the button label is Optima 15px, weight 600, 1px letter-spacing, uppercase, line-height 21px. The most common sizes by characters are 18px (2579), 15px (2291), 13px (1075), 20px (597), 14px (391) and 42px (180). Headings carry no tracking; only buttons are spaced. Optima and Roboto are loaded on the page; whether Optima is licensed or a system font is not recorded, so no substitute is named.

## Layout

Measured at 1280px the page is 4567px tall. A grid of four equal tiles per row holds the categories, each a square-ish photograph with a centred uppercase label beneath. The product carousel shows five cards in a row with arrows at both ends, a small bold uppercase flag above the name, a centred name in two or three lines and a gold price. The utility strip and the header are full width. Spacing values measured: 2px, 4px, 5px, 8px, 10px, 10.5px, 11px, 12px, 14px and 15px. Buttons are 61px tall (48px for the subscribe style); text inputs are 36px tall.

## Elevation & Depth

One shadow value was measured, rgba(0, 0, 0, 0.2) 0px 10px 10px 0px (weight 6), on the round carousel arrow buttons with their translucent white fill. Dialogs sit above a dimmed page. Product cards and category tiles carry no shadow in the data; their depth comes from the photography.

## Shapes

Buttons and form fields are square: the primary and secondary buttons, the links, the navigation and the text input all compute to 0px radius. Rounded forms are limited to the carousel arrows (40px, a full circle on a 40px-tall control) and a small element at 10px. This makes the gold rectangular buttons the main shape signature.

## Components

- **Button primary and secondary**: gold #917236 fill, white text, Optima 15px at 600, uppercase, 1px tracking, 61px tall, 0px radius. Examples measured: JETZT PICK & MIX GESTALTEN, JETZT PERSONALISIEREN, LINDOR ENTDECKEN, JETZT GENIESSEN, MEHR ERFAHREN.
- **Link**: gold text at the Optima 20px uppercase subheading style with 20px horizontal padding.
- **Nav and nav-link**: white background, gold text in Roboto 15px.
- **Text input**: white fill, #555555 text, Roboto 16px, 36px tall, square.
- **Carousel arrow**: 40px circle with a translucent white fill and soft shadow.
- **Product card**: image, small uppercase flag, name, gold price in CHF.
- **Footer**: #555555 text; the newsletter prompt "Jetzt zum Lindt Newsletter anmelden" is present.

## Design System Architecture

No public Lindt design system or brand guideline was found on the pages opened. The extraction recorded no root CSS variables (rootVars is empty), so the site does not expose named design tokens. The de-facto system is a fixed set of fonts (Optima, Roboto, lindt-icons), a single gold #917236 for actions and prices, and a neutral grey ladder. Source page: https://www.lindt.ch/de/.

## Do's and Don'ts

- Do use the gold #917236 for every action and for prices, with white button text.
- Do set headings in Optima 400 and keep body in Roboto.
- Do keep buttons square, uppercase and spaced by 1px.
- Do reserve red #e91138 for small promotional flags.
- Do photograph products on deep red and green seasonal backdrops.
- Don't round buttons or inputs; only carousel arrows are round.
- Don't use heavy shadows on cards.
- Don't present popups or the newsletter dialog as brand components.

## Responsive Behavior

The 390px mobile pass recorded type and role styling only. The hero headline stays 42px Optima at 46.2px line-height, the heading remains 28px at 30.8px, mobile body copy is Roboto 13px on 18.5714px, the button stays Optima 15px at weight 600 with the #917236 fill and 0px radius, and the mobile navigation strip reads 13px at weight 600. Layout changes, column counts and breakpoints were not measured.

## Iteration Guide

1. Start with white and #f2f2f2 surfaces, #555555 text and #917236 as the only action color.
2. Set headings in Optima 400 at 42px, 28px and 20px; body in Roboto 15px.
3. Build buttons as square gold rectangles, 61px tall, uppercase with 1px tracking.
4. Photograph products on red or green seasonal backdrops with gold detail.
5. Verify: node web/scripts/verify-designs.mjs --slug=lindt.
