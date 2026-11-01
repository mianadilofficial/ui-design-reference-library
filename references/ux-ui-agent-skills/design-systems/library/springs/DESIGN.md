---
version: alpha
name: "Springs"
category: "Architecture & Interiors"
description: "Springs (springs.estate), a premium residential development site: Victor Serif display at 100px/120px with -2px tracking, TT Commons Pro 20px body and 10px uppercase nav, deep green #162d24 canvas, beige #e0d1b6 ink and a #f5e8d1 cream page body."
colors:
  canvas: "#162d24"
  page-body: "#f5e8d1"
  ink: "#e0d1b6"
  primary: "#e0d1b6"
  surface-3: "#101e27"
  ink-secondary: "#f5e8d180"
typography:
  display:
    fontFamily: "\"Victor Serif\", Helvetica, Arial, sans-serif"
    fontSize: 100px
    fontWeight: 400
    lineHeight: 120px
    letterSpacing: "-2px"
  display-mobile:
    fontFamily: "\"Victor Serif\", Helvetica, Arial, sans-serif"
    fontSize: 50px
    fontWeight: 400
    lineHeight: 55px
    letterSpacing: "-1px"
  heading:
    fontFamily: "\"Victor Serif\", Helvetica, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 50px
  subheading:
    fontFamily: "\"Victor Serif\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: "-0.64px"
  body:
    fontFamily: "\"TT Commons Pro\", Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: "-0.4px"
  nav:
    fontFamily: "\"TT Commons Pro\", Helvetica, Arial, sans-serif"
    fontSize: 10px
    fontWeight: 500
    lineHeight: 14px
    letterSpacing: 0.8px
    textTransform: uppercase
rounded:
  xs: 13.33px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3.2px
  s3: 4.44px
  s4: 5px
  s5: 6.4px
  s6: 8.89px
  s7: 13.33px
  s8: 16px
  s9: 17.78px
  s10: 22.22px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    borderColor: "{colors.ink}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
---

# Springs

Springs is the marketing site of a residential development by UNIQ Development, with architecture by Tabanlioglu and interiors by Quadro Room; the site credits Vide Infra (from the page text opened with WebFetch at `https://springs.estate/`). The measured page title is "Springs | Homepage", English (`lang` en), 25,665px tall with 634 visible elements, so it is a long, sparse, image-led scroll. The extractor found no primary, secondary or outlined CTA on the home page, and no input, footer or card role, so components below are limited to what was measured: the navigation, a circular icon link and the type and color system, plus the button variables declared in the site's CSS.

## Overview

The identity is a forest-green and cream palette set in a high-contrast serif. The first screen is a tilted collage of tall photographs (water, leaves, grass, a stepped facade) under a green gradient, with the logotype "Springs" and a swirl mark at the top centre, the small links MENU and RESIDENCES at the left, and the headline "Splendor of Renewal" at the right in large Victor Serif. A short line of English sits at the left: "Exclusive residence with a rich wellness infrastructure next to Nature Park". Below the first screen the capture shows a single architecture photograph and then flat deep green; the long page beyond is not visible in the capture.

Voice, from the page text: calm, sensory, second person ("Do you sense the aroma...?", "Breathe in the air and open space"). Section names are Residences, Wellness, Nature, Place, Design and Interiors; sub-headings include "Essence of Self-Care", "Lightness of Breathing" and "Inspired Architecture". Button labels seen in the page text are "Search flats", "Available soon", "Contact us", "Submit a request", "Subscribe", "Send to mail", "Find more matching residences" and "Visual search".

## Colors

The page alternates two large fields, measured by background area: cream `#f5e8d1` (area weight 15,921) and deep green `#162d24` (14,633), followed by dark blue `#101e27` (1,174) and mid green `#1b4732` (1,024).

- `canvas` `#162d24`: the deep green field behind the hero and dark sections.
- `page-body` `#f5e8d1`: the cream field of the light sections (CSS `--c-beige-background`).
- `ink` and `primary` `#e0d1b6`: beige text on green (CSS `--c-beige`); also the color of the 1px outline on the circular link. Text on cream is `#162d24`.
- `ink-secondary` `#f5e8d180`: cream at 50% opacity, the most-read text color (644 characters) used for the quieter body lines.
- `surface-3` `#101e27`: dark blue panel (CSS `--c-dark-blue`).

The CSS root also declares a wider palette that this page uses sparingly or not at all in the measured elements: `--c-light-green #a7b431`, `--c-olive #758535`, `--c-blue #005160`, `--c-light-blue #67bfda`, `--c-sky #bee5ee`, `--c-black #030303`, `--c-white #fff` and `--c-error #e1c35b`. They are listed here because they are in the shipped stylesheet, not because they appeared in the capture.

## Typography

Two families, both loaded: Victor Serif (400) for display and headings, and TT Commons Pro (400 and 500) for text and navigation, each with a Helvetica, Arial, sans-serif fallback.

- `display`: Victor Serif 100px, weight 400, line-height 120px, letter-spacing -2px (the h1 "Splendor of Renewal"). `display-mobile`: 50px, line-height 55px, -1px, from the mobile pass.
- `heading`: Victor Serif 40px, line-height 50px (h2 "Open the doors of Springs and step into your true self").
- `subheading`: Victor Serif 32px, line-height 32px, -0.64px (h3, set in `#162d24` on cream).
- `body`: TT Commons Pro 20px, weight 400, line-height 26px, -0.4px.
- `nav`: TT Commons Pro 10px, weight 500, line-height 14px, 0.8px tracking, uppercase.

