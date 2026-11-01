---
version: alpha
name: Islamic Bank of Thailand
category: "Thai Brands"
description: "Islamic Bank of Thailand (ไอแบงก์) homepage: white canvas with Islamic-bank green #018749 pill buttons (50px radius, 45px tall), a deep green #164614 audience bar, gold #e4b963 and #ffb300 sections, teal #0ec1ac band, and the self-hosted Sukhumvit Tadmai Thai faces at 16px body and 50px display."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  ink-black: "#000000"
  primary: "#018749"
  on-primary: "#ffffff"
  accent-gold: "#ffb300"
  surface-gold: "#e4b963"
  surface-teal: "#0ec1ac"
  surface-green-deep: "#164614"
  ink-green-deep: "#17471a"
  hairline: "#e0e0e0"
  text-input-border: "#cdd4d6"
typography:
  display:
    fontFamily: sukhumvittadmaibold
    fontSize: 50px
    fontWeight: 500
    lineHeight: 55px
  heading:
    fontFamily: sukhumvittadmaibold
    fontSize: 30px
    fontWeight: 500
    lineHeight: 50px
  body:
    fontFamily: sukhumvittadmaiultralight
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25px
  button:
    fontFamily: sukhumvittadmaibold
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 5px
  md: 30px
  lg: 40px
  xl: 50px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 15px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 10px
    height: 45px
    borderColor: "{colors.primary}"
  button-gold:
    backgroundColor: "{colors.accent-gold}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 10px
    height: 45px
    borderColor: "{colors.accent-gold}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 15px 50px 10px 20px
    height: 60px
    borderColor: "{colors.text-input-border}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

