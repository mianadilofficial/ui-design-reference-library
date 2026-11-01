---
version: alpha
name: Trip.com
category: "Travel & Hospitality"
description: "Trip.com US home page: Trip Geom 400/500/700 throughout, 40px bold white hero headline, #121826 ink on #ffffff with #f5f7fa footer, Trip blue #2c61fe buttons with 4px corners (hover #2953d6), 48px search button, 8px-radius cards with soft navy shadows, #fcc8d0 coupon borders, #2346ff app-promo band and #c74401 badges."
colors:
  canvas: "#ffffff"
  ink: "#121826"
  primary: "#2c61fe"
  on-primary: "#ffffff"
  primary-hover: "#2953d6"
  app-band-blue: "#2346ff"
  surface-footer: "#f5f7fa"
  surface-subtle: "#f0f2f5"
  surface-grey: "#d3d3d3"
  ink-navy: "#0f294d"
  ink-dark: "#1a2033"
  ink-muted: "#4f5563"
  ink-black: "#000000"
  coupon-border: "#fcc8d0"
  badge-orange: "#c74401"
  danger-red: "#d02c2a"
typography:
  display:
    fontFamily: "\"Trip Geom\", \"system-ui\", -apple-system, Roboto, Helvetica, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  display-mobile:
    fontFamily: "\"Trip Geom\", \"system-ui\", -apple-system, Roboto, Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 48px
  heading:
    fontFamily: "\"Trip Geom\", \"system-ui\", -apple-system, Roboto, Helvetica, Arial, sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 34px
  section-title:
    fontFamily: "\"Trip Geom\", \"system-ui\", -apple-system, Roboto, Helvetica, Arial, sans-serif"
    fontSize: 22px
    fontWeight: 700
    lineHeight: 30px
  subheading:
    fontFamily: "\"Trip Geom\", \"system-ui\", -apple-system, Roboto, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
  button:
    fontFamily: "\"Trip Geom\", \"system-ui\", -apple-system, Roboto, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: "\"Trip Geom\", \"system-ui\", -apple-system, Roboto, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
  input:
    fontFamily: "\"Trip Geom\", \"system-ui\", -apple-system, Roboto, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 20px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 6.06px
  s7: 7px
  s8: 8px
  s9: 10px
  s10: 12px
  s11: 16px
  s12: 24px
  s13: 32px
  s14: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    height: 34px
  text-input:
    textColor: "{colors.ink-black}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 8px 34px 8px 8px
    height: 32px
  coupon-card:
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 16px
    borderColor: "{colors.coupon-border}"
    boxShadow: rgba(18, 24, 38, 0.08) 0px 4px 16px 0px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink}"
---

# Trip.com

## Overview

The queued URL https://www.trip.com redirects to the US site https://us.trip.com/?locale=en-us (title "Trip.com Official Site | Travel Deals and Promotions"), measured at 1280px and 4,576px tall. The layout is an app-like travel portal: a slim top bar with the blue Trip.com wordmark, a compact destination search field with a blue search icon button, and utility links (App, List your property, currency, Customer support, Find bookings, a blue "Sign in/register" button); a permanent left sidebar of product links with icons (Hotels & Homes, Flights, Trains, Cars, Attractions & Tours, Flight + Hotel, Cruises, Travel Insurance, Private Tours, Group Tours, Gift Cards, Trip Planner, Travel Inspiration, Map, Deals); and a main column.

The main column opens with a rounded blue hero image and the white bold headline "Every check-in is a new beginning", with three trust ticks ("We price match", "Hotel booking guarantee", "Hotel stay guarantee"), then an overlapping white search card with product tabs and a single-row search bar (destination, dates with a "1 night" chip, guests, and a blue "Search" button). Below: a Trustpilot rating line, "New user exclusive" coupon cards with pink borders and blue "Claim all" buttons, two colourful campaign banners (Trip.Tuesday, Happy Friday), "Get inspired for your next trip" destination chips, image-led rails ("Places you may like", "Magical trip moments that last", "Stay cozy at our handpicked hotels", "Multiple ways to roam around") with blue score chips and star ratings, a vivid blue app-download band ("Your all-in-one travel app", "1.8M+ Daily users"), a link grid of "Trip.com recommendations", and a #f5f7fa footer with payment methods, partners and design awards. The voice is promotional and upbeat. A "Suggested Languages" popover and a "TripGenie" chat bubble appear in the capture; both are overlays and are excluded.

