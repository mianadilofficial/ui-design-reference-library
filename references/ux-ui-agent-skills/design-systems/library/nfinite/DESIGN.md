---
version: alpha
name: Nfinite
category: "Tech & AI"
description: "Nfinite (Nfinite Nanotechnology Inc., nfinitepaper.com) markets ultra-high barrier recyclable paper with a near-black #0f131a hero, a cream #fffaf6 canvas, light-cyan #dff2f3 panels and buttons, sand #e9e2d2 cards, 'mainFont' type at weight 400 with negative tracking, and 3.56px corners."
colors:
  canvas: "#fffaf6"
  ink: "#0f131a"
  primary: "#dff2f3"
  on-primary: "#0f131a"
  surface-sand: "#e9e2d2"
  ink-muted: "#0f131a99"
  on-dark-soft: "#ffffffcc"
  on-dark-faint: "#ffffffbf"
  accent-water: "#8ab4fc"
  accent-tag: "#71cbe1"
  hairline: "#8484ce1f"
  link-bg: "#3842564d"
typography:
  display:
    fontFamily: mainFont, "mainFont Fallback", sans-serif, sans-serif
    fontSize: 53.3328px
    fontWeight: 400
    lineHeight: 63.9994px
    letterSpacing: "-1.59998px"
  display-mobile:
    fontFamily: mainFont, "mainFont Fallback", sans-serif, sans-serif
    fontSize: 26.0002px
    fontWeight: 400
    lineHeight: 27.3002px
    letterSpacing: "-0.780006px"
  heading:
    fontFamily: mainFont, "mainFont Fallback", sans-serif, sans-serif
    fontSize: 31.9997px
    fontWeight: 400
    lineHeight: 38.3996px
    letterSpacing: "-0.95999px"
  tag:
    fontFamily: mainFont, "mainFont Fallback", sans-serif, sans-serif
    fontSize: 9.77768px
    fontWeight: 400
    lineHeight: 9.77768px
  body:
    fontFamily: mainFont, "mainFont Fallback", sans-serif, sans-serif
    fontSize: 11.5554px
    fontWeight: 400
    lineHeight: 17.3332px
  nav:
    fontFamily: mainFont, "mainFont Fallback", sans-serif, sans-serif
    fontSize: 14.2221px
    fontWeight: 400
    lineHeight: 21.3331px
  link:
    fontFamily: mainFont, "mainFont Fallback", sans-serif, sans-serif
    fontSize: 31.1108px
    fontWeight: 400
    lineHeight: 31.1108px
    letterSpacing: "-0.933324px"
rounded:
  xs: 1.78px
  sm: 3.56px
  cta: 3.56px
spacing:
  s1: 3.56px
  s2: 5.33px
  s3: 6.22px
  s4: 7.11px
  s5: 10.67px
  s6: 14.22px
  s7: 17.78px
  s8: 21.33px
  s9: 23.11px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.cta}"
    padding: 0px 17.7776px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
  tag:
    backgroundColor: "{colors.accent-tag}"
    textColor: "{colors.ink}"
    typography: "{typography.tag}"
    rounded: "{rounded.sm}"
    padding: 5.33328px 7.11104px
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
  nav:
    textColor: "{colors.canvas}"
    padding: 17.7776px 21.3331px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-sand}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    padding: 17.7776px 10.6667px
---

## Overview

The measured URL is https://nfinitepaper.com/, reached from the queued address https://www.nfinitenano.com/ by a 301 redirect (the fetch tool reported "301 Moved Permanently" with the Location https://www.nfinitepaper.com/). The page title is "Nfinite Ultra-High Barrier Paper", language `en-nz`. The site belongs to Nfinite Nanotechnology Inc. of Waterloo, Ontario, which the opened page describes as a University of Waterloo spin-out. Its product is a 100% curbside-recyclable, sealable, printable ultra-high barrier paper meant to replace flexible plastic packaging.

