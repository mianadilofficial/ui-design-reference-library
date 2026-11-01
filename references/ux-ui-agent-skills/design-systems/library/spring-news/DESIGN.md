---
version: alpha
name: "Spring News"
category: "Thai Brands"
description: "Spring News (springnews.co.th), the Thai digital-news site of Nation Group: Prompt typeface at 14-32px with 0.2px tracking, a full-bleed #ffff00 yellow header and footer on a #ffffff canvas, near-black #000000f2 text, square corners and no button fills."
colors:
  canvas: "#ffffff"
  ink: "#000000f2"
  primary: "#ffff00"
  surface-3: "#f5f5f5"
  ink-2: "#000000cc"
  ink-3: "#000000"
  ink-5: "#222222"
  ink-6: "#5e5e5e"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 32px
    fontWeight: 700
    letterSpacing: 0.2px
  heading:
    fontFamily: Prompt, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 31.5px
    letterSpacing: 0.2px
  subheading:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
    letterSpacing: 0.2px
  body:
    fontFamily: Prompt, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24.5px
    letterSpacing: 0.2px
  input:
    fontFamily: Prompt, sans-serif
    fontSize: 32px
    fontWeight: 400
rounded:
  xs: 50px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 8px
  s8: 10px
  s9: 11px
  s10: 15px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  text-input:
    textColor: "{colors.ink-3}"
    typography: "{typography.input}"
    padding: 10px 0px 10px 15px
    height: 70px
    boxShadow: rgb(0, 0, 0) 0px 10px 7px -10px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-3}"
---

# Spring News

Spring News is the digital-tech and news portal operated by Nation Group (Thailand) Public Company Limited, whose legal name appears in the footer paragraph of the measured home page. The page measured is `https://www.springnews.co.th/` (the queued `/en` URL redirects there), a Thai-language page (`lang` = th) whose tab title reads "DIGITAL CHANGING your LIFE". It is a dense editorial front page: a yellow masthead, a nine-item uppercase navigation bar, a dark hero slider with a "HOT ISSUE" list, and then three-column rows of thumbnails and headlines. There is no product call-to-action; the interface exists to be scanned. The extractor found no primary CTA, no secondary CTA, no outlined CTA and no card component, so this file documents a publication, not a conversion funnel.

## Overview

The identity is a single saturated yellow, declared once in the site's CSS as `--primary-color: #ff0` and measured as `#ffff00`. It covers the logo band at the top of the page and the footer, which is the largest background area measured on the page (weight 2740, against 959 for white and 603 for `#f5f5f5`). Everything else is neutral: a white canvas, light-grey `#f5f5f5` panels, and black text at several opacities. Photography does the colouring. The hero is a full-width illustrated slide in green with a dark right-hand panel, and each story thumbnail carries its own colour, so the chrome stays quiet and yellow reads as the brand stamp.

Microcopy is bilingual in structure. Section labels and navigation are English and uppercase (HOME, DIGITAL-TECH, KEEP THE WORLD, DIGITAL BUSINESS, NEWS, LIFESTYLE, HEALTH, PROGRAM, CONTACT US; LAST UPDATE, TRENDS FOR YOU, POLITICS, LIFESTYLE), while headlines and summaries are Thai. Dates are written as day, abbreviated month, year ("09 Oct 2026"). Section labels end with a slash and a dotted rule that fills the row.

## Colors

- `canvas` `#ffffff`: the page the reader sees behind article rows.
- `primary` `#ffff00`: the brand yellow; header band, footer, the active navigation tab, the chips under TRENDS FOR YOU and the small category labels on thumbnails (for example TECHNOLOGY and SPRING-LIFE) are drawn in it in the capture.
- `ink` `#000000f2` (95% black): headlines and navigation, the most-read text color (6824 characters). `ink-2` `#000000cc` (80% black) is used for summaries and metadata (2884 characters). `ink-3` `#000000` is the footer text. `ink-5` `#222222` and `ink-6` `#5e5e5e` are the darker and lighter secondary greys.
- `surface-3` `#f5f5f5`: the light panel color behind loading placeholders and the advertising slot area.

White text (`#ffffff`, 724 characters) appears on the dark hero panel. On hover, the HOT ISSUE list items change from `rgb(255, 255, 255)` to `rgb(255, 255, 0)`, so yellow is also the interaction accent on dark. A cookie-consent dialog at the lower left of the capture uses dark grey and light grey buttons; it is a consent control, not brand UI, and no token here is derived from it.

Rule of use: yellow is a surface, not a text color on white. On white the brand never sets yellow type; yellow backgrounds always carry black text.

## Typography

One family carries the whole site: Prompt, with 400 and 500 weights loaded (`Prompt 400 normal`, `Prompt 500 normal`) and a generic sans-serif fallback. Prompt accounts for 12,764 of the measured characters, against 12 for Arial. Weights measured by characters are 400 (7929), 600 (4795) and 700 (52), so the page leans on regular and semibold with bold reserved for the largest headings.

- `display`: 32px, weight 700, 0.2px letter-spacing; this is the masthead heading (the logo text carrier).
- `heading`: 18px, weight 400, line-height 31.5px; hero list titles. 18px is the most used size on the page (5095 characters).
- `subheading`: 16px, weight 400, line-height 25.6px; article headlines in the rows.
- `body`: 14px, weight 400, line-height 24.5px; summaries and footer text.
- `input`: 32px, weight 400; the search field.

