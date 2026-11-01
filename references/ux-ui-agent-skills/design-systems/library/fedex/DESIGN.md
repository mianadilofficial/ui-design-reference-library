---
version: alpha
name: FedEx
category: "Logistics & Mobility"
description: "FedEx US home (fedex.com/en-us/home.html) measured at 1280px: FedExSans in 300/400/500/700, FedEx purple #4d148c header and secondary pills, orange #ff6200 square TRACK button with 19px uppercase label, blue #007ab7 text links, #fafafa page ground and mostly 0px radius."
colors:
  canvas: "#ffffff"
  page-largest: "#fafafa"
  ink: "#333333"
  primary: "#ff6200"
  on-primary: "#ffffff"
  black: "#000000"
  brand-purple: "#4d148c"
  link-blue: "#007ab7"
  hairline: "#59595b80"
  text-input-border: "#8e8e8e"
  surface-gray: "#f2f2f2"
  surface-ice: "#f8fbfd"
  purple-active: "#631ab7"
  orange-hover: "#d14600"
typography:
  display:
    fontFamily: FedExSans, Arial, sans-serif
    fontSize: 46px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: "-0.63px"
  display-mobile:
    fontFamily: FedExSans, Arial, sans-serif
    fontSize: 44px
    fontWeight: 300
    lineHeight: 48px
    letterSpacing: "-0.63px"
  heading:
    fontFamily: FedExSans, Arial, sans-serif
    fontSize: 40px
    fontWeight: 300
    lineHeight: 52px
    letterSpacing: "-0.4px"
  subheading:
    fontFamily: FedExSans, Arial, sans-serif
    fontSize: 32px
    fontWeight: 300
    lineHeight: 41.6px
    letterSpacing: "-0.4px"
  body:
    fontFamily: FedExSans, Arial, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
    letterSpacing: "-0.1px"
  button:
    fontFamily: FedExSans, Arial, sans-serif
    fontSize: 19px
    fontWeight: 700
    lineHeight: 24.7px
    letterSpacing: 0.95px
    textTransform: uppercase
  nav:
    fontFamily: FedExSans, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: FedExSans, "FedEx Sans", Arial, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 20.7px
rounded:
  xs: 24px
  sm: 50px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 18px
  s8: 24px
  s9: 25px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 24px
    height: 56px
    boxShadow: rgb(255, 255, 255) 0px 0px 0px 0px
  button-secondary:
    backgroundColor: "{colors.brand-purple}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 0px 24px 0px 16px
    height: 56px
    boxShadow: rgba(77, 20, 140, 0.15) 0px 4px 16px 0px, rgba(0, 0, 0, 0.08) 0px 1.5px 4px 0px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.brand-purple}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.black}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 1px 2px 1px 8px
    height: 56px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.brand-purple}"
    rounded: "{rounded.none}"
    padding: 30px 0px 0px
---

## Overview

This file documents the FedEx United States home page, measured at `https://www.fedex.com/en-us/home.html`. The root `fedex.com` is a location chooser, so the measurement targeted this page and the file is named after it. The measurement hid a language and region modal ("fxg-u-modal js-modal is-open") and the blur layers it added to the header, body and footer; none of them are brand UI.

The page opens with a 75px FedEx-purple header (logo, five menu links: Shipping, Tracking, Design & Print, Locations, Support, then "Sign Up or Log In" and a search icon), a video hero carrying the white headline "FedEx. The New Power Move.SM" at 46px and an outlined "LEARN MORE" pill, and a light grey tool tray with four icon actions (Get a quote, Ship now, FedEx locations, Contact support) beside a tracking-number input and an orange TRACK button. A bordered blue information notice follows, then a "Why ship with FedEx?" panel with four short text blocks and a courier photograph and an outlined orange "START SHIPPING NOW" button, a three-card row "Manage deliveries your way", a "Go global with confidence" feature, a stacked "Smarter shipping for growing businesses" list, fine-print notices, and a footer with columns, a country and language selector and a purple legal strip.

The voice is plain service copy: short two-line headings in light weight, small bold lead-ins, and uppercase blue text links as calls to action ("DOWNLOAD THE APP", "SIGN UP FOR FREE", "TRACK A PACKAGE").

## Colors

- **canvas `#ffffff`** and **page-largest `#fafafa`**: `#fafafa` is the largest background by area (1570); white sits behind the lower sections (11).
- **black `#000000`**: area 538, the video hero; also the text colour of the tracking input.
- **ink `#333333`**: body and heading text (3012 characters), the site's `--dsmg-color-333333`.
- **primary `#ff6200`**: FedEx orange, the TRACK button fill, the outlined start-shipping button border (borderColors includes `#ff6200`), and text at 18 characters. The site's variable `--cb-color-accent-brand-secondary` is the same value. `on-primary` is `#ffffff`.
- **brand-purple `#4d148c`**: FedEx purple. Fills the header (area 180), the "Ask FedEx" chat pill, and is text colour for footer headings (51 characters).
- **link-blue `#007ab7`**: text links and the notice border (96 characters; `--dsmg-nba-blue-default` and `--cb-component-link-icon-default`).
- **surface-gray `#f2f2f2`** (147) and **surface-ice `#f8fbfd`** (63): the tool tray and feature panels.
- **hairline `#59595b80`**: translucent divider; **text-input-border `#8e8e8e`**: the tracking field border.
- **purple-active `#631ab7`** and **orange-hover `#d14600`**: pressed and hover values of the site's own button variables (`--cb-component-button-secondary-text-active`, `--cb-component-button-large-tertiary-text-hover`); they were read from root variables, not observed in use.

