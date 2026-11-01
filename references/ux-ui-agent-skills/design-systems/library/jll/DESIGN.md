---
version: alpha
name: JLL
category: "Real Estate & PropTech"
description: "Global commercial real estate firm, JLL Southeast Asia: white canvas with blush #f7ece3 bands, deep teal ink #0e1d23, signal red #de0614, Source Sans 3 at 48px display and 20px body, 6px to 12px radii and translucent teal-tint buttons."
colors:
  canvas: "#ffffff"
  page-largest: "#f7ece3"
  ink: "#0e1d23"
  primary: "#de0614"
  on-primary: "#01151d"
  surface-3: "#eff3f4"
  ink-2: "#3c535c"
  ink-4: "#5d7078"
  hairline: "#cad1d5"
  button-primary-bg: "#3e778b29"
typography:
  display:
    fontFamily: "\"Source Sans 3\", \"Source Han Sans SC\", sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 60px
    letterSpacing: "-0.8px"
  display-mobile:
    fontFamily: "\"Source Sans 3\", \"Source Han Sans SC\", sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: "-0.8px"
  subheading:
    fontFamily: "\"Source Sans 3\", \"Source Han Sans SC\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  body:
    fontFamily: "\"Source Sans 3\", \"Source Han Sans SC\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: "\"Source Sans 3\", \"Source Han Sans SC\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: "\"Source Sans 3\", \"Source Han Sans SC\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 6px
  sm: 8px
  md: 10px
  lg: 12px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 14px
  s5: 16px
  s6: 18px
  s7: 24px
  s8: 28px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 12px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 12px
    height: 48px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-2}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 24px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-2}"
  nav-link:
    textColor: "{colors.ink-2}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(1, 21, 28, 0.08) 0px 6px 21px 0px
  footer:
    textColor: "{colors.ink-4}"
---

## Overview

