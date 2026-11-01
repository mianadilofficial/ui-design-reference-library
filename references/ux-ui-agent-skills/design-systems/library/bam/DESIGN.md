---
version: alpha
name: "Bangkok Commercial Asset Management (BAM)"
category: "Thai Brands"
description: "Thai debt-restructuring and repossessed-property site in IBM Plex Sans Thai: deep navy #044b80 bands, gold #edd311 buttons with #092c45 text at 8px radius, #444444 body ink, #f5f5f7 light sections, 32px-radius cards."
colors:
  canvas: "#ffffff"
  surface-navy: "#044b80"
  ink: "#444444"
  primary: "#edd311"
  on-primary: "#092c45"
  surface-grey: "#f5f5f7"
  ink-muted: "#595757"
typography:
  display:
    fontFamily: "\"IBM Plex Sans Thai\", \"IBM Plex Sans Thai Fallback\", system-ui, sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 72px
  display-mobile:
    fontFamily: "\"IBM Plex Sans Thai\", \"IBM Plex Sans Thai Fallback\", system-ui, sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 45px
  subheading:
    fontFamily: "\"IBM Plex Sans Thai\", \"IBM Plex Sans Thai Fallback\", system-ui, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 36px
  body:
    fontFamily: "\"IBM Plex Sans Thai\", \"Sukhumvit Set\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"IBM Plex Sans Thai\", \"IBM Plex Sans Thai Fallback\", system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  nav:
    fontFamily: "\"IBM Plex Sans Thai\", \"IBM Plex Sans Thai Fallback\", system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 6px
  sm: 8px
  md: 10px
  lg: 16px
  xl: 24px
  2xl: 32px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 28px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 24px
    height: 48px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.06) 2px 4px 12px 0px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 24px
    height: 48px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px
      1px 2px -1px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 0px 16px
  nav:
    backgroundColor: "{colors.surface-navy}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-navy}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.2xl}"
  footer:
    backgroundColor: "{colors.surface-navy}"
    textColor: "{colors.canvas}"
---

# Bangkok Commercial Asset Management (BAM)

## Overview

The measured site is bam.co.th, which redirects from the root to `/th/corporate`. The document title is "BAM ผู้เชี่ยวชาญด้านการแก้ไขหนี้ และทรัพย์สินรอการขาย" and the language is Thai. BAM is a distressed-debt and repossessed-property company, and the page presents two businesses: NPAs (ทรัพย์มือสอง, properties for sale) and NPLs (ปรับโครงสร้างหนี้, debt restructuring). The page is 8704px tall at 1280px.

The capture opens with a modal announcement over the hero: a blue square poster (the BAM logo, "BAM สำนักงานการเด้นโฮม เปิดให้บริการตามปกติ ตั้งแต่วันนี้เป็นต้นไป", a call center number and the web address) with carousel dots, a "ไม่ต้องแสดงอีกในวันนี้" checkbox and a close button. A translucent blue scrim `#004b9b66` covers the page behind it. The dialog and scrim are page chrome, not brand UI, and no scrim color is in the tokens. Under the dialog the page uses a deep-blue ground, a sub-navigation row (BAM คือใคร, บริการ BAM, ประกาศอัตราดอกเบี้ย, ภาพรวมนักลงทุน, ข่าวสาร, BAM เพื่อสังคม, พันธมิตร, คำถามที่พบบ่อย, ค้นหาสาขา), the statement "เราคือผู้นำด้านองค์กรบริหารสินทรัพย์ที่ใหญ่ที่สุดในประเทศไทย", a gold-and-outline tab selector, and a white rounded card of three headline statistics (527,000+ ล้านบาท of debt relief, 166,000+ customers helped, 58,200+ assets sold). A full-bleed photograph of a meeting follows with a gold two-line headline, then a light-grey "บริการของเรา" section with large rounded photo cards.

## Colors

Measured background areas: deep blue `#044b80` (6351), white `#ffffff` (5159), light grey `#f5f5f7` (3515), the scrim (1024, excluded), a translucent blue `#1f8bd9a3` (114) and gold `#edd311` (89). Text by characters: white (2415), `#444444` body (1683), gold `#edd311` (483, headline words on dark), blue `#044b80` (257), dark blue `#092c45` (209, text on gold buttons), `#595757` (145), `#01243c` (59), `#222222` (12), green `#23a26d` (3).

Gold `#edd311` with dark text `#092c45` is the action color: it fills the login/member button and the NPL/NPA buttons and the active tab, and tints large headline phrases on photography. The root variables confirm the naming: `--color-bam-gold: #edd311`, `--color-bam-gold-hover: #f2de4d`, `--color-bam-yellow-content: #092c45`, `--color-bam-blue: #004d83`, `--color-bam-dark-blue: #044e83`, `--color-bam-blue-mist: #eaf1f9`, `--color-bam-background-blue: #e2ecf3`, `--color-bam-divider: #e0e0e0`, `--color-bam-slate: #3f4a56`, `--color-bam-orange: #f2a95d`. The extractor's `page-largest` role is the `#044b80` navy.

## Typography

IBM Plex Sans Thai is the only family measured (5266 characters), loaded at 400, 500 and 600 with a fallback font entry and system-ui; body text lists "Sukhumvit Set" and a generic sans-serif after it.

