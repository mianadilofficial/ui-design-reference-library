---
version: alpha
name: OCBC Group
category: "Thai Brands"
description: "OCBC Group about-us page (the URL queued for OCBC Thailand): OCBC Red #e30613 accent bars, Geomanist 36px light display with OpenSans 18px body, slate-ash ink #363b40 and #3d525d, link blue #005efd, 5px radii, and award cards with a 0 2px 15px 8px 2% black shadow on a white canvas."
colors:
  canvas: "#ffffff"
  ink: "#363b40"
  ink-heading: "#3d525d"
  ink-nav: "#567180"
  ink-secondary: "#575d65"
  ink-footer: "#2d3d45"
  primary: "#e30613"
  on-primary: "#ffffff"
  link-blue: "#005efd"
  surface-ash: "#fafcfc"
  surface-warm: "#edeae5"
  hairline: "#d3dae1"
typography:
  display:
    fontFamily: Geomanist, Helvetica, Arial, sans-serif
    fontSize: 36px
    fontWeight: 300
    lineHeight: 54px
  display-mobile:
    fontFamily: Geomanist, Helvetica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 300
    lineHeight: 42px
  heading:
    fontFamily: OpenSans, Helvetica, Arial, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 45px
  body:
    fontFamily: OpenSans, Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  link:
    fontFamily: OpenSans, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
rounded:
  xs: 5px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 20px
  s8: 40px
  s9: 80px
  s10: 114px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-nav}"
    boxShadow: rgba(0, 0, 0, 0.02) 0px 2px 15px 8px
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 40px 20px
    boxShadow: rgba(0, 0, 0, 0.02) 0px 2px 15px 8px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-footer}"
    padding: 80px 0px 40px
---

## Overview

The URL queued for OCBC Thailand, https://www.ocbc.com/group/about-us/group-business.page, is the OCBC Group "Who We Are" page (page title "Singapore's Best Bank - Who We Are | OCBC"), not a Thailand-specific site. The design file is therefore named after the measured site, OCBC Group, and describes the group's web design as seen on that page.

The page opens with a white header (the red-and-white OCBC logo on the left, a thin red vertical bar at the very left edge, a "You are in OCBC Group" selector, and navigation: About Us, Media, Investors, Sustainability, Careers, Research). Under it, a pale hero with a light-weight headline "Purpose is about lifting others." sits beside a photograph of a young woman showing a tablet to an older woman, and a floating white tab card with six icon links (Group business, Corporate strategy, Our leadership, Purpose, values and ambition, Our brand, Awards) overlaps the hero's lower edge. Below follow editorial blocks, each introduced by a short red rule and an uppercase, widely tracked eyebrow ("TOGETHER, LIFTING EVERYONE WE SERVE", "WHO WE ARE", "OUR ACHIEVEMENTS"), a video with a vertical thumbnail list, long-form copy on a pale-grey band, and a row of award cards. The tone is confident and human: "Purpose is about lifting others", real people in warm domestic settings, many of them wearing red.

OCBC's own brand page (https://www.ocbc.com/group/about-us/our-brand.page, opened) states the principles behind the look: "The OCBC brand has always been defined by the colour red", and "Geomanist, a contemporary and highly legible font, is used to unify the appearance of all OCBC communications."

## Colors

- **primary #e30613** is OCBC Red. The brand page names the red as the defining brand colour; the hex value is the page's own CSS variable `--ocbc-red` (with a `--red-2` #cb2d3e used in the red gradient). It appears as the small red rules above section eyebrows, the left edge bar and the logo. It replaced the generated primary, the link blue.
- **link-blue #005efd** (`--royal-blue-100`) is the measured colour for inline links such as "industry accolades" and is the generated primary candidate; it is a link colour here, not the brand colour.
- **canvas #ffffff** is the page; **surface-ash #fafcfc** (`--ash-5`) is the large quiet band behind the Who We Are copy (about 2,800 area units) and **surface-warm #edeae5** is a warm neutral (410 units).
- **ink #363b40** (`--grey-800`) is the running text colour (about 5,000 characters). **ink-heading #3d525d** (`--ash-100`) colours the H2 and card headings, **ink-nav #567180** (`--ash-60`) the navigation, **ink-secondary #575d65** (`--grey-700`) secondary text, **ink-footer #2d3d45** (`--ash-200`) footer text.
- **hairline #d3dae1** (`--grey-300`) is the border colour; **on-primary #ffffff** is the white used on dark or red.

