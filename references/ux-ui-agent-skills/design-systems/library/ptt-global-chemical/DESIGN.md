---
version: alpha
name: PTT Global Chemical
category: "Thai Brands"
description: "PTT Global Chemical (GC) pairs a corporate blue (#0056b8) and deep indigo (#1b1466) with DM Sans plus Noto Sans Thai at 18px body and a 34.8512px bold h2, 40px pill buttons and search field, 10-50px rounded cards, and very soft shadows over white and #f2f2f2 surfaces."
colors:
  canvas: "#ffffff"
  page-largest: "#0056b8"
  ink: "#252628"
  primary: "#0056b8"
  on-primary: "#ffffff"
  surface-grey: "#f2f2f2"
  ink-on-blue: "#ffffffd9"
  ink-muted: "#878a8c"
  ink-on-blue-faint: "#ffffff80"
  button-secondary-bg: "#1b1466"
  text-input-text: "#495057"
typography:
  display:
    fontFamily: "\"DM Sans\", \"Noto Sans Thai\", sans-serif"
    fontSize: 34.8512px
    fontWeight: 700
    lineHeight: 43.564px
  body:
    fontFamily: "\"DM Sans\", \"Noto Sans Thai\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: "\"DM Sans\", \"Noto Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  nav:
    fontFamily: Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 3.8px
  md: 4.8px
  lg: 10px
  xl: 27px
  2xl: 32px
  3xl: 40px
  4xl: 50px
  pill: 9999px
spacing:
  s1: 8px
  s2: 14px
  s3: 15px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 50px
  s8: 64px
  s9: 96px
  s10: 153.56px
components:
  button-primary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 0px 16px
    height: 61px
    borderColor: "{colors.page-largest}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 16px 48px
    height: 52px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.page-largest}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.page-largest}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.3xl}"
    padding: 24px 24px 24px 50px
    height: 60px
    boxShadow: rgba(0, 0, 0, 0.25) 0px 3px 10px 0px
  card:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.4xl}"
    padding: 160px 64px
  footer:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    padding: 64px 0px 0px
---

