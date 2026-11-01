---
version: alpha
name: "Workpoint Entertainment"
category: "Thai Brands"
description: "Workpoint Entertainment: Thai TV and entertainment group site with navy #222963 and #10132d grounds, electric blue #3a6ad9 accent, white Outfit 700 uppercase hero at 138.366px, Sarabun for Thai, square outlined buttons and 4px card radius."
colors:
  canvas: "#ffffff"
  ink: "#3a6ad9"
  primary: "#3a6ad9"
  surface: "#222963"
  surface-3: "#10132d"
  ink-3: "#707070"
  ink-4: "#212529"
  ink-5: "#1c1c1c"
typography:
  display:
    fontFamily: Outfit, sans-serif
    fontSize: 138.366px
    fontWeight: 700
    lineHeight: 207.549px
    textTransform: uppercase
  display-mobile:
    fontFamily: Outfit, sans-serif
    fontSize: 54.4268px
    fontWeight: 700
    lineHeight: 81.6402px
    textTransform: uppercase
  heading:
    fontFamily: Outfit, Kanit, sans-serif
    fontSize: 38.8634px
    fontWeight: 600
    lineHeight: 48.5793px
  subheading:
    fontFamily: Outfit, Kanit, sans-serif
    fontSize: 47.6902px
    fontWeight: 600
    lineHeight: 59.6128px
  nav:
    fontFamily: Outfit, Kanit, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  link:
    fontFamily: Outfit, Kanit, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
rounded:
  xs: 4px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 12.8px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 30px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    padding: 12px 24px
    height: 50px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    padding: 12px 24px
    borderColor: "{colors.canvas}"
  nav:
    textColor: "{colors.canvas}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.ink-5}"
    textColor: "{colors.canvas}"
    padding: 48px 0px
---

# Workpoint Entertainment

## Overview

