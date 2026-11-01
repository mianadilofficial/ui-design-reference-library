---
version: alpha
name: Cappen
category: "Agencies & Studios"
description: "Cappen (cappen.com) is a digital design and development studio's portfolio: a monochrome #fcfcfc and #000000 page, HelveticaNowDisplay 900 uppercase at 124.444px with -4.97778px tracking, PP Editorial New 200 serif text, Martian Mono 8.88889px uppercase labels, 3.56px-radius work tiles and no chromatic accent."
colors:
  canvas: "#fcfcfc"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#fcfcfc"
  ink-soft: "#141414"
  white: "#ffffff"
  hairline: "#2b2b2b33"
typography:
  display:
    fontFamily: HelveticaNowDisplay, sans-serif
    fontSize: 124.444px
    fontWeight: 900
    lineHeight: 99.5556px
    letterSpacing: "-4.97778px"
    textTransform: uppercase
  display-mobile:
    fontFamily: HelveticaNowDisplay, sans-serif
    fontSize: 60.2899px
    fontWeight: 900
    lineHeight: 48.2319px
    letterSpacing: "-2.41159px"
    textTransform: uppercase
  heading:
    fontFamily: "\"PP Editorial New\", sans-serif"
    fontSize: 40.8889px
    fontWeight: 200
    lineHeight: 40.8889px
  heading-mobile:
    fontFamily: "\"PP Editorial New\", sans-serif"
    fontSize: 33.913px
    fontWeight: 200
    lineHeight: 33.913px
  label:
    fontFamily: "\"Martian Mono\", sans-serif"
    fontSize: 8.88889px
    fontWeight: 400
    lineHeight: 14.2222px
    textTransform: uppercase
rounded:
  xs: 3.56px
spacing:
  s1: 0.89px
  s2: 7.11px
  s3: 8.89px
  s4: 14.22px
  s5: 17.78px
  s6: 26.67px
  s7: 35.56px
  s8: 45.33px
  s9: 50.67px
  s10: 53.33px
components:
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    borderColor: "{colors.hairline}"
  work-tile:
    rounded: "{rounded.xs}"
---

## Overview

Cappen's home page (https://cappen.com/, title "Cappen | Award-Winning Web Design & Development Studio") is the portfolio of a digital design and development studio that, per its own page text, was founded in 2006 and works from Miami and São Paulo. The site is almost entirely black on near-white: there is no chromatic brand color in the measured styles, and the color in the page comes from client work photographed as large still images.

The page opens with a thin header: the wordmark "CAPPEN" in heavy type at left, and four tiny uppercase monospace items, "WORKS", "ABOUT", "UPDATES" and "START A PROJECT", each with a small circle bullet at its left and a fine rule beneath it. In the capture, a few black ink-splat shapes overlap the header. The hero is the h1 "BUILDING TOMORROW FOR TODAY", set in enormous black HelveticaNowDisplay capitals on three staggered lines, with a dark rectangular image of a coiled form sitting between the words "FOR" and "TODAY". To the right, a small justified paragraph reads "A multi-awarded digital studio crafting immersive & interactive experiences for global brands since 2006." Under the hero, a hairline and a stack of black horizontal bars that grow thicker close the first screen.

The long page below (31421px) is a staggered grid of work. In the capture the tiles are photographs of client projects placed in an asymmetric two-column rhythm: a laptop showing the "Iquine" site against a blue wall, a close-up of a metal earring for "Amanda Braga", a phone on a green tennis court for "Credit Genie", and a tablet on a yellow tray for "JCPM Malls". Each tile has only a small circle bullet and a name in tiny grey type. Further down a centred statement block reads "(HUMAN) THINKERS DIGITAL MAKERS" in giant black capitals, with a paragraph beneath it in a light serif with italic emphasis: "We push the limits of digital innovation, constantly exploring emerging technologies to craft visually striking, futuristic, and immersive experiences that captivate and engage." A cookie notice ("WE USE COOKIES — THE DIGITAL KIND") with an "OK" button is visible under the hero in the capture; it is a consent widget, excluded from every token below.

