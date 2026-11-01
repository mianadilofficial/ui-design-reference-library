---
version: alpha
name: Warm & Fuzzy
category: "Portfolio"
description: "Warm & Fuzzy, a self-described feel-good creative company, runs a black #000000 site of white SuisseIntl type with tight negative tracking, 132px uppercase section titles, a showreel hero, #190bb6 cobalt, #f7dd47 yellow and #e74a27 orange blocks, and circular 50% thumbnails."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  surface-cobalt: "#190bb6"
  surface-yellow: "#f7dd47"
  accent-orange: "#e74a27"
  surface-glass: "#ffffff0d"
  hairline: "#ffffff1a"
typography:
  display:
    fontFamily: SuisseIntl
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.52px
    letterSpacing: "-0.432px"
  subheading:
    fontFamily: SuisseIntl
    fontSize: 132px
    fontWeight: 400
    lineHeight: 120.12px
    letterSpacing: "-3.564px"
    textTransform: uppercase
  body:
    fontFamily: SuisseIntl
    fontSize: 46px
    fontWeight: 400
    lineHeight: 47.84px
    letterSpacing: "-1.242px"
rounded:
  pill: 9999px
spacing:
  gutter-s: 12px
  gutter-m: 16px
  gutter-l: 20px
  gutter-xl: 90px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    padding: 0px 16px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    padding: 0px 16px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.pill}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-yellow}"
    textColor: "{colors.ink}"
---

## Overview

The measured page is https://www.warmnfuzzy.tv/, titled "Warm & Fuzzy | Home". The site's meta description is "A FEEL GOOD CREATIVE COMPANY", which is also the line set in large white capitals at the foot of the first screen in the capture. The page behaves as a scrolling inner container: the document measured 2,400px tall while an inner scroller measured 7,589px, so most content is revealed inside a fixed viewport.

The first screen is dominated by a looping hero video on a near-black ground: a 3D rendered sneaker-like object with yellow-green bounding-box overlays and a "PLAY SHOWREEL" label across the middle. A thin 64px header runs across the top with the stencil-style "WARM & FUZZY" wordmark at left, a tagline ("Warm & Fuzzy is a creative company: learn more", with "learn more" underlined), a "Latest work: Dunkin Pumpkin Spice" teaser with a small thumbnail, and three right-aligned links: WORK, INFO and CONTACT. Cells in the header are divided by faint vertical lines. A pause control sits in the bottom-right corner.

Further down, the extraction recorded a statement ("FOUNDED BY ARTISTS WITH A HEALTHY RESISTANCE TO BORING."), a body paragraph set at 46px ("Warm & Fuzzy is a creative company built on a shared ..."), a "WORK" section title at 132px, a closing footer reading "YOU'VE REACHED THE BOTTOM OF THE WEBSITE." on a yellow ground, and circular link thumbnails. The voice is playful, irreverent and brief; everything is capitals or sentence-fragment statements.

## Colors

The most-used text color is white `#ffffff` (1,445 characters) with black `#000000` (106 characters) used on light blocks. Backgrounds measured by area are cobalt blue `#190bb6` (5,368 units; also the computed body background), translucent white `#ffffff0d` (4,540, a 5% white veil used on panels), yellow `#f7dd47` (3,235, the footer), black `#000000` (2,923) and orange `#e74a27` (1,426). Hairlines are `#ffffff1a` (nine uses) and `#0000001a` (one use); the root variable `--color-border` is `rgba(255, 255, 255, 0.1)`.

The first-screen capture reads as black because the video covers the page, so `canvas` is `#000000` and the cobalt, yellow and orange are section grounds. No button fill was measured; the page's actions are text links and the primary color is white, the link color. The orange `#e74a27` was measured as a background but which section carries it is not recorded in the capture, so it is documented only as an accent fill.

## Typography

A single family carries the whole site: SuisseIntl, weight 400 only (all 1,551 measured characters are weight 400). Four sizes are measured, each with tracking that is a fixed ratio of size: 16px with −0.432px, 46px with −1.242px, 96px with −2.592px and 132px with −3.564px, which is −0.027em at each size. Measured roles: header text and tagline are 16px on 19.52px; the "WORK" section title is 132px on 120.12px, uppercase; the body statement is 46px on 47.84px; the h2 statement is 16px uppercase on a 16px line height. In the mobile pass the sizes are 12.096px, 14.112px, 24.192px, 32.256px and 64.512px.

