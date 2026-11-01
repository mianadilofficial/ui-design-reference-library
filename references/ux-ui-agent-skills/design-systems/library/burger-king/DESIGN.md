---
version: alpha
name: Burger King
category: "Food & Beverage"
description: "Burger King (bk.com) is a US ordering app-on-the-web: a warm cream canvas (#f8f1e7) with chocolate-brown type (#502314) in the rounded Flame typefaces, a flame-red (#d62300) pill CTA 50px tall, outlined brown pill buttons, white 16px-radius promo cards with a faint shadow, and a mobile-app tab bar."
colors:
  canvas: "#f8f1e7"
  page-body: "#ffffff"
  ink: "#502314"
  ink-muted: "#82685b"
  ink-black: "#000000"
  primary: "#d62300"
  on-primary: "#ffffff"
  primary-hover: "#a71b00"
  surface-grey: "#f2f2f2"
  outline-hover-fill: "#50231426"
  button-secondary-text: "#0000008c"
  button-secondary-border: "#0000004d"
typography:
  display:
    fontFamily: Flame-Bold
    fontSize: 60px
    fontWeight: 400
    lineHeight: 67.5px
  heading:
    fontFamily: Flame-Regular
    fontSize: 24px
    fontWeight: 400
    lineHeight: 29px
  heading-mobile:
    fontFamily: Flame-Regular
    fontSize: 18px
    fontWeight: 400
    lineHeight: 22px
  greeting-mobile:
    fontFamily: Flame-Regular
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: Flame-RegularSans
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: material
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 2px
  md: 16px
  pill: 9999px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 30px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-outline:
    textColor: "{colors.ink}"
    rounded: "{rounded.pill}"
    borderColor: "{colors.ink}"
  button-outline-hover:
    backgroundColor: "{colors.outline-hover-fill}"
  button-secondary:
    textColor: "{colors.button-secondary-text}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 36px
    borderColor: "{colors.button-secondary-border}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 1px 1.41px 0px
---

## Overview

This document describes the US home page of Burger King, https://www.bk.com/ (title "Burger King", `lang="en"`). The page is not a brochure site; it is an ordering front end. The home screen is a single column of large promotional blocks, a persistent header with a menu button, the wordmark and a "View Cart" pill, and a bottom tab bar (Home, Menu, Offers, Rewards) of the kind found in a phone app. The desktop capture is 1,280px wide and 1,623px tall.

