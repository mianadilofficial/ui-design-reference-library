---
version: alpha
name: Aksorn Education
category: "Thai Brands"
description: "Aksorn Education (บริษัท อักษร เอ็ดดูเคชั่น จำกัด มหาชน), Thai learning-materials publisher: Aksorn typeface, deep red #af1015 navigation band, white and #ebebeb surfaces, 8px cards with soft 1px shadow, a gradient login pill at 50px radius and colourful illustrated product banners."
colors:
  canvas: "#ffffff"
  surface-near-white: "#fefefe"
  ink: "#6d6f71"
  button-login-bg: "#efefef"
  on-primary: "#ffffff"
  primary: "#af1015"
  surface-gray: "#ebebeb"
  ink-dark: "#414042"
  ink-gray: "#6c6d6f"
  accent-red-pure: "#ff0000"
  ink-black: "#000000"
  nav-link-text: "#555555"
  card-white-50: "#ffffff80"
typography:
  display:
    fontFamily: Aksorn, Helvetica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 39.2px
  display-mobile:
    fontFamily: Aksorn, Helvetica, Arial, sans-serif
    fontSize: 22px
    fontWeight: 700
    lineHeight: 33px
  subheading:
    fontFamily: Aksorn, Helvetica, Arial, sans-serif
    fontSize: 25px
    fontWeight: 700
    lineHeight: 35px
  body:
    fontFamily: Aksorn, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 25.2px
  button:
    fontFamily: Aksorn, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Aksorn, Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 30px
rounded:
  xs: 1px
  sm: 4px
  md: 8px
  lg: 26px
  xl: 30px
  2xl: 50px
  none: 0px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 15px
  s10: 16.8px
components:
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-gray}"
    rounded: "{rounded.none}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 1px 6px 1px
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 10px 15px
  card:
    backgroundColor: "{colors.card-white-50}"
    textColor: "{colors.ink-dark}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 1px 3px 0px
  footer:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

aksorn.com is the Thai-language site of Aksorn Education Public Company Limited (บริษัท อักษร เอ็ดดูเคชั่น จำกัด (มหาชน)). The page title describes it as a source of worksheets, lesson plans and textbooks for every grade. The navigation covers About us (including "Aksorn Learning Design" and "สื่อฯ สำหรับโลกยุคใหม่", careers, contact, privacy policy), Product lists by curriculum (early childhood, basic education, English Program, vocational), Aksorn On-Learn, a Teacher Academy, seminars and training registration, downloads of teaching media and order forms, and education articles. A language switch (Thai/English), YouTube, Facebook and LINE icons and a "บัญชีอักษร" (Aksorn account) login sit in the top row.

The capture shows a content-rich, school-facing page. A white utility row holds the red-orange A-star AKSORN logo, a "Best Managed Companies" badge, the account dropdown and social icons; beneath it a deep red navigation band lists five centred links in white (early childhood, primary, secondary, Aksorn On-Learn, and "สินค้าที่สนใจ" favourites) with a hamburger icon at the right. The hero is a full-width carousel of campaign art (at capture time a Thai reading-and-writing teaching kit with a rooster mascot, and an "200 hours of plans" ribbon). Four equal columns with thin dividers show line icons in red-orange for "เกี่ยวกับเรา", "Aksorn On-Learn", "รายการสินค้า" and "บทความการศึกษา". A breadcrumb "หน้า HOME" and a centred gray heading "บอร์ดการศึกษา" (education board) introduce a masonry grid of white cards, each with a tall illustrated promo image carrying an orange "ADS" tag, a bold black title and a gray description; the artwork uses chunky red, pink and yellow Thai display lettering. Four round red shortcut buttons float at the right edge.

Voice is practical and teacher-oriented: titles name resources ("ดาวน์โหลดโครงสร้างรายวิชาพื้นฐาน", "ใบสั่งซื้อ 2568", "งบเรียนฟรี 200 บาท").

## Colors

