---
version: alpha
name: AXA
category: "Banking & Insurance"
description: "AXA's corporate website (axa.com): white #ffffff pages with #343c3d text and AXA blue #00008f navigation, Publico-Headline bold serif headlines at 48px over Source Sans Pro, square #f07662 coral READ MORE buttons, and full-bleed blue #4975ba, navy #274168 and gold #8a7333 content bands."
colors:
  canvas: "#ffffff"
  ink: "#343c3d"
  primary: "#f07662"
  on-primary: "#ffffff"
  brand-blue: "#00008f"
  ink-body: "#333333"
  ink-muted: "#757575"
  ink-teal: "#80a3a7"
  surface-light: "#f5f5f5"
  surface-grey: "#f1f1f1"
  surface-blue: "#4975ba"
  surface-navy: "#274168"
  surface-gold: "#8a7333"
  surface-teal: "#014750"
  divider: "#cccccc"
  sienna: "#d24723"
typography:
  display:
    fontFamily: Publico-Headline, serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 56px
  display-mobile:
    fontFamily: Publico-Headline, serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  stat:
    fontFamily: Publico-Headline, serif
    fontSize: 72px
    fontWeight: 700
    lineHeight: 80px
  panel-link:
    fontFamily: Publico-Headline, serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: 1px
  title:
    fontFamily: Publico-Headline, serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32px
  subheading:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 18px
    letterSpacing: 0.48px
    textTransform: uppercase
  body:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
  button:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 12.48px
    fontWeight: 600
    lineHeight: 16px
    letterSpacing: 1px
    textTransform: uppercase
  nav:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  caption:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 11.52px
    fontWeight: 400
    lineHeight: 16px
rounded:
  none: 0px
spacing:
  s1: 2px
  s2: 4.8px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 40px
  button-outline:
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 40px
    borderColor: "{colors.on-primary}"
  nav-link:
    textColor: "{colors.brand-blue}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  ticker:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  panel-link:
    textColor: "{colors.divider}"
    typography: "{typography.panel-link}"
    rounded: "{rounded.none}"
  stat-band:
    backgroundColor: "{colors.surface-blue}"
    textColor: "{colors.on-primary}"
    typography: "{typography.stat}"
  footer:
    textColor: "{colors.brand-blue}"
    rounded: "{rounded.none}"
    borderColor: "{colors.divider}"
---

## Overview

The measured page is AXA's corporate website, https://www.axa.com/ (title "AXA's Corporate Website | AXA"), 5120px tall at 1280px wide with 460 visible elements. It is a content-rich institutional front door: a share-price ticker, a main menu, a rotating full-bleed video hero with five story tabs, bands of flat color for purpose and stories, image cards for commitments, and press and investor modules.

From the top: a thin white bar with "AXA" and a live share price ("41.420", "-1.45%"), "AXA WORLDWIDE" in coral and an EN / FR switch; below it the white header with the blue AXA logo tile, the menu About Us, Commitments, News, Investors, Press, Careers (in AXA blue `#00008f`) and a search icon. The hero is a full-width video of an executive over a dark overlay, with the small-caps label "HALF YEAR 2026 EARNINGS", the 48px serif headline "AXA on track to deliver "Unlock the Future" plan targets", a coral "READ MORE" button, and five tabs along the bottom (STRATEGY, PARTNERSHIP, HALF YEAR 2026 EARNINGS, INSURANCE, NEW CAMPAIGN) with a progress bar and a pause control. Below, a blue world-map band (left: "OUR PURPOSE", "Act for Human Progress by protecting what matters", an outlined "LEARN MORE"; right: a navy panel with large serif links "Our History", "A diverse Community", "AXA Foundation for Human Progress") closes with three 72px figures: "156,000 Employees", "52 Countries", "+92 million Clients". A white section "OUR COMMITMENTS" with a centered serif statement leads to three tall photo cards (Vision and Strategy, Climate & Biodiversity, AXA EssentiALL) with a numbered pager, then a gold "AXA STORIES" band. The voice is purposeful and plain: "Act for Human Progress by protecting what matters", "Age shouldn't be a risk".

## Colors

