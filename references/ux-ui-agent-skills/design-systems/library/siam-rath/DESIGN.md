---
version: alpha
name: Siam Rath (สยามรัฐออนไลน์)
category: "Thai Brands"
description: "Thai daily-news portal on a white #ffffff canvas with #f1f5f9 slate page tint, near-black #020618 ink, Google Sans/Prompt/Kanit display type and Sarabun body, a #059669 emerald link accent, translucent maroon #80032699 story cards and a 2px corner radius."
colors:
  canvas: "#ffffff"
  page-largest: "#f1f5f9"
  ink: "#020618"
  primary: "#059669"
  ink-muted: "#62748e"
  ink-body: "#1d293d"
  ink-secondary: "#45556c"
  ink-soft: "#90a1b9"
  hairline: "#ffffffcc"
  nav-link-text: "#0f172a"
  card-maroon: "#80032699"
  footer-border: "#0f172b"
typography:
  display:
    fontFamily: "\"Google Sans\", Prompt, Kanit, Sarabun, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
  subheading:
    fontFamily: "\"Google Sans\", Prompt, Kanit, Sarabun, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 19.25px
  body:
    fontFamily: Sarabun, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.75px
  nav:
    fontFamily: Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 6px
  md: 12px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-secondary}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    padding: 4px
  card:
    backgroundColor: "{colors.card-maroon}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.xs}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    borderColor: "{colors.footer-border}"
---

## Overview

Siam Rath (สยามรัฐ, siamrath.co.th) is the online edition of a Thai daily newspaper. The measured home page is a dense news portal: a thin masthead row holding the Thai Buddhist-era date, a large black-letter style wordmark, social icons and a category navigation, followed by a long scroll of story modules. The page is 1280px wide in the desktop pass and 6,822px tall when measured, so it is built for scanning many headlines rather than for a single hero statement. The first body color measured is #45556c on a #ffffff body, and the page background behind the story modules is the cool slate tint #f1f5f9, which covers the largest background area of any color on the page.

The voice is that of a traditional newspaper: Thai headlines, relative timestamps ("1 ชม. ที่แล้ว"), a section label in colored text above each story and a Pali motto printed in the footer. The mood is information-first and sober; color is used as a wayfinding signal (small colored section markers, colored category labels) rather than as decoration. Imagery is photographic news photography with no illustration system.

## Colors

The palette is Tailwind-slate based. The page-level surfaces are #ffffff (canvas) and #f1f5f9 (largest background area, weight 2,498 in the measurement). The most-read text color is #020618 (ink), used for headlines and for the footer background. Secondary text steps down through #1d293d (ink-body), #45556c (ink-secondary, also the body-element text color), #62748e (ink-muted) and #90a1b9 (ink-soft) for timestamps and metadata.

The one measured accent used as the primary color is the emerald #059669, found in link and category-label text (78 characters in the text-color measurement). Story cards in the featured carousel use a translucent maroon fill, #80032699, with white text; this is the deep red band visible behind the "บทความ / บทวิเคราะห์" (articles / analysis) carousel. Other measured fills appear with tiny area weight: #e7000b, #d08700, #155dfc, #ffd230, #009966, #fe9a00 and #e17100, which are the small category markers and badges. The hairline measured on the header is #ffffffcc and the footer border is #0f172b.

Popups and ad creatives on the page (a TikTok-for-Business interstitial, a booking-site banner and large banner ads) are third-party and are not part of the palette. On the first capture a dark scrim covered the page; the page was re-measured and the tokens here come from the re-measured pass.

## Typography

Three families are loaded: Athiti (500, 700), Sarabun (400, 500, 700) and Google Sans (400, 600, 700). By character count Google Sans is the dominant family (4,659 characters) followed by Sarabun (1,885) and Athiti (144). The display role is the 20px / 28px weight-700 stack "Google Sans", Prompt, Kanit, Sarabun, sans-serif, used for section titles such as "บทความ / บทวิเคราะห์". Story headlines use the same family at 14px / 19.25px weight 700 (subheading). Body copy is Sarabun 14px / 22.75px weight 400, and the navigation is Sarabun 16px / 24px.

Measured size scale by character count: 14px (3,167), 16px (1,022), 11px (813), 18px (598), 12px (406), 20px (260), 10px (205), 24px (116), 30px (83), 8px (18). Weight 700 dominates (4,763 characters) with 500, 400 and 600 trailing. Letter-spacing is slightly negative on larger sizes (16px at -0.4px, 20px at -0.5px, 24px at -0.6px, 30px at -0.75px), and 20px at 2px appears in the footer. Thai script is the main language (the page lang is th), so the font stack lists Thai-capable fallbacks Prompt, Kanit and Sarabun.

## Layout

