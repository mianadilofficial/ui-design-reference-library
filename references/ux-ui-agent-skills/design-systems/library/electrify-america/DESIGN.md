---
version: alpha
name: "Electrify America"
category: "Energy & Climate"
description: "Electrify America, a US EV fast-charging network: white and #f5f5f5 bands, navy #0b0f4d header, royal navy #122771 accent, Ubuntu 800 italic 44.8px headlines, 16px/300 body, 4px-radius buttons and 8px photo cards."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f5f5"
  ink: "#000000"
  primary: "#122771"
  surface-3: "#0b0f4d"
  ink-2: "#0a124a"
  hairline: "#35bdd1"
typography:
  display:
    fontFamily: Ubuntu, Arial, sans-serif
    fontSize: 44.8px
    fontWeight: 800
    lineHeight: 44.8px
    letterSpacing: 0.2px
  display-mobile:
    fontFamily: Ubuntu, Arial, sans-serif
    fontSize: 40px
    fontWeight: 800
    lineHeight: 40px
    letterSpacing: 0.2px
  heading:
    fontFamily: Ubuntu, Arial, sans-serif
    fontSize: 33.6px
    fontWeight: 600
    letterSpacing: 0.2px
  subheading:
    fontFamily: Ubuntu, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: 0.8px
    textTransform: uppercase
  body:
    fontFamily: Ubuntu, Arial, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
    letterSpacing: 0.48px
  button-secondary:
    fontFamily: Ubuntu, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
    letterSpacing: 0.2px
    textTransform: uppercase
  input:
    fontFamily: Ubuntu, Arial, sans-serif
    fontSize: 13px
    fontWeight: 500
rounded:
  xs: 4px
  sm: 5px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 15px
  s5: 17.92px
  s6: 20px
  s7: 22.4px
  s8: 24px
  s9: 30px
  s10: 32px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 6px
    height: 32px
  link:
    textColor: "{colors.ink-2}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 26px
  footer:
    textColor: "{colors.ink-2}"
---

# Electrify America

## Overview

