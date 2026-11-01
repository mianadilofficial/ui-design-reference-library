---
version: alpha
name: Smallroom
category: "Thai Brands"
description: "Smallroom (สมอลล์รูม), the Bangkok pop-music label site: light grey canvas #f2f3f4, ink #212529 and black, Helvethaica Thai-Latin type at 24px light body with 40px and 64px weight-900 uppercase titles, 24px-radius image tiles with soft 8px 16px shadows and a hand-drawn dog mascot logo."
colors:
  canvas: "#f2f3f4"
  page-body: "#ffffff"
  ink: "#212529"
  primary: "#000000"
  surface-grey: "#dbdbdb"
  ink-muted: "#8f8f90"
  ink-faint: "#727272"
typography:
  display:
    fontFamily: Helvethaica, sans-serif
    fontSize: 40px
    fontWeight: 900
    lineHeight: 60px
    textTransform: uppercase
  heading:
    fontFamily: Helvethaica, sans-serif
    fontSize: 64px
    fontWeight: 900
    lineHeight: 76.8px
    letterSpacing: 3px
  subheading:
    fontFamily: Helvethaica, sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 33.6px
    textTransform: uppercase
  nav:
    fontFamily: Helvethaica, sans-serif
    fontSize: 24px
    fontWeight: 300
    lineHeight: 25.6px
  button-secondary:
    fontFamily: Helvethaica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 6px
  sm: 24px
spacing:
  s1: 5px
  s2: 6px
  s3: 10px
  s4: 12px
  s5: 13px
  s6: 24px
components:
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 6px 12px
    height: 38px
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.ink}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 8px 16px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 24px 0px 0px
---

## Overview

Smallroom (สมอลล์รูม) is a Bangkok pop-music label, measured at smallroom.co.th (page title "Home - Smallroom Bangkok Pop Music Label"). The footer reads "SMALLROOM", gives a Bangkok street address, an email and a phone number, and lists social channels for Facebook, X, Instagram, LINE, YouTube and TikTok. The tagline in the footer follows the label name: "ค่ายห้องเล็กแต่เพลงเยอะ" (small room, many songs). The measured h1 is the first tile label, "NEW RELEASES".

The page is a compact, playful hub rather than a long marketing page. In the capture the header centres a hand-drawn logo: a black outline dog mascot above chunky "Smallroom" lettering with the line "bangkok pop music label since 1999". An EN language selector sits at the top right. Beneath it, a grey slash-separated list of artists (gizzdear, Jduck, Barbies, Dept, Death Of Heather, Gene Kasidit, Image Suthita, JUST*, Penguin Villa, Polycat, Postbox, phufa, Rattana, SLUR, Spoonfulz, Summer Stop, Syd Vethaya, Tattoo Colour, Television off, The Jukks, The Richman Toy, TOFU, Two Pills After Meal, wadfah, WAV, YODSARUN) acts as the artist index.

The main content is a 4 by 2 grid of square image tiles with rounded corners: NEW RELEASES, ARTISTS, VIDEOS, SHOP, TOUR DATES, EVENTS, COMMERCIAL, ABOUT US. Each carries a white italic uppercase title across the top edge. Four tiles use photographs or posters; the last three use the mascot illustration on white. Below the grid, a grey band says "WALLROOM" with a thumbs-up icon, and a footer with three columns closes the page.

The voice is cheerful and casual, with an in-joke between "Smallroom" and "Wallroom".

## Colors

Backgrounds by area: #ffffff (545), #f2f3f4 (475), #dbdbdb (151). Text by characters: #212529 (263), #8f8f90 (261), #ffffff (63), #0d6efd (63), #727272 (8). The corpus lists #ffffff (100), #000000 (70), #212529 (33), #6c757d (31), #0d6efd (30), #dc3545 (23), #198754 (23).

- **canvas #f2f3f4**: the footer and light page area; **page-body #ffffff** is the main page and the card fill.
- **ink #212529**: primary text.
- **primary #000000**: measured as the root variable --bs-primary (#000) and the mascot-and-wordmark black; it replaces the generated #0d6efd, which is the Bootstrap default link blue (the footer link color) and not a brand color.
- **ink-muted #8f8f90**: the artist list; hover turns links to rgb(0, 0, 0).
- **surface-grey #dbdbdb**: the WALLROOM band.
- **ink-faint #727272**: small text.

