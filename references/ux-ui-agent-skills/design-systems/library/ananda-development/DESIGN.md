---
version: alpha
name: Ananda Development
category: "Thai Brands"
description: "Ananda Development English home page: cobalt blue #0032c8 pills and #0032c6 header, white canvas, Kanit and DB Helvethaica X Thai type, 8px cards, 20px See more button and per-project pastel card colors."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#0032c8"
  on-primary: "#ffffff"
  surface-lavender: "#e0e7fc"
  surface-footer: "#202020"
  ink-placeholder: "#9b9b9b"
  brand-blue-header: "#0032c6"
  ink-grey: "#666666"
  ink-blue-light: "#87a2f3"
  text-input-bg: "#003dff"
  card-blue-tint: "#cfdcff"
typography:
  display:
    fontFamily: kanit_medium
    fontSize: 26px
    fontWeight: 400
  display-mobile:
    fontFamily: kanit_medium
    fontSize: 24px
    fontWeight: 400
  body:
    fontFamily: kanit_light
    fontSize: 19px
    fontWeight: 400
    lineHeight: 42px
  button:
    fontFamily: kanit_medium
    fontSize: 18px
    fontWeight: 400
  nav:
    fontFamily: db_helvethaica_xregular
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 5px
  sm: 6px
  md: 7px
  lg: 8px
  xl: 15px
  2xl: 20px
  3xl: 100px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 18px
  s9: 19px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 4px 19px
    height: 35px
  nav:
    backgroundColor: "{colors.brand-blue-header}"
    textColor: "{colors.canvas}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
    padding: 21px 15px
    height: 70px
    borderColor: "{colors.text-input-bg}"
    boxShadow: rgb(255, 255, 255) 0px 0px 0px 0px
  card:
    backgroundColor: "{colors.card-blue-tint}"
    textColor: "{colors.brand-blue-header}"
    rounded: "{rounded.lg}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.canvas}"
---

# Ananda Development

## Overview
The measured page is the English home page of Ananda Development, a Thai residential developer, at ananda.co.th/en/home (title "Condos near BTS, Houses & Townhomes | Ananda Development"). It is a real-estate marketplace home page in a saturated cobalt blue: a blue header bar (75px tall) with the white winged ANANDA wordmark, three uppercase links (CONDOMINIUM, HOUSE, TOWNHOME), an "ENG" language selector, a search icon and a menu icon; a full-width promotional banner for the "Ananda Max Deal" campaign in vivid blue, magenta, green and yellow with Thai headlines; a "Search by Residential Projects" block with three blue tab buttons and a large blue search bar; quick-filter chips ("Condos Ready to Move", "Condos Near BTS/MRT", "Luxury Condo", "City view condo", "House for sale", "Townhome"); a "Recommended Projects" carousel of project cards; a "See more" pill; and a "Recommended Promotion" band on a pale lavender background.

Floating elements in the capture, a LINE official-account promo graphic at the left and a round winged chat button at the right, are third-party and promotional widgets and are not documented as brand UI.

## Colors
- **canvas** `#ffffff`: the dominant background (9819 area weight).
- **ink** `#000000`: headings and body text on white (803 characters); **ink-placeholder** `#9b9b9b` (1038 characters, the most-used text color, used for muted secondary copy) and **ink-grey** `#666666` (104).
- **primary** `#0032c8`: Ananda cobalt blue; the fill of the "See more" pills. **on-primary** `#ffffff`.
- **brand-blue-header** `#0032c6`: the header bar fill and the blue text on project cards (109 characters); an adjacent measured background is `#0c27c5` (688 area weight), and the search bar and field use **text-input-bg** `#003dff`.
- **surface-lavender** `#e0e7fc`: the pale periwinkle behind "Recommended Promotion" (1566 area weight); `#edf1fb` and `#e3f9fc` are lighter blue tints (383 and 473).
- **card-blue-tint** `#cfdcff`: the project card color for one project; the other projects use `#e3d3c4` (beige) and `#fffccb` (pale yellow), and the capture also shows aqua card bodies, so the card color follows each project's own palette.
- **surface-footer** `#202020`: the dark footer fill (1492 area weight).
- **ink-blue-light** `#87a2f3`: a light blue text color (71 characters).
- `#0b6b60`: a deep teal (344 area weight), measured on the green promotion tile.
`#0000ee` appeared as a link color; it is the browser default and is not a brand color.

## Typography
Thai-capable families: Kanit (loaded as kanit_light 300, kanit_regular, kanit_medium 500) for headings, buttons and body, and DB Helvethaica X (regular, medium and bold) for navigation and many labels.
- **display** kanit_medium 26px / 400 ("Search by Residential Projects"); on the 390px pass the h2 "Recommended Projects" measures kanit_medium 24px (**display-mobile**).
- **body** kanit_light 19px / 400 / 42px (the search placeholder "Serach for project", as spelled on the site).
- **button** kanit_medium 18px / 400.
- **nav** db_helvethaica_xregular 16px / 400; the header text measures kanit_regular 14px / 400 / 40px, uppercase.
By characters: db_helvethaica_xregular 1298, kanit_regular 1008, kanit_medium 283, kanit_light 226. Sizes: 20px (1433), 17px (525), 16px (169), 15px (162), 18px (153), 19px (106), 24px (86), 23px (61), 17.1px (51). Prices in the cards are set larger than their labels ("Starting price 4.19 MB").