Electrify America (https://www.electrifyamerica.com/, page title "EV Charging Stations | Electrify America") is a US electric-vehicle fast-charging network. Its home page, 4392px tall at 1280px, is built around the promise "Charge First / Charge Easy / Charge Forward": three section titles set in bold italic navy. The capture shows a deep navy navigation bar 70px high with the italic "electrify america" logo (a green-and-blue bolt mark) at left, the items LOCATE A CHARGER, FOR DRIVERS, FOR BUSINESSES and ABOUT US in white uppercase (the last three with chevrons) and a search icon at right. Under it is a rounded hero carousel with a lifestyle photograph (two people at a charger beside a car), the line "Share" in italic white above "Your Story" in glowing green-white heavy italic, "Show Us How You Charge On" and a navy "GET STARTED" button, with a small square next-arrow at the right edge.

"Charge First" follows with a two-line intro ("More chargers, more freedom. Since 2016, Electrify America has made EV charging more accessible…") and two stat blocks, each a navy circle with a green-and-teal line icon, a large italic number ("5,600+" with "Hyper-Fast EV Chargers in North America", and "1,080+" with "EV Charging Stations in North America"). A light grey band holds "Charge Easy": three photo cards with uppercase navy titles and arrows (MOBILE APP, CHARGING 101, PASS PLUS MEMBERSHIP), short descriptions and, under the first, App Store and Google Play badges. "Charge Forward" repeats with three more photo cards. Photography is warm, people-centred and outdoors, with chargers in natural settings.

The voice is plain and encouraging, with short imperatives ("Plug in. Power up. Go.").

## Colors

A navy-led palette on white and light grey, with one teal accent.

- Canvas `#ffffff` and `page-largest` `#f5f5f5` (the grey section bands, area weight 1265).
- Ink `#000000` is the most-read text colour (1285 characters), used for body copy.
- Navy `#0a124a` (`ink-2`): headlines, uppercase card titles, links and the footer text (537 characters).
- Deep navy `#0b0f4d` (`surface-3`): the navigation background and the dark stat circles.
- Primary `#122771`: a royal navy measured as text (12 characters) and a one-instance background, and no filled call-to-action was detected by the extractor; the generated tokens assign it to `primary` as the most saturated measured action colour.
- Teal `#35bdd1` (`hairline`): a border colour and, at 20% alpha (`rgba(53, 189, 209, 0.2)`), the hover background of the navigation items.
- White `#ffffff` for text on navy (381 characters).

The hero's glowing green headline is part of the photograph treatment; the green was not measured as a UI colour.

## Typography

One family: Ubuntu with loaded faces at 300, 400 and 500 roman and 500 italic, and an Arial fallback. Measured weights by character count are 300 (1856), 600 (227), 500 (63), 800 (49) and 700 (20), so light text carries the page while headlines are far heavier; only the loaded faces and these measured weights are claimed here. All 2215 measured characters are Ubuntu.

- `display`: 44.8px/44.8px, 800, letter-spacing 0.2px. Mobile 40px/40px. This is the "Charge First" h1.
- `heading`: 33.6px, 600, 0.2px, for h2 section titles such as "Host or Own a Station" (white on navy). Mobile h2 24px/32px.
- `subheading`: 16px/24px, 600, 0.8px tracking, uppercase, for card titles (MOBILE APP).
- `body`: 16px/24px, 300 weight, 0.48px tracking (1529 characters at 16px; 1856 characters at weight 300).
- `button-secondary`: 14px/21px, 500, 0.2px, uppercase; navigation uses the same 14px size.
- `input`: 13px, 500.
- Other sizes: 12px (173 characters, 0.28px tracking), 13.3333px, 19.2px and a 56px display size on 12 characters.

The headings in the capture are italic. Wide tracking on small text (0.48px at 16px, 0.8px at 16px uppercase, 0.7px at 14px) is a trait of the system.

## Layout

Single-column sections stacked on alternating white and `#f5f5f5` bands. The h1 block is 1168px wide at 1280px, body copy blocks are 1100px wide, and the three-card rows are equal thirds. The header is 70px high. Measured gaps are 40px (10 instances), 20px, 60px and 64px; paddings include 6px (10), 40px (7), 15px, 20px, 24px and 60px. The hero is inset from the viewport with rounded corners, not edge-to-edge.

## Elevation & Depth

No box-shadows were measured. Depth is created by tonal bands (`#ffffff` and `#f5f5f5`), the dark navy header and photo cards with rounded corners. Borders are rare: one `#35bdd1` and one `#ffffff`. The navy hero button sits directly on the photograph in the capture, so contrast is provided by its dark fill alone, and the same is true of the square next-arrow control at the right edge of the hero.

## Shapes

Radii measured: 8px (8 instances; photo cards and the hero), 50% (6; stat icon circles and round icon buttons), 4px (5; buttons, `xs`), 100px (2), 12px (2), 5px and 10px. Buttons are 4px rounded and 32px high with 6px padding; the hero is visibly more rounded than the buttons. Stat badges are full circles.

## Components

- Navigation: navy `#0b0f4d` bar, 70px, white Ubuntu 14px/500 uppercase with 0.2px tracking; hover gives a teal 20% background.
- Button: uppercase 14px/500 white on navy, 4px radius, 32px high, padding 6px, 152px wide for "LOCATE A CHARGER"; hero "GET STARTED" is a larger navy rectangular button.
- Stat block: navy circle with a line icon, a large italic number in royal navy and a two-line caption.
- Photo card: 8px-radius image, an uppercase navy title with an arrow, a short description, optional store badges.
- Text input: 13px/500, black text, 26px high, 200px wide.
- Section title: italic bold navy, 44.8px.
- Footer: 531px tall, navy text, beginning with "Electrify America offers transformative, customer-centric…".

## Design System Architecture

No public design system, brand guideline or token package was found, and none is linked from the measured page; the stylesheet exposes no root custom properties (root variable count 0). The de-facto system is built from a single type family with fixed tracking values, a navy trio (`#0b0f4d`, `#0a124a`, `#122771`), a teal accent and a small radius scale (4, 5, 8, 10, 12, 100px and 50%). Source: the extraction of https://www.electrifyamerica.com/.

## Do's and Don'ts

Do:
- Set section titles in heavy italic navy with 0.2px tracking.
- Use light-weight Ubuntu 16px/24px for body with 0.48px tracking.
- Pair a navy bar with white uppercase 14px navigation and a teal hover wash.
- Use 8px radius on photos and round navy badges for stats.
- Alternate white and `#f5f5f5` bands.

Don't:
- Do not add drop shadows; none were measured.
- Do not use more than one accent; teal `#35bdd1` is the only one.
- Do not set card titles in lowercase; they are uppercase 16px with 0.8px tracking.
- Do not put black text on the navy bar.

## Responsive Behavior

Measured at 390px: h1 40px/40px (332px wide), h2 24px/32px (290px wide), body 16px/24px weight 300 with 0.48px tracking (350px wide). Mobile character sizes include 16px, 12px, 14px, 24px, 24.96px, 40px and 33.6px. Navigation layout, card arrangement and breakpoints were not measured.

## Iteration Guide

1. White and `#f5f5f5` bands; navy `#0b0f4d` header; ink black and navy `#0a124a`.
2. Ubuntu: 44.8px/800 headlines, 16px/300 body with 0.48px tracking, 14px/500 uppercase buttons.
3. 4px-radius buttons; 8px photo cards; circular navy stat badges.
4. Add teal `#35bdd1` only as hover wash and hairline.
5. Run `node web/scripts/verify-designs.mjs --slug=electrify-america`.
