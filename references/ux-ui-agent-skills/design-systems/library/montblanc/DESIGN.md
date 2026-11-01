---
version: alpha
name: Montblanc
category: "Luxury"
description: "Montblanc's US homepage is a white (#ffffff) and black gallery-style retail page set in the proprietary MontblancType at 14px body and tracked 18px uppercase display, with square 0px black and outlined 48px buttons, grey and cream bands, and product photography as the only colour."

colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-soft: "#f2f2f2"
  surface-warm: "#f3f1ec"
  ink-card: "#272727"
  ink-muted: "#6e6e6e"
  ink-menu: "#444444"
typography:
  display:
    fontFamily: MontblancType, arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: 1.5px
    textTransform: uppercase
  display-mobile:
    fontFamily: MontblancType, arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 1.5px
    textTransform: uppercase
  heading:
    fontFamily: MontblancType, arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: 1.5008px
    textTransform: uppercase
  body:
    fontFamily: MontblancType, arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.5008px
  link:
    fontFamily: MontblancType, arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 1px
    textTransform: uppercase
rounded:
  xs: 160px
  none: 0px
  pill: 9999px
spacing:
  s1: 1.01px
  s2: 4px
  s3: 7px
  s4: 8px
  s5: 8.96px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 14.08px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 12px 50px
    height: 48px
    borderColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 12px 50px
    height: 48px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
---

# Montblanc

## Overview

The measured page is montblanc.com/en-us. It is a quiet, gallery-like e-commerce front page: a white canvas (`#ffffff`), black ink (`#000000`), two light neutral bands (cool `#f2f2f2` and a warm cream `#f3f1ec`), and photography doing all of the colour work: a black Extreme-leather briefcase in a wood-panelled railway-style interior in the hero; red, grey and green bags on the cream product band; yellow, orange and sage pens against soft studio gradients. Interface chrome is almost entirely black, white and grey.

The top of the page has a thin promotional strip ("JOIN OUR COMMUNITY FOR EXCLUSIVE ACCESS AND INSIGHTS", underlined, with a close icon), then a header with an EN/ES switch, the black bold MONTBLANC wordmark centred, and search, account, wishlist and bag icons; below that a single-row uppercase nav (NEW IN, GIFTS, LUXURY PENS, REFILLS & STATIONERY, BAGS & SMALL LEATHER GOODS, TRAVEL, ACCESSORIES, WATCHES, FRAGRANCES, HIGH ARTISTRY, DISCOVER). The hero reads "FALL WINTER COLLECTION / Style Updates For The New Season" with an outlined button "Discover the Collection". Then a horizontal product strip with prices (for example "Writing Traveler Briefcase $3,790.00"), a two-up editorial pair ("HOMAGE TO BRUCE LEE", "MEISTERSTÜCK BLOOM") with "Discover Now" buttons, and a "Discover Our Categories" grid of eight tiles.

The capture showed a localisation dialog ("WELCOME TO MONTBLANC.COM ... Shop in Thailand / Continue to United States") and a grey scrim at first; the extraction was re-run with those suppressed and the dialog's black and outlined buttons are not treated as brand components. Voice is calm, product-first and sentence-case, with descriptive lines like "The Unmistakable Meisterstück, Refreshed in Three Modern Colourways".

## Colors

- **Canvas** `#ffffff`: page and editorial band background.
- **Ink** `#000000`: nav, headings and button text on white; also the wordmark colour.
- **Primary** `#000000` with **on-primary** `#ffffff`: the measured primary button ("Discover the Collection") has a `#000000` background, white label and a 1px white border. It is a monochrome, square action.
- **Surface soft** `#f2f2f2`: light grey band behind category tiles and cards.
- **Surface warm** `#f3f1ec`: the cream product-strip background, measured among the largest background areas and named `--gold` in the page's own variables despite being a pale neutral.
- **Ink 2** `#272727`: card and editorial heading colour (the "HOMAGE TO BRUCE LEE" h2).
- **Ink muted** `#6e6e6e`: secondary text, listed on the page as `--brand-mb-dark-grey`.
- **Ink 5** `#444444`: menu link grey.
The page's variables also hold semantic red, green and pink values for errors, success and promos; those were not part of the measured homepage palette and are not declared here.

## Typography

One proprietary family, `MontblancType` (regular and bold loaded), with `arial, sans-serif` as the declared fallback. Everything is the same family; hierarchy comes from size, tracking and case.

