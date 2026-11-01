---
version: alpha
name: Minor Smart Kids
category: "Thai Brands"
description: "Minor Smart Kids (minorsmartkids.com) is a playful Thai educational-toy and learning-media distributor site: blue #0d62ab and sunshine yellow #febe2c waves, warm black #251f1b text, the Mitr and pslxomyim typefaces up to 100px, and chunky 15px-radius buttons with hard offset shadows."
colors:
  canvas: "#ffffff"
  ink: "#251f1b"
  primary: "#0d62ab"
  on-primary: "#ffffff"
  surface-yellow: "#febe2c"
  accent-purple: "#7758a8"
  accent-pink: "#f3607b"
  ink-muted: "#777777"
  ink-lavender: "#a28bc6"
  link: "#333333"
typography:
  display:
    fontFamily: pslxomyim-Bold, Mitr
    fontSize: 100px
    fontWeight: 400
    lineHeight: 75px
  display-mobile:
    fontFamily: pslxomyim-Bold, Mitr
    fontSize: 85px
    fontWeight: 400
    lineHeight: 59.5px
  heading:
    fontFamily: pslxomyim-Bold, Mitr
    fontSize: 45px
    fontWeight: 400
    lineHeight: 45px
  subheading:
    fontFamily: Mitr, Mitr
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: Mitr, Mitr
    fontSize: 18px
    fontWeight: 300
    lineHeight: 21.6px
  button:
    fontFamily: pslxomyim, Mitr
    fontSize: 25px
    fontWeight: 500
    lineHeight: 25px
  button-secondary:
    fontFamily: pslxomyim, Mitr
    fontSize: 30px
    fontWeight: 500
    lineHeight: 30px
rounded:
  xs: 3px
  sm: 5px
  md: 10px
  lg: 15px
  xl: 25px
  2xl: 30px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 24px
  s7: 25px
  s8: 30px
  s9: 32px
  s10: 35px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 15px 40px
    height: 55px
    boxShadow: rgb(6, 51, 90) 5px 5px 0px 2px
  button-secondary:
    backgroundColor: "{colors.surface-yellow}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 15px 40px
    height: 60px
    boxShadow: rgb(155, 113, 17) 5px 5px 0px 2px
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.link}"
    padding: 30px
---

## Overview

Minor Smart Kids is the children's learning-media and educational-toy distribution arm of Minor (the queue lists https://www.minorlifestyle.com as its parent). The measured page is https://minorsmartkids.com/ (title "Minor Smart Kids | Be Smart with Minor", language attribute `en-US`), 1280px wide and 7929px tall. Its social description reads "For your family's SUCCESS & HAPPINESS เพื่อความสำเร็จของบุตรหลาน ทั้งในโรงเรียน และการดำเนินชีวิต" and describes the company as "ตัวแทนจำหน่ายสื่อการเรียนการสอน คุณภาพสูง ที่ทั่วโลกให้การยอมรับ".

