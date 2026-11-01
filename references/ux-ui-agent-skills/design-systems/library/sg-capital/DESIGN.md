---
version: alpha
name: SG Capital
category: "Thai Brands"
description: "SG Capital (sgcapital.co.th/en/home), a Thai non-banking financial services provider: FC Iconic typeface at 400 and 600, white canvas #ffffff, brand red #f5333f, brand blue #003da6, black pill buttons with 30px radius and 16px-radius cards with a soft blue shadow."
colors:
  canvas: "#ffffff"
  page-largest: "#efefef"
  ink: "#000000"
  primary: "#f5333f"
  on-primary: "#ffffff"
  brand-blue: "#003da6"
  ink-muted: "#939598"
  ink-deep: "#212529"
  hairline: "#dededf"
typography:
  display:
    fontFamily: "\"FC Iconic\", sans-serif"
    fontSize: 57px
    fontWeight: 600
    lineHeight: 71.25px
  display-mobile:
    fontFamily: "\"FC Iconic\", sans-serif"
    fontSize: 36.2438px
    fontWeight: 600
    lineHeight: 45.3047px
  body:
    fontFamily: "\"FC Iconic\", sans-serif"
    fontSize: 23px
    fontWeight: 600
    lineHeight: 31.05px
  button:
    fontFamily: "\"FC Iconic\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
  nav:
    fontFamily: "\"FC Iconic\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 20px
  xl: 24px
  2xl: 30px
  3xl: 50px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 44px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 16px 32px
    height: 50px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 16px 32px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 12px 20px 12px 44px
    height: 50px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 24px 0px 0px
    boxShadow: rgba(129, 171, 244, 0.3) 0px 4px 16px 0px
  footer:
    textColor: "{colors.canvas}"
---

## Overview

SG Capital's English homepage (redirected from sgcapital.co.th to /en/home) presents the company as "a non-banking financial service provider dedicated to empowering Thais with financial opportunities", under the hero line "SG CAPITAL Financial Services Provider for an Easier Life". The capture opens on a dark, blurred light-trail video background with the headline centered in white and a white pill button "View Full Video". Below it a white section ("Discover Financial Services / Tailored to Your Lifestyle") shows two product cards, SGFINANCE+ and Debt Consolidation, each with a photo and a red gradient information panel containing white copy and a white pill "Explore More" button. A third section on a pale pink-white gradient pairs a smiling presenter surrounded by floating feature chips ("Nationwide Coverage", "Simple Payments", "Quick Balance Check", "Fast Approval") with a statement that begins "Driving the organization with data, innovation, and ...".

The system is built on one typeface, a black-and-white base, and a red-to-coral accent. Measured values: `{colors.canvas}` #ffffff, `{colors.page-largest}` #efefef (the largest background area), `{colors.ink}` #000000, `{colors.primary}` #f5333f and `{colors.brand-blue}` #003da6. Voice is plain, benefit-led English: short product names with an explanatory sentence and a single "Explore More" action.

Imagery and art direction in the capture: the hero is a dark, motion-blurred light-trail video with red and blue streaks; product cards use photography (a hand holding a phone with the SGFINANCE+ app, three colleagues talking at a table) with a white logo tile overlapping the photo's bottom-right corner; the feature section uses a cut-out portrait of a smiling man inside concentric pale-red circles with small rounded white label chips and rounded icon tiles around him. Photography is warm and human, the interface chrome is minimal, and the red gradient panels give each product card a strong color block.

## Colors

- **`{colors.canvas}` #ffffff:** the page ground and button text on black. Background-by-area ranks #efefef first (weight 1,245) and #ffffff second (921).
- **`{colors.page-largest}` #efefef:** the largest measured background area.
- **`{colors.ink}` #000000:** the main text color (2,475 characters) and the measured fill of the detected primary CTA.
- **`{colors.primary}` #f5333f:** red used as text (97 characters), as a background area, and as the hover color of links; on hover the "View Full Video" label turns from black to this red, and the "About Us" outlined link gains a pale red fill (#feebec) with red text. It was reassigned here from the extractor's black CTA fill because the red is the measured accent; black is kept as `{colors.ink}`.
- **`{colors.brand-blue}` #003da6:** measured as a small background area (weight 4) and published as `--blue-500` in the site's root variables.
- **`{colors.ink-muted}` #939598** (96 characters) and **`{colors.ink-deep}` #212529** (11 characters) are secondary text colors; **`{colors.hairline}` #dededf** is the border color on 36 elements.
- The red gradient on the cards is an image/gradient fill; its exact stops were not extracted, so no gradient token is declared.

## Typography

One family, "FC Iconic", set 3,370 of the counted characters. Loaded faces: FC Iconic 400 and 600, plus Font Awesome 6 Pro and Brands and an icomoon icon font.

