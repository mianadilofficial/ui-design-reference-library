---
version: alpha
name: BCPG
category: "Thai Brands"
description: "BCPG Public Company Limited English homepage (bcpggroup.com/en/home): DB Ozone X typeface with 90px bold uppercase hero headlines and 22px body, a white canvas, orange #ea7600 and green #48a23f accents with teal #00b2a9 and lime #84bd00, a #2d2926 footer, and 50px-radius ghost pill buttons over photography."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ea7600"
  on-primary: "#ffffff"
  surface-footer: "#2d2926"
  ink-gray: "#59585b"
  ink-light: "#bbbcbc"
  green: "#48a23f"
  teal: "#00b2a9"
  lime: "#84bd00"
  button-primary-bg: "#bbbcbc33"
  nav-text: "#212529"
typography:
  display:
    fontFamily: "\"DB Ozone X\", sans-serif"
    fontSize: 90px
    fontWeight: 700
    lineHeight: 90px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"DB Ozone X\", sans-serif"
    fontSize: 40.6875px
    fontWeight: 700
    lineHeight: 40.6875px
    textTransform: uppercase
  subheading:
    fontFamily: "\"DB Ozone X\", sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 32px
    textTransform: uppercase
  body:
    fontFamily: "\"DB Ozone X\", sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 22px
  button:
    fontFamily: "\"DB Ozone X\", sans-serif"
    fontSize: 22px
    fontWeight: 500
    lineHeight: 22px
rounded:
  xs: 10px
  sm: 30px
  md: 50px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 30px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 16px
    height: 56px
    borderColor: "{colors.on-primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-text}"
    rounded: "{rounded.none}"
    boxShadow: rgba(0, 0, 0, 0.05) 0px 3px 10px 0px
  nav-link:
    textColor: "{colors.green}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

BCPG Public Company Limited (page title "BCPG", logo "bcpg" in lowercase green and orange letters with a leaf mark) is a Thai renewable-energy company. Its own homepage text states that it is "among Asia-Pacific's leading companies in renewable energy with solar power, hydropower, wind power and natural gas businesses in Thailand, Taiwan, Laos, Vietnam, the Philippines and the United States". The measured page `https://www.bcpggroup.com/en/home` is 5,099px tall at 1,280px wide.

The first screen is a dark rock-texture hero video with a huge uppercase white headline ("ENERGIZING A GREENER AND SUSTAINABLE WORLD"), circular carousel arrows (orange at left, white at right), and a "Corporate Video" play control. A white header with the logo, a live stock chip and eight navigation items sits on top. The second band splits a pale aqua panel (with a large curved right edge) carrying the leaf icon, a two-color headline ("Energizing" in orange, "a Greener and" in green, "Sustainable World" in teal) and two paragraphs, against a full-height photograph of children flying a kite in a meadow. The third band is a rounded photographic card for "Solar Power" with a lime "Our Green Businesses" tag, a large megawatt figure and an outlined "Explore More" pill; below are three rounded photo cards ("Race to Net Zero 2050", "Integrity is in our DNA", "Energizing a Greener Sustainable World").

A promotional pop-up (a carbon-neutral announcement) and a green cookie notice with an "Allow cookies" pill overlay the first screen in the capture, and the header shows a live stock quote. These are overlays or data and are not documented as brand UI.

## Colors

- **Canvas `#ffffff`** is the largest background area (weight 3,820); **footer `#2d2926`** (1,027) is a warm near-black; **`#000000`** (1,024) is the dark hero base.
- **Ink `#000000`** is the most-read text color (1,769 characters) and body copy on white; **`#ffffff`** is the second (1,394, on photography); **gray `#59585b`** (176) and **light gray `#bbbcbc`** (132) are secondary text.
- **Primary orange `#ea7600`** (26 characters; background weight 10) is the highlight in headlines ("Energizing", "renewable energy") and the left carousel arrow in the capture.
- **Green `#48a23f`** (100 characters) is navigation link text, the "Explore more" outlined-button color and the green headline words; **teal `#00b2a9`** (35) colors "Sustainable World"; **lime `#84bd00`** (26 characters; fill weight 47, and at 50% alpha `#84bd0080`) fills the "Our Green Businesses" tag and the cookie notice.
- **Ghost fill `#bbbcbc33`** is the translucent fill of the pill buttons on photography; **nav text `#212529`** is the header text color.

## Typography

One family, **DB Ozone X** (weights 300, 400, 500 and 700 loaded) with `sans-serif` fallback, plus Font Awesome 6 Pro and `icomoon` for icons.

- **Display** 90px/700/90px uppercase, white; mobile 40.6875px/40.6875px.
- **Subheading** 32px/500/32px uppercase (the "BCPG" tag and footer title measure this size).
- **Body** 22px/400/22px (line-height equal to size); the most-read sizes are 26px (1,276 characters) and 22px (1,212).
- **Button** 22px/500/22px.
- Other measured sizes: 20px (cookie text), 38px, 55px and 66px. Weights: 500 (1,959 characters), 400 (1,640), 700 (81).

