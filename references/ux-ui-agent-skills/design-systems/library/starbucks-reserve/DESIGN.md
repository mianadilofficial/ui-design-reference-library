---
version: alpha
name: Starbucks Reserve
category: "Food & Beverage"
description: "Starbucks Reserve's site starbucksreserve.com measured live — a white #ffffff gallery page with black #000000 type, a single copper-gold accent #976d3f for hovers and highlights, a warm near-black #231f20 footer, widely tracked uppercase Trade Gothic Bold Condensed headlines (102.4px hero, +12.5px tracking) over Avenir LT Std body copy at 14px with a 33.6px line height, and square photo collages."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#976d3f"
  on-primary: "#ffffff"
  surface-dark: "#231f20"
  ink-soft: "#000000de"
  border-grey: "#c6c4c3"
  grey-2: "#6b6863"
  off-white: "#f8f6f2"
  gold-bright: "#edc864"
typography:
  display:
    fontFamily: "\"Trade Gothic Bold Condensed\", \"Trade Gothic Bold Condensed Fallback\", sans-serif"
    fontSize: 102.4px
    fontWeight: 400
    lineHeight: 122.88px
    letterSpacing: 12.5015px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Trade Gothic Bold Condensed\", \"Trade Gothic Bold Condensed Fallback\", sans-serif"
    fontSize: 45.7666px
    fontWeight: 400
    lineHeight: 54.9199px
    letterSpacing: 11.9191px
    textTransform: uppercase
  heading:
    fontFamily: "\"Trade Gothic Bold Condensed\", \"Trade Gothic Bold Condensed Fallback\", sans-serif"
    fontSize: 28.0017px
    fontWeight: 400
    lineHeight: 33.602px
    letterSpacing: 7.00042px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Trade Gothic Bold Condensed\", \"Trade Gothic Bold Condensed Fallback\", sans-serif"
    fontSize: 24.0014px
    fontWeight: 400
    lineHeight: 28.8017px
    letterSpacing: 6.00036px
    textTransform: uppercase
  body:
    fontFamily: "\"Avenir LT Std\", \"Avenir LT Std Fallback\", sans-serif"
    fontSize: 14.0008px
    fontWeight: 500
    lineHeight: 33.602px
  nav:
    fontFamily: "\"Trade Gothic Condensed\", sans-serif"
    fontSize: 12.0007px
    fontWeight: 500
    lineHeight: 18.0011px
    letterSpacing: 4.00024px
    textTransform: uppercase
  link:
    fontFamily: "\"Trade Gothic Bold Condensed\", \"Trade Gothic Bold Condensed Fallback\", sans-serif"
    fontSize: 20.0012px
    fontWeight: 500
    lineHeight: 30.0018px
    letterSpacing: 2.00012px
    textTransform: uppercase
  footer:
    fontFamily: "\"Trade Gothic Bold Condensed\", \"Trade Gothic Bold Condensed Fallback\", sans-serif"
    fontSize: 16.001px
    fontWeight: 500
    lineHeight: 24.0014px
    letterSpacing: 2.00012px
    textTransform: uppercase
rounded:
  xs: 2px
  pill: 9999px
spacing:
  s1: 3.2px
  s2: 4px
  s3: 5px
  s4: 7px
  s5: 8px
  s6: 12px
  s8: 16px
  s10: 24px
  s11: 32px
  s12: 64px
components:
  city-link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  city-link-hover:
    textColor: "{colors.primary}"
  cta-line-link:
    textColor: "{colors.ink}"
  cta-line-link-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    height: 71px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-primary}"
    typography: "{typography.footer}"
    padding: 0px 63.25px
---

## Overview

This is `https://www.starbucksreserve.com/`, the site for Starbucks Reserve — Starbucks' premium line of rare coffees, Roasteries and Reserve experiences — measured live on 2026-10-17 at 1280px (6,140px tall) and in a mobile pass. It reads like a printed coffee-table book: a vast white page, tall condensed uppercase headlines with very wide tracking, small airy body copy, and collages of square-cornered photographs that overlap a thin vertical centre rule.

From the top: a minimal 71px white header with the Reserve star-and-R mark (an SVG, 39 × 48px) on the left and an "Open navigation" toggle on the right. The hero sets "THIS IS STARBUCKS RESERVE" at 102.4px — "THIS IS" in gold, the rest in black — beside a large star-over-R monogram and a photograph of a cocktail, with a "DISCOVER EXQUISITE COFFEE" subhead and a row of Roastery cities (Chicago | New York | Shanghai | Tokyo | Milano) divided by thin vertical rules.

