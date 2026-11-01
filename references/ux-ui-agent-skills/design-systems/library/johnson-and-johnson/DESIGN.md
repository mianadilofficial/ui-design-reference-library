---
version: alpha
name: Johnson & Johnson
category: "Pharma"
description: "Johnson & Johnson corporate home page: white and warm grey (#f9f8f7) canvas, black headlines in Johnson Display at 72px, brand red #eb1700 category bars and circular arrow buttons, a #312c2a utility bar and pill-only radii."
colors:
  canvas: "#ffffff"
  page-largest: "#f9f8f7"
  ink: "#000000"
  primary: "#eb1700"
  red-link: "#d91500"
  surface-2: "#312c2a"
  ink-2: "#6e6259"
  ink-3: "#cbc4bc"
typography:
  display:
    fontFamily: "\"Johnson Display\", Helvetica, Arial, sans-serif"
    fontSize: 72px
    fontWeight: 400
    lineHeight: 72px
  display-mobile:
    fontFamily: "\"Johnson Display\", Helvetica, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 40px
  heading:
    fontFamily: "\"Johnson Display\", Helvetica, Arial, sans-serif"
    fontSize: 56px
    fontWeight: 400
    lineHeight: 58.24px
  subheading:
    fontFamily: "\"Johnson Display\", Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.08px
  body:
    fontFamily: "\"Johnson Text\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.96px
rounded:
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 32px
  s8: 40px
  s9: 48px
  s10: 56px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.pill}"
  nav:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.canvas}"
    padding: 80px 40px
---

## Overview

