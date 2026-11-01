---
version: alpha
name: SCG Chemicals
category: "Thai Brands"
description: "SCG Chemicals (SCGC) corporate site, scgchemicals.com/en/home: white canvas, #333333 body text in Prompt 14.4px, teal #009989 headings in the custom scg typeface at 34.56px/600, pill-shaped 50px outlined buttons that fill #009989 on hover, and teal-to-indigo photographic bands."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#009989"
  teal-band: "#00988b"
  ink-muted: "#999999"
  aqua: "#3ed3c6"
  text-input-text: "#000000"
typography:
  display:
    fontFamily: scg, sans-serif
    fontSize: 40.32px
    fontWeight: 600
    lineHeight: 56.448px
  display-mobile:
    fontFamily: scg, sans-serif
    fontSize: 39.312px
    fontWeight: 600
    lineHeight: 55.0368px
  heading:
    fontFamily: scg
    fontSize: 34.56px
    fontWeight: 600
    lineHeight: 48.384px
  subheading:
    fontFamily: scg
    fontSize: 28.8px
    fontWeight: 600
    lineHeight: 40.32px
  body:
    fontFamily: Prompt, scgregular, sans-serif
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 28.8px
  button-secondary:
    fontFamily: Prompt
    fontSize: 14.4px
    fontWeight: 600
    lineHeight: 17.28px
rounded:
  xs: 3px
  sm: 5px
  md: 50px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4.61px
  s3: 7.2px
  s4: 9.22px
  s5: 10px
  s6: 11.52px
  s7: 12px
  s8: 14.4px
  s9: 15px
  s10: 20px
components:
  button-secondary:
    backgroundColor: transparent
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    height: 42px
    borderColor: "{colors.canvas}"
  button-secondary-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    borderColor: "{colors.primary}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 14.4px 21.6px
    height: 50px
---

## Overview

SCG Chemicals (page title "SCG Chemicals", wordmark "SCGC") is the English-language corporate site of the petrochemical business of SCG. The measured homepage is long (6,032px tall at a 1280px desktop width) and image-led: a full-width hero slider with a large white quote over a photograph, a curved teal-to-indigo band that carries two product tiles and a "smart search" field, a sustainability banner, a grid of product-category photos, and a row of product brand logos (Windsor, Varocard and SMX Technology are visible in the capture). Section headings are teal `#009989`, body copy is dark gray `#333333` on white, and organic wave and dotted-line graphics bridge the photographic bands.

The mood is clean, green and corporate-sustainability oriented. Copy uses ESG language ("sustainable polymers", "SCGC SUSTAINOVATIONS", "CCS/CCUS Locking the Earth's Carbon") and headings are uppercase for section titles and title case for the "Product and Technology Brand" row. The first hero slide in the capture is a quotation slide over a portrait photograph; it is page content, not an overlay. The extractor hid two cookie/consent elements ("CookiesEventModalBar" and "cz-banner-wrapper"), and those are not documented as brand UI.

## Colors

All values were measured on the live homepage.

- **Canvas `#ffffff`** is the page background; white is also the color of hero text, outlined-button labels and borders over photography.
- **Ink `#333333`** is the dominant text color (6,219 characters) and matches the stylesheet variable `--dark1: #333333`.
- **Primary `#009989`** is the teal of headings (h2 "SCGC SUSTAINOVATIONS", h3 "WE INNOVATE SUSTAINABLE POLYMERS"), of the hover fill of outlined buttons, and the hover text color of product tiles. It matches the site variable `--CK_Primary: #009989`.
- **Teal band `#00988b`** is the largest measured background area after white (weight 198), the teal region of the curved band; it differs from the primary by one step in green and blue.
- **Aqua `#3ed3c6`** (33 characters) and **muted ink `#999999`** (147 characters) are secondary text colors.
- **Text-input text `#000000`** is the typed-text color of the search field.

The page also ships a full Bootstrap variable set (for example `--bs-primary: #0d6efd`, `--bs-success: #198754`, `--bs-orange: #fd7e14`). These are framework defaults, not SCGC brand colors, and were not used for the tokens above. Stylesheet colors such as `#1a936f` and `#007935` appear in the CSS corpus (63 and 58 occurrences) but were not seen on the rendered homepage, so they are not declared.

## Typography

Two families carry the page. **scg** (a custom face loaded as `scg`, `scgbold` and `scgregular`) sets headlines; it is measured on only 285 characters plus 35 in scgbold. **Prompt** (Google Fonts family, weights 200, 300, 400, 600 and 700 loaded) sets nearly everything else: 7,353 characters.

- **Display** `scg, sans-serif` 40.32px, weight 600, line-height 56.448px: the hero h1 (white, over photography). A mobile variant measured 39.312px/55.0368px.
- **Heading** `scg` 34.56px/600/48.384px: h2 section titles in teal.
- **Subheading** `scg` 28.8px/600/40.32px: h3 titles such as "WE INNOVATE SUSTAINABLE POLYMERS".
- **Body** `Prompt, scgregular, sans-serif` 14.4px/400 with a generous 28.8px line-height (2.0). The body element itself is declared at 13px weight 600.
- **Button** `Prompt` 14.4px/600/17.28px.

The measured size scale is 11.52, 11.664, 12.96, 14.4, 15.84, 17.28 (1,719 characters, the second most common), 20.16, 21.6, 23.04, 25.92, 28.8, 34.56, 40.32 and 46.08px. No letter-spacing was recorded. Weights used: 400 (5,155 characters), 600 (2,268), 300, 700 and 200.

