---
version: alpha
name: THE LINE Studio
category: "Tech & AI"
description: "Animation studio in London with a loud, oversized-type look: DenimWeb in weights 300 to 500 from 8.9px captions to 155.6px headings with negative tracking, off-white #f8f8f8 and #dddee2 canvas, near-black #0b0b0b ink, signal red #ff391e and zero radii."
colors:
  canvas: "#f8f8f8"
  page-body: "#dddee2"
  ink: "#0b0b0b"
  primary: "#ff391e"
  brand-red-deep: "#ff0000"
typography:
  display:
    fontFamily: DenimWeb, sans-serif
    fontSize: 16.2963px
    fontWeight: 440
    lineHeight: 13.8519px
    letterSpacing: "-0.162963px"
    textTransform: uppercase
  display-mobile:
    fontFamily: DenimWeb, sans-serif
    fontSize: 46px
    fontWeight: 470
    lineHeight: 36.8px
    letterSpacing: "-1.38px"
    textTransform: uppercase
  heading:
    fontFamily: DenimWeb, sans-serif
    fontSize: 8.88883px
    fontWeight: 440
    lineHeight: 10.3706px
    letterSpacing: "-0.0888883px"
    textTransform: uppercase
  subheading:
    fontFamily: DenimWeb, sans-serif
    fontSize: 155.556px
    fontWeight: 500
    lineHeight: 124.444px
    letterSpacing: "-6.22222px"
  body:
    fontFamily: DenimWeb, sans-serif
    fontSize: 11.8519px
    fontWeight: 440
    lineHeight: 13.0371px
    letterSpacing: "-0.118519px"
  nav:
    fontFamily: DenimWeb, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  none: 0px
spacing:
  s1: 1.48px
  s2: 2px
  s3: 2.22px
  s4: 2.96px
  s5: 3.26px
  s6: 3.7px
  s7: 4.44px
  s8: 5.93px
  s9: 8px
  s10: 8.89px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.canvas}"
    padding: 0px 5.92589px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
    padding: 0px 0px 343px
---

## Overview

THE LINE Studio (thelinestudio.com, title "Animation Studio London | THE LINE Studio") is an animation studio in London. Its About page opened for this work says it began in 2013 as six animators and artists sharing a rented east London studio and has grown into a studio known for brand, music and entertainment work, listing categories Branded, Cinematics, Music Videos and Entertainment, and clients on the page including Gorillaz, Lil Nas X, Riot Games' True Damage, League of Legends, Blizzard and Marvel. The site credits Isaac Powell for site design and Thomas Aufresne for development.

The measured home page opens with a full-width red-tinted film still behind a giant blocky "THE LINE" logotype set in the pale grey `#e8e9ee`, a registered mark at its top right, a top strip of tiny uppercase information ("CLOSED (10-6PM)", "LONDON, ENGLAND", "INFO@THELINESTUDIO.COM"), and a nav row (HOME, WORK, ENTERTAINMENT, ABOUT, FEED, PODCAST, CONTACT, SHOP) with slash separators. Below the hero, a tilted white panel carries oversized lowercase headings ("Highlights", "The Studio") that run off the left edge of the screen. The voice is brash, tactile and editorial: huge type, cut-in angles and little decoration.

## Colors

All colours are measured on the page or in its stylesheet.

- Canvas `#f8f8f8` is the largest background area (6031) and the text colour of the nav over the hero.
- Page-body `#dddee2` is the body background role; a translucent `#dedfe3f2` variant covers 4239 of area weight.
- Ink `#0b0b0b` is the most-read text colour (1230 characters) and the only measured border colour.
- Primary `#ff391e` is the signal red used for the active nav item "HOME" (97 characters) and appears 40 times in the stylesheet.
- Brand-red-deep `#ff0000` (1311 area weight) is the red wash of the hero imagery.
- Stylesheet-only colours: `#e8e9ee` (10 uses, the logotype fill), `#ffffff`, `#000000`, `#0a0a0a66`, `#c9c9c999`.

The extractor read the active nav link "HOME" as the h1 because the page's visible headline is the logo image, so the `display` token documents the 16.2963px nav label rather than a hero headline. The visual headline scale is the `subheading` token at 155.556px.

## Typography

One family, DenimWeb (variable weights 300 to 800 loaded), carries 1446 characters. Measured weights are 440 (921 characters), 500 (204), 400 (150), 470 (141) and 300 (30).

- Display (nav label measured as h1): 16.2963px/13.8519px, weight 440, uppercase, -0.162963px tracking.
- Heading: 8.88883px/10.3706px, weight 440, uppercase, -0.0888883px; used for section kickers such as "/ ABOUT THE LINE".
- Subheading: 155.556px/124.444px, weight 500, -6.22222px; the giant section titles ("The Studio", "Let's Talk").
- Body: 11.8519px/13.0371px, weight 440, -0.118519px.
- Nav: 16px/16px, weight 400.
- Mobile display: 46px/36.8px, weight 470, -1.38px, uppercase.

Every measured size/tracking pair keeps tracking at exactly -0.01em for small text (e.g. 11.8519px with -0.118519px) and approaches -0.04em at large sizes (155.556px with -6.22222px). Headline line height is 0.8 of the font size (124.444 / 155.556). Font substitute: DenimWeb is a commercial variable face; a tight grotesque such as Inter Tight is a design substitute, not a measured value.

## Layout

The layout is full-bleed. The nav strip is 1280px wide, 16px tall with padding `0px 5.92589px`; contact and status details sit left of the nav in the same strip. Gaps are tiny (1.48px to 8.89px) and measured paddings include 5.92589px (20 times), 3.25926px, 29.6296px, 44.4444px, 47.4074px, 240px and a 343px bottom padding on the footer. The footer block is 1017px tall and repeats the 155.556px "Let's Talk" display type with a credits list. Large panels are tilted by a few degrees where they meet the hero.

