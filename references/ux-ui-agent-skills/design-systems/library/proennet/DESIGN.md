---
version: alpha
name: PROEN Corp Public Company Limited
category: "Thai Brands"
description: "PROEN (proen.co.th/web), Thai data-center, ISP and multi-cloud provider: IBM Plex Sans Thai throughout, sky blue #00b3ff and #009de0 on a white canvas, #f2f2f2 grey carousel band, #373737 charcoal footer, white outlined pill buttons with 25px to 100px radii over full-bleed cloud and data-center photography."
colors:
  canvas: "#ffffff"
  ink: "#464646"
  primary: "#00b3ff"
  surface-footer: "#373737"
  surface-band: "#f2f2f2"
  surface-light: "#f1f1f1"
  ink-secondary: "#8b8b8b"
  link-blue: "#009de0"
  ink-soft: "#aeaeae"
  ink-pale: "#d6d6d6"
  hairline: "#b7b7b7"
typography:
  display:
    fontFamily: "\"IBM Plex Sans Thai\", Helvetica, Arial, Verdana, sans-serif"
    fontSize: 30px
    fontWeight: 500
    lineHeight: 39px
  display-mobile:
    fontFamily: "\"IBM Plex Sans Thai\", Helvetica, Arial, Verdana, sans-serif"
    fontSize: 23px
    fontWeight: 500
    lineHeight: 34.5px
  subheading:
    fontFamily: "\"IBM Plex Sans Thai\", Helvetica, Arial, Verdana, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: "\"IBM Plex Sans Thai\", Helvetica, Arial, Verdana, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 20px
  nav:
    fontFamily: "\"IBM Plex Sans Thai\", Helvetica, Arial, Verdana, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: "\"IBM Plex Sans Thai\", Helvetica, Arial, Verdana, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 22px
  button-secondary:
    fontFamily: "\"IBM Plex Sans Thai\""
    fontSize: 11px
    fontWeight: 500
    lineHeight: 19px
rounded:
  xs: 25px
  sm: 50px
  md: 100px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 14px
  s6: 15px
  s7: 20px
  s8: 23px
  s9: 25px
  s10: 25.59px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 3px 23px
    height: 28px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
    padding: 10px 25px
  nav:
    textColor: "{colors.ink-secondary}"
    padding: 0px 25.5938px
  nav-link:
    textColor: "{colors.link-blue}"
    typography: "{typography.nav}"
    padding: 0px 5px 0px 0px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.canvas}"
    padding: 0px 30px
---

## Overview

`https://www.proen.co.th/web/` (title "PROEN leading in Internet Data Center, Internet Service Provider, ICT solution provider - PROEN Corp Public Company Limited", lang en-US) is the English home page of PROEN Corp, a Thai infrastructure and ICT company. It is a corporate WordPress site (class names and CSS variables carry the `the7` theme prefix) 5,528px tall at 1280px with 748 visible elements. The queued entry URL redirects to this `/web/` page.

The first screen is a full-width hero slider ("02 / 03" counter with chevrons, "Scroll" cue with a mouse icon): a dark photographic scene of a glowing cloud above an open hand with the heading "PROEN MULTI-CLOUD PROVIDER", cloud-vendor logos (Google-style cloud icon, Microsoft Azure, VMware, AWS) and four bullets (Multi Cloud, Public Cloud, Private Cloud, Hybrid Cloud) with small red dots. The header is transparent over it: logo (the PROEN wave-and-ring mark with "PROEN Corp / Public Company Limited") at left, then Data Center, Cloud & Edge, Cloud Native, SD-WAN, Product & Service, Investor Relations, News Update, a Menu dropdown and a circular "EN" language button.

Under the hero a light-grey band holds a "View All" outlined pill at left and a horizontal carousel of tall dark photo cards (Digital Solution, Telecommunication, Data Center, Cloud & Edge) with white titles and blue outlined "View More >" pills, plus circular blue chevron buttons at either end. Further sections carry headings such as "Product & Service" and "Artificial Intelligence (AI)" and copy like "PROEN delivers enterprise-grade …" and "Building the Backbone of Smart …". In the capture the area below the carousel is blank white; content there was not rendered, so it is not described.

Voice: English-language B2B infrastructure copy, titles in title case, short capability labels.

The visual language is technology-corporate: dark, glowing, blue-lit photography (clouds, server aisles, circuit overlays, a hand holding a tablet) set against clean white and light-grey bands. Every photograph is tinted toward deep navy so that white captions stay legible, and the single bright blue acts as the signal colour that links the photography to the interface. The hero repeats four product-level keywords in a two-by-two list, a compact way of stating the offer before any paragraph of copy appears.

## Colors

Text colours by characters: `#8b8b8b` (1,123), `#ffffff` (958), `#009de0` (526), `#aeaeae` (493), `#d6d6d6` (136), `#464646` (119), `#e3e3e3` (91), `#21759b` (15), `#00b3ff` (11). Backgrounds by area: `#373737` (1,333), `#f2f2f2` (642), `#8b8b8b0d` (396), `#f1f1f1`.

- **canvas `#ffffff`**: page background. **surface-band `#f2f2f2`**: the carousel band. **surface-footer `#373737`**: the charcoal footer (940px tall) and the largest area.
- **primary `#00b3ff`**: bright sky blue; it is the hover background of the hero nav links (the hover probe on Data Center, Cloud & Edge and Cloud Native shows text going from `#e3e3e3` to `#ffffff` and background from transparent to `#00b3ff`). **link-blue `#009de0`**: the deeper blue of section titles, h3, nav links and the "View More" label.
- **ink `#464646`** and **ink-secondary `#8b8b8b`**: body copy greys; `#8b8b8b` is the most-read text colour. **ink-soft `#aeaeae`**, **ink-pale `#d6d6d6`**, **hairline `#b7b7b7`**: footer and divider greys.
- `#21759b` (15 characters) appears only on the body element and is not used by the page's own components, so it is not treated as a brand colour.

