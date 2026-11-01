---
version: alpha
name: "Form&Fun Studio"
category: "Portfolio"
description: "Form&Fun Studio (formandfun.co) is a global creative technology studio site: white #ffffff canvas with warm grey #f5f4f2 tiles, near-black #1d1d1d ink, Aeonik at 12.8px for UI and up to 89.6px for section words, one pill-shaped #1d1d1d \"Learn more\" button with 25.6px radius, and 8px-radius media cards."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f4f2"
  ink: "#1d1d1d"
  primary: "#1d1d1d"
  on-primary: "#ffffff"
  surface-2: "#f6f6f6"
  ink-2: "#e5e5e5"
  ink-3: "#1d1d1d4d"
  ink-4: "#333333"
  ink-6: "#9a9a9a"
  hairline: "#1d1d1d33"
typography:
  display:
    fontFamily: Aeonik, sans-serif
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 15.36px
  display-mobile:
    fontFamily: Aeonik, sans-serif
    fontSize: 15.6px
    fontWeight: 400
    lineHeight: 18.72px
rounded:
  xs: 8px
  sm: 15.36px
  md: 25.6px
  pill: 9999px
spacing:
  s1: 3.84px
  s2: 6.4px
  s3: 7.68px
  s4: 8.96px
  s5: 10.24px
  s6: 12.8px
  s7: 17.92px
  s8: 19.2px
  s9: 25.6px
  s10: 30.72px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
    rounded: "{rounded.md}"
    padding: 10.24px 17.92px
    height: 40px
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-4}"
    rounded: "{rounded.xs}"
---

# Form&Fun Studio

Measured from https://www.formandfun.co/ (page title "Form&Fun Studio"; no lang attribute was recorded). The page is a long portfolio scroll of 6897px: a wordmark, a hero panel showing a vector-curve illustration (a bezier curve with green square anchor handles on a pale blue field), a manifesto paragraph, a row of media tiles, a "WORK" section with a scrolling word band, and further sections.

## Overview

The studio calls itself "Creative Technology Studio". The manifesto measured on the page reads "We are a global creative tech studio forging delightful experiences by blending design, technology, and storytelling. Driven to create value for people and brands through interaction", set very large in light grey with a small "The studio" label at the left. The sections found on the opened page are The studio, Selected Work, Expertise & Capabilities, An award winning studio, Trusted by the world's leading brands and Contact. The navigation reads Studio, Contact, Work; action labels are "Learn more" and "Coming soon". The "Selected Work" label carries the year range "(22-25)" in grey beside the huge uppercase word WORK, and a band of disciplines (DIGITAL, EXPERIENTIAL, MOTION) runs beneath it in pale grey capitals.

The voice is concise and self-assured. The interface almost disappears: tiny 12.8px labels sit at the edges, giant light-weight type carries the message, and project tiles are quiet warm-grey rectangles waiting for imagery (in the capture they are empty tiles, so the visual identity of the work itself is not documented here).

## Colors

Measured background areas: #f5f4f2 (weight 4581, tiles and cards), #f6f6f6 (467), #1d1d1d (4, the button) and #ffffff (page). Text colors by characters: #1d1d1d (1551), #e5e5e5 (388, the pale manifesto and the word band), #1d1d1d4d (209, 30% ink), #333333 (96), #ffffff (61) and #9a9a9a (48). The root variables are `--gray` #ccc, `--blue` #b8ceff, `--black` black, `--white` white and `--swiper-theme-color` #007aff; the last belongs to the carousel library (Swiper) and is a framework default, not a brand color.

- **canvas #ffffff**; **page-largest #f5f4f2** for the media tiles; **surface-2 #f6f6f6**.
- **ink #1d1d1d**: text and the fill of the primary button; **on-primary #ffffff**.
- **primary #1d1d1d**: the "Learn more" pill fill.
- **ink-2 #e5e5e5**: the pale display text, **ink-3 #1d1d1d4d**: muted ink, **ink-4 #333333**: card text, **ink-6 #9a9a9a**: the "(22-25)" caption.
- **hairline #1d1d1d33**: 20% ink rule color.

The light blue `--blue` #b8ceff is declared on the root; the hero panel in the capture is a pale blue-grey field with green anchor squares, and the exact fills of that illustration were not measured as background areas, so no blue token is added.

## Typography

One family, Aeonik, loaded at weights 400 and 500. It carries 2353 measured characters. Aeonik is a commercial typeface; where it is unavailable, any neutral grotesque sans keeps the intended proportions, though its exact letterforms are not reproduced.

