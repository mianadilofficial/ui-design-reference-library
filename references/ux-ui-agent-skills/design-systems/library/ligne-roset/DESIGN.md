---
version: alpha
name: "Ligne Roset"
category: "Home & Furniture"
description: "Ligne Roset (French contemporary furniture, ligne-roset.com/en): Gotham display type at light weights 350-450 with negative tracking, ProximaNova body, white canvas #ffffff, near-black #191919 pill buttons with 46px radius, photography-led."
colors:
  canvas: "#ffffff"
  ink: "#202020"
  primary: "#191919"
  on-primary: "#ffffff"
  surface-2: "#f8f8f8"
  surface-3: "#474747"
  ink-2: "#000000"
  ink-3: "#212529"
  ink-4: "#4b4b4b"
  ink-6: "#3a3a3a"
  hairline: "#cccccc"
typography:
  display:
    fontFamily: Gotham, sans-serif
    fontSize: 50px
    fontWeight: 350
    lineHeight: 33px
    letterSpacing: "-2.67px"
  display-mobile:
    fontFamily: Gotham, sans-serif
    fontSize: 38px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: "-2.67px"
  body:
    fontFamily: ProximaNova, "sans-serif"
    fontSize: 24px
    fontWeight: 300
    lineHeight: 48px
  button:
    fontFamily: Gotham, "sans-serif"
    fontSize: 15px
    fontWeight: 350
    lineHeight: 20px
  nav:
    fontFamily: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  link:
    fontFamily: ProximaNova, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 16px
    textTransform: uppercase
  button-secondary:
    fontFamily: ProximaNova, "sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16px
    textTransform: uppercase
rounded:
  xs: 6px
  sm: 36px
  md: 37px
  lg: 46px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 25.6px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 13px 20px
    height: 46px
  button-secondary:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 20px 40px
    height: 56px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-2}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 20px 40px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-2}"
  nav-link:
    textColor: "{colors.ink-3}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.canvas}"
---

## Overview

The English home page of Ligne Roset, whose wordmark in the capture carries the line "depuis 1860", presents contemporary design furniture almost entirely through photography. The structure seen in the capture runs top to bottom: a slim header with the logo and menu, a store-locator strip (a "City or Zip Code" field, the word "or", and a "Nearby stores" button), a full-bleed hero image for the Président desk by Pierre Guariche, a pair of square product stories (Golden Hour rug, G50 table lamp), a carousel headed "Back to the Desk" with product cut-outs on pale grey tiles, another full-bleed room scene, a second pair of stories, a carousel "Around the Bedroom", a BOSS | LIGNE ROSET collaboration banner, a Magazine block, a "Transform your interior with our design consultants" panel, three image tiles, and a light grey footer.

The tone is calm and editorial. Product names are set large in light type directly over the photographs ("Président", "Golden Hour", "G50"), with a small descriptor underneath ("Desk by Pierre Guariche", "Rug", "Table lamp") and a pill button reading DISCOVER. The page is 8410px tall at the 1280px measuring width and the cookie dialog was hidden before measurement.

## Colors

