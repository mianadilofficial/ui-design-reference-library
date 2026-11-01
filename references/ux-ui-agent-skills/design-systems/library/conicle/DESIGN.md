---
version: alpha
name: Conicle
category: "Thai Brands"
description: "Conicle (Thai online learning platform) design system: dbHeaventRounded type with a 52px hero, white canvas, red #ff2e38 pill buttons, #fff1ef tint, #ebecf0 hairlines and 20px-radius course cards with a soft shadow."
colors:
  canvas: "#ffffff"
  ink: "#09090b"
  primary: "#ff2e38"
  on-primary: "#ffffff"
  surface-subtle: "#f7f7f8"
  surface-primary-tint: "#fff1ef"
  ink-muted: "#63666e"
  ink-soft: "#aeb2bb"
  ink-black: "#000000"
  hairline: "#ebecf0"
  primary-hover: "#de0022"
  text-input-text: "#303237"
  footer-border: "#dbdde3"
typography:
  display:
    fontFamily: dbHeaventRounded, "dbHeaventRounded Fallback"
    fontSize: 52px
    fontWeight: 400
    lineHeight: 75.4px
    letterSpacing: "-0.52px"
  display-mobile:
    fontFamily: dbHeaventRounded, "dbHeaventRounded Fallback"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 46.4px
    letterSpacing: "-0.32px"
  subheading:
    fontFamily: dbHeaventRounded, "dbHeaventRounded Fallback"
    fontSize: 25px
    fontWeight: 500
    lineHeight: 37.5px
  body:
    fontFamily: dbHeaventRounded, "dbHeaventRounded Fallback"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 39px
  button:
    fontFamily: dbHeaventRounded, "dbHeaventRounded Fallback"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
  nav:
    fontFamily: dbHeaventRounded, "dbHeaventRounded Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: dbHeaventRounded, "dbHeaventRounded Fallback"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 16px
  3xl: 20px
  4xl: 40px
  pill: 9999px
spacing:
  s1: 1.5px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 9.6px
  s8: 10px
  s9: 11px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 20px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.surface-primary-tint}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 20px
    height: 40px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    height: 23px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.3xl}"
    borderColor: "{colors.hairline}"
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(16, 24, 40, 0.04) 0px 8px 8px -4px, rgba(16, 24, 40,
      0.04) 0px 2px 8px -2px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    padding: 48px 128px 24px
    borderColor: "{colors.footer-border}"
---

# Conicle

## Overview
Conicle is a Thai online learning and corporate training platform. The page title reads "เสริมทักษะแห่งอนาคต ผ่านหลักสูตรทั้งเรียนออนไลน์, Inhouse Training | Conicle" and the hero headline is "พัฒนาทักษะให้ได้ผล ตรงจุด กับผู้เชี่ยวชาญและ AI ผู้ช่วย" with the subline "แพลตฟอร์มการเรียนรู้ให้คุณพร้อมเติบโตได้ทุกสายงาน". The top bar carries the red script logo, bilingual nav items (Home / หน้าหลัก, Skills Marketplace, Everyday Learning, DSD & CPD, Conicle for Business, each with a small Thai caption), a category dropdown plus search field, a tinted "ลงทะเบียนสำหรับองค์กร" button and a solid red "เข้าสู่ระบบ" button. The hero pairs a large rounded search bar with an "AI ค้นหา" chip, popular-search pills, and a collage of instructor photos and cartoon mascots. Below it a promotional banner carousel sits on a light pink band, followed by horizontally scrolling course-card rows each introduced by a red icon, a heading and a "ดูทั้งหมด" outlined pill. The tone is energetic, promotional and friendly: price tags in baht, mascots and bright thumbnails dominate.

## Colors
The brand color is red `#ff2e38` (the login button fill, the "ดูทั้งหมด" outline and many text accents, 1,404 characters of red text). Its hover state measured `#de0022`. A pale red tint `#fff1ef` is the secondary-button fill and the page band behind the course rows; that button's hover fill measured `rgb(255, 218, 212)`. Neutrals: ink `#09090b` for main text (8,300 characters), `#63666e` for secondary text, `#aeb2bb` for disabled/soft text, `#000000` in the nav and footer, `#f7f7f8` as a subtle grey surface, hairline `#ebecf0` on cards and `#dbdde3` on the footer border. The site publishes a large scale of custom properties: primary ramp (`--primary-100-color` `#ffdad4`, `--primary-200` `#ffb9b0`, `--primary-300` `#ff9187`), secondary blue (`--secondary-50-color` `#eef7ff` to `--secondary-900-color` `#0d3573`, `--color-secondary` `#3d87ff`), tertiary purple (`--tertiary-800-color` `#55089c`), semantic red/yellow/orange/green/blue/pink/violet ramps (for example `--semanticRed-700-color` `#ba0015`, `--semanticGreen-700-color` `#007d15`), and "journey skill" colors (`--journey-skill-2-color` `#ff4149`, `--journey-skill-4-color` `#2ff2f4`, `--journey-skill-7-color` `#ffa159`). The hero headline text is painted with a gradient from `rgb(255, 185, 34)` through `rgb(255, 81, 90)` to `rgb(255, 46, 56)` at 93 degrees, clipped to the text.

