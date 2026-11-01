---
version: alpha
name: Savor
category: "Food & Beverage"
description: "Savor fats brand site at savor.it. Cream canvas #fff9eb, maroon ink #370808, #f0e7d7 buttons with 5px radius and #e6dac4 hover, Suisse Intl 17.7px body with Roslindale Display Condensed 111.6px hero type, no borders or shadows."
colors:
  canvas: "#fff9eb"
  ink: "#370808"
  primary: "#f0e7d7"
  on-primary: "#370808"
  surface-2: "#000000"
  primary-hover: "#e6dac4"
typography:
  display:
    fontFamily: "\"Suisse Intl\", helvetica, arial, sans-serif"
    fontSize: 38.7981px
    fontWeight: 400
    lineHeight: 48.4977px
  display-mobile:
    fontFamily: "\"Suisse Intl\", helvetica, arial, sans-serif"
    fontSize: 32.1127px
    fontWeight: 400
    lineHeight: 40.1408px
  subheading:
    fontFamily: "\"Suisse Intl\", helvetica, arial, sans-serif"
    fontSize: 20.7085px
    fontWeight: 700
    lineHeight: 25.6643px
    letterSpacing: "-0.176995px"
  body:
    fontFamily: "\"Suisse Intl\", helvetica, arial, sans-serif"
    fontSize: 17.6995px
    fontWeight: 400
    lineHeight: 25.6643px
    letterSpacing: "-0.176995px"
  button:
    fontFamily: "\"Suisse Intl\", helvetica, arial, sans-serif"
    fontSize: 15.6995px
    fontWeight: 400
    lineHeight: 22.7643px
  display-hero:
    fontFamily: Roslindale Display Condensed
    fontSize: 111.587px
    fontWeight: 300
  nav:
    fontFamily: "\"Suisse Intl\", helvetica, arial, sans-serif"
    fontSize: 13.6995px
    fontWeight: 400
    lineHeight: 17.1244px
rounded:
  xs: 5px
spacing:
  s1: 9.04px
  s2: 10.36px
  s3: 12px
  s4: 14.12px
  s5: 15.52px
  s6: 18px
  s7: 19.62px
  s8: 20px
  s9: 21.4px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 19.6244px 38.6948px
    height: 62px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 19.6244px 38.6948px
    height: 62px
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    padding: 100px 0px 36px
---

# Savor

## Overview
The measured page is https://savor.it/, titled "Home", the site of Savor, a maker of "pure, versatile, sustainably-made fats". The page is 1280px wide and 15564px tall. The capture shows a cinematic hero: a full-width photograph of racks of croissants on baking trays, the lowercase cream "savor" wordmark in a condensed serif at the top left, navigation links (Process, Foods, Care, Mission, Journal, Contact) at the top right, and a very large two-line headline "Feel good fats from scratch" in cream condensed display serif at the lower left. At the right of the headline sit the line "Pure, versatile, sustainably-made fats" and a cream "Watch Episode" button. Below the hero a macro video still of butter fills a 300px band, and the remainder of the captured page is empty cream because the lower sections reveal on scroll and had not rendered when the screenshot was taken, so the capture does not show their content. Text fragments read by the extractor include "All our old favorites, just made a different way." and "Reviving an elemental process to produce food for us all", a footer newsletter invitation ("Hungry for more? Join our newsletter and be the first...") and buttons "Join now", "Our Process" and "Our Foods".

## Colors
The palette is warm and restrained. The canvas is cream `#fff9eb`; text is a very dark maroon `#370808`; buttons and the footer fill use a deeper cream `#f0e7d7`, which darkens to `#e6dac4` on hover (measured: the Watch Episode button goes from `rgb(240, 231, 215)` to `rgb(230, 218, 196)`). The inverse button, "Join now", uses a `#370808` fill with `#f0e7d7` text. `#000000` also appears as a surface. No borders and no shadows were measured. Photography supplies golden amber, butter yellow and copper tones that sit well against the cream and maroon pair.

## Typography
Two families. Suisse Intl (400 and 600) sets all interface and body text; its sizes are fractional because they scale with the viewport: 21.3991px on the body element, 17.6995px for copy with -0.176995px tracking and a 25.6643px line height, 15.6995px for buttons, 13.6995px for navigation, 20.7085px bold for small headings and 38.7981px for section titles such as "Process". Roslindale Display Condensed (300) is the display face for the wordmark and the hero statement, measured at 111.587px. On mobile the section title is 32.1127px, body 18.0563px with -0.180563px tracking, buttons 14.0282px and navigation 12.0282px.

## Layout
Layout is driven by named CSS variables: `--grid-columns: 12`, `--grid-column-gap: 2rem`, `--grid-max-width: 144rem`, `--grid-side-margin` between 2rem and 4rem (interpolated across viewport width), `--nav-bar-height: 5rem` and `--nav-bar-logo-width: 10rem`. Form fields use `--form-field-inner-height: 3em` with padding tokens of .5rem and 1.2em/.4em. The footer pads 100px at the top and 36px at the bottom on a `#f0e7d7` fill and is 913px tall. Button padding is 19.6244px by 38.6948px at desktop and 17.5352px by 20.3099px on mobile.

