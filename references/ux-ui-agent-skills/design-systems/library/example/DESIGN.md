---
version: alpha
name: Example
category: "Food & Beverage"
description: "Example (weareexample.com), a Sydney and Dubai brand strategy, design and PR agency for hospitality and consumer brands. A warm off-white canvas #f3f3f0, near-black navy ink #0e1623, American Grotesk Compressed at weight 900 in uppercase up to 182.4px, American Grotesk for body, a 6.4px radius on imagery."
colors:
  canvas: "#f3f3f0"
  page-largest: "#f8f8ef"
  ink: "#0e1623"
  primary: "#0e1623"
  ink-grey: "#16181b"
  white: "#ffffff"
  text-input-bg: "#0000000d"
  brand-violet: "#7957ff"
  brand-lime: "#d9e45a"
  brand-pink: "#f4c7eb"
  dark-secondary: "#3f2b88"
typography:
  display:
    fontFamily: "\"American Grotesk Compressed\", Arial, sans-serif"
    fontSize: 182.4px
    fontWeight: 900
    lineHeight: 145.92px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"American Grotesk Compressed\", Arial, sans-serif"
    fontSize: 23.4px
    fontWeight: 900
    lineHeight: 24.57px
    textTransform: uppercase
  heading:
    fontFamily: "\"American Grotesk\", Arial, sans-serif"
    fontSize: 19.2px
    fontWeight: 400
    lineHeight: 22.08px
    letterSpacing: "-0.576px"
  subheading:
    fontFamily: "\"American Grotesk Compressed\", Arial, sans-serif"
    fontSize: 64px
    fontWeight: 900
    lineHeight: 51.2px
    textTransform: uppercase
  body:
    fontFamily: "\"American Grotesk\", Arial, sans-serif"
    fontSize: 15.36px
    fontWeight: 500
    lineHeight: 15.36px
    letterSpacing: "-0.552px"
  link:
    fontFamily: "\"American Grotesk Compressed\", Arial, sans-serif"
    fontSize: 17.92px
    fontWeight: 900
    lineHeight: 18.816px
    textTransform: uppercase
  input:
    fontFamily: "\"American Grotesk\", Arial, sans-serif"
    fontSize: 14.08px
    fontWeight: 400
    lineHeight: 20.1143px
    letterSpacing: "-0.4224px"
rounded:
  xs: 6.4px
spacing:
  s1: 2.56px
  s2: 6.4px
  s3: 8px
  s4: 12px
  s5: 12.8px
  s6: 15.36px
  s7: 16px
  s8: 17.92px
  s9: 19.2px
  s10: 24px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 0px 0px 0px 17.92px
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 8px 12px
    height: 45px
---

## Overview

Example is the working name and the page title ("We Are Example | Brand Strategy, PR & Placemaking Agency | Sydney & Dubai") of an agency that describes itself on the home page as "Brand Strategy, Design and PR for Hospitality, F&B and consumer brands across Australia, The Middle East & Asia Pacific". The hero line is "We make brands and places famous". The site is a portfolio and pitch page, so the design is built around one idea: a very large, very tight, uppercase compressed headline set against a quiet warm-grey canvas, with photographs doing all of the colour work.

The capture shows a three-part rhythm. First the wordmark "EXAMPLE" in the top-left, three short nav links (Home, About, What We Do) in the centre and an email address in uppercase compressed type on the right. Second the hero headline across the whole width, with two slightly rotated photographic prints overlapping the letters like pinned polaroids. Third a full-width rounded photograph carousel with a counter ("02/03") and a giant word ("HOSPITALITY") sliding across the image in off-white. Below that a short caption pair, "We are Example" in compressed caps and "We Make Brands and Places Famous" in a light editorial serif, then asymmetric project images.

