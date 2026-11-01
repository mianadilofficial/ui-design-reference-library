---
version: alpha
name: depa (Digital Economy Promotion Agency)
category: "Thai Brands"
description: "depa Thailand's English home page (depa.or.th/en/home): a bright yellow #fff200 and white portal with sukhumwit type in very light weights (100 to 200) at 16px, navy #173b6b section titles, slate #586667 text, a #333333 footer, 4px-radius yellow buttons, 45px-radius tiles and soft 18px-blur card shadows."
colors:
  canvas: "#ffffff"
  ink: "#586667"
  ink-muted: "#9b9b9b"
  ink-navy: "#173b6b"
  ink-black: "#000000"
  primary: "#fff200"
  primary-hover: "#fff76b"
  on-primary: "#173b6b"
  surface-3: "#f7f7f7"
  footer-bg: "#333333"
  text-input-bg: "#d8d8d8"
  text-input-text: "#4a4a4a"
  blue: "#0090c0"
typography:
  display:
    fontFamily: sukhumwit
    fontSize: 50px
    fontWeight: 400
    lineHeight: 50px
  body:
    fontFamily: sukhumwit
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: sukhumwit
    fontSize: 13px
    fontWeight: 200
    lineHeight: 32px
  nav:
    fontFamily: sukhumwit
    fontSize: 16px
    fontWeight: 400
    lineHeight: 48px
  button-secondary:
    fontFamily: opensan
    fontSize: 14px
    fontWeight: 100
    lineHeight: 22.4px
rounded:
  xs: 3px
  sm: 4px
  md: 20px
  lg: 45px
  xl: 50px
  2xl: 100px
  pill: 9999px
spacing:
  s1: 5px
  s2: 6px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 18px
  s7: 22px
  s8: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 15px
    height: 32px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink-muted}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 6px 12px
    height: 34px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
  nav-link:
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.button-secondary}"
    height: 35px
    boxShadow: rgba(0, 0, 0, 0.075) 0px 1px 1px 0px inset
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-navy}"
    rounded: "{rounded.xs}"
    padding: 0px 0px 15px
    boxShadow: rgba(0, 0, 0, 0.12) 0px 5px 18px 0px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
---

## Overview

This file documents the English home page of the Digital Economy Promotion Agency (depa), a Thai government agency, at https://www.depa.or.th/en, which resolves to https://www.depa.or.th/en/home (page title "depa Thailand - Home"). The nav lists News and Activities, depa Introduction, Policy and Promotion Strategy, Products & Services, depa KM and Membership and Enquiry, with an EN language switch, a search icon and a yellow "E-Service" button. The opened menu text names programmes such as Digital Startup Promotion, Digital Manpower Development Promotion, Digital Community Development Promotion, Smart City Promotion and Digital Park Thailand.

The page is a rich portal. A full-width photographic carousel (a Bangkok skyline at dusk with the title "Smart City Handbook") leads into a 2-by-3 grid of large tiles: a bright yellow tile with Thai script ("บัญชีบริการดิจิทัล"), a dark "DIGITAL SKILL ROADMAP" illustration, "THAILAND DIGITAL VALLEY / IoT & DIGITAL INNOVATION INSTITUTE", "DIGITAL STARTUP INSTITUTE", "Digitized Community" and "SMART CITY ไทยแลนด์" (Thailand). A full-width yellow "Load More" bar follows, then "News and Activities" with white cards (Activity News, Announcement News, with dates and view counts) and circular yellow arrow buttons, and a dark footer with a newsletter form and link columns (QUICK LINKS, OUR SUPPORT, OUR SERVICES).

Imagery is photographic and duotone-treated: tile photographs are overlaid in a navy tint with white logos on top. The voice is informational and bilingual, with Thai and English headings mixed.

Role notes. The extractor's primary CTA was the yellow "E-Service" button, whose computed text colour `#337ab7` is Bootstrap's default link blue rather than an authored brand colour, so it is overridden in SOURCES.json and the button's text colour is not tokenised. A black mourning ribbon at the top-right corner, the cookie banner (hidden by the extractor) and the floating chat button are not documented as brand UI.

## Colors

Measured on the desktop pass: backgrounds by area `#ffffff` (3452), `#fff200` (1935), `#f7f7f7` (799), `#333333` (591), `#e0dfd659` (38), `#0090c0` (13), `#d8d8d8` (9), `#9b9b9b` (3). Text by characters: `#586667` (2212), `#9b9b9b` (992), `#173b6b` (394), `#000000` (113), `#fff200` (87), `#ffffff` (45), `#337ab7` (9).

