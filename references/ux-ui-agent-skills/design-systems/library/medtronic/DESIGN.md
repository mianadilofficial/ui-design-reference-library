---
version: alpha
name: Medtronic
category: "Healthcare & Wellness"
description: "Medtronic corporate home: white canvas with #f5f5f5 bands, navy #170f5f headings, electric blue #1010eb actions, #1e1e1e dark feature band, AvenirNextWorld at 47px/700 display and 20px body, 10-24px radii and 100px pill search."
colors:
  canvas: "#ffffff"
  surface-grey: "#f5f5f5"
  ink: "#170f5f"
  primary: "#1010eb"
  surface-dark: "#1e1e1e"
  surface-night: "#00001c"
  ink-body: "#000000c4"
  on-dark: "#fffffff5"
  ink-strong: "#000000e6"
  ink-navy: "#140f4b"
  card-bg: "#0c0ca599"
typography:
  display:
    fontFamily: AvenirNextWorld, sans-serif
    fontSize: 47px
    fontWeight: 700
    lineHeight: 56.4px
  display-mobile:
    fontFamily: AvenirNextWorld, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 33.04px
  subheading:
    fontFamily: AvenirNextWorld, "AvenirNextWorld Fallback", "avenir next", avenir, Effra, helvetica, arial, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 36px
  body:
    fontFamily: AvenirNextWorld, "avenir next", avenir, Effra, helvetica, arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
  link:
    fontFamily: AvenirNextWorld, "avenir next", avenir, Effra, helvetica, arial, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 32px
  input:
    fontFamily: AvenirNextWorld, "AvenirNextWorld Fallback", "avenir next", avenir, Effra, helvetica, arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 10px
  sm: 20px
  md: 24px
  lg: 100px
spacing:
  s1: 2px
  s2: 3.5px
  s3: 6px
  s4: 9px
  s5: 10px
  s6: 12px
  s7: 13.5px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    padding: 10px 32px 14px 0px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.input}"
    rounded: "{rounded.lg}"
    padding: 3.5px 13.5px
    height: 40px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.xs}"
    padding: 10px
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-dark}"
---

# Medtronic

Measured from https://www.medtronic.com (final URL https://www.medtronic.com/en-us/index.html), 1280px desktop pass and 390px mobile pass. The extractor hid one consent overlay (`cmp-languagenavigation`) before measuring. The page is a global medical-technology company's home: a photographic hero with a floating white panel, an impact-report teaser, a four-card story strip and a dark "who we are" band with three statistics.

## Overview

The visual language is clinical but warm: deep navy headlines (`#170f5f`) on white or pale grey, a single saturated electric blue (`#1010eb`) for every interactive element, and large editorial photography of clinicians, patients and wildlife. The top of the page sits on a water photograph with a white-text nav; the hero content lives in a white rectangular panel with a bold 47px heading ("What's next in robotic-assisted surgery?"), a short lead paragraph and a "Learn more" link ending in a filled blue circular arrow. Section labels are tiny uppercase eyebrows over a hairline ("THE LATEST", "OUR IMPACT", "WHO WE ARE"). Headlines are sentence case, short and declarative ("Innovation in action", "Where health meets high tech").

Measured background areas by weight: `#f5f5f5` (2,535), `#1e1e1e` (2,360), `#00001c` (965), `#d3d3d380` (965), `#ffffff` (919), `#e6f1ff` (846), `#000000` (276). The page is 5,610px tall.

## Colors

