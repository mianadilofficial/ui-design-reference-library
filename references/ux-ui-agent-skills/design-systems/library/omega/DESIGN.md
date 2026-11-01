---
version: alpha
name: OMEGA
category: "Luxury"
description: "OMEGA homepage measured at www.omegawatches.com: a white canvas (#ffffff) with grey body text (#555555), omegact uppercase headings with 4.8px to 6.08px letter-spacing in a crimson (#c40d2e), square-cornered 0px buttons, and translucent white ghost buttons over full-bleed watch photography."

colors:
  canvas: "#ffffff"
  ink: "#555555"
  primary: "#c40d2e"
  on-primary: "#ffffff"
  surface-2: "#000000"
  surface-3: "#f9f9f9"
  hairline: "#e2e2e2"
  button-primary-bg: "#ffffff1a"
typography:
  display:
    fontFamily: omegact, arial, sans-serif
    fontSize: 30px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: 4.8px
    textTransform: uppercase
  display-mobile:
    fontFamily: omegact, arial, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.8px
    letterSpacing: 3.84px
    textTransform: uppercase
  heading:
    fontFamily: omegact, arial, sans-serif
    fontSize: 38px
    fontWeight: 400
    lineHeight: 45.6px
    letterSpacing: 6.08px
    textTransform: uppercase
  body:
    fontFamily: omegact, arial, sans-serif
    fontSize: 17px
    fontWeight: 400
    lineHeight: 25.5px
    letterSpacing: 0.64px
  button:
    fontFamily: omegact, arial, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 15.68px
    letterSpacing: 1.4px
    textTransform: uppercase
  nav:
    fontFamily: omegact, arial, sans-serif
    fontSize: 11px
    fontWeight: 700
    lineHeight: 16.5px
    letterSpacing: 0.88px
    textTransform: uppercase
  link:
    fontFamily: omegact, arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.64px
  button-secondary:
    fontFamily: omegact, arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 17.92px
    letterSpacing: 1.6px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 40px
    borderColor: "{colors.canvas}"
    boxShadow: rgb(255, 255, 255) 0px 0px 0px 0px inset
  button-primary-hover:
    textColor: "{colors.ink}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    padding: 0px 40px
    height: 50px
    borderColor: "{colors.hairline}"
    boxShadow: rgb(196, 13, 46) 0px 0px 0px 0px inset
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 10px 0px 0px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 8px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 49px
    borderColor: "{colors.hairline}"
---

## Overview

The OMEGA homepage pairs full-bleed product photography with a very airy white page. The capture begins with a hero in warm peach and rose tones that shows a two-tone steel and rose-gold Speedmaster chronograph with a brown bezel. Over it, a header in small white uppercase type carries "FIND A BOUTIQUE" and "CONTACT US" at the left, the Omega symbol and OMEGA wordmark centred, and heart and account icons at the right; a second row lists WATCHES, ACCESSORIES, GIFTS, SERVICES and WORLD OF OMEGA. The measurement tool read a hero line, "JAMES BOND X SPECTRE EDITION", as the page's h1 in white, with a translucent "DISCOVER" button, but that slide is not visible in the capture, which shows the Speedmaster slide instead.

Below the hero the page is white with large vertical gaps. A small grey tracked kicker, "SPEEDMASTER", precedes a two-column module: a square media area at the left and, at the right, a crimson two-line headline "ICONIC SINCE 1957", a grey paragraph and an outlined "EXPLORE" button. In the capture the media areas render as flat black rectangles because their content was not captured; they are not a design element. Next, a centred crimson headline "AQUA TERRA IN BLACK", a two-line grey description and a wide outlined button "DISCOVER THE COLLECTION". A product row follows with a studio shot of a steel watch and small text "SEAMASTER AQUA TERRA 150M", "41 mm, steel on steel" and a "Details" link.

The tone is calm and confident: short uppercase headings, restrained prose, and a lot of whitespace around imagery.

**Imagery and voice.** Product photography is lit, glossy and close: a chronograph filling the right half of a peach-toned hero, or a single steel watch on white with a tiny caption giving the model and case size ("41 mm, steel on steel"). Copy is brief and heritage-led: "Iconic since 1957", "Explore nearly seven decades of iconic Speedmaster models", "Presented in three sizes, this classic Seamaster collection is crafted with timeless black dials". Verbs on buttons are single actions in uppercase (EXPLORE, DISCOVER, DISCOVER THE COLLECTION), and the product listing uses a quiet underlined "Details" link. The navigation text sits over the photograph in white, so its legibility depends on the hero image being calm in that area; on a white page the same links would need the ink colour instead.

**Key Characteristics:**
- Two-colour typography: warm grey body text with crimson headings.
- Wide letter-spacing on uppercase headings (4.8px at 30px, 6.08px at 38px).
- Square corners throughout; the measurement found no border radii.
- Buttons are outlined or translucent ghost buttons, never heavily filled.
- Large centred headings alternate with left-right two-column modules.

## Colors

Values come from `web/data/extracted/omega.json`.