- `primary` `#fff200`: depa yellow, used on the E-Service button, the Load More bar, the circular arrow buttons and the logo accent; hover on the E-Service button measures `#fff76b`.
- `canvas` `#ffffff` and `surface-3` `#f7f7f7`: page and band backgrounds.
- `ink` `#586667`: the main text colour; `ink-muted` `#9b9b9b`: dates, view counts and footer text; `ink-navy` `#173b6b`: titles and card text; `ink-black` `#000000`: nav text.
- `footer-bg` `#333333` with yellow `#fff200` headings (the footer's child colours measure `#fff200` and `#0c2f53`).
- `text-input-bg` `#d8d8d8` and `text-input-text` `#4a4a4a`: the newsletter email field; the SUBMIT button is `#9b9b9b` with white text.
- `on-primary` `#173b6b`: the navy text colour measured in the news cards, chosen as the text colour to pair with the yellow; the E-Service label itself was not isolated.
- `blue` `#0090c0`: a small accent area (13).

The bootstrap link blue `#337ab7` is a framework default and not a brand colour. A consent widget declares its own `--primary-color` `#2ac3ed` and `--text-link-color` `#3968f0` in `:root`; they belong to that third-party banner and are not tokens.

## Typography

The site font is `sukhumwit` (a Thai and Latin family loaded at weights 100, 200, 400 and 500) with `opensan` (100) for the newsletter field and FontAwesome icons. Characters: sukhumwit 3847, opensan 6. Weights by characters: 100 (3063), 200 (445), 600 (325), 400 (20), so the page reads in very light strokes.

Measured roles: the carousel title "Smart City Handbook" is 50px/400 on a 50px line in white, on a translucent `#e0dfd659` strip; nav links are 16px/400 on a 48px line (the nav strip text is 12px/100); body and link text 16px/400 on 25.6px; the E-Service button is 13px/200 on 32px; the SUBMIT button is opensan 14px/100 on 22.4px. Sizes by characters: 16px (2652), 14px (699), 17px (279), 12px (116), 13px (50), 50px (19), 24px (19), 23px (19). The weight and size of the news-section title were not isolated.

sukhumwit is served by the site; no fallback stack was declared in the measured computed values, so no substitute is documented. Letter-spacing is `normal`.

## Layout

A white header strip with the depa logo at left and the six-item nav, language switch, search icon and yellow "E-Service" button at right; the measured nav strip is 50px tall and 1280px wide. Below, the hero carousel runs full width with a dot pager. The tile grid is two columns of equal tiles, each filling half the width, in three rows. A full-width yellow Load More bar, a News and Activities section with a horizontal card carousel (round yellow chevron buttons at the edges and dots below), and a dark footer 461px tall.

Measured paddings: 15px (78 uses), 18px (23), 22px (23), 5px (9), 10px, 30px, 6px, 12px. The page is 2753px tall at 1280px width in the first extraction. The body element carries `padding: 50px 0px 0px` to clear the fixed header.

## Elevation & Depth

Soft shadows on cards: `rgba(0, 0, 0, 0.12) 0px 5px 18px 0px` (23 uses). A raised variant `rgba(0, 0, 0, 0.14) 0px 0px 4px 0px, rgba(0, 0, 0, 0.28) 0px 4px 8px 0px` and a `rgba(0, 0, 0, 0.2) 1px 1px 3px 1px` appear once each; the form field has an inset `rgba(0, 0, 0, 0.075) 0px 1px 1px 0px inset`. Tiles gain depth from navy-tinted photography beneath white or yellow graphics.

## Shapes

Mixed radii: `3px` (24 uses, cards and small buttons), `45px` (23, the tile or circular controls), `20px` (4), `50%` (3), `50px` (2), `100px` (1) and `4px` (1, the E-Service button). The yellow arrow buttons are circles; photographs inside cards are square at the top corners.

## Components

E-Service button. Yellow `#fff200` fill, 13px/200 label, 4px radius, `0 15px` padding, 32px tall and 81px wide; hover fill `#fff76b`.

Circular arrow button. A round yellow button with a black chevron, used at the carousel edges and on each news card.

Load More bar. A full-width yellow strip with a centred "Load More" label.

News card. White card with a 3px radius, `0 0 15px` padding and the 18px-blur shadow; a photograph, a category line (Activity News, Announcement News) in navy, a short Thai or English headline in grey, and a date and view count with calendar and eye icons in `#9b9b9b`.

Tiles. Half-width tiles with navy-tinted photographs and white logos or typographic graphics; one tile is solid yellow.

Newsletter form. Heading "SIGN UP FOR OUR NEWSLETTER" in yellow, a `#d8d8d8` email field (35px tall) with "* Email" placeholder and a `#9b9b9b` SUBMIT button (34px tall, 3px radius, `6px 12px` padding).

Footer. `#333333` with yellow column headings and `#9b9b9b` links.

## Design System Architecture

No public design system or brand guideline was found: the opened home page and its menu text list agency, programme and policy pages ("Logo" appears under the News and Activities menu) but no design-system or GitHub link. The site is a custom Bootstrap-based portal (the `#337ab7` link colour and 4px button radius are Bootstrap 3 defaults). A third-party consent banner contributes `--of-*`, `--perf-*`, `--primary-color` and `--background-color-alt` `#f7f9fd` variables to `:root`; the site's own styling uses literal values. Source: https://www.depa.or.th/en/home as measured and opened.

## Do's and Don'ts

Do use depa yellow `#fff200` for buttons, bars and highlight tiles, with navy `#173b6b` titles and slate `#586667` text on white.

Do keep body text light (weights 100 to 200) in sukhumwit at 16px.

Do give cards a 3px radius with the soft `0 5px 18px` 12 percent shadow.

Do overlay logos on navy-tinted photography in the tile grid.

Don't use Bootstrap's `#337ab7` as a brand colour.

Don't document the mourning ribbon, cookie banner or chat button as brand UI.

Don't round cards beyond the measured values.

Don't mix in the consent widget's blues.

## Responsive Behavior

Measured at 390px: the h1 stays 50px/50px (box 234px wide); the SUBMIT button is 14px/100 on 22.4px, `#9b9b9b`, 3px radius, 34px tall with `6px 12px` padding; the nav strip is 16px/400 on 48px, 50px tall, on white. Mobile sizes by characters: 16px (2570), 17px (255), 14px (96), 13px (41), 50px (19), 24px (19), 23px (19). Layout reflow of the tile grid and carousel was not measured.

## Iteration Guide

1. White and `#f7f7f7` pages, slate `#586667` text, navy `#173b6b` titles, `#333333` footer.
2. Yellow `#fff200` for every action and highlight; hover `#fff76b`.
3. sukhumwit 16px with light weights; 50px for hero titles over photography.
4. Cards: 3px radius, `0 5px 18px` shadow at 12 percent black.
5. Re-measure the logo and tile typography before documenting them further.
