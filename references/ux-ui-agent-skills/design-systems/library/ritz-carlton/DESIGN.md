---
version: alpha
name: "The Ritz-Carlton"
category: "Travel & Hospitality"
description: "The Ritz-Carlton luxury hotels site: white canvas and #e9f1fa pale blue bands, #1c1c1c square-cornered buttons with 13px Swiss-721 bold labels, Caslon540Std serif headings and body at 18px, 12px uppercase navigation with 1.3px tracking, and thin #916e27 gold rules."
colors:
  canvas: "#ffffff"
  ink: "#1c1c1c"
  primary: "#1c1c1c"
  on-primary: "#ffffff"
  surface-2: "#e9f1fa"
  ink-3: "#bfbfbf"
  ink-4: "#000000"
  accent-gold: "#916e27"
typography:
  display:
    fontFamily: Swiss-721
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  display-mobile:
    fontFamily: Caslon540Std
    fontSize: 28px
    fontWeight: 400
    lineHeight: 31px
  body:
    fontFamily: Caslon540Std
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: Swiss-721
    fontSize: 13px
    fontWeight: 700
    lineHeight: 16px
  nav:
    fontFamily: Swiss-721
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 1.3px
    textTransform: uppercase
  input:
    fontFamily: Swiss-721
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 22px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 16px
  s8: 24px
  s9: 32px
  s10: 64px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 16px 32px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 16px 32px
    height: 53px
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 16px 0px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 1px 20px 16px 0px
    height: 42px
---

## Overview

The Ritz-Carlton (title "The Ritz-Carlton - Luxury Hotels & Resorts", ritzcarlton.com) is the luxury hotel brand's global site. The capture shows a white header with the lion crest and the serif wordmark "THE RITZ-CARLTON", an "English" language selector and an outlined "Sign in or Join" button; beneath it a second bar of six uppercase links (Hotels & Resorts, Ritz-Carlton Reserve, Residences, Yachts, About the Ritz-Carlton, Immersions) and a dark "Reserve Now" button. A video panel (an aerial view of a yacht on dark water, with standard player controls) leads into a booking row: Destination ("Where can we take you?"), dates (Fri, Oct 9 to Sat, Oct 10, 1 night) and a dark "Find Hotels" button.

The editorial section follows: a serif statement "Journey into a world where wonders await around every corner. Welcome to the world according to The Ritz-Carlton." set on a faint geometric line pattern, next to a tall portrait photograph of a woman among tropical foliage. A pale blue band titled "Where To Go Next / FEATURED HOTELS" (an italic serif line over an uppercase serif line) holds a hotel carousel: an interior photograph of a dining room overlapped by a white card with a gold hairline frame, the label "LONE STAR LUXURY", the title "The Ritz-Carlton, Dallas", a sentence ("A Forbes Five-Star landmark in Uptown Dallas, known for bold dining and warm hospitality.") and an underlined "Explore More" link, with Previous and Next controls and a "1 / 7" counter. The tone is formal and evocative: long serif sentences, sparing uppercase labels.

## Colors

- canvas #ffffff is the page background (3651 area weight); surface-2 #e9f1fa (2276) is the pale blue band behind featured hotels.
- ink #1c1c1c is the main text colour (3058 characters) and also the primary button fill; white on-primary text (1024 characters) is used on those buttons and over imagery. #151b17 (520 area weight) is a near-black green-black used in dark media areas.
- ink-3 #bfbfbf is a light grey (20 characters) and ink-4 #000000 appears in 12 characters.
- accent-gold #916e27 is the gold used for border rules (3 uses), seen in the capture on the card frame, the destination and date icons and the carousel progress marker.

