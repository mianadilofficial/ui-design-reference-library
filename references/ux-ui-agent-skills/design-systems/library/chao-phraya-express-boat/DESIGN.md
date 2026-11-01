---
version: alpha
name: Chao Phraya Express Boat
category: "Thai Brands"
description: "Chao Phraya Express Boat Co. (เรือด่วนเจ้าพระยา) site, built on Wix: white canvas, navy #0b4280 full-width sections with white Kanit-based text at 40px and 18px, square 1px-outline buttons, a 177px header with black menu links that fade to #959595."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  ink-dark: "#323232"
  ink-light: "#fcfcfc"
  primary: "#0b4280"
  on-primary: "#ffffff"
  blue-violet: "#3744ad"
  surface-light: "#f9f9f9"
  glass-white: "#fafafab3"
  border-gray: "#bfbfbf"
  hover-gray: "#959595"
  hover-cream: "#efe9e6"
typography:
  display:
    fontFamily: wfont_a7bf84_0fbb6eae26bf4dbaaacf23a15a885a4c, wf_0fbb6eae26bf4dbaaacf23a15, orig_kanit_medium
    fontSize: 40px
    fontWeight: 700
  heading:
    fontFamily: wfont_a7bf84_0fbb6eae26bf4dbaaacf23a15a885a4c, wf_0fbb6eae26bf4dbaaacf23a15, orig_kanit_medium
    fontSize: 40px
    fontWeight: 400
  subheading:
    fontFamily: wfont_a7bf84_0fbb6eae26bf4dbaaacf23a15a885a4c, wf_0fbb6eae26bf4dbaaacf23a15, orig_kanit_medium
    fontSize: 30px
    fontWeight: 400
  body:
    fontFamily: wfont_0e59cb_0641ed7149374d178489353bd3aa2862, wf_0641ed7149374d178489353bd, orig_kanit_light
    fontSize: 18px
    fontWeight: 400
  button-secondary:
    fontFamily: wfont_a7bf84_b9486e40b9b84da6906c2df87e3af9bf, wf_b9486e40b9b84da6906c2df87, orig_kanit_light
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21px
rounded:
  pill: 9999px
spacing:
  s1: 10px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    height: 45px
    borderColor: "{colors.canvas}"
  button-secondary-hover:
    textColor: "{colors.hover-cream}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    height: 177px
  nav-link:
    textColor: "{colors.ink}"
  nav-link-hover:
    textColor: "{colors.hover-gray}"
  section-blue:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
---

## Overview

`https://www.chaophrayaexpressboat.com/` (title "เรือโดยสารในแม่น้ำเจ้าพระยา | Chao Phraya Express Boat เรือด่วนเจ้าพระยา", language `th`) is the site of the company that runs the commuter boat service on Bangkok's Chao Phraya River. It is a Wix-built brochure page, 3,683px tall at 1280px width: a white header with the company emblem and bilingual wordmark, a full-width photographic slideshow, then alternating white and navy bands for "เกี่ยวกับเรา" (About us), "เรือโดยสาร" (Passenger boats) and "เรือเช่าเหมาลำ" (Charter boats).

In the capture the header is white and 177px tall: at left a round blue-and-red emblem with the Thai wordmark "เรือด่วนเจ้าพระยา" and the English line "CHAO PHRAYA EXPRESS BOAT" in a blue italic; at right five small menu links (เกี่ยวกับเรา, เรือโดยสาร, เรือเช่าเหมาลำ, เรือลอยอังคาร, ข่าวสาร) and an "EN" language button. The hero is a photograph of a red-and-white express boat on the river in front of riverside buildings, with a translucent white title bar carrying the h1 "เรือด่วนเจ้าพระยา" in bold navy and slim chevron arrows at the left and right edges. The "เกี่ยวกับเรา" band is solid navy with a centered white title, three justified paragraphs about the company's history and services and an outlined "อ่านต่อ" (Read more) button. The "เรือโดยสาร" band is white with four columns named after the boat flags: ธงส้ม (orange flag), ธงเหลือง (yellow flag), ธงเขียวเหลือง (green-yellow flag) and ธงแดง (red flag). Each column has a small outlined boat icon in the matching hue, the route, the service days (จันทร์-ศุกร์, Monday to Friday) and fares, followed by an outlined black button "เส้นทางและตารางเรือโดยสาร" (Routes and timetable). The charter band is navy again with a subtitle ("จัดทริปไหว้พระ-ล่องเรือ-อีเว้นท์บนเรือ") over a photo slideshow of passengers on a boat.

