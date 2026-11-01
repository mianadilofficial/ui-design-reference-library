---
version: alpha
name: "Roland"
category: "Music & Audio"
description: "Roland Global site (roland.com/global): #141414 and #000000 dark navigation and footer, a #ff5a00 orange logo tile and accent, proxima-nova in light 300 weight at 13px for body and 80px for the hero title, uppercase 18px labels, #e5e5e5 grey bands, and a pill search field with 37.5px radius."
colors:
  canvas: "#ffffff"
  page-body: "#e5e5e5"
  ink: "#000000"
  primary: "#ff5a00"
  surface: "#141414"
  ink-2: "#999999"
  ink-3: "#808080"
  ink-5: "#131313"
  ink-6: "#666666"
typography:
  display:
    fontFamily: proxima-nova, sans-serif
    fontSize: 80px
    fontWeight: 400
    lineHeight: 80px
  display-mobile:
    fontFamily: proxima-nova, sans-serif
    fontSize: 35px
    fontWeight: 400
    lineHeight: 35px
  heading:
    fontFamily: proxima-nova, sans-serif
    fontSize: 18px
    fontWeight: 300
    lineHeight: 18px
    textTransform: uppercase
  subheading:
    fontFamily: proxima-nova, sans-serif
    fontSize: 15px
    fontWeight: 300
    lineHeight: 15px
    textTransform: uppercase
  body:
    fontFamily: proxima-nova, sans-serif
    fontSize: 13px
    fontWeight: 300
    lineHeight: 18.5px
  nav:
    fontFamily: proxima-nova, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  input:
    fontFamily: proxima-nova, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
rounded:
  xs: 12px
  sm: 29.5px
  md: 37.5px
spacing:
  s1: 3.9px
  s2: 8px
  s3: 15px
  s4: 19px
  s5: 20px
  s6: 21px
  s7: 25px
  s8: 29px
  s9: 30px
  s10: 46px
components:
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 22px
  footer:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink-2}"
---

## Overview

Roland (title "Roland - Global", roland.com/global/) is the instrument maker's international site. The capture shows a black navigation bar with an orange tile at the left holding the white Roland logotype, followed by thin uppercase links (Products, Community, Support, Articles, IR, Sustainability, Company), an account icon and a rounded white search field. A full-width hero slideshow, here "V-Drums 5 Series" over a photograph of an electronic drum kit in a brick-walled studio, has arrow controls at both edges, nine pager dots (the active one orange) and a black "EXPLORE" button with an orange chevron at the lower right. The measured h1 text is "FP-40 with Piano Sphere / Play. Discover." from another slide.

Below the hero the page is a stack of three-column carousels, each a row of cards over a thin divider: "Featured Product" (Roland New Products, GO:KEYS 3, JUPITER-X), "Featured Video" (In the Moment with Reuben James and V-STAGE, SH-4d Desktop Synthesizer | Carl Craig Performance, GP-6 Baby Grand Piano Performance) and "Looking For" (The Future. Redefined., Piano AR, AI for Music). Every card has the same structure: an image, a bold label, a grey title, a paragraph of about three lines and a "FIND OUT MORE" link with a small black arrow square. The voice is informative and product-descriptive, written in full sentences with product names in capitals and model numbers. Web research was unavailable (see SOURCES.json).

## Colors

- surface #141414 is the largest background by area (1464) and fills the footer; #000000 (346) fills the top navigation bar. ink #000000 is also the main text colour on light areas (2205 characters).
- primary #ff5a00 is Roland orange: the logo tile (516 area weight), the "PIANOS" link-label fill and the active pager dot; text in that colour was measured on 42 characters.
- page-body #e5e5e5 is the light grey page and band background (192 area weight); canvas #ffffff is the generated canvas (3 area weight), used for text on dark areas and the search field.
- ink-2 #999999 (907 characters), ink-3 #808080 (363) and ink-6 #666666 (64) are the grey scale for titles and descriptive text; ink-5 #131313 (93) is a near-black. #cccccc (63 characters, 3 borders) is a light grey used on dividers.

Because most text sits on a light surface in grey tints, the contrast between the black navigation, the orange tile and the pale grey page is the main colour structure.

## Typography

proxima-nova (loaded in weights 100 to 900) sets all 4026 measured characters; univia-pro is also loaded (weights 100 to 900) but accounts for no measured characters. The fallback is sans-serif.

- display: 80px, weight 400, line-height 80px (mobile 35px).
- heading: 18px, weight 300, line-height 18px, uppercase; subheading: 15px, weight 300, line-height 15px, uppercase.
- body: 13px, weight 300, line-height 18.5px.
- nav: 20px, weight 400, line-height 30px (slideshow arrows); input: 12px, weight 400.