- **Display**: 18px / 26px, weight 400, letter-spacing 1.5px, uppercase (the hero "FALL WINTER COLLECTION"). 16px / 24px with 1.5px tracking at a 390px viewport.
- **Heading**: 20px / 26px, weight 400, letter-spacing 1.5008px, uppercase (editorial titles).
- **Body**: 14px / 20px, weight 400, letter-spacing 0.5008px, sentence case; this is also the button label style.
- **Link / label**: 12px / 20px, weight 400, letter-spacing 1px, uppercase (nav, tile labels).
MontblancType is Montblanc's custom corporate typeface (the Red Dot page I opened describes a redesigned corporate typeface built from the logo's circle and triangle). It is not publicly licensed on the web; Arial is the declared fallback, and any light geometric sans with generous tracking (Jost or Montserrat at 400) is a reasonable substitute.

## Layout

The page is 4774px tall at 1280 wide. The hero is a full-bleed image band with text anchored lower left; product cards run as a horizontally scrolling strip on the cream band with a thin progress rule below; the editorial pair is two equal columns with a modest gutter; the category grid is four columns across, two rows. Spacing values measured include 4, 7, 8, 8.96, 10, 12, 14, 14.08 and 15px, with cards padded 32px 32px 40px. Density is airy: images are large, text blocks small, and tracking is wide, giving a restrained boutique rhythm.

## Elevation & Depth

Flat. No box shadow was measured on the page. Depth is created by photography (soft studio gradients, dark hero) and by alternating white, grey and cream bands. Dialogs and overlays use a scrim, but the surface is flat white with a thin outline.

## Shapes

Buttons, nav and inputs are square (`none`, 0px). Cards carry a very slight 3px radius (`sm`) and tiny controls 2px (`xs`); a 160px radius (`md`) and a pill value also appear in the measured set, used for round controls such as the floating accessibility and carousel buttons. Images are rectangular, edge to edge in their tiles.

## Components

- **Primary button**: `#000000` fill, white 14px label, 0px radius, 1px white border, padding 12px 50px, 48px tall (263px wide for "Discover the Collection").
- **Secondary / outlined button**: white fill, black label and 1px black border, same 12px 50px padding and 48px height ("Discover Now", 198px wide).
- **Product card**: image, two-line name, price in 14px; card measured with `#ffffff` background, `#272727` text, 3px radius and 32px 32px 40px padding.
- **Category tile**: grey square image with an uppercase 12px label below.
- **Nav**: single uppercase row, link grey tones with the active item in black; icon cluster at right.
- **Promo bar**: thin grey strip with underlined text; not a brand button.
- **Localisation dialog and "Leave a Message" tab**: utility UI, excluded from the brand set.

## Design System Architecture

No public Montblanc design system or token package was found. The de-facto system is visible in the shipped CSS variables: a neutral scale (`--color-grey2`, `--color-grey3`, `--color-grey6`, `--darkgrey`, `--off-white`, `--brand-mb-dark-grey`), a `--gold` that is in fact a pale cream, semantic `--red`, `--success`, `--pink`, `--lightred`, React-component-library variables with the prefix `--rcc-colors-*`, Tailwind-style variables (`--tw-ring-shadow`), breakpoints (`--breakpoint-xl` 1200px, `--breakpoint-xxl` 1441px), and a personalisation font variable naming "Avant Garde". It reads as a retail platform layered over a brand style, not a published system. Pages opened: the Red Dot project page for the corporate typeface (https://red-dot.org/project/montblanc-corporate-typeface-12928); the montblanc.com homepage itself timed out when fetched, so the layout notes come from the extraction and capture.

## Do's and Don'ts

Do:
- Keep the interface in black, white and light neutral bands and let the product photography be the colour.
- Use wide-tracked uppercase for headings and labels and sentence case for descriptive lines.
- Make buttons square, 48px tall, with a 1px border; use the outlined style on light bands.
- Keep prices and product names small and aligned left on the cream strip.

Don't:
- Do not use gold or red as brand UI colours; the page's "gold" variable is a pale cream.
- Do not round buttons; the measured radius is 0px.
- Do not add shadows.
- Do not mimic the localisation dialog or promo bar as brand controls.

## Responsive Behavior

At 390px the display line falls from 18px to 16px and from 26px to 24px line height, with tracking still 1.5px. The page defines breakpoints at 1200px and 1441px, so desktop layouts step across those widths. The product strip is a horizontal scroller on all sizes; the editorial pair and category grid are expected to stack as the viewport narrows, but this was only measured at 1280 and 390, so verify intermediate widths directly.

## Iteration Guide

1. Establish white canvas, black ink, MontblancType (or the substitute) with 1.5px tracking in uppercase headings.
2. Build the hero as a dark full-bleed image with a lower-left uppercase title, a short line and a square outlined button.
3. Alternate white, `#f2f2f2` and `#f3f1ec` bands; place cards on them with 3px corners.
4. Keep all buttons 48px tall, 0px radius, with 12px 50px padding.
5. Run `node web/scripts/verify-designs.mjs --slug=montblanc` after each change.
