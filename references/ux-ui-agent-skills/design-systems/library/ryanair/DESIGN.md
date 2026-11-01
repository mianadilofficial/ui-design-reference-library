---
version: alpha
name: Ryanair
category: "Airlines"
description: "Ryanair Ireland home (ryanair.com/ie/en): Roboto only at 400 and 700, navy #073590 text on a blue booking header, yellow #f1c933 pill actions (16px radius, 32px high), light #f4f4f4 canvas with white cards, 2px and 4px card radii and very soft shadows."
colors:
  canvas: "#f4f4f4"
  ink: "#6c7079"
  primary: "#f1c933"
  on-primary: "#073590"
  surface-2: "#ffffff"
  ink-3: "#2e2e2e"
  ink-4: "#166bc8"
  ink-6: "#000000"
typography:
  display:
    fontFamily: Roboto, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28px
  heading:
    fontFamily: Roboto, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 28px
  body:
    fontFamily: Roboto, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
  button:
    fontFamily: Roboto, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
  nav:
    fontFamily: Roboto, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
  input:
    fontFamily: Roboto, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 22px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 8px
  xl: 16px
  2xl: 36px
  3xl: 44px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 0px 16px
    height: 32px
  link:
    textColor: "{colors.ink-4}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.surface-2}"
    padding: 0px 32px 0px 28px
  nav-link:
    textColor: "{colors.ink-4}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink-6}"
    typography: "{typography.input}"
    height: 22px
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
    padding: 15px 8px 16px
    borderColor: "{colors.canvas}"
---

# Ryanair

## Overview

The measured page is https://www.ryanair.com/ie/en (title "Official Ryanair website | Cheap flights from Ireland | Ryanair"). It is an airline booking home. The top of the page is a deep-blue booking block: the RYANAIR wordmark with its harp mark at left, utility links (Plan, FAQs, My Bookings, a flag selector, Log in) and a yellow "myRyanair Portal" pill at right; beneath it a tab row (FLIGHTS, CAR HIRE, HOTELS, GIFT CARDS), trip-type radios (Return trip, One way, Multicity with a NEW tag, Apply promo code) and a white From/To field pair with a wide yellow "Search" button. Below, the page turns light gray (#f4f4f4): loud promotional banners with oversized white-and-yellow condensed headlines and a countdown timer, then sections titled "Our Partners and Extras", "Explore Ryanair" and "Explore Europe", then a footer of link columns, app-store badges, social icons and payment logos.

The voice is blunt and discount-driven: "Book now", "Buy now", "20% OFF FLIGHTS", "Flights cheaper than your lunch". The interface around the banners is calm and utilitarian; the shouting lives in the banners.

## Colors

`canvas` #f4f4f4 is the page background and the largest painted area (5415 weight). `surface-2` #ffffff (1447) fills cards, input fields and the footer's payment strip. The action color is yellow `primary` #f1c933, the fill of the myRyanair Portal pill and, in the capture, the Search, Book now, Buy now and "Sign me up!" buttons. Its pair `on-primary` is navy #073590, used for button text and for the section headings (176 characters) such as "Our Partners and Extras". `ink-4` #166bc8 is the link blue (181 characters), used for nav links and footer links such as "Help centre". Text colors on light areas: `ink-3` #2e2e2e for body copy (290), `ink` #6c7079 for secondary and footer link text (864 characters), `ink-6` #000000 for input text (42). White text sits on the blue header (858 characters). #f1c933 also colors 14 characters of text.

Borders measured: #ffffff (4), #e0e1e3 (3), #edeef0 (2), #d2d6d9 (2), #c3c7cc (1) and #f4f4f4 (1), a ladder of light grays for card and field edges. The captured promotional banners add reds and greens (for example the "ORDER TO SEAT" green tab and the red "FROM" and "20% OFF" badges), but they are campaign artwork and were not measured as interface tokens. A subscription popup ("Why are you not subscribed?") that overlays the right side of the capture is a marketing widget and is not documented as brand UI.

## Typography

Roboto is the only family (2507 characters), loaded in regular and 700. Measured roles: `display` is Roboto 700, 24px / 28px, navy (section titles); `heading` is Roboto 700, 16px / 28px, navy (tile titles such as "GIFT CARDS"); `body` is Roboto 400, 14px / 18.2px in #2e2e2e; `button` is Roboto 700, 14px / 20px; `nav` is Roboto 400, 16px / 20.8px; `input` is Roboto 400, 18px / 22px. Size counts: 14px (1371), 16px (564), 12px (348, the footer and legal lines), 20px (119), 22px (53), 24px (52). Weights: 400 (1741 characters) and 700 (766). No letter-spacing is measured and no uppercase transform is recorded in the extraction; the capitals visible on tiles and tabs come from the text itself. The very large condensed lettering in the promotional banners is artwork and was not measured as live text.

