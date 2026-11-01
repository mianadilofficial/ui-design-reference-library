---
version: alpha
name: Benevity
category: "Design Systems"
description: "Benevity's homepage pairs a deep indigo canvas (#160e4c, the site's own moonshot-blue) with white Red Hat Display 700 headlines at 66.6px, a raspberry #d1305e pill CTA with 9999px radius, a pale #f0f7fc content band, violet #2c03b0 headings and aqua #61eff2 eyebrows — an enterprise purpose-software brand that speaks in confident, human photography."

colors:
  canvas: "#f0f7fc"
  page-body: "#ffffff"
  ink: "#000000"
  primary: "#d1305e"
  on-primary: "#ffffff"
  moonshot-blue: "#160e4c"
  ink-secondary: "#4f4f4f"
  visionary-violet: "#2c03b0"
  ink-lavender: "#c8c8e0"
  primary-hover: "#b91c1c"
  eyebrow-blue: "#0036ff"
  aqua: "#61eff2"
typography:
  display:
    fontFamily: "\"Red Hat Display\", Arial, sans-serif"
    fontSize: 66.6px
    fontWeight: 700
    lineHeight: 73.26px
  display-mobile:
    fontFamily: "\"Red Hat Display\", Arial, sans-serif"
    fontSize: 37.6px
    fontWeight: 700
    lineHeight: 41.36px
  heading:
    fontFamily: "\"Red Hat Display\", Arial, sans-serif"
    fontSize: 21.3px
    fontWeight: 700
    lineHeight: 25.56px
  subheading:
    fontFamily: "\"Red Hat Display\", Arial, sans-serif"
    fontSize: 28.3px
    fontWeight: 700
    lineHeight: 33.96px
  button:
    fontFamily: "\"Red Hat Tex\", Impact, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
    letterSpacing: 0.32px
  link:
    fontFamily: "\"Red Hat Tex\", Impact, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
rounded:
  xs: 6px
  pill: 9999px
spacing:
  s1: 3.5px
  s2: 4px
  s3: 8px
  s4: 10.08px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 18.08px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 15px 24px
    height: 40px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 15px 24px
    height: 48px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.page-body}"
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 15px 24px
    borderColor: "{colors.page-body}"
  footer:
    backgroundColor: "{colors.moonshot-blue}"
    textColor: "{colors.page-body}"
---

## Overview

The measured page is benevity.com, titled "AI-Native Corporate Purpose Software | Benevity". Benevity sells the Benevity Enterprise Impact Platform: employee giving, volunteering, grants and impact reporting in one system. The capture opens on a deep indigo hero with a small aqua eyebrow ("PURPOSE AT WORK"), a three-line white headline ("Trust at scale. Undeniably proven."), a short paragraph, a review-rating chip, a raspberry "Get a personalized demo" pill and a text link "Watch an interactive demo". On the right a photograph of two colleagues looking at a tablet is overlaid with a glassy AI-prompt pill and two faded sample questions. Below the hero a white strip carries the line "Trusted by nearly 1,000 of the world's most admired companies" over a row of grayscale customer logos; next comes a pale blue band with the question "What is the Benevity Enterprise Impact Platform?", three statistics ($16.6B total donated, 122.9M volunteer hours, $20.1B grants managed) and an illustration of six violet circular icons orbiting a portrait; then "One platform — not five point solutions." with tinted cards for Donate, Volunteer and Grants.

The voice is assured and outcome-driven: short declarative claims, numbers as proof, a human-centred tone. Colour moves from dark to light down the page, which makes the first screen feel premium and the rest feel open.

## Colors

The generated canvas token is #f0f7fc, the pale blue band background that the site names `--base-color-brand--blue-20`; page-body (#ffffff) is the plain page background, and the hero itself is painted in moonshot-blue (#160e4c), which is also the footer fill and the most-read non-black text colour on the site.

