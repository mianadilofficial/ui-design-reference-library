---
version: alpha
name: Supercell
category: "Gaming"
description: "Supercell's corporate site supercell.com/en measured live — a white #ffffff news wall framed by a black #000000 header and footer, accessible blue #0f62d6 buttons (120px pill, 8px rectangle) darkening to #0a4fb0, pink #fb4a9d category tags, and the custom Supercell type family: SupercellHeadline-Heavy uppercase at 56px for the wordmark-style h1, SupercellText at 17–18px for copy."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#0f62d6"
  on-primary: "#ffffff"
  primary-hover: "#0a4fb0"
  tag-pink: "#fb4a9d"
  ink-soft: "#191919"
  ink-warm-grey: "#989893"
  ink-grey: "#969696"
  nav-grey: "#808080"
  hairline: "#333333"
  grey-light: "#e9eaed"
  grey-dark: "#282828"
  accent-magenta: "#fb4cff"
typography:
  display:
    fontFamily: SupercellHeadline-Heavy, sans-serif
    fontSize: 56px
    fontWeight: 400
    lineHeight: 70px
    letterSpacing: "-0.8px"
    textTransform: uppercase
  display-mobile:
    fontFamily: SupercellHeadline-Heavy, sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 60px
    letterSpacing: "-0.8px"
    textTransform: uppercase
  section-title:
    fontFamily: SupercellHeadline-Heavy, sans-serif
    fontSize: 26px
    fontWeight: 900
    lineHeight: 42.9px
    textTransform: uppercase
  card-title:
    fontFamily: SupercellText-Medium, Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 29.7px
  body:
    fontFamily: SupercellText-Regular, Helvetica, Arial, sans-serif
    fontSize: 17px
    fontWeight: 400
    lineHeight: 26.52px
  nav:
    fontFamily: SupercellText-Medium, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 23.1px
  nav-regular:
    fontFamily: SupercellText-Regular, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 23.1px
  button:
    fontFamily: SupercellText-Bold, Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 700
    textTransform: uppercase
  footer:
    fontFamily: SupercellText-Medium, Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 19.8px
rounded:
  xs: 8px
  tag: 100px
  pill: 120px
spacing:
  s1: 8.4px
  s2: 12px
  s3: 14px
  s4: 14.4px
  s5: 15px
  s6: 16px
  s7: 18px
  s8: 20px
  s9: 21px
  s10: 24px
  s11: 30px
  s12: 34px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 14.4px 24px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 14.4px 24px
    height: 41px
  button-inverse:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 15px 21px
    height: 50px
  news-tag:
    backgroundColor: "{colors.tag-pink}"
    rounded: "{rounded.tag}"
  news-link:
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.nav-grey}"
    typography: "{typography.nav}"
    height: 68px
  nav-link-hover:
    textColor: "{colors.on-primary}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.footer}"
    padding: 36px 0px 140px
---

## Overview

This is `https://supercell.com/en/`, the corporate site of the games company behind Clash of Clans, Clash Royale, Brawl Stars, Hay Day, Boom Beach, Squad Busters and mo.co, measured live on 2026-10-17 at 1280px (9,052px tall) and in a mobile pass. It is essentially a news wall wrapped in brand chrome.

A black 68px header carries the Supercell logo (a black-and-white block wordmark image, 46 × 37px) and grey links — Games, Careers, Support, About Us — with a long list of game names in its menus (the extractor counted 30 header links). The hero centres the uppercase h1 "SUPERCELL" in the heavy headline face, a short line ("Makers of Hay Day, Clash of Clans, Boom Beach, Clash Royale, Brawl Stars, Squad Busters and mo.co") and a blue "WATCH VIDEO" pill, framed on both sides by crowds of 3D game characters.

Below, a two-column grid of 26 news stories runs the length of the page: each a large landscape image, a pink pill tag naming the game or topic (Clash of Clans, Supercell, Hay Day, Careers, Brawl Stars, People …), and a centred two-line headline in 18px Medium. A blue "NEWS ARCHIVE" button ends the grid. Two full-width colour bands follow — a deep navy "GAMES" band with a character render and a white "SEE GAMES" button, and a #0f62d6 blue "CAREERS" band with a white "SEE CAREERS" button — then a black footer with social icons, app-store badges, legal links and the company address.

