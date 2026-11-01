---
version: alpha
name: Minor International
category: "Thai Brands"
description: "Minor International (MINT, minor.com/en/home) hospitality and restaurant group site measured: navy #13213c bands and light #fafafa/#f5f3f4 panels, taupe-bronze #7c684a square buttons, gold #a58744 headline accents, Muli at 48px bold uppercase with 1.44px tracking, square corners."
colors:
  canvas: "#13213c"
  page-body: "#ffffff"
  page-largest: "#fafafa"
  ink: "#ffffff"
  primary: "#7c684a"
  on-primary: "#ffffff"
  surface-2: "#f5f3f4"
  ink-2: "#000000"
  ink-3: "#999999"
  ink-5: "#a58744"
  ink-6: "#00000080"
  primary-hover: "#f5f4f1"
  on-primary-hover: "#867358"
typography:
  display:
    fontFamily: Muli, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 36px
    letterSpacing: 1.44px
    textTransform: uppercase
  display-mobile:
    fontFamily: Muli, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 36px
    letterSpacing: 1.44px
    textTransform: uppercase
  body:
    fontFamily: Muli, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  input:
    fontFamily: Muli, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 7.2px
  s4: 8px
  s5: 9.01px
  s6: 12px
  s7: 16px
  s8: 18px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 7.2px 16px
    height: 46px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary-hover}"
  button-secondary:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 7.2px 16px
    height: 37px
    borderColor: "{colors.page-body}"
  link:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 7.2px 16px
    borderColor: "{colors.page-body}"
  nav:
    textColor: "{colors.ink-2}"
    rounded: "{rounded.none}"
    padding: 0px 18px
  nav-link:
    textColor: "{colors.ink-2}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.ink-6}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 6px 12px
    height: 37px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-2}"
    rounded: "{rounded.none}"
---

# Minor International

## Overview

The queued URL `https://www.minor.com/en` redirects to `https://www.minor.com/en/intro-page`, a memorial splash page (a tribute portrait with Thai and English text and an "Enter Site" button) on a golden background, in a brown-gold palette with the fonts PSL Kanda Modern Extra Pro and Kanit. That page was not used. Its "Enter Site" link leads to `https://www.minor.com/en/home`, which was re-measured with `node web/scripts/extract-tokens.mjs --slug=minor-international --url=https://www.minor.com/en/home --force --no-motion --allow-spa-404`. This file documents that measured home page, titled "Minor International (MINT)", the parent group site of Minor International PCL, a hospitality and restaurant group. The name is the real name of the measured site.

The home page is an investor-and-corporate site. Top bar: logo, links ABOUT US, OUR BUSINESS, INVESTOR RELATIONS, SUSTAINABILITY, CORPORATE GOVERNANCE, a search icon and an "EN" language switch. Below: a full-width hotel photograph carousel ("MINOR HOTELS" with the line that the company is a hotel owner, operator and investor with a portfolio of over 92,000 rooms across more than 640 hotels, resorts and serviced suites) with an "EXPLORE MORE" button and arrows; a "BUSINESS OVERVIEW" block with a "WHISTLEBLOWING" button; "MINOR INTERNATIONAL'S FOOTPRINT" with a dotted world map and the figure "72 COUNTRIES WORLDWIDE"; a navy "LATEST MINOR HIGHLIGHTS" panel with download buttons next to "MINOR NEWS" cards; "ACHIEVED ACCOLADES" with brand tiles (Nomad, DQ, Anantara); a "CAREER OPPORTUNITIES" photo band; a navy "SUBSCRIBE EMAIL ALERTS" band with an envelope-shaped form; and a light footer with the registered address and legal links.

The tone is corporate and premium: navy and warm gold on white, uppercase headings split into a bold dark word and a lighter weight or gold word, big watermark letterforms ("M", "R") behind sections, and photography of hotels and kitchens.

## Colors

- `{colors.canvas}` #13213c: the deep navy of the highlight and subscribe bands (area weight 432); it is also a text color (86 characters) for headings.
- `{colors.page-body}` #ffffff: page and button-label white; `{colors.page-largest}` #fafafa (701) and `{colors.surface-2}` #f5f3f4 (666): the light panels and footer.
- `{colors.ink}` #ffffff: the most-read text (911 characters, on navy and photos); `{colors.ink-2}` #000000: text on light (907); `{colors.ink-3}` #999999 (109): muted text; `{colors.ink-6}` #00000080: placeholder text.
- `{colors.primary}` #7c684a: taupe-bronze, the fill of WHISTLEBLOWING, EXPLORE MORE and SUBSCRIBE buttons (area weight 24, text on 26 characters).
- `{colors.ink-5}` #a58744: gold, used for headline accent words such as "HOTELS" and "FOOTPRINT" (53 characters).
- `{colors.primary-hover}` #f5f4f1 with `{colors.on-primary-hover}` #867358: the recorded hover state of the primary button.