Workpoint Entertainment (https://www.workpoint.co.th/en/home) is a Thai television and entertainment group listed on the Stock Exchange of Thailand; the home page header carries a live ticker reading "WORK : 3.34 THB" and the footer names "Workpoint Entertainment Public Company Limited". The measured English home page is a deep navy, photography-led corporate site. A full-bleed hero shows a stage performance with the word "WORKPOINT" set at 138.366px in white Outfit bold uppercase, and the rotating hero carries Thai and English taglines (the mobile capture shows "every WORK has a POINT, every POINT creates endless Opportunities."). Below the hero a horizontally scrolling strip of programme posters leads into a "Business of WORKPOINT" block showing "4 Core Businesses" and "11 Subsidiaries", a mission statement ("To be a leading entertainment company in Southeast Asian industry driven by innovative ideas and morals"), a "Latest Updates" carousel with tabs for Press Releases, CSR Activities and Sustainability Activities, "SET ANNOUNCEMENTS" for investors, and a three-tile row for Investor Relations, Careers and Contact. The scroll height at 1280px is 5613px.

A cookie-consent card ("Allow cookies") overlays the lower-left of the capture. It is a consent control, not brand UI, and no token below is derived from it.

## Colors

The palette is navy plus a single electric blue. `surface` #222963 (root variable `--dark-navy-00`) is the largest background area (weight 8622) and the section ground for the business and hero regions. `surface-3` #10132d (`--dark-navy-n95`) is the deeper navy used for the updates band. `canvas` #ffffff is the measured body background (root `--white`, white covers 5245 of background area) and the most-read text colour is white, which sets copy on the navy. `primary` and `ink` #3a6ad9 (root `--blue-00`) is the accent: it colours the word "WORKPOINT" in section titles ("Business of WORKPOINT", "SET ANNOUNCEMENTS"), the big numerals 4 and 11, "Read More" links and the active tab, and covers 846 text characters. Further measured text colours are the grey `ink-3` #707070 (`--grey-00`), `ink-4` #212529 and `ink-5` #1c1c1c (`--dark-grey-00`), which also fills the footer. Additional root variables published by the stylesheet include `--dark-blue-00` #284286, `--navy-00` #2a378d, `--blue-n15` #dbe7ff, `--blue-n60` #8aadff and `--grey-n05` #f7f7f7. Variables `--primary` #007bff, `--danger`, `--success` and `--warning` are Bootstrap defaults and are not brand colours. The only box shadow measured is rgba(0,0,0,0.15) 0px 3px 6px 0px on a single element.

## Typography

Outfit is the dominant family (4180 characters), with Sarabun for 581 characters (the Thai-text face) and Kanit 600 loaded as the Thai-capable fallback in heading stacks ("Outfit, Kanit, sans-serif"). Icon fonts Font Awesome 5 Pro and icomoon are loaded and are not typographic voice. The `display` token is Outfit 700, 138.366px, line-height 207.549px, uppercase, which sets the hero wordmark; `display-mobile` is 54.4268px with line-height 81.6402px. `subheading` is Outfit/Kanit 600 at 47.6902px (line-height 59.6128px) and `heading` is 600 at 38.8634px (line-height 48.5793px). Navigation (`nav`) is 16px weight 400 with 16px line-height, and `link` is 16px weight 600 with line-height 24px. The most common measured size by characters is 22.0122px (2641 characters), followed by 16px (1835), 15px (60) and 14px (54). Weights in use are 600 (3720 characters), 400 (962) and 700 (79). No letter-spacing was recorded.

## Layout

The site is Bootstrap-based: root variables expose the framework breakpoints `--breakpoint-sm` 576px, `--breakpoint-md` 768px, `--breakpoint-lg` 992px, `--breakpoint-xl` 1200px and `--breakpoint-xxl` 1640px, and a Swiper carousel (`--swiper-navigation-size` 44px) drives the poster strip and update cards. The centred logo mark sits between split navigation groups (HOME, ABOUT, BUSINESSES, SUSTAINABILITY on the left and INVESTORS, NEWS, CAREERS, CONTACT on the right) with a top utility row for the ticker, language selector "EN", search and social icons. Content sections alternate full-width photography with two-column blocks: image left, text right. Measured paddings include 15px (22 occurrences), 24px (12), 20px (10), 220px (6) and 80px (5); the spacing tokens record 4px, 8px, 10px, 12px, 12.8px, 15px, 16px, 20px, 24px and 30px.

## Elevation & Depth

Depth is mostly photographic and tonal: dark navy bands against full-bleed photographs, with white-bordered image frames (white is the most frequent border colour, 16 occurrences). One element carries a soft shadow of rgba(0,0,0,0.15) 0px 3px 6px 0px; all other elements are flat.

## Shapes

Two radii were measured: 4px on 10 elements (token `rounded.xs`) and 50% on 13 elements (circular carousel dots and social controls, token `rounded.pill` 9999px). Buttons are square-cornered: the outlined "Explore more" button computes a 0px radius.

## Components

- Outlined button (`button-secondary`): white 1px border, white text, Outfit 600 16px, padding 12px 24px, height 50px, 0px radius. Labelled "Explore more"; on hover the navigation links change from white to #3a6ad9.
- Navigation (`nav`, `nav-link`): white 16px Outfit over the hero; HOME shows an underline when active.
- Link (`link`): white, 16px weight 600, 12px 24px padding and white border.
- Footer: #1c1c1c background, white text, padding 48px 0px, company address and contact lines, social icons and legal links (Privacy Policy, Cookie Policy, Sitemap).
- Cards: programme posters and update cards with date label (for example "09 October 2026"), headline and a blue "Read More" link.

## Design System Architecture

No public design system or brand guideline was found: the measured pages do not link to one. The de-facto system is a Bootstrap 4 style stylesheet extended with named colour variables (`--blue-00`, `--blue-n15`, `--blue-n60`, `--dark-blue-00`, `--dark-navy-00`, `--dark-navy-n95`, `--navy-00`, `--grey-00`, `--grey-n05`, `--grey-n10`, `--dark-grey-00`) following a scale-by-lightness naming pattern, plus the Bootstrap breakpoint variables. Source: https://www.workpoint.co.th/en/home and web/data/extracted/workpoint.json.

## Do's and Don'ts

- Do use navy #222963 and #10132d as grounds, white text, and blue #3a6ad9 for emphasised words, numerals and links.
- Do set the wordmark-scale hero in Outfit 700 uppercase.
- Do use square outlined buttons with 12px 24px padding.
- Do keep Thai copy in Sarabun or Kanit.
- Don't document the cookie banner as a brand component.
- Don't use Bootstrap's #007bff as a brand colour.
- Don't add heavy shadows; one soft shadow was measured in the whole page.

## Responsive Behavior

The 390px mobile pass recorded: the h1 "WORKPOINT" at 54.4268px weight 700 uppercase; three header links visible and a menu toggle visible; mobile text sizes 19.5701px (1651 characters), 16px (1315), 29.6189px, 26.1646px and 14px; and a first band 4620px tall with a single column. Stylesheet breakpoints are declared in the root variables (768px, 992px, 1200px, 1640px). Other mobile behaviour was not measured.

## Iteration Guide

1. Set `surface` #222963 as the page ground and white text; add blue #3a6ad9 for the emphasised half of every section title.
2. Use Outfit at the `heading` and `subheading` tokens; Sarabun for Thai body.
3. Use the outlined 50px-high button for every "Explore more" action.
4. Put photography full-bleed and use 4px radius on cards.
5. Run `node web/scripts/verify-designs.mjs --slug=workpoint` after changes.
6. Section order that the measured home page follows, useful when composing a new page: hero with wordmark and tagline, programme poster strip, "Business of WORKPOINT" with the two counters, mission statement over a photograph, "Latest Updates" with three tabs, "SET ANNOUNCEMENTS" on the darkest ground, a three-tile row (Investor Relations, Careers, Contact) and the dark footer with the company address, telephone and fax lines.
7. Copy voice is corporate and bilingual: Thai headlines in the hero, English section titles in title case with the brand name picked out in blue, dates written as day, month name and year.
8. Keep the stock ticker, language selector, search and social icons in the thin utility row above the centred logo; the measured header has the logo mark centred between two link groups.
