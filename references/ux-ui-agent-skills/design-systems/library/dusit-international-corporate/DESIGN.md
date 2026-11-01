---
version: alpha
name: Dusit International
category: "Thai Brands"
description: "Dusit International corporate site (Dusit Thani Public Company Limited) - a calm blue-grey palette (#32323f ink, #5f7380 link blue, #eff1f2 page ground) with gold accents in the root variables, set in the proprietary Dusit Display serif and Dusit Text sans at 51px and 14px."
colors:
  canvas: "#ffffff"
  page-largest: "#eff1f2"
  ink: "#32323f"
  primary: "#5f7380"
  nav-bg: "#ffffff1a"
  blue-700: "#2e2e39"
  blue-400: "#94a1aa"
  blue-300: "#b5bfc5"
  gold-100: "#f6f4ea"
  gold-200: "#d9d4bc"
  gold-500: "#afa267"
  gold-600: "#99893f"
  red-500: "#ed1c25"
typography:
  display:
    fontFamily: "\"Dusit Display\", sans-serif"
    fontSize: 51.0854px
    fontWeight: 400
    lineHeight: 61.3024px
  display-mobile:
    fontFamily: "\"Dusit Display\", sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
  subheading:
    fontFamily: "\"Dusit Display\", sans-serif"
    fontSize: 36.8841px
    fontWeight: 400
    lineHeight: 47.9494px
  body:
    fontFamily: "\"Dusit Text\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  nav:
    fontFamily: "\"Dusit Text\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 5px
  pill: 9999px
spacing:
  s1: 0.8px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 32px
  s8: 48px
  s9: 64px
  s10: 96px
components:
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    padding: 48px 0px 32px
---

## Overview

This is the corporate site of Dusit International, the group behind Dusit Thani; the measured home page lives at www.dusit-international.com/en/home, its document title is "Dusit Thani", and the footer names the company as "Dusit Thani Public Company Limited" (address 319 Chamchuri Square, as printed). The site is the group's investor and corporate front: the navigation tree (opened on the Our Story page) covers About DUSIT, Our Businesses, Investor Relations, Sustainability, Media, Careers and Contact Us, with an English and Thai (ไทย) switch. The queued brand is the group's corporate site, so the file is named after the measured site and called Dusit International.

The first screen is a full-bleed photograph of a hotel lobby with a translucent header (Menu on the left, the Dusit International wordmark centred, English selector and search on the right) and the display-serif statement "Proud of our Thai heritage, uniquely delivering gracious hospitality to the world." Beneath it four counters in light serif numerals read 75+ years in hospitality business, 300+ properties in operation, 60+ hotel management contracts in pipeline and 30+ years in hospitality education business. The page then moves to a pale-grey "Our Latest Stories" section of three white cards, a full-bleed video panel for Dusit Hotels & Resorts with a "View Full Video" control, and a "Dusit Businesses" section with underlined tabs (Hotels and Resorts, Hospitality Education, Real Estate Development, Foods, Other Businesses).

The tone is formal, heritage-led and understated: the Our Story page presents the founder, Thanpuying Chanut Piyaoui, and the origin of the group in 1949, and the design lets large photography and a refined serif carry the message.

## Colors

The site declares a named palette in its root variables, which the extraction captured, and the on-page frequencies agree with it.

- **Canvas `#ffffff`** and **page-largest `#eff1f2`** (the root `--blue-100`): the grey ground behind the stories section is the largest background by area (1305) with white at 503.
- **Ink `#32323f`** (`--blue-600`): the most-read text (801 characters).
- **Primary `#5f7380`** (`--blue-500`): the muted slate blue of links, category labels and small text (77 characters). The home page has no filled button, so primary is the link colour.
- **Nav background `#ffffff1a`**: the translucent white header glass over the hero (area 119).
- **Blue ramp**: `--blue-50` `#F9F9FA`, `--blue-100` `#EFF1F2`, `--blue-200` `#CDD4D8`, `--blue-300` `#B5BFC5`, `--blue-400` `#94A1AA`, `--blue-500` `#5F7380`, `--blue-600` `#32323F`, `--blue-700` `#2E2E39`, `--blue-800` `#24242D`, `--blue-900` `#1C1C23`; tokens keep the ones listed in the frontmatter.
- **Gold ramp** (declared in root variables): `--gold-100` `#F6F4EA`, `--gold-200` `#D9D4BC`, `--gold-500` `#AFA267`, `--gold-600` `#99893F`. Their use on the home page was not recorded.
- **Red** `--red-500` `#ED1C25`: declared; use on the home page was not recorded.

The root variables also contain the unmodified Bootstrap defaults (`--primary: #007bff`, `--danger: #dc3545`, `--success`, `--warning`); these are not brand colours.

## Typography

