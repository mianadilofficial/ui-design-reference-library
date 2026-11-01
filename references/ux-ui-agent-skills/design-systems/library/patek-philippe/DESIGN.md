---
version: alpha
name: Patek Philippe
category: "Luxury"
description: "Patek Philippe's homepage pairs Open Sans Light uppercase display type at 40px with Lora serif body at 16px, charcoal ink #2e2e33 on a white canvas, one warm taupe accent #8c7a66, pill-shaped 9999px outlined buttons and full-bleed photography; flat, with no shadows."

colors:
  canvas: "#ffffff"
  ink: "#2e2e33"
  primary: "#8c7a66"
  surface-dark: "#000000"
  surface-soft: "#f8f7f7"
typography:
  display:
    fontFamily: openSans, "openSans Fallback", Arial, sans-serif
    fontSize: 40px
    fontWeight: 300
    lineHeight: 48px
    letterSpacing: 0.12px
    textTransform: uppercase
  display-mobile:
    fontFamily: openSans, "openSans Fallback", Arial, sans-serif
    fontSize: 30px
    fontWeight: 300
    lineHeight: 36px
    letterSpacing: 0.896px
    textTransform: uppercase
  body:
    fontFamily: lora, "lora Fallback", Times, serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  link:
    fontFamily: openSans, "openSans Fallback", Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: 0.28px
    textTransform: uppercase
rounded:
  xs: 10px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5.92px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 36px
  s9: 48px
  s10: 80px
components:
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 52px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  footer:
    textColor: "{colors.primary}"
---

# Patek Philippe

## Overview

The Patek Philippe homepage measured at patek.com/en is a restrained, editorial luxury site. Full-bleed photographic and video panels carry the page; copy sits directly on the imagery in white, and the interface chrome is almost invisible. The measured palette is a single charcoal ink (`#2e2e33`), a white canvas (`#ffffff`), pure black panels (`#000000`), a faint warm-grey wash (`#f8f7f7`) and one chromatic accent, a warm taupe (`#8c7a66`). Nothing else is coloured; the colour on the page comes from the photography (a Milan exhibition hall, a diamond-set watch on a plum backdrop, an illustrated terrace with a leather strap).

The top of the page opens with the hero headline "WATCH ART" GRAND EXHIBITION MILAN 2026 in thin uppercase sans, followed by a short serif paragraph and a pill-shaped "DISCOVER MORE" button. Subsequent blocks repeat the same pattern: image or looping video, uppercase light headline, one or two lines of serif body, one pill. The voice is quiet and institutional ("We invite you to take a deep dive into the world of Geneva's last independent, family-owned watch manufacturer"). The capture was taken with the page in a dimmed grey state in places; only values read from the live DOM are used here, not the dimmed pixels.

The brand's own emblem is the Calatrava cross, which Patek Philippe's site says was officially trademarked on April 27, 1887 (patek.com, "the calatrava cross"). It appears as a small white mark centred in the header.

## Colors

- **Canvas** `#ffffff` is the page background reported by the extractor; most body copy on the long scroll is set on white sections.
- **Ink** `#2e2e33` is the most-read text colour (body default colour on the root element).
- **Primary / accent** `#8c7a66` is the only chromatic value: the text and 1px border colour of the outlined pill button, the link colour, and the footer text colour. It is a muted taupe rather than a loud action colour.
- **Surface dark** `#000000` covers the largest background area by measurement, used for full-bleed media panels and the immersive blocks.
- **Surface soft** `#f8f7f7` is a barely tinted light panel used for alternating bands.
- White text (`#ffffff`, equal to canvas) is used for headlines, body and navigation when they sit on photographs or video, so canvas doubles as the on-image text colour.

No semantic success/error colours were measured and none are declared. The button on-hero is a white-filled pill with taupe lettering, so `on-primary` is not applicable: there is no solid brand-coloured button.

## Typography

Two families are loaded: Open Sans (300 and 400) and Lora (400 roman and italic), declared on the page as `--font-secondary` and `--font-primary`. A third variable, `--font-alt`, names "erbaum" but no face was loaded with it on the homepage.