## Typography

A single family: **IBM Plex Sans Thai** (weights 300, 400, 500, 700), with `Helvetica, Arial, Verdana, sans-serif` fallbacks. The theme also loads icon fonts (icomoon-the7-font, FontAwesome, revicons) and Roboto 700. By characters the Plex Thai family covers 3,469 of the text.

- **display**: 500, 30px/39px (h1 "Product & Service", h2 "Artificial Intelligence (AI)"); mobile 23px/34.5px.
- **subheading**: 500, 18px/24px (h3 titles in blue).
- **body**: 400, 24px/20px as measured on a paragraph element (the stylesheet sets line-height below size on this element).
- **nav**: 400, 14px/20px; **link**: 500, 14px/22px; **button-secondary**: 500, 11px/19px.

Sizes by characters: 14px (2,026), 12px (600), 24px (270), 18px (242), 13px, 30px, 32px, 16px, 47px, 20px. Weights: 400 (2,186), 500 (968), 300 (243), 700 (78). The 47px size is the hero heading scale.

## Layout

Header height 105px with 25.59px side padding; a dropdown "Menu" collects secondary items. The hero is a full-bleed slider; sections below alternate white and `#f2f2f2` bands with a left-hand caption column (the "View All" pill) and a right-hand horizontal carousel of tall cards. The footer is 940px tall, `#373737`, with 30px side padding. Spacing values: 3, 5, 8, 10, 14, 15, 20, 23, 25, 25.59px.

## Elevation & Depth

Two shadows were measured: `rgba(0, 0, 0, 0.2) 0px 0px 1px 1px` and a transparent `rgba(0, 0, 0, 0) 0px 0px 10px 0px` on the link button. Depth is photographic: dark gradient-darkened hero images and cards, with white text over them. A sticky-header scrim (`mobile-sticky-header-overlay`) was hidden at capture and is not documented.

## Shapes

Radii: 50px (8 elements), 500px (2), 50% (1), 25px (1), 100px (1). Buttons are pills ("View More" at 25px radius, "View All" and links at 100px), the language button and carousel arrows are circles. Cards in the carousel have small rounded corners in the capture; their value was not separately recorded.

## Components

- **View More (button-secondary)**: transparent with `1px solid #ffffff` (blue label on the grey band), 25px radius, 28px high, 3px 23px padding, 11px Plex Thai 500.
- **View All / link pill**: white text, 100px radius, 10px 25px padding, 46px high, 14px 500.
- **Nav link**: 14px, `#009de0`, 5px right padding; hover to a `#00b3ff` fill with white text.
- **Carousel card**: tall dark photo with white 14px title, a blue outlined pill at the bottom, chevron circle controls.
- **Language button**: grey circle "EN" in the header.
- **Footer**: `#373737`, white 14px 500 text, "PROEN CORP PUBLIC COMPANY LIMITED".

## Design System Architecture

No public design-system or brand-guideline page was opened, and none is cited. The site is built on the WordPress `the7` theme: root variables follow its naming (`--the7-h1-spacing: 10px`, `--the7-h1-line-height: 1.2em`, `--the7-btn-l-font-family` and `--the7-btn-m-font-family` set to the Plex Thai stack, `--the7-submenu-padding-left: 25px`, `--the7-top-bar-icon-size: 16px`, `--wp--preset--font-size--large: 36px`). The brand layer is a colour pair (`#00b3ff`, `#009de0`) and one typeface applied through the theme's options. Measured from `https://www.proen.co.th/web/` (`web/data/extracted/proennet.json`).

## Do's and Don'ts

- Do set all text in IBM Plex Sans Thai; use weight 500 for titles and 400 for copy.
- Do use `#009de0` for titles and links and `#00b3ff` for hover fills.
- Do keep buttons as outlined pills over photography.
- Do use `#373737` for the footer and `#f2f2f2` for light bands.
- Don't use `#21759b`, measured only on the body element, as a brand colour.
- Don't add heavy shadows; the measured ones are 1px hairlines or transparent.
- Don't place dark text on the hero photography; headings are white.
- Don't tokenise the red bullet dots; their colour was not measured.

## Responsive Behavior

The mobile pass recorded type: h1 23px/34.5px, 500, `#009de0` (from 30px), and the size distribution was 16px (1,955 characters), 24px (294), 20px (255), 18px (91), 32px (63), 23px (56). Mobile nav form, carousel behaviour and breakpoints were not measured.

## Iteration Guide

1. Canvas `#ffffff`, text `#8b8b8b` / `#464646`, brand blues `#009de0` and `#00b3ff`.
2. IBM Plex Sans Thai only: 30px/39px 500 titles, 14px 400 UI, 18px 500 subtitles.
3. Outlined pill buttons (25px or 100px radius) on photography; filled `#00b3ff` on hover.
4. Alternate white and `#f2f2f2` bands; close with a `#373737` footer.
5. Re-measure: `node web/scripts/extract-tokens.mjs --slug=proennet --url=https://www.proen.co.th --force --no-motion`, then `node web/scripts/verify-designs.mjs --slug=proennet`.
