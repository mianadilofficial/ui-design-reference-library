---
version: alpha
name: "Panus Assembly"
category: "Thai Brands"
description: "Panus Assembly (พนัส แอสเซมบลีย์) Thai truck-body maker site measured live: lime #8ec33d action tabs, deep blues #013b63 and #025086, #333333 body text, thaisans_neue Thai fonts at 20px, dark navy #001422 footer and single-corner 20px tab rounding."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#8ec33d"
  on-primary: "#ffffff"
  surface-navy: "#001422"
  surface-warm: "#f8f4f5"
  ink-body: "#333333"
  ink-black: "#111111"
  ink-blue-deep: "#013b63"
  ink-blue: "#025086"
  hairline: "#01446c"
  button-secondary-bg: "#025fa1"
  link-bg: "#ffffff80"
typography:
  display:
    fontFamily: thaisans_neuesemi_bold
    fontSize: 24px
    fontWeight: 400
    lineHeight: 55px
    textTransform: uppercase
  display-mobile:
    fontFamily: thaisans_neuebold
    fontSize: 29.44px
    fontWeight: 400
    lineHeight: 29.44px
    textTransform: uppercase
  heading:
    fontFamily: thaisans_neuesemi_bold
    fontSize: 28px
    fontWeight: 400
    lineHeight: 28px
  body:
    fontFamily: thaisans_neueregular
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: thaisans_neuelight
    fontSize: 21.6px
    fontWeight: 700
  nav:
    fontFamily: thaisans_neuelight
    fontSize: 16px
    fontWeight: 400
  link:
    fontFamily: thai_sans_literegular
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: thaisans_neuelight
    fontSize: 28px
    fontWeight: 400
    lineHeight: 28px
  input:
    fontFamily: thaisans_neuelight
    fontSize: 24px
    fontWeight: 400
    lineHeight: 55px
rounded:
  xs: 5px
  sm: 7px
  md: 65px
  lg: 100px
  none: 0px
  pill: 9999px
spacing:
  s1: 5px
  s2: 7px
  s3: 8px
  s4: 10px
  s5: 20px
  s6: 25.59px
  s7: 35px
  s8: 40px
  s9: 50px
  s10: 76.8px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px
    height: 43px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 5px 25px 5px 35px
    height: 38px
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.ink-blue-deep}"
    typography: "{typography.link}"
    rounded: "{rounded.lg}"
    padding: 10px 0px 0px
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 50px 0px 10px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    height: 55px
    transform: matrix(1, 0, 0, 1, 100, 0)
  footer:
    backgroundColor: "{colors.surface-navy}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, 0, 70)
---

# Panus Assembly

## Overview