- **primary (#d1305e)** is the fill and border of every pill CTA, with white (#ffffff) labels; the site calls it `--base-color-brand--red`. **primary-hover (#b91c1c)** is the hover state, named `--base-color-brand--odd-red` in the stylesheet.
- **moonshot-blue (#160e4c)** is the dark indigo of the hero, navigation and footer.
- **visionary-violet (#2c03b0)** colours section headings on light bands.
- **ink (#000000)** is the most-read text colour on white cards; **ink-secondary (#4f4f4f)** colours secondary descriptions; **ink-lavender (#c8c8e0)** is the soft text on dark.
- **eyebrow-blue (#0036ff)** colours the small uppercase eyebrow on light backgrounds (the site's `--base-color-brand--eyebrow-blue`) and **aqua (#61eff2)** is the eyebrow colour on the dark hero (`--base-color-brand--aqua`).

The stylesheet defines many more brand tones (pinks, purples, coral, a ring-colour ramp, status yellows, greens and reds) that were not confirmed as painted on the first screen and are not tokenised.

## Typography

Benevity loads Red Hat Display (weights 700 and 800) for headlines and Red Hat Text (400 to 700, with italics) for body and controls. In the extracted values the second family is registered as "Red Hat Tex".

- **display**: Red Hat Display, 66.6px, weight 700, line-height 73.26px, white on the hero. On a 390px viewport: 37.6px with 41.36px line-height (display-mobile).
- **subheading**: Red Hat Display, 28.3px, weight 700, line-height 33.96px.
- **heading**: Red Hat Display, 21.3px, weight 700, line-height 25.56px (for example "Trusted by nearly 1,000 ...").
- **button**: Red Hat Text, 16px, weight 600, line-height 16px, letter-spacing 0.32px.
- **link**: Red Hat Text, 16px, weight 700, line-height 24px.

Tight but not cramped leading in display sizes, small uppercase eyebrows in tracked caps, and body copy that is mid-grey on light and white on dark create the hierarchy.

## Layout

A wide single-column page with a two-column hero (copy left, photo right) and alternating full-bleed bands: indigo, near-white, pale blue, white. Content sits in a centred container with comfortable side margins; statistic blocks and cards use equal-width three-column grids. Measured spacing values are 3.5px, 4px, 8px, 10.08px, 12px, 15px, 16px, 18.08px, 20px and 24px; the CTA padding is 15px 24px. Density is moderate: generous vertical padding between bands, tight spacing inside components.

## Elevation & Depth

Almost no shadows were measured. Depth comes from colour blocking (indigo hero against white and pale blue bands), photo overlays, semi-transparent glassy chips on the hero image and thin outlined controls. The orbit illustration uses concentric rings in lighter violets and a dashed outline to suggest layers. Keep elevation flat and rely on tonal contrast.

## Shapes

Two radii were measured: 6px (xs) and a full pill (9999px). Every CTA and navigation button is a capsule; the extractor reports the computed radius as 9099.01px, which maps to the pill token. The stylesheet exposes a radius scale in rem (small, regular, medium, large, xlarge and an effectively infinite xxlarge), and the circular icons in the orbit illustration echo the pill logic. Cards are softly cornered tinted rectangles.

## Components

- **button-primary** ("Get a tour"): #d1305e fill and border, white label, Red Hat Text 16px weight 600 with 0.32px tracking, pill radius, padding 15px 24px, height 40px; hover fills #b91c1c.
- **button-secondary** ("Get a personalized demo"): same fill, border and radius, height 48px.
- **nav-link** ("For nonprofits"): transparent pill with a white 1px outline and white label on the indigo bar.
- **link**: white Red Hat Text 16px weight 700 with line-height 24px on dark; includes an arrow glyph ("Watch an interactive demo").
- **nav**: indigo bar with white items and chevrons for Products, Solutions, About Us and Resources.
- **footer**: moonshot-blue fill with white text.
- **cards** (Donate, Volunteer, Grants): very pale blue fill, violet title, grey description. No card measurement was extracted, so only the visual description is given.

## Design System Architecture

Benevity maintains a public design system called Skyline at https://skyline.benevity.org; the opened page says it "helps guide Benevity's product experiences" and offers sections on color, space and typography and Sass utilities. It published no token values on the page that was read, and it is not shown to be what powers benevity.com, so nothing is taken from it. The marketing site's own stylesheet is the evidence used here: it declares roughly 147 custom properties with double-dash names such as `--base-color-brand--red`, `--base-color-brand--moonshot-blue`, `--base-color-neutral--content-primary`, `--_border-radius---regular` and `--_text-style---font-weight`. That layered scheme (base colours, then background/text/border colours that point to them with var()) is the de-facto token architecture of the marketing site.

## Do's and Don'ts

- Do use #d1305e pills with white labels for every primary action, and #b91c1c on hover.
- Do alternate indigo (#160e4c) and pale (#f0f7fc, #ffffff) bands.
- Do set headlines in Red Hat Display 700 and controls in Red Hat Text 600.
- Do use aqua (#61eff2) only for small eyebrows on dark, and #0036ff for eyebrows on light.
- Don't use square-cornered buttons; the pill is the signature.
- Don't use pure black headlines on dark or pastel surfaces; use white or violet (#2c03b0).
- Don't add heavy shadows.
- Don't treat the hover red as a second brand colour.

## Responsive Behavior

The display headline reduces from 66.6px to 37.6px (line-height 73.26px to 41.36px) at a 390px viewport. The desktop hero's two columns, the logo marquee and the three-column card grid are expected to compress; only the h1 was measured on mobile, so other breakpoints are not specified. Controls keep 40px and 48px heights, which remain tappable.

## Iteration Guide

1. Open with an indigo (#160e4c) hero, an aqua eyebrow, a white 66.6px bold headline and one raspberry pill CTA.
2. Follow with a white logo strip and a #f0f7fc explainer band with violet headings.
3. Prove claims with three bold figures.
4. Keep photography warm and human, with glassy overlays for AI features.
5. Add new colours only if present in the site's variable list; otherwise describe them.
