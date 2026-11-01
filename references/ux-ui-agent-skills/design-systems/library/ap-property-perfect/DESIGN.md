---
version: alpha
name: Property Perfect
category: "Thai Brands"
description: "Property Perfect (pf.co.th) residential developer site, Thai-language, set in aktiv-grotesk-thai 400/500/700 with navy #003767 / #004b8d headings and actions on a white #ffffff canvas, corner-cut radii (single rounded top-left corner of 10px to 14px) and a red #ee2e24 hotline pill."
colors:
  canvas: "#ffffff"
  page-body: "#fefefe"
  ink: "#000000"
  primary: "#004b8d"
  on-primary: "#ffffff"
  surface-subtle: "#f8f8f8"
  navy: "#003767"
  ink-navy: "#003768"
  ink-muted: "#394550"
  accent-red: "#ee2e24"
typography:
  display:
    fontFamily: aktiv-grotesk-thai, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 42px
  display-mobile:
    fontFamily: aktiv-grotesk-thai, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 36px
  body:
    fontFamily: aktiv-grotesk-thai, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 27.2px
  button:
    fontFamily: aktiv-grotesk-thai, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: aktiv-grotesk-thai, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 30.6px
rounded:
  xs: 2px
  sm: 10px
  md: 14px
  lg: 22px
  xl: 24px
  2xl: 50px
  3xl: 100px
  none: 0px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 30px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 56px
  link:
    textColor: "{colors.navy}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.navy}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
---

## Overview

