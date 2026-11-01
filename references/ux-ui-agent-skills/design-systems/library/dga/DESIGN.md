---
version: alpha
name: Digital Government Development Agency (DGA)
category: "Thai Brands"
description: "DGA's English home page (dga.or.th/en): Prompt typeface at weights 400 to 700, orange #da3c0c headings and links with 100px-radius outlined pill buttons, grey #707070 paragraphs on white, a deep navy #1e154c footer, soft 8px-blur header shadow, built in WordPress with Elementor."
colors:
  canvas: "#ffffff"
  page-largest: "#1e154c"
  ink: "#707070"
  ink-nav: "#555555"
  ink-faint: "#999999"
  primary: "#da3c0c"
  on-primary: "#ffffff"
  orange-bright: "#f05223"
  orange-heading: "#ee5020"
  hairline: "#dbdbdb"
  surface-alt: "#fafafa"
  surface-light: "#f5f5f5"
  surface-hover: "#fff5f0"
  light-blue: "#e6f1f8"
  blue: "#1073b8"
  red: "#b82228"
  orange-light: "#ff9933"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 32px
  heading-section:
    fontFamily: Prompt, sans-serif
    fontSize: 29px
    fontWeight: 600
    lineHeight: 29px
  heading-tab:
    fontFamily: Prompt, sans-serif
    fontSize: 30px
    fontWeight: 600
    lineHeight: 30px
  heading-card:
    fontFamily: Prompt, sans-serif
    fontSize: 24px
    fontWeight: 600
    lineHeight: 24px
  heading-footer:
    fontFamily: Prompt, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 36px
  news-title:
    fontFamily: Prompt, sans-serif
    fontSize: 18.72px
    fontWeight: 400
    lineHeight: 28.08px
  subheading:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Prompt, sans-serif
    fontSize: 12.16px
    fontWeight: 700
    lineHeight: 16.416px
  nav-utility:
    fontFamily: Prompt, sans-serif
    fontSize: 11.52px
    fontWeight: 400
    lineHeight: 17.28px
rounded:
  xs: 4px
  sm: 12px
  md: 20px
  lg: 50px
  xl: 100px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 9.6px
  s8: 10px
  s9: 12px
  s10: 13px
components:
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
    rounded: "{rounded.xl}"
    padding: 7px 30px
    height: 40px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-nav}"
    boxShadow: rgba(0, 0, 0, 0.06) 0px 2px 8px 0px
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
---

## Overview

This file documents the English home page of the Digital Government Development Agency (Public Organization), known as DGA or สพร., a Thai government agency, at https://www.dga.or.th/en/ (page title "Home - สำนักงานพัฒนารัฐบาลดิจิทัล (องค์การมหาชน) สพร. หรือ DGA"). The site is bilingual: Thai and English content sit side by side, and nav controls include font-size selectors and a display-mode switch at the top.

The first screen is a dark city-and-circuit hero with the "Smart Nation Smart Life" slogan and the DGA logo inside an orange ring, six round service icons below it (Digital Government Development Plan, an Act on carrying out public service by electronic means, Thailand Digital Government Academy, Open Government Data, BizPortal, Citizen Portal), then white sections: "Digital Government in Action" with three image cards (Policy & Regulation, Standard, and a Thai cabinet resolution card), a carousel of announcement graphics, "DGA News" and "Articles" tabs, a "DGA Auditorium" shelf of awards, "DGA Books" shelf of annual reports, "DGA Express" service icons, and a navy footer with address, hotline and social icons.

The style is a government portal in orange, grey and navy: orange headings centred over white bands, orange circuit-line decorations at section edges, glossy infographic banners, photographic news cards. Copy is functional ("View More", "Hotline : 026126060", "Contact Us").

Role notes. A royal-mourning tribute overlay appeared in the first capture and the later capture shows the page without it; a tribute banner slide remains inside the announcement carousel. It is content, not a token. The extractor found no filled primary button: the only button-like role is the outlined "View More" pill, so `primary` is the orange text and border colour `#da3c0c`. A floating green LINE chat button and the cookie dialog are third-party controls and are not documented.

