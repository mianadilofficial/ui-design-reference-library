---
version: alpha
name: Thermo Fisher Scientific
category: "Healthcare & Wellness"
description: "Thailand storefront of Thermo Fisher Scientific: Helvetica Neue at light 100 weight 50px hero and 16px body, white canvas, charcoal ink #222222, brand red #e71316 for primary buttons, link blue #0071d0, 3 to 4px radii and a single soft card shadow."
colors:
  canvas: "#ffffff"
  ink: "#222222"
  primary: "#e71316"
  primary-hover: "#c40003"
  link-hover: "#005daa"
  link-blue: "#0071d0"
  surface-light: "#f7f7f7"
  surface-gray: "#eeeeee"
  ink-muted: "#54545c"
  ink-black: "#000000"
  ink-strong: "#1b1b1d"
  hairline: "#d3d3d3"
  nav-text: "#444444"
  text-input-text: "#333333"
  card-border: "#e5e5e5"
typography:
  display:
    fontFamily: "\"Helvetica Neue\", Helvetica, Roboto, \"Segoe UI\", Arial, \"sans-serif\""
    fontSize: 50px
    fontWeight: 100
    lineHeight: 63px
  display-mobile:
    fontFamily: "\"Helvetica Neue\", Helvetica, Roboto, \"Segoe UI\", Arial, \"sans-serif\""
    fontSize: 40px
    fontWeight: 100
    lineHeight: 51px
  heading:
    fontFamily: HelveticaNeue, "Helvetica Neue", Roboto, "Segoe UI", Arial, "sans-serif"
    fontSize: 22px
    fontWeight: 500
    lineHeight: 28px
  body:
    fontFamily: "\"Helvetica Neue\", Helvetica, Roboto, \"Segoe UI\", Arial, \"sans-serif\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  nav:
    fontFamily: HelveticaNeue, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
  input:
    fontFamily: Arial
    fontSize: 14px
    fontWeight: 400
    lineHeight: 28px
rounded:
  xs: 3px
  sm: 4px
  md: 11px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 0px 90px 0px 22px
    height: 48px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.card-border}"
    boxShadow: rgba(34, 34, 34, 0.1) 0px 4px 6px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    padding: 40px 0px 0px
---

## Overview

This DESIGN.md documents the Thailand English storefront of Thermo Fisher Scientific: the queued URL https://www.thermofisher.com redirected to https://www.thermofisher.com/th/en/home.html, titled "Thermo Fisher Scientific - TH". It is a global life-science and laboratory-instrument supplier selling through a catalogue-and-search commerce site, so the page is dense, utilitarian and image-led.

The measured home screen shows a deep indigo promotional hero ("Advancing your instruments advances you / Trade in any qPCR or dPCR instrument when upgrading to a new system") with a red "Learn more" button, three white overlapping promo cards ("Trade in your instruments", "Explore the latest knowledge in qPCR innovation", "Ready to embrace the future") with blue text links, then content bands named Featured Education, Accelerating Science (blog posts), Support centers, Promotions and New products. Product photography is studio-lit instrument shots, with scientist portraits on promotions. A black "Give Feedback" tab and a round accessibility button are overlays and not brand UI.

The header is a white commerce bar: a red logo block, a "Search All" dropdown joined to a long search field with a magnifier, then "Order Status", "Quick Order", "Sign in" and a cart. Copy is plain and task-oriented ("Request a quote", "Learn more", "Explore now", "Read more").

## Colors

The brand red is `#e71316` (CSS custom property `--red-50`, aliased `--brand-primary`, `--button-primary-bg`, `--button-commerce` and `--button-attention-bg`) and appears 1110 times in the stylesheet. Its hover is `#c40003` (`--red-60`, `--button-primary-bg-hover`). The extractor measured the red button background area on screen (`#e71316`, weight 5) but did not flag a CTA role, so primary was reassigned from the generated blue to red based on the site's own tokens; the generated action colour `#0071d0` is kept as `link-blue` (`--blue-40`, `--text-link`, `--button-outline-label`), with `#005daa` (`--blue-50`) for link hover.

