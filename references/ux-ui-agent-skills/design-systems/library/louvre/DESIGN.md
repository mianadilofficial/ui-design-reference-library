---
version: alpha
name: Musée du Louvre
category: "Culture & Events"
description: "Musée du Louvre (louvre.fr/en): a black #000000 museum site with #1a1a1a and white #ffffff sections, uppercase LouvreSerif headings at 48px, Montserrat 600 tracked caps for labels, Roboto for text, and pill-shaped buttons (40.96px radius) in Louvre green #008573 that darken to #0a4f51 on hover."
colors:
  canvas: "#000000"
  page-body: "#000000"
  surface-raised: "#1a1a1a"
  surface-light: "#ffffff"
  surface-notice: "#f6f6f6"
  ink: "#ffffff"
  ink-dark: "#000000"
  primary: "#008573"
  on-primary: "#ffffff"
  primary-hover: "#0a4f51"
  ink-muted: "#c6c6c6"
  hairline: "#333333"
  button-light-hover: "#e5e5e5"
  alert: "#cb283e"
  surface-stone: "#858271"
typography:
  display:
    fontFamily: LouvreSerif, Georgia, "Times New Roman", serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 56.16px
    textTransform: uppercase
  heading-caps:
    fontFamily: Montserrat, Verdana, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 23.94px
    letterSpacing: 1.6px
    textTransform: uppercase
  heading-caps-mobile:
    fontFamily: Montserrat, Verdana, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: 1.5px
    textTransform: uppercase
  subheading:
    fontFamily: LouvreSerif, Georgia, "Times New Roman", serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 31.92px
    textTransform: uppercase
  body:
    fontFamily: Roboto, "Open Sans", Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21.98px
  button:
    fontFamily: Roboto, "Open Sans", Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24.96px
  nav:
    fontFamily: Roboto, "Open Sans", Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24.96px
  button-small:
    fontFamily: Roboto, "Open Sans", Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21.98px
rounded:
  xs: 4px
  sm: 24px
  md: 37.98px
  lg: 40.96px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 12px 32px
    height: 49px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 38px
  button-light:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.ink-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
  button-light-hover:
    backgroundColor: "{colors.button-light-hover}"
  button-outlined-dark:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    typography: "{typography.button-small}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 40px
    border: "1px solid #333333"
  link:
    textColor: "{colors.ink-dark}"
    typography: "{typography.button}"
    padding: 16px
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    padding: 1px 0px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
---

# Musée du Louvre

## Overview

The English home page of the Musée du Louvre (louvre.fr/en, title "Musée du Louvre Official Website") is a dark, image-led site that alternates black, charcoal and white bands. The header is black with the LOUVRE wordmark in widely spaced serif capitals centred, Search and language controls on the left, and "Online Boutique" and a green "Tickets" pill on the right; a second row holds VISIT, EXHIBITIONS AND EVENTS, EXPLORE and "SEE MORE". On the measured day a red alert banner sat directly under the header ("Due to demonstrations in Paris on Saturday, October 17, 2026, access to the Louvre Museum will be limited."), followed by a panoramic photograph of the Cour Napoléon at dusk with an overlaid black "WELCOME TO THE LOUVRE" panel showing today's hours and two pill buttons, "Book a ticket" and "Prepare your visit".

Below, a pale grey notice block explains reservation rules, then three named sections carry the content: "HIGHLIGHTS" (a staggered collage of artwork and gallery photographs with small category tags such as Exhibition, Concerts, Visitor trail), "LOUVRE +" (video and talk content on charcoal `#1a1a1a`) and "DELVE INTO THE LOUVRE" (a masonry wall of collection objects on black). A newsletter strip ("LET'S STAY IN TOUCH") and a black footer close the page. The personality is classical and restrained: serif capitals for section titles, artworks given room on dark backgrounds, and one cool green for every transactional action.

## Colors