- **Display**: Open Sans 300, 40px / 48px line height, letter-spacing 0.12px, uppercase. On a 390px viewport the h1 drops to 30px / 36px with 0.896px tracking (`display-mobile`).
- **Body**: Lora 400, 16px / 26px, in sentence case. The serif body against sans display is the signature pairing; it reads like a printed catalogue.
- **Link / button label**: Open Sans 400, 14px / 26px, letter-spacing 0.28px, uppercase.
- The header "MENU" label is Open Sans 17px uppercase with 0.34px tracking, and footer links are Open Sans 300 at 16px with 0.48px tracking, uppercase.

The families are named openSans and lora in the page's own font declarations; no proprietary typeface was measured, so no substitute is needed.

## Layout

The page is about 8034px tall at 1280px width. Layout is single column of full-width bands: a media band, then a text block left-aligned at roughly the page gutter, then another media band. Text blocks are narrow (headline blocks measure 445–476px wide, body paragraphs 520px wide) and sit left, leaving the right two-thirds empty. Spacing tokens measured on the page: 4, 5.92, 8, 12, 16, 20, 24, 36, 48 and 80px, with the larger values used for vertical rhythm between bands. The header is 80px tall and transparent over the hero, with a menu trigger at left, the cross mark centred, and watch-finder and search icons at right.

## Elevation & Depth

The site is flat. No box shadows were found on the measured components, and depth comes from photography, video and overlay darkening on hero imagery so white text stays legible. Panels are separated by thin gaps of light background rather than borders or cards. Do not add drop shadows to buttons or panels.

## Shapes

Two radii are in use: `xs` 10px and `pill` 9999px. Buttons and link-buttons are full pills (the outlined button measured 52px tall with 0 / 24px padding and a 1px taupe border). Everything else (images, panels, bands) is square-cornered. The small circular play/pause controls on videos are round too, but they are media controls, not brand buttons.

## Components

- **Outlined pill button (button-secondary)**: transparent or white fill, taupe `#8c7a66` text in the link style (Open Sans 14px uppercase, 0.28px tracking), 1px taupe border, pill radius, 52px high, 0 24px padding. On imagery the pill is filled white with the taupe label ("DISCOVER MORE").
- **Link**: same type style as the button, taupe, uppercase; underlines are not used.
- **Header / nav**: white text on the hero, "MENU" with a hamburger icon at left; nav links use Lora body style per the measurement.
- **Footer**: a tall block (about 1051px) of uppercase Open Sans 300 links in taupe, grouped under headings such as MANUFACTURE, with items like "Our values" and "The founders".
- **Cookie, consent and carousel controls** (dots, play/pause) are utility UI and not part of the brand component set.

## Design System Architecture

Patek Philippe does not publish a public design system, token package or component library that I could find or open. The de-facto system is visible in the shipped page: CSS custom properties such as `--font-primary: 'lora'`, `--font-secondary: 'openSans'`, `--font-alt` and a viewport unit variable `--vw` (12.8px at the measured 1280px width), which indicates sizes are scaled from the viewport width. Four colour values plus black and white carry the whole interface. Research notes: the official patek.com Calatrava cross page was opened and read; no official brand-guidelines or press-kit page for UI was found. Aggregator "design system" pages were not used.

## Do's and Don'ts

Do:
- Set headlines in Open Sans Light, uppercase, with small positive tracking; set copy in Lora.
- Use the taupe `#8c7a66` only for text, thin borders and small marks.
- Keep photographs full bleed and let them be the colour.
- Use pill outlines for the single call to action per band.

Don't:
- Do not introduce bright colour, gradients or drop shadows.
- Do not use bold weights for display type; the measured display weight is 300.
- Do not fill buttons with taupe; the measured button is outlined or white.
- Do not round images or panels.

## Responsive Behavior

At 390px the display headline reduces from 40px to 30px (line height 48px to 36px) and its tracking increases to 0.896px; body stays Lora 16px. Because the root defines `--vw`, much of the sizing follows viewport width, so verify at 390, 768 and 1280 widths rather than assuming breakpoints.

## Iteration Guide

1. Start from the white canvas and charcoal ink; add taupe only after typography and spacing are right.
2. Build each content band as media plus one narrow left text block (headline, two lines of serif, one pill).
3. Keep display type 300 weight uppercase; check that headlines on photographs are white and legible against the measured dark overlay.
4. When adding a new surface, choose between black `#000000` and soft `#f8f7f7`; avoid new greys.
5. Re-run the fidelity gate after any token edit: `node web/scripts/verify-designs.mjs --slug=patek-philippe`.
