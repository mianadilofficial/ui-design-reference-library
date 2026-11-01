---
version: alpha
name: Olha Lazarieva
category: "Portfolio"
description: "Portfolio of designer Olha Lazarieva (olhalazarieva.com): a light #f7f7f7 hero and a near-black #101010 section, giant uppercase Sofia Sans Condensed headings at 186.667px with -15.3334px tracking, Spline Sans Mono 300 uppercase captions, 2px radius only, no shadows or filled buttons."
colors:
  canvas: "#101010"
  page-body: "#f7f7f7"
  ink: "#ffffff"
  primary: "#ffffff"
  surface-2: "#000000"
  ink-3: "#606060"
  ink-4: "#aaaaaa"
  ink-5: "#efefef"
typography:
  display:
    fontFamily: "\"Sofia Sans Condensed\""
    fontSize: 40px
    fontWeight: 700
    lineHeight: 39.6px
    letterSpacing: "-2.66667px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Sofia Sans Condensed\""
    fontSize: 30.3916px
    fontWeight: 700
    lineHeight: 30.0877px
    letterSpacing: "-0.885111px"
    textTransform: uppercase
  heading:
    fontFamily: "\"Sofia Sans Condensed\""
    fontSize: 186.667px
    fontWeight: 700
    lineHeight: 184.8px
    letterSpacing: "-15.3334px"
    textTransform: uppercase
  subheading:
    fontFamily: "\"Spline Sans Mono\""
    fontSize: 16px
    fontWeight: 300
    lineHeight: 15.84px
    letterSpacing: "-2%"
    textTransform: uppercase
  body:
    fontFamily: "\"Spline Sans Mono\""
    fontSize: 17.3334px
    fontWeight: 300
    lineHeight: 22.5334px
    letterSpacing: "-2%"
    textTransform: uppercase
  nav:
    fontFamily: "\"Spline Sans Mono\""
    fontSize: 13.3334px
    fontWeight: 300
    lineHeight: 15.84px
    letterSpacing: 0.666668px
    textTransform: uppercase
  link:
    fontFamily: "\"Spline Sans Mono\""
    fontSize: 17.3334px
    fontWeight: 400
    lineHeight: 17.16px
    letterSpacing: "-2%"
    textTransform: uppercase
  input:
    fontFamily: "\"Spline Sans Mono\""
    fontSize: 12px
    fontWeight: 300
    lineHeight: 11.88px
    letterSpacing: "-0.2px"
    textTransform: uppercase
rounded:
  xs: 2px
spacing:
  s1: 2.67px
  s2: 10px
  s3: 11.33px
  s4: 13.33px
  s5: 23.33px
  s6: 26.67px
  s7: 33.33px
  s8: 44.67px
  s9: 66.67px
  s10: 100px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 0px 0px 3.33334px
  nav:
    textColor: "{colors.ink-5}"
  nav-link:
    textColor: "{colors.ink-5}"
    typography: "{typography.nav}"
    padding: 0px 23.3334px
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    padding: 0px 0px 8.00001px
    height: 24px
  footer:
    textColor: "{colors.canvas}"
    padding: 33.3334px 0px 13.3334px
---

## Overview

Olha Lazarieva's site (https://www.olhalazarieva.com/, title "Olha Lazarieva · Creative Designer") is the personal portfolio of a web and UX/UI designer based in Ukraine. WebFetch returned only the title line because the page is script-rendered, so all content below comes from the measured DOM text and the stored capture. The measured text includes a "0%" loading counter, the name OLHA LAZARIEVA, bracketed navigation [ ABOUT ME ], [ WORKS ], [ SERVICES ], [ CONNECT ], a "CONTACT ME" arrow link, a hero that reads CREATIVE DESIGNER, "BASED IN UKRAINE", three service lines ("/ ART DIRECTION", "/ WEB DESIGN (UX/UI)", "/ WEB DEVELOPMENT"), the intro "I'M EXPERIENCED WEB AND UX/UI DESIGNER, WHO DESIGN MEMORABLE WEB EXPERIENCES FOR BRANDS OF ALL SIZES", a "RECENT WORK" pointer to MAX MILKIN, "AVAILABLE FOR COLLABORATION", and a statement section "EVERY PROJECT FOR ME IS MORE THAN A TASK" with "MY PHILOSOPHY".

The look is an editorial, poster-like portfolio in two tones: a light grey page (`#f7f7f7`) for the hero with enormous condensed black headlines and a small black-and-white portrait, then a near-black section (`#101010`) with white type. Two typefaces do all the work: a very condensed bold sans for headings and a light monospace for everything else, entirely uppercase. The voice is first-person and plain, written in short capitalised lines.

## Colors

- **Canvas `#101010`** is the largest background (5633 area units) and the dark section color; the root variable `--text-color` is the same `#101010`, and `--bg-color` is `#f7f7f7`, which is the body and hero background (page-body).
- **Ink `#ffffff`** is the text on the dark section (984 characters); **primary `#ffffff`** is the same white, because the site has no filled button: the only action elements are underlined links ("LETS CONTACT", "CONTACT ME"). On the light hero the text color is `#101010`, the most-read text overall (1423 characters).
- **Surface-2 `#000000`** is a single black element and the only border color. **Ink-3 `#606060`** (180 characters), **ink-4 `#aaaaaa`** (79) and **ink-5 `#efefef`** (78, used by the navigation text) are the grey steps. The root variable `--text-gray-color: #908c8c` is declared but did not appear in the rendered color list.

## Typography

