---
version: alpha
name: 2C2P by Antom
category: "Thai Brands"
description: "2C2P by Antom is a Southeast Asian payments brand whose homepage is a saturated #0088ff blue hero with white Poppins-SemiBold headlines at 60px, a white content body, an aqua #a7eaeb band and square outlined uppercase buttons, set in the Poppins family at regular weight 17px body."
colors:
  canvas: "#0088ff"
  page-body: "#ffffff"
  ink: "#000000"
  primary: "#0088ff"
  surface-aqua: "#a7eaeb"
typography:
  display:
    fontFamily: Poppins-SemiBold
    fontSize: 60px
    fontWeight: 400
    lineHeight: 65px
    letterSpacing: "-5px"
  display-mobile:
    fontFamily: Poppins-SemiBold
    fontSize: 40px
    fontWeight: 400
    lineHeight: 45px
    letterSpacing: "-2px"
  subheading:
    fontFamily: Poppins-Medium
    fontSize: 27px
    fontWeight: 400
    lineHeight: 34px
    letterSpacing: "-0.81px"
  body:
    fontFamily: Poppins-Regular
    fontSize: 17px
    fontWeight: 400
    lineHeight: 25px
    letterSpacing: 0.34px
  nav:
    fontFamily: Poppins-Medium
    fontSize: 12px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.24px
    textTransform: uppercase
  button-secondary:
    fontFamily: Poppins-Semibold
    fontSize: 12px
    fontWeight: 400
    textTransform: uppercase
  input:
    fontFamily: Poppins-Regular
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.26px
rounded:
  xs: 10px
  sm: 50px
  pill: 9999px
spacing:
  s1: 4px
  s2: 10px
  s3: 13.5px
  s4: 14.25px
  s5: 15px
  s6: 18.5px
  s7: 25px
  s8: 25.6px
  s9: 35px
  s10: 40px
components:
  button-secondary:
    textColor: "{colors.page-body}"
    typography: "{typography.button-secondary}"
    padding: 10px
    height: 40px
    borderColor: "{colors.page-body}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 0px 0px 10px
    height: 31px
---

## Overview