Font substitutes: SuisseIntl is a licensed face; use a neo-grotesque (such as Inter Display or Helvetica Now) at weight 400 with the same −0.027em tracking. The stencil wordmark is artwork and has no font equivalent.

## Layout

Layout is edge to edge with a 16px outer and inner gutter (`--gutter-outer: 16px`, `--gutter-inner: 16px`). Measured gaps are 16px (13 uses), 12px, 90px and 20px; every measured padding is 16px (42 uses), which matches the 16px side padding on header links. The header is 64px tall (63px link cells). The footer region measured 2,528px tall, a full-height colored block with a 132px headline. Text blocks are left aligned and sit hard against the gutter; large titles span nearly the full width.

## Elevation & Depth

No box shadows were measured. Depth comes from full-bleed video and from flat color blocks (black, cobalt, yellow, orange) and a 5% white veil. Focus outlines are declared as variables (`--outline-offset: 2px`, `--outline-offset-inset: -3px`, `--outline-offset-default: 2px`).

## Shapes

The only radius measured is 50%, on three circular link thumbnails (300px tall, 1px `#ffffff1a` border). Everything else computes to 0px, so the page is rectilinear with circles as the single exception. Token: `pill` 9999px to represent the fully round shape. Square buttons are sized by variables (`--button-square-size-medium` and `--button-square-size-large`, fluid with the viewport from 24px and 32px).

## Components

**Header:** 64px strip with divided cells: wordmark, tagline with underlined "learn more", latest-work teaser and WORK / INFO / CONTACT links in 16px capitals, each with 16px side padding. On hover, the underlined "learn more" link loses its underline (measured: underline before, none after).

**Circular thumbnail link:** a 50% radius element 300px tall with a 1px `#ffffff1a` border, used for project entries.

**Showreel hero:** a looping video with a centered "PLAY SHOWREEL" label and a pause control at the bottom right.

**Footer:** a yellow `#f7dd47` ground with a 132px closing line.

No form inputs and no filled buttons were measured.

## Design System Architecture

No public design system or brand guideline is linked: the home page HTML contains no such link, and its only page-level metadata is the title and the meta description. The site is a Next.js build (`data-next-head` attributes on the meta element). The shipped variables are few: `--suisse-intl`, `--gutter-outer`, `--gutter-inner`, `--color-border`, outline offsets and square-button sizes with `max()` formulas that scale with viewport width relative to 1280px. Tokens in this file come from live measurement of https://www.warmnfuzzy.tv/.

## Do's and Don'ts

- Do set everything in one grotesque at weight 400, scaling size and tracking together.
- Do use uppercase for statements and section titles.
- Do let video lead the first screen and flat color blocks lead the rest.
- Do keep a 16px gutter and 16px padding on navigation cells.
- Don't add shadows or rounded corners; the only radius is a circle.
- Don't introduce filled button styles; none were measured.
- Don't document the pause control as a brand component.

## Responsive Behavior

The mobile pass measured: h2 12.096px, body statement 24.192px on 27.8208px with −0.653184px tracking, and a header of 56px (versus 64px on desktop). Other mobile sizes recorded were 14.112px, 32.256px and 64.512px. Which layout changes accompany these sizes is not measured, and no media queries are declared in the home page HTML.

## Iteration Guide

1. Begin with black and white; bring in cobalt, yellow and orange only as full sections.
2. Use one typeface at weight 400 and tighten the tracking to −0.027em of the size.
3. Write short, playful statements in capitals.
4. Round only circular thumbnails; keep all else square.
5. Re-capture after the inner scroller is traversed to record the cobalt, yellow and orange sections in place.
6. Keep captions and teasers to a single line each; the measured header holds the tagline and the latest-work teaser at 16px without wrapping.
7. Use the 5% white veil `#ffffff0d` for panels on black rather than a gray, so the video or color beneath still shows through.
8. When showing project work, prefer circular crops at 300px height with a faint 1px border, as the measured thumbnails do.
9. Document any new section color with its measured area before adding a token, since the first screen alone does not show the cobalt, yellow and orange sections.