- Canvas `#ffffff`; surface-light `#f7f7f7`; surface-gray `#eeeeee`.
- Ink `#222222` (943 characters), ink-muted `#54545c` (601), ink-strong `#1b1b1d`, ink-black `#000000`, nav text `#444444`, input text `#333333`.
- Hairline `#d3d3d3`, card border `#e5e5e5`.
- Additional measured area colours: `#ed7700` (orange badge, "SPECIAL OFFER"), `#555759`.
- The stylesheet publishes a 299-variable palette (ramps such as `--red-60`, `--teal-40` `#05819d`, `--green-60` `#005512`, `--steel-blue-100` `#13161f`, `--sapphire-05` `#dfeeff`, `--yellow-30` `#f79905`) and per-product-line brand colours (`--brands-allergy-heavy` `#3b3a7d`, `--brands-celiac-heavy` `#024253`, `--brands-binding-light` `#feeb18`).

## Typography

Helvetica Neue (loaded as `HelveticaNeue` weights 400, 500, 700 and `Helvetica Neue` 100, 300, 500, 700) is the system face: 1098 characters measured. Metropolis appears for 121 characters (the 14px/-0.06px text).

- Display: 50px/63px, weight 100 (the hero heading in white); mobile 40px/51px.
- Heading: 22px/28px, weight 500 ("Featured Education").
- Body: 16px/22px, weight 400.
- Nav: 14px/22px weight 400 (nav bar line-height 50px, weight 500).
- Input: Arial 14px/28px.
- Other measured sizes: 11px (287 characters), 18px, 30px, 20.6704px. Weights present: 400 (933), 500 (733), 700 (487), 100 (104), 300 (60).

Font stack: "Helvetica Neue", Helvetica, Roboto, "Segoe UI", Arial, sans-serif. No substitute is needed because system fallbacks are part of the stack.

## Layout

The page is a 1280px desktop layout with a 124px header block, full-width colour hero, overlapping cards and 3 or 4-column content grids (the capture shows 3 promo cards, 4 promotion tiles, 3 new-product tiles). Footer: white, 457px tall, padding `40px 0px 0px`, bold 14px column headings (Ordering, Order Status, Order Help, Quick Order, Supply Center). The stylesheet's spacing scale is `--spacing-00` 0px, `-01` 2px, `-02` 4px, `-03` 8px, `-04` 12px, `-05` 16px, `-06` 24px, `-07` 32px, `-08` 40px, `-09` 48px, `-12` 96px. Measured paddings are 16px (39), 8px, 32px, 22px and 12px; gaps 5px.

## Elevation & Depth

One shadow is measured: `rgba(34, 34, 34, 0.1) 0px 4px 6px 0px`, applied to the overlapping promo cards (3 occurrences). Everything else is flat, separated by 1px grey lines (`#d3d3d3`, `#e5e5e5`, `#dcdcdc`). Cards overlap the hero's lower edge to create the only real layering.

## Shapes

Radii measured: 4px (23 occurrences), `4px 4px 0px 0px` (8, card image tops), 3px (7), `0px 4px 4px 0px` (4), 11px (3), 50% (1) and the input's `0px 3px 3px 0px`. Tokens: 3px, 4px, 11px and a circle. The overall character is square with a small softened corner.

## Components

- Nav: white background, `#444444` text, 14px. Nav links `#1b1b1d`; hover changes `#222222` to `#1b1b1d` (measured).
- Search input: 48px high, 390px wide, text `#333333`, Arial 14px, padding `0px 90px 0px 22px`, radius `0px 3px 3px 0px` joined to the dropdown.
- Promo card: white, 4px radius, border `#e5e5e5`, shadow above, blue bold link at the bottom.
- Primary button: red `#e71316` fill, white label (per site tokens `--button-primary-label`); radius not measured.
- Footer: white, ink `#1b1b1d`.

## Design System Architecture

No separate public design-system site was opened. The shipped CSS is the system: it defines roughly 299 custom properties on the root in semantic tiers (colour ramps like `--blue-40`, then aliases such as `--text-primary`, `--text-link`, `--background-primary`, `--border-subtle-01`, then component tokens `--button-primary-bg`, `--button-secondary-bg` `var(--gray-60)`, `--button-outline-border`, `--button-info-*`, `--button-commerce`, `--button-disabled-*`). Source: https://www.thermofisher.com/th/en/home.html (extractor measurement of the stylesheet). Names such as `--layer-heavy-01` and `--dark-mode-50` show the system also defines a dark-mode ramp; its use on the site was not measured.

