---
version: alpha
name: OGAKI
category: "Fashion & Apparel"
description: "Social-first beauty agency site (ogakidigital.com) in a warm bone canvas #f2edeb with near-black ink #221f20, set in two typefaces: Reckless (serif, weights 300/400) for headlines and menu, GT America (grotesk, 400/700) in uppercase for navigation and labels. Radii are only 4px and 8px; no shadows, no CTA button fill."
colors:
  canvas: "#f2edeb"
  page-largest: "#e8e4e1"
  ink: "#221f20"
  primary: "#221f20"
typography:
  display:
    fontFamily: GTAmerica, "GTAmerica Fallback"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 14.3px
    textTransform: uppercase
  display-mobile:
    fontFamily: Reckless, "Reckless Fallback"
    fontSize: 42px
    fontWeight: 300
    lineHeight: 39.9px
    letterSpacing: "-1.26px"
  nav:
    fontFamily: Reckless, "Reckless Fallback"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  link:
    fontFamily: GTAmerica, "GTAmerica Fallback"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14.4px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 8px
spacing:
  s1: 8px
  s2: 10px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 32.7px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav-panel:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.xs}"
    padding: 32px
---

## Overview

OGAKI describes itself on its home page as "The Social-First Beauty Agency" (page title) and, in the mobile H1, "The social-first agency for prestige beauty." The site is the agency's own showcase: a New York and Los Angeles studio that builds social ecosystems for prestige beauty brands, with services listed as organic social, influencer marketing, paid social, creator-led affiliate and content creation. The visual identity is an editorial, almost magazine-like restraint. A warm bone background (`#f2edeb`) carries a single near-black ink (`#221f20`) and nothing else: the extraction found only two text colors, `#221f20` on 499 characters and `#f2edeb` on 10 (reversed text on dark areas).

The measurement of this page has a limit that should be stated plainly. The desktop capture was taken while the entry animation was still showing: the viewport shows only the header (the OGAKI wordmark on the left, ABOUT, SERVICES, EXPERTISE, WORK, O-WORD, CONTACT centered, and a New York clock on the right) over an empty bone field. Because of that, the desktop extraction saw 149 visible elements and a page scroll height of 800px, and the hero typography is only available from the mobile pass at 390px. Everything below is taken from those two passes; what was not measured is marked as such.

The voice, read from the home page copy, is short and confident: "Social-first, beauty-fluent, influence-led." and "Social, influence, commerce - built to work together, designed to move your brand forward." Lists use hyphens and fragments rather than sentences. The site footer links are Privacy Policy, Terms & Conditions, Cookie Policy and Sitemap.

## Colors

The palette has three measured surfaces and one ink.

- **Canvas `#f2edeb`** is the page background (body and canvas role). The capture's dominant pixel color agrees with it.
- **Page-largest `#e8e4e1`** is a slightly darker bone, the largest solid background by DOM area after the cookie banner. It is the fill of the two navigation dropdown panels (Services list and Work list) and is the only second surface in the system.
- **Ink `#221f20`** is the text color on all but ten characters of the page, and also the only border color measured (`borderColors` lists `#221f20` twice). It is a warm near-black, not pure black.
- **Primary** is set to `#221f20` as well. The site has no filled call-to-action: the extractor detected no primary, secondary or outlined button on desktop, and its generated primary was just the canvas color. Because the brand's only accent mark is the black wordmark and the black dots beside SERVICES and WORK in the capture, the ink is declared as the action color. This is a role assignment of a measured color, not a new value.

A cookie-consent banner was open during the measurement. It had its own translucent fill (`#e9e5e2b3`) and 8px radius; it is consent chrome and is deliberately excluded from the tokens. The root variable `--swiper-theme-color` (`#007aff`) is a slider-library default and is not used as a brand color.

## Typography

Two families carry the whole site, both loaded as custom fonts: **Reckless** (weights 300 and 400, a serif) and **GT America** (weights 400 and 700, a grotesk). By character count GT America is dominant (494 characters versus 15 for Reckless), so the site reads as a small-caps style grotesk interface with a serif reserved for headlines and the top menu.

- **Display (desktop role):** GT America 13px, weight 400, line-height 14.3px, uppercase. This is the navigation label style measured on ABOUT, SERVICES and the dropdown items. Letter spacing at 13px is -0.13px.
- **Display mobile:** Reckless 42px, weight 300, line-height 39.9px, letter spacing -1.26px, for the H1 "The social-first agency for prestige beauty." at 390px. The section heading at 390px is Reckless 34px, weight 300, line-height 32.3px, letter spacing -0.68px. The tight line-height (under 1.0) is a measured characteristic of the headline.
- **Nav (Reckless):** 18px, weight 400, line-height 27px, used by the header container and the skip-to-content link.
- **Link:** GT America 12px, weight 400, line-height 14.4px, uppercase, used for footer links such as PRIVACY POLICY.
- **Mobile body:** GT America 18.0331px, weight 400, line-height 25.2464px, uppercase, for the paragraph "SOCIAL, INFLUENCE, COMMERCE - BUILT TO WORK TOGETHER".