## Colors

Measured on the desktop pass. Text by characters: `#da3c0c` (1049), `#707070` (982), `#ffffff` (539), `#f05223` (119), `#ee5020` (94), `#1e154c` (65), `#767676` (59), `#555555` (27). Backgrounds by area: `#1e154c` (982), a `#00000047` hero overlay (659), `#ffffff` (542), `#da3c0c` (18), `#dbdbdb` (2).

- `canvas` `#ffffff`: all content sections and the header.
- `ink` `#707070`: paragraph text (news excerpts). The extractor's most-read colour is the orange `#da3c0c`, which is used for links, card titles and "View More"; it is `primary`.
- `orange-heading` `#ee5020` and `orange-bright` `#f05223`: the section headings ("Digital Government in Action", "DGA News", "DGA Auditorium" is `#f05223`).
- `page-largest` `#1e154c`: footer background (area 982); also `--main_navy` and `--sub_blue`.
- `ink-nav` `#555555`: header utility text; `ink-faint` `#999999` is `--text-faint` and the mobile nav colour.
- `hairline` `#dbdbdb`: borders (8 uses); `#c1c1c1` appears 3 times.
- `on-primary` `#ffffff`: text on orange and navy.

Declared in the shipped `:root` (site variables, not all visible on the first screen): `--main_orange` `#da3c0c`, `--main_blue` `#1073B8`, `--main_red` `#B82228`, `--main_light_orange` `#ff9933`, `--main_lightblue` `#E6F1F8`, `--main_lightwhite` `#F5F5F5`, `--surface-alt-bg` `#fafafa`, `--surface-hover` `#fff5f0`. WordPress core presets (`vivid-purple`, `pale-pink`, `luminous-vivid-orange` and others) and Swiper's `#007aff` are framework defaults, not brand colours.

## Typography

One family, Prompt (a Thai and Latin family), loaded at 400, 500, 600 and 700, with Font Awesome for icons. All 3019 measured characters are Prompt. Weights by characters: 400 (2765), 600 (141), 500 (65), 700 (48).

Probed and measured roles: section headings 29px/600 (line-height 29px) in `#f05223`, the news tab title 30px/600 in `#ee5020`, the card titles ("Policy & Regulation") 24px/600, footer headings and the hotline 24px/700 on a 36px line in white, news titles 18.72px/400 on a 28.08px line in `#da3c0c`, paragraphs and buttons 16px/400 on a 24px line (excerpts `#707070`), top nav 12.16px/700, and the utility strip 11.52px/400. The hero h1 role found by the extractor is the 32px/600 h2 "Digital Government in Action" (line-height 32px). Letter-spacing is `normal` everywhere.

Prompt is open-source on Google Fonts, so it can be loaded directly.

## Layout

A white header 107px tall carries a utility strip (font-size selector, display-mode switch, TH language, search) above the logo and a nav row (Home, About Us, Join Us, Services and Projects, Document Sharing, Annual Report). The hero is a full-width dark banner. Below, sections are centred with an orange heading on top and content in a 1120px-wide column (the heading box measures 1120px). Three equal image cards, a full-width carousel, a two-tab news area (a large feature card plus four smaller cards, then a "View More" pill), shelf images for awards and books, and a row of icon links.

The footer is navy, 767px tall, with three columns (Contact Us, SERVICE, OTHER), an orange hotline pill and a copyright line "All rights reserved 2023. Digital Government Development Agency (Public Organization) (DGA)". Paddings measured: 10px (81 uses), 5px (18), 7px (11), 30px (9), 20px (7), 22px (6); gaps 20px (16), 3px (12), 5px, 30px. The page is 5736px tall at 1280px width. Root variables include `--main_margin` 15px, `--main_hmargin` 7px and `--main_dmargin` 30px.

## Elevation & Depth

