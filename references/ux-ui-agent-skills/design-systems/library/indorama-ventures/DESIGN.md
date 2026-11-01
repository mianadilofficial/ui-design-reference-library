---
version: alpha
name: Indorama Ventures
category: "Thai Brands"
description: "Indorama Ventures, a global PET, fibers and packaging chemicals producer, uses a white page with navy ink and panels (#002e61), signal red (#cc0033) and green (#009933) pill buttons, pale teal bands (#d6ebeb), and Noto Sans at weight 300 for 16px body with 36px light headlines and 24px bold uppercase business titles."
colors:
  canvas: "#ffffff"
  page-largest: "#ffffff"
  ink: "#002e61"
  surface-navy: "#002e61"
  surface-mist: "#ccd5df"
  surface-pale-teal: "#d6ebeb"
  primary: "#cc0033"
  on-primary: "#ffffff"
  surface-black: "#000000"
  accent-lime: "#a2dd7a"
  accent-coral: "#f87171"
  button-secondary-bg: "#009933"
typography:
  display:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 36px
    fontWeight: 300
    lineHeight: 40px
  display-mobile:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 24px
    fontWeight: 300
    lineHeight: 32px
  heading:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
  body:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 10px
    fontWeight: 300
    lineHeight: 16px
    textTransform: uppercase
  button-secondary:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 20px
    textTransform: uppercase
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 12.8px
  s5: 16px
  s6: 20px
  s7: 38.39px
  s8: 38.4px
  s9: 40px
  s10: 50px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 32px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    height: 38px
  card:
    backgroundColor: "{colors.surface-navy}"
    textColor: "{colors.page-largest}"
    rounded: "{rounded.none}"
    padding: 80px 0px 0px
---

## Overview

