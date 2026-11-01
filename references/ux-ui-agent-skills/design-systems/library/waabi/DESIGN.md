---
version: alpha
name: Waabi
category: "Tech & AI"
description: "Waabi, the autonomous trucking and robotaxi company, uses a white #ffffff canvas with #191818 near-black text, a #ff2c6b pink action color on 48px pill buttons, a 150px Zagma serif hero with -6.4px tracking, NeueHaas UI text, and 12px rounded photo tiles."
colors:
  canvas: "#ffffff"
  ink: "#191818"
  primary: "#ff2c6b"
  on-primary: "#ffffff"
  surface-warm: "#e8e6e3"
  ink-muted: "#34303080"
  ink-on-dark-muted: "#ffffff99"
  ink-scrim-a: "#0000008c"
  ink-scrim-b: "#00000080"
  hairline: "#ffffff26"
  link-bg: "#000000"
  nav-bg: "#00000026"
typography:
  display:
    fontFamily: Zagma, "Zagma Fallback", sans-serif
    fontSize: 150px
    fontWeight: 400
    lineHeight: 127.5px
    letterSpacing: "-6.4px"
  display-mobile:
    fontFamily: Zagma, "Zagma Fallback", sans-serif
    fontSize: 72px
    fontWeight: 400
    lineHeight: 61.2px
    letterSpacing: "-2.88px"
  heading:
    fontFamily: Zagma, "Zagma Fallback", sans-serif
    fontSize: 60px
    fontWeight: 400
    lineHeight: 54px
    letterSpacing: "-1.8px"
  body:
    fontFamily: Zagma, "Zagma Fallback", sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: "-0.72px"
  button:
    fontFamily: NeueHaas, "NeueHaas Fallback", serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16.8px
    letterSpacing: 0.24px
  nav:
    fontFamily: Zagma, "Zagma Fallback", sans-serif
    fontSize: 10px
    fontWeight: 400
    lineHeight: 15px
rounded:
  xs: 11px
  sm: 12px
  md: 40px
  lg: 50px
  xl: 68.6px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 24px
    height: 48px
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    padding: 48px
  footer:
    textColor: "{colors.canvas}"
---

## Overview

The measured page is https://waabi.ai/, titled "Waabi Self Driving Trucks and Robotaxis". Its meta description reads "Transform your supply chain with Waabi's AI-first autonomous trucking solution." The page is 10,435px tall at 1280px and opens with a notice bar ("Let's talk autonomous trucking" with an underlined "Get in touch" link and a close control), then a full-bleed aerial video-style hero of a trucking corridor and skyline under the two-line headline "Built to think. Born to haul." in white 150px type.

Below the hero the page is mostly white. A centered paragraph introduces "We built our own road." and "Our revolutionary Physical AI Platform enables—for the first time ever—true scale, generalizing to different form factors, geographies, and environments." Small rounded photographs (trucks, a highway, a depot at night, a driver, a team member in a Waabi shirt, desert hills) are scattered in a loose scrolling collage around that text. Further down the page are an h2 "Unlocking scale in the real world.", a black "Experience Waabi World" block, a dark partnerships card (Volvo, Uber, Uber Freight, NVIDIA) and a closing footer that says "We're just getting started". The voice is confident and short: parallel headlines, plain verbs, "Explore our approach", "Explore the tech", "Join the team", "View all".

## Colors

The canvas is `#ffffff` (7,179 weighted area units). The ink is `#191818`, a warm near-black that is both the most-read text color and the fill of the dark partnerships card (2,400 units). `#e8e6e3` is a warm grey-beige surface (1,425). The single saturated color is the pink `#ff2c6b`, the fill of every measured button (five CTA candidates share it; 801 area units) and of the small round scroll button in the hero; text on it is white.

Text tints are measured alpha values: `#34303080` (410 characters, muted body text on white), `#ffffff99` (240, secondary text on dark) and black at 0.55 and 0.5 alpha (`#0000008c`, `#00000080`). `#00000026` is the translucent navigation background and `#ffffff26` a hairline on dark. The CSS corpus also includes cool blues (`#2547d0`, `#476cff`) and the root variable `--switch-background-color-checked: #335cff`; these belong to the consent/widget layer and were not measured on brand UI, so they are not tokens. The hero carries a dark scrim (`#00000059`, 1,024 units, and `#00000080`) over the video.

## Typography

Two families: Zagma for display and reading text, and NeueHaas for interface labels. The hero is Zagma 150px on a 127.5px line height with −6.4px tracking; the section h2 is Zagma 60px/54px with −1.8px; body is Zagma 24px/30px with −0.72px; the footer headline is 40px/44px with −1.2px; and a secondary display size of 80px with −3.2px tracking is also measured. Navigation labels are Zagma 10px/15px. Buttons use NeueHaas 12px at weight 500 with 0.24px tracking (11px in the mobile pass); the nav bar and card text use NeueHaas 15px/24px with 0.15px tracking.

