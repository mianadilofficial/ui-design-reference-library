---
version: alpha
name: "U x Machina"
category: "Agencies & Studios"
description: "U x Machina, a digital experience studio: a warm cream canvas (#fbf3eb) with dark brown ink (#2e2626), white type over a red-to-orange gradient hero, PP Neue Montreal at 400 and 500 (64.08px display, 24px body, 12px uppercase labels) with Instrument Serif italic accents, and 6px and pill radii."
colors:
  canvas: "#fbf3eb"
  ink: "#2e2626"
  primary: "#2e2626"
  surface-2: "#000000"
  ink-3: "#ffffff"
typography:
  display:
    fontFamily: "\"PP Neue Montreal\""
    fontSize: 64.08px
    fontWeight: 400
    lineHeight: 51.264px
  display-mobile:
    fontFamily: "\"PP Neue Montreal\""
    fontSize: 42px
    fontWeight: 400
    lineHeight: 33.6px
  heading:
    fontFamily: "\"PP Neue Montreal\""
    fontSize: 12px
    fontWeight: 500
    lineHeight: 18px
    textTransform: uppercase
  body:
    fontFamily: "\"PP Neue Montreal\""
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
rounded:
  xs: 6px
  pill: 9999px
spacing:
  s1: 2px
  s2: 7px
  s3: 10.01px
  s4: 19.99px
  s5: 24px
  s6: 30px
  s7: 40.01px
  s8: 60px
  s9: 79.92px
components:
  link:
    textColor: "{colors.ink-3}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink-3}"
  nav-link:
    textColor: "{colors.ink-3}"
    typography: "{typography.body}"
  footer:
    textColor: "{colors.ink-3}"
    padding: 30px 40.008px 40.008px
---

## Overview

U x Machina's English home page (https://uxmachina.co/en, title "U x Machina | Crafting Human-Machine Interactions", language `en`) belongs to a small studio that, per the page text, makes immersive web, spatial and mobile apps, machine-learning and AI products, mobility interfaces, prototypes and consulting for clients including Disney, Google, IBM, Nike, Lexus and Meta (read through WebFetch). The page is long (24,407px at 1,280px width) and begins with a full-bleed hero: a smooth gradient field that runs from black at the top-left through saturated red to orange and peach at the bottom, centered on a three-dimensional "X" made of four orange spheres on rods, with the words "U" and "Machina" on either side of the X. The header is transparent over the gradient: the logo "U x Machina" at left and three numbered links at right, "/01 Home", "/02 About", "/03 Contact" (the small numerals are in italic). A pill labelled "LET'S TALK" with a white circular envelope icon sits at the lower right of the hero.