- **display** (the extractor's h1, the "Form&Fun" label): Aeonik 12.8px, weight 400, line-height 15.36px. This is also the base body size of the page.
- **display-mobile**: Aeonik 15.6px, weight 400, line-height 18.72px.

Size usage by characters on desktop: 11.52px (877), 12.8px (681), 89.6px (256), 19.2px (221), 56.32px (157), 7.68px (107) and 43.52px (65). The 89.6px size belongs to the section words (WORK and the discipline band), 56.32px to the manifesto text, and 11.52px to captions and nav. Weights: 400 (2268 characters) and 500 (96). Letter-spacing is "normal" on the measured roles. The scale is therefore two-ended: tiny functional text at 11.52 to 12.8px and display text between 43.52px and 89.6px, with very little in between except 19.2px.

## Layout

The page is a single column with full-width bands. The wordmark "Form&Fun" is centered at large size in the first viewport, a small logo mark sits at the top left, "Creative Technology Studio" is centered in the header, and Studio / Contact / Work sit at the right. Cards are laid out in a horizontal row (the capture shows four tiles across the 1280px window with the fourth cut off by the edge, which is a carousel; the Swiper variable `--swiper-navigation-size` 44px confirms a Swiper is present). Spacing tokens measured: 3.84px, 6.4px, 7.68px, 8.96px, 10.24px, 12.8px, 17.92px, 19.2px, 25.6px and 30.72px. Several measured values are multiples of 1.28px (12.8px is ten times it).

## Elevation & Depth

No box shadows were measured. The tile and card surfaces (#f5f4f2 on #ffffff) separate by a tone difference of a few percent, not by shadow or border. Nothing is layered over imagery in the measured render.

## Shapes

Radii measured: 8px (25 elements, the cards and tiles), 25.6px (the pill button), 15.36px (1) and 50% (1, the circular element). The primary button is a pill: 25.6px radius on a 40px-high element. The generated token set also carries `pill: 9999px`. The hero panel is a rounded rectangle with an 8px-scale corner in the capture.

## Components

- **button-primary**: "Learn more", background #1d1d1d, text #ffffff, Aeonik 12.8px/400, line-height 20px, padding 10.24px 17.92px, height 40px, width 100px, radius 25.6px. A mobile measurement of the same button: 15.6px text, radius 23.4px.
- **card**: background #f5f4f2, text #333333, radius 8px, no border or shadow; measured 346px wide and 403px high in the first card row.
- **header**: a logo mark at left, a centered descriptor, text links at the right. No fill was measured.
- **section label**: tiny 12.8px or 11.52px Aeonik text ("The studio", "Selected Work").

No input and no footer were detected.

## Design System Architecture

No public design system or brand guideline exists on the opened home page. The de-facto system is minimal: a six-variable root (`--gray`, `--blue`, `--black`, `--white`, plus Swiper's `--swiper-theme-color` and `--swiper-navigation-size`) and values that are multiples of 1.28px, consistent with viewport scaling. Source page: https://www.formandfun.co/. The site uses the Swiper carousel library for its tile rows.

## Do's and Don'ts

- Do keep the palette to white, warm grey #f5f4f2 and ink #1d1d1d.
- Do use Aeonik at two extremes: 11.52 to 12.8px labels and 43.52 to 89.6px display words.
- Do set secondary display text in pale grey #e5e5e5 so the dark words lead.
- Do make actions pill-shaped at 25.6px with #1d1d1d fill.
- Don't add shadows or borders to cards; none are measured.
- Don't use the Swiper default blue #007aff as a brand color.
- Don't fill the media tiles with decoration; the work imagery carries the color.

## Responsive Behavior

The mobile pass recorded the nav link "Studio" at 15.6px with line-height 18.72px, the "Learn more" button at 15.6px with 23.4px radius, and these size frequencies: 14.04px (855 characters), 13.26px (333), 54.6px (256), 23.4px (221), 27.3px (157), 15.6px (154), 6.24px (96), 31.2px (65), 18.72px (58). The desktop 89.6px display words measure 54.6px on mobile. Layout changes and breakpoints were not measured.

## Iteration Guide

1. Start with canvas #ffffff, ink #1d1d1d and tile fill #f5f4f2.
2. Set UI text in Aeonik 12.8px/15.36px and display words between 43.52px and 89.6px.
3. Use a single pill button at 25.6px radius with 10.24px 17.92px padding.
4. Round cards to 8px and leave them flat.
5. Let project imagery supply the color; keep the interface monochrome.
6. Measure any new page with the extractor before adding tokens.

## Content Notes

The microcopy measured and read on the page is short: "Creative Technology Studio", "The studio", "Selected Work", "(22-25)", "Learn more", "Coming soon", "Trusted by the world's leading brands" and "An award winning studio". Section names are nouns, buttons are two-word verbs, and the one long sentence on the page is the manifesto. Keep new copy in that register: sentence case, no exclamation marks, and numerals only for year ranges.
