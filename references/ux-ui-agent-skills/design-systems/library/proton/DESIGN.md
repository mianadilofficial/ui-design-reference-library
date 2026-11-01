---
version: alpha
name: Proton
category: "Tech & AI"
description: "Proton's privacy-suite site: ProtonSerif (ABC Arizona Flare) headlines at 60px/63.6px with -2.4px tracking in deep violet #372580, ProtonSans (Inter) body at 16px/26px in #4b5563, Proton purple #6d4aff pill buttons 50px tall that hover to #4a2dc5, on white with #f6f7f9 panels, 24px-radius cards and a lavender #e2dbff tint."
colors:
  canvas: "#ffffff"
  page-largest: "#f6f7f9"
  ink: "#4b5563"
  primary: "#6d4aff"
  on-primary: "#ffffff"
  primary-hover: "#4a2dc5"
  primary-tint: "#e2dbff"
  nav-hover-bg: "#6d4aff1a"
  ink-heading: "#372580"
  ink-faint: "#9ca3afe6"
  hairline: "#9ca3af4d"
typography:
  display:
    fontFamily: ProtonSerif, ProtonSerifFallback, ProtonScript, ui-serif, Georgia, Cambria, "Times New Roman", Times, serif
    fontSize: 60px
    fontWeight: 400
    lineHeight: 63.6px
    letterSpacing: "-2.4px"
  display-mobile:
    fontFamily: ProtonSerif, ProtonSerifFallback, ProtonScript, ui-serif, Georgia, Cambria, "Times New Roman", Times, serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 39.96px
    letterSpacing: "-1.44px"
  heading:
    fontFamily: ProtonSerif, ProtonSerifFallback, ProtonScript, ui-serif, Georgia, Cambria, "Times New Roman", Times, serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 41.76px
    letterSpacing: "-1.44px"
  title-sans:
    fontFamily: ProtonSans, ProtonSansFallback, ProtonScript, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 26px
  body:
    fontFamily: ProtonSans, ProtonSansFallback, ProtonScript, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  button-small:
    fontFamily: ProtonSans, ProtonSansFallback, ProtonScript, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21.98px
  nav:
    fontFamily: ProtonSans, ProtonSansFallback, ProtonScript, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21.98px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.title-sans}"
    rounded: "{rounded.pill}"
    padding: 12px 20px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.pill}"
    padding: 4px 12px
    height: 30px
  button-outline:
    textColor: "{colors.primary}"
    typography: "{typography.title-sans}"
    rounded: "{rounded.pill}"
    padding: 12px 20px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgb(109, 74, 255) 0px 0px 0px 2px inset
  nav:
    textColor: "{colors.ink-heading}"
    padding: 0px 64px
  nav-link:
    textColor: "{colors.ink-heading}"
    typography: "{typography.nav}"
    padding: 0px 20px 0px 0px
  nav-link-hover:
    backgroundColor: "{colors.nav-hover-bg}"
    textColor: "{colors.primary}"
  card:
    textColor: "{colors.ink-heading}"
    rounded: "{rounded.xs}"
    padding: 0px 0px 72px
    boxShadow: rgb(255, 255, 255) 0px 0px 0px 0px inset, rgba(0, 0, 0, 0) 0px 0px 0px 2px inset, rgba(0, 0, 0, 0) 0px 0px 0px 0px
  footer:
    textColor: "{colors.primary}"
    padding: 48px 64px
---

# Proton

## Overview

proton.me ("Proton: Privacy by default") is a long, white, airy product-suite page — 10,223px tall at desktop — that
introduces every Proton app. A slim 48px header holds the Proton wordmark, Personal, Business, Download, Discover
Proton, Resources and Pricing, then Sign in and a small purple "Create a free account" pill.

