---
version: alpha
name: "GKC Architecture & Design"
category: "Architecture & Interiors"
description: "Canadian architecture firm site with a #ffffff canvas, #151f26 dark navy ink, ABCDiatype at 66.6667px display with -2.66667px tracking, 31.1111px body, hairline #a2a2a2 rules, square 0px corners everywhere, 75px rectangular white and navy buttons and full-bleed building photography."
colors:
  canvas: "#ffffff"
  ink: "#151f26"
  primary: "#ffffff"
  on-primary: "#151f26"
  ink-grey: "#a2a2a2"
typography:
  display:
    fontFamily: ABCDiatype, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 66.6667px
    fontWeight: 400
    lineHeight: 66.6667px
    letterSpacing: "-2.66667px"
  display-mobile:
    fontFamily: ABCDiatype, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 50px
    fontWeight: 400
    lineHeight: 50px
    letterSpacing: "-2px"
  subheading:
    fontFamily: ABCDiatype, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 26.4px
  body:
    fontFamily: ABCDiatype, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 31.1111px
    fontWeight: 400
    lineHeight: 31.1111px
    letterSpacing: "-0.622222px"
  button:
    fontFamily: ABCDiatype, -apple-system, "system-ui", "avenir next", avenir, "segoe ui", "helvetica neue", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 3.2px
  s3: 5px
  s4: 10px
  s5: 14.22px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28.44px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 75px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 75px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 24px 20px 28.4444px
---

## Overview

GKC Architecture & Design (gkc.ca/en) is a Canadian architecture and interior design practice. Its measured home page is a monochrome, editorial layout in which large photographs and very large typography replace any decoration. The page opens with a full-bleed hero photograph of a glass-fronted distribution building, the white GKC wordmark with the small caption "ARCHITECTURE & DESIGN" at the top left and a "MENU" label with two lines at the top right. The headline "Aligning vision and action" sits over the photograph in white at 66.6667px. A white rectangular button "Discover the world of GKC" sits at the lower left of the hero, and a white slide card ("The Impact of Interior Design in the Workplace" with a "Read more" link and arrow controls) sits at the lower right.

Under the hero the page splits into two halves divided by a hairline: the large statement "The creativity, expertise and strategic insight to achieve your goals." on the right, a small photograph of two site workers at the lower left, and a dark navy button "Our Areas of Expertise". A huge grey figure "+4M" with the caption "sq. ft. designed and built each year." follows, then project teasers: image frames with a category line in small caps ("Distribution & Warehousing, Cold Storage & Food"), a year, and a project name ("Metro Vickers - Fresh Produce Distribution Centre"). The voice is plain, confident and professional.

## Colors

The page uses three measured colors only.

- **Canvas** `#ffffff`, the dominant background (14245 area units).
- **Ink** `#151f26`, a very dark blue-black, is the text color (1933 characters), the fill of the dark button and the footer text, and the second largest background area (1120 units).
- **Ink grey** `#a2a2a2` is used for 426 characters, such as the giant "+4M" figure and small project category lines, and for the hairline border color (20 uses).
- **Primary** in the token set is `#ffffff` with `#151f26` text, matching the white "Discover the world of GKC" button; the second measured button is the reverse, `#151f26` with white text ("Contact us").

On hover, the "Read more" link changes both text and border to `rgb(20, 68, 240)` (about `#1444f0`), the only chromatic color recorded; it appears only in the hover probe. The cookie-consent variables in the root (`--cc-overlay-bg`, `--cc-btn-secondary-bg` `#eaeff2` and others) belong to a consent widget and are not brand UI.

## Typography

Two families are measured: ABCDiatype (2240 characters; loaded at 400 and 700, with italics) and SuisseIntlCond (422 characters; 400). ABCDiatype is the working face with a system-font fallback stack (`-apple-system`, `system-ui`, `avenir next`, avenir, `segoe ui`, `helvetica neue`, helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif). SuisseIntlCond appears in small, condensed uppercase labels such as the logo caption and project categories.

- **Display**: 66.6667px, weight 400, line height 66.6667px, letter spacing -2.66667px. On the 390px mobile pass it is 50px, line height 50px, tracking -2px.
- **Body**: 31.1111px, weight 400, line height 31.1111px, tracking -0.622222px, the large statement lines.
- **Subheading**: 22px, weight 400, line height 26.4px.
- **Button and link**: 16px, weight 400.

