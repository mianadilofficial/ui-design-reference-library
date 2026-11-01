---
version: alpha
name: Droga5
category: "Agencies & Studios"
description: "Droga5 (droga5.com, Part of Accenture Song): a white agency home page with a 100px DroteskNo5-Bold black headline at -3px tracking, 35px DroteskNo5-Regular statements, a black rectangular 'See what we do' button, short #0000d5 blue rules above section labels, square corners, and cool-grey #949799 secondary text."
colors:
  canvas: "#ffffff"
  page-largest: "#000000"
  ink: "#000000"
  primary: "#0000d5"
  ink-muted: "#949799"
  surface-light: "#f4f4f4"
  ink-faint: "#959595"
  hairline: "#f0f2f5"
  accent-pink: "#e4838f"
  accent-teal: "#86d1bb"
  accent-salmon: "#ffb78c"
  cool-grey: "#9ea7aa"
typography:
  display:
    fontFamily: DroteskNo5-Bold
    fontSize: 100px
    fontWeight: 700
    lineHeight: 110px
    letterSpacing: "-3px"
  display-mobile:
    fontFamily: DroteskNo5-Bold
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: "-1.32px"
  subheading:
    fontFamily: DroteskNo5-Regular
    fontSize: 35px
    fontWeight: 400
    lineHeight: 48px
  nav:
    fontFamily: sans-serif
    fontSize: 10px
    fontWeight: 400
    lineHeight: 10px
  link:
    fontFamily: DroteskNo5-Medium
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  selector:
    fontFamily: DroteskNo5-Medium
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
rounded:
  none: 0px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 14px
  s6: 20px
  s7: 23.03px
  s8: 24px
  s9: 30px
  s10: 33px
components:
  selector:
    textColor: "{colors.page-largest}"
    typography: "{typography.selector}"
    padding: 12px 18px 12px 24px
    height: 42px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.page-largest}"
    padding: 33px 0px 0px
  nav-link:
    textColor: "{colors.page-largest}"
    typography: "{typography.nav}"
---

## Overview

