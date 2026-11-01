---
version: alpha
name: European Union
category: "Government & Nonprofit"
description: "European Union portal home page built on the Europa Component Library: Arial 16px body with 42px and 36px regular headings, EU blue #0e47cb on white and #f3f6fc bands, yellow #ffcc00 card bars, 4px and 8px radii and blue-tinted shadows."
colors:
  accent-yellow: "#ffcc00"
  primary-dark: "#0a328e"
  canvas: "#ffffff"
  ink: "#171a22"
  primary: "#0e47cb"
  surface-2: "#f3f6fc"
  surface-3: "#f2f5f9"
  ink-3: "#191d26"
  ink-5: "#515560"
  ink-6: "#444444"
  link: "#0b39a2"
  button-secondary-border: "#eeeeee"
  link-bg: "#cfdaf5"
typography:
  display:
    fontFamily: arial, sans-serif
    fontSize: 42px
    fontWeight: 400
    lineHeight: 52px
  heading:
    fontFamily: arial, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 44px
  body:
    fontFamily: arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: Inter, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
rounded:
  xs: 4px
  sm: 8px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 13px
  s9: 16px
  s10: 20px
components:
  button-secondary:
    textColor: "{colors.ink-6}"
    typography: "{typography.button-secondary}"
    padding: 0px 7px
    height: 28px
    borderColor: "{colors.button-secondary-border}"
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.link}"
    typography: "{typography.body}"
    padding: 16px 8px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-3}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 12px 16px 12px 12px
    height: 48px
    borderColor: "{colors.ink-5}"
    boxShadow: rgba(9, 49, 142, 0.08) 0px 2px 4px 0px inset, rgba(9, 49, 142, 0.04) 0px 0px 10px 0px inset, rgba(9, 49, 142, 0.04) 0px 4px 5px 0px inset, rgba(9, 49, 142, 0.04) 0px -4px 4px 0px inset
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(9, 49, 142, 0.08) 0px 2px 4px 0px, rgba(9, 49, 142, 0.04) 0px 0px 10px 0px, rgba(9, 49, 142, 0.04) 0px 4px 5px 0px, rgba(9, 49, 142, 0.04) 0px -4px 4px 0px
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
    boxShadow: rgba(9, 49, 142, 0.04) 0px 3px 5px 0px, rgba(9, 49, 142, 0.04) 0px 0px 18px 0px, rgba(9, 49, 142, 0.04) 0px 6px 10px 0px, rgba(9, 49, 142, 0.04) 0px -4px 4px 0px
---

# European Union

## Overview
The measured page, https://european-union.europa.eu/index_en, is the English home page of the European Union portal, titled "Your gateway to the EU, News, Highlights | European Union". The H1 is "Your gateway to the European Union". It is 3,390px tall at 1280px. At the top a light grey strip reads "An official website of the European Union" with a "How do you know?" disclosure and an EU flag. Below it, a white header carries the flag-and-text logo "European Union", an English language selector with a globe icon and a wide search field ending in a blue square search button. A saturated blue navigation bar (Home, Principles, countries, history; Institutions, law, budget; Priorities and actions; Live, work, study; News and events; Contact the EU) follows, then a wide photograph hero with a flag-triangle at its bottom right corner.

Content bands: "Explore the EU" with three photo cards (History of the EU, EU countries, Institutions and bodies); "Featured news" on a pale blue band with three news cards that give type, date and a "1 min read" label, and a note that "All featured news are available in the 24 EU official languages via machine translation"; "Learn more" with a grid of outlined teaser cards such as "What's in your suitcase?" and "European Union priorities 2024-2029". Voice: institutional, plain and informative, with explicit accessibility and language cues. A cookie consent container was present and hidden for the measurement.

## Colors
- **Canvas `#ffffff`** is the page ground; **`colors.surface-2` `#f3f6fc`** is the pale blue band behind "Featured news" and the footer (1,778 area), and **`colors.surface-3` `#f2f5f9`** is a second pale grey-blue.
- **Ink `#171a22`** is a near-black navy for body text; **`colors.ink-3` `#191d26`** is used on nav; **`colors.ink-5` `#515560`** is the input border and muted text; **`colors.ink-6` `#444444`** is the secondary button text.
- **Primary `#0e47cb`** is EU blue, used for the navigation bar, the search button, link text and card titles (641 characters of text); **`colors.link` `#0b39a2`** is the darker link tone on pale teaser backgrounds, with **`colors.link-bg` `#cfdaf5`** as its pale tint; **`colors.primary-dark` `#0a328e`** is the dark blue declared as `--wt-c-p-130`.
- **`colors.accent-yellow` `#ffcc00`** is the small yellow bar above each card title (measured in the CSS corpus, 12 uses), echoing the stars on the flag.
- **`colors.button-secondary-border` `#eeeeee`** is the hairline grey.

Other measured values include the warning orange `#ff8133` (`--wt-ecl-color-warning-100`) and a green `#00a174`; they are status colours and are not used on the measured home screen. The search button hover was measured as rgb(62, 108, 213) over the base blue.

