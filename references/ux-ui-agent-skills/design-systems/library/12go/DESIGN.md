---
version: alpha
name: 12Go
category: "Thai Brands"
description: "12Go (12go.asia) travel-booking site measured in system-ui sans: 24px/700 white hero line, 22px/700 section heads, 16px/400 body, a #4db84d green Find Tickets button with 4px radius and 52px height on a #f4f4f4 canvas with white cards."
colors:
  canvas: "#f4f4f4"
  page-largest: "#ffffff"
  ink: "#4b4b4b"
  primary: "#4db84d"
  on-primary: "#edf8ed"
  primary-hover: "#3a8a3a"
  surface-footer: "#404040"
  ink-muted-footer: "#a0a0a0"
  hairline: "#eaeaea"
  badge-danger: "#b84d4d"
  attention: "#ff9900"
  highlight: "#0da1e0"
  promotion: "#be4cbe"
typography:
  display:
    fontFamily: system, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 33.6px
  heading:
    fontFamily: system, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 22px
    fontWeight: 700
    lineHeight: 30.8px
  body-base:
    fontFamily: system, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.8571px
  body:
    fontFamily: system, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 17.1429px
  button:
    fontFamily: system, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.6667px
  nav:
    fontFamily: system, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 0px
rounded:
  xs: 4px
  sm: 6px
  md: 10px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 14px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 32px
  s9: 52px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 14px 8px
    height: 52px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.page-largest}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.page-largest}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(0, 0, 0, 0.04) 0px 5px 8px 0px, rgba(75, 75, 75, 0.08) 0px 3px 6px 0px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-muted-footer}"
---

## Overview

12Go is a multi-modal transport booking platform. Its own About page describes it as selling tickets for trains, buses, ferries, vans, taxis, flights, rail passes and tours, with its deepest coverage in Southeast Asia, founded in Singapore in 2012 and incorporated as 12Go Asia Pte., Ltd. The measured English home page (12go.asia/en, 1280px wide, 1,775 visible elements, 9,877px tall) is a long, dense, utilitarian marketplace page rather than an editorial brand page.

The capture shows a photographic header with a dark-to-transparent gradient. Over it sit the logo, a modal nav (Trains, Buses, Flights, Ferries), Support, language and currency (English, THB), the white bold line "Trains, Buses, Ferries, Transfers, Flights – Across Asia & Beyond", and a single-row search form with a green "Find Tickets" button. Below the header the page becomes a pale grey canvas with white route cards that carry large destination photographs, a "Get our free app" banner (the page states 2M+ downloads and a 4.7 rating, with no source), rail-pass cards with red "New" badges, a travel-guide photo grid, and long white panels of plain-text route links grouped by country ("Popular Routes in Thailand", "Popular Routes in Malaysia"). The footer is dark grey.

The voice is functional: place names, prices ("From THB 1,725") and verbs ("Find Tickets"). Green is the only strong interface colour; photography supplies the rest of the colour.

## Colors

All values below were measured on the live page or read from its root CSS custom properties.

- **Canvas `#f4f4f4`**: body background (`--body-bg`, also `--brand-gray-lighter`).
- **Cards and panels `#ffffff`** (`page-largest`): the largest-area background (6,632 area weight against 2,242 for the footer grey).
- **Ink `#4b4b4b`** (`--brand-black`): the most-read text colour (9,774 characters).
- **Primary `#4db84d`** (`--brand-primary`): the Find Tickets fill, the section sub-headings such as "Popular Routes in Thailand", and nav accents.
- **On-primary `#edf8ed`** (`--brand-primary-faded`): the button label.
- **Primary hover `#3a8a3a`** (`--brand-primary-darker`): recorded in the hover measurement.
- **Footer surface `#404040`** (`--brand-black-darker`) with footer text `#a0a0a0` (`--brand-gray-darker`).
- **Hairline `#eaeaea`** (`--brand-gray`): the measured border colour.
- **Badge red `#b84d4d`** (`--brand-danger`): appears as a measured background (area weight 4) and matches the "New" badges in the capture.
- **Status accents from the root variables:** attention `#ff9900`, highlight `#0da1e0`, promotion `#be4cbe`. These are declared in the site's variables; their on-screen use on the home page was not tied to elements.

The root also declares darker, lighter and faded steps for primary, info, warning, danger, attention, promotion and urgent colours (for example `--brand-primary-lighter #9dce9d`, `--brand-navy #1c2b39`, `--brand-purple #8c52ff`). They are not tokenised here because the measured page does not show them.

## Typography

12Go uses the operating-system UI font, not a webfont: the declared stack is `system, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif` and no font files were loaded (the loaded-font list is empty). All 13,128 measured characters belong to that family.

- **Display 24px / 700 / 33.6px line height**: the h1 over the header photograph, in white.
- **Heading 22px / 700 / 30.8px**: h2 "Where to Go" in `#4b4b4b`, and h3 "Popular Routes in Thailand" in `#4db84d`.
- **Body 16px / 400 / 22.8571px**: the dominant size (9,758 characters), used for card text, nav and route links.
- **Small 14px (2,430 characters)** for the button and footer text, and **12px / 400 / 17.1429px** for fine print such as "Scan to download the app".
- Other measured sizes: 20px (56 characters) and 36px (16 characters). Weights seen: 400, 700, 500 and 800.

Letter-spacing was not recorded. Because the family is the platform font, rendered letterforms differ between operating systems; no substitute is needed.

## Layout

