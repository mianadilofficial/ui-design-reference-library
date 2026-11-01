---
version: alpha
name: University of Cambridge
category: "Education"
description: "University of Cambridge (cam.ac.uk) home page: Bootstrap-based, Lato 400/500/700 on a #f8f9fa and #ffffff page, stylesheet primary teal #6bbbae, secondary magenta #e5007d, pink and teal-tint buttons with 0px radius, a black caption-bar style, a navy #010a14 footer and a 56px bold h1 on a white panel over a photograph."
colors:
  canvas: "#f8f9fa"
  page-body: "#ffffff"
  ink: "#212529"
  primary: "#6bbbae"
  on-primary: "#000000"
  secondary: "#e5007d"
  pink-tint: "#f7c0de"
  pink-tint-hover: "#f39ecc"
  teal-tint: "#d3eae6"
  teal-tint-hover: "#b9ded7"
  surface-navy: "#010a14"
  guideline-cambridge-blue: "#8ee8d8"
  guideline-dark-blue: "#133844"
  guideline-slate-4: "#232830"
typography:
  display:
    fontFamily: Lato, sans-serif
    fontSize: 56px
    fontWeight: 700
    lineHeight: 67.2px
  display-mobile:
    fontFamily: Lato, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  heading:
    fontFamily: Lato, sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 38.4px
  subheading:
    fontFamily: Lato, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: Lato, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 6px
  s3: 8px
  s4: 9.6px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 24px
  s9: 32px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.pink-tint}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 6px 12px
    height: 38px
    borderColor: "{colors.pink-tint}"
  button-primary-hover:
    backgroundColor: "{colors.pink-tint-hover}"
  button-teal-tint:
    backgroundColor: "{colors.teal-tint}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  button-teal-tint-hover:
    backgroundColor: "{colors.teal-tint-hover}"
  button-secondary:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 6px 12px
    height: 38px
    borderColor: "{colors.on-primary}"
  link:
    textColor: "{colors.secondary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 32px
    height: 114px
  nav-link:
    textColor: "{colors.secondary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
---

## Overview