Measured roles: h1 "OPPORTUNITIES FOR ALL" 48px at 700 with a 72px line height; h2 30px at 700; h3 24px at 600 with a 36px line height; body 16px at 400 with a 24px line height; button 16px at 600; navigation 16px at 400. The most frequent text sizes are 16px (1925 characters), 18px (1842), 30px (639), 14px (435), 20px (158) and 36px (107). Statistics numbers in the capture are rendered much larger than body text in blue.

## Layout

A navigation band of 80px height sits on the navy ground with a logo, the main items (ทรัพย์มือสอง, ปรับโครงสร้างหนี้, นักลงทุนสัมพันธ์, ติดต่อเรา, ไทย) and the gold member button. Sections are full-width bands that alternate navy, photo, and light grey, with content held in a centered column. The three-statistic card overlaps the navy band as a white rounded panel with thin vertical dividers. The footer is navy, 499px tall, with 20px bold text. Spacing steps recorded: 2, 4, 6, 8, 12, 16, 20, 24, 28 and 32px.

## Elevation & Depth

Shadows are small: `rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px` (12 uses), `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px` (4) and, on the primary button, `rgba(0, 0, 0, 0.06) 2px 4px 12px 0px`. Photo sections are layered with blue-tinted overlays instead of shadows.

## Shapes

Buttons are 8px radius (22 uses). Large containers are 24px (13 uses) and 32px (9); the card token here is 32px. Pill shapes (the 3.35544e+07px value is a full pill) occur 23 times. Other radii: 6px, 10px, 16px, and half-pill joins `16px 0px 0px 16px` and `0px 16px 16px 0px` for the segmented tab selector.

## Components

- Primary button ("เข้าสู่ระบบ / สมาชิก"): fill `#edd311`, text `#092c45`, 16px at 600, padding `0px 24px`, 48px tall, 8px radius, shadow `rgba(0, 0, 0, 0.06) 2px 4px 12px 0px`.
- Secondary button ("ปรับโครงสร้างหนี้ (NPLs)"): same gold fill and dark text, 48px tall, 8px radius, with a 1px-offset shadow.
- Language outline button ("ไทย"): white text, `1px solid #ffffff`, 8px radius, 48px tall.
- Segmented tabs: gold active segment with outlined inactive segments in the navy band.
- Card: navy fill with white text, 32px radius.
- Statistics panel: white, large rounded corners, three columns with icons.
- Footer: navy with white text.

## Design System Architecture

No public design system or brand guideline was found; the home page HTML was opened and no such link was present. The de-facto system is Tailwind CSS v4 with a bespoke token layer: the root variables include `--tw-*` utilities, `--radius-4xl: 2rem`, `--radius-control: .625rem` and a set of `--color-bam-*` brand colors (gold, blue, slate, divider, background tones). A CKEditor content stylesheet contributes `--ck-content-*` variables for article content. Brand intent is therefore expressed in named CSS variables prefixed `bam`.

## Do's and Don'ts

Do use gold `#edd311` only for actions and key highlight words, always with dark `#092c45` text. Do hold large panels in `#044b80` navy and use `#f5f5f7` for alternating light sections. Do keep numerals large and set in blue on white. Do keep button radius at 8px and big containers at 24px or 32px.
Don't put white text on gold. Don't treat the announcement dialog, its checkbox or the scrim as brand UI. Don't use pure black text; the measured body ink is `#444444`.

## Responsive Behavior

The 390px mobile pass measured: h1 30px at 700 with a 45px line height, h2 24px at 700, body text 16px at 400 and the primary button "ทรัพย์มือสอง (NPAs)" at 48px tall with `0px 24px` padding, and navigation reduced to the "ไทย" control at 16px 600 and 64px tall. Measured mobile font sizes include 16px, 14px, 18px, 24px, 20px, 36px, 30px and 28px. Layout reflow of cards and the statistics panel was not measured.

## Iteration Guide

1. Use `#044b80` navy bands, white and `#f5f5f7` sections, and `#444444` text.
2. Set IBM Plex Sans Thai: 48px headline at 700, 16px body.
3. Add gold `#edd311` buttons (8px radius, 48px tall) with `#092c45` text.
4. Round containers at 24px or 32px.
5. Measure new pages with the extractor before adding values.

### Imagery and voice

Photography is people-centered and corporate: a family on a sofa and a pair of customers with advisers for the service cards, and a boardroom meeting for the transparency statement "โปร่งใส เชื่อมั่นได้ ทุกการบริหารจัดการ" with the supporting line "มุ่งสร้างมาตรฐานใหม่ด้านการจัดการสินทรัพย์และหนี้สิน ด้วยความโปร่งใสและน่าเชื่อถือ" and a small outlined "เกี่ยวกับ BAM" button with an arrow. Icons in the statistics card are small flat illustrations in blue and gold. Microcopy is plain, reassuring Thai: "ทรัพย์มือสองที่ใช่ ในแบบที่คุณต้องการ" (the right second-hand property, the way you want it), and Thai headings are mixed with the English acronyms NPAs and NPLs and the English hero line OPPORTUNITIES FOR ALL.
