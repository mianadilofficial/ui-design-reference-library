---
version: alpha
name: Seacon Development
category: "Thai Brands"
description: "Seacon Development (seacon.co.th, Thai: ซีคอน รับสร้างบ้าน) custom home builder site: Prompt type at 32px light headings and 14px body, navy #1f3765 ink and #1d2a4e bands on a #d4d4d4 canvas, a #ed1c25 red accent, pill-rounded 100px search field, soft navy shadows and large house-render imagery."
colors:
  canvas: "#d4d4d4"
  ink: "#1f3765"
  primary: "#ed1c25"
  surface-navy: "#1d2a4e"
  surface-white: "#ffffff"
  surface-navy-deep: "#192a51"
  ink-grey: "#333333"
  ink-near-black: "#1c242a"
  nav-bg: "#f8f8f8"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 32px
    fontWeight: 300
    lineHeight: 35.2px
  display-mobile:
    fontFamily: Prompt, sans-serif
    fontSize: 24px
    fontWeight: 300
    lineHeight: 34.2857px
  body:
    fontFamily: Prompt, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  input:
    fontFamily: Prompt, sans-serif
    fontSize: 18px
    fontWeight: 200
    lineHeight: 24px
rounded:
  xs: 25px
  sm: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 10px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 30px
  s9: 40px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.surface-navy-deep}"
    boxShadow: rgba(0, 0, 0, 0.75) 0px 1px 10px 2px
  nav-link:
    textColor: "{colors.surface-navy-deep}"
    typography: "{typography.body}"
    padding: 15px 10px
  text-input:
    textColor: "{colors.surface-white}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 10px 16px
    height: 46px
    borderColor: "{colors.surface-white}"
  footer:
    backgroundColor: "{colors.surface-navy}"
    textColor: "{colors.surface-white}"
---
## Overview

Seacon (ซีคอน) is a Thai custom home construction company ("รับสร้างบ้าน", build-to-order houses), and the measured page is https://www.seacon.co.th/ with the title "รับสร้างบ้าน ซีคอน สร้างได้อย่างที่ฝัน สร้างบ้านกับซีคอน" (Seacon house building, build it as you dream). It is a catalogue of house designs rather than of finished projects. The capture shows a white header bar with the blue S-shaped "SEACON" logo and navigation links in navy (นวัตกรรมสร้างบ้านครบวงจร, แบบบ้าน, ผลงานบ้านของซีคอน, เคล็ดลับของคนมีบ้าน, ซีคอนอัพเดท, สิทธิพิเศษ, รู้จักซีคอน, คุยกับซีคอน) with an "E-catalog" link in red at the end. A large banner announces six new single-storey designs ("6 แบบใหม่ แบบบ้านชั้นเดียว", "Your Home : ปลูกเรือน") over a render of a grey-roofed bungalow with two cars.

Below the banner are two full-width navy title bars, "แบบบ้าน" (house designs) and "ซีคอน อัพเดท" (Seacon update). The designs section pairs a rounded search field (ค้นหาแบบบ้าน) with a grid of five house-render cards (บ้านใหม่ล่าสุด, บ้านยอดนิยม, and three family-size groups for large, medium and small families). The update section holds a row of article and promotion cards, and the footer is a navy band with the company name, address, contact and five social icons. The page is 2215px tall at 1280px width. The tone is helpful and practical, with a lot of plain Thai text on a light grey ground.

## Colors

Background areas: #1d2a4e (284), #ffffff (250), #192a51 (129), #f8f8f8 (80), #17223e (42), #f1f2f6 (9), #333333 (3). Text colors: #1f3765 (665 characters), #333333 (198), #ffffff (193), #192a51 (110), #1c242a (24), #ed1c25 (9).

- canvas #d4d4d4: the grey page background that frames the white cards and navy bars (the extractor's canvas pick, confirmed on the capture pixels).
- ink #1f3765: the main navy text color (665 characters); surface-navy #1d2a4e for the footer; surface-navy-deep #192a51 for the title bars, navigation text and search field; #17223e is a darker navy band fill (42), measured and not tokenized.
- primary #ed1c25: a red used for the "E-catalog" link and the "6 แบบใหม่" badge in the banner artwork. It is only 9 characters of text, so it is a minor accent, and no filled CTA was detected.
- surface-white #ffffff: card backgrounds, and the text on navy bars; nav-bg #f8f8f8 for the header bar.
- ink-grey #333333 and ink-near-black #1c242a for small text.

A cookie bar (cookie-law-info-bar) was hidden by the extractor and the round dark chat button at the lower right with the "ติดต่อเราที่นี่ได้เลยค่ะ" (contact us here) speech bubble is an overlay control; neither is documented as brand UI.

## Typography

Prompt, a Thai and Latin family, loaded in weights 200, 300, 400, 500 and 700, plus FontAwesome and Glyphicons Halflings (a Bootstrap 3 icon font). Sizes by characters: 14px (928), 18px (70), 24px (58), 9px (58), 16px (55), 32px (19).