Bootstrap root variables (`--bs-primary` #0d6efd, `--bs-yellow`, `--bs-info` and similar) are framework defaults and are not brand colors.

## Typography

One family, `Muli`, loaded in normal, 600 and bold, with icon fonts Font Awesome 5 Pro, swiper-icons and a custom `mint` icon font. No foundry or brand page about it was opened.

Tokens: `{typography.display}` Muli 48px, weight 700, line-height 36px, letter-spacing 1.44px, uppercase (section titles); `{typography.display-mobile}` 32px with the same line-height and tracking; `{typography.body}` 14px/21px weight 400; `{typography.input}` 16px/24px. Sizes by characters: 14px (1,495), 16px (238), 48px (153), 12px (143), 24px (59), 20px (30). Weights by characters: 400 (1,722), 700 (315), 600 (72), 800 (11). The display line-height (36px) is smaller than its font size (48px),.

## Layout

A Bootstrap-based grid (a Bootstrap 4.3.1 stylesheet is linked) with wide full-bleed bands alternating white, light grey and navy. The hero carousel is inset from the page edges with a large watermark letter breaking out of its left edge. Sections use a two-column pattern: heading left, descriptive text and button right. The news area is a two-up card row beside the navy highlights panel. Paddings measured: 12px (36), 16px (19), 7.2px (10), 8px (7), 32px (5), 20px, 18px, 24px, 40px, 56px. The spacing tokens are `{spacing.s1}` 4px, 6px, 7.2px, 8px, 9.01px, 12px, 16px, 18px, 20px and `{spacing.s10}` 24px. The nav is padded `0 18px`.

## Elevation & Depth

Flat, with two faint shadows: `0 0 5px` in rgb(128,128,128), and `0 2px 10px` in rgba(204,204,204,0.5). Depth is from color blocks (navy against white), overlapping watermarks and photo overlays with white text.

## Shapes

Interface geometry is square: buttons, inputs, nav and footer compute to 0px radius (`{rounded.none}`). Radii measured elsewhere: 50% (3 elements; circles for carousel arrows and map markers), 2px (1, `{rounded.xs}`) and 999px (1, `{rounded.pill}`). The 100px radius seen in the memorial splash is not part of this page.

## Components

- **Primary button** (`button-primary`): `{colors.primary}` fill, white 14px uppercase label, 46px tall, `7.2px 16px` padding, 0 radius, 1px border in the same color. Hover: `{colors.primary-hover}` fill, `{colors.on-primary-hover}` text.
- **Secondary button** (`button-secondary`, `link`): white fill, `{colors.primary}` text, 37px tall, same padding, used over photographs ("EXPLORE MORE").
- **Navigation** (`nav`, `nav-link`): white bar, black 14px uppercase links, `0 18px` padding.
- **Text input** (`text-input`): 16px/24px, 37px tall, `6px 12px` padding, `{colors.ink-6}` text.
- **Footer** (`footer`): `{colors.page-largest}` fill, black text, address block and legal links.

## Content and Voice

Copy is corporate, factual and numeric. Headlines are nouns in capitals ("BUSINESS OVERVIEW", "ACHIEVED ACCOLADES", "CAREER OPPORTUNITIES", "SUBSCRIBE EMAIL ALERTS"); supporting lines state facts such as "in 72 countries worldwide" and "over 92,000 rooms across more than 640 hotels, resorts and serviced suites". Buttons are verbs or nouns in uppercase: EXPLORE MORE, LEARN MORE, DOWNLOAD, INVESTOR KITS, SUBSCRIBE, WHISTLEBLOWING. Dates on news cards are written day, month abbreviation and year (for example "27 Aug 2026"), and the footer carries the legal name "MINOR INTERNATIONAL PUBLIC COMPANY LIMITED", a Bangkok address, a phone number and an email address for feedback.

## Design System Architecture

No public design system or brand guideline was found. Pages the home page links to include corporate awards, press releases, sustainability and reporting pages; none is a brand guide. The de-facto system is Bootstrap 4/5 (a Bootstrap 4.3.1 stylesheet link and `--bs-*` variables at root) with a Muli font, a Font Awesome Pro icon font and a custom icon font named `mint`. The brand layer is a handful of custom colors (navy, bronze, gold) applied on top of Bootstrap components.

## Do's and Don'ts

- Do alternate white and light-grey bands with navy `{colors.canvas}` bands for highlights and subscriptions.
- Do set section titles in Muli 700 uppercase with 1.44px tracking and color one word gold `{colors.ink-5}`.
- Do use square-cornered `{colors.primary}` buttons with uppercase 14px labels.
- Do use photography and large watermark letters to add richness.
- Don't use Bootstrap's default blue as a brand color.
- Don't round buttons or inputs; the measured radius is 0px.
- Don't document the memorial splash page's gold gradient or its Kanit/PSL Kanda fonts as site tokens.
- Don't add strong shadows.

## Responsive Behavior

At 390px wide the title is 32px/36px bold uppercase in gold (`#a58744`, "MINOR HOTELS"); body text is 14px/21px; the WHISTLEBLOWING button stays 14px, 46px tall and 200px wide; the nav block is 390px wide and 70px tall with 16px text in the primary color ("EN") and `0 18px` padding. Character-weighted sizes at that width: 14px (1,423), 16px (238), 32px (153), 12px (143), 24px (59), 20px (30). The mobile pass also recorded layout bands, which were not analyzed here, so column behavior is not stated.

## Iteration Guide

1. Start with white and `{colors.page-largest}` panels; use `{colors.canvas}` navy for emphasis bands.
2. Use `{typography.display}` for titles and `{typography.body}` for copy.
3. Add buttons from `button-primary` and `button-secondary`, always square.
4. Re-measure with the `/en/home` URL and `--allow-spa-404`, not the redirecting `/en` URL.
5. Do not carry values from the intro memorial page into this system.
