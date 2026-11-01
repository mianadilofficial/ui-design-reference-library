---
version: alpha
name: John Deere
category: "Energy & Climate"
description: "John Deere US storefront and brand site: white canvas with near-black ink #1b1c1b, enterprise green #367c2b pill buttons with #185f11 hover, Inter 36px bold display over Open Sans body, 8px cards, circular category tiles and a --jddc- CSS variable system."
colors:
  canvas: "#ffffff"
  ink: "#1b1c1b"
  primary: "#367c2b"
  on-primary: "#ffffff"
  surface-3: "#f1f0f0"
  ink-3: "#000000de"
  ink-4: "#5e5e5d"
  hairline: "#c7c6c5"
  primary-hover: "#185f11"
typography:
  display:
    fontFamily: Inter, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 44px
  display-mobile:
    fontFamily: Inter, sans-serif
    fontSize: 26px
    fontWeight: 700
    lineHeight: 34px
  heading:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 24px
  nav:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  input:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 30px
  s7: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 32px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 32px
    height: 40px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-4}"
    padding: 0px 32px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 24px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-3}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.hairline}"
---

## Overview

John Deere US (https://www.deere.com/en-us/, page title "Home | John Deere US") is the manufacturer's North American storefront and brand site. The measured page is 1280px wide and 2814px tall with 279 visible elements. The structure is a classic commerce-plus-brand layout: a white header with the leaping-deer logo and "JOHN DEERE" wordmark, a pill-shaped search field, "Sign In" and a language selector (EN with a flag); a second row of text navigation (Home, Products & Solutions, Industries, Parts & Owner Support, Financing, Our Company), each with a chevron, the active Home item underlined in green.

Under the nav sits a rounded full-width promotional banner, "Get $1,000 Off the 1025R Sub-Compact Tractor", with a photo of a green tractor and a white pill button "Build Your 1025R". Next is a row of seven circular category thumbnails (Used Equipment, Harvesting, Compact Tractors, Mowers, Gator Utility Vehicles, Precision Upgrades, Excavators) with a second row holding "Parts"; labels are in the brand green. Then a three-card promotional row (air carts, maintenance parts, a snow-removal attachment), each with an image, a bold heading, copy and a green pill button ("See Them Now", "Add to Cart", "Gear Up for the Season"), then a dark banner "Your Farm. Your Data. Your Call." with a white pill "Meet JD", a long block of numbered legal footnotes and a near-black footer with a "Subscribe for more" panel and a survey panel.

The voice is practical and farmer-direct: "Keep Yours Running Right", "Build Your Best Lineup Yet". Imagery is real equipment in real fields at sunrise and in snow; green and yellow machinery supplies the colour, which is why the interface itself stays neutral with one green.

## Colors

The shipped CSS publishes the palette as `--jddc-color-*` variables: enterprise green #367c2b (`--jddc-color-brand-jd-enterprise-green`), enterprise yellow #ffde00, construction yellow #f2a900, and numbered tonal ramps for green, yellow, construction yellow, red, blue, neutral-warm, neutral-cool and data colors.

- **canvas #ffffff** is the page and header background (weight 1378).
- **ink #1b1c1b** is the most-read text color (2023) and also the dark footer and banner background (765).
- **primary #367c2b** is the John Deere green (button fill, link text and category labels); **on-primary #ffffff** is the text on it. **primary-hover #185f11** is the hover color measured in the extraction and matches `--jddc-color-green-35`.
- **surface-3 #f1f0f0** is the light grey fill of secondary buttons and the search field.
- **ink-3 #000000de** is 87%-alpha black for card headings and body; **ink-4 #5e5e5d** is the grey for nav and secondary text.
- **hairline #c7c6c5** is the 1px card border color.

Yellow #ffde00 is the brand's second color but appears here mainly inside product photography; no yellow interface fill was measured, so it is not a token. #0000ee (the browser default link blue) was reported on one nav link, is not a brand color and is dropped.

## Typography

Two families. "Inter" (700) is the display and nav face; "Open Sans" (400, 600, 700) is used for body, headings in cards and buttons (4060 weighted characters against 94 for Inter). "Material Symbols Sharp" supplies the chevrons, search and cart icons.

- **display** Inter 36px / 44px, weight 700 (banner headlines); **display-mobile** 26px / 34px.
- **heading** Open Sans 16px / 24px, weight 700 (card headings in upper or title case, e.g. "BIGGER. BETTER. SMARTER.").
- **body** Open Sans 12px / 20px, weight 400 (this measured role is the legal footnote text; the card copy is larger).
- **button** Open Sans 14px / 24px, weight 600.
- **nav** Inter 16px / 24px, weight 700.
- **input** Open Sans 14px / 24px, weight 400.

The CSS declares a typography system in `--jddc-typography-*` variables (title font family Inter, label sizes, heading line heights), which the measured tokens follow.

## Layout

The page is a centered column inside 1280px. The header is a single bar followed by a nav bar with a thin bottom border. Content blocks stack: full-width banner, a centered row of circular category tiles with wrapping, a three-column card row and a second banner. Cards show an image at full card width followed by text and a button pinned to the bottom.

Spacing tokens measured: 4px, 6px, 8px, 12px, 16px, 30px and 32px. Buttons use 8px 32px padding and a 40px height; the nav uses 0 32px. The CSS declares spacing variables (x-small 0.25rem, small 0.5rem, large 2rem, x-large 4rem) and a medium icon-to-text gap of 0.5rem.

## Elevation & Depth

No box shadows were measured. Cards are outlined with a 1px #c7c6c5 border and rounded corners; the banners are photographic with a dark gradient scrim over the left side for text contrast; "Sign In" shows a #f1f0f0 background on hover (measured). Hierarchy comes from borders, banner photography and the black footer.

## Shapes

Radii measured: 8px (weight 21), 9999px (21), 4px (8), 50% (8). Tokens: xs 4px, sm 8px, pill 9999px. Buttons and the search field are full pills; cards and banners use 8px; the nav items and small controls use 4px; the category thumbnails are circles. The CSS also declares `--jddc-radius-small` 0.25rem, `--jddc-radius-medium` 0.5rem and `--jddc-radius-full`, and `--jddc-button-corner-radius` 0.25rem (not the pill used by the measured primary button).

## Components

- **button-primary**: green #367c2b fill, white 14px semibold Open Sans, pill radius, padding 8px 32px, 40px height; hover fill #185f11.
- **button-secondary**: #f1f0f0 fill, #1b1c1b text, same pill and size ("Build Your 1025R", "Meet JD", "Subscribe Now").
- **nav**: white bar, #5e5e5d text, 0 32px padding, Inter 700.
- **text-input**: 14px Open Sans, 24px line-box height (search field is a grey pill).
- **card**: white, 8px radius, 1px #c7c6c5 border, image above text.
- **category tile**: circular product image with a green label below.
- **footer**: near-black (#1b1c1b) with white text and outlined (white 1px border) panels.

## Design System Architecture

John Deere's site is built on an internal design system whose public footprint is visible in the shipped CSS: 351 root custom properties prefixed `--jddc-` (for example `--jddc-color-brand-jd-enterprise-green`, `--jddc-typography-title-font-family`, `--jddc-radius-medium`, `--jddc-spacing-x-large`, `--jddc-button-corner-radius`) and component variables prefixed `--jddc-fuel-button-` (such as `--jddc-fuel-button-tertiary-underline-thickness`). The page does not link to a public documentation site for this system, so no external document is cited; the system is described from its variables. Source: the measured root variables in web/data/extracted/john-deere.json from https://www.deere.com/en-us/.

## Do's and Don'ts

- Do use the enterprise green #367c2b for the single primary action per card and for category labels.
- Do keep surfaces white and text #1b1c1b; secondary buttons use #f1f0f0.
- Do use pill buttons at 40px height and 8px radius on cards and banners.
- Do set headlines in Inter bold and everything else in Open Sans.
- Do keep a legal footnote block in small 12px text, as the page does.
- Don't use the browser-default #0000ee link blue.
- Don't add shadows; none were measured.
- Don't recolor equipment photography; the yellow of machinery is the brand's second color.

## Responsive Behavior

Measured in the 390px mobile pass: h1 26px (from 36px) and body 12px (unchanged). Mobile layout of the nav, category tiles and card row was not measured.

## Iteration Guide

1. White canvas, #1b1c1b text; Inter bold for the headline.
2. One green pill (40px, 8px 32px padding) with hover #185f11.
3. Secondary action as a #f1f0f0 pill.
4. Cards: 8px radius, 1px #c7c6c5 border, image first.
5. Circular category tiles with green labels.
6. Run `node web/scripts/verify-designs.mjs --slug=john-deere`.
