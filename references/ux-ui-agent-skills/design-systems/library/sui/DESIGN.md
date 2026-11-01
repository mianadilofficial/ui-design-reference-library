---
version: alpha
name: "Sui"
category: "Architecture & Interiors"
description: "Sui blockchain home page measured live: a black hero with a blue-and-white radial light-streak image, white and #f4f5f7 content bands, TWK Everett at 80px with -5.85px tracking, TWK Everett Mono labels, square-cornered #298dff buttons, and slate greys #6c7584 and #4b515b."
colors:
  canvas: "#ffffff"
  page-body: "#000000"
  ink: "#6c7584"
  primary: "#298dff"
  on-primary: "#ffffff"
  surface-light: "#f4f5f7"
  ink-body: "#67707e"
  ink-on-dark: "#d4d4d4"
  ink-on-dark-soft: "#f3f0f0"
  hairline: "#4b515b"
typography:
  display:
    fontFamily: "\"TWK Everett\", Arial, sans-serif"
    fontSize: 80px
    fontWeight: 400
    lineHeight: 80px
    letterSpacing: "-5.85px"
  display-mobile:
    fontFamily: "\"TWK Everett\", Arial, sans-serif"
    fontSize: 66.56px
    fontWeight: 400
    lineHeight: 59.904px
    letterSpacing: "-2.6624px"
  subheading:
    fontFamily: "\"TWK Everett\", Arial, sans-serif"
    fontSize: 18.6738px
    fontWeight: 400
    lineHeight: 20.5412px
    letterSpacing: "-0.373476px"
  body:
    fontFamily: "\"TWK Everett\", Arial, sans-serif"
    fontSize: 13.3333px
    fontWeight: 400
    lineHeight: 18.6667px
    letterSpacing: "-0.133333px"
  button:
    fontFamily: "\"TWK Everett\", Arial, sans-serif"
    fontSize: 12.4444px
    fontWeight: 400
    lineHeight: 15.5556px
    letterSpacing: "-0.0622222px"
rounded:
  xs: 100px
  none: 0px
  pill: 9999px
spacing:
  s1: 3.56px
  s2: 5.01px
  s3: 5.33px
  s4: 5.89px
  s5: 6.22px
  s6: 6.39px
  s7: 7.11px
  s8: 8.01px
  s9: 8.89px
  s10: 9.6px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12.4444px 23.3333px
    height: 43px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10.5px 9.33333px
    height: 37px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12.4444px 23.3333px
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  footer:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 32px 0px
---

## Overview

The measured page is sui.io, titled "Sui | The Infrastructure for Trusted Autonomous Execution", with the hero headline "Where AI transacts". The first screen is a full-width black field carrying a radial burst of blue and white light streaks, with a floating dark navigation bar on top (Stack, Solutions, Network, Build, Docs, Blog, each followed by a small icon, and a blue "Get started" button at the far right) and a blue announcement strip above it about Sui Basecamp. Beneath the headline are two square buttons side by side: "Go to docs" in blue and "Get a wallet" in white.

Below the hero the page turns white. A large black video frame (blank in the still capture) is followed by two dark information cards ("Sui Basecamp 2026 | October 7-8, Singapore" and "Live Sui TPS Record Attempt · Day 1"), a centered statement "The most innovative companies build on Sui" above a row of grey partner logos, and a very large editorial sentence starting "Money and work are being handed to agents." A small monospaced tag, "The economy, rebuilt for autonomous participants", sits above it. The page is 13,238px tall at 1280px width.

The language is engineering-led and sparse: oversized tight-tracked headlines, tiny uppercase-feeling mono captions, square corners and flat surfaces. A "WE'RE LIVE THIS WEEK" event pop-up, a cookie icon and an "English" language switcher float over the hero; these are overlays and are not documented as brand components.

## Colors