- **Display `{typography.display}`:** 57px, weight 600, line-height 71.25px, white on the hero. Mobile pass: 36.2438px with line-height 45.3047px (`display-mobile`), rendered 358px wide and 91px high.
- **Body `{typography.body}`:** 23px, weight 600, line-height 31.05px (the extractor's selected body element); 19px (1,018 characters) and 16px (1,096 characters) are the most frequent running sizes.
- **Button `{typography.button}`:** 16px, weight 600, line-height 16px.
- **Nav `{typography.nav}`:** 16px, weight 400, line-height 24px.
- Other sizes counted: 14px, 48px, 33px, 12px, 40px and 10px. Weights: 600 (1,809 characters) and 400 (1,561).

FC Iconic is a Thai-script-capable family; the site's root variables define a standard Bootstrap sans-serif system stack as a fallback.

## Layout

Desktop scroll height is 6,323px at 1280px width. Sections alternate: full-bleed dark hero, white two-column card grid, pale gradient feature section with image left and text right. Cards are two across with a gutter between them; the measured gaps are 16px (10), 24px (7), 8px (6), 48px (6), 32px (4), 4px and 20px. Paddings most used: 16px (49 occurrences), 24px (36), 8px (15). The root variables define Bootstrap-style breakpoints including `--breakpoint-xl` 1200px and `--breakpoint-xxl` 1640px.

## Elevation & Depth

A single shadow was measured, `rgba(129, 171, 244, 0.3) 0px 4px 16px 0px`, on 12 elements; the card token carries it. It is a soft blue-tinted lift, not a dark drop shadow. The hero uses a dark video background with white text for contrast rather than elevation. The header sits over the hero (`nav` token text is white).

## Shapes

Radii measured: 8px (38 elements), 50% (22, circles), 16px (14), 30px (12), 50px (8), 4px (3), 20px (2), 24px (1). Tokens: `xs` 4px, `sm` 8px (text input), `md` 16px (cards), `lg` 20px, `xl` 24px, `2xl` 30px (primary button), `3xl` 50px and `pill`. Buttons in the capture are pills; cards have the 16px rounding with a photo on top and a color panel below.

## Components

- **Primary button (`button-primary`):** fill `{colors.ink}` black, text `{colors.canvas}`, `{typography.button}`, radius `{rounded.2xl}` 30px, padding 16px 32px, height 50px; the measured label is "Explore More". The capture also shows white pill buttons with black text (hero "View Full Video", 54px high, 30px radius) and white "Explore More" pills on the red cards; their hover is a text color change to `{colors.primary}`.
- **Link (`link`):** white fill, black text, 30px radius, padding 16px 32px.
- **Outlined link:** "About Us" is 28px high with a 50px radius and a black border; hover fills pale red (#feebec) and turns text red.
- **Text input:** white fill, 8px radius, padding 12px 20px 12px 44px (icon gutter), height 50px.
- **Card:** 16px radius, padding 24px 0px 0px, blue-tinted shadow, red gradient information panel.
- **Nav and nav-link:** 16px FC Iconic, black links on white backgrounds elsewhere; white over the hero.

## Design System Architecture

No public design system or brand-guideline page was found in this session; none was searched for. The de-facto system is Bootstrap-derived: root variables include `--light` #f8f9fa, `--success` #28a745, a numbered ramp of blues, greens, yellows, reds and greys (for example `--blue-700` #002B76, `--blue-500` #003DA6, `--blue-400` #3B75D9, `--light-blue-400` #52BBE7, `--green-800` #18643F, `--red-800` #871C23, `--grey-900` #3E3F40, `--grey-400` #B7B8BA), a Bootstrap sans-serif font stack and breakpoint variables. Icons come from Font Awesome 6 Pro. Only the colors observed on screen are promoted to tokens here.

## Do's and Don'ts

- Do set headlines in FC Iconic 600 and keep white text on the dark hero.
- Do use pill buttons (30px or larger radius) for actions and the 16px radius for cards.
- Do use the red `{colors.primary}` for hover and accent states.
- Don't add dark drop shadows; the one measured shadow is a soft blue-tinted lift.
- Don't use unmeasured ramp colors from the root variables as if they were on-screen brand colors.
- Don't mix in a second typeface.

## Responsive Behavior

Mobile pass at 390px measured: h1 36.2438px, line-height 45.3047px, 358px wide, 91px tall, and an h2 "Financial Services Provider for an Easier Life" with the same size. Navigation collapse, card stacking and spacing changes are not measured.

## Iteration Guide

1. Start with `{colors.canvas}`, `{colors.ink}` and FC Iconic.
2. Add pill actions from `button-primary` and the white pill variant over imagery.
3. Use `{colors.primary}` only for accent and hover.
4. Reuse the 16px card radius with the measured blue-tinted shadow.
5. Run `node web/scripts/verify-designs.mjs --slug=sg-capital`.
