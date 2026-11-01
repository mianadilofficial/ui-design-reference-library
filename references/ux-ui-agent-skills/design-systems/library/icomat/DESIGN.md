---
version: alpha
name: ICOMAT
category: "Tech & AI"
description: "ICOMAT (icomat.co.uk) measured: 'Engineer Without Limits' composites manufacturer on a #f8f8f8 canvas with a #080808 dark hero, LayGrotesk-Semibold headlines (69.3px, -1.04px tracking), AkkuratMono 11.24px uppercase labels, translucent #ffffff1c buttons with 7.49px radius, #cfd9e0 pale steel text and a 1px inset shadow."
colors:
  canvas: "#f8f8f8"
  ink: "#1c1c1c"
  primary: "#cfd9e0"
  on-primary: "#f8f8f8"
  surface-dark: "#080808"
  surface-graphite: "#333333"
  ink-steel-50: "#cfd9e080"
  ink-charcoal: "#282728"
  ink-dark-41: "#08080869"
  hairline: "#000000"
  button-primary-bg: "#ffffff1c"
typography:
  display:
    fontFamily: LayGrotesk-Semibold, sans-serif
    fontSize: 56.1951px
    fontWeight: 400
    lineHeight: 55.0712px
    letterSpacing: "-0.842926px"
  display-mobile:
    fontFamily: LayGrotesk-Semibold, sans-serif
    fontSize: 35.278px
    fontWeight: 400
    lineHeight: 34.5725px
  heading:
    fontFamily: LayGrotesk-Semibold, sans-serif
    fontSize: 69.3073px
    fontWeight: 400
    lineHeight: 66.535px
    letterSpacing: "-1.03961px"
  subheading:
    fontFamily: AkkuratMono, sans-serif
    fontSize: 11.239px
    fontWeight: 400
    lineHeight: 11.0142px
    letterSpacing: 0.22478px
    textTransform: uppercase
  body:
    fontFamily: LayGrotesk-Semibold, sans-serif
    fontSize: 16.8585px
    fontWeight: 400
    lineHeight: 19.6683px
    letterSpacing: 0.187317px
rounded:
  xs: 1px
  sm: 7.49px
  md: 9.37px
  lg: 10px
  xl: 12.18px
  2xl: 13px
  3xl: 23.41px
  4xl: 33.72px
  cta: 7.49px
  pill: 9999px
spacing:
  s1: 3.75px
  s2: 4.68px
  s3: 6px
  s4: 7.02px
  s5: 7.49px
  s6: 8.43px
  s7: 11.24px
  s8: 15.92px
  s9: 16.86px
  s10: 17.8px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    height: 50px
    transform: matrix(1, 0, 0, 1, 0, 0)
  button-secondary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    height: 49px
    transform: matrix(1, 0, 0, 1, 0, 0)
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink-charcoal}"
    padding: 20.6049px 18.7317px 0px
  card:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.canvas}"
    padding: 23.4146px 20.6049px 17.7951px
    transform: matrix(1, 0, 0, 1, 0, 148.816)
---

## Overview

ICOMAT's page title is "ICOMAT - Engineer Without Limits™" (https://www.icomat.co.uk/). The company presents itself as "the only composite manufacturer" that uses its own invention, Rapid Tow Shearing (RTS), to steer carbon fibres along curves instead of straight lines. The home page is a very long scroll (19123px) that alternates a near-black hero with pale grey sections. The h1 "Engineer Without Limits™" is set in off-white at 56.2px over a dark first screen; later the headline "ICOMAT invented RTS. Rapid Tow Shearing." appears at 69.3px, grey on the pale canvas, followed by a two-column block ("The RTS Revolution" left, "For 50 years, composites were limited to straight lines. Our patented RTS process removes that constraint..." right with an "Explore our technology" arrow link). A large outlined frame with tiny corner marks holds a mono label "RTS / STEERED FIBER COMPOSITES" and the caption "Up to 65% lighter, 10x faster production" (the 3D content inside the frame was not rendered in the capture).

Other measured content: cards titled "A new way to Build" ("What sets ICOMAT apart", "Learn more"), "Steered composites" ("The only process that steers fibers free...") and "Lighter structures" ("Up to 65% weight savings with equal or h..."), a customer quote beginning "At NIAR, we work with some of the most advanced manufacturing...", and two small pill labels, "ZERO DEFECTS" and "10× FASTER". Company details (COMPANY REG NO. 11771620, VAT REG. NO. 326574685) sit in the page chrome. The voice is declarative and engineering-first, with technical micro-labels in monospace caps.

The capture shows the upper hero as empty pale canvas, so only measured data, not the image, is used to describe the dark sections.

## Colors

- **Canvas** `#f8f8f8` (off-white; 4882 area units) is the base page colour; text on it is `#1c1c1c`.
- **Surface dark** `#080808` is the largest background by far (20607 units): the hero and the dark card.
- **Surface graphite** `#333333` (1027) and a light card grey `#f1f1f1` (427) are secondary surfaces. Translucent whites `#ffffff0f`, `#ffffff30` and `#ffffff1c` layer over the dark ground; `#ffffff1c` is the button fill.
- **Ink** `#1c1c1c` (1140 characters) for text on light.
- **Primary** `#cfd9e0`, a pale steel blue-grey, is the most-read colour on the dark ground (1882 characters); its 50 percent variant `#cfd9e080` (403) is used for secondary text. On-primary is `#f8f8f8`.
- **Charcoal** `#282728` (350 characters) is the nav and card text on light surfaces; `#f8f8f8` (334) is the text on the dark cards.
- **Dark translucent text** `#08080869` and `#08080880` (334 characters each) are used for ghosted grey headings on the canvas.
- **Hairline** `#000000` (a 1px black border on one element) and the label colour `#0000006e` for the h3 caption.

