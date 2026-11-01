---
version: alpha
name: Nirvana Development
category: "Thai Brands"
description: "Nirvana Development (nirvanadevelopment.co.th) Thai residential developer: full-bleed architectural photography with a 72px Montserrat 200 white headline, SukhumvitSet Thai fallback, #404142 ink, #fefefe canvas and 3px radius outlined tabs."
colors:
  canvas: "#fefefe"
  ink: "#404142"
  primary: "#404142"
  white: "#ffffff"
  ink-black: "#0a0a0a"
typography:
  display:
    fontFamily: Montserrat, SukhumvitSet, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 72px
    fontWeight: 200
    lineHeight: 40px
  display-mobile:
    fontFamily: Montserrat, SukhumvitSet, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 33.6px
    fontWeight: 200
    lineHeight: 40px
  nav:
    fontFamily: Montserrat, SukhumvitSet, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  link:
    fontFamily: Montserrat, SukhumvitSet, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 100
    lineHeight: 16px
    textTransform: uppercase
rounded:
  xs: 3px
spacing:
  s1: 5px
  s2: 7.2px
  s3: 8px
  s4: 10px
  s5: 11.2px
  s6: 15px
  s7: 16px
  s8: 30px
  s9: 32px
components:
  link:
    textColor: "{colors.white}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.white}"
    padding: 16px 0px
  nav-link:
    textColor: "{colors.white}"
    typography: "{typography.nav}"
---

## Overview

