---
version: alpha
name: "LxL Creative"
category: "Culture & Events"
description: "LxL Creative is a UK entertainment campaign agency site: warm near-black canvas #27201d, cream ink #fcf2bd, orange #ff5121 accent, Owners Wide uppercase headings with Scribo script and Manrope UI, 12px rounded photography."
colors:
  canvas: "#27201d"
  ink: "#fcf2bd"
  accent-blue: "#055dff"
  on-primary: "#ffffff"
  surface-raised: "#36302d"
  surface-mist: "#d2e1eb"
  ink-muted: "#ffffffb3"
  primary: "#ff5121"
  hairline: "#ffffff33"
  button-primary-bg: "#ffffff1a"
  nav-bg: "#0000004d"
typography:
  display:
    fontFamily: "\"Owners Wide\", Impact, sans-serif"
    fontSize: 31.344px
    fontWeight: 700
    lineHeight: 31.344px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Owners Wide\", Impact, sans-serif"
    fontSize: 33.429px
    fontWeight: 700
    lineHeight: 30.0861px
    textTransform: uppercase
  heading:
    fontFamily: "\"Owners Wide\", Impact, sans-serif"
    fontSize: 51.5977px
    fontWeight: 700
    lineHeight: 46.4379px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Owners Wide\", Impact, sans-serif"
    fontSize: 22.4549px
    fontWeight: 700
    lineHeight: 22.4549px
    textTransform: uppercase
  button:
    fontFamily: Manrope, Arial, sans-serif
    fontSize: 13px
    fontWeight: 600
    lineHeight: 18.2px
  nav:
    fontFamily: Manrope, Arial, sans-serif
    fontSize: 17.2274px
    fontWeight: 600
    lineHeight: 24.1184px
  link:
    fontFamily: Manrope, Arial, sans-serif
    fontSize: 17.2274px
    fontWeight: 500
    lineHeight: 24.1184px
rounded:
  xs: 11.2px
  sm: 12px
  md: 16px
  lg: 20px
  pill: 9999px
spacing:
  s1: 2px
  s2: 2.15px
  s3: 6px
  s4: 8px
  s5: 8.61px
  s6: 12px
  s7: 14.77px
  s8: 16px
  s9: 16.93px
  s10: 17.23px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 6px 6px 6px 12px
    height: 28px
    transform: matrix(1, 0, 0, 1, 0, 84)
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
    padding: 24px 0px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-mist}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  footer:
    textColor: "{colors.on-primary}"
---

## Overview

LxL Creative is a UK entertainment-marketing agency (lxlcreative.co.uk) that, in its own words, "produces 360° creative campaigns" for screen work, with a sister division, LxL Studios, for brands, music and culture. The home page opens on a near-black warm brown canvas (`#27201d`) with a cream ink (`#fcf2bd`), a hand-drawn orange "lxl" monogram stroke (`#ff5121`) and an oversized lowercase "creative" wordmark. A tall portrait photograph sits in the top-left with 12px-class rounded corners, the nav floats top-right, and the hero statement reads "REAL CRAFT. Real people. REAL RESULTS." with "Real people." set in a brush script (Scribo) in orange. The mood is confident, editorial and slightly playful: big wide caps, a single warm accent, and photography of cast and crew rather than stock imagery. The copy is short and warm ("Let's do something great together.", "Energy counts."). The page is very long (scroll height 13781px at the 1280px desktop measurement).

## Colors

The palette is dark and warm rather than neutral black. `canvas` `#27201d` is the body background and covers the largest measured area; `surface-raised` `#36302d` is the second most common background, used for panels one step lighter than the canvas. `ink` `#fcf2bd` (a pale butter cream) is the most-read text color; `ink-muted` `#ffffffb3` is white at roughly 70% alpha and carries secondary copy. The brand accent is the orange `#ff5121`, measured on the "Real people." script line and on the monogram; it is exposed as `primary`. A saturated blue `#055dff` was also measured as an action or link color and is kept as `accent-blue`; `surface-mist` `#d2e1eb` is a pale blue-grey card background. Hairlines are white at 20% alpha (`#ffffff33`), the nav sits on black at 30% alpha (`#0000004d`) and the sound toggle on white at 10% alpha (`#ffffff1a`). No shadows were measured, so depth comes from tonal steps, not elevation.

## Typography

Three families are loaded: Owners Wide (700), Scribo (400) and Manrope (500 and 600). Owners Wide is a wide grotesque used uppercase for every heading: the h1 is 31.344px on a 31.344px line height, the h2 51.5977px on 46.4379px, the h3 22.4549px. The statement paragraph is also set in Owners Wide at 51.5977px, so body-scale copy on the page is mostly display type. Scribo is the script accent, about 62 characters on the measured page. Manrope handles navigation and UI at 17.2274px (600 for nav, 500 for links) and the 13px/600 button label. Both display and UI text are tightly leaded; the heading line heights are at or below the font size. No Google or Adobe font catalogue was consulted; font substitutes should keep a wide uppercase grotesque for headings and a humanist sans for UI. On the 390px mobile pass the h1 and h2 both measure 33.429px on a 30.0861px line height, and the body size is 16.0895px.

