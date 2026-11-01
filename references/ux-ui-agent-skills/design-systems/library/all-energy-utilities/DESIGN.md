---
version: alpha
name: All Energy and Utilities
category: "Thai Brands"
description: "All Energy and Utilities (AE, aeu.co.th), a Thai renewable-energy and utilities group, uses plum #571731 and #4c192b surfaces, rose-gold #b58b76 accents, grey #a1a1a1 body text and Sukhumvit Set and Outfit stacks, with a 75px bold hero heading and 50px pill buttons."
colors:
  canvas: "#571731"
  page-body: "#ffffff"
  page-largest: "#4c192b"
  ink: "#a1a1a1"
  primary: "#b58b76"
  on-primary: "#571731"
  card-border: "#b58b765c"
typography:
  display:
    fontFamily: wfont_55ada2_b8756b8c61604bdbb5d9defc6d35b999, wf_b8756b8c61604bdbb5d9defc6, orig_outfit_light
    fontSize: 75.0001px
    fontWeight: 700
    lineHeight: 90.0001px
    letterSpacing: 3.75px
  display-mobile:
    fontFamily: wfont_55ada2_b8756b8c61604bdbb5d9defc6d35b999, wf_b8756b8c61604bdbb5d9defc6, orig_outfit_light
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
    letterSpacing: 2px
  subheading:
    fontFamily: wfont_33823c_140a016e5c714fdda622409ff802139f, wf_140a016e5c714fdda622409ff, orig_sukhumvitsetsemibold
    fontSize: 35.0001px
    fontWeight: 400
    lineHeight: 45.5001px
  body:
    fontFamily: wfont_9caab7_0c80b68c68a1446cb46153b6652b3423, wf_0c80b68c68a1446cb46153b66, orig_sukhumvitsetthin
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: wfont_33823c_f827d96a1c854e67b92050a82804f978, wf_f827d96a1c854e67b92050a82, orig_sukhumvitsetmedium
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  button-secondary:
    fontFamily: wfont_33823c_f827d96a1c854e67b92050a82804f978, wf_f827d96a1c854e67b92050a82, orig_sukhumvitsetmedium
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 8px
  sm: 10px
  md: 10px
  lg: 20px
  xl: 50px
  2xl: 100px
  3xl: 300px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 11px
  s8: 13px
  s9: 15px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    height: 42px
  button-secondary:
    textColor: "{colors.page-body}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xl}"
    height: 42px
    borderColor: "{colors.page-body}"
  nav:
    textColor: "{colors.primary}"
  card:
    rounded: "{rounded.sm}"
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
---

## Overview

All Energy and Utilities Public Company Limited (AE, `https://www.aeu.co.th/`, document title "หน้าหลัก | AE") presents itself in Thai as a renewable-energy and utilities group. The home page text says it was registered as a limited company on 18 September 2538 with 30 million baht of capital, converted to a public company on 11 February 2545 and approved for listing on the Stock Exchange of Thailand on 3 April 2545. Its pages list subsidiaries in utilities (water supply and related companies), renewable energy, gas and fuel stations, and other businesses.

The page is a long dark scroll (5286px tall, 787 visible elements) built from plum bands. The hero is an aerial photograph of forested hills and water under a plum tint, with the English heading "All Energy & Utilities Public Company Limited" at 75px, bold and widely tracked. Below, a plum band introduces "เกี่ยวกับบริษัท" (About the company) with a hairline rule and a "เรียนรู้เพิ่มเติม" (Learn more) arrow link, a "VISION & MISSION" band over a bright photograph of a family walking on a lakeside lawn, and a "ธุรกิจในเครือ" (Group businesses) row of photo cards. Voice is formal Thai with English labels for the vision and mission.

