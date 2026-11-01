---
version: alpha
name: Allianz
category: "Banking & Insurance"
description: "Allianz Group global home page: Allianz Neo typeface at 18px/400, blue #003781 text and filled buttons with 8px radius, pale aqua #f1f9fa bands, navy #122b54 cards and flat shadowless layout."
colors:
  canvas: "#ffffff"
  ink: "#003781"
  primary: "#003781"
  on-primary: "#ffffff"
  button-on-dark: "#ffffff"
  surface-tint: "#f1f9fa"
  ink-link-blue: "#3f72b1"
  navy-deep: "#122b54"
  surface-aqua: "#cfe9ee"
  surface-mist: "#eef6f6"
  border-pale: "#c3d7e9"
  on-dark-button-hover: "#dbeaf5"
typography:
  display:
    fontFamily: "\"Allianz Neo\", sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  display-mobile:
    fontFamily: "\"Allianz Neo\", sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 28px
  subheading:
    fontFamily: "\"Allianz Neo\", sans-serif"
    fontSize: 26px
    fontWeight: 600
    lineHeight: 32px
  body:
    fontFamily: "\"Allianz Neo\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
  button:
    fontFamily: "\"Allianz Neo\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
rounded:
  xs: 2px
  sm: 4px
  md: 8px
spacing:
  s1: 6px
  s2: 14px
  s3: 16px
  s4: 20px
  s5: 22px
  s6: 24px
  s7: 30px
  s8: 32px
  s9: 36px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 14px
    height: 34px
    borderColor: "{colors.primary}"
  button-on-dark:
    backgroundColor: "{colors.button-on-dark}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 14px
    height: 34px
    borderColor: "{colors.button-on-dark}"
  button-on-dark-hover:
    backgroundColor: "{colors.on-dark-button-hover}"
  button-outlined:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 14px
    borderColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

# Allianz

## Overview
The measured page is the global English home page of the Allianz Group at allianz.com/en.html (document language en-GB; title "Insurance and Asset Management worldwide | Allianz"). It is a corporate group site, not a product shop: a white header with the Allianz wordmark and circular logo, a secondary row of links (About us, Investor Relations, Media Center, Jobs, Sustainability, Economic Research) and a Search control, then a full-width dark-blue hero for a campaign ("Why do we feel alone in a connected world? Inside the Allianz Sense of Community study") with collage-style photographs of people, a three-card news carousel on a pale aqua tint, four navy shortcut buttons (Media Center, 3am Report, Mobility, AI at Allianz) and an Investor Relations block of aqua and navy cards.

