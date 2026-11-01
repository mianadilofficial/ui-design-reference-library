---
version: alpha
name: Truck'N Roll
category: "Product & SaaS"
description: "Truck'N Roll entertainment logistics: #131313 near-black canvas with #fefefe text, electric violet #4e37ff accent, National 2 Condensed 900 uppercase headlines at 200px, Helvetica Now Display body and a 12-column grid with 8px and 14px radii."
colors:
  canvas: "#131313"
  ink: "#fefefe"
  gray: "#d8d3d3"
  placeholder-grey: "#424242"
  primary: "#4e37ff"
  on-primary: "#fefefe"
typography:
  display:
    fontFamily: "\"National 2 Condensed\", sans-serif"
    fontSize: 200px
    fontWeight: 900
    lineHeight: 140px
    letterSpacing: "-4px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"National 2 Condensed\", sans-serif"
    fontSize: 81.7391px
    fontWeight: 900
    lineHeight: 57.2174px
    letterSpacing: "-1.63478px"
    textTransform: uppercase
  heading:
    fontFamily: "\"Helvetica Now Display\", sans-serif"
    fontSize: 72px
    fontWeight: 700
    lineHeight: 64.8px
    letterSpacing: "-2.16px"
  subheading:
    fontFamily: "\"Helvetica Now Display\", sans-serif"
    fontSize: 51px
    fontWeight: 700
    lineHeight: 45.9px
    letterSpacing: "-1.53px"
  body:
    fontFamily: "\"Helvetica Now Display\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 17.6px
  nav:
    fontFamily: "\"Helvetica Now Display\", sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 32px
    letterSpacing: "-0.32px"
rounded:
  xs: 8px
  sm: 14px
  md: 37px
spacing:
  s1: 3.2px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 42px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink}"
    padding: 20px 16px 150px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.gray}"
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.xs}"
    height: 44px
---

## Overview

The measured page is `https://trucknroll.com/`, titled "Entertainment logistics - Truck'N Roll", an English-language home page for a company that moves staging, sound and lighting for live shows. The page is nearly all black with white type. At the top left a three-line stack reads "Truck'N Roll® / Entertainment / Logistic." in 32px bold. A tilted white wordmark, "TRUCK 'N ROLL", is the centred logo, and "Fr" at the right switches language. The hero places a photograph of a truck's headlights in the left half, with a short paragraph under it ("Truck'N Roll® is a logistics company built for the fast, demanding world of live entertainment. For over three decades, we've been trusted to move the gear behind the biggest tours across North America."), and in the right half a tab row (Services, Culture, Contact) over a headline set at 200px: "FULL TOURS, NO [inline photo of a truck] EXCUSES."

Next comes "The engine of every show." at 72px bold, a video tile with a violet circular play button, a thin rule with a "What We Do" label and a large statement ("We don't just move gear. We make sure everything gets where it needs to be, when it matters most.") followed by two small text columns. The page is 11,134px tall with 421 visible elements, and the footer repeats the 200px treatment ("IT'S A TOUR TRUCK'N ROLL® ENTERTAINMENT") on a #131313 block 1,110px tall. The voice is blunt and declarative.

## Colors

The palette is black, white and one electric accent. `{colors.canvas}` is #131313 (5,266 area units; declared as `--color-background` and `--color-black`), `{colors.ink}` is #fefefe (2,898 characters; `--color-text`, `--color-white`) and `{colors.gray}` (#d8d3d3, 2,443 units and 541 characters; `--color-gray`, `--color-visual-placeholder`) paints the footer text and image placeholders. `{colors.placeholder-grey}` (#424242, 45 characters; `--color-placeholder`) is for muted details.