www.panus.co.th/home is the Thai-language site of Panus Assembly (พนัส แอสเซมบลีย์), a manufacturer of truck bodies, trailers, dump trucks and semi-trailers, with the document title "PANUS › พนัส ผู้ผลิตรถพ่วง รถดัมพ์ รถกึ่งพ่วง รถเทรลเลอร์ ที่ใหญ่ติดอันดับในประเทศไทย". The measured view (1280px wide, scroll height 800px) is a full-screen hero slider: a pale grey-white studio floor with a large photographed blue flatbed trailer on the right, bold blue and grey English headline text ("OVER 50 YEARS OF LEADERSHIP IN LOGISTIC SOLUTION", "FLAT BED NEW MODEL" in outlined and italic type), a column of eight numbered round slide indicators on the left, the blue PANUS wordmark with a small green square top left, a transparent navigation row (PANUS, ผลิตภัณฑ์ products, บริการ services, ข่าวประชาสัมพันธ์ news and PR, ร่วมงานกับเรา careers, ติดต่อเรา contact), round search and "TH" language buttons in deep blue, and a scroll hint "เลื่อนลง" in a half-circle tab at the bottom centre. A PDPA cookie consent bar overlays the bottom of the initial capture; it is not part of the brand UI and is not documented as such. Per the fetched page copy the lower sections are intro, services, innovation, CSR, "ความภูมิใจของพนัส" (Panus's pride: 100,000 vehicles produced, 51 years, 2,400 Kaizen improvements, 220 playgrounds donated) and customer testimonials. The root URL was measured at its final address /home, so this DESIGN.md names the site as measured.

## Colors

Backgrounds by area: `#8ec33d` (lime green, weight 95), `#001422` (very dark navy, 90, the footer), `#f8f4f5` (19, a warm near-white), `#ffffff80` (15, translucent white), `#00233b`, `#02598d`, `#013b63`, `#025fa1`. Text colors by characters: `#ffffff` (1749), `#333333` (1529, body text on light areas), `#111111` (498), `#013b63` (92, deep blue for links and tab labels), `#025086` (73, headline blue), `#8ec33d` (38) and `#01446c` (8). The primary action is the green `#8ec33d` ("PANUS THAILAND" tab, white text); a second tab uses `#013b63` ("PANUS WORLD") and the "Remark" button uses `#025fa1`. The hairline is `#01446c`. The canvas token is `#000000`, the value the generator measured for the page background; the hero in the final capture is pale, so treat `#000000` as the measured page background behind the slider rather than the visible hero tone. The generated navigation-link color `#0000ee` is a browser default and is dropped from the tokens.

## Typography

A family of local web fonts named thaisans_neue: `thaisans_neueregular` (3333 characters, body), `thaisans_neuesemi_bold` (214, h1 and h2), `thaisans_neuebold` (187), `thaisans_neuelight` (151, buttons and navigation) and `thai_sans_literegular` (102, the scroll hint and footer), with `thaisans_neueextra_bold` also in the CSS. All are Thai-capable display families (the names are the site's own font-face names); no substitute is declared. Sizes by characters: 20px (2328), 24px (1287), 21.6px (122), 28px (61), 66.4px (47), 69.6px (30), 17.6px, 50.4px, 16px, 76px, 48px and 72px. Weights: 400 (3853 characters) and 700 (134). Roles: display (h1 "PANUS") 24px / 55px uppercase in semibold; heading (h2 "ผู้นำด้านเทคโนโลยีและนวัตกรรม") 28px / 28px; body 20px / 20px; button text 21.6px at 700; nav 16px light; link (scroll hint) 24px / 24px; secondary button text 28px / 28px; input 24px / 55px. On mobile the display role measured 29.44px / 29.44px in bold uppercase.

## Layout

The hero is a full-width slider with fixed overlays: logo at the left, navigation and the two circular buttons at the right, slide numbers 1 to 8 in a vertical rail at the left, scroll hint at the bottom centre. The business-line list sits on the right as five horizontal green bars (DOMESTIC, INTERNATIONAL, AVIATION, INNOVATION/DEFENSE, SERVICE & PART) each led by a white truck pictogram and cut to the right edge with unequal left offsets. Measured paddings: 10px (9 elements), 20px (8), 128px; spacing tokens 5, 7, 8, 10, 20, 25.59, 35, 40, 50 and 76.8px. The nav has 50px top and 10px bottom padding. The footer is 70px tall with a `#001422` fill and white copyright text "Copyright 2026, Panus Assembly Company Limited".

## Elevation & Depth

No box shadows were measured in the final extraction (an earlier pass recorded one `rgba(0, 0, 0, 0.25) 0px 2px 5px 0px`, which is no longer present). Depth comes from the product photography, the translucent white half-circle tab (`#ffffff80`) and the overlapping slide imagery.

## Shapes

Mixed: 50% (20 elements, circular slide indicators and the search and language buttons), asymmetric corners such as `0px 10px` (3), `100px 100px 0px 0px` (the scroll-hint half circle), `0px 20px 0px 0px` and `0px 0px 0px 20px` (the green and blue tabs), 65px (2), 5px (1) and `7px 0px` (1). The primary tab button has 0 20px 0 0 rounding on the tab and rectangular body; the tokens keep `none` 0px, `xs` 5px, `sm` 7px, `md` 65px, `lg` 100px, `pill` 9999px.

## Components

- **Primary tab ("PANUS THAILAND")**: `#8ec33d` fill, white text, thaisans_neuelight 21.6px at 700, 43px tall, padding 8px, top-right corner rounded 20px.
- **Second tab ("PANUS WORLD")**: `#013b63` fill, 43px tall, bottom-left corner rounded 20px.
- **Secondary button ("Remark")**: `#025fa1` fill, white text, 28px / 28px, radius 5px, padding 5px 25px 5px 35px, 38px tall.
- **Scroll hint**: translucent white `#ffffff80` half-circle, `#013b63` text at 24px, 90px tall, rounded top 100px.
- **Business-line bars**: green bars with white uppercase labels and a truck icon at left.
- **Navigation**: white 16px light type on a transparent bar; circular deep-blue search and language buttons.
- **Footer**: `#001422`, white text, 70px tall.

## Design System Architecture

No public design system or brand guideline was found: the WebFetch of https://www.panus.co.th/home listed none and only referenced theme asset paths (`/public/themes/panus/assets/img/...`), and no search was run. The extractor found no CSS custom properties at :root. The de-facto system is a theme folder of assets, a thaisans_neue font family in several weights, a two-green and two-blue palette (`#8ec33d`, `#013b63`, `#025086`, `#025fa1`) with a dark navy footer, and a set of tab shapes with one rounded corner.

## Do's and Don'ts

- Do use lime green `#8ec33d` for the main action tab and deep blues `#013b63`, `#025086` and `#025fa1` for secondary elements and headlines.
- Do set body text in thaisans_neueregular 20px, in `#333333` on light backgrounds.
- Do use asymmetric single-corner rounding for tabs and half-circle shapes for the scroll hint.
- Do use white text on green and navy panels.
- Don't use the browser-default link color `#0000ee`.
- Don't document the PDPA cookie bar or its blue and green buttons as brand UI.
- Don't set Thai text in a Latin-only face.

## Responsive Behavior

Measured at 390px: the display role was 29.44px / 29.44px in thaisans_neuebold uppercase, and the sizes by characters were 20px (2188), 24px (1157), 16px, 44.8px, 21.12px, 21.6px, 29.44px, 16.8px, 17.6px, 48px, 37.6px and 36px. The PANUS THAILAND tab measured 16.8px at 700 with 8px padding. Layout and navigation collapse were not measured.

## Iteration Guide

1. Light photographic hero, white text on green or navy blocks, `#333333` text on light.
2. thaisans_neue family: regular 20px for text, semibold 24 to 28px for headings, light 16px for navigation.
3. Action tabs in `#8ec33d` with one rounded corner (20px); circular controls at 50%.
4. Footer `#001422` with white 20px text.
5. Verify any colour against `web/data/extracted/panus-assembly.json`.
