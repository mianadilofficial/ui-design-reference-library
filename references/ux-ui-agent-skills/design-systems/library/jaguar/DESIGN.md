---
version: alpha
name: Jaguar
category: "Automotive"
description: "Jaguar's international home page (jaguar.com/en-xi), warm stone #ebece6 with charcoal #333433 text, an in-house jaguar typeface from weight 100 at a 145px hero to 16px buttons, white 56px-high pill buttons with 56px radii, 9px cards and a dark footer wordmark."
colors:
  canvas: "#ebece6"
  ink: "#333433"
  primary: "#ffffff"
  on-primary: "#333433"
  ink-pure: "#000000"
  ink-secondary: "#4c4a4d"
  hairline: "#ffffff80"
  primary-hover: "#e3dad4"
  nav-bg: "#f5f6f2"
typography:
  display:
    fontFamily: jaguar, "Open Sans", sans-serif
    fontSize: 145px
    fontWeight: 100
    lineHeight: 140px
    letterSpacing: 0.16px
  display-mobile:
    fontFamily: jaguar, "Open Sans", sans-serif
    fontSize: 87px
    fontWeight: 300
    lineHeight: 91px
    letterSpacing: 0.16px
  heading:
    fontFamily: jaguar, "Open Sans", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 70px
  body:
    fontFamily: jaguar, "Open Sans", sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 35px
    letterSpacing: 0.16px
rounded:
  xs: 9px
  sm: 56px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 9px
  s5: 10px
  s6: 14px
  s7: 15px
  s8: 19px
  s9: 20px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
    rounded: "{rounded.sm}"
    padding: 0px 56px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink-secondary}"
    textColor: "{colors.primary}"
    typography: "{typography.heading}"
    rounded: "{rounded.sm}"
    padding: 0px 56px
    height: 56px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.heading}"
    rounded: "{rounded.sm}"
    padding: 0px 56px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 15px 0px 0px
  nav-link:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.heading}"
  card:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-secondary}"
    rounded: "{rounded.xs}"
  footer:
    textColor: "{colors.primary}"
    padding: 322px 0px 56px
---

## Overview

The first extraction of this slug landed on `https://www.jaguar.com/en-xi/market-selector.html` (a country picker titled "View Jaguar in your market"). Per the queue rules the real home page was re-measured with `extract-tokens.mjs --slug=jaguar --url=https://www.jaguar.com/index.html --force --no-motion`, which resolved to `https://www.jaguar.com/en-xi/index.html`, titled "Jaguar. Copy Nothing." This DESIGN.md is named for that measured site, Jaguar's international (en-xi) home page, and the tokens were regenerated from it. The page is 1,280px wide and 10,321px tall.

The capture is a long, quiet scroll. A short dark hero shows the Type 01 concept in a glowing orange and black tunnel: a small light "Menu" control at the top left, the centred jaguar wordmark, an eyebrow, the h1 "Type 01" at 145px weight 100 in white, a single line of copy and a white pill button, "Type 01 in detail". The rest of the page is a warm stone field (`#ebece6`) holding a sequence of image-led blocks: "A new era begins" beside a car photograph with a "Read more" pill; a full-width dark band with a 28px statement ("In a world increasingly shaped by algorithms and formulaic design, Jaguar has always demanded originality. Always leapt into the unknown without fear. Always chosen to copy nothing.") and an "About Jaguar" pill; "Destinations" with a retailer photograph; two stacked editorial images; "Stay inspired" with a dark "Sign up" pill; two white cards ("Existing owners", "Contact us"); and a very large dark footer carrying the jaguar wordmark with links (Market Selector, Contact, Racing, Corporate…) and a "JLR brands" row.

The voice is confident and spare: "Copy Nothing", "A new era begins", "Stay inspired". A fetch of the page returned only the headline "Jaguar. Copy Nothing.", so the section list above comes from the measured extraction and capture. The consent overlay and its scrim were hidden by the extractor and are not documented as brand UI.

## Colors

- **Canvas `#ebece6`** (`colors.canvas`): the dominant page field (7,931 of the area weight).
- **Ink `#333433`** (`colors.ink`): charcoal for text on the stone field (358 characters) and the fill of the dark statement band (1,185 area weight).
- **Primary `#ffffff`** (`colors.primary`) with **on-primary `#333433`**: the main pill button is a white fill with charcoal text; its hover fill is `#e3dad4` (`colors.primary-hover`, measured). White is also the text color on dark media (536 characters).
- **Ink secondary `#4c4a4d`** (`colors.ink-secondary`): card text, nav link text and the fill of the dark "Sign up" pill.
- **Nav background `#f5f6f2`** (`colors.nav-bg`): the light menu bar.
- **Ink pure `#000000`** (157 characters) and **hairline `#ffffff80`** (white at 50%, the single border color).
- Root variables published by the footer link group: `--link-group-link-color` `#111`, `--link-group-border-color` `#d9dad5`, `--link-group-title-color` `#4c4a4d`, `--link-group-accordion-background-color` `#f5f6f2`, `--link-group-icon-color` `#333433`, `--link-group-link-mobile-color` `#4c4a4d`. Only the ones equal to measured colors are tokens.
- A band at the end measured `#e9e8e2` (one area-weight unit) and is not tokenised.

