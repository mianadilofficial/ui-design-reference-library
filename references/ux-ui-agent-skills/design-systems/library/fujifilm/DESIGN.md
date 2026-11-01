---
version: alpha
name: "Fujifilm [Global]"
category: "Consumer Electronics"
description: "Fujifilm [Global] (global.fujifilm.com/en) is the group's region-selector and corporate home page: white canvas with #f1f2f1 panels, charcoal #333333 square-cornered buttons (2px radius), Clarimo UD PE in light and narrow cuts with 0.96px tracking, green #018463 line icons and a declared red #fb0020."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#333333"
  on-primary: "#ffffff"
  surface-grey: "#f1f2f1"
  ink-secondary: "#515151"
  hairline: "#d6d6d6"
  text-input-border: "#adadad"
  accent-green: "#018463"
  accent-red: "#fb0020"
  link-navy: "#2f3c7e"
  text-blue: "#124f72"
  surface-blue: "#e8f3f8"
typography:
  display:
    fontFamily: "\"Clarimo UD PE Narrow Light\", sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: 0.96px
  display-mobile:
    fontFamily: "\"Clarimo UD PE Narrow Light\", sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 42px
    letterSpacing: 0.96px
  subheading:
    fontFamily: "\"Clarimo UD PE Regular\", sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 36px
    letterSpacing: 0.96px
  body:
    fontFamily: "\"Clarimo UD PE Light\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.96px
  button:
    fontFamily: "\"Clarimo UD PE Regular\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.96px
rounded:
  xs: 2px
spacing:
  s1: 8px
  s2: 16px
  s3: 20px
  s4: 24px
  s5: 32px
  s6: 40px
  s7: 56px
  s8: 64px
  s9: 80px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 32px 16px 24px
    height: 58px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 32px 16px 24px
    height: 56px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-secondary}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-secondary}"
    typography: "{typography.button}"
    padding: 16px 40px 16px 16px
    height: 58px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.ink-secondary}"
    padding: 80px 0px
---

# Fujifilm [Global]

Measured from https://global.fujifilm.com/en/ (the queued URL https://www.fujifilm.com redirects there; page title "Fujifilm [Global]", lang en). This is the Fujifilm group's global entry page, which opens with a "Select a region" card, so the document is named for the measured site. It is 3366px tall at a 1280px window.

## Overview

The header shows the FUJIFILM wordmark with the line "Value from Innovation" and the label "Global", over a thin gradient rule that runs from dark green to light aqua. The hero is a pale grey field with a white card reading "Select a region" and "Choose from the pull-down menu.", two selects (All Regions and a disabled Country/Region) and a wide charcoal "Go" button; at the right a glowing pale-green globe with small camera-like markers. Below, "About Fujifilm Group" shows three facts: Established 1934, Revenue 3,357.0 billion yen and Employees 73,526 (as of March 31, 2026), each over a line icon. "Business Fields" lists Healthcare, Electronics, Business Innovation and Imaging, each with a green line-art portrait icon, a short description and a charcoal "more" button. A row of photo cards follows: About Us, Investor Relations, Brand and Sustainability.

The region menu lists All-Regions, North America, Latin America, Europe, Middle East, Africa, Asia and Oceania. The footer links read Privacy Policy, Terms of Use, Contact us and Cookies Settings. The brand section of the opened page links to a corporate brand logo page, which only introduces the logo's history and points to the holding company's logo page; it states no colors, typefaces or clear-space rules. The voice is corporate, factual and multilingual in intent: short noun headings, plain sentences and numerals.

## Colors

Measured background areas: #ffffff (weight 1575), #f1f2f1 (1096, the grey panels and the footer), #333333 (120, the buttons) and #f6f7f6 (12). Text colors by characters: #000000 (894), #515151 (397) and #ffffff (34). Border colors: #d6d6d6 (3) and #adadad (1, the select border). The root variables define the site's own palette: `--color-text` #000, `--color-text-secondary` #515151, `--color-bg` #fff, `--color-bg-secondary` #F6F7F6, `--color-border` #ADADAD, `--color-btn` #E0E0E0, `--color-text-green` #018463, `--color-text-blue` #124F72, `--color-bg-blue` #E8F3F8, `--color-text-red` #990000, `--color-bg-red` #FFF5F5, `--color-attention` #fb0020, `--color-link` #fb0020, `--bs-primary` and `--bs-link-color` #2F3C7E, `--bs-link-hover-color` and `--bb-primary-dark` #28336c, `--bs-secondary` #FBEAEB and `--bb-secondary-dark` #d6c7c8.

- **canvas #ffffff**, **ink #000000**, **ink-secondary #515151**.
- **primary #333333** with **on-primary #ffffff**: the fill and text of the "Go" and "more" buttons.
- **surface-grey #f1f2f1**: the hero background and footer; **hairline #d6d6d6** and **text-input-border #adadad**: the borders.
- **accent-green #018463**: declared as `--color-text-green`; the icons in the capture are green line art.
- **accent-red #fb0020**: declared as `--color-attention` and `--color-link`; the red was not measured as a rendered area, so it is used here only as a declared color.
- **link-navy #2f3c7e**, **text-blue #124f72** and **surface-blue #e8f3f8**: declared Bootstrap-based and section colors.

## Typography

