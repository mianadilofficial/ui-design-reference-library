---
version: alpha
name: "Northern Bangkok Monorail (MRT Pink Line)"
category: "Thai Brands"
description: "Northern Bangkok Monorail (nbm.co.th) MRT Pink Line site: magenta #c2007a header, search card and footer, pale pink #efd8de bands, white cards with a 2px 7px soft shadow, Sarabun light type at 16px / 22px, and 26px-radius pill 'Read more' buttons."
colors:
  canvas: "#ffffff"
  ink: "#030303"
  pink-light: "#efd8de"
  ink-slate: "#2e383c"
  ink-4: "#3f3f3f"
  ink-5: "#9f9f9f"
  hairline: "#f2f2f2"
  primary: "#c2007a"
  text-input-border: "#e0e0e0"
  on-primary: "#ffffff"
  blush: "#ffeff3"
  dark-pink: "#773043"
  blue: "#20498e"
  red: "#c71517"
  green: "#76b72a"
typography:
  display:
    fontFamily: Sarabun, sans-serif
    fontSize: 26px
    fontWeight: 400
  subheading:
    fontFamily: Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 400
  nav:
    fontFamily: Sarabun, sans-serif
    fontSize: 12px
    fontWeight: 300
  button-secondary:
    fontFamily: Sarabun, sans-serif
    fontSize: 14px
    fontWeight: 400
  body:
    fontFamily: Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
    letterSpacing: 0.118182px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 26px
spacing:
  s1: 1.6px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 14px
  s9: 15px
  s10: 16px
components:
  button-secondary:
    textColor: "{colors.ink-slate}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xl}"
    padding: 10px 25px 10px 15px
    height: 40px
    borderColor: "{colors.hairline}"
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-slate}"
    boxShadow: rgba(0, 0, 0, 0.32) 0px 0px 3px 0px
  nav-link:
    textColor: "{colors.ink-slate}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-slate}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 8px 10px
    height: 37px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
    padding: 24px
    boxShadow: rgba(0, 0, 0, 0.2) 0px -1px 16px 0px
  footer:
    backgroundColor: "{colors.ink-slate}"
    textColor: "{colors.ink-slate}"
---

# Northern Bangkok Monorail (MRT Pink Line)

The Northern Bangkok Monorail (NBM), operator of the MRT Wiwat Nakhon Line (Pink Line) in Bangkok, is measured at https://nbm.co.th/en/ (title "Home | Pink Line MRT Bangkok | NBM"). The site is a transit-operator portal: a magenta header and footer, a pale pink wash for secondary bands, white content cards with soft shadows, a route-and-fare search panel, and Sarabun type in light weights. This document records what was measured.

The first extraction contained a black memorial overlay and grayscale rendering across the page. The page was re-extracted with the batch command and regenerated tokens, and the capture used here is the clean one: a cookie-consent container (`cookieConsent-en`) was hidden, and the tribute overlay and scrim are not documented as brand UI or tokens.

## Overview

The page is 3806px tall. Top to bottom: a thin pale-pink utility bar (Home, E-Library, Safety Information at the left; Join Us, Contact Us and an EN language selector at the right); a magenta header bar with the white NBM logo and a nav (About Us, Card Info, Service Information, Business & Service, News & Activities, Promotions, FAQs); a blue promotional carousel for "The SkyTrains" application ("The Application for all SkyTrains": 4 SkyTrain Routes, Check Fare Rates, Check Travel Time, Station Density) with App Store and Google Play badges; an intro band, "The MRT Wiwat Nakhon Line (Pink Line)", with Vision, Mission and Shared values text beside an illustration of the magenta-and-white monorail train; a photographic "Route and Fares" band with a magenta search card ("Station and Places", Origin and Destination selects, a dark Search button) and five white icon tiles (Route and Fares, Area Map, Time Table, Park & Ride, Lost Property); a "Promotions" banner (Pink Line Package, adult and student fares); "News & Activities" cards in a carousel; an "Articles" placeholder ("New articles are coming soon"); an "E-Library" band on pale pink with dark image tiles; a "Contact Us" block with social icons and a call-center line; and a pink footer with link columns, app download badges, and a magenta legal strip.

## Colors

- `primary` #c2007a: the brand magenta (`--color-pink`), the header bar, the search card and the footer strip (481 area units).
- `on-primary` #ffffff: white text on magenta and on dark photography (1078 characters).
- `pink-light` #efd8de (`--color-lightpink`): the utility bar, E-Library band and footer (571 area units); `blush` #ffeff3: the footer link band (229 units).
- `canvas` #ffffff: page and card ground (1468 units).
- `ink` #030303: body text (1631 characters); `ink-slate` #2e383c (`--color-dark-text`): headings, nav and the dark Search button (636 characters; 514 area units); `ink-4` #3f3f3f and `ink-5` #9f9f9f: secondary greys; `hairline` #f2f2f2: card and button border; `text-input-border` #e0e0e0.
- `dark-pink` #773043 (`--color-dark-pink`), plus the status and accent variables `--color-blue` #20498e, `--color-red` #c71517 and `--color-green` #76b72a, recorded as tokens.