## Typography

Three fonts are loaded: **LayGrotesk-Semibold** for almost everything (4515 characters, weight reported as 400 because the weight is in the font file), **AkkuratMono** (582 characters) for uppercase labels and buttons, and **Doto-VariableFont** (14 characters, weight 463) for a dot-matrix accent.

| Role | Measured |
|---|---|
| Display (h1) | LayGrotesk 56.1951px / 55.0712px, -0.842926px; 35.278px / 34.5725px at 390px |
| Heading (h2) | 69.3073px / 66.535px, -1.03961px; 31.7502px / 31.1152px at 390px |
| Subheading / label | AkkuratMono 11.239px / 11.0142px, +0.22478px, uppercase |
| Body | LayGrotesk 16.8585px / 19.6683px, +0.187317px; 14.1112px / 15.1192px at 390px |

Sizes by characters: 16.8585px (3861), 44.9561px (479), 11.239px (449), 10.3024px (133) and 69.3073px (97). The values are fractional; the mobile pass uses 18.143px and 14.1112px for most characters.

## Layout

The desktop pass is 1280px wide. Content is placed on a wide grid with a left column label and a right column paragraph (as in "The RTS Revolution"), and sections use large vertical gaps; a thin black line spans the page between the hero and the next section. The outlined technology frame has small square marks at its four corners, a blueprint motif. The header (padding 20.6049px 18.7317px 0px) holds a logo and small links in charcoal. Spacing values: 3.75, 4.68, 6, 7.02, 7.49, 8.43, 11.24, 15.92, 16.86 and 17.8px.

## Elevation & Depth

Only one shadow exists: `inset 0 0 0 1px rgba(0,0,0,0.3)`, a pseudo-border. Depth is made by tonal layering (translucent white over black) and by a card measured with a vertical translate of 148.816px, not by drop shadows.

## Shapes

Radii are small and fractional: 9.36584px (20 elements, cards), 7.49268px (18, the pill-label buttons), 12.1756px (8), 13px (4), 10px (2), 23.4146px, 33.717px (6) and 50% (5, dots). Tokens keep each value (`sm` 7.49px, `md` 9.37px, `lg` 10px, `xl` 12.18px, `2xl` 13px, `3xl` 23.41px, `4xl` 33.72px) plus `cta` 7.49px and `pill`.

## Components

- **Label button** ("ZERO DEFECTS", "10× FASTER"): translucent white `#ffffff1c` fill, off-white AkkuratMono 11.239px uppercase text, radius 7.49268px, height 50px and 49px measured, padding 0px.
- **Dark card** ("A new way to Build"): `#080808` fill, off-white text, padding 23.4146px 20.6049px 17.7951px, with a "Learn more" link.
- **Light cards** ("Steered composites", "Lighter structures"): `#f1f1f1` fill, charcoal `#282728` text.
- **Text link**: off-white or charcoal, 16.8585px, with an arrow glyph ("Explore our technology →").
- **Technology frame**: 1px grey outline with corner marks and a mono caption.
- **Nav**: text `#282728`, padding 20.6049px 18.7317px 0.

## Design System Architecture

No public design-system or brand-guideline page was linked from https://www.icomat.co.uk/ and none was searched. The shipped CSS holds 105 root variables, many of them `--leva-*` (the Leva controls panel) and `--tw-*` (Tailwind utility internals), which are third-party and not brand tokens. The brand system is three custom font files and a small set of off-black, off-white and steel colours; no other token layer was measured.

The practical reading of this system is restraint: the page has almost no chromatic colour, one typeface for prose, one monospace face for annotation, and quantities stated as plain numbers. Every surface is either off-black or off-white, translucent white is the only way a second tone is introduced on the dark ground, and the pale steel `#cfd9e0` text colour is the nearest thing to a brand hue. Rebuilding the look therefore depends more on type metrics, tracking and spacing than on colour, which is why those values are listed to two decimals above.

## Do's and Don'ts

- Do alternate `#080808` and `#f8f8f8` bands and keep text off-white or near-black.
- Do use LayGrotesk-Semibold with negative tracking for headlines and AkkuratMono for uppercase micro-labels.
- Do show quantified claims (65% lighter, 10x faster, zero defects) as short mono labels.
- Do keep corners under 14px except the 23-34px panels.
- Don't use drop shadows; the one measured shadow is an inset hairline.
- Don't document Leva panel controls as brand components.
- Don't introduce saturated colours; none were measured.

## Responsive Behavior

Measured at 390px: h1 35.278px / 34.5725px, h2 31.7502px / 31.1152px, body 14.1112px / 15.1192px, the primary label button 12.0953px AkkuratMono with radius 8.06355px, and a small header strip of company registration text at 9.97864px AkkuratMono in `#cfd9e0d9`. Most-used mobile sizes: 18.143px (2577 characters), 14.1112px (1142), 35.278px (520), 12.0953px (443). Other layout changes were not measured.

## Iteration Guide

1. Use `canvas` #f8f8f8 and `surface-dark` #080808 in alternating full-width bands.
2. Set headlines in LayGrotesk-Semibold at 56-69px with -0.84 to -1.04px tracking.
3. Use AkkuratMono 11.239px uppercase with +0.22px tracking for labels.
4. Build label buttons with `#ffffff1c` fill and a 7.49px radius.
5. Add the outlined technology frame with corner marks for product demos.
6. Keep shadows off; verify each value against the frontmatter and mark unmeasured behavior as "not measured".
