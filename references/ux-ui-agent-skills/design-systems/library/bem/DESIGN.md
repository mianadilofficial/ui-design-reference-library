---
version: alpha
name: Bangkok Expressway and Metro (BEM)
category: "Thai Brands"
description: "Corporate transit-operator site for BEM, set entirely in two self-hosted Thai-capable faces, KitithadaRegular and KitithadaBold, at oversized pixel sizes (30px subheadings, 26px body) on a #f7f7f7 canvas with white cards, #666666 text and a single #0e4285 navy action color, square 0px corners, a #b7a676 gold accent for dates and pager marks, and no box shadows."
colors:
  canvas: "#f7f7f7"
  page-largest: "#ffffff"
  ink: "#666666"
  primary: "#0e4285"
  on-primary: "#ffffff"
  gold: "#b7a676"
  ink-muted: "#9a9a9a"
  blue-label: "#0c3c84"
  hairline: "#999999"
  navy-panel: "#242a44"
  tab-bar: "#dddddd"
typography:
  display:
    fontFamily: KitithadaRegular
    fontSize: 40px
    fontWeight: 400
    lineHeight: 40px
  display-mobile:
    fontFamily: KitithadaRegular
    fontSize: 60px
    fontWeight: 400
    lineHeight: 60px
  heading:
    fontFamily: KitithadaBold
    fontSize: 30px
    fontWeight: 400
    lineHeight: 40px
  subheading:
    fontFamily: KitithadaRegular
    fontSize: 30px
    fontWeight: 400
    lineHeight: 30px
  body:
    fontFamily: KitithadaRegular
    fontSize: 26px
    fontWeight: 400
    lineHeight: 30px
  nav:
    fontFamily: KitithadaRegular
    fontSize: 24px
    fontWeight: 400
    lineHeight: 40px
  tab-label:
    fontFamily: KitithadaBold
    fontSize: 26px
    fontWeight: 400
    lineHeight: 26px
rounded:
  xs: 4px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 10px
  s4: 15px
  s5: 18px
  s6: 20px
  s7: 21px
  s8: 23px
  s9: 25px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 0px 40px 0px 30px
    height: 45px
    borderColor: "{colors.primary}"
  button-outlined:
    textColor: "{colors.ink-muted}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 0px 40px 0px 30px
    height: 45px
    borderColor: "{colors.ink-muted}"
  tab-active:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.blue-label}"
    typography: "{typography.tab-label}"
    rounded: "{rounded.none}"
    padding: 10px 15px
    height: 46px
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    borderColor: "{colors.hairline}"
---

## Overview

Bangkok Expressway and Metro Public Company Limited (BEM) is the operator of Bangkok toll expressways and the MRT metro lines, and its English home page (`https://www.bemplc.co.th/?lang=en`, with a TH switch in the header) reads as a conservative corporate portal rather than a consumer product. The page is a stack of full-width bands on a pale grey `#f7f7f7` canvas: a header and hero band, a row of four icon shortcuts (MRT Route Map, Fare Calculation, Expressway Project, Toll Rates), two large photo tiles (Vision and Mission, Investor Relations), a tabbed news box beside a Career With BEM photo tile, a centred "B2B with BEM" call to action, a Sustainability Report banner, a Corporate Social Responsibility photo band, and a footer with social circles, call-centre hours, and collapsed Link Partner and Sitemap rows.

The voice is formal and institutional: plain nouns ("Investor Relations", "Nature of Business", "Procurement"), sentence-case descriptive lines such as "See More Information in detail.", and a corporate copyright line. Photography is stock-style and literal: glass towers seen from below, hands over printed charts, a smiling child outdoors, a conference microphone. Photo tiles carry a navy label band at the bottom, and the same navy `#0e4285` fills every button, which makes the brand feel like one blue, one gold and a lot of grey.

The capture contains a shareholder-notice pop-up with a dark scrim over the top of the page. That overlay, its Close button and the page's back-to-top control are page furniture, not brand UI, and none of them is recorded as a token here. The page was re-measured after the first capture showed the same pop-up; the extractor excludes elements inside dialogs from its role measurements, and the measured primary button is the in-page "More Detail" link, not the pop-up's "More Details" link.

## Colors

