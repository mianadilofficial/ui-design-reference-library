---
version: alpha
name: Terminal21
category: "Thai Brands"
description: "Terminal21 group landing page (terminal21.co.th) that routes to four malls, Asok, Korat, Pattaya and Rama 3: white canvas, navy ink #152266, slate #455660, a five-color stripe, DB-Helvethaica-X Thai type at 20px, 5px input radius and a travel-landmark skyline footer."
colors:
  canvas: "#ffffff"
  ink: "#152266"
  primary: "#455660"
  ink-slate: "#465a65"
  ink-dark: "#212529"
  surface-navy: "#283f95"
  hairline: "#a1a1a1"
  stripe-yellow: "#fff200"
  stripe-lime: "#bdd73c"
  stripe-crimson: "#d91b5c"
  stripe-pink: "#ef519e"
typography:
  display:
    fontFamily: DB-Helvethaica-X
    fontSize: 36px
    fontWeight: 400
    lineHeight: 43.2px
  heading:
    fontFamily: DB-Helvethaica-X
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38.4px
  body:
    fontFamily: DB-Helvethaica-X
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
rounded:
  xs: 5px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 15px
  s5: 16px
  s6: 25px
  s7: 30px
  s8: 40px
  s9: 50px
  s10: 70px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.ink-dark}"
    padding: 8px 16px
---

## Overview

This file documents the page served at https://www.terminal21.co.th/, which is the group or operator landing page of Terminal21 Co., Ltd., not the site of a single mall. The measured document title is "Terminal21" and its language is Thai. The page is one screen tall (`scrollHeight` 850 at 1280px) and works as a switchboard: a multicolor hairline stripe along the top edge, the "TERMINAL 21" wordmark centered at the top, a wide night photograph of the Asok mall facade with its illuminated sign, and a row of four branch logos, each linking to a mall: ASOK, KORAT, PATTAYA and RAMA 3. Below are six social icons (Facebook, Instagram, YouTube, X, TikTok, LINE), the line "© COPYRIGHT 2020 TERMINAL21 CO.,LTD. ALL RIGHTS RESERVED." and a pale gray illustrated skyline of world landmarks (an Eiffel-like tower, domes, a leaning tower) that echoes the shopping-mall concept of an airport-themed destination. The body text recorded in the DOM begins with a Thai tagline that describes the mall as an "airport shopping" destination bringing the whole world to one place.

An earlier capture of this URL was covered by a memorial tribute dialog; it was re-measured after that and the dialog no longer appears. The dialog is not documented here. The extraction also hides the site's cookie bar and a desktop top menu (`consentOverlaysHidden`: "cookie-law-info-bar", "menu-top d-none d-md-block"), and those are not brand UI.

## Colors

`canvas` is white `#ffffff`, the body background. `ink` is navy `#152266`, which carries 10,876 of the 12,795 measured text characters. The five-segment stripe at the top edge is the only multicolor element: the extraction measured four of its fills, yellow `#fff200`, lime `#bdd73c`, crimson `#d91b5c` and pink `#ef519e`; the fifth blue segment has no recorded hex and is left out of the tokens. Slate `#455660` (184 characters) and `#465a65` (325 characters) are secondary text grays, and `#212529` is the Bootstrap body-text color in the navigation. `#283f95` and its half-alpha `#283f9580` are measured large background areas that are not visible in the landing capture; they are kept as `surface-navy` and not used for visible chrome.

No button or filled call to action exists on this page, so `primary` holds the measured slate `#455660` as the brand's neutral accent. Bootstrap's own `#007bff` (`--primary`, `--blue`) appears in the root variables and in 19 text characters; it is a framework default and is not a brand color. Likewise `--success`, `--danger`, `--warning` and the rest of the Bootstrap palette are defaults.

## Typography

One face dominates: DB-Helvethaica-X (regular and bold are loaded), a Thai and Latin sans, used for 12,795 characters. A system sans stack (`-apple-system`, "Segoe UI", Roboto, "Helvetica Neue") carries the remaining 382 characters, mostly the 12px uppercase copyright line. The CSS corpus also names Montserrat (30 references), Libre Baskerville and Font Awesome 5 Free and Brands (the social icon font); those were not measured on visible landing text.