Soft, low-contrast shadows. The header uses `rgba(0, 0, 0, 0.06) 0px 2px 8px 0px` (also `--shadow-sm`). Cards and shelf items use `rgba(0, 0, 0, 0.16) 10px 5px 10px 0px` (4 uses) and one `rgba(73, 104, 126, 0.16) 0px 16px 24px 0px`. The root declares `--shadow-md` `0 8px 24px rgba(0, 0, 0, 0.12)`, `--shadow-lg` `0 8px 32px rgba(0, 0, 0, 0.18)` and `--shadow-drawer` `-4px 0 24px rgba(0, 0, 0, 0.15)`. The hero uses a dark `#00000047` overlay on photography, and decorative orange circuit lines run across section borders.

## Shapes

Rounded throughout: `50px` (14 uses), `12px` (8), `4px` (6), `50%` (5), `100px` (4) and `20px` (2). The "View More" button is a 100px pill, round icon links use 50%, image cards have rounded corners, and the nav icon links are circles (30px). Full pills are recorded as `pill`.

## Components

Outlined pill button. "View More": transparent fill, `#da3c0c` 16px/400 text, 1px `#da3c0c` border, 100px radius, `7px 30px` padding, 40px high, 144px wide.

Hotline pill. An orange `#da3c0c`-area pill in the footer holding white "Hotline : 026126060" at 24px/700.

Section heading. Centred orange 29px/600 title with orange circuit-line ornaments.

Image card. Rounded image (12px class radius measured on cards), centred 24px/600 orange label underneath.

News item. Date and view-count meta line with icons, an 18.72px orange title, a grey 16px excerpt and an orange "อ่านต่อ" link.

Tabs. "DGA News" in orange and "Articles" in dark, 30px/600 with `20px 25px` padding.

Header. White with the soft shadow; nav items 12.16px/700 in orange when active.

Footer. Navy `#1e154c` with white 16px links and 24px/700 headings.

## Design System Architecture

No public design system or brand guideline was found: the home page (opened) links no design-system, brand or GitHub page, and a request for `https://www.dga.or.th/en/brand` returned HTTP 404. The de-facto system is a WordPress theme with Elementor (class names such as `elementor-tab-title`, `elementor-heading-title elementor-size-large`, `widget-title`, `call-link`, `item__excerpt`) and WordPress block-editor presets. The theme layer sets semantic custom properties in `:root`: `--main_orange`, `--main_navy`, `--main_blue`, `--main_red`, `--text-primary` `#333`, `--text-muted` `#555`, `--text-faint` `#999`, `--surface-bg`, `--surface-alt-bg`, `--border-default` `#eee`, `--border-muted` `#e5e7eb`, `--border-subtle` `#f3f3f3` and `--overlay-backdrop` `rgba(0, 0, 0, 0.45)`. Source: https://www.dga.or.th/en/ as measured.

## Do's and Don'ts

Do use orange `#da3c0c` for links and outlines and `#ee5020` or `#f05223` for centred section headings.

Do keep paragraph text in grey `#707070` on white and finish the page with a navy `#1e154c` footer.

Do set Thai and English text in Prompt, 400 for body and 600 for headings.

Do use fully rounded pills (100px) for buttons and round icon links.

Don't use the WordPress preset colours or Swiper blue as brand colours.

Don't document the cookie dialog, the LINE chat button or the mourning overlay as brand UI.

Don't use heavy shadows; the measured ones are 6 to 16 percent black.

Don't use uppercase transforms; none were measured.

## Responsive Behavior

Measured at 390px: the h2 "Digital Government in Action" stays 32px/32px but its box is 64px tall (it wraps to two lines); body text stays 16px/24px; the nav measures 12.8px/600 in `#999999` and 52px tall. Other mobile behaviour (menu, carousels, columns) was not measured.

## Iteration Guide

1. White canvas, grey `#707070` paragraphs, orange `#da3c0c` for links and outlines, navy `#1e154c` footer.
2. Prompt only: 29 to 32px/600 headings, 18.72px/400 news titles, 16px/24px body.
3. Buttons are 40px outlined pills with a 1px orange border and `7px 30px` padding.
4. Keep shadows to the header recipe and light card shadows.
5. Re-measure the live page before using declared-only colours such as `#1073b8` or `#b82228`.
