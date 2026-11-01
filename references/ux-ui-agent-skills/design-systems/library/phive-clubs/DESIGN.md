---
version: alpha
name: "Phive Clubs"
category: "Product & SaaS"
description: "Phive Clubs (phive.pt/en) is a dark warm-black #161003 fitness-club site with saturated yellow #ffe000, all-uppercase PPFormula and AcidGrotesk at weight 400, 29.392px rounded slabs and a white pill outline button."
colors:
  canvas: "#161003"
  page-body: "#ffd904"
  ink: "#ffe000"
  primary: "#ffe000"
  white: "#ffffff"
  ink-pale: "#fff4a6"
  black: "#000000"
typography:
  display:
    fontFamily: PPFormula
    fontSize: 52.287px
    fontWeight: 400
    lineHeight: 52.287px
    letterSpacing: "-0.52287px"
    textTransform: uppercase
  display-mobile:
    fontFamily: PPFormula
    fontSize: 36px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: "-0.36px"
    textTransform: uppercase
  heading:
    fontFamily: PPFormula
    fontSize: 267.525px
    fontWeight: 400
    lineHeight: 267.525px
    letterSpacing: "-5.3505px"
    textTransform: uppercase
  subheading:
    fontFamily: PPFormula
    fontSize: 27.784px
    fontWeight: 400
    lineHeight: 27.784px
    letterSpacing: "-0.27784px"
    textTransform: uppercase
  body:
    fontFamily: AcidGrotesk
    fontSize: 20.094px
    fontWeight: 400
    lineHeight: 24.1128px
    letterSpacing: 0.20094px
    textTransform: uppercase
  link:
    fontFamily: PPFormula
    fontSize: 11.335px
    fontWeight: 400
    lineHeight: 12.4685px
    letterSpacing: 0.6801px
    textTransform: uppercase
rounded:
  xs: 29.39px
  pill: 9999px
spacing:
  s1: 6px
  s2: 8px
  s3: 8.76px
  s4: 10.76px
  s5: 12px
  s6: 14.76px
  s7: 16px
  s8: 16.19px
  s9: 18px
  s10: 18.86px
components:
  button-secondary:
    textColor: "{colors.white}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 21.608px 35.568px
    height: 58px
    borderColor: "{colors.white}"
  link:
    textColor: "{colors.white}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 21.608px 35.568px
    borderColor: "{colors.white}"
---

## Overview

