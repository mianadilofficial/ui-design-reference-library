---
version: alpha
name: "SSENSE"
category: "Retail & E-commerce"
description: "SSENSE (ssense.com/en-us), the luxury-fashion retailer's editorial-led home page: Favorit SSENSE Inter uppercase headlines at 49.875px with -2px tracking, JHA Times Now serif body at 20px light, #333333 ink on white, 10px outlined pill buttons with a #979797 hairline and 11px uppercase navigation."
colors:
  canvas: "#ffffff"
  page-largest: "#f4f4f4"
  ink: "#333333"
  primary: "#333333"
  ink-2: "#000000"
  ink-3: "#888888"
  hairline: "#979797"
typography:
  display:
    fontFamily: "\"Favorit SSENSE Inter1\""
    fontSize: 49.875px
    fontWeight: 400
    lineHeight: 56px
    letterSpacing: "-2px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Favorit SSENSE Inter1\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.25px"
    textTransform: uppercase
  heading:
    fontFamily: "\"JHA Times Now\""
    fontSize: 40px
    fontWeight: 400
    lineHeight: 44px
    letterSpacing: "-1px"
  body:
    fontFamily: "\"JHA Times Now\""
    fontSize: 20px
    fontWeight: 100
    lineHeight: 26px
    letterSpacing: "-0.05px"
  nav:
    fontFamily: "\"Favorit SSENSE Inter\""
    fontSize: 11px
    fontWeight: 400
    lineHeight: 15px
    textTransform: uppercase
  button-secondary:
    fontFamily: "\"Favorit SSENSE Inter1\""
    fontSize: 12.35px
    fontWeight: 100
    lineHeight: 16px
    letterSpacing: "-0.05px"
    textTransform: uppercase
rounded:
  xs: 10px
spacing:
  s1: 10px
  s2: 15px
  s3: 18px
  s4: 20px
  s5: 25px
  s6: 30px
  s7: 55px
  s8: 60px
  s9: 68px
components:
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 0px 18px
    height: 36px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-2}"
  nav-link:
    textColor: "{colors.ink-2}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink-2}"
---

# SSENSE

The measured page is `https://www.ssense.com/en-us` (queued as the bare domain), titled "Luxury fashion & independent designers | SSENSE", English (en-us), 4,676px tall with 443 visible elements. The extractor saw a real page, not a bot wall, so this documents the measured home page. It reads as a magazine front page that sells: a thin header, two giant "SHOP MENSWEAR" and "SHOP WOMENSWEAR" links, a lead editorial story with photograph, a three-column row of recent stories, a two-up "Featured" designer row with shop buttons, a full-width city-guide banner, and a story list.

## Overview

The brand voice is editorial first, retail second. The lead headline, "INSIDE SSENSE'S STEAMY SALON DE REFUSÉS PARIS POP-UP", is set in large uppercase grotesque, and its standfirst, "A live set from Smerz capped off our first designer pop-up at PFW.", in a light serif. Story tags such as RECENT and Featured are small, with a category and a short date ("Art | Oct 2", "Market | Sep 25"). Featured entries name a designer (RIER, MERRMA) and carry a single outlined button (SHOP MENSWEAR, SHOP WOMENSWEAR). A promotional band shows a Paris city-guide address, "CITYGUIDES.SSENSE.COM/PARIS", in pale-yellow type over a blue Eiffel Tower photograph. Photography is uncropped, with generous white margin between items; there are no product prices on this page.

Color areas measured: `#f4f4f4` (area weight 3,038) and `#ffffff` (70). The capture shows a white page, with `#f4f4f4` as the image-placeholder ground.

Further down the capture the story list continues in a denser format: a large uppercase headline "CHRIS BLACK CAN'T SLOW DOWN" tagged Culture, a smaller photograph tile, and a narrow text row "LISA BARLOW GETS HER BAGS" with a thumbnail and a hairline above it. Tile titles use the same uppercase Inter at a smaller size, so the page scales one type voice from a 49.875px lead to 11px labels. Dates are abbreviated (Oct 2, Sep 25, Sep 18) and written after a vertical divider. Category words observed in the capture are Art, Market, Culture and Featured.

## Colors

- `canvas` `#ffffff`; `page-largest` `#f4f4f4`.
- `ink` and `primary` `#333333`: headlines, standfirsts and button text (1,350 characters). The page has no chromatic brand color in its measured chrome; the generated `primary` is the same neutral.
- `ink-2` `#000000`: navigation and footer (197 characters); `ink-3` `#888888`: secondary text such as dates (69 characters).
- `hairline` `#979797`: the button border (1px, 15 elements).

Everything colored on the page is photography or a promotional banner; the CSS root declares no custom properties (`rootVars` is empty).

## Typography

Three faces are loaded: Favorit SSENSE Inter (navigation, footer), Favorit SSENSE Inter1 (headlines, buttons) and JHA Times Now (serif for headings and body). By characters: Inter1 849, JHA Times Now 501, Inter 266. Weights are 400 (857) and 100 (759), so the page pairs regular headlines with hairline-weight serif text.