## Layout

The layout is full-bleed on a single column with large empty stretches of canvas between image groups. The hero places an image block against the left edge, a centered headline, and a huge wordmark that overlaps the image. Below it a smaller landscape photo sits centered. Spacing tokens measured on the page run 2px, 6px, 8px, 12px, 16px and about 17px for fine gaps; the most frequent gap values are 16px (46 uses), about 73.8px, 8px and 20px. Larger paddings include about 22.45px, 27.86px and 154.77px. The navigation is a transparent strip, 72px tall, with 24px top padding, holding five links (Work, Services, LxL Studios, About, Contact).

## Elevation & Depth

There are no measured box shadows. Depth is built from three layers: the canvas `#27201d`, the lighter `#36302d` panels and a translucent black overlay (`#00000033`) over imagery. Borders are rare: `#ffffff33` hairlines were measured 10 times. The nav bar's `#0000004d` fill lets the page show through. Motion eases use one curve, `cubic-bezier(0.65, 0, 0, 1)`, at 0.15s and 1.2s durations (root variables `--animation-default-quarter` and `--animation-default-double`).

## Shapes

Radii measured on the page: 11.2px, 12px, 16px, 20px, a 1280px pill value and 50%. The most common is 12px (50 elements), used for photographs and links. The root variable `--radius--large` is 1.25rem (20px). Buttons use a full pill. Image tiles are softly rounded rectangles, never sharp, which counters the heavy uppercase type.

## Components

- **Sound toggle (button-primary):** the only button the extractor found. It reads "Sound", is a 92px by 28px pill with `#ffffff1a` fill, white 13px Manrope 600 text and padding 6px 6px 6px 12px. It is a media control rather than a conversion CTA.
- **Navigation:** Manrope 600 at 17.2274px, cream ink, on a 72px strip with `#0000004d` fill. On hover a measured link changed from cream text to `#27201d` text (the link color inverts).
- **Links:** Manrope 500, 12px radius, 38px tall in the measured sample.
- **Card:** `#d2e1eb` background with 12px radius; the footer text is white.
- **Imagery:** rounded portrait and landscape stills of cast, crew and camera operators.

## Design System Architecture

No public design system, brand guideline or token repository is published: the home page links only to Work, Services, Studios, About, Contact, Privacy and social profiles. The de-facto system can be read from the root variables: the site is built with a Webflow-style variable architecture (names such as `--_typography---font-size--h1`, `--_text-style---font-weight`, `--button-size--large`, `--radius--large`, `--cubic-default`) where sizes are fluid `clamp()` expressions that interpolate between a minimum and maximum viewport. Source page: https://www.lxlcreative.co.uk/.

## Do's and Don'ts

- Do set headings in uppercase wide grotesque and reserve the orange `#ff5121` for one accent phrase or the monogram.
- Do keep the warm brown canvas; do not substitute pure black.
- Do round photographs by 12px to 20px.
- Do use cream `#fcf2bd` for primary reading text and the 70%-white for secondary.
- Don't add drop shadows; none were measured.
- Don't use the blue `#055dff` as a hero color; it appears on few surfaces.
- Don't set long body copy in script type.

## Responsive Behavior

Only the 390px mobile extraction was recorded. It measured the h1 at 33.429px/30.0861px, the h2 at 33.429px/30.0861px, and body text at 16.0895px with the larger sizes 28.8935px, 20.5355px and 60.1722px. Navigation behavior, image reflow and breakpoints on mobile are not measured. The root font-size variables use clamp() ranges, but the breakpoints themselves were not recorded.

## Iteration Guide

1. Start from `canvas` and `ink`; add a single `primary` orange moment per screen.
2. Pick heading size from the measured steps: 22.4549px, 31.344px, 51.5977px.
3. Keep UI text in Manrope at 13px, 17.2274px.
4. Round images with `rounded.sm` (12px) and controls with `rounded.pill`.
5. Verify any new color against the extraction before adding it; run `node web/scripts/verify-designs.mjs --slug=lxl-creative`.

## Voice and Imagery

The fetched home page lists six services as short capitalised labels: Key Art, Social Campaigns, Unit (unit photography), EPK (electronic press kits), Editorial and Activations. The studio line is "Where brands, music and culture meet." and the values read "We invest in people" and "Energy counts." The client pitch promises "honest quotes, straightforward conversations". Headlines are short declaratives in uppercase; the one lowercase moment is the wordmark. A "DRAG" label appears in the page text, which points to a draggable gallery interaction, though its behavior was not recorded. Photography is portrait-oriented film and press-campaign work, cropped with rounded corners and placed against the empty canvas so that each image reads as a poster. Keep captions to one or two words, keep the accent to a single phrase per screen, and let whitespace do the pacing between image groups.
