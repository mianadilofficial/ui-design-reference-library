---
version: alpha
name: Volkswagen
category: "Automotive"
description: "Volkswagen's US home (vw.com) pairs a warm #f6f5f2 canvas and #1b2236 midnight ink with the proprietary vw-head and vw-text families, 100px pill buttons 44px tall, 12px and 8px image corners, and full-bleed vehicle hero photography on black."
colors:
  canvas: "#f6f5f2"
  ink: "#1b2236"
  primary: "#ffffff"
  on-primary: "#1b2236"
  surface-dark: "#000000"
  ink-muted: "#293043"
  ink-subtle: "#484e5f"
  ink-border: "#d0d1d5"
  primary-hover: "#ccbdab"
  brand-blue: "#001e50"
typography:
  display:
    fontFamily: vw-head, sans-serif
    fontSize: 46.304px
    fontWeight: 200
    lineHeight: 55.5648px
    letterSpacing: "-0.60608px"
  display-mobile:
    fontFamily: vw-head, sans-serif
    fontSize: 40px
    fontWeight: 200
    lineHeight: 48px
    letterSpacing: "-0.48px"
  heading:
    fontFamily: vw-head, sans-serif
    fontSize: 46.304px
    fontWeight: 700
    lineHeight: 55.5648px
    letterSpacing: "-0.60608px"
  subheading:
    fontFamily: vw-head, sans-serif
    fontSize: 25.152px
    fontWeight: 700
    lineHeight: 30.1824px
    letterSpacing: "-0.18304px"
  body:
    fontFamily: vw-text, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 12px
  md: 20px
  lg: 60px
  xl: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 1.5px
  s3: 2px
  s4: 4px
  s5: 6px
  s6: 8px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    padding: 0px 32px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    padding: 0px 32px
    height: 44px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  text-input:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    padding: 1px 32px 0px 0px
    height: 19px
  card:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview

The measured page is https://www.vw.com/en.html, titled "VW.com | Official Home of Volkswagen Cars & SUVs". It is a US retail site: a full-width hero carousel ("Welcome to you, in the 2026 Tiguan", with a second slide beginning "Today's the...") over dark vehicle photography, then an "Offers" block with two finance cards (3.9% Special APR for 60 months or a $3,000 Customer Bonus on 2026 Tiguan models; 3.9% Special APR for 72 months or a $5,000 Customer Bonus on the 2026 Atlas SE Tech FWD; both "Offer ends November 02, 2026"), then a statement headline, "Wherever you're headed, there's a Volkswagen for the way you live", with tabs for SUVs, Sedans, Compacts and Electric Vehicles and a carousel of model cards (Atlas, Atlas Cross Sport, Tiguan) that show MSRP lines, safety badges and paired "Meet the ..." and "View Offers" pill buttons.

The voice is short and second-person ("Welcome to you"). Layout alternates two surfaces: a black hero and a warm off-white (`#f6f5f2`) body. The result is a car-showroom feel: large photography, restrained midnight-navy text, generous white space around each offer and very few decorative elements. Pills and soft-cornered photos are the signature shapes.

## Colors

The page background is `#f6f5f2` (measured on 11,580 weighted area units, second only to black at 12,299 from the hero). The main text color is `#1b2236`, a dark blue-black used for headings and body on the canvas; supporting ink steps are `#293043` (the body-level color), `#484e5f` and a light `#d0d1d5` that also appears as a border color. White `#ffffff` is the most-read text color overall because the hero and nav sit on dark imagery.

Buttons in the measured set are white pills with `#1b2236` text. On hover the measured fill moves from `#ffffff` to `#ccbdab`, a warm sand; that is the `primary-hover` token. Because the extractor's primary action fill is white, `primary` is `#ffffff` and `on-primary` is `#1b2236`. The brand blue `#001e50` appears in the body's child colors and in the shipped CSS corpus, so it is kept as `brand-blue`, but its role is not measured on a specific element.

The capture also shows yellow filled "View Offers" pills under each model card. That yellow was not among the measured background colors, so it is not tokenized. The CSS corpus also lists `#f08203` and `#c86c03` orange values, which are not tokenized because no element using them was measured. The browser-default link color `#0000ee` (counted at 1,192 characters) is not a brand color and is dropped.

## Typography

Two proprietary families, both declared as web fonts (`vw-head`, `vw-text`, plus `vw-text-ar` and `roboto-vi` for other scripts), carry the site. `vw-head` sets headlines: the hero h1 is 46.304px at weight 200 with 55.5648px line height and −0.60608px tracking, while the "Offers" h2 uses the same size at weight 700. Card titles use 25.152px at weight 700 with −0.18304px tracking. `vw-text` sets everything else: body at 16px/24px weight 400, plus the 14.08px size used for most small copy (the most frequent size by characters after 16px) and a 20px size.

