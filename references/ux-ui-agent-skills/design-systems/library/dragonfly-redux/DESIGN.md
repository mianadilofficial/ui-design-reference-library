---
version: alpha
name: Dragonfly Redux
category: "Tech & AI"
description: "Dragonfly Redux (dragonfly2.studiofreight.dev): an all-black #000000 crypto-fund site with a huge orange #fa4c14 DRAGONFLY wordmark, #7d7d7d grey body copy in FK Roman Standard 300, uppercase NON Natural Grotesk section titles at 16px, NON Natural Mono 10px labels, and #f2f2f21a hairline rules on an 8-column grid."
colors:
  canvas: "#000000"
  ink: "#7d7d7d"
  ink-strong: "#f2f2f2"
  primary: "#fa4c14"
  accent-pink: "#ec39b6"
  accent-purple: "#5014fa"
  hairline: "#f2f2f21a"
typography:
  display:
    fontFamily: "\"NON Natural Grotesk\", sans"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
    textTransform: uppercase
  body:
    fontFamily: "\"FK Roman Standard\", sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 17.28px
    textTransform: uppercase
  corner-letter:
    fontFamily: "\"FK Roman Standard\", sans-serif"
    fontSize: 40px
    fontWeight: 300
    lineHeight: 36px
    letterSpacing: "-0.8px"
  label:
    fontFamily: "\"NON Natural Mono\", monospace"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 10px
    letterSpacing: 0.4px
    textTransform: uppercase
rounded:
  xs: 4px
spacing:
  spacer-4: 4px
  spacer-6: 6px
  spacer-8: 8px
  spacer-12: 12px
  spacer-16: 16px
  spacer-24: 24px
  spacer-88: 88px
components:
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.label}"
  nav:
    textColor: "{colors.ink-strong}"
    typography: "{typography.corner-letter}"
    padding: 12px 0px
  text-input:
    textColor: "{colors.ink-strong}"
    typography: "{typography.label}"
    height: 14px
  footer:
    textColor: "{colors.ink-strong}"
    padding: 12px 0px
---

## Overview

Dragonfly Redux lives at https://dragonfly2.studiofreight.dev/ (document title "Dragonfly"). Its meta description reads "Dragonfly is a leading crypto investment fund. We back the best researchers and builders who will push the entire crypto ecosystem forward." The page is a rebuild of a crypto-fund website on a studio-hosted domain and is queued here as "Dragonfly Redux". It is dark, typographic and interface-like rather than photographic.

The capture shows a pure black page. At the top, a small dark control bar reads ">|<", five orange dots and "MENU", and a dot-matrix world map is drawn in dim grey behind a huge orange wordmark, DRAGONFLY, spelled across the width of the viewport. The four letters D, F, L and Y are pinned in serif type to the four corners of the opening screen, with small plus-shaped registration marks near the edges. A second control, "GUI ... OPEN", with an orange four-square glyph sits below the wordmark. Further down a section starts with an orange index "01" over a hairline rule, then the white title "ABOUT", a mono label "SEC-01", and grey serif paragraphs: "Eight years in crypto, Dragonfly brings access and influence to crypto teams with global aspirations to find adoption anywhere." A second paragraph is introduced by the mono label "ETHOS": "We are a team of deeply technical crypto-natives. We invest across stages, from seed to Series B and beyond."

The navigation labels in the page source are Home, About, Writing, Team, Portfolio, Careers, Contact, Terms and Disclosures, followed by a list of research and opinion posts. Copy is first-person plural, plain and factual.

## Colors

The colour system is black, two greys and one orange. `canvas` #000000 covers almost the entire page (5225 area units against under 50 for everything else). Text is split between `ink` #7d7d7d (the stylesheet's `--mid-grey`, 4104 characters, used for long paragraphs) and `ink-strong` #f2f2f2 (an off-white, 3411 characters, used for titles, links and navigation). `primary` #fa4c14 (`--orange`) is the accent: the wordmark, the section index numerals, the dots in the top control and small indicators (28 characters of text, 3 background areas, 2 borders).

Two further brand hues are declared and measured in tiny areas: pink #ec39b6 (`--pink`) and violet #5014fa (`--purple`). The stylesheet also publishes alpha ladders of these colours (for example `--orange-35`, `--orange-80`, `--purple-35`, `--purple-85`, `--pink-95`, `--black-65`, `--black-90`, `--grey-100-5` to `--grey-100-85`, `--off-white-40`, `--off-white-55`), which suggest layered translucent fills; which element uses which was not measured. Border colour is #f2f2f21a, a 10%-alpha off-white, measured on 122 elements, with #f2f2f23d (4) and #f2f2f20f (2) as lighter and fainter variants; the lighter fill #f2f2f20f appears as a background on 47 area units.

## Typography

Three families, each with one role. FK Roman Standard (weight 300, 5007 characters) is the text serif: 16px with a 17.28px line-height, uppercase in the measured role, and at 40px with a 36px line-height and -0.8px tracking for the corner letters D, F, L, Y. NON Natural Grotesk (weight 400, 2256 characters) sets section titles such as "ABOUT" at 16px/16px, uppercase. NON Natural Mono (582 characters) sets interface labels at 10px/10px, weight 400, letter-spacing 0.4px, uppercase.

Sizes recorded by characters: 16px (6304), 24px (799, tracking -0.48px), 10px (582), 85.5px (71, tracking -5.28px), 39px (67, tracking -1.6px), 152.5px (18, tracking -6.4px) and 40px (4). The two largest sizes are the DRAGONFLY wordmark and large display lines; their font family per size was not recorded separately. The 16px text carries -0.32px tracking (3303 characters). Tracking tightens as size grows: roughly -0.02em at 16px to -0.04em at the 152.5px size, so negative tracking is a rule of this system.

