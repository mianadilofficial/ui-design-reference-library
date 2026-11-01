---
version: alpha
name: MARSUN PUBLIC COMPANY LIMITED (Marsun Shipyard)
category: "Thai Brands"
description: "Marsun, a Thai shipbuilder and ship-repair company: white canvas with navy #004581 headings, footer and hover fills, teal #018abd button fill, #4a4a4a body copy, all set in db_heavent (60px bold display, 24px body), 5px button radius, and ocean-water photography."
colors:
  canvas: "#ffffff"
  ink: "#4a4a4a"
  primary: "#018abd"
  on-primary: "#ffffff"
  surface-black: "#000000"
  brand-navy: "#004581"
  ink-pale: "#c3c1c1"
  ink-strong: "#141415"
  ink-muted: "#707070"
  hairline: "#88a8c4"
typography:
  display:
    fontFamily: db_heavent, Arial, Helvetica, sans-serif
    fontSize: 60px
    fontWeight: 700
    lineHeight: 60px
  display-mobile:
    fontFamily: db_heavent, Arial, Helvetica, sans-serif
    fontSize: 38px
    fontWeight: 700
    lineHeight: 38px
  subheading:
    fontFamily: db_heavent, Arial, Helvetica, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 36px
    textTransform: uppercase
  body:
    fontFamily: db_heavent, Arial, Helvetica, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.08px
  button:
    fontFamily: db_heavent, Arial, Helvetica, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 23.4px
  nav:
    fontFamily: db_heavent, Arial, Helvetica, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 5px
spacing:
  s1: 1px
  s2: 5px
  s3: 15px
  s4: 22px
  s5: 25px
  s6: 28px
  s7: 30px
  s8: 40px
  s9: 45px
  s10: 50px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 15px
    height: 45px
  button-primary-hover:
    backgroundColor: "{colors.brand-navy}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 78px 0px 0px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.brand-navy}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.brand-navy}"
    textColor: "{colors.canvas}"
    padding: 40px 0px 25px
---

## Overview

The queued entry, Marsun Shipyard, resolves to the site of MARSUN PUBLIC COMPANY LIMITED (`https://marsun.th.com/en/`, English edition, title "MARSUN PUBLIC COMPANY LIMITED", measured 1280px wide and 3291px tall). Marsun is a shipbuilder: its product line is "Naval and Patrol Vessels", "Yacht", "Commercial Boat" and "Ship Repair". This document is named after the measured site (the company name in the page title).

The page opens with a white header: a circular "Marsun" emblem with the Thai and English company name, and a nav of Home (active, with a teal underline), Ship Building, Ship Repair, About Us, News & Activities, Contact Us and an "EN" language switch. A thin gradient rule runs across the very top. The hero is a 12-slide slider (the slider control shows "03/12", dots, and previous/next arrows on a navy plate); in the stored capture the hero image failed to load and shows a blank frame, so nothing is documented about hero artwork.

Under it, "Our Product" in navy 60px bold sits over a faint blueprint-line background that fades into ocean-wave photography; a white card holds a product (label "PRODUCT", the title "TRIMARAN CREW TRANSFER VESSEL", a paragraph "High-Speed Passenger Trimaran CTV for Offshore Windfarm...", and a "View More" button) beside a photograph of an orange catamaran, with grey square arrow buttons on either side. A deep-blue "What We Do" band follows with white headings and three tiles: Naval and Patrol Vessels (14 PRODUCT), Yacht (1 PRODUCT) and Ship Repair stacked, and Commercial Boat (3 PRODUCT), each with a white line icon and a photograph. The page meta description is only the company name.

## Colors

- **Canvas `#ffffff`**: the page and cards (5756 background weight).
- **Brand-navy `#004581`**: headings ("Our Product", the product title), the active nav text color, the slider plate, the footer fill, and the hover state of the arrow buttons. It is the strongest brand color on the page (56 character-weight as text, 318 as background).
- **Primary `#018abd`**: a teal-blue used as the fill of the "View More" link (with white `#ffffff` text), and for small accents such as the active nav underline. Its hover fill is navy (measured on the slider arrow buttons, not on this link).
- **Ink `#4a4a4a`**: body copy (1300 character-weight). **Ink-strong `#141415`**, **ink-pale `#c3c1c1`** and **ink-muted `#707070`** (the grey fill of the carousel arrows) are minor values.
- **Surface-black `#000000`**: a large background area (1433), the dark photo and overlay areas.
- **Hairline `#88a8c4`**: a pale blue border color (4 measured uses), together with `#ffffff` and `#5d7f9e`.

Text in white on navy and on photographs (1782 character-weight) is the most common text color.

## Typography

