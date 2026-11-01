---
version: alpha
name: Digital Design Days Palermo (DDDx)
category: "Architecture & Interiors"
description: "Digital Design Days Palermo (palermo.ddd.live), the Sicily edition of DDD: a magenta-to-purple gradient hero with 111.224px neue-haas-grotesk-display 600 uppercase titles at -1.67px tracking, midnight-purple #201a39 ink, 13.7143px DM Mono uppercase labels, 100px pill buttons and 10px frosted cards."
colors:
  canvas: "#ffffff"
  ink: "#201a39"
  primary: "#201a39"
  on-primary: "#ffffff"
  purple: "#48337b"
  deep-purple: "#191823"
  dark-purple: "#3e3d4e"
  pink: "#ff3c96"
  rose: "#f55ac2"
  mint: "#4df0e0"
  mid-gray: "#a7a5ad"
  gray: "#d2d2d2"
  surface-pale: "#eeedef"
  glass: "#ffffff33"
typography:
  display:
    fontFamily: neue-haas-grotesk-display, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 111.224px
    fontWeight: 600
    lineHeight: 100.102px
    letterSpacing: "-1.66836px"
    textTransform: uppercase
  display-mobile:
    fontFamily: neue-haas-grotesk-display, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 60.2956px
    fontWeight: 600
    lineHeight: 54.2661px
    letterSpacing: "-0.904434px"
    textTransform: uppercase
  subheading:
    fontFamily: neue-haas-grotesk-display, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 72.5729px
    fontWeight: 600
    lineHeight: 65.3156px
    letterSpacing: "-1.08859px"
    textTransform: uppercase
  body:
    fontFamily: neue-haas-grotesk-text, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 17.7143px
    fontWeight: 400
    lineHeight: 25.3714px
  body-mobile:
    fontFamily: neue-haas-grotesk-text, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16.125px
    fontWeight: 400
    lineHeight: 24.1px
  nav:
    fontFamily: neue-haas-grotesk-text, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 17.7143px
    fontWeight: 500
    lineHeight: 25.3714px
  label:
    fontFamily: "\"DM Mono\", \"Courier New\", monospace"
    fontSize: 13.7143px
    fontWeight: 400
    lineHeight: 17.1429px
    textTransform: uppercase
  link:
    fontFamily: "\"DM Mono\", \"Courier New\", monospace"
    fontSize: 13.7143px
    fontWeight: 500
    lineHeight: 17.1429px
    textTransform: uppercase
rounded:
  xs: 6px
  sm: 10px
  md: 100px
spacing:
  s1: 4.43px
  s2: 6.2px
  s3: 8.86px
  s4: 11.77px
  s5: 13.29px
  s6: 13.71px
  s7: 17.71px
  s8: 26.29px
  s9: 26.57px
  s10: 30.86px
components:
  button-pill:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card-glass:
    backgroundColor: "{colors.glass}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    padding: 17.7143px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 35.4286px 0px
---

## Overview

This file documents https://palermo.ddd.live/ (page title "Digital Design Days Palermo | 27-28 June 2025"). The queued brand was "Digital Design Days X"; the measured site is the itinerant Palermo edition of Digital Design Days (DDD), whose own text describes it as "an itinerant event created as part of DDD's mission, organized to provide local communities, organizations, and professionals with the same opportunities for inspiration, education, and networking just like the main DDD event in Milan." The event runs 27 to 28 June 2025 at Cantieri Culturali alla Zisa; the page also promotes "Next event: Milano 7-9 May 2026".

The first screen is a full-bleed gradient of translucent purple and magenta planes (with cyan at the edges), a dark logo tile at top left, the nav, and a very large white title "DIGITAL DESIGN DAYSˣ" stacked in three lines with the last line indented. The tagline at right reads "A live experience that brings together professional designers, the brightest creative minds in the industry, and the most innovative brands." A mono ticker "GLOBAL CENTER OF DIGITAL DESIGN COMMUNITY" runs across the lower hero, with a frosted "NEXT EVENT: MILANO 7-9 MAY 2026 GET TICKETS" card at left and the word "PALERMO" in the same display type at right. The page below is white with a speaker photograph (David Carson on stage) and long statements.