- **Canvas** (`{colors.canvas}`, #ffffff): the dominant background.
- **Ink** (`{colors.ink}`, #555555): body and description text; 2,284 of the measured characters.
- **Primary crimson** (`{colors.primary}`, #c40d2e): headings in the page's modules ("ICONIC SINCE 1957", "AQUA TERRA IN BLACK") and the colour of the button hover shadow; `{colors.on-primary}` (#ffffff) is the text colour on it.
- **Black** (`{colors.surface-2}`, #000000): the second most extensive background area, which in the capture is the unloaded media rectangles, so it should not be read as a deliberate black surface.
- **Pale grey** (`{colors.surface-3}`, #f9f9f9): subtle section background.
- **Hairline** (`{colors.hairline}`, #e2e2e2): borders on outlined buttons and inputs.
- **Ghost fill** (`{colors.button-primary-bg}`, #ffffff1a): the translucent fill of the "DISCOVER" hero button, with a white 1px border.

## Typography

One family is loaded: **omegact** in weights 400 and 700, plus an icon font; the fallback is arial and sans-serif. The h1 measured as 30px, weight 400, line-height 36px, letter-spacing 4.8px, uppercase (`{typography.display}`); 24px/28.8px/3.84px on a 390px viewport (`{typography.display-mobile}`). Module headings are 38px, line-height 45.6px, letter-spacing 6.08px (`{typography.heading}`). Body text is 17px, line-height 25.5px, letter-spacing 0.64px (`{typography.body}`). Buttons are bold and uppercase: 14px/700 with 1.4px tracking (`{typography.button}`) for the ghost button, and 16px/700 with 1.6px tracking for the wide secondary button (`{typography.button-secondary}`). Navigation is 11px bold uppercase with 0.88px tracking (`{typography.nav}`). Links in text are 16px (`{typography.link}`). The typeface is proprietary; a geometric sans with wide tracking is a suggested substitute, not a measurement.

## Layout

The page keeps its content in a centred column inside a wide viewport, with a CSS container padding of 1rem and a 64px header height variable. Modules alternate between centred headline blocks and two-column image and text layouts, with generous vertical whitespace between them. Measured spacing values are 1px, 2px, 4px, 8px, 10px, 12px, 14px, 15px, 16px and 20px (`{spacing.s1}` to `{spacing.s10}`). Button paddings are 0px 20px (ghost) and 0px 40px (secondary); the text input is 49px high.

## Elevation & Depth

Flat. The only shadow values measured are zero-offset inset shadows (white on the ghost button and crimson on the secondary one) that act as hover-fill hooks, not visible elevation. Depth is provided by the photography, which is lit studio work on soft gradients.

## Shapes

All corners are square (`{rounded.none}`, 0px). Buttons are thin-bordered rectangles; the secondary buttons carry a `{colors.hairline}` border, and inputs use the same border. No border radii were measured on the page. Keeping every container square is what gives the page its precise, instrument-like character.

## Components

- **Button primary (ghost)**: `{colors.button-primary-bg}` fill, white text and a 1px white border, omegact 14px/700 uppercase with 1.4px tracking, padding 0px 20px, height 40px, square. On hover the text turns to `{colors.ink}`.
- **Button secondary**: `{colors.canvas}` fill, `{colors.ink}` text, omegact 16px/700 uppercase, 1px `{colors.hairline}` border, padding 0px 40px, height 50px.
- **Navigation link**: white, 11px bold uppercase with 0.88px tracking, padding 8px, over the hero.
- **Text input**: white, `{colors.ink}` text at 16px, border `{colors.hairline}`, 0px 20px padding, height 49px.
- **Text link**: `{colors.ink}` at 16px with 0.64px tracking.

## Design System Architecture

No public OMEGA design-system documentation was opened; the web-search budget ran out before any official source could be read, so none is cited. The shipped CSS shows a de-facto system: custom properties such as `--header-height` (64px), `--container-padding` (1rem), `--font-family-bold` (omegact, arial, sans-serif), emoji font variables and Tailwind utility variables (`--tw-*`), plus a phone-input library's variables (`--iti-border-color` #e2e2e2, which equals the hairline). Fonts are web fonts (omegact in two weights, an icon font). Type, tracking and uppercase rules are applied consistently.

## Do's and Don'ts

**Do**
- Use crimson only for headings and accents, grey for running text.
- Set headings uppercase with wide tracking.
- Use outlined or ghost buttons with square corners.
- Leave generous whitespace around imagery.

**Don't**
- Don't fill buttons with solid red; the measured buttons are outlined or translucent.
- Don't round corners.
- Don't mistake the black media placeholders in the capture for brand surfaces.
- Don't tighten letter-spacing on headings.

## Responsive Behavior

The 390px measurement lowers the h1 from 30px to 24px (line-height 36px to 28.8px, tracking 4.8px to 3.84px). Nothing else was measured for phones, so column and navigation behaviour is not described.

## Iteration Guide

Work from measured values only and record any new measurement before adding a token.

1. Start from `{colors.canvas}` with `{colors.ink}` text.
2. Headings: omegact uppercase, crimson, 30 to 38px with 4.8 to 6.08px tracking.
3. Buttons: square, uppercase, bold; ghost on photography and hairline-outlined on white.
4. Lay modules out as centred heading blocks or two columns with large gaps.
5. Run `node web/scripts/verify-designs.mjs --slug=omega` after edits.