One family in six cuts: Clarimo UD PE Light, Regular, Medium, Narrow Light, Narrow Regular and Narrow Medium (UD means universal design; the family is a commercial typeface). Root variables map them: `--font-normal` Light, `--font-medium` Regular, `--font-bold` Medium, `--font-normal-conde` Narrow Light, `--font-medium-conde` Narrow Regular and `--font-bold-conde` Narrow Medium. By characters: Light 698, Regular 345, Medium 106, Narrow Medium 65, Narrow Regular 59, Narrow Light 52. A neutral humanist sans is the generic substitute; the narrow cuts have no free equivalent here.

- **display**: Clarimo UD PE Narrow Light 32px, weight 400, line-height 48px, letter-spacing 0.96px: "Select a region" and "About Fujifilm Group".
- **display-mobile**: Narrow Light 28px, line-height 42px, same tracking.
- **subheading**: Clarimo UD PE Regular 24px, weight 500, line-height 36px: "Established", "Healthcare".
- **body**: Clarimo UD PE Light 16px, weight 400, line-height 24px.
- **button**: Clarimo UD PE Regular 16px, weight 500, line-height 24px.

Every role carries letter-spacing 0.96px (6% of 16px), which gives the text an airy, open set. Line-heights are 1.5 of the size at every heading and body role. Size frequencies: 16px (729 characters), 14px (243), 18px (116), 28px (57), 24px (42), 20px (42), 32px (41), 12px (21), 36px (17), 41.6px (17). The root body text measures 14px with line-height 28px in #515151.

## Layout

Root variables define the grid: `--container-width` 1160px, `--container-wide-width` 1400px, `--container-padding` 32px, `--gap` 16px, `--gutter` 8px, `--col-width` 60px and `--col-wide-width` 80px. Measured paddings: 16px (13), 24px (9), 40px (7), 64px (4); gaps 16px (18), 40px (4), 32px (2) and 80px (1). Business Fields sit in four equal columns; the photo cards below also use four columns. The footer has padding 80px 0px and is 856px high; the header is 168px high. The spacing tokens are 8px, 16px, 20px, 24px, 32px, 40px, 56px, 64px and 80px.

## Elevation & Depth

No box shadows were measured. The "Select a region" card is white on a light grey field and separates by tone; the globe has a soft green glow in the capture that is part of the illustration. A `--color-bg-secondary-a` rgba(0, 0, 0, 0.08) token is declared for subtle overlays.

## Shapes

The only radius measured is 2px (9 elements): buttons, the select and small tiles. Cards and image blocks are square. The primary button is a full-width bar with a small right-pointing chevron icon at the right edge, with padding 16px 32px 16px 24px.

## Components

- **button-primary**: "Go", fill #333333, text #ffffff, Clarimo UD PE Regular 16px/500, padding 16px 32px 16px 24px, height 58px, width 140px, radius 2px.
- **button-secondary**: "more", the same fill, text and padding at height 56px and width 258px; it repeats under every business field and every photo card.
- **text-input (select)**: white fill, text #515151, padding 16px 40px 16px 16px, height 58px, 1px border #adadad, a chevron icon drawn as a data-URI background image.
- **nav**: a 168px-high white header with the wordmark, tagline and "Global" label.
- **footer**: fill #f1f2f1, text #515151, padding 80px 0px; quick links grouped by region.
- **fact block**: a centered label, a large numeral and a green line icon.

## Design System Architecture

No separate brand guideline or design system is published on the pages opened: the brand logo page introduces the logo's history and points to https://holdings.fujifilm.com/en/about/logo, which was not opened. The shipped CSS shows a Bootstrap-derived token layer: `--bs-primary`, `--bs-secondary`, `--bs-body-color`, `--bs-link-color`, plus site tokens `--color-*`, `--font-*` (six cuts), grid tokens (`--container-width`, `--gap`, `--gutter`, `--col-width`) and an icon set of data-URI custom properties (`--i-arrow_r`, `--i-search`, `--i-play`, `--i-pause` and others). Sources: https://global.fujifilm.com/en/ and https://global.fujifilm.com/en/about/brand/logo.

## Do's and Don'ts

- Do keep surfaces white and #f1f2f1, text black and #515151, and actions charcoal #333333.
- Do use Clarimo UD PE with 0.96px letter-spacing and 1.5 line-height at every size.
- Do pair facts with green line icons (#018463).
- Do keep corners at 2px and buttons full-width within their columns.
- Don't add shadows or gradients to UI chrome; the only gradient is the thin header rule.
- Don't use the Bootstrap default link blue; the declared link navy is #2f3c7e.
- Don't document the cookie settings link as a component.

## Responsive Behavior

The mobile pass recorded: display 28px with line-height 42px; the "Go" button unchanged at 16px with padding 16px 32px 16px 24px; body text 16px with line-height 24px; the header measured at 14px with line-height 28px. Mobile size frequencies: 16px (729 characters), 20px (90), 28px (87), 18px (68), 14px (58), 24px (53), 32px (34), 12px (21). The root also declares `--mq` as "sm". Column counts at smaller widths were not measured.

## Iteration Guide

1. Canvas #ffffff, panels #f1f2f1, text #000000 and #515151.
2. Headings in Clarimo UD PE Narrow Light 32px/48px; body Light 16px/24px; all with 0.96px tracking.
3. Charcoal #333333 buttons, 56 to 58px high, 2px radius, with a chevron at the right.
4. Present facts as label, large numeral and green line icon in a four-column band.
5. Use the 1160px container with 32px padding and 16px gaps.
6. Check any new page with the extractor before adding tokens.
