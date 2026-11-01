---
version: alpha
name: Raimon Land
category: "Thai Brands"
description: "Raimon Land (raimonland.com, measured at /en/home) luxury developer site: Proxima Nova type with a 31px bold uppercase heading and 3px-tracked 25px section titles, #111e6c deep navy actions with white text, #111820 ink on white, #f1f3f7 blue-grey bands, square 0px CTAs and full-bleed Bangkok skyline photography."
colors:
  canvas: "#ffffff"
  ink: "#111820"
  primary: "#111e6c"
  on-primary: "#ffffff"
  surface-light-blue: "#f1f3f7"
  surface-footer: "#f9f9f9"
  ink-dark-grey: "#3c3c3c"
  ink-blue: "#001970"
  ink-black: "#000000"
  heading-navy: "#00185a"
typography:
  display:
    fontFamily: "\"Proxima Nova\", sans-serif"
    fontSize: 31px
    fontWeight: 700
    lineHeight: 46.5px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Proxima Nova\", sans-serif"
    fontSize: 21.8875px
    fontWeight: 700
    lineHeight: 32.8312px
    textTransform: uppercase
  heading:
    fontFamily: "\"Proxima Nova\", sans-serif"
    fontSize: 25px
    fontWeight: 700
    lineHeight: 30px
    letterSpacing: 3px
    textTransform: uppercase
  button:
    fontFamily: "\"Proxima Nova\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  nav:
    fontFamily: "\"Proxima Nova\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  none: 0px
spacing:
  s1: 5px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 25px
  s9: 30px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 5px 25px
    height: 36px
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 80px 0px
---
## Overview

Raimon Land is a Bangkok developer of residential, hospitality and commercial properties. The measured page is its English home page, https://www.raimonland.com/en/home (title "Raimon Land"). The company motto on the page is "Luxury Reimagined", and the capture shows it as widely spaced capital letters ("LUXURY") above a flowing script word ("Reimagined") laid over a full-bleed aerial video still of Bangkok towers at dusk. The transparent header floats over the hero: the white RML monogram with "RAIMON LAND" at the center, three text links (ABOUT US, OUR PROJECTS, RML NEWS) beneath it, and SEARCH, an EN language selector and a menu icon at the right.

The page then runs through sections for Residential, Hospitality and Commercial projects. Residential highlights named in the page copy include Tait Sathorn 12 and The River Private Residences; hospitality is Somerset Riverside Bangkok; commercial lists OCC One City Centre, Vue and The Cube. A statistics block states 37+ years of experience, 5+ billion USD total project value and 1,000,000+ square meters of built space. The page is 6874px tall at 1280px width. The register is formal and luxurious: restrained navy and white, huge photography, serif or script display in the project artwork, and very little color beyond photographs.

## Colors

Background areas measured: #ffffff (7888), #f1f3f7 (1145), #f9f9f9 (828), #454545 (167), #ffffffcc (80), #111e6c (39). Text colors by characters: #111820 (3301), #ffffff (556), #111e6c (224), #3c3c3c (154), #001970 (61), #000000 (57), #b4b4b4 (54).

