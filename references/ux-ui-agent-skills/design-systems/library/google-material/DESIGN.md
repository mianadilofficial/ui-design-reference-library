---
version: alpha
name: Google (about.google)
category: "Design Systems"
description: "The about.google corporate page: Google Sans at regular weight with 60px headlines (-0.5px tracking), Google Sans Text 18px body in grey #5f6368 on white and a pale #f3f5fa page tint, a single Google blue (#1a73e8) for fully rounded 48px-radius buttons, flat white cards with 8px corners, and no shadow-driven depth."

colors:
  canvas: "#ffffff"
  page-largest: "#f3f5fa"
  surface-subtle: "#f8f9fa"
  ink: "#5f6368"
  ink-strong: "#202124"
  primary: "#1a73e8"
  primary-hover: "#185abc"
  primary-link: "#1967d2"
  primary-tint: "#e8f0fe"
  on-primary: "#ffffff"
typography:
  display:
    fontFamily: "\"Google Sans\", Arial, Helvetica, sans-serif"
    fontSize: 60px
    fontWeight: 400
    lineHeight: 72px
    letterSpacing: "-0.5px"
  display-mobile:
    fontFamily: "\"Google Sans\", Arial, Helvetica, sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 44px
    letterSpacing: "-0.25px"
  heading:
    fontFamily: "\"Google Sans\", Arial, Helvetica, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 56px
    letterSpacing: "-0.5px"
  body:
    fontFamily: "\"Google Sans Text\", Arial, Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: "\"Google Sans\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.5px
  link:
    fontFamily: "\"Google Sans\", Arial, Helvetica, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  input:
    fontFamily: "\"Google Sans\""
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 32px
  xl: 48px
  pill: 9999px
spacing:
  s1: 2px
  s2: 8px
  s3: 9px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 24px
  s8: 26px
  s9: 36px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 12px 24px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary-tint}"
    textColor: "{colors.primary-link}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 12px 24px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.ink-strong}"
---

## Overview

The capture is about.google, Google's corporate "About" site, not a Material Design documentation page. It is calm, airy and almost entirely flat. A white top bar carries the multicolour Google wordmark and four text links (About, Products, Company Info, News) with a blue underline on the active item. The hero is a pale blue-to-white gradient field holding a product phone mockup, followed by a centred 60px headline, "Easily identify AI-generated content", a two-line grey subhead and one blue pill button, "Learn more". Below are three image-topped cards on a pale grey-blue band, then a split text block with a "Check it out" button, then a centred "Google around the globe" section with the four-colour G mark and a pale tonal "Explore" button.

The art direction mixes product UI, warm lifestyle photography and a dark particle visualisation, always framed by a lot of white. Copy is sentence case, plain and announcement-like ("Today at Gemini at Work 2026, Google Cloud announced..."). Colour on the page comes almost entirely from imagery; the interface itself stays white, grey and one blue.

## Colors

`canvas` is #ffffff. Large areas alternate with `page-largest` #f3f5fa, the pale blue-grey band behind the card row and the "around the globe" block (the largest background area measured), and `surface-subtle` #f8f9fa, used for the footer. Text is two greys: `ink` #5f6368 for body copy and subheads (the most-read colour, in the site's variables it is the grey 700 step) and `ink-strong` #202124 for headlines and card text.

`primary` is #1a73e8, the fill of "Learn more", "Check it out" and "Subscribe". `primary-hover` is #185abc. `primary-link` #1967d2 is the text colour of links and of the tonal "Explore" button, which sits on `primary-tint` #e8f0fe. `on-primary` is #ffffff. The site's root also declares `--glue-` colour ramps for blue, red, yellow and green (for example --glue-blue-500 #4285f4 and --glue-green-500 #34a853), which are the logo-family colours; they appear in the logo and imagery, not as interface fills, so they are not tokens here.

## Typography

Two families from the same type design: "Google Sans" for display, headings, buttons and links, and "Google Sans Text" for running body copy, each declared with Arial and Helvetica as fallbacks; both load at weights 400 and 500. Headlines are regular weight, not bold: `display` is 60px on a 72px line height with -0.5px letter spacing (36px with -0.25px at the 390px mobile width), and `heading` is 48px on 56px. `body` is 18px on 27px. `button` is 16px weight 500 with +0.5px tracking; `link` is 20px regular. The large, light, tight-tracked display against a generous body size produces the characteristic Google editorial feel.

