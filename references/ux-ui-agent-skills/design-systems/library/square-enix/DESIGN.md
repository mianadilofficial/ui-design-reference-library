---
version: alpha
name: "Square Enix"
category: "Gaming"
description: "Square Enix games portal (square-enix-games.com/en_EU/home): light grey #f0f0f0 page of three-column article cards, generic sans-serif at 16px body and 28px/700 headlines, white READ MORE buttons with #c80000 red bold uppercase text, near-black header and square corners."
colors:
  canvas: "#ffffff"
  page-largest: "#f0f0f0"
  ink: "#000000"
  primary: "#ffffff"
  on-primary: "#c80000"
  surface-3: "#4d4d4d"
  ink-5: "#e6e6e6"
  ink-6: "#a6a6a6"
typography:
  display:
    fontFamily: sans-serif
    fontSize: 28px
    fontWeight: 700
  display-mobile:
    fontFamily: sans-serif
    fontSize: 12.8px
    fontWeight: 700
  heading:
    fontFamily: sans-serif
    fontSize: 24px
    fontWeight: 800
    textTransform: uppercase
  body:
    fontFamily: sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  button:
    fontFamily: sans-serif
    fontSize: 16px
    fontWeight: 700
    textTransform: uppercase
  nav:
    fontFamily: proxima-nova, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 0px
rounded:
  none: 0px
spacing:
  s1: 1.6px
  s2: 8px
  s3: 9.6px
  s4: 10px
  s5: 11.2px
  s6: 16px
  s7: 19.2px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 11.2px 20px 9.6px
    height: 39px
  nav:
    textColor: "{colors.ink-6}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 1.6px 10px 0px
  footer:
    textColor: "{colors.ink-5}"
    rounded: "{rounded.none}"
---

# Square Enix

The measured page is `https://www.square-enix-games.com/en_EU/home` (queued as the bare domain), titled "SQUARE ENIX | The Official SQUARE ENIX Website", English, 7,470px tall with 642 visible elements. It is the European games-news home page of the publisher: a thin black header, then a dense grid of editorial cards about its games (Final Fantasy VII Revelation, Final Fantasy XIV, Dragon Quest, Octopath Traveler), each with a key-art image, a bold headline, a two-to-three line standfirst and a READ MORE button. A cookie dialog from the Osano consent library is present in the page; its styles are consent-tool controls and are excluded from the tokens (the page was re-extracted once for that reason).

## Overview

The brand's identity here is the artwork of the games themselves. Chrome is neutral and almost invisible: black header, light grey page, white card controls. The only brand-color accent is the red `#c80000` used for the text of READ MORE buttons and for a thin red rule under the header in the capture. Cards are separated by gaps of the grey page, not by lines. Headlines are plain declarative titles ("Final Fantasy VII Revelation launches on April 8, 2027", "Which FINAL FANTASY game should I play first?", "12 of the best action RPGs you should play from Square Enix"); standfirsts are one to three sentences, and truncate with a fade at the card's fixed height. Dates and release information are written out in full ("launches on April 8, 2027", "on 4 August 2026").

The capture runs through twelve cards in four rows of three. Subjects span expansion announcements (Evercold, the sixth Final Fantasy XIV expansion, dated January 2027), platform news (Final Fantasy XIV on Nintendo Switch 2), buyer guides ("14 of the best turn-based RPGs you should play from Square Enix"), developer interviews (Octopath Traveler 0, Dragon Quest VII Reimagined) and merchandise (the Final Fantasy XIV Cookbook Volume 2). One card carries an age-rating badge over its artwork. The mix shows a publisher voice that is informative and enthusiastic, with questions in titles and the first person plural in interviews ("how we reimagined", "how we rebuilt").

## Colors

Background areas measured: `#f0f0f0` (area weight 7,653, the page), `#000000` (401, header), `#4d4d4d` (243), `#ffffff` (216, buttons), `#0d0d0d` (102) and `#e6e6e6` (48). Text by characters: `#000000` (7,907), `#f0f0f0` (468), `#c80000` (360), `#4d4d4d` (27), `#e6e6e6` (24), `#a6a6a6` (21).

- `canvas` `#ffffff` and `primary` `#ffffff`: the white button and header-link ground; `page-largest` `#f0f0f0` is the grey page that fills most of the screen.
- `on-primary` `#c80000`: the red button text; `ink` `#000000`: headlines and body.
- `surface-3` `#4d4d4d`: the dark grey of the newsletter button text; `ink-5` `#e6e6e6`: footer text and the newsletter button fill; `ink-6` `#a6a6a6`: navigation text at rest (hover measured `rgb(204, 204, 204)` on GAMES, STORE, SUPPORT, MORE).

The consent tool's own variables (`--osano-*`, with `#f71a27` and `#c25b61` accents) are third-party and are not brand colors.

