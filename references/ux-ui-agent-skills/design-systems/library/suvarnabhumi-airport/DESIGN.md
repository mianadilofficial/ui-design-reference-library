---
version: alpha
name: "Suvarnabhumi Airport"
category: "Thai Brands"
description: "Suvarnabhumi Airport official site (suvarnabhumi.airportthai.co.th, Airports of Thailand) measured live: a sky-blue #03a9f4 navigation bar, Kanit at 12px body and 17px semibold headings, white and #f1f1f1 bands, #4b4b4b text, #00aff4 accent, 7px card corners with soft grey 8px shadows, and a circular icon list."
colors:
  canvas: "#ffffff"
  ink: "#4b4b4b"
  primary: "#00aff4"
  surface-grey: "#f1f1f1"
  surface-footer: "#f5f5f5"
  ink-strong: "#2e2e2e"
  ink-muted: "#696969"
  link-navy: "#025596"
  ink-heading: "#212529"
  hairline: "#09b2ff6b"
  nav-bg: "#03a9f4"
  text-input-text: "#000000"
  footer-text: "#0094df"
typography:
  display:
    fontFamily: Kanit, sans-serif
    fontSize: 17px
    fontWeight: 600
    lineHeight: 25.5px
  nav:
    fontFamily: Kanit, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
  input:
    fontFamily: Kanit, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 5px
  md: 7px
  lg: 8px
  xl: 10px
  2xl: 33px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 8px
  s8: 10px
  s9: 13px
  s10: 14px
components:
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
    padding: 10px 40px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 0px 14px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 1px 2px 1px 40px
    height: 48px
  card:
    textColor: "{colors.primary}"
    rounded: "{rounded.lg}"
    boxShadow: rgb(177, 177, 177) 0px 0px 8px -2px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.footer-text}"
    padding: 50px 50px 20px
---

## Overview

The measured page is suvarnabhumi.airportthai.co.th, titled "Suvarnabhumi Airport | Bangkok International airport of Thailand | BKK". The domain and the AOT logo in the header belong to Airports of Thailand, the operator, so this is the airport's own site. The page is 3,109px tall at 1280px and its text is English with some Thai promotional images.

The top of the page is a sky-blue strip that switches between the operator's airports (SUVARNABHUMI AIRPORT, DON MUEANG INTERNATIONAL AIRPORT, CHIANG MAI, MAE FAH LUANG CHIANG RAI, HAT YAI, PHUKET, each with a small "INTERNATIONAL AIRPORT" caption), plus a search icon and an English language selector. A white row below carries the AOT logo and five utility links in grey uppercase: FLIGHT STATUS, AIRPORT MAP, AIRPORT GUIDE, EXPLORE, CONTACT US. The hero is a full-width photograph of two metal elephant sculptures inside the terminal, with departure signage below them. A rounded pale-blue search widget overlaps the bottom of the hero: tabs "Arrivals" (selected, blue with white text) and "Departures", a field "Search arrivals flight", and a blue SEARCH button. A skyline silhouette in light grey sits behind it.

The next band, on a light grey ground, has two columns: "AIRPORT GUIDE" with a list of four white rows (Passenger Guide, Airport Services, Shop and Dine, Transportation) each with a circular blue icon and a chevron, and "WAY TO AIRPORT" with a photo carousel card carrying a blue caption panel and a "READ MORE" link. Further down are a Thai-language advertising banner, "Passenger Guide - Essential Airport Travel Tips" with image cards (each has a title, two lines of summary and a READ MORE link), and an "EXPLORE" section with tabs Attractions, Restaurant and Hotel. A round blue chat bubble floats at the right edge; it is a widget and is not documented as brand UI.

## Colors