- `display`: Favorit SSENSE Inter1 49.875px, weight 400, line-height 56px, -2px tracking, uppercase. `display-mobile`: 18px, line-height 24px, -0.25px.
- `heading`: JHA Times Now 40px, 400, line-height 44px, -1px (h2 "A live set from Smerz...").
- `body`: JHA Times Now 20px, weight 100, line-height 26px, -0.05px.
- `nav`: Favorit SSENSE Inter 11px, 400, line-height 15px, uppercase; footer links share it.
- `button-secondary`: Inter1 12.35px, weight 100, line-height 16px, -0.05px, uppercase.

Tracking is negative at every size above 12px (-0.25px at 19px, -0.5px at 28.5px, -1px at 40px, -2px at 49.875px). The family names are SSENSE-specific (Favorit SSENSE Inter, JHA Times Now) and were not matched to an open substitute.

## Layout

Header 55px high: MENSWEAR, WOMENSWEAR, EVERYTHING ELSE, SALE, SEARCH at the left; a centred SSENSE wordmark; EN, LOGIN, WISHLIST and BAG (0) at the right. Paddings: 68px (16 elements), 25px (10), 10px (9), 18px (6), 30px (4), 20px (3); gaps 20px (4) and 10px (2). Generated spacing: 10, 15, 18, 20, 25, 30, 55, 60 and 68px. In the capture, content sits inside side margins with a lead block of text on the left and a photo on the right, then a three-column story grid, then two larger featured images; the footer, measured at 60px high, lists CUSTOMER CARE, LOCATION, EDITORIAL ARCHIVE, CAREERS and more.

## Elevation & Depth

No shadows were measured (`boxShadows` is empty) and no translucent surfaces are declared in the measured elements. Depth is flat: white page, grey placeholders, images, hairline borders. One loading banner shows a dim grey overlay with faded text in the capture; it is a transition state and is not documented as a component.

## Shapes

One radius is measured: `10px` on 6 elements, all of them the outlined buttons (VIEW EDITORIAL, SHOP MENSWEAR, SHOP WOMENSWEAR). Everything else computes to 0px, including photographs, story tiles and the header. The result is a page of hard-edged rectangles in which the only soft shape is the small rounded button, which makes the button the single recurring interactive affordance. Borders are limited to the same `#979797` hairline.

## Components

- **Outlined button** (`button-secondary`, "VIEW EDITORIAL", "SHOP MENSWEAR", "SHOP WOMENSWEAR"): transparent fill, `1px solid #979797`, 12.35px uppercase text in `#333333`, padding `0px 18px`, 36px high, radius 10px.
- **Navigation**: 11px uppercase black text, 15px line-height, no fills.
- **Story tile**: image, then a tag (RECENT / Featured) in small text, an uppercase title, and a serif category and date line in `#888888`.
- **Shop links**: oversized uppercase "SHOP MENSWEAR" and "SHOP WOMENSWEAR" text links in display-like type.
- **Footer**: black text, 11px uppercase links.

## Design System Architecture

This section states what is known and what is not. No public design system, token package or brand-guideline page was opened for SSENSE, and the home page links to none, so none is cited. What the measurement does show is a compact, consistent system: three font families (two sans cuts and one serif), seven font sizes in ordinary use (11, 12.35, 13, 19, 20, 28.5 and 40px plus the 49.875px lead), two weights (400 and 100), three neutral inks (`#333333`, `#000000`, `#888888`), one hairline (`#979797`) and one radius (10px). `_research` records none. The shipped CSS exposes no root custom properties, so the de-facto system is its three faces, two grays, one hairline and one radius.

## Do's and Don'ts

Do set headlines in uppercase Inter1 with strong negative tracking; do pair them with light serif standfirsts; do use outlined 10px buttons with a `#979797` hairline; do let photographs carry the color; do tag stories with category and short date.

Don't add fills or brand colors to chrome; the page is neutral. Don't add shadows. Don't set body in bold. Don't round images or tiles. Don't use prices or promotional colors in chrome.

## Responsive Behavior

Mobile pass: headline 18px, line-height 24px, -0.25px tracking, rendered in a `span` (49.875px on desktop); body 18px weight 100 with 24px line-height (20px on desktop); header 50px high with text sized 9px at weight 500 (11px/400 on desktop). Mobile font sizes by characters: 18px (1,174), 12.25px (417), 11px (221), 13px (66), 28.5px (28). Column counts and navigation structure are not measured.

## Iteration Guide

1. White canvas, `#333333` ink, `#979797` hairlines, no accent color.
2. Uppercase Inter1 headlines with -2px tracking at 49.875px; JHA Times Now 20px light for copy.
3. Editorial tiles with tag, title and date; outlined 10px buttons only.
4. Keep dates abbreviated and categories as single words beside titles.
5. Verify with `node web/scripts/verify-designs.mjs --slug=ssense`.