The measured page is JLL Southeast Asia (https://www.jll.com/en-sea/), titled "JLL Southeast Asia | Commercial Real Estate and Property Investment", rendered in en-GB. The brand is a global commercial real estate and investment management firm, and the site presents itself as a corporate-editorial portal rather than a listings marketplace. The header holds the red JLL wordmark with the tagline "SEE A BRIGHTER WAY" in widely tracked caps, a country selector reading "Singapore" with a flag and chevron, a square search button, a tinted "Contact us" button and a menu button. A second row carries six text links: Properties, Services, Technology, People, Insights, Industries.

Below the header a full-width hero photograph of the Singapore skyline carries the headline "Shaping the future of real estate for a better world" in white and a white "Get to know us" button with an arrow. A white card overlaps the bottom of the hero titled "Spotlight stories" in red, followed by a horizontal row of story headings (for example "Global Real Estate Transparency Index, 2026" and "Uncover key insights from the Singapore Master Plan"), the active one marked by a thin red vertical bar on a light tint.

The page continues with an "Explore a brighter way" block with expandable rows ("Our latest insights", "Our real estate solutions", "Careers at JLL", "Properties for sale or lease"), then a warm blush-colored section (#f7ece3) with alternating photograph and text blocks introduced by small caps-case eyebrows ("TECHNOLOGY AND AI", "THE FUTURE OF SPACES"). Headlines in these blocks highlight a key phrase in red ("future", "live and work"). The tone is confident and optimistic, and the photography is of bright, human, architectural spaces.

## Colors

The palette is a deep blue-teal ink family plus a single signal red.

- **canvas #ffffff** is the main page background and header.
- **page-largest #f7ece3** is the largest background area (1633 weight), the warm blush band behind the editorial blocks.
- **surface-3 #eff3f4** is a cool grey-blue panel (819) used for the active story tile.
- **ink #0e1d23** is the most-read text color (2695 weighted characters). **on-primary #01151d** is a near-black used for button and body text (355). **ink-2 #3c535c** (415) is for navigation and secondary links and **ink-4 #5d7078** (265) for footer and tertiary text.
- **primary #de0614** is the JLL red, measured as the "Spotlight stories" heading color and the red phrase highlights (95 weighted characters).
- **hairline #cad1d5** is the 1px border and divider color (it is the border of the country selector).
- **button-primary-bg #3e778b29** is a translucent teal tint (about 16% alpha) used for the filled buttons such as "Discover our AI solutions"; on white it reads as a light grey-blue.

The site's variables define a much larger palette, including named scales (amber, crimson, forest, bahama, science with steps like 1400 and 1900), RAG status colors (--surface-rag-success #077f4e, --sol-surface-rag-success-strong #065c3c) and an overlay tint (--color-sol-surface-overlays-level1 #3e778b0f). These are declared but not seen in the home page measurement, so they are not promoted to tokens.

## Typography

One family does everything: "Source Sans 3" (loaded as a variable font, weights 200 to 900) with "Source Han Sans SC" as a fallback for Chinese, then generic sans-serif. "Material Symbols Outlined" (weight 300) supplies the icon glyphs such as arrow_forward and keyboard_arrow_down, accounting for 334 weighted characters; icons are text ligatures, not images.

- **display** 48px / 60px, weight 400, letter-spacing -0.8px (hero headings, which also measure white on photography). The variables show a "hero" type weight of 300, but the measured hero heading renders at 400.
- **display-mobile** 36px / 40px, letter-spacing -0.8px.
- **subheading** 24px / 32px, weight 400 ("Spotlight stories").
- **body** 20px / 28px, weight 400, in #01151d.
- **button** 18px / 28px, weight 400.
- **nav** 16px / 24px, weight 400.

The hierarchy is built from size alone with a single weight; headings are not bold. Source Sans 3 is open source (Adobe), so it can be used as is.

## Layout

The page is a centered column on a wide container with generous vertical bands. The header has two rows separated by a 1px hairline. The hero is full width with an overlapping white card; the editorial section alternates image and text in two columns inside a tinted band. The "Explore a brighter way" block is a three-column arrangement: heading and paragraph at left, two columns of accordion-style rows at right, each with a down-arrow.

Spacing tokens measured: 4px, 8px, 12px, 14px, 16px, 18px, 24px, 28px, 32px and 40px. Buttons use 8px 12px padding with a 48px height, and links use 0 24px padding. The variables declare containers such as --sol-container-xs at 320px and a mobile breakpoint of 400px.

## Elevation & Depth

Depth is light. The one soft shadow measured on cards is rgba(1, 21, 28, 0.08) 0px 6px 21px 0px (weight 3), a faint teal-black drop. The country selector uses an inset 1px shadow in #cad1d5 as its outline instead of a border. Imagery cards in the blush section show this same soft lift in the capture. Elevation levels are declared in the variables (for example an e6 level with 17px blur), but only the first shadow was observed.

## Shapes

Radii measured: 6px (weight 43), 12px (43), 10px (5), 8px (3). Tokens: xs 6px, sm 8px, md 10px, lg 12px. Buttons, the country selector, the search button and the link buttons use 6px. Cards use 8px in the component token, and the larger 12px radius belongs to photograph tiles and the overlapping white hero card. There are no pill shapes in the measurement.

## Components

- **button-primary** and **button-secondary**: translucent teal tint fill (#3e778b29), #01151d text, button type (18px), 6px radius, 8px 12px padding, 48px height, with a trailing arrow icon ("Learn more about the future of spaces", "Explore our industry specialization").
- **outlined selector**: white, #3c535c text, 1px #cad1d5 outline, 6px radius, 0 16px padding (the "Singapore" country picker).
- **link button**: white background, #3c535c text, 6px radius, 0 24px padding ("Explore more", "Get to know us").
- **nav / nav-link**: white bar, #3c535c links at 16px / 24px.
- **card**: 8px radius with the 6px 21px soft shadow.
- **footer**: text in #5d7078.

Hover states were recorded for the link button but the measured before/after properties are not used to define tokens here.

## Design System Architecture

JLL's public site does not link to a public design system page, so none is cited. The shipped CSS exposes an internal system through its custom properties: names prefixed `--sol-` and `--sol-color-solstice-...` (for example `--sol-color-solstice-violet-100`, `--sol-container-xs`, `--sol-surface-rag-success-strong`), numbered color scales (`--amber-2100`, `--science-1900`, `--forest-1400`), type tokens (`--type-hero-weight`, `--type-H-dataFeatured-size`, `--scale-s8-lineHeight`), component tokens (`--comp-button-micro-iconSize`) and elevation tokens (`--elevationLevels-e6-sharp-blur`). The "sol" prefix in these names is the only naming evidence; no document describing it was opened. Source: the measured root variables in web/data/extracted/jll.json from https://www.jll.com/en-sea/.

## Do's and Don'ts

- Do use Source Sans 3 at a single regular weight and create hierarchy with size (48px, 24px, 20px, 18px, 16px).
- Do reserve the red #de0614 for a key phrase in a headline or a section label, not for fills.
- Do put editorial blocks on the blush band #f7ece3 and utility panels on #eff3f4.
- Do give buttons the 6px radius, 48px height and teal-tint fill with an arrow icon.
- Do use bright, human, architectural photography.
- Don't use pill buttons or heavy borders; use 1px #cad1d5 hairlines.
- Don't use the declared status and named scale colors as decoration.
- Don't add strong shadows beyond the 8%-alpha soft lift.

## Responsive Behavior

Measured in the 390px mobile pass: h1 36px (down from 48px) with 40px line height and body 20px (unchanged). The variables declare a default mobile breakpoint of 400px. Other mobile behavior (menu, accordion and carousel layout) was not measured.

## Iteration Guide

1. Start with white and #0e1d23 text; place a red phrase highlight in the headline.
2. Choose type from the six measured roles; avoid bold.
3. Create sections on #f7ece3 and #eff3f4 bands.
4. Use 6px radius on controls and 12px on image tiles.
5. Add Material Symbols Outlined arrows to buttons.
6. Pick spacing from 4px to 40px.
7. Re-run `node web/scripts/verify-designs.mjs --slug=jll`.
