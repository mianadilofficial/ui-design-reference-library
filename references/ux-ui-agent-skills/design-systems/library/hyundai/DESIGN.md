---
version: alpha
name: Hyundai Mobility Thailand
category: "Automotive"
description: "Hyundai Mobility Thailand (hyundai.com/th/th, the Thai-language Hyundai site) measured: white and warm #f6f3f2 surfaces, Hyundai navy #002c5f square-cornered buttons (50px high), HyundaiRegular/HyundaiMedium with KanitRegular Thai fallback, 58px/71px headings, a #1c1b1b footer and a navy dealer-locator panel."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#002c5f"
  on-primary: "#ffffff"
  surface-warm: "#f6f3f2"
  surface-stone: "#e5e3df"
  ink-grey: "#999999"
  ink-secondary: "#767676"
  ink-footer: "#c2c2c2"
  ink-muted: "#666666"
  hairline: "#b7b7b7"
  footer-bg: "#1c1b1b"
typography:
  display:
    fontFamily: HyundaiRegular, KanitRegular
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
  display-mobile:
    fontFamily: HyundaiRegular, KanitRegular
    fontSize: 28px
    fontWeight: 400
    lineHeight: 28px
  heading:
    fontFamily: HyundaiMedium, KanitMedium
    fontSize: 58px
    fontWeight: 400
    lineHeight: 71px
    letterSpacing: 0.5px
  subheading:
    fontFamily: HyundaiMedium, KanitMedium
    fontSize: 44px
    fontWeight: 400
    lineHeight: 54px
    letterSpacing: 0.88px
  body:
    fontFamily: HyundaiRegular, KanitRegular
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: 0.24px
  button:
    fontFamily: HyundaiHRegular, KanitRegular
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  input:
    fontFamily: HyundaiHRegular, KanitRegular
    fontSize: 14px
    fontWeight: 400
    lineHeight: 44px
rounded:
  xs: 2px
  sm: 12px
  none: 0px
  pill: 9999px
spacing:
  s1: 6px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 17px
  s7: 20px
  s8: 25px
  s9: 30px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 15px
    height: 50px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    boxShadow: rgba(216, 209, 200, 0.7) 0px 1px 3px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 11px 20px 11px 50px
    height: 44px
    borderColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink-footer}"
    rounded: "{rounded.none}"
    padding: 24px 0px
---

## Overview