Other measured sizes: 14px, 18px, 18.72px, 48.8889px, 32px, 24px, 12px and two giant sizes, 204.444px and 179.2px, for the figures. Weights are 400 (2252 characters) and 700 (410). All headline lines are tightly tracked with a line height equal to the font size, which gives the large text a compact block shape.

## Layout

The desktop capture is 1280px wide and 10279px tall. The grid is a visible two-column split with a 1px hairline in `#a2a2a2` marking the divide, and edge margins of about the nav item padding (20px). The hero is full bleed. After it, the left half is empty space with only a small photograph anchored at the bottom, and the right half carries the statement at the top and a small caption and button at the bottom, so each half aligns top and bottom. Project teasers sit in a narrow left card (about a third) and a wide right frame; empty frames show a diagonal cross line in the capture because their images had not loaded when captured. Measured spacing values: 1, 3.2, 5, 10, 14.22, 15, 16, 20, 24 and 28.44px; the footer padding is 24px 20px 28.4444px and the nav links use 0 20px.

## Elevation & Depth

No box shadows and no border radii were measured: `boxShadows` is empty and so is `borderRadii`. Layers are created only by placing white cards over photography (the hero button and slide card) and by 1px `#a2a2a2` rules. The page is flat.

## Shapes

`borderRadii` in the extraction is empty, so every rendered element computes a 0px radius. Buttons, cards, frames and image placeholders are rectangles. The token `rounded.none` is 0px and is the only shape token.

## Components

- **Primary button**: white `#ffffff` fill, `#151f26` text, ABCDiatype 16px weight 400, height 75px, 0px radius, text aligned to the lower left inside the box.
- **Secondary button**: `#151f26` fill, white text, same type, height 75px ("Contact us", "Our Areas of Expertise").
- **Slide card**: white rectangle holding a title at 22px, a "Read more" link, and two square arrow controls separated by hairlines.
- **Navigation**: transparent bar over the hero, white text, wordmark at the left, "MENU" with a two-line icon at the right; link padding 0 20px.
- **Project card**: an image frame with hairline border, a small category line in grey with the year at the right, and the project name at around 31px.
- **Footer**: `#151f26` text with 24px 20px 28.4444px padding.

## Design System Architecture

No public design system or brand guideline was found in the measured page. The root CSS variables show a custom token layer: `--color-bg` (white), `--button-text-color` (currentColor), `--icon-width-cta-icon` (20px), `--icon-width-player-pause` (11px), `--icon-width-logo-footer` (300px), `--max-content-heading-width` (450px) and a spacing scale such as `--spacing-3xl-mobile` (122). A separate set of `--cc-*` variables belongs to a cookie-consent library. The de-facto system is therefore a hand-built stylesheet: a single sans with a condensed companion, two ink colors, hairlines and square boxes.

## Do's and Don'ts

- Do use `#ffffff`, `#151f26` and `#a2a2a2` only; let photography carry colour.
- Do set display text at 66.6667px with -2.66667px letter spacing and line height equal to size.
- Do keep every corner square (0px) and every divider a 1px `#a2a2a2` hairline.
- Do use 75px-high rectangular buttons with text anchored low-left.
- Don't add shadows, gradients or rounded corners.
- Don't promote the hover blue `#1444f0` to a general brand color.
- Don't document the cookie-consent widget as brand UI.

## Responsive Behavior

The mobile pass at 390px recorded the h1 "Aligning vision and action" at 50px with a 50px line height, body text at 30px with a 30px line height, and the primary button "Discover the world of GKC" at 16px weight 400. Column changes, menu behaviour and breakpoints beyond those sizes are not measured.

## Iteration Guide

1. Begin with a full-bleed photograph and `{typography.display}` white text over it.
2. Divide the page in two columns with a 1px `{colors.ink-grey}` rule.
3. Use `{components.button-primary}` and `{components.button-secondary}` as the only two button styles, both 75px tall and square.
4. Show scale with oversize grey figures such as "+4M".
5. Keep `{rounded.none}`; re-measure before introducing any radius, shadow or accent colour.

Imagery and microcopy: the capture shows documentary architectural photography of an industrial building in daylight, a small candid photograph of two workers in hard hats and reflective vests reviewing drawings, and project frames that follow a fixed caption pattern of sector, year and project name. Calls to action are short and polite ("Discover the world of GKC", "Our Areas of Expertise", "Read more"), and the supporting sentences are written in the first person plural ("We stay focused on your business needs.").
