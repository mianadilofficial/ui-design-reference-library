---
version: alpha
name: Trevor Noah
category: "Culture & Events"
description: "Trevor Noah official site: deep navy #1d2440 canvas, cream #f9fcf4 text and Get Tickets pill, pink #ff9bb4 accent, Die Grotesk C/D at 89.74px headlines, clip-path pill buttons and fluid clamp() type."
colors:
  canvas: "#1d2440"
  page-largest: "#2b2b2b"
  ink: "#f9fcf4"
  primary: "#f9fcf4"
  on-primary: "#1d2440"
  surface-muted: "#6f7ba9"
  accent-pink: "#ff9bb4"
  primary-hover: "#ff9bb4"
typography:
  button:
    fontFamily: "\"Die Grotesk C\", sans-serif"
    fontSize: 20.8919px
    fontWeight: 500
    lineHeight: 20.8919px
    textTransform: capitalize
  display-mobile:
    fontFamily: "\"Die Grotesk D\", sans-serif"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 44px
  display:
    fontFamily: "\"Die Grotesk D\", sans-serif"
    fontSize: 89.7418px
    fontWeight: 500
    lineHeight: 98.7159px
  heading:
    fontFamily: "\"Die Grotesk D\", sans-serif"
    fontSize: 57.3517px
    fontWeight: 700
    lineHeight: 60.2193px
    textTransform: capitalize
  body:
    fontFamily: "\"Die Grotesk C\", sans-serif"
    fontSize: 19.1568px
    fontWeight: 400
    lineHeight: 26.8196px
  nav:
    fontFamily: "\"Die Grotesk C\", sans-serif"
    fontSize: 28.7352px
    fontWeight: 500
    lineHeight: 40.2293px
rounded:
  xs: 14.33px
  sm: 28.74px
  md: 57.47px
  lg: 60px
  none: 0px
  pill: 9999px
spacing:
  s1: 9px
  s2: 10px
  s3: 11.97px
  s4: 12px
  s5: 15px
  s6: 19.16px
  s7: 21px
  s8: 22.99px
  s9: 27.35px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 32px
    height: 57px
    clipPath: inset(-20% round 104.46px)
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    clipPath: circle(150% at 50% 50%)
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.accent-pink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    textColor: "{colors.accent-pink}"
    rounded: "{rounded.none}"
  button-primary-hover:
    backgroundColor: "{colors.accent-pink}"
    textColor: "{colors.ink}"
---

## Overview

The measured page is `https://www.trevornoah.com/`, titled "Trevor Noah - Comedian, Author & Host | Official Site". It is a personality site built around one idea: a very large, hot-pink wordmark ("Trevor Noah") spanning the top of a deep navy page, with a cut-out portrait of the comedian that overlaps and hides part of the letters and carries a white scalloped sticker outline. A cream circular menu button ("=") and a cream "Get Tickets" pill sit at the top right. At the left edge a pink "Latest" pill and a tilted ticker ("… Comedy Special • Trevor …") sit above a tilted thumbnail with a folded corner, which reads like a sticker or a ticket stub.

The first statement is typographic: "Finding the extraordinary in the ordinary - often interesting, always interested", set in cream with "extraordinary" picked out in pink. A "Media" heading with "On The Screen" in pink below it opens a gallery of tilted and cropped photographs. The footer begins with "Trevor Noah" and lists "Born A Crime Book" with a date. The measured page is 10,002px tall with 361 visible elements. The page also shows a cookie dialog, which is not part of the brand UI and is not documented here.

## Colors

The page is navy and cream. `{colors.canvas}` is #1d2440 (declared as `--color--navy` and `--color-background`), `{colors.ink}` is cream #f9fcf4 (`--color--light`, 1,134 characters of text), and `{colors.primary}` repeats that cream: the primary button is a cream fill with navy `{colors.on-primary}` text. `{colors.accent-pink}` (#ff9bb4, 166 characters, `--color-accent`) is used for the wordmark, emphasised words, nav links and footer text; it is also the declared hover fill for buttons (`--button-hover-background`), recorded as `{colors.primary-hover}`. `{colors.surface-muted}` (#6f7ba9, `--color-surface-deep-muted`, 63 characters) is a dusty blue for secondary text.

