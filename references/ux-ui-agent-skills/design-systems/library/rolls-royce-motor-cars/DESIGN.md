---
version: alpha
name: Rolls-Royce Motor Cars
category: "Luxury"
description: "Rolls-Royce Motor Cars home page measured at rolls-roycemotorcars.com: a black canvas (#000000) of full-bleed car video, white uppercase Riviera Nights display type at 70px/300 with 2.5px tracking, and a white pill button (#ffffff fill, #151515 text, 30px radius) labelled DISCOVER MORE."

colors:
  canvas: "#000000"
  page-largest: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#151515"
  surface-charcoal: "#151515"
typography:
  display:
    fontFamily: "\"Riviera Nights\", Helvetica, Arial, -apple-system, sans-serif"
    fontSize: 70px
    fontWeight: 300
    lineHeight: 80px
    letterSpacing: 2.5px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Riviera Nights\", Helvetica, Arial, -apple-system, sans-serif"
    fontSize: 40px
    fontWeight: 300
    lineHeight: 46px
    letterSpacing: 2px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Riviera Nights\", Helvetica, Arial, -apple-system, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: 2.5px
    textTransform: uppercase
  body:
    fontFamily: "\"Riviera Nights\", Helvetica, Arial, -apple-system, sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 22px
    letterSpacing: 0.8px
  button:
    fontFamily: "\"Riviera Nights\", Helvetica, Arial, -apple-system, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 2px
    textTransform: uppercase
rounded:
  xs: 30px
  sm: 99px
  pill: 9999px
spacing:
  s1: 12px
  s2: 16px
  s3: 24px
  s4: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 46px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 46px
---

## Overview

The Rolls-Royce Motor Cars home page (final URL www.rolls-roycemotorcars.com/en_GB/home.html) is a cinematic, near-black page where full-bleed video and photography of the cars replace conventional layout. The capture shows three stacked, full-width image or video panels, each roughly one viewport tall. The first is an interior shot of a Black Badge Cullinan whose roof lining and door panel are covered in brightly coloured hand-drawn artwork, with a small kicker "AN INSPIRING GREATNESS SERIES", the large white title "BLACK BADGE CULLINAN", a credit line "BY CYRIL KONGO", and a white pill button "DISCOVER MORE". The second panel shows the side of a dark car with a cyan pin-stripe, a blue-lit dash and a wheel with a blue brake caliper; the third shows a wheel with the badge cap in motion on a road.

The header is minimal: a hamburger icon and "MENU" at the left, the interlocked RR monogram centred, and a search icon with "FIND A DEALER" at the right, separated from the hero by a thin horizontal rule. A small column of dots at the left edge indicates slide position. There are no product grids, price tags, or running copy in the capture; the page is almost entirely type over imagery.

The canvas and ink here are chosen to match what the capture shows: the largest measured background is #000000 (`{colors.canvas}`) and the most-read text color is #ffffff (`{colors.ink}`). The measurement tool's generated white canvas is retained only as the button fill.

**Imagery and voice.** The copy is spare and declarative: a series name, a model name, an artist credit and a two-word call to action. Nothing is explained in running text on the captured area; the cars and their craftsmanship are shown, not described. The first panel pairs a hand-painted, graffiti-like interior with a restrained, centred white title, so the contrast between loud artwork and quiet interface type is the page's main tension. The following panels crop tightly on body panels, a dashboard glow and a wheel, favouring detail over a whole-car view. Because every panel is full-bleed, the interface must stay light: thin white icons, a hairline rule and one pill. Legibility of white type over moving video depends on the footage being dark in the title area, so a title should be placed where the picture is darkest, and a button should never sit on a bright area of the frame.

**Key Characteristics:**
- Black canvas with white type; imagery supplies all the color.
- A single typeface family, Riviera Nights, in uppercase with wide tracking at every size.
- Light display weight (300) at 70px for titles and heavier 500 for button labels.
- White pill buttons with dark text are the only filled controls.
- Hamburger menu, monogram and dealer search rather than a visible navigation bar.

## Colors

Values come from `web/data/extracted/rolls-royce-motor-cars.json`.

