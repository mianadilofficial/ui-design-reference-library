---
version: alpha
name: Airports of Thailand PLC (AOT)
category: "Thai Brands"
description: "Airports of Thailand PLC (AOT) English home: white canvas, navy #032d5d headings, royal-blue #2f4791 menu band and Search button, deep navy #182852 footer, Kanit and Noto Sans Thai type, navy news cards with 25px radius."
colors:
  canvas: "#ffffff"
  page-largest: "#182852"
  ink: "#032d5d"
  primary: "#2f4791"
  on-primary: "#ffffff"
  on-dark: "#f8fbff"
  sky-light: "#a9d8f8"
  sky-link: "#b4d6fa"
  ink-black: "#000000"
  text-input-text: "#555555"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 20px
  display-mobile:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 22px
    fontWeight: 600
    lineHeight: 22px
  heading:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 15px
    fontWeight: 600
    lineHeight: 18px
  subheading:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: Kanit, sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 23.925px
  button:
    fontFamily: Poppins, Kanit, system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  nav:
    fontFamily: Kanit, sans-serif
    fontSize: 14.5px
    fontWeight: 400
    lineHeight: 23.925px
  input:
    fontFamily: Poppins, Kanit, system-ui, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 15px
rounded:
  xs: 3px
  sm: 25px
  md: 100px
  none: 0px
  pill: 9999px
spacing:
  s1: 5px
  s2: 5.6px
  s3: 6px
  s4: 8px
  s5: 9px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 16.6667px
    height: 50px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 0px 16.6667px
    height: 50px
  card:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-dark}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 0px 10px 0px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

The measured page is the English home of Airports of Thailand PLC (airportthai.co.th/en/homeen/), 1280px wide and 2007px tall, with the document language en-GB. The header is a thin deep-navy utility strip (Sitemap, Web Accessibility, Contact Us and a Thai/English language switch), then a white row with the AOT logo, the company name "Airports of Thailand PLC" with its Thai name beside it, and a search field with a royal-blue "Search" button. Underneath is a full-width royal-blue menu band with two rows of items and dropdown carets (Our Airports, About AOT, Good Corporate Governance, Transparency (ITA), Business & Sustainability, News & Activities, Services & Participation, Investor Relations). A wide hero photograph of Suvarnabhumi Airport at dusk follows, then a row of six rounded-square airport thumbnails with underlined three-letter codes (BKK, DMK, HKT, CNX, CEI, HDY) and airport names, a "NEWS UPDATES" block of navy cards with underlined titles and monospaced dates, and a deep-navy footer with four columns (company description, contact, quick links, website information) and a copyright line.

The page is a government-company information portal: dense, blue throughout, underlined links, and utility-first. Two overlays are present in the capture, a floating "Light" theme-switch button at the left and an accessibility icon at the top right; they are third-party widgets and are not described as brand UI in this file.

## Colors

