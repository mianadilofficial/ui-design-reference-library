---
version: alpha
name: Cooperative Promotion Department (CPD)
category: "Thai Brands"
description: "Thai Cooperative Promotion Department portal at cpd.go.th: Noto Sans Thai with 38px bold titles, deep and light blue #1186b8 bands, white 10px-radius icon cards with a 10px 30px 0.08 shadow, white pill buttons with #0058aa text."
colors:
  canvas: "#ffffff"
  ink: "#241e20"
  primary: "#1186b8"
  on-primary: "#ffffff"
  cta-blue: "#0058aa"
  surface-grey: "#aaaaaa"
  surface-soft: "#f4f4f4"
  ink-black: "#000000"
  ink-soft: "#363636"
  navy: "#003c8f"
  link-navy: "#003399"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\""
    fontSize: 38px
    fontWeight: 700
    lineHeight: 45.6px
  display-mobile:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  heading:
    fontFamily: "\"Noto Sans Thai\""
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22.4px
  subheading:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\""
    fontSize: 20px
    fontWeight: 700
    lineHeight: 26px
  body:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14px
  button:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 19px
    fontWeight: 400
    lineHeight: 30.4px
  nav:
    fontFamily: "\"Noto Sans Thai\""
    fontSize: 24px
    fontWeight: 400
    lineHeight: 38.4px
  button-secondary:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 46px
    letterSpacing: 0.5px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 10px
  xl: 20px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 4.25px
  s6: 4.75px
  s7: 5px
  s8: 6px
  s9: 7px
  s10: 8px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.cta-blue}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 5px 15px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 0px 38px
    height: 50px
  link:
    textColor: "{colors.link-navy}"
    typography: "{typography.display-mobile}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.ink-soft}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-soft}"
    rounded: "{rounded.lg}"
    boxShadow: rgba(0, 0, 0, 0.08) 0px 10px 30px 0px
  footer:
    textColor: "{colors.canvas}"
---

## Overview
The measured site is https://cpd.go.th/, titled "กรมส่งเสริมสหกรณ์" (Cooperative Promotion Department), lang th-th, with the English line "Cooperative Promotion Department" next to the crest in the header. The capture shows a government portal built from large illustrated service tiles: a header with the department crest, language switch (TH | EN), a text-size control (A A A), a royal emblem at the right, a main navigation row, a hero slider of portrait cards, then a deep-blue band of icon tiles for procurement, news centre, standards manuals, laws, complaints, e-service, Big Data, Smart Coop Profile, statistics, cooperative search, a mobile application and a milk-school project, a lighter blue band titled "การบริหารจัดการกรมส่งเสริมสหกรณ์" (management of the department) with six white cards, side promotions for a Co-op Easy Shop and a CPD e-Learning system, and an executive profile block for the director-general. A campaign announcement popup is open in the capture (a dairy MOU notice), with cookie and accessibility buttons and a back-to-top control at the left and right edges; those are overlay and widget controls and are not documented as brand UI. The page was also under a site-wide grayscale filter (the extractor recorded `siteFilterRemovedForCapture: "grayscale(0.59)"`), which it removed so colors are measured unfiltered. The voice is formal and administrative, with Thai tile titles of one to three lines.

