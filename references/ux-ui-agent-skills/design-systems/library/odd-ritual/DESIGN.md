---
version: alpha
name: "Odd Ritual"
category: "Fashion & Apparel"
description: "Odd Ritual golf apparel store (oddritualgolf.com) measured live: white #ffffff and light grey #f4f4f4 surfaces, black #000000 text, electric blue #050fff accent, PP Neue Montreal at 40px uppercase 600 with -1.2px tracking, Instrument Serif labels and zero radius."
colors:
  canvas: "#ffffff"
  page-body: "#000000"
  page-largest: "#f4f4f4"
  ink: "#000000"
  primary: "#050fff"
  ink-2: "#818181"
  ink-5: "#686060"
  hairline: "#818181cc"
typography:
  display:
    fontFamily: Ppneuemontrealvariable, Arial, sans-serif
    fontSize: 40px
    fontWeight: 600
    lineHeight: 40px
    letterSpacing: "-1.2px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Ppneuemontrealvariable, Arial, sans-serif
    fontSize: 28.25px
    fontWeight: 600
    lineHeight: 28.25px
    letterSpacing: "-0.86625px"
    textTransform: uppercase
  heading:
    fontFamily: "\"Instrument Serif\", sans-serif"
    fontSize: 31.4286px
    fontWeight: 400
    lineHeight: 31.4286px
  subheading:
    fontFamily: Ppneuemontrealvariable, Arial, sans-serif
    fontSize: 40px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: "-1.2px"
  body:
    fontFamily: Ppneuemontrealvariable, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
  nav:
    fontFamily: Ppneuemontrealvariable, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  input:
    fontFamily: PP, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 600
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 19.43px
  s8: 20px
  s9: 40px
  s10: 47.14px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 20px 0px
  text-input:
    textColor: "{colors.primary}"
    typography: "{typography.input}"
    height: 40px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.page-body}"
    padding: 20px 0px
---

# Odd Ritual

## Overview

The measured page is https://oddritualgolf.com/ (title "Odd Ritual • A Modern Expression of Heritage – oddritual"), a South African golf and lifestyle apparel store with 1685 visible elements. It is an editorial storefront: a full-bleed photographic hero (two men in golf clothing, one seated reading a newspaper that carries the "odd ritual" name) with white uppercase "SHOP NOW / EXPLORE OUR FIRST COLLECTION" at the lower left, a counter "01" in a serif italic and a "Scroll" cue; then a white statement section with the crow-and-monogram logo at the left and a large paragraph at the right: "Born from a shared love of the game, rooted in a vision of authenticity and creativity expressed through what we wear."

Next comes "( FEATURED PRODUCTS )" in serif with a horizontal strip of product tiles on #f4f4f4 backgrounds (a cream polo with navy trim, khaki and black trousers), a small blue "SOLD OUT" label on one tile, and "( VIEW ALL PRODUCTS )". A three-image row follows ("OUR PRODUCTS", "OUR STORY", "OUR COMMUNITY"), an "ORIGO 2023 designed and made locally" caption, a full-width lifestyle photograph with a large serif headline "MORE THAN JUST GOLF", a list of partner organisations with "VISIT WEBSITE" links, and a grey footer with the logo, newsletter fields and four link columns (Site index, Social, Get in touch, Legal).

On the first capture an email sign-up dialog ("BECOME PART OF THE ODD RITUAL COMMUNITY.") and a dark scrim covered the hero. That dialog and scrim are not brand tokens; the page was re-measured once (`--no-motion`) and the dialog did not appear in the second capture. The tone is warm and identity-driven, and the opened page lists CTAs such as "Shop now", "View all products" and "Join the fam".

## Colors

Background area: `#f4f4f4` (18350), `#ffffff` (6648), `#000000` (1028), `#050fff` (23). Text by characters: `#000000` (3217), `#818181` (2296), `#050fff` (344), `#ffffff` (211), `#686060` (55).

- `canvas` #ffffff: the page; `page-largest` #f4f4f4: the product tile and footer surface; `page-body` and `ink` #000000: text.
- `primary` #050fff: the brand blue (`--swatch--brand`), used for the sold-out label, input text and the primary button definition.
- `ink-2` #818181: body paragraph grey (`--swatch--light-faded`).
- `ink-5` #686060: a warm grey measured on 55 characters.
- `hairline` #818181cc: the 1px input border (`--swatch--dark-faded-8` is #020202cc).

The root declares 200 variables with swatch names: `--swatch--dark` black, `--swatch--light` white, `--swatch--light-grey` #f4f4f4, `--swatch--faded-text` #ccc, `--swatch--dark-faded-1` through `-8` (alpha steps of #020202) and `--swatch--brand` #050fff. The primary button is defined by variables as brand-blue background and border with hover to dark background, dark border and light text.

## Typography

PP Neue Montreal (loaded as `Ppneuemontrealvariable`, weights 100 to 700) is the main face (6032 characters), with Instrument Serif (normal and italic) for labels and counters (76) and a face named PP (30) for form fields.