## Typography
Text is set in **Arial** (declared as `arial, sans-serif`) with Inter for small controls. `typography.display` is Arial 42px / 400 / 52px (the H1, also measured at 42px on mobile); `typography.heading` is 36px / 400 / 44px ("Explore the EU", "Featured news"); `typography.body` is 16px / 400 / 24px (2,310 characters at 16px); `typography.button-secondary` is Inter 14px / 400 / 22px. Other measured sizes are 24px (card titles), 20px and 14px. Only weights 400 and 700 occur, and weight 700 appears in just 6 characters; hierarchy is made with size and blue colour, not bold. The root variables define the scale with names such as `--ecl-font-6xl` (2.625rem / 3.25rem), `--fs-4xl` (36px), `--wt-f-p-l` (20px / 28px) and `--wt-ecl-font-ui-s` (14px / 24px).

## Layout
A centred container holds a three-column card grid (Explore the EU, Featured news) and a two-column grid for the "Learn more" teasers, each separated by gaps of 32px (9 uses) or 24px. The hero is a full-width image band under the nav. Paddings are mostly 24px (28 uses), 16px and 8px. A pale blue full-width band separates news from the surrounding white sections, and a thin dark rule sits above "Read more news". Density is moderate and text is left-aligned.

## Elevation & Depth
Cards float with a stacked, very low-opacity blue-tinted shadow: `rgba(9, 49, 142, 0.08) 0px 2px 4px 0px, rgba(9, 49, 142, 0.04) 0px 0px 10px 0px, rgba(9, 49, 142, 0.04) 0px 4px 5px 0px, rgba(9, 49, 142, 0.04) 0px -4px 4px 0px`, measured on 12 elements (`components.card`). A heavier variant adds `rgba(9, 49, 142, 0.08) 0px 11px 15px 0px` and wide 46px blur layers; an inset version is used inside the search field. Every shadow is tinted with the EU blue's RGB (9, 49, 142) rather than black.

## Shapes
`rounded.xs` is 4px (inputs, buttons; 211 uses in the corpus) and `rounded.sm` is 8px (cards, 13 measured on the page). The search button is rounded only on its outer right side (0px 4px 4px 0px) and joins the input; the corpus also lists 2px, 12px and 100px radii. The flag triangle and the yellow bars are straight-edged accents.

## Components
- **Search**: input 48px tall, 4px radius, `#515560` border, 12px 16px 12px 12px padding and an inset blue-tinted shadow, joined to a blue `#0e47cb` square button with a white magnifier; hover lightens it.
- **Main navigation**: blue bar with white 16px labels and chevrons; the Home item sits on a pale fill.
- **Card** (`components.card`): white, 8px radius, image on top, a short yellow bar, a blue 24px title and body text.
- **News card**: adds a meta line (Press release | 6 October 2026) and a "1 min read" clock label.
- **Teaser card**: outlined white card with a yellow bar, a blue title and two to three lines of text.
- **Link** (`components.link`): blue underline-free text; on tinted backgrounds the `#0b39a2` link on `#cfdaf5`.
- **Secondary button** (`components.button-secondary`): 28px tall, Inter 14px, `#eeeeee` border.
- **Footer**: `#f3f6fc` surface with the card shadow set.

## Design System Architecture
The EU's home page is built on the Europa Component Library (ECL); the ECL site at https://ec.europa.eu/component-library/ describes itself as "a comprehensive style guide containing the design elements and visual standards" for Europa digital properties. That page was opened and read; it states no colours, typefaces or tokens, so no per-token citations are taken from it. The shipped CSS confirms the ECL naming: root variables such as `--ecl-font-6xl`, `--ecl-line-height-4xl` (2.75rem), `--ecl-spacing-l` (1.5rem), `--ecl-font-ui-m`, `--ecl-color-error-5` (#fef2f5) and `--ecl-color-dark-alpha-950`, and a second `--wt-*` layer (`--wt-c-p-130`, `--wt-ecl-color-warning-100`) from the web toolkit that also supplies the cookie consent container.

## Do's and Don'ts
- Do use EU blue `#0e47cb` for navigation, links and card titles on white and pale blue.
- Do mark each card with a small `#ffcc00` bar above its title.
- Do tint shadows with the blue (9, 49, 142) at 4% to 8% opacity.
- Do state language and reading time explicitly ("1 min read", "24 EU official languages").
- Don't use Arial bold for headings; the system uses regular weight at large sizes.
- Don't use the warning orange or green as brand colours.
- Don't use neutral black shadows or rounded pills; the measured radii are 4px and 8px.
- Don't hide the "official website" strip at the top.

## Responsive Behavior
The 390px mobile pass recorded the H1 at 42px in Arial, the same size as desktop, with body 16px (2,168 characters), 24px, 14px and 20px, and a 32px heading size in place of the desktop 36px. Navigation, grid columns and breakpoints were not measured on mobile, so none are described.

## Iteration Guide
1. Start from `colors.canvas`, `colors.ink` and `colors.primary`; use `colors.surface-2` as an alternating band colour.
2. Use `typography.display` once per page and `typography.heading` per band.
3. Build every card with the 8px radius, the yellow bar and the blue-tinted shadow.
4. Keep body text at 16px with a 24px line height and links in blue.
5. Verify with `node web/scripts/verify-designs.mjs --slug=european-union`.
6. Measure an inner page with the extractor before adding tokens, and consult the ECL site for component specifications.
