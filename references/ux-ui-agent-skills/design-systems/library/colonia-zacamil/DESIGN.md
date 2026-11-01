---
version: alpha
name: Colonia Zacamil
category: "Culture & Events"
description: "Colonia Zacamil (coloniazacamil.com), an interactive neighbourhood experience. Warm stone #ebe6e0 canvas with pure black #000000 type, Heathergreen condensed capitals at 166.4px, Reckless Neue serif at 24px, Roboto Mono labels and a 30px-radius black Discover pill with a gold #b48e46 accent."
colors:
  canvas: "#ebe6e0"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ebe6e0"
  ink-2: "#000000cc"
  tutorial-gold: "#b48e46"
  pin-violet: "#8d7cab"
typography:
  display:
    fontFamily: Heathergreen
    fontSize: 166.4px
    fontWeight: 400
    lineHeight: 199.04px
    textTransform: uppercase
  display-mobile:
    fontFamily: Heathergreen
    fontSize: 200px
    fontWeight: 400
    lineHeight: 214.967px
    textTransform: uppercase
  button:
    fontFamily: "\"Roboto Mono\""
    fontSize: 15.2px
    fontWeight: 400
    lineHeight: 19.92px
  label:
    fontFamily: "\"Roboto Mono\""
    fontSize: 10px
    fontWeight: 400
    textTransform: uppercase
  body-dominant:
    fontFamily: Reckless Neue
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: -0.216px
rounded:
  sm: 18px
  md: 30px
  pill: 9999px
spacing:
  s1: 6px
  s2: 15px
  s3: 19px
  s4: 27px
  s5: 44px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 27px
    height: 37px
    width: 170px
  pin:
    backgroundColor: "{colors.pin-violet}"
    typography: "{typography.label}"
    rounded: "{rounded.md}"
  footer:
    textColor: "{colors.ink-2}"
    typography: "{typography.label}"
---

## Overview

Colonia Zacamil is not a conventional website: it is an interactive, audio-enabled map experience about the Zacamil neighbourhood. The measured page is the site's own entry screen, 1280px wide and only 800px tall, so the extractor measured the intro and not the interactive map that opens after the "Discover" button. The document title and meta description are both simply "Colonia Zacamil". Its text lists the chapters of the experience: From Thorns, Santa Zacamil, A Better Childhood, Paz y Pachamama, The Dove, Hidden Talents, Fire Tree, Mayan Temples, Our Voice, Interconnection, Adentro Afuera, Migrations, I FILOSOFI, Baila Cadejo, Pendulum, De Ónde Venimos, Volcano, Ciudad Fuga, Color Explosion, The Neighborhood, The Bus, Cancha and Park, together with a "[present]" marker and a language switch "[ en / es ]".

The entry screen is a single typographic composition on a warm stone background. Three words and a picture form one line across the middle: huge black condensed capitals "FLY" and "TO" on the left, a rounded-corner strip of aerial footage of the neighbourhood's apartment blocks in the centre, and "ZACAMIL" on the right; a tiny bracketed label "[POWERED BY CMS]" sits above the last word. Below it a black pill button reads "Discover" with a round icon at its right end, and at the bottom the serif sentence "Zacamil is more than just buildings. Activate audio for the full experience." closes the screen. The hint copy in the markup explains the interaction: "swipe to explore", "click and drag to explore", "pinch to zoom in & out", "scroll to zoom in & out" and "click on the pins to learn more".

The tone is human and quiet. There is no navigation bar, no price, no marketing grid; the page asks the visitor to listen and to explore. Everything that is not photography is either black or stone, and the only accents measured in the stylesheet are a gold dot (`#b48e46`) in the tutorial and a violet (`#8d7cab`) fill for map pins that cannot be clicked.

## Colors

The palette is two colors and their tints. The page declares no custom properties (`rootVars` is empty); the values below come from the computed styles and the stylesheet read.

