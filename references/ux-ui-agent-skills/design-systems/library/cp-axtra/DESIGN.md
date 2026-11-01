---
version: alpha
name: CP Axtra
category: "Thai Brands"
description: "CP Axtra (cpaxtra.com/en/home) measured at 1280px: Prompt in 400/500/700, uppercase bold headings, CP yellow #ffc01f pill buttons (15px radius), blue #0171cc for the stock ticker and links, #edf7ff light-blue bands, translucent #ffffffcc cards with 15px radius, and a 120px white header."
colors:
  canvas: "#ffffff"
  ink: "#101010"
  primary: "#ffc01f"
  on-primary: "#ffffff"
  surface-blue: "#edf7ff"
  accent-blue: "#0171cc"
  black: "#000000"
  accent-red: "#ed1f24"
  button-secondary-bg: "#ffffff40"
  card-bg: "#ffffffcc"
  accent-teal: "#00bcb4"
  navy: "#1a4989"
  yellow-dark: "#f9be00"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 15px
    fontWeight: 700
    lineHeight: 22.5px
    textTransform: uppercase
  heading:
    fontFamily: Prompt, sans-serif
    fontSize: 19px
    fontWeight: 700
    lineHeight: 23.75px
    textTransform: uppercase
  subheading:
    fontFamily: Prompt, sans-serif
    fontSize: 76px
    fontWeight: 700
    lineHeight: 95px
    textTransform: uppercase
  body:
    fontFamily: Prompt, sans-serif
    fontSize: 33px
    fontWeight: 700
    lineHeight: 49.5px
  button:
    fontFamily: Prompt, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    textTransform: uppercase
  nav:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: Prompt, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 48px
    textTransform: uppercase
  button-secondary:
    fontFamily: Prompt, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 21px
    textTransform: uppercase
rounded:
  xs: 3px
  sm: 5px
  md: 15px
  lg: 23px
  pill: 9999px
spacing:
  s1: 2.4px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 9.6px
  s6: 10.8px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 4px 16px
    height: 28px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.black}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 8px 24px
    height: 44px
    borderColor: "{colors.black}"
    boxShadow: rgba(1, 113, 204, 0) 0px 0px 0px 5px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 6px 12px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.accent-blue}"
    padding: 0px 16px
    boxShadow: rgba(0, 0, 0, 0.05) 0px 3px 10px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 24px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 24px 0px 48px
---

## Overview

This file documents the English home page of CP Axtra Public Company Limited, measured at `https://www.cpaxtra.com/en/home` (the queued `https://www.cpaxtra.com/en` redirects there). Measurement ran at 1280px desktop and 390px mobile after a modal ("dialog modal show"), its backdrop and a second dialog ("dialog s-cnt") were hidden; they are not brand UI. The page's recorded `scrollHeight` is 800px while the single band measured spans 12374px, so the capture shows only the first viewport: the header and an opening animated "OUR VISION" particle-sphere video on a dark teal-to-red field. Everything below the first viewport is known only from measured DOM roles and text, not from the image.

The header is a two-tier 120px white bar with a soft shadow. The top tier holds the CP AXTRA logo, a row of recognition badges, a live ticker ("CPAXT 14.10 THB +0.10 (+0.71%)") in blue, a yellow pill "OUR STORES" button, a search icon and a "TH · EN" language switch. The lower tier lists nine uppercase bold links: ABOUT US, OUR BUSINESSES, INVESTORS, SUSTAINABILITY, GOVERNANCE, BRAND LOVE, PLATFORM OF OPPORTUNITY and SELL WITH US.

Measured copy below the fold includes the large headings "JOIN US" (76px) and "WHOLESALE" (48px), a mission statement beginning "BUILD A REGIONAL, MULTI-FORMAT, OMNICHANNEL RETAIL PLATFORM", a yellow heading "OUR BUSINESS NETWORK" and a translucent stat card ("TOTAL REVENUES 1H2026 268,334 MILLION BAHT"). The voice is corporate retail and investor-facing, almost entirely uppercase.

