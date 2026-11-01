---
version: alpha
name: Molazone - Yamê Official Website
category: "Culture & Events"
description: "Molazone, the official website of the artist Yamê (mola-zone.com), measured on the live site: near-black canvas #0b0b0c, pure white #ffffff text, the single typeface Kern at 700 uppercase in 10px, 12px and 16px sizes with 0.44px to 1.36px tracking, one 50px radius, and monochrome line-illustration artwork."
colors:
  canvas: "#0b0b0c"
  page-body: "#000000"
  ink: "#ffffff"
  primary: "#0b0b0c"
  sand-white: "#f0edeb"
  ink-fade: "#ffffff99"
  ink-soft: "#ffffffcc"
  hairline: "#0b0b0c99"
typography:
  display:
    fontFamily: Kern, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 15px
    letterSpacing: 0.66px
    textTransform: uppercase
  display-mobile:
    fontFamily: Kern, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 15px
    letterSpacing: 0.44px
    textTransform: uppercase
  body:
    fontFamily: Kern, sans-serif
    fontSize: 10px
    fontWeight: 700
    lineHeight: 15px
    letterSpacing: 0.7px
    textTransform: uppercase
rounded:
  xs: 50px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 24px
  s8: 32px
  s9: 48px
  s10: 57.6px
components:
  nav:
    textColor: "{colors.page-body}"
    padding: 0px 60px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 4px 12px
---

## Overview

This file documents Molazone, the official website of the artist Yamê, measured at `https://mola-zone.com/` which resolved to `https://mola-zone.com/en` (page title "Molazone - Yamê Official website"). It is an artist world rather than a conventional brand site. The first screen is a full-viewport illustration in pure black and white: ornate line-drawn figures, clouds, tree branches and circular frames dotted along their edges, with a central black circle holding the artist's emblem and an ENTER control in a white semicircular tab at its base. The measured scroll height is 800px, one viewport, because the entry screen is the page.

The navigation names the experiences hosted by the site: PLAY, TOUR 2025, SHOP and ÉBĒM VAULT, plus a NOW PLAYING indicator that displays the track "YAMÊ, BIZARRE (INSTRUMENTAL)" and an audio ON control. The visible hint text is "Scroll to explore". The tone is sparse and ceremonial: all labels are tiny uppercase tracked letters, and the illustration does all the talking.

The measurement was repeated against the root URL `https://mola-zone.com/` with the same result, so this entry experience is the measured home page, not a language selector. The ENTER overlay is the brand's own interaction, but its behaviour beyond the entry screen was not measured.

## Colors

The palette is two values. The canvas is `#0b0b0c` (a near-black, the largest painted area at weight 1134), and white `#ffffff` (1024) is the second painted area, which comes from the illustration's white linework and the ENTER tab. The root defines these as `--dark: 11,11,12` and `--light: 255,255,255`, with `--c-primary` set to the light value and `--c-secondary` to the dark value; the primary role in this theme is therefore the dark `#0b0b0c`, inverted against content that is white. The `page-body` token `#000000` is the computed body background color.

A warm off-white measured as `--sand-white: 240,237,235` (`#f0edeb`) occupies a very small area (3) and is kept as `sand-white`. Text uses `#ffffff` for most characters (68), with translucent variants: `#ffffff99` (11 characters, `ink-fade`, the dimmed state of labels) and `#ffffffcc` (2, `ink-soft`, the audio ON text on mobile). The only border measured is `#0b0b0c99`. The root also defines `--fade-white` `hsla(0,0%,100%,.5)` and `--fade-black` `rgba(0,0,0,.5)` as overlay tints.

No separate accent hue exists in what was measured; color comes from the contrast of black and white.

## Typography

There is one family, Kern, loaded at weights 400 and 700, and every character measured (90) is 700 weight. Everything is uppercase. Three sizes are in use: 10px (68 characters, navigation and now-playing text), 16px (17 characters, the "Scroll to explore" hint, which the extractor reads as the largest text), and 12px (5, with 1.36px tracking).

The `display` style is Kern 700 uppercase at 16px on a 15px line height with 0.66px tracking; on the 390px mobile pass this measured 12px with 0.44px tracking. `body` is Kern 700 uppercase at 10px with 15px line height and 0.7px tracking; the navigation link measured 10px with 0.63px tracking. The tracking values observed are 0.44px, 0.63px, 0.66px, 0.7px and 1.36px.