Substitutes: Google Sans is a proprietary typeface used here as served by the site; Arial and Helvetica are the declared fallbacks, and any geometric sans with a single-storey a and open forms is a closer match than a neutral grotesque.

## Layout

Content is centred and the page is read top to bottom as a sequence of announcements, each with one headline, one sentence of support and one action. Hero and section headings are centred over a narrow text measure, while the card row spans a wider three-column grid with equal gutters. Sections are stacked as full-width horizontal bands, each with generous vertical padding. Spacing tokens run 2, 8, 9, 12, 15, 16, 24, 26, 36 and 40px; components use the small steps and sections use whitespace well beyond the scale. A split section (text left, media right) breaks the centred pattern once.

## Elevation & Depth

Cards, links and the hero use no shadow at rest: the extracted card and link boxes report a fully transparent zero shadow. Separation comes from the background change between white and `page-largest`, and the cards read as lifted only by that tonal contrast against the band behind them. Depth is otherwise only in imagery, such as the phone mockup that fades into the gradient hero. A circular dark play/pause control appears on the video section; it is page chrome and not documented as a brand component.

## Shapes

Buttons are fully rounded: `button-primary` uses `rounded.xl` 48px on a 50px-tall control, which reads as a pill. Cards and links use `rounded.md` 8px; `rounded.sm` 4px appears on nav links; `rounded.xs` 2px and `rounded.lg` 32px are present in the stylesheet, and `rounded.pill` 9999px for round icon buttons. Photographs inside cards run to the card edge, so the card shape is defined by the image on top and the white text area below it, and the whole page reads as soft and friendly without any ornamental curves.

## Components

- **Primary button.** `button-primary`: #1a73e8 fill, white 16px weight-500 label with 0.5px tracking, 48px radius, 12px by 24px padding, 50px tall. Hover moves to `primary-hover`.
- **Tonal button.** `button-secondary`: #e8f0fe fill, #1967d2 label, same shape. Used for "Explore" on the pale band.
- **Card.** `card`: white fill, 8px radius, image on top, short 18px-style body text in `ink-strong`, and an external-link icon in the bottom-right corner in the link blue.
- **Nav.** `nav` is a white bar with `ink` links and a 1px-high blue underline on the current page.
- **Text link.** `link`: 20px regular in `ink-strong`, no underline at rest.
- **Footer.** A `surface-subtle` block with `ink-strong` text.

## Design System Architecture

The design-system site given for this entry is [Material Design 3](https://m3.material.io). Its page is a single-page application whose readable content in my fetch was only the heading "Material Design", so I cannot cite specifics from it. Google's [Material Web repository](https://github.com/material-components/material-web) says Material Web is a library of web components that uses Material 3, ships as `@material/web`, is in maintenance mode, and names its components with an `md-` prefix. Neither is evidenced on about.google: the page's root declares 55 custom properties, all with a `--glue-` prefix (colour ramps for blue, red, yellow, green, purple and grey, plus an anchor-offset variable), and the extracted CSS contains no `--md-sys` tokens or `mdc-` classes. The page also links to a Brand Resource Center, whose content I did not read. This file therefore describes the de-facto system from the site's own `--glue-` variables and takes no values from Material 3.

## Do's and Don'ts

- Do use #1a73e8 for the one primary action per section and shape it as a 48px-radius pill.
- Do set headlines in Google Sans at regular weight with slightly negative tracking.
- Do alternate white with the pale #f3f5fa band to separate sections instead of borders or shadows.
- Do let photography carry colour.
- Don't use bold headlines.
- Don't add drop shadows to cards or buttons.
- Don't introduce red, yellow or green into the interface; those belong to the logo and imagery.
- Don't use browser-default link colours.

## Responsive Behavior

The display headline falls from 60px to 36px at the 390px mobile width and tightens its tracking to -0.25px; mobile layout of the card row, split text section and top bar was not measured. Buttons keep their 50px height, which stays comfortably above touch-target minimums.

## Iteration Guide

1. Begin with `canvas`, `ink` and `ink-strong`, and the Google Sans / Google Sans Text pair at regular weight.
2. Add `page-largest` bands to separate sections.
3. Use `button-primary` for the main action and `button-secondary` for quieter ones; both are pills.
4. Build cards flat, 8px corners, with an image on top.
5. When unsure, take a value from the site's measured palette or leave it out; Material 3 token values are not part of this system.
