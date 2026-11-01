---
version: alpha
name: Breitling
category: "Luxury"
description: "Breitling's homepage pairs a flat brand yellow #ffc72c (header and square 0px buttons with black text) with white and near-white surfaces, a navy-black #09091a footer, condensed uppercase italianPlate headlines at 50px bold and Open Sans 14px body."

colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ffc72c"
  on-primary: "#000000"
  surface-soft: "#fafafa"
  surface-night: "#09091a"
  ink-night: "#111820"
  ink-navy: "#072c54"
  ink-muted: "#666666"
typography:
  display:
    fontFamily: __italianPlate_843ea1, __italianPlate_Fallback_843ea1
    fontSize: 50px
    fontWeight: 700
    lineHeight: 50px
    textTransform: uppercase
  display-mobile:
    fontFamily: __italianPlate_843ea1, __italianPlate_Fallback_843ea1
    fontSize: 40px
    fontWeight: 700
    lineHeight: 40px
    textTransform: uppercase
  heading:
    fontFamily: __italianPlate_843ea1, __italianPlate_Fallback_843ea1
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
    textTransform: uppercase
  subheading:
    fontFamily: __italianPlate_843ea1, __italianPlate_Fallback_843ea1
    fontSize: 34px
    fontWeight: 700
    lineHeight: 34px
    textTransform: uppercase
  body:
    fontFamily: __openSans_025993, __openSans_Fallback_025993, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20.96px
  button:
    fontFamily: __openSans_025993, __openSans_Fallback_025993
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20.96px
    textTransform: uppercase
  nav:
    fontFamily: __openSans_025993, __openSans_Fallback_025993
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20.96px
  button-secondary:
    fontFamily: __openSans_025993, __openSans_Fallback_025993
    fontSize: 12px
    fontWeight: 700
    lineHeight: 20.96px
    textTransform: uppercase
rounded:
  xs: 3.2px
  sm: 10px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 19px
  s8: 19.45px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 48px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    padding: 16px 32px
    height: 40px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.surface-night}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

# Breitling

## Overview

The measured page is breitling.com/sg-en/ (the Singapore English storefront). It is a bright, commerce-forward luxury site anchored by one loud brand colour: a saturated yellow (`#ffc72c`) that fills the entire header block and every call-to-action button, against white (`#ffffff`) and near-white (`#fafafa`) content surfaces and a deep navy-black footer (`#09091a`). Text is black. The overall impression is sport-instrument and aviation: tall condensed uppercase headlines, flat square yellow buttons, clean product shots of watches on white, and large photographic hero bands.

The top of the page carries a thin navy promotional bar ("Available now: the new online-exclusive limited Superocean.") with a close control; below it a yellow header holds a language and phone strip, the dual wordmark lockup (Aston Martin wing beside "BREITLING 1884"), search, favourites, account and bag icons, and the primary nav (WATCHES, ACCESSORIES, HERITAGE, OUR WORLD, STORES, SERVICES, "B" CHALLENGE). The hero is a dark photo/video band with a centred white headline ("CRAFTED LIKE A DB5") and a yellow DISCOVER button. Below that is a three-up grid of editorial cards (image, uppercase heading, one line of copy, yellow DISCOVER), then a "DISCOVER OUR COLLECTIONS" carousel of product images on white with collection names (Navitimer, Chronomat, Superocean Heritage, Avenger, Classic AVI), and a split block with a wrist-shot and an "THE ICONIC PILOT WATCH" product trio. The official homepage text (opened) names campaigns such as "Ready. Set. React.", "Yellow Gold Is Back" and the Top Time tribute to Aston Martin DB5.

The voice is confident and action-oriented: short imperatives ("Discover", "Find a boutique"), partnership-led storytelling, and product reference numbers shown in small type above names.

## Colors

- **Canvas** `#ffffff`: page background for content bands and product grids.
- **Ink** `#000000`: default text, headings on white, and the text on yellow buttons (`on-primary` `#000000`).
- **Primary** `#ffc72c`: the brand yellow; fills buttons (DISCOVER, FIND A BOUTIQUE) and the whole header band. It is a flat fill with no gradient and no border colour other than itself.
- **Surface soft** `#fafafa`: alternating light band (second largest background area).
- **Surface night** `#09091a`: the footer background, with white text; also the colour of the dark text on the yellow header (measured as child text colour).
- **Ink night** `#111820`, **ink navy** `#072c54`, **ink muted** `#666666`: secondary text colours; the navy also appears in the thin progress line under the collection carousel and the promo bar.
- White (`#ffffff`) as text colour on hero imagery and in the footer.

## Typography

Two families are loaded, both exposed as hashed Next.js font names in the page: `italianPlate` (400 and 700) for headlines and `openSans` (400 and 700) for UI and body.

