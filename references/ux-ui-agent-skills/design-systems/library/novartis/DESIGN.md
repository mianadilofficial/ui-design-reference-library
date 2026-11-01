---
version: alpha
name: "Novartis"
category: "Pharma"
description: "Novartis (novartis.com) global home: Volta Modern Display at weight 500 with 0.4px tracking, 40px headline on a near-white #fcfcfc canvas with #161616 ink and #f2f2f2 bands, orange #ff4e00 link and focus accents, warm editorial photography and 1px circular carousel buttons."
colors:
  canvas: "#fcfcfc"
  page-largest: "#f2f2f2"
  ink: "#161616"
  ink-strong: "#161616"
  surface-white: "#ffffff"
  ink-on-dark-muted: "#ffffffa6"
  nav-link-text: "#000000"
  primary: "#ff4e00"
  accent-blue: "#6aaae4"
typography:
  display:
    fontFamily: volta_modern_display55_roman, Arial, Verdana, Tahoma
    fontSize: 40px
    fontWeight: 500
    lineHeight: 46px
    letterSpacing: 0.4px
  display-mobile:
    fontFamily: volta_modern_display55_roman, Arial, Verdana, Tahoma
    fontSize: 36px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: 0.4px
  heading:
    fontFamily: volta_modern_display65_medium, Arial, Verdana, Tahoma
    fontSize: 32px
    fontWeight: 500
    lineHeight: 36px
    letterSpacing: 0.4px
  subheading:
    fontFamily: volta_modern_display65_medium, Arial, Verdana, Tahoma
    fontSize: 22px
    fontWeight: 500
    lineHeight: 30px
    letterSpacing: 0.4px
  body:
    fontFamily: volta_modern_display55_roman, Arial, Verdana, Tahoma
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.4px
  nav:
    fontFamily: volta_modern_display55_roman, Arial, Verdana, Tahoma
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.4px
  link:
    fontFamily: volta_modern_display65_medium, Arial, Verdana, Tahoma
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20px
    letterSpacing: 0.4px
  input:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 28px
rounded:
  xs: 100px
  pill: 9999px
spacing:
  s1: 6px
  s2: 10px
  s3: 11px
  s4: 15px
  s5: 20px
  s6: 25px
  s7: 30px
  s8: 40px
  s9: 48px
  s10: 71.02px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 15px 20px
    height: 60px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

# Novartis

