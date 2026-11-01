---
version: alpha
name: Klarna (US home)
category: "Banking & Insurance"
description: "Klarna's US home page (klarna.com/us) pairs near-black plum #0b051d with signature Klarna pink #ffa8cd, sets 84px bold Klarna Title headlines over Klarna Text body, and uses 99999px pill buttons, 16px cards and 48px device-frame corners."
colors:
  canvas: "#ffffff"
  ink: "#0b051d"
  primary: "#0b051d"
  on-primary: "#f9f8f5"
  surface-black: "#000000"
  ink-plum: "#282636"
  green-deep: "#046234"
  on-dark-soft: "#fefcff"
  ink-muted: "#504f5f"
  hairline: "#e2e2e7"
  primary-hover: "#2c2242"
  klarna-pink: "#ffa8cd"
typography:
  display:
    fontFamily: "\"Klarna Title\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Arial, sans-serif"
    fontSize: 84px
    fontWeight: 700
    lineHeight: 80px
  display-mobile:
    fontFamily: "\"Klarna Title\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Arial, sans-serif"
    fontSize: 52px
    fontWeight: 700
    lineHeight: 50px
  heading:
    fontFamily: "\"Klarna Title\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Arial, sans-serif"
    fontSize: 44px
    fontWeight: 700
    lineHeight: 48px
  subheading:
    fontFamily: "\"Klarna Title\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Arial, sans-serif"
    fontSize: 100px
    fontWeight: 700
    lineHeight: 40px
  body:
    fontFamily: "\"Klarna Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: "\"Klarna Text\", Roboto, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
  nav:
    fontFamily: "\"Klarna Text\", Roboto, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 0px
  link:
    fontFamily: "\"Klarna Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 20px
  button-secondary:
    fontFamily: "\"Klarna Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
  input:
    fontFamily: "\"Klarna Text\", Roboto, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 2px
  sm: 2.5px
  md: 16px
  lg: 32px
  xl: 48px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 11px 20px
    height: 42px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.klarna-pink}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 15px 20px
    height: 52px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 20px
  card:
    textColor: "{colors.on-primary}"
    rounded: "{rounded.xl}"
    padding: 4px
    borderColor: "{colors.hairline}"
---

## Overview

The queued URL, https://www.klarna.com, redirects to a "Klarna international" market selector (a list of country and language cards). That page was measured first but is a language-entry page, so the real home page https://www.klarna.com/us/ (title "Klarna US - A secure, flexible way to manage your money") was re-measured and is what this document describes. It is Klarna's own site, so the document is named for the measured US home.

The page is a long consumer-fintech scroll (13,218px tall in the extraction). A thin announcement strip carries a scam warning; below it the header shows the Klarna wordmark, links Discover Klarna, Shop, App, Help, an "EN" language pill and a black "Sign in" pill. The hero headline "Your money treated right" sits over lifestyle photography with a phone mock-up, followed by a trust row under "Trusted by millions worldwide" in which "millions" is highlighted in pink. Then come centered section titles in very large type for each product (Payments, Cards, Memberships, Klarna Balance, Savings, Cashback, Shopping, Mobile), "Pick how you pay" with four phone/device cards, a dark "Shop with built-in security" feature, review cards, a brand-logo and photo mosaic ("Use Klarna at brands you love"), and a dark footer. The voice is friendly, short and benefit-led.

A consent banner appears in the capture; the extractor recorded scrim overlays as hidden (page.consentOverlaysHidden), and no cookie controls are documented here as brand UI.

## Colors

The core colors are near-black plum #0b051d (text and the primary pill fill) and white #ffffff, with an off-white #f9f8f5 for text on the dark pill. Klarna pink #ffa8cd fills the "Learn more" secondary button and is the highlight color behind emphasized words. Neutral supports: a darker plum #282636, a muted plum-grey #504f5f, a hairline #e2e2e7 used for borders and the language pill, pure black #000000 on dark sections, #fefcff as near-white text on dark, and a deep green #046234 appearing in the measured palette. The primary hover fill measured #2c2242. The shipped CSS exposes tokens such as --border: #E2E2E7, --background-page: #FFFFFF, --colors-text-default: #0B051D, --positive10: #CCF9D4 and --colors-badge-negative: #FFB8B8, which confirm the plum text and hairline values.

## Typography

Klarna Title (weight 700) is the display face and Klarna Text (400, 500, 700) the interface face, with -apple-system, system-ui, Segoe UI, Roboto and Arial as fallbacks. Measured: the h1 is Klarna Title 700 at 84px/80px (52px/50px on the mobile pass), h2 "Trusted by millions worldwide" is 44px/48px, and section titles such as "Payments" are 100px with a 40px line height, intentionally overlapping tight stacks. Buttons are Klarna Text 500 at 16px/20px, links 12px/20px at 500, small body and footnotes 12px/20px at 400, inputs 14px/20px, and the header nav 14px/16px at 500.