The measured homepage (https://www.nirvanadevelopment.co.th/th, title "โครงการบ้านโมเดิร์น ทาวน์โฮม คอนโดและโฮมออฟฟิศพร้อมอยู่ | Nirvana Development") is a single full-viewport photographic stage. The capture shows a modern townhouse facade in warm beige, white and timber slats, with a man leaning on a balcony rail at upper left and a woman in red on the lower right terrace. Over it sit a small tree-in-circle logo with the word "Nirvana" at top left, an "EN" language link and a nine-dot grid icon at top right, the headline "I FOUND MYSELF" with a lighter secondary line "IN NIRVANA", and a row of five outlined product tabs along the bottom: "บ้านเดี่ยว" (filled white, the active one), "ทาวน์โฮม", "โฮมออฟฟิศ", "คอนโดมิเนียม" and "คอมมูนิตี้มอลล์". A hotline number "1787" with a phone glyph, Facebook and YouTube icons sit at the bottom right, carousel dots run along the bottom edge, and the copyright line "Copyright 2026 Nirvana Development. All Rights Reserved" is set small at bottom left.

The page is image-led rather than copy-led. The only prominent words are the headline and the tab labels; the brand relies on architectural photography and generous scale. The extraction found no primary call-to-action button, no cards and no footer role on this first screen, so those components are not documented.

## Colors

Measured colors are few and the page is neutral by design. The body background resolves to #fefefe, body text to #0a0a0a, and the dominant background by area (21504 weight) is #404142, a warm-neutral dark grey that also serves as the ink color for the text input and as the extractor's primary. Text on the photographic stage is white #ffffff (530 characters), followed by #404142 (88) and #0a0a0a (79). The only border color recorded is #ffffff (5 occurrences), matching the thin white outlines on the tabs and language link. No saturated brand color was measured on this screen, so the document does not invent one. The warm timber and beige tones in the photography are image content, not tokens.

- **canvas #fefefe**: measured body background.
- **ink #404142**: dominant measured area color and input text color.
- **white #ffffff**: text, outlines and icons laid over photography.
- **ink-black #0a0a0a**: measured body text color.

Hover is measured on the "EN" link only: color stays #ffffff and the border stays #ffffff while the box height changes from 36px to 32px. No color change on hover was recorded.

## Typography

Montserrat is the Latin face, loaded in 200, 400 and 700, with **SukhumvitSet** (100 and bold) as the Thai face and the stack continuing "Helvetica Neue", Helvetica, Arial, sans-serif. The display role is the hero headline: 72px, weight 200, line-height 40px on desktop (element height 70px), shrinking to 33.6px / 200 / 40px at the 390px mobile pass. In the capture the words "I FOUND" are visibly heavier than "MYSELF", which is consistent with Montserrat 700 and 200 being the two loaded display weights; only the weight-200 value is recorded as the h1 role. Navigation is 16px / 400 / 16px line-height in white. Links are 16px, weight 100, uppercase, 16px line-height. Montserrat has no Thai glyphs, so Thai tab labels fall to SukhumvitSet.

If SukhumvitSet is not available, a neutral Thai sans such as Noto Sans Thai is the nearest substitute for the tab labels; Montserrat itself is freely available.

## Layout

The desktop pass is full-bleed: the photograph fills the viewport and elements are anchored to its edges rather than placed on a content column. The nav is 69px high with 16px vertical padding and a measured height of 37px per nav link. The row of tabs is anchored bottom left; contact and social icons are anchored bottom right; the logo is top left and the language and grid controls top right. Spacing values in the extraction are 5, 7.2, 8, 10, 11.2, 15, 16, 30 and 32px. Below the first screen no sections were measured, so grid, card and footer layout are not documented.

## Elevation & Depth

Depth comes from the photograph itself. The only box-shadow recorded is rgba(0, 0, 0, 0.5) 0px 1px 4px 0px, on one element; there are no layered surfaces, cards or modals in the measured screen. White text is placed directly on image areas, so legibility depends on the chosen photograph; the capture shows the lighter parts of the image under "IN NIRVANA" making the secondary line faint.

## Shapes

One radius is measured on this page: 3px (12 occurrences), plus "3px 0px 0px 3px" once. The product tabs and controls are therefore almost square, with a 3px softening. Outlines are 1px white. There are no pills or circles in the radius census; the round glyph backgrounds seen in the capture (social and phone icons) are icon art, not measured shapes.

## Components

- **Tabs / category buttons**: white 1px outline on photography, 3px radius; the active tab ("บ้านเดี่ยว") is filled white with dark text. Label text is Thai at the nav size.
- **Nav / language link**: "EN" in white, 16px, 1px white border, height 36px resting.
- **Link**: white, uppercase, weight 100, 16px.
- **Text input**: background #fefefe, text #404142, 16px / 400, height 39px, padding 8px (recorded in the desktop pass; its position on the page is not shown in the capture).
- **Hotline**: the number "1787" is rendered large in white with a phone glyph at the bottom right.

## Design System Architecture

No public design-system or brand page was opened for Nirvana; the research record is {none:true}. The only custom property in :root is --vh at 8px; no color or spacing variables are published. Icon glyphs come from Font Awesome 5 Pro (300 and 900) and Font Awesome 5 Brands. The typographic system is Montserrat plus SukhumvitSet. Because color is not exposed as variables, the measured values above (#fefefe, #404142, #0a0a0a, #ffffff) are the system.

## Do's and Don'ts

- Do let one large architectural photograph carry the screen.
- Do set the headline in Montserrat at weight 200 in white, and keep the secondary line lighter.
- Do use thin white 1px outlines with a 3px radius for category tabs, and fill only the active one.
- Do keep contact (hotline 1787) and social icons in a fixed corner.
- Don't add saturated accent colors; none were measured.
- Don't use drop shadows on controls; the page relies on the photograph for depth.
- Don't set Thai labels in Montserrat; use the Thai face.

## Responsive Behavior

Measured at the 390px mobile pass: the headline is 33.6px / 200 / 40px (element height 40px) against 72px on desktop, and the nav is 16px / 400 with a height of 69px. The extractor did not record a mobile layout object, a menu toggle, or card columns for this page, so the mobile arrangement of the tabs and icons is not measured. Tablet widths and dark mode are not measured.

## Iteration Guide

1. Start from a full-bleed photograph and place a 72px Montserrat 200 white headline over it.
2. Put the logo top left and utility links top right in 16px white text.
3. Add category tabs as 1px white outlines with 3px radius; fill only the active tab.
4. Anchor the hotline and social icons bottom right.
5. For sections below the hero, measure the real page before adding tokens.
6. At 390px reduce the headline to 33.6px.