Tracking tightens with size in the measured pairs: 150px with −6.4px, 80px with −3.2px, 60px with −1.8px, 40px with −1.2px, 24px with −0.72px and 16px with −0.32px, while the small interface sizes are positive (12px with 0.24px, 10px with 0.2px, 11px with 0.22px). Both fonts are proprietary (`Zagma`, `NeueHaas`), each with a generated fallback face; use a high-contrast serif for Zagma and a neutral grotesque for NeueHaas.

## Layout

The layout is built from large centered statements and floating image tiles rather than a rigid grid. Measured gaps are 16px (56 uses), 6px, 24px, 48px, 20px, 8px, 4px, 96px and 32px, and measured paddings include 11px, 24px, 10px, 48px and 120px. The navigation is a floating white rounded bar at the top center ("waabi" logo, "Home" and a menu icon, 55px tall) rather than a full-width header. The footer is 600px tall with a 40px headline. Photo tiles are about 88px squares in the capture and are placed asymmetrically at the left and right margins.

## Elevation & Depth

No box shadows were measured on the page (`boxShadows` is empty). Depth comes from the video hero, scrims and dark blocks. The stylesheet declares a `--banner-shadow` of `0 16px 32px -12px #0e121b1a` for the consent banner, which is a widget variable, not a brand surface. Separation is through color blocks: white, warm grey `#e8e6e3`, `#191818` and black.

## Shapes

Radii measured: 12px (43 elements; the photo tiles and the partnerships card), 40px (11), 50px (5, the pill buttons), 11px (1), 68.6016px (1) and a very large value (about 3.355e7px, 12 elements) that renders as a full circle for round controls. Tokens: `xs` 11px, `sm` 12px, `md` 40px, `lg` 50px, `xl` 68.6px, `pill` 9999px. The primary button uses `lg` (50px) on a 48px height; the root variable `--accordion-radius` is .625rem and `--widget-radius` is 0 but those belong to widget styling.

## Components

**Primary pill:** `#ff2c6b` fill, white NeueHaas 12px weight 500, 0.24px tracking, 50px radius, `0px 24px` padding, 48px tall (36px tall at 11px on the mobile pass).

**Floating navigation:** white rounded bar with the waabi wordmark, "Home" and a menu glyph; its background measures `#00000026` and text `#191818`.

**Dark partnerships card:** `#191818` fill, white NeueHaas 15px/24px at weight 500, 12px radius, 48px padding, listing Volvo, Uber, Uber Freight and NVIDIA with a short paragraph about partnerships.

**Experience block:** a 546px tall black (`#000000`) area with white label text "Experience / Waabi World".

**Photo tile:** a 12px rounded image tile used in the collage.

**Notice bar:** a thin white strip above the hero with a close "x".

## Design System Architecture

No public Waabi design system or brand guideline was linked from the home page; the page source links only to company, careers, research, safety and insights pages. The site is a Next.js app (assets under `/_next`) using Tailwind CSS v4 utility variables (`--tw-inset-shadow-alpha`, `--color-pink-500`, `--color-gray-300`) plus a consent-widget token set (`--accordion-*`, `--dialog-*`, `--banner-*`, `--widget-*`). Brand tokens in this file therefore come from measurement of https://waabi.ai/, not from a published source. Media queries in the source are declared in rem at `min-width` 40rem, 48rem, 64rem and 80rem, plus `prefers-reduced-motion` and `hover:hover` blocks.

## Do's and Don'ts

- Do set hero statements in the Zagma display face with strongly negative tracking.
- Do keep the page white and let video and photography carry the scenes.
- Do reserve `#ff2c6b` for the primary action.
- Do round photo tiles at 12px and buttons at 50px.
- Don't add shadows; none were measured.
- Don't document the notice bar, the consent widget blues or the scroll button as brand components.
- Don't tokenize hero scrims as surfaces.

## Responsive Behavior

The mobile pass measured: h1 72px/61.2px with −2.88px tracking, h2 28px/25.2px with −0.84px, body 18px/19.8px with −0.54px, and the primary pill at 11px text and 36px tall with 24px side padding. The navigation bar stayed 55px tall. The stylesheet declares breakpoints at 40rem, 48rem, 64rem and 80rem; layout changes beyond the measured type are not measured.

## Iteration Guide

1. Start with white, `#191818` and `#ff2c6b`.
2. Write short two-part headlines at display size and let the tracking run tight.
3. Use dark `#191818` cards at 12px radius for proof points and partner lists.
4. Keep photography in 12px rounded tiles; avoid shadows.
5. Verify new sizes against the measured set (150px, 80px, 60px, 40px, 24px, 15px, 12px) before adding tokens.

7. Treat the collage as content, not chrome: each tile is a real photograph of operations (trucks, highways, depots, people), and the measured page shows no illustration or icon set apart from the logo and small control glyphs.
8. For mobile checks, compare against the measured values only: 72px hero, 28px h2, 18px body and a 36px button; widths of the floating navigation were not recorded beyond its 55px height.