`{colors.primary}` (#4e37ff, 1,509 area units) is the single chromatic colour: the circular play button, and the declared button background (`--button-background`, `--color-accent`). The extractor found no text button, so the generated primary (a grey) was reassigned to this violet and the grey kept as `{colors.gray}`. `{colors.on-primary}` (#fefefe) is the declared button text (`--button-color`). Error feedback is declared as `--color-feedback-error: #de3e3e`, and neutral ramps are declared in oklch (`--color-neutral-200`, `--color-neutral-400`); neither was measured on the home page.

## Typography

Two families. National 2 Condensed at weight 900 sets display text in uppercase: the hero h1 (`{typography.display}`) is 200px on a 140px line with -4px letter-spacing, which is why the lines stack tightly. Helvetica Now Display does everything else: h2 (`{typography.heading}`) is 72px bold on 64.8px with -2.16px tracking, h3 (`{typography.subheading}`) is 51px bold on 45.9px with -1.53px, navigation (`{typography.nav}`) is 32px bold on 32px with -0.32px, and body copy (`{typography.body}`) is 16px weight 500 on 17.6px.

Weights measured: 500 (3,202 characters), 700 (271), 900 (266) and 400 (171). Large sizes are 232px, 200px, 72px and 51px; the small sizes are 16px, 20px and 12px. The root declares a heading scale (`--text-heading-huge`, `-xl`, `-lg`, `-md`, `-sm`, `-xs`, `-2xs`) with weight 900 for the largest steps and 700 for the smaller, and letter-spacing from -.03em (huge, sm and xs) to -.01em (md and 2xs).

## Layout

A 12-column grid is declared (`--grid-columns: 12`, `--grid-gutter: .75rem`, `--grid-margin: 1rem`, `--spacing-gutter: 10px`) with a 4.375rem header height. The hero is split into two halves: media and caption at left, tabs and headline at right. Content columns are left-aligned and the page leaves large black voids between sections. Measured gaps are 12px (21 uses), 48px (20), 10px (19), 8px (10), 3.2px (10) and 44px (8); paddings are 16px (20 uses), then 24px, 8px, 12px and 20px.

Declared breakpoints are `--breakpoint-sm: 700px` and `--breakpoint-md: 1000px`. The nav block pads 20px 16px 150px, which leaves a tall empty band under the header before the hero begins, and the same generous black space repeats between every section.

## Elevation & Depth

None. No box shadows were measured, and the only border colours are #fefefe (5 elements, consistent with the white rules and tab underline seen in the capture) and #d8d3d3 (2). Depth is limited to image layering: the inline truck photo sits inside the h1, and the headlight image is placed edge to edge. The declared modal layer is `--z-index-modal: 700`.

## Shapes

The shape language is mostly square type blocks and photographs with a few rounded media, so the soft corners read as an accent against hard-edged letters. Radii measured: 14px on 6 elements (`{rounded.sm}`), 8px on 3 (`{rounded.xs}`) and 37px on 1 (`{rounded.md}`); the capture shows rounded corners on the video tile and a fully round play control, but which element carries which value was not isolated. Declared steps are `--radius-xs: .25rem`, `--radius-sm: .5rem` (the button radius, `--button-radius`), `--radius-md: .875rem` and `--radius-lg: 2.5rem`. The tilted logo is built from slanted blocks rather than a radius.

## Components

**Primary button.** Declared as `{colors.primary}` fill, `{colors.on-primary}` text, 8px radius (`--button-radius: .5rem`) and 44px height (`--button-height: 2.75rem`); the home page shows its circular play-control variant in violet. Hover colours are declared as `--button-hover-color: #fefefe`.

**Navigation.** A stack of 32px bold white lines at the top left and a tab row (Services, Culture, Contact) with a 1px white rule below it; the active tab is underlined.

**Headline block.** 200px National 2 Condensed 900 uppercase with a photo embedded between words.

**Media tile.** Photo or video with a 14px radius; a violet circle with a white play triangle sits at the bottom right.

**Text columns.** 16px weight 500 white copy in narrow columns.

**Footer.** `{colors.canvas}` fill with `{colors.gray}` text and the 200px repeated tagline.

## Design System Architecture

No public design-system page was opened. The root variables use a Tailwind-style structure (`--text-heading-*`, `--spacing`, `--radius-*`, `--container-3xl`, `--breakpoint-*`, `--default-font-family`) merged with project tokens: `--color-background`, `--color-text`, `--color-accent`, `--color-gray`, `--font-sans: "Helvetica Now Display"`, `--font-condensed: "National 2 Condensed"`, `--unit-sm: .75rem`, `--unit-md: 1.25rem`, `--unit-lg: 2rem`, and `--header-height: 4.375rem`. Motion curves are named in GSAP style: `--ease-power3-out: cubic-bezier(.165,.84,.44,1)`, `--ease-power4-out: cubic-bezier(.23,1,.32,1)`, `--ease-power3-inOut: cubic-bezier(.77,0,.175,1)`.

A cookie-consent library's variables (`--cc-*`, including an overlay background of rgba(0,0,0,.65)) are present in the CSS; they are third-party UI and are not brand tokens.

## Do's and Don'ts

- Do keep the page black with white type and one violet accent.
- Do set the hero in National 2 Condensed 900 uppercase with negative tracking, and everything else in Helvetica Now Display.
- Do mix imagery inside headlines.
- Do round media at 14px and buttons at 8px.
- Don't add gradients or shadows.
- Don't use violet for body text; reserve it for the play control and buttons.
- Don't set headlines in mixed case at the display size; the condensed display face is uppercase.

## Responsive Behavior

The 390px mobile pass measured the h1 at 81.7391px on a 57.2174px line with -1.63478px tracking (down from 200px), and body copy at 14.1519px on 15.567px (weight 500). Common mobile sizes are 14.1519px (1,579 characters), 18.1519px (1,462), 81.7391px (196), 12px (194), 16px (171) and 38.7391px (161). Declared breakpoints are 700px and 1000px. No mobile button was detected, and column collapse was not measured.

## Iteration Guide

1. Canvas `{colors.canvas}`, text `{colors.ink}`, accent `{colors.primary}` used sparingly.
2. Display in National 2 Condensed 900 uppercase, tracking -4px at 200px; headings in Helvetica Now Display 700.
3. Body copy at 16px weight 500.
4. Media at 14px radius; controls at 8px.
5. Build on the 12-column grid with 10-12px gutters.
6. Never reuse cookie-consent styling as brand UI.
