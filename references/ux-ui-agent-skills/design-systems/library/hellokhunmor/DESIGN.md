---
version: alpha
name: Hello Khunmor
category: "Thai Brands"
description: "Hello Khunmor, a Thai medically reviewed health-information site: white #ffffff canvas with #fafafa panels, #404040 body ink, blue #2d87f3 pill action buttons, Noto Sans Thai at 20px/600 section titles and 13px body, pastel sky #e3f2ff feature bands, navy #1b3250 footer and 8px to 24px rounded cards."
colors:
  canvas: "#ffffff"
  page-largest: "#fafafa"
  ink: "#404040"
  primary: "#2d87f3"
  on-primary: "#ffffff"
  accent-purple: "#5d0096"
  on-accent-purple: "#f2f2f2"
  surface-navy: "#1b3250"
  surface-sky: "#e3f2ff"
  ink-strong: "#1a1a1a"
  ink-heading: "#262626"
  ink-muted: "#595959"
  text-input-text: "#000000"
  text-input-border: "#e4e8ec"
  footer-text: "#f7f9fc"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", -apple-system, \"system-ui\", \"Segoe UI\", Oxygen, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
    letterSpacing: "-0.6px"
  banner-label:
    fontFamily: "\"Noto Sans Thai\", -apple-system, \"system-ui\", \"Segoe UI\", Oxygen, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  banner-label-mobile:
    fontFamily: "\"Noto Sans Thai\", -apple-system, \"system-ui\", \"Segoe UI\", Oxygen, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.3px"
  subheading:
    fontFamily: "\"Noto Sans Thai\", -apple-system, \"system-ui\", \"Segoe UI\", Oxygen, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 28px
    letterSpacing: "-0.4px"
  body:
    fontFamily: "\"Noto Sans Thai\", -apple-system, \"system-ui\", \"Segoe UI\", Oxygen, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: "-0.3px"
  button:
    fontFamily: "\"Noto Sans Thai\", -apple-system, \"system-ui\", \"Segoe UI\", Oxygen, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: "-0.3px"
  button-campaign:
    fontFamily: "\"Noto Sans Thai\", -apple-system, \"system-ui\", \"Segoe UI\", Oxygen, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
rounded:
  md: 6px
  lg: 8px
  xl: 10px
  2xl: 12px
  3xl: 16px
  4xl: 24px
  button: 48px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 22px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 22px
    height: 40px
  button-campaign:
    backgroundColor: "{colors.accent-purple}"
    textColor: "{colors.on-accent-purple}"
    typography: "{typography.button-campaign}"
    rounded: "{rounded.xl}"
    padding: 6px 12px
    height: 32px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.banner-label}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.banner-label-mobile}"
    rounded: "{rounded.lg}"
    padding: 0px 14px 0px 42px
    height: 40px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.4xl}"
  footer:
    backgroundColor: "{colors.surface-navy}"
    textColor: "{colors.footer-text}"
---

## Overview

Hello Khunmor (hellokhunmor.com, logo "hello คุณหมอ") is a Thai health-information platform run by Hello Health Group. Its page title and tagline read "ข้อมูลสุขภาพที่ได้รับการยืนยันทางการแพทย์", health information confirmed by medical professionals, and its About page says it launched in Thailand in 2020 with the mission "to help millions of people have comprehensive information to make decisions for better health and greater happiness". Content is organised into health categories (sleep, sexual health, aging, exercise, ENT), health tools (a BMI calculator and risk screeners), community forums, featured articles and an app called Clinity for finding clinics.

The design is a clean editorial-medical interface. The measured page (1280px wide, 5869px tall) is a white canvas with `#fafafa` background panels, a top announcement strip promoting the BMI calculator, a white header carrying the logo, a search field, category links (ตรวจ, เครื่องมือตรวจเช็กสุขภาพ, ชุมชน, ค้นหาคลินิกใกล้ฉัน) and a black "Clinity" app button. The body is a magazine grid: a large lead article with a photograph, a column of smaller stories with a small bookmark icon, a row of three illustrated or photographic articles, a pale-blue "featured topics" band with a carousel of colourful campaign posters, and a mint-tinted community band with illustrated topic cards. Each article card shows a coloured category label, a bold Thai headline, a reviewer line ("ตรวจสอบข้อมูลโดย ...") and an update date, which is how the site visualises its medical-review promise.

Measurement note: the capture is overlaid by a third-party advertising modal (a sign-up form for a parent-club campaign), a consent banner and a floating widget. The extractor was re-run once (`--only=hellokhunmor --force`) and the modal remained, so those overlays are excluded from the documented components, and the button roles were chosen from the page content (see Components).

## Colors

- **Canvas `#ffffff`** with the largest background area `#fafafa`, plus tinted bands: `#e3f2ff` (sky, featured topics), `#e0f7fc` (cyan) and `#e0f8ee` (mint, community).
- **Ink `#404040`** is the most-read text colour (1937 characters); stronger text is `#1a1a1a` (1411) and `#262626` (880, headings); `#595959` is for metadata.
- **Primary `#2d87f3`** is the blue used for the calculate button (the BMI "คำนวณ" action, white text) and for category label text (170 characters).
- **Campaign purple `#5d0096`** with `#f2f2f2` text fills the "เรียนรู้เพิ่มเติม" button on campaign cards; the extractor first detected it as the primary call to action, but the capture shows it on promotional cards, so it is kept as an accent.
- **Navy `#1b3250`** fills the footer, with `#f7f9fc` text.
- **Input** border `#e4e8ec` with `#000000` text on the search field.