The voice is short, warm and playful ("Our dream is to create games that as many people as possible play for years and that are remembered forever"). The site itself stays restrained — white, black and one blue — and lets the game art supply every other colour.

## Colors

The site exposes a small set of named CSS variables (`--sc-*`, `--supercell-*`); the measured roles map onto them.

- **canvas #ffffff** — the news wall (`--sc-color-background`); 36% of the capture.
- **ink #000000** — headlines and card titles (1,638 characters), and the header and footer fill (`--sc-color-text`, `--sc-color-background-inverted`).
- **primary #0f62d6** — `--supercell-color-blue-accessible`: "WATCH VIDEO" and "NEWS ARCHIVE" fills and the Careers band (weight 664).
- **primary-hover #0a4fb0** — the measured hover fill of "WATCH VIDEO".
- **on-primary #ffffff** — text on blue and black (555 characters).
- **tag-pink #fb4a9d** — the category tag pills (weight 100).
- **ink-soft #191919** (289 characters), **ink-warm-grey #989893** (291), **ink-grey #969696** (53) — secondary text.
- **nav-grey #808080** — header links at rest (`--supercell-color-grey`); hover turns them white.
- **hairline #333333** — the single measured border.
- **grey-light #e9eaed**, **grey-dark #282828**, **accent-magenta #fb4cff** — declared variables (`--sc-color-grey-light`, `--sc-color-grey-dark`, `--sc-color-accent` / `--sc-color-pink`) not measured on a painted area of the home page. Note that the declared accent #fb4cff is a different, more magenta pink than the rendered tag #fb4a9d.

## Typography

All text uses Supercell's own fonts, served from `/_next/static/media/` as separate files per weight: **SupercellHeadline-Heavy** (also a Bold cut in `@font-face`) and **SupercellText** Regular, Medium and Bold.

- **display** SupercellHeadline-Heavy 56px / 70px, -0.8px, uppercase — the h1 "SUPERCELL" (computed weight 400; the face itself is the Heavy cut).
- **section-title** SupercellHeadline-Heavy 26px / 42.9px at 900, uppercase — "GAMES", "CAREERS".
- **card-title** SupercellText-Medium 18px / 29.7px — news headlines; 18px is the most-read size (1,496 characters) and Medium the most-read face (2,182).
- **body** SupercellText-Regular 17px / 26.52px — band paragraphs.
- **nav** SupercellText-Medium 14px / 23.1px and **nav-regular** 14px / 400 — header links.
- **button** SupercellText-Bold 12px / 700, uppercase.
- **footer** SupercellText-Medium 12px / 19.8px.

13px is also common (365 characters, tags and small links). Fallback stack: Helvetica, Arial, sans-serif. These are company-specific fonts; a heavy geometric grotesk in capitals and a neutral sans approximate them.

## Layout

The desktop content column runs from x=128 to x=1152 (1,024px). The news wall is a strict two-column grid: equal landscape images, tag centred under the image, headline centred under the tag. Measured gaps are small — 18px, 20px, 34px, 30px and 12px — and paddings cluster at 14px and 8.4px (tags) and 14.4px 24px (buttons). The Games and Careers bands split into two columns (copy in one half, character art in the other; the Careers copy starts at x=650). The footer spans x=96 to x=1169 with 36px top and 140px bottom padding.

The CSS declares header heights (`--sc-header-height-desktop: 88px`, `--sc-header-height-mobile: 80px`) and hero aspect ratios (`--sc-hero-aspect-desktop: 2.457…`, `--sc-hero-aspect-mobile: 0.694…`).

## Elevation & Depth

No box shadows were measured on rendered elements. The page is flat: images sit edge-to-edge in their grid cells with no frame, and the only layering is the 3D game characters in the hero and bands, which are part of the artwork. The CSS declares a few shadows (`0 0 18px rgba(0,0,0,.2)`, `0 10px 20px rgba(0, 0, 0, 0.3)`) for elements not seen in the measured state. Motion variables define timing: `--sc-duration-fast: 150ms`, `--sc-duration-base: 250ms`, `--sc-duration-slow: 400ms`, easing `cubic-bezier(0.645,0.045,0.355,1)`.

## Shapes

