---
version: alpha
name: CHANEL
category: "Luxury"
description: "CHANEL's US home page: a white #ffffff header over a stack of full-bleed campaign images, #1d1d1d ink, uppercase abchanel-2022 captions at 30px/600 with 1.8px tracking, 11px/600 'SEE MORE' buttons 48px tall with square 0px corners (hover #f1f1f1), Helvetica 14px/300 body text in #767676, and no color beyond black, white and greys."
colors:
  canvas: "#ffffff"
  ink: "#1d1d1d"
  primary: "#1d1d1d"
  black: "#000000"
  ink-secondary: "#767676"
  ink-tertiary: "#333333"
  ink-body-element: "#454545"
  on-image: "#f9f9f9"
  hover-fill: "#f1f1f1"
  border: "#ececec"
  tertiary-medium: "#d8d8d8"
  tertiary-strong: "#b6b6b6"
  disabled: "#949494"
  error: "#cd0000"
typography:
  display:
    fontFamily: abchanel-2022, arial-adjusted-abchanel-2022, arial, helvetica, sans-serif
    fontSize: 30px
    fontWeight: 600
    lineHeight: 38px
    letterSpacing: 1.8px
    textTransform: uppercase
  eyebrow:
    fontFamily: abchanel-2022, arial-adjusted-abchanel-2022, arial, helvetica, sans-serif
    fontSize: 12px
    fontWeight: 600
    lineHeight: 16px
    letterSpacing: 0.7px
    textTransform: uppercase
  nav:
    fontFamily: abchanel-corpo, arial-adjusted-abchanel-corpo, arial, helvetica, sans-serif
    fontSize: 12px
    fontWeight: 600
    lineHeight: 18px
    textTransform: uppercase
  button:
    fontFamily: abchanel-2022, arial-adjusted-abchanel-2022, arial, helvetica, sans-serif
    fontSize: 11px
    fontWeight: 600
    lineHeight: 16px
    letterSpacing: 0.7px
    textTransform: uppercase
  body:
    fontFamily: helvetica, open-sans, sans-serif-light, sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 18px
    letterSpacing: 0.1px
  input:
    fontFamily: helvetica, open-sans, sans-serif-light, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.1px
rounded:
  none: 0px
spacing:
  s1: 5px
  s2: 8px
  s3: 9px
  s4: 15px
  s5: 18px
  s6: 20px
  s7: 23px
  s8: 24.4px
  s9: 24.83px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    border: "1px solid #1d1d1d"
    padding: 9px 18px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.hover-fill}"
    textColor: "{colors.primary}"
  button-outlined-on-image:
    textColor: "{colors.on-image}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    border: "1px solid #f9f9f9"
    padding: 9px 18px
    height: 48px
  header:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    height: 18px
---

## Overview

The measured page is CHANEL's US home page (finalUrl `https://www.chanel.com/us/`, title "CHANEL Official Website: Fashion, Fragrance, Beauty, Watches, Fine Jewelry | CHANEL"). It is close to a pure image feed. An 8px black strip tops the page, then a white header with the CHANEL wordmark centred, search, account, wishlist and bag icons at right, and a row of uppercase category links (HAUTE COUTURE, FASHION, HIGH JEWELRY, FINE JEWELRY, WATCHES, EYEWEAR, FRAGRANCE, MAKEUP, SKINCARE, ABOUT CHANEL).

Below the header, the page is a vertical stack of full-bleed campaign photographs, each with a centred caption at the bottom: a small uppercase category eyebrow, a 30px uppercase title in white, and a small "SEE MORE" button. In the capture the sequence is: a snowy forest with two models in tweed and quilted bags ("COCO NEIGE 2026 COLLECTION", under FASHION), a Paris – St. Moritz perfume bottle with gift boxes in snow ("PARIS – ST. MORITZ", FRAGRANCE), a model seated on gift boxes ("GIVE YOUR BEST, GIVE CHANEL", FRAGRANCE AND BEAUTY), a profile portrait for COCO CRUSH, a makeup portrait ("HOLIDAY 2026 MAKEUP COLLECTION"), a watch movement close-up ("CALIBRE 12.1" with a "DISCOVER" button), and more below. The extraction recorded 6697px of continuous media between the header and the footer bands.

