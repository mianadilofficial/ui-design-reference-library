---
version: alpha
name: ONYX Hospitality Group
category: "Thai Brands"
description: "ONYX Hospitality Group home page (onyx-hospitality.com/en): white canvas with stone #eeebe7 and dark #32353a bands, near-black #111419 square buttons, plum #522953 pill Subscribe, Rubik 600 uppercase headings at 46px, Noto Sans 300 body, circular photography crops."
colors:
  canvas: "#ffffff"
  ink: "#727272"
  primary: "#111419"
  on-primary: "#ffffff"
  surface-2: "#f6f6f7"
  surface-3: "#eeebe7"
  ink-3: "#545860"
  ink-4: "#231f20"
  ink-5: "#222222"
  ink-6: "#5b5b5b"
  hairline: "#eaeef0"
  button-secondary-bg: "#522953"
  text-input-text: "#7b7c96"
typography:
  display:
    fontFamily: Rubik, Kanit, "Noto Serif SC", "Noto Serif TC"
    fontSize: 46px
    fontWeight: 600
    lineHeight: 46px
    textTransform: uppercase
  display-mobile:
    fontFamily: Rubik, Kanit, "Noto Serif SC", "Noto Serif TC"
    fontSize: 40px
    fontWeight: 600
    lineHeight: 40px
    textTransform: uppercase
  heading:
    fontFamily: Rubik, Kanit, "Noto Serif SC", "Noto Serif TC"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  body:
    fontFamily: "\"Noto Sans\", \"Noto Sans Thai\", \"Noto Serif SC\", \"Noto Serif TC\""
    fontSize: 16px
    fontWeight: 300
    lineHeight: 22px
  button:
    fontFamily: "\"Noto Sans\", \"Noto Sans Thai\", \"Noto Serif SC\", \"Noto Serif TC\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 1.3px
    textTransform: uppercase
  nav:
    fontFamily: "\"Noto Sans\", \"Noto Sans Thai\", \"Noto Serif SC\", \"Noto Serif TC\""
    fontSize: 14px
    fontWeight: 300
    lineHeight: 24px
    letterSpacing: 1px
    textTransform: uppercase
  link:
    fontFamily: "\"Noto Sans\", \"Noto Sans Thai\", \"Noto Serif SC\", \"Noto Serif TC\""
    fontSize: 15px
    fontWeight: 300
    lineHeight: 22px
    letterSpacing: 0.7px
    textTransform: uppercase
  button-secondary:
    fontFamily: Montserrat, "Noto Sans Thai", "Noto Serif SC", "Noto Serif TC"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 10px
rounded:
  xs: 2.5px
  sm: 10px
  md: 15px
  xl: 50px
  none: 0px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 15px
  s8: 19px
  s9: 20px
  s10: 23px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 20px 40px 20px 30px
    height: 56px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 1px 0px
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -1, 0, 0, 0, 1)
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xl}"
    padding: 23px 35px
    height: 56px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 0px 19px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 15px 30px
    height: 54px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink-3}"
    rounded: "{rounded.none}"
---

## Overview

This file documents https://www.onyx-hospitality.com/en, the home page of ONYX Hospitality Group (title "ONYX Hospitality Group | Tailored Approach to Hospitality"). The opened page describes it as an Asia Pacific hotel and resort management company owned by Italthai Group, reporting 60 years in hospitality, 41 properties in 6 countries and 5 in the pipeline, with brands Oriental Residence, Amari, Shama, OZO, ONYX Dining, Prego, Maai Spa, Breeze Spa and the ONYX Rewards loyalty program. The queued entry was the group site itself, so no renaming was needed.