2C2P presents itself on its own about page as "a full-suite payments platform powering businesses of all sizes across Southeast Asia", headquartered in Singapore, and the homepage wears the logo lockup "2C2P by Antom". The visual identity measured from the live homepage is built from very few ingredients: one electric blue (`{colors.primary}`, the site's own `--accent-color` custom property), pure white, pure black text, and a pale aqua band (`{colors.surface-aqua}`). The first screen is a full-bleed blue hero carrying a three-line white headline, "Payments for Southeast Asia businesses", with each line indented further than the one above it, a one-line subhead and a single outlined button. Behind the headline a field of fine white contour lines sweeps across the blue like a wave, a motif that returns on the aqua band further down the page where the same lines are drawn in blue.

Below the hero the page turns white: a short client-logo strip (airline, hotel, marketplace and insurance names rendered in grey), a second headline, "Accept any type of payment", set in the same blue as the hero over a softly blurred photograph of hands holding phones, then three narrow columns separated by thin vertical rules, each with a line icon in blue, a medium-weight title and a short paragraph. A cream tone (`--background-color-1`, #fff9e7) and a yellow (`--main-yellow`, #ffe79c) exist in the site's CSS variables; the yellow shows up as a small dot inside the hero button.

The tone is plain and confident: short declaratives ("Make payments simple", "Pay by instalments"), uppercase micro-labels for navigation, and no decorative illustration beyond the line icons and the wave pattern. The page is generous with vertical space, and sections alternate blue, white, aqua, cream, so each message gets its own colour field.

## Colors

The palette is measured, not inferred. Area-weighted background colors on the desktop capture are white (`{colors.page-body}`), blue (`{colors.canvas}`, identical to `{colors.primary}`), aqua (`{colors.surface-aqua}`) and cream. Text by character count is `{colors.ink}` (pure black) for body copy and titles, `{colors.primary}` for display headlines on white, and white for text on the blue hero.

- **Blue `{colors.primary}`**: the signature. It fills the hero, colours the second-level headlines on white and appears in line icons and the small header "Contact us" pill. It also doubles as the canvas token because it is the dominant above-the-fold field.
- **White `{colors.page-body}`**: body background of the content sections and the text color on blue.
- **Black `{colors.ink}`**: all paragraph and card-title text. There is no grey ramp for body copy; hierarchy comes from weight and size.
- **Aqua `{colors.surface-aqua}`**: the "Make payments simple" band, a calm secondary field carrying blue headlines.

Browser default link colours are not part of the brand and are not used here. The site's CSS also ships unrelated WordPress preset colours (for example a vivid purple) and cookie-banner variables; these are platform noise and are not documented as brand colours.

## Typography

One family carries everything: Poppins, loaded as three separate faces named Poppins-Regular, Poppins-Medium and Poppins-SemiBold, so weight is expressed by choosing the face rather than by a numeric font-weight (the computed font-weight is 400 throughout, which is why the tokens say 400). Poppins is a geometric sans from the Google Fonts ecosystem; the faces here are self-hosted on the site.

- **Display** (`{typography.display.fontSize}` / `{typography.display.lineHeight}`, letter-spacing `{typography.display.letterSpacing}`): the hero h1, in Poppins-SemiBold, white. The very tight tracking gives the headline a dense, poster-like look. On a 390px viewport it drops to `{typography.display-mobile.fontSize}` with `{typography.display-mobile.letterSpacing}` tracking.
- **Subheading** (`{typography.subheading.fontSize}`, Poppins-Medium, `{typography.subheading.letterSpacing}`): titles of the three feature columns.
- **Body** (`{typography.body.fontSize}` / `{typography.body.lineHeight}`, Poppins-Regular, `{typography.body.letterSpacing}`): paragraphs, slightly open tracking.
- **Nav** (`{typography.nav.fontSize}`, Poppins-Medium, uppercase, `{typography.nav.letterSpacing}`): header links such as Solutions, Who we serve, About us, Resources, and the announcement strip above the header.
- **Button label** (`{typography.button-secondary.fontSize}`, Poppins-Semibold, uppercase).
- **Input** (`{typography.input.fontSize}`, Poppins-Regular).

Poppins is freely available, so no substitute is required; if the faces fail to load, any geometric sans with a large x-height such as Montserrat is the closest fallback.

## Layout

The desktop capture is 1280px wide and about 6,238px tall. Content sits on a wide left-aligned container with a left margin visible at roughly the same position for every heading; the hero headline lines step progressively to the right, creating a staircase. Feature sections use three columns divided by one-pixel vertical rules instead of cards. Spacing values measured on the page include `{spacing.s1}`, `{spacing.s2}`, `{spacing.s5}`, `{spacing.s7}`, `{spacing.s9}` and `{spacing.s10}`; the site's header-height variable is 61px. Alternating full-width colour bands separate topics.

## Elevation & Depth

The extraction recorded no box shadows on the page. Depth comes from colour fields, the blurred photograph behind "Accept any type of payment" and the layered line pattern, not from drop shadows. The WordPress theme declares an "outlined" shadow preset, but no element on the measured homepage uses a shadow, so do not add them.

## Shapes

Radii measured on the homepage: `{rounded.xs}`, `{rounded.sm}` and fully round (`{rounded.pill}` token). The outlined hero button is square (0px radius), the header "Contact us" control is a pill, and circular icon containers use 50%. The contrast between the square hero button and the pill header control is part of the look: large primary-section buttons are rectangular, small utility actions are rounded.

## Components

- **Outlined hero button** (`button-secondary`): transparent fill, 1px white border, white uppercase Poppins-Semibold label, 10px padding, 40px high, 200px wide in the capture. A small yellow dot sits before the label. On hover the label turns black while the border stays white (measured hover state).
- **Navigation**: uppercase Poppins-Medium links in black on a white bar with the logo at left; a "Contact us" pill and "Login" link at right, plus a country selector. An announcement strip above the header carries a dismiss control; that and any cookie or language popups are chrome, not brand UI.
- **Text input**: bottom-padded, borderless field, 13px text, 31px tall, 400px wide.
- **Feature columns**: line icon, `{typography.subheading.fontSize}` title, body paragraph, separated by 1px vertical rules.

## Design System Architecture

No public design system or token package for 2C2P was found. The about page (https://www.2c2p.com/about-us) mentions a downloadable brand guide, but the guide itself was not opened, so none of its contents are used here. The de-facto system is a WordPress theme: custom properties include `--accent-color: #0088FF`, `--background-color-1: #FFF9E7`, `--main-yellow: #ffe79c`, `--yellow-variant-2: #fff3cf`, `--pink-variant-3: #fcd5f6`, `--orange-variant-2: #ffbd98`, `--header-height: 61px`, together with standard `--wp--preset--*` variables. Colour tints are named as variants (yellow, apricot, pink, orange), indicating a palette of pastel supporting fields beyond the blue and aqua visible above the fold.

## Do's and Don'ts

- Do use `{colors.primary}` as the dominant field and as headline colour on white.
- Do keep headlines in Poppins-SemiBold with tight negative tracking.
- Do use uppercase tracked micro-type for navigation and buttons.
- Do alternate full-width colour bands.
- Don't add drop shadows; the site uses none.
- Don't set body text in grey; the site uses pure black `{colors.ink}`.
- Don't round the large hero outline button.
- Don't treat cookie, language or announcement controls as brand components.

## Responsive Behavior

The extractor also captured a 390px mobile viewport. The h1 shrinks from `{typography.display.fontSize}` to `{typography.display-mobile.fontSize}` (line height 45px, tracking `{typography.display-mobile.letterSpacing}`), and the headline block narrows to 360px wide. The staircase indentation, the three-column layout and the header navigation were not individually measured at mobile width, so they are not described here.

## Iteration Guide

1. Start from the blue field: set canvas to `{colors.canvas}` and white text in Poppins-SemiBold at `{typography.display.fontSize}`.
2. Add one outlined, square, uppercase button before introducing any filled button.
3. Add a white section with black Poppins-Regular text at `{typography.body.fontSize}`.
4. Introduce `{colors.surface-aqua}` only for a secondary band carrying blue headlines.
5. Add the wave line motif as a background accent, never behind body copy.
6. Re-measure any new component with the extractor before adding a token.