The capture (13997px tall at 1280px) is a single long page. A full-bleed, dark industrial photograph of a paper roll opens it, with the "NFINITE" wordmark at top left, five nav links (Specifications, Technology, Impact, News, About) and a light-cyan "Contact us" button at top right. Over the photo sits a very large headline, "100% Curbside Recyclable, sealable, printable ultra high barrier paper, designed to replace flexible plastic packaging.", where the final clause is dimmed. A cream band follows with a horizontal strip of product packs (snack, bar, gel pouch, oat pouch) photographed on pale backgrounds, then a centered intro statement, then a light-cyan specifications panel built as an accordion (Barrier Performance, Fiber content, Printability, Flexibility, Sealability, Grammage, Recyclability), and a dark speckled band below. The tone is quiet, technical and product-led: generous space, soft rounded rectangles and tiny blue data tags such as "Moisture", "Oxygen" and "Grease".

## Colors

The page has named custom properties, and the extraction recorded them: `--color-cream #fffaf6`, `--color-dark-cream #e9e2d2`, `--color-light-blue #dff2f3`, `--color-dark-blue #71cbe1`, `--color-water-blue #8ab4fc`, `--color-black #0f131a` and `--color-grey #0f131a99`.

- **Canvas `#fffaf6`** (cream) is the body background.
- **Ink `#0f131a`** is a near-black navy used for text on light areas and also as the dark hero and band background (the largest measured background area, 6148 units).
- **Primary `#dff2f3`** (light blue) is the "Contact us" button fill, the specifications panel and the footer fill.
- **Surface sand `#e9e2d2`** is the card background on list-item cards.
- **Muted ink `#0f131a99`** (60% alpha black) is secondary text on light areas (1859 characters).
- **On-dark text** is `#ffffffcc` and `#ffffffbf` over the hero; the headline itself is `#fffaf6`.
- **Tag blue `#71cbe1`** fills the small data tags; **water blue `#8ab4fc`** colors a small number of characters and one border.
- **Hairline `#8484ce1f`** is a translucent border used on four elements; **`#3842564d`** is the translucent fill of the large pill-like links on the dark band.

## Typography

One family is used across the page: `mainFont`, a webfont loaded at weight 500 with a declared fallback `mainFont Fallback`, then `sans-serif`. The public name of the typeface was not found on the opened pages, so it is not named here. Text is weight 400 almost everywhere (5849 characters; 47 at weight 500).

Sizes are fractional because the layout scales with the viewport: the hero line is 53.3328px / 63.9994px with -1.59998px tracking; section headings 31.9997px / 38.3996px with -0.95999px; large link text 31.1108px with -0.933324px; navigation 14.2221px / 21.3331px; body 11.5554px / 17.3332px; tags 9.77768px. Larger display runs of 42.6662px, 74.6659px and 88.888px also occur with tracking of about -3% of the size. On the 390px pass the hero is 26.0002px / 27.3002px with -0.780006px tracking and body text is 13.5201px / 20.2802px. All tracking is negative at large sizes.

## Layout

The grid is generous and horizontal in the middle: the packaging strip runs edge to edge as a row of equal tall tiles with narrow gaps. Measured gaps: 21.3331px (28 uses), 14.2221px, 42.6662px, 10.6666px, 17.7776px, 6.22216px and 53.3328px. Paddings of 10.6667px, 35.5552px, 85.3325px and 42.6662px give wide section insets. The header has `17.7776px 21.3331px` padding and sits over the hero image.

The specifications panel is a full-width light-blue rounded block, with each accordion row separated by a hairline rule, an icon at left, the label, and a chevron at right.

## Elevation & Depth

No box shadows were measured (`boxShadows` is empty). Separation comes from color fields (cream, light blue, sand, near-black), hairline borders (`#8484ce1f`, `#ffffff33`, `#0f131a`) and photography. The product shots carry their own photographic shadows.