## Colors

- **canvas #ffffff** — page and card background.
- **ink #121826** — headings and the most-read dark text; **ink-navy #0f294d** is the body element's text colour; **ink-dark #1a2033** a further dark text and background shade; **ink-muted #4f5563** secondary text (`--compDialogContentContentColor`); **ink-black #000000** input text.
- **primary #2c61fe** — Trip blue: every filled button ("Search", "Sign in/register", "Claim all"), links and the checked state (`--compButtonNormalBackgroundColor`, `--compCheckboxCheckedCardBackgroundColor`). **on-primary #ffffff** (`--compButtonPrimaryColor`).
- **primary-hover #2953d6** — measured hover on "Search", "Claim all" and "Sign in & claim all".
- **app-band-blue #2346ff** — the saturated blue of the app-download band (measured background area, plus a 48% alpha version #2346ff7a).
- **surface-footer #f5f7fa** — the footer; **surface-subtle #f0f2f5** a light panel and border tone; **surface-grey #d3d3d3** a measured grey area.
- **coupon-border #fcc8d0** — the pink outline on "New user exclusive" coupon cards.
- **badge-orange #c74401** — `--compBadgeDefaultBackgroundColor`, the notice and dot badge colour.
- **danger-red #d02c2a** — `--compButtonDangerSolidBorderColor` and `--compCheckboxUncheckedErrorColor`.

## Typography

One family: **Trip Geom** (stack `"Trip Geom", "system-ui", -apple-system, Roboto, Helvetica, Arial, sans-serif`), loaded at 400, 500 and 700. A "Trip Geom TF" face is also declared in the CSS.

- **display** — 40px / 700 / 48px, the white hero headline.
- **heading** — 28px / 700 / 34px.
- **section-title** — 22px / 700 / 30px for rail titles ("Places you may like").
- **subheading** — 16px / 700 for footer column heads ("Contact us") and card titles.
- **button** — 16px / 700 / 24px on the 48px search button.
- **body** — 14px / 400 for links, prices and descriptions; small buttons use it too.
- **input** — 14px / 400.

The measured size set is 9, 11, 12, 14, 16, 18, 20, 22, 28, 32 and 40px. Bold 700 carries all headings; 500 is the medium button weight (`--compButtonMFontWeight: 500`) and small buttons use 400 (`--compButtonSFontWeight`).

**Substitute:** Trip Geom is proprietary; the CSS fallback is the system UI font, then Roboto and Helvetica.

## Layout

At 1280px the left sidebar sits to the left of the main column, which runs from x 248 to x 1248, 1,000px wide. The desktop extraction records a 2,794px white area with up to 4 columns, a 448px media band (app promo), a 429px white recommendations band with 5 link columns and a 996px footer area with 2 column groups. Rails show four cards plus a partial fifth with a round next arrow. Measured gaps are 2, 5, 6, 8, 10, 16, 24, 32 and 40px, and component tokens set `--compCheckboxGap: 8px`, `--compCheckboxGroupGap: 16px` and `--compButtonSmallGap: 4px`. Density is high: many small elements, thin borders and tight label spacing.

## Elevation & Depth

