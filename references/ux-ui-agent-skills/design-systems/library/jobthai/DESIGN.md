---
version: alpha
name: JobThai
category: "Thai Brands"
description: "Thai job board JobThai: white canvas with pale grey surfaces (#f0f2f5, #f6f7fb), near-black ink #222222, brand orange #fe6d43 with square 40px buttons, Sarabun and Prompt Thai fonts at 16px and 20px labels, 4px base radius and 1px #dedede outlines."
colors:
  canvas: "#ffffff"
  ink: "#222222"
  primary: "#fe6d43"
  on-primary: "#ffffff"
  surface-2: "#f0f2f5"
  surface-3: "#f6f7fb"
  ink-2: "#686868"
  ink-5: "#dedede"
  card-border: "#0000001a"
typography:
  display:
    fontFamily: Prompt-SemiBold
    fontSize: 20px
    fontWeight: 400
  heading:
    fontFamily: Sarabun
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  subheading:
    fontFamily: Sarabun
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Prompt
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: >-
      -apple-system, "system-ui", "Segoe UI", "PingFang SC", "Hiragino Sans GB", "Microsoft YaHei", "Helvetica Neue", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 2px
  sm: 4px
  md: 5.6px
  lg: 6px
  xl: 6.36px
  2xl: 7.2px
  3xl: 8px
  4xl: 8.4px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 40px
  button-secondary:
    backgroundColor: "{colors.ink-2}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 40px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.4xl}"
    borderColor: "{colors.card-border}"
---

## Overview

