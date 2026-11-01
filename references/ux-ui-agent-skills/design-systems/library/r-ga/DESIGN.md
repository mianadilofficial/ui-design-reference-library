---
version: alpha
name: R/GA
category: "Agencies & Studios"
description: "R/GA's home page is a black and white agency site: Helvetica Variable (HelveticaVariableforRGAW05) in heavy uppercase at 100px/900 with -3px tracking, 27px/31px body with -0.8px tracking, HelveticaNeue 56px display, 0px radius everywhere and no shadows, with colour supplied by work imagery."
colors:
  canvas: "#000000"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#3c3b3b"
  surface-grey: "#7c7c7c"
  surface-steel-blue: "#5f87b4"
  ink-grey: "#999999"
  hairline: "#cccccc"
typography:
  display:
    fontFamily: HelveticaNeue, helvetica, sans-serif
    fontSize: 56px
    fontWeight: 400
    lineHeight: 56px
    letterSpacing: "-0.56px"
    textTransform: uppercase
  display-mobile:
    fontFamily: HelveticaNeue, helvetica, sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 48.96px
    letterSpacing: "-0.96px"
    textTransform: uppercase
  heading:
    fontFamily: HelveticaVariableforRGAW05
    fontSize: 100px
    fontWeight: 900
    lineHeight: 100px
    letterSpacing: "-3px"
    textTransform: uppercase
  subheading:
    fontFamily: HelveticaVariableforRGAW05, HelveticaNowDisplay, helvetica, arial, sans-serif
    fontSize: 24.03px
    fontWeight: 700
    lineHeight: 27.59px
    letterSpacing: "-0.7209px"
    textTransform: uppercase
  body:
    fontFamily: HelveticaVariableforRGAW05, HelveticaNowText, helvetica, arial, sans-serif
    fontSize: 27px
    fontWeight: 400
    lineHeight: 31px
    letterSpacing: "-0.8px"
  nav:
    fontFamily: HelveticaNeue, helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  none: 0px
spacing:
  s1: 3.2px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 10px
  s6: 16px
  s7: 17.8px
  s8: 18px
  s9: 20px
  s10: 20.47px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
---

## Overview
Measured from https://www.rga.com/ (document title "R/GA | We design intelligent brand systems that help businesses get ahead.", scroll height 6613px). The page is the home page of the agency R/GA. In the capture, a 53px black header carries a small red square with the "R/GA" wordmark at left and the links Work, Services, About Us, Careers, News, FutureVision and Contact at the right in small white type. The hero is a black field with the headline "AN INDEPENDENT CREATIVE INNOVATION COMPANY FOR THE INTELLIGENCE AGE" in white uppercase, then the line "We design intelligent brand systems that help businesses get ahead." and a mosaic of nine work tiles (a Mercedes grille, a night street, a red garment, a purple tablet, a solid red tile, a steampunk machine, a phone ad with "$10/mo", a cat-like character, an orange graphic). A white "WORK" band follows with two large cards, "GOOGLE HEALTH" ("An end-to-end creative partnership launching the new Gemini AI-backed Google Health...") and "NIKE ALL CONDITIONS WORLD" ("An immersive digital world relaunching Nike ACG."). The footer lists region codes AE AR AU BR DE ID JP SG UK US on black. The voice is declarative and brand-claims-led.

An h1 exists in the markup ("R/GA, MARKETING AGENCY", 56px uppercase, black), but it is not the visible headline; the visible hero line is the h2 above. A first WebFetch attempt failed (recorded in SOURCES.json); a retry opened the home page, which describes R/GA as an independent creative innovation company designing intelligent brand systems, lists news on the BRDNA Sequencer tools, a Google leadership expansion and the Addition acquisition, and links a Press & Media page at /press-media (not opened).

## Colors
The identity is monochrome. Backgrounds by area: `canvas` #000000 (3407), then four equal-weight (169) blocks #7c7c7c (`surface-grey`), #5f87b4 (`surface-steel-blue`), #ac8367 and #808080, which come from tiles in the work mosaic rather than interface surfaces. `page-body` and `ink` #ffffff are the text color on the dark sections and the white background of the Work band. Text colors by characters: #000000 (7185, text on the white Work band), #ffffff (813), `primary` #3c3b3b (143, the secondary caption color) and `ink-grey` #999999 (81). The only border color is `hairline` #cccccc (1 use). No saturated brand color is measured by the extractor; the red logo square and the red tile visible in the capture are imagery or logo assets, and no hex was measured for them, so none is declared. The root-variable list is empty (0 variables).

## Typography
Two stacks: "HelveticaVariableforRGAW05" (7526 chars; weights 400, 500 and 600 files loaded, also used at 700 and 900 via the variable font; paired with HelveticaNow, HelveticaNowDisplay and HelveticaNowText names in the stack) for body and headings, and "HelveticaNeue" (696 chars) with helvetica and sans-serif for the h1, navigation links and footer. Both are commercial.

