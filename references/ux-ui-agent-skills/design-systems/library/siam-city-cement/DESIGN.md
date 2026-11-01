---
version: alpha
name: INSEE Group (Siam City Cement group site)
category: "Thai Brands"
description: "INSEE Group page of Siam City Cement (siamcitycement.com/en/home): white canvas with #f9f9f9 page body, INSEE red #e50019 blocks and buttons with square 0px corners, ink #4b4b4b, the custom insee typeface in uppercase (54px/54px weight 700 headings, 20px nav) and circular 50% country flags."
colors:
  canvas: "#ffffff"
  page-body: "#f9f9f9"
  ink: "#4b4b4b"
  primary: "#e50019"
  on-primary: "#ffffff"
  footer-border: "#ededed"
typography:
  display:
    fontFamily: insee, sans-serif
    fontSize: 54px
    fontWeight: 700
    lineHeight: 54px
    textTransform: uppercase
  display-mobile:
    fontFamily: insee, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 40px
    textTransform: uppercase
  subheading:
    fontFamily: insee, sans-serif
    fontSize: 34px
    fontWeight: 700
    lineHeight: 40.8px
    textTransform: uppercase
  body:
    fontFamily: insee, sans-serif
    fontSize: 34px
    fontWeight: 400
    lineHeight: 30.6px
  button:
    fontFamily: insee, sans-serif
    fontSize: 22px
    fontWeight: 700
    lineHeight: 60px
    textTransform: uppercase
  nav:
    fontFamily: insee, sans-serif
    fontSize: 22px
    fontWeight: 500
    lineHeight: 22px
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 8px
  s2: 10px
  s3: 15px
  s4: 25px
  s5: 40px
  s6: 50px
  s7: 60px
  s8: 64px
  s9: 100px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 10px 0px
    height: 70px
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 10px
    height: 56px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 3px 6px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
    borderColor: "{colors.footer-border}"
---

## Overview

This file documents the page served at https://www.siamcitycement.com/ (final URL https://www.siamcitycement.com/en/home, title "Home - Siam City Cement Public Company Limited"). The measured site is Siam City Cement's group site, and the brand it presents is **INSEE Group**: the INSEE logo is in the header and the footer, and the page names Siam City Cement Public Company Limited as the listed parent. The file is therefore named after the measured site, INSEE Group (the Siam City Cement group site).

The page is a short group hub, 1,280px wide and 2,207px tall. A white 80px header with a soft shadow carries the INSEE eagle logotype and uppercase navigation: HOME, ABOUT INSEE GROUP, ESG, INVESTOR RELATIONS, MEDIA, CAREER, CONTACT US, with a flag and language selector (EN) at the right. A rotating hero banner promotes a sustainability campaign (visible in the capture as green fields and product bags). The core of the page is a "country directory": a 3-by-2 grid of white cards for Thailand, Vietnam, Sri Lanka, Bangladesh, Cambodia and Indonesia. Each card has a photograph of workers, a circular flag badge overlapping the photograph's lower-left edge, the country name in red uppercase, the operating company name in small grey uppercase, and a small red square arrow button. Below sits an About Us feature: a red block carrying "We want to create the best and a sustainable future for all" with a white-outlined MORE button overlapping a photograph of branded mixer trucks. The footer repeats the country list with flags, a red "CONTACT US" block (wecare@siamcitycement.com), a copyright line and a red SITEMAP tab.

The first capture contained a memorial dialog ("IN REMEMBRANCE", with portraits and a "GO TO WEBSITE" button) over a dark scrim. These overlays are not documented as brand UI; the page was re-measured at the home URL without the scrim.

Copy is brief, institutional and aspirational. The page fetched confirms the nav items and the tagline "We want to create the best and a sustainable future for all."

The country directory is the page's main structural idea: one card per operating company (Thailand: Siam City Cement Public Company Limited; Vietnam: Siam City Cement (Vietnam) Limited; Sri Lanka: Siam City Cement (Lanka) Limited; Bangladesh: Siam City Cement (Bangladesh) Limited; Cambodia: Chip Mong INSEE Cement Corporation; Indonesia: PT Conwood Indonesia). The same list is repeated with round flags in the footer, so the visual rhythm is photograph, flag, red name, grey legal name, red arrow, repeated six times.

## Colors

- **Canvas #ffffff.** The header, cards and most area (2,972 area weight).
- **Page body #f9f9f9.** The measured body background.
- **Primary red #e50019.** INSEE red: the About Us block, SITEMAP and CONTACT buttons (224 area weight), country names (73 characters), the footer "INSEE GROUP" label. It is published as `--color-primary: #E50019`.
- **Ink #4b4b4b.** Navigation and secondary text (362 characters), published as `--color-default: #4B4B4B`.
- **White #ffffff.** Text on red (110 characters).
- **Footer border #ededed.** `--color-border: #EDEDED`.
- **Published but unrendered.** `--color-gray: #B6B7B8`, `--color-secondary` and `--color-dark: #000`, and Bootstrap status colours (`--color-success: #28a745`, `--color-danger: #dc3545`, `--color-warning: #ffc107`, `--color-info: #17a2b8`) are in the stylesheet but were not measured on rendered brand elements. The Bootstrap link blue `#007bff` (`--primary`) was reported on anchors by the extractor and is a framework default; it is dropped as a brand colour.

