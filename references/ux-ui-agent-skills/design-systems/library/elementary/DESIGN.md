---
version: alpha
name: elementary OS
category: "Design Systems"
description: "The elementary OS website: Inter in 48px bold and 32px light headings, charcoal ink (#333333) on white and #fafafa, a light-blue (#64b9f1) gradient purchase button with 3px corners and a faint inset highlight, link blue #0088cc, and a saturated grape-purple band (#7239b3) for the AppCenter section, with desktop screenshots as the main imagery."

colors:
  canvas: "#ffffff"
  page-largest: "#fafafa"
  ink: "#333333"
  primary: "#64b9f1"
  on-primary: "#ffffff"
  link: "#0088cc"
  blueberry: "#3689e6"
  blueberry-light: "#8cd5ff"
  grape: "#7239b3"
  hairline: "#00000033"
  button-primary-border: "#337cac"
  card-border: "#00000026"
typography:
  display:
    fontFamily: Inter, Helvetica, Roboto, sans-serif
    fontSize: 48px
    fontWeight: 700
  display-mobile:
    fontFamily: Inter, Helvetica, Roboto, sans-serif
    fontSize: 32px
    fontWeight: 700
  heading:
    fontFamily: Inter, Helvetica, Roboto, sans-serif
    fontSize: 32px
    fontWeight: 300
  body:
    fontFamily: Inter, Helvetica, Roboto, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26.4px
  link:
    fontFamily: Inter, Helvetica, Roboto, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 19.8px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 8px
  pill: 9999px
spacing:
  s1: 7px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 28px
  s7: 32px
  s8: 48px
  s9: 64px
  s10: 128px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 16px 32px
    height: 54px
    borderColor: "{colors.button-primary-border}"
    boxShadow: rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset, rgba(255, 255, 255, 0.45) 0px 1px 0px 0px inset, rgba(255, 255, 255, 0.15) 0px -1px 0px 0px inset, rgba(255, 255, 255, 0.15) 0px 1px 0px 0px
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    borderColor: "{colors.card-border}"
    boxShadow: rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset, rgba(255, 255, 255, 0.2) 0px 1px 0px 0px inset, rgba(255, 255, 255, 0.1) 0px -1px 0px 0px inset, rgba(0, 0, 0, 0.05) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px 0px
  band-grape:
    backgroundColor: "{colors.grape}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
---

## Overview

The elementary OS homepage reads like a quiet product page for a desktop operating system. The top bar is white with the e logomark at far left, five text links (Support, Developer, Get Involved, Store, Blog) and social icons at the right. The first screen is a centred logotype, the tagline "Thoughtful, capable, and ethical computing", and a large laptop render showing the desktop. Under it is a "Pay What You Can:" row with preset amounts ($10, $20, $30), a custom field and a blue "Purchase elementary OS" button, with the version and size in small print and two small blue links.

Next comes a pale grey section with the round OS icon, a light-weight headline "What's New in elementary OS 8.1", a short paragraph and a blue "Read the Announcement" link, then three blog cards with screenshot thumbnails, titles, a grey sub-line and an author byline with avatar. The lower half switches to a deep grape-purple band with a store icon and "Get it on AppCenter", a white outlined-style button, and a screenshot of the AppCenter app. The voice is friendly and ethical-minded ("open, pay-what-you-can app store for indie developers") with sentence-case headlines. A strong screenshot-first approach replaces photography.

## Colors

`canvas` is #ffffff and `page-largest` #fafafa is the pale grey of the "What's New" and blog sections (the largest measured background). `ink` is #333333 for all body text and headings. elementary's published brand guidance lists the same values: #333333 is "Black 500", #fafafa is "Silver 100", #3689e6 is "Blueberry 500", #7239b3 is "Grape 700" and #8cd5ff is "Blueberry 100" ([brand page](https://elementary.io/brand)).

`primary` #64b9f1 is the base fill of the purchase button, which the browser draws with a subtle top-to-bottom gradient and a `button-primary-border` #337cac outline; that exact light blue is not in the brand page's palette, so it is documented as measured only. `on-primary` is #ffffff. `link` #0088cc colours text links. `blueberry` #3689e6 is a saturated blue used for surfaces lower on the page, `blueberry-light` #8cd5ff for light accents on dark areas, and `grape` #7239b3 is the AppCenter band. `hairline` #00000033 and `card-border` #00000026 are translucent black edges for inputs and blog cards.

## Typography

