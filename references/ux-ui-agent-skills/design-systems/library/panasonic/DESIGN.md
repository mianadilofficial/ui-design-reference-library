---
version: alpha
name: Panasonic North America
category: "Consumer Electronics"
description: "Panasonic North America (na.panasonic.com) sets proxima-nova 700 headlines on Panasonic blue #1953b4 and white, with navy #0f315f and #f0f0f0 feature panels, white or black 12px-radius buttons (48px tall, 12px 24px padding), 16px-radius imagery and circular industry thumbnails."
colors:
  canvas: "#ffffff"
  page-largest: "#1953b4"
  ink: "#000000"
  primary: "#1953b4"
  on-primary: "#ffffff"
  navy: "#0f315f"
  surface-gray: "#f0f0f0"
  button-hover-bg: "#ffffff99"
  hairline: "#e4e4e4"
typography:
  display:
    fontFamily: proxima-nova, Arial, sans-serif
    fontSize: 38.4px
    fontWeight: 700
    lineHeight: 38.4px
  display-mobile:
    fontFamily: proxima-nova, Arial, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38px
  heading-mobile:
    fontFamily: proxima-nova, Arial, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 36px
  subheading:
    fontFamily: proxima-nova, Arial, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 38px
  body:
    fontFamily: proxima-nova, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  body-small:
    fontFamily: proxima-nova, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
  button:
    fontFamily: proxima-nova, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 22.4px
  nav:
    fontFamily: proxima-nova, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
rounded:
  xs: 12px
  sm: 16px
  md: 50px
  lg: 100px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 7px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 48px
    borderColor: "{colors.ink}"
  button-primary-hover:
    backgroundColor: "{colors.button-hover-bg}"
  button-dark:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
  feature-panel:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.sm}"
  feature-panel-light:
    backgroundColor: "{colors.surface-gray}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  feature-panel-navy:
    backgroundColor: "{colors.navy}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.sm}"
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
---

## Overview

www.panasonic.com redirects US visitors to **na.panasonic.com**, "Create Today, Enrich Tomorrow | Panasonic North America - United States". It is the B2B and corporate site of Panasonic's North American operation, not the consumer store (the footer links out to shop.panasonic.com for consumer products). The page is 5,148px tall at 1280px and is short and structured: blue header, a single hero, a grid of eleven industries, three feature panels (Leading with Purpose, Building a more sustainable future, Plan your next career move), a contact card and a footer.

The identity is clean and corporate: **Panasonic blue `#1953b4`** for the header, hero frame, feature panels, contact card and the legal bar; white for the main body; black for text and for dark buttons. Headlines are bold **proxima-nova** (700); body copy is regular at 18px. Buttons are small white or black rounded rectangles (12px radius), never blue. Imagery is photographic and human — an extreme close-up of an eye behind glasses in the hero, an older man in a suit walking in a garden beside copy about founder Kōnosuke Matsushita, a father and child on a lakeside dock, a woman holding a glowing sphere — and the industries are represented by circular photo thumbnails.

The microcopy is plain and benefit-led: "Smarter Decisions. Stronger Outcomes.", "Explore our Technologies", "Plan your next career move".

## Colors

- **Panasonic blue `#1953b4`** (`primary`, `page-largest`) — the largest measured background area: header, the band behind the hero image, the "Leading with Purpose" panel, the contact card and the footer legal bar. Used as surface and identity colour, with white text on top.
- **White `#ffffff`** (`canvas`) — the main body background (41% of the capture) and the fill of the light buttons.
- **Black `#000000`** (`ink`) — most-read text colour (1,697 characters); also the second-largest background area (the dark buttons and the hero image frame) and the 1px border of the white buttons.
- **Navy `#0f315f`** — the careers panel.
- **Light grey `#f0f0f0`** — the sustainability panel.
- **White at 60% `#ffffff99`** — the measured hover fill of the white button (its border also turns `rgb(230, 230, 230)`).
- **Hairlines** — `#e4e4e4` and `#e0e0e0` borders.
- A light blue `#6aaae4` occupies a tiny measured area and is not used as a token.

There is no red or secondary accent on this page; contrast comes from blue against white and from black buttons.

## Typography

One family: **proxima-nova**, loaded at 300, 400, 600 and 700, with Arial as the fallback. Proxima Nova is a commercial typeface; Arial is the site's own declared substitute, and Montserrat is a freely available geometric alternative if Arial is too neutral.

| Role | Size / line-height | Weight |
| --- | --- | --- |
| Hero headline (h1) and section heading (h2) | 38.4px / 38.4px | 700 |
| Industry name / panel headline (h3) | 24px / 38px | 700 |
| Body / hero copy | 18px / 24px | 400 |
| Button | 16px / 22.4px | 600 |
| Navigation | 16px / 18.4px | 400 |
| Small copy (industry descriptions, footer links) | 14px | 400 |

16px carries the most characters (1,783). Weight 300 appears in 210 characters. No letter-spacing other than `normal` was measured. Headlines use title case with full stops ("Smarter Decisions. Stronger Outcomes."); panel headlines use sentence case.

## Layout

