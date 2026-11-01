---
version: alpha
name: Areeya Property
category: "Thai Brands"
description: "Areeya Property (areeya.co.th) developer site: DB Gill Siam X Thai type with a 45px bold heading and 20px body, #101010 ink on a warm #f6f6f3 canvas, an olive #6e7c5d search button and footer band, square 0px controls, hairline-underlined form fields and calm architectural photography of Como, Aren and Nora homes."
colors:
  canvas: "#f6f6f3"
  ink: "#101010"
  primary: "#6e7c5d"
  on-primary: "#ebebe6"
  surface-nav: "#f5f5f1"
  ink-secondary: "#282828"
  ink-bootstrap-body: "#212529"
  ink-input: "#232323"
  ink-on-dark: "#ffffff"
  border-grey: "#636363"
typography:
  display:
    fontFamily: "\"DB Gill Siam X\", sans-serif"
    fontSize: 45px
    fontWeight: 700
    lineHeight: 45px
  display-mobile:
    fontFamily: "\"DB Gill Siam X\", sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 32px
  subheading:
    fontFamily: "\"DB Gill Siam X\", sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 20px
  body:
    fontFamily: "\"DB Gill Siam X\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 22.2px
  button:
    fontFamily: "\"DB Gill Siam X\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 25px
  button-secondary:
    fontFamily: "\"DB Gill Siam X\", sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
  input:
    fontFamily: "\"DB Gill Siam X\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 18px
rounded:
  xs: 56px
  none: 0px
  pill: 9999px
spacing:
  s1: 8px
  s2: 10px
  s3: 11px
  s4: 12px
  s5: 14px
  s6: 15px
  s7: 17px
  s8: 20px
  s9: 23px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 1px 6px
    height: 78px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    padding: 12px 16px
    height: 48px
  nav:
    backgroundColor: "{colors.surface-nav}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.ink-input}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 17px 0px 4px
    height: 40px
  footer:
    backgroundColor: "{colors.surface-nav}"
    textColor: "{colors.ink-secondary}"
    rounded: "{rounded.none}"
    borderColor: "{colors.border-grey}"
---
## Overview

Areeya Property (อารียา พรอพเพอร์ตี้) is a Thai developer of single houses, village towns, townhomes, home offices and condominiums around Bangkok. The measured page is https://areeya.co.th/ (title "บ้านเดี่ยว คอนโด ทาวน์โฮม โครงการใหม่ | อารียา พรอพเพอร์ตี้"). The capture opens on a slim white header holding the handwritten-style "Areeya" logo with a small flower mark, seven navigation links (โครงการ, รู้จักอารียา, โปรโมชั่น, บล็อก, นักลงทุนสัมพันธ์, บริการ, ติดต่อเรา), a search box and a TH language selector. A split hero banner follows: a modern two-storey house in timber and brick on the left, and a sand-colored panel on the right advertising COMO PRIMO Bangna with a special price of 9.59 million baht. A thin dark strip below it shows "areeya.co.th", a slider progress line and the hotline 1797.