JobThai (https://www.jobthai.com/) is a Thai-language job board; its page title reads "JobThai - งาน หางาน สมัครงาน อัปเดตงานคุณภาพทุกวันจากบริษัทชั้นนำทั่วไทยและต่างประเทศ". The measured page is 1280px wide and 8847px tall with 2705 visible elements, making it one of the densest pages in this set. The extraction noted a "cookie-dim" overlay and hid it, and the capture shows the page without a popup.

The header is white with a 2px-high orange rule beneath it; the orange "Jobthai" wordmark sits at left and the nav at right reads หางาน (active, orange), ฝากประวัติ, สมัครสมาชิก, เข้าสู่ระบบ, สำหรับบริษัท and a "TH" language switcher. Below it is a left-hand search panel (transport-line shortcut icons for BTS/MRT, rail and others, a location select, a job-type select with a "1 / 5" counter, radio options "Hybrid Work" and "Work from Home", a keyword field and a small orange "ค้นหา" button) beside a headline count "งานทั้งหมด 120,478 อัตรา" with an illustrated Bangkok skyline strip, a "POPULAR SEARCH" row of grey chips (Hybrid Work, AI Jobs, "งานเงินเดือน 100K+") and a large promotional carousel.

The page then stacks full-width sections with uppercase English labels set in Prompt SemiBold: "TOP COMPANIES" (a carousel of company cards with a hero photo, name and an urgent-hiring line), an employer banner carousel, "URGENT JOBS" (two columns of rows, each a bold Thai title, a grey description and a square logo tile at the row's end) and a salary-trends promo strip with an orange pill "ดาวน์โหลด". Copy is promotional and urgent ("ด่วน! หลายอัตรา", "Click!"), and imagery is employer-supplied, so the page reads as a marketplace of many brand voices held together by an orange and grey shell.

## Colors

- **canvas #ffffff** is the main background (weight 16141).
- **surface-2 #f0f2f5** (5120) and **surface-3 #f6f7fb** (3463) are the pale grey page background and chip/panel fills; #e9eaed (694) is a further light grey.
- **ink #222222** is the main text color (7617 weighted characters), **ink-2 #686868** is secondary text and the fill of the secondary button (1948), and **ink-5 #dedede** is the hairline grey used for borders (479 border weight) and divider lines.
- **primary #fe6d43** is the JobThai orange (search button fill, active nav, links, the header rule and shadow color); **on-primary #ffffff** is the text on it. The root variable `--antd-wave-shadow-color` is also #fe6d43, tying the Ant Design wave effect to the brand orange.
- **card-border #0000001a** is a 10%-alpha black used for card outlines.

Also measured: #fff5f0 (a pale orange tint, small area), #1877f2 (a Facebook blue from a social element, not a brand color) and a #00000080 scrim (the overlay, excluded).

## Typography

Three families: "Sarabun" (loaded at weight 300; 7861 weighted characters) is the reading face for lists, descriptions and chips; "Prompt" (400, 1876) is used on buttons and nav; "Prompt-SemiBold" (600, 111) is a separate family name used for section labels. A fourth face, "Superstore-Book", is loaded but not measured on visible text. Weight is chosen by family: the display token is Prompt-SemiBold at fontWeight 400.

- **display** Prompt-SemiBold 20px (uppercase English section labels such as "POPULAR SEARCH"); mobile 20px as measured.
- **heading** Sarabun 16px / 24px, weight 500 (chip and card headings such as "Hybrid Work").
- **subheading** Sarabun 16px / 24px, weight 400.
- **button** Prompt 16px / 24px, weight 400.
- **link** a system sans stack (-apple-system, system-ui, Segoe UI, PingFang SC, Hiragino Sans GB, Microsoft YaHei, Helvetica Neue, Arial) at 14px / 21px, used for the orange links; it is the framework default stack and appears as a link style only.


## Layout

A centered content column inside the 1280px viewport (column width not measured), with a left-hand search column and a right-hand promotional column at the top, then single-column sections. Section titles are uppercase labels followed by carousels with pagination dots (orange for active) or two-column list rows.

Spacing tokens measured: 2px, 4px, 5px, 6px, 8px, 10px, 12px, 14px, 16px and 20px. The h1-style label has 20px top padding; chips use 6px 8px padding. Buttons are 40px high.

## Elevation & Depth

Shadows are rare: rgb(254, 109, 67) -1px -1px 20px 0 (an orange glow, 1 use) and rgba(0, 0, 0, 0.16) 0px 3px 6px 0 (1 use). Separation is made with 1px #dedede borders (479 weight) and the pale grey surfaces; employer cards are outlined rather than lifted.

## Shapes

Radii measured: 4px (weight 396, by far the most common), 8px (111), 7.2px (40), 8.4px (25), 8px 8px 0 0 (25, the top of image cards), 6px (8), 5.6px (7), 2px and 50%. Tokens: xs 2px, sm 4px, md 5.6px, lg 6px, xl 6.36px, 2xl 7.2px, 3xl 8px, 4xl 8.4px, none 0px, pill 9999px. The main button measures 0px radius in the extraction while chips and outlined buttons use 4px to 6px; company cards use 8.4px.

## Components

- **button-primary**: orange (#fe6d43) fill, white Prompt 16px text, 0px radius, 40px height ("ค้นหา").
- **button-secondary**: #686868 fill, white text, 0px radius, 40px height ("อัตราโฆษณา").
- **outlined chip/button**: Sarabun 500 16px, #222222 text, 1px solid #dedede border, 4px radius (for example "สาย 1", "Hybrid Work" chips on #f6f7fb with 6px radius).
- **link**: orange 14px.
- **card**: white, 8.4px radius, 10%-alpha black border; company cards have a photo at the top with 8px top corners.
- **pagination dots**: orange active, grey inactive (seen in the capture; sizes not measured).

Hover was recorded on a company card: the link keeps its text color and its border color is the brand orange rgb(254, 109, 67).

## Design System Architecture

No public design system for JobThai was found; the home page links to none, so none is cited. The only custom property on the page root is `--antd-wave-shadow-color: #fe6d43`, which shows that the Ant Design component library (its click-wave effect) is in use and is themed to the brand orange. Beyond that, the system is de-facto: three font families by role (Sarabun for reading, Prompt for controls, Prompt-SemiBold for labels), an orange and grey palette, and a 4px base radius. Source: the measured root variables in web/data/extracted/jobthai.json from https://www.jobthai.com/.

## Do's and Don'ts

- Do keep the shell white and grey (#ffffff, #f0f2f5, #f6f7fb) and use the orange #fe6d43 sparingly for action and active state.
- Do set reading text in Sarabun and controls in Prompt; use Prompt-SemiBold for section labels.
- Do outline items with 1px #dedede and 4px radius.
- Do separate sections with uppercase English labels over Thai content.
- Do keep the header's orange rule.
- Don't use the Facebook blue or the cookie-dim scrim as brand color.
- Don't round the main search button; the measured radius is 0px.
- Don't apply heavy shadows; the measured ones are single glows.

## Responsive Behavior

Measured in the 390px mobile pass: the label heading is 20px (same as desktop) and no body size was recorded. The mobile layout of the two-column search area, nav and carousels was not measured.

## Iteration Guide

1. Start with #ffffff and #f0f2f5 backgrounds, #222222 text and #686868 secondary.
2. Use Prompt-SemiBold 20px uppercase labels over Sarabun 16px content.
3. One orange button, 40px high, square corners.
4. Chips: #f6f7fb fill, 6px radius; cards: 8.4px radius with a faint border.
5. Spacing from the ten measured steps.
6. Run `node web/scripts/verify-designs.mjs --slug=jobthai`.
