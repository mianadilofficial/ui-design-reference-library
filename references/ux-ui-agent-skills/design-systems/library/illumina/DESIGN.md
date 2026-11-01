---
version: alpha
name: Illumina
category: "Healthcare & Wellness"
description: "Illumina's home page is a clean white and warm-grey (#f4f2f0) science-marketing page set entirely in Inter (light 300 headlines at 49.024px, 17.536px body), with pill buttons of 100px radius in periwinkle #4e60ee and dark #1f1d1a spotlight bands carrying orange and violet gradients."
colors:
  canvas: "#ffffff"
  page-largest: "#f4f2f0"
  ink: "#4c4a48"
  primary: "#4e60ee"
  on-primary: "#ffffff"
  accent-blue: "#225de6"
  accent-violet: "#a664fd"
  accent-pumpkin: "#ed8b00"
  ink-deep: "#1f1d1a"
  ink-black: "#111111"
  ink-slate: "#444648"
  nav-text: "#666666"
  nav-border: "#ebebeb"
  footer-border: "#eaeaeb"
typography:
  display:
    fontFamily: Inter, Arial, -apple-system, "system-ui", "Segoe UI", sans-serif, Arial, -apple-system, "system-ui", "Segoe UI", sans-serif
    fontSize: 49.024px
    fontWeight: 300
    lineHeight: 58.8288px
    letterSpacing: "-1.0295px"
  display-mobile:
    fontFamily: Inter, Arial, -apple-system, "system-ui", "Segoe UI", sans-serif, Arial, -apple-system, "system-ui", "Segoe UI", sans-serif
    fontSize: 29.177px
    fontWeight: 400
    lineHeight: 35.0124px
    letterSpacing: "-0.612717px"
  heading:
    fontFamily: Inter, Arial, -apple-system, "system-ui", "Segoe UI", sans-serif, Arial, -apple-system, "system-ui", "Segoe UI", sans-serif
    fontSize: 32.448px
    fontWeight: 300
    lineHeight: 43.8048px
    letterSpacing: "-0.616512px"
  body:
    fontFamily: Inter, Arial, -apple-system, "system-ui", "Segoe UI", sans-serif, Arial, -apple-system, "system-ui", "Segoe UI", sans-serif
    fontSize: 17.536px
    fontWeight: 400
    lineHeight: 26.304px
    letterSpacing: "-0.192896px"
  button:
    fontFamily: Inter, Arial, -apple-system, "system-ui", "Segoe UI", sans-serif, Arial, -apple-system, "system-ui", "Segoe UI", sans-serif
    fontSize: 17.536px
    fontWeight: 600
    lineHeight: 20.1664px
rounded:
  xs: 2px
  sm: 3px
  md: 5px
  lg: 7px
  xl: 10px
  2xl: 14px
  3xl: 16px
  4xl: 100px
spacing:
  s1: 1px
  s2: 2px
  s3: 5px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 10px 26px
    height: 44px
    borderColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 10px 26px
    height: 44px
    borderColor: "{colors.canvas}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 10px 26px
    borderColor: "{colors.canvas}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-text}"
    borderColor: "{colors.nav-border}"
  card:
    textColor: "{colors.canvas}"
    rounded: "{rounded.xl}"
    padding: 26px 42px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-deep}"
    padding: 84px 0px
    borderColor: "{colors.footer-border}"
---

## Overview

