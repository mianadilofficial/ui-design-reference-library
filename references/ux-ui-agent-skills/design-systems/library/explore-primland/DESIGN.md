---
version: alpha
name: Primland Residences
category: "Architecture & Interiors"
description: "Explore Primland (explore.ownprimland.com), the Blue Ridge Mountains real estate microsite of Primland Residences. Full-bleed aerial imagery, wide-tracked uppercase PetitSerif (46.8px, 9.36px tracking), Centra sans buttons, a cream #fffbe7 square button with forest green #456a4b text."
colors:
  canvas: "#ffffff"
  ink: "#456a4b"
  primary: "#fffbe7"
  on-primary: "#456a4b"
  black: "#000000"
  beige: "#f7d9bb"
  brown: "#a8611a"
  light-green: "#eeeccf"
  offset-olive: "#a8a98f"
  success: "#118850"
typography:
  display:
    fontFamily: petitserif, serif
    fontSize: 46.8px
    fontWeight: 400
    lineHeight: 52.416px
    letterSpacing: 9.36px
    textTransform: uppercase
  display-mobile:
    fontFamily: petitserif, serif
    fontSize: 34px
    fontWeight: 400
    lineHeight: 37.4px
    letterSpacing: 6.8px
    textTransform: uppercase
  subheading:
    fontFamily: petitserif, serif
    fontSize: 12.6px
    fontWeight: 500
    lineHeight: 13.86px
    letterSpacing: 2.52px
    textTransform: uppercase
  body:
    fontFamily: inferi, serif
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: "-0.288px"
  button:
    fontFamily: centra, sans-serif
    fontSize: 9.9px
    fontWeight: 500
    lineHeight: 14.85px
    letterSpacing: 0.99px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 6px
  none: 0px
spacing:
  s1: 5.4px
  s2: 6px
  s3: 7.2px
  s4: 8px
  s5: 9px
  s6: 18px
  s7: 20px
  s8: 21.6px
  s9: 26px
  s10: 28.8px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 35px
  nav:
    textColor: "{colors.black}"
    rounded: "{rounded.none}"
---

## Overview

The page at https://explore.ownprimland.com/ (title "Primland Luxury Blue Ridge Mountain Resort") is an immersive landing experience for Primland Residences, a residential community set in the Blue Ridge Mountains. The measured screen is a single 800px-high viewport (scroll height 800), not a scrolling document: a full-bleed aerial render of forested ridgelines with drifting clouds and a golf course, a small Primland Residences logo lockup at top centre, a hamburger-style glyph at top left and the word "INQUIRE" at top right. Centred copy reads "IN THE HEART OF" as an eyebrow, then "THE BLUE RIDGE MOUNTAINS" as a wide-tracked uppercase headline, then "Journey to the ultimate adventure paradise." and a single cream button, "EXPLORE THE MAP". At the bottom is an underlined text control, "START WITHOUT AUDIO", which tells you the experience carries a soundtrack. The page's own text also says "Please rotate your device to portrait mode to view the site."