The look is calm and institutional: one blue (#003781) carries all text, buttons and outlines, on white and pale aqua surfaces, with photography and short quotations in yellow on navy tiles providing the only warmth.

## Colors
- **canvas** `#ffffff`: header and card background (5356 area weight).
- **ink** and **primary** `#003781`: Allianz blue. It is the text color of 6732 measured characters, the fill of the filled buttons, and the outline color of outlined buttons. Text is therefore blue, not black.
- **on-primary** `#ffffff`.
- **surface-tint** `#f1f9fa`: the pale aqua page band behind the news carousel (3543 area weight); **surface-mist** `#eef6f6` and **surface-aqua** `#cfe9ee` (the light Investor Relations card) are neighbouring tints.
- **navy-deep** `#122b54`: the dark card and hero-area background (908 area weight).
- **ink-link-blue** `#3f72b1`: a lighter blue text color (52 characters).
- **border-pale** `#c3d7e9`: a hairline border.
- **button-on-dark** `#ffffff` with **on-dark-button-hover** `#dbeaf5`: the white button used on dark photographic bands (the detected first CTA, "Read the article"). The extractor assigned this white button as primary; it is kept under this name because the filled-blue button is the standard action elsewhere on the page.
The site publishes a large two-tier token set in root variables (core colors such as `--core-color-aqua-800` `#005885`, `--core-color-purple-200` `#F9E1ED`, `--core-color-yellow-100` `#FEF5CD`, `--vibrant-orange` `#ff934f`, and semantic ones such as `--semantic-color-selection-surface-attention-hover` `#00266D`); only the colors above are measured in use on this page.

## Typography
One proprietary family, "Allianz Neo", sans-serif, loaded at 400, 600 and 700, plus an icon font "Allianz-Icons". No substitute is published on the pages opened.
- **display** 20px / 600 / 28px (hero statement); on the 390px mobile pass 24px / 600 / 28px (**display-mobile**).
- **subheading** 26px / 600 / 32px (card titles).
- **body** 18px / 400 / 26px.
- **button** 16px / 700 / 20px.
Character counts: 18px (5282), 16px (907), 24px (785), 26px (169), 40px (152), 20px (138), 12px (134). The `--heading-03-mobile-font-size` variable is 26px and `--heading-03-letter-spacing` is .3px. The measured section heading "Investor Relations" appears at 40px.

## Layout
Measured at 1280px wide; the header block (logo row plus link row) is 156px tall. The hero is a full-width band; below it three equal news cards sit in a 24px-margin grid with a pager ("1 / 10") and arrows, followed by four centered 8px-radius shortcut buttons. Spacing tokens come from measured paddings and gaps (6, 14, 16, 20, 22, 24, 30, 32, 36, 40px). Root variables include `--margin-s` 8px, `--margin-xxxxl` 40px and `--core-dimension-2000` 80px.

## Elevation & Depth
Flat. Cards are white or tinted rectangles without shadows. The only measured shadows are focus rings (`0 0 0 2px #fff, 0 0 0 6px #009de6` and variants using `--accessibility-focus-color`) and `0 2px 4px #41414180`. Depth comes from color bands and photography.

## Shapes
Measured radii: 8px (18 uses; all buttons), 2px (8) and 4px (3). News and investor cards are square-cornered; buttons are 8px with a 1px border in their own color.

## Components
- **button-primary**: `#003781` fill, white text, 16px / 700, 8px radius, padding 6px 14px, height 34px (measured on "Explore opportunities for students"); on mobile the navy "Media Center" button measures 358px by 50px with 14px 30px padding.
- **button-on-dark**: white fill and border, blue text, same size; hover `#dbeaf5`.
- **button-outlined**: transparent, 1px `#003781` border, 8px radius, 14px / 700 ("Allianz Contacts"; also "Sense of Community Hub" in white on the hero).
- News card: image on top with quote overlays, blue 26px headline, date line, 18px description in blue.
- Investor Relations tiles: aqua card with arrow links ("More", "Results") and a navy "Results 2Q 2026" card with a white "More" button.

## Design System Architecture
The site ships a layered token system in its root custom properties: core scales (`--core-color-*`, `--core-dimension-*`), semantic aliases (`--semantic-color-*`, `--semantic-dimension-*`, `--semantic-inset-*`) and per-component tokens (`--button-emphasis-active-text-color`, `--tab-item-color`, `--switcher-checked-icon-color`, `--checkbox-selected-border-color`, `--tooltip-pointer-width`, `--heading-03-*`, `--price-info-*`, `--license-plate-*`, `--rating-label-*`). About 400 variables were read from the page. No public brand-guideline page was found: the home page markup contains no brand, design or guideline link, so the system is documented from this shipped CSS only.

## Do's and Don'ts
- Do set text, buttons and outlines in `#003781`.
- Do use white buttons only on dark photographic or navy bands.
- Do use 8px radius on buttons and square corners on cards.
- Do pair headlines at 600 weight with 18px body at 400.
- Don't use black text; the page's text is blue.
- Don't add drop shadows; separation is by tint bands.
- Don't use the hidden skip-link styles as navigation.

## Responsive Behavior
Measured at 390px: the h2 is 24px / 600 / 28px, the body paragraph 18px / 400 / 26px in a 243px column, and the main action is the full-width navy "Media Center" button (358px by 50px, 8px radius, 14px 30px padding). Breakpoint values and menu behavior were not measured.

## Iteration Guide
1. Start from white, `#003781` and `surface-tint`.
2. Use filled blue for actions, white-on-dark for hero actions.
3. Keep headings at 600 and buttons at 700 in Allianz Neo (or a neutral sans if unavailable).
4. Use quotes in yellow on navy photo tiles only as in the capture.
5. Verify new values against `web/data/extracted/allianz.json`.

## Imagery and Voice
Photography is human and documentary: people hugging, a group on grass, a child running in the Community study; editorial tiles show executives with a pull quote beside a yellow quotation mark, and an aerial car-and-crosswalk image for the mobility story. Headlines are sentence case, informative and neutral ("We are thinking too narrowly about solutions", "Liability and Safety: The Keys to Autonomous Mobility"), each with a date such as "August 24, 2026" and a two to five line summary. Calls to action are plain verbs: "Read the article", "More", "Results".

## Page Composition Notes
The capture reads top to bottom as five bands. First, a white header of two rows separated by a thin divider: the upper row holds the logo at left and, at right, "Products & Services", a globe icon with EN and DE language links and the outlined "Allianz Contacts" button; the lower row holds the six section links at 14px to 16px in blue and a Search link with a magnifier icon. Second, the dark-blue hero with a textured background, a white "COMMunity" wordmark graphic and a collage of three photographs, with two stacked buttons at left. Third, the aqua news band with equal-height cards, where the shortest card still stretches to the row height, leaving white space below the text. Fourth, a row of four navy shortcut buttons centered under the pager. Fifth, the Investor Relations heading in 40px blue followed by a staggered row of tiles: a light aqua tile, a navy tile, an empty gap, and a photographic tile for the "Investor Relations AI Assistant".

Every text link uses the same blue, and arrow icons, not underlines, signal links inside tiles. Date lines sit between headline and summary in the same blue at body size, so the only hierarchy cues are size, weight and spacing.