The University of Cambridge home page (https://www.cam.ac.uk/, reached from cam.ac.uk) is an institutional front door built from photography and flat colour blocks rather than ornament. The page title is "University of Cambridge" and the document is English (`lang` en). A 114px white header carries the crest and the serif wordmark "UNIVERSITY OF CAMBRIDGE" at left and two controls at right: "Search" and "Menu", each with an icon. Below it a full-width hero photograph shows students walking past a honey-coloured stone college wall; on the left, a white panel holds the h1 "Welcome to Cambridge" in bold black, and a black strip beneath it reads "Thinking of studying an undergraduate course at the University from 2027?" with the teal link "Find out about our application dates and deadlines...".

Under the hero, two equal signposts sit side by side: "Undergraduate" on a teal field and "Postgraduate" on a magenta field, each with a light "Learn more" button and a black "Find your course" button. A large video embed follows ("How is drought affecting plants and pollinators? An expert analysis"), then a three-column grid of photographs with centred black caption bars: "Libraries", "Museums", "Research", "Business and enterprise", "Alumni" and "Sport". Further down the page, according to the opened page text, come "News" ("Updates from across the University"), "Events" ("Concerts, lectures, sports events, and more"), "Student perspectives", "Cambridge on Instagram", a "Follow us" row and a four-column footer; the footer is the navy `{colors.surface-navy}` band.

A small cookie-settings tab sits at the left edge of the hero in the capture (a navy triangle with a gear icon and a magenta outline). It is a consent control, not brand UI, and is excluded from every token here. The voice is plain and directive: short imperative labels ("Learn more", "Find your course", "See more news"), and people photographed at work and study, in colour, with no filters.

## Colors

The measured palette is built from the stylesheet's own variables, which override the stock Bootstrap set.

- `{colors.canvas}` #f8f9fa is the page background and the largest measured area (weight 5120); it is the stylesheet's `--light`. `{colors.page-body}` #ffffff is the header, hero panel and video-section white (weight 1240; `--white`).
- `{colors.ink}` #212529 is the body text color (1482 characters). Black #000000 is the second text color (737 characters), used for the h1, h2, h3 and the black button and caption bars; the stylesheet calls it `--dark`.
- `{colors.primary}` #6bbbae is the stylesheet's `--primary`: the Undergraduate field, and the color of the teal links on black ("Find out about our application dates and deadlines...", "See more news", "See more events"). `{colors.secondary}` #e5007d is `--secondary`: the Postgraduate field and the default anchor color.
- `{colors.pink-tint}` #f7c0de (`--quaternary`) is the fill of the Postgraduate "Learn more" button, hovering to `{colors.pink-tint-hover}` #f39ecc. `{colors.teal-tint}` #d3eae6 (`--tertiary`) is the fill of the Undergraduate "Learn more" button, hovering to `{colors.teal-tint-hover}` #b9ded7.
- `{colors.on-primary}` #000000 is the label color on both tinted buttons; white text appears on black buttons and caption bars (669 characters).
- `{colors.surface-navy}` #010a14 is the dark footer band (845 area weight; the last desktop band, from y 4950, is this color).

Three further tokens come from the University's published colour guidelines at https://www.cam.ac.uk/brand-resources/guidelines/colour, not from the home page: `{colors.guideline-cambridge-blue}` #8ee8d8, `{colors.guideline-dark-blue}` #133844 and `{colors.guideline-slate-4}` #232830. The guideline page says Cambridge Blue "should form the base of all our communications" and to "use Slate 4 for text instead of black"; the home page itself measures #6bbbae, #212529 and #000000, none of which appears in the guideline palette, so treat the guideline tokens as the official reference and the other colours as the shipped site.

## Typography

The live page is set in Lato, loaded at weights 300, 400 and 700, and it covers all 3121 measured characters; Open Sans (variable, 300-800) is also loaded. The published typography guidelines (https://www.cam.ac.uk/brand-resources/guidelines/typography) name different faces for the brand: Feijoa for headlines and Open Sans for body copy, with Arial as a fallback, a 16px digital minimum and 140% leading. Feijoa is not among the fonts loaded by the home page, so a rebuild of the shipped site uses Lato.

- `{typography.display}`: Lato 56px, weight 700, line height 67.2px; the h1 "Welcome to Cambridge", black on a white panel (608px wide, 150px high).
- `{typography.heading}`: 32px, weight 500, line height 38.4px; section headings such as "News".
- `{typography.subheading}`: 20px, weight 500, line height 24px; event and story titles (for example "Admissions - Undergraduate Subject Masterclasses").
- `{typography.body}`: 16px, weight 400, line height 24px; the most-read size (1833 characters), also used for button labels and links.

Other sizes measured by characters are 20px (506), 12px (426), 17.6px (100), 14px (82), 19.2px (58) and 24px (25). Weights by characters: 400 (2480), 500 (462), 600 (82), 300 (77) and 700 (20). Letter spacing is `normal` throughout.

## Layout

Desktop is a 1280px frame; the page height is 5281px. The extraction recorded six bands: a 120px white header; a 666px hero photograph with content spanning x 0 to 608 (the title panel); a 40px band on `{colors.canvas}`; a 70px signpost band with two columns (content x 16 to 1264); a 4054px band on `{colors.canvas}` with three columns (content x 55 to 1225); and the 331px navy footer with four columns (content x 15 to 1129). The tile grid holds three columns of photographs with black caption bars at the bottom of each tile, and the layout probe recorded at most 3 card columns on desktop.

Spacing follows small browser-like steps: paddings of 15px (26 uses), 24px, 16px, 32px, 8px, 9.6px, 6px and 12px, which map to `{spacing.s6}`, `{spacing.s8}`, `{spacing.s7}`, `{spacing.s9}`, `{spacing.s3}`, `{spacing.s4}`, `{spacing.s2}` and `{spacing.s5}`. The header padding is 32px. White space is generous around the video and between sections; photographs run edge to edge in the hero and are inset in the grid.

## Elevation & Depth

No box shadow was measured on a visible element (the desktop shadow table is empty). Hierarchy comes from fills: a white panel cut into the hero photograph, black caption bars across the bottom of each tile, a navy footer, and the two coloured signposts. The stylesheet declares Bootstrap-style focus rings, for example `0 0 0 .2rem rgba(107,187,174,.25)` and `.5` (the primary at 25% and 50%), plus green and red validation rings; they apply to form controls and are not decoration.

## Shapes

Everything is square. The primary and secondary buttons, the nav, links and the caption bars all measure 0px radius (`{rounded.none}`), and the hero panel, tiles and bands are rectangles. The rounded play button in the video embed is part of the embedded YouTube player, not the university's own style. The corner radii present in the stylesheet corpus (4px, 8px, 50px and others) were not measured on any visible element of this page.

## Components

- Tinted button: Lato 16px/400 label in `{colors.on-primary}`, 38px high, padding 6px 12px, 1px border in the same color as the fill, 0px radius, underlined text. Two fills are measured: `{colors.pink-tint}` and `{colors.teal-tint}`; hover darkens to `{colors.pink-tint-hover}` and `{colors.teal-tint-hover}`.
- Black button ("Find your course"): `{colors.on-primary}` fill, white 16px/400 text, 38px high, padding 6px 12px, 1px black border (`{components.button-secondary}`).
- Dark text button ("See more news", "See more events"): black fill, `{colors.primary}` text at 20px.
- Header: 114px white bar with 32px padding, the crest and wordmark at left and "Search" and "Menu" at right; the Search link gains an underline on hover.
- Hero panel: white box with the 56px h1 cut into the photograph, then a black strip with 16px white text and a teal link.
- Signpost: a full-height colour field (`{colors.primary}` or `{colors.secondary}`) with a 20px title, a tinted "Learn more" button and a black "Find your course" button.
- Photo tile: a photograph with a centred white-on-black caption bar.
- Footer: `{colors.surface-navy}` band with four link columns.

## Design System Architecture

The University publishes brand guidelines at https://www.cam.ac.uk/brand-resources/guidelines, with colour, typography, photography, templates and logo pages (https://www.cam.ac.uk/brand-resources/logo), and a content style guide at https://www.cam.ac.uk/brand-resources/content/style-guide. Those guidelines describe a print-and-digital identity (Cambridge Blue core palette, Feijoa and Open Sans). The shipped CSS is a Bootstrap 4 build: the root declares the stock Bootstrap variables (`--blue` #007bff, `--indigo`, `--purple`, `--pink` #e83e8c, `--green` #28a745, `--gray` #6c757d, `--gray-dark` #343a40) and the breakpoints `--breakpoint-xs` 0, `--breakpoint-sm` 576px, `--breakpoint-md` 768px, `--breakpoint-lg` 1024px and `--breakpoint-xl` 1280px, and then four brand overrides: `--primary` #6BBBAE, `--secondary` #E5007D, `--tertiary` #d3eae6 and `--quaternary` #f7c0de, with `--dark` #000000 and `--light` #f8f9fa. Font Awesome 6 (light, regular, duotone, thin, sharp, brands) provides icons.

## Do's and Don'ts

- Do keep surfaces flat and square: 0px radius, no shadows.
- Do pair a tinted "Learn more" with a black "Find your course" at 38px height.
- Do use teal `{colors.primary}` and magenta `{colors.secondary}` as large colour fields, one per audience.
- Do set the h1 in black Lato 700 on a white panel over a photograph.
- Do use caption bars in black with white text on photo tiles.
- Don't use the stock Bootstrap variables (#007bff and the like) as brand colors; they are declared but were not measured on screen.
- Don't treat the cookie-settings tab as a component.
- Don't mix the guideline palette tokens into the shipped teal and magenta fields without a design decision; they differ.

## Responsive Behavior

Measured at the 390px mobile pass. The h1 is `{typography.display-mobile}` (40px, 700, line height 48px), white on a black box 390px wide and 112px high. The h2 stays at 32px/500, body text at 16px/400 with 24px line height, and the tinted button is 98px by 38px with padding 6px 8px. The layout probe recorded the same two header links and a "Menu" toggle on desktop and mobile, and at most 1 card column on mobile against 3 on desktop. The mobile band list is a 62px white header, a 235px hero, a 112px black strip, a 7850px white band with one column (content x 15 to 375) and a 898px navy footer with one column. The breakpoint variables are declared in the stylesheet (576px, 768px, 1024px, 1280px); which layout changes occur at each is not measured.

## Iteration Guide

1. Start with `{colors.canvas}` and `{colors.page-body}` bands and `{colors.ink}` text.
2. Put one photograph full-width at the top with a white h1 panel in `{typography.display}`.
3. Add a two-field signpost using `{colors.primary}` and `{colors.secondary}` with `{components.button-primary}` and `{components.button-secondary}`.
4. Build the tile grid with photographs and black caption bars; keep three columns on desktop and one on mobile.
5. Close with a `{colors.surface-navy}` footer; use `{colors.guideline-slate-4}` and `{colors.guideline-dark-blue}` only where the official guideline colours are required.
6. Re-measure the News and Events cards before declaring card tokens; they were below the capture.