The page is white. Of the measured background area, white (#ffffff) accounts for 6643 against 903 for a pale grey, #f8f8f8, which is both the footer background and the tile color behind product cut-outs. A mid-dark grey, #474747, fills the large pill buttons on the editorial blocks, and a near black, #191919, fills the "Subscribe to newsletter" button, which the extractor selected as the primary call to action with white text.

Text is a family of near-blacks rather than one value: #202020 is the most-read color (1085 characters), followed by #000000 (694), the Bootstrap body color #212529 (348), #4b4b4b, #3a3a3a, #333333 and #313131. White text is used over photographs. The only measured border color is a light grey, #cccccc, seen on the locator field and the carousel arrow buttons.

- Canvas #ffffff; surface-2 #f8f8f8; surface-3 #474747.
- Ink #202020; ink-2 #000000; ink-3 #212529; ink-4 #4b4b4b; ink-6 #3a3a3a.
- Primary #191919 with on-primary #ffffff; hairline #cccccc.

The root variables also include Bootstrap theme colors such as --bs-orange #fd7e14, --bs-success #198754 and --bs-warning-bg-subtle #fff3cd. These come from the framework stylesheet and do not appear in the visible design, so they are not brand colors here.

## Typography

Gotham carries titles and buttons (1585 measured characters), ProximaNova carries running text and small uppercase labels (1251), and a system-ui stack appears in the navigation (90). The page also loads Open Sans, ITC Avant Garde Gothic (61 characters) and a bootstrap-icons font. Gotham is loaded at 300, 400, 500 and 700; ProximaNova at 300, 400, 600 and 700. The measured weights include the unusual values 350 and 450.

The hero title "Président" is Gotham 50px, weight 350, white, letter-spacing -2.67px, with a measured line-height of 33px. The most-read size is 38px at weight 450 (1085 characters), with 14px (726), 16px, 24px, 18px, 22px, 30px, 48px and 50px following. Body copy is ProximaNova 24px weight 300 at 48px line-height. The primary button label is Gotham 15px at weight 350 on 20px line-height. Secondary buttons and links use ProximaNova 14px uppercase at weight 700 and 600 respectively, line-height 16px. Navigation links are 14px on 21px in the system stack.

The result is large, light, slightly condensed display type over images, with small uppercase sans labels for actions. Gotham and ProximaNova are commercial typefaces; no substitution is named by the brand in anything opened.

## Layout

Content uses a wide full-bleed hero, then a two-up grid of square image cards with a gutter between them, then three-up carousels of product tiles on #f8f8f8. The header height variable is --header-height 60px. The most repeated spacing values are 4px, 6px, 8px, 10px, 12px, 15px, 16px, 20px, 24px and 25.6px; the secondary pill buttons carry 20px 40px padding and the primary button 13px 20px. Sections are separated by generous white space of the order of the product tile height; exact gaps between sections were not measured.

## Elevation & Depth

Almost everything is flat. One shadow was measured, rgba(0, 0, 0, 0.11) 0px 20px 17px 0px, with a weight of 1, so it is a single element rather than a system. Depth is created by photography and by white pill buttons floating on images. Product tiles use a flat grey (#f8f8f8) with no border or shadow.

## Shapes

Five radius values appear: 6px, 36px, 37px, 46px, and a bottom-only 0px 0px 6px 6px. Buttons are pills: 46px on the newsletter button, 36px on the DISCOVER and store-locator buttons, 37px on the locator inputs. The 6px radius and the bottom-rounded variant belong to smaller panels. Product tiles and photographs have square corners in the capture.

## Components

- **Button primary**: fill #191919, white Gotham 15px label, 46px radius, 13px 20px padding, 46px tall.
- **Button secondary**: fill #474747, white uppercase ProximaNova 14px bold, 36px radius, 20px 40px padding, 56px tall ("FIND YOUR NEAREST STORE", "DISCOVER THE MAGAZINE").
- **DISCOVER pill**: white fill with black text and a black border at rest, 56px tall, 36px radius; the hover state measured the text turning white (rgb(255, 255, 255)).
- **Link**: black uppercase ProximaNova 14px at 600.
- **Nav**: white background, links in #212529 at 14px; icons for search, point of sale, wishlist and account.
- **Carousel arrows**: small round buttons with a #cccccc outline.
- **Footer**: #f8f8f8 background with a newsletter button, social icons and four link columns (About us, Help, Corporate, Eshop).

## Design System Architecture

No public Ligne Roset design system or brand guideline was found on the pages opened. The de-facto system is a Bootstrap 5 stylesheet extended with site variables: the measured root variables include the --bs-* set plus named brand variables such as --ff-box-title (Gotham, sans-serif), --ff-box-btn (ProximaNova, sans-serif), --fw-box-title 400, --lh-box-title 35px, --clr-product-detail-name #202020, --bg-footer #f8f8f8 and --header-height 60px. Component-level variable names follow a --{property}-{component} pattern. Source page: https://www.ligne-roset.com/en/.

## Do's and Don'ts

- Do set product names in Gotham at light weights (350 to 450) with negative tracking, in white over photographs.
- Do use pill buttons: 36px for large DISCOVER buttons, 46px for compact ones.
- Do show products on #f8f8f8 tiles as cut-outs and in rooms as full-bleed scenes.
- Do keep labels uppercase in ProximaNova 14px bold.
- Don't add colored accents; the system is white, greys and near-black.
- Don't use shadows on cards; only one shadow was measured.
- Don't use Bootstrap's blue or orange variables as brand colors.

## Responsive Behavior

The mobile pass at 390px recorded the following. The hero title "Président" falls to 38px at weight 400 with a 36px line-height and the same -2.67px tracking. The newsletter button keeps its #191919 fill, white text, 15px label and 15px radius with 5px 15px padding and a 30px height. Mobile body text measured 24px on a 48px line-height in ProximaNova weight 300. The mobile navigation text lists "or", "Nearby stores", "See the list of stores" and "Return to menu" on a white background with #717171 text at 21px. Column counts, image crops and breakpoints were not measured.

## Iteration Guide

1. Begin with a white page, #f8f8f8 tiles and #202020 text.
2. Set titles in Gotham 350-450 with negative tracking; body in ProximaNova 300.
3. Use #191919 for compact primary buttons (46px radius) and #474747 for large editorial buttons (36px radius).
4. Lead each section with a photograph and put the product name over it.
5. Check with: node web/scripts/verify-designs.mjs --slug=ligne-roset.
