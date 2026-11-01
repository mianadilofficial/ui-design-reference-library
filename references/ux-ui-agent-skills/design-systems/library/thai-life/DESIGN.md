---
version: alpha
name: Thai Life Insurance (ไทยประกันชีวิต)
category: "Thai Brands"
description: "Thai Life Insurance corporate site in Thai: white canvas, brand blue #007ac2 headings and links, gray #666666 body, a gray #797979 product menu bar, Conv_Ozone and Conv_OzoneMed type at 20-52px, life-stage pictogram sections, 2px and 15px radii."
colors:
  canvas: "#ffffff"
  page-largest: "#f9f9f9"
  ink: "#666666"
  ink-dark: "#333333"
  ink-heading: "#353e3f"
  primary: "#007ac2"
  primary-dark: "#0768a9"
  surface-bar: "#797979"
  surface-card: "#e8e8e8"
  nav-bg: "#ffffffcc"
  hairline: "#e0e0e0"
  hairline-gray: "#999999"
typography:
  display:
    fontFamily: Conv_OzoneMed
    fontSize: 52px
    fontWeight: 500
    lineHeight: 52px
  display-mobile:
    fontFamily: Conv_Ozone
    fontSize: 30px
    fontWeight: 400
    lineHeight: 30px
  subheading:
    fontFamily: Conv_Ozone
    fontSize: 32px
    fontWeight: 500
    lineHeight: 32px
  body:
    fontFamily: Conv_Ozone
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28.5714px
  nav:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 2px
  sm: 10px
  md: 15px
spacing:
  s1: 4px
  s2: 5px
  s3: 7px
  s4: 7.5px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 15px
  s9: 20px
  s10: 45px
components:
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-dark}"
    rounded: "{rounded.md}"
    padding: 15px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    padding: 20px 0px 0px
---

## Overview

