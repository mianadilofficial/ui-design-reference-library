---
version: alpha
name: Bangchak Sriracha
category: "Thai Brands"
description: "Bangchak Sriracha (BSRC, bsrc.co.th), a Thai petroleum refiner and fuel marketer, uses a white canvas #ffffff, black ink #000000 and brand green #48a23f with a #84bd00 hover, a #131313 footer and red #ed1c24 eyebrows, set in DB Ozone X from 22px body to 100px statistics, with 4px buttons and leaf-shaped imagery."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#48a23f"
  on-primary: "#ffffff"
  primary-hover: "#84bd00"
  surface-muted: "#efefef"
  surface-footer: "#131313"
  ink-secondary: "#212529"
  accent-red: "#ed1c24"
  accent-red-pure: "#ff0000"
  accent-orange: "#ea7600"
  hairline: "#dee2e6"
  nav-bg: "#ffffff40"
typography:
  display:
    fontFamily: "\"DB Ozone X\", sans-serif"
    fontSize: 100px
    fontWeight: 500
    lineHeight: 100px
  display-mobile:
    fontFamily: "\"DB Ozone X\", sans-serif"
    fontSize: 23.975px
    fontWeight: 400
    lineHeight: 23.975px
  subheading:
    fontFamily: "\"DB Ozone X\", sans-serif"
    fontSize: 66px
    fontWeight: 500
    lineHeight: 66px
  body:
    fontFamily: "\"DB Ozone X\", sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 22px
  link:
    fontFamily: "\"DB Ozone X\", sans-serif"
    fontSize: 22px
    fontWeight: 500
    lineHeight: 33px
rounded:
  xs: 4px
  sm: 9px
  md: 10px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 15px
  s6: 16px
  s7: 24px
  s8: 30px
  s9: 32px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 8px 16px
    height: 49px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.canvas}"
    padding: 48px 0px 24px
---

## Overview

Bangchak Sriracha Public Company Limited (BSRC, `https://www.bsrc.co.th/th/home`, title "Bangchak Sriracha", 434 visible elements, 4397px tall) describes itself on the home page as an integrated petroleum refiner: it runs a refinery and aromatics business at Sriracha, a network of oil depots and service stations nationwide, and markets petroleum products to retail consumers under the "บางจาก" name and to commercial users in industry, aviation, shipping and rail. The opening hero is a full-bleed dusk photograph of a refinery tower with a slider of large numerals (142 thousand barrels per day, 805 service stations, revenue in millions of baht) in 100px white type, and a green "เกี่ยวกับ BSRC" button.

Below the hero a white section titled "ธุรกิจของเรา" (Our business) uses a huge green heading and two alternating blocks, "ธุรกิจโรงกลั่น" (refinery business; a complex refinery of 174,000 barrels per day near Laem Chabang port, Chonburi, per the page) and "ธุรกิจการตลาด" (marketing business), each with a red-and-black eyebrow, a paragraph, a "ดูเพิ่มเติม" arrow link and a large photograph cut into a leaf shape or a cut-out collage of a plane, ship, train and truck. A dark road photograph band follows with the title "นักลงทุนสัมพันธ์" (Investor relations) and three white document cards with download links on a lime-green strip. The mark is a green-and-orange leaf with the lowercase wordmark "bsrc".

At capture time a shareholders' meeting pop-up and a cookie panel overlay the hero; a forced re-extraction no longer measured the pop-up scrim, and neither overlay is brand UI.

## Colors

Background area by weight: white #ffffff (775), light grey #efefef (541), near-black #131313 (456, footer), translucent white #ffffff40 (82, the nav bar), #cecfce (34), brand green #48a23f (8), translucent #ffffff59 (7). Text colours by characters: black #000000 (984), white (872), green #48a23f (121), #212529 (101), red #ff0000 (24), red #ed1c24 (12), lime #84bd00 (8).

- **canvas #ffffff** and **ink #000000**: page and body text; **ink-secondary #212529** is the next text colour.
- **primary #48a23f**: the green of the "เกี่ยวกับ BSRC" button (white text), of headings such as the huge "ธุรกิจของเรา" and of link text; the theme exposes it as `--success`.
- **primary-hover #84bd00**: measured button hover fill (rgb(132, 189, 0)); the hover border is rgb(56, 125, 49).
- **accent-red #ed1c24** and **accent-red-pure #ff0000**: red text on the eyebrow word "ธุรกิจ"; **accent-orange #ea7600**: a border colour on two elements.
- **surface-muted #efefef**, **surface-footer #131313**, **hairline #dee2e6** (24 elements), **nav-bg #ffffff40**: the neutral structure.

The root variables define a full named scale (green 200 to 900, light-green 300 to 900, orange 100 to 800, red 300 to 900, grey 200 to 900, for example `--green-600: #367A2F`, `--light-green-400: #9DCA33`, `--orange-500: #EA7600`, `--grey-900: #131313`); only the values listed above were measured on the page. The slider's `--swiper-theme-color: #007aff` is a plugin default and not a brand colour.

## Typography

One family: **DB Ozone X** (2038 characters) with a generic sans-serif fallback; Arial appears on 85 characters. Weights: 400 (1330 characters), 500 (707), 700 (85). Roles: statistic numerals 500 100px/100px; section heading 500 66px/66px; body and button text 400 22px/22px; link 500 22px/33px; footer company name 32px; mobile hero caption 23.975px. Most-read sizes: 22px (1399 characters), 26px (220), 18px (216), 66px (90), 32px (75), 100px (41), 46px (25). The CSS lists no named substitute for DB Ozone X other than generic sans-serif; the site loads it itself.