Indorama Ventures (page title "Indorama Ventures"; the measured page resolves to beta.indoramaventures.com, the company's own site, in English) is a global manufacturer of PET resin, packaging, fibers and specialty chemicals. The home page opens with a pale frosted header holding the logo (an italic navy wordmark with the letter-spaced word VENTURES), an uppercase navigation (HOME, ABOUT, OUR BUSINESS, NEWS AND MEDIA, CAREERS) on a navy capsule, a green SUSTAINABILITY pill, a green circle, a red INVESTORS pill and a red phone circle, plus a small language selector (EN) and a stock-price badge (a baht price with a percentage change) over the hero.

The hero is a photograph of a mother helping a child wash hands, with a white tab at its lower left reading "Indispensable Chemistry". Below it a pale teal band carries the statement "We are a global industry leader producing indispensable chemistry that benefits billions of people and our planet every day." with "indispensable chemistry" in bold. A navy tab labeled "OUR BUSINESS" (light "OUR", bold "BUSINESS") introduces a two-by-two grid of business cards: COMBINED PET, INDOVIDA (PACKAGING), FIBERS and INDOVINYA, each with a red bullet marker, a small icon in a notch at the upper right, a navy panel with a swooping highlight, white body copy, an arched portrait photograph at the bottom and a green "EXPLORE MORE" pill. A rounded teal band closes the first screens: "WE GIVE MATERIALS NEW LIFE THROUGH RECYCLING", with "NEW LIFE" and "RECYCLING" in lime and a flip counter reading billions of bottles recycled since 2011.

The measured page is 3832px tall at 1280px wide. Photography is warm and human (children, families, laboratory work) and graphics are rounded shapes with large curved corners. The voice is corporate and benefit-led.

## Colors

- **White (#ffffff, `canvas`)** is the largest background area (5044).
- **Navy (#002e61, `ink`, `surface-navy`)** is the text color on white (1132 characters), the business-card panel fill and the navigation capsule (1512 area).
- **White text** (#ffffff, 1986 characters) is used on navy panels and on the buttons.
- **Signal red (#cc0033, `primary`)** fills the INVESTORS pill and the red phone circle; the bullets and small tabs by the cards are red too.
- **Green (#009933, `button-secondary-bg`)** fills the SUSTAINABILITY pill, the "EXPLORE MORE" pills, and the CORPORATE SOCIAL RESPONSIBILITY button (53 area).
- **Pale teal (#d6ebeb, `surface-pale-teal`)** is the statement band background (266); **mist blue-grey (#ccd5df, `surface-mist`)** fills 645 area; **black (#000000)** 832 area.
- **Lime (#a2dd7a, `accent-lime`)** colors 17 characters of emphasis ("NEW LIFE", "RECYCLING"); **coral (#f87171, `accent-coral`)** colors 12 characters.
- **Other:** #a5322a (55 area) and #ffffffcc translucent white (131) appear in area measurements and are not tokens. Borders are #ffffff (21).

No hover color was captured.

## Typography

One variable family, Noto Sans (weights 100 to 900 loaded), sets all 3149 measured characters. Light weight 300 is the default voice and 700 is used for headings.

- **Display (h1):** 36px / 40px weight 300 (mobile 24px / 32px).
- **Heading (h2):** 24px / 32px weight 700, uppercase ("COMBINED PET"); 20px / 28px on the 390px pass.
- **Subheading (h3):** 20px / 28px weight 700 ("Indispensable Chemistry").
- **Body:** 16px / 24px weight 300 (2183 characters).
- **Button:** 10px / 16px weight 300 uppercase (INVESTORS); secondary button 14px / 20px weight 300 uppercase.
- **Other measured sizes:** 12px (311 characters, nav), 18px (70).

Light weights make the page read as airy; bold appears only inside headings and in emphasised statement words. Noto Sans is the site's only family, with generic sans-serif as fallback.

## Layout

The stylesheet is Tailwind-based (`--tw-ring-*`, `--tw-shadow` variables). Spacings measured are 4px, 8px, 12px, 12.8px, 16px, 20px, 38.39px, 38.4px, 40px and 50px; the card has 80px top padding. The structure is a full-width hero, a statement band, a two-column grid of business cards separated by wide gutters, and a full-width rounded recycling band. Cards overlap their photographs, with each portrait cropped into an arch that straddles the card's bottom edge.

## Elevation & Depth

No box shadows were measured (`boxShadows` empty). Depth comes from overlap and shape: arched photographs break the card edge, the white tab overlaps the hero, the frosted header floats over the photograph and the notched icon tiles sit in the card corners. Swooping highlight graphics on the navy panels add dimension.

## Shapes

Shapes are generous and asymmetric. The measured radii are 9999px (41 elements, pills and circles), `0px 9999px 9999px 0px` (11) and `9999px 0px 0px 9999px` (5) for tabs with one rounded end, `0px 0px 45px` (8), `0px 0px 40px` (4) and `0px 9999px 9999px 12px` (1). Buttons themselves compute 0px radius in the measurement (button-primary and button-secondary radius is `none`), although the capture renders pill shapes; the tokens follow the measurement, with `pill` 9999px available for the capsules.

## Components

- **INVESTORS button.** #cc0033 fill, white 10px uppercase label, 32px high, radius measured 0px.
- **Secondary button.** #009933 fill, white 14px uppercase label, 38px high ("CORPORATE SOCIAL RESPONSIBILITY").
- **Navigation capsule.** Navy capsule with 12px uppercase links separated by thin vertical dividers.
- **Business card.** Navy (#002e61) panel, white 16px light copy, 80px top padding, red bullet marker, an icon tile and an arched portrait.
- **Statement band.** #d6ebeb, navy 36px light text with bold emphasis.
- **Recycling band.** Teal rounded rectangle with lime emphasis words and a numeric counter.
- **Inputs and footer.** Not measured.

- **Card copy.** The COMBINED PET card reads "We are one of the world's leading PET manufacturers and recyclers" and goes on to describe recycling, packaging and specialty chemicals for food and beverages, pharmaceuticals, cosmetics and personal care. The INDOVIDA (PACKAGING) card covers PET preforms, bottles, and HDPE and PP closures; the FIBERS card describes automotive, industrial, home and technical textiles, apparel, hygiene and medical applications; the INDOVINYA card describes specialty chemical solutions for home and personal care, crop solutions, coatings, and energy and resources. Body copy is set at 16px weight 300 in white on the navy panel and is long-form, five to six lines per card.
- **Stock badge.** A small white rounded badge at the lower right of the hero shows "Stock Price", a baht amount and a percentage change in a red tone; it is a data widget, not a brand button.
- **Language selector.** "EN" with a globe icon sits above the header at the far right.

## Design System Architecture

No public Indorama Ventures design system or brand guideline was found: https://beta.indoramaventures.com/brand, /press, /about and /design all returned 404 when fetched. The de-facto system is the shipped Tailwind stylesheet: utility variables, one variable font (Noto Sans 100 to 900) and colors applied directly. The measured final URL is https://beta.indoramaventures.com/ (queued as https://www.indoramaventures.com/en).

## Do's and Don'ts

- Do set text in Noto Sans at weight 300 and reserve 700 for headings.
- Do use navy #002e61 for text on white and as the panel color with white text.
- Do use red #cc0033 for the investor action and green #009933 for sustainability and "Explore more".
- Do use arched, pill and one-sided rounded shapes with large radii.
- Don't add shadows; none were measured.
- Don't use the lime (#a2dd7a) outside short emphasis words.
- Don't treat the stock-price badge as a brand component.

## Responsive Behavior

The 390px pass measured: h1 at 24px / 32px weight 300, h2 at 20px / 28px weight 700 uppercase, body at 16px / 24px weight 300, and the CORPORATE SOCIAL RESPONSIBILITY button (the pass's primary CTA) at 14px / 20px with a #009933 fill. Navigation and grid layout at 390px were not measured.

## Iteration Guide

1. White page, navy #002e61 text, Noto Sans 16px at 300.
2. Place a photograph hero with a white tab, then a #d6ebeb statement band.
3. Build a two-by-two grid of navy cards with arched photographs.
4. Use #cc0033 and #009933 for actions.
5. Close with a rounded teal band and a counter.
6. Check radii with the extractor before making buttons round.
