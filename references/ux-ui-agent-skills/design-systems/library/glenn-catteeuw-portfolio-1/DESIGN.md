---
version: alpha
name: Glenn Catteeuw - Interactive Art Director
category: "Culture & Events"
description: "Portfolio of interactive art director Glenn Catteeuw (glenncatteeuw.com), measured on its entry screen: off-white #f2f2f2 canvas, off-black #1a1a1a ink, Druk Bold uppercase 56.8888px display, Replica Mono 10.6667px uppercase labels, small 2.67px and 3.56px radii and no borders."
colors:
  canvas: "#f2f2f2"
  ink: "#1a1a1a"
  primary: "#1a1a1a"
  gray: "#b6b6b6"
  light-gray: "#d9d9d9"
  boulder-gray: "#757575"
  unplaced-red: "#ff0000"
typography:
  display:
    fontFamily: Druk, Impact, -apple-system, system-ui, "system-ui", Helvetica, Arial, sans-serif
    fontSize: 56.8888px
    fontWeight: 700
    lineHeight: 45.5111px
    letterSpacing: 0.568888px
    textTransform: uppercase
  display-mobile:
    fontFamily: Druk, Impact, -apple-system, system-ui, "system-ui", Helvetica, Arial, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 38.4px
    letterSpacing: 0.48px
    textTransform: uppercase
  link:
    fontFamily: "\"Replica Mono\", Menlo, Monaco, \"Courier New\", monospace"
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 10.6667px
    letterSpacing: "-0.213333px"
    textTransform: uppercase
rounded:
  xs: 2.67px
  sm: 3.56px
spacing:
  s1: 1.42px
  s2: 3.56px
  s3: 9.78px
  s4: 14.22px
  s5: 17.78px
  s6: 21.33px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 0px 9.77777px
---

## Overview

This is the portfolio of Glenn Catteeuw, who describes himself as an Interactive Art Director (page title "Glenn Catteeuw - Interactive Art Director", description "Portfolio of Interactive Art Director Glenn Catteeuw."). The re-measured capture at https://glenncatteeuw.com/ shows the site's entry screen: an off-white field, the name set in huge condensed uppercase letters on the left ("GLENN CATTEEUW", with the first name in italic), the title on the right ("INTERACTIVE ART DIRECTOR", first word in italic), a tall warm-orange mountain-landscape image panel between them carrying a small "ENTER" label, and a tiny underlined "ENTER WITHOUT SOUND" link below. This document describes that entry screen as measured; the project gallery that follows it was not captured.

The page's HTML, fetched separately, shows what sits behind the entry: "Available for freelance work October 2026" and a list of projects: Victorinox, Following Wildfire, Coca-Cola x Marshmello, DeSo, PolyAI Looped, Film Secession, Hashgraph Ventures, Ibicash, Sweetbeats, De Morgen 2020, Microsoft Original Build, Glass Lizzard, Lunchbox Death Chef, RRE Ventures, Aztec Network and Oreo Iconic Love Letter. Header links are About, Game and Email. The measured visible text begins "ABOUT / EMAIL / PORTFOLIO OF GLENN CATTEEUW / INTERACTIVE ART DIRECTOR".

The feel is editorial and restrained: lots of empty off-white, black display type at poster scale, one saturated image as the only color, and tiny monospace UI text. The captured scroll height is 2,984px at 1280px wide, most of it empty field above the centred entry block.

Key characteristics:
- Off-white #f2f2f2 canvas with off-black #1a1a1a text; no brand accent color is measured on the entry screen.
- Druk Bold uppercase display (56.8888px) paired with Replica Mono uppercase labels (10.6667px).
- Small radii (3.56px, 2.67px) and no border colors.
- A single glow shadow, rgba(242, 242, 242, 0.75) 0px 0px 4px, measured on 2 elements.

## Colors

- **Canvas #f2f2f2:** the page background (`--off-white`, `--main-bg`, `--button-bg` and `--main-color` all point to it). It is also the text color on the image panel (93 characters, the most-read color).
- **Ink #1a1a1a:** `--off-black`, mapped to `--main-text`, `--nav-color`, `--button-color` and `--nav-bg`. 83 characters use it. Since no separate action color is measured, `primary` is the same value.
- **Gray #b6b6b6, light gray #d9d9d9, boulder gray #757575:** declared root variables (`--gray`, `--light-gray`, `--boulder-gray`) and present in the site's CSS colors; they are not used on the measured entry text.
- **Unplaced red #ff0000:** the area-weighted background measurement lists this value (weight 457) for an element on the page. It is not visible in the capture, so its role is not known and it is kept only as a measured value.
- **Other declared values:** `--glow: rgba(26, 26, 26, .25)` and `--opacity-dimmed: .65`; the stylesheet also contains #f2f2f2bf, #f2f2f266 and #1a1a1a40 overlays.

## Typography

- **display:** Druk Bold (loaded as Druk-Bold-Web.woff2, plus a bold italic file) at 56.8888px, weight 700, line height 45.5111px (0.8 of the size), letter spacing 0.568888px, uppercase. Fallbacks: Impact, system-ui, Helvetica, Arial, sans-serif. The measured h1 is "GLENN" at 173px by 46px.
- **display-mobile:** the same family at 48px, line height 38.4px, 0.48px tracking, measured at 390px (the "GLENN" h1 is 195px by 38px there).
- **link / UI labels:** Replica Mono (Replica-alt.woff), 10.6667px, weight 400, line height 10.6667px, letter spacing -0.213333px, uppercase. 140 characters use this face, versus 36 for Druk. The about link is 51px wide and 21px high with 0px 9.77777px padding.

