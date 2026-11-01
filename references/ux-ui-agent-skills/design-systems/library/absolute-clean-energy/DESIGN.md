---
version: alpha
name: Absolute Clean Energy
category: "Thai Brands"
description: "Absolute Clean Energy (ACE) English homepage (ace-energy.co.th/en/home): Roboto Condensed throughout, navy #0d1f6e text on white, leaf green #52b78a pill buttons with 40px radius and a deeper #04a46d for tiles and hover, 60px bold uppercase hero headline on a translucent green band."
colors:
  canvas: "#ffffff"
  ink: "#0d1f6e"
  primary: "#52b78a"
  on-primary: "#ffffff"
  green-deep: "#04a46d"
  surface-2: "#f7f7f7"
  surface-3: "#ececec"
typography:
  display:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 60px
    fontWeight: 700
    lineHeight: 81px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 48.6px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 28px
    fontWeight: 300
    lineHeight: 42px
  body:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 34px
    fontWeight: 400
    lineHeight: 45.9px
  button:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 17px
    fontWeight: 500
    lineHeight: 25.5px
    letterSpacing: 1px
    textTransform: uppercase
  nav:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 20px
    fontWeight: 300
    lineHeight: 29px
rounded:
  xs: 5px
  sm: 40px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 7.5px
  s4: 8px
  s5: 10px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 5px 25px
    height: 38px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 5px 25px
    height: 38px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  link-hover:
    textColor: "{colors.green-deep}"
  nav:
    backgroundColor: "{colors.canvas}"
    boxShadow: rgba(0, 0, 0, 0.1) 2px 2px 2px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
---

## Overview

Absolute Clean Energy Public Company Limited (page title "Absolute Clean Energy (ACE)", logo "ACE") is a Thai renewable-energy company listed on the stock exchange. The queue URL `https://www.ace-energy.co.th/en` shows a memorial entry page (grayscale tribute portrait on a black patterned background with an "เข้าสู่หน้าหลัก | Enter Site" button). That page is not the working brand site: its first extraction measured near-black text and the typefaces PSL Siara Pro, PSL Asadong Pro and TF Arluck. The "Enter Site" link points to `/en/home` (read from the page), so the homepage was re-measured with `extract-tokens --slug=absolute-clean-energy --url=https://www.ace-energy.co.th/en/home --allow-spa-404 --force` and all tokens below come from it.

The homepage is a tidy corporate dashboard layout. A white header carries the green logo, a green stock-ticker chip (live data, not documented), a search icon, small EN and TH language boxes, and a row of eight navy links (About Us, Our Business, Investor Relations, Sustainability, News & Activities, Procurement, Join Us, Contact Us). Below is a full-bleed hero photograph of recycling machinery with the headline "THE CLEAN ENERGY LEADER" in white capitals on a translucent green band; then a tile grid: "Corporate Info" (photo with green caption block), "Our Performance" (gray map-pattern tile with large green megawatt figures), "Awards & Recognitions" (photo), "Project Highlight" (wide solar-roof photo with green caption) and "Sustainability"; then an "Investor Corner" with a stock quote block. Each tile has a small green rule under an uppercase navy label. A cookie icon at the lower left is not brand UI.

## Colors

- **Canvas `#ffffff`** is the dominant background (weight 3,634); **surface `#f7f7f7`** (1,921) fills the footer and performance tile; **surface `#ececec`** (1,606) is a lower-contrast gray area.
- **Ink `#0d1f6e`** is a deep navy and by far the most-read text color (4,360 characters), used for headings, navigation and tile labels.
- **Primary `#52b78a`** is the fill and border of the pill buttons ("WHISTLEBLOWING", "View All", "Read More") and the translucent hero headline band.
- **Green deep `#04a46d`** is the larger-area green (weight 1,027), the solid caption blocks under photo tiles, the megawatt figures, and the measured hover color of every navigation link, tile label and language box (text and border switch from `#0d1f6e` to `#04a46d`).
- **White `#ffffff`** is text on green and on photography (1,118 characters).
- A mid-gray `#939393` and `#0d1f6e` fill appear in small areas (weights 67 and 63).

Bootstrap 4 root variables (`--primary: #007bff`, `--success: #28a745`, `--teal: #20c997`) are framework defaults, not brand colors.

## Typography

**Roboto Condensed** (weights 300, 400 and 700 loaded) sets all 5,964 measured characters; icons use `icomoon`. Weight 300 dominates reading text (3,404 characters), with 700 (932), 400 (840) and 500 (788) for emphasis.

- **Display** 60px/700/81px uppercase; mobile 36px/48.6px.
- **Subheading** 28px/300/42px ("About Absolute Clean Energy").
- **Nav / link** 20px/300/29px.
- **Button** 17px/500/25.5px, 1px letter-spacing, uppercase for "WHISTLEBLOWING".
- **Body** token 34px/400/45.9px was measured on the first paragraph detected inside a dark tile; the most-read size on the page is 23px (3,059 characters), followed by 15px, 14px, 20px and 12.75px, and the line-height of 23px text was not recorded separately.