### Font substitutes

`scg` is a proprietary face. Where it is unavailable the declared fallback is `sans-serif`; the body stack falls to `scgregular` then `sans-serif`. Prompt is public and can be loaded from Google Fonts.

## Layout

The homepage is a vertical sequence of full-bleed bands with content inside a central container: the h2 measured 1,110px wide and the intro block 638px wide (h3 and paragraph). Header navigation runs across the top of the hero over the photograph: the SCGC wordmark centred, utility links (Career, Contact Us, search, language EN) at the right, and a second row of dropdown menus (About SCGC, Products and Solutions, Investor Relations, Sustainability, Advancing Community, Media). Below the hero, two product tiles ("Plastic Sheet", "Recycle") sit left of a search block on the curved teal-indigo band; further down a two-up then three-up grid of product photo cards ("Wire and Cable", "Flexible Pouch and Bag", "Underground Application", "Plastic Sheet", "Recycle") uses a short white rule and a bottom-left caption with a "View More" pill on each. Spacing values recorded are 3, 4.61, 7.2, 9.22, 10, 11.52, 12, 14.4, 15 and 20px.

## Elevation & Depth

Depth comes from photography, gradients and the curved band edges rather than shadows. One shadow value was recorded, `rgba(0, 0, 0, 0.1) 0px 10px 5px 0px` (5 occurrences). The curved teal-to-indigo band overlaps the hero, and a pale illustration band ("CCS/CCUS") sits between white sections; white text over photographs sits on a teal gradient wash at the bottom of each product card in the capture. Dotted wave graphics in orange, red, blue and green add a layered feel without shadow.

## Shapes

Buttons and tags are pills: the radius `50px` is the most common measured radius (41 elements) and a `9999px`-class value is recorded in the token set as `pill`. Inputs use 5px, small chips 3px, and 100% (five elements) produces circles such as the icon buttons. One element has a right-side-only radius (`0px 5px 5px 0px`), consistent with the search submit button attached to the field. Product photo cards in the capture have square corners; their radius was not recorded, so no value is declared beyond what the extraction measured.

## Components

- **Button secondary (outlined pill).** Transparent fill, white 14.4px/600 Prompt label, 1px solid white border, radius 50px, height 42px, 165px wide; measured on the hero "Read More". Hover (measured): fill and border become `#009989`, label stays white, no shadow.
- **Product tile link.** Tile captions ("Plastic Sheet") are `#333333` and turn `#009989` on hover (measured).
- **Text input.** The smart-search field: white background, black text, Prompt 14.4px, radius 5px, padding 14.4px 21.6px, 485px wide and 50px high, with a teal submit button at its right.
- **Suggested chips.** Small outlined rectangular tags ("Chemical Innovations", "Download", "Contact Us") sit below the search; their values were not separately measured.
- **Not documented as brand UI:** the cookie banner/modal and the slider controls.

## Design System Architecture

No public design system, brand guideline or token package was located: no design-system link was opened from the homepage, and no search was run. The de-facto system is Bootstrap plus site variables. The root custom properties include the full Bootstrap 5 set (`--bs-*`) alongside project variables such as `--font-family-main: 'Prompt','scgregular', sans-serif`, `--font-family-body: 'Prompt'`, `--heading-font-weight: 600`, `--dark1: #333333`, `--CK_Primary: #009989`, `--button-text-color: #ffffff`, `--banner-bg` and `--category-header-bg`. The brand layer is therefore three decisions: the teal `#009989`, the Prompt/scg type pairing with weight-600 headings, and the 50px pill button. Measurement source: https://www.scgchemicals.com/en/home as captured by the repository extractor.

## Do's and Don'ts

- Do set headings in `scg` weight 600 in `#009989` on white, and body in Prompt 14.4px with a 28.8px line-height.
- Do use outlined white pills over photography and let hover fill them with `#009989`.
- Do keep body copy `#333333`, with `#999999` only for secondary text.
- Do use wave and dotted-line graphics and full-bleed photography to separate sections.
- Don't use Bootstrap's `#0d6efd` or other `--bs-*` colors as brand colors.
- Don't add shadows heavier than the measured `rgba(0, 0, 0, 0.1) 0px 10px 5px 0px`.
- Don't document cookie banners or slider arrows as brand components.
- Don't use square-cornered buttons; the measured button radius is 50px.

## Responsive Behavior

A 360px mobile pass measured the following. The h1 measured 39.312px/55.0368px (desktop 40.32px/56.448px), the h2 33.696px/47.1744px (desktop 34.56px), and body text 14.04px/28.08px (desktop 14.4px/28.8px); text sizes therefore scale down by a few percent. The mobile h1 box measured 360px wide and 165px high and the h2 360px by 94px. Navigation behavior on mobile (menu toggle, link visibility) was not recorded by the extractor and is not measured. Breakpoint widths are not measured.

## Iteration Guide

1. Use the frontmatter tokens as given; add colors only from a new extraction.
2. Compose: white canvas, teal `#009989` headings in scg 34.56px/600, body in Prompt 14.4px/28.8px `#333333`.
3. Use a 50px-radius outlined white button over photography; on hover fill with `#009989`.
4. Use curved teal-to-indigo bands and photographic category cards for section transitions.
5. Do not carry over Bootstrap default colors.
6. Run `node web/scripts/verify-designs.mjs --slug=siam-cement-chemicals` until it passes.
