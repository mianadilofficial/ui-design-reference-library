---
version: alpha
name: "/nk.studio"
category: "Product & SaaS"
description: "/nk.studio home: DM Sans (variable, weights 300 to 700) in a near-black #070b0a stage with warm off-white #fdfdf9 text, mint accents #00ffc2 and #20e7b7, 67.1925px hero headline with -1.34385px tracking, a floating 10px-radius translucent nav pill, and a cream sheet with 20px top corners."
colors:
  canvas: "#fdfdf9"
  page-body: "#070b0a"
  ink: "#070b0a"
  primary: "#00ffc2"
  surface-deep: "#041819"
  accent-mint: "#20e7b7"
  ink-faint: "#070b0a4d"
  ink-muted: "#bababa"
  ink-subtle: "#888a88"
  ink-on-dark-faint: "#fdfdf966"
  hairline: "#dfe0dd"
typography:
  display:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 67.1925px
    fontWeight: 400
    lineHeight: 70.5521px
    letterSpacing: "-1.34385px"
  display-mobile:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 46.6479px
    fontWeight: 400
    lineHeight: 48.9803px
    letterSpacing: "-0.932958px"
  heading:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 40.9953px
    fontWeight: 400
    lineHeight: 44.6849px
    letterSpacing: "-0.409953px"
  body:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 11.8498px
    fontWeight: 300
    lineHeight: 18.9596px
  nav:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 15px
    fontWeight: 600
    lineHeight: 36px
    letterSpacing: "-0.15px"
  link:
    fontFamily: "\"DM Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 21.5986px
    letterSpacing: "-0.143991px"
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 7px
  md: 10px
  lg: 12px
  xl: 16px
  2xl: 20px
  3xl: 28.8px
  4xl: 80px
  pill: 9999px
spacing:
  s1: 1.94px
  s2: 4px
  s3: 5.92px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 18px
  s10: 20px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.ink-faint}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    padding: 0px 32px
    transform: matrix(1, 0, 0, 1, -236.391, 0)
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.page-body}"
    typography: "{typography.body}"
    rounded: "{rounded.4xl}"
    padding: 0px 12px
    height: 33px
---

# /nk.studio

The measured page is https://www.nk.studio/, the home of /nk.studio, whose title reads "Most Awarded Digital Design & Technology Studio in Latin America - /nk.studio". It is an agency portfolio site: a near-black stage, a single geometric sans (DM Sans), a mint-green accent, very large light-weight headlines, and a floating pill navigation. This document records what the extraction and the capture show.

## Overview

The first screen is a black field with a narrow left rail (the `/nk` wordmark with a mint dot, and a small wave glyph at the bottom), a "Back" link, an underlined "CONTACT US" link and a language selector (ENG) at the top right. The hero headline, "We empower brands to inspire people", is set left-aligned in white-cream in three lines at 67.1925px, with an underlined mint-ruled link, "EXPLORE OUR UNIVERSE", beneath it. A translucent dark pill at the bottom centre holds the five section links: Studio, Impact, Work, Services, News. Below the hero the page changes to a cream sheet with rounded top corners (the capture shows this band empty, so its content is not documented), then returns to a dark section with a second statement ("We create experiences that ignite passion by reimagining what's possible"), a two-column intro paragraph ("For over 20 years, we've worked alongside startups and leading companies...") and a scattered set of statistics (200, 12 weeks, 97%, 5 continents, 10, 6 years) in a staggered layout. The page is 18640px tall at desktop width.

A footer container (`styles_inner-footer__qpSTR`) was hidden before measurement and is not documented as UI.

## Colors

- `page-body` #070b0a and `ink` #070b0a: the near-black used as the page ground in the hero and dark sections and as text on light surfaces.
- `canvas` #fdfdf9: a warm off-white. It is both the largest measured background area (the cream sheet) and the most-read text color (3004 characters), because headings and body copy on the dark sections are set in it.
- `primary` #00ffc2: the mint accent, measured on 29 characters of text (the highlighted "20" and link rules); a second, slightly deeper mint `accent-mint` #20e7b7 appears on 26 characters.
- `surface-deep` #041819: a deep teal-black background used on 1024 area units.
- `ink-faint` #070b0a4d: a 30% black, used as the nav pill background and as faint text.
- `ink-muted` #bababa and `ink-subtle` #888a88: grey captions; `ink-on-dark-faint` #fdfdf966 is the cream at 40% opacity for secondary text on dark.
- `hairline` #dfe0dd: the 1px border color (16 elements).

An error-style red, #ff4545, was measured on 50 characters of text. It is not a token because its role was not identified in the extraction.

## Typography

One family: DM Sans, loaded as a variable font (weights 100 to 1000), with the `DM Sans Fallback` stack from the site's own `--font-dm-sans` variable. All 5132 measured characters use it. Weights in use by character count: 300 (1760), 400 (1483), 500 (1307), 600 (361), 700 (221).