The page is a one-column flow of full-width bands. The h1 and h2 elements measure 1,140px wide inside the 1,280px viewport, giving a centred container with a 70px margin on each side. Route cards sit four across on the first band (273px wide, 337px tall in the extraction), rail-pass cards three across, travel-guide tiles in two rows of four, and the route-link panels in four text columns. The header search bar is a single row of fields ending in the button; the header height variable is `--header-height: 52px`.

Spacing is built on small steps: gaps of 8px (40 uses), 4px (16), 16px (4), 32px (2) and 12px (2); paddings of 12px (76 uses), 8px, 15px, 16px and 4px. Those are the spacing tokens s1 to s9 (4, 8, 12, 14, 15, 16, 20, 32, 52). The page is dense: long lists of route text sit between photographic bands, and the 9,877px scroll height is the result of that stacking of lists.

## Elevation & Depth

Depth is shallow and soft. Cards use `rgba(0, 0, 0, 0.04) 0px 5px 8px 0px, rgba(75, 75, 75, 0.08) 0px 3px 6px 0px` (14 uses; the root variable `--box-shadow-base` is `0px 5px 8px rgba(0, 0, 0, 0.04)`). A heavier variant, `--box-shadow-2`, adds `0px 1px 3px rgba(75, 75, 75, 0.2)` and `0px 3px 6px 0px rgba(75, 75, 75, 0.2)` and is used once on the page. The nav sits over the photo with a `linear-gradient(180deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 100%)` scrim (`--header-background-alpha`) so that white text stays readable. That scrim is a legibility device, not a brand colour. White panels on `#f4f4f4` are the main separation device.

## Shapes

Radii are small and square-leaning. `4px` is the base (`--border-radius-base: 4px`; 40 measured uses) for buttons and cards, with `4px 4px 0px 0px` on card tops (14 uses) and `0px 0px 4px 4px` on card bottoms (7). `6px` appears 8 times, `10px` once, and `50%` once for a circular element. Photographs fill the top of cards with only the upper corners rounded. The primary button is 52px high and 96px wide on desktop, with `14px 8px` padding.

## Components

- **Primary button "Find Tickets"**: fill `#4db84d`, label `#edf8ed`, 14px / 400, 4px radius, 52px height, hover fill `#3a8a3a`.
- **Header and nav**: text in white over the photo; the nav links Trains, Buses, Flights, Ferries, then Support, English and a currency selector; the logo is in green and white (`#4db84d`, `#ffffff` child colours).
- **Route card**: a white card with a photograph, the country label in white on the image, a bold route line (Bangkok → Pattaya) and "From THB" price in `#4b4b4b`; 4px radius and the soft shadow above.
- **Badge**: small red "New" label with a `#b84d4d` fill on rail-pass photographs.
- **Route-link panel**: white panel, a green 22px h3 with a green underline rule, and four columns of 16px links.
- **App banner**: photographic band with a QR code, store badges and a centred headline.
- **Footer**: `#404040` background, `#a0a0a0` text, 14px; it lists About us, Terms of Use, Privacy Policy, Support, Offices, Careers and partner links.

## Design System Architecture

No public design system or brand-guidelines page was found: the About page (https://12go.asia/en/about) and the footer of https://12go.asia/en do not link to one. The de-facto system is the site's CSS custom properties: 203 root variables, among them `--brand-primary #4DB84D`, `--brand-black #4b4b4b`, `--brand-gray #eaeaea`, `--body-bg #f4f4f4`, `--font-family-base`, `--border-radius-base 4px`, button variables (`--btn-primary-color`, `--btn-primary-bg-darker`), alert and state variables, and Font Awesome 6 font variables. Colour families follow a consistent naming ladder: `-black`, `-darker`, base, `-lighter`, `-faded` for each of primary, info, warning, danger, attention, promotion and urgent. Spacing and radius appear as raw values rather than as named variables.

## Do's and Don'ts

- Do use `#4db84d` for the single main action and for section sub-headings, with `#edf8ed` text on the button.
- Do keep the canvas `#f4f4f4` with white `#ffffff` cards.
- Do use the system font stack at 16px / 400 for body and 700 for headings.
- Do keep corners at 4px and shadows soft (`0px 5px 8px` at 4% black).
- Do let photography carry colour, with prices in plain `#4b4b4b`.
- Don't add a second hue to the main action; red, orange, blue and purple are status colours.
- Don't use the header gradient scrim as a brand colour.
- Don't use heavy shadows; one heavier variant exists and is used once.

## Responsive Behavior

The mobile pass (390px viewport width) measured: the h1 stays 24px / 700 and the h2 22px / 700; the primary button is 14px / 400 with `14px 8px` padding, 358px wide and 49px high; the nav bar is 390px wide and 40px high (against 57px on desktop). Character-weighted sizes on mobile are 16px, 14px, 22px, 12px, 24px and 20px, so the type scale is unchanged. The h1 box is 374px wide and 67px high on mobile (34px on desktop), which shows the headline wraps onto two lines. The column structure of cards at 390px was not measured.

## Iteration Guide

1. Start with canvas `#f4f4f4`, white panels, ink `#4b4b4b`.
2. Set one green `#4db84d` button, 52px high, 4px radius, with hover `#3a8a3a`.
3. Use the system font stack; 24px / 700 hero, 22px / 700 headings, 16px / 400 body.
4. Add status colours only for status: `#b84d4d` badges, `#ff9900` attention.
5. Check spacing against the 4, 8, 12, 16, 32 steps.
6. Run `node web/scripts/verify-designs.mjs --slug=12go` after each edit.
