---
version: alpha
name: Pace Development
category: "Thai Brands"
description: "Pace Development Corporation (pacedev.com) corporate site: Cantarell 12px body text in #666666 on white, a deep navy #212844 (the site's --base-color--primary) for the footer band and text blocks, a #f8f8f8 secondary surface, a #6daadb light blue, a sharp-cornered flat layout and full-bleed night photography of Bangkok towers."
colors:
  canvas: "#ffffff"
  ink: "#666666"
  primary: "#212844"
  accent-light-blue: "#6daadb"
  on-primary: "#ffffff"
  surface-secondary: "#f8f8f8"
typography:
  body:
    fontFamily: Cantarell, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
rounded:
  none: 0px
spacing:
  s1: 8px
  s2: 12px
  s3: 16px
  s4: 24px
  s5: 48px
  s6: 72px
  s7: 96px
components:
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
---
## Overview

Pace Development Corporation is a Bangkok developer of luxury property and lifestyle brands; the measured page is its corporate home page, https://www.pacedev.com/ (title "Thailand Leading Property Developer Pace Development Corporation Bangkok"). The page positions the company as a pioneer developer in Thai luxury property and lifestyle. The capture is unusual: it shows a mostly white first screen with only the Pace logo lockup centered ("THERE'S A TIME AND [PACE logo] FOR EVERYTHING") and a thin vertical grey line below it, then a tall solid navy band whose body text is nearly invisible, then a full-bleed night photograph of the Bangkok skyline with a golden-lit tower beside Lumpini Park. The extractor recorded the page at 7580px tall at 1280px width.

Text in the lower sections was not visible in the capture and no reveal behavior was measured, so that copy is documented only through the page text opened separately. That text names the flagship project NIMIT Lumpini Park North (a freehold residence overlooking Lumpini Park on Langsuan Road), the DEAN & DELUCA food brand that Pace owns, and six signature developments: MahaNakhon, The Ritz-Carlton Residences, WINDSHELL, MahaSamutR, SalaDaeng and Ficus Lane. The style is spare and cinematic, close to an editorial presentation.

## Colors

The extraction found very few colors, which says the palette is intentionally tiny. Background areas: #ffffff (10677), #212844 (1262), #f8f8f8 (836), plus a nearly transparent #b7d8ff2e with no area. Text colors: #666666 (1491 characters) and #ffffff (878).

The stylesheet exposes six root variables that name the system: --base-color--primary #212844, --base-color--dark #111, --base-color--grey #666, --base-color--secondary #f8f8f8, --base-color--light white and --light-blue #6daadb.

- canvas #ffffff; ink #666666 (the grey text).
- primary #212844: a deep indigo navy used for the full-width content band and the footer, with on-primary #ffffff text.
- accent-light-blue #6daadb: the lighter blue in the logo mark's faceted cube (it is the stylesheet's --light-blue variable); it was not measured as a fill area.
- surface-secondary #f8f8f8: a pale grey panel.
- #111 (--base-color--dark) is declared but did not appear in the measured text or area tables, so it is not tokenized.

The extractor's own primary guess was #0000ee, the browser default link color. It is not a brand color and has been replaced by the navy.

## Typography

One family, Cantarell, in regular (400) and bold (700). Character counts by size: 12px (1715), 16px (632), 24px (22). Weight and size values measured for body: 12px, weight 400, line-height 16px.

- body: Cantarell 12px, weight 400, line-height 16px, set in #666666 on white and #ffffff on navy.
- No H1 or button was measured; the 16px and 24px runs exist but their roles were not recorded, so no heading tokens are declared.

At 12px the text is notably small, which matches the quiet and refined tone of the page. The logo's lettering ("THERE'S A TIME AND ... FOR EVERYTHING") is part of the logo image, not live text. Cantarell is an open-source family; no substitute is needed.

## Layout