## Typography

One family, **insee**, a custom typeface loaded in weights 500 and 700 (plus a normal-weight face), with a generic `sans-serif` fallback. Icon fonts (Font Awesome 6, "feather") supply glyphs. insee is proprietary; no public substitute is named on the page.

- **Display (h2 "INSEE GROUP"):** insee 54px / 54px, weight 700, uppercase, #e50019; mobile 40px / 40px.
- **Subheading (country name):** insee 34px / 40.8px, weight 700, uppercase, red.
- **Body (About block):** insee 34px / 30.6px, weight 400, white on red.
- **Button:** insee 22px, weight 700, uppercase, line height 60px.
- **Nav:** insee 22px / 22px, weight 500 for links; the header text role is 20px, weight 500, uppercase.

The site publishes a type scale as variables: `--typo-xs: 18px`, `--typo-sm: 20px`, `--typo-default` and `--typo-md: 22px`, `--typo-lg: 34px`, `--typo-xl: 40px`, `--typo-xxl: 64px`. Sizes by character count: 20px (353), 34px (117), 22px (64), 54px (11). Weights: 500 (286 chars), 700 (239), 400 (72).

## Layout

A 1,140px-wide content container (the measured h2 width) is centered in the 1,280px page. Header height 80px; the footer is 324px tall with a 1px #ededed border. The country grid is three columns and two rows of white cards, each with a soft shadow; padding values measured: 15px (23 uses), 10px (20), 25px (6), 40px, 50px, 60px. The About block is a red rectangle overlapping an image by about a third of its width. No grid gap was recorded; the page declares `--breakpoint-md: 768px`.

## Elevation & Depth

Shadows: `rgba(0, 0, 0, 0.1) 0px 3px 6px 0px` (15 elements; the header and cards, equal to `--box-shadow: 0 3px 6px rgba(0,0,0,0.1)`) and `rgba(0, 0, 0, 0.1) 0px 3px 26px 0px` (6 elements, equal to `--box-shadow-lg`). Cards float slightly above the #f9f9f9 page; the red blocks and photography are flat.

## Shapes

The only measured radius is 50% (20 elements: the circular flag badges and round controls). Buttons, cards, blocks and the header are square (0px radius). The tokens keep `none: 0px` and `pill: 9999px`.

## Components

- **Primary button (SITEMAP).** #e50019 fill, #ffffff text, insee 22px weight 700 uppercase, padding 8px 10px 0px, 70px by 200px, 0px radius.
- **Outlined button (MORE).** Transparent, 2px solid #ffffff border, white text, insee 22px weight 700 uppercase, 56px by 160px, 0px radius; sits on the red About block. A small "+" follows the label.
- **Country card.** White, soft shadow, photograph, circular flag badge, red uppercase country name (34px), grey company name, red square arrow button.
- **Navigation.** White header, 80px tall, uppercase #4b4b4b insee 20px/500, shadow 0px 3px 6px.
- **Footer.** White with a 1px solid #ededed border, 324px tall, red uppercase labels (insee 20px weight 700), flags and a red Contact Us block.

## Design System Architecture

No public brand guideline or design system is linked on the page; the pages opened (the home page) show only logo images and a Contact Us section, and no search was run. The site is a Bootstrap-based build with brand variables on the root: `--color-primary: #E50019`, `--color-default: #4B4B4B`, `--color-border: #EDEDED`, `--color-gray: #B6B7B8`, `--box-shadow`, `--box-shadow-lg`, and the `--typo-*` size scale, with Bootstrap's own `--primary: #007bff` and `--secondary: #6c757d` left at defaults.

## Do's and Don'ts

- Do use INSEE red #e50019 for key blocks, country names and primary buttons, with white text on red.
- Do use uppercase insee for navigation, buttons and headings.
- Do keep corners square except circular flag badges (50%).
- Do use soft 3px 6px shadows on cards.
- Don't use Bootstrap's #007bff blue as a link colour for the brand.
- Don't document the memorial dialog or its dark scrim as brand UI.
- Don't round buttons or cards.

## Responsive Behavior

The mobile pass measured: the h2 "INSEE GROUP" at 40px / 40px (desktop 54px), the nav at 390px wide, the primary button at 60px tall, and sizes by characters 16px (196), 24px (117), 20px (93), 18px (65), 40px (11). The breakpoint variable `--breakpoint-md: 768px` is declared. Menu collapse and card stacking were not measured.

## Iteration Guide

1. White header and cards on #f9f9f9; ink #4b4b4b; red #e50019 for blocks and buttons.
2. insee uppercase 700 for headings; 22px for buttons and nav links.
3. Card grid of three columns with circular flag badges and a red square arrow.
4. Square corners everywhere except badges.
5. Run `node web/scripts/verify-designs.mjs --slug=siam-city-cement` after edits.
