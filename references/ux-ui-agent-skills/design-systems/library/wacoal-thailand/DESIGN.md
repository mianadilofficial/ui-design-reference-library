---
version: alpha
name: Wacoal Thailand (Thai Wacoal Public Company Limited)
category: "Thai Brands"
description: >-
  Wacoal Thailand's shop: Prompt typeface on a white canvas, near-black (#1c1c1c) uppercase VIEW ALL buttons, a sale-price red (#e32c2b), 8px product cards and full-bleed lifestyle photography with a pink-and-cream campaign palette.
colors:
  canvas: "#ffffff"
  ink: "#1c1c1c"
  primary: "#1c1c1c"
  sale-red: "#e32c2b"
  on-primary: "#ffffff"
  surface-black: "#000000"
  footer-bg: "#454141"
  ink-muted: "#1c1c1ca6"
  on-dark-muted: "#ffffffa6"
  ink-soft: "#3f3f3f"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 27.0634px
    fontWeight: 400
    lineHeight: 37.8888px
    textTransform: uppercase
  body:
    fontFamily: Prompt, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 23.1px
  button-secondary:
    fontFamily: Prompt, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 21.45px
    letterSpacing: 0.13px
    textTransform: uppercase
rounded:
  xs: 8px
  sm: 16px
  md: 19.69px
  lg: 22px
  xl: 25px
  cta: 19.69px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 7.2px
  s6: 8px
  s7: 10px
  s8: 10.4px
  s9: 12px
  s10: 14px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    padding: 10.4px 28px
    height: 44px
    borderColor: "{colors.ink}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 8px
    boxShadow: rgba(0, 0, 0, 0.06) 0px 0px 0px 1px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
---

## Overview

Wacoal Thailand is the shopping site of Thai Wacoal Public Company Limited (the company name in the page's logo link), carrying the tagline "Comfortable Inside. Confident Outside." in a slim announcement bar at the very top. The home page reads like a fashion editorial that happens to have a cart: a centred WACOAL wordmark above a two-line Thai navigation, a full-bleed hero photograph with a pink hand-lettered "bra top" headline, a green "GO GREEN" sustainability strip, then a three-up row of campaign tiles, a wide WACOAL x Proud collaboration banner, and tabbed product rows.

The interface is deliberately quiet so the photography can be loud. The canvas is white (`{colors.canvas}`), text is a soft black (`{colors.ink}` `#1c1c1c`), and the only saturated interface colour is a sale red (`{colors.sale-red}` `#e32c2b`). Everything else — pinks, creams, greens, pastel blues — arrives through campaign imagery and is not tokenised.

**Key Characteristics:**
- Prompt, a Thai/Latin sans, is the single typeface; headings are uppercase Latin ("WACOAL X PROUD", "DO IT YOUR MOOD", "SMOOTH BRA") at `{typography.display}` (27.0634px, weight 400) rather than bold.
- A near-black `{colors.primary}` (`#1c1c1c`) fill with white uppercase 13px text for "VIEW ALL" buttons; no brand-coloured button.
- Sale red `{colors.sale-red}` reserved for sale prices and the "Save 200.00 ฿" badge (measured on elements with the classes `text-on-sale` and `badge--on-sale`).
- Product cards with an `{rounded.xs}` (8px) radius and a one-pixel `rgba(0, 0, 0, 0.06)` edge instead of a drop shadow.
- Thai promotional artwork carries its own fonts and colours; the interface chrome stays neutral.

## Colors

### Brand & Accent
- **Ink black** (`{colors.primary}` — `#1c1c1c`): the fill behind the white "VIEW ALL" label (measured as a flat `linear-gradient(rgb(28, 28, 28), …)` background on that link) and the border colour of `button-secondary`. It is the same value as `{colors.ink}`; the site has no distinct brand hue in its controls.
- **Sale red** (`{colors.sale-red}` — `#e32c2b`): sale price text and the "Save" badge fill. Probe result, recorded in SOURCES.json.
- **On-primary** (`{colors.on-primary}` — `#ffffff`): text on the dark button.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): by far the largest measured background area.
- **Black surface** (`{colors.surface-black}` — `#000000`): measured over a sizeable area; the capture's dark elements are photography and small controls, and the exact element was not isolated, so no further role is claimed.
- **Footer** (`{colors.footer-bg}` — `#454141`): measured footer background, white text on it.

### Text
- `{colors.ink}` `#1c1c1c` for body copy; `{colors.ink-muted}` (`#1c1c1ca6`) for secondary lines such as prices; `{colors.ink-soft}` (`#3f3f3f`) as a lighter dark; `{colors.on-dark-muted}` (`#ffffffa6`) for muted text on dark ground.

A third-party live-chat button (translucent black pill with the word "Chat") floats over the page; it was detected by the extractor as a call to action but is not Wacoal interface, so its colour is omitted.

## Typography

### Font Family
Prompt (loaded at 400 and 700) with a generic sans-serif fallback; a "Lato-ai" 600 face is also loaded and was not measured in use on text. Prompt covers Thai and Latin in one family, so Thai product names and English collection titles share metrics.

