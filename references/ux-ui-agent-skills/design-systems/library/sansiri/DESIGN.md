---
version: alpha
name: Sansiri
category: "Thai Brands"
description: "Thai property developer site at sansiri.com/thai. White canvas, brand blue #0053b5, GraphikTH Regular and SemiBold with 36px headings, 50px-radius pill buttons and inputs, 16px-radius project cards with soft shadows, and a #f6f6f6 footer."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#0053b5"
  on-primary: "#ffffff"
  surface-2: "#f6f6f6"
  surface-3: "#f3f6fe"
  ink-4: "#666666"
  button-secondary-bg: "#bfd4ec"
  text-input-text: "#333333"
  card-border: "#fdfdfd"
typography:
  display:
    fontFamily: GraphikTH-SemiBold, Prompt, "Noto Sans TC", sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 46.8px
  display-mobile:
    fontFamily: GraphikTH-SemiBold, Prompt, "Noto Sans TC", sans-serif
    fontSize: 25px
    fontWeight: 500
    lineHeight: 35px
  heading:
    fontFamily: GraphikTH-Regular, Prompt, "Noto Sans TC", sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 30px
  body:
    fontFamily: GraphikTH-Regular, Prompt, "Noto Sans TC", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: GraphikTH-SemiBold, Prompt, "Noto Sans TC", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 3px
  md: 8px
  lg: 10px
  xl: 16px
  2xl: 20px
  3xl: 30px
  4xl: 50px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7.5px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 0px 5px 0px 15px
    height: 40px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 8px 10px
    height: 40px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.body}"
    rounded: "{rounded.4xl}"
    padding: 0px 80px 0px 24px
    height: 50px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    borderColor: "{colors.card-border}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 5px 10px 0px
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
---

# Sansiri (แสนสิริ)

## Overview
The measured page is https://www.sansiri.com/thai/, the Thai home of Sansiri, a property developer, titled "แสนสิริ: บ้าน คอนโด ทาวน์โฮม โครงการพร้อมอยู่ โครงการน่าลงทุน" (houses, condominiums, townhomes, ready-to-move-in and investment projects). The page is 1280px wide and 6736px tall. The header is a white 60px bar with the black Thai wordmark "แสนสิริ" at left, four centered category links (บ้านเดี่ยว, บ้านแฝด, ทาวน์โฮม, คอนโดมิเนียม) and search and menu icons at right, followed by a three-segment color stripe in orange, brown and sand. The hero is a promotional slide: a photo collage of detached houses and a construction crew on the left, and on the right an orange "ล็อค" headline, a dark-blue "ต้นแบบ" line, three dated event strips in navy and orange, and a pill offering "เริ่ม 3.69 - 40 ล้าน". A dark translucent search bar sits across the bottom of the hero with a "ยูนิต HOT DEAL" chip, a "ทำเลน่าสนใจ" chip, a rounded search field and a glowing blue "ผู้ช่วยค้นหาโครงการ" (project finder assistant) pill. Below the hero, "แนะนำโครงการแสนสิริ" introduces a pale blue band with tabs and a horizontally scrolling row of project cards, each with a photo, a project name, type tags, a two-line description, a price ("เริ่ม 3.9 ล้าน") and a round blue arrow button. Further down come lifestyle tiles in pastel pink, sand, navy and green.

## Colors
The brand blue is `#0053b5`, which fills the "ดูทั้งหมด" (see all) button, its 1px border, the tab text, the arrow buttons and the hover color of navigation links (measured: link text turns from `rgb(0, 0, 0)` to `rgb(0, 83, 181)`). A pale blue `#bfd4ec` fills the active tab chip and `#f3f6fe` tints the project band. Text is `#000000` on white, `#666666` for muted copy and `#333333` inside inputs. Surfaces are `#ffffff` (canvas), `#f6f6f6` for the footer and `#fdfdfd` for the card border. Other border colors measured are `#dee2e6` and `#d9d9d9`. The page also loads Bootstrap's defaults as root variables (`--bs-primary: #0d6efd` and its siblings); those are framework defaults, not Sansiri brand colors, so they are not tokenised, including the Bootstrap blue that the extractor read as the link color. Hero artwork uses orange, navy and sand colors that belong to the campaign image rather than the interface.

## Typography
The family is GraphikTH, loaded in two files: GraphikTH-Regular for body and GraphikTH-SemiBold for emphasis, with Prompt and Noto Sans TC as fallbacks. The h1 "แนะนำโครงการแสนสิริ" is 36px on a 46.8px line height at declared weight 500; the h2 sub-line is 20px/30px; tile headings are 25px/35px uppercase; card titles 20px/30px; body copy is 16px/24px, and the footer text 13px/19.5px. Character statistics by size: 16px (4149), 13px (2922), 20px, 25px, 10px, 36px and 42px. On mobile the h1 is 25px/35px and the h2 18px/27px.