- **Canvas / page body `#000000`** — the body background, the header, the "Delve into the Louvre" band and the footer; it is the most common colour on screen.
- **Surface raised `#1a1a1a`** — the "LOUVRE +" band; also the hover fill of the dark outlined button.
- **Surface light `#ffffff`** — the "HIGHLIGHTS" band and the light "Prepare your visit" pill.
- **Surface notice `#f6f6f6`** — the reservation notice block.
- **Ink `#ffffff`** — the most-read text colour (text on black). **Ink dark `#000000`** is used on the light bands.
- **Ink muted `#c6c6c6`** — secondary text on dark backgrounds.
- **Primary `#008573`** — Louvre green, the fill of "Book a ticket" and "Tickets". **On-primary `#ffffff`** labels sit on it. **Primary hover `#0a4f51`** is the measured hover fill.
- **Button light hover `#e5e5e5`** — hover fill of the white pill.
- **Hairline `#333333`** — the 1px border of the dark outlined "Online Boutique" button and the 2px inset ring (`rgb(51, 51, 51) 0px 0px 0px 2px inset`) measured on six elements.
- **Alert `#cb283e`** — the red background of the service-alert banner.
- **Surface stone `#858271`** — a measured background area colour from image-tinted blocks; the extraction recorded several such warm neutrals (`#88898e`, `#362d28`, `#986a53`) behind imagery, which come from artwork placeholders rather than UI.

## Typography

Three families are loaded, each with a clear job, plus a declared EB Garamond face:

- **LouvreSerif** (400) — section titles and artwork titles, always uppercase. **Display**: 48px / 56.16px for "HIGHLIGHTS" and "DELVE INTO THE LOUVRE" (recorded probe of `h2.BlockContainer_HomeLayoutContainer_title`). **Subheading**: 24px / 31.92px uppercase ("ZURBARÁN 1598–1664"). A 30px size is used for the "LOUVRE +" feature title ("La Chaire du Louvre…").
- **Montserrat** (600) — tracked uppercase labels. **Heading caps**: 18px / 23.94px with 1.6px letter-spacing ("RESERVATIONS REQUIRED FROM 17 OCTOBER TO 1 NOVEMBER 2026", "LET'S STAY IN TOUCH"); 16px with 1.5px for "WELCOME TO THE LOUVRE"; 14px with 1.2–1.3px for smaller labels.
- **Roboto** (300, 400, 500) — the reading and interface face, the dominant family by characters. **Body**: 14px / 21.98px; 16px / 24.96px is the most-read size and the nav style; **button** labels are Roboto 500 at 16px (large pill) or 14px (small pill).

Roboto and Montserrat are open-source Google fonts. LouvreSerif is the museum's own face; a substitute is a high-contrast classical serif with good capitals, such as Cormorant Garamond or EB Garamond (which the stylesheet itself declares), set uppercase.

## Layout

On the 1280px desktop viewport the header content spans x=56 to x=1232 and the content bands start at x=80 (to about x=1200), an 80px side margin for sections. The `:root` variables describe a six-column grid: `--column-count: 6`, `--grid-gap: 16px`, `--body-padding: 16px`, `--inner-width: calc(var(--hundred-vw) - 32px)` and `--column-unit` derived from those. Highlights use an asymmetric collage (one large image, smaller ones offset) rather than a uniform grid; Louvre+ uses a feature row (image left, title and credits right) over a four-up row of video cards; Delve uses a three-column masonry of objects. Measured gaps are 24px, 16px and 48px; paddings concentrate on 12px, 80px (section padding), 6px, 16px and 24px. The footer is a multi-column link grid on black with two measured columns of structure.

## Elevation & Depth

No drop shadows are used. Depth comes from the stacking of tonal bands (black, `#1a1a1a`, white, `#f6f6f6`), from the black "Welcome" panel overlapping the hero photograph, and from photography. The only measured shadow is an inset 2px `#333333` ring (`rgb(51, 51, 51) 0px 0px 0px 2px inset`), an outline effect on six elements.

## Shapes

Actions are pills: the large buttons compute a 40.96px radius and the small header buttons 37.98px, both rounding their full height. Cards and image tiles use a small 4px radius (the most frequent radius, 15 elements), 24px appears on four elements, and 50% on six circular elements (the footer social icons are circles in the capture). Small category tags on Highlights images ("Exhibition", "Concerts", "Lectures") are dark rectangles with light text.

