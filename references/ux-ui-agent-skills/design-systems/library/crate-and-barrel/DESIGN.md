---
version: alpha
name: Crate & Barrel
category: "Home & Furniture"
description: "Crate & Barrel's US storefront: a white #ffffff canvas with #222222 ink, square #222222 'Shop' buttons with #ffffff 600-weight 16px labels, everything set in the proprietary Crate Helvetica (400/600), 0px-radius fields and buttons, lowercase 33.783px editorial headlines over full-bleed lifestyle photography, and a #f7f7f7 footer."
colors:
  canvas: "#ffffff"
  ink: "#222222"
  primary: "#222222"
  on-primary: "#ffffff"
  primary-hover: "#111111"
  surface-footer: "#f7f7f7"
  surface-muted: "#f0f0f0"
  promo-slate: "#556877"
  ink-muted: "#666666"
  text-red: "#ff3d3d"
  ink-black: "#000000"
  error-red: "#bb0000"
  success-green: "#007b00"
typography:
  display:
    fontFamily: "\"Crate Helvetica\", \"Helvetica Neue\", Helvetica, Arial"
    fontSize: 33.783px
    fontWeight: 600
    lineHeight: 33.783px
    letterSpacing: "-0.896px"
  display-mobile:
    fontFamily: "\"Crate Helvetica\", \"Helvetica Neue\", Helvetica, Arial"
    fontSize: 25px
    fontWeight: 600
    lineHeight: 25px
    letterSpacing: "-1px"
  section-heading:
    fontFamily: "\"Crate Helvetica\", \"Helvetica Neue\", Helvetica, Arial"
    fontSize: 26.6682px
    fontWeight: 600
    letterSpacing: "-0.512px"
  body:
    fontFamily: "\"Crate Helvetica\", \"Helvetica Neue\", Helvetica, Arial"
    fontSize: 15.4px
    fontWeight: 400
    lineHeight: 20.02px
  button:
    fontFamily: "\"Crate Helvetica\", \"Helvetica Neue\", Helvetica, Arial"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
  nav:
    fontFamily: "\"Crate Helvetica\", \"Helvetica Neue\", Helvetica, Arial"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: "\"Crate Helvetica\", \"Helvetica Neue\", Helvetica, Arial"
    fontSize: 21.3318px
    fontWeight: 600
    lineHeight: 21.3318px
    letterSpacing: "-0.256px"
  input:
    fontFamily: "\"Crate Helvetica\", \"Helvetica Neue\", Helvetica, Arial"
    fontSize: 16px
    fontWeight: 400
rounded:
  none: 0px
  xs: 6px
  sm: 30px
  md: 40px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 3.41px
  s5: 3.5px
  s6: 4.66px
  s7: 5px
  s8: 7.13px
  s9: 7.14px
  s10: 8px
  ds-4: 12px
  ds-5: 16px
  ds-6: 24px
  ds-7: 32px
  ds-8: 40px
  ds-10: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 40px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 40px
  hero-link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 0px 62.2368px 0px 0px
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 5px 102.857px 5px 16px
    height: 48px
    borderColor: "{colors.ink-muted}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 24px 0px 50px
---

# Crate & Barrel

## Overview

The measured site is the Crate & Barrel US storefront at https://www.crateandbarrel.com/ (page title "Modern Furniture Store, Home Decor & Wedding Registry | Crate & Barrel"). It is a catalogue-like retail page, 14,845px tall at a 1280px viewport, built almost entirely out of full-bleed lifestyle photography interrupted by short white bands that carry a lowercase section title. The capture taken in the holiday season shows Thanksgiving tables, dark green kitchen appliances from a "CAFÉ × Caraway" collaboration, Christmas living rooms, a Hanukkah collection, a wallpaper launch and Crate & Kids / The Knot registry promotions. The art direction is warm, interior and editorial: wood, linen, candlelight, deep greens and burgundies inside the photographs, while the interface chrome itself stays strictly black, white and grey.

The UI is deliberately quiet so that the product photography carries colour. Every interactive control measured is square (0px radius), every label and heading is set in a single proprietary sans, "Crate Helvetica", and the only filled call-to-action colour is #222222. Microcopy is short and lowercase for headlines ("the thanksgiving hosting guide", "all you need to set the scene", "more to complete the room", "you may also like") and imperative title case for buttons ("Shop New Kitchen Arrivals", "Shop Dining Furniture", "Shop Now"). Sentence-case headlines also appear ("Bring home every merry detail.", "Find something special at every price.", "All good things start with a love story."), so the voice mixes a soft lowercase whisper with full-stop declaratives.

## Colors

The palette is neutral by design; product imagery supplies the colour.

