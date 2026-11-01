---
version: alpha
name: Christian Louboutin
category: "Luxury"
description: "Christian Louboutin's US homepage is a black-and-white shell around campaign photography: NB Akademie 12px body with 0.7px tracking, serif Loubi capital titles, square 36px outlined white buttons with 1px borders, a measured red #ce0a2c panel, and a #ffffff canvas."

colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  brand-red: "#ce0a2c"
typography:
  display:
    fontFamily: "\"NB Akademie\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28.5714px
  heading:
    fontFamily: "\"NB Akademie\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
  body:
    fontFamily: "\"NB Akademie\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  input:
    fontFamily: "\"NB Akademie\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 5px
spacing:
  s1: 1px
  s2: 3px
  s3: 3.5px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 12.5px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    padding: 6px 32px
    height: 36px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
---

# Christian Louboutin

## Overview

The measured page is us.christianlouboutin.com/us_en/ (the United States storefront; the title reads "Christian Louboutin United States - Official Website | Luxury shoes and leather goods"). The official site returned HTTP 403 to the research fetcher, so what follows comes from the extraction and the capture, not from reading the live page text.

The page is cinematic and campaign-led. A full-bleed video hero shows the Women's Spring/Summer 2027 "ETERNAL YOUTH SHOW" in blurred reds and blacks with a small white DISCOVER button. Below it, two tall portrait tiles (Winter 2026 WOMEN on a saturated red backdrop with a patent pump; Winter 2026 MEN in a baroque interior) share a thin white gutter, each with a centred serif title and an outlined white DISCOVER button. A further full-width panel, "LA PIGALLE - The comeback of an icon", shows a black patent stiletto on deep teal. A thin white promo strip at the very top reads "Secure your priority access to La Pigalle unveiled at the Women's Spring/Summer 2027 show."

The interface itself is almost invisible: black and white only, with the colour supplied by the campaign photography. The one chromatic value measured in the DOM is a strong red (`#ce0a2c`), found as a background colour over a notable area. The brand is widely known for its red lacquered outsole; the trademark article opened (thefashionlaw.com) records the red outsole's US registration in January 2008 and the court-modified wording "a red lacquered outsole on footwear that contrasts with the color of the adjoining ('upper') portion of the shoe". That article specifies a Pantone reference; this document does not equate the Pantone value with the measured web red, only reports the measured `#ce0a2c`.

## Colors

- **Canvas** `#ffffff`: the page background, the promo strip, header and gutters between tiles.
- **Ink** `#000000`: text on white (links, nav, promo strip) and the `primary` role. The site has no filled brand button, so the primary action colour is black text and the white outlined button on imagery.
- **Brand red** `#ce0a2c`: the only chromatic value in the measured backgrounds (352 area weight against 4788 for white). It appears as a flat red panel colour, in line with the red hero of the Women tile.
- White (`#ffffff`) is also the text and border colour on all image panels: eyebrow lines, titles and the outlined DISCOVER buttons are white on photography.
No semantic or hover colours were measured.

## Typography

Two families dominate by character count: `NB Akademie` (400, 500, 700 loaded) for interface, nav, body and buttons (about 2353 characters), and `Loubi` (400 loaded) for the large editorial titles (about 90 characters). A third item, the icon fonts `clb-icons` and `Magezon-Icons`, supplies the pictograms. The Loubi serif titles (ETERNAL YOUTH SHOW, WOMEN, MEN, LA PIGALLE) are set in uppercase.