## Colors
Canvas is {colors.canvas} (#ffffff, area weight 5572). Text colors by character weight: #241e20 (744, the generated ink), #000000 (511), #363636 (472), white (380), navy #003c8f (218) and #003399 (212). The h1 "การบริหารจัดการกรมส่งเสริมสหกรณ์" is #00094b. The big blue bands in the capture are the measured background #1186b8 (922; the near-identical #1286b8 also measures 922); I reassigned `primary` from the generator's #ffffff (the detected button's fill) to #1186b8, since the department's repeated accent surface is this blue, while white is the canvas. The detected button is a white pill with #0058aa text (cta-blue). Other measured surfaces: #f4f4f4 (936), #aaaaaa (1024), #fffefe (477). The site also declares Bootstrap variables (--bs-primary #4A91FD, --bs-info #4A91FD, --bs-yellow #FDBE00, --bs-success #1ed482, --bs-orange #fd7e14) and cookie-consent variables (--cc-*); these are framework or widget values and are not brand tokens. Hover colors measured: news links change from rgb(51,51,51) to rgb(23,111,193), and a round control changes from rgb(47,114,225) to rgb(0,85,153). Dark mode was not measured.

## Typography
Primary family "Noto Sans Thai" with Noto Sans as a fallback (family usage 2934 characters), plus Arial (85) and Material Icons. Loaded fonts: Noto Sans Thai 400, Roboto 400 and 700, Material Icons. Sizes by character weight: 16px (1767), 12px (409), 19px (154), 20px (116), 17px (115), 11.2px (103). Weights: 400 (2428), 700 (487), 600 (56), 900 (29), 500 (20). Tokens: display 38px / 45.6px weight 700 (h1); subheading 20px / 26px weight 700; heading 16px / 22.4px weight 700 (card titles); body 12px / 14px weight 400 (footer credits); button 19px / 30.4px; nav 24px / 38.4px; secondary button 14px with 0.5px letter-spacing. The mobile pass found no usable h1 (its detected "h1" was the "Skip to main content" accessibility link at 16px / 24px, which became the display-mobile token), so no real mobile heading size was measured. Noto Sans Thai is open source.

## Layout
Page width 1280px, scroll height 5561px. Content widths measured include a 1200px link container and a 952px wide h1. Tiles are arranged five across in the deep-blue band and four across in the management band (cards 208px wide by 233px tall). Measured paddings: 40px (76 occurrences), 10px (41), 15px (28), 12px (27), 20px (18), 5px (17). Large gradient bands (blue to lighter blue) separate sections, and the director's profile block uses a pale blue panel with a portrait.

## Elevation & Depth
Cards use a diffuse shadow `rgba(0,0,0,0.08) 0px 10px 30px 0px`. A second softer outline shadow `rgb(229,229,229) 1px 1px 6px 2px` was also measured. The icon tiles in the blue band additionally appear in the capture as white rounded squares with a lifted look, but their exact shadow was not separately extracted. Round action buttons have `rgba(0,0,0,0.2) 0px 2px 10px 0px`.

## Shapes
Radii by weight: 10px (44, cards and tiles), 50% (28, round icon buttons), 500px (12, pill buttons), 10px top corners (9), 5px (4), 4px (2). Tokens: xs 3px, sm 4px, md 5px, lg 10px, xl 20px, pill 9999px.

## Components
Button-primary: white fill, #0058aa label at 19px / 30.4px, pill radius, 5px 15px padding, 40px high (the measured "ระบบร้องเรียนเรื่องท..." complaint-system link). Button-secondary: white text, 14px label with 0.5px tracking, 0 38px padding, 50px high, pill radius. Card: white, 10px radius, 233px by 208px, bold 16px #363636 title, soft 10px/30px shadow, with a gradient-filled blue icon plate above. Link: #003399. Nav-link: 24px #363636. Footer: white text. Tiles in the blue band: white rounded square, icon above a Thai title.

## Design System Architecture
No public design system or brand guideline was found; the pages were not read beyond the extractor. The de-facto system is a Bootstrap plus UIkit build: the root declares --bs-* variables and --uk-breakpoint-m 960px, Font Awesome 6 Free variables, and a cookie-consent widget namespace (--cc-*, e.g. --cc-overlay-bg rgba(4,6,8,0.85)). The font credit in the footer reads "Font by: f0nt", and image credit text follows. The brand layer is the blue gradient family, #003399/#003c8f navy text and Noto Sans Thai.

## Do's and Don'ts
Do use #1186b8 blue bands with white tiles and Thai titles. Do use 10px card radii with the 10px/30px soft shadow. Do keep Thai type in Noto Sans Thai, 16px bold for card titles. Don't use Bootstrap's #4A91FD or other --bs-* palette colors as brand colors. Don't document the announcement popup, cookie and accessibility buttons or the back-to-top button as brand components. Don't apply the national mourning grayscale filter to tokens; colors are measured with it removed.

## Responsive Behavior
Only a 390px mobile pass exists and it recorded the "Skip to main content" link as h1 (16px / 24px, #003399), body text 11px / 16px in #003399, and the same pill button (19px, 5px 15px padding, 40px high, 500px radius). Layout collapse, column counts and the navigation behaviour on mobile were not measured.

## Iteration Guide
1. Canvas #ffffff; ink #241e20; navy #003399 for links; blue #1186b8 for bands. 2. Noto Sans Thai: 16px bold card titles, 38px bold page titles. 3. White cards with 10px radius and a 10px/30px 0.08 shadow on gradient blue backgrounds. 4. Pill buttons 40px high with #0058aa text on white. 5. Remove popups and any grayscale filter before measuring. 6. Hover on news links goes to rgb(23,111,193); other states, dark mode and mobile layout were not measured.

## Notes on Measurement Scope
Measurements come from one desktop pass at 1280px and one mobile pass at 390px of the home page. The announcement popup remained visible in the saved capture image, so the image is not a clean view of the page; the numeric tokens come from the extraction, and the grayscale filter was removed by the extractor before capture. Interior pages, forms, the e-learning system and the executive profile were not measured. The page contains no text input role, so no input token exists. Tile icon artwork is raster or gradient illustration whose individual colors were not extracted, so only the measured band colors above are claimed.
