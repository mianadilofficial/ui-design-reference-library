---
version: alpha
name: ททบ. 5 TV5HD (Royal Thai Army Radio and Television)
category: "Thai Brands"
description: "Thai Army Channel 5 (TV5HD) news portal at tv5.co.th, the operator site measured for the Thai Global Network queue entry: Sarabun and Kanit Thai type at 13-20px, brand green #50ae64 headers on a #f5f5f5 canvas, white cards, a #1a1a1a nav bar and 3-6px radii."
colors:
  canvas: "#f5f5f5"
  page-largest: "#ffffff"
  ink: "#212121"
  ink-secondary: "#757575"
  primary: "#50ae64"
  on-primary: "#ffffff"
  success-bootstrap: "#198754"
  surface-line: "#dddddd"
  surface-nav: "#1a1a1a"
  surface-footer: "#111111"
  surface-green-soft: "#f0fff4"
  ink-on-dark-soft: "#ffffff73"
  hairline-dark: "#ffffff12"
  hairline: "#e0e0e0"
  button-secondary-text: "#2f3a32"
  button-secondary-border: "#e2e7e2"
  nav-text: "#363636"
typography:
  display:
    fontFamily: Sarabun, sans-serif
    fontSize: 20px
    fontWeight: 800
    lineHeight: 24px
  subheading:
    fontFamily: Sarabun, sans-serif
    fontSize: 30px
    fontWeight: 800
    lineHeight: 43.5px
  body:
    fontFamily: Sarabun, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20.8px
  button:
    fontFamily: Sarabun, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  nav:
    fontFamily: Sarabun, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
  button-secondary:
    fontFamily: Sarabun, sans-serif
    fontSize: 13.44px
    fontWeight: 600
    lineHeight: 17.472px
  masthead:
    fontFamily: Kanit, sans-serif
    fontSize: 18px
    fontWeight: 300
    lineHeight: 19.8px
    letterSpacing: "-0.4px"
rounded:
  xs: 3px
  sm: 4px
  md: 6px
  lg: 7px
  xl: 8px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 9px
  s9: 10px
  s10: 11px
components:
  button-follow:
    backgroundColor: "{colors.success-bootstrap}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 4px 8px
    height: 31px
  button-secondary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.button-secondary-text}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 7px 14px
    height: 33px
    borderColor: "{colors.button-secondary-border}"
  nav:
    textColor: "{colors.nav-text}"
    padding: 10px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.surface-nav}"
    textColor: "{colors.page-largest}"
    padding: 40px 0px 24px
---

## Overview