The Islamic Bank of Thailand site (https://www.ibank.co.th/, which resolves to the Thai-language home page at /th) presents itself as a warm, optimistic, family-oriented bank. The capture shows a deep-green audience bar ("ลูกค้าบุคคล", "ลูกค้าธุรกิจ", "ผู้ถือหุ้น") under a white top bar, a hero promotion with a headline of a 3 million baht loan limit and a 5.75% starting rate, a row of dated promotion cards, a "ผลิตภัณฑ์และบริการ" block with a vertical stack of pill-shaped category buttons, and two large message bands, one gold and one teal, with a round photograph or an Islamic geometric tile pattern.

Colour is generous but organised. Green #018749 is the action colour and the 420-character text colour for links and headings; deep green #164614 fills the audience bar; gold (#e4b963 as a large section fill and #ffb300 for buttons) supplies warmth; teal #0ec1ac fills a lower message band. Photography is of friendly, well-dressed Thai people, including an older couple, a young professional and a family house motif, and a repeated sweeping curved gold/white shape behind the promotions. A LINE chat button and a scroll-to-top button float at the right edge of the capture and are utilities, not brand components.

A cookie consent block (`content-cookies2f`) was hidden before measurement and is not part of the design description.

## Colors

All values are measured from the live page (background-by-area, text-by-characters, border colours and the CTA candidates).

- **canvas #ffffff** is the dominant background by area; **ink #333333** is the most-read text (about 2,700 characters); **ink-black #000000** carries about 580 characters of headings.
- **primary #018749** is the green of the "+ อ่านรายละเอียด" (read more) buttons and the "คำนวณสินเชื่อ" (calculate loan) button, with white text; it also coloured 420 text characters and about 250 units of background area. It was set as primary in place of the first detected candidate, the gold button, because the green button is the more widespread action and matches the logo and headings in the capture.
- **accent-gold #ffb300** is the fill of the gold buttons ("+ อ่านรายละเอียด" on gold bands and the "ล้างข้อมูล" clear button). On hover the language link "TH" changes from green to this gold.
- **surface-gold #e4b963** is the large gold section background (about 486 area units), with a lighter #f5c768 used on category buttons.
- **surface-teal #0ec1ac** is the teal band fill (about 202 area units).
- **surface-green-deep #164614** is the audience-bar fill; **ink-green-deep #17471a** is a deep green text colour (46 characters).
- **hairline #e0e0e0** and **text-input-border #cdd4d6** are the divider and form-field borders.

The extraction also saw Bootstrap 3's default link blue #337ab7; it is a framework default and was dropped.

## Typography

Two self-hosted Thai faces are used: **sukhumvittadmaibold** for headings, buttons and labels (about 1,900 characters) and **sukhumvittadmaiultralight** for body and navigation (about 2,200 characters). They are loaded as web fonts (weights bold and 300). The roles measured are display 50px / 55px line-height, heading 30px / 50px, body 16px / 25px and button 16px / 24px. The most used size by character count is 16px (about 2,000 characters), then 18px (about 1,000) and 22px (about 640); 34px (83 characters) is used for the promotion numerals.

The weight contrast is made by switching the font family, not by CSS weight, which is why the numeric weight stays 400 or 500 throughout. There is no Latin-only fallback listed, so Latin strings take the Thai face's Latin glyphs. Use a Thai-capable sans such as Noto Sans Thai as a substitute if Sukhumvit Tadmai is unavailable.

## Layout

The page uses a Bootstrap-era layout: a full-width top bar with a left cluster of drop-down links (about the bank, products and services, promotions), search, language and a text-size/contrast control group, and the logo at right; then the full-width green audience bar; then the hero slider with promotion cards. The services block places a 10-item vertical list of pill buttons at the left (Credit, Deposits, Takaful insurance, Trade Finance, other services, Zakat, asset sales, projects/campaigns, government policy projects, business-recovery loans) next to staggered portrait photo cards. Below that, alternating full-width bands (gold, then teal) hold a circular image and a message with a pill button. Measured paddings include 15px (57 uses), 30px (17), 10px and 20px. The look is airy with soft curves rather than strict grids.

## Elevation & Depth

Shadows are soft and sparse: `rgba(0, 0, 0, 0.2) 0px 3px 6px 0px` (16 uses), a faint inset `rgba(0, 0, 0, 0.1) 0px 1px 2px 0px inset` and `rgba(0, 0, 0, 0.6) 0px 3px 6px 0px` once. Depth also comes from the layered curved gold/white background shapes behind the promotion row, and from the photo cards overlapping the vertical pill list. The page has no hard borders beyond the 1px #e0e0e0 and field borders.

## Shapes

Roundness is the signature. Buttons and category pills use 50px (14 uses); form fields use 40px; the select control measured 40px; 30px appears on mid-size items; 4px and 5px on small elements; 100% (17 uses) and 50% on circles such as the portrait image and the "C" contrast icons. The tokens map these to xs 4, sm 5, md 30, lg 40, xl 50 and pill 9999. The result is friendly and pill-forward, with no sharp-cornered buttons.

## Components

- **Primary button**: green #018749, white text, 16px sukhumvittadmaibold, 50px radius, 10px padding, 45px tall; the measured width was 170px for the read-more variant and 140px for "คำนวณสินเชื่อ".
- **Gold button**: the same geometry in #ffb300 with white text (read-more on green sections) or #333333 text (clear action).
- **Category pill**: white fill, 1px #e0e0e0 border, 50px radius, 68px tall; the active pill (สินเชื่อ) fills with the lighter gold #f5c768, and hovering a pill shifts the white to a pale cream (#fefaf1).
- **Select input**: white, 1px #cdd4d6 border, 40px radius, 60px tall, padding 15px 50px 10px 20px.
- **Audience bar**: deep-green strip with three bold white labels.
- **Promotion card**: image on top, bold title, dated caption in green.
- **Language link "TH"**: green text and outline that turns gold on hover.

## Design System Architecture

No public design system or brand guideline was found on the pages opened. The site is built on Bootstrap (the homepage links `/templates/css/bootstrap.min.css`) with page-specific sheets (`global.css`, `home.css`, `insitepage01.css` to `insitepage03.css`, `responsive.css`) and Font Awesome. No CSS custom properties were measured (zero root variables), so values are literals in the template stylesheets. The de-facto system is: one green, one gold, one teal, two Sukhumvit Tadmai faces, and a pill-everything radius rule.

## Do's and Don'ts

- Do use green #018749 for primary actions and gold for secondary emphasis.
- Do make buttons and category chips full pills (50px) at 45px tall.
- Do alternate white, gold and teal bands with a circular image.
- Do keep Thai copy warm and inclusive, as in the "เราเป็นธนาคารเดียว..." band.
- Don't use Bootstrap 3 blue #337ab7 for links or accents.
- Don't use sharp-cornered buttons.
- Don't present the LINE chat or back-to-top controls as brand UI.
- Don't set Thai text in a Latin fallback font.

## Responsive Behavior

The stylesheet list includes a dedicated `responsive.css`, and the mobile extraction keeps the display role at 50px and the body at 16px. Beyond those two values nothing else was recorded for small screens, so they are left undocumented. The 45px button height and 60px input height are desktop measurements.

## Iteration Guide

1. Set the canvas to white, text to #333333, and load the two Sukhumvit Tadmai faces (or a Thai substitute).
2. Use green #018749 for buttons and links with white text, 50px radius, 45px height.
3. Add gold #e4b963 and teal #0ec1ac as full-width message bands with a circular image.
4. Use a #164614 audience bar under the header.
5. Keep shadows to the 0 3px 6px 20% black spec.
6. Re-measure after campaign changes; hero banners change often but the system tokens do not.
