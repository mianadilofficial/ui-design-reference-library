---
version: alpha
name: Food World
category: "Thai Brands"
description: "Food World (foodworld.in.th) is CPF's Thai food-court and catering service site: white canvas, warm brown #665c53 text, lime #d5e03c headings, orange #ff9d24 pill buttons, Kanit and Prompt type with a 96px hero, and soft 32px and 50px rounded brown cards."
colors:
  canvas: "#ffffff"
  ink: "#665c53"
  primary: "#ff9d24"
  on-primary: "#ffffff"
  surface-mist: "#f4f7f1"
  surface-cream: "#fafbeb"
  ink-body: "#212529bf"
  ink-olive: "#676c53"
  accent-lime: "#d5e03c"
  hairline: "#3aa25c26"
  link: "#5e5043"
  card-bg: "#675c53"
  brand-green: "#3aa25c"
  brand-green-dark: "#2f7f49"
  brand-yellow: "#f6eb61"
typography:
  display:
    fontFamily: Kanit, sans-serif
    fontSize: 96px
    fontWeight: 500
    lineHeight: 115.2px
    letterSpacing: 1px
  display-mobile:
    fontFamily: Kanit, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 57.6px
    letterSpacing: 1px
  heading:
    fontFamily: Kanit, sans-serif
    fontSize: 57px
    fontWeight: 500
    lineHeight: 45.6px
    letterSpacing: 1px
  body:
    fontFamily: Kanit, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 27px
    letterSpacing: 1px
  link:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: 1px
rounded:
  xs: 5px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 25px
  2xl: 32px
  3xl: 50px
  pill: 9999px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 18px
  s7: 20px
  s8: 24px
  s9: 25px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 42px
    boxShadow: rgba(58, 162, 92, 0.12) 0px 8px 20px 0px
  button-secondary:
    backgroundColor: "{colors.link}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 10px 24px
    height: 48px
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 10px 24px
    borderColor: "{colors.link}"
  nav:
    textColor: "{colors.canvas}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.3xl}"
    boxShadow: rgba(0, 0, 0, 0.075) 0px 2px 4px 0px
  footer:
    backgroundColor: "{colors.link}"
    textColor: "{colors.canvas}"
    padding: 40px 0px
---

## Overview

