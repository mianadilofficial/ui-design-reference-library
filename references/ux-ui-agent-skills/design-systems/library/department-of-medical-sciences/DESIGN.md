---
version: alpha
name: Department of Medical Sciences (DMSc)
category: "Thai Brands"
description: "Thai Ministry of Public Health science department portal at dmsc.moph.go.th: Noto Sans Thai 14px body and 34-36px weight 600 headings, navy #01377d with green #209972 fills, square buttons with an 18px cut corner, 10.8px cards with a 30px 60px soft shadow."
colors:
  canvas: "#ffffff"
  ink: "#707070"
  primary: "#209972"
  on-primary: "#ffffff"
  surface-green: "#209972"
  surface-soft: "#f9f9f9"
  ink-body: "#666666"
  navy: "#01377d"
  ink-strong: "#333333"
  hairline: "#dedede"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 36px
    fontWeight: 600
    lineHeight: 43.2px
  display-mobile:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 28px
    fontWeight: 600
    lineHeight: 33.6px
  heading:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 34px
    fontWeight: 600
    lineHeight: 51px
  body:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  link:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
  button-secondary:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 54px
rounded:
  xs: 2px
  sm: 4px
  md: 5px
  lg: 6px
  xl: 8px
  2xl: 10.8px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 25px
  s9: 30px
  s10: 35px
components:
  button-secondary:
    textColor: "{colors.navy}"
    typography: "{typography.button-secondary}"
    padding: 0px 10px
    height: 54px
    clipPath: polygon(0px 0px, 100% 0px, 100% 100%, 18px 100%, 0px calc(100% - 18px))
  link:
    textColor: "{colors.navy}"
    typography: "{typography.link}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-body}"
    rounded: "{rounded.2xl}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 30px 60px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.navy}"
---

## Overview
The measured page is https://www.dmsc.moph.go.th/th/home, titled "หน้าแรก - กรมวิทยาศาสตร์การแพทย์ กระทรวงสาธารณสุข" (Department of Medical Sciences, Ministry of Public Health), lang th. The URL given in the queue was the department's domain; the final measured address redirects to the Thai home path. The page reads as a public-health science portal: a white header with the department crest and bilingual name (Thai and "Department of Medical Sciences / Ministry of Public Health"), a green-filled "หน้าหลัก" active nav tab with a navy gradient, a full-width campaign carousel (the capture shows a pink prenatal-screening poster), a row of five outlined navy shortcut buttons with a clipped lower-left corner (บริการประชาชน, งานวิจัย, การแพทย์, การเปิดเผยข้อมูล, ระบบออนไลน์), three rows of five white service cards over a pale blue-green gradient wash, a "งานวิจัยและนวัตกรรม / Research & Innovation" block with large statistic numbers, and coloured statistic panels for Invention, Innovation and Technology in blue-to-green gradients. A cookie-consent banner with "ยอมรับ" and "ปิด" buttons shows in the first capture; the project extractor was re-run and recorded `consentOverlaysHidden: ["layout-header"]`, and consent buttons are not documented as brand UI. Copy is bilingual: Thai headings with English subtitles beneath, in a formal, informative voice.

