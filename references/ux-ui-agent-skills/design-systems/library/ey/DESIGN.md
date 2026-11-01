---
version: alpha
name: EY
category: "Agencies & Studios"
description: "EY US home page (ey.com/en_us): EY Yellow #ffe600 on dark #2e2e38, #1a1a24 and black bands over a #f6f6fa and white canvas, EYInterstate in 300 and 700 weights (40px headlines on 48px), square buttons, yellow-topped dark insight cards."
colors:
  canvas: "#f6f6fa"
  page-largest: "#ffffff"
  ink: "#2e2e38"
  primary: "#ffe600"
  on-primary: "#2e2e38"
  surface-black: "#000000"
  surface-dark: "#1a1a24"
  surface-tint: "#eaeaf2"
  ink-muted: "#747480"
  text-on-dark-soft: "#ffffff99"
  grey-light: "#cccccc"
typography:
  display:
    fontFamily: EYInterstate, "Noto Sans", sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  display-mobile:
    fontFamily: EYInterstate, "Noto Sans", sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38.4px
  heading:
    fontFamily: EYInterstate, "Noto Sans", sans-serif
    fontSize: 40px
    fontWeight: 300
    lineHeight: 48px
  subheading:
    fontFamily: EYInterstate, "Noto Sans", sans-serif
    fontSize: 32px
    fontWeight: 300
    lineHeight: 38.4px
  body:
    fontFamily: EYInterstate, "Noto Sans", sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 20px
  icon-button:
    fontFamily: "\"Material Icons\""
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: EYInterstate, "Noto Sans", sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 32px
  button:
    fontFamily: EYInterstate, "Noto Sans", sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22px
rounded:
  none: 0px
  xs: 3px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5.2px
  s3: 8px
  s4: 9px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 17px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 24px
    height: 56px
    borderColor: "{colors.ink}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 39px
    height: 44px
    borderColor: "{colors.ink-muted}"
  search-button:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.icon-button}"
    rounded: "{rounded.xs}"
    padding: 16px 24px
    height: 61px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
---

## Overview