## Typography

One family: **Noto Sans Thai** (a variable font, weights 100 to 900) with the system stack -apple-system, system-ui, Segoe UI, Oxygen, Ubuntu, Cantarell and Helvetica Neue behind it. It accounts for all 5612 measured characters. Weights are 400 (3178 characters), 600 (1667) and 500 (715).

- Display / section title: 20px/28px, weight 600, letter-spacing -0.6px (for example the BMI calculator heading).
- Subheading: 18px/28px, 600, -0.4px.
- Banner label: 16px/24px, 600; its mobile form is 15px/24px at 400 with -0.3px.
- Body: 13px/20px, 400, -0.3px. The most common size by characters is 14px (2100), then 12px (1214) and 16px (759).
- Buttons: 13px/500/-0.3px for the blue pill; 14px/500 for the campaign button.

Noto Sans Thai is the face to use; its Latin glyphs are consistent, so no substitute is required.

## Layout

The page width uses a centred container with a header whose height variable is `--header-height: 121px` (60px as `--default-header-height` on smaller layouts). The home page is a stack of bands: lead-story grid (two columns, large story left, two compact stories right), a three-column row of cards, a rounded full-width feature band, then a community band. Measured paddings by frequency are 16px (117), 6px (82), 12px (35), 8px, 24px, 21px, 22px and 40px.

## Elevation & Depth

Shadows are soft and layered. The most common is `rgba(0, 0, 0, 0.04) 0px 0px 1px 0px, rgba(0, 0, 0, 0.06) 0px 0px 2px 0px, rgba(0, 0, 0, 0.04) 0px 4px 8px 0px` (5 elements); others are `rgba(0, 0, 0, 0.05) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px 0px` (2) and a lifted `rgba(0, 0, 0, 0.1) 0px 8px 40px 0px` (1). Tonal pastel bands do most of the layering.

## Shapes

Radii in use: 8px (69 elements), 12px (34), 50% (29, avatars and icon buttons), 24px (16, the large rounded bands), 16px (9), 32px (8) and 6px (7). The blue button uses a 48px radius at 40px height, which renders as a pill; the campaign button is 10px; the search input is 8px; large feature bands are 24px.

## Components

- **Primary button ("คำนวณ"):** blue `#2d87f3` fill, white 13px weight-500 text, padding 0px 22px, height 40px, 48px radius (a pill at this height), 180px wide.
- **Campaign button ("เรียนรู้เพิ่มเติม"):** purple `#5d0096`, `#f2f2f2` text, 14px weight 500, padding 6px 12px, height 32px, 10px radius.
- **Search input:** white, `#e4e8ec` border, 8px radius, 40px high, padding 0px 14px 0px 42px to make room for a leading search icon.
- **Category chips:** pale grey `#f2f2f2` pills at 32px high with `#262626` text.
- **Article card:** photo or illustration, a blue category label, a 600-weight headline, reviewer avatar and byline.
- **Feature band:** large 24px-radius container in pale blue holding a poster carousel with circular arrow buttons and an outlined "ดูป๊อปไลต์ทั้งหมด" link button.
- **Footer:** navy `#1b3250` with `#f7f9fc` text.

## Design System Architecture

No public design system or brand guideline was found for Hello Khunmor itself. The site is part of Hello Health Group (its pages link to sister sites in other countries), and the shipped CSS carries a group-level token `--hhg-font-family: 'Noto Sans Thai', -apple-system, BlinkMacSystemFont, 'Segoe UI', Oxygen, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif` along with layout variables such as `--header-height`, `--default-header-height`, `--mobile-bottom-height` and several chat-widget offsets. Sources opened: https://hellokhunmor.com/ and https://hellokhunmor.com/about-us.

## Do's and Don'ts

- Do use Noto Sans Thai throughout, with 600 weight for headlines and 400 for body.
- Do tint section bands with pale blue, cyan and mint rather than strong colours.
- Do show reviewer name and update date on every article card.
- Do reserve blue `#2d87f3` for actions and category labels.
- Don't treat the sign-up modal, consent banner or chat widgets as brand UI.
- Don't use the purple campaign colour for primary actions.
- Don't use heavy shadows; keep to the soft layered recipes above.

## Responsive Behavior

At 390px the extractor measured the banner label at 15px, the section title at 17px and body text at 13px; the buttons stay at 13px. The header height variable drops to a 60px default and there is a `--mobile-bottom-height: 56px` variable for a bottom bar, which indicates a mobile bottom navigation exists in the stylesheet. Only the type sizes and these variables were measured.

## Iteration Guide

1. Start from `canvas #ffffff`, `ink #404040`, `primary #2d87f3` with white text and Noto Sans Thai.
2. Use 20px/600 titles and 13px body, with the negative letter-spacing recorded in the tokens.
3. Build primary buttons as 40px pills with a 48px radius; keep purple for campaign cards.
4. Layer pale bands (`#e3f2ff`, `#e0f7fc`, `#e0f8ee`) in 24px rounded containers.
5. Keep reviewer and date lines on every card to carry the medically-reviewed promise.
6. Re-measure with the extractor if the site changes.