Shadows are soft and navy-tinted: `rgba(18, 24, 38, 0.08) 0px 4px 16px 0px` on cards, `rgba(15, 41, 77, 0.08) 0px 8px 10px 0px` and `0px 8px 16px`, `rgba(7, 20, 60, 0.12) 0px 8px 32px 0px` for floating panels, and `rgba(7, 20, 60, 0.16) 0px 0px 4px 0px` for small controls. The search card floats over the hero with one of these shadows. Image cards use dark gradients at the bottom to hold white captions, and translucent whites (#ffffffcc, #ffffffa3) are measured for overlay chips.

## Shapes

Many radii are in use: 2px (badges, ribbons — `--compBadgeRibbonBorderRadius: 2px`), 4px (buttons and inputs — `--compButtonBorderRadius: 4px`), 8px (cards — `--compCardBorderRadius: 8px`), 12px, 16px and 20px (hero image and larger panels), 999px and 50% (chips, avatars, carousel arrows), plus asymmetric corners such as `12px 0px 8px 12px` for promotional ribbons and split `8px 0px 0px 8px` / `0px 8px 8px 0px` for joined controls. Buttons stay small-radius (4px), never pills.

## Components

- **button-primary** — #2c61fe, white 16px/700 label, 4px radius, 0 16px padding, 48px tall (the "Search" button); hover #2953d6. Shipped tokens also define a large 56px size (`--compButtonLHeight`) with 18px text.
- **button-small** — #2c61fe, white 14px label, 4px radius, 34px tall ("Sign in/register", "Claim all").
- **text-input** — top-bar destination search: 14px text, 4px radius, 32px tall, 8px 34px 8px 8px padding with the icon button at the right.
- **coupon-card** — 8px radius, 16px padding, 1px #fcc8d0 border, soft card shadow, with an illustration and a blue "Claim all" button.
- **destination / hotel cards** — rounded image cards with a heart, location chip, title, blue score chip and review count, "From THB …" price.
- **footer** — #f5f7fa, #121826 16px/700 column heads and 12–14px links, payment logos and award badges.

## Design System Architecture

No public Trip.com design-system page was opened: no dsUrl was given and the captured header and footer show no design-system link. The shipped CSS on https://us.trip.com/?locale=en-us exposes a component-token layer named `--comp<Component><Variant><Property>`: buttons (`--compButtonBorderRadius`, `--compButtonNormalBackgroundColor`, `--compButtonLHeight`, `--compButtonDangerSolidBorderColor`, `--compButtonDisabledFilledBackgroundColor`), badges (`--compBadgeDefaultBackgroundColor`, `--compBadgeRibbonBorderRadius`), cards (`--compCardBorderRadius`, `--compCardSBorderRadius`), checkboxes and dialogs (`--compDialogContentContentColor`, `--compDialogContentButtonsItemMarginBottom`). Component tokens carry literal values, so new components should be added as further `--comp*` properties referencing the same blues, greys and radii.

## Do's and Don'ts

- Do use #2c61fe for every filled action and hover to #2953d6.
- Do keep buttons and inputs at 4px radius and cards at 8px.
- Do set all text in Trip Geom with bold 700 headings.
- Do use soft navy-tinted shadows on floating cards.
- Do use the pink #fcc8d0 border only for coupon cards and #c74401 only for badges.
- Don't use pill buttons; pills are for chips and arrows.
- Don't use pure black for headings; use #121826.
- Don't document the language popover or the chat bubble as page components.

## Responsive Behavior

The 390px mobile pass measured the hero headline at 32px / 700 / 48px (from 40px); rail titles unchanged at 22px / 30px; the first button "Sign in & claim all" at 14px / 400 / 18px, 34px tall with 8px 16px padding on #2c61fe; no visible header links but a "Menu" toggle; a 98px white top band; and a 1,291px media band at the end of the measured page. Measured mobile sizes are 11–32px with 16px the most used. Stylesheet breakpoints are max-width 768px (most used), 640px, 800px, 1024px and 1442px. Sidebar behaviour on mobile was not measured.

## Iteration Guide

1. Lay out a left product sidebar and a 1,000px main column on #ffffff.
2. Open with a rounded hero image, a 40px bold white headline and an overlapping white search card.
3. Make the search action a 48px #2c61fe button with 4px corners.
4. Build rails of 8px-radius image cards with soft navy shadows.
5. Title rails at 22px/700 with a "More ›" link at right.
6. Use #f5f7fa for the footer and #4f5563 for secondary text.
7. Pull new component values from the `--comp*` tokens before inventing any.
8. Re-measure without the language popover before adding header components.
