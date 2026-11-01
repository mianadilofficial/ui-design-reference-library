---
version: alpha
name: Intouch Holdings
category: "Thai Brands"
description: "Intouch Holdings PCL, a Thai telecom and technology holding company: Inter with Noto Sans Thai at weight 300 and 16px body, brand green #69a72a with lime #ccdc04 pill buttons at 99px radius, white canvas, black footer, 20px to 30px rounded cards with a 0 30px 40px soft shadow."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ccdc04"
  on-primary: "#ffffff"
  brand-green: "#69a72a"
  ink-light: "#f1f1f1"
  ink-dark: "#333333"
  brown: "#5a310f"
  button-primary-border: "#0000000d"
  nav-text: "#8cbb1b"
  card-bg: "#00000097"
  footer-bg: "#000000c7"
typography:
  display:
    fontFamily: Inter, "Noto Sans Thai"
    fontSize: 51.04px
    fontWeight: 400
    lineHeight: 51.04px
  display-mobile:
    fontFamily: Inter, "Noto Sans Thai"
    fontSize: 20.8px
    fontWeight: 400
    lineHeight: 33.28px
  heading:
    fontFamily: Inter, "Noto Sans Thai"
    fontSize: 57.6px
    fontWeight: 400
    lineHeight: 74.88px
  subheading:
    fontFamily: Inter, "Noto Sans Thai"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 35.2px
  body:
    fontFamily: Inter, "Noto Sans Thai"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 25.6px
  button:
    fontFamily: Inter, "Noto Sans Thai"
    fontSize: 12.75px
    fontWeight: 400
    lineHeight: 20.4px
    letterSpacing: 0.3825px
    textTransform: uppercase
  nav:
    fontFamily: Inter, "Noto Sans Thai"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
    textTransform: uppercase
  button-secondary:
    fontFamily: Inter, "Noto Sans Thai"
    fontSize: 15.52px
    fontWeight: 400
    lineHeight: 24.832px
    letterSpacing: 0.4656px
rounded:
  xs: 2px
  sm: 5px
  md: 10px
  lg: 15px
  xl: 20px
  2xl: 30px
  3xl: 99px
  pill: 9999px
spacing:
  s1: 2px
  s2: 6px
  s3: 7px
  s4: 7.19px
  s5: 9.8px
  s6: 10px
  s7: 10.08px
  s8: 15px
  s9: 16px
  s10: 18.62px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 0px 15.3px
    height: 33px
    borderColor: "{colors.button-primary-border}"
  button-secondary:
    backgroundColor: "{colors.brand-green}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.3xl}"
    padding: 0px 18.624px
    height: 39px
    borderColor: "{colors.button-primary-border}"
  link:
    textColor: "{colors.ink-dark}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.2xl}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 30px 40px 0px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
---

## Overview

The measured page is the English home page of Intouch Holdings Public Company Limited (title "INTOUCH - Intouch Holdings Company", language `en-US`), a Thai holding company whose own copy describes it as "Leading Investment Company in TMT And Digital Business to Create Sustainable Value to All". The section headings read "INTUCH Stock Price", "Investment Structure", "We Are Intouch Holdings PCL.", "INTOUCH : Sustainable Wealth", vision, mission and corporate values (the acronym ACTIVE: Agility, Creativity, Teamwork, Integrity, Value, Excellence), news updates and business partners. The page is 1280px wide and 4548px tall.

The visual language is investor-relations corporate: a green gradient hero carrying dividend announcements with 3D coin illustrations, two white rounded cards with a soft large shadow overlapping the hero's lower edge, a big centered headline in which the words "Intouch Holdings" are green, a black section for vision and values with dark green translucent panels, news cards with photographs, partner logos and a dark footer with quick-menu columns.

Capture note: the first capture contained a modal announcing the amalgamation of Gulf Energy Development and Intouch Holdings into a new company, "GULF DEVELOPMENT PUBLIC COMPANY LIMITED", with a dark scrim and a Thai cookie bar. Those are temporary notices and are not documented here. The page was re-measured through the batch extractor and the re-captured home page shows the regular design.

## Colors

- **Canvas `#ffffff`**: largest measured area (10615 units).
- **Brand green `#69a72a`**: the site's declared `--primary-color` (also `--fs-color-primary`), the second-largest area (4303 units), the colour of "Intouch Holdings" in the headline (364 characters), the filled secondary button and the outline of the cards in the capture.
- **Primary `#ccdc04`**: lime, the fill of the measured primary button ("STOCK QUOTES"), declared as `--fs-color-secondary` and `--wp--preset--color--secondary`.
- **Ink `#000000`** (339 characters) and **ink dark `#333333`** (274 characters, also the declared link colour `--fs-experimental-link-color`) are the text colours on white.
- **Light ink `#f1f1f1`** (960 characters) is text on dark panels; white `#ffffff` is read in 1461 characters.
- **Brown `#5a310f`** (105 characters) and **nav green `#8cbb1b`** (the declared `--fs-color-success`) are secondary text and navigation colours; `#ffdf2e` (36) and `#c75e07` (15) also appear in text.
- **Translucent black** surfaces: `#00000097` for dark card backgrounds and `#000000c7` for the footer. A 5% black `#0000000d` is the hairline border on buttons.
- The link hover colour is declared as `#a4cc0f` (`--fs-experimental-link-color-hover`), measured as a border colour on two elements.

## Typography

