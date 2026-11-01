---
version: alpha
name: Heng Leasing and Capital
category: "Thai Brands"
description: "Heng Leasing and Capital (hengleasing.com), a Thai vehicle-loan company on WordPress: brand green #016938 header and headings, red #b20000 call-to-action buttons, white canvas, Prompt at 400 and 16px body, 30px display heading, square 0px buttons."
colors:
  canvas: "#ffffff"
  ink: "#747474"
  primary: "#b20000"
  on-primary: "#ffffff"
  brand-green: "#016938"
  surface-grey: "#dfdfdf"
  ink-slate: "#525558"
  ink-strong: "#333333"
  ink-black: "#000000"
  ink-graphite: "#505152"
  hairline: "#ebeaea"
  nav-text: "#b5b5b5"
  footer-border: "#e9eaee"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 30px
    fontWeight: 400
    lineHeight: 40px
  body:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: Prompt
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17px
    textTransform: uppercase
  button-secondary:
    fontFamily: Prompt
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 10px
  none: 0px
spacing:
  s1: 3px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 13px
  s6: 15px
  s7: 20px
  s8: 23px
  s9: 25px
  s10: 29px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 50px
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    height: 50px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    backgroundColor: "{colors.brand-green}"
    textColor: "{colors.nav-text}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-slate}"
    rounded: "{rounded.none}"
    padding: 23px 30px 20px
    borderColor: "{colors.footer-border}"
---

## Overview

Heng Leasing and Capital's homepage (title "บริษัท เฮงลิสซิ่ง แอนด์ แคปปิตอล จำกัด (มหาชน) บริการจัดสินเชื่อรถทุกชนิด") is a Thai auto and land-title loan marketing site in a bold green and red scheme. The capture shows a thin light-grey top strip with the company name, a phone number (1361) and a Facebook icon, then a solid green header with the "เฮงลิสซิ่ง" logo, menu labels (home, our services, about us, contact us, investor relations, news, car auction) and a red button "สมัครสินเชื่อ" (apply for a loan). A green hero banner with a field photograph carries red-and-white stylized headline artwork ("ชำระตรง ชำระดี มีส่วนลด"), two smiling presenters, a pickup and a hatchback, and a footnote about the effective interest rate (20.75% to 24% per year, installments from 12 to 60). Below are eight portrait promotional posters in a 4 by 2 grid, a full-width green banner "สมัครสินเชื่อ คลิกเลย!", and a news block titled "ข่าวสารและกิจกรรมเฮงลิสซิ่ง" with three cards.

The page also shows a floating strip of two small red buttons ("สมัครสินเชื่อ" and "โทรหาเรา") over the content and a cookie banner with three buttons; both are overlays and are not documented as system components.

Measured palette: `{colors.canvas}` #ffffff, `{colors.brand-green}` #016938, `{colors.primary}` #b20000 (the CTA fill) and body-text grey `{colors.ink}` #747474. Voice is energetic and promotional, using short Thai imperatives and large poster-style headlines.

Imagery and art direction in the capture: promotional posters are portrait cards with green backgrounds, large red and white Thai lettering, smiling staff in green uniforms and cars, a small "รายละเอียดเพิ่มเติม" link at the bottom of each poster, and one poster showing a map of Thailand under a magnifying glass for branch search. News cards show event photographs with a short title, a date and category line in small grey text ("ข่าวประชาสัมพันธ์"), a divider rule and a "Read More" link. The composition is dense and poster-led: almost every block is an image with its message baked in, and live text is limited to the menu, headings and excerpts.

## Colors

