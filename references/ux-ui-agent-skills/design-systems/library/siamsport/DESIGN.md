---
version: alpha
name: Siamsport (สยามกีฬา)
category: "Thai Brands"
description: "Thai sports news portal on a white canvas with hot pink #fa1e5a primary, black #000000 headlines, Kanit 400/500 display type with Sarabun 14px body, Bootstrap-based layout, 8px cards with a 16px-blur shadow, 12px pink pill-ish tags and a #282828 footer."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#fa1e5a"
  on-primary: "#ffffff"
  fill-navy: "#123077"
  fill-teal: "#019881"
  ink-nav: "#111111"
  ink-muted: "#767676"
  ink-soft: "#999999"
  accent-hover: "#ff295b"
  hairline: "#dee2e6"
  link: "#212529"
  footer-bg: "#282828"
typography:
  display:
    fontFamily: Kanit, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  heading:
    fontFamily: Kanit, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28px
  subheading:
    fontFamily: Kanit, sans-serif
    fontSize: 34px
    fontWeight: 400
    lineHeight: 45px
  body:
    fontFamily: Sarabun
    fontSize: 14px
    fontWeight: 400
    lineHeight: 25.2px
  button:
    fontFamily: Kanit, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 15px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 12px
  2xl: 16px
  3xl: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 4.5px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 9.5px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 4.5px 8px
    height: 39px
  link:
    textColor: "{colors.link}"
    typography: "{typography.button}"
  nav:
    textColor: "{colors.primary}"
    boxShadow: rgba(149, 157, 165, 0.2) 0px 4px 24px 0px
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.button}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 36px 6px 12px
    height: 35px
    borderColor: "{colors.hairline}"
  card:
    textColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 8px 16px 0px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
---

## Overview

Siamsport (siamsport.co.th, the SIAMSPORT masthead) is a Thai-language sports news portal: its page title reads "SIAMSPORT ติดตามข่าวกีฬา รวมข่าวกีฬา ข่าวฟุตบอล พรีเมียร์ลีก เจลีก สดทุกชนิดกีฬา ข่าวกีฬาวันนี้". It covers foreign football, Thai football, J-League, other sports, match programs and results. The desktop measurement is 1280px wide with a 1,140px content column and 12,735px of scroll height, so the home page is a very long feed of modules.

The look is a clean editorial grid on white. A white masthead carries the pink SIAMSPORT wordmark, category navigation with dropdown chevrons, a search icon and a menu icon. Under it come large banner ad slots, a fixtures strip (kick-off times with club crests and a league selector plus a gray "โปรแกรมบอล" program button), a hero story module (one large story with photo, a big headline and a pink category tag, beside two smaller stories) and rows of four- and two-up story cards. Each card has a photograph with a Siamsport-branded overlay headline graphic, a two-line Kanit headline, a pink category pill and a date. The tone is energetic and tabloid-friendly: exclamation marks and question marks appear in the graphic overlays and headlines. A dismissible anchor ad was present at the foot of the viewport in the capture; advertising is third-party and is not documented here as brand UI.

## Colors

The canvas is #ffffff (largest background area, weight 8,716). Hot pink #fa1e5a is the brand color: it fills category tags and the measured CTA candidate (white text), colors the navigation and select text, and appears as hover text #ff295b. Text is mostly #ffffff (7,086 characters, on photos and dark fills) and #000000 (5,816, headlines), with #111111 (495), #767676 (495) and #999999 (400) for navigation and metadata, and #212529 for generic links. The hairline is #dee2e6 (73 uses), also #e5e7eb (12).

Several saturated fills were measured as background areas: #123077 (1,093), #019881 (1,080), #580160 (307, the background behind the "ชี้ 4 ตัวเต็งบอลน่าเชียร์" h2 badge), #45014b, #33027e and #2420d9 (307 each). #f0f0f0 (399) is the gray module background and #282828 (438) is the footer. The root variables include Bootstrap 5 defaults (--bs-primary #0d6efd, --bs-orange #fd7e14, --bs-success #198754); these are framework defaults, not brand colors, and are not used as tokens.

## Typography

Three families by character count: Kanit (10,587), Arial (3,462, third-party ad content) and Sarabun (404). Kanit 400 and 500 are loaded, as is Sarabun 400. The display role is the 20px weight 400 / 28px Kanit headline on story cards; the heading role is 18px weight 500 / 28px (the white title on a colored badge); the large hero headline is 34px weight 400 / 45px. Body copy in the footer description is Sarabun 14px / 25.2px. The button and navigation text is Kanit 14px weight 400 / 21px (button line-height 15px).

