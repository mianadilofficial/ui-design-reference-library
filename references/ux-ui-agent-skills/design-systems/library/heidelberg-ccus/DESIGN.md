---
version: alpha
name: Heidelberg Materials CCUS Experience
category: "Tech & AI"
description: "ccus.heidelbergmaterials.com, Heidelberg Materials' interactive CCUS (carbon capture, utilisation and storage) experience: a white rounded-corner card over a deep green particle scene, LexendHM at 14px (700 headings, 400 body) in dark green #004e2b, sandy-grey #e6e6df pill button with an electric green #00dd39 arrow, and 100px radii."
colors:
  canvas: "#ffffff"
  ink: "#004e2b"
  primary: "#e6e6df"
  on-primary: "#3b3b3b"
  surface-mist: "#d4d4d3"
  accent-green: "#00dd39"
typography:
  display:
    fontFamily: LexendHM
    fontSize: 14px
    fontWeight: 700
    lineHeight: 18px
    letterSpacing: "-0.32px"
  display-mobile:
    fontFamily: LexendHM
    fontSize: 14.56px
    fontWeight: 700
    lineHeight: 16.64px
    letterSpacing: "-0.208px"
  body:
    fontFamily: LexendHM
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: "-0.32px"
  button:
    fontFamily: LexendHM
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 0.32px
rounded:
  xs: 100px
  sm: 325px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 8.89px
  s4: 10px
  s5: 20px
  s6: 21px
  s7: 24px
  s8: 48px
  s9: 75px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 1px 6px 1px 5px
    height: 59px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 10px 10px 129px
  footer:
    textColor: "{colors.canvas}"
---

## Overview

This is not the main Heidelberg Materials corporate site but a campaign microsite, ccus.heidelbergmaterials.com/en/, titled "Heidelberg Materials - CCUS Experience". It was measured at 1280px wide and only 800px tall with 124 visible elements: it is a single-screen, full-viewport interactive experience, not a scrolling page. The page text includes a location and date line, "Brevik, Norway 21.05.25", and the footer links "Imprint" (/en/imprint) and "Data Protection" (/en/data_protection).

The capture shows a deep green field filled with white stippled particle objects (a globe, a flask, a bottle, a light bulb, a chain link and a ring) and, centred on it, one white content card. The card has two icon tabs on top, a bold heading "Our CCUS mission", a short centred paragraph ("At Heidelberg Materials we are taking the lead in decarbonising our sector. We are pioneering Carbon Capture, Utilisation and Storage, laying the foundation for scaling CCUS across our global operations."), and a pill button labelled "Next" that holds an electric-green circle with an arrow. In the bottom right are "Imprint" and "Data Protection" links in white and a square sound-toggle control. The voice is plain, corporate and confident; the interaction is step-by-step.

Colour is almost monochrome green with warm grey neutrals. The first-party site name for this document is the measured site's title, not the parent company site, whose design system is separate and not documented here.

## Colors

All values appear in the measurements or root variables.

