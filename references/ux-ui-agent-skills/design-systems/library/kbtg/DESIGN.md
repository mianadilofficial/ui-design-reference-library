---
version: alpha
name: KASIKORN Business-Technology Group (KBTG)
category: "Thai Brands"
description: "KBTG (kbtg.tech), the technology arm of KASIKORNBANK: a dark teal-black site (#333333 stage, #0d1a1a tiles, #000000 footer) with white type and a single aqua accent (#62cbc9) for emphasis words, rules and arrows. Set in the kurious family at weight 400 per file (96px display, 64px headings, 18px body), 4px and circular shapes, no shadows."
colors:
  canvas: "#333333"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#62cbc9"
  surface: "#0d1a1a"
  surface-3: "#5d5d5d"
  ink-3: "#000000"
typography:
  display:
    fontFamily: kurious_medium
    fontSize: 96px
    fontWeight: 400
    lineHeight: 92px
  display-mobile:
    fontFamily: kurious_medium
    fontSize: 48px
    fontWeight: 400
    lineHeight: 46px
  heading:
    fontFamily: kurious_semibold
    fontSize: 64px
    fontWeight: 400
    lineHeight: 60px
  subheading:
    fontFamily: kurious_semibold
    fontSize: 24px
    fontWeight: 400
    lineHeight: 34px
  body:
    fontFamily: kurious_medium
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: kurious_medium
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 4px
  pill: 9999px
spacing:
  s1: 1px
  s2: 6px
  s3: 10px
  s4: 20px
  s5: 24px
  s6: 40px
  s7: 80px
  s8: 140px
  s9: 160px
components:
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.subheading}"
  nav:
    textColor: "{colors.primary}"
  footer:
    backgroundColor: "{colors.ink-3}"
    textColor: "{colors.primary}"
    padding: 80px 0px
---

## Overview

The measured page is `https://www.kbtg.tech/` (title "KASIKORN Business-Technology Group | KBTG", language `en`), the corporate site of the technology company behind KASIKORNBANK's digital products. It is a dark, product-forward page: a full-height hero with a teal geometric "K" shape holding a portrait and the rotating headline "Advance the bank" (the word "bank" in aqua, an aqua dash after "the"); a supporting line ("Revolutionizing financial experiences of tomorrow, we are the key player behind KBank's digital transformation."); a statement block "We Innovate to — empower lives" with a paragraph ("KASIKORN Business-Technology Group (KBTG) produces innovations one step ahead of its industry to run the bank and create the future...") and a "See More" link; a 4-by-3 mosaic of product tiles alternating screenshots and dark label tiles; and a closing section "Thrive beyond your ..." The extraction's h1 reads "Beyond the", a different slide of the same rotating headline.

The product tiles name the bank's apps with a short descriptor: "K PLUS - Banking at your Fingertips", "MAKE by KBank - Money Management Simplified", "KhunThong - Trusted Treasurer Friend", "K SHOP - Shop Management", "AINU - Identity Verification" and "MeowJot - Auto-track Expenses". The top bar carries the "KBTG" wordmark, a menu icon, a "Follow" label with a rule and four social icons (Facebook, Medium, LinkedIn, YouTube), and a language switch "En / Th / Vn". The page is 4968px tall with 387 visible elements. The voice is optimistic and technological, with short imperative or aspirational headlines and a pairing of white and aqua words inside each headline.

A black cookie panel with an aqua "I like cookies" button and a "Cookie setting" link overlays the lower left of the capture; it is a consent widget and is not treated as brand UI. The batch extraction (`phase2.json`, `--only=kbtg --force --no-motion`) was re-run and tokens regenerated; the tool does not remove this panel from the body text, so only values that match the brand elsewhere on the page are used.

The imagery mixes three kinds of material: a photographic portrait cropped inside a flat teal geometric shape, product screenshots of mobile banking apps held in hands or on devices against pastel backgrounds (aqua, yellow, navy), and cartoon mascots (a toucan-like bird, a fox) inside the app screens. Each type of image sits in its own square cell, so the grid reads as a wall of tiles rather than a flowing article.

## Colors

- **Canvas `#333333`** (area 2501): the statement band background.
- **Surface `#0d1a1a`** (area 6790, the largest): the hero and product-tile background, a near-black teal.
- **Surface 3 `#5d5d5d`** (area 2150): the neutral grey fill behind some tiles and image areas.
- **Ink `#ffffff`**: the main text color (2191 characters) and page-body color.
- **Primary `#62cbc9`**: the aqua accent. It colors the emphasis words in headlines ("bank", "empower lives"), the headline dashes, the "Follow" label and nav text, the circular arrow icons on tiles, the active language and the vertical rule next to "See More"; it is also the text color of the footer links and h3 "Team" (177 characters).
- **Ink 3 `#000000`**: the footer background and the cookie-panel color (30 characters of text); also `#1a1a1a` (area 922) and `#000000` (849) as dark blocks.

