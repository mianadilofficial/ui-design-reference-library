---
version: alpha
name: "South China Morning Post"
category: "News & Publishing"
description: "South China Morning Post's home page is a dense news front built on Source Serif 4 600 headlines at 23px/27.6px with -0.575px tracking, Roboto and Roboto Condensed UI text, a navy action color (#2c4692) on white (#ffffff), hairline #dfdfdf rules and 2px-radius uppercase buttons."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#2c4692"
  on-primary: "#ffffff"
  surface: "#dedede"
  surface-3: "#f8f8f8"
  ink-2: "#5a5a5a"
  ink-3: "#727272"
  ink-4: "#333333"
  ink-6: "#666666"
  hairline: "#dfdfdf"
typography:
  display:
    fontFamily: "\"Source Serif 4\", serif"
    fontSize: 23px
    fontWeight: 600
    lineHeight: 27.6px
    letterSpacing: "-0.575px"
  display-mobile:
    fontFamily: "\"Source Serif 4\", serif"
    fontSize: 22px
    fontWeight: 600
    lineHeight: 26.4px
    letterSpacing: "-0.55px"
  subheading:
    fontFamily: "\"Source Serif 4\", serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18.9px
    letterSpacing: "-0.14px"
  body:
    fontFamily: Roboto, "Roboto fallback", sans-serif
    fontSize: 10px
    fontWeight: 400
    lineHeight: 11px
  button:
    fontFamily: "\"Roboto Condensed\", \"Roboto Condensed fallback\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16px
  nav:
    fontFamily: Roboto, "Roboto fallback", sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
  button-secondary:
    fontFamily: Roboto, "Roboto fallback", sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16px
    textTransform: uppercase
  input:
    fontFamily: Roboto, "Roboto fallback", sans-serif
    fontSize: 13px
    fontWeight: 400
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 12px
  xl: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 8px
  s8: 10px
  s9: 10.5px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 12px
    height: 32px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 10px 16px
    height: 36px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 0px 24px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 0px 24px
  text-input:
    textColor: "{colors.ink-4}"
    typography: "{typography.input}"
    padding: 0px 0px 0px 4px
    height: 15px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

# South China Morning Post

## Overview

The South China Morning Post (scmp.com) home page, titled "Breaking China, Asia, HK News, Opinions and Insights | South China Morning Post", is a long, dense newspaper front: 16016px tall at 1280px wide. From the top the capture shows a grey banner slot holding a full-width advertisement, then a utility row (a rounded "Search articles or topics" field with a round blue search button; an edition switcher HONG KONG, INTERNATIONAL (bold), ASIA; links ePAPER and SCMP PLUS in blue; a blue "SUBSCRIBE" button and "SIGN IN"). A dark-navy tooltip callout promotes AI-powered search ("Search the way you think. Try our AI-powered search to find news faster."). The masthead is the title "South China Morning Post" in a bold serif with a square yellow and navy logo mark, and under it a section nav (Economy, Hong Kong, Asia, Business, Tech, Lifestyle, People & Culture, World, Opinion, Video, Sport, All).

The body is a two-column news grid: a wide main column of stories and a narrow right rail with an Opinion list (author photos and byline lines), a cartoon and ad slots. Each story is a bold serif headline, a gray sans-serif or serif standfirst, a small gray time stamp ("31 minutes ago", "3 hours ago") and a photograph on one side, separated by thin hairline rules. Small uppercase category kickers (SCIENCE, US, MILITARY, LAW AND CRIME, HONG KONG ECONOMY, MARKETS, BUSINESS, DIPLOMACY) sit above headlines. A cookie notice ("We use cookies to tailor your experience … ACCEPT") overlays the page; it is consent UI, not brand design.

The tone is editorial and information-first: type is the brand, the palette is neutral with one blue, and imagery is news photography.

## Colors

- **Canvas `#ffffff`**: the page background and the footer background (1696 weight).
- **Ink `#000000`**: headline and body text (13666 characters, the most-read color).
- **Primary `#2c4692`**: the SCMP blue. It fills the "SUBSCRIBE", "FIND OUT MORE" buttons (2px radius, white text) and colors links such as ePAPER, SCMP PLUS, and the outlined "More Latest News" button text (112 characters).
- **On-primary `#ffffff`**: text on blue buttons.
- **Surface `#dedede`**: the largest measured background area (3369 weight), a neutral light grey. **Surface-3 `#f8f8f8`** (543) and `#f6f6f6` (372) are paler tints behind rails and labels such as the "ADVERTISEMENT" strip.
- **Ink-2 `#5a5a5a`** (3552 characters): standfirst and secondary text. **Ink-3 `#727272`** (1398): fine print and time stamps. **Ink-4 `#333333`** (930), **ink-6 `#666666`** (135): input and meta text.
- **Hairline `#dfdfdf`**: the 1px rule color (60 border uses) beside `#000000` rules (37 uses) that mark section tops.

A navy `#001246` (25 weight) and a translucent dark `#27303ef7` (41) appear as areas; they belong to the AI-search tooltip and the cookie notice, which are overlays. The stylesheet's Swiper variable `--swiper-theme-color: #007aff` is a carousel-library default, not an SCMP brand color.

## Typography

