---
version: alpha
name: Global Green Chemicals
category: "Thai Brands"
description: "Corporate and investor site of Global Green Chemicals Public Company Limited (GGC, ggcplc.com), a Thai oleochemicals producer. Inter with Kanit and Sarabun, white text over a green-to-blue gradient home page, lime green #72bf45 accents, sky blue #25afef links, charcoal #383838 footer and 10px-radius photo cards."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#72bf45"
  on-primary: "#ffffff"
  blue-link: "#25afef"
  footer-charcoal: "#383838"
  ink-faint: "#b3b3b3"
  surface-light: "#f5f5f5"
  hairline: "#e6e6e6"
typography:
  display:
    fontFamily: Inter, Kanit, sans-serif
    fontSize: 49px
    fontWeight: 400
    lineHeight: 73.5px
  display-mobile:
    fontFamily: Inter, Kanit, sans-serif
    fontSize: 25.0275px
    fontWeight: 400
    lineHeight: 37.5412px
  heading:
    fontFamily: Inter, Kanit, sans-serif
    fontSize: 31px
    fontWeight: 600
    lineHeight: 46.5px
  subheading:
    fontFamily: Inter, Kanit, sans-serif
    fontSize: 25px
    fontWeight: 400
    lineHeight: 37.5px
  body:
    fontFamily: Inter, Kanit, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  nav:
    fontFamily: Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  button-secondary:
    fontFamily: Inter, Kanit, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3.8px
  sm: 4.8px
  md: 10px
spacing:
  s1: 8px
  s2: 9.6px
  s3: 15px
  s4: 16px
  s5: 20px
  s6: 25px
  s7: 28.8px
  s8: 32px
  s9: 48px
  s10: 56px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    height: 29px
  link:
    textColor: "{colors.blue-link}"
    typography: "{typography.nav}"
  nav-link:
    textColor: "{colors.blue-link}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 3px 30px 0px
  footer:
    backgroundColor: "{colors.footer-charcoal}"
    textColor: "{colors.canvas}"
    padding: 56px 0px 32px
---

## Overview

Global Green Chemicals is measured on `https://www.ggcplc.com/en/home`, titled "Global Green Chemicals", `lang="en"`. The capture also contains a promotional pop-up (a blue banner about a sustainability ranking) and a dark scrim over the hero; both are pop-up chrome and none of their colors or text are used as brand tokens here. A re-run of the extractor was done once and did not remove the pop-up from the capture, so the scrim's black area is excluded by hand.

Behind it the home page is a full-bleed hero with a darkened photograph and a very large white statement ("TO BE A LEADING GREEN CHEMICAL COMPANY BY CREATING ...") with previous / next arrows in small green squares and a "View Full Video" link with a hexagonal play outline. The header is transparent: a centered GGC logo (a blue and green wordmark), a search icon and an EN language dropdown at the right, and a row of upper-case menu items (a home icon, ABOUT GGC, BUSINESSES, INVESTOR RELATIONS, CORPORATE GOVERNANCE, SUSTAINABILITY, NEWSROOM, CAREERS, CONTACT US). Below, the page switches to a smooth green-to-blue gradient background carrying a white introduction ("Global Green Chemicals Public Company Limited is the pioneer oleochemicals producers in Thailand under GC Group.") beside a rounded photograph of a family at a car, a "GREEN CHEMICAL PRODUCTS" carousel of tilted photographs (methyl ester, a pipette on a leaf, a fuel pump in corn) with a "Discover" text link, and a "RESILIENT AND SUSTAINABLE GREEN FUTURE" section over a photograph. The gradient's exact stop colors were not measured.

## Colors

The measured areas are `canvas` #ffffff (2,010 units), `footer-charcoal` #383838 (518) and `surface-light` #f5f5f5 (349); the black area of 1,024 units is the pop-up scrim and is not a surface. Lime green `primary` #72bf45 is measured as a small background area (10 units) and as the color of 118 characters of text, and the carousel arrows in the capture are lime green; `blue-link` #25afef colors links and the nav link role (28 characters). The stylesheet declares both as root variables (`--blue-00` #25afef, `--light-green-00` rgba(114,191,69,0.05), `--dark-blue-00` #2e75bd, `--dark-blue-10` #224a96, `--orange-00` #f7981d, `--green-n05` #f6fff0, `--green-n70` #b2cca3); only the lime green and the sky blue were measured on screen.

Text: `ink` #000000 (1,605 characters, on white sections), white (1,441, on the hero and the gradient), `ink-faint` #b3b3b3 (234), lime green (118), #383838 (36) and sky blue (28). `hairline` #e6e6e6 is the 1px border of the mobile call-to-action. `on-primary` white is the label color on the green arrows.

## Typography

Inter (loaded at 400, 500 and 600) is the main family — 2,884 measured characters — with Kanit (600) listed as a fallback for Thai and Sarabun (400, 500) used for the navigation links and some copy (578 characters). Font Awesome 5 Pro and an `icomoon` set supply icons.

