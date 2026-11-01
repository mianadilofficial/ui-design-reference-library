---
version: alpha
name: "Somefolk®"
category: "Fashion & Apparel"
description: "Somefolk® (SF.CO) is a London design-and-Webflow portfolio: Helvetica Now Display and Swizzy Mono in uppercase on a cinematic black-navy 3D hero, a huge \"SF'26\" wordmark, a cream (#f6f6eb) closing section with charcoal (#343434) text, 1.42px corners and tiny 9.96px mono labels."
colors:
  canvas: "#f6f6eb"
  ink: "#343434"
  primary: "#f6f6eb"
  surface-3: "#1f1f1f"
  ink-3: "#575757"
  ink-4: "#ffffff"
  link-bg: "#00000080"
  footer-bg: "#0000002e"
typography:
  display:
    fontFamily: "\"Helvetica Now Display\", sans-serif"
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 12.8px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Helvetica Now Display\", sans-serif"
    fontSize: 27.3px
    fontWeight: 500
    lineHeight: 21.45px
    textTransform: uppercase
  heading:
    fontFamily: "\"Helvetica Now Display\", sans-serif"
    fontSize: 28.4444px
    fontWeight: 500
    lineHeight: 22.7556px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Swizzy Mono\", sans-serif"
    fontSize: 9.95556px
    fontWeight: 400
    lineHeight: 8.76089px
    letterSpacing: "-0.199111px"
    textTransform: uppercase
  body:
    fontFamily: "\"Helvetica Now Display\", sans-serif"
    fontSize: 11.3778px
    fontWeight: 400
    lineHeight: 14.7911px
rounded:
  xs: 1.42px
spacing:
  s1: 2.13px
  s2: 2.84px
  s3: 3.13px
  s4: 4.27px
  s5: 5.69px
  s6: 6.4px
  s7: 7.11px
  s8: 11.38px
  s9: 14.22px
  s10: 16px
components:
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
  nav:
    textColor: "{colors.canvas}"
    padding: 17.0667px 0px 0px 17.0667px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
---

# Somefolk®

## Overview

Somefolk® (somefolk.co, titled "Somefolk® Digital Goods | SF.CO | Made in London") is a designer-developer portfolio. The 1280px page scrolls 9180px. It opens in a dark, cinematic space: a deep navy and black 3D render of angular, glinting shapes fills the first screen, and over it sit a micro navigation row (SF.CO° logo, "SELECTED WORK [10]", "INFO, SKILLS, CONTACT", "BIZ@SOMEFOLK.CO"), a three-line mono blurb ("BRAND IDENTITY + WEBSITE DESIGN / ENTERTAINMENT + LIFESTYLE SPECIALIST / CUSTOM MADE IN LONDON, ENGLAND"), a small "RECENT WORK" thumbnail for OSMO, and an enormous cream wordmark "SF'26" that spans the entire viewport width. Below that the "STORIES BY SOMEFOLK®" label with the handle "@BYSOMEFOLK", four serif-labeled links (IG), (LI), (AW), (FW), and a base line "QUALITY DIGITAL GOODS FOR SALE", "COPYRIGHT 2026", "ENTERTAINMENT + LIFESTYLE SPECIALISTS".