Weights by characters: 500 (739) and 400 (637). Characters by family: TT Commons Pro 1,211 and Victor Serif 165, so the page is mostly small uppercase labels with a few very large serif lines. Tracking is negative on every size above 10px and positive on the 10px labels. Both typefaces are commercial; no free substitute is declared by the site. A fallback of Helvetica or Arial is what the stylesheet itself names.

## Layout

Measured gaps are 53.33px, 26.67px, 17.78px, 8.89px and 4.44px; paddings are 17.78px (44 elements), 3.2px (44), 6.4px (22), 53.33px (17), 16px (6) and 320px (3). The generated spacing scale is 2, 3.2, 4.44, 5, 6.4, 8.89, 13.33, 16, 17.78 and 22.22px. The CSS declares a `--spacing` scale in `calc(var(--scale-px) * 80)` steps for the largest layout tier, and container variables (`--container-max-width: 100vw`, `--grid-gutter: 0vw`), so the page is full-bleed with no outer gutter variable. Composition in the capture: header across the top with the logo centred, a headline block right-aligned at the lower right of the hero, a descriptive paragraph at the left, a circular down-arrow at the lower left. The header measures 90px high on desktop.

## Elevation & Depth

No box shadow was measured. Depth comes from image layers, translucent gradients over photographs, and tonal steps between `#162d24`, `#1b4732` and `#101e27`. The CSS declares two hover gradients: a light one `linear-gradient(101.51deg, rgba(27,71,50,0) 37.02%, #1b4732 308.4%)` and a dark one `linear-gradient(91.82deg, hsla(39,40%,80%,0) 20.31%, hsla(39,40%,80%,.15) 90.77%)` (variable names `--c-button-hover-gradient-light` and `--c-button-hover-gradient-dark`).

## Shapes

Radii measured: `100%` (4 elements), `50%` (4) and `13.3333px` (2). The tokens are `xs: 13.33px` and `pill: 9999px`. Circular elements are the down-arrow control in the hero and the swirl mark. Borders measured: `#e0d1b6` (5 elements), `#e0d1b61a` (3), `#e0d1b633` (2) and `#162d24` (1); the circular link uses `1px solid #e0d1b6`.

## Components

- **Header links.** MENU (with a two-line burger glyph), RESIDENCES and CONTACT US, all 10px uppercase `nav` in `ink`. Hover on MENU measured no color change (beige before and after).
- **Circular link.** 27px high, `1px solid #e0d1b6`, radius 100%; the hero's down-arrow.
- **Buttons (CSS variables).** The stylesheet declares primary (`--t-button-primary-background #162d24`, text `#e0d1b6`, hover and active background `#1b4732`, disabled background `rgba(27,71,50,0.4)`), outline (border `#162d24`, active-state fill `#162d24` with text `#f5e8d1`), link, tab and tooltip-link variants, and disabled text `rgba(22,45,36,0.4)`. No button was rendered in the measured viewport, so these are CSS declarations, not measured elements.
- **Logo.** "Springs" in a light serif with a circled S-swirl at the right.

## Design System Architecture

No public design system or brand guideline exists in the pages opened; `_research` records the home page only. The de-facto system is a themed CSS custom-property layer: `--c-*` raw palette names (dark-green, green, light-green, olive, dark-blue, blue, light-blue, sky, beige, beige-background, black, white), each with an `-rgb` twin; `--t-*` theme roles (`--t-background #f5e8d1`, `--t-text #162d24`, `--t-heading #162d24`, `--t-primary #162d24`, `--t-secondary #1b4732`, `--t-line rgba(22,45,36,0.2)`, `--t-small rgba(22,45,36,0.4)`); and `--t-button-*` state variables. Viewport units are wrapped as `--vw`, `--dvh`, `--lvh`, `--svh` with a `--cookie-height` offset, and visibility helpers such as `--is-visible--md-up` encode breakpoint tiers sm, md, xl, xxl and xxxl.

## Do's and Don'ts

Do set display text in Victor Serif with negative tracking and generous 1.2 line-height at 100px. Do use `#e0d1b6` on green and `#162d24` on cream. Do keep navigation at 10px uppercase with 0.8px tracking. Do let tall photographs fill the first screen. Do write short, sensory second-person lines.

Don't add drop shadows; none are measured. Don't use bold weights; only 400 and 500 are loaded. Don't use the secondary palette (olive, sky, light blue) as large surfaces; the measured areas are green and cream. Don't round cards beyond 13.33px, except circular controls.

## Responsive Behavior

Measured by the mobile pass: h1 Victor Serif 50px, line-height 55px, -1px tracking (100px on desktop); h2 26px with 30.2px line-height (40px on desktop); body text 16px with 18px line-height and -0.32px tracking in `#162d24` (20px on desktop); header 50px high (90px on desktop); mobile font sizes by characters: 16px (2,212), 26px (991), 8px (625), 10px (392), 14px (53). The stylesheet's `--is-visible--*` variables define visibility tiers by breakpoint. Mobile navigation structure and column counts were not measured.

## Iteration Guide

1. Choose a field: `canvas` green with `ink` beige, or `page-body` cream with `#162d24` text.
2. Set headings in Victor Serif, tight tracking; text in TT Commons Pro 20px/26px.
3. Use 10px uppercase labels for navigation and tags.
4. Use full-bleed imagery; avoid shadows; use circular outlined arrows.
5. Gate with `node web/scripts/verify-designs.mjs --slug=springs`.
