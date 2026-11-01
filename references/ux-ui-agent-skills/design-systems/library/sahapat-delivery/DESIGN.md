---
version: alpha
name: Sahapat Delivery
category: "Thai Brands"
description: "Sahapat Delivery (sahapatdelivery.com) is a Thai online grocery storefront on a light #f4f4f5 canvas with white #ffffff product cards, Noto Sans Thai at 400 and 600, #242526 ink, a red #ff2a00 sale accent, 8px card radii and a soft rgba(96, 108, 171, 0.18) card shadow."
colors:
  canvas: "#f4f4f5"
  page-largest: "#ffffff"
  ink: "#242526"
  primary: "#ff2a00"
  on-primary: "#ffffff"
  surface-subtle: "#f9f9f9"
  ink-secondary: "#979797"
  ink-link: "#0077ff"
  hairline: "#f7f7f8"
  text-input-text: "#495057"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", tahoma, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 27.2px
  display-mobile:
    fontFamily: "\"Noto Sans Thai\", tahoma, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 23.4px
  heading:
    fontFamily: "\"Noto Sans Thai\", tahoma, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 22px
    fontWeight: 600
    lineHeight: 28.6px
  subheading:
    fontFamily: "\"Noto Sans Thai\", tahoma, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 16.8px
    textTransform: uppercase
  body:
    fontFamily: "\"Noto Sans Thai\", tahoma, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 23.8px
  nav:
    fontFamily: "\"Noto Sans Thai\", tahoma, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 23px
    fontWeight: 600
    lineHeight: 39.1px
  input:
    fontFamily: "\"Noto Sans Thai\", tahoma, \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 6px
  xl: 8px
  2xl: 10px
  3xl: 30px
  4xl: 50px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 9px
  s8: 10px
  s9: 11px
  s10: 12px
components:
  button-secondary:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.xl}"
    padding: 11px 35px 11px 15px
    height: 48px
    borderColor: "{colors.hairline}"
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    padding: 0px 0px 10px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.lg}"
    padding: 6px 12px
    height: 50px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    boxShadow: rgba(96, 108, 171, 0.18) 0px 3px 6px 0px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
---

## Overview