The queued brand was Thai Global Network, but the measured URL (http://www.tv5.co.th/) is the portal of the Royal Thai Army Radio and Television station, "สถานีวิทยุโทรทัศน์กองทัพบก TV5HD" (ททบ. 5). Its document title is "ข่าว ข่าวด่วน ข่าววันนี้ | ททบ. 5" and its language is Thai. It is the operator site of the channel, so this file is named after the measured site. The page is a dense Thai news portal, about 9,950px tall at 1280px.

From the top: a logo with the Thai and English station names and the date, a banner ad, a red-lettered "LIVE STREAMING" badge with social icons, a green breaking-news ticker ("ข่าวล่าสุด" label) and a near-black navigation bar (หน้าหลัก, ข่าว, รายการ, ไลฟ์สไตล์, คลิปสั้น, ประชาสัมพันธ์, อื่นๆ, FM94, ศูนย์ข่าววิทยุ, ตรวจผลสลาก, plus a search icon). A full-width grayscale tribute banner with a portrait and Thai mourning text follows the navigation; it is in-page content, not a modal, and is not documented as brand UI. Then a "ข่าวล่าสุด" lead block with one large story and two small ones, a "ข่าว" grid of three-column cards, and a right sidebar with green-headed widgets for gold prices (ราคาทองคำ), fuel prices (ราคาน้ำมัน) and a popular-stories list. Further blocks cover politics, sports, local news, an embedded live player and programme lists.

## Colors

`canvas` is light gray `#f5f5f5` (`--gray-bg`) with white `#ffffff` content panels and cards (largest measured area). `ink` is `#212121` (`--text-main`, 3,830 characters); secondary text is `#757575` (`--text-muted`, the most frequent at 5,679 characters, used for card excerpts and meta lines); the nav and ticker text colors are `#363636` and white. The navigation bar is `#1a1a1a` (`--dark-nav`), the footer `#111111` (`--dark-footer`), and low-alpha white fills and borders (`#ffffff0d`, `#ffffff12`) structure the dark areas.

The brand color is green `#50ae64`: the root variables `--brand-red`, `--brand-red-lt` and `--brand-red-dk` all hold that same green value (the variable names say red but the measured value is green), and it fills the breaking-news ticker, the sidebar widget headers and category tags, and sets the left bar of section titles. A soft green `#f0fff4` and `#50ae641a` are tints. A red `#e52d27` is measured on the "LIVE" badge. The generated primary `#198754` is Bootstrap's `--bs-success` default; the only element in the extraction using it is a small "เพิ่มเพื่อน" (add friend) button, so it is kept as `success-bootstrap` for that control and not treated as the brand color.

## Typography

Sarabun is the working Thai and Latin face (14,695 of 14,899 measured characters; weights 400, 500, 600, 700 and 800 loaded) and Kanit (weight 300) is used for the masthead and footer station names at 18px and 22px with -0.4px tracking. Bootstrap Icons supplies glyph icons.

Measured sizes are small: 13px (6,502 characters) for excerpts and body, 15px for the nav and card titles (2,268), 12px, 14.4px, 13.12px, 11px for meta, 10.4px for tags with 0.416px tracking, 30px for the lead story title (weight 800, 43.5px line-height) and 20px weight 800 for section titles ("ข่าวล่าสุด", "ข่าว") with 12px left padding next to the green bar. Body is 13px/20.8px weight 400. Weight 800 is used for headings, weight 600 for tags and small buttons.

## Layout

A two-column portal grid: a wide main column of white panels and a narrower sidebar of green-headed widgets (column widths were not measured), all inside a centered container on the gray canvas. The main column alternates a lead block (one large 16:9-style story plus two stacked small ones) with three-up card grids. Cards have an image, a green category tag, a two-line bold title, a two-line gray excerpt and a clock and eye-icon meta row. The footer is a dark block with station details and link columns. Measured paddings include 8px (165 elements), 14px (137), 12px (90), 2px (70), 3px (43).

## Elevation & Depth

Mostly flat with a few soft shadows: `rgba(0,0,0,0.08) 0px 2px 10px 0px` (5 elements), `rgba(0,0,0,0.22) 0px 2px 20px`, `rgba(7,18,38,0.18) 0px 10px 18px`, `rgba(0,0,0,0.35) 0px 8px 24px` and a red-tinted `rgba(229,45,39,0.15) 0px 4px 16px` (1 each, on the live/player elements). Card separation is mostly white-on-gray and thin borders (`#e2e7e2`, `#e0e0e0`).

## Shapes

Radii measured: 6px (65 elements, cards and images), 4px (59, small buttons and tags), 3px (47), 999px (37, pills and chips), 8px (8), 50% (8, round social icons), and single 9px, 10px, 7px. The overall feel is lightly rounded with pill chips.

## Components

**Masthead.** Logo mark with "TV5HD" and the Thai and English station names in Kanit 300, with date. **Ticker.** Full-width green bar with a bold "ข่าวล่าสุด" label and a headline in white. **Navigation.** `#1a1a1a` bar, white 15px links with chevrons, the active "หน้าหลัก" has a green underline. **Section heading.** Sarabun 20px weight 800 with a green left bar. **News card.** White, 6px radius, green tag chip, bold title, gray excerpt, meta row. **Sidebar widget.** Green header strip with white title, white body with price rows (gold buy/sell and fuel types in baht per litre) and a green "update" line. **Secondary button.** White pill, 1px `#e2e7e2` border, 13.44px weight 600 text in `#2f3a32`, 33px high. **Follow button.** A small Bootstrap-green "เพิ่มเพื่อน" button, 4px radius, 31px high, white 14px text. The cookie banner (`cookieBanner`) was hidden by the extractor and is not brand UI.

## Design System Architecture

No public design system or brand guideline was found; the pages opened exposed none. The site is a Bootstrap 5 build with a short custom variable layer on top: `--gray-bg`, `--text-main`, `--text-muted`, `--dark-nav`, `--dark-footer`, `--gray-border`, `--brand-red` (green value), `--success-soft`, `--success-text`, `--warning-soft`, `--warning-text`. Bootstrap's `--bs-*` defaults, including `--bs-primary: #0d6efd`, are present and are not brand colors.

## Do's and Don'ts

Do use green `#50ae64` for the ticker, widget headers and tags, and keep text `#212121` and `#757575` on white cards over the `#f5f5f5` canvas. Do set Thai in Sarabun at small sizes with weight 800 headings. Do use 6px card radii and pill chips.

Don't use Bootstrap blue `#0d6efd` or the Bootstrap success `#198754` as the brand color. Don't treat the cookie banner, the grayscale tribute banner or ad banners as brand components. Don't add large shadows.

## Responsive Behavior

Measured on the 390px mobile pass: 9 header links counted as visible, no menu toggle detected, one maximum card column, headings still 20px weight 800 (h1 box 98px wide), body text 13px/20.8px in a 163px column (the card text width), and the "เพิ่มเพื่อน" button at 14px, 31px high. Other reflow was not measured.

## Iteration Guide

1. Gray `#f5f5f5` canvas, white panels, `#212121` and `#757575` text.
2. Sarabun 13px body, 15px titles, 20px/800 section headings; Kanit 300 for station names.
3. Green `#50ae64` ticker, widget headers, tags and heading bars; `#1a1a1a` nav.
4. 6px card radii, pill chips and small 4px buttons.
5. Sidebar widgets for prices with a green header.
6. Verify other programme sites and the live player separately; only the home page was measured.
