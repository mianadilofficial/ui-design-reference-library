---
version: alpha
name: Tokio Marine Thailand
category: "Thai Brands"
description: "Thailand English page of Tokio Marine insurance: Lato (Regular, Medium, Semibold) at 16px body and 48px hero, white canvas, deep teal ink #022b39, primary button #00546c and secondary #33abba as 1000px pills, 16px cards with a 0.1 alpha shadow and pastel category chips."
colors:
  canvas: "#ffffff"
  ink: "#022b39"
  primary: "#00546c"
  on-primary: "#ffffff"
  surface-deep: "#032b39"
  surface-footer: "#01212c"
  ink-muted: "#5f5f5f"
  ink-body: "#484848"
  ink-near-black: "#1a1a1a"
  ink-gray: "#212529"
  accent-teal: "#0096a9"
  chip-blue: "#ebf0ff"
  chip-orange: "#fdf1eb"
  chip-pink: "#fceef3"
  chip-green: "#ecf7ee"
  primary-hover: "#006a86"
  button-secondary-bg: "#33abba"
typography:
  display:
    fontFamily: Lato-Medium, NotoSansJP-Regular, Arimo-Regular, sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 60px
  display-mobile:
    fontFamily: Lato-Medium, NotoSansJP-Regular, Arimo-Regular, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
  heading:
    fontFamily: Lato-Regular, NotoSansJP-Regular, Arimo-Regular, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
  subheading:
    fontFamily: Lato-Medium, NotoSansJP-Regular, Arimo-Regular, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.8px
  body:
    fontFamily: Lato-Regular, NotoSansJP-Regular, Arimo-Regular, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  button:
    fontFamily: Lato-Semibold, NotoSansJP-Regular, Arimo-Bold, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 14.2px
rounded:
  xs: 16px
  sm: 25px
  md: 32px
  lg: 50px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 9px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 19px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 9px 12px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 9px 12px
    height: 48px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.xs}"
    padding: 19px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 2px 4px 0px
---

## Overview

