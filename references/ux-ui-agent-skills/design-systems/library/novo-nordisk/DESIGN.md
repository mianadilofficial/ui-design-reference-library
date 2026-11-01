---
version: alpha
name: "Novo Nordisk"
category: "Pharma"
description: "Novo Nordisk corporate site measured live: deep navy #00008f on white #ffffff, a pale aqua #bfffff surface, the proprietary Novo typeface at 15px/24px body, pill buttons with 85px radius and full-bleed human photography."
colors:
  canvas: "#ffffff"
  ink: "#00008f"
  primary: "#00008f"
  surface-2: "#bfffff"
  ink-3: "#000000"
typography:
  display:
    fontFamily: Novo, "Noto Sans", Arial, sans-serif
    fontSize: 26px
    fontWeight: 700
    lineHeight: 32px
  display-mobile:
    fontFamily: Novo, "Noto Sans", Arial, sans-serif
    fontSize: 22px
    fontWeight: 700
    lineHeight: 26px
  heading:
    fontFamily: Novo, "Noto Sans", Arial, sans-serif
    fontSize: 64px
    fontWeight: 400
    lineHeight: 72px
  subheading:
    fontFamily: Novo, "Noto Sans", Arial, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 36px
  body:
    fontFamily: Novo, "Noto Sans", Arial, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Novo, "Noto Sans", Arial, sans-serif
    fontSize: 15px
    fontWeight: 600
    lineHeight: 20px
  link:
    fontFamily: Novo, "Noto Sans", Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 3px
  sm: 85px
  md: 100px
spacing:
  s1: 20px
  s2: 28px
  s3: 30px
  s4: 40px
  s5: 60px
  s6: 88px
  s7: 120px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 0px 40px
    height: 50px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
    padding: 0px 0px 0px 30px
    transform: matrix(1, 0, 0, 1, 180, 0)
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

# Novo Nordisk

## Overview