The desktop measurement is at 1280px width. The home page stacks bands: a masthead, a full-width maroon carousel band, a "hot news" module with a large lead story beside two smaller stories and a right-hand "check-in" list, followed by repeated three-column section modules (politics, regional, lifestyle), an economy module with a market-data panel, international news, columns, sport, lottery results and a final dark footer. Section headings sit on a rule with a small colored vertical marker to their left and an arrow link to their right.

Spacing values measured as gaps are 4px (86 uses), 6px, 8px, 14px, 10px, 24px, 12px, 16px, 32px, 20px and 2px; paddings are mostly 4px, 16px, 8px, 12px, 32px and 24px. Those values are exposed in the spacing tokens above (the spacing scale s1 to s10 is taken from the measurement). Density is high: headlines are set at 14px and thumbnails are small and tightly gridded.

## Elevation & Depth

The page is nearly flat. The measured box shadows are a 1px bottom hairline shadow (rgba(0,0,0,0.05) 0 1px 0) on three elements, and one Tailwind-style medium shadow (rgba(0,0,0,0.1) 0 4px 6px -1px, rgba(0,0,0,0.1) 0 2px 4px -2px) on one element. Depth otherwise comes from color blocking: the white canvas against the #f1f5f9 tint and the dark #020618 footer. Overlay layers seen in the capture (popups, sticky ads) are third-party advertising and are not brand elevation.

## Shapes

Radii are small. The measured border radii are 2px (35 elements), 6px (3) and 12px (1). The 2px radius is the story card radius and is the effective brand shape: nearly everything is a sharp rectangle. Photos in story modules are rectangles with square or 2px corners. Circles appear only in third-party social icons.

## Components

Navigation: the header band is white (#ffffff) with text #45556c, 60px tall and 1280px wide, containing the date, wordmark and social icons; the category links beneath use Sarabun 16px in #0f172a with 4px padding. Story card: a link block with the maroon #80032699 fill, white 16px Sarabun text and a 2px radius (277px wide, 156px tall in the measurement), carrying a photo with a bold headline in white beneath. Link: #020618 in the 20px display style for section titles. Footer: #020618 background, white text, a 1px solid #0f172b border and 322px height, with link text in #cad5e2 and #90a1b9 children and a Pali motto printed in 20px weight 700 with 2px letter-spacing.

No primary button was detected: the extraction recorded no CTA candidates, and no input role was detected. Hover on story links was measured: a white link with a white border keeps its color on hover while the border color changes to a yellow-green tone (oklab 0.929944 -0.011071 0.11006), with no shadow or opacity change.

## Design System Architecture

No public design system or brand guideline was found: the home page links to no design-system or brand page and no GitHub organization was linked. The de-facto system is a Tailwind v4 build: the root custom properties include --color-slate-*, --color-purple-*, --color-amber-*, --color-rose-*, --color-orange-*, --color-yellow-*, --color-blue-*, --text-lg, --text-2xl and the --tw-* shadow and ring variables. Colors therefore come from the Tailwind slate scale (#020618 is slate-950, #0f172b slate-900, #1d293d slate-800, #45556c slate-600, #62748e slate-500, #90a1b9 slate-400, #f1f5f9 slate-100) and the type sizes follow the Tailwind rem scale. There is no tokenized brand layer beyond Tailwind defaults and a handful of arbitrary values (the maroon card fill).

## Do's and Don'ts

Do keep the canvas white and use #f1f5f9 as the behind-content tint. Do set headlines in the display stack at weight 700 and body in Sarabun 14px. Do use the 2px radius on cards. Do use color only as section and category wayfinding.

Don't treat popups, advertising banners, interstitials or the third-party widgets as brand UI. Don't round cards to large radii; the measured radius is 2px. Don't add shadows beyond the hairline; the page is flat. Don't use the emerald #059669 as a large fill: it is measured as text color only.

## Responsive Behavior

A mobile pass was recorded. In it the h1/h2 role stays 20px / 28px, body text drops to Sarabun 12px / 19.5px (from 14px / 22.75px on desktop), and the navigation stays 16px / 24px. Mobile font-size usage by characters is led by 12px (2,634) and 14px (1,541). The mobile layout measurement records zero visible header links, no detected menu toggle, and a maximum of 1 card column. Breakpoint pixel values, hover on touch and tablet behavior were not measured.

## Iteration Guide

Start from the tokens: canvas #ffffff, page tint #f1f5f9, ink #020618, accent #059669, card fill #80032699, radius 2px. Rebuild the masthead (date, wordmark, social row, category nav) first, then the maroon carousel band, then the repeating section module with its colored marker and arrow link. Verify with the extraction JSON at web/data/extracted/siam-rath.json. When adding Thai text keep line-height at 22.75px for 14px body. Anything not listed in the measurements, such as dark mode or tablet layout, is not measured and should be left out until measured.