The page is built from a very small palette, all measured on the live home page.

- **Canvas `#f7f7f7`** is the body background and the page the viewer sees between sections. **White `#ffffff`** (`page-largest`) is the largest painted area by DOM weight: the news box, the header, the tab face and the footer rows.
- **Ink `#666666`** is the most-read text color (571 weighted characters) and also the navigation color. It is a mid grey rather than a near-black, so body copy is low-contrast on purpose.
- **Primary `#0e4285`** is the action navy: the "More Detail" button fill and border, the day-number badge in the news list, the hero label bands (measured at reduced alpha as `#0e4285bf` over photos) and the headline color of "B2B with BEM". White text sits on it (`on-primary` `#ffffff`).
- **Blue label `#0c3c84`** is the slightly darker navy used for the active tab label ("BEM News").
- **Gold `#b7a676`** is the accent. It colors the month-and-year half of each news date badge, the carousel pager bars and the small icon glyphs above the shortcut labels. A darker gold, `#9b8557`, was also measured as a background but covers one weighted unit and is not promoted to a token.
- **Muted ink `#9a9a9a`** colors the outlined "View all News" button text and border. **Hairline `#999999`** is the border on the language switch box.
- **Navy panel `#242a44`** is the dark half of the Sustainability Report band, and **tab bar `#dddddd`** is the grey strip behind the news tabs.

Contrast note: the framework link color `#337ab7` appears in the body's child colors; it is a Bootstrap default, not a BEM brand color, and is not used here. The black `#000000` area in the extraction is the pop-up scrim and is dropped.

## Typography

Every glyph on the page is one of two families, both declared in the site's own stylesheet with `@font-face` and self-hosted as `PSL094pro_0` (KitithadaRegular) and `PSL096pro_0` (KitithadaBold), with `.eot`, `.woff`, `.ttf` and `.svg` sources. KitithadaRegular carries 1101 of the weighted characters and KitithadaBold carries 95. Both are declared with `font-weight: normal`, so the "bold" look comes from the second family file, not from a numeric weight: every token below therefore has `fontWeight: 400`, which is exactly what the browser reports (weight 400 covers 1131 weighted characters and weight 700 covers 65, and the heading roles measured 400).

| Role | Family | Size / line | Measured on |
|---|---|---|---|
| display (h1 box) | KitithadaRegular | 40px / 40px | header h1 (logo, no text) |
| display-mobile | KitithadaRegular | 60px / 60px | the same h1 in the 390px pass |
| heading | KitithadaBold | 30px / 40px | tile titles such as "Vision and Mission" |
| subheading | KitithadaRegular | 30px / 30px | "See More Information in detail." and button labels |
| body | KitithadaRegular | 26px / 30px | opening hours paragraph, CSR copy |
| nav | KitithadaRegular | 24px / 40px | header navigation and body base |
| tab-label | KitithadaBold | 26px / 26px | "BEM News" tab |

The most-used size is 30px (672 weighted characters), then 26px (283), 20px (166), 40px (44) and 24px (28). The sizes look large for a corporate page because these faces have a small x-height at a given size; do not scale them down toward the 16px defaults of a Latin system face. Letter spacing is `normal` and text transform is `none` everywhere measured, so the site never uses uppercase labels or tracking.

Font substitutes: no public specimen or license page for the PSL files was found on the pages opened, so no substitute is verified. To rebuild, load the same two families from the site's font files if you hold a license; otherwise choose any Thai-capable humanist sans that can be set in the same pixel sizes and keep the Regular/Bold pairing as two separate faces.

## Layout

The desktop pass measured a 1280px viewport with the page 2836px tall. Sections are full-bleed bands; inside them content aligns to a Bootstrap-style `.container` (the stylesheet declares `.container` with `padding-left` and `padding-right` of 10px and floats cleared with `:before/:after`). Measured box widths show how wide the content runs: the centred sub-heading under "B2B with BEM" spans 1240px, a photo-tile title spans 565px, the primary button is 170px by 45px, the active news tab is 111px by 46px, and the outlined "View all News" button is 193px by 45px.