Sizes by characters: 18px (5,835), 14px (3,795), 20px (1,678), 16px (1,043), 22px (918), 12px (503), 11px (420), 34px (205). Weights: 400 (7,832), 500 (5,333), 300 (812), 700 (476). Only one letter-spacing was measured (11px at 0.31px, 20 characters), so type is otherwise set with default tracking.

## Layout

The container is Bootstrap-style: the body is 1,140px wide with 12px horizontal padding on a 1280px viewport. The home page stacks: masthead (93px high header), ad slot, fixtures strip, a hero module of one 2/3 story and a 1/3 column of stacked stories, a four-up card row, a two-up row and then repeated league sections (for example "ฟุตบอลต่างประเทศ" with a "ดูทั้งหมด" view-all link at right). Padding values are mostly 8px (206 uses), 4px (144), 5px (114), 12px (61), 24px (40) and 4.5px (38); gaps are 4px and 28px.

## Elevation & Depth

Shadows are used on cards and the masthead: rgba(0, 0, 0, 0.15) 0px 8px 16px 0px on 72 elements (the story cards), rgba(149, 157, 165, 0.2) 0px 4px 24px 0px on 12 (the header), a 2px #f2f2f2 ring on 10, a 1px #e6ecf0 bottom line on 9, and two small upward shadows on sticky elements (rgba(0, 0, 0, 0.4) 0px -4px 6px -3px and rgba(0, 0, 0, 0.2) 0px -1px 1px 0px). Cards lift softly off the white or #f0f0f0 background; there are no hard drop shadows.

## Shapes

The shape language is rounded. Measured radii: 8px (72 elements, cards), 12px (38, tags and pills), 16px (23), 4px (16), 50% (15, round icon buttons), 24px (12), 2px (4), 6px (2, the select) and one top-left 12px corner. The rounded tokens expose all of them. The primary tag/CTA uses 12px with padding 4.5px 8px at 39px height; the select input uses 6px; cards use 8px.

## Components

Button-primary (the pink category tag/link): #fa1e5a fill, white Kanit 14px text, 12px radius, padding 4.5px 8px, 160px wide by 39px tall in the CTA measurement. Navigation: the masthead has the pink wordmark, nav links in Kanit 14px #111111 and a 24px-blur shadow. Text-input: the league selector is a select with a white fill, #fa1e5a text, 1px solid #dee2e6 border, 6px radius, padding 6px 36px 6px 12px and 35px height. Card: transparent fill with white overlay text on photos, 8px radius, 1px solid #dee2e6 border and the 16px-blur shadow, 267px by 258px in the measurement. Gray button: "โปรแกรมบอล" fills with #6c757d and darkens on hover to rgb(92, 99, 106) (measured). Hover on category links changes the text color to #ff295b while the pink fill and #e5e7eb border stay. Footer: #282828 background, white 20px text, 392px high.

## Design System Architecture

No public design system or brand guideline was found; the home page links none and no GitHub organization is linked. The de-facto system is Bootstrap 5 plus site CSS: 154 root custom properties were measured, mostly Bootstrap's --bs-* variables, plus site variables such as --body (#111111) and --cm-video-* video-label variables, and Tailwind-style --tw-* ring variables. The icon fonts loaded are swiper-icons, slick and icomoon, indicating carousel libraries. The brand layer on top of Bootstrap is the pink #fa1e5a, Kanit and the 8px/12px radii.

## Do's and Don'ts

Do use #fa1e5a for category tags, active text and hover accents, with white text on the fill. Do keep story cards at 8px radius with the soft 16px shadow. Do set headlines in Kanit, black on white. Do show date and category on every card.

Don't use Bootstrap's blue #0d6efd or other --bs-* defaults as brand colors. Don't treat advertising slots, Google Ads units or the sticky anchor ad as brand UI. Don't add heavy shadows or hard borders beyond the #dee2e6 hairline. Don't use Arial for content; it was measured only inside third-party ad creatives.

## Responsive Behavior

A mobile pass recorded role sizes: h1 20px / 28px Kanit, body Sarabun 14px / 25.2px, navigation Kanit 14px / 21px and CTA Kanit 14px / 15px, i.e. the same sizes as desktop. Mobile character usage is led by 18px (5,533), 14px (2,478), 16px (1,400), 22px (918) and 20px (913). Mobile layout, column counts, breakpoints and menu behavior were not measured.

## Iteration Guide

Rebuild in order: masthead with pink wordmark and nav, fixtures strip with the league select, hero module, four-up card rows, league sections with view-all links, then the #282828 footer. Use canvas #ffffff, primary #fa1e5a, ink #000000, Kanit and the 8px card radius with its shadow. Check hover with the measured states above. Dark mode, tablet breakpoints and any behavior not in web/data/extracted/siamsport.json are not measured.