Johnson & Johnson (https://www.jnj.com/, title "Johnson & Johnson: Changing health for humanity") is the corporate home of the healthcare company. The measured page is 1280px wide and 5417px tall with 539 visible elements. It reads as a corporate-editorial page for U.S. audiences (a footer line states that the website is intended for U.S. audiences).

The top is a near-black utility bar (#312c2a) with the active tab "Discover J&J" in a white tab, then "Medicines & therapies" and "Medical devices & technology" on the left and "Media", "Contact" and a "US" selector at right. Under it is the white header with the red "Johnson&Johnson" script-style wordmark at left and a red search icon at right, separated from the content by a thin grey rule. The hero is a split: the h1 "We're tackling the world's toughest health challenges" in very large Johnson Display type at left, and a laboratory photograph at right. Beneath it, two equal-width full-bleed red bars read "Medicines & therapies →" and "Medical devices & technology →" in white, each over a pale warm-grey panel (#f9f8f7) with a paragraph, red arrow-linked sub-areas (Oncology, Immunology, Neuroscience, Cardiopulmonary; Cardiovascular, Orthopaedics, Surgery, Vision) and a large red circular arrow button.

The "Innovating in healthcare" section shows a grid of story cards with photographs and red "Read more →" links, then an asymmetric editorial layout of larger and smaller images. The language is calm, factual and mission-led. Red is used only for interaction cues and section bars; the photography of laboratory work, surgery and manufacturing supplies the human warmth.

## Colors

The CSS custom properties give the palette: --background02 and --bordercolor02 #eb1700 (brand red), --red600 #d91500, --red800 #ad1100, --linkhover01 #cc1400, --background03 #f9f8f7, --text03 #cbc4bc, --focus01 #0f68b2 (focus blue), --overlay01 rgba(0,0,0,0.5) and --color-button-disabled #e8e6e3.

- **canvas #ffffff** is the header and article background (weight 632).
- **page-largest #f9f8f7** is the largest background (1389), the warm grey panels.
- **surface-2 #312c2a** is a warm near-black (1340) used for the utility bar and the footer.
- **ink #000000** is the main text and heading color (886); **ink-2 #6e6259** is the warm grey for body paragraphs (852); **ink-3 #cbc4bc** is the light taupe for text on the dark bar and footer (509).
- **primary #eb1700** is the J&J red measured as a background (116) on the two category bars and the round arrow buttons, and declared in the CSS as the background and border color; **red-link #d91500** is the measured link text color (180) for "Oncology", "Read more" and similar, with hover #cc1400 recorded.

The measured generator default for primary was #d91500; the filled red is #eb1700, so primary is reassigned to the fill and the link red kept as red-link.

## Typography

Two proprietary families, both loaded at weight 400: "Johnson Display" for headings and "Johnson Text" for everything else, each with Helvetica, Arial, sans-serif fallbacks. Display accounts for 1033 weighted characters, Text for 1688.

- **display** Johnson Display 72px / 72px (the h1); **display-mobile** 40px / 40px.
- **heading** 56px / 58.24px ("Innovating in healthcare").
- **subheading** 24px / 28.08px (card titles and the red category bar labels).
- **body** Johnson Text 12px / 15.96px.

The scale jumps from 72px to 56px to 24px to 12px with one weight, so the contrast is entirely in size and the light, high-contrast humanist forms of the Display face. Headlines use regular weight rather than bold. For prototypes without the font files, use a refined humanist sans as a stand-in.

## Layout

A wide 1280px layout with generous outer margins and a two-column split under the hero (each red bar and panel takes half the width and the two are separated by a thin gap). Story cards sit in a three-column row, followed by an asymmetric row with one large and one small image. White space between sections is large.

Spacing tokens measured: 4px, 8px, 12px, 16px, 20px, 24px, 32px, 40px, 48px and 56px. The footer has 80px 40px padding. The CSS declares matching variables: --padding04 16px, --padding05 24px, --padding08 56px, --spacing08 64px and --topNavHeight 40px (the dark utility bar).

The page uses very few colors overall: five text colors (black, warm grey, taupe, white, red) and five background colors (warm grey, near-black, white, brand red and a pale disabled grey #e8e6e3). The disabled-button grey and the dark focus blue are declared for states that were not visible in the measurement. Tonal changes between #ffffff and #f9f8f7 are very subtle, which keeps the interface quiet and lets the two saturated red bars act as the only strong color event on the page.

## Elevation & Depth

No shadows or borders were measured (the shadow and border lists are empty, apart from the header's thin rule). Depth is flat: tonal bands (#f9f8f7 panels, #312c2a bars) and photography. The CSS declares a 50%-black overlay variable for modals, not observed on the page.

## Shapes

The only radius measured is 9999px (weight 26), on the arrow buttons and the red pill links; the CSS declares `--radius00: 0`, and the photographs, bars and panels compute square corners. Token: pill 9999px. So the shape language is two forms: rectangles for content and full circles or pills for action.

## Components

- **category bar**: full-half-width red (#eb1700) bar with white Johnson Display 24px label and an arrow ("Medicines & therapies →").
- **circular arrow button**: red circle with a white arrow, pill radius.
- **link**: red (#d91500) 12px Johnson Text with an arrow; hover #cc1400. The nav link token in white uses subheading type with a pill radius, as measured for the dark-bar link.
- **nav**: #312c2a bar, 12px text, white active tab.
- **footer**: #312c2a with white text and 80px 40px padding.
- **story card**: photo on top, 24px black title and a red "Read more →".

No text input or button fill was detected by the extractor beyond these.

Interaction on links was measured: the "Oncology" pill link changes its text and border color from rgb(217, 21, 0) to rgb(204, 20, 0) on hover, with no change in background or underline.

## Design System Architecture

No public design system or brand-guidelines page for Johnson & Johnson is linked from the home page, so none is cited. The shipped CSS shows a de-facto token set in the root: color roles named by role and number (`--background01`, `--background02`, `--background03`, `--text03`, `--bordercolor02`, `--linkenabled02`, `--linkhover01`, `--focus01`), a red ramp (`--red600`, `--red800`), padding and spacing steps (`--padding04`, `--padding05`, `--padding08`, `--spacing08`), `--radius00`, `--topNavHeight` and `--stats-01`. Source: the measured root variables in web/data/extracted/johnson-and-johnson.json from https://www.jnj.com/.

## Do's and Don'ts

- Do keep the page white and warm grey (#ffffff, #f9f8f7) with black headlines.
- Do use the red #eb1700 only for category bars, arrow circles and link accents; use #d91500 for link text.
- Do set headings in regular-weight Johnson Display at large size.
- Do keep content rectangles square and use circles for action.
- Do show real laboratory, clinical and factory photography.
- Don't add shadows or borders to cards.
- Don't use bold headings; the face is loaded at 400 only.
- Don't use the focus blue #0f68b2 as decoration.

## Responsive Behavior

Measured in the 390px mobile pass: h1 40px (from 72px) and body 10px (from 12px). The mobile display line-height stays equal to the font size (40px). Navigation, the two-column red bars, card grid and footer behavior on mobile are not measured, and no breakpoint values were recorded from the stylesheet, so none are stated here.

## Iteration Guide

1. White canvas, #f9f8f7 panels, black Display headline at 72px / 72px.
2. Split red bars with white 24px labels over warm grey panels.
3. Red circle arrow buttons and red arrow links.
4. Photograph-led story cards with 24px titles.
5. Dark #312c2a bar and footer.
6. Run `node web/scripts/verify-designs.mjs --slug=johnson-and-johnson`.