- **canvas #ffffff** — body background and the white separator bands between photo modules (measured `desktop.roles.canvas`).
- **ink #222222** — the most-read text colour and also the fill of every measured CTA (`primary` and `ink` are the same value). The site's own design-system variable `--ds-primary-dark` resolves to `34 34 34`, the same #222222, and `--br-black` is `#222`.
- **on-primary #ffffff** — CTA label colour, also hero headline colour over photography.
- **primary-hover #111111** — the shipped variable `--ds-button-primary-background-hover: #111`; hover was not observed on a measured CTA, so treat it as the system's declared value.
- **surface-footer #f7f7f7** — the footer background (`desktop.roles.footer`).
- **surface-muted #f0f0f0** — a measured background area used for light panels.
- **promo-slate #556877** — the background of the 113px promotional band directly under the black utility strip (band 2 at y 254), carrying sale messages such as "up to 30% off the dining room event".
- **ink-muted #666666** — secondary text and the 1px border of the search field; matches `--ds-secondary-80` (`102 102 102`).
- **text-red #ff3d3d** — a measured text colour; it is low-volume and its exact placement was not isolated.
- **ink-black #000000** — a small amount of pure-black text.
- **error-red #bb0000** and **success-green #007b00** — the design system's `--ds-red-100` and `--ds-green-100` variables (`--ds-alert` and `--ds-text-color-error` point to the red). These are status colours declared in shipped CSS, not observed on the home page.

