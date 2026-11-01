---
version: alpha
name: FUNCTION
category: "Culture & Events"
description: "FUNCTION (function10.ca) is a Ballroom culture platform for stories, audio, events and portraits, set entirely in TWK Everett 400 uppercase with negative tracking (71.1168px hero, 22px headings, 12px body), black #000000 ink on a white #ffffff canvas, full-bleed event photography, and lilac #9389c5 and cyan #24ceea portrait cards with 2px corners."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  ink-soft: "#111111"
  surface-lilac: "#9389c5"
  surface-cyan: "#24ceea"
typography:
  display:
    fontFamily: TWKEverett, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 71.1168px
    fontWeight: 400
    lineHeight: 71.1168px
    letterSpacing: "-1.42234px"
    textTransform: uppercase
  display-mobile:
    fontFamily: TWKEverett, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 34px
    fontWeight: 400
    lineHeight: 34px
    letterSpacing: "-0.68px"
    textTransform: uppercase
  heading:
    fontFamily: TWKEverett, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 24.2px
    letterSpacing: "-0.44px"
    textTransform: uppercase
  body:
    fontFamily: TWKEverett, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.8px
    letterSpacing: "-0.24px"
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 4px
  pill: 9999px
spacing:
  s1: 8px
  s2: 10px
  s3: 12px
  s4: 16px
  s5: 19.2px
  s6: 22px
  s7: 28.44px
  s8: 36px
  s9: 49.78px
  s10: 64px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    padding: 12px 36px
    height: 50px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 19.2px 0px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 0px 16px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.surface-lilac}"
    textColor: "{colors.ink-soft}"
    rounded: "{rounded.xs}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

FUNCTION at function10.ca presents itself as "a platform for Ballroom culture, stories, and events", and the home page measured at 1280px wide (7622px scroll height) behaves like a magazine feed rather than a marketing site. A full-bleed, motion-blurred photograph of a dancer opens the page with the mission line in white 71.1168px uppercase type laid directly over the image; below it the page drops to a white `{colors.canvas}` field on which event, portrait and article cards are staggered in an asymmetric two-column rhythm, and further down it returns to full-bleed photography with centred text. The only typeface measured is TWKEverett at weight 400, in uppercase, on every element: the whole identity is carried by one grotesque, tight negative tracking, and photography.

The voice, from the pages opened, is warm, direct and community-focused: short calls such as "Scroll", "Browse the feed" and "Share", and an affirming mission statement about uplifting BIPOC and 2SLGBTQIA+ voices and highlighting local and international Ballroom talent. The header navigation lists Feed, Audio, Events, Portraits and Articles plus a "Switch to Voices" link that points to a sister site. Nothing is decorative beyond the photographs, a small ornamental glyph mark under the hero, and flat colour tiles.

## Colors

