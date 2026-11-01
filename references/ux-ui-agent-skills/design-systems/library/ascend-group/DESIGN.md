---
version: alpha
name: Ascend Group
category: "Thai Brands"
description: "Ascend Group is the Bangkok-based Ascend corporate site: Anuyart type (48px bold uppercase headlines, 14px body), a brand red #ed1c24 header and buttons with 3px radius, white and light-grey #e5e5e7 bands, rounded 20px image cards, and a page-wide grayscale(1) CSS filter on the live site at measurement time, removed for the colour capture."
colors:
  canvas: "#ffffff"
  ink: "#222222"
  primary: "#ed1c24"
  on-primary: "#ffffff"
  surface-grey: "#e5e5e7"
  ink-nav: "#333333"
  ink-4: "#4f4f4f"
  ink-muted: "#828282"
  hairline: "#bdbdbd"
typography:
  display:
    fontFamily: Anuyart
    fontSize: 48px
    fontWeight: 700
    lineHeight: 62.4px
  subheading:
    fontFamily: Anuyart
    fontSize: 24px
    fontWeight: 400
    lineHeight: 31.2px
  body:
    fontFamily: Anuyart
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.4px
  nav:
    fontFamily: Anuyart
    fontSize: 16px
    fontWeight: 700
    lineHeight: 25.6px
  button:
    fontFamily: Anuyart
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28.8px
rounded:
  xs: 3px
  sm: 20px
  md: 50px
  pill: 9999px
spacing:
  s1: 5px
  s2: 6px
  s3: 7.2px
  s4: 8px
  s5: 9px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 7.2px 18px
    height: 43px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
  text-input:
    textColor: "{colors.ink-muted}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 6px
    height: 37px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(0, 0, 0, 0.16) 0px 0.5px 2px 0px
  footer:
    textColor: "{colors.ink}"
---

## Overview

Ascend Group's corporate site, as read through the page fetch, describes the group as a Southeast Asian digital services company under the Charoen Pokphand Group with four businesses: Ascend Money, Ascend Commerce, True Internet Data Center and Ascend Bit. Its stated mission, which is also the homepage's central headline, is "Our mission is to create life opportunities for all through digital services and infrastructure".

Measurement note: at the time of measurement the live site applies a page-wide `grayscale(1)` CSS filter (recorded by the extractor as `siteFilterRemovedForCapture`). The extractor captured the page with that filter removed, so the capture and the values below describe the page in colour; the computed colour values are the stylesheet's real values (for example the header variable `--s-head-bg` is `{colors.primary}`).

Compositionally the homepage is a clean corporate page: a red header bar with the lowercase "ascend" wordmark and uppercase links (About us, Our business, Corporate governance, Career, Around Ascend, search), a full-width black band whose large centred headline "We Create a GLOBAL Impact" sets one word in red and the rest in white (the largest background area measured is `#000000e8`, then white `#ffffff`, then `{colors.surface-grey}`), a centred uppercase mission headline, a two-column "Company & brands" block with two photographs in rounded frames overlapping a large circular graphic, and a red circular graphic partly behind the photographs, and a light-grey band of four tall photo cards, each tinted in its own colour (orange, pink, blue and a muted taupe), titled Fintech, E-commerce & tech solutions, Data centers & cloud service, and Blockchain technology.

Photography is documentary and people-centred: colleagues around a table in an office with a city skyline, and two young people looking at a tablet together. Business cards show product-related imagery (a payment terminal, a parcel packer, a data-centre skyline, a hand holding a phone) under a coloured tint with a centred white uppercase label. Copy is formal and mission-led, written in English for a regional audience, and avoids marketing hyperbole; it speaks of ecosystems, platforms and the betterment of customers and businesses.

## Colors