- **Canvas — `#ebe6e0`.** The page background and the largest background area (weight 1025). It is also the label color on the black button.
- **Ink and primary — `#000000`.** Display type, serif sentences, the button fill and the tutorial text; the second-largest background area (weight 674) is also black. It is the most-read text color (103 weighted characters).
- **Ink-2 — `#000000cc`** (80% black): the footer line "[POWERED BY CMS] [EN / ES]" (22 weighted characters).
- **Tutorial gold — `#b48e46`.** The stylesheet paints the small indicator dots under the tutorial text with it (`background: #b48e46; border-radius: 50%`), and the extractor measured it as a small background area (weight 5).
- **Pin violet — `#8d7cab`.** The fill of map pins marked `not-clickable` (`#pins-w .pin.not-clickable > div { background: #8d7cab }`); other pins take their color from a per-pin `--color` custom property, so their colors are data-driven and not measured on the entry screen.
- The stylesheet corpus also lists `#af0000` (3 uses), `#023a55` (2), `#939388` (3), `#868481` (2), `#d9d9d9` (4), `#181818`, `#222222` and `#515151`. None of them is measured in a role on the entry screen.

Contrast is simple: black on stone for everything, stone on black for the button. There are no gradients and no transparency effects on text beyond the 80% footer black.

## Typography

Three self-hosted families, each shipped in a single weight (400, woff2 and woff): **Heathergreen**, a condensed display face set only in capitals; **Reckless Neue**, a serif for sentences; and **Roboto Mono**, a monospaced face for buttons, labels and pin captions. The stylesheet declares `font-display: swap`. Measured weights are 400 for 134 weighted characters and 700 for 8, so hierarchy is made from family and size, not weight. Commercial or custom faces here have no documented substitute; the fallbacks are not specified in the stylesheet read.

Measured roles:

- **Display** — Heathergreen 166.4px / 400, line-height 199.04px, uppercase, black ("FLY", "TO", "ZACAMIL"). The stylesheet sizes the intro title with viewport units: one rule is `font-size: min(13vw, min(200px, 23.7vh))`, which gives exactly 166.4px at the 1280px measured viewport width; on the 390px-wide mobile pass the measured size is 200px with line-height 214.967px, which matches `min(200px, 23.7vh)` at the mobile viewport height.
- **Sentence** — Reckless Neue 24px / 400, line-height 28px, letter-spacing -0.009em (measured -0.216px), centered under the composition with a maximum width of 395px and 32px from the bottom edge. 76 weighted characters, the dominant text.
- **Button** — Roboto Mono 15.2px / 400, line-height 19.92px, declared as `font-size: min(16px, 1.9vh)` (15.2px at the 800px viewport height); on mobile it measures 16px with line-height 21px.
- **Label** — Roboto Mono 10px / 400, uppercase, for "[POWERED BY CMS]" and "[ EN / ES ]". Pin captions are Roboto Mono 14px uppercase with 27px of right padding.
- **Tutorial text** — Reckless Neue at `min(18px, 2.13vh)` and `min(15px, 1.78vh)`, letter-spacing -.009em.

Because many sizes use `min()` with viewport height, the type scale follows the viewport rather than a fixed ladder.

## Layout