The tone is formal and informational; the visual interest comes from photography and from the one navy. A "skip to main content" link ("ข้ามเนื้อหาหลัก") precedes the header in the markup.

## Colors

- **Canvas `#ffffff`** (5,882 area units) is the page and header; **surface-light `#f9f9f9`** (1,137) is a light band.
- **Primary `#0b4280`** (1,562 units) is the navy of the section bands, of the h1 and of the header text color; white text sits on it (`on-primary`). The generator had assigned `#0000ee`, which is the browser-default link color (the logo anchor's unstyled text), so it is dropped and the navy, which is measured as page text and as a background, is used instead.
- **Blue-violet `#3744ad`** (868 units) is a second blue band color measured in the page; the capture does not show where it is used.
- **Ink `#000000`** (499 characters) is the menu-link and heading color on white (the "ธงส้ม" h3 is black); **`#323232`** (142) is a dark gray for secondary copy; **`#fcfcfc`** colors the "เกี่ยวกับเรา" h2 on navy; white (922 characters) is the body text on navy.
- **Glass white `#fafafab3`** is the translucent title bar over the hero photo.
- **Hover gray `#959595`** is the color the menu links and the "EN" button turn to on hover; **hover cream `#efe9e6`** is the text color of the "อ่านต่อ" button on hover.
- **Border gray `#bfbfbf`** is measured on one border.

The `:root` also carries Wix's default palette (`--color_0` to `--color_65` as RGB triplets, including greens such as `70,95,66` and browns such as `143,109,92`) that the rendered page does not use; they are template defaults, not brand colors. The route flags' hues (orange, yellow, green and red) appear in the boat icons in the capture; their exact values were not recorded as text or background colors.

## Typography

Thai text is set in faces served under obfuscated Wix names. Each stack ends with an original-name fallback: `orig_kanit_medium` for the heading faces and `orig_kanit_light` for the body and button faces, which identifies them as Kanit Medium and Kanit Light. Three of the measured families are the heading face (`wfont_a7bf84_0fbb6eae26bf4dbaaacf23a15a885a4c`, 191 weighted characters), the body face (`wfont_0e59cb_0641ed7149374d178489353bd3aa2862`, 858 characters) and the small-label face (`wfont_a7bf84_b9486e40b9b84da6906c2df87e3af9bf`, 517 characters). `avenir-lt-w01_35-light` (45 characters) is declared for some Wix text styles as well. Weights: 400 (1,671 characters) and 700 (17).

- **Display (h1)**: heading face 40px, weight 700, navy, in the hero title bar (780px wide, 60px tall).
- **Heading (h2)**: heading face 40px, weight 400, in `#fcfcfc` on navy ("เกี่ยวกับเรา").
- **Subheading (h3)**: heading face 30px, weight 400, in black ("ธงส้ม", 225px wide, 45px tall).
- **Body**: body face 18px, weight 400, white on navy (835px wide, 108px tall, justified in the capture).
- **Button**: label face 15px / 21px, weight 400 ("อ่านต่อ").
- The Wix style variables map to these sizes: `--font_0`, `--font_2` and `--font_5` are 40px / 1.4em; `--font_4` is 30px / 1.4em; `--font_3` is 18px / 1.4em; `--font_6` is 15px / 1.4em; the Avenir styles `--font_7` (20px / 1.67em), `--font_8` (18px / 1.75em), `--font_9` (15px / 1.875em) and `--font_10`, `--font_1` (14px / 1.79em) are body variants.
- Sizes by characters: 18px (761), 15px (430), 14px (143), 20px (142), 40px (98), 30px (69), 16px (28), 32px (17). The 10px Arial text (and its `#0000ee` color) measured on the logo anchor is a browser default and is not a token.

Font substitute if the Wix-served faces are unavailable: Kanit (public on Google Fonts, named in the fallback stack) at its medium and light weights.

## Layout

Wix declares `--site-width: 980px` and viewport bounds `--minViewportSize: 320` and `--maxViewportSize: 1920`. The measured text blocks sit inside that column: the h1 box is 780px wide, the body paragraph 835px, and the "ธงส้ม" column title 225px. Content is centered, with section titles centered over justified paragraphs and four evenly spaced route columns. The header measured 177px tall; its content is the emblem and wordmark at the far left and the five links at the far right.

Spacing measured on the page is sparse (a 10px padding on five elements; no gap values). The vertical rhythm in the capture alternates photograph, navy band, white band, navy band at full width, with large white space above and below the section titles; exact band heights were not recorded.

## Elevation & Depth

Flat. The only shadow measured is `rgba(0, 0, 0, 0.6) 0px 0px 0px 0px`, which has zero offset, blur and spread. Depth is limited to the translucent white title bar over the hero photograph (`#fafafab3`) and the contrast between the navy bands and white. Photographs are full-bleed or inset without borders.

## Shapes

Square. Buttons and bands have 0px radius; the only radius measured is `50%` on two elements (round items such as the emblem or arrow buttons). The "อ่านต่อ" button is a rectangle with a 1px solid white border and 113×45px size, and the route-timetable button in the capture is a black-outlined rectangle. Photographs and the slideshow frame have square corners.

## Components

- **Header**: white, 177px tall; emblem and bilingual wordmark at left; menu links in black, hover `#959595`; an "EN" language button (black text and border, hover `#959595`, 24px tall).
- **Hero slideshow**: full-width photograph with a translucent `#fafafab3` title bar, a bold navy h1 and chevron arrows.
- **Navy band**: `#0b4280` full-width section with a centered white title and white paragraphs.
- **Outline button on navy**: transparent fill, 1px solid white border, white 15px / 21px label, 113×45px; hover changes the text to `#efe9e6`.
- **Route columns**: icon, flag name (30px), route and service lines (small text) and a fare line, in four centered columns.
- **Outline button on white**: black 1px border, black label ("เส้นทางและตารางเรือโดยสาร").
- **Charter slideshow**: photo frame inside the navy band with chevron arrows at its left and right edges.
- Focus states were not recorded for this page.

## Design System Architecture

No public design-system or brand-guideline page was found on the pages opened (`https://www.chaophrayaexpressboat.com/`). The de-facto system is a Wix site theme, visible in the shipped `:root`: a numbered color palette (`--color_0` to `--color_65` as RGB triplets), semantic aliases (`--wst-color-action`, `--wst-color-text-secondary`, `--wst-color-line`, `--wst-color-fill-background-primary`, `--wst-color-fill-accent-1` to `-4`, `--wst-color-custom-1` to `-20`), button aliases (`--wst-button-color-fill-primary`, `--wst-button-color-text-secondary`, `--wst-button-color-border-secondary-hover` and others), font-style aliases (`--wst-font-style-h2`, `--wst-font-style-body-medium`, and so on, pointing at `--font_N`) and layout variables (`--site-width: 980px`, `--theme-spx-ratio: 1px`). The brand layer is a small set of overrides in navy and white with Kanit-based faces; the unused template palette (greens, browns) shows the theme's origin. Source of measurement: https://www.chaophrayaexpressboat.com/.

## Do's and Don'ts

Do:
- Use white and the single navy `#0b4280`, letting photography of the boats and the river supply color.
- Use square, 1px-outline buttons (white on navy, black on white).
- Set headings in the Kanit-based heading face at 40px and 30px and body at 18px.
- Use a translucent white title bar over hero photography.

Don't:
- Don't use the browser-default `#0000ee` link color or the unused Wix template greens and browns.
- Don't round corners or add drop shadows; the measured page has square corners and no shadow.
- Don't fill the buttons; the measured buttons are outline only.
- Don't use the 10px Arial logo-anchor text as interface type.

## Responsive Behavior

The mobile pass at a 390px viewport recorded the same values as the desktop pass (h1 40px / 700 at 780×60px, h2 40px / 400 at 780×60px, body 18px at 835×108px, and an identical font-size table), so it did not capture a different mobile layout. The mobile typography, the header at mobile width and the column behavior are not measured. Wix declares a viewport range of 320px to 1920px (`--minViewportSize`, `--maxViewportSize`) and a 980px site width; no breakpoint values were recorded. Tablet widths and dark mode were not measured.

## Iteration Guide

1. Start with a white canvas, black menu links and one navy `#0b4280` for full-width bands.
2. Set the h1 at 40px / 700, headings at 40px and 30px / 400 and body at 18px in a Kanit-style face.
3. Build outline-only square buttons (1px border, 113×45px, 15px label), hover text `#efe9e6` on navy.
4. Use a 177px white header with the emblem left and five links right, with `#959595` hover.
5. Use a translucent `#fafafab3` title bar over the hero photograph, and square-cornered photo slideshows.
6. Re-measure at a true mobile layout before specifying responsive values.