The Tokio Marine Thailand page (https://www.tokiomarine.com/th/en.html, title "Property Casualty and Life Insurance") is the English-language Thailand entry of the Tokio Marine group. It is a short, friendly landing page, 141 visible elements. The capture shows a bright hero photograph (a white modern house, a car with a suitcase, a family on a swing, palm trees) with the headline "Tokio Marine protects what matters most" where the second line is in teal, a short intro "Start by choosing your insurance type below and get instant coverage, quick claims, and peace of mind in minutes:" and two pill buttons, General Insurance and Life Insurance.

Next: "Explore comprehensive protection for every need" (second line teal), two columns for the two Thai operating companies (Tokio Marine Safety Insurance (Thailand) PCL for General Insurance and Tokio Marine Life Insurance (Thailand) PCL for Life Insurance), each with the group logo and a set of pastel icon chips (Motor Protection, Home Protection, Travel Protection, Personal Accident, Business Protection; Whole Life, Health Care, Term Life, Personal Accident, Retirement, Endowment, Wealth, Group Insurance). Then a pale-teal band "Need assistance?" with two white cards (General Insurance Products, Life Insurance Products) and "Get In Touch" buttons, and a dark rounded-top footer with the "Tokio Marine Group" wordmark and the slogan "Inspiring Confidence. Accelerating Progress." The voice is plain, reassuring and action-led.

## Colors

- Canvas `#ffffff`; ink `#022b39` (197 characters, deep marine teal; also the footer field `#032b39` and the darker footer strip `#01212c`).
- Primary `#00546c` (General Insurance pill; headings; 134 stylesheet uses); hover `#006a86` (measured on hover); on-primary `#ffffff`.
- Button-secondary-bg `#33abba` (Life Insurance pill and Life products title).
- Accent-teal `#0096a9` appears in the highlighted second lines of both headlines (26 characters, 614 stylesheet uses).
- Text greys: `#5f5f5f` (123), `#484848` (113, body copy), `#1a1a1a` (86), `#212529`, `#313131`.
- Category chip tints (area colours): `#ebf0ff` blue, `#fdf1eb` orange, `#fceef3` pink, `#ecf7ee` green; each chip carries a matching coloured icon.
- Stylesheet also holds Bootstrap defaults (`#007bff`, `#dc3545`, `#28a745`, `#ffc107`); they are not brand colours.

## Typography

Lato in three cuts (Regular, Medium, Semibold; each loaded as a separate family name) with NotoSansJP and Arimo as fallbacks. Defined in the stylesheet as `--font-family-medium`, `--font-family-semibold` and `--font-family-bold`.

- Display: Lato-Medium 48px/60px; mobile 32px/40px.
- Heading: Lato-Regular 40px/48px ("Need assistance?").
- Subheading: Lato-Medium 24px/28.8px ("General Insurance Products").
- Body: Lato-Regular 16px/22px; the intro is `#484848`.
- Button: Lato-Semibold 16px/14.2px.
- Other sizes: 14px (92), 20px (86), 12px (26). Every weight is 400 because weight is carried by the font name.

## Layout

A centred single-column marketing page, 1280px wide on desktop: hero (full-width photo with centred text and buttons), a two-column product block, a pale band with a text column and two cards, then the footer. Gaps: 16px (6), 20px, 24px, 12px (4 each), 48px, 10px, 6px. Paddings: 9px (15), 4px (13), 12px, 20px, 19px (card padding), 16px, 15px, 40px, 48px, 80px. The footer has rounded top corners (`32px 32px 0px 0px`, 4 elements).

## Elevation & Depth

One shadow is measured: `rgba(0, 0, 0, 0.1) 0px 2px 4px 0px` on the two white assistance cards (2 occurrences). The hero photograph fades to white at its lower edge, and the assistance band is a pale tint with white cards on top. The rest is flat.

## Shapes

Radii measured: 50px (13 elements, the chips), 1000px (the two hero buttons), 16px (cards), 25px, and `32px 32px 0px 0px` (footer and band tops). Tokens: 16px, 25px, 32px, 50px and a pill. The hero buttons and chips are fully rounded; cards are 16px.

## Components

- Primary button "General Insurance": fill `#00546c`, white Lato-Semibold 16px, padding `9px 12px`, 48px high, 201px wide, pill radius; hover fill `#006a86`.
- Secondary button "Life Insurance": fill `#33abba`, same size and radius.
- Chips: pastel fill (`#ebf0ff`, `#fdf1eb`, `#fceef3`, `#ecf7ee`), icon plus 14px label, 50px radius.
- Assistance card: white, 16px radius, padding 19px, shadow above, icon tile, title in teal, full-width pill "Get In Touch".
- Footer: `#032b39`, wordmark and slogan in white italic, strip `#01212c` with copyright "© 2026 All Rights Reserved".

## Design System Architecture

No public design system or brand guideline was opened for this page; the page https://www.tokiomarine.com/th/en.html was measured by the extractor. The stylesheet has 37 root variables: Bootstrap 4 palette defaults, `--breakpoint-md` 768px, `--swiper-navigation-size` 44px and the three Lato font-family variables. The brand layer is the teal palette, the Lato family and the pill buttons.

## Do's and Don'ts

- Do highlight the key half of a headline in teal `#0096a9`.
- Do use fully rounded pill buttons in `#00546c` and `#33abba` to separate the general and life lines.
- Do tint category chips with the four pastel fills and matching icons.
- Do use 16px cards with the single soft shadow.
- Don't use Bootstrap's `#007bff` as a brand colour.
- Don't set heavy shadows or square buttons.
- Don't use the dark `#032b39` for large body text blocks; it is the footer field.

## Responsive Behavior

Mobile (390px) measured: h1 32px/40px, body 14px; sizes by characters 14px (260), 12px (153), 20px (86), 16px (80), 24px (62), 32px (38). The stylesheet declares `--breakpoint-md` 768px. Column stacking and menu behaviour were not measured.

Microcopy is short and verb-led: "Get In Touch", "General Insurance", "Life Insurance", and product chips that name the cover directly ("Motor Protection", "Home Protection", "Travel Protection"). The page is organised around the two legal entities, so each column opens with the entity's full registered name and a one-word line of business ("General Insurance", "Life Insurance") in grey `#5f5f5f` before the chips. The one measured hover is the primary pill darkening from `#00546c` to `#006a86` with white text and a white border colour unchanged; no other hover, focus or dark-mode state was recorded.

## Iteration Guide

1. White canvas, `#022b39` ink, Lato in three cuts.
2. Two-line headings with the second line in `#0096a9`.
3. Pill buttons at 48px high with 9px 12px padding.
4. Chips in the four pastel tints; cards at 16px radius.
5. Gate: `node web/scripts/verify-designs.mjs --slug=tokio-marine-thailand`.

### Measured reference

All figures in this block are verbatim from the desktop extraction (weight in parentheses is the measured character, area or occurrence weight).

- Font families by characters: Lato-Medium (389), Lato-Regular (253), Lato-Semibold (81).
- Font sizes by characters: 16px (370), 14px (92), 20px (86), 48px (84), 24px (49), 12px (26), 40px (16).
- Font weights by characters: 400 (723).
- Letter spacing by size: none recorded.
- Text colours by characters: #022b39 (197), #5f5f5f (123), #484848 (113), #1a1a1a (86), #ffffff (81), #212529 (32), #0096a9 (26), #00546c (26), #33abba (23), #313131 (16).
- Background colours by area: #032b39 (407), #01212c (164), #ffffff (141), #ebf0ff (35), #00546c (26), #33abba (26), #fdf1eb (25), #fceef3 (23), #ecf7ee (22).
- Border radii: 50px (13), 32px 32px 0px 0px (4), 1000px (2), 16px (2), 25px (2).
- Box shadows: rgba(0, 0, 0, 0.1) 0px 2px 4px 0px (2).
- Border colours: none recorded.
- Gaps: 16px (6), 20px (4), 24px (4), 12px (4), 6px (2), 48px (2), 10px (2).
- Paddings: 9px (15), 4px (13), 12px (4), 20px (4), 19px (4), 16px (2), 15px (2), 40px (1), 48px (1), 80px (1).
- Stylesheet colours by count: #ffffff (1040), #022b39 (644), #0096a9 (614), #1a1a1a (154), #00546c (134), #5f5f5f (116), #99aaaf (114), #000000 (88), #0000001a (78), #6c757d (76), #212529 (72), #022b3914 (72), #007bff (68), #677f88 (66).
- Stylesheet font sizes: 20px, 14px, 16px, 24px, 12px, 28px, 18px, 13px, 40px, 32px, 22px, 15px, 48px, 10px.
- Stylesheet radii: 8px, 4px, 16px, 150px, 5px, 10px, 6px, 20px, 100px, 950px.
- Fonts loaded: Lato-Regular 400 normal, Lato-Medium 400 normal, Lato-Semibold 400 normal.
- Visible elements: 141; document language: en; hover states recorded: 17.