Two proprietary families are loaded: **Dusit Display** (one weight, 400), a light serif used for headlines and numerals (211 characters), and **Dusit Text** (400 and 700), a sans-serif for everything else (1266 characters). Font Awesome 6 Pro and an icomoon font supply icons.

- **Display** (hero h1): Dusit Display, 51.0854px, weight 400, line-height 61.3024px; 32px / 38.4px on the 390px mobile pass.
- **Subheading**: Dusit Display, 36.8841px, line-height 47.9494px (section titles such as "Our Latest Stories").
- **Body**: Dusit Text, 14px, 400, line-height 21px.
- **Nav**: Dusit Text, 16px, 400, line-height 24px.
- Other sizes by character: 30.2012px (91), 19.3415px (34), 12px (36). Weights are 400 (964 characters) and 700 (513).

Substitutes were not researched; the families are the brand's own.

## Layout

The desktop page is 1280px wide and 3934px tall. The header is 93px high on desktop and sits over the hero. Content sits in a narrower centred column than the hero: the three story cards in the capture span roughly the middle of the page with small gaps, while the hero and video panels run edge to edge. Spacing steps are 0.8, 4, 8, 12, 16, 24, 32, 48, 64 and 96px, a clean 4/8 progression. The footer is 259px high with `48px 0px 32px` padding. Declared breakpoints in the root variables are 576px, 768px, 992px, 1200px, 1640px and 1920px.

## Elevation & Depth

No box shadows were recorded. Cards are white tiles on the grey `#eff1f2` ground, and depth comes from tonal layering plus the dark photographic panels. The header uses a translucent `#ffffff1a` fill with a transform of `matrix(1, 0, 0, 1, 0, 0)`, i.e. no offset.

## Shapes

Measured radii are 50% (one element, the circular play control) and 5px (one element). Cards, tabs and the photo panels measured 0px on the roles that were sampled, so the look is square-cornered with the exception of circular icon controls.

## Components

- **Header**: translucent white over the hero, white Dusit Text labels, wordmark centred.
- **Hero counters**: four light-serif numerals with 14px captions in white.
- **Story cards**: white tile, photograph, a small slate-blue category label, a 4-to-6-line title in Dusit Text, and an underlined "Explore More" text link.
- **Link**: `#5f7380` Dusit Text 14px on white.
- **Video panel**: full-bleed video with a centred logo lockup and a "View Full Video" label and circular play icon.
- **Tabs**: text tabs separated by bullets, the active tab underlined.
- **Footer**: `#eff1f2`, ink `#32323f`, company name, address and copyright in 19.3415px bold for the heading and 14px for the copyright.

## Design System Architecture

No public design system or brand-guideline page was found; the pages opened (the home page and /en/about-dusit/our-story) link to corporate, governance and investor pages but not to a brand portal. The shipped CSS exposes a de-facto token system through root variables: a ten-step blue ramp (`--blue-50` to `--blue-900`), a gold ramp (`--gold-100` to `--gold-600`), `--red-500`, `--black`, `--white`, and the named breakpoints `--breakpoint-sm` 576px, `--breakpoint-md` 768px, `--breakpoint-lg` 992px, `--breakpoint-xl` 1200px, `--breakpoint-xxl` 1640px and `--breakpoint-xxxl` 1920px, layered over Bootstrap's default variables and Swiper's navigation size (`--swiper-navigation-size: 44px`). Sources opened: https://www.dusit-international.com/en/home and https://www.dusit-international.com/en/about-dusit/our-story.

## Do's and Don'ts

- Do set headlines in Dusit Display at weight 400 and body in Dusit Text.
- Do use the blue ramp (ink `#32323f`, link `#5f7380`, ground `#eff1f2`) for interface and keep gold for accents defined in the variables.
- Do let full-bleed photography carry sections and keep copy short.
- Do keep cards white on the grey ground with an underlined text link instead of a button.
- Don't use Bootstrap's `#007bff` or `#dc3545` as brand colours.
- Don't add drop shadows; none were measured.
- Don't claim a button style; the home page shows none.
- Don't use the gold or red ramps for specific components until their use is measured.

## Responsive Behavior

Measured on the 390px mobile pass: the hero h1 is Dusit Display at 32px with 38.4px line-height (box 342px wide, 192px high); the footer copyright paragraph is 14px with 21px line-height; the header is 81px high and 390px wide, with a `#ffffff1a` fill and the labels "English" and "Menu". Mobile character sizes recorded were 16px, 14px, 12px, 32px and 26px. How the card grid, tabs and counters reflow was not measured.

## Iteration Guide

1. Start with canvas, page-largest, ink, primary and the Dusit Display and Dusit Text pair.
2. Keep headlines light and serif, interface text sans, and photographs full-bleed.
3. Measure the gold and red uses before assigning them to components.
4. Re-extract with `node web/scripts/extract-tokens.mjs` for any new page, then verify with `node web/scripts/verify-designs.mjs --slug=dusit-international-corporate`.