## Typography

One family: **jaguar** (the brand's own face) with `"Open Sans", sans-serif` as fallback, loaded at weights 100, 300, 400 and 700. By character count the page is weight 400 (992), 300 (65) and 100 (19).

| Role | Size / weight / line-height | Tracking |
| --- | --- | --- |
| Display (h1 "Type 01") | 145px / 100 / 140px | 0.16px |
| Display, 390px | 87px / 300 / 91px | 0.16px |
| Statement / body | 28px / 400 / 35px | 0.16px |
| Heading (h2 "JLR brands", nav, buttons) | 16px / 400 / 70px or 35px | 0.16px |
| Card text | 21px / 400 / 28px | 0.16px |
| Footer link | 15.4px / 400 / 19px | 0.16px |

Other sizes by characters: 16px (462), 28px (181), 12.25px (149), 15.4px (134), 66px (65), 40px (41), 21px (25), 145px (19). The site declares Open Sans as the fallback for its own jaguar face.

## Layout

- Desktop 1,280px, page height 10,321px.
- Spacing steps: 1, 5, 6, 9, 10, 14, 15, 19, 20, 28px; common gaps 14px (36) and 28px (9); paddings 56px (13 uses, the button inset), 28px (5), 41px and 42px.
- The navigation measured 70px high and 1,225px wide at desktop (84px at mobile).
- The footer padding is 322px 0px 56px, which leaves the large wordmark a wide empty field.
- Cards are 525px by 301px; two side by side under "Stay inspired".
- Image blocks alternate left and right with a short text block; one band is a full-width dark statement.

## Elevation & Depth

Measured box-shadows are inset 1px outlines only: `rgb(51, 52, 51) 0px 0px 0px 1px inset` on 3 elements and `rgb(255, 255, 255) 0px 0px 0px 1px inset` on 1 (outlined pill buttons). There are no drop shadows. Depth otherwise comes from the contrast between a stone field, dark photography and white cards.

## Shapes

Radii: 56px on 15 elements (buttons, the Menu pill and link pills), 9px on 13 elements (cards and the menu bar), 100% on 10 and 50% on 1 (circular icon buttons, flags). Tokens: `rounded.sm` 56px, `rounded.xs` 9px and `rounded.pill` 9999px. Buttons are exactly 56px tall so the 56px radius makes full pills. Photography is shown rectangular.

## Components

- **Primary pill**: `#ffffff` fill, `#333433` 16px text, 56px high, 0px 56px padding, 56px radius ("Type 01 in detail", 268px wide); hover fill `#e3dad4`.
- **Dark pill**: `#4c4a4d` fill, white text, same 56px size ("Sign up", 202px wide).
- **Outline pill**: white text, 56px radius and an inset 1px outline ("About Jaguar", 254px wide).
- **Menu bar**: `#f5f6f2`, 9px radius, 70px high, "Menu / Close" text.
- **Cards**: `#ffffff` fill, `#4c4a4d` 21px text, 9px radius, 525px by 301px ("Existing owners", "Contact us").
- **Footer**: large dark block with the jaguar wordmark, 15.4px links and a "JLR brands" row.

## Design System Architecture

No public design system or brand-guidelines page was found and the page links to none. The page's own custom properties are limited to the footer link group (`--link-group-*`, `--segment-size`, `--scrollbar-width`), and classes are prefixed `jcxSpa-` (seen in the consent overlay class names). Because the root exposes almost no tokens, every value in this file comes from computed styles, and the system is effectively a small set of reused shapes: the 56px pill, the 9px card, the stone and charcoal pair.

## Do's and Don'ts

- Do use the stone `#ebece6` field with charcoal `#333433`, and let dark photography carry drama.
- Do build every call to action as a 56px pill with 0px 56px padding.
- Do set display type extremely light (weight 100 at 145px) and body at 400.
- Do keep tracking at 0.16px.
- Don't add drop shadows; only 1px inset outlines were measured.
- Don't use more than one family; jaguar carries every size.
- Don't document the consent overlay or its scrim as brand UI.
- Don't use bright accent colors; none are in the palette.

## Responsive Behavior

Measured at 390px: the header shows one visible link and a menu toggle; the card layout is one column (`maxCardColumns` 1); the first band is the 84px menu bar and the second a single-column media band 10,047px high. The h1 becomes 87px / 91px at weight 300, body 21px / 28px, the primary button keeps its 268px by 56px size with a 56px radius, and navigation is 84px high at 390px. Mobile sizes by characters: 16px (485), 21px (206), 12.25px (149), 16.1px (134), 58px (65). Other breakpoints are not measured.

## Iteration Guide

1. Set the canvas to `#ebece6` and ink to `#333433`; put white text on dark photographic bands.
2. Use the jaguar face: 145px/100 hero, 28px/35px statements, 16px buttons, 0.16px tracking.
3. Make buttons 56px high pills, white or `#4c4a4d`, with 0px 56px padding.
4. Round cards to 9px at 525px by 301px.
5. Space with 14px and 28px gaps and large generous footer padding.
6. Keep copy short and declarative in the "Copy Nothing" register.
