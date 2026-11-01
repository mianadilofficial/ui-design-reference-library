---
version: alpha
name: Merck
category: "Pharma"
description: "Merck corporate home (merck.com, US): white canvas with flat teal #00857c panels and buttons, black ink, grey #747474 body, Invention typeface at 37px/300 display and 16px body, 1px radii, photography of scientists and patients."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#00857c"
  on-primary: "#ffffff"
  ink-grey: "#747474"
  hairline: "#b7b7b7"
  teal-tint: "#007a71"
  teal-dark: "#005c55"
  navy: "#0c2340"
typography:
  display:
    fontFamily: Invention, sans-serif
    fontSize: 37px
    fontWeight: 300
    lineHeight: 42.92px
  display-mobile:
    fontFamily: Invention, sans-serif
    fontSize: 26px
    fontWeight: 300
    lineHeight: 35.88px
  heading:
    fontFamily: Invention, sans-serif
    fontSize: 38px
    fontWeight: 300
    lineHeight: 52px
  subheading:
    fontFamily: Invention, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28px
  body:
    fontFamily: Invention, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: Invention, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
rounded:
  xs: 1px
spacing:
  s1: 1px
  s2: 6px
  s3: 8px
  s4: 16px
  s5: 24px
  s6: 30px
  s7: 32px
  s8: 40px
  s9: 47px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 24px
    height: 48px
  button-inverse:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 24px
    height: 48px
---

# Merck

Measured from https://www.merck.com/ (final URL identical; title "Merck | Home"; `lang en-US`), 1280px desktop pass (page height 5,109px) and 390px mobile pass. This is Merck & Co.'s corporate home for the United States and Canada, a WordPress build (the :root carries `--wp--preset--*` variables).

## Overview

Flat, confident and corporate-clinical. A white masthead holds the MERCK wordmark with its green-and-teal cell logo at the left, and a solid teal block at the right with "Search everything" and "Menu". The hero is a full-width photograph of a lab scientist at an instrument, with a solid teal rectangle laid over it carrying the statement "We aspire to be the premier research-intensive biopharmaceutical company" in light 37px white type and a white "Our research" button. Below: three audience columns (Patients, Investors, Sustainability) with a photograph, a bold label and two lines of body copy; then "Explore our stories", a feature story plus three story cards with teal category labels (Sustainability, Health awareness, Innovation) and bold titles; a teal "Read more stories" button; and an "About us" band, teal on the left with white text ("For more than 130 years, we have brought hope to humanity through the development of important medicines and vaccines.") and two links "Who we are" and "What we do", over a blurred laboratory portrait.

Measured background areas: `#00857c` (1,282) and `#ffffff` (988); nothing else. The page is deliberately two-color: white and teal, with black and grey type.

## Colors

- **Canvas `#ffffff`**; text black `#000000` (1,176 characters), grey `#747474` (974, the lighter body and card text) and white `#ffffff` (644, on teal).
- **Primary / brand teal `#00857c`**: root variable `--colorPrimary`, also `--wp--preset--color--mcc-teal`. It is the fill of the hero panel, search block, "Read more stories" button and About panel, and the text of the white "Our research" button (72 characters).
- **Teal family:** `--colorPrimaryTint #007a71`, `--colorPrimaryDark #005c55`, `--colorPrimaryLight #6eceb2`, heading accent `--colorHeading #73f0d4`, navy `--colorPrimaryDarkBlue #0c2340`.
- **Secondary palette** in :root: rich blue `#5450e4`, vista blue `#688ce8`, pastel blue `#69b8f7`, lemon `#fff063`, lime `#bfed33`, info `#1058a4`, success `#029a01`, warning `#fe0000`. None of these is visible on the measured home page.
- **Greys:** `--colorGray #757575`, `--colorOffWhite #f7f7f7`, hairline `#b7b7b7` (1 border).
- `#0000ee` appears in the extraction as a link color; it is the browser's default link color and is not a brand color, so it is dropped. WordPress preset colors (`--wp--preset--color--vivid-purple`, `pale-pink`, `cyan-bluish-gray`) are editor defaults and are also dropped.

## Typography

One family: **Invention** (weights 300, 400 and 700 loaded; 2,866 characters), fallback `sans-serif`. It is the Merck corporate typeface and is licensed; a humanist sans such as Source Sans 3 is a stand-in.

Scale: display 37px/42.92px weight 300 (hero statement; 26px/35.88px on mobile), heading 38px/52px weight 300 ("Explore our stories"), a 30px light size (the footer "Connect with us on social" and About titles, 56 characters), subheading 18px/28px weight 700, body 16px/28px weight 400, buttons 16px/16px weight 700, small 14px (1,236 characters). Large headings are light (300); labels and buttons are bold (700); body is regular. Weight 600 appears on 173 characters.