- **Display** (the extractor's h1, the logo link text "Christian Louboutin - Home"): NB Akademie 20px / 28.5714px, weight 400. It is the logo block, not an editorial headline.
- **Heading**: NB Akademie 14px / 22px, weight 400; the eyebrow lines ("Women's Spring/Summer 2027", "Winter 2026") and button labels use this size, with 0.7px tracking when uppercase.
- **Body**: NB Akademie 12px / 18px, weight 400, letter-spacing 0.7px; the most-read size on the page (1398 characters).
- **Input**: NB Akademie 16px / 24px.
The exact size and line height of the Loubi titles were not captured as a role, so no token is declared for them; they are described qualitatively as a high-contrast serif in capitals centred over images. The measured sizes list includes a 40px step used by roughly the same number of characters as Loubi, but that correspondence was not verified. NB Akademie is a commercial face (a search result describes it as designed by Stefan Gandl, but no opened page ties it to this site); Arial and Helvetica Neue are the declared fallbacks.

## Layout

The page is 5453px tall at 1280px. The header is an overlay on the hero: MENU with a hamburger at left, the handwritten-script Christian Louboutin logo centred, and search, account, wishlist and bag icons at right. Content bands are: full-width video hero; a two-column tile pair separated by a thin white gutter with a white margin around; another full-width panel; then lower bands and a long footer (976px tall) with a newsletter signup. Spacing values measured include 1, 3, 3.5, 4, 5, 6, 8, 10, 12 and 12.5px at the small end; the generous feel comes from large imagery rather than spacing tokens. Text and button sit at the bottom centre of each image.

## Elevation & Depth

Flat. No shadows were found on any measured element. Imagery has its own depth (spotlighting, long shoe shadows in the photographs). Dark overlays are soft gradients inside the images to hold white text; the white gutters between tiles are the only structural separators.

## Shapes

Buttons are square: the outlined DISCOVER button measured a 0px radius with a 1px white border. The only non-zero radius measured on the page is `xs` 5px, found on four elements. Image tiles are rectangular. Hold corners square.

## Components

- **Outlined button (button-secondary)**: transparent fill, white 1px border, white label, NB Akademie 14px uppercase with 0.7px tracking, padding 6px 32px, 36px tall, 0px radius ("DISCOVER", 136px wide). It is the sole call-to-action style on imagery.
- **Promo strip**: a thin white bar at the top with a 12px underlined link ("Secure your priority access") and the rest of the sentence in plain text.
- **Header**: icon row and logo script; MENU label in 12px uppercase.
- **Image tile**: full-bleed image, centred eyebrow, serif title, outlined button, anchored to the bottom.
- **Playback controls** (mute, pause) at the lower left of the hero: utility.
Footer newsletter fields exist (an input measured 16px NB Akademie, 55px tall, 24px 32px 6px 0px padding), but the extractor read white text on a white footer, which is a measurement conflict, so no footer or input component is declared.

## Design System Architecture

No public Christian Louboutin design system or token package was found, and the official site could not be opened for this research (HTTP 403). The measured page exposes no root custom properties; styling lives in compiled class CSS. Fonts are `NB Akademie`, `Loubi` and icon sets (`clb-icons`, `clb-icons-revamp`, `Magezon-Icons`; the last suggests a Magento-based storefront with a page builder). The de-facto rules are: black and white UI, imagery as colour, serif capitals for titles, small tracked sans for everything else, square outlined buttons. One search result mentioned a press kit with brand book, but no page confirming it was opened, so it is not cited.

## Do's and Don'ts

Do:
- Keep chrome black and white and give every campaign image the full width of its tile.
- Centre a short eyebrow, a serif capital title and a white outlined button at the bottom of each image.
- Track small sans text at 0.7px; use 12px for body and 14px for labels.
- Use the red only as a flat panel or photographic tone.

Don't:
- Do not add filled buttons, gradients or shadows to interface elements.
- Do not round corners beyond the small 5px radius seen on minor controls.
- Do not put the red behind small text.
- Do not use the promo strip's styling for brand calls to action.

## Responsive Behavior

The extraction measured the 390px viewport but its h1 role is unchanged at 20px, so type sizes are stable on mobile. Only the desktop capture was inspected, so tile layout, hero text size and the promo strip at narrow widths were not measured.

## Iteration Guide

1. Set white canvas, black ink, NB Akademie 12px / 18px with 0.7px tracking.
2. Build campaign tiles as image plus eyebrow plus serif capital title plus a 36px outlined white button.
3. Use the handwritten-script logo centred in an overlay header; keep icons thin and monochrome.
4. Introduce the measured red `#ce0a2c` only as photographic colour or a flat panel.
5. Run `node web/scripts/verify-designs.mjs --slug=christian-louboutin` after each change.