The capture shows: a header with the multicolor "MINOR SMART KIDS" logo (a smiling girl's face in the last letter) and the menu "Dermatoglyphics Multiple Intelligence Test", Product, "News & Blog", Knowledge, "About Us" plus a search icon; a hero photograph of a child with binoculars, a cut-out puzzle piece, a heart sticker and the blue headline "SUCCESS & HAPPINESS" with a blue "Our Products" button; then a wavy deep-blue "About Us" band with a tiger mascot and a winking girl mascot, the white title "MINOR SMART KIDS", a yellow Thai tagline and an underlined "Learn More" link, ending in a yellow wave. Below, a white section has the pink label "Product Category" over the black headline "WHAT EXCITE YOUR KIDS?" and five category icons (Coding Robot, ของเล่นเสริมพัฒนาการ, ภาษาอังกฤษ, ภาษาจีน, สร้างเสริมความฉลาดทางอารมณ์ EQ), followed by a light-blue band for the "DERMATOGLYPHICS MULTIPLE INTELLIGENCE TEST" with a fingerprint magnifier. The voice mixes English display headings with Thai explanations and is cheerful and parent-facing.

A consent popup (a payment-fraud notice) and a cookie bar ("Settings" and "Allow") were present in the capture. The extractor logged `consentOverlaysHidden` for the classes `dpdpa--popup active`, `scrim dpdpa--popup-bg` and `dpdpa--popup-cookie-detail`; they and the #000000cc scrim are not documented as brand UI or tokens.

## Colors

Background areas by weight: #febe2c (5035), #000000cc (1024, the popup scrim), #ffffff (1010), #0d62ab (796), #7758a8 (39), #000000 (2).

- **canvas #ffffff** is the page background (confirmed on capture pixels); **surface-yellow #febe2c** is the sunshine yellow of the waves and the secondary button fill.
- **primary #0d62ab** is the blue: the "Our Products" button fill (text #ffffff), the hero headline color and the "About Us" band.
- **ink #251f1b** is a warm near-black text color and the dominant one (8057 characters weighted); white text (996) sits on blue.
- **accent-purple #7758a8** is the fill of the "All News & Updates" button; **accent-pink #f3607b** colors text on 16 characters (the "Product Category" label); **ink-lavender #a28bc6** (36 characters); **ink-muted #777777** (335 characters); **link #333333** is the nav-link color.
- The yellow #febe2c is also a text color on 95 characters (the Thai tagline over blue).

WordPress preset colors in :root (for example --wp--preset--color--vivid-cyan-blue #0693e3, vivid-red #cf2e2e) and Swiper's #007aff are platform defaults and are not brand colors.

## Typography

The headline and button faces are custom: **pslxomyim** and **pslxomyim-Bold** (the shipped family names), with **Mitr** (loaded in 300, 400, 500 and 700) as fallback and as the body face. The typeface behind "pslxomyim" is not named on the page, so it is described only by its shipped name. Font Awesome 5 and "eicons" are icon fonts.

Measured sizes by character weight: 17px (6649), 18px (1164), 28px (459), 20px (448), 15px (374), 22px (350), 25px (119), 19px, 30px, 90px (78), 55px, 38px, 100px (18), 45px, 32px.

- **display**: pslxomyim-Bold 100px / 400 / 75px (the "SUCCESS & HAPPINESS" headline, measured on an h2).
- **heading**: pslxomyim-Bold 45px / 400 / 45px.
- **subheading**: Mitr 20px / 500 / 24px. **body**: Mitr 18px / 300 / 21.6px.
- **button**: pslxomyim 25px / 500 / 25px; **button-secondary**: 30px / 500 / 30px.
- **display-mobile**: 85px / 400 / 59.5px.

Display lines are tightly leaded (line-height 75% of the 100px size).

## Layout

The page alternates wave-edged color bands (photo hero, deep blue, yellow, white, light blue) with centered content. Each band has an organic curved top or bottom edge, and mascots and photo cut-outs overlap the band boundaries. Category icons sit in a five-up row on white with centered labels. Spacing steps recorded: 2, 5, 10, 12, 15, 24, 25, 30, 32 and 35px. The page uses WordPress spacing presets (--wp--preset--spacing--30 0.67rem, --50 1.5rem, --60 2.25rem, --70 3.38rem).

## Elevation & Depth

Depth is drawn with hard, un-blurred offset shadows, a sticker look: `rgb(58, 41, 85) 5px 5px 0px 2px` (purple button, 3 occurrences), `rgb(155, 113, 17) 5px 5px 0px 2px` (yellow button, 2), `rgb(6, 51, 90) 5px 5px 0px 2px` (blue button, 1). Each shadow is a darker shade of the button's own fill. Soft shadows appear rarely: `rgba(0, 0, 0, 0.3) 0px 0px 5px 0px` and `rgba(0, 0, 0, 0.2) 2px 8px 23px 3px` (once each).

## Shapes

Radii: 30px (12 occurrences), 999px (12, pills), 50% (8, circles), 15px (6, buttons), 10px (5), 3px (4), 25px (4), "30px 35px 33px 30px" (4, an irregular hand-drawn blob radius), "0px 0px 33px 33px" and 5px (once each). Buttons use 15px; containers use 30px or the irregular blob value.

## Components

- **button-primary** ("Our Products"): fill #0d62ab, text #ffffff, pslxomyim 25px/500, radius 15px, padding 15px 40px, height 55px, shadow rgb(6, 51, 90) 5px 5px 0px 2px.
- **button-secondary** ("Check It Out!"): fill #febe2c, text #251f1b, 30px/500, radius 15px, padding 15px 40px, height 60px, shadow rgb(155, 113, 17) 5px 5px 0px 2px.
- **Purple button** ("All News & Updates"): fill #7758a8, white text, 25px/400, radius 15px, padding 15px 40px, height 55px, shadow rgb(58, 41, 85) 5px 5px 0px 2px.
- **nav-link**: Mitr 18px/300 in #333333; the measured link box is 105px tall.
- **card**: white, 30px padding.
- **Text link**: "Learn More", underlined, white on blue.
Hover states were not measured (the hover list is empty).

## Design System Architecture

No public design system or brand guideline link was found on the home page (searched the home markup for brand, design, press and guideline links). The page exposes WordPress preset variables and loads an icon font named "eicons": :root has 51 custom properties, almost all WordPress presets (`--wp--preset--color--*`, `--wp--preset--font-size--large: 36px`, `--wp--preset--font-size--small: 13px`, `--wp--preset--shadow--*`, `--wp--preset--spacing--*`) plus Swiper (`--swiper-navigation-size: 44px`). There are no brand-named variables, so the brand colors above come from computed styles on the rendered page.

## Do's and Don'ts

- Do alternate blue #0d62ab, yellow #febe2c and white bands with wave-shaped edges.
- Do give each button a hard 5px 5px offset shadow in a darker shade of its fill.
- Do set display headlines in pslxomyim-Bold at tight leading and body in Mitr 300.
- Do keep mascots and photo cut-outs overlapping band edges.
- Don't use WordPress preset colors or Swiper blue as brand colors.
- Don't blur the button shadows; the brand shadows have 0px blur.
- Don't document the consent popup, cookie bar or scrim as brand UI.

## Responsive Behavior

The extraction's mobile pass recorded: the display headline at 85px / 400 / 59.5px (100px / 75px on desktop); the "Our Products" button at 22px/500 with padding 12px 35px, height 46px and radius 15px (25px, 15px 40px, 55px on desktop); mobile font sizes by character weight of 17px (5418), 18px (972), 20px (399), 15px (374), 28px (330), 22px (283), 50px (81), 55px (70), 30px (69) and 35px (47). The mobile viewport width, menu pattern and column counts were not recorded: not measured.

## Iteration Guide

1. Start with white, #251f1b text and the #0d62ab blue button; use #febe2c for waves and secondary actions.
2. Draw band edges as waves, not straight lines.
3. Keep buttons at 15px radius with the offset-shadow pattern: shadow color is a darker shade of the fill.
4. Use mascots and illustrated cut-outs rather than icons for emphasis.
5. Dark mode is not measured.
6. Run `node web/scripts/verify-designs.mjs --slug=minor-smart-kids` after edits.