The page alternates between black and white. `page-body` (#000000) is the measured body role and the hero and card background; `canvas` (#ffffff) is the largest-area background of the lower page. `surface-light` (#f4f5f7) is a pale grey band, and #131518 is a near-black panel background (area weight 2053). Greys come from root custom properties on the site: `--color--grey-900` is #131518, `--color--grey-700` #343940, `--color--grey-500` #6c7584, `--color--grey-300` #a1a7b2, `--color--grey-200` #c2c6cd, `--color--grey-100` #e0e2e6, `--grey-400` #89919f and `--color--cultured` #f7f7f7.

`primary` (#298dff) is the only saturated color. It fills the "Go to docs", "Get started" and "Register now" arrow button, and the top announcement strip; its text is white (`on-primary`). Text colors: `ink` (#6c7584) is the second most-read color (870 characters) and the muted copy on white; `ink-body` (#67707e) is the measured body paragraph color; white (#ffffff) is the most-read color overall (1358 characters, on black); `ink-on-dark` (#d4d4d4) and `ink-on-dark-soft` (#f3f0f0) are light neutrals for dark areas. `hairline` (#4b515b) is the border color for the dark cards (27 elements).

## Typography

The display and body face is TWK Everett (2442 characters); TWK Everett Mono (899 characters) sets captions, tags and small labels. Both load at 400, with Mono also at 500 and TWK Everett also declared at 700. Inter at 400 through 700 is also loaded, but the measurement does not show it carrying text of note. The fallback after TWK Everett is Arial, sans-serif.

Tracking is the defining trait. `display` is 80px on an 80px line height (ratio 1) with -5.85px letter spacing. The mobile display is 66.56px on 59.904px with -2.6624px. Other measured runs: 69.3333px at -3.46667px and 53.3333px at -2.66667px for section statements, 16px at -2% (1176 characters, the most common size), 18.6738px at -0.373476px for `subheading`, 13.3333px at -0.133333px on an 18.6667px line for `body`, and 12.4444px at -0.0622222px for `button`. Weight is 400 for 2828 characters and 500 for 513, the 500 being the mono labels at 11.5556px with -0.751111px tracking. Sizes are fractional pixel values; the root variables include `--size-unit` at 16.

## Layout

The 1280px layout is full-bleed with a 20px global padding (`--global--padding-global` is 1.25em). The hero headline element spans the full 1280px width, centered. The two event cards sit in a two-column row directly under the video frame, separated by a thin gap. The logo row is a single horizontally running line of grey wordmarks. Gaps measured on flex or grid containers are 5.33333px (100 containers), 7.11111px, 10.6667px, 17.7778px, 21.3333px, 35.5556px and 71.1111px, scaled from the `--gaps--gap-*` variables (for example gap-80 is 5em). The size scale is em-based, so spacing multiplies with the container font size.

## Elevation & Depth

No box shadows were measured. Depth is created by contrast: black against white, the burst image under the hero, and 1px #4b515b outlines around the dark cards. The hover measurement on the event pop-up's "Get your ticket" link shows only a background change from #222529 to #343940, with `boxShadow: none` before and after.

## Shapes

Shape is square. `none` (0px) is the radius on the primary and secondary buttons, nav and footer. Rounded values are rare: one element has 100px (`xs`), one has 50%, and one has a single rounded corner (0px 20px 0px 0px). `pill` 9999px is declared but the measurement did not record it on a visible control. Icon squares inside the navigation items are small and square-edged in the capture.

## Components

- **button-primary**: #298dff fill, white 12.4444px text, 0px radius, padding 12.4444px 23.3333px, height 43px ("Go to docs").
- **button-secondary**: #298dff fill, white text, 0px radius, padding 10.5px 9.33333px, height 37px, used for the nav "Get started".
- **link** (white button on the hero, "Get a wallet"): #ffffff background, #000000 text, same padding as the primary.
- **nav / nav-link**: white 12.4444px text on a dark bar; the nav child colors measured are #a1a7b2, #ffffff and #89919f.
- **footer**: white text with 32px 0px padding.
- **Event card**: black field with a #4b515b outline and a hairline under the title; an arrow button in blue with a white label ("Register now"). Described from the capture; its numbers are not tokenized.

## Design System Architecture

No public design-system documentation was opened. The site exposes its system as root custom properties, a consistent naming (`--gaps--gap-N`, `--blocks--size-block-N`, `--color--grey-N`, `--size-unit`, `--size-font`, `--global--padding-global`), which gives an em-based scale for gaps and blocks and a seven-step grey ramp. The measured values in this file match those variables where they overlap. No tokens package or repository was consulted.

## Do's and Don'ts

- Do keep corners at 0px on buttons and nav; the measured primary button has no rounding.
- Do reserve #298dff for actions and announcements; the rest of the palette is black, white and slate grey.
- Do set display headlines in TWK Everett with strongly negative tracking, and captions in TWK Everett Mono.
- Do use the grey ramp variables for muted text and borders rather than new greys.
- Don't add shadows; none were measured.
- Don't treat the event pop-up, cookie icon or language switcher as brand UI.
- Don't set body copy larger than the measured 13.3333px unless a section statement needs it.

## Responsive Behavior

Measured at 390px: the h1 "Where AI transacts" becomes 66.56px on a 59.904px line height with -2.6624px letter spacing. The mobile font-size census is led by 15.6083px, 13.5283px, 12.48px and 13.52px, with 41.6px, 18.72px and 21.8483px also present. Breakpoints, navigation collapse behavior, card stacking and touch-target sizes were not measured.

## Iteration Guide

1. Begin dark: black field, white TWK Everett headline at tight tracking, one blue button beside one white button.
2. Move to white or #f4f5f7 bands for content, with #6c7584 for secondary text.
3. Use mono captions for tags and labels, and 1px #4b515b borders on dark cards.
4. Keep every button square and 12.4444px in size.
5. Draw colors from the grey variables listed above; any color not measured here should be left out.