- **Canvas {colors.canvas}** (#ffffff): the card surface and the largest measured background (area weight 1912). The scene behind the card is an image, not a measured flat fill.
- **Ink {colors.ink}** (#004e2b): all card text (367 characters). The theme calls this `--dark-green`.
- **Primary {colors.primary}** (#e6e6df): the "Next" button background, called `--sandy-grey` in the theme variables.
- **On primary {colors.on-primary}** (#3b3b3b): the button label colour (`--dark-grey`).
- **Mist {colors.surface-mist}** (#d4d4d3): the second-largest background area (1024), a neutral grey surface.
- **Accent green {colors.accent-green}** (#00dd39): the circular arrow badge in the button; measured as a background colour (2 area units) and declared as `--light-green`.
- **White text** (#ffffff, 45 characters): the Imprint, Data Protection and other footer links over the green scene.

The theme also declares `--silver-grey: #767676`; it was not measured on a rendered element, so it is not a token. The deep green of the scene itself is a rendered image and not a colour token.

## Typography

A single proprietary family, **LexendHM** (400 and 700 loaded), carries everything: 14px for the heading and body (367 characters), 12px for buttons and links (71). The same family at weight 700 and 400 differentiates heading and body.

- **Display** {typography.display}: LexendHM 14px, weight 700, line-height 18px, letter-spacing -0.32px. The h3 "Our CCUS mission" is used as the heading role.
- **Mobile display** {typography.display-mobile}: 14.56px/16.64px, tracking -0.208px.
- **Body** {typography.body}: 14px, weight 400, 18px line-height, -0.32px tracking.
- **Button** {typography.button}: 12px, weight 400, 16px line-height, +0.32px tracking (positive tracking at the small size, negative at 14px).

Footer links use 12px with text-transform capitalize. The type is small and quiet; hierarchy comes from weight and colour, not scale. LexendHM is a custom Lexend variant; Lexend from Google Fonts is a close open alternative, which is a suggestion and not a measurement.

## Layout

Everything is centred in a viewport-filling stage. The card is a single column with centre-aligned text, an icon header split into two cells, and a button below. Measured padding values: 21px (10 elements), 10px (6), 8.88883px (6), 20px (4), 48px, 75px, 5px and 1px. The card's recorded padding is 10px 10px 129px. Flex gaps recorded: 10px (10), 24px (4), 8.88883px (4). The theme sets `--frame-padding: 1.25rem` and a z-index ladder (`--z-panel` 5, `--z-header` 4, `--z-footer` 3, `--z-loader` 2, `--z-tutorial` 1).

## Elevation & Depth

Shadows are minimal and soft: rgba(0, 0, 0, 0.04) 0px 2px 14px 0px, and white inner glows rgba(255, 255, 255, 0.15) 4px 4px 14px 8px inset and 0px 0px 14px 8px inset on the button (the theme names `--button-gradient-step1: rgba(0,0,0,.04)` and `--button-gradient-step2: hsla(0,0%,100%,.02)`). Depth is mostly the contrast of the bright white card on the dark green particle scene.

## Shapes

Radii are large and asymmetric. The frequency table lists "0px 14px" (7 elements), "0px 10px" (5), "0px 0px 0px 10px", "0px 0px 0px 91px" (the card's lower-left corner), 100px, 325px, "0px 20px" and 50%. The card has square top and right corners and one very large rounded bottom-left corner (91px). The button is a 100px-radius capsule ({rounded.xs}); {rounded.sm} is 325px and {rounded.pill} 9999px. The circular arrow badge is 50%.

## Components

- **Primary button ("Next")**: {colors.primary} fill, {colors.on-primary} 12px label, radius {rounded.xs} (100px), padding 1px 6px 1px 5px, 59px high, with a {colors.accent-green} circular badge on the left carrying a black arrow. It has the soft shadows above.
- **Card**: {colors.canvas} background, {colors.ink} text, padding 10px 10px 129px, bottom-left radius 91px, 0px elsewhere.
- **Link**: white 12px text, capitalised ("Imprint", "Data Protection").
- **Footer**: white text over the scene.

No form input, navigation bar or h1 was found; the heading role is an h3.

## Design System Architecture

No public design system or brand guideline page is linked from this microsite: the page content contains only the Imprint and Data Protection links, and no search was run. The de-facto system is a small set of root variables: --dark-green #004e2b, --light-green #00dd39, --sandy-grey #e6e6df, --dark-grey #3b3b3b, --silver-grey #767676, --white #fff, --custom-ease cubic-bezier(.45,0,.25,1), --frame-padding 1.25rem, --button-background transparent and the --z-* stack. The experience is a purpose-built single-page app, not a component library.

## Do's and Don'ts

- Do use LexendHM at 14px for text, with 700 for the heading.
- Do keep text on the white card in dark green #004e2b.
- Do pair the sandy-grey capsule button with a bright green arrow badge.
- Do use one oversized rounded corner on cards.
- Don't introduce additional colours; the palette is green, warm grey and white.
- Don't treat the stippled background objects as UI colour tokens.
- Don't scale type up; the experience is deliberately small and calm.

## Responsive Behavior

Mobile (390px) was measured: the heading and body become 14.56px with 16.64px line-height and -0.208px tracking; the button label is 11.44px with 0.208px tracking, 65.0001px radius and padding 0px 6px 0px 4.16001px; the ladder is 14.56px (367 characters), 12.48px (23) and 11.44px (4). Layout reflow and any navigation pattern are not measured.

## Iteration Guide

1. Build one centred white card on a dark green field; keep corners square except one large radius.
2. Set text in LexendHM 14px, #004e2b; headings in weight 700.
3. Add a capsule button in #e6e6df with a #00dd39 circular arrow badge.
4. Keep copy short and sequential.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=heidelberg-ccus--<page> --url=<url> --force --no-motion` before adding tokens.

### Measurement notes for rebuilders

The extraction found one candidate CTA only (the "Next" button), no secondary or outlined button, no input, no nav element and no hover states (the hover probe returned an empty list). Body text weight is 400 for 385 characters and 700 for 53. The letter-spacing table pairs 14px with -0.32px (367 characters) and 12px with 0.32px (49 characters), so a rebuild should keep tracking tight on the 14px text and slightly open on the 12px labels. Font sizes outside 14px and 12px were not measured on the desktop pass. Border colours are not recorded (the border table is empty), so the card's thin inner frame and the divider lines between the two icon tabs in the capture are described but not tokenised. The page's total height equals the viewport (800px), which is why it behaves as a stage rather than a document.
