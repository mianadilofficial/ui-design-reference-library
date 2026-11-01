---
version: alpha
name: TNN Thailand
category: "Thai Brands"
description: "Thai news channel TNN's home page: True family Thai typefaces (Bold, Medium) at 21 to 22px body and 40px headings, white canvas, charcoal ink #333333, TNN orange #ec5f27, ticker and card surfaces in #f5f5f5, with pill 100px and 8px radii and a black mourning band."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#ec5f27"
  on-primary: "#ffffff"
  surface-black: "#000000"
  primary-hover: "#fa764b"
  cat-wealth: "#194477"
  cat-world: "#cb2c30"
  cat-tech: "#22d3ca"
  cat-health: "#e81c9b"
  cat-earth: "#22933e"
  cat-sport: "#42073f"
  cat-lifestyle: "#8dc5bf"
  orange-text: "#ee5f30"
  ink-muted: "#666666"
  ink-gray: "#848484"
  text-input-border: "#dddddd"
  card-bg: "#f5f5f580"
  footer-bg: "#f5f5f5"
typography:
  display:
    fontFamily: "\"True Bold-aad26e60898f74bc\", \"True Bold-aad26e60898f74bc fallback: Arial\", sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 60px
  display-mobile:
    fontFamily: "\"True Bold-aad26e60898f74bc\", \"True Bold-aad26e60898f74bc fallback: Arial\", sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 42px
  body:
    fontFamily: "\"True Medium-8d9e51ef1db84df5\", \"True Medium-8d9e51ef1db84df5 fallback: Arial\", sans-serif"
    fontSize: 22px
    fontWeight: 400
  button:
    fontFamily: "\"True Bold-aad26e60898f74bc\", \"True Bold-aad26e60898f74bc fallback: Arial\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
  nav:
    fontFamily: "True-fa96c96df9a77f0c, \"True-fa96c96df9a77f0c fallback: Arial\", sans-serif, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-dominant:
    fontFamily: True Bold Special-41ae407e3d6c7408
    fontSize: 21px
    fontWeight: 400
  button-secondary:
    fontFamily: "\"True Bold-aad26e60898f74bc\", \"True Bold-aad26e60898f74bc fallback: Arial\", sans-serif"
    fontSize: 21px
    fontWeight: 400
  input:
    fontFamily: "\"True Medium-8d9e51ef1db84df5\", \"True Medium-8d9e51ef1db84df5 fallback: Arial\", sans-serif"
    fontSize: 20px
    fontWeight: 400
rounded:
  xs: 2px
  sm: 4px
  md: 5px
  lg: 6px
  xl: 8px
  2xl: 10px
  3xl: 20px
  4xl: 80px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 4.8px
  s5: 5px
  s6: 6px
  s7: 7px
  s8: 8px
  s9: 10px
  s10: 12px
components:
  link:
    textColor: "{colors.orange-text}"
    typography: "{typography.display}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 10px
    height: 48px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.2xl}"
    padding: 10px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink-muted}"
    padding: 55px 0px 10px
---

## Overview