- **Canvas** (`{colors.canvas}`, #000000): largest background by area, matching the video panels' dark surround.
- **Ink** (`{colors.ink}`, #ffffff): 530 of roughly 570 measured characters are this white.
- **Primary** (`{colors.primary}`, #ffffff): fill of the measured "DISCOVER MORE" pill, with `{colors.on-primary}` (#151515) as its label.
- **Charcoal** (`{colors.surface-charcoal}`, #151515): a second dark background measured on a smaller area.

No other brand hues are measured. The cyan and orange seen in the capture belong to the photographed cars, not to the interface, and no value is recorded for them.

## Typography

One family, **Riviera Nights**, is loaded in weights 300, 400, 500 and 900. Hero titles are 70px, weight 300, line-height 80px, letter-spacing 2.5px, uppercase (`{typography.display}`); on a 390px viewport the title is 40px/46px with 2px tracking (`{typography.display-mobile}`). Sub-headings are 20px, weight 400, line-height 30px, 2.5px tracking, uppercase (`{typography.subheading}`). Running text is 14px, weight 300, line-height 22px, 0.8px tracking (`{typography.body}`). Buttons are 12px, weight 500, line-height 24px, 2px tracking, uppercase (`{typography.button}`). Fallbacks declared are Helvetica, Arial, -apple-system and sans-serif. The face is light and wide-tracked; if unavailable, a light geometric sans with generous letter-spacing is the nearest approach, though that is a suggestion rather than a measurement.

## Layout

The page is a vertical stack of full-bleed panels, each approximately a viewport tall in the capture, with centred type in the first panel. The header is a three-part bar (menu, monogram, dealer search). Measured spacing values are 12px, 16px, 24px and 64px (`{spacing.s1}` to `{spacing.s4}`); the button's horizontal padding is 16px and its height 46px. There is no multi-column grid in the measured area.

## Elevation & Depth

No box shadows were measured. Depth is photographic: glossy black paint, reflections, and lit interiors against a black page. The only graphic separation is a thin white hairline under the header (the measured border color is #ffffff). The button reads as a bright shape on a dark image, not as a raised object.

## Shapes

Radii measured on the page are 30px (the primary pill, four elements), 99px (three elements) and 50% (one circular element). In tokens: `{rounded.xs}` 30px, `{rounded.sm}` 99px and `{rounded.pill}` 9999px. The primary and secondary buttons use `{rounded.xs}`. The monogram and icons are thin white line marks.

## Components

- **Button primary**: `{colors.primary}` fill, `{colors.on-primary}` text, Riviera Nights 12px/500 uppercase with 2px tracking, 30px radius, 0px 16px padding, 46px high, 276px wide in the hero. Labels measured: DISCOVER MORE, DISCOVER NOW.
- **Button secondary**: same geometry and colors as measured on the page.
- **Header**: transparent over the video; white text and icons; menu, monogram, dealer search.
- **Kicker and credit lines**: small uppercase white text above and below the title.
- **Slide indicator**: a vertical column of small dots at the left edge.

## Design System Architecture

No public Rolls-Royce Motor Cars design-system documentation was opened for this entry; web search budget ran out before any official source could be read, so none is cited. The only evidence is the shipped page: one loaded font family in four weights, a very small colour set (black, charcoal, white), and a consistent uppercase-with-tracking rule for titles, sub-headings and buttons. That is the de-facto system: a type-and-imagery system where the photography is the visual content and the interface adds only white type and white pills.

## Do's and Don'ts

**Do**
- Set titles in uppercase Riviera Nights, light weight, with wide tracking.
- Keep the interface black and white and let the imagery carry colour.
- Use a single white pill for the primary action in each panel.
- Keep the header minimal: menu, monogram, dealer search.

**Don't**
- Don't introduce an accent colour into the UI; none was measured.
- Don't add shadows or borders to the buttons.
- Don't set body copy in a heavy weight; the measured body weight is 300.
- Don't use mixed-case titles.

## Responsive Behavior

The measurement includes a 390px viewport where the display title shrinks from 70px to 40px (line-height 80px to 46px, tracking 2.5px to 2px). No other responsive values were recorded, so panel heights and menu behaviour on phones are not described.

## Iteration Guide

1. Start from `{colors.canvas}` (#000000) and `{colors.ink}` (#ffffff).
2. Titles: Riviera Nights 70px/300 uppercase with 2.5px tracking (40px on phones).
3. Primary action: white pill, `{colors.on-primary}` label, 46px tall, 30px radius.
4. Use full-bleed imagery for every panel and keep copy to a kicker, title, credit and one button.
5. Run `node web/scripts/verify-designs.mjs --slug=rolls-royce-motor-cars` after edits.