The Droga5 home page (https://droga5.com/, title "Home | Droga5") is an agency site whose header reads "Droga5 - Part of Accenture Song". It is built almost entirely from black type on white, one oversized headline, and full-bleed work imagery. The headline is "We build and sustain the most influential brands of the 21st century." in a 100px bold grotesk with -3px tracking, centred and filling three lines of the 1280px viewport.

The capture, top to bottom: a white header with the lowercase droga5 wordmark, the words "Part of Accenture Song", a "United States" selector with a chevron and a two-line menu icon; a short blue rule (#0000d5) above the headline; the headline; a wide black rectangle where a video embed should be, which shows an embed error ("We couldn't verify the security of your connection. Access to this content has been restricted.") rather than a brand element; a centred statement "Our goal is to create purposeful work that works for your audience and your business."; a black rectangular button "See what we do"; a small grey label "OUR DNA" with another blue rule; four value statements (Creatively Led, Strategically Driven, Systems Thinkers, Humanity Obsessed) each with a short paragraph; and a full-bleed film still labelled "WORK / Bosch 2025 Big Game" with white text over the photograph.

The voice is confident and declarative: sentence-case claims, short value names, and plain explanations ("We strive to create work that adds value to people's lives, not noise.").

## Colors

The palette is black, white and one blue. `canvas` #ffffff is the page; `ink` #000000 is the dominant text colour (993 characters) and also the largest background area (2063 area units, the black video panel and the black button), kept as `page-largest`. White text is the second most-read colour (514 characters) on dark surfaces. Secondary text is cool grey `ink-muted` #949799 (69 characters; the stylesheet's `--cool-grey-two`) with #959595 on 7 characters, and a light panel colour #f4f4f4 (1024 area units) appears as a background band.

`primary` #0000d5 is the only chromatic colour on the page: it fills the short horizontal rules above the headline and above "OUR DNA" (measured as a background area) and appears as a 4px focus ring (`0 0 0 4px #0000d5`, declared in the stylesheet). The generator's own primary guess was the grey #949799 because the page has no detected CTA fill; the blue rule was chosen instead because it is the one measured accent hue. Border colour is #f0f2f5 (one element).

The stylesheet declares additional pastel accent variables: `--pig-pink` #e4838f, `--pale-teal` #86d1bb, `--pale-salmon` #ffb78c, `--cool-grey` #9ea7aa and `--black-two` #000000. They are not seen in the captured area.

## Typography

The type system is a single grotesque family in three weights plus two small supporting faces. `DroteskNo5-Regular` carries most text (1394 characters): 35px with a 48px line-height for the centred statement and the value titles, and 16px for most descriptions (16px is the most frequent size at 969 characters). `DroteskNo5-Bold` (69 characters, weight 700) sets the headline at 100px, line-height 110px, letter-spacing -3px, with a 36px/40px, -1.32px version at 390px. `DroteskNo5-Medium` (66 characters) sets links and selectors: 16px/16px for "See what we do" and 14px/16.8px for the "United States" selector. `GTPressura` and `GTPressuraMono` (23 characters together) are loaded for small labels, and the 10px header label ("Droga5 - Part of Accenture Song") is set in the generic sans-serif.

Sizes by characters: 16px (969), 35px (298), 14px (201), 100px (69), 10px (31), 54px (15). Weights recorded: 400 and 700 only. Tracking is applied only to the headline.

The stylesheet also declares Hiragino, Gothic and NotoSansJP @font-face families (Regular, Medium, Bold), which are not part of the measured English home page. Drotesk and GT Pressura are commercial; if they cannot be licensed, keep the 100px/110px/-3px headline metrics and use a heavy neo-grotesque; the exact substitute is not measured.

## Layout

The page is 1280px wide with a scroll height of 5339px. The header block is 91px tall and 1216px wide with padding 33px 0px 0px on desktop. Content is centred in a single column: the headline spans 1176px (12px side padding), the statement sits in a 749px column, and the value list uses two columns, with right-aligned 35px titles on the left half and 16px descriptions on the right half. The black media panel is inset from the margins, while the work carousel image runs almost to the page edges.

Spacing from measurement: paddings 12px (10 uses), 20px (5), 23.03px (4), 14px (4), 30px (2), 33px, 24px, 8px; gaps 10px (4), 5px (2), 35px (2). The stylesheet defines `--carousel-count: 8` and `--carousel-item-width: 25%`, so the work carousel is declared as eight items at one quarter of the width each.

## Elevation & Depth

The page is flat. No box shadow was recorded on an element. The stylesheet corpus declares `0 0 2px 1px #0003` (a light halo) and inset shadows of 1000px spread (`0 0 0px 1000px #f4f4f4 inset`, `0 0 0px 1000px #000000 inset`) which are field background overrides, plus the blue focus ring. Separation relies on large black and white blocks, full-bleed photography, and whitespace.

## Shapes

All measured elements have square corners (border-radius 0px), including the black button and the video panel. Radii of 2px, 5px, 10px, 160px and 999px are declared in the shipped CSS corpus but none were matched to a captured element, so the shape language of the page is rectangular with short flat blue rules as the only decorative shape. The menu icon is two horizontal lines.

## Components

**Primary action.** "See what we do": a black rectangular block (square corners) with white DroteskNo5-Medium 16px text. The extractor reported it as a link with white text; its exact padding was not recorded.

**Country selector.** "United States" with a chevron: DroteskNo5-Medium 14px/16.8px, black text, padding 12px 18px 12px 24px, 42px tall, 151px wide, border `1px solid` with no colour recorded.

**Header.** The droga5 wordmark with "Part of Accenture Song" in 10px sans-serif; the "Accenture" word is bold in the capture. A two-line hamburger icon sits at the right.

**Section label.** A short blue (#0000d5) rule above a small grey label such as "OUR DNA" in #949799.

**Value rows.** A right-aligned 35px title paired with a left-aligned 16px paragraph.

**Work tile.** A full-bleed photograph with the label "WORK" in small white capitals and the project title in white at a larger size over the lower left.

**Embedded video panel.** A black panel; in the capture it shows a third-party error message, which is not part of the design system.

## Design System Architecture

No public Droga5 design system, brand guidelines or press kit was found: the home page (https://droga5.com/) renders its content with JavaScript, and the static HTML contains only a "Skip to main content" link and a stylesheet at `/dist/app.min.css`. The pages opened show no link to guidelines. The de-facto system is the small set of custom properties in that stylesheet: `--pig-pink`, `--pale-teal`, `--pale-salmon`, `--cool-grey`, `--cool-grey-two`, `--black-two`, `--carousel-count` and `--carousel-item-width`, plus font families named DroteskNo5-Regular, -Medium and -Bold. The site declares itself "Part of Accenture Song", but no Accenture Song design system was consulted.

## Do's and Don'ts

Do set the headline in the bold grotesk at 100px/110px with -3px tracking, centred, over white. Do keep corners square, buttons black with white text, and use the blue #0000d5 only for short rules and focus. Do give work imagery full-bleed room with white label text over it. Do keep secondary text in cool grey #949799.

Don't add shadows or rounded buttons. Don't treat the embed error panel as a design element. Don't use more than one chromatic accent on a screen. Don't track body text: only the headline is tracked. Don't promote the pastel accent variables (pink, teal, salmon) to large areas; they were not seen on the page.

## Responsive Behavior

At 390px the headline falls from 100px/110px to 36px/40px with -1.32px tracking and wraps to 366px wide (160px tall); the nav block is 56px tall with padding 8px 0px 0px against 91px desktop; the header text stays 10px. Mobile text sizes by characters: 14px (748), 16px (372), 24px (231), 28px (82), 10px (70), 36px (69), 12px (13). Column reflow, carousel behaviour and menu behaviour on mobile were not measured.

## Iteration Guide

Start from canvas #ffffff, ink #000000, primary #0000d5, ink-muted #949799. Compose a centred 100px bold headline, a 35px statement and one black rectangular button. Add a #0000d5 rule over each section label, then the four-value list in two columns, then a full-bleed work image. Check every corner is 0px and that no shadows are present. Re-measure before using any of the pastel accents.
