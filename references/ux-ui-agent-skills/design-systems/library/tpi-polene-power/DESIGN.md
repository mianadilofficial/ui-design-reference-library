---
version: alpha
name: TPI Polene Power
category: "Thai Brands"
description: "TPI Polene Power Public Company Limited Thai homepage (tpipolenepower.co.th/index.php/th/): Athiti typeface at weight 300 and 16px body, 46px/600 centered hero title in slate #2f3f54, #f7f7f7 canvas, ink #090e1d, navy #19283f footer, amber #f6bf1f link hover, a saturated blue header band and square corners throughout."
colors:
  canvas: "#f7f7f7"
  ink: "#090e1d"
  primary: "#ff0000"
  surface: "#19283f"
  surface-2: "#2f3f54"
  ink-2: "#ffffff"
  ink-4: "#000000"
  accent-amber: "#f6bf1f"
typography:
  display:
    fontFamily: Athiti
    fontSize: 46px
    fontWeight: 600
    lineHeight: 56px
    letterSpacing: 0.3px
  display-mobile:
    fontFamily: Athiti
    fontSize: 20px
    fontWeight: 500
    lineHeight: 22px
    letterSpacing: 0.3px
  body:
    fontFamily: Athiti, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  link:
    fontFamily: Athiti, sans-serif
    fontSize: 13.3333px
    fontWeight: 300
    lineHeight: 20px
rounded:
  none: 0px
spacing:
  s1: 10px
  s2: 15px
  s3: 18px
  s4: 20px
  s5: 40px
  s6: 50px
  s7: 100px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.accent-amber}"
    padding: 10px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink-2}"
    padding: 100px 0px
---

## Overview

TPI Polene Power Public Company Limited (Thai: บริษัท ทีพีไอ โพลีน เพาเวอร์ จำกัด (มหาชน); the page title is the Thai word for "Home") is a Thai power-generation company. The measured page is the Thai-language homepage `https://www.tpipolenepower.co.th/index.php/th/` (1,280px wide, 4,494px tall, `lang="th-th"`). The extractor hid one element, a EU cookie notice (`eu_cookies`), which is not documented.

The page opens with a thin dark strip, a full-width saturated-blue header band carrying a round logo ("TPIPP" in the capture) and the tagline "พลังงานทดแทนสะอาดและสีเขียว / Clean and Green Renewable Energy", and a row of navigation links (หน้าหลัก, เกี่ยวกับเรา, ผลิตภัณฑ์, นักลงทุนสัมพันธ์, ความยั่งยืน, ห้องข่าว, โครงการจะนะ). Below is a wide aerial photograph of a power plant among green hills with a centered company-name headline in slate, followed by a three-column row of photo-and-text blurbs (energy and utilities, fuel-oil and natural-gas service stations, a "Zero Waste" waste-to-resources plan), a hairline rule, a chairman's message beside his portrait, and long text sections on sustainable-investment strategy and financial performance. The tone is formal Thai corporate prose.

There are no buttons, cards or shadows in the measured content: the design is a plain document layout with photographs, hairlines and generous gray-white space.

## Colors

- **Canvas `#f7f7f7`** is the body background (a very light gray). **Ink `#090e1d`** is the main text color by a wide margin (9,471 characters).
- **Slate `#2f3f54`** colors the hero title and is the secondary surface (background weight 31); **navy `#19283f`** is the footer background (weight 429).
- **White `#ffffff`** is text on navy and on the blue header (428 characters); **black `#000000`** colors the blurb headings (164 characters).
- **Red `#ff0000`** is measured as text color on 407 characters; the capture's first screens show no red, so where it is used lower on the page was not examined, and it is recorded as `primary` only because it is the most saturated measured color and no filled action color exists.
- **Amber `#f6bf1f`** is the active navigation item color and the hover color of every header link and language link (hover text and border change from white to `#f6bf1f`, measured), with 124 occurrences in the stylesheet corpus.
- **Header blue:** the header band renders as a strong blue in the capture, but the extractor recorded no background value for it. The stylesheet corpus contains `#3071ff` (19 occurrences) and `#1d467a` (16); which one fills the band was not measured, so no blue token is declared.

## Typography

One family, **Athiti** (Google Fonts, Thai and Latin; weights 200, 300, 500, 600 and 700 loaded), covers all 10,520 measured characters.