The opened page text adds a case-study carousel with a "Launch Project" button, a featured work list, capabilities lists (Digital Experience and Brand Strategy), client names, an awards block, a chat-style contact form headed "LET'S TALK IDEAS", and a footer with Miami and São Paulo offices. The voice is bold, confident and playful: short uppercase labels, an emoji, and aspirational copy.

## Colors

The palette is a monochrome pair with white text on black areas.

- `{colors.canvas}` #fcfcfc is the page background (the largest area, weight 6156; the stylesheet's `--light-gray`). `{colors.ink}` #000000 is the primary text color for the display type and labels (166 characters) and the fill of the black bars and image blocks (area weight 1024; `--black`).
- `{colors.primary}` is the same #000000. The page has no filled call-to-action button and no accent color, so the primary role is assigned to the black that marks every emphasised element (the large type, the bars, the dark blocks). The generator had assigned the off-white to primary because it found no button; the off-white stays as `{colors.canvas}`.
- `{colors.on-primary}` #fcfcfc is the text color on black areas (725 characters, the color of the h2 "We are a collaborative en...").
- `{colors.ink-soft}` #141414 (`--light-black`) is a softer near-black text color (114 characters) and `{colors.white}` #ffffff is used on 32 characters.
- `{colors.hairline}` #2b2b2b33 is the 20% outline color of the thin rules (12 measurements; the solid #2b2b2b is `--outlines`).

The root also declares named colors that were not measured on a visible element: `--west-side` #fb8710, `--heliotrope` #f683fa and `--lemon-grass` #989a96, and a set of `--pagelayer-*` defaults (including #007bff and #61ce70) from the page builder; none is a brand color here. The stylesheet declares `--swap-color-duration` 0.65s with `--swap-color-ease` cubic-bezier(0.25,1,0.5,1) for color swaps.

## Typography

Three families, plus an icon font. HelveticaNowDisplay (loaded at 400 and 900) is the display and label sans and carries 441 of the measured characters; PP Editorial New (loaded at weight 200, normal and italic) is the light serif for statements and carries 197 characters; Martian Mono (loaded at 300) is the monospaced label face and carries 398 characters. Taklobo Display (900) and icomoon (icons) are also loaded.

- `{typography.display}`: HelveticaNowDisplay 124.444px, weight 900, line height 99.5556px (80% of the size), letter spacing -4.97778px, uppercase; the h1. A larger 266.667px size with -5.33333px tracking (16 characters) and an 87.1111px size with -4.97778px tracking were also measured.
- `{typography.heading}`: PP Editorial New 40.8889px, weight 200, line height equal to size; centred statements, with italic words for emphasis.
- `{typography.label}`: Martian Mono 8.88889px, weight 400, line height 14.2222px, uppercase; nav labels and project captions.

Other sizes measured by characters: 22.2222px (310 characters), 13.3333px (92). Their weights and family assignments were not isolated, so they are not tokens. Weights by characters are 400 (438), 300 (362), 200 (197) and 900 (40). The h1 text is split so that every letter is its own element (the extractor read "B", "U", "I", "L", ... separately).

## Layout

A 1280px frame with a 31421px page. The layout probe recorded 4 visible header links on desktop and no menu toggle; the first band is one column with content from x 45 to 1262. The root `--global-padding` is 1.25rem, which measures 17.7778px, and the measured gaps are 17.7778px (24 uses), 8.88889px (14), 168.889px, 88.8889px and 71.1111px; paddings of 8.88889px (61 uses), 17.7778px, 26.6667px and 7.11111px. The spacing tokens are multiples of the 8.88889px step (`{spacing.s3}`).

The composition is poster-like: very large type lines are offset from one another, photographs sit at different widths and vertical positions in a loose two-column grid, and white space between them is generous. Text is small and quiet against the image scale. The extraction recorded at most 3 card columns on desktop and on mobile.

## Elevation & Depth