The measured page has three desktop bands: the blue header-plus-hero band (792px), one long white band (4,268px) holding the industry grid and feature panels between x=45 and x=1235, and the blue legal bar (87px). The industry grid runs 4 columns (maximum card columns measured 3 for card-like elements; the capture shows rows of 4, 4 and 3 industry items). Root variables declare the column system: `--column-width-multiplier: 8.333` (a 12-column grid, 100/12) and `--column-gap: 2.13%`.

Spacing: gaps of 24px and 16px (6 each), 8px, 25px, 32px; paddings dominated by 24px (19), 4px, 16px, 25.008px and 12px, with 64px and 82px for larger blocks.

Section pattern in the capture:

1. Blue header: centered Panasonic wordmark, utility links (search, Contact Us, United States) at top right, and a centered navigation row (About Us, Industries, Products & Services, News, Careers).
2. Hero: a full-width photo with rounded corners overlapping the blue band, headline, paragraph and white button at left.
3. "Panasonic Business Solutions" — centered heading over circular thumbnails with 24px titles and short descriptions.
4. Three feature panels, alternating image-left and image-right, each a coloured panel (blue, grey, navy) offset behind a rounded photo.
5. A centered blue contact card with an envelope icon and a black "Contact Form" button.
6. Footer: wordmark, social icons, three link columns, and a blue legal bar.

## Elevation & Depth

Depth is created by offsetting: each feature panel sits behind and below its photo so the two overlap, and the hero photo overlaps the blue header band. One shadow was measured: `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` on two elements. Everything else is flat colour.

## Shapes

- **12px** — buttons (7 elements).
- **16px** — photos, panels and cards (20 elements); one `0px 16px 16px 0px` (a panel rounded on its right side only).
- **50%** — circular industry thumbnails and icon frames (11 elements).
- **100px** and **50px** — pill shapes on two and one elements.

The overall feel is soft-cornered rectangles with circles for categories.

## Components

- **Primary (light) button** ("Explore our Technologies", "Learn more", "Explore jobs at Panasonic") — white fill, 1px black border, black proxima-nova 16px/600, padding 12px 24px, 48px tall, 12px radius. Measured hover: fill `rgba(255,255,255,0.6)`, border `rgb(230,230,230)`.
- **Dark button** ("Learn more" on grey, "Contact Form") — black fill, white 16px/600 text, 12px radius.
- **Feature panel** — blue, grey or navy block with 16px radius, a 24px/700 headline, 18px copy and a button, overlapped by a 16px-radius photo.
- **Industry tile** — circular photo, 24px/700 centered name, 14px centered description; four per row.
- **Header** — blue, white 16px/400 links with dropdown chevrons on About Us and Products & Services; 6 header links measured visible.
- **Footer** — white, black 16px/600 column headings, 14px links, social icons; blue legal bar.

## Design System Architecture

No public Panasonic design system or brand-guideline link was found. The home page at https://na.panasonic.com/ (opened) lists About, Businesses, Seven Principles, Ethics, Sustainability, Foundation, Careers, Newsroom, Investor Relations (holdings.panasonic) and Panasonic Global links, with no brand, logo-usage or press-kit link; https://na.panasonic.com/about-us returned HTTP 404. The `?hsLang=en` parameter on every internal link shows the site runs on HubSpot CMS. The de-facto system is small: one family (proxima-nova), blue/white/black plus navy and grey panels, 12px/16px/50% radii, and two root variables defining a 12-column grid (`--column-width-multiplier: 8.333`, `--column-gap: 2.13%`).

## Do's and Don'ts

**Do**
- Use Panasonic blue `#1953b4` as a surface — header, feature panels, contact card — with white text.
- Keep buttons white with a black border on light or blue grounds, black on grey grounds; 12px radius, 48px tall.
- Set headlines in proxima-nova 700 and body in 400 at 18px/24px.
- Use circular photos for categories and 16px-radius photos for features.
- Overlap a photo and its coloured panel for feature blocks.

**Don't**
- Don't fill buttons with blue; the measured buttons are white or black.
- Don't add accent colours beyond blue, navy, grey, white and black.
- Don't use square corners on imagery.
- Don't stack heavy shadows; depth comes from offsets.
- Don't treat the floating accessibility widget at the left edge as brand UI.

## Responsive Behavior

Measured at 390px:

- The header shows 1 link and a menu toggle labelled "Toggle Navigation Menu" (desktop: 6 links, no toggle).
- The hero headline measured 32px/38px (38.4px on desktop); the section heading 28px/36px; industry names 18px/700 and left-aligned (24px centered on desktop).
- Hero body text measured 16px/24px (18px on desktop).
- Maximum card columns measured 1 (desktop 3).
- Content runs from x=25 to x=365; the blue hero band measured 639px tall.
- On mobile the contact card measured as a full blue band (261px) with a centered 16px/700 "Contact Us" heading, followed by a white band and a 372px blue band at the bottom.

Intermediate breakpoints were not measured.

## Iteration Guide

1. Start with a white page and a blue `#1953b4` header with centered white navigation.
2. Open with a rounded photo overlapping the blue band, a 38.4px/700 headline and one white bordered button.
3. Present offerings as circular thumbnails with 24px/700 titles in a 4-up grid on the 12-column system.
4. Alternate feature panels in blue, `#f0f0f0` and navy `#0f315f`, each overlapped by a 16px-radius photo.
5. Keep all buttons 48px tall with 12px radius and 12px 24px padding.
6. Use human, documentary photography; avoid product cut-outs on the corporate page.
