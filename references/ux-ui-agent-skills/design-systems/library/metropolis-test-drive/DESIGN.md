---
version: alpha
name: Metropolis Test Drive
category: "Tech & AI"
description: "Metropolis Test Drive (testdrive.metropolis.io): an interactive Metropolis parking walkthrough on a white card over a grey 3D city, #5f59ff indigo square buttons, #1c1c1c ink, TT Hoves at 36px and 47.45px with negative tracking, 4px and 8px radii and 50% pins."
colors:
  canvas: "#ffffff"
  ink: "#1c1c1c"
  primary: "#5f59ff"
  on-primary: "#1c1c1c"
  surface-grey: "#eaeaea"
typography:
  display:
    fontFamily: __TTHoves_184657, __TTHoves_Fallback_184657
    fontSize: 36px
    fontWeight: 400
    lineHeight: 54px
  display-mobile:
    fontFamily: __TTHoves_184657, __TTHoves_Fallback_184657
    fontSize: 42px
    fontWeight: 400
    lineHeight: 37.8px
    letterSpacing: "-2.1px"
  heading:
    fontFamily: __TTHoves_184657, __TTHoves_Fallback_184657
    fontSize: 47.4483px
    fontWeight: 500
    lineHeight: 45.0759px
    letterSpacing: "-2.13517px"
  subheading:
    fontFamily: __TTHoves_184657, __TTHoves_Fallback_184657
    fontSize: 32.8276px
    fontWeight: 500
    lineHeight: 32.8276px
    letterSpacing: "-1.3131px"
  body:
    fontFamily: __TTHoves_184657, __TTHoves_Fallback_184657
    fontSize: 18.4456px
    fontWeight: 500
    lineHeight: 23.9793px
    letterSpacing: "-0.553368px"
  button:
    fontFamily: __TTHoves_184657, __TTHoves_Fallback_184657
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  link:
    fontFamily: __TTHoves_184657, __TTHoves_Fallback_184657
    fontSize: 12px
    fontWeight: 500
    lineHeight: 12px
    letterSpacing: "-0.12px"
    textTransform: uppercase
  button-secondary:
    fontFamily: __TTHoves_184657, __TTHoves_Fallback_184657
    fontSize: 15.2702px
    fontWeight: 500
    lineHeight: 15.2702px
rounded:
  xs: 4px
  sm: 8px
  none: 0px
  pill: 9999px
spacing:
  s1: 3.65px
  s2: 5px
  s3: 6.11px
  s4: 7.63px
  s5: 8px
  s6: 12px
  s7: 15px
  s8: 15.04px
  s9: 15.27px
  s10: 17px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 45px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    height: 45px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 0px 0px 1px
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, -238.875, 0)
---

# Metropolis Test Drive

Measured from https://testdrive.metropolis.io/ (final URL identical; title "Metropolis Test Drive"), 1280px desktop pass (an 800px single-screen app, 498 visible elements) and a 390px mobile pass. This is not the main Metropolis company site: it is a campaign microsite by Metropolis (the parking and mobility-technology company) credited in its footer "Made by Toyfight", which walks a visitor through how Metropolis's drive-in, drive-out parking works. The extraction was re-run with `--batch=phase2.json --only=metropolis-test-drive` because the first pass included a cookie notice ("This website uses cookies to provide you with a great experience." with an Accept button); the cookie notice is not documented as brand UI.

## Overview

A guided, step-based product demo. The stage is a pale grey 3D isometric city model filling the viewport, scattered with indigo map pins that carry the Metropolis "M" mark. A tall white card sits in the center column with the Metropolis mark on its top edge and a top-down white car on a pale road. The first screen reads "Metropolis Test Drive" (36px) over "Learn how our technology creates an unparalleled driver experience." with an indigo square button "See how it works →" and a small indigo dot link "How to sign up". The header offers "Start Again", step indicators (STEP 1 to STEP 3) and links "Test Drive", "About Metropolis" and "Get in Touch"; the footer says "Metropolis.io" and "Made by Toyfight".

The steps, from the page's own text: Step 1 "Which are you driving? Choose your car and color." with "I'm Ready"; Step 2 "First time visiting Metropolis? Drive in, become a Member once, pay seamlessly when you leave."; Step 3 "Scan the QR code to get started."; Step 4 "Signing up is simple." (phone number, license plate and payment details); Step 5 "Drive out when you're ready."; then "As a Member, you have access to every Metropolis location, anywhere." and "Just drive out. That's it." Tone: friendly, second person, plain, with a rhetorical list ("Grabbing groceries? Visiting a friend? Commuting home?").

Measured background areas: `#eaeaea` (1,190), `#5f59ff` (1,056), `#ffffff` (1,054), `#f2f2f2` (1,024). The body background is `#f2f2f2`.

## Colors

The palette has four values and one accent.

- **Canvas `#ffffff`**: the center card; page background `#f2f2f2`; city and panel grey `#eaeaea`.
- **Ink `#1c1c1c`**: all primary text (99 characters), on a white card or on the indigo button.
- **Primary `#5f59ff`**: a saturated indigo; it is the fill of every button and of the map pins (1,056 area). On the primary button the label is `#1c1c1c`; on the secondary button ("See how it works") it is white `#ffffff` (21 characters of white text overall).
- No other chromatic color was measured. The `--leva-*` variables in :root (including `#0066dc`) belong to the Leva debug panel library and are not brand colors.