## Shapes

Two radii were measured: 3.55552px (32 elements, buttons, tags, cards, links) and 1.77776px (one). The design tokens round them to 3.56px and 1.78px. The look is small-radius rounded rectangles, not pills; the large panel and photo tiles share the same small corner.

## Components

- **button-primary**: `#dff2f3` fill, `#0f131a` text, body-size type (11.5554px), 40px tall, `0 17.7776px` padding, 3.56px radius. On hover it computed to a `#0f131a` fill, `#fffaf6` text and a `#fffaf6` border.
- **tag**: `#71cbe1` fill, `#0f131a` text at 9.77768px, padding `5.33328px 7.11104px`, 3.56px radius ("Moisture", "Oxygen", "Grease").
- **link**: the large 31.1108px links on the dark band have a `#3842564d` fill and `#fffaf6` text.
- **nav-link**: `#fffaf6` at 14.2221px over the hero.
- **card**: `#e9e2d2` list-item cards with `#0f131a` text and a 3.56px radius.
- **footer**: `#dff2f3` fill with `#0f131a` text, padding `17.7776px 10.6667px`.

## Content and Voice

Copy comes from the opened page and the capture. The voice is that of a materials-science supplier: short noun-led claims ("100% Curbside Recyclable, sealable, printable"), numeric specifications beside the tags (the capture shows a moisture figure, an oxygen figure and a grease-resistance statement), and an accordion that hides detail until requested. The page says the product is sold as 1-meter-wide rolls and quotes partners such as Amcor, PepsiCo and Unilever, and it carries news items as PDFs and press articles. Imagery is either macro industrial photography (the paper roll) or clean product photography on pale surfaces, so the pack designs supply the only saturated colors (orange, lime, red) on the page; the interface itself stays cream, cyan and near-black.

## Design System Architecture

No public design system or brand guideline exists for Nfinite: https://www.nfinitepaper.com/ was opened and links only to its own sections, a privacy policy, a Numbered agency credit ("Made by Numbered", numbered.com) and press items, with no brand or design-token page. The de-facto system is a Tailwind-style set of custom properties measured in `rootVars` (`--color-cream`, `--color-light-blue`, `--font-weight-light` 300, `--font-weight-normal` 400, `--font-weight-medium` 500, `--radius-lg` .5rem, `--tracking-tight` -.025em), plus a `--vh` viewport unit, which explains the fractional pixel sizes. Colors are named by hue and are the source for the palette above.

## Do's and Don'ts

- Do start from a cream `#fffaf6` canvas and near-black `#0f131a` text.
- Do use light blue `#dff2f3` for the one primary button and for the specifications panel.
- Do set large type at weight 400 with negative tracking.
- Do keep corners at about 3.56px.
- Don't use bold headings; the page's headings are weight 400.
- Don't add drop shadows; none were measured.
- Don't introduce a warm accent; the only accents measured are `#71cbe1` and `#8ab4fc`.
- Don't use pill-shaped buttons; measured corners are small.

## Responsive Behavior

Only the 390px mobile pass was measured. It recorded the hero text at 26.0002px / 27.3002px with -0.780006px tracking, the h2 at 26.0002px, and body text at 13.5201px / 20.2802px. How the nav, the packaging strip and the accordion reflow at narrow widths was not measured, and no breakpoint values were captured.

## Iteration Guide

1. Use `#fffaf6` for the canvas and `#0f131a` for text and for dark bands.
2. Set the hero headline at weight 400, with tracking about -3% of its size (-1.59998px at 53.3328px).
3. Build one light-cyan primary button with the 3.56px radius that inverts to near-black on hover.
4. Present specifications as a light-blue accordion with hairline rules and small `#71cbe1` tags.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=nfinite --url=https://www.nfinitepaper.com/ --force --no-motion`, then gate with `node web/scripts/verify-designs.mjs --slug=nfinite`.