Novartis (https://www.novartis.com/, title "Novartis") is a global pharmaceutical company. The measured global home page is an editorial corporate site: a near-white canvas (#fcfcfc), near-black ink (#161616), one distinctive display typeface (Volta Modern Display), warm human photography with soft gradient blocks, and a single vivid orange (#ff4e00) used for small signals. This document records what was measured.

## Overview

The page is 5169px tall. The first band is a large, airy statement, "Reimagining medicine, together.", set left in the display face with the last word in bold, over a generous empty margin. Below it is a composite hero: a wide photograph of a parent holding a child at a window, beside blocks of soft coral-to-lavender gradient and a narrow vertical orange bar, arranged as an offset mosaic. A sticky white header bar crosses the hero with the Novartis logo (a monogram plus a serif wordmark "NOVARTIS") at the left and Search, "Global | en" and Menu controls at the right.

After the hero comes an intro paragraph ("For more than 250 years - and 30 years as Novartis - we've pursued scientific breakthroughs for one purpose: people..."), then a feature split: a heading "30 years of Novartis, powered by 250 years of innovation" with a paragraph and an underlined link "Learn more about the 30 years of Novartis" with an orange arrow, beside two portrait photographs (a black-and-white laboratory scene and a colour microscope scene) and circular previous and next carousel buttons. A row of tall portrait cards follows, each with a small grey category label and a bold title ("Research and development / Explore our science", "ESG / Learn about our impact", "Careers / Join our team"). A news heading (h3) announces a regulatory approval for a medicine. A small round blue shield badge (a privacy control) sits at the left edge and is not brand UI.

## Colors

- `canvas` #fcfcfc: the page ground and header (1364 area units); `page-largest` #f2f2f2: the largest background (1913 units), used for lower bands and hover fills; `surface-white` #ffffff: cards and panels (963 units).
- `ink` #161616: all primary text (1780 characters), the dark footer fill (754 units) and the 1px control borders.
- `primary` #ff4e00: the vivid orange. It is the measured background of the narrow vertical bar in the hero (3 units), the hover color of text links (rgb(255, 78, 0)), the arrow beside the link, and a CSS focus ring `inset 0 0 0 2px #ff4e00`. No filled primary button was detected on the page, so `primary` marks accent and link signals rather than a button fill.
- `ink-strong` #161616: the same near-black as `ink` (the generator's primary, kept under a descriptive name).
- `accent-blue` #6aaae4: a measured light-blue background (3 units).
- `ink-on-dark-muted` #ffffffa6: 65% white text on dark; `nav-link-text` #000000: the black nav-link color.

The `:root` also carries Bootstrap defaults (`--bs-primary` #0d6efd, `--bs-success` #198754, `--bs-orange` #fd7e14, `--bs-cyan` #0dcaf0, `--bs-code-color` #d63384) and date-picker (`--litepicker-*`) variables. Those are framework defaults and are not brand colors.

## Typography

Volta Modern Display in two cuts: `volta_modern_display55_roman` (1197 characters) for body and large statements, and `volta_modern_display65_medium` (1073 characters) for headings and UI; a Helvetica Neue fallback appears on 18 characters. `volta_modern_display46LtIt` (a light italic), Quicksand, FontAwesome and an `arctic_icons` icon font are also loaded. Weights by character: 400 (1299), 500 (759), 600 (228), 700 (2). Letter spacing is 0.4px on every measured size.

- `display`: 40px / 46px, weight 500, 0.4px (the h1 "Reimagining medicine, together."). Mobile: 36px / 40px.
- `heading`: 32px / 36px, weight 500 (h2). Mobile h2: 28px / 36px.
- `subheading`: 22px / 30px, weight 500 (h3 and card titles; 600 characters at 22px).
- `body`: 16px / 24px, weight 400.
- `nav`: 20px / 24px, weight 400; the header controls measure 14px / 20.02px.
- `link`: 16px / 20px, weight 600.
- `input`: 22px / 28px.

Other measured sizes: 14px (489), 20px (294), 12px (71), 15.04px and 13.712px. Volta Modern Display is a licensed typeface; no open substitute was identified from a source, so fall back to the generic sans-serif.

## Layout

The layout is a wide, generous editorial grid. The h1 band has 100px vertical and 135px horizontal padding. The hero is an asymmetric mosaic of one photograph and gradient blocks with a vertical orange bar; later sections use a two-column split (text left, two portraits right) and a horizontally scrolling row of tall cards. Measured paddings: 20px (30), 15px (24), 6px (19), 10px (10), 25px, 40px, 100px, 48px, 71.0156px and 135px; gaps: 30px (4) and 10px (2). The text input is 60px tall with 15px 20px padding.

## Elevation & Depth

Two shadows were measured on rendered elements: `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` (2 elements, the carousel and header controls) and `rgb(212, 212, 212) 0px 5px 12px -4px` (1, the sticky header bar). The CSS corpus holds many `none` values and inset rings (`inset 0 0 0 2px #ff4e00` on 16 rules and `inset 0 0 0 1px #161616` on 15), used for focus states. Depth is mostly flat: the sticky header floats over the hero with a light shadow.

## Shapes

Measured radii on the home page are few: `50%` (2 elements, the circular carousel buttons) and 100px (2, pill controls). The CSS corpus lists 0px (25), 2px (20), 4px (19), 3px (18), 10px (15), 20px (13) and 16px (6) for components not used on this page. Photographs and cards are square-cornered, and the carousel arrows are circles with a 1px #161616 border. Tokens: xs 100px, pill 9999px.

## Components

- Header bar: #fcfcfc background, 14px controls (Search with a magnifier, a globe "Global | en" selector, Menu with a hamburger), hover fill #f2f2f2.
- Text link: 16px weight 600, #161616 with an underline, turning orange (#ff4e00) on hover, followed by an orange arrow.
- Carousel buttons: circular, 1px #161616 border, arrow glyph; the disabled one is grey.
- Content card: tall portrait photograph, grey category label, bold 22px title.
- Text input: #fcfcfc fill, #161616 22px text, 60px tall, 15px 20px padding.
- Footer: #161616 fill with #fcfcfc text.

## Design System Architecture

No public design-system documentation for Novartis was opened, and none was linked in the extraction. The shipped CSS shows a Bootstrap 5 base (the `--bs-*` variables) layered with a site system whose prefix is `--ai-` (for example `--ai-font-size-base`, `--ai-font-size-h3`, `--ai-font-size-h4`, each referencing `--font-size-*` variables) and an `arctic_icons` icon font. Colors are not exposed as named brand variables in the extracted set; the palette above comes from measured computed styles.

## Do's and Don'ts

- Do keep the page near-white (#fcfcfc, #f2f2f2) with #161616 text; use white for cards.
- Do set headings in the display face at weight 500 with 0.4px tracking, and emphasise one word in bold.
- Do reserve orange #ff4e00 for small signals: links on hover, arrows, a thin bar, focus rings.
- Do use warm, natural photography and soft gradient blocks.
- Don't use Bootstrap blue or the framework's other presets as brand colors.
- Don't add heavy shadows; only the header and carousel controls carry one.
- Don't document the privacy shield badge as brand UI.

## Responsive Behavior

Measured at the 390px mobile pass: the h1 is 36px / 40px (40px on desktop), the h2 28px / 36px (32px), body 16px / 24px, and nav 14px / 20.3px on #fcfcfc. Common mobile sizes by character: 20px (751), 16px (686), 28px (215), 12px (202), 22px (92), 36px (30), 30px (18). Header collapse, card stacking and the hero mosaic on mobile were not measured.

## Imagery and Voice

Photography is candid and warm: families, scientists at microscopes, a health worker with a bicycle in a rural landscape, and a pair of colleagues at a desk, in both colour and black-and-white. Soft coral-to-lavender gradients act as colour blocks beside the images. Copy is plain, confident and people-centred ("Reimagining medicine, together.", "one purpose: people"), with short labels above titles (Research and development, ESG, Careers).

## Iteration Guide

1. Set the ground to #fcfcfc with #161616 text and a #161616 footer.
2. Use the display face at 40px / 46px with 0.4px tracking for the statement, with one bold word.
3. Build a sticky header with Search, language and Menu at 14px.
4. Use tall portrait cards with a grey label and a 22px bold title, and carousel arrows as 1px circles.
5. Use orange #ff4e00 only for link hover, arrows and focus rings; re-run the gate after renames.