## Colors
Canvas is {colors.canvas} (#ffffff, area weight 2663). Text greys dominate by character count: #707070 (2292, the generated ink), #666666 (1878, ink-body, used in card text and body copy), and #333333 (396). Navy #01377d (597 characters) is the heading and outline-button color: the measured h1, the h2 "งานวิจัยและนวัตกรรม" and the outlined shortcut buttons all use it. Green #209972 is the most-used filled brand surface (weight 687) and also appears as text (197 characters). I reassigned `primary` from the generator's #007bff to #209972: #007bff is the Bootstrap default link color (the site declares Bootstrap-style variables such as --white, --red, --success, --gray-dark) and is not a brand color; it was measured only on the Thai/Eng language links and the page-wide link. The measured hover on the "ดูทั้งหมด" link shows a Bootstrap-hover blue (rgb 0,105,217), which is also a framework default and is not documented as brand. Soft surfaces are #f9f9f9 and #f8f8f8; hairline borders are #dedede. White (#ffffff, 883 characters) is the text color on green and gradient panels. The mobile pass measured a footer button fill of #2ab170 with white text.

## Typography
One text family: "Noto Sans Thai", sans-serif (variable 100-900), plus Material Symbols Rounded and Material Icons for glyphs. Sizes by character weight: 16px (2255 mobile / 2967 earlier), 14px, 18px (949), 15px, 22px, 13px. Weights: 400 (5926), 600 (766), 700 (124), 900 (13). Tokens: display 36px / 43.2px weight 600 (the measured h1 "แผนผังเว็บไซต์", navy); heading 34px / 51px weight 600 (h2 "งานวิจัยและนวัตกรรม"); body 14px / 21px weight 400 in #666666; nav 20px / 26px; secondary button label 18px / 54px. On the 390px mobile pass the display becomes 28px / 33.6px weight 600. The site declares size variables --typo-xl 34px, --typo-sm 22px and --typo-xs 18px, matching the measured sizes, and --fw-regular 400 and --fw-bold 600. Noto Sans Thai is an open font, so no substitute is required.

## Layout
Page width 1280px, scroll height 4988px. Content uses a roughly 1120px wide container (the h1 measured 1120px wide). The shortcut buttons run five across, 222px wide each in the measurement of the first one; service cards also run five across at 222px by 200px. The site declares --breakpoint-xl 1200px. Spacing tokens: 4, 5, 10, 12, 15, 16, 20, 25, 30, 35px. Sections alternate between the white canvas, a pastel gradient wash behind the service grid, and full-bleed gradient statistic panels.

## Elevation & Depth
Service cards use a very soft, large shadow `rgba(0,0,0,0.1) 0px 30px 60px 0px`; a second shadow `rgba(0,0,0,0.19) 0px 0px 10px 0px` was also measured. The cards have no border and rely on that diffuse shadow against the pastel gradient. Elsewhere surfaces are flat.

## Shapes
Radii measured by weight: 50% (29, circular icon holders and carousel dots), 10.8px (15, cards), 4px (5), 6px, 5px, 8px. Tokens: xs 4px, sm 5px, md 6px, lg 8px, xl 10.8px, pill 9999px. The outlined shortcut buttons are distinctive: radius 0px with a clip-path `polygon(0px 0px, 100% 0px, 100% 100%, 18px 100%, 0px calc(100% - 18px))`, which cuts the lower-left corner at 18px.

## Components
Button-secondary (outlined): navy #01377d text on transparent, 1px outline, 18px label, 54px high, 0 10px padding, with the 18px cut lower-left corner. The filled variant used for "หน้าหลัก" and "ดูทั้งหมด" is green (#209972) with white text and the same clipped corner in the capture; its numeric style was not extracted as a role, so only the color is claimed. Card: white fill, 10.8px radius, 30px/60px diffuse shadow, 15px / 22.5px #666666 label under a line icon, 222px by 200px. Nav: white bar, grey #999999 links, active tab filled. Footer: navy text on canvas in the token output. Language links Thai and Eng use the browser/framework blue and underline on hover (rgb 0,86,179) and are treated as framework defaults.

## Design System Architecture
No public design system or brand guideline was found; the home page was captured but not read for guideline links beyond the extraction. The shipped CSS declares a Bootstrap 4 style variable set on :root (--white, --light #f8f9fa, --gray-dark #343a40, --yellow #ffc107, --pink #e83e8c, --indigo #6610f2, --red #dc3545, --success #28a745, --breakpoint-xl 1200px, --font-family-sans-serif) plus Fancybox variables (--f-button-bg #f8f8f8, --f-button-height 40px, --f-button-border-radius 0), and its own --typo-* and --fw-* variables. These framework colors (yellow, pink, indigo, red, success) are not brand colors and are not used as tokens. The brand layer is the navy #01377d and green #209972 pair, the Noto Sans Thai type scale and the clipped-corner buttons.

## Do's and Don'ts
Do pair navy #01377d headings with green #209972 fills and white labels. Do use Noto Sans Thai at 14px body and 34px to 36px weight 600 headings. Do cut the lower-left corner of buttons with an 18px diagonal. Do show services as icon cards with 10.8px radius and soft diffuse shadow. Don't treat the Bootstrap blue #007bff or its hover as brand colors. Don't document the cookie banner buttons, carousel dots or the pink campaign poster as system components. Don't add rounded pill buttons; measured buttons are square with the clipped corner.

## Responsive Behavior
The 390px mobile pass measured: h1 28px / 33.6px weight 600 in #01377d; body 14px / 21px #666666; a footer button "แผนผังเว็บไซต์" 360px wide and 44px high with #2ab170 fill, white 14px text and 15px 0 padding; the nav role was not found. Font sizes by character weight on mobile were 16px, 14px, 18px and 13px. Column counts and menu behaviour on mobile were not measured.

## Iteration Guide
1. Canvas #ffffff, ink #707070 (body copy #666666), headings and outlines #01377d, fills #209972. 2. Noto Sans Thai: 14px body, 18px buttons, 34-36px headings weight 600, with English subtitles beneath Thai titles. 3. Cards at 222px by 200px, 10.8px radius, 30px/60px soft shadow, over a pale gradient. 4. Buttons square with an 18px cut lower-left corner. 5. Ignore the cookie banner and framework blues. 6. The filled button typography, focus states and dark mode were not measured; measure before relying on them.