Below the hero sits a search form with four dropdowns (project type, location, price, lifestyle) and an olive "ค้นหา" (search) button, then property-type shortcuts (บ้าน, วิลล่าทาวน์, ทาวน์โฮม, โฮมออฟฟิศ, คอนโดมิเนียม, บ้านสั่งสร้าง), a "แบรนด์อารียา" brand-logo row (AREN², SOONTHAREEYA, THE AVA, COMO PRIMO, AREN X, COMO BOTANICA), a project card carousel with "NEW PROJECT" labels, a registration form beside a house photograph, and a deep olive band whose headline begins "AESTHETICS" (the page's own tagline is "AESTHETICS of Living"). The page is 5411px tall at 1280px width. The mood is calm, warm and editorial.

## Colors

Background areas: #f6f6f3 (5120), #f5f5f1 (4800), #ebebe6 (2965), #ffffff (1779), #6e7c5d (1024), #f3f3ef (363), #baad8c (342). Text colors: #101010 (4087), #282828 (1564), #212529 (277), #232323 (205), #ffffff (86), #ebebe6 (58), #6e7c5d (54).

- canvas #f6f6f3: a warm off-white; surface-nav #f5f5f1 for the header and footer.
- ink #101010 for headings and body; ink-secondary #282828; ink-input #232323 for form text. #212529 (ink-bootstrap-body) is the Bootstrap body color that also appears in the sheet.
- primary #6e7c5d: the olive green of the search button and the large band at the foot of the capture; on-primary #ebebe6.
- ink-on-dark #ffffff: text on the black "ลงทะเบียน" button, whose fill is #101010.
- border-grey #636363: the footer border.
- #ebebe6 (2965) also acts as a light panel, and #baad8c (342) a sand tone in the hero panel; they are measured but not tokenized.
- Bootstrap's link blue #0d6efd and the other --bs-* variables (the stylesheet carries 101 custom properties) are framework defaults; no brand blue is used.

The round black Messenger bubble at the right of the capture is a third-party chat control and is not documented as brand UI.

## Typography

DB Gill Siam X in regular, italic and bold, with a sans-serif fallback, plus three icon fonts (areeya-icon-facility, -image and -location). Sizes by characters: 20px (3374), 18px (1756), 28px (661), 24px (239), 14px (178), 30px (65), 45px (49).

- display: 45px bold, line-height 45px (the "แบรนด์อารียา" heading); display-mobile: 32px, weight 500, line-height 32px at the mobile pass.
- subheading: 20px, weight 600, line-height 20px.
- body: 20px, weight 400, line-height 22.2px.
- button: 24px, weight 400, line-height 25px (the search button); button-secondary: 20px, weight 500, line-height 24px (the register button).
- input: 18px, weight 400, line-height 18px.

DB Gill Siam X is a Thai companion of a humanist Gill-style Latin face. It is licensed and loaded by the site; a Thai-capable humanist sans is the substitute outside it.

## Layout

The page uses a centered container with generous side margins, bands of #f6f6f3 and #f5f5f1 separated by hairlines, and a two-column registration block (photograph left, form right). Cards are staggered in a carousel with their right end cut off to suggest scrolling. Each card has a category chip and a dark "NEW PROJECT" label over the photograph, the project name in bold, a location line with a pin icon and a price line with a coin icon. Frequent paddings: 12px (53), 8px (50), 10px (30), 28px (30), 15px (23).

## Elevation & Depth

Two shadow values appear: rgba(0, 0, 0, 0) 0px 0px 0px 9999px inset (8 elements, an invisible inset used for state changes) and rgba(0, 0, 0, 0.15) 0px 4px 12px 0px (one element). The page is essentially flat, relying on tonal bands rather than shadows.

## Shapes

Radii: 50% (5 elements) and 56px (2). Buttons, inputs and cards use 0px, so the primary and secondary buttons are square. Form inputs have only a bottom hairline and no box.

## Components

- button-primary: the olive "ค้นหา" search button, #6e7c5d fill, #ebebe6 text, 24px type, 0px radius, padding 1px 6px, height 78px.
- button-secondary: black "ลงทะเบียน" button, #101010 fill, white text at 20px weight 500, 12px 16px padding and 48px height.
- nav: #f5f5f1 bar with #101010 text at 20px.
- text-input: #232323 text at 18px, padding 17px 0px 4px, height 40px, bottom hairline only.
- Social sign-in buttons for Facebook and Google appear as white boxes with a 1px outline in the registration form.
- footer: #f5f5f1 fill, #282828 text, #636363 border.

## Design System Architecture

No public design system or brand guideline link was found on the page. The stylesheet is a Bootstrap 5 build (--bs-* variables, 101 custom properties) with additional prefixed variables for a cookie consent module (--cc-*) and a form widget (--im-*). Brand styling is layered on top: DB Gill Siam X typography, the olive #6e7c5d and a warm neutral ramp (#f6f6f3, #f5f5f1, #ebebe6, #f3f3ef). Those Bootstrap values (for example --bs-primary #0d6efd) are framework defaults, not Areeya colors.

## Do's and Don'ts

- Do keep surfaces warm and quiet: #f6f6f3 canvas, #101010 text, olive #6e7c5d as the single accent.
- Do use square buttons and underlined fields.
- Do show price and location with icons on every project card.
- Do let each brand's wordmark (AREN, COMO, NORA) carry personality while the site UI stays plain.
- Don't use Bootstrap blue for links or buttons.
- Don't present the Messenger bubble as brand UI.
- Don't round buttons; the measured CTA radius is 0px.

## Responsive Behavior

At the 390px mobile pass the H1 measured 32px, weight 500, line-height 32px against 45px bold on desktop, and body text 18px. Layout changes (menu, carousel, form columns) at mobile width were not measured.

## Iteration Guide

1. Canvas #f6f6f3, ink #101010, accent #6e7c5d.
2. Headings 45px bold DB Gill Siam X, body 20px.
3. Make the search button 78px tall and olive; the register button black and 48px tall.
4. Use bottom-hairline form fields at 40px height.
5. Alternate #f6f6f3 and #f5f5f1 bands, and close with a full-width olive band.
6. Run `node web/scripts/verify-designs.mjs --slug=areeya` after edits.

## Content and Imagery

Photography features modern, light-colored houses with timber slats, white render, garden planting and cars parked in front, all in soft daylight. The hero banner pairs a house with an advertisement in a sand tone: a spaced serif wordmark (COMO PRIMO), bold Thai headline with italic orange emphasis ("บ้านเดี่ยวหลังใหญ่ 3 ที่จอดรถ*") and a rounded red-orange price pill ("ราคาพิเศษ 9.59 ลบ. (แปลงสุดท้าย)*"). The registration section opens with "ลงทะเบียนเพื่อรับสิทธิพิเศษและส่วนลด" and offers sign-in through Facebook or Google. Subtle line-art contour patterns decorate the margins of the search and form bands. Copy is practical: starting prices ("เริ่ม 5.69 ล้าน", "เริ่ม 1.99 ล้าน"), location names (บางนา, วงแหวน, ชัยพฤกษ์) and clear labels.
