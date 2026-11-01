---
version: alpha
name: Made in Evolve
category: "Agencies & Studios"
description: "Made in Evolve ecommerce agency home page: near-black #111111 ground, white neue-haas-grotesk 500 type with a 166.4px uppercase H1 and negative tracking, a lettered case-study table in Bull 5 Typewriter, lime #c3ff00 accent and 7px to 14px radii."
colors:
  accent: "#c3ff00"
  soft-grey: "#535353"
  tech-blue: "#003bb0"
  mie-red: "#da4a4a"
  neon-purple: "#9747ff"
  canvas: "#111111"
  ink: "#ffffff"
  primary: "#ffffff"
  surface-2: "#f4f4f4"
  ink-3: "#131313"
  hairline: "#ffffff1a"
  footer-text: "#333333"
typography:
  caption:
    fontFamily: neue-haas-grotesk-text, sans-serif
    fontSize: 10.88px
    fontWeight: 500
    letterSpacing: "-0.4352px"
  display:
    fontFamily: neue-haas-grotesk-text, sans-serif
    fontSize: 166.4px
    fontWeight: 500
    lineHeight: 133.12px
    letterSpacing: "-6.656px"
    textTransform: uppercase
  display-mobile:
    fontFamily: neue-haas-grotesk-text, sans-serif
    fontSize: 54.6px
    fontWeight: 500
    lineHeight: 46.41px
    letterSpacing: "-2.184px"
    textTransform: uppercase
  heading:
    fontFamily: neue-haas-grotesk-text, sans-serif
    fontSize: 38.4px
    fontWeight: 500
    lineHeight: 42.24px
    letterSpacing: "-1.536px"
  body:
    fontFamily: neue-haas-grotesk-text, sans-serif
    fontSize: 64px
    fontWeight: 500
    lineHeight: 57.6px
    textTransform: uppercase
  link:
    fontFamily: Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 7px
  sm: 14px
spacing:
  s1: 1.4px
  s2: 1.58px
  s3: 2px
  s4: 2.4px
  s5: 3.5px
  s6: 4px
  s7: 5.6px
  s8: 7px
  s9: 8.96px
  s10: 10.5px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  footer:
    textColor: "{colors.footer-text}"
---

# Made in Evolve

## Overview
The measured site, https://madeinevolve.com/, is the home page of Made in Evolve, an Italian ecommerce agency (the page title is "eCommerce Innovation Agency · Shopify Plus | Made in Evolve"; the header lists "Modena, EST 2008©"). It is 7,724px tall at 1280px and entirely dark. The top of the page is a hero over a dimmed photograph of a person in a "Champion" jacket with faint vertical grid lines. A row of white pixel-square marks forms the logo at the top left; a short tagline reads "Ecommerce and brand systems. Driven by visions. Built with design and technology."; an email and location block gives "hello@madeinevolve.com / Modena, EST 2008©"; and at the right a language toggle ("IT") and a white "Menu" button. A thin rule carries three service labels (Brand Direction, Performance Marketing, Advanced Tech).

The H1 is the giant uppercase statement "ECOMMERCE INNOVATION AGENCY" in white, stacked on three lines. Below it is a table titled "( EVOLVE CASE STUDIES )" with columns Partner, Platform and Service and sixteen rows lettered (a.) to (p.): CHAMPION, AUTRY, BENETTON, DOCKERS, SOTF, AUSTRALIAN, UNIMATIC, MASON'S, ROBERTO COLLINA, 8PM, POLLINI, ENGINE, PIER, ROMBO GROUP, AURA and KUNZI, with platforms such as SHOPIFY PLUS, CUSTOM PLATFORM, SHOPIFY HEADLESS and SHOPIFY APP, and services such as Design UX/UI, Shopify Development, System Integration, CRO and SEO. Next comes a large manifesto paragraph ("We are an eCommerce agency. Not just execution, not isolated services...") and a "Our Services" row of four dark tiles (Brand Direction, Advanced Tech, Performance Marketing, Merchant of Record). The tone is confident, technical and catalogue-like.

## Colors
- **Canvas `#111111`** (`--mie-black`) is the near-black page ground (10,836 area).
- **Ink `#ffffff`** is white text on the dark ground (1,599 characters), also used as primary because the only action, the "Menu" button, is white.
- **`colors.surface-2` `#f4f4f4`** is a pale grey surface used for the light sections and the "Menu" button; **`colors.ink-3` `#131313`** is `--dark-grey` for the service tiles; **`colors.hairline` `#ffffff1a`** is the 10% white border for grid lines and table rules; **`colors.footer-text` `#333333`** is the footer text.
- **`colors.accent` `#c3ff00`** is the electric lime declared as `--accent` and `--_colors---electric-green` (22 uses in the corpus, 2 backgrounds measured); **`colors.soft-grey` `#535353`**, **`colors.tech-blue` `#003bb0`**, **`colors.mie-red` `#da4a4a`** and **`colors.neon-purple` `#9747ff`** are named brand colours in the root variables. On the measured first screens the lime, blue, red and purple do not appear as large fills; the page is white-on-black with the lime reserved for details.