The page is a sequence of full-width bands: white intro with logo, navy text band, full-bleed photograph bands, and a navy footer. Large vertical paddings are used between bands: 96px (7 elements), 72px (2), 48px (18) and 24px (3), which fit the 8, 12, 16, 24, 48, 72 and 96px spacing scale in the tokens. Content in the navy band sits in a narrow centered column in the capture. The generous white space is a feature: each screen carries one idea.

## Elevation & Depth

No box shadows were measured anywhere on the page, and no borders either. Depth is expressed through full-bleed photography and through color blocking between the white intro, the navy text band, the pale grey panels and the dark footer, so every layer reads as a flat plane stacked above or below the next.

## Shapes

No border radii were measured anywhere on the page, so the interface is sharp-cornered. The only curved shapes are inside imagery. The extraction's borderRadii list is empty, so the token file declares only rounded.none at 0px, to satisfy the required group, and records no other radius.

## Components

- footer: navy #212844 background with white text.
- Intro lockup: the logo (a faceted blue cube beside "PACE") with a descriptive line on each side, centered on white.
- Content band: navy with white 12px text in a narrow column.
- Photograph bands: full-bleed night skyline imagery.

The extractor found no buttons, forms or inputs on the page. Navigation links to the key properties and the DEAN & DELUCA portal were mentioned in the page text but were not visible in the capture.

## Design System Architecture

No public design system or brand guideline link was found. The site publishes a small custom-property set with a consistent naming scheme (--base-color--primary, --base-color--secondary, --base-color--grey, --base-color--dark, --base-color--light), plus --light-blue. That six-variable system is the de-facto palette: a navy, a light blue, two greys, black-ish and white.

## Do's and Don'ts

- Do keep the palette to navy #212844, white, #f8f8f8 and grey #666666, with #6daadb as an occasional light-blue accent.
- Do use full-bleed architectural photography at night or dusk to carry emotion.
- Do keep corners sharp; no radius was measured.
- Do keep body text small (12px) with generous vertical spacing (48px to 96px).
- Don't use the browser default blue #0000ee for links.
- Don't add shadows or rounded cards.
- Don't rely on invisible copy; ensure text on navy bands is readable at load.

## Responsive Behavior

At the 390px mobile pass only body text was recorded: 12px, unchanged from desktop. No H1 was found at mobile width. Other mobile layout behavior was not measured.

## Iteration Guide

1. White canvas, navy #212844 bands with white text, #f8f8f8 for secondary panels.
2. Cantarell at 12px/16px for body in #666666.
3. Space bands with 48px, 72px and 96px vertical padding.
4. Fill photograph bands edge to edge.
5. Keep every corner square and add no shadows.
6. Run `node web/scripts/verify-designs.mjs --slug=pace` after edits.

## Content and Imagery

Imagery is large-format architectural photography of Pace's developments seen from above and at dusk, with the NIMIT Lumpini Park North tower catching warm light against a deep blue sky. The page's copy, from the opened text, is composed of declarative company statements, a flagship project description ("a freehold residence overlooking Lumpini Park") financed with Bangkok Bank per the page, a profile of DEAN & DELUCA as a New York-founded gourmet brand with more than 40 years of heritage, and a signature developments list. The page's footer, per the opened text, lists the office at Kian Gwan Building 3, telephone (+66) 2-118-9599 and email info@pacedev.com. The voice is formal and understated: no prices, no promotions and no calls to action are visible.

## Brand Architecture on the Page

The company presents itself as an umbrella: development projects (NIMIT, MahaNakhon, The Ritz-Carlton Residences, WINDSHELL, MahaSamutR, SalaDaeng, Ficus Lane) and a lifestyle brand (DEAN & DELUCA). Each has its own identity and imagery, while the corporate site itself stays neutral so that the projects' photographs and names carry the premium positioning. The corporate logo uses a faceted cube in two blues beside a bold sans "PACE" wordmark in navy.

The two-blue logo and the deep navy are the cool colors of the page. Warm gold light in the photographs is the only warm element and comes from the buildings themselves rather than from interface color.
