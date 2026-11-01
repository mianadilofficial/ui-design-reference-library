---
version: alpha
name: Sarakadee Magazine
category: "Thai Brands"
description: "Thai documentary magazine site at sarakadee.com. White canvas, #212529 ink, red #ff0000 SUBSCRIBE button, Anakotmai 36px headlines with Sarabun 16px/30px body, square black and white buttons, a split photo-and-dark-panel hero and a dark two-tone footer."
colors:
  canvas: "#ffffff"
  ink: "#212529"
  primary: "#ff0000"
  on-primary: "#ffffff"
  surface: "#161d19"
  surface-2: "#0f1411"
  surface-3: "#f9f9f9"
  ink-3: "#0000008f"
  ink-4: "#727272"
  ink-5: "#d1d3d2"
  ink-6: "#3c4043"
  hairline: "#d7d7d7"
  button-secondary-bg: "#000000"
  nav-link-text: "#1b1b1b"
typography:
  display:
    fontFamily: anakotmai-med, sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 54px
  display-mobile:
    fontFamily: anakotmai-med, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 36px
  subheading:
    fontFamily: anakotmai-med, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 30px
  body:
    fontFamily: Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 30px
  button:
    fontFamily: anakotmai-med, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: 0.42px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 4px
  md: 20px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 5px
  s4: 6px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 13px 26px 12px
    height: 46px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 16px 32px
    height: 55px
    borderColor: "{colors.button-secondary-bg}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.button-secondary-bg}"
    rounded: "{rounded.none}"
    padding: 0px 30px
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.ink-4}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 1px 2px 5px
    height: 50px
  footer:
    textColor: "{colors.ink-5}"
    rounded: "{rounded.none}"
---

# Sarakadee Magazine (สารคดี)

## Overview
The measured page is https://www.sarakadee.com/, titled "Sarakadee Magazine - Sarakadee Magazine", the website of the Thai documentary magazine published by Wiriyah Business. The queued brand name is the publisher; the site measured is the magazine's own. The page is 1280px wide and 9077px tall. The header is a white two-row bar: a top row with a menu icon, a "สมัครสมาชิก ANSi" (ANSi membership) button, a login button, the centered angular wordmark "สารคดี", a "Back Issue" link, a search icon and a thumbnail of the current issue (issue ๔๙๘, September 2569, with a red "SUBSCRIBE" style button and "ดูเนื้อหาในเล่ม" link); a second row lists Article, Activity, ANSI, e-Library and Flipbooks with small dropdown carets. Below is a split hero slider: a large photograph on the left and a near-black panel on the right with a bracketed category label such as "[ Culture ]", a 36px white headline, date and author, and a slide counter "4 / 6" with arrows. Then come "LATEST ARTICLES" as a three-column grid of image cards with bracketed categories (History, Planet, Communities), a black "ดูบทความเพิ่มเติม" button, a collapsible "สำรวจเพิ่มเติม" list, and "SPECIAL ARTICLES".

A floating pill reading "อ่านนิตยสาร" with a close icon appears over the lower hero in the capture; it is a third-party-style floating widget and is not documented as brand UI.

## Colors
The page is mostly neutral: white canvas `#ffffff`, text `#212529`, link and nav text `#1b1b1b`, muted body copy `#0000008f` (black at 56 percent) and `#727272`, borders `#d7d7d7` and `#ececec`. The extractor's primary is pure red `#ff0000` on the "SUBSCRIBE" button with white text; this is the sole saturated interface color. Dark surfaces are `#161d19` and `#0f1411` (the footer is a two-tone split gradient from `rgb(22, 29, 25)` to `rgb(29, 36, 32)`), and `#f9f9f9` is a pale surface. The black button uses `#000000`. The site is a WordPress theme whose root variables include `--wl-green: #92C428`, `--wl-black: #0a0a0a`, `--wl-beauty-tertiary: #5c146f` and Bootstrap-like `--yellow` and `--pink`; they are theme variables that the measured page does not show as UI colors, so they are not tokenised. Editorial covers bring their own color: neon green display lettering on photographs is artwork.

## Typography
Thai text is set in two families. Anakotmai (medium `anakotmai-med` and light `anakotmai-li`) is the headline and UI face: the hero headline is 36px/54px at 500, article card titles 20px/30px at 500, buttons and nav links 14px/21px uppercase with 0.42px tracking, and the footer 15px/22.5px. Sarabun 400 is the reading face: body copy 16px on a 30px line height in `#0000008f`, and inputs 16px. Google Sans (400, 700) and Roboto 500 appear in embedded widgets. The size ladder by characters: 16px, 12px, 20px, 14px, 36px, 27px, 18px, 32px and 40px. On mobile the hero headline is 24px/36px and body copy 14px/26.25px.

