---
version: alpha
name: "Wildy Riftian"
category: "Portfolio"
description: "Portfolio of Wildy Riftian: black, #171717 and #f5f5f5 bands with one electric yellow #ffe430 card, Lock Serif Light display at 80px, uppercase JetBrains Mono 12px and 14px interface text, 6px radii and a faint upward shadow."
colors:
  canvas: "#171717"
  page-body: "#212121"
  ink: "#f5f5f5"
  primary: "#ffe430"
  ink-dark: "#212121"
  surface-3: "#000000"
  ink-3: "#ababab"
typography:
  display:
    fontFamily: "\"Lock Serif Light\", \"Lock Serif Light Placeholder\", serif"
    fontSize: 80px
    fontWeight: 300
    lineHeight: 80px
  display-mobile:
    fontFamily: "\"Lock Serif TRIAL Light\", \"Lock Serif TRIAL Light Placeholder\", serif"
    fontSize: 119.539px
    fontWeight: 400
    lineHeight: 95.6315px
  heading:
    fontFamily: "\"Lock Serif Light\", \"Lock Serif Light Placeholder\", serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 56px
  subheading:
    fontFamily: "\"Lock Serif Light\", \"Lock Serif Light Placeholder\", serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 36px
  body:
    fontFamily: "\"JetBrains Mono\", \"JetBrains Mono Placeholder\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 24px
    textTransform: uppercase
rounded:
  xs: 6px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 13px
  s8: 16px
  s9: 24px
  s10: 30px
components:
  card-about:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-dark}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
  link:
    textColor: "{colors.ink-dark}"
    typography: "{typography.body}"
---

# Wildy Riftian

## Overview

wildyriftian.com is the portfolio of Wildy Riftian, a multidisciplinary designer from Indonesia working across motion, branding, illustration and 3D, currently listed as based in the Bay Area, CA. The page title is "Wildy Riftian". The measured home page is 4880px tall at 1280px wide and opens on a black hero with a 3D glass key-ring of tags ("motion", "Editorial", "Photography") under the lines "A COLLECTION OF VISUAL WORKS" and "WILDY RIFTIAN 2026" and a "SCROLL DOWN" cue. It then moves to a yellow "ID card" panel on charcoal, where the headline "Wildy Riftian does" is followed by a handwritten-script rotating word ("motion desi…"), and to a light featured-work section on `#f5f5f5` with project titles in a light serif and descriptions in uppercase monospace. The footer credits "Website by SURD.STUDIO".

The identity pairs three voices: a light display serif (Lock Serif), uppercase JetBrains Mono for all interface text, and a handwritten script (Biro Script) for a single playful accent. Electric yellow `#ffe430` is the only hue.

The opened homepage names three featured projects: the "Flavors of Indonesia Illustrated Cookbook" (2024, illustration, a retro warung-inspired design), "Overbloom" (2026, a short animated piece about spring allergies with handmade textures and soft colors) and "Venturi: 3D Sneaker Product Visualization" (2025). Contact is by email, Instagram, LinkedIn and a hosted resume. The copy voice is first person and plain: "I'm a multidisciplinary designer from Indonesia working across motion, branding, illustration, and 3D."

## Colors

- `canvas` `#171717` is the dominant dark background (4198 area units), `page-body` `#212121` is the charcoal page base (5132 units), and `surface-3` `#000000` is the pure black of the hero (1024 units). `#202020` also measures 1024 units.
- `ink` `#f5f5f5` is the light text on dark and the light page of the featured section (925 units). `ink-dark` `#212121` is the text colour on light and yellow surfaces (1706 measured characters). `ink-3` `#ababab` is a mid grey for secondary labels (73 characters).
- `primary` `#ffe430` is the electric yellow (913 area units), used for the about card and the yellow 3D tags; the site's own Framer variables list it with `#212121`, `#d9d9d9`, `#ababab` and `#f5f5f5`. `#d9d9d9` is a light grey chip colour (913 units).
- The generated role detection assigned `primary` to `#212121` (no button was found); `primary` is reassigned here to the measured yellow accent, and the generated value is kept as `ink-dark`.

## Typography

Lock Serif Light is the display and heading face: 80px at weight 300 with an 80px line height for the name "Wildy Riftian"; 48px at weight 400 with a 56px line height for project titles such as "Flavors of Indonesia Illustrated Cookbook"; 28px at weight 400 with a 36px line height for category names such as "Motion Design"; and a 45px size with -0.45px tracking for the about headline. On the measured mobile pass a very large 119.539px "Lock Serif TRIAL Light" decorative word (line height 95.6315px, text "WILDYRIFTIANWORKS") was recorded.