The measured page is the Thai-language Hyundai site (https://www.hyundai.com/th/th), titled "Hyundai Mobility Thailand - รถยนต์ SUVs, MPVs, รถยนต์ไฟฟ้า" (cars, SUVs, MPVs, electric cars). The home page is a modular showroom: a campaign hero carousel with a white 58px headline over vehicle photography, a "รุ่นรถ" (models) section with filter tabs and model cards, a "ค้นหาผู้จำหน่าย" (find a dealer) section that pairs a navy list panel with a Google map, a "ข่าว" (news) carousel with a "โหลดเพิ่มเติม" (load more) button, two large photo tiles "Cl!ck to Buy" and "IONIQ Lab", and a dark footer carrying legal links and a FIFA mark.

Navigation labels are mixed Thai and English: ค้นหารถ (find a car), IONIQ, Cl!ck to Buy, เลือกรถ (choose a car), บริการ (service), ความเป็นมาของฮุนได (about Hyundai) and My Garage, with utility icons at right (compare, account, language, location, share, search). A secondary link reads "Be a Hyundai Dealer". The voice is functional: model names with a model year, a price in baht ("795,000 บาท", "starting MSRP") and two actions per car, "ดูเพิ่มเติม" (see more) and "คลิกเพื่อซื้อ" (click to buy).

The first capture contained a promotional dialog (The new STARIA Hybrid, a "ลงทะเบียนทดลองขับ" button, a "Do not open for a day" checkbox) and a cookie banner. The page was re-measured; neither of those is brand UI and neither is documented below.

## Colors

- **Canvas** `#ffffff`, with the largest area fill being a warm off-white `#f6f3f2` (3297 area units) and a stone grey `#e5e3df` (912).
- **Primary** `#002c5f`, Hyundai navy (654 area units). It fills the main buttons ("ทั้งหมด", the news "โหลดเพิ่มเติม" button) with white (`#ffffff`) labels, and the dealer-locator list panel.
- **Ink** `#000000` for headings and body on white (2345 characters); white text (3579 characters) over photography and navy.
- **Greys**: `#999999` (485 characters), `#767676` (310), `#c2c2c2` (122, footer text), `#666666` (64), `#b3b3b3` and `#565656` for small amounts.
- **Footer** `#1c1b1b`.
- **Borders**: `#b7b7b7` (26 elements, outlined buttons and cards), `#999999` (15), `#dddddd`, `#d9d9d9` (the "Be a Hyundai Dealer" outline), `#ffffff` on the search field, and a single teal `#00aad2` border, which is the only chromatic non-navy value and appears with the active tab underline in the capture.
- Link colour is black; no browser-default blue appears in the data.

## Typography

Hyundai ships its own families: **HyundaiRegular**, **HyundaiMedium**, **HyundaiBold** and **HyundaiHRegular** (the button/input face), each paired in CSS with **KanitRegular** or **KanitMedium** as the Thai-script companion. Roboto 400 and 500 are also loaded (59 characters). By characters, HyundaiHRegular carries 3389, HyundaiMedium 2550, HyundaiRegular 980.

| Role | Measured |
|---|---|
| Display (h1 wordmark text) | HyundaiRegular 32px/32px; 28px/28px at 390px |
| Heading (h2) | HyundaiMedium 58px/71px, +0.5px; hero slide headline |
| Subheading (h3) | HyundaiMedium 44px/54px, +0.88px ("รุ่นรถ") |
| Body | HyundaiRegular 16px/28px, +0.24px; 12px/17.04px, +0.48px at 390px |
| Button | HyundaiHRegular 16px/20px |
| Input | HyundaiHRegular 14px/44px |

Sizes by characters: 14px (3444), 16px (1457), 18px (823), 20px (332), 28px (258), 58px (166) and 40px (166). Weights: 400 (6839), 700 (136), 500 (6). Emphasis is therefore achieved through the Medium and Bold font files rather than the font-weight property.

## Layout

The desktop pass is 1280px wide and 4697px tall. A white 32px-wordmark header holds the logo, seven navigation labels and a row of icon utilities; below it sits the hero carousel with arrow controls at each side and dot pagination. Model cards are three across with a left and right arrow, each card containing the year (small grey text), the name (large HyundaiMedium), price with a "starting MSRP" caption, a side-view photo and two outlined buttons. The dealer section uses a wide map with a navy panel overlapping its left edge. The footer is a dark band with legal links. Spacing values: 6, 8, 10, 12, 15, 17, 20, 25, 30 and 40px.

## Elevation & Depth

Shadows are minimal: `0 1px 4px -1px rgba(0,0,0,0.3)` (3 elements), `0 1px 8px 0 rgba(0,0,0,0.4)` (1) and a warm `0 1px 3px 0 rgba(216,209,200,0.7)` on the header (the nav bar). Page depth otherwise comes from the grey/white section alternation, photography and the navy dealer panel.

## Shapes

Hyundai's shape language is square. Buttons, nav, inputs and footer all compute a 0px radius. The measured radii are 50% (12 elements, circular controls such as carousel and floating buttons), 12px (8 elements), and 2px (3 elements, including `2px 0 0 2px` and `0 2px 2px 0` segment ends). The generated tokens keep `xs` 2px, `sm` 12px, `none` 0px and `pill`.

## Components

- **button-primary**: `#002c5f` fill, white HyundaiHRegular 16px label, padding 15px, height 50px, 0px radius. On hover the measured state keeps the navy fill and white text and shows a white border.
- **Outlined buttons** ("ดูเพิ่มเติม", "คลิกเพื่อซื้อ"): transparent or white fill, grey `#b7b7b7` 1px border, grey text, square corners; "Be a Hyundai Dealer" uses a `#d9d9d9` border with black 14px text and padding 8px 12px.
- **Text input** (dealer search): 14px HyundaiHRegular, height 44px, padding 11px 20px 11px 50px (icon inset), 1px border.
- **Tabs**: ทั้งหมด, SUV, EV, N, MPV, with a teal underline on the active tab.
- **Model card**: year, name, price, photo, two buttons on a light surface.
- **Footer**: `#1c1b1b`, text `#c2c2c2`, padding 24px 0.

## Design System Architecture

No public design-system or brand-guideline page was linked from the home page and no search was made. The CSS corpus (from https://www.hyundai.com/th/th) shows custom font families HyundaiMedium (608 declarations), HyundaiBold (237), HyundaiRegular (195) and HyundaiTextRegular (53), plus Google Sans and Google Sans Text (the embedded map widget). No custom properties were found on `:root` (0 measured), so the system is expressed in compiled class CSS, not tokens.

## Do's and Don'ts

- Do use Hyundai navy `#002c5f` for main actions and the dealer panel with white labels.
- Do keep corners square (0px) on buttons, inputs and bars.
- Do pair each Latin Hyundai face with its Kanit companion for Thai text.
- Do show model year, name, baht price and two actions on each model card.
- Don't add pills or large radii; 50% appears only for circular controls.
- Don't document the cookie banner, promotional dialog or floating helper buttons as brand components.
- Don't use heavy shadows; the strongest measured is 8px blur at 0.4 alpha.

## Responsive Behavior

Measured at 390px: the wordmark text is 28px/28px, the hero headline is 25px with 30.625px line-height and +0.3px tracking, body copy is 12px with 17.04px line-height and +0.48px tracking, and the primary button is 14px with padding 12px. The most used mobile sizes are 12px (1606), 14px (1138), 16px (1054), 17px (711) and 19px (549). Nav items were not measured beyond the wordmark; layout changes and breakpoints are not measured.

## Iteration Guide

1. Start with `canvas` #ffffff and the warm `surface-warm` #f6f3f2 for alternating bands.
2. Use HyundaiMedium 58px/71px for hero headlines and HyundaiRegular 16px/28px for body.
3. Use square navy buttons (50px high) and grey-bordered outlined buttons.
4. Compose model cards with year, name, price and two actions.
5. Use the navy panel plus map for the dealer finder, and the `#1c1b1b` footer.
6. Keep everything in frontmatter values; leave unmeasured behaviors marked "not measured".