Phive Clubs is the Portuguese fitness-club brand whose English home page (phive.pt/en) carries the title "Phive — It's not just fitness. It's living fully". The measured page is a dark, warm-black canvas (#161003) lit by a single saturated yellow (#ffe000), with a full-bleed photographic hero of an instructor in a Lisbon metro corridor, then a large yellow rounded "slab" holding the stacked words ACTIVATE YOUR SENSES with a brush-script overlay reading "PUSH YOUR LIMITS". Everything typographic is uppercase. The page reads as a nightclub-meets-gym poster: huge condensed display type, thin hand-drawn yellow curves running across the dark field, and a scattered mosaic of small portrait photographs of the clubs (pools, spa, cycling room, lounge) behind a giant "PHIVE" wordmark.

The home page sections, as read from the page, are: hero, "Train every day" (opening hours 06:30am to 10pm), sign-up prompt, "Choose your club", a list of what the clubs hold (heated pool, sauna, Turkish bath, jacuzzi, weight and cardio room, private Pilates studio, group classes), Fitness, Classes ("The most exciting classes, created by top instructors"), the Phive App, and socials. Clubs named on the page are 5 de Outubro (Lisbon), Boavista (Porto), Coimbra Celas, Coimbra Lágrimas and Leiria. Navigation labels are Homepage, Clubs, Classes, Fitness Hub and Timetable, with a Português / English switch. The footer credits the agency Büro.

## Colors

The palette is yellow on near-black with a few supporting neutrals. All values below come from `web/data/extracted/phive-clubs.json`.

- **canvas `#161003`**: the warm dark brown-black that fills the dark sections (about 9,847 area-weight units against 11,592 for yellow).
- **primary / ink `#ffe000`**: the saturated yellow used for body copy on dark, the big slab behind the headline, and the outlines. It is the most prominent brand color.
- **page-body `#ffd904`**: the warmer yellow measured as the body background in the extraction.
- **ink-pale `#fff4a6`**: a pale yellow used for secondary text (242 characters).
- **white `#ffffff`**: headings on the photographic hero and the outline button text and border.
- **black `#000000`**: a minor text color (7 characters).

The site's own root variables name a wider palette: `--color-darkBrown #161003`, `--color-midBrown #211e16`, `--color-lightBrown #3c3627`, `--color-yellow #ffe000`, `--color-warmYellow #ffd904`, `--color-subduedYellow #f6c548`, `--color-lightYellow #fff4a6`, `--color-warmGrey #f3efd7`, `--color-red #ff004d`, and three program colors `--color-nutrition #d9f7bb`, `--color-stream #b76eff`, `--color-pilates #f7bbce`. These are declared in the shipped CSS; they are not all visible on the home page, so only the measured ones are tokenised here. Text colors by weight: #161003 (543 characters, dark text on yellow slabs), #ffe000 (354), #fff4a6 (242), #ffffff (120).

## Typography

Three families are loaded: PPFormula (828 characters, headings, links and labels), AcidGrotesk (433 characters, body) and PureHeart (5 characters, the brush script "PUSH YOUR LIMITS" overlay). Every weight measured is 400; hierarchy comes from size and letter-spacing, not weight. All text is `text-transform: uppercase`.

- **display** (hero h2 "TRAIN EVERY DAY"): PPFormula 52.287px / 52.287px, letter-spacing -0.52287px. On the 390px mobile pass the same role measures 36px / 36px, letter-spacing -0.36px (`display-mobile`).
- **heading**: PPFormula 267.525px / 267.525px, letter-spacing -5.3505px. An oversized poster size used for the repeated "TRAIN EVERY DAY" band. Mobile measures 114px / 114px, letter-spacing -2.28px.
- **subheading** (h3, "COIMBRA, LEIRIA, LISBON AND PORTO"): PPFormula 27.784px / 27.784px, letter-spacing -0.27784px.
- **body**: AcidGrotesk 20.094px / 24.1128px, letter-spacing 0.20094px. Mobile body measures 16px / 19.2px, letter-spacing 0.16px.
- **link** (button labels such as SIGN UP): PPFormula 11.335px / 12.4685px, letter-spacing 0.6801px.

Tight negative tracking on display sizes and slightly positive tracking on small sizes is the measured pattern in the letterSpacingBySize frequencies (for example 27.784px/-0.27784px and 20.094px/0.20094px). No font-license source was opened and no substitute is recorded from the site. When reproducing without the licensed files, use a tall condensed grotesque for PPFormula and a neutral grotesque for AcidGrotesk, and say so in the handoff.

## Layout

The measured page is 1280px wide with a scroll height of 13,873px, so it is a very long single scroll. The root variables declare breakpoints `--xxsmall 410px`, `--xsmall 743px`, `--small 1023px`, `--medium 1290px`, `--large 1440px`, `--xlarge 1700px`, `--xxlarge 2000px`, a 16-column grid (`--grid-col-width 6.25%`), a maximum grid width of `106.25rem`, and a side menu width of `326px`.

Spacing tokens in the tokens file are measured paddings and gaps: 6px, 8px, 8.76px, 10.76px, 12px, 14.76px, 16px, 16.19px, 18px and 18.86px. The most frequent gaps are 89.928px (18 occurrences), 8px, 12px, 6px and 23.088px; the most frequent paddings are 8.764px, 8px and 23.088px. Sections alternate between full-bleed photography and flat dark fields. Content is centered: the intro line "PHIVE HAS CLUBS LOCATED IN COIMBRA, LEIRIA, LISBON, AND PORTO. GET TO KNOW EACH ONE!" sits in a narrow centered column under the headline slab, and the photo mosaic is a loose grid of small portrait tiles with deliberate empty cells.

## Elevation & Depth

No box shadows were measured (`boxShadows` is empty). Depth is created by layering instead: the yellow slab sits over the dark field, the brush-script text overlaps the slab and the headline, the large "PHIVE" wordmark overlaps the photo mosaic, and thin yellow curve lines pass behind the slab. Borders measured are #ffffff (5), #ffff0080 (5), #ffff001a (5), #161003 (2) and #fff4a6 (1), all 1px-class outlines rather than elevation cues. A floating dark bar with the PHIVE logo, a menu icon on the left and a sound-wave icon on the right sits over the bottom of the hero image.

## Shapes

Two radii were measured: 29.392px (4 elements), the soft-cornered slab and tile shape, and `100%` (1 element), the pill outline button. The tokens file records them as `xs: 29.39px` and `pill: 9999px`. The shipped CSS also declares smaller radii (4px, 5px, 3px, 30px, 8px, 6px, 1px, 20px, 10px, 2px) that are not tied to a measured home-page element here. The headline slab has a notched, stepped silhouette with rounded corners, a distinctive shape that is part of the identity.

## Components

- **button-secondary / link (SIGN UP)**: transparent fill, 1px solid #ffffff border, white PPFormula 11.335px uppercase label, padding 21.608px 35.568px, height 58px, width 122px, fully rounded (pill). No filled primary button was detected by the extractor, so the tokens declare the outlined button only.
- **Headline slab**: yellow #ffe000 block with dark #161003 PPFormula text, rounded at 29.392px.
- **Photo tiles**: small portrait photos on the dark canvas, with no measured shadow.
- **Bottom bar**: dark bar with the logo, a menu control and an audio control, floating on the hero.
- **App badges**: Apple Store and Google Play badges are listed in the page text. Their styling is not measured.

The phone-number field styles in the root variables (`--iti-*`) belong to a third-party telephone-input plugin and are not brand tokens.

## Design System Architecture

No public design system, brand guideline or press kit was found: the home page links only to a Portugal 2030 operations PDF and an agency credit (Made by Büro), neither of which is a brand guide. The de-facto system is visible in the shipped CSS custom properties on `:root`: named color variables (`--color-darkBrown`, `--color-yellow`, `--color-lightYellow` and others), named breakpoint variables (`--xsmall` to `--xxlarge`), a column-based grid (`--grid-col-width`, `--grid-max-width`), and `--body-backgroundColor #161003`. Source of those values: https://phive.pt/en (measured by `web/scripts/extract-tokens.mjs`). The system is therefore a small named palette of browns and yellows, one uppercase typographic voice, and a rounded-slab shape language.

## Do's and Don'ts

- Do keep the canvas #161003 and use #ffe000 as the single loud color; use #fff4a6 only for secondary copy.
- Do set all text uppercase with weight 400 and let size carry hierarchy.
- Do use negative letter-spacing on PPFormula display sizes and slightly positive spacing on AcidGrotesk body.
- Do use the pill outline (1px #ffffff, 21.608px 35.568px padding) for sign-up style actions.
- Don't add shadows; none are measured.
- Don't use bold weights; only 400 is measured.
- Don't document or reuse the phone-input plugin colors (#ccc, #999, #555) as brand colors.
- Don't use the red #ff004d, declared in root variables, as a primary action color: it was not measured on a visible home-page element.

## Responsive Behavior

Only the 390px mobile pass of the extraction is used. Measured on mobile: the hero heading is 36px / 36px (-0.36px), the oversized band heading is 114px / 114px (-2.28px), and body text is 16px / 19.2px (0.16px). The most-read mobile sizes are 23.067px (198 characters), 16px (182), 114px (156), 14px (95), 22px (80) and 24px (55). The mobile pass found no primary CTA and no nav role. The CSS declares breakpoints at 410px, 743px, 1023px, 1290px, 1440px, 1700px and 2000px. Layout reflow, menu behavior and image treatment on mobile are not measured.

## Iteration Guide

1. Start from canvas #161003, ink #ffe000, and PPFormula/AcidGrotesk at weight 400, uppercase.
2. Build the hero as a full-bleed photo with a small dark floating bar, then a dark section with a #ffe000 rounded slab (29.392px) holding the headline.
3. Use the measured sizes only: 52.287px display, 27.784px subheading, 20.094px body, 11.335px labels, 267.525px for the poster band.
4. For actions use the white 1px pill outline at height 58px.
5. Re-run `node web/scripts/verify-designs.mjs --slug=phive-clubs` after any token rename; never change a measured value.
6. Unmeasured items to confirm before claiming them: hover states (none recorded), dark/light themes, mobile menu behavior.
