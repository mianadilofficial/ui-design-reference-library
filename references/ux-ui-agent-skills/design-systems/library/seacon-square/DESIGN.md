---
version: alpha
name: Seacon Square
category: "Thai Brands"
description: "Design language of the Seacon Square shopping center website: a white canvas with black headings, white text on translucent bars and #959595 captions, a translucent black header, Red Hat Display 700 uppercase for the giant SEACON hero word, Roboto with Mitr as the Thai companion for everything else, full-pill controls (100px radius), with event posters and photography doing nearly all of the colour work."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  surface-soft: "#f5f5f5"
  secondary: "#f37c4b"
  ink-muted: "#959595"
  nav-bg: "#00000080"
typography:
  display:
    fontFamily: "\"Red Hat Display\", Kanit, sans-serif"
    fontSize: 199.897px
    fontWeight: 700
    lineHeight: 174.91px
    letterSpacing: "-1.99897px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Roboto, Mitr, sans-serif
    fontSize: 32.3113px
    fontWeight: 600
    lineHeight: 38.7735px
  heading:
    fontFamily: Roboto, Mitr, sans-serif
    fontSize: 50.745px
    fontWeight: 600
    lineHeight: 60.894px
  nav:
    fontFamily: Roboto, Mitr, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
  link:
    fontFamily: Roboto, Mitr, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 16px
rounded:
  round: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 30px
components:
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
---

## Overview

Seacon Square is the website of a shopping center on Srinakarin Road in eastern Bangkok. Its own About page describes it as a "Lifestyle Hub" blending shopping, learning, art and entertainment, operating since September 1994, with an in-house creative team called Smood Creation. The site mirrors that positioning: it is not a catalogue of shops first but an events and culture feed. The top navigation reads What's Happening, Shop by Brand, Privilege and News and Activities, with About Us, Careers and Contact Us in a smaller utility row above, plus a language switch (TH, with English and Chinese available).