The page uses just two sizes by character count on desktop (10.6667px and 56.8888px), and two on mobile (48px and 14px). The italic cut of Druk is loaded and is used for the first word of each display phrase in the capture. Font substitutes: Druk and Replica are commercial faces; the site's stack falls back to Impact for display and Menlo, Monaco, Courier New for mono.

## Layout

Root variables set page padding: `--px: 1rem` and `--py: 1rem`. The entry layout is a three-part horizontal row: name block left, portrait image panel in the centre, title block right, all vertically centred in the lower part of the 2,984px document, with the "ENTER WITHOUT SOUND" link centred below. The extractor found no header links on the entry state (headerLinksVisible 0), no menu toggle, and at most 2 card columns.

Measured gaps are 14.2222px, 3.55555px and 21.3333px; paddings are 17.7778px, 1.42222px, 9.77777px and 14.2222px. The spacing tokens carry these values in order. The measured easing curve is `--expo-out: cubic-bezier(.19, 1, .22, 1)`.

## Elevation & Depth

The page is flat. One shadow value was measured, `rgba(242, 242, 242, 0.75) 0px 0px 4px 0px`, a soft off-white glow used on 2 elements, which fits the light text over the orange image. No border colors were measured. Depth is made by the image panel against the empty field and by the scale contrast between poster-size type and 10.6667px labels.

Focus state: the browser default 1px auto outline in rgb(0, 95, 204) with 1px offset was recorded on the About and Email links; it is a default, not a brand token. Hover was not recorded.

## Shapes

Two radii were measured: 3.55555px (64 elements) and 2.66666px (1 element), rounded here to 3.56px and 2.67px. Everything else is square, including the tall image panel. There are no borders, so shape is defined by color fields and type alone.

## Components

- **Display lockup:** two-line Druk uppercase blocks with an italic first word, in ink #1a1a1a.
- **Entry panel:** a tall image (warm orange to red mountain scene) with a small "ENTER" label in off-white mono type flanked by two tiny dots.
- **Link:** Replica Mono 10.6667px uppercase, ink color, 0px 9.77777px padding, 21px high; examples are ABOUT, EMAIL and "ENTER WITHOUT SOUND" (underlined in the capture).
- **Navigation:** About, Game and Email appear in the page markup; on the entry screen they were not visible.
- **Button tokens:** `--button-bg` is the off-white canvas and `--button-color` is the off-black, so buttons are ink on canvas.

No primary filled call to action was measured, so none is declared.

## Design System Architecture

No public design system or brand guideline exists: https://glenncatteeuw.com/ links only to project pages, About, Game, Email and the site's own stylesheets (/assets/bundle.*.css). There is no GitHub org or style guide link on the page. The de-facto system is a set of root custom properties: `--main-bg`, `--main-text`, `--main-color`, `--nav-bg`, `--nav-color`, `--button-bg`, `--button-color`, `--off-white`, `--off-black`, `--gray`, `--light-gray`, `--boulder-gray`, `--glow`, `--opacity-dimmed`, `--px`, `--py`, `--font-sans`, `--font-mono` and `--expo-out`. The semantic variables alias the two base colors, which is why the whole palette reduces to #f2f2f2 and #1a1a1a.

## Do's and Don'ts

Do:
- Keep the field #f2f2f2 and set text in #1a1a1a.
- Use Druk uppercase at poster scale for names and titles; italicise the first word.
- Use Replica Mono 10.6667px uppercase for every small label and link.
- Let one strongly colored image provide the only color.

Don't:
- Do not add a brand accent color; none was measured.
- Do not add borders; no border colors were measured.
- Do not treat the #ff0000 value as a known brand color: its role is not established.
- Do not describe pages beyond the entry screen from this measurement.

## Responsive Behavior

Measured at 390px: the Druk h1 drops from 56.8888px to 48px (line height 38.4px, 0.48px tracking) and the two sizes by character count are 48px and 14px. No header links and no menu toggle were detected at either width, and the layout reports at most 2 card columns at both. The stylesheet declares media queries at max-width 639px (55 rules), max-width 999px (20), min-width 1000px (11), min-width 640px (5) and min-width 1200px (3), plus height and aspect-ratio queries such as (max-height: 450px) and (min-width: 1000px). How the three-part entry row rearranges at 390px is not measured.

## Iteration Guide

1. Set the canvas to #f2f2f2 and all text to #1a1a1a.
2. Add Druk Bold uppercase display at 56.8888px / 45.5111px, 0.568888px tracking (48px at mobile).
3. Add Replica Mono 10.6667px uppercase labels with -0.213333px tracking.
4. Place one tall full-color image between the name and title blocks and label it "ENTER".
5. Use radii of 3.56px or 2.67px only on small elements; leave everything else square.
6. Apply `cubic-bezier(.19, 1, .22, 1)` to transitions.
7. Capture the project pages separately before documenting any gallery or case-study styling.