`canvas` is white (#ffffff, weight 1851). `surface-grey` (#f1f1f1, weight 646) and `surface-footer` (#f5f5f5, weight 481, also the footer background) are the two grey bands; #f8f9fa (weight 58) is a third. `nav-bg` (#03a9f4, weight 81) is the top bar. `primary` (#00aff4) is the accent blue (58 characters of text); the capture shows the same family of blue on the circular icons and the search widget. `hairline` (#09b2ff6b) is a semi-transparent blue border measured once. `footer-text` (#0094df) is the footer link color, and `link-navy` (#025596, 183 characters) is a dark blue used for headings and links on the caption panels.

Text colors: `ink` (#4b4b4b) is by far the most-read color (149,373 characters), a far larger count than the visible page text in the capture; `ink-strong` (#2e2e2e) is used for card titles; `ink-muted` (#696969) for secondary lines; `ink-heading` (#212529) is the color of the "AIRPORT GUIDE" h1 span; white (4767 characters) sits on blue. `text-input-text` is #000000. The root variables are Bootstrap 4 defaults (`--primary` #007bff, `--success` #28a745, `--danger` #dc3545, `--blue` #007bff, and so on); those are framework defaults and were not used as the brand's colors.

## Typography

Kanit is the only family (155,561 characters), loaded at 400 and 500. Measured weights by characters: 400 (155,227), 600 (308), 500 (26). The size census is dominated by 12px (149,848 characters), then 15px (4409), 16px (873), 17px (167), 9px, 13px, 26px, 14px, 11px and 24px. No letter spacing is recorded.

`display` is Kanit 17px weight 600 on 25.5px (the "AIRPORT GUIDE" heading span the extractor chose as h1). `nav` is 13px on 19.5px, and `input` is 16px on 24px. No standard body paragraph token was detected: running text is the 12px size. Section titles in the capture (AIRPORT GUIDE, WAY TO AIRPORT, EXPLORE) are set in uppercase, and the "Passenger Guide" title is mixed case; their sizes beyond the census (24px and 26px) are not tied to specific elements.

## Layout

The page is 1280px wide with a centered content block that is narrower than the full-bleed hero. The navigation bar has padding 10px 40px and nav links 0px 14px. The footer has 50px 50px 20px padding. The search input measured 48px tall with 40px left padding (room for an icon). The "AIRPORT GUIDE" and "WAY TO AIRPORT" columns are side by side, the guide list on the left and the carousel on the right. The card rail shows three and a half cards with round pager dots below. No container gaps were recorded. The site's Bootstrap breakpoints are published as `--breakpoint-xs` 0, `--breakpoint-sm` 576px, `--breakpoint-md` 768px, `--breakpoint-lg` 992px and `--breakpoint-xl` 1200px.

## Elevation & Depth

Cards use soft grey glows: `rgb(177, 177, 177) 0px 0px 8px -2px` (19 elements, including the `card` token), an inset `rgba(114, 114, 114, 0.14) 0px -13px 31px 4px` (4 elements), and one `rgba(0, 0, 0, 0.28) 0px 0px 17px -6px`. These are diffuse and offset-free, so cards read as faintly lifted from the #f1f1f1 band. The nav hover darkens link text from 50% black to 70% black without a shadow change.

## Shapes

Radii are moderate and varied. `md` 7px is the most common (39 elements); `0px 0px 7px 7px` (14) rounds only bottom corners of caption strips; 50% (20) and 100% (4) are the circular icons and pager dots; `lg` 8px, `xl` 10px, `sm` 5px and `xs` 4px appear on fewer elements; `2xl` 33px and `0px 33px 33px 0px` shape the search widget and its tab. The card token uses 8px.

## Components

- **nav**: #03a9f4 bar, white 13px Kanit links, padding 10px 40px; nav-link padding 0px 14px.
- **text-input**: white field, black 16px text, padding 1px 2px 1px 40px, 48px tall (the flight search).
- **card**: 8px corners with the 8px grey glow shadow; its text is in the accent blue.
- **footer**: #f5f5f5 fill with #0094df links, padding 50px 50px 20px.
- **Search widget**: a 33px-rounded pale-blue frame, selected tab in blue with white text, unselected tab in grey, SEARCH button in blue with an icon (described from the capture).
- **Icon list row**: white row with a circular blue icon, a blue label and a blue chevron.

No primary button was detected by the extractor.

## Design System Architecture

No public design-system documentation was opened. The root variables are Bootstrap 4's defaults plus a cookie-consent library's `--cc-*` settings, so they are not a brand token set. The brand look is read from computed styles: Kanit, a sky-blue family (#03a9f4, #00aff4, #0094df, #025596), two greys and 7px to 8px corners. No tokens repository was consulted.

## Do's and Don'ts

- Do use Kanit throughout, at 12px for body copy and 17px semibold for headings.
- Do build the top bar in #03a9f4 with white text and the footer on #f5f5f5.
- Do use the soft 8px grey glow for cards, with 7px or 8px corners.
- Do use circular blue icons for list rows.
- Don't use Bootstrap's default blue (#007bff) or its other framework colors as brand colors.
- Don't document the cookie-consent library or the chat bubble as brand UI.
- Don't add hard shadows; none were measured.

## Responsive Behavior

Measured at 390px: the h1 span stays at 17px, 600 weight, on a 25.5px line. The mobile size census is led by 12px (91,189 characters), 15px (3344) and 16px (657), with 17px, 10px, 11px, 18px, 22px and 14px also present. The site publishes Bootstrap breakpoints (above), but how the layout reflows was not measured.

## Iteration Guide

1. Begin with the #03a9f4 airport-switcher strip, then a white utility row with the logo.
2. Use a full-bleed photograph and a rounded pale-blue search widget overlapping it.
3. Use #f1f1f1 bands with white rows, circular blue icons and chevrons.
4. Give cards a 7px or 8px radius and the 8px grey glow.
5. Set all text in Kanit with #4b4b4b as the default color.