- **Sofia Sans Condensed** (weights 600, 700) is the display face, 1031 characters. **Spline Sans Mono** (weights 300, 400) carries 1752 characters of UI and body.
- **Heading (H2 "ABOUT ME"):** 186.667px, weight 700, line-height 184.8px, letter spacing -15.3334px, uppercase. At 390px it is 111.719px with -8px tracking.
- **Display (H1 role "MAX MILKIN"):** 40px, weight 700, line-height 39.6px, letter spacing -2.66667px. Mobile: 30.3916px, line-height 30.0877px.
- **Subheading:** Spline Sans Mono 16px, weight 300, letter spacing -2%, uppercase. **Body:** 17.3334px, weight 300, line-height 22.5334px, letter spacing -2% (mobile 20px, line-height 26px).
- **Nav:** 13.3334px, weight 300, letter spacing 0.666668px. **Link:** 17.3334px, weight 400. **Input:** 12px, weight 300.

All text is uppercase. Headline tracking is strongly negative, near -8 percent at 186.667px (-15.3334px) and -6.7 percent at 40px; mono text uses -2%. Most-used sizes by characters: 17.3334px (1146), 21.3334px (359), 16px (246), 12px (181), 24px (179).

## Layout

The page is 13045px tall. The header holds the wordmark at the left, the bracketed navigation across the center and "CONTACT ME" at the right. The hero is a full-width headline spanning the viewport with an offset black-and-white portrait block, service lines left of the portrait and small mono captions around it. Spacing from measurements: paddings 10px, 23.3334px and 26.6667px (7 each), 33.3334px, 44.6667px, 66.6668px, 100px and 120px; a single gap of 11.3333px. The footer padding is 33.3334px 0px 13.3334px. The scale of the spacing tokens is 2.67, 10, 11.33, 13.33, 23.33, 26.67, 33.33, 44.67, 66.67 and 100px.

The measured font-size list shows how many steps the type uses between the extremes: 6.66668px, 10.6667px, 12px, 13.3334px, 16px, 17.3334px, 21.3334px, 24px, 26.6667px, 33.3334px, 42.6667px, 53.3334px, 108.667px and 186.667px. The fractional values mean the type is sized in a unit that scales with the viewport rather than in whole pixels. Letter spacing at 21.3334px and 24px is -1.33334px, at 26.6667px and 33.3334px it is -2px, and at 53.3334px it is positive 1.33334px, so tracking is set per size rather than by one rule.

Weights are split by family: Sofia Sans Condensed appears at weight 700 (997 characters) and 600 (35 characters) and Spline Sans Mono at 300 (1439 characters) and 400 (312 characters). The light mono weight is therefore the voice of the page, and the bold condensed face is reserved for names and headlines such as "ABOUT ME" and "MAX MILKIN", while small labels such as "MY PHILOSOPHY" are mono in grey `#aaaaaa`.

## Elevation & Depth

No box shadows (`boxShadows` is empty). Depth is created by the switch from the light hero to the full-bleed black section and by the scale contrast between the giant headline and the 12 to 17px mono captions. The portrait is overlapped by the headline's lower edge in the capture.

## Shapes

Only one radius was measured: 2px, on two elements. Everything else is square. Links are marked by a 3.33334px bottom padding (an underline gap) rather than a container shape. The root variable `--transition-main: cubic-bezier(0.11,0.82,0.39,0.92)` declares the easing used for transitions.

## Components

- **Link:** Spline Sans Mono 17.3334px weight 400, white on dark, padding 0 0 3.33334px, underlined with an arrow glyph ("CONTACT ME ↗", "RECENT WORK ↘").
- **Nav:** bracketed items in mono 13.3334px, color `#efefef`, padding 0 23.3334px on each item.
- **Text input:** mono 12px weight 300, 24px tall, 8.00001px bottom padding, no box; a line-style field.
- **Footer:** padding 33.3334px 0 13.3334px, `#101010` text.
- **Counters:** the "0%" loader and a small "1,618" figure above the headline in the capture are numeric mono labels.

## Design System Architecture

The site publishes no design system or brand guidelines; WebFetch of https://www.olhalazarieva.com/ returned only the page title because the content is rendered by script. No public system exists beyond the de-facto one in the stylesheet: six root variables (`--transition-main`, `--text-gray-color: #908c8c`, `--white: #fff`, `--bg-color: #f7f7f7`, `--text-color: #101010`, `--text-gray-second-color: #aaa`) and two fonts loaded as four faces (Sofia Sans Condensed 600 and 700, Spline Sans Mono 300 and 400).

## Do's and Don'ts

- Do set headings in condensed bold uppercase with tracking near -8 percent.
- Do set all captions and body copy in light uppercase monospace with -2% tracking.
- Do use only `#f7f7f7`, `#101010` and white for large areas, with grey text steps `#606060`, `#aaaaaa`, `#efefef`.
- Do mark actions with underlined links and arrows instead of filled buttons.
- Don't add shadows or rounded containers; the only radius is 2px.
- Don't introduce an accent color; none was measured.

## Responsive Behavior

Measured at 390px: the "ABOUT ME" heading drops from 186.667px to 111.719px (letter spacing -8px), the H1 role to 30.3916px, and body copy grows to 20px with a 26px line-height. The header text at that width is Sofia Sans Condensed 24px, weight 700, with 25px vertical padding, and the header lists OLHA LAZARIEVA, ABOUT ME, WORKS, SERVICES and CON... items. The mobile size distribution is 20px (1053 characters), 14px (509), 12px (142) and 18px (129). Breakpoints were not read from the stylesheet and tablet widths were not measured.

## Iteration Guide

1. Choose the section tone first: `#f7f7f7` with `#101010` text, or `#101010` with white text.
2. Scale the display headline to the viewport and keep its negative tracking proportional.
3. Keep all text uppercase; use mono 300 for body.
4. Use only underlined arrow links for actions.
5. Record any new measurement in SOURCES.json before adding a token.
