---
version: alpha
name: Natural Fruit Company
category: "Thai Brands"
description: "Corporate site of Natural Fruit Co., Ltd., a Thai pineapple processor in Pranburi, set in Kanit (Regular and Bold) on a white canvas with #1c1c1c ink, a #398e7f teal accent, #4ab9a6 icon teal, a #fad92a yellow band, 5px card radius and a soft grey halo shadow."
colors:
  canvas: "#ffffff"
  ink: "#1c1c1c"
  primary: "#398e7f"
  surface-band: "#f2f2f2"
  teal-light: "#4ab9a6"
  accent-yellow: "#fad92a"
  ink-soft: "#303030"
  ink-black: "#000000"
  ink-muted: "#8c8c8c"
  hairline: "#ebebeb"
  hover-red: "#ec1d24"
typography:
  display:
    fontFamily: Kanit-Bold
    fontSize: 38px
    fontWeight: 500
    lineHeight: 45.6px
  display-mobile:
    fontFamily: Kanit-Bold
    fontSize: 28px
    fontWeight: 500
    lineHeight: 33.6px
  body:
    fontFamily: Kanit-Regular
    fontSize: 20px
    fontWeight: 400
rounded:
  card: 5px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 15px
  s5: 16px
  s6: 32px
  s7: 64px
components:
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    padding: 16px 0px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
    boxShadow: rgba(96, 96, 96, 0.41) 0px 0px 20.3px 8.7px
---

## Overview

The measured page is the English home page of naturalfruit.co.th, the corporate site of Natural Fruit Co., Ltd. The page title is simply "naturalfruit", the site language is declared as English, and the header carries two Thai factory phone numbers (032-623-256 and 032-622-700-3). The copy on the page says the company is located in Pranburi, Prachuapkirikhan Province, "the most famous pineapple plantation area in Thailand", that it manufactures aseptic and frozen pineapple juice concentrate, canned pineapple and tropical fruit, and that it owns a pineapple farm of over 3,000 acres.

The visual character is that of an export-oriented food manufacturer's brochure site: a thin yellow strip with contact details across the very top, a white header with a green wordmark, a wide hero slider built from photographs of factory staff in white caps, a pineapple field and canned slices, and below it alternating bands of light grey and white. Photography does the persuasion; the interface stays quiet. Nothing on the page behaves like an e-commerce storefront. There is no measured primary button, no form field, and no pricing, so this document describes a navigation-and-content system rather than a conversion system.

The voice is plain, corporate and slightly translated: short English headings such as "Quality Policy" and "Fresh from the farm", followed by long paragraphs written in a formal register about food safety policy, international standards and good governance.

## Colors