## Components

- **Primary button** — `#008573` fill, white Roboto 500 16px label, padding 12px 32px, 49px tall, 40.96px radius. Hover: `#0a4f51`.
- **Small button** — "Tickets" in the header: same green, 14px label, padding 8px 16px, 38px tall, 37.98px radius.
- **Light pill** — "Prepare your visit", "More content on Louvre+", "Explore", "Subscribe": white fill, black label, pill radius; hover `#e5e5e5`.
- **Dark outlined pill** — "Online Boutique": black fill, white 14px label, 1px solid `#333333` border, 40px tall; hover fill `#1a1a1a` with white border.
- **Welcome panel** — black box over the hero with Montserrat caps title, opening status and hours "9:00 AM → 6:00 PM".
- **Alert banner** — full-width `#cb283e` strip with an alert icon, white text and a close control.
- **Video card** — `#000000` card, 4px radius, image with play icon, white title and a "VIDEO · 7 min" meta line.
- **Text link** — Roboto 500 16px, black on light, underlined with a trailing arrow ("See list of cardholders exempt from reservations →").
- **Footer** — black, column titles ABOUT, OUR WEBSITES, CONTACT, FOLLOW US, circular social icons, the "AMIS DU LOUVRE" membership block and legal links.

## Design System Architecture

No public design system or brand guidelines are published on the pages opened: the press site (https://presse.louvre.fr/) has no charte graphique, logo rules or typeface information. The de-facto system is visible in the shipped front end. Layout is driven by a handful of `:root` variables (`--column-count`, `--grid-gap`, `--body-padding`, `--inner-width`, `--column-unit`, `--hundred-vw`, `--hundred-vh`). Component classes follow a `Block_Component_element` naming scheme (e.g. `BlockContainer_HomeLayoutContainer_title`, `SvgRWrapper` for icons), and the type system is a three-family split: LouvreSerif for titles, Montserrat 600 tracked caps for labels, Roboto for everything else. Colour is sparse — black and white tonal bands, green for transactions, red for alerts.

## Do's and Don'ts

**Do**
- Set section titles in uppercase LouvreSerif at 48px; keep them in regular weight.
- Use Montserrat 600 uppercase with about 0.09em tracking for labels and panel headings.
- Use Louvre green `#008573` pills for ticketing and booking only.
- Alternate black, `#1a1a1a` and white bands to separate sections.
- Give artworks space on dark backgrounds with small 4px corners.

**Don't**
- Don't use green for decorative fills or non-transactional links.
- Don't bold the serif.
- Don't add drop shadows; use tonal bands and inset rings.
- Don't use square buttons; all measured buttons are pills.
- Don't present the warm image-placeholder neutrals as brand colours.

## Responsive Behavior

Measured on the 390px mobile pass: the reservation heading drops from 18px to 16px (1.5px tracking, 24px line-height); the "HIGHLIGHTS" and "LOUVRE +" serif titles measured 30px (48px on desktop). Body paragraphs in the alert measured 12px / 18px. The most-read mobile sizes are 16px, 14px, 12px, 24px, 18px and 30px. Content bands run from x=16 to x=374, a 16px gutter (matching `--body-padding: 16px`), and the alert banner text from x=16 to x=350. The mobile header measured 87px tall with two visible header links and a visible toggle labelled "Menu"; up to two card columns were measured. Breakpoints and collage reflow were not measured.

## Iteration Guide

1. Build on a black canvas with white Roboto text; introduce `#1a1a1a` and white bands for section rhythm.
2. Title each section with uppercase LouvreSerif 48px (or a classical serif substitute) and keep labels in tracked Montserrat 600 caps.
3. Make every action a pill: green `#008573` for booking, white for secondary, black outlined for utility links.
4. Use a six-column grid with 16px gaps and 80px section margins on desktop.
5. Reserve red `#cb283e` for service alerts.
6. Keep image tiles at 4px radius with small dark category tags.
