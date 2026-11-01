---
version: alpha
name: TRIONN
category: "Portfolio"
description: "TRIONN, an independent digital studio: near-black #0c0c0c canvas with #d8d8d8 text, familjen display at 80px with -4.8px tracking, neueHaas body, martianMono uppercase links, a white pill LET'S TALK button and 6.4px-radius dark cards with no shadows."
colors:
  canvas: "#0c0c0c"
  page-body: "#040508"
  page-largest: "#000000"
  ink: "#d8d8d8"
  primary: "#d8d8d8"
  white: "#ffffff"
  ink-dark: "#434343"
  ink-ghost: "#d8d8d81a"
  ink-white-soft: "#ffffff99"
  surface-card: "#272727"
typography:
  display:
    fontFamily: familjen, "familjen Fallback", sans-serif
    fontSize: 80px
    fontWeight: 400
    lineHeight: 72px
    letterSpacing: "-4.8px"
  display-mobile:
    fontFamily: familjen, "familjen Fallback", sans-serif
    fontSize: 45.7031px
    fontWeight: 400
    lineHeight: 42.6562px
    letterSpacing: "-2.74219px"
  heading:
    fontFamily: familjen, "familjen Fallback", sans-serif
    fontSize: 76.0064px
    fontWeight: 400
    lineHeight: 72px
    letterSpacing: "-4.56038px"
  subheading:
    fontFamily: familjen, "familjen Fallback", sans-serif
    fontSize: 28.8px
    fontWeight: 400
    lineHeight: 28.8px
    letterSpacing: "-1.152px"
  body:
    fontFamily: neueHaas, "neueHaas Fallback", sans-serif
    fontSize: 14.4px
    fontWeight: 400
  nav:
    fontFamily: neueHaas, "neueHaas Fallback", sans-serif
    fontSize: 12.8px
    fontWeight: 400
  link:
    fontFamily: martianMono, "martianMono Fallback", monospace
    fontSize: 11.2px
    fontWeight: 400
    letterSpacing: "-0.672px"
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 3.2px
  md: 6.4px
  pill: 9999px
spacing:
  s1: 0.81px
  s2: 4.8px
  s3: 6.4px
  s4: 9.6px
  s5: 12.8px
  s6: 19.2px
  s7: 32px
  s8: 38.4px
  s9: 51.2px
  s10: 64px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.page-largest}"
    padding: 32px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
  button-primary:
    backgroundColor: "{colors.white}"
    textColor: "{colors.page-largest}"
    rounded: "{rounded.pill}"
    height: 27px
---

## Overview

The measured page is `https://trionn.com/`, titled "TRIONN | AI-Powered Creative Design & Development Studio in India". It is a studio portfolio built as an immersive dark experience: a near-black field with a generative 3D artwork of angular shards and glowing lines behind the hero headline, "Designed to mean depth." The header carries the "TRIONN®" logo at left and, at right, a small round sound toggle, a white "LET'S TALK" pill and an outlined "MENU" pill with a two-line icon. In the hero, a bordered box reads "EST. 2012 / 14+ YEARS SHAPING DIGITAL DIRECTION." beside the line "Websites, AI products, brands, and systems built for clarity, scale and impact." A centred prompt invites interaction: "HOLD TO BLAST / DARE TO TOUCH THE LINES."

Below the hero a small "ABOUT" label introduces a large, deliberately faded statement ("Trionn is an independent digital studio crafting meaningful brand experiences through strategy, design, and technology."), then two small uppercase lines ("WE DESIGN FOR LONGEVITY / CLARITY FIRST, CRAFT ALWAYS, BUILT TO SCALE."), a mission paragraph with a mono "MORE ABOUT US →" link and a giant marquee of "IMPACT + INSPIRE + INNOVATE". Further down are cards titled "FEATURED & AWARDS" and "OUR TEAM MEMBERS". The measured page is 5,835px tall with 892 visible elements. The voice is confident and compressed.