Roles: `display` HelveticaNeue 56px/56px weight 400 uppercase, -0.56px tracking (48px/48.96px, -0.96px on mobile); `heading` the hero h2, 100px/100px weight 900 uppercase, -3px tracking; `subheading` 24.03px/27.59px weight 700 uppercase, -0.7209px tracking (card titles); `body` 27px/31px weight 400, -0.8px tracking; `nav` 16px/24px; the header text itself is 14.24px/21.36px weight 500. Sizes by characters: 18px (5059), 27px (1301), 27.04px (548), 24.03px (362), 28px (321), 14px (148), 40px (126), 16.02px (81), 24px (75), 100px (67), 14.24px (50), 50px (29, footer region codes), 56px (22), 37.38px (18). Weights: 400 (6617), 700 (1480), 900 (67), 500 (58). Tracking is negative at every size: 18px at -0.54px, 27px at -0.8px, 100px at -3px, 40px at -0.4px.

## Layout
A full-width black page: a 53px header, a hero with a 967px-wide 100px headline and a block of 500px height, a nine-tile mosaic, a white band with a "WORK" label and two half-width cards edge to edge, then more bands and a 952px-tall black footer. Paddings measured: 53.4px (19 uses), 60px (12), 56px (7), 20.47px, 8px, 17.8px, 426.656px (4, large side offsets), 35.6px, 30px, 18px, 120px, 100px, 106.8px. Gaps: 20px (12), 4px (12), 8px (8), 45px (6), 28.48px (4), 3.2px, 30px, 40px, 32px. Header link count and card columns are not recorded for this site.

## Elevation & Depth
No box shadows are measured. Depth is created only by black versus white bands and by imagery; tiles in the mosaic overlap and are staggered rather than shadowed.

## Shapes
No radii are measured: `desktop.frequencies.borderRadii` is empty, so every rendered element computes 0px. All tiles, cards, images and buttons are sharp rectangles; the only curved shapes in the capture are a small yellow oval in the mosaic and image content.

## Components
The extractor found no call-to-action button. The measured components are:
- **nav**: black bar, white text 14.24px/500, 53px high, 1280px wide.
- **nav-link**: black on white sections at 16px/24px.
- **link**: card titles in 24.03px/700 uppercase with -0.7209px tracking, black on white.
- **cards** (Work): full-bleed images with an uppercase bold title and a 27px-scale description below; no border or radius.
- **footer**: black, white 50px/40px text with -0.5px tracking for the region codes.
There is no hover or focus data for this site (both lists empty).

## Design System Architecture
No public design system is cited and none was found for https://www.rga.com/: the home page's root-variable list is empty (0 variables), no tokens were found in shipped CSS, and no brand-guideline page was reached. The opened home page links no brand guidelines or design system. The de-facto system consists of one variable Helvetica file, a negative-tracking scale, a black and white palette and zero radii.

## Do's and Don'ts
- Do set headings in uppercase Helvetica at weight 900 and -3px tracking at 100px.
- Do keep body at 27px/31px with -0.8px tracking, and use 18px for secondary text.
- Do use pure black (#000000) and white with the grey #3c3b3b and #999999 for captions.
- Don't round corners or add shadows.
- Don't introduce interface color: let work imagery carry color.
- Don't use the unmeasured red of the logo as a tint without measuring it.

## Responsive Behavior
At the 390px mobile pass the h1 is 48px/48.96px with -0.96px tracking (from 56px), body text is 18px/20px with -0.54px tracking in a 330px column, and no CTA exists. Mobile sizes concentrate at 16px (5329 chars), 18px (1951), 27.04px (281), 14px (161), 20px (126), 27px (109), 12.8px (81), 40px (67), 36px (38). Menu behavior and tile column counts on mobile are not measured.

## Iteration Guide
1. Black hero, white Work band, no radius, no shadow.
2. Helvetica uppercase 900 at 100px with -3px tracking for statements; 27px/31px for body.
3. Show work in edge-to-edge tiles; titles 24.03px/700 uppercase.
4. Keep all interface colors to black, white, #3c3b3b, #999999 and #cccccc.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=r-ga --url=https://www.rga.com/ --force --no-motion` after changes.

## Imagery and Content Notes
The mosaic under the hero is the page's only color. Its nine tiles are arranged in three staggered rows of three that are offset horizontally from one another, with a small yellow oval at the left edge of the middle row and a partial tenth tile cut off at the right edge of the bottom row. Tiles show automotive chrome, a dark game-like street scene, patterned red fabric, a purple device with a stylus, a flat red panel, a steam-punk coin machine, a red phone advertisement reading "/mo Save /mo", a small character with cat ears and an orange geometric graphic. In the Work band the Google Health image is a warm portrait of a man stretching on stadium steps wearing a wearable band, and the Nike ACG image is a white field with three small planet-like globes. Titles are uppercase bold black, the descriptions are sentence-case regular black at the 27px scale, and each card runs half the page width. The hero paragraph, "We design intelligent brand systems that help businesses get ahead.", is set in white, right of center, with the left half of that row empty.