The weight contrast is a deliberate brand device: a 200-weight hero headline over 700-weight section headlines. Letter spacing tightens as size grows. Measured sizes by weight are 16px (3,047), 14.08px (2,135), 20px (646), 25.152px (426) and 46.304px (349).

Font substitutes: vw-head and vw-text are proprietary; use a clean geometric sans at weights 200, 400 and 700 and keep the tracking values above.

## Layout

The page is long (7,092px tall at a 1280px viewport) and stacked. The hero is full-bleed; below it content is centered in a column of two-up offer cards and a four-card model carousel. The measured gap values are 4px, 8px, 12px, 16px, 20px, 24px and 40px; measured paddings include 4px, 16px, 32px (pill side padding), 40px, 53.248px, 68px and 106.624px. The pill buttons are 44px tall with 0px 32px padding.

A header holds the logo, "Menu", "Offers", "Find a Dealer" and "Search Inventory", with search and account icons at the far right. The hero carousel peeks the next slide at the right edge and has a pause control.

## Elevation & Depth

Depth is mostly photographic. The only measured box shadow is a hairline ring, `rgb(231, 232, 234) 0px 0px 0px 1px`, found twice. Overlays are translucent: `#11192e99` and `#ffffff33` fills appear in the background list, and the hero image carries a dark gradient behind the text. Hover on the white pill swaps the fill rather than adding elevation.

## Shapes

Radius is the clearest shape system. Measured radii: 100px (21 elements, the pills), 12px (18), 8px (6), 20px (6), 50% (3, round icon buttons), 60px (1) and a bottom-only `0px 0px 20px 20px` (1). Tokens: `xs` 8px, `sm` 12px, `md` 20px, `lg` 60px, `xl` 100px and `pill` 9999px. Buttons use `xl`; model and offer photos use the 8px to 12px steps; round controls (carousel arrows, pause) use 50%.

## Components

**Primary pill:** white fill, `#1b2236` text, `vw-text` 16px, 100px radius, 44px height, `0px 32px` padding, e.g. "Search Inventory", "Show 59,389 results", "Visit Owners Section". Hover fill `#ccbdab`. Link border color is `#1b2236` in the measured hover pair.

**Secondary pill:** same measurements in the extraction; in the capture it appears outlined for "Meet the Atlas" with a filled yellow "View Offers" below it (yellow not measured).

**Header navigation:** white text on the hero in `vw-text` 16px, with a transparent button for "Menu".

**Text input:** a header search field with 19px height and a `1px 32px 0px 0px` padding.

**Offer card:** a photo above a small label ("2026 Tiguan Models"), a 25.152px bold offer headline, an end date, and an underlined "View offer details" link.

**Tabs:** SUVs, Sedans, Compacts, Electric Vehicles, with an underline on the active tab.

## Design System Architecture

No public Volkswagen design system or brand guideline was linked from the home page; the page source contains no design-system link, and the only GitHub references are third-party libraries. The de-facto system is the shipped markup and CSS: two named typefaces (`vw-head`, `vw-text`), a single root variable (`--100vh`), and media queries declared in the HTML at `min-width` 560px, 960px, 1280px, 1920px and 2560px plus `max-width:1279px`. Tokens in this file come from the live measurement of https://www.vw.com/en.html, not from a published source.

## Do's and Don'ts

- Do set headlines in `vw-head`, light (200) for hero statements and bold (700) for section titles.
- Do use 100px pill buttons at 44px height with 32px side padding.
- Do alternate a dark photographic hero with the warm `#f6f5f2` canvas.
- Don't use browser-default `#0000ee` links.
- Don't add heavy shadows; the page uses a 1px ring at most.
- Don't mix the radius steps arbitrarily: pills for actions, 8px to 12px for imagery.
- Don't tokenize the yellow offer button or the orange CSS values until measured on an element.

## Responsive Behavior

The extraction's mobile pass measured these values: h1 40px at weight 200 with 48px line height and −0.48px tracking (the `display-mobile` token), h2 40px at weight 700, body 16px/24px, and the primary pill still 44px tall with 100px radius and 0px 32px padding at a 240px width. The mobile hero h1 box was 358px wide and 96px tall. The HTML declares breakpoints at 560px, 960px, 1280px, 1920px and 2560px; what each one rearranges is not measured.

## Iteration Guide

1. Begin with `#f6f5f2`, `#1b2236` and white; add `#ccbdab` only for the hover state.
2. Use the two weight extremes of the heading face; avoid mid weights for headlines.
3. Keep tracking negative on large type (−0.60608px at 46.304px).
4. Make every action a 44px pill; make photos 8px to 12px rounded.
5. Measure any new color (such as the yellow offer pill) on a real element before adding it.
6. Check the 40px mobile heading and 16px/24px body before approving small-screen layouts.