There is no heading hierarchy in the measurement: no h2 or h3 was found. Kern is not described by a public specimen page that was opened, so the typeface is documented only as it is measured. For a substitute, use a geometric grotesque at 700 and uppercase with 0.6px to 0.7px tracking; this is a recommendation, not a measurement.

## Layout

The layout is a single viewport with the header over the artwork. The header carries 60px horizontal padding (`0px 60px`). Navigation links have `4px 12px` padding. Gaps measured between items are 6px, 8px, 10px, 24px, 32px, 48px and 57.6px, and other padding values are 16px and 114px. On mobile the header padding becomes `0px 24px`.

The artwork is composed of circular and arched frames: a large central circle, a half-circle at the top, a half-circle at the bottom, and mirrored panels left and right, forming a symmetrical mandala. The composition is centered, the emblem is placed at the exact middle, and no grid of cards or columns was measured.

## Elevation & Depth

No box shadows were measured. Depth is created by the contrast of the black circle over white linework and by dotted outlines on the circular frames. Overlays use half-transparent tints (the root fade variables). Do not add elevation.

## Shapes

The measured corner radius is 50px (one element, the ENTER tab or a control). All other measured elements are 0px. Visually, circles, semicircles and dotted rings dominate the artwork; these are illustration shapes, not interface radii. The `rounded` token is `xs: 50px`.

## Components

- **Header.** Transparent, with the labels PLAY, TOUR 2025, SHOP, ÉBĒM VAULT on one side and a NOW PLAYING readout with an ON audio control. Links are white Kern 700 10px, uppercase, with 4px 12px padding. On mobile the header text reads MENU and ON.
- **Entry control.** A white semicircular tab labelled ENTER at the bottom of the central circle, in dark Kern text. It is the only prominent action.
- **Scroll hint.** "Scroll to explore" in Kern 700 16px white.
- **Now-playing line.** Kern 700 10px white with 0.7px tracking.
- **Illustration.** Monochrome line art with dotted circular borders; it is brand imagery, not a component.

No buttons, cards, inputs or footers were detected by the extractor (the primary CTA candidate list is empty, and no footer was found), so none are tokenized.

## Design System Architecture

No public design system, brand guidelines or press kit was consulted; no page other than the site itself was opened, and no search was run. The de-facto system is visible in its root custom properties: colors are stored as bare RGB triplets (`--light`, `--dark`, `--sand-white`) with `--c-primary` and `--c-secondary` aliasing them so a theme can be inverted; easing curves are named (`--ease-in-out-simple` cubic-bezier(.4,0,.2,1), `--ease-in-simple`, `--ease-out-simple`, `--ease-in-out-quart` cubic-bezier(.77,0,.175,1)); and fades are named `--fade-white` and `--fade-black`. A single typeface keeps the system small.

## Do's and Don'ts

- Do keep to black `#0b0b0c` and white `#ffffff`; use the `#ffffff99` fade for secondary labels.
- Do set every label in Kern 700 uppercase with 0.44px to 1.36px tracking.
- Do let monochrome line illustration, not interface chrome, create the atmosphere.
- Do use the named easing curves from the root when animating.
- Don't introduce a color accent, gradient or drop shadow.
- Don't use sentence case or weights other than 700.
- Don't treat the audio ON control or ENTER tab as a general button style; their behaviour beyond what was measured is unknown.

## Responsive Behavior

The mobile pass at 390px recorded: the "Scroll to explore" hint at 12px with 0.44px tracking (16px and 0.66px on desktop), body text at 10px with 15px line height and 0.63px tracking, and a header whose text reads "MENU | ON" with 24px horizontal padding (60px on desktop). The mobile font sizes by characters were 12px (17) and 10px (11). Layout of the artwork at mobile width, breakpoints and menu behaviour were not measured.

## Iteration Guide

1. Start with a `#0b0b0c` canvas and white linework; add only `#ffffff99` and `#ffffffcc` as tints.
2. Use Kern 700 uppercase: 16px for hints, 10px for labels.
3. Keep navigation minimal and at the top with 60px side padding on desktop.
4. Use one 50px radius for the entry control, and keep everything else square.
5. Re-measure anything beyond the entry screen before documenting it, since only one viewport was captured.