## Layout
The page uses full-width bands: header, split hero (about half photograph, half dark text panel), a section heading centered with a short black rule beneath ("LATEST ARTICLES"), a three-column grid of cards with a 16:9-style image above a category, title and byline, then repeated sections. Header padding is 0px 30px at desktop and 10px 10px 14px on mobile. Spacing values measured: 2, 3, 5, 6, 10, 12, 14, 15, 16 and 20px. The footer is 366px tall with link columns (About Us, Shop, Subscribe, e-Library, Contributor, Contact, FAQ).

## Imagery and Voice
Covers and article images are graphic and typographic: each story gets a bespoke illustrated or photographed title card with the magazine's bracket mark in a corner, large neon-green or white Thai display lettering over documentary photographs (boats at a pier, mural paintings, forest rivers, handwoven textiles, solar panels). Subjects are history, planet, communities and culture. Headlines are noun-phrase titles with a question or dash subtitle, and bylines name the author with a date in Thai month format, for example "30 กันยายน 2026". English section headings (LATEST ARTICLES, SPECIAL ARTICLES) are set in capitals above Thai content.

## Elevation & Depth
Shadows are few and soft: `rgba(0, 0, 0, 0.1) 0px 2px 4px 0px`, `rgba(0, 0, 0, 0.25) 0px 8px 16px 0px` and a large `rgba(0, 0, 0, 0.34) 22px 20px 60px 0px`. The WordPress shadow presets (outlined, crisp and similar) are declared on the root. Separation is mostly by white space, thin `#d7d7d7` rules and the dark hero panel.

## Shapes
Radii: 50% (12 elements, round icon buttons and avatars), 20px, 4px, `4px 4px 0px 0px`, and 2px. Buttons (SUBSCRIBE, black "ดูบทความเพิ่มเติม", the white "รายละเอียดในเล่ม") compute square corners; the images are square cornered in cards.

## Components
**Primary button:** "SUBSCRIBE", `#ff0000` fill, white anakotmai 14px uppercase with 0.42px tracking, padding 13px 26px 12px, 46px high, square. Its decorative `::before` layer is white and scaled to zero width at rest, which is the fill-sweep hover mechanism. **Secondary button:** "ดูบทความเพิ่มเติม", black fill and border, white text, padding 16px 32px, 55px high. **White button:** "รายละเอียดในเล่ม", white fill, `#1b1b1b` text, padding 16px 40px, 53px high, with a `#0f1411` sweep layer. **Header member buttons:** white with `#ececec` border, 47px high; measured hover turns text white as a layer fills. **Article card:** image, bracketed category in a small colored label, title in anakotmai 20px, date and author in 12px grey. **Accordion list:** pale blue header "สำรวจเพิ่มเติม" with chevron rows. **Footer:** dark split background with `#d1d3d2` text.

## Design System Architecture
No public design system or brand guideline was opened; `_research` records `none: true`. The site is a WordPress theme with Bootstrap-style variable names (`--light`, `--yellow`, `--pink`), WordPress block presets (`--wp--preset--*`), Font Awesome 5 Pro and 6 Free icon sets and `dashicons`. The brand-specific layer is the Anakotmai and Sarabun type pairing, the bracketed category labels and the sweep-fill button animation. Source: https://www.sarakadee.com/ measured into web/data/extracted/sarakadee-books-wiriyah-business.json.

## Do's and Don'ts
- Do set headlines in Anakotmai 500 and long text in Sarabun at 16px/30px.
- Do use black or white square buttons for most actions and `#ff0000` only for the subscription action.
- Do bracket category labels as in "[ History ]".
- Do keep buttons at 0px radius and use 50% only on round icon controls.
- Don't use the WordPress preset palette or the theme's `--wl-green` as interface colors on this page.
- Don't treat the floating "อ่านนิตยสาร" pill as a brand component.
- Don't put drop shadows on cards; the measured shadows are on overlays.

## Responsive Behavior
The 390px mobile pass recorded the header as a 65px bar whose only text is "Open Menu" with 10px 10px 14px padding; the hero headline falls to 24px/36px, body copy to 14px/26.25px and the SUBSCRIBE button keeps 14px uppercase with 0.42px tracking and `#ff0000` fill. Card columns and slider behaviour on mobile are not measured.

## Iteration Guide
1. Canvas `#ffffff`, ink `#212529`, action red `#ff0000`, dark surfaces `#161d19` and `#0f1411`.
2. Anakotmai 500 36px/54px hero headlines; Sarabun 16px/30px body.
3. Square 46 to 55px buttons with a white sweep fill on hover.
4. A split hero: photograph plus black panel with a bracketed category.
5. Three-column article grids under a centered heading with a short black rule.
6. Run `node web/scripts/verify-designs.mjs --slug=sarakadee-books-wiriyah-business`.
