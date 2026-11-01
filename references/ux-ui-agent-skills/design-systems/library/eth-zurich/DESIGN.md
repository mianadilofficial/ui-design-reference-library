---
version: alpha
name: ETH Zurich
category: "Education"
description: "ETH Zurich German home page: DINPro in a single family (16px body, 32px lead heading), black ink on white with pale cyan #e7f4f7 washes, teal #007894 labels, a red #b7352d callout, ETH blue #215caf theme and square 2px corners."
colors:
  brand-blue: "#215caf"
  news-red: "#b7352d"
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ffea00"
  surface-2: "#e7f4f7"
  surface-3: "#222222"
  ink-3: "#00000099"
  ink-4: "#007894"
  hairline: "#22222233"
  footer-text: "#6f6f6f"
typography:
  display:
    fontFamily: DINPro, helvetica, arial, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
  display-mobile:
    fontFamily: DINPro, helvetica, arial, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.8px
  heading:
    fontFamily: DINPro, helvetica, arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: DINPro, helvetica, arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: DINPro, helvetica, arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22px
  input:
    fontFamily: DINPro, helvetica, arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
rounded:
  xs: 2px
spacing:
  s1: 3px
  s2: 6px
  s3: 8px
  s4: 9px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-secondary:
    textColor: "{colors.surface-3}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 14px 32px 13px
    height: 51px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.surface-3}"
  nav-link:
    textColor: "{colors.surface-3}"
    typography: "{typography.heading}"
  text-input:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    padding: 6px 24px 6px 12px
    height: 33px
  footer:
    textColor: "{colors.footer-text}"
    padding: 0px 0px 16px
---

# ETH Zurich

## Overview
The measured page is the German-language home page of ETH Zürich, https://ethz.ch/de.html (document title "ETH Zürich - Homepage | ETH Zürich", language de); the queued address https://www.ethz.ch redirected to it, and the page is the institution's own home page with real content, so it is documented as measured. It is 8,022px tall at 1280px. A thin near-black utility bar (`#222222`) carries "ETH Zürich", a "Departemente" menu, "Leichte Sprache" and a language selector "Deutsch". Beneath it sits the black wordmark "ETH zürich" (heavy "ETH" beside a light "zürich") and a main navigation in 16px DIN: News & Veranstaltungen, Die ETH Zürich, Studium, Doktorat, Forschung, Wirtschaft & Wissenstransfer, Campus, plus a search icon.

The first content block is a large documentary photograph (a King of Sweden visit) with a red callout box overlapping its lower right edge: "König von Schweden besucht ETH Zürich" and a chevron link "Auf den Spuren des Schweizer Innovationsmodells". Next comes a "News" section of photo cards with small teal category labels (ROBOTIK, MASCHINENBAU, ENERGIEWISSENSCHAFTEN, WELTRAUMFORSCHUNG, ARCHITEKTUR) and dates, an outlined "Alle anzeigen" button, and "An der ETH studieren" with three teal cards whose photographs overhang the card edge. The tone is sober, factual and institutional.

## Colors
- **Canvas `#ffffff`** is the page ground; **`colors.surface-2` `#e7f4f7`** is a pale cyan wash covering a large share of area (2,383), and **`colors.surface-3` `#222222`** is the near-black of the utility bar, the footer and text inputs.
- **Ink `#000000`** is pure black body text (3,015 characters); **`colors.ink-3` `#00000099`** is 60% black for secondary text; **`colors.footer-text` `#6f6f6f`** is the footer grey.
- **`colors.ink-4` `#007894`** is the teal used for category labels, text links and the three study cards' fill (measured as a background area of 601).
- **Primary `#ffea00`** is the bright yellow measured as text on dark and teal surfaces (62 characters), as generated. No solid button fill was detected on the page, so this yellow is an accent on dark ground rather than a button color.
- **`colors.brand-blue` `#215caf`** is the ETH blue declared as `--color-theme` in the root variables, with tints at 10, 20, 40, 60, 80 and a 120 shade `#08407e`; **`colors.news-red` `#b7352d`** is the fill of the hero callout box.
- **`colors.hairline` `#22222233`** is the 20% border used on the outlined button.