## Overview
Measured from the English home page of PTT Global Chemical (https://www.pttgcgroup.com/en, which resolved to /en/home; document title "Leading Global Chemical Company | PTT Global Chemical"). The site's footer reads "GC Chemistry for Better Living", and the opened page lists About GC, Sustainability, Investor Relations, Corporate Governance, Products and Innovations, People and News and Media. The measured page is 5819px tall.

The capture is a mosaic homepage: a rounded-corner promotional carousel (the extractor hid a `scrim spotlight` overlay and it is not documented here), a pill search field with a blue Search button, then an image tile grid labelled "GC in Focus", "GC StandOut", "Products and Solutions", "People", "Investor Relations", "Innovation" and "About GC", with white bold labels over photography of families, laboratories and plants. A saturated blue band (#0056b8) opens the lower page. The voice is formal and investor-aware but uses people-centred phrases ("limitless creative chemistry" on the opened page).

## Colors
The brand blue `primary` #0056b8 is both the Search button fill and the largest measured background area (`page-largest`, weight 2501). Other backgrounds by area: `canvas` #ffffff (1727), `surface-grey` #f2f2f2 (1320), deep indigo #1b1466 (796, footer and the "News Subscription" button, token `button-secondary-bg`), #4f4bbe (81), teal #00a5ad (17), #cccccc, #00b0f0.

Text colors by characters: white #ffffff (743), `ink` #252628 (708), `ink-on-blue` #ffffffd9 (161), `ink-muted` #878a8c (116), `ink-on-blue-faint` #ffffff80 (102), #0056b8 (1). Text inside the search field is #495057 (`text-input-text`).

The site's own CSS publishes a named palette in its root variables, which confirms the identity: `--primary: #0056b8`, `--secondary: #0056b8`, `--marine: #005fb8`, `--oxygen: #00a5ad`, `--ultra-violet: #4f4bbe`, `--hydrogen: #00b4e0`, `--sulfur: #ffc72e`, `--flame: #ff5100`, `--gc-spirit-orange: #ec8b10`, `--gc-spirit-yellow: #f8df00`, `--danger: #e6002a`, `--success: #00b341`, greys `--grey-n05: #f2f2f2`, `--grey-n20: #ccc`, `--grey-n70: #878a8c`, and `--blue-n50: #3dafd6`, `--blue-n75: #1e83c7`. Only the colors actually measured on the page are declared as tokens.

## Typography
Two families: DM Sans (1736 chars; loaded weights 400 and 700) for nearly all text with "Noto Sans Thai" (500) as the Thai fallback in the stack, and Sarabun (95 chars, 400) on navigation links and inputs. Icon fonts Font Awesome 5 and an "icomoon" set also load.

The extractor's h1 was the 10px "TOP" back-to-top control, so `_roleOverrides` records h1 → h2 and `display` uses the measured h2: DM Sans 34.8512px, weight 700, line height 43.564px ("Highlights"). Body is 18px/27px weight 400. Buttons are 16px/16px weight 400. Navigation and inputs use Sarabun 16px/24px. Size frequencies by chars: 18px (860), 16px (543), 15px (156), 28.4316px (154, the footer headline), 23.6171px (61), 34.8512px (53), 10px (3), 36px (1). Weights: 400 (750), 500 (708), 700 (372). No letter-spacing is measured.

## Layout
Content sits between contentLeft 140 and contentRight 1140 in the first band (a 1000px column) while the tile grid in the capture spans wider. The measured layout shows 9 visible header links, a visible menu toggle labelled "About GC" at the pass width, and up to 5 card columns. Header height is 132px, footer height 611px. Breakpoints published in CSS variables: xs 0, sm 576px, md 768px, lg 992px, xl 1200px, xxl 1640px. Spacing tokens from measured paddings: 8, 14, 15, 16, 24, 32, 50, 64, 96 and 153.56px; larger fractional paddings (207.375px, 276px, 414.75px) come from fluid columns.

## Elevation & Depth
Shadows are faint: `rgba(0,0,0,0.05) 0 3px 6px` (18 uses, cards), `rgba(0,0,0,0.1) 0 5px 20px` (5), `rgba(0,0,0,0.05) 0 3px 10px`, `rgba(0,0,0,0.1) 0 3px 10px`, and the search field's `rgba(0,0,0,0.25) 0 3px 10px`. Borders are 1px white or 1px #0056b8 on buttons. Photography tiles show white labels over darkened lower edges in the capture (values not measured).

## Shapes
Border radii by weight: 50% (11, round icons and arrows), 27px (7), 10px (6), 10px 10px 0 0 (5, card tops), 40px (2, search and primary button), 10px 0 10px 10px (2), 32px (2), 4.8px, 3.8px 3.8px 0 0, 3px, 50px 0 0, 0 10px 10px. The look is a family of generous, asymmetric rounding: tile corners at 10px, pills at 27-40px, and one corner cut at 50px.

## Components
- **button-primary**: Search, #0056b8 fill, white text, 16px, 40px radius, 140 x 61px, padding 0 16px, 1px #0056b8 border.
- **button-secondary**: "News Subscription", #1b1466 fill, white text and 1px white border, 27px radius, 268 x 52px, padding 16px 48px.
- **text-input**: white, 40px radius, 730 x 60px, padding 24px 24px 24px 50px (left room for the magnifier icon), shadow 0 3px 10px at 25% black.
- **nav / nav-link**: header 132px high, white nav text over imagery, #0056b8 link color on light backgrounds, Sarabun 16px.
- **card**: #f2f2f2 fill, 50px radius, padding 160px 64px.
- **footer**: #1b1466, white text, 611px high, padding-top 64px.
Hover: the close "×" control drops to opacity 0.75; no other hover state measured.

## Design System Architecture
No public brand guideline or design-system link appears on the opened homepage (a Media Center page at /en/media-center exists but was not opened). The de-facto system is a Bootstrap-style stack: root variables use the Bootstrap breakpoint names (`--breakpoint-xs` to `--breakpoint-xxl`), semantic names (`--primary`, `--secondary`, `--danger`, `--success`) and a product-line palette named after chemistry terms (`--oxygen`, `--hydrogen`, `--sulfur`, `--ultra-violet`, `--magma`, `--flame`, `--peridot`). Carousels use Swiper (`--swiper-navigation-size: 44px`) and a calendar widget (FullCalendar variable `--fc-daygrid-event-dot-width`).

## Do's and Don'ts
- Do use #0056b8 for primary actions and #1b1466 for footers and secondary buttons.
- Do round pills at 27-40px and tiles at 10px.
- Do set headings in DM Sans 700 and body in DM Sans 400 at 18px.
- Don't document the spotlight pop-up, carousel arrows or back-to-top control as brand components.
- Don't use #0000ee or framework defaults such as the Swiper blue #007aff.
- Don't add shadows heavier than the measured 0.25 alpha.

## Responsive Behavior
At the 390px mobile pass the measured body text is 18px/27px (a narrower 232px wide paragraph), the Search button keeps 140 x 61px, and font sizes concentrate at 16px (1043 chars), 20.1982px (185), 15px (156), 18px (152) and 24.5945px (53). Column counts and menu behaviour on mobile are not measured beyond the desktop-pass menu toggle.

## Iteration Guide
1. Fill large bands with #0056b8, pair with white text and #ffffffd9 secondary text.
2. Use #f2f2f2 and white alternately for content bands.
3. Build buttons as 40px pills; keep footers #1b1466.
4. Load DM Sans 400/700 and Noto Sans Thai for Thai content.
5. Re-run the extractor with `--batch=web/data/batches/phase2.json --only=ptt-global-chemical --force --no-motion` after changes.

## Imagery and Voice Notes
The capture shows people-first photography: a family on a sofa under "Products and Solutions", colleagues high-fiving under "People", a researcher with test tubes under "Innovation", an illuminated refinery at dusk under "About GC", and a boardroom group under "GC in Focus". Every tile uses the same pattern: a full-bleed photograph, a bold white DM Sans label at lower left. The StandOut tile is an illustrated campaign poster with a blue cartoon character, which is the only illustrated element in the grid. Copy in the labels is short noun phrases ("Investor Relations", "About GC") and the one long headline is Thai-and-English campaign text inside the carousel. The footer repeats the tagline "GC Chemistry for Better Living" at 28.4316px bold, with contact details beneath it. Thai text uses the Noto Sans Thai entry listed in the font stack (weight 500 loaded).