- **Ascend red `{colors.primary}`**: header background variable, primary button fill and header hover fill (measured: hovering "ABOUT US" and "OUR BUSINESS" fills them with rgb(237, 28, 36)).
- **White `{colors.canvas}`**: page background; text on red.
- **Ink `{colors.ink}`** (#222222, the site's `--s-text-1`): headings and body copy; `{colors.ink-nav}` (#333333) for navigation text; `{colors.ink-4}` and `{colors.ink-muted}` for subdued copy.
- **Light grey `{colors.surface-grey}`**: the band behind the business cards (`--s-bg-2` is a slightly lighter #f5f5f7 in the CSS).
- **Hairline `{colors.hairline}`**: borders.

The WordPress preset palette (vivid purple, cyan, luminous orange) and Kadence palette variables also appear in the CSS but are framework defaults and not used on the measured page.

## Typography

The primary face is Anuyart, self-hosted in weights 300, 400 and 700 (the CSS `--s-heading-weight` is 700). The fallback stack from `--s-body` is -apple-system, "Helvetica Neue", sans-serif, which is used for a small number of elements such as the form button.

- **Display** (`{typography.display.fontSize}` / `{typography.display.lineHeight}`, bold): the uppercase mission headline.
- **Subheading** (`{typography.subheading.fontSize}` / `{typography.subheading.lineHeight}`): the second line "Through digital services and infrastructure" and card titles.
- **Body** (`{typography.body.fontSize}` / `{typography.body.lineHeight}`): paragraphs, the single most common size on the page.
- **Button** (`{typography.button.fontSize}` / `{typography.button.lineHeight}`): button labels.

Headlines are set in uppercase in the content rather than through text-transform. Anuyart is proprietary to the site; Kanit or Prompt, both free Thai-capable geometric sans families, would be reasonable substitutes.

## Layout

The page is 1280px wide and about 4,328px tall in the capture. The CSS declares `--gb-container-width: 1100px` and `--s-head-height: 50px`, `--s-gap: 16px`. Content alternates centred single-column statements with split text and image rows, then a four-up card grid inside a full-width grey band. Spacing steps measured include `{spacing.s1}`, `{spacing.s4}`, `{spacing.s6}`, `{spacing.s8}`, `{spacing.s9}` and `{spacing.s10}`.

## Elevation & Depth

One shadow was measured: rgba(0, 0, 0, 0.16) 0px 0.5px 2px 0px, a hairline lift used on cards (the CSS variable `--s-shadow-1`). A softer `--s-shadow-2` of 0 4px 12px rgba(0, 0, 0, 0.08) is declared. Depth otherwise comes from the overlap of the two photographs and the large circle behind them.

## Shapes

Radii on the page: `{rounded.xs}` (the site's `--s-rounded-1`), `{rounded.sm}` for photo cards, and `{rounded.md}` plus circular 50% shapes for the graphic. Buttons are only slightly rounded rectangles, while photographs and cards are noticeably rounder, so soft imagery contrasts with firm controls.

## Components

- **Primary button** (`button-primary`): fill `{colors.primary}`, white Anuyart label at `{typography.button.fontSize}`, padding 7.2px 18px, 43px high, radius `{rounded.xs}`; chevron icon at right. In the capture the "See positions" and "Around Ascend" buttons are this style (red fill, white label). A separate small "Submit" button in a form (16px system font, padding 5px 15px, 31px tall) is a form control, not the primary CTA.
- **Navigation**: uppercase links; hover shows a red fill.
- **Card** (`card`): white or photo-filled, radius `{rounded.sm}`, shadow as above; titles centred in white uppercase over a colour-tinted photograph.
- **Text input**: Anuyart 18px, 37px tall, radius `{rounded.xs}`.

## Design System Architecture

No public design system for Ascend was found; the group's own pages (https://www.ascendcorp.com/ and https://www.ascendcorp.com/about-us/) describe the business, not the interface. The de-facto system is a WordPress theme with its own `--s-*` variables: `--s-head-bg`, `--s-head-text`, `--s-head-hover`, `--s-nav-text`, `--s-text-1`, `--s-text-2` (#71767f), `--s-bg-2`, `--s-rounded-1` (3px), `--s-rounded-2` (5px), `--s-shadow-1`, `--s-shadow-2`, `--s-heading-weight` (700) and accent colours `--s-color-3` (#47be9d), `--s-color-5` (#ffa900), `--s-color-6` (#ff4d00), `--s-noti` (#f54600). Layered on top are Kadence (`--global-kb-*`) and WordPress core (`--wp--preset--*`) variables.

Because the theme exposes these names, a faithful rebuild can map them directly to tokens: head background to `{colors.primary}`, head text to white, text-1 to `{colors.ink}`, nav text to `{colors.ink-nav}`, rounded-1 to `{rounded.xs}`. Any new component should reuse that vocabulary instead of inventing new colour names, and should be checked against the measured homepage before it is documented as part of the brand.

## Do's and Don'ts

- Do use red for the header, button fills and hover states.
- Do set headings in bold uppercase Anuyart.
- Do use a 3px radius on buttons and larger radii on photographs.
- Do alternate white and light-grey bands.
- Don't take colours from the live site without checking it: it applies a page-wide `grayscale(1)` filter at measurement time, so read computed values with the filter removed.
- Don't use the stray WordPress preset colours.
- Don't round buttons into pills.

## Responsive Behavior

The extraction includes a 390px mobile pass, but the measured mobile heading data came from a navigation element, so no mobile type scale is claimed. The theme variables use clamp() for large type (`--global-kb-font-size-xxl` is clamp(2.5rem, 1.456rem + 3.26vw, 4rem)), indicating fluid heading sizes, and `--s-nav-width` is 280px for an off-canvas navigation.

Navigation items that open sub-menus (Our business and Career) carry a small caret beside the label, and the search control at the far right is a white circular icon on the header bar. Both are simple utility patterns and should stay visually quieter than the buttons in the content area.

## Iteration Guide

1. Build with white background and `{colors.ink}` text in Anuyart at `{typography.body.fontSize}`.
2. Add a red header and red buttons with 3px radius.
3. Use bold uppercase headings at `{typography.display.fontSize}` for the main statement.
4. Insert a light-grey band for card grids with photographs at `{rounded.sm}`.
5. The live site applies a page-wide `grayscale(1)` filter at measurement time; remove it before capturing again.
6. Re-measure any new element before adding tokens.
