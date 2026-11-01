---
version: alpha
name: "Superlocal"
category: "Culture & Events"
description: "Superlocal design festival site (superlocaldesign.com, Spanish, 2026 edition) measured live: a silver #bcbcbc canvas fading to copper #ff661a, off-black #1a1302 ink, a dotted display face at 72px and 56px, fontSans in 600 and 700 with tight tracking, and white pill buttons with 999px radius."
colors:
  canvas: "#bcbcbc"
  ink: "#1a1302"
  primary: "#ffffff"
  on-primary: "#1a1302"
  copper: "#ff661a"
  ice: "#97ebff"
  gold: "#ffb948"
  patina: "#dd8dff"
  bronze: "#846108"
typography:
  display:
    fontFamily: fontDisplay, "fontDisplay Fallback", monospace
    fontSize: 72px
    fontWeight: 700
    lineHeight: 68.4px
  display-mobile:
    fontFamily: fontDisplay, "fontDisplay Fallback", monospace
    fontSize: 38.08px
    fontWeight: 700
    lineHeight: 36.176px
  heading:
    fontFamily: fontDisplay, "fontDisplay Fallback", monospace
    fontSize: 56px
    fontWeight: 700
    lineHeight: 53.2px
  subheading:
    fontFamily: fontSans, "fontSans Fallback", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 26.4px
    letterSpacing: "-0.6px"
  body:
    fontFamily: fontSans, "fontSans Fallback", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20.8px
    letterSpacing: "-0.4px"
  button:
    fontFamily: fontSans, "fontSans Fallback", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20.8px
    letterSpacing: "-0.96px"
  link:
    fontFamily: fontSans, "fontSans Fallback", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 42px
    fontWeight: 700
    lineHeight: 34.44px
    letterSpacing: "-2.52px"
rounded:
  xs: 32px
  pill: 9999px
spacing:
  s1: 1.56px
  s2: 2.56px
  s3: 2.88px
  s4: 3px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 17.6px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px
    height: 37px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px
    height: 37px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    transform: matrix(1, 0, 0, 1, -60.2, 0)
  nav:
    textColor: "{colors.ink}"
    padding: 0px 8px
  nav-link:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.pill}"
    borderColor: "{colors.ink}"
  footer:
    textColor: "{colors.ink}"
    padding: 128px 22.824px 20px
---

## Overview

The measured page is superlocaldesign.com, titled "Superlocal" and written in Spanish (`lang` is `es`). The slug in this library carries "25", but the measured page is the 2026 edition: the h1 reads "Superlocal 2026" and the date line in the hero reads "07-12 SETIEMBRE" (7 to 12 September). Its intro copy begins "El lugar donde el diseño se pone en circulación. Seis días de..." (the place where design is put into circulation). The measured final URL is https://www.superlocaldesign.com/, the festival's own site.

The first screen is a flat silver field with a faint dot grid. A small floating navigation of white pills sits at the top center: a dark pill with the short wordmark "sprlcl", then white pills "Lineup", "Cronograma" (schedule) and "Packs". Below it is a cluster of round photo and glow discs arranged in a ring around a dotted wordmark, and the bottom of the first screen turns into a copper gradient with the title "SUPERLOCAL 2026 07-12 SETIEMBRE" set in a dot-matrix display face across the full width. The remainder of the page height (9,183px total) is measured, but in the captured image everything below the first screen appears as empty silver, so the lower sections are not described here.

The voice is festive and graphic: playful circles, a bitmap-style headline, and short pill labels rather than conventional blocks of navigation.

## Colors