Inter (weights 100 to 900) is the main face, with Noto Sans Thai (100 to 900) as the Thai companion; the stack is `Inter, "Noto Sans Thai"`. Poppins 400 and icon fonts (Font Awesome 5, dashicons, fl-icons) are also loaded. 3558 measured characters use Inter. Weights by characters: 300 (2277), 400 (745), 500 (452), 700 (84), so the site reads light.

Measured roles at desktop:

- Display (h1 role): 51.04px / 51.04px, weight 400.
- Heading: 57.6px / 74.88px, weight 400 (the "We Are Intouch Holdings PCL." line in the capture).
- Subheading: 22px / 35.2px, weight 400.
- Body: 16px / 25.6px, weight 300 (1260 characters at 16px).
- Primary button: 12.75px / 20.4px, weight 400, uppercase, letter-spacing 0.3825px.
- Secondary button: 15.52px / 24.832px, weight 400, letter-spacing 0.4656px.
- Navigation: 32px / 32px, uppercase (as extracted for the nav role).

Other sizes include 17.6px (385 characters), 16.56px (299), 14.4px (239), 18px (185), 19.2px (161), 32.64px (143) and 12.8px (123). On the 390px pass the display role is 20.8px / 33.28px.

## Layout

The page is a flat-sections stack: hero, a two-up card row, a centered statement, a three-tile business row (telecom, media-technology, digital), an about row with a monitor mock-up at the right, a black vision-mission-values section, a news row, a partners row and the footer. The most used paddings are 15px (56 uses), 10px (25), 30px (18), 20px (12), 7px (8) and 25px (8). Gaps were not recorded. The theme exposes a sticky header height of 80px.

Imagery and voice: the hero is a green gradient with isometric 3D illustrations (coins, a stage with figures, floating cards) announcing a dividend payment in Thai, with two small yellow pill links beneath it for downloading the announcement. Below it, a stock-market chart image in green and a diagram of the company's holdings (AIS for wireless telecommunications and InVent for other businesses, with the ownership share 40.44%) sit inside the cards. News cards pair dated photographs with English headlines in uppercase, and the partner row shows logos in their own colours on white. Copy alternates between Thai corporate prose and short English titles, and the tone is formal, investor-facing and values-driven.

## Elevation & Depth

The white cards float on `rgba(0, 0, 0, 0.2) 0px 30px 40px 0px` (9 measured uses), a tall, soft, low-contrast shadow. Smaller shadows are `rgba(0, 0, 0, 0.16) 0px 3px 6px 0px` (1) and a grey halo `rgb(128, 128, 128) 0px 0px 5px 0px` (1). On hover the "STOCK QUOTES" pill gains an inset shadow `rgba(0, 0, 0, 0.2) 0px 0px 0px 100px`, which darkens its fill without changing the text colour. Dark panels use translucent black over a dark photographic background.

## Shapes

Radii by use: 20px (9) and 15px (9) for cards and tiles, 30px (6) for the large floating cards, 999px (4) and 99px (3) for pill buttons, 100% (4) for circular icons, 5px (2) and a few single-corner values. Primary buttons are pills (99px) with a hairline border of `#0000000d`.

## Components

- **Primary button** ("STOCK QUOTES"): lime `#ccdc04` fill, white uppercase 12.75px text, 33px tall, 99px radius, padding 0 15.3px, with the inset-shadow hover above.
- **Secondary button** ("รู้จักอินทัช"): green `#69a72a` fill, white 15.52px text, 39px tall, 99px radius, padding 0 18.624px.
- **Floating cards**: translucent-dark or white backgrounds, 30px radius, the 30px 40px shadow.
- **Business tiles**: outlined green boxes with a line icon; the selected tile is filled `#69a72a` with white label.
- **Value panels**: dark green translucent rectangles on black with a green heading.
- **Footer**: `#000000c7` background with white text, logo, a "Quick menu" in two columns and an address block.

## Design System Architecture

No public design-system documentation or brand-guideline link was found: the home page HTML was opened and linked only to press and award news pages. The site is built on the WordPress theme Flatsome (variables `--fs-color-primary`, `--fs-color-secondary`, `--fs-color-success`, `--fs-color-alert` `#b20000`, `--flatsome--header--sticky-height`) with a custom `--primary-color` `#69a72a`. The de-facto system is a green/lime pair, light Inter body text, pill buttons and large soft shadows.

## Do's and Don'ts

- Do use `#69a72a` as the structural brand green and `#ccdc04` for the pill call to action.
- Do set body text in Inter 300 at 16px with 25.6px line-height.
- Do give floating cards 30px corners and the 0 30px 40px soft shadow.
- Do colour the company name inside headlines green, as in "Intouch Holdings".
- Don't document the amalgamation modal, scrim or cookie bar as brand UI.
- Don't use WordPress preset colours (vivid purple, pale pink) as brand colours.
- Don't use sharp-cornered buttons; measured buttons are pills.

## Responsive Behavior

Measured at 390px: the display role is 20.8px / 33.28px weight 400; the most common sizes are 16px (1260 characters), 13.6px (299), 14.4px (239), 12.8px (171), 16.2px (149) and 12.16px (143). Layout reflow, menu behaviour and hover on touch were not measured.

## Iteration Guide

1. White canvas, green `#69a72a` for structure and `#ccdc04` for the action pill.
2. Inter 300 for body at 16px, 400 for headings; Noto Sans Thai for Thai.
3. Pills at 99px with a 5% black hairline; cards at 20px to 30px.
4. Add the soft shadow `rgba(0, 0, 0, 0.2) 0px 30px 40px 0px` to floating cards.
5. Use a black band with translucent dark-green panels for vision and values.
6. Check new values against `web/data/extracted/intouch.json`.
