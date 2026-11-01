---
version: alpha
name: Amgen
category: "Pharma"
description: "Amgen global home page: Amgen blue #0063c3 buttons and bands, pale #edf2f7 background, Poppins with 16px uppercase 700 buttons, 3px radius, photographic story tiles with blue gradient caption panels."
colors:
  canvas: "#edf2f7"
  ink: "#0063c3"
  primary: "#0063c3"
  on-primary: "#ffffff"
  surface-dark: "#151b17"
  ink-grey: "#706f73"
  ink-grey-light: "#747474"
typography:
  display:
    fontFamily: poppins, "Century Gothic", Helvetica, Arial, sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 38px
    letterSpacing: "-0.72px"
  subheading:
    fontFamily: poppins, "Century Gothic", Helvetica, Arial, sans-serif
    fontSize: 50px
    fontWeight: 700
    lineHeight: 48px
  body:
    fontFamily: poppins, "Century Gothic", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: poppins, "Century Gothic", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 26px
    textTransform: uppercase
  nav:
    fontFamily: poppins, "Century Gothic", Helvetica, Arial, sans-serif
    fontSize: 13.6px
    fontWeight: 400
    lineHeight: 20.4px
  link:
    fontFamily: poppins, "Century Gothic", Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: 0.9px
    textTransform: uppercase
rounded:
  xs: 3px
  sm: 4px
  md: 25px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 7px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 16px
    height: 50px
  button-secondary:
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 16px
    height: 50px
    borderColor: "{colors.on-primary}"
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 7px 0px 8px
  footer:
    textColor: "{colors.on-primary}"
---

# Amgen

## Overview
The measured page is the global home page of Amgen at amgen.com (title "Amgen | A Worldwide Pioneer in Biotechnology"). It is a corporate biotechnology site built around editorial news: a white 60px header with the blue AMGEN wordmark, five uppercase section links (ABOUT, SCIENCE, PRODUCTS, RESPONSIBILITY, STORIES) and a smaller utility group (Newsroom, Partners, Investors, Careers, a world-map icon, a search icon); a full-bleed hero photograph with a blue story card at its lower left ("When Colorectal Cancer Strikes Early", "READ STORY", a "2 / 6" pager); a three-column grid of story tiles, each a photograph with an overlapping blue gradient caption panel; a centered "MORE STORIES" button; and a solid blue band "Our Latest Press Releases" listing two press releases in white uppercase text.

The mood is bright, human and scientific at once. People photographed in documentary style are paired with saturated blue panels that carry abstract rounded capsule shapes, so each tile reads as an Amgen-branded card regardless of the photograph.

## Colors
- **canvas** `#edf2f7`: the pale blue-grey page background behind the story grid (817 area weight); white `#ffffff` (563) is the header.
- **ink** and **primary** `#0063c3`: Amgen blue; the fill of the "MORE STORIES" button and of the press-release band (821 area weight), and the color of header link text.
- **on-primary** `#ffffff`: text on blue and on the gradient caption panels (3086 characters, by far the most used text color).
- **surface-dark** `#151b17` and `#000000`: near-black areas (693 area weight each) that come from the photographic hero and darkest image regions, not a UI surface; kept as a measured dark.
- **ink-grey** `#706f73` and **ink-grey-light** `#747474`: small grey text (32 characters and 1).
- **border** `#2b333fb3` (a translucent slate) is measured once.
The caption panels are blue gradients (lighter cyan-blue at the top to the brand blue); the gradient stops are image-driven and are not measured as tokens. The root variable list is empty, so no published color variables exist on the page.

## Typography
The family is Poppins, loaded as "poppins" at 400 and 700, with the stack poppins, "Century Gothic", Helvetica, Arial, sans-serif; Arial and FontAwesome (icons) also load.
- **display** 32px / 500 / 38px, letter spacing -0.72px (hero story title, white).
- **subheading** 50px / 700 / 48px ("Our Latest Press Releases").
- **body** 16px / 400 / 24px.
- **button** 16px / 700 / 26px, uppercase.
- **nav** 13.6px / 400 / 20.4px; header primary links measure 16px / 500.
- **link** 12px / 400 / 14px, letter spacing 0.9px, uppercase (the category and date tags such as "PATIENTS | 09.23.2026").
By characters: 16px (769), 18px (647), 20px (470), 12px (450), 32px (379), 14px (338), 36px (72), 50px (34). Press-release titles are set in bold uppercase; story titles are bold sentence case.

