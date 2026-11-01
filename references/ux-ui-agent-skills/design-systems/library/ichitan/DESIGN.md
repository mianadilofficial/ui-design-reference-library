---
version: alpha
name: Ichitan Group
category: "Thai Brands"
description: "Ichitan Group (ichitangroup.com/en) measured: investor-and-brand site with Poppins and Noto Sans Thai, a 57px/500 white hero headline, #e30613 red pill buttons (40px radius, 8px 32px padding), 20px-radius news cards on a #f2efe8 band, a #3b996d green accent and a black footer."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#e30613"
  on-primary: "#ffffff"
  surface: "#f2efe8"
  accent-green: "#3b996d"
  ink-grey: "#656567"
  ink-charcoal: "#212529"
  hairline: "#d2d2d3"
  nav-bg: "#ffffff1a"
typography:
  display:
    fontFamily: Poppins, "Noto Sans Thai", sans-serif
    fontSize: 57px
    fontWeight: 500
    lineHeight: 71.25px
  display-mobile:
    fontFamily: Poppins, "Noto Sans Thai", sans-serif
    fontSize: 31.8px
    fontWeight: 500
    lineHeight: 44.52px
  button:
    fontFamily: Poppins, "Noto Sans Thai", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  link:
    fontFamily: Poppins, "Noto Sans Thai", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 4px
  sm: 8px
  md: 20px
  lg: 40px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 32px
  s8: 40px
  s9: 44px
  s10: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 32px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 32px
    height: 40px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
    boxShadow: rgba(0, 0, 0, 0.08) 0px 4px 5px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 24px 8px 44px
    height: 50px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-grey}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

## Overview