- **`{colors.canvas}` #ffffff:** dominant background by area (weight 9,304).
- **`{colors.brand-green}` #016938:** header, banners and the h1 color; second-largest area (952). The site's own variable `--primary_color` is also #016938 and `--mobile_header_bg_color` is #016938.
- **`{colors.primary}` #b20000:** the CTA fill (white text `{colors.on-primary}`). The site's `--button_bevel_color` is #b20000 and the hover gradient variables are rgba(178,0,0,0.84).
- **Text:** `{colors.ink}` #747474 is the most-read text (491 characters), then `{colors.ink-slate}` #525558 (386), `{colors.ink-strong}` #333333 (357, also `--link_color`), `{colors.ink-black}` #000000 (135), green #016938 as text (116), `{colors.ink-graphite}` #505152 (95), white (77) and `{colors.nav-text}` #b5b5b5 (7, the inactive-state color of the home link in the nav).
- **Neutrals:** `{colors.surface-grey}` #dfdfdf, `{colors.hairline}` #ebeaea (6 border uses), `{colors.footer-border}` #e9eaee.
- A link color #0074a2 appeared for 4 characters; its role was not identified and it is not a token.
- Semi-transparent overlay fills (#00000080, #00000026, #ffffff4d) are scrims and are excluded.

## Typography

Prompt supplies 1,483 counted characters, Kanit 135 and generic sans-serif 50. Loaded faces: Prompt 400 and 700, Kanit 700, and icon fonts (revicons, awb-icons). The site variables set `--body_typography-font-family` to Prompt with size 14px and `--h1_typography-font-size` to 34px; the measured values differ and are the ones recorded here.

- **Display `{typography.display}`:** Prompt 30px, weight 400, line-height 40px, green; measured on the hero heading "เลือกสินเชื่อจากเฮงลิสซิ่งที่ใช่สำหรับคุณ". Mobile pass: also 30px with line-height 40px, 315px wide and 86px tall (two lines).
- **Body `{typography.body}`:** Prompt 16px, weight 400, line-height 25.6px; 16px is the most frequent size (916 characters).
- **Button `{typography.button}`:** Prompt 14px, weight 400, line-height 17px, uppercase. **Secondary button:** 16px, line-height 16px.
- Other sizes counted: 18px (209), 12px (134), 14px (108), 15px, 20px, 25px, 32px and 18.6667px. Weights: 400 (1,595 characters) and 700 (73).

## Layout

The desktop page is 1280px wide with a scroll height of 3,294px. The theme variables declare `--site_width` 1100px and `--sidebar_width` 23%; the poster grid and news cards sit inside a centered container; no container width was measured on elements, so only the declared variable is cited. Sections: top strip, header, hero carousel, 4-column poster grid (two rows), full-width call-to-action banner, news carousel.

Spacing measured: 3, 5, 8, 10, 13, 15, 20, 23, 25 and 29px. The footer padding is 23px 30px 20px with a #e9eaee border.

## Elevation & Depth

Two shadows were measured: `rgba(0, 0, 0, 0.3) 3px 3px 7px 0px` (8 elements, the poster and news cards) and `rgb(204, 204, 204) 0px 1px 6px 3px` (1). Cards therefore lift off the white canvas with an offset soft shadow. The site's `--button_box_shadow` variable is none, matching flat buttons.

## Shapes

A single radius, 10px, was measured (one element). Buttons, nav items and the footer measured 0px radius (`{rounded.none}`), even though the site's `--button_border_radius` variable declares 2px; the on-page measurement is used. Posters and cards in the capture have square corners.

## Components

- **Primary button (`button-primary`):** fill `{colors.primary}`, white text, Prompt 14px uppercase, 0px radius, height 50px; label "สมัครสินเชื่อ". The hover gradient variables are rgba(178,0,0,0.84); the border color on hover is white per `--button_border_hover_color`.
- **Secondary button (`button-secondary`):** white text, Prompt 16px, 0px radius, height 50px (the fill was not recorded).
- **Nav:** `{colors.brand-green}` background; links are white on the green header and inactive/hover states shift between #b5b5b5 and white (measured on "หน้าแรก").
- **Nav link:** `{colors.ink-strong}` text in the token, Prompt 16px.
- **Footer:** white background, `{colors.ink-slate}` text, border color `{colors.footer-border}`, padding 23px 30px 20px.
- **Poster card:** portrait promotional image with the 3px/3px offset shadow; **news card:** image, date and category line in small grey text, bold heading, excerpt and a "Read More" link.

## Design System Architecture

No public design system or brand-guideline page was found, and none was searched for. The site is a WordPress theme with a large set of root custom properties (389 were captured) named like `--primary_color`, `--button_accent_color`, `--content_bg_color`, `--h1_typography-font-size`, `--site_width` and `--mobile_header_bg_color`, plus WordPress preset variables (`--wp--preset--font-size--large` 21px) and Kadence-style `--global-kb-font-size-md` and `--global-palette7` (#EDF2F7). These are framework defaults mixed with the brand's own values; only values seen on rendered elements are promoted to tokens.

## Do's and Don'ts

- Do use `{colors.brand-green}` for the header and banners, and `{colors.primary}` red only for the apply-now action.
- Do keep buttons square and 50px tall with white uppercase labels.
- Do put poster images on a white ground with the offset card shadow.
- Don't use the cookie banner, floating apply/call strip or search tools as brand components.
- Don't promote framework palette variables (#EDF2F7, #a0ce4e) as brand colors; they were not measured on screen.
- Don't round the buttons; measured radius is 0px.

## Responsive Behavior

Measured at 390px: the h1 and h2 are both 30px with line-height 40px, in green #016938, rendered 315px wide and 86px tall across two lines. Menu behavior, grid reflow and other mobile values are not measured; a `--mobile_header_bg_color` variable of #016938 is declared in the theme.

## Iteration Guide

1. Start from a white canvas, `{colors.ink}` body copy and Prompt 16px.
2. Add the `{colors.brand-green}` header and one `{colors.primary}` apply button.
3. Use the offset 3px 3px 7px shadow for cards and posters.
4. Keep headings at 30px weight 400 in green.
5. Run `node web/scripts/verify-designs.mjs --slug=heng-leasing`.