- canvas #ffffff; ink #111820 (the root variable --black-10).
- primary #111e6c: the deep navy (root variable --blue-20) filling the "Click for more information" buttons, with on-primary #ffffff text.
- heading-navy #00185a (root variable --blue-10): the color of the "OUR Projects" section title; ink-blue #001970 (root variable --blue) is a slightly brighter navy used for link text.
- surface-light-blue #f1f3f7 (--light-blue): alternate section bands; surface-footer #f9f9f9 (--light-grey-50): the footer.
- ink-dark-grey #3c3c3c (--dark-grey), ink-black #000000 for small text.
- The root palette also defines warm greys (#f6f5f3, #faf9f8, #edebe7, #eeebe7, #f1efec), a dark navy #001d38 (--blue-30) and a project-specific red #cc0029 (--the-528-estate); those are declared in the stylesheet but are not tokenized here. Bootstrap defaults in the same variable list (--primary #007bff, --success, --danger) are framework values and not brand colors.

The capture shows a cookie bar at the lower left of the first screen ("We use cookies ... ALLOW COOKIES"); it is a consent control and is not documented as brand UI.

## Typography

Proxima Nova at weights 300, 400 and 700 is the body and display face, with Font Awesome 5 Pro and Brands icon fonts, an icomoon icon font and a script face named Rafelya Carrotin (used for flourishes such as "Reimagined"). Sizes by characters: 16px (3332), 14px (458), 18px (379), 31px (229), 13px (44), 25px (27), 20px (21).

- display: Proxima Nova 31px bold uppercase, line-height 46.5px (the "RESIDENTIAL" H1); display-mobile: 21.8875px with line-height 32.8312px at the 390px mobile pass.
- heading: 25px bold uppercase, line-height 30px, letter-spacing 3px (section titles such as "OUR Projects").
- button: 14px, weight 400, line-height 21px.
- nav: 16px, weight 400, line-height 24px; header links are 13px with line-height 19.5px in the measured nav block.

Uppercase with wide tracking on headings and nav is the signature, in the style of a luxury hotel brand. Proxima Nova is a commercial font loaded by the site.

## Layout

The header height is 162.594px (root variable --header-height). The site uses full-width image bands alternating with white sections; the first screen of the capture is a video hero and the next screen shows a large empty white block before a full-bleed project image (The River Private Residences, with an offer "Starting 65 MB" and arrows at the sides). Root variables define breakpoints at 576px, 768px, 992px, 1200px and 1560px. Frequent paddings are 15px (28), 6px (19), 12px (16) and 16px (7); the footer uses 80px 0px padding.

## Elevation & Depth

Shadows measured: rgba(0, 0, 0, 0.75) 0px 5px 10px -7px (8 elements, a tight lower shadow) and rgba(0, 0, 0, 0.5) 0px 3px 6px 0px (7, floating round controls). Otherwise depth is created by full-bleed photography and flat bands.

## Shapes

Radii measured: 4px (19 elements) and 50% (15). Tokens are xs 4px and none 0px, and the CTA radius is 0px, so buttons are square. Round shapes are limited to carousel and icon controls.

## Components

- button-primary: #111e6c fill, white text in the 14px type, 0px radius, padding 5px 25px, 36px height, with a 1px solid border; its label is "Click for more information". A second family of buttons, "EXPLORE MORE", measured #454545 fill with white text.
- nav: transparent over the hero with white 13px uppercase text; hover lowers white to 70 percent opacity (measured on SEARCH).
- nav-link: #111820 text at 16px.
- footer: #f9f9f9 fill, #111820 text, 80px vertical padding.
- Carousels use Swiper (--swiper-navigation-size 44px) with thin chevron arrows in white.

## Design System Architecture

No public design system or brand guideline link appeared on the home page. The stylesheet exposes a large, named palette in root variables: blues (--blue-10 #00185a, --blue-20 #111e6c, --blue-30 #001d38, --blue #001970), blacks (--black-10 #111820, --black-20 #0d1319), dark greys (--dark-grey-10 #454545 through --dark-grey-40 #333) and light greys (--light-grey through --light-grey-60), plus --header-height, five breakpoints and Swiper settings. That naming is the de-facto system: numbered ramps per hue. The Bootstrap variables (--primary #007bff and others) exist beside it as inherited defaults.

## Do's and Don'ts

- Do use deep navy #111e6c for the action fill and white text.
- Do set headings and nav in uppercase Proxima Nova, with 3px tracking on section titles.
- Do let photography fill the width and keep type minimal over it.
- Do keep buttons square (0px radius).
- Don't use the Bootstrap blue #007bff or Swiper #007aff as a brand color.
- Don't present the cookie bar as a brand component.
- Don't round the primary button; the measured radius is 0px.

## Responsive Behavior

At the 390px mobile pass the H1 measured 21.8875px bold uppercase with line-height 32.8312px, against 31px on desktop. The stylesheet declares breakpoints at 576px, 768px, 992px, 1200px and 1560px; how layout reflows at each was not measured.

## Iteration Guide

1. White canvas, #111820 text, one deep navy #111e6c for actions.
2. Uppercase bold Proxima Nova headings (31px display, 25px with 3px tracking for section titles).
3. Square 36px buttons with 5px 25px padding.
4. Alternate white with #f1f3f7 bands and full-bleed photography.
5. Keep the footer #f9f9f9 with 80px vertical padding.
6. Run `node web/scripts/verify-designs.mjs --slug=raimon-land` after edits.

## Content and Imagery

Imagery is aerial Bangkok skyline footage, riverfront views and styled interiors (a curved cream sofa before floor-to-ceiling windows overlooking the Chao Phraya River). Project art uses condensed serif capitals ("THE RIVER PRIVATE RESIDENCES") and large numerals for pricing ("65 MB" with "500 - 700 Sq.m. Starting"). The copy is short and aspirational: "Luxury Reimagined", "Bangkok's Finest Riverfront Living", "A Large Riverfront Unit on High Floors with Stunning River Views". A sales number, 02 029 1888, appears in project artwork, and the footer lists the head office at OCC Level 54, Ploenchit Road, Bangkok per the page copy.

Section structure follows the three business lines named in the navigation of the page copy: Residential, Hospitality and Commercial, each introduced by an uppercase bold title and a short descriptor, with News, Services, Investor Relations and Career reachable from the menu. The overall density is low: large areas of white, one image or message per screen, and tiny uppercase navigation. The EXPLORE MORE buttons in dark grey #454545 sit over imagery as a secondary action, while the navy "Click for more information" buttons carry enquiries.