Illumina (page title "Illumina | Sequencing and array solutions to fuel genomic discoveries") presents genomics hardware and reagents on a bright, quiet white page. The first screen is a full-width hero image with the label "Illumina StrataMap Spatial", the headline "Open doors to spatial discovery", a subline "Scalable, unbiased, barrier-free" and a white pill "Learn more". Below it the page alternates three surfaces: white (#ffffff), a warm light grey (#f4f2f0, the largest measured background area) used for rounded panels, and a near-black #1f1d1a band carrying orange-to-violet gradient art for the "Innovation for real-world impact" section.

Photography is documentary and human: lab technicians in pale coats at benchtop instruments, product shots of sequencers, library-prep tubes and a DRAGEN chip on a dark circuit-board background. Illustrations are small orange-and-cream circular vignettes of cells, grain and molecules. Headlines are sentence case, light and large, with an orange or white vertical rule at the left of several section titles ("Innovation for real-world impact", "Products and services"). The voice is mission-led: "Improving human health with genomics can't wait".

The measured page is 7129px tall at 1280px wide. The footer carries the legal line "For Research Use Only. Not for use in diagnostic procedures" and a 600px-tall white block with an #eaeaeb border.

A modal location picker and a dimming scrim (#00000080) were present in the first capture; the tokens were re-extracted and the modal and its blue "Select this Location" button, input and shadow are excluded here and are not brand UI.

## Colors

- **Periwinkle blue (#4e60ee, `primary`)** is the interactive color: the label color of every outlined pill ("Meet Illumina", "Explore focus areas", "View roadmap", "View kit") and the 2px outline of those pills (#4e60ee appears 6 times among border colors). The stylesheet also declares `--colors-ctasPrimaryReverse: #6a7af0` and focus `--colors-componentsFocus: #7e8bf3`.
- **Gradient pair (#225de6 and #a664fd)** is declared as `--colors-ctasInteractiveGradient: linear-gradient(8.62deg,#225de6 10%,#a664fd)` and measured on the "core technologies" cards as `linear-gradient(8.62deg, rgb(34, 93, 230) 10%, rgb(166, 100, 253))` with white 15.52px / 600 labels.
- **Pumpkin (#ed8b00)** is `--colors-typeAccentPumpkin`; the orange of the spotlight bands and vertical rules sits in this family. Only the declared value is documented.
- **Ink**: body copy is #4c4a48 (1889 characters), headings #1f1d1a (`--font-color-heading`), strong text #111111, secondary #444648, navigation #666666.
- **Surfaces**: #ffffff, #f4f2f0, #1f1d1a, #ededed, #353330.
- **Borders**: #ebebeb on the navigation, #eaeaeb on the footer.

## Typography

One family is loaded: Inter in weights 300, 400 (plus 400 italic), 500, 600 and 700; Inter accounts for all 4381 measured characters. The stack is Inter, Arial, -apple-system, system-ui, Segoe UI, sans-serif.

- **Display (h1):** 49.024px / 58.8288px, weight 300, -1.0295px letter spacing; 29.177px / 35.0124px, weight 400 in the 390px pass.
- **Heading (h2, h3):** 32.448px / 43.8048px, weight 300, -0.616512px tracking.
- **Body:** 17.536px / 26.304px, weight 400, -0.192896px tracking. The root body is 16px / 24px with -0.176px.
- **Button:** 17.536px / 20.1664px weight 600.
- **Other measured sizes:** 21.472px (545 characters), 14px (1290), 15.52px (196, card labels).

Headlines are deliberately light (300) at large size with negative tracking; emphasis moves to weight 600 only on buttons and card labels. Inter is a free open-source font, so no substitute is needed.

## Layout

The stylesheet defines a spacing scale by name (`--spacing-md` and `--spacing-4xl: 178px`); measured spacings on elements are 1px, 2px, 5px, 7px, 8px, 10px, 15px, 16px, 20px and 25px. The navigation is a 41px header with a 1px #ebebeb border and five text links (Products, Solutions, Learn, Company, Support) plus "Recommended Links"; above it a utility row holds search, "Order Status" and icons. Content sits in a centered container with two-column sections (text left, image right, or the reverse), full-bleed bands for the dark spotlight, and a four-up product grid ("Sequencing platforms", "Microarrays", "Library prep kits", "Software"). Cards use 16px radii; the footer has 84px vertical padding.

## Elevation & Depth

Depth is nearly absent. The only measured shadows are a layered `rgba(0, 0, 0, 0.05) 0px 3px 1px -2px, rgba(0, 0, 0, 0.15) 0px 4px 8px 0px` and a 1px white inset ring; the stylesheet also declares `--shadows-dropdownMenu: 0 10px 15px rgba(49,45,50,.2)` for menus. Separation comes from background tone changes (#ffffff to #f4f2f0 to #1f1d1a) and from 1px hairlines.

## Shapes

Pill buttons are 100px radius (29 elements). Panels and cards use 16px (9 elements, including a `16px 16px 0px 0px` and `0px 0px 16px 16px` pair for stacked image cards), 10px, 7px, 5px, 3px and 2px for small controls. The stylesheet declares `--radii-2xs: 4px`. Images in the capture have rounded corners that match the 16px card radius.

## Components

- **Outlined pill button.** White fill, #4e60ee 600-weight 17.536px label, 10px 26px padding, 44px high, 100px radius. The same look is used for "Meet Illumina", "Explore focus areas", "Learn more", "View roadmap" and "View kit".
- **Navigation.** White header, 1px #ebebeb border, #666666 16px links.
- **Gradient technology cards.** Blue-to-violet gradient fill, white 15.52px / 600 label, icons above.
- **Cards.** 26px 42px padding, 16px radius, used for product tiles and spotlight banners.
- **Footer.** White, #1f1d1a text, 84px vertical padding, #eaeaeb border.

- **Section headers with rules.** Titles such as "Products and services" and "Innovation for real-world impact" sit beside a vertical rule at the left edge of the title block, with a short supporting paragraph in the right column.
- **Resource lists.** "Resources and tools" and "24/7 support and education" present underlined text links in two columns (for example "Product selection tools", "Run setup", "Safety data sheets", "Technical Support Knowledge Base"), each column closed by an outlined pill ("See all resources & tools", "Contact us").
- **News row.** "Impact in action" shows three dated items (Webinar, Feature Article, Research Publication) with a pill-style link each, beside a large rounded photograph.
- **Spotlight banners.** Full-width orange-gradient cards with a small icon, the label "Innovation spotlight" or "Solutions spotlight", a title and a white pill at the right.

## Design System Architecture

No public Illumina design system or brand-guideline page was found: /brand, /press and /design on www.illumina.com return 404 (the /about path redirects to /company/about-us.html, a corporate page with no design-system link). The de-facto system is the shipped stylesheet at https://www.illumina.com/, whose root variables use a role-named convention (`--colors-ctasInteractiveGradient`, `--colors-bordersInputs: #a5a5a3`, `--colors-typeAccentPumpkin`, `--font-color-heading`, `--radii-2xs`, `--spacing-4xl`, `--shadows-dropdownMenu`, `--letterSpacings-navigation`), plus Font Awesome 6 icon fonts (Duotone, Sharp Light).

## Do's and Don'ts

- Do set headlines in Inter 300 with negative tracking and sentence case.
- Do use 100px pills outlined in #4e60ee for actions.
- Do alternate #ffffff, #f4f2f0 and #1f1d1a bands.
- Do use real lab photography with people and instruments.
- Don't add heavy shadows; the page relies on tone and hairlines.
- Don't treat the location-selection modal, its scrim or its blue button as brand UI.
- Don't use browser default blue (#0000ee) for links.

## Responsive Behavior

The 390px pass measured: h1 29.177px / 35.0124px weight 400, h2 23.014px / 31.0689px, body 16.023px / 24.0345px, and the "View roadmap" pill at 16.023px weight 600 with 100px radius. The navigation header measured 390px wide with 1px height in that pass. Column behavior, menu form and breakpoints were not measured.

## Iteration Guide

1. Begin on white; use #f4f2f0 for one rounded panel and #1f1d1a for one spotlight band.
2. Set headings in Inter 300 at 49.024px with -1.0295px tracking.
3. Use 17.536px body at #4c4a48.
4. Build actions as 44px-high pills, 100px radius, #4e60ee label.
5. Use #225de6 to #a664fd gradients for technology cards only.
6. Exclude overlays and dialogs when measuring.
