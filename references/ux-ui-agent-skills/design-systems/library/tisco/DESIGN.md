---
version: alpha
name: TISCO Bank
category: "Thai Brands"
description: "Thai bank TISCO's English home page: TISCO_AD typeface at 16px body and 26px headings, brand blue #1369b0 used for ink, headings and the 36px-high e-Service button (6px radius), white and #fafafa canvas, charcoal footer #212121 and hairline #dee2e6 table rules."
colors:
  canvas: "#ffffff"
  page-largest: "#fafafa"
  ink: "#1369b0"
  primary: "#1369b0"
  on-primary: "#ffffff"
  surface-dark: "#212121"
  ink-body: "#212529"
  hairline: "#dee2e6"
typography:
  display:
    fontFamily: TISCO_AD, sans-serif
    fontSize: 26px
    fontWeight: 400
    lineHeight: 41.6px
  button:
    fontFamily: TISCO_AD, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
  nav:
    fontFamily: TISCO_AD, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 3px
  sm: 6px
  md: 15px
  lg: 50px
spacing:
  s1: 5px
  s2: 6px
  s3: 9px
  s4: 10px
  s5: 15px
  s6: 20px
  s7: 30px
  s8: 48px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 10px 15px
    height: 36px
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 0px 10px
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.canvas}"
---

## Overview

