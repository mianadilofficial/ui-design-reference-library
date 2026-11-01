---
version: alpha
name: Thoresen Thai Agencies (TTA)
category: "Thai Brands"
description: "Investor-facing home page of Thoresen Thai Agencies (TTA Group), Thailand: Manrope with Kanit fallback at 16px weight 500 body, 32px uppercase hero, white canvas, grey ink #464646, corporate blue #125bb2 with a green gradient brand field, 16px card radius and soft deep shadows."
colors:
  canvas: "#ffffff"
  ink: "#464646"
  primary: "#125bb2"
  surface-black: "#000000"
  surface-light: "#f5f5f5"
  brand-blue: "#1b78b5"
  brand-green: "#86d636"
  brand-green-deep: "#2caf59"
typography:
  display:
    fontFamily: Manrope, Kanit, sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 38.4px
    textTransform: uppercase
  display-mobile:
    fontFamily: Manrope, Kanit, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 36px
  heading:
    fontFamily: Manrope, Kanit, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  subheading:
    fontFamily: Manrope, Kanit, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32px
  body:
    fontFamily: Manrope, Kanit, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22px
  nav:
    fontFamily: Manrope, Kanit, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 22px
  link:
    fontFamily: Manrope, Kanit, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 21px
rounded:
  xs: 4.8px
  sm: 10px
  md: 16px
  lg: 30px
  pill: 9999px
spacing:
  s1: 2.4px
  s2: 4px
  s3: 8px
  s4: 11.2px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 19.2px
  s9: 24px
  s10: 28px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0.2) 10px 10px 40px 0px
  footer:
    textColor: "{colors.canvas}"
    padding: 64px 0px 8px
---

## Overview

The queued URL https://www.thoresen.com opens on a Thai royal-memorial entry page (https://www.thoresen.com/en/intro-page: a gold-ornamented tribute screen with the heading "๑๓ ตุลาคม วันนวมินทรมหาราช", Thai tribute text and an "เข้าสู่หน้าหลัก | Enter Site" button). Following the brief, the real home page https://www.thoresen.com/en/home was re-measured (`--allow-spa-404`) and this DESIGN.md is named after that measured site, the corporate home page titled "Thoresen Thai Agencies (TTA)". The 1254 visible elements of that page were measured.

The home page is an investor-relations corporate site. The capture shows a stock ticker strip ("SET: TTA 5.10 BAHT -0.15(-2.86%)"), a top nav (Contact Us, TH, About TTA, Investor Relations, Corporate Governance, Sustainability, News and Media, Career), a dark port and shipping photograph hero with the statement "YOUR TRUSTED STRATEGIC INVESTMENT PARTNER", an introduction ("Your Trusted Strategic / Investment Partner") that describes the group's five business groups with a carousel (Shipping, Offshore Service and others), a white "IR Corner" card with a stock quote ("TTA 5.10") and "Key Highlight Performance 2025" figures (Total Revenues 29,909, Net Profits 2,094, Total Assets 49,195, unit million baht), announcement lists, a "Latest News" row of three photo cards, and a green gradient footer with the company address. A black tribute dialog with a portrait is open over the hero in the capture; like a scrim or popup, it is not documented as brand UI.

## Colors