## Layout

A 1160px-wide container (the h1 and link rows measured 1160px) is centered on the page. The booking block spans the full width with the search form inside the container. Content sections use four equal columns: partner tiles (blue title bar, photo, round icon badge, label), the "Explore Ryanair" quick-link cards (icon, bold label, short yellow underline) and the footer columns. "Explore Europe" is a three-card photo carousel with round white arrow buttons at its edges. Gaps measured: 16px (6 uses) and 18px (2). Paddings: 16px (19), 10px (8), 20px (5), 12px, 8px, 4px, 24px and 32px. The nav measured padding is `0px 32px 0px 28px` and the footer padding `15px 8px 16px`.

## Elevation & Depth

Depth is soft and low. The common shadow is `rgba(0, 0, 0, 0.05) 0px 2px 4px 0px` (8 uses) on white cards. Stronger values exist for floating layers: `rgba(0, 0, 0, 0.3) 2px 2px 8px 0px` (3 uses), `rgba(0, 0, 0, 0.1) 0px 0px 1px 0px` (1) and `rgba(0, 0, 0, 0.6) 0px 12px 24px 0px` (1). Cards on #f4f4f4 are white with the faint shadow; hovering the My Bookings card in the extraction shows a navy #073590 border on a white card with the same faint shadow.

## Shapes

Radius is a small-to-pill scale. Most surfaces use 2px (16 uses, `xs`) or 4px (12 uses, `md`). The yellow pill button measures 16px (`xl`) at 32px height; 36px (4 uses, `2xl`) and 44px asymmetric corners (`0px 44px 44px 0px`) belong to the larger search-form and field ends. Also measured: 3px, 8px, 4px on one side (`4px 0px 0px 4px`, `0px 4px 4px 0px` for joined fields) and 50% on one round element. Photo and promo banners are rectangular in the capture.

## Components

**Primary button**: yellow #f1c933, navy #073590 Roboto 700 14px text, 16px radius, `0px 16px` padding, 32px high. The larger Search button follows the same colors.

**Nav**: white Roboto 16px links on the blue header, padding `0px 32px 0px 28px`; the myRyanair Portal pill sits inside it.

**Link**: #166bc8 Roboto 16px / 20.8px, used in the footer and utility rows.

**Text input**: black #000000 Roboto 18px / 22px on white, with a small gray "From" / "To" label above; the fields join the yellow Search button.

**Card (partner tile)**: white, 2px or 4px corner, faint shadow; a navy header strip with white condensed title, a photograph, a circular navy icon badge and a navy bold label.

**Quick-link card**: white, icon, bold navy label, short yellow underline bar.

**Footer**: white fill, #6c7079 text, 12px copyright "2026 © Ryanair DAC. All rights reserved." and payment-method logos.

## Design System Architecture

No public Ryanair design system, brand-guideline page or token package was opened for this brief, so there is no official source to cite. The extraction found no CSS custom properties (the rootVars set is empty), so the system is carried by literal values: navy #073590, yellow #f1c933, link blue #166bc8, gray #6c7079, ink #2e2e2e, surfaces #f4f4f4 and #ffffff, and one family, Roboto, in two weights. The extractor was run twice (once from the batch file to retry around the popup); the measured tokens were identical in both runs.

## Do's and Don'ts

- Do use yellow #f1c933 with navy #073590 text for every primary action.
- Do use Roboto at 400 and 700 only, with 14px body and 24px section titles in navy.
- Do put white cards with 2px or 4px corners and the faint shadow on #f4f4f4.
- Do keep promotional shouting inside banners and the interface neutral.
- Do use #166bc8 for text links.
- Don't treat the subscription popup, countdown or banner reds and greens as interface tokens.
- Don't use heavier shadows than `0.05` alpha on ordinary cards.
- Don't introduce a second font family.

## Responsive Behavior

A 390px mobile pass was recorded. The h1 stays Roboto 700 at 24px / 28px in navy, and mobile size counts are 14px (1329), 16px (564), 12px (348), 20px (119), 22px (53) and 24px (52). Layout columns, navigation behavior and breakpoints were not measured.

## Iteration Guide

1. Start with #f4f4f4 canvas, white cards, #2e2e2e text, navy #073590 headings and yellow #f1c933 actions.
2. Set Roboto 14px / 18.2px body, 700 for headings and buttons.
3. Build the pill button at 32px high, 16px radius, `0px 16px` padding.
4. Keep card shadows at `rgba(0, 0, 0, 0.05) 0px 2px 4px 0px`.
5. Gate: `node web/scripts/verify-designs.mjs --slug=ryanair`.