The brand palette variables `--br-navy #3b4458`, `--br-sage #687368`, `--br-blush #8b7065` and the seasonal `--br-HolidayCore*` set (blue #354574, gold #d5b487, green #37543a, red #8e1537) are present in root CSS; they were not measured as rendered fills on the home page, so they are listed here as context only and not as tokens.

## Typography

One family does everything: **Crate Helvetica**, a custom-named web font served from `/Styles/Crate/fonts/HelveticaNeueW05/` (the extractor recorded two woff2 files) with the stack `"Crate Helvetica", "Helvetica Neue", Helvetica, Arial`. The loaded faces are 400 and 600; `--ds-webfont-primary-font-weight-bold` is 600, so "bold" on this site means semibold. The CSS corpus also declares "ITC Century Book" and "Open Serif" font faces, but neither was measured on rendered text.

- **display** — 33.783px / 600 / 33.783px line height, letter-spacing -0.896px. Used for every hero headline, mostly lowercase and white over photography.
- **section-heading** — 26.6682px / 600 with -0.512px tracking, for white-band titles such as "all you need to set the scene".
- **link** — 21.3318px / 600 / -0.256px, the large white promotional links inside hero blocks.
- **body** — 15.4px / 400 / 20.02px.
- **button** — 16px / 600 / 16px, no transform, normal tracking.
- **nav** — 14px / 400 / 20px, the header and footer link size.
- **input** — 16px / 400.

The negative tracking grows with size (‑0.256px at 21.33px, ‑0.512px at 26.67px, ‑0.896px at 33.78px), giving the headlines a tight, compact Helvetica look. Fractional sizes come from fluid scaling; the design-system variables underneath use round steps (`--ds-font-size-xs` 11px, `sm` 12px, `md` 14px, `lg` 16px, `xl` 22px; titles 14/16/20/24/32/40px).

**Substitute:** Crate Helvetica is proprietary. Its own fallback chain names Helvetica Neue, then Helvetica, then Arial; use that chain at weights 400 and 600.

## Layout

The page is a vertical stack of 27 measured bands. The header occupies the first 214px on white, followed by a 40px #222222 utility strip and the 113px #556877 promo band. After that the rhythm alternates: a full-bleed photo module (336px to 1,969px tall) and a short white band of 64–78px holding a lowercase heading aligned left at x 64. Product rails ("explore more of what's new", "you may also like") sit inside 64px side margins with up to six columns; the two editorial grids ("Bring home every merry detail.", "Find something special at every price.") measure four columns between x 64 and x 1216, so content width is 1152px inside a 1280px viewport.

The design system ships a spacing ladder: `--ds-spacing-1` 2px, `-2` 4px, `-3` 8px, `-4` 12px, `-5` 16px, `-6` 24px, `-7` 32px, `-8` 40px, `-9` 48px, `-10` 64px, `-11` 80px, `-12` 128px, plus `--edge-spacing: 32px`. The tokens above keep the small measured paddings (1px–8px) and add the ladder steps that match the measured gaps (12, 16, 24, 32, 40) and the 64px margin. Density is low in the photo modules and moderately high in the header and footer, which use 14px text in multi-column link lists.

## Elevation & Depth

The surface is almost flat. Only one box-shadow was measured on rendered elements, `rgba(0, 0, 0, 0.15) 0px 4px 10px 0px`. The design system also declares `--ds-box-shadow-default: 0px 0px 8px 2px rgba(0, 0, 0, 0.1)` with matching `-top` and `-bottom` variants for sticky edges. Depth on the page comes from photography and from translucent white overlays measured as `#ffffffcc` and `#ffffffb3` backgrounds, which sit on top of images to hold text. There are no card borders or raised tiles in the product rails: products sit directly on white.

## Shapes

Rectangles dominate. The primary and secondary CTAs, the search input, nav links and the footer are all 0px; the design-system variable `--ds-field-border-radius` is 0. Rounded values do exist but on small accessories: 6px, 30px, 40px, 50% and 1000px were measured (the last two are circular icon buttons and pill chips; `--gsa--button--border-radius` is 50%). Keep corners square on anything that sells or takes input, and reserve round shapes for icon buttons and carousel controls.

## Components

- **button-primary** — #222222 fill, #ffffff 16px/600 label, 0px radius, 40px tall, no border, no shadow; measured on "Shop New Kitchen Arrivals" (257px wide). The shipped variables set the hover fill to #111 and the disabled fill to `--ds-secondary-30` (#cccccc).
- **button-secondary** — the measured secondary CTA ("Shop Dining Furniture") is identical to the primary. The design system's own secondary variant is white with a `--ds-secondary-80` (#666666) border and #222222 text; that variant was not measured on the home page.
- **hero-link** — white 21.3318px/600 link text laid over photography, with 62.2368px right padding reserving space for an arrow.
- **nav / nav-link** — the header is transparent over white with #222222 14px/400 links, 40px tall link targets; 15 header links were visible at desktop and a "Orders & Sign In" menu toggle. Hover on the rewards link adds an underline (measured hover state).
- **text-input** — the search field: white, 1px solid #666666 border, 0px radius, 48px tall, 16px text, padding 5px 102.857px 5px 16px (the right padding holds the search and camera icons).
- **footer** — #f7f7f7 background, #222222 text with #666666 secondary lines, padding 24px 0 50px, 723px tall, four columns of 14px links headed by uppercase labels such as "CRATE & BARREL HISTORY".

## Design System Architecture

Crate & Barrel's public website does not link to a public design system or brand guidelines, and the about page could not be opened (HTTP 403, recorded in SOURCES.json). There is no public system documentation cited here. The shipped CSS, however, exposes a structured internal system through custom properties on the root of https://www.crateandbarrel.com/:

- a `--ds-*` namespace for the design system: colour primitives as RGB triplets (`--ds-primary-dark`, `--ds-primary-light`, `--ds-secondary-00` … `-80`, `--ds-red-*`, `--ds-green-*`), semantic aliases (`--ds-alert`, `--ds-text-color-error`, `--ds-background-color-inverted`), component tokens (`--ds-button-primary-*`, `--ds-button-secondary-*`, `--ds-button-tertiary-*`, `--ds-field-*`, `--ds-select-*`), typography shorthands (`--ds-title-xs-standard` through `--ds-title-xl-emphatic`, `--ds-body-lg-standard-tight`, eyebrows with .14em/.16em tracking) and a 13-step spacing scale;
- a `--br-*` namespace for brand and seasonal palettes (navy, sage, blush, holiday core and holiday kids sets);
- a `--gsa--*` namespace for a smaller component set (button font size 14px, -0.15px tracking, 50% radius).

The two-layer pattern, primitives as RGB triplets and components that reference them through `rgb(var(...))`, means any new component should reference the `--ds-` component tokens rather than raw hex.

## Do's and Don'ts

- Do let photography carry the colour; keep chrome to #ffffff, #222222, #666666 and #f7f7f7.
- Do set every heading in Crate Helvetica 600 with negative tracking, lowercase for editorial headlines.
- Do keep CTAs, inputs and selects square (0px) and filled #222222 with white 16px/600 labels.
- Do use the white 64–78px separator bands with a left-aligned heading between photo modules.
- Don't introduce a coloured brand CTA; the measured site has none.
- Don't round buttons or fields; reserve 50% and pill shapes for icon controls and chips.
- Don't use bold 700 for headings; the system's bold is 600 (700 appears only in footer labels).
- Don't add shadows to product tiles; the measured rails are flat on white.
- Don't treat the seasonal `--br-Holiday*` colours as permanent UI colours.

## Responsive Behavior

The mobile pass at 390px measured: the hero headline at 25px/600 with -1px tracking (from 33.783px desktop); section titles at 21.33px; body text at 13.2px / 17.16px (from 15.4px); the primary CTA at 13.5px/600, still #222222 with white text. The mobile header is 58px tall with a #ffffff background, 2 header links visible plus a menu toggle. The mobile footer band is #f7f7f7. Photo modules remain full-bleed in the mobile capture with heading bands between them. The shipped stylesheets declare breakpoints at 768px (min/max), 1024px, 767px, 1023px and 1200px among others. Menu drawer behaviour was not measured.

## Iteration Guide

1. Start every new screen on #ffffff with #222222 text in Crate Helvetica (fallback Helvetica Neue).
2. Pick headline sizes from the measured set: 33.783px display, 26.6682px section, 21.3318px link; drop to 25px and 21.33px at 390px.
3. Use `button-primary` for every purchase action; never add a second colour CTA.
4. For forms, reuse `text-input`: 48px, 1px #666666 border, 0px radius, 16px text.
5. Space with the `--ds-spacing` ladder (8/12/16/24/32/40/64px) and keep 64px page margins at 1280px.
6. Use #f7f7f7 for the footer and #f0f0f0 for quiet panels; reach for #556877 only for a full-width promo strip.
7. When adding status messages, use the shipped `--ds-red-100` #bb0000 and `--ds-green-100` #007b00.
8. Re-measure before adding any new colour from photography; the system colours are the ones listed above.
