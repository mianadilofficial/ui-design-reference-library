---
version: alpha
name: King Mongkut's University of Technology Thonburi (KMUTT)
category: "Thai Brands"
description: "KMUTT's English home page (kmutt.ac.th/en) is a slate-grey #626a74 and charcoal #343a41 university portal set entirely in DBHeavent at 20px to 26px, with translucent yellow #ffde02bf news-card captions, 4px link corners and photo-led news tiles."
colors:
  canvas: "#ffffff"
  page-largest: "#626a74"
  ink: "#343a41"
  primary: "#626a74"
  on-primary: "#ffffff"
  surface-light: "#f1f1f3"
  ink-muted: "#969a9e"
  accent-orange: "#f37021"
  accent-red-orange: "#fa4616"
  accent-yellow: "#ffde02bf"
  ink-orange-red: "#ff4713"
  ink-light: "#dddddd"
  hairline: "#6c757d"
typography:
  display:
    fontFamily: DBHeavent
    fontSize: 26px
    fontWeight: 400
    lineHeight: 40px
  display-mobile:
    fontFamily: DBHeavent
    fontSize: 20px
    fontWeight: 300
    lineHeight: 20px
  subheading:
    fontFamily: DBHeavent
    fontSize: 26px
    fontWeight: 600
    lineHeight: 23.4px
  body:
    fontFamily: DBHeavent
    fontSize: 20px
    fontWeight: 300
    lineHeight: 20px
  nav:
    fontFamily: DBHeavent
    fontSize: 23px
    fontWeight: 500
    lineHeight: 17.25px
rounded:
  xs: 4px
  sm: 25px
  md: 30px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-secondary:
    textColor: "{colors.page-largest}"
    typography: "{typography.subheading}"
    rounded: "{rounded.xs}"
    padding: 6px 12px
    height: 53px
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 30px 0px 0px
---

## Overview

