---
version: alpha
name: Radical Face
category: "Culture & Events"
description: "Radical Face is the artist home page for music, writing and visual art: a warm paper canvas (#f0eeeb) with black ink (#000000), a near-black footer (#0e0e0e), TimesNow serif body at 21.3333px, SuisseIntl sans labels at 13.3333px weight 600, a condensed Druk wordmark, and small outlined pill links with 12px radius."
colors:
  dot-release: "#dd2727"
  dot-blog: "#6756bd"
  dot-fiction: "#41674e"
  canvas: "#f0eeeb"
  ink: "#000000"
  primary: "#f0eeeb"
  surface-2: "#0e0e0e"
  surface-3: "#dad5ce"
  ink-2: "#c3c3c3"
  ink-3: "#232323"
  ink-4: "#5f5f5f"
  ink-6: "#252525"
  text-input-text: "#ffffff"
typography:
  display:
    fontFamily: TimesNow, serif
    fontSize: 26.6667px
    fontWeight: 400
    lineHeight: 28.2667px
  display-mobile:
    fontFamily: SuisseIntl, sans-serif
    fontSize: 23.92px
    fontWeight: 600
    lineHeight: 23.92px
  body:
    fontFamily: TimesNow, serif
    fontSize: 21.3333px
    fontWeight: 400
    lineHeight: 24.7467px
  link:
    fontFamily: SuisseIntl, sans-serif
    fontSize: 13.3333px
    fontWeight: 600
    lineHeight: 13.3333px
  input:
    fontFamily: SuisseIntl, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 23.04px
rounded:
  xs: 8.89px
  sm: 12px
  md: 44.44px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3.11px
  s4: 3.56px
  s5: 4px
  s6: 4.44px
  s7: 4.89px
  s8: 8.89px
  s9: 9.78px
  s10: 12.44px
components:
  link:
    textColor: "{colors.ink-6}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 0px 9.77778px 0.888889px
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 1px 2px
    height: 71px
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink-4}"
    padding: 0px 17.7778px
---

## Overview

