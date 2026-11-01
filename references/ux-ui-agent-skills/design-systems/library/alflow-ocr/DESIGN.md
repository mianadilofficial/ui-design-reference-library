---
version: alpha
name: Alflow OCR
category: "Thai Brands"
description: "Alflow OCR Thai home page: deep teal #013c46 buttons and dark band, white canvas, Inter with Noto Sans Thai at 48.8px/700, 32px-radius buttons, 24px glass cards and bright teal #31cfcc accent."
colors:
  canvas: "#013c46"
  page-body: "#ffffff"
  ink: "#ffffffcc"
  primary: "#013c46"
  on-primary: "#ffffff"
  surface-slate: "#0f172a"
  ink-secondary: "#4a5859"
  ink-on-dark-muted: "#ffffffb2"
  ink-cool-grey: "#cad5e2"
  hairline: "#ffffff1a"
  ink-nav: "#111111"
  accent-teal: "#31cfcc"
  accent-mint: "#86f9b3"
typography:
  display:
    fontFamily: Inter, "Inter Fallback", "Noto Sans Thai", "Noto Sans Thai Fallback", system-ui, sans-serif
    fontSize: 48.8px
    fontWeight: 700
    lineHeight: 58.56px
    letterSpacing: "-0.976px"
  heading:
    fontFamily: Inter, "Inter Fallback", "Noto Sans Thai", "Noto Sans Thai Fallback", system-ui, sans-serif
    fontSize: 39.04px
    fontWeight: 700
    lineHeight: 46.848px
    letterSpacing: "-0.7808px"
  subheading:
    fontFamily: Inter, "Inter Fallback", "Noto Sans Thai", "Noto Sans Thai Fallback", system-ui, sans-serif
    fontSize: 31.2px
    fontWeight: 700
    lineHeight: 37.44px
    letterSpacing: "-0.624px"
  body:
    fontFamily: Inter, "Inter Fallback", "Noto Sans Thai", "Noto Sans Thai Fallback", system-ui, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.75px
  button:
    fontFamily: Inter, "Inter Fallback", "Noto Sans Thai", "Noto Sans Thai Fallback", system-ui, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 28px
  nav:
    fontFamily: Inter, "Inter Fallback", "Noto Sans Thai", "Noto Sans Thai Fallback", system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
rounded:
  xs: 4px
  sm: 6px
  md: 10px
  lg: 16px
  xl: 24px
  2xl: 32px
  3xl: 40px
  4xl: 48px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 16px 32px
    height: 60px
  link:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 20px 0px
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.ink-nav}"
    rounded: "{rounded.pill}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

# Alflow OCR