The measured scale is 20px (12,355 characters), 24px, 14px, 12px, 30px, 32px and 36px. Body is 20px/26px weight 400, the heading token is 32px/38.4px weight 700 and the display token is 36px/43.2px weight 400 (it was measured on a timeline year link and white text). These sizes were measured in the DOM, including markup for a privacy notice and contact form that is not visible in the landing capture, so they describe the site's type scale rather than visible headings on this page. Weights 400, 700 and 900 occur in 10,398, 2,758 and 21 characters.

## Layout

The page is a single centered column. The wordmark sits at the top center, the full-width photo band follows, and four branch logos are spaced evenly in a row beneath it, each with an underline made from the same multicolor stripe. The social icons and copyright line are centered, and the landmark skyline spans the full width at the bottom edge. Bootstrap breakpoints are declared: sm 576px, md 768px, lg 992px, xl 1200px. Paddings measured: 15px (46 elements), 40px (23), 30px and 5px (8 each), 10px, 50px, and single uses of 8px, 16px, 25px, 70px and 100px. Whitespace is generous; the page carries no body copy above the fold.

## Elevation & Depth

One shadow is measured: `rgba(0, 0, 0, 0.3) 0px 0px 20px 0px` on 5 elements. A second recorded shadow, `rgba(0,0,0,0.6) 0px 0px 0px 14px`, belonged to the memorial dialog frame and is not part of the final measurement. Depth on the visible page comes from the photograph and the translucent navy overlay values (`#283f9580`, `#09355ccc`) rather than from card elevation.

## Shapes

One radius survives: 5px, measured on 9 elements (the form fields in the page's markup carry a 5px radius and a `1px solid #a1a1a1` border). The CSS corpus lists 4px (37 uses), 4.8px, 16px, 3.2px, 30px and 34px, which are framework and plugin values. Photography, the stripe and the skyline are rectangular.

## Components

**Branch logo row.** Four logo images, each the "TERMINAL 21" wordmark with a branch name beneath (ASOK, KORAT, PATTAYA, RAMA 3) and the multicolor underline. These are the page's actual navigation.

**Social row.** Six round-icon links in their own platform colors; the icon font is Font Awesome 5 Brands.

**Stripe.** A five-segment color bar along the very top edge.

**Text field.** The page's markup includes a form field with a white fill, `1px solid #a1a1a1` border, 5px radius, `5px 15px` padding, 20px DB-Helvethaica-X text in black and 38px height; it is not visible on the landing view. No buttons, cards or hover states were measured (`hover` is empty).

## Design System Architecture

No public design system or brand guideline is published at this site; the pages opened were the home page only. The de-facto system is Bootstrap 4: the root variables are the stock Bootstrap set (`--blue`, `--indigo`, `--primary`, `--secondary`, `--font-family-sans-serif`, `--breakpoint-sm/md/lg/xl`), the navigation carries the `d-none d-md-block` utility classes, and a cookie-law-info plugin supplies the consent bar. Brand identity lives in raster assets (the logo, the stripe, the skyline) and in the DB-Helvethaica-X font, not in tokens.

## Do's and Don'ts

Do keep the page white with navy `#152266` text and let the photograph and the multicolor stripe provide the color. Do set Thai copy in DB-Helvethaica-X at 20px/26px. Do route visitors through the four branch logos.

Don't treat Bootstrap's `#007bff` or other framework palette values as brand colors. Don't reproduce the memorial dialog, the cookie bar or the hidden top menu as brand UI. Don't add rounded cards or heavy shadows; the page uses a single soft shadow and 5px field radii only.

## Responsive Behavior

Measured on the 390px mobile pass: body copy in the page markup is 23px/29.9px with `0px 15px` padding in a 360px column, the heading stays at 32px/38.4px (360px wide), the page reports 0 visible header links and no visible menu toggle, and the mobile h1 sample is the same 36px/43.2px link. The extractor recorded a maximum of 13 card columns, which reflects the hidden markup rather than the visible page. How the four-logo row reflows was not measured.

## Iteration Guide

1. White canvas, navy `#152266` text, DB-Helvethaica-X at 20px/26px.
2. Place the multicolor stripe (yellow, lime, crimson, pink and the unrecorded blue segment) across the top edge.
3. Center the wordmark, a full-width photograph band, then the four branch logos each with its underline.
4. Add the social icon row, the copyright line at 12px uppercase, and the landmark skyline at the bottom.
5. Keep radius at 5px for fields and avoid framework palette colors.
6. Measure each mall's own site separately; this page is only the group switchboard.