Bootstrap variables are also present (`--bs-orange: #fd7e14`, `--bs-cyan`, `--bs-purple`). They are framework defaults, not FedEx colours, and the generated navigation-link colour `#0d6efd` (Bootstrap's blue) was dropped.

## Typography

FedExSans is the single family (3329 characters, plus "FedEx Sans" for 10), loaded at 300 normal, 300 italic, 400, 500 and 700. The stack is `FedExSans, Arial, sans-serif`. FedExSans is proprietary; Arial is the page's own fallback.

| Role | Size | Weight | Line height | Letter spacing |
|---|---|---|---|---|
| display (h1) | 46px | 400 | 48px | -0.63px |
| display-mobile | 44px | 300 | 48px | -0.63px |
| heading (h2) | 40px | 300 | 52px | -0.4px |
| subheading (h3) | 32px | 300 | 41.6px | -0.4px |
| body | 16px | 300 | 24px | -0.1px |
| button | 19px | 700 | 24.7px | 0.95px, uppercase |
| nav | 16px | 400 | 24px | none |
| button-secondary | 18px | 600 | 20.7px | none |

Body copy is light (weight 300 on 2299 characters). Size distribution: 16px (2364), 12px (435), 14px (211), 19px (100), 24px (94), 40px (90), 46px (25), 32px (20). Weights: 300 (2299), 400 (575), 700 (410), 500 (55).

## Layout

Bands: the 75px header, a 420px hero and a 3365px white body. Content is a centred column with the tool tray, feature panels and card rows inside it; the card row shows at most four columns on desktop. The feature panels are two-column text and photograph. Measured paddings: 12px (38 elements), 28px (11), 15px (7), 16px (6), 31px (5), 24px (2).

## Elevation & Depth

Measured shadows: `rgba(77, 20, 140, 0.15) 0px 4px 16px 0px, rgba(0, 0, 0, 0.08) 0px 1.5px 4px 0px` on the purple "Ask FedEx" pill (a purple-tinted lift), `rgb(255, 255, 255) 0px 0px 0px 0px` on the TRACK button (a zero ring), and an inset `rgb(51, 51, 51) 0px 0px 0px 2px` on one element. Panels are flat, separated by tone (`#fafafa`, `#f2f2f2`, `#f8fbfd`).

## Shapes

Measured radii: 50% (2 elements, circular icons), 999px (1, the "LEARN MORE" pill), 24px (1) and 50px (1, the Ask FedEx pill). The TRACK button, inputs, header, cards and panels compute 0px. `rounded.pill: 9999px` is part of the generated token set and was not itself recorded.

## Components

**button-primary.** TRACK: `#ff6200` fill, white 19px/700 uppercase text with 0.95px tracking, 0px radius, padding `0px 24px`, 56px tall, 118px wide.

**button-secondary.** "Ask FedEx": `#4d148c` fill, white 18px/600, 50px radius, padding `0px 24px 0px 16px`, 56px tall, with the purple shadow.

**outlined pill.** "LEARN MORE" on the hero: transparent, white 14px/500, `2px solid #ffffff`, 999px radius, padding `12px 28px`, 42px tall.

**nav.** `#4d148c` bar, 75px tall, white 14px/400 text; at 390px the links reduce to 2 visible with a "Hamburger Menu" toggle.

**text-input.** Tracking field: white, black 16px/300 text, `1px solid #8e8e8e`, 56px tall, padding `1px 2px 1px 8px`, square.

**links.** Uppercase `#007ab7` action links and underlined `#333333` inline links ("Access our customer portal.").

**footer.** `#fafafa` body with `#4d148c` headings (30px top padding), then a purple legal strip with "Site Map" and "Cookie Consent".

## Design System Architecture

FedEx's page exposes a Carbon-style token layer in CSS variables: `--cb-color-*`, `--cb-component-button-*`, `--cb-size-*` and `--cb-font-size-*` (for example `--cb-size-border-radius-x-large: 1rem`, `--cb-size-stroke-medium: .125rem`, `--cb-font-size-03: 1rem`), alongside a `--dsmg-*` set (`--dsmg-spacing-5xl: 3rem`, `--dsmg-nba-blue-default`) and Bootstrap `--bs-*` variables. No public documentation of these systems was opened and no search was run. The CSS declares `min-width 768px` (1055 rules), `max-width 663px` (824), `min-width 664px` (715), `min-width 1200px` (624) and `max-width 767px` (591) queries, so 664px and 768px are the principal breakpoints.

## Do's and Don'ts

- Do use FedEx purple `#4d148c` for the header and secondary pills and orange `#ff6200` for the one primary action.
- Do keep the TRACK-style primary button square (0px radius) with uppercase 19px/700 text.
- Do set headings in weight 300 with slightly negative tracking.
- Do use `#007ab7` for text links and uppercase action links.
- Don't use Bootstrap `#0d6efd` or `--bs-*` colours.
- Don't document the region modal or its blur layers as brand UI.
- Don't round the primary button; only the secondary and outlined pills are rounded.

## Responsive Behavior

Measured at 390px: the header shows 2 links plus a "Hamburger Menu" toggle, the card grid collapses to 1 column, the h1 measures 44px/300 (from 46px/400), body stays 16px/300 with -0.1px tracking, and the TRACK button keeps 19px/700 uppercase with 0.95px letter spacing and 0px radius. Tablet widths are not measured; shipped CSS breakpoints are listed above.

## Iteration Guide

1. Start with the 75px `brand-purple` header and white 14px links; follow with a video hero and white 46px headline.
2. Put the tracking field and a square `primary` TRACK button in a `surface-gray` tray.
3. Write section headings at 40px/300 on `page-largest`, with copy at 16px/300.
4. Use rounded pills only for secondary actions; keep primary and inputs square.
5. Close with a footer and a purple legal strip.
6. Hover states were not recorded (empty); measure before specifying them.