## Elevation & Depth

No box shadows were measured. Depth comes from overlap: a skewed white panel slides over the red hero, the logo sits on the film still, and a translucent grey panel (`#dedfe3f2`) layers over backgrounds. Borders are used sparingly in `#0b0b0b` (9 occurrences).

## Shapes

`borderRadii` is empty in the extraction, so every rendered element computes a 0px radius and the rounded scale is `none: 0px`. The only curved shapes are in the imagery and in a round white cursor dot visible in the capture beside the nav (its radius was not measured, so it is not tokenised). Shapes are rectangular and angular; the cut-in tilt of panels is the geometric motif.

## Components

- Nav: transparent strip, text `#f8f8f8`, DenimWeb 8.88883px uppercase for status and 16px for links, slash separators between links.
- Nav link: `#f8f8f8` over the hero; active state red `#ff391e`.
- Link hover (measured): the email link "INFO@THELINESTUDIO.COM" goes from opacity 0 to opacity 1 with colour `rgb(248, 248, 248)` and no underline or shadow.
- Footer: ink `#0b0b0b` text, "Let's Talk" display heading, Credits list.
- Buttons, inputs and cards were not detected.

## Design System Architecture

No public design system or brand guideline was found. The pages opened are https://thelinestudio.com/ (extractor) and https://thelinestudio.com/about (fetched). The stylesheet exposes no custom properties (rootVars empty), so the de-facto system is a one-font, three-colour set (`#f8f8f8`, `#0b0b0b`, `#ff391e`) with non-integer type sizes: sizes such as 8.88883px, 11.8519px, 16.2963px and 155.556px are non-integer pixel values,. The stylesheet also lists sizes 25.6px, 19.2px, 64px, 38.4px, 32px and 86.4px.

## Do's and Don'ts

- Do make headlines enormous, tight (line-height 0.8) and let them bleed off the edge.
- Do keep one family (DenimWeb) and vary only size and weight (300 to 500).
- Do use red `#ff391e` only for the active state and imagery wash.
- Do keep all corners square.
- Don't add shadows, rounded buttons or gradients on UI.
- Don't set body above the measured 11.8519px on desktop without re-measuring.
- Don't colour long text in red.

## Responsive Behavior

Mobile (390px) measurements: display 46px on 36.8px, weight 470; body 16px; most-used mobile sizes 16px (602), 12px (348), 24px (197), 32px (89), 46px (48) and 34px (44). So small text grows from 11.8519px to 16px and the h1 label grows from 16.2963px to 46px. Layout order, menu pattern and image crops on mobile were not measured.

## Iteration Guide

1. Start with `#f8f8f8` and `#0b0b0b`; add `#ff391e` only for active state.
2. Set a 155.556px/124.444px headline at -6.22222px and check it bleeds past the viewport edge.
3. Use 8.88883px uppercase DenimWeb for kickers.
4. Keep radii at 0px.
5. Gate: `node web/scripts/verify-designs.mjs --slug=thelinestudio-com`.

### Measured reference

All figures in this block are verbatim from the desktop extraction (weight in parentheses is the measured character, area or occurrence weight).

- Font families by characters: DenimWeb (1446).
- Font sizes by characters: 11.8519px (602), 8.88883px (393), 20.7407px (150), 29.6296px (89), 23.7037px (61), 16.2963px (55), 71.1112px (44), 155.556px (36), 8px (12), 94.8148px (4).
- Font weights by characters: 440 (921), 500 (204), 400 (150), 470 (141), 300 (30).
- Letter spacing by size: 11.8519px/-0.118519px (602), 8.88883px/-0.0888883px (393), 20.7407px/-0.207407px (150), 29.6296px/-0.888887px (89), 23.7037px/-0.237037px (61), 16.2963px/-0.162963px (55), 71.1112px/-2.84445px (44), 155.556px/-6.22222px (36), 8px/-0.08px (12), 94.8148px/-2.84445px (4).
- Text colours by characters: #0b0b0b (1230), #f8f8f8 (119), #ff391e (97).
- Background colours by area: #f8f8f8 (6031), #dedfe3f2 (4239), #ff0000 (1311), #0b0b0b (906), #dddee2 (512).
- Border radii: none recorded.
- Box shadows: none recorded.
- Border colours: #0b0b0b (9).
- Gaps: 3.70368px (9), 5.92589px (5), 1.48147px (2), 2.96294px (2), 2px (1), 26.6666px (1), 26px (1), 4.44442px (1), 9.48147px (1), 2.22221px (1), 157.037px (1), 8px (1).
- Paddings: 5.92589px (20), 3.25926px (7), 29.6296px (3), 16.2963px (1), 44.4444px (1), 47.4074px (1), 11.1112px (1), 240px (1), 4.44442px (1), 8.88883px (1), 222.222px (1), 10.3704px (1).
- Stylesheet colours by count: #f8f8f8 (105), #ff391e (40), #0b0b0b (24), #dddee2 (13), #e8e9ee (10), #ffffff (4), #000000 (3), #dedfe3f2 (2), #0a0a0a66 (2), #c9c9c999 (1), #f7f7f703 (1), #e8e9eef2 (1), #f7f7f7f2 (1).
- Stylesheet font sizes: 25.6px, 19.2px, 64px, 38.4px, 32px, 86.4px, 54.4px, 28.8px, 73.6px, 12.8px, 102.4px, 22.4px, 16px, 115.2px.
- Stylesheet radii: 64px.
- Fonts loaded: DenimWeb 300 800 normal.
- Visible elements: 437; document language: en-GB; hover states recorded: 1.