The KMUTT English home page (https://www.kmutt.ac.th/en/, title "King Mongkut's University of Technology Thonburi - KMUTT") is a dense institutional portal. A charcoal header bar carries the KM UTT logo with the Thai name and "King Mongkut's University of Technology Thonburi" at the left and utility links (Prospective Student, Students, Staff), a search icon and a TH | EN switch at the right. A slate-grey menu bar sits below with Apply, Education, Research, Internationalization, Services, News+Event and About KMUTT, each with a chevron. A tall full-width photograph (a student at a computer) forms the hero, followed by a grey band of audience links (Prospective Student, Current Student, Partnership, Staff) marked with orange plus signs.

The main content is "NEWS UPDATES" with an "All News" link: two rows of horizontal tiles pairing an announcement image with a slate card of white headline text and a chevron, then two rows of four photo tiles, each with a translucent yellow caption strip and a chevron, and a further "KMUTT Transforming, Defining the Future" row. Text is announcement-style, in factual English headlines about policies, scholarships, partnerships and events. In the capture, a floating orange contact control ("ติดต่อ มจธ.") and a "TOP" back-to-top square sit over the page; these are widgets and are not documented as brand UI.

## Colors

The page is dominated by slate grey #626a74, the background of the menu bar and the news-card panels (the highest-weight background area), and by charcoal #343a41, the header, footer and main text color. White #ffffff is the canvas and the text color on the grey surfaces; #f1f1f3 is a light grey surface. News image captions sit on a translucent yellow, #ffde02bf. Orange tones appear as small accents: #f37021 and #fa4616 (backgrounds, small areas), and #ff4713 for text in the footer. Secondary text colors are #969a9e (muted) and #dddddd (light on dark), with #6c757d as a border color. No gradient or saturated brand blue was measured. Root variables also include Bootstrap names (--yellow: #ffc107, --pink: #e83e8c, --light: #f8f9fa) and cookie-consent plugin variables (--cc-*), which are framework or plugin defaults.

## Typography

One typeface, DBHeavent, carries the whole interface (a compact Thai-Latin face; "dashicons" is loaded for WordPress icons). Measured sizes by usage: 20px dominates (2,512 characters), then 26px (660), 19px, 23px and 41px. The display role is DBHeavent 400 at 26px/40px (the "Apply" menu item, the largest text detected); card and section headings are 26px at weight 600 with a 23.4px line height; navigation is 23px at 500 with a 17.25px line height; body text is 20px at 300 with 20px line height, identical on mobile. Because the face is condensed, sizes are larger than typical (20px body).

## Layout

The page is 1280px wide and 3455px tall in the extraction. A full-width header and menu bar sit above a full-bleed hero, then an audience-link band, then a centered container holding the news grid. The grid uses two-up tiles (image plus text card) in the first two rows and four-up photo tiles in the next rows, with narrow gutters between tiles. The footer is a charcoal #343a41 block with 30px top padding and link groups headed KMUTT, KMUTT Staff, AHRIS, Student NewAcis, Site Map, Contact and Map. Spacing values measured include 2px, 4px, 5px, 6px, 8px, 10px, 12px, 15px, 16px and 20px.

## Elevation & Depth

The only box-shadow measured is rgba(17, 24, 39, 0.22) 0px 14px 36px 0px, which belongs to the floating contact widget and is therefore not part of the content design. Content tiles are flat, separated by gutters and by contrasting slate or yellow fills. Image tiles darken or show a translucent yellow band rather than casting shadows.

## Shapes

Measured radii: 25px (six elements), 4px (five), 30px (four), 999px (one) and 50% (one). The 25px, 30px, 999px and 50% values belong to the floating widgets, so the content design is essentially square: news tiles and cards have no rounding and text links use 4px at most. The generated rounded scale keeps the 4px, 25px, 30px and 9999px values as measured.

## Components

- Menu bar: slate #626a74 background, white DBHeavent 500 23px labels with chevrons for dropdowns, "Apply" as the first item.
- Header bar: charcoal #343a41 with logo left; utility links white; TH | EN switch at the right.
- Audience link: DBHeavent 600 26px in #626a74 with 4px radius and 6px 12px padding, 53px tall (for example "Prospective Student"), preceded by an orange plus sign.
- News card (text): slate #626a74 panel with white bold headline, a shorter white description and a chevron in the lower right.
- News card (photo): image on top with a translucent yellow caption strip (#ffde02bf), dark text and a chevron.
- Footer: #343a41 background with white 700 26px headings.
- Floating contact and TOP controls: orange and red-orange widgets, not brand UI.

## Design System Architecture

No public design system or brand guideline page was opened. The shipped CSS comes from a WordPress site (the dashicons font, --wp-admin-theme-color-darker-20: #005a87) with Bootstrap color variables (--yellow, --pink, --light) and a cookie-consent plugin (variables prefixed --cc-). The visible system is therefore component-level: slate and charcoal surfaces, DBHeavent only, flat tiles with chevrons and translucent yellow caption strips.

## Do's and Don'ts

Do use slate #626a74 for menu and card panels, charcoal #343a41 for header, footer and text, DBHeavent for everything, and a chevron in the lower right of every tile. Do use the translucent yellow strip for captions over photos.

Don't use Bootstrap yellow (#ffc107) or pink in place of the measured yellow. Don't round content tiles. Don't present the floating contact button, TOP button or cookie plugin as brand components. Don't use a second typeface.

## Responsive Behavior

The mobile pass (390px) measured body text at DBHeavent 300 20px/20px in white on the slate panel, and the display role at 300 20px/20px. The floating contact control stays at DBHeavent 800 20px with a 999px radius. A mobile navigation structure, grid column counts and breakpoints were not measured.

## Iteration Guide

1. Build a charcoal header over a slate menu bar with white DBHeavent 23px labels.
2. Use a full-bleed photograph as the hero and a grey band of audience links.
3. Present news as two-up image plus slate-card tiles and four-up photo tiles with translucent yellow captions.
4. Keep all corners square except 4px on links, and keep type to DBHeavent at 20px body and 26px headings.
5. Add orange only as a small accent; do not add shadows to content tiles.

## Additional Notes

Imagery on this page is documentary rather than stylized: the hero is a single photograph of a student working at a computer, news tiles use scans of official announcements (a signed cabinet resolution notice, a flood-situation notice), meeting-room photographs, group portraits at ceremonies and a "No Gift Policy" graphic. The captions are long headline sentences, kept to three or four lines. The hover measurement for the main university-name link in the header shows a white text color and transparent background both before and after hover, so hover on that link was not visibly styled. A distinctive trait is the contrast between a deeply neutral grey interface and the saturated yellow caption strips that frame news photographs; the orange appears only in small icons and widgets.