## Typography

One family: **TT Hoves**, delivered through Next.js font optimization (CSS family name `__TTHoves_184657` with a size-adjusted fallback `__TTHoves_Fallback_184657`), loaded in weights 400, 500 and 600. The font files are served with the site; Inter or Helvetica Neue are stand-ins when TT Hoves is unavailable.

Scale: page title 36px/54px weight 400 (42px/37.8px with -2.1px tracking on mobile), step heading 47.4483px/45.0759px weight 500 with -2.13517px tracking ("Which are you driving?"), card heading 32.8276px/32.8276px weight 500 with -1.3131px tracking, body 18.4456px/23.9793px weight 500 with -0.553368px tracking, button 18px/27px weight 400, secondary button 15.2702px weight 500 (the most used size, 71 characters), footer link 12px uppercase weight 500 with -0.12px tracking, and a 71.7931px size with -3.58966px tracking on the body element's large numeral ("100%"). Tracking is consistently about -4% to -5% on big type (for example -2.13517px at 47.4483px), which gives the page a tight, modern, product-demo look. Small type is tracked far less (-0.12px at 12px).

## Layout

The app is one 1280 by 800 stage with a 59px header. Content lives in a central white card with the 3D city visible on both sides of it. Measured paddings: 27.6211px (12), 22.5403px, 15.0404px, 30.3509px, 5px, 32.7018px; gaps 6.10807px (14), 15.2702px (8), 7.62947px (8), 8px. Navigation uses a translated (`matrix(1, 0, 0, 1, -238.875, 0)`) skip link, i.e. an off-screen accessibility link.

## Elevation & Depth

No box shadows were measured. Depth comes from the 3D city render (a rendered Three.js scene is referenced in the page source) and the white card overlaying it. Footer links have an animated underline built from a pseudo-element (`beforeShape`, `#ffffff`, scaled from `matrix(0, 0, 0, 1, 0, 0)`), not a shadow.

## Shapes

Radii measured: `4px` (16 elements), `50%` (7, the round pins and dots), `8px` (1). Buttons render at 0px radius (square). The token set keeps `none: 0px`, `xs` 4px, `sm` 8px and `pill`. The white card shows slightly softened corners in the capture, but its exact radius was not isolated from the 4px and 8px measurements.

## Components

- **Primary button:** `#5f59ff` fill, `#1c1c1c` label at 18px weight 400, height 45px, 243px wide ("Continue To Next Step"), radius 0.
- **Secondary button:** `#5f59ff` fill, white label at 15.2702px weight 500 with an arrow, height 45px, 204px wide ("See how it works →"), radius 0.
- **Dot link:** a 50%-radius indigo dot with a text link ("How to sign up").
- **Step indicator:** "STEP 1", "STEP 2", "STEP 3" in the header.
- **Footer link:** white 12px uppercase weight 500 with a scale-in underline ("TOYFIGHT").
- **Map pin:** indigo teardrop containing the Metropolis mark.
- **Form fields (step 4):** Phone number, License plate, Payment details.

## Design System Architecture

No public design system is linked from this microsite (https://testdrive.metropolis.io/ opened). It is a Next.js application (41 `_next/static` references; fonts via `next/font` as `__TTHoves_*`) with a Three.js scene (7 references to "three" in the HTML) and the Leva control panel's CSS variables (`--leva-*`) present in :root. The brand system it implements is minimal: white and grey surfaces, one indigo, one near-black, one typeface, square buttons.

## Motion and Interaction Notes

The page text exposes the interaction model: "Tap the arrow to drive in", "Tap the arrow to drive Out", "Hover over the QR code and click", and a "Start Again" control that resets the flow. Calls to action are labeled by the next action rather than by generic verbs ("I'm Ready", "Continue", "Drive In", "Drive Out", "Learn About Validations", "Learn About Passes", "Learn About Monthly Subscriptions", "Learn About Our Technology"). No motion recording was taken (the extractor ran with `--no-motion`), so animation timing and easing are not measured.

## Do's and Don'ts

- Do keep the interface to white, `#f2f2f2`, `#eaeaea`, `#1c1c1c` and one indigo `#5f59ff`.
- Do use square (0px) buttons 45px tall.
- Do apply negative tracking (about -4% to -5%) to headings and large body copy.
- Do put the flow in a white center card over the 3D city.
- Don't add gradients, shadows or additional hues.
- Don't use Leva's blue (`#0066dc`) or any debug-panel color.
- Don't present the cookie notice as a brand component.

## Responsive Behavior

Measured at 390px: the page title "Metropolis Test Drive" is 42px/37.8px weight 400 with -2.1px tracking (246px wide, 76px tall); the step heading "Which are you driving?" is 32px/30.4px weight 500 with -1.44px tracking; and the CTA "Continue To Next Step" keeps 18px/27px `#1c1c1c` on `#5f59ff`. Card width, 3D scene scaling and nav changes were not measured.

## Iteration Guide

1. White card on a `#f2f2f2` and `#eaeaea` stage; ink `#1c1c1c`; accent `#5f59ff`.
2. TT Hoves (or Inter) 36px to 47px with -4% tracking; 18px body.
3. Square 45px buttons; round pins at 50%.
4. One instruction per step, in a short second-person sentence.
5. Run `node web/scripts/verify-designs.mjs --slug=metropolis-test-drive`.