## Layout
Desktop content runs in wide bands: the hero, a pale project band with centered headings and a tab strip, then carousels that bleed past the viewport edge, with a visible next-arrow circle. Card width is 351px and height 561px in the first project card. The footer is tall (1826px) on a `#f6f6f6` background with category and promotion link columns. Spacing values measured: 1, 3, 4, 5, 6, 7.5, 8, 10, 12 and 15px.

## Imagery and Voice
Photography is architectural rendering and real build photography: two-storey detached houses with cars on the driveway, a three-storey commercial row, a tower with balconies and planting, and a site crew in hard hats and blue uniforms reviewing plans. Lifestyle tiles pair a pastel background with a rendered townhouse and a short Thai promise such as "ทาวน์โฮมราคา 3 - 5 ล้าน" (townhomes priced 3 to 5 million) or "คอนโดไม่เกิน 3 ล้าน". Headlines are conversational and price-led, and small tags describe each project: "โครงการใหม่", the property type and the number of floors or bedrooms. Numbers are always shown with Thai unit words, for example a count of 49 new projects inside the tab label, and the footer repeats the four product categories, promotions and the HOT DEAL units.

## Elevation & Depth
Shadows are soft and neutral: `rgba(0, 0, 0, 0.15) 0px 2px 6px 0px` (most frequent), `rgba(0, 0, 0, 0.15) 0px 5px 10px 0px` on project cards, `rgba(0, 0, 0, 0.075) 0px 1.25px 2.5px 0px`, `rgba(0, 0, 0, 0.1) 0px 5px 10px 0px`, and a glowing cyan-and-black pair, `rgba(75, 200, 251, 0.71) 5px -3px 10px 0px, rgba(0, 0, 0, 0.39) 0px 5px 10px 0px`, on the assistant pill.

## Shapes
Rounded geometry is the signature. Measured radii by frequency: 50% (circular icon buttons), 16px (cards), 50px (pill buttons, inputs and chips), 20px, 3px, 8px, 10px, 30px, and mixed corners like `0px 0px 20px 20px` and `30px 30px 0px 0px` on tile media. The primary button, secondary tab and the search input all use 50px, so they read as full pills; cards use 16px.

## Components
**Primary button:** "ดูทั้งหมด", `#0053b5` fill and border, white GraphikTH-SemiBold 16px, 50px radius, padding 0px 5px 0px 15px, 40px high, with a trailing arrow icon. **Tab chip (secondary):** active "โครงการใหม่ 49" with `#bfd4ec` fill and `#0053b5` text, 50px radius, 8px 10px padding, 40px high. **Outlined chip:** "ยูนิต HOT DEAL" white text with a 1px white border on the dark search bar, 40px high. **Search input:** white, 50px radius, `#333333` text, 50px high, 24px left and 80px right padding. **Project card:** white, 16px radius, 1px `#fdfdfd` border, shadow `0px 5px 10px`. **Footer:** `#f6f6f6` with 13px black links.

## Design System Architecture
No public design system or guideline was opened; `_research` records `none: true`. The site is built on Bootstrap 5: the root variables `--bs-*` (primary, orange, purple, border radius scale, box shadows) are present, and the brand layer is applied over them with GraphikTH fonts and custom blue. Assets such as the wordmark SVG are served from an S3 bucket named `sansiri-com-frontend`. Source: https://www.sansiri.com/thai/ measured into web/data/extracted/sansiri.json.

## Do's and Don'ts
- Do use `#0053b5` for actions, active tabs and hover and keep neutral text black.
- Do make buttons, chips and inputs 50px pills and cards 16px.
- Do show price starting points ("เริ่ม 3.9 ล้าน") bold at the bottom of each card.
- Do use pastel lifestyle tiles for category entry points.
- Don't use Bootstrap's `#0d6efd` link blue; it is a framework default.
- Don't use heavy shadows; measured values are 0.075 to 0.15 black.
- Don't use English-only labels; the Thai page uses Thai for all navigation.

## Responsive Behavior
The 390px mobile pass measured the h1 at 25px/35px, the h2 at 18px/27px, body text 16px/24px, a 60px white header and the "ดูทั้งหมด" button unchanged (40px high, 50px radius, `#0053b5`). Column counts, the hero rearrangement and menu behavior on mobile are not measured.

## Iteration Guide
1. Canvas `#ffffff`, ink `#000000`, brand blue `#0053b5`, tint `#bfd4ec`.
2. GraphikTH 16px/24px body, 36px/46.8px page heading, 25px tile headings.
3. Pills at 50px radius, 40px high for buttons and 50px high for inputs.
4. Cards 16px radius with a soft `0px 5px 10px` shadow, price at the bottom, blue arrow button.
5. Footer on `#f6f6f6`.
6. Run `node web/scripts/verify-designs.mjs --slug=sansiri`.
