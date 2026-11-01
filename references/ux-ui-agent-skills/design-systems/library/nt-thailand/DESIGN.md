---
version: alpha
name: "NT (National Telecom)"
category: "Thai Brands"
description: "National Telecom (NT) home page measured live at ntplc.co.th/en: NT yellow #f8d247 hero and top bar, black #000000 pill buttons with 25px radius, a custom NT typeface in Thai and Latin at 18px/700 buttons, and a dark #555859 footer."
colors:
  canvas: "#f7f7f7"
  page-largest: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  brand-yellow: "#f8d247"
  surface-footer: "#555859"
  ink-body: "#212529"
  accent-yellow: "#ffd101"
  ink-muted: "#9d9d9d"
  on-primary-hover: "#070707"
typography:
  display:
    fontFamily: NT
    fontSize: 46.8px
    fontWeight: 700
    lineHeight: 46.8px
    letterSpacing: 1px
  display-mobile:
    fontFamily: NT
    fontSize: 54px
    fontWeight: 700
    lineHeight: 54px
    letterSpacing: 1px
  body:
    fontFamily: nt
    fontSize: 22px
    fontWeight: 400
    lineHeight: 24.2px
  button:
    fontFamily: NT
    fontSize: 18px
    fontWeight: 700
    lineHeight: 50px
  input:
    fontFamily: NT
    fontSize: 21.6px
    fontWeight: 400
    lineHeight: 34.56px
rounded:
  xs: 4.5px
  sm: 25px
  md: 28px
  lg: 40px
  xl: 100px
spacing:
  s1: 2px
  s2: 5px
  s3: 9px
  s4: 10px
  s5: 13.5px
  s6: 15px
  s7: 20px
  s8: 25px
  s9: 32.4px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 45px
    height: 50px
  button-primary-hover:
    textColor: "{colors.on-primary-hover}"
  button-secondary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 45px
    height: 50px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.brand-yellow}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 10px 0px
  text-input:
    textColor: "{colors.ink-body}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    height: 35px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.brand-yellow}"
    padding: 40px 0px 0px
---

# NT (National Telecom)

## Overview

The measured page is https://www.ntplc.co.th/en, the National Telecom Public Company Limited site, rendered in the NT Broadband context: the h1 reads "NT Broadband for all Thais", with the sub-brand name "NT Broadband" and "NT eService" shown as outlined pills at the top right of the white header. The first screen is a saturated yellow hero with a cut-out photograph of a woman in a yellow jacket on a green bean bag holding a game controller, surrounded by circular photographs (a farmer, a boy with headphones, an older couple) and small floating icons (a wifi mark, a pink heart, a hash symbol). Beside it sit a black "Register" button and a white pill "เช็กพื้นที่ให้บริการ" (check service area).

Below the hero the page is a sequence of wide soft-edged bands: a white band titled "กำลังมองหาโปรโมชั่นอยู่หรือเปล่า? / Special Promotions For You", a dark grey band with a very large Thai headline "ค้นหาผลิตภัณฑ์และบริการจาก NT ที่ตอบโจทย์ทุกดิจิทัลไลฟ์และฝันของคุณ" and an amber button, a "Digital Tips & Trends" band, a "News Updates" band, a black app strip for "NT easy life+" with App Store and Google Play badges, and a grey footer with yellow column headings. Every Thai headline has a small English line beneath it, so the page is bilingual by construction. A vertical "feedback" tab sits on the right edge of the viewport.

Tone is friendly in the hero and promotional blocks and formal in the footer links. The opened page text lists accessibility options in the header (font size, black and white mode, stop animations, reading guide, cursor sizes) and a cookie banner; the cookie banner is not documented as brand UI.

## Colors

Measured background area: `#ffffff` (5016), `#f8d247` (1440), `#555859` (745), `#ffffff80` (332), `#000000` (321), `#ffffff99` (26). Text color by characters: `#000000` (890), `#ffffff` (662), `#212529` (333), `#f8d247` (216), `#ffd101` (13), `#9d9d9d` (3).

- `canvas` #f7f7f7 and `page-largest` #ffffff: the page background tones; white carries most area while #f7f7f7 is the body-level background.
- `ink` / `primary` #000000: headings, link labels and the primary button fill; `on-primary` #ffffff is the label on it.
- `brand-yellow` #f8d247: the NT yellow of the top utility bar, hero and navigation band.
- `surface-footer` #555859: the footer fill, with `brand-yellow` yellow as the footer text and heading color.
- `ink-body` #212529: the measured h1 and h2 text color and the text-input text color.
- `accent-yellow` #ffd101: a brighter yellow measured on 13 text characters.
- `ink-muted` #9d9d9d: muted grey text, for example the inactive language option.

The root declares 83 variables, most of them Bootstrap (`--bs-primary: #0d6efd`, `--bs-yellow: #ffc107` and others) and Fancybox button variables. Those are framework defaults, not NT brand colors, and are not used as tokens.

## Typography