## Layout

CSS variables define a content wrapper `--dimenWrapper: 80rem` (and `--dimenWrapperNarrow: 48rem`), a gutter `--dimenGutter: 1rem`, a masthead `--mccMastHeadHeight: 79px` and line heights from 1rem to 2rem. Measured paddings: 16px (17), 24px (3), 96px, 90px, 47px, 32px; gaps: 48px, 30px, 16px, 64px. The three-column audience row and the 1+3 story grid run across the page with small gutters; the About band overlaps a full-bleed photograph.

## Elevation & Depth

No box shadows were measured (the list is empty). The teal panel laid over a photograph provides the only layering. The theme defines an outlined shadow `--wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0)` which was not seen on the home page.

## Shapes

One radius is measured: `1px` (8 elements), matching `--dimenBorderRadius: 0.0625rem`. Buttons, panels, photographs and the hero rectangle are effectively square, with only a hairline softening of 1px at the corners. The generated token set therefore contains a single radius, `xs: 1px`, and no pill, card or circle radius was measured anywhere on the page, so none should be introduced when reproducing it.

## Components

- **Inverse button (white on teal):** `#ffffff` fill, `#00857c` text, Invention 16px weight 700, padding `16px 24px`, height 48px, radius 1px ("Our research", "Who we are").
- **Primary button (teal on white):** `#00857c` fill, `#ffffff` text, same metrics ("Read more stories", 182px wide).
- **Text link with underline:** white text with a white underline on the teal panel ("What we do").
- **Story card:** photograph, teal 14px bold category label, black bold title.
- **Audience column:** photograph, bold 18px label, 16px body in grey.
- **Teal masthead block:** "Search everything" with a magnifier and "Menu" with a three-line icon in white.
Because the browser-default link blue is not used, interactive text is teal or white.

## Content and Voice

Headlines are plain, declarative statements of purpose ("We aspire to be the premier research-intensive biopharmaceutical company"). Audience labels are single nouns (Patients, Investors, Sustainability) followed by a one-sentence promise written in the first person plural: "We're here to help you get the information you need to guide you on your health journey." Story cards use a category label (Sustainability, Health awareness, Innovation) and a factual title: "Merck publishes Purpose for Progress Impact Report 2025/2026", "Acting early in cancer detection", "Immunology Q&A: Experts discuss how science is advancing disease research", "What are individualized neoantigen therapies?". The About band states "For more than 130 years, we have brought hope to humanity through the development of important medicines and vaccines." Calls to action are short and literal: "Our research", "Read more stories", "Who we are", "What we do". The footer opens with "Connect with us on social" at 30px weight 300 and addresses patients and healthcare professionals separately.

Imagery is documentary photography: researchers in white coats and goggles at instruments and pipettes, patients and clinicians in warm close contact, an illustrated circular cut-out with teal dots on the sustainability tile, and a 3D rendering of a cell-like sphere for the neoantigen story.

## Design System Architecture

No public Merck design-system site was found; the pages opened (https://www.merck.com/) expose no brand-guidelines link. The shipped CSS is a custom WordPress theme ("mcc") with named tokens in :root: `--colorPrimary` family, `--colorSecondary*` accents, `--colorGray*`, `--dimenWrapper`, `--dimenGutter`, `--dimenBorderRadius`, `--dimenLineHeight*` and `--timeNextTransitionInterval: 10s` for the carousel, plus WordPress block-editor presets.

## Do's and Don'ts

- Do keep to white and `#00857c`; use white type on teal and black or `#747474` on white.
- Do set large statements in weight 300 and keep buttons weight 700 at 16px.
- Do use square (1px) corners, 48px-tall buttons with `16px 24px` padding.
- Do lay a solid teal panel over photography rather than a gradient.
- Don't use the secondary accent colors on the home page; none were measured there.
- Don't add shadows or rounded corners.
- Don't use browser-default `#0000ee` for links.

## Responsive Behavior

Measured at 390px: the hero statement 26px/35.88px weight 300 (328px wide, 108px tall; desktop 37px), the "Explore our stories" heading 23px/32px weight 300 (358px wide), and the CTA "Our research" unchanged at 16px weight 700 on `#ffffff` with `#00857c` text. Column counts and menu behavior on mobile were not measured.

## Iteration Guide

1. White canvas, one teal `#00857c`, black ink, grey `#747474`.
2. Invention (or Source Sans 3) at 37px/300 for statements, 16px/28px for text.
3. Square 48px buttons in teal or white; teal panels over photography.
4. Teal category labels above bold story titles.
5. Run `node web/scripts/verify-designs.mjs --slug=merck`.