The measured page is the English home of Ichitan Group Public Company Limited (https://www.ichitangroup.com/en/home, title "Ichitan Group"), the corporate and investor site of the Thai green-tea beverage company. It opens with a white header carrying the red swirl logo centred above the word ICHITAN, a language switch "EN" and a round red search button; beneath it a one-line navigation bar reads About Us, Businesses, Products and Brands, Governance, Sustainability, Investor Relations, News and Media, Careers, Contact Us and TANLAND. A full-width portrait photograph of a woman smiling in sunlight carries the white 57px headline "Innovation in every drop, made to brighten your day".

At the bottom of the hero sit two panels: a red "Latest Documents" panel (with the item "Financial Statement Quarter 2/2026" and an arrow button) and a white stock widget ("SET: ICHI 13.20 THB", change, last-updated timestamp). The page then moves to a pair of large rounded campaign banners (a founder portrait among green-tea bottles and a "100% Recyclable Bottle" illustration with the rPET message), and then a beige "Corporate Movements" band with three news cards dated 10 September 2026 and 17 August 2026 and a red "View All" pill. Copy is corporate-English: headlines announce partnerships, results and dividends, for example the Q2/2026 sales result, an interim dividend of THB 0.45 per share and a partnership launching a fertiliser product, each written as a full sentence with figures. Navigation uses plain business labels, and the only brand-voice line on the page is the hero headline about innovation and brightening the reader's day. A cookie dialog was visible in the capture; it is not documented as brand UI.

## Colors

- **Canvas** `#ffffff` with a warm beige band `#f2efe8` (1472 area units, the largest background; token `surface-beige`).
- **Ink** `#000000` (1809 characters) for headings and navigation; white (959 characters) on photography, red and black; `#656567` (83) for meta lines on cards; `#212529` (11) in small amounts.
- **Primary** `#e30613` (declared as `--red-500`), the ICHITAN red, fills "View All", the Latest Documents panel and the hero buttons, with white labels. The stylesheet also declares a red ramp from `--red-50` `#fce6e7` through `--red-900` `#5f0308`.
- **Accent green** `#3b996d` (`--green-500`, 1024 background units; also 4 characters of text, the stock ticker "ICHI"). The green ramp spans `#ebf5f0` to `#02342d`.
- Other measured backgrounds are light-green/yellow card tints, `#fff696` (890), `#efffa6` (742) and blue `#e0edff` (742) seen behind illustrations and banners, plus black `#000000` (515) for the footer.
- **Nav background** `#ffffff1a` (translucent white) over the hero.
- **Hairline** `#d2d2d3`; a `#00000033` border also appears.
- Bootstrap's root `--primary: #007bff` is a framework default, unused here.

## Typography

The family is **Poppins** (400, 500, 600) with **Noto Sans Thai** as the Thai companion and sans-serif fallback; Font Awesome 6 Pro and an icomoon icon font are loaded for icons. Roboto appears in the CSS (78 declarations).

| Role | Measured |
|---|---|
| Display | Poppins 500, 57px / 71.25px; 31.8px / 44.52px at 390px |
| Button | 16px / 400 / 22.4px |
| Link | 14px / 400 / 21px (for example "Factsheet 6M2026") |
| Nav link | 16px / 400 / 24px |
| Card meta | 14px / 400, colour #656567 |

Sizes by characters: 23px (935), 14px (854), 19px (567), 16px (232), 57px (139), 40px (77) and 48px (34). Weights: 500 (1761), 400 (1091), 600 (14). The "Corporate Movements" section heading is large and medium weight, and card titles are 500.

## Layout

The desktop pass is 1280px wide and 4502px tall. The root variable `--header-height` is 143px. The header has two rows (logo and utilities, then the nav row). The hero is a full-bleed photograph with the text block left and the two info panels at the bottom edge. Content sections use a left-aligned container with generous vertical whitespace; the news section is a three-column card grid under a heading and a right-aligned "View All" pill. Spacing values: 4, 6, 8, 12, 16, 24, 32, 40, 44 and 64px. Bootstrap breakpoint variables (`--breakpoint-xxl` and others) are declared.

## Elevation & Depth

Depth is restrained and mostly tonal: white cards sit on a beige band, red panels sit over photography, and the navigation bar is the one element that carries a consistent soft shadow. Two shadows were measured: `0 4px 5px 0 rgba(0,0,0,0.08)` on the navigation bar and `0 4px 20px 0 rgba(0,0,0,0.1)` on one element. Cards are otherwise flat white on the beige band, separated by colour contrast.

## Shapes

Radii: 20px (43 elements: cards, banners, panels), 40px (10: pills and search input), 4px (6), 8px (3), 50% (2: the round icon buttons) and the asymmetric `20px 20px 0 0` for card image tops. Tokens: `xs` 4px, `sm` 8px, `md` 20px, `lg` 40px, `pill`.

## Components

- **button-primary**: `#e30613` fill, white 16px/22.4px label, 40px radius, padding 8px 32px, height 40px. The hover state recorded in the tokens sets the text colour to the red `#e30613`.
- **Outlined/white pill**: "TANLAND" in the nav row has a white fill and black text with 40px radius.
- **Text input** (site search): white, black text 16px, 40px radius, padding 8px 24px 8px 44px, height 50px.
- **News card**: white, 20px radius, image on top with 20px radii, grey date (14px, `#656567`), 500-weight title, and a "Read More +" link.
- **Latest Documents panel**: red block with arrow button.
- **Footer**: black, white text, company name and address ("Ichitan Group Public Company Limited, No. 8 T-One Building").

## Design System Architecture

No public design-system or brand-guideline page was linked and none was searched. The site's CSS (from https://www.ichitangroup.com/en/home) is Bootstrap-based: 91 root variables include Bootstrap's colour names (`--red`, `--yellow`, `--pink`, `--gray-dark`, `--primary`) alongside brand ramps (`--red-50` to `--red-900`, `--green-100` to `--green-900`, `--yellow-200` to `--yellow-700`, `--blue-100` to `--blue-800`, `--light-green-200` to `--light-green-400`, `--grey-400`, `--grey-900`), `--header-height`, Bootstrap breakpoints and the Font Awesome 6 font variables. The ramps are the real design tokens; the Bootstrap defaults are not brand values.

## Do's and Don'ts

- Do use ICHITAN red `#e30613` for primary actions with white labels and 40px pill radius.
- Do use Poppins with Noto Sans Thai for any Thai content.
- Do place news in 20px-radius white cards on the `#f2efe8` band.
- Do use `#3b996d` as the single green accent (tickers, green-tea cues).
- Don't use the Bootstrap blue `#007bff` or `#dc3545`.
- Don't document the cookie dialog buttons as brand components.
- Don't add heavy shadows; the maximum measured is 20px blur at 0.1 alpha.

## Responsive Behavior

Measured at 390px: the headline falls from 57px to 31.8px (line-height 44.52px), the primary button is unchanged (16px, padding 8px 32px, 40px radius), and the nav text is 17.4813px with line-height 24.4737px on a white header background. Mobile text sizes by characters: 19.4562px (1955), 14px (854), 17.4813px (688), 16px (115). Other layout behavior was not measured.

## Iteration Guide

1. Start from white with the `#f2efe8` band for news and use Poppins everywhere.
2. Put a full-bleed photograph in the hero with a 57px/500 white headline and two bottom panels.
3. Use red pills with white labels for actions; white pills for secondary navigation.
4. Build cards at 20px radius with grey meta and 500-weight titles.
5. Use the `accent-green` only for data cues; keep the footer black.
6. Verify each value against the frontmatter before adding anything, and write "not measured" for any behavior (menus, hover on cards, tablet layouts) that the extraction did not record.