The browser default link blue `#0000ee` was measured on an unstyled anchor and is not a brand color. No root custom properties exist (`rootVars` is empty), so the palette is read from computed styles only.

## Typography

The family is **kurious**, shipped as three separate font files, each registered at weight 400: `kurious_medium` (2097 characters; display, body, nav), `kurious_semibold` (213; headings, tile titles, nav labels) and `kurious_bold` (88; footer headings). Hierarchy therefore comes from the family file rather than from `font-weight`. An `icomoon` icon font is also loaded.

- Display: `kurious_medium` 96px, line-height 92px ("Beyond the"); 48px / 46px on mobile.
- Heading: `kurious_semibold` 64px, line-height 60px ("We Innovate to").
- Subheading: `kurious_semibold` 24px, line-height 34px (tile titles such as "K PLUS", and h3 "Team" in aqua).
- Body: `kurious_medium` 18px, line-height 28px; 16px on mobile.
- Nav: 16px; the top bar and "Follow" labels measure 12px.
- Footer headings: `kurious_bold` 18px.

Size ladder: 18px (1291 characters), 16px (608), 12px (183), 14px (95), 24px (75), 64px (54), 96px (52), 32px (40). The brand font is proprietary; no fallback family was measured.

## Layout

Full-bleed sections stacked vertically with no boxed container visible in the capture. The hero is split: image and geometric shape at the left, the headline block starting at about the page's midpoint, followed by the supporting line and carousel indicators (a small aqua ring between two ticks). The statement block is two columns: headline left, paragraph and "See More" right. The product mosaic is four equal columns by three rows, each cell alternating between a screenshot image and a dark label tile with an aqua circular arrow icon, a 24px title and a 16px descriptor; rows alternate text-first and image-first. The measured spacing set includes 1, 6, 10, 20, 24, 40, 80, 140 and 160px, with an 80px vertical padding in the footer.

## Elevation & Depth

No shadow was measured (`boxShadows` is empty) and no borders (`borderColors` is empty). Depth comes from the step between four near-black values (`#000000`, `#0d1a1a`, `#1a1a1a`, `#333333`) and from overlapping the portrait with the geometric teal shape.

## Shapes

Radii measured are 4px (2 elements; the cookie button and small controls) and 50% (2 elements; the circular arrow icons). Tiles and images are square-cornered rectangles; the hero's teal "K" is a bold geometric graphic made of rectangular and circular arcs.

## Components

- **Headline with emphasis**: white kurious_medium text with the last words in `#62cbc9`, followed by a short aqua dash.
- **Product tile**: dark `#0d1a1a` cell with an aqua circular arrow icon, a 24px `kurious_semibold` name and a 16px descriptor; paired with a screenshot cell.
- **Text link ("See More")**: aqua, underlined, with a short vertical aqua rule above it.
- **Language switch**: "En" (active, underlined aqua), "Th", "Vn"; hovering "Th" changes its color from white to `rgb(98, 203, 201)` (measured).
- **Social row**: four small white icons next to the "Follow" label and a rule.
- **Footer**: black background, aqua `kurious_bold` 18px link columns (About, About KBTG, Milestones, Leadership, OneKBTG Be Excellent), padding 80px 0.

## Design System Architecture

No public design-system or brand-guideline page was linked from the pages opened. The page ships a proprietary typeface (`kurious_*` files) and an icomoon icon set, and exposes no CSS variables. The system is therefore a handful of conventions: dark stage, white text, one aqua accent applied to emphasis words and interactive marks, and a weight-per-file type setup.

## Do's and Don'ts

Do:
- Keep stages dark (`#0d1a1a`, `#333333`, `#000000`) with white text.
- Use `#62cbc9` only for emphasis words, arrows, rules, links and footer text.
- Switch weight by choosing the kurious file (medium, semibold, bold) and leave `font-weight` at 400.
- Use circular aqua icons for tile arrows.

Don't:
- Do not use `#0000ee` or other browser-default link colors.
- Do not add shadows or gradients; none were measured.
- Do not document the cookie-consent panel or its aqua button as brand components.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 is 48px (down from 96px) with a 60px left padding; body is 16px; the ladder becomes 16px (1386 characters), 12px, 20px, 14px, 24px, 32px and 48px. Column behavior of the mosaic, menu handling and image scaling on mobile were not measured.

## Iteration Guide

1. Dark teal-black stage `#0d1a1a` with white kurious_medium text.
2. Headlines at 96px/64px with the closing words in aqua `#62cbc9`.
3. A 4-column mosaic of screenshot and label tiles with aqua circular arrows.
4. Aqua underlined text links; black footer with aqua columns.
5. Verify with `node web/scripts/verify-designs.mjs --slug=kbtg`.
