---
version: alpha
name: QTC Energy
category: "Thai Brands"
description: "Corporate site of QTC Energy Public Company Limited (qtc-energy.com), a transformer, EV-charger and solar business. Prompt typeface at weights 200 to 500, blue #00558f headings and buttons, orange #f15a29 emphasis, deep-navy #001439 band, warm #f7f5f4 section tint and 27px-radius product cards."
colors:
  canvas: "#ffffff"
  ink: "#00558f"
  primary: "#00558f"
  on-primary: "#ffffff"
  navy-deep: "#001439"
  surface-warm: "#f7f5f4"
  ink-grey: "#7e8890"
  ink-dark: "#222222"
  ink-navy: "#212934"
  accent-orange: "#f15a29"
  link: "#000000"
typography:
  display:
    fontFamily: Prompt
    fontSize: 40px
    fontWeight: 500
    lineHeight: 46px
    letterSpacing: "-0.6px"
    textTransform: capitalize
  display-mobile:
    fontFamily: Prompt
    fontSize: 23.7016px
    fontWeight: 500
    lineHeight: 27.2568px
    letterSpacing: "-0.355523px"
    textTransform: capitalize
  subheading:
    fontFamily: Prompt
    fontSize: 24px
    fontWeight: 400
    lineHeight: 27.6px
    letterSpacing: "-0.36px"
  body:
    fontFamily: Prompt
    fontSize: 19px
    fontWeight: 200
    lineHeight: 34.2px
    textTransform: capitalize
  button:
    fontFamily: Prompt
    fontSize: 24px
    fontWeight: 500
    lineHeight: 17px
    letterSpacing: 2.4px
    textTransform: uppercase
  nav:
    fontFamily: Prompt
    fontSize: 14px
    fontWeight: 300
    lineHeight: 28px
    textTransform: uppercase
  button-secondary:
    fontFamily: Prompt, Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 17px
    letterSpacing: 1.4px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 27px
  md: 30px
  lg: 45px
  xl: 50px
spacing:
  s1: 4.9px
  s2: 5px
  s3: 8px
  s4: 11px
  s5: 12.8px
  s6: 13px
  s7: 15px
  s8: 20px
  s9: 23px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 15px 65px
    height: 47px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    padding: 13px 29px
    height: 43px
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 5px 0px 0px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-dark}"
    rounded: "{rounded.sm}"
    padding: 50px
    borderColor: "{colors.ink-dark}"
---

## Overview

QTC Energy is measured on `https://qtc-energy.com/`, titled "QTC ENERGY -", `lang="en-US"`. The first capture of this site carried a memorial pop-up (a dark scrim with a black-and-white tribute image over the page) and a cookie dialog; the measurement was re-run once, the extractor recorded those overlays and scrims as hidden (`consentOverlaysHidden`), and the second capture shows the clean page. Nothing from the pop-up, the scrim or the cookie dialog is used here.

The home page has a thin white top bar ("HOTLINE : (66) 2379 3089 | E-mail: contact@qtc-energy.com" and four black circular social icons: Facebook, Instagram, TikTok, YouTube), a 56px menu row with the QTC logo at the left and upper-case menu items (HOME in blue, ABOUT, PRODUCTS&SERVICE, SUSTAINABILITY, INVESTOR RELATIONS, QTC NEWS, GROUP OF COMPANY, CONTACT) plus two flag icons, then a hero illustration: a line-drawn blue city skyline with wind turbines and a photograph of a QTC amorphous-core transformer at the center. Under it, a blue and orange headline "QUALITY OF DETAILS >>" and a light-weight vision statement ("To Be A Manufacturer, Distributor, And Provide Complete Technology Services In The Energy And Electricity Business With World-Class Quality, ..."), a faint topographic line pattern, a shallow V-shaped section divider, a "QTC PRODUCTS" row of three outlined cards (TRANSFORMER, EV, SOLAR — each titled in blue with the caption "BUSINESS UNIT" and a product image: a transformer, a Wallbox EV charger, a solar panel), and a "NEWS & ACTIVITY" row on a pale grey band with photographs of award and company events.

## Colors

`canvas` #ffffff dominates (14,388 area units). `primary` #00558f (a medium-deep blue) is the heading and link color, the nav text color, the logo color and the button fill (442 characters of text and 48 area units). `navy-deep` #001439 (772 units) and `surface-warm` #f7f5f4 (199) are the other measured surfaces; black (73) and #222222 (4) are minor. `accent-orange` #f15a29 colors the second half of the "QUALITY OF DETAILS >>" headline and the "TRANSFORMER" label (28 characters); the stylesheet also uses it as a button-hover gradient color (`--button_gradient_top_color_hover`).

Text: white (524 characters, on the footer and buttons), `primary` blue (442), `ink-grey` #7e8890 (379), `ink-dark` #222222 (322, body copy), `ink-navy` #212934 (84), orange (28), #333c4e (27, social-icon hover color in the theme variables) and black (22). `link` #000000 is the color of "VIEW ALL >>" links.

## Typography

Prompt is the only text family (1,828 measured characters), loaded at weights 200, 300, 400 and 500. Headings and body use capitalize text-transform, which is why Latin copy reads "To Be A Manufacturer, Distributor, And ...".

