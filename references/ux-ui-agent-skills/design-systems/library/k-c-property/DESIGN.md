---
version: alpha
name: K.C. Property
category: "Thai Brands"
description: "K.C. Property (kcproperty.co.th) Thai residential developer site in Prompt weight 300: teal #32bcad brand accent and hover, orange #f2ad48 2px outlined Readmore buttons with 10px radius, near-black #222222 text on white #ffffff with #f5f5f7 section backgrounds and 6px shadowed project cards."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f5f7"
  ink: "#222222"
  primary: "#32bcad"
  on-primary: "#222222"
  surface-grey: "#f5f5f5"
  ink-black: "#000000"
  ink-heading: "#212121"
  ink-muted: "#71767f"
  ink-navy: "#1d2e38"
  accent-orange: "#f2ad48"
typography:
  display:
    fontFamily: Prompt
    fontSize: 20px
    fontWeight: 300
    lineHeight: 26px
  display-mobile:
    fontFamily: Prompt
    fontSize: 20px
    fontWeight: 300
    lineHeight: 26px
  nav:
    fontFamily: Prompt
    fontSize: 16px
    fontWeight: 300
    lineHeight: 20.8px
  body:
    fontFamily: Prompt
    fontSize: 14.4px
    fontWeight: 300
    lineHeight: 23.04px
  link:
    fontFamily: Prompt
    fontSize: 14px
    fontWeight: 300
    lineHeight: 22.4px
  input:
    fontFamily: Prompt
    fontSize: 18px
    fontWeight: 300
    lineHeight: 23.4px
rounded:
  xs: 2px
  sm: 3px
  md: 5px
  lg: 6px
  xl: 10px
  2xl: 20px
  3xl: 44px
  4xl: 50px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4.2px
  s4: 5px
  s5: 6px
  s6: 7.2px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 12.6px
components:
  button-secondary:
    textColor: "{colors.ink-black}"
    typography: "{typography.link}"
    rounded: "{rounded.xl}"
    padding: 10px 20px
    height: 46px
    borderColor: "{colors.accent-orange}"
  link:
    textColor: "{colors.ink-black}"
    typography: "{typography.link}"
    rounded: "{rounded.xl}"
    padding: 10px 20px
    borderColor: "{colors.accent-orange}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 6px
    height: 37px
  footer:
    textColor: "{colors.ink}"
---

## Overview