The brand mood is quiet luxury: little UI, huge imagery, a classical serif and generous letter spacing. The colour of the interface is not blue or black but a warm cream (#fffbe7) with a deep forest green (#456a4b) for text on cream. The privacy-notice box visible in the capture is a consent overlay and is not part of the brand UI documented here.

## Colors

- Primary `#fffbe7` is a warm cream: the fill of the measured primary CTA ("EXPLORE THE MAP") and of declared `--color-white` in the stylesheet. Cream replaces pure white for everything that sits on photography.
- Ink / on-primary `#456a4b` is a forest green, the text colour on the cream button and the most-read text colour by character count (271); it is also a large measured background area (weight 1024) in the page's CSS.
- Canvas `#ffffff` is the measured page background colour (the document body behind the full-bleed image). Pure white is also declared as `--color-white-pure`.
- Black `#000000` is the measured nav text colour ("INQUIRE") and a background area (weight 1024) behind the media.
- White text on imagery is the second most common text colour (`#ffffff`, 97 characters).
- Declared in the stylesheet as a palette: beige `#f7d9bb`, brown `#a8611a` (also `--color-highlight`), light green `#eeeccf`, olive `#a8a98f` (`--color-offset`), success green `#118850`, offsets `#fffdf3` and `#efeae6`, and a 50% cream `#fffbe750`. Only the cream, green, black and white appear in the measured home screen; the rest are reserve tokens in the CSS.

## Typography

Three custom families are loaded: PetitSerif (weight 400), Inferi (weights 400 and 500) and Centra (400 and 500). Their CSS names are `--font-family-petitserif` ("petitserif", serif), `--font-family-serif` ("inferi", serif) and `--font-family-sans` ("centra", sans-serif). By character count Centra dominates (297 characters), then Inferi (43) and PetitSerif (35).

Measured scale on desktop:

- Display: PetitSerif 46.8px, weight 400, line height 52.416px, letter spacing 9.36px (0.2em), uppercase. The same 0.2em appears as `--h1-letter-spacing: .2em`.
- Subheading (the eyebrow line): PetitSerif 12.6px, weight 500, 13.86px line height, 2.52px tracking, uppercase.
- Body: Inferi 14.4px on 18px with -0.288px letter spacing (-0.02em, matching `--p-letter-spacing: -.02em`).
- Button: Centra 9.9px, weight 500, 14.85px line height, 0.99px tracking, uppercase.
- Nav ("INQUIRE") is measured in Inferi 17.1px, colour `#000000`.

The system declares fluid sizes as rem tokens (`--h1-size-desktop: 5.2rem`, `--h2-size-desktop: 3.4rem`, `--eyebrow-size-desktop: 1.4rem`), so the pixel figures above are the computed values at the 1280px measurement. Font substitutes are not documented: PetitSerif, Inferi and Centra are licensed commercial faces, and the stylesheet falls back to generic serif and sans-serif.

## Layout

The experience is one centred stack over a full-bleed background. Top bar: left menu glyph, centre logo lockup, right "INQUIRE" link. Centre column: eyebrow, headline, tagline, button, in that order, with the headline occupying roughly the middle of the viewport. Bottom: "START WITHOUT AUDIO". Spacing values measured are 5.4, 6, 7.2, 8, 9, 18, 20, 21.6, 26 and 28.8px; form spacing tokens are declared as rem values in the root CSS (`--form-space-3: 1.8rem` up to `--form-space-12: 6rem`). The page is built with Tailwind utility variables (`--tw-ring-*` appear in the root CSS).

## Elevation & Depth

Depth is entirely photographic: aerial render, clouds and a darker vignette. No shadow is measured on the CTA or on the nav. The only measured shadow on the page belongs to the consent overlay (`rgba(172, 171, 171, 0.3) 0px -1px 10px 0px`), which is not documented as a brand token. Text on the image is held legible by the image tonality, not by a panel.

## Shapes

The primary button has a 0px radius: a sharp rectangle 35px high. Declared radii in the measured set are 2px, 6px and 0px; the 6px radius belongs to the consent overlay and the 2px value is not tied to a measured brand component. The brand ornament is a small botanical mark in the logo and a small starburst glyph above the headline in the capture. Underlined text links ("START WITHOUT AUDIO", "INQUIRE") are used instead of buttons for secondary actions.

## Components

- Primary button: fill `#fffbe7`, text `#456a4b`, Centra 9.9px weight 500 uppercase with 0.99px tracking, 35px high, no radius, no border. Label "EXPLORE THE MAP". Desktop padding is not measured (0px reported).
- Nav: "INQUIRE" in Inferi 17.1px, `#000000`, no fill, 59px high touch row; on the mobile pass it is Centra 11px weight 500 in `#fffbe7`.
- Eyebrow: "IN THE HEART OF" with a small glyph, PetitSerif 12.6px uppercase.
- Audio toggle: underlined uppercase text at the bottom of the screen, "START WITHOUT AUDIO".
- Logo lockup: the Primland wordmark in a serif, with the word "RESIDENCES" in small tracked capitals beneath it.
- The privacy popup in the capture ("We value your privacy") is a consent overlay and is excluded from the component list.

## Design System Architecture

No public design system or brand guideline was found: the page https://explore.ownprimland.com/ was opened and has no design-system, brand-guideline, press-kit or GitHub links, so none is cited. The de-facto system is visible in the shipped CSS custom properties: named colour tokens (`--color-white: #fffbe7`, `--color-black-pure`, `--color-beige`, `--color-brown`, `--color-light-green`, `--color-offset`, `--color-success`), type tokens per breakpoint (`--h1-size-desktop`, `--h1-size-tablet`, `--h1-size-mobile`, likewise for h2 to h4, eyebrow, p and label) with their own weights and letter spacings, form spacing tokens (`--form-space-N`), and menu link tokens (`--mm-link-size-*`). The site also carries Tailwind variables, so it is a Tailwind project with a custom token layer.

## Do's and Don'ts

Do:
- Use cream `#fffbe7` instead of pure white for foreground elements and buttons.
- Set the headline in uppercase PetitSerif with 0.2em tracking.
- Keep the call to action a single square button, with the green `#456a4b` label.
- Let aerial photography fill the viewport and keep the interface to a handful of words.

Don't:
- Round the CTA; it is 0px.
- Add drop shadows to the CTA or headline; none are measured.
- Use the consent overlay colours or its 6px radius as brand style.
- Use black UI panels over the imagery.

## Responsive Behavior

Measured with the 390px mobile pass: the headline "THE BLUE RIDGE MOUNTAINS" is PetitSerif 34px at 37.4px line height and 6.8px tracking, white; the tagline is Inferi 15px; the CTA is Centra 11px weight 500, 39px high, still cream with green text and a 0px radius; the nav "INQUIRE" is Centra 11px in `#fffbe7`, 85px high. Frequent mobile font sizes by character count are 11px, 15px, 34px, 13px and 7px. The stylesheet declares tablet and mobile size tokens for every type role (`--h1-size-tablet: 4.8rem`, `--h1-size-mobile: 3.4rem`). The page states "Please rotate your device to portrait mode to view the site." Other mobile layout changes are not measured.

## Iteration Guide

1. Start with a full-bleed aerial or landscape image and no panels.
2. Place the eyebrow, headline, tagline and one cream square button in a centred stack.
3. Set the headline in PetitSerif uppercase with 0.2em tracking; set body in Inferi with -0.02em tracking.
4. Use `#456a4b` for any text that sits on cream, and `#fffbe7` for text on imagery.
5. Keep secondary actions as underlined uppercase text.
6. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=explore-primland --force --no-motion` and run `node web/scripts/verify-designs.mjs --slug=explore-primland`.