The color names below are published by the site's own root variables. `canvas` is `--silver` and `--background` (#bcbcbc, area weight 7103). `ink` is `--foreground` (#1a1302), a warm near-black used for 4135 text characters and for the 1px borders measured on 230 elements. `copper` (#ff661a, `--copper`) is the orange of the gradient band at the bottom of the hero and the hover fill of the nav pills. `gold` (#ffb948, `--gold`), `patina` (#dd8dff, `--patina`), `ice` (#97ebff, `--ice`) and `bronze` (#846108, `--bronze`) are the festival's accent set; each is measured as an area color (weight 259 for copper, bronze and gold) and as a text color (304 characters in ice, 152 each in gold, patina and bronze). `primary` (#ffffff) is the fill of the white pills; `on-primary` is #1a1302.

The most-used combination is #1a1302 on #bcbcbc. The accents appear as small tinted swatches, text and glow discs, not as large fields. `--pase-color` repeats the violet as rgb(221, 141, 255).

## Typography

Two faces. `fontDisplay` is a variable face (the loaded faces include "fontDisplay 1 50" and "PlataPin") with a monospace fallback, used for the 145 characters of the hero title. `fontSans` carries 4830 characters at weights 600 (2594) and 700 (2381), with a Helvetica Neue, Helvetica, Arial fallback.

The scale: `display` is fontDisplay 72px weight 700 on a 68.4px line; `heading` is fontDisplay 56px on 53.2px; a 120px run with -7.2px tracking is also measured (108 characters). `link` is fontSans 42px bold on 34.44px with -2.52px tracking (247 characters). `subheading` is 24px bold on 26.4px with -0.6px tracking (1376 characters). `body` is 16px bold on 20.8px with -0.4px tracking, and `button` is 16px weight 600 on 20.8px with -0.96px tracking. Small text is 14px with -0.35px and 13px with -0.325px. Tracking is negative on every measured sans size, from -2.5% to -6% of the size (`--tracking-display` is -.06em). Mobile display is 38.08px on 36.176px.

The root variables also publish the type steps used by the page: `--text-pill` 1rem and `--text-pill-hover` 1rem for the nav pills, `--text-hero-body` 1.5rem for the intro paragraph, `--text-name` 2.625rem (42px, matching the measured `link` size), `--text-day` 3.25rem, `--text-day-min` 1.375rem, `--text-statement` 2rem, `--text-credit` .8125rem (13px) and `--text-bar` 1.25rem. The hero kicker is sized with `--text-hero-kicker`, defined as min(4.5rem, calc(6.1vw - .207rem)), so the largest title scales with viewport width up to 72px. The two display axes are named `--plata-wght` 50 and `--plata-wdth` 430 with a peak width of 540 (`--plata-wdth-peak`), which describes how the variable display face is driven.

## Layout

The page is a centered stage. The nav is 320px wide and centered with 8px side padding on each pill. The hero places the disc cluster above a full-width title strip. Footer padding is 128px 22.824px 20px. Root spacing values include `--spacing-global` 1.4265rem, `--space-head` 6rem, `--space-block` 3rem, `--space-seam` 10rem, `--spacing-bar` 6rem and `--spacing` .25rem. Gaps measured on containers: 24px and 12px (50 each), 8px (45), 16px (20) and 34px (12). The hero offsets elements with a `transform: matrix(1, 0, 0, 1, -60.2, 0)` on the display link.

## Elevation & Depth

No box shadows were measured. Depth comes from glow: the translucent discs and radial gradients in the cluster, the vertical silver-to-copper gradient behind the title, and the dark "sprlcl" pill against the white pills. Hover on a nav pill changes its fill from #ffffff to #ff661a and its measured height from 37px to 64px, with no shadow change.

## Shapes

Everything interactive is a pill or circle. `pill` 9999px (reported as 3.35544e+07px on 208 elements) and 999px (52 elements) are the dominant radii, 50% is on 45 round discs, and `xs` 32px (the root `--radius-4xl` is 2rem) on 3 elements. The pill buttons have 1px #1a1302 borders. Square corners are not used on the first screen.

## Components

- **button-primary / button-secondary**: white pill, #1a1302 16px label at weight 600, 999px radius, 8px padding, 37px tall (the nav pills "Cronograma" and "Lineup").
- **nav-link**: the dark "sprlcl" pill: #1a1302 fill, white label, 8px padding, pill radius.
- **nav**: 8px horizontal padding, #1a1302 text.
- **card**: pill-radius outline in #1a1302 (as generated; its content is not described because it is not visible in the capture).
- **footer**: 128px top padding, #1a1302 text.
- **Photo discs**: circular images and glow spheres in the hero cluster, 50% radius.

## Design System Architecture

No public design-system documentation was opened. The site exposes its system as Tailwind-style root properties (`--color-*`, `--text-*`, `--radius-*`, `--spacing`, `--tw-*`) plus project-specific names: color names (silver, copper, bronze, gold, ice, patina), type names (`--text-day`, `--text-name`, `--text-statement`, `--text-pill`, `--text-hero-kicker`) and layout names (`--spacing-card`, `--spacing-medal`, `--spacing-coin`, `--space-head`). The measured values in this file match those variables where they overlap. No tokens repository was consulted.

## Do's and Don'ts

- Do keep one warm near-black (#1a1302) for text and borders on silver.
- Do round every control as a pill, with a 1px #1a1302 border.
- Do use the four accent colors (gold, patina, ice, copper) as small swatches and glows.
- Do set the title in the dot-matrix display face and everything else in fontSans with negative tracking.
- Don't use shadows; none were measured.
- Don't describe lower sections that the capture does not show.
- Don't use pure black or white backgrounds as the page field; the canvas is silver.

## Responsive Behavior

Measured at 390px: the h1 is 38.08px on a 36.176px line (desktop 72px). The mobile census is led by 16px (1756 characters), 20px (1316), 14px (1188), 23.985px (247) and 13px (180), with 52px (108), 18px, 32px and 38.08px also present. Breakpoints, nav behavior and layout reflow were not measured.

## Iteration Guide

1. Start on #bcbcbc with a dot-grid texture and a small centered cluster of pill buttons.
2. Add a gradient to #ff661a at the bottom of the first screen and set the event title in the dotted display face.
3. Keep all text #1a1302, with fontSans at weights 600 and 700 and negative tracking.
4. Use gold, patina and ice for tags, glows and highlights.
5. If a section is not shown in the capture, measure it with the extractor before documenting it.