After the intro, a two-column work grid pairs the dark 3D imagery with project mockups (the capture shows an orange-toned OSMO laptop scene), each project link carrying a mono caption such as "TITANGATE EQUITY / A NEW CLASS OF OWNERSHIP" or "OSMO / DEV TOOLKIT, BUILT TO FLEX". Then the page turns to a cream (#f6f6eb) section where the statement "SOMEFOLK® IS THE PORTFOLIO OF JASON HARVEY, A DESIGN DIRECTOR AND WEBFLOW DEVELOPER, WORKING COLLABORATIVELY WITH SPECIALISTS" is set in very large uppercase condensed-looking Helvetica.

The personality is a studio-as-gallery: a few colors, extreme scale contrast between 7.8px mono micro-labels and 140px wordmarks, uppercase everywhere, and imagery that carries all the drama.

## Colors

- **Canvas `#f6f6eb`**: a warm cream, the light section background (1029 weight) and the color of the hero wordmark and all light-on-dark text.
- **Ink `#343434`**: charcoal text on cream (1308 characters, the most-read) and a background area (1969 weight).
- **Primary `#f6f6eb`**: the site has no filled call-to-action button (the extractor found none), so the accent action color is the cream used for links and labels on the dark hero.
- **Surface-3 `#1f1f1f`**: a dark grey area (21 weight).
- **Ink-3 `#575757`** and **ink-4 `#ffffff`**: small grey and white text runs (8 and 6 characters).
- **Link-bg `#00000080`** and **footer-bg `#0000002e`**: translucent black overlays used behind project links and the footer; **`#000000a6`** (1969) and **`#00000014`** (1887) are further translucent black layers measured over imagery.

The generated tokens also held `#0000ee`, which is the browser's default unvisited-link color on an unstyled anchor (Arial 14.2222px), not a brand value; it and its nav typography are dropped. The page declares no CSS custom properties.

## Typography

Three families are loaded: **Helvetica Now Display** (weights 400, 500, 800; 1747 characters), **Swizzy Mono** (weight 400; 488 characters) and **PP Editorial New** (weight 200; 106 characters).

| Role | Family | Size / line-height | Weight | Notes |
|---|---|---|---|---|
| display (nav and section label) | Helvetica Now Display | 12.8px / 12.8px | 400 | uppercase |
| heading ("STORIES BY SOMEFOLK®") | Helvetica Now Display | 28.4444px / 22.7556px | 500 | uppercase, tight leading |
| subheading (captions and footer) | Swizzy Mono | 9.95556px / 8.76089px | 400 | uppercase, -0.199111px tracking |
| body (portfolio blurb) | Helvetica Now Display | 11.3778px / 14.7911px | 400 | |
| display-mobile | Helvetica Now Display | 27.3px / 21.45px | 500 | uppercase |

The size ladder by characters is 11.3778px (1291), 9.95556px (401), 45.44px (135), 12.8px (90), 7.82222px (87), 28.4444px (66), 89.6px (55) and 24.1778px (53). Display sizes 140.8px (-6.4px tracking, 38 characters), 89.6px and 45.44px (-1.28px tracking each) are also measured, which includes the SF'26 wordmark; the family and weight for those individual runs were not recorded separately. Weights seen are 400 (1651 characters), 500 (464), 800 (120) and 200 (106). The decimal pixel sizes (11.3778px, 28.4444px, 9.95556px) are what the browser computed.

## Layout

The page is edge-to-edge with a 17.0667px margin for the nav row (padding 17.0667px 0px 0px 17.0667px, 37px tall). Content positions are set against a column grid: the hero blurb sits near the left third, the nav items distribute along four columns, and the work grid splits 50/50 (two 640px columns). The cream statement block starts at the right of a left gutter. Gaps measured: 35.5556px (16), 5.68889px (14), 17.0667px (12), 4.26667px (12), 42.6667px (10), 14.2222px (10), 7.11111px (8). Padding includes large block spacings (142.222px, 213.333px, 284.444px) and tiny label paddings (2.13333px, 3.12889px). The footer element is 1507px tall.

## Elevation & Depth

No box shadows were measured. Depth is produced by the render art (glints, gradients, blur) and by translucent black overlays (`#00000080`, `#000000a6`, `#0000002e`, `#00000014`) stacked over images. Nothing floats; the cream section meets the dark hero with a hard edge.

## Shapes

The only radius measured is 1.42222px, found on 7 elements, which is a nearly square corner; every other element computes to 0px. The recent-work thumbnail and the laptop mockup frames in the work grid are plain rectangles, the project tiles are squares of 753px, and the huge wordmark and labels are text with no containing shape. The generated rounded scale therefore has a single step, xs at 1.42px, and the site has no pills, circles or large radii on rendered elements.

## Components

- **nav**: transparent row over the hero, 12.8px uppercase Helvetica Now Display in `#f6f6eb`, with bracketed counts like "[10]" in mono.
- **project link**: full-bleed link tile (753px square in the measurement) with a `#00000080` backing, white-cream Swizzy Mono 9.95556px caption in two lines (client, then descriptor). The hover pass measured a scramble effect in which the caption's characters briefly change (for example "A NEWRSN44KR4HRK?6N4XE") before resolving.
- **footer**: translucent `#0000002e` background, mono uppercase 9.95556px items.
- **social labels**: parenthesized pairs (IG), (LI), (AW), (FW) in a light serif.
- No button, input or card with a fill was measured.

## Content and Voice

Copy is terse and trade-oriented. Labels name services rather than benefits: "BRAND IDENTITY + WEBSITE DESIGN", "ENTERTAINMENT + LIFESTYLE SPECIALIST", "QUALITY DIGITAL GOODS FOR SALE". Place is stated plainly ("CUSTOM MADE IN LONDON, ENGLAND"), the contact is a bare email address, and the year is built into the wordmark ("SF'26") and the footer line ("COPYRIGHT 2026"). Project captions pair a client name with a one-line descriptor, for example the OSMO tile and the TITANGATE EQUITY tile. Counts appear in square brackets, as in "SELECTED WORK [10]", and social links use parenthesized initials. Nothing is exclamatory; the only exclamation-like element is the oversized type itself.

## Design System Architecture

No public design system, brand guideline or token package was found. The home page links to /about but exposes no style guide, and the page defines no CSS custom properties (rootVars is empty), so the de-facto system is literal values in compiled CSS: three web fonts, a cream and charcoal pair and translucent black overlays. Reference: https://somefolk.co/

## Do's and Don'ts

- Do set everything in uppercase; mix Helvetica Now Display for statements with Swizzy Mono for captions at 9.95556px.
- Do use extreme scale contrast between tiny labels and huge wordmarks.
- Do keep corners at 1.42px or square.
- Do layer translucent black over imagery instead of using solid fills.
- Don't use the browser-default link color `#0000ee`.
- Don't add colored buttons; the measured page has none.

## Responsive Behavior

The 390px mobile pass measured: the heading drops from 28.4444px to 27.3px with 21.45px leading (weight 500, uppercase); body grows from 11.3778px to 14px with 17px line-height (343px wide); the mobile size ladder is 14px (1205 characters), 12px (366), 13px (154), 39px (143), 9px (87), 27.3px (65), 54.6px (56), 26px, 31.2px and 29.25px. Navigation and grid behavior on mobile were not measured.

## Iteration Guide

1. Start with a dark image-led hero and the cream `#f6f6eb` for type; switch to cream backgrounds with `#343434` for reading sections.
2. Use uppercase Helvetica Now Display for statements and Swizzy Mono for captions.
3. Make the wordmark span the viewport.
4. Keep corners at or under 1.42px.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=somefolk-r --url=https://somefolk.co/ --force --no-motion` after site changes.