`{colors.page-largest}` (#2b2b2b) is the largest painted area measured (4,058 units) and equals `--color-dark`; the visible page in the capture is navy. The root variables also declare `--color-surface-deep: #1a2037`, `--color-surface-deep-tint: #3e486f`, `--color-pill-bg: #46517b`, `--color-pill-stroke: #615e83`, `--color--para-on-navy: #dde3f9`, `--color-heart: #c6313e`, error `#f62d00` and success `#52d36a`; none of these appear on measured elements of the home page other than through the declared variables.

## Typography

The family is the Die Grotesk set: C for text and UI, D for headings and display, B for pills and meta (`--font-tertiary`, `--font-family-pill`). The statement headline (`{typography.display}`) is Die Grotesk D at 89.7418px, weight 500, on a 98.7159px line. Section titles such as "Media" (`{typography.heading}`) are Die Grotesk D at 57.3517px weight 700 on 60.2193px. Body copy (`{typography.body}`) is Die Grotesk C at 19.1568px on 26.8196px, navigation (`{typography.nav}`) is 28.7352px weight 500, and the buttons (`{typography.button}`) are Die Grotesk C 20.8919px weight 500, capitalised.

The root defines a fluid scale in `clamp()` form: `--font-size-h1: clamp(10.625rem, …, 28.125rem)` for the wordmark, `--font-size-h2: clamp(2.5rem, …, 7.875rem)`, `--font-size-body: clamp(1.125rem, …, 1.25rem)`, `--button-font-size: clamp(1.125rem, …, 1.4375rem)`, `--font-size-menu` up to 5rem, with weights `--font-weight-h1: 700`, `--font-weight-h2: 500` and `--font-weight-body: 400`. Leading trim is declared as `.035em` at the top and `.08em` at the bottom for each style. Measured weights are 400 (791 characters), 500 (424) and 700 (200).

## Layout

The layout is centred and typographic, with oversized headlines, wide empty areas and imagery placed at angles. Content is full-bleed with a container padding of `--container-padding: 4em` and section padding `--section-padding: calc(3.5em + (var(--gap)*2))`. Measured gaps are 27.3518px (42 uses) and 57.4705px (10); paddings are 43.1357px (8 uses), 22.9882px (5) and 153.255px (5), with buttons using 0px 32px.

Declared breakpoint widths are `--design-width-tablet: 991`, `--design-width-mobile-l: 480` and `--design-width-mobile-p: 390`. Layer order is declared as `--z-index-header: 100`, `--z-index-menu: 200` and `--z-index-modal: 302`.

## Elevation & Depth

Flat in the CSS sense: no box shadows and no border colours were measured. Depth is created compositionally, by overlapping the portrait over the wordmark, by the white sticker outline around the cut-out, and by tilted thumbnails with a folded corner. Colour steps between the navy canvas and slightly darker or lighter navy surfaces (`--color-surface-deep`, `--color-surface-deep-tint`) provide the only tonal separation.

## Shapes

Shapes are pills and generous rounds. The measured radii are 14.325px (5 elements), 57.4703px (3), 28.7352px (2), 50% (2) and 60px (1). The primary button reports a computed radius of 0px but is clipped by `clip-path: inset(-20% round 104.46px)`, which produces its pill shape; the root also defines `--button-radius` as half of a clamped 3.375rem to 3.75rem height. Declared radius steps are `--radius-sm: .25rem`, `--radius-md: .625rem`, `--radius-lg: 1.25rem`, and the focus ring uses `--focus-radius: 5em`.

## Components

**Primary button ("Get Tickets").** `{colors.ink}` cream fill, `{colors.on-primary}` navy label, Die Grotesk C 20.8919px weight 500 capitalised, padding 0px 32px, 57px tall, clipped to a pill. Declared variables: `--button-background: #f9fcf4`, `--button-color: #1d2440`, `--button-hover-background: #ff9bb4`, `--button-hover-color: #f9fcf4`.

**Menu button.** A round cream button with an "=" glyph next to the CTA.

**Link and nav.** Pink (`{colors.accent-pink}`) nav links at 28.7352px and pink footer text. The root declares the keyboard focus ring in the same pink (`--focus-color: #ff9bb4`, `--focus-width: 10px`, `--focus-offset: 5px`).

**Pill tag.** A pink "Latest" pill with dark text, tilted with its ticker; declared pill colours are `--color-pill-bg` and `--color-pill-stroke`.

**Statement.** Cream display text with a pink emphasis word, centred, with no container, border or background behind it; the large navy field around it is part of the composition.

**Footer.** Pink 22.9882px text on 36.7811px lines, 147px tall in the measurement.

## Design System Architecture

No public design-system page was opened. The shipped CSS exposes a full variable layer with two parallel naming schemes: plain names (`--color--navy`, `--color--light`, `--color-accent`, `--font-primary`, `--font-secondary`, `--gap`, `--spacing`) and a prefixed set `--_trevor-tokens---color-background`, `--_trevor-tokens---color-accent`, `--_trevor-tokens---color-text`, `--_trevor-tokens---color-surface`, `--_trevor-tokens---font-primary`. Colour roles are `--color-primary` (#1d2440), `--color-surface` (#f9fcf4), `--color-text` (#f9fcf4), `--color-muted` (#30385966) and `--color-border` (#f2f1ff).

Typography variables are per style (`--font-family-h1`, `--font-size-h2`, `--font-weight-menu`, `--font-size-pill`, `--font-size-marquee`), and a full easing library is declared (`--ease: cubic-bezier(.645,0,0,1)`, `--ease-out-expo`, `--ease-in-out-quart`, `--ease-bounce` and others). This is a coherent, designer-named system, though not published outside the site.

## Do's and Don'ts

- Do work on navy with cream text and pink for emphasis.
- Do set display text very large in Die Grotesk D with tight leading.
- Do shape buttons as pills with cream fill and navy label.
- Do overlap and tilt imagery for a sticker feel.
- Don't use shadows or hard borders.
- Don't use pink for large body paragraphs; it marks emphasis and navigation.
- Don't use the declared status colours (error, success, heart) as brand colours.
- Don't treat the cookie dialog's styling as part of the brand.

## Responsive Behavior

In the 390px mobile pass the statement headline is Die Grotesk D at 40px weight 500 on a 44px line (down from 89.7418px), body copy is Die Grotesk C at 18px on 25.2px, and the "Get Tickets" button is 18px weight 500, 43px tall, with 0px 32px padding. The most common mobile sizes are 18px (756 characters), 40px (255), 20px (185), 16px (178) and 15px (177). Declared breakpoints are 991px, 480px and 390px. Layout reflow of the portrait and gallery was not measured.

## Iteration Guide

1. Navy `{colors.canvas}`, cream `{colors.ink}`, pink `{colors.accent-pink}` for emphasis only.
2. Display in Die Grotesk D 500 at the fluid h2 size; body in Die Grotesk C 400.
3. Cream pill buttons, 57px tall, 32px side padding, pink hover.
4. Tilt and overlap images; avoid shadows.
5. Use the declared easing curves for motion; measure motion before specifying durations.
6. Keep status colours out of brand layouts.
