---
version: alpha
name: ISUZU Group Thailand
category: "Thai Brands"
description: "ISUZU Group Thailand corporate entry page (isuzu.co.th), operated by ISUZU Motors Asia (Thailand) Co., Ltd.: white canvas, grey #707070 DB Helvethaica X menu at 26px, ISUZU red #ed1b2f and #ff0000 accents, black #000000 footer bar, all corners square (0px), full-bleed sky photograph."
colors:
  canvas: "#ffffff"
  ink: "#707070"
  primary: "#ff0000"
  surface: "#f6f6f6"
  black: "#000000"
  ink-dark: "#333333"
  ink-mid: "#777777"
  isuzu-red: "#ed1b2f"
typography:
  display:
    fontFamily: "\"DB Helvethaica X\""
    fontSize: 26px
    fontWeight: 400
    lineHeight: 32px
  display-mobile:
    fontFamily: "\"DB Helvethaica X\""
    fontSize: 24px
    fontWeight: 400
    lineHeight: 26px
  body:
    fontFamily: tahoma
    fontSize: 13px
    fontWeight: 400
    lineHeight: 15px
  body-dominant:
    fontFamily: DB Helvethaica X Li
    fontSize: 20px
    fontWeight: 400
rounded:
  none: 0px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 15px
  s5: 20px
  s6: 22px
  s7: 29px
  s8: 40px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display-mobile}"
---

## Overview

The measured page is https://www.isuzu.co.th/index.php, titled "ISUZU Group Thailand". It is the group entry page of Isuzu in Thailand rather than a product site, so this file is named after the measured site, "ISUZU Group Thailand", not after the queued brand label "Isuzu Motors (Thailand)". The footer line identifies the operator: "© 2026 ISUZU Motors Asia (Thailand) Co., Ltd." The page is 1280px wide and exactly one viewport tall (800px): a white header with the red-and-grey "ISUZU THAILAND" logo, a home icon and five menu items (Corporate Information, Product & Service, Career, Update, Contact), a TH / EN language switch, a full-bleed photograph of green leaves against a blue sky with the red ISUZU wordmark, the slogan "Moving the World – for You", the line "Creating a Sustainable Society", a red-dot "WHAT'S NEW" ticker at the lower left and a black footer bar with "Terms of Use | Privacy Notice | Cookie Policy". A mobile-pass snippet shows a "Now hiring 9 positions, join now..." notice.

This is a splash-style entry page, so only the entry composition is described. Product pages, models and dealer content are not part of this measurement.

## Colors

- **Canvas `#ffffff`**: header and page background (802 weighted area units); **surface `#f6f6f6`**: light grey area (1024 units).
- **Ink `#707070`**: menu and logo-text grey (76 characters).
- **Ink dark `#333333`** (35 characters) and **`#777777`** (18 characters), **`#666666`** and **`#a2a2a2`**: secondary greys.
- **Primary `#ff0000`**: pure red, used for 12 characters of text (the red accent); **ISUZU red `#ed1b2f`** (3 characters) and an area colour `#f41429` (6 units) are the red values of the logo mark.
- **Black `#000000`**: the footer bar (58 units); a 70% black `#000000b3` scrim (275 units) sits behind the ticker area at the lower left.
- **White text `#ffffff`**: 1995 characters, the most-read colour, because the footer links and the photo-overlay text are white.

The pure red `#ff0000` is the measured text accent; the logo reds `#ed1b2f` and `#f41429` are measured separately, so the page carries three close reds that this file keeps apart.

## Typography

DB Helvethaica X is the family, in three loaded cuts: DB Helvethaica X Li (1632 characters), DB Helvethaica X Med (333) and DB Helvethaica X regular (133). Tahoma sets 45 characters (the footer copyright). Every measured character is weight 400 (2143 characters), because weight differences come from the choice of font file (Li, Med) rather than weight values. DB Helvethaica X is a Thai/Latin face distributed with the site; where it is unavailable use a neutral Thai-capable sans.

Measured roles:

- Display (menu / home link): DB Helvethaica X 26px / 32px, weight 400, grey `#707070`.
- Body-dominant: DB Helvethaica X Li 20px (1676 characters).
- Footer: Tahoma 13px / 15px.
- Mobile display: DB Helvethaica X 24px / 26px.

