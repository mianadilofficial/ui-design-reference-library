---
version: alpha
name: Red Planet Hotels
category: "Thai Brands"
description: "Budget hotel chain in the Philippines on a Wix site: white canvas, black ink, red #da291c pill buttons with 30px radius, uppercase Lemon Sans-style display headings at 60.7px, Didact Gothic body at 20px, black footer."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#da291c"
  on-primary: "#ffffff"
  surface-light: "#eeeeee"
  red-header: "#ec1d23"
  card-bg: "#d6d6d6"
typography:
  display:
    fontFamily: wfont_fd825a_ad90e6567b804f9daf4e0d067c6ca331, wf_ad90e6567b804f9daf4e0d067, orig_lemonsansbold
    fontSize: 60.7114px
    fontWeight: 400
    lineHeight: 60.7114px
    textTransform: uppercase
  display-mobile:
    fontFamily: wfont_fd825a_ad90e6567b804f9daf4e0d067c6ca331, wf_ad90e6567b804f9daf4e0d067, orig_lemonsansbold
    fontSize: 21.0243px
    fontWeight: 400
    lineHeight: 21.0243px
    letterSpacing: 0.840971px
    textTransform: uppercase
  subheading:
    fontFamily: helvetica-w01-roman, sans-serif
    fontSize: 30.3557px
    fontWeight: 400
    lineHeight: 33.3913px
    letterSpacing: "-1.82134px"
  body:
    fontFamily: wfont_0f5937_734facc813ce4fed9174bdc04fc39781, wf_734facc813ce4fed9174bdc04, orig_didact_gothic_regular
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
  button:
    fontFamily: wfont_fd825a_ad90e6567b804f9daf4e0d067c6ca331, wf_ad90e6567b804f9daf4e0d067, orig_lemonsansbold
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 10px
    fontWeight: 400
rounded:
  xs: 14.81px
  sm: 15px
  md: 15px
  lg: 15px
  xl: 16px
  2xl: 22px
  3xl: 30px
  4xl: 30px
  pill: 9999px
spacing:
  s1: 2.69px
  s2: 5.38px
  s3: 12px
  s4: 12.8px
  s5: 20px
  s6: 30px
  s7: 70px
  s8: 87.8px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    height: 42px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    height: 42px
  nav:
    backgroundColor: "{colors.red-header}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

## Overview