Other measured sizes: 18, 19, 22, 40px. Letter-spacing recorded only on 17px button text (1px).

### Font substitutes

Roboto Condensed is an open Google Fonts family; the declared fallback is `sans-serif`.

## Layout

The page is 1,280px wide and 6,564px tall. The header is 110px high with a faint shadow; the extractor counted 12 visible header links (`headerLinksVisible: 12`) and up to nine card columns (`maxCardColumns: 9`). The tile grid sits in a centered container: a three-column first row of equal tiles and a second row with one wide tile (about two columns) and one narrow tile, separated by even gutters. Spacing values: 4, 5, 7.5, 8, 10, 15, 16, 20, 24 and 25px; the paddings 15px (51 occurrences), 5px (37), 10px (36) and 25px (35) dominate. The footer is 583px tall on `#f7f7f7`, with uppercase 19px/500 navy headings (About Us, Corporate Information, and others).

## Elevation & Depth

Depth is slight: the header shadow `rgba(0, 0, 0, 0.1) 2px 2px 2px 0px` and a soft `rgba(204, 204, 204, 0.5) 0px 2px 10px 0px` on one element. Separation otherwise comes from color blocks (green caption bars over photographs), a gray map-dot texture in the performance tile, and angled light-gray panels behind the Investor Corner in the capture.

## Shapes

Buttons are pills at radius 40px (six elements; 38px high, padding 5px 25px). Circles come from 50% (nine elements) and 100% (five); 5px appears on two elements and 999px on one. Tiles and photographs are rectangular. The language boxes (EN, TH) are small rounded squares in the capture; their radius was not isolated.

## Components

- **Primary button.** `#52b78a` fill and 1px `#52b78a` border, white 17px/500 Roboto Condensed with 1px tracking, radius 40px, padding 5px 25px, 38px high; widths 216px ("WHISTLEBLOWING"), 132px ("View All"), 151px ("Read More").
- **Navigation.** Navy 20px/300 links on white; hover color `#04a46d` (measured).
- **Tile.** Photo or `#f7f7f7` field with an uppercase navy label, a short green rule beneath, and a green `#04a46d` caption block with "Read more" and a chevron; label hover turns `#04a46d`.
- **Statistics.** Large green megawatt figures with small navy captions (content from the live page; values not tokenized).
- **Footer.** `#f7f7f7`, navy uppercase headings.
- **Not documented as brand UI:** the stock ticker chip and quote block, and the cookie icon.

## Design System Architecture

No public design system or brand guidelines were found: the entry page and homepage were opened and link only to corporate content, and no search was run. The de-facto system is a Bootstrap 4 site (`--breakpoint-sm: 576px`, `--breakpoint-md: 768px`, `--breakpoint-lg: 992px`, `--breakpoint-xl: 1200px`) with an icon font. The brand layer is the navy and two-green palette, Roboto Condensed in weights 300/700, and 40px pill buttons. Source: https://www.ace-energy.co.th/en/home and https://www.ace-energy.co.th/en as measured by the repository extractor.

## Do's and Don'ts

- Do set text in navy `#0d1f6e` on white or `#f7f7f7`, in light-weight (300) Roboto Condensed.
- Do use `#52b78a` pills with white 17px/500 labels and 1px tracking.
- Do use `#04a46d` for caption blocks, key figures and link hover.
- Do headline in uppercase 60px bold on a translucent green band over photography.
- Don't use Bootstrap's `#007bff` or `#28a745`.
- Don't reuse the memorial entry page's grayscale styling or PSL typefaces.
- Don't document the stock ticker or cookie icon as components.

## Responsive Behavior

Measured on a 390px mobile pass: the headline drops from 60px to 36px (line-height 48.6px, 360px wide box); the primary button keeps 17px/500, 38px height and 132px width; the header measured 390px by 118px and shows only the EN and TH labels in the detected text. Header links visible fall from 12 to 4, a menu toggle labeled "Toggle navigation" is detected (`menuToggleVisible: true`), and the maximum card columns fall from 9 to 5. Body-text size on mobile measured 34px as on desktop. Other breakpoints are not measured.

## Iteration Guide

1. Use the tokens as measured on `/en/home`.
2. White canvas, navy `#0d1f6e` Roboto Condensed text, green pills `#52b78a`, caption blocks `#04a46d`.
3. Hero: 60px bold uppercase white headline on a translucent green band over a photograph.
4. Hover on links and tile labels: change to `#04a46d`.
5. If the extractor lands on the memorial entry page, measure `/en/home` with `--allow-spa-404`.
6. Run `node web/scripts/verify-designs.mjs --slug=absolute-clean-energy` until it passes.