One custom family, NT, is loaded in normal and bold (the loaded font list also shows Font Awesome 6 Free and swiper-icons for icons). It carries both Thai and Latin text (2043 characters; a lowercase `nt` variant accounts for 74). Sizes by characters: 18px (723), 14.58px (653), 16.2px (258), 54px (150), 27px (140), 22px (61), 21.6px (47). Weights: 400 (1336) and 700 (781).

- `display` NT 46.8px / 46.8px, weight 700, letter-spacing 1px: the hero h1 at desktop width. The 390px pass measured the h1 at 54px / 54px (`display-mobile`), and the h2 "Special Promotions For You" at 37.8px with 1px letter-spacing.
- `body` nt 22px / 24.2px, weight 400: the app-strip copy.
- `button` NT 18px, weight 700, line-height 50px: all pill labels and nav labels.
- `input` NT 21.6px / 34.56px, weight 400: the search input.

The desktop h2 is 54px / 54px weight 700 with 1px letter-spacing, so section titles are larger than the hero h1 on the measured desktop page.

## Layout

The page is 389 measured elements at 1280px wide. Headings align on the left under the logo, and "ดูทั้งหมด" (view all) links sit at the right edge. Bands are full width with large curved edges: the dark band has rounded top corners in the capture, and radii such as `0px 0px 0px 30px`, `100px 0px 0px 100px` and `0px 100px 100px 0px` were measured. Measured paddings: 10px (82 uses), 40px (56), 20px (20), 13.5px (18), 2px, 5px and 25px. The footer has a 40px top padding and four columns of links under yellow headings (About NT, Product and Service, news, Contact Us, Promotion, Procurement, Apply, Online Payment).

## Elevation & Depth

Two faint shadows were measured: `rgba(10, 10, 10, 0.15) 0.5px -1.5px 3.5px 1px` and `rgba(0, 0, 0, 0.15) -1px 1px 5.5px 1px`, each on one element. Depth otherwise comes from color: the yellow hero, the dark grey curved band that overlaps the white band above it, and translucent white (`#ffffff80`, `#ffffff99`) layers over background art.

## Shapes

Measured radii: 28px (15 elements, outline pills in the header and chips), `0px 0px 0px 30px` (6), 25px (2, the 50px-high buttons), `100px 0px 0px 100px` (2), 40px (1), 4.5px (1, the input) and `0px 100px 100px 0px` (1). Tokens: `xs` 4.5px, `sm` 25px, `md` 28px, `lg` 40px, `xl` 100px. Buttons are capsules (50px height with 25px radius); the search input is nearly square at 4.5px; photographs in the hero are circles.

## Components

- **button-primary**: black `{colors.ink}` fill, white 18px bold label, 25px radius, 50px height and padding 0px 45px, 200px wide in the measured hero ("Register"). Hover text color measured as #070707 (`on-primary-hover`).
- **button-secondary**: white fill, black label, same 25px radius and size ("เช็กพื้นที่ให้บริการ").
- **nav pills**: "NT Broadband" and "NT eService" are white pills with a black 1px border and 28px radius; their hover state measured a background of rgb(238, 238, 238) and text rgb(66, 66, 66).
- **text-input**: 35px high, 4.5px radius, text #212529.
- **footer**: #555859 fill with yellow text, 40px top padding.
- **amber CTA**: a yellow gradient pill appears on the dark band in the capture; its color is not separately tokenized.

## Design System Architecture

No public brand guideline or design system link appears on the pages opened (https://www.ntplc.co.th/en); the footer links only to privacy, take-down and cookie policy pages. The de-facto system is Bootstrap 5 plus Fancybox: root variables are `--bs-*` (for example `--bs-body-color-rgb: 33, 37, 41`, which matches the #212529 text color) and `--f-button-*` for the lightbox. The brand layer is the NT typeface, the yellow and black palette, and the pill buttons. Measurements are in `web/data/extracted/nt-thailand.json`.

## Do's and Don'ts

- Do use the NT yellow #f8d247 as the large brand field and black for primary actions.
- Do pair every Thai headline with a smaller English line.
- Do round primary buttons at 25px with 50px height and 45px side padding.
- Don't use Bootstrap blue (#0d6efd) or the framework yellow (#ffc107) as brand colors.
- Don't document the cookie banner or the feedback tab as brand components.
- Don't set body copy in weights other than 400 and 700, the only two measured.

## Responsive Behavior

The 390px mobile pass recorded the h1 at 54px / 54px weight 700 and the h2 at 37.8px weight 700, both with 1px letter-spacing, and a mobile h1 text box 310px wide. Layout changes, navigation behavior and breakpoints are not measured.

## Iteration Guide

1. Choose the field: yellow #f8d247 for hero and top bar, white for reading, #555859 for the footer.
2. Set Thai headlines large and bold in NT with 1px tracking, English subtitle beneath.
3. Use black capsule buttons for the main action and white capsules for the secondary one.
4. Keep photography as cut-outs on the yellow field or as circles.
5. Check with `node web/scripts/verify-designs.mjs --slug=nt-thailand`.
