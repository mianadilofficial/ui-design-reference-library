---
version: alpha
name: Siam Discovery
category: "Thai Brands"
description: "Design language of the Siam Discovery retail site: Noto Sans Thai throughout with uppercase 600-weight navigation and 40px section titles, near-black #212529 ink and #838385 grey copy on white, cool-grey #dedede panels, black bands, and one indigo-blue #39489c action colour on square-cornered 40px buttons."
colors:
  canvas: "#ffffff"
  ink: "#212529"
  primary: "#39489c"
  on-primary: "#ffffff"
  surface-black: "#000000"
  surface-grey: "#dedede"
  ink-secondary: "#838385"
  ink-muted: "#8b8b8b"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    textTransform: uppercase
  heading:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 40px
    fontWeight: 600
    lineHeight: 48px
  body:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  button:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
    textTransform: uppercase
  nav:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 10px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 17px
  s8: 20px
  s9: 25px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 15px 20px
    height: 40px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-secondary}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.none}"
    padding: 50px 0px 0px
---

## Overview

Siam Discovery is a Bangkok fashion and lifestyle retail destination whose website describes it as "a laboratory where the subject is your life": a place to design yourself and your world, test ideas, discover products and examine trends. The site is organised by the building's themed floors, each called a lab: GF Her Lab, MF His Lab, 1F Street Lab, 2F Digital Lab, 3F Creative Lab, 4F Play Lab and 5F Active Lab. The page title is "home - สยามดิสคัฟเวอรี่" (Siam Discovery in Thai), and the hero spells the name in a fragmented, geometric display wordmark beside a tracked-out uppercase tagline beginning "THE EXPLORA...".

The interface is a restrained gallery frame. A centred uppercase navigation (HOME, PROMOTION, EVENT, MEMBER, TOURIST, DIRECTORY, BLOG & NEWS) sits in grey on white; the hero splits into a left text column and a right architectural photograph; a full-bleed fashion campaign image follows; then "EDITOR'S PICK" in 40px with a thin rule beside it and a three-card carousel of editorial tiles; and a contact footer in cool grey beside a photograph of the building's canopy. Colour is carried by photography; the interface adds one blue.

A language-selection dialog (Chinese, International / English, Thai) opens over the page on first load and dims it. It is a gate rather than design language, and its three blue buttons are not treated here as the site's call to action; the primary button documented below is the hero's "GETTING HERE".

## Colors

- **Canvas #ffffff**: base page background.
- **Ink #212529**: section titles such as EDITOR'S PICK and the second most-read text colour.
- **Ink-secondary #838385**: the most-read colour, used for the navigation and intro paragraph. Its softness gives the hero copy a quiet, curated feel.
- **Ink-muted #8b8b8b**: footer text and the 1px border colour of outlined controls.
- **Primary #39489c**: an indigo-blue, the single action colour; fills the "GETTING HERE" button and the carousel's active pagination dot and arrows. White (#ffffff) text sits on it.
- **Surface-grey #dedede**: the contact/footer panel background, visible beside the building photograph.
- **Surface-black #000000**: the second largest measured background area, used for dark photographic bands.