Scale (desktop): `display` 40px / 46px, weight 500, letter-spacing -0.6px, capitalize ("QUALITY OF DETAILS >>"); `subheading` 24px / 27.6px, weight 400, letter-spacing -0.36px ("TRANSFORMER"); `body` 19px / 34.2px, weight 200, capitalize, #222222; `button` 24px / 17px, weight 500, letter-spacing 2.4px, upper case ("JOIN US"); `button-secondary` 14px / 17px, weight 500, letter-spacing 1.4px, upper case ("TRANSFORMER ALL>>"); `nav` 14px / 28px, weight 300, upper case. By character count the sizes are 14px (1,042), 19px (249), 22px (239), 24px (213) and 35px (38). Weights: 400 (1,113 characters), 200 (380), 300 (207) and 500 (128).

## Layout

The desktop capture is 1280px wide and 4,347px tall. A 1,220px wide content column holds the headline and paragraph (the h2 and paragraph boxes are 1,220px). The header is a two-row structure (hotline strip, then the 56px menu row). The three product cards are equal columns in a row with generous top padding; the news row has three image cards on the pale band. The page's stylesheet exposes about 400 root variables (`--awb-*` and others) and loads an `awb-icons` font. Measured spacing: 4.9, 5, 8, 11, 12.8, 13, 15, 20, 23 and 25px.

## Elevation & Depth

One shadow is recorded on screen: `rgba(33, 33, 33, 0.1) 0px 2px 5px 0px`. The theme declares more (`0 3px 15px rgba(0,0,0,.4)` for the scrim and pop-ups), which belong to the overlay system and are not brand depth. The page is mostly flat, with a subtle V-shaped section divider and outlined cards instead of shadows.

## Shapes

Radii on screen: 27px (6 elements, the product cards), 50px (5, circular social icons and chips), 45px (4), 30px (4) and 2px (1, the primary button). Product cards are strongly rounded rectangles with a thin dark border; the main button is nearly square at 2px.

## Components

**Primary button** — blue fill, white 24px Prompt 500 label with 2.4px tracking in upper case ("JOIN US"), padding 15px 65px, 47px tall, 238px wide, 2px radius. **Secondary button** — blue fill, white 14px 500 label with 1.4px tracking, padding 13px 29px, 43px tall, 285px wide, square. **Product card** — white, 27px radius, 50px padding, thin dark border, a blue 24px title, a small upper-case "BUSINESS UNIT" caption and a product image anchored at the bottom. **Navigation** — upper-case 14px weight-300 links in blue, 56px tall. **Social icons** — black circles with white glyphs. **View-all link** — black 19px weight-200 text ending in ">>".

## Design System Architecture

No public design system, brand guideline or press kit was found: the homepage HTML links none and no search was run. The site's shipped CSS declares about 400 root variables (`--primary_color` #00558f, `--primary_color-35a` rgba(0,85,143,0.35), `--button_gradient_top_color_hover` #f15a29, `--icon_circle_color_hover` #333c4e, `--awb-color*` and many `--*_typography-*` and menu variables). Its `--primary_color` matches the measured brand blue, and the hover gradient matches the measured orange, so those two variables describe the brand. The remaining variables are theme defaults not observed on screen and are not tokens.

## Do's and Don'ts

Do use #00558f for headings, nav, logos and buttons, with #f15a29 for a single emphasized word or label. Do set all text in Prompt, light (200) for paragraphs and 500 for headings, using capitalize on headings and upper case on buttons and menus. Do present business units as large rounded outline cards with a product image. Do keep photography of real products and events.

Don't reproduce the memorial pop-up, its black scrim or the cookie dialog as brand components. Don't use rounded buttons; the measured main button is 2px. Don't add shadows beyond the single light one measured.

## Responsive Behavior

Measured at a 390px viewport: the display headline drops from 40px to 23.7016px (line height 27.2568px, letter-spacing -0.355523px); body stays 19px / 34.2px weight 200 (the paragraph becomes 239px tall in a 330px column); the navigation is replaced by a 40px-wide toggle control labelled "Toggle Navigation" followed by a list (HOME, ABOUT QTC, QTC PRODUCTS, SUSTAINABILITY...), and the first menu link is measured as a 390px-wide, 65px-tall blue (#00558f) row with white 14px weight-400 text and 21px side padding. The most frequent mobile sizes are 14px, 19px, 21.1422px and 20px. Card reflow beyond that was not measured.

## Iteration Guide

Start from the tokens: white canvas, #00558f for action and headings, #f15a29 as a rare highlight. New sections open with a 40px Prompt 500 capitalized heading, a 19px light paragraph and a "VIEW ALL >>" link. Use 27px-radius outlined cards for business units. Anything not measured — form inputs, hover states other than the theme's orange gradient variable, dark mode — should be measured before being documented.

A note on voice and imagery: the copy is corporate and mission-led ("World-Class Quality, Good Governance, Responsibility Towards Society, The Environment And All Stakeholders"), the headline uses an arrow glyph (">>") as a pointer to more content, and product images are cut-out studio photographs on white (a transformer, a wall-mounted EV charger, a solar panel). The hero is an illustrated blueprint-style cityscape in light blue linework, which keeps the brand blue present without a flat color block.