- **Canvas `#ffffff`**, **surface-grey `#f5f5f5`** (largest area; also the site's `--atomic-button-background-color`).
- **Ink `#170f5f`** (1,134 characters): navy for headings and the search label; `#140f4b` is the h3 tone (87 characters).
- **Primary `#1010eb`**: electric blue; the root variable `--atomic-primary` and `--atomic-title-text-color`, the search button fill and every text link. A 40% alpha version is published as `--electric-blue-box-shadow` (rgba(16,16,235,0.4)).
- **Body tints:** `#000000c4` (363 characters, descriptive copy) and `#000000e6` (88).
- **Dark band:** `#1e1e1e` (footer and the "Who we are" band) with `#fffffff5` text, and `#00001c` night navy.
- **Link on dark `#4a7dff`** (63 characters) and a hover color measured at rgb(134, 169, 255) for the white nav link.
- **Stat card `#0c0ca599`**: translucent blue panel over the photograph, white 51.2px weight-200 numerals.
- Error `#ce3f00` and success `#12a244` exist as the site's search-component variables (`--atomic-error`, `--atomic-success`); they were not seen on the home page.

## Typography

The face is **AvenirNextWorld**, served as a web font in weights 250, 400, 500 and 700, with fallbacks `"avenir next", avenir, Effra, helvetica, arial, sans-serif` and an Effra 400 face also loaded. It covers 3,284 measured characters. It is a licensed typeface; Avenir Next, Nunito Sans or Montserrat are reasonable substitutes when it cannot be licensed.

Scale as measured: display 47px/56.4px weight 700 (28px/33.04px on mobile), subheading 24px/36px weight 500 (the dominant size, 805 characters), body 20px/32px weight 400, link 20px/32px weight 500, search input 14px/24px weight 500, small 16px, 14px and 12px (eyebrows). Statistic numerals are 51.2px weight 200. Weights in use: 500 (1,516 characters), 400 (1,496), 700 (285), 200 (25).

## Layout

The CSS exposes a grid system (`--mdt-grid--col-width: 68px`, `--mdt-grid--gap-width: 14px`) and `--spacing: 16px`. The hero panel is inset from the viewport edges; the story strip bleeds to the left and right edges at 1280px. Measured paddings: 10px (19), 12px (8), 64px (5), 15px, 6px, 20px; measured gaps: 10px (12), 2px, 24px, 20px. Sections alternate white, `#f5f5f5` and `#1e1e1e`. The stat card overlaps the bottom of the dark-band photograph.

## Elevation & Depth

Shadows are measured and few: `rgba(0, 0, 0, 0.12) 0px 4px 16px 0px` (2), a three-layer `rgba(0,0,0,0.1) 0 1px 6px, rgba(0,0,0,0.06) 0 3px 2px -2px, rgba(0,0,0,0.06) 0 2px 2px 0` (the floating teaser card), and `rgba(0, 0, 0, 0.38) 0px 2px 0px 0px` (a list-box underline). Borders are `#1010eb` (2) and white at low alpha (`#ffffff5c`, `#ffffff33`) on dark surfaces.

## Shapes

Measured radii: 10px (7: images and stat card), `100px 0 0 100px` and `0 100px 100px 0` (3 each: the two halves of the search select/field pill), 20px, `24px 0 0 24px`, `0 0 8px`. The site's own variables set `--atomic-border-radius` to 0, `--atomic-border-radius-md` and `-lg` to 20px and `-xl` to 20px. Tokens: `xs` 10px, `sm` 20px, `md` 24px, `lg` 100px (full pill, used by the search input). The hero and teaser panels themselves are square.

## Components

- **Search field:** a 40px-tall pill; white fill, `#1010eb` text at 14px weight 500, padding `3.5px 13.5px`, a "Search within" select on the left, and a filled blue circular submit with a magnifier.
- **Text link with arrow:** `#1010eb`, 20px weight 500, padding `10px 32px 14px 0px`, followed by a filled blue circle containing a white arrow ("Learn more", "Read the Impact Report"). On dark bands the link is `#4a7dff`.
- **Eyebrow:** 12px uppercase label over a hairline.
- **Story card:** photograph, eyebrow, then a 24px weight-500 navy title, no border and no fill.
- **Teaser card:** white, image left, 3-layer soft shadow.
- **Statistic card:** `#0c0ca599` fill, 10px radius, 10px padding, 51.2px weight-200 numeral over a small bold caption ("Active clinical trials", "Patients served", "In R&D investments").
- **Nav:** white 16px links on the photographic header, hover `rgb(134, 169, 255)`; role labels "Healthcare Professionals", "Patients & Caregivers", "Our Company", "Our Impact", "Contact Us".
- **Footer:** `#1e1e1e`, text `#fffffff5`.

No filled rectangular primary button was detected on the home page; the extractor's CTA role is empty, so none is declared.

## Imagery and Voice

The capture shows editorial photography rather than product packshots: a surgeon beside a robotic arm against a sunset-colored backdrop, a close-up of an ant on a fingertip, a clinician adjusting a surgical cap in a blue dotted-pattern frame, two people reviewing a screen, a wolf, and three people in profile on a violet gradient. Some story images carry a diagonal "Medtronic Stories" ribbon across a corner. Copy is concise and benefit-led: headlines are one sentence, lead text is one or two lines, and calls to action are two or three words ("Learn more", "Read the Impact Report"). Numbers are shown as large light numerals with a plus, M or B suffix and a bold caption beneath.

## Design System Architecture

No public Medtronic design system or brand-guideline site was found: the home page HTML fetched at https://www.medtronic.com/en-us/index.html is a 1,104-byte shell with no brand or design-system link. The shipped CSS reveals a de-facto system: `--mdt-grid--*` tokens for the grid, `--spacing`, and a set of Coveo Atomic search-component variables (`--atomic-primary: #1010eb`, `--atomic-border-radius-lg: 20px`, `--atomic-font-family`) that carry the brand blue into the search UI. The `react-phone-number-input` variables (`--PhoneInput*`) are third-party form styles and are ignored.

## Do's and Don'ts

- Do set headlines in navy `#170f5f` weight 700 and keep them sentence case.
- Do use `#1010eb` for every link, icon-circle and search action, and `#4a7dff` for links on `#1e1e1e`.
- Do pair each text link with the blue circular arrow.
- Do use 10px radii on photography and cards; use 100px only for the search pill.
- Don't introduce a second accent color; none was measured.
- Don't use the Coveo `--PhoneInput-color--focus` teal `#03b2cb`; it belongs to a form widget.
- Don't add heavy shadows; the largest measured is 16px blur at 12% alpha.

## Responsive Behavior

At the 390px mobile pass the h1-class heading measured 28px/33.04px weight 700 in `#140f4b` (desktop 47px/56.4px), 329px wide. The grid column and gap tokens are `68px` and `14px` in :root; whether they change at smaller widths was not measured. Nav, hero and card layout changes on mobile were not measured.

## Iteration Guide

1. Canvas `#ffffff`, bands `#f5f5f5`, dark band `#1e1e1e`; headings `#170f5f`; actions `#1010eb`.
2. Type: AvenirNextWorld (or a substitute) at 47/700, 24/500, 20/400.
3. Panels square, photography 10px radius, search 100px pill.
4. Add one arrow-circle link per section; use eyebrow + hairline above each headline.
5. Run `node web/scripts/verify-designs.mjs --slug=medtronic`.