- **Display**: italianPlate 700, 50px / 50px, uppercase (40px / 40px at a 390px viewport). The role extractor read this from an h1 that is the "B" CHALLENGE feature heading, which is a valid use of the headline style rather than the hero's DB5 line.
- **Subheading**: italianPlate 700, 34px / 34px, uppercase (for example "THE ICONIC PILOT WATCH").
- **Heading**: italianPlate 400, 20px / 20px, uppercase.
- **Body**: openSans 400, 14px / 20.96px.
- **Button**: openSans 700, 14px / 20.96px, uppercase; the secondary button is 12px, same weight and case.
- **Nav**: openSans 400, 14px / 20.96px.

The headline face is a tall condensed sans; it is declared locally under the name italianPlate, so a free fallback such as Oswald or Barlow Condensed in weights 400 and 700 would approximate it. Open Sans is available publicly.

## Layout

The page is 5901px tall at 1280px width. Content sits in a wide container with about 30px side margins at the capture's scale; the card grid is three equal columns with generous gutters, the collection carousel shows five product columns, and the final block is a half-width photo beside a three-product column set. Spacing values measured: 2, 4, 8, 10, 12, 16, 19, 19.45, 20 and 24px. The header is large (the page exposes `--header-offset` of 199px) so the first fold is dominated by yellow and the hero. Rhythm is a centred-column feel: headings, copy and buttons are all centre-aligned inside cards.

## Elevation & Depth

Flat. The only box shadow measured is an inset shadow (`rgba(0, 0, 0, 0.2) -3.2px 3.2px 6.4px 0px inset`) found on two elements; buttons, cards and the header carry no drop shadow. Depth comes from the dark hero photography against the white page and from the colour blocks (yellow header, navy footer).

## Shapes

Buttons and nav are square: the primary and secondary buttons measure a 0px radius (`none`). Radii that do appear are `xs` 3.2px, `sm` 10px and `pill` 9999px, used on small controls such as carousel arrows, badges and icon buttons. Cards and product images are rectangular, edge to edge.

## Components

- **Primary button**: `#ffc72c` fill, black text, openSans 700 14px uppercase, 0px radius, 48px tall (measured: "DISCOVER", 169px wide). A "FIND A BOUTIQUE" button measured with the same style.
- **Secondary button**: same yellow fill and border, 12px uppercase bold, padding 16px 32px, 40px tall.
- **Header / nav**: yellow background, dark text, uppercase openSans 14px menu, icon cluster at the right.
- **Promo bar**: thin navy strip with underlined link text and a close icon; a promotion strip, not a brand button.
- **Editorial card**: image on top, uppercase italianPlate heading centred, one line of openSans copy, yellow button.
- **Product tile**: watch on white, uppercase collection name at 12 to 14px, optionally with reference number above.
- **Carousel**: swiper-based, with a pale chevron control and a thin two-tone progress rule (yellow and navy).
- **Footer**: `#09091a` background, white uppercase 12px bold links with 0.96px tracking, newsletter and phone details.

## Design System Architecture

No public Breitling design system, token package or brand-guidelines page was found or opened. The de-facto system is a Next.js build (font names are hashed local font modules such as `__italianPlate_843ea1` and `__openSans_025993`) with very few custom properties on the root: `--header-offset`, plus Swiper's `--swiper-theme-color` and `--swiper-navigation-size`. Almost all styling is therefore in compiled class CSS rather than variables. The visible rules are: one yellow, black/white/near-white neutrals, a navy-black footer, two families, uppercase everywhere for headings and buttons. Source of record: https://www.breitling.com/sg-en/ (opened). The site shows the typeface and rules; there is no official token source to cite.

## Do's and Don'ts

Do:
- Use the yellow `#ffc72c` as a flat fill for actions and the header, with black text.
- Set headlines and buttons in uppercase; use the bold weight for display and subheads.
- Keep product photography on clean white or flat backgrounds and use hero imagery edge to edge.
- Centre-align card content (heading, copy, button).

Don't:
- Do not put yellow text on white; yellow is a fill colour.
- Do not round the main buttons; the measured radius is 0px.
- Do not add shadows to cards or buttons.
- Do not use more than one filled button style per band.

## Responsive Behavior

At 390px the display heading falls from 50px to 40px, still weight 700 and uppercase. Mobile layout of the card grid, product carousel and header was not measured; the header block is about 199px offset on desktop. Keep tap targets at the measured 48px button height.

## Iteration Guide

1. Set canvas white, ink black, primary yellow, and place the yellow header and buttons first; everything else is neutrals.
2. Build headlines in the condensed uppercase face, 50px display, 34px subheading, 20px heading; set UI text in Open Sans 14px.
3. Compose homepage bands as: dark hero with centred headline and one yellow button, three centred cards, a product carousel, a split image and product block.
4. Use the navy-black `#09091a` only for the footer and dark UI.
5. Run `node web/scripts/verify-designs.mjs --slug=breitling` after each edit.