A bright Bootstrap link blue (#0d6efd) also appears in the extraction on the language code and links; it is the framework's default (--bs-primary) and is not part of the brand palette, so it is excluded.

## Typography

Noto Sans Thai is the only measured family and serves both Thai and Latin. The hierarchy is made by weight and case rather than by family:

- Display (nav labels): 16px, weight 600, 24px line height, uppercase.
- Heading: 40px, weight 600, 48px line height, in the section titles, set in capitals as written on the page (EDITOR'S PICK).
- Body: 16px, weight 500, 24px line height, in grey #838385.
- Button: 14px, weight 600, 21px line height, uppercase.
- Nav: 16px, weight 400, 24px line height.

Sizes by usage frequency are 16px (by far the most), 20px, 40px and 14px; weights are 600, 500 and 400. The tracked-out uppercase tagline in the hero is wider-spaced than any measured letter-spacing token, so its exact tracking is not recorded.

Font substitutes: Noto Sans Thai is open-source (Google Fonts); if unavailable use any Thai-capable humanist sans at the same weights.

## Layout

The page is built from full-bleed bands, with text columns inset from the left edge in the hero and editorial sections. The hero is a split: text on the left half, an architectural photograph on the right half bleeding to the edge. The campaign banner is edge to edge. The editorial carousel shows three equal cards with gutters in a centred row, with arrows at the right and dot pagination at the left beneath. The footer repeats the split: a grey text panel at left, a full-height photograph at right.

Spacing measured on the site: 1px, 5px, 6px, 10px, 12px, 15px, 17px, 20px, 25px and 32px; paddings of 12px, 10px and 5px are most common, with large 50px, 60px and 65px paddings in hero and footer areas. Gaps between items are 20px, 17px, 10px, 15px, 25px and 40px.

## Elevation & Depth

The page is flat. One shadow was measured: rgba(0, 0, 0, 0.2) 0px 8px 25px 0px, a soft large drop recorded on one floating element; everything else relies on colour fields of white, #dedede and black to separate regions. Photographs provide depth through their own lighting.

## Shapes

Buttons and navigation are square-cornered (0px radius). A 10px radius appears on a handful of elements (measured 8 times) and a 50% radius (measured 6 times) makes round dots and floating icon buttons.

## Components

- **Primary button**: #39489c fill, white 14px 600 uppercase text, 0px radius, 15px 20px padding, 40px tall, with a small outbound arrow beside the label ("GETTING HERE").
- **Navigation**: centred uppercase 16px labels in #838385 with a search icon and TH language switch at the right.
- **Section title**: 40px semi-bold uppercase text followed by a thin horizontal rule that runs to the right.
- **Carousel**: dot pagination with the active dot in #39489c and thin arrow glyphs in indigo.
- **Editorial card**: grey-toned image tile with a small blue tag label above a bold title (for example "SPECIALTY BRANDS", "DESIGN INSPIRATIONS").
- **Footer contact panel**: Thai headings and phone numbers in #8b8b8b, +66-2-658-1000 for the call centre.

## Design System Architecture

No public design system or brand guidelines for Siam Discovery were found on the pages I opened: https://www.siamdiscovery.co.th/en describes the concept and navigation but no tokens. The de-facto system is Bootstrap 5 (the extraction contains --bs-* variables) combined with Swiper (--swiper-theme-color) and a gallery/carousel library that declares --f-button-width and --f-thumbs-gap. The brand colours #39489c and #838385 appear in measurements but not in the custom property names I read.

## Do's and Don'ts

- Do keep surfaces white, #dedede and black, and let campaign photography carry colour.
- Do use #39489c as the only action and active-state colour, with white text.
- Do set navigation and buttons in uppercase Noto Sans Thai at 600 weight.
- Do keep corners square on buttons and navigation.
- Don't use Bootstrap blue #0d6efd for links or actions.
- Don't document the language-select dialog buttons as the primary CTA.
- Don't use heavy shadows; the single measured shadow is a faint large drop.
- Don't set body copy darker than the measured greys #838385 and #212529.

## Responsive Behavior

Only the desktop layout and the typography were fully measured for this site. The framework in use is Bootstrap 5, whose default breakpoints include 992px (lg) and 1200px (xl); specific column counts below 992px were not measured and are not claimed. Hero and footer split layouts use half-width photographs on desktop. The site sends visitors to a language-select dialog first, so test any narrow layout with that dialog dismissed.

## Iteration Guide

1. Start with Noto Sans Thai: 16px/500 for body, 40px/600 for section titles, 14px/600 uppercase for buttons.
2. Build the split hero with grey copy at left and a photograph at right.
3. Add the single #39489c button with a 0px radius and 40px height.
4. Add the editorial carousel with dots in #39489c.
5. Use #dedede panels and black bands to separate regions rather than shadows.
6. When introducing new elements, keep the greys #838385 and #8b8b8b for secondary text and check every number against web/data/extracted/siam-discovery.json.