TNN Thailand (https://www.tnnthailand.com redirected to https://www.tnnthailand.com/home/, title "TNN Thailand", Thai-language page) is the web home of the Thai news channel TNN. It is a very dense news portal: 3586 visible elements were measured. The top of the page is a yellow market ticker (SET, SET50, SET50FF, SET100 with values and red or green changes), then a white header with the black TNN square logo, a section menu (Wealth, World, Tech, Health, Earth, TNN Exclusive), a search icon, an orange "Live Now" button, an outlined login button ("เข้าสู่ระบบ") and a "สมัครสมาชิก" (subscribe) link with a menu icon.

Below, the capture shows a large framed memorial advertisement panel, a "Live Now" section with a big orange TNN logo as a video placeholder over a field of soft white cubes and social icons (TNNONLINE), then a black-and-gold mourning section with a patterned dark background, a gold Thai heading, a most-recent-news list on the right with orange rules and four photo cards beneath, followed by a video row with red play badges. A cookie banner, a promotional banner and a dialog overlap the capture; they are not documented as brand UI. The memorial section is editorial content tied to current events and is described but not tokenised as a standing pattern.

## Colors

- Canvas `#ffffff` (largest, 15597), footer and table surfaces `#f5f5f5`, translucent card surface `#f5f5f580`, ink `#333333` (9262 characters), ink-muted `#666666`, ink-gray `#848484`, black `#000000` (2896 area, video and mourning areas), charcoal `#333333` (2141 area).
- Primary `#ec5f27` is the TNN orange: the "Live Now" button, the logo and the cookie-accept fill, also `--primary` and `--original` in CSS; text and border variant `#ee5f30` (orange-text, 1245 characters, 96 borders). Hover and active are `#fa764b` (`--primary-hover`, `--primary-active`).
- Category colours published as CSS variables: Wealth `#194477` (`--wealth`; `--WEALTH` is `#0e4174`), World `#cb2c30`, Tech `#22d3ca`, Health `#e81c9b`, Earth `#22933e`, Sport `#42073f` (also a large measured area, 1765) and Lifestyle `#8dc5bf` (1485). These colour-code section tags, borders (e.g. `#194477` 23 borders, `#e81c9b` 15, `#cb2c30` 14) and cards.
- Other measured: `#ebeaea` and `#eaf3ff` (1058 area each), border `#dddddd`.
- Swiper's `--swiper-theme-color` `#007aff` is a library default and not a brand colour.

## Typography

The site self-hosts the True family (a Thai-first type family) in four roles: True Bold Special (11875 characters, the dominant face), True Medium (9531), True Bold (4795) and True (893). They are exposed as `--font-true-bold-special`, `--font-true-medium`, `--font-true-bold` and `--font-true`. All carry Arial fallbacks.

- Display: True Bold 40px/60px (the orange "Live Now" section title); mobile 28px/42px.
- Body: True Medium 22px (normal line height); body-dominant True Bold Special 21px (8236 characters).
- Button: True Bold 20px/20px; secondary button 21px; input True Medium 20px.
- Nav: True 16px/24px; the main menu text is True Bold 18px.
- Other sizes: 28px (3467), 36px (2043), 18px (1034), 25px, 15px, 14px. Weights are 400 (27071 characters) and 700 (23); weight is carried by the font family itself, not by font-weight.

Font substitute: True is proprietary; Noto Sans Thai or Sarabun is a design substitute and not measured.

## Layout

A 1280px desktop layout with a 80px nav bar and a 1248px-wide content frame (the "Live Now" heading is 1248px wide). The capture uses a 4-up card row, a 2-column split (large feature plus a list) and a multi-card video carousel. Gaps: 8px (432), 16px (188), 5px (182), 10px (179), 30px (87), 20px (74), 12px (50). Paddings: 12px (188), 25px (69), 8px, 20px, 16px, 15px, 10px. The footer is 410px tall with padding `55px 0px 10px`, background `#f5f5f5`, text `#666666`. The root variable `--base-font-size` is 9.

## Elevation & Depth

Shadows measured: `rgba(0, 0, 0, 0.06) 2px 6px 14px 0px` (10 occurrences), `rgba(0, 0, 0, 0.05) 2px 6px 17px 0px` (6) and a Tailwind-style `0px 10px 15px -3px / 0px 4px 6px -4px` pair. The video placeholder uses translucent floating cubes for depth; most other separation is by 1px orange or grey rules.

## Shapes

The radius vocabulary is wide: 100px (234 elements: pills and tags), 8px (198), 10px (103: cards and tickers), 50% (10), 4px, 6px (primary buttons), 5px, 80px, and top-rounded `8px 8px 0px 0px` (card images). Tokens run from 2px to 80px plus a full pill. Pills are the signature: date and category chips are fully rounded.

## Components

- Primary button: orange `#ec5f27` fill, white True Bold 20px label, 6px radius, padding `10px 16px`, 40px high (measured on the cookie accept button; the header "Live Now" button uses the same orange, size not measured as a role).
- Secondary button: same orange fill with a 1px orange border, 4px radius, padding `6px 16px`, 32px high (the "Week" tab).
- Outlined button: orange text, 1px `#e0e0e0` border, 8px radius, padding `4px 12px`, 38px high ("เข้าสู่ระบบ").
- Text input (province select): 48px high, 4px radius, 1px `#dddddd`, padding 10px, True Medium 20px.
- Cards: `#f5f5f580` fill, 10px radius, padding 10px, used for SET index, gold price and exchange-rate widgets.
- Play button: round (2000px radius) 90px, translucent dark fill `rgba(25, 25, 28, 0.9)`, hover darker `rgba(0, 0, 0, 0.85)`.

## Design System Architecture

No public design system or brand guideline was found. The page https://www.tnnthailand.com/home/ was measured by the extractor. The CSS has a small custom set of variables: fonts (`--font-true*`), brand and section colours (`--primary`, `--original`, `--primary-hover`, `--wealth`, `--world`, `--tech`, `--health`, `--earth`, `--sport`, `--liftstly`), `--base-font-size`, plus Tailwind utility variables (`--tw-ring-shadow`) and Swiper navigation variables (`--swiper-navigation-size` 44px). This is a Tailwind-assisted, hand-written theme with section-coloured news categories.

## Do's and Don'ts

- Do use the TNN orange `#ec5f27` for the primary action and the "Live Now" brand moments.
- Do colour-code sections with the published category colours.
- Do use True fonts in Thai and keep Arial as the fallback.
- Do round chips and tags as full pills.
- Don't introduce heavy shadows; the measured shadows are about 5 to 6% black.
- Don't use Swiper's `#007aff` or Tailwind defaults as brand colours.
- Don't treat ads, the cookie banner or the mourning banner as standing UI.

## Responsive Behavior

Mobile (390px) measured: h1 28px/42px, body 28px; sizes by characters 21px (6906), 28px (3595), 30px (2025), 20px (1962), 16px (1318), 22px (1056). Layout changes for the nav, cards and ticker were not measured.

## Iteration Guide

1. White canvas, `#333333` ink, True typography, orange `#ec5f27` for the action.
2. Build category tags from the seven published colours with pill radii.
3. Cards at 10px radius with a 6% shadow.
4. Gate: `node web/scripts/verify-designs.mjs --slug=tnn`.

### Measured reference

All figures in this block are verbatim from the desktop extraction (weight in parentheses is the measured character, area or occurrence weight).

- Font families by characters: True Bold Special-41ae407e3d6c7408 (11784), True Medium-8d9e51ef1db84df5 (9842), True Bold-aad26e60898f74bc (4768), True-fa96c96df9a77f0c (929).
- Font sizes by characters: 21px (8236), 22px (8224), 28px (3467), 20px (2608), 36px (2043), 18px (1034), 16px (982), 15px (304), 25px (279), 14px (108), 32px (17), 24px (9).
- Font weights by characters: 400 (27300), 700 (23).
- Letter spacing by size: none recorded.
- Text colours by characters: #ffffff (14346), #333333 (9262), #ee5f30 (1245), #666666 (1023), #000000 (246), #848484 (224), #194477 (211), #999999 (108), #e81c9b (91), #b8b8b8 (88), #228f54 (88), #22933e (86).
- Background colours by area: #ffffff (15597), #000000 (2896), #333333 (2141), #f5f5f5 (1784), #42073f (1765), #8dc5bf (1485), #ebeaea (1058), #eaf3ff (1058), #f5f5f580 (793), #eb5f27 (704), #0e4174 (498), #cb2c30 (498).
- Border radii: 100px (234), 8px (198), 10px (103), 50% (10), 4px (6), 80px (6), 8px 8px 0px 0px (5), 4px 0px (4), 5px (4), 6px (3), 2px (2), 2000px (1).
- Box shadows: rgba(0, 0, 0, 0.06) 2px 6px 14px 0px (10), rgba(0, 0, 0, 0.05) 2px 6px 17px 0px (6), rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px (1).
- Border colours: #ee5f30 (99), #194477 (19), #dddddd (14), #22d3ca (13), #22933e (13), #cb2c30 (13), #e81c9b (12), #333333 (10), #9e7a46 (4), #ec5f27 (3).
- Gaps: 8px (424), 16px (188), 5px (182), 10px (179), 30px (87), 20px (74), 12px (44), 4px (22), 15px (13), 14px (12), 6px (4), 50px (2).
- Paddings: 12px (186), 25px (66), 2px (61), 8px (59), 20px (52), 16px (46), 15px (42), 10px (31), 4px (20), 1px (15), 30px (12), 7px (6).
- Stylesheet colours by count: #ffffff (517), #000000 (208), #000000cc (156), #ffffff33 (123), #0f0f0f (122), #00000099 (108), #00000000 (104), #ffffff1a (78), #dddddd (76), #1b7fcccc (72), #333333 (65), #00000080 (62), #666666 (49), #0000004d (44).
- Stylesheet font sizes: 14px, 12px, 20px, 18px, 16px, 11px, 21px, 28px, 15px, 13px, 24px, 22px, 10px, 32px.
- Stylesheet radii: 8px, 2px, 4px, 12px, 18px, 28px, 10px, 3px, 16px, 24px.
- Fonts loaded: True Medium-8d9e51ef1db84df5 500 normal, True Bold Special-41ae407e3d6c7408 bold normal, True Bold-aad26e60898f74bc bold normal, True-fa96c96df9a77f0c 300 normal, ByteArkPlayer 400 normal, Roboto 400 normal.
- Visible elements: 3586; document language: th; hover states recorded: 12.
