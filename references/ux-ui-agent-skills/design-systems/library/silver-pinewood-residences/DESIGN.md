---
version: alpha
name: Silver Pinewood Residences
category: "Architecture & Interiors"
description: "Silver Pinewood Residences (silver-pinewood.com), a premium residential complex site: warm beige #f0eae2 canvas, charcoal #282828 sections and ink, #ba8f71 and #998170 beige accents, TTFors 500 set entirely in uppercase with tight negative tracking (44px headline at -1.76px, 76px at -4.56px)."
colors:
  canvas: "#f0eae2"
  page-largest: "#282828"
  ink: "#282828"
  primary: "#ba8f71"
  beige-dark: "#998170"
  ink-on-dark: "#ffffff"
  ink-on-dark-40: "#ffffff66"
  error: "#b62f2f"
typography:
  display:
    fontFamily: TTFors, Helvetica, Arial, sans-serif
    fontSize: 44px
    fontWeight: 500
    lineHeight: 42.0002px
    letterSpacing: "-1.76px"
    textTransform: uppercase
  display-mobile:
    fontFamily: TTFors, Helvetica, Arial, sans-serif
    fontSize: 22px
    fontWeight: 500
    lineHeight: 22px
    letterSpacing: "-0.88px"
    textTransform: uppercase
  subheading:
    fontFamily: TTFors, Helvetica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 28px
    letterSpacing: "-1.12px"
    textTransform: uppercase
  body:
    fontFamily: TTFors, Helvetica, Arial, sans-serif
    fontSize: 10px
    fontWeight: 500
    lineHeight: 12px
    letterSpacing: 0.4px
    textTransform: uppercase
rounded:
  xs: 15px
spacing:
  s1: 5px
  s2: 8px
  s3: 9px
  s4: 10px
  s5: 13px
  s6: 13.33px
  s7: 20px
  s8: 23.33px
  s9: 26.67px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.beige-dark}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  button-primary-hover:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
  link:
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink-on-dark}"
  nav-link:
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.body}"
  footer:
    textColor: "{colors.ink-on-dark}"
    padding: 0px 0px 0px 640px
---

## Overview

Silver Pinewood Residences (silver-pinewood.com, "Silver Pinewood Residences - a residential complex near a park") is the sales site for a premium residential complex near the Silver Pinewood riverbank. The measured page is 1280px wide and 28,908px tall: a very long scrolling story. A cookie-consent layer and a sticky layer were hidden by the extractor before measurement. The first screen is a full-bleed twilight rendering of a tower with a red arched bridge, a tiny white wordmark at top left ("SILVER PINEWOOD RESIDENCES" stacked in three lines), "CONTACT US" and "MENU" at the top right, a circular down-arrow at left and the tagline "QUIET LUXURY" in #ba8f71 at the lower right.

Below, the page alternates charcoal #282828 and beige bands. A charcoal band carries a long white uppercase statement ("PREMIUM RESIDENTIAL COMPLEX NEAR THE ICONIC SILVER PINEWOOD ON THE RIVERBANK - IS YOUR OPPORTUNITY TO MAKE A LEGENDARY ADDRESS PART OF YOUR STORY.") with an architectural rendering offset to the right half; a darker beige band (#998170) carries a statement in charcoal about the pines and the bay; small 10px caption paragraphs sit offset in the right half beside photography. The copy is aspirational real-estate English: "QUIET LUXURY", "RESORT-STYLE ELEGANCE". The footer carries the sales office address and contact details.

The art direction is dusk architectural rendering: warm window light against a gray-blue sky, a contrasting red bridge, and aerial views of the towers among mature trees and a river bend. Photographs are never framed or captioned at length; the only text near them is a single 8px or 10px uppercase caption set in the right half. Between images the page leaves long stretches of flat color, so the rhythm is image, statement, flat color, image, which keeps the pace slow and the tone unhurried, matching the "quiet luxury" promise in the hero.

## Colors

The page is a three-color system. Background areas: #282828 (30,719 weight, charcoal), #f0eae2 (16,906, the warm beige canvas and --t-background), #998170 (7,605, a darker beige/taupe, --c-beige-background and the primary button fill) and a 20% charcoal #28282833. Text: #ffffff (1,220 characters, on charcoal and photography), #282828 (663, on beige), #f0eae2 (159), #ba8f71 (145, the light-copper accent: the QUIET LUXURY tagline, --t-primary and --c-beige), #ffffff66 (78) and #998170 (20).

The site publishes its theme through root variables: --t-background #f0eae2, --t-text and --t-heading #282828, --t-primary #ba8f71, --t-secondary #998170, --t-line #282828 with --t-line-light rgba(40,40,40,0.2), --t-small rgba(40,40,40,0.5), --t-error #b62f2f (also --c-red), and button variables: primary background #998170 with text #f0eae2, primary hover background #282828, primary active background #282828, secondary border and text #998170, arrow button background #ba8f71 with hover background #282828, disabled background rgba(153,129,112,0.4). Links are #998170 by default and #282828 on hover; text links are #282828, active #ba8f71.