## Imagery and Voice
The hero is documentary food photography: croissants stacked on steel racks in a working bakery, shot in warm light with shallow depth of field, and a macro of whipped butter whose folds fill the frame in yellow and ochre. The images imply process and craft rather than product packaging. The copy is short, plain and reassuring: "Feel good fats from scratch", "Pure, versatile, sustainably-made fats", "All our old favorites, just made a different way." and "Reviving an elemental process to produce food for us all". Button labels are verbs or two-word nouns, Watch Episode, Join now, Our Process and Our Foods, and the navigation lists Process, Foods, Care, Mission, Journal and Contact. The footer asks "Hungry for more? Join our newsletter and be the first" and repeats the wordmark. The hero headline is lowercase-led and tightly set, using the condensed display serif at roughly three times the size of the 38.7981px section titles.

## Interaction
Two hover states were measured. On the Watch Episode button the fill changes from `rgb(240, 231, 215)` to `rgb(230, 218, 196)` while the text and the border stay `rgb(55, 8, 8)`. On the Our Process button the fill changes from `rgb(240, 231, 215)` to `rgb(230, 217, 196)`, the same effect within one unit of blue. Text color, radius, height and shadow do not change on hover. Scroll-driven reveals are present on the page, since the lower part of the capture rendered blank, but their timing and easing were not measured.

## Elevation & Depth
There are no measured box shadows or borders (`boxShadows` and `borderColors` are empty). Depth is created by full-bleed video and photography, and by type set directly over the images.

## Shapes
The only radius measured is 5px, on four elements, and it is used on every button: the cream Watch Episode button, the maroon Join now button and the two cream Our Process and Our Foods buttons. Because no other radius appears in `borderRadii`, all other rendered elements, including the hero image, the macro video band and the footer panel, compute square corners. Buttons are therefore softly squared rectangles, neither sharp nor pill-shaped, and the only roundness in the page is this small 5px softening.

## Components
**Primary button:** "Watch Episode", `#f0e7d7` fill, `#370808` Suisse Intl 15.6995px text, 5px radius, padding 19.6244px 38.6948px, 62px high; hover fills `#e6dac4`. **Inverse button:** "Join now", `#370808` fill with `#f0e7d7` text and the same geometry. **Navigation:** Suisse Intl 13.6995px in `#370808` (or cream over the hero), seven links including Home and Care. **Footer:** `#f0e7d7` panel with a newsletter prompt and link lists, 913px tall. **Display statement:** 111.587px Roslindale Display Condensed in cream over the hero.

## Design System Architecture
No public design system or brand guideline was opened; `_research` records `none: true`. The site defines a layout token layer on the root: a 12-column grid (`--grid-columns`, `--grid-column-gap`, `--grid-max-width`, `--grid-side-margin`, `--grid-column-width`), navigation sizing (`--nav-bar-height`, `--nav-bar-logo-width`), viewport-unit helpers (`--dvh`, `--svh`, `--lch`, `--dch`) and form-field padding tokens. Fonts are Suisse Intl and Roslindale Display Condensed. Source: https://savor.it/ measured into web/data/extracted/savor.json.

## Do's and Don'ts
- Do use cream `#fff9eb` and maroon `#370808` as the base pair, with `#f0e7d7` for buttons and footer.
- Do set the hero statement in the condensed display serif at very large size and keep UI text in Suisse Intl.
- Do round buttons to 5px only.
- Do let food photography and video fill the first screen.
- Don't add borders or shadows; none were measured.
- Don't use bright accent colors; none were measured.
- Don't rely on the empty lower capture as a design reference; its content is not measured.

## Responsive Behavior
The 390px mobile pass measured the section title at 32.1127px/40.1408px, body at 18.0563px/24.3761px, the Watch Episode button at 14.0282px with 17.5352px by 20.3099px padding and 55px height, and the navigation at 12.0282px with 37.5px bottom padding and a 190px block height. The root variable `--grid-side-margin` interpolates between 2rem and 4rem with viewport width. Column counts, hero layout and menu behaviour on mobile are not measured.

## Iteration Guide
1. Canvas `#fff9eb`, ink `#370808`, button and footer cream `#f0e7d7`, hover `#e6dac4`.
2. Roslindale Display Condensed 300 for hero statements; Suisse Intl 400 at 17.6995px with -0.176995px tracking for body.
3. Buttons 62px high, 5px radius, with a cream and an inverse maroon variant.
4. Build on a 12-column grid with a 2rem gap and a 5rem nav bar.
5. Open with a full-bleed food photograph and large cream type.
6. Run `node web/scripts/verify-designs.mjs --slug=savor`.