Content blocks in the opened markup: "Palermo Sicily! Here we come!", "Meet our headliners" (18 talks; speakers David Carson, Betty Zhiqin Lu, Ash Thorp, Dust Leblanc, Dot Lung, Ferdi Alici, Guido Callegari), "View all speakers", and a venue block ("Cantieri Culturali alla Zisa", 55,000 m2 and 32 active spaces). Voice is confident event marketing with a Sicilian note ("Sicily is one of Italy's most beautiful regions").

Role notes. The extractor found no filled coloured button: the "GET TICKETS" control in the hero is a pale pill with dark mono text. `primary` is therefore the brand's midnight purple `#201a39`, also the ink; the brand's saturated pink, rose and mint are kept as palette values.

## Colors

Measured on the desktop pass: backgrounds by area `#201a39` (2068), `#eeedef` (1386), `#ffffff33` (37) and `#ff3c96` (3). Text by characters: `#ffffff` (1913), `#201a39` (1593), `#48337b` (22), `#a7a5ad` (10). The body element is `#ffffff`.

The shipped `:root` names the palette: `--color-midnight-purple` `#201a39` (`--body-color`), `--color-deep-purple` `#191823`, `--color-dark-purple` `#3e3d4e`, `--color-purple` `#48337b`, `--color-pink` `#ff3c96`, `--color-rose` `#f55ac2`, `--color-mint` `#4df0e0`, `--color-mid-gray` `#a7a5ad`, `--color-gray` `#d2d2d2`, `--color-pale-gray` and `--color-placeholder` `#eeedef`, and `--color-white`.

- `canvas` `#ffffff`: the page below the hero and text on the hero.
- `ink` / `primary` `#201a39`: text on white, the footer fill and button text.
- `surface-pale` `#eeedef`: pale panels.
- `glass` `#ffffff33`: the translucent card over the gradient.
- `pink`, `rose`, `mint`: the gradient and accent hues; the hero gradient's exact stops were not measured.
- `mid-gray` `#a7a5ad`: dimmed text (10 characters).

No hover colours were measured.

## Typography

Three families: `neue-haas-grotesk-display` (500 and 600) for titles, `neue-haas-grotesk-text` (400, 500, 700 and italic) for text, and `DM Mono` (400 and 500) for labels. Characters: text 2152, DM Mono 1222, display 164. Weights: 400 (2185), 600 (1133), 500 (210), 700 (10).

Display titles are uppercase 600 with tight negative tracking at about -1.5% of size: the H1 and "PALERMO" are 111.224px on a 100.102px line at -1.66836px (60.2956px/54.2661px at -0.904434px on mobile); the speaker names ("DAVID CARSON") are 72.5729px/65.3156px at -1.08859px in `#201a39`. Another 58.8457px size (740 characters) is measured in the desktop data; its family and role were not isolated. Body statements are 17.7143px/25.3714px at 400 (16.125px/24.1px on mobile); nav links are 17.7143px/500; mono labels and buttons are 13.7143px uppercase (400 for labels, 500 for button text with a 22.1714px line).

The faces are Adobe Fonts (neue-haas-grotesk) and Google Fonts (DM Mono); the stacks fall back to Helvetica Neue, Helvetica, Arial and Courier New.

## Layout

The page is long (13209px at 1280px). The header is a row: logo tile and edition text ("PALERMO • MILANO / 27-28 JUNE 2025") at left, nav (Program, Event Hub, Schedule, Become a Partner) in the centre-right, and a "GET TICKETS" pill at the right. Hero content is edge to edge with the title block at the left margin and the tagline block at about the right half. Below the hero the layout uses a loose editorial grid with statements, a speaker carousel and large whitespace.

