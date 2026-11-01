---
version: alpha
name: Thai Name Server
category: "Thai Brands"
description: "Thai Name Server Co., Ltd. (ThaiNS), the .th and .ไทย registry operator: white canvas with a #98afc7 steel-blue frame, #001b46 navy header band, #2b2977 indigo logo and nav text, #333333 body in the system UI font at 16px, a Bootstrap 5 layout with 4-5px radii."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#2b2977"
  on-primary: "#ffffff"
  surface-frame: "#98afc7"
  surface-header: "#001b46"
  ink-black: "#000000"
  nav-link-text: "#000000e6"
  hairline: "#dee2e6"
typography:
  display:
    fontFamily: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 32px
  body:
    fontFamily: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 27.2px
  nav:
    fontFamily: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 27.2px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 32px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 23px
  s10: 46px
components:
  nav:
    textColor: "{colors.primary}"
    padding: 8px 12px
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    padding: 5px 0px
---

## Overview

Thai Name Server Co., Ltd. (https://www.thains.co.th/, title "Thai Name Server Co.,Ltd :: บริษัท ไทย เนม เซิฟเวอร์ จำกัด") is the registry and back-end registry operator for the .th and .ไทย country-code domains. The site is a small, one-screen corporate page (1,044px tall at 1280px) built in the style of an early-2010s institutional portal: a centered container (its width was not measured) framed by a steel-blue field, a navy header band behind a glassy translucent navigation panel, a hero image carousel and a single white content card.

The navigation panel carries a circular ".th" logo mark in indigo and white at its left and the links Home, Services, Whois/RDAP, Policies, Job Opportunities and Contact Us, followed by Thai and UK flag icons for language selection. The hero carousel rotates slides captioned "Register .th / .ไทย" (glowing light bulbs with domain suffixes such as .co.th, .in.th, .net.th, .or.th, .ac.th and Thai-script suffixes) and "Consultancy Services" (handshake silhouettes over a rising chart), with arrow controls and a row of seven dash indicators. Below is a white card headed "About ThaiNS" with a small red people icon: a justified paragraph says that ThaiNS, established in 2001, restructured dot TH management to meet international standards, serves as the DNS operator of ".th" and ".ไทย" under policies set by the Thai Network Information Center Foundation (THNICF), and joined the ICANN New gTLD Program in 2014. An ISO/IEC 27001 certification badge and a verified ".ไทย" seal sit below, and the footer shows a copyright line and a date and IP line. A cookie notice with a "close" button overlays the right side of the capture; it is a consent element and is not documented as brand UI.

## Colors

The page uses a restrained blue palette. `canvas` is white `#ffffff`, the body background and the content card. The surrounding frame is steel blue `#98afc7` (the largest measured background, weight 907), and the header band is deep navy `#001b46` (154). Text is `#333333` (652 characters) for body copy; the brand indigo `#2b2977` (155 characters) colors the navigation links and the footer lines and matches the logo's dark blue, so it is used as `primary`; black `#000000` and `#000000e6` appear in some nav anchors.

The extractor's first pick for primary was `#0000ff` (32 characters), which is the color of the "Privacy Policy" and "Cookie Policy" links inside the cookie notice, not a brand color, so it is dropped together with the other cookie-notice values (the `#eeeeee` fill, the `#1d2d35` text and the `#386a8e` close button). The Bootstrap 5 root variables (`--bs-primary: #0d6efd`, `--bs-success`, `--bs-danger` and the rest) are framework defaults and are not brand colors.

## Typography

There is no custom font: the page uses the Bootstrap system stack, `system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif` plus emoji fallbacks (1,010 measured characters; no web fonts loaded). The CSS corpus also lists Tahoma and Trebuchet MS for legacy elements and the Bootstrap Icons font. Sizes are 16px (974 characters), 20px (31) and 19px (5); weights are 400 (975) and 700 (35, the bold company name in the first paragraph and headings). Body copy is 16px/27.2px; the nav row is 16px with a 32px line-height inside 8px/16px padded links, and one nav anchor is 20px/27.2px. Paragraphs are justified.

## Layout

A single centered column over a full-bleed blue field. The header spans the full width in navy with the translucent glass nav panel inside the container; the carousel is full container width; the about card follows with a blue gutter of a few pixels around it, and the footer sits below on white. Paddings: 8px (9 elements), 16px (7), 12px (3), 20px, 10px and 4px (2 each), 46px and 23px (1 each). The page has one content card and no grid of cards.

## Elevation & Depth

Two soft shadows are measured: `rgba(0, 0, 0, 0.15) 0px 8px 16px 0px` on 2 elements and a hard `rgb(141, 138, 138) 0px 2px 0px 0px` underline-style shadow on 1 element. The glass nav panel is a translucent gradient over the navy band, and the card is lifted from the blue frame by a thin darker edge.

## Shapes

Radii measured: 0px 0px 4px 4px (2 elements), 4px 4px 0px 0px (1), 4px, 3px and 5px (1 each) and 32px (1, the pill-shaped cookie "close" button). The CSS corpus lists 4px (20), 3px (19), 5px (11) and 4.8px, 3.2px, 16px. Overall the page is nearly square with 4-5px softening.

## Components

**Navigation panel.** A translucent glass panel with indigo `#2b2977` 16px links; Services, Whois/RDAP and Policies carry dropdown carets. On mobile it collapses behind a "Toggle navigation" control. **Hero carousel.** Full-width image slides with a white caption, left and right arrow chevrons and seven short white dash indicators, the active one brighter. **About card.** White, thin edge, a red people icon and a bold 20px "About ThaiNS" heading, a justified 16px paragraph in `#333333` and an ISO 27001 badge image. **Language flags.** Thai and UK flags at the far right of the nav. **Footer.** Centered indigo text: "© Copyright Thai Name Server Co., Ltd. All rights reserved." with a timestamp and visitor IP line, above a .ไทย verified seal. **Cookie notice.** A translucent gray notice with a pill "close" button; not brand UI.

## Design System Architecture

No public design system or brand guideline was found; the pages opened exposed none. The site is a stock Bootstrap 5 build: the root variables are the standard `--bs-*` set (colors, `--bs-body-font-family: var(--bs-font-sans-serif)`, gray scale, `--bs-gray-200` through `--bs-gray-800`) and Bootstrap Icons supply symbols. Brand identity is carried entirely by images (the .th logo, hero artwork, ISO badge, flags) and by the indigo and navy colors, not by tokens.

## Do's and Don'ts

Do keep the layout a centered container on a steel-blue field with a navy header band. Do use indigo `#2b2977` for navigation and footer text and `#333333` for body. Do keep the system font stack and 16px body text. Do present credentials (ISO 27001, the verified seal) as plain badges.

Don't use `#0000ff` link blue or Bootstrap's `#0d6efd` as the brand color. Don't treat the cookie notice, its close button or the flags as brand UI. Don't introduce web fonts or large radii; the only large radius is a pill button in a notice.

## Responsive Behavior

Measured on the 390px mobile pass: one header link is visible and a menu toggle labelled "Toggle navigation" is present, the maximum card column count is 1, and the first paragraph ("Thai Name Server Co., Ltd. (ThaiNS), a Registry and Back-end ...") is 16px/27.2px in a 282px-wide column that is 544px tall. The page reports no primary CTA. Other breakpoints were not measured.

## Iteration Guide

1. White card on a `#98afc7` field; navy `#001b46` header band.
2. System font stack, 16px/27.2px body in `#333333`; indigo `#2b2977` for links and footer.
3. Build a glass nav panel with a round logo, six links and two flag icons; collapse behind a toggle on mobile.
4. Add a carousel with captioned slides and seven dash indicators.
5. Keep radii to 3-5px and the single soft shadow `rgba(0,0,0,0.15) 0px 8px 16px`.
6. Re-measure the Whois/RDAP and Policies pages before documenting them; only the home page was opened.