JetBrains Mono at weight 400 does all interface and body work (1787 of about 2000 characters), in uppercase: 14px with a 24px line height for navigation, 12px with a 24px line height for descriptions and metadata, and 10px for the smallest labels. By character count 14px (893) and 12px (781) dominate. Biro Script reduced Regular supplies the handwritten word (21 characters). Weights are 300 and 400 only. JetBrains Mono is an open-source font; Lock Serif and Biro Script are commercial or trial faces, with a light transitional serif and a casual script as the nearest alternatives.

## Layout

The layout is a series of full-width bands: black hero with a centred 3D object and text pinned to the left and right edges at mid height, a charcoal band holding a centred yellow card, and a light band for featured work. The yellow card is a framed grid with dotted rules and tiny registration marks (corner squares, punched circles at the left edge), a tag strip ("01 MOTION DESIGN", "ABOUT"), a pagination counter "01 / 06" and a footer strip with "CURRENTLY IN BAY AREA, CA" and latitude and longitude. Featured work blocks have a folder-tab label ("FEATURED WORK 01", "SEE ALL WORKS →"), a large serif title, a year and category line ("2024 ILLUSTRATION WORKS"), tag chips, an uppercase description with a "VIEW PROJECT →" link, and a mosaic of project images at the right. Spacing values measured are 4px, 5px, 6px, 8px, 10px, 12px, 13px, 16px, 24px and 30px. A small "Site of the Day" badge is fixed at the right edge in the capture; it is a third-party widget and not a brand token.

## Elevation & Depth

One shadow was measured, on 6 elements: `rgba(0, 0, 0, 0.1) 0px -1px 2px 0px`, a faint upward shadow for the folder-tab and panel edges. Depth otherwise comes from the 3D-rendered glass and acrylic objects in imagery, and from the contrast between black, charcoal and light bands.

## Shapes

Radii are `xs` 6px, measured in forms "6px", "6px 0px 0px" and "6px 0px 0px 6px" (8 elements), mostly as the rounded top-left corner of the tab labels and the rounded yellow card. The tab shapes also have angled corners drawn as shapes. Everything else is square.

## Components

- **yellow card**: `#ffe430` fill, 6px radius, dotted internal rules, uppercase monospace labels in `#212121`, serif headline and script accent.
- **folder-tab label**: a `#f5f5f5` tab with an angled right edge reading "FEATURED WORK 01", set above the light band, with a matching dark tab for "SEE ALL WORKS →".
- **tag chip**: `#d9d9d9` chip with 12px uppercase monospace text such as "COOKBOOK DESIGN, ILLUSTRATION, EDITORIAL".
- **text link**: 12px uppercase monospace with an arrow, for example "VIEW PROJECT →".
- **navigation**: uppercase 14px monospace items HOME, WORKS, ABOUT, CONTACT.
- **category index**: 01 Motion Design, 02 Brand Design, 03 Editorial Design, 04 Photography, 05 Illustration, 06 3D Tech, as seen on the opened homepage.

No filled buttons, form inputs or cards with shadows beyond the single faint shadow were measured.

## Design System Architecture

No public design system or brand guideline is linked from https://www.wildyriftian.com/ (the opened page lists Home, Works, About, Contact and social links, and credits Website by SURD.STUDIO). The de-facto system is the Framer project's colour variables, five `--token-…` custom properties holding `#ffe430`, `#212121`, `#d9d9d9`, `#ababab` and `#f5f5f5`, with Framer font stacks that declare a "Placeholder" fallback for each family. Tokens in this file were measured from the rendered page.

## Do's and Don'ts

- Do set interface text in uppercase JetBrains Mono at 12px to 14px with a 24px line height.
- Do use the light display serif at large sizes for names and project titles.
- Do reserve yellow `#ffe430` for the single hero card and 3D accents.
- Do add small technical details: counters, coordinates, registration dots.
- Don't use bold weights; only 300 and 400 were measured.
- Don't add shadows beyond the faint upward 2px shadow.
- Don't treat the Site of the Day badge as part of the brand.

## Responsive Behavior

The extraction's mobile pass recorded a decorative 119.539px serif word with a 95.6315px line height, 358px wide, and a "Wildy Riftian" heading at the same family. Navigation behaviour, band stacking and touch targets on small screens were not measured. Breakpoints are not measured.

## Iteration Guide

1. Start with `#171717`, `#212121`, `#f5f5f5` and the single accent `#ffe430`.
2. Set names and titles in a light serif (80px, 48px, 28px) and everything else in uppercase mono at 14px and 12px.
3. Build framed cards with dotted rules, 6px radii and tiny index labels.
4. Use light and dark bands, with 3D rendered objects for the hero.
5. Re-run the extractor and gate after changes.