The measured homepage (https://www.kcproperty.co.th/, page title "บริษัท เค.ซี.พร็อพเพอร์ตี้ จำกัด (มหาชน)", document language en-US) is the corporate and sales site of K.C. Property, a Thai developer of detached houses, townhomes, commercial buildings and rental offices. The capture shows a white 70px header with a teal "KC PROPERTY" logo at left and a long Thai/English navigation ("โครงการ KC", "โปรโมชั่น", "ข่าวและกิจกรรม", "นักลงทุนสัมพันธ์", "เสนอขายที่ดิน", "ร่วมงานกับ เค.ซี.", "ติดต่อเรา", "EN" and a search icon). A full-width carousel banner follows with seven dots; the visible slide is an illustrated home-office townhouse poster for "K.C. SUWINTHAWONG 2" with architectural callouts for floors and a sales-office phone line.

Under the banner, the heading "โครงการแนะนำ" (featured projects) is centered with a short orange rule, then a grid of six project cards in two rows of three. Each card has a rendered exterior at the top, a colored project strip across the bottom of the image (olive, tan, salmon, dark green, grey-blue, terracotta) carrying the project name and a small starting-price or area line, tiny bedroom/bath/parking icons, a bold Thai product name ("บ้านเดี่ยว 2 ชั้น", "บ้านเดี่ยวชั้นเดียว", "อาคารพาณิชย์ 3 ชั้น", "ทาวน์โฮม 2 ชั้น"), a location line, and a "Readmore" button with an orange outline. The voice is plain and listing-like. A cookie settings dialog ("ศูนย์ตั้งค่าความชอบส่วนตัว") with outlined and filled blue buttons overlays the banner and a teal circular chat control with a "ติดต่อเรา" label floats at the right; both are site utilities and are excluded from the tokens, along with the blue #1863dc used by the cookie dialog.

## Colors

Measured background area is #f5f5f7 (1124, the largest area), #ffffff (260), #f5f5f5 (72), black (26), the cookie dialog's blue #1863dc (9), #253b48 (7), #e8e8e8 (7) and teal #32bcad (4). Text is #222222 (1039 characters), black (357), #212121 (198), white (145), grey #71767f (123), navy-slate #1d2e38 (89), #111111 and #636363. Borders are #f2ad48 (7), plus #f4f4f4 and #e6e6e6.

- **Primary teal #32bcad**: the brand accent. Navigation links turn teal on hover (rgb(50, 188, 173), text and border), and the same teal fills the floating chat control. The on-primary token #222222 is the measured text color on that control and equals the ink color.
- **Ink #222222**: body and navigation text; **ink-black #000000** on the Readmore buttons; **ink-heading #212121** for card titles; **ink-muted #71767f** for secondary lines; **ink-navy #1d2e38** for dark slate text.
- **Accent orange #f2ad48**: 2px borders on "Readmore" buttons and the short rule under the "โครงการแนะนำ" heading.
- **Surfaces**: #f5f5f7 page sections, #f5f5f5, and white cards.

The project-strip colors in the card images are illustration and are not tokens.

## Typography

Prompt is the only family, loaded in 300, 400, 600 and 700; it is a Thai and Latin sans. Almost everything is weight 300. Roles: section heading and h2 news titles 20px / 300 / 26px (the same at the 390px mobile pass), navigation 16px / 300 / 20.8px, body 14.4px / 300 / 23.04px, link and button text 14px / 300 / 22.4px, input text 18px / 300 / 23.4px. The cookie dialog title measured 18px / 700, a utility style. The extractor's h1 pick was a navigation label ("โครงการ KC"), so display uses the real h2 values instead.

## Layout

The desktop pass is 1280px wide with 22 header links counted and up to nine card columns (carousel items included). The project grid is three columns inside a centered container; cards are white on a #f5f5f7 band. The header is 70px high. Spacing steps recorded: 1, 3, 4.2, 5, 6, 7.2, 8, 10, 12 and 12.6px; the Readmore button has 10px 20px padding and is 46px high. The footer is 298px high and contains the main link list in 14.4px / 700 text.

The page reads top to bottom as: header, banner carousel, featured projects grid, then further content bands (news and activities appears in the lower part of the capture on a grey band) and the footer. Because nearly every text style is weight 300, hierarchy comes from size, color and spacing: 20px headings against 14.4px body, black Readmore labels against slate body text, and the orange outline as the only warm interactive cue. Teal is reserved for hover and the logo in the capture, which keeps the palette to teal, orange and neutrals.

## Elevation & Depth

Box-shadows recorded: rgb(221, 221, 221) 0px 0px 15px 2px (6 occurrences, the soft halo around project cards), rgba(172, 171, 171, 0.3) 0px -1px 10px 0px, rgba(0, 0, 0, 0.15) 0px 4px 12px 0px (on the chat control) and rgba(2, 2, 3, 0.2) 0px 10px 30px 0px. Cards therefore float on a faint grey halo rather than a hard border.

## Shapes

The radius census lists 5px (9), 100px (9), 10px (8), 50px (7), 6px, 2px, 3px, 44px, 50% and 20px. Readmore buttons are 10px; text inputs are 3px; the cookie dialog uses 6px; chat and circular controls use 50%. Project cards in the capture have lightly rounded corners and square image tops.

## Components

- **button-secondary / link** ("Readmore"): transparent, black 14px / 300 text, 2px solid #f2ad48 border, 10px radius, padding 10px 20px, 46px high.
- **nav**: white 70px bar, #222222 16px / 300 links, teal on hover.
- **text-input**: #222222 18px / 300, 3px radius, 37px high, padding 6px.
- **Project card**: white, soft grey halo, image with colored name strip, icon row, bold Thai product name, location, Readmore button.
- **Footer**: link list in #222222.

No primary filled button was detected on the page: the only filled teal element is the floating chat control, which is a utility and not declared as button-primary.

## Design System Architecture

No public K.C. Property design-system or brand-guideline page was opened; the research record is {none:true}. The shipped page is a WordPress build: :root carries --wp--preset--* values and a few theme variables (--s-gap 16px, --s-bg-2 #f5f5f7, --s-color-3 #47be9d, --wp--preset--color--text-2 #71767f, --wp--preset--color--color-4 #67D88F). The WordPress presets vivid-purple and pale-pink are defaults and are not brand colors. The measured teal #32bcad is the brand color used on hover and the chat control; --s-color-3 #47be9d is a different, unmeasured-in-use variable and is not tokenized.

## Do's and Don'ts

- Do use Prompt at weight 300 for nearly all text, with 20px headings.
- Do outline secondary actions in orange #f2ad48 (2px, 10px radius) with black text.
- Do use teal #32bcad for hover and accent states.
- Do present projects as white cards with a soft grey halo on #f5f5f7.
- Don't use the cookie dialog's blue #1863dc as a brand color.
- Don't treat the chat control or cookie dialog as brand components.
- Don't use WordPress preset colors.

## Responsive Behavior

Measured at 390px: the h2 stays 20px / 300 / 26px, body is 14.4px / 300, four header links are visible (22 on desktop), the maximum card columns are 7 as counted by the extractor, no menu toggle was detected, and the chat control stays 60px high with a 50% radius. The mobile "ติดต่อเรา" control measured 15px / 300 with 6px 10px padding. How the long navigation collapses is not measured; tablet widths and dark mode are not measured.

## Iteration Guide

1. White canvas with #f5f5f7 bands; Prompt 300 at 14.4px body, 20px headings.
2. Navigation at 16px with teal hover.
3. Project cards with a soft grey halo and bold Thai product names.
4. Readmore buttons: black text, 2px orange border, 10px radius.
5. Keep chat and cookie widgets out of the design tokens.
6. At 390px keep type sizes and reduce visible nav links.