The measured page is overwhelmingly two colours: the navy ink #0e1623 on the canvas #f3f3f0. Most-read text colour by character count is #0e1623 (2171 characters) followed by #f3f3f0 (1618 characters, the text laid over photographs and the dark panel). There is no filled primary button on the home page, so `primary` equals the ink colour: the brand's action colour is simply the text colour, and calls to action are text links with a small arrow glyph.

## Colors

The palette is neutral by design so agency work can carry the colour.

- Canvas `#f3f3f0` is the body background and the largest-area flat colour at the top of the page. The measured page-largest background `#f8f8ef` is the slightly yellower cream of the section under the carousel (it has the greatest background area weight, 2048).
- Ink `#0e1623` is a dark navy rather than pure black and is used for the headline, nav, body copy and links.
- Ink grey `#16181b` is a measured dark background area (weight 1024), the dark panel colour used behind the image carousel.
- White `#ffffff` is present as a small background area (weight 104).
- Text-input fill `#0000000d` is black at 5% opacity, the fill of the one measured form field.
- Four swatches are declared as CSS custom properties on the site: brand-1 `#7957ff` (violet), brand-2 `#d9e45a` (lime), brand-3 `#f4c7eb` (pink) and dark-secondary `#3f2b88` (deep purple). They exist in the shipped stylesheet as named swatches next to `example-canvas`, `example-ink` and `example-ink-grey`; the measured home page does not render them as large areas, so treat them as the brand's reserve accent set rather than home page colours.
- A translucent black overlay `#00000026` (15% black) covers a large area over photography to hold light text legible.

Pairing rule from the measurements: dark navy text on the warm canvas, and the canvas colour as text on dark or photographic areas. No gradients are measured.

## Typography

Two families from the same foundry-style superfamily plus one editorial face, all measured as loaded fonts: American Grotesk (weights 300, 400, 500), American Grotesk Compressed (weight 900) and Ppeditorialnew (weight 200). The fallback stack in the CSS is Arial, sans-serif. These are commercial typefaces; if they are not licensed, Arial is the declared fallback in the site's own stack, and a condensed heavy grotesque such as Oswald or Barlow Condensed (not measured, a substitution suggestion only) would approximate the compressed display.

Scale (desktop, 1280px viewport):

- Display: American Grotesk Compressed 900, 182.4px on 145.92px line height (a line-height ratio of 0.8), uppercase, used for the hero headline "WE MAKE BRANDS AND PLACES FAMOUS".
- Subheading: the same compressed face at 64px on 51.2px, uppercase, for section titles such as "FOR EXAMPLE".
- Link: compressed 900 at 17.92px on 18.816px, uppercase, with 17.92px of left padding to make room for an arrow glyph ("WHAT WE DO").
- Heading: American Grotesk 400 at 19.2px on 22.08px with letter spacing -0.576px, used for the descriptor under the hero.
- Body: American Grotesk 500 at 15.36px on 15.36px, letter spacing -0.552px.
- Input: American Grotesk 400 at 14.08px on 20.1143px, letter spacing -0.4224px.

The body copy is tracked negatively and set with a line height equal to its size in this measurement, which gives a dense editorial texture. Headline leading is tighter than the type size. Use uppercase only for the compressed face; the grotesque stays in sentence case.

## Layout

The home page is a single long scroll. The measured grid has a full-width hero where the headline spans edge to edge, with a narrow right column (about 330px wide for the body paragraph, measured as the body text box) holding the descriptor and the "What We Do" link. Photographs sit full-bleed or in staggered asymmetric pairs, one narrow and one wide, rather than on a regular column grid. Spacing values measured on the site run on a small scale: 2.56, 6.4, 8, 12, 12.8, 15.36, 16, 17.92, 19.2 and 24px. Vertical gaps between sections are large and mostly empty; the capture shows a tall blank band between the caption and the first project images. Navigation is a three-column row: wordmark left, links centred, email right.

## Elevation & Depth

No box shadows are measured on any role (the extracted `boxShadow` for link, input and heading is none). Depth comes from three things: overlapping, slightly rotated photographs layered over the headline; a translucent black scrim over carousel photography; and the contrast between the dark `#16181b` panel and the cream canvas. There are no borders on the measured components.

