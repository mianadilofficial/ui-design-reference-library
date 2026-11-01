---
version: alpha
name: "Electra Filmworks"
category: "Culture & Events"
description: "Electra Filmworks, a film and commercial production company: full-bleed film still over a #15110f base, white PP Pangram Sans 16px credits, Monument Extended 12px uppercase navigation, one orange #f16920 spark accent."
colors:
  canvas: "#15110f"
  ink: "#ffffff"
  primary: "#ffffff"
  surface: "#f16920"
  ink-2: "#ffffff99"
typography:
  display:
    fontFamily: "\"PP Pangram Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20.8px
    letterSpacing: 0.1px
  display-mobile:
    fontFamily: "\"Monument Extended\", sans-serif"
    fontSize: 10px
    fontWeight: 700
    lineHeight: 10px
    letterSpacing: 0.5px
    textTransform: uppercase
  body:
    fontFamily: "\"PP Pangram Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20.8px
    letterSpacing: 0.1px
rounded:
  none: 0px
spacing:
  s1: 14.22px
  s2: 17.78px
  s3: 26.67px
  s4: 44.44px
  s5: 62.22px
components:
  nav:
    textColor: "{colors.ink}"
    padding: 44.4444px 44.4444px 0px
---

# Electra Filmworks

## Overview

Electra Filmworks (https://electrafilmworks.com/, page title "Electra Filmworks – Electra Filmworks") is the site of a film and commercial production company that represents directors and photographers. The measured page is a single 1280 by 800 screen (scroll height 800, 77 visible elements): there is no scrolling document, only a full-bleed moving or still film image with a thin overlay of text. The capture shows a dark, blue-and-amber night scene, a close profile of a man in a cap, under a heavy dark treatment; the image is the design.

Over the image, in uppercase extended sans, the top bar carries DIRECTORS and PHOTOGRAPHERS at the left, COMMERCIALS and NARRATIVE in the middle with tiny superscript counts (11 and 03), and CONTACT at the right. In the centre of the screen sits a small orange four-point spark logo mark. At the bottom left, the wordmark ELECTRA is set in a very wide, heavy, white extended face. Across the bottom, four equal columns list the featured work. Each column has a thin line above it and three lines of text: project title in bold, client, and director. The active column ("Just One Chapter / U.S. Air Force / Ze'ev Waismann") is bright white with an orange progress line and a small white star; the other three ("Influencers / Jeep / Anthony Garth", "The Plate (Jon Goode) / General Mills / Lorenzo de Guia", "Sun Globe / Scottsdale / Ze'ev Waismann") are dimmed to a translucent white.

The mood is cinematic and editorial: dark, quiet, image-first, with information reduced to credit lines, the way a film title sequence lists crew. Microcopy is only names.

## Colors

Measured colours are few.

- Canvas `#15110f`: a very dark warm brown-black, the base behind the film image.
- Ink and primary `#ffffff`: all active text, the nav and the wordmark. No filled call-to-action was detected, so `primary` repeats this white.
- `ink-2` `#ffffff99`: white at 60% alpha, used for client and director lines (56 measured characters) and for the dimmed inactive project columns. White itself covers 98 characters.
- Orange `#f16920` (token `surface`): measured as a background colour with zero area weight, which matches the small orange spark mark and the thin orange line above the active project column. It is the only accent.

The photographic colours (teal dusk, amber skin light) belong to the film still and change with the footage; they are not tokens. No borders, shadows or gradients were measured.

## Typography

Two web fonts were loaded: PP Pangram Sans at weight 500 (body and project text) and Monument Extended at weight 700 (navigation and wordmark-style text). All 154 measured characters of running text are PP Pangram Sans at 16px with 0.1px letter-spacing and a 20.8px line-height.

- `display`: PP Pangram Sans 700, 16px/20.8px, letter-spacing 0.1px; the project title ("Just One Chapter"), bold.
- `body`: PP Pangram Sans 500, 16px/20.8px, 0.1px; client and director lines.
- `display-mobile`: Monument Extended 700, 10px/10px, letter-spacing 0.5px, uppercase; the mobile pass resolved the h1 role to the "MENU" label.
- Navigation on desktop: Monument Extended 700, 12px/12px, letter-spacing 0.5px, uppercase.

The type scale is therefore a single 16px reading size plus a 12px (desktop) or 10px (mobile) tracked extended caps for navigation; contrast comes from the face, not from size. The ELECTRA wordmark in the capture is a graphic in the extended style; its size was not measured.

## Layout

The page is a one-screen stage. The nav is 56px tall with padding `44.4444px 44.4444px 0px`, spanning the 1280px width, and the stylesheet declares `--nav-height: 6.349217956347755rem`. Outer padding variables are `--padding: 5rem` and `--padding-mobile: 3rem`. Measured gaps are 14.2222px (8 instances), 17.7778px (6), 26.6667px (2) and 62.2222px (2); these match the generated `s1` to `s5` spacing tokens. Four project columns share the bottom of the screen with equal widths, separated by gaps; the nav items are grouped in three clusters (left, centre, right). The text overlays sit on a darkened lower region of the image so credits remain readable.

## Elevation & Depth

No shadows, borders or radii were measured. Depth comes from the photograph itself (shallow depth of field, dark vignette) and from opacity: active text is solid white while inactive columns drop to `#ffffff99`, which reads as being behind the active item. The logo mark and orange line are flat colour on the image.

## Shapes

No border radius was measured (empty list), and the layout contains no boxed components. The only shapes are the thin horizontal rules above each project column, the four-point spark mark and a small star glyph beside the active title. Because no radius exists in the measurement, no `rounded` tokens are declared.

## Components

- Top navigation: Monument Extended 12px bold uppercase, white, tracking 0.5px, with superscript counts on COMMERCIALS and NARRATIVE.
- Logo mark: orange four-point spark in the centre of the screen.
- Wordmark: ELECTRA in wide heavy white capitals at the bottom left.
- Project column: a thin rule (orange on the active column), a bold title, then client and director lines at 500 weight in translucent white.
- Active marker: a small white star at the right of the active column.
- Mobile menu: a single "MENU" label in 10px Monument Extended replaces the desktop link row in the measured mobile pass.
- Buttons, inputs and cards: none were detected.

## Design System Architecture

No public design system or brand guideline was found, and none is linked from the page. The stylesheet exposes only four root variables (`--nav-height`, `--padding`, `--translateY: 50%`, `--padding-mobile`), so the de-facto system is the two font faces, a white-on-dark colour pair, one orange accent and rem-based padding variables. Source: the root variables in the extraction of https://electrafilmworks.com/.

## Do's and Don'ts

Do:
- Let a full-bleed film frame carry the page and keep the interface as thin text overlays.
- Use white `#ffffff` for active text and `#ffffff99` for secondary and inactive text.
- Set navigation in 12px Monument Extended bold uppercase with 0.5px tracking.
- Keep project credits as three short lines: title, client, director.
- Use orange `#f16920` only for the logo spark and the active-progress line.

Don't:
- Do not add boxes, cards, buttons or rounded corners; none were measured.
- Do not add a second accent colour.
- Do not use more than the 16px reading size for credits.
- Do not set navigation in the sans face; it is in the extended face.

## Responsive Behavior

The 390px pass measured: navigation reduced to a single "MENU" label in Monument Extended 700, 10px/10px, 0.5px tracking, uppercase; the nav bar is 49px tall with padding `31.2px 31.2px 0px`; and the only font size recorded on mobile was 10px (four characters). The stylesheet declares `--padding-mobile: 3rem` against `--padding: 5rem`. Project column arrangement on mobile, image behaviour and breakpoint widths were not measured.

## Iteration Guide

1. Fill the viewport with a dark film still on `#15110f`; overlay white text.
2. Load PP Pangram Sans 500/700 and Monument Extended 700.
3. Nav at 56px with 44.4444px side padding; four credit columns at the bottom, 16px/20.8px with 0.1px tracking.
4. Add the orange spark logo and the orange line over the active column.
5. Run `node web/scripts/verify-designs.mjs --slug=electra-filmworks`; the generated tokens declare no rounded or component values, so report that group result instead of inventing tokens.
