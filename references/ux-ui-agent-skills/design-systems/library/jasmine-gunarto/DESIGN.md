---
version: alpha
name: Jasmine Gunarto
category: "Portfolio"
description: "Motion designer's portfolio (New York): warm grey canvas #ebeae4 with near-black #090909 ink, a gigantic 252px uppercase mg display at weight 800 and Manrope 800 labels at 10 to 12px, cream #eee9d1 nav text, 25.4px pill tags, one dark project row and no drop shadows."
colors:
  canvas: "#ebeae4"
  ink: "#090909"
  primary: "#eee9d1"
  surface-brown: "#341c09"
  surface-graphite: "#2e2e2e"
  ink-pure: "#000000"
typography:
  display:
    fontFamily: mg
    fontSize: 252.275px
    fontWeight: 800
    lineHeight: 189.206px
    letterSpacing: 2.52275px
    textTransform: uppercase
  display-mobile:
    fontFamily: mg
    fontSize: 126.977px
    fontWeight: 800
    lineHeight: 101.581px
    letterSpacing: 1.26977px
    textTransform: uppercase
  heading:
    fontFamily: Manrope
    fontSize: 11.8519px
    fontWeight: 800
    lineHeight: 11.8519px
    letterSpacing: 0.304762px
    textTransform: uppercase
  nav:
    fontFamily: Manrope
    fontSize: 10.1587px
    fontWeight: 800
    lineHeight: 10.1587px
    textTransform: uppercase
  link:
    fontFamily: mg
    fontSize: 30.4762px
    fontWeight: 800
    lineHeight: 22.8571px
    letterSpacing: 0.304762px
rounded:
  xs: 25.4px
  sm: 63.49px
spacing:
  s1: 1.69px
  s2: 2.96px
  s3: 4.23px
  s4: 6.77px
  s5: 8.47px
  s6: 11.01px
  s7: 11.85px
  s8: 12.67px
  s9: 12.7px
  s10: 13.55px
components:
  link:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    padding: 4.2328px 8.46561px
  footer:
    textColor: "{colors.ink}"
---

## Overview

The measured page is `https://jasminegunarto.com/`, titled "Homepage - Jasmine Gunarto" (language `en-US`). Per the page text, Jasmine Gunarto is a motion designer based in New York, US; the page is a 1,280px wide, 2,400px high portfolio home (with an inner scroller of 9,096px). It is built on WordPress (the root variables are `--wp--preset--*`) with custom `--cl-*` and `--base-size-*` variables for the design.

The capture opens with a status line across the top: a dot and "NEW YORK, US", a live clock ("12:27 AM GMT-4"), coordinates, and at the right the links HOME, WORKS, BREAK and ABOUT. Directly under it the h1, JASMINE GUNARTO, is set in the `mg` display face at 252.275px, weight 800, uppercase, in near-black, stretched across the full width (measured box 1,275px wide, 189px high). The h1 text is split into stacked characters in the DOM (each letter doubled), a kinetic-type effect. After a long empty cream field comes a split line, "A MOTION" at the left and "DESIGNER" at the right, with a single project card centred between them: a small blue-and-iridescent motion piece "POP CULTURE ICONS" labelled "MOTION DESIGN" and "2026". At the bottom centre, "SCROLL DOWN".

Further down, per the page text and extraction, are numbered project rows (01 ARIZONA DIAMONDBACKS, "CAMPAIGN DESIGN") rendered white-on-black, a Break section of experiments and an About section ("About Jasmine", "Single Frame Expression"), then a footer with "(FOLLOW)" and "(NAVIGATION)" columns, Instagram and other social links and a "Let's Talk" call to action. The tone is minimal, deliberate and expressive.

## Colors

- **Canvas `#ebeae4`** (`colors.canvas`): the warm grey page field; it is also the preloader text color (`--cl-page-preloader-tx`).
- **Ink `#090909`** (`colors.ink`): the h1 and most text; it is the largest background area (7,893 weight), used for dark project rows.
- **Primary `#eee9d1`** (`colors.primary`): a pale cream used for nav and label text on dark (342 characters, the most read color). The page has no saturated action color; this cream is the nearest accent.
- **Brown `#341c09`** (`colors.surface-brown`, 3,341 area weight) and **graphite `#2e2e2e`** (`colors.surface-graphite`, 3,300 area weight): the dark project panels.
- **Pure black `#000000`** (`colors.ink-pure`, 100 characters, 144 area weight).
- WordPress preset colors in the stylesheet (vivid purple `#9b51e0`, pale pink `#f78da7`, vivid green cyan `#00d084`, luminous vivid orange `#ff6900`, vivid cyan blue `#0693e3`, cyan bluish gray `#abb8c3`, pale cyan blue `#8ed1fc`) are WordPress defaults and are not brand colors. The project thumbnail's blues and iridescent greens are artwork.

## Typography

Fonts loaded: **mg** (weights 700, 800, 900) and **Manrope** (700, 800). By character count Manrope covers 695 and mg 303; weight 800 covers 736 characters, 700 covers 235 and 900 covers 27.

| Role | Font | Size / line-height | Tracking |
| --- | --- | --- | --- |
| Display (h1) | mg 800 uppercase | 252.275px / 189.206px | 2.52275px |
| Display, 390px | mg 800 uppercase | 126.977px / 101.581px | 1.26977px |
| Project link (row title) | mg 800 | 30.4762px / 22.8571px | 0.304762px |
| Heading label (h2, h3) | Manrope 800 uppercase | 11.8519px / 11.8519px | 0.304762px |
| Nav | Manrope 800 uppercase | 10.1587px / 10.1587px | normal |