Property Perfect presents itself as a calm, navy-and-white residential brand. The measured homepage (https://www.pf.co.th/th/home, 1280px desktop pass, 6861px tall) opens with a transparent header over a hero image, followed by alternating half-width photographs and short Thai text blocks. The page title reads "บ้านเดี่ยว บ้านใหม่ คอนโด ทาวน์โฮม หลากหลายทำเล | Property Perfect". The capture shows the logo as a navy rectangle carrying the white "PROPERTY PERFECT" wordmark with a red underline, so navy and a single red accent are the identity pair on the page.

Photography is lifestyle-led: couples walking or sitting in landscaped estates, a white circular pavilion by a water feature, a windmill-roofed house, resort and mountain-lake aerials, and a clock-tower shophouse block. Photographs are full-bleed halves of a two-column row, not framed cards, which keeps the page airy against the white canvas. Project names appear as grey wordmark logos in a grid (PENTON, LAKE LEGEND, SIGNATURE, PERFECT MASTERPIECE, VAVILA, LAKE VILLA, PERFECT PLACE, Park, LAKE FOREST, MODI VILLA), so each sub-brand keeps its own mark while the parent supplies the frame.

The microcopy voice is warm and service-oriented Thai: "โครงการเพื่อคุณจากพร็อพเพอร์ตี้ เพอร์เฟค" (projects for you from Property Perfect) and "เลือกโครงการบ้านที่ใช่ ตอบโจทย์ทุกไลฟ์สไตล์ของคุณ" (choose the home that fits every lifestyle). The primary call to action in the extraction is "ดูโครงการทั้งหมด" (view all projects). The capture also contains a cookie notice with an accept button and a floating "ติดต่อเรา" chat pill; both are site utilities, not brand components, and no tokens are derived from them.

The hero area in the capture is blank white under a grey top gradient, so no hero imagery or hero headline was measured; this document does not describe it.

## Colors

The extraction records a white #ffffff canvas and a #fefefe body background. The most-read text color is black #000000, followed by two navies that differ by one unit, #003768 and #003767, then a slate #394550 and white #ffffff. Background area is dominated by #ffffff, with #f8f8f8 as a faint panel tone, #003767 as a navy block color, #457b9d and #004b8d in small amounts, and #ee2e24 in the smallest amount.

- **Primary navy #004b8d** is the measured fill of the detected primary button ("ดูโครงการทั้งหมด", white text #ffffff) and also appears as a 1px border on that button.
- **Navy #003767 / ink-navy #003768** carry headings, the outlined "รายละเอียด" button (text and 1px border #003767), nav links and body copy in the intro paragraphs. They are the dominant brand ink after black.
- **Ink #000000** is used for h3 project names such as "เบลล่า เดล มอนเต้ เขาใหญ่".
- **Ink-muted #394550** is a secondary slate text color measured at 531 characters.
- **Accent red #ee2e24** is the fill of a pill link labelled "1375" (white text, 24px radius, 16px/600 text), the hotline number.
- **Surface-subtle #f8f8f8** is a light panel background.

Hover is measured only on navigation links: the border color moves from #003767 to #004f93 (rgb(0, 79, 147)) and the text from white to #dbdbdb (rgb(219, 219, 219)). The swiper library's default #007aff in rootVars is a framework default and is not a brand color.

## Typography

The only family loaded is **aktiv-grotesk-thai** in 400, 500 and 700, with a long system fallback stack (-apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif). It is a grotesque with Thai support; if it is unavailable, a neutral Thai-capable sans such as Noto Sans Thai is the closest substitute for the proportions seen in the capture.

The extractor's own h1 pick ("บ้านเดี่ยว", 20px) is a tab label, so the display role uses the real section heading (h2) instead: 28px, weight 700, line-height 42px on desktop, and 24px / 36px at the 390px mobile pass. Body is 16px / 400 / 27.2px. Buttons use 20px / 400 / 28px. Navigation links are 18px / 400 / 30.6px. The most frequent sizes by character count are 16px (1239), 18px (299), 14px (245), 20px (167) and 28px (161); weights in use are 700 (1205), 400 (1136), 500 (332) and 600 (69). No letter-spacing or text-transform was recorded, so Thai text is set at normal tracking and case.

## Layout

The desktop pass is 1280px wide with 21 header links visible and up to six card columns. Rows alternate image-left and image-right at half width each, with the text block centered vertically in its half and left-aligned. Category filter chips ("บ้านเดี่ยว", "ทาวน์โฮม", "คอนโดมิเนียม", "รีสอร์ท เรสซิเดนซ์", "อาคารพาณิชย์") sit under the second heading as outlined pills, with the active chip filled navy. Spacing values in the extraction are 1, 4, 6, 8, 10, 16, 20, 24, 30 and 32px; gaps seen are 8px (33 occurrences), 32px, 24px and 16px; paddings include 16px, 48px, 24px, 72px and 30px. Navigation has 24px vertical padding and a measured height of 90px.

## Elevation & Depth

The page is almost flat. The only recorded box-shadow is a fully transparent rgba(0, 0, 0, 0) 0px 3px 3px 0px on the nav, so there is no visible elevation system. Depth comes from photography and from the grey gradient at the top of the capture, which is a header scrim over the hero and is not a token. Separation between sections is by background change (#ffffff to #f8f8f8) and by whitespace.

## Shapes

Corners are mostly square, with a distinctive one-corner treatment. The measured primary anchor has radius 0px, while a button element carries "14px 0px 0px" (only the top-left corner rounded) and the outlined button "10px 0px 0px". The border-radius census lists 0px 0px 6px, 10px 0px 0px, 22px, 2px, 14px 0px 0px, 24px, 100px and 50px. Full pills (50px to 100px) appear on filter chips and the red hotline link. Borders are thin: #003767 (8 uses), #003768, #eaeaea and #004b8d at 1px.

## Components

- **button-primary**: fill #004b8d, white text, 20px / 400, height 56px, radius 0 on the anchor form; the button-element variant measured 16px 48px 10px padding, 1px solid #004b8d and a top-left radius of 14px.
- **Outlined button** ("รายละเอียด"): 15px / 400 text in #003767, 1px solid #003767, 10px 16px 6px padding, height 39px, top-left radius 10px.
- **Navigation**: link text 18px / 400 in #003767 on the white header; hover shifts the border to #004f93 and the text to #dbdbdb. A search icon and a language globe sit at the right end of the header in the capture.
- **Filter chips**: outlined pills in navy; the active one is filled navy with white text.
- **Hotline pill**: #ee2e24 fill, 24px radius, 8px 16px padding, 16px / 600 white text.

## Design System Architecture

No public design-system or brand-guideline page was opened for Property Perfect, and the research record in SOURCES.json is {none:true}. The de-facto system visible in the shipped page is: one web-font family (aktiv-grotesk-thai), a Font Awesome 6 icon stack declared in :root (--fa-font-* variables), and the Swiper carousel library (--swiper-navigation-size 44px, --swiper-theme-color #007aff, a library default). Brand colors are not exposed as CSS custom properties in :root; they were measured from computed styles, so any rebuild should treat the navy pair #003767 / #003768, #004b8d and #ee2e24 as measured constants.

## Do's and Don'ts

- Do use navy (#003767 / #003768) for headings and #004b8d for filled actions on white.
- Do pair large lifestyle photography with short Thai copy in alternating halves.
- Do keep the red #ee2e24 for the hotline pill only.
- Do round a single top-left corner (10px to 14px) on buttons when echoing the brand's corner-cut style.
- Don't introduce additional saturated hues; the extraction shows only navy, slate, red and neutrals.
- Don't use the Swiper default #007aff or browser default link blues as brand colors.
- Don't treat the cookie banner or the floating chat pill as part of the component library.

## Responsive Behavior

Measured at the 390px mobile pass: the section heading drops to 24px / 36px, body stays 16px / 27.2px, the primary button becomes 16px / 22.4px with height 45px and width 208px, a "Toggle Menu" control is visible, 16 header links are counted, and the maximum card columns fall from 6 to 2. The mobile nav measured 20px / 700 text with 16px 0px padding and height 60px. Tablet breakpoints, hover on touch and dark mode were not measured.

## Iteration Guide

1. Start from white #ffffff, set headings in aktiv-grotesk-thai 700 at 28px / 42px in #003768.
2. Build the primary action as #004b8d with white 20px text and 56px height.
3. Add outlined secondary actions in #003767 with a 1px border and a 10px top-left radius.
4. Alternate half-width photographs with text blocks; keep project wordmarks grey and uniform.
5. Verify mobile at 390px: 24px headings, two card columns, menu toggle visible.
6. Re-measure any new section before adding tokens; do not extend the palette from screenshots.