Food World is the food-court and catering service operated under CPF (the queue lists https://www.cpfworldwide.com as its parent). The measured page is https://www.foodworld.in.th/ (title "Food World", language attribute `th`), 1280px wide and 6821px tall. The capture opens on a hero slideshow (three dots) with a photograph of uniformed staff serving a meal to a person seated in a bed, a white "บริการด้วยใจ" headline with the sub-line "พร้อมดูแลคุณทุกมื้อ", and a nav over the photo: หน้าแรก, เกี่ยวกับเรา, ธุรกิจและบริการ (a dropdown), คู่ค้าของเรา, ข่าวสารและกิจกรรม, ร่วมงานกับเรา, ติดต่อเรา. The logo, "Food World" with a lime "Food" and grey "World", sits in a white tab hanging from the top-left of the page.

Below the hero a white section with a lime quarter-circle block frames a large photo of a basil-pork rice plate with a fried egg, and beside it the lime heading "FOOD WORLD ศูนย์อาหารคุณภาพ" with paragraphs about Food Court service, "มาตรฐานสากล" and "ประสบการณ์ดูแลศูนย์อาหารมากกว่า 12 ปี". Two buttons follow, a filled brown "เกี่ยวกับเรา ›" and an outlined "ติดต่อเรา ›". More plates float on white, accompanied by thin lime line drawings of garlic, chili, a salad bowl and skewers. Three rounded cards, two brown and one lime, close the visible page with the titles "มาตรฐานความสะอาด", "มาตรฐานคุณภาพ" and "มาตรฐานการบริการ". The voice is warm and reassuring, written in Thai about hygiene and service standards.

## Colors

Background areas by weight: #ffffff (5552), #f4f7f1 (2394), #fafbeb (1096), #675e55 (1026), #5e5043 (642), #ff9d24 (324), #665c53 (310), #675c53 (189), #d5e03c (94).

- **canvas #ffffff**, with **surface-mist #f4f7f1** and **surface-cream #fafbeb** as soft section tints.
- **ink #665c53** is a warm brown body text (2290 characters weighted); **ink-body #212529bf** is Bootstrap's body color at 75% alpha (611 characters); **ink-olive #676c53** (382 characters).
- **primary #ff9d24** is the measured CTA fill (orange "ดูรายละเอียด ›" pill, white text #ffffff).
- **accent-lime #d5e03c** is the heading color on white (263 characters) and a measured fill (94).
- **link #5e5043** is the dark brown of the secondary button and the footer; **card-bg #675c53** is the brown card fill.
- **hairline #3aa25c26** is a green at low alpha; it matches `--fw-line` (rgba(58,162,92,.15)).
- Published brand variables: **brand-green #3aa25c** (`--fw-green`), **brand-green-dark #2f7f49** (`--fw-green-dark`), **brand-yellow #f6eb61** (`--fw-yellow`). The variables `--fw-lime` (#B6E07A), `--fw-ink` (#222631), `--fw-bg` (#F8FAF6) and `--fw-muted` (#6c757d) are also declared; they were not among the measured rendered colors, so they are not tokenised.

Bootstrap defaults on :root (--bs-primary #0d6efd, --bs-success #198754 and the rest of the Bootstrap palette) are framework defaults and not brand colors.

## Typography

Headlines and body use **Kanit** (loaded 300, 500, 600, 700) and buttons and links use **Prompt** (600, 700). The default Bootstrap system-ui stack is declared as the fallback but the measured computed family is "Kanit, sans-serif". Measured sizes by character weight: 18px (5145), 16px (497), 20px, 14px, 34px, 30px, 57px, 35px, 65px, 96px (10).

- **display**: 96px / 500 / 115.2px, letter-spacing 1px (the "Food World" h1 in the hero).
- **heading**: 57px / 500 / 45.6px (section titles such as "บริการของเรา", in lime).
- **body**: 18px / 500 / 27px.
- **link** (secondary buttons): Prompt 16px / 600 / 24px.
- **display-mobile**: 48px / 700 / 57.6px (mobile pass; the h1 reads "บริการด้วยใจ").

Letter-spacing is 1px on all roles.

## Layout

The page is a long vertical sequence: transparent nav over a full-width hero slideshow, then a two-column intro (photo left on a lime shape, text right), a scattering of floating plates with line-art garnishes, and a row of three offset cards. The card row is staggered: the lime middle card sits lower than the two brown cards in the capture. Section whitespace is generous and the grid is Bootstrap-based (breakpoints sm 576px, md 768px, lg 992px, xl 1200px, xxl 1400px). Spacing steps recorded: 5, 8, 10, 12, 16, 18, 20, 24, 25 and 32px.

## Elevation & Depth

Two shadows were measured: `rgba(58, 162, 92, 0.12) 0px 8px 20px 0px` (7 occurrences, a green glow under the orange pill) and `rgba(0, 0, 0, 0.075) 0px 2px 4px 0px` (3, cards). The site declares `--fw-shadow` (0 10px 25px rgba(34,38,49,.08)) and `--fw-shadow-lg` (0 18px 44px rgba(34,38,49,.14)) variables. Depth otherwise comes from photographs with soft drop-shadows under plates and from color blocking.

## Shapes

Radii: 6px (17), 50% (14), 50px (14), 8px (11), "0px 0px 16px 16px" (11), 999px (9, pill buttons), 12px (7), 32px (6), "5px 5px 0px 0px" (6), "50px 6px" (3), "0px 0px 32px 32px" (3) and 25px (1). Buttons are full pills; cards use asymmetric large radii (50px with a 6px opposite corner) so they read as leaf-like tabs. The site declares `--fw-radius: 20px`.

## Components

- **button-primary** ("ดูรายละเอียด ›"): fill #ff9d24, text #ffffff, Kanit 18px/500, radius 999px, padding 0px 16px, height 42px, shadow rgba(58, 162, 92, 0.12) 0px 8px 20px 0px.
- **button-secondary** ("เกี่ยวกับเรา ›"): fill #5e5043, text #ffffff, Prompt 16px/600, radius 999px, padding 10px 24px, height 48px; on hover the fill measured rgb(77, 65, 55).
- **link / outline button** ("ติดต่อเรา ›"): transparent with a #5e5043 border, same size.
- **nav**: white text over the hero (the page defines `.color-nav-sub` as #fff).
- **card**: brown #675c53 fill, white text, 50px radius, shadow rgba(0, 0, 0, 0.075) 0px 2px 4px 0px; a second card type (`.fw-card`) is a 70%/30% grid with a 12px radius whose right 30% is the brown #675e55 text panel.
- **footer**: #5e5043 with white text and 40px vertical padding.

## Design System Architecture

No public design system or brand guideline was found; the home page markup has no brand, design or press link. The site does ship a small brand token layer in :root (121 custom properties in all): `--fw-green` #3AA25C, `--fw-green-dark` #2F7F49, `--fw-lime` #B6E07A, `--fw-yellow` #F6EB61, `--fw-ink` #222631, `--fw-bg` #F8FAF6, `--fw-muted` #6c757d, `--fw-line`, `--fw-radius` 20px and `--fw-shadow(-lg)`, on top of Bootstrap variables (`--bs-*`). Component classes in the page use a BEM-like `fw-card`, `fw-card__media`, `fw-card__img`, `fw-card__body` naming with inline <style> blocks. The rendered colors in this document come from computed styles; where the declared variable and the rendered color differ (lime #B6E07A declared vs #d5e03c measured), both are reported.

## Do's and Don'ts

- Do pair a white canvas with warm brown #665c53 text and lime #d5e03c headings.
- Do make buttons full pills, orange #ff9d24 for the main action and brown #5e5043 for secondary ones.
- Do set Thai headlines in Kanit and button labels in Prompt with 1px letter-spacing.
- Do use thin lime line illustrations of ingredients to frame food photography.
- Don't use Bootstrap's #0d6efd or its palette as brand colors.
- Don't place text directly on lime at small sizes without checking contrast; the lime headings are large display sizes.
- Don't use sharp-cornered cards; the brand uses asymmetric large radii.

## Responsive Behavior

The extraction's mobile pass recorded: the h1 "บริการด้วยใจ" at 48px / 700 / 57.6px (96px at desktop); the detected button was "Food Court Promotion" in Kanit 18px/500, fill #ff9d24, white text, radius 50px, padding 10px 8px, height 47px; font sizes by character weight were 18px (4835), 15.75px (1532), 20px (599), 16px (418), 30px (168), 27.85px (103), 25px (90), 45px (75), 48px (12) and 52px. Bootstrap breakpoints in :root are 576, 768, 992, 1200 and 1400px. Mobile viewport width, column behavior and menu pattern were not recorded: not measured.

## Iteration Guide

1. Start with #ffffff, brown #665c53 text, lime #d5e03c headings and the orange #ff9d24 pill.
2. Keep Kanit for text and Prompt for buttons; letter-spacing 1px.
3. Reuse the three card types: brown #675c53 with 50px radius, lime block, and the 70/30 `.fw-card`.
4. Add garnish line-art in lime rather than icons.
5. Dark mode is not measured.
6. Run `node web/scripts/verify-designs.mjs --slug=foodworld` after edits.