The canvas is white (#ffffff). Reading text is near-black ink (#1c1c1c), which is the most-read text color on the page by character count, with a softer #303030 for the body element and pure #000000 and #8c8c8c appearing on smaller amounts of text such as sub-headings and captions. The brand accent is a muted teal-green, #398e7f, measured as the color of the navigation text and of the second word in the section heading "NATURAL FRUIT". A brighter companion, #4ab9a6, fills icon glyphs (the droplet, the can and the fruit pictogram) and the vertical bar on the left of the long text block.

A saturated yellow, #fad92a, is measured as a background area color; in the capture it appears as the top contact strip and as the warm gradient panel behind the quality-policy text. Light grey #f2f2f2 forms the band behind the three product-activity icons, and #ebebeb is the single hairline border color.

One interaction color was captured in a hover probe: the phone-number link changes from #303030 to #ec1d24 (red) when hovered. It is recorded as hover-red and should be treated as a link hover cue, not as a brand color. The Bootstrap 4 custom properties exposed in the stylesheet root (for example --primary: #007bff and --success: #28a745) are framework defaults left in the CSS and are not used as brand colors here.

## Typography

Two faces are loaded: Kanit-Regular and Kanit-Bold. Kanit supports both Thai and Latin scripts, which suits a bilingual company site. The measured h1, "NATURAL FRUIT", is set in Kanit-Bold at 38px with a 45.6px line height and a computed weight of 500; on the 390px mobile measurement it drops to 28px with a 33.6px line height. Running text is Kanit-Regular at 20px, which is notably larger than a typical web body size: 20px accounts for the largest share of characters measured, followed by 18px, 17px, 21px, 24px and 22px.

Navigation items are uppercase Kanit at 20px with a 20px line height. Letter spacing is left at normal throughout. Hierarchy is created by weight and by the two-tone trick of coloring one word of a heading teal while the other stays ink. No font substitutes are needed because Kanit is a publicly distributed family; where it fails to load, the stylesheet's fallback stack applies.

## Layout

The page is 1280px wide in the desktop measurement and 4296px tall. The h1 element spans a 1200px container, so the content column is a 1200px band centered in the viewport. The header is a two-row structure: the yellow contact strip, then the white bar with the wordmark at left and the five-item navigation (Home, Profile, Our Products, News & Activities, Contact Us) plus three round social icons at right.

Below the hero slider sit three equal columns separated by thin vertical rules, each holding an icon above a centered label. The next block pairs a framed photograph on the left with a text column on the right, and the last block is a full-width paragraph under a bold "FRESH FROM THE FARM" label. Spacing values measured in paddings are small and irregular: 5px, 8px, 10px, 15px and 16px dominate, with 32px and 64px for larger blocks.

## Elevation & Depth

Depth is limited to two measured treatments. Cards use a wide soft halo, rgba(96, 96, 96, 0.41) 0px 0px 20.3px 8.7px, which has no vertical offset and gives a floating, evenly lit edge rather than a directional drop. Focus or active states use a 2px ring in the teal accent, rgb(57, 142, 127) 0px 0px 0px 2px. Everything else is flat: bands are separated by background color changes (white to #f2f2f2) and not by shadow. The hero uses layered, offset photo frames with teal and grey corner brackets to suggest depth through collage, not through shadow tokens.

## Shapes

Radii are small. The card radius measured is 5px, appearing on seven elements, and there is one asymmetric radius of 0px 0px 10px 10px on a single element. Everything else, including the nav, is square-cornered. Photo frames in the hero use white borders and angular corner brackets. Social icons in the header are circular glyphs; their radius was not captured as a separate value, so none is declared.

## Components

Navigation: a white bar with 16px top padding, uppercase 20px teal text and an underlined active state on "HOME" visible in the capture. Dropdown groups exist in the markup (Profile contains History, Vision, Award and Business; Our Products contains Product, Product Quality & Certificate and Product Q&A; News & Activities contains News, Activities, CSR and Knowledge), but the dropdown layer was not captured open and is not described further.

Cards: white or transparent surface, ink text, 5px radius, with the halo shadow above. Section heading: centered, two-tone, uppercase Kanit with a gray subtitle line beneath. Activity tile: a teal icon above a centered label inside a column with hairline vertical rules. A small circular chevron badge sits on the boundary between the hero and the grey band; it is a scroll control, not brand UI. No primary button, text input or select was detected by the extractor, so none is declared.

## Design System Architecture

No public design system, brand guideline or token package was found; the homepage exposes no link to one. The de-facto system is Bootstrap 4: the root custom properties include Bootstrap's palette (--indigo, --pink, --teal, --orange, --cyan) and breakpoints (--breakpoint-sm 576px, --breakpoint-md 768px, --breakpoint-lg 992px, --breakpoint-xl 1200px). The 1200px content column matches the Bootstrap xl container. Brand styling is layered on top through custom CSS that sets Kanit, the teal accent and the yellow band. Authors reading this should use the measured hex values in the front matter and ignore the Bootstrap defaults.

## Do's and Don'ts

Do keep the canvas white and let photographs of the factory, workers and pineapple fields carry color. Do use teal (#398e7f) for navigation and for the emphasized word of a heading. Do keep body copy large at 20px in Kanit-Regular. Do separate sections with the light-grey band rather than with borders or shadows.

Don't introduce Bootstrap's default blue (#007bff) for links or buttons. Don't use the red hover color (#ec1d24) as a surface fill. Don't add heavy drop shadows; the only shadow is the soft all-around halo. Don't round corners beyond 5px. Don't document or reproduce the round scroll-up badge as part of the brand's component set.

## Responsive Behavior

The extractor measured a 390px mobile viewport. The only role that changed in the measurement was the h1, which falls from 38px (line height 45.6px) to 28px (line height 33.6px) in Kanit-Bold. Bootstrap 4's breakpoints (576, 768, 992 and 1200px) are present in the root variables, so the three-column activity row and the two-column photo-and-text block are expected to follow the grid utilities, but the collapse behavior of the navigation was not captured and is not asserted here.

## Iteration Guide

Start from white and #1c1c1c ink, then add the teal accent #398e7f only where the site does: nav text, heading emphasis, active states. Use #4ab9a6 for pictograms and thin accent bars, and reserve #fad92a for a top contact strip or a single warm callout panel with a soft horizontal gradient toward white. Set everything in Kanit, Bold for headings and Regular at 20px for body text. Build cards with a 5px radius and the 20.3px halo shadow. When extending, measure new pages with the extractor instead of estimating, and keep Thai and English strings in the same face so bilingual content stays consistent. Photography should show real production staff, fruit and plantation scenes, matching the existing factory-honest tone.
