---
version: alpha
name: HGC International Business
category: "Thai Brands"
description: "hgc-intl.com, HGC International Business (the parent group's international telecom and ICT site that the Thailand entry points to): white canvas with #212529 ink, signal-red #e02926 square buttons and panels, Montserrat 700 headlines (50px hero, 40px section) over Nunito 12px copy, and a 0px radius on every element."
colors:
  canvas: "#ffffff"
  ink: "#212529"
  primary: "#e02926"
  on-primary: "#ffffff"
  surface-black: "#000000"
  surface-mist: "#efefef"
  surface-fog: "#f4f4f4"
typography:
  display:
    fontFamily: Montserrat, Arial, 微軟正黑體, "Microsoft Jhenghei", 微软雅黑, sans-serif
    fontSize: 50px
    fontWeight: 700
    lineHeight: 60px
  display-mobile:
    fontFamily: Montserrat, Arial, 微軟正黑體, "Microsoft Jhenghei", 微软雅黑, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
  heading:
    fontFamily: Montserrat, Arial, 微軟正黑體, "Microsoft Jhenghei", 微软雅黑, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 40px
  body:
    fontFamily: Nunito, Arial, 微軟正黑體, "Microsoft Jhenghei", 微软雅黑, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  button:
    fontFamily: Nunito, Arial, 微軟正黑體, "Microsoft Jhenghei", 微软雅黑, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
  nav:
    fontFamily: Nunito, Arial, 微軟正黑體, "Microsoft Jhenghei", 微软雅黑, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 2px
  s3: 10px
  s4: 17px
  s5: 20px
  s6: 22px
  s7: 25px
  s8: 30px
  s9: 35px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 17px
    height: 62px
    borderColor: "{colors.primary}"
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 17px
    height: 62px
    borderColor: "{colors.canvas}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 74px 0px 0px
---

## Overview

Naming note: the queued brand is "HGC Global Communications Thailand", but its URL, https://www.hgc-intl.com/, is the parent group's international-business site. This document is therefore named after the measured site, **HGC International Business** (page title: "HGC International Business | Global Telecom and ICT Solution Provider"; the legal entity in the footer is HGC Global Communications Limited). The page does not mention Thailand by name; the only related item read from the page is an "AMS-IX Bangkok" link under Internet Services.

The page was measured at 1280px wide and 5769px tall, with 562 visible elements. The final measurement (re-run after a cookie banner showed in the first capture) shows a full-bleed hero slider with a headline in white bold type over a photograph (the captured slide reads "Meet HGC at Telecoms World Asia 2026" over a night city view, with a red "SCHEDULE MEETING" outlined button), a transparent header with the white HGC logo, nav labels (Solutions, Global Reach, Insight, Webinar), a dropdown "International Business" selector with the other group sites (HGC, Consumer Broadband, Hong Kong Business, Data Centre, Macroview), an EN language switch, a search icon and a solid red "Contact Us" block at the top right. Below the hero: "We offer solutions to fit your business needs" above a row of photographic service tiles (Network Services, OTT Edge Solutions, Voice & A2P Messaging, Cybersecurity Solutions), a "Go to Other HGC Sites" dropdown in red, a checkerboard "EXPLORE MORE ABOUT HGC" grid of photograph, grey and red tiles with "SOLUTIONS" eyebrow labels and "LEARN MORE" arrows, a "WHAT'S NEW?" press list with dated rows, a "Let's get in touch" form with a red "SUBMIT" button beside a red "CONTACT US" panel, and a footer with the logo, address and link columns on white with a thin red bar at the bottom.

The voice is corporate B2B: solution names, partnership news, and short imperative labels (Learn More, Read More).

## Colors