Three radii. **100px** on 26 elements — the same count as the news cards' category tags; **120px** on the "WATCH VIDEO" pill; **8px** on three elements, including the rectangular "NEWS ARCHIVE" and "SEE CAREERS" buttons. News images are square-cornered in the capture. The headline face's heavy, squared letterforms are the brand's main shape signal.

## Components

- **Primary pill (button-primary)** — "WATCH VIDEO": #0f62d6, white SupercellText-Bold 12px uppercase, 14.4px 24px padding, 44px high, 120px radius; hover #0a4fb0.
- **Rectangular blue button (button-secondary)** — "NEWS ARCHIVE": same colours and type, 41px high, 8px radius.
- **Inverse button** — "SEE CAREERS" on the blue band: white fill, black label, 15px 21px padding, 50px high, 8px radius.
- **News card** — landscape image, a #fb4a9d pill tag with the game name, centred 18px Medium headline in black.
- **Header** — black, 68px, logo left, grey #808080 Medium 14px links that turn white on hover, a small "STORE" button and language/search controls at the right in the capture.
- **Feature band** — full-width colour (deep navy for Games, #0f62d6 for Careers), 26px/900 uppercase title, short paragraph, button, oversized 3D character.
- **Footer** — black, "Follow us on" with social icons, App Store and Google Play badges, a row of legal links and the company address in 12px.

## Design System Architecture

Supercell's Media Center (https://supercell.com/en/media-center/) states that its asset library includes "Supercell-branded materials and brand guidelines" and links to a portal at https://brand.supercell.com/media ("Supercell Brand - Media Center (public)"); the portal page returned only its title to the fetch tool, so no guideline values could be read from it.

The shipped site shows a compact variable layer with two prefixes: `--sc-*` for colours (`--sc-color-text`, `--sc-color-background`, `--sc-color-background-inverted`, `--sc-color-accent`, `--sc-color-grey-light/medium/dark`, `--sc-color-grey-accessible: #767676`), layout (`--sc-header-height-*`, `--sc-hero-aspect-*`) and motion (`--sc-duration-*`, `--sc-ease-standard`), and `--supercell-*` for the brand blue and grey. The site is a Next.js build; carousels use Swiper (`--swiper-theme-color: #007aff`, a library default, not a brand colour). Breakpoints are 426px, 767/789/790px, 1049/1050px, 1280/1281px and 1680/1681px.

## Do's and Don'ts

**Do**
- Keep the page white with black chrome (header and footer).
- Use #0f62d6 for buttons and the Careers band; darken to #0a4fb0 on hover.
- Set the hero title and section titles in SupercellHeadline-Heavy capitals.
- Tag every story with a pink #fb4a9d pill and a centred 18px Medium headline.
- Let game art bring the colour; keep UI colours to white, black, blue and pink.

**Don't**
- Don't use Swiper's #007aff or other library blues.
- Don't round news images or add card shadows.
- Don't set long copy in the headline face.
- Don't mix the declared magenta #fb4cff with the rendered tag pink #fb4a9d in one view.
- Don't use grey text on blue.

## Responsive Behavior

From the mobile pass (content between x=20 and x=371):

- The h1 drops from 56px / 70px to 48px / 60px, keeping -0.8px tracking.
- Section titles ("GAMES", "CAREERS") grow from 26px to 34px at 900.
- Band paragraphs drop from 17px / 26.52px to 16px / 24.96px; 16px becomes the most-read size.
- The "WATCH VIDEO" pill is unchanged (12px, 14.4px 24px, 44px, 120px radius).
- The header is black and 66px tall; the extractor recorded a visible "Toggle menu" and one header link, against 30 on desktop.
- The news band becomes one column (10,605px long); the Careers band is 654px.

Hover on touch was not measured.

## Iteration Guide

1. Black 68px header, white canvas, black footer.
2. Hero: centred `display` title, one-sentence line, `button-primary` pill, flanked by character art.
3. Content: two-column news grid with `news-tag` and `news-link`.
4. Feature bands with `section-title`, `body`, and `button-inverse` on blue.
5. Buttons are blue with white uppercase 12px Bold; pill for hero, 8px for the rest.
6. Check `--sc-*` variables in `web/data/extracted/supercell.json` before adding colours or timings.
