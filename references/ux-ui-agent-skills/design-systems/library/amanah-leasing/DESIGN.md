---
version: alpha
name: Amanah Leasing
category: "Thai Brands"
description: "Amanah Leasing PCL (amanah.co.th), a Thai car-title and refinance lender built in Webflow: forest green #1a8732 and lime #3dae2b, dark green ink #1a5632, Athiti type at 400 to 600, 100px pill buttons with a soft 0 2px 5px shadow, 10px cards."
colors:
  canvas: "#ffffff"
  ink: "#1a5632"
  primary: "#1a8732"
  on-primary: "#ffffff"
  accent-orange: "#f5a800"
  lime-green: "#3dae2b"
  white-smoke: "#f2f2f2"
  ink-grey: "#808080"
  ink-charcoal: "#333333"
  hairline: "#cccccc"
typography:
  display:
    fontFamily: Athiti, sans-serif
    fontSize: 26px
    fontWeight: 400
    lineHeight: 32px
  display-mobile:
    fontFamily: Athiti, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
  heading:
    fontFamily: Athiti, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 26px
  button:
    fontFamily: Athiti, sans-serif
    fontSize: 22px
    fontWeight: 500
    lineHeight: 32px
  nav:
    fontFamily: Athiti, sans-serif
    fontSize: 21px
    fontWeight: 400
    lineHeight: 20px
  button-secondary:
    fontFamily: Athiti, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 24px
  input:
    fontFamily: Athiti, sans-serif
    fontSize: 18px
    fontWeight: 400
rounded:
  xs: 5px
  sm: 10px
  md: 14px
  lg: 18px
  xl: 24px
  2xl: 100px
  pill: 9999px
spacing:
  s1: 5px
  s2: 8px
  s3: 9px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 30px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 9px 40px
    height: 50px
    boxShadow: rgba(0, 0, 0, 0.2) 0px 2px 5px 0px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.2xl}"
    padding: 9px 20px
    height: 42px
  nav:
    textColor: "{colors.white-smoke}"
  nav-link:
    textColor: "{colors.white-smoke}"
    typography: "{typography.nav}"
    padding: 0px 15px
  text-input:
    backgroundColor: "{colors.lime-green}"
    textColor: "{colors.white-smoke}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 8px 12px
    height: 50px
    borderColor: "{colors.hairline}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 2px 5px 0px
---

## Overview

Amanah Leasing PCL's homepage (title "Amanah Leasing PCL. | บริษัทสินเชื่อรถยนต์ รีไฟแนนซ์รถยนต์ ไม่เช็คเครดิต") sells car-registration loans, refinancing and private-sale financing in Thai. The capture shows a header with the green "AMANAH Leasing" wordmark, a Thai call-center number (02-091-6456) and a Facebook page badge; a dark-green navigation bar; a hero carousel of smiling staff in green uniforms with a rate strip ("18.50% - 24.00% ต่อปี"); three rounded green service tiles (car-title loan, transfer refinance, private car sale) each with a yellow circular icon; an online loan application form with green filled fields; and a news-and-activities row. A 34th-anniversary popup was open in the capture and a column of floating contact icons sits at the right; both are overlays and excluded from the system.

The brand reads as green throughout: three named greens, one orange accent and a very light grey. The extractor recorded the site's own root variables, so the colors are named by the site: `--forest-green` #1a8732, `--lime-green` #3dae2b, `--black` #1a5632 (a dark green used as ink), `--black-2` #333, `--white-smoke` #f2f2f2, `--light-grey` #ccc, `--orange` #f5a800, `--grey` grey and `--white` #fff. Voice is friendly and procedural: "สมัครสินเชื่อ ออนไลน์", "กรุณากรอกข้อมูลของท่านให้ครบถ้วน" (please complete your details), and a reassuring consent line before submit.

Imagery and art direction in the capture: the hero photographs staff in matching green polos holding car keys and loan documents, flanked by translucent leaf shapes and diagonal green panels; service tiles stack a stock photograph (coins and a toy car, a bank building, a handshake) over a rounded green panel with a yellow circle icon and a white Thai label, and a short grey caption sits beneath each tile. The application form uses large green input boxes with white placeholder text, labels in dark green above each field, a small checkbox for consent and a centered green pill submit button. News cards show announcement graphics with a date in small grey text above a bold green headline.

## Colors

- **`{colors.canvas}` #ffffff:** page ground; the capture's lower half sits on a soft grey-to-white gradient.
- **`{colors.ink}` #1a5632:** the dominant text color (1,652 characters) and the site's `--black`. It is a deep green, not black.
- **`{colors.primary}` #1a8732:** forest green, the CTA and button fill, `--forest-green`. White text on it is `{colors.on-primary}`.
- **`{colors.lime-green}` #3dae2b:** lighter green used for form fields, the second stop of the green gradient (the CTA candidate measured `linear-gradient(135deg, rgb(26, 135, 50), rgb(61, 174, 43))`) (185 area weight).
- **`{colors.white-smoke}` #f2f2f2:** light grey fill and the text color on green surfaces (105 characters).
- **`{colors.ink-grey}` #808080** (445 characters) and **`{colors.ink-charcoal}` #333333** (270) are secondary text. **`{colors.hairline}` #cccccc** is the border color on inputs; a #cccccc4d translucent fill is the largest background by area (472).
- **`{colors.accent-orange}` #f5a800:** published as `--orange`; measured as a small background area (weight 1), and the capture shows yellow-orange icon circles on the service tiles. A red text color #ff0000 was measured for 60 characters; its role was not identified and it is not a token.