## Typography

One family: TTFors at weight 500 (2,286 characters), with Helvetica, Arial, sans-serif fallbacks. Everything is uppercase. Display is 44px / 42.0002px with -1.76px tracking (mobile 22px / 22px at -0.88px); the larger statement runs are 76px (191 characters, -4.56px) and 98px (39 characters, -5.88px); subheadings are 28px / 28px at -1.12px; body, navigation and captions are 10px / 12px with +0.4px tracking (8px at +0.32px for the smallest labels). Letter-spacing is 4 percent negative on headlines and 4 percent positive on small caps.

Sizes by characters: 10px (1,440), 44px (372), 76px (191), 28px (190), 8px (54), 98px (39). The mobile pass uses 11px (1,784), 22px (446), 30px (195), 16px (144), 10px (54) and 42px (39). The extreme jump from 10px captions to 44 to 98px statements gives the page its editorial scale.

## Layout

The desktop viewport is 1280px. The grid is declared with variables: --grid-gutter, --spacing, --spacing-layout, --container-max-width, --container-content-width, --container-h-padding-left and -right, and a rem scale (--scale-rem, --scale-px). Paddings measured are 40px (87 uses), 5px (87), 20px (84), 8px (5), 160px (2) and 60px (2); gaps are 5px (12), 10px (11), 20px (8), 13.3333px (5) and 30px (3). The statement bands span the full 1,240px content width; images alternate left and right; the footer pads 640px at the left so its content sits in the right half of the 1280px page.

## Elevation & Depth

No shadows and no borders were measured. Depth comes from the color-blocked bands (charcoal to beige to taupe), full-bleed renderings and photographs, and statements overlapping imagery (a headline running across the top of a tall rendering). Lines are drawn with the --t-line variables when needed.

## Shapes

Only a 15px radius was measured (2 elements); everything else is square-cornered. The photographs and renderings are rectangles with no radius, and the circular scroll-down arrow in the hero is an outlined circle. The rounded token xs is therefore 15px.

## Components

Button-primary (from the published button variables): fill #998170, text #f0eae2, hover fill #282828. Secondary button: border and text #998170. Arrow button: #ba8f71 background with #282828 text and a hover fill #282828 with #f0eae2 arrow. Link variants are underlined or bordered with #282828 and highlight to #ba8f71 on hover. Navigation: a transparent 77px header with white 10px uppercase "CONTACT US" and "MENU" over the hero. Footer: 800px tall with a 640px left padding, white 10px uppercase text including the sales office address. No input fields or cards were detected.

## Design System Architecture

No public design system or brand guideline was found: the home page was the only page opened (through the extractor) and links none. The site does ship a structured theme in its CSS: 93 root variables in two families, --c-* (palette: --c-light #f0eae2, --c-white #fff, --c-beige #ba8f71, --c-beige-background #998170, --c-gray #282828, --c-red #b62f2f) and --t-* (theme roles for text, heading, line, button states and link states), plus layout and scale variables (--scale-*, --spacing, --grid-*, --container-*) and visibility helpers (--is-visible--sm-down, --is-visible--md-up and others). That is the de-facto system: a small palette mapped to roles with explicit button and link states.

## Do's and Don'ts

Do set all type in TTFors uppercase with negative tracking on headlines and positive on captions. Do alternate charcoal #282828, beige #f0eae2 and taupe #998170 bands. Do use #ba8f71 for the one accent line. Do let renderings run full-bleed and offset statements across them.

Don't add saturated colors: the only extra color published is the error red #b62f2f. Don't use bold weights; only 500 was measured. Don't round corners beyond the 15px measured. Don't add shadows or borders to cards; none were measured.

## Responsive Behavior

A mobile pass recorded: h1 22px / 22px, body and nav 11px / 13px (desktop 10px / 12px). Mobile character usage is led by 11px (1,784), 22px (446), 30px (195), 16px (144), 10px (54) and 42px (39). The root variables define visibility helpers named --is-visible--sm-down, --md-up, --xl-down, --xxl-up and --xxxl, so the site distinguishes at least those size groups, but the pixel breakpoints, mobile column counts and menu behavior were not measured.

## Iteration Guide

Rebuild in order: hero with the stacked wordmark, CONTACT US and MENU, the tower rendering and the QUIET LUXURY tagline; the charcoal statement band with an offset rendering; the taupe statement band with a 10px caption; image rows; the sales-office footer. Use canvas #f0eae2, charcoal #282828, accent #ba8f71, taupe #998170, TTFors 500 uppercase and the 15px radius only where needed. Values not in web/data/extracted/silver-pinewood-residences.json, including content below the first 1,800px of the capture, are not measured.
