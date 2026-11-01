---
version: alpha
name: LH Bank
category: "Thai Brands"
description: 'LH Bank (Land and Houses Bank, Thailand) personal-banking home page measured live: #f1f3f5 canvas, white cards at 15px radius, sky-blue #39a3ce 36px pill-style buttons, #333333 text, and the proprietary LHBankHeader family in three weights.'
colors:
  canvas: '#f1f3f5'
  page-body: '#ffffff'
  ink: '#333333'
  primary: '#39a3ce'
  on-primary: '#ffffff'
  surface-input: '#f9f9f9'
  ink-2: '#666666'
  ink-pale: '#e9f2f4'
  ink-link: '#444444'
  primary-hover: '#44b9e8'
  text-input-text: '#000000'
  card-text: '#8b3f92'
typography:
  display:
    fontFamily: LHBankHeaderBold
    fontSize: 22px
    fontWeight: 400
    lineHeight: 33px
  display-mobile:
    fontFamily: LHBankHeaderBold
    fontSize: 26px
    fontWeight: 400
    lineHeight: 39px
  button:
    fontFamily: LHBankHeaderBold
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  nav:
    fontFamily: LHBankHeader
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  link:
    fontFamily: LHBankHeader
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: LHBankHeaderThin
    fontSize: 38px
    fontWeight: 400
    lineHeight: 57px
rounded:
  xs: 3px
  sm: 15px
  md: 18px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 11px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: '{colors.primary}'
    textColor: '{colors.page-body}'
    typography: '{typography.button}'
    rounded: '{rounded.md}'
    padding: 6px 12px
    height: 36px
  button-primary-hover:
    backgroundColor: '{colors.primary-hover}'
  link:
    textColor: '{colors.ink-link}'
    typography: '{typography.link}'
  nav:
    textColor: '{colors.ink-2}'
  nav-link:
    textColor: '{colors.ink-2}'
    typography: '{typography.nav}'
  text-input:
    backgroundColor: '{colors.surface-input}'
    textColor: '{colors.text-input-text}'
    typography: '{typography.input}'
    padding: 1px 2px
    height: 46px
  card:
    backgroundColor: '{colors.page-body}'
    textColor: '{colors.card-text}'
    rounded: '{rounded.sm}'
    boxShadow: rgba(0, 0, 0, 0.2) 0px 0px 3px 0px
  footer:
    textColor: '{colors.page-body}'
---

## Overview

LH Bank is a Thai mid-size bank, and the measured page is the English-language "Personal Customers" home (`https://www.lhbank.co.th/en/personal/`, the destination of the queued `/en/` URL). The opened page's title reads "Personal Customers | Deposit services, loans, insurance, investments, digital banking", and the footer mission statement reads "To be a leading mid-size bank, renowned for delivering exceptional value". The content is bilingual: English interface labels around Thai promotional copy.

The capture shows a thin top bar (About Us, Investor Relations, Contact Us, a group link, "Tel 1327" with a phone icon and an EN switch), a white header with the LH BANK wordmark under a thin multicolor stripe, a segment switcher (Personal, SME, Corporate), map-pin and search icons, and a sky-blue "Digital Banking" button. A full-width promotional carousel (a teal banner about tax-saving funds, with round arrow buttons) is followed by a large thin-weight search field, "Type your search", with a row of underlined quick links: All Promotions, Interest Rates/Fees, Exchange Rates, Economic Analysis, Job Opportunities, Loan Tips. A white rounded panel lists five life-stage shortcuts with colorful line icons: Start Working, Family Building, Security Empowering, Retirement Planning, Wealth Building. Lower sections are "LH Bank Advisory" (cards, one with a purple title "The Advisory Branch"), "Recommended Product/Promotions" (three white cards with "Read more" links), "News and Activities" with tiles "Digital Banking", "Financial 101" and "Asset for Sale", and a teal footer with link columns (Our products, About Us, Other Information, Information Disclosure, Contact LH Bank).

The tone is professional, reassuring and plain-spoken, with convenience and financial planning as the themes.

## Colors

Values are from `web/data/extracted/lh-bank.json`.

- **Canvas `#f1f3f5`**: the largest background area (weight 1326). **Surface-input `#f9f9f9`** (1027) is the second largest and the search field background; **page-body `#ffffff`** (888) is the card and header surface.
- **Ink `#333333`**: the most-read text color (502 characters), the h1 color. **`#666666`** (ink-2, 460 characters) is the body and nav color, and **`#444444`** (ink-link) is the link and tile-label color.
- **Primary `#39a3ce`**: the sky blue of the "Digital Banking" button and of "Read more" links (258 characters of text in this color); **on-primary `#ffffff`**. Hover fill `#44b9e8` (token `primary-hover`) was measured by probe, from `rgb(57, 163, 206)` to `rgb(68, 185, 232)`.
- **Ink-pale `#e9f2f4`**: light text (364 characters), used on dark teal areas such as the footer, per the capture.
- **Card text `#8b3f92`**: the purple of the "The Advisory Branch" card title.
- **Text-input text `#000000`**: the search field's typed text.

The page's root variables are the Bootstrap defaults (`--blue: #007bff`, `--primary: #007bff`, `--indigo: #6610f2`, `--green: #28a745`, `--yellow: #ffc107` and so on), which are not brand colors and are ignored. The multicolor stripe under the header and the teal banners come from images and are not tokenized.

## Typography

LH Bank uses its own proprietary family in three cuts: **LHBankHeader** (1615 characters) for body, nav and links, **LHBankHeaderBold** (645) for headlines and buttons and **LHBankHeaderThin** for the large search field. All weights are declared as normal in `@font-face`; fontWeight tokens are 400.

