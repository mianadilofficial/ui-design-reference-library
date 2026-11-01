---
version: alpha
name: "Lockheed Martin"
category: "Energy & Climate"
description: "Lockheed Martin (lockheedmartin.com): DIN 2014 W01 Light headings with DIN W01 Regular body, white canvas #ffffff and #f2f2f2 bands, square 55px buttons filled corporate blue #0360ae, near-black hero imagery, 0px button radius."
colors:
  canvas: "#ffffff"
  page-largest: "#f2f2f2"
  ink: "#000000"
  primary: "#0360ae"
  on-primary: "#ffffff"
  ink-3: "#cccccc"
  ink-4: "#f1f1f1"
  ink-5: "#666666"
  ink-6: "#414042"
  card-bg: "#ededed"
  card-border: "#a6a6a6"
typography:
  display:
    fontFamily: "\"DIN 2014 W01 Light\", Calibri, \"Helvetica Nue\", Arial, sans-serif"
    fontSize: 70px
    fontWeight: 400
    lineHeight: 76px
  display-mobile:
    fontFamily: "\"DIN 2014 W01 Light\", Calibri, \"Helvetica Nue\", Arial, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 47px
  heading:
    fontFamily: "\"DIN 2014 W01 Light\", Calibri, \"Helvetica Nue\", Arial, sans-serif"
    fontSize: 34px
    fontWeight: 500
    lineHeight: 46px
  subheading:
    fontFamily: "\"DIN 2014 W01 Light\", Calibri, \"Helvetica Nue\", Arial, sans-serif"
    fontSize: 29.6px
    fontWeight: 500
    lineHeight: 36px
  button:
    fontFamily: "\"DIN W01 Regular\", Calibri, \"Helvetica Nue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    textTransform: uppercase
  link:
    fontFamily: "\"DIN W01 Regular\", Calibri, \"Helvetica Nue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 14px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 30px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 48px 15px 15px
    height: 55px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 48px 15px 15px
    height: 55px
    borderColor: "{colors.primary}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    borderColor: "{colors.card-border}"
  footer:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

The home page of Lockheed Martin Corporation carries the page title "Leading Aerospace and Defense". The capture is a corporate-institutional front page. A white header holds the italic blue wordmark with its star mark at the left, the menu Who we are, What we do, News, Careers, Investors and Suppliers, and a globe and search icon at the right. Below sits a black hero, with a luminous blue wireframe aircraft, headlined "Mission Challenges are Evolving" and the subline "We're solving the hardest problems ahead of need." with a blue LEARN MORE button. The second band, on white, says "We deliver innovative solutions to the world's toughest challenges" with another LEARN MORE button and a news carousel card ("Investing in America's Defense: We are quadrupling the production capacity of Precision Strike Missile (PrSM)."). A grey band follows ("Products trusted for our customers' most important missions.") with five tall photograph panels labelled Air, Land, Sea, Space and Cyber, each with an arrow at the bottom, and then a further white band with a View All link.

The tone is assured and institutional: short declarative statements, dark cinematic imagery, and a single blue for every action. A vertical "Give Feedback" tab at the right edge and a cookie bar belong to third-party and consent widgets and are not described as brand UI. The document is 5101px tall at 1280px.

Imagery follows a consistent art direction: dark, high-contrast photographs and renderings of aircraft, missiles, ships, satellites and service members, often lit with blue light that echoes the button color. Each domain (Air, Land, Sea, Space, Cyber) is given a single-word label so the grid reads quickly, and the copy around it stays in plain, confident sentences about missions and customers. Where the page needs to separate sections it uses a full change of band color, not a rule or a card shadow.

## Colors

Measured background area is split between a light grey, #f2f2f2 (2114), black #000000 (1308, the hero), white #ffffff (211) and a lighter grey #ededed (160). The corporate blue #0360ae fills the buttons (area 37; #0260af, 3, is the same fill's nearest variant). Text is black #000000 (757 characters), white on dark imagery (356), light greys #cccccc (276) and #f1f1f1 (210), a mid grey #666666 (110), a dark grey #414042 (36), the blue #0260af (15) and a near-black #0a0b09.

Borders: #0360ae on buttons, white at 50 percent (#ffffff80) and #a6a6a6 on cards. The stylesheet also publishes Bootstrap's theme colors in :root such as --yellow #ffc107, --red #dc3545, --success #28a745 and --pink #e83e8c, plus Algolia autocomplete variables; these are framework variables and are not seen in the measured UI, so they are excluded from the tokens.

- Canvas #ffffff; page-largest #f2f2f2; card-bg #ededed; card-border #a6a6a6.
- Ink #000000; ink-5 #666666; ink-6 #414042; ink-3 #cccccc; ink-4 #f1f1f1.
- Primary #0360ae with on-primary #ffffff.