The page then zig-zags three editorial modules along the centre rule — "Exquisite Coffees. Immersive Experiences.", "Starbucks Reserve Experiences" and "Explore Our Coffee" — each pairing a three- or four-photo collage (bars, Chemex pours, siphon brewers, baristas) with a tracked title, a short paragraph and a hairline link ("EXPLORE OUR LOCATIONS", "BOOK AN EXPERIENCE"). A coffee-bean roundel ends the rule. Below, rotated side labels introduce "Select Coffees" (three bag artworks in outlined frames — Colombia Santander, El Salvador Montecarlos Estate Gesha, Whiskey Barrel-Aged Guatemala), "Roasteries" (five circular city photos with gold city names) and "Related Stories" (three cards with a serif italic eyebrow). A #231f20 footer closes it.

The measured capture also shows a cookie notice ("This site uses cookies, but not the kind you eat") in the header area. It is consent UI, not brand UI: its green #008248 button and link, its 8px-radius card and its 50px-radius "Agree" pill are excluded from the tokens.

## Colors

- **canvas #ffffff** — the page; 73% of the capture (`--background-color: #fff`).
- **ink #000000** — the most-read text (1,288 characters); headlines, body, nav (`--text-color: #000`, `--link-color: #000`).
- **primary #976d3f** — the copper-gold accent, published as `--accent-color` and `--link-hover-color`. It colours "THIS IS" in the hero and the Roastery city names (38 characters), and it is the measured hover: city links turn #976d3f, and the "EXPLORE OUR LOCATIONS" link fills #976d3f with white text.
- **on-primary #ffffff** — text on the gold hover fill and in the footer (`--footer-text: #fff`).
- **surface-dark #231f20** — the warm near-black footer, the largest painted area by the extractor's weight (513); also `--footer-bg`, `--grey-0` and `--dark-color`.
- **ink-soft #000000de** — 87% black body text (181 characters).
- **border-grey #c6c4c3** — the centre rule, frame outlines and small rotated labels (`--border-color`, `--grey-3`; 104 characters of text).
- **grey-2 #6b6863**, **off-white #f8f6f2**, **gold-bright #edc864** — declared in the site's root variables (`--grey-2`, `--color-off-white`, `--color-gold-bright`); not measured as painted areas on the home page. The variables also declare `--color-gold-muted: #B6A17C`, `--color-surface-dark: #3E3837` and `--color-border-dark: #5a504d`.

## Typography

Four families, each with a clear job (all loaded as webfonts from `/fonts/`):

- **Trade Gothic Bold Condensed** (`--heading-font-family`) — every headline, the city links and the footer, always uppercase with very wide tracking. Measured: **display** 102.4px / 122.88px with +12.5015px tracking (the h1); **heading** 28.0017px / 33.602px, +7.00042px (h2); **subheading** 24.0014px / 28.8017px, +6.00036px (h3 and coffee names); **link** 20.0012px / 30.0018px, +2.00012px (Roastery cities); **footer** 16.001px / 24.0014px, +2.00012px. Headlines are weight 400 (the face is bold by design).
- **Trade Gothic Condensed** (`--cta-font-family`) — navigation and hairline CTAs: **nav** 12.0007px / 18.0011px, +4.00024px, uppercase.
- **Avenir LT Std** Medium (`--body-font-family`) — body copy: **body** 14.0008px / 33.602px at weight 500, an unusually open 2.4 line height (`--line-height-body-relaxed: 2.4`). It is the most-read family (747 characters).
- **Sentinel** italic (`--accent-font-family: sentinel, 'Sentinel Fallback', georgia, serif`) — small serif eyebrows such as "Starbucks Reserve Coffee" above story titles (80 characters).

SodoSans_Normal was also measured on 222 characters; the element it styles was not identified in the extraction. The odd fractional sizes (14.0008px, 28.0017px) come from rem values on a scaled root. All four are licensed webfonts here; open substitutes are a condensed grotesk such as Oswald for Trade Gothic Condensed, Nunito Sans for Avenir, and a transitional serif italic for Sentinel.

## Layout

The desktop page is one long white band (5,735px) above a 405px footer. A thin vertical rule runs down the centre; editorial modules alternate sides of it — collage left/text right, then text left/collage right — with photos overlapping each other in staggered stacks. Lower sections use a 64rem default container (`--container-default`) with three coffee frames, five round Roastery photos and three story cards in a row, each section introduced by a vertical rotated label at the far left.

Spacing is declared as variables: `--spacing-6` to `--spacing-64` (6, 8, 12, 16, 20, 22, 24, 32, 48, 64px), `--grid-gap: var(--spacing-32)`, `--section-padding: 3rem 0`, `--section-padding-large: 4rem 0`, `--gutter: 5%`. Measured gaps are mostly 16px, 32px and 12px, with 64px between larger blocks; measured paddings include 64px, 8px, 27px and 80px.

## Elevation & Depth