The hero is centred: "A better internet starts with privacy and freedom" in a soft serif at 60px in deep violet, a one-line
subhead ("Take control of your data with end-to-end encryption"), a purple "Create a free account" pill and an outlined
"Compare plans" pill, and a row of product icons with a rating
strip ("Trusted by over 100 million users and businesses", app-store stars, press badges).

Then a series of alternating product sections, each a serif section heading ("Communicate and browse. Privately.",
"Store, share, collaborate. Securely.", "Defend your digital life from hackers. Effortlessly.", "Host and join
confidential meetings", "Powerful AI that respects your privacy", "Protect your business with easy-to-use encrypted
solutions") beside product screenshots on soft lavender-to-white gradient panels, with a "Get it for free" pill and an
"Explore …" link per product. A manifesto band ("With Proton, your data belongs to you, not tech companies,
governments, or hackers."), an origin story ("Fundamentally different", CERN), a "Privacy for a better world" block,
a large "Over 100 million people and businesses have signed up for Proton" pane with a six-reason grid, press quotes
(PC Mag, Forbes, CNET) and a dense link footer close the page. The voice is principled and plain: privacy as a right,
stated in short sentences.

## Colors

- **Proton purple** — `primary` #6d4aff fills every primary pill; the third most-read text color (links, "Explore"
  links, footer links). Hover: `primary-hover` #4a2dc5.
- **Deep violet ink** — `ink-heading` #372580 for headlines, product names and the navigation.
- **Body ink** — `ink` #4b5563, the most-read text color.
- **Canvas** — `canvas` #ffffff body; `page-largest` #f6f7f9 is the largest painted panel color (product panels).
- **Tints** — `primary-tint` #e2dbff (lavender fills); nav items hover to `nav-hover-bg` #6d4aff1a (purple at 10%) with
  purple text.
- **Greys** — `hairline` #9ca3af4d borders; `ink-faint` #9ca3afe6 for small captions; carousel arrows use #9ca3af at
  10% → 30% on hover.

The palette is one purple family on white and cool greys. Product panels also show soft gradients and illustrated
product colors in the capture; those are image content, not tokens.

## Typography

Two families with Proton-specific names, self-hosted:

- **ProtonSerif** — served from `/fonts/arizona/ABCArizonaFlareVariable.en.woff2` (ABC Arizona Flare, variable
  200–700). Display **60px / 63.6px, 400, -2.4px** (-0.04em); section headings **36px / 41.76px, 400, -1.44px**;
  headings on the page also measure 48px and 30px.
- **ProtonSans** — served from `/fonts/inter/InterVariable.en.woff2` (Inter, variable 100–900). Body **16px / 26px,
  400** (by far the most frequent size, 5,428 characters); product titles and buttons **16px / 26px, 600**; nav
  **14px / 21.98px, 400**; small buttons **14px / 21.98px, 600**. 18px and 20px also appear for lead text.
- **ProtonScript** is also listed in both stacks, after the fallback faces.

ProtonSans carries 6,670 measured characters and ProtonSerif 749. Weights: 400 (6,250), 600 (1,113), 700 (56). Fallback
stacks are declared in CSS: `ui-serif, Georgia, Cambria, "Times New Roman"` for the serif and `ui-sans-serif,
system-ui` for the sans.

## Layout

At 1280px the extractor records only three bands: a white hero 0/129 (header and headline top), a media/gradient band
129/1365 (two columns: product text and screenshot), and a long white band 1494/8729 (up to three columns). Within
it, product sections alternate text-left / image-right and the reverse; reason grids run three columns; the footer runs
six link columns. The header has 64px side padding and shows 4 links; the footer uses 48px 64px padding. Spacing steps:
4, 6, 8, 10, 12, 16, 20, 24, 32, 48px. Up to 4 card columns were counted.

## Elevation & Depth

No drop shadows were measured. Depth is built from inset rings and tinted panels: outlined pills use
`rgb(109, 74, 255) 0px 0px 0px 2px inset`; cards carry 1–2px inset rings whose measured color at rest is transparent. Product screenshots sit on gradient panels and phone mockups overlap panel
edges, giving the only sense of layering.

## Shapes

Pills dominate: **9999px** is the most frequent radius (48 elements) — every button and chip. **6px** is next (29),
then **24px** (20, the large product panels and cards), a percentage radius of 27.78% (11), **4px** and **8px**. Combined: soft, rounded, friendly geometry.

## Components

- **Primary pill** — #6d4aff, white ProtonSans 16px/600, 12px 20px padding, 50px tall; hover #4a2dc5. Used for "Create a
  free account", "Get it for free", "Get Proton VPN", "Join Proton".
- **Small pill** — header "Create a free account": 14px/600, 4px 12px padding, 30px tall.
- **Outline pill** — "Compare plans": transparent with a 2px inset #6d4aff ring and purple text, same 50px geometry.
- **Medium pill** — "Get Proton for Business": 6px 20px padding, 38px tall.
- **Nav item** — #372580 text; hover fills #6d4aff1a with #6d4aff text.
- **Product block** — app icon, 16px/600 product name in #372580, a short paragraph with inline purple links, a pill
  and an "Explore …" link.
- **Carousel** — screenshot slider with grey round prev/next buttons (#9ca3af at 10%, 30% on hover) and dot indicators.
- **Footer** — purple #6d4aff links in columns (Products, Proton Business, Privacy, Company, Connect), language
  selector, legal row.

## Design System Architecture

No public web design system for the marketing site was found. Proton's media kit (https://proton.me/media/kit) offers
logo and image packs for Proton and each product on Proton Drive and asks that use "refers back to proton.me"; it
lists no colors or typefaces. https://proton.me/press returned 404.

In the shipped CSS the typefaces are aliased to brand names — `ProtonSerif` (ABC Arizona Flare) and `ProtonSans`
(Inter) — with explicit `…Fallback` faces and a `ProtonScript` coverage font. `:root`
exposes only PDF-viewer variables (`--react-pdf-*`, `--highlight-*`, `--input-*`); colors are compiled into
utility classes.

## Do's and Don'ts

**Do**
- Set headlines in the serif (ProtonSerif) at weight 400 with -0.04em tracking, in #372580.
- Keep body in ProtonSans 16px/26px #4b5563.
- Use #6d4aff pills for actions and a 2px inset purple ring for secondary actions.
- Present each product with its icon, a screenshot on a soft panel, a pill and an Explore link.
- Keep the page white and airy; let large 24px-radius panels carry the product imagery.

**Don't**
- Don't use bold serif headlines; the measured serif weight is 400.
- Don't add heavy shadows; outlines are inset rings.
- Don't use square buttons — every measured button is a pill.
- Don't introduce competing accent colors outside the purple family.

## Responsive Behavior

Measured at 390px:

- Display **36px / 39.96px, -1.44px** (desktop 60px). Section heading **24px / 27.84px, -0.96px** (desktop 36px).
  Body stays **16px / 26px**.
- The primary pill becomes full content width (358px) at 50px tall.
- Header: 48px tall, 16px side padding, 1 visible link and a menu toggle labelled "Open menu".
- Bands: white 0/1671, media 1671/558, white 2229/12025, all 1 column with 16px insets.
- Measured sizes on mobile include 30px, 24px and 18px headings.

Menu contents were not measured.

## Iteration Guide

1. White canvas; centre a 60px/63.6px ProtonSerif headline in #372580 with -2.4px tracking.
2. Add a short subhead, a #6d4aff primary pill (50px, 12px 20px padding) and an outlined pill with a 2px inset ring.
3. Follow with a row of product icons.
4. Build product sections: serif 36px heading, product name 16px/600, paragraph, pill + Explore link, screenshot on a
   24px-radius soft panel.
5. Use #6d4aff1a hover fills on nav items and #4a2dc5 on primary hover.
6. On mobile: 36px display, 24px headings, full-width pills.