- display: Prompt 32px, weight 300, line-height 35.2px (the "แบบบ้าน" title bar, white on navy); display-mobile: 24px, weight 300, line-height 34.2857px at the 390px mobile pass.
- body: 14px, weight 400, line-height 20px (nav links and card text).
- input: 18px, weight 200, line-height 24px (the search field, white text on navy).

Light weights for titles on dark bars and a small 14px body give the page an airy look. Prompt is an open-source family on Google Fonts, so no substitute is needed.

## Layout

The page sits inside a centered container on a #d4d4d4 background with a faint white map-like watermark pattern visible at the edges of the capture. Sections are separated by full-width navy title bars (the 55px-tall "แบบบ้าน" bar with a lighter blue edge block at the right). House cards use a two-over-three grid: two large cards in the first row, three smaller family-size cards in the second, each card a render with a centered caption (title and "ดูเพิ่มเติม" link with a chevron) at the top of the image. The footer holds company name, address (107-115 ถนนสี่พระยา บางรัก กรุงเทพฯ 10500 per the page), email, phone 1391 and a fax number. Paddings: 15px (44), 10px (26), 5px (13), 20px (2), 16px (2).

## Elevation & Depth

Four shadow values were measured, each on one element: rgba(0, 0, 0, 0.75) 0px 1px 10px 2px (the header bar), rgb(25, 42, 81) -3px 3px 10px 0px (a navy offset shadow), rgba(0, 0, 0, 0.7) 0px 0px 10px 0px, and rgba(51, 51, 51, 0.19) 0px 0px 0px 6.50496px (a ring). The header carries a strong shadow that separates it from the banner; elsewhere depth is mostly flat color.

## Shapes

Radii measured: 1000px, 100px 0px 0px 100px and 0px 100px 100px 0px (halves of the rounded search bar), 50% and 25px, each on one element. Tokens: xs 25px, sm 100px and pill 9999px. The search field and a few controls are pills; cards, bars and images are rectangular.

## Components

- nav: #f8f8f8 header bar with a rgba(0, 0, 0, 0.75) 0px 1px 10px 2px shadow; nav-link in #192a51 at 14px with 15px 10px padding and an underline on hover.
- text-input (search): navy fill, white 18px weight 200 text, 100px radius, padding 10px 16px, height 46px, with a white border and a magnifier icon.
- Title bar: full-width navy with centered white 32px light text and a lighter-blue block at the right end.
- House card: render with a centered translucent caption and a "ดูเพิ่มเติม" chevron link.
- Article card: white card with image, two-line title and an "อ่านต่อ" underlined link.
- footer: #1d2a4e with white text and circular social icons (Facebook, Twitter, LINE, Instagram, YouTube).

## Design System Architecture

No public design system or brand guideline link was found, and the extraction found no custom properties (0 root variables). The page uses Bootstrap 3-era assets (Glyphicons Halflings) with brand-specific colors: three related navies, red as accent, grey canvas. The de-facto system is a navy ramp (#1f3765, #1d2a4e, #192a51, #17223e) with a single red.

## Do's and Don'ts

- Do use navy bars with white light-weight titles to separate sections.
- Do keep the canvas grey (#d4d4d4) and cards white.
- Do use red #ed1c25 sparingly, for catalogue and "new" markers.
- Do use pill shapes for the search field.
- Don't present the cookie bar or the chat bubble as brand UI.
- Don't introduce additional hues; the interface chrome uses navy, white, grey and red only.
- Don't use heavy weights for the titles; the display is weight 300.

## Responsive Behavior

At the 390px mobile pass the H1 measured 24px, weight 300, line-height 34.2857px against 32px with 35.2px on desktop, and body text 14px. Other mobile layout behavior was not measured.

## Iteration Guide

1. Grey #d4d4d4 canvas with white cards and navy #1d2a4e bands.
2. Navy #1f3765 for text; red #ed1c25 only as an accent.
3. Prompt at 32px light for title bars and 14px for body.
4. Make a 46px pill search field with a 100px radius.
5. Present each house design as a large render with a short caption.
6. Run `node web/scripts/verify-designs.mjs --slug=seacon` after edits.

## Content and Imagery

Imagery is computer-rendered house exteriors in landscaped lots under blue skies and twilight, in styles from modern Thai tropical to European chateau. The banner overlays chunky white Thai type with a dark outline and a red badge ("6 แบบใหม่"); the page also features series names such as Sabuy Series and Chateau Series and testimonial or review articles in the Seacon Update section (for example a story about building a house for 1.9 million baht). Copy is direct and service-minded ("ให้ซีคอน ช่วยคุณค้นหาแบบบ้านที่ตรงตามความต้องการอย่างแท้จริง", let Seacon help you find the house design that truly fits your needs), followed by a plain keyword line of services at the bottom of the page.