Spacing is built from a short list of paddings, in px by usage count: 10 (39 uses), 20 (12), 21 (10), 18 (10), 5 (9), 15 (7), 30 (5), 25 (4), 1 (2) and 23 (1), which is the `spacing` scale in the front matter. Rows are generous vertically (the body line height is 40px at a 24px base) and the page gives each band its own full-width background so the rhythm reads as alternating pale grey, white, navy and photo.

Visual structure from the capture: a 4-up icon shortcut row sits under the hero; two equal photo tiles share a row; below, a two-column block puts the news tabs on the left and the Career With BEM tile on the right; the Sustainability band splits into a pale-blue illustration half and a `#242a44` navy half; the CSR band lays white text over a photograph with a primary button underneath; the footer is three text columns followed by two full-width accordion rows.

## Elevation & Depth

The design is flat. No `box-shadow` was measured on any element of the home page, and no tokens for elevation are declared. Depth comes from three things only: photo tiles with a translucent navy band (`#0e4285` at reduced alpha) over the bottom of the image, the `#dddddd` strip behind the tab labels, and the white news box lifted against the `#f7f7f7` canvas by color alone.

The shared Bootstrap-era stylesheet declares shadows for components such as modals and dropdowns (for example `0 10px 25px rgba(0, 0, 0, 0.5)` and `0 6px 12px rgba(0, 0, 0, 0.175)` appear in the CSS corpus), but none of them is on the measured home-page elements, so treat them as framework leftovers rather than brand elevation. The pop-up overlay in the capture is not a depth token.

## Shapes

Corners are square. Every measured button, tab and navigation element has `border-radius: 0px` (`rounded.none`), including the primary button, which is a hard-edged navy rectangle with a 1px solid `#0e4285` border. A 4px radius (`rounded.xs`) appears once in the measured border radii, and four elements carry a 100% radius, and the capture shows circular social icons in the footer. The front matter keeps `pill: 9999px` for that fully round shape.

Icons are line-style navy glyphs with gold accents (a train, a coin, a road, a toll gate) placed above short two-line labels in `#666666`. Chevron arrows sit inside buttons to the right of the label, which is why the primary button has asymmetric padding of `0px 40px 0px 30px`: the extra right padding holds the arrow.

## Components

**Primary button (`button-primary`).** Fill `#0e4285`, border 1px solid `#0e4285`, text `#ffffff` in KitithadaRegular 30px, height 45px, padding `0px 40px 0px 30px`, radius 0px, with a trailing chevron. It is used for "More Detail" under B2B with BEM and under the CSR copy.

**Outlined button (`button-outlined`).** Transparent fill, text and 1px border in `#9a9a9a`, same 30px type, 45px height and padding as the primary. Used for "View all News", where it signals a lower-priority action next to the news list.

**News tabs (`tab-active`).** The tab strip sits on `#dddddd`; the active tab "BEM News" has a white face, text `#0c3c84` in KitithadaBold 26px, 10px by 15px padding and a 46px height. The inactive tab ("CSR Activities") shares the strip color.

**Date badges.** Each news row starts with a two-part badge: the day number on a `#0e4285` block with white text above a month-and-year block in `#b7a676` gold. This is the only place the gold fills a surface.

**Navigation.** Navigation links are KitithadaRegular 24px in `#666666`; the language switch is a 38px by 38px square with a 1px solid `#999999` border. The primary nav lists About BEM, Metro Business, Expressway Business, Investor Relations, BEM News, Sustainability, B2B with BEM (with Procurement beneath it), Career with BEM and Contact Us, with sub-lists such as Milestone, Corporate Governance and Code of Conduct.

**Photo tiles.** A photograph fills the tile, a translucent navy band across its lower part carries the title in white KitithadaBold 30px, and the tile is the whole link target.

## Design System Architecture

BEM publishes no public design system, brand guidelines or press kit: the home page navigation has no brand, press or design link, and the probe URLs `https://www.bemplc.co.th/brand`, `/press`, `/design` and `/about` all redirect to `https://www.bemplc.co.th/error_page`. The de-facto system is a compiled Bootstrap-era stylesheet bundle:

- `https://www.bemplc.co.th/Content/default/css/main.css` (about 428 KB) holds the Bootstrap grid and button rules (more than 600 `.btn` selectors), Font Awesome 6 variables on `:root` (`--fa-style-family-classic`, `--fa-font-solid`), and compiled SCSS comments such as "set global config vars", "default page width setting(PC)", "off canvas menu width", "header height" and "default theme color". Unresolved SCSS names such as `$font-header-bold` and `$screen-sm-min` remain inside it.
- `https://www.bemplc.co.th/Content/default/css/content/default.css` and `home.css` declare the two `@font-face` families and the page-specific rules: the pager bars use `#b7a676` at `rgba(183, 166, 118, 0.7)`, and the tab strip is styled with `#DDDDDD`.
- The page loads jQuery, jQuery UI, Bootstrap's JavaScript, slick and owl.carousel for carousels, fancybox for lightboxes, selectric and bootstrap-select for form selects, and sweetalert2 for dialogs.

There are no CSS custom properties for color or type besides the Font Awesome ones, so values are hard-coded in rules. The design tokens in this file are therefore measurements of computed styles, not published tokens.

## Do's and Don'ts

Do
- Use `#0e4285` for every call-to-action and keep the label white, at KitithadaRegular 30px, inside a 0px-radius rectangle with a trailing chevron.
- Keep copy in the formal, noun-led voice and show the TH/EN switch as a bordered square at the top right.
- Reserve `#b7a676` gold for small accents: date badges, pager bars and icon highlights.
- Pair KitithadaBold titles in white with a translucent navy band over a photograph.
- Keep surfaces flat: color changes between `#f7f7f7`, white, `#242a44` and photography do all the separation.

Don't
- Do not add shadows, gradients on buttons or rounded corners; none were measured.
- Do not use Bootstrap's `#337ab7` or the browser's default link blue as a brand color.
- Do not document or copy the pop-up, its scrim, the Close button or the back-to-top control as part of the brand.
- Do not set a numeric bold weight; the site switches between two font files instead (both measured at `fontWeight` 400).
- Do not use uppercase or tracked-out labels; transform and letter spacing are `none` and `normal`.

## Responsive Behavior

The stylesheet declares many media queries: the most frequent are `max-width: 768px`, `max-width: 767px`, `max-width: 999px` and `max-width: 1199px`, plus `min-width: 768px`, `min-width: 1000px`, `min-width: 1200px`, and smaller phone cutoffs at `max-width: 375px`, `415px` and `480px` (counts taken from the extractor's breakpoint scan of the shipped CSS). What each rule does to individual components is not measured.

The mobile pass at 390px recorded these computed values:
- The header h1 box grows to 60px / 60px in KitithadaRegular (desktop 40px), at 120px by 35px.
- The tile title (h2) is KitithadaBold 26px with a 34px line height (desktop 30px / 40px).
- Body text is 22px with a 26px line height (desktop 26px / 30px).
- The primary button keeps 30px type and a 43px line height, with padding `0px 40px 0px 15px`, 155px wide and 40px high (desktop 170px by 45px).
- A navigation panel was measured at 300px wide and 844px tall with a `#0c4185` background, white KitithadaRegular 26px text and 20px padding; it opens with a "Close" control and lists Home, About BEM and the other items.

Mobile hover, tablet widths and grid column changes are not measured; no mobile capture image was taken.

## Iteration Guide

1. Start from the palette: canvas `#f7f7f7`, white cards, ink `#666666`, one navy `#0e4285`, one gold `#b7a676`. Add no further hues.
2. Set type with two faces. Use KitithadaBold only for tile titles (30px / 40px) and tab labels (26px / 26px); use KitithadaRegular elsewhere at 24px, 26px or 30px. Keep the weight at 400 and let the font file carry the emphasis.
3. Build buttons as 0px-radius rectangles: primary solid navy 45px high with `0px 40px 0px 30px` padding and a chevron; secondary outlined in `#9a9a9a`.
4. Compose pages as full-width bands: shortcut row, two photo tiles, news-plus-career block, a centred B2B call to action, a sustainability band split between a light illustration and `#242a44`, a CSR photo band, then a three-column footer.
5. Check every new surface against the measurements in `web/data/extracted/bem.json` before adding a token; if a value is not there, cite an official source or leave it out.
6. Test the pop-up case: when a notice overlays the page, hide the overlay before you read colors so the scrim black never enters the palette.