## Typography

The family is DIN 2014 W01 in four cuts: Light (385 characters), Regular, as "DIN W01 Regular" (1250), Demi (124) and Bold (11), with Font Awesome 5 Free for icons. The font stack is "DIN 2014 W01 Light", Calibri, "Helvetica Nue", Arial, sans-serif. The display style, used for the hero statement, is 70px on 76px at weight 400 (white over the hero); the measured mobile hero is 40px on 47px. Headings are 34px on 46px at weight 500; the sub-heading is 29.6px on 36px at weight 500. The root body measured 40px at weight 500, a measurement of the body element, not of reading copy. Running text and links are DIN W01 Regular 16px on 24px at weight 400 (934 characters at 16px), and the button label is DIN W01 Regular 16px at weight 700 on 24px, uppercase.

Other sizes in use: 22px (208 characters), 18px, 14px, 24px and 12px. Weight data: 400 (1214), 500 (346), 200 (124) and 700 (86). Letter-spacing is normal throughout. The DIN faces are loaded by the site as web fonts.

## Layout

The page alternates full-width bands: black hero, white two-column band (text at the left, image card at the right), grey product band with five equal photograph panels edge to edge in the container, and white bands again. Content padding is generous: gaps measured at 4px, 8px, 10px, 12px, 15px, 16px, 20px, 24px, 30px and 32px. The button has padding 12px 48px 15px 15px, with the arrow in the right padding, and is 55px tall. The five product panels carry their category label centered and an arrow near the bottom. Section headings are centred in the grey band and left-aligned in white bands.

## Elevation & Depth

Almost everything is flat. A shadow rgb(0, 0, 0) 0px 0px 24px -8px (weight 1) is measured on one element, and the root variables list an Algolia panel shadow (--aa-panel-shadow) that belongs to the search overlay. Depth in the page comes from imagery and from alternating background bands.

## Shapes

Buttons are square (0px radius), which is the most visible shape rule. Other radii measured: 50% (weight 2), for the circular carousel arrow buttons with a white fill, a 14px radius on one element and a 2px corner on the left edge of one control (2px 0px 0px 2px). Cards take 2px. Photographs and bands are rectangular.

## Components

- **Button primary**: #0360ae fill, white label, DIN W01 Regular 16px bold uppercase, 55px tall, square, 1px border in the same blue, padding 12px 48px 15px 15px, with a trailing arrow icon. Labels measured: LEARN MORE, JOIN OUR TEAM, SIGN UP NOW.
- **Button hover**: the measured hover inverts the colors: white fill and #0360ae text.
- **Link**: black DIN W01 Regular 16px, underlined text links for "View All" and news headlines.
- **Card**: #ededed fill, #a6a6a6 border, 2px radius.
- **Carousel arrows**: round white buttons with blue arrow glyphs on the news card.
- **Product panel**: full-height photograph with a centred category name in white and an arrow.
- **Nav**: white header with 6 text items and two icons.
- **Footer**: "HELPFUL LINKS" columns (What We Do, Our Capabilities, Our Products).

## Design System Architecture

No public Lockheed Martin design system or brand guideline was found on the pages opened. The de-facto system is a stylesheet whose :root exposes Bootstrap color variables such as --light #f8f9fa, --gray-dark #343a40 and --white #fff) alongside Algolia autocomplete variables (--aa-*) for search, plus the DIN 2014 web fonts. Brand-level values (blue #0360ae, DIN) are applied in component styles. Source page: https://www.lockheedmartin.com/.

## Do's and Don'ts

- Do use #0360ae for every primary action, with white uppercase DIN bold labels and an arrow.
- Do set hero statements in DIN Light at 70px over dark imagery.
- Do alternate white, #f2f2f2 and black bands.
- Do keep buttons square at 0px radius and 55px tall.
- Don't use Bootstrap's yellow, red or pink variables as brand colors.
- Don't add shadows to cards; only one shadow was measured.
- Don't show the feedback tab or cookie bar as brand components.

## Responsive Behavior

The 390px mobile pass measured the hero statement at 40px with a 47px line-height and weight 400 in white, a heading of 32px, and recorded the button styling. The mobile navigation text came back empty, so mobile navigation was not measured. Column counts, image crops and breakpoints were not measured.

## Iteration Guide

1. Start with white, #f2f2f2 and black bands; ink is #000000.
2. Use DIN 2014 Light for 70px, 34px and 29.6px headings and DIN Regular for 16px text.
3. Build the single blue button: #0360ae, 55px, square, uppercase bold with an arrow; hover inverts to white.
4. Fill the product band with five full-height photograph panels with white labels.
5. Verify: node web/scripts/verify-designs.mjs --slug=lockheed-martin.