## Typography

The computed family on almost all text is the generic `sans-serif` (8,791 of the measured characters); `proxima-nova` is loaded at 400 and used for the navigation (21 characters), and Font Awesome 6 Free and Brands supply icons. Because the measured value is the generic keyword, no named brand typeface is claimed for the body or headlines.

- `display`: sans-serif 28px, weight 700 (card headlines, 2,650 characters).
- `heading`: sans-serif 24px, weight 800, uppercase ("CONNECT WITH SQUARE ENIX" in the footer).
- `body`: sans-serif 16px, weight 400, line-height 22.4px (5,629 characters).
- `button`: sans-serif 16px, weight 700, uppercase.
- `nav`: proxima-nova, sans-serif 16px, weight 400.
- `display-mobile`: 12.8px, weight 700 (from the mobile pass).

Weights by characters: 400 (5,443), 700 (3,010), 200 (317), 300 (27), 800 (24). Letter-spacing is `normal` everywhere (no tracking values were recorded). Smaller sizes are 14.4px (482 characters) for standfirst text and 19.2px for the newsletter button (weight 300).

## Layout

The capture shows a three-column grid of equal cards across the full width, with a narrow gutter and each card containing: image (top of the card), headline, standfirst, button at the bottom. The card ground is `#f0f0f0` like the page, so the white READ MORE buttons carry the contrast. The header holds the SQUARE ENIX logotype at left, then GAMES and MORE (each with a chevron), STORE and SUPPORT, and search, cart and account icons at right; its measured height is 40px. Paddings: 8px (80 elements), 56px (40), 9.6px (40), 11.2px (40), 20px (40), 10px (9). Gap: 16px (2). Generated spacing: 1.6, 8, 9.6, 10, 11.2, 16, 19.2, 20, 24, 32px.

## Elevation & Depth

Flat. One shadow is measured, `rgba(0, 0, 0, 0.1) 1px 1px 10px 1px` on a single element; it is not attributed to a content component here. Depth otherwise comes from artwork, from the white buttons on grey, and from a black header over a grey page.

## Shapes

Every measured content element is square: button, nav link and footer all compute to `0px` radius (`rounded.none`). One element in the measurement carries `32px`, and the capture shows circular floating widgets (a cookie icon and an edit button) at the card edges; those are tool overlays and the radius is not used as a brand token.

## Components

- **READ MORE button** (`button-primary`): white `#ffffff` fill, red `#c80000` text, 16px weight 700 uppercase, padding `11.2px 20px 9.6px`, height 39px, radius 0px. Hover not measured for this button.
- **Article card:** key art on top, 28px bold headline, 14.4px standfirst, button pinned at the bottom of a fixed-height tile.
- **Navigation:** 16px proxima-nova labels in `#a6a6a6` on black; hover to `rgb(204, 204, 204)`.
- **Newsletter button:** `SUBSCRIBE TO THE NEWSLETTER`, fill `#e6e6e6`, text `#4d4d4d`, 19.2px weight 300, height 60px (54px on mobile with 16px padding); the mobile pass reports it as the primary CTA.
- **Footer:** `CONNECT WITH SQUARE ENIX` heading in `#e6e6e6`, 24px/800; footer height 494px.

## Design System Architecture

No public design system or brand guideline was opened; `_research` records none and only the measured home page. The de-facto system is a news template with a short palette (black, white, `#f0f0f0`, `#c80000`), a generic sans-serif stack and a button spec. Root custom properties belong to the Osano consent library (`--osano-*`) and Font Awesome (`--fa-style-family-classic`); the site defines no brand tokens in `:root`.

## Do's and Don'ts

Do let key art provide color; keep chrome to black, white and `#f0f0f0`. Do use white buttons with red `#c80000` bold uppercase labels. Do write headlines as full sentences with specific dates. Do keep corners square.

Don't round buttons or cards. Don't add shadows to cards. Don't use red for large fills; it appears only as text and a thin rule in the measurements. Don't treat the consent dialog or floating widgets as brand components.

## Responsive Behavior

Mobile pass measurements: card headline 12.8px weight 700 (28px on desktop); standfirst 14.4px; button label 11.2px (360 characters); newsletter button 19.2px/300 with 16px padding and 54px height; heading 24px/800 unchanged; header 40px. Mobile font sizes by characters: 12.8px (2,650), 14.4px (482), 11.2px (360), 19.2px (27), 24px (24). Column count and navigation behavior on mobile were not measured.

## Iteration Guide

1. Page `#f0f0f0`, ink `#000000`, header black, buttons white with `#c80000` text.
2. Headlines 28px/700; body 16px/22.4px; buttons 16px/700 uppercase.
3. Three-column article grid, image first, button last, square corners.
4. Verify with `node web/scripts/verify-designs.mjs --slug=square-enix`.