After the hero, the page turns to a cream canvas (#fbf3eb) with large h1 copy, "We craft digital experiences that redefi..." (the heading as measured, white, 64.08px, 400 weight, line height 51.264px), founder biographies at 24px/36px ("Previously Head of Design at UNIT9..."), and a small uppercase h2 "MEET THE FOUNDERS" at 12px. The page mentions featured work such as "Lexus Signature Shot" and "Slack Dreamforce 2025 Booth". The footer is 120px high with "LET'S TALK".

The design combines a restrained editorial layer (cream, brown ink, a single grotesque) with a rendered, glossy hero. No box shadows and only two radii were measured; the extractor found no card or button elements. A debugging panel library and a cookie-consent library are present in the stylesheet variables (see Design System Architecture) and are not brand UI.

## Colors

- **canvas `#fbf3eb`**: the cream page background, the largest measured background area.
- **ink `#2e2626`** (and **primary `#2e2626`**): a warm dark brown; the most-read text color and the second background area (the dark sections). The site has no separate measured action color, so primary mirrors ink.
- **surface-2 `#000000`**: black; the top of the hero gradient and dark panels.
- **ink-3 `#ffffff`**: white text on the gradient hero, on the nav, and in the footer.
- **`#f9731633`** (an orange at 20% alpha) is measured among background areas; it is a translucent overlay and is not tokenized as an opaque color. The red-to-orange hero gradient itself was not recorded as discrete color stops, so no gradient values are given here.

By characters, text colors are #2e2626, #000000 and #ffffff only. The stylesheet carries 131 root variables from two libraries: leva (a developer controls panel: `--leva-colors-highlight3: #fefefe`, `--leva-sizes-checkboxSize: 16px`, `--leva-space-colGap: 7px`) and a cookie-consent module (`--cc-overlay-bg: rgba(0,0,0,.65)`, `--cc-btn-secondary-bg: #eaeff2`, `--cc-toggle-readonly-bg: #d5dee2`) plus Tailwind internals such as `--tw-ring-shadow`. None of those is a brand color.

## Typography

Two faces: **PP Neue Montreal** (400, plus 500 on small labels) as the single working family, and **Instrument Serif** (400 italic) for emphasis.

| Token | Size / line height | Weight | Notes |
|---|---|---|---|
| display (h1) | 64.08px / 51.264px | 400 | white on the hero side; line height is 0.8 of size |
| display-mobile | 42px / 33.6px | 400 | measured at 390px |
| heading (h2) | 12px / 18px | 500 | uppercase "MEET THE FOUNDERS" |
| body | 24px / 36px | 400 | biographies, nav and links at 24px / 24px |

The by-character size ranking is 24px, 42px, 31.992px, 64.08px, 12px, 32px and 179.2px; 179.2px is a very large display size used for graphic numerals or words. The nav labels are 24px / 24px, and the "LET'S TALK" label is 12px / 12px at weight 500. Letter spacing is `normal` everywhere. Display lines are set tight (0.8 line height), while body copy is open (1.5).

No substitute font is documented because both families are loaded by the site.

## Layout

The page measured 1,280px wide by 24,407px tall. The header is 94px high and transparent, with the logo at left and the numbered links right-aligned. The h1 block is 438px wide and 377px high, the body paragraphs 438px wide, so reading columns are narrow relative to the viewport. Measured paddings are 40.008px, 60px, 30px and 168px; gaps are 19.992px, 10.008px, 24px, 7px, 40.008px, 2px and 79.92px. The footer is 1,280px by 120px with 30px 40.008px 40.008px padding. The spacing tokens run 2px to 79.92px. The numbered nav ("/01", "/02", "/03") is a recurring motif for sectioning.

## Elevation & Depth

No box shadows were measured. Depth is in the hero artwork: the 3D X with glossy spheres, the glow gradient and the dark corner vignette. The page uses flat cream sections afterwards. A 65% black overlay variable belongs to the cookie module (`--cc-overlay-bg`) and is not part of the brand surface.

## Shapes

Two radii: **6px** (3 elements) and **9999px** (3 elements). Tokens: xs 6px and pill 9999px. The "LET'S TALK" control is a pill with a white circular icon button inside it; the 6px radius is applied to small tiles.

## Components

**Navigation** (`nav`, `nav-link`): transparent header, white 24px/24px labels preceded by small italic numerals ("/01 Home", "/02 About", "/03 Contact"); the hover measurement of "Contact" shows no color change (white to white).

**Link** (`link`): white 24px/36px text.

**Pill CTA** ("LET'S TALK"): translucent outlined pill with 12px/500 uppercase text and a white circular envelope button; fill and border values were not recorded because the extractor found no button role.

**Footer** (`footer`): white text, 120px high, 30px 40.008px 40.008px padding.

No inputs or cards were detected.

## Design System Architecture

No public design system or brand-guideline page exists for U x Machina: the home page https://uxmachina.co/en, opened with WebFetch, lists work, capabilities and contact details but no brand guidelines. The shipped CSS has 131 root variables belonging to third-party libraries (leva, a cookie-consent module, and Tailwind internals), so the brand's own system is limited to the measured values: cream and brown colors, one grotesque face, one serif italic, a tight display line height and two radii. The fetched page text contained instructions addressed to the summarizer about response format; they were ignored.

## Do's and Don'ts

- Do set text in PP Neue Montreal 400, with 24px/36px body and a 64.08px / 51.264px display.
- Do use cream #fbf3eb with brown #2e2626 for editorial sections and white type over the gradient hero.
- Do use Instrument Serif italic sparingly for emphasis.
- Do number navigation links with small italic numerals.
- Don't use Tailwind, leva or cookie-module variables as brand colors.
- Don't add shadows or additional radii.
- Don't invent gradient stops; the hero gradient was not recorded as discrete values.

## Responsive Behavior

Measured at 390px: the h1 is 42px / 33.6px at weight 400 (desktop 64.08px / 51.264px) in a 275px-wide block, and the body is 18px / 27px in a 370px-wide block (desktop 24px / 36px). Mobile by-character sizes: 18px, 42px, 24px, 12px, 58.5px and 25.32px. Navigation arrangement and layout columns at mobile width were not measured.

## Iteration Guide

1. Start with #fbf3eb and #2e2626 for text; use white on the hero.
2. Set display at 64.08px / 51.264px, body at 24px / 36px, labels at 12px/500 uppercase.
3. Keep radii to 6px and full pills.
4. Reproduce the hero as a gradient plus a 3D object; measure its stops before documenting them.
5. Re-gate with `node web/scripts/verify-designs.mjs --slug=u-x-machina`.