## Colors

- **canvas `#ffffff`**: the dominant background (area weight 5076).
- **surface-blue `#edf7ff`**: a pale blue band (1311), the site's `--blue-200`.
- **card-bg `#ffffffcc`** and **button-secondary-bg `#ffffff40`**: translucent white fills for cards (607) and the secondary button (66).
- **ink `#101010`**: the main text colour (2864 characters), the site's `--grey-900`.
- **primary `#ffc01f`**: CP yellow, the site's `--yellow-500`. It fills the "OUR STORES" button and sets the "OUR BUSINESS NETWORK" heading text (38 characters). `on-primary` is `#ffffff` on that fill.
- **accent-blue `#0171cc`**: the site's `--blue-500`; the ticker and nav text colour (142 characters), the hover colour of the TH/EN links, and the blue behind the card shadows (`rgba(1, 113, 204, 0.25)`).
- **accent-teal `#00bcb4`**, **accent-red `#ed1f24`**, **navy `#1a4989`**, **yellow-dark `#f9be00`**: small-area colours (area weight 3 to 9) matching the site's `--green-500`, `--red-500`, `--navy-blue-500` and `--dark-yellow-500` variables; they are listed only because they were measured, and their placement was not identified.
- **black `#000000`**: the secondary button's text and border (16 border elements).

The root variables define a full named scale: `--blue-100` to `--blue-900`, `--yellow-100` to `--yellow-900`, `--green-100` to `--green-900`, `--red-100` to `--red-900`, `--grey-100` to `--grey-900`, plus pink, purple, orange and light-blue families. They are the site's own palette. Bootstrap defaults also present (`--primary: #007bff`, `--success`, `--danger`) and the Swiper `--swiper-theme-color: #007aff` are framework values, not brand colours.

## Typography

Prompt is the only text family (4023 characters), loaded at 400, 500 and 700, with Font Awesome 6 Pro, Font Awesome 6 Brands and an icomoon face for icons. Prompt is a public Google Fonts typeface. The stack is `Prompt, sans-serif`.

| Role | Size | Weight | Line height | Transform |
|---|---|---|---|---|
| display (tag h1 "ABOUT US") | 15px | 700 | 22.5px | uppercase |
| heading (h2) | 19px | 700 | 23.75px | uppercase |
| subheading (h3 "JOIN US") | 76px | 700 | 95px | uppercase |
| body (statement paragraph) | 33px | 700 | 49.5px | none |
| button | 12px | 400 | 18px | uppercase |
| nav link | 16px | 400 | 24px | none |
| button-secondary | 14px | 700 | 21px | uppercase |
| link ("WHOLESALE") | 48px | 700 | 48px | uppercase |

Note on roles: the extractor's h1 is an "ABOUT US" menu item at 15px, not a page title; the 76px "JOIN US" is the largest measured heading. Character counts by size: 16px (1608), 14px (1281), 33px (482), 19px (200), 13px (126), 15px (100), 48px (54), 12px (45), 76px (45), 40px (39). Weights: 400 (2425), 700 (1362), 500 (236).

## Layout

The header is 120px tall with 16px side padding and a `rgba(0, 0, 0, 0.05) 0px 3px 10px 0px` shadow. The column gutter variable is `--hybrid-column-space: 15px`. The card grid reaches five columns on desktop (`maxCardColumns: 5`). Measured paddings are led by 24px (37 elements), 15px (26), 8px (18), 10.8px, 2.4px and 9.6px (8 each), 16px (6), and larger single values of 64px, 96px, 120px and 226.5px. The first-viewport hero is full-bleed video under the header.

## Elevation & Depth