The page is a long editorial scroll (10666px at 1280px). The capture shows a top utility strip ("ONYX Hospitality Group", LinkedIn, language), a purple MENU tab at the left edge, the ONYX 60-year logo, the horizontal menu (HOME, ABOUT US, BRANDS, DEVELOPMENT, MEDIA, CAREERS) over a full-bleed video hero with an "EXPLORE MORE" button, then "WELCOME TO ONYX" beside a swimming-pool photograph cropped into a large circular arc, a pale-stone band ("DISCOVERING ELEGANCE" over a video panel with "LASTING IMPRESSION"), a dark grey "ONYX IN NUMBERS" band, "CELEBRATING INDUSTRY EXCELLENCE" badges, "OUR BRANDS", an Asia Pacific footprint map, "LEGACY IN MOTION", "ONYX UNIVERSE", careers and ownership panels and "ONYX STORIES". Giant faint outline words (ABOUT US, OVERVIEW, DEVELOPMENT) sit behind sections. An awards pop-up ("Certified as a Best Places to Work 2025") was open during measurement and is excluded from the tokens. The voice is warm and aspirational: "Heartfelt Hospitality in Motion", "Putting People First".

## Colors

- **Canvas `#ffffff`** is the dominant background (11329 area units). Panel surfaces are **surface-2 `#f6f6f7`** (1049; also the footer), **surface-3 `#eeebe7`** (771, the warm stone of the welcome band), `#f5f5f5`, `#f9f9fa`, `#f7f0ec` and the dark band `#32353a` (644, "ONYX IN NUMBERS"). `#000000cc` (1024 units) is the hero video scrim.
- **Primary `#111419`**, a near-black, fills the "EXPLORE MORE" button; **on-primary `#ffffff`** is its label. **Button-secondary-bg `#522953`**, a deep plum, fills the pill "Subscribe" button; the logo and the MENU tab in the capture use the same purple family.
- **Ink `#727272`** is the body text (1070 characters); **ink-3 `#545860`** (511) is the subheading and footer tone; **ink-4 `#231f20`** (250), **ink-5 `#222222`** (168, headings) and **ink-6 `#5b5b5b`** (107) complete the greys. Text-input text is `#7b7c96`. An orange-red text color `#ec6851` appears on 90 characters. White text is the most frequent (7909 characters) because of the dark bands and hero.
- **Hairline `#eaeef0`** borders the form field.
- The root variables include Bootstrap 4 defaults (`--primary: #007bff`, `--danger`, `--success`, `--yellow` and others) which are framework defaults, not brand colors, and `--iti-*` variables belong to a phone-number input widget.

## Typography

Three families: **Noto Sans** (with Noto Sans Thai fallback; weight 300 body, 9604 characters), **Rubik** (headings, 670 characters, with Kanit and Noto Serif SC/TC fallbacks for Thai and Chinese), and **Montserrat** (282 characters, used by the Subscribe button).

- **Display (H1 "WELCOME TO ONYX"):** Rubik 46px, weight 600, line-height 46px, uppercase (mobile 40px, line-height 40px). The H3 "DISCOVERING ELEGANCE" is 40px, weight 600, color `#545860`.
- **Heading (H2 "Experience the Beauty"):** Rubik 16px, weight 400, line-height 16px, color `#d9d8d6` (it sits on the hero video).
- **Body:** Noto Sans 16px, weight 300, line-height 22px. The most-used size is 14px (6579 characters), then 16px (2162), 17px (764), 20px, 18px, 28px, 40px and 52px.
- **Button:** Noto Sans 16px, weight 400, letter spacing 1.3px, uppercase. **Nav:** 14px, weight 300, line-height 24px, letter spacing 1px, uppercase. **Link ("SCROLL"):** 15px, letter spacing 0.7px, uppercase. **Secondary button:** Montserrat 16px, weight 400.
- A 146px size with 3px letter spacing (23 characters) is the giant background word.

Weights: 300 (9548 characters), 600 (421), 500 (293), 400 (221), 700 (73).

## Layout