The entry screen is a full-viewport stage, 800px tall at the measured width. The three title blocks and the image strip sit on one horizontal line near the vertical centre, with the title words pushed to the left and right edges; the strip between them is a rounded rectangle of photography. The button is centred below the line, and the closing sentence is absolutely positioned at the bottom centre. Measured gaps are 19px (54 occurrences), 6px and 44px; measured paddings are 27px (the button's left and right padding) and 15px. The stylesheet positions the tutorial pager 56px from the bottom and the intro description 32px from the bottom. The loader introduction title block is set to a width of `min(330px, 39.1vh)`.

After "Discover", the page becomes a pannable, zoomable map with pins; those layouts are generated in the browser and were not measured.

## Elevation & Depth

The page is completely flat. No box-shadow was recorded on any element and no border colors were measured. Depth is made by cropping and motion: the background image in the loader is clipped with `clip-path: inset(var(--inset) round 18px)` and animates over 1.3s with `cubic-bezier(.645,.045,.355,1)`, while the image inside scales to 0.8 over the same duration, so the picture appears to shrink into the rounded strip. Pins start at `scale3d(.5,.5,.5)` and expand on hover over .8s with the same easing.

## Shapes

Roundness is large and consistent. The Discover button and the pin capsules use a 30px radius (29 measured occurrences) and the round icon inside the button uses 50% (2). The image strip uses an 18px corner (the clip-path radius; the stylesheet corpus counts 18px ten times). Other radii in the stylesheet are 6px, 8px and 10px. The generated tokens keep `md` 30px and `pill` 9999px and add `sm` 18px for the image strip.

## Components

- **Discover button (`button-primary`).** Black fill, stone `#ebe6e0` Roboto Mono label at 15.2px / 400, 30px radius, 27px left and right padding, 37px tall and 170px wide (the stylesheet sets `min-width: 170px`, `height: 37px`, left-aligned text), with a round black-and-white icon at its right end. No hover state was measured.
- **Map pins (`pin`).** A pill-shaped capsule with a 30px radius and 19px gap, holding a circular icon (32px, and 36px in a second rule) and an uppercase Roboto Mono 14px label that fades in on hover (`opacity` over .4s, delayed .5s). Pins that cannot be clicked are `#8d7cab` and show the default cursor.
- **Tutorial pager.** Instruction icons for pinch, scroll and swipe animate on a 4s infinite loop; small gold dots (`#b48e46`) sit in the tutorial's bottom row.
- **Footer labels (`footer`).** "[POWERED BY CMS]" and "[ EN / ES ]" in Roboto Mono 10px uppercase at 80% black; the page links to https://cms.foundation/ from the "powered by CMS" label.
- **Intro image strip.** Aerial footage inside an 18px rounded frame, flanked by the title words.

Motion is part of the system: every transition on the entry screen uses a `cubic-bezier(.645,.045,.355,1)` ease at 0.8s or 1.3s, and pin labels use a linear 0.4s fade.

## Design System Architecture

No public design-system documentation or brand-guideline page is linked from the pages opened (https://coloniazacamil.com/ and its entry stylesheet), so no official design system is documented. The site is a Nuxt application whose component styles are scoped with Vue `data-v-` attributes in the shipped stylesheet https://coloniazacamil.com/_nuxt/entry.t46wWHdU.css (about 8 KB). The system is expressed as component rules: `#loader` (introduction, tutorial and background), `#pins-w` (map pins) and a scoped `button` rule, with a handful of local custom properties (`--color` on pins, `--width` on the button, `--inset` for the clip path) and no global token block. Sizes are written as `min(<px>, <vh>)` or `min(<vw>, …)` expressions, so layout scales with the window. The page loads Google Tag Manager and an iubenda widget script, and credits "powered by CMS" with a link to cms.foundation.

## Do's and Don'ts

Do:
- Keep the background `#ebe6e0` and type `#000000`; use black pills with stone labels for actions.
- Set display words in Heathergreen capitals, sentences in Reckless Neue, and utility text in Roboto Mono capitals.
- Let photography appear inside rounded frames (18px) and actions in 30px capsules.
- Use `min()` viewport-based sizes for display type and buttons.
- Use the one cubic-bezier ease for clip, scale and pin motion.

Don't:
- Don't add navigation chrome, shadows or borders; none is measured.
- Don't use bold: the three families ship only weight 400.
- Don't treat the gold `#b48e46` or the violet `#8d7cab` as general brand colors; they mark tutorial dots and inactive pins.
- Don't assume layouts for the map screens: they were not measured.
- Don't document consent or analytics widgets (the page loads an iubenda script and Google Tag Manager) as UI.

## Responsive Behavior

Measured at 390px wide: the title is 200px / 400 with line-height 214.967px; the Discover button is 16px / 400 with line-height 21px, 37px tall and 170px wide with the same 30px radius and 27px padding; the sentence and label sizes measured are 10px, 9.9592px, 12px and 16px. No navigation or body text was found in the mobile pass.

Declared in the stylesheet: `@media (max-width: 767px)` (38 rules), `@media (min-width: 768px)` (30), `@media (min-width: 1025px)` (9), `@media (max-width: 1024px) and (min-width: 768px)` (9), `@media (hover: hover) and (pointer: fine)` (18) and `@media (pointer: coarse)` (11). The tutorial instructions differ by input type: the markup carries both "swipe to explore" and "click and drag to explore", and both "pinch to zoom in & out" and "scroll to zoom in & out". How the map and pins look at tablet widths was not measured.

## Iteration Guide

1. Start with `#ebe6e0` and `#000000`; nothing else is needed for the entry screen.
2. Set "FLY TO [image] ZACAMIL" in Heathergreen capitals at `min(13vw, min(200px, 23.7vh))`, with a rounded 18px image strip between the words.
3. Add a centred black Discover capsule: Roboto Mono 15.2px, 30px radius, 27px side padding, 37px tall, 170px wide.
4. Close the screen with a centred Reckless Neue 24px / 28px sentence 32px from the bottom edge.
5. Keep motion on one ease (`cubic-bezier(.645,.045,.355,1)`, 0.8s to 1.3s).
6. Run `node web/scripts/verify-designs.mjs --slug=colonia-zacamil` after any token change.