## Layout

A full-width header sits above a hero that places headline copy and photography side by side with a phone mock-up. Content bands are centered, with large vertical gaps between product titles (centered 100px headings each followed by a short paragraph and a small black pill button). Cards ("Pick how you pay") sit in a four-up row; the review and brand-logo sections are carousels and mosaics. The final band is a dark footer with link columns. Measured spacing steps: 2px, 3px, 4px, 7px, 8px, 10px, 11px, 12px, 15px and 16px; button padding 11px 20px (primary) and 15px 20px (secondary).

## Elevation & Depth

Shadows are light: rgba(0, 0, 0, 0.1) 0px 2px 4px 0px on small floating items (six elements) and a single rgba(0, 0, 0, 0.2) 0px 0px 18px 0px glow. Cards are otherwise defined by soft tinted surfaces and a #e2e2e7 hairline. Depth on product visuals comes from photography and device mock-ups rather than UI elevation.

## Shapes

Radii by frequency: 99999px (56 elements, all buttons and chips), 16px (49), 16px 16px 0px 0px and 0px 0px 16px 16px (24 each, image cards split into top and bottom parts), 48px (22, large device and feature cards), 32px (11), 48px 48px 16px (2), and tiny 2px and 2.5px corners. The outcome is fully round controls with generous 16px to 48px container rounding.

## Components

- Primary button: #0b051d fill, #f9f8f5 text, Klarna Text 500 16px/20px, pill radius (99999px), padding 11px 20px, height 42px ("Sign in", "Learn more about security"); hover fill #2c2242.
- Secondary button: #ffa8cd pink fill, plum text, 16px/20px at 500, pill radius, padding 15px 20px, height 52px ("Learn more").
- Language pill: transparent, 1px solid #e2e2e7 border, pill radius, "EN".
- Cards: 48px radius with 4px padding for the device frames; 16px radius for content cards; text on dark device cards in #f9f8f5 (for example the "Checkout" label).
- Highlight: pink marker behind selected words in section titles.
- Navigation: 14px/16px weight 500 links in plum.
- Input: Klarna Text 14px/20px text in plum.

## Design System Architecture

No public design-system page was opened. The shipped CSS exposes named tokens as root variables (--border, --background-page, --background-primary, --colors-text-default, --buttonBackgroundSecondaryHover, --primary-action-disabled, --positive10, --negative80, --textSizes-text-mobile-l with a calc() fluid size), so the site builds from an internal token layer with semantic names and fluid type. The measured vocabulary: plum and white, one pink accent, pill buttons, big rounded cards.

## Do's and Don'ts

Do set headlines in Klarna Title 700 at very large sizes with tight line height, keep buttons as pills, and use pink #ffa8cd as an accent or highlight, not as body text color. Do use the #e2e2e7 hairline for borders and #0b051d for text.

Don't use rounded rectangles for buttons (the primary and secondary buttons both compute 99999px); don't add heavy shadows; don't use pure black text on white pages (ink is #0b051d). Don't document the consent banner or scam strip as brand components.

## Responsive Behavior

The mobile pass (390px) measured the h1 "Your money treated right" at Klarna Title 700 52px/50px (from 84px), the footnote paragraph at Klarna Text 400 12px/20px and the black primary pill "Learn more about security" with 99999px radius, 16px/500 type. Navigation collapse, card column counts and other breakpoints were not measured beyond this.

## Iteration Guide

1. Use #0b051d on white, with off-white #f9f8f5 text on plum fills.
2. Set display text in Klarna Title 700 (84px/80px hero, 44px/48px sections) and interface text in Klarna Text 500.
3. Make every button a pill; primary is plum, secondary is pink #ffa8cd.
4. Round content cards at 16px and device frames at 48px, with hairline #e2e2e7 borders.
5. Highlight one word per headline with a pink marker; keep shadows to 2px/4px at 10% black.

## Additional Notes

Page-level measurements: the page is 1280px wide at desktop, the extraction recorded nine radius families and two shadow values, and the hover state of the black pill changes its fill from #0b051d to #2c2242 while keeping its #e2e2e7 border color. Imagery combines candid lifestyle photography (people with phones and shopping bags), product device mock-ups showing a checkout flow with a dollar amount, and partner-brand photography in the "Use Klarna at brands you love" section. Microcopy is brief and second-person: "Your money treated right", "Pick how you pay", "Say yes to more", "Find better deals, with no extra work". Section product names are used as the headline themselves rather than as small labels, which is why the h3 role measures at 100px.