- **Canvas `#ffffff`** is the white of the header and content sections. **Ink `#343c3d`** (589 characters; the stylesheet's `--color-grey-800`) is body and ticker text; `#333333` (221) is the legal and small print.
- **AXA blue `#00008f`** (241 characters; declared as `--color-axa-blue`) colors the main menu and the footer's "DIRECT ACCESS" block.
- **Primary coral `#f07662`** is the fill of the "READ MORE" button and the text of the "AXA WORLDWIDE" link and the active pager number (139 characters); on-primary `#ffffff` is the button label. The stylesheet also declares `--color-sienna-400` `#d24723`, a deeper warm accent not seen in the measured roles.
- **White text `#ffffff`** (1268 characters) sits on the video hero and on the colored bands.
- **Bands (measured background areas)**: surface blue `#4975ba` (817 units, the world-map band), navy `#274168` (271, the "About Us" panel), gold `#8a7333` (210, the "AXA Stories" panel), teal `#014750` (978), light grey `#f5f5f5` (908) and `#f1f1f1` (188). `#343c3d` also appears as a background area (1024).
- **Muted**: `#757575` (39 characters), `#80a3a7` (220, pale teal text), `#cccccc` (64 characters of text and the 1px footer border; `--color-grey-400`).

## Typography

Two families. **Publico-Headline** (bold 700, 753 characters, `--font-heading`) is the editorial serif for headlines, panel links, card titles and statistics; **Source Sans Pro** (400, 600, 700; 2039 characters, `--font-sans`) carries everything else. Weights by character: 700 (1516), 600 (682), 400 (594).

- **Display**: Publico-Headline 48px / 56px, 700 (hero headline). Mobile pass: 40px / 48px.
- **Stat**: Publico-Headline 72px / 80px, 700 ("156,000", "52", "+92"; the word "million" is 24px/32px).
- **Panel link**: Publico-Headline 32px / 40px, 700, letter-spacing 1px ("Our History").
- **Title**: Publico-Headline 24px / 32px, 700 (card titles, the centered section statement). Source Sans Pro 700 at 24px / 32px is used for some news-card titles.
- **Subheading**: Source Sans Pro 14px / 18px, 700, uppercase, 0.48px tracking ("STRATEGY"). Other uppercase labels use 14px with 1px tracking (303 characters).
- **Body**: Source Sans Pro 20px / 28px, 700 (hero teasers). **Nav**: 16px / 24px, 600. **Button**: 12.48px / 16px, 600, uppercase, 1px tracking. **Caption**: 11.52px / 16px, 400 (legal line "©2026 AXA All Rights Reserved").

Sizes by character: 16px (664), 20px (564), 32px (448), 14px (378), 24px (357), 12px (92), 12.48px (85), 11.52px (62), 48px (53), 17.76px (50), 23px (27), 72px (12). The stylesheet declares a size ladder `--text-xs` .75rem to `--text-7xl` 4.5rem, `--tracking-wide` .025em and `--tracking-wider` .05em, and `--leading-tight` 1.25. Substitutes: any bold transitional serif for Publico-Headline and any humanist sans for Source Sans Pro.

## Layout

A full-width stack of bands inside a 1280px canvas. The header is 134px tall (top ticker bar plus menu bar). The hero is full-bleed with the headline block left-aligned at a side margin and a five-column tab strip across the bottom. The purpose band splits 50/50 (blue left, navy panel right) and then runs a centered three-figure row separated by thin vertical rules. The commitments cards are three equal columns that run to the viewport edges with a pager. The footer starts with a 268px "DIRECT ACCESS" block (Contact us, Subscribe to email alerts) with a 1px `#cccccc` border.

Measured paddings: 8px (15), 24px (14), 40px (11), 16px (6), 10px (4), 25px (4), 20px (4), 65px (4); gaps 24px (10), 8px (8), 16px (2), 48px (2), 30px (2). The stylesheet declares container widths (`--container-4xl` 56rem to `--container-7xl` 80rem) and `--header-mobile-height` 72px with `--header-mobile-offset` 112px. Density is medium: dense navigation, airy bands.

## Elevation & Depth

Flat. The only measured shadow is a zero-offset Tailwind-style stack (`rgba(0, 0, 0, 0) 0px 0px 0px 0px` repeated), so no shadow is visible. Depth comes from color bands, a dark overlay on the hero video, text laid over photo cards and 1px borders (`#cccccc`, `#ffffff`). The stylesheet declares `--blur-2xl` 40px.

## Shapes

Everything measured is square: no border-radius value was recorded on any element (button, link and card roles all measure `0px`). The stylesheet declares `--radius-sm` .25rem, `--radius-md` .375rem, `--radius-lg` .5rem and `--radius-xl` .75rem, none used on the measured elements. The logo is a square blue tile; photos are full-bleed rectangles; the pager and pause control are plain icons.

## Components

- **Button primary ("READ MORE")**: `#f07662` fill, `#ffffff` text, Source Sans Pro 12.48px/600, uppercase, 1px tracking, radius `0px`, 40px tall and 128px wide (48px tall in the mobile pass).
- **Button outline ("LEARN MORE")**: transparent, `2px solid #ffffff`, same type, 40px tall and 140px wide.
- **Hero tabs**: five labeled tabs, each a thin top rule, a 14px uppercase eyebrow and a short teaser; the active tab has a coral progress line.
- **Nav link**: AXA blue `#00008f`, Source Sans Pro 16px/600 with the 24px line-height; "Careers" carries an external-link icon.
- **Ticker**: "AXA 41.420 (-1.45%)" at 16px/600 in `#343c3d`; the hover state adds a date and time and moves the border from `#f07662` to `rgb(236, 77, 51)`.
- **Panel link**: Publico-Headline 32px/700 in a navy panel, ruled by thin lines with an arrow at the right.
- **Statistic**: Publico-Headline 72px white on the blue band with a 16px/600 label beneath.
- **Footer block**: "DIRECT ACCESS" in `#00008f`, Source Sans Pro 17.76px/700 uppercase, 22.24px line-height.

## Design System Architecture

AXA's corporate site links no brand guidelines, logo downloads, press kit, design system or typeface notes: the homepage opened at https://www.axa.com/ and the press page https://www.axa.com/en/press offer press releases, publications and media contacts only (the press page embeds two logo images but states no usage terms). The de-facto system is the shipped stylesheet: 87 `:root` properties in a Tailwind-style scheme, including `--color-axa-blue` `#00008f`, a grey ramp (`--color-grey-100` `#fafafa`, `-200` `#f0f0f0`, `-300` `#e5e5e5`, `-400` `#ccc`, `-600` `#757575`, `-800` `#343c3d`, `-900` `#111b1d`), `--color-sienna-400` `#d24723`, `--font-heading` "Publico-Headline", `--font-sans` "Source Sans Pro", a `--text-*` size ladder, `--radius-*`, `--container-*`, easing functions and the mobile header variables. The menu structure is embedded in the page as a JSON payload (`props.pageProps.layoutProps.header.leftMenu`), and images are served from `images.prismic.io`.

## Do's and Don'ts

- Do set editorial headlines in Publico-Headline 700 and UI and body in Source Sans Pro; use 72px serif numerals for statistics.
- Do use AXA blue `#00008f` for menu and footer links on white; use coral `#f07662` for primary buttons.
- Do alternate flat color bands (`#4975ba`, `#274168`, `#8a7333`) with white sections and photo cards.
- Do keep corners square and buttons 40px tall with 1px-tracked uppercase labels.
- Don't add shadows or rounded corners; none were measured.
- Don't use the browser default blue; the blue is `#00008f`.
- Don't set button labels in sentence case; the measured style is uppercase.
- Don't apply coral to large fields; it appears only on buttons, small links and indicators.

## Responsive Behavior

Measured in the 390px mobile pass: the hero headline is 40px / 48px at 700 (48px / 56px desktop) with a 330px-wide box 192px tall; the teaser body stays 20px / 28px in a 326px box; the "READ MORE" button is 48px tall and 128px wide (40px tall on desktop). The mobile character-size histogram is 24px (696), 20px (564), 16px (404), 14px (320), 32px (109), 12px (101), 12.48px (85), 11.52px (62), 40px (56), 17.76px (41), 48px (12), against desktop 16px (664), 20px (564), 32px (448), 14px (378), 24px (357). The stylesheet declares `--header-mobile-height: 72px` and `--header-mobile-offset: 112px`. Layout reflow, the menu pattern and the tab strip at narrow widths were not measured.

## Iteration Guide

1. White canvas, `#343c3d` text, AXA blue `#00008f` for links; coral `#f07662` only for buttons.
2. Publico-Headline 700 for 72, 48, 32 and 24px; Source Sans Pro for 20, 16, 14, 12.48 and 11.52px.
3. Build square 40px buttons: coral filled or 2px white outlined, 12.48px/600 uppercase, 1px tracking.
4. Use band fills `#4975ba`, `#274168`, `#8a7333` for feature panels; keep a three-figure statistics row at 72px.
5. Re-measure a new page first: `node web/scripts/extract-tokens.mjs --slug=axa--<page> --url=https://www.axa.com/<page> --force --no-motion`, then `node web/scripts/verify-designs.mjs --slug=axa`.