## Layout
Measured at 1280px wide; the header is 75px high. The h1 block is 500px wide and the "Recommended Projects" heading band 1166px wide with 15px vertical padding. The search bar is 860px wide by 70px high. Project cards are 375px by 630px in a three-up carousel with a blue progress line beneath; promotion cards sit three across on the lavender band. Spacing tokens come from measured paddings and gaps: 3, 4, 5, 6, 10, 12, 15, 18, 19, 20px; the "See more" pill uses 4px 19px padding.

## Elevation & Depth
Soft shadows are used on the quick-filter chips and cards: `0 0 5px 0 rgba(0,0,0,.75)`, `0 2px 5px 0 rgba(0,0,0,0.4)` and `0 2px 10px rgba(0,0,0,.3)`; a white glow `0 0 1em #fff` is also measured. Depth otherwise comes from stacked flat color blocks.

## Shapes
Measured radii: 8px (16 uses), 6px (15), 5px (13), 8px on top corners only (9, project card images), 50% (4), 20px (4), 8px on bottom corners only (3), 100px (2), 15px and 7px. The "See more" button is 20px (rounded 2xl) at 35px high; a secondary "See more" measured 15px at 31px; the search input is 8px; the project cards are 8px.

## Components
- **button-primary**: `#0032c8` fill, white text, kanit_medium 18px, radius 20px, padding 4px 19px, height 35px ("See more").
- **text-input**: `#003dff` fill with a 1px same-color border, white 19px text, radius 8px, padding 21px 15px, height 70px, a magnifier icon at the left.
- **nav**: `#0032c6` bar with white uppercase links.
- **card**: project card with photograph, a black "READY TO MOVE IN" tag over the photo's lower edge, an outlined "CONDOMINIUM" tag, "Starting price" figure in MB (million baht), then icon lines for distance to BTS stations and perks ("Fully Furnished*", "Free Furniture*", "Last Unit").
- **filter chip**: white pill-like button with a soft shadow.
- **footer**: `#202020` with white text.

## Design System Architecture
No public design system or brand guideline was found: the home page markup contains no brand, press or design link. Root variables expose only the Swiper carousel (`--swiper-theme-color` `#007aff`, `--swiper-navigation-size` 44px), a third-party default and not a brand color. The de-facto system is a cobalt blue chrome with campaign-colored promotional artwork and per-project card colors.

## Do's and Don'ts
- Do use cobalt blue `#0032c8` and `#0032c6` for chrome, tabs, search and pills; white for text on them.
- Do let each project card carry its own pastel color while keeping blue text.
- Do state price as "Starting price N MB" with the number larger than the label.
- Do set uppercase Kanit for the primary navigation.
- Don't use Swiper's default blue or the browser link blue.
- Don't document floating LINE or chat widgets as components.

## Responsive Behavior
Measured at 390px: the "Recommended Projects" heading is kanit_medium 24px (box 390px wide by 65px high), the search placeholder is kanit_light 15px / 400 / 42px, and the detected primary control is the "CONDOMINIUM" tab, `#0d2ac3` fill with white kanit_light 15px text, radius 6px, padding 10px 10px 5px, 118px by 68px. Column counts and menu behavior were not measured.

## Iteration Guide
1. Use white canvas, cobalt blue chrome and black ink.
2. Build project cards at 8px radius with a pastel body, price figure and icon lines.
3. Use pill buttons (20px) for "See more" and 8px radius for inputs.
4. Keep the footer `#202020`.
5. Verify new values against `web/data/extracted/ananda-development.json`.

## Imagery and Voice
Imagery is architectural renderings of towers beside BTS trains and skylines, set against loud campaign art: collage banners with Thai display lettering, neon green, magenta and yellow blocks, and illustrated characters. The campaign copy is Thai ("ยกขบวน โปรเต็มMAX!"), while the English interface copy is plain and functional: "Search by Residential Projects", "Recommended Projects", "Recommended Promotion", "READY TO MOVE IN", "350 meters from Phra Khanong BTS station", "Fully Furnished*". Prices are in MB with two decimals (4.19, 9.90, 3.99).

## Page Sequence
The capture runs in this order: header, a campaign hero in the full page width, the project search block, the recommended projects carousel with each project's logo and name above its card (for example Ideo Sukhumvit-Rama 4, Ashton Silom, Ideo Mobi Sukhumvit Eastpoint), a "See more" pill centered under a blue progress rule, and a lavender band with three promotion cards whose captions sit on solid blue or green panels with white text ("Ananda Max Deal", "Ananda Housing - Max Deal", "RIGHT PRICE RIGHT NOW"). Project names above the cards are set in blue and aligned to alternating sides.