At capture time a black tribute pop-up with a portrait, the line "สถิตอยู่ในใจตราบนิรันดร์" and a close (X) control covers the hero. A forced re-extraction still contains it (a #000000 area of weight 466 and a #4c192b99 scrim of weight 1024 in the measurement), so those two values are the pop-up and its scrim rather than brand surfaces; the pop-up is not documented as brand UI.

## Colors

Measured background area by weight: #4c192b (5120), #571731 (4813), #4c192b99 (1024, scrim), #ffffff (996), #000000 (466, pop-up), #b58b7614 (30), #b58b76 (6). Text colours by characters: grey #a1a1a1 (2462), white (1422), rose-gold #b58b76 (676), plum #571731 (32).

- **canvas #571731**: the plum body colour; it is also the footer background and the text colour on the contact button.
- **page-largest #4c192b**: the deepest plum, the largest background area (5120).
- **page-body #ffffff**: the white-wash photo band (VISION & MISSION) and white text.
- **ink #a1a1a1**: the most-read text colour, used for long Thai paragraphs on plum.
- **primary #b58b76**: rose-gold accent: the fill of the "ติดต่อเรา" (Contact us) pill, navigation text, section titles, hairline rules and footer text; it also appears as a border colour on 12 elements.
- **on-primary #571731**: text on the rose-gold button.
- **card-border #b58b765c**: a translucent rose-gold border measured on the group-business cards.

The generator also saw the browser default link blue #0000ee on an empty anchor; it is a user-agent value and is dropped.

## Typography

The CSS font stacks are generated names with readable fallbacks, taken verbatim: `wfont_55ada2_b8756b8c…, orig_outfit_light` for the hero heading, `…orig_sukhumvitsetsemibold` for section titles and navigation, `…orig_sukhumvitsetthin` for body text, `…orig_sukhumvitsetmedium` for buttons, and `…orig_sukhumvitsettext` for footer text. The `orig_` names read outfit and sukhumvitset (thin, medium, semibold, text); the `wfont_` families are what the page loads, so the exact font files are not claimed here.

- Display: 75.0001px, weight 700, line 90.0001px, letter-spacing 3.75px (mobile 40px/48px, 2px spacing).
- Subheading: 35.0001px, weight 400, line 45.5001px, rose-gold (for example "เกี่ยวกับบริษัท").
- Body: 16px, weight 400, line 25.6px.
- Button: 16px, weight 400, line 22.4px; secondary button text 15px/21px.

Most-read sizes: 14px (2358 characters), 16px (1322), 20px (444), 15px (102), 17px (87), 12px (55). Weights: 400 (4548 characters) and 700 (44). Because the stacks are loaded site fonts, no substitute is specified; outfit and sukhumvitset are the names that appear in the CSS.

## Layout

Desktop viewport 1280px. The header is 116px tall and holds the logo (AE, "all energy & utilities"), the Thai menu (เกี่ยวกับบริษัท, ธุรกิจในเครือ, นักลงทุนสัมพันธ์, การกำกับดูแลกิจการที่ดี, งานจัดซื้อจัดจ้าง, ร่วมงานกับเรา, ติดต่อเรา) and a TH/EN switch. Content runs in full-width bands with a wide left-aligned container: two Thai text columns under the About heading, left-aligned vision and mission copy beside a large photograph, and a row of four group-business cards. Paddings measured: 10px (14), 6px (7), 15px (6), 110px (6), 7px (4), 100px (4), 110.001px (3). The spacing scale is the generated list (2px to 20px).

## Elevation & Depth

Only one shadow was measured, `rgba(169, 190, 250, 0) 3px 3px 6px 2px` (two elements), which has zero alpha and is therefore invisible. Depth is produced by tonal steps (#4c192b to #571731), translucent plum scrims over photography and thin rose-gold hairlines.

## Shapes

Radii measured: 300px (16 elements), 8px (5), 500px (4), 10px (4), `10px 10px 10px 40px` (4), `10.0001px 10.0001px 10.0001px 39.9997px` (4), 50px (2). The button and outlined link are pills at 50px; the group cards use 10px corners with a larger 40px bottom-left corner; 300px and 500px are fully round shapes. The scale in the frontmatter keeps the generated steps (8, 10, 20, 50, 100, 300px and pill).

## Components

- **Contact button:** "ติดต่อเรา", fill #b58b76, text #571731, 50px radius, 142px by 42px, 16px medium Sukhumvit Set.
- **Outlined button:** "เรียนรู้เพิ่มเติม" at 15px/21px, white text and a 1px outline, 50px radius, 42px tall.
- **Section heading with rule:** rose-gold 35px title, a thin horizontal line, and a "เรียนรู้เพิ่มเติม →" link at the right.
- **Group-business cards:** photograph on a plum card, 10px corners, translucent rose-gold border #b58b765c.
- **Header:** 116px, rose-gold 14px Sukhumvit semibold labels.
- **Footer:** plum #571731 with rose-gold text, 11.0001px; copyright line reads "© 2035 by All Energy and Utilities Public Company Limited" as published.
- The "top of page" control and the tribute pop-up are not brand components.

## Design System Architecture

No public design system or brand-guidelines page exists on the opened page (https://www.aeu.co.th/), which links only to corporate, investor, governance, procurement and career pages; the research record is therefore "none". The de-facto system is a theme generated by a site builder: root variables are named like `--wst-color-custom-17`, `--wst-color-fill-background-primary: rgb(var(--color_11))`, `--color_55: 181,139,118` (which is the rose-gold #b58b76 as an RGB triplet) and `--font_9`, and font families carry hashed `wfont_` names. Sizes in `--font_9` are written as `calc(14 * clamp(0px, 100 * 1cqw * 1, min(9999px, 9999px)) / 1280)`, an expression that divides by 1280.

## Do's and Don'ts

- Do build on plum #571731 and #4c192b with rose-gold #b58b76 as the single accent.
- Do keep Thai body copy light and grey #a1a1a1 at 16px/25.6px and headings rose-gold.
- Do use 50px pill buttons, 42px tall, with plum text on rose-gold.
- Do pair dark plum bands with a single bright photographic band.
- Don't use the browser default link blue #0000ee.
- Don't treat the black tribute pop-up or its #4c192b99 scrim as brand surfaces.
- Don't introduce additional accent hues; none were measured.

## Responsive Behavior

Mobile was measured at 390px. The hero h1 stays 700 and drops to 40px/48px with 2px letter-spacing in a 268px by 240px block; the body paragraph is 13px/20.8px in the light Sukhumvit family; the Contact pill keeps 16px/22.4px, 42px tall. The header block measures 390px by 99px and its recorded text is empty, so mobile navigation labels were not captured. Mobile size frequencies: 12px (2029 characters), 13px (1318), 18px (402), 14px (150), 20px (78). Column reflow, card layout and menu behaviour at narrow widths were not measured.

## Iteration Guide

1. Start from canvas #571731, page-largest #4c192b, ink #a1a1a1, primary #b58b76, on-primary #571731.
2. Hero: 75px bold, 3.75px tracking, white over a plum-tinted photograph.
3. Buttons: 50px radius, 42px tall; filled rose-gold with plum text, or outlined white at 15px.
4. Section header pattern: rose-gold 35px title, hairline, Learn-more arrow.
5. Cards: 10px radius with the 40px bottom-left corner variant and a translucent rose-gold border.
6. Keep the tribute pop-up out of any reproduction; measure new components before adding tokens.
