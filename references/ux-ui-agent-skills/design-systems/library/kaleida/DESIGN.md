---
version: alpha
name: Kaleida
category: "Architecture & Interiors"
description: "Kaleida, 'The Hologram Company' (wearekaleida.com): a near-black stage (#0e0e0e) with pure black (#000000) panels, white (#ffffff) Saans type, a #666666 secondary grey and #222222 hairlines. Hero type is 107.288px uppercase Saans at weight 400 (44.85px on mobile), body 18px. No radius, no shadow, no filled buttons; accents #ff3500 and #4b00ff exist only as root variables."
colors:
  canvas: "#0e0e0e"
  ink: "#ffffff"
  primary: "#000000"
  ink-muted: "#666666"
  ink-subtle: "#333333"
  footer-border: "#222222"
  accent-red: "#ff3500"
  accent-blue: "#4b00ff"
typography:
  display:
    fontFamily: Saans, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 107.288px
    fontWeight: 400
    lineHeight: 103.134px
    textTransform: uppercase
  display-mobile:
    fontFamily: Saans, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 44.85px
    fontWeight: 400
    lineHeight: 43.1133px
    textTransform: uppercase
  body:
    fontFamily: Saans, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 22.05px
  link:
    fontFamily: Saans, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 11.52px
    fontWeight: 400
    lineHeight: 13.8298px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 0.9px
  s2: 1.41px
  s3: 1.76px
  s4: 2.75px
  s5: 3.6px
  s6: 4.29px
  s7: 5.36px
  s8: 7.2px
  s9: 8.64px
  s10: 10.8px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    padding: 8.64px 10.8px 7.92px
  nav:
    textColor: "{colors.ink-muted}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    padding: 7.2px 0px 18px
    borderColor: "{colors.footer-border}"
---

## Overview

The measured page is `https://www.wearekaleida.com/` (title "The Hologram Company | Kaleida", language `en`). Kaleida describes itself on the page as "an award winning global experiential company with a unique specialism in holographic and immersive experiences", and the site behaves like a stage: a dark, nearly empty field on which light, particles and large type appear. The first screen is a full-bleed video still of a blue smoke cloud with glowing four-point star shapes, over which the headline "CREATING THE IMPOSSIBLE" is set in large white capitals, one word per line and rendered letter by letter in the markup. Below it a short statement in 18px white text with the brand name "Kaleida" picked out in grey, then a section titled "We do it live" separated by a thin horizontal rule and a centered vertical rule.

The page is long (12088px, 583 visible elements) and mostly composed of dark bands with fine hairline rules and tiny "+" crosshair marks at grid intersections. Navigation labels are terse and playful: "IMAGINE MORE", "SAY HELLO +", "(3)(1) PROJECTS", "MENU" with a three-line icon. The footer says "We can handle everything. Yes, everything.", followed by "KALEIDA ©2025". The voice is confident and minimal; the imagery (hologram and projection footage) carries all the color.

Reading the capture as a sequence: identity (the angular logo mark with the lowercase wordmark "kaleida" at the top left), then a claim ("CREATING THE IMPOSSIBLE"), then a definition (the statement paragraph), then a proof section ("We do it live") that is empty in the static capture (what fills it was not measured). The measured body element contains the headline text split into single letters, and the motion itself was not recorded (`--no-motion`), so no timing values are given here. Large stretches of empty dark space appear in the capture.

## Colors

- **Canvas `#0e0e0e`**: `--c-grey-1`, the dominant background (area 7823) and footer fill.
- **Primary `#000000`**: `--c-black`, the second background (area 5947). It fills the top-right nav tabs ("SAY HELLO", "PROJECTS", "MENU") in the capture. No fill-colored button was detected, so black is the only action surface.
- **Ink `#ffffff`**: `--c-white`, the dominant text color (1223 characters) for headlines, body and nav links.
- **Ink muted `#666666`**: `--c-grey-3`, secondary text (592 characters): the nav label "IMAGINE MORE", the brand name inside the statement, and the footer text.
- **Ink subtle `#333333`**: `--c-grey-2`, 177 characters, and the border color most often measured (10 occurrences).
- **Footer border `#222222`**: `--c-grey-before`, a 1px line above the footer.

The root grey ramp also contains `--c-grey-4 #999`, `--c-grey-5 #ccc` and `--c-grey-6 #f2f2f2`. Two chromatic variables are defined, `--c-red #ff3500` and `--c-blue #4b00ff`; the measured page text and backgrounds do not use them (no measured element carries them), so they are recorded here as the site's declared accent colors without any measured usage.

## Typography

One family, **Saans** (loaded as `Saans normal normal`; Manrope 200-800 is also loaded as a secondary face), carries 2051 characters, all at weight 400. The root fallback is `system-ui, -apple-system, ..., "Open Sans", "Helvetica Neue", sans-serif`.