Translucent whites (#ffffff12, #ffffff26, #ffffff1f) appear as overlay and tile fills. Do not use the lime as a text colour on the light grey.

## Typography
The page runs on **neue-haas-grotesk-text** (Adobe Fonts, weights 400, 500 and 700 loaded) for nearly all characters, with **Bull 5 Typewriter** (weight 400) for the monospaced case-study table (19 characters). Everything meaningful is weight 500. `typography.display` is 166.4px / 500 / 133.12px / letter-spacing -6.656px, uppercase (the H1); `typography.display-mobile` is 54.6px / 500 / 46.41px / -2.184px uppercase; `typography.heading` is 38.4px / 500 / 42.24px / -1.536px; `typography.body` is 64px / 500 / 57.6px uppercase (the large measured paragraph size); `typography.caption` is 10.88px / 500 with -0.4352px letter spacing (1,253 characters: the table's service column, labels and tagline); `typography.link` is Arial 14px / 400 / 20px.

Letter spacing is consistently negative at every measured size, about -4% of the font size (for example 11.9px with -0.476px and 12.8px with -0.512px), which gives the tight grotesque look. The extremes are huge (166.4px) and tiny (10.88px), with little in between: the system alternates monumental statements and fine print. Neue Haas Grotesk is licensed; Helvetica Neue is the nearest substitute.

## Layout
A full-width, grid-lined composition. The hero uses a visible vertical hairline grid behind the huge H1. The case-study table is a four-column row layout with the partner and platform at the left, a lettered index in the centre and the services right-aligned. The manifesto paragraph spans the width with a first-line indent. The services tiles are fixed-width dark squares laid out in a row. Spacing in the root variables is fluid: `--_spacing---padding-top-base` is clamp(.75rem, 1.5vw, 1.25rem), medium is clamp(3rem, 6vw, 6rem), large clamp(4rem, 8vw, 8rem) and huge clamp(6rem, 10vw, 10rem). Measured paddings include 1.4px (64 uses), 8.96px and 7px. Density is high in the table and very low in the hero.

## Elevation & Depth
No elevation system exists; the only shadow is a hairline `rgba(255, 255, 255, 0.1) 0px 0px 0px 1px` ring. Depth comes from the dimmed photograph behind the H1, translucent white tile fills over the dark ground and 1px 10% white rules.

## Shapes
Shapes are mostly square. `rounded.xs` is 7px (17 uses) and `rounded.sm` is 14px (4 uses); the corpus also has 1600px (5 uses), 12px, 19px, 3px and 2px radii. The root variable `--_spacing---nav__trigger-radius` is .7em, used for the Menu trigger. The logo is a scatter of small white squares and the tiles are sharp rectangles.

## Components
- **Menu trigger**: a white `#f4f4f4`-family rectangular button with the label "Menu", top right, with a small "IT" language switch beside it.
- **Service labels**: three 10.88px captions on a hairline rule (Brand Direction, Performance Marketing, Advanced Tech).
- **Case-study table**: a header row (Partner, Platform, Service) in grey, then monospaced uppercase partner and platform names in Bull 5 Typewriter, a bracketed letter and right-aligned service lists in the sans.
- **Manifesto paragraph**: 64px uppercase-free sentence-case text (the measured 64px body role) in white.
- **Service tile**: `#131313`-family dark card with a short label at its top left.
- **Link** (`components.link`): Arial 14px white; **nav** is a transparent bar over the hero; **footer** text is `#333333`.

## Design System Architecture
No public design-system documentation or brand-guideline site was located from the pages opened; the only page read was the home page, https://madeinevolve.com/, measured by the extractor. The page is a Webflow build (a `webflow-icons` font is loaded) with a variable layer on `:root`: colours with the prefix `--_colors---` (`white`, `neon-purple`, `tech-blue`, `mie-red`, `electric-green`), unprefixed `--accent`, `--dark-grey`, `--soft-grey` and `--mie-black`, spacing tokens `--_spacing---padding-*` in base, medium, large and huge sizes with top, bottom, left and right variants, and `--_svg-lines---line-N-offset` variables that animate the grid lines of the hero.

## Do's and Don'ts
- Do set the main statement in uppercase neue-haas-grotesk 500 at 166.4px with -6.656px tracking.
- Do use `#111111` ground, white text and 10% white hairlines.
- Do list work as a lettered table with monospaced partner names.
- Do use the lime `#c3ff00` sparingly as an accent.
- Don't use bold weights; the page is weight 500 throughout.
- Don't add shadows; use rules and translucent fills.
- Don't round tiles heavily; corners are square or 7px to 14px.
- Don't set body paragraphs in the display size on light backgrounds.

## Responsive Behavior
The 390px mobile pass measured the H1 at 54.6px in neue-haas-grotesk (`typography.display-mobile`), 10.5px text (1,043 characters), 12.25px, 25.2px, 14px, 12.6px and 17.5px. Navigation, table layout and breakpoints were not measured on mobile, so none are described.

## Iteration Guide
1. Start from `colors.canvas` and `colors.ink`; add `colors.accent` only for small details.
2. Use `typography.display` for one monumental statement per page, `typography.caption` for table text.
3. Build lists as lettered, hairline-ruled rows.
4. Apply negative letter spacing at every size.
5. Verify with `node web/scripts/verify-designs.mjs --slug=evolve-2`.
6. Measure an inner case-study page with the extractor before adding tokens.
7. Copy voice: short claims with service nouns ("Brand Direction", "Performance Marketing", "Merchant of Record") and a single paragraph that explains the connected approach.