One family: **db_heavent** (a Thai/Latin face), weights 400 and 700, with fallback `Arial, Helvetica, sans-serif`. It covers both the English page and the Thai edition.

- **Display** (700, 60px / 60px): section titles such as "Our Product"; 38px / 38px in the mobile pass.
- **Subheading** (700, 36px / 36px, uppercase): product names (TRIMARAN CREW TRANSFER VESSEL).
- **Body** (400, 24px / 28.08px, `#4a4a4a`): paragraphs.
- **Button** (400, 20px / 23.4px).
- **Nav** (400, 22px / 24px).

Sizes are large because db_heavent has a small x-height; no scale ratio is claimed. If db_heavent is not available, the declared fallbacks are Arial then Helvetica.

The emblem in the header is a round seal with the text "Marsun", and the company name in both Thai and English underlined in navy. The page's imagery is practical rather than glossy: vessels on open water, a hull in a dry dock, and white line icons that reduce each product category to a pictogram (a boat, a sailing yacht, a wrench-and-gear).

## Layout

The page is built of full-width bands: header, slider, a light product band with a blueprint background, a navy "What We Do" band and a footer (navy, padding `40px 0px 25px`). Inside, content is placed in a centered column; the "What We Do" tile grid is three columns with the middle column split into two stacked tiles. The measured spacing steps are 1, 5, 15, 22, 25, 28, 30, 40, 45 and 50px. A 78px top padding is used on the nav link containers. The header is white with a bottom rule.

## Elevation & Depth

Three shadows were measured: `rgba(66, 64, 64, 0.18) 0px 6px 21px 0px` (7 elements, the soft lift of the white product card), `rgba(0, 0, 0, 0.48) 0px 9px 21px 0px` (4 elements, the stronger shadow under the "What We Do" tiles) and `rgba(66, 64, 64, 0.22) 0px 9px 8px 0px` (3 elements). Layering also comes from the photographic backgrounds with faded blueprint lines.

## Shapes

One radius is measured: `5px` on 6 elements (buttons). Arrow buttons and tiles are square (0px), so the whole page reads as rectangular geometry with only the call-to-action softened. The token is `xs 5px`, and no pill or circular radius was measured on this page, including the circular emblem in the header, which is an image.

## Components

- **Primary button** ("View More"): `#018abd` fill, white db_heavent 20px text, 5px radius, 45px tall, padding `0px 15px`. In the capture the product card's "View More" appears as an outlined button; the filled value is the computed style of the "View More" link on the measured page.
- **Slider controls**: a navy plate with a "03/12" counter, white dots and prev/next chevrons.
- **Carousel arrows**: grey `#707070` 58px square buttons that turn navy `#004581` on hover (measured).
- **Product card**: white card with a soft shadow, a small teal label, a navy uppercase title, a paragraph and a button, beside a photograph.
- **Category tile**: photograph with navy-tinted overlay, white line icon, bold white title and a "N PRODUCT" count.
- **Footer**: navy `#004581` with white text.

## Design System Architecture

No public design system, brand guidelines or token package was found: the English home page was the only page opened and it declares no root CSS variables (the variable list is empty). The de-facto system is hard-coded CSS using the single db_heavent family, a navy and teal pair, and a handful of shared shadows. A `th` edition of the site also exists (the language switch shows "EN"), but it was not measured.

## Do's and Don'ts

Do:
- Use navy `#004581` for headings, the footer and hover fills; use `#4a4a4a` for body text.
- Keep db_heavent for everything, bold for titles and regular for text.
- Present vessels as photographs with white cards or navy overlays and give each category an icon and a product count.
- Keep button corners at 5px.

Don't:
- Don't use pure black for body text; `#4a4a4a` is the measured body color.
- Don't replace the water and ship photography with abstract art.
- Don't leave the hero as an empty image frame; it was blank in the capture.
- Don't invent additional accent colors; only teal and navy were measured.

## Responsive Behavior

The mobile pass recorded font sizes and roles. The display type measured 38px / 38px (desktop 60px / 60px), and the "View More" button kept its 20px label. Mobile font-size weights were led by 18px (4409), 22px (1149), 36px (290), 30px (151), 20px (150) and 16px (66). Mobile layout, the menu pattern and breakpoints were not measured.

## Iteration Guide

1. Start with a white canvas, navy `#004581` headings in db_heavent bold 60px, and `#4a4a4a` 24px body.
2. Add the teal `#018abd` "View More" button: 45px tall, 5px radius, white 20px label.
3. Use photographic ocean backgrounds for hero and bands, with a navy overlay for the dark band.
4. Build product tiles with white line icons and "N PRODUCT" counts.
5. Measure the Thai edition and the hero slides before documenting them.