Sahapat Delivery is the online grocery storefront of the Sahapat group (the queue lists https://www.sahapat.com as its parent). The measured page is https://www.sahapatdelivery.com/en (title "Sahapat Delivery - Sahapat Delivery", language attribute `en`), 1280px wide and 6022px tall. The capture shows a white header with the red-and-grey italic Sahapat Delivery logo, a search field with a magnifier, a UK-flag language icon, a lock icon and a cart icon, then a "Categories" dropdown button and the links "About us", "My orders", "All articles" and "Contact us". Under the header sits a large red promotional banner carousel ("ช้อปก่อนใคร ครบ จบ ในที่เดียว", free delivery over 500 baht) and two half-width banners, followed by product shelves.

Each shelf starts with a small black rounded-square icon and a Thai heading ("โปรโมชั่นแถม น้ำแร่มองต์เฟลอ", "สินค้าแนะนำ มาม่า", "อาหาร", "ขนม ของขบเคี้ยว"), a "View all" link at the right, one tall artwork tile and then white product cards. The voice is retail-promotional: percentage-off tags such as "-18%", "HOT" and "NEW" ribbons, struck-through old prices and bold baht prices. The page is image-dense and the UI itself is quiet, neutral and white.

A cookie-consent card ("We use cookies to ensure you get the best experience on our website." with an "Accept" button) and a floating round red chat button were present in the capture. They are third-party or consent controls and are not documented as brand UI or tokens; the extractor detected the "Accept" button as the CTA and that detection was overridden (see SOURCES.json `_roleOverrides`).

## Colors

Background areas by weight: #ffffff (6140), #f4f4f5 (5120, the page canvas behind the cards), #f9f9f9 (130), #ff2a00 (48), #f7f7f8 (28), #0000001f (20), then smaller areas of #f00051, #ff8c09, #bc0707, #000000.

- **canvas #f4f4f5** is the page background; **page-largest #ffffff** is the largest opaque area (header, cards, footer).
- **ink #242526** is the dark text color (880 characters weighted), used for headings, nav links and prices; **ink-secondary #979797** is the most-read text color by character count (3037), used for product names and metadata.
- **primary #ff2a00** is the red accent: it is a measured background color (weight 48) and matches the red of the sale tags and the promotional banners in the capture. The extraction does not record which element carries it, so it is used here as the brand accent, not as a recorded button fill. **on-primary #ffffff** is the white measured on dark fills (186 characters of white text); text color on the red fill specifically was not recorded.
- **hairline #f7f7f8** fills the "Categories" button, the search field and the "Load More" pill; **surface-subtle #f9f9f9** is a faint panel fill.
- **ink-link #0077ff** is a measured text color on 6 characters; its role was not recorded.
- **text-input-text #495057** is the typed-text color of the search input.

The Bootstrap variables found on :root (--primary #007bff, --success #28a745, --danger #dc3545, --warning #ffc107 and the rest of the Bootstrap palette) are framework defaults and are not brand colors. Also measured as backgrounds but not tokenised because their roles were not recorded: #ff8c09, #f00051, #bc0707.

## Typography

Noto Sans Thai is loaded in weights 400 and 600 (the loaded-font list also contains "bentowebicon" for icons). The font stack is "Noto Sans Thai", tahoma, "Helvetica Neue", Helvetica, Arial, sans-serif. Measured character weights: 14px (3128), 16px (634), 13px (245), 22px (106), 15px (6); weights 400 (3328) and 600 (791).

- **heading**: 22px / 600 / 28.6px, the shelf heading in Thai.
- **display**: 16px / 600 / 27.2px (the detected top-level text role, the "About us" nav label).
- **subheading**: 14px / 600 / 16.8px, uppercase.
- **body**: 14px / 400 / 23.8px.
- **nav**: 23px / 600 / 39.1px, as recorded by the extractor for the nav link role.
- **input**: 16px / 400 / 24px.

Because Noto Sans Thai is the shipped face, no substitute is needed.

## Layout

The layout is a centered storefront container on the grey #f4f4f5 canvas: header, a banner carousel spanning the container, a pair of half-width banners, then shelves. In each shelf the first column is a tall artwork tile and the product cards follow in a row (two to four cards were visible in the capture). The grey canvas shows at the page edges and between bands, the content blocks are white. Spacing values recorded are 1, 2, 4, 5, 6, 8, 9, 10, 11 and 12px, which is the generated spacing scale; larger section gaps were not extracted as tokens.

## Elevation & Depth

Product cards carry a soft blue-grey shadow, `rgba(96, 108, 171, 0.18) 0px 3px 6px 0px` (35 occurrences); a second shadow, `rgba(96, 108, 171, 0.3) 0px 1px 6px 0px`, was measured once. Everything else is flat: the hairline #f7f7f8 fills replace borders on buttons and the search field. Hover on the "Categories" button changes its fill from rgb(247, 247, 248) to rgb(233, 233, 236) with no shadow; nav links go from #242526 to rgba(0, 0, 0, 0.7) on hover.

## Shapes

Radii by occurrence: 8px (161, cards and buttons), 6px (37, inputs), 4px (11), 50% (5, circular icon buttons), 30px (2), and single uses of 3px, 5px, 10px, 50px and 800px (the pill "Load More" button). The tokens are 3, 4, 5, 6, 8, 10, 30, 50px and 9999px.

## Components

- **button-secondary ("Categories")**: fill #f7f7f8, text #242526, 16px/600, radius 8px, padding 11px 35px 11px 15px, height 48px, 1px border in #f7f7f8; contains a hamburger icon and a chevron.
- **Load More pill**: fill #f7f7f8, text #242526, 14px/600, radius 800px, padding 5px 25px, height 33px.
- **text-input (search)**: fill #f7f7f8, text #495057, 16px/400, radius 6px, padding 6px 12px, height 50px.
- **card**: white fill, 8px radius and the shadow above; holds a product photo, a two-line grey name, a bold price and optional struck-through old price.
- **nav-link**: #242526, 600 weight.
- **Tags**: "NEW" label (text #979797 on #f7f7f8 as measured on one candidate), discount badges such as "-18%" and "HOT" in red/orange; their exact dimensions were not recorded.

## Design System Architecture

No public Sahapat Delivery design system or brand guideline was found; the home page markup has no brand, design or press link. The shipped stylesheet is Bootstrap 4-based: :root exposes the Bootstrap custom properties (--blue #007bff, --breakpoint-xs 0, --breakpoint-sm 576px, --breakpoint-md 768px, --breakpoint-lg 992px, --breakpoint-xl 1200px, --font-family-sans-serif and --font-family-monospace) with 30 variables in total and none named for the brand. Brand styling (the Noto Sans Thai stack, the #242526 ink, the #f4f4f5 canvas and the card shadow) is applied in site CSS on top of Bootstrap, so the colors in this document come from computed styles rather than published variables.

## Do's and Don'ts

- Do keep the #f4f4f5 canvas with white #ffffff cards and the 8px card radius.
- Do use #242526 for headings and prices and #979797 for secondary product text.
- Do reserve the red #ff2a00 family for sale and promotion signals.
- Do use the #f7f7f8 hairline fill for secondary buttons and inputs instead of heavy borders.
- Don't use Bootstrap's #007bff or its other palette variables as brand colors.
- Don't treat the cookie "Accept" button or the floating chat button as brand components.
- Don't add heavy shadows; the measured shadow is a 3px-offset, 6px-blur blue-grey.

## Responsive Behavior

The extraction's mobile pass recorded: the top heading role was a 18px / 600 / 23.4px h2 ("โปรโมชั่นแถม น้ำแร่มองต์เฟลอ"); the detected button was the "Load More" pill (14px/600, fill #f7f7f8, radius 800px, padding 5px 25px, height 33px); font sizes by character weight were 14px (2928), 16px (398), 13px (245), 18px (93), 12px (27), 22px (13) and 15px (6). The Bootstrap breakpoints in :root are 576px, 768px, 992px and 1200px. The mobile viewport width, column counts and menu behavior were not recorded: not measured.

## Iteration Guide

1. Start from canvas #f4f4f5 with white cards; keep the shelf pattern of icon, 22px/600 heading and "View all".
2. Use Noto Sans Thai 400 and 600 only.
3. Keep secondary controls on #f7f7f8 with 8px radius.
4. Use #ff2a00 sparingly for sale signals and verify the text color on it per component, since the extraction did not record it.
5. Dark mode is not measured.
6. Run `node web/scripts/verify-designs.mjs --slug=sahapat-delivery` after changes.
