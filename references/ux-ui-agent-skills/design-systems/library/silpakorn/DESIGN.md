---
version: alpha
name: Silpakorn University
category: "Thai Brands"
description: "Silpakorn University (su.ac.th/en), Thailand's creative university: deep green #003f39 canvas and footer, SU green #008174 buttons, #f5f5f7 page tint, manop-variable body at weight 680 and the custom SILPAKORN70yr display face, with asymmetric 20px corner radii and 130 circular elements."
colors:
  canvas: "#003f39"
  page-body: "#f5f5f7"
  ink: "#ffffff"
  primary: "#008174"
  on-primary: "#ffffff"
  gray-2: "#dfdfdf"
  ink-deep: "#1f2a2e"
  ink-black: "#000000"
  ink-white-80: "#ffffffcc"
  primary-hover: "#006a5f"
  green-light: "#f1fdfa"
  green-bright: "#04cc9d"
  gray-3: "#797979"
  faculty-orange: "#e76126"
typography:
  display:
    fontFamily: manop-variable, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 43.2px
  display-mobile:
    fontFamily: manop-variable, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 33.6px
  heading:
    fontFamily: SILPAKORN70yr, sans-serif
    fontSize: 60px
    fontWeight: 400
    lineHeight: 75px
  subheading:
    fontFamily: manop-variable, sans-serif
    fontSize: 18px
    fontWeight: 680
    lineHeight: 21.6px
  body:
    fontFamily: manop-variable, sans-serif
    fontSize: 28px
    fontWeight: 680
    lineHeight: 33.6px
  nav:
    fontFamily: SILPAKORN70yr, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 48px
rounded:
  xs: 4px
  sm: 5px
  md: 20px
  lg: 40px
  xl: 50px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3.2px
  s3: 4.8px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 11.2px
  s9: 12px
  s10: 13.2px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 8px 16px
    height: 70px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 8px 16px
    height: 43px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
    padding: 0px 24px 11.6px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 13.2px 13.2px 7.2px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 4px 12px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 48px 0px
---

## Overview

Silpakorn University (www.su.ac.th/en, titled "Silpakorn University | Thailand's Leading Creative University") is a Thai public university known for art and design. The measured English home page is 1280px wide and 6,269px tall. It opens on a deep-green gradient hero with a collage of cut-out figures, buildings and Thai ornament, the line "Silpakorn University" over the 60px headline "Thailand's Leading Creative University" and two buttons, Apply (Undergraduate) and Apply (Graduate). A floating white header tab with the green SILPAKORN seal and wordmark carries Faculties & Programs, About, Other and an EN language selector.

Beneath the hero is a sequence of titled modules on a light gray page: News & Updates (three cards with photo, bold headline, a green category line and a relative time), "The Birthplace of Creativity" (a mosaic of campus photographs with overlaid names and "Since" years), "Programs at Faculty of Decorative Arts" (a marquee of program names separated by orange squares with Explore More and a pause button), SU on Social Media tiles, Awards, International Collaboration (a card list of partner universities), a statistics row (229 programs, 15 faculties and colleges, 33,208 students, 6 campuses), a second marquee, a photo carousel and a deep-green footer 1,022px tall with link columns. A tribute pop-up covered the first capture; the page was re-measured with that scrim hidden by the extractor, and the pop-up is not documented as brand UI.

## Colors

The palette is green-based. The SU green main is #008174 (primary, fills the Apply button and cards, colors links and nav text, 2,349 text characters). The canvas token is the dark green #003f39 (footer and body text color: 6,807 characters, the most-read text color, and 1,309 area weight). The page tint is #f5f5f7 (7,592 area weight, the largest), with #dfdfdf (gray-2, 2,011) as a secondary panel gray, #ffffff (720), #f1fdfa (a pale green) and #ffffffbf. Text colors: #003f39, #008174, #1f2a2e (918), #000000 (512), #ffffff (347), #ffffffcc (105) and #797979 (59, metadata).

The site's variables name the system: --su-green-main #008174, --su-green-ori #006a5f (button hover), --su-green-dark-1 #003f39, --su-green-light-1 #04cc9d, --su-green-light-2 #f1fdfa, --gray-1 #f5f5f5, --gray-2 #dfdfdf, --gray-3 #797979, --white-1 #f5f5f7. A set of sixteen faculty colors with light tints is defined as --fac-1 to --fac-16, for example --fac-4 #e76126 (orange, the marquee separator), --fac-3 #693e78, --fac-6 #1e415c, --fac-7 #e9971d, --fac-12 #05afae and --fac-16 #bb312b. #007aff (--swiper-theme-color) and Bootstrap's --bs-primary #dc3545 and --bs-orange are framework variables, not brand colors.

## Typography

