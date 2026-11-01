---
version: alpha
name: Caltex Thailand
category: "Thai Brands"
description: "Caltex Thailand (caltex.com/th): white canvas #ffffff, Caltex red #e62f46 pill buttons with 25px radius, deep teal #01526d headings and footer, ITC Franklin Gothic Book, Medium and Demi type, 5px-radius promo cards with #e5e5e5 borders."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#e62f46"
  brand-teal: "#01526d"
  teal-deep: "#19516c"
  ink-charcoal: "#282828"
  accent-teal: "#056881"
  ink-muted: "#666666"
  text-input-text: "#b5b9bb"
  card-border: "#e5e5e5"
typography:
  display:
    fontFamily: ITCFranklinGothicStdMed
    fontSize: 21px
    fontWeight: 400
    lineHeight: 25.2px
    letterSpacing: 1.008px
  display-mobile:
    fontFamily: ITCFranklinGothicStdDemi
    fontSize: 30.8px
    fontWeight: 400
    lineHeight: 36.96px
  subheading:
    fontFamily: ITCFranklinGothicStdMed
    fontSize: 16.002px
    fontWeight: 400
    lineHeight: 24.003px
  body:
    fontFamily: ITCFranklinGothicStdBook, Helvetica, Arial, sans-serif
    fontSize: 16.002px
    fontWeight: 400
    lineHeight: 22.8589px
  nav:
    fontFamily: ITCFranklinGothicStdBook, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
  link:
    fontFamily: ITCFranklinGothicStdDemi
    fontSize: 14px
    fontWeight: 400
    lineHeight: 44.996px
    letterSpacing: 2px
    textTransform: uppercase
  input:
    fontFamily: ITCFranklinGothicStd-Book
    fontSize: 14.994px
    fontWeight: 400
    lineHeight: 14.994px
rounded:
  xs: 3px
  sm: 5px
  md: 10px
  lg: 13px
  xl: 15px
  2xl: 25px
spacing:
  s1: 2px
  s2: 8px
  s3: 9.35px
  s4: 10px
  s5: 14.87px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 20.01px
  s10: 21.99px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.2xl}"
    padding: 0px 20px
    height: 45px
    borderColor: "{colors.primary}"
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.2xl}"
    padding: 0px 20px
    height: 45px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.2xl}"
    padding: 0px 20px
    borderColor: "{colors.canvas}"
  nav:
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.ink-charcoal}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 14.994px 57.9818px 14.994px 19.987px
    height: 48px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.card-border}"
  footer:
    textColor: "{colors.canvas}"
---

## Overview

Caltex Thailand's homepage (title "คาลเท็กซ์ - ปั๊ม น้ำมันเครื่อง มาตรฐานระดับโลก l Caltex Thailand | Thailand", at caltex.com/th) is the Thai consumer site of the fuel and lubricant brand. The capture shows a deep-teal utility bar with a red account block at the right, a white header with the star logo and wordmark and menu labels (products and services, promotions, find a station, contact us), a segmented audience switch (drivers, business solutions, investors), a breadcrumb, a full-width hero carousel with a red tab strip beneath it, then a three-column grey band (station finder, today's fuel prices, Caltex rewards), a "โปรโมชันล่าสุดจากคาลเท็กซ์" row of three promotion cards, a teal "Caltex Business" panel with a factory photo, and a teal footer.

The hero at capture time was a black memorial tribute slide (a portrait with an ornate frame and white Thai text) with a first red tab "น้อมรำลึกในพระมหากรุณาธิคุณ"; that is a time-limited editorial slide and is not documented as brand UI. Measured colors: `{colors.canvas}` #ffffff, `{colors.ink}` #000000, `{colors.primary}` #e62f46, `{colors.brand-teal}` #01526d and `{colors.teal-deep}` #19516c. The voice is helpful and promotional ("สมัครเลย!", "ดูรายละเอียดเพิ่มเติม", "อ่านเพิ่มเติม") with prices in plain figures (today's prices were shown with a timestamp).

Imagery and art direction in the capture: the hero is a full-bleed slide with a large centered message; promotion cards show campaign artwork (a free drinking-water offer with a bottle, a credit-card discount with a beach scene and car, a red card promotion with a station) with a bank or partner logo in the artwork; the station finder tile shows a flat illustration of a Caltex canopy on a sand-colored base above the input; the rewards tile shows a red, white and navy star pattern. The Caltex Business panel pairs a teal text column with a photograph of three engineers in hard hats beside machinery. Prices are shown as grey "BHT" labels above large figures, and a small colored fuel-grade chip heads each price.

## Colors