## Colors

The page is dark and almost monochrome. `{colors.canvas}` is #0c0c0c (3,072 area units), `{colors.page-body}` is #040508 (declared as `--bg` and `--ts-color-bg`), and `{colors.page-largest}` is pure black (#000000, 3,072 units). Text is `{colors.ink}` (#d8d8d8, 1,111 characters), which is also `{colors.primary}`: the brand has no chromatic accent, so the light grey is the action and emphasis colour. Pure `{colors.white}` (#ffffff) fills the LET'S TALK pill and appears over 2,076 units of area in lighter sections, and `{colors.ink-dark}` (#434343, 1,740 characters, `--color-dark-font`) is the text colour used on those lighter sections.

Faded and translucent values create hierarchy rather than extra hues: `{colors.ink-ghost}` (#d8d8d81a) sets the large unrevealed statement text, `{colors.ink-white-soft}` (#ffffff99) sets secondary overlay text, and `{colors.surface-card}` (#272727) fills cards (a second card is #2f3135). The root variables also declare `--color-cream: #e6e4e2`, `--color-grey-light: #9c9c9c`, `--pl-panel-gray: #c8c8c8`, `--glass-line: #ffffff2e` and `--ink-soft: #0a0a0a8c`. A mid-grey #c3c3c3 covers 1,024 units of area.

## Typography

Three families do distinct jobs. familjen (400, 1,648 characters) sets headlines: the hero (`{typography.display}`) is 80px on a 72px line with -4.8px letter-spacing, the large statement (`{typography.heading}`) is 76.0064px on 72px with -4.56px, and subheads (`{typography.subheading}`) are 28.8px on 28.8px with -1.152px. neueHaas (1,323 characters) sets body copy at 14.4px (`{typography.body}`) and menu items at 12.8px (`{typography.nav}`). martianMono sets small uppercase links at 11.2px with -0.672px tracking (`{typography.link}`), such as "MORE ABOUT US".

Every measured character is weight 400; hierarchy comes from size and tracking, not boldness. Tracking is tight at display sizes (-0.06em at 80px). Sizes in use: 14.4px, 28.8px, 11.2px, 13.6064px, 76.0064px, 117.299px (the marquee words), 44.8px and 12.8px. The root also declares `--pl-display: "Bebas Neue"` and `--pl-mono: "Space Mono"`, which were not among the loaded fonts (neueHaas, martianMono and familjen with matching fallbacks).

## Layout

The layout is asymmetric and spacious: the hero headline hugs the top-left, the info box sits at the right, and the About copy is split across a left column (small uppercase lines) and a right column (mission paragraph and link). The marquee runs full-bleed. Gaps are 19.2px (37 uses), 12.8px (26) and 32px (12); paddings are 32px (35 uses), 12.8px (14), 19.2px (12), 64px (7), 51.2px (4) and 120px (3). The header is 91px tall with 32px vertical padding.

The root defines `--spacing: .25rem` and a Tailwind-style variable set (`--text-*`, `--radius-*`, `--tracking-*`, `--container-*`, `--tw-*`), which explains the 4px-based steps. Small "+" glyphs mark section junctions and the marquee separators, and a small circled plus icon sits at the left edge of the hero. The text blocks are narrow, never wider than a short paragraph, so the black field stays dominant and the display type reads as the primary structure of each section.

## Elevation & Depth

No box shadows were measured. Depth is created by the 3D artwork, by dark-on-darker layering (#0c0c0c over #040508 over #000000) and by translucent hairlines: borders of `#ffffff` (2 elements), `#ffffff26` (2) and `#0000000f` (1), and a declared `--glass-line: #ffffff2e`. Declared perspective (`--perspective-midrange: 800px`) belongs to the 3D scenes.

## Shapes

Mostly small radii plus full pills. 6.4px (`{rounded.md}`, 11 elements) rounds cards, 3.2px (`{rounded.sm}`, 9) rounds small tags and chips, 2px (`{rounded.xs}`) one element, and four elements are fully rounded pills (the computed radius is the browser maximum, 3.35544e+07px), among them the LET'S TALK button. The MENU pill and the round sound toggle are also fully rounded in the capture. The hero info panel is a square-cornered rectangle with hairline borders, and the root declares a `--pl-corner-plus-offset` variable for corner "+" marks.

## Components

**Primary button ("LET'S TALK").** White `{colors.white}` fill, black label, fully rounded, 27px tall in the measurement; its label is split into one element per letter for animation. Typography for the button itself was not isolated by the extractor.

**Secondary pill ("MENU").** Outlined pill with an icon, light text on the dark header.

**Navigation links.** neueHaas 12.8px in `{colors.ink}`; the header has 32px vertical padding.

**Link.** martianMono 11.2px uppercase, underlined, ending in an arrow ("MORE ABOUT US →").

**Card.** `{colors.surface-card}` fill, `{colors.ink}` text, 6.4px radius, 390px tall, with an uppercase 13.6064px label ("FEATURED & AWARDS") and a short statement.

**Info panel.** Hairline-bordered rectangle with a globe icon cell and an uppercase caption.

**Marquee.** 117.299px caps in `{colors.ink}` separated by thin "+" marks.

## Design System Architecture

No public design-system or brand-guideline page was opened. The shipped CSS mixes a Tailwind-style utility variable set (`--tw-ring-shadow`, `--text-2xl: 1.5rem`, `--text-lg: 1.125rem`, `--radius-xs: .125rem`, `--radius-sm: .25rem`, `--radius-md: .375rem`, `--radius-lg: .5rem`, `--radius-3xl: 1.5rem`, `--tracking-tight: -.025em`, `--tracking-widest: .1em`) with project tokens: `--color-light-font: #d8d8d8`, `--color-dark-font: #434343`, `--color-black: #272727`, `--color-white: #fff`, `--color-cream: #e6e4e2`, `--color-grey-light: #9c9c9c`, `--color-grey-line: #434343`, `--bg: #040508`. A set of `--ts-color-*` variables (`--ts-color-scan-id: #d8d8d8bf`, `--ts-color-role`, `--ts-color-hint`, `--ts-color-name`, `--ts-color-detected`) styles interactive on-canvas labels.

Easing is declared as `--ease-soft: cubic-bezier(.22, 1, .36, 1)` alongside the default `cubic-bezier(.4, 0, .2, 1)`. The system is design-led but unpublished.

## Do's and Don'ts

- Do stay in the dark, near-monochrome palette with #d8d8d8 text.
- Do set display type in familjen at weight 400 with strongly negative tracking.
- Do use martianMono uppercase for small links and labels.
- Do use white pills for the single main action.
- Don't add accent hues; hierarchy comes from opacity, size and tracking.
- Don't use heavy weights; every measured character is 400.
- Don't add drop shadows; use hairlines at 15% white instead.

## Responsive Behavior

The extraction's 390px pass measured the h1 "Designed to" at 45.7031px on a 42.6562px line with -2.74219px letter-spacing (familjen 400, #d8d8d8), body copy at 15.2344px, and a leading size list of 15.2344px (1,490 characters), 21.3281px (1,179), 13.7109px (183), 12.1875px (176), 60.9375px (113) and 30.4688px (105). No primary button was detected on mobile. Column collapse, menu behaviour and breakpoints were not measured.

## Iteration Guide

1. Black and near-black fields, `{colors.ink}` text, no accent hue.
2. Display in familjen 400 with -0.06em tracking; body in neueHaas 14.4px.
3. Small uppercase mono links with arrows.
4. One white pill CTA; outlined pill for the menu.
5. Cards at 6.4px radius on #272727, hairlines at translucent white.
6. Keep spacing on the 4px-derived steps (4.8, 6.4, 9.6, 12.8, 19.2, 32, 64).