Spacing values measured: 13.7143px (17 uses), 26.2857px (15), 13.2857px (13), 26.5714px (13), 6.2px (10), 8.85714px (9), 78.8571px (9), 17.7143px (7). The `:root` defines fluid spacing tokens (`--space-3xs`, `--space-2xs-xs`, `--space-m`, `--space-l`, `--space-xl-3xl`, `--space-2xl-5xl`, `--space-5xl`) computed as `calc(rem + n * var(--fluid-bp))`.

## Elevation & Depth

No box shadow was measured. Depth is the layered gradient of translucent planes in the hero, the 20 percent white frosted card over it, and photography. Below the hero the page is flat white.

## Shapes

Pills and soft cards: `100px` radius (15 uses) for buttons and tags, `10px` (6 uses) for the frosted card and image masks, `6px` (1). The logo tile is square. Speaker photographs in the capture are rectangular.

## Components

Navigation. White 17.7143px/500 text links over the gradient; the "GET TICKETS" pill (13.7143px/500 DM Mono, `#201a39` text, 100px radius) at the right. A "Menu" / "Close" control exists in the markup.

Frosted event card. A `#ffffff33` card with a 10px radius and a dark `#201a39` square holding a cyan line icon of a building; text "NEXT EVENT: MILANO 7-9 MAY 2026 / GET TICKETS" in 13.7143px mono, with an arrow at the right.

Ticker. A mono row of six words spread across the full width.

Title block. Uppercase display type in white with a superscript x.

Speaker heading. Names in `#201a39` 72.5729px display type, with role and company lines beneath ("Graphic Design Legend", "Digital Designer, Field.io").

Footer. Midnight purple `#201a39` with white mono links (FOLLOW US, FACEBOOK, INSTAGRAM, TWITTER, LINKEDIN) and a "Join our DDD" newsletter prompt, 35.4286px vertical padding.

## Design System Architecture

No public design system or brand guideline was found; the opened page links none. The site is a custom build with a named CSS variable system: `--color-*` palette, `--font-family-text`, `--font-family-display`, `--font-family-mono`, `--body-font-family`, `--body-color`, fluid `--space-*` tokens driven by `--fluid-bp`, and `--brand-dot-size`. Class names follow an ITCSS and BEM-like style (`c-button__text`, `c-headline__guest-name`, `u-text-display`, `u-fs-1`, `u-fs-sm-7`, `o-col`). Source: https://palermo.ddd.live/ as measured and opened.

## Do's and Don'ts

Do set titles in neue-haas-grotesk-display 600 uppercase with negative tracking, white on the gradient and midnight purple on white.

Do use DM Mono 13.7143px uppercase for labels, tickers, dates and calls to action.

Do give buttons and tags a 100px pill radius and cards a 10px radius.

Do overlay frosted `#ffffff33` cards on the gradient hero.

Don't add drop shadows; none were measured.

Don't use pink, rose or mint as text colours on white; only their gradient use is visible.

Don't mix more than the three families.

Don't describe hover or animation behaviour that was not measured.

## Responsive Behavior

Measured at 390px: the H1 and H2 are 60.2956px/54.2661px at -0.904434px (box 163px tall for three lines); body text is 16.125px/24.1px in `#201a39`. Mobile sizes by characters: 14px (1239), 33.3219px (740), 16.125px (241), 21.5228px (234), 12px (108), 18.625px (92), 28.7834px (48), 60.2956px (24). The markup includes "Menu" and "Close" controls, but nav layout at this width was not measured.

## Iteration Guide

1. Gradient hero with white uppercase display type; white page below with midnight-purple ink.
2. Display 111.224px/600 at -1.67px tracking; body 17.7143px; mono labels 13.7143px uppercase.
3. Pills at 100px, cards at 10px, frosted `#ffffff33` fills over the gradient.
4. Use the named palette (`#ff3c96`, `#f55ac2`, `#4df0e0`) in imagery and gradients only.
5. Re-measure the hero gradient before reproducing it.