- **Canvas {colors.canvas}** (#ffffff): the largest background (2123).
- **Ink {colors.ink}** (#212529): body and heading text on light surfaces (1470 characters).
- **Primary {colors.primary}** (#e02926): the red of the Submit button (fill and 1px border), the Contact Us block and the red panels (377 area) and of eyebrow, link and arrow text (119 characters). On primary {colors.on-primary}: #ffffff.
- **Black {colors.surface-2}** renamed {colors.surface-black} (#000000): a large background area (1024), used for hero overlays and the dark service tiles, and for text in inputs (913 characters).
- **Mist {colors.surface-3}** renamed {colors.surface-mist} (#efefef, 746) and **fog {colors.surface-fog}** (#f4f4f4, 621): light grey tile and form backgrounds.
- **White text** (#ffffff, 1965 characters): hero and tile titles over photography, the 1px white borders (11) on outlined buttons.

The earlier extraction also listed #007bff as a nav-link colour. That is the Bootstrap default link blue, not a brand colour, so it is dropped. The stylesheet exposes no root variables (rootVars is empty).

## Typography

**Montserrat** (2909 characters, 400 and 700) sets headlines and the navigation header; **Nunito** (1558, 400 and 700) sets copy, buttons and links. Both stacks fall back to Arial and Traditional and Simplified Chinese fonts (微軟正黑體 / Microsoft Jhenghei / 微软雅黑), which reflects the site's EN, 繁 and 简 language options. An icon font "icomoon" is also loaded.

- **Display** {typography.display}: Montserrat 700, 50px/60px (the hero headline, rendered in a p element); mobile {typography.display-mobile} 36px/40px.
- **Heading** {typography.heading}: Montserrat 700, 40px/40px (h2 "We offer solutions to fit your business needs").
- **Body** {typography.body}: Nunito 400, 12px/16px (the legal and form copy, #212529). The body element itself measures 14px/16.8px.
- **Button** {typography.button}: Nunito 400, 18px/26px.
- **Nav** {typography.nav}: Nunito 400, 16px/26px; the header strip uses Montserrat 16px with a 74px line-height.

Other sizes by characters: 14px (798), 16px (647), 24px (625), 30px (127), 10px (45), 28px, 11px, 9px. Tracking: 12px text at 2px (152 characters, the tracked "SOLUTIONS" eyebrows) and 10px text at 1px (45). A 60px/82px-high input is also measured; it is an oversized field detected once and is not carried into the tokens.

## Layout

A 1280px page of alternating full-bleed and inset sections. The header is overlaid on the hero; the service tiles run edge to edge in a horizontal carousel with pagination dots; the "Explore more about HGC" block is a checkerboard grid offset to the right with a red L-shaped frame; the press list is a single column with a thin rule between rows; the contact section is a grey form block with a red contact card. Measured paddings: 20px (31), 40px (28), 30px (25), 17px (24), 10px (12), 288px (8, a centred column offset). No gaps are recorded.

## Elevation & Depth

No shadows are measured (boxShadows empty). Depth is created by photography, a darkening gradient behind hero text, and the offset red frame. Borders are 1px: #ffffff (11) and #e02926 (2).

## Shapes

`desktop.frequencies.borderRadii` is empty: every rendered element computes 0px, so {rounded.none} is 0px. Buttons, tiles, inputs and the red panels are all square-cornered; the circular previous/next slider arrows in the capture are not measured as a radius.

## Components

- **Primary button (SUBMIT)**: {colors.primary} fill, white 18px Nunito label, 1px #e02926 border, 0px radius, padding 17px, 62px tall.
- **Outlined button (SCHEDULE MEETING / LEARN MORE)**: transparent fill, white label, 1px white border, same 18px type, padding 17px, 62px tall; the LEARN MORE hover state recorded no colour change.
- **Header / nav**: transparent over the hero, white text, Montserrat 16px, a solid red "Contact Us" block at the right.
- **Tiles**: photograph with a bold white title, 0px radius; grey ({colors.surface-mist}) or red ({colors.primary}) tiles carry an uppercase tracked eyebrow, a bold title and a "LEARN MORE" arrow link.
- **Form fields**: underlined inputs with small uppercase labels (NAME, JOB TITLE, COMPANY NAME, INDUSTRY, CONTACT NUMBER, EMAIL).

The cookie notice ("Accept Cookies") that appeared in the first capture is a consent control and is not documented as a brand component.

## Design System Architecture

No public design system or brand guideline was found: the home page offers a Media Centre, Newsletters and a Partner Program but no brand-guideline page, and no search was run. The de-facto system is a bespoke stylesheet with no root variables, two web font families (Montserrat, Nunito), an icomoon icon font and a Chinese-aware fallback stack. Sections are made from reusable tile types: photo tile, grey tile, red tile.

## Do's and Don'ts

- Do keep surfaces white or light grey and use the single red #e02926 for actions and key panels.
- Do set headlines in Montserrat 700 and copy in Nunito.
- Do keep every corner square (0px).
- Do use tracked 12px uppercase eyebrows for categories.
- Don't introduce the Bootstrap blue #007bff.
- Don't add shadows or rounded corners.
- Don't document the cookie banner as brand UI.

## Responsive Behavior

Mobile (390px) was measured. The hero headline goes from 50px/60px to 36px/40px; body copy stays 12px/16px; the header shows "Open Menu" and "Contact Us" and the Contact Us button measures 14px, white on #e02926, 0px radius. The mobile size ladder is 12px (1092 characters), 36px (839), 18px (796), 14px (378), 24px (286), 20px (102), 30px (78), 16px (67). Column counts and breakpoints are not measured.

## Iteration Guide

1. White canvas, #212529 text, red #e02926 for buttons and feature panels.
2. Headlines in Montserrat 700 at 50px and 40px; copy in Nunito.
3. Square buttons 62px tall with 17px padding; outlined white on photography, filled red on white.
4. Add photographic service tiles with bold white titles.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=hgc-global-communications-thailand--<page> --url=<url> --force --no-motion` before adding tokens.