- Display: 107.288px, line-height 103.134px (about 0.96), uppercase, white; on the 390px pass 44.85px with line-height 43.1133px.
- Body: 18px with line-height 22.05px (about 1.225, matching `--body-line-height: 1.225`); 16px on mobile.
- Link / label: 11.52px uppercase with line-height 13.8298px.
- Footer text: 14.4px.

The desktop ladder is 11.52px (580 characters), 18px (450), 14.4px (340), 85.8307px (195), 54.9316px (172), 28.125px (106), 35.1562px (74), 107.288px (49), 22.5px (41) and 43.9453px (35). The type scale is a modular ladder: the root defines `--type-step: 1.25` and `--h6` through `--h0` as repeated multiplications of `--p: 1rem` by that step, and `--large` clamps to 8 viewport-width units.

Font substitutes: Saans is a commercial family; only the listed fallbacks were measured.

## Layout

A 6-column grid (`--g-columns: 6`, `--columns: 6`) with a gap of `.4rem` (`--g-gap`) and a page margin equal to the gap (`--g-margin`). The unit `--vw` is 12.8px at the measured 1280px viewport (1% of the width). The header is a thin strip: logo at the left, "IMAGINE MORE" in grey in the left-center, and three black tabs at the right ("SAY HELLO", "PROJECTS" with a count, "MENU"). Content sections are separated by 1px hairlines and a centered vertical line; section headings such as "We do it live" are centered, while paragraph text starts at the left margin. The measured spacing set is very fine (0.9px to 10.8px), consistent with hairline rules and tiny crosshair marks; padding of 35.1562px is measured under the body paragraph.

## Elevation & Depth

None by shadow: `boxShadows` is empty. Depth comes from video and light in the imagery (the blue smoke cloud and star shapes), from the two dark values `#0e0e0e` and `#000000`, and from 1px lines in `#222222` and `#333333`.

## Shapes

`borderRadii` is empty: every element computes a 0px radius. The geometry is rectangular tabs, hairline rules, "+" crosshairs and a logo mark; imagery is full-bleed and unframed.

## Components

- **Top tabs**: black `#000000` rectangular cells separated by vertical hairlines, 11.52px uppercase white label, a "+" glyph or count on the right ("SAY HELLO +", "(3)(1) PROJECTS", "MENU").
- **Menu icon**: three thin horizontal lines at the top right.
- **Hero headline**: Saans 107.288px uppercase, white, over video.
- **Statement paragraph**: 18px white text with the brand name in `#666666`.
- **"VIEW ALL" link**: 11.52px uppercase with a count "(3)(1)", padding 8.64px 10.8px 7.92px.
- **Footer**: `#0e0e0e` background, 1px `#222222` border, `#666666` 14.4px text, padding 7.2px 0 18px.

## Design System Architecture

No public design-system or brand-guideline page was linked from the page opened. The site is built with Nuxt (`/_nuxt/` assets) and its stylesheet names Vue components such as `BaseButton`, `BaseIcon`, `BaseImage`, `BrandShape`, `CTASection`, `GridContent`, `GridRow`, `IconLabel`, `LogoSlide`, `PageFooter` and `ProjectItem`. The root variables are the real token layer: a named grey ramp (`--c-grey-1` to `--c-grey-6`) with matching `-rgb` triplets, `--c-white`, `--c-black`, `--c-red`, `--c-blue`; named easings (`--f-smooth: cubic-bezier(.5,0,.3,1)`, `--f-cubic: cubic-bezier(.22,.31,0,1)`, `--f-fast: cubic-bezier(0,.81,.35,1)` and others); a modular type scale from `--type-step: 1.25`; and the 6-column grid variables.

## Do's and Don'ts

Do:
- Keep the stage dark (`#0e0e0e`) and let imagery provide color.
- Set headlines in Saans uppercase at weight 400, large and tightly leaded (about 0.96).
- Use 11.52px uppercase labels with a "+" or a bracketed count for navigation.
- Separate sections with 1px `#222222` or `#333333` lines.

Don't:
- Do not add border radius, shadows or filled colored buttons.
- Do not use `#ff3500` or `#4b00ff` as large surfaces; no measured element uses them.
- Do not use bold weights for display type; all measured weights are 400.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 is 44.85px (line-height 43.1133px) instead of 107.288px; body is 16px instead of 18px; the mobile ladder is 10.24px (544 characters), 16px (456), 12.8px (340), 25px (243), 20px, 48.8281px, 39.0625px, 44.85px and 61.0352px. Menu behavior, column collapse and layout changes on mobile were not measured.

## Iteration Guide

1. Black and near-black bands with white Saans type; secondary text `#666666`.
2. Huge uppercase headline at weight 400, line-height about 0.96, over full-bleed video.
3. Tiny uppercase labels at 11.52px for navigation, with "+" and bracketed counts.
4. Hairline rules (`#222222`, `#333333`) and "+" crosshairs on a 6-column grid.
5. Zero radius and no shadows. Verify with `node web/scripts/verify-designs.mjs --slug=kaleida`.