### Hierarchy
| Role | Size | Weight | Notes |
|---|---|---|---|
| `{typography.display}` | 27.0634px | 400 | Uppercase section titles, line height 37.8888px |
| `{typography.body}` | 14px | 400 | Descriptions, line height 23.1px |
| `{typography.button-secondary}` | 13px | 400 | Uppercase, letter spacing 0.13px |

### Principles
Hierarchy comes from case and size, not weight: uppercase Latin titles at regular weight, small Thai product names, and tiny prices. The only bold weight loaded (700) is used sparingly (126 characters measured against 10,659 at weight 400). The page's own h1 is the header logo link text (class `header__logo`), so the heading style recorded here is the first visible h2.

### Note on Font Substitutes
Prompt is a free Google Fonts family; no substitution needed. A fallback to a system Thai sans-serif works if it fails to load.

## Layout

### Spacing System
Measured spacing steps: 1, 4, 5, 6, 7.2, 8, 10, 10.4, 12 and 14px (`{spacing.s1}`–`{spacing.s10}`). The most common flex gaps measured are 8px, 48px, 20px and 24px; padding on the secondary button is `10.4px 28px`.

### Grid & Container
The viewport is measured at 1280px. The hero and the collaboration banner are full-bleed. The three-tile campaign row splits the width into equal thirds with a centred underlined "View All" link under each. Product rows show four equal cards with generous gutters, under a tab strip of five uppercase titles.

### Whitespace Philosophy
Generous around the product rows (large vertical gaps between tab strip, cards and the centred "VIEW ALL" button), tight inside cards where name and price sit as two small centred lines.

## Elevation & Depth

Almost flat. Cards use a 1px ring, `rgba(0, 0, 0, 0.06) 0px 0px 0px 1px`; a soft `rgba(28, 28, 28, 0.15) 0px 2px 10px 0px` shadow was also measured on a handful of elements. Depth comes from photography: models overlap pastel backdrops, and a polaroid-style tilted frame appears in the hero.

## Shapes

### Border Radius Scale
Measured radii: `{rounded.xs}` 8px (cards), `{rounded.sm}` 16px, `{rounded.md}` 19.69px, `{rounded.lg}` 22px, `{rounded.xl}` 25px, `{rounded.cta}` 19.69px and `{rounded.pill}` 9999px. Most are single-use values on widgets; the card radius is the one that structures the page. Buttons in the dark "VIEW ALL" style have squared corners in the capture.

### Photography Geometry
Model photography is rectangular and bleeds to the edge on banners; product thumbnails are tall portrait rectangles with no rounding beyond the card.

## Components

### Buttons
**Button (`button-secondary`)**: white `{colors.canvas}` uppercase text at `{typography.button-secondary}` on the `{colors.primary}` ground, `10.4px 28px` padding, 44px tall, bordered in `{colors.ink}`. Used for "VIEW ALL" below each product row.

### Cards
`card`: `{colors.canvas}` ground, `{colors.ink}` text, `{rounded.xs}` radius, 8px padding, 1px ring shadow.

### Navigation
A centred wordmark with the account, search and cart icons at the right; two rows of Thai category links in small text, ending in "ลองชุดด้วย AI", "ดีไซเนอร์คอลเลคชั่น" and "สมัครสมาชิก".

### Footer
`footer`: `{colors.footer-bg}` ground with white text and the registered address block.

## Design System Architecture

No public Wacoal design-system or brand-guideline page was found (the about-us URL tried returned 404). What can be read from the measured page: class names such as `header__logo`, `badge--on-sale`, `text-on-sale` and `sr-only` follow a theme-component naming pattern, and the root variables are prefixed `--boostsd-` (for example `--boostsd-cart-item-image-width: 96px`), which belong to a third-party search/filter app rather than to Wacoal's own tokens. There are therefore no brand-level CSS variables to cite; the tokens in this file are measured values with descriptive names.

## Do's and Don'ts

### Do
- Keep controls neutral: `{colors.primary}` black with white uppercase text.
- Reserve `{colors.sale-red}` for discounts.
- Title sections in uppercase Latin at regular weight.
- Let lifestyle photography supply colour.

### Don't
- Don't treat the floating chat widget as brand UI.
- Don't add a coloured primary button; the site has none.
- Don't round the dark "VIEW ALL" button into a pill.
- Don't bold the section titles.

## Responsive Behavior

Only the 1280px desktop capture of this site was analysed here; no mobile measurements were taken for this file, so mobile breakpoints and navigation behaviour are not measured. The desktop page already shows its responsive intent: percentage-width tiles and four equal product columns rather than fixed pixel widths.

## Iteration Guide

1. White `{colors.canvas}`, Prompt, `{colors.ink}` text.
2. Centred wordmark nav, announcement bar on top.
3. Full-bleed hero, then a three-tile campaign row.
4. Uppercase tab titles at `{typography.display}`, four cards at `{rounded.xs}`.
5. One dark "VIEW ALL" per row; sale price red only.
6. Run the gate with `node web/scripts/verify-designs.mjs --slug=wacoal-thailand`.