The Novo Nordisk global site (novonordisk.com) is a pharmaceutical corporate portal that opens with a full-bleed photographic hero rather than a product shot. The measured page is dominated by large portraits of smiling people outdoors, with a white `NovoCare®` heading, one short sentence of supporting copy and a single outlined pill button reading "Get started today". The scheme is restrained: white `{colors.canvas}` for reading surfaces, a deep navy `{colors.ink}` (#00008f) for all body text, and a pale aqua `{colors.surface-2}` (#bfffff) as the one tinted surface. The same navy is declared by the site as `--primary-color`, and the typeface is declared by `--site-font-family: Novo`.

Copy on the page is corporate and clinical in the news area (trial names, congress names, regulatory notes) and aspirational in the hero ("every small win matters just as much as the weight loss itself"). The navigation lists Therapy areas, Science & technology, Partnering, Sustainable business, Careers, About us and Our products, with a secondary row for Investors, News & media, Healthcare professionals and Contact us, all as seen when the page was opened.

## Colors

The measured palette is very small. Background area is split between `#ffffff` (3007 weight), `#bfffff` (1256), `#00008f` (598) and `#005ad2` (179). Text color by character count is `#00008f` (1634) and `#ffffff` (1062), with a negligible `#000000`. White text is used over photography and on the navy footer; navy text is used on white and aqua.

- `canvas` #ffffff: the page background where text is read.
- `ink` / `primary` #00008f: body text, headings in the news area, links and the footer fill.
- `surface-2` #bfffff: pale aqua panel background, measured as the second-largest background area.
- `ink-3` #000000: a minor black text use.

The extractor also saw `#005ad2` as a background (the blue bar of a loading dialog in the capture) and a `#00ffff` border and `#939aa7` border color. These were not promoted into tokens because they appear once each and the blue bar belongs to a loading overlay, not to brand UI.

## Typography

One family carries everything: Novo, a proprietary face loaded in 400, 600 and 700 weights plus 400 and 700 italics (the loaded-font list from the measurement). The fallback stack is `Novo, "Noto Sans", Arial, sans-serif`. No other text family was measured (Novo accounts for 2710 of the counted characters).

- `display` 26px / 32px, weight 700: the h1 `NovoCare®` heading in the hero (22px / 26px at the 390px mobile measurement, `display-mobile`).
- `heading` 64px / 72px, weight 400: the h2 "Latest news" section title, a light, very large display size. At 390px the h2 measured 48px / 52px.
- `subheading` 20px / 36px, weight 700.
- `body` 15px / 24px, weight 400: the most-read size by characters (1664), followed by 13px (554) and 17px (183).
- `nav` 15px / 20px, weight 600.
- `link` 16px, weight 400.

A very tight letter-spacing of -5px was recorded for a 102px display run (6 characters), so oversized numerals or words exist on the page; no token is declared for it because only that single measurement exists.

## Layout

The page height at 1280px is 4731px with 352 visible elements, so it is a short page built from a handful of tall, full-width bands. The captured sections alternate photograph bands of equal height, each carrying a heading, a paragraph and a button aligned to the left at roughly the same inset. Measured paddings are 20px, 28px, 30px, 40px, 60px, 88px and 120px (`spacing` s1 to s7), which show a scale that runs from small control padding (40px horizontal inside buttons) up to very large band padding (120px). There is no measured gap data (the gaps list is empty), so grid gutters are not documented.

## Elevation & Depth

Depth comes from photography and overlay, not from shadow. Only one box shadow was measured: `rgba(147, 154, 167, 0.3) 0px 0px 150px 0px`, a very wide, soft grey halo that appears on a single element. No card elevation scale exists in the measured data. Text sits directly on the photographs in white; no scrim token was measured, so none is documented.

## Shapes

Radius is the defining shape rule. Measured radii are 85px (7 elements), 100px (2) and 3px (1). The 85px and 100px values are pill-shaped controls (the button is 50px tall, so either value renders as a full capsule), and 3px is a small corner on a minor element. The circular menu button in the capture is a white circle with a navy hamburger icon. The `rounded` tokens are `xs` 3px, `sm` 85px and `md` 100px.

## Components

- **button-secondary**: the one measured button. White text (`{colors.canvas}`) in the 16px link style, a white 1px border, 85px radius, 50px height and 0px 40px padding, sitting transparent on photographs. The hero label is "Get started today". No filled primary button was detected by the extractor, so none is declared.
- **link**: white 16px weight-400 text over imagery.
- **nav / nav-link**: white 15px weight-600 items (for example "Therapy areas") placed over the hero, with 30px left padding on the nav container.
- **footer**: navy `{colors.ink}` background with white text.

The hover states list was empty, so hover behavior is not measured.

## Design System Architecture

No public design system or brand guideline link appears on the pages opened (https://www.novonordisk.com/). The de-facto system is a small set of CSS custom properties on the root: `--site-font-family` (Novo) and `--primary-color` (#00008f), the only two root variables measured. Everything else, including the 85px pill and the 15px/24px body, is applied directly in component styles. The measurement and its sources are recorded in `web/data/extracted/novo-nordisk.json` and `custom-designs/novo-nordisk/SOURCES.json`.

## Do's and Don'ts

- Do use #00008f for text on white and aqua; use white for text over photographs.
- Do use pill buttons with a 50px height and 40px side padding, outlined in white on imagery.
- Do keep Novo at weight 400 for body and 700 for the small bold heading and subheading.
- Don't introduce additional accent colors; the measured palette is navy, white and aqua.
- Don't treat the blue loading-dialog bar (#005ad2) or the cookie and modal controls as brand UI.
- Don't use drop shadows for cards; the only shadow measured is a single soft halo.

## Responsive Behavior

Only the 390px mobile measurement of type was recorded: the h1 is 22px / 26px (against 26px / 32px on desktop) and the h2 is 48px / 52px (against 64px / 72px). Layout changes, navigation behavior and breakpoints are not measured. The capture shows a circular menu button at the top right on the page as rendered for the measurement; its behavior at other widths is not measured.

## Iteration Guide

1. Start from the white canvas and navy ink; add aqua only for tinted panels.
2. Set all text in Novo (fallback Noto Sans, Arial) using the 15px/24px body and the 26px bold h1.
3. Build buttons as 50px-tall capsules with `rounded.sm` 85px.
4. Use full-bleed human photography with white text and a single outlined button.
5. Run `node web/scripts/verify-designs.mjs --slug=novo-nordisk` after any token edit.

### Content and imagery notes

The capture shows three stacked full-width photographic bands: a woman laughing in wind with a headband, an older woman and man walking outdoors in green light, and a woman with a yellow flower in her hair beside a child. People are shown in natural light, in close crops, smiling; no product packaging appears in the measured capture. The logo is a white "novo" wordmark with a small symbol at top left on the hero. News headlines on the page name drugs and congress events in a factual register, so the type system pairs a quiet 15px body with oversized 64px section titles to create contrast between clinical content and the human imagery above it.