## Layout
Measured at 1280px wide with a 60px header. The hero is full-bleed; the blue story card is anchored to its lower left and overhangs the hero's bottom edge. The tile grid has three equal columns with consistent gutters; each caption panel overlaps the lower part of its photograph and is inset from the left, with its right edge staggered relative to the image. Text block widths: body paragraph 432px, hero title 500px. Spacing tokens come from measured paddings and gaps: 1, 5, 6, 7, 10, 12, 15, 16, 18 and 20px. The button padding is 12px 16px.

## Elevation & Depth
Mostly flat, with measured shadows `0 4px 4px 0 rgba(0,0,0,0.25)`, `0 8px 4px -4px rgba(0,0,0,0.2)` and `inset 0 1px 5px rgba(0,0,0,.1)`, and a focus ring `0 0 0 2px #8CC0E0`. In the capture, depth comes from the overlap of caption panels on photographs, not from drop shadows.

## Shapes
Small radii: 3px (4 uses; buttons), 4px (5 uses), and one 25px. Buttons are 3px. Photos and caption panels have square corners; the only rounded forms are the capsule shapes drawn inside the gradient artwork.

## Components
- **button-primary**: `#0063c3` fill, white text, Poppins 16px / 700 uppercase, radius 3px, padding 12px 16px, height 50px, label "MORE STORIES" followed by a divider and an arrow icon.
- **button-secondary**: transparent with a 1px white border, white uppercase text, same size ("MORE NEWS", on the blue band).
- **link**: 12px uppercase tags with 0.9px tracking.
- **nav**: white bar with blue `#0063c3` text; **nav-link** 13.6px with 7px 0px 8px padding.
- **story tile**: photograph plus blue gradient panel containing a tag row (category, vertical rule, date), a hairline, a bold white title and an arrow at the right.
- **press-release item**: tag row, white bold uppercase title, a hairline above and an arrow at right.

## Design System Architecture
No public design system or brand guideline was found: the home page markup contains no brand, design or press-kit link, and the root variables are empty. The de-facto system is a small set of repeated patterns: the blue gradient caption panel, the tag-row (category | date), uppercase Poppins buttons, and one brand blue used for chrome and bands.

## Do's and Don'ts
- Do use `#0063c3` for buttons, links and bands, and white text on it.
- Do pair documentary photography with overlapping blue caption panels.
- Do set buttons and tags in uppercase Poppins, and titles in bold.
- Do keep corners nearly square (3px buttons).
- Don't introduce additional accent hues; the page is blue, white and photographic.
- Don't add drop shadows to tiles.

## Responsive Behavior
Measured at 390px: the hero title stays 32px / 500 / 38px (box 299px by 190px), the body paragraph is 16px / 400 / 24px (299px by 72px), and the "MORE STORIES" button keeps its 186px by 50px size, 3px radius, 12px 16px padding. Menu collapse and column counts were not measured.

## Iteration Guide
1. Start from `canvas` `#edf2f7`, white and `#0063c3`.
2. Build each story as photo plus a blue gradient panel with a tag row.
3. Use uppercase 16px / 700 Poppins for buttons.
4. Keep 50px / 700 for band headings with a thin vertical rule at the left.
5. Verify new values against `web/data/extracted/amgen.json`.

## Imagery and Voice
Photography shows patients, scientists, families and staff with direct eye contact; a close-up of a blue eye and an aerial of a solar-panel facility appear as non-portrait variants. Captions are informational and personal: "For Himself and His Daughters: One Father's Journey with Thyroid Eye Disease (TED)", "More Than Dry Eyes: The Many Faces of Sjogren's Disease", "How AI Is Changing Drug Discovery and What It Will Take to Unlock Its Full Potential". Press releases use formal uppercase headlines. Tag rows carry a category (Patients, Leadership, Responsibility, People & Culture, Science & Innovation) and a dated stamp in month, day and year format, such as "07.25.2026".

## Navigation and Content Model
The main menu on the opened "Brand Partners | Amgen" page expands to deep sub-menus: About (Overview, Amgen History, Mission and Values, Leadership, Brand Partners, Amgen Foundation, Awards and Accolades), Therapy Areas (Cardiovascular, Metabolic, Bone Health, Inflammation, Oncology), How We Operate, Science (Research and Development, Pipeline, Biosimilars, Clinical Trials) and others. That page is about sports and community partnerships rather than visual identity, so it is not a style guide. On the home page the information architecture is flattened into a stories feed: every tile shares the same anatomy (image, category tag, date, headline, arrow), which makes a repeatable card the main unit of the design. The header keeps primary links in uppercase blue and secondary corporate links (Newsroom, Partners, Investors, Careers) in a smaller grey sentence-case style at the right, separated from the primary group by whitespace.