## Shapes

Corners are almost square. The single measured radius is 6.4px, which the capture shows on the large carousel photograph and project images; text links and the input have a 0px radius. The two hero photographs are drawn as tilted print-like cards with a white margin, which reads as a physical object rather than a rounded UI card. Icons are minimal: a small corner arrow beside links.

## Components

- Link (the call to action): compressed uppercase 900 at 17.92px, ink colour, 17.92px of left padding that holds an arrow image; a pseudo-element shape on the link is also measured. On hover the measured opacity goes from 1 to 0.8 for nav links (Home, About).
- Nav: plain text links, no fill, no border, ink colour.
- Text input: 45px high, fill `#0000000d`, padding 8px 12px, radius 0px, Grotesk 14.08px. It is the only form control measured.
- Carousel: a counter reading "02/03" and a progress line under the image; the giant overlay word uses the canvas colour on the photograph.
- There is no button-primary: the extractor found no primary CTA with a fill, so no such token is declared.

## Design System Architecture

No public design system or brand guideline was found: the home page links to no design-system, brand-guideline, press-kit or GitHub pages (the page at https://www.weareexample.com/ was opened and searched for such links). The de-facto system is visible in the shipped CSS: it is a Webflow-hosted site (assets come from cdn.prod.website-files.com) whose root variables carry Webflow variable names, for example `--swatch--example-canvas`, `--swatch--example-ink`, `--swatch--example-ink-grey`, `--_responsive---font-size--h2: 8vw`, `--_responsive---font-size--h4: 4vw`, `--_responsive---font-size--link_button: 1.4vw` and `--_theme---color`. Font sizes are therefore declared in viewport-width units, which explains why the measured display size is 182.4px at 1280px wide (a vw-scaled value) and 23.4px for the nav-level h1 on the mobile pass. Colours are named swatches; themes are applied through `--_theme---*` variables, so the site supports swapping text, button and background colours per section.

## Do's and Don'ts

Do:
- Set headlines in the compressed face at weight 900, uppercase, with line height near 0.8 of the size.
- Keep the canvas `#f3f3f0` and ink `#0e1623` as the base pair and let photographs bring colour.
- Use text links with an arrow instead of filled buttons.
- Overlay photographs with large type in the canvas colour.

Don't:
- Add drop shadows; none are measured.
- Round the inputs or links; only large imagery has the 6.4px radius.
- Use the violet, lime or pink swatches as large page areas on the home page; they are not measured as such.
- Use sentence case for the compressed display type.

## Responsive Behavior

Measured with the extractor's 390px mobile pass: the h1 role (the "WHAT WE DO" link) is 23.4px at weight 900 on 24.57px, uppercase; the large headline measured on mobile (h2 role) is 109.2px compressed 900 on 87.36px line height; body text is American Grotesk 16px weight 400. Mobile gaps in font sizes by character count include 15.6px, 18.4px, 16px, 31.2px and 97.5px. Layout changes at mobile width (menu behaviour, column order, image arrangement) are not measured. The font sizes are declared in vw units in the stylesheet (`--_responsive---font-size--h2: 8vw`), which is the stylesheet's own mechanism for scaling.

## Iteration Guide

1. Start from the pair `canvas` #f3f3f0 and `ink` #0e1623 and set everything else as photography.
2. Build the headline first: compressed 900, uppercase, line height 0.8 of size, as wide as the viewport allows.
3. Add the descriptor in American Grotesk 19.2px with -0.576px tracking in a narrow right column.
4. Add links as uppercase compressed 17.92px with an arrow.
5. Use the 6.4px radius only on photographs; keep everything else square.
6. Re-measure with `node web/scripts/extract-tokens.mjs --slug=example --url=https://www.weareexample.com/ --force --no-motion` before changing any number, and run `node web/scripts/verify-designs.mjs --slug=example`.