The canvas is white (#ffffff), with `surface-near-white` #fefefe and `surface-gray` #ebebeb for panels. Body text is a mid gray `ink` #6d6f71, with `ink-dark` #414042 on card titles, `ink-gray` #6c6d6f in the navigation block, `ink-black` #000000 and pure `accent-red-pure` #ff0000 measured as text colors; nav links on white measure #555555.

The brand color is a deep crimson `primary` #af1015: the navigation band, and the red of the logo and round shortcut buttons in the capture, with white `on-primary` text. The login button is the only gradient: a measured candidate has a background gradient from orange (rgb 241,116,47) to red (rgb 185,30,35) with a #efefef fallback fill (`button-login-bg`). Translucent white (`card-white-50` #ffffff80) is the measured card background. Banner imagery supplies bright pinks, yellows and greens that are not tokens. The root stylesheet also contains Bootstrap defaults (--primary #007bff, --danger #dc3545), which are framework defaults, not Aksorn colors.

## Typography

All roles use the company face `Aksorn` with `Helvetica, Arial, sans-serif` fallbacks. The page loads Aksorn in light (300), regular and bold, and FontAwesome for icons. Measured styles: display 28px at 700 with 39.2px line height; display-mobile 22px at 700 with 33px line height; subheading 25px at 700 with 35px line height; body 14px at weight 600 with 25.2px line height; button 14px at 400 with 24px line height; navigation 18px at 400 with 30px line height. Body text is semibold, which keeps small Thai text readable over varied card backgrounds. Aksorn is a proprietary company font; Sarabun or Prompt (Google Fonts) are open substitutes, not measured here.

## Layout

The page uses a Bootstrap 4 grid (root variables declare breakpoints sm 576px, md 768px and lg 992px). Order from top: utility row, red nav band, full-width carousel, four-column icon row separated by hairline dividers, then a four-column masonry-like card grid in which cards have different heights. The measured spacing steps are 1, 2, 4, 5, 6, 8, 10, 12, 15 and 16.8px; nav links use 10px 15px padding. Space between sections is generous, with a centred heading and breadcrumb above the card board.

## Elevation & Depth

Depth is subtle but present. The navigation bar carries a soft shadow `rgba(0, 0, 0, 0.15) 0px 1px 6px 1px`, and cards carry `rgba(0, 0, 0, 0.2) 0px 1px 3px 0px`, a thin lift. The login button measured an almost invisible `rgba(0, 0, 0, 0) 0px 0px 1px 0px` shadow. Floating round shortcut buttons overlap the page edge, and the sticky navigation overlays the hero as the page scrolls.

## Shapes

Measured radii: 1px, 4px, 8px (cards), 26px, 30px, 50px (the login pill) and 0px. Cards use 8px; the nav band, nav links and footer are square. The login control is a pill; shortcut buttons are circles. The image tiles inherit the card's rounded top corners.

## Components

**Navigation**: white utility bar with a soft shadow and gray (#6c6d6f) text; a red band below holds 18px white-on-red links; nav links on white measure #555555 at 18px/400 with 10px 15px padding.

**Login button**: a 50px-radius pill, 47px tall with 14px type, white text on a gradient fill (see Colors). No flat primary button was detected.

**Card**: 8px radius, translucent white (#ffffff80) background, #414042 text, 1px-style shadow `rgba(0, 0, 0, 0.2) 0px 1px 3px 0px`, holding a promotional image, title and description.

**Footer**: white text, square corners; the footer background was not measured.

**Icon row**: line icons in red-orange with small gray labels, separated by thin vertical rules (qualitative).

## Design System Architecture

No public design system, brand guideline or press kit is linked from the pages opened (the homepage links to about-us and career pages). The de-facto system is a Bootstrap 4 theme with a custom navigation and card layer: the root stylesheet exposes Bootstrap's colour variables and breakpoints (576, 768, 992px), the type is the proprietary Aksorn font family, and icons are FontAwesome. Source: https://www.aksorn.com/?lang=th&session=0 (homepage and stylesheet as measured by the extractor).

## Do's and Don'ts

Do keep the white page, deep red navigation band and white 8px cards. Do set Thai text in Aksorn with semibold body at 14px and bold headings. Do use illustrated, colourful product banners inside plain white cards and mark promotional tiles with a small ADS label.

Don't use Bootstrap's default blue as the primary colour. Don't treat the cookie consent banner (excluded after re-extraction), the sticky header mid-hero capture artifact or the floating shortcut buttons as brand components. Don't use heavy shadows; the measured ones are 1 to 6px blurs.

## Responsive Behavior

The extraction includes a mobile pass, which produced a 22px display-mobile style versus 28px on desktop. The stylesheet root declares --breakpoint-sm 576px, --breakpoint-md 768px and --breakpoint-lg 992px. Other mobile layout values are not measured.

## Iteration Guide

Use only the frontmatter tokens. Start with a white utility row and a red nav band, add a carousel hero, an icon row and white cards with 8px radius and a thin shadow. Headings in Aksorn bold, body 14px semibold. If a flat primary button is required, measure one on the live site first. Re-run the gate after every change.

Token reference for iteration: colors are canvas #ffffff, surface-near-white #fefefe, ink #6d6f71, button-login-bg #efefef, on-primary #ffffff, primary #af1015, surface-gray #ebebeb, ink-dark #414042, ink-gray #6c6d6f, accent-red-pure #ff0000, ink-black #000000, nav-link-text #555555, card-white-50 #ffffff80. Radii are xs 1px, sm 4px, md 8px, lg 26px, xl 30px, 2xl 50px, none 0px. Spacing steps are s1 1px, s2 2px, s3 4px, s4 5px, s5 6px, s6 8px, s7 10px, s8 12px, s9 15px, s10 16.8px. Every value here is measured on the live site; anything not listed is not measured.