No shadow is measured: the only box-shadow value is a fully transparent inset 1px ring. Depth is graphic: black bars of increasing thickness, ink-splat shapes, dark image blocks cut into the type, and photography with dramatic lighting. The stylesheet corpus declares conventional shadows (`0px 1px 1px rgba(0,0,0,0.4)`, `0 4px 8px 0 rgba(0,0,0,0.2)` and others) that were not measured on a visible element.

## Shapes

Corners are small: 3.55556px (`{rounded.xs}`, 30 elements, equal to the root `--border-radius` 0.25rem), and a very large radius (1280px, 15 elements); the capture shows small circle bullets beside each nav label and project name, and small-radius image corners. Images are rectangular with the small radius; type blocks have no containers.

## Components

- Nav link (`{components.nav-link}`): Martian Mono 8.88889px uppercase in `{colors.ink}`, a small circle bullet on its left, a hairline rule under it (`{colors.hairline}`); "START A PROJECT" is the call to action and has no filled button.
- Wordmark: "CAPPEN" in heavy type at the top left.
- Hero lockup: a three-line staggered h1, an image block set between words, and a small justified intro paragraph at the top right.
- Work tile (`{components.work-tile}`): a photograph with a 3.56px radius, a bullet and a tiny grey project name beneath; tiles are offset to create a staggered grid.
- Statement block: giant HelveticaNowDisplay capitals followed by a centred PP Editorial New paragraph with italic emphasis.
- Bars: a stack of black horizontal bars that grows in thickness, used as a divider under the hero.
- Cookie notice, chat contact form and overlays are widgets and are not documented as brand UI.

## Design System Architecture

No public or official Cappen design system, brand guideline or press kit was found; https://cappen.com/ links only case studies, social profiles and its contact flow (Design Systems & Style Guides appears there as a service the studio offers, not as its own published guide). The de-facto system lives in the stylesheet: root variables for the monochrome set (`--light-gray` #fcfcfc, `--black` #000, `--light-black` #141414, `--outlines` #2b2b2b), `--global-padding` 1.25rem, `--border-radius` 0.25rem, and the color-swap duration and easing. Rem values resolve to fractional pixels at the measured 1280px width (the 0.25rem radius measures 3.55556px and the 1.25rem padding 17.7778px). The page-builder variables `--pagelayer-*` (Poppins, Open Sans, Roboto, Montserrat, #007bff) are present but not used on the measured text, which is set in HelveticaNowDisplay, PP Editorial New and Martian Mono.

## Do's and Don'ts

- Do keep the page to `{colors.canvas}` and `{colors.ink}` and let photography supply all color.
- Do set display type in HelveticaNowDisplay 900 uppercase with strongly negative tracking and a line height of 80%.
- Do use PP Editorial New 200 for statements and italicise single words for emphasis.
- Do use tiny Martian Mono capitals for navigation and captions.
- Don't fill buttons; the measured calls to action are text with a hairline.
- Don't add a brand accent color; the declared named colors were not measured on screen.
- Don't round images beyond 3.56px.
- Don't treat the cookie notice as the site's navigation or button style.

## Responsive Behavior

Measured at the 390px mobile pass. The h1 is `{typography.display-mobile}` (60.2899px, 900, line height 48.2319px, -2.41159px tracking, 352px wide, 145px high). The h2 is `{typography.heading-mobile}` (33.913px, weight 200, 352px wide). Mobile character-weighted sizes are 20.7246px (310 characters), 8.88889px (213), 33.913px (197), 9.42029px (150), 14.1304px (92), 60.2899px (23) and 113.043px (16). The layout probe recorded 0 visible header links on mobile against 4 on desktop, no menu toggle, and at most 3 card columns; the first mobile band has one column with content from x 18 to 377. How navigation is reached on mobile is not measured.

## Iteration Guide

1. Start from `{colors.canvas}` and `{colors.ink}`; no accent.
2. Set a three-line h1 in `{typography.display}` and place a dark image block between two words.
3. Add `{typography.label}` navigation with circle bullets and hairlines.
4. Build a staggered work grid with 3.56px-radius images and tiny captions.
5. Put statements in `{typography.heading}` with italic emphasis words.
6. Re-measure the dark closing section and the contact form for tokens before declaring them.