The measured page is the US home page of EY (title "EY - US | Shape the future with confidence", https://www.ey.com/en_us). It is a corporate thought-leadership site for a professional-services network. The capture shows a full-width rotating hero ("INSIGHTS" eyebrow in yellow, headline "Agentic AI ROI: Can AI pay for itself?", a two-line summary beside a thin yellow vertical rule, three tab labels Audit quality, AI risk and Agentic AI with a yellow bar over the active one, and circular previous, next and pause buttons); a dark "Featured insights" band with three image cards; a black EY-Parthenon band ("Transformative Strategy and Transactions") with a video thumbnail and a "Learn more" button; and a white "Featured case studies" section with a "See more case studies >" link. The footer legal line begins "EY refers to the global organization".

Identity: the brand's yellow is the only saturated colour in the interface; everything else is a cool charcoal and white scale, so the photography (rainbow architectural tunnel, supermarket, wine barrels) supplies the colour. Yellow is used for headings on dark, for the eyebrow, for borders above cards and for the Subscribe button. The tone of the copy is confident and consultative ("Relevance at speed – Turning supply chain complexity into growth", "Accelerate growth through modernized financial services operations").

The extractor hid the unified header as a consent overlay (the extraction notes record `consentOverlaysHidden: unified-header`), so the header region is blank in the capture; its colours are known only from CSS variables (see Colors).

## Colors

- Canvas `#f6f6fa` is the measured body background (area weight 4274); page-largest `#ffffff` is the largest area (8673), used for white sections and cards.
- Ink `#2e2e38` is the main text colour on light backgrounds (2969 characters) and is also a dark band background (1341).
- Primary `#ffe600` is EY Yellow: text colour on dark (227 characters), the fill of the measured "Subscribe" button (186 area), the card top borders, eyebrow and "Featured insights" heading. On-primary `#2e2e38` is the label colour on the yellow fill.
- Surface black `#000000` (area 2908) is the EY-Parthenon band; surface dark `#1a1a24` (area 1049, text 380) is the card and header-dark colour; `#2e2e38` is the intermediate band behind "Featured insights".
- Surface tint `#eaeaf2` (area 1573) is a pale lavender-grey panel colour.
- Ink muted `#747480` (269 characters) is secondary body text and the border colour of the secondary button.
- Text on dark soft `#ffffff99` (white at 60%) and grey `#cccccc` are secondary text on dark.
- Declared CSS variables confirm the header palette: `--header-accent-color: #ffe600`, `--header-background-color: #2e2e38`, `--header-dark-background-color: #1a1a24`, `--header-text-color: #fff` and a pale text `#c4c4cd`. The `--swiper-theme-color: #007aff` is a carousel library default and not a brand colour.

On hover a measured card title (yellow on `#1a1a24`) changes its card background to `rgb(84, 84, 95)` (`#54545f`).

## Typography

One family: EYInterstate, with Noto Sans and generic sans-serif as declared fallbacks. Loaded weights: 300, 400, 400 italic and 700. The Material Icons font is used for icon glyphs (22 characters) and VideoJS for the video controls. EYInterstate accounts for 5215 characters.

Measured scale (desktop):

- Display: 40px, weight 700, 48px line height (hero and band headlines).
- Heading: 40px weight 300 on 48px ("Featured insights").
- Subheading: 32px weight 300 on 38.4px ("Featured case studies" and "Featured press releases" on mobile).
- Body: 14px weight 300 on 20px.
- Link: 20px weight 700 on 32px ("See more case studies >").
- Button: 16px weight 700 on 22px.
- Icon button: Material Icons 24px on 24px.

Frequent sizes by character count: 16px, 20px, 32px, 14px, 18px, 40px, 24px and 60px. The system pairs weight 700 for action and eyebrow elements with weight 300 for large display headings.

## Layout

A full-bleed banded layout: hero image, dark insights band, black feature band, white case-study section. Content sits in a centred container with consistent left alignment (the hero headline, tab row, "Featured insights" heading and the Parthenon text all share the same left edge in the capture). The insight cards sit in a three-column row; the feature band is a two-column split, text at left and a video at right. Spacing values measured: 3, 5.2, 8, 9, 10, 12, 15, 16, 17 and 20px. Page scroll height at 1280px: 7247px.

## Elevation & Depth

No box shadow is measured on any role. Hierarchy is made by contrasting bands (white, `#2e2e38`, `#1a1a24`, black), a yellow top rule on cards, and a translucent dark overlay `rgba(46, 46, 56, 0.6)` on video play controls. The hero carousel controls are semi-transparent circles over photography.

## Shapes

Mostly square. Measured radii: 0px for the secondary and Subscribe buttons, 3px for the "EY Search" button, and 9999px pill for circular controls (carousel arrows, pause). Cards and bands are rectangles with no rounding.

## Components

- Primary button (Subscribe): fill `#ffe600`, text `#2e2e38`, EYInterstate 16px weight 700, padding 12px 24px, height 56px, 1px solid `#2e2e38` border, 0px radius.
- Secondary button (Learn more): fill `#2e2e38`, white text, 16px 700, padding 10px 39px, height 44px, 1px solid `#747480` border, 0px radius.
- Search button: white fill, `#2e2e38` text, Material Icons 24px glyph with the label "EY Search", padding 16px 24px, height 61px, 3px radius, 1px `#2e2e38` border; on mobile the padding measures 9px 57px with height 47px.
- Link: "See more case studies >" at 20px weight 700 in `#2e2e38`.
- Insight card: `#1a1a24` background, yellow top border, yellow title, light body text; hover background `#54545f`.
- Hero tabs: three text tabs with a yellow bar above the active one and circular arrow and pause buttons.

## Design System Architecture

No public design system or brand guideline was found: the page https://www.ey.com/en_us was opened and linked to no design system, brand guidelines or GitHub organisation, so none is cited. The de-facto system is visible in the CSS: 67 root custom properties, almost all prefixed `--header-*`, `--instant-search-*` or `--print-theme-*`, which means tokens are scoped per component (header, instant search, print) rather than as a global palette. Colours recur across scopes: `#1a1a24`, `#2e2e38`, `#c4c4cd`, `#747480`, `#ffe600`. The type system is a single family with weight-based roles, and the carousel library contributes its own variable (`--swiper-theme-color`).

## Do's and Don'ts

Do:
- Use `#ffe600` as the single accent, always paired with `#2e2e38` or `#1a1a24` text/backgrounds.
- Set display headlines at 40px in weight 700 or 300 on a 48px line height.
- Keep buttons rectangular with a 1px `#2e2e38` border.
- Let photography carry colour and use dark bands to separate sections.

Don't:
- Use yellow as a background for large areas; the measured yellow area is small (186).
- Use yellow text on white; it appears on dark backgrounds only.
- Add shadows or round the main buttons.
- Use the carousel-library blue `#007aff` as a brand colour.

## Responsive Behavior

Measured with the 390px mobile pass: h1 "Our commitment to audit quality" is EYInterstate 32px weight 700 in white; h2 "Featured press releases" is 32px weight 300 in `#2e2e38`; body text is 14px weight 300 in `#747480`; the search button is 47px high with padding 9px 57px. Frequent mobile font sizes by character count are 16px, 14px, 28px, 20px, 32px and 24px. The unified header was hidden during extraction, so mobile header behaviour is not measured, and other layout changes at mobile width are not measured.

## Iteration Guide

1. Choose `#ffe600` for the accent and `#2e2e38` for ink; set surfaces in `#1a1a24` and `#000000` for dark bands.
2. Use EYInterstate (or its declared fallback Noto Sans) with 300 for display and 700 for actions.
3. Build a three-card insight row on `#1a1a24` with a yellow top border and yellow titles.
4. Keep buttons square at heights 44px and 56px, with 1px borders.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=ey --url=https://www.ey.com --force --no-motion`, then `node web/scripts/verify-designs.mjs --slug=ey`.