The root variables otherwise carry the full Bootstrap palette (for example --bs-yellow #ffc107, --bs-success #198754); these are framework defaults and are not brand colors. Tile colors come from the artwork itself (a red tour poster, photographs).

## Typography

Loaded fonts: Helvethaica at 300, normal, 900 and 900 italic, plus Font Awesome 6 Free and Brands icon fonts. Helvethaica is a Thai-capable Helvetica-style face and carries all 658 measured characters, so the site has one voice for Thai and Latin text. Without it, use a neutral grotesque with Thai support.

Sizes by characters: 24px (500), 20px (76), 40px (63), 28px (9), 64px (8), 16px (2). Weights: 300 (479 characters), 500 (97), 900 (71), 700 (9), 400 (2). Only the 64px size has measured tracking (3px).

- **display** 40px weight 900 / 60px, uppercase: tile titles.
- **heading** 64px weight 900 / 76.8px, 3px tracking: the "WALLROOM" band.
- **subheading** 28px weight 500 / 33.6px, uppercase.
- **nav** 24px weight 300 / 25.6px: artist and link rows.
- **button-secondary** 16px weight 400: the language selector.

## Layout

The desktop page is 1280px wide and 1365px tall, a single compact screen of content. The tile grid has four equal columns and two rows, centred, with even gutters; tiles are square. Section order: header, artist list, tile grid, grey band, footer. Paddings: 12px (15), 5px (12), 13px, 6px, 10px and 24px (one each); the footer uses 24px 0px 0px.

The footer has three columns: address and contact, "Useful Links" with chevrons, and "Follow Me" with social icons and handles.

## Elevation & Depth

One shadow is measured: rgba(0, 0, 0, 0.15) 0px 8px 16px 0px (8 uses), on the rounded tiles. There are no other shadows, and only one measured border color (#212529). The tiles lift off the grey canvas through this soft shadow.

## Shapes

Radii: 6px (9 uses, controls such as the language selector) and 24px (8 uses, the image tiles). Tiles are the primary shape; everything else is square-edged. The mascot illustration has a hand-drawn irregular outline.

## Components

**Image tile.** 24px radius, soft 8px 16px shadow, white background for illustration tiles, an italic uppercase weight-900 white title on top. Measured tile link: 261px by 261px.

**Language selector.** A button with the flag and "EN", 38px high, 81px wide, 6px radius, padding 6px 12px, text 16px in #212529.

**Artist index.** A slash-separated text list at 24px weight 300 in #8f8f90; hover turns the text black.

**Footer links.** Chevron bullets with link text, and a social list with icons.

No filled primary button style was measured, so no button-primary token is declared.

## Design System Architecture

No public design system or brand-guideline page was found; the site links to none. The page is built on Bootstrap 5 (the root variables are the standard --bs-* set, with --bs-primary overridden to #000, and the border-radius variables such as --bs-border-radius-xl 1rem and --bs-border-radius-2xl 2rem are present) with Font Awesome icons and the Helvethaica typeface. The de-facto system is therefore Bootstrap utilities plus a few custom tile styles. Tokens here are computed-style measurements.

## Do's and Don'ts

- Do keep the page light grey with black and #212529 text.
- Do use 24px-radius square tiles with a soft shadow as the main navigation.
- Do set tile titles in 40px weight-900 uppercase italic white.
- Do use the dog mascot illustration on white tiles.
- Don't use Bootstrap blue (#0d6efd) as a brand color; it is only the default link color.
- Don't add colors other than the artwork itself; the interface is monochrome.
- Don't add borders; separation comes from shadow and tint.

## Responsive Behavior

The mobile pass measured: h1 40px (171px wide, "NEW RELEASES"), h2 64px (366px wide, "WALLROOM"), nav 16px in a 390px-wide row. Mobile font sizes by characters: 24px (416), 20px (76), 40px (63), 23.14px (9), 21.57px (9), 64px (8), 16px (2). The tile grid's column count on mobile was not measured.

## Iteration Guide

1. Start with a #f2f3f4 page and a centred logo.
2. Add the artist index as a slash-separated 24px weight-300 list.
3. Build navigation as a 4 by 2 grid of 24px-radius square tiles with the 8px 16px shadow.
4. Use Helvethaica for all text; titles at weight 900 uppercase.
5. Close with a #dbdbdb band and a three-column footer.
6. Gate: node web/scripts/verify-designs.mjs --slug=smallroom.

## Additional Measurement Notes

The desktop pass reports 174 visible elements and an English document language. The spacing scale in the frontmatter runs from 5px to 24px and mirrors the small paddings inside buttons, list rows and footer blocks. The page is intentionally small: one screen of navigation tiles, a band and a footer, so new sections should keep the same compact rhythm. When extending the system, reuse the 24px tile radius, the single soft shadow, the black-on-light palette and the one Helvethaica family, and let artwork, not interface color, supply the visual variety.
Keep new artist names in the same slash-separated list, and keep tile titles to one or two words.
