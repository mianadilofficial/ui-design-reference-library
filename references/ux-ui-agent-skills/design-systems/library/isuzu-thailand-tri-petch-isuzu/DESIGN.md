---
version: alpha
name: Isuzu Thailand
category: "Thai Brands"
description: "Isuzu Thailand Official (isuzu-tis.com), the Thai consumer site for Isuzu vehicles: white canvas, near-black #1d1d1d ink, Isuzu red #ed1c24 buttons turning #a11116 on hover, NotoSansThai Regular and Bold at 18px body, EurothaiDemiExt 64px headings, 4px button radius and 12px cards."
colors:
  canvas: "#ffffff"
  ink: "#1d1d1d"
  primary: "#ed1c24"
  on-primary: "#ffffff"
  surface-light: "#f2f1f1"
  ink-mid: "#6e6e6e"
  ink-muted: "#555555"
  ink-dark: "#3b3b3b"
  ink-faint: "#afafaf"
  hairline: "#ebebeb"
  primary-hover: "#a11116"
typography:
  display:
    fontFamily: NotoSansThaiBold, "NotoSansThaiBold Fallback"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  display-mobile:
    fontFamily: NotoSansThaiBold, "NotoSansThaiBold Fallback"
    fontSize: 16.0904px
    fontWeight: 400
    lineHeight: 24.1355px
  heading:
    fontFamily: EurothaiDemiExt, "EurothaiDemiExt Fallback"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 73.6px
  body:
    fontFamily: NotoSansThaiRegular, "NotoSansThaiRegular Fallback"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: NotoSansThaiBold, "NotoSansThaiBold Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 17.6px
  nav:
    fontFamily: NotoSansThaiRegular, "NotoSansThaiRegular Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 12px
  md: 16px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 12px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink-dark}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 20px
    height: 48px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 20px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 9, 38, 0.08) 0px 8px 10px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

The measured page is the Thai home page of "อีซูซุประเทศไทย Isuzu Thailand Official" (isuzu-tis.com, language `th`), described by its own heading as "อีซูซุเพื่อนคู่ใจที่ผู้ใช้รถชาวไทยไว้วางใจได้เสมอมา" (Isuzu, the trusted companion of Thai drivers). The capture shows the Tri Petch Isuzu Sales logo and hotline block near the footer. The page is 1280px wide and 6423px tall.

Structure, top to bottom: a dark utility strip with vehicle-type links (pickups and multi-purpose vehicles, commercial trucks) and utility links (compare models, instalment calculator, find showroom / service centre, download brochure), a white header with the red ISUZU logo, a menu (Isuzu models, offers and finance, service, benefits, share good things, about Isuzu) and a red "สนใจรถ" (interested in a car) button, a full-width seven-slide hero carousel with a vehicle photograph, white "ดูรายละเอียด" (see details) button and video link, a dark storytelling block with a vintage pickup image, a "THE ONE & ONLY FOR YOU" section with a very large Thai headline and a model tab strip (V-CROSS, 4 DOORS, 2 DOORS, SPARK, X-SERIES, MU-X), a highlights grid of image cards, special-offers cards, a "TRUSTED BUDDY" mascot banner, service tiles, a quick-actions row, and a multi-column footer with social links.

Capture note: the first capture carried a cookie consent dialog; after a re-extraction with the batch extractor (and regenerating the tokens) the dialog was no longer present. Consent and fixed overlays are not documented as brand UI.

## Colors

- **Canvas `#ffffff`**: largest area (4749 units). **Dark band `#1d1d1d`** (2048 units) is the storytelling section; it is also the ink colour (1800 characters).
- **Primary `#ed1c24`** (Isuzu red; declared as `--color-red-500`): the "สนใจรถ" button fill and highlighted text (15 characters). **Primary hover `#a11116`** (declared `--color-red-700`) is the measured hover fill.
- **On-primary `#ffffff`**: text on red and dark areas (705 characters).
- **Greys**: `#6e6e6e` (260 characters), `#555555` (241), `#3b3b3b` (168, also the secondary button fill and a 66-unit area) and `#afafaf` (31). **Light surface `#f2f1f1`** (447 units) and **hairline `#ebebeb`** (178 units and 13 border uses).
- The site's own variables list a full Tailwind-style palette: red 50 to 700 (`#fef9f9`, `#fbdadc`, `#f9b9bb`, `#f69498`, `#ed1c24`, `#c8171d`, `#a11116`), crimson `#eb144a`, silver, grey, brown (`#e6e0d2`, `#d4c8aa`, `#c2ae80`), azure/blue, green (`#01ad66`) and lime `#b0ea1d`. Only the red, black, white and grey families are measured on the home page.
- Black scrims are declared as `#000000b3` (70%) and `#00000080` (50%).

## Typography

NotoSansThaiRegular (1458 characters) and NotoSansThaiBold (1715) carry text, and EurothaiDemiExt (47 characters) sets the very large display Thai headline. Each Noto file has a metric-matched fallback declared (for example `NotoSansThaiBold Fallback`). All 3506 measured characters are weight 400, because bold is obtained by loading the Bold file rather than by weight values. EurothaiDemiExt is a Thai display face shipped with the site; a Thai-capable sans in a bold extended style is the generic substitute.

Measured roles:

- Display (h-role): NotoSansThaiBold 20px / 30px.
- Heading: EurothaiDemiExt 64px / 73.6px (the "เลือกความเป็นหนึ่งเดียว!... ในแบบคุณ" headline).
- Body: NotoSansThaiRegular 18px / 27px.
- Button: NotoSansThaiBold 16px / 17.6px.
- Navigation: NotoSansThaiRegular 16px / 24px.

Other sizes: 14px (954 characters), 16px (933), 18px (792), 12px (273, the caption size `--text-caption`), 20px (253), 24px (251), 64px (47) and 30px (3). Line height variables are 150% for caption and body. Letter-spacing is normal throughout. On the 390px pass the display role is 16.0904px / 24.1355px.

## Layout

Wide full-bleed hero and dark band sections alternate with white content sections on a contained column. Gaps are 8px (59 uses), 24px (41) and 16px (22). Paddings: 12px (43), 8px (41), 20px (27), 52px (20), 16px (20), 24px (19), 4px (16) and 32px (12). The grid of highlight cards uses a large card on the left and two smaller beside it; special offers use a horizontally scrolling row with pagination bars in red and grey.

Imagery and voice: the hero shows vehicles photographed outdoors (a white MU-X on open ground, a mascot in a red cap in front of city towers), the offers show promotional posters with large numerals for interest rates and prices, and the service tiles show app screens, showrooms and a mechanic. Copy is promotional Thai with English model names in capitals (THE NEXT PEAK 2.2 Ddi MAXFORCE 4WD, THE ONE & ONLY FOR YOU, HIGHLIGHTS, SPECIAL OFFERS) and a recurring slogan structure "หนึ่งเดียว... เท่านั้น!" (one and only) on new-model announcements. Section labels are short uppercase English kickers above large Thai headings.

## Elevation & Depth

Shadows are soft and cool: `rgba(0, 9, 38, 0.08) 0px 8px 10px 0px` on the navigation bar and `rgba(0, 9, 38, 0.08) 0px 12px 16px 0px` on a card, each preceded by four fully transparent layers (Tailwind-style shadow stacks). Borders of `#ebebeb` (13 uses) outline cards and tiles. The root variables also declare 70% and 50% black scrims.

## Shapes

Radii: 4px (61 uses, buttons and small controls), 12px (17, cards), `16px 16px 0 0` (1) and 16px (1, large cards). Buttons are small-radius rectangles (4px), not pills. The image tiles in the capture have visibly larger rounding, consistent with the 12px to 16px values.

## Components

- **Primary button** ("สนใจรถ"): red `#ed1c24` fill, white NotoSansThaiBold 16px, padding 8px 12px, height 40px, radius 4px, white border; hover fill `#a11116`.
- **Secondary button**: `#3b3b3b` fill, white text, padding 12px 20px, height 48px, radius 4px.
- **Light button** (on photos): white fill with dark text, used for "ดูรายละเอียด".
- **Navigation**: white bar with the shadow above; links in 16px regular, the active item in red.
- **Utility strip**: dark grey bar with white 12px to 14px links.
- **Model tabs**: a segmented control with a dark active tab.
- **Card**: white, 12px radius, 16px padding, `#f2f1f1` or `#ebebeb` border, the 12px 16px shadow.
- **Carousel indicators**: short horizontal bars, the active one in red.

## Design System Architecture

No public design-system or brand-guideline page was found: the home page HTML was opened and contained no brand, press, design-system, guideline or GitHub link. The site ships Tailwind CSS v4 style custom properties in the root (`--color-red-500`, `--text-caption`, `--text-body-1-fixed--line-height`, `--blur-lg`, `--ease-in`, `--tw-*`), which serve as the de-facto token layer: colour scales per hue, a 12px caption size with 150% line height, and the spacing values 4px, 6px, 8px, 12px, 16px, 20px, 24px, 32px, 40px and 48px recorded in the measurements.

## Do's and Don'ts

- Do use Isuzu red `#ed1c24` for the single primary action and `#a11116` for its hover.
- Do keep body copy at 18px NotoSansThaiRegular with 27px leading.
- Do use 4px radii for buttons and 12px for cards.
- Do use `#1d1d1d` for dark storytelling bands and for text.
- Don't use the unmeasured palette hues (blue, green, lime, brown) as primary colours.
- Don't use pill buttons; measured buttons are 4px.
- Don't document the cookie dialog or overlays as brand UI.

## Responsive Behavior

Measured at 390px: the display role is 16.0904px / 24.1355px; common sizes are 16.0904px (994 characters), 16px (739), 14px (684), 12px (359), 20.1304px (251) and 18.0652px (90). Layout reflow, menu collapse and hover on touch were not measured.

## Iteration Guide

1. White canvas, `#1d1d1d` ink and dark bands; red `#ed1c24` for one action.
2. NotoSansThai Regular for text, Bold for buttons, EurothaiDemiExt for the one huge headline.
3. 4px radii on buttons, 12px on cards, `#ebebeb` hairlines.
4. Add the cool shadow `rgba(0, 9, 38, 0.08) 0px 12px 16px 0px` to raised cards.
5. Use a seven-slide hero with short bar indicators.
6. Check values against `web/data/extracted/isuzu-thailand-tri-petch-isuzu.json`.