Sections are full-width bands alternating white, stone and dark grey, with content blocks left-aligned and large circular crops of photography. Paddings: 30px (54 occurrences), 20px (45), 15px (19), 4px (18), 5px (17), 25px (8), 40px (6). Nav items have 19px horizontal padding; buttons use 20px 40px 20px 30px (primary) and 23px 35px (secondary). The Bootstrap breakpoints are declared in the stylesheet: `--breakpoint-sm: 576px`, `--breakpoint-md: 768px`, `--breakpoint-lg: 992px`, `--breakpoint-xl: 1200px`.

## Elevation & Depth

Shadows measured: `rgb(237, 238, 241) 0px 4px 70px 10px` (4 elements, a very soft wide glow on cards), `rgba(0,0,0,0.05) -1px 4px 9px 0px` (1), an invisible `rgba(0,0,0,0) 0px 0px 1px 0px` on the primary button and an inset `rgb(38,38,51) 0px 0px 0px 10px inset` (1). Depth is mostly tonal: video scrims, stone and dark bands, and faint outline words behind sections.

## Shapes

Radii: 50% (5 elements, round icons and the circular image crops), 50px (2, the Subscribe pill and the form field), 2.5px, 10px and 15px (one each). The primary button is square (0px). The 20px radius belongs to the award pop-up and is not a token. Large arcs and circles in photography are an art-direction device rather than a measured border radius.

## Components

- **Button primary:** `#111419` fill, white 16px uppercase label with 1.3px tracking, radius 0px, padding 20px 40px 20px 30px, height 56px ("EXPLORE MORE" with a chevron).
- **Button secondary:** `#522953` fill, white Montserrat 16px label, radius 50px, padding 23px 35px, height 56px ("Subscribe").
- **Text input:** white fill, `#7b7c96` 16px text, 1px `#eaeef0` border, radius 50px, padding 15px 30px, height 54px.
- **Nav link:** 14px uppercase light text with 19px side padding; the header is translucent over the hero.
- **Footer:** `#f6f6f7` background, `#545860` text, square corners; holds app-store badges, a newsletter field, quick links and the ONYX Rewards logo.

## Design System Architecture

No public design system or brand guidelines are linked from the page: WebFetch of https://www.onyx-hospitality.com/en found a development brochure PDF and a media library, neither a brand guide. The shipped CSS is a Bootstrap 4 build (the `--blue`, `--primary: #007bff`, `--gray-dark: #343a40` palette and `--breakpoint-*` variables) with page-specific styles on top, plus the international-telephone-input widget's `--iti-*` variables and the Slick carousel font. Brand colors therefore come from the page styles and not from the framework variables.

## Do's and Don'ts

- Do use near-black `#111419` square buttons with spaced uppercase labels for the main call to action.
- Do alternate white, `#eeebe7` stone and `#32353a` dark bands.
- Do set headings in Rubik 600 uppercase and body in Noto Sans 300.
- Do use the plum `#522953` for the newsletter action.
- Don't use Bootstrap's `#007bff` or other framework variables as brand colors.
- Don't style new components from the award pop-up (20px radius, 40px padding).
- Don't round the primary button; the pill shape is reserved for the form field and Subscribe button.

## Responsive Behavior

Measured at 390px: H1 Rubik 40px, weight 600, line-height 40px; body Noto Sans 16px with a 22px line-height; the "EXPLORE MORE" button keeps its 16px label and 20px 40px 20px 30px padding; the header shows a "MENU" label only. Mobile text sizes by characters are 16px (4491), 17px (692), 26px (312), 18px (298) and 15px (273). Breakpoint variables are declared at 576, 768, 992 and 1200px as listed above; how each section reflows between them was not measured.

## Iteration Guide

1. Start from white with `#727272` body text and `#111419` for the main button.
2. Use stone `#eeebe7` for story bands and `#32353a` for numbers and statistics.
3. Headings in Rubik 600 uppercase at 40 to 46px; body in Noto Sans 300 at 16px.
4. Use circular or arc image crops as the main shape device.
5. Record any new measurement in SOURCES.json before adding tokens.