- **Display** 46px/600/56px with 0.3px letter-spacing (the centered company name); mobile 20px/500/22px.
- **Body** 16px/300/24px (8,061 characters) in `#090e1d`; weight 300 carries 9,932 characters in total.
- **Link** 13.3333px/300/20px (announcement links such as "กำหนดการจัดเวทีรับฟังความคิดเห็น...").
- **Headings** 20px/500/22px with 0.3px tracking (blurb titles, black) and 18.6667px (545 characters).
- **Navigation** 16px/600/24px, with 0.3px tracking.

Other sizes: 14px (footer), 12px. Weights: 300 (9,932), 700 (307), 500 (164), 600 (117). Letter-spacing 0.3px is recorded at 16px, 20px and 46px.

### Font substitutes

Athiti is an open Google Fonts family; the stylesheet's fallback is `sans-serif`.

## Layout

A 1,280px canvas with a 1,140px-wide text column for body paragraphs (box 1,140px by 120px) and a 1,270px-wide title. The header container is 81px high with 10px vertical padding; each navigation link area measured 350px by 60px. The blurb row is three equal columns of photograph (about two-thirds of the column width), title and paragraph. The chairman section pairs a portrait at left with a message at right, then a centered caption (name, title, company). The footer is 335px tall with 100px vertical padding on `#19283f`, with a copyright line "Copyright © 2018" followed by the company name. Spacing values: 10, 15, 18, 20, 40, 50 and 100px; 15px padding appears 36 times. No layout counts for header links or card columns were recorded.

## Elevation & Depth

Nearly flat. The only shadow values recorded are `rgb(255, 255, 255) 0px 0px 0px 0px` (a null shadow, 10 elements) and `rgba(221, 221, 221, 0.15) 0px 1px 5px 0px` on one element. Depth comes from the photographic hero and the contrast between the blue header, light gray canvas and navy footer.

## Shapes

No border radii were recorded: the `rounded` group is empty and every measured element has a radius of 0px. Photographs and the portrait are rectangular; the logo in the header is round in the capture, but its radius was not recorded. A hairline rule separates the blurb row from the chairman section.

## Components

- **Navigation bar.** 81px high, 16px/600 Athiti links, white text on the blue band, amber `#f6bf1f` for the active item ("หน้าหลัก") and for hover; language links "TH" and "EN" in the dark top strip behave the same.
- **Blurb.** Photograph, a 20px/500 black Thai title and a 16px/300 gray-ink paragraph; justified Thai text in the capture.
- **Announcement link.** 13.3333px/300 in `#090e1d`, 1,092px wide, 45px high.
- **Chairman block.** Portrait with a 20px-class title "เรียน ท่านผู้ถือหุ้น" and a long paragraph.
- **Footer.** `#19283f`, white 14px/300 text, 100px padding.
- **Not documented as brand UI:** the cookie notice.

## Design System Architecture

No public design system or brand guideline was found: the Thai homepage was opened and links only to corporate content, and no search was run. The root custom properties are empty; the site is a template-driven page (the URL path `index.php` indicates a PHP content system, but the platform was not identified from the page). The brand layer is therefore the shipped result: Athiti in light weight, a slate-and-navy text palette on light gray, amber hover links, and photography. Source: https://www.tpipolenepower.co.th/index.php/th/ as measured by the repository extractor.

## Do's and Don'ts

- Do set Thai body text in Athiti 300 at 16px/24px in `#090e1d` on `#f7f7f7`.
- Do center the company name at 46px/600 with 0.3px tracking in `#2f3f54` over a hero photograph.
- Do use amber `#f6bf1f` for active and hover navigation states.
- Do keep corners square and the layout flat.
- Don't add shadows or rounded cards; none were measured.
- Don't treat the `#ff0000` text color as a button fill; no filled action color was measured.
- Don't present the cookie notice as a component.

## Responsive Behavior

Measured on a 390px mobile pass: the h3 blurb title stays 20px/500/22px (330px by 22px); the company-name h2 falls from 46px/56px to 16px/600/20px (260px by 40px box); body text stays 16px/300/24px but its box grows to 330px by 432px (from 1,140px by 120px); the header container measured 390px by 81px with 10px vertical padding. The mobile pass recorded no layout counts, so link visibility and any menu toggle are not measured. Other breakpoints are not measured.

## Iteration Guide

1. Use the tokens as measured; extend only with new extractions. If a header-blue value is needed, measure the header band with an extra-page probe first.
2. Light gray canvas, `#090e1d` Athiti 300 text, slate `#2f3f54` titles, navy `#19283f` footer.
3. Keep layouts flat: photographs, hairlines and plain paragraphs.
4. Use `#f6bf1f` for nav hover and active states.
5. Run `node web/scripts/verify-designs.mjs --slug=tpi-polene-power` until it passes.