The extractor also found a Swiper carousel default (`--swiper-theme-color` #007aff), which is a library default and not an ETH color.

## Typography
A single family, **DINPro** (declared with helvetica, arial, sans-serif fallbacks), covers every character of the page; icons come from Material Icons Outlined and a custom EthzIcons font. `typography.display` is 32px / 400 / 38.4px (the lead news heading), `typography.display-mobile` is 24px / 400 / 28.8px (the measured mobile h1), `typography.heading` is 20px / 400 / 24px, `typography.body` is 16px / 400 / 24px, `typography.button-secondary` is 16px / 500 / 22px and `typography.input` is 14px / 400.

Weights measured are 400 (4,593 characters), 500 and 700 (card headlines are bold). Category labels are 12px uppercase with 1px letter spacing, in teal. Headings are not very large: the biggest measured size is 40px. DINPro is licensed; a DIN-style grotesque such as a condensed DIN alternative is a substitute where it is unavailable.

## Layout
The grid is declared in root variables: `--grid-colums` 4, `--grid-gutter-width` 1rem and a column-width formula that subtracts the gutters, so the content area is a four-column grid. The news section uses two large cards then three smaller ones, all with 16:9-like photographs and text below. The study cards are three equal columns. The hero photograph is narrower than the page container and its red callout overhangs it to the right. Measured gaps are 40px (12 uses) and 32px; paddings include 8px, 24px, 32px and 96px for large sections. Density is moderate with generous white margins.

## Elevation & Depth
No box shadows were measured. Depth is created by overlap: the red callout sits over the photograph, the category label tab sits over the lower left of each news image, and the study-card photographs overhang the teal card edge. Surfaces are flat colour fields (white, pale cyan, teal, near-black).

## Shapes
The geometry is square. `rounded.xs` is 2px and appears only twice; the CSS corpus lists 2px (27 uses), 4px, 8px and 50px values for small controls and icons. Cards, photographs, callouts and the button are sharp-cornered rectangles. The outlined "Alle anzeigen" button measures 51px tall with 14px 32px 13px padding and a hairline border (`components.button-secondary`).

## Components
- **Button (secondary, outlined)**: white fill, `#222222` text at 16px weight 500, 2px radius, 51px high, 1px hairline `#22222233`. Used for "Alle anzeigen".
- **Main navigation**: 16px DINPro links in black separated by space, no underline; `components.nav-link` is 20px DINPro on the dark utility bar.
- **Utility bar**: near-black strip with white labels and a department dropdown.
- **News card**: photograph, overhanging teal uppercase label on a white tab, bold 16px headline, grey date. Hover on a category label changes its text and border from teal to black.
- **Hero callout**: red `#b7352d` box with a 32px-scale white headline and a chevron link.
- **Study card**: teal fill with white text, an overhanging photograph and a white heading.
- **Text input** (`components.text-input`): `#222222` fill, white 14px text, 33px tall, padding 6px 24px 6px 12px.
- **Footer**: `#6f6f6f` text on the footer band.

## Design System Architecture
No public design-system or brand-guideline documentation was located from the pages opened; the only page read was the home page, https://ethz.ch/de.html, measured by the extractor. The shipped CSS shows a themed system with root variables: `--color-theme` (#215caf) with numbered tints (`--color-theme-10` #e9eff7, `-20` #d3deef, `-40` #a6bedf, `-60` #7a9dcf, `-80` #4d7dbf, `-120` #08407e), a four-column grid (`--grid-colums`, `--grid-gutter-width`, `--grid-column-width`), `--room-row-height` of 100px and Swiper variables. The variable names are generic (`--color-theme`), not ETH-specific, which is the only naming evidence recorded.

## Do's and Don'ts
- Do use DINPro for everything and vary only size and weight (400, 500, 700).
- Do keep corners square and borders hairline.
- Do tag news with a small uppercase teal category label.
- Do use the red `#b7352d` callout once per page over a hero photograph.
- Don't add drop shadows; depth is by overlap only.
- Don't round cards or buttons beyond 2px.
- Don't use the Swiper default blue #007aff.
- Don't place yellow `#ffea00` on white; it is measured only on dark or teal surfaces.

## Responsive Behavior
The 390px mobile pass measured the headline at 24px (`typography.display-mobile`) and a character distribution led by 18px, 14px, 20px, 16px, 24px and 12px type. The desktop headline is 32px. Navigation behaviour, grid column changes and breakpoints were not measured on mobile and are not described.

## Iteration Guide
1. Begin with white canvas, black text, and `colors.brand-blue` for theme tints; use teal `colors.ink-4` for labels and links.
2. Use `typography.display` for the lead item and `typography.heading` for section titles such as "News".
3. Keep every component rectangular with at most 2px radius.
4. Use a photograph plus an overlapping coloured box to create emphasis.
5. Verify with `node web/scripts/verify-designs.mjs --slug=eth-zurich`.
6. Measure an inner page, such as a department page, before adding tokens.
7. Write copy in the measured institutional voice: short factual headlines ("Reifen statt Steckdose: Elektrobusse laden sich während der Fahrt auf"), dates in DD.MM.YYYY form, and chevron-led links such as "Auf den Spuren des Schweizer Innovationsmodells".
8. Choose real documentary photography of people, machines and campus buildings; the capture shows no illustration and no stock gradients.