- `display`: 67.1925px / 70.5521px, weight 400, letter spacing -1.34385px (hero h1). Mobile: 46.6479px / 48.9803px with -0.932958px.
- `heading`: 40.9953px / 44.6849px, weight 400, -0.409953px (h2 and h3 statements).
- `body`: 11.8498px / 18.9596px, weight 300 (a very small, light paragraph). Mobile: 11.0141px / 17.6225px.
- `nav`: 15px / 36px, weight 600, -0.15px.
- `link`: 16px / 21.5986px, weight 600, uppercase, -0.143991px.

Other measured sizes: 29.8967px (770 characters), 14px, 9.69953px, 19.3991px, 52.9953px with -1.58986px and an extreme 192px with -3.84px tracking (10 characters, the largest numerals or words). Tracking is consistently about -1% of the font size on large type, and a positive 0.44px on 11px labels. DM Sans is an open-source family, so no substitute is required.

## Layout

The site is built with Tailwind (its `--tw-*` variables are present on `:root`). Measured custom properties: `--max-w-wrapper` 1280px, `--wrapper` 95%, `--grid-cols-space` 28px, `--sidebar` 0px. The hero is full viewport with a left offset for the rail; statistics are laid out on a loose grid with staggered vertical offsets rather than a rigid row. Measured gaps: 4px (42), 16px (22), 12px (18), 48px (14), 24px (12), 20px, 18px, 100px, 32px and 6px. Measured paddings: 8px (34), 12px (15), 32px (14), 31px (14), 28px (10), 16px, 15px, 120px, 4px and 6px.

## Elevation & Depth

No box shadow was measured on rendered elements (the frequency list is empty). The CSS corpus contains several shadows, for example `0 4px 32px rgba(11,26,41,.12),0 0 0 .5px rgba(26,70,128,.12)` and `0 16px 24px -8px rgba(7,11,10,.1)`, but none was observed in use on the home page, so none is tokenized. Depth is created by contrast between a dark stage and a cream sheet with rounded top corners (the `20px 20px 0px 0px` radius), and by the translucent nav pill (`#070b0a4d`).

## Shapes

Radii measured on the page: 10px (14 elements, the nav pill), 100px (8) and 80px (8) for capsule shapes such as the language selector and inputs, 50% (4) for dots and round icons, 4px (4), 7px, 16px, `20px 20px 0px 0px` for the cream sheet, 28.8px and `12px 0px 0px`. The token scale is xs 4px, sm 7px, md 10px, lg 12px, xl 16px, 2xl 20px, 3xl 28.8px, 4xl 80px, pill 9999px. The extractor did not detect a filled primary button; actions are underlined text links.

## Components

- Navigation pill: background #070b0a4d, text #fdfdf9, 15px weight 600, padding 0px 32px, radius 10px; five items (Studio, Impact, Work, Services, News).
- Link: 16px uppercase weight 600 in #fdfdf9 with a mint underline; used for "CONTACT US" and "EXPLORE OUR UNIVERSE".
- Text input: 33px tall, 0px 12px padding, 80px radius, text #070b0a at body size (measured on the page's form control).
- Statistic: a large light numeral with a small unit or caption in muted grey beside it.
- Rail: a thin vertical line at the left edge separating the wordmark column from the content.

## Design System Architecture

No public design system or brand guideline for /nk.studio was opened, and no link to one was found in the extraction. The de-facto system is a Next.js and Tailwind build: CSS-module class names such as `styles_inner-footer__qpSTR`, Tailwind variables on `:root`, a font variable `--font-dm-sans`, and layout variables `--max-w-wrapper`, `--wrapper`, `--grid-cols-space` and `--sidebar`. Colors are not exposed as named variables, so the palette above comes from measured computed styles.

## Do's and Don'ts

- Do use DM Sans in light and regular weights for display text, with negative tracking at large sizes.
- Do alternate a #070b0a stage with a #fdfdf9 sheet that has rounded top corners.
- Do reserve mint (#00ffc2, #20e7b7) for small accents: a rule, a highlighted number, a dot.
- Do present actions as uppercase underlined links, not filled buttons.
- Don't add drop shadows; none were measured in use.
- Don't use pure #000000 or #ffffff; the page uses #070b0a and #fdfdf9.
- Don't document the hidden footer container as UI.

## Responsive Behavior

Measured at the 390px mobile pass: the h1 is 46.6479px / 48.9803px, the h2 24.2817px / 26.467px, and body text 11.0141px / 17.6225px. The most common mobile sizes by characters are 24.2817px (965), 11.0141px (887), 14px (702), 18.1972px (648) and 8.02817px (393). Whether the navigation pill collapses, how the rail behaves, and the stacking of statistics were not measured.

## Iteration Guide

1. Set the page ground to #070b0a and the text to #fdfdf9; add the cream sheet only as a full-width band with 20px top radii.
2. Use DM Sans at the measured sizes and tracking; the hero is 67.1925px with -1.34385px.
3. Add mint #00ffc2 only to small highlights.
4. Build the pill nav at 10px radius on a 30% black.
5. Re-run the gate after any token rename and keep every value as measured.