- **`{colors.primary}` #e62f46:** Caltex red; the largest background area (1,364 weight, plus #e42f46 at 632), the pill button fill and the red tab strip, and also text on 165 characters.
- **`{colors.brand-teal}` #01526d:** deep teal for the utility bar, section headings and the Caltex Business panel (1,252); **`{colors.teal-deep}` #19516c** (705) is a near-identical teal used for the footer-style panels. #19526c (81) is a further near-duplicate and is not tokenized.
- **`{colors.canvas}` #ffffff** is a small area in the extractor's ranking (37) because the grey `#f0f1f1` (525) and `#f8f9fa` (81) bands dominate; white is the page ground in the capture.
- **Text:** white is the most frequent text color (4,025 characters, on teal, red and photos), `{colors.ink}` #000000 (1,551), `{colors.accent-teal}` #056881 (120), `{colors.ink-charcoal}` #282828 (161), `{colors.ink-muted}` #666666 (90), #545454, #8d8d8d, #204d74, #535353.
- **`{colors.card-border}` #e5e5e5** is the promo-card border; `{colors.text-input-text}` #b5b9bb is the placeholder text color in the station search field.
- Small-area product-type fills (#fec524, #0093c7, #f05b23, #51b948, #616a72, #414042, #ed3024) appear on fuel-grade chips and are not interface tokens.

## Typography

Three ITC Franklin Gothic faces are loaded: Book (counted on 2,820 characters), Medium (2,927) and Demi (624), registered under several names. Thai text uses the same stack.

- **Display `{typography.display}`:** Medium, 21px, line-height 25.2px, letter-spacing 1.008px; measured on the h2 "ค้นหาสถานีบริการคาลเท็กซ์" (the extractor's h1 role after the tribute slide was removed from consideration). The mobile pass picked a different element, "เดโล่ สปอร์ต" at Demi 30.8px, line-height 36.96px, 310px wide (`display-mobile`), and measured the h2 "โปรโมชันล่าสุดจากคาลเท็กซ์" at 23.996px, line-height 35.994px, in teal.
- **Subheading `{typography.subheading}`:** Medium 16.002px, line-height 24.003px.
- **Body `{typography.body}`:** Book 16.002px, line-height 22.8589px; the most frequent sizes are 14px (2,465 characters) and 16.002px (2,391).
- **Nav `{typography.nav}`:** Book 14px, line-height 14px.
- **Link / button label `{typography.link}`:** Demi 14px, line-height 44.996px, letter-spacing 2px, uppercase.
- **Input `{typography.input}`:** Book 14.994px, line-height 14.994px.
- All weights are reported as 400 because each weight is a separate font file.

## Layout

The desktop page is 1280px wide and 2,888px tall. The header is two stacked rows plus the audience switch; the hero is full width; the grey utility band is three columns separated by thin vertical rules; the promotion row shows three cards with arrows at the sides; the Caltex Business block is a half-teal, half-photo split. Spacing values measured: 2, 8, 9.35, 10, 14.87, 15, 16, 20, 20.01 and 21.99px. The station search input is 48px high with padding 14.994px 57.9818px 14.994px 19.987px (space for its red submit square).

## Elevation & Depth

No box shadows were recorded (`boxShadows` is empty); cards are separated by the `{colors.card-border}` outline rather than a lift, and the grey `#f0f1f1` band separates the utility area from the white promotion section. Hero depth is photographic.

## Shapes

Radii measured: 25px (19 elements, the pill buttons), 5px (10), `5px 5px 0px 0px` (10, rounded top corners), 13px (7), 10px, 3px and 15px (2 each). The button-primary and button-secondary tokens use `{rounded.2xl}` (25px); the card token uses `{rounded.sm}` (5px). Header and band blocks are square.

## Components

- **Primary button (`button-primary`):** red fill `{colors.primary}` with a red border, white Demi 14px uppercase label with 2px tracking, radius 25px, padding 0px 20px, height 45px; label "ดูรายละเอียดเพิ่มเติม". Measured hover: text turns rgb(243, 85, 95) on a fill of rgba(230, 47, 70, 0.14), and a second instance turns transparent with an underline.
- **Secondary button / link:** white text and white border on dark photographic or teal grounds, same 25px radius and 45px height ("ไปหน้า CALTEX BUSINESS" outlined pill).
- **Nav:** the token text color is `{colors.primary}`; nav links use `{colors.ink-charcoal}` at Book 14px.
- **Text input:** white fill, `{colors.text-input-text}` placeholder, 48px high; the submit control is a red square with a white chevron.
- **Card:** promotion card with 5px radius, 1px `{colors.card-border}` outline, image on top, bold title, two grey lines and a red "อ่านเพิ่มเติม" link.
- **Footer:** white text on teal.

## Design System Architecture

No public design system or brand guideline was found, and none was searched for. The site loads its custom ITC Franklin Gothic faces and carries a Bootstrap-style root (`--light` #f8f9fa, `--success` #28a745, `--breakpoint-xl` 1200px) plus `--vs-*` variables from a Vue select component. Those framework values are not brand tokens; only colors read from rendered elements are promoted.

## Do's and Don'ts

- Do use Caltex red for pills and the tab strip, and deep teal for headings and large panels.
- Do keep button labels uppercase with 2px tracking and a 45px pill.
- Do keep promotion cards flat with a light border.
- Don't document the memorial slide, fuel-grade chips or the vue-select widget as brand UI.
- Don't use Bootstrap defaults (#28a745, #ffc107) as brand colors.
- Don't mix in a second type family.

## Responsive Behavior

Measured at 390px: the extractor's h1 candidate is "เดโล่ สปอร์ต" at Demi 30.8px (line-height 36.96px, padding 10px 0px 24px, 310px wide); the h2 "โปรโมชันล่าสุดจากคาลเท็กซ์" is 23.996px with line-height 35.994px in teal #01526d (desktop h2 role: 21px). Menu collapse, card stacking and other mobile behavior are not measured.

## Iteration Guide

1. Start with white canvas, black ink and ITC Franklin Gothic Book 16px.
2. Add teal headings and one red 25px pill per section.
3. Use the grey band and thin vertical rules for utility rows.
4. Keep cards at 5px with a #e5e5e5 outline.
5. Run `node web/scripts/verify-designs.mjs --slug=caltex-thailand`.