Every size is set with 0.2px letter-spacing, except 12px labels where 1px tracking is also measured (559 characters), which is the uppercase category tag style. Prompt supports Thai and Latin from one family, so no substitute stack is declared; no proprietary face is involved and no font substitution is needed.

## Layout

The measured page is 1280px wide and about 10,041px tall, so it is a long, scrolling front page. From the capture, top to bottom: an advertising banner, the yellow logo band with social icons at the right, a white navigation row with a search icon and a user icon, a grey advertising placeholder, the hero slider (a large slide on the left and a dark list of three HOT ISSUE items on the right), then three columns: LAST UPDATE as a list of small thumbnails with two-line titles, DIGITAL-TECH with a large lead image and a long headline, and POLITICS and LIFESTYLE as stacked image cards with left/right arrows in the section label.

Measured spacing is small and tight: paddings of 10px (391 elements), 8px (311), 15px (35), 16px (33) and 5px (18). The generated spacing scale runs 1, 2, 3, 4, 5, 6, 8, 10, 11 and 15px. Headline rows use a line-height of roughly 1.4 to 1.6 times the font size (25.6px on 16px, 31.5px on 18px, 24.5px on 14px).

## Elevation & Depth

The page is flat. Two box shadows are measured: `rgb(255, 255, 255) 130px 0px 0px 0px inset` on 26 elements, and `rgb(0, 0, 0) 0px 10px 7px -10px` on the search input, which draws a shadow only along the bottom edge. Depth otherwise comes from color planes: yellow masthead, white rows, grey `#f5f5f5` placeholders and a dark green-black hero panel. A `rgba(0, 0, 0, 0.2) 0px 4px 20px 0px` shadow was recorded in the first measurement from the consent dialog and is not part of the brand system.

## Shapes

Almost nothing is rounded. After the consent dialog was excluded, the only radius measured on the page is `50px`, on one element, so the generated `rounded` scale is a single `xs: 50px` token. Thumbnails, cards, the navigation bar and the chips seen in the capture compute to square corners in the measurement. Borders are also nearly absent: the only border color measured is `#ffff00` on one element.

## Components

- **Masthead and navigation.** Yellow `#ffff00` band with the Spring logo at the left and social icons (Facebook, X, Instagram, YouTube, LINE, TikTok) at the right. The navigation row below is white with uppercase labels; the current item (HOME) sits on a yellow tab. Chevron markers follow most labels. The nav text color token is `ink`.
- **Search input.** 70px high, padding `10px 0px 10px 15px`, 32px Prompt text in `ink-3`, with the bottom-only shadow above.
- **Section label.** Uppercase Prompt text, a slash, then a dotted horizontal rule across the column; sections with carousels show small chevron arrows.
- **Category tag.** A small yellow label with uppercase black text overlaid at the top-left of a thumbnail.
- **Trend chips.** Yellow chips with a hash prefix (#Climate Crisis, #AI) under TRENDS FOR YOU.
- **Footer.** Background `primary` (`#ffff00`), text `ink-3`, 14px body, holding the corporate address paragraph.
- **Links.** `ink` colored, 16px subheading style, no underline recorded on headlines.

## Design System Architecture

No public design system or brand guideline was found: the site's own pages measured here link to none, and none was fetched. Research record: `_research` is `none`, with the measured home page as the only page opened. The de-facto system is a theme-driven news template. The only CSS custom property on the root is `--primary-color: #ff0`, which holds the brand yellow; the slider library `slick` is loaded as a font entry (`slick 400 normal`). The system is therefore a handful of brand values (yellow, Prompt, 0.2px tracking, 14/16/18/32px) applied to a content template, not a token library.

## Do's and Don'ts

Do use `#ffff00` as a full-width surface for the masthead and footer with black text. Do keep headlines in Prompt at 16 or 18px, 400 weight, with 0.2px tracking. Do use uppercase English labels with a trailing slash for section headings. Do let photography carry colour. Do reserve `ink-2` for summaries and dates.

Don't set yellow text on white. Don't add rounded corners to cards or thumbnails; the measured page has none. Don't add shadows to content blocks. Don't use the consent dialog's greys as brand colors. Don't introduce a second typeface.

## Responsive Behavior

The extractor's mobile pass recorded: h1 32px weight 700 (unchanged from desktop); h2 24px weight 700 with 30px line-height (on desktop the h2 role measured 18px weight 400, from a different element); body 14px; the header band measured 75px high on mobile against 189px on desktop. Mobile font sizes by character count were 18px (2782), 16px (1723), 10px (903), 12px (585) and 14px (513). Mobile navigation pattern, column counts and breakpoints were not measured, so none are described here.

## Iteration Guide

1. Start from `canvas` `#ffffff` and `ink` `#000000f2`; add `primary` `#ffff00` only as a surface.
2. Set everything in Prompt with 0.2px letter-spacing; sizes 14, 16, 18 and 32px.
3. Build rows of thumbnail + two-line headline + date in `ink-2`; keep corners square.
4. Use uppercase labels for sections and navigation; add a hover change to yellow on dark panels.
5. Verify with `node web/scripts/verify-designs.mjs --slug=spring-news`.
