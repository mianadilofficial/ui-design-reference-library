---
version: alpha
name: Clover Power
category: "Thai Brands"
description: "Clover Power (cloverpower.co.th), a Thai renewable-electricity producer, uses a white canvas #ffffff, blue #4378bc and #3e78bc, deeper blue #305993, clover green #72bb44 and orange #f7941d accents, Mitr type from 16px/300 body to an 80px/500 hero word, 25px pill buttons and leaf-shaped image masks."
colors:
  canvas: "#ffffff"
  ink: "#4378bc"
  primary: "#4378bc"
  blue-deep: "#305993"
  blue-nav: "#3e78bc"
  hero-ghost: "#ffffff80"
  clover-green: "#72bb44"
  leaf-green: "#579a2c"
  accent-orange: "#f7941d"
  card-gradient-start: "#4890d9"
  card-gradient-end: "#66bdfd"
typography:
  display:
    fontFamily: mitr, Tahoma, sans-serif
    fontSize: 80px
    fontWeight: 500
    lineHeight: 80px
  display-mobile:
    fontFamily: mitr, Tahoma, sans-serif
    fontSize: 60px
    fontWeight: 500
    lineHeight: 60px
  subheading:
    fontFamily: mitr, Tahoma, sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 33.6px
  body:
    fontFamily: mitr, Tahoma, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  link:
    fontFamily: mitr, Tahoma, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 5px
  md: 16px
  lg: 25px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 15px
  s6: 16px
  s7: 24px
  s8: 25px
  s9: 30px
  s10: 32px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.lg}"
    padding: 8px 32px
    height: 42px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.lg}"
    padding: 8px 32px
    borderColor: "{colors.canvas}"
  nav:
    backgroundColor: "{colors.blue-nav}"
    textColor: "{colors.canvas}"
    boxShadow: rgba(51, 51, 51, 0.16) 0px 2px 6px 0px
  card:
    textColor: "{colors.canvas}"
    padding: 16px
    boxShadow: rgba(51, 51, 51, 0.29) 0px 2px 6px 0px
  footer:
    textColor: "{colors.canvas}"
---

## Overview

Clover Power Public Company Limited ("CV") is a Thai producer and seller of electricity from renewable energy; its home page (`https://www.cloverpower.co.th/th/home`, title "ผู้ผลิตไฟฟ้าและจำหน่ายไฟฟ้าจากพลังงานหมุนเวียน | Clover Power", 432 visible elements, 5886px tall) says the company has worked in renewable-energy engineering and power-plant construction for more than 17 years. The mark is a four-leaf clover beside a blue "CLOVER" wordmark, and the whole page plays on the clover: the hero is a saturated green field with a clover close-up cut into a leaf-shaped capsule, the heading reads "Green / Tech / Balanced" with only the first word at full strength, the second section places a wind-turbine photograph in a diagonal capsule on a green field under the heading "บริษัทพลังงานชั้นนำ" (a leading energy company), and a deep-blue band titled "ข้อมูลที่น่าสนใจ" (interesting facts) shows "23.66 MW INSTALLED CAPACITY" over a photograph of a hand holding a dew-covered clover.

The tone is optimistic and eco-corporate: large photographic capsules, soft rounded pill buttons, a rounded white header with a blue navigation band, and large white Mitr type. A cookie banner with "ยอมรับทั้งหมด" overlays the foot of the hero in the capture; it is not brand UI and is not documented.

## Colors

Measured background area by weight: white #ffffff (2390), blue #305993 (412), translucent #333333cc (178, the cookie banner), blue #3e78bc (128), deep blue #2a4b8a (104), blue #4378bc (12), green #579a2c (1). Text colours by characters: white (2165), blue #4378bc (403), translucent white #ffffff80 (13).

- **canvas #ffffff**: header base and light bands.
- **ink #4378bc** and **primary #4378bc**: the same mid-blue, used for headings and links on white and as the border colour of ten elements. The extractor found no filled primary button, so blue is both text and accent.
- **blue-nav #3e78bc**: fill of the navigation band (header role). **blue-deep #305993**: the largest blue area, the statistics band.
- **hero-ghost #ffffff80**: the half-opaque white of the hero word "Green".
- **clover-green #72bb44**, **leaf-green #579a2c** and **accent-orange #f7941d**: appear in the stylesheet colour list (counts 90, 36 and 57); green is the hero field and the orange is the hamburger glyph seen in the capture, though the extraction did not isolate which elements use each.
- **card-gradient-start #4890d9** and **card-gradient-end #66bdfd**: the stops of the 135-degree gradient on the plant cards.

The root variables are the Bootstrap 4 defaults (`--primary: #007bff`, `--success: #28a745`); those, and the #007bff nav-link colour the generator saw, are framework values and are not brand colours.

## Typography