`canvas` is {colors.canvas} (#ffffff). The two navies carry the page: `page-largest` {colors.page-largest} (#182852) is the footer and utility strip and has the largest background area (weight 783), and `ink` {colors.ink} (#032d5d) is both the heading text color and the background of the news cards. `primary` {colors.primary} (#2f4791) is the royal blue of the menu band and the Search button; `on-primary` is white. `on-dark` (#f8fbff) is the near-white text on navy, `sky-light` (#a9d8f8) is used for dates and copyright text on navy, and `sky-link` (#b4d6fa) for light link text. `ink-black` is #000000. The extractor also recorded #666e8b (36 characters of footer-adjacent text), #cc3366 (15 characters), and #216073, #232323 and #f1f2f3 as small-area backgrounds; they are measured but not promoted to tokens. The stylesheet carries a WordPress design-system variable set (`--wpds-color-*`, for example #e6eaf4 for a weak brand active background and #470000 for an error foreground) and a gradient variable `--eb-gradient-primary-color`; these are WordPress/plugin defaults and are not documented as AOT brand colors.

## Typography

Fonts in the measured page: Kanit (loaded at 300, 400, 500), Poppins (400), IBM Plex Mono (400, 500), and Noto Sans Thai, with Montserrat and Font Awesome 5 appearing in the CSS corpus. By characters Kanit carries 789, Noto Sans Thai 565, the system stack 78 and IBM Plex Mono 76.

- `display` (the h1, "BKK"): Noto Sans Thai 600, 20px, 20px line height.
- `heading` (h2, airport names): Noto Sans Thai 600, 15px, 18px line height.
- `subheading`: Noto Sans Thai 500, 20px, 24px line height.
- `body`: Kanit 300, 14px, 23.925px line height.
- `nav`: Kanit 400, 14.5px, 23.925px line height.
- `button`: Poppins 400, 16px, 16px line height.
- `input`: Poppins 400, 15px, 15px line height.

IBM Plex Mono is used for the small spaced labels ("CONTACT AOT", "QUICK LINKS", "WEBSITE INFORMATION") and for the card dates. The type scale is small: the "display" token is only 20px, since the page's largest text is the airport codes and the company name rather than a marketing headline. All fonts are web fonts loaded by the site.

## Layout

A full-width 1280px page with a roughly 1200px content width (the copyright line block measures 1200px wide). The menu band spans the container, the hero is a single wide photograph, and the airport row is six equal columns. News cards sit in a masonry-like arrangement of varying heights (three cards in the capture, of different lengths). Spacing values measured are 5, 5.6, 6, 8, 9, 10, 11, 12, 14 and 16px, a small-step set. The Search button and text input are 50px tall with 0px 16.6667px padding.

## Elevation & Depth

Shadows exist but are light: `0 0 10px rgb(0 0 0 / .1)` (14 uses), `0 .2rem .2rem rgba(0,0,0,.2)` (15), `0 2px 20px 0 rgb(0 0 0 / .07)` (12) and a stronger `rgba(50,50,93,.25) 0 6px 12px -2px, rgba(0,0,0,.3) 0 3px 7px -3px` (8); 50 declarations use no shadow. The navy news cards carry `rgba(0, 0, 0, 0.15) 0px 0px 10px 0px`. The page otherwise separates areas with solid color blocks of navy, royal blue and white.

## Shapes

Measured radii in the CSS are 4px (66 uses), 2px (62), 5px (57), 10px (42), 25px (37), 3px (30), 20px (25) and larger. The Search button is square (0px) and the text input uses {rounded.xs} (3px); the news cards use {rounded.sm} (25px); airport thumbnails are rounded squares in the capture. The menu band, footer and header are square-cornered.

## Components

- `button-primary`: {colors.primary} fill, white text, Poppins 400 at 16px, square corners, 50px tall, padding 0px 16.6667px ("Search").
- `text-input`: Poppins 15px, color #555555, 3px radius, 50px tall, same horizontal padding.
- `card` (news): {colors.ink} fill, {colors.on-dark} text, 25px radius, shadow `rgba(0, 0, 0, 0.15) 0px 0px 10px 0px`, an underlined title, a hairline rule and a mono date in {colors.sky-light}.
- `nav-link`: white Kanit 14.5px on the {colors.primary} band, each item with a dropdown caret.
- `footer`: {colors.page-largest} with white text and a 1px #ffffff38 rule above the copyright line.

The generated secondary button (a "Light" theme switch with #eeeeee fill, #dddddd border and a heavy shadow) was removed because it belongs to a third-party widget.

## Design System Architecture

No AOT design-system or brand-guidelines page is linked from the home page that was opened, so the system is de facto. The site is a WordPress build: its root declares WordPress Design System tokens (`--wpds-*`) and `--wp--preset--*` variables (for example `--wp--preset--font-size--large: 36px`), plus plugin icon fonts (`trx_addons_icons`, Font Awesome 5). The AOT-specific look is expressed by the navy and royal-blue colors listed above applied through theme CSS. Source: the page at [airportthai.co.th](https://www.airportthai.co.th/en/homeen/).

## Do's and Don'ts

- Do use {colors.primary} for the main menu band and the single primary action, and {colors.page-largest} for the footer and utility strip.
- Do set small spaced mono labels (IBM Plex Mono) above link columns.
- Do keep body copy in Kanit 300 at 14px with a 23.925px line height.
- Do round news cards at 25px and keep action buttons square.
- Don't use the WordPress default tokens as brand colors.
- Don't document the theme-toggle or accessibility widgets as components.
- Don't promote the display size above what the page measures; the h1 is 20px.

## Responsive Behavior

Measured at 390px: the h1 is 22px with 22px line height, the h2 is 15px with 24px line height and 0.2px letter spacing, and the "Search" button keeps the same fill, 16px type and square corners. The extractor recorded no navigation-toggle or column-count data for mobile, so menu behavior and the six-column airport row at that width are not measured.

## Iteration Guide

1. Use white ground, #032d5d for headings, #2f4791 for the menu band and the Search button, #182852 for the footer.
2. Set body in Kanit 300 14px, headings in Noto Sans Thai 600, labels in IBM Plex Mono.
3. News cards: #032d5d, 25px radius, light shadow, underlined title.
4. Keep buttons square, 50px tall.
5. Run `node web/scripts/verify-designs.mjs --slug=aot` after edits.