Four families are loaded: **Source Serif 4** (weights 400 to 700, normal and italic; 13590 characters), **Roboto** (400, 500, 700; 3548), **Roboto Condensed** (100 to 900 variable plus 400 and 700; 2750) and **Crete Round** (400; 426), a slab-style face (its use on specific elements was not recorded).

| Role | Family | Size / line-height | Weight | Tracking |
|---|---|---|---|---|
| display (lead headline) | Source Serif 4 | 23px / 27.6px | 600 | -0.575px |
| display-mobile | Source Serif 4 | 22px / 26.4px | 600 | -0.55px |
| subheading (standfirst) | Source Serif 4 | 14px / 18.9px | 500 | -0.14px |
| button | Roboto Condensed | 14px / 16px | 700 | normal |
| button-secondary | Roboto | 14px / 16px | 700, uppercase | normal |
| nav | Roboto | 12px / 12px | 400 | normal |
| body (legal fine print) | Roboto | 10px / 11px | 400 | normal |
| input | Roboto | 13px | 400 | normal |

The body-role extraction picked the 10px registration fine print ("By registering, you agree to our T&C and …"), so the body token records that size; the main reading text is set at 16px (7864 characters), 14px (5807), 20px (1710), 15px (1378), 12px (1245), 11px (994), 17px (426) and 10px (410). Tracking is slightly negative and proportional: 16px at -0.32px, 14px at -0.14px, 20px at -0.4px, 28px at -1.4px (or -0.7px). Weights by characters: 600 (7055), 500 (7030), 400 (3814), 700 (2410).

## Layout

The 1280px page shows a centered grid with a wide main column and a narrow right rail separated by a hairline. Story rows use text on the left and a photograph on the right (or the reverse) separated by `#000000` or `#dfdfdf` horizontal rules. Gaps: 12px (234), 8px (212), 16px (84), 20px (55), 2px (44), 4px (24), 6px (14), 40px (10). Paddings: 16px (37), 8px (30), 24px (22), 12px (21). The header measures 1224px wide with an unusually tall nav container (453px). Footer is 732px tall with grouped links (Company, About SCMP, Policies & Standards …) in 14px bold.

## Elevation & Depth

No box shadows were measured. Separation is by hairlines and negative space; the AI-search callout and the cookie notice are dark floating panels (overlays, not part of the system).

## Shapes

Radii measured: 50% (11 elements, round search button and author avatars), 2px (5, buttons), 12px (5), `0px 4px 0px 0px` (5), 4px (3), `4px 4px 0px 0px` (2, tab-like nav links such as ePAPER), 100px (1) and 6px (1). Buttons are 2px; the search field and avatars are fully round. Photographs are rectangles.

## Components

- **button-primary**: `#2c4692` fill, white Roboto Condensed 14px/700, 2px radius, 8px 12px padding, 32px tall ("FIND OUT MORE", 141px wide).
- **button-secondary**: `#2c4692` fill, white Roboto 14px/700 uppercase, 2px radius, 10px 16px padding, 36px tall ("SUBSCRIBE", 106px wide).
- **button outlined**: 1px solid `#dfdfdf` border, `#2c4692` text, Roboto Condensed 14px/700 ("More Latest News", 300px wide).
- **nav link**: 12px Roboto in `#2c4692` with 24px horizontal padding and a 4px top radius; on hover the label gains an underline (measured text-decoration underline, color unchanged).
- **text input**: 13px Roboto, `#333333` text, 4px left padding.
- **story row**: kicker in small uppercase, serif headline, grey standfirst, time stamp, optional comment count.

## Design System Architecture

No public design system, brand guideline or token package was found on the home page, and its only brand-related links are corporate (About SCMP, Policies & Standards). The measured system is literal CSS plus fallback-named web fonts (Roboto fallback and Roboto Condensed fallback), with the only custom property being the Swiper carousel's `--swiper-theme-color`. Reference: https://www.scmp.com/

## Do's and Don'ts

- Do set headlines in Source Serif 4 600 with slightly negative tracking, and UI in Roboto or Roboto Condensed bold.
- Do use `#2c4692` for the subscribe action and links, and keep everything else black, grey and white.
- Do separate stories with 1px rules in `#dfdfdf`, and section tops in black.
- Don't round buttons beyond 2px.
- Don't use Swiper's `#007aff` as a brand color.
- Don't treat the cookie notice or the tooltip callout as brand components.

## Responsive Behavior

The 390px mobile pass measured: the lead headline is 22px/26.4px with -0.55px tracking (349px wide), the legal body stays 10px/11px, and the mobile size ladder is 16px (8559 characters), 14px (4833), 18px (2306), 12px (1336), 11px (994), 17px (426), 10px (410), 28px (213), 20px (131) and 22px (73). Column count and nav layout on mobile were not measured.

## Iteration Guide

1. Start with white, black and `#2c4692`; use `#5a5a5a` for standfirsts.
2. Use Source Serif 4 600 for headlines, Roboto for meta, Roboto Condensed for buttons.
3. Keep buttons at 2px radius, 32 to 36px tall.
4. Rule stories with 1px hairlines.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=south-china-morning-post --url=https://www.scmp.com --force --no-motion` after changes.