The brand page is flat: photographs and outlined frames sit directly on white, with no shadows. The only shadow in the extraction — a three-layer `rgba(0, 0, 0, 0.1) 0px 11px 15px 0px, …` — belongs to the cookie notice and is not a brand token. Depth comes from overlapping photographs in the collages and from the warm near-black footer.

## Shapes

Square by default: photographs, coffee frames and story cards have no rounding. The exceptions are circles — the five Roastery photos and the coffee-bean roundel (measured 50% radius on five elements) — and a 2px radius on three small elements. The 8px and 50px radii in the extraction belong to the cookie notice and its "Agree" button and are excluded. Thin #c6c4c3 hairlines (the centre rule, CTA underlines, city dividers) are the main graphic device.

## Components

- **City link** — Trade Gothic Bold Condensed 20px, +2px tracking, uppercase, black, separated by thin vertical rules; hover turns the text #976d3f (measured).
- **Hairline CTA** — "EXPLORE OUR LOCATIONS", "BOOK AN EXPERIENCE", "EXPLORE", "FIND A LOCATION", "SEE ALL STORIES": small tracked uppercase text set beside a long thin line or arrow; hover fills the link #976d3f with white text (measured on "EXPLORE OUR LOCATIONS").
- **Header** — white, 71px, logo mark left, "Open navigation" toggle right, no visible link row (two header links counted).
- **Coffee frame** — bag artwork centred inside a thin square outline, with the coffee name in 24px tracked uppercase below.
- **Roastery roundel** — circular photo with the city name in gold beneath.
- **Story card** — square image, Sentinel italic eyebrow, tracked uppercase title.
- **Footer** — #231f20, "STARBUCKS RESERVE" wordmark left, "Find a location" and "Instagram" with icons right, a row of uppercase legal links and "© 2026 Starbucks Corporation".

## Design System Architecture

No public design system or brand guideline for Starbucks Reserve was linked from the pages opened (the home page and its footer). The site's shipped CSS shows a compact, hand-rolled variable system on `:root`: role-named colours (`--text-color`, `--link-color`, `--link-hover-color`, `--accent-color`, `--footer-bg`, `--border-color`), a grey ramp (`--grey-0` #231f20 … `--grey-4` #f4f4f4), named golds (`--color-gold-bright`, `--color-gold-muted`), four font-family roles (`--heading-`, `--cta-`, `--body-`, `--accent-font-family`), heading sizes xs–xxl (0.875rem–2.5rem), body sizes xs–l, letter-spacing steps (`--letter-spacing-tight` 0.1875rem, `-sm` 0.25rem, `-md` 0.4375rem), spacing steps and container widths (`--container-hero` 48rem, `--container-default` 64rem, `--container-xlarge` 120rem). Every font face declares a metric-matched "Fallback" face to limit layout shift. Media queries are few: 420px and 421–856px.

## Do's and Don'ts

**Do**
- Keep the page white and quiet; let black condensed headlines and photography do the work.
- Track headlines very wide (around a quarter of the font size: 7px on 28px, 6px on 24px) and set them uppercase.
- Use #976d3f gold sparingly — highlighted words, city names, hover states.
- Give body copy a 2.4 line height at 14px in Avenir Medium.
- Use hairlines and square frames as ornament; circles only for place photography.

**Don't**
- Don't use Starbucks green #008248; on this site it appears only in the cookie notice.
- Don't add drop shadows or rounded cards.
- Don't set headlines in sentence case or bold sans; the brand voice is tracked condensed capitals.
- Don't fill buttons at rest; the only measured fill is the gold hover.
- Don't crowd the collages; modules are separated by hundreds of pixels of white.

## Responsive Behavior

From the mobile pass (content between x=19 and x=356):

- The h1 drops from 102.4px / 122.88px (+12.5015px) to 45.7666px / 54.9199px (+11.9191px).
- The h2 changes from 28.0017px / 33.602px (+7.00042px) to 30.511px / 36.6132px (+6.67429px) — slightly larger on mobile.
- Body copy goes from 14.0008px / 33.602px to 13.3486px / 32.0366px.
- The header is 68px (71px on desktop) and the "Open navigation" toggle is visible on both.
- The page is a single white band 9,631px long on mobile with one column; the footer media band is 542px.

The CSS declares media queries at 420px and 421–856px. Hover on touch devices was not measured.

## Iteration Guide

1. Start with a white canvas, a 71px header with only the mark and a menu toggle, and a centred vertical hairline.
2. Set the hero headline in `display`; highlight one or two words in `primary` gold.
3. Alternate collage and text modules along the rule; titles in `heading`, copy in `body`, a hairline CTA under each.
4. Use `subheading` for product names and `link` for place names; gold on hover.
5. End with the `surface-dark` footer in `footer` type.
6. Before adding values, check the site's `--*` variables in `web/data/extracted/starbucks-reserve.json`; ignore anything from the cookie notice.