## Typography

Athiti supplies 2,774 counted characters and Open Sans 63. Loaded faces include Athiti at 300, 400, 500, 600 and 700, Open Sans italics and the Webflow icon font.

- **Display `{typography.display}`:** Athiti 26px, weight 400, line-height 32px, white on the hero ("สินเชื่อทะเบียนรถยนต์"). On mobile the extractor's h1 candidate is the white "สมัครสินเชื่อ" label at 20px, line-height 26px, 91px wide (`display-mobile`); it is a floating-button label rather than a page heading.
- **Heading `{typography.heading}`:** Athiti 20px, weight 600, line-height 26px.
- **Button `{typography.button}`:** Athiti 22px, weight 500, line-height 32px. **Secondary button:** 18px, weight 600, line-height 24px.
- **Nav `{typography.nav}`:** Athiti 21px, weight 400, line-height 20px.
- **Input `{typography.input}`:** Athiti 18px, weight 400.
- Frequent sizes by characters: 18px (997), 16px (600), 22px (376), 20px (243), 14px (180), 21px (178), 24px (156), 26px (85) and 44px (22). Weights: 600 (1,179), 400 (1,172), 500 (434), 700 (52).

## Layout

The page is 1280px wide with a scroll height of 3,791px. Sections: header, navigation, hero carousel, three-column service tiles, two-column application form (eight labeled fields in four rows), centered consent block and submit button, then a four-column news row on a pale gradient. Paddings measured: 5, 8, 9, 10, 12, 15, 16, 20, 30 and 40px. Buttons use 9px 40px (primary) and 9px 20px (secondary); inputs 8px 12px at 50px height; nav links 0px 15px.

## Elevation & Depth

A soft drop shadow `rgba(0, 0, 0, 0.2) 0px 2px 5px 0px` was measured on the primary button and cards. Service tiles and news cards sit on pale gradients with a faint grey translucent fill (#cccccc4d), giving a layered, rounded look. The hero uses photography with a dark translucent band under the rate text.

## Shapes

Radii measured: 100px (13 elements, the pill buttons), 5px (6, inputs), 100% (5, circular icons), 10px (4, cards), 18px (4), `18px 18px 0px 0px` (4, tile tops), 14px (1) and 24px (1). Tokens `xs` 5px, `sm` 10px, `md` 14px, `lg` 18px, `xl` 24px and `2xl` 100px; primary and secondary buttons use `{rounded.2xl}`, inputs `{rounded.xs}` and cards `{rounded.sm}`. Service tiles round their top corners at 18px.

## Components

- **Primary button (`button-primary`):** fill `{colors.primary}` (the measured candidate also carries the green-to-lime 135-degree gradient), white Athiti 22px 500, radius 100px, padding 9px 40px, height 50px, soft shadow; measured label "ดูข่าวสารและกิจกรรมทั้งหมด >".
- **Secondary button (`button-secondary`):** `{colors.primary}` fill, white Athiti 18px 600, radius 100px, padding 9px 20px, height 42px.
- **Nav and nav-link:** text `{colors.white-smoke}` on the dark green bar, Athiti 21px, padding 0px 15px.
- **Text input:** `{colors.lime-green}` fill, `{colors.white-smoke}` text, Athiti 18px, radius 5px, padding 8px 12px, height 50px, border color `{colors.hairline}`.
- **Card:** 10px radius, `{colors.ink}` text, soft shadow.
- **Service tile:** rounded green panel with a yellow circle icon and white label under a photo.

## Design System Architecture

No public design system or brand guideline was found, and none was searched for. The site defines nine root custom properties for color (listed in the Overview); the loaded icon font is Webflow's, and the consent filter hid a "scrim pop-up" element. The tokens in this file use the site's own color vocabulary where possible (forest-green, lime-green, white-smoke).

## Do's and Don'ts

- Do use `{colors.primary}` forest green for actions and `{colors.ink}` dark green for text.
- Do use pill buttons (100px radius) and 10px card corners.
- Do pair green with the small orange accent only for icons.
- Don't use the anniversary popup or the floating contact column as brand components.
- Don't swap the dark green ink for black.
- Don't remove the soft shadow from primary buttons and cards.

## Responsive Behavior

Measured at 390px: the h1 candidate is the "สมัครสินเชื่อ" label at 20px with line-height 26px; an h2 "สินเชื่อสำหรับเล่มทะเบียนเป็นชื่อตนเอง" measured 16px, weight 500, line-height 22px in `{colors.ink}`. Layout reflow, menu collapse and tile stacking are not measured.

## Iteration Guide

1. Start with `{colors.canvas}`, Athiti and `{colors.ink}` text.
2. Add forest-green pill buttons with white labels and the 0 2px 5px shadow.
3. Use `{colors.lime-green}` for fields and tile panels.
4. Keep the orange for icon accents only.
5. Run `node web/scripts/verify-designs.mjs --slug=amanah-leasing`.