Other sizes seen in text: 20.3175px (130), 13.545px (110), 118.519px (98), 211.64px (40) and 262.434px (27). The type system is pure contrast: gigantic condensed uppercase display against tiny uppercase labels, all very heavy. Sizes carry fractional pixels; the stylesheet publishes `--base-size-desktop-w` 1512 and `--base-size-mobile` 430. The `mg` face is a custom or commercial display font; Manrope is an open-source family on Google Fonts.

## Layout

- Desktop 1,280px; root variables `--base-size-desktop-w: 1512`, `--base-size-mobile: 430` and `--base-size-mobile-h: 570` are published; the measured sizes are fractional pixel values.
- Measured gaps: 8.46561px (10 uses), 12.673px (8), 12.6984px (4), 45.7143px (4), 13.545px (4), 11.8519px, 11.0053px and 25.3968px (2 each). Paddings: 8.46561px (16), 2.96296px (12), 25.3968px (8), 12.6984px (7), 42.328px (5).
- The h1 spans the full measured width (1,275px of 1,280px). The nav is a full-width 31px row. Project rows are 1,229px wide, with a measured link height of 474px.
- Large empty vertical fields separate sections; the split "A MOTION / DESIGNER" line is a left/right pair with a centred media card.

## Elevation & Depth

No box shadows were measured on rendered elements. The WordPress stylesheet publishes preset shadows (`--wp--preset--shadow--natural` `6px 6px 9px rgba(0, 0, 0, 0.2)`, `--wp--preset--shadow--deep` `12px 12px 50px rgba(0, 0, 0, 0.4)`, `--wp--preset--shadow--outlined`), but they are WordPress defaults and none appeared on the page. Depth is created by dark rows against a light canvas and by the project card's saturated artwork.

## Shapes

Measured radii: 25.3968px on 12 elements (`rounded.xs`, the pill tags such as "ARIZONA DIAMONDBACKS" at 175px by 18px with padding 2.96296px 8.46561px) and 63.4921px on 2 (`rounded.sm`). Everything else (h1, rows, nav) is square. Borders: `#090909` (1) and `#eee9d1` (1).

## Components

- **Status/nav bar**: full-width 31px row in Manrope 800 10.1587px: location, clock, coordinates, and nav links HOME, WORKS, BREAK, ABOUT with 4.2328px 8.46561px link padding, cream `#eee9d1` text.
- **Pill tag**: Manrope 800 uppercase 11.8519px with a 25.3968px radius and 2.96296px 8.46561px padding, e.g. project category labels.
- **Project row (link)**: `#090909` fill, `#ebeae4` text, mg 800 30.4762px, tall (474px high, 1,229px wide), numbered "01".
- **Project card**: a centred small media card captioned "MOTION DESIGN" and "2026".
- **Footer**: Manrope 800 11.8519px labels "(FOLLOW)" and "(NAVIGATION)", with social links, 488px high.
- No filled primary button was detected; the page uses text and pill tags for navigation.

## Design System Architecture

No public design system exists and none was found linked. The site is a WordPress build: the root carries the standard `--wp--preset--*` color, font-size, spacing and shadow sets (`--wp--preset--font-size--large` 36px, `--wp--preset--spacing--30` 0.67rem, `--wp--preset--spacing--40` 1rem, `--wp--preset--spacing--50` 1.5rem, `--wp--preset--spacing--60` 2.25rem), plus custom variables `--cl-title`, `--cl-body`, `--cl-page-preloader-tx` and `--base-size-*`. The design's own tokens are therefore best read from computed styles, which this file does.

## Do's and Don'ts

- Do set the name in a single line of enormous uppercase mg 800 across the full width.
- Do use tiny, heavy Manrope uppercase labels for all supporting text.
- Do alternate a light `#ebeae4` canvas with near-black `#090909` project rows.
- Do round only small tags (25.4px).
- Don't use WordPress preset colors or shadows; they are defaults, not brand.
- Don't add body copy in a regular weight; the page runs at 700 to 900.
- Don't box the h1; it is unframed type.

## Responsive Behavior

Measured at 390px: the h1 becomes mg 800 126.977px / 101.581px with 1.26977px tracking (box 312px by 203px); the nav row is 32px high with Manrope 800 at 9.06977px; no body text or call to action was detected. Mobile text sizes by character: 7.25581px (225), 9.06977px (142), 14.5116px (120), 126.977px (118) and 58.0465px (98). The measured mobile nav lists NEW YORK, US, HOME, WORKS, BREAK. Other breakpoints are not measured.

## Iteration Guide

1. Canvas `#ebeae4`, ink `#090909`, cream `#eee9d1` text on dark.
2. Display: mg 800 uppercase at 252.275px / 189.206px with 2.52275px tracking.
3. Labels: Manrope 800 uppercase 10.1587px to 11.8519px.
4. Tags: 25.3968px radius, 2.96296px 8.46561px padding.
5. Spacing: use 8.46561px as the base step with 12.7px and 25.4px multiples.
6. Keep the page almost empty between statements and let project media sit centred.

## Imagery and Microcopy

The only image in the first screens is a single motion-design poster, "Pop Culture Icons", with isometric 3D lettering, a glittering glove and hat, a film reel and a Rubik's cube in saturated blue and iridescent colours. It is the one source of chroma on a page otherwise built from warm grey, near-black and cream. Microcopy is terse and uppercase: "A MOTION" and "DESIGNER" bracket the image; "SCROLL DOWN" closes the first screen; project names are given as numbered rows with a category line ("CAMPAIGN DESIGN"); the footer uses parenthesised group titles "(FOLLOW)" and "(NAVIGATION)". Works named on the page include Arizona Diamondbacks, Home in a Hot Pot, PreCollege '25 and PINC.