- `display` 40px / 40px, weight 600, uppercase, -1.2px tracking: "SHOP NOW" (28.25px / 28.25px, -0.86625px at 390px, `display-mobile`).
- `subheading` 40px, weight 500, -1.2px tracking: the large statement paragraph.
- `heading` Instrument Serif 31.4286px, weight 400: the "01" counter and serif headings.
- `body` 14px / 18.2px, weight 400: copy (5973 characters).
- `nav` 16px, weight 400; `input` PP 14px, weight 600, uppercase.

Weight 600 covers 4450 characters, so most small text is semibold uppercase; 400 covers 1658.

## Layout

The page uses long vertical sections with a left-weighted editorial split: logo at the left, statement at the right half; tile strip bleeding off the edges; a three-column image row; and a two-column partner list with images at the right. Measured paddings: 10px (172 uses), 20px (18), 5px (10), 47.1429px (2) and 19.4286px (1). Spacing tokens run from 2px to 47.14px. The root holds clamp-based size variables such as `--size--10rem: clamp(8.75rem, 8.392857142857142rem + 1.7857142857142856vw, 10rem)`, so sizes scale with viewport width.

## Elevation & Depth

No box shadows were measured. Depth is photographic: full-bleed imagery and, in the first capture, a dark scrim under a dialog that is not documented. Surfaces separate by a change from #ffffff to #f4f4f4 and by hairlines.

## Shapes

No radius was measured: `borderRadii` is empty, so every element computes 0px. The `rounded` token is `none: 0px`. Tiles, inputs, labels and photographs are rectangles; the parentheses around "( FEATURED PRODUCTS )" are typographic.

## Components

- **text-input**: 40px high, 1px solid #818181cc border, 14px 600 uppercase PP text in `{colors.primary}` blue, 0 radius (newsletter fields "NAME SURNAME", "EMAIL", "SUBMIT").
- **nav**: white 16px labels over the hero ("SHOP NOW", "CART") with a centered logo mark; 20px vertical link padding.
- **link**: white 40px display style for the hero call "SHOP NOW".
- **sold-out label**: blue #050fff filled small rectangle with white uppercase text.
- **product tile**: #f4f4f4 square-cornered tile with centred product photography.
- **footer**: #f4f4f4 background with black text and 20px vertical padding.

## Design System Architecture

No public brand guideline or design system link was found on https://oddritualgolf.com/. The de-facto system is a set of 200 root variables with a swatch and theme naming scheme: `--swatch--*` palette, `--_theme---button-primary--*` role variables, `--_typography---*` letter-spacing and font variables, and `--size--*` clamp sizes. Source: `web/data/extracted/odd-ritual.json`.

## Do's and Don'ts

- Do use black on white with #f4f4f4 for product surfaces and reserve #050fff for small status and form accents.
- Do pair a grotesk (PP Neue Montreal) with Instrument Serif for counters and parenthesised labels.
- Do keep corners square.
- Don't use shadows or radius; none were measured.
- Don't treat the sign-up dialog or scrim as brand UI.
- Don't use weights other than 400, 500, 600 and 700.

## Responsive Behavior

The 390px pass measured the display text at 28.25px / 28.25px (40px on desktop), and the body at 14px (5915 characters), unchanged. The root defines clamp-based size variables. Column changes and navigation behavior are not measured.

## Iteration Guide

1. White and #f4f4f4 surfaces, black text, grey #818181 paragraphs.
2. Uppercase 600 PP Neue Montreal for calls; serif italic for counters.
3. Zero-radius rectangles; 1px hairline inputs.
4. Product photography centred on #f4f4f4.
5. Gate: `node web/scripts/verify-designs.mjs --slug=odd-ritual`.

### Content and imagery notes

Photography alternates between studio-lit product shots and candid lifestyle images: golfers walking a course, a hand holding a navy cap with a woven label, a green fairway, a man in a navy sweatshirt with embroidered script, and partner images (a golf landscape, hands with a drink, a cup with the number 242, a van with runners). The logo is a black crow beside a golf ball and an "OR" monogram; the same crow and a constellation of small stars appear again in the footer. Section titles use a numbered or parenthesised style, for example "( FEATURED PRODUCTS )", "OUR PRODUCTS", "OUR STORY" and "OUR COMMUNITY", and the footer ends with the line "ALL RIGHTS RESERVED _ ORIGO©2023". The opened page text gives the closing tagline "Made for us. By us."

The page's voice mixes relaxed lines with heritage claims. The opened page text includes "Swing easy", "Come on, treat yourself. You deserve it" and the closing "Made for us. By us.", while the statement section frames the label as "more than just golf" and gives space to four partner organisations (Fairways to Africa, StartWell Foundation, 242 and Running Late Club) under a "Giving back" heading. Product names, prices in South African rand and the Sold Out or Pre-order tags are shown in the catalogue; colorways named in the page text lean to navy, khaki, milk and black with some burgundy, olive and rust. Those garment colors belong to the products, not to the interface palette, which stays black, white, light grey and the single blue.