Radical Face presents itself, in its own words, as "The official home for all of my creative outlets." The page title is "Radical Face - Music, Writing, and Art". The site is a personal artist portfolio, not a product: a single long home page that opens with a very large condensed wordmark, a full-width painted portrait, and then a sequence of sections for audio, writing and visual work. The mood is editorial and print-like. A warm off-white paper canvas (#f0eeeb) carries black type, and the only strong dark surfaces are a few small black cards on the hero image and the footer (#0e0e0e).

Three typefaces are loaded and measured: Druk (weight 700, the wordmark and section titles), TimesNow (weights 200 and 400, with italics, the running text) and SuisseIntl (weights 400 and 600, the interface labels). The contrast between a heavy, tightly tracked grotesque headline and a light serif body is the identity of the page. Everything else is deliberately quiet: no shadows were measured, no gradients, and almost no color beyond ink and paper.

## Colors

The canvas is `#f0eeeb`, the largest background area by a wide margin (weight 5291 in the extraction) and confirmed on the capture pixels. Text is `#000000` for the most-read ink (weight 753 characters), with a family of softer neutrals for secondary copy: `#232323` and `#252525` for the serif description lines and small links, `#5f5f5f` for footer text, `#c3c3c3` for light-on-dark text, and `#838383` as a mid grey.

Two further surfaces are measured. `#0e0e0e` is the near-black used by the footer and by the dark release cards laid over the hero painting. `#dad5ce` is a darker paper tone that covers a substantial area (weight 1073), the second paper shade after the canvas. A white `#ffffff` is measured as the text color of the input element.

The only chromatic colors are three small status dots next to the labels "Latest Release", "Latest Blog" and "Latest Fiction" in the hero cards: red `#dd2727`, purple `#6756bd` and green `#41674e`. They appear in the background-area frequencies with a weight of 0 because each dot is tiny; they are kept as tokens `dot-release`, `dot-blog` and `dot-fiction`. The generator assigned `primary` the same value as the canvas (`#f0eeeb`) because the extractor found no filled call-to-action button; the site has no saturated brand action color, so `primary` here simply equals paper.

## Typography

- **Display (desktop h1 role):** TimesNow, serif, 26.6667px, weight 400, line height 28.2667px, color `#252525`. This is the measured hero statement "The official home for all of my creative outlets."
- **Display on mobile:** SuisseIntl, sans-serif, 23.92px, weight 600, line height 23.92px. In the 390px pass the largest hero text measured is the "radical.face" wordmark link, in black.
- **Body:** TimesNow, serif, 21.3333px, weight 400, line height 24.7467px, color `#232323` (for example "Albums and EPs, complete with liner notes").
- **Link / label:** SuisseIntl, sans-serif, 13.3333px, weight 600, line height 13.3333px.
- **Input:** SuisseIntl, 16px, weight 400, line height 23.04px.

The wordmark "RADICAL.FACE" and the section titles such as "AUDIO" are set in the condensed Druk face. Their sizes are not tokenised, because the extractor recorded them only through letter-spacing entries: 226.667px with -2.26667px, 106.667px with -1.06667px, and 88.8889px with -1.06667px. The tight negative tracking is part of the look. By character count, 71.1111px (weight 97 characters) is the largest widely used text size in the desktop pass and 14.2222px is the most used (508 characters). Weights seen across the page are 300, 400 and 600.

Druk, TimesNow and SuisseIntl are all licensed commercial faces served from the site; no free substitutes are documented by the brand. If they cannot be licensed, any condensed heavy grotesque, a light text serif and a neo-grotesque sans give the same structure of contrast, but the numbers above should be kept.

## Layout

The desktop pass was measured at 1280px width over a page 8497px tall. The home page is a vertical stack of full-width bands separated by dotted horizontal rules (visible in the capture above and below the "AUDIO" heading and under the top bar). The top bar holds the lowercase wordmark "radical.face" at left, three centered nav labels "audio", "writing", "visual", and a small circular menu button at right. Below it, the giant wordmark occupies the left two thirds of the width while a two-line serif description and an "artist bio" pill sit in the right column.

The hero is one wide painted portrait with an inset margin on both sides; three dark cards are stacked in its upper left. Section headers follow a repeating pattern: a heavy condensed title at left, a short serif line in the middle, and a "view all" link at right. Spacing values measured include 1px, 2px, 3.11px, 3.56px, 4px, 4.44px, 4.89px, 8.89px, 9.78px and 12.44px; gaps of 8.88889px and 3.55556px; and a footer horizontal padding of 17.7778px.

## Elevation & Depth

No box shadows were measured in the CSS corpus or on any element, so the site is flat. Separation is made with tone (paper `#f0eeeb`, darker paper `#dad5ce`, near-black `#0e0e0e`), with dotted rules, and with outlines on the pill links. Depth comes only from the photographic hero and the overlapping dark cards placed on top of it.

## Shapes

Four radii are measured: 8.89px, 12px, 44.44px and a full pill (9999px, measured as 100% on one element). The small "artist bio" and "enable audio" links are outlined pills; the link role itself reports a 12px radius with padding `0px 9.77778px 0.888889px` and a height of 24px. The dark hero cards have visibly rounded corners in the capture, consistent with the 8.89px radius, which is the most frequent value (weight 11). The text input and footer have a 0px radius.

## Components

- **Pill link:** SuisseIntl 13.3333px weight 600, text `#252525`, radius 12px, padding `0px 9.77778px 0.888889px`, thin outline, height 24px. Used for "artist bio" and "enable audio".
- **Release card:** near-black `#0e0e0e` surface, small italic serif label in grey with a colored dot, and a white SuisseIntl title ("Mixtape #2", "Progress Report", "Sisters").
- **Text input:** white text `#ffffff`, SuisseIntl 16px, padding `1px 2px`, height 71px, width 444px, no radius.
- **Footer:** background `#0e0e0e`, text `#5f5f5f`, SuisseIntl 13.3333px, padding `0px 17.7778px`, height 69px; links include "radical.store", "discord" and a licensing e-mail contact.
- **Nav:** lowercase labels in SuisseIntl 600, centered in the top bar.

No hover states were recorded (the hover list in the extraction is empty).

## Design System Architecture

No public design system, token package or brand guideline for this site was found: the site's own pages were not linked to one, and the research record is empty on purpose. The de-facto system is visible in the shipped CSS. The only custom property on the root is `--app-height: 100%`. The CSS corpus lists the three font families SuisseIntl (36 uses), Druk (14) and TimesNow (9), with no recorded box shadows. Colors in the corpus are a tight set: `#f0eeeb`, `#ffffff`, `#5f5f5f`, `#0e0e0e`, `#1c1c1c`, `#272727`, `#252525`, `#232323`, `#dad5ce` and a few others. The measurements come from `web/data/extracted/radical-face.json` and the source site https://www.radicalface.com.

## Do's and Don'ts

- Do keep the paper canvas `#f0eeeb` and black ink `#000000` as the base of every page.
- Do pair a condensed heavy headline with the light TimesNow serif for descriptions.
- Do use lowercase labels in SuisseIntl weight 600 for navigation and small links.
- Do use dotted rules to divide sections rather than shadows.
- Don't add drop shadows or gradients; none were measured.
- Don't introduce a saturated action color; the only chroma on the page is the three tiny status dots.
- Don't use the colored dots as large fills: they are accents of a few pixels.
- Don't mix more than the three measured typefaces.

## Responsive Behavior

Only one mobile pass at 390px was recorded, and it captured text sizes and the largest hero text only. The mobile h1 is the "radical.face" wordmark link in SuisseIntl 23.92px, weight 600, black. The mobile text sizes recorded by character count are 16.64px, 12.48px, 14.56px, 21.84px, 52px, 15.6px, 29.12px, 19.76px, 11.44px, 62.4px, 17.68px, 23.92px, 98.8px and 18.72px. Mobile layout, navigation behavior, breakpoints and image treatment were not measured.

## Iteration Guide

1. Start from the canvas `#f0eeeb` and ink `#000000`; add `#0e0e0e` only for footers and overlay cards.
2. Set headings in a condensed heavy face with negative letter-spacing; set explanatory copy in TimesNow 21.3333px / 24.7467px.
3. Build small links as outlined pills with 12px radius and 13.3333px SuisseIntl 600.
4. Keep chroma to the three status dots (`#dd2727`, `#6756bd`, `#41674e`).
5. Separate sections with dotted rules and a three-part header row (title, serif line, "view all").
6. Re-measure with `node web/scripts/extract-tokens.mjs --slug=radical-face --url=https://www.radicalface.com --force --no-motion` after any visual change, and run `node web/scripts/verify-designs.mjs --slug=radical-face`.