The route-map variables define the line colors used on the system map: `--map-line-color-pk` #D76886, `--map-line-color-yl` #FAD53D, `--map-line-color-gr` #7AB420, `--map-line-color-gw` #00807D and `--map-line-color-gold` #a88b34, with a stroke width `--map-line-stroke-width` 9px and station dots `--map-station-basic-width` 10px and `--map-station-point-width` 19px. A translucent #2e383c6b overlay (576 units) covers the photographic band.

## Typography

One family: Sarabun, loaded at weights 200 to 700. By character count: 400 (2517), 200 (1048), 300 (568), 500 (72), 600 (37). The body copy leans on the light weights; headings are 400.

- `display`: 26px, weight 400 (section titles such as "Route and Fares", "Promotions"); line height is normal. The same 26px applies on mobile.
- `body`: 16px / 22px, weight 400 (2618 characters at 16px; tracking 0.118182px).
- `subheading`: 16px, weight 400.
- `button-secondary`: 14px, weight 400 ("Read more"), tracking 0.118182px.
- `nav`: 12px, weight 300 (utility bar).

Other measured sizes: 20px (308 characters, tracking 0.118px), 15px (186), 18px, 22px, 32px ("Contact Us") and 12px. No substitute was identified from a source.

## Layout

Bands stack full width with centred 4-column rows. Measured bands (desktop): 30px utility bar, 64px magenta header, 398px carousel, 588px intro, 451px photographic route band, 1258px promotions and news, 361px E-Library, 247px contact, then footer strips of 55px, 179px and 175px. The extractor counted up to 19 card columns on desktop and 17 on mobile, and 9 visible header links on desktop and 0 on mobile (no menu toggle was detected). Paddings: 20px (48 elements), 10px (47), 14px (28), 15px (24), 8px (21), 40px, 5px, 50px, 24px and 4px; gaps: 7px (28), 16px, 5px, 32px, 6px, 80px and 40px.

## Elevation & Depth

Cards use a soft shadow: `rgba(0, 0, 0, 0.12) 0px 2px 7px 0px` on 19 elements (news cards and icon tiles). The nav bar measures `rgba(0, 0, 0, 0.32) 0px 0px 3px 0px` and a footer-area element `rgba(0, 0, 0, 0.2) 0px -1px 16px 0px`. The CSS corpus also includes `0px 1px 12px rgba(0, 0, 0, 0.15)`. The photographic band and the translucent #2e383c6b overlay create the strongest depth.

## Shapes

Radii measured: 6px (38 elements), 10px (27), 8px (14), `8px 8px 0px 0px` (14, card tops over images), 26px (14, pill-shaped "Read more" buttons) and 4px (4). Tokens: xs 4px, sm 6px, md 8px, lg 10px, xl 26px. The CSS corpus also holds 100px (36) for round icon holders. Cards are white with a 10px radius and the search card is magenta with 24px padding.

## Components

- "Read more" button: transparent fill, #2e383c 14px text, 1px #f2f2f2 border, 26px radius, padding 10px 25px 10px 15px (room for an arrow glyph), 40px tall.
- Nav: magenta bar with white labels; utility-bar links 12px weight 300, underlined on hover.
- Search card: magenta, 10px radius, 24px padding, white inputs and a dark Search button; text input 37px tall, 8px 10px padding, 4px radius, 1px #e0e0e0 border.
- Icon tile: white card with a magenta rounded-square icon and a 12px label.
- News card: image with 8px top radii, date caption, title and a "Read more" pill.
- Footer: pink-light link band and a magenta legal strip with white text.

## Design System Architecture

No public design system or brand guideline was opened, and none was linked in the extraction. The shipped CSS exposes a small variable set: colors (`--color-pink`, `--color-lightpink`, `--color-dark-pink`, `--color-dark-text`, `--color-white-text`, `--color-blue`, `--color-red`, `--color-green`) and an interactive route-map set (`--map-line-color-*`, `--map-line-stroke-width`, `--map-station-*`, `--map-background-color` white). Type, spacing and radii are not exposed as variables, so those come from measured computed styles.

## Do's and Don'ts

- Do use magenta #c2007a for the header, search card and footer strip, with white text.
- Do use #efd8de and #ffeff3 for quiet secondary bands.
- Do set Sarabun in light weights with 0.118px tracking at 14px to 20px.
- Do use soft 2px 7px shadows on white cards and 26px pill buttons for "Read more".
- Don't reproduce the memorial overlay, the grayscale rendering or the cookie banner as brand UI.
- Don't use the route-map line colors as general UI colors.
- Don't add heavy borders; the card border is 1px #f2f2f2.

## Responsive Behavior

Measured at the 390px mobile pass: the h1 and h2 remain 26px, body is 16px / 22px, and the common sizes by character are 16px (2236), 14px (779), 20px (273), 15px (101), 26px (96). The extractor found 0 visible header links and no menu toggle on mobile (9 links on desktop) and 17 maximum card columns. How the nav collapses and how bands stack were not measured.

## Iteration Guide

1. Build a pale-pink utility bar, a magenta header, then white and pale-pink bands.
2. Set Sarabun 16px / 22px for body with 0.118px tracking and 26px for section titles.
3. Make the search card magenta with white inputs, and icon tiles white with a soft shadow.
4. Use 26px pill "Read more" buttons with a 1px #f2f2f2 border.
5. Re-run the gate after renames; do not change measured values.