## Overview
The measured page is the Thai-language home page of Alflow OCR at alflow.co (document language `th`; page title "Alflow OCR - AI-Powered Document Transformation"). It is a product landing page for an AI document-reading service, written in Thai with English product terms. The look is a clean teal system: a near-white hero with a soft mint gradient, a deep teal (#013c46) section with a curved top edge, and rounded white cards with a pastel icon tile. The logotype "alflow" is set in lowercase teal with a bright teal "a".

Page structure from the capture: a header with the logo, links (หน้าแรก, ผลิตภัณฑ์, ราคา, นักพัฒนา, ติดต่อเรา), "เข้าสู่ระบบ" and a dark "ทดลองใช้ฟรี" pill button; a hero with a pill badge ("AI OCR อัจฉริยะ เพื่อธุรกิจยุคใหม่"), the h1 "เสกทุกเอกสารให้พร้อมใช้ เลิกเสียเวลาทำเป็นวันๆ ด้วย OCR ที่ดีที่สุด เพียง 999 บาท", three check-marked benefits, two buttons and a product mock card showing extracted fields with "98.5%" and "1.2 วินาที" chips; a dark trust section with ISO 27001 and ISO 29110 cards; a "Who is it for?" section with three cards; and a "Custom Templates" section. Part of the h1 is colored in a lighter teal for emphasis.

## Colors
- **canvas** and **primary** `#013c46`: deep teal; the fill of the hero button, the dark section and the h1 text color.
- **page-body** `#ffffff` and **on-primary**: white; the largest background (4397 area weight) and button text.
- **ink** `#ffffffcc`: translucent white text on the dark section; **ink-on-dark-muted** `#ffffffb2` for paragraphs there (373 characters).
- **ink-secondary** `#4a5859`: secondary text on white (822 characters), the site's `--color-text-secondary`.
- **ink-nav** `#111111`: navigation link color.
- **ink-cool-grey** `#cad5e2`: light blue-grey text.
- **surface-slate** `#0f172a`: dark slate background (921 area weight).
- **hairline** `#ffffff1a`: 10% white; used for glass card fills and 1px borders on the dark section.
- **accent-teal** `#31cfcc` and **accent-mint** `#86f9b3`: bright teal and mint, measured as text colors (121 and 80 characters); the teal also appears in `0 0 20px #31cfcc4d` and `0 0 40px #31cfcc80` glow shadows.
Other measured values include `#f8fafb` (a pale section background), `#e5e7eb` and `#f5f5f5` borders.

## Typography
The font stack is Inter, "Inter Fallback", "Noto Sans Thai", "Noto Sans Thai Fallback", system-ui, sans-serif. Inter loads as a variable font (100 to 900) and Noto Sans Thai at weights 400, 500 and 700, so Thai glyphs come from Noto Sans Thai. The page also declares `--font-mono` as "JetBrains Mono", "Fira Code", monospace.
- **display** 48.8px, weight 700, line height 58.56px, letter spacing -0.976px (h1).
- **heading** 39.04px / 700 / 46.848px, -0.7808px (the trust-section h2).
- **subheading** 31.2px / 700 / 37.44px, -0.624px ("ISO 27001").
- **body** 14px / 400 / 22.75px.
- **button** 18px / 600 / 28px.
- **nav** 16px / 400 / 25.6px.
Sizes by character count: 14px (991), 20px (816), 16px (673), 18px (378), 39.04px (264), 31.2px (180). Root variables include `--text-h2` 2.44rem, `--text-h4` 1.56rem and `--text-h6` 1rem, which match the measured scale.

## Layout
Measured at 1280px wide. The header is 86px tall with 20px vertical padding. The hero h1 box is 584px wide, leaving room for the product mock-up on the right. Sections alternate light and dark, with a curved boundary between the hero and the dark band. Spacing tokens (4, 6, 8, 10, 12, 16, 20, 24, 32, 40px) come from measured paddings and gaps. The site uses Tailwind: root variables such as `--container-md` 28rem and `--tw-*` appear.

## Elevation & Depth
Layers are soft and diffuse. The hero secondary buttons carry `rgba(0,0,0,0.1) 0px 16px 48px` and `rgba(0,0,0,0.08) 0px 8px 32px`; the ISO glass cards carry `rgba(0,0,0,0.25) 0px 25px 50px -12px`. `--shadow-md` is `0 4px 12px #0000000f`. Teal glows (`0 0 20px #31cfcc4d`, `0 0 40px #31cfcc80`) are measured as well. Translucent white fills (`#ffffff1a`, `#ffffff4d`, `#ffffff0d`) give frosted-glass panels.

## Shapes
Rounded to the extreme: 9999px (41 uses) for pills and circles, 32px (35) for buttons, 24px (31) for cards, then 4px, 16px, 40px, 10px and 48px. The two CTA buttons in the capture are 32px radius; the extractor's primary candidate (an anchor) measured 0px radius, but the button element with the same label measured 32px, which is what the capture shows.

## Components
- **button-primary**: teal `#013c46` fill, white text, 18px / 600, radius 32px (rounded 2xl), padding 16px 32px, height 60px, label "ทดลองใช้เลย" with an arrow.
- Outlined button: white fill, teal text, 1px `#f5f5f5` border, radius 32px, 16px 32px padding, label "ติดต่อเรา".
- **card**: translucent glass `#ffffff1a`, 24px radius, 1px `#ffffff80` border for the ISO cards (304px by 423px).
- **nav**: 20px vertical padding, teal text on the active item with an underline, `#111111` links at 16px.
- Badges: pill chips with a small icon ("AI OCR อัจฉริยะ", "ความน่าเชื่อถือและมาตรฐานสากล", "Custom Templates", "WHO IS IT FOR?").

## Design System Architecture
No public design system or brand guideline was found: /about, /brand and /press return 404 and the home page links none. The de-facto system is a Tailwind v4 build with custom properties (`--color-text-secondary`, `--text-h2`, `--font-body`, `--font-mono`, `--shadow-md`) plus Tailwind palette variables such as amber-400, orange-600, slate-900 and green-100 (utility palette, not brand tokens).

## Do's and Don'ts
- Do use `#013c46` for primary actions and dark sections.
- Do use pill or 32px radii on buttons and 24px on cards.
- Do highlight part of a headline in bright teal.
- Do pair Thai headlines with Inter and Noto Sans Thai at weight 700.
- Don't use sharp-cornered buttons.
- Don't use heavy dark shadows on light cards.
- Don't treat the Tailwind utility palette as brand colors.

## Responsive Behavior
A 390px mobile pass was measured: the h1 stays 48.8px / 700 / 58.56px (box 342px wide by 351px high), body text stays 14px / 400 / 22.75px, and the primary link is unchanged at 191px by 62px. Navigation changes and breakpoints were not measured.

## Iteration Guide
1. Use teal `#013c46` and white; add `accent-teal` for emphasis words.
2. Round buttons to 32px, cards to 24px.
3. Keep headings at 700 with slight negative tracking.
4. Use glass fills (`hairline`) only on the dark section.
5. Verify new values against `web/data/extracted/alflow-ocr.json`.

## Imagery and Voice
There is no photography in the captured area. Imagery is interface illustration: a browser-style mock card with a teal title bar and three dots, rows of extracted fields (company name, tax-id style number, amount "฿ 125,000.00", a Thai Buddhist-era date "15 พ.ย. 2567") and floating white chips that give "98.5%" accuracy and "1.2 วินาที" processing time. The trust section shows two certification badges inside frosted cards, each with a small green "รับรองมาตรฐาน" chip, the standard name set large in white bold, and a one-line Thai description. Pastel rounded-square icon tiles (mint, pale green, grey-blue) top each audience card.

Voice is direct and benefit-led in Thai, with a price anchor in the headline ("เพียง 999 บาท"). Benefits are short checklist lines (reduce repeated typing and raise data accuracy; work faster and save team effort; connect extracted data to existing systems). The trust heading promises data security "ด้วยมาตรฐาน ISO 27001 29110", with the standard numbers set in italic bright teal. The audience section asks "Alflow OCR ตอบโจทย์ใครบ้าง?" and answers with three card types: businesses burdened by document volume, accounting, sales, legal, customer-service and HR teams, and organisations starting digital transformation. English is used for product terms and small uppercase labels such as "WHO IS IT FOR?" and "Drag to Select".