Three shadows were measured: `rgba(1, 113, 204, 0) 0px 0px 0px 5px` (17 elements, a zero-alpha blue ring on buttons, ready to animate), `rgba(1, 113, 204, 0.25) 0px 3px 15px 0px` (9 elements, a soft blue glow) and `rgba(0, 0, 0, 0.05) 0px 3px 10px 0px` (the header). Cards use translucent white (`#ffffffcc`) rather than elevation.

## Shapes

Measured radii: 50% (19 elements, circular icons and badges), 15px (17), `0px 0px 15px 15px` (8, bottom-rounded panels), 5px (8), 23px (4) and 3px (1). The yellow "OUR STORES" button and cards use 15px; the "JOIN LOTUS'S" outlined button uses 23px; `pill: 9999px` is part of the generated token set and was not itself recorded as a measured radius.

## Components

**button-primary.** `#ffc01f` fill, white 12px/400 uppercase label, `1px solid #ffc01f`, radius 15px, padding `4px 16px`, 28px tall, "OUR STORES" 121px wide.

**button-secondary.** "JOIN LOTUS'S": `#ffffff40` fill, black 14px/700 uppercase label, `2px solid #000000` border, 23px radius, padding `8px 24px`, 44px tall, with the zero-alpha blue ring shadow.

**link.** "WHOLESALE" measured as a 48px/700 uppercase block link, padding `6px 12px`, 364px wide.

**nav.** White 120px bar, blue `#0171cc` ticker text at 14px/700; links `#101010` at 16px/400 on a 24px line. TH and EN links change from `#101010` to `#0171cc` on hover.

**card.** `#ffffffcc` fill, `#101010` text, 15px radius, padding 24px; the revenue card measured 730px wide by 227px tall with 19px/700 text and blue numerals.

**footer.** White, text `#101010`, padding `24px 0px 48px`.

## Design System Architecture

No public design-system link was read and no search was run. The site ships its own named palette as CSS custom properties (blue, yellow, green, red, grey, pink, purple, orange, light-blue scales at 100 to 900 steps) on top of Bootstrap variables (`--breakpoint-xs` to `--breakpoint-xxl` with `--breakpoint-xxl: 1640px`, `--breakpoint-xl: 1200px`, `--breakpoint-lg: 992px`). The CSS declares `max-width 1280px` (445 rules), `max-width 767.98px` (417), `max-width 991.98px` (307), `min-width 1640px` (193) and `min-width 1200px` (157) queries. Cookie-consent variables (`--cc-*`) and Swiper variables come from third-party widgets.

## Do's and Don'ts

- Do use Prompt, uppercase, with weight 700 for headings and weight 400 for buttons at 12px.
- Do use CP yellow `#ffc01f` for the main action pill and blue `#0171cc` for live data and hover.
- Do use `#edf7ff` for light bands and `#ffffffcc` for overlay cards.
- Do keep the 15px radius for cards and the primary pill.
- Don't use Bootstrap `--primary #007bff` or Swiper `#007aff` as brand colours.
- Don't treat the cookie modal, backdrop or `dialog s-cnt` as brand UI.
- Don't assume layout below the first viewport from the capture; it is not shown.

## Responsive Behavior

Measured at 390px: a menu toggle is visible (labelled "Toggle navigation"), four header links remain visible, the card grid is at most 2 columns, and the statement paragraph measures 21.7422px/700 on a 32.6133px line (from 33px on desktop). The "JOIN LOTUS'S" button keeps 14px/700, a 23px radius and the 2px black border. Other components are not measured at mobile width.

## Iteration Guide

1. Build a two-tier white header: logo, ticker in `#0171cc`, a `primary` yellow pill, TH · EN; then a row of 16px uppercase links.
2. Open with a full-bleed dark video hero.
3. Set section headings in Prompt 700 uppercase, using 76px for the largest statement.
4. Use `#edf7ff` bands with `#ffffffcc` cards (15px radius, 24px padding) for stats.
5. Keep secondary actions as 23px-radius outlined buttons with a 2px black border.
6. Capture and measure the lower sections before specifying them; only the first viewport is imaged.