All three families are custom or licensed faces (the stylesheet loads NON Natural Grotesk 400, NON Natural Mono 300 and FK Roman Standard 300). If they cannot be licensed, keep the roles, the uppercase transform, the 10px mono labels and the negative tracking; the exact substitute is not measured.

## Layout

The page is 1280px wide with a scroll height of 13353px at desktop. The stylesheet defines an 8-column grid: `--layout-columns-count: 8`, `--layout-columns-gap: 8px`, `--layout-margin: 12px`, `--layout-width: calc(100vw - var(--layout-margin)*2)`. Spacers are declared as variables from `--spacer-4` through `--spacer-180`: 4, 6, 8, 12, 14, 16, 24, 32, 34, 48, 64, 88, 128 and 180px.

Measured gaps are 8px (147 uses), 4px (80), 12px (44), 6px (8) and 16px (2); paddings are 12px (210 uses), 24px (9), 8px (6), 4px and 88px. Content hugs the 12px page margin: in the capture, paragraphs start at the left margin, labels sit in a narrow left column, and the main paragraph sits in a wider right column beside a mono label. Horizontal hairline rules mark section starts. The first 600px or so of the page is a centred full-viewport hero; the corner letters sit at the four corners.

## Elevation & Depth

There is no elevation. No box shadow was recorded on any element. Depth is faked with translucent layers and a dim dot-matrix map behind the wordmark; separation is by 1px-style hairlines in #f2f2f21a rather than by fills. The only shadow in the shipped CSS corpus is an `inset 0 0 0 1000px var(--black)` rule, a field background override and not a visual effect, and is not part of the brand look.

## Shapes

The shape language is rectangular and technical. The only radius measured is 4px (4 elements), on small controls such as the top control bar. Everything else, including rules, tiles and the page, has square corners. Small plus marks, dots and four-square glyphs act as ornaments. Hairline borders (#f2f2f21a, #f2f2f23d, #f2f2f20f, plus #fa4c14 on 2 elements) outline modules instead of filled shapes.

## Components

**Top control bar.** A compact dark module with ">|<" at left, five small orange dots in the centre and "MENU" at right, set in 10px mono. Radius 4px.

**GUI toggle.** A second module "GUI / four-square glyph / OPEN" in the same mono label style, located below the wordmark.

**Navigation / footer letters.** The nav and footer blocks each have 12px 0px padding and carry the 40px serif corner letters (D and F top, L and Y bottom), measured 82px and 60px high.

**Section header.** Orange numeral (01), hairline rule, white 16px uppercase grotesk title (ABOUT) and a mono label (SEC-01).

**Text blocks.** 16px FK Roman Standard 300 in #7d7d7d, with a mono label such as ETHOS beside the paragraph.

**Links and list items.** Posts are listed with a mono category label (for example "OPINION"), a title and an excerpt, in #f2f2f2 at 10px mono with 0.4px tracking.

**Inputs.** A 14px-high, 232px-wide text field in the mono label style was measured; no buttons were detected.

## Design System Architecture

No public or official design system exists for this site: no design-system, brand-guidelines or press-kit link was found on the pages opened (https://dragonfly2.studiofreight.dev/ with its navigation and footer links). The de-facto system comes from the shipped code. The single stylesheet is loaded from `/_nuxt/style.6J80TM5E.css`, so the page is a Nuxt build, and its custom properties include colours (`--orange`, `--pink`, `--purple`, `--mid-grey`, `--black`), spacing (`--spacer-*`), layout (`--layout-*`) and easing curves.

The easings are declared by name: `--ease-in-out-back` cubic-bezier(.68,-.55,.265,1.55), `--ease-out-quad` cubic-bezier(.25,.46,.45,.94), `--ease-in-out-quart` cubic-bezier(.77,0,.175,1) and `--ease-in-back` cubic-bezier(.6,-.28,.735,.045). Motion was not recorded for this file, so how they are used is not described.

## Do's and Don'ts

Do keep the page black with #7d7d7d long copy and #f2f2f2 titles. Do use orange #fa4c14 only for the wordmark, section numerals and small indicators. Do set labels in 10px uppercase mono with 0.4px tracking. Do keep tracking negative on large type. Do divide sections with 1px hairlines at 10% off-white.

Don't add shadows, gradients as surfaces or rounded cards; only 4px radii on small controls were measured. Don't fill large areas with pink or violet; they appear on tiny areas. Don't use sentence-case buttons: the measured text roles are uppercase. Don't treat the autofill shadow override as a design effect.

## Responsive Behavior

The 390px mobile pass recorded text sizes only: 16px (4163 characters), 18px (799), 10px (354), 40px (71), 36px (67) and 56px (18). Compared with desktop, the 24px lines read as 18px, the 85.5px lines as 40px, the 39px lines as 36px and the 152.5px lines as 56px. Body text stays 16px/17.28px at 390px and the nav block remains 82px high. Grid changes and the menu behaviour on small screens are not measured.

## Iteration Guide

Start with canvas #000000, ink #7d7d7d, ink-strong #f2f2f2, primary #fa4c14. Lay out on the 8-column grid with a 12px margin and 8px gaps. Use uppercase FK Roman Standard 300 for paragraphs, NON Natural Grotesk 16px for titles and NON Natural Mono 10px for labels. Add hairlines in #f2f2f21a, pin serif corner letters to the viewport corners, and keep orange to a few marks. Re-measure before adding translucent layers from the alpha ladders.