Red Planet Hotels (https://www.redplanethotels.com) is a budget hotel brand operating in the Philippines; the page title is "Red Planet Hotels | Modern, Clean & Reliable Hotels in the Philippines" and the hotels page lists locations such as Red Planet BGC The Fort, Red Planet Aseana Manila City and Red Planet Makati Amorsolo with addresses, phone numbers and drive times to nearby malls and airports. The home page copy describes the product directly: "Designed for the modern traveler, fast-paced, tech-savvy, and always looking for the best value", and the stated goal is "becoming your favorite budget hotel".

The site is built on Wix (the font names are Wix-generated `wfont_...` and `wf_...` identifiers and the root variables are `--wst-...` and `--color_NN` Wix theme variables). Visually it is a bold, high-contrast marketing page: a deep red header bar with small pill buttons (BOOK NOW, MY ACCOUNT) and a round menu button, a full-width hero carousel with oversized white and red lettering over photography, then alternating two-column blocks pairing a large rounded-corner photograph with centred copy. "REST AND DECOMPRESS IN STYLE" and "MEMBERSHIP" are set as uppercase black display headings; "OUR HOTELS" uses the same display face with "HOTELS" in red. Photography shows real guests in hotel corridors and lobbies, with a hotel facade carousel under "OUR HOTELS". Each block ends with one red pill call to action: BOOK NOW, JOIN NOW.

The voice is short and benefit-led: savings, comfort, connectivity, reliable service, member perks such as birthday-month discounts. Density is low to moderate; the page measured 7,362px tall at 1280px wide with large photographs doing most of the work.

## Colors

- **Primary red `#da291c`** is the fill of both measured call-to-action buttons (BOOK NOW, JOIN NOW) with white `#ffffff` 20px text. It covers 470 weight units of background area.
- **Header red `#ec1d23`** is the measured background of the top bar (BOOK NOW / MY ACCOUNT strip) and also the accent color of the word "HOTELS" and a few text runs (8 characters in `#ec1d23`, 15 in `#da291c`).
- **Black `#000000`** is the main text color (756 characters) and the footer background (1,148 area weight) with white footer text.
- **White `#ffffff`** is the page canvas (11,471 area weight) and the second-most common text color, used on dark photography and on buttons.
- **Neutrals:** `#eeeeee` (surface-light) and `#d6d6d6` (card-bg) are measured light-grey section and card fills; `#545454` appears as a mid-grey background area.
- A translucent black `#00000099` is a consent scrim that the extraction hid; it is not a brand color and is not documented as UI.
- `#0000ee` was recorded for links and is the browser default link color, so it is dropped.

## Typography

Three families carry the page, all delivered as Wix-managed web fonts.

- **Display and buttons:** the stack `wfont_fd825a_ad90e6567b804f9daf4e0d067c6ca331, wf_ad90e6567b804f9daf4e0d067, orig_lemonsansbold`. The original-font name in the stack is `lemonsansbold`. Display size is 60.7114px with line-height 60.7114px, uppercase; letter-spacing at 60.5997px is 2.42399px. At the 390px mobile viewport display is 21.0243px with 0.840971px letter-spacing, uppercase.
- **Body:** `wfont_0f5937_734facc813ce4fed9174bdc04fc39781, wf_734facc813ce4fed9174bdc04, orig_didact_gothic_regular`, 20px / 26px, weight 400. This face is the most-used by character count (646).
- **Subheading:** `helvetica-w01-roman, sans-serif` at 30.3557px / 33.3913px with letter-spacing -1.82134px (63 characters).
- **Button:** the display face at 20px / 28px.
- **Nav:** `Arial, Helvetica, sans-serif` at 10px.

Every measured text run is weight 400; hierarchy comes from size, case and face, not weight. Another size, 79.3333px with 3.17333px letter-spacing, appears for nine characters (the hero lettering). Didact Gothic and Lemon Sans are named only through the stack's `orig_` identifiers; Wix serves them as hashed web fonts, so the hashed family names are what shipped CSS requests. Public substitutes were not measured.

## Layout

The desktop page is 1280px wide. A red header holds the logo at left and BOOK NOW / MY ACCOUNT pills plus a round black menu button at right. The hero is a carousel with arrows. Below it, content alternates between a photograph on one half and centred text and a button on the other, each photograph with rounded corners (values of 14.8 to 16px recorded). The hotel section shows photo cards in a horizontally scrolling row. The footer is black with white 18px text ("Connect with us" and a link list).

Measured paddings are 30px (30 occurrences), 12px, 12.8px, 5.38px, 20px, 70px and 87.8px; the single 2.69px gap is used in the header pills. Inner copy blocks are centre-aligned beside each photograph.

## Elevation & Depth

Shadows are effectively absent: the only recorded box-shadow is `rgba(19, 25, 70, 0) 1.5px 3.71px 9px 0px`, which has zero alpha. Depth comes from photography, the red header against the white page, and text laid over darkened hero imagery.

## Shapes

Shape language is round. Measured radii: 16px (15 occurrences), 14.9998px, 14.8133px, 15px and 22px for photos and cards; 30px for the red pill buttons; 29.9996px; 201.575px and 999px for fully round elements; 50% for circles (the menu button). Some cards use asymmetric corner values such as `0px 15.0001px 15.0001px 0px`. The primary button radius is 30px at a 42px height, which reads as a pill.

## Components

- **Primary button (BOOK NOW):** `#da291c` fill, white 20px display-face text, 30px radius, 42px tall.
- **Secondary button (JOIN NOW):** measured identical to the primary: red fill, white text, 30px radius, 42px tall.
- **Header:** `#ec1d23` bar with small uppercase pills (BOOK NOW, MY ACCOUNT) in 10px Arial-stack text, and a round menu control.
- **Cards:** `#d6d6d6` fill, 15px radius, black text.
- **Footer:** black `#000000` with white text.
- Chat, promo popup and consent controls on the page are third-party or promotional overlays and are not brand components.

## Design System Architecture

No public design system or brand-guideline page was found: /brand, /press and /design return 404 and the hotels page has no such link. The de-facto system is the Wix theme. The root declares Wix variables such as `--wst-font-style-body-large: var(--font_7)`, `--font_9: normal normal normal 14px/1.3em helvetica-w01-roman,sans-serif`, `--wst-button-color-border-secondary-hover` and a numbered palette (`--color_12: 214,214,214`, `--color_37: 0,0,0`, `--color_60: 255,255,255`). Palette entries `--color_43` and `--color_48` (217,28,100) and `--color_25` (255,233,0) exist in the theme but were not observed on measured surfaces, so they are not tokens here. The measured `#d6d6d6` card fill matches theme color_12 (214,214,214).

## Do's and Don'ts

Do use `#da291c` for the single action color with white text and a 30px pill radius. Do set headlines uppercase in the display face at weight 400. Do pair each content block with a rounded photograph and one pill call to action. Do keep the footer black with white text.

Don't use `#0000ee` for links (it is the browser default). Don't add shadows; the measured page uses none. Don't use heavy font weights; every measured run is 400. Don't treat the scrim, the promotional popup or the chat bubble as brand UI.

## Responsive Behavior

Measured at 390px wide: the h1 and h2 are 21.0243px display type; body text is 15px; the primary CTA remains 20px with `#da291c` fill and white text; nav text is 9.84064px. The mobile layout record shows `headerLinksVisible: 3`, `menuToggleVisible: true` with label "Menu", and `maxCardColumns: 2`. Other breakpoints, tablet behavior and hover states were not measured.

## Iteration Guide

1. Copy tokens from the frontmatter unchanged; the hashed font stack names are the measured values.
2. Build pages from alternating photo and copy halves with 15px photo corners.
3. Use one `#da291c` pill CTA per block, 42px high, 30px radius.
4. Set display text uppercase at 60.7114px on desktop and 21.0243px on mobile.
5. Keep neutrals to `#ffffff`, `#eeeeee`, `#d6d6d6` and `#000000`.
6. For anything unmeasured (hover, tablet, dark mode), check the live site first.