The look is warm, appetising and a little retro. The canvas is a cream (`#f8f1e7`, also the page's `theme-color` meta value), text and outlines are a chocolate brown (`#502314`), and the only strong colour is a flame red (`#d62300`) reserved for the ordering action. Headlines are set in a heavy, rounded, soft-cornered display face (Flame-Bold) that echoes the food photography; body text uses Flame-RegularSans. Photographs are big and tightly cropped: the Whopper floats over the cream background with no frame.

Reading the capture from the top: a thin header with a hamburger icon at the left, the BURGER KING wordmark centred, and at the right a user icon and an outlined "View Cart" pill with a bag glyph; a time-based greeting ("Good Morning!" with a coffee emoji); the h1 "The Whopper® Has Never Tasted Better." in four lines of brown display type at the left, a red "Order Pickup" pill under it and an outlined "Order Delivery" pill under that, each with a leading icon; at the right the hero burger photograph with a "WHOPPER WEDNESDAY" lockup in red and brown and an "Order Now" label; a white promo card for the Burger King Foundation's 20th anniversary ("Donate in the BK® App") whose image sits in an orange patterned frame, with an outlined "Order Now" pill at its lower right; then a grey band (`#f2f2f2`) with a phone mock-up showing a QR code and the line "Save $$$ With offers on demand"; and the bottom tab bar with a brown bar marking the active "Home" tab.

Voice is casual and punchy ("Save $$$", "Good Morning!"), with legal micro-copy in a tiny size under the hero ("At participating U.S. Burger King® restaurants.").

## Colors

- **Cream `#f8f1e7` (canvas).** The body background and the largest background area by far (8,989 units); matches the page's `theme-color` meta tag.
- **White `#ffffff` (page-body).** Promo cards and the button label colour on red.
- **Brown `#502314` (ink).** The main text colour (585 characters), the h1, the h2, card titles, the border of the outlined pills and a background fill on 67 units of area; the capture shows a brown bar over the active Home tab.
- **Flame red `#d62300` (primary).** Fill of the "Order Pickup" CTA; hover fills `#a71b00`.
- **Grey band `#f2f2f2`.** The app-promo band (2,077 units of area).
- **Muted brown `#82685b`.** A lighter text colour on 17 characters; **black `#000000`** appears on 16 characters.
- **Outlined-pill hover.** On "Order Delivery" and "Order Now" the hover fill is `rgba(80, 35, 20, 0.15)`, a 15% tint of the brown, recorded as `#50231426`; the text stays `#502314`.
- **"View Cart" pill.** Text `#0000008c` (black at 55%) with a `1px solid #0000004d` border.

The consent dialog at the lower right of the capture (a cream-beige panel with its own text colours, `#f4ebdc` fill and a heavy shadow) is a cookie-consent control, not brand UI, so none of its colours, its 13.008px "Flame Sans" text, its 2.5px radius or its `0px 0px 18px` shadow are used here.

## Typography

Three Flame families, each loaded as its own font: **Flame-Bold** for the h1 (60px/67.5px, measured weight 400), **Flame-Regular** for the h2 and card titles (24px/29px) and for the greeting, and **Flame-RegularSans** for the body element and running text (16px/24px, 581 characters). The extractor also lists `material` (the family the extractor recorded on the red CTA and the cart pill, whose labels begin with an icon glyph; the label's own font was not captured separately), FontAwesome and `Tiki` among the declared faces. Flame appears only as site-specific font files; no licence or foundry page was opened, so no substitute is recorded.

Sizes by characters: 13.008px 422 (cookie banner text, excluded), 12px 331, 14px 204, 16px 49, 9px 47, 60px 37, 30px 29, 24px 23, 20px 14. Weights: 400 on 1,110 characters, 700 on 30, 600 on 16. Mobile (390px) measured the h2 at 18px/22px and the greeting at 20px/24px; the mobile h1 was not captured (the extractor's mobile h1 was the greeting, a `div`).

Headlines are title-case with a registered mark after "Whopper" and "BK"; the h1 breaks into four short lines at the 387px text width.

## Layout

Content sits in one left-aligned column on a cream page, with the hero image occupying the right half. The h1 text block is 387px wide and 270px tall; the donation card is 588px wide and 474px tall; promo blocks are left-aligned at the page margin and leave the right side of the screen empty beside the card. A full-width grey band holds the app promotion. Measured paddings are 16px (10 elements), 5px, 8px, 40px, 12px, 20px, 30px, 10px and 24px; the only gap measured is 16px. The header is a single slim row with a 1px divider and the tab bar sits at the bottom of the capture. Arrangement is by large blocks; grid columns were not measured.

## Elevation & Depth

Almost flat. The promo card carries one tiny shadow, `rgba(0, 0, 0, 0.2) 0px 1px 1.41px 0px`, and a 16px radius (`16px 16px 0px 0px` on its image). The hero burger casts its own photographic shadow on the cream. Outlined buttons have no shadow. The shipped CSS includes larger shadows (`0 0 18px rgba(0,0,0,.2)`, `0 0 4px rgba(0,0,0,.3)`, `0px 2px 10px -3px #999`), but the 18px one belongs to the cookie dialog and the others were not mapped to elements.

## Shapes

Pills and soft rectangles. Radii measured: `9999px` on 5 elements (the CTA, outlined pills and the cart pill), 2px on 2 elements, 16px on the donation card, `16px 16px 0px 0px` on its image, 2.5px on the cookie panel (excluded). The h1 face has rounded terminals and the header wordmark is set in rounded capitals.

## Components

- **Primary button.** `#d62300` fill, white label, pill radius, `8px 16px` padding, 50px tall, 300px wide at desktop (358px, full width, at 390px); a bag icon leads the "Order Pickup" label. Hover fills `#a71b00`.
- **Outlined button.** Transparent pill with a 1px `#502314` border and brown label ("Order Delivery", "Order Now"); hover fills a 15% brown tint.
- **Cart pill.** "View Cart": 36px tall, 111px wide, `8px 16px` padding, 1px `#0000004d` border and `#0000008c` text.
- **Promo card.** White, 16px radius, framed image on top, a 24px Flame-Regular title, a small paragraph, a "See Terms." underlined link and an outlined "Order Now" pill at the lower right.
- **Header.** Menu icon, centred wordmark, user icon and the cart pill, over a hairline.
- **Bottom tab bar.** Four labelled tabs (Home, Menu, Offers, Rewards) with icons; the active tab has a brown bar above its icon.
- **App band.** Grey `#f2f2f2` background, a phone mock-up showing a QR code, "Scan to Download App", and black store badges beside the headline.

## Design System Architecture

No public or official design system for Burger King was found: the opened page https://www.bk.com/ is a bare HTML shell for an Expo app (an `expo-reset` style block citing the react-native-web setup guide, a `<div id="root">`, a `/_expo/static/js/web/index-….js` bundle and the note "Use static rendering with Expo Router"), plus a OneTrust cookie notice, and links to no brand guideline page. The extractor recorded zero `:root` custom properties, so tokens are not exposed as CSS variables; they live in the JavaScript bundle, which was not readable for token names. The measured values are therefore the system: three Flame font files, a cream, brown and red palette, 16px cards and pill buttons. The page's `theme-color` meta is `#F8F1E7`.

## Do's and Don'ts

Do:
- Use cream `#f8f1e7` as the page and `#ffffff` for cards.
- Reserve flame red `#d62300` for the one ordering action per view, as a 50px pill with a white label and hover `#a71b00`.
- Set display text in Flame-Bold, section and card titles in Flame-Regular, and running text in Flame-RegularSans, all in brown `#502314`.
- Use outlined brown pills for secondary actions, with a 15% brown tint on hover.
- Show food photography large and uncropped on the cream, not inside frames.
- Keep a bottom tab bar with Home, Menu, Offers and Rewards.

Don't:
- Don't use red for headings or text.
- Don't use sharp-cornered buttons; the CTA is a full pill.
- Don't document or reuse the cookie banner (its beige fill, Flame Sans text or shadow) as part of the brand.
- Don't add heavy shadows; the one measured card shadow is 1px.
- Don't use a grey that is not `#f2f2f2` for bands.

## Responsive Behavior

Measured at 390px: the "Order Pickup" button is 358px wide and 50px tall (full width of the content area), the greeting is 20px/24px in a 358px-wide box, the "Donate in the BK® App" h2 is 18px/22px in a 342px-wide box (from 24px/29px on desktop), and the character counts by size are 12px 328, 14px 204, 9px 47, 30px 29, 16px 28, 18px 21, 15px 20, 20px 14. The extractor recorded no custom properties on `:root`, so no breakpoint variables were read. Whether the tab bar, the hero image and the cards re-arrange on mobile was not measured beyond these numbers.

## Iteration Guide

1. Set the canvas `#f8f1e7`, cards `#ffffff`, ink `#502314`, primary `#d62300`.
2. Load Flame-Bold, Flame-Regular and Flame-RegularSans (or the closest rounded display and sans pair you are licensed for).
3. Build the header and tab bar, then the hero: h1 at 60px/67.5px, a 50px red pill and an outlined pill, hero photo at the right.
4. Add promo cards with a 16px radius and a 1px shadow, and the `#f2f2f2` app band.
5. Verify the hover states: red to `#a71b00`; outlined pills gain `#50231426`.
6. Run `node web/scripts/verify-designs.mjs --slug=burger-king` and compare against `web/data/captures/burger-king.jpg`.