Sizes by characters: 13px (3257), 16px (252), 14px (164), 18px (142), 24px (68), 15px (55), 80px (50), 12px (21), 20px (17). The 13px light body text is the dominant voice, so the page reads as small and refined, with the 80px slideshow title as the only large type. Proxima Nova is a commercial typeface; Montserrat or Arial are visual stand-ins only if the licence is unavailable.

## Layout

The page is 1280px wide and 4205px tall. The navigation bar is full width and the hero fills the viewport width; below it the content sits in a centred container with side arrow controls at the left and right edges of every carousel row. Rows are three equal columns separated by narrow gutters and divided by a hairline. Spacing tokens: 3.9px, 8px, 15px, 19px, 20px, 21px, 25px, 29px, 30px, 46px. The search input is 22px high.

## Elevation & Depth

Only one shadow was measured, an inset rgba(0, 0, 0, 0.4) 3px 3px 8px 0px on the search field, which makes it look recessed. Everything else is flat: imagery carries the visual weight, with text blocks in plain grey below each image and no card borders. Navigation items are separated by thin vertical dividers.

## Shapes

Mostly square: images, buttons and cards compute 0px radius. Radii appear on the search field (37.5px, 4 elements, a pill), 29.5px (1) and 12px (1). Tokens: xs 12px, sm 29.5px, md 37.5px. The "EXPLORE" button and arrow controls in the capture are square black blocks with a white or orange chevron.

## Components

- Navigation: #000000 bar, thin uppercase white-grey links at 20px in the generated nav-link typography, divider lines between items, and an orange logo tile.
- Search field: white pill with a magnifier icon, inset shadow, 12px input text, 22px high.
- Hero slideshow: full-width photograph with a large white title, arrow controls and a pager of small dots (active orange).
- Link label ("PIANOS"): uppercase 18px weight 300 white text on an #ff5a00 fill.
- Explore button: black block with white uppercase label and an orange chevron.
- Content card: image, bold "Featured Product" or similar overline, grey title, paragraph and a "FIND OUT MORE" link with a black square arrow icon.
- Video card: same structure with a centred circular play button over the image.
- Footer: #141414 background with #999999 text.

## Design System Architecture

No public design system or brand guideline was opened, and the extraction recorded an empty rootVars object, so the page exposes no CSS custom properties on the root. The de-facto system is the measured one: proxima-nova in light and regular weights, a black, orange and grey palette, square geometry with one pill field, and a repeating three-column card module (image, overline, title, paragraph, link) that is reused for products, videos and campaign stories. The univia-pro family is loaded and may belong to Roland's wider brand system, but it was not measured on text.

## Do's and Don'ts

Do:
- Keep body copy at 13px weight 300 and titles in grey tints.
- Use #ff5a00 only for the logo tile, active states and small labels.
- Keep controls square and use the pill only for search.
- Present every story as image plus overline, title, paragraph and a "FIND OUT MORE" link.

Don't:
- Do not add large radii or drop shadows; one inset shadow on the search field was the only one measured.
- Do not use bold weights for body text.
- Do not use orange as a large background beyond the logo tile and labels.
- Do not treat the slideshow dots and arrows as brand typography.

## Responsive Behavior

On the 390px mobile pass the display size is 35px (desktop 80px). The mobile size distribution is 13px (1610 characters), 15px (197), 35px (36), 14px (36), 12px (21) and 20px (9): body text stays at 13px. Layout changes, column counts and menu behaviour were not measured.

## Iteration Guide

1. Build the frame with {colors.surface} for the footer, black navigation and {colors.page-body} for light bands.
2. Use {colors.primary} sparingly for brand tile, link labels and active dots.
3. Body {typography.body}; overlines {typography.heading} and {typography.subheading}; hero {typography.display}.
4. Keep corners square and use {rounded.md} only for search.
5. Validate with `node web/scripts/verify-designs.mjs --slug=roland`.

## Content and imagery

Photography is product-in-use and performer-centred: a drum kit in a studio, a keyboard being played from above on a vinyl-strewn desk, a synthesizer on a dark reflective surface, a pianist on stage lit in red, a producer at a desk in front of green light panels, and a grand piano in a loft. Campaign tiles use graphic cards (a deep teal "THE FUTURE. REDEFINED." wordmark, a black "aiformusic" tile) alongside product images. Descriptions name specific features (ZEN-Core sounds, auto-accompaniment, onboard recording) and dates, and ordinal overlines (Featured Product, Featured Video, Looking For) classify every card.