One family: **Mitr** (all 2581 measured characters), with Tahoma and sans-serif as fallbacks in the CSS. Weights: 300 (1640 characters), 500 (711), 400 (230). Roles: hero word 500 80px/80px (mobile 60px/60px); subheading 500 28px/33.6px; body 300 16px/24px; link and button text 400 16px/24px; header text 300 12.8px/19.2px. Most-read sizes: 16px (1782), 24px (414), 28px (256), 56px (69), 64px (29), 80px (17), 40px (11). Mitr is loaded by the site, so no substitute is specified.

## Layout

Desktop viewport 1280px. The header is a white tab with the logo at left, a green EN badge and an orange hamburger glyph, and a blue curved navigation band under it carrying เกี่ยวกับเรา, ธุรกิจของเรา, นักลงทุนสัมพันธ์, การกำกับดูแลกิจการ, ความยั่งยืน, BLOG and ติดต่อเรา. The long menu also lists company information, vision and mission, milestones, management structure, subsidiaries, financial data, shareholder information, news room, 56-1 One Report, sustainability, careers and online job application. Body bands alternate green and blue with a text column in the right half and a large capsule photograph in the left half; the footer is 403px tall with the company name at 28px. Paddings by frequency: 15px (35), 8px (30), 32px (21), 16px (12), 24px (12), 30px (6), 4px (4).

## Elevation & Depth

Measured shadows: `rgba(51, 51, 51, 0.29) 0px 2px 6px 0px` (4 elements, the plant cards), `rgba(51, 51, 51, 0.16) 0px 2px 6px 0px` (header) and `rgba(0, 0, 0, 0.05) 0px 2px 8px 0px`. Depth is shallow: soft low-offset shadows, translucent white typography on photographs and low-opacity clover pattern layered over the green field.

## Shapes

Measured radii: 25px (18 elements), 4px (5), `0px 0px 0px 150px` (4), 5px (3), 100% (3), 16px (3), 50% (2). Buttons and the outlined link are 25px pills; the plant cards have a single 150px bottom-left corner; 100% and 50% produce circles such as the EN badge. The image masks in the capture are large capsule and leaf outlines.

## Components

- **Outlined pill button:** "ธุรกิจของเรา" (Our business): white text, 1px solid #ffffff border, 25px radius, padding 8px 32px, 151px by 42px, Mitr 400 16px.
- **Plant cards:** white 28px/500 text on the blue 135-degree gradient, 524px by 131px, 16px padding, radius `0px 0px 0px 150px`, shadow `rgba(51, 51, 51, 0.29) 0px 2px 6px 0px`; titles include "โรงไฟฟ้าชีวมวลโคลเวอร์ เพาเวอร์ (CV) จังหวัดแพร่", "โรงไฟฟ้าพลังงานความร้อนร่วม จังหวัดสระบุรี" and "โรงไฟฟ้าพลังงานขยะ โคลเวอร์ พิจิตร (CPX) จังหวัดพิจิตร".
- **Navigation:** blue #3e78bc band, white 12.8px/300 labels; hover states other than the starting white were not read.
- **Statistic block:** a power-pylon line icon, white label, "23.66 MW" numeral and "INSTALLED CAPACITY" caption with a hairline rule and a next arrow.
- The cookie banner and its buttons are not components.

## Design System Architecture

No public design system or brand-guidelines page was found: the opened page https://www.cloverpower.co.th/th/home links only to corporate, investor, news and career pages. The de-facto system is Bootstrap 4 (root variables `--primary: #007bff`, `--breakpoint-sm: 576px`, `--breakpoint-md: 768px`, `--breakpoint-lg: 992px`, `--breakpoint-xl: 1200px`) with a custom stylesheet that sets Mitr, the blues and greens above and the bottom-left-rounded card shape.

## Do's and Don'ts

- Do set everything in Mitr and keep body copy at 300 weight, 16px/24px.
- Do use blue #4378bc and bands #3e78bc and #305993 against green photography.
- Do mask photography in capsule and leaf shapes.
- Do use 25px outlined pill buttons with white text.
- Don't use Bootstrap's default #007bff as a brand colour.
- Don't document the cookie banner as brand UI.
- Don't add shadows heavier than the measured 0.29-alpha, 6px-blur card shadow.

## Responsive Behavior

Mobile was measured at 390px. The hero word stays Mitr 500 and drops from 80px to 60px (line 60px) in a 360px wide block; the body paragraph stays 16px/24px in a 360px by 96px block; the header measures 390px by 60px and recorded no text, so mobile navigation labels were not captured. Mobile size frequencies: 16px (1697 characters), 20px (414), 28px (256), 56px (69), 32px (29), 60px (17). Panel stacking, capsule cropping and menu behaviour at narrow widths were not measured.

## Iteration Guide

1. Start with canvas #ffffff, ink and primary #4378bc, blue-nav #3e78bc, blue-deep #305993.
2. Set Mitr: 80px/500 hero word, 28px/500 subheads, 16px/300 body.
3. Place photographs in capsule masks; give cards the 150px bottom-left corner and the 135-degree blue gradient.
4. Buttons: outlined white, 25px radius, 8px 32px padding.
5. Use green #72bb44 for clover imagery fields and orange #f7941d only for small utility glyphs.
6. Measure any new component before adding a token; states not recorded stay "not measured".