There is almost no body copy; the only paragraph text measured is small grey service text such as "CHANEL Client Care is available Monday to Friday…". The tone is the photography: winter whites, tweed, gold, black.

## Colors

The page is achromatic. Colour roles are exposed as CSS custom properties.

- **canvas `#ffffff`** (`--color-background`): the header and the page background.
- **ink / primary `#1d1d1d`** (`--color-primary-variant`): header text, "SEE MORE" labels and borders, form text.
- **black `#000000`** (`--color-primary`): the 8px top strip and the logo colour (`--cc-header-logo-color: var(--color-primary,#000)`).
- **ink-secondary `#767676`** (`--color-secondary-light`): the most-read text colour, used for service and footer copy.
- **ink-tertiary `#333333`** (`--color-secondary`) and **ink-body-element `#454545`** (`--color-new-body-element`).
- **on-image `#f9f9f9`** (`--color-background-variant`, `--color-inverted-white-primary-variant`): the off-white of the outlined "SEE MORE" button on photographs.
- **hover-fill `#f1f1f1`** (`--color-tertiary-extra-light`): the measured hover background of the white "SEE MORE" button.
- **border `#ececec`**, **tertiary-medium `#d8d8d8`**, **tertiary-strong `#b6b6b6`**: light greys for rules.
- **disabled `#949494`** (`--color-primary-disable`) and **error `#cd0000`** (`--color-error`; `--color-inverted-error: #ff2a2a` on dark).

White caption text (`#ffffff`) is the second most-read colour because every campaign title sits on a photograph.

## Typography

Three families appear. **abchanel-2022** (loaded at 600) sets captions and buttons; **abchanel-corpo** (400 and 600) sets the header; **helvetica** (with open-sans and a light sans fallback) sets body and form text. By characters, helvetica leads (461), then abchanel-2022 (368) and abchanel-corpo (194).

- **display**: abchanel-2022 30px/38px, weight 600, uppercase, 1.8px tracking, the campaign titles over imagery.
- **eyebrow**: abchanel-2022 12px/16px, weight 600, uppercase, 0.7px tracking, the category line above each title (FASHION, FRAGRANCE).
- **nav**: abchanel-corpo 12px/18px, weight 600, uppercase, the header category links.
- **button**: abchanel-2022 11px/16px, weight 600, uppercase, 0.7px tracking, "SEE MORE".
- **body**: helvetica 14px/18px, weight 300, 0.1px tracking (`--font-size-body-default: 0.875rem`, `--line-height-body-default: 1.125rem`, `--font-weight-body-default: 300`, `--letter-spacing-body-default: 0.00625rem`).
- **input**: helvetica 14px/18px, weight 400, 0.1px tracking.

Only five sizes appear on the page (14, 12, 30, 11 and 16px), and only two weights matter: 600 for every uppercase brand line and 300 for reading text. All brand type is uppercase and positively tracked. The text tokens also define a lead paragraph (1rem, line height 1.4375rem, weight 300), a "chapo" line height of 1.6875rem, small text (0.75rem) and extra-small text (0.6875rem).

## Layout

At 1280px the page is 7044px tall. The header band is 133px with content from x=23 to x=1257, under an 8px black strip. The rest is a single 6697px media band in which captions are centred between x=352 and x=928; images run edge to edge with no gutters between them. The grid tokens set inline margins at 5.625% of the viewport (`--grid-inline-margins`) and a 1rem gap (`--grid-gap`); the header limit is 56px (`--cc-header-limit`). Measured gaps are mostly 5px (header icons and links) with 15px, 18px and 32px; buttons use 9px 18px padding.