The palette is almost monochrome. `{colors.canvas}` (#ffffff) is the page field and the header background; `{colors.ink}` (#000000) is the dominant text colour on white and is also the extractor's primary, because the site has no filled call-to-action. White text weighs most by character count (461) because the hero and the photographic bands carry white type; black follows (424) and `{colors.ink-soft}` (#111111, also published as the root variable `--color-soft-black` and `--color-bg`) is used for text on the coloured cards (48).

Two flat tints appear as card backgrounds measured by area: `{colors.surface-lilac}` (#9389c5) for the portrait card "Icon Kevin JZ Prodigy" and `{colors.surface-cyan}` (#24ceea) for "Icon Ricky Allure". A root variable `--color-coral` (#ffe1e1) is declared in the shipped CSS; it was not measured on a rendered element in the capture, so it is not tokenised. Cookie-consent variables (`--cc-*`, such as #eaeff2 and #5e6266) belong to the third-party consent dialog and are not brand colours. Borders measured are #000000 and #ffffff, 1px rules above feed items.

## Typography

One family: TWKEverett, with the fallback stack -apple-system, system-ui, avenir next, avenir, segoe ui, helvetica neue, helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif. Loaded fonts also include PPMonument at 900 and Ayer at 500 italic, but TWKEverett covers 933 of the measured characters, all at weight 400. TWK Everett is a commercial typeface; where it cannot be licensed, a neutral grotesque such as Helvetica Neue or Arial at the same sizes and tracking is the closest substitute in the declared fallback stack.

The scale, by characters: 12px (396, body and metadata, line-height 16.8px, tracking -0.24px), 22px (139, headings and the secondary link button, line-height 24.2px, tracking -0.44px), 10px (129, card eyebrows), 38.4px (128, tracking -0.768px), 16px (68, footer, no transform), 71.1168px (54, the hero, line-height equal to the font size, tracking -1.42234px) and 128px (19, tracking -2.56px). Tracking is consistently -0.02em of the size. Everything except the footer is uppercase. Root variables show fluid sizing: `--font-size-h1` is clamp(46px, ..., 120px), `--font-size-h2` clamp(34px, ..., 80px), `--font-size-h3` clamp(22px, ..., 42px) and `--font-size-body-lg` 22px.

## Layout

The header is 60px tall (`--header-height`), white, with 0px 16px padding, a left cluster of five lowercase-free uppercase links and a right-hand "Switch to Voices" control. Content sits in a grid driven by `--grid-margin` and `--container-margin`. Measured gaps are 16px (most common), 8px, 28.4444px, 64px, 90px and 22px; paddings include 16px, 28.4444px, 49.7778px and 92.3906px. The feed alternates card widths: a square 405px portrait tile beside a tall event card with a headline right-aligned above its image, then narrower cards below, producing a deliberately uneven masonry. The footer is 1029px tall, 16px type with normal case.

## Elevation & Depth

No box shadows were measured. Depth comes from photography, full-bleed image bands with text on top, and from hairline rules (1px, #000000) that start each feed item along with a small square or round marker. There are no overlays other than the third-party cookie consent dialog, which was hidden for the capture and is not documented as brand UI.

## Shapes

Corners are nearly square. Measured radii: 2px (12 elements, the cards), 4px (2) and 50% (2, the round markers). A 9999px pill value is present in the generated tokens for markers and toggles. The secondary link button "Browse the feed" has a 0px radius, a 1px border, 12px 36px padding and a 50px height; it is an outlined, white-on-photograph control rather than a filled button.

## Components

- Header nav: white, 60px, uppercase 12px links, Feed / Audio / Events / Portraits / Articles.
- Hero: white 71.1168px uppercase statement over a full-bleed photograph, a small ornamental glyph and a 12px centred paragraph, with "Scroll" bottom right.
- Feed card: a 10px eyebrow (type and date, e.g. "Event Dec 07, 2024"), a rule, a 22px-plus headline, then a photograph.
- Portrait card: flat `{colors.surface-lilac}` or `{colors.surface-cyan}` tile, 2px radius, 10px "UH UH" eyebrow, framed artwork and a 22px name in `{colors.ink-soft}`.
- Outlined button: "Browse the feed", 22px, 12px 36px padding, 50px high.
- Footer: privacy policies, manage cookies, a contact email and an Instagram link.

## Design System Architecture

No public design system, brand guideline or press page was found: the home page links only to its feed sections, privacy policy, cookie manager, email and Instagram. The de-facto system is visible in shipped CSS naming: BEM-like classes such as `c-footer_main` and `o-container`, and root variables for spacing (`--spacing-3xl-mobile`), type (`--font-size-h1`, `--font-size-h2-ext`, `--font-size-h2-serif`, `--font-size-body-lg`) and colour (`--color-bg`, `--color-soft-black`, `--color-coral`, `--color-theme-secondary`). Theme switching is expressed via `--color-theme-secondary` referencing `--color-bg`.

## Content and Imagery

Imagery is documentary event and portrait photography: club scenes with motion blur, runway costume looks in metallic fabrics, a lecture-room audience and studio portraits, all in saturated colour and cropped tightly. The 3D chrome-black ornament framing the lilac portrait card is the only illustrative element besides the small glyph under the hero. Card metadata is terse: a category (Event, Portrait, Article), a date such as "Dec 07, 2024" or "June 22, 2024", and a venue or topic tag at the right ("History", "Cafeteria"). Headlines are short proper nouns or event names ("World AIDS Day Ball: Museum", "Mayhem Release Party"), which suits the uppercase setting.

## Do's and Don'ts

- Do set every label, headline and paragraph in TWKEverett 400 uppercase with about -0.02em tracking.
- Do let photography fill the width and set white type directly on it.
- Do use `{colors.surface-lilac}` and `{colors.surface-cyan}` as flat portrait tiles with 2px corners.
- Do keep the feed rhythm uneven and left/right aligned headlines.
- Don't add shadows, gradients or rounded filled buttons; none were measured.
- Don't use a bold weight; only 400 was measured for the primary face.
- Don't tokenise cookie-dialog colours as brand colours.

## Responsive Behavior

Measured at 390px: the hero drops to 34px with 34px line-height and -0.68px tracking, headings to 18px (line-height 19.8px, tracking -0.36px), body to 10px (14px line-height, tracking -0.2px), and the header keeps 60px height with 0px 20px padding in 16px type. Other mobile sizes recorded by characters: 10px, 22px, 34px, 16px, 18px and 39px. Breakpoints, touch-target sizes and layout collapse rules were not measured.

## Iteration Guide

1. Start with white canvas, black text and TWKEverett uppercase; add a photographic hero before anything else.
2. Use the five scale steps measured (12, 22, 38.4, 71.1168, 128px) with tracking of -0.02em.
3. Introduce colour only as flat card tiles (#9389c5, #24ceea) with 2px radius.
4. Keep controls outlined with 12px 36px padding and no fill.
5. Before adding anything else, check it against the measured data: shadows, bold weights and dark-mode behaviour were not measured.