Two families: manop-variable (9,804 characters, a variable font with weights 100 to 900) and the custom SILPAKORN70yr (1,292, weight 400), the display face (the family name is SILPAKORN70yr). The wordmark and nav use SILPAKORN70yr at 32px / 48px weight 700; the hero headline uses it at 60px / 75px weight 400. manop-variable is used at weight 680 for body and subheads: 18px / 21.6px (news headlines) and 28px / 33.6px (lead text), with the hero h1 "Silpakorn University" at 36px / 43.2px weight 400 (mobile 28px / 33.6px).

Sizes by characters: 18px (5,347), 28px (4,433), 14px (406), 48px (400), 60px (210), 80px (180), 16px (50), 24px (38), 36px (24). Weights: 680 (8,451), 400 (1,550), 500 (1,084), 700 (9), 600 (2). No letter-spacing was measured. The 48px and 80px sizes are the marquee program names.

## Layout

The desktop layout is a centered container on a #f5f5f7 page with 16px as the dominant padding (175 uses), then 10px (17), 12px (14), 8px (12), 5px (12), 24px (8), 13.2px (8) and 48px (3); gaps are 16px, 4.8px and 10px. The header is a floating 736px-wide tab with padding 0px 24px 11.6px. The statistics row is four equal cards; the campus mosaic is a five-tile asymmetric grid; the news row is three equal cards. The footer is 1,022px tall with 48px vertical padding and four link columns.

## Elevation & Depth

Two shadows were measured: rgba(0, 0, 0, 0.1) 0px 4px 12px 0px on 8 elements (cards) and rgba(0, 0, 0, 0.25) 0px 1px 4px 0px on 3. Cards are lifted off the gray page with the soft 12px shadow; the hero uses a green gradient, photographic collage and translucent overlays rather than shadows. The header tab has a custom clipped outline with a notch.

## Shapes

The shape language mixes full circles and asymmetric corners. Radii: 50% (130 elements, icon and social buttons, pager dots), 4px (22), 0px 0px 20px (19, i.e. only the bottom-right corner rounded, the Apply and Explore More buttons), 20px (11), 20px 0px 0px (4, only the top-left rounded, the cards), 50px (3), 40px 0px 0px (1) and 5px (1). Campus photo tiles have rounded 20px corners and the statistics cards have a single rounded corner.

## Components

Button-primary (Apply (Undergraduate)): #008174 fill, white manop-variable 18px weight 680 / 27px text, 0px radius except the bottom-right 20px, padding 8px 16px, 195px by 70px; hover fill #006a5f. Button-secondary (Apply (Graduate)): white fill, #008174 text, the same radius and padding, 43px high. Outlined button (Explore More): transparent, 1px solid #008174, #008174 text. Navigation: white floating tab, #008174 SILPAKORN70yr 32px text. Card: #008174 fill (or white) with white (or black) text, top-left 20px radius, padding 13.2px 13.2px 7.2px, the 12px soft shadow; 259px by 222px for the statistics cards. Footer: #003f39 fill, white text, 48px padding. Social tiles are white cards with icons.

## Design System Architecture

No public design system exists that the home page links to (none found on the page opened, https://www.su.ac.th/en); the home page was the only page read. The site's own CSS exposes a tokenized system: 165 root variables including the --su-green-* ramp, --gray-1 to --gray-3, sixteen --fac-N faculty colors with --fac-N-light tints, a font-size ladder (--font-size-90 5rem and others) and Bootstrap 5 variables (--bs-*) as the base framework. The faculty colors let each faculty page take its own accent while the green stays the university color.

## Do's and Don'ts

Do use #008174 for actions and #003f39 for text and the footer. Do set headlines in SILPAKORN70yr and body in manop-variable at weight 680. Do round only one corner of buttons and cards (bottom-right 20px, top-left 20px). Do use circular 50% icon buttons and the soft 12px card shadow.

Don't use Bootstrap defaults such as #dc3545 or #007aff as brand colors. Don't render the tribute pop-up or modal scrim as UI. Don't round all four corners of buttons; the measured buttons round one. Don't use more than the faculty palette's tints for faculty-specific modules.

## Responsive Behavior

A mobile pass recorded: h1 manop-variable 28px / 33.6px, body 18px / 21.6px, navigation SILPAKORN70yr 24px / 36px and button 18px / 27px. The mobile layout shows one header link, a visible menu toggle labelled "เปิดเมนู" (open menu) and up to 6 card columns. Mobile character usage is led by 18px (5,836), 14px (2,854), 16px (1,082), 28px (491), 48px (432) and 24px (205). Breakpoint widths were not measured.

## Iteration Guide

Rebuild in order: floating header tab, green hero with collage and two Apply buttons, news cards, campus mosaic, program marquee, social tiles, statistics cards, footer. Use canvas #003f39, primary #008174, page tint #f5f5f7, SILPAKORN70yr for display and manop-variable 680 for body, one-corner 20px radii and the 12px shadow. Dark mode, hover beyond #006a5f and tablet breakpoints are not measured in web/data/extracted/silpakorn.json.