The site of Thai Life Insurance, ไทยประกันชีวิต (https://www.thailife.com/, title "ไทยประกันชีวิต เป็นทุกคำตอบของชีวิต", language th-th), is a Thai-language corporate and product portal, 3,897px tall at 1280px. The top is a white utility nav with seven links (บริการลูกค้า, บริการตัวแทน, รู้จักไทยประกันชีวิต, นักลงทุนสัมพันธ์, เพื่อสังคมไทย, ติดต่อไทยประกันชีวิต, บทความ) and the blue square logo "ไทยประกัน ชีวิต" at the top right. A gray product bar below it holds แบบประกันทั้งหมด, แบบประกันที่เหมาะกับช่วงอายุ, เปรียบเทียบแบบประกัน and เลือกแบบประกันที่เหมาะกับคุณ, with a blue search square and a TH language switch.

A large hero banner ("HEALTH CARE SOLUTIONS" with four white cards and blue blob shapes, a red "คลิก" pill) sits over four promotional thumbnails (LifeVerse, Health Care Solutions, Privilege cards and a call-centre photo). The section "ผลิตภัณฑ์ของเรา" (Our products) introduces seven life-stage pictograms in blue: วัยลูกน้อย (0-5), วัยเรียน (6-20), วัยเริ่มทำงาน (21-25), วัยสร้างตัว (26-35), วัยสร้างความมั่นคง (36-50), วัยใกล้เกษียณ (51-60) and วัยเกษียณ (60+). Below are a photo banner "บัตรประจำตัวผู้เอาประกันภัย", a blue "LIVE TO LIFE" band with a photo strip (Health, Art & Culture, Wealth, Travel, Lifestyle, Better Life), a three-column service row (สมัครเป็นตัวแทน, ค้นหาตัวแทนบริการ, ค้นหาสาขา) and a gray footer with social links. A small floating shield icon at the left edge is a consent widget and is not brand UI.

## Colors

`canvas` is white `#ffffff` with `#f9f9f9` as the largest background area (1,194) for alternating bands and the footer. Body copy is gray `#666666` (1,829 characters) and `#797979` (1,418) for secondary lines; headings are dark slate `#353e3f` ("ผลิตภัณฑ์ของเรา") and `#333333` for card text. The brand blue is `#007ac2`: it colors 854 characters of text (the life-stage titles and links), appears as the logo square, the search square and the LIVE TO LIFE band, and has a darker pair `#0768a9`. The product menu bar is gray `#797979`, card fills are `#e8e8e8`, and the nav is translucent white `#ffffffcc`. Pagination dots go from `#999999` to `#007ac2` on hover. The link color `#337ab7` measured on one nav anchor is Bootstrap's default link blue, not a brand color, and is dropped. Red promotional pills in banner art are image content.

## Typography

Thai type is set in Conv_Ozone (4,415 characters, regular) with Conv_OzoneMed (65 characters, weight 500) for section titles; both are web-converted font files named in the CSS. Conv_Kitti and Conv_Kitti_Bold appear in the CSS corpus but not on measured text. Latin fallback is Helvetica Neue, Helvetica, Arial (used by an anchor in the nav row at 14px). FontAwesome and Glyphicons supply icons.

Measured: section title "ผลิตภัณฑ์ของเรา" 52px/52px weight 500 (42px on mobile); life-stage titles 32px weight 500 in blue; body 20px/28.5714px weight 400; the most common sizes are 22px (1,244 characters), 18px (851), 28px (818) and 15px (661); the hero LifeVerse title is 30px on the mobile pass. Line-height is tight (1.0) on headings and about 1.43 on body. No letter-spacing is recorded.

## Layout

A centered 1280px page of full-width bands. The life-stage block is two rows (five pictograms then two), each a centered column with an icon, a blue two-line title, and a 15px gray description. The three service columns are separated by thin vertical rules with outlined "ดูเพิ่มเติม" (see more) buttons. Banner bands are full-bleed images. Measured paddings: 10px (32), 20px (22), 5px (15), 15px (12), 55px (6), 8px and 4px.

## Elevation & Depth

One shadow is measured: `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` on 2 elements (the white hero cards sit on it). Otherwise flat: bands separate through color (white, `#f9f9f9`, blue) and photography. Pagination markers are 5px-high bars with 2px radius that fade at 0.5 opacity.

## Shapes

Radii: 2px (10 elements, the pagination bars and outlined buttons), 10px (2) and 15px (1, the app-download card). Buttons "ดูเพิ่มเติม" are outlined rectangles with a gray 1px border. The logo mark and search control are blue squares.

## Components

**Utility nav.** White (`#ffffffcc`) bar, 105px high, gray Conv_Ozone 21px links. **Product menu bar.** Full-width gray `#797979` strip with white links. **Hero.** Banner image with pagination bars. **Life-stage item.** Blue pictogram, 32px blue title with age range, gray description. **Outlined button.** "ดูเพิ่มเติม", gray 1px border, square corners. **App card.** `#e8e8e8` card, 15px radius, 15px padding, 154px high, 325px wide, with the text "แอปพลิเคชัน ไทยประกันชีวิต ดาวน์โหลดได้แล้ววันนี้" (the Thai Life app can be downloaded today) at 20px. **Footer.** `#f9f9f9`, 20px top padding, follow-us line with social handles.

## Content & Voice

The page organizes insurance by life stage rather than by product type: each of the seven stages names an age range and a one-line promise, such as preparing for a child's medical costs, funding education, building a career safety net, protecting family finances, and securing retirement. The section intro describes Thai Life as the first life insurer of Thai people, offering coverage for accident, life, health and savings. Promotions are bilingual, mixing English campaign names (HEALTH CARE SOLUTIONS, LifeVerse, PRIVILEGE, LIVE TO LIFE) with Thai explanation, and the tone is warm, family-oriented and photographic, with smiling parents and children in the main banner. Calls to action are plain verbs in Thai (apply as an agent, find an agent, find a branch, see more).

## Design System Architecture

No public design system or brand guideline was found; the pages opened exposed none. The CSS carries no root variables (`rootVars` is empty); the stylesheet is a Bootstrap 3 era build (Glyphicons Halflings, `#337ab7` link blue) with the converted Ozone font files overriding type. The brand system is carried by the blue `#007ac2`, the Ozone typeface, the pictogram set and the photography.

## Do's and Don'ts

Do use brand blue `#007ac2` for titles, links and key bands, and gray `#666666` for body copy on white. Do set Thai headings in Conv_OzoneMed or Ozone 500 with tight line-height. Do use the pictogram-over-title-over-caption pattern for the life stages. Do keep corners square, or 15px on cards.

Don't use Bootstrap's `#337ab7` for links. Don't treat the red "คลิก" pills inside banner art as UI buttons. Don't add heavy shadows beyond the single 0.2-alpha one. Don't document the floating consent shield as a brand component.

## Responsive Behavior

Measured on the 390px mobile pass: the first heading role is "LifeVerse" at 30px weight 400 in blue (278px wide), the section title "ผลิตภัณฑ์ของเรา" shrinks to 42px/42px in a 360px box, the body line "แอปพลิเคชัน ไทยประกันชีวิต ..." stays 20px/28.5714px (295px wide), and no navigation or CTA was recorded. Further reflow is not measured.

## Iteration Guide

1. White canvas with `#f9f9f9` bands; body `#666666`, headings `#353e3f`; accent `#007ac2`.
2. Conv_Ozone 20px/28.57px for body and 52px medium for section titles.
3. Build the gray `#797979` product bar under a white utility nav.
4. Create the life-stage row from blue pictograms, 32px blue titles and gray captions.
5. Keep shadows to `rgba(0,0,0,0.2) 0px 4px 8px` and radii to 2px, 10px or 15px.
6. Measure the individual product and article pages before documenting them.