TISCO Bank Public Company Limited (https://www.tisco.co.th/en/, title "TISCO Bank Public Company Limited.") is a Thai bank. The measured English home page is a conventional retail-banking portal: a thin blue utility bar (segment tabs Personal, SME, Corporate, Wealth at left; Investor Relations, TISCO Financial Group, Branch location and a TH / EN language switch at right), a white main bar with the TISCO ring logo, links Saving, Investment, Loan, Insurance, Services and a solid blue "e-Service" button, then a full-width blue carousel banner (the capture shows a Thai fraud warning "เตือนภัย" with an illustration of a phone and a hook).

Below the banner the page is a pale-grey field with section titles in blue (Promotions, Advisory, Announcement, News and Events, Current rate), a mosaic of promotion images (one large tile and four smaller), link lists with chevron bullets and hairline separators, and a "Current rate" deposit-rate table with zebra rows and the deposit-protection logo. The tone is plain, trustworthy and informational, with blue as the only brand voice. The extraction measured 462 visible elements.

## Colors

- Canvas `#ffffff`; page-largest `#fafafa` is the largest background area (1456), the pale field behind the content bands.
- Ink and primary `#1369b0` is the TISCO blue: it is the most-read text colour (770 characters: headings, links and list titles), the e-Service button fill and the carousel base; on-primary `#ffffff` (634 characters).
- Ink-body `#212529` (478 characters) for body text in tables and lists.
- Surface-dark `#212121` (476 area) is the footer; `#000000` is also measured (71, hero overlay).
- Hairline `#dee2e6` (18 uses) is the list and table separator; `#b7b7b7` is a secondary border (2).
- The stylesheet also holds Bootstrap defaults (`#0d6efd`, `#dc3545`, `#198754`, `#ffc107`) and WordPress Astra theme presets; these are framework defaults and not TISCO colours.

## Typography

One typeface, TISCO_AD (regular and bold), carries all 1882 measured characters and handles both Latin and Thai text. Weights: 400 (1848), 600 (25), 700 (9).

- Display: 26px/41.6px, weight 400, in blue (section titles such as "Announcement" and "Promotions").
- Button: 16px/16px, weight 700 ("e-Service").
- Nav: 14px/16px, weight 400 (utility and main links).
- Body text is 16px (1706 characters, the dominant size); the footer headings are 22px.
- No letter spacing is recorded.

Font substitute for design work: TISCO_AD is a proprietary face; a humanist sans with Thai support such as Sarabun or Noto Sans Thai is a design substitute, not measured.

## Layout

A 1280px desktop layout, container width 1140px for the content bands (the Promotions heading row is 1140px wide), with a utility bar and main bar totalling 116px. Gaps: 20px (44 occurrences), 10px (12), 5px, 30px, 6px. Paddings: 9px (68), 5px (47), 10px (34), 15px, 48px, 20px. The promotions block is one large tile plus a 2 by 2 set of small tiles in the capture; deposit rates sit in a two-column table with an "UNIT: % P.A." header. The footer is 427px tall.

## Elevation & Depth

Almost flat. The only visible shadows are inset 9999px overlays (`rgba(0, 0, 0, 0.05) 0px 0px 0px 9999px inset`, 16 times) and one soft `rgba(0, 0, 0, 0.5) 0px 0px 10px 0px` shadow. Structure comes from tone (`#fafafa` field, white tables, blue banner) and 1px `#dee2e6` rules.

## Shapes

Radii measured: 3px (4 elements), 6px (the e-Service button), 15px (1) and 50px (3, round language-switch badge and controls). Tokens: xs 3px, sm 6px, md 15px, lg 50px. The button uses the 6px value; cards and tiles are square-cornered in the capture.

## Components

- Primary button "e-Service": fill `#1369b0`, label `#ffffff`, TISCO_AD 16px weight 700, padding `10px 15px`, 36px high, 110px wide, 6px radius.
- Nav links: white text on the blue utility bar, 14px, padding `0px 10px`; on the white main bar they are blue and separated by thin vertical rules. Hover (measured on the language link "TH"): colour changes from `#ffffff` to `#1369b0`.
- Link lists: blue text, chevron bullet, 1px `#dee2e6` rule under each item.
- Rate table: header "Deposit Rates / UNIT: % P.A.", alternating light-grey and white rows.
- Footer: `#212121`, white text, 22px headings (About Us, About TISCO, Sustainable Development, Corporate Governance).

The content strategy is bilingual: the English page carries Thai-language promotions, announcements and news titles inside the same blue link list, so the type system must hold Thai glyphs at the same 16px size. Announcement and news items are one line each with a chevron, and each list ends with a right-aligned "View all" or "All Recommend" link followed by a double-chevron icon.

## Design System Architecture

No public TISCO design system or brand guideline was found; the pages opened were https://www.tisco.co.th/en/ (extractor). The site runs on a WordPress theme with the Astra preset variables (`--ast-global-color-*`, `--wp--preset--*`, `--e-global-color-astglobalcolor4` `#F5F5F5`) combined with Bootstrap 5 variables (`--bs-orange`, `--bs-success` and the `--bs-*` ramp), 180 root custom properties in all. The brand layer on top is small: the TISCO_AD font, the blue `#1369b0` and the charcoal footer.

## Do's and Don'ts

- Do use TISCO blue `#1369b0` for headings, links and the single primary button.
- Do separate list items with 1px `#dee2e6` rules rather than boxes.
- Do keep the footer charcoal `#212121` with white text.
- Do show bilingual (TH / EN) content with the same type system.
- Don't use Bootstrap's `#0d6efd` or `#007bff` blues.
- Don't use shadows heavier than the single 10px soft shadow.
- Don't round buttons beyond 6px.

## Responsive Behavior

Mobile pass (390px) measured: h1 26px/41.6px, and mobile sizes by characters are 16px (1656), 26px (57) and 22px (39); no mobile body role was captured. Mobile menu behaviour, column counts and image sizes were not measured.

## Iteration Guide

1. White and `#fafafa` fields, TISCO_AD text, blue `#1369b0` headings.
2. One blue "e-Service" style button at 36px high, 6px radius.
3. Lists with chevrons and `#dee2e6` separators; tables with zebra rows.
4. Charcoal footer.
5. Gate: `node web/scripts/verify-designs.mjs --slug=tisco`.

### Measured reference

All figures in this block are verbatim from the desktop extraction (weight in parentheses is the measured character, area or occurrence weight).

- Font families by characters: TISCO_AD (1882).
- Font sizes by characters: 16px (1706), 14px (80), 26px (57), 22px (39).
- Font weights by characters: 400 (1848), 600 (25), 700 (9).
- Letter spacing by size: none recorded.
- Text colours by characters: #1369b0 (770), #ffffff (634), #212529 (478).
- Background colours by area: #fafafa (1456), #212121 (476), #ffffff (90), #000000 (71), #1369b0 (63).
- Border radii: 3px (4), 50px (3), 15px (1), 6px (1).
- Box shadows: rgba(0, 0, 0, 0) 0px 0px 0px 9999px inset (18), rgba(0, 0, 0, 0.05) 0px 0px 0px 9999px inset (16), rgba(0, 0, 0, 0.5) 0px 0px 10px 0px (1).
- Border colours: #dee2e6 (18), #ffffff (3), #b7b7b7 (2).
- Gaps: 20px (44), 10px (12), 5px (4), 30px (2), 6px (2).
- Paddings: 9px (68), 5px (47), 10px (34), 15px (4), 48px (4), 20px (1).
- Stylesheet colours by count: #ffffff (260), #000000 (106), #b7b7b7 (57), #c20e1a00 (55), #1369b0 (41), #212529 (34), #6c757d (31), #0d6efd (30), #00000080 (25), #dc3545 (24), #00000033 (23), #198754 (23), #00000000 (21), #00000020 (19).
- Stylesheet font sizes: 16px, 20px, 14px, 24px, 13px, 15px, 32px, 26px, 18px, 30px, 40px, 12px, 22px, 25px.
- Stylesheet radii: 0px, 6px, 4px, 2px, 3px, 8px, 50px, 20px, 10px, 16px.
- Fonts loaded: TISCO_AD normal normal, TISCO_AD bold normal.
- Visible elements: 462; document language: en-US; hover states recorded: 10.