Other sizes: 30px (264 characters), 26px (61), 24px (52), 28px (32), 21px (4) and 50px (6). One style has 85px type with 5px letter-spacing (3 characters). Letter-spacing is otherwise normal.

## Layout

The page is one full-viewport composition: header strip at the top (78px tall for the menu link), a photographic hero filling the rest, and a black footer bar at the bottom with the copyright at the left and the three legal links at the right. The measured paddings are 20px (7 uses), 22px (6), 8px (4), 15px (4), 5px (3), 29px, 40px and 10px; no gaps were recorded. The menu is a horizontal row with generous spacing between items and a language switch pinned right with the current language (EN) on a grey tile.

What the capture communicates: the composition is deliberately sparse. The only text over the photograph is the slogan block at the right, set in a blue-grey that echoes the sky, and the single supporting line beneath it; the left half of the image is foliage with no overlay. The red wordmark is the only saturated element besides the green leaves and the blue sky, so the brand colour reads immediately. Navigation labels are English (Corporate Information, Product & Service, Career, Update, Contact) with a TH / EN switch, which tells us the entry page is bilingual even though the measured language was English; the `lang` attribute itself was not recorded (null).

Data worth noting for anyone reproducing the page: 82 visible elements were counted, the page height equals the viewport height (800px at 1280px width), the home link carries a 22px top and 24px bottom padding inside a 78px tall box, and the footer copyright paragraph spans the full 1240px content width. The type scale has an unusual large share at 20px (1676 of 2143 characters); headings do not exceed 30px except for the 50px lettering. 

## Elevation & Depth

No box shadows are measured. The only measured translucent layer is the 70% black scrim behind the ticker. Depth otherwise comes from the photograph itself (leaves in focus, soft sky).

## Shapes

No radius is measured: `desktop.frequencies.borderRadii` is empty, so every rendered element has a computed radius of 0px. The language tiles, header and footer are therefore square. The token set declares `rounded: none: 0px`.

## Components

- **Header**: white bar with the logo at the left, the home icon (an image background on the home link) and five text links in DB Helvethaica X 26px grey.
- **Language switch**: TH and EN labels, the active one on a light-grey tile.
- **Hero**: full-bleed photograph with the red ISUZU wordmark, the slogan in grey-blue type and a second line "Creating a Sustainable Society".
- **Ticker**: a red dot and the white uppercase label "WHAT'S NEW" over the 70% black scrim at the lower left.
- **Footer bar**: black `#000000`, white Tahoma 13px text, legal links separated by thin vertical bars.

No filled buttons, cards or forms were measured.

## Design System Architecture

No public design-system or brand-guideline page was found: the home page HTML was opened and held no brand, press, design-system, guideline or GitHub link. The extraction found no CSS custom properties (`rootVars` is empty). The de-facto system is the logo-red accent, a neutral grey type colour, one Thai/Latin type family in several cuts, and a photographic hero with square corners. Assets are served from `/default/assets/img/` paths (for example the home button image).

## Do's and Don'ts

- Do keep corners square; every measured radius is 0px.
- Do set menu text in DB Helvethaica X 26px grey `#707070`.
- Do reserve red (`#ed1b2f`, `#ff0000`) for the logo and small accents.
- Do keep the footer black with white Tahoma 13px legal links.
- Don't add shadows, gradients or rounded buttons.
- Don't describe product or dealer pages from this entry page.

## Responsive Behavior

Measured at 390px: the menu link is DB Helvethaica X 24px / 26px; common sizes are 20px (1641 characters), 30px (264), 24px (124), 16px (86), 26px (61) and 28px (32). The mobile pass also records a notice paragraph, "Now hiring 9 positions, join now...", in `#333333`. Menu collapse, breakpoints and hover were not measured.

## Iteration Guide

1. White header, grey `#707070` menu in DB Helvethaica X 26px.
2. A full-bleed nature photograph with the red ISUZU wordmark and a short slogan.
3. A black footer bar with white 13px legal links; no radii anywhere.
4. Use red sparingly: `#ed1b2f` for the logo, `#ff0000` for accents.
5. Re-measure inner pages before extending the system; this file covers only the entry page.
6. Check values against `web/data/extracted/isuzu-motors-thailand.json`.