Overlays recorded in the background list (#ffffffd9, #00000099, #73859f80) are translucent layers over media and are not tokens.

## Typography

Three families: Caslon540Std (2762 characters; body and headings, with a 500 italic loaded), Swiss-721 (1251 characters; interface labels in 500 and 700 weights) and Arial (101 characters). Icon fonts MiIcons and BrandLogoIcons and VideoJS are loaded.

- body: Caslon540Std 18px, weight 400, line-height 27px.
- display-mobile: Caslon540Std 28px, line-height 31px.
- display (generated): Swiss-721 16px, weight 400, line-height 24px, which is the "English" selector the extractor picked as h1; actual headings are Caslon540Std, with sizes 40px and 60px measured elsewhere on the page.
- button: Swiss-721 13px, weight 700, line-height 16px.
- nav: Swiss-721 12px, uppercase, letter-spacing 1.3px.
- input: Swiss-721 16px, weight 500, line-height 24px.

By characters: 18px (2036), 16px (808), 24px (360), 12px (324), 40px (266), 10px (101), 60px (88), 13px (83), 30px (48). Caslon 540 is a licensed face; a classic old-style serif such as Libre Caslon is a visual substitute. Swiss 721 is a Helvetica-like grotesque; Helvetica or Arial substitutes.

## Layout

The page is 1280px wide and 8529px tall. Content sits inside generous side margins; the header, link bar and video share one aligned left edge. The booking row is a horizontal strip of three underlined fields and a button. The editorial block is two columns (text left, tall portrait right), and the featured hotels block overlaps a card on the image. Spacing tokens: 1px, 2px, 4px, 6px, 8px, 10px, 16px, 24px, 32px, 64px. Buttons use 16px 32px padding; navigation links pad 16px vertically.

## Elevation & Depth

Two soft shadows were measured: rgba(0, 0, 0, 0.1) 0px 6px 12px 0px (12 elements, the sticky header and controls) and rgba(0, 0, 0, 0.1) 0px 4px 10px 0px (2). Depth otherwise comes from overlapping the white card over the photograph, a double frame (white card with a thin gold outline), and flat colour bands.

## Shapes

Geometry is square: buttons, inputs and navigation compute 0px radius. Circles (50%, 7 elements) are used for icon buttons; 1000px (3) for pill controls; 22px (2) for two small elements. Photographs have square corners in the capture.

## Components

- Primary button ("Find Hotels", "Reserve Now"): #1c1c1c fill, white Swiss-721 13px weight 700, 0px radius, padding 16px 32px, height 48px (53px for the header "Reserve Now").
- Outlined button ("Sign in or Join"): transparent, #1c1c1c text and 1px #1c1c1c border, same padding.
- Navigation: Swiss-721 12px uppercase with 1.3px tracking, links padded 16px vertically.
- Text input: white, 16px weight 500, height 42px, with an underline rule rather than a box.
- Feature card: white, gold hairline frame, centred label, serif title, sentence and an underlined "Explore More".
- Carousel control: Previous and Next text links with chevrons, a thin progress bar with a gold segment, and a counter.
- Video panel: standard player bar under the video.

## Design System Architecture

No public design system was opened; web research was unavailable (see SOURCES.json). The page does expose a typographic token system in CSS custom properties with a --t- prefix: --t-font-family Caslon540Std, role scales named title-l, subtitle-l, display-s, display-l and overline-medium, each with per-viewport font sizes and line heights (for example --t-title-l-font-size-viewport-xs 2.375rem and viewport-l 3.75rem, --t-subtitle-l-font-size-viewport-xs 1.625rem), plus colour roles such as --t-brand-bg-color referencing --rzp-60 and --t-form-label-color. This is a role-based, viewport-keyed type system.

## Do's and Don'ts

Do:
- Pair a serif for headings and body with a small grotesque for controls.
- Keep controls square with #1c1c1c fills and 13px bold labels.
- Use pale blue #e9f1fa bands to separate editorial blocks.
- Use gold #916e27 only for hairlines and small markers.

Don't:
- Do not round buttons; 0px radius was measured.
- Do not use heavy shadows; only 0.1 alpha shadows were measured.
- Do not set long headings in the grotesque.
- Do not reproduce the video player controls as brand UI.

## Responsive Behavior

On the 390px mobile pass the heading face is Caslon540Std at 28px. The mobile size distribution is 18px (1984 characters), 16px (816), 22px (324), 12px (240), 28px (199), 26px (115), 38px (88), 10px (73), 13px (57) and 24px (36). The CSS variables show per-viewport sizes (xs and l keys), but breakpoint widths and layout changes were not measured.

## Iteration Guide

1. Start with {colors.canvas} and {colors.ink}; use {colors.surface-2} for editorial bands.
2. Use {components.button-primary} for the single reservation action.
3. Headings in Caslon540Std, labels in {typography.nav} and {typography.button}.
4. Keep radius {rounded.none} for controls.
5. Validate with `node web/scripts/verify-designs.mjs --slug=ritz-carlton`.

## Content and imagery

Imagery is cinematic and editorial: an aerial video of a yacht (supporting the Yachts link), a tall portrait of a woman in an orange dress walking through ferns, and a refined dining-room interior with toile-style wall panels and a chandelier. The pairing of a portrait with a statement on a faint hexagonal line pattern gives the editorial block a quiet texture. Copy is composed in full sentences with a sense of occasion ("Step into a world of inspired destinations, visionary design and legendary service, where every stay transforms the journey that follows."). Labels are small uppercase overlines such as "LONE STAR LUXURY"; headings mix an italic serif line with an uppercase serif line ("Where To Go Next" over "FEATURED HOTELS"). Hotel cards name an accolade (Forbes Five-Star) and end with a quiet underlined action instead of a filled button.