No letter-spacing was recorded.

### Font substitutes

DB Ozone X is loaded as a web font by the site; the only declared fallback is `sans-serif`.

## Layout

The header is 100px high on white with a faint shadow `rgba(0, 0, 0, 0.05) 0px 3px 10px 0px`: logo at left, a stock chip and EN | TH selector at right, and a row of nav items (About BCPG, Our Green Businesses, Investors, Sustainability, Corporate Governance, News and Media, Careers, Contact Us). The hero is full-bleed (hero headline box 799px by 180px). Body bands alternate between a split text-and-photo layout and a centered 1,120px-class container for rounded photo cards (cards in rows of one then three in the capture). The footer measured 1,280px by 401px on `#2d2926` and starts with the legal name "BCPG Public Company Limited" and an M Tower address. Spacing values: 4, 6, 8, 12, 15, 16, 20, 24, 30 and 32px.

## Elevation & Depth

Shadows are light: the header `rgba(0, 0, 0, 0.05) 0px 3px 10px 0px` and the cookie notice `rgba(0, 0, 0, 0.16) 0px 3px 10px 0px`. Depth otherwise comes from large photographs, a dark gradient overlay behind white text, curved panel edges and translucent ghost pills.

## Shapes

Shape is a signature: asymmetric leaf-like radii. Measured radii on the homepage: 50% (13 elements), `0px 30px` (13), 50px (10), `0px 10px` (8), 100% (6), `0px 25px` (3), `30px 0px` (2), `0px 60px` (1), 10px (1) and `0px 0px 250px` (1; the curved aqua panel edge). The leaf-shaped corners (square on one diagonal, rounded on the other). The "BCPG" and "Our Green Businesses" tags measure `0px 10px`. Pill buttons use 50px.

## Components

- **Ghost pill ("Explore More").** Translucent `#bbbcbc33` fill over photography, white 22px/500 label, 1px solid white border, radius 50px, padding 16px, 169x56px.
- **Outlined pill on white.** `#48a23f` label, white fill and 1px solid `#48a23f` border, radius 50px, 169x54px.
- **Tag.** Lime `#84bd00` fill, white 32px/500 uppercase label for "BCPG" (82x46px, radius `0px 10px`, padding 0px 8px).
- **Navigation.** 22px/400 links in `#48a23f` (182x68px hit area) on the white header.
- **Rounded photo card.** Photograph with a large radius, white title text over a dark gradient; the numeric radius per card was not isolated.
- **Footer.** `#2d2926`, white 32px/500 title, 401px tall.
- **Not documented as brand UI:** the carbon-neutral pop-up, the cookie notice and its "Allow cookies" button, the stock chip.

## Design System Architecture

No public design system or brand guideline was found: the homepage was opened and links only to corporate content, and no search was run. The de-facto system is a custom-themed site with the commercial web font DB Ozone X and Font Awesome 6 Pro. Its identity is carried by three decisions seen in the shipped result: a green-orange-teal palette, leaf-shaped asymmetric radii, and large uppercase bold headlines in white over photography. Source: https://www.bcpggroup.com/en/home as measured by the repository extractor.

## Do's and Don'ts

- Do set hero headlines in DB Ozone X 700 uppercase at 90px, white, over a dark photographic base.
- Do color emphasized words in orange `#ea7600`, green `#48a23f` and teal `#00b2a9`, as the homepage headline does.
- Do use 50px ghost pills with a 1px white border on photography and a green outline on white.
- Do use asymmetric leaf radii for tags and panels.
- Don't present the cookie notice or pop-up as components.
- Don't use heavy shadows.
- Don't replace the display typeface with a thin weight; the headline is 700.

## Responsive Behavior

Measured on a 390px mobile pass: the hero headline falls from 90px to 40.6875px (box 360px by 122px); body text falls from 22px to 18.9625px (box 326px by 114px); the "Explore More" button text falls to 18.9625px with the box measuring 169px by 53px; the header measured 390px by 72px and the detected text was "EN | TH" only. Link counts, menu toggle and column counts were not recorded for this page. Other breakpoints are not measured.

## Iteration Guide

1. Use the tokens as measured; the `button-primary` role was set to the pill "Explore more" candidate (radius 50px, padding 16px) instead of the extractor's first candidate.
2. White canvas, black body text in DB Ozone X 22px, orange/green/teal accents for emphasis words.
3. Hero: 90px bold uppercase white headline over dark photography with translucent pills.
4. Use leaf-shaped asymmetric radii for tags.
5. Run `node web/scripts/verify-designs.mjs --slug=bcpg` until it passes.
