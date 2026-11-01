---
version: alpha
name: Serpentine
category: "Culture & Events"
description: "Serpentine (serpentinegalleries.org): white and #f2f2f2 pages with a teal #00cbab visit band, giant condensed Platanus headlines (125.356px hero), Tstar Pro 700 uppercase labels, Noe Text serif body at 16.15px, white buttons and image cards with a single rounded bottom-left corner (10px / 20px)."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ffffff"
  surface-grey: "#f2f2f2"
  accent-teal: "#00cbab"
  ink-muted: "#666666"
typography:
  display:
    fontFamily: Platanus
    fontSize: 125.356px
    fontWeight: 400
    lineHeight: 125.356px
  display-mobile:
    fontFamily: Platanus
    fontSize: 69.1907px
    fontWeight: 400
    lineHeight: 69.1907px
  heading:
    fontFamily: Platanus
    fontSize: 84.1527px
    fontWeight: 400
    lineHeight: 84.1527px
  subheading:
    fontFamily: "\"Tstar Pro\""
    fontSize: 23.8689px
    fontWeight: 700
    lineHeight: 26.4062px
  body:
    fontFamily: "\"Noe Text\""
    fontSize: 16.15px
    fontWeight: 400
    lineHeight: 20.587px
  nav:
    fontFamily: "\"Tstar Pro\""
    fontSize: 22.152px
    fontWeight: 700
    lineHeight: 24.7232px
    textTransform: uppercase
  button:
    fontFamily: "\"Tstar Pro\""
    fontSize: 19.4822px
    fontWeight: 700
    lineHeight: 22.9029px
rounded:
  corner-sm: 10px
  corner-lg: 20px
  round: 40px
spacing:
  s1: 0.85px
  s2: 5.95px
  s3: 6.8px
  s4: 11.05px
  s5: 12.75px
  s6: 17px
  s7: 20px
  s8: 22.1px
  s9: 25.33px
  s10: 25.5px
components:
  button-ticket:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "0px 0px 0px 10px"
    padding: 11.05px 25.5px 8.5px
    height: 44px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  image-card:
    backgroundColor: "{colors.ink}"
    rounded: "0px 0px 0px 20px"
  visit-band:
    backgroundColor: "{colors.accent-teal}"
    textColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.ink}"
    padding: 67.1531px 0px 0px
---

# Serpentine

## Overview

Serpentine (serpentinegalleries.org, title "Serpentine") is the website of the London galleries in Kensington Gardens — Serpentine South and Serpentine North — and the annual Serpentine Pavilion. Its footer credits the identity directly: "Visual identity by Hingston Studio. Site designed by The Unloved. Developed by Effect." The design is poster-like and typographic: a tall, condensed display face (Platanus) at enormous sizes, a bold grotesk (Tstar Pro) for uppercase navigation and labels, and a book serif (Noe Text) for reading text. Arrow glyphs drawn as single strokes ("→", "→→→") recur as graphic devices.

The page begins with a white header — the condensed "SERPENTINE" wordmark left, "WHAT'S ON", "PLAN YOUR FREE VISIT", "SHOP", search and "MENU" right — over a photographic hero carousel where the exhibition name ("AMAR KANWAR") and dates ("UNTIL 31 JANUARY") are set in white Platanus with an arrow drawn between them. A `#f2f2f2` "WHAT'S ON" section follows, with a "VIEW ALL" link and arrows over a carousel of exhibition cards (category in italic serif, bold title, venue and dates in grey, a short serif description and "Read more +"). A bright teal band says "PLAN YOUR FREE VISIT" with three arrows and cards for both galleries; then a series of full-width photographic panels with rounded bottom-left corners — "DONATE TO SERPENTINE", "FOOD & DRINK", "SERPENTINE SHOP", "SERPENTINE READER", "FREE DIGITAL GUIDE" — each with a small white button. A light grey footer closes the page.

## Colors

- **Canvas `#ffffff`** — header and the panel section background; the largest measured area.
- **Ink `#000000`** — the most-read text colour; also the base colour under image cards.
- **Primary `#ffffff`** — the white of buttons ("BOOK TICKETS", "DONATE TODAY", "READ MORE") and of all text over photography. There is no chromatic action colour.
- **Surface grey `#f2f2f2`** — the "What's On" section and the footer.
- **Accent teal `#00cbab`** — the "Plan your free visit" band, the single saturated colour on the page.
- **Ink muted `#666666`** — venue, date and price lines on exhibition cards.

The `:root` variables are WordPress block-editor presets (`--wp--preset--color--*`, gradients, shadows) and Swiper's `--swiper-theme-color`; they are platform defaults, not the Serpentine palette.

## Typography

Three families, each with one job:

- **Platanus** (400) — display. **Display**: 125.356px / 125.356px, the hero exhibition name. **Heading**: 84.1527px / 84.1527px, section titles ("What's On", "Plan your free visit", "Donate to Serpentine"). Further measured display sizes: 105.25px and 51.0558px (hero dates, "View all"). The face renders as tall condensed capitals in the capture although the text is set in mixed case.
- **Tstar Pro** (700) — interface. **Nav**: 22.152px / 24.7232px uppercase. **Button**: 19.4822px / 22.9029px (uppercase on buttons). **Subheading**: 23.8689px / 26.4062px for card titles ("Justin Caguiat: Change Ringing").
- **Noe Text** (400 roman and italic) — reading text. **Body**: 16.15px / 20.587px, the most-read style; the italic is used for card categories ("Exhibitions", "Pavilion", "Public Art").