## Do's and Don'ts

- Do use red `#e71316` for primary, commerce and attention buttons, and blue `#0071d0` for text links.
- Do keep hairline separators instead of heavy borders.
- Do use the 16px/22px body and 14px/22px navigation sizes.
- Do use the single card shadow only on overlapping promo cards.
- Don't use red for text links or blue for primary buttons.
- Don't add heavy shadows or radii above 11px.
- Don't style the feedback tab or accessibility overlay as brand UI.

## Responsive Behavior

Mobile (390px) measured: h1 40px/51px (from 50px/63px), body 14px (from 16px); most-used mobile sizes are 14px (1050 characters), 16px (805), 16.354px (99), 28px (66), 12px (63) and 22px (60). Breakpoint widths and grid column counts on mobile were not measured.

## Iteration Guide

1. Start from `#ffffff`, `#222222` and Helvetica Neue.
2. Add the red `#e71316` only to primary buttons; links stay `#0071d0`.
3. Build cards with 4px radius, `#e5e5e5` border and the one measured shadow.
4. Use the `--spacing-*` scale for gaps.
5. Gate: `node web/scripts/verify-designs.mjs --slug=thermo-fisher`.

### Measured reference

All figures in this block are verbatim from the desktop extraction (weight in parentheses is the measured character, area or occurrence weight).

- Font families by characters: HelveticaNeue (1098), Helvetica Neue (1098), Metropolis (121).
- Font sizes by characters: 16px (965), 14px (545), 11px (287), 18px (197), 30px (126), 20.6704px (99), 22px (60), 50px (38).
- Font weights by characters: 400 (933), 500 (733), 700 (487), 100 (104), 300 (60).
- Letter spacing by size: 14px/-0.06px (121).
- Text colours by characters: #222222 (943), #54545c (601), #ffffff (387), #0071d0 (184), #000000 (121), #1b1b1d (71), #444444 (10).
- Background colours by area: #ffffff (4494), #f7f7f7 (444), #eeeeee (147), #ed7700 (6), #e71316 (5), #efefef (5), #005daa (2), #555759 (0).
- Border radii: 4px (23), 4px 4px 0px 0px (8), 3px (7), 0px 4px 4px 0px (4), 11px (3), 50% (1), 4px 0px 0px 4px (1), 0px 3px 3px 0px (1), 0px 0px 4px 4px (1).
- Box shadows: rgba(34, 34, 34, 0.1) 0px 4px 6px 0px (3).
- Border colours: #d3d3d3 (9), #e5e5e5 (3), #dcdcdc (2), #ffffff (1), #c9c8c8 (1), #222222 (1).
- Gaps: 5px (2).
- Paddings: 16px (39), 8px (7), 32px (5), 22px (5), 12px (4), 9px (3), 15px (3), 4px (3), 10px (3), 5px (3), 3px (2), 2px (2).
- Stylesheet colours by count: #ffffff (2205), #e71316 (1110), #1b1b1d (866), #54545c (782), #e5e5e5 (728), #0071d0 (706), #f7f7f7 (703), #cccccc (631), #92929e (488), #222222 (432), #005daa (316), #c40003 (170), #dcdcdc (165), #0092f3 (138).
- Stylesheet font sizes: 24px, 32px, 16px, 14px, 8px, 18px, 12px, 22px, 30px, 20px, 26px, 40px, 13px, 11px.
- Stylesheet radii: 4px, 3px, 5px, 0px, 10px, 20px, 11px, 2px, 12.5px, 15px.
- Fonts loaded: HelveticaNeue 400 normal, Helvetica Neue 400 normal, HelveticaNeue 500 normal, HelveticaNeue 700 normal, Helvetica Neue 100 normal, Helvetica Neue 300 normal, Helvetica Neue 500 normal, Helvetica Neue 700 normal.
- Visible elements: 520; document language: en; hover states recorded: 5.