Visually the page is a neutral stage. The canvas is white (#ffffff), headings and the footer use pure black (#000000), text on white is black and captions and secondary labels use a mid-grey (#959595). Because the colour palette is so quiet, colour arrives from the content: full-bleed photography of the building and its play areas, and event posters in pink, black, gold and multicolour illustration that sit edge to edge in a tight grid. The design therefore behaves like a gallery wall; the chrome never competes with the posters.

The one chromatic UI colour found in the site's CSS is an orange, #f37c4b, declared in its root variables as the secondary colour and measured on the orange "see all" pill and arrow button beside the What's Happening heading. It is used sparingly. Everything else is greyscale, which is why the system reads as editorial rather than promotional.

## Colors

- **Canvas #ffffff**: the page background behind text sections such as the What's Happening heading.
- **Primary #000000**: headings, link text on white, and the footer background. There is no filled primary button on the measured homepage, so "primary" here is the same black as ink, not a CTA fill.
- **Ink #000000**: the readable text colour on white, used for the What's Happening heading. On the re-measured page the most-read colours are white (on the dark header and imagery), #959595 and #000000. The site's variables also declare a darker grey as its main text colour, but it is not among the measured most-read colours, so it is not a token.
- **Ink-muted #959595**: measured as the second most-read text colour and declared as the muted text colour for captions and secondary labels.
- **Surface-soft #f5f5f5**: a light-grey panel tone declared in the site's neutral scale.
- **Secondary #f37c4b**: the declared secondary colour, a warm orange. Treat it as an accent for small highlights, never as a large fill.
- **Nav-bg #00000080**: the header is black at 50% opacity laid over the hero imagery, with white (#ffffff) link text.

The site's CSS also carries Bootstrap's default variable set; those Bootstrap blues and greens are framework defaults and are not part of the brand palette. Status colours the site declares itself are a success green (#009D50), a warning yellow (#FED322) and a danger red (#E82631); use them for form feedback only.

## Typography

Two families split the job. The giant hero word SEACON is set in Red Hat Display, weight 700, uppercase, at 199.897px with a 174.91px line height and -1.99897px tracking, with Kanit next in the font stack. Everything else uses Roboto with Mitr as the Thai companion: section headings such as What's Happening at 50.745px weight 600 and 60.894px line height; navigation at 14px weight 400; inline links at 16px weight 300. On a 390px phone the heading role drops to 32.3113px weight 600 with a 38.7735px line height.

The tight negative tracking and sub-1 line height on the display word make it a graphic element rather than a headline to read. Section headings are plain sentence case with an apostrophe (What's Happening), black on white. Navigation labels are uppercase in the capture. Mitr is the second family in the Roboto stack, so Thai text is set in Mitr alongside the Latin Roboto.

Font substitutes: Red Hat Display and Roboto are open-source families. If they are unavailable use a geometric sans at weight 700 for display and the system sans at 400 for body; for Thai, Kanit or Mitr are both open families.

## Layout

The page is a vertical stack of full-width bands. A hero image carousel sits directly under the 100px-tall translucent header; below it a white band carries the section heading; then edge-to-edge poster tiles in a mosaic of mixed widths with almost no gutter; then another large dark photograph. Content is left-aligned with a small page margin. The site is built on Bootstrap's grid, whose breakpoints it declares as 992px (lg), 1200px (xl) and 1400px (xxl).

The measured spacing scale is 1px, 5px, 6px, 8px, 10px, 12px, 15px, 16px, 20px and 30px. Small values handle icon and label gaps in the header, and 30px is the largest recurring measured gap. Section separation is created mainly by image blocks and the white heading band rather than by rules or dividers.

## Elevation & Depth

Depth is minimal and mostly translucency. The header is a 50%-black layer over imagery. The one measured shadow is rgba(0, 0, 0, 0.08) 0px 2px 4px 0px, a soft, low-contrast lift. The site declares three shadow tokens in its CSS: a small 0 2px 4px at 8% black (the measured one), a medium 0 4px 12px at 16% black and a large 0 12px 24px at 24% black. Motion uses custom easing curves declared as variables, including a bouncy cubic-bezier(.34, 1.42, .64, 1) and a smooth cubic-bezier(.32, .72, 0, 1).

## Shapes

Two pill radii are tokens: 100px (measured on the orange pill controls) and 9999px, with 50% measured on circular carousel arrow buttons. The site's own variables declare an 8px small radius, a 16px medium radius, a 32px large radius and a 50% circle radius. Poster tiles themselves are square-cornered rectangles; rounding is reserved for floating UI (pills, circular icon buttons) so the artwork stays untouched.

## Components

- **Header**: two rows. Top utility row has social icons (Facebook, Instagram, X, TikTok, YouTube, LINE) on the left and About Us, Careers, Contact Us, a search icon and the language switch on the right at 14px. The second row has the SEACON SQUARE logo and the four main links in white on the translucent black bar.
- **Link**: 16px weight 300, black on white, used for "read more" style links.
- **Carousel controls**: circular white arrow buttons and a slide counter (2 / 4) at the lower right of the hero.
- **Poster tile**: an image tile; the event title lives inside the artwork itself.
- **Footer**: black (#000000) with white text.

The refreshed capture shows the page without a cookie dialog covering it. The measured homepage exposes no primary button.

## Design System Architecture

No public design system or brand guideline is published by Seacon Square that I opened; the About page at https://www.seaconsquare.com/about-us describes the business, not the visual system. The de-facto system is visible in shipped CSS: Bootstrap 5 variables (--bs-*) form the base, overlaid by a small custom layer of semantic variables: --color-neutral-100 (#fff), --color-neutral-200 (#f5f5f5), --color-neutral-300 (#EFEFEF), --color-neutral-600 (#959595), --color-neutral-900, --text-main and --text-muted pointing at those, --color-secondary (#F37C4B), --radius-sm/md/lg/circle, --shadow-sm/md/lg, and three easing curves. Swiper's theme variable is also present, indicating a Swiper carousel. Source for site facts: https://www.seaconsquare.com/.

## Do's and Don'ts

- Do keep chrome greyscale and let posters and photography provide colour.
- Do use black #000000 for headings and Roboto weight 600 for section titles.
- Do use a translucent layer (50% black header) over imagery.
- Do reserve rounded corners for floating UI and keep poster artwork square.
- Don't fill large areas with the orange #f37c4b; keep it a small accent.
- Don't use Bootstrap's default blue as a brand colour.
- Don't invent a filled primary button; none was measured.
- Don't use #959595 for headings; it is the caption colour.

## Responsive Behavior

The layout is Bootstrap-based with breakpoints at 992px, 1200px and 1400px. The desktop capture is 1280px wide. The mobile capture was measured only for the heading role; other responsive behaviour (menu collapse, tile stacking) was not measured and is not documented here. The desktop header link measured 40px tall.

## Iteration Guide

1. Start from white and black; add #959595 for captions.
2. Choose the display word's size deliberately: 199.897px only on desktop hero, 32.3113px role on mobile.
3. Add one image band per section and keep tiles edge to edge.
4. Introduce #f37c4b only after the layout works in greyscale.
5. When adding components, reuse the 100px pill radius and the 0 2px 4px 8% black shadow.
6. Check that every text colour on #ffffff is #959595 or darker.
7. Re-measure the live site before changing any number; values above come from the extraction, not from design intent.