The size distribution by characters on desktop is 13px (322), 12px (172) and 18px (15). If the proprietary fonts are unavailable, the loaded fallbacks are named "Reckless Fallback" and "GTAmerica Fallback" in the font-family stacks; their metrics were not measured here.

## Layout

The measured structure is a full-width header followed by content on a single bone canvas. The header is 1280px wide and 55px tall on desktop. It holds the wordmark, a centered navigation row and a right-aligned city and time readout. Spacing values taken from gap and padding frequencies are 8, 10, 12, 16, 24 and 32px, plus a measured 32.7018px padding; these form the spacing scale. Dropdown panels use 32px padding; the (excluded) consent card used 24px. Gaps are most often 16px (4 occurrences), then 10, 32 and 8px.

The page is a single scroll of 800px at the time of capture because the entry sequence had not yet revealed the rest of the content, so grid columns and section rhythm below the fold were not measured. The home page copy names the sections "AWARD WINNING WORK" and a newsletter prompt "Don't Miss A Thing With OGAKI®".

## Elevation & Depth

No box shadows were measured on desktop (`boxShadows` is empty). Depth is created only through the tonal step between `#f2edeb` and `#e8e4e1`, which separates dropdown panels from the page, and through 4px rounding on those panels. There are no borders on the panels; the only measured border color is the ink `#221f20`, used twice.

## Shapes

Two corner radii were measured: 4px (2 elements, the Services and Work dropdown panels) and 8px (3 elements, including the consent card). Buttons were not detected, so no button radius is declared. Everything else computes to 0px, which includes the header, links and the text blocks. The result is a mostly square, flat interface with small softened panels.

## Components

- **Link:** GT America 12px uppercase in ink `#221f20`, no underline measured, no background.
- **Nav and nav-link:** the header is transparent over the canvas; nav items are ink on bone. The top-level nav row is uppercase 13px GT America in the capture, and the Reckless 18px style is declared for the header container.
- **Nav panel:** a dropdown holding the Services list (Organic Social, Influencer Marketing, Paid Social, Creator-Led Affiliate, Content Creation) or the Work list (Case Studies, Creative Portfolio). It uses `#e8e4e1`, 13px uppercase text, 4px radius and 32px padding.
- **Menu button (mobile):** a button labelled MENU / CLOSE, GT America 14.0331px uppercase, background `#f6f4f133`, padding 11px 0px, 39px by 76px, radius 0px.
- Hover states: none recorded (`hover` is empty).

## Design System Architecture

No public design system, brand guidelines or style guide is linked from the OGAKI home page; the footer lists only privacy, terms, cookie and sitemap pages (opened at https://www.ogakidigital.com/). The de-facto system is visible in the measurements: two font families, one ink, two bone surfaces and two radii. The only root custom properties present are `--swiper-theme-color` (`#007aff`) and `--vh` (`8px`), so the site does not expose a named color token layer. The page loads Reckless in two weights and GT America in two weights, with named fallback faces for each.

## Do's and Don'ts

- Do use `#f2edeb` for the page and `#221f20` for all text; do not introduce a third text color.
- Do set navigation and labels in uppercase GT America at 12 to 13px.
- Do set display headlines in Reckless at light weight (300) with negative letter spacing and sub-1.0 line-height, as measured at 42px and 34px.
- Do use only 4px and 8px radii; do not round the page container or text blocks.
- Don't add shadows; none were measured.
- Don't treat the cookie banner fill `#e9e5e2b3` or the slider default `#007aff` as brand colors.
- Don't invent a filled button style; the site has none measured on desktop.

## Responsive Behavior

Measured at 390px wide: the H1 is Reckless 42px weight 300 (line-height 39.9px, letter spacing -1.26px) and the H2 is Reckless 34px. The header is 41px tall, against 55px at 1280px. A button labelled MENU / CLOSE is present with a 39px by 76px box. The mobile text sizes by character are 12px (238), 16px (228), 13px (224), 42px (39), 18px (15) and 14.0331px (9). No breakpoint values were read from the stylesheet, and tablet widths were not measured. Layout reflow of sections below the header was not measured.

## Iteration Guide

1. Start from the two surfaces and one ink; check any new color against `#221f20`, `#f2edeb` and `#e8e4e1` first.
2. For headings, use Reckless 300 with letter spacing about 3 percent negative, as the measured -1.26px on 42px implies; for labels use GT America 12 to 13px uppercase.
3. Re-measure the desktop hero after the entry animation completes before documenting any desktop heading size, since the current capture stopped at the header.
4. Keep panels at 4px radius and 32px padding.
5. Record any new measurement in SOURCES.json before adding a token.