## Elevation & Depth

Nothing is elevated: no box-shadows, no overlays beyond the photographs themselves, no cards. Depth comes only from the photography and from white caption text sitting directly on the images. Each image fills the full width, so the page reads as a slideshow in vertical order.

## Shapes

Every element is square. The extraction's border-radius list is empty, meaning every rendered element computes a 0px radius, including the "SEE MORE" buttons and the header. Borders are 1px and only appear on buttons (`#1d1d1d` on white, `#f9f9f9` on images) and on one `#ececec` rule.

## Components

- **Primary button** ("SEE MORE" on white): white fill, 1px `#1d1d1d` border, `#1d1d1d` abchanel-2022 11px/600 uppercase label tracked 0.7px, `9px 18px` padding, 48px tall, square. Hover changes the fill to `#f1f1f1`.
- **Outlined button on image**: transparent, 1px `#f9f9f9` border and label, same type and geometry.
- **Campaign caption**: centred at the bottom of each image: 12px eyebrow, 30px uppercase title tracked 1.8px, then the button.
- **Header**: white, centred black wordmark, icon actions at right, one row of abchanel-corpo 12px/600 uppercase category links.
- **Text input**: Helvetica 14px, `#1d1d1d`, no box.

## Design System Architecture

No public CHANEL design-system documentation could be opened; the about page on chanel.com returned HTTP 403. The shipped page exposes 74 custom properties on `:root` that form a compact semantic layer: colour roles (`--color-primary`, `--color-primary-variant`, `--color-secondary`, `--color-secondary-light`, `--color-tertiary-*`, `--color-background`, `--color-background-variant`, `--color-error`, and `--color-inverted-*` counterparts for dark contexts), text styles split into size, line-height, weight and letter-spacing tokens per role (`--font-size-body-default`, `--line-height-chapo`, `--font-weight-lead-paragraph`, `--letter-spacing-body-spaced-strong`), grid settings (`--grid-inline-margins`, `--grid-gap`) and component variables prefixed `--cc-` for the header and safe areas. A Tailwind-style default font stack (`--font-sans`, `--default-font-family`) is also present. Rebuild with the same role names and keep brand type (abchanel) separate from reading type (Helvetica).

## Do's and Don'ts

**Do**
- Let full-bleed campaign photography carry the page, one image per story.
- Set brand lines in uppercase abchanel at weight 600 with positive tracking (1.8px at 30px, 0.7px at 11–12px).
- Use Helvetica 14px/18px at weight 300 for reading text.
- Keep every button square, 48px tall, with a 1px border.
- Stay in black, white and greys.

**Don't**
- Don't add colour, gradients, shadows or rounded corners.
- Don't set long copy in the abchanel families.
- Don't treat the cookie consent footer hidden during measurement as brand UI.

## Responsive Behavior

Not measured: the extractor's mobile pass received an "Access Denied" error page (Times, with an edgesuite.net error reference) instead of the site, so no mobile values are recorded. The stylesheet's breakpoints are mostly `min-width 961px` (1422 rules), `min-width 601px` (872), `max-width 599px` (108) and `min-width 1201px` (67). How the header categories and captions change at these widths is not measured.

## Iteration Guide

1. Start with a white header (black wordmark, uppercase category row) and an 8px black strip above it.
2. Stack full-width images with centred captions: eyebrow, 30px uppercase title, square "SEE MORE" button.
3. Use abchanel-2022 600 uppercase with tracking for every brand line; Helvetica 300 for any paragraph.
4. Keep colour to `#000000`, `#1d1d1d`, `#767676`, `#f9f9f9` and white; use `#f1f1f1` for hover.
5. Keep all shapes square.
6. Re-measure the mobile site without the bot block, and measure product pages before adding tokens for product grids or forms.