## Typography
One family is used: dbHeaventRounded (DB Heavent Rounded, with a generated fallback). It accounts for all 98,512 measured characters. The hero h2 is 52px, weight 400, line-height 75.4px, letter-spacing -0.52px. The h3 section label is 25px weight 500 with 37.5px line-height; the body role measured 26px weight 400 with 39px line-height. Buttons are 14px weight 500 with 21px line-height, nav links 16px weight 400, input text 14px. Most text on the page (93,897 characters) is 16px; other sizes are 14px, 12px, 10px, 20px, 31px and 18px. The site's own type tokens include `--font-style-heading-lg-bold` (`700 3.1rem / 1.3`), `--font-style-heading-md-reg` (`400 2.8rem / 1.3`), `--font-style-body-lg-bold` (`700 1.6rem / 1.5`) and `--font-style-title-sm-med` (`600 1.4rem / 1.5`), plus `--ds-text-display-*` sizes up to `9.5rem`. DB Heavent Rounded is a proprietary Thai typeface; Thai-capable substitutes such as Noto Sans Thai or Sarabun are needed outside the site.

## Layout
The desktop capture is 1280px wide with a 2,400px document height inside an inner scroller of 11,994px. The header is a white bar. The hero is two columns: search copy left, a photo-and-mascot collage right. The content column then runs wide with horizontal card carousels, each row showing four to five course cards with arrow buttons at the right. Footer padding measured 48px 128px 24px. Measured gaps are 8px (592 uses), 4px, 16px, 12px and 24px; paddings are 20px, 8px, 16px and 4px. The spacing scale is also published as variables (`--ds-space-xs` 8px, `--ds-space-xl` 24px, `--ds-space-2xl` 32px, `--ds-space-5xl` 64px, up to `--ds-space-12xl` 256px).

The page background is white with the pink tint band reserved for the course-row area, so the overall rhythm alternates white hero, a banner carousel, and tinted rows of cards, each row with the same heading, subtitle and outlined "ดูทั้งหมด" control.

## Elevation & Depth
Course cards use a very light two-layer shadow `rgba(16, 24, 40, 0.04) 0px 8px 8px -4px, rgba(16, 24, 40, 0.04) 0px 2px 8px -2px` (91 uses) plus a 1px `#ebecf0` border. The root variables define heavier tokens, such as `--ds-shadow-colored-semantic-red-3xl` (`0px 24px 32px -4px #ff2e383d, 0px 32px 40px -6px #ff2e383d`) and `--ds-shadow-neutral-left-4xl`, and a `--blur-lg` of 16px, but only the soft card shadow dominates the measured page. A black 50% overlay `#00000080` was measured as a large background area; it is a scrim and is not documented as a brand token.

## Shapes
Buttons are fully pill-shaped (the extractor read the radius as a huge value; `rounded.pill` is 9999px). Cards use 20px, with `20px 20px 0px 0px` on thumbnail tops; other measured radii are 8px, 12px, 4px, 16px, 40px, 50% and 100%. The radius scale is also published (`--radius-sm` .25rem, `--radius-md` .375rem, `--radius-lg` .5rem, `--radius-4xl` 2rem). Pills (search suggestions, "ดูทั้งหมด", the login button) are a hallmark; 20px cards are the second.

## Components
**button-primary**: red `#ff2e38`, white text, 14px weight 500, pill radius, padding 0px 20px, height 40px (เข้าสู่ระบบ, 94px wide); hover fill `#de0022`.
**button-secondary**: `#fff1ef` fill, red text, same shape (ลงทะเบียนสำหรับองค์กร).
**nav-link**: 16px weight 400, `#09090b`, with a smaller Thai caption beneath each English label.
**text-input**: 14px, text `#303237`, 23px high (the search field inside the large rounded search bar).
**card**: white, 20px radius, `#ebecf0` border, soft two-layer shadow; content is a thumbnail, a three-line title, provider name and price in baht.
**footer**: white, 48px 128px 24px padding, `#dbdde3` border.
The floating coupon banner, mascot and help bubble visible in the capture are promotional widgets, not tokens.

## Design System Architecture
Conicle ships a layered token system in its page CSS rather than a public site. The 400 root variables mix Tailwind-style names (`--color-gray-300`, `--radius-md`, `--spacing-lg`, `--tw-*`), shadcn-style semantic names (`--border`, `--muted`, `--popover`, `--destructive`, `--sidebar-primary`, `--chart-3`) and an in-house "ds" layer (`--ds-space-*`, `--ds-text-display-*`, `--ds-shadow-*`, `--font-style-*`, `--motion-alert-entrance: cubic-bezier(.2, .7, .3, 1.3)`). No public brand guideline or design-system page was opened or linked from the home page.

## Do's and Don'ts
- Do use `#ff2e38` for the main action and keep a tinted `#fff1ef` button for secondary actions.
- Do shape buttons and chips as pills; keep cards at 20px.
- Do set Thai text in DB Heavent Rounded at 16px for body.
- Do separate course rows with the pale pink band.
- Don't use heavy shadows; the card shadow is about 4% opacity.
- Don't document the coupon pop-up, mascot or overlay scrim as brand UI.
- Don't use the semantic ramp colors as brand fills for buttons.

## Responsive Behavior
At 390px mobile the hero headline measured 32px, weight 400, line-height 46.4px, letter-spacing -0.32px, in a 350px block (52px on desktop). The login button keeps the same size (14px, 40px high, 94px wide). Mobile font sizes by character count: 16px (93,976), 12px, 14px, 10px, 20px, 25px and 32px. The mobile header measured a white background. Breakpoint widths and menu collapse behavior were not measured.

## Iteration Guide
1. Begin with canvas `#ffffff`, ink `#09090b`, primary `#ff2e38`, tint `#fff1ef`.
2. Build pill buttons at 40px height and 14px/500 labels.
3. Use 20px-radius cards with a 1px `#ebecf0` border and the two-layer 4% shadow.
4. Reserve the amber-to-red gradient for the hero headline text.
5. Keep thumbnails bright and photographic; keep UI chrome neutral.
6. Re-run the gate after any rename.