Other measured sizes: 19.6189px, 12.75px and 28.0851px. Fractional values indicate viewport-relative sizing.

**Substitutes**: all three are commercial faces. A tall condensed sans such as Bebas Neue or Oswald for Platanus, a bold grotesk such as Archivo Bold for Tstar Pro, and a text serif such as Source Serif 4 for Noe Text keep the three-voice structure.

## Layout

The 1280px desktop page uses a 51px side margin for most sections (content from x=51 to about x=1229), with the hero and photographic panels running wider. "What's On" is a horizontal carousel of four-plus cards that bleeds off the right edge; "Plan your free visit" is a two-column band (title and arrows left, two gallery cards right); the photographic panels stack vertically as wide rounded-corner rectangles with copy on their left side (the panel band text runs from x=210 to x=640). Paddings concentrate on 51px, 25.5px, 67.1531px and 58.6529px; gaps are 25.3306px, 20px and 17px. The footer has three columns (contact and gallery hours; Support and Our History links; About links) and a bottom row with copyright and credits.

## Elevation & Depth

Flat. A single soft shadow, `rgba(0, 0, 0, 0.15) 0px 4px 16px 0px`, was measured on one element. Hierarchy comes from scale contrast (125px display against 16px serif), from the teal band and grey sections, and from photography under white type.

## Shapes

The signature shape is a rectangle with only its bottom-left corner rounded. Image panels and cards measure `0px 0px 0px 20px` (15 elements) and buttons `0px 0px 0px 10px` (9 elements). One 40px radius was also measured. Everything else is square. The "BOOK TICKETS" button additionally uses a diagonal `linear-gradient(to left bottom, rgb(255, 255, 255) 50%, rgba(0, 0, 0, 0) 0px)` background with a 1px white border.

## Components

- **Ticket button** — white, black Tstar Pro 700 19.4822px uppercase label, padding 11.05px 25.5px 8.5px, 44px tall, 1px white border, bottom-left 10px corner.
- **Panel button** — small white rectangle with black uppercase label ("DONATE TODAY", "BOOK A TABLE", "BROWSE PRODUCTS ONLINE", "FIND OUT MORE"), bottom-left rounded.
- **Navigation** — Tstar Pro 700 22.152px uppercase black links; hover underlines; "MENU" fades to 0.7 opacity on hover.
- **Exhibition card** — image, italic serif category, bold title, grey venue/date/price, serif description, "Read more +".
- **Photo panel** — full-width photograph with bottom-left 20px corner, white Platanus title, optional one-line serif text and a white button.
- **Visit band** — `#00cbab` background, black Platanus title, drawn arrows, gallery cards with underlined bold names and serif addresses and hours.
- **Footer** — `#f2f2f2`, wordmark, Tstar Pro bold contact details, serif link lists, social icons and the credits line.

## Design System Architecture

No public design system or brand guidelines are linked from the home page (https://www.serpentinegalleries.org/); it links a press section at https://www.serpentinegalleries.org/about/press/ (not opened) and credits the visual identity to Hingston Studio (https://www.hingston.net), site design to The Unloved (https://theunloved.co.uk) and development to Effect (https://www.effectdigital.com). The site is WordPress (theme path `content/themes/serpentine-galleries/`, `--wp--preset--*` variables), and the brand system lives in the theme rather than in custom properties: three font families with fixed roles (Platanus display, Tstar Pro interface, Noe Text reading), a black/white/grey base with one teal accent, the bottom-left-corner shape at two sizes, and an inline serpent SVG (`serpent.svg`) used as a card background image.

## Do's and Don'ts

**Do**
- Make headlines huge and condensed (Platanus at 84–125px) and let them overlap photography.
- Use Tstar Pro 700 uppercase for navigation and buttons, Noe Text for everything you read.
- Round only the bottom-left corner: 20px on images and panels, 10px on buttons.
- Use drawn arrows as graphic punctuation.
- Keep colour to black, white, `#f2f2f2` and one teal band.

**Don't**
- Don't round all four corners.
- Don't set long text in the display face or in Tstar Pro.
- Don't use the WordPress preset colours or gradients as brand colours.
- Don't add drop shadows to cards.
- Don't put coloured fills on buttons; they are white.

## Responsive Behavior

Measured on the 390px mobile pass: the hero h1 drops from 125.356px to 69.1907px and the "What's On" h2 from 84.1527px to 47.3685px; other hero titles measured 55.8685px. The most-read mobile sizes are 16.15px (body unchanged), 18.5524px and 16.5401px. Sections run from x=17 to x=373 (17px gutter), photographic panels from x=34 to x=356. The mobile header measured 60px tall with three visible header links and a visible "Toggle Menu" control. The teal band measured one column and the footer band two columns. Carousel behaviour and breakpoints were not measured.

## Iteration Guide

1. Set up three type roles: condensed display (Platanus), bold grotesk caps (Tstar Pro), text serif (Noe Text).
2. Use a white/black/`#f2f2f2` base and a single `#00cbab` band for visitor information.
3. Give images and panels a 20px bottom-left corner and buttons a 10px bottom-left corner; keep the rest square.
4. Place large white display titles over photography with a small white button below.
5. Keep page margins at about 51px on desktop and 17px on mobile.
6. Use stroke arrows for navigation cues instead of icon buttons.