The root variables also list product accent colours (green #21d2a3, blue #1086cb, orange #f2bd5b, gold #6d573e, premier bronze #806c58) with matching `--gradient-*` definitions; they belong to product lines and were not seen in the page's measured text, so they are not promoted here.

## Typography

Two families, as published on the brand page and in the CSS variables: **Geomanist** (`--font-geomanist`) for display and **OpenSans** (`--font-opensans`) for everything else; a third, TheSansC4s, is declared but not used in the measured text. The H1 "Purpose is about lifting others." is Geomanist 36px / weight 300 / 54px line-height (28px / 42px on mobile). The H2 is OpenSans 30px / 700 / 45px, the body is OpenSans 18px / 400 / 27px, and links are 16px / 700 / 24px. Eyebrow labels are measured at 14px with 5px letter-spacing in uppercase (113 characters); their weight and line height were not recorded separately, so no eyebrow token is declared. Sizes by character count: 18px (2,986), 16px (1,487), 24px (814), 14px (329), 30px (74), 36px (32). Weights: 400 (4,462 characters), 700 (1,228), 300 (32). The fallback stack is Helvetica, Arial, sans-serif.

## Layout

The CSS exposes the container scale: `--width-1` 1080px, `--width-2` 1060px, `--width-3` 1470px, `--width-4` 1250px, `--width-5` 1440px, `--width-6` 1140px, `--width-7` 940px; the header height is `--header-height` 114px; breakpoints are 576px, 768px, 992px and 1200px (`--breakpoint-sm` to `-xl`). The measured desktop page is 1280px wide and 6,759px tall. Copy is set in a narrow left-aligned reading column inside a wide container, with large vertical gaps: paddings measured include 40px (47 uses), 12px (35), 20px (33), 10px, and the 80px footer top padding. A tab card overlaps the hero edge, and award cards sit in a three-up row.

## Elevation & Depth

Shadows are barely there: `rgba(0, 0, 0, 0.02) 0px 2px 15px 8px` (24 uses) is the standard soft lift for the navigation and cards, and a slightly firmer `rgba(0, 0, 0, 0.1) 0px 0px 10px 0px` appears once. Separation is mostly achieved with tone (white against #fafcfc bands) and whitespace, giving the surfaces a floating, airy quality.

## Shapes

The radius token is `--bd-radius: 5px`, matched by measurement (5px on 28 elements). Circles (50%, 5 uses) appear on icon and thumbnail controls, and one component has a right-side-only rounding of `0px 5px 5px 0px`. Cards and tab panels have small rounded corners; the red accent rules above eyebrows are short straight bars.

## Components

- **Tab card**: white, 5px radius, soft shadow, six icon-over-label tabs with a dark underline on the active tab (Group business).
- **Section eyebrow**: a short red rule above an uppercase, 14px, 5px-tracked label.
- **Award card**: white, 5px radius, padding 40px 20px, the soft shadow, bold OpenSans title and a regular-weight citation.
- **Video block**: a large video player with a vertical stack of three thumbnails (Beyond a lifetime, Where dreams take flight, Recipe for success) with white captions.
- **Navigation**: white bar, #567180 labels at 16px, with a dark underline on the active item.
- **Inline link**: #005efd.
The measured page has no filled primary button, so none is declared.

## Design System Architecture

No separate public design-system site or token package was found. The brand page at https://www.ocbc.com/group/about-us/our-brand.page is the official reference, covering the logo (the sixth-generation logo, unveiled 3 July 2023, with a stylised Chinese junk-ship mark in a bold "O"), the red colour, Geomanist typography, the tagline "For now, and beyond" and a contact point for brand-asset usage. The shipped CSS has a real token layer in `:root` (127 variables): colour scales (`--ash-5` to `--ash-300`, `--grey-100` to `--grey-800`, `--royal-blue-100` to `-300`), named brand colours (`--ocbc-red`, `--red-2`, `--gold`), gradients, font families, container widths, `--spacing` 0.25rem with `--spacing-sm` 8px and `--spacing-md` 12px, breakpoints and `--bd-radius`. New work should consume these variables rather than literal values.

## Do's and Don'ts

- Do use OCBC Red #e30613 sparingly as a signal: logo, accent rules, small marks.
- Do pair Geomanist light display with OpenSans body, per the brand page.
- Do set eyebrows in uppercase with 5px tracking, topped by a short red rule.
- Do use 5px radii and the 2% black soft shadow on cards.
- Don't use the product accent colours (green, orange, gold) as OCBC brand colours.
- Don't use the link blue #005efd as a brand colour.
- Don't stack heavy shadows or hard borders on cards.
- Don't alter the logo; contact the brand team for assets.

## Responsive Behavior

The mobile extraction at 390px shows the Geomanist display dropping to 28px / 42px and the body to 16px. The CSS defines breakpoints at 576, 768, 992 and 1200px. Other responsive behaviour (tab-card wrapping, navigation collapse) was not measured and is not documented.

## Iteration Guide

1. Load the CSS variables first: colour scales, `--ocbc-red`, spacing and `--bd-radius`.
2. Set Geomanist 300 for the H1 and OpenSans for all other text; body at 18px.
3. Open sections with a red rule and a tracked uppercase eyebrow.
4. Build cards with a 5px radius, white fill and the 2% shadow.
5. Keep palettes of products (green, orange, gold) inside their own product pages.
6. Re-measure when imagery changes; photography is always people-led and warm.