Scale (desktop): `display` 49px / 73.5px, weight 400 (hero statement, white); `heading` 31px / 46.5px, weight 600 ("GREEN CHEMICAL PRODUCTS"); `subheading` 25px / 37.5px, weight 400 ("METHYL ESTER"); `body` 20px / 30px, weight 400; `nav` Sarabun 16px / 28px, weight 400; link buttons 16px / 24px. By character count the sizes are 16px (2,011), 14px (604), 25px (408), 20px (238) and 31px (106). Weights: 600 (1,812 characters), 400 (1,497), 100 (81), 500 (71).

## Layout

The desktop capture is 1280px wide and 5,715px tall. The hero is a full viewport photograph with the statement in an 825px wide block; below, a two-column introduction (copy left in a 496px column, photograph right), then a centered carousel with the active slide in the middle and tilted neighbors, then full-bleed sections. Content width is about 1,110px (the h2 box). The header is 160px tall on desktop (the logo row plus the menu row). The footer is 405px tall with padding 56px 0 32px.

## Elevation & Depth

Recorded shadows: `rgba(0, 0, 0, 0.08) 0px 3px 10px 0px` (10 elements), `rgb(245, 245, 245) 0px 3px 15px 0px` (5) and `rgba(0, 0, 0, 0.15) 0px 3px 30px 0px` (3, the `card` token). The shadows are wide and soft; photographs in the carousel also use a perspective tilt for depth.

## Shapes

Radii on screen: `10px` (15 elements) and `10px 10px 0px 0px` (20 elements, cards whose top corners are rounded over a photograph), with `4.8px` and `3.8px 3.8px 0px 0px` on a few small controls. The carousel arrow squares and the footer are square-cornered. Photographs in the introduction carry the 10px radius.

## Components

**Text link button** — "Discover" with a chevron: transparent, white 16px Inter 400 text, 29px tall, 88px wide, no border radius; it sits under the active slide. **Carousel arrows** — small lime-green square buttons with white chevrons at the left and right of the slider (the hero and the product carousel). **Product card** — a photograph with a 10px radius, a white 25px title and a 14px white description centered beneath it. **Header menu** — upper-case 14px to 16px links in white, with a home icon first and a language dropdown; links in the stylesheet are sky blue (#25afef) in Sarabun 16px. **Footer** — #383838 with white text and 56px top padding. **Factsheet button (mobile)** — see Responsive Behavior.

## Design System Architecture

No public design system, brand guideline or press kit was found: the homepage HTML links none and no search was run. The site's stylesheet declares Bootstrap-style root variables (`--light` #f8f9fa, `--danger` #dc3545, `--success` #28a745, `--dark` #343a40, breakpoints `--breakpoint-md` 768px, `--breakpoint-xl` 1200px and `--breakpoint-xxl` 1640px) alongside brand-named variables (`--blue-00` #25afef, `--dark-blue-00` #2e75bd, `--dark-blue-10` #224a96, `--orange-00` #f7981d, `--green-n05`, `--green-n70`, `--light-green-00`). The Bootstrap stock colors are not brand tokens; the green and blue ramps are the company's own palette entries.

## Do's and Don'ts

Do use white text over photographs and the green-to-blue gradient, lime green #72bf45 for slider controls and highlights, and sky blue #25afef for links. Do set headings in Inter 600 and statements in Inter 400 at large sizes. Do round card and photograph tops at 10px. Do end carousel slides with a text link plus chevron rather than a filled button.

Don't reproduce the promotional pop-up, its banner blue or the black scrim as brand elements. Don't use Bootstrap's #dc3545 or #28a745 as brand colors. Don't add hard shadows; the measured ones are soft and wide.

## Responsive Behavior

Measured at a 390px viewport: the hero statement drops from 49px to 25.0275px (line height 37.5412px; the block is 330px wide and 150px tall); the section heading drops from 31px to 21.8875px (line height 32.8312px, weight 600); body drops from 20px to 17.57px (line height 26.355px; the paragraph box is 184px tall); the header measures 80px tall with 16px weight-600 text; the detected call-to-action is "Factsheet Q2/2026", a white button with black 16px weight-600 text, a 1px #e6e6e6 border, a `rgb(245, 245, 245) 0px 3px 15px 0px` shadow, padding 16px 20px, 282px wide and 65px tall with square corners. Most frequent mobile sizes: 16px, 14px, 19.5325px and 17.57px. Menu collapse behavior and carousel behavior at mobile width were not measured.

## Iteration Guide

Start from white text on photography, black text on white, and the lime green and sky blue as the two accents. New sections should reuse the 31px Inter 600 heading, the 20px body and the soft 0.15-alpha card shadow. Ask for measurements before adding new component types (forms, tables of financial results, filters); hover and dark-mode states were not captured for this site, and the gradient stops need to be measured before they are specified.