## Layout

Desktop viewport 1280px. The header is a rounded translucent bar 1208px wide and 68px tall floating over the hero, holding the green leaf logo, nav labels (หน้าหลัก, เกี่ยวกับเรา, ธุรกิจของเรา, การกำกับดูแลกิจการ, การพัฒนาความยั่งยืน, นักลงทุนสัมพันธ์, ข่าวสาร, ร่วมงานกับเรา, ติดต่อเรา), a TH language selector and a search icon. The menu tree also holds company overview, board and executives, awards, corporate-governance reports, whistleblowing channel, annual report and Form 56-1, financial data, bondholder information and credit ratings. Content sections alternate image-left/text-right and text-left/image-right halves with large white space; the investor section is a dark photographic band with a three-column row of document cards. Paddings by frequency: 8px (45), 15px (26), 24px (14), 32px (8), 6px (4), 1px (4), 16px (3). Container breakpoints in the theme: 768px, 992px, 1200px and 1640px.

## Elevation & Depth

Measured shadows: `rgba(0, 0, 0, 0.1) 2px 4px 6px 3px` (4 elements), `rgba(0, 0, 0, 0.25) 0px 4px 4px 0px` (2) and `rgba(0, 0, 0, 0.15) 0px 4px 4px 0px` (2). Document cards and the nav bar float with these soft low-offset shadows; the nav bar is also translucent (#ffffff40) with a 1px white border.

## Shapes

Measured radii: 10px (8 elements), 4px (8), 9px (1), `10px 0px 0px` (1) and `0px 10px 0px 0px` (1). Buttons are 4px; cards are 10px; the nav bar is 9px. The signature shape is the leaf: photographs are masked into leaf outlines with one curved corner, and thin leaf outlines in green are drawn behind sections. Circles are used for slider arrows and the arrow-link icon.

## Components

- **Primary button:** "เกี่ยวกับ BSRC", green #48a23f fill, white DB Ozone X 22px/33px, padding 8px 16px, 163px by 49px, 4px radius, with an arrow; on hover the fill becomes #84bd00.
- **Arrow text link:** "ดูเพิ่มเติม" in black 22px/500 followed by an outlined circle with a long arrow.
- **Statistic slider:** 100px white numerals with a small unit caption ("พันบาร์เรล/วัน", "สถานีบริการน้ำมัน") and round white arrow buttons.
- **Eyebrow:** the word "ธุรกิจ" in red and "ของเรา" in black at small size above each section heading.
- **Document cards:** white, rounded, soft shadow, 22px title, red-orange download icon with "ดาวน์โหลด".
- **Nav bar:** translucent white, 9px radius, black labels (green for the nav-link role).
- **Footer:** #131313 background, white text, padding 48px 0px 24px, 356px tall, with the company name and address.

## Design System Architecture

No public design system or brand-guidelines page was found: the opened home page (https://www.bsrc.co.th/th/home) links only to company, governance, sustainability, investor and news pages. The shipped CSS does expose a de-facto token layer as root variables: a numbered colour scale per hue (`--green-*`, `--light-green-*`, `--orange-*`, `--red-*`, `--grey-*`), semantic aliases (`--success: #48A23F`, `--danger: #ED1C24`, `--white`, `--black`), breakpoints (`--breakpoint-md: 768px`, `--breakpoint-lg: 992px`, `--breakpoint-xl: 1200px`, `--breakpoint-xxl: 1640px`), `--hybrid-column-space: 15px`, Font Awesome 6 Pro font variables and Swiper slider variables.

## Do's and Don'ts

- Do keep surfaces white and let one saturated green #48a23f carry buttons, headings and links.
- Do use DB Ozone X at large sizes (66px headings, 100px statistics) for impact and 22px for body.
- Do mask photography into leaf shapes and draw thin green leaf outlines behind content.
- Do pair a red-and-black eyebrow with every section heading.
- Don't use the Swiper default blue #007aff as a brand colour.
- Don't document the cookie panel or shareholder pop-up as brand UI.
- Don't use large radii on buttons; the measured button radius is 4px.

## Responsive Behavior

Mobile was measured at 390px. The statistic caption is 23.975px in a 360px block; the body paragraph stays DB Ozone X 22px in a 360px by 88px block; the header is 360px by 58px with the text "TH" in uppercase and a 1px white border and 9px radius; the hero CTA was not detected on mobile. Mobile size frequencies: 22px (946 characters), 23.975px (220), 18px (216), 43.725px (90), 26.9375px (75), 51.625px (28). Menu, slider and card reflow behaviour at narrow widths were not measured.

## Iteration Guide

1. Start from canvas #ffffff, ink #000000, primary #48a23f, hover #84bd00 and footer #131313.
2. Set DB Ozone X: 22px body, 66px section headings, 100px statistic numerals.
3. Buttons: 4px radius, 8px 16px padding, white label on green.
4. Add a red-and-black eyebrow, a paragraph and an arrow link in each content block; mask the image as a leaf.
5. Float a translucent 9px-radius nav bar over a full-bleed photograph.
6. Measure new components before adding tokens; unmeasured states stay "not measured".