Inter throughout, with Helvetica, Roboto and sans-serif as fallbacks, loaded at weights 300, 400, 600, 700 and 900 (the site's `--ui-font` variable holds that stack). The wordmark in the capture is an image; of the live type, `display` is 48px bold (32px at the 390px mobile width), `heading` is 32px at light weight 300 (used for "What's New in elementary OS 8.1"), `body` is 16px regular on a 26.4px line height, and small `link` text is 12px on 19.8px. Button labels use the 16px body style, with weight 400 on the purchase button and 600 on the in-band buttons. The signature move is light-weight large headings against heavier small labels.

Substitutes: Inter is open source; no substitute is needed, but Helvetica or Roboto, as declared, are acceptable fallbacks.

## Layout

A centred single column. The hero stack (logotype, tagline, device render, purchase row) is centred; the content sections are also centred with short, readable paragraph widths. Blog cards sit in a three-column row. The AppCenter band is full-bleed, with text left and an oversized app screenshot overflowing to the right edge. Spacing tokens run 7, 8, 12, 16, 24, 28, 32, 48, 64 and 128px; the 128px step separates major sections, 16px by 32px is the padding of the primary button.

## Elevation & Depth

This is the most skeuomorphic corner of the set. The primary button carries stacked inset highlights (white at low opacity along the top and bottom edges) plus a thin outer highlight, so it looks pressed from glass; the preset amount buttons use a faint inset shadow. Blog cards use a hairline border with a small shadow, and screenshot devices float with a soft shadow beneath. Elsewhere the page is flat.

## Shapes

Corners are small and crisp, in the manner of a desktop toolkit: `rounded.xs` 2px, `rounded.sm` 3px for buttons, `rounded.md` 4px for cards and thumbnails, and `rounded.lg` 8px for larger panels. `rounded.pill` 9999px appears on circular avatars and the OS icon. Controls look like native desktop widgets rather than web pills.

## Components

- **Purchase button.** `button-primary`: #64b9f1 gradient fill, white 16px label, 3px radius, 16px by 32px padding, 54px tall, 1px #337cac border and the inset highlight shadow.
- **Amount toggles.** Small 38px-tall buttons with a faint tint, 3px radius and a 1px translucent border, and a custom-amount input with a dollar prefix.
- **Text link.** `link`: #0088cc, sometimes with an arrow after the label.
- **Blog card.** `card`: #fafafa fill, 4px radius, 1px translucent-black border, thumbnail on top, 16px-scale title, grey sub-line and byline.
- **AppCenter band.** `band-grape`: #7239b3 background with white 32px light-weight headline, a bold "AppCenter" in the heading, and a white button with grape text.
- **Navigation.** `nav` is a white row of ink-coloured links.

## Design System Architecture

The design-system site given for this entry is the [elementary OS Human Interface Guidelines](https://docs.elementary.io/hig), which describe themselves as guidelines for building apps on elementary OS, published by the elementary OS project and open about being "a set of guidelines, not a rule book". The page I read contains no colour, type or brand values, and it is about application design for the desktop, not the website. The website's own CSS declares just one custom property, `--ui-font`, and does not reference the HIG, so I treat it as not used by the site. elementary also publishes [brand guidance](https://elementary.io/brand) with a named palette of 14 colours in tints from 100 to 900, Inter for headings and body copy, and Roboto Mono for code; the website's measured values (#333333, #fafafa, #3689e6, #7239b3, #8cd5ff) match that palette, so the brand page is used as corroboration for those values. The de-facto system is therefore: one Inter stack, the named palette steps, and small-radius desktop-style controls.

## Do's and Don'ts

- Do use Inter at light weight for large headings and bold for the page title.
- Do show the product itself (desktop screenshots) rather than stock photography.
- Do keep corners at 3px to 4px and give buttons a faint inset highlight.
- Do use the grape band for the single app-store moment.
- Don't recreate the logotype in text; it is supplied as an image.
- Don't use pill-shaped buttons.
- Don't use #64b9f1 as text colour; text links use #0088cc.
- Don't use browser-default link colours.

## Responsive Behavior

The display headline drops from 48px to 32px at 390px. Nothing else in the capture was measured at mobile width, so no layout changes are asserted beyond that. The three-column blog row and the AppCenter band's overflowing screenshot are desktop behaviours seen in the capture, and how they reflow was not observed.

## Iteration Guide

1. Set Inter, `ink` on white or `page-largest`; headings at 300 and the page title at 700.
2. Make one gradient `button-primary` for the main action.
3. Use `link` for text actions and `grape` for a single full-width band.
4. Build cards at 4px radius with a 1px translucent border.
5. Show real product screenshots with soft shadows as the imagery.