| Token | Size / line-height | Family | Where |
|---|---|---|---|
| `display` | 22px / 33px | LHBankHeaderBold | h1 role "LH Bank Advisory" |
| `display-mobile` | 26px / 39px | LHBankHeaderBold | mobile h1 |
| `button` | 14px / 21px | LHBankHeaderBold | "Digital Banking" button |
| `nav` | 14px / 21px | LHBankHeader | top and main nav |
| `link` | 16px / 24px | LHBankHeader | links such as "Start Working" |
| `input` | 38px / 57px | LHBankHeaderThin | search field |

By character count: 14px (1271), 16px (456), 18px (426), 22px (105), 12px (2). Weights: 400 (2176), 500 (74), 700 (10). No letter-spacing was measured. The "Type your search" input is notably large and light. The family has no documented public substitute.

## Layout

The page is a vertical stack of full-width bands in alternating gray `#f1f3f5` and white, each holding a centered container of cards. The carousel is full bleed; the life-stage panel is a single white rounded strip with five equal cells separated by thin vertical dividers, as visible in the capture. Page height measured 2772px. The header measured 117px high.

Spacing tokens: 1px, 2px, 4px, 5px, 6px, 8px, 11px, 12px, 15px, 16px. Padding frequencies: 15px (44 uses), 8px (36), 2px (15), 20px (13), 1px (9), 17px (9). No gap values were measured. The CSS declares the Bootstrap breakpoints `--breakpoint-sm: 576px`, `--breakpoint-md: 768px` and `--breakpoint-lg: 992px`.

## Elevation & Depth

Cards use faint, wide-blur edge shadows: `rgb(224, 224, 224) 0px 0px 3px 0px` (4 uses), `rgba(0, 0, 0, 0.2) 0px 0px 3px 0px` (3, on the card token) and `rgba(0, 0, 0, 0.1) 0px 0px 3px 0px` (3). All have zero offset and a 3px blur, so cards appear outlined by a soft halo rather than lifted. One border color was measured, `#ffffff` (the button border).

## Shapes

Radii measured: 15px (18 elements), 18px (4), 100% (3), `3px 3px 0px 0px` (3), 3px (3) and 9999px (1). Tokens: `xs: 3px`, `sm: 15px`, `md: 18px`, `pill: 9999px`. Cards and tiles use 15px; the primary button uses 18px, which is half of its 36px height and so makes it a capsule; round arrow buttons and icon holders use 100%.

## Components

**Primary button (`button-primary`)**: `#39a3ce` fill, white text, LHBankHeaderBold 14px / 21px, radius 18px, padding `6px 12px`, height 36px. Label "Digital Banking". Hover: `#44b9e8`.

**Tile / secondary link**: white fill, `#444444` text at 18px / 27px, radius 15px, padding 2px, 70px high ("Digital Banking", "Financial 101", "Asset for Sale"), with a right-arrow icon.

**Text input (`text-input`)**: `#f9f9f9` background, black text, LHBankHeaderThin 38px / 57px, padding `1px 2px`, height 46px, with a bottom line and magnifier icon in the capture.

**Card (`card`)**: white background, `#8b3f92` title color on the advisory card, 15px radius, shadow `rgba(0, 0, 0, 0.2) 0px 0px 3px 0px`; cards end with a blue "Read more" link and arrow.

**Nav (`nav`, `nav-link`)**: `#666666` text at 14px / 21px; the active "Personal" segment is blue with an underline in the capture.

**Footer (`footer`)**: white text, 14px weight 500, 453px tall, on a teal ground.

**Scroll-to-top control**: a round outlined button at the right edge; not brand UI.

## Design System Architecture

No public design system or brand guideline is linked from lhbank.co.th: the opened page links only to products, services and policy documents (Cookies Notice, Privacy Notice, Personal Data Protection, Security Policy, Disclaimer), so no official source exists to cite beyond the site itself (https://www.lhbank.co.th/en/personal/). The measured CSS carries Bootstrap's default root variables and breakpoints with the Swiper carousel (`--swiper-navigation-size: 44px`) alongside it, with a proprietary three-cut typeface and the sky-blue accent. Brand colors are not exposed as variables.

## Do's and Don'ts

Do:
- Use `#39a3ce` for primary actions and "Read more" links, with white text on filled buttons.
- Keep pages on `#f1f3f5` with white cards at 15px radius.
- Use LHBankHeaderBold for headings and buttons and LHBankHeader for text.
- Use soft 3px-blur halos for cards.
- Provide life-stage shortcuts with simple line icons.

Don't:
- Do not use Bootstrap's `#007bff` as a brand color.
- Do not add heavy drop shadows; measured shadows have no offset.
- Do not use sharp-cornered cards; the measured radius is 15px.
- Do not set UI text above 22px except the thin search field.

## Responsive Behavior

The 390px mobile pass recorded: h1 26px / 39px (desktop 22px / 33px), the primary button unchanged at 14px, padding `6px 12px`, 36px high, radius 18px, and a header block 161px high with `#ffffff` text on a white ground. Column counts, menu form and breakpoints at that width are not measured; the CSS declares Bootstrap's 576px, 768px and 992px breakpoints.

## Iteration Guide

1. Set `canvas` `#f1f3f5`, card `#ffffff`, `ink` `#333333`, `primary` `#39a3ce`.
2. Use LHBankHeaderBold 22px / 33px for section titles and 14px for buttons.
3. Build buttons 36px high with 18px radius and padding `6px 12px`; cards at 15px radius.
4. Use halo shadows of `0px 0px 3px` in 0.1 to 0.2 black.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=lh-bank --url=https://www.lhbank.co.th/en/personal/ --force --no-motion` before changing any value, then `node web/scripts/verify-designs.mjs --slug=lh-bank`.