- Canvas `#ffffff`; surface-light `#f5f5f5`; surface-black `#000000` (the hero photo area and scrim base).
- Ink `#464646` (1447 characters; also the nav link colour). Text over photography is `#ffffff` (2721 characters, the most used).
- Primary `#125bb2` is the blue of "Investment Partner" and IR headings (157 characters, 67 stylesheet uses); brand-blue `#1b78b5` (98 characters) is also the only coloured border (8).
- Brand greens: `#86d636` (the "Your Trusted Strategic" heading and the page's green field; 171 stylesheet uses) and `#2caf59` (141 uses). The capture shows the section backgrounds and pill buttons in a green gradient between these. The extractor did not detect a CTA, so the fill of the pill buttons ("IR Home", "View all") is not measured as a role and is not tokenised.
- The stylesheet also contains Bootstrap defaults (`--primary` `#007bff`, `--danger` `#dc3545`, `--success` `#28a745`); these are framework defaults, not brand colours.

## Typography

Manrope carries 4848 characters, with Kanit as the Thai fallback (stack `Manrope, Kanit, sans-serif`). Weights: 500 (2336), 700 (2009), 400 (399), 800 (100).

- Display: 32px/38.4px, weight 500, uppercase (hero statement), letter-spacing 1.2px measured at 32px.
- Heading: 32px/40px, weight 700 (section titles). Mobile display 36px/36px weight 700.
- Subheading: 24px/32px weight 700 ("Stock Quotes").
- Body 16px/22px weight 500; nav 14px/22px weight 500; link 14px/21px weight 700 ("Read more").
- Other sizes: 13px, 12px, 36px, 56px, 28px and 25px (stock price and key figures).
- Icons: Font Awesome 5 Pro/Brands, a custom `tta` icon font and Material Design Icons are loaded. The tribute page used PSL Paksin Pro and Kanit, which is not part of the home page type system.

## Layout

A 1280px desktop layout built on Bootstrap breakpoints (`--breakpoint-sm` 576px, `-md` 768px, `-lg` 992px, `-xl` 1200px). The header block is 120px tall. Content sits in centred 870px columns with a white elevated "IR Corner" card (padding 32px, radius 16px) floating over a green band. The footer is 376px tall with padding `64px 0px 8px`. Most-used paddings: 8px (60), 16px (43), 15px (40), 32px (25), 24px (14).

## Elevation & Depth

Shadows measured: `rgba(0,0,0,0.1) 3px 20px 30px 0px` (6, the IR card), `rgba(0,0,0,0.2) 0px 3px 20px 0px` (3), `rgba(0,0,0,0.2) 0px 0px 20px 0px` (2), `rgba(0,0,0,0.2) 10px 10px 40px 0px` (1), `rgba(0,0,0,0.2) 0px 30px 60px 0px` (1) and a Material three-layer shadow on the dialog. Layering is generous: cards float on the green gradient and carousel slides overlap.

## Shapes

Radii measured: 50% (22 elements, round icons and carousel controls), 16px (15, cards), 30px (5, pill buttons), 4.8px, `10px 0px 0px 10px` and `16px 16px 0px 0px` (card top). Tokens: 4.8px, 10px, 16px, 30px and a full pill.

## Components

- Nav: white text over the hero, 14px uppercase bold; secondary nav link colour `#464646` at weight 500.
- IR card: white background, 16px radius, 32px padding, shadow `rgba(0,0,0,0.1) 3px 20px 30px 0px`.
- News cards: photo top with 16px radius, date in blue, title in ink.
- Pill buttons "IR Home", "View all": rounded green pills with white label (visible in the capture; fill not measured).
- Link: "Read more" white 14px bold (on image cards).
- Footer: white text on the green field.

## Design System Architecture

No public design system or brand guideline was found; the pages opened were https://www.thoresen.com/en/intro-page and https://www.thoresen.com/en/home through the extractor. The site's CSS is Bootstrap 4 based (root variables `--primary` `#007bff`, `--breakpoint-*`) with a custom layer: Manrope typography, green and blue brand colours, and icon fonts. The de-facto system is Bootstrap's grid plus bespoke card, shadow and pill styles.

## Do's and Don'ts

- Do use Manrope 500 for body and 700 for headings, with the 16px/22px base.
- Do pair the blue `#125bb2` with the green field for corporate headings.
- Do use 16px radii and soft large shadows for cards.
- Do keep the data figures (revenue, stock price) large and bold.
- Don't use the memorial page's PSL Paksin Pro gold palette (`#794a00`) for the corporate home page.
- Don't use Bootstrap's `#007bff` as the brand colour.
- Don't document the tribute dialog or its black scrim as UI.

## Responsive Behavior

Mobile pass (390px): h1 36px, body 16px, header shows 2 links with a menu toggle ("Toggle navigation") visible; the measured mobile sizes are 16px (2863 characters), 14px (839), 13px (261), 32px (199), 24px (122) and 12px (118). The mobile capture is single column for the first bands (columns: 1). Other behaviours are not measured.

## Iteration Guide

1. White canvas, `#464646` ink, Manrope.
2. Hero: photograph with 32px uppercase statement; section titles in blue and green.
3. IR card: 16px radius, 32px padding, the 3px 20px 30px shadow.
4. Re-measure with the tribute dialog closed before documenting pill button fills.
5. Gate: `node web/scripts/verify-designs.mjs --slug=thoresen-thai-agencies-public-company-limited`.

### Measured reference

All figures in this block are verbatim from the desktop extraction (weight in parentheses is the measured character, area or occurrence weight).

- Font families by characters: Manrope (4848).
- Font sizes by characters: 16px (2926), 14px (1031), 32px (292), 13px (261), 12px (168), 24px (82), 36px (40), 56px (22), 28px (8), 25px (8), 55px (7), 7.8px (2).
- Font weights by characters: 500 (2336), 700 (2009), 400 (399), 800 (100), 300 (4).
- Letter spacing by size: 32px/1.2px (187).
- Text colours by characters: #ffffff (2721), #464646 (1447), #000000 (287), #125bb2 (157), #1b78b5 (98), #86d636 (54), #ffffffcc (54), #2caf59 (30).
- Background colours by area: #000000 (1024), #ffffff (703), #f5f5f5 (15), #ffffff33 (10), #000000cd (2), #ffffff63 (0).
- Border radii: 50% (22), 16px (15), 30px (5), 10px 0px 0px 10px (2), 4.8px (1), 16px 16px 0px 0px (1).
- Box shadows: rgba(0, 0, 0, 0.1) 3px 20px 30px 0px (6), rgba(0, 0, 0, 0.2) 0px 3px 20px 0px (3), rgba(0, 0, 0, 0.2) 0px 0px 20px 0px (2), rgba(0, 0, 0, 0.2) 10px 10px 40px 0px (1), rgba(0, 0, 0, 0.2) 0px 30px 60px 0px (1), rgba(0, 0, 0, 0.2) 0px 3px 5px -1px, rgba(0, 0, 0, 0.14) 0px 6px 10px 0px, rgba(0, 0, 0, 0.12) 0px 1px 18px 0px (1).
- Border colours: #1b78b5 (8), #f5f5f5 (3), #ffffff (1), #7070701a (1).
- Gaps: none recorded.
- Paddings: 8px (60), 16px (43), 15px (40), 32px (25), 24px (14), 4px (7), 12px (4), 2.4px (3), 11.2px (3), 64px (2), 128px (1), 50px (1).
- Stylesheet colours by count: #ffffff (419), #86d636 (171), #2caf59 (141), #00000033 (113), #0000001f (83), #125bb2 (67), #00000024 (58), #000000 (57), #8a959e33 (46), #f5f5f5 (41), #6c757d (39), #007bff (34), #464646 (33), #212529 (32).
- Stylesheet font sizes: 16px, 14px, 24px, 12px, 18px, 20px, 32px, 36px, 40px, 28px, 13px, 25px, 10px, 96px.
- Stylesheet radii: 4px, 20px, 10px, 16px, 24px, 8px, 3px, 4.8px, 3.2px, 30px.
- Fonts loaded: Font Awesome 5 Brands 400 normal, Font Awesome 5 Pro 300 normal, Manrope 400 normal, Manrope 300 normal, Manrope 500 normal, Manrope 800 normal, Manrope 700 normal, Kanit 500 normal, tta 400 normal, Roboto 400 normal, Roboto 500 normal, Material Design Icons normal normal.
- Visible elements: 1254; document language: en; hover states recorded: 1.
